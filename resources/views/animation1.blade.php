



<!DOCTYPE html>
<html>
 
<head>
    <!--auto compiled css & Js-->
    <script type="text/javascript"
            src="//code.jquery.com/jquery-1.9.1.js">
</script>
    <link rel="stylesheet"
        type="text/css"
        href="/css/result-light.css">
     
    <script type="text/javascript"
            src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">
</script>
    <link rel="stylesheet"
        type="text/css"
        href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet"
        type="text/css"
        href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- JavaScript for adding
    slider for multiple images
    shown at once-->
    <script type="text/javascript">
        $(window).load(function() {
            $(".carousel .item").each(function() {
                var i = $(this).next();
                i.length || (i = $(this).siblings(":first")),
                i.children(":first-child").clone().appendTo($(this));
                 
                for (var n = 0; n < 4; n++)(i = i.next()).length ||
                (i = $(this).siblings(":first")),
                i.children(":first-child").clone().appendTo($(this))
            })
        });
    </script>
 
</head>
 
<body>
    <!-- container class for bootstrap card-->
    <div class="container">
        <!-- bootstrap card with row name myCarousel as row 1-->
        <div class="carousel slide" id="myCarousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="col-xs-2">
                        <a href="#">
                        <img src="banner/partner1.jpeg" class="img-responsive">
                    </a>
                    </div>
                </div>
                <div class="item">
                    <div class="col-xs-2">
                        <a href="#">
                        <img src="banner/partner2.jpeg" class="img-responsive">
                    </a>
                    </div>
                </div>
                <div class="item">
                    <div class="col-xs-2">
                        <a href="#">
                        <img src="banner/partner3.jpeg" class="img-responsive">
                    </a>
                    </div>
                </div>
            </div> <a class="left carousel-control"
                    href="#myCarousel"
                    data-slide="prev">
        <!-- <i class="glyphicon glyphicon-chevron-left">
        </i> -->
        </a>
            <a class="right carousel-control"
            href="#myCarousel"
            data-slide="next">
            <!-- <i class="glyphicon glyphicon-chevron-right">
            </i> -->
        </a>
 
        </div>
    </div>
</body>
 
</html>