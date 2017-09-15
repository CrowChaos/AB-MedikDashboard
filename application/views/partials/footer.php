</div> <!--end container from header -->


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
<!--<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<script type="text/javascript" src="<?php echo base_url()?>assets/js/barchart.js"></script>


<!--Script for datatable !-->
<script >
	$(document).ready(function () {
		 $('#datatable').DataTable({
			"bStateSave": true,
			"ajax":"test.json",
			"columns": [
				{ "data": "index" },
				{ "data": "name" },
				{ "data": "age" },
				{ "data": "weight" },
				{ "data": "height" },
				{ "data": "bloodtype" },
				{ "data": "alergies" },

				{"title": "Edit/Mazanie",
                  "data": "index",
                  "searchable": false,
                  "sortable": false,
                  "render": function (data, type, full, meta) {
                   return '<a href="<?php echo base_url()?>subject/update?index=' + data + '" >Edit</a> || <a href="<?php echo base_url()?>subject/delete?index=' + data + '" > X </a> ';
                            }}

			]
			});
		
	});
	

		

</script>



</body>
</html>