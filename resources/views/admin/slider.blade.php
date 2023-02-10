<x-admin-header-component/>
<x-nav-component/>
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">{{ __('About us' )}}</h4>
            <div class="row">
              <div class="col-xl">
              <span class="text-success">{{ Session::get('success') }}</span>
                    <span class="text-danger">{{ Session::get('errmsg') }}</span>

                  <div class="card mb-4">                  
                    <div class="card-body">
                      <form method="post" action="{{ route('slider.update.success') }}" onsubmit="return valid();" enctype= multipart/form-data>
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                    <label class="form-label" for="title">{{ __("Title") }} <span class="text-danger">*</span></label>
                                    <input type="text" name="title" id="title" class="form-control" placeholder="Title" value="{{ $data -> title }}"/>
                                    @if($errors->has('title'))
                                    <small class="text-danger" id="client_iderrmsg">{{ $errors->first('title') }}</small>
                                    @endif 
                            </div>   
                            <div class="col-md-6">
                                    <label class="form-label" for="image_1">{{ __('Image') }} <span class="text-danger">*</span></label>
                                    <input type="file" name="image" id="image" class="form-control" value="{{ old('image') }}" accept="image/png, image/jpeg"/>
                                    <a href="{{ asset($data -> image) }}" target="_blank">Show image</a>

                                    @if($errors->has('image'))
                                    <small class="text-danger">{{ $errors->first('image') }}</small>
                                    @endif
                            </div>
                            <div class="col-md-12">
                                    <label class="form-label" for="details">{{ __("Details") }} <span class="text-danger">*</span></label>
                                    <textarea name="details" id="details" class="form-control" placeholder="Details">{{ $data -> details }}</textarea>  
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
    function valid(){
        if($("#title").val() == ""){
            toastr.error('Title is a require field!');
            $("#title").focus();
            $("#title").css({"border-color": "red", "border-width":"1px", "border-style":"solid"});
            return false;
        }
    }
</script>
