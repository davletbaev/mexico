<?php 
$tours = file_get_contents("./config/tours.json");
$tours = json_decode($tours, true);
if (!$tours) {
?>
    const TOURS = []
<?php } else {     
    $tours = json_encode($tours)
?>
    const TOURS = <?php echo $tours; ?>
<?php }; ?>