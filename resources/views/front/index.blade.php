@extends('front.layout.layout')
@section('content')
<section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
       <div class="carousel-inner" role="listbox">
          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(front/assets/images/bg1.jpeg);">
             <div class="carousel-container">
                <div class="carousel-content animate__animated animate__fadeInUp text-center">
                   <h1>SPREAD THE WORD, EARN 1% DAILY AS REFERRAL BONUS</h1>
                   <div class="text-center"><a href="{{ url('about_us')}}" class="btn-get-started">Read More</a></div>
                </div>
             </div>
          </div>
          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(front/assets/images/bg3.jpeg);">
             <div class="carousel-container">
                <div class="carousel-content animate__animated animate__fadeInUp text-center">
                   <h1>GROW YOUR CRYPTOS BY CHOOSING ANY OF THE PLANS BELOW</h1>
                   <div class="text-center"><a href="{{ url('about_us')}}" class="btn-get-started">Read More</a></div>
                </div>
             </div>
          </div>
          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(front/assets/images/bg2.jpeg);">
             <div class="carousel-container">
                <div class="carousel-content animate__animated animate__fadeInUp text-center">
                   <h1>WITHDRAW ANY AMOUNT, ANYTIME INSTANTLY</h1>
                   <div class="text-center"><a href="{{ url('about_us')}}" class="btn-get-started">Read More</a></div>
                </div>
             </div>
          </div>
       </div>
       <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
       <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
       <span class="sr-only">Previous</span>
       </a>
       <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
       <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
       <span class="sr-only">Next</span>
       </a>
       <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
    </div>
 </section>
 <!-- ***** Main Banner Area End ***** -->
 <!-- ======= Pricing Section ======= -->
 <section id="pricing" class="pricing section-bg">
    <div class="container">
       <div class="section-title" data-aos="fade-up">
          <h2>INVESTMENT OPTIONS</h2>
       </div>
       <div class="row">
          <div class="col-lg-3 col-md-6">
             <div class="box" data-aos="zoom-in">
                <img src="front/sliver.png" alt="sliver" width="42" height="42" style="vertical-align:bottom">
                <h4><span style="font-size:bold; font-weight:bold;">SLIVER</span></h4>
                <ul>
                   <li>FOR</li>
                   <li>$ 0 - 100</li>
                   <li>Earn Daily: 3%</li>
                </ul>
                <div class="btn-wrap">
                   <a href="{{ url('register')}}" class="btn-buy">BEGIN NOW</a>
                </div>
             </div>
          </div>
          <div class="col-lg-2 col-md-6 mt-0 mt-md-0">
             <div class="box" data-aos="zoom-in" data-aos-delay="100">
                <img src="front/gold.png" alt="sliver" width="42" height="42" style="vertical-align:bottom">
                <h4><span style="font-size:bold; font-weight:bold;">GOLD</span></h4>
                <ul>
                   <li>FOR</li>
                   <li>$ 1000 - 4000</li>
                   <li>Earn Daily: 9%</li>
                </ul>
                <div class="btn-wrap">
                   <a href="{{ url('register')}}" class="btn-buy">BEGIN NOW</a>
                </div>
             </div>
          </div>
          <div class="col-lg-2 col-md-6 mt-0 mt-lg-0">
             <div class="box" data-aos="zoom-in" data-aos-delay="200">
                <img src="front/platinum.png" alt="sliver" width="42" height="42" style="vertical-align:bottom">
                <h4><span style="font-size:bold; font-weight:bold;">PLATINUM</span></h4>
                <ul>
                   <li>FOR</li>
                   <li>$ 5000 - 10000</li>
                   <li>Earn Daily: 14%</li>
                </ul>
                <div class="btn-wrap">
                   <a href="{{ url('register')}}" class="btn-buy">BEGIN NOW</a>
                </div>
             </div>
          </div>
          <div class="col-lg-2 col-md-6 mt-0 mt-lg-0">
             <div class="box" data-aos="zoom-in" data-aos-delay="200">
                <img src="front/diamond.png" alt="sliver" width="42" height="42" style="vertical-align:bottom">
                <h4><span style="font-size:bold; font-weight:bold;">DIAMOND</span></h4>
                <ul>
                   <li>FOR</li>
                   <li>$ 12000 - 15000</li>
                   <li>Earn Daily: 21%</li>
                </ul>
                <div class="btn-wrap">
                   <a href="{{ url('register')}}" class="btn-buy">BEGIN NOW</a>
                </div>
             </div>
          </div>
          <div class="col-lg-3 col-md-6">
             <div class="box" data-aos="zoom-in" data-aos-delay="300">
                <img src="front/ruby.png" alt="sliver" width="42" height="42" style="vertical-align:bottom">
                <h4><span style="font-size:bold; font-weight:bold;">RUBY</span></h4>
                <ul>
                   <li>FOR</li>
                   <li>Above - $ 50000</li>
                   <li>Earn Daily: 41%</li>
                </ul>
                <div class="btn-wrap">
                   <a href="{{ url('register')}}" class="btn-buy">BECOME ONE OF US</a>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- End Pricing Section -->
 <section id="pricing" class="pricing section-bg">
    <div class="container">
       <div class="section-title" data-aos="fade-up">
          <h2>INVESTMENT CALCULATOR</h2>
          <span style="color:#cb9028">Want to know how much you will earn? - Check below</span>
       </div>
       <div class="row">
          <div class="wrapper wrapper--w1226">
             <form method="POST" action="#">
                <div class="row row-space">
                   <div class="col-6">
                      <div class="input-group">
                         <select class="input--style-1" style="background-color: #212121;" name="from" style="width:100%">
                            <option selected>Select Your Plan</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                         </select>
                      </div>
                   </div>
                   <div class="col-6">
                      <div class="input-group">
                         <input class="input--style-1" style="background-color: #212121;" type="text" name="to" placeholder="Enter Dollar Amount" required="required">
                      </div>
                   </div>
                </div>
                <div class="row row-space">
                   <div class="col-2">
                      <div class="col-2">
                         <button class="btn-submit" type="submit">CALCULATE</button>
                      </div>
                   </div>
                </div>
             </form>
          </div>
       </div>
    </div>
    </div>
 </section>
 <section id="pricing" class="pricing section-bg">
    <div class="container">
       <div class="section-title" data-aos="fade-up">
          <h2>REGISTER NOW</h2>
          <span style="color:#cb9028">Sign up for a user account to start earning profits daily from today
          </span>
       </div>
       <div class="row">
          <div class="wrapper wrapper--w1226">
             <form method="POST" action="#">
                <div class="row row-space">
                   <div class="col-6">
                      <div class="input-group">
                         <select class="input--style-1" style="background-color: #212121;" name="from" style="width:100%">
                            <option selected>Select Your Plan</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                         </select>
                      </div>
                   </div>
                   <div class="col-6">
                      <div class="input-group">
                         <input class="input--style-1" style="background-color: #212121;" type="text" name="to" placeholder="Enter Dollar Amount" required="required">
                      </div>
                   </div>
                   <div class="col-6">
                      <div class="input-group">
                         <input class="input--style-1" style="background-color: #212121;" type="text" name="to" placeholder="Enter Username To Register" required="required">
                      </div>
                   </div>
                   <div class="col-6">
                      <div class="input-group">
                         <input class="input--style-1" style="background-color: #212121;" type="text" name="to" placeholder="Enter Your Password" required="required">
                      </div>
                   </div>
                   <div class="col-6">
                      <div class="input-group">
             <form>
             <input class="input--style-1" style="background-color: #212121;" type="text" name="to" placeholder="Voucher code (If Any)" required="required">
             <button type="submit" style="background-color: #dd882c">APPLY</button>
             </form> 
             </div>
             </div>
             <div class="col-6">
             <div class="input-group">
             <span style="color: #fff">* Dont forget to Click on Apply after entering Voucher Code</span>
             </div>
             </div>
             </div>
             <div class="section-title" data-aos="fade-up">
                <h6 style="color:#fff">Deposit Crypto Address:</h6>
                <label class="radio-inline col-2" style="color:#fff;">
                <input type="radio" name="optradio" checked>Bitcoin
                </label>
                <label class="radio-inline col-2" style="color:#fff;">
                <input type="radio" name="optradio">Monero
                </label>
                <label class="radio-inline col-2" style="color:#fff;">
                <input type="radio" name="optradio">Ethereum
                </label>
             </div>
             <div class="row row-space">
                <div class="col-6">
                   <div class="col-6">
                      <button class="btn-submit" type="submit">JOIN TEAM NOW</button>
                   </div>
                </div>
             </div>
             </form>
          </div>
       </div>
    </div>
    </div>
 </section>
 <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">
       <div class="section-title" data-aos="fade-up">
          <h2>SUCCESS STORIES</h2>
       </div>
       <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
             <div class="icon-box iconbox-blue">
                <iframe src="https://www.youtube.com/embed/0jg26H5xudY?si=t2ll0gEuPFYmmkme" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>           
             </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
             <div class="icon-box iconbox-orange ">
                <iframe src="https://www.youtube.com/embed/0jg26H5xudY?si=t2ll0gEuPFYmmkme" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>           
             </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
             <div class="icon-box iconbox-pink">
                <iframe src="https://www.youtube.com/embed/0jg26H5xudY?si=t2ll0gEuPFYmmkme" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>           
             </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
             <div class="icon-box iconbox-yellow">
                <iframe src="https://www.youtube.com/embed/0jg26H5xudY?si=t2ll0gEuPFYmmkme" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>           
             </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
             <div class="icon-box iconbox-red">
                <iframe src="https://www.youtube.com/embed/0jg26H5xudY?si=t2ll0gEuPFYmmkme" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>           
             </div>
          </div>
          <div class="col-lg-4 col-md-8 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
             <div class="icon-box iconbox-red">
                <div class="icon">
                   <button type="button" class="btn btn-warning">VIEW MORE...</button>
                </div>
                <span style="color: #dd882c;">Send Us Your Success Stories In Video Formate</span>
             </div>
          </div>
       </div>
    </div>
 </section>
 <section id="pricing" class="pricing section-bg">
 <div class="container">
 <div class="section-title" data-aos="fade-up">
    <h2>LIVE LAST 10 WITHDRAWALS</h2>
 </div>
 <div class="container mt-3">
    <div class="table-responsive">
       <table class="table table-bordered">
          <thead>
             <tr style="color: #fff;">
                <th>Sr No</th>
                <th>Username</th>
                <th>Withdrawal Amount</th>
                <th>Withdrawal BTC/ETH/XMR Address <br/><span style="color:#c63926;">Click on BTC/ETH address to check</span></th>
                <th>Timestamp</th>
             </tr>
          </thead>
          <tbody>
             <tr style="color: #fff;">
                <td>1</td>
                <td>Cheryla.davies</td>
                <td>0.600000 ETH</td>
                <td style="color: #dd882c;">0x7a250d5630b4cf539739df2c5dacb4c659f2488d</td>
                <td>2023-09-12 10:17</td>
             </tr>
             <tr style="color: #fff;">
                <td>1</td>
                <td>Cheryla.davies</td>
                <td>0.600000 ETH</td>
                <td style="color: #dd882c;">0x7a250d5630b4cf539739df2c5dacb4c659f2488d</td>
                <td>2023-09-12 10:17</td>
             </tr>
             <tr style="color: #fff;">
                <td>1</td>
                <td>Cheryla.davies</td>
                <td>0.600000 ETH</td>
                <td style="color: #dd882c;">0x7a250d5630b4cf539739df2c5dacb4c659f2488d</td>
                <td>2023-09-12 10:17</td>
             </tr>
             <tr style="color: #fff;">
                <td>1</td>
                <td>Cheryla.davies</td>
                <td>0.600000 ETH</td>
                <td style="color: #dd882c;">0x7a250d5630b4cf539739df2c5dacb4c659f2488d</td>
                <td>2023-09-12 10:17</td>
             </tr>
             <tr style="color: #fff;">
                <td>1</td>
                <td>Cheryla.davies</td>
                <td>0.600000 ETH</td>
                <td style="color: #dd882c;">0x7a250d5630b4cf539739df2c5dacb4c659f2488d</td>
                <td>2023-09-12 10:17</td>
             </tr>
             <tr style="color: #fff;">
                <td>1</td>
                <td>Cheryla.davies</td>
                <td>0.600000 ETH</td>
                <td style="color: #dd882c;">0x7a250d5630b4cf539739df2c5dacb4c659f2488d</td>
                <td>2023-09-12 10:17</td>
             </tr>
             <tr style="color: #fff;">
                <td>1</td>
                <td>Cheryla.davies</td>
                <td>0.600000 ETH</td>
                <td style="color: #dd882c;">0x7a250d5630b4cf539739df2c5dacb4c659f2488d</td>
                <td>2023-09-12 10:17</td>
             </tr>
          </tbody>
       </table>
    </div>
 </div>
@endsection