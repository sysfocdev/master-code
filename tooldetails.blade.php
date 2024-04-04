
<!DOCTYPE html>
<html lang="en-US">
<head>
      @include('layouts.head')
  <meta name="description" content="{{ $tools->metaDescription }}">
   <meta name="keywords" content="">
 <title>{{ $tools->metaTitle }}</title>
 <!-- Open Graph meta tags -->
    <meta property="og:title" content="{{ $tools->metaTitle }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="{{ asset('storage/'.$tools->toolLogo) }}" />
    
    <!-- Twitter Card meta tags -->
    <meta name="twitter:title" content="{{ $tools->metaTitle }}" />
    <meta name="twitter:description" content="{{ $tools->metaDescription }}" />
    <meta name="twitter:image" content="{{ asset('storage/'.$tools->toolLogo)}}">
    <meta name="twitter:card" content="summary_large_image" />



  
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<style>
  
    .main-img {
      width: 50%;
    }
  
    .main-img img {
      width: 100%;
      height: auto;
      object-fit: cover;
       border:1px solid rgba(0, 0, 0, 0.425);
    }
    .select-options {
      padding: 5px 10px;
      cursor: pointer;
      font-size: 16px
    }
    .select-options option{
      cursor: pointer;
    }
    .faqs-section h4 {
      border: 1px solid black;
      padding: 10px;
      cursor: pointer;
      font-size: 22px;
      border-radius: 5px;
    }
  
    .faqs-section p {
      display: none;
    }
  
    @media screen and (max-width: 770px) {
      .main-img {
        width: 100%;
      }
      .container{
    margin-left: 10px;
  }
    }
  
    .accordion {
      width: 100%;
    }
  
    .accordion-item {
      margin-top: 10px;
      /* border: 1px solid rgba(0, 0, 0, 0.425); */
      border-radius: 8px;
      margin-bottom: 5px;
      box-shadow: -1px 15px 11px -15px rgba(0,0,0,0.59);
-webkit-box-shadow: -1px 15px 11px -15px rgba(0,0,0,0.59);
-moz-box-shadow: -1px 15px 11px -15px rgba(0,0,0,0.59);
    }
  
    .accordion-header {
      padding: 5px 10px;
      cursor: pointer;
      border-radius: 10px;
    }
    .accordion-content {
      display: none;
      border: 1px solid rgba(148, 143, 143, 0.219);
      padding: 5px;
      background-color: rgba(247, 244, 244, 0.651);
      border-radius: 7px;
    }
  
    .accordion-item.active .accordion-content {
      display: block;
    }
  </style>
<style>
    .content ul li{
        font-size: 15px;
        font-family: Lato !important;
    font-weight: 400 !important;
    }
</style>
<body>
    @include('layouts.header')
     @include('layouts.mobileHeader')
    
     <div class="container">
        <div class="row">
         <div class="col-md-6 main-img">
    <img src="{{ asset('storage/'.$tools->toolLogo) }}" alt="img" title="{{ $tools->toolName }}"/>

    <h3 class="mt-5" style="font-size: 22px">Social media sites:</h3>

    @if($tools->facebook)
        <a href="{{$tools->facebook }}" target="_blank"><span><i style="font-size: 18px; color:black;" class="bi bi-facebook"></i></span></a>
    @endif

    @if($tools->twitter)
        <a href="{{$tools->twitter }}" target="_blank"><span><i style="font-size: 18px; margin-left:10px; color:black;" class="bi bi-twitter"></i></span></a>
    @endif

    @if($tools->instagram)
        <a href="{{$tools->instagram }}" target="_blank"><span><i style="font-size: 18px; margin-left:10px; color:black;" class="bi bi-instagram"></i></span></a>
    @endif

    @if($tools->telegram)
        <a href="{{$tools->telegram }}" target="_blank"><span><i style="font-size: 18px; margin-left:10px; color:black;" class="bi bi-telegram"></i></span></a>
    @endif

    @if($tools->tiktok)
        <a href="{{$tools->tiktok }}" target="_blank"><span><i style="font-size: 18px; margin-left:10px; color:black;" class="bi bi-tiktok"></i></span></a>
    @endif

    @if($tools->pinterest)
        <a href="{{$tools->pinterest }}" target="_blank"><span><i style="font-size: 18px; margin-left:10px; color:black;" class="bi bi-pinterest"></i></span></a>
    @endif

    @if($tools->linkedin)
        <a href="{{$tools->linkedin }}" target="_blank"><span><i style="font-size: 18px; margin-left:10px; color:black;" class="bi bi-linkedin"></i></span></a>
    @endif
</div>


          <div class="col-md-6 pl-5">
            <div>
              <div class="col-12 mt-3">
                <h2 style="font-size: 26px">{{ $tools->toolName }} </h2>
              </div>
              <div class="col-12 mt-3">
                <p style="font-size: 16px">Website: <a href="{{ $tools->toolURL }}" target="_blank">{{ $tools->toolURL }} </a></p>
              </div>
            </div>
            
              <i style="font-size: 16px">{{ $tools->toolTagline }} </i>
           
            <div class="row" style="
                  display: flex;
                  align-items: center;
                  justify-content: space-between;
                ">
              <div class="col-md-6">
                <h4 style="font-size: 30px;">${{ $tools->lowestPriceOptions }}</h4>
              </div>
              <div class="col-md-6">
                 <div class="accordion-item">
                      <div class="accordion-header" style="font-size: 16px; display:flex; justify-content:space-between; align-items: center;">
                          <p>Billing Options </p>
                          <i class="bi bi-plus-circle-fill"></i>
                      </div>
                      <div class="accordion-content">
                        <p>{{$tools->bill }}</p>
                      </div>
                    </div>
              </div>
            </div>
            <div class="row mt-4">
             
              <div class="row">
                <div class="col-md-6">
                  <div class="accordion">
                    <div class="accordion-item">
                      <div class="accordion-header" style="font-size: 16px; display:flex; justify-content:space-between; align-items: center;">
                          <p>Subscription Options </p>
                          <i class="bi bi-plus-circle-fill"></i>
                      </div>
                      <div class="accordion-content">
                        <p>{{$tools->sub }}</p>
                      </div>
                    </div>
          
                    <div class="accordion-item">
                      <div class="accordion-header" style="font-size: 16px; display:flex; justify-content:space-between; align-items: center;">
                          <p>Subscription Packages</p>
                          <i class="bi bi-plus-circle-fill"></i>
                      </div>
                      <div class="accordion-content">
                        <p>{{ $tools->pack }}</p>
                      </div>
                    </div>
          
                    <div class="accordion-item">
                      <div class="accordion-header" style="font-size: 16px; display:flex; justify-content:space-between; align-items: center;">
                          <p>Community</p>
                          <i class="bi bi-plus-circle-fill"></i>
                      </div>
                      <div class="accordion-content">
                        <p>{{ $tools->community }}</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="accordion">
                    <div class="accordion-item">
                      <div class="accordion-header" style="font-size: 16px; display:flex; justify-content:space-between; align-items: center;">
                          <p>Compatibility</p>
                          <i class="bi bi-plus-circle-fill"></i>
                      </div>
                      <div class="accordion-content">
                        <p>{{ $tools->device }}</p>
                      </div>
                    </div>
          
                    <div class="accordion-item">
                      <div class="accordion-header" style="font-size: 16px; display:flex; justify-content:space-between; align-items: center;">
                          <p>Social Media Sites</p>
                          <i class="bi bi-plus-circle-fill"></i>
                      </div>
                      <div class="accordion-content">
                        <p>{{ $tools->smss }}</p>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <div class="accordion-header" style="font-size: 16px; display:flex; justify-content:space-between; align-items: center;">
                          <p>API</p>
                          <i class="bi bi-plus-circle-fill"></i>
                      </div>
                      <div class="accordion-content">
                        <p>{{ $tools->api }}</p>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row mt-2">
@if ($tools->toolTagDescription)
            <div class="col-12">
              <h4 style="font-size: 22px;">Tags:</h4>
              <!-- Assuming $tool is passed to the view -->
        <div style="display:flex; flex-wrap:wrap; gap:5px;">
        @foreach (explode(',', $tools->toolTagDescription) as $tag)
            <span style="padding: 5px 10px;
      border: 1px solid rgba(0, 0, 0, 0.418);
      border-radius: 8px;
      font-size: 14px;
      cursor: pointer;">{{ $tag }}</span>
          
        @endforeach
        </div>
            </div>
            @endif
          
        </div>
        <hr class="mt-4">
        <div class="row mt-4">
          <div class="col-md-4">
            <h4 style="font-size: 22px;">What is it?</h4>
            <p>
             {!! $tools->toolDescription !!}
            </p>
          </div>
          <div class="col-md-8">
            <h4 style="font-size: 22px;">Top Features</h4>
            <div class="row mt-4">
              <div class="col-md-6">  
                <p><i class="bi bi-check-circle-fill" style="margin-right: 5px;"></i>  {{ $tools->field1 }}</p>
                <p><i class="bi bi-check-circle-fill" style="margin-right: 5px;"></i>  {{ $tools->field2 }}</p>
                <p><i class="bi bi-check-circle-fill" style="margin-right: 5px;"></i>  {{ $tools->field3 }}.</p>
              </div>
              <div class="col-md-6">
                <p><i class="bi bi-check-circle-fill" style="margin-right: 5px;"></i>  {{ $tools->field3 }}</p>
                <p><i class="bi bi-check-circle-fill" style="margin-right: 5px;"></i>  {{ $tools->field4 }}</p>
                <p><i class="bi bi-check-circle-fill" style="margin-right: 5px;"></i>  {{ $tools->field5 }}</p>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="row mt-4">
          <div class="col-12 content">
            <h4 style="font-size: 22px;">Overview</h4>
            <p>
               {!! $tools->toolOverview !!}
            </p>
          </div>
        </div>
        <hr />
        <div class="row mt-4">
          <div class="col-md-8">
            <h3 style="font-size: 22px;">Launch embeds</h3>
            <p>
              Boost Your Tool's reputation with Website Badge! Engage Your Community's Support Effortlessly by Embedding Them on Your Homepage or Footer.
            </p>
          </div>
          <div class="col-md-4">
            <!--<img src="https://cleveraitools.ai/images/bannerimages/CleverAIToolsf.png" alt="cleverai-logo" width="280px" height="280px" class="text-center" title="cleveraitools"/>-->
            
            <div class="row mt-2" style="
                  display: flex;
                  justify-content: space-around;
                  align-items: center;
                ">
            <div class="col-12">
    <a href="#" id="embedLink" target="_blank">
        <img src="https://cleveraitools.ai/images/bannerimages/CleverAIToolsf.png" width="280px" height="280px" alt="">
    </a>
</div>
              
              <div class="col-12">
                  <button id="copyButton" style="
        margin-top: 10px;
        padding: 8px 10px;
        background-color: transparent;
        border: 1px solid rgba(0, 0, 0, 0.336);
        border-radius: 3px;
        font-size: 16px;
        cursor: pointer;
    ">
        Copy embed code
    </button> &nbsp;&nbsp;
                <span style="font-size: 16px; cursor:pointer;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Click on 'Copy embed code' and paste this code into the source code of the home page of your website.">How to install?</span>
              </div>
            </div>
          </div>
        </div>
<h4 style="font-size: 22px;">AI Tool Techs And Specs:</h4>
 <br>
        <div  class="col-md-12 p-0">
          <div class="col-md-3">
    <table class="table table-hover col-6">
        <tbody style="font-size: 12px;">
            @if($tools && $tools->api)
            <tr>
                <th scope="row">API</th>
                <td>{{ $tools->api }}</td>
            </tr>
            @endif

            @if($tools && $tools->community)
            <tr>
                <th scope="row">Community</th>
                <td>{{ $tools->community }}</td>
            </tr>
            @endif

            @if($tools && $tools->device)
            <tr>
                <th scope="row">Compatibility</th>
                <td colspan="2">{{ $tools->device }}</td>
            </tr>
            @endif

            @if($tools && $tools->chat)
            <tr>
                <th scope="row">AI Chatbots & Tools</th>
                <td colspan="2">{{ $tools->chat }}</td>
            </tr>
            @endif

            @if($tools && $tools->seo)
            <tr>
                <th scope="row">Analytics & SEO</th>
                <td colspan="2">{{ $tools->seo }}</td>
            </tr>
            @endif

            @if($tools && $tools->auto)
            <tr>
                <th scope="row">Automation</th>
                <td colspan="2">{{ $tools->auto }}</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>

           <div class="col-md-3">
    <table class="table table-hover col-6">
        <tbody style="font-size: 12px;">
            @if($tools && $tools->pluginss)
            <tr>
                <th scope="row">Extensions</th>
                <td>{{ $tools->pluginss }}</td>
            </tr>
            @endif

            @if($tools && $tools->collaboration)
            <tr>
                <th scope="row">Collaboration Tools</th>
                <td>{{ $tools->collaboration }}</td>
            </tr>
            @endif

            @if($tools && $tools->cms)
            <tr>
                <th scope="row">Content Management</th>
                <td colspan="2">{{ $tools->cms }}</td>
            </tr>
            @endif

            @if($tools && $tools->sales)
            <tr>
                <th scope="row">CRM and Sales</th>
                <td>{{ $tools->sales }}</td>
            </tr>
            @endif

            @if($tools && $tools->dev)
            <tr>
                <th scope="row">Development</th>
                <td>{{ $tools->dev }}</td>
            </tr>
            @endif

            @if($tools && $tools->ecomm)
            <tr>
                <th scope="row">E-commerce</th>
                <td colspan="2">{{ $tools->ecomm }}</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>

          <div class="col-md-3">
    <table class="table table-hover col-6">
        <tbody style="font-size: 12px;">
            @if($tools && $tools->emailMarketing)
            <tr>
                <th scope="row">Email Marketing</th>
                <td>{{ $tools->emailMarketing }}</td>
            </tr>
            @endif

            @if($tools && $tools->graphic)
            <tr>
                <th scope="row">Designing Platforms</th>
                <td>{{ $tools->graphic }}</td>
            </tr>
            @endif

            @if($tools && $tools->adv)
            <tr>
                <th scope="row">Advertising Platforms</th>
                <td colspan="2">{{ $tools->adv }}</td>
            </tr>
            @endif

            @if($tools && $tools->comm)
            <tr>
                <th scope="row">Communication</th>
                <td>{{ $tools->comm }}</td>
            </tr>
            @endif

            @if($tools && $tools->pay)
            <tr>
                <th scope="row">Payment Services</th>
                <td>{{ $tools->pay }}</td>
            </tr>
            @endif

            @if($tools && $tools->smm)
            <tr>
                <th scope="row">Social Media</th>
                <td colspan="2">{{ $tools->smm }}</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>

          <div class="col-md-3">
    <table class="table table-hover col-6">
        <tbody style="font-size: 12px;">
            @if($tools && $tools->smss)
            <tr>
                <th scope="row">Social Media Sites</th>
                <td>{{ $tools->smss }}</td>
            </tr>
            @endif

            @if($tools && $tools->wet)
            <tr>
                <th scope="row">Writing and Editing Tools</th>
                <td>{{ $tools->wet }}</td>
            </tr>
            @endif

            @if($tools && $tools->sub)
            <tr>
                <th scope="row">Subscription Option</th>
                <td colspan="2">{{ $tools->sub }}</td>
            </tr>
            @endif

            @if($tools && $tools->bill)
            <tr>
                <th scope="row">Billing options</th>
                <td>{{ $tools->bill }}</td>
            </tr>
            @endif

            @if($tools && $tools->pack)
            <tr>
                <th scope="row">Subscription Packages</th>
                <td>{{ $tools->pack }}</td>
            </tr>
            @endif

            @if($tools && $tools->socialMediaSites)
            <tr>
                <th scope="row">Social Media Sites</th>
                <td colspan="2">{{ $tools->socialMediaSites }}</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>

        
</div>

        
        </div>
      </div>
     @include('layouts.footer')
     @include('layouts.scripts')
</body>
<script>
    document.addEventListener("DOMContentLoaded", function () {
      const accordionItems = document.querySelectorAll(".accordion-item");
  
      accordionItems.forEach((item) => {
        const header = item.querySelector(".accordion-header");
  
        header.addEventListener("click", function () {
          accordionItems.forEach((innerItem) => {
            if (innerItem !== item && innerItem.classList.contains("active")) {
              innerItem.classList.remove("active");
            }
          });
  
          item.classList.toggle("active");
        });
      });
    });
  </script>
  <script>
    document.getElementById("copyButton").addEventListener("click", function() {
        var embedCode = '<a href="' + window.location.href + '" target="_blank"><img src="https://cleveraitools.ai/images/bannerimages/CleverAIToolsf.png" alt="This Tool is featured on CleverAi Tools"></a>';
        copyToClipboard(embedCode);
    });

    function copyToClipboard(text) {
        navigator.clipboard.writeText(text).then(function() {
            alert("Embed code copied to clipboard!");
        }, function(err) {
            console.error('Unable to copy to clipboard: ', err);
        });
    }
</script>
<script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>
</html>