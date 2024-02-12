//https://chat.openai.com
// Create a Blob object from the text
var blob = new Blob(["textInput"], { type: 'text/plain' });

// Create a FormData object and append the Blob to it
var formData = new FormData();
formData.append('textFile', blob, 'textFile.txt');

// Example using Fetch API
fetch('upload.php', {
    method: 'POST',
    body: formData
})
.then(response => response.text())
.then(data => {
    console.log('Upload successful:', data);
})
.catch(error => {
    console.error('Upload failed:', error);
});