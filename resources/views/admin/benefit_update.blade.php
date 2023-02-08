<x-admin-header-component/>
<x-nav-component/>
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">{{ __('Update Service' )}}</h4>
            <div class="row">
              <div class="col-xl">
              <span class="text-success">{{ Session::get('success') }}</span>
                    <span class="text-danger">{{ Session::get('errmsg') }}</span>

                  <div class="card mb-4">                  
                    <div class="card-body">
                      <form method="post" action="{{ route('benifit.update.success') }}" onsubmit="return valid();" enctype= multipart/form-data>
                      <input type="hidden" name="update_id" id="update_id" value="{{ $data -> id }}">  
                      @csrf
                        <div class="row">
                            <div class="col-md-12">
                                    <label class="form-label" for="title">{{ __("Title") }} <span class="text-danger">*</span></label>
                                    <input type="text" name="title" id="title" class="form-control" placeholder="Service title" value="{{ $data -> title }}"/>
                                    @if($errors->has('title'))
                                    <small class="text-danger" id="client_iderrmsg">{{ $errors->first('title') }}</small>
                                    @endif 
                            </div> 
                      
                            <div class="col-md-12">
                                <label class="form-label" for="details">{{ __("Service Details") }} <span class="text-danger">*</span></label>
                                <textarea name="details" id="details" class="form-control" placeholder="Service Details">{{ $data -> details }}</textarea>  
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
        if($("#title").val() == ""){
            toastr.error('Service title is a require field!');
            $("#title").focus();
            $("#title").css({"border-color": "red", "border-width":"1px", "border-style":"solid"});
            return false;
        }
    }
</script>