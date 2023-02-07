@component('mail::message')
# New Contact Form Submission

A new contact form has been submitted with the following information:

<p>First Name: {{ $contact->firstname }} </p>
<p>Last Name: {{ $contact->lastname }} </p>
<p>Email: {{ $contact->email }} </p>
<p>Contact Number: {{ $contact->contact_number }} </p>

Message:

{{ $contact->message }}

@component('mail::button', ['url' => 'https://www.actaintl.com/admin/login'])
View Contact
@endcomponent

Thanks,<br>
{{ config('app.name') }}

@endcomponent
