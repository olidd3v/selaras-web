<!DOCTYPE html>
<html lang="<?= isset($_GET['lang']) ? $_GET['lang'] : 'en' ?>">

    <?php require_once 'function.php' ; ?>

    <?php require_once 'head.php' ; ?>

    <body>

        <?php require_once 'spinner.php' ; ?>

        <?php require_once 'top.php' ; ?>

        <?php require_once 'nav.php' ; ?>

        <!-- search modal -->

		<style>
			.contact .bg-img{
				position:absolute;
				inset:0;
				background:url('<?= home() ?>asl/deal.jpg') center/cover no-repeat;
				z-index:0;
			}

			.contact .bg-overlay{
				position:absolute;
				inset:0;
				background: rgb(10 58 94 / 80%);
				z-index:1;
			}

			.contact .container{
				z-index:2;
			}
		</style>

		<div class="container-fluid contact position-relative py-3 text-white overflow-hidden">
			<div class="bg-img"></div>
			<div class="bg-overlay"></div>

			<div class="container py-3 position-relative">
				<div class="text-center mx-auto pb-2 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
					<h4 class="text-white text-decoration-underline fst-italic"><?= lang('Job Vacancy') ?></h4>
					<h1 class="display-4 mb-2 text-white"><?= lang('Start Your Career With Us Today') ?></h1>
				</div>
			</div>
		</div>

		<?php
			$path = __DIR__ . '/asl/job vacancy';
			$files = glob($path . '/*.jpg');
		?>

		<!-- Job Vacancy Start -->
        <div class="container-fluid contact bg-light py-3">
            <div class="container py-3">
				<div class="row g-3">
					<?php foreach($files as $file): ?>
						<div class="col-12 col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
							<div class="card border-0">
								<img src="<?= home('asl/job vacancy/' . basename($file)) ?>" class="img-fluid rounded p-image">
							</div>
						</div>
					<?php endforeach; ?>
				</div>
            </div>
        </div>
        <!-- Job Vacancy End -->

        <?php require_once 'footer.php' ; ?>

        <?php require_once 'script.php' ; ?>

    </body>

</html>