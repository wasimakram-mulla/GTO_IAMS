<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Green Top Organics</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	
	<link href="../bower_components/bootstrap/dist/css/bootstrap-datetimepicker.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
</head>

<body>

    <div id="wrapper">

<?php
include ("header_menu.php");
include ("../conn/conn.php");
?>

<div id="page-wrapper">

	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"> 
			<font color=#8A6D3B> Production Batch </font>
			</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<?php
				$batch_no=$_POST['batch_no'];
				$rom=$_POST['rom'];
				$shw=$_POST['shw'];
				$fillerpowder=$_POST['fillerpowder'];
				$awf=$_POST['awf'];
				$hdpebags=$_POST['hdpebags'];
				//echo "Batch No: ".$batch_no." rom: ".$rom." shw: ".$shw." FP: ". $fillerpowder. " awf: ".$awf." hdpebags: ".$hdpebags;
				$prodQry="INSERT INTO `production_batch_register`(`batch_no`, `R.O.M`, `S.H.W`, `filler_powder`, `A.W.F`, `HDPE_Bags`) VALUES ('".$batch_no."','".$rom."','".$shw."','".$fillerpowder."','".$awf."','".$hdpebags."')";
				$resQry=mysql_query($prodQry);
				if($resQry){
					echo "<h3 class='text-success'>Production batch created successfully</h3>";
				?>
					<script>
						setTimeout(function(){
							window.location.assign('production_batch.php');
						},1500);
					</script>
				<?php
				}
				else{
					echo "<h3 class='text-danger'>Production batch failed</h3>";
				}
			?>
		</div>
	</div>
</div>
	
		<!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

	<script src="../bower_components/moment/moment.js"></script>
	
	<script src="../bower_components/bootstrap/dist/js/bootstrap-datetimepicker.min.js"></script>
	
    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

<script type="text/javascript">
$(function() {  
    $('#purchaseDt').datetimepicker({
		format: 'D/M/YYYY',
		maxDate:new Date()
	});
});
  //DTP from: http://eonasdan.github.io/bootstrap-datetimepicker/
</script>
	</body>
</html>