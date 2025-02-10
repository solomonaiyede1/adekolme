<base href='/public'>
@include('product/partials/header')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    body{background-color: rgba(0,0,0,0.2)};
</style>

<div class="container-fluid bg-light" style="width: 100vw">
<hr>
    @foreach($product as $products)
    <form>
    {{ csrf_field() }}
    <div class="container bg-white" style="padding-top: 20px">
        <div class="row bg-white">
            <div class="col-md-6 bg-white">
                    <p style="font-style: bold; font-family: garamond; font-weight: 700; font-size: 30px;">
                        {{strtoupper($products->product_name)}}
                    </p>
                    <span style="font-style: bold; font-family: garamond; font-weight: 100; font-size: 14px;">
                        <span style="color:#df5900" class="fa fa-star checked"></span>
                        <span style="color:#df5900" class="fa fa-star checked"></span>
                        <span style="color:#df5900" class="fa fa-star checked"></span>
                        <span style="color:#df5900" class="fa fa-star checked"></span>
                        <span style="color:#df5900" class="fa fa-star checked"></span>
                    </span><br>

                    <p style="font-family: garamond; font-weight: 700; font-size: 30px; color: #df5900">
                        N {{number_format($products->product_price)}}
                    </p>

                    <p style="font-style: bold; font-family: garamond; font-weight: 700; font-size: 30px;">
                        Description
                    </p>
                    <p style="font-style: bold; font-family: garamond; font-weight: 100; font-size: 18px;">
                    {{ $products->product_description}}
                    </p>

                    <p style="font-style: bold; font-family: garamond; font-weight: 700; font-size: 30px;">
                        Quantity
                    </p>

                    <p style="font-style: bold; font-family: garamond;">
                        <input type="number" class="form-control" style="width: 50%" id="quantity" name="quantity" min="1" placeholder="quantity"><br>
                            <button type="submit" class="btn btn-sm" style="color: white; background-color: #df5900">
                                 Buy now 
                            </button>
                    </p>
            </div>
            <div class="col-md-6 bg-white">
                <div class="card">
                    <center>
                        <img src="{{$products->product_image}}" style="max-width: 100%; min-height: 100%" /><br>
                    </center>
                </div>
            </div>
        </div>

        <hr>

    @php 
        $category= App\Models\Product::where('product_category', $products->product_category)->get();
    @endphp

    <div class="row" style="padding-top: 30px">
            <div class="col-md-12">
                <p style="font-style: bold; font-family: garamond; font-weight: 700; font-size: 30px; text-align: center">
                    Explore More Products You May Need.
                </p>
            </div>
        </div><br><br>


    <div class="row">
        @foreach($category as $categories)
        <div class="col-md-4" style="margin-top: 50px">
                <div clas="card">
                    <div class="card-body" style="border: 1px solid rgba(0,0,0,0.1); height: 250px">
                        <center>
                            <img src="{{$categories->product_image}}" style="max-width: 60%; min-height: 100%" /><br>
                        </center>
                        <a href="#" class="btn bg-light btn-sm" style="padding: 5px; box-shadow: 5px 5px 5px rgba(0,0,0,0.1)">
                            <b> N{{number_format($categories->product_price)}}</b>
                        </a>
                    </div><br>
                    <div class="card-footer" style="box-shadow: 5px 5px 5px rgba(0,0,0,0.1); border: none; height: 80px">
                        <div style="font-size: 16px; font-family: garamond; font-weight: 700">{{$categories->product_name}}</div>
                        <div style="font-size: 16px; font-family: garamond;">{{ substr(html_entity_decode($categories->product_description), 0, 50)}}
                            <a href="{{url('/product-detail', $categories->id)}}" style="font-size: 14px; font-family: garamond; font-weight: 700; color: #df5900">
                                See details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div><br>
</div><br><br>





</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

	<script>
    $(document).ready(function(){

      $('#submit').click(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
        var product_quantity= document.getElementById("product_quantity").value;
        var product_id={{$products->id}};
        var url1= "/product-detail/"+ {{$products->id}};
        $.ajax({
            type: "POST",
            url: url1,
            dataType: "json",
            data: {
                'product_quantity' : product_quantity,

            }, 
            success: function(res){
                alert(res.data);
            },
            error: function(res){
                window.location.href='/user-login';
            },
            
        })
      })
    })
		
	</script>
    @endforeach

    
@include('product/partials/footer')