@extends('kullanici.template')

@section('title','Benzer Ürünler')

@section('content')


    <main class="ps-main">
      <div class="ps-content pt-80 pb-80">
        <div class="ps-container">
          <div class="ps-cart-listing ps-table--compare">
            <table class="table ps-cart__table">
              <tbody>
                <tr>
                  <td>Product</td>
                  <td><a class="ps-product__preview text-uppercase" href="#"><img class="mr-15" src="{{asset('images/product/cart-preview/3.jpg')}}" alt=""> Air jordan One mid</a></td>
                  <td><a class="ps-product__preview text-uppercase" href="#"><img class="mr-15" src="{{asset('images/product/cart-preview/3.jpg')}}" alt=""> Air jordan One mid</a></td>
                </tr>
                <tr>
                  <td>Pricing</td>
                  <td><span class="price">$450</span></td>
                  <td><span class="price">$450</span></td>
                </tr>
                <tr>
                  <td>Rating</td>
                  <td>
                    <select class="ps-rating ps-shoe__rating">
                      <option value="1">1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                      <option value="1">4</option>
                      <option value="2">5</option>
                    </select>
                  </td>
                  <td>
                    <select class="ps-rating ps-shoe__rating">
                      <option value="1">1</option>
                      <option value="1">2</option>
                      <option value="1">3</option>
                      <option value="1">4</option>
                      <option value="2">5</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>Available</td>
                  <td><span class="status in-stock">In stock</span></td>
                  <td><span class="status">Out of stock</span></td>
                </tr>
                <tr>
                  <td>Size</td>
                  <td>9, 9.5, 10, 10.5, 11, 11</td>
                  <td>9, 9.5, 10, 10.5, 12</td>
                </tr>
                <tr>
                  <td>Color</td>
                  <td>Red</td>
                  <td>Yellow</td>
                </tr>
                <tr>
                  <td>Order</td>
                  <td><a class="ps-btn" href="#">Add to cart<i class="ps-icon-next"></i></a><a class="ps-product-favorite ml-10" href="whishlist.html"><i class="ps-icon-heart"></i></a></td>
                  <td><a class="ps-btn" href="#">Add to cart<i class="ps-icon-next"></i></a><a class="ps-product-favorite ml-10" href="whishlist.html"><i class="ps-icon-heart"></i></a></td>
                </tr>
              </tbody>
            </table>
          </div>
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
@endsection