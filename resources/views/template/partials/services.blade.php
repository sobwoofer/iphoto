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
                        <span class="price-value">Від {{$service->price}}</span></span>
                        <span class="month"><i class="fa fa-uah">₴</i><span> /год.</span>
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
                        <button href="#" data-toggle="modal" data-target="#service_{{$service->id}}" class="btn btn-block">
                            Замовити
                        </button>
                    </div><!-- BUTTON BOX-->
                </div>

                <!-- Modal -->
                <div class="modal fade" id="service_{{$service->id}}" tabindex="-1" role="dialog" aria-labelledby="service_{{$service->id}}Label" aria-hidden="true">
                    <form data-toggle="validator" class="modal-dialog" method="POST" action="{{route('order')}}" role="document">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="service_{{$service->id}}Label">Замовити {{$service->title}}</h5>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name_{{$service->id}}"
                                           required aria-describedby="name" placeholder="Введіть ім'я" oninvalid="this.setCustomValidity('Поле обов\'язкове для вооду')">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" oninvalid="this.setCustomValidity('Поле обов\'язкове для вооду')" id="phone_{{$service->id}}" required aria-describedby="phone" placeholder="Телефон">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" id="email_{{$service->id}}" aria-describedby="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="message_{{$service->id}}" placeholder="Повідомлення"></textarea>
                                </div>

                                <input type="hidden" name="service_id" value="{{$service->id}}">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрити</button>
                                <button type="submit" class="btn btn-primary orderButton">Замовити</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- EndModal -->

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
{{--            <script>--}}
                {{--$("#service_{{$service->id}}").submit(function(event){--}}
                {{--    // cancels the form submission--}}
                {{--    event.preventDefault();--}}
                {{--    $.ajax({--}}
                {{--        type: "POST",--}}
                {{--        url: "{{route('order')}}",--}}
                {{--        data: $('form.modal-body').serialize(),--}}
                {{--        success: function(msg){--}}
                {{--            alert(msg);--}}
                {{--        },--}}
                {{--        error: function(){--}}
                {{--            alert("failure");--}}
                {{--        }--}}
                {{--    });--}}
                {{--});--}}

                {{--$(function() {--}}
                {{--    $("#service_{{$service->id}}").submit(function(event){--}}
                {{--        $.ajax({--}}
                {{--            type: "POST",--}}
                {{--            url: "{{route('order')}}",--}}
                {{--            data: $('form.modal-body').serialize(),--}}
                {{--            success: function(msg){--}}
                {{--                alert(msg);--}}
                {{--            },--}}
                {{--            error: function(){--}}
                {{--                alert("failure");--}}
                {{--            }--}}
                {{--        });--}}
                {{--    });--}}
                {{--});--}}
{{--            </script>--}}
        @endforeach

    </div>
</div>
