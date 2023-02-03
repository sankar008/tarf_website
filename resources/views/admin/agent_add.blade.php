<x-admin-header-component/>
<x-nav-component/>
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">{{ __('Add Collection' )}}</h4>
            <div class="row">
              <div class="col-xl">
              <span class="text-success">{{ Session::get('success') }}</span>
                    <span class="text-danger">{{ Session::get('errmsg') }}</span>

                  <div class="card mb-4">                  
                    <div class="card-body">
                      <form method="post" action="{{ route('agent.insert.success') }}" onsubmit="return valid();" enctype= multipart/form-data>
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                    <label class="form-label" for="name">{{ __("Agent name") }} <span class="text-danger">*</span></label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Agent name" value="{{ old('name') }}"/>
                                    @if($errors->has('name'))
                                    <small class="text-danger" id="client_iderrmsg">{{ $errors->first('name') }}</small>
                                    @endif 
                            </div>   
                            <div class="col-md-6">
                                    <label class="form-label" for="email">{{ __("Email ID") }} <span class="text-danger">*</span></label>
                                    <input type="text" name="email" id="email" placeholder="Email ID" class="form-control" value="{{ old('email') }}"/>
                                    @if($errors->has('email'))
                                    <small class="text-danger">{{ $errors->first('email') }}</small>
                                    @endif    
                            </div>  
                            <div class="col-md-6">
                                    <label class="form-label" for="mobile_no">{{ __('Mobile no') }} <span class="text-danger">*</span></label>
                                    <input type="text" name="mobile_no" id="mobile_no" placeholder="Mobile no" class="form-control" value="{{ old('mobile_no') }}"/>
                                    @if($errors->has('mobile_no'))
                                    <small class="text-danger">{{ $errors->first('mobile_no') }}</small>
                                    @endif
                            </div>
                            <div class="col-md-6">
                                    <label class="form-label" for="image">{{ __("Image") }}</label>
                                    <input  type="file" name="image" id="image" class="form-control" accept="image/png, image/jpeg">  
                                    @if($errors->has('image'))
                                    <small class="text-danger">{{ $errors->first('image') }}</small>
                                    @endif             
                            </div>                           
                        </div> 
                  
                          <div class="row"> 
                              <div class="col-md-12">
                                    <label class="form-label" for="sale_date">{{ __("Agent Details") }} <span class="text-danger">*</span></label>
                                    <textarea name="details" id="details" class="form-control" placeholder="Agent Details">{{ old('details') }}</textarea>  
                                    @if($errors->has('details'))
                                    <small class="text-danger">{{ $errors->first('details') }}</small>
                                    @endif             
                              </div>                                                         
                          </div>                     
                         <div class="row">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary mt-5">Submit</button>
                            </div>
                         </div>
                      </form>
                    </div>
                  </div>
              </div>
                
            </div>
</div>
<x-admin-footer-component/>
<script>
    CKEDITOR.replace('details');
    function valid(){
        if($("#name").val() == ""){
            toastr.error('Agent name is a require field!');
            $("#name").focus();
            $("#name").css({"border-color": "red", "border-width":"1px", "border-style":"solid"});
            return false;
        }else if($("#email").val() == ""){
            toastr.error('Email id is a require field!');
            $("#email").focus();
            $("#email").css({"border-color": "red", "border-width":"1px", "border-style":"solid"});
            return false;
        }else if($("#mobile_no").val() == ""){
            toastr.error('Mobile no is a require field!');
            $("#mobile_no").focus();
            $("#mobile_no").css({"border-color": "red", "border-width":"1px", "border-style":"solid"});
            return false;
        }else if($("#image").val() == ""){
            toastr.error('Image is a require field!');
            $("#image").focus();
            $("#image").css({"border-color": "red", "border-width":"1px", "border-style":"solid"});
            return false;
        }
    }
</script>
