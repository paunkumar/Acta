<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Resume;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\ContactFormSubmitted;

class ContactController extends Controller
{
    
    public function store(Request $request)
    {
        try {
            // Validate the form input
            $validatedData = $request->validate([
                'firstname' => 'required|max:255',
                'lastname' => 'required|max:255',
                'email' => 'required|email',
                'contact_number' => 'required|numeric',
                'message' => 'required',
            ]);

            // Create a new Contact model instance
            $contact = new Contact();
            $contact->firstname = $request->firstname;
            $contact->lastname = $request->lastname;
            $contact->email = $request->email;
            $contact->contact_number = $request->contact_number;
            $contact->message = $request->message;

            // Save the contact to the database
            $contact->save();

            // Send an email to the admin
            Mail::to(config('app.mail_admin_address'))->send(new ContactFormSubmitted($contact));

            // Return a JSON response
            return response()->json([
                'message' => 'Contact form submitted successfully!',
                'status' => 'OK'
            ], 200);
        } catch (ValidationException $e) {
            // Return a JSON response with the error messages
            return response()->json([
                'errors' => $e->validator->errors()
            ], 422);
        }
    }

    public function uploadResume(Request $request)
    {
        try {
            // Validate the form input
            $validatedData = $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|email',
                'contact_number' => 'required|numeric',
                'job_type' => 'required',
                'current_location' => 'required',
                'experience' => 'required',
                'resume' => 'required|mimes:doc,docx,pdf,odt,rtf',
            ]);

            $resume = new Resume();
            $resume->name = $request->name;
            $resume->email = $request->email;
            $resume->contact_number = $request->contact_number;
            $resume->job_type = $request->job_type;
            $resume->current_location = $request->current_location;
            $resume->experience = $request->experience;

            // Handle the uploaded file
            if ($request->hasFile('resume') && $request->file('resume')->isValid()) {
                // Get the uploaded file
                $file = $request->file('resume');
        
                // Generate a unique file name
                $fileName = Str::slug($resume->name).'-'.uniqid() . '.' . $file->getClientOriginalExtension();
        
                // Store the file in the public storage directory
                $file->storeAs('public/resumes', $fileName);
                $file->move(public_path('resumes'), $fileName);
        
                // Save the file name to the database
                $resume->resume = $fileName;
                $resume->save();
            }
        
            // Save the resume to the database
            $resume->save();

            // Return a JSON response
            return response()->json([
                'message' => 'Resume submitted successfully!',
                'status' => 'OK'
            ], 200);
        } catch (ValidationException $e) {
            // Return a JSON response with the error messages
            return response()->json([
                'errors' => $e->validator->errors()
            ], 422);
        }
    }

    public function listcontact()
    {
        $contacts = Contact::orderBy('id', 'desc')->get();

        return view('admin.contacts.list', ['contacts' => $contacts]);
    }


}
