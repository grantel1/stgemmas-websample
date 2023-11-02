<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>sports</title>
<meta name="generator" content="WYSIWYG Web Builder 18 - http://www.wysiwygwebbuilder.com">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/STGEMMAS3.css" rel="stylesheet">
<link href="css/sports.html.css" rel="stylesheet">
<script src="jquery-1.12.4.min.js"></script>
<script src="jquery.ui.effect.min.js"></script>
<script src="skrollr.min.js"></script>
<script src="wwb18.min.js"></script>
<script>
$(document).ready(function()
{
   $('#reviewsImage1').addClass('visibility-hidden');
   $('#portfolio-image2').addClass('visibility-hidden');
   $("a[href*='#BOOKMARK_SPORTSHOME']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#wb_BOOKMARK_SPORTSHOME').offset().top-88 }, 600, 'easeOutCirc');
   });
   $("a[href*='#facts']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#wb_facts').offset().top-88 }, 600, 'easeOutCirc');
   });
   $("a[href*='#LayoutGrid3']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#wb_LayoutGrid3').offset().top-88 }, 600, 'easeOutCirc');
   });
   $("a[href*='#LayoutGrid4']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#wb_LayoutGrid4').offset().top-88 }, 600, 'easeOutCirc');
   });
   $("a[href*='#LayoutGrid5']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#wb_LayoutGrid5').offset().top-88 }, 600, 'easeOutCirc');
   });
   $("a[href*='#contactUs']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#wb_contactUs').offset().top-88 }, 600, 'easeOutCirc');
   });
   function onScrollcontactUs()
   {
      var $obj = $("#wb_contactUs");
      if (!$obj.hasClass("in-viewport") && $obj.inViewPort(false))
      {
         $obj.addClass("in-viewport");
         AnimateCss('reviewsImage1', 'animate-fade-in-up', 0, 1000);
         AnimateCss('portfolio-image2', 'animate-fade-in-up', 500, 1000);
      }
   }
   onScrollcontactUs();
   $(window).scroll(function(event)
   {
      onScrollcontactUs();
   });
   function skrollrInit()
   {
      skrollr.init({forceHeight: false, mobileCheck: function() { return false; }, smoothScrolling: false});
   }
   skrollrInit();
   $("a[href*='#header']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#wb_header').offset().top }, 600, 'easeOutCirc');
   });
});
</script>
</head>
<body>
<div id="wb_BOOKMARK_SPORTSHOME">
<div id="BOOKMARK_SPORTSHOME">
<div class="col-1">
<div id="wb_homeText">
<p style="font-size:32px;line-height:36px;font-weight:bold;"><span style="font-size:21px;line-height:24.5px;">EXTRA-MURAL ACTIVITIES</span></p>
<p style="font-size:15px;line-height:16.5px;">&nbsp;</p>
<p style="font-size:16px;line-height:18px;">&nbsp;</p>
</div>
</div>
</div>
</div>
<div id="wb_facts">
<div id="facts">
<div class="row">
<div class="col-1">
<div class="col-1-padding">
<div id="wb_Image1" style="display:inline-block;width:100%;height:auto;z-index:1;">
<img src="images/soccer2.jpg" id="Image1" alt="" width="355" height="233">
</div>
</div>
</div>
<div class="col-2">
<div class="col-2-padding">
<div id="wb_Card3" style="display:flex;width:100%;z-index:2;" class="card" data--250-bottom="transform:translate(0%,0px);" data-333-bottom="transform:translate(100%,0px);">
   <div id="Card3-card-body">
      <div id="Card3-card-item0">SOCCER</div>
      <div id="Card3-card-item1">Football Training</div>
      <div id="Card3-card-item2"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid3">
<div id="LayoutGrid3">
<div class="row">
<div class="col-1">
<div class="col-1-padding">
<div id="wb_Card1" style="display:flex;width:100%;z-index:3;" class="card" data--250-bottom="transform:translate(0%,0px);" data-333-bottom="transform:translate(-100%,0px);">
   <div id="Card1-card-body">
      <div id="Card1-card-item0">Volleyball</div>
      <div id="Card1-card-item1">Volleyball Team</div>
      <div id="Card1-card-item2"></div>
   </div>
</div>
</div>
</div>
<div class="col-2">
<div class="col-2-padding">
<div id="wb_Image2" style="display:inline-block;width:100%;height:auto;z-index:4;">
<img src="images/IMG-20230926-WA0015.jpg" id="Image2" alt="" width="355" height="473">
</div>
</div>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid4">
<div id="LayoutGrid4">
<div class="row">
<div class="col-1">
<div class="col-1-padding">
<div id="wb_Image3" style="display:inline-block;width:100%;height:auto;z-index:5;">
<img src="images/IMG-20230926-WA0004.jpg" id="Image3" alt="" width="355" height="266">
</div>
</div>
</div>
<div class="col-2">
<div class="col-2-padding">
<div id="wb_Card2" style="display:flex;width:100%;z-index:6;" class="card" data--250-bottom="transform:translate(0%,0px);" data-333-bottom="transform:translate(100%,0px);">
   <div id="Card2-card-body">
      <div id="Card2-card-item0">Netball</div>
      <div id="Card2-card-item1">Netball Team</div>
      <div id="Card2-card-item2"></div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid5">
<div id="LayoutGrid5">
<div class="row">
<div class="col-1">
<div class="col-1-padding">
<div id="wb_Card4" style="display:flex;width:100%;z-index:7;" class="card" data--250-bottom="transform:translate(0%,0px);" data-333-bottom="transform:translate(-100%,0px);">
   <div id="Card4-card-body">
      <div id="Card4-card-item0">Athletics</div>
      <div id="Card4-card-item1">Athletics Team</div>
      <div id="Card4-card-item2"></div>
   </div>
</div>
</div>
</div>
<div class="col-2">
<div class="col-2-padding">
<div id="wb_Image4" style="display:inline-block;width:100%;height:auto;z-index:8;">
<img src="images/atletics.jpg" id="Image4" alt="" width="355" height="397">
</div>
</div>
</div>
</div>
</div>
</div>
<div id="wb_contactUs">
<div id="contactUs">
<div class="row">
<div class="col-1">
<div class="col-1-padding">
<div id="wb_Heading1" style="display:inline-block;width:100%;z-index:9;">
<h1 id="Heading1">CONTACT US</h1>
</div>
<div id="wb_Text1">
<p>&nbsp;</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="wb_contactUsForm">
<div id="contactUsForm">
<div class="row">
<div class="col-1">
</div>
<div class="col-2">
<label for="EditboxName" id="Label1" style="display:block;width:100%;line-height:16px;z-index:11;">Name</label>
<input type="text" id="EditboxName" style="display:block;width: 100%;height:41px;z-index:12;" name="name" value="" spellcheck="false">
<label for="EditboxEmail" id="Label2" style="display:block;width:100%;line-height:16px;z-index:13;">Email</label>
<input type="text" id="EditboxEmail" style="display:block;width: 100%;height:42px;z-index:14;" name="email" value="" spellcheck="false">
<label for="ComboboxOption" id="Label3" style="display:block;width:100%;line-height:16px;z-index:15;">Select an option</label>
<select name="option" size="1" id="ComboboxOption" style="display:block;width: 100%;height:42px;z-index:16;" autocomplete="off">
<option selected value="option-1">Option 1</option>
<option value="option-2">Option 2</option>
<option value="option-3">Option 3</option>
</select>
<label for="TextAreaMessage" id="Label4" style="display:block;width:100%;line-height:16px;z-index:17;">Message</label>
<textarea name="message" id="TextAreaMessage" style="display:block;width: 100%;;height:97px;z-index:18;" rows="4" cols="73" autocomplete="off" spellcheck="false"></textarea>
<div id="wb_CheckboxUpdates" style="display:inline-block;width:34px;height:23px;z-index:19;">
<input type="checkbox" id="CheckboxUpdates" name="Checkbox1" value="on" checked style="display:inline-block;"><label for="CheckboxUpdates"></label>
</div>
<label for="CheckboxUpdates" id="Label5" style="display:inline-block;width:330px;line-height:16px;z-index:20;">Please send product updates and offers via email.</label>
<hr id="Line1" style="display:block;width: 100%;z-index:21;">
<input type="submit" id="Button1" name="" value="Submit" style="display:inline-block;width:140px;height:42px;z-index:22;">
</div>
<div class="col-3">
</div>
</div>
</div>
</div>
<div id="wb_footer">
<div id="footer">
<div class="row">
<div class="col-1">
<div id="wb_Text16">
<p>Copyright © 2023 Stgemmas Primary School.&nbsp; All Rights Reserved</p>
</div>
</div>
</div>
</div>
</div>
<div id="StickyLayer" style="position:fixed;text-align:left;left:auto;right:25px;top:auto;bottom:25px;width:50px;height:50px;z-index:34;">
<div id="wb_up-arrow" style="position:absolute;left:9px;top:8px;width:24px;height:24px;text-align:center;z-index:24;">
<a href="./index.html#home"><div id="up-arrow"><i class="fa fa-angle-up"></i></div></a></div>
</div>
<div id="wb_header">
<div id="header">
<div class="row">
<div class="col-1">
</div>
<div class="col-2">
<div id="wb_headerMenu" style="display:inline-block;width:594px;height:48px;z-index:25;">
<ul id="headerMenu" role="menubar" class="nav">
<li role="menuitem" class="nav-item firstmain"><a class="nav-link headerMenu-effect" href="./index.html#home" target="_self">Home</a>
</li>
<li role="menuitem" class="nav-item"><a class="nav-link headerMenu-effect" href="./about.html#home" target="_self">About&nbsp;Us</a>
</li>
<li role="menuitem" class="nav-item"><a class="nav-link headerMenu-effect" href="./history.html#home" target="_self">History</a>
</li>
<li role="menuitem" class="nav-item"><a class="nav-link headerMenu-effect" href="./sports.html.php#BOOKMARK_SPORTSHOME" target="_self">Sports</a>
</li>
<li role="menuitem" class="nav-item"><a class="nav-link headerMenu-effect" href="./about.html#home" target="_self">Policies</a>
</li>
<li role="menuitem" class="nav-item"><a class="nav-link headerMenu-effect" href="./about.html#home" target="_self">Contact&nbsp;Us</a>
</li>
</ul>

</div>
</div>
</div>
</div>
</div>
</body>
</html>