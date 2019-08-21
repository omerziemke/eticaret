@extends('kullanici.template')

@section('title','Arama')


@section('content')
   

    <div class="container">
       	
          <ol class="breadcrumb">
          	<li><a href="{{route('kullanici.anasayfa')}}">Anasayfa</a></li>
          	<li class="active">Arama Sonucu</li>
          </ol>

          <div class="products bg-content">
          	
          	<div class="row">
          		@if(count($urunler)==0)
                  <div class="col-md-12 text-center">
                  	 ürün bulunamadı!!!
                  </div>
              @dd($urunler);
          		@endif
          		@foreach($urunler as $urun)
          		<div class="col-md-3 product">
          			<a href="{{route('kullanici.urundetay',$urun->id)}}"><img src="http://via.placeholder.com/400x400?text=UrunResmi" alt="{{$urun->urun_adi}}"></a>
          			<p><a href="{{route('kullanici.urundetay',$urun->id)}}"></a></p>
          			<p class="price">{{$urun->price}}  ₺</p>
          		</div>
                  @dd($urun)

          		@endforeach
          	</div>
              {{$urunler->appends(['aranan'=> old('aranan')])->links()}}
          </div>
       </div>
   

@endsection