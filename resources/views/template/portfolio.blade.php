<!DOCTYPE html>
<html lang="en">
	@include('template.partials.head', ['title' => $pageTitle])
	<body>
		<!-- start minimalio-header-section -->
		@include('template.partials.header', ['pageTitle' => $pageTitle, 'pageName' => 'portfolio'])

		<!-- start minimalio-services-section -->
		<div id="work" class="minimalio-services-section">
			@include('template.partials.portfolio', ['tags' => $tags])
		</div> <!-- end minimalio-services-section -->

@include('template.partials.footer')
