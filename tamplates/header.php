<!--start loader-->
<div class="loader center-block">
    <div class="spinner">
        <div class="spinner-container container1">
            <div class="circle1"></div>
            <div class="circle2"></div>
            <div class="circle3"></div>
            <div class="circle4"></div>
        </div>
        <div class="spinner-container container2">
            <div class="circle1"></div>
            <div class="circle2"></div>
            <div class="circle3"></div>
            <div class="circle4"></div>
        </div>

    </div>
</div>
<!--loader end-->
<header id="home">
    <div class="container">
        <div class="upper-nav">
            <div class="row">
                <div class="col-6 d-flex align-items-center">
                    <div class="contact-info">
                        <?php if ((isset($_SESSION['shop']) && $_SESSION['shop'] == 'maglod')) : ?>
                            <span><i class="lni lni-whatsapp"></i><a href="tel:+36706314648"> +36706314648 </a></span>
                        <?php else : ?>
                            <?php if ((isset($_SESSION['shop']) && $_SESSION['shop'] == 'budaors')) : ?>
                                <span><i class="lni lni-whatsapp"></i><a href="tel:+36709044891"> +36709044891 </a></span>
                            <?php else : ?>
                                <?php if ((isset($_SESSION['shop']) && $_SESSION['shop'] == 'soroksar')) : ?>
                                    <span><i class="lni lni-whatsapp"></i><a href="tel:+36706314596"> +36706314596 </a></span>
                                <?php endif ?>
                            <?php endif ?>
                        <?php endif ?>
                    </div>
                </div>
                <div class="col-6">
                    <div class="contact-social-icons d-flex justify-content-end align-items-center">
                        <ul class="upper-social-icons">
                            <li><a href="#" class="facebook-text-hvr"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" class="instagrams-text-hvr"><i class="lni lni-instagram-filled"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-nav">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand bg-dark" href="/"><img src="/img/logo.png"></a>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link wow fadeInUp scroll" href="./#home">Kezdőlap</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link wow fadeInDown scroll" href="./#about-sec">Rólunk</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link wow fadeInUp scroll" href="./#company-portfolio-section">Galléria</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link wow fadeInDown scroll" href="./#testimonial-sec">Csomagok</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link wow fadeInUp scroll" href="./#lastest-blog">Üzleteink</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link wow fadeInUp scroll" href="./#skill-sec">Kvíz</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link wow fadeInDown scroll" href="./#contact-sec">Kapcsolat</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--Side Menu Button-->

    <a href="javascript:void(0)" class="sidemenu_btn" id="sidemenu_toggle">
        <i class="lni lni-menu"></i>
    </a>
    <!--Side Nav-->
    <div class="side-menu hidden side-menu-opacity">
        <div class="inner-wrapper">
            <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
            <a class="navbar-brand" href="/"><img src="/img/logo.png" alt="logo"></a>
            <nav class="side-nav w-100">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link wow fadeInUp scroll" href="./#home">Kezdőlap</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link wow fadeInDown scroll1" href="./#about-sec">Rólunk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link wow fadeInUp scroll" href="./#company-portfolio-section">Galléria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link wow fadeInDown scroll" href="./#testimonial-sec">Csomagok</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link wow fadeInUp scroll" href="./#lastest-blog">Üzleteink</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link wow fadeInUp scroll" href="./#skill-sec">Kvíz</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link wow fadeInDown scroll" href="./#contact-sec">Kapcsolat</a>
                    </li>
                </ul>
            </nav>

            <div class="side-footer text-white w-100 d-flex justify-content-center">
                <ul class="social-icons-simple">
                    <li><a class="facebook-text-hvr" href="javascript:void(0)"><i class="fab fa-facebook-f"></i>
                        </a> </li>
                    <li><a class="youtube-text-hvr" href="javascript:void(0)"><i class="fab fa-youtube"></i> </a>
                    </li>
                    <li><a class="twitter-text-hvr" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a>
                    </li>
                    <li><a class="instagram-text-hvr" href="javascript:void(0)"><i class="fab fa-instagram"></i>
                        </a> </li>
                </ul>
            </div>
        </div>
        <svg class="separator__svg" id="site-mmenu-svg" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none" fill="#fff" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <path d="M 100 100 V 10 L 0 100" />
            <path d="M 30 73 L 100 18 V 10 Z" fill="#fff" stroke-width="0" />
        </svg>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>

</header>