@extends('layouts.auth')

@section('content')
<div class="page-content page-auth" id="register">
    <div class="section-store-auth" data-aos="fade-up">
      <div class="container">
        <div class="row align-items-center justify-content-center row-login">
        
          <div class="col-lg-4">
            <h2>Memulai Jualan</h2>
            <form action="" class="mt-3">
              <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="name" id="email" class="form-control is-valid" v-model="name" autofocus>
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" id="email" class="form-control is-invalid" v-model="email" @change="checkEmail()" :class="{'is-invalid' : this.email_unavailable}" autocomplete="email"> 
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" id="email" class="form-control">
              </div>
              <div class="form-group">
                <label>Store</label>
                <p class="text-muted">Apakah Anda Membuka Toko?</p>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" name="" id="openStoreTrue" class="custom-control-input" name="is_store_open"
                  v-model="is_store_open"
                  :value="true"/>
                  <label for="openStoreTrue" class="custom-control-label">Iya, Boleh</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" name="" id="openStoreFalse" class="custom-control-input" name="is_store_open"
                  v-model="is_store_open"
                  :value="false"/>
                  <label for="openStoreFalse" class="custom-control-label">Enggak, Makasih</label>
                </div>
              </div>
              <div class="form-group" v-if="is_store_open">
                <label>Nama Toko</label>
                <input type="text" name="name_store" class="form-control">
              </div>
              <div class="form-group" v-if="is_store_open">
                <label for="category">Category</label>
                <select name="category" class="form-control">
                  <option value="" disabled>Select Category</option>
                </select>
              </div>
              <button type="submit" class="btn btn-success btn-block mt-4" :disabled="this.email_unavailable" >Sign Up Now</button>
              <a href="./register.html" class="btn btn-signup btn-block mt-4">Back To Sign in </a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top" data-aos="fade-down">
    <div class="container">
      <a href="#" class="navbar-brand">
        <img src="./images/pm2.png" height="50px" alt="logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon">

        </span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a href="{{route('/')}}" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="{{route('categories')}}categories.html" class="nav-link">Categories</a>
          </li>
          <li class="nav-item">
            <a href="/rewards.html" class="nav-link">Rewards</a>
          </li>
          <li class="nav-item">
            <a href="/" class="nav-link">Sign Up</a>
          </li>
          <li class="nav-item">
            <a href="/login.html" class="btn btn-primary nav-link px-4 text-white ">Sign In</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
@endsection
@push('addon-script')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://unpkg.com/vue-toasted"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>


<script>

    Vue.use(Toasted);
    var register = new Vue({
      el:'#register',
      mounted(){
      AOS.init();
       
      },
      methods:{
        checkEmail:function(){
          var self = this;
          axios.get('{{ route('api-register-check')}} ',{
            params:{
              email:this.email
            }
          })
          .then(function (response) {
            // handle success

            if(response.data == 'Available'){
              self.$toasted.error(
                "Email Dapat Digunakan",
                {
                  position:"top-center",
                  className:"rounded",
                  duration:1000,
                }
              );
              self.email_unavailable=false;
            }else{
              self.$toasted.error(
              "Maaf, Email Sudah Terdaftar",
              {
                position:"top-center",
                className:"rounded",
                duration:1000,
              }
            );
            self.email_unavailable=true;

            }

            console.log(response);
  })
        }
      },
      data(){
        return {
          {
        name:"Prabbs",
        email:"prabs@gmail.com",
        password:"",
        is_store_open:true,
        store_name:"",
        email_unavailable:false
      }
        }
      }
    });

  </script>
@endpush