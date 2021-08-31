@extends('layouts.front')

@section('content')

<div class="categori-menu-wrapper2 clearfix">
    <div class="pl-200 pr-200">
        <div class="categori-style-2">
            <div class="category-heading-2">
                <h3>All Categories</h3>
                <div class="category-menu-list">
                    <ul>
                        @foreach($categories as $category)
                            <li>
                                <a href="{{route('products.index', ['category_id' => $category->id])}}">
                                    {{$category->name}}
                                    <i class="pe-7s-angle-right"></i>
                                </a>
                                @php
                                    $children = TCG\Voyager\Models\Category::where('parent_id', $category->id)->get();
                                @endphp
                                @if($children->isNotEmpty())
                                    <div class="category-menu-dropdown">
                                        @foreach ($children as $child)
                                            <div class="category-dropdown-style category-common3">
                                                <h4 class="categories-subtitle">
                                                    <a href="{{route('products.index', ['category_id' => $child->id])}}">
                                                        {{$child->name}}
                                                    </a>
                                                </h4>
                                                @php
                                                    $grandChild = TCG\Voyager\Models\Category::where('parent_id', $child->id)->get();
                                                @endphp
                                                @if($grandChild->isNotEmpty())
                                                    <ul>
                                                        @foreach ($grandChild as $c)
                                                            <li><a href="{{route('products.index', ['category_id' => $c->id])}}">{{$c->name}}</a></li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="menu-style-4 menu-hover">
            <nav>
                <ul>
                    <li><a href="#">home <i class="pe-7s-angle-down"></i> <span class="sticker-new">hot</span></a>
                        <ul class="single-dropdown">
                            <li><a href="">Fashion</a></li>
                            <li><a href="">Fashion style 2</a></li>
                            <li><a href="">fruits</a></li>
                            <li><a href="">book</a></li>
                            <li><a href="">electronics</a></li>
                            <li><a href="">electronics style 2</a></li>
                            <li><a href="">food & drink</a></li>
                            <li><a href="">furniture</a></li>
                            <li><a href="">handicraft</a></li>
                            <li><a target="_blank" href="">smart watch</a></li>
                            <li><a href="">sports</a></li>
                        </ul>
                    </li>
                    <li><a href="#">page </a>
                        <ul class="single-dropdown">
                            <li><a href="">about us</a></li>
                            <li><a href="">menu list</a></li>
                            <li><a href="">login</a></li>
                            <li><a href="">register</a></li>
                            <li><a href="">cart page</a></li>
                            <li><a href="">checkout</a></li>
                            <li><a href="">wishlist</a></li>
                            <li><a href="">contact</a></li>
                        </ul>
                    </li>
                    <li><a href="#">shop <i class="pe-7s-angle-down"></i> <span class="sticker-new">hot</span></a>
                        <div class="category-menu-dropdown shop-menu">
                            <div class="category-dropdown-style category-common2 mb-30">
                                <h4 class="categories-subtitle"> shop layout</h4>
                                <ul>
                                    <li><a href=""> grid 2 column</a></li>
                                    <li><a href=""> grid 3 column</a></li>
                                    <li><a href="">grid 4 column</a></li>
                                    <li><a href="">grid box style</a></li>
                                    <li><a href=""> list 1 column</a></li>
                                    <li><a href="">list 2 column</a></li>
                                    <li><a href="">list box style</a></li>
                                    <li><a href="">shopping cart</a></li>
                                    <li><a href="">wishlist</a></li>
                                </ul>
                            </div>
                            <div class="category-dropdown-style category-common2 mb-30">
                                <h4 class="categories-subtitle"> product details</h4>
                                <ul>
                                    <li><a href="">tab style 1</a></li>
                                    <li><a href="">tab style 2</a></li>
                                    <li><a href=""> tab style 3</a></li>
                                    <li><a href="">sticky style</a></li>
                                    <li><a href="">sticky style 2</a></li>
                                    <li><a href="">gallery style</a></li>
                                    <li><a href="">gallery style 2</a></li>
                                    <li><a href="">fixed image style</a></li>
                                    <li><a href="">fixed image style 2</a></li>
                                </ul>
                            </div>
                            <div class="mega-banner-img">
                                <a>
                                    <img src="{{asset('img/banner/18.jpg')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </li>
                    <li><a href="#">blog <i class="pe-7s-angle-down"></i> <span class="sticker-new">hot</span></a>
                        <ul class="single-dropdown">
                            <li><a href="">blog 3 colunm</a></li>
                            <li><a href="">blog 2 colunm</a></li>
                            <li><a href="">blog sidebar</a></li>
                            <li><a href="">blog details</a></li>
                            <li><a href="">blog details 2</a></li>
                        </ul>
                    </li>
                    <li><a href="#">contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<div class="slider-area">
    <div class="slider-active owl-carousel">
        <div class="single-slider-4 slider-height-4 bg-img" style="background-image: url({{asset('img/slider/6.jpg')}})">
            <div class="container">
                <div class="slider-content-4 fadeinup-animated">
                    <h2 class="animated">Say hello! to the <br>future.</h2>
                    <h4 class="animated">Best Product With warranty  </h4>
                    <a class="electro-slider-btn btn-hover animated">buy now</a>
                </div>
            </div>
        </div>
        <div class="single-slider-4 slider-height-4 bg-img" style="background-image: url({{asset('img/slider/6.jpg')}})">
            <div class="container">
                <div class="slider-content-4 fadeinup-animated">
                    <h2 class="animated">Say hello! to the <br>future.</h2>
                    <h4 class="animated">Best Product With warranty  </h4>
                    <a class="electro-slider-btn btn-hover animated" href="">buy now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="electro-product-wrapper wrapper-padding pt-95 pb-45">
    <div class="container-fluid">
        <div class="section-title-4 text-center mb-40">
            <h2>Top Products</h2>
        </div>
        <div class="top-product-style">
            <div>
                <div id="electro1">
                    <div class="custom-row-2">
                        @foreach($allProducts as $product)
                            @include('product._single_product')
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
