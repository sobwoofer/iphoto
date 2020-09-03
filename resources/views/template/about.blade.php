<!DOCTYPE html>
<html lang="en">
@include('template.partials.head', ['title' => $pageTitle])
<body>
<!-- start minimalio-header-section -->
@include('template.partials.header', ['pageTitle' => $pageTitle, 'pageName' => 'single-blog'])

		<!-- start minimalio-about-details-section -->
		<section class="minimalio-about-details-section">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="minimalio-about-ones-details">
							<div class="minimalio-about-ones-title">
								<h2>Hi I'm Steve Smith</h2>
								<h3>Web UI & UX DESIGNER</h3>
							</div> <!-- end minimalio-about-ones-title -->

							<div class="minimalio-about-ones">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatib aa aodio illo ullam assumenda qui, quia, aut temporibus incidunt placxeast eum sint qus.</p>
								<p>eriores ipsum, quas quae aut! Laboriosam in deleniti ratione blandingxg squam voluptas, ad dolorum facere veniam nihil corrupti quos cumxuxni voluta norum nisi sunt, a dignissimos repellat.busdam adipisci ea maag quia velit repudiandae iure impedit enim.eos natus nihil, rem beatalaakk bore quis, dolorum. cipit eligendi.</p>
							</div> <!-- end minimalio-about-ones -->
						</div> <!-- end minimalio-about-ones-details -->
					</div> <!-- end column -->

	                <div class="col-md-6 col-sm-6 col-xs-12 minimalio-skill-progress-bar-list">
	                    <div class="minimalio-resume-header-title">
	                        <h3>My Skills</h3>
	                    </div> <!-- end minimalio-resume-header-title -->
	                     <div class="minimalio-skill-data-columns">
	                            <div class="minimalio-single-team-skill">
	                                <p>JavaScript</p>
	                                <div class="minimalio-team-skill">
	                                    <div class="minimalio-skill-right"></div>
	                                </div>
	                            	<div class="minimalio-skill-percentage">
	                            		<span class="minimalio-number-percentage-count minimalio-number-percentage" data-value="100" data-animation-duration="3500">0</span>%
	                            	</div>
	                            </div>	<!-- end minimalio-single-team-skill -->
	                            <div class="minimalio-single-team-skill">
	                                <p>Illustrator</p>
	                                <div class="minimalio-team-skill">
	                                    <div class="minimalio-skill-right"></div>
	                                </div>
	                            	<div class="minimalio-skill-percentage">
	                            		<span class="minimalio-number-percentage-count minimalio-number-percentage" data-value="80" data-animation-duration="3500">0</span>%
	                            	</div>
	                            </div>	<!-- end minimalio-single-team-skill -->
	                            <div class="minimalio-single-team-skill">
	                                <p>WordPress</p>
	                                <div class="minimalio-team-skill">
	                                    <div class="minimalio-skill-right"></div>
	                                </div>
	                            	<div class="minimalio-skill-percentage">
	                            		<span class="minimalio-number-percentage-count minimalio-number-percentage" data-value="70" data-animation-duration="3500">0</span>%
	                            	</div>
	                            </div> <!-- end minimalio-single-team-skill -->
	                            <div class="minimalio-single-team-skill">
	                                <p>Photoshop</p>
	                                <div class="minimalio-team-skill">
	                                    <div class="minimalio-skill-right"></div>
	                                </div>
	                            	<div class="minimalio-skill-percentage">
	                            		<span class="minimalio-number-percentage-count minimalio-number-percentage" data-value="40" data-animation-duration="3500">0</span>%
	                            	</div>
	                            </div> <!-- end minimalio-single-team-skill -->
	                     </div>	<!-- end minimalio-skill-data-columns -->
	                </div> <!-- end minimalio-skill-progress-bar-list -->
				</div> <!-- end row -->
			</div> <!-- end container -->
		</section> <!-- end minimalio-contact-details-section -->

		<!-- start minimalio-about-bottom-image -->
		<div class="minimalio-about-bottom-image">
			<img src="/vendor/template/image/about-picture.jpg" alt="iMac PC Image on a Table">
		</div> <!-- end minimalio-about-bottom-image -->

		<!-- start minimalio-footer-section -->
		<footer class="minimalio-footer-section">
			<div class="minimalio-footer-arrow-down"></div> <!-- Start & And footer-arrow-down -->
			<div class="container">
				<div class="minimalio-footer">
					<div class="minimalio-footer-copyright">
						<p>COPY RIGHT &copy; 2017 WPCUP</p>
					</div>	<!-- end minimalio-footer-copyright -->
					<div class="minimalio-social-icons">
						<ul>
							<li><a href="#" class="minimalio-icon-twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="minimalio-icon-google-plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="minimalio-icon-facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="minimalio-icon-pinterest"><i class="fa fa-pinterest"></i></a></li>
						</ul>
					</div> <!-- end minimalio-social-icons -->
					<div class="minimalio-footer-bottom">
						<p class="minimalio-address"><strong>Address:</strong> YourCity, Your State, Newyork</p>
						<p class="minimalio-email"><strong>Email:</strong> name@email.com</p>
						<p class="minimalio-phone"><strong>Phone:</strong> 123.121.258.858</p>
					</div>	<!-- end minimalio-footer-bottom -->
				</div> <!-- end minimalio-footer -->
			</div> <!-- end container -->
		</footer> <!-- end minimalio-footer-section -->

        <!-- JQUERY OFFICIAL SCRIPT -->
		<script src="/vendor/template/js/jquery-3.1.1.min.js"></script>
		<!-- GOOGLE MAP API -->
		<script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyCy7becgYuLwns3uumNm6WdBYkBpLfy44k"></script>
		<!-- CLASSIE SCRIPT -->
		<script src="/vendor/template/js/classie.js"></script>
		<!-- StempsFrom SCRIPT -->
		<script src="/vendor/template/js/stepsForm.js"></script>
		<!-- LAVALAMP SCRIPT -->
		<script src="/vendor/template/js/jquery.lavalamp-1.4.min.js"></script>
		<!-- APPEAR SCRIPT -->
		<script src="/vendor/template/js/appear.min.js"></script>
		<!-- MAGNIFIC POPUP SCRIPT -->
		<script src="/vendor/template/js/jquery.magnific-popup.min.js"></script>
		<!-- ISOTOPE SCRIPT -->
		<script src="/vendor/template/js/isotope.pkgd.min.js"></script>
		<!-- OWL CAROUSEL SLIDER SCRIPT -->
		<script src="/vendor/template/js/owl.carousel.min.js"></script>
		<!-- MINIMALIO CUSTOM SCRIPT -->
		<script src="/vendor/template/js/main.js"></script>
	</body>
</html>
