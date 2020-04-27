<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Data Calon Siswa</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Nama</th>
        <th>No HP</th>
        <th style="width:80px">Detail</th>
      </tr>
    </thead>
    <tbody>
    	<?php foreach($dtmain as $row):?>
      <tr>
        <td><?=$row->nama?></td>
        <td><?=$row->hp?></td>
        <td><a href="<?php echo $linkdetail.$row->calon_id ?>">Detail</a></td>
      </tr>
  <?php endforeach;?>
    </tbody>
  </table>
</div>

</body>
</html>
