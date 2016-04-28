<ul class="x-navigation">
    <li>
        <a href="{{ url('/homeadmin')}}"></a>
        <a href="#" class="x-navigation-control"></a>
    </li>
    <li class="xn-profile">
        <a href="#" class="profile-mini">
            <img src="{{URL::to('Bimapro.png')}}" alt="John Doe"/>
        </a>
        <div class="profile">
            <div class="profile-image">
                <img src="{{URL::to('Bimapro.png')}}" alt="John Doe"/>
            </div>
            <div class="profile-data">
                <div class="profile-data-name">Bimaproteksi</div>
                <div class="profile-data-title">Web Developer/Designer</div>
            </div>
            
        </div>
    </li>
    <li class="xn-title">Navigation</li>


        @yield('navigation')
</ul>
