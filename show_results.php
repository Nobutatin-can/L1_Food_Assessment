<!-- I made this a seperate file as the same block of code came up in multiple files -->

<div class="box main">

<h2>Results</h2>

<?php

    // Check if there are any results

    if ($count<1)
    {

    ?>

    <div class="error">
        Sorry! There are no results that match your search.
        Please use the searchbox in the sidebar to try again.

    </div>

    <?php
    
    }       // End count 'if'

    // if there are no results, output an error
    
    else
    {
        do {
        
        ?>

        <!-- Results go here -->
        <div class="results">

        <p>Dish name: <span class="sub_heading"><?php echo $find_rs['Dish_name'];?></span></p>

        <p>Restaurant: <span class="sub_heading"><?php echo $find_rs['Restaurant'];?></span></p>

        <p>Meal type: <span class="sub_heading"><?php echo $find_rs['Meal_type'];?></span></p>

        <p>Rating: <span class="sub_heading">

            <?php

            for ($x=0; $x < $find_rs['Rating']; $x++)        // Show rating as an amount of stars, not an int
            {
                echo "&#9733;";
            }

            ?>
        
        </span></p>

        <p><span class="sub_heading"> Review / Response</span></p>

        <p>

        <?php echo $find_rs['Review'];?> 

        </p>

        </div>      <!-- / end results -->

        <br />  <!-- make gap between boxes -->

        <?php

        }       // end of 'do'

        while($find_rs=mysqli_fetch_assoc($find_query));                    // if there are results, display them
    
    }       // end else

?>
    
</div>                          <!-- / main box -->