<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/sign-up.css">
  <link rel="stylesheet" href="/assets/css/header-nav.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <title>Admissions Portal | Sign Up</title>

</head>

<body>
  <header>
    <nav>
      <a href="/"><img class="logo" src="/assets/images/brand (2).png" alt="ECX Logo"></a>
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About Us</a></li>
        <li><a href="/contact">Contact Us</a></li>
      </ul>
      <ul>
        <li><a href="/login" class="sign-up-btn">Login</a></li>
      </ul>
      <div id="openButton" class="mobile-nav-hamburger display-none">
        <div class="line-1"></div>
        <div class="line-2"></div>
        <div class="line-3"></div>
      </div>
      <div id="myModal" class="mobile-nav">
        <div>
          <span style="cursor: pointer;" id="closeBtn" class="close">&times;</span>
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About Us</a></li>
            <li><a href="/contact">Contact Us</a></li>
            <li><a href="/login">Login</a></li>
          </ul>
          <a style="text-align: center;" href="/"><img src="/assets/images/brand (2).png"></a>
        </div>
      </div>
    </nav>
  </header>

  <main class="container col-lg-5 col-xl-5 col-sm-8 col-md-6">
    <h1 style="font-size: 3rem;" class="text-center my-5">Sign Up</h1>
    <form method="POST" action="{{ route('register') }}">
    {{ csrf_field() }}
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="firstname">First Name</label>
          <input name="firstname" type="text" class="form-control" value="{{ old('name') }}" placeholder="First Name" required>
        </div>
        <div class="form-group col-md-6">
          <label for="lastname">Surname</label>
          <input name="lastname" type="text" class="form-control" placeholder="Surname" required>
        </div>
      </div>
      @if ($errors->has('name'))
        <span class="help-block">
          <strong>{{ $errors->first('name') }}</strong>
        </span>
      @endif
      
      <div class="form-group">
        <label for="email">Email</label>
        <input name="email" type="email" class="form-control" id="inputEmail4" value="{{ old('email') }}" placeholder="example@email.com" required>
      </div>
      @if ($errors->has('email'))
        <span class="help-block">
          <strong>{{ $errors->first('email') }}</strong>
        </span>
      @endif
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="password">Password</label>
          <input name="password" type="password" class="form-control" id="inputPassword4" placeholder="Password" required>
        </div>
        <div class="form-group col-md-6">
          <label for="password-confirm">Confirm Password</label>
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        </div>
      </div>
      @if ($errors->has('password'))
        <span class="help-block">
          <strong>{{ $errors->first('password') }}</strong>
        </span>
      @endif
      </div>
      <button class="my-3" type="submit">Sign Up</button>
    </form>
  </main>

  <footer class="mr-0"></footer>
  <script src="/assets/js/main.js"></script>
  <script src="/assets/js/portal.js"></script>
</body>

</html>