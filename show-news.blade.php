<!DOCTYPE html>
<html lang="en-US">
<head>
  @include('layouts.head')
   <meta name="description" content=" Stay updated on the latest AI news and developments. Explore trends, innovations, and insights in the AI industry.
">
   <meta name="keywords" content="">
   <title>Stay Updated with the Latest AI News and Developments</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    .card p{
        line-height:1.28;
        color: #777;
        font-size: 16px;
    }
</style>
<body class="mobile_nav_class jl-has-sidebar">
   <div class="options_layout_wrapper jl_radius jl_none_box_styles jl_border_radiuss">
      <div class="options_layout_container full_layout_enable_front">
         <!-- Start header -->
        @include('layouts.header')
        @include('layouts.mobileHeader')
      <div class="search_form_menu_personal">
        <div class="menu_mobile_large_close"><span class="jl_close_wapper search_form_menu_personal_click"><span class="jl_close_1"></span><span class="jl_close_2"></span></span>
        </div>
        <form method="get" class="searchform_theme" action=/blogdetail>
          <input type="text" placeholder="Search..." value="" name="s" class="search_btn" />
          <button type="submit" class="button"><i class="fa fa-search"></i>
          </button>
        </form>
      </div>
      <div class="mobile_menu_overlay"></div>
         <div class="jl_single_style3">
  <div class="single_content_header single_captions_overlay_image_full_width">
<div class="image-post-thumb" style="background-image: url('{{ asset('images/bannerimages/ai3d.webp') }}')"></div>
    <div class="single_post_entry_content">
      
        <h1 class="single_post_title_main">
           News
        </h1>
    </div>
</div>
</div>
      <div class="jl_post_loop_wrapper">
        <div class="container" id="wrapper_masonry">

     
    </div> 
       <div class="jl_home_section">
            <div class="container-fluid my-3">
               <div class="row">
                  <div class="col-md-12 jl_mid_main_3col">
                     <div class="jl_3col_wrapin">

                                 <div class="jelly_homepage_builder jl_nonav_margin homepage_builder_3grid_post jl_fontsize22 jl_cus_grid3 colstyle1">
                                    <div class="homepage_builder_title">
                                       
                                       <span class="jl_hsubt"></span>
                                    </div>
                                    <div class="container-fluid">
                                       <div class="col-lg-8">
                                          <div class="row justify-content-center justify-content-md-start" style="row-gap: 20px;">
                                             @foreach($news as $item)
                                             <div class="col-lg-4">
                                                 <div class="card p-0" style="height: 100%; border: none; box-shadow: 3px 3px 10px 0px rgba(138, 134, 134, 0.452); position: relative; border-radius: 12px;">
                                                 <span style="position: absolute; left: 3%; top: 2%; background-color: red; border: none; padding: 3px 5px; color: white; font-size: 10px; border-radius: 3px;">NEWS</span>
                                                 <img src='{{ asset("storage/admin/images/".$item->image) }}' class="card-img-top" alt='{{ $item->title }}' style="width: 100%; height: 100%; border-top-left-radius: 12px; border-top-right-radius: 12px;" title="{{ $item->title }}">
                                                 <div class="card-body">
                                                   <a class="text-decoration-none text-black" href="{{ url('ai-news/' . $item->slug) }}"><h3 class="card-title">{{ $item->title }}</h3></a>
                                                   <p class="card-text">{!! \Illuminate\Support\Str::limit($item->content, 105) !!}...</p>
                                                 </div>
                                                 <div class="py-0 pb-2 card-footer d-flex justify-content-end" style="border: none; background-color: transparent;" >
                                                     <a href="{{ url('ai-news/' . $item->slug) }}" class="text-decoration-none"><b style="font-weight: 500; color: rgb(15, 197, 143); font-size: 16px;">Read more ></b></a>
                                                 </div>
                                             </div>
                                             </div>
                                             @endforeach
                                             
                                         </div>
                                       </div>
                                       <div class="col-lg-4" id="sidebar" style="float:right;">
                
                                          <div id="disto_recent_post_widget-7" class="widget post_list_widget">
                                            <div class="widget_jl_wrapper"><span class="jl_none_space"></span>
                                              <div class="widget-title">
                                                <h2>Recent Posts</h2>
                                              </div>
                                              <div>
                                                <ul class="feature-post-list recent-post-widget">
                                                  <li>
                                                    <a href="#" class="jl_small_format feature-image-link image_post featured-thumbnail" title="Sitting right here waiting for you come to me">
                                                      <img width="120" height="120" src="../theme/disto/demo/wp-content/uploads/2019/02/sawyer-bengtson-1331688-unsplash-120x120.jpg" class="attachment-disto_small_feature size-disto_small_feature wp-post-image" alt="featured-image" title="Sitting right here waiting for you come to me"/>
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
                                                      <img width="120" height="120" src="../theme/disto/demo/wp-content/uploads/2018/11/susan-yin-698530-unsplash-120x120.jpg" class="attachment-disto_small_feature size-disto_small_feature wp-post-image" alt="featured-image" title="Before breakfast we have a great photo shoot"/>
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
                                                      <img width="120" height="120" src="../theme/disto/demo/wp-content/uploads/2018/11/melissa-walker-horn-1058236-unsplash-120x120.jpg" class="attachment-disto_small_feature size-disto_small_feature wp-post-image" alt="featured-image" title="Beautiful flying bikes with simple style but look good"/>
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
                                          </div><span class="jl_none_space"></span>
                                          <div id="disto_recent_large_slider_widgets-5" class="widget jl_widget_slider">
                                            <div class="slider_widget_post jelly_loading_pro">
                                              <div class="recent_post_large_widget"> <span class="image_grid_header_absolute" style="background-image: url('../theme/disto/demo/wp-content/uploads/2018/11/marvin-tolentino-680683-unsplash-380x350.jpg')"></span>
                                                <a href="#" class="link_grid_header_absolute" title="Standing right here and singing until the mid"></a> <span class="meta-category-small"><a class="post-category-color-text" style="background:#ed1c1c" href="#">Active</a></span> 
                                                <div class="wrap_box_style_main image-post-title">
                                                  <h3 class="image-post-title"><a href="#">
                                                Standing right here and singing until the mid</a></h3>
                                                  <span class="jl_post_meta" ><span class="jl_author_img_w"><img src="img/favicon.svg" width="30" height="30" alt="Anna Nikova" class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" title="Posts by Anna Nikova" /><a href="#" title="Posts by Anna Nikova" rel="author">Anna Nikova</a></span><span class="post-date"><i class="fa fa-clock-o"></i>Dec 23, 2016</span></span>
                                                </div>
                                              </div>
                                              <div class="recent_post_large_widget"> <span class="image_grid_header_absolute" style="background-image: url('../theme/disto/demo/wp-content/uploads/2016/12/bartosz-wanot-133401-unsplash-380x350.jpg')"></span>
                                                <a href="#" class="link_grid_header_absolute" title="You can make your art with canyon color"></a> <span class="meta-category-small"><a class="post-category-color-text" style="background:#6b34ba" href="#">Gaming</a></span> 
                                                <div class="wrap_box_style_main image-post-title">
                                                  <h3 class="image-post-title"><a href="#">
                                                You can make your art with canyon color</a></h3>
                                                  <span class="jl_post_meta" ><span class="jl_author_img_w"><img src="img/favicon.svg" width="30" height="30" alt="Anna Nikova" class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" title="Anna Nikova"/><a href="#" title="Posts by Anna Nikova" rel="author">Anna Nikova</a></span><span class="post-date"><i class="fa fa-clock-o"></i>Dec 23, 2016</span></span>
                                                </div>
                                              </div>
                                              <div class="recent_post_large_widget"> <span class="image_grid_header_absolute" style="background-image: url('../theme/disto/demo/wp-content/uploads/2019/03/banter-snaps-1438384-unsplash-380x350.jpg')"></span>
                                                <a href="#" class="link_grid_header_absolute" title="Makeup it really important things to do"></a> <span class="meta-category-small"><a class="post-category-color-text" style="background:#6b34ba" href="#">Gaming</a></span> 
                                                <div class="wrap_box_style_main image-post-title">
                                                  <h3 class="image-post-title"><a href="#">
                                                Makeup it really important things to do</a></h3>
                                                  <span class="jl_post_meta" ><span class="jl_author_img_w"><img src="img/favicon.svg" width="30" height="30" alt="Anna Nikova" class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a href="#" title="Posts by Anna Nikova" rel="author">Anna Nikova</a></span><span class="post-date"><i class="fa fa-clock-o"></i>Dec 23, 2016</span></span>
                                                </div>
                                              </div>
                                            </div>
                            <span class="jl_none_space"></span>
                                          </div>
                                        </div>
                                   </div>
                                 </div>
                                 </div>
                                 </div>
                              
                                 </div>
                                 </div>
                              </div>
     

            
        
   
      </div>
      @include('layouts.footer')
      </div>
   </div>
      <div id="go-top"><a href="#go-top"><i class="fa fa-angle-up"></i></a>
   </div>
@include('layouts.scripts') 
  
</body>
</html>
