@extends('user.master')

@section('user-content')
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

