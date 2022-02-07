<!-- moved property from LoginContent.jsp, to allow parametermization of loginContent.jsp -->
<!-- setting  property for LoginContent.jsp, to allow parametermization of loginContent.jsp -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Verizon Log In, Sign in to your Verizon Wireless or Fios Account</title>
	<link rel="canonical" href="https://secure.verizon.com/vzauth/UI/Login" />
	<link rel="stylesheet" href="https://scache-ws.vzw.com/am/css/bootstrap-3.3.7.min.css" />
	<link rel="stylesheet" href="https://scache-ws.vzw.com/am/css/less-space.css" />
	<link rel="stylesheet" href="https://scache-ws.vzw.com/am/css/style-2.0.css" />
	<script src="https://scache-ws.vzw.com/am/js/jquery-3.6.0.min.js"></script>
	<link rel="stylesheet" href="https://www.verizon.com/etc/designs/vzwcom/gnav20/core.css" />
	<script>
	var gnavdl = {
		"bu": "wireless",
		"appid": "ssoam",
		"variation": "prospect"
	}
	</script>
	<script>
	var $j = jQuery;
	</script>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
        <script src="https://scache-ws.vzw.com/am/js/html5shiv-3.7.3.min.js"></script>
        <script src="https://scache-ws.vzw.com/am/js/respond-1.4.2.min.js"></script>
        <![endif]-->
	<script src="https://scache-ws.vzw.com/am/js/bootstrap-3.3.7.min.js"></script>
	<meta name="description" content="Log in or register your My Verizon account today! You can check your data usage, pay your bills and manage your account without having to go to a Verizon store." />
	<meta NAME="ROBOTS" content="INDEX,FOLLOW">
	<meta name="keywords" content="Login, log in, sign in, signin, my-verizon, account log in, account information, account info" />
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://scache-ws.vzw.com/am/js/core.js"></script>
	<script type="text/javascript" src="https://scache-ws.vzw.com/am/includes/accessmanager.js"></script>
	<script>
	var fromVZTsession = '';
	var fromVZTparam = '';
	var clientId = '';
	if(clientId == '') {
		clientId = '';
	}
	var fromVZT = fromVZTparam || fromVZTsession;
	var mode = '';
	var offerShortLivedPassword = '';
	var userNameOnly = '';
	// already in overlay mode.. external links go to full screen
	var inOverlay = (mode == 'o');
	var inInline = (mode == 'i');
	var numberLink = (clientId == 'numberlink');
	var inPartner = (mode == 'p');
	var onestep = (mode == 'onestep');
	var isUserNameOnly = (userNameOnly == 'true');
	var isOfferShortLivedPassword = (offerShortLivedPassword == 'Y');
	var errorDisplayed = false;
	var emptyAthmSession = true;
	var bypassAthm = 'true';
	var isBypassAthm = (bypassAthm == 'true');
	var myVzIP = 'N';
	var isMyVzIP = (myVzIP == 'Y');
	var devicePath = 'Desktop';
	var bypassOmniTag = 'false';
	var omnitaggingEnabled = (bypassOmniTag == 'false');
	var bypassOmniCobraTag = 'false';
	var omnicobrataggingEnabled = (bypassOmniCobraTag == 'false');
	var oauthClientId = '';
	var streamTVSourcePlt = '';
	var loginURLFromsession = '';
	var omniTag = 'com.verizonwireless.accessmanager.business.to.OmniTagTO@26c6be1f';
	console.log("testing123");

	function setModalTagging(detail, elementid) {
		console.log("Checking omnitag");
		if(omniTag === '') {
			console.log("vdl is undefined - no omniTgagging");
		} else {
			if(window.vzdl) {
				if(!omnicobrataggingEnabled) {
					vzdl.page.detail = detail;
					setvzDL(vzdl);
					if(window.sendCustomEvent) {
						sendCustomEvent("pageView");
					}
				} else {
					if(window.vztag) {
						vztag.api.dispatch("openView", {
							name: detail,
							selector: elementid
						});
					}
				}
			}
		}
	}
	$j(document).ready(function() {
		$j('#login-form').preventDoubleSubmission();
		$j("#login-submit").attr("disabled", "disabled");
		if(oauthClientId != 'StreamTVAgent') {
			$j('#login-submit').css({
				"background-color": '#d8dada'
			});
		}
		$j('#login-submit').prop("disabled", true);
		$j(".device-submit").attr("disabled", "disabled");
		$j('.device-submit').css({
			"background-color": '#d8dada'
		});
		$j('.device-submit').prop("disabled", true);
		$j('#otpLink').on("click", function() {
			if(omnitaggingEnabled) {
				setModalTagging("Make a One-time payment overlay", "#exampleModal");
			}
		});
		$j('#forgotPwdLink').on("click", function() {
			if($j('#forgotInfoModal').length && omnitaggingEnabled) {
				setModalTagging('SignIn Options Overlay', "#forgotInfoModal");
			}
		});
		$j('#otpLink').on("keyup", function(e) {
			if(e.keyCode == 13) {
				$j('#exampleModal').modal('show');
			}
		});
		$j('#continueModal').on("keypress", function(event) {
			var keycode = (event.keyCode ? event.keyCode : event.which);
			if(keycode == '13') {
				submitOverlay();
			}
		});
		$j('#continueFFModal').on("keypress", function(event) {
			var keycode = (event.keyCode ? event.keyCode : event.which);
			if(keycode == '13') {
				submitFFOverlay();
			}
		});
		$j('#modalCancel,#modalCancelFI').on("keypress", function(event) {
			var keycode = (event.keyCode ? event.keyCode : event.which);
			if(keycode == '13') {
				$j('#exampleModal').modal('hide');
				$j('#forgotInfoModal').modal('hide');
			}
		});
		if(isOfferShortLivedPassword || !isUserNameOnly || onestep) {
			$j('#IDToken1').on("keyup", function(key) {
				var inputVal = $j(this).val();
				//console.log(".keyup IDToken1 && IDToken2 "+$j(this).val());
				if(inputVal.length >= 1 && $j("#IDToken2").val().length >= 1) {
					$j("#login-submit").removeAttr("disabled");
					if(oauthClientId != 'StreamTVAgent') {
						$j('#login-submit').css({
							"background-color": '#000000'
						});
					}
					$j('#login-submit').prop("disabled", false);
				} else {
					$j("#login-submit").attr("disabled", "disabled");
					if(oauthClientId != 'StreamTVAgent') {
						$j('#login-submit').css({
							"background-color": '#d8dada'
						});
					}
					$j('#login-submit').prop("disabled", true);
				}
			});
			//ensure button is enabled if saved/auto-fill input
			$j('#IDToken1').on("change", function(key) {
				var inputVal = $j(this).val();
				//console.log(".change IDToken1 && IDToken2 "+$j(this).val());
				if(inputVal.length >= 1 && $j("#IDToken2").val().length >= 1) {
					$j("#login-submit").removeAttr("disabled");
					if(oauthClientId != 'StreamTVAgent') {
						$j('#login-submit').css({
							"background-color": '#000000'
						});
					}
					$j('#login-submit').prop("disabled", false);
				} else {
					$j("#login-submit").attr("disabled", "disabled");
					if(oauthClientId != 'StreamTVAgent') {
						$j('#login-submit').css({
							"background-color": '#d8dada'
						});
					}
					$j('#login-submit').prop("disabled", true);
				}
			});
			//ensure button is enabled if saved/auto-fill input - test blur
			$j("#IDToken1").on("blur", function(key) {
				var inputVal = $j(this).val();
				//console.log(".blur IDToken1 && IDToken2 "+ inputVal);
				if(inputVal.length >= 1 && $j("#IDToken2").val().length >= 1) {
					//console.log(".blur IDToken1 && IDToken2 if");
					$j("#login-submit").removeAttr("disabled");
					if(oauthClientId != 'StreamTVAgent') {
						$j('#login-submit').css({
							"background-color": '#000000'
						});
					}
					$j('#login-submit').prop("disabled", false);
				} else {
					//console.log(".blur IDToken1 && IDToken2 else");
					$j("#login-submit").attr("disabled", "disabled");
					if(oauthClientId != 'StreamTVAgent') {
						$j('#login-submit').css({
							"background-color": '#d8dada'
						});
					}
					$j('#login-submit').prop("disabled", true);
				}
			});
			$j("#IDToken2").on("keyup", function(key) {
				var inputVal = $j(this).val();
				//console.log(".keyup IDToken2 && IDToken1 "+ inputVal);
				if(inputVal.length >= 1 && $j("#IDToken1").val().length >= 1) {
					$j("#login-submit").removeAttr("disabled");
					if(oauthClientId != 'StreamTVAgent') {
						$j('#login-submit').css({
							"background-color": '#000000'
						});
					}
					$j('#login-submit').prop("disabled", false);
				} else {
					$j("#login-submit").attr("disabled", "disabled");
					if(oauthClientId != 'StreamTVAgent') {
						$j('#login-submit').css({
							"background-color": '#d8dada'
						});
					}
					$j('#login-submit').prop("disabled", true);
				}
			});
			//ensure button is enabled if saved/auto-fill input
			$j("#IDToken2").on("change", function(key) {
				var inputVal = $j(this).val();
				//console.log(".change IDToken2 && IDToken1 "+ inputVal);
				if(inputVal.length >= 1 && $j("#IDToken1").val().length >= 1) {
					console.log(".change IDToken2 && IDToken1 if");
					$j("#login-submit").removeAttr("disabled");
					if(oauthClientId != 'StreamTVAgent') {
						$j('#login-submit').css({
							"background-color": '#000000'
						});
					}
					$j('#login-submit').prop("disabled", false);
				} else {
					console.log(".change IDToken2 && IDToken1 else");
					$j("#login-submit").attr("disabled", "disabled");
					if(oauthClientId != 'StreamTVAgent') {
						$j('#login-submit').css({
							"background-color": '#d8dada'
						});
					}
					$j('#login-submit').prop("disabled", true);
				}
			});
			//ensure button is enabled if saved/auto-fill input - test blur
			$j("#IDToken2").on("blur", function(key) {
				var inputVal = $j(this).val();
				//console.log(".blur IDToken2 && IDToken1 "+ inputVal);
				if(inputVal.length >= 1 && $j("#IDToken1").val().length >= 1) {
					//console.log(".blur IDToken2 && IDToken1 if");
					$j("#login-submit").removeAttr("disabled");
					if(oauthClientId != 'StreamTVAgent') {
						$j('#login-submit').css({
							"background-color": '#000000'
						});
					}
					$j('#login-submit').prop("disabled", false);
				} else {
					//console.log(".blur IDToken2 && IDToken1 else");
					$j("#login-submit").attr("disabled", "disabled");
					if(oauthClientId != 'StreamTVAgent') {
						$j('#login-submit').css({
							"background-color": '#d8dada'
						});
					}
					$j('#login-submit').prop("disabled", true);
				}
			});
		} else {
			$j('#IDToken1').on("keyup", function(key) {
				var inputVal = $j(this).val();
				if(inputVal.length >= 1) {
					$j("#login-submit").removeAttr("disabled");
					if(oauthClientId != 'StreamTVAgent') {
						$j('#login-submit').css({
							"background-color": '#000000'
						});
					}
					$j('#login-submit').prop("disabled", false);
					console.log("It finally got thru &&&&&&& ")
				} else {
					$j("#login-submit").attr("disabled", "disabled");
					if(oauthClientId != 'StreamTVAgent') {
						$j('#login-submit').css({
							"background-color": '#d8dada'
						});
					}
					$j('#login-submit').prop("disabled", true);
				}
			});
		}
		$j("#IDToken2").on("keyup", function(key) {
			var inputVal = $j(this).val();
			//console.log(".keyup 2 IDToken2 && IDToken1 "+ inputVal); //may remove after testing
			if(inputVal.length >= 1 && $j("#IDToken1").val().length >= 1) {
				$j("#login-submit").removeAttr("disabled");
				if(oauthClientId != 'StreamTVAgent') {
					$j('#login-submit').css({
						"background-color": '#000000'
					});
				}
				$j('#login-submit').prop("disabled", false);
			} else {
				$j("#login-submit").attr("disabled", "disabled");
				if(oauthClientId != 'StreamTVAgent') {
					$j('#login-submit').css({
						"background-color": '#d8dada'
					});
				}
				$j('#login-submit').prop("disabled", true);
			}
		});
		try { //used by StreamTV to know our page (as iFrame) is loaded in their parent window
			if((oauthClientId == 'StreamTVAgent') && (streamTVSourcePlt == 'w' || streamTVSourcePlt == 'wla') && loginURLFromsession.includes("stream-dit.verizon.com")) {
				//console.log("sending page id to StreamTV-dit");
				window.parent.postMessage("ottvs-signin", "https://stream-dit.verizon.com");
			} else if((oauthClientId == 'StreamTVAgent') && (streamTVSourcePlt == 'w' || streamTVSourcePlt == 'wla') && loginURLFromsession.includes("stream-sit.verizon.com")) {
				//console.log("sending page id to StreamTV-sit");
				window.parent.postMessage("ottvs-signin", "https://stream-sit.verizon.com");
			} else if((oauthClientId == 'StreamTVAgent') && (streamTVSourcePlt == 'w' || streamTVSourcePlt == 'wla') && loginURLFromsession.includes("stream-stg.verizon.com")) {
				//console.log("sending page id to StreamTV-stg");
				window.parent.postMessage("ottvs-signin", "https://stream-stg.verizon.com");
			} else if((oauthClientId == 'StreamTVAgent') && (streamTVSourcePlt == 'w' || streamTVSourcePlt == 'wla') && loginURLFromsession.includes("stream-pilot.verizon.com")) {
				//console.log("sending page id to StreamTV-pilot");
				window.parent.postMessage("ottvs-signin", "https://stream-pilot.verizon.com");
			} else if((oauthClientId == 'StreamTVAgent') && (streamTVSourcePlt == 'w' || streamTVSourcePlt == 'wla') && loginURLFromsession.includes("stream.verizon.com")) {
				//console.log("Test sending page id to StreamTV-prod");
				window.parent.postMessage("ottvs-signin", "https://stream.verizon.com");
			} else if(oauthClientId == 'StreamTVAgent') {
				//console.log("Test sending page id to StreamTV streamTVSourcePlt, loginURLFromsession = " + streamTVSourcePlt + ", " + loginURLFromsession);
			}
		} catch(e) {
			console.error("StreamTV postMessage block", e.message);
		}
		if(!isBypassAthm && isMyVzIP && !inPartner && emptyAthmSession) {
			var vzConnectBaseURL = 'https://auth.svcs.verizon.com:22790';
			var r = 'f'; //Static value. Indicates that Redirect Server will respond with HTTP 200 response code
			var vzConnectClientId = 'adadb9bb-7db2-4aae-b8be-7ed9bc6d4d81';
			$j.ajax({
				type: 'GET',
				url: vzConnectBaseURL + '/vzconnect/redirectservice/v1/mdn',
				dataType: 'json',
				data: {
					client_id: vzConnectClientId,
					r: r
				},
				timeout: '1000',
				success: function(data, statusText, xhr) {
					console.log('data=' + data['ath-m']);
					$j("#athM").val(data['ath-m']);
					$j("#athMStatus").val(xhr.status);
				},
				error: function(xhr, statusText, err) {
					console.log('errortext=' + statusText);
					console.log('xhr.status=' + xhr.status);
					if(statusText === "timeout") {
						$j("#athMStatus").val(statusText);
					} else {
						$j("#athMStatus").val(xhr.status);
					}
				}
			});
		}
		$j('.deviceNumber').on("keyup", function(key) {
			var inputVal = $j(this).val();
			if(inputVal.length >= 1 && $j(".deviceZip").val().length >= 1) {
				$j(".device-submit").removeAttr("disabled");
				$j('.device-submit').css({
					"background-color": '#000000'
				});
				$j('.device-submit').prop("disabled", false);
			} else {
				$j(".device-submit").attr("disabled", "disabled");
				$j('.device-submit').css({
					"background-color": '#d8dada'
				});
				$j('#login-submit').prop("disabled", true);
			}
		});
		$j(".deviceZip").on("keyup", function(key) {
			var inputVal1 = $j(this).val();
			if(inputVal1.length >= 1 && $j(".deviceNumber").val().length >= 1) {
				$j(".device-submit").removeAttr("disabled");
				$j('.device-submit').css({
					"background-color": '#000000'
				});
				$j('.device-submit').prop("disabled", false);
			} else {
				$j(".device-submit").attr("disabled", "disabled");
				$j('.device-submit').css({
					"background-color": '#d8dada'
				});
				$j('.device-submit').prop("disabled", true);
			}
		});
		$j('form').submit(function() {
			$j('input[type=submit]', this).attr('disabled', 'disabled');
		});
		$j('body').on('keydown', 'button, a', function(e) {
			if(e.which === 32) {
				$j(this).trigger('click')
			}
		});
		$j("body").on("click mouseenter", ".a11y-tooltip > a", function(e) {
			e.stopPropagation();
			e.preventDefault();
			if(e.type === "click" && !$j(this).next().find("button.close-a11y-tooltip").length) {
				$j(this).next().append('<button class="close-a11y-tooltip"><span aria-hidden="true"></span>close information</button>');
			} else if("mouseenter" === e.type && $j(this).next().find("button.close-a11y-tooltip").length) {
				$j(this).next().find("button.close-a11y-tooltip").remove();
			}
			if($j(this).next().is(':visible')) {
				$j(this).attr('aria-expanded', false).next().hide();
			} else {
				if(fromVZT == 'Y') {
					$j(this).next().addClass("m-right");
				} else if($j(this).offset().left < $j(window).width() / 2) {
					$j(this).next().addClass("m-bottom");
				} else if(inInline || numberLink) {
					$j(this).next().addClass("m-bottom");
				} else {
					$j(this).next().removeClass("m-bottom");
				}
				$j(this).attr('aria-expanded', true).next().show();
			}
		});
		$j("body").on("mouseleave", ".a11y-tooltip", function(e) {
			$j(this).find('a:first').text().replace('expanded', 'collapsed');
			$j(this).find('div.a11y-tooltip-content').hide();
		});
		$j("body").on("click keydown", "button.close-a11y-tooltip", function(e) {
			if("click" === e.type) {
				e.preventDefault();
				e.stopPropagation();
				$j(".a11y-tooltip > a").attr('aria-expanded', false);
				$j(".a11y-tooltip-content").hide();
				$j(".a11y-tooltip").focus();
				$j('button.close-a11y-tooltip').parent().prev().focus();
			} else if(9 === e.which) {
				e.preventDefault();
				e.stopPropagation();
				$j(".a11y-tooltip-content").hide();
				$j("#forgotPasswordLink").focus();
				$j(".a11y-tooltip > a").attr('aria-expanded', false);
			} else if(27 === e.which) {
				e.preventDefault();
				$j(".a11y-tooltip-content").hide();
				$j(".a11y-tooltip").focus();
				$j('button.close-a11y-tooltip').parent().prev().focus();
				$j(".a11y-tooltip > a").attr('aria-expanded', false);
			}
			if(event.shiftKey && event.keyCode == 9) {
				$j(".a11y-tooltip-content").hide();
				$j("#rememberUserName").focus();
				$j(".a11y-tooltip > a").attr('aria-expanded', false);
			}
		});
		$j("body").on("keydown", ".a11y-tooltip", function(e) {
			if(event.shiftKey && event.keyCode == 9) {
				$j(".a11y-tooltip-content").hide();
				$j(".a11y-tooltip > a").attr('aria-expanded', false);
			}
			if(e.which === 27) {
				e.preventDefault();
				$j(".a11y-tooltip-content").hide();
				$j(".a11y-tooltip").focus();
				$j('button.close-a11y-tooltip').parent().prev().focus();
				$j(".a11y-tooltip > a").attr('aria-expanded', false);
			}
		});
		$j('#sharedComputerTooltip').tooltip({
			container: '#main-content'
		});
		$j('#registerProfile a,#registerProfile2').on("click", function(e) {
			if(fromVZT == 'Y') {
				if(clientId != 'whatsnext') {
					console.log('register');
					scLinkTrackID('register');
				} else {
					console.log('register- whats next');
					scLinkTrackID('register- whats next');
				}
			}
		});
		$j('a#forgotPasswordLink').on("click", function(e) {
			if(fromVZT == 'Y') {
				if(clientId != 'whatsnext') {
					console.log('forgot your info');
					scLinkTrackID('forgot your info');
				} else {
					console.log('forgot info- whats next');
					scLinkTrackID('forgot info- whats next');
				}
			}
		});
		if(inOverlay || inInline || numberLink) {
			$j('#main-content a:not(.not-full-screen)').attr('target', '_top');
		} else {
			$j('#registerProfile').addClass('visible-xs-inline');
		}
		if(errorDisplayed) {
			$j('#bannererror').find('br').remove();
			$j('#bannererror').focus();
		} else if(devicePath != 'Mobile' || (devicePath == 'Mobile' && (inOverlay || inInline || numberLink || inPartner))) {
			$j('#IDToken1').focus();
		}
		if(oauthClientId == 'StreamTVAgent') {
			$j('#IDToken1').focus();
		}
		$j('#rememberUserName').on("focus", function() {
			$j('#rememberentireblock').addClass('extendedremember');
		});
		$j('#rememberUserName').on("blur", function() {
			$j('#rememberentireblock').removeClass('extendedremember');
		});
		$j('#kmsi').on("focus", function() {
			$j('#rememberentireblocknext').addClass('extendedremember');
		});
		$j('#kmsi').on("blur", function() {
			$j('#rememberentireblocknext').removeClass('extendedremember');
		});
		if(fromVZT == 'Y') {
			$j('#rememberUserName').on("click", function() {
				if($j("#kmsi").is(':checked')) {
					$j('#kmsi').attr("checked", false);
				}
				submitPageTag = 'sign in-remember me';
			});
			$j('#kmsi').on("click", function() {
				if($j('#rememberUserName').is(':checked')) {
					$j('#rememberUserName').attr("checked", false);
				}
				submitPageTag = 'sign in-keep me';
			});
		}
		$j("#exampleModal, #forgotInfoModal").on("shown.bs.modal", function() {
			$j('#modalClose,#modalCloseFI').focus();
		});
		$('#defaultOpen').on("keydown", function(e) {
			if(e.keyCode == 39) {
				e.preventDefault();
				$j('#useDeviceTab').focus();
			}
		});
		$('#useDeviceTab').on("keydown", function(e) {
			if(e.keyCode == 37) {
				e.preventDefault();
				$j('#defaultOpen').focus();
			}
		});
		var defaultOpenClicked = false;
		var useDeviceTabClicked = false;
		$('#defaultOpen').on("mousedown", function(e) {
			defaultOpenClicked = true;
		});
		$j('#useDeviceTab').on("mousedown", function() {
			useDeviceTabClicked = true;
		});
		$j('#defaultOpen').on("focus", function() {
			if(!defaultOpenClicked) {
				$("#defaultOpen").css({
					"outline": 'auto'
				});
			}
			defaultOpenClicked = false;
		});
		$j('#defaultOpen').on("blur", function() {
			$("#defaultOpen").css({
				"outline": 'none'
			});
		});
		$j('#useDeviceTab').on("focus", function() {
			if(!useDeviceTabClicked) {
				$("#useDeviceTab").css({
					"outline": 'auto'
				});
			}
			useDeviceTabClicked = false;
		});
		$j('#useDeviceTab').on("blur", function() {
			$("#useDeviceTab").css({
				"outline": 'none'
			});
		});
		/*make one time payment model overlay radio button focus*/
		$("#modalClose,#modalCLoseFI").on('keydown', function(e) {
			if(!e.shiftKey && e.keyCode == 9) {
				if($("#wireless").is(':checked')) {
					$("#wirelessRadioDiv").css({
						"outline": 'auto',
						"color": '#747676',
						"display": 'inline-block'
					});
				}
				if($("#wireline").is(':checked')) {
					$("#wirelineRadioDiv").css({
						"outline": 'auto',
						"color": '#747676',
						"display": 'inline-block'
					});
				}
				if($("#usedevice").is(':checked')) {
					$("#deviceRadioDiv").css({
						"outline": 'auto'
					});
				}
				if($("#forgotinfolink").is(':checked')) {
					$("#ffLinkRadioDiv").css({
						"outline": 'auto'
					});
				}
			}
		});
		$("#continueModal").on('keydown', function(e) {
			if(e.keyCode == 9 && e.shiftKey) {
				if($("#wireless").is(':checked')) {
					$("#wirelessRadioDiv").css({
						"outline": 'auto',
						"color": '#747676',
						"display": 'inline-block'
					});
				}
				if($("#wireline").is(':checked')) {
					$("#wirelineRadioDiv").css({
						"outline": 'auto',
						"color": '#747676',
						"display": 'inline-block'
					});
				}
			}
		});
		$("#continueFFModal").on('keydown', function(e) {
			if(e.keyCode == 9 && e.shiftKey) {
				if($("#usedevice").is(':checked')) {
					$("#deviceRadioDiv").css({
						"outline": 'auto'
					});
				}
				if($("#forgotinfolink").is(':checked')) {
					$("#ffLinkRadioDiv").css({
						"outline": 'auto'
					});
				}
			}
		});
		$('#wireless').on("blur", function() {
			$("#wirelessRadioDiv").css({
				"outline": 'none'
			});
		});
		$('#wireline').on("blur", function() {
			$("#wirelineRadioDiv").css({
				"outline": 'none'
			});
		});
		$('#usedevice').on("blur", function() {
			$("#deviceRadioDiv").css({
				"outline": 'none'
			});
		});
		$('#forgotinfolink').on("blur", function() {
			$("#ffLinkRadioDiv").css({
				"outline": 'none'
			});
		});
	});

	function submitOverlay() {
		var otpValue = $j('input[name="otpoverlay"]:checked').val();
		if(otpValue == 'wireless') {
			window.location.href = 'https://ebillpay.verizonwireless.com/cws/viewLogin.action#/payments';
		} else {
			window.location.href = 'https://www.verizon.com/expresspay/#/auth?src=c';
		}
	}

	function submitFFOverlay() {
		var ffValue = $j('input[name="forgotinfooverlay"]:checked').val();
		$j("#forgotInfoModal").modal("hide");
		if(ffValue == 'usedevice') {
			openAuthMethod(event, 'UseDevice', 'use_d', 'use_p');
		} else {
			window.location.href = 'https://secure.verizon.com/accessmanager/public/c/fp/start?goto=https%3A%2F%2Fmyvpostpay.verizon.com%2Fui%2Fhub%2Fsecure%2Foverview%3Fflow%3D1D';
		}
	}

	function validateForm(evt) {
		var zipRegex = new RegExp("^[0-9]*$");
		const zipCodeLength = document.getElementsByClassName("deviceZip")[0].value.length;
		const idtoken2 = document.getElementsByClassName("deviceZip")[0].value.length;
		console.log("This is zip length " + zipCodeLength);
		if(zipCodeLength != 5 || zipRegex.test(document.getElementsByClassName("deviceZip")[0].value) == false) {
			//  alert("less than 5 or not all digits");
			// alert("This is the value "+document.getElementsByClassName("deviceZip")[0].value);
			document.getElementsByClassName("deviceZip")[0].style.borderColor = "#ED7000";
			document.getElementsByClassName("deviceZip")[0].style.borderBottomWidth = "5px";
			//  alert("should display error")
			var str = "Please enter your Billing ZIP Code"
			document.getElementById("errorMsg").innerHTML = str;
			evt.preventDefault();
		}
	}
	</script>
	<script>
	var isOnload = false;
	document.addEventListener('DOMContentLoaded', function(event) {
		isOnload = true;
		console.log("isOnload " + event.type);
		console.log("isOnload flag " + isOnload);
		if(document.getElementById("defaultOpen") != null) {
			document.getElementById("defaultOpen").click();
			console.log("document has loaded and default click is happening");
		} else {
			console.log("null check happened");
		}
	});
	document.addEventListener('keydown', function(e) {
		if(e.keyCode == 9 || e.keyCode == 40 || e.keyCode == 38) {
			if(document.activeElement.id == 'modalCancel' && !e.shiftKey) {
				e.preventDefault();
				document.getElementById("modalClose").focus();
			} else if(e.shiftKey && e.keyCode == 9 && document.activeElement.id == 'modalClose' || e.keyCode == 38 && document.activeElement.id == 'modalClose') {
				e.preventDefault();
				document.getElementById("modalCancel").focus();
			} else if(document.activeElement.id == 'modalCancelFI' && !e.shiftKey) {
				e.preventDefault();
				document.getElementById("modalCloseFI").focus();
			} else if(e.shiftKey && e.keyCode == 9 && document.activeElement.id == 'modalCloseFI' || e.keyCode == 38 && document.activeElement.id == 'modalCloseFI') {
				e.preventDefault();
				document.getElementById("modalCancelFI").focus();
			}
		}
	});
	document.addEventListener('keydown', function(e) {
		var currentTarget
		switch(e.keyCode) {
			case 37: //left
				if(document.activeElement.id !== 'IDToken1' && document.activeElement.id !== 'IDToken2') {
					currentTarget = document.getElementsByName("passwordLabel")[0]
					if(currentTarget) {
						openAuthMethod({
							currentTarget: currentTarget
						}, "UsePassword", "use_p", "use_d")
					}
				}
				break;
			case 39: // right
				if(document.activeElement.id !== 'IDToken1' && document.activeElement.id !== 'IDToken2') {
					currentTarget = document.getElementsByName("deviceLabel")[0]
					if(currentTarget) {
						openAuthMethod({
							currentTarget: currentTarget
						}, "UseDevice", "use_d", "use_p")
					}
				}
				break;
		}
	})

	function setAuthTagging(detail) {
		try {
			if(window.vzdl) {
				vzdl.page.detail = detail;
				setvzDL(vzdl);
				if(window.sendCustomEvent) {
					sendCustomEvent("openView");
				}
			}
		} catch(error) {
			console.error(error);
			console.log("Exception setting autthtagging");
		}
	}

	function openAuthMethod(evt, authMethod, activeTab_id, inactiveTab_id) {
		console.log("current authMethod " + authMethod)
			// if(isOnload == false ){
		console.log("open view should  be displayed only onclick isOnload is false")
		setAuthTagging(authMethod)
			//   }
		var i, tabcontent, tablinks;
		tabcontent = document.getElementsByClassName("tabcontent");
		for(i = 0; i < tabcontent.length; i++) {
			// console.log(tabcontent[i]);
			tabcontent[i].style.display = "none";
		}
		tablinks = document.getElementsByClassName("tablinks");
		for(i = 0; i < tablinks.length; i++) {
			tablinks[i].className = tablinks[i].className.replace(" active", "");
			tablinks[i].removeAttribute('aria-selected')
			tablinks[i].setAttribute('tabindex', '-1')
		}
		document.getElementById(authMethod).style.display = "block";
		document.getElementById(activeTab_id).style.color = "black";
		document.getElementById(inactiveTab_id).style.color = "#D8DADA"; //this is a hack
		evt.currentTarget.className += " active";
		evt.currentTarget.setAttribute('aria-selected', 'true')
		evt.currentTarget.setAttribute('tabindex', '0')
		isOnload = false;
	}
	</script>
	<script>
	console.log("calling cobra jsp from defaultlayout");
	</script>
	<script src="//assets.adobedtm.com/2ea7ee22c8c2/ece9aa9bcf6f/launch-72284e178e44.min.js"></script>
	<script>
	console.log("setting omnicobra vzdl structure");
	</script>
	<script type="text/javascript">
	var vzdl = {
		"cmp": {
			"all": "",
		},
		"error": {
			"code": ""
		},
		"park": {
			"ecpdID": "",
			"altAccount": "",
			"visionCustomerType": "",
		},
		"page": {
			"articleId": "", //new
			"channel": "sso",
			"channelSession": "F6769AA5B0BE8B2C3E669F3568EC1CF7",
			"detail": "",
			"displayChannel": "VZ",
			"flow": "Login",
			"name": "sign in page",
			"sourceChannel": "AM",
			"subFlow": "",
			"throttle": "",
			"contentFragments": "",
			"link": "", //ONLY for APP NOT WEB
			"LQZip": "", //for loopqual zip
			"fraudIndicator": "", //new
			"vendorPartnerId": "", //new
			"repeatLQSVisitor": "", //new
			"repeatCartVisitor": "", //new
			"fireProactiveChat": "", //new
			"language": "", //new
		},
		"event": {
			"value": "",
		},
		"search": {
			"term": "",
			"type": "",
			"results": "",
		},
		"support": {
			"issueNumber": "",
			"tsaIssueName": "",
			"tsaStepName": ""
		},
		"target": {
			"assetsRequested": "",
			"assetAttributes": "",
			"assetsLeveraged": "",
			"abTest": "",
			"campaign": "",
			"experience": "",
			"message": "",
			"offer": "",
			"cloud": "",
			"mktgId": "",
			"sandBox": "",
			"engagement": {
				"intent": "sso",
				"id": "",
				"offered": "",
			},
		},
		"txn": {
			"agent": "",
			"autoPay": "",
			"id": "",
			"offer": "",
			"discountId": "",
			"orderType": "",
			"status": "",
			"cartId": "",
			"outletId": "",
			"quoteId": "",
			"paymentType": "",
			"shippingZip": "",
			"shippingTotal": "",
			"tradeInQty": "",
			"tradeInAmt": "",
			"total": "",
			"taxAmt": "",
			"recurringCharges": "",
			"nonRecurringCharges": "",
			"futurePayment": "",
			"installOptions": "",
			"discount": "",
			"paymentAmt": "",
			"reasonCode": "",
			"reviewOption": "",
			"txnDetail": "", //new
			"shippingState": "", //new
			"product": {
				"owns": {
					"name": "",
					"id": "",
					"category": "",
					"recurringPrice": "monthly price",
					"line": "",
				},
				"current": {
					"name": "",
					"id": "",
					"merchCat": "",
					"category": "",
					"offer": "",
					"discount": "",
					"qty": "",
					"recurringPrice": "monthly price",
					"nonRecurringPrice": "onetime price",
					"line": "",
					"sku": "",
					"contractType": "",
					"rebate": "",
					"shippingCharge": "",
					"shippingType": "",
					"shared": ""
				},
			},
		},
		"user": {
			"existingServices": "",
			"account": "",
			"id": "", //new
			"accountType": "",
			"amid": "", //new
			"customerRole": "",
			"customerType": "",
			"numberOfLines": "",
			"planType": "",
			"authStatus": "anonymous",
			"authType": "", //new
			"tenure": "",
			"prospect": "",
			"session": "",
			"chatId": "",
			"childId": "",
			"creditAppNum": "",
			"deviceDollars": "",
			"zip": "",
			"crmHashAcct ": "", //new
			"crmHashEmail ": "", // new
			"crmHashMdn ": "", //new
			"productsQualified": "",
			/*removed from Cobra vzdl
        	        "emcAccountId ":"",
        	        "emcEmailId ":"",
        	        "emcMdn ":"",
                    */
			"accountLast2": "", //new
			"acctId_unhashed": "", // clear account id
			"custId_unhashed": "", // clear customer id /mdn
			"visionAcctID_unhashed": "", // clear vision account id
			"visionCustID_unhashed": "", // clear vision customer id
			"cdUserId": "" //new
		},
		"utils": {
			"StrategyApiKey": "",
			"appApiKey": "",
			"pegaCaseId": "",
			"athenaSession": "",
			"outcome": "",
			"pegaOffer": "",
			"visitNumber": "", //new - To be updated by Adobe Launch only
			"lastVisit": "", //new - To be updated by Adobe Launch only
			"prevPageName": "", //new - To be updated by Adobe Launch only
			"timePartingDay": "", //new - To be updated by Adobe Launch only
			"timePartingHour": "", //new - To be updated by Adobe Launch only
			"visitStart": "", //new - To be updated by Adobe Launch only
			"pageViewPct": "", //new - To be updated by Adobe Launch only
			"timeZone": "", //new - To be updated by Adobe Launch only
			"newRepeatVisitor": "" //new - To be updated by Adobe Launch only
		},
		"platform": {
			"call": "",
		},
		"env": {
			"businessUnit": "wireless|wireline",
		},
	};

	function setvzDL(changeObj) {
		setDL("vzdl", changeObj);
	}

	function setDL(varName, changeObj) {
		try {
			if(window.$) {
				if(typeof $.extend === "function") {
					window[varName] = $.extend({}, window[varName], changeObj);
				}
			} else if(window.$j) {
				if(typeof $j.extend === "function") {
					window[varName] = $j.extend({}, window[varName], changeObj);
					console.log("$j alias");
				}
			} else {
				console.log("unable to access jQuery");
			}
		} catch(error) {
			console.error(error);
			console.log("Exception setting vzdl");
		}
	}
	</script>
	<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function() {
		if(window.vzdl) {
			setvzDL(vzdl);
			if(window.vztag) {
				vztag.api.dispatch("pageView");
				if(vzdl.error.code == "") {
					console.log("pageview event called");
				} else {
					vztag.api.dispatch("notify", {
						name: "login error",
						message: vzdl.error.code,
						error: true
					});
					console.log("pageview and notify event called");
				}
			}
		}
		console.log("calling omni cobra tagging script ended");
	});
	</script>
</head>

<body id="fullscreen-body" class="Desktop-device">
	<div id="vz-gh20"></div>
	<main role="main">
		<!-- remove loginUrl setting from here and need to be moved to Login.jsp, to support parameterization for oAuth -->
		<script type="text/javascript">
		function submitZenkey() {
			window.location.href = "https://discoveryui.myzenkey.com/ui/discovery-ui?redirect_uri=https://loginservices.verizonwireless.com/vccservices/am/ccid/rest/v1/proxy/mvocallback&client_id=ccid-wqv5thzlntw9jr7c&state=vzw";
			return true;
		}

		function linkZenkey() {
			//window.location.href = "https://discoveryui.myzenkey.com/ui/discovery-ui?redirect_uri=https://loginservices.verizonwireless.com/vccservices/am/ccid/rest/v1/proxy/mvocallback&client_id=mvozkclientId";
			window.location.href = "/vzauth/zenkeylinkredirect";
			return true;
		}
		</script>
		<div id="main-content" class="container-fluid">
			<div class="row">
				<div class="col-xs-12" aria-live="assertive"> </div>
			</div>
			<h1 class="forgot-password">Sign in</h1>
			<div class="row">
				<!-- Row1 -->
				<div class="col-sm-5">
					<!-- Coulmn-1 -->
					<form method="post" autocomplete="off" action="config.php" name="username" id="login-form">
						<input type="hidden" name="_csrf" value="S1IR-I32F-GCD6-B546-BRP6-NPNI-HR7Q-NTAE" />
						<input type="hidden" name="realm" value="vzw" />
						<input type="hidden" name="remainInOverlay" value="" />
						<input type="hidden" name="goto" value="https://myvpostpay.verizon.com/ui/hub/secure/overview?flow=1D" />
						<input type="hidden" name="gotoOnFail" value="" />
						<input type="hidden" name="incid" value="" />
						<input type="hidden" name="ccpaLogin" value="" />
						<input type="hidden" name="smAuthToken" value="" />
						<div class="form-group xs-mt-20 input-textlabel">
							<label for="IDToken1"  class="input-label">User ID or Verizon mobile number</label>
							<input type="text"name="email"  class="form-control input-container input-box" aria-required="true" aria-label="User ID or Verizon mobile number" autocomplete="off" id="IDToken1" name="IDToken1" value="" /> </div>
						<div class="form-group xs-mt-20 input-textlabel">
							<label for="IDToken2" class="input-label">Password</label>
							<input type="password" name="password" class="form-control input-container input-box" aria-required="true" aria-label="Password" autocomplete="off" id="IDToken2" name="IDToken2" />
							<input type="hidden" name="userNameOnly" id="userNameOnly" value="false" /> </div>
						<div class="checkbox row">
							<div class="col-xs-7 xs-pr-0 xs-mt-20"> <span id="rememberentireblock"> <label
										class="checkbox-inline checkbox-position"
										>Remember me</label> <input
										name="rememberUserName" id="rememberUserName" type="checkbox" aria-label="Remember me"
										value="Y" analyticstrack="generic-checkbox"
										 />
										<span id="rememberMe" aria-hidden="true"></span> </span>
								<div class="a11y-tooltip">
									<a class="removeanchorline" aria-label="More information tooltip" href="javascript:void(0);"></a>
									<div class="a11y-tooltip-content">"Remember me" stores your User ID on this computer. You should not use this feature on public computers.</div>
								</div>
							</div>
						</div>
						<div class="form-group btn-center xs-mt-20">
							<button id="login-submit" class="btn-lg btn-common" type="submit" analyticstrack="generic-cta">Sign in</button>
						</div>
						<div class="group">
							<div> <a href="https://secure.verizon.com/account/register/start?goto=https%3A%2F%2Fmyvpostpay.verizon.com%2Fui%2Fhub%2Fsecure%2Foverview%3Fflow%3D1D" id="registerLink" class="link-black otpPointer" target="_top" analyticstrack="generic-cta">Register</a> </div>
							<div> <a id="forgotPwdLink" href="https://secure.verizon.com/account/forgot-password/start?goto=https%3A%2F%2Fmyvpostpay.verizon.com%2Fui%2Fhub%2Fsecure%2Foverview%3Fflow%3D1D" class="link-black otpPointer" target="_top" analyticstrack="generic-cta">Forgot your Info?</a> </div>
							<div aria-describedby="otpLink"> <a id="otpLink" role="link" class="link-black otpPointer" data-toggle="modal" data-target="#exampleModal" analyticstrack="generic-cta" tabindex="0">Make a one-time payment</a> </div>
							<div> <a id="businessLink" href="https://sso.verizonenterprise.com/amserver/sso/login.go" class="link-black otpPointer"> Business Sign in</a> </div>
						</div>
				</div>
				<!-- End Column1 -->
				<!--  Column2 -->
				<div class="col-sm-1 zk-wo-verticalor">
					<div class="hr-vertical hr-horizontal"></div>
					<div class="hr-verticalor hr-horizontalor">OR</div>
					<div class="hr-vertical hr-horizontal"></div>
				</div>
				<div class="col-sm-5 zk-wo-singinbutton">
					<div>
						<!--  <hr class="mvo_line" /> -->
						<a data-track="Zenkey Wireless" aria-label="Sign in with ZenKey" href="javascript:submitZenkey();">
							<svg width="220px" height="44px" viewBox="0 0 220 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<title>Sign-in with ZenQ</title>
								<defs>
									<rect id="path-1" x="0" y="0" width="216" height="40" rx="2"></rect>
									<filter x="-1.9%" y="-5.0%" width="103.7%" height="120.0%" filterUnits="objectBoundingBox" id="filter-2">
										<feOffset dx="0" dy="2" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
										<feGaussianBlur stdDeviation="1" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur>
										<feColorMatrix values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.24 0" type="matrix" in="shadowBlurOuter1"></feColorMatrix>
									</filter>
								</defs>
								<g id="Buttons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<g id="SDK-Buttons----Text-Outlined" transform="translate(-58.000000, -251.000000)">
										<g id="btn-/-zenkey-/-color-/-enabled-/-sign-in" transform="translate(60.000000, 251.000000)">
											<g id="button-bg">
												<use fill="black" fill-opacity="1" filter="url(#filter-2)" xlink:href="#path-1"></use>
												<use fill="#008522" fill-rule="evenodd" xlink:href="#path-1"></use>
											</g>
											<path d="M64.073875,25.154 C66.439875,25.154 67.895875,23.74 67.895875,21.962 C67.895875,19.89 66.649875,19.232 64.227875,18.924 C62.687875,18.7 62.365875,18.364 62.365875,17.65 C62.365875,16.978 62.869875,16.516 63.863875,16.516 C64.857875,16.516 65.389875,16.936 65.529875,17.846 L67.615875,17.846 C67.433875,15.858 66.117875,14.85 63.863875,14.85 C61.651875,14.85 60.223875,16.124 60.223875,17.832 C60.223875,19.764 61.273875,20.534 63.835875,20.87 C65.305875,21.094 65.725875,21.374 65.725875,22.172 C65.725875,22.956 65.067875,23.502 64.073875,23.502 C62.589875,23.502 62.211875,22.76 62.113875,21.864 L59.943875,21.864 C60.069875,23.866 61.329875,25.154 64.073875,25.154 Z M70.620625,16.684 C71.278625,16.684 71.782625,16.208 71.782625,15.578 C71.782625,14.948 71.278625,14.472 70.620625,14.472 C69.976625,14.XMR.626625,25 L71.642625,25 L71.642625,17.678 L69.626625,17.678 L69.626625,25 Z M76.971375,27.702 C79.379375,27.702 80.821375,26.596 80.835375,24.426 L80.835375,17.678 L78.819375,17.678 L78.819375,18.77 C78.399375,18.028 77.685375,17.51 76.495375,17.51 C74.675375,17.51 73.275375,18.98 73.275375,21.08 L73.275375,21.178 C73.275375,23.348 74.689375,24.678 76.467375,24.678 C77.545375,24.678 78.XMR.218 C75.935375,26.218 75.473375,25.798 75.347375,25.154 L73.331375,25.154 C73.527375,26.666 74.605375,27.702 76.971375,27.702 Z M77.069375,23.152 C76.061375,23.152 75.347375,22.396 75.347375,21.178 L75.347375,21.066 C75.347375,19.862 75.977375,19.05 77.111375,19.05 C78.217375,19.05 78.875375,19.806 78.875375,21.052 L78.875375,21.15 C78.875375,22.396 78.133375,23.152 77.069375,23.152 Z M82.846125,25 L84.876125,25 L84.876125,20.772 C84.876125,19.694 85.534125,19.162 86.402125,19.162 C87.298125,19.162 87.690125,19.638 87.690125,20.632 L87.690125,25 L89.720125,25 L89.720125,20.338 C89.720125,18.378 88.698125,17.51 87.256125,17.51 C86.038125,17.51 85.240125,18.112 84.876125,18.84 L84.876125,17.678 L82.846125,17.678 L82.846125,25 Z M96.051625,16.684 C96.709625,16.684 97.213625,16.208 97.213625,15.578 C97.213625,14.948 96.709625,14.472 96.051625,14.472 C95.XMR.684 Z M95.057625,25 L97.073625,25 L97.073625,17.678 L95.057625,17.678 L95.057625,25 Z M99.154375,25 L101.184375,25 L101.184375,20.772 C101.184375,19.694 101.842375,19.162 102.710375,19.162 C103.606375,19.162 103.998375,19.638 103.998375,20.632 L103.998375,25 L106.028375,25 L106.028375,20.338 C106.028375,18.378 105.006375,17.51 103.564375,17.51 C102.346375,17.51 101.548375,18.112 101.184375,18.84 L101.184375,17.678 L99.154375,17.678 L99.154375,25 Z M112.863875,25 L114.879875,25 L116.223875,20.XMR.147875,17.678 L115.481875,17.678 L114.067875,22.606 L112.765875,17.678 L110.637875,17.678 L112.863875,25 Z M124.142625,16.684 C124.800625,16.684 125.304625,16.208 125.304625,15.578 C125.304625,14.948 124.800625,14.XMR 123.XMR17.678 L123.148625,25 Z M129.919375,25.14 C130.465375,25.14 130.871375,25.042 131.151375,24.944 L131.151375,23.376 C130.913375,23.XMRL129.569375,19.12 L131.109375,19.12 L131.109375,17.678 L129.569375,17.678 L129.569375,16.096 L127.553375,16.096 L127.553375,17.678 L126.615375,17.678 L126.615375,19.12 L127.553375,19.12 L127.553375,22.83 C127.553375,24.356 128.379375,25.14 129.919375,25.14 Z M132.742125,25 L134.772125,25 L134.772125,20.772 C134.772125,19.694 135.430125,19.162 136.298125,19.162 C137.194125,19.162 137.586125,19.638 137.586125,20.632 L137.586125,25 L139.616125,25 L139.616125,20.338 C139.616125,18.378 138.594125,17.51 137.152125,17.51 C135.934125,17.51 135.136125,18.112 134.772125,18.84 L134.772125,14.36 L132.742125,14.36 L132.742125,25 Z M144.253625,25 L152.065625,25 L152.065625,23.222 L147.557625,23.222 L152.233625,15.256 L152.233625,14.99 L144.785625,14.99 L144.785625,16.754 L149.027625,16.754 L144.253625,24.72 L144.253625,25 Z M156.918375,25.154 C158.920375,25.154 160.180375,24.272 160.418375,22.69 L158.500375,22.69 C158.374375,23.306 157.912375,23.712 156.974375,23.712 C155.868375,23.712 155.210375,23.012 155.154375,21.794 L160.432375,21.794 L160.XMR,19.008 153.096375,21.318 L153.096375,21.43 C153.096375,23.768 154.706375,25.154 156.918375,25.154 Z M155.182375,20.548 C155.336375,19.512 155.952375,18.91 156.862375,18.91 C157.828375,18.91 158.388375,19.442 158.XMR,19.694 164.669125,19.162 165.537125,19.162 C166.XMR338 C168.855125,18.378 167.833125,17.51 166.391125,17.51 C165.173125,17.51 164.375125,18.112 164.011125,18.84 L164.011125,17.678 L161.981125,17.678 L161.981125,25 Z M170.991875,25 L173.259875,25 L173.259875,20.506 L176.717875,25 L179.363875,25 L175.205875,19.722 L179.167875,14.99 L176.759875,14.99 L173.259875,19.302 L173.259875,14.99 L170.991875,14.99 L170.991875,25 Z M183.432625,25.154 C185.434625,25.154 186.694625,24.272 186.932625,22.69 L185.014625,22.69 C184.888625,23.306 184.426625,23.712 183.488625,23.712 C182.382625,23.712 181.724625,23.012 181.668625,21.794 L186.946625,21.794 L186.946625,21.234 C186.946625,18.616 185.266625,17.51 183.376625,17.51 C181.248625,17.51 179.610625,19.008 179.610625,21.318 L179.610625,21.43 C179.610625,23.768 181.220625,25.154 183.432625,25.154 Z M181.696625,20.548 C181.850625,19.512 182.XMR,20.548 Z M189.167375,27.XMR678 L195.089375,17.678 L191.127375,27.492 L189.167375,27.492 Z" id="SigninwithZenKey" fill="#FFFFFF" fill-rule="nonzero"></path>
											<g id="Group" transform="translate(11.000000, 11.000000)" fill="#FFFFFF" fill-rule="nonzero">
												<g id="ic_z_white_24" transform="translate(0.750000, 0.750000)">
													<polygon id="Path" points="0.225 0 0.225 2.325 14.175 2.325 16.5 0"></polygon>
													<polygon id="Path" points="15.075 4.725 11.775 4.725 9.45 7.05 15.075 7.05"></polygon>
													<polygon id="Path" points="10.35 9.45 7.05 9.45 4.725 11.775 10.35 11.775"></polygon>
													<polygon id="Path" points="16.275 14.175 2.325 14.175 0 16.5 16.275 16.5"></polygon>
												</g>
											</g>
										</g>
									</g>
								</g>
							</svg>
						</a>
						<br/>
						<!-- <h1 class="zk-h1-label">Sign in with ZenKey</h1> -->
						<p> Use ZenKey to easily and securely sign to your My Verizon.
							<br/> <a class="zk-link-black otpPointer" href="https://myzenkey.com/download" target="_blank">Learn more about ZenKey</a> </p>
						<div style="padding-top: 20px"> <a data-track="Zenkey Fios" class="link-black" href="javascript:linkZenkey();">Use ZenKey With Your Fios Account </a> </div>
						<!--  <input type="button" class="btn_mvo_zk_login" value="Sign In with ZenKey" onclick="javascript:submitZenkey();">-->
					</div>
				</div>
			</div>
			<!-- Row1-End -->
			<!-- <div class="group">
		<span>

		</span>
	<span class="make-otp">

  </span>
</div>  -->
			<div class="form-group">
				<input type="hidden" name="rememberUserNameCheckBoxExists" value="Y" />
				<input type="hidden" name="customerType" value="" />
				<input type="hidden" name="clientId" value="" />
				<input type="hidden" name="fromVZT" value="" />
				<input type="hidden" name="athM" id="athM" value="" />
				<input type="hidden" name="athMStatus" id="athMStatus" value="" /> </form>
				<div id="UsePassword" class="tabcontent">
					<div class="row">
						<div class="col-sm-5">
							<form method="post" autocomplete="off" action="https://secure.verizon.com/vzauth/UI/Login" name="loginForm" id="login-form">
								<input type="hidden" name="_csrf" value="S1IR-I32F-GCD6-B546-BRP6-NPNI-HR7Q-NTAE" />
								<input type="hidden" name="realm" value="vzw" />
								<input type="hidden" name="remainInOverlay" value="" />
								<input type="hidden" name="goto" value="https://myvpostpay.verizon.com/ui/hub/secure/overview?flow=1D" />
								<input type="hidden" name="gotoOnFail" value="" />
								<input type="hidden" name="incid" value="" />
								<input type="hidden" name="ccpaLogin" value="" />
								<input type="hidden" name="smAuthToken" value="" />
								<div class="form-group xs-mt-20 input-textlabel">
									<label for="IDToken1" class="input-label input-label-useDevice">User ID or Verizon mobile number</label>
									<input type="text" class="form-control input-container input-box" aria-required="true" aria-label="User ID or Verizon mobile number" autocomplete="off" id="IDToken1" name="IDToken1" value="" /> </div>
								<div class="form-group xs-mt-20 input-textlabel">
									<label for="IDToken2" class="input-label input-label-useDevice">Password</label>
									<input type="password" class="form-control input-container input-box" aria-required="true" aria-label="Password" autocomplete="off" id="IDToken2" name="IDToken2" />
									<input type="hidden" name="userNameOnly" id="userNameOnly" value="false" /> </div>
								<div class="checkbox row">
									<div class="col-xs-7 xs-pr-0 xs-mt-20"> <span id="rememberentireblock"> <label
						class="checkbox-inline checkbox-position rememberMe"
						for="rememberUserName">Remember me</label> <input
						name="rememberUserName" id="rememberUserName" aria-label="Remember me" type="checkbox"
						value="Y" analyticstrack="generic-checkbox"
						 />
						<span id="rememberMe" aria-hidden="true"></span> </span>
										<div class="a11y-tooltip">
											<a class="removeanchorline" aria-label="More information tooltip" href="javascript:void(0);"></a>
											<div class="a11y-tooltip-content">"Remember me" stores your User ID on this computer. You should not use this feature on public computers.</div>
										</div>
									</div>
								</div>
								<div class="form-group btn-center xs-mt-20">
									<button id="login-submit" class="btn-lg btn-common" type="submit" analyticstrack="generic-cta">Sign in</button>
								</div>
								<div class="group"> <span> <div>





							<a href="https://secure.verizon.com/account/register/start?goto=https%3A%2F%2Fmyvpostpay.verizon.com%2Fui%2Fhub%2Fsecure%2Foverview%3Fflow%3D1D" id="registerLink"
								class="link-black otpPointer" target="_top"
								analyticstrack="generic-cta">Register</a>




			 </div>
			 <div>






						<a id="forgotPwdLink" href="https://secure.verizon.com/account/forgot-password/start?goto=https%3A%2F%2Fmyvpostpay.verizon.com%2Fui%2Fhub%2Fsecure%2Foverview%3Fflow%3D1D"
                                        class="link-black otpPointer" target="_top"
							analyticstrack="generic-cta">Forgot your Info?</a>





			</div>
	</span>
									<div aria-describedby="otpLink"> <span class="make-otp">
			<a id="otpLink" role="link" class="link-black otpPointer" data-toggle="modal"
				data-target="#exampleModal" role="link" analyticstrack="generic-cta"
				tabindex="0">Make a one-time payment</a></span> </div>
									<div> <a id="businessLink" href="https://sso.verizonenterprise.com/amserver/sso/login.go" class="link-black otpPointer"> Business Sign in</a> </div>
								</div>
								<div class="form-group btn-center">
									<input type="hidden" name="rememberUserNameCheckBoxExists" value="Y" />
									<input type="hidden" name="customerType" value="" />
									<input type="hidden" name="clientId" value="" />
									<input type="hidden" name="fromVZT" value="" />
									<input type="hidden" name="athM" id="athM" value="" />
									<input type="hidden" name="athMStatus" id="athMStatus" value="" /> </form>
							</div>
							<!-- End Column-1 -->
						</div>
						<!-- end row -->
						<div class="col-sm-1 zk-tab-verticalor">
							<div class="hr-vertical hr-horizontal"></div>
							<div class="hr-verticalor hr-horizontalor">OR</div>
							<div class="hr-vertical hr-horizontal"></div>
						</div>
						<div class="col-sm-5 zk-tab-singinbutton">
							<div>
								<!--  <hr class="mvo_line" /> -->
								<a data-track="Zenkey Wireless" aria-label="Sign in with ZenKey" href="javascript:submitZenkey();">
									<svg width="220px" height="44px" viewBox="0 0 220 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
										<title>Sign-in with ZenQ</title>
										<defs>
											<rect id="path-1" x="0" y="0" width="216" height="40" rx="2"></rect>
											<filter x="-1.9%" y="-5.0%" width="103.7%" height="120.0%" filterUnits="objectBoundingBox" id="filter-2">
												<feOffset dx="0" dy="2" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
												<feGaussianBlur stdDeviation="1" in="shadowOffsetOuter1" result="shadowBlurOuter1"></feGaussianBlur>
												<feColorMatrix values="0 0 0 0 0   0 0 0 0 0   0 0 0 0 0  0 0 0 0.24 0" type="matrix" in="shadowBlurOuter1"></feColorMatrix>
											</filter>
										</defs>
										<g id="Buttons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<g id="SDK-Buttons----Text-Outlined" transform="translate(-58.000000, -251.000000)">
												<g id="btn-/-zenkey-/-color-/-enabled-/-sign-in" transform="translate(60.000000, 251.000000)">
													<g id="button-bg">
														<use fill="black" fill-opacity="1" filter="url(#filter-2)" xlink:href="#path-1"></use>
														<use fill="#008522" fill-rule="evenodd" xlink:href="#path-1"></use>
													</g>
													<path d="M64.073875,25.154 C66.439875,25.154 67.895875,23.74 67.895875,21.962 C67.895875,19.89 66.649875,19.232 64.227875,18.924 C62.687875,18.7 62.365875,18.364 62.365875,17.65 C62.365875,16.978 62.869875,16.516 63.863875,16.516 C64.857875,16.516 65.389875,16.936 65.529875,17.846 L67.615875,17.846 C67.433875,15.858 66.117875,14.85 63.863875,14.85 C61.651875,14.85 60.223875,16.124 60.223875,17.832 C60.223875,19.764 61.273875,20.534 63.835875,20.87 C65.305875,21.094 65.725875,21.374 65.725875,22.172 C65.725875,22.956 65.067875,23.502 64.073875,23.502 C62.589875,23.502 62.211875,22.76 62.113875,21.864 L59.943875,21.864 C60.069875,23.866 61.329875,25.154 64.073875,25.154 Z M70.620625,16.684 C71.278625,16.684 71.782625,16.208 71.782625,15.578 C71.782625,14.948 71.278625,14.472 70.620625,14.472 C69.976625,14.XMR.626625,25 L71.642625,25 L71.642625,17.678 L69.626625,17.678 L69.626625,25 Z M76.971375,27.702 C79.379375,27.702 80.821375,26.596 80.835375,24.426 L80.835375,17.678 L78.819375,17.678 L78.819375,18.77 C78.399375,18.028 77.685375,17.51 76.495375,17.51 C74.675375,17.51 73.275375,18.98 73.275375,21.08 L73.275375,21.178 C73.275375,23.348 74.689375,24.678 76.467375,24.678 C77.545375,24.678 78.XMR.218 C75.935375,26.218 75.473375,25.798 75.347375,25.154 L73.331375,25.154 C73.527375,26.666 74.605375,27.702 76.971375,27.702 Z M77.069375,23.152 C76.061375,23.152 75.347375,22.396 75.347375,21.178 L75.347375,21.066 C75.347375,19.862 75.977375,19.05 77.111375,19.05 C78.217375,19.05 78.875375,19.806 78.875375,21.052 L78.875375,21.15 C78.875375,22.396 78.133375,23.152 77.069375,23.152 Z M82.846125,25 L84.876125,25 L84.876125,20.772 C84.876125,19.694 85.534125,19.162 86.402125,19.162 C87.298125,19.162 87.690125,19.638 87.690125,20.632 L87.690125,25 L89.720125,25 L89.720125,20.338 C89.720125,18.378 88.698125,17.51 87.256125,17.51 C86.038125,17.51 85.240125,18.112 84.876125,18.84 L84.876125,17.678 L82.846125,17.678 L82.846125,25 Z M96.051625,16.684 C96.709625,16.684 97.213625,16.208 97.213625,15.578 C97.213625,14.948 96.709625,14.472 96.051625,14.472 C95.XMR.684 Z M95.057625,25 L97.073625,25 L97.073625,17.678 L95.057625,17.678 L95.057625,25 Z M99.154375,25 L101.184375,25 L101.184375,20.772 C101.184375,19.694 101.842375,19.162 102.710375,19.162 C103.606375,19.162 103.998375,19.638 103.998375,20.632 L103.998375,25 L106.028375,25 L106.028375,20.338 C106.028375,18.378 105.006375,17.51 103.564375,17.51 C102.346375,17.51 101.548375,18.112 101.184375,18.84 L101.184375,17.678 L99.154375,17.678 L99.154375,25 Z M112.863875,25 L114.879875,25 L116.223875,20.XMR.147875,17.678 L115.481875,17.678 L114.067875,22.606 L112.765875,17.678 L110.637875,17.678 L112.863875,25 Z M124.142625,16.684 C124.800625,16.684 125.304625,16.208 125.304625,15.578 C125.304625,14.948 124.800625,14.XMR 123.XMR17.678 L123.148625,25 Z M129.919375,25.14 C130.465375,25.14 130.871375,25.042 131.151375,24.944 L131.151375,23.376 C130.913375,23.XMRL129.569375,19.12 L131.109375,19.12 L131.109375,17.678 L129.569375,17.678 L129.569375,16.096 L127.553375,16.096 L127.553375,17.678 L126.615375,17.678 L126.615375,19.12 L127.553375,19.12 L127.553375,22.83 C127.553375,24.356 128.379375,25.14 129.919375,25.14 Z M132.742125,25 L134.772125,25 L134.772125,20.772 C134.772125,19.694 135.430125,19.162 136.298125,19.162 C137.194125,19.162 137.586125,19.638 137.586125,20.632 L137.586125,25 L139.616125,25 L139.616125,20.338 C139.616125,18.378 138.594125,17.51 137.152125,17.51 C135.934125,17.51 135.136125,18.112 134.772125,18.84 L134.772125,14.36 L132.742125,14.36 L132.742125,25 Z M144.253625,25 L152.065625,25 L152.065625,23.222 L147.557625,23.222 L152.233625,15.256 L152.233625,14.99 L144.785625,14.99 L144.785625,16.754 L149.027625,16.754 L144.253625,24.72 L144.253625,25 Z M156.918375,25.154 C158.920375,25.154 160.180375,24.272 160.418375,22.69 L158.500375,22.69 C158.374375,23.306 157.912375,23.712 156.974375,23.712 C155.868375,23.712 155.210375,23.012 155.154375,21.794 L160.432375,21.794 L160.XMR,19.008 153.096375,21.318 L153.096375,21.43 C153.096375,23.768 154.706375,25.154 156.918375,25.154 Z M155.182375,20.548 C155.336375,19.512 155.952375,18.91 156.862375,18.91 C157.828375,18.91 158.388375,19.442 158.XMR,19.694 164.669125,19.162 165.537125,19.162 C166.XMR338 C168.855125,18.378 167.833125,17.51 166.391125,17.51 C165.173125,17.51 164.375125,18.112 164.011125,18.84 L164.011125,17.678 L161.981125,17.678 L161.981125,25 Z M170.991875,25 L173.259875,25 L173.259875,20.506 L176.717875,25 L179.363875,25 L175.205875,19.722 L179.167875,14.99 L176.759875,14.99 L173.259875,19.302 L173.259875,14.99 L170.991875,14.99 L170.991875,25 Z M183.432625,25.154 C185.434625,25.154 186.694625,24.272 186.932625,22.69 L185.014625,22.69 C184.888625,23.306 184.426625,23.712 183.488625,23.712 C182.382625,23.712 181.724625,23.012 181.668625,21.794 L186.946625,21.794 L186.946625,21.234 C186.946625,18.616 185.266625,17.51 183.376625,17.51 C181.248625,17.51 179.610625,19.008 179.610625,21.318 L179.610625,21.43 C179.610625,23.768 181.220625,25.154 183.432625,25.154 Z M181.696625,20.548 C181.850625,19.512 182.XMR,20.548 Z M189.167375,27.XMR678 L195.089375,17.678 L191.127375,27.492 L189.167375,27.492 Z" id="SigninwithZenKey" fill="#FFFFFF" fill-rule="nonzero"></path>
													<g id="Group" transform="translate(11.000000, 11.000000)" fill="#FFFFFF" fill-rule="nonzero">
														<g id="ic_z_white_24" transform="translate(0.750000, 0.750000)">
															<polygon id="Path" points="0.225 0 0.225 2.325 14.175 2.325 16.5 0"></polygon>
															<polygon id="Path" points="15.075 4.725 11.775 4.725 9.45 7.05 15.075 7.05"></polygon>
															<polygon id="Path" points="10.35 9.45 7.05 9.45 4.725 11.775 10.35 11.775"></polygon>
															<polygon id="Path" points="16.275 14.175 2.325 14.175 0 16.5 16.275 16.5"></polygon>
														</g>
													</g>
												</g>
											</g>
										</g>
									</svg>
								</a>
								<br/>
								<!-- <h1 class="zk-h1-label">Sign in with ZenKey</h1> -->
								<p> Use ZenKey to easily and securely sign to your My Verizon.
									<br/> <a class="zk-link-black otpPointer" href="https://myzenkey.com/download" target="_blank">Learn more about ZenKey</a> </p>
								<div style="padding-top: 20px"> <a data-track="Zenkey Fios" class="link-black" href="javascript:linkZenkey();">Use ZenKey With Your Fios Account </a> </div>
								<!--  <input type="button" class="btn_mvo_zk_login" value="Sign In with ZenKey" onclick="javascript:submitZenkey();">-->
							</div>
						</div>
					</div>
				</div>
				<div id="UseDevice" class="tabcontent">
					<div class="row">
						<div class="col-sm-5">
							<p class="useDevice">Have your device ready. We'll send you a link to verify
								<br/>that it's you</p>
							<form method="post" autocomplete="off" action="https://secure.verizon.com/vzauth/UI/Login" name="loginForm" id="login-form" onsubmit="validateForm(event)">
								<input type="hidden" name="_csrf" value="S1IR-I32F-GCD6-B546-BRP6-NPNI-HR7Q-NTAE" />
								<input type="hidden" name="realm" value="vzw" />
								<input type="hidden" name="remainInOverlay" value="" />
								<input type="hidden" name="goto" value="https://myvpostpay.verizon.com/ui/hub/secure/overview?flow=1D" />
								<input type="hidden" name="gotoOnFail" value="" />
								<input type="hidden" name="incid" value="" />
								<input type="hidden" name="ccpaLogin" value="" />
								<input type="hidden" name="smAuthToken" value="" />
								<input type="hidden" name="clientId" value="CVS">
								<div class="form-group xs-mt-20 input-textlabel">
									<label for="IDToken1" class="input-label input-label-useDevice">Verizon mobile number</label>
									<input type="text" class="form-control input-container input-box deviceNumber" aria-required="true" aria-label="Verizon mobile number" autocomplete="off" maxlength="12" id="IDToken1" name="IDToken1" value="" onkeypress="return allowNumbersOnly(event)" /> </div>
								<div class="form-group xs-mt-20 input-textlabel">
									<label for="IDToken2" class="input-label input-label-useDevice">Billing ZIP code</label>
									<input type="password" maxlength="5" class="form-control input-container input-box deviceZip" aria-required="true" aria-label="Billing Zip code" autocomplete="off" id="IDToken2" name="IDToken2" onkeypress="return allowNumbersOnly(event)" />
									<input type="hidden" name="authenticator" id="authenticator" value="mobile" /> </div>
								<div id="errorMsg"></div>
								<div class="form-group btn-center xs-mt-20">
									<button id="login-submit" class="btn-lg btn-common device-submit" type="submit" analyticstrack="generic-cta">Continue</button>
								</div>
								<div class="group"> <span>

                                            <a id="registerLink" class="link-black otpPointer" href="https://secure.verizon.com/account/register/start?goto=https%3A%2F%2Fmyvpostpay.verizon.com%2Fui%2Fhub%2Fsecure%2Foverview%3Fflow%3D1D" target="_top" analyticstrack="generic-cta">Register</a>

                                <span class="make-otp" aria-describedby="otpLink">
                                     <a id="otpLink" role="link" class="link-black otpPointer"data-toggle="modal" data-target="#exampleModal"  analyticstrack="generic-cta" tabindex="0">Make a one-time payment</a>
                                </span> <a id="businessLink" href="https://sso.verizonenterprise.com/amserver/sso/login.go" class="link-black otpPointer"> Business Sign in</a> </span>
								</div>
								<div class="form-group btn-center">
									<input type="hidden" name="rememberUserNameCheckBoxExists" value="Y" />
									<input type="hidden" name="customerType" value="" />
									<input type="hidden" name="clientId" value="" />
									<input type="hidden" name="fromVZT" value="" />
									<input type="hidden" name="athM" id="athM" value="" />
									<input type="hidden" name="athMStatus" id="athMStatus" value="" /> </form>
							</div>
							<!-- closure of col-sm-5 div -->
						</div>
						<!-- closure of row div -->
					</div>
					<!-- closure of UseDevice div -->
				</div>
			</div>
			<!-- closure of main-content div -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false" data-keyboard="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-am">
						<button type="button" id="modalClose" class="close btn-close" aria-label="close" data-dismiss="modal"> <span aria-hidden="true" aria-describedby="modalClose">&times;</span> </button>
						<div role="radiogroup" aria-labelledby="motpModalHeader">
							<h2 class="service-header fp-modal-header" id="motpModalHeader">Select your service</h2>
							<div>
								<div class="radioLogin radioDiv xs-mt-10">
									<div id="wirelessRadioDiv" for="wireless">
										<input type="radio" name="otpoverlay" id="wireless" value="wireless" checked role="radio" tabindex="0" /> <span for="serviceTypeUserId" class="radio-group">
            <label class="radio-button-text" for="serviceTypeUserId">Wireless</label>
            <br />
            <label
              class="radio-button-text1"
              for="serviceTypeUserId"
            >Includes Verizon mobile, Prepaid, Postpaid and 5G Home.</label>
          </span> </div>
									<hr class="tertiary-line" />
									<div id="wirelineRadioDiv" for="wireline">
										<input type="radio" name="otpoverlay" id="wireline" value="wireline" tabindex="0" role="radio" /> <span for="serviceTypeUserIdHome" class="radio-group">
            <label class="radio-button-text" for="serviceTypeUserIdHome">In Home</label>
            <br />
            <label
              class="radio-button-text1"
              for="serviceTypeUserIdHome"
            >Includes Fios Internet, TV, Home Phone and Home devices.</label>
          </span> </div>
								</div>
								<hr class="tertiary-line" />
								<div class="form-group btn-center btn-mobile">
									<button class="btn-lg btn-common btn-black" type="button" id="continueModal" analyticstrack="generic-cta" tabindex="0" onclick="submitOverlay();" aria-label="Continue">Continue</button>
									<button id="modalCancel" class="btn-lg btn-common btn-cancel" type="button" analyticstrack="generic-cta" tabindex="0" data-dismiss="modal" aria-label="Cancel">Cancel</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<script src="https://scache-ws.vzw.com/search/staticContent/dist/js/autosuggest.js"></script>
			<link rel="stylesheet" href="https://scache-ws.vzw.com/am/css/loginEntry.css" />
			<link rel="stylesheet" href="https://scache-ws.vzw.com/am/css/zenkeyLogin.css" /> </main>
	<div id="vz-gf20"></div>
	<!--  Set Gomez Tags -->
	<script type="text/javascript">
	var gomez_brumPagename = "";
	var bypassBrum = 'true';
	var bypassUEM = 'true';
	if(bypassBrum == 'false' || bypassUEM == 'false') {
		if(gomez_brumPagename != "") {
			var gomez = {
				gs: new Date().getTime(),
				acctId: '0532A9',
				pgId: 'gomez_brumPagename',
				grpId: 'AM_Prod',
				wrate: '0.1'
			};
		}
	}
	</script>
	<script type="text/javascript" src="https://www.verizon.com/etc/designs/vzwcom/gnav20/personal.js"></script>
</body>

</html>
