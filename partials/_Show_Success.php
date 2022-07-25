<?php
if (isset($_SESSION['showSuccess']) && $_SESSION['showSuccess']) {
    echo '<div class="alert-box alert-box-success">
      <span><strong>Success: </strong>Logged in Successfully.</span> <button
          id="dismiss"></button>
    </div>';
    $_SESSION['showSuccess'] = false;
} else {
    if (isset($_SESSION['showWarning']) && $_SESSION['showWarning']) {
        echo '<div class="alert-box">
      <span><strong>Failure: </strong>Wrong Password!!!</span> <button
          id="dismiss"></button>
    </div>';
        session_unset();
        session_destroy();
    }
}
?>