<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title>Watch Gallery Online Sales System</title>
<head>
          <?php
                   include("header.php");
           ?>

</head>

<body>
    <div class="container">
          
           <div class="clear"></div>
            <div class="content home-content" style="height:auto;padding-top:30px;" align="center">
                <div class="template">
                    <img src="images/BRAND/f.jpg" class="template-img"/>
                     <img src="images/BRAND/f1.jpg" class="template-img"/>
                      <img src="images/BRAND/f2.jpg" class="template-img"/>

                       <!-- slider start-->
                       <div class="slider-wrapper theme-default">
                                  <p>
                      Hello World. fldskhfdasoifh;oifn;sfni;ofidfuioashfpoiadsfhoidasyfpoidafyoaipfuiaspfuiaofjadfjajopaafjaoifjapoifjajfajfpasfj
                    </p>
                        </div>
                      <!-- slider end-->

                </div>

               
            </div>
            <div class="clear"></div>
            <div class="footer">
        <?php
                include("footer.php");
        ?>
      </div>
            
        </div>
          <script type="text/javascript" src="js/jquery.nivo.slider.js"></script> 
        <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider();
            });
        </script>
</body>
</html>