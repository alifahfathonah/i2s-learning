<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"><?php echo $nama_page?></h1>
<p class="mb-4"><?php echo $keterangan_page?></p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"><?= $nama_page ?></h6>
  </div>
  <div class="card-body">
    <p align="justify">
      <?=$tulisan?>
    </p>
    <hr>
    <div class="text-right mt-5"><a href="<?=$link_edit?>" class="btn btn-primary">Edit</a></div>
  </div>
</div>
