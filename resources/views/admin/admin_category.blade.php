@include('admin/partials/header')

        @include('admin/partials/sidebar')
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Please fill in the following information below</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="/admin/category">
			@csrf
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Category Name</label>
            <input type="text" name="product_category" class="form-control" id="recipient-name">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-sm">create category</button>
      </div>
	  </form>
    </div>
  </div>
</div>


        <div class="content-body">
			<div class="container-fluid">
				<div class="row">				
					<div class="col-xl-6 col-xxl-12">
						<div class="card">
							<div class="card-body p-0">
								<div class="table-responsive active-projects">
								<div class="tbl-caption">
									<h4 class="heading mb-0"><a href="#" class="btn btn-sm" style="background-color: #df5900; color: white" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Click to Create category here</a></h4>
								</div>
								@if (Session::has('success'))
									<div class="alert alert-success">
										<ul>
											<li>{{ Session::get('success') }}</li>
										</ul>
									</div>
								@endif
									<table id="projects-tbl" class="table">
										<thead style="background-color: #df5900;">
											<tr>
												<th style="color: white">Category ID</th>
												<th style="color: white">Category Name</th>
												<th style="color: white">Date created</th>
												<th style="color: white">Actions</th>
											</tr>
										</thead>
										<tbody>
											@foreach($cat as $category)
											<tr>
												<td>{{$category->id}}</td>
												<td>{{$category->product_category}}</td>
												<td>{{$category->created_at}}</td>
												<td>
												<a href="#" class="btn btn-info btn-sm">
												<i class='fa fa-pencil' style="color: white"></i>
												</a>
												<a href="/delete-category/{{$category->id}}" class="btn btn-danger btn-sm" onclick="delete_check()">
												<i class='fa fa-trash-o' style="color: white"></i>
												</a></td>
											</tr>
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

<script>
    
    function delete_check(event){
        var x= confirm("Are you sure you want to delete?");
        if(x==true){
            return true;
        }
        else if(x==false){
            event.preventDefault();
        }
    }
</script>