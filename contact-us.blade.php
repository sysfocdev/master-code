<!DOCTYPE html>
<html lang="en-US">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="author" content="">
   <meta name="description" content="Get in touch with us for inquiries or collaborations. We're here to support your AI initiatives.
">
   <meta name="keywords" content="">
   <meta name="csrf-token" content="{{ csrf_token() }}">
  
   <title>Contact Us for Inquiries or Support Regarding AI Tools</title>
   <link rel="icon" href="img/fav.png" type="image/x-icon">
   <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
      <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all" />
   <link rel="stylesheet" href="css/responsive.css" type="text/css" media="all" />
   <link rel="stylesheet" href="css/main.css" type="text/css" media="all" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <style>
  /* Adjust font size and line height for better visibility */
  body {
    font-size: 16px; /* You can adjust this value as needed */
    line-height: 1.6;
  }

  /* Add more space between form elements */
  .needs-validation .form-label,
  .needs-validation .form-control {
    margin-bottom: 15px;
  }
</style>
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
      <div class="jl_single_style3">
    <div class="single_content_header single_captions_overlay_image_full_width">
                        <div class="image-post-thumb" style="background-image: url('images/bannerimages/cleverAI-Contact us.webp')"></div>
                <div class="single_post_entry_content">
            <span class="meta-category-small"><a class="post-category-color-text" style="background:#ed1c1c" href="#">Active</a></span> <h1 class="single_post_title_main">
                Have a good time with my friend and enjoyed</h1>
                 </div>
    </div>
</div>
      <div class="jl_post_loop_wrapper">
        <div class="container" id="wrapper_masonry">
          <div class="row">
            <div class="col-md-12" id="">
         <form id="contactForm" method="post"  class="row g-3">
          
    <div class="col-md-6">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="col-md-6">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="col-md-6">
        <label for="toolName" class="form-label">Tool Name</label>
        <input type="text" class="form-control" id="toolName" name="tool_name">
    </div>
  <div class="col-md-6">
    <label for="category" class="form-label">Category</label>
    <select id="category" class="form-select" name="category">
        <option selected disabled>Choose...</option>
        @foreach($mainCategories as $mainCategory)
            <optgroup label="{{ $mainCategory->name }}">
                @foreach($subCategories as $subCategory)
                    @if($subCategory->p_cat == $mainCategory->id)
                        <option value="{{ $subCategory->slug }}">{{ $subCategory->name }}</option>
                    @endif
                @endforeach
            </optgroup>
        @endforeach
    </select>
</div>


    <div class="col-md-12">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" rows="3" name="description"></textarea>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
$(document).ready(function() {
    $('#contactForm').submit(function(e) {
        e.preventDefault();
        $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


        $.ajax({
            type: 'POST',
            url: "{{ route('contactUs.store') }}",
            data: $(this).serialize(),
            success: function(response) {
                if (response.success) {
                  $('#contactForm')[0].reset();
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'Your message has been sent successfully!',
                    });
                }
            },
            error: function(xhr, status, error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'An error occurred while sending your message!',
                });
            }
        });
    });
});
</script>

</body>
</html>