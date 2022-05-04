@extends('cms.layouts.default')
@section('content')
@push('addon-style')
<link href="{{asset('template_admin')}}/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="{{asset('template_admin')}}/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />

@endpush
<div class="row" style="margin: 8px">

    <div class="col-md-12 m-2">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-blue center">
                    <span class="caption-subject bold uppercase center">Form Add Product</span>
                </div>
            </div>
            <div class="portlet-body form">

                <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-body">
                        <div class="col-md-6">
                            <div class="form-group form-md-line-input">
                                <input type="text" class="form-control" id="form_control_1" placeholder="Tittle" name="name" value="{{old('name')}}">
                                <label for="form_control_1">Name</label>
                            </div>         

                            
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="description"></textarea>            
                            </div>
                       

                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                <div class="input-icon">
                                    <input type="number" min="0" class="form-control" value="" name="quantity">
                                    <label for="form_control_1">Quantity</label>
                                    <i class="fa fa-bell-o"></i>
                                </div>
                            </div>
                            <div class="form-group form-md-line-input has-success form-md-floating-label">
                                <div class="input-icon">
                                    <input type="number" min="0" class="form-control" value="" name="price">
                                    <label for="form_control_1">Price</label>
                                    <i class="fa fa-bell-o"></i>
                                </div>
                            </div>
                         

                        </div>
                        <div class="row">
                            <div class="col-md-6">


                                <div class="form-group">
                                    <label for="single" class="control-label">Select User</label>
                                    <select id="single" class="form-control select2" name="users_id">
                                        <option>Select User</option>
                                        @foreach ($user as $us)
                                        <option value=" {{$us->id}} "> {{$us->name}} </option>
                                            
                                        @endforeach
                                    </select>
                                </div>    
                                <div class="form-group">
                                    <label for="single" class="control-label">Select Category</label>
                                    <select id="single" class="form-control select2" name="categories_id">
                                        <option>Select Category</option>
                                        @foreach ($category as $cs)
                                        <option value=" {{$cs->id}} "> {{$cs->name}} </option>
                                            
                                        @endforeach
                                    </select>
                                </div>
                              
                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                    <div class="input-icon">
                                        <input type="number" min="0" class="form-control" value="" name="weight">
                                        <label for="form_control_1">Weight</label>
                                        <i class="fa fa-bell-o"></i>
                                    </div>
                                </div>
                                <div class="form-group form-md-line-input has-success form-md-floating-label">
                                    <div class="input-icon">
                                        <input type="number" min="0" class="form-control" value="" name="discount">
                                        <label for="form_control_1">Discount</label>
                                        <i class="fa fa-bell-o"></i>
                                    </div>
                                </div>
                                <div class="form-group form-md-line-input has-success">
                                    <div class="input-icon">
                                        <input type="date" class="form-control" name="start_discount">
                                        <label for="form_control_1">Start Discount</label>
                                        <i class="fa fa-date"></i>
                                    </div>
                                </div>

                                <div class="form-group form-md-line-input has-success">
                                    <div class="input-icon">
                                        <input type="date" class="form-control" name="end_discount">
                                        <label for="form_control_1">End Discount</label>
                                        <i class="fa fa-date"></i>
                                    </div>
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
<script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
<script type="text/javascript">

CKEDITOR.replace( 'description' );
</script>

@endpush





