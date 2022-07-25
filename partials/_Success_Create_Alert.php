<?php
if(isset($_SESSION['created'])&& $_SESSION['created']){
    echo '<div class="alert-box alert-box-success">
    <span><strong>Success: </strong>Account Created Successfully.</span> <button
        id="dismiss"></button>
  </div>';
  session_unset();
  session_destroy();
}
?>