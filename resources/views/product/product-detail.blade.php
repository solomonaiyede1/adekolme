<base href='/public'>
@include('product/partials/header')

<style>
    body{background-color: rgba(0,0,0,0.2)};
</style>

<div class="container-fluid bg-light" style="width: 100vw">

    @foreach($product as $products)
    <form>
    {{ csrf_field() }}
    <div class="row">
    <div class="container flash" style="background-color: rgba(0,0,0,0.2)">
            <h3 style="font-family: Gill sans" class="text-dark">Details of product</h3>
    </div><br>
        <div class="col-md-4 mx-auto card">
            <img src="{{$products->product_image}}" style="width: 100%; height: auto" alt="Images here"><br><br>
        </div>
        <div class="col-md-6 card" style="font-family: Gill sans; font-size: 20px; padding: 10px 10px; text-align: justify">
            <div><a href="#" class="btn btn-sm" style="font-size: 12px; border-radius: 0px; background-color: red; color:white">Category:</b><span id="product_category">{{$products->product_category}}</a></div>
            <div><b>Name:</b> <span id="product_name">{{$products->product_name}}</span></div>
            <div class="flash"  style="color: black; background-color: rgba(0,0,0,0.2)">Product Description</div>
            <div><span style="font-family: sans; font-size: 16px;">{{$products->product_description}}</span></div>
            <div class="alert" style=" color: black; background-color: rgba(0,0,0,0.2); color: black"><b>Price:</b><span id="product_price"> N{{number_format($products->product_price)}}</span></div>
            <div class="input-group">
                <button type="button" id="submit" class="btn btn-sm btn-danger form-control">Place an order</button> 
            </div>
        </div>
        <div class="col-md-2"><br>
            <div class="mx-auto flash text-dark" style="width: 100%;font-family: Gill sans; font-size: 12px; background-color: rgba(0,0,0,0.2);">Company Delivery Policy</div>
            <p style="font-family: calibri; font-size: 12px;">
            A computer is a machine that can be programmed to automatically carry out sequences of arithmetic or logical operations (computation).
            </p><hr>

            <div class="mx-auto flash text-dark" style="width: 100%;font-family: Gill sans; font-size: 12px; background-color: rgba(0,0,0,0.2)">Customer Support</div>
            <p style="font-family: calibri; font-size: 12px;">
            A computer is a machine that can be programmed to automatically carry out sequences of arithmetic or logical operations (computation).
            </p><hr>

            <div class="mx-auto flash text-dark" style="width: 100%;font-family: Gill sans; font-size: 12px;background-color: rgba(0,0,0,0.2)">Terms & Conditions</div>
            <p style="font-family: calibri; font-size: 12px;">
            A computer is a machine that can be programmed to automatically carry out sequences of arithmetic or logical operations (computation).
            </p><hr>
            
        </div>
    </div><br><br>

    @php 
        $category= App\Models\Product::where('product_category', $products->product_category)->get();
    @endphp
    <div class="container-fluid flash" style="background-color: rgba(0,0,0,0.2)">
        <h3 style="font-family: Gill sans" class="text-dark">Other related products</h3>
    </div><br><br>
    <div class="row">
        @foreach($category as $categories)
            <div class="col-md-2 col-sm-6">
                <div class="card">
                    <div class="card-body mx-auto">
                        <img src="{{$categories->product_image}}" style="width: 150px; height: auto" alt="">
                    </div>
                    <div class="card-footer"  style="color: black; font-size: 12px; font-weight: 600">{{$categories->product_name}} | N{{number_format($categories->product_price)}} <br>
                    <a href="{{url('product-detail', $categories->id)}}">View Details</a>
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