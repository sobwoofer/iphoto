@include('template.partials.head', [])

	<body class="minimalio-indx-2">

		<!-- start minimalio-header-with-hero-section -->
        <div class="minimalio-header-with-hero-section">
			@include('template.partials.header', ['title' => $title])
			<!-- start minimalio-hero-section -->
			<section class="minimalio-hero-section">
				@include('template.partials.slider', ['sliderItems' => $sliderItems])
			</section> <!-- end minimalio-hero-section -->
		</div>

		<!-- start minimalio-services-section -->
		<div id="work" class="minimalio-services-section">
			@include('template.partials.portfolio-home', ['photos' => $photos])
			@include('template.partials.services', ['services' => $services])
		</div> <!-- end minimalio-services-section -->

		<!-- start minimalio-my-latest-blog -->
		<section class="minimalio-my-latest-blog">
			<div class="container">

				<section class="minimalio-latest-blog-title">
					<h2>See my latest blog</h2>
					<p>Material confined likewise it humanity raillery an unpacked as he. Three chief merit no if. Now how her edward engage not horses.</p>
				</section>
				<div class="row">
					@include('template.partials.posts', ['posts' => $widgetPosts])
				</div>
			</div>
		</section> <!-- end minimalio-my-latest-blog -->

		<!-- start minimalio-ceo-section  -->
		<section id="team" class="minimalio-ceo-section">
			<div class="minimalio-quote">
				<i class="fa fa-comments" aria-hidden="true"></i>
			</div>
			<div class="container">
				<div class="row">
					<div class="minimalio-ceo-descriptions">
						<!-- Start minimalio-ceo-intro -->
						<div class="minimalio-ceo-intro">
						    <div class="minimalio-navigation">
						    	<a href="#"><i class="fa fa-angle-left minimali-prev-nav"></i></a>
						    	<a href="#"><i class="fa fa-angle-right minimali-next-nav"></i></a>
						    </div> <!-- end minimalio-navigation -->
						    <div id="sync2" class="owl-carousel">
						      	<div class="item">
						      		<h2>MR. MICHAEL VIVEN</h2>
						      		<h3>CEO, SKYPE</h3>
								</div>
						     	<div class="item">
						      		<h2>MR. STEVE AUSTIN </h2>
						      		<h3>CEO, SKYPE</h3>
						  		</div>
						      	<div class="item">
						      		<h2>MR. JASON STATHAM</h2>
						      		<h3>CEO, SKYPE</h3>
						  		</div>
						      	<div class="item">
						      		<h2>MR. TOM CRUSE</h2>
						      		<h3>CEO, SKYPE</h3>
						  		</div>
						      	<div class="item">
						      		<h2>MR. JAMES BOND</h2>
						      		<h3>CEO, SKYPE</h3>
						  		</div>
						      	<div class="item">
						      		<h2>MR. STEVE WAUGH</h2>
						      		<h3>CEO, SKYPE</h3>
						  		</div>
						    </div> <!-- end sync2 -->
					    </div> <!-- end minimalio-ceo-intro -->

						<!-- Start minimalio-ceo-details-section -->
						<div class="minimalio-ceo-details-section">
						    <div id="sync1" class="owl-carousel">

						      	<div class="item minimalio-ceo-arrow-down">
									<div class="minimalio-ceo-details">
							    		<h2>Well Done Michael Viven!</h2>
										<p>It is a long established fact that a reader will be dn looking at its layout. The point of using Lorem Ipsum is that it has a normal distribution of letters.It is a long  The point of using Lorem Ipsum is that it has a normal distribution of letters.It is a long</p>
										<i class="fa fa-skype"></i>
									</div> <!-- end minimalio-ceo-details -->
								</div> <!-- end minimalio-ceo-arrow-down -->

								<div class="item minimalio-ceo-arrow-down">
									<div class="minimalio-ceo-details">
							    		<h2>Well Done Steve Austin!</h2>
										<p>It is a long established fact that a reader will be dn looking at its layout. The point of using Lorem Ipsum is that it has a normal distribution of letters.It is a long</p>
										<i class="fa fa-skype"></i>
									</div> <!-- end minimalio-ceo-details -->
								</div> <!-- end minimalio-ceo-arrow-down -->

								<div class="item minimalio-ceo-arrow-down">
									<div class="minimalio-ceo-details">
							    		<h2>Well Done Jason Statham!</h2>
										<p>It is a long established fact that a reader will be dn looking at its layout. The point of using Lorem Ipsum is that it has a normallong The point of using Lorem Ipsum is that it has a normal distribution of letters.It is a long</p>
										<i class="fa fa-skype"></i>
									</div> <!-- end minimalio-ceo-details -->
								</div> <!-- end minimalio-ceo-arrow-down -->

								<div class="item minimalio-ceo-arrow-down">
									<div class="minimalio-ceo-details">
							    		<h2>Well Done Tom Cruse!</h2>
										<p>It is a long established fact that a reader will be dn looking at its layout. The point of using Lorem The point of using Lorem Ipsum is that it has a normal distribution of letters.It is a longletters.It is a long</p>
										<i class="fa fa-skype"></i>
									</div> <!-- end minimalio-ceo-details -->
								</div> <!-- end minimalio-ceo-arrow-down -->

								<div class="item minimalio-ceo-arrow-down">
									<div class="minimalio-ceo-details">
							    		<h2>Well Done James Bond!</h2>
										<p>It is a long established fact that a reader will be dn looking at its layout. The point of using Lorem Ipsum is that it has a norm The point of using Lorem Ipsum is that it has a normal distribution of letters.It is a longal distribution of letters.It is a long</p>
										<i class="fa fa-skype"></i>
									</div> <!-- end minimalio-ceo-details -->
								</div> <!-- end minimalio-ceo-arrow-down -->

								<div class="item minimalio-ceo-arrow-down">
									<div class="minimalio-ceo-details">
							    		<h2>Well Done Steve Waugh!</h2>
										<p>Be dn looking at its layout. The point of using Lorem Ipsum is that it has a nor The point of using Lorem Ipsum is that it has a normal distribution of letters.It is a longmal distribution of letters.It is a long</p>
										<i class="fa fa-skype"></i>
									</div> <!-- end minimalio-ceo-details -->
								</div> <!-- end minimalio-ceo-arrow-down -->

						    </div> <!-- end sync1 -->
						</div> <!-- end minimalio-ceo-details-section -->
					</div> <!-- end minimalio-ceo-descriptions -->
				</div> <!-- end row -->
			</div>	<!-- end container -->
		</section> <!-- end minimalio-ceo-section -->

		<!-- start minimalio-hire-me-section  -->
		<section id="hire-me" class="minimalio-hire-me-section">
			<div class="container">
				<div class="row">
					<div class="minimalio-hire-me">
						<div class="col-md-4 pull-left col-md-offset-1 col-sm-4 col-xs-6 minimalio-hire-me-content">
							<h2 class="minimalio-arrow-right">I'M THE MAGICIAN <br> <strong>You</strong> <br> WANT ME TO BE</h2>
						</div>
						<div class="col-md-6 pull-right col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-6 minimalio-hire-me-button">
							<a href="#">HIRE ME<i class="fa fa-paper-plane-o"></i></a>
						</div>
					</div> <!-- end minimalio-hire-me -->
				</div>	<!-- end row -->
			</div> <!-- end container -->
		</section>	<!-- end minimalio-hire-me-section -->

@include('template.partials.footer')
