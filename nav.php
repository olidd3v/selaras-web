        <!-- Navbar & Hero Start -->
        <div class="container-fluid nav-bar px-0 px-lg-4 py-lg-0">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light"> 
                    <a href="#" class="navbar-brand p-0">
                        <h1 class="text-primary mb-0 d-none">PT. Talenta Selaras Utama</h1>
                        <img src="asl/logo-selaras.png" alt="Logo">
                    </a>
                    <div class="d-flex align-items-center d-lg-none ms-auto gap-2">
                        <div class="dropdown">
                            <button class="btn btn-sm btn-primary color-white d-flex align-items-center gap-1" data-bs-toggle="dropdown" style="height: 4.5vh">
                                <i class="fa fa-language"></i>
                                <i class="fa fa-chevron-down" style="font-size:10px;"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <?php
                                    $languages = [
                                        'en' => 'English',
                                        'id' => 'Indonesia'
                                    ];
                                    ?>

                                    <?php foreach($languages as $key => $label): ?>
                                    <li>
                                        <a class="dropdown-item <?= ($lang == $key) ? 'active bg-primary text-white' : '' ?>" href="?lang=<?= $key ?>">
                                            <?= $label ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="fa fa-bars"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-0 mx-lg-auto">
                            <a href="<?php base_url(); ?>" class="nav-item nav-link active"><?= lang('Home') ?></a>
                            <a href="#about" class="nav-item nav-link"><?= lang('About') ?></a>
                            <a href="#culture" class="nav-item nav-link"><?= lang('Culture') ?></a>
                            <a href="#core" class="nav-item nav-link"><?= lang('Core') ?></a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link" data-bs-toggle="dropdown">
                                    <span class="dropdown-toggle"><?= lang('Others') ?></span>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item"><?= lang('Psychological Test') ?></a>
                                    <a href="#" class="dropdown-item"><?= lang('Training Service') ?></a>
                                    <a href="#gallery" class="dropdown-item"><?= lang('Gallery') ?></a>
                                </div>
                            </div>
                            <a href="contact.html" class="nav-item nav-link"><?= lang('Contact') ?></a>
                            <div class="nav-btn px-3">
                                <!-- <button class="btn-search btn btn-primary btn-md-square rounded-circle flex-shrink-0" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button> -->
                                <a href="#" class="btn btn-primary py-2 px-4 ms-3 flex-shrink-0 jv-top" style="border-radius: .5rem;"> <?= lang('Job Vacancy') ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="d-none d-xl-flex flex-shrink-0 ps-4">
                        <a href="tel:+622129552655" class="btn btn-light btn-lg-square rounded-circle position-relative wow tada" data-wow-delay=".9s" target="_blank">
                            <i class="fa fa-phone-alt fa-2x"></i>
                            <div class="position-absolute" style="top: 7px; right: 12px;">
                                <span><i class="fa fa-comment-dots text-secondary"></i></span>
                            </div>
                        </a>
                        <div class="d-flex flex-column ms-3">
                            <span><?= lang('Call to Our Experts') ?></span>
                            <a href="tel:+622129552655"><span class="text-dark">Free: (021) 2955 2655</span></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar & Hero End -->