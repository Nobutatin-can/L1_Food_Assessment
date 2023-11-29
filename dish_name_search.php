<?php

    include "topbit.php";

    // if find button pushed...

    if(isset($_POST['find_dish_name']))
    {

        // retreve dish_name and format it
        $dish_name=test_input(mysqli_real_escape_string($dbconnect,$_POST['dish_name']));

        $find_sql="SELECT * FROM `Food_Reviews` WHERE `Dish_name` LIKE '%$dish_name%' ORDER BY `Dish_name` ASC ";
        $find_query=mysqli_query($dbconnect, $find_sql);
        $find_rs=mysqli_fetch_assoc($find_query);
        $count=mysqli_num_rows($find_query);

?>


<?php 
    include "show_results.php";
    
    } // end isset

    include "bottombit.php";
?>
