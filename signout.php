<?php
    session_start();
?>
<?php
    function destroy(){
        session_unset();
        session_destroy();
    }
    destroy();
    header('location:index.php');
    
?>