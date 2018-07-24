@extends('front.master')

@section('title')
BariBhara.com
    @endsection




@section('body')
    <!-- Banner -->


    <!-- Characteristics -->

    <div class="characteristics">
        <div class="container">
            <div class="row">

                <!-- Char. Item -->

    <!-- Deals of the week -->

    <div class="deals_featured">
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">

                    <!-- Deals -->


    <!-- Hot New Arrivals -->

    <div class="new_arrivals">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="tabbed_container">
                        <div class="tabs clearfix tabs-right">
                            <div class="new_arrivals_title">Latest Ads</div>
                            <ul class="clearfix">
                                <li class="active"></li>

                            </ul>
                            <div class="tabs_line"><span></span></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12" style="z-index:1;">

                                <!-- Product Panel -->
                                <div class="product_panel panel active">
                                    <div class="arrivals_slider slider">
                                        @foreach($properties as $property)
                                        <!-- Slider Item -->
                                        <div class="arrivals_slider_item" style="">
                                            <div class="border_active"></div>
                                            <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                                <div class="product_name"><div><a href="{{asset('/front/')}}/product.html">{{  $property->property_title }}</a></div></div>
                                                <div class="product_name"><div><a href="{{asset('/front/')}}/product.html">{{  $property->location }}</a></div></div>
                                                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img  src="{{$property->property_image}}" alt=""></div>
                                                <div class="product_content">
                                                    <div class="product_price">{{  $property->property_cost }}</div>
                                                    <div class="product_name"><div><a href="{{asset('/front/')}}/product.html">{{  $property->type }}</a></div></div>

                                                </div>
                                                <div class="product_fav"><i class="fas fa-heart"></i></div>

                                            </div>
                                        </div>

                                        @endforeach

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Best Sellers -->



                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Adverts -->


    <!-- Reviews -->




    <!-- Brands -->



    <!-- Newsletter -->



@endsection