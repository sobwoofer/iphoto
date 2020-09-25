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
				<div class="col-md-12 col-md-offset-2">
					<div class="minimalio-contact-details">
						<div class="col-md-6 float-md-left">
							<p><em>There are many variations of passages</em>
								of Lorem Ipsum available, but the majity havesuffered alteration i
								n some form,by injected <u>humour</u>
								or randomised word which don't look even <u>slightly</u> believable.
								If you are going touse a <u>passage</u> of an Lorem Ipsum, you need
								to be sure there </p>
						</div>
						<!-- Start minimalio-contact-form-section -->
						<div class="minimalio-contact-form-section col-md-6 float-md-left">
							<form data-toggle="validator" method="POST" action="{{route('send-message')}}" role="document">
								@csrf
								<div class="form-group">
									<input type="text" name="name" class="form-control" id="name"
										   required aria-describedby="name" placeholder="Введіть ім'я" oninvalid="this.setCustomValidity('Поле обов\'язкове для вооду')">
								</div>
								<div class="form-group">
									<input type="text" name="phone" class="form-control" oninvalid="this.setCustomValidity('Поле обов\'язкове для вооду')" id="phone" required aria-describedby="phone" placeholder="Телефон">
								</div>
								<div class="form-group">
									<input type="email" name="email" class="form-control" id="email" aria-describedby="email" placeholder="Email">
								</div>
								<div class="form-group">
									<textarea class="form-control" name="message" id="message" placeholder="Повідомлення"></textarea>
								</div>
								<button type="submit" class="btn btn-primary orderButton">Відправити</button>
							</form>
						</div> <!-- end minimalio-contact-form-section -->
					</div> <!-- end minimalio-contact-details -->
				</div> <!--  placeholder="Write Your Answer Here" -->
			</div> <!-- end row -->
		</div> <!-- end container -->
	</div><!-- end minimalio-contact-details-section -->

@include('template.partials.footer')
