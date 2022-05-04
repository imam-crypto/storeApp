@extends('layouts.dashboard')

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h5 class="dashboard-title">
        Dashboard
      </h5>
      <p class="dashboard-subtitle">
        Transactions Details
      </p>
    </div>
   <div class="dashboard-content" id="transactionsDetails">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-12 col-md-4">
                <img src="./produk/agv1.jpg" height="160px" class="w-100 mb-3"  alt="">
                </div>
                <div class="col-12 col-md-8">
                  <div class="row">
                    <div class="col-12 col-md-6">
                      <div class="product-title">
                        Prabs
                      </div>
                      <div class="product-subtitle">
                        Ozos
                      </div>  
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">
                        Product Name
                      </div>
                      <div class="product-subtitle">
                        Agv
                      </div>  
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">
                        Date
                      </div>
                      <div class="product-subtitle">
                        19-10-2022
                      </div>  
                    </div>
                    <hr style="color: turquoise;">
                    <div class="col-12 col-md-6">
                      <div class="product-title">
                      Payment  Status
                      </div>
                      <div class="product-subtitle text-danger">
                        Pending
                      </div>  
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">
                        Harga
                      </div>
                      <div class="product-subtitle ">
                        Rp.9.000.000
                      </div>  
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">
                        Mobile
                      </div>
                      <div class="product-subtitle ">
                        088988987
                      </div>  
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 mt-4">
                  <h5>Shipping Information</h5>
                </div>
                <div class="col-12">
                  <div class="row">
                    <div class="col-12 col-md-6">
                      <div class="product-title">Address 1</div>
                      <div class="product-subtitle">
                        Sukamulya
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Address 2</div>
                      <div class="product-subtitle">
                        Kopo
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Province</div>
                      <div class="product-subtitle">
                        West Java
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">City</div>
                      <div class="product-subtitle">
                        Bandung
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Country</div>
                      <div class="product-subtitle">
                        Indonesia
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Postal Codde</div>
                      <div class="product-subtitle">
                        78898
                      </div>
                    </div>
                    <div class="col-12 col-md-3">
                      <div class="product-title">Shipping Status</div>
                      <select name="status" id="status" class="form-control"
                      v-model="status">
                        <option value="PENDING">Pending</option>
                        <option value="SHIPPING">Shipping</option>
                        <option value="SUCCESS">Success</option>
                      </select>
                    </div>
                    <template v-if="status == 'SHIPPING'">
                      <div class="col-md-3">
                        <div class="product-title">Input Resi</div>
                        <input type="text" name="resi" v-model="resi">
                      </div>
                      <div class="col-md-2 mt-3">
                        <button type="submit" class="btn btn-success btn-block">Update Resi</button>
                      </div>
                    </template>
                  </div>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-12 text-right">
                  <button class="btn btn-success btn-md mt-4">Save Now</button>
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
<script>
  AOS.init();
</script>
<script>
  $('#menu-toggle').click(function(e){
    e.preventDefault();
    $('#wrapper').toggleClass("toggled");
  });
</script>
<script src="./vendor/vue/vue.js"></script>
 <script>
   var transactionsDetails = new Vue({
     el:'#transactionsDetails',
     data:{
       status:"SHIPPING",
       resi:"BDG-009-BGA"
     }
   });
 </script>
@endpush