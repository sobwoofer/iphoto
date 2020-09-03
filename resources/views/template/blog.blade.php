<!DOCTYPE html>
<html lang="en">
@include('template.partials.head', ['title' => $pageTitle])
<body>
<!-- start minimalio-header-section -->
@include('template.partials.header', ['pageTitle' => $pageTitle, 'pageName' => 'blog'])

		<!-- start minimalio-blog-section -->
		<section class="minimalio-blog-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-8 col-xs-12">
						@foreach($posts as $post)
							@include('template.partials.blog-item', ['post' => $post])
						@endforeach

{{--						<div class="minimalio-blog-pagination-section">--}}
{{--							<div class="minimalio-blog-pagination">--}}
{{--								<ul>--}}
{{--									<li><a href="#">01</a></li>--}}
{{--									<li><a href="#">02</a></li>--}}
{{--									<li><a href="#">03</a></li>--}}
{{--									<li><a href="#">04</a></li>--}}
{{--									<li><a href="#"><i class="fa fa-angle-right"></i></a></li>--}}
{{--								</ul>--}}
{{--							</div> <!-- end minimalio-blog-pagination -->--}}
{{--						</div> <!-- end minimalio-blog-pagination-section -->--}}
					</div>	<!-- end col-md-8 -->

					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="minimalio-blog-sidebar-section">
							<div class="minimalio-blog-searchbox">
								<input type="text" placeholder="Search here">
								<i class="fa fa-search"></i>
							</div> <!-- end minimalio-blog-searchbox -->
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
					</div> <!-- end col-md-4 -->
				</div>	<!-- end row -->
			</div>	<!-- end container -->
		</section> <!-- end minimalio-blog-section -->

@include('template.partials.footer')
