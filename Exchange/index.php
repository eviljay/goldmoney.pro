<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="exchangesoftware.info">
   	<meta name="description" content="Build your own E-CURRENCY EXCHANGE website

With With Gold Money E-Currency Changer v1.0 you can create own e-currency exchange website. Supported Gateways: PayPal, Skrill, WebMoney, Payeer, Perfect Money, AdvCash, OKPay, Entromoney, SolidTrust Pay, Net">
	<meta name="keywords" content="Build your own E-CURRENCY EXCHANGE website

With With Gold Money E-Currency Changer v1.0 you can create own e-currency exchange website. Supported Gateways: PayPal, Skrill, WebMoney, Payeer, Perfect Money, AdvCash, OKPay, Entromoney, SolidTrust Pay, Net">

    <title>Gold Money E-Currency Changer v1.0 Demo</title>

   <!-- CSS -->
    <link rel="stylesheet" href="http://goldmoney.pro/Exchange/assets/css/bootstrap.min.css" >
    <link rel="stylesheet" href="http://goldmoney.pro/Exchange/assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://goldmoney.pro/Exchange/assets/css/icofont.css">
    <link rel="stylesheet" href="http://goldmoney.pro/Exchange/assets/css/owl.carousel.css">  
    <link rel="stylesheet" href="http://goldmoney.pro/Exchange/assets/css/slidr.css">     
    <link rel="stylesheet" href="http://goldmoney.pro/Exchange/assets/css/main.css">  
	<link id="preset" rel="stylesheet" href="http://goldmoney.pro/Exchange/assets/css/presets/preset2.css">	
    <link rel="stylesheet" href="http://goldmoney.pro/Exchange/assets/css/responsive.css">
			<!-- font -->
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>

	<script src="http://goldmoney.pro/Exchange/assets/js/jquery.min.js"></script>
    <script src="http://goldmoney.pro/Exchange/assets/js/bootstrap.min.js"></script>
	<script src="http://goldmoney.pro/Exchange/assets/js/BitExchanger.js"></script>
  </head>
  <body>
	<!-- header -->
	<header id="header" class="clearfix">
		<!-- navbar -->
		<nav class="navbar navbar-default">
			<div class="container">
				<!-- navbar-header -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="http://goldmoney.pro/Exchange/"><img class="img-responsive" src="http://goldmoney.pro/Exchange/assets/images/logo.png" alt="Logo"></a>
				</div>
				<!-- /navbar-header -->
				
				<div class="navbar-left">
					<div class="collapse navbar-collapse" id="navbar-collapse">
						<ul class="nav navbar-nav">
							<li><a href="http://goldmoney.pro/Exchange/">Exchange</a></li>
							<li><a href="http://goldmoney.pro/Exchange/testimonials">Testimonials</a></li>
							<li><a href="http://goldmoney.pro/Exchange/affiliate">Affiliate</a></li> 
							<li><a href="http://goldmoney.pro/Exchange/contact">Contact</a></li> 
						</ul>
					</div>
				</div>
				
				<!-- nav-right -->
				<div class="nav-right">
					<!-- language-dropdown -->

					<!-- sign-in -->					
					<ul class="sign-in">
						<li><i class="fa fa-user"></i></li>
												<li><a href="http://goldmoney.pro/Exchange/login">Login</a></li>
						<li><a href="http://goldmoney.pro/Exchange/register">Create account</a></li>
											</ul><!-- sign-in -->	
					
					<div style="margin-left:20px;" class="dropdown language-dropdown">
						<i class="fa fa-globe"></i> 						
						<a data-toggle="dropdown" href="#"><span class="change-text">English</span> <i class="fa fa-angle-down"></i></a>
						<ul class="dropdown-menu language-change">
							<li><a href="http://goldmoney.pro/Exchange/index.php?lang=English">English</a></						</ul>								
					</div><!-- language-dropdown -->					
				</div>
				<!-- nav-right -->
			</div><!-- container -->
		</nav><!-- navbar -->
	</header><!-- header -->





	<!-- main -->
	<section id="main" class="clearfix home-default">
			<div class="row">	
	

			
			


			
			
			
			<!-- main-content -->
			<div class="main-content">
				<!-- row -->
				<div class="row">
					<!-- product-list -->
					<div class="col-md-9">
						<!-- categorys -->
						<div class="section">

							


							<div class="row" id="bit_exchange_box">
					<div id="bit_exchange_results"></div>
								<form id="bit_exchange_form">
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-3 hidden-xs hidden-sm">
											<div style="margin-top:50px;">
												<img src="assets/icons/Bitcoin.png" id="bit_image_send" width="72px" height="72px" class="img-circle img-bordered">
											</div>
										</div>
										<div class="col-md-9">
											<h3><i class="fa fa-arrow-down"></i> Send</h3>
											<div class="form-group">
												<select class="form-control form_style_1 input-lg" id="bit_gateway_send" name="bit_gateway_send" onchange="bit_refresh('1');">
													<option value="1" >PayPal USD</option><option value="2" >WebMoney USD</option><option value="3" >OKPay USD</option><option value="4" >Payeer USD</option><option value="5" >Neteller USD</option><option value="6" >Visa / EURO EUR</option>												</select>
											</div>
											<div class="form-group">
												<input type="text" class="form-control form_style_1 input-lg" id="bit_amount_send" name="bit_amount_send" value="0" onkeyup="bit_calculator();" onkeydown="bit_calculator();">
											</div>
<div class="text text-muted pull-right" style="padding-bottom:10px;font-weight:bold;">Exchange rate: <span id="bit_exchange_rate">-</span></div>

										</div>
										
									</div>
									
								</div>
								
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-9">
											<h3><i class="fa fa-arrow-up"></i> Receive</h3>
											<div class="form-group">
												<select class="form-control form_style_1 input-lg" id="bit_gateway_receive" name="bit_gateway_receive"  onchange="bit_refresh('2');">
													<option value="1" >PayPal USD</option><option value="2" >WebMoney USD</option><option value="3" >OKPay USD</option><option value="4" >Payeer USD</option><option value="5" >Neteller USD</option>												</select>
											</div>
											<div class="form-group">
												<input type="text" class="form-control form_style_1 input-lg" id="bit_amount_receive" name="bit_amount_receive" disabled value="0">
											</div>
											<div class="text text-muted" style="padding-bottom:10px;font-weight:bold;">Reserve: <span id="bit_reserve">-</span></div>
										</div>
										<div class="col-md-3 hidden-xs hidden-sm">
											<div style="margin-top:50px;">
												<img src="assets/icons/Skrill.png" id="bit_image_receive" width="72px" height="72px" class="img-circle img-bordered">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<input type="hidden" name="bit_amount_receive" id="bit_amount_receive2">
									<input type="hidden" name="bit_rate_from" id="bit_rate_from">
									<input type="hidden" name="bit_rate_to" id="bit_rate_to">
									<input type="hidden" name="bit_currency_from" id="bit_currency_from">
									<input type="hidden" name="bit_currency_to" id="bit_currency_to">
									<input type="hidden" id="bit_login_to_exchange" name="bit_login_to_exchange" value="0">
									<input type="hidden" id="bit_ses_uid" name="bit_ses_uid" value="0">
									
									<center>
										<button type="button" class="btn btn-primary btn-lg"  onclick="bit_exchange_step_1();">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-refresh"></i> Exchange&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
									</center>
								</div>
							</form>			
							</div>
						</div><!-- category-ad -->	
						
						<!-- featureds -->
						<div class="section featureds">
							<div class="row">
								<div class="col-sm-12">
									<div class="section-title featured-top">
										<h4>Awesome <strong>Testimonials</strong></h4>
									</div>
								</div>
							</div>
							
							<!-- featured-slider -->
							<div class="featured-slider">
								<div id="featured-slider" >
								Still no have testimonials.								
									
								</div><!-- featured-slider -->
							</div><!-- #featured-slider -->
						</div><!-- featureds -->

						<!-- trending-ads -->
						<div class="section trending-ads">
							<div class="section-title tab-manu">
								<h4>Latest exchanges</h4>
							</div>
							<br/>
							<div class="row">
								<div class="col-md-12">
									<table class="table">
										<thead>
											<tr>
												<th>Send</th>
												<th>Receive</th>
												<th>Amount</th>
												<th>Exchange ID</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
																								<tr>
														<td><img src="http://goldmoney.pro/Exchange/uploads/1489452647_icon.png" width="20px" height="20"> Visa / EURO EUR</td>
														<td><img src="http://goldmoney.pro/Exchange/assets/icons/WebMoney.png" width="20px" height="20"> WebMoney USD</td>
														<td>100 EUR</td>
														<td>D13EE1AC84***************</td>
														<td><span class="label label-warning"><i class="fa fa-clock-o"></i> Awaiting Payment</span></td>
													</tr>
																							</tbody>
									</table>
								</div>
							</div>
						</div><!--trending-ads -->		

						
					</div><!-- product-list -->

					<!-- advertisement -->
<div class="col-md-3">

























                                                    <div class="section">
							<div class="section-title tab-manu">
								<h4>Track exchange</h4>
							</div>
							<br/>
							<form action="http://goldmoney.pro/Exchange/track" method="POST">
								<div class="form-group">
									<input type="text" class="form-control" name="order_id" placeholder="Type here exchange id">
								</div>
								<button type="submit" class="btn btn-primary btn-block" name="bit_track">Track</button>
							</form>
						</div>
						
						
						
						
						
						
						
						<div class="section">
							<div class="section-title tab-manu">
								<h4>Our Reserve</h4>
							</div>
							<br/>
								<div class="row">
																	<div class="col-md-12" style="margin-bottom:10px;">
										<img src="http://goldmoney.pro/Exchange/assets/icons/PayPal.png" width="42px" height="42px" class="img-circle img-bordered pull-left">
										<span class="pull-left" style="margin-left:5px;">
											<span style="font-size:15px;font-weight:bold;">PayPal USD</span><br/>
											<span class="text text-muted">50000 USD </span>
										</span>
									</div>
									<br><br>
																		<div class="col-md-12" style="margin-bottom:10px;">
										<img src="http://goldmoney.pro/Exchange/assets/icons/WebMoney.png" width="42px" height="42px" class="img-circle img-bordered pull-left">
										<span class="pull-left" style="margin-left:5px;">
											<span style="font-size:15px;font-weight:bold;">WebMoney USD</span><br/>
											<span class="text text-muted">1000 USD </span>
										</span>
									</div>
									<br><br>
																		<div class="col-md-12" style="margin-bottom:10px;">
										<img src="http://goldmoney.pro/Exchange/assets/icons/OKPay.png" width="42px" height="42px" class="img-circle img-bordered pull-left">
										<span class="pull-left" style="margin-left:5px;">
											<span style="font-size:15px;font-weight:bold;">OKPay USD</span><br/>
											<span class="text text-muted">1000 USD </span>
										</span>
									</div>
									<br><br>
																		<div class="col-md-12" style="margin-bottom:10px;">
										<img src="http://goldmoney.pro/Exchange/assets/icons/Payeer.png" width="42px" height="42px" class="img-circle img-bordered pull-left">
										<span class="pull-left" style="margin-left:5px;">
											<span style="font-size:15px;font-weight:bold;">Payeer USD</span><br/>
											<span class="text text-muted">1000 USD </span>
										</span>
									</div>
									<br><br>
																		<div class="col-md-12" style="margin-bottom:10px;">
										<img src="http://goldmoney.pro/Exchange/assets/icons/Neteller.png" width="42px" height="42px" class="img-circle img-bordered pull-left">
										<span class="pull-left" style="margin-left:5px;">
											<span style="font-size:15px;font-weight:bold;">Neteller USD</span><br/>
											<span class="text text-muted">1000 USD </span>
										</span>
									</div>
									<br><br>
																		<div class="col-md-12" style="margin-bottom:10px;">
										<img src="http://goldmoney.pro/Exchange/uploads/1489452647_icon.png" width="42px" height="42px" class="img-circle img-bordered pull-left">
										<span class="pull-left" style="margin-left:5px;">
											<span style="font-size:15px;font-weight:bold;">Visa / EURO EUR</span><br/>
											<span class="text text-muted">5000 EUR </span>
										</span>
									</div>
									<br><br>
																	
								</div>

						</div>
					</div><!-- advertisement -->
				</div><!-- row -->
			</div><!-- main-content -->
		</div><!-- container -->
	</section><!-- main -->




<!-- footer -->
	
<!DOCTYPE html>
<html lang="en">
    <head>


<link rel="stylesheet" href="https://changeuni.com/footer/fot.css">





        
    </head>
    





    
    
  	</div><!--/row-->


<div id="bottom-footer">
      <div class="row">
        
        
        <div class="col-md-offset-2 col-md-12 col-sm-12">







    	
        </div>
      
        

          </div>
    </div>
  </div><!--/row 2-->



  <div class="row">
    <center><img src="http://200.27.156.170/ean_default/img/cocha/footer-bg.png"></center>
    <div id="bottom-footer">
      <div class="row">
        
        
        <div class="col-md-offset-2 col-md-12 col-sm-12">
    	<a href="index.php">Home</a>
        <a href="page/about">About Us</a>
        <a href="affiliate">Affiliate Program </a>
        <a href="page/Fees">Fees</a>
        <a href="track">Order status</a>
        <a href="#">Change uni BTC Card</a>
        <a href="faq">FAQ</a>
        <a href="#">Agreement</a>
        <a href="#">Product</a>
        </div>
      
        

          </div>
    </div>
  </div><!--/row 2-->
  

  
  
      <div class="row" id="final-footer">
        <div class="col-sm-4">
          <img src="http://200.27.156.170/ean_default/img/cocha/RapidSSL_SEAL-90x50.gif">
        </div>
        <div class="col-sm-4 text-center">
        	Copyright © 2017 GoldMoney. All Rights Reserved</br>
		
        </div>
        
        
        
        
        
        
        
        <div class="col-sm-4 text-right">
        	<span class="fa-stack fa-lg">
              <i class="fa fa-circle text-primary fa-stack-2x"></i>
              <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
            </span>
          <span class="fa-stack fa-lg">
              <i class="fa fa-circle text-info fa-stack-2x"></i>
              <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
            </span>
          <span class="fa-stack fa-lg">
              <i class="fa fa-circle text-danger fa-stack-2x"></i>
              <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
            </span>
        </div>
      </div>
  </div><!--/container-->
</div><!--/footer--></div>


            <div id="push"></div>
        
        
        <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


        <script type='text/javascript' src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>






        
       
        
        
       

        
    </body>
</html>

<!-- footer -->





	
	<!-- login and register modals-->
		<div class="modal fade" id="login" tabindex="-1" role="dialog" >
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	
							<h4 class="modal-title">Login with your account</h4>							
						</div>
						<div class="modal-body modal-spa">
							<div id="login_results"></div>
							<div id="bit_require_login" style="display:none;"><div class="alert alert-info"><i class="fa fa-info-circle"></i> You must login to your account to continue exchange.</div></div>
							<form id="login_form">
							<div class="form-group">
								<label>Email address</label>
								<input type="text" class="form-control input-lg form_style_1" name="email">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control input-lg form_style_1" name="password">
								<a href="http://goldmoney.pro/Exchange/password/reset">Forgot password?</a>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="checkbox">
										<label>
										  <input type="checkbox" name="remember_me" value="yes"> Remember me										</label>
									  </div>
								</div>
								<div class="col-md-6">
									<button type="button" class="btn btn-danger pull-right btn-lg" onclick="bit_login();">Login</button>
								</div>
							</div>
							</form>
						</div>
						<div class="modal-footer">
							<center>
									<p>With entry in you agree to our <a href="http://goldmoney.pro/Exchange/page/terms-of-services"></a> and <a href="http://goldmoney.pro/Exchange/page/privacy-policy">Privacy Policy</a></p>
								</center>
							</div>
					</div>
				</div>
			</div>
<!-- //login -->
<!-- login -->
			<div class="modal fade" id="register" tabindex="-1" role="dialog" >
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	
							<h4 class="modal-title">Create account free</h4>							
						</div>
						<div class="modal-body modal-spa">
							<div id="register_results"></div>
							<form id="register_form">
							<div class="form-group">
								<label>Username</label>
								<input type="text" class="form-control input-lg form_style_1" name="username">
							</div>
							<div class="form-group">
								<label>Email address</label>
								<input type="text" class="form-control input-lg form_style_1" name="email">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control input-lg form_style_1" name="password">
							</div>
							<div class="form-group">
								<label>Re-type Password</label>
								<input type="password" class="form-control input-lg form_style_1" name="repassword">
							</div>
							<div class="row">
								<div class="col-md-12">
									<button type="button" class="btn btn-danger pull-right btn-lg" onclick="bit_register();">Register</button>
								</div>
							</div>
							</form>
						</div>
						<div class="modal-footer">
							<center>
								<p>With registering in you agree to our <a href="http://goldmoney.pro/Exchange/page/terms-of-services">Terms of services</a> and <a href="http://goldmoney.pro/Exchange/page/privacy-policy">Privacy Policy</a></p>
							</center>
						</div>
					</div>
				</div>
			</div>
			<!-- login and register modals-->
	
	<input type="hidden" id="url" value="http://goldmoney.pro/Exchange/">
    <!-- JS -->
    <script src="http://goldmoney.pro/Exchange/assets/js/modernizr.min.js"></script>
    <script src="http://goldmoney.pro/Exchange/assets/js/owl.carousel.min.js"></script>
    <script src="http://goldmoney.pro/Exchange/assets/js/smoothscroll.min.js"></script>
    <script src="http://goldmoney.pro/Exchange/assets/js/scrollup.min.js"></script>
    <script src="http://goldmoney.pro/Exchange/assets/js/price-range.js"></script> 
    <script src="http://goldmoney.pro/Exchange/assets/js/jquery.countdown.js"></script>    
    <script src="http://goldmoney.pro/Exchange/assets/js/custom.js"></script>
  </body>
</html>