@extends('layouts.app')

@section('content')
<div class="page-content page-home">
    
    <section class="store-trend-categories">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>All Categories</h5>
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
            <h5>All Products</h5>
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
                Rp.{{$pd->price}}

              </div>
            </a>
          </div>
        @empty
        <div class="col-md-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">Data Not Found</div>
            
        @endforelse
          
        </div>
        <div class="row">
          <div class="col-12 mt-4">
            {{$product->links()}}
          </div>
        </div>
      </div>
    </section>
  </div>

@endsection