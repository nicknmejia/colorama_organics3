<?php
$path = "";
include('inc/header.php');
?>
 <?php
        //if the user has not logged in
        if(!isLoggedIn())
        {
        ?>
                <div class="four columns push_four">
          <h4>Please Login</h4>
          <h3 style="color: red;"><?php echo $_GET['fail']; ?></h3>
        <form name="login" action="login/login.php" method="post">
          <p>Username: <input type="text" name="username" /><br>
          Password: <input type="password" name="password" /></p>
          <p id="login"><input type="submit" value="Login" /></p>
        </form>
                </div>
        <?php }
        else { ?>
    <!-- Content goes here -->
    <div class="row panel">
        <div class="large-3 columns">
          <h1>Welcome User</h1>
          <h5>Todays Date: <?php echo date("m/d/Y") ?></h5>
          <h5>Server Time: <?php echo date("h:i"); ?></h5>
        </div>
        <div class="large-9 columns margin_push_top_big">
          <div class="row">
            <div class="large-6 columns">
              <span class="big_char">3</span>
              <span class="hide-for-large-up line_top">Orders Shipping Tomorrow</span>
            </div>
            <div class="large-6 columns">
              <span class="big_char">2</span>
              <span class="hide-for-large-up line_top">Orders Printed</span>
            </div>
          </div>
          <div class="row">
            <div class="large-6 columns line_top show-for-large-up">
              Orders Shipping Tomorrow
            </div>
            <div class="large-6 columns line_top show-for-large-up">
              Orders Printed
            </div>
          </div>
        </div>
    </div>

    <div class="row">
      <h3 class="centered">What would you like to do?</h3>
      <div class="row" style="margin-top: 30px;">
        <div class="large-4 columns centered">
          <a href="views/orders/form.php">
            <i class="fi-pencil big_char"></i>
            <div>Place Order</div>
          </a>
        </div>
        <div class="large-4 columns centered">
          <a href="#">
            <i class="fi-page-copy big_char"></i>
            <div>View Orders</div>
          </a>
        </div>
        <div class="large-4 columns centered">
          <a href="#">
            <i class="fi-torso-business big_char"></i>
            <div>User Settings</div>
          </a>
        </div>
      </div>
    </div>
    
    <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>

<?php } 
include('inc/footer.php') 
?>