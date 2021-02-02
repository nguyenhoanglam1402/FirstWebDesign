<!doctype html>
<html lang="en">
  <head>
    <title>Sign Up</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style_css.css" />
  </head>
  <body>
      <header>
              <div class="contaner">
                <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
                  <a class="navbar-brand" href="index.php">
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
                      <a href="SignUp.html" class="navbar-link">
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
      <section>
        <div class="container">
          <div class="box-signup">
            <h1>Access once to buy goods forever!</h1>
            <h2>Let make shopping era begin from here!</h2>
            <form class="form-signup" action="SignUp.php" method="post">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address or Username</label>
                <input type="email" name="emailTextBox" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                  placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email or your username with anyone
                  else.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="passwordTextBox" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">I agree with all of laws.</label>
              </div>
              <button type="submit" name = "submit" class="btn btn-primary">Submit</button>
            </form>
            <?php include("connect.php"); ?>
          </div>
        </div>

      </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
    <footer>
      <div class="footer-container">
        <div class="element">
          <h5>Partners for cooperation and supply
          </h5>
          <div class="imgbox-partner">
            <img src="image/QiuQiuLogo.png" height="55" width="65">
            <span>
              <p class="navbar-brand">Qiu Shop</p>
            </span>
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
</html>



