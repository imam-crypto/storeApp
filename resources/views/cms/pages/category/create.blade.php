@extends('cms.layouts.default')
@section('content')
<div class="row" style="margin: 8px">

    <div class="col-md-12 m-2">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-blue center">
                    <span class="caption-subject bold uppercase center">Form Add Category</span>
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
                <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                        <div class="form-body">
                            <div class="col-md-6">
                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" id="form_control_1" placeholder="Tittle" name="name" value="{{old('name')}}">
                                    <label for="form_control_1">Name</label>
                                </div>              
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                   
                                    <div class="form-group form-md-line-input">
                                        <input type="file" class="form-control" name="photo" id="preview_gambar">
                                        <label for="form_control_1">Photo</label>
                                        <a href="" target="_blank" id="photo"></a>
                                    </div>
                                </div>
                               <div class="col-md-6">
                                <img src="{{asset('template_admin')}}/images/pm2.png" alt="logo" class="logo-default" style="max-width: 100%;
                                max-height: 50%;
                                margin: 15px;" id="gambar_load">
                               </div>
                                <button type="submit" class="btn blue m-4" style="margin-left: 20px;">Save</button>
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
<script>
  
    function bacaGambar(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#gambar_load').attr('src', e.target.result)
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$('#preview_gambar').change(function() {
    bacaGambar(this);
})
</script>

@endpush