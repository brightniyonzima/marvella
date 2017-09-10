<!DOCTYPE html>
<html>
<head>
  <title>test bourbon</title>
  <style type="text/css">
  html {
    min-height: 100%;
  }

  body {
    height: 100%;
  }

  .slideshow {
    list-style: none;
    z-index: 1;
  }
  .slideshow li span {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0px;
    left: 0px;
    color: transparent;
    background-size: cover;
    background-position: 50% 50%;
    background-repeat: none;
    opacity: 0;
    z-index: 0;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-animation: imageAnimation 24s linear infinite 0s;
    -moz-animation: imageAnimation 24s linear infinite 0s;
    animation: imageAnimation 24s linear infinite 0s;
  }
  .slideshow li h5 {
    position: absolute;
    text-align: center;
    z-index: 2;
    bottom: 150px;
    left: 0;
    right: 0;
    opacity: 0;
    font-size: 4.0625em;
    font-family: 'Josefin Sans', sans-serif;
    text-transform: uppercase;
    color: #fff;
    -webkit-animation: titleAnimation 24s linear 1 0s;
    -moz-animation: titleAnimation 24s linear 1 0s;
    animation: titleAnimation 24s linear 1 0s;
  }
  @media only screen and (min-width: 768px) {
    .slideshow li h5 {
      bottom: 30px;
      font-size: 4.125em;
    }
  }
  @media only screen and (min-width: 1024px) {
    .slideshow li h5 {
      font-size: 5.9375em;
    }
  }

  .slideshow li:nth-child(1) span {
    background-image: url(/img/houses/najeera-big.jpg);
  }

  .slideshow li:nth-child(2) span {
    background-image: url(/img/houses/house-maize.jpg);
    -webkit-animation-delay: 6s;
    -moz-animation-delay: 6s;
    animation-delay: 6s;
  }

  .slideshow li:nth-child(3) span {
    background-image: url(/img/products/Uganda-car.jpg);
    -webkit-animation-delay: 12s;
    -moz-animation-delay: 12s;
    animation-delay: 12s;
  }

  .slideshow li:nth-child(4) span {
    background-image: url(/img/Kampala-sideview.jpg);
    -webkit-animation-delay: 18s;
    -moz-animation-delay: 18s;
    animation-delay: 18s;
  }

  @-webkit-keyframes imageAnimation {
    0% {
      opacity: 0;
      -webkit-animation-timing-function: ease-in;
    }
    12.5% {
      opacity: 1;
      -webkit-animation-timing-function: ease-out;
    }
    25% {
      opacity: 1;
    }
    37.5% {
      opacity: 0;
    }
    100% {
      opacity: 0;
    }
  }
  @-moz-keyframes imageAnimation {
    0% {
      opacity: 0;
      -moz-animation-timing-function: ease-in;
    }
    12.5% {
      opacity: 1;
      -moz-animation-timing-function: ease-out;
    }
    25% {
      opacity: 1;
    }
    37.5% {
      opacity: 0;
    }
    100% {
      opacity: 0;
    }
  }
  @keyframes imageAnimation {
    0% {
      opacity: 0;
      -webkit-animation-timing-function: ease-in;
      -moz-animation-timing-function: ease-in;
      animation-timing-function: ease-in;
    }
    12.5% {
      opacity: 1;
      -webkit-animation-timing-function: ease-out;
      -moz-animation-timing-function: ease-out;
      animation-timing-function: ease-out;
    }
    25% {
      opacity: 1;
    }
    37.5% {
      opacity: 0;
    }
    100% {
      opacity: 0;
    }
  }
  @-webkit-keyframes titleAnimation {
    0% {
      opacity: 0;
    }
    12.5% {
      opacity: 1;
    }
    25% {
      opacity: 1;
    }
    37.5% {
      opacity: 0;
    }
    100% {
      opacity: 0;
    }
  }
  @-moz-keyframes titleAnimation {
    0% {
      opacity: 0;
    }
    12.5% {
      opacity: 1;
    }
    25% {
      opacity: 1;
    }
    37.5% {
      opacity: 0;
    }
    100% {
      opacity: 0;
    }
  }
  @keyframes titleAnimation {
    0% {
      opacity: 0;
    }
    12.5% {
      opacity: 1;
    }
    25% {
      opacity: 1;
    }
    37.5% {
      opacity: 0;
    }
    100% {
      opacity: 0;
    }
  }
  .no-cssanimations .slideshow li span {
    opacity: 1;
  }
</style>
</head>
  <body>
    <ul class='slideshow'>
      <li>
        <h5>Gayaza<br><small> @22m Ush</small></h5>
        <span>making your dream home a reality</span>
      </li>

      <li>
        <span>car hire services (call:070008989)</span>
      </li>

      <li>
        <span>Property management</span>
      </li>

      <li>
        <span>Consultation</span>
      </li>
    </ul>
    <div style="height: 200px;">
      
    </div>
  </body>
</html>