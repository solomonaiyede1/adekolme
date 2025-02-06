
@include('admin/partials/header')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <ol class="breadcrumb mb-4">
                            <div class="alert alert-info" style="width: 100%">
                                <li class="breadcrumb-item active">Megcart Admin Dashboard</li>
                            </div>
                        </ol>
                        <div class="row">
                            <div class="col-xl-2 col-md-2">
                                <div class="card bg-light text-dark mb-4">
                                    <div class="card-body" style="font-weight: 600; font-size: 14px">Total Categories: {{$category}}</div>
                                    <!-- <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-dark stretched-link" href="#">Create</a>
                                        <div class="small text-dark"><a class="small text-dark stretched-link" href="#">View</a></div>
                                    </div> -->
                                </div>

                            </div>
                            <div class="col-xl-2 col-md-2">
                                <div class="card bg-light text-dark mb-4">
                                    <div class="card-body" style="font-weight: 600; font-size: 14px">Total Products: {{$product}}</div>
                                    <!-- <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-dark stretched-link" href="#">View</a>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-2">
                                <div class="card bg-light text-dark mb-4">
                                    <div class="card-body" style="font-weight: 600; font-size: 14px">Total orders: {{$order}} </div>
                                    <!-- <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-dark stretched-link" href="#">View</a>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-2">
                                <div class="card bg-light text-dark mb-4">
                                    <div class="card-body" style="font-weight: 600; font-size: 14px">Total users: {{$user}}</div>
                                    <!-- <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-dark stretched-link" href="#">Create</a>
                                        <a class="small text-dark stretched-link" href="#">View</a>
                                    </div> -->
                                </div>
                            </div>

                            <div class="col-xl-2 col-md-2">
                                <div class="card bg-light text-dark mb-4">
                                    <div class="card-body" style="font-weight: 600; font-size: 14px">Total Vendors: {{$vendor}}</div>
                                    <!-- <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-dark stretched-link" href="#">Create</a>
                                        <a class="small text-dark stretched-link" href="#">View</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>


                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Recent Participants
                            </div>
                            <div class="card-body">

                            <div class="row">
                                <div class="col md-6">
                                <table id="datatablesSimple">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Type</th>
                                        <th>Role Description</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Type</th>
                                        <th>Role Description</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Admin</td>
                                            <td>Admin has all privilege</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Vendor</td>
                                            <td>Vendors sells products on Megcart Marketplace</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Users</td>
                                            <td>Users are buyers of products and services</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                                </div>

                                <div class="col-md-6">
                                    <img src="asset/images/banner/home_banner1.png" style="width: 100%; height: auto" />
                                </div>
                            </div>
                           

                            </div>
                        </div>
                    </div>
                </main>

@include('admin/partials/footer')




