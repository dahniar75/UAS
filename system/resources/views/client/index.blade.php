@extends('client.base')

@section('content')
<!-- slider -->
      <section class="slider_section">
         <div class="container-fluid">
            <div class="row">
               <div id="main_slider" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
                  <div class="carousel-inner">
                     <div class="carousel-item slider_inner slider1 active">
                        <div class="container">
                           <div class="row">
                              <div class="slider_coint_inner">
                                 <h3>Koleksi Terbaik<br><strong>dari</strong></h3>
                                 <h4 class="font_themecolor">Loxury Jewellery</h4>
                                 <p>Dapatkan koleksi perhiasan berkelas dan terbaik di seluruh dunia</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item slider_inner slider2">
                        <div class="container">
                           <div class="row">
                              <div class="slider_coint_inner">
                                 <h3>Best<br><strong>New Collection</strong></h3>
                                 <h4 class="font_themecolor">Loxury Jewellery</h4>
                                 <p>Lorem ipsum dolor sit amet consec tetur adipiscing elit elit at felis<br>
                                    lacinia nec et est aptent taciti sociosqu ad litora torquent per conubia nostra</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="slider_bullets">
                        <ol class="carousel-indicators">
                           <li data-target="#main_slider" data-slide-to="0" class="active"><i class="fa fa-chevron-left"></i></li>
                           <li data-target="#main_slider" data-slide-to="1"><i class="fa fa-chevron-right"></i></li>
                        </ol>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end slider -->

      

     

@endsection