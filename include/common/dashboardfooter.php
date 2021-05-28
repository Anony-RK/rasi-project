


		<!--**************************
			**************************
				**************************
							Required JavaScript Files
				**************************
			**************************
		**************************-->
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/moment.js"></script>


		<!-- *************
			************ Vendor Js Files *************
		************* -->
		<!-- Slimscroll JS -->
		<script src="vendor/slimscroll/slimscroll.min.js"></script>
		<script src="vendor/slimscroll/custom-scrollbar.js"></script>

		<!-- Daterange -->
		<script src="vendor/daterange/daterange.js"></script>
		<script src="vendor/daterange/custom-daterange.js"></script>

		<!-- Datepickers -->
		<script src="vendor/datepicker/js/picker.js"></script>
		<script src="vendor/datepicker/js/picker.date.js"></script>
		<script src="vendor/datepicker/js/custom-picker.js"></script>


		<!-- Main JS -->
		<script src="js/main.js"></script>
		<!--<script src="js/itemcreation.js"></script>-->
		
		
			<!--**************************
			**************************
				**************************
							Required JavaScript Files
				**************************
			**************************
		**************************-->
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/moment.js"></script>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>  

<script type="text/javascript" src="jsd/datatables.min.js"></script>

<script type="text/javascript" language="javascript">
    $(document).ready(function() {

     
        var branch_info = $('#branch_info').DataTable({
		"order": [[ 0, "desc" ]],
		'processing': true,
		'serverSide': true,
		'serverMethod': 'post',
		//'searching': false, // Remove default Search Control
		'ajax': {
			'url':'ajaxbranchfetch.php',
			'data': function(data){
                var search = $('#search').val();
							// Append to data
                           
		  	data.search      = search;
	


			}
		},
		
	dom: 'lBfrtip',
	buttons: [
		'excel', 'csv', {
                          extend: 'pdf',
                          
						},'copy', 'print', 'colvis',
	],
	"lengthMenu": [
		[10, 25, 50, -1],
		[10, 25, 50, "All"]
	]
	});

	$('#search').change(function(){
        branch_info.draw();
      
            });
	});
	
	</script>


<script src="js/branchcreation.js"></script>