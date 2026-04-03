<!DOCTYPE html>
<html lang="en">

    <?php require_once 'function.php' ; ?>
    <?php require_once 'head.php' ; ?>

    <body>

        <?php require_once 'spinner.php' ; ?>

        <?php require_once 'top.php' ; ?>

        <?php require_once 'nav.php' ; ?>

        <!-- search modal -->

        <?php require_once 'header.php' ; ?>

        <!-- About Start -->
        <div class="container-fluid bg-light about mt-5 py-0 pb-4" id="about">
            <div class="container">
                <div class="row g-5">
                    <div class="col-xl-8 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="about-item-content bg-white rounded p-5 h-100">
                            <h4 class="text-primary"><?= lang('About Us') ?></h4>
                            <h1 class="display-4 mb-4"><?= lang('Connecting Talent, Creating Impact') ?></h1>
                            <p class="text-justify"><?= lang('Selaras Recruitment was built on a simple belief—that the right talent has the power to transform the direction of a business.') ?></p>
                            <p class="text-justify"><?= lang('Behind Selaras Recruitment are two women with strong and complementary professional journeys: Anne Yuliana and Sagita Bidari Putri.') ?></p>
                            <p class="text-justify"><?= lang('Anne Yuliana has dedicated more than a decade to the field of human capital development, with a deep understanding of how individual potential can be shaped into organizational strength.') ?></p>
                            <p class="text-justify"><?= lang('Meanwhile, Sagita Bidari Putri brings over 15 years of experience in the banking industry—an environment that demands precision, integrity, and the highest standards of professionalism.') ?></p>
                            <p class="text-justify"><?= lang('From these two distinct backgrounds, a shared vision was formed: to deliver a recruitment process that goes beyond simply filling positions, but truly creates meaningful impact.') ?></p>
                            <p class="text-justify"><?= lang('At Selaras Recruitment, we believe that the best candidates are not defined solely by their experience, but by the alignment between competence, character, and business needs.') ?></p>
                            <p class="text-justify"><?= lang('Through in-depth assessment, a structured approach, and a strong commitment to quality, we ensure that every talent we present is not only ready to perform, but also prepared to grow and contribute meaningfully.') ?></p>
                            <p class="text-justify"><?= lang('Because for us, recruitment is not just a process—it is part of building the future, for both organizations and the individuals within them.') ?></p>
                            <!-- <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>We can save your money.</p>
                            <p class="text-dark"><i class="fa fa-check text-primary me-3"></i>Production or trading of good</p>
                            <p class="text-dark mb-4"><i class="fa fa-check text-primary me-3"></i>Our life insurance is flexible</p> -->
                            <!-- <a class="btn btn-primary rounded-pill py-3 px-5" href="#">More Information</a> -->
                        </div>
                    </div>
                    <div class="col-xl-4 wow fadeInRight h-mobile" data-wow-delay="0.2s">
                        <div class="bg-white rounded p-5 h-100 g-about">
                            <div class="row g-4 justify-content-center">
                                <div class="col-4 col-sm-4 col-xl-12">
                                    <div class="rounded bg-light custom-bg" style="background-image: url('asl/us.jpeg');"></div>
                                </div>
                                <div class="col-4 col-sm-4 col-xl-12">
                                    <div class="rounded bg-light custom-bg" style="background-image: url('asl/us1.jpeg');"></div>
                                </div>
                                <div class="col-4 col-sm-4 col-xl-12">
                                    <div class="rounded bg-light custom-bg" style="background-image: url('asl/us2.jpeg');"></div>
                                </div>
                                <div class="col-12 col-sm-12 col-xl-12 d-flex justify-content-center align-items-center">
                                    <a href="#gallery" class="btn btn-primary text-white"><?= lang('Load More') ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Out Culture -->
        <div class="container-fluid feature bg-light py-4" id="culture">
            <div class="container py-0">
                <div class="text-center mx-auto pb-3 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary"><?= lang('Our Culture') ?> </h4>
                    <h1 class="display-4 mb-4"><?= lang('The Culture at') ?><br><?= lang('Selaras Recruitment') ?></h1>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-item p-4 pt-0">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fa fa-crosshairs fa-3x"></i>
                            </div>
                            <h4 class="mb-4"><?= lang('Precision & Excellence') ?></h4>
                            <p class="mb-4 text-justify">
                                <?= lang('Selaras Recruitment is built by a team of dedicated professionals committed to delivering excellence in human capital solutions. We continuously uphold the highest standards in every engagement—ensuring precision, reliability, and meaningful outcomes for our clients.') ?>
                            </p>
                            <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="feature-item p-4 pt-0">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fa fa-lightbulb fa-3x"></i>
                            </div>
                            <h4 class="mb-4"><?= lang('Impactful Talent Solutions') ?></h4>
                            <p class="mb-4 text-justify">
                                <?= lang('At Selaras Recruitment, we do not simply aim to fulfill hiring needs—we are committed to delivering impactful and sustainable talent solutions.') ?>
                            </p>
                            <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="feature-item p-4 pt-0">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fa fa-chart-line fa-3x"></i>
                            </div>
                            <h4 class="mb-4"><?= lang('Growth & Trust') ?></h4>
                            <p class="mb-4 text-justify"><?= lang('As one of the early players in Indonesia`s professional HR consulting industry, Selaras Recruitment began with a small yet highly driven team. Since then, we have grown steadily in a dynamic and evolving market, guided by consistency, strong execution, and the trust we build with every client we serve.') ?>
                            </p>
                            <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="feature-item p-4 pt-0">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fa fa-shield-alt fa-3x"></i>
                            </div>
                            <h4 class="mb-4"><?= lang('Courage & Commitment') ?></h4>
                            <p class="mb-4 text-justify">
                                <?= lang('Our culture is defined by courage and commitment. We embrace open thinking, adapt with agility, and take decisive steps even in uncertain situations. We believe that every client need can be addressed with the right strategy, strong collaboration, and unwavering professionalism.') ?>
                            </p>
                            <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gallery Start -->
        <div class="container-fluid testimonial pb-5" id="gallery">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h1 class="display-4 mb-0 mt-4">Gallery</h1>
                </div>
                <div class="gallery-culture owl-carousel wow fadeInUp" data-wow-delay="0.2s">
                    <div class="item"><img src="asl/gallery1.jpeg" alt=""></div>
                    <div class="item"><img src="asl/gallery2.jpeg" alt=""></div>
                    <div class="item"><img src="asl/gallery3.jpeg" alt=""></div>
                    <div class="item"><img src="asl/gallery4.jpeg" alt=""></div>
                    <div class="item"><img src="asl/gallery5.jpeg" alt=""></div>
                </div>
            </div>
        </div>
        <!-- Gallery End -->
         
        <!-- Core Start -->
        <div class="container-fluid feature bg-light py-5" id="core">
            <div class="container py-0">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary"><?= lang('Our Core') ?></h4>
                    <h1 class="display-4 mb-4"><?= lang('The principles that drive how we work and grow with our clients.') ?></h1>
                </div>
                <div class="row g-4">
                    
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-item p-4 pt-0">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fa fa-shield-alt fa-3x"></i>
                            </div>
                            <h4 class="mb-4"><?= lang('Integrity') ?></h4>
                            <p class="mb-4"><?= lang('We operate with honesty, transparency, and strong ethical principles in every process, building trust as the foundation of long-term partnerships.') ?></p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="feature-item p-4 pt-0">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fa fa-crosshairs fa-3x"></i>
                            </div>
                            <h4 class="mb-4"><?= lang('Precision') ?></h4>
                            <p class="mb-4"><?= lang('We approach every search with accuracy and attention to detail, ensuring each candidate is carefully selected and aligned with our clients’ specific needs.') ?></p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="feature-item p-4 pt-0">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fa fa-handshake fa-3x"></i>
                            </div>
                            <h4 class="mb-4"><?= lang('Partnership') ?></h4>
                            <p class="mb-4"><?= lang('We work closely with our clients as trusted advisors, fostering collaborative relationships to understand and support their long-term business goals.') ?></p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="feature-item p-4 pt-0">
                            <div class="feature-icon p-4 mb-4">
                                <i class="fa fa-chart-line fa-3x"></i>
                            </div>
                            <h4 class="mb-4"><?= lang('Impact') ?></h4>
                            <p class="mb-4"><?= lang('We focus on delivering talent that creates real value—contributing not only to immediate needs but also to sustainable growth and organizational success.') ?></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Core End -->

        <?php require_once 'footer.php' ; ?>

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   
        <a href="https://wa.me/6287787094437" target="_blank" class="btn btn-primary btn-lg-square rounded-circle back-to-top wa-top"><i class="bi bi-whatsapp"></i></a>   

        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="js/main.js"></script>

        <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', e => {
                if (window.location.pathname === '/' || window.location.pathname === '/index.php' || window.location.pathname.endsWith('/selaras/')) {
                    e.preventDefault();
                    const target = document.querySelector(anchor.getAttribute('href'));
                    if (target) target.scrollIntoView({ behavior: 'smooth' });
                } else {
                    e.preventDefault();
                    window.location.href = "<?= base_url(); ?>" + anchor.getAttribute('href');
                }
            });
        });

        const navLinks = document.querySelectorAll('.nav-link');

        navLinks.forEach(link => {
            link.addEventListener('click', function () {
                navLinks.forEach(nav => nav.classList.remove('active'));
                this.classList.add('active');
            });
        });

        </script>
    </body>

</html>