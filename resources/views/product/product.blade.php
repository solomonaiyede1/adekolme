<base href='/public'>
@include('product/partials/header')

   <div class="container" style="scroll-behavior: smooth">
    <div class="alert alert-info" style="width: 100%">View Products Listing here</div>
        <div class="row">
            @foreach($product as $products)
            <div class="col-md-3">
                <div clas="card" style="margin-top: 10px">
                <div class="card-header bg-white" style="text-align: center; color: black;"></div>
                    <div class="card-body"><img src="{{$products->product_image}}" style="max-width: 100%; min-height: 100%" /></div>
                    <div class="card-footer" style="color: black; font-family: calibri; font-size: 12px; background-color: #3a435d; color: white; text-align:center; font-family: calibri; font-weight: 600">
                        {{$products->product_name}} | N{{number_format($products->product_price)}}
                        <a href="{{url('product-detail', $products->id)}}" style="color: white">View Details</a>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div><hr>
        {{$product->links('pagination::bootstrap-5')}}
   </div>
<br><br>
@include('product/partials/footer')