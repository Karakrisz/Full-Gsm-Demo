<div class="banner parallax">
    <div class="container-fluid">
        <div class="row banner-row">
            <div class="col-12 col-lg-7 d-flex justify-content-center justify-content-lg-end align-items-center text-center text-lg-right">
                <div class="banner-text-left wow fadeInLeft" data-depth="0.1">
                    <h1 class="c-white">Szerviz</h1>
                    <h2 class="c-white">Gyors & Megbízható & Prémium</h2>
                </div>
            </div>
            <div class="col-12 col-lg-5 d-flex align-items-center">
                <div class="banner-text-right wow fadeInRight" data-depth="0.1">
                    <div class="overlay-yellow-box"></div>
                    <div class="banner-right-area-content">
                        <h2>Tartozékok<span class="main-bold-text"> SZÉLES VÁLASZTÉKBAN</span></h2>
                        <p> Ha értesülni szeretnél havi akcióinkról, vagy termékeink újítását kísérnéd figyelemmel,
                            akkor kövess minket.
                            Folyamatosan bővül kínáltunk, legkorszerűbb termékeket láthatod a legkedvezőbb áron!</p>
                        <a href="#company-portfolio-section" class="scroll btn btn-large btn-rounded white-tran-black-btn">Nézd
                            meg termékeinket</a>
                        <div class="d-flex flex-column">
                            <?php if (array_key_exists("shop", $_SESSION)) : ?>
                                <a class="shop-name"> <?php esc($shop["shop-name"])  ?>
                                </a>
                            <?php endif ?>
                            <h1 class="route-plan flashit">
                                <a class="scroll" href="./#contact-sec">Útvonalterv</a>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--About Star-->
<section class="about-sec" id="about-sec">
    <svg id="about-header-svg" class="separator__svg" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none" fill="#f50206;" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path d="M 100 100 V 10 L 0 100" />
        <path d="M 30 73 L 100 18 V 10 Z" fill="#f50206;" stroke-width="0" />
    </svg>
    <div class="container">
        <div class="row">
            <!-- Heading Area-->
            <div class="col-lg-5 wow fadeInUp">
                <div class="service-details pc-pt-150">
                    <h1>Nálunk</h1>
                    <h1><span>mindent</span> megtalálsz</h1>
                    <h2> jó áron, Prémium minőségben</h2>
                    <a href="javascript:void(0);" class="btn btn-large btn-rounded btn-black-white-background mr-2 mt-2">Bővebben</a>
                </div>
            </div>

            <!-- Features Box-->
            <div class="col-lg-7">
                <div class="services-area-width-manage">
                    <div class="row no-gutters services-area">
                        <div class="col-12 col-md-6 services text-center">
                            <div class="service-card wow fadeInRight">
                                <div class="icon-holder">
                                    <i class="lni lni-briefcase"></i>
                                </div>
                                <h4 class="card-heading">Minden ami gsm</h4>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 services text-center">
                            <div class="service-card wow fadeInRight">
                                <div class="icon-holder">
                                    <i class="lni lni-cog"></i>
                                </div>
                                <h4 class="card-heading">Mobiletelefon szerviz</h4>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 services text-center">
                            <div class="service-card wow fadeInRight" data-wow-delay=".5s">
                                <div class="icon-holder">
                                    <i class="lni lni-heart"></i>
                                </div>
                                <h4 class="card-heading">Kiegészítők</h4>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 services text-center">
                            <div class="service-card wow fadeInRight" data-wow-delay=".5s">
                                <div class="icon-holder">
                                    <i class="lni lni-bulb"></i>
                                </div>
                                <h4 class="card-heading">Okos pont</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <svg id="banner_svg" class="separator__svg" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none" fill="#ffffff" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path d="M 100 100 V 10 L 0 100" />
        <path d="M 30 73 L 100 18 V 10 Z" fill="#ffffff" stroke-width="0" />
        <img src="img/pot.png" class="wow slideInLeft" data-wow-delay="1s" alt="plant">
    </svg>
</section>
<!--About End-->

<!--Skill section start-->
<section class="skill-sec" id="skill-sec">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 offset-lg-5 text-center text-lg-right">
                <div class="skill-details">
                    <h5 class="c-red"> HAMAROSAN !!! </h5>
                    <h2 class="title">Minden hónapban, játszhatsz velünk, <span class="c-red"> kvíz</span>
                        alkalmazásunkkal </h2>
                    <p class="paragraph">Csupán pár kérdésünkre kell válaszolnod, és ha ügyes vagy, akkor akár
                        megnyerheted a legnagyobb csomagunk egyikét. Felruházzuk készüléked! Csomagjainkról bővebb
                        információkat láthatsz lejjebb!</p>
                </div>
            </div>
            <div class="col-12">
                <div class="skill-bars">
                    <ul class="text-left list-unstyled">
                        <!--Progress Bar-->
                        <li class="progress-item wow fadeInLeft">
                            <h6>Tervezés</h6>
                            <div class="progress bar" data-width="79%">
                                <div class="progress-bar rounded-left bg-warning bar-inner" role="progressbar">
                                    <span>79%<i class="fas fa-caret-down"></i></span></div>
                            </div>
                        </li>
                        <!--Progress Bar-->
                        <li class="progress-item wow fadeInRight" data-wow-delay=".5s">
                            <h6>Felépítés</h6>
                            <div class="progress bar" data-width="95%">
                                <div class="progress-bar rounded-left bg-warning bar-inner" role="progressbar">
                                    <span>95%<i class="fas fa-caret-down"></i></span></div>
                            </div>
                        </li>
                        <!--Progress Bar-->
                        <li class="progress-item wow fadeInLeft" data-wow-delay=".6s">
                            <h6>Design</h6>
                            <div class="progress bar" data-width="87%">
                                <div class="progress-bar rounded-left bg-warning bar-inner" role="progressbar">
                                    <span>87%<i class="fas fa-caret-down"></i></span></div>
                            </div>
                        </li>
                        <!--Progress Bar-->
                        <li class="progress-item wow fadeInRight" data-wow-delay=".7s">
                            <h6>Stratégia</h6>
                            <div class="progress bar" data-width="57%">
                                <div class="progress-bar rounded-left bg-warning bar-inner" role="progressbar">
                                    <span>57%<i class="fas fa-caret-down"></i></span></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Skill section start-->

<!--team section start-->
<section class="team-section" id="team-section">
    <svg class="separator__svg" id="team-header-svg" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none" fill="#fff" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path d="M 100 100 V 10 L 0 100" />
        <path d="M 30 73 L 100 18 V 10 Z" fill="#fff" stroke-width="0" />
    </svg>
    <div class="container position-relative">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="team-details pr-lg-5">
                    <h6 class="sub-title main-color"> ismerj meg minket </h6>
                    <h2 class="title">A Mi innovatív csapatunk </h2>
                </div>
            </div>
            <div class="col-12 col-lg-12 team-member-area">
                <div class="testimonial-team owl-carousel owl-theme">
                    <div class="item text-center wow fadeInUp">
                        <div class="image-holder">
                            <img src="img/team1.png" alt="team1">
                        </div>
                        <h3 class="team-name">Richard Stevens</h3>
                    </div>
                    <div class="item text-center wow fadeInUp" data-wow-delay=".3s">
                        <div class="image-holder">
                            <img src="img/team2.png" alt="team1">
                        </div>
                        <h3 class="team-name">Lisa Warrior</h3>
                    </div>
                    <div class="item text-center wow fadeInUp" data-wow-delay=".4s">
                        <div class="image-holder">
                            <img src="img/team3.png" alt="team1">
                        </div>
                        <h3 class="team-name">Mark J Stevens</h3>
                    </div>
                    <div class="item text-center">
                        <div class="image-holder">
                            <img src="img/team1.png" alt="team1">
                        </div>
                        <h3 class="team-name">Richard Stevens</h3>
                    </div>
                    <div class="item text-center">
                        <div class="image-holder">
                            <img src="img/team2.png" alt="team1">
                        </div>
                        <h3 class="team-name">Lisa Warrior</h3>
                    </div>
                    <div class="item text-center">
                        <div class="image-holder">
                            <img src="img/team3.png" alt="team1">
                        </div>
                        <h3 class="team-name">Mark J Stevens</h3>
                    </div>
                </div>
            </div>
        </div>
        <a class='circle' id="team-circle-left"><i class="lni lni-chevron-left"></i></a>
        <a class='circle' id="team-circle-right"><i class="lni lni-chevron-right"></i></a>
    </div>
    <svg class="separator__svg" id="team-foot-svg" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none" fill="#fff" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path d="M 100 100 V 10 L 0 100" />
        <path d="M 30 73 L 100 18 V 10 Z" fill="#fff" stroke-width="0" />
    </svg>
</section>
<!--team section start-->

<!--portfolio section start-->
<section class="portfolio-sec company-portfolio-section padding-top" id="company-portfolio-section">
    <div class="container">
        <div class="section-heading">
            <div class="row">
                <div class="col-lg-6 wow fadeInUp text-center text-lg-left" data-wow-delay="300ms">
                    <h1 class="heading"> A legkorszerűbb </h1>
                    <h1 class="heading">Full gsm termékeink </h1>
                </div>
                <div class="col-md-12 pt-5">
                    <div id="js-filters-mosaic" class="cbp-l-filters-button wow fadeInUp text-center text-lg-left" data-wow-delay="350ms">
                        <div data-filter=".silicon-case" class="cbp-filter-item">szilikon tokok</div>
                        <div data-filter=".book-case" class="cbp-filter-item">könvv tokok</div>
                        <div data-filter=".security-case" class="cbp-filter-item">biztonsági tokok</div>
                        <div data-filter=".smart-case" class="cbp-filter-item">okostokok</div>
                        <div data-filter=".mobile-glass" class="cbp-filter-item">üvegfóliák</div>
                        <div data-filter=".3dglass" class="cbp-filter-item">3d üvegfóliák</div>
                        <div data-filter=".foil" class="cbp-filter-item">fóliák</div>
                    </div>

                    <div id="js-grid-mosaic" class="cbp cbp-l-grid-mosaic pc-pt-200">
                        <div class="cbp-item silicon-case">
                            <a href="img/silicon-case/silicon-case.jpg" class="cbp-caption cbp-lightbox" data-title="Üzletünkben olyan magas minőségű, átlátszó, színes és mintás prémium tokok <br>kaphatóak, melyek nem csak kényelmes fogást biztosítanak,<br> de remekül megvédik a készüléket a sérülésektől. <br> Az esetek 99% -ban bármilyen típusra tudjuk biztosítani a kívánt terméket! <br> Kérjük ennek hatékonysága érdekében, hívj minket bizalommal és és érdeklődj telefonon, <br> vagy írj üzenetet oldalunkon keresztül!">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="img/silicon-case/silicon-case.jpg" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">Szilikon tok</h4>
                                        <p class="p-hover-des">Full GSM</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="cbp-item  silicon-case">
                            <a href="img/silicon-case/silicon-case-2.jpg" class="cbp-caption cbp-lightbox" data-title="Üzletünkben olyan magas minőségű, átlátszó, színes és mintás prémium tokok <br>kaphatóak, melyek nem csak kényelmes fogást biztosítanak,<br> de remekül megvédik a készüléket a sérülésektől. <br> Az esetek 99% -ban bármilyen típusra tudjuk biztosítani a kívánt terméket! <br> Kérjük ennek hatékonysága érdekében, hívj minket bizalommal és és érdeklődj telefonon, <br> vagy írj üzenetet oldalunkon keresztül!">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="img/silicon-case/silicon-case-2.jpg" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">Szilikon tok</h4>
                                        <p class="p-hover-des">Full GSM</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="cbp-item  silicon-case">
                            <a href="img/silicon-case/silicon-case-3.jpg" class="cbp-caption cbp-lightbox" data-title="Üzletünkben olyan magas minőségű, átlátszó, színes és mintás prémium tokok <br>kaphatóak, melyek nem csak kényelmes fogást biztosítanak,<br> de remekül megvédik a készüléket a sérülésektől. <br> Az esetek 99% -ban bármilyen típusra tudjuk biztosítani a kívánt terméket! <br> Kérjük ennek hatékonysága érdekében, hívj minket bizalommal és és érdeklődj telefonon, <br> vagy írj üzenetet oldalunkon keresztül!">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="img/silicon-case/silicon-case-3.jpg" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">Szilikon tok</h4>
                                        <p class="p-hover-des">Full GSM</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="cbp-item  silicon-case">
                            <a href="img/silicon-case/silicon-case-4.jpg" class="cbp-caption cbp-lightbox" data-title="Üzletünkben olyan magas minőségű, átlátszó, színes és mintás prémium tokok <br>kaphatóak, melyek nem csak kényelmes fogást biztosítanak,<br> de remekül megvédik a készüléket a sérülésektől. <br> Az esetek 99% -ban bármilyen típusra tudjuk biztosítani a kívánt terméket! <br> Kérjük ennek hatékonysága érdekében, hívj minket bizalommal és és érdeklődj telefonon, <br> vagy írj üzenetet oldalunkon keresztül!">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="img/silicon-case/silicon-case-4.jpg" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">Szilikon tok</h4>
                                        <p class="p-hover-des">Full GSM</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="cbp-item  silicon-case">
                            <a href="img/silicon-case/silicon-case-5.jpg" class="cbp-caption cbp-lightbox" data-title="Üzletünkben olyan magas minőségű, átlátszó, színes és mintás prémium tokok <br>kaphatóak, melyek nem csak kényelmes fogást biztosítanak,<br> de remekül megvédik a készüléket a sérülésektől. <br> Az esetek 99% -ban bármilyen típusra tudjuk biztosítani a kívánt terméket! <br> Kérjük ennek hatékonysága érdekében, hívj minket bizalommal és és érdeklődj telefonon, <br> vagy írj üzenetet oldalunkon keresztül!">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="img/silicon-case/silicon-case-5.jpg" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">Szilikon tok</h4>
                                        <p class="p-hover-des">Full GSM</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="cbp-item  silicon-case">
                            <a href="img/silicon-case/silicon-case-6.jpg" class="cbp-caption cbp-lightbox" data-title="Üzletünkben olyan magas minőségű, átlátszó, színes és mintás prémium tokok <br>kaphatóak, melyek nem csak kényelmes fogást biztosítanak,<br> de remekül megvédik a készüléket a sérülésektől. <br> Az esetek 99% -ban bármilyen típusra tudjuk biztosítani a kívánt terméket! <br> Kérjük ennek hatékonysága érdekében, hívj minket bizalommal és és érdeklődj telefonon, <br> vagy írj üzenetet oldalunkon keresztül!">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="img/silicon-case/silicon-case-6.jpg" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">Szilikon tok</h4>
                                        <p class="p-hover-des">Full GSM</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="cbp-item  silicon-case">
                            <a href="img/silicon-case/silicon-case-7.jpg" class="cbp-caption cbp-lightbox" data-title="Üzletünkben olyan magas minőségű, átlátszó, színes és mintás prémium tokok <br>kaphatóak, melyek nem csak kényelmes fogást biztosítanak,<br> de remekül megvédik a készüléket a sérülésektől. <br> Az esetek 99% -ban bármilyen típusra tudjuk biztosítani a kívánt terméket! <br> Kérjük ennek hatékonysága érdekében, hívj minket bizalommal és és érdeklődj telefonon, <br> vagy írj üzenetet oldalunkon keresztül!">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="img/silicon-case/silicon-case-7.jpg" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">Szilikon tok</h4>
                                        <p class="p-hover-des">Full GSM</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="cbp-item  book-case">
                            <a href="img/book-case/book_case.jpg" class="cbp-caption cbp-lightbox" data-title="Notesz tipusú kinyitható tokjaink a tökéletesen kialakított forma miatt pontosan <br> illeszkednek az adott készülékhez. <br>A mágneses zárnak köszönhetően minden irányból véd a mechanika sérülések ellen.<br> Az esetek 99% -ban bármilyen típusra tudjuk biztosítani a kívánt terméket <br>! Kérjük ennek hatékonysága érdekében, hívj minket bizalommal és és érdeklődj telefonon, <br>vagy írj üzenetet oldalunkon keresztül!">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="img/book-case/book_case.jpg" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">Development</h4>
                                        <p class="p-hover-des">35 WP Anniversary</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="cbp-item  book-case">
                            <a href="img/book-case/book_case-2.jpg" class="cbp-caption cbp-lightbox" data-title="Notesz tipusú kinyitható tokjaink a tökéletesen kialakított forma miatt pontosan <br> illeszkednek az adott készülékhez. <br>A mágneses zárnak köszönhetően minden irányból véd a mechanika sérülések ellen.<br> Az esetek 99% -ban bármilyen típusra tudjuk biztosítani a kívánt terméket <br>! Kérjük ennek hatékonysága érdekében, hívj minket bizalommal és és érdeklődj telefonon, <br>vagy írj üzenetet oldalunkon keresztül!">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="img/book-case/book_case-2.jpg" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">Könyv tok</h4>
                                        <p class="p-hover-des">Full GSM</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="cbp-item  book-case">
                            <a href="img/book-case/book-case-3.jpg" class="cbp-caption cbp-lightbox" data-title="Notesz tipusú kinyitható tokjaink a tökéletesen kialakított forma miatt pontosan <br> illeszkednek az adott készülékhez. <br>A mágneses zárnak köszönhetően minden irányból véd a mechanika sérülések ellen.<br> Az esetek 99% -ban bármilyen típusra tudjuk biztosítani a kívánt terméket <br>! Kérjük ennek hatékonysága érdekében, hívj minket bizalommal és és érdeklődj telefonon, <br>vagy írj üzenetet oldalunkon keresztül!">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="img/book-case/book-case-3.jpg" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">Könyv tok</h4>
                                        <p class="p-hover-des">Full GSM</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="cbp-item  book-case">
                            <a href="img/book-case/book-case-4.jpg" class="cbp-caption cbp-lightbox" data-title="Notesz tipusú kinyitható tokjaink a tökéletesen kialakított forma miatt pontosan <br> illeszkednek az adott készülékhez. <br>A mágneses zárnak köszönhetően minden irányból véd a mechanika sérülések ellen.<br> Az esetek 99% -ban bármilyen típusra tudjuk biztosítani a kívánt terméket <br>! Kérjük ennek hatékonysága érdekében, hívj minket bizalommal és és érdeklődj telefonon, <br>vagy írj üzenetet oldalunkon keresztül!">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="img/book-case/book-case-4.jpg" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">Könyv tok</h4>
                                        <p class="p-hover-des">Full GSM</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="cbp-item  security-case">
                            <a href="img/security-case/security-cases.jpg" class="cbp-caption cbp-lightbox" data-title="Ütésálló tokjaink fokozott védelmet nyújtanak készülékének megelőzve a károsodást.<br> Prémium anyaghasználat mellett a dizájn sem utolsó szempont, <br> ízléses és elegáns formatervezés jellemzi. <br> Az esetek 99% -ban bármilyen típusra tudjuk biztosítani a kívánt terméket! <br> Kérjük ennek hatékonysága érdekében, <br> hívj minket bizalommal és és érdeklődj telefonon, vagy írj üzenetet oldalunkon keresztül!">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="img/security-case/security-cases.jpg" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">Biztonsági tok</h4>
                                        <p class="p-hover-des">Full GSM</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="cbp-item  security-case">
                            <a href="img/security-case/security-cases-2.jpg" class="cbp-caption cbp-lightbox" data-title="Ütésálló tokjaink fokozott védelmet nyújtanak készülékének megelőzve a károsodást.<br> Prémium anyaghasználat mellett a dizájn sem utolsó szempont, <br> ízléses és elegáns formatervezés jellemzi. <br> Az esetek 99% -ban bármilyen típusra tudjuk biztosítani a kívánt terméket! <br> Kérjük ennek hatékonysága érdekében, <br> hívj minket bizalommal és és érdeklődj telefonon, vagy írj üzenetet oldalunkon keresztül!">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="img/security-case/security-cases-2.jpg" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">Biztonsági tok</h4>
                                        <p class="p-hover-des">Full GSM</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="cbp-item security-case">
                            <a href="img/security-case/security-cases-3.jpg" class="cbp-caption cbp-lightbox" data-title="Ütésálló tokjaink fokozott védelmet nyújtanak készülékének megelőzve a károsodást.<br> Prémium anyaghasználat mellett a dizájn sem utolsó szempont, <br> ízléses és elegáns formatervezés jellemzi. <br> Az esetek 99% -ban bármilyen típusra tudjuk biztosítani a kívánt terméket! <br> Kérjük ennek hatékonysága érdekében, <br> hívj minket bizalommal és és érdeklődj telefonon, vagy írj üzenetet oldalunkon keresztül!">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="img/security-case/security-cases-3.jpg" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">Biztonsági tok</h4>
                                        <p class="p-hover-des">Full GSM</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="cbp-item  security-case">
                            <a href="img/security-case/security-cases-4.jpg" class="cbp-caption cbp-lightbox" data-title="Ütésálló tokjaink fokozott védelmet nyújtanak készülékének megelőzve a károsodást.<br> Prémium anyaghasználat mellett a dizájn sem utolsó szempont, <br> ízléses és elegáns formatervezés jellemzi. <br> Az esetek 99% -ban bármilyen típusra tudjuk biztosítani a kívánt terméket! <br> Kérjük ennek hatékonysága érdekében, <br> hívj minket bizalommal és és érdeklődj telefonon, vagy írj üzenetet oldalunkon keresztül!">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="img/security-case/security-cases-4.jpg" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">Biztonsági tok</h4>
                                        <p class="p-hover-des">Full GSM</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="cbp-item  smart-case">
                            <a href="img/smart-case/smart-cover.jpg" class="cbp-caption cbp-lightbox" data-title="Aki egy igazán innovatív és elegáns tokra vágyik, amely nem csak a védelem, <br> de a használat szempontjából is kiemelkedő, akkor egy okostok kiváló választás. <br> Intelligens kijelzőjének köszönhetően olyan adatok jelennek meg a tok felületén, <br> mint például az idő vagy az aktuális hívás, mely felvehető és lebonyolítható a tok kinyitása nélkül. <br> Az esetek 99% -ban bármilyen típusra tudjuk biztosítani a kívánt terméket!  <br> Kérjük ennek hatékonysága érdekében, hívj minket bizalommal és és érdeklődj telefonon, <br> vagy írj üzenetet oldalunkon keresztül!">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="img/smart-case/smart-cover.jpg" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">Okos tok</h4>
                                        <p class="p-hover-des">Full GSM</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="cbp-item  smart-case">
                            <a href="img/smart-case/smart-cover-2.jpg" class="cbp-caption cbp-lightbox" data-title="Aki egy igazán innovatív és elegáns tokra vágyik, amely nem csak a védelem, <br> de a használat szempontjából is kiemelkedő, akkor egy okostok kiváló választás. <br> Intelligens kijelzőjének köszönhetően olyan adatok jelennek meg a tok felületén, <br> mint például az idő vagy az aktuális hívás, mely felvehető és lebonyolítható a tok kinyitása nélkül. <br> Az esetek 99% -ban bármilyen típusra tudjuk biztosítani a kívánt terméket!  <br> Kérjük ennek hatékonysága érdekében, hívj minket bizalommal és és érdeklődj telefonon, <br> vagy írj üzenetet oldalunkon keresztül!">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="img/smart-case/smart-cover-2.jpg" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">Okos tok</h4>
                                        <p class="p-hover-des">Full GSM</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="cbp-item  smart-case">
                            <a href="img/smart-case/smart-cover-3.jpg" class="cbp-caption cbp-lightbox" data-title="Aki egy igazán innovatív és elegáns tokra vágyik, amely nem csak a védelem, <br> de a használat szempontjából is kiemelkedő, akkor egy okostok kiváló választás. <br> Intelligens kijelzőjének köszönhetően olyan adatok jelennek meg a tok felületén, <br> mint például az idő vagy az aktuális hívás, mely felvehető és lebonyolítható a tok kinyitása nélkül. <br> Az esetek 99% -ban bármilyen típusra tudjuk biztosítani a kívánt terméket!  <br> Kérjük ennek hatékonysága érdekében, hívj minket bizalommal és és érdeklődj telefonon, <br> vagy írj üzenetet oldalunkon keresztül!">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="img/smart-case/smart-cover-3.jpg" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">Okos tok</h4>
                                        <p class="p-hover-des">Full GSM</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="cbp-item  mobile-glass">
                            <a href="img/mobile-glass/mobile-glass.jpg" class="cbp-caption cbp-lightbox" data-title="Átlátszó, edzett üvegfólia, mely a nagyobb és mélyebb karcok mellett, <br>  a töréstől is megvédi a készülék kijelzőjét. <br> Gyorsan és könnyen felhelyezhető akár otthoni körülmények között is. <br> Az esetek 99% -ban bármilyen típusra tudjuk biztosítani a kívánt terméket! <br> Kérjük ennek hatékonysága érdekében, hívj minket bizalommal és és érdeklődj telefonon, <br> vagy írj üzenetet oldalunkon keresztül!">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="img/mobile-glass/mobile-glass.jpg" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">Üveg fólia</h4>
                                        <p class="p-hover-des">Full GSM</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="cbp-item  mobile-glass">
                            <a href="img/mobile-glass/mobile-glass-2.jpg" class="cbp-caption cbp-lightbox" data-title="Átlátszó, edzett üvegfólia, mely a nagyobb és mélyebb karcok mellett, <br>  a töréstől is megvédi a készülék kijelzőjét. <br> Gyorsan és könnyen felhelyezhető akár otthoni körülmények között is. <br> Az esetek 99% -ban bármilyen típusra tudjuk biztosítani a kívánt terméket! <br> Kérjük ennek hatékonysága érdekében, hívj minket bizalommal és és érdeklődj telefonon, <br> vagy írj üzenetet oldalunkon keresztül!">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="img/mobile-glass/mobile-glass-2.jpg" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">Üveg fólia</h4>
                                        <p class="p-hover-des">Full GSM</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="cbp-item  mobile-glass">
                            <a href="img/mobile-glass/mobile-glass-3.jpg" class="cbp-caption cbp-lightbox" data-title="Átlátszó, edzett üvegfólia, mely a nagyobb és mélyebb karcok mellett, <br>  a töréstől is megvédi a készülék kijelzőjét. <br> Gyorsan és könnyen felhelyezhető akár otthoni körülmények között is. <br> Az esetek 99% -ban bármilyen típusra tudjuk biztosítani a kívánt terméket! <br> Kérjük ennek hatékonysága érdekében, hívj minket bizalommal és és érdeklődj telefonon, <br> vagy írj üzenetet oldalunkon keresztül!">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="img/mobile-glass/mobile-glass-3.jpg" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">Üveg fólia</h4>
                                        <p class="p-hover-des">Full GSM</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="cbp-item  mobile-glass">
                            <a href="img/mobile-glass/mobile-glass-4.jpg" class="cbp-caption cbp-lightbox" data-title="Átlátszó, edzett üvegfólia, mely a nagyobb és mélyebb karcok mellett, <br>  a töréstől is megvédi a készülék kijelzőjét. <br> Gyorsan és könnyen felhelyezhető akár otthoni körülmények között is. <br> Az esetek 99% -ban bármilyen típusra tudjuk biztosítani a kívánt terméket! <br> Kérjük ennek hatékonysága érdekében, hívj minket bizalommal és és érdeklődj telefonon, <br> vagy írj üzenetet oldalunkon keresztül!">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="img/mobile-glass/mobile-glass-4.jpg" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">Üveg fólia</h4>
                                        <p class="p-hover-des">Full GSM</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="cbp-item  3dglass">
                            <a href="img/3D-glass/mobile-3d-glass.jpg" class="cbp-caption cbp-lightbox" data-title=" Edzett, tok barát üvegfólia lekerekített szélekkel, <br> mely tökéletesen lefedi a készülék kijelzőjének teljes felületét. <br> A készülék színéhez passzoló színes kerettel. <br> Az esetek 99% -ban bármilyen típusra tudjuk biztosítani a kívánt terméket! <br> Kérjük ennek hatékonysága érdekében, hívj minket bizalommal és és érdeklődj telefonon, <br> vagy írj üzenetet oldalunkon keresztül! ">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="img/3D-glass/mobile-3d-glass.jpg" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">3D üveg fólia</h4>
                                        <p class="p-hover-des">Full GSM</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="cbp-item  3dglass">
                            <a href="img/3D-glass/mobile-3d-glass-2.jpg" class="cbp-caption cbp-lightbox" data-title=" Edzett, tok barát üvegfólia lekerekített szélekkel, <br> mely tökéletesen lefedi a készülék kijelzőjének teljes felületét. <br> A készülék színéhez passzoló színes kerettel. <br> Az esetek 99% -ban bármilyen típusra tudjuk biztosítani a kívánt terméket! <br> Kérjük ennek hatékonysága érdekében, hívj minket bizalommal és és érdeklődj telefonon, <br> vagy írj üzenetet oldalunkon keresztül! ">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="img/3D-glass/mobile-3d-glass-2.jpg" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">3D üveg fólia</h4>
                                        <p class="p-hover-des">Full GSM</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="cbp-item  3dglass">
                            <a href="img/3D-glass/mobile-3d-glass-3.jpg" class="cbp-caption cbp-lightbox" data-title=" Edzett, tok barát üvegfólia lekerekített szélekkel, <br> mely tökéletesen lefedi a készülék kijelzőjének teljes felületét. <br> A készülék színéhez passzoló színes kerettel. <br> Az esetek 99% -ban bármilyen típusra tudjuk biztosítani a kívánt terméket! <br> Kérjük ennek hatékonysága érdekében, hívj minket bizalommal és és érdeklődj telefonon, <br> vagy írj üzenetet oldalunkon keresztül! ">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="img/3D-glass/mobile-3d-glass-3.jpg" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">3D üveg fólia</h4>
                                        <p class="p-hover-des">Full GSM</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="cbp-item  3dglass">
                            <a href="img/3D-glass/mobile-3d-glass-4.jpg" class="cbp-caption cbp-lightbox" data-title=" Edzett, tok barát üvegfólia lekerekített szélekkel, <br> mely tökéletesen lefedi a készülék kijelzőjének teljes felületét. <br> A készülék színéhez passzoló színes kerettel. <br> Az esetek 99% -ban bármilyen típusra tudjuk biztosítani a kívánt terméket! <br> Kérjük ennek hatékonysága érdekében, hívj minket bizalommal és és érdeklődj telefonon, <br> vagy írj üzenetet oldalunkon keresztül! ">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="img/3D-glass/mobile-3d-glass-4.jpg" alt="img">
                                </div>
                                <div class="cbp-caption-activeWrap portfolio-hover-effect d-flex align-items-end">
                                    <div class="portfolio-inner-content">
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="hover-text">
                                        <h4 class="p-hover-title">3D üveg fólia</h4>
                                        <p class="p-hover-des">Full GSM</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--portfolio section end-->

<!--testimonial section start-->
<section class="testimonial-sec padding-top position-relative" id="testimonial-sec">
    <svg class="separator__svg" id="testimonial-header-svg" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none" fill="#fff" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path d="M 100 100 V 10 L 0 100" />
        <path d="M 30 73 L 100 18 V 10 Z" fill="#fff" stroke-width="0" />
    </svg>
    <div class="container">
        <div class="testimonial-area">
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-title">
                        <h6>Költséghatékony</h6>
                        <h1 class="heading">Full gsm <span> csomagjaink</span></h1>
                    </div>
                </div>
            </div>
            <div class="columns-content pc-pt-50">
                <div class="columns">
                    <ul class="price">
                        <li class="header">Full gsm Small</li>
                        <li class="grey">5000 Ft.-</li>
                        <li class="c-white">Átlátszó szilikon</li>
                        <li class="c-white">Üvegfólia</li>
                        <li class=" grey"><a href="#" class="button"> Tudj meg többet </a></li>
                    </ul>
                </div>

                <div class="columns">
                    <ul class="price">
                        <li class="header">Full gsm Standard</li>
                        <li class="grey">7000 Ft.-</li>
                        <li class="c-white">Szilikon tok</li>
                        <li class="c-white">Üvegfólia</li>
                        <li class="c-white">USB kábel</li>
                        <li class="grey"><a href="#" class="button"> Tudj meg többet </a></li>
                    </ul>
                </div>

                <div class="columns">
                    <ul class="price">
                        <li class="header">Full gsm Big</li>
                        <li class="grey">10.000 Ft.-</li>
                        <li class="c-white">Választható tok</li>
                        <li class="c-white">5D Üvegfólia</li>
                        <li class="c-white">Prémium kábel</li>
                        <li class=" grey"><a href="#" class="button"> Tudj meg többet </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <svg class="separator__svg" id="testimonial-foot-svg" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none" fill="#fff" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path d="M 100 100 V 10 L 0 100" />
        <path d="M 30 73 L 100 18 V 10 Z" fill="#fff" stroke-width="0" />
    </svg>
</section>
<!--testimonial section end-->

<!--brands section start-->
<section class="brand-sec" id="brand">
    <div class="container">
        <!--Partner Slider-->
        <div class="partners-slider owl-carousel owl-theme">
            <div class="logo-item"> <img alt="client-logo" src="img/logo.png"></div>
            <div class="logo-item"> <img alt="client-logo" src="img/logo.png"></div>
            <div class="logo-item"> <img alt="client-logo" src="img/logo.png"></div>
            <div class="logo-item"> <img alt="client-logo" src="img/logo.png"></div>
        </div>
    </div>
</section>
<!--brands section end-->

<!--Lastest Blog section start-->
<section class="lastest-blog" id="lastest-blog">
    <svg class="separator__svg" id="blog-header-svg" width="100%" height="200" viewBox="0 0 100 100" preserveAspectRatio="none" fill="#fff" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path d="M 100 100 V 10 L 0 100" />
        <path d="M 30 73 L 100 18 V 10 Z" fill="#fff" stroke-width="0" />
    </svg>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-100">
                <h5 class="c-white"> Neked melyik van legközelebb? </h5>
                <h2 class="c-white">Válassz <span class="c-red"> Üzleteink</span> közül</h2>
            </div>
            <div class="testimonial-carousel mb-100">
                <div class="testimonial-box owl-carousel owl-theme">
                    <div class="item wow fadeInUp">
                        <div class="icon-holder">
                            <i class="fas fa-quote-right"></i>
                        </div>
                        <p class="text c-white">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae egestas mi, vel dapibus diam. Mauris malesuada, nisl non rutrum commodo, sem magna laoreet tellus, eu euismod dolor enim et mi. In at tempor purus.
                        </p>
                        <div class="mt-100 img-holder">
                            <img src="img/budaörs.jpg">
                        </div>
                        <i class="fas fa-angle-down carousel-shop-arrow flashit c-red mt-20"></i>
                        <form action="/shop/budaors" method="POST">
                            <input type="hidden" name="event" id="event" value="budaors">
                            <button type="submit" class="carousel-shop-name c-red">Budaörs</button>
                        </form>
                    </div>
                    <div class="item wow fadeInUp" data-wow-delay=".3s">
                        <div class="icon-holder">
                            <i class="fas fa-quote-right"></i>
                        </div>
                        <p class="text c-white">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae egestas mi, vel dapibus diam. Mauris malesuada, nisl non rutrum commodo, sem magna laoreet tellus, eu euismod dolor enim et mi. In at tempor purus.
                        </p>
                        <div class="mt-100 img-holder">
                            <img src="img/maglód.jpg">
                        </div>
                        <i class="fas fa-angle-down carousel-shop-arrow flashit c-red mt-20"></i>
                        <form action="/shop/maglod" method="POST">
                            <input type="hidden" name="event" id="event" value="maglod">
                            <button type="submit" class="carousel-shop-name c-red">Maglód</button>
                        </form>
                    </div>
                    <div class="item wow fadeInUp" data-wow-delay=".3s">
                        <div class="icon-holder">
                            <i class="fas fa-quote-right"></i>
                        </div>
                        <p class="text c-white">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae egestas mi, vel dapibus diam. Mauris malesuada, nisl non rutrum commodo, sem magna laoreet tellus, eu euismod dolor enim et mi. In at tempor purus.
                        </p>
                        <div class="mt-100 img-holder">
                            <img src="img/soroksár.jpg">
                        </div>
                        <i class="fas fa-angle-down carousel-shop-arrow flashit c-red mt-20"></i>
                        <form action="/shop/soroksar" method="POST">
                            <input type="hidden" name="event" id="event" value="soroksar">
                            <button type="submit" class="carousel-shop-name c-red">Soroksár</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container position-relative">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-6">
                <div class="blog-content slider-detail wow fadeInDown">
                    <div class="slider-slide">
                        <form action="/shop/budaors" method="POST">
                            <h1><span>full gsm</span> budaörs</h1>
                            <h1>auchan</h1>
                            <p>Üzletünket Budaörsön, a feltüntetett nyitvatartási időben látogathatod. Esetleg ha valamilyen termékkel kapcsolatos kérdés merülne fel, hívj minket bátran telefonon, a megadott számon! Köszönjük, hogy meglátogattad oldalunkat! </p>
                            <input type="hidden" name="event" id="event" value="budaors">
                            <button type="submit" class="btn btn-large btn-rounded white-tran-yellow-btn">Irány
                                az üzlet</button>
                        </form>
                    </div>
                    <div class="slider-slide">
                        <form action="/shop/maglod" method="POST">
                            <h1><span>full gsm</span> maglód</h1>
                            <h1>auchan</h1>
                            <p>Üzletünket Maglódon, a feltüntetett nyitvatartási időben látogathatod. Esetleg ha valamilyen termékkel kapcsolatos kérdés merülne fel, hívj minket bátran telefonon, a megadott számon! Köszönjük, hogy meglátogattad oldalunkat! </p>
                            <input type="hidden" name="event" id="event" value="maglod">
                            <button type="submit" class="btn btn-large btn-rounded white-tran-yellow-btn">Irány
                                az üzlet</button>
                        </form>
                    </div>
                    <div class="slider-slide">
                        <form action="/shop/soroksar" method="POST">
                            <h1><span>full gsm</span> soroksár</h1>
                            <h1>auchan</h1>
                            <p>Üzletünket Budaörsön, a feltüntetett nyitvatartási időben látogathatod. Esetleg ha valamilyen termékkel kapcsolatos kérdés merülne fel, hívj minket bátran telefonon, a megadott számon! Köszönjük, hogy meglátogattad oldalunkat! </p>
                            <input type="hidden" name="event" id="event" value="soroksar">
                            <button type="submit" class="btn btn-large btn-rounded white-tran-yellow-btn">Irány
                                az üzlet</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <div class="blog-img wow fadeInUp">
                    <img src="img/blog-mokeup.png">
                    <div class="slider-img">
                        <div class="img-slide">
                            <img src="img/budaörs.jpg" class="mockup-img">
                        </div>
                        <div class="img-slide">
                            <img src="img/maglód.jpg" class="mockup-img">
                        </div>
                        <div class="img-slide">
                            <img src="img/soroksár.jpg" class="mockup-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class='circle' id="blog-circle-left"><i class="lni lni-chevron-left"></i></a>
        <a class='circle' id="blog-circle-right"><i class="lni lni-chevron-right"></i></a>
    </div>

    <svg class="separator__svg" id="blog-foot-svg" width="100%" height="200" viewBox="0 0 100 100" preserveAspectRatio="none" fill="#fff" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path d="M 100 100 V 10 L 0 100" />
        <path d="M 30 73 L 100 18 V 10 Z" fill="#fff" stroke-width="0" />
    </svg>
</section>
<!--Lastest Blog section start-->

<!--Contact section start-->
<section class="contact-sec">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7">
                <h4 class="heading text-center text-lg-left">FELVESZI A KAPCSOLATOT ?</h4>
                <form method="POST" action="/sendMessage" class=" row contact-form wow fadeInLeft" id="contact-form-data">
                    <div class="col-sm-12" id="result"></div>
                    <div class="col-12 col-md-5">
                        <input type="text" name="userName" id="userName" placeholder="A neved" class="form-control" required>
                        <input type="email" name="userEmail" id="userEmail" placeholder="Email cím *" class="form-control" required>
                        <input type="text" name="userSubject" id="userSubject" placeholder="Tárgy" class="form-control" required>
                    </div>
                    <div class="col-12 col-md-7">
                        <textarea class="form-control" name="userMessage" id="userMessage" rows="6" placeholder="Az üzeneted" required></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn yellow-and-black-btn rounded-pill w-100 contact_btn"><i class="fa fa-spinner fa-spin mr-2 d-none" aria-hidden="true"></i> <b>Üzenet küldése</b>
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-12 col-lg-5 text-center text-lg-left position-relative" id="contact-sec">
                <div class="contact-details wow fadeInRight">
                    <?php if (array_key_exists("shop", $_SESSION)) : ?>
                        <a href="tel:<?php esc($shop["phone"])  ?>" class="footer-shop-phone"> <?php esc($shop["phone"])  ?>
                        </a>
                    <?php endif ?>
                    <h4 class="heading">HELYÜNK</h4>
                    <?php if ((isset($_SESSION['shop']) && $_SESSION['shop'] == 'budaors')) : ?>
                        <iframe class="mb-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2697.788197512868!2d18.941354015759526!3d47.45506797917494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741e083b32e31df%3A0xf5efe617045798e5!2zQXVjaGFuIMOBcnVow6F6IEJ1ZGHDtnJz!5e0!3m2!1shu!2shu!4v1599653049115!5m2!1shu!2shu" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    <?php endif ?>
                    <?php if ((isset($_SESSION['shop']) && $_SESSION['shop'] == 'soroksar')) : ?>
                        <iframe class="mb-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2699.5976819839198!2d19.153410315758364!3d47.41978797917256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741e9d7d33177f9%3A0x10ad29de6e607d0e!2zU29yb2tzw6FyLCBBdWNoYW4gw6FydWjDoXo!5e0!3m2!1shu!2shu!4v1599655167357!5m2!1shu!2shu" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    <?php endif ?>
                    <?php if ((isset($_SESSION['shop']) && $_SESSION['shop'] == 'maglod')) : ?>
                        <iframe class="mb-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2697.5397135914313!2d19.33066541575963!3d47.45991117917518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741c0b07f195251%3A0xb63de414eb791cd!2zQXVjaGFuIMOBcnVow6F6IE1hZ2zDs2Q!5e0!3m2!1shu!2shu!4v1599655213860!5m2!1shu!2shu" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    <?php endif ?>
                    <?php if (array_key_exists("shop", $_SESSION)) : ?>
                        <!--Email-->
                        <p class="mb-3"> Email: <a class="color-black"> <?php esc($shop["email"])  ?>
                            </a>
                        </p>
                    <?php endif ?>
                    <!--Timing-->
                    <p class="mb-0">Hétfő-Szombat: 9:00 - 20:00</p>
                    <p class="mb-0">Vasárnap: 9:00 - 18:00</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact section end-->