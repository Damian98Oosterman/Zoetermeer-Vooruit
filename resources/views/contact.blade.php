<div id="contact">
@extends('layouts.app')
@section('content')
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2453.5255493770815!2d4.5057477157900845!3d52.05195357972834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5cece285933f7%3A0x2e912a6b941334f7!2sVan+Boisotring+29%2C+2722+AA+Zoetermeer!5e0!3m2!1snl!2snl!4v1491981637622" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
<div class="container-fluid">
 <div class="col-md-12">
        </div>
        </div>
    <div class="container">
        <div class="col-sm-6">
            <div class="well">
            <legend class="text-center header">@lang('contact.panel.heading')</legend>
                <h3><i class="fa fa-user fa-1x" style="line-height:6%;"></i> Contactpersoon:</h3>
                <p style="margin-top:6%;line-height:35%">M.J. (Juliëtte) Meurs-Troch</p>
                <br />
                <br />
				<h3><i class="fa fa-home fa-1x" style="line-height:6%;"></i> Adres:</h3>
				<p style="margin-top:6%;line-height:35%">Van Boisotring 29,<br><br><br>2722 AA Zoetermeer</p>
                <br />
                <br />
                <h3><i class="fa fa-envelope fa-1x" style="line-height:6%;"></i> E-Mail Adres:</h3>
                <p style="margin-top:6%;line-height:35%"><a class="email-fix" href="mailto:contact@zoetermeervooruit.nl">contact@zoetermeervooruit.nl</a></p>
                <br />
                <br />
                <h3><i class="fa fa-phone fa-1x" style="line-height:6%;"></i>Telefoonnummer:</h3>
                <p style="margin-top:6%;line-height:35%">06-55727274</p>

            </div>
        </div>
        <div class="col-sm-6">
            <div class="well">
            <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header">@lang('contact.form.heading')</legend>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="fname" name="name" type="text" placeholder="First Name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="lname" name="name" type="text" placeholder="Last Name"  required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="email" name="email" type="text" placeholder="Email Address"  required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="phone" name="phone" type="text" placeholder="Phone" >
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <textarea class="form-control" id="message" name="message" placeholder="Enter your message for us here. We will get back to you within 2 business days." rows="7" required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        </div>




@endsection
</div>