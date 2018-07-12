<?php $__env->startSection('main'); ?>

<!DOCTYPE html>
<html>
	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="format-detection" content="telephone=no">

		<title>Consultécnicos</title>

		<!-- Bootstrap -->
		<link href="vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		<!-- Font Awesome -->
		<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<!-- NProgress -->
		<link href="vendor/nprogress/nprogress.css" rel="stylesheet">
		<!-- iCheck -->
		<link href="vendor/iCheck/skins/flat/green.css" rel="stylesheet">

		<!-- bootstrap-progressbar -->
		<link href="vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
		<!-- JQVMap -->
		<link href="vendor/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
		<!-- bootstrap-daterangepicker -->
		<link href="vendor/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
		
		<!-- bootstrap-datetimepicker -->
	    <link href="vendor/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

	    <!-- Datatables -->
	    <link href="vendor/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
	    <link href="vendor/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
	    <link href="vendor/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
	    <link href="vendor/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
	    <link href="vendor/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

		<!-- Custom Theme Style -->
		<link href="css/custom.css" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet">


		<link rel="apple-touch-icon" href="apple-touch-icon.png">

		<!-- Font -->
		<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,400,600" rel="stylesheet">

		<!-- Treetable -->
		<link href="css/jquery.treetable.css" rel="stylesheet" type="text/css" />
		<link href="css/jquery.treetable.theme.default.css" rel="stylesheet" type="text/css" />

		<!-- Main Style -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>
		
		<?php echo $__env->yieldContent('newU'); ?>

	<script src="vendor/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="vendor/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- FastClick -->
	<script src="vendor/fastclick/lib/fastclick.js"></script>
	<!-- NProgress -->
	<script src="vendor/nprogress/nprogress.js"></script>
	<!-- bootstrap-progressbar -->
	<script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
	<!-- iCheck -->
	<script src="vendor/iCheck/icheck.min.js"></script>
	<!-- bootstrap-daterangepicker -->
	<script src="vendor/moment/min/moment.min.js"></script>
	<script src="vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
	<!-- bootstrap-datetimepicker -->    
    <script src="vendor/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
	<!-- bootstrap-wysiwyg -->
	<script src="vendor/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
	<script src="vendor/jquery.hotkeys/jquery.hotkeys.js"></script>
	<script src="vendor/google-code-prettify/src/prettify.js"></script>
	<!-- jQuery Tags Input -->
	<script src="vendor/jquery.tagsinput/src/jquery.tagsinput.js"></script>
	<!-- Switchery -->
	<script src="vendor/switchery/dist/switchery.min.js"></script>
	<!-- Select2 -->
	<script src="vendor/select2/dist/js/select2.full.min.js"></script>
	<!-- Parsley -->
	<script src="vendor/parsleyjs/dist/parsley.min.js"></script>
	<!-- Autosize -->
	<script src="vendor/autosize/dist/autosize.min.js"></script>
	<!-- jQuery autocomplete -->
	<script src="vendor/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
	<!-- starrr -->
	<script src="vendor/starrr/dist/starrr.js"></script>

	<!-- DateJS -->
	<script src="vendor/DateJS/build/date.js"></script>
	<!-- JQVMap -->
	
	<!-- bootstrap-daterangepicker -->
	<script src="vendor/moment/min/moment.min.js"></script>
	<script src="vendor/bootstrap-daterangepicker/daterangepicker.js"></script>


	<!-- Datatables -->
    <script src="vendor/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendor/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="vendor/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendor/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="vendor/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="vendor/jszip/dist/jszip.min.js"></script>
    <script src="vendor/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendor/pdfmake/build/vfs_fonts.js"></script>

	<!-- Treetable -->
    <script src="js/jquery.treetable.js"></script>

	<!-- Custom Theme Scripts -->
	<script src="js/custom.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>