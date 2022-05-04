@extends('layouts.app')
@push('addon-style')
<link href="{{asset('template_admin')}}/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="{{asset('template_admin')}}/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />

@endpush
@section('content')

<div class="page-content page-auth" id="register">
    <div class="section-store-auth" data-aos="fade-up">
      <div class="container">
        <div class="row align-items-center justify-content-center row-login">
        
          <div class="col-lg-4">
            <h2>Memulai Jualan</h2>
            <form method="POST" action="{{ route('register') }}" class="mt-3">
              @csrf
              <div class="form-group">
                <label>Full Name</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" v-model="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group">
                <label>Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }} " v-model="email" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group">
                <label>Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group">
                <label>Confirm Password</label>
                <input id="password-confirm" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">

                @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
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
                <input type="text" name="store_name" class="form-control">
              </div>
            
              <div class="form-group" v-if="is_store_open">
                <label for="single">Category</label>
                <select  id="single" name="categories_id" class="form-control  @error('name') is-invalid @enderror">
                  <option disabled>Select Category</option>
                  @foreach ($categories as $ct)
                  <option value=" {{$ct->id}} "> {{$ct->name}} </option>
                      
                  @endforeach
                </select>
              </div>
              @error('categories_id')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
              <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="form-control">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
              <a href="./register.html" class="btn btn-signup btn-block mt-4">Back To Sign in </a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>



<div class="container" style="display: none">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('addon-script')
<script src="{{asset('template_admin')}}/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
<script src="{{asset('template_admin')}}/assets/pages/scripts/components-select2.min.js" type="text/javascript"></script>
<script src="{{asset('template')}}/vendor/vue/vue.js"></script>
<script src="https://unpkg.com/vue-toasted"></script>

<script>

    Vue.use(Toasted);
    var register = new Vue({
      el:'#register',
      mounted(){
      AOS.init();
       this.$toasted.error(
         "Maaf, Email Sudah Terdaftar",
         {
           position:"top-center",
           className:"rounded",
           duration:1000,
         }
       );
      },
      data:{
        name:"Prabbs",
        email:"prabs@gmail.com",
        password:"",
        is_store_open:true,
        store_name:""
      }
    });

  </script>
@endpush