@extends('cms.layouts.default')
@section('content')
@push('addon-style')
<link href="{{asset('template_admin')}}/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="{{asset('template_admin')}}/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
<style>
     #image_preview img{
            width: 200px;
            padding: 5px;
            }
            #image_preview{
            border: 1px solid black;
            padding: 10px;
            }
</style>
@endpush
<div class="row" style="margin: 8px">

    <div class="col-md-12 m-2">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-blue center">
                    <span class="caption-subject bold uppercase center">Form Add Product Gallery</span>
                </div>
            </div>
            <div class="portlet-body form">
                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                <form action="{{route('product_gallery.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-body">
                        <div class="col-md-6">
                            <div class="form-group form-md-line-input">
                                <input type="file" class="form-control"  id="uploadFile" name="photos[]" multiple="true">
                                <label for="form_control_1">Photo</label>
                            </div>    
                               
                            <div id="image_preview"> </div>
                        </div>
                          
                        <div class="row">
                            <div class="col-md-6">


                                <div class="form-group">
                                    <label for="single" class="control-label">Select Product</label>
                                    <select id="single" class="form-control select2" name="products_id">
                                        <option>Select Product</option>
                                        @foreach ($product as $us)
                                        <option value=" {{$us->id}} "> {{$us->name}} </option>
                                            
                                        @endforeach
                                    </select>
                                </div>    
                           
                            </div>
                            <button type="submit" class="btn blue m-4" style="margin-left: 20px;"> <i class="fa fa-save" style="margin-right: 4px;"></i>Save</button>

                        </div>
                    </div>
                </div>
                         

                </form>
            </div>
        </div>
    </div>

</div>

@endsection
@push('after-script')
<script src="{{asset('template_admin')}}/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
<script src="{{asset('template_admin')}}/assets/pages/scripts/components-select2.min.js" type="text/javascript"></script>
<script type="text/javascript">
  

         $(function() {
var previewImages = function(input, imgPreviewPlaceholder) {
if (input.files) {
var filesAmount = input.files.length;
for (i = 0; i < filesAmount; i++) {
var reader = new FileReader();
reader.onload = function(event) {
$($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
$($.parseHTML(('<span class="img-delete"><b class="remove_icon">X</b></span>')));

}
reader.readAsDataURL(input.files[i]);
}
}
};
$('#uploadFile').on('change', function() {
previewImages(this, '#image_preview');
});
});
     </script>
 

@endpush





