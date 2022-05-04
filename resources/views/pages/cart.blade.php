@extends('layouts.app')
@section('content')
<div class="page-content page-cart">
    <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="">Index</a>
                </li>
                <li class="breadcrumb-item active">
                Cart
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>

    <section class="store-cart">
      <div class="container">
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-12 table-responsive">
            <table class="table table-borderless table-cart">
              <thead>
                <tr>
                  <td>Image</td>
                  <td>Name &  seller </td>
                  <td>Price</td>
                  <td>Menu</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="width:30%;">
                    <img src="./produk/helm.jpeg" alt="cart" class="cart-image">
                  </td>
                  <td style="width: 35%;">
                    <div class="product-title">Helm AGV</div>
                    <div class="product-subtitle">By Gelora</div>
                  </td>
                  <td> <div class="product-title">Rp.9.000.000</div>
                    <div class="product-subtitle">IDR</div></td>
                    <td>
                      <a href="" class="btn btn-remove-cart">Remove</a>
                    </td>
                </tr>
                <tr>
                  <td style="width:30%;">
                    <img src="./produk/helm.jpeg" alt="cart" class="cart-image">
                  </td>
                  <td style="width: 35%;">
                    <div class="product-title">Helm AGV</div>
                    <div class="product-subtitle">By Gelora</div>
                  </td>
                  <td> <div class="product-title">Rp.9.000.000</div>
                    <div class="product-subtitle">IDR</div></td>
                    <td>
                      <a href="" class="btn btn-remove-cart">Remove</a>
                    </td>
                </tr>
                <tr>
                  <td style="width:30%;">
                    <img src="./produk/helm.jpeg" alt="cart" class="cart-image">
                  </td>
                  <td style="width: 35%;">
                    <div class="product-title">Helm AGV</div>
                    <div class="product-subtitle">By Gelora</div>
                  </td>
                  <td> <div class="product-title">Rp.10.000.000</div>
                    <div class="product-subtitle">IDR</div></td>
                    <td>
                      <a href="" class="btn btn-remove-cart">Remove</a>
                    </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="150">
          <div class="col-12">
            <hr />
          </div>
          <div class="col-12">
            <h2>Shipping Details</h2>
          </div>
        </div>
        <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
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
        <div class="row" data-aos="fade-up" data-aos-delay="150">
          <div class="col-12">
            <hr />
          </div>
          <div class="col-12">
            <h2>Payment Detail</h2>
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="200">
          <div class="col-4 col-md-2">
            <div class="product-title">Helm AGV</div>
            <div class="product-subtitle">Country text</div>
          </div>
          <div class="col-4 col-md-3">
            <div class="product-title">Rp.10.000</div>
            <div class="product-subtitle">Product Insurance</div>
          </div>
          <div class="col-4 col-md-2">
            <div class="product-title">Rp.10.000</div>
            <div class="product-subtitle">Ship To Bandung</div>
          </div>
          <div class="col-4 col-md-2">
            <div class="product-title text-success">Rp.10.000</div>
            <div class="product-subtitle">Total</div>
          </div>
          <div class="col-7 col-md-2">
            <a href="./success.html" class="btn btn-success btn-block px-4 mt-4" > Checkout</a>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection