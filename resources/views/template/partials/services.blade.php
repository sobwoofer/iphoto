<div class="container">
    <div class="row">

        @foreach($services as $service)
        <div class="col-md-4 col-sm-6">
            <div class="pricingTable">
                <div class="pricing-icon">
                    <i class="fa fa-globe"></i>
                </div>
                <div class="price-Value">
                    <span class="currency">₴</span>{{$service->price}}
                </div>
                <span class="month">за годину</span>
                <div class="pricingHeader">
                    <h3 class="title">{{$service->title}}</h3>
                </div>
                <div class="pricing-content">
                    <ul>
                        <li>50GB Disk Space</li>
                        <li>50 Email Accounts</li>
                        <li>50GB Monthly Bandwidth</li>
                        <li>10 Subdomains</li>
                        <li>15 Domains</li>
                    </ul>
                </div>
                <a href="#" class="pricingTable-signup">Buy Now</a>
            </div>
        </div>
        @endforeach

    </div>
</div>