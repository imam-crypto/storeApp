@extends('cms.layouts.default')
@section('content')
<div class="row" style="margin: 8px">

    <div class="col-md-12 m-2">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-blue center">
                    <span class="caption-subject bold uppercase center">Form Add User</span>
                </div>
            </div>
            <div class="portlet-body form">

                <form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                        <div class="form-body">
                            <div class="col-md-6">
                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" id="form_control_1" placeholder="Tittle" name="name" value="{{old('name')}}">
                                    <label for="form_control_1">Name</label>
                                </div>              
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" id="form_control_1" placeholder="Email" name="email" value="{{old('email')}}">
                                    <label for="form_control_1">Email</label>
                                </div>              
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input">
                                        <input type="password" class="form-control" id="form_control_1" placeholder="Password" name="password" value="{{old('password')}}">
                                        <label for="form_control_1">Password</label>
                                    </div>              
                                </div>
                                <div class="col-md-6">

                                    <label for="form_control_1">Roles</label>
                                <select name="roles" id="" class="form-control" id="form_control_1">
                                    <option value="ADMIN">ADMIN</option>
                                    <option value="USER">USER</option>
                                </select>
                                </div>     
                            </div>
                            <button type="submit" class="btn blue m-4" style="margin-left: 20px;">Save</button>
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