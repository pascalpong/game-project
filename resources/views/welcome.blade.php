<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Page</title>
    <!-- Custom .css -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/homePage.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/index.css') }}">
    <link rel="stylesheet" href="{{ asset('Header/header.css') }}">
  </head>
  <body>
    <header id="header" class="header">
      <div class="container">
        <div class="header-container">
          <div class="header__logo">Logo</div>
          <nav class="header__nav">
            <ul class="nav-items flex-between">
              <li class="nav-item">
                <a href="#header">Home</a>
              </li>
              <li class="nav-item">
                <a href="#game">Game</a>
              </li>
              <li class="nav-item">
                <a href="#about">About Us</a>
              </li>
            </ul>
          </nav>
          <div class="header__buttons flex-between">
            @auth
              <a href="{{ url('/dashboard') }}" class="header__button button">Dashboard</a>
            @else
              <a href="{{ route('login') }}" class="header__button button">Login</a>
              <a href="{{ route('register') }}" class="header__button button">Registration</a>
            @endauth
            <div class="header__select">
              <select class="select">
                <option>English</option>
                <option>Việt Nam</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </header>
    <main class="main">
      <div class="main__banner banner">
        <div class="banner__img">
          <img src="{{ asset('imgs/background-main.jpg') }}" alt="background" />
        </div>
        <div class="container">
          <div class="banner__title">
            <h2 class="title">Play online games and win a lot of bonuses</h2>
            <p class="desc">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla
              quaerat
            </p>
            <div class="banner__buttons">
            @auth

            @else
              <a href="{{ route('register') }}" class="banner__buttons-register button-lg">Sign up</a>
              <a href="{{ route('login') }}" class="banner__buttons-login button-lg">Sign In</a>
            @endauth
            </div>
          </div>
        </div>
      </div>
      <div class="main__total">
        <div class="total__item">
          <div class="total__item-img">
            <img />
          </div>
          <div class="total__item-content">
            <p>Total user</p>
            <p>Total user</p>
          </div>
        </div>
        <div class="total__item">
          <div class="total__item-img">
            <img />
          </div>
          <div class="total__item-content">
            <p>Total user</p>
            <p>Total user</p>
          </div>
        </div>
        <div class="total__item">
          <div class="total__item-img">
            <img />
          </div>
          <div class="total__item-content">
            <p>Total user</p>
            <p>Total user</p>
          </div>
        </div>
        <div class="total__item">
          <div class="total__item-img">
            <img />
          </div>
          <div class="total__item-content">
            <p>Total user</p>
            <p>Total user</p>
          </div>
        </div>
      </div>
      <div class="main__games" id="game">
        <div class="container">
          <div class="main__games-title">
            <h2>Our Game</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus
              fugit distinctio enim ipsam eum quasi itaque amet ullam nam, sequi
            </p>
          </div>
          <div class="main__games-container">
          @foreach ( $games as $game )
            <div class="game">
              <div class="game__img">
                <img src="{{ $game->image }}" />
              </div>
              <div class="game__content">
                <div class="game__content-name">{{ $game->name }}</div>
              </div>
              <div class="game__button">
                <a
                @if (Auth::check())
                  href="{{ $game->link }}"
                @else
                  href="{{ route('login') }}"
                @endif
                class="button" href="">Play Now</a>
              </div>
            </div>
          @endforeach
          </div>
        </div>
      </div>
      <div class="main__about" id="about">
        <div class="container">
          <div class="about">
            <div class="about__content">
              <h2>About</h2>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Perferendis vol
              </p>
              <div class="about__content-items">
                <div class="item">
                  <div class="item__img">
                    <img />
                  </div>
                  <div class="item__name">Best Platform</div>
                </div>
                <div class="item">
                  <div class="item__img">
                    <img />
                  </div>
                  <div class="item__name">Quick Deposit</div>
                </div>
                <div class="item">
                  <div class="item__img">
                    <img />
                  </div>
                  <div class="item__name">Quick Withdraw</div>
                </div>
                <div class="item">
                  <div class="item__img">
                    <img />
                  </div>
                  <div class="item__name">24/7 Support</div>
                </div>
              </div>
              <div class="about__content-button button">
                <a href="">Learn More</a>
              </div>
            </div>
            <div class="about__img">
              <img src="{{ asset('imgs/about-img.png') }}" />
            </div>
          </div>
        </div>
      </div>
      <div class="main__ads">
        <div class="ads__content">
          <div class="content">
            <h2>Buy ticket and get million dollars for</h2>
            <h2>a click</h2>
          </div>
          <div class="button">Play Now</div>
        </div>
      </div>
    </main>
  </body>
</html>
