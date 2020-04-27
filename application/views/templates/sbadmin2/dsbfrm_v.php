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

    <?php foreach($fields as $field): ?>
<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
      <?php
      $data = array(
              'name'          => $field,
              'id'            => $field,
              'value'         => $row[$field],
              'class'       => 'form-control',
              'placeholder' => ucfirst($field)
      );
      ?>
      <div class="form-group row">
        <label for="<?=$field?>" class="col-sm-2 col-form-label"><?=$data['placeholder']?></label>
        <div class="col-sm-10">
          <?php echo form_input($data)?>
        </div>
      </div>
<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
    <?php endforeach; ?>

    <div class="text-right"><?php echo form_submit('mysubmit', 'Simpan');?></div>
    </form>


  </div>
</div>
