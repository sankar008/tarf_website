<x-admin-header-component/>
<x-nav-component/>
<div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">{{ __("Benefits") }}</h4>
        <div class="card">
            <div class="tab-content">
                <div class="row">
                    <div class="col-md-12">                        
                        <div class="align-items-center d-flex justify-content-between">
                            <h5 class="card-header px-0">{{ __("Benefits") }}</h5>
                            <a href="{{ route('benifit.add') }}" class="btn btn-success">Add</a>
                        </div>
                    </div>          
                       
                </div>
                <div class="text-nowrap table-responsive">
                    <span class="text-success">{{ Session::get('successmsg') }}</span>
                    <span class="text-danger">{{ Session::get('errmsg') }}</span>
                    <table class="table table-striped">
                    <thead>
                        <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Details</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach($data as $val)
                        <tr>
                            <td>{{ ++$loop -> index }}</td>
                            <td>{{ $val -> title }}</td>
                            <td>{!! $val -> details !!}</td>
                            <td>
                                <a class="dropdown-item" href="{{ route('benifit.update', ['id' => $val -> id ]) }}"><i class="bx bx-edit-alt me-1"></i>Edit</a>  
                            </td>
                            <td>
                                <a class="dropdown-item" href="{{ route('benifit.delete', ['id' => $val -> id ]) }}"><i class="bx bx-trash me-1"></i>Delete</a>  
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