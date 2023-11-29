<?php

    include "topbit.php";
    $showall_sql="SELECT * FROM `Food_Reviews` ORDER BY `Food_Reviews`.`Dish_name` ASC";
    $find_query=mysqli_query($dbconnect, $showall_sql);
    $find_rs=mysqli_fetch_assoc($find_query);
    $count=mysqli_num_rows($find_query);

?>

    
<?php
    include "show_results.php";
    include "bottombit.php";        // add the footer
?>


