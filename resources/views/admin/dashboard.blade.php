@include('admin/partials/header')

        @include('admin/partials/sidebar')
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <div class="content-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-9 col-xxl-12">
						<div class="row">
							<div class="col-xl-12">
								<div class="row">  
									<div class="col-xl-6">
										<div class="row">
											<div class="col-xl-6 col-sm-6">
												<div class="card bg-primary text-white">
													<div class="card-header border-0 flex-wrap">
														<div class="revenue-date">
															<span>Total Category</span>
															<h4 class="text-white">$310.435</h4>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-6 col-sm-6">
												<div class="card bg-secondary text-white">
													<div class="card-header border-0">
														<div class="revenue-date">
															<span class="text-black">Total Products uploaded</span>
															<h4 class="text-black">$920.035</h4>
														</div>
														
													</div>
												</div>
											</div>
											<div class="col-xl-6 col-sm-6">
												<div class="card">
													<div class="card-body depostit-card">
														<div class="depostit-card-media d-flex justify-content-between style-1">
															<div>
																<h6>Total Orders</h6>
																<h3>20</h3>
															</div>
														</div>
														<div class="progress-box mt-0">
															<div class="d-flex justify-content-between">
																<p class="mb-0">Total visitors</p>
																<p class="mb-0">50</p>
															</div>
															<div class="progress">
																<div class="progress-bar bg-secondary" style="width:50%; height:5px; border-radius:4px;" role="progressbar"></div>
															</div>
														</div>
													</div>
												</div>	
											</div>
											<div class="col-xl-6 col-sm-6">
												<div class="card same-card">
													<div class="card-body depostit-card p-0">
														<div class="depostit-card-media d-flex justify-content-between pb-0">
															<div>
																<h6>Total website visitors</h6>
																<h3>$1200.00</h3>
															</div>
														</div>
														<div id="NewExperience"></div>
													</div>
												</div>
											</div>
										</div>	
									</div>
									<div class="col-xl-3 col-sm-6">
										<div class="card bg-primary" style="padding: 20px 20px; background-image: url(/images/banner/banner1.jpg);background-size: cover;background-blend-mode: luminosity;">
											<h4 style="color: white">Adekolme Nigeria Ltd</h4>
											<marquee direction="left"><i style="color: white">Bringing World-Class Products to Nigeria</i></marquee>
											<h6 style="color: white">Number of newsletter subscribers</h6>
											<center><h1 style="color: white">30</h1></center>
										</div>
									</div>
									<div class="col-xl-3 col-sm-6">
										<div class="card">
											<div class="card-body">
												<div id="redial"></div>
												<div class="redia-date text-center">
													<h4 >Current Event</h4>
													<p>
														Building Exhibitions
													</p>
													<a href="/admin/event" class="btn btn-secondary text-black">View Details here</a>
												</div>
											</div>

										</div>
									</div>

									@php
										$cat= \App\Models\Category::all();
										$product= \App\Models\Product::limit(5)->get();
									@endphp
									<div class="col-xl-8">
										<div class="card overflow-hidden">
											<div class="card-header border-0 pb-0 flex-wrap">
												<h4 class="heading mb-0">Top Category Listings</h4>
											</div>
											<div class="card-body custome-tooltip p-0">
													<div id="overiewChart"></div>
												@foreach($cat as $category)
												<div class="ttl-project">
													<div class="pr-data">
														<h5>category ID</h5>
														<span>{{$category->id}}</span>
													</div>
													<div class="pr-data">
														<h5 class="text-primary">Category Name</h5>
														<span>{{$category->product_category}}</span>
													</div>
													<div class="pr-data">
														<h5>Date created</h5>
														<span>{{$category->created_at}}</span>
													</div>
													<div class="pr-data">
														<h5 class="text-success">Date updated</h5>
														<span>{{$category->updated_at}}</span>
													</div>
												</div>
												@endforeach
											</div>
										</div>
									</div>
									<div class="col-xl-4">
										<div class="card">
											<div class="card-header border-0 flex-wrap">
												<h4 class="heading mb-0">Events listings</h4>
												<div>
													<a href="javascript:void(0);" class="text-primary me-2">Latest events</a>
												</div>
											</div>
											<div class="card-body p-0">
												<div class="dt-do-bx">
													<div class="draggable-zone dropzoneContainer to-dodroup dz-scroll">
														<div class="sub-card draggable-handle draggable" style="padding: 20px 20px">
															<h6>Building Exhibitions</h6><hr>

															<h6>IT Solutions</h6><hr>

															<h6>Digital Lock Products</h6><hr>
														</div>
													</div>
													
												</div>	
											</div>
										</div>
									</div>
								</div>
							</div>			
						</div>
					</div>
					<div class="col-xl-6 col-xxl-12">
						<div class="card">
							<div class="card-body p-0">
								<div class="table-responsive active-projects">
								<div class="tbl-caption">
									<h4 class="heading mb-0">Top 10 Product Listings</h4>
								</div>
									<table id="projects-tbl" class="table">
										<thead class="bg-primary">
											<tr>
												<th style="color: white">Product ID</th>
												<th style="color: white">Category</th>
												<th style="color: white">Product Name</th>
												<th style="color: white">Product Price</th>
												<th style="color: white">Product Image</th>
												<th style="color: white">Due Date</th>
											</tr>
										</thead>
										<tbody>
											@foreach($product as $products)
											<tr>
												<td>{{$products->id}}</td>
												<td>{{$products->product_category}}</td>
												<td>{{$products->product_name}}</td>
												<td>{{$products->product_price}}</td>
												<td><img src="{{$products->product_image}}" style="width: 50px; max-height: auto" alt="product image here" /></td>
												<td>{{$products->created_at->diffForHumans()}}</td>
											<tr>
											@endforeach
										</tbody>
										
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
		
       
	</div>

    <script src="/admin1/vendor/global/global.min.js"></script>
	<script src="/admin1/vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="/admin1/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="/admin1/vendor/apexchart/apexchart.js"></script>
	
	<!-- Dashboard 1 -->
	<script src="./admin1/js/dashboard/dashboard-1.js"></script>
	<script src="/admin1/vendor/draggable/draggable.js"></script>
	<script src="/admin1/vendor/swiper/js/swiper-bundle.min.js"></script>
	
	
	<!-- tagify -->
	<script src="/admin1/vendor/tagify/dist/tagify.js"></script>
	 
	<script src="/admin1/vendor/datatables/js/jquery.dataTables.min.js"></script>
	<script src="/admin1/vendor/datatables/js/dataTables.buttons.min.js"></script>
	<script src="/admin1/vendor/datatables/js/buttons.html5.min.js"></script>
	<script src="/admin1/vendor/datatables/js/jszip.min.js"></script>
	<script src="/admin1/js/plugins-init/datatables.init.js"></script>
   
	<!-- Apex Chart -->
	
	<script src="/admin1vendor/bootstrap-datetimepicker/js/moment.js"></script>
	<script src="/admin1/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
	

	<!-- Vectormap -->
    <script src="/admin1/vendor/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="/admin1/vendor/jqvmap/js/jquery.vmap.world.js"></script>
    <script src="/admin1/vendor/jqvmap/js/jquery.vmap.usa.js"></script>
    <script src="/admin1/js/custom.js"></script>
	<script src="/admin1/js/deznav-init.js"></script>
	
   
	
	
	
</body>
</html>