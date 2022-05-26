@extends('layouts.app')

@section('content')
<div class="page-content page-details">
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
                  Products Details
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>

    <section class="store-gallery" id="gallery">
      <div class="container">
        <div class="row">
          <div class="col-lg-8" data-aos="zoom-in">
            <transition name="slide-fade" mode="out-in">
              <img :src="photos[activePhoto].url" :key="photos[activePhoto].id" class="w-100 main-image" alt="GalleryProduck">
            </transition>
          </div>
          <div class="col-lg-2">
              <div class="row">
                <div class="col-3 col-lg-12 mt-2 mt-lg-0" v-for="(photo,index) in photos" :key="photo.id" data-aos="zoom-in" data-aos-delay="100">
                  <a href="#" @click="changeActive(index)">
                    <img :src="photo.url" class="w-100 thumbnail-image" :class="{ active:index == activePhoto}" alt="">
                  </a>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>

    <div class="store-details-container" data-aos="fade-up">
      <section class="store-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
                <h1> {{$product->name}} </h1>
                <div class="owner">
                  {{$product->user->name}}
                </div>
                <div class="price">Rp.{{$product->price}}</div>
            </div>
            <div class="col-lg-2" data-aos="zoom-in">
             @auth
             <form action=" {{route('details-add', $product->id)}} " method="POST" enctype="multipart/form-data">
               @csrf
             <button type="submit" class="btn btn-success px-4 text-white btn-block mb-2">Add To Cart</button>

             </form>

             @else
             <a href=" {{route('login')}} " class="btn btn-success px-4 text-white btn-block mb-2">Sign In To Add </a>

             @endauth

            </div>
            </div>
        </div>


      </section>

      <section class="store-description">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-8">
              <p>
            {!! $product->description !!}
              </p>
             
            </div>
          </div>
        </div>
      </section>

      <section class="store-review">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mt-3 mb-2">
              <h5>Customer Review (3)</h5>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-lg-8">
              <div class="list-unstyled">
                <li class="media">
                  <img src="./produk/helm.jpeg" width="80px" alt="k" class="mr-3 rounded-circle">
                <div class="media-body">
                  <h5 class="mt-2 mb-1">Ozos</h5>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, cupiditate! Voluptates corporis optio ipsum vel error nam, nesciunt molestiae deleniti quidem vero. Perspiciatis impedit odio quo laborum facilis omnis illo.
                </div>
                </li>
                <li class="media">
                  <img src="./produk/helm.jpeg" width="80px" alt="k" class="mr-3 rounded-circle">
                <div class="media-body">
                  <h5 class="mt-2 mb-1">Prabs</h5>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, cupiditate! Voluptates corporis optio ipsum vel error nam, nesciunt molestiae deleniti quidem vero. Perspiciatis impedit odio quo laborum facilis omnis illo.
                </div>
                </li>
                <li class="media">
                  <img src="./produk/helm.jpeg" width="80px" alt="k" class="mr-3 rounded-circle">
                <div class="media-body">
                  <h5 class="mt-2 mb-1">Sokes</h5>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, cupiditate! Voluptates corporis optio ipsum vel error nam, nesciunt molestiae deleniti quidem vero. Perspiciatis impedit odio quo laborum facilis omnis illo.
                </div>
                </li>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
@endsection

@push('addon-script')
<script src="{{asset('template')}}/vendor/vue/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    var gallery = new Vue({
      el: "#gallery",
      mounted(){
        AOS.init();

      },
      data:{
        activePhoto:0,
        photos:
        [
          @foreach ($product->galleries as $gallery)
          {
            id:{{ $gallery->id }},
            url:"{{url('storage/'.  $gallery->photos)}}"
          },

          @endforeach
        ],
      },
      methods:{
        changeActive(id){
          this.activePhoto=id;
        }
      }
    });
  </script>
@endpush