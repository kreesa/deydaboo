<section>
    <nav class="navbar navbar-transparent">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset ('logo/logo.png') }}" class="logo">
            </a>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>

            

            <div class="collapse navbar-collapse myNavbar inline-flex" id="myNavbar">
                {{-- 
                <div class="div-mainlogo"> 
                    <a class="navbar-mainlogo" href="#">
                        <img src="{{ asset ('logo/logo.png') }}" class="logo">
                    </a>
                </div> --}}

                <ul class="nav navbar-nav justify-content-center">
                <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>

                <li class="nav-item {{ (request()->is('about-us')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('about-us') }}">About Us</a>
                </li>

                <div class="nav-item dropdown">
                    <button class="nav-link dropbtn">Media 
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="{{ route('media') }} #audio">Audio</a>
                        <a href="{{ route('media') }} #video">Video</a>
                        <a href="{{ route('media') }} #gallery">Gallery</a>
                    </div>
                </div>

                <li class="nav-item {{ (request()->is('about-us')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('programs') }}">Events</a>
                </li>

                <div class="nav-item dropdown">
                    <button class="nav-link dropbtn" >Publications
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="{{ route('publications') }} #pdf">pdf</a>
                        <a href="{{ route('publications') }} #books">Books</a>
                        <a href="{{ route('publications') }} #journals">Journals</a>
                    </div>
                </div>
               
                <li class="nav-item {{ (request()->is('contact-us')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('contactus') }}">Contact Us</a>
                </li>
                    
                </ul>
            </div>
        </div>
	</nav>



</section>