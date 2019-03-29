<div class="header-upper">
    <div class="container">
        <div class="clearfix">
            
            <div class="pull-left logo-outer">
                <div class="logo">
                    <a href="index-2.html"><img src="{{ asset('front_end/images/logo/logo.png') }}" alt=""></a>
                </div>
            </div>
            
            <div class="pull-right upper-right clearfix">
                
                <!--Info Box-->
                <div class="upper-column info-box">
                    <div class="icon-box"><span class="icon-phone"></span></div>
                    <ul>
                        <li><strong>320 4567 345</strong></li>
                        <li><a href="#">info@example.com</a></li>
                    </ul>
                </div>

                <!--Info Box-->
                <div class="upper-column info-box">
                    <div class="icon-box"><span class="glyphicon glyphicon-user"></span></div>
                    <ul>
                        <li><strong>Welcome {{Auth::user()->name}}</strong></li>
                        <li><a  href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();"><i class="ti-key"></i>{{ __('Logout') }}</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                        </form>
                    </ul>
                </div>
                
                <!--Info Box-->
                <div class="upper-column info-box">
                    <div class="social-links-one">
                        <a href="#"><span class="fa fa-facebook-f"></span></a>
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-google-plus"></span></a>
                        <a href="#"><span class="fa fa-linkedin"></span></a>
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
</div> 