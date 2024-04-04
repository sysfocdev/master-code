        <!DOCTYPE html>
    <html lang="en-US">
    <head>
         @include('layouts.head')
   <meta name="description" content="Explore a comprehensive collection of AI tools for various tasks. Empower your projects with cutting-edge technology.
">
   <meta name="keywords" content="">
   <title>Explore Our Full Suite of AI Tools</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
       integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
       integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
       crossorigin="anonymous"></script>
    </head>
    <style>
      .sidebar {
          height: 100vh;
          overflow-x: hidden;
          overflow-y: scroll;
          position: sticky;
          top: 0;
          margin: 0;
      }
  
      /* Define scrollbar track */
      .sidebar::-webkit-scrollbar {
          width: 7px;
      }
  
      /* Define scrollbar thumb */
      .sidebar::-webkit-scrollbar-thumb {
          background-color: #88888815;
          /* Color of the thumb */
          border-radius: 5px;
          /* Radius of the thumb */
      }
  
      /* Define scrollbar track */
      .sidebar::-webkit-scrollbar-track {
          background-color: #f1f1f1;
          /* Color of the track */
      }
  
      /* Define scrollbar corner */
      .sidebar::-webkit-scrollbar-corner {
          background-color: transparent;
          /* Color of the corner */
      }
      .active{
          padding: 7px 10px;
          color: blueviolet;
          background-color: rgba(137, 43, 226, 0.13);
      }
      .category_image_wrapper_main .category_image_bg_image:hover {
          background-color: #1EBA9C;
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
            <form method="get" class="searchform_theme" action=/tooldetail>
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
                      <h3 class="categories-title title">tools</h3>
                      <p>Sample category description goes here</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <style>
    .active-tool {
        color: #2fbea1; /* Change this to your desired color */
    }
</style>

          <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 sidebar d-none d-md-block" >
               <div class="mt-4">
    <ul style="padding: 10px;">
        @foreach($mainTools as $mainTool)
            <li style="margin-top:15px; list-style: none;"><a style="color:black; padding: 7px 10px; font-size: 16px; text-decoration:none;" href="#{{ $mainTool->slug }}" class="text-decoration-none sidebarAnchar">{{ $mainTool->toolName }}</a></li>
        @endforeach
    </ul>
</div>
</div>

<div class="col-md-9 mt-5">
    <div class="row mx-3" style="gap: 15px;">
        <div class="row category_image_wrapper_main">
            @foreach($mainTools as $mainTool)
                <div id="{{ $mainTool->slug }}" class="col-md-12 tool-section"> <!-- Add 'tool-section' class for each tool section -->
                    <strong><h3 class="tool-name" data-tool="{{ $mainTool->toolName }}">{{ $mainTool->toolName }}</h3></strong>
                    @if(count($mainTool->subTools) > 0)
                        <div class="row" style="row-gap: 10px;">
                            @foreach($mainTool->subTools as $subTool)
                                <div class="col-md-3">
                                    <div class="category_image_bg_image" style="background-image: url('');">
                                        <a class="category_image_link" href="{{ route('tool.details', ['parentSlug' => $mainTool->slug, 'childSlug' => $subTool->slug]) }}">
                                            <span class="jl_cm_overlay">
                                                <span class="jl_cm_name" style="float: none;">{{ $subTool->toolName }}</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</div>


            </div>
        </div>
           <!-- Other HTML code above -->


<!-- Other HTML code below -->

                
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
       <script>

        const sidebarLinks = document.querySelectorAll('li a');
    sidebarLinks.forEach(link => {
        link.addEventListener('click', function() {
            sidebarLinks.forEach(link => {
                link.classList.remove('active');
            });
            this.classList.add('active');
        });
    });
    </script>
 <script>
    document.addEventListener("DOMContentLoaded", function() {
        const sidebarLinks = document.querySelectorAll('.sidebarAnchar'); // Select all sidebar links
        const toolSections = document.querySelectorAll('.tool-section'); // Select all tool sections
        const headerHeight = document.querySelector('header').offsetHeight; // Get the height of the header

        sidebarLinks.forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent the default behavior of the link

                // Remove the active class from all tool names
                document.querySelectorAll('.tool-name').forEach(name => {
                    name.classList.remove('active-tool');
                });

                // Add the active class to the clicked tool name
                const toolName = this.textContent;
                const activeTool = document.querySelector(`.tool-name[data-tool="${toolName}"]`);
                if (activeTool) {
                    activeTool.classList.add('active-tool');
                }

                // Get the ID of the target tool section from the link's href attribute
                const targetId = this.getAttribute('href').substring(1);

                // Scroll to the target tool section with an offset
                const targetSection = document.getElementById(targetId);
                if (targetSection) {
                    const offset = headerHeight + 10; // Additional 20px below the header
                    window.scrollTo({
                        top: targetSection.offsetTop - offset,
                        behavior: 'smooth'
                    });
                }
            });
        });
    });
</script>



    </body>
    </html>