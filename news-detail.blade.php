<!DOCTYPE html>
<html lang="en-US">
<head>
   
      @include('layouts.head')
   <meta name="description" content="{{ $news->metasdesc }}">
   <meta name="keywords" content="">
   <title>{{ $news->metatitle }}</title>
</head>

<body class="mobile_nav_class jl-has-sidebar">
   <div class="options_layout_wrapper jl_radius jl_none_box_styles jl_border_radiuss">
      <div class="options_layout_container full_layout_enable_front">
         <!-- Start header -->
         @include('layouts.header')
         @include('layouts.mobileHeader')
         <div class="search_form_menu_personal">
            <div class="menu_mobile_large_close"><span class="jl_close_wapper search_form_menu_personal_click"><span class="jl_close_1"></span><span class="jl_close_2"></span></span></div>
            <form method="get" class="searchform_theme" action="#">
    <input type="text" placeholder="Search..." value="" name="s" class="search_btn" />
    <button type="submit" class="button"><i class="fa fa-search"></i></button>
</form>         </div>
         <div class="mobile_menu_overlay"></div><!-- begin content -->
<section id="content_main" class="clearfix jl_spost">
    <div class="container">
        <div class="row main_content">
            <div class="col-md-8  loop-large-post" id="content">
                <div class="widget_container content_page">
                    <!-- start post -->
                    <div class="post-2802 post type-post status-publish format-gallery has-post-thumbnail hentry category-business tag-inspiration tag-sport post_format-post-format-gallery" id="post-2802">
                        <div class="single_section_content box blog_large_post_style">
                            <div class="jl_single_style2">
    <div class="single_post_entry_content single_bellow_left_align jl_top_single_title jl_top_title_feature">
         <h1 class="single_post_title_main" >
           {{ $news->title }}    </h1>
                <span class="meta-category-small single_meta_category" style="margin-top: 10px; margin-bottom: 0;"><a class="post-category-color-text" style="background:#0015ff" href="#"> news  </a>&nbsp;<span class="post-date"><i class="fa fa-clock-o"></i>&nbsp;{{ \Carbon\Carbon::parse($news->created_at)->format('M d, Y') }}</span>  </span>  
                                                               </div>
        <div class="single_content_header jl_single_feature_below">
        <div class="image-post-thumb jlsingle-title-above">
            <div class="justified-gallery-post">
                                
                      <a class="featured-thumbnail" href="{{ asset('storage/admin/images/'.$news->image) }}">
    <img src='{{ asset("storage/admin/images/".$news->image) }}' alt="featured-thumbnail" title="{{ $news->title }}"/>
    <div class="background_over_image"></div>
</a>

                            </div>
        </div>
    </div>
        </div>                            <div class="post_content">
    {!! $news->content !!}
     


                            </div>
    



  
                                </div>
                    </div>
                    <!-- end post -->
                    <div class="brack_space"></div>
                </div>
            </div>
              <div class="col-md-4" id="sidebar">
              <div id="disto_recent_post_widget-7" class="widget post_list_widget">
                <div class="widget_jl_wrapper"><span class="jl_none_space"></span>
                  <div class="widget-title">
                    <h2>Recent News</h2>
                  </div>
                  <div>
                    <ul class="feature-post-list recent-post-widget">
                      <li>
                        <a href="#" class="jl_small_format feature-image-link image_post featured-thumbnail" title="Sitting right here waiting for you come to me">
                          <img width="120" height="120" src="http://jellywp.com/theme/disto/demo/wp-content/uploads/2019/02/sawyer-bengtson-1331688-unsplash-120x120.jpg" class="attachment-disto_small_feature size-disto_small_feature wp-post-image" alt="featured-image" title="Sitting right here waiting for you come to me"/>
                          <div class="background_over_image"></div>
                        </a>
                        <div class="item-details">
<span class="meta-category-small"><a class="post-category-color-text" style="background:#d800f9" href="#">Techno</a></span> 
                          <h3 class="feature-post-title"><a href="">
                Sitting right here waiting for you come to me</a></h3>
                          <span class="post-meta meta-main-img auto_image_with_date">                             <span class="post-date"><i class="fa fa-clock-o"></i>Dec 24, 2016</span></span>
                        </div>
                      </li>
                       <li>
                        <a href="#" class="jl_small_format feature-image-link image_post featured-thumbnail" title="Sitting right here waiting for you come to me">
                          <img width="120" height="120" src="http://jellywp.com/theme/disto/demo/wp-content/uploads/2019/02/sawyer-bengtson-1331688-unsplash-120x120.jpg" class="attachment-disto_small_feature size-disto_small_feature wp-post-image" alt="featured-image" title="Sitting right here waiting for you come to me"/>
                          <div class="background_over_image"></div>
                        </a>
                        <div class="item-details">
<span class="meta-category-small"><a class="post-category-color-text" style="background:#d800f9" href="#">Techno</a></span> 
                          <h3 class="feature-post-title"><a href="#">
                Sitting right here waiting for you come to me</a></h3>
                          <span class="post-meta meta-main-img auto_image_with_date">                             <span class="post-date"><i class="fa fa-clock-o"></i>Dec 24, 2016</span></span>
                        </div>
                      </li>
                       <li>
                        <a href="#" class="jl_small_format feature-image-link image_post featured-thumbnail" title="Sitting right here waiting for you come to me">
                          <img width="120" height="120" src="http://jellywp.com/theme/disto/demo/wp-content/uploads/2019/02/sawyer-bengtson-1331688-unsplash-120x120.jpg" class="attachment-disto_small_feature size-disto_small_feature wp-post-image" alt="featured-image" title="Sitting right here waiting for you come to me"/>
                          <div class="background_over_image"></div>
                        </a>
                        <div class="item-details">
<span class="meta-category-small"><a class="post-category-color-text" style="background:#d800f9" href="#">Techno</a></span> 
                          <h3 class="feature-post-title"><a href="#">
                Sitting right here waiting for you come to me</a></h3>
                          <span class="post-meta meta-main-img auto_image_with_date">                             <span class="post-date"><i class="fa fa-clock-o"></i>Dec 24, 2016</span></span>
                        </div>
                      </li>
                      <li>
                        <a href="#" class="jl_small_format feature-image-link image_post featured-thumbnail" title="Before breakfast we have a great photo shoot">
                          <img width="120" height="120" src="http://jellywp.com/theme/disto/demo/wp-content/uploads/2018/11/susan-yin-698530-unsplash-120x120.jpg" class="attachment-disto_small_feature size-disto_small_feature wp-post-image" alt="featured-image" title="Before breakfast we have a great photo shoot"/>
                          <div class="background_over_image"></div>
                        </a>
                        <div class="item-details">
<span class="meta-category-small"><a class="post-category-color-text" style="background:#ed1c1c" href="#">Active</a></span> 
                          <h3 class="feature-post-title"><a href="#">
                Before breakfast we have a great photo shoot</a></h3>
                          <span class="post-meta meta-main-img auto_image_with_date">                             <span class="post-date"><i class="fa fa-clock-o"></i>Dec 23, 2016</span></span>
                        </div>
                      </li>
                      <li>
                        <a href="#" class="jl_small_format feature-image-link image_post featured-thumbnail" title="Beautiful flying bikes with simple style but look good">
                          <img width="120" height="120" src="http://jellywp.com/theme/disto/demo/wp-content/uploads/2018/11/melissa-walker-horn-1058236-unsplash-120x120.jpg" class="attachment-disto_small_feature size-disto_small_feature wp-post-image" alt="featured-image" title="Beautiful flying bikes with simple style but look good"/>
                          <div class="background_over_image"></div>
                        </a>
                        <div class="item-details">
<span class="meta-category-small"><a class="post-category-color-text" style="background:#ed1c1c" href="#">Active</a></span> 
                          <h3 class="feature-post-title"><a href="#">
                Beautiful flying bikes with simple style but look good</a></h3>
                          <span class="post-meta meta-main-img auto_image_with_date">                             <span class="post-date"><i class="fa fa-clock-o"></i>Dec 23, 2016</span></span>
                        </div>
                      </li>
                    </ul>
                  </div>
<span class="jl_none_space"></span>
                </div>
            </div>
                    
            </div>
                    </div>
</section>
@include('layouts.footer')
      </div>
   </div>
      <div id="go-top"><a href="#go-top"><i class="fa fa-angle-up"></i></a></div>
   @include('layouts.scripts')

</body>
</html>