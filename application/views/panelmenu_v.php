<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"><?php echo $nama_tabel?></h1>
<p class="mb-4"><?php echo $keterangan_tabel?></p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"><?= $nama_tabel ?></h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr><?=$tb_head?></tr>
        </thead>
        <tfoot>
          <tr><?=$tb_head?></tr>
        </tfoot>
        <tbody>
          <?php
          foreach($dt_main as $row){
            echo $row;
          } 
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
