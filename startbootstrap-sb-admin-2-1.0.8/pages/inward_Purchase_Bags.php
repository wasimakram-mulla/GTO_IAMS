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
<form action="">
	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"> 
			<font color=#8A6D3B> Purchase </font>
			</h3>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-3 col-sm-4 col-xs-12">
			<label class="text-info">Purchase Code: </label>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-10">
			<input type="hidden"/>
			<input type="text" placeholder="Purchase Code" class="form-control"/>	<br/>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-3 col-sm-4 col-xs-12">
		<label class="text-info">Enter Purchase Date: </label> 
		</div>
	<div class="col-md-6 col-sm-6 col-xs-12">
		<div class="input-group date">
			<input type="text" placeholder="Purchase Date" class="form-control" id="purchaseDt">
			<span class="input-group-addon">
				<span class="fa fa-calendar"></span>
			</span>
		</div>
	<br/>
	</div>
	</div>
	<!--
	<div class="row">
		<div class="col-md-3 col-sm-4 col-xs-12">
			<label class="text-info">Enter Lorry Number: </label>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-10">
			<input type="hidden"/>
			<input type="text" placeholder="Lorry Number" class="form-control" readonly />		
		</div>
		<div class="col-md-3 col-sm-2 col-xs-2">		
			<button class="btn btn-sm btn-info">...</button><br/><br/>
		</div>
	</div>
	-->
	<div class="row">
		<div class="col-md-3 col-sm-4 col-xs-12">
			<label class="text-info">Supplier: </label>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-10">
			<input type="hidden"/>
			<input type="text" placeholder="Supplier" class="form-control" id="SuppName" readonly />		
		</div>
		
		<div class="col-md-3 col-sm-2 col-xs-2">		
			<button class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">
                                ...
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Supplier List</h4>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-bordered">
												<thead>
													<tr>
														<th>Supplier Name</th>
														<th>Supplier City</th>
														<th>Product Name</th>
														<th>Select</th>
													</tr>
												</thead>
															<tbody>
												<?php
													$prid;
													$sup="select supplier_master.supp_name,supplier_master.supp_add,supplier_master.supp_city,supplier_master.supp_cntpr,supplier_master.supp_cntno,supplier_master.supp_eMail,supplier_master.supp_vat,product_master.prod_name from supplier_master,product_master where supplier_master.prod_id=product_master.prod_id and product_master.prod_id=5";
													$resProd=mysql_query($sup);
													while($row=mysql_fetch_array($resProd))
													{
												?> 
													<tr align="center">
														<td><label id="lbl1"><?php echo $row['supp_name'];?></label></td>
														<td><?php echo $row['supp_city'];?></td>
														<td><?php echo $row['prod_name'];?></td>
														<td>
														<button class="btn btn-success" data-toggle="modal" data-target="#myModal" onClick="setEditValue('<?php echo $row['supp_name'];?>','<?php echo $row['prod_name']?>')"> Select 
														</button></td>
													</tr>
												<?php
													}
													
												?>
												</tbody>
											</table>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>

		</div>
	</div>
	<br/>
	
	<div class="row">
		<div class="col-md-3 col-sm-4 col-xs-12">
			<label class="text-info">Product: </label>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-10">
			<input type="hidden"/>
			<input type="text" placeholder="Product" class="form-control" id="ProdName" readonly />	<br/>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-3 col-sm-4 col-xs-12">
			<label class="text-info">No. Of Bags: </label>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-10">
			<input type="hidden"/>
			<input type="text" placeholder="Total No of Bags" class="form-control" />	<br/>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-3 col-sm-4 col-xs-12">
			<label class="text-info">Bill/Invoice: </label>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-10">
			<input type="hidden"/>
			<input type="text" placeholder="Bill/Invoice" class="form-control" />	<br/>
		</div>
	</div>
	
	
	<div class="row">
		<div class="col-md-3 col-sm-4 col-xs-12">
			<label class="text-info">Bill Amount: </label>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-10">
			<input type="hidden"/>
			<input type="text" placeholder="Bill Amount" class="form-control" />	<br/>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-3 col-sm-4 col-xs-12">
			<label class="text-info">Discount: </label>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-10">
			<input type="hidden"/>
			<input type="text" class="form-control" />	<br/>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-3 col-sm-4 col-xs-12">
			<label class="text-info">Final Amount: </label>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-10">
			<input type="hidden"/>
			<input type="text" placeholder="Final Amount" class="form-control" />	<br/>
		</div>
	</div>
	<br/>
	<div class="row">
	<div class="col-md-10 col-sm-12-col-xs-12" align="center">
		<button class="btn btn-outline btn-info" type="button"> Payment </button>
	</div>
	</div>
		<!--
		<div class="col-md-10 col-sm-12-col-xs-12" align="center">
		<button class="btn btn-outline btn-info" type="button"> New </button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<button class="btn btn-outline btn-info" type="button"> Save </button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<button class="btn btn-outline btn-info" type="button"> Cancel </button>
		</div>
		-->	
		
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
	function setEditValue(edtValnm, edtValprod)
	{
		//alert(edtValnm+" "+edtValprod);
		document.getElementById('SuppName').value=edtValnm;
		document.getElementById('ProdName').value=edtValprod;
	}
  //DTP from: http://eonasdan.github.io/bootstrap-datetimepicker/
</script>
	</body>
</html>