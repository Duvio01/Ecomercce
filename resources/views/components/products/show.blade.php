@extends('layouts.default')
@section('content')

    <div class="u-s-p-t-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">

                    <!--====== Product Breadcrumb ======-->
                    <div class="pd-breadcrumb u-s-m-b-30">
                        <ul class="pd-breadcrumb__list">
                            <li class="has-separator">

                                <a href="{{ route('products.index') }}">Home</a>
                            </li>
                            @for ($i = 0; $i < count($product->categories); $i++)
                                <li class="has-separator">
                                    <a href="shop-side-version-2.html">{{ $product->categories[$i]->name }}</a>
                                </li>
                            @endfor
                            <li class="is-marked">
                                <a href="shop-side-version-2.html">{{ $product->name }}</a>
                            </li>
                        </ul>
                    </div>
                    <!--====== End - Product Breadcrumb ======-->


                    <!--====== Product Detail Zoom ======-->

                    <div class="pd u-s-m-b-30">
                        <div class="slider-fouc pd-wrap">
                            <div id="pd-o-initiate">
                                @for ($i = 0; $i < count($product->images); $i++)
                                    <div class="pd-o-img-wrap" data-src="{{ $product->images[$i]->url }}">
                                        <img class="u-img-fluid" src="{{ $product->images[$i]->url }}"
                                            data-zoom-image="{{ $product->images[$i]->url }}" alt="">
                                    </div>
                                @endfor
                            </div>
                            <span class="pd-text">Click for larger zoom</span>
                        </div>
                        <div class="u-s-m-t-15">
                            <div class="slider-fouc">
                                <div id="pd-o-thumbnail">
                                    @for ($i = 0; $i < count($product->images); $i++)
                                        <div>
                                            <img class="u-img-fluid" src="{{ $product->images[$i]->url }}" alt="">
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--====== End - Product Detail Zoom ======-->
                </div>
                <div class="col-lg-7">

                    <!--====== Product Right Side Details ======-->
                    <div class="pd-detail">
                        <div>
                            <span class="pd-detail__name">{{ $product->name }}</span>
                        </div>
                        <div>
                            @if ($product->discount > 0)
                                <div class="pd-detail__inline">
                                    <span class="pd-detail__price">${{ number_format($discount) }}</span>
                                    <span class="pd-detail__discount">({{ $product->discount }}% OFF)</span><del
                                        class="pd-detail__del">${{ number_format($product->price) }}</del>
                                </div>
                            @else
                                <div class="pd-detail__inline">
                                    <span class="pd-detail__price">${{ number_format($product->price) }}</span>
                                </div>
                            @endif
                        </div>
                        <div class="u-s-m-b-15">
                            <div class="pd-detail__rating gl-rating-style">
                                @for ($i = 0; $i < $product->score; $i++)
                                    <i class="fas fa-star"></i>
                                @endfor
                            </div>
                        </div>
                        <div class="u-s-m-b-15">
                            <div class="pd-detail__inline">
                                <span class="pd-detail__stock">{{ $product->stock }} in stock</span>
                                <span class="pd-detail__left">Only 2 left</span>
                            </div>
                        </div>
                        <div class="u-s-m-b-15">

                            <span class="pd-detail__preview-desc">{{ $product->description }}</span>
                        </div>
                        <div class="u-s-m-b-15">
                            <div class="pd-detail__inline">

                                <span class="pd-detail__click-wrap"><i class="far fa-heart u-s-m-r-6"></i>

                                    <a href="signin.html">Add to Wishlist</a>

                                    <span class="pd-detail__click-count">(222)</span></span>
                            </div>
                        </div>
                        <div class="u-s-m-b-15">
                            <div class="pd-detail__inline">

                                <span class="pd-detail__click-wrap"><i class="far fa-envelope u-s-m-r-6"></i>

                                    <a href="signin.html">Email me When the price drops</a>

                                    <span class="pd-detail__click-count">(20)</span></span>
                            </div>
                        </div>
                        <div class="u-s-m-b-15">
                            <ul class="pd-social-list">
                                <li>

                                    <a class="s-fb--color-hover" href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>

                                    <a class="s-tw--color-hover" href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>

                                    <a class="s-insta--color-hover" href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li>

                                    <a class="s-wa--color-hover" href="#"><i class="fab fa-whatsapp"></i></a>
                                </li>
                                <li>

                                    <a class="s-gplus--color-hover" href="#"><i class="fab fa-google-plus-g"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="u-s-m-b-15">
                            <form class="pd-detail__form" method="POST" action="{{ route('cart.store')}}">
                                @csrf
                                <div class="pd-detail-inline-2">
                                    <div class="u-s-m-b-15">
                                        <input type="hidden" name="productId" value="{{$product->id}}">

                                        <!--====== Input Counter ======-->
                                        <div class="input-counter">

                                            <span class="input-counter__minus fas fa-minus"></span>

                                            <input class="input-counter__text input-counter--text-primary-style"
                                            name="amount" type="text" value="1" data-min="1" data-max="1000">

                                            <span class="input-counter__plus fas fa-plus"></span>
                                        </div>
                                        <!--====== End - Input Counter ======-->
                                    </div>
                                    <div class="u-s-m-b-15">

                                        <button class="btn btn--e-brand-b-2" type="submit">Add to Cart</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="u-s-m-b-15">

                            <span class="pd-detail__label u-s-m-b-8">Product Policy:</span>
                            <ul class="pd-detail__policy-list">
                                <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                    <span>Buyer Protection.</span>
                                </li>
                                <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                    <span>Full Refund if you don't receive your order.</span>
                                </li>
                                <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                    <span>Returns accepted if product not as described.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--====== End - Product Right Side Details ======-->
                </div>
            </div>
        </div>
    </div>

    <!--====== Product Detail Tab ======-->
    <div class="u-s-p-y-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pd-tab">
                        <div class="u-s-m-b-30">
                            <ul class="nav pd-tab__list">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#pd-desc">DESCRIPTION</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">

                            <!--====== Tab 1 ======-->
                            <div class="tab-pane fade show active" id="pd-desc">
                                <div class="pd-tab__desc">
                                    <div class="u-s-m-b-15">
                                        <p>{{ $product->description }}</p>
                                    </div>
                                    <div class="u-s-m-b-30"><iframe src="{{ $product->video_url }}"
                                            allowfullscreen></iframe></div>
                                </div>
                            </div>
                            <!--====== End - Tab 1 ======-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
