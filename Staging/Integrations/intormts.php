<html>
	<head>
		<link rel="stylesheet" type="text/css" href="index.css">
		<div id="topheader">
			<div id="headercont"><br />
				<img border="0" align="middle" src="header.png"></img>
			</div>
		</div>
	</head>
	<body>
		<div id="bodystyle">

		<br /><br />
			
			<div id="maincolumn">
				<div id="searchbox">
					<div id="innerbox">
						<div id="searchtitle">
							What is the merchant needing today?
						</div>
						<form action="http://10.9.244.56/Integrations/intormts.php" name="myform" method="POST">
						<div id="selectbox">
							<select id="selectbox" onChange="document.forms['myform'].submit();" name="selectbox">
								<option value="selec">Please select one...</option>
								<option value="APmts">Adaptive payment issues or not working</option>
								<option value="APint">Adaptive payments to be set up for website</option>
								<option value="APImts">APIs not going through or errors</option>
								<option value="BMLint">BML banners put on website</option>
								<option value="SUint">Help getting Pro, Advanced or ECS on site</option>
								<option value="IPNmts">IPN is not working or has issues</option>
								<option value="IPNint">IPN set up for website</option>
								<option value="APIint">Needs API signature or certificate for site</option>
								<option value="PAYmts">Payment is going through but some data is not appearing</option>
								<option value="PAYsmts">Payments are not processing</option>
								<option value="BUTmts">PayPal Button issues or not working</option>
								<option value="BUTint">PayPal Button needs to be put up on website</option>
								<option value="RECmts">Receiving errors with Pro, Advanced or ECS</option>
								<option value="SANmts">Sandbox errors</option>
								<option value="SANint">Sandbox setup with site in order to test</option>
							</select></form>
						</div>
						<div id="rn_SearchControls">
							<a id="rn_SearchControls" href="mailto:msi@paypal.com?subject=My Question is Not Listed&body=Please describe your merchants question below:">
								My Question is Not Listed
							</a>
						</div>
					</div>
				</div> 
				<div id="bmlbanner">&nbsp;&nbsp;&nbsp;
					<script type="text/javascript" data-pp-pubid="6c22349823" data-pp-placementtype="170x100"> (function (d, t) {
						"use strict";
						var s = d.getElementsByTagName(t)[0], n = d.createElement(t);
						n.src = "//paypal.adtag.where.com/merchant.js";
						s.parentNode.insertBefore(n, s);
						}(document, "script"));
					</script>
				</div>
				<div id="phplinks">
					<?php
						$question=$_POST['selectbox'];
						if($question=="selec"){
							header("location:index.html");
						}
						if($question=="APmts"){
							Echo "<h2>Adaptive payment issues or not working</h2><br />
									<p>MTS would handle this.</p><br /><br />
									<h4>Quick References:</h4><br />
									<ul>
									<li><a href='https://developer.paypal.com/webapps/developer/docs/classic/adaptive-payments/integration-guide/APIntro/'>Intro to Adaptive Payments</a></li><br />
									<li><a href='https://developer.paypal.com/webapps/developer/docs/classic/products/adaptive-payments/'>Developer Page on Adaptive Payments</a></li><br />
									<li><a href='https://developer.paypal.com/webapps/developer/docs/classic/adaptive-payments/gs_AdaptivePayments/'>Getting Started with Adaptive Payments</a></li><br />
									<li><a href='https://ppmts.custhelp.com/'>MTS Support</a></li></ul>";
						}
						if($question=="APint"){
							Echo "<h2>Adaptive payments to be set up for website</h2><br />
									<p>Integrations would handle this.</p><br /><br />
									<h4>Quick References:</h4><br />
									<ul>
									<li><a href='https://developer.paypal.com/webapps/developer/docs/classic/adaptive-payments/integration-guide/APIntro/'>Intro to Adaptive Payments</a></li><br />
									<li><a href='https://developer.paypal.com/webapps/developer/docs/classic/products/adaptive-payments/'>Developer Page on Adaptive Payments</a></li><br />
									<li><a href='https://developer.paypal.com/webapps/developer/docs/classic/adaptive-payments/gs_AdaptivePayments/'>Getting Started with Adaptive Payments</a></li></ul>";
						}
						if($question=="APImts"){
							Echo "<h2>APIs not going through or errors</h2><br />
									<p>MTS would handle this.</p><br /><br />
									<h4>Quick References:</h4><br />
									<ul>
									<li><a href='https://developer.paypal.com/webapps/developer/docs/classic/api/gs_PayPalAPIs/'>APIs Getting Started</a></li><br />
									<li><a href='https://developer.paypal.com/webapps/developer/docs/classic/api/apiCredentials/'>Creating and Managing Classic API Credentials</a></li><br />
									<li><a href='https://ppmts.custhelp.com/'>MTS Support</a></li></ul>";
						}
						if($question=="BMLint"){
							Echo "<h2>BML banners put on website</h2><br />
									<p>Integrations would handle this.</p><br /><br />
									<h4>Quick References:</h4><br />
									<ul>
									<li><a href='https://financing.paypal.com'>BML Banner Page</a></li></ul>";
						}
						if($question=="SUint"){
							Echo "<h2>Help getting Pro, Advanced or ECS on site</h2><br />
									<p>Integrations would handle this.</p><br /><br />
									<h4>Quick References:</h4><br />
									<ul>
									<li><a href='http://paypal-integrations.com/2/login/'>Integration Support Page</a></li></ul>";
						}
						if($question=="IPNmts"){
							Echo "<h2>IPN is not working or has issues</h2><br />
									<p>MTS would handle this.</p><br /><br />
									<h4>Quick References:</h4><br />
									<ul>
									<li><a href='https://developer.paypal.com/webapps/developer/docs/classic/products/instant-payment-notification/'>IPN Page</a></li><br />
									<li><a href='https://ppmts.custhelp.com/'>MTS Support</a></li></ul>";
						}
						if($question=="IPNint"){
							Echo "<h2>IPN set up for website</h2><br />
									<p>Integrations would handle this.</p><br /><br />
									<h4>Quick References:</h4><br />
									<ul>
									<li><a href='https://developer.paypal.com/webapps/developer/docs/classic/products/instant-payment-notification/'>IPN Page</a></li></ul>";
						}
						if($question=="APIint"){
							Echo "<h2>Needs API signature or certificate for site</h2><br />
									<p>Integrations would handle this.</p><br /><br />
									<h4>Quick References:</h4><br />
									<ul>
									<li><a href='https://developer.paypal.com/webapps/developer/docs/classic/api/apiCredentials/'>Getting API Credentials</a></li></ul>";
						}
						if($question=="PAYmts"){
							Echo "<h2>Payment is going through but some data is not appearing</h2><br />
									<p>MTS would handle this.</p><br /><br />
									<h4>Quick References:</h4><br />
									<ul>
									<li><a href='https://ppmts.custhelp.com/'>MTS Support</a></li></ul>";
						}
						if($question=="PAYsmts"){
							Echo "<h2>Payments are not processing</h2><br />
									<p>MTS would handle this.</p><br /><br />
									<h4>Quick References:</h4><br />
									<ul>
									<li><a href='https://ppmts.custhelp.com/'>MTS Support</a></li></ul>";
						}
						if($question=="BUTmts"){
							Echo "<h2>PayPal Button issues or not working</h2><br />
									<p>MTS would handle this.</p><br /><br />
									<h4>Quick References:</h4><br />
									<ul>
									<li><a href='https://ppmts.custhelp.com/'>MTS Support</a></li><br />
									<li><a href='https://developer.paypal.com/webapps/developer/docs/classic/paypal-payments-standard/integration-guide/wp_standard_overview/'> PayPal Button Guide</a></li></ul>";
						}
						if($question=="BUTint"){
							Echo "<h2>PayPal Button needs to be put up on website</h2><br />
									<p>Integrations would handle this.</p><br /><br />
									<h4>Quick References:</h4><br />
									<ul>
									<li><a href='https://developer.paypal.com/webapps/developer/docs/classic/paypal-payments-standard/integration-guide/wp_standard_overview/'> PayPal Button Guide</a></li></ul>";
						}
						if($question=="RECmts"){
							Echo "<h2>Receiving errors with Pro, Advanced or ECS</h2><br />
									<p>MTS would handle this.</p><br /><br />
									<h4>Quick References:</h4><br />
									<ul>
									<li><a href='https://ppmts.custhelp.com/'>MTS Support</a></li></ul>";
						}
						if($question=="SANmts"){
							Echo "<h2>Sandbox errors</h2><br />
									<p>MTS would handle this.</p><br /><br />
									<h4>Quick References:</h4><br />
									<ul>
									<li><a href='https://developer.paypal.com/webapps/developer/docs/classic/lifecycle/sb_overview/'>Sandbox Overview</a></li><br />
									<li><a href='https://ppmts.custhelp.com/'>MTS Support</a></li></ul>";
						}
						if($question=="SANint"){
							Echo "<h2>Sandbox setup with site in order to test</h2><br />
									<p>Integrations would handle this.</p><br /><br />
									<h4>Quick References:</h4><br />
									<ul>
									<li><a href='https://developer.paypal.com/webapps/developer/docs/classic/lifecycle/sb_overview/'>Sandbox Overview</a></li></ul>";
						}
						?>
			</div>
		</div>
	</div>
	<div id="pp_footer">
		<div class="pp_footer pp_footer_menu">
			<div id="pp_footer_menu">
				        <a href="https://www.paypal.com/webapps/mpp/paypal-fees">
							Fees
						</a>
						<a href="https://www.paypal.com/us/cgi-bin/webscr?cmd=p/gen/ua/policy_privacy-outside">
							Privacy
						</a>
						<a href="https://www.paypal.com/webapps/mpp/paypal-safety-and-security">
							Security Center
						</a>
						<a href="https://www.paypal.com/us/cgi-bin/webscr?cmd=_help&t=escalateTab">
							Customer Support
						</a>
						<a href="https://www.paypal.com/us/cgi-bin/webscr?cmd=p/gen/ua/ua-outside">
							Legal Agreements
						</a>
			</div>
		</div>
	</div>
	<div id="pp_foot_copyright">
		<div id="pp_copyright">
			Copyright &copy; 1999 - 2014 PayPal. All rights reserved.
		</div>
	</div>
	</body>
</html>