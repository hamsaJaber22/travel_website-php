@extends('user.layout.master')

@section('title')
    series
@endsection

@section('content')

<!-- start series sevction -->
<section id="tvseries" class="movies row position-relative">
       <input type="checkbox" name="display" id="checkFilter">
       <div class="movies__categories col-lg-3 container  ">
            <div class="movies__categories_type mt-5">
                <div class="movies__categories__byYear ">
                    <h2>Top 5 List</h2>
                    <hr>
                    <div class="Top5List__item">
                        <div class="Top5List__item__left">
                            1
                        </div>
                        <div class="Top5List__item__right text-white">
                             <small>2021</small>
                             <h3>movie name</h3>
                             <small>movie type</small>
                        </div>
                    </div>
                    <hr>
                    <div class="Top5List__item">
                        <div class="Top5List__item__left">
                              2
                        </div>
                        <div class="Top5List__item__right">
                             <small>2021</small>
                             <h3>movie name</h3>
                             <small>movie type</small>
                        </div>
                    </div>
                </div>
            </div>
       </div>
       <div class="movies__filter col-lg-9 mt-5">
            <h2 class="text-capitalize">series</h2>
            <hr>
            <div class="movies__filter__deitails" id="result">
                 <!-- movie item -->

                      <div class="filterDiv"> </div>

                  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                      <li class="nav-item" role="presentation">
                          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                      </li>

                           <li class="nav-item" role="presentation">
                              <a class="nav-link" id="" data-toggle="tab" href="#" role="tab" aria-controls="" aria-selected="false">comidy</a>
                           </li>
                  </ul>

                  <div class="container">
                        <div class="row">
                              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row">
                                                  <div class="col d-flex justify-content-center">
                                                      <div class="video-content m-2">
                                                           <video width="180" height="200" poster="" >
                                                               <source src="" type="video/mp4">
                                                           </video>
                                                           <div class="video_details d-flex justify-content-between align-items-stretch">
                                                               <div>
                                                                     <h3>
                                                                         <a href="#">jjjjjjj</a>
                                                                     </h3>
                                                                     <h3>kkkkkkkkk</h3>
                                                               </div>
                                                           </div>
                                                      </div>
                                                  </div>
                                          <!-- get video -->

                                     </div>
                              </div>

                                   <div class="tab-pane fade show active" id="" role="tabpanel" aria-labelledby="">
                                   </div>

                        </div>
                  </div>
            </div>
       </div>
</section>
<!-- end series section -->
@endsection
