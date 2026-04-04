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
					<h4 class="text-white text-decoration-underline fst-italic"><?= lang('Contact Us') ?></h4>
					<h1 class="display-4 mb-2 text-white"><?= lang('If you have any comments please apply now') ?></h1>
				</div>
			</div>
		</div>

		<!-- Contact Start -->
        <div class="container-fluid contact bg-light py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="contact-img d-flex justify-content-center" >
                            <div class="contact-img-inner">
                                <img src="<?= home() ?>asl/us-rm.png" class="img-fluid w-100"  alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                        <div>
                            <h4 class="text-primary"><?= lang('Send Your Message') ?></h4>
                            <p class="mb-4"><?= lang('Feel free to send us your questions or inquiries. Our team will get back to you as soon as possible.') ?></p>
							<form id="form-wa">
								<div class="row g-3">
									<div class="col-lg-12 col-xl-6">
										<div class="form-floating">
											<input type="text" class="form-control border-0" id="name" placeholder="Your Name">
											<label><?= lang('Your Name') ?></label>
										</div>
									</div>
									<div class="col-lg-12 col-xl-6">
										<div class="form-floating">
											<input type="email" class="form-control border-0" id="email" placeholder="Your Email">
											<label><?= lang('Your Email') ?></label>
										</div>
									</div>
									<div class="col-lg-12 col-xl-6">
										<div class="form-floating">
											<input type="text" class="form-control border-0" id="phone" placeholder="Phone">
											<label><?= lang('Your Phone') ?></label>
										</div>
									</div>
									<div class="col-lg-12 col-xl-6">
										<div class="form-floating">
											<input type="text" class="form-control border-0" id="subject" placeholder="Subject">
											<label><?= lang('Subject') ?></label>
										</div>
									</div>
									<div class="col-12">
										<div class="form-floating">
											<textarea class="form-control border-0" id="message" style="height: 120px"></textarea>
											<label><?= lang('Message') ?></label>
										</div>
									</div>
									<div class="col-12">
										<button type="submit" class="btn btn-primary w-100 py-3">
											<i class="bi bi-whatsapp"></i> <?= lang('Send Message') ?>
										</button>
									</div>
								</div>
							</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <?php require_once 'footer.php' ; ?>

        <?php require_once 'script.php' ; ?>

		<div id="toast-custom" class="position-fixed top-50 start-50 translate-middle px-4 py-3 text-white bg-danger rounded shadow d-none"
			style="z-index:9999; opacity:0; transition: all .3s ease;">
			<?= lang('Required Form') ?>
		</div>

		<script>
		function showToast(msg){
			const el = $('#toast-custom');
			el.text(msg).removeClass('d-none');

			setTimeout(() => el.css('opacity', 1), 10);

			setTimeout(() => {
				el.css('opacity', 0);
				setTimeout(() => el.addClass('d-none'), 300);
			}, 2000);
		}

		$('#form-wa').on('submit', function(e){
			e.preventDefault();

			const name = $('#name').val().trim();
			const phone = $('#phone').val().trim();
			const subject = $('#subject').val().trim();
			const message = $('#message').val().trim();
			const email = $('#email').val().trim();

			if(!name || !phone || !subject || !message){
				showToast(`<?= lang('Name, Phone, Subject, and Message are required fields.') ?>`);
				return;
			}

			const text = `<?= lang('Name') ?>: ${name}%0A<?= lang('Email') ?>: ${email}%0A<?= lang('Telepon') ?>: ${phone}%0A<?= lang('Subject') ?>: ${subject}%0A<?= lang('Message') ?>: ${message}`;
			const wa = '6287787094437';

			window.open(`https://wa.me/${wa}?text=${text}`, '_blank');
		});
		</script>

    </body>

</html>