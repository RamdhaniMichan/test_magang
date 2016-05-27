<?php $this->load->view('header');?>
 
    <div class="container">
      <div class="panel panel-default">
  <div class="panel-heading"><b>Daftar Karyawan</b></div>
  <div class="panel-body">
      <a href="<?=base_url()?>crud/tambah" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
       <table class="table table-striped">
        <thead>
         <tr>
         <th>ID</th>
         <th>Nama</th>
         <th>Manajer</th>
         <th>Tanggal Lahir</th>
         <th>Usia</th>
         <th>Aksi</th>
         <th></th>
         </tr>
        </thead>
        <tbody>
        
          <?php  $no = $offset; 
          foreach($karyawan as $lihat){ ?>
        <tr>
        <td><?php echo $lihat->kode_karyawan ?></td>
        <td><?php echo $lihat->name ?></td>
        <td><?php echo $lihat->id_manager ?></td>
        <td><?php echo $lihat->tgl_lahir ?></td>
        <td><?php echo $lihat->umur ?></td>
          <td>
           <a href="<?=base_url()?>crud/edit/<?=$lihat->id?>" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
           <a href="<?=base_url()?>crud/hapus/<?=$lihat->id?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin menghapus data ini?')"><i class="glyphicon glyphicon-trash"></i></a>
          </td>
         </tr>
        <?php } ?>
        </tbody>
       </table>
        </div>
        <div class="panel-footer" style="height:40px;">
        <?php echo $halaman ?> 
        </div>

    </div>   
    </div> 
<?php $this->load->view('footer');?>
