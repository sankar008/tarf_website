<x-admin-header-component/>
<x-nav-component/>
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">{{ __('Update Company Details' )}}</h4>
            <div class="row">
              <div class="col-xl">
                  <div class="card mb-4">                  
                    <div class="card-body">
                      <form method="post" action="{{ route('company.update.success') }}" onsubmit="return valid1();" enctype= multipart/form-data>
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                    <label class="form-label" for="name">{{ __("Company Name") }} <span class="text-danger">*</span></label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Company name" value="{{ $data -> name }}"/>
                                    @if($errors->has('name'))
                                    <small class="text-danger" id="client_iderrmsg">{{ $errors->first('name') }}</small>
                                    @endif 
                            </div>   
                            <div class="col-md-6">
                                    <label class="form-label" for="email">{{ __("Email ID") }} <span class="text-danger">*</span></label>
                                    <input type="text" name="email" id="email" placeholder="Email ID" class="form-control" value="{{ $data -> email }}"/>
                                    @if($errors->has('email'))
                                    <small class="text-danger">{{ $errors->first('email') }}</small>
                                    @endif    
                            </div>  
                            <div class="col-md-6">
                                    <label class="form-label" for="mobile_no">{{ __('Mobile no') }} <span class="text-danger">*</span></label>
                                    <input type="text" name="mobile_no" id="mobile_no" placeholder="Mobile no" class="form-control" value="{{ $data -> mobile_no }}"/>
                                    @if($errors->has('mobile_no'))
                                    <small class="text-danger">{{ $errors->first('mobile_no') }}</small>
                                    @endif
                            </div>
                            <div class="col-md-6">
                                    <label class="form-label" for="image">{{ __("Logo") }}</label>
                                    <input  type="file" name="image" id="image" class="form-control" accept="image/png, image/jpeg">  
                                    @if($errors->has('image'))
                                    <small class="text-danger">{{ $errors->first('image') }}</small>
                                    @endif             
                            </div>                           
                        </div>                  
                          <div class="row"> 
                              <div class="col-md-6">
                                    <label class="form-label" for="address">{{ __("Address") }} <span class="text-danger">*</span></label>
                                    <input  type="text" name="address" id="address" class="form-control" placeholder="Address" value="{{ $data -> address }}">  
                                    @if($errors->has('address'))
                                    <small class="text-danger">{{ $errors->first('address') }}</small>
                                    @endif             
                              </div>       
                                                         
                              <div class="col-md-6">
                                    <label class="form-label" for="address">{{ __("facebook link") }} </label>
                                    <input  type="text" name="facebook_link" id="facebook_link" class="form-control" placeholder="Facebook link" value="{{ $data -> facebook_link }}">  
                                    @if($errors->has('facebook_link'))
                                    <small class="text-danger">{{ $errors->first('facebook_link') }}</small>
                                    @endif             
                              </div>
                              <div class="col-md-6">
                                    <label class="form-label" for="twitter_link">{{ __("twitter link") }} </label>
                                    <input  type="text" name="twitter_link" id="twitter_link" class="form-control" placeholder="Twitter link" value="{{ $data -> twitter_link }}">  
                                    @if($errors->has('twitter_link'))
                                    <small class="text-danger">{{ $errors->first('twitter_link') }}</small>
                                    @endif             
                              </div>
                              <div class="col-md-6">
                                    <label class="form-label" for="linkedin_link">{{ __("linkedin link") }} </label>
                                    <input  type="text" name="linkedin_link" id="linkedin_link" class="form-control" placeholder="Linkedin link" value="{{ $data -> linkedin_link }}">  
                                    @if($errors->has('linkedin_link'))
                                    <small class="text-danger">{{ $errors->first('linkedin_link') }}</small>
                                    @endif             
                              </div>
                              <div class="col-md-6">
                                    <label class="form-label" for="youtube_link">{{ __("youtube link") }} </label>
                                    <input  type="text" name="youtube_link" id="youtube_link" class="form-control" placeholder="Youtube link" value="{{ $data -> youtube_link }}">  
                                    @if($errors->has('youtube_link'))
                                    <small class="text-danger">{{ $errors->first('youtube_link') }}</small>
                                    @endif             
                              </div>
                              <div class="col-md-6">
                                    <label class="form-label" for="map_link">{{ __("Map link") }} </label>
                                    <input  type="text" name="map_link" id="map_link" class="form-control" placeholder="Map link" value="{{ $data -> map_link }}">  
                                    @if($errors->has('map_link'))
                                    <small class="text-danger">{{ $errors->first('map_link') }}</small>
                                    @endif             
                              </div>
                              <div class="col-md-12">
                                    <label class="form-label" for="short_details">{{ __("short details") }} </label>
                                    <textarea name="short_details" id="short_details" class="form-control" placeholder="Short description">{{ $data -> short_details }}</textarea>  
                                    @if($errors->has('address'))
                                    <small class="text-danger">{{ $errors->first('address') }}</small>
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
    function valid(){
        if($("#name").val() == ""){
            toastr.error('Company name is a require field!');
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
            toastr.error('Logo is a require field!');
            $("#image").focus();
            $("#image").css({"border-color": "red", "border-width":"1px", "border-style":"solid"});
            return false;
        }
    }
</script>
