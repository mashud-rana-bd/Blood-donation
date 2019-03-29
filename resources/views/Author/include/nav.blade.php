<section class="theme_menu stricky">
    <div class="container">
        <div class="row">
            
            <div class="col-md-9 menu-column">
                <nav class="defaultmainmenu" id="main_menu">
                   <ul class="defaultmainmenu-menu">
                        <li><a href="{{ route('/') }}">Home</a></li>

                        @foreach ($mainnavs as $mainnav)
                            <li><a href="{{ route('show_singel_menu',['id'=>$mainnav->id]) }}">{{ $mainnav->menu_name }}</a></li>
                        @endforeach

                        {{-- <li class="active"><a href="#">About Us</a>
                        <ul class="dropdown">
                            <li><a href="about.html">About us</a></li>
                            <li><a href="team.html">Meet Our Team</a></li>
                            <li><a href="volunteer.html">Join as Volunteer</a></li>
                            <li><a href="faq.html">FAQ’s</a></li>
                            <li><a href="testimonial.html">Testimonials</a></li>
                         </ul>
                        </li>

                        <li><a href="cause-1.html">Causes</a>
                        <ul class="dropdown">
                            <li><a href="cause-1.html">Causes</a></li>
                            <li><a href="single-cause.html">Single Causes</a></li>
                         </ul>
                        </li>

                        <li><a href="#">Events</a>
                        <ul class="dropdown">
                            <li><a href="event-1.html">Events</a></li>
                            <li><a href="single-event.html">Event Single</a></li>
                         </ul>
                        </li>

                        <li><a href="gallery-1.html">Gallery</a>
                        <ul class="dropdown">
                            <li><a href="gallery-1.html">gallery</a></li>
                            <li><a href="single-gallery.html">Single gallery</a></li>
                         </ul>
                        </li>


                        <li><a href="#">Shop</a>
                        <ul class="dropdown">
                            <li><a href="shop.html">Shop Products</a></li>
                            <li><a href="shop-single.html">Single Shop</a></li>
                            <li><a href="shop-cart.html">Shopping Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="account.html">My Account</a></li>
                        </ul>
                        </li>

                        <li><a href="blog-1.html">blog</a>
                        <ul class="dropdown">
                            <li><a href="blog-1.html">Blog Grid View</a></li>
                            <li><a href="blog-large.html">Blog With Sidebar</a></li>
                            <li><a href="blog-details.html">Single Post</a></li>
                         </ul>
                        </li> --}}
                        <li><a href="contact.html">Contact</a></li>

                    </ul>
                </nav> 
            </div>
            <div class="right-column">

                <div class="nav_side_content">
                    <ul class="social-icon">
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <div class="search_option">
                        <button class="search tran3s dropdown-toggle color1_bg" id="searchDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search" aria-hidden="true"></i></button>
                        <form action="#" class="dropdown-menu" aria-labelledby="searchDropdown">
                            <input type="text" placeholder="Search...">
                            <button><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                   </div>
               </div>
                    
            </div>


        </div>
                

   </div>
</section>