@include('product/partials/header')
<style>
    #product:hover{
        border-bottom: 2px solid #df5900;
        transition: all 3s ease-in ease-out;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-7" style="height: 80vh; padding-top: 25vh;">
            <div style=" font-family: garamond; font-size: 65px; font-weight: 700; line-height:65px">
            Bringing World-Class Products to Nigeria
            </div><br>
            <center>
            <div class="cta">
                <a href="/product" class="btn btn-lg" style="background-color: #df5900; color: white; border-radius: 20px">
                    Explore our Products
                </a>
            </div>
            </center>
        </div>
        <div class="col-md-5">
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

<!-- Indicators/dots -->
                <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="banner/cyber.png" alt="Los Angeles" class="d-block" style="width:100%">
                    <div class="carousel-caption">
                    <h3>Product 1</h3>
                    <p>Product is good</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="banner/cyber1.png" alt="Chicago" class="d-block" style="width:100%">
                    <div class="carousel-caption">
                    <h3>Product 2</h3>
                    <p>That's a good stuff!</p>
                    </div> 
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="banner/cyber2.png" alt="New York" class="d-block" style="width:100%">
                    <div class="carousel-caption">
                    <h3>Product 3</h3>
                    <p>That;s nice!</p>
                    </div>  
                </div>
                </div>

                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                </button>
                </div>

                <!-- end of carousel -->
        </div>
    </div>

</div>


<div class="container" style="padding-top: 150px">
    <div class="row">
        <div class="col-md-12">
            <center>
                <span style="font-size: 35px; font-family: garamond; font-weight: 700">
                    Why Choose Adekolme?
                </span>
            </center>

            <center>
                <span style="padding-top: 20px;font-size: 25px; font-family: garamond; font-weight: 400">
                At Adekolme Nigeria Ltd, we are dedicated to bridging the gap<br> between global brands 
                and the Nigerian market. We specialize in franchising and <br>distributing top-quality 
                international products...<i><a href="/about" style="color: #df5900; font-size: 14px">Read more</a></i>
                </span>
            </center>
        </div>
</div>


<div class="row" style="padding-top: 50px">
        <div class="col-md-4">
        <div class="card" style="height: 50vh; box-shadow: 10px 10px 10px rgba(0,0,0,0.1)">
            <div class="card-header bg-light" style="text-align: center; font-size: 25px; font-family: garamond; font-weight: 700">Global Partnerships</div>
                <div class="card-body" style="padding: 20px; text-align: center;font-size: 23px; font-family: garamond; font-weight: 400">
                We work with renowned international companies to bring their products to Nigeria.
                </div>
            </div>
        </div>
        <div class="col-md-4">
        <div class="card" style="height: 50vh; box-shadow: 10px 10px 10px rgba(0,0,0,0.1)">
            <div class="card-header" style="text-align: center; font-size: 25px; font-family: garamond; font-weight: 700">Local Expertise</div>
                <div class="card-body" style="padding: 20px; text-align: center;font-size: 23px; font-family: garamond; font-weight: 400">
                With years of experience, we understand the Nigerian market and deliver tailored solutions.
                </div>
            </div>
        </div>
        <div class="col-md-4">
        <div class="card" style="height: 50vh; box-shadow: 10px 10px 10px rgba(0,0,0,0.1)">
            <div class="card-header" style="text-align: center; font-size: 25px; font-family: garamond; font-weight: 700">Quality Assurance</div>
                <div class="card-body" style="padding: 20px; text-align: center;font-size: 23px; font-family: garamond; font-weight: 400">
                Every product we franchise meets global quality standards.
                </div>
            </div>
        </div>
</div>

    </div>
</div>


<hr>

<div class="container" style="padding-top: 150px">
    <center><span id="product" style="font-size: 35px; font-family: garamond; font-weight: 700">
        Our Product Offering</span>
    </center>
    <br><br>
    <div class="row" style="pading-top: 100px">
        <div class="col-md-6">
                <div class="row">
                        <div class="col-md-6">
                            <center><img src="banner/mat6.png" style="width: 70%; height: auto" alt=""></center>
                        </div>

                        <div class="col-md-6">
                            <center><img src="banner/mat5.png" style="width: 70%; height: auto" alt=""></center>
                        </div>

                        <div class="col-md-6">
                            <center><img src="banner/mat3.png" style="width: 70%; height: auto" alt=""></center>
                        </div>

                        <div class="col-md-6">
                            <center><img src="banner/mat4.png" style="width: 70%; height: auto" alt=""></center>
                        </div>
                </div>
        </div>

        <div class="col-md-6">
            <div class="card" style="height: 70vh; box-shadow: 2px 2px 2px rgba(0,0,0,0.1)">
                <div class="card-body" style="padding: 20px; font-family: garamond; font-weight: 400; font-size: 20px; line-height: 40px">
                    <span style="text-align: justify; padding: 20px; font-family: garamond; font-weight: 400; font-size: 20px;">
                    Explore our wide range of globally recognized products, tailored for the Nigerian market:
                    </span>
                    <ul style="font-family: garamond">
                        <li><b>Building Materials & Accessories:</b> High-quality products for construction and infrastructure development.</li>
                        <li><b>IT Solutions: </b>Innovative software and tools, including solutions from partners like Poimapper and Goodmill.</li>
                        <li><b>Specialty Products</b>Unique, high-performing tools and products sourced from top global brands.</li>
                    </ul>
                    <center><a href="/product" class="btn btn-lg" style="border-radius: 20px; background-color: #df5900; color: white">Place an Order</a></center>
                </div>
            </div>
        </div>
    </div>

</div>



<div class="container" style="padding-top: 150px">
    <center><span id="product" style="font-size: 35px; font-family: garamond; font-weight: 700">
        Our Services</span>
    </center>
    <br><br>
    <div class="row" style="pading-top: 100px">

    <div class="col-md-6">
            <div class="card" style="height: 70vh; box-shadow: 2px 2px 2px rgba(0,0,0,0.1)">
                <div class="card-body" style="padding: 20px; font-family: garamond; font-weight: 400; font-size: 20px; line-height: 40px">
                    <span style="text-align: justify; padding: 20px; font-family: garamond; font-weight: 400; font-size: 20px;">
                    Explore our wide range of globally recognized products, tailored for the Nigerian market:
                    </span>
                    <ul style="font-family: garamond">
                        <li><b>Building Materials & Accessories:</b> High-quality products for construction and infrastructure development.</li>
                        <li><b>IT Solutions: </b>Innovative software and tools, including solutions from partners like Poimapper and Goodmill.</li>
                        <li><b>Specialty Products</b>Unique, high-performing tools and products sourced from top global brands.</li>
                    </ul>
                    <center><a href="/product" class="btn btn-lg" style="border-radius: 20px; background-color: #df5900; color: white">Place an Order</a></center>
                </div>
            </div>
        </div>


        <div class="col-md-6">
                <div class="row">
                        <div class="col-md-6">
                            <center><img src="banner/mat6.png" style="width: 70%; height: auto" alt=""></center>
                        </div>

                        <div class="col-md-6">
                            <center><img src="banner/mat5.png" style="width: 70%; height: auto" alt=""></center>
                        </div>

                        <div class="col-md-6">
                            <center><img src="banner/mat3.png" style="width: 70%; height: auto" alt=""></center>
                        </div>

                        <div class="col-md-6">
                            <center><img src="banner/mat4.png" style="width: 70%; height: auto" alt=""></center>
                        </div>
                </div>
        </div>


    </div>

</div>

<style>
    #partner li{
        float: left;
        margin-left: 50px;
        list-style-type: none;
    }
</style>
    <div class="container" style="padding-top: 150px">
            <center>
                <span style="font-size: 35px; font-family: garamond; font-weight: 700">
                    Our Partner
                </span>
            </center>
            <p style="font-size: 20px; font-family: garamond; font-weight: 400; text-align: center">We are proud to collaborate with top global companies that trust us to 
                represent their brands in Nigeria. Our partners include:</p>
        <div class="row">
            <div class="col-md-12">
                <center>
                    <marquee direction="left">
                        <ul id="partner" class="mx-auto">
                            <li><img src="banner/partner1.jpeg" style="width: 80px; height: auto;" alt=""></li>
                            <li><img src="banner/partner2.jpeg" style="width: 80px; height: auto;" alt=""></li>
                            <li><img src="banner/partner3.jpeg" style="width: 80px; height: auto;" alt=""></li>
                            <li> <img src="banner/partner4.jpeg" style="width: 80px; height: auto;" alt=""></li>
                            <li><img src="banner/partner5.jpeg" style="width: 80px; height: auto;" alt=""></li>
                        </ul>
                    </marquee>
                </center>
            </div>
        </div>
    </div>
    <br><br>

    <div class="container">
        <div class="row">
            <div class="col-md-12 card" style="background-color: #fbf1fb; padding: 10px 10px">
            <center>
                <span style="font-size: 35px; font-family: garamond; font-weight: 700">
                    Get in Touch with Us
                </span>
            </center>
            <p style="font-size: 20px; font-family: garamond; font-weight: 400; text-align: center">
            Have questions, need product information, or want to partner with us?
             We’re here to help. Reach out to us today!
            </p><br>
            <center>
                <a href="/contact" class="btn btn-lg" style="background-color: #df5900; color: white; font-size: 25px; font-family: garamond">
                    Contact us
                </a>
            </center><br>
            </div>
        </div>
    </div><br><br><br>

    @include('product/partials/footer')
</body>
</html>