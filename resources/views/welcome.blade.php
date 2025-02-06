@include('product/partials/header')

    @php
        $category1= App\Models\Category::limit(8)->get();
    @endphp

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <style>
        #side{
            color: black;
            font-size: 15px;
            font-family: calibri;
        }
        @media screen and (max-width: 1000px){
            #side-menu{
                display: none;
            }
        }
    </style>

            <div class="container-fluid">
                <div class="row">

                <div class="col-md-2" id="side-menu">
                        <div class="card" style="height: 80vh" >
                            <div class="card-header" style="color: black; font-weight: 600; font-family: calibri; background-color: rgba(0,0,0,0.2)">Categories</div>
                            <div class="card-body bg-white">
                                    @foreach($category1 as $cat)
                                    <div class="text-dark">
                                        <a id="side" class="nav-link active" aria-current="page" href="{{url('/product', $cat->product_category)}}">{{$cat->product_category}}</a>
                                    </div>
                                    @endforeach
                                    <div class="text-dark">
                                        <a id="side" class="nav-link active" aria-current="page" href="#">Gaming</a>
                                    </div>
                                    <div class="text-dark">
                                        <a id="side" class="nav-link active" aria-current="page" href="#">Computing</a>
                                    </div>
                                    <div class="text-dark">
                                        <a id="side" class="nav-link active" aria-current="page" href="#">Baby wears</a>
                                    </div>
                                    <div class="text-dark">
                                        <a id="side" class="nav-link active" aria-current="page" href="#">Engineering</a>
                                    </div>
                                </ul>
                            </div>
                            <div class="card-footer mx-auto"><a href="#" class="btn btn-sm text-white" style="background-color: red">Shop Now!</a></div>
                        </div>
                    </div>

                    <div class="col-md-8" style="background-image: url('asset/images/banner/banner01.png');background-repeat: no-repeat; background-position:center; background-size: cover">
                        <div style="background-color: rgba(0, 0, 0, 0)">
                            <div id="demo" class="carousel slide" data-bs-ride="carousel">
                                <!-- Indicators/dots -->
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                                </div>

                                <!-- The slideshow/carousel -->
                                <div class="carousel-inner">
                                    <div class="carousel-item active" style="background-color: transparent; padding: 10%">
                                        <!-- <img src="asset/images/banner/001.png" class="rounded-circle" style="width: 20vw; height: auto" class="img-fluid" /> -->
                                    <h1 style="color: white; padding: 30px; text-align: center; font-family: sans; background-color: rgba(0,0,0,0.5)">
                                        Shop the Best, Delivered to Your Doorstep!
                                    </h1>
                                    </div>
                                    <div class="carousel-item" style="background-color: transparent; padding: 10%">
                                    <!-- <img src="asset/images/banner/002.png"  class="rounded-circle" style="width: 20vw; height: auto" class="img-fluid" /> -->
                                    <h1 style="color: white; padding: 30px; text-align: center; font-family: sans; background-color: rgba(0,0,0,0.5)">
                                        Fresh Deals Every Day – Don’t Miss Out!
                                        </h1>
                                    <!-- <h1 style="color: white; padding: 30px; text-align: center; font-family: calibri">We are innovative in our delivery</h1> -->
                                    </div>
                                    <div class="carousel-item" style="background-color: transparent; padding: 10%">
                                    <!-- <img src="asset/images/banner/003.png"  class="rounded-circle" style="width: 20vw; height: auto" class="img-fluid" /> -->
                                    <h1 style="color: white; padding: 30px; text-align: center; font-family: sans; background-color: rgba(0,0,0,0.5)">
                                        Fast, Easy, Reliable – The Shopping Experience You Deserve!
                                        </h1>
                                    </div>
                                </div>
                                </div>
                        </div>


                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-header text-dark" style="background-color: rgba(0,0,0,0.2)">Special offer</div><br>
                            <div class="card-body" style="background-image: url(asset/images/banner/a.avif); height: 30vh; background-size: cover; background-position: center; background-repeat: no-repeat">
                                <!-- <img src="{{$banner2->image1}}" style="width: 100%; height: auto"/><br><br> -->
                            </div><br>

                            <div class="card-body" style="background-image: url(asset/images/banner/b.webp);; height: 30vh; background-size: cover; background-position: center; background-repeat: no-repeat">
                                <!-- <img src="{{$banner2->image1}}" style="width: 100%; height: auto"/><br><br> -->
                            </div>
                            <!-- <img src="{{$banner2->image1}}" style="width: 100%; height: auto"/><br><br>
                            <img src="{{$banner3->image1}}" style="width: 100%; height: auto"/><br><br>
                            <img src="{{$banner4->image1}}" style="width: 100%; height: auto"/><br><br>
                            <img src="{{$banner5->image1}}" style="width: 100%; height: auto"/> -->
                            </div><br>
                            <div class="card-footer mx-auto" style="font-style: italic"><a href="#" style="text-decoration: none; color: red">See More</a></div>
                        </div>
                    </div>
                </div>
            </div>

    <div class="container">
            <marquee direction="left">
                <h6 style="font-family: calibri; font-style: italic; font-size: 16px">
                    Megcart your one-stop open market for your items. We are available online 24/7
                </h6>
            </marquee>
    </div>
    <div class="container">
        <div class="flash bg-light">
            <h3 style="font-family: Gill sans" class="text-dark">Best Sellers | Up to 60% OFF</h3>
        </div><hr>
        <br>
        <div class="section1">
            <div class="row">
                @foreach($product as $products)
                <div class="col-xs-6 col-sm-6 col-md-2">
                    <div class="card bg-light border border-0">
                        <div class="card-body mx-auto">
                            <img src='{{$products->product_image}}' style="width: 100%; height: auto; object-fit: cover" alt="">
                        </div>
                        <div class="card-footer" style="color: black; font-size: 12px; font-weight: 600">{{$products->product_name}} | N{{number_format($products->product_price)}} <br>
                            <a href="{{url('product-detail', $products->id)}}">View Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-sm-12 col-md-6" style="background-color: #6d79af;" id="background1"></div>
            </div>
            
        </div><br><hr>

        <div class="section2">
        <div class="container flash bg-light">
                <h3 style="font-family: Gill sans" class="text-dark">New Arrivals</h3>
            </div>
            <hr>
                <div class="row">
                @foreach($new_arrival as $new_arrivals)
                    <div class="col-xs-6 col-md-2 col-sm-6">
                        <div class="card bg-light border border-0">
                            <div class="card-body mx-auto">
                                <img src="{{$new_arrivals->product_image}}" class="img-fluid animated" style="max-width:100%; height: auto; object-fit:cover" alt="">
                            </div>
                            <div class="card-footer" style="color: black; font-size: 10px; font-weight: 600">{{$new_arrivals->product_name}}| N{{number_format($new_arrivals->product_price)}} <br>
                            <a href="{{url('product-detail', $new_arrivals->id)}}">View Details</a>
                            </div>
                        </div>
                        
                    </div>
                @endforeach
                </div><br>

            <div class="wear"><center><button class="btn btn-outline-primary btn-sm text-dark" style="border-radius: 0px; background-color: transparent;">View all</button></center></div>
        </div>
        <hr>

        <div class="bg-light"><h5>Top Electronic Brands</h5></div>
            <hr>
        <div class="section3">
            <div class="row">
                 @foreach($one as $ones)
                    <div class="col-xs-6 col-md-2 col-sm-6">
                        <div class="card bg-light border border-0">
                            <div class="card-body mx-auto">
                                <img src="{{$ones->product_image}}" class="img-fluid" style="width: 100%; height: auto" alt="">
                            </div>
                            <div class="card-footer" style="color: black; font-size: 10px; font-weight: 600">{{$ones->product_name}} | N{{number_format($ones->product_price)}} <br>
                            <a href="{{url('product-detail', $ones->id)}}">View Details</a>
                            </div>
                        </div>
                        
                    </div>
                @endforeach
            </div>
        </div><br><br>

        <div class="section4"></div><br><hr><br>

        <div class="container flash bg-light">
            <h3 style="font-family: Gill sans" class="text-dark">Daily Essentials</h3>
        </div>
            <hr>
        <div class="section5">
            <div class="row">
                @foreach($two as $twos)
                    <div class="col-xs-6 col-md-2 col-sm-6">
                        <div class="card bg-light border border-0">
                            <div class="card-body mx-auto">
                                <img src="{{$twos->product_image}}" class="img-fluid" style="width: 100%; height: auto" alt="">
                            </div>
                            <div class="card-footer" style="color: black; font-size: 10px; font-weight: 600">{{$twos->product_name}} | N{{number_format($twos->product_price)}} <br>
                            <a href="{{url('product-detail', $twos->id)}}">View Details</a>
                            </div>
                        </div>
                        
                    </div>
                @endforeach

            </div>

        </div>
        <br><hr style="border: 2px solid rgb(2, 2, 41)">


        <div class="section6">
        <div class="container flash bg-light">
            <h3 style="font-family: Gill sans" class="text-dark">Top Selling</h3>
        </div>
            <div class="row">
                 @foreach($three as $threes)
                    <div class="col-xs-6 col-md-2 col-sm-6">
                        <div class="card bg-light border border-0">
                            <div class="card-body mx-auto">
                                <img src="{{$threes->product_image}}" class="img-fluid" style="width: 100%; height: auto" alt="">
                            </div>
                            <div class="card-footer" style="color: black; font-size: 10px; font-weight: 600">{{$threes->product_name}} | N{{number_format($threes->product_price)}} <br>
                            <a href="{{url('product-detail', $threes->id)}}">View Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div><br>
            <div class="wear"><center><button class="btn btn-sm text-dark btn-outline-primary" style="background-color: transparent">View all</button></center></div>
        </div><br>
</div>
@include('product/partials/footer')



<script>
    AOS.init({
  duration: 700, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations

});
</script>