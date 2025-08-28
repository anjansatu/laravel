@extends('admin.layouts.master')
@section('content')
 @include('admin.layouts.sidebar')
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"> </div>
      <div class="dot"></div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-header">
        <div class="header-wrapper row m-0">
          <div class="header-logo-wrapper col-auto p-0">
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
            <div class="logo-header-main"><a href="index.html"><img class="img-fluid for-light img-100" src="/backend/assets/images/logo/logo2.png" alt=""><img class="img-fluid for-dark" src="/backend/assets/images/logo/logo.png" alt=""></a></div>
          </div>
          <div class="left-header col horizontal-wrapper ps-0">
            <div class="left-menu-header">
              <ul class="app-list">
                <li class="onhover-dropdown">
                  <div class="app-menu"> <i data-feather="folder-plus"></i></div>
                  <ul class="onhover-show-div left-dropdown">
                    <li> <a href="file-manager.html">File Manager</a></li>
                    <li> <a href="kanban.html"> Kanban board</a></li>
                    <li> <a href="social-app.html"> Social App</a></li>
                    <li> <a href="bookmark.html"> Bookmark</a></li>
                  </ul>
                </li>
              </ul>
              <ul class="header-left">
                <li class="onhover-dropdown"><span class="f-w-600">Dashboard</span><span><i class="middle" data-feather="chevron-down"></i></span>
                  <ul class="onhover-show-div left-dropdown">
                    <li> <a href="index.html">Default</a></li>
                    <li> <a href="dashboard-02.html"> Ecommerce</a></li>
                  </ul>
                </li>
                <li class="onhover-dropdown"><span class="f-w-600">Application</span><span><i class="middle" data-feather="chevron-down"></i></span>
                  <ul class="onhover-show-div left-dropdown">
                    <li class="flyout-right"><a href="javascript:void(0)">Project</a>
                      <ul>
                        <li> <a href="projects.html">Project List</a></li>
                        <li> <a href="projectcreate.html">Project Create</a></li>
                      </ul>
                    </li>
                    <li><a href="file-manager.html">File manager</a></li>
                    <li><a href="kanban.html">kanban</a></li>
                    <li class="flyout-right"><a href="javascript:void(0)">Ecommerce</a>
                      <ul>
                        <li> <a href="product.html">Product</a></li>
                        <li> <a href="product-page.html">Product Page</a></li>
                        <li> <a href="list-products.html">Product List</a></li>
                        <li> <a href="payment-details.html">Payment Details</a></li>
                        <li> <a href="order-history.html">Order History</a></li>
                        <li> <a href="invoice-template.html">Invoice</a></li>
                        <li> <a href="cart.html">Cart</a></li>
                        <li> <a href="list-wish.html">Wishlist</a></li>
                        <li> <a href="checkout.html">Checkout</a></li>
                        <li> <a href="pricing.html">Pricing </a></li>
                      </ul>
                    </li>
                    <li class="flyout-right"><a href="javascript:void(0)">Email</a>
                      <ul>
                        <li> <a href="email_inbox.html">Mail Inbox</a></li>
                        <li> <a href="email_read.html">Read Mail</a></li>
                        <li> <a href="email_compose.html">Compose</a></li>
                      </ul>
                    </li>
                    <li class="flyout-right"><a href="javascript:void(0)">Chat</a>
                      <ul>
                        <li> <a href="chat.html">Chat App</a></li>
                        <li> <a href="chat-video.html">Video Chat</a></li>
                      </ul>
                    </li>
                    <li class="flyout-right"><a href="javascript:void(0)">Users</a>
                      <ul>
                        <li> <a href="user-profile.html">User Profile</a></li>
                        <li> <a href="edit-profile.html">Users Edit</a></li>
                        <li> <a href="user-cards.html">User Cards</a></li>
                      </ul>
                    </li>
                    <li><a href="bookmark.html">Bookmarks</a></li>
                    <li><a href="contacts.html">Contacts</a></li>
                    <li><a href="social-app.html">Social App</a></li>
                  </ul>
                </li>
                <li class="onhover-dropdown"> <span class="f-w-600">More pages</span><span><i class="middle" data-feather="chevron-down"></i></span>
                  <ul class="onhover-show-div left-dropdown">
                    <li><a href="landing-page.html">Landing Page</a></li>
                    <li><a href="sample-page.html">Sample Page</a></li>
                    <li><a href="internationalization.html">Internationalization</a></li>
                    <li class="flyout-right"><a href="javascript:void(0)">Starter-Kit</a>
                      <ul>
                        <li class="flyout-right"><a href="javascript:void(0)">Color version</a>
                          <ul>
                            <li> <a href="starter-kit/index.html">Layout Light</a></li>
                            <li> <a href="starter-kit/layout-dark.html">Layout Dark</a></li>
                          </ul>
                        </li>
                        <li class="flyout-right"><a href="javascript:void(0)">Page Layout</a>
                          <ul>
                            <li> <a href="starter-kit/boxed.html">Boxed</a></li>
                            <li> <a href="starter-kit/layout-rtl.html">RTL</a></li>
                          </ul>
                        </li>
                        <li> <a href="starter-kit/hide-on-scroll.html">Hide Menu On Scroll</a></li>
                        <li class="flyout-right"><a href="javascript:void(0)">Footers</a>
                          <ul>
                            <li> <a href="starter-kit/footer-light.html">Footer Light</a></li>
                            <li> <a href="starter-kit/footer-dark.html">Footer Dark </a></li>
                            <li> <a href="starter-kit/footer-fixed.html">Footer Fixed</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="nav-right col-6 pull-right right-header p-0">
            <ul class="nav-menus">
              <li>
                <div class="right-header ps-0">
                  <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text mobile-search"><i class="fa fa-search"></i></span></div>
                    <input class="form-control" type="text" placeholder="Search Here........">
                  </div>
                </div>
              </li>
              <li class="serchinput">
                <div class="serchbox"><i data-feather="search"></i></div>
                <div class="form-group search-form">
                  <input type="text" placeholder="Search here...">
                </div>
              </li>
              <li>
                <div class="mode"><i class="fa fa-moon-o"></i></div>
              </li>
              <li class="onhover-dropdown">
                <div class="notification-box"><i data-feather="bell"></i></div>
                <ul class="notification-dropdown onhover-show-div">
                  <li><i data-feather="bell">            </i>
                    <h6 class="f-18 mb-0">Notitications</h6>
                  </li>
                  <li>
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0"><i data-feather="truck"></i></div>
                      <div class="flex-grow-1">
                        <p><a href="order-history.html">Delivery processing </a><span class="pull-right">6 hr</span></p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0"><i data-feather="shopping-cart"></i></div>
                      <div class="flex-grow-1">
                        <p><a href="cart.html">Order Complete</a><span class="pull-right">3 hr</span></p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0"><i data-feather="file-text"></i></div>
                      <div class="flex-grow-1">
                        <p><a href="invoice-template.html">Tickets Generated</a><span class="pull-right">1 hr</span></p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0"><i data-feather="send"></i></div>
                      <div class="flex-grow-1">
                        <p><a href="email_inbox.html">Delivery Complete</a><span class="pull-right">45 min</span></p>
                      </div>
                    </div>
                  </li>
                  <li><a class="btn btn-primary" href="javascript:void(0)">Check all notification</a></li>
                </ul>
              </li>
              <li class="onhover-dropdown">
                <div class="message"><i data-feather="message-square"></i></div>
                <ul class="message-dropdown onhover-show-div">
                  <li><i data-feather="message-square">            </i>
                    <h6 class="f-18 mb-0">Messages</h6>
                  </li>
                  <li>
                    <div class="d-flex align-items-start">
                      <div class="message-img bg-light-primary"><img src="/backend/assets/images/user/3.jpg" alt=""></div>
                      <div class="flex-grow-1">
                        <h5 class="mb-1"><a href="email_inbox.html">Emay Walter</a></h5>
                        <p>Do you want to go see movie?</p>
                      </div>
                      <div class="notification-right"><i data-feather="x"></i></div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-start">
                      <div class="message-img bg-light-primary"><img src="/backend/assets/images/user/6.jpg" alt=""></div>
                      <div class="flex-grow-1">
                        <h5 class="mb-1"><a href="email_inbox.html">Jason Borne</a></h5>
                        <p>Thank you for rating us.</p>
                      </div>
                      <div class="notification-right"><i data-feather="x"></i></div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex align-items-start">
                      <div class="message-img bg-light-primary"><img src="/backend/assets/images/user/10.jpg" alt=""></div>
                      <div class="flex-grow-1">
                        <h5 class="mb-1"><a href="email_inbox.html">Sarah Loren</a></h5>
                        <p>What`s the project report update?</p>
                      </div>
                      <div class="notification-right"><i data-feather="x"></i></div>
                    </div>
                  </li>
                  <li><a class="btn btn-primary" href="email_inbox.html">Check Messages</a></li>
                </ul>
              </li>
              <li class="maximize"><a href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize-2"></i></a></li>
              <li class="language-nav">
                <div class="translate_wrapper">
                  <div class="current_lang">
                    <div class="lang"><i data-feather="globe"></i></div>
                  </div>
                  <div class="more_lang">
                    <div class="lang selected" data-value="en"><i class="flag-icon flag-icon-us"></i><span class="lang-txt">English<span> (US)</span></span></div>
                    <div class="lang" data-value="de"><i class="flag-icon flag-icon-de"></i><span class="lang-txt">Deutsch</span></div>
                    <div class="lang" data-value="es"><i class="flag-icon flag-icon-es"></i><span class="lang-txt">Espa&ntilde;ol</span></div>
                    <div class="lang" data-value="fr"><i class="flag-icon flag-icon-fr"></i><span class="lang-txt">Fran&ccedil;ais</span></div>
                    <div class="lang" data-value="pt"><i class="flag-icon flag-icon-pt"></i><span class="lang-txt">Portugu&ecirc;s<span> (BR)</span></span></div>
                    <div class="lang" data-value="cn"><i class="flag-icon flag-icon-cn"></i><span class="lang-txt">&#x7B80;&#x4F53;&#x4E2D;&#x6587;</span></div>
                    <div class="lang" data-value="ae"><i class="flag-icon flag-icon-ae"></i><span class="lang-txt">&#x644;&#x639;&#x631;&#x628;&#x64A;&#x629; <span> (ae)</span></span></div>
                  </div>
                </div>
              </li>
              <li class="profile-nav onhover-dropdown">
                <div class="account-user"><i data-feather="user"></i></div>
                <ul class="profile-dropdown onhover-show-div">
                  <li><a href="user-profile.html"><i data-feather="user"></i><span>Account</span></a></li>
                  <li><a href="email_inbox.html"><i data-feather="mail"></i><span>Inbox</span></a></li>
                  <li><a href="edit-profile.html"><i data-feather="settings"></i><span>Settings</span></a></li>
                  <li><a href="login.html"><i data-feather="log-in"> </i><span>Log in</span></a></li>
                </ul>
              </li>
            </ul>
          </div>
          <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">{{name}}</div>
            </div>
            </div>
          </script>
          <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
        </div>
      </div>
      <!-- Page Header Ends-->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-sm-6">
                  <h3>User Profile</h3>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active">User Profile</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="user-profile">
              <div class="row">
                <!-- user profile header start-->
                <div class="col-sm-12">
                  <div class="card profile-header"><img class="img-fluid bg-img-cover" src="/backend/assets/images/user-profile/bg-profile.jpg" alt="">
                    <div class="profile-img-wrrap"><img class="img-fluid bg-img-cover" src="/backend/assets/images/user-profile/bg-profile.jpg" alt=""></div>
                    <div class="userpro-box">
                      <div class="img-wrraper">
                        <div class="avatar"><img class="img-fluid" alt="" src="/backend/assets/images/user/7.jpg"></div><a class="icon-wrapper" href="edit-profile.html"><i class="icofont icofont-pencil-alt-5"></i></a>
                      </div>
                      <div class="user-designation">
                        <div class="title"><a target="_blank" href="">
                            <h4>Emay Walter</h4>
                            <h6 class="f-w-500">designer</h6></a></div>
                        <div class="social-media">
                          <ul class="user-list-social">
                            <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://accounts.google.com/"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://dashboard.rss.com/auth/sign-in/"><i class="fa fa-rss"></i></a></li>
                          </ul>
                        </div>
                        <div class="follow">
                          <ul class="follow-list">
                            <li>
                              <div class="follow-num counter">325</div><span>Follower</span>
                            </li>
                            <li>
                              <div class="follow-num counter">450</div><span>Following</span>
                            </li>
                            <li>
                              <div class="follow-num counter">500</div><span>Likes</span>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- user profile header end-->
                <div class="col-xl-3 col-lg-4 col-md-5 xl-35 box-col-40">
                  <div class="default-according style-1 job-accordion">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="card">
                          <div class="card-header">
                            <h5 class="p-0">
                              <button class="btn btn-link ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon2" aria-expanded="true" aria-controls="collapseicon2">About Me</button>
                            </h5>
                          </div>
                          <div class="collapse show" id="collapseicon2" aria-labelledby="collapseicon2" data-parent="#accordion">
                            <div class="card-body post-about">
                              <ul>
                                <li>
                                  <div class="icon"><i data-feather="briefcase"></i></div>
                                  <div>
                                    <h5>UX desginer at Pixelstrap</h5>
                                    <p class="mb-0">banglore - 2022</p>
                                  </div>
                                </li>
                                <li>
                                  <div class="icon"><i data-feather="book"></i></div>
                                  <div>
                                    <h5>studied computer science</h5>
                                    <p class="mb-0">at london univercity - 2022</p>
                                  </div>
                                </li>
                                <li>
                                  <div class="icon"><i data-feather="heart"></i></div>
                                  <div>
                                    <h5>relationship status</h5>
                                    <p class="mb-0">single</p>
                                  </div>
                                </li>
                                <li>
                                  <div class="icon"><i data-feather="map-pin"></i></div>
                                  <div>
                                    <h5>lived in london</h5>
                                    <p class="mb-0">last 5 year</p>
                                  </div>
                                </li>
                                <li>
                                  <div class="icon"><i data-feather="droplet"></i></div>
                                  <div>
                                    <h5>blood group</h5>
                                    <p class="mb-0">O+ positive</p>
                                  </div>
                                </li>
                              </ul>
                              <div class="social-network theme-form"><span class="f-w-600">Social Networks</span><a class="btn social-btn btn-fb mb-2 text-center" href="https://www.facebook.com/"><i class="fa fa-facebook m-r-5"></i>Facebook</a><a class="btn social-btn btn-twitter mb-2 text-center" href="https://twitter.com/"><i class="fa fa-twitter m-r-5"></i>Twitter</a><a class="btn social-btn btn-google text-center" href="https://dribbble.com/"><i class="fa fa-dribbble m-r-5"></i>Dribbble</a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="card">
                          <div class="card-header">
                            <h5 class="p-0">
                              <button class="btn btn-link ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon8" aria-expanded="true" aria-controls="collapseicon8">Followers</button>
                            </h5>
                          </div>
                          <div class="collapse show" id="collapseicon8" aria-labelledby="collapseicon8" data-parent="#accordion">
                            <div class="card-body social-list filter-cards-view">
                              <div class="d-flex"><img class="img-50 img-fluid m-r-20 rounded-circle" alt="" src="/backend/assets/images/user/2.png">
                                <div class="flex-grow-1"><span class="d-block">Bucky Barnes</span><a href="javascript:void(0)">Add Friend</a></div>
                              </div>
                              <div class="d-flex"><img class="img-50 img-fluid m-r-20 rounded-circle" alt="" src="/backend/assets/images/user/3.png">
                                <div class="flex-grow-1"><span class="d-block">Sarah Loren</span><a href="javascript:void(0)">Add Friend</a></div>
                              </div>
                              <div class="d-flex"><img class="img-50 img-fluid m-r-20 rounded-circle" alt="" src="/backend/assets/images/user/3.jpg">
                                <div class="flex-grow-1"><span class="d-block">Jason Borne</span><a href="javascript:void(0)">Add Friend</a></div>
                              </div>
                              <div class="d-flex"><img class="img-50 img-fluid m-r-20 rounded-circle" alt="" src="/backend/assets/images/user/10.jpg">
                                <div class="flex-grow-1"><span class="d-block">Comeren Diaz</span><a href="javascript:void(0)">Add Friend</a></div>
                              </div>
                              <div class="d-flex"><img class="img-50 img-fluid m-r-20 rounded-circle" alt="" src="/backend/assets/images/user/11.png">
                                <div class="flex-grow-1"><span class="d-block">Andew Jon</span><a href="javascript:void(0)">Add Friend</a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="card">
                          <div class="card-header">
                            <h5 class="p-0">
                              <button class="btn btn-link ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon11" aria-expanded="true" aria-controls="collapseicon11">Followings</button>
                            </h5>
                          </div>
                          <div class="collapse show" id="collapseicon11" aria-labelledby="collapseicon11" data-parent="#accordion">
                            <div class="card-body social-list filter-cards-view">
                              <div class="d-flex"><img class="img-50 img-fluid m-r-20 rounded-circle" alt="" src="/backend/assets/images/user/3.png">
                                <div class="flex-grow-1"><span class="d-block">Sarah Loren</span><a href="javascript:void(0)">Add Friend</a></div>
                              </div>
                              <div class="d-flex"><img class="img-50 img-fluid m-r-20 rounded-circle" alt="" src="/backend/assets/images/user/2.png">
                                <div class="flex-grow-1"><span class="d-block">Bucky Barnes</span><a href="javascript:void(0)">Add Friend</a></div>
                              </div>
                              <div class="d-flex"><img class="img-50 img-fluid m-r-20 rounded-circle" alt="" src="/backend/assets/images/user/10.jpg">
                                <div class="flex-grow-1"><span class="d-block">Comeren Diaz</span><a href="javascript:void(0)">Add Friend</a></div>
                              </div>
                              <div class="d-flex"><img class="img-50 img-fluid m-r-20 rounded-circle" alt="" src="/backend/assets/images/user/3.jpg">
                                <div class="flex-grow-1"><span class="d-block">Jason Borne</span><a href="javascript:void(0)">Add Friend</a></div>
                              </div>
                              <div class="d-flex"><img class="img-50 img-fluid m-r-20 rounded-circle" alt="" src="/backend/assets/images/user/11.png">
                                <div class="flex-grow-1"><span class="d-block">Andew Jon</span><a href="javascript:void(0)">Add Friend</a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="card">
                          <div class="card-header">
                            <h5 class="p-0">
                              <button class="btn btn-link ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon4" aria-expanded="true" aria-controls="collapseicon4">Latest Photos</button>
                            </h5>
                          </div>
                          <div class="collapse show" id="collapseicon4" data-parent="#accordion" aria-labelledby="collapseicon4">
                            <div class="card-body photos filter-cards-view">
                              <ul>
                                <li>
                                  <div class="latest-post"><img class="img-fluid" alt="" src="/backend/assets/images/social-app/post-1.png"></div>
                                </li>
                                <li>
                                  <div class="latest-post"><img class="img-fluid" alt="" src="/backend/assets/images/social-app/post-2.png"></div>
                                </li>
                                <li>
                                  <div class="latest-post"><img class="img-fluid" alt="" src="/backend/assets/images/social-app/post-3.png"></div>
                                </li>
                                <li>
                                  <div class="latest-post"><img class="img-fluid" alt="" src="/backend/assets/images/social-app/post-4.png"></div>
                                </li>
                                <li>
                                  <div class="latest-post"><img class="img-fluid" alt="" src="/backend/assets/images/social-app/post-5.png"></div>
                                </li>
                                <li>
                                  <div class="latest-post"><img class="img-fluid" alt="" src="/backend/assets/images/social-app/post-6.png"></div>
                                </li>
                                <li>
                                  <div class="latest-post"><img class="img-fluid" alt="" src="/backend/assets/images/social-app/post-7.png"></div>
                                </li>
                                <li>
                                  <div class="latest-post"><img class="img-fluid" alt="" src="/backend/assets/images/social-app/post-8.png"></div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="card">
                          <div class="card-header">
                            <h5 class="p-0">
                              <button class="btn btn-link ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon13" aria-expanded="true" aria-controls="collapseicon13">Friends</button>
                            </h5>
                          </div>
                          <div class="collapse show" id="collapseicon13" data-parent="#accordion" aria-labelledby="collapseicon13">
                            <div class="card-body avatar-showcase filter-cards-view">
                              <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle" src="/backend/assets/images/user/3.jpg" alt="#"></div>
                              <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle" src="/backend/assets/images/user/5.jpg" alt="#"></div>
                              <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle" src="/backend/assets/images/user/1.jpg" alt="#"></div>
                              <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle" src="/backend/assets/images/user/2.png" alt="#"></div>
                              <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle" src="/backend/assets/images/user/3.png" alt="#"></div>
                              <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle" src="/backend/assets/images/user/6.jpg" alt="#"></div>
                              <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle" src="/backend/assets/images/user/10.jpg" alt="#"></div>
                              <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle" src="/backend/assets/images/user/14.png" alt="#"></div>
                              <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle" src="/backend/assets/images/user/1.jpg" alt="#"></div>
                              <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle" src="/backend/assets/images/user/4.jpg" alt="#"></div>
                              <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle" src="/backend/assets/images/user/11.png" alt="#"></div>
                              <div class="d-inline-block friend-pic"><img class="img-50 rounded-circle" src="/backend/assets/images/user/8.jpg" alt="#"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-7 xl-65 box-col-60">
                  <div class="row">
                    <!-- profile post start-->
                    <div class="col-sm-12">
                      <div class="card">
                        <div class="profile-post">
                          <div class="post-header">
                            <div class="d-flex"><img class="img-thumbnail rounded-circle me-3" src="/backend/assets/images/user/7.jpg" alt="Generic placeholder image">
                              <div class="flex-grow-1 align-self-center"><a href="social-app.html">
                                  <h5 class="user-name">Emay Walter</h5></a>
                                <h6 class="f-w-500">22 Hours ago</h6>
                              </div>
                            </div>
                            <div class="post-setting"><i class="fa fa-ellipsis-h"></i></div>
                          </div>
                          <div class="post-body">
                            <div class="img-container">
                              <div class="my-gallery" itemscope="">
                                <figure itemprop="associatedMedia" itemscope=""><a href="/backend/assets/images/user-profile/post1.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-fluid" src="/backend/assets/images/user-profile/post1.jpg" itemprop="thumbnail" alt="gallery"></a>
                                  <figcaption itemprop="caption description">Image caption  1</figcaption>
                                </figure>
                              </div>
                            </div>
                            <div class="post-react">
                              <ul>
                                <li><img class="rounded-circle" src="/backend/assets/images/user/3.jpg" alt=""></li>
                                <li><img class="rounded-circle" src="/backend/assets/images/user/5.jpg" alt=""></li>
                                <li><img class="rounded-circle" src="/backend/assets/images/user/1.jpg" alt=""></li>
                              </ul>
                              <h6 class="f-w-500">+5 people react this post</h6>
                            </div>
                            <p>Dressing is a way of life. My customers are successful working women. I want people to be afraid of the women I dress. Age is something only in your head or a stereotype. Age means nothing when you are passionate about something. There has to be a balance between your mental satisfaction and the financial needs of your company.</p>
                            <ul class="post-comment">
                              <li>
                                <label><a href="#"><i data-feather="heart"></i>&nbsp;&nbsp;Like<span class="counter">50</span></a></label>
                              </li>
                              <li>
                                <label><a href="#"><i data-feather="message-square"></i>&nbsp;&nbsp;Comment<span class="counter">70</span></a></label>
                              </li>
                              <li>
                                <label><a href="#"><i data-feather="share"></i>&nbsp;&nbsp;share<span class="counter">20</span></a></label>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- profile post end-->
                    <!-- profile post start-->
                    <div class="col-sm-12">
                      <div class="card">
                        <div class="profile-post">
                          <div class="post-header">
                            <div class="d-flex"><img class="img-thumbnail rounded-circle me-3" src="/backend/assets/images/user/7.jpg" alt="Generic placeholder image">
                              <div class="flex-grow-1 align-self-center"><a href="social-app.html">
                                  <h5 class="user-name">Emay Walter</h5></a>
                                <h6 class="f-w-500">5 Hours ago</h6>
                              </div>
                            </div>
                            <div class="post-setting"><i class="fa fa-ellipsis-h"></i></div>
                          </div>
                          <div class="post-body">
                            <div class="img-container">
                              <div class="row mt-4 pictures my-gallery" itemscope="">
                                <figure class="col-sm-6" itemprop="associatedMedia" itemscope=""><a href="/backend/assets/images/user-profile/post2.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-fluid" src="/backend/assets/images/user-profile/post2.jpg" itemprop="thumbnail" alt="gallery"></a>
                                  <figcaption itemprop="caption description">Image caption  1</figcaption>
                                </figure>
                                <figure class="col-sm-6" itemprop="associatedMedia" itemscope=""><a href="/backend/assets/images/user-profile/post3.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-fluid" src="/backend/assets/images/user-profile/post3.jpg" itemprop="thumbnail" alt="gallery"></a>
                                  <figcaption itemprop="caption description">Image caption  2</figcaption>
                                </figure>
                              </div>
                            </div>
                            <div class="post-react">
                              <ul>
                                <li><img class="rounded-circle" src="/backend/assets/images/user/3.jpg" alt=""></li>
                                <li><img class="rounded-circle" src="/backend/assets/images/user/5.jpg" alt=""></li>
                                <li><img class="rounded-circle" src="/backend/assets/images/user/1.jpg" alt=""></li>
                              </ul>
                              <h6 class="f-w-500">+25 people react this post</h6>
                            </div>
                            <p>Success isn't about the end result, it's about what you learn along the way. Confidence. If you have it, you can make anything look good. Grunge is a hippied romantic version of punk. I'm an accomplice to helping women get what they want. Clothes can transform your mood and confidence. I think it's an old fashioned notion that fashion needs to be exclusive to be fashionable.</p>
                            <ul class="post-comment">
                              <li>
                                <label><a href="#"><i data-feather="heart"></i>&nbsp;&nbsp;Like<span class="counter">20</span></a></label>
                              </li>
                              <li>
                                <label><a href="#"><i data-feather="message-square"></i>&nbsp;&nbsp;Comment<span class="counter">85</span></a></label>
                              </li>
                              <li>
                                <label><a href="#"><i data-feather="share"></i>&nbsp;&nbsp;share<span class="counter">30</span></a></label>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- profile post end   -->
                    <!-- profile post start-->
                    <div class="col-sm-12">
                      <div class="card">
                        <div class="profile-post">
                          <div class="post-header">
                            <div class="d-flex"><img class="img-thumbnail rounded-circle me-3" src="/backend/assets/images/user/7.jpg" alt="Generic placeholder image">
                              <div class="flex-grow-1 align-self-center"><a href="social-app.html">
                                  <h5 class="user-name">Emay Walter</h5></a>
                                <h6>2 Hours ago</h6>
                              </div>
                            </div>
                            <div class="post-setting"><i class="fa fa-ellipsis-h"></i></div>
                          </div>
                          <div class="post-body">
                            <div class="img-container">
                              <div class="my-gallery" itemscope="">
                                <figure itemprop="associatedMedia" itemscope=""><a href="/backend/assets/images/user-profile/post4.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-fluid" src="/backend/assets/images/user-profile/post4.jpg" itemprop="thumbnail" alt="gallery"></a>
                                  <figcaption itemprop="caption description">Image caption  1</figcaption>
                                </figure>
                              </div>
                            </div>
                            <div class="post-react">
                              <ul>
                                <li><img class="rounded-circle" src="/backend/assets/images/user/3.jpg" alt=""></li>
                                <li><img class="rounded-circle" src="/backend/assets/images/user/5.jpg" alt=""></li>
                                <li><img class="rounded-circle" src="/backend/assets/images/user/1.jpg" alt=""></li>
                              </ul>
                              <h6 class="f-w-500">+20 people react this post</h6>
                            </div>
                            <p>Comfort is very important to me. I think people live better in big houses and in big clothes. Design and style should work toward making you look good and feel good without a lot of effort so you can get on with the things that matter. My shows are about the complete woman who swallows it all. Its a question of survival. Those fashion designers are just crazy; but arent we all? You can only go forward by making mistakes.</p>
                            <ul class="post-comment">
                              <li>
                                <label><a href="#"><i data-feather="heart"></i>&nbsp;&nbsp;Like<span class="counter">40</span></a></label>
                              </li>
                              <li>
                                <label><a href="#"><i data-feather="message-square"></i>&nbsp;&nbsp;Comment<span class="counter">30</span></a></label>
                              </li>
                              <li>
                                <label><a href="#"><i data-feather="share"></i>&nbsp;&nbsp;share<span class="counter">18</span></a></label>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- profile post end                           -->
                  </div>
                </div>
                <!-- user profile fifth-style end-->
                <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="pswp__bg"></div>
                  <div class="pswp__scroll-wrap">
                    <div class="pswp__container">
                      <div class="pswp__item"></div>
                      <div class="pswp__item"></div>
                      <div class="pswp__item"></div>
                    </div>
                    <div class="pswp__ui pswp__ui--hidden">
                      <div class="pswp__top-bar">
                        <div class="pswp__counter"></div>
                        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                        <button class="pswp__button pswp__button--share" title="Share"></button>
                        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                        <div class="pswp__preloader">
                          <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                              <div class="pswp__preloader__donut"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div>
                      </div>
                      <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                      <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                      <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 p-0 footer-left">
                <p class="mb-0">Copyright © 2023 Tivo. All rights reserved.</p>
              </div>
              <div class="col-md-6 p-0 footer-right">
                <p class="mb-0">Hand-crafted & made with <i class="fa fa-heart font-danger"></i></p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>

@endsection
