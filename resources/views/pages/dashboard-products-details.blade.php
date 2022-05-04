@extends('layouts.dashboard')

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h5 class="dashboard-title">
        Edit Product
      </h5>
      <p class="dashboard-subtitle">
        Selamat Datang ON MarketPrabs
      </p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">
          <form action="">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Product Name</label>
                      <input type="text" name="email" id="text" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Price</label>
                      <input type="number" name="email" id="number" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Quantity</label>
                      <input type="number" name="email" id="number" class="form-control">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="category">Category</label>
                      <select name="category" class="form-control">
                        <option value="" disabled>Select Category</option>
                      </select>
                    </div>
                  </div>
                 <div class="col-md-12">
                   <div class="form-group">
                     <label for="thum">Thumbnails</label>
                     <input type="file" name="image" id="image" class="form-control">
                    <p class="text-muted">Kamu Dapat Memilih Lebih Dari Satu File</p>
                   </div>
                 </div>
                 <div class="col-md-12">
                   <label>Deskripsi</label>
                  <textarea name="editor1"></textarea>
                 </div>
                </div>
              </div>
              <div class="row">
                <div class="col text-right">
                 <button class="btn btn-primary btn-block px-5">Save Now</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-4">
                  <div class="gallery-container">
                     <img src="{{asset('template')}}/produk/hjc1.jpg" alt="produck" class="w-100 mb-2" height="160px">
                    <a href="" class="delete-gallery">
                      <img src="{{asset('template')}}/images/right.svg" alt="" height="20px">
                    </a>       
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="gallery-container">
                     <img src="{{asset('template')}}/produk/hjc1.jpg" alt="produck" class="w-100 mb-2" height="160px">
                    <a href="" class="delete-gallery">
                      <img src="{{asset('template')}}/images/right.svg" alt="" height="20px">
                    </a>       
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="gallery-container">
                     <img src="{{asset('template')}}/produk/agv1.jpg" alt="produck" class="w-100 mb-2" height="160px">
                    <a href="" class="delete-gallery">
                      <img src="{{asset('template')}}/images/right.svg" alt="" height="20px">
                    </a>       
                  </div>
                </div>
                <div class="col-12">
                  <input type="file" name="" id="file" style="display: none;" multiple>
                  <button type="submit" class="btn btn-warning mt-2 btn-block" onclick="thisFileUpload()">add photo</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@push('addon-script')
<script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  CKEDITOR.replace( 'editor1' );
</script>
<script>
  AOS.init();
</script>
<script>
  $('#menu-toggle').click(function(e){
    e.preventDefault();
    $('#wrapper').toggleClass("toggled");
  });

  function thisFileUpload(){
    document.getElementById("file").click();
  }
</script>
@endpush