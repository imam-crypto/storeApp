@extends('cms.layouts.default')
@section('content')

<div class="col-md-12">
  
<div class="row">
    @if($message = Session::get('sukses'))
    <div class="alert alert-primary" role="alert">
       {{$message}}
      </div>
    
@endif    

        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="btn-group">
                    <a href="#basic" id="sample_editable_1_new" class="btn sbold green" data-toggle="modal">  <i class="fa fa-plus"></i>Add New Banner
                    </a>
                </div>
                <div class="actions">
                    <div class="btn-group btn-group-devided" data-toggle="buttons">
                        <label class="btn btn-transparent dark btn-outline btn-circle btn-sm active">
                            <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                        <label class="btn btn-transparent dark btn-outline btn-circle btn-sm">
                            <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                    </div>
                </div>
            </div>
          
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">

                        <div class="col-md-6 m-1" style="float: right">
                            <div class="btn-group pull-right">
                                <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-print"></i> Print </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover" id="dataTable">
                    <thead>
                        <tr>
                            <th>
                                No
                            </th>
                            <th> Title </th>
                            <th> Slug </th>
                            <th> Description </th>
                            <th> Status </th>
                            <th> Photo </th>
                            <th> Actions </th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no=1;
                        @endphp
                        @forelse ($data as $dt)
                        <tr>
                            <td>
                               {{$no++}}
                            </td>
                            <td> {{$dt->title}} </td>
                            <td>{{$dt->slug}}</td>
                            <td> {!!$dt->description!!}</td>
                            <td class="center">
                              @if ($dt->status == "active")
                              
                              <span class="badge badge-primary">Active</span>
                              @else
                              <span class="badge badge-warning">Inactive</span>
                              @endif
                               <span class="badge badge-primary"></span>
                            </span>
                            </td>
                            <td><img src="{{ url('storage/' . $dt->photo) }}" style="max-height: 90px; max-width: 120px;" alt="photo"></td>
                            <td>
                                <a href="javascript:;" class="btn btn-xs green" onclick="edit({{$dt->id}})" >
                                    <i class="icon-tag"></i> </a>
                                    <form action="{{route('banner.destroy', $dt->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <a href="javascript:;" data-id="{{$dt->id}}" class="del btn red btn-xs">
                                            <i class="icon-trash"></i> </a>
                                    </form>    
                             
                            </td>
                        </tr>
                        @empty
                            
                        @endforelse
                    
                     
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
        <div class="modal fade" id="basic" tabindex="-1" role="basic" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Form Add  Banner</h4>
                    </div>
                    <div class="modal-body"> 
                        <form role="form" method="POST" action="{{route('banner.store')}}" enctype="multipart/form-data">
                          @csrf    
                                <div class="form-group form-md-line-input form-md-floating-label">
                                    <input type="text" class="form-control @error('title')
                                    is-invalid
                                @enderror" id="form_control_1" name="title" value="{{old('title')}}">
                                    <label for="form_control_1">Title</label>
                                    @error('title')
                                    <div class="div" class="text-muted">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group form-md-line-input form-md-floating-label">
                                    <input type="text" class="form-control" id="form_control_1" name="slug">
                                    <label for="form_control_1">Slug</label>
                                </div>
                             
                                <div class="form-group form-md-line-input">
                                    <textarea class="form-control" rows="3" name="description" id="description" placeholder="Description"></textarea>
                                    <label for="form_control_1">Description</label>
                                </div>
                                <div class="form-group form-md-line-input">
                                    <input type="file" class="form-control" id="form_control_1" name="photo">
                                    <label for="form_control_1">Photo</label>
                                </div>
                                <div class="form-group form-md-line-input form-md-floating-label">
                                    <select class="form-control edited" id="form_control_1" name="status">
                                        <option value="">Select Status</option>
                                        <option value="active" {{old('status') == 'active' ? 'selected' :'' }}>Active</option>
                                        <option value="inactive" {{old('status') == 'inactive' ? 'selected' :'' }}>Inactive</option>
                                    </select>
                                    <label for="form_control_1">Dropdown sample</label>
                                </div>
                               
                            <div class="form-actions noborder">
                                <button type="submit" class="btn blue">Submit</button>
                            </div>
                        </form>
                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        {{-- modal edit --}}
        <div class="modal fade" id="modalEdit" tabindex="-1" role="basic" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Form Edit  Banner</h4>
                    </div>
                    <div class="modal-body"> 
                        <form role="form" method="POST" action="{{route('update')}}" enctype="multipart/form-data">
                          @csrf    
                         
                          <input type="text" name="id" id="id">
                                <div class="form-group form-md-line-input form-md-floating-label">
                                    <input type="text" class="form-control @error('title')
                                    is-invalid
                                @enderror" id="title" name="title" value="{{old('title')}}">
                                    <label for="form_control_1">Title</label>
                                    @error('title')
                                    <div class="div" class="text-muted">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group form-md-line-input form-md-floating-label">
                                    <input type="text" class="form-control" id="slug" name="slug">
                                    <label for="form_control_1">Slug</label>
                                </div>
                             
                                <div class="form-group form-md-line-input">
                                    <textarea class="form-control" rows="3" name="description" id="descriptionEdit" placeholder="Description"></textarea>
                                    <label for="form_control_1">Description</label>
                                </div>
                                <div class="form-group form-md-line-input">
                                    <input type="file" class="form-control" name="photo">
                                    <label for="form_control_1">Photo</label>
                                    <a href="" target="_blank" id="photo"></a>
                                </div>
                                <div class="form-group form-md-line-input form-md-floating-label">
                                    <select class="form-control edited" id="status" name="status">
                                        <option value="">Select Status</option>
                                        <option value="active" {{old('status') == 'active' ? 'selected' :'' }}>Active</option>
                                        <option value="inactive" {{old('status') == 'inactive' ? 'selected' :'' }}>Inactive</option>
                                    </select>
                                    <label for="form_control_1">Status</label>
                                </div>
                               
                            <div class="form-actions noborder">
                                <button type="submit" class="btn blue">Submit</button>
                            </div>
                        </form>
                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        {{-- end modal edit --}}
    </div>
</div>

@endsection

@push('after-script')
<script>
    CKEDITOR.replace('description');
    @if (count($errors) > 0)
    $('#basic').modal('show');
@endif
function edit(id){
    CKEDITOR.replace('descriptionEdit');
    console.log(id);

    $.ajax({

url: "{{route('edit')}}?id=" + id,
type: 'get',
dataType: 'json',
contentType: 'application/json',
data: id,

success: function(data) {
    $('#id').val(data.id);
    $('#title').val(data.title);
    $('#descriptionEdit').val(data.description);
    $('#slug').val(data.slug);
    $('#photo').text(data.photo);
    document.getElementById("photo").href = "{{url('storage/')}}" +"/"+ data.photo;
    $('#status').val(data.status);
},

});
$('#modalEdit').modal('show');
}

</script>

<script>
   $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    $('.del').click(function(e){
        var form = $(this).closest('form');
        var id = $(this).data('id');
        e.preventDefault();
        Swal.fire({
        title: "Anda yakin?",
        text: "data di hapus!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Hapus!",
    }).then((result) => {
        if (result.value == true) {
            form.submit();
        Swal.fire({

        icon: "success",
        title: "data berhasil di hapus ",
        showConfirmButton: false,
        timer: 1500,
        });
        }
     
     });
    })
</script>

@endpush