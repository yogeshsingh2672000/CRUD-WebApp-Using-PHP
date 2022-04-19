<<<<<<< HEAD
<?php

    session_start();
    if ($_SESSION['status'] != "start"){
        header("Location: login.php");
    }
    session_unset();
    session_destroy();
    header("Location: login.php");

=======
<?php

    session_start();
    if ($_SESSION['status'] != "start"){
        header("Location: login.php");
    }
    session_unset();
    session_destroy();
    header("Location: login.php");

>>>>>>> 7fb49b44ac3f78ec1fe897227182c38b32539231
?>