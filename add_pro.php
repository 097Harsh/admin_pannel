<?php

include 'common/connect.php';
$cat = $obj->query("select * from category");
$sub = $obj->query("select * from sub_cat");

if(isset($_POST['submit']))
{
    $name = $_POST['p_name'];
    $price = $_POST['price'];
    $q = $_POST['qun'];
    $desc = $_POST['desc'];
    $size = $_POST['size'];
    $p1 = $_POST['s_cat'];
    $s1 	= $_POST['cat'];
    
    $exe = $obj->query("insert into product(p_name,price,quantity,description,size,cat_id,sub_id) values('$name','$price','$q',
    '$desc','$size','$p1','$s1')");
	if($exe)
	{
		echo " <script>alert('Product added succesfully');</script>";
	}
	else
	{
		echo "<script>alert('Something went wrong...');</script>";
	}

}
?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Form_validation :: w3layouts</title>
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
		<div class="form-w3layouts">
            <!-- page start-->
            
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add categroy
                           
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="cmxform form-horizontal " id="signupForm" method="post" action="" novalidate="novalidate">
                                    <div class="form-group ">
                                        <label for="p_name" class="control-label col-lg-3">Product name</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="p_name" name="p_name" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="price" class="control-label col-lg-3">Price</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="price" name="price" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="qun" class="control-label col-lg-3">Quantity</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="qun" name="qun" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="desc" class="control-label col-lg-3">Description</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="desc" name="desc" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="size" class="control-label col-lg-3">Size</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="size" name="size" type="text">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group ">
                                        <label for="s_cat" class="control-label col-lg-3">Select categroy</label>
                                            <div class="col-lg-6">
                                            <select id="s_cat" name="s_cat">
                                                    <option value="">--select</option>
                                                    <?php
                                                            while($p = $sub->fetch_object())
                                                            {
                                                                ?>
                                                                <option value="<?php echo $p->sub_id;?>"><?php echo $p->sub_name;?></option>
                                                                <?php
                                                            }

                                                    ?>

                                            </select>
                                            </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cat" class="control-label col-lg-3">Select categroy</label>
                                            <div class="col-lg-6">
                                            <select id="cat" name="cat">
                                                    <option value="">--select</option>
                                                    <?php
                                                            while($s = $cat->fetch_object())
                                                            {
                                                                ?>
                                                                <option value="<?php echo $s->cat_id;?>"><?php echo $s->cat_name;?></option>
                                                                <?php
                                                            }

                                                    ?>

                                            </select>
                                            </div>
                                    </div>
                                    <div class="col-lg-offset-3 col-lg-6">
                                            <button type="submit" class="btn btn-default" id="submit" name="submit">Submit</button> 
                                    </div>  
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- page end-->
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
