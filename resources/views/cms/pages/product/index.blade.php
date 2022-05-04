@extends('cms.layouts.default')
@section('content')

<div class="col-md-12 m-2">
  
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
                    <a href="{{route('product.create')}}" id="sample_editable_1_new" class="btn sbold green">  <i class="fa fa-plus"></i>Add New Product
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
                            <th> Name </th>
                            <th> Category </th>
                            <th> Author </th>
                            <th> Actions </th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no=1;
                        @endphp
                        @forelse ($item as $dt)
                        <tr>
                            <td>
                               {{$no++}}
                            </td>
                            <td> {{$dt->name}} </td>
                            <td> {{$dt->category->name}} </td>
                            <td> {{$dt->user->name}} </td>
                            {{-- <td>{{$user->name}}</td> --}}
                           
                          
                            <td>
                                {{-- <a href="{{route('category.edit',$dt->id)}}" class="btn btn-xs green">
                                    <i class="icon-tag"></i> </a>
                                    <form action="{{route('category.destroy', $dt->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <a href="javascript:;" data-id="{{$dt->id}}" class="del btn red btn-xs">
                                            <i class="icon-trash"></i> </a>
                                    </form>     --}}
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-left" role="menu">
                                            <li>
                                                <a href="{{route('product.show',$dt->id)}}">
                                                    <i class="icon-eye"></i> Detail </a>
                                            </li>
                                            <li>
                                                <a href="{{route('product.edit',$dt->id)}}">
                                                    <i class="icon-pencil"></i> Edit </a>
                                            </li>
                                            <li>
                                                <form action="{{route('product.destroy', $dt->id) }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                <a href="javascript:;"  data-id="{{$dt->id}}" class="del btn red btn-xs" style="text-decoration: none; margin-left: 14px;margin-bottom: 8px;">
                                                    <i class="icon-trash"></i> Delete </a>
                                                </form>
                                            </li>
                                           
                                        </ul>
                                    </div>      
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

@push('prepand-style')
<link href="{{asset('template_admin/plugins')}}/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"
type="text/css" />
@endpush


@push('before-script')
<script src="{{asset('template_admin')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('template_admin')}}/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('template_admin')}}/plugins/datatables/datatables-demo.js"></script>
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