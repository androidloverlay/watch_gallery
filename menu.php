
<ul>
    <li><a href="index.php">Home</a></li>
                    
                   <!-- <li class="active">
                        <a href="#">Menu</a>
                        <ul>
                            <li><a href="#">Sub menu1</a></li>
                            <li><a href="#">Sub menu2</a></li>
                           
                           
                        </ul>
                    </li>-->
                     <li><a href="register.php">Register</a></li>
                     <li><a href="searchByCategory.php">Search</a></li>
                     <li><a href="aboutus.php">About Us</a></li>

                     <?php
                     if(isset($_SESSION['CustomerID']))
                     {
                        echo '<li><a href="logout.php">Logout</a></li>';
                         
                     }
                     else
                     {
                        echo '<li><a href="index.php">LogIn</a></li>';
                     }
                    
                     ?>
                     
                    
                </ul>