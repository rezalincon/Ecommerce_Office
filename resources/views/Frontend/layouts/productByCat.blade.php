@extends('Frontend.layouts.master')

@section('content')
       <div class="product-area pb-85">
            <div class="container">
               
                <div class="row flex-row-reverse">
                    <div class="col-lg-12">
                        <div class="tab-content tab-hm6-categories-slider tab-content-mrg-top jump">
                            <div id="product-9" class="tab-pane active">
                                <div class="product-slider-active-5">

                                    
                                    @foreach($products as $product)

                                    <div class="product-plr-1">
                                        <div class="single-product-wrap">
                                            <div class="product-img product-img-zoom mb-15">
                                                <a href="{{route('product.details',$product->id)}}">
                                                    <img src="{{""}}/upload/products_images/{{$product->image}}" height="270px" alt="">
                                                </a>
                                            </div>
                                            <div class="product-content-wrap-2 text-center">
                                                <h3><a href="product-details.html">{{$product->name}}</a></h3>
                                                <div class="product-price-2">
                                                    <span>{{$product->price}} Tk</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap-2 product-content-wrap-2-modify product-content-position text-center">
                                                <h3><a href="product-details.html">{{$product->name}}</a></h3>
                                                <div class="product-price-2">
                                                    <span>{{$product->price}} Tk</span>
                                                </div>
                                                <div class="pro-add-to-cart">
                                                    <button title="Add to Cart">Add To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach

                                    
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
       
       
        
        <div class="subscribe-area bg-gray-4 pt-95 pb-95">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                        <div class="section-title-3">
                            <h2>Our Newsletter</h2>
                            <p>Get updates by subscribe our weekly newsletter</p>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div id="mc_embed_signup" class="subscribe-form-2">
                            <form id="mc-embedded-subscribe-form" class="validate subscribe-form-style-2" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                                <div id="mc_embed_signup_scroll" class="mc-form-2">
                                    <input class="email" type="email" required="" placeholder="Enter your email address" name="EMAIL" value="">
                                    <div class="mc-news-2" aria-hidden="true">
                                        <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                    </div>
                                    <div class="clear-2 clear-2-purple">
                                        <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="Subscribe">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
           


@endsection