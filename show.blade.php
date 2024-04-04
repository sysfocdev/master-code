<!DOCTYPE html>
<html lang="en-US">
<head>
   
      @include('layouts.head')
   <meta name="description" content="{{ $page->metaDescription }}">
   <meta name="keywords" content="">
   <title>  {{ $page->metatitle }}</title>
    
</head>
<style>
    .category_image_wrapper_main .category_image_bg_image:last-child:hover{
        background-color: #28D094;
        transition: all 0.2s ease-in;
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
<div class="image-post-thumb" style="background-image: url('{{ asset('storage/admin/images/' . $page->image) }}'); background-size:cover;"></div>
    <div class="single_post_entry_content">
        @if($breadcrumbs)
            <nav aria-label="breadcrumb" style="margin-bottom: 10px;">
                <ol class="breadcrumb" style="background: none; padding: 0;">
                    @foreach($breadcrumbs as $breadcrumb)
                        @if($breadcrumb->id == $page->id)
                            <li class="breadcrumb-item active" aria-current="page">{{ $breadcrumb->slug }}</li>
                        @else
                            <li class="breadcrumb-item"><a href="{{ url('alltools') }}">AI Tools</a></li>
                        @endif
                    @endforeach
                </ol>
            </nav>
        @endif
        <h1 class="single_post_title_main">
            {{ $page->title }}
        </h1>
    </div>
</div>
</div>
      <div class="jl_post_loop_wrapper">
        <div class="container" id="wrapper_masonry">


     @if($mainTool)
     <div class="row category_image_wrapper_main">
                        <h3>{{ $mainTool->toolName }}</h3>
                        <!-- Display details of the main tool as needed -->

                        @if($subTools->isNotEmpty())
                            
                            
                                @foreach($subTools as $subTool)
                                    <div class="col-md-3" style="margin-top: 20px;">
                                <div class="category_image_bg_image">
                                    <a class="category_image_link" id="category_color_2" href="{{ route('tool.details', ['parentSlug' => $mainTool->slug, 'childSlug' => $subTool->slug]) }}">
                                        <span class="jl_cm_overlay">
                                            <span class="jl_cm_name" style="float:none;">{{ $subTool->toolName }}</span>
                                        </span>
                                        
                                    </a>
                                </div>
                            </div>
                                @endforeach
                          
                        @endif
                    @endif
                </div>


            
         {!! $page->content !!}
        </div>
      </div>
      @include('layouts.footer')
      </div>
   </div>
      <div id="go-top"><a href="#go-top"><i class="fa fa-angle-up"></i></a>
   </div>
@include('layouts.scripts') 
   <script>
    function toggleContent() {
        var hiddenContent = document.querySelector('.hidden-content');
        // Toggle the visibility of hidden content
        hiddenContent.style.display = (hiddenContent.style.display === 'none') ? 'block' : 'none';
    }
</script>
</body>
</html>
