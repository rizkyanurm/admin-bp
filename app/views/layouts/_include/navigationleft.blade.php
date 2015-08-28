<ul class="x-navigation">
    <li class="xn-logo">
        <a href="{{ url('/')}}">BIMAPROTEKSI</a>
        <a href="#" class="x-navigation-control"></a>
    </li>
    <li class="xn-profile">
        <a href="#" class="profile-mini">
            <img src="{{URL::to('assets/assets/images/users/avatar.jpg')}}" alt="John Doe"/>
        </a>
        <div class="profile">
            <div class="profile-image">
                <img src="{{URL::to('assets/assets/images/users/avatar.jpg')}}" alt="John Doe"/>
            </div>
            <div class="profile-data">
                <div class="profile-data-name">Oemah</div>
                <div class="profile-data-title">Web Developer/Designer</div>
            </div>
            <div class="profile-controls">
                <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
            </div>
        </div>                                                                        
    </li>
    <li class="xn-title">Navigation</li>

    
        @yield('navigation')              
</ul>