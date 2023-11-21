<?php
   include_once 'header.php';
?>

        <section class="Index-intro">
            <h2>Sign up</h2>
            <form action="includes/signup.inc.php" method="post">
             <li><input type="text" name="name" placeholder="Full name..." ></li> 
             <li><input type="email" name="email" placeholder="Email address" ></li>
             <li><input type="text" name="uid" placeholder="username" ></li>
        
             <li><select name="gender" id="gender"></li>
             <option value="   ">   </option>
            <option value="female">Female</option>
            <option value="male">Male</option>
        </select>
        
            <li><input type="password" name="pwd" placeholder="password" ></li> 
            <li> <input type="password" name="pwdrepeat" placeholder="Repeat password"></li>
            <li><button type="submit" name="submit">Sign Up</button></li> 
            </form> <?php
        if (isset($_GET["error"])) {
         if ($_GET["error"]== "emptyinput") {
            echo "<p>Fill in all fields!</p>";
         }
         else if ($_GET["error"]== "invaliduid") {
           echo"<p>Choose a proper username!</p>";
         }
         else if ($_GET["error"]== "invalidemail") {
            echo"<p>Choose a proper email!</p>";
          }
          else if ($_GET["error"]== "passwordsdontmatch") {
            echo"<p>Passwords don't match!</p>";
          }
          else if ($_GET["error"]== "stmtfailed") {
            echo"<p>Something went wrong, again!</p>";
          }
          else if ($_GET["error"]== "usernametaken") {
            echo"<p>Username alredy taken!</p>";
          }
          else if ($_GET["error"]== "none") {
            echo"<p>You have signed up!</p>";
          }
        }
         
        ?>
        </section>
        <?php
        if (isset($_GET["error"] )) {
         if ($_GET["error"]== "emptyinput") {
            echo "<p>Fill in all fields!</p>";
         }
         else if ($_GET["error"]== "invaliduid") {
           echo"<p>Choose a proper username!</p>";
         }
         else if ($_GET["error"]== "invalidemail") {
            echo"<p>Choose a proper email!</p>";
          }
          else if ($_GET["error"]== "passwordsdontmatch") {
            echo"<p>Passwords don't match!</p>";
          }
          else if ($_GET["error"]== "stmtfailed") {
            echo"<p>Something went wrong, again!</p>";
          }
          else if ($_GET["error"]== "usernametaken") {
            echo"<p>Username alredy taken!</p>";
          }
          else if ($_GET["error"]== "none") {
            echo"<p>You have signed up!</p>";
          }
        }
         
        ?>



<?php
   include_once 'footer.php';
?>