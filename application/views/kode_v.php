<!DOCTYPE html>

<html>

<head>

   <title>Implement Captcha in Codeigniter using helper</title>

   <script>

       $(document).ready(function(){

           $('.captcha-refresh').on('click', function(){

               $.get('<?php echo base_url().'kode/refresh'; ?>', function(data){

                   $('#image_captcha').html(data);

               });

           });

       });

   </script>

   <script src="<?php echo base_url()?>template/vendors/jquery/dist/jquery.min.js"></script>

</head>

<body>

<p id="image_captcha"><?php echo $captchaImg; ?></p>

<a href="javascript:void(0);" class="captcha-refresh" ><img src="<?php echo base_url().'template/images/visa.png'; ?>"/></a>

<form method="post">

   <input type="text" name="captcha" value=""/>

   <input type="submit" name="submit" value="SUBMIT"/>

</form>

</body>

</html>