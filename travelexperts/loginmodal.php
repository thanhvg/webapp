<!-- File creator: Sarah Ferguson -->
<!-- Modal -->
<div id="destination"></div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:20px 30px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3><span class="glyphicon glyphicon-lock"></span> Login</h3>
        </div>
        <div class="modal-body" style="padding:40px 30px;">
          <form method="post" action="loginprocess.php">
            <label for="usrname"><span class="glyphicon glyphicon-user"></span> Email:</label><br>
            <input type="text" name="email" id="usrname" placeholder="Enter email" size="30"><br><br>
            <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password:</label><br>
            <input type="password" name="password" id="psw" placeholder="Enter password" size="30"><br><br>
            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-off"></span> Login</button>
            <button type="submit" class="btn btn-primary btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          </form>
        </div>
        <div class="modal-footer">
          <p>Not a member? <a href="registration.php">Sign Up</a></p>
          <!-- <p>Forgot <a href="#">Password?</a></p> -->
        </div>
      </div>
  </div>
</div>

<script>
$(document).ready(function(){
    $('#login').click(function(){
    $('#myModal').modal('show');
    });
});
</script>
