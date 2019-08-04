@extends('kullanici.template')

@section('title','Sepet')

@section('content')

  <!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->
  
     
 
   
    
    <main class="ps-main">
      <div class="ps-content pt-80 pb-80">
        <div class="ps-container">
          <div class="ps-cart-listing">
            <table class="table ps-cart__table">
              <thead>
                @include('kullanici.partials.alert')

                @if(count(Cart::content())>0)
                <tr>
                  <th>All Products</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Total</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach(Cart::content() as $urun)
                <tr>
                  
                  <td><a class="ps-product__preview" href="{{route('kullanici.urundetay',$urun->id)}}"><img class="mr-15" src="images/product/cart-preview/1.jpg" alt=""> {{$urun->name}}</a> <br>
                      <form action="{{route('sepet.kaldir',$urun->rowId)}}" method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <input type="submit" class="btn btn-danger btn-xs" value="Sepetten Kaldır">
                        </form>
                  </td>
                  <td>${{$urun->price}}</td>
                  <td>
                    <div class="form-group--number">
                      <button class="minus urun-adet-azalt" data-id="{{$urun->rowId}}" data-adet="{{$urun->qty-1}}"><span>-</span></button>
                      <input class="form-control" type="text" value="{{$urun->qty}}">
                      <button class="plus"><span>+</span></button>
                    </div>
                  </td>
                  <td>${{$urun->subtotal}}</td>
                  <td>
                  
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <div class="ps-cart__actions">
              <div class="ps-cart__promotion">
                
                <div class="form-group">
                  <form action="{{route('kullanici.anasayfa')}}" method="get">
                            {{csrf_field()}}
                            <button class="ps-btn ps-btn--gray">Alış Verişe Devam Et</button>
                        </form>
                 
                </div>
              </div>
              <div class="ps-cart__total">
                <h3>Total Price: <span> {{Cart::subtotal()}} $</span></h3>  <h3>KDV: <span> {{Cart::tax()}} $</span></h3> <h3>KDV'li Tutar: <span> {{Cart::total()}} $</span></h3><a class="ps-btn" href="checkout.html">Process to checkout<i class="ps-icon-next"></i></a>
              </div>
            </div>
          </div>
            @else
                <p>Sepetinizde ürün yok!!!</p>

            @endif
        </div>
      </div>
      <div class="ps-subscribe">
        <div class="ps-container">
          <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 ">
                  <h3><i class="fa fa-envelope"></i>Sign up to Newsletter</h3>
                </div>
                <div class="col-lg-5 col-md-7 col-sm-12 col-xs-12 ">
                  <form class="ps-subscribe__form" action="do_action" method="post">
                    <input class="form-control" type="text" placeholder="">
                    <button>Sign up now</button>
                  </form>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 ">
                  <p>...and receive  <span>$20</span>  coupon for first shopping.</p>
                </div>
          </div>
        </div>
      </div>
     
     
    </main>

    <script>
      
    $(function(){
      $('.urun-adet-azalt,.urun-adet-artir').on('click',function(){

       var id=$(this).attr('data-id');
       var adet=$(this).attr('data-adet');
       $.ajax({
        type:'patch', 
        url:'{{url('sepet/güncelle')}}/'+id,
        data:{adet:adet},
        success:function(result){
          window.location.href='/sepet';
        }



       });

      });


    });

    </script>
    @endsection