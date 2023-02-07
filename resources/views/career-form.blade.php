<div id="career-new" class="careernew aos-init aos-animate" data-aos="fade-up">
                        
    <div class="col-lg-12">
        <h4>Always looking for passionate people to<br>
            make our team better<br>
            <span class="sub-text-color">Register Here</span></h4>
        <div class="form">
            <form id="myCareerForm" action="{{ url('/upload-resume') }}" method="post" role="form" class="php-file-form">         @csrf
                <div class="row">
                    <div class="form-group mobile-form col-md-6">
                        <label for="name" class="mb-2 text-bold">Name<span class="text-red">*</span></label>
                        <input type="text" class="form-control" id="name" placeholder="" name="name"> 
                        <input type="hidden" class="form-control" id="jobid" placeholder="" value="{{$jobid}}" name="jobid">
                        <span id="nameError" class="error"></span>
                    </div>
                    <div class="form-group mobile-form col-md-6">
                        <label for="email" class="mb-2">E-Mail Id<span class="text-red">*</span></label>
                        <input type="text" class="form-control" id="email" placeholder="" name="email">
                        <span id="emailError" class="error"></span>
                    </div>
                </div>
                <div class="row contact-row">
                    
                    <div class="form-group mobile-form col-md-6">
                        <label for="contact_number" class="mb-2">Contact Number<span class="text-red">*</span></label>
                        <input type="text" class="form-control" id="contact_number" placeholder="" name="contact_number">  
                        <span id="contactNumberError" class="error"></span>
                    </div>
                    <div class="form-group mobile-form col-md-6">
                        <label for="job_type" class="mb-2">Job/Intership<span class="text-red">*</span></label>
                        <input type="text" class="form-control" id="job_type" placeholder="" name="job_type">  
                        <span id="jobTypeError" class="error"></span>
                    </div>
                    
                </div>
                <div class="row contact-row">
                    
                    <div class="form-group mobile-form col-md-6">
                        <label for="current_location" class="mb-2">Current Location<span class="text-red">*</span></label>
                        <input type="text" class="form-control" id="current_location" placeholder="" name="current_location">  
                        <span id="currentLocationError" class="error"></span>
                    </div>
                    <div class="form-group mobile-form col-md-6">
                        <label for="experience" class="mb-2">Experience, if any<span class="text-red">*</span></label>
                        <input type="text" class="form-control" id="experience" placeholder="" name="experience">  
                        <span id="experienceError" class="error"></span>
                    </div>
                    
                </div>
                <div class="row contact-row">
                    
                    <div class="file-upload">
                        <label>Attach Resume<span class="text-red">*</span> </label>
                        <div class="image-upload-wrap">
                            <input class="file-upload-input" type='file' name="resume" onchange="readURL(this);" accept="application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document, application/pdf, application/vnd.oasis.opendocument.text, application/rtf" />
                            <div class="drag-text">
                                <h3><span class="sub-text-color">Upload your resume</span> or drag and drop it here</h3>
                                <p>Only .doc, .docx, .pdf, .odt, .rtf</p>
                            </div>
                        </div>
                        <div class="file-upload-content">
                            <img class="file-upload-image" src="#" alt="your image" />
                            <div class="image-title-wrap">
                                <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                            </div>
                        </div>
                        <span id="fileTypeError" class="error"></span>
                    </div>

                </div>
                <div class="my-3">
                    <div class="loading"></div>
                    <div class="error-message text-danger"></div>
                    <div class="sent-message text-success"></div>
                </div>
                <div class="row contact-row">
                    <div class="text-center"><button type="submit" class="apply" title="Submit">Submit</button></div>
                </div>
            </form>
        </div>
    </div>
</div>