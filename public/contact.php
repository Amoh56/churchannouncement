<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>Contact Us</title>
    <style>
        .contact-box {
  display: flex;
  justify-content: center;
  align-items: center;
  border: 2px solid #fff;
  background-color: #f1f1f1;
  padding: 20px;
  border-radius: 10px;
}

.contact-icon {
  display: inline-block;
  margin: 0 10px;
  font-size: 24px;
  color: #333; /* Set the icon color as desired */
}

.whatsapp:hover {
  color: #25d366; /* Set the WhatsApp icon color on hover */
}

.facebook:hover {
  color: #3b5998; /* Set the Facebook icon color on hover */
}

.instagram:hover {
  color: #e4405f; /* Set the Instagram icon color on hover */
}
.contact-icon.gmail:hover {
  color: #D44638; /* Set the Gmail icon color on hover */
}
.place-photo {
  text-align: center;
  margin-top: 20px; /* Adjust the margin-top value as needed */
  margin-bottom: 10px; /* Adjust the margin-bottom value as needed */
}

.place-photo img {
  max-width: 100%;
  border-radius: 10%; /* Make the image appear as a circle */
}
.contact-icon.home:hover {
  color: #ff0000; /* Set the home icon color on hover */
}


/* Media queries for responsive design */

/* For screens smaller than 600px */
@media (max-width: 600px) {
  .contact-box {
    flex-direction: column;
    padding: 10px;
  }

  .contact-icon {
    margin: 5px;
  }
}

/* For screens larger than 1200px */
@media (min-width: 1200px) {
  .contact-box {
    max-width: 600px;
    margin: 0 auto;
  }
}

    </style>
</head>
<body>
    <div class="contact-box">
    <a href="https://wa.me/254710673471" target="_blank" class="contact-icon whatsapp">
        <i class="fab fa-whatsapp"></i>
    </a>
    <a href="mailto:YOUR_EMAIL_ADDRESS" target="_blank" class="contact-icon gmail">
    <i class="far fa-envelope"></i>
    </a>
    <a href="https://www.facebook.com/YOUR_FACEBOOK_PAGE" target="_blank" class="contact-icon facebook">
        <i class="fab fa-facebook"></i>
    </a>
    <a href="https://www.instagram.com/YOUR_INSTAGRAM_PAGE" target="_blank" class="contact-icon instagram">
        <i class="fab fa-instagram"></i>
    </a>
    <a href="../index.php" class="contact-icon home">
    <i class="fas fa-home"></i>
    </a>
    </div>
    
    
    <div class="place-photo">
        <img src="../images/map1.png" alt="Place Photo">
    </div>
    
</body>
</html>