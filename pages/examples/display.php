<?php
// Retrieve the image data from the database based on the row ID
$row_id = 29; // Replace with your own code to get the row ID
$image_query = "SELECT * FROM students WHERE id = $row_id";
$image_result = mysqli_query($link, $image_query);
$image_row = mysqli_fetch_assoc($image_result);
$image_data = $image_row['image'];

// Encode the image data to base64 format
$image_base64 = base64_encode($image_data);

// Set the input value with the encoded image data
?>
<input type="file" name="image" value="<?php echo $image_base64; ?>" />
