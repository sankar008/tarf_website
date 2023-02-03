<x-admin-header-component/>
<x-nav-component/>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">{{ __("Agent list") }}</h4>
        <div class="card">
            <div class="tab-content">
                <div class="row">
                    <div class="col-md-12">                        
                        <div class="align-items-center d-flex justify-content-between">
                            <h5 class="card-header px-0">{{ __("Agent list") }}</h5>
                             <a href="{{ route('agent.insert') }}" class="btn btn-info">Add</a>
                        </div>
                    </div>          
                    <div class="col-md-4">
                        
                        <!-- <form action="#" method="post" class="align-items-center d-flex justify-content-center">
                            @csrf
                            <div class="input-group input-group-merge">
                            <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                            <input type="text" class="form-control" name="search" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon-search31">
                            </div>
                            <input type="submit" value="Search" class="btn ms-2 btn-info">
                        </form>                   -->
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
                        <th>Status</th>
                        <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach($data as $val)               
                        <tr>
                            <td><img src="{{ asset($val -> image) }}" with="30" height="40"/></td>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $val -> name }}</strong></td>
                            <td>{{ $val -> email }}</td>
                            <td>{{ $val -> mobile_no }}</td>
                            <td><span class='{{ $val -> is_active?"text-success": "text-danger"}}'>{{$val -> is_active?"Active":"Inactive" }}</span></td>
                            <td>
                                <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('agent.update', ['id' => $val -> id ]) }}"
                                    ><i class="bx bx-edit-alt me-1"></i>Edit</a>
                                    <a class="dropdown-item" onclick="return confirm('Do you really want to delete this data?')" href="{{ route('agent.delete', ['id' => $val -> id]) }}"
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
