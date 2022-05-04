@extends('layouts.dashboard')

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h5 class="dashboard-title">
        Dashboard Products
      </h5>
      <p class="dashboard-subtitle">
        Selamat Datang ON MarketPrabs
      </p>
    </div>
    <div class="dashboard-content">
     <div class="row">
       <div class="col-12">
         <a href="./dashboard-products-create.html" class="btn btn-primary">
           Add New Product
         </a>
       </div>
     </div>
     <div class="row mt-4">
       <div class="col-12 col-sm-6 col-md-4 col-lg-3">
         <a href="./dashboard-products-detail" class="card card-dashboard-product d-block">
           <div class="card-body">
             <img src="{{asset('template')}}/produk/agv1.jpg" alt="produck" class="w-100 mb-2" height="160px">
           </div>
           <div class="product-title">Agv redbull</div>
           <div class="product-category">Helm</div>
         </a>
       </div>
       <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <a href="./dashboard-products-detail" class="card card-dashboard-product d-block">
          <div class="card-body">
            <img src="{{asset('template')}}/produk/hjc1.jpg" alt="produck" class="w-100 mb-2" height="160px">
          </div>
          <div class="product-title">Hjc redbull</div>
          <div class="product-category">Helm</div>
        </a>
      </div>
     </div>
    </div>
  </div>
</div>
@endsection