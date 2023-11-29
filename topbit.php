<!DOCTYPE HTML>

<html lang="en">

<?php

    session_start();
    include("config.php");
    include("functions.php");

    $dbconnect=mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);      // Connect to Database

    if (mysqli_connect_errno())   // show error
    {
        echo "Connection failed:".mysqli_connect_error();
        exit;
    }

?>

<head>

    <meta charset="UTF-8">
    <meta name="description" content="Meal Review Database">
    <meta name="keywords" content="meals, reading, fiction, non-fiction, meal_type, reviews">
    <meta name="restaurant" content="Dima">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Edit the link below / replace with your chosen google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato%7cUbuntu" rel="stylesheet"> 
    
    <!-- Edit the name of your style sheet - 'foo' is not a valid name!! -->
    <link rel="stylesheet" href="food_style.css"> 
    
</head>
    
<body>
    
    <div class="wrapper">
    
        <div class = "box logo">

        <a href="index.php">
            <div class="box logo"  title="Logo - Click here to go to the Home Page">
            <img class="img-circle" src="logo.jpg" width="200" height="200" alt="generic logo" />
            
        </div>    <!-- / logo -->

        </a>

        
        </div>
        
        <div class="box banner">        <!-- logo image linking to home page goes here -->

        
            <h1>Cool Meal Reviews</h1>

    </div>					        <!-- / banner -->

            <!-- Navigation goes here.  Edit BOTH the file name and the link name -->
            <div class="box nav">
            <a href="index.php">Home</a> | 
            <a href="contact.php">Contact</a>
        </div>    <!-- / nav -->        
        

        
    <div class="box side">      <!-- side box -->

        <h2> Search | <a class="side" href="show_all.php">Show All </a> </h2>

        <i>Type part of a dish name / restaurant name if desired </i>    

        <hr /> <!-- hr/ for lines between each search type -->

        <!--- Start of Dish name Search -->
            
        <form method ="post" action ="dish_name_search.php" enchtype="multipart/form-data">

            <input class="search" type="text" name="dish_name" size="40" value="" required placeholder = "Dish name..."/>

            <input class ="submit" type="submit" name="find_dish_name" value="Search" />

        </form>

        <!-- End of Dish name Search -->

        <hr />

        <!--- Start of Restaurant Search -->
            
        <form method ="post" action ="restaurant_search.php" enchtype="multipart/form-data">

            <input class="search" type="restaurant" name="restaurant" size="40" value="" required placeholder = "Restaurant..."/>

            <input class ="submit" type="submit" name="find_restaurant" value="Search" />

        </form>

        <!-- End of Restaurant Search -->

        <hr />

        <!--- Start of Meal type Search -->
            
        <form method ="post" action ="meal_type_search.php" enchtype="multipart/form-data">

            <select name="meal_type" required>

                <option value="" disabled selected>Meal type...</option>
                <option value="Breakfast">Breakfast</option>
                <option value="Lunch">Lunch</option>
                <option value="Dinner">Dinner</option>
                <option value="Dessert">Dessert</option>
                    
            <input class ="submit" type="submit" name="find_meal_type" value="Search" />

        </form>

        <!-- End of Meal type Search -->

        <hr/> 

        <!-- start of ratings search -->
        <form method="post" action="rating_search.php" enctype="multipart/form-data">

            <select class="half_width" name="amount">

                <option value="exactly" >Exactly...</option>
                <option value="more" selected>At least...</option>
                <option value="less">At most...</option>

            </select>

            <select class="half_width" name="stars">        <!-- show rating as an amount of stars, not an int -->
                <option value=1>&#9733;</option>
                <option value=2>&#9733;&#9733;</option>
                <option value=3>&#9733;&#9733;&#9733;</option>
                <option value=4>&#9733;&#9733;&#9733;&#9733;</option>
                <option value=5>&#9733;&#9733;&#9733;&#9733;&#9733;</option>

            </select>

            <input type="submit" class="submit" name="find_rating" value="Search"/>
                    
        </form>     <!-- / rating search -->

        <hr/>

        <!-- Is vegetarian -->
        <form method="post" action="vegetarian_search.php" enchtype="multipart/form-data">  

            <label class= "half_width" for="vegetarian">Vegetarian</label>
            <input class= "half_width"type="checkbox" class="search" name="vegetarian" value="" required />

            <input class ="submit" type="submit" name="find_vegetarian" value="Search" />

        </form>         <!-- / vegetarian -->

        <hr />

    </div>					        <!-- / side bar -->