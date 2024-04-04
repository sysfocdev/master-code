<!DOCTYPE html>
<html lang="en-US">
<head>
    
      @include('layouts.head')
   <meta name="description" content=" {{$tools->metaDescription }}">
   <meta name="keywords" content="">
   <title> {{ $tools->metaTitle }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

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
         <div class="mobile_menu_overlay"></div>
<section id="content_main" class="clearfix m-0">
    <div class="container-fluid">
        <div class="col-lg-8">
            <div class="row" style="row-gap: 15px;">
                @if(count($subTools) > 0)
                                    @foreach($subTools as $tool)
                            <div class="col-xl-4">
                              <div style="box-shadow: 3px 3px 10px 0px rgba(138, 134, 134, 0.452); padding:0 5px 5px 5px; height: 100%; border-radius: 8px;">
                                <div class="col-12">
                                    <a href="{{ route('tool.detail', ['parentCategory' => $parentCategorySlug, 'subCategory' => $subCategorySlug, 'slug' => $tool->slug]) }}"><img style="width:100%; height:180px; object-fit: contain;"  class="mt-2" title="{{ $tool->toolName}}" 
                                        src="{{ asset('storage/'.$tool->toolLogo) }}"
                                        alt="{{ $tool->toolName}}"></a>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="row align-items-center"  style="margin-bottom: 0px;">
                                        <div class="col-md-12">
                                           <a style="text-decoration: none; color: black;" href="{{ route('tool.detail', ['parentCategory' => $parentCategorySlug, 'subCategory' => $subCategorySlug, 'slug' => $tool->slug]) }}"> <h5 style="font-size: 20px;">{{ $tool->toolName }} @if(!empty($tool->toolTagline))
        - {{ $tool->toolTagline }}
    @endif</h5></a>
                                        </div>
                                        <div class="col-md-12">
                                            <i style="color: #FFDF00; font-size: 16px;" class="bi bi-star-fill"></i>
                                            <i style="color: #FFDF00; font-size: 16px;" class="bi bi-star-fill"></i>
                                            <i style="color: #FFDF00; font-size: 16px;" class="bi bi-star-fill"></i>
                                            <i style="color: #FFDF00; font-size: 16px;" class="bi bi-star-fill"></i>
                                            <i style="color: #FFDF00; font-size: 16px;" class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                
                                </div>
                                 @if ($tool->toolTagDescription)
                                <div class="col-12 mb-3 mt-2" style="display: flex; flex-wrap: wrap; gap: 5px;">
                                    @foreach (explode(',', $tool->toolTagDescription) as $tag)
                                    <span
                                        style="cursor: pointer; padding: 1px 6px; border: 1px solid rgba(148, 143, 143, 0.397); border-radius: 10px; font-size: 14px;">{{ $tag }}</span>
                                         @endforeach
                                </div>
                                 @endif
                            </div>
                            </div>
                                @endforeach
                                     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
                @else
                 <div class="col-md-12">
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
                        <script>
                            // Use Sweet Alert to display a message when no tools are found
                            Swal.fire({
                                icon: 'info',
                                title: 'Oops...',
                                text: 'No Tool Found',
                            });
                        </script>
                    </div>
                @endif
                
                        </div>
        </div>
        @include('layouts.featuredtoolsidebar')
    </div>
</section>
@include('layouts.footer')
      </div>
   </div>
      <div id="go-top"><a href="#go-top"><i class="fa fa-angle-up"></i></a></div>
   @include('layouts.scripts')
   <script type="text/javascript">
     function toggleAnswer(answerId) {
    var answer = document.getElementById(answerId);
    var icon = answer.previousElementSibling.querySelector('.toggle-icon');

    if (answer.style.display === 'block') {
        answer.style.display = 'none';
        icon.innerHTML = '+';
    } else {
        answer.style.display = 'block';
        icon.innerHTML = '-';
    }
}


   </script>

</body>
</html>