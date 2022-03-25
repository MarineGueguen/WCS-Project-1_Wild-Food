<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/footer.css"/>
</head>
<footer>
  <div class="footer-grid">
    <div>
      <p>Wild Food 2022 ©</p>
    </div>
    <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="button" data-action="like" data-size="small" data-share="false"></div>
    <button class="contact-open-button" onclick="openContactForm()">Nous contacter</button>
    <form class="newsletter-inscription" action="#" metod="post">
      <div>  
        <label for="email">Recevoir notre newsletter :</label>
      </div>
      <div>
      <input type="email" name="email">
      <button class="newsletter-button">Envoyer</button>
      </div>
    </form>
  </div>
  <div class="contact-form-container" id="contactForm">
    <button class="contact-close-button" onclick="closeContactForm()">X</button>
    <form action="" class="contact-form" method="post">
      <div>
        <label for="firstname">Prénom :</label>
      </div>
      <div>
        <input type="text" id="firstname" name="user_firstname">
      </div>
      <div>
        <label for="lastname">Nom :</label>
      </div>
      <div>
        <input type="text" id="lastname" name="user_lastname">
      </div>
      <div>
        <label for="email">Adresse mail :</label>
      </div>
      <div>
        <input type="email" id="email" name="user_email">
      </div>
      <div>
        <label for="message">Votre message :</label>
      </div>
      <div>
        <input type="text-area" id="message" name="user_message">
      </div>
      <div>
        <button class="contact-submit-button" type="submit">Envoyer</button>
      </div>
    </form>
  </div>
  <script>
    function openContactForm() {
    document.getElementById("contactForm").style.visibility = "visible";
    }
    function closeContactForm() {
    document.getElementById("contactForm").style.visibility = "hidden";
    }
</script>
</footer>
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v13.0" nonce="67qGljTl"></script>
</html>