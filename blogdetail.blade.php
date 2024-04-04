<!DOCTYPE html>
<html lang="en-US">
<head>
  
      @include('layouts.head')
    <meta name="description" content="{{ $blog->metadesc }}">
   <meta name="keywords" content="">
    <title>{{ $blog->metatitle }}</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<style>
    .commentContainer{
        display: none;
    }
    .showReplies{
        display: block;
    }
</style>
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
           {{ $blog->title }}    </h1>
            
                                                               </div>
        <div class="single_content_header jl_single_feature_below">
            <div class="mt-2">
                <h3 style="font-size: 22px;">Share:</h3>
               <a href="{{ url('/') }}"><span><i style="font-size: 18px; color:black;" class="bi bi-facebook"></i></span></a>
               <a href="{{ url('/') }}"><span><i style="font-size: 18px; margin-left:10px; color:black;" class="bi bi-twitter"></i></span></a>
               <a href="{{ url('/') }}"><span><i style="font-size: 18px; margin-left:10px; color:black;" class="bi bi-instagram"></i></span></a>
               <a href="{{ url('/') }}"><span><i style="font-size: 18px; margin-left:10px; color:black;" class="bi bi-telegram"></i></span></a>
               <a href="{{ url('/') }}"><span><i style="font-size: 18px; margin-left:10px; color:black;" class="bi bi-tiktok"></i></span></a>
               <a href="{{ url('/') }}"><span><i style="font-size: 18px; margin-left:10px; color:black;" class="bi bi-pinterest"></i></span></a>
               <a href="{{ url('/') }}"><span><i style="font-size: 18px; margin-left:10px; color:black;" class="bi bi-linkedin"></i></span></a>
               </div>
        <div class="image-post-thumb jlsingle-title-above">
            <div class="justified-gallery-post">
                                
                      <a class="featured-thumbnail" href="{{ asset('storage/admin/images/' . $blog->image) }}">
    <img src="{{ asset('storage/admin/images/'.$blog->image) }}" alt="featured-thumbnail" title=" {{ $blog->title }}"/>
    <div class="background_over_image"></div>
</a>

                            </div>
        </div>
    </div>
        </div>                            <div class="post_content">
    {!! $blog->description !!}
     


                            </div>
                                                     
       <!-- Your existing code... -->

<div id="respond" class="comment-respond">
    <h3 id="reply-title" class="comment-reply-title">Leave a COMMENT <small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel reply</a></small></h3>

    <form action="{{ route('comments.store', ['blogId' => $blog->id]) }}" method="post" id="comment-form" class="comment-form">
        @csrf
        <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
        <p class="comment-form-comment">
            <textarea class="u-full-width" id="comment" name="body" required="" cols="45" rows="8" aria-required="true" placeholder="Comment"></textarea>
        </p>
        <div class="form-fields row">
            <span class="comment-form-author col-md-6"><input id="author" required="" name="name" type="text" value="" size="30" placeholder="Fullname"></span>
            <span class="comment-form-email col-md-6"><input id="email" required="" name="email" type="text" value="" size="30" placeholder="Email Address"></span>
        </div>
        <br>
        <p class="form-submit">
            <input name="submit" style="background-color: #41C2A9; color:white; border:none;" type="submit" id="submit" class="submit" value="Post Comment">
        </p>
    </form>
    <div class="container">
         @foreach ($comments as $comment)
        <div style="background-color: white; margin-bottom: 15px; padding: 5px 10px;">
            
            <div class="row mb-0">
                <div class="col-md-12 mt-3">
                    <div class="row align-items-center justify-content-center m-0">
                        <div class="col-2">
                            <img width="85%" style="border-radius: 50%;" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="img" title="user">
                        </div>
                        <div class="col-10">
                            <h3>{{ $comment->name }}</h3>
                            <span class="fs-4">User</span>
                        </div>
                    </div>
                    <div class="col-12 mt-2">
                        <p style="line-height: 1.48; font-size: 16px;">{{ $comment->comment }}</p>
                    </div>
                    <div class="row mb-0">
                        <div class="col-2 fs-4"><b style="cursor:pointer" class="replyBtn">Replies()</b></div>
                        <div class="col-2 fs-3 reply-toggle-button"><span style="color: rgb(44, 184, 107); cursor:pointer;">reply</span></div>
                           <form action="{{ route('comments.reply', ['commentId' => $comment->id]) }}"  id="reply-form" method="post" class="comment-form reply-form" style="display:none;">
        @csrf
        <input type="hidden" name="parent_comment_id" value="{{ $comment->id }}">
        <p class="comment-form-comment">
            <textarea class="u-full-width" required="" name="body" cols="45" rows="8" aria-required="true" placeholder="Reply"></textarea>
        </p>
        <div class="form-fields row">
            <span class="comment-form-author col-md-6"><input required="" name="name" type="text" value="" size="30" placeholder="Fullname"></span>
            <span class="comment-form-email col-md-6"><input name="email" required="" type="text" value="" size="30" placeholder="Email Address"></span>
        </div>
        <br>
        <p class="form-submit">
            <input name="submit" type="submit" style="background-color: #41C2A9; color:white; border:none;" class="submit" value="Post Reply">
        </p>
    </form>
                    </div>
                </div>
            </div>

   

           
                  @if ($comment->replies->isNotEmpty())
                  
                   <div class="row mb-0 mt-2  commentContainer">
                <div class="col-1">
                    <i class="bi bi-arrow-return-right" style="font-size: 25px; color: rgba(138, 134, 134, 0.452);"></i>
                </div>
                <div class="col-md-10 mt-1">
                     @foreach ($comment->replies as $reply)
                     <hr>
                    <div class="row align-items-center justify-content-center m-0">
                        <div class="col-2">
                            <img width="70%" style="border-radius: 50%;" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="img" title="user">
                        </div>
                        <div class="col-10">
                            <h5>{{ $reply->name }}</h5>
                            <span class="fs-4">User</span>
                        </div>
                    </div>
                    <div class="col-12 mt-2">
                        <em><p style="font-size: 16px; line-height: 1.48;">{{ $reply->comment }}</p></em>
                    </div>
                     @endforeach
                </div>
                 </div>
                @endif
           
           



        </div>  
         @endforeach 
    </div>
</div><!-- #respond -->

<!-- Your existing code... -->



<!-- Your existing code... -->


  
                                </div>
                    </div>
                    <!-- end post -->
                    <div class="brack_space"></div>
                </div>
            </div>
                    @include('layouts.sidebar')
            </div>
                    </div>
</section>
@include('layouts.footer')
      </div>
   </div>
      <div id="go-top"><a href="#go-top"><i class="fa fa-angle-up"></i></a></div>
   @include('layouts.scripts')
   <script>
  document.addEventListener('DOMContentLoaded', function() {
    var buttons = document.querySelectorAll('.reply-toggle-button');
    
    buttons.forEach(function(button) {
      button.addEventListener('click', function() {
        var replyForm = this.nextElementSibling;
        if (replyForm.style.display === 'none' || replyForm.style.display === '') {
          replyForm.style.display = 'block';
        } else {
          replyForm.style.display = 'none';
        }
      });
    });
  });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
  $(document).ready(function() {
     
    $('#comment-form').submit(function(event) {
        event.preventDefault();
        
        $.ajax({
            url: $(this).attr('action'),
            method: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                console.log('Comment form submission successful:', response);
                Swal.fire({
                    title: 'Success!',
                    text: response.message,
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    // Optionally, reload the page or perform other actions
                    if (result.isConfirmed) {
                        console.log('Reloading page...');
                        location.reload(); // Reload the page
                    }
                });
                $('#comment-form')[0].reset();
            },
            error: function(xhr, status, error) {
                // Handle errors
                console.error('Error occurred during comment form submission:', error);
            }
        });
    });

    // Submit reply form via AJAX
    $('.reply-form').submit(function(event) {
        event.preventDefault();
        
        $.ajax({
            url: $(this).attr('action'),
            method: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                console.log('Reply form submission successful:', response);
                
                // Show success message with SweetAlert
                Swal.fire({
                    title: 'Success!',
                    text: response.message,
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    // Optionally, reload the page or perform other actions
                    if (result.isConfirmed) {
                        console.log('Reloading page...');
                        location.reload(); // Reload the page
                    }
                });
                $('#reply-form')[0].reset();
            },
            error: function(xhr, status, error) {
                // Handle errors
                console.error('Error occurred during reply form submission:', error);
            }
        });
    });
});
</script>

<script>
    let replyBtn = document.querySelectorAll('.replyBtn');
    let commentContainer = document.querySelectorAll('.commentContainer');
    replyBtn.forEach((btn, index) => {
       btn.addEventListener('click', function() {
            btn.innerHTML="Hide"
            commentContainer[index].classList.toggle('showReplies');
            if(!commentContainer[index].classList.contains("showReplies")){
                btn.innerHTML="Replies()"
            }
        });
    });
</script>
</body>
</html>