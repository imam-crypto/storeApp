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
                @php
                    $totalPrice = 0
                @endphp
                @foreach ($carts as $item)
                    
                  <tr>
                    <td style="width:30%;">
                      @if ($item->product->galleries)
                      <img src=" {{ Storage::url($item->product->galleries->first()->photos)}} " alt="cart" class="cart-image">
                      @else
                          <p>Tidak Ada Gambar</p>
                      @endif
                    </td>
                    <td style="width: 35%;">
                      <div class="product-title"> {{$item->product->name}} </div>
                      <div class="product-subtitle">By {{$item->product->user->store_name}}</div>
                    </td>
                    <td> <div class="product-title">Rp. {{ number_format($item->product->price)}}</div>
                      <div class="product-subtitle">IDR</div></td>
                      <td>
                        <form action=" {{route('cart-delete', $item->id)}} " method="POST">
                          @csrf
                          @method('delete')
                          <button type="submit" class="btn btn-remove-cart">Remove</button>

                        </form>
                      </td>
                  </tr>
                  @php
                      $totalPrice += $item->product->price
                  @endphp
                @endforeach
               
              </tbody>
            </table>
          </div>
        </div>
       <form action="" id="locations">
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
              <input type="text" class="form-control" name="address_one" placeholder="Address 1" id="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="Address">Address 2</label>
              <input type="text" class="form-control" name="address_two" placeholder="Address 1" id="">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="Address">Province</label>
              <select name="provinces_id" id="provinces_id" class="form-control" v-if="provinces" v-model="provinces_id" >
                <option v-for="province in provinces" :value="province.id">  @{{ province.name }} </option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="city">City</label>
              <select name="regencies_id" id="regencies_id" class="form-control" v-if="regencies" v-model="regencies_id" >
                <option v-for="regency in regencies" :value="regency.id">  @{{ regency.name }} </option>
              </select>
            </div>
          </div>
        
          <div class="col-md-4">
            <div class="form-group">
              <label for="zip_code">Postal Code</label>
              <input type="text" class="form-control" name="zip_code" placeholder="PostalCode" id="zip_code">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="Address">Country</label>
              <input type="text" class="form-control" name="country" placeholder="Indonesia" id="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-g  roup">
              <label for="phone_number">Mobile</label>
              <input type="text" class="form-control" name="phone_number" placeholder="no Hp" id="phone_number">
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
            <div class="product-title text-success">Rp. {{ number_format($totalPrice ?? 0 ) }} </div>
            <div class="product-subtitle">Total</div>
          </div>
          <div class="col-7 col-md-2">
            <a href="./success.html" class="btn btn-success btn-block px-4 mt-4" > Checkout</a>
          </div>
        </div>
       </form>
      </div>
    </section>
  </div>
@endsection

@push('addon-script')
<script src="{{asset('template')}}/vendor/vue/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    var locations = new Vue({
      el: "#locations",
      mounted(){
        AOS.init();
        this.getProvincesData();
      },
      data:{
        provinces:null,
        regencies:null,
        regencies_id:null,
        provinces_id:null,
       
      },
      methods:{
          getProvincesData(){
            var self = this;
            axios.get( '{{route('api-provinces')}}')
            .then(function(response){
              self.provinces = response.data;
            })
          },
          getRegenciesData(){
            var self = this;
            axios.get( '{{url('api/regencies')}}/' + self.provinces_id )
            .then(function(response){
              self.regencies = response.data;
            })
          },
      },
     watch:{
       provinces_id:function(val, oldVal){
         this.regencies_id = null;
         this.getRegenciesData();
       }
     }  

    });
  </script>
@endpush