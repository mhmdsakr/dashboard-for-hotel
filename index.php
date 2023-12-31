<?php
	include "includes/header.php";
	include "includes/sidebar.php";
?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<!-- <h1 class="page-header">Dashboard <?php print_r($_SESSION); ?></h1> -->
			</div>
		</div><!--/.row-->
		
		<!-- //////////////////////////////////// -->

		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-bed color-blue"></em>
							<div class="large">12</div>
							<div class="text-muted"><h2>مجموع الغرف</h2></div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-bookmark color-orange"></em>
							<div class="large"> <?php echo @$_SESSION['num2']; ?></div>
							<div class="text-muted"><h2>جميع الحجوزات</h2></div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
							<div class="large"><?php echo @$_SESSION['num']; ?></div>
							<div class="text-muted"><h2>طاقم العمل </h2></div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-reorder color-red"></em>
							<div class="large">2</div>
							<div class="text-muted"><h2>الغرف المحجوزة<h2></div>
						</div>
					</div>
			</div><!--/.row-->

			<hr>

			<div class="row">
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-check-circle color-green"></em>
							<div class="large">10</div>
							<div class="text-muted"><h2> الغرف المتاحة</h2></div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-check-square-o color-magg"></em>
							<div class="large">3</div>
							<div class="text-muted"><h2>الحجوزات التي تم دفع مبلغ منها</h2></div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-red panel-widget ">
						<div class="row no-padding"><em class="fa fa-xl fa-spinner color-blue"></em>
							<div class="large">210</div>
							<div class="text-muted"><h2> المدفوعات المعلقة</h2></div>
						</div>
					</div>
				</div>
			</div><!--/.row-->

			<hr>

			<div class="row">
				<div class="col-xs-6 col-md-2 col-lg-2 no-padding">
					
				</div>

				<div class="col-xs-6 col-md-4 col-lg-4 no-padding">
					<div class="panel panel-red panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-money color-red"></em>
							<div class="large">دولار.1200</div>
							<div class="text-muted"><h4>تم دفعها</h4></div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-4 col-lg-4 no-padding">
					<div class="panel panel-orange panel-widget ">
						<div class="row no-padding"><em class="fa fa-xl fa-credit-card color-purp"></em>
							<div class="large">دولار.900</div>
							<div class="text-muted"><h4>في انتظار الدفع</h4></div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-2 col-lg-2 no-padding">
					
				</div>
			</div><!--/.row-->
		</div>

		<!-- ///////////////////////////////////////// -->
		
	</div>	<!--/.main-->
	
<?php
include "includes/footer.php"
?>