<?php

include 'common/connect.php';

$result = $obj->query("select * from user");


?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Responsive_table :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<?php include 'common/header.php' ?>
<!--header end-->
<!--sidebar start-->
<?php include 'common/sidebar.php' ?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     User table
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th data-breakpoints="xs">ID</th>
            <th>User Name</th>
            <th>email</th>
            <th>Gender</th> 
            <th>DOb</th>
            <th>Contact</th>
            <th>Address</th>
            <th>Password</th>
            <th>Reg_date</th>
            <th>area_id</th>
            <th>city_id</th>
          </tr>
        </thead>
        <?php
            while($row = $result->fetch_object())
            {
              // echo '<pre>';
              // print_r($row);

        ?>
        <tbody>
          <tr>
            <td><?php echo $row->user_id; ?></td>
            <td><?php echo $row->name; ?></td>
            <td><?php echo $row->email; ?></td>
            <td><?php echo $row->gender; ?></td>
            <td><?php echo $row->dob; ?></td>
            <td><?php echo $row->contact; ?></td>
            <td><?php echo $row->address; ?></td>
            <td><?php echo $row->password; ?></td>
            <td><?php echo $row->reg_date; ?></td>
            <td><?php echo $row->area_id; ?></td>
            <td><?php echo $row->city_id; ?></td>
          </tr>
        </tbody>
        <?php
           }
        ?>
      </table>
    </div>
  </div>
</div>
</section>
 <!-- footer -->
		 <?php include 'common/footer.php' ?>
  <!-- / footer -->
</section>

<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
