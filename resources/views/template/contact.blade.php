<!DOCTYPE html>
<html lang="en">
@include('template.partials.head', ['title' => $pageTitle])
<body>
<!-- start minimalio-header-section -->
@include('template.partials.header', ['pageTitle' => $pageTitle, 'pageName' => 'single-blog'])

		<!-- start minimalio-contact-details-section -->
		<div class="minimalio-contact-details-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="minimalio-contact-details">
							<p><em>There are many variations of passages</em> of Lorem Ipsum available, but the majity havesuffered alteration in some form,by injected <u>humour</u> or randomised word which don't look even <u>slightly</u> believable. If you are going touse a <u>passage</u> of an Lorem Ipsum, you need to be sure there </p>

							<!-- Start minimalio-contact-form-section -->
							<div class="minimalio-contact-form-section">
								<form id="minimalio-contact-form" action="php/email.php" class="simform minimalio-simform" autocomplete="off">
									<div class="simform-inner minimalio-simform-inner">
										<ol class="questions minimalio-form-questions">
											<li>
												<span><label for="minimalio-full-name">Full Name</label></span>
												<input id="minimalio-full-name" name="q1" type="text" placeholder="Write Your Full Name Here"/>
											</li>
											<li>
												<span><label for="minimalio-email">Email Address</label></span>
												<input id="minimalio-email" name="q2" type="email" placeholder="Write Your Email Address Here"/>
											</li>
											<li>
												<span><label for="minimalio-phone-number">Phone Number</label></span>
												<input id="minimalio-phone-number" name="q3" type="tel" placeholder="Write Your Phone Number Here"/>
											</li>
											<li>
												<span><label for="minimalio-subject">Subject</label></span>
												<input id="minimalio-subject" name="q4" type="text" placeholder="Write Your Subject Here"/>
											</li>
											<li>
												<span><label for="minimalio-message">Message</label></span>
												<input id="minimalio-message" name="q5" type="text" placeholder="Write Your Message Here"/>
											</li>
										</ol><!-- end minimalio-form-questions -->
										<div class="controls minimalio-controls">
											<button class="next minimalio-form-next-button" type="submit"></button>
											<div class="progress minimalio-progress-bar">
												<div class="minimalio_arrow_up"></div>
											</div>
											<span class="number minimalio-number">
												<span class="number-current minimalio-number-current"></span>
												<span class="number-total minimalio-number-total"></span>
											</span>
											<span class="error-message minimalio-number-total"></span>
										</div><!-- end minimalio-controls -->
									</div><!-- end minimalio-simform-inner -->
									<span class="final-message minimalio-final-message"></span>
								</form><!-- end minimalio-simform -->
							</div> <!-- end minimalio-contact-form-section -->
						</div> <!-- end minimalio-contact-details -->
					</div> <!--  placeholder="Write Your Answer Here" -->
				</div> <!-- end row -->
			</div> <!-- end container -->
		</div><!-- end minimalio-contact-details-section -->

		<!-- start minimalio-map-section -->
		<div id="minimalio-map-section"></div>
		<!-- end minimalio-map-section -->

@include('template.partials.footer')
