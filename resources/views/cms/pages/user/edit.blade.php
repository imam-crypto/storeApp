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
                                    <input type="text" class="form-control" id="form_control_1" placeholder="{{$data->title}}" name="title" value="{{old('title')}}">
                                    <label for="form_control_1">Title</label>
                                </div>

                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" id="form_control_1" placeholder="{{$data->slug}}" name="slug" value="{{old('slug')}}">
                                    <label for="form_control_1">Slug</label>
                                </div>
                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" id="form_control_1" placeholder="{{$data->summary}}" name="summary" value="{{old('summary')}}">
                                    <label for="form_control_1">Summary</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="md-checkbox">
                                        <input type="checkbox" id="checkbox1" class="md-check is_parent"  name="is_parent" value="{{$data->is_parent}}" {{$data->is_parent=='true' ? 'checked' : ''}}>
                                        <label for="checkbox1">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span> Is Parent </label>
                                    </div>
                                    <div class="form-group form-md-line-input has-info d-none" id="parent_cat_div" >
                                        <select class="form-control" id="form_control_1" name="parent_id">
                                            @foreach ($parent as $item)
                                            <option value="{{$item->id}}" {{old('parent_id')==$item->id ? 'selected' : ''}}>{{$item->title}}</option>
                                                
                                            @endforeach
                                        </select>
                                        <label for="form_control_1">Parent Category</label>
                                    </div>
                                    <div class="form-group form-md-line-input has-info">
                                        <select class="form-control" id="form_control_1" name="status">
                                            <option value="{{$data->status}}">{{$data->status}}</option>
                                            <option value="active" {{old('status') == 'active' ? 'selected' : ''}} >Active</option>
                                            <option value="inactive" {{old('status') == 'active' ? 'selected' : ''}} >Inactive</option>
                                        </select>
                                        <label for="form_control_1">Status</label>
                                    </div>
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