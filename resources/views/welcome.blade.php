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
                  <div class="col-lg-12">
                     <div class="iq-card-transparent iq-card-block iq-card-stretch iq-card-height rounded">
                        <div class="newrealease-contens">
                           <ul id="newrealease-slider" class="list-inline p-0 m-0 d-flex align-items-center">
                              <li class="item">
                                 <a href="javascript:void(0);">
                                    <img src="{{asset('assets/images/new_realeases/01.jpg')}}" class="img-fluid w-100 rounded" alt="">
                                 </a>
                              </li>
                              <li class="item">
                                 <a href="javascript:void(0);">
                                    <img src="{{asset('assets/images/new_realeases/02.jpg')}}" class="img-fluid w-100 rounded" alt="">
                                 </a>
                              </li>
                              <li class="item">
                                 <a href="javascript:void(0);">
                                    <img src="{{asset('assets/images/new_realeases/03.jpg')}}" class="img-fluid w-100 rounded" alt="">
                                 </a>
                              </li>
                              <li class="item">
                                 <a href="javascript:void(0);">
                                    <img src="{{asset('assets/images/new_realeases/04.jpg')}}" class="img-fluid w-100 rounded" alt="">
                                 </a>
                              </li>
                              <li class="item">
                                 <a href="javascript:void(0);">
                                    <img src="{{asset('assets/images/new_realeases/05.jpg')}}" class="img-fluid w-100 rounded" alt="">
                                 </a>
                              </li>
                              <li class="item">
                                 <a href="javascript:void(0);">
                                    <img src="{{asset('assets/images/new_realeases/06.jpg')}}" class="img-fluid w-100 rounded" alt="">
                                 </a>
                              </li>
                              <li class="item">
                                 <a href="javascript:void(0);">
                                    <img src="{{asset('assets/images/new_realeases/07.jpg')}}" class="img-fluid w-100 rounded" alt="">
                                 </a>
                              </li>
                              <li class="item">
                                 <a href="javascript:void(0);">
                                    <img src="{{asset('assets/images/new_realeases/08.jpg')}}" class="img-fluid w-100 rounded" alt="">
                                 </a>
                              </li>
                              <li class="item">
                                 <a href="javascript:void(0);">
                                    <img src="{{asset('assets/images/new_realeases/09.jpg')}}" class="img-fluid w-100 rounded" alt="">
                                 </a>                              
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                           <div class="iq-header-title">
                              <h4 class="card-title mb-0">Browse Books</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">                              
                              <a href="{{url('/book_category')}}" class="btn btn-sm btn-primary view-more">View More</a>
                           </div>
                        </div> 
                        <div class="iq-card-body">  
                           <div class="row">

                           @if(!empty($products))
                           @foreach($products as $product)
                              <div class="col-sm-6 col-md-4 col-lg-3">
                                 <div class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent">
                                    <div class="iq-card-body p-0">
                                       <div class="d-flex align-items-center">
                                          <div class="col-6 p-0 position-relative image-overlap-shadow">
                                             <a href="javascript:void();"><img class="img-fluid rounded w-100" src="{{url('/images/' .$product->image)}}" alt=""></a>
                                             <div class="view-book">
                                                <a href="{{route('book.detail',$product->id)}}" class="btn btn-sm btn-white">View Book</a>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="mb-2">
                                                <h6 class="mb-1">{{$product->title}}</h6>
                                                <p class="font-size-13 line-height mb-1">{{$product->category_name}}</p>
                                                <div class="d-block line-height">
                                                   <span class="font-size-11 text-warning">
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                      <i class="fa fa-star"></i>
                                                   </span>                                             
                                                </div>
                                             </div>
                                             <div class="price d-flex align-items-center">
                                                <!-- <span class="pr-1 old-price">$100</span> -->
                                                <h6><b>${{$product->price}}</b></h6>
                                             </div>
                                             <div class="iq-product-action">
                                                <a href="javascript:void();"><i class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                <a href="javascript:void();" class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                             </div>                                      
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                             @endforeach
                             @endif
                           </div>
                        </div>
                     </div>
                  </div>
                  @if(!empty($featured))
                  <div class="col-lg-6">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between mb-0">
                           <div class="iq-header-title">
                              <h4 class="card-title">Featured Books</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <div class="dropdown">
                                 <span class="dropdown-toggle p-0 text-body" id="dropdownMenuButton2" data-toggle="dropdown">
                                 This Week<i class="ri-arrow-down-s-fill"></i>
                                 </span>
                                 <div class="dropdown-menu dropdown-menu-right shadow-none" aria-labelledby="dropdownMenuButton2">
                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="row align-items-center">
                              <div class="col-sm-5 pr-0">
                                 <a href="javascript:void();"><img class="img-fluid rounded w-100" src="{{url('/images/' .$featured->image)}}" alt=""></a>
                              </div>
                              <div class="col-sm-7 mt-3 mt-sm-0">
                                 <h4 class="mb-2">{{$featured->title}}</h4>
                                 <p class="mb-2">Author:{{$featured->users_name}}</p>
                                 <div class="mb-2 d-block">
                                    <span class="font-size-12 text-warning">
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                    </span>
                                 </div>
                                 <span class="text-dark mb-3 d-block">{!!$featured->description!!}</span>
                                 <button type="submit" class="btn btn-primary learn-more">Learn More</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                @endif
                  <div class="col-lg-6">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between mb-0">
                           <div class="iq-header-title">
                              <h4 class="card-title">Featured Writer</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <div class="dropdown">
                                 <span class="dropdown-toggle p-0 text-body" id="dropdownMenuButton3" data-toggle="dropdown">
                                 This Week<i class="ri-arrow-down-s-fill"></i>
                                 </span>
                                 <div class="dropdown-menu dropdown-menu-right shadow-none" aria-labelledby="dropdownMenuButton3">
                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <ul class="list-inline row mb-0 align-items-center iq-scrollable-block">
                              <li class="col-sm-6 d-flex mb-3 align-items-center">
                                 <div class="icon iq-icon-box mr-3">
                                    <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle" src="{{asset('assets/images/user/01.jpg')}}" alt=""></a>
                                 </div>
                                 <div class="mt-1">
                                    <h6>Brandon Guidelines</h6>
                                    <p class="mb-0 text-primary">Publish Books: <span class="text-body">2831</span></p>
                                 </div>
                              </li>
                              <li class="col-sm-6 d-flex mb-3 align-items-center">
                                 <div class="icon iq-icon-box mr-3">
                                    <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle" src="{{asset('assets/images/user/02.jpg')}}" alt=""></a>
                                 </div>
                                 <div class="mt-1">
                                    <h6>Hugh Millie-Yate</h6>
                                    <p class="mb-0 text-primary">Publish Books: <span class="text-body">432</span></p>
                                 </div>
                              </li>
                              <li class="col-sm-6 d-flex mb-3 align-items-center">
                                 <div class="icon iq-icon-box mr-3">
                                    <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle" src="{{asset('assets/images/user/03.jpg')}}" alt=""></a>
                                 </div>
                                 <div class="mt-1">
                                    <h6>Nathaneal Down</h6>
                                    <p class="mb-0 text-primary">Publish Books: <span class="text-body">5471</span></p>
                                 </div>
                              </li>
                              <li class="col-sm-6 d-flex mb-3 align-items-center">
                                 <div class="icon iq-icon-box mr-3">
                                    <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle" src="{{asset('assets/images/user/04.jpg')}}" alt=""></a>
                                 </div>
                                 <div class="mt-1">
                                    <h6>Thomas R. Toe</h6>
                                    <p class="mb-0 text-primary">Publish Books: <span class="text-body">8764</span></p>
                                 </div>
                              </li>
                              <li class="col-sm-6 d-flex mb-3 align-items-center">
                                 <div class="icon iq-icon-box mr-3">
                                    <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle" src="{{asset('assets/images/user/05.jpg')}}" alt=""></a>
                                 </div>
                                 <div class="mt-1">
                                    <h6>Druid Wensleydale</h6>
                                    <p class="mb-0 text-primary">Publish Books: <span class="text-body">8987</span></p>
                                 </div>
                              </li>
                              <li class="col-sm-6 d-flex mb-3 align-items-center">
                                 <div class="icon iq-icon-box mr-3">
                                    <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle" src="{{asset('assets/images/user/06.jpg')}}" alt=""></a>
                                 </div>
                                 <div class="mt-1">
                                    <h6>Natalya Undgrowth</h6>
                                    <p class="mb-0 text-primary">Publish Books: <span class="text-body">2831</span></p>
                                 </div>
                              </li>
                              <li class="col-sm-6 d-flex mb-3 align-items-center">
                                 <div class="icon iq-icon-box mr-3">
                                    <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle" src="{{asset('assets/images/user/07.jpg')}}" alt=""></a>
                                 </div>
                                 <div class="mt-1">
                                    <h6>Desmond Eagle</h6>
                                    <p class="mb-0 text-primary">Publish Books: <span class="text-body">4324</span></p>
                                 </div>
                              </li>
                              <li class="col-sm-6 d-flex mb-3 align-items-center">
                                 <div class="icon iq-icon-box mr-3">
                                    <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle" src="{{asset('assets/images/user/08.jpg')}}" alt=""></a>
                                 </div>
                                 <div class="mt-1">
                                    <h6>Lurch Schpellchek</h6>
                                    <p class="mb-0 text-primary">Publish Books: <span class="text-body">012</span></p>
                                 </div>
                              </li>
                              <li class="col-sm-6 d-flex mb-3 align-items-center">
                                 <div class="icon iq-icon-box mr-3">
                                    <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle" src="{{asset('assets/images/user/09.jpg')}}" alt=""></a>
                                 </div>
                                 <div class="mt-1">
                                    <h6>Natalya Undgrowth</h6>
                                    <p class="mb-0 text-primary">Publish Books: <span class="text-body">2831</span></p>
                                 </div>
                              </li>
                              <li class="col-sm-6 d-flex mb-3 align-items-center">
                                 <div class="icon iq-icon-box mr-3">
                                    <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle" src="{{asset('assets/images/user/10.jpg')}}" alt=""></a>
                                 </div>
                                 <div class="mt-1">
                                    <h6>Natalya Undgrowth</h6>
                                    <p class="mb-0 text-primary">Publish Books: <span class="text-body">2831</span></p>
                                 </div>
                              </li>
                              <li class="col-sm-6 d-flex mb-3 align-items-center">
                                 <div class="icon iq-icon-box mr-3">
                                    <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle" src="{{asset('assets/images/user/11.jpg')}}" alt=""></a>
                                 </div>
                                 <div class="mt-1">
                                    <h6>Natalya Undgrowth</h6>
                                    <p class="mb-0 text-primary">Publish Books: <span class="text-body">2831</span></p>
                                 </div>
                              </li>
                              <li class="col-sm-6 d-flex mb-3 align-items-center">
                                 <div class="icon iq-icon-box mr-3">
                                    <a href="javascript:void();"><img class="img-fluid avatar-60 rounded-circle" src="{{asset('assets/images/user/01.jpg')}}" alt=""></a>
                                 </div>
                                 <div class="mt-1">
                                    <h6>Natalya Undgrowth</h6>
                                    <p class="mb-0 text-primary">Publish Books: <span class="text-body">2831</span></p>
                                 </div>
                              </li>
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
                                          <img src="{{url('/images/' .$favouritelists->image)}}" class="img-fluid rounded w-100" alt="">
                                       </a>                                
                                    </div>
                                    <div class="col-7">
                                       <h5 class="mb-2">{{$favouritelists->title}}</h5>
                                       <p class="mb-2">Author:{{$favouritelists->users_name}}</p>                                          
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