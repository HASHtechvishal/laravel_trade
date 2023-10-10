@extends('front.layout.layout')
@section('content')
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
@endsection