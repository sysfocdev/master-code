<!DOCTYPE html>
<html lang="en-US">
<head>
    @include('layouts.head')
   <meta name="description" content="Contribute to our AI tools database. Share innovative tools and solutions to benefit the community.
">
   <meta name="keywords" content="">
   <title>Submit Your AI Tools for Inclusion on Clever AI Tools</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/css/selectize.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/js/standalone/selectize.min.js"></script>
    <!-- Place the first <script> tag in your HTML's <head> -->
    <script src="https://cdn.tiny.cloud/1/em9ncbfklp32w3g7a7n83f55muaglrwvd08zjgtcj4grl3v2/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <!-- Place the following <script> tag in your HTML's <body> -->
    <script>
        tinymce.init({
            selector: '#toolOverview',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount linkchecker',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [
                { value: 'First.Name', title: 'First Name' },
                { value: 'Email', title: 'Email' },
            ],
            ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
        });
    </script>
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
<style>
  .selectize-control.multi .selectize-input [data-value] {
      background-color: #5CBD9E;
      background-image: none;
      border: none;
  }
  .selectize-control.multi .selectize-input [data-value].active {
      background-color: #5CBD9E;
      background-image: none;
      border: none;
  }
</style>
<style>
    .requireda::after {
      content: " *";
      color: red;
    }
    
  </style>

<meta name="csrf-token" content="{{ csrf_token() }}">
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
                  <h3 class="categories-title title">Submit Ai Tool</h3>
                  <!--<p> Description</p>-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="jl_post_loop_wrapper">
        <div class="container" id="wrapper_masonry">
          <div class="row">
            <div class="col-md-12" id="">
                @csrf
    
     
           <form class="row g-3 needs-validation" method="post"  id="toolForm" enctype="multipart/form-data" novalidate>
            <hr>
            <h3>Personal Details</h3>
          <small><em>Please fill in your personal details and contact information. we will not dispaly your personel details on <a href="https://cleveraitools.ai/">cleveraitools.ai</a>   </em></small>
        <hr>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label ">First   name <span class="requireda"></span></label>
    <input type="text" class="form-control" name="firstname" required="" id="validationCustom01"  >
  <!--   <div class="valid-feedback">
      Looks good!
    </div> -->
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Last name</label>
    <input type="text" class="form-control" name="lastname" id="validationCustom02" >
   
  </div>
   <div class="col-md-4">
    <label for="validationCustom03" class="form-label">Company<span class="requireda"></span></label>
    <input type="text" class="form-control" name="company" id="validationCustom03" required >
   
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Email <span class="requireda"></span></label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" name="email" class="form-control mb-0" required id="validationCustomUsername" aria-describedby="inputGroupPrepend">
      <!-- <div class="invalid-feedback">
        Please choose a Email.
      </div> -->
    </div>
  </div>
  
 
  <hr>
<h3>Tool Information</h3>
<small><em>Please fill in details about your AI tool.</em></small>
<hr>

<div class="col-md-4">
  <label for="toolName" class="form-label">AI Tool Name<span class="requireda"></span></label>
  <input type="text" class="form-control"  required name="toolName" id="toolName" >
  
</div>

<div class="col-md-4">
  <label for="toolURL" class="form-label">URL<span class="requireda"></span></label>
  <input type="text" class="form-control" name="toolURL" required id="toolURL" >
  
</div>

<div class="col-md-4">
  <label for="toolLogo" class="form-label">Logo <span class="requireda"></span></label>
  <input type="file" class="form-control" required name="toolLogo"  id="toolLogo">
  
</div>

<div class="col-md-4">
  <label for="toolTagline" class="form-label">Tagline<span class="requireda"></span></label>
  <input type="text" class="form-control"  name="toolTagline" required id="toolTagline">
  
</div>

<div class="col-md-8">  
  <label for="toolTagDescription[]" class="form-label">How should we tag your tool?<span class="requireda"></span></label>
  <br>
<input type="text" name="toolTagDescription[]" required class="form-control" data-role="tagsinput" style="width: 100%;" id="toolTagDescription[]">
</div>

<div class="col-md-12">
  <label for="toolDescription" class="form-label">Description<span class="requireda"></span></label>
  <textarea class="form-control" name="toolDescription" required id="toolDescription"></textarea>
  
</div>
 <hr>
<h3>In-Depth Overview</h3>
<hr>
<!-- Overview Section -->
<div class="col-md-12">
  <label for="toolOverview" class="form-label">Overview <span class="requireda"></span></label>
  <textarea class="form-control" name="toolOverview" id="toolOverview" rows="5" ></textarea>
  
</div>
  <hr>
<h3>Ai Top Features </h3>
<small><em>Please fill in details about your AI tool.</em></small>
<hr>


  <!-- Field #1 -->
<div class="col-md-6">
  <label for="field1" class="form-label">#1 <span class="requireda"></span></label>
  <input type="text" class="form-control" required name="field1" id="field1" >
  
</div>
<!-- Field #2 -->
<div class="col-md-6">
  <label for="field2" class="form-label">#2<span class="requireda"></span></label>
  <input type="text" class="form-control" required name="field2" id="field2" >
  
</div>
<!-- Field #3 -->
<div class="col-md-6">
  <label for="field3" class="form-label">#3</label>
  <input type="text" class="form-control" name="field3" id="field3" >
  
</div>
<!-- Field #4 -->
<div class="col-md-6">
  <label for="field4" class="form-label">#4</label>
  <input type="text" class="form-control" name="field4" id="field4" >
  
</div>
<!-- Field #5 -->
<div class="col-md-12">
  <label for="field5" class="form-label">#5</label>
  <textarea class="form-control" name="field5" id="field5" rows="5" ></textarea>
  
</div>
  <hr>
<h3>AI Tool Techs and Specs </h3>
<small><em>Please fill in details about your AI tool.</em></small>
<hr>
 <div class="col-md-3">
    <label for="api" class="form-label">API</label>
    <select name="api[]" id="api" multiple >
      <option>Available</option>
      <option>Not Available</option>
    </select>
      </div>
  <div class="col-md-3">
    <label for="community" class="form-label">Community</label>
    <select name="community[]" id="community" multiple >
      <option>Available</option>
      <option>Not Available</option>
    </select>
      </div>
  <div class="col-md-3">
    <label for="device" class="form-label">Platforms & Device Compatibility*</label>
    <select name="device[]" id="device" multiple >
      <option>Windows</option>
      <option>Linux </option>
      <option>IOS </option>
      <option>IOS App </option>
      <option>Mac OS</option>
      <option> Android</option>
      <option>Android App </option>
      <option> web Based </option>
      <option> Oculus Quest </option>
    
    </select>
      </div>
  <div class="col-md-3">
    <label for="chat" class="form-label">AI Chatbots & Tools</label>
    <select name="chat[]" id="chat" multiple >
      <option>Bing AI Chat</option>
      <option>Chat GPT </option>
      <option>DEEPBrain AI Chat </option>
      <option>Frase </option>
      <option>Google Bard</option>
      <option> Google Dialogflow</option>
      <option>Ibm Watson </option>
      <option> Oculus Quest </option>
    
    </select>
      </div>
<div class="col-md-3">
    <label for="seo" class="form-label">Analytics, Reporting & SEO</label>
    <select name="seo[]" id="seo" multiple >
      <option>Adobe analytics</option>
      <option>Dragon Metrics </option>
      <option>Google Analytics </option>
      <option>Google Data Studio </option>
      <option>Google Page Speed Insights</option>
      <option>Google search console</option>
      <option>Google Tag Manager</option>
      <option>HotJar</option>
      <option>Looker</option>
      <option>Mix Panel </option>
      <option>Power Bi</option>
      <option>Semrush</option>
      <option>Similar Web</option>
      <option>Surfer SEO</option>
      <option>Tableau</option>
    
    </select>
      </div>

  <div class="col-md-3">
    <label for="auto" class="form-label">Automation</label>
    <select name="auto[]" id="auto" multiple >
      <option value="Make">Make</option>
  <option value="Power Automate">Power Automate</option>
  <option value="Type form">Type form</option>
  <option value="Zapier">Zapier</option>
    
    </select>
      </div>
  <div class="col-md-3">
    <label for="pluginss" class="form-label">Browser Extensions and Plugins</label>
    <select name="pluginss[]" id="pluginss" multiple >
       <option value="Chrome Extension">Chrome Extension</option>
  <option value="WordPress Plugin">WordPress Plugin</option>
  <option value="Edge Extension">Edge Extension</option>
  <option value="Firefox Extension">Firefox Extension</option>
  <option value="Safari Extension">Safari Extension</option>
    
    </select>
      </div>
  <div class="col-md-3">
    <label for="collaboration" class="form-label">Collaboration Tools</label>
    <select name="collaboration[]" id="collaboration" multiple >
        <option value="Asana">Asana</option>
  <option value="Basecamp">Basecamp</option>
  <option value="Bitrix">Bitrix</option>
  <option value="Box">Box</option>
  <option value="ClickUp">ClickUp</option>
  <option value="Confluence">Confluence</option>
  <option value="Dropbox">Dropbox</option>
  <option value="Figma">Figma</option>
  <option value="Google Drive">Google Drive</option>
  <option value="Microsoft SharePoint">Microsoft SharePoint</option>
  <option value="Monday.com">Monday.com</option>
  <option value="Notion">Notion</option>
  <option value="Slack">Slack</option>
  <option value="Trello">Trello</option>
    
    </select>
      </div>
  <div class="col-md-3">
    <label for="cms" class="form-label">Content Management </label>
    <select name="cms[]" id="cms" multiple >
      <option value="Contentful">Contentful</option>
  <option value="Drupal">Drupal</option>
  <option value="Joomla">Joomla</option>
  <option value="Sanity">Sanity</option>
  <option value="Wix">Wix</option>
  <option value="WordPress">WordPress</option>
    
    </select>
      </div>
  <div class="col-md-3">
    <label for="sales" class="form-label">CRM and Sales</label>
    <select name="sales[]" id="sales" multiple >
       <option value="Appolo.io">Appolo.io</option>
  <option value="Chime">Chime</option>
  <option value="Close">Close</option>
  <option value="Copper">Copper</option>
  <option value="Freshdesk">Freshdesk</option>
  <option value="Freshsales">Freshsales</option>
  <option value="Groove">Groove</option>
  <option value="HighLevel">HighLevel</option>
  <option value="Hubspot">Hubspot</option>
  <option value="Insightly">Insightly</option>
  <option value="Instantly">Instantly</option>
  <option value="KeyCRM">KeyCRM</option>
  <option value="Microsoft Dynamics 365">Microsoft Dynamics 365</option>
  <option value="Nimble">Nimble</option>
  <option value="Outreach">Outreach</option>
  <option value="Pipedrive">Pipedrive</option>
  <option value="Reply">Reply</option>
  <option value="Salesforce">Salesforce</option>
  <option value="Salesloft">Salesloft</option>
  <option value="Salsify">Salsify</option>
  <option value="SugarCRM">SugarCRM</option>
  <option value="Zendesk Support">Zendesk Support</option>
  <option value="ZohoCRM">ZohoCRM</option>
    
    </select>
      </div>
  <div class="col-md-3">
    <label for="dev" class="form-label">Development and Programming</label>
    <select name="dev[]" id="dev" multiple >
      <option value="Airtable">Airtable</option>
  <option value="Facebook Pixel">Facebook Pixel</option>
  <option value="GitHub">GitHub</option>
  <option value="Webhooks">Webhooks</option>
    
    </select>
      </div>
  <div class="col-md-3">
    <label for="ecomm" class="form-label">E-commerce Platforms</label>
    <select name="ecomm[]" id="ecomm" multiple >
      <option value="3dcart">3dcart</option>
  <option value="Amazon Seller Central">Amazon Seller Central</option>
  <option value="BigCommerce">BigCommerce</option>
  <option value="Ecwid">Ecwid</option>
  <option value="Etsy">Etsy</option>
  <option value="Idealo">Idealo</option>
  <option value="Magento">Magento</option>
  <option value="PrestaShop">PrestaShop</option>
  <option value="Salesforce CommerceCloud">Salesforce CommerceCloud</option>
  <option value="Shopify">Shopify</option>
  <option value="Squarespace Commerce">Squarespace Commerce</option>
  <option value="Volusion">Volusion</option>
  <option value="WooCommerce">WooCommerce</option>
    </select>
      </div>
  <div class="col-md-3">
    <label for="emailMarketing" class="form-label">Email Marketing and Automation</label>
    <select name="emailMarketing[]" id="emailMarketing" multiple >
     <option value="Active Campaign">Active Campaign</option>
  <option value="Amazon SES">Amazon SES</option>
  <option value="AWeber">AWeber</option>
  <option value="Campaign Monitor">Campaign Monitor</option>
  <option value="Constant Contact">Constant Contact</option>
  <option value="ConvertKit">ConvertKit</option>
  <option value="Drip">Drip</option>
  <option value="eSputnik">eSputnik</option>
  <option value="GetResponse">GetResponse</option>
  <option value="Gmail">Gmail</option>
  <option value="iCloud">iCloud</option>
  <option value="Klaviyo">Klaviyo</option>
  <option value="Lemlist">Lemlist</option>
  <option value="Mailchimp">Mailchimp</option>
  <option value="MailerLite">MailerLite</option>
  <option value="Mailgun">Mailgun</option>
  <option value="Outlook">Outlook</option>
  <option value="Pabbly Connect">Pabbly Connect</option>
  <option value="Sendinblue">Sendinblue</option>
  <option value="SMTP Email">SMTP Email</option>
  <option value="Yahoo! Mail">Yahoo! Mail</option>
  <option value="Yandex.Mail">Yandex.Mail</option>
  <option value="Zoho Mail">Zoho Mail</option>
    
    </select>
      </div>
  <div class="col-md-3">
    <label for="graphic" class="form-label">Graphics and Design Platforms</label>
    <select name="graphic[]" id="graphic" multiple >
      <option value="Adobe After Effects">Adobe After Effects</option>
  <option value="Adobe Creative Cloud">Adobe Creative Cloud</option>
  <option value="Canva">Canva</option>
  <option value="GIPHY">GIPHY</option>
  <option value="Pixabay">Pixabay</option>
  <option value="Storyblocks">Storyblocks</option>
  <option value="Unsplash">Unsplash</option>
    
    </select>
      </div>
  <div class="col-md-3">
    <label for="adv" class="form-label">Marketing and Advertising Platforms</label>
    <select name="adv[]" id="adv" multiple >
      <option value="Adalyser">Adalyser</option>
<option value="Adform">Adform</option>
<option value="Adjust">Adjust</option>
<option value="Adroll">Adroll</option>
<option value="Amazon Ads">Amazon Ads</option>
<option value="Amazon Vendor Central">Amazon Vendor Central</option>
<option value="Apple Search Ads">Apple Search Ads</option>
<option value="App Nexus">App Nexus</option>
<option value="AppsFlyer">AppsFlyer</option>
<option value="Awin">Awin</option>
<option value="Bing Ads">Bing Ads</option>
<option value="Campaign Manager 360">Campaign Manager 360</option>
<option value="CJ Affiliates">CJ Affiliates</option>
<option value="Commission Factory">Commission Factory</option>
<option value="Criteo">Criteo</option>
<option value="Daisycon">Daisycon</option>
<option value="Display & Video 360">Display & Video 360</option>
<option value="Facebook Ads">Facebook Ads</option>
<option value="Google Ad Manager">Google Ad Manager</option>
<option value="Google Ads">Google Ads</option>
<option value="Google Search Ads 360">Google Search Ads 360</option>
<option value="Instagram Ads">Instagram Ads</option>
<option value="LinkedIn Ads">LinkedIn Ads</option>
<option value="LinkedIn Sales Navigator">LinkedIn Sales Navigator</option>
<option value="Outbrain">Outbrain</option>
<option value="Pinterest Ads">Pinterest Ads</option>
<option value="Quora Ads">Quora Ads</option>
<option value="Rakuten Advertising">Rakuten Advertising</option>
<option value="Reddit Ads">Reddit Ads</option>
<option value="RTB House">RTB House</option>
<option value="Snapchat Ads">Snapchat Ads</option>
<option value="Snov.io">Snov.io</option>
<option value="Spotify Ads">Spotify Ads</option>
<option value="StackAdapt">StackAdapt</option>
<option value="Taboola">Taboola</option>
<option value="Teads">Teads</option>
<option value="TheTradeDesk">TheTradeDesk</option>
<option value="TikTok Ads">TikTok Ads</option>
<option value="Twitter Ads">Twitter Ads</option>
<option value="Yahoo! Japan">Yahoo! Japan</option>

    
    </select>
      </div>
 
  <div class="col-md-3">
    <label for="comm" class="form-label">Messaging and Communication</label>
    <select name="comm[]" id="comm" multiple >
     <option value="Discord">Discord</option>
<option value="Drift">Drift</option>
<option value="Freshchat">Freshchat</option>
<option value="Intercom">Intercom</option>
<option value="Line">Line</option>
<option value="LiveChat">LiveChat</option>
<option value="Messenger API">Messenger API</option>
<option value="Skype">Skype</option>
<option value="tawk.to.chat">tawk.to.chat</option>
<option value="Telegram">Telegram</option>
<option value="Twilio">Twilio</option>
<option value="Viber">Viber</option>
<option value="WhatsApp">WhatsApp</option>
<option value="WhatsApp Business API">WhatsApp Business API</option>
<option value="Zendesk">Zendesk</option>
<option value="Zoom">Zoom</option>
<option value="Payment and Financial Services">Payment and Financial Services</option>
    </select>
      </div>
  <div class="col-md-3">
    <label for="pay" class="form-label">Payment and Financial Services</label>
    <select name="pay[]" id="pay" multiple  >
      <option value="Paypal">Paypal</option>
<option value="Profitwell">Profitwell</option>
<option value="Stripe">Stripe</option>
    
    </select>
      </div>
  <div class="col-md-3">
    <label for="smm" class="form-label">Social Media Management</label>
  <select name="smm[]" id="smm"  multiple>
    <option value="Agorapulse">Agorapulse</option>
    <option value="Brandwatch">Brandwatch</option>
    <option value="Buffer">Buffer</option>
    <option value="Crowdfire">Crowdfire</option>
    <option value="Facebook Page Insights">Facebook Page Insights</option>
    <option value="Google My Business">Google My Business</option>
    <option value="Hootsuite">Hootsuite</option>
    <option value="Later">Later</option>
    <option value="LinkedIn Pages">LinkedIn Pages</option>
    <option value="Mention">Mention</option>
    <option value="Socialbakers">Socialbakers</option>
    <option value="SocialPilot">SocialPilot</option>
    <option value="Sprout Social">Sprout Social</option>
</select>

      </div>
      <div class="col-md-3">
    <label for="smss" class="form-label">Social Media Sites</label>
    <select name="smss[]" id="smss" multiple >
     
     <option value="Facebook">Facebook</option>
<option value="Instagram">Instagram</option>
<option value="LinkedIn">LinkedIn</option>
<option value="Medium">Medium</option>
<option value="Pinterest">Pinterest</option>
<option value="Reddit">Reddit</option>
<option value="Snapchat">Snapchat</option>
<option value="TikTok">TikTok</option>
<option value="Tumblr">Tumblr</option>
<option value="Twitch">Twitch</option>
<option value="Twitter">Twitter</option>
<option value="YouTube">YouTube</option>
    </select>
      </div>

   <div class="col-md-3">
    <label for="wet" class="form-label">Writing and Editing Tools</label>
    <select name="wet[]" id="wet" multiple >
      <option value="Copyscape">Copyscape</option>
<option value="Google Docs">Google Docs</option>
<option value="Google Sheets">Google Sheets</option>
<option value="Google Slides">Google Slides</option>
<option value="Grammarly">Grammarly</option>
<option value="Microsoft Word">Microsoft Word</option>
    </select>
      </div>
    <hr>
<h3>AI Tool Pricing & Subscription </h3>
<small>Please fill in your AI tool or service pricing and subscription options.</small>
<hr>
 <div class="col-md-3">
    <label for="sub" class="form-label">Subscription Options<span class="requireda"></span></label>
    <select name="sub[]" required id="sub" multiple >
     <option>Free</option>
      <option>Paid</option>
      <option>paid with premium option</option>
      <option>paid with Free Trial option</option>
     
    
    </select>
      </div>
   <div class="col-md-3">
    <label for="bill" class="form-label">Billing options<span class="requireda"></span></label>
    <select name="bill[]" required id="bill" multiple >
  <option>Monthly</option>
      <option>weekly</option>
      <option>Annually</option>
      <option>pay per use</option>
      <option>one time Payment</option>
    </select>
      </div>
   <div class="col-md-3">
    <label for="pack" class="form-label">Subscription Packages<span class="requireda"></span></label>
    <select name="pack[]" required id="pack" multiple >
      <option>1 </option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
      <option>7</option>
      <option>8</option>
    
    
    </select>
      </div>
  <div class="col-md-3">
    <label for="socialMediaSites" class="form-label">Social Media Sites<span class="requireda"></span></label>
    <select name="socialMediaSites[]" required id="socialMediaSites" multiple >
    
      <option>Bing AI Chat</option>
      <option>Chat GPT </option>
      <option>DEEPBrain AI Chat </option>
      <option>Frase </option>
      <option>Google Bard</option>
      <option> Google Dialogflow</option>
      <option>Ibm Watson </option>
      <option> Web Based </option>
      <option> Oculus Quest </option>
    
    </select>
      </div>
  <div class="col-md-6">
  <label for="field6" class="form-label">Lowest Price Options<span class="requireda"></span></label>
  <input type="text" class="form-control" required name="lowestPriceOptions" id="field6" >
  
</div>
  <hr>
<h3>Social Media Accounts </h3>
<small><em>Enter up to 5 social media accounts of your AI tool or service.</em></small>
<hr>
<div class="col-md-6">
  <label for="field7" class="form-label">Twitter</label>
  <input type="text" class="form-control" name="twitter" id="field7" >
  
</div>
<div class="col-md-6">
  <label for="field8" class="form-label">Tiktok</label>
  <input type="text" class="form-control" name="tiktok" id="field8" >
  
</div>
<div class="col-md-6">
  <label for="field9" class="form-label">Instagram</label>
  <input type="text" class="form-control" name="instagram" id="field9" >
  
</div>
<div class="col-md-6">
  <label for="field10" class="form-label">Facebook</label>
  <input type="text" class="form-control" name="facebook" id="field10" >
  
</div>
<div class="col-md-6">
  <label for="field11" class="form-label">Linkedin</label>
  <input type="text" class="form-control" name="linkedin" id="field11" >
  
</div>
<div class="col-md-6">
  <label for="field12" class="form-label">Telegram</label>
  <input type="text" class="form-control" name="telegram" id="field12" >
  
</div>
<div class="col-md-6">
  <label for="field13" class="form-label">Pinterest</label>
  <input type="text" class="form-control" name="pinterest" id="field13" >
  
</div>
  <hr>
<h3>AI Tool Marketing</h3>
<small><em>Please fill in details about your AI tool.</em></small>
<hr>
<div class="col-md-6">
  <label for="field14" class="form-label">Affiliate Program URL</label>
  <input type="text" class="form-control" name="affiliateProgramURL" id="field14" >
  
</div>
<div class="col-md-6">
  <label for="field15" class="form-label">Promotion</label>
  <input type="text" class="form-control" name="promotion" id="field15" >
  
</div>


  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input"    name="agreeToTerms" type="checkbox" value=""  id="invalidCheck" >
      <label class="form-check-label"  for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <label for="listingType" class="form-label">Choose your listing type</label>
      <select name="listingType" id="listingType" multiple >
        <option >Free</option>
        <option>Featured</option>
        <option>Premium </option>
        <option>Freemium </option>
      </select>
      </div>
        <div class="col-md-3">
    <label for="categary">Category</label>
    <select id="categary" required name="categary">
        @foreach($mainCategories as $mainCategory)
            <optgroup  label="{{ $mainCategory->name }}">
                @foreach($subCategories as $subCategory)
                    @if($subCategory->p_cat == $mainCategory->id)
                        <option value="{{ $subCategory->slug }}">{{ $subCategory->name }}</option>
                    @endif
                @endforeach
            </optgroup>
        @endforeach
    </select>
</div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">
  // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script> 


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('toolForm').addEventListener('submit', function (event) {
        event.preventDefault();
        var formData = new FormData();
        var fields = ['firstname', 'lastname', 'company', 'email', 'toolName', 'toolURL', 'toolTagline', 'toolTagDescription[]', 'toolDescription', 'toolOverview', 'field1', 'field2', 'field3', 'field4', 'field5', 'api[]', 'community[]', 'device[]', 'chat[]', 'seo[]', 'auto[]', 'pluginss[]', 'collaboration[]', 'cms[]', 'sales[]', 'dev[]', 'ecomm[]', 'emailMarketing[]', 'graphic[]', 'adv[]', 'comm[]', 'pay[]', 'smm[]', 'smss[]', 'wet[]', 'sub[]', 'bill[]', 'pack[]', 'socialMediaSites[]', 'lowestPriceOptions', 'twitter', 'tiktok', 'instagram', 'facebook', 'linkedin', 'telegram', 'pinterest', 'affiliateProgramURL', 'promotion', 'listingType', 'categary'];
        
        fields.forEach(function(field) {
            var element = document.querySelector(`[name="${field}"]`);
            if (element) {
                if (element.type === 'file' && element.files.length > 0) {
                    formData.append(field, element.files[0]);
                } else if (element.tagName.toLowerCase() === 'select' && element.multiple) { // Handle select boxes
                    var selectedOptions = Array.from(element.selectedOptions).map(option => option.value);
                    formData.append(field, selectedOptions.join(','));
                } else {
                    formData.append(field, element.value);
                }
            }
        });

        var toolLogoInput = document.querySelector('input[name="toolLogo"]');
        if (toolLogoInput.files.length > 0) {
            formData.append('toolLogo', toolLogoInput.files[0]);
        } 
        // else {
        //     Swal.fire({
        //         icon: 'error',
        //         title: 'Error',
        //         text: 'Please select an image for the tool logo and also fill the required fields',
        //     });
        //     return; 
        // }

        fetch('{{ route('tools.store') }}', {
            method: 'POST',
            headers: {
                'X-CSRF-Token': '{{ csrf_token() }}'
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: data.message,
                });
                 document.getElementById('toolForm').reset();
            } else if (data.errors) {
                Swal.fire({
                    icon: 'error',
                    title: 'Validation Error',
                    html: formatValidationErrors(data.errors),
                });
                console.error('Validation Errors:', data.errors);
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Failed to add tool',
                });
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});

// Helper function to format validation errors
function formatValidationErrors(errors) {
    let errorMessage = '<ul>';
    for (const error of Object.values(errors)) {
        errorMessage += `<li>${error.join(', ')}</li>`;
    }
    errorMessage += '</ul>';
    return errorMessage;
}

  </script>

  <script>
     $(document).ready(function () {
       $('#api').selectize({
            plugins: ['autofill_disable', "remove_button"],
            create: false,
        });
       $('#community').selectize({
            plugins: ['autofill_disable', "remove_button"],
            create: false,
        });
       $('#device').selectize({
            plugins: ['autofill_disable', "remove_button"],
            create: false,
        });
       $('#chat').selectize({
            plugins: ['autofill_disable', "remove_button"],
            create: false,
        });
       $('#seo').selectize({
            plugins: ['autofill_disable', "remove_button"],
            create: false,
        });
       $('#auto').selectize({
            plugins: ['autofill_disable', "remove_button"],
            create: false,
        });
       $('#pluginss').selectize({
            plugins: ['autofill_disable', "remove_button"],
            create: false,
        });
       $('#collaboration').selectize({
            plugins: ['autofill_disable', "remove_button"],
            create: false,
        });
       $('#cms').selectize({
            plugins: ['autofill_disable', "remove_button"],
            create: false,
        });
       $('#sales').selectize({
            plugins: ['autofill_disable', "remove_button"],
            create: false,
        });
       $('#dev').selectize({
            plugins: ['autofill_disable', "remove_button"],
            create: false,
        });
       $('#ecomm').selectize({
            plugins: ['autofill_disable', "remove_button"],
            create: false,
        });
       $('#emailMarketing').selectize({
            plugins: ['autofill_disable', "remove_button"],
            create: false,
        });
       $('#graphic').selectize({
            plugins: ['autofill_disable', "remove_button"],
            create: false,
        });
       $('#adv').selectize({
            plugins: ['autofill_disable', "remove_button"],
            create: false,
        });
       $('#comm').selectize({
            plugins: ['autofill_disable', "remove_button"],
            create: false,
        });
       $('#pay').selectize({
            plugins: ['autofill_disable', "remove_button"],
            create: false,
        });
       $('#smm').selectize({
            plugins: ['autofill_disable', "remove_button"],
            create: false,
        });
       $('#wet').selectize({
            plugins: ['autofill_disable', "remove_button"],
            create: false,
        });
       $('#socialMediaSites').selectize({
            plugins: ['autofill_disable', "remove_button"],
            create: false,
        });
       $('#sub').selectize({
            plugins: ['autofill_disable', "remove_button"],
            create: false,
        });
       $('#bill').selectize({
            plugins: ['autofill_disable', "remove_button"],
            create: false,
        });
       $('#pack').selectize({
            plugins: ['autofill_disable', "remove_button"],
            create: false,
        });
       $('#listingType').selectize({
            plugins: ['autofill_disable', "remove_button"],
            create: false,
        });
       $('#smss').selectize({
            plugins: ['autofill_disable', "remove_button"],
            create: false,
        });
    });
  </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">

</body>
</html>