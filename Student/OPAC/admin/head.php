<html>
<head><title>OPAC</title>
<link rel="icon" href="img/school_logo.png" type="image">

<script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="screen">
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen">


<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap-transition.js"></script>


<!-- datatable -->
		<style type="text/css" title="currentStyle">
			@import "css/datatable/demo_page.css";
			@import "css/datatable/demo_table_jui.css";
			@import "css/datatable/jquery-ui-1.8.4.custom.css";
		</style>
		
		
		<script type="text/javascript" language="javascript" src="js/dataTables/jquery.dataTables.js"></script>
		<script type="text/javascript" charset="utf-8">
			jQuery(document).ready(function() {
oTable = jQuery('#log').dataTable({
					"bJQueryUI": true,
					"sPaginationType": "full_numbers"
								} );
				oTable = jQuery('#attendance').dataTable({
					"bJQueryUI": true,
					"sPaginationType": "full_numbers"
								} );
				oTable = jQuery('#record').dataTable({
					"bJQueryUI": true,
					"sPaginationType": "full_numbers"
								} );
				oTable = jQuery('#cadet_list').dataTable({
					"bJQueryUI": true,
					"sPaginationType": "full_numbers"
								} );
				oTable = jQuery('#passed').dataTable({
					"bJQueryUI": true,
					"sPaginationType": "full_numbers"
								} );								
								
								
				});		
		</script>