<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background: #ffffff;
}

a {
  transition: .3s;
}

a:hover,
a:active,
a:focus {
  outline: none;
  text-decoration: none;
}

.footer {
  position: relative;
  padding-top: 45px;
  background: #121518;
}

.footer .newsletter {
  position: relative;
  max-width: 900px;
  margin: 0 auto 45px auto;
  padding: 30px 15px;
  background: #000000;
  text-align: center;
}

.footer .newsletter h2 {
  color: white;
  font-size: 35px;
  font-weight: 600;
  margin-bottom: 20px;
}

.footer .newsletter .form {
  position: relative;
  max-width: 400px;
  margin: 0 auto;
}

.footer .newsletter input {
  height: 50px;
  border: 2px solid #cdcdcd;
  border-radius: 0;
}

.footer .newsletter .btn {
  position: absolute;
  top: 5px;
  right: 5px;
  height: 40px;
  padding: 8px 20px;
  font-size: 14px;
  font-weight: 500;
  text-transform: uppercase;
  color: white;
  background: #121518;
  border-radius: 0;
  border: 2px solid #0085ff;
  transition: .3s;
}

.footer .newsletter .btn:hover {
  color: white;
  background: #0085ff;
}

.footer .newsletter .btn:focus {
  box-shadow: none;
}

.footer .footer-about,
.footer .footer-link,
.footer .footer-contact {
  position: relative;
  margin-bottom: 45px;
  color: white;
}

.footer .footer-about h3,
.footer .footer-link h3,
.footer .footer-contact h3{
  position: relative;
  margin-bottom: 20px;
  font-size: 22px;
  font-weight: 600;
  letter-spacing: 1px;
  color: #0085ff;
}

.footer .footer-link a {
  display: block;
  margin-bottom: 10px;
  color: #dddddd;
  transition: .3s;
  text-transform: capitalize;
}

.footer .footer-link a::before {
  position: relative;
  content: "\f105";
  font-family: "Font Awesome 5 Free";
  font-weight: 900;
  margin-right: 10px;
}

.footer .footer-link a:hover {
  color: white;
  letter-spacing: 1px;
}

.footer .footer-contact p i {
  width: 25px;
}

.footer .footer-social {
  position: relative;
  margin-top: 20px;
}

.footer .footer-social a {
  display: inline-block;
}

.footer .footer-social a i {
  margin-right: 15px;
  font-size: 18px;
  color: #0085ff;
}

.footer .footer-social a:last-child i {
  margin: 0;
}

.footer .footer-social a:hover i {
  color: #dddddd;
}

.footer .footer-menu .f-menu {
  position: relative;
  padding: 10px 0;
  font-size: 0;
  text-align: center;
  border-top: 1px solid rgba(255, 255, 255, .1);
  border-bottom: 1px solid rgba(255, 255, 255, .1);
}

.footer .footer-menu .f-menu a {
  color: white;
  font-size: 16px;
  margin-right: 15px;
  padding-right: 15px;
  border-right: 1px solid rgba(255, 255, 255, .3);
}

.footer .footer-menu .f-menu a:hover {
  color: white;
}

.footer .footer-menu .f-menu a:last-child {
  margin-right: 0;
  padding-right: 0;
  border-right: none;
}

.footer .copyright {
  padding: 30px 15px;
}

.footer .copyright p {
  margin: 0;
  color:white;
}

.footer .copyright .col-md-6:last-child p {
  text-align: right;
}

.footer .copyright p a {
  color: white;
  font-weight: 500;
  letter-spacing: 1px;
}

.footer .copyright p a:hover {
  color: #ffffff;
}

@media (max-width: 768px) {
  .footer .copyright p,
  .footer .copyright .col-md-6:last-child p {
    margin: 5px 0;
    text-align: center;
  }
}

    </style>
</head>
<body>
    <!-- Footer Start -->
<div class="footer">
  <div class="container">
    <div class="newsletter">
      <h2>Subscribe Our Newsletter</h2>
      <div class="form">
        <input class="form-control" placeholder="Email here">
        <button class="btn">Submit</button>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-4">
        <div class="footer-about">
          <h3>About Us</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu lectus a leo tristique dictum nec non quam. Suspendisse convallis, tortor eu placerat rhoncus, lorem quam iaculis felis, sed eleifend lacus neque id eros. Integer convallis volutpat neque
          </p>
        </div>
      </div>
      <div class="col-md-6 col-lg-8">
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="footer-link">
              <h3>Service Area</h3>
              <a href="">Lorem ipsum</a>
              <a href="">tempus posuere </a>
              <a href="">velit id accumsan</a>
              <a href="">ut porttitor</a>
              <a href="">Nam pretium</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="footer-link">
              <h3>Useful Link</h3>
              <a href="">Sed pretium</a>
              <a href="">ultricies turpis at</a>
              <a href="">Mauris cursus</a>
              <a href="">consectetur</a>
              <a href="">condimentum</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="footer-contact">
              <h3>Get In Touch</h3>
              <p><i class="fa fa-map-marker-alt"></i>123 Sri lanka</p>
              <p><i class="fa fa-phone-alt"></i>+1234567</p>
              <p><i class="fa fa-envelope"></i>info@example.com</p>
              <div class="footer-social">
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-youtube"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
                <a href=""><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container footer-menu">
    <div class="f-menu">
      <a href="">Terms of use</a>
      <a href="">Privacy policy</a>
      <a href="">Cookies</a>
      <a href="">Help</a>
      <a href="">FQAs</a>
    </div>
  </div>
  <div class="container copyright">
    <div class="row">
      <div class="col-md-6">
        <p>&copy; <a href="#">koojana</a>, All Right Reserved.</p>
      </div>
      <div class="col-md-6">
        <p>Designed By <a href="koojana.com">koojana</a></p>
      </div>
    </div>
  </div>
</div>
<!-- Footer End -->
</body>
</html>