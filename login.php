<?php   ?>
<form action="customerlogin.php" method="POST">
        <table class="register">
          <tr>
            <td><label class="lbl" for="Email">Email </label>
            </td>
            <td>:</td>

            <td>
              <input type="text" id="Email" name="Email" required></input>
            </td>

          </tr>

          <tr>
            <td><label class="lbl" for="Password">Password </label></td>
            <td>:</td>
            <td><input id="Password" type="password" name="Password" required></input></td>
          </tr>
          
        </table>
        <div class="btn-box">
          <input  type="submit" value="Login" class="">
          <input  type="reset" value="Cancel" class="">
        </div>
      </form>