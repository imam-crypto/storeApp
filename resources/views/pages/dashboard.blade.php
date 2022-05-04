@extends('layouts.dashboard')

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h5 class="dashboard-title">
          Dashboard
        </h5>
        <p class="dashboard-subtitle">
          Selamat Datang ON MarketPrabs
        </p>
      </div>
      <div class="dashboard-content">
        <div class="row">
          <div class="col-md-3">
            <div class="card mb-2">
              <div class="dashboard-card-title">
                Customer
              </div>
              <div class="dashboard-card-subtitle">
                90,00
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card mb-2">
              <div class="dashboard-card-title">
                Revenue
              </div>
              <div class="dashboard-card-subtitle">
                90,000
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card mb-2">
              <div class="dashboard-card-title">
                Product
              </div>
              <div class="dashboard-card-subtitle">
                90+
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card mb-2">
              <div class="dashboard-card-title">
                Transaction
              </div>
              <div class="dashboard-card-subtitle">
                Rp. 100k
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-12 mt-2">
            <h5 class="mb-3">Recent Transaction</h5>
      
          <a href="./dashboard-transaction-detail.html" class="card card-list d-block" >
            <div class="card-body">
              <div class="row">
                 <div class="col-md-1">
                  <img src="{{asset('template')}}/produk/helm.jpeg" height="60px" width="60px" alt="">
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
                  <img src="{{asset('template')}}/images/right.svg" alt="">
                </div>
              </div>
            </div>
          </div>
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection