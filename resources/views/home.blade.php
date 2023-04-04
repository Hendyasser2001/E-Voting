<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF - 8">
  <title> E - voting System </title>
  <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
  <style>
    body {
      background-color: rgb(213, 213, 213);
      padding: 0px;
      margin: 0px;


    }

    h1 {
      color: red;
      font-size: 60px;
      position: absolute;
      left: 900px;
      top: 700px;

      font-weight: bold;

    }

    h2 {
      color: rgb(3, 19, 85);
      font-size: 60px;
      position: absolute;
      left: 500px;
      ;
      top: 1260px;
      font-weight: bold;

    }
  </style>


</head>



<body>
  <div class="container1">
  </div>

  <div class="topnav">

    <a href="./home.html">Home</a>
    <a href="#news">News</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
  </div>

  <a class="buttonvot" href="{{ url('capture') }}">Vote now </a>
  {{-- @dd(Auth::user()) --}}
  @if(Auth::user())
    <p class="buttonlog">{{ Auth::user()->name }}</p>
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-dropdown-link :href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();" class="buttonsign">
            {{ __('Log Out') }}
        </x-dropdown-link>
    </form>
  @else
    <button class="buttonlog"><a href="{{ route('login') }}">login </a></button>
    <button class="buttonsign"><a href="{{ route('register') }}"> Signup</a></button>
  @endif
  <p class="one">Today, there is a viable solution to overcome
    the risks and electronic voting, which is block
    chain technology. In traditional voting systems, <br>
    we have a central authority to cast a vote, If so
    meone wants to modify or change the record, they
    can do it quickly, no one knows how to verify that<br>
    record, One does not have the central authority,
    the data are stored in multiple nodes, It is not <br>
    possible to hack all nodes and change the data, T
    hus, in this way one cannot destroy the votes and efficiently verify the votes by
    tally with other nodes.</p>


  <img src="{{ asset('assets/images/vot.jpg') }}" width="700" height="400">

  <h1>About <span style="color: blue;"> us </span></h1>
  <p class="two">
    If so meone wants to modify or change the record, they can do it quickly,
    no one knows how to verify that<br>
    record, One does not have the central authority,
    the data are stored in multiple nodes, It is not<Br>
    possible to hack all nodes and change the data, T hus, in this way one cannot destroy
    the votes and efficiently verify the votes by tally with other nodes
  </p>
  <h2>About the candidates</h2>


  <img class="img1" src="{{ asset('assets/images/john.jpg') }}">
  <img class="img2" src="{{ asset('assets/images/OPAMA.jpg') }}">
  <img class="img3" src="{{ asset('assets/images/pp.jpg') }}">
  <p class="candidat1">Name : john <br>One does not have the central authority,
    the data are stored in multiple nodes, </p>
  <p class="candidat2"> Name : Karem <br>One does not have the central authority,
    the data are stored in multiple nodes, </p>
  <p class="candidat3"> Name : Medo <br>One does not have the central authority,
    the data are stored in multiple nodes, </p>



  <div class="footer">

    <div class="col-6 col-md-3">

      <ul class="footer-links">
        <li><a href="#">Website Design</a></li>
        <li><a href="#">UI Design</a></li>
        <li><a href="#">Web Development</a></li>
        <li><a href="#">Video Editor</a></li>
        <li><a href="#">Theme Creator</a></li>
        <li><a href="#">Templates</a></li>
      </ul>
    </div>

    <div class="text">

      <ul class="footer-links">
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Contribute</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Sitemap</a></li>
      </ul>
    </div>

    <div class="textt">

      <ul class="footer-links">
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Contribute</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Sitemap</a></li>
      </ul>
    </div>

    <div class="col">

      <ul class="footer-links">
        <li><a href="#">Website Design</a></li>
        <li><a href="#">UI Design</a></li>
        <li><a href="#">Web Development</a></li>
        <li><a href="#">Video Editor</a></li>
        <li><a href="#">Theme Creator</a></li>
        <li><a href="#">Templates</a></li>
      </ul>
    </div>

    <hr>
    <p class="copyright-text">Copyright © 2020 All Rights Reserved by
      <a href="#">WBIFY</a>.
    </p>




  </div>



 <!-- Load font awesome icons -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <!-- The social media icon bar -->
 <div class="icon-bar">
   <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
   <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
   <a href="#" class="google"><i class="fa fa-google"></i></a>
   <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
 </div>







</body>
  </html>
