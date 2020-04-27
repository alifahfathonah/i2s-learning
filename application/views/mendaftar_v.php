<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PPDB Online MTs. Ibnu Husain </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo base_url('template/registrasi')?>/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url('template/registrasi')?>/css/style.css">
    <style type="text/css">
    	.erx{
    		color:red;
    	}
    	.inputerx{
    		border-color:red;
    	}
    </style>
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="<?php echo base_url('template/registrasi')?>/images/signup-img.jpg" alt="">
                </div>
                <div class="signup-form">
<?php
$attributes = array('class' => 'register-form', 'id' => 'register-form');
echo form_open('mendaftar/procs', $attributes);
?>
                    
                        <h2>PPDB Online MTs. Ibnu Husain Surabaya</h2>
                        <p>Jl. Pragoto</p>

<!-- 'nama' -->
						<div class="form-group"><?php echo '<span>'.form_error('nama').'</span>'; ?>
						    <label for="nama">Nama Lengkap :</label>
						    <input type="text" name="nama" value="<?php echo set_value('nama'); ?>" required/>
						</div>
<!-- 'jk' -->
						<div class="form-radio">
						    <label for="jk" class="radio-label">Jenis Kelamin :</label>
						    <div class="form-radio-item">
						        <input type="radio" name="jk" id="laki" value="L" checked>
						        <label for="laki">Laki-laki</label>
						        <span class="check"></span>
						    </div>
						    <div class="form-radio-item">
						        <input type="radio" name="jk" id="perempuan" value="P">
						        <label for="perempuan">Perempuan</label>
						        <span class="check"></span>
						    </div>
						</div>
<!-- 'tmplahir' -->
						<div class="form-group">
						    <label for="tmplahir">Tempat Lahir :</label>
						    <input type="text" name="tmplahir" value="<?php echo set_value('tmplahir'); ?>">
						</div>
<!-- 'tgllahir' -->
						<div class="form-group">
						    <label for="tgllahir">Tanggal Lahir :</label>
						    <input type="date" name="tgllahir" value="<?php echo set_value('tgllahir'); ?>">
						</div>
<!-- 'alamat' -->
						<div class="form-group">
						    <label for="alamat">Alamat :</label>
						    <input type="text" name="alamat" value="<?php echo set_value('alamat'); ?>">
						</div>
<!-- 'hp' -->
						<div class="form-group">
						    <label for="hp">Nomor HP / WA :</label><?php echo '<span class="erx">'.form_error('hp').'</span>'; ?>
						    <input type="text" name="hp" <?php echo form_error('hp') ? 'class="inputerx"':'';?> value="<?php echo set_value('hp'); ?>" required/>
						</div>
<!-- 'asal_sekolah' -->
						<div class="form-group">
						    <label for="asal_sekolah">Asal Sekolah :</label>
						    <input type="text" name="asal_sekolah" value="<?php echo set_value('asal_sekolah'); ?>">
						</div>
<!-- 'NISN' -->
						<div class="form-group">
						    <label for="NISN">NISN :</label>
						    <input type="text" name="NISN" value="<?php echo set_value('NISN'); ?>">
						</div>
<!-- 'alamat_sekolah' -->
						<div class="form-group">
						    <label for="alamat_sekolah">Alamat Sekolah :</label>
						    <input type="text" name="alamat_sekolah" value="<?php echo set_value('alamat_sekolah'); ?>">
						</div>
<!-- 'nama_ayah' -->
						<div class="form-group">
						    <label for="nama_ayah">Nama Ayah :</label>
						    <input type="text" name="nama_ayah" value="<?php echo set_value('nama_ayah'); ?>">
						</div>
<!-- 'nama_ibu' -->
						<div class="form-group">
						    <label for="nama_ibu">Nama Ibu :</label>
						    <input type="text" name="nama_ibu" value="<?php echo set_value('nama_ibu'); ?>">
						</div>

                        
                        <div class="form-submit">
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="<?php echo base_url('template/registrasi')?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('template/registrasi')?>/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>