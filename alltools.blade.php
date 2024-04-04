
    <!DOCTYPE html>
<html lang="en-US">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="author" content="">
   <meta name="description" content="">
   <meta name="keywords" content="">
   <title>Clever Ai Tool</title>
   <link rel="icon" href="img/favicon.jpg" type="image/x-icon">
   <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all" />
   <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
   <link rel="stylesheet" href="css/responsive.css" type="text/css" media="all" />
   <link rel="stylesheet" href="css/main.css" type="text/css" media="all" />
</head>

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
      <div class="main_title_wrapper category_title_section jl_cat_img_bg">
        <div class="category_image_bg_image" style="background-image: url('theme/disto/demo/wp-content/uploads/2019/02/soroush-karimi-253940-unsplash-1920x982.jpg');"></div>
        <div class="category_image_bg_ov"></div>
        <div class="jl_cat_title_wrapper">
          <div class="container">
            <div class="row">
              <div class="col-md-12 main_title_col">
                <div class="jl_cat_mid_title">
                  <h3 class="categories-title title">Blog</h3>
                  <p>Sample category description goes here</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="jl_post_loop_wrapper">
        <div class="container" id="wrapper_masonry">
          <div class="row">
            <div class="col-md-12">
              <div class="jl_wrapper_cat">
                <div id="content_masonry" class="pagination_infinite_style_cat ">
          @foreach($Blogs as $blog)
    <div class="col-md-4 box" data-aos="fade-up">
        <div class="post_grid_content_wrapper">
            <div class="image-post-thumb">
                <a href="{{ route('blogdetail', ['id' => $blog->id]) }}" class="link_image featured-thumbnail" title="{{ $blog->title }}">
                    <img width="780" height="450" src='{{ asset("storage/admin/images/".$blog->image) }}' class="attachment-disto_large_feature_image size-disto_large_feature_image wp-post-image" alt="{{ $blog->title }}" title="{{ $blog->title }}"/>
                    <div class="background_over_image"></div>
                </a>
                <span class="meta-category-small"><a class="post-category-color-text" style="background:#0015ff" href="{{ route('blogdetail', ['id' => $blog->id]) }}">{{ $blog->blogCategory }}</a></span>
                <span class="jl_post_type_icon"><i class="la la-camera"></i></span>
            </div>
            <div class="post-entry-content">
                <div class="post-entry-content-wrapper">
                    <div class="large_post_content">
                        <h3 class="image-post-title"><a href="{{ route('blogdetail', ['id' => $blog->id]) }}">{{ $blog->title }}</a></h3>
                        <span class="jl_post_meta">
                            <span class="jl_author_img_w">
                                <img src="img/admin.png" width="30" height="30" alt="{{ $blog->author }}" class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" title="{{ $blog->title }}"/>
                                <a href="{{ route('blogdetail', ['id' => $blog->id]) }}" title="Posts by {{ $blog->author }}" rel="author">{{ $blog->author }}</a>
                            </span>
                            <span class="post-date"><i class="fa fa-clock-o"></i>{{ \Carbon\Carbon::parse($blog->created_at)->format('M d, Y') }}</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

                </div>
                <nav class="jellywp_pagination"></nav>
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
   <script src="js/jquery.js"></script>
   <script src="js/fluidvids.js"></script>
   <script src="js/infinitescroll.js"></script>
   <script src="js/justified.js"></script>
   <script src="js/slick.js"></script>
   <script src="js/theia-sticky-sidebar.js"></script>
   <script src="js/aos.js"></script>
   <script src="js/custom.js"></script>
</body>
</html>