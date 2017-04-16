<?php

session_start();
?>


<?php if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] <= 0) : ?>
    <?php exit(); ?>
    <p class="alert alert-success">Access restricted</p>
<?php endif; ?>
<?php if (isset($_SESSION["user_id"]) || $_SESSION["user_id"] <= 0) : ?>
    <p class="alert alert-success">Access granted</p><br />
    <?php var_dump($_SESSION); ?>
    <form action="#" method="post">   
        <input type="submit" value="Logoff" />
    </form>
<?php endif; ?> 


