<!doctype html>
<html>

<head>
  <base href="/">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Unsakini</title>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link rel="icon" type="image/x-icon" href="favicon.ico">

  <!-- SEO and Social Media -->
  <meta name="robots" content="index,follow">
  <meta property="og:site_name" content="Unsakini">
  <meta property="og:title" content="Unsakini | Secure Information Storage">
  <meta property="og:description" content="Your personal application for storing passwords, tokens, and licenses and many other sensitive data.">
  <meta property="og:image:secure_url" content="https://www.unsakini.com/assets/img/og-image.jpg">
  <meta property="og:image" content="https://www.unsakini.com/assets/img/og-image.jpg">
  <meta property="og:image:url" content="https://www.unsakini.com/assets/img/og-image.jpg">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.unsakini.com">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@adonespitogo">
  <meta name="twitter:creator" content="@adonespitogo">
  <meta name="twitter:title" content="Unsakini | Secure Information Storage">
  <meta name="twitter:description" content="Your personal application for storing passwords, tokens, and licenses and many other sensitive data.">
  <meta name="twitter:image" content="https://www.unsakini.com/assets/img/og-image.jpg">
</head>

<body>
  <div appRootComponent id="app-root" style="display: none">
  </div>
  <div class="cssload-dots" id="loader">
    <div class="cssload-dot"></div>
    <div class="cssload-dot"></div>
    <div class="cssload-dot"></div>
    <div class="cssload-dot"></div>
    <div class="cssload-dot"></div>
  </div>
  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" id="loader-svg">
    <defs>
      <filter id="goo">
        <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="12"></feGaussianBlur>
        <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0 0 0 1 0 0 0 0 0 18 -7" result="goo"></feColorMatrix>
        <!--<feBlend in2="goo" in="SourceGraphic" result="mix" ></feBlend>-->
      </filter>
    </defs>
  </svg>
  <footer class="footer text-center" style="display: none" id="footer">
    <div class="container">
      <p class="text-muted">
        <a href="https://github.com/adonespitogo/unsakini">
          <span class="fa fa-github"></span> Source Code
        </a>
        |
        <a href="https://opensource.org/licenses/MIT">MIT License</a>
      </p>
    </div>
  </footer>
</body>

</html>
