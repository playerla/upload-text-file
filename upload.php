<?php
// https://chat.openai.com
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the file was uploaded without errors
    if (isset($_FILES['textFile']) && $_FILES['textFile']['error'] === UPLOAD_ERR_OK) {
        // Get the temporary file location
        $tmpFile = $_FILES['textFile']['tmp_name'];

        // Read the content of the file
        $textData = file_get_contents($tmpFile);

        // Send the content as a response back to the client
        echo $textData;
    } else {
        // Handle file upload errors
        http_response_code(400);
        echo 'File upload failed.';
    }
} else {
    // Handle invalid requests
    http_response_code(400);
    echo 'Invalid request.';
}
?>
