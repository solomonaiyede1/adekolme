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
                    About Us
                </span>
            </center><br><br>

            <center data-aos="fade-down">
                <span style="padding-top: 20px;font-size: 25px; font-family: garamond; font-weight: 100">
                Adekolme Nigeria Ltd is a leading franchising and distribution company based in Nigeria. With a focus on construction, building materials, IT solutions, and innovative products, we connect Nigerian businesses with global brands. Our mission is to empower the Nigerian market with products that improve efficiency, drive growth, and meet international standards.
                </span>
            </center>
        </div>
</div>


<div class="row" style="padding-top: 50px">
        <div class="col-md-6">
        <div class="card" style="border: none; height: 50vh; box-shadow: 10px 10px 10px rgba(0,0,0,0.1)" data-aos="fade-down">
            <div class="card-header bg-light" style="text-align: center; font-size: 25px; font-family: garamond; font-weight: 700">Our Vision</div>
                <div class="card-body" style="padding: 20px; text-align: center;font-size: 23px; font-family: garamond; font-weight: 100">
                To be the trusted partner for global companies looking to expand into Nigeria, while delivering excellence and value to local businesses.
                </div>
            </div>
        </div>
        <div class="col-md-6">
        <div class="card" style="border: none; height: 50vh; box-shadow: 10px 10px 10px rgba(0,0,0,0.1)" data-aos="fade-down">
            <div class="card-header" style="text-align: center; font-size: 25px; font-family: garamond; font-weight: 700">Our Mission</div>
                <div class="card-body" style="padding: 20px; text-align: center;font-size: 23px; font-family: garamond; font-weight: 100">
                To provide reliable, world-class products that solve local challenges and promote growth across key industries in Nigeria.

                </div>
            </div>
        </div>

    </div>
</div>


<hr>

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