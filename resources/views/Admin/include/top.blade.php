<a href="index.html" class="logo"> 
    <span class="logo-mini">
        <img src="{{ asset('admin/assets/dist/img/logo-mini.png') }}" alt="img">
    </span>
    <span class="logo-lg">
        <img src="{{ asset('admin/assets/dist/img/logo.png') }}" alt="img">
    </span>
</a>
<nav class="navbar navbar-static-top">
    <a href="#" class="sidebar-toggle hidden-sm hidden-md hidden-lg" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="ti-menu-alt"></span>
    </a>
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <li>
                <form class="navbar-form hidden-xs" role="search">
                    <div class="input-group add-on">
                        <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit" data-toggle="tooltip" data-placement="bottom" title="Search"><i class="ti-search"></i></button>
                        </div>
                    </div>
                </form>
            </li>
            <li class="dropdown dropdown-settings">
                <a href="#" class="dropdown-toggle bubbly-button" data-toggle="dropdown"> <i class="fa fa-bell-o"></i><span class="badge fadeAnim">2</span></a>
                <div class="notification-box dropdown-menu animated bounceIn">
                    <div class="notification-header">
                        <h4>2 new notifications</h4>
                        <a href="#">clear all</a>
                    </div>
                    <div class="notification-body">
                        <ul class="notification_inner">
                            <li>
                              <a href="#" class="single-notification">
                                 <div class="notification-img">
                                    <i class="fa fa-commenting"></i>
                                 </div>
                                 <div class="notification-txt">
                                    <h4>3 new comments</h4>
                                    <span>40 seconds ago</span>
                                 </div>
                              </a>
                            </li>
                            <li>
                              <a href="#" class="single-notification">
                                 <div class="notification-img">
                                    <i class="fa fa-envelope-o"></i>
                                 </div>
                                 <div class="notification-txt">
                                    <h4>You have received 1 email</h4>
                                    <span>5 minutes ago</span>
                                 </div>
                              </a>
                           </li>
                           <li>
                              <a href="#" class="single-notification">
                                 <div class="notification-img">
                                    <i class="fa fa-usd"></i>
                                 </div>
                                 <div class="notification-txt">
                                    <h4>You have transferred $50</h4>
                                    <span>8 minutes ago</span>
                                 </div>
                              </a>
                           </li>
                           <li>
                              <a href="#" class="single-notification">
                                 <div class="notification-img">
                                    <i class="fa fa-thumbs-up"></i>
                                 </div>
                                 <div class="notification-txt">
                                    <h4>Someone likes your post</h4>
                                    <span>13 minutes ago</span>
                                 </div>
                              </a>
                           </li>
                           <li>
                              <a href="#" class="single-notification">
                                 <div class="notification-img">
                                    <i class="fa fa-ban "></i>
                                 </div>
                                 <div class="notification-txt">
                                    <h4>Someone banned your post</h4>
                                    <span>20 minutes ago</span>
                                 </div>
                              </a>
                           </li>
                           <li>
                              <a href="#" class="single-notification">
                                 <div class="notification-img">
                                    <i class="fa fa-trash"></i>
                                 </div>
                                 <div class="notification-txt">
                                    <h4>Someone deleted your post</h4>
                                    <span>36 minutes ago</span>
                                 </div>
                              </a>
                           </li>
                        </ul>
                    </div>
                    <div class="notification-footer">
                        <a href="#">see all notification<i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </li>
            <li class="dropdown dropdown-settings">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="ti-email"></i><span class="badge fadeAnim">3</span></a>
                <div class="dropdown-menu msg_box">
                    <div class="message-header">
                        <h4>3 new messages</h4>
                    </div>
                    <div class="message-body">
                        <div class=message_inner2>
                            <div class=message_widgets>
                                <a href="#">
                                    <div class=inbox-item>
                                        <div class=inbox-item-img><img src="{{ asset('admin/assets/dist/img/avatar.png') }}" class=img-circle alt=""></div>
                                        <strong class=inbox-item-author>Farzana Yasmin</strong>
                                        <span class=inbox-item-date>-13:40 PM</span>
                                        <p class=inbox-item-text>Hey! there I'm available...</p>
                                        <span class="profile-status available pull-right"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class=inbox-item>
                                        <div class=inbox-item-img><img src="{{ asset('admin/assets/dist/img/avatar2.png') }}" class=img-circle alt=""></div>
                                        <strong class=inbox-item-author>Mubin Khan</strong>
                                        <span class=inbox-item-date>-13:40 PM</span>
                                        <p class=inbox-item-text>Hey! there I'm available...</p>
                                        <span class="profile-status away pull-right"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class=inbox-item>
                                        <div class=inbox-item-img><img src="{{ asset('admin/assets/dist/img/avatar3.png') }}" class=img-circle alt=""></div>
                                        <strong class=inbox-item-author>Mozammel Hoque</strong>
                                        <span class=inbox-item-date>-13:40 PM</span>
                                        <p class=inbox-item-text>Hey! there I'm available...</p>
                                        <span class="profile-status busy pull-right"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class=inbox-item>
                                        <div class=inbox-item-img><img src="{{ asset('admin/assets/dist/img/avatar4.png') }}" class=img-circle alt=""></div>
                                        <strong class=inbox-item-author>Tanzil Ahmed</strong>
                                        <span class=inbox-item-date>-13:40 PM</span>
                                        <p class=inbox-item-text>Hey! there I'm  available...</p>
                                        <span class="profile-status offline pull-right"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class=inbox-item>
                                        <div class=inbox-item-img><img src="{{ asset('admin/assets/dist/img/avatar5.png') }}" class=img-circle alt=""></div>
                                        <strong class=inbox-item-author>Amir Khan</strong>
                                        <span class=inbox-item-date>-13:40 PM</span>
                                        <p class=inbox-item-text>Hey! there I'm available...</p>
                                        <span class="profile-status available pull-right"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class=inbox-item>
                                        <div class=inbox-item-img><img src="{{ asset('admin/assets/dist/img/avatar.png') }}" class=img-circle alt=""></div>
                                        <strong class=inbox-item-author>Salman Khan</strong>
                                        <span class=inbox-item-date>-13:40 PM</span>
                                        <p class=inbox-item-text>Hey! there I'm available...</p>
                                        <span class="profile-status available pull-right"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class=inbox-item>
                                        <div class=inbox-item-img><img src="{{ asset('admin/assets/dist/img/avatar.png') }}" class=img-circle alt=""></div>
                                        <strong class=inbox-item-author>Farzana Yasmin</strong>
                                        <span class=inbox-item-date>-13:40 PM</span>
                                        <p class=inbox-item-text>Hey! there I'm available...</p>
                                        <span class="profile-status available pull-right"></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class=inbox-item>
                                        <div class=inbox-item-img><img src="{{ asset('admin/assets/dist/img/avatar4.png') }}" class=img-circle alt=""></div>
                                        <strong class=inbox-item-author>Tanzil Ahmed</strong>
                                        <span class=inbox-item-date>-13:40 PM</span>
                                        <p class=inbox-item-text>Hey! there I'm available...</p>
                                        <span class="profile-status offline pull-right"></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="message-footer">
                        <a href="#">see all messages<i class="fa fa-long-arrow-right"></i></a>
                     </div>
                </div>
            </li>
            <li class="dropdown dropdown-settings">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="ti-menu"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Superadmin</a></li>
                    <li><a href="#">Admin</a></li>
                    <li><a href="#">HR</a></li>
                    <li><a href="#">Manager</a></li>
                    <li><a href="#">Editor</a></li>
                    <li><a href="#">Subscriber</a></li>
                    <li><a href="#">User</a></li>
                </ul>
            </li>
            <li class="dropdown dropdown-user">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="ti-user"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="profile.html"><i class="ti-user"></i> User Profile</a></li>
                    <li><a href="#"><i class="ti-settings"></i> Settings</a></li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();"><i class="ti-key"></i>{{ __('Logout') }}</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                        </form>
                </ul>
            </li>
        </ul>
    </div>
</nav>