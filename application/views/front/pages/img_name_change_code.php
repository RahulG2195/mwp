

<?php 
// src="http://localhost/mwp-v3/uploads/Empire Card Products.png"
$directory = 'C:/xampp/htdocs/mwp-v3/uploads/'; // specify your directory path here

// Get a list of all PNG files in the directory
$files = glob($directory . '*.png');

// Iterate through each file and rename it
foreach ($files as $file) {
    $newName = str_replace('/[^\w]+/', '_', basename($file)); // replace spaces with underscores
    $newPath = $directory . $newName;

    if (rename($file, $newPath)) {
        echo "File renamed successfully: $newName<br>";
    } else {
        echo "Error renaming file: $file<br>";
    }
}	
$img = 'Empire Card Products.png';
$path = FCPATH . 'uploads/' . $img;  // Use FCPATH to get the absolute server path

echo $path;

if (file_exists($path)) {
    echo ' exists.';
} else {
    echo ' does not exist.';
}
?>