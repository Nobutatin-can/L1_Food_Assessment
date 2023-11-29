<?php

    include "topbit.php";

    if(isset($_POST['find_vegetarian']))     // if Search button pushed for vegetarian search
    {

    // retreve vegetarian input and format it
    $vegetarian=test_input(mysqli_real_escape_string($dbconnect,$_POST['vegetarian']));

    $find_sql="SELECT * FROM `Food_Reviews` WHERE `Vegetarian` ORDER BY `dish_name` ASC ";     // sort by dish name ascending
    $find_query=mysqli_query($dbconnect, $find_sql);
    $find_rs=mysqli_fetch_assoc($find_query);
    $count=mysqli_num_rows($find_query);

?>


<?php 
    include "show_results.php";
    
    } // end isset

    include "bottombit.php";
?>
