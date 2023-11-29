<?php

    include "topbit.php";

    if(isset($_POST['find_meal_type']))     // if search button pushed...
    {

    // retreve meal_type and format it
    $meal_type=test_input(mysqli_real_escape_string($dbconnect,$_POST['meal_type']));

    $find_sql="SELECT * FROM `Food_Reviews` WHERE `Meal_type` LIKE '%$meal_type%' ORDER BY `Meal_type` ASC ";
    $find_query=mysqli_query($dbconnect, $find_sql);
    $find_rs=mysqli_fetch_assoc($find_query);
    $count=mysqli_num_rows($find_query);

?>

<?php 
    include "show_results.php";

    } // end isset

    include "bottombit.php";
?>


