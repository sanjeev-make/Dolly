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
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between align-items-center">
                           <h4 class="card-title mb-0">Books Description</h4>
                        </div>
                        <div class="iq-card-body pb-0">
                           <div class="description-contens align-items-top row">
                              <div class="col-md-6">
                                 <div class="iq-card-transparent iq-card-block iq-card-stretch iq-card-height">
                                    <div class="iq-card-body p-0">
                                       <div class="row align-items-center">
                                          <div class="col-3">
                                             <ul id="description-slider-nav" class="list-inline p-0 m-0  d-flex align-items-center">
                                               
                                               
                                                
                                               
                                               @if(!empty($image))
                                               @foreach($image as $images)
                                                <li>
                                                   <a href="javascript:void(0);">
                                                   <img src="{{url('/images/' .$images->image)}}" class="img-fluid rounded w-100" alt="">
                                                   </a>
                                                </li>
                                    @endforeach
                                    @endif
                                             </ul>
                                          </div>
                                          <div class="col-9">
                                             <ul id="description-slider" class="list-inline p-0 m-0  d-flex align-items-center">
                                             @if(!empty($image))
                                               @foreach($image as $images)
                                                <li>
                                                   <a href="javascript:void(0);">
                                                   <img src="{{url('/images/' .$images->image)}}" class="img-fluid w-100 rounded" alt="">
                                                   </a>
                                                </li>
                                                @endforeach
                                             @endif
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="iq-card-transparent iq-card-block iq-card-stretch iq-card-height">
                                    <div class="iq-card-body p-0">
                                       <h3 class="mb-3">{{$productdetail->title}}</h3>
                                       <div class="price d-flex align-items-center font-weight-500 mb-2">
                                          <!-- <span class="font-size-20 pr-2 old-price">$99</span> -->
                                          <span class="font-size-24 text-dark">${{$productdetail->price}}</span>
                                       </div>
                                       <div class="mb-3 d-block">
                                          <span class="font-size-20 text-warning">
                                          <i class="fa fa-star mr-1"></i>
                                          <i class="fa fa-star mr-1"></i>
                                          <i class="fa fa-star mr-1"></i>
                                          <i class="fa fa-star mr-1"></i>
                                          <i class="fa fa-star"></i>
                                          </span>
                                       </div>
                                       <span class="text-dark mb-4 pb-4 iq-border-bottom d-block">{!!$productdetail->description!!}</span>
                                       <div class="text-primary mb-4">Author: <span class="text-body">Jhone Steben</span></div>
                                       <div class="mb-4 d-flex align-items-center">                                       
                                          <a href="#" class="btn btn-primary view-more mr-2">Add To Cart</a>
                                          <a href="book-pdf.html" class="btn btn-primary view-more mr-2">Read Sample</a>
                                       </div>
                                       <div class="mb-3">
                                          <a href="#" class="text-body text-center"><span class="avatar-30 rounded-circle bg-primary d-inline-block mr-2"><i class="ri-heart-fill"></i></span><span>Add to Wishlist</span></a>
                                       </div>
                                       <div class="iq-social d-flex align-items-center">
                                          <h5 class="mr-2">Share:</h5>
                                          <ul class="list-inline d-flex p-0 mb-0 align-items-center">
                                             <li>
                                                <a href="#" class="avatar-40 rounded-circle bg-primary mr-2 facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                             </li>
                                             <li>
                                                <a href="#" class="avatar-40 rounded-circle bg-primary mr-2 twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                             </li>
                                             <li>
                                                <a href="#" class="avatar-40 rounded-circle bg-primary mr-2 youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                                             </li>
                                             <li >
                                                <a href="#" class="avatar-40 rounded-circle bg-primary pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                           <div class="iq-header-title">
                              <h4 class="card-title mb-0">Similar Books</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <a href="{{url('/book_category')}}" class="btn btn-sm btn-primary view-more">View More</a>
                           </div>
                        </div>
                        <div class="iq-card-body single-similar-contens">
                           <ul id="single-similar-slider" class="list-inline p-0 mb-0 row">
                              @if($similarbook)
                              @foreach($similarbook as $similarbooks)
                              <li class="col-md-3">
                                 <div class="row align-items-center">
                                    <div class="col-5">
                                       <div class="position-relative image-overlap-shadow">
                                          <a href="javascript:void();"><img class="img-fluid rounded w-100" src="{{asset('/images/'.$similarbooks->image)}}" alt=""></a>
                                          <div class="view-book">
                                             <a href="{{route('book.detail',$similarbooks->id)}}" class="btn btn-sm btn-white">View Book</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-7 pl-0">
                                       <h6 class="mb-2">{{$similarbooks->title}}</h6>
                                       <p class="text-body">Author :{{$similarbooks->users_name}}</p>
                                       <a href="#" class="text-dark" tabindex="-1">Read Now<i class="ri-arrow-right-s-line"></i></a>
                                    </div>
                                 </div>
                              </li>
                             @endforeach
                             @endif
                                 
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between align-items-center position-relative mb-0 trendy-detail">
                           <div class="iq-header-title">
                              <h4 class="card-title mb-0">Trendy Books</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <a href="{{url('/book_category')}}" class="btn btn-sm btn-primary view-more">View More</a>
                           </div>
                        </div>
                        <div class="iq-card-body trendy-contens">
                           <ul id="trendy-slider" class="list-inline p-0 mb-0 row">
                              @if(!empty($trandingbook))
                              @foreach($trandingbook as $trandingbooks)
                              <li class="col-md-3">
                                 <div class="d-flex align-items-center">
                                    <div class="col-5 p-0 position-relative image-overlap-shadow">
                                       <a href="javascript:void();"><img class="img-fluid rounded w-100" src="{{asset('/images/'.$trandingbooks->image)}}" alt=""></a>
                                       <div class="view-book">
                                          <a href="{{route('book.detail',$trandingbooks->id)}}" class="btn btn-sm btn-white">View Book</a>
                                       </div>
                                    </div>
                                    <div class="col-7">
                                       <div class="mb-2">
                                          <h6 class="mb-1">{{$trandingbooks->title}}</h6>
                                          <p class="font-size-13 line-height mb-1">{{$trandingbooks->category_name}}</p>
                                          <div class="d-block">
                                             <span class="font-size-13 text-warning">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             </span>
                                          </div>
                                       </div>
                                       <div class="price d-flex align-items-center">
                                          <!-- <span class="pr-1 old-price">${{$trandingbooks->price}}</span> -->
                                          <h6><b>${{$trandingbooks->price}}</b></h6>
                                       </div>
                                       <div class="iq-product-action">
                                          <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                          <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              @endforeach
                              @endif
                              
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                           <div class="iq-header-title">
                              <h4 class="card-title mb-0">Favorite Reads</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <a href="{{url('/book_category')}}" class="btn btn-sm btn-primary view-more">View More</a>
                           </div>
                        </div>                         
                        <div class="iq-card-body favorites-contens">
                           <ul id="favorites-slider" class="list-inline p-0 mb-0 row">
                              @if(!empty($favouritelist))
                              @foreach($favouritelist as $favouritelists)
                              <li class="col-md-4">
                                 <div class="d-flex align-items-center">
                                    <div class="col-5 p-0 position-relative">
                                       <a href="javascript:void();">
                                          <img src="{{asset('/images/'.$favouritelists->image)}}" class="img-fluid rounded w-100" alt="">
                                       </a>                                
                                    </div>
                                    <div class="col-7">
                                       <h5 class="mb-2">{{$favouritelists->title}}</h5>
                                       <p class="mb-2">Author :{{$favouritelists->users_name}}</p>                                          
                                       <div class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                          <span>Reading</span>
                                          <span class="mr-4">78%</span>
                                       </div>
                                       <div class="iq-progress-bar-linear d-inline-block w-100">
                                          <div class="iq-progress-bar iq-bg-primary">
                                             <span class="bg-primary" data-percent="78"></span>
                                          </div>
                                       </div>
                                       <a href="#" class="text-dark">Read Now<i class="ri-arrow-right-s-line"></i></a>
                                    </div>
                                 </div>
                              </li>
                            @endforeach
                            @endif
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