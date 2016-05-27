	<script src="<?php echo base_url('assets/jquery/jquery-2.1.4.min.js')?>"></script>
	<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
	<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
	<script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>
	<script src="<?php echo base_url('assets/bootstrap-datepicker/js/bootstrap-datepicker.min.js')?>"></script>
	<script type="text/javascript">
	$(function() {
            $( ".datepicker" ).datepicker({
            	autoclose: true,
		        format: "yyyy-mm-dd",
		        todayHighlight: true,
		        orientation: "top auto",
		        todayBtn: true,
		        todayHighlight: true, 
            });
        });
 
        window.onload=function(){
            $('.datepicker').on('change', function() {
                var dob = new Date(this.value);
                var today = new Date();
                var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
                $('.umur').val(age);
            });
        }
    </script>
    
  </body>
</html>
