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
                    <label for="Address">Your Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Your Name" id="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="Address">Your Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Your Email" id="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="Address">Address 1</label>
                    <input type="text" class="form-control" name="address1" placeholder="Address 1" id="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="Address">Address 2</label>
                    <input type="text" class="form-control" name="address1" placeholder="Address 1" id="">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="Address">Province</label>
                    <select name="province" id="province" class="form-control">
                      <option value="Wes Java">Jawa Barat</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="city">City</label>
                    <select name="province" id="province" class="form-control">
                      <option value="Bandung">Bandung</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="City">City</label>
                    <input type="text" class="form-control" name="city" placeholder="Bandung" id="">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="Address">Postal Code</label>
                    <input type="text" class="form-control" name="postalCode" placeholder="PostalCode" id="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="Address">Country</label>
                    <input type="text" class="form-control" name="country" placeholder="Indonesia" id="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="Address">Mobile</label>
                    <input type="text" class="form-control" name="mobile" placeholder="no Hp" id="">
                  </div>
                </div>
              </div>
                <div class="row">
                  <div class="col text-right">
                    <button class="btn btn-primary px-5">Save Now</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection