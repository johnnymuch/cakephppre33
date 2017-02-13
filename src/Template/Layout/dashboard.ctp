<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Welcome to Cakephp Developer';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

  <!-- Bootstrap 3.3.6 -->
  <!--<link rel="stylesheet" href="/css/bootstrap.min.css">-->
  <?= $this->Html->css('dashboard/bootstrap.min.css') ?>
  <!-- Font Awesome -->
  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">-->
  <?= $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css') ?>
  <!-- Ionicons -->
  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">-->
  <?= $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css') ?>
  <!-- Theme style -->
  <!--<link rel="stylesheet" href="dist/css/AdminLTE.min.css">-->
  <?= $this->Html->css('dashboard/AdminLTE.min.css') ?>
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <!--<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">-->
  <?= $this->Html->css('dashboard/_all-skins.min.css') ?>
  <!-- iCheck -->
  <!--<link rel="stylesheet" href="plugins/iCheck/flat/blue.css">-->
  <?= $this->Html->css('dashboard/blue.css') ?>
  <!-- Morris chart -->
  <!--<link rel="stylesheet" href="plugins/morris/morris.css">-->
  <?= $this->Html->css('dashboard/morris.css') ?>
  <!-- jvectormap -->
  <!--<link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">-->
  <?= $this->Html->css('dashboard/jquery-jvectormap-1.2.2.css') ?>
  <!-- Date Picker -->
  <!--<link rel="stylesheet" href="plugins/datepicker/datepicker3.css">-->
  <?= $this->Html->css('dashboard/datepicker3.css') ?>
  <!-- Daterange picker -->
  <!--<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">-->
  <?= $this->Html->css('dashboard/daterangepicker.css') ?>
  <!-- bootstrap wysihtml5 - text editor -->
  <!--<link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">-->
  <?= $this->Html->css('dashboard/bootstrap3-wysihtml5.min.css') ?>
    

  <!-- jQuery 2.2.3 -->
<!--<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>-->
<?= $this->Html->script('jquery-2.2.3.min.js') ?>
<!-- Bootstrap 3.3.6 -->
<!--<script src="bootstrap/js/bootstrap.min.js"></script>-->
<?= $this->Html->script('bootstrap.min.js') ?>
<!-- FastClick -->
<!--<script src="plugins/fastclick/fastclick.js"></script>-->
<?= $this->Html->script('fastclick.js') ?>
<!-- AdminLTE App -->
<!--<script src="dist/js/app.min.js"></script>-->
<?= $this->Html->script('app.min.js') ?>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<?= $this->Html->script('jquery.sparkline.min.js') ?>
<!-- jvectormap -->
<!--<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>-->
<?= $this->Html->script('jquery-jvectormap-1.2.2.min.js') ?>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<?= $this->Html->script('jquery-jvectormap-world-mill-en.js') ?>
<!-- SlimScroll 1.3.0 -->
<!--<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>-->
<?= $this->Html->script('jquery.slimscroll.min.js') ?>
<!-- ChartJS 1.0.1 -->
<!--<script src="plugins/chartjs/Chart.min.js"></script>-->
<?= $this->Html->script('Chart.min.js') ?>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!--<script src="dist/js/pages/dashboard2.js"></script>-->
<?= $this->Html->script('dashboard2.js') ?>
<!-- AdminLTE for demo purposes -->
<!--<script src="dist/js/demo.js"></script>-->
<?= $this->Html->script('demo.js') ?>



 
    <?= $this->Flash->render() ?>
    <!--<div class="container clearfix">-->
        <?= $this->fetch('content') ?>
    <!--</div>-->
  
</body>
</html>
