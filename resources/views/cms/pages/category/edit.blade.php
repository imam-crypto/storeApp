@extends('cms.layouts.default')
@section('content')
<div class="row" style="margin: 4px">

    <div class="col-md-12 m-2">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-blue center">
                    <span class="caption-subject bold uppercase center">Form Tambah Surat Penugasan</span>
                </div>

            </div>
            @if (count($errors) > 0)
            <div class="alert alert-primary" role="alert">
                {{$errors}}
               </div>
        @endif
        

            <div class="portlet-body form">

                <form action="{{route('category.update', $data->id)}}" method="POST" enctype="multipart/form-data">
                    @method('put')
                @csrf
                    <div class="row">
                        <div class="form-body">
                            <div class="col-md-6">
                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" id="form_control_1" placeholder="name" name="name" value="{{$data->name}}">
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
                                    <div class="form-group">
                                        <img src="{{ url('storage/' . $data->photo) }}" id="gambar_load" width="400px" alt="">
                                    </div>
                                </div>
                               
                                <button type="submit" class="btn blue m-4" style="margin-left: 30px;">Edit</button>
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
    $('.is_parent').change(function(e){
        e.preventDefault();
        var check = $('.is_parent').prop('checked');
       if(check){
           $('#parent_cat_div').css("display","none");
       }else{
        $('#parent_cat_div').show();

       }
    });

  
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