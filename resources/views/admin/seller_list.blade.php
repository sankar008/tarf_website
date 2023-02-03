<x-admin-header-component/>
<x-nav-component/>
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">{{ __('Sell' )}}</h4>
            <div class="row">
            <span class="text-success">{{ Session::get('success') }}</span>
            <span class="text-danger">{{ Session::get('errmsg') }}</span>

              <div class="col-xl">
                  <div class="card mb-4">                  
                    <div class="card-body">
                      <form method="post" action="{{ route('seller.update.success') }}" onsubmit="return valid();" enctype= multipart/form-data>
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                    <label class="form-label" for="title_1">{{ __("Title") }} <span class="text-danger">*</span></label>
                                    <input type="text" name="title_1" id="title_1" class="form-control" placeholder="Title" value="{{ $data -> title_1 }}"/>
                                    @if($errors->has('title_1'))
                                    <small class="text-danger" id="client_iderrmsg">{{ $errors->first('title_1') }}</small>
                                    @endif 
                            </div>   
                            <div class="col-md-6">
                                    <label class="form-label" for="image_1">{{ __('Image') }} <span class="text-danger">*</span></label>
                                    <input type="file" name="image_1" id="image_1" class="form-control" value="{{ old('image_1') }}" accept="image/png, image/jpeg"/>
                                    <a href="{{ asset($data -> image_1) }}" target="_blank">Show image</a>

                                    @if($errors->has('image_1'))
                                    <small class="text-danger">{{ $errors->first('image_1') }}</small>
                                    @endif
                            </div>
                            <div class="col-md-12">
                                    <label class="form-label" for="details_1">{{ __("Details") }} <span class="text-danger">*</span></label>
                                    <textarea name="details_1" id="details_1" class="form-control" placeholder="Details">{{ $data -> details_1 }}</textarea>  
                                    @if($errors->has('details_1'))
                                    <small class="text-danger">{{ $errors->first('details_1') }}</small>
                                    @endif    
                            </div>  

                              <div class="col-md-6">
                                    <label class="form-label" for="title_2">{{ __("Title") }} <span class="text-danger">*</span></label>
                                    <input type="text" name="title_2" id="title_2" class="form-control" placeholder="Title" value="{{ $data -> title_2 }}"/>
                                    @if($errors->has('title_2'))
                                    <small class="text-danger">{{ $errors->first('title_2') }}</small>
                                    @endif             
                              </div>    
                              
                              <div class="col-md-6">
                                    <label class="form-label" for="image_2">{{ __("Image") }}</label>
                                    <input  type="file" name="image_2" id="image_2" class="form-control" accept="image/png, image/jpeg">  
                                    <a href="{{ asset($data -> image_2) }}" target="_blank">Show image</a>
                                    @if($errors->has('image_2'))
                                    <small class="text-danger">{{ $errors->first('image_2') }}</small>
                                    @endif             
                            </div> 
                              
                              <div class="col-md-12">
                                    <label class="form-label" for="sale_date">{{ __("Details") }} <span class="text-danger">*</span></label>
                                    <textarea name="details_2" id="details_2" class="form-control" placeholder="Details">{{ $data -> details_2 }}</textarea>  
                                    @if($errors->has('details_2'))
                                    <small class="text-danger">{{ $errors->first('details_2') }}</small>
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
    CKEDITOR.replace('details_1');
    CKEDITOR.replace('details_2');
    function valid(){
        if($("#title_1").val() == ""){
            toastr.error('Title is a require field!');
            $("#title_1").focus();
            $("#title_1").css({"border-color": "red", "border-width":"1px", "border-style":"solid"});
            return false;
        }else if($("#title_2").val() == ""){
            toastr.error('Title is a require field!');
            $("#title_2").focus();
            $("#title_2").css({"border-color": "red", "border-width":"1px", "border-style":"solid"});
            return false;
        }
    }
</script>
