@extends('master')

@section('content')

<section class="googlemap">
<div class="contactinfo">
		<div class="container-fluid" style="padding-left:0px; padding-right:0px;">
			
			<!-- <div class="col-md-12" style="float-right">
            <span>
                <a href="#" target="_blank">
                    Khalid Bin Al Waleed Road Bur Dubai, <br>
                    Behind Parthas Textiles, <br>
                    Dubai, U.A.E.
                </a>
            </span>
			</div> -->
            <div class="">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115537.68999601337!2d55.18266850739984!3d25.184573262904443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43322115189f%3A0x8605479f3b14d5be!2sK%26K%20TEXTILES%20%26%20TAILORING%20LLC!5e0!3m2!1sen!2snp!4v1626967727398!5m2!1sen!2snp" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
		</div>
	</div>
</section>



@include('sections.contactform')


@endsection
