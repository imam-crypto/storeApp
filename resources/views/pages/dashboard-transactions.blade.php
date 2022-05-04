@extends('layouts.dashboard')

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h5 class="dashboard-title">
        Transactions
      </h5>
      <p class="dashboard-subtitle">
        Riwayat Transaksi
      </p>
    </div>
    <div class="dashboard-content">
    
      <div class="row mt-2">
        <div class="col-12 mt-2">
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Sell Product</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Buy Product</a>
            </li>
       
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

           


            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
              <a href="./dashboard-transaction-detail.html" class="card card-list d-block" >
                <div class="card-body">
                  <div class="row">
                     <div class="col-md-1">
                      <img src="./produk/helm.jpeg" height="60px" width="60px" alt="">
                    </div>
                    <div class="col-md-4">
                      Helm
                    </div> 
                    <div class="col-md-3">
                      Prabs
                    </div>
                    <div class="col-md-3">
                      12 Maret 2022
                    </div>
                    <div class="col-md-1 d-none d-md-block">
                      <img src="./images/right.svg" alt="">
                    </div>
                  </div>
                </div>
              </div>
              </a>
              <a href="./dashboard-transaction-detail.html" class="card card-list d-block" >
                <div class="card-body">
                  <div class="row">
                     <div class="col-md-1">
                      <img src="./produk/helm.jpeg" height="60px" width="60px" alt="">
                    </div>
                    <div class="col-md-4">
                      Helm
                    </div> 
                    <div class="col-md-3">
                      Prabs
                    </div>
                    <div class="col-md-3">
                      12 Maret 2022
                    </div>
                    <div class="col-md-1 d-none d-md-block">
                      <img src="./images/right.svg" alt="">
                    </div>
                  </div>
                </div>
              </div>
              </a>
            </div>
          
          </div>
      
      </div>
    </div>
  </div>
</div>
@endsection