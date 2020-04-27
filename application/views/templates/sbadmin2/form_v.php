<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"><?php echo $nama_page?></h1>
<p class="mb-4"><?php echo $keterangan_page?></p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"><?= $nama_page ?></h6>
  </div>
  <div class="card-body">
    
    <?php echo form_open($target); ?>
    <?php
    foreach($fields as $field){
      echo $field;
    }
    ?>
    
    </form>


  </div>
</div>


<script src="<?php echo base_url('template/ckeditor/ckeditor.js');?>"></script>
    <script type="text/javascript">
        $(function () {
                CKEDITOR.replace("<?php echo $tname?>",{
                    filebrowserImageBrowseUrl : '<?php echo base_url('template/kcfinder-2.51/browse.php');?>',
                    height: '400px'             
                });
            });
    </script>