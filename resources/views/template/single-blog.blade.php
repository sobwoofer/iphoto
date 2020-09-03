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
							<div class="minimalio-blog-catagories">
								<h3>CATEGORIES</h3>
								<ul class="minimalio-lavalamp-rarrow">
									<li><a href="#">All</a></li>
									<li><a href="#">Web Design</a></li>
									<li><a href="#">Web Development</a></li>
									<li><a href="#">Clean</a></li>
									<li><a href="#">Fashion</a></li>
									<li><a href="#">Journal</a></li>
									<li><a href="#">Photography</a></li>
								</ul>
							</div> <!-- end minimalio-blog-catagories -->
							<div class="minimalio-blog-tags">
								<h3>TAG</h3>
								<ul>
									<li><a href="#">Photography</a></li>
									<li><a href="#">UI & UX</a></li>
									<li><a href="#">Web Development</a></li>
									<li><a href="#">Movie</a></li>
									<li><a href="#">Game</a></li>
								</ul>
							</div> <!-- end minimalio-blog-tags -->
						</div> <!-- end minimalio-blog-sidebar-section -->
					</div> <!-- end column -->
				</div>	<!-- end row -->
			</div>	<!-- end container -->
		</section> <!-- end minimalio-blog-section -->


@include('template.partials.footer')
