<?php
   include_once 'header.php';
?>

        <section class="Index-intro">
            <h2>Log in</h2>
            <form action="includes/login.inc.php" method="Post">
            <input type="text" name="uid" placeholder="username/Email" >
            <input type="password" name="pwd" placeholder="password" > 
             
             <button type="submit" name="submit">Login</button> 
            </form>
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
        </section>
        <?php
        if (isset($_GET["error"] )) {
         if ($_GET["error"]== "emptyinput") {
            echo "<p>Fill in all fields!</p>";
         }
         else if ($_GET["error"]== "wronglogin") {
           echo"<p>a=Incorrect login information!</p>";
         }
        }
        ?>
        </section>


<?php
   include_once 'footer.php';
?>