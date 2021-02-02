<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Qiu Qiu Mall</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style_css.css" />
  </head>
  <body>
    <header>
      <div class="contaner">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
          <a class="navbar-brand" href="#">
            <img src="image/QiuQiuLogo.png" height="35" width="45"> Qiu Shop
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto" id="navItem">
              <li class="nav-item active">
                <a class="nav-link" href="#">SALES
                  <span class="sr-only">(current)</span>
                  <span class="notification">New</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">QIU LOCKER
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">T-SHIRT
                  <span class="notification">New</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">UNDERWEAR
                  <span class="notification">New</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">QIU QIU COMMUNITY
                  <img src="https://www.coolmate.me/images/care-share/careshare-symbol.png" width="20px">
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">EVENT
                  <span class="notification">New</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">TOP PARTNER
                </a>
              </li>
            </ul>
            <span class="navbar-text">
              <a href="#" class="navbar-link">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-door-open" fill="currentColor"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M1 15.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM11.5 2H11V1h.5A1.5 1.5 0 0 1 13 2.5V15h-1V2.5a.5.5 0 0 0-.5-.5z" />
                  <path fill-rule="evenodd"
                    d="M10.828.122A.5.5 0 0 1 11 .5V15h-1V1.077l-6 .857V15H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117z" />
                  <path d="M8 9c0 .552.224 1 .5 1s.5-.448.5-1-.224-1-.5-1-.5.448-.5 1z" />
                </svg>
                Sign In
              </a>
              <a href="SignUp.php" class="navbar-link">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-arrow-in-right" fill="currentColor"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                  <path fill-rule="evenodd"
                    d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                </svg>
                Sign Up
              </a>
            </span>
          </div>
        </nav>
      </div>
    </header>
    <section class="banner"> 
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="image/repository/cover/des_kaki.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="image/repository/cover/des-boni.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="image/repository/cover/Coolmate_LDP_Banner-01_(1).jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="image/repository/cover/kakiako.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>
    <section>
      <div class="custom-container">
        <div class="card" style="width: 18rem;">
          <img src="image/repository/packet/1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Basic Packet</h5>
            <p class="card-text">A package of high-quality clothing from Coolmate that combines the branding with the Qiu Shop.
            </p>
            <a href="#" class="btn btn-primary">Buy now</a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="image/repository/packet/2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">New products</h5>
            <p class="card-text">A package of high-quality clothing from Coolmate that combines the branding with the Qiu Shop.
            </p>
            <a href="#" class="btn btn-primary">Buy now</a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="image/repository/packet/3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Black Packet</h5>
            <p class="card-text">A package of high-quality clothing from Coolmate that combines the branding with the Qiu Shop.
            </p>
            <a href="#" class="btn btn-primary">Buy now</a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="image/repository/packet/4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Men's accessories</h5>
            <p class="card-text">A package of high-quality clothing from Coolmate that combines the branding with the Qiu Shop.
            </p>
            <a href="#" class="btn btn-primary">Buy now</a>
          </div>
        </div>
      </div>
    </section>
    <div class="custom-container">
      <h4>HOT PRODUCTS</h4>
      <div class="card" style="width: 18rem;">
        <img src="image/repository/clothes/1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5><a href="#">Refresh Box</a></h5>
          <p class="card-text">Only 99$.
          </p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="image/repository/clothes/2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5><a href="#">Refresh Box</a></h5>
          <p class="card-text">Only 79$.
          </p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="image/repository/clothes/3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5><a href="#">Refresh Box</a></h5>
          <p class="card-text">Only 89$.
          </p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="image/repository/clothes/4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5><a href="#">Refresh Box</a></h5>
          <p class="card-text">Only 69$.
          </p>
        </div>
      </div>
    </div>
  </body>
  <footer>
    <div class="footer-container">
      <div class="element">
        <h5>Partners for cooperation and supply
        </h5>
        <div class="imgbox-partner">
          <img src="image/QiuQiuLogo.png" height="55" width="65">
          <span><p class="navbar-brand">Qiu Shop</p></span>
          <img src="https://www.coolmate.me/images/logo.svg" height="50" width="240">
        </div>
      </div>
      <div class="element">
        <h5>Chairman of the Board and CEO
        </h5>
        <div class="imgbox-partner">
          <p class="discription">Nguyen Hoang Lam</p>
          <p class="discription">Nguyen Hoang Gia Luyn</p>
        </div>
      </div>
      <div class="element">
        <h5>Distribution unit
        </h5>
        <div class="imgbox-partner">
          <img src="image/logo/partner/lazada.png" height="auto" width="180px">
          <img src="https://bitly.com.vn/IdmUq" height="auto" width="180px">
        </div>
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="script.js"></script>
</html>
