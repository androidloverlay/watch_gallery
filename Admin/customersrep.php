<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Watch Gallery Online Sales System</title>

<link href="css/style.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
<style>
  .table th{
    text-align: center !important;
  }
  .table{
    background: #fff ;
      border-radius: 5px;
  }

</style>
</head>
<!-- <header>
  <div class="container-fluid">
  <img src="image/leftheader1.jpg" class="pull-left"></li>
  <img src="image/leftheader2.jpg" class="pull-left"></li>
  <img src="image/leftheader1.jpg" class="pull-left"></li>
  </div>
</header> -->

<body>
  <nav class="navbar home-menu">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="ProductEntry.php">Product Setup</a></li>
        <li><a href="CategorySetup.php">Category Setup</a></li>
        <li><a href="orderlist.php">Order List</a></li>
        <li><a href="manage-product.php">Manage Product</a></li>
        <li><a href="reports.php">Reports</a></li>
        <li><a href="index.php">Logout</a></li>
      </ul>
  </nav>
  <div class="wapper">
    <div class="container">

      <table class="table">
        <tr>
          <!-- <th><label  class="lbl">ProductID </label></th>     --><label class="lbl">Customers Reports </label>      
          <th><label class="lbl">Customer Name</label> </th>
          <th><label class="lbl">Address</label> </th>
          <th><label class="lbl">Phone</label> </th>
          <th><label class="lbl">Email</label> </th>
          <th><label class="lbl">Passwords</label> </th>

          </tr>
    <?php
      include("Computerdb.php");
  
    $yltstr="Select * from tbl_customers";
    $yltres=mysql_query($yltstr,$conn);
        $i=0;
    while($yltrow=mysql_fetch_array($yltres)):?>
  
      <tr align="center">
          <td style="display:none;"><?php echo $v["CustomerID"] ?></td>
          <!-- <td><label class="lbl"><?php echo ++$i ?></label></td> -->
          <td><label class="lbl"><?php echo $yltrow["CustomerName"] ?></label> </td>
          <td><label class="lbl"><?php echo $yltrow["Address"] ?></label> </td>
          <td><label class="lbl"><?php echo $yltrow["Phone"]?></label> </td>
          <td><label class="lbl"><?php echo $yltrow["Email"] ?></label> </td>
          <td><label class="lbl"><?php echo $yltrow["Passwords"]?></label> </td>


          <!-- <?php
            $yltstr2="Select tbl_category.* from tbl_category LEFT JOIN tbl_products ON tbl_products.Category=tbl_category.CategoryID" ;
            /*$yltstr2="Select tbl_products.* from tbl_products LEFT JOIN tbl_category ON tbl_category.CategoryID=tbl_products.Category" ;*/
            $yltres2=mysql_query($yltstr2,$conn) or die(mysql_error());
                $i=0;
            while($yltrow2=mysql_fetch_array($yltres2)):?>
          <?php endwhile; ?>
 -->
            
        
          
          
          </tr>
    <?php endwhile; ?>
    </table>
  
    </div>
  </div>

  <footer><span>Developed By Aung Min Tun</span></footer>
</body>
</html>