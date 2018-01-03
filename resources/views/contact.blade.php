@extends ('layouts.master')

@section ('content')
<div class="hidden">
<header class="contactHead">

</header>

<div class="col-md-12">
<div class="successAlert">
<!-- Email success message -->
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
</div>
</div>

<div class="contactBottom">
<div class="container">
    <div class="row">
        <div class="col-lg-6 text-center">          
            <div class="yoMama">         
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3344.778541874549!2d-97.06727904963454!3d33.03596447795097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864c2c49fb09d8e5%3A0x1908989534d298c5!2sFulcrum+Point+Technologies!5e0!3m2!1sen!2sus!4v1503436897164" width="100%" height="225" frameborder="0" style="border-radius: .25rem;" allowfullscreen></iframe>

            <div class="staticContact">
                <span class="boldText"><strong>Email: </strong><a href="mailto:info@fulcrumpointtechnologies.com">info@fulcrumpointtechnologies.com</a></span><br>
                <span class="boldText"><strong>Phone: </strong>(972) 591-3815</span><br>
                <span class="boldText"><strong>Address: </strong> 
                3700 River Walk Drive, Suite 175<br>
                Flower Mound, TX 75028
                <br>
                <small><a href="https://www.google.com/maps/dir//Fulcrum+Point+Technologies,+3700+River+Walk+Dr+%23175,+Flower+Mound,+TX+75028/@33.0359551,-97.1001904,13z/data=!3m1!4b1!4m9!4m8!1m0!1m5!1m1!1s0x864c2c49fb09d8e5:0x1908989534d298c5!2m2!1d-97.065085!2d33.03596!3e0" target="_blank">Map it</a></small>
                </span>
            </div>
            </div>
        </div>


<div class="col-lg-6 text-center">
<div class="contactStyle">

<form id="contact-form" method="POST" action="/" role="form" width="100%" >
{{ csrf_field() }}
    <div class="messages"></div>
        <div class="controls">

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_name"></label>
                    <input id="form_name" type="text" name="firstName" class="form-control" placeholder="First Name:" required="required" data-error="Firstname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_lastname"></label>
                    <input id="form_lastname" type="text" name="lastName" class="form-control" placeholder="Last Name:" required="required" data-error="Lastname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_email"></label>
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Email:" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_phone"></label>
                    <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Phone Number:">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_message"></label>
                    <textarea id="form_message" name="message" class="form-control" placeholder="Message:" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        
            <div class="col-md-12">
            <div class="text-right">
            <div class="sendBtn">
                <input type="submit" class="btn btn-primary btn-md btn-send" value="Send message">
            </div>
            </div>
        </div>
        </div>     
    </div>
</form>

            
</div>
</div>

    </div>
</div>
</div>
</div>



@endsection