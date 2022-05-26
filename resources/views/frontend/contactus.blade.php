@extends('master')

@section('content')

@include('sections.contactform')


<section class="googlemap">
<div class="contactinfo">
		<div class="container-fluid" style="padding-left:0px; padding-right:0px;">
			<div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.2072453477776!2d85.30070911506218!3d27.71088678279031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18fa01273de3%3A0xb7917901ff70adfd!2sNewa%20Dey%20Daboo!5e0!3m2!1sen!2snp!4v1653599168169!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>      
            </div>
			<div class="col-md-6 dark-background" style="height:450px; text-align:left; ">
                <li class="d-flex justify-content-start" >
                    <span class="footer-desc justify-content-center" style="margin-top:8%;">
                        <p style="font-size:2rem;">
                            <strong>Location:</strong> <br>
                            Puspalal Path 17, <br>
                            काठमाडौँ 44600, <br>
                            Nepal <br> <br>
                            <strong> Opening Time: </strong> <br>Monday to Friday 10:00 AM to 6:00 PM <br><br>
                            <strong> Call us for queries: </strong> <br><a href="tel:+971 014269029">+971 014269029  </a> <br>
                        </p>
                    </span>
                </li>
			</div>
            
		</div>
	</div>
</section>






@endsection
