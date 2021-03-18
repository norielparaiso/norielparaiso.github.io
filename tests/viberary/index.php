<?php include 'includes/head.php'; ?>

<!-- Start main content -->
	<div class="container-fluid">
		<!-- Homepage Banner -->
		<div class="banner-wrap">
			<div class="banner-frame">
				<div class="row">
					<div class="col-12">
						<div class="logo-line">
							<a href="#" class="d-inline-block">
								<img src="images/Logo-white.png" alt="Viberary" draggable="false" width="216" height="56">
							</a>
						</div>
						<div class="herobanner-wrap">
							<div class="hero-banner" id="particles-js" style="background-image: url('images/banners/pexels-vishnu-r-nair-1105666-image.jpg');"></div>
							<div class="caption">
								<h1>
									<span class="lg d-block">Get Unlimited Free</span>
									Music For Your Videos
								</h1>
								<p>Create stunning videos with <br class="d-block d-md-block">the best royalty-free music</p>
							</div>
							<a href="#top" class="scroll" onclick="_scrollToTop(document.getElementById('top').getBoundingClientRect().top+document.documentElement.scrollTop,500); return false;">
								<ion-icon name="arrow-down-circle-outline"></ion-icon>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<!-- Homepage Banner end -->
	<!-- Header -->
	<header id="top" class="header-wrap position-sticky">
		<div class="container-fluid">
			<?php include 'includes/header.php' ?>
		</div>
	</header>
	<!-- Header end-->
	<section id="main" class="main-viewport">
		<div class="container-fluid content-wrap">
			<!-- Content start -->
			<div class="row no-gutters">
				<div class="col-auto sbar-w">
					<div class="position-sticky" style="top:72px; left:0px;">
						STICKY FILTERS
					</div>
				</div>
				<div class="col-auto flex-grow-1">
					<div style="background: #f1f1f1;height: 1045px; margin-top:-4px;">1</div>
					<div style="background: #ccc;height: 1045px;">2</div>
				</div>
			</div>
			<!-- Content end -->
		</div>
		<!-- Footer -->
		<footer id="bottom" class="footer-wrap position-sticky" style="background: red; color:#fff; padding:40px;">
			<div class="container-fluid">
				<?php include 'includes/footer.php' ?>
			</div>
		</footer>
		<!-- Footer end-->
	</section>

	<script src="js/particles.min.js" defer></script>
	<script>
		// Hero Banner Scroll Animate - Vanilla JS
		// N: Refactor if you want
		var _scrollToTop=function(l,t){var c=document.scrollingElement||document.documentElement,m=c.scrollTop,a=l-m,s=performance.now(),i=function(o){var n,e,r=o-s;c.scrollTop=parseInt((n=r,e=m,o=a,(n/=t/2)<1?o/2*n*n+e:-o/2*(--n*(n-2)-1)+e)),r<t?requestAnimationFrame(i):c.scrollTop=l};requestAnimationFrame(i)};

		window.addEventListener('load',function(e){
			//particle js init - Hero Banner 
			// Noriel: **note: this plugin doesn't have a refresh callback, resizing window leads to inconsistensies
			// https://github.com/VincentGarreau/particles.js/#readme
			particlesJS("particles-js", {"particles": {"number": {"value": 80,"density": {"enable": true,"value_area": 800}},"color": {"value": "#ffffff"},"shape": {"type": "circle","stroke": {"width": 0,"color": "#000000"},"polygon": {"nb_sides": 5},"image": {"src": "img/github.svg","width": 100,"height": 100}},"opacity": {"value": 0.5,"random": false,"anim": {"enable": false,"speed": 1,"opacity_min": 0.1,"sync": false}},"size": {"value": 2,"random": true,"anim": {"enable": false,"speed": 40,"size_min": 0.1,"sync": false}},"line_linked": {"enable": true,"distance": 150,"color": "#ffffff","opacity": 0.4,"width": 1},"move": {"enable": true,"speed": 2,"direction": "none","random": false,"straight": false,"out_mode": "out","bounce": false,"attract": {"enable": false,"rotateX": 600,"rotateY": 1200}}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": true,"mode": "grab"},"onclick": {"enable": true,"mode": "push"},"resize": true},"modes": {"grab": {"distance": 150,"line_linked": {"opacity": 1}},"bubble": {"distance": 400,"size": 40,"duration": 2,"opacity": 8,"speed": 3},"repulse": {"distance": 200,"duration": 0.4},"push": {"particles_nb": 4},"remove": {"particles_nb": 2}}},"retina_detect": true});
		});
	</script>
<!-- End main content -->

<?php include 'includes/foot.php'; ?>