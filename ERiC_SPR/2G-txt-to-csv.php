<?php

// Define the path to the input text file
$inputFile = 'C:\xampp\htdocs\ERiC_SPR\BTS_HW_2024-02-06T09-35-24.txt';

// Define the path to the output CSV file
$outputFile = 'C:\xampp\htdocs\ERiC_SPR\output.csv';

// Open the input file for reading
$handle = fopen($inputFile, 'r');

// Read the first line to get column headers
$headers = fgetcsv($handle, 0, ';');

// Open the output file for writing
$outputHandle = fopen($outputFile, 'w');

// Write the column headers to the output CSV file
fputcsv($outputHandle, $headers);

// Read each line of the input file, separate the data using ';' delimiter,
// and write it to the output CSV file
while (($line = fgets($handle)) !== false) {
    // Remove trailing newline character
    $line = rtrim($line, "\n");

    // Split the line into an array using ';' as the delimiter
    $data = explode(';', $line);

    // Write the data to the output CSV file
    fputcsv($outputHandle, $data);
}

// Close the file handles
fclose($handle);
fclose($outputHandle);

echo "Conversion complete. Output CSV file generated: $outputFile\n";

