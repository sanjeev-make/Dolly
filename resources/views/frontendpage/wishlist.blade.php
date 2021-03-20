<!doctype html>
<html lang="en">
@include('frontend.head')
   <body>
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
         @include('frontend.header')

         <!-- TOP Nav Bar END -->
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid checkout-content">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between iq-border-bottom mb-0">
                           <div class="iq-header-title">
                              <h4 class="card-title">Wishlist</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <ul class="list-inline p-0 m-0">
                              <li class="checkout-product">
                                 <div class="row align-items-center">
                                    <div class="col-sm-3 col-lg-2">
                                       <div class="row align-items-center">
                                          <div class="col-sm-3">
                                             <a href="javascript:void();" class="badge badge-danger"><i class="ri-close-fill"></i></a>
                                          </div>
                                          <div class="col-sm-9">
                                             <span class="checkout-product-img">
                                             <a href="javascript:void();"><img class="img-fluid rounded" src="{{asset('assets/images/checkout/01.jpg')}}" alt=""></a>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-sm-3 col-lg-4">
                                       <div class="checkout-product-details">
                                          <h5>The Raze night book</h5>
                                          <p class="text-success">In stock</p>
                                          <div class="price">
                                             <h5>$180.00</h5>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-6">
                                       <div class="row">
                                          <div class="col-sm-8">
                                             <div class="row align-items-center mt-2">
                                                <div class="col-sm-7 col-lg-6">
                                                   <button type="button" class="fa fa-minus qty-btn" id="btn-minus"></button>
                                                   <input type="text" id="quantity" value="0">
                                                   <button type="button" class="fa fa-plus qty-btn" id="btn-plus"></button>
                                                </div>
                                                <div class="col-sm-5 col-lg-6">
                                                   <span class="product-price">$180.00</span>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-sm-4">
                                             <a href="#"><button type="submit" class="btn btn-primary view-more">Add To Cart</button></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="checkout-product">
                                 <div class="row align-items-center">
                                    <div class="col-sm-3 col-lg-2">
                                       <div class="row align-items-center">
                                          <div class="col-sm-3">
                                             <a href="javascript:void();" class="badge badge-danger"><i class="ri-close-fill"></i></a>
                                          </div>
                                          <div class="col-sm-9">
                                             <span class="checkout-product-img">
                                             <a href="javascript:void();"><img class="img-fluid rounded" src="{{asset('assets/images/checkout/02.jpg')}}" alt=""></a>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-sm-3 col-lg-4">
                                       <div class="checkout-product-details">
                                          <h5>Harsh Reality book</h5>
                                          <p class="text-success">In stock</p>
                                          <div class="price">
                                             <h5>$250.00</h5>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-6">
                                       <div class="row">
                                          <div class="col-sm-8">
                                             <div class="row align-items-center mt-2">
                                                <div class="col-sm-7 col-lg-6">
                                                   <button type="button" class="fa fa-minus qty-btn" id="btn-minus"></button>
                                                   <input type="text" id="quantity" value="0">
                                                   <button type="button" class="fa fa-plus qty-btn" id="btn-plus"></button>
                                                </div>
                                                <div class="col-sm-5 col-lg-6">
                                                   <span class="product-price">$250.00</span>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-sm-4">
                                             <a href="#"><button type="submit" class="btn btn-primary view-more">Add To Cart</button></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="checkout-product">
                                 <div class="row align-items-center">
                                    <div class="col-sm-3 col-lg-2">
                                       <div class="row align-items-center">
                                          <div class="col-sm-3">
                                             <a href="javascript:void();" class="badge badge-danger"><i class="ri-close-fill"></i></a>
                                          </div>
                                          <div class="col-sm-9">
                                             <span class="checkout-product-img">
                                             <a href="javascript:void();"><img class="img-fluid rounded" src="{{asset('assets/images/checkout/03.jpg')}}" alt=""></a>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-sm-3 col-lg-4">
                                       <div class="checkout-product-details">
                                          <h5>The House in the Fog</h5>
                                          <p class="text-success">In stock</p>
                                          <div class="price">
                                             <h5>$399.00</h5>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-6">
                                       <div class="row">
                                          <div class="col-sm-8">
                                             <div class="row align-items-center mt-2">
                                                <div class="col-sm-7 col-lg-6">
                                                   <button type="button" class="fa fa-minus qty-btn" id="btn-minus"></button>
                                                   <input type="text" id="quantity" value="0">
                                                   <button type="button" class="fa fa-plus qty-btn" id="btn-plus"></button>
                                                </div>
                                                <div class="col-sm-5 col-lg-6">
                                                   <span class="product-price">$399.00</span>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-sm-4">
                                             <a href="#"><button type="submit" class="btn btn-primary view-more">Add To Cart</button></a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Wrapper END -->
      <!-- Footer -->
      @include('frontend.footer')

      <!-- Footer END -->
      <!-- color-customizer -->
      <div class="iq-colorbox color-fix">
         <div class="buy-button"> <a class="color-full" href="#"><i class="fa fa-spinner fa-spin"></i></a> </div>
         <div id="right-sidebar-scrollbar" class="iq-colorbox-inner">
            <div class="clearfix color-picker">
               <h3 class="iq-font-black">Booksto Awesome Color</h3>
               <p>This color combo available inside whole template. You can change on your wish, Even you can create your own with limitless possibilities! </p>
               <ul class="iq-colorselect clearfix">
                  <li class="color-1 iq-colormark" data-style="color-1"></li>
                  <li class="color-2" data-style="iq-color-2"></li>
                  <li class="color-3" data-style="iq-color-3"></li>
                  <li class="color-4" data-style="iq-color-4"></li>
                  <li class="color-5" data-style="iq-color-5"></li>
                  <li class="color-6" data-style="iq-color-6"></li>
                  <li class="color-7" data-style="iq-color-7"></li>
                  <li class="color-8" data-style="iq-color-8"></li>
                  <li class="color-9" data-style="iq-color-9"></li>
                  <li class="color-10" data-style="iq-color-10"></li>
                  <li class="color-11" data-style="iq-color-11"></li>
                  <li class="color-12" data-style="iq-color-12"></li>
                  <li class="color-13" data-style="iq-color-13"></li>
                  <li class="color-14" data-style="iq-color-14"></li>
                  <li class="color-15" data-style="iq-color-15"></li>
                  <li class="color-16" data-style="iq-color-16"></li>
                  <li class="color-17" data-style="iq-color-17"></li>
                  <li class="color-18" data-style="iq-color-18"></li>
                  <li class="color-19" data-style="iq-color-19"></li>
                  <li class="color-20" data-style="iq-color-20"></li>
               </ul>
               <a target="_blank" class="btn btn-primary d-block mt-3" href="">Purchase Now</a>
            </div>
         </div>
      </div>
      <!-- color-customizer END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      @include('frontend.script')

   </body>
</html>