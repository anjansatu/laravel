@extends('user.master')

@section('content')
    @if($showDepositPopup)
        <div class="modal fade in" id="depositModal" style="display:block;" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Make a Deposit</h4>
                    </div>
                    <div class="modal-body text-center">
                        <a href="{{ route('deposit.create') }}" class="btn btn-primary">Deposit</a>
                        <button class="btn btn-default" onclick="document.getElementById('depositModal').style.display='none';">Skip</button>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- START HOMEPAGE DESIGN AREA -->
    <header id="home" class="welcome-area">
        <div class="welcome-image-area" data-stellar-background-ratio="0.6">
            <div class="display-table">
                <div class="display-table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="header-text header-desc-area">
                                    <h2>Bringing great design home!</h2>
                                    <p>Lorem Ipsum is simly dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                    <a class="slide-btn smoth-scroll" href="/frontend/about.html">About Us</a>
                                    <a class="slide-btn smoth-scroll" href="/frontend/contact.html">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- / END HOMEPAGE DESIGN AREA -->
    
    <!-- START MAIN CONTENT DESIGN AREA -->
    <section id="main-content" class="main-content-area">
        <div class="container">
            <div class="row">
                <div class="content-area">
                    <div class="row">
                        <!-- START POST CONTENT DESIGN AREA -->
                        <div class="col-md-8 post-content-area">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <!-- START SINGLE POST CONTENT DESIGN AREA -->
                                    <div class="single-blog-content">
                                        <div class="single-post-titel text-center">
                                            <h3><a href="/frontend/single-blog.html">This is a post title here</a></h3>
                                            <h4><a href="#"><i class="fa fa-home"></i> Interior</a> <i class="fa fa-eye"></i> 1325 Views </h4>
                                        </div>
                                        <div class="blog-post-image">
                                            <figure>
                                                <img src="/frontend/assets/images/blog/1.jpg" height="400" alt="Post">
                                            </figure>
                                        </div>

                                        <div class="post-meta-block">
                                            <div class="post-meta-area">
                                                <div class="post-user"><i class="fa fa-user-secret"></i> <a href="#" title="">Admin</a></div>
                                                <div class="post-date"><a href="#"><i class="fa fa-calendar"></i> April 12, 2017 </a></div>
                                                <div class="post-comment"><a href="#"><i class="fa fa-comment"></i> 2</a></div>
                                            </div>
                                        </div>

                                        <div class="blog-post-content text-center">
                                            <p class="blog-post-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed augue nulla. Maecenas sit amet ligula est. Fusce fringilla sollicitudin enim in varius. Praesent nisi neque, condimentum sit amet lacus inLorem ipsum.</p>
                                            <a href="/frontend/single-blog.html">read more</a>
                                        </div>
                                        <div class="blog-social-sharing-area">
                                            <div class="social-sharing-icon text-center">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- / END SINGLE POST CONTENT DESIGN AREA -->
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <!-- START SINGLE POST CONTENT DESIGN AREA -->
                                    <div class="single-blog-content">
                                        <div class="single-post-titel text-center">
                                            <h3><a href="/frontend/single-blog.html">This is a post title here</a></h3>
                                            <h4><a href="#"><i class="fa fa-home"></i> Interior</a> <i class="fa fa-eye"></i> 1325 Views </h4>
                                        </div>
                                        <div class="blog-post-image">
                                            <figure>
                                                <img src="/frontend/assets/images/blog/2.jpg" height="300" alt="Post">
                                            </figure>
                                        </div>

                                        <div class="post-meta-block post-meta-block-small">
                                            <div class="post-meta-area">
                                                <div class="post-user"><i class="fa fa-user-secret"></i> <a href="#" title="">Admin</a></div>
                                                <div class="post-date"><a href="#"><i class="fa fa-calendar"></i> April 12, 2017 </a></div>
                                                <div class="post-comment"><a href="#"><i class="fa fa-comment"></i> 2</a></div>
                                            </div>
                                        </div>

                                        <div class="blog-post-content text-center">
                                            <p class="blog-post-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed augue nulla. Maecenas sit amet ligula est. Fusce fringilla. Praesent nisi neque, condimentum sit amet lacus inLorem ipsum.</p>
                                            <a href="/frontend/single-blog.html">read more</a>
                                        </div>
                                        <div class="blog-social-sharing-area">
                                            <div class="social-sharing-icon text-center">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- / END SINGLE POST CONTENT DESIGN AREA -->
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <!-- START SINGLE POST CONTENT DESIGN AREA -->
                                    <div class="single-blog-content">
                                        <div class="single-post-titel text-center">
                                            <h3><a href="/frontend/single-blog.html">This is a post title here</a></h3>
                                            <h4><a href="#"><i class="fa fa-home"></i> Interior</a> <i class="fa fa-eye"></i> 1325 Views </h4>
                                        </div>
                                        <div class="blog-post-image">
                                            <figure>
                                                <img src="/frontend/assets/images/blog/3.jpg" height="300" alt="Post">
                                            </figure>
                                        </div>

                                        <div class="post-meta-block post-meta-block-small">
                                            <div class="post-meta-area">
                                                <div class="post-user"><i class="fa fa-user-secret"></i> <a href="#" title="">Admin</a></div>
                                                <div class="post-date"><a href="#"><i class="fa fa-calendar"></i> April 12, 2017 </a></div>
                                                <div class="post-comment"><a href="#"><i class="fa fa-comment"></i> 2</a></div>
                                            </div>
                                        </div>

                                        <div class="blog-post-content text-center">
                                            <p class="blog-post-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed augue nulla. Maecenas sit amet ligula est. Fusce fringilla. Praesent nisi neque, condimentum sit amet lacus inLorem ipsum.</p>
                                            <a href="/frontend/single-blog.html">read more</a>
                                        </div>
                                        <div class="blog-social-sharing-area">
                                            <div class="social-sharing-icon text-center">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- / END SINGLE POST CONTENT DESIGN AREA -->
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <!-- START SINGLE POST CONTENT DESIGN AREA -->
                                    <div class="single-blog-content">
                                        <div class="single-post-titel text-center">
                                            <h3><a href="/frontend/single-blog.html">This is a post title here</a></h3>
                                            <h4><a href="#"><i class="fa fa-home"></i> Interior</a> <i class="fa fa-eye"></i> 1325 Views </h4>
                                        </div>
                                        <div class="blog-post-image">
                                            <figure>
                                                <img src="/frontend/assets/images/blog/4.jpg" height="300" alt="Post">
                                            </figure>
                                        </div>

                                        <div class="post-meta-block post-meta-block-small">
                                            <div class="post-meta-area">
                                                <div class="post-user"><i class="fa fa-user-secret"></i> <a href="#" title="">Admin</a></div>
                                                <div class="post-date"><a href="#"><i class="fa fa-calendar"></i> April 12, 2017 </a></div>
                                                <div class="post-comment"><a href="#"><i class="fa fa-comment"></i> 2</a></div>
                                            </div>
                                        </div>

                                        <div class="blog-post-content text-center">
                                            <p class="blog-post-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed augue nulla. Maecenas sit amet ligula est. Fusce fringilla. Praesent nisi neque, condimentum sit amet lacus inLorem ipsum.</p>
                                            <a href="/frontend/single-blog.html">read more</a>
                                        </div>
                                        <div class="blog-social-sharing-area">
                                            <div class="social-sharing-icon text-center">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- / END SINGLE POST CONTENT DESIGN AREA -->
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <!-- START SINGLE POST CONTENT DESIGN AREA -->
                                    <div class="single-blog-content">
                                        <div class="single-post-titel text-center">
                                            <h3><a href="/frontend/single-blog.html">This is a post title here</a></h3>
                                            <h4><a href="#"><i class="fa fa-home"></i> Interior</a> <i class="fa fa-eye"></i> 1325 Views </h4>
                                        </div>
                                        <div class="blog-post-image">
                                            <figure>
                                                <img src="/frontend/assets/images/blog/5.jpg" height="300" alt="Post">
                                            </figure>
                                        </div>

                                        <div class="post-meta-block post-meta-block-small">
                                            <div class="post-meta-area">
                                                <div class="post-user"><i class="fa fa-user-secret"></i> <a href="#" title="">Admin</a></div>
                                                <div class="post-date"><a href="#"><i class="fa fa-calendar"></i> April 12, 2017 </a></div>
                                                <div class="post-comment"><a href="#"><i class="fa fa-comment"></i> 2</a></div>
                                            </div>
                                        </div>

                                        <div class="blog-post-content text-center">
                                            <p class="blog-post-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed augue nulla. Maecenas sit amet ligula est. Fusce fringilla. Praesent nisi neque, condimentum sit amet lacus inLorem ipsum.</p>
                                            <a href="/frontend/single-blog.html">read more</a>
                                        </div>
                                        <div class="blog-social-sharing-area">
                                            <div class="social-sharing-icon text-center">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- / END SINGLE POST CONTENT DESIGN AREA -->
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <!-- START SINGLE POST CONTENT DESIGN AREA -->
                                    <div class="single-blog-content">
                                        <div class="single-post-titel text-center">
                                            <h3><a href="/frontend/single-blog.html">This is a post title here</a></h3>
                                            <h4><a href="#"><i class="fa fa-home"></i> Interior</a> <i class="fa fa-eye"></i> 1325 Views </h4>
                                        </div>
                                        <div class="blog-post-image">
                                            <figure>
                                                <img src="/frontend/assets/images/blog/6.jpg" height="400" alt="Post">
                                            </figure>
                                        </div>

                                        <div class="post-meta-block">
                                            <div class="post-meta-area">
                                                <div class="post-user"><i class="fa fa-user-secret"></i> <a href="#" title="">Admin</a></div>
                                                <div class="post-date"><a href="#"><i class="fa fa-calendar"></i> April 12, 2017 </a></div>
                                                <div class="post-comment"><a href="#"><i class="fa fa-comment"></i> 2</a></div>
                                            </div>
                                        </div>

                                        <div class="blog-post-content text-center">
                                            <p class="blog-post-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed augue nulla. Maecenas sit amet ligula est. Fusce fringilla sollicitudin enim in varius. Praesent nisi neque, condimentum sit amet lacus inLorem ipsum.</p>
                                            <a href="/frontend/single-blog.html">read more</a>
                                        </div>
                                        <div class="blog-social-sharing-area">
                                            <div class="social-sharing-icon text-center">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- / END SINGLE POST CONTENT DESIGN AREA -->
                                </div>
                            </div>
                            
                            <!-- START PAGINATION -->
                            <div class="pagination-area">
                                <ul class="pagination-nav">
                                    <li><a class="prev page-numbers" href="#"><i class="fa fa-chevron-left"></i></a></li>
                                    <li><a class="page-numbers current" href="#">1</a></li>
                                    <li><a class="page-numbers" href="#">2</a></li>
                                    <li><a class="page-numbers" href="#">3</a></li>
                                    <li><span class="page-numbers dots">…</span></li>
                                    <li><a class="page-numbers" href="#">5</a></li>
                                    <li><a class="next page-numbers" href="#"><i class="fa fa-chevron-right"></i></a></li>
                                </ul>

                                <div class="pre-next-area" style="display: none;">
                                    <a class="new-post" href="#">Newer Posts</a>
                                    <a class="old-post" href="#">Older Posts</a>
                                </div>
                            </div>
                            <!-- / END PAGINATION -->
                        </div>
                        <!-- / END POST CONTENT DESIGN AREA -->
                        
                        <!-- START SIDEBAR CONTENT DESIGN AREA -->
                        <div class="col-md-4 sidebar-area">
                            <div class="sidebar">
                                <!-- START SEARCH BOX DESIGN AREA -->
                                <div class="search single-sidebar">
                                    <input type="text" class="form-control" placeholder="Search...">
                                </div>
                                <!-- / END SEARCH BOX DESIGN AREA -->
                                
                                <!-- START ABOUT ME DESIGN AREA -->
                                <div class="right-sidebar sidebar-about-me-area text-center">
                                    <div class="sidebar-about-me-area-content">
                                        <div class="widget-title">
                                            <h4>ABOUT ME</h4>
                                        </div>
                                        <div class="widget-about-thumb">
                                            <figure>
                                                <a href="#"><img src="/frontend/assets/images/about/about.jpg" alt="img" class="img-responsive"></a>
                                            </figure>
                                        </div>
                                        <div class="widget-about-content">
                                            <h4><a href="/frontend/about.html">Scott Stainly</a></h4>
                                            <div class="header-social-icon text-center">
                                                <ul class="nav navbar-nav navbar-right">
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                </ul>
                                            </div>
                                            <p class="blog-post-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed augue nulla. Maecenas sit amet ligula est. Fusce fringilla. Praesent nisi neque, condimentum sit amet lacus inLorem ipsum.</p>
                                            <a href="/frontend/about.html" class="read-more">read more</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- / END ABOUT ME DESIGN AREA -->
                                
                                <!-- START RECENT POSTS DESIGN AREA -->
                                <div class="right-sidebar recent-post-area">
                                    <div class="widget-title">
                                        <h4>RECENT POST</h4>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="sidebar-post-thumb">
                                                <figure>
                                                    <a href="#"><img src="/frontend/assets/images/recent-post/1.jpg" alt="image"></a>
                                                </figure>
                                            </div>
                                            <div class="widget-content">
                                                <h6><a href="#">This is a post title here</a></h6>
                                                <span><i class="fa fa-calendar"></i> 18 April, 2017  | <i class="fa fa-comment"></i>
2</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-post-thumb">
                                                <figure>
                                                    <a href="#"><img src="/frontend/assets/images/recent-post/2.jpg" alt="image"></a>
                                                </figure>
                                            </div>
                                            <div class="widget-content">
                                                <h6><a href="#">This is a post title here</a></h6>
                                                <span><i class="fa fa-calendar"></i> 17 April, 2017  | <i class="fa fa-comment"></i>
2</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-post-thumb">
                                                <figure>
                                                    <a href="#"><img src="/frontend/assets/images/recent-post/3.jpg" alt="image"></a>
                                                </figure>
                                            </div>
                                            <div class="widget-content">
                                                <h6><a href="#">This is a post title here</a></h6>
                                                <span><i class="fa fa-calendar"></i> 16 April, 2017  | <i class="fa fa-comment"></i>
2</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-post-thumb">
                                                <figure>
                                                    <a href="#"><img src="/frontend/assets/images/recent-post/4.jpg" alt="image"></a>
                                                </figure>
                                            </div>
                                            <div class="widget-content">
                                                <h6><a href="#">This is a post title here</a></h6>
                                                <span><i class="fa fa-calendar"></i> 15 April, 2017  | <i class="fa fa-comment"></i>
2</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-post-thumb">
                                                <figure>
                                                    <a href="#"><img src="/frontend/assets/images/recent-post/5.jpg" alt="image"></a>
                                                </figure>
                                            </div>
                                            <div class="widget-content">
                                                <h6><a href="#">This is a post title here</a></h6>
                                                <span><i class="fa fa-calendar"></i> 14 April, 2017  | <i class="fa fa-comment"></i>
2</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- / END RECENT POSTS DESIGN AREA -->
                                
                                <!-- START NEWSLETTER DESIGN AREA -->
                                <div class="right-sidebar sidebar-search">
                                    <div class="widget-title">
                                        <h4>NEWSLETTER</h4>
                                    </div>
                                    <form class="news-letter-form" novalidate>
                                        <div class="sidebar-search-form">
                                            <input required="" name="your_email" placeholder="Enter Your Email" type="text">
                                            <input value="GO" class="search-btn" type="submit">
                                            <p class="newsletter-success"></p>
                                            <p class="newsletter-error"></p>
                                        </div>
                                    </form>
                                </div>
                                <!-- / END NEWSLETTER DESIGN AREA -->
                                
                                <!-- START INSTAGRAM DESIGN AREA -->
                                <div class="right-sidebar widget-instagram-area">
                                    <div class="widget-title">
                                        <h4>INSTAGRAM</h4>
                                    </div>
                                    <ul class="sidebar-tags-list">
                                        <li><figure><a href="#"><img src="/frontend/assets/images/instagram/1.jpg" height="80" width="80" alt="img" class="img-responsive"></a></figure></li>
                                        <li><figure><a href="#"><img src="/frontend/assets/images/instagram/2.jpg" height="80" width="80" alt="img" class="img-responsive"></a></figure></li>
                                        <li><figure><a href="#"><img src="/frontend/assets/images/instagram/3.jpg" height="80" width="80" alt="img" class="img-responsive"></a></figure></li>
                                        <li><figure><a href="#"><img src="/frontend/assets/images/instagram/4.jpg" height="80" width="80" alt="img" class="img-responsive"></a></figure></li>
                                        <li><figure><a href="#"><img src="/frontend/assets/images/instagram/5.jpg" height="80" width="80" alt="img" class="img-responsive"></a></figure></li>
                                        <li><figure><a href="#"><img src="/frontend/assets/images/instagram/6.jpg" height="80" width="80" alt="img" class="img-responsive"></a></figure></li>
                                    </ul>
                                </div>
                                <!-- / END INSTAGRAM DESIGN AREA -->
                                <!-- TRENDING POSTS DESIGN AREA -->
                                <div class="right-sidebar recent-post-area">
                                    <div class="widget-title">
                                        <h4>TRENDING POST</h4>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="sidebar-post-thumb">
                                                <figure>
                                                    <a href="#"><img src="/frontend/assets/images/trending-post/1.jpg" alt="image"></a>
                                                </figure>
                                            </div>
                                            <div class="widget-content">
                                                <h6><a href="#">This is a post title here</a></h6>
                                                <span><i class="fa fa-home"></i> Interior  | <i class="fa fa-eye"></i>
1325 Views</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-post-thumb">
                                                <figure>
                                                    <a href="#"><img src="/frontend/assets/images/trending-post/2.jpg" alt="image"></a>
                                                </figure>
                                            </div>
                                            <div class="widget-content">
                                                <h6><a href="#">This is a post title here</a></h6>
                                                <span><i class="fa fa-home"></i> Interior  | <i class="fa fa-eye"></i>
1245 Views</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-post-thumb">
                                                <figure>
                                                    <a href="#"><img src="/frontend/assets/images/trending-post/3.jpg" alt="image"></a>
                                                </figure>
                                            </div>
                                            <div class="widget-content">
                                                <h6><a href="#">This is a post title here</a></h6>
                                                <span><i class="fa fa-home"></i> Interior  | <i class="fa fa-eye"></i>
1215 Views</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-post-thumb">
                                                <figure>
                                                    <a href="#"><img src="/frontend/assets/images/trending-post/4.jpg" alt="image"></a>
                                                </figure>
                                            </div>
                                            <div class="widget-content">
                                                <h6><a href="#">This is a post title here</a></h6>
                                                <span><i class="fa fa-home"></i> Interior  | <i class="fa fa-eye"></i>
1145 Views</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-post-thumb">
                                                <figure>
                                                    <a href="#"><img src="/frontend/assets/images/trending-post/5.jpg" alt="image"></a>
                                                </figure>
                                            </div>
                                            <div class="widget-content">
                                                <h6><a href="#">This is a post title here</a></h6>
                                                <span><i class="fa fa-home"></i> Interior  | <i class="fa fa-eye"></i>
1135 Views</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- / END TRENDING POSTS DESIGN AREA -->
                                
                                <!-- START CATEGORY DESIGN AREA -->
                                <div class="right-sidebar sidebar-categories-area">
                                    <div class="widget-title">
                                        <h4>POST CATEGORIES</h4>
                                    </div>
                                    <ul>
                                        <li class="cat-item"><a href="#">Motivational <span>(10)</span></a></li>
                                        <li class="cat-item"><a href="#">Sports <span>(18)</span></a></li>
                                        <li class="cat-item"><a href="#">Interior <span>(14)</span></a></li>
                                        <li class="cat-item"><a href="#">Lifestyle <span>(9)</span></a></li>
                                        <li class="cat-item"><a href="#">Information <span>(15)</span></a></li>
                                        <li class="cat-item"><a href="#">Hobby <span>(7)</span></a></li>
                                        <li class="cat-item"><a href="#">Food <span>(13)</span></a></li>
                                        <li class="cat-item"><a href="#">Interior <span>(17)</span></a></li>
                                        <li class="cat-item"><a href="#">Music <span>(19)</span></a></li>
                                    </ul>
                                </div>
                                <!-- / END CATEGORY DESIGN AREA -->
                                
                                <!-- START TAG DESIGN AREA -->
                                <div class="right-sidebar sidebar-tags-area last">
                                    <div class="widget-title">
                                        <h4>TAG CLOUD</h4>
                                    </div>
                                    <ul class="sidebar-tags-list">
                                        <li><a href="#">Interior</a></li>
                                        <li><a href="#">Hobby</a></li>
                                        <li><a href="#">Information</a></li>
                                        <li><a href="#">Life Style</a></li>
                                        <li><a href="#">Insider</a></li>
                                        <li><a href="#">Outsider</a></li>
                                    </ul>
                                </div>
                                <!-- / END TAG DESIGN AREA -->
                            </div>        
                        </div>
                        <!-- / END SIDEBAR CONTENT DESIGN AREA -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / END MAIN CONTENT DESIGN AREA -->
    
    <!-- START PHOTO GALLERY DESIGN AREA -->
    <section id="photo-gallery" class="photo-gallery-area section-padding" data-stellar-background-ratio="0.6">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4"></div>
                    <div class="col-md-4 section-title">
                        <h2>Photo Gallery</h2>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
            <div class="row">
                <div class="photo-gallery-list wow fadeInUp">
                    <!-- START PHOTO GALLERY PHOTO DESIGN AREA -->
                    <div class="photo-gallery-photo text-center">
                        <div class="item">
                            <figure><img src="/frontend/assets/images/photo-gallery/1.jpg" alt=""></figure>
                        </div>
                    </div>
                    <!-- / END PHOTO GALLERY PHOTO DESIGN AREA -->
                    <!-- START PHOTO GALLERY PHOTO DESIGN AREA -->
                    <div class="photo-gallery-photo text-center">
                        <figure><img src="/frontend/assets/images/photo-gallery/2.jpg" alt=""></figure>
                    </div>
                    <!-- / END PHOTO GALLERY PHOTO DESIGN AREA -->
                    <!-- START PHOTO GALLERY PHOTO DESIGN AREA -->
                    <div class="photo-gallery-photo text-center">
                        <figure><img src="/frontend/assets/images/photo-gallery/3.jpg" alt=""></figure>
                    </div>
                    <!-- / END PHOTO GALLERY PHOTO DESIGN AREA -->
                    <!-- START PHOTO GALLERY PHOTO DESIGN AREA -->
                    <div class="photo-gallery-photo text-center">
                        <div class="item">
                            <figure><img src="/frontend/assets/images/photo-gallery/4.jpg" alt=""></figure>
                        </div>
                    </div>
                    <!-- / END PHOTO GALLERY PHOTO DESIGN AREA -->
                    <!-- START PHOTO GALLERY PHOTO DESIGN AREA -->
                    <div class="photo-gallery-photo text-center">
                        <figure><img src="/frontend/assets/images/photo-gallery/5.jpg" alt=""></figure>
                    </div>
                    <!-- / END PHOTO GALLERY PHOTO DESIGN AREA -->
                    <!-- START PHOTO GALLERY PHOTO DESIGN AREA -->
                    <div class="photo-gallery-photo text-center">
                        <figure><img src="/frontend/assets/images/photo-gallery/6.jpg" alt=""></figure>
                    </div>
                    <!-- / END PHOTO GALLERY PHOTO DESIGN AREA -->
                </div>
            </div>
        </div>
    </section>
    <!-- / END PHOTO GALLERY DESIGN AREA -->

    <!-- START FOOTER DESIGN AREA -->    
    <footer class="footer-area wow fadeInUp" data-wow-delay="1s">
        <div class="container">
            <div class="row text-center">
                <a class="logo" href="/frontend/index.html">SCANDAL</a>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p class="short-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    <div class="footer-social-link text-center">
                        <ul>
                            <li class="active"><a href="/frontend/index.html">Home</a></li>
                            <li><a href="#">Inspiration</a></li>
                            <li><a href="/frontend/gallery.html">Gallery</a></li>
							 <li><a href="/frontend/video-gallery.html">Videos</a></li>
                            <li><a href="#main-content">Blog</a></li>
                            <li><a href="/frontend/about.html">About</a></li>
                            <li><a href="/frontend/contact.html">Contact</a></li>
                        </ul>
                    </div>
                    <div class="footer-text">
                        <p class="copyright">&copy;copyright | SCANDAL 2017.Developed by DuezaThemes</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- / END FOOTER DESIGN AREA -->

    <!-- START SCROOL UP DESIGN AREA -->
    <div class="scroll-to-up">
        <div class="scrollup">
            <span class="lnr lnr-chevron-up"></span>
        </div>
    </div>
    <!-- / END SCROOL UP DESIGN AREA -->
@endsection

