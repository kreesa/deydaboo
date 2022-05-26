<section>
<div class="contactform" id="contactform">
		<div class="container" style="margin:50px auto;">
		<h3>Feel free to contact us!!!</h3>
	        
			@if(session()->has('message_sent'))
				<div class="alert alert-success">
					{{ session()->get('message_sent') }}
				</div>
			@endif
		
			
			<form id="reponse-form" method="POST" action="{{ route('contactus.store') }}" enctype="multipart/form-data">
	        <!-- {{ csrf_field() }}     -->
				
            	<div class="form-group">
	                <div class="col-md-6">

					
	                    <input type="text"  name="name" class="form-control lg-input" id="name" placeholder="Your Name" value="{{ old('name') }}">
						@if ($errors->has('name'))
							<span class="text-danger">{{ $errors->first('name') }}</span>
						@endif

						<input type="text" name="email" class="form-control lg-input" id="email" placeholder="Your Email" value="{{ old('email') }}">
						@if ($errors->has('email'))
							<span class="text-danger">{{ $errors->first('email') }}</span>
						@endif


						<input type="text"  name="address" class="form-control lg-input" id="address" placeholder="Your Address" value="{{ old('address') }}">
						@if ($errors->has('address'))
							<span class="text-danger">{{ $errors->first('address') }}</span>
						@endif


						<input type="text" name="phone" class="form-control lg-input" id="phone" placeholder="Your Phone Number" value="{{ old('phone') }}">
						@if ($errors->has('phone'))
							<span class="text-danger">{{ $errors->first('phone') }}</span>
						@endif


	                </div>
	                <div class="col-md-6">
						<input type="text" name="subject" class="form-control lg-input" id="subject" placeholder="Enter Subject" value="{{ old('subject') }}">
						@if ($errors->has('subject'))
							<span class="text-danger">{{ $errors->first('subject') }}</span>
						@endif


						<textarea name="message" rows="7" class="form-control textarea" id="message" placeholder="Write down your queries here...">{{ old('message') }}</textarea>
						@if ($errors->has('message'))
							<span class="text-danger">{{ $errors->first('message') }}</span>
						@endif

	                </div>
	                
	            </div>
                <input type="submit" class="btn more-button btn-submit" value="Send message">
	        </form>

	    </div>
	</div>
</section>