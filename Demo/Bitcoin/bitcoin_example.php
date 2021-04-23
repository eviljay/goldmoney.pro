<html>
	<head>
		<title>Bitcoin Gateway Example</title>
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="assets/css/gateway.css" rel="stylesheet" type="text/css">
		<script src="assets/js/jquery-2.1.1.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/gateway.js"></script>
	</head>
	<body>
		<div class="container" style="margin:0 auto;padding:20px;">
			<div class="row">
				<div class="col-sm-3 col-md-3 col-lg-3"></div>
				<div class="col-sm-6 col-md-6 col-lg-6">
				<div class="panel panel-default" id="PaymentBox_582e19840170235">
			<div class="panel-body">
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-12">
						<h3><span class="text text-warning"><img src="assets/imgs/Bitcoin.png" width="32px" height="32px"></span> Bitcoin Payment Box</h3>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<img src="https://chart.googleapis.com/chart?chs=500x500&cht=qr&chl=bitcoin:3EPub3YCwK43fKrQNS6RwyodxTRcDq4JG5?amount=0.00012&choe=UTF-8" class="img-responsive">
					</div>
					<div class="col-sm-8 col-md-8 col-lg-8" style="padding:10px;">
						Send <b>0.00012 BTC</b><br/><input type="text" id="address_582e19840170235" class="form-control" value="3EPub3YCwK43fKrQNS6RwyodxTRcDq4JG5">
						or scan QR Code with your mobile device<br/><br/>
						<small>Do not refresh page, payment status will be updated automatically.</small>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-12">
						<center><span id="PaymentStatus_582e19840170235"></span></center>
						<input type="hidden" id="payment_boxID" value="582e19840170235">
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
		$("#address_582e19840170235").focus(function() {
		   $(this).select();
		});
		function updatePaymentStatus() {
			btc_gateway_update_status("582e19840170235");
		}
		setInterval(updatePaymentStatus,3000);
		</script>				</div>
				<div class="col-sm-3 col-md-3 col-lg-3"></div>
			</div>
		</div>
	</body>
</html>