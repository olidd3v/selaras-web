<!-- Topbar Start -->
        <div class="container-fluid topbar px-0 px-lg-4 bg-light py-2 d-none d-lg-block">
            <div class="container">
                <div class="row gx-0 align-items-center">
                    <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                        <div class="d-flex flex-wrap">
                            <div class="border-end border-primary pe-3">
                                <a href="https://maps.app.goo.gl/EWYUkUaynhTZdaHX6" target="_blank" class="text-muted small"><i class="fas fa-map-marker-alt text-primary me-2"></i><?= lang('Find Us') ?></a>
                            </div>
                            <div class="ps-3">
                                <a href="mailto:info@selarasrecruitment.id" class="text-muted small"><i class="fas fa-envelope text-primary me-2"></i>info@selarasrecruitment.id</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center text-lg-end">
                        <div class="d-flex justify-content-end">
                            <div class="d-flex border-end border-primary pe-3">
                                <a class="btn p-0 text-primary me-0" href="https://id.linkedin.com/company/selarasrecruitment" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            <div class="dropdown ms-3 lang">
                                <?php
                                    $lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';
                                ?>

                                <a href="#" class="dropdown-toggle text-dark" data-bs-toggle="dropdown">
                                    <small>
                                        <i class="fas fa-globe-europe text-primary me-2"></i> 
                                        <?php echo ($lang == 'en') ? 'English' : 'Indonesia'; ?>
                                    </small>
                                </a>

                                <div class="dropdown-menu rounded">
                                    <a href="?lang=en" class="dropdown-item">English</a>
                                    <a href="?lang=id" class="dropdown-item">Indonesia</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- Topbar End -->