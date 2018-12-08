@extends('layouts.public')
@section('title', 'Products')
@section('page', 'Products')
@section('count', $products->count())
@section('content')

<div class="products">
    <div class="container">
        <div class="row">
            <div class="col">

                <!-- Product Sorting -->
                <div class="sorting_bar d-flex flex-md-row flex-column align-items-md-center justify-content-md-start">
                    <div class="results">Showing <span>@yield('count')</span> results</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">

                <div class="product_grid">
                @foreach($products as $product)

                    <!-- Product -->
                        <div class="product">
                            <div class="product_image"><img src="{{ Storage::url($product->img_url1) }}" alt="Product Image" height="350px" width="800px"></div>
                            <div class="product_content">
                                <div class="product_title"><a href="product.html">{{ $product->name }}</a></div>
                                <div class="product_price">@php echo ($product->price == 0? 'Contact for Price' : 'Rs. '.$product->price) @endphp</div>
                                <a href="/shop/company/{{ $product->company }}"><span class="badge badge-pill badge-warning" style="margin: 10px 0px 10px; font-family: 'Courier New'">{{ DB::table('companies')->where('id',$product->company)->first()->company }}</span></a>
                                <div class="showMore">
                                    <a name="" id="" class="btn btn-info" href="#" role="button">Show More</a>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>
                {{ $products->links() }}

            </div>
        </div>
    </div>
</div>
@endsection