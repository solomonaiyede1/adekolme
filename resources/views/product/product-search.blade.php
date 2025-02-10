@include('product/partials/header')
    <div class="container flash bg-light text-dark">
            <h3 style="font-family: Gill sans">Searched Result</h3>
    </div><hr><br>
    
    
    <div class="container">
        <div class="section1">
            <div class="row">
            @if($product->count()>0)
            @foreach($product as $products)
                <div id="check" class="col-xs-6 col-sm-6 col-md-2">
                    <div class="card">
                        <div class="card-body mx-auto">
                            <img src='{{$products->product_image}}' style="width: 100%; height: auto" alt="">
                        </div>
                        <div class="card-footer" style="font-size: 10px; font-weight: 600; color: black">{{$products->product_name}} |
                        N{{$products->product_price}}| 
                            <a href="{{url('product-detail', $products->id)}}" style="font-size: 10px; font-weight: 600; color: black">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <div class="alert alert-warning" style="text-align: center">No Product Found</div>
                @endif
            </div>
            
        </div><br><hr>

     </div><br><br>

@include('product/partials/footer')

