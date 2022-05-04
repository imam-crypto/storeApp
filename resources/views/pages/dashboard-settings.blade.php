@extends('layouts.dashboard')

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h5 class="dashboard-title">
        Store Setting
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
                      <label>Nama Toko</label>
                      <input type="text" name="email" id="text" class="form-control">
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
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Store</label>
                      <p class="text-muted">Status Toko?</p>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" name="" id="openStoreTrue" class="custom-control-input" name="is_store_open"
                        />
                        <label for="openStoreTrue" class="custom-control-label">Buka</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" name="" id="openStoreFalse" class="custom-control-input" name="is_store_open"
                        />
                        <label for="openStoreFalse" class="custom-control-label">Sementara Tutup</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
       <div class="row">
        <div class="col text-right">
         <button class="btn btn-primary px-5">Save Now</button>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection