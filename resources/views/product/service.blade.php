@include('product/partials/header')
<style>
    #product:hover{
        border-bottom: 2px solid #df5900;
        transition: all 3s ease-in ease-out;
    }
</style>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<div class="container" style="padding-top: 50px">
    <div class="row">
        <div class="col-md-12">
            <center>
                <span style="font-size: 35px; font-family: garamond; font-weight: 700;color:#df5900" data-aos="fade-down">
                    Our Services
                </span>
            </center><br><br>

            <center data-aos="fade-down">
                <span style="padding-top: 20px;font-size: 25px; font-family: garamond; font-weight: 100">
                At Adekolme Nigeria Ltd, we offer a range of services tailored to meet the needs of the Nigerian market:
                </span>
            </center>
        </div>
</div>


<div class="row" style="padding-top: 50px">
        <div class="col-md-4">
        <div class="card" style="border: none; height: 50vh; box-shadow: 10px 10px 10px rgba(0,0,0,0.1)" data-aos="fade-down">
            <div class="card-header bg-light" style="text-align: center; font-size: 25px; font-family: garamond; font-weight: 700">Franchising Global Products</div>
                <div class="card-body" style="padding: 20px; text-align: center;font-size: 23px; font-family: garamond; font-weight: 100">
                We partner with international companies to introduce their products to Nigeria. Whether it’s IT solutions, construction materials, or innovative tools, we ensure seamless market entry and distribution.
                </div>
            </div>
        </div>
        <div class="col-md-4">
        <div class="card" style="border: none; height: 50vh; box-shadow: 10px 10px 10px rgba(0,0,0,0.1)" data-aos="fade-down">
            <div class="card-header" style="text-align: center; font-size: 25px; font-family: garamond; font-weight: 700">Market Expansion Services</div>
                <div class="card-body" style="padding: 20px; text-align: center;font-size: 23px; font-family: garamond; font-weight: 100">
                We help global brands navigate the Nigerian market, providing insights, strategies, and operational support to maximize success.
                </div>
            </div>
        </div>
        <div class="col-md-4">
        <div class="card" style="border: none; height: 50vh; box-shadow: 10px 10px 10px rgba(0,0,0,0.1)" data-aos="fade-down">
            <div class="card-header" style="text-align: center; font-size: 25px; font-family: garamond; font-weight: 700">Product Distribution</div>
                <div class="card-body" style="padding: 20px; text-align: center;font-size: 23px; font-family: garamond; font-weight: 100">
                Our extensive distribution network ensures that products reach businesses and individuals across Nigeria efficiently and reliably.
                </div>
            </div>
        </div>
</div>

    </div>
</div>

<br><br><br>

    @include('product/partials/footer')
</body>
</html>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    AOS.init({
        duration: 600
    });
</script>