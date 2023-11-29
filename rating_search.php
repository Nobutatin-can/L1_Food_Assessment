<?php

    include "topbit.php";

    // if find button pushed...

    if(isset($_POST['find_rating']))
    {

    // retreve rating and format it
    $amount=test_input(mysqli_real_escape_string($dbconnect,$_POST['amount']));
    $stars=test_input(mysqli_real_escape_string($dbconnect,$_POST['stars']));

    if ($amount=="exactly")
    {
        $find_sql="SELECT * FROM `Food_Reviews` WHERE `Rating` = $stars ORDER BY `Dish_name` ASC";
    }

    elseif ($amount=="less")
    {
        $find_sql="SELECT * FROM `Food_Reviews` WHERE `Rating` <= $stars ORDER BY `Dish_name` ASC";
    }

    else
    {
        $find_sql="SELECT * FROM `Food_Reviews` WHERE `Rating` >= $stars ORDER BY `Dish_name` ASC";
    }

    
    $find_query=mysqli_query($dbconnect, $find_sql);
    $find_rs=mysqli_fetch_assoc($find_query);
    $count=mysqli_num_rows($find_query);

?>


<?php 
    include "show_results.php";
    
    } // end isset

    include "bottombit.php";
?>
