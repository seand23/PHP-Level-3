<?php 
require 'lib/functions.php';
?>


<?php require('layout/header.php');
?>

<h1> We have : <?php echo count(get_pets()); ?> new pets! </h1>

<?php require('layout/footer.php');
?>