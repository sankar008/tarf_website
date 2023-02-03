<x-admin-header-component/>
<x-nav-component/>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">{{ __("Why us") }}</h4>
        <div class="card">
            <div class="tab-content">
                <div class="row">
                    <div class="col-md-12">                        
                        <div class="align-items-center d-flex justify-content-between">
                            <h5 class="card-header px-0">{{ __("Why us") }}</h5>
                        </div>
                    </div>               
                </div>
                <div class="text-nowrap table-responsive">
                    <span class="text-success">{{ Session::get('successmsg') }}</span>
                    <span class="text-danger">{{ Session::get('errmsg') }}</span>
                    <table class="table table-striped">
                    <thead>
                        <tr>
                        <th>Image</th>
                        <th>Agent name</th>
                        <th>Email Id</th>
                        <th>Mobile no</th>
                        <th>Address</th>
                        <th>Details</th>
                        <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach($data as $val)               
                        <tr>
                            <td>{{ $val -> client_code }}</td>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $val -> name }}</strong></td>
                            <td>{{ $val -> email }}</td>
                            <td>{{ $val -> address }}</td>
                            <td>{{ $val -> agent_name }}</td>
                            <td>{{ $val -> closer_name }}</td>
                            <td>
                                <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('sales.client.update', ['updateid' => $val -> id ]) }}"
                                    ><i class="bx bx-edit-alt me-1"></i>Edit</a>
                                    <a class="dropdown-item" onclick="return confirm('Do you really want to delete this data?')" href="{{ route('sales.client.delete', ['deleteid' => $val -> id]) }}"
                                    ><i class="bx bx-trash me-1"></i> Delete</a>
                                </div>
                                </div>
                            </td>
                        </tr> 
                        @endforeach
                                       
                    </tbody>
                    </table>
                </div>
            </div>
        </div>             
    </div>  
    <x-admin-footer-component/>
