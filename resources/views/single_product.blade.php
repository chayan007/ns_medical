@extends('layouts.public')
@section('title', $product->name)
@section('content')
    <div class="product_details">
        <div class="container">
            <div class="row details_row">

                <!-- Product Image -->
                <div class="col-lg-6">
                    <div class="details_image">
                        <div class="details_image_large" style="margin: 25px 0px 0px"><img height="450px" src="@if($product->img_url1 != NULL) {{ Storage::url($product->img_url1) }} @else {{ asset('images/no_image.png') }}@endif" alt="Product"></div>
                        <div class="details_image_thumbnails d-flex flex-row align-items-start justify-content-between">
                            <div class="details_image_thumbnail active" data-image="@if($product->img_url1 != NULL) {{ Storage::url($product->img_url1) }} @else {{ asset('images/no_image.png') }}@endif"><img height="200px" width="450px" src="@if($product->img_url1 != NULL) {{ Storage::url($product->img_url1) }} @else {{ asset('images/no_image.png') }}@endif" alt=""></div>
                            <div class="details_image_thumbnail" data-image="@if($product->img_url2 != NULL) {{ Storage::url($product->img_url2) }} @else {{ asset('images/no_image.png') }}@endif"><img height="200px" width="450px" src="@if($product->img_url2 != NULL) {{ Storage::url($product->img_url2) }} @else {{ asset('images/no_image.png') }}@endif" alt=""></div>
                            <div class="details_image_thumbnail" data-image="@if($product->img_url3 != NULL) {{ Storage::url($product->img_url3) }} @else {{ asset('images/no_image.png') }}@endif"><img height="200px" width="450px" src="@if($product->img_url3 != NULL) {{ Storage::url($product->img_url3) }} @else {{ asset('images/no_image.png') }}@endif" alt=""></div>
                            <div class="details_image_thumbnail" data-image="@if($product->img_url2 != NULL) {{ Storage::url($product->img_url2) }} @else {{ asset('images/no_image.png') }}@endif"><img height="200px" width="450px" src="@if($product->img_url2 != NULL) {{ Storage::url($product->img_url2) }} @else {{ asset('images/no_image.png') }}@endif" alt=""></div>
                        </div>
                    </div>
                </div>

                <!-- Product Content -->
                <div class="col-lg-6">
                    <div class="details_content" style="margin: 50px 0px 10px">
                        <div class="details_name">{{ $product->name }}</div>
                        <a href="/shop/company/{{ $product->company }}"><span class="badge badge-pill badge-warning" style="margin: 10px 0px 10px; font-family: 'Courier New'">{{ DB::table('companies')->where('id',$product->company)->first()->company }}</span></a><br>
                        @if($product->price != 0)
                            <div class="details_discount">Rs. @php echo ($product->price + (25/100 * $product->price))@endphp</div>
                            <div class="details_price">Rs. {{ $product->price }}</div>
                        @else
                            <div class="details_price">Contact for Price</div>
                        @endif

                        <!-- In Stock -->
                        <div class="in_stock_container">
                            <div class="availability">Availability:</div>
                            <span>In Stock</span>
                        </div>
                        <div class="details_text">
                            <p>Category : <a class="btn btn-outline-primary" href="/shop/category/{{ $product->category }}"role="button">{{ $categories->where('id', $product->category)->first()->category }}</a></p>
                            <form id="MyForm" action="#" method="post" style="display: none; padding: 20px">
                                @csrf
                                <div class="form-group">
                                    <label for="">E-Mail</label>
                                    <input type="text" class="form-control" name="" id=""
                                           aria-describedby="helpId" placeholder="Type your email id">
                                    <small id="helpId" class="form-text text-muted">So that we could mail you important things</small>
                                </div>
                                <div class="form-group">
                                    <label for="">Phone No.</label>
                                    <input type="number" class="form-control" name="" id=""
                                           aria-describedby="helpId" placeholder="Type your contact number">
                                    <small id="helpId" class="form-text text-muted">So that we could explain you in details</small>
                                </div>
                                <button type="submit" class="btn btn-success btn-block">DONE !</button>
                            </form>
                        </div>

                        <!-- Product Quantity -->
                        <div class="product_quantity_container">
                            <div class="button cart_button"><a href="{{ Storage::url($product->brochure) }}" style="color: #1DFFCA;">Brochure</a></div>
                            <div class="button cart_button"><a href="#" onclick="toggler()">Place Enquiry</a></div>
                            <script>
                                function toggler() {
                                    var x = document.getElementById("MyForm");
                                    if (x.style.display === "none") {
                                        x.style.display = "block";
                                    } else {
                                        x.style.display = "none";
                                    }
                                }
                            </script>
                        </div>

                        <!-- Share -->
                        <div class="details_share">
                            <span>Share:</span>
                            <ul>
                                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row description_row">
                <div class="col">
                    <div class="description_title_container">
                        <div class="description_title">Description</div>
                    </div>
                    <div class="description_text">
                        <p>{{ $product->description }}.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Products -->

<div class="products">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="products_title">Related Products</div>
            </div>
        </div>
        <div class="row">
            <div class="col">

                <div class="product_grid">
                    @foreach($relateds as $related)

                    <!-- Product -->
                    <div class="product">
                        <div class="product_image"><img height="200px" width="300px" src="{{ Storage::url($related->img_url1) }}" alt=""></div>
                        <div class="product_content">
                            <div class="product_title"><a href="/product/{{ $related->id }}">{{ $related->name }}</a></div>
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
@endsection