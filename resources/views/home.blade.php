@extends('layouts.public')
@section('title', 'Home | NS Medical')
@section('content')

<!-- Home -->

<div class="home">
    <div class="home_slider_container">

        <!-- Home Slider -->
        <div class="owl-carousel owl-theme home_slider">

            <!-- Slider Item -->
            <div class="owl-item home_slider_item">
                <div class="home_slider_background" style="background-image:linear-gradient( rgba(0,0,0,.5), rgba(0,0,0,.5) ),url({{ asset('images/1.jpg') }})"></div>
                <div class="home_slider_content_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
                                    <div class="home_slider_title">A new Online Shop experience.</div>
                                    <div class="home_slider_subtitle">Check our medical products and energize your hospital environment. We deliver the best for your patients.</div>
                                    <div class="button button_light home_button"><a href="/shop">Shop Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slider Item -->
            <div class="owl-item home_slider_item">
                <div class="home_slider_background" style="background-image:linear-gradient( rgba(0,0,0,.5), rgba(0,0,0,.5) ),url({{ asset('images/2.jpg') }})"></div>
                <div class="home_slider_content_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
                                    <div class="home_slider_title">24 x 7 Technical Support.</div>
                                    <div class="home_slider_subtitle">Call us anytime and get consulted about latest medical instruments trends. Helping you selflessly is our main aim.</div>
                                    <div class="button button_light home_button"><a href="/contact_us">Contact Us</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slider Item -->
            <div class="owl-item home_slider_item">
                <div class="home_slider_background" style="background-image:linear-gradient( rgba(0,0,0,.5), rgba(0,0,0,.5) ),url({{ asset('images/3.jpg') }}); "></div>
                <div class="home_slider_content_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
                                    <div class="home_slider_title">Changing Medical Scenarios.</div>
                                    <div class="home_slider_subtitle">Latest technology for hospitals and nursing homes for a better hospital management.</div>
                                    <div class="button button_light home_button"><a href="/shop">Shop Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Home Slider Dots -->

        <div class="home_slider_dots_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_slider_dots">
                            <ul id="home_slider_custom_dots" class="home_slider_custom_dots">
                                <li class="home_slider_custom_dot active">01.</li>
                                <li class="home_slider_custom_dot">02.</li>
                                <li class="home_slider_custom_dot">03.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<!-- Products -->

<div class="products">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="product_grid">

                @foreach($products as $product)

                    <!-- Product -->
                        <div class="product" data-width="500px">
                            <div class="product_image"><img src="{{ Storage::url($product->img_url1) }}" alt="Product Image" height="250px" width="1200px"></div>
                            <div class="product_content">
                                <div class="product_title"><a href="/product/{{ $product->id }}">{{ $product->name }}</a></div>
                                <div class="product_price">@php echo ($product->price == 0? 'Contact for Price' : 'Rs. '.$product->price) @endphp</div>
                                <a href="/shop/company/{{ $product->company }}"><span class="badge badge-pill badge-warning" style="margin: 10px 0px 10px; font-family: 'Courier New'">{{ DB::table('companies')->where('id',$product->company)->first()->company }}</span></a>
                                <div class="showMore">
                                    <a class="btn btn-info btn-block" href="/product/{{ $product->id }}" role="button">Details</a>
                                </div>
                            </div>
                        </div>


                    @endforeach

                </div>

            </div>
        </div>
    </div>
</div>

<!-- Ad -->

<div class="avds_xl">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="avds_xl_container clearfix">
                    <div class="avds_xl_background" style="background-image:url({{ asset('images/avds_xl.jpg') }}"></div>
                    <div class="avds_xl_content">
                        <div class="avds_title">Amazing Devices</div>
                        <div class="avds_text">Get the best products and services. Biomedical Engineers stacked up to serve you.</div>
                        <div class="avds_link avds_xl_link"><a href="/shop">See More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Icon Boxes -->

<div class="icon_boxes">
    <div class="container">
        <div class="row icon_box_row">

            <!-- Icon Box -->
            <div class="col-lg-4 icon_box_col">
                <div class="icon_box">
                    <div class="icon_box_image"><img src="images/icon_1.svg" alt=""></div>
                    <div class="icon_box_title">Free Shipping Worldwide</div>
                    <div class="icon_box_text">
                        <p>Our Medical Agencies have worldwide bases. We export products to anywhere.</p>
                    </div>
                </div>
            </div>

            <!-- Icon Box -->
            <div class="col-lg-4 icon_box_col">
                <div class="icon_box">
                    <div class="icon_box_image"><img src="images/icon_2.svg" alt=""></div>
                    <div class="icon_box_title">Service Support</div>
                    <div class="icon_box_text">
                        <p>Apart from selling, we also provide installation and servicing of Medical Instruments.</p>
                    </div>
                </div>
            </div>

            <!-- Icon Box -->
            <div class="col-lg-4 icon_box_col">
                <div class="icon_box">
                    <div class="icon_box_image"><img src="images/icon_3.svg" alt=""></div>
                    <div class="icon_box_title">24h Fast Support</div>
                    <div class="icon_box_text">
                        <p>Most advanced technical community working to help you out and sort our your issues.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
