@extends('cms.layouts.default')
@section('content')
<div class="row" style="margin: 4px">

    <div class="col-md-12 m-2">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-blue center">
                    <span class="caption-subject bold uppercase center">Form Add Brand</span>
                </div>

            </div>

        

            <div class="portlet-body form">

                <form action="{{route('brand.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                        <div class="form-body">
                            <div class="col-md-6">
                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" id="form_control_1" placeholder="Tittle" name="title" value="{{old('title')}}">
                                    <label for="form_control_1">Title</label>
                                </div>

                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" id="form_control_1" placeholder="Slug" name="slug" value="{{old('slug')}}">
                                    <label for="form_control_1">Slug</label>
                                </div>
                            
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                   
                                    <div class="form-group form-md-line-input has-info">
                                        <select class="form-control" id="form_control_1" name="status">
                                            <option value="">--- Select Status ---</option>
                                            <option value="active" {{old('status') == 'active' ? 'selected' : ''}} >Active</option>
                                            <option value="inactive" {{old('status') == 'active' ? 'selected' : ''}} >Inactive</option>
                                        </select>
                                        <label for="form_control_1">Status</label>
                                    </div>
                                    <div class="form-group form-md-line-input">
                                        <input type="file" class="form-control" name="photo">
                                        <label for="form_control_1">Photo</label>
                                        <a href="" target="_blank" id="photo"></a>
                                    </div>
                                </div>
                               
                                <button type="submit" class="btn blue m-4" style="margin-left: 30px;">Save</button>
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

</script>
@endpush