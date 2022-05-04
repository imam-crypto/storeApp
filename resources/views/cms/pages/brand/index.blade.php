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
                    <a href="{{route('brand.create')}}" id="sample_editable_1_new" class="btn sbold green" data-toggle="modal">  <i class="fa fa-plus"></i>Add New Brand
                    </a>
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
                                        <a href="{{route('brand.download')}}">
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
                                <a href="{{route('brand.edit',$dt->id)}}" class="btn btn-xs green">
                                    <i class="icon-tag"></i> </a>
                                    <form action="{{route('brand.destroy', $dt->id) }}" method="POST">
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
    </div>
</div>

@endsection

@push('after-script')
<script>
    CKEDITOR.replace('description');
    @if (count($errors) > 0)
    $('#basic').modal('show');
@endif

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