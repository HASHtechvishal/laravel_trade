@extends('front.layout.layout')
@section('content')
<section id="pricing" class="pricing section-bg">
    <div class="container">
       <div class="section-title" data-aos="fade-up">
          <h2>admin <span style="color:#dd882c;">LOGIN</span></h2>
       </div>
       <div class="login-page">
          <div class="form">
             <form class="login-form" method="post" action="{{ url('/')}}">@csrf
                <input type="text" name="username" id="username" placeholder="username"/><br><br>
                <input type="password" name="password" id="password" placeholder="password"/><br><br>
                <button>login</button>
                <p class="message">IF YOU DON'T HAVE PASSWORD ? <a href="#"> FORGOT PASSWORD</a></p>
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