<!DOCTYPE html>
<html lang="en-US">
<head>
  @include('layouts.head')
   <meta name="description" content="Discover powerful AI tools for various tasks. Boost productivity and efficiency with cutting-edge technology.">
   <meta name="keywords" content="">
   <title>Clever AI Tools - Empowering Your Workflow with AI Solutions</title>
  <style>
        /
        .hidden-content {
            display: none;
        }
    </style>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
   <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   <script src="https://cdn.jsdelivr.net/gh/LeaVerou/awesomplete@1.1.2/awesomplete.min.js"></script>
@cookieconsentscripts

</head>
<style>
    .awesomplete ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        background-color: white;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .awesomplete li {
        padding: 8px 12px;
        font-size: 14px;
        cursor: pointer;
    }

    .awesomplete li:hover {
        background-color: #f0f0f0; 
    }

    .awesomplete li[aria-selected="true"] {
        background-color: #007bff;
        color: white;
    }
</style>
<style>
    #autoComplete{
        width: 100%;
        color: black;
        font-size: 14px;
        border-radius: 20px;
        padding: 5px 10px;
        outline: none;
        border: 1px solid black;
    }
   #autoComplete::placeholder{
      color: black;
   }
   .testimonial-section {
      background-color: #f8f9fa;
      padding: 80px 0;
   }

   .testimonial {
      border: 1px solid #ddd;
      padding: 20px;
      border-radius: 10px;
      margin-bottom: 30px;
   }

   .testimonial img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      margin-bottom: 20px;
   }

   .testimonial h3 {
      font-size: 20px;
      color: #333;
      margin-bottom: 10px;
   }

   .testimonial p {
      font-size: 16px;
      color: #666;
   }

   .owl-theme .owl-nav {
    margin-top: 0px;
}
   .owl-prev span,
   .owl-next span {
      font-size: 30px;
      background-color: transparent;
   }
   @media screen and (max-width: 900px) {
      #autoComplete{
      width: 99%;
      color: black;
   }
   }
   
</style>
<body class="mobile_nav_class jl-has-sidebar">
     @cookieconsentview
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
   <div class="options_layout_wrapper jl_radius jl_none_box_styles jl_border_radiuss">
      <div class="options_layout_container full_layout_enable_front">
         <!-- Start header -->
         @include('layouts.header')
         @include('layouts.mobileHeader')
         <div class="container mt-4 mb-4" style="background-color: #1EBB9D;">
            <div class="row justify-content-center mt-5 mb-5">
               <div class="col-md-6" style="padding: 10px;">
                 <div class="autoComplete_wrapper" style="margin-top: 10px; width: 100%;">
                     <h3 class="text-center">Instantly Explore AI tools with Single Click</h3>
        <input id="autoComplete" type="text" placeholder="Search for AI Tools..." style="margin-top: 8px;">
    </div>
               </div>
            </div>
         </div>
        
         </div>
          <div class="container">
              <div class="homepage_builder_title">
                <h2 style="font-size: 24px;">Featured Ai Tools</h2>
                <span class="jl_hsubt" style="line-height: 1.2;margin-top: 10px;
    color: #888; font-size: 16px;">Take a Look at Featured AI tools where the World of Innovation is Just a Click Away.
                </span>
            </div>
        <div class="row mt-4" style="row-gap: 20px;">
            @foreach($featuredhome as $postgridbelow)
            <div class="cards col-md-3">
                <div style="border: 1px solid #E4E4E4; box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px; border-radius: 20px;">
                    <div class="card-img">
                        <a href="{{ route('tool.detail', ['parentCategory' => optional($postgridbelow->parentcategory)->slug, 'subCategory' => optional($postgridbelow->subcategory)->slug, 'slug' => $postgridbelow->slug]) }}" class="link_image featured-thumbnail" title="{{ $postgridbelow->toolName }}">
                            <img
                            src='{{ asset("storage/".$postgridbelow->toolLogo) }}'
                            style="width: 100%; height: 185px; object-fit:contain; border-radius: 20px 20px 0 0;"
                            alt='{{ asset("storage/".$postgridbelow->toolLogo) }}' style="cursor: pointer;border-radius: 10px 10px 0 0;" title="{{ $postgridbelow->toolName }}"/>
                        </a>
                    </div>
                    <div class="card-content" style="padding: 10px;">
                        <h3 class="image-post-title" style="margin-bottom: 10px;" title="@if(!empty($postgridbelow->toolTagline))
                                        {{ $postgridbelow->toolTagline }}
                                    @endif">
                            <a href="{{ route('tool.detail', ['parentCategory' => optional($postgridbelow->parentcategory)->slug, 'subCategory' => optional($postgridbelow->subcategory)->slug, 'slug' => $postgridbelow->slug]) }}">
                                    {!! \Illuminate\Support\Str::limit($postgridbelow->toolName, 35) !!}
                    @if(!empty($postgridbelow->toolTagline))
                        <!--- {{ $postgridbelow->toolTagline }}-->
                        - {!! \Illuminate\Support\Str::limit($postgridbelow->toolTagline, 35) !!}
                    @endif
                            </a>
                        </h3>
                          
                    <span class="post-date" style="color: #888; font-size: 13px; text-transform: capitalize;">
                        <i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($postgridbelow->created_at)->format('M d, Y') }}
                    </span>
              
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
        <div class="container">
      <div class="homepage_builder_title">
        <h2 style="font-size: 24px">Recently Added Tools</h2>
        <span
          class="jl_hsubt"
          style="
            line-height: 1.2;
            margin-top: 10px;
            color: #888;
            font-size: 16px;
          "
          >Explore the latest and greatest tools Added for your viewing.
        </span>
      </div>
      <div class="row mt-4" style="row-gap: 20px">
        @foreach($recentlyadded as $postgridbelow)
    @if($loop->iteration > 8)
        @break
    @endif

    <div class="cards col-md-3">
        <div style="border: 1px solid #e4e4e4; box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px; border-radius: 20px;">
            <div class="card-img">
           <a href="{{ route('tool.detail', ['parentCategory' => optional($postgridbelow->parentcategory)->slug, 'subCategory' => optional($postgridbelow->subcategory)->slug, 'slug' => $postgridbelow->slug]) }}"> 
 


                    <img src='{{ asset("storage/".$postgridbelow->toolLogo) }}' alt='{{ $postgridbelow->toolName }}' style="cursor: pointer; border-radius: 20px 20px 0 0; width: 100%; height: 185px; object-fit:contain;" title="{{ $postgridbelow->toolName }}" />
                </a>
            </div>
            <div class="card-content" style="padding: 10px">
                <h3 class="image-post-title" style="margin-bottom: 10px" title="@if(!empty($postgridbelow->toolTagline)){{ $postgridbelow->toolTagline }}@endif">
                    <a href="{{ route('tool.detail', ['parentCategory' => optional($postgridbelow->parentcategory)->slug, 'subCategory' => optional($postgridbelow->subcategory)->slug, 'slug' => $postgridbelow->slug]) }}">
                        {!! \Illuminate\Support\Str::limit($postgridbelow->toolName, 35) !!}
                        @if(!empty($postgridbelow->toolTagline))
                            - {!! \Illuminate\Support\Str::limit($postgridbelow->toolTagline, 35) !!}
                        @endif
                    </a>
                </h3>
                <span class="post-date" style="color: #888; font-size: 13px; text-transform: capitalize">
                    <i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($postgridbelow->created_at)->format('M d, Y') }}
                </span>
            </div>
        </div>
    </div>
@endforeach

      </div>
    </div>
        
         @include('layouts.topoftheweak') 
         
         <div class="container">
      <div class="homepage_builder_title">
        <h2 style="font-size: 24px">Popular Ai Tools in Last 24 Hours</h2>
        <span
          class="jl_hsubt"
          style="
            line-height: 1.2;
            margin-top: 10px;
            color: #888;
            font-size: 16px;
          "
          >Top Rated Tools That guarantee Optimal Performance.
        </span>
      </div>
      <div class="row mt-4" style="row-gap: 20px">
        @foreach($toptools as $postgridbelow)
        <div class="cards col-md-3">
          <div
            style="
              border: 1px solid #e4e4e4;
              box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
              border-radius: 20px;
            "
          >
            <div class="card-img">
              <a
                href="{{ route('tool.detail', ['parentCategory' => optional($postgridbelow->parentcategory)->slug, 'subCategory' => optional($postgridbelow->subcategory)->slug, 'slug' => $postgridbelow->slug]) }}"
                class="link_image featured-thumbnail"
                title="{{ $postgridbelow->toolName }}"
              >
                <img
                  src='{{ asset("storage/".$postgridbelow->toolLogo) }}'
                  alt='{{ $postgridbelow->toolName }}'
                  style="cursor: pointer; border-radius: 20px 20px 0 0; width: 100%; height: 185px; object-fit:contain;"
                  title="{{ $postgridbelow->toolName }}"
                />
              </a>
            </div>
            <div class="card-content" style="padding: 10px">
              <h3 class="image-post-title" style="margin-bottom: 10px" title="@if(!empty($postgridbelow->toolTagline))
                         {{ $postgridbelow->toolTagline }}
                    @endif">
                <a href="{{ route('tool.detail', ['parentCategory' => optional($postgridbelow->parentcategory)->slug, 'subCategory' => optional($postgridbelow->subcategory)->slug, 'slug' => $postgridbelow->slug]) }}">
                    {!! \Illuminate\Support\Str::limit($postgridbelow->toolName, 35) !!}
                    @if(!empty($postgridbelow->toolTagline))
                        <!--- {{ $postgridbelow->toolTagline }}-->
                        - {!! \Illuminate\Support\Str::limit($postgridbelow->toolTagline, 35) !!}
                    @endif
                </a>
              </h3>

              <span
                class="post-date"
                style="color: #888; font-size: 13px; text-transform: capitalize"
              >
                <i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($postgridbelow->created_at)->format('M d, Y') }}
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
            
      <div class="container">
         <div
            class="jelly_homepage_builder jl_nonav_margin homepage_builder_3grid_post jl_fontsize18 jl_cus_grid4   colstyle1 mb-0">
            <div class="homepage_builder_title">
               <h2>Clever AI Tools: Testimonials That Speak Volumes!
</h2>
            </div>
         </div>
         <div class="owl-carousel owl-theme mt-3">
            <div class="w-100">
               <div class="testimonial text-center" style="margin-bottom: 0px;">
                  <div class="col-12">
                     <i style="color:#FFB900; font-size: 18px;" class="bi bi-star-fill"></i>
                     <i style="color:#FFB900; font-size: 18px;" class="bi bi-star-fill"></i>
                     <i style="color:#FFB900; font-size: 18px;" class="bi bi-star-fill"></i>
                     <i style="color:#FFB900; font-size: 18px;" class="bi bi-star-fill"></i>
                     <i style="color:#FFB900; font-size: 18px;" class="bi bi-star-fill"></i>
                  </div>
                  <h3>Sarah M</h3>
                  <p>"Unparalleled insights! Thanks to Clever AI Tools, I've stayed ahead of the game."</p>
               </div>
            </div>
            <div class="w-100">
               <div class="testimonial text-center" style="margin-bottom: 0px;">
                  <div class="col-12">
                     <i style="color:#FFB900; font-size: 18px;" class="bi bi-star-fill"></i>
                     <i style="color:#FFB900; font-size: 18px;" class="bi bi-star-fill"></i>
                     <i style="color:#FFB900; font-size: 18px;" class="bi bi-star-fill"></i>
                     <i style="color:#FFB900; font-size: 18px;" class="bi bi-star-fill"></i>
                     <i style="color:#FFB900; font-size: 18px;" class="bi bi-star-fill"></i>
                  </div>
                  <h3>David R</h3>
                  <p>"Clever AI Tools is my go-to for staying updated on the latest AI tools. It's a game-changer!"</p>
               </div>
            </div>
            <div class="w-100">
               <div class="testimonial text-center" style="margin-bottom: 0px;">
                  <div class="col-12">
                     <i style="color:#FFB900; font-size: 18px;" class="bi bi-star-fill"></i>
                     <i style="color:#FFB900; font-size: 18px;" class="bi bi-star-fill"></i>
                     <i style="color:#FFB900; font-size: 18px;" class="bi bi-star-fill"></i>
                     <i style="color:#FFB900; font-size: 18px;" class="bi bi-star-fill"></i>
                     <i style="color:#FFB900; font-size: 18px;" class="bi bi-star-fill"></i>
                  </div>
                  <h3>Emily K</h3>
                  <p>"Incredible resource! Clever AI Tools keeps me informed with cutting-edge AI news."</p>
               </div>
            </div>
            <div class="w-100">

               <div class="testimonial text-center" style="margin-bottom: 0px;">
                  <div class="col-12">
                     <i style="color:#FFB900; font-size: 18px;" class="bi bi-star-fill"></i>
                     <i style="color:#FFB900; font-size: 18px;" class="bi bi-star-fill"></i>
                     <i style="color:#FFB900; font-size: 18px;" class="bi bi-star-fill"></i>
                     <i style="color:#FFB900; font-size: 18px;" class="bi bi-star-fill"></i>
                     <i style="color:#FFB900; font-size: 18px;" class="bi bi-star-fill"></i>
                  </div>
                  <h3>Alex B</h3>
                  <p>"Clever AI Tools has been invaluable for navigating the ever-evolving world."</p>
               </div>
            </div>
            <div class="w-100">

               <div class="testimonial text-center" style="margin-bottom: 0px;">
                  <div class="col-12">
                     <i style="color:#FFB900; font-size: 18px;" class="bi bi-star-fill"></i>
                     <i style="color:#FFB900; font-size: 18px;" class="bi bi-star-fill"></i>
                     <i style="color:#FFB900; font-size: 18px;" class="bi bi-star-fill"></i>
                     <i style="color:#FFB900; font-size: 18px;" class="bi bi-star-fill"></i>
                     <i style="color:#FFB900; font-size: 18px;" class="bi bi-star-fill"></i>
                  </div>
                  <h3>Jessica L</h3>
                  <p>"From novice to expert, Clever AI Tools has been my trusted companion on the journey."</p>
               </div>
            </div>

         </div>
      </div>
       <div class="jl_home_section mt-4">
   <div class="container">
    <div class="text-center" style="background-color: #1EBB9D; padding: 60px 25px;">
        <h2 style="font-size: 35px; color: white;">Subscribe to Our Newsletter</h2>
        <p style="color: white;">Stay Tuned with all the latest news, exclusive offers, and valuable insights by subscribing to our newsletter. Become part of our community and ensure you never miss out on new AI tools, AI news, exiting blogs and thrilling promotions.
</p>
        <form method="POST" action="{{ route('subscribe.store') }}">
            @csrf <!-- CSRF protection for Laravel forms -->
            <input type="email" name="email" placeholder="EMAIL" style="min-width: 280px; width: 40%; border-radius: 10px 0 0 10px; padding: 8px 12px; border:none; outline: none; font-size: 14px;">
            <button type="submit" style="border-radius: 0 10px 10px 0; padding: 8px 10px; border:none; outline: none; font-size: 14px; background-color: white;">Submit</button>
        </form>
    </div>
</div>
      <div class="container mt-5">
        <div
            class="jelly_homepage_builder jl_nonav_margin homepage_builder_3grid_post jl_fontsize22 jl_cus_grid3 colstyle1">
            <div class="homepage_builder_title">
                <h2>
                    Latest AI News
                </h2>
                <span class="jl_hsubt">Stay Updated with Latest AI News Stories from Around the World
                </span>
            </div>
           
            <div class="jl_wrapper_row">
                <div class="row">
                    @foreach($news as $news)
                    <div class="col-md-4 blog_grid_post_style  jl_row_1">
                        <div class="jl_grid_box_wrapper">
                            <div class="image-post-thumb">
                                <a href="{{ url('ai-news/' . $news->slug) }}" class="link_image featured-thumbnail"
                                    title="{{ $news->title }}" style="border: 1px solid rgba(0, 0, 0, .125);">
                                                       <img width="780" height="450"
    src="{{ asset('storage/admin/images/' . $news->image) }}"
    class="attachment-disto_large_feature_image size-disto_large_feature_image wp-post-image"
    alt="{{ $news->title }}" title="{{ $news->title }}"/>
                                    <div class="background_over_image"></div>
                                </a> <span class="meta-category-small"><a class="post-category-color-text"
                                        style="background:#d66300" href="#">News</a></span>
                            </div>
                            <div class="post-entry-content">
                                <h3 class="image-post-title"><a href="{{ url('ai-news/' . $news->slug) }}">
                                       {{ $news->title }}  </a>
                                </h3>
                                <span class="jl_post_meta"><span class="post-date"><i class="fa fa-clock-o"></i>{{ \Carbon\Carbon::parse($news->created_at)->format('M d, Y') }}</span></span>
                                <div class="content_post_grid">
                                    {!! \Illuminate\Support\Str::limit($news->content, 105) !!}...
                                </div>
                            </div>
                        </div>
                    </div>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
      
      </div>
     
          <div class="container col-12">

      <p>Welcome to CleverAiTools, a friendly and inviting space where the engaging world of artificial intelligence
         comes to life. In this era of incredible technological progress, we aim to provide in-depth knowledge of AI
         tools. CleverAiTools is not just a website but a platform that offers you a wealth of information, in-depth
         analyses, and practical knowledge on a wide range of AI tools.</p>
      <div class="hidden-content">
         <p>We are dedicated to offering you the guidance and knowledge necessary to navigate the complex world of
            artificial intelligence. Come and embark on an insightful journey with us, where every discovery you make
            adds to your knowledge and proficiency in the world of Clever AI Tools.</p>
         <h3>Welcome to CleverAiTools - Your Gateway to AI Era</h3>
         <p><br /> CleverAiTools is your hub for AI innovation. We will provide insights into AI tools of various
            domains, from reshaping content creation to business solutions and security. At CleverAiToolss, we will
            Uncover AI wonders in video, coding, voice, AI chatbots, AI design, AI 3D, and AI education.</p>
         <h4>1. Text&amp; Writing </h4>
         <p>Learn about the exciting realm of AI-driven content with CleverAiTools. Find out the fantastic
            capabilities of automated writing, natural language processing, and sentiment analysis tools. Learn with
            CleverAiTools to experience AI's seamless power in copywriting, language understanding, and content
            optimization for a text-based AI experience.</p>
         <h4>2. AI Image&nbsp;</h4>
         <p>Knowledge of&nbsp;the incredible strength of AI in image processing with CleverAiTools. Enhance your
            understanding of AI image recognition, neural network image processing, and image classification. Learn
            the vast realm of computer vision technology and dive into the fascinating world of automated image
            interpretation and image segmentation.</p>
         <h4>3. AI Video </h4>
         <p>&nbsp;Transform your video experience with AI tools featured on CleverAiTools. Analyze the&nbsp;AI video
            editing,&nbsp;video recognition, and&nbsp;deep learning&nbsp;applications. CleverAiToolss provides
            information about AI video tools for&nbsp;real-time video AI,&nbsp;automated video editing,
            and&nbsp;AI-based video surveillance&nbsp;for cutting-edge video content analysis.</p>
         <h4>4. Code&amp;IT&nbsp;</h4>
         <p>Find out the fundamental aspects of coding and IT with CleverAiTools. Acquire a solid foundation in
            artificial intelligence, delve into machine learning principles, and learn the fundamentals of coding for
            those new to the field. CleverAiTools website provides AI's future, delves into blockchain technology,
            and grasps the fundamentals of emerging tech trends.</p>
         <h4>5. AI Voice</h4>
         <p>Welcome to CleverAiTools - your gateway to the exciting world of AI voice technology! Come and explore
            the fascinating realm of voice assistants, where you can delve into the intricacies of natural language
            processing and unlock the power of voice recognition technology. Discover the world of conversational AI,
            voice-enabled devices, and neural text-to-speech, and create a seamless and immersive voice experience
            that will blow your mind!</p>
         <h4>6. AI Business </h4>
         <p>Analyze the world of AI solutions available on CleverAiTools to help you navigate the business landscape.
            Learn the power of AI-driven process automation, predictive analytics, and machine learning to drive
            business growth. Improve customer relationships using our reliable information about CRM systems powered
            by AI technology. Gain valuable insights from CleverAiTools to optimize your supply chain.</p>
         <h4>7. AI Marketing </h4>
         <p>Take your marketing to the next level with CleverAiTools's cutting-edge AI-powered insights. Dig out the
            world of automated marketing solutions, personalized marketing automation, and the power of machine
            learning to achieve marketing success. Discover the power of behavioural targeting, algorithmic
            marketing, and AI-driven content marketing strategies.</p>
         <h4>8. AI Detector </h4>
         <p>Enhance your security by utilizing the advanced AI detection tools available on CleverAiTools. Learn
            cutting-edge technology in surveillance systems, advanced threat detection, and innovative security
            solutions. Explore the world of neural network surveillance and stay one step ahead with real-time threat
            detection, ensuring your security analytics are comprehensive.</p>
         <h4>9. AI Chatbot </h4>
         <p>Start your chatbot journey with CleverAiTools. Uncover the world of chatbot development, delve into
            conversational AI, and explore a range of user-friendly chatbot tools. Examine the world of natural
            language processing, AI chat integration, and AI chatbots for websites through CleverAiTools's
            easy-to-follow guidelines.</p>
         <h4>10. Design&amp;Art </h4>
         <p>"Unleash your creativity with the help of CleverAiTools's AI-powered features." Learn the engaging world
            of generative art, neural style transfer, and the captivating realm of AI-generated graphics. Immerse
            yourself in deep learning art, algorithmic art creation, and AI-enhanced design to spark a creative
            revolution.</p>
         <h4>11. Life Assistant </h4>
         <p>Experience a transformative shift in your daily routine with CleverAiTools's life assistant category.
            Learn the wonders of AI personal assistants, smart home automation, and devices that can be controlled
            with just your voice. Enhance your everyday routines with intelligent life companions and innovative home
            technologies.</p>
         <h4>12. AI 3D </h4>
         <p>Learn the captivating world of the AI 3D category with CleverAiTools, where you can immerse yourself in
            the wonders of the third dimension. Uncover the exciting world of AI-powered 3D modelling, delve into the
            fascinating realm of deep learning for 3D graphics, and unlock the potential of automated 3D design.
            Experience the powerful combination of artificial intelligence and augmented reality, opening a new era
            of immersive 3D applications.</p>
         <h4>13. AI Education </h4>
         <p>Start your AI learning journey with CleverAiTools's comprehensive AI education category. Learn the
            foundations of AI, delve into the fundamentals of machine learning, and unlock the potential of AI
            certification. Explore a wide range of online AI classes, discover AI learning platforms, and unravel the
            mysteries of AI through beginner-friendly guidelines.</p>
         <h4>14. AI Prompt </h4>
         <p>Learn the practical uses of AI in everyday situations, gain insights into the workings of natural
            language processing, and delve into the fundamentals of neural networks. Explore the world of AI, from
            its fundamental principles to its exciting future possibilities.</p>
         <h4>15. AI productivity</h4>
         <p>Enhance your productivity using the advanced AI tools available on CleverAiTools. Discover a range of
            AI-powered tools that enhance productivity, streamline workflows, and revolutionize project management.
            Experience the incredible efficiency and seamless workflows that come with AI-powered task automation.
         </p>
      </div>
     <div class="text-center mb-5">
      <button onclick="toggleContent()" class="btn btn-primary fs-4">Read More</button>
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
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let cookieClose = document.getElementById("cookie-close");
        let cookieBox = document.getElementById("cookie-box");
        cookieClose.addEventListener("click", () => {
            cookieBox.style.display = "none";
        });
    });
</script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
   <script>
      $(document).ready(function () {
         var owl = $('.owl-carousel');
         owl.owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
               0: {
                  items: 1,
                  nav: true
               },
               600: {
                  items: 3,
                  nav: false
               },
               1000: {
                  items: 5,
                  nav: true,
                  loop: false
               }
            }
         });

      });
   </script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const input = document.querySelector("#autoComplete");
        const notFoundMessage = document.createElement('div'); // Create a div element for the not found message
        notFoundMessage.classList.add('not-found-message'); // Add a class for styling

        const awesomplete = new Awesomplete(input, {
            minChars: 1,
            maxItems: 5, // maximum number of suggestions to show
            autoFirst: true, // automatically select the first item in the list
            filter: function(text, input) {
                return Awesomplete.FILTER_CONTAINS(text, input.match(/[^,]*$/)[0]);
            },
            replace: function(text) {
                var before = this.input.value.match(/^.+,\s*|/)[0];
                this.input.value = before + text + ", ";
            }
        });

        input.addEventListener("awesomplete-select", function(event) {
            const slug = event.text.label;

            // Fetch parent and subcategory dynamically
            fetch(`/getCategoryInfo/${slug}`)
                .then(response => response.json())
                .then(data => {
                    const parentcategory = data.parentcategory;
                    const subcategory = data.subcategory;

                    // Construct URL using fetched parent and subcategory
                    const baseUrl = `{{ route('tool.detail', ['parentCategory' => ':parentcategory', 'subCategory' => ':subcategory', 'slug' => ':slug']) }}`;
                    const url = baseUrl
                        .replace(':parentcategory', parentcategory)
                        .replace(':subcategory', subcategory)
                        .replace(':slug', slug);
                    
                    // Redirect to the constructed URL
                    window.location.href = url;
                })
                .catch(error => console.error('Error fetching category info:', error));
        });

        input.addEventListener("input", function() {
            // Remove the not found message if it exists
            if (document.querySelector('.not-found-message')) {
                document.querySelector('.not-found-message').remove();
            }

            // Fetch data here and update Awesomplete's list
            fetch('/search?query=' + input.value)
                .then(response => response.json())
                .then(data => {
                    if (data.tools.length === 0) {
                        // If no search results are found, display a "not found" message
                        notFoundMessage.textContent = "No results found";
                        input.parentNode.appendChild(notFoundMessage); // Append the message below the input field
                    } else {
                        const suggestions = data.tools.map(tool => tool.slug);
                        awesomplete.list = suggestions; 
                    }
                })
                .catch(error => console.error('Error fetching data:', error));
        });
    });
</script>




 @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 2500
            });
        </script>
    @endif
 @if(session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'error',
                text: '{{ session('error') }}',
                showConfirmButton: false,
                timer: 2500
            });
        </script>
    @endif

</body>
</html>

    