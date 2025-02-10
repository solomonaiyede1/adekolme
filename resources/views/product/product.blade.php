<base href='/public'>
@include('product/partials/header')

   <div class="container" style="scroll-behavior: smooth">
        <div class="row">
            <div class="col-md-12">
                <p style="font-style: bold; font-family: garamond; font-weight: 700; font-size: 30px; text-align: center">
                    Our Product Offerings
                </p>
                <center>
                <span style="font-style: bold; font-family: garamond; font-weight: 100; font-size: 16px;">
                Explore our wide range of globally recognized products,<br> tailored for the Nigerian market:
                Building Materials & Accessories, IT Solutions<br>
                Specialty Products
                </span>
                </center>
            </div>
        </div><br><br>
        <div class="row">
            <div class="col-md-6 mx-auto">
            <form method="GET" action="/product-search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search product here...">
                    <button type="submit" class="input-group-text" style="background-color: #df5900; color: white">
                        search
                    </button>
                </div>
            </form>
        </div>
        <div class="row d-flex justify-content-around">
            @foreach($product as $products)
            <div class="col-md-4" style="margin-top: 50px">
                <div clas="card">
                    <div class="card-body" style="border: 1px solid rgba(0,0,0,0.1); height: 250px">
                        <center>
                            <img src="{{$products->product_image}}" style="max-width: 60%; min-height: 100%" /><br>
                        </center>
                        <a href="#" class="btn bg-light btn-sm" style="padding: 5px; box-shadow: 5px 5px 5px rgba(0,0,0,0.1)">
                            <b> N{{number_format($products->product_price)}}</b>
                        </a>
                    </div><br>
                    <div class="card-footer" style="box-shadow: 5px 5px 5px rgba(0,0,0,0.1); border: none; height: 80px">
                        <div style="font-size: 16px; font-family: garamond; font-weight: 700">{{$products->product_name}}</div>
                        <div style="font-size: 16px; font-family: garamond;">{{ substr(html_entity_decode($products->product_description), 0, 50)}}
                            <a href="{{url('/product-detail', $products->id)}}" style="font-size: 14px; font-family: garamond; font-weight: 700; color: #df5900">
                                See details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div><hr>
        {{$product->links('pagination::bootstrap-5')}}
   </div>
<br><br>
</div>
@include('product/partials/footer')