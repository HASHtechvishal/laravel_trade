@extends('front.layout.layout')
@section('content')
<section id="pricing" class="pricing section-bg">
    <div class="container">
       <div class="section-title" data-aos="fade-up">
          <h2>admin <span style="color:#dd882c;">REGISTER</span></h2>
       </div>
       <div class="login-page">
          <div class="form">
             <form class="login-form" method="post" action="{{ url('/admin_register')}}">@csrf
                <input type="text" name="name" id="name" placeholder="Enter Name" required/><br><br>
                <input type="text" name="mobile" id="mobile" placeholder="Enter Mobile Number" required/><br><br>
                <input type="file" id="img" name="img" accept="image/*"><br>
                <input type="text" name="email" id="email" placeholder="Enter Email" required/><br><br>
                <input type="password" name="password" id="password" placeholder="Enter Password" required/><br><br>
                <button>login</button>
                <p class="message">Allready Admin - <a href="{{ url('login')}}"> LOGIN</a></p>
             </form>
          </div>
       </div>
       <br><br><br>
       <div id='tabs'>
          <ul style="color:#dd882c; font-size: 17px;">
             <li>HELP & SUPPORT</li>
             <li>CONTACT US</li>
             <li>SUPPORTED PAYMENT METHODS</li>
          </ul>
          <ul style="color:#fff;">
             <li>REFERRAL LINK</li>
             <li>CONTACT@INSIDERMATRIX.COM</li>
             <li style="color: #dd882c;"><img src="download.png" alt="sliver" width="42" height="42" style="vertical-align:bottom">&nbsp;&nbsp;Buy Cryptos from here</li>
          </ul>
          <ul style="color:#fff;">
             <li>FREQUENTLY ASKED QUESTIONS</li>
             <li>TELEGRAM: INSIDERACCOUNT</li>
          </ul>
       </div>
    </div>
    </div>
 </section>
 @endsection