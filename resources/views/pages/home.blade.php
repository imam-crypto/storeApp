@extends('layouts.app')

@section('content')
<div class="page-content page-home">
    <section class="store-carousel">
      <div class="container">
        <div class="row">
          <div class="col-lg-12" data-aos="zoom-in">
         
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" style="margin-top: 4%;">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{asset('template')}}/produk/helm3.jpg" height="500px" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Welcome To Gelora Market</h5>
                    <p>Kami Hadir Untuk Anda.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{asset('template')}}/images/banner_2.jpg" height="500px" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Berbagai Macam Produk Dengan High Quality </h5>
                    <p>Menjamin Kualitas Produk .</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{asset('template')}}/images/banner_3.jpg" height="500px" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Diskon Dan Bonus Melimpah</h5>
                    <p>Dapatkan Diskon Dan Bonus Di Setiap Pembelian Produk "SK BERLAKU :)".</p>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>

          </div>
        </div>
      </div>
    </section>


    <section class="store-trend-categories">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>Trend Categories</h5>
          </div>
        </div>
        <div class="row">
          @php
              $increment=0
          @endphp
         @forelse ($category as $item)
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay=" {{$increment += 100}} ">
            <a href=" {{route('categories-detail',$item->slug)}} " class="component-categories d-block">
              <div class="categories-image">
                <img src=" {{Storage::url($item->photo)}} " alt="cate" class="w-100">
                <p class="categories-text">{{$item->name}}</p>
              </div>
            </a>
          </div>
         @empty
             <div class="col-md-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">Data Not Found</div>
         @endforelse
     
        </div>
      </div>
    </section>

    <section class="store-new-products">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>New Products</h5>
          </div>
        </div>
        <div class="row">
          @php
            $incrementProducts=0
          @endphp
        @forelse ($product as $pd)
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="{{$incrementProducts += 100}}">
            <a href=" {{route('details',$pd->slug)}} " class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" 
                  style=" 
                  @if($pd->galleries->count())
                  background-image: url('{{Storage::url($pd->galleries->first()->photos)}}');
                  @else
                  background-color:#eee
                  @endif
                  
                  ">
                </div>
              </div>
              <div class="products-text">
               {{$pd->name}}
              </div>
              <div class="products-price">
                Rp.               {{$pd->price}}

              </div>
            </a>
          </div>
        @empty
        <div class="col-md-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">Data Not Found</div>
            
        @endforelse
          
      </div>
    </section>
  </div>
@endsection