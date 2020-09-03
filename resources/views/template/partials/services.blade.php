<div class="container services-home">
    <div class="row">

        @foreach($services as $service)
            <div class="col-md-4 col-sm-6 service-item">
                <div class="pricingTable purple">
                    <div class="pricingTable-header">
                        <h3>{{$service->title}}</h3>
                        <span>Lorem ipsum dolor</span>
                    </div>
                    <div class="pricing-plans">
                        <span class="price-value"><i class="fa fa-uah">₴</i><span>{{$service->price}}</span></span>
                        <span class="month">/год.</span>
                    </div>
                    <div class="pricingContent">
                        <ul>
                            <li><b>50GB</b> Disk Space</li>
                            <li><b>50</b> Email Accounts</li>
                            <li><b>50GB</b> Monthly Bandwidth</li>
                            <li><b>10</b> subdomains</li>
                            <li><b>15</b> Domains</li>
                        </ul>
                    </div><!-- CONTENT BOX-->
                    <div class="pricingTable-sign-up">
                        <a href="#" class="btn btn-block">sign up</a>
                    </div><!-- BUTTON BOX-->
                </div>
            </div>


{{--        <div class="col-md-4 col-sm-6">--}}
{{--            <div class="pricingTable">--}}
{{--                <div class="pricing-icon">--}}
{{--                    <i class="fa fa-globe"></i>--}}
{{--                </div>--}}
{{--                <div class="price-Value">--}}
{{--                    <span class="currency">₴</span>{{$service->price}}--}}
{{--                </div>--}}
{{--                <span class="month">за годину</span>--}}
{{--                <div class="pricingHeader">--}}
{{--                    <h3 class="title">{{$service->title}}</h3>--}}
{{--                </div>--}}
{{--                <div class="pricing-content">--}}
{{--                    <ul>--}}
{{--                        <li>50GB Disk Space</li>--}}
{{--                        <li>50 Email Accounts</li>--}}
{{--                        <li>50GB Monthly Bandwidth</li>--}}
{{--                        <li>10 Subdomains</li>--}}
{{--                        <li>15 Domains</li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <a href="#" class="pricingTable-signup">Buy Now</a>--}}
{{--            </div>--}}
{{--        </div>--}}
        @endforeach

    </div>
</div>
