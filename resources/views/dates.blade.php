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
    echo '<tr><th>Date</th><th>Description</th></tr>';

    foreach ($dates as $date) {
        echo '<tr>';
        echo '<td>' . $date->date . '</td>';
        echo '<td>' . $date->description . '</td>';
        echo '</tr>';
    }

    echo '</table>';
}

// Call the function to display the dates on the new page
?>


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dates') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <?php
                    showDates();
                ?>
                </div>
                <div></div>
            </div>
        </div>
    </div>
</x-app-layout>
<livewire:table :config="App\Tables\DatesTable::class"/>


