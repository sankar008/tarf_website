<x-admin-header-component/>
<x-nav-component/>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">{{ __("Company Details") }}</h4>
        <div class="card">
            <div class="tab-content">
                <div class="row">
                    <div class="col-md-12">                        
                        <div class="align-items-center d-flex justify-content-between">
                            <h5 class="card-header px-0">{{ __("Company Details") }}</h5>
                        </div>
                    </div>          
                       
                </div>
                <div class="text-nowrap table-responsive">
                    <span class="text-success">{{ Session::get('successmsg') }}</span>
                    <span class="text-danger">{{ Session::get('errmsg') }}</span>
                    <table class="table table-striped">
                    <thead>
                        <tr>
                        <th>Logo</th>
                        <th>Company Name</th>
                        <th>Email Id</th>
                        <th>Mobile no</th>
                        <th>Address</th>
                        <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td><img src={{ asset($data -> image) }} width="30" height="40"/></td>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $data -> name }}</strong></td>
                            <td>{{ $data -> email }}</td>
                            <td>{{ $data -> mobile_no }}</td>
                            <td>{{ $data -> address }}</td>
                            <td>
                            <a class="dropdown-item" href="{{ route('company.update') }}"><i class="bx bx-edit-alt me-1"></i>Edit</a>  
                            </td>
                        </tr> 
                                       
                    </tbody>
                    </table>
                </div>
            </div>
        </div>             
    </div>  
    <x-admin-footer-component/>
