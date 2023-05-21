<?php

// Assuming you have already set up your Laravel environment and imported the necessary classes

// Import the model class for the 'dates' table
use App\Models\Dates;

// Define the function for the new page
function showDates()
{
    // Retrieve all the records from the 'dates' table
    $dates = Dates::all();

    // Display the records in a table format
    echo '<table>';
    echo '<tr><th>ID</th><th>Date</th><th>Description</th></tr>';

    foreach ($dates as $date) {
        echo '<tr>';
        echo '<td>' . $date->id . '</td>';
        echo '<td>' . $date->date . '</td>';
        echo '<td>' . $date->description . '</td>';
        echo '</tr>';
    }

    echo '</table>';
}

// Call the function to display the dates on the new page
showDates();
?>
