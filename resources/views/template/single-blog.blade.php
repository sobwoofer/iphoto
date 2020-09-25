<!DOCTYPE html>
<html lang="en">
@include('template.partials.head', ['title' => $post->title])
<body>
<!-- start minimalio-header-section -->
@include('template.partials.header', ['pageTitle' => $post->title, 'pageName' => 'single-blog'])

		<!-- start minimalio-blog-section -->
		<section class="minimalio-blog-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-8 col-xs-12">
						<div class="minimalio-blog-describe-section">
							<div class="minimalio-single-blog-headings">
								<div class="minimalio-single-blog-headNdate">
									<h1>{{$post->title}}</h1>
									<p>{{$post->created_at}}</p>
								</div>


							</div> <!-- end minimalio-single-blog-headings -->
							<div class="minimalio-blog-img minimalio-single-blog-img">
								<img src="{{$post->cover->thumbnail(730, 400)}}" alt="{{$post->title}}">
							</div> <!-- end minimalio-blog-img -->
							<div class="minimalio-single-blog-content">
								{{$post->description}}
							</div>	<!-- end minimalio-blog-content -->


						</div> <!-- end minimalio-single-blog-headings -->
					</div>	<!-- end column -->

					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="minimalio-blog-sidebar-section">
							@include('template.partials.blog-menu', ['allTags' => $allTags, 'currentTag' => null])

						</div> <!-- end minimalio-blog-sidebar-section -->
					</div> <!-- end column -->
				</div>	<!-- end row -->
			</div>	<!-- end container -->
		</section> <!-- end minimalio-blog-section -->


@include('template.partials.footer')
