function fetchImages() {
    fetch('get_images.php')
        .then(response => response.json())
        .then(data => {
            var gallery = document.getElementById('gallery');
            gallery.innerHTML = '';

            data.forEach(image => {
                var imageElement = document.createElement('img');
                imageElement.classList.add('gallery-image');
                imageElement.src = 'gallery/' + image.filename;

                gallery.appendChild(imageElement);
            });
        })
        .catch(error => {
            console.error('Error fetching images:', error);
        });
}

fetchImages();
