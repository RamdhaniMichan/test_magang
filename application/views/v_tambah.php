<!DOCTYPE>
<html>
<head>
	<title></title>
</head>
<body>
		<?php $this->load->view('header');?>
		<form method="post" action="<?php echo base_url().'index.php/crud/tambah_act'?>">
			<div class="container">
			<div class="panel panel-default">
  			<div class="panel-heading"><b>Tambah Karyawan</b></div>
  			<div class="panel-body">
       		<table class="table table-striped">

			<tr>
	        <td>ID Karyawan</td>
	          <td>
	            <div class="col-sm-6">
	                <input type="text" name="kode_karyawan" class="form-control" placeholder="Masukan Identitas" required="">
	            </div>
	           </td>
         	</tr>

			<tr>
	        <td>Nama</td>
	          <td>
	            <div class="col-sm-6">
	                <input type="text" name="name" class="form-control" placeholder="Masukan Nama" required="">
	            </div>
	           </td>
         	</tr>

         	<tr>
         	<td>Manager</td>
         	<td>
            <div class="col-sm-6">
                <select name="id_manager" class="form-control" required="">
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
                            <input name="tgl_lahir" placeholder="yyyy-mm-dd" class="form-control datepicker" type="text" required="">
	            </div>
	           </td>
         	</tr>

         	<tr>
	        <td>Umur</td>
	          <td>
	            <div class="col-sm-6">
	                <input type="text" name="umur" class="form-control umur">
	            </div>
	           </td>
         	</tr>

			<tr>
          	<td colspan="2">
            		<input type="submit" class="btn btn-success" value="Simpan">
            		<button type="reset" class="btn btn-default">Batal</button>
          	</td>
         	</tr>

			</table>
		</form>
		<?php $this->load->view('footer');?>
	</body>
</html>