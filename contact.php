<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <link href="contact.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Titillium+Web&display=swap"
          rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="shortcut icon" type="image/png" href="images/jc.png"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Jordy Carrero</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body>
<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-around py-3 mb-4">
    <a href="index.html" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <img src="images/jc.png" class="bi me-2" href="index.html" height="80" width="auto" alt="x">
    </a>
    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="index.html" class="nav-link px-2 link-light">Home</a></li>
        <li><a href="biografie.html" class="nav-link px-2 link-light">Biografie</a></li>
        <li><a href="discografie.html" class="nav-link px-2 link-light">Discografie</a></li>
        <li><a href="#" class="nav-link px-2 link-light">Radio DJ</a></li>
        <li><a href="links.html" class="nav-link px-2 link-light">Links</a></li>
    </ul>
    <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-warning me-2" onclick=contact()>Contact</button>
    </div>
</header>
<section>
    <h1 class="contact-title">Stuur mij een berichtje!</h1>
    <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
        <div class="divider-custom-line"></div>
    </div>
    <div class="container">
        <form action="contactform.php"
              class="contact-form" id="form" method="post">
            <label for="fname">Volledige Naam</label>
            <input type="text" id="fname" name="name" placeholder="Uw naam" required>

            <label for="lname">E-Mail</label>
            <input type="email" id="mail" name="mail" placeholder="Uw E-Mail" required>

            <label for="subject">Onderwerp</label>
            <input type="text" id="subject" name="subject" placeholder="Uw onderwerp" required>

            <label for="message">Uw bericht</label>
            <textarea id="message" name="message" placeholder="Typ hier uw bericht" style="height:200px"></textarea>
            <div class="g-recaptcha" data-sitekey="6LfEZJgaAAAAAKXYDteSK1u6MRC30Nyywtg9w09t"></div>
            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
</section>
<footer>
    <div class="footer-info">Boekingen | 0644785213 | info@JordyCarrero.com | <a
                href="https://www.facebook.com/zangerjordy.carrero.7/" target="_blank"><i
                    class="fab fa-facebook"></i></a><a
                href="https://www.instagram.com/demaandagavondshow/" target="_blank"><i
                    class="fab fa-instagram"></i></a><a
                href="https://www.youtube.com/channel/UC2oLwBayl8lrMKeVOKUf8vA" target="_blank"><i
                    class="fab fa-youtube"></i></a></div>
    <p class="footer-text">2021 JordyCarrero.nl | Alle rechten voorbehouden | Ontwerp & Realisatie <a
                class="footer-link" href="https://www.luremo.nl">Luremo.nl</a></p>
</footer>
<script>function contact() {
        location.href = "http://localhost/jordy/contact.php";
    }</script>
</body>
</html>