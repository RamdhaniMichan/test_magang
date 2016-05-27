<!DOCTYPE html>
<html>
<head>
	<title>Karyawan</title>
</head>
<body>
	<?php $this->load->view('header'); ?>
		<?php foreach ($data_edit as $tes) { ?>
			<div class="container">
			<div class="panel panel-default">
  			<div class="panel-heading"><b>Update Karyawan</b></div>
  			<div class="panel-body">
       		<table class="table table-striped">
		
		<form method="post" action="<?php echo base_url().'index.php/crud/update' ?>">

				<tr>
		        <td>ID</td>
		          <td>
		            <div class="col-sm-6">
		                <input type="hidden" name="id" class="form-control" value="<?php echo $tes->id ?>">
		            </div>
		           </td>
	         	</tr>

				<tr>
		        <td>ID Karyawan</td>
		          <td>
		            <div class="col-sm-6">
		                <input type="text" name="kode_karyawan" class="form-control" value="<?php echo $tes->kode_karyawan ?>">
		            </div>
		           </td>
	         	</tr>

				<tr>
		        <td>Nama</td>
		          <td>
		            <div class="col-sm-6">
		                <input type="text" name="name" class="form-control" value="<?php echo $tes->name ?>">
		            </div>
		           </td>
	         	</tr>

				<tr>
	         	<td>Manager</td>
	         	<td>
	            <div class="col-sm-6">
	                <select name="id_manager" class="form-control" value="<?php echo $tes->id_manager ?>">
	                    <option>Manager</option>
	                    <option value="Prio">Prio</option>
	                    <option value="Waldi">Waldi</option>
	                </select>
	            </div>
				</td>
				</tr>  

				<tr>
		        <td>Tanggal Lahir</td>
		          <td>
		            <div class="col-sm-6">
                                <input name="tgl_lahir" placeholder="" class="form-control datepicker" type="text" value="<?php echo $tes->tgl_lahir ?>">
		            </div>
		           </td>
	         	</tr>

	         	<tr>
	        		<td>Umur</td>
	          			<td>
	            			<div class="col-sm-6">
	                		<input type="text" name="umur" class="form-control umur" value="<?php echo $tes->umur ?>">
	            			</div>
	           			</td>
         		</tr>

				<tr>
          			<td colspan="2">
            			<input type="submit" class="btn btn-success" value="Update">
            			<button type="reset" class="btn btn-default">Batal</button>
          			</td>
         		</tr>
			</table>
		</form>
		<?php $this->load->view('footer'); ?>
		<?php
	}
	?>
</body>
</html>