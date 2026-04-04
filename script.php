        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="<?= home() ?>lib/wow/wow.min.js"></script>
        <script src="<?= home() ?>lib/easing/easing.min.js"></script>
        <script src="<?= home() ?>lib/waypoints/waypoints.min.js"></script>
        <script src="<?= home() ?>lib/counterup/counterup.min.js"></script>
        <script src="<?= home() ?>lib/lightbox/js/lightbox.min.js"></script>
        <script src="<?= home() ?>lib/owlcarousel/owl.carousel.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="<?= home() ?>js/main.js?v=1"></script>

		<script>
			$(document).ready(function(){
				$(".clients-carousel").owlCarousel({
				autoplay: true,
				autoplayTimeout: 3500,
				autoplayHoverPause: true,
				loop: true,
				margin: 30,
				nav: false,
				dots: false,
				smartSpeed: 700,
				responsive: {
					0: { items: 2 },
					576: { items: 3 },
					992: { items: 4 },
					1200: { items: 5 }
				}
			});
			});
		</script>

		<script>
		const BASE_URL = "<?= rtrim(home(), '/') ?>";
		const BASE_PATH = new URL(BASE_URL).pathname.replace(/\/$/, '');

		document.querySelectorAll('a[href^="#"]').forEach(anchor => {
			if(anchor.closest('.lang') && !anchor.classList.contains('dropdown-item')) return;

			anchor.addEventListener('click', function(e){
				const href = this.getAttribute('href');
				if(!href || href === '#') return;

				const currentPath = window.location.pathname.replace(/\/$/, '');
				const isHome = currentPath === BASE_PATH;

				if(isHome){
					const target = document.querySelector(href);
					if(target){
						e.preventDefault();
						target.scrollIntoView({ behavior: 'smooth' });
					}
					return;
				}

				e.preventDefault();
				window.location.href = BASE_URL + href;
			});
		});
		</script>

		<script>
        const navLinks = document.querySelectorAll('.nav-link');

        navLinks.forEach(link => {
            link.addEventListener('click', function () {
                navLinks.forEach(nav => nav.classList.remove('active'));
                this.classList.add('active');
            });
        });
        </script>

		<div class="modal fade" id="imgPreviewModal" tabindex="-1">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content border-0">
					
					<div class="card mb-0 border-0">
						
						<div class="card-body text-center p-2">
							<img id="imgPreview" class="img-fluid rounded">
						</div>

						<div class="card-footer text-end bg-white border-0">
							<button type="button" class="btn btn-primary" data-bs-dismiss="modal">
								  <span aria-hidden="true">&times;</span> <?= lang('Close') ?>
							</button>
						</div>

					</div>

				</div>
			</div>
		</div>

		<script>
			$(document).on('click', '.p-image', function(){
				const src = $(this).attr('src');
				$('#imgPreview').attr('src', src);
				new bootstrap.Modal('#imgPreviewModal').show();
			});
		</script>