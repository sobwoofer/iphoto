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


				</div> <!-- end row -->
			</div> <!-- end container -->
		</section> <!-- end minimalio-contact-details-section -->

		<!-- start minimalio-about-bottom-image -->
		<div class="minimalio-about-bottom-image">
			<img src="/vendor/template/image/about-picture.jpg" alt="iMac PC Image on a Table">
		</div> <!-- end minimalio-about-bottom-image -->


@include('template.partials.footer')
