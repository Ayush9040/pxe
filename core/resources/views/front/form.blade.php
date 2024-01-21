@extends('master.front')
@section('meta')
<meta name="keywords" content="{{$setting->meta_keywords}}">
<meta name="description" content="{{$setting->meta_description}}">
@endsection
@section('title')
    {{__('Franchise Form')}}
@endsection
@section('content')
    <!-- Page Title-->
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumbs">
                    <li><a href="{{(route('front.index'))}}">{{__('Home')}}</a> </li>
                    <li class="separator">&nbsp;</li>
                    <li>{{__('Franchise Form')}}</li>
                  </ul>
            </div>
        </div>
    </div>
  </div>
  <!-- Page Content-->



<section class="form-section">

    <div class="container">
      <div class="main-content">
        <div class="form-para para pb-3 ">Are you ready to join the ranks of successful entrepreneurs and embark on a journey with a globally renowned brand? Look no further than xxx. Our franchise opportunities are your gateway to becoming a part of the xxx legacy.</div>
      </div>
    </div>
</section>
   
<section class="form-input pb-5">
<div class="container">
    <form method="post" action="{{url('/')}}/front/form" enctype="multipart/form-data" id="myForm">
      @csrf
      <!-- Personal Information -->
      <div class="person-info">
        <div class="row pt-2 pb-5">
          <div class="form-input-title"><b>PERSONAL INFORMATION</b></div>
            <div class="col-md-6 col-sm-6 col-lg-12">
              <!-- <div class="form-outline">
                <div style="display: flex; align-items: center; margin-bottom: 6px;">
                    <input type="radio" id="mr" name="title" value="Mr." style="margin-right: 10px;">
                    <label for="mr"><b>Mr</b><span class="form-required">*</span></label>
                    <input type="radio" id="miss" name="title" value="Miss" style="margin-left: 20px; margin-right: 10px;">
                    <label for="miss"><b>Mrs</b><span class="form-required">*</span></label>
                    <input type="radio" id="miss" name="title" value="Miss" style="margin-left: 20px; margin-right: 10px;">
                    <label for="miss"><b>Miss</b><span class="form-required">*</span></label>
                </div>
                <input type="text" id="form8Example3" class="form-control" placeholder="First Name" style=" height: 45px; border: solid lightgray 1px;"/>
            </div> -->

            <div class="form-outline">
                <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Name</b><span class="form-required">*</span></label>
                <input type="text" name="pr_info_name" placeholder="Name" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;" required />
              </div>

              <div class="form-outline">
                <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Contact Number</b><span class="form-required">*</span></label>
                <input type="tel" name="mobile_telephone" placeholder="Mobile Telephone" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;"required/>
              </div>

              <div class="form-outline">
                <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Mail Id</b><span class="form-required">*</span></label>
                <input type="email" name="email" placeholder="Email" id="form8Example4" class="form-control" style="height: 50px;border: solid lightgray 1px;"required/>
              </div>


              <!-- <div class="form-outline">
                <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Pin Code</b><span class="form-required">*</span></label>
                <input type="text" name="pincode" placeholder="Pin Code" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;"required/>
              </div> -->

              <!-- <div class="form-outline">
                <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Home Telephone</b><span class="form-required">*</span></label>
                <input type="text" placeholder="Home Telephone" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
                "/>
              </div> -->
            
            </div>
            <div class="-md-6 col-sm-6 col-lg-12">

              <!-- <div class="form-outline" style="padding-top: 20px;">
                <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Date of Birth </b><span class="form-required">*</span></label>
                <input type="date" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
                "/>
              </div> -->

              <div class="form-outline" style="padding-bottom: 7px;">
                <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>City</b><span class="form-required">*</span></label>
                <input type="text" name="city" placeholder="City" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;"required/>
              </div>

              <div class="form-outline">
              <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Business/Work</b><span class="form-required">*</span></label>
              <input name="business_describe" type="text" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;"required/>
            </div>

            <div class="form-outline">
              <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Investment</b><span class="form-required">*</span></label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="investment" id="exampleRadios1" value="40-50 lac" checked>
                <label class="form-check-label text-white" for="investment">
                  40-50 lac
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="investment" id="exampleRadios2" value="50-60 lac">
                <label class="form-check-label text-white" for="investment">
                50-60 lac
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="investment" id="exampleRadios3" value="60-70 lac">
                <label class="form-check-label text-white" for="investment">
                60-70 lac
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="investment" id="exampleRadios2" value="70-80 lac">
                <label class="form-check-label text-white" for="investment">
                70-80 lac
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="investment" id="exampleRadios2" value="80-90 lac">
                <label class="form-check-label text-white" for="investment">
                80-90 lac
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="investment" id="exampleRadios2" value="1 cr above">
                <label class="form-check-label text-white" for="investment">
                1 cr above
                </label>
              </div>
            </div>
        
              <!-- <div class="form-outline">
                <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Street</b></label>
                <input type="text" name="street" placeholder="Street" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;"/>
              </div> -->

              <!-- <div class="form-outline">
                <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>State</b><span class="form-required">*</span></label>
                <input type="text" name="state" placeholder="State" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;"required/>
              </div> -->
              </div>
            </div>
          </div>
      <!-- Personal Information -->
       
      <!-- Education -->
      <!-- <div class="row pt-2 pb-5">
        <div class="form-input-title"><b>Education</b></div>
          <div class="col-md-6 col-sm-6 col-lg-6">

          <div class="form-outline">
              <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>School</b><span class="form-required">*</span></label>
              <input type="text" placeholder="School" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
              "/>
            </div>

            <div class="form-outline">
              <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Year of Passing</b><span class="form-required">*</span></label>
              <input type="date"  id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
              "/>
            </div>

            <div class="form-outline">
              <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>City / State</b><span class="form-required">*</span></label>
              <input type="text" id="form8Example4" placeholder="City / State" class="form-control" style="height: 45px;border: solid lightgray 1px;
              "/>
            </div>

          </div>
          <div class="-md-6 col-sm-6 col-lg-6">

            <div class="form-outline" style="padding-top: 20px;">
              <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>College / University / Other</b><span class="form-required">*</span></label>
              <input type="text" placeholder="College / University / Other" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
              "/>
            </div>

            <div class="form-outline">
              <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Year of Passing</b><span class="form-required">*</span></label>
              <input type="date" placeholder="Year of Passing" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
              "/>
            </div>

            <div class="form-outline">
              <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>City / State</b><span class="form-required">*</span></label>
              <input type="text" placeholder="City / State" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
              "/>
            </div>

            </div>
          </div> -->
        
      <!-- Education -->

      <!-- Employment / Bussiness -->
      <!-- <div class="row">

      <div class="row pt-2 pb-5">
        
        <div class="form-input-title pb-4"><b>BUSINESS/ WORK EXPERIENCE</b></div> -->

        <!-- <div class="form-para para pb-2">Please briefly list career experiences for you and any active business partners below. Continue on a separate sheet if necessary or attach a CV</div> -->
        <!-- <div class="form-input-title pb-3" style="padding-top: 10px;"><b>Present Employer</b></div>    -->

          <!-- <div class="col-md-6 col-sm-6 col-lg-6">
          <div class="form-outline">
              <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Current business</b><span class="form-required">*</span></label>
              <input name="current_bussiness" type="text" placeholder="Present Employer" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;"required/>
            </div>

            <div class="form-outline">
              <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>If yes then what type?</b><span class="form-required">*</span></label>
              <input name="what_type" type="text" placeholder="Type of Business" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;"required/>
            </div>

            <div class="form-outline" style="padding-bottom: 7px;">
              <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>If "yes" please describe, i.e. "Electronic Franchise".</b><span class="form-required">*</span></label>
              <input name="business_describe" type="text" placeholder="If yes please describe" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;"required/>
            </div> -->
            <!-- <div class="form-outline">
              <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>State</b><span class="form-required">*</span></label>
              <input type="text" placeholder="State" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
              "/>
            </div> -->
          <!-- </div> -->
          <!-- <div class="-md-6 col-sm-6 col-lg-6">

            <div class="form-outline">
              <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Have you ever owned a business?</b><span class="form-required">*</span></label>
              <input name="owned_bussiness" type="text" placeholder="Have you ever owned a business" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;"required/>
            </div>
        
            <div class="form-outline">
              <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Have you ever been a franchise of another concept?</b><span class="form-required">*</span></label>
              <input name="been_franchies" type="text" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;"required/>
            </div> -->
        
            <!-- <div class="form-outline">
              <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Duration</b><span class="form-required">*</span></label>
              <input type="text" placeholder="Duration" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
              "/>
            </div> -->
        
            <!-- <div class="form-outline">
              <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;margin-top: 9px;"><b>No. of people you manage</b><span class="form-required">*</span></label>
              <input type="text" placeholder="No. of people you manage" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
              "/>
            </div> -->


            <!-- </div>
          </div> -->

          <!-- <div class="row pt-2 pb-5">   
            <div class="form-input-title pb-3"><b>Previous Employer</b></div>    
              <div class="col-md-6 col-sm-6 col-lg-6">
                <div class="form-outline" style="padding-top: 20px;">
                  <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Previous Employer</b><span class="form-required">*</span></label>
                  <input type="text" placeholder="Previous Employer" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
                  "/>
                </div>
            
                <div class="form-outline">
                  <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Type of Business</b><span class="form-required">*</span></label>
                  <input type="text" placeholder="Type of Business" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
                  "/>
                </div>
            
                <div class="form-outline" style="padding-bottom: 7px;">
                  <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>City</b><span class="form-required">*</span></label>
                  <input type="text" placeholder="City" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
                  "/>
                </div>
                <div class="form-outline">
                  <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>State</b><span class="form-required">*</span></label>
                  <input type="text" placeholder="State" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
                  "/>
                </div>

              </div>
              <div class="-md-6 col-sm-6 col-lg-6">
    
                <div class="form-outline">
                  <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Pin Code</b><span class="form-required">*</span></label>
                  <input type="text" placeholder="Pin Code" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
                  "/>
                </div>
            
                <div class="form-outline">
                  <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Position</b><span class="form-required">*</span></label>
                  <input type="text" placeholder="Position" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
                  "/>
                </div>
            
                <div class="form-outline">
                  <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Duration</b><span class="form-required">*</span></label>
                  <input type="text" placeholder="Duration" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
                  "/>
                </div>
            
                <div class="form-outline">
                  <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;margin-top: 9px;"><b>No. of people you manage</b><span class="form-required">*</span></label>
                  <input type="text" placeholder="No. of people you manage" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
                  "/>
                </div>
                </div>
              </div> -->
            <!-- </div> -->
      <!-- Employment / Bussiness End -->


       
      
      <!-- PERSONAL FINANCIAL STATEMENT -->

      <!-- <div class="row">         -->
      <!-- <div class="row pt-2 pb-5">
        
        <div class="form-input-title pb-4"><b>Personal Financial Statement</b></div>
        <div class="form-input-title pb-3"><b>Your Assets</b></div>   
          <div class="col-md-6 col-sm-6 col-lg-6">
          <div class="form-outline">
              <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Cash in bank </b><span class="form-required">*</span></label>
              <input type="text" placeholder="Cash in bank" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
              "/>
            </div>

            <div class="form-outline">
              <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Value of home if owned</b><span class="form-required">*</span></label>
              <input type="text" placeholder="Value of home if owned" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
              "/>
            </div>

            <div class="form-outline" style="padding-bottom: 7px;">
              <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Value of other properties</b><span class="form-required">*</span></label>
              <input type="text" placeholder="Value of other properties" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
              "/>
            </div>
            <div class="form-outline">
              <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Savings</b><span class="form-required">*</span></label>
              <input type="text" placeholder="Savings" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
              "/>
            </div>

            <div class="form-outline">
              <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Shares & Bonds</b><span class="form-required">*</span></label>
              <input type="text" placeholder="YES / NO" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
              "/>
            </div>

            <div class="form-outline" >
              <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Vehicles</b><span class="form-required">*</span></label>
              <input type="text" placeholder="Pin Code" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
              "/>
            </div>
          </div>

          <div class="-md-6 col-sm-6 col-lg-6">
            <div class="form-outline">
              <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Existing business (sale value)</b><span class="form-required">*</span></label>
              <input type="text" placeholder="Existing business (sale value) " id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
              "/>
            </div>
        
            <div class="form-outline">
              <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Money due to you</b><span class="form-required">*</span></label>
              <input type="text" placeholder="Money due to you" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
              "/>
            </div>
        
            <div class="form-outline">
              <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Other assets</b><span class="form-required">*</span></label>
              <input type="text" placeholder="Other assets" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
              "/>
            </div>

            <div class="form-outline">
              <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Total Assets</b><span class="form-required">*</span></label>
              <input type="text" placeholder="Total Assets" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
              "/>
            </div>


            <div class="form-outline">
              <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;margin-top: 7px"><b>Net Worth (Total Assets less Total Liabilities) </b><span class="form-required">*</span></label>
              <input type="text" placeholder="Net Worth (Total Assets less Total Liabilities)" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
              "/>
            </div>
            </div>

            <div class="personal-fin">
              <div class="form-para para pb-1.5 pt-3">How do you plan to finance this bussiness?</div>
              <div class="text-box">
              <textarea name="textarea" id="inputtextarea" class="form-control" style="height: 130px;" rows="3" required="required" placeholder="How do you plan to finance this bussiness?"></textarea>
            </div>
            </div>

          </div> -->

          <!-- <div class="row pt-2 pb-5">    

            <div class="form-input-title pb-3"><b>Your Liabilities</b></div>   
              <div class="col-md-6 col-sm-6 col-lg-6">
                <div class="form-outline">
                  <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Bills payable</b><span class="form-required">*</span></label>
                  <input type="text" placeholder="Bills payable" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
                  "/>
                </div>

                <div class="form-outline">
                  <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Home Mortgage</b><span class="form-required">*</span></label>
                  <input type="text" placeholder="Home Mortgage" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
                  "/>
                </div>

              </div>
              <div class="-md-6 col-sm-6 col-lg-6">
                <div class="form-outline">
                  <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Other Mortgage</b><span class="form-required">*</span></label>
                  <input type="text" placeholder="Other Mortgage" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
                  "/>
                </div>

                <div class="form-outline">
                  <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Total Liabilities</b><span class="form-required">*</span></label>
                  <input type="text" placeholder="Total Liabilities" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
                  "/>
                </div>
                </div>

                <div class="personal-fin">
                  <div class="form-para para pb-1.5 pt-3">Have you ever been declared bankrupt?</div>
                  <div class="text-box">
                  <textarea name="textarea" id="inputtextarea" class="form-control" style="height: 130px"; rows="3" required="required" placeholder="Have you ever been declared bankrupt?"></textarea>
                </div>
                </div>

                <div class="personal-fin">
                  <div class="form-para para pb-1.5 pt-3">If so, please give details</div>
                  <div class="text-box">
                  <textarea name="textarea" id="inputtextarea" class="form-control" style="height: 130px"; rows="3" required="required" placeholder="If so, please give details"></textarea>
                </div>
                </div>

                <div class="personal-fin">
                  <div class="form-para para pb-1.5 pt-3">Please give details of any County Court Judgements</div>
                  <div class="text-box">
                  <textarea name="textarea" id="inputtextarea" class="form-control" style="height: 130px"; rows="3" required="required" placeholder="Please give details of any County Court Judgements"></textarea>
                </div>
                </div>
              </div> -->
              
              <!-- <div class="row pt-2 pb-5"> -->
        
                <!-- <div class="form-input-title pb-4"><b>Personal Financial Statement</b></div> -->
                <!-- <div class="form-input-title pb-3"><b>LOCATION INFORMATION</b></div>   
                  <div class="col-md-6 col-sm-6 col-lg-6">
                  <div class="form-outline">
                      <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>City</b><span class="form-required">*</span></label>
                      <input type="text" name="location_info_city" placeholder="City" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;" required/>
                    </div>
        
                    <div class="form-outline">
                      <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Do you own an existing commercial space?<span class="form-required">*</span></b></label>
                      <div class="form-label-cust" style="padding-top: 25px;">
                      <input type="text" name="existing_commercial" placeholder="Do you own an existing commercial space?" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;"required/>
                    </div>
                    </div>
        
                    <div class="form-outline" style="padding-bottom: 7px;">
                      <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Retail space area (sq.ft).</b><span class="form-required">*</span></label>
                      <input type="number" name="retail_spacearea" placeholder="Retail space are (sq.ft)." id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;"required/>
                    </div>
                    <div class="form-outline">
                      <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Demographics of the location</b><span class="form-required">*</span></label>
                      <input type="text" name="demographics_location" placeholder="Demographics of the location" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;"required/>
                    </div>
         -->
                    <!-- <div class="form-outline">
                      <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Shares & Bonds</b><span class="form-required">*</span></label>
                      <input type="text" placeholder="YES / NO" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
                      "/>
                    </div> -->
        
                    <!-- <div class="form-outline" >
                      <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Vehicles</b><span class="form-required">*</span></label>
                      <input type="text" placeholder="Pin Code" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
                      "/>
                    </div> -->
                  <!-- </div> -->
        
                  <!-- <div class="-md-6 col-sm-6 col-lg-6"> -->
                    <!-- <div class="form-outline">
                      <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Location preference</b><span class="form-required">*</span></label>
                      <input type="text" name="location_preference" placeholder="Location preference" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;"required/>
                    </div>
                
                    <div class="form-outline">
                      <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>If "yes" describe the shop location (Whether corner shop or facing main road).</b><span class="form-required">*</span></label>
                      <input type="text" name="desc_shop_location" placeholder="If yes describe the shop location" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;"required/>
                    </div>
                
                    <div class="form-outline">
                      <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Frontage of the retail space</b><span class="form-required">*</span></label>
                      <input type="number" name="frontage_retail_space" placeholder="Frontage of the retail space" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;"required/>
                    </div> -->
        
                    <!-- <div class="form-outline">
                      <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Total Assets</b><span class="form-required">*</span></label>
                      <input type="text" placeholder="Total Assets" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
                      "/>
                    </div> -->
        
        
                    <!-- <div class="form-outline">
                      <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;margin-top: 7px"><b>Net Worth (Total Assets less Total Liabilities) </b><span class="form-required">*</span></label>
                      <input type="text" placeholder="Net Worth (Total Assets less Total Liabilities)" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
                      "/>
                    </div> -->
                    <!-- </div> -->
        
                    <!-- <div class="row personal-fin">
                      <div class="form-para para pb-1.5 pt-3">
                        <input type="checkbox" name="checkbox" id="checkbox" class="col-md-0">
                        <div class="radio-box" style="margin-top: -27px;padding-left: 20px;">
                        <label class="col-md-12">By Submiting this form I certify that the information furnished in this iMOBILES franchise Request for consideration is true and correct</label>
                      </div>
                      </div> -->
                      <!-- <div class="text-box">
                      <textarea name="textarea" id="inputtextarea" class="form-control" style="height: 130px;" rows="3" required="required" placeholder="How do you plan to finance this bussiness?"></textarea>
                    </div> -->
                    <!-- </div>
        
                  </div>
            </div> -->

      <!-- PERSONAL FINANCIAL STATEMENT END-->

      <!-- Referance -->
              <!-- credit Referance -->
      <div class="row">
      <!-- <div class="row pt-2 pb-5">
        
        <div class="form-input-title pb-4"><b>Referance</b></div>

        <div class="form-para para pb-2">References are required before your application will be processed. Please give full names and addresses</div>
        <div class="form-input-title pb-4"><b>Credit References</b></div>   
        <div class="form-input-title pb-3" style="font-weight: lighter;"><b>Bank Details</b></div> 
          <div class="col-md-6 col-sm-6 col-lg-6"> 

            <div class="form-outline" style="padding-top: 5px;">
              <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Bank Name</b><span class="form-required">*</span></label>
              <input type="text" placeholder="Bank Name" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
              "/>
            </div>

            <div class="form-outline" style="padding-bottom: 7px;">
              <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Account Number</b><span class="form-required">*</span></label>
              <input type="text" placeholder="Account Number" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
              "/>
            </div>
            <div class="form-outline">
              <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Routing Number</b><span class="form-required">*</span></label>
              <input type="text" placeholder="Routing Number" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
              "/>
            </div>

            <div class="form-outline">
              <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Telephone Number</b><span class="form-required">*</span></label>
              <input type="text" placeholder="Telephone Number" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
              "/>
            </div>
          </div>

          <div class="-md-6 col-sm-6 col-lg-6">
            <div class="form-outline" style="padding: 0px;">
              <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>City</b><span class="form-required">*</span></label>
              <input type="text" placeholder="City" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
              "/>
            </div>
        
            <div class="form-outline">
              <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>State</b><span class="form-required">*</span></label>
              <input type="text" placeholder="State" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
              "/>
            </div>
        
            <div class="form-outline">
              <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;padding-top: 5px;"><b>Pin Code</b><span class="form-required">*</span></label>
              <input type="text" placeholder="Pin Code" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
              "/>
            </div>
            
            </div>
            
            <div class="personal-fin">
              <div class="form-para para pb-1.5 pt-3"></div>
              <textarea name="textarea" id="inputtextarea" class="form-control" style="height: 130px"; rows="3" required="required" placeholder="Credit References (e.g. Bank, Suppliers, Accountant)"></textarea>
            </div>  

          </div> -->
            <!-- credit referance end -->

            <!-- Personal Referance -->

            <div class="row">
            
                <!-- <div class="col-md-6 col-sm-6 col-lg-6">
                <div class="form-input-title pb-4"><b>Personal Referances</b></div>   
                <div class="form-input-title pb-3" style="font-weight: lighter;"><b>Attorney</b></div>  
      
                  <div class="form-outline" style="padding-top: 5px;">
                    <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Name of Firm</b><span class="form-required">*</span></label>
                    <input type="text" placeholder="Name of Firm" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
                    "/>
                  </div>
      
                  <div class="form-outline" style="padding-bottom: 7px;">
                    <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Contact Name</b><span class="form-required">*</span></label>
                    <input type="text" placeholder="Contact Name" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
                    "/>
                  </div>
                  <div class="form-outline">
                    <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Telephone Number</b><span class="form-required">*</span></label>
                    <input type="text" placeholder="Telephone Number" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
                    "/>
                  </div>
      
                </div> -->
      
                <!-- <div class="-md-6 col-sm-6 col-lg-6">
                  <div class="form-outline" style="padding-top: 129px;">
                    <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>City</b><span class="form-required">*</span></label>
                    <input type="text" placeholder="City" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
                    "/>
                  </div>
              
                  <div class="form-outline">
                    <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>State</b><span class="form-required">*</span></label>
                    <input type="text" placeholder="State" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
                    "/>
                  </div>
              
                  <div class="form-outline">
                    <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;padding-top: 5px;"><b>Pin Code</b><span class="form-required">*</span></label>
                    <input type="text" placeholder="Pin Code" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
                    "/>
                  </div>  
                  </div> -->
      
                  <!-- <div class="personal-fin">
                    <div class="form-para para pb-1.5 pt-3"></div>
                    <textarea name="textarea" id="inputtextarea" class="form-control" style="height: 130px"; rows="3" required="required" placeholder="Personal References (Someone who has known you for at least 2 years)"></textarea>
                  </div> -->
      
                </div>

      <!-- Personal Referance ENd -->
            <!-- <div class="personal-fin">
              <div class="form-para para pb-1.5"></div>
              <div class="form-para para pb-3">Have you previously been approved for business funding? If so, please give details.</div>
              <div class="">
              <textarea name="textarea" id="inputtextarea" class="form-control" style="height: 130px"; rows="3" required="required" placeholder="Have you previously been approved for business funding? If so, please give details."></textarea>
            </div>
            </div> -->
          </div>
      <!-- Referance End -->
      <!-- EXPECTATIONS -->
            <!-- <div class="row pt-5 pb-5">

              <div class="form-input-title pb-4"><b>Expectations</b></div>      
              <div class="personal-fin">
                <div class="form-para para pb-4">What are your three main reasons for applying for a iMOBILES franchise?</div>
                <div class="form-para para pb-4">
                <textarea name="textarea" id="inputtextarea" class="form-control" style="height: 130px"; rows="3" required="required" placeholder="1.Reasons for applying for a iMOBILES franchise"></textarea>
              </div>
              <div class="form-para para pb-4">
                <textarea name="textarea" id="inputtextarea" class="form-control" style="height: 130px"; rows="3" required="required" placeholder="2.Reasons for applying for a iMOBILES franchise"></textarea>
              </div>
                <div class="form-para para pb-4">
                <textarea name="textarea" id="inputtextarea" class="form-control" style="height: 130px"; rows="3" required="required" placeholder="3.Reasons for applying for a iMOBILES franchise"></textarea>
              </div>
              </div>

              <div class="personal-fin">
                <div class="form-para para pb-4">Please describe any other skills, qualifications or interests that you have that are  relevant to the business.</div>
                <div class="form-para para pb-4">
                <textarea name="textarea" id="inputtextarea" class="form-control" style="height: 130px"; rows="3" required="required" placeholder="Please describe any other skills, qualifications or interests that you have that are  relevant to the business."></textarea>
              </div>
              </div>

              <div class="personal-fin">
                <div class="form-para para pb-4">Have you ever owned or worked in a business similar to the proposed franchise? If so, please give details</div>
                <div class="form-para para pb-4">
                <textarea name="textarea" id="inputtextarea" class="form-control" style="height: 130px"; rows="3" required="required" placeholder="Have you ever owned or worked in a business similar to the proposed franchise? If so, please give details"></textarea>
              </div>
              </div>

              <div class="personal-fin">
                <div class="form-para para pb-4">What could make it difficult for you to run iMOBILES franchise?</div>
                <div class="form-para para pb-4">
                <textarea name="textarea" id="inputtextarea" class="form-control" style="height: 130px"; rows="3" required="required" placeholder="What could make it difficult for you to run iMOBILES franchise?"></textarea>
              </div>
              </div>

              <div class="personal-fin">
                <div class="form-para para pb-4">In which area would you like to open your iMOBILES Franchise? (In order of preference)</div>
                <div class="form-para para pb-4">
                <textarea name="textarea" id="inputtextarea" class="form-control" style="height: 130px"; rows="3" required="required" placeholder="1.In which area would you like to open your iMOBILES Franchise? (In order of preference)"></textarea>
              </div>
              <div class="form-para para pb-4">
                <textarea name="textarea" id="inputtextarea" class="form-control" style="height: 130px"; rows="3" required="required" placeholder="2.In which area would you like to open your iMOBILES Franchise? (In order of preference)"></textarea>
              </div>
                <div class="form-para para pb-4">
                <textarea name="textarea" id="inputtextarea" class="form-control" style="height: 130px"; rows="3" required="required" placeholder="3.In which area would you like to open your iMOBILES Franchise? (In order of preference)"></textarea>
              </div>
              </div>

              <div class="personal-fin">
                <div class="form-para para pb-4">If a franchise was not available in the preferred area, would you be willing to consider other areas? If so, which areas?</div>
                <div class="form-para para pb-4">
                <textarea name="textarea" id="inputtextarea" class="form-control" style="height: 130px"; rows="3" required="required" placeholder="1.If so, which areas?"></textarea>
              </div>
              <div class="form-para para pb-4">
                <textarea name="textarea" id="inputtextarea" class="form-control" style="height: 130px"; rows="3" required="required" placeholder="2.If so, which areas?"></textarea>
              </div>
                <div class="form-para para pb-4">
                <textarea name="textarea" id="inputtextarea" class="form-control" style="height: 130px"; rows="3" required="required" placeholder="3.If so, which areas?"></textarea>
              </div>
              </div>

              <div class="personal-fin">
                <div class="form-para para pb-4">When are you available to start?</div>
                <div class="form-para para pb-4">
                <textarea name="textarea" id="inputtextarea" class="form-control" style="height: 130px"; rows="3" required="required" placeholder="When are you available to start?"></textarea>
              </div>
              </div>

              <div class="personal-fin">
                <div class="form-para para pb-4">How and where did you learn of iMOBILES?</div>
                <div class="form-para para pb-4">
                <textarea name="textarea" id="inputtextarea" class="form-control" style="height: 130px"; rows="3" required="required" placeholder="How and where did you learn of iMOBILES?"></textarea>
              </div>
              </div>

              <div class="personal-fin">
                <div class="form-para para pb-4">What annual income do you expect to earn?</div>
                <div class="form-para para pb-4">
                <textarea name="textarea" id="inputtextarea" class="form-control" style="height: 130px"; rows="3" required="required" placeholder="What annual income do you expect to earn?"></textarea>
              </div>
              </div>

              <div class="personal-fin">
                <div class="form-para para pb-4">How many hours per week will you expect to spend in the business?</div>
                <div class="form-para para">
                <textarea name="textarea" id="inputtextarea" class="form-control" style="height: 130px"; rows="3" required="required" placeholder="How many hours per week will you expect to spend in the business?"></textarea>
              </div>
              </div>

            </div> -->
      <!-- EXPECTATIONS END-->

            <!-- Franchise ownership information -->

              <!-- <div class="row p-0 pb-5">
              <div class="form-input-title pb-4"><b>Franchise Ownership Information</b></div>      
              <div class="personal-fin">
                <div class="form-para para pb-4">Are you currently in any discussions to buy an existing iMOBILES franchise?</div>
                <div class="form-para para pb-4">
                <textarea name="textarea" id="inputtextarea" class="form-control" style="height: 130px"; rows="3" required="required" placeholder="Are you currently in any discussions to buy an existing iMOBILES franchise?"></textarea>
              </div>
              </div>

              <div class="form-input-title pb-4">Type of Ownership</div>      
              <div class="personal-fin">
                <div class="form-outline">
                  <label class="form-label pb-2" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;">Corporation / Sole Proprietor / Limited Liability Company / Other<span class="form-required">*</span></label>
                  <input type="text" placeholder="Corporation / Sole Proprietor / Limited Liability Company / Other" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;
                  "/>
                </div>
              </div>

              <div class="personal-fin">
                <div class="form-outline">
                  <label class="form-label pb-2" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;">Company Name (where applicable)<span class="form-required">*</span></label>
                  <input type="text" placeholder="Company Name (where applicable)" class="form-control" style="height: 45px;border: solid lightgray 1px;
                  "/>
                </div>
              </div>

              <div class="personal-fin">
                <div class="form-outline">
                  <label class="form-label pb-2" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;">Name of proposed shareholders or partners and their estimated % of ownership<span class="form-required">*</span></label>
                  <input type="text" placeholder="1. Name of proposed shareholders or partners " class="form-control" style="height: 45px;border: solid lightgray 1px;"/>                  
                </div>
                <div class="form-outline">
                  <input type="text" placeholder="2. Name of proposed shareholders or partners " class="form-control" style="height: 45px;border: solid lightgray 1px;"/>                  
                </div>
                <div class="form-outline">
                  <input type="text" placeholder="3. Name of proposed shareholders or partners " class="form-control" style="height: 45px;border: solid lightgray 1px;"/>                  
                </div>
                <div class="form-outline">
                  <input type="text" placeholder="4. Name of proposed shareholders or partners " class="form-control" style="height: 45px;border: solid lightgray 1px;"/>                  
                </div>
              </div>

              <div class="personal-fin pt-5">
                <div class="form-para para pb-4">Would you prefer to buy an existing area or open a new one?</div>
                <div class="form-para para pb-4">
                <textarea name="textarea"  class="form-control" style="height: 130px"; rows="3" required="required" placeholder="(Please be aware that when purchasing an existing store, substantial investment may be required to bring it up to standard.)"></textarea>
              </div>
              </div>

              <div class="personal-fin">
                <div class="form-para para pb-4">Are you willing to relocate?</div>
                <div class="form-para para">
                <textarea name="textarea"  class="form-control" style="height: 130px"; rows="3" required="required" placeholder="Are you willing to relocate?"></textarea>
              </div>
              </div>
            </div> -->

            <!-- Franchise ownership information ENd -->
            
            <!-- Declaration -->
            <!-- <div class="row pb-5">
              <div class="form-input-title"><b>Declaration</b></div>
                <div class="col-md-6 col-sm-6 col-lg-6">
                <div class="form-outline">
                    <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Signature</b><span class="form-required">*</span></label>
                    <input type="file" name="sign" class="form-control sign-upload" id="sign-upload" style="height: auto;border: solid lightgray 1px;"required/>
                  </div>
                  <div class="form-outline">
                    <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Name</b><span class="form-required">*</span></label>
                    <input type="text" name="declaration_name" placeholder="Name" class="form-control" style="height: 45px;border: solid lightgray 1px;"required/>
                  </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-lg-6">
                      <div class="form-outline">
                        <label class="form-label" for="form8Example4" style="padding-bottom: 3px;margin-bottom: 12px;"><b>Date</b><span class="form-required">*</span></label>
                        <input type="date" name="date" id="form8Example4" class="form-control" style="height: 45px;border: solid lightgray 1px;"required/>
                      </div>
                    </div>
                    <div class="form-para para pt-5 pb-2">
                      All queries will be dealt with through email only.
                    </div> -->

                    <div class="form-para para pt-3 pb-2">
                      Due to a large demand for our franchise, it is not always possible to attend to telephone calls regarding franchise queries. All the relevant queries will be answered through email only.</div>

                    <div class="form-para para pt-3 pb-2">
                      Submitting the franchise form doesn't guarantee a franchise allotment, it is for registering and keeping track of all queries, the company and the promoters are under no obligation to consider your request and shall act on their absolute discretion in allotting franchises.</div>

                    <div class="form-para para pt-3 pb-2">
                      Criteria mentioned on our website is a pre-requisite and the franchise form shall only be filled and submitted if you think you fit in the criteria provided.
                     </div>

                    <div class="form-para para pt-3 ">
                      <p class="m-0"><b>Please fax or email completed form to:</b></p>
                      <p class="m-0"><b>305-532-2366</b></p>
                      <p class="m-0"><b>info@xxx.com</b></p>
                    </div>

                    <div class="button-icon pb-4 mt-2">
        <button class="btn btn-primary"type="submit" style="color:#000 !important">Submit</button>
      </div>
                </div>
         

            <!-- Declaration End -->

      
    </form>
</div>
</section>

@endsection

    




















