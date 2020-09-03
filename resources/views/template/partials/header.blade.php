@php

$sectionClass = !isset($pageName) ? 'minimalio-header-section' : "minimalio-contact-header-section $pageName";

@endphp

<!-- start minimalio-header-section -->
<header class="{{$sectionClass}}">
    <div class="container">
        <div class="row">
            <div class="minimalio-header">
                <!-- minimalio Header Logo -->
                <div class="col-md-4 col-sm-4 col-xs-6">
                    <div class="minimalio-logo">
                        @if(isset($pageName))
                            <a href="/">
                                <img src="/vendor/template/image/logo.png" alt="Logo Image">
                            </a>
                        @else
                            <a>
                                <img src="/vendor/template/image/logo.png" alt="Logo Image">
                            </a>
                        @endif

                    </div>	<!-- end minimalio-logo -->
                </div> <!-- end minimalio Header Logo -->

                <!-- minimalio Header Menu -->
                <div class="col-md-8 col-sm-8 col-xs-6">
                    <div class="minimalio-menu-section">
                        <div class="minimalio-menu">
                            <div class="minimalio-nav-icon" id="toggle">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div> <!-- end minimalio-menu -->

                        <div class="minimalio-overlay" id="minimalio-overlay-id">
                            <nav class="minimalio-overlay-menu">
                                <ul>
                                    <li><a href="/" data-value="home">Home</a></li>
                                    <li><a href="{{route('about')}}" target="_self">About Us</a></li>
                                    <li><a href="{{route('portfolio')}}" target="_self">Portfolio</a></li>
                                    <li><a href="{{route('blog')}}" target="_self">Blog</a></li>
                                    <li><a href="{{route('contact')}}" target="_self">Contact Us</a></li>
                                </ul>
                            </nav>	<!-- end minimalio-overlay-menu -->
                        </div> <!-- end minimalio-overlay-menu -->
                    </div> 	<!-- end minimalio-menu-section -->
                </div> <!-- end minimalio header menu -->
            </div><!-- end minimalio-contact-header -->
        </div>	<!-- end row -->

        @if(isset($pageName))
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="minimalio-contact-breadcrumb">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li><a>{{$pageTitle}}</a></li>
                        </ul>
                    </div> <!-- end minimalio-contact-breadcrumb -->
                </div>
                <div class="col-md-6 col-md-offset-2 col-sm-6 col-sm-offset-2 col-xs-12">
                    <div class="minimalio-header-contact-heading">
                        <h2>{{$pageTitle}}</h2>
                    </div> <!-- end minimalio-header-contact-heading -->
                </div>
            </div>
        @endif


    </div> <!-- end container -->
</header> <!-- end minimalio-header-section -->
