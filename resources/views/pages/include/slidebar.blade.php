<aside id="sidebar" class="col-xs-12 col-sm-12 col-md-4">
               <div id="halim_tab_popular_videos-widget-7" class="widget halim_tab_popular_videos-widget">
                  <div class="section-bar clearfix">
                     <div class="section-title">
                        <span>Hoạt Hình Hot</span>
                        
                     </div>
                  </div>
                  <section class="tab-content">
                     <div role="tabpanel" class="tab-pane active halim-ajax-popular-post">
                        <div class="halim-ajax-popular-post-loading hidden"></div>
                        <div id="halim-ajax-popular-post" class="popular-post">
                           @foreach($phimhot_slidebar as $key => $hot_slidebar)
                           <div class="item post-37176">
                              <a href="{{route('movie',$hot_slidebar->slug)}}" title="{{$hot_slidebar->title}}">
                                 <div class="item-link">
                                    <img src="{{asset('uploads/movie/'.$hot_slidebar->image)}}" class="lazy post-thumb" alt="{{$hot_slidebar->title}}" title="{{$hot_slidebar->title}}" />
                                    <span class="is_trailer">
                                       @if($hot_slidebar->resolution==0)
                                          HD
                                       @elseif($hot_slidebar->resolution==0)
                                          SD
                                       @elseif($hot_slidebar->resolution==0)
                                          HDCam
                                       @elseif($hot_slidebar->resolution==0)
                                          Cam
                                       @else
                                          fullHD
                                       @endif
                                    </span>
                                 </div>
                                 <p class="title">{{$hot_slidebar->title}}</p>
                              </a>
                              <div class="viewsCount" style="color: #9d9d9d;">3.2K lượt xem</div>
                              <div style="float: left;">
                                 <span class="user-rate-image post-large-rate stars-large-vang" style="display: block;/* width: 100%; */">
                                 <span style="width: 0%"></span>
                                 </span>
                              </div>
                           </div>
                           @endforeach
                          
                          
                        </div>
                     </div>
                  </section>
                  <div class="clearfix"></div>
               </div>
            </aside>
            <aside id="sidebar" class="col-xs-12 col-sm-12 col-md-4">
               <div id="halim_tab_popular_videos-widget-7" class="widget halim_tab_popular_videos-widget">
                  <div class="section-bar clearfix">
                     <div class="section-title">
                        <span>Top Views</span>
                        
                     </div>
                  </div>
                  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link filter-slidebar" id="pills-home-tab" data-toggle="pill" href="#ngay" role="tab" aria-controls="pills-home" aria-selected="true">Ngày</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link filter-slidebar" id="pills-profile-tab" data-toggle="pill" href="#tuan" role="tab" aria-controls="pills-profile" aria-selected="false">Tuần</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link filter-slidebar" id="pills-contact-tab" data-toggle="pill" href="#thang" role="tab" aria-controls="pills-contact" aria-selected="false">Tháng</a>
                          </li>
                        </ul>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade" id="ngay" role="tabpanel" aria-labelledby="pills-home-tab">
                       <div id="halim-ajax-popular-post" class="popular-post">

                           <div class="item post-37176">
                              <a href="chitiet.php" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ">
                                 <div class="item-link">
                                    <img src="https://ghienphim.org/uploads/GPax0JpZbqvIVyfkmDwhRCKATNtLloFQ.jpeg?v=1624801798" class="lazy post-thumb" alt="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" />
                                    <span class="is_trailer">Trailer</span>
                                 </div>
                                 <p class="title">CHỊ MƯỜI BA: BA NGÀY SINH TỬ</p>
                              </a>
                              <div class="viewsCount" style="color: #9d9d9d;">3.2K lượt xem</div>
                              <div style="float: left;">
                                 <span class="user-rate-image post-large-rate stars-large-vang" style="display: block;/* width: 100%; */">
                                 <span style="width: 0%"></span>
                                 </span>
                              </div>
                           </div>
                           
                          
                          
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tuan" role="tabpanel" aria-labelledby="pills-profile-tab">
                       <div id="halim-ajax-popular-post" class="popular-post">

                           <div class="item post-37176">
                              <a href="chitiet.php" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ">
                                 <div class="item-link">
                                    <img src="https://ghienphim.org/uploads/GPax0JpZbqvIVyfkmDwhRCKATNtLloFQ.jpeg?v=1624801798" class="lazy post-thumb" alt="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" />
                                    <span class="is_trailer">Trailer</span>
                                 </div>
                                 <p class="title">CHỊ MƯỜI BA: BA NGÀY SINH TỬ</p>
                              </a>
                              <div class="viewsCount" style="color: #9d9d9d;">3.2K lượt xem</div>
                              <div style="float: left;">
                                 <span class="user-rate-image post-large-rate stars-large-vang" style="display: block;/* width: 100%; */">
                                 <span style="width: 0%"></span>
                                 </span>
                              </div>
                           </div>
                           
                          
                          
                        </div>
                    </div>
                    <div class="tab-pane fade" id="thang" role="tabpanel" aria-labelledby="pills-contact-tab">
                       <div id="halim-ajax-popular-post" class="popular-post">

                           <div class="item post-37176">
                              <a href="chitiet.php" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ">
                                 <div class="item-link">
                                    <img src="https://ghienphim.org/uploads/GPax0JpZbqvIVyfkmDwhRCKATNtLloFQ.jpeg?v=1624801798" class="lazy post-thumb" alt="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" />
                                    <span class="is_trailer">Trailer</span>
                                 </div>
                                 <p class="title">CHỊ MƯỜI BA: BA NGÀY SINH TỬ</p>
                              </a>
                              <div class="viewsCount" style="color: #9d9d9d;">3.2K lượt xem</div>
                              <div style="float: left;">
                                 <span class="user-rate-image post-large-rate stars-large-vang" style="display: block;/* width: 100%; */">
                                 <span style="width: 0%"></span>
                                 </span>
                              </div>
                           </div>
                           
                          
                          
                        </div>
                    </div>
                  </div>
                  
                  <div class="clearfix"></div>
               </div>
            </aside>