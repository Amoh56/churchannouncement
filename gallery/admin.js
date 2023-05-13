document.getElementById('uploadForm').addEventListener('submit', function(event) {
    event.preventDefault();

    var fileInput = document.getElementById('image');
    var file = fileInput.files[0];

    var formData = new FormData();
    formData.append('image', file);

    fetch('upload.php', {
        method: 'POST',
        body: formData
    })
        .then(response => {
            if (response.ok) {
                alert('Image uploaded successfully.');
            } else {
                alert('Error uploading image. Please try again.');
            }
        })
        .catch(error => {
            console.error('Error uploading image:', error);
        });

    fileInput.value = '';
});
