@extends('layouts.user.app')
@section('content')
<?php
$sessionKey = key($accountSession);
?>
<section>
      <div class="left-half-signup-1 hidden-sm hidden-xs">
        <a href="../shipper/index.php"> <img src="{{ url('/images/frontend/back-arrow.png') }}"> </a>
        <article class="testimonial-text">
          <p class="textmonial-says">“We would like to tell of our incredible experience with Logistics Plus, Jessica Konieczki and her team. For the past year we have been in France and Italy sourcing products for our business.” </p>
          <p class="testis-name">Jerry and Susan </p>
          <p class="testis-post-name">JNS Fabulous Finds storefront on Amazon</p>
        </article>
      </div> <!-- left end -->

      <div class="right-half signup-half-1">
        <article>
          <div class="account-login">
            <h4>Create an account - <span class="step-name">Step 1/3</span></h4>
            <form action="" id="create-account-step-one" method="POST">
                <div class="form-group">
                  <label class="who-are">Are you a</label>
                  <div class="row has_company_type">
                      <div class="col-xs-6">
                          <label for="driving" class="material-icons">
                            <input type="radio" name="user_category" id="company" value="0" checked/>
                            <span> <img src="{{ url('/images/frontend/company-icon.png') }}"></span>
                          </label>
                          <span class="who-are-name">Company</span>
                      </div> <!-- col end -->
                      <div class="col-xs-6">
                          <label for="cycling" class="material-icons">
                            <input type="radio" name="user_category" id="individual" value="1" />
                            <span> <img src="{{ url('/images/frontend/person-icon.png') }}"></span>
                          </label>
                          <span class="who-are-name">Individual</span>
                      </div> <!-- col end -->
                  </div> <!-- row end -->
                </div> <!-- from group end -->

                <div class="form-group" id="company_name">
                  <label>Company Name</label>
                  <input type="text" class="form-control" placeholder="Enter company name">
                </div> <!-- from group end -->

                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-6">
                        <label>Country</label>
                        @if(!$allCountry->isEmpty())
                            <select class="form-control" name="country_id" id="country">
                                <option>Please Select</option>
                                @foreach($allCountry as $country)
                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                      @endif
                    </div> <!-- col end -->
                    <div class="col-xs-6">
                      <label>City</label>
                      <select class="form-control" disabled="disabled" id="city" name="city_id">
                        <option value="Bastar">Please Select</option>
                        
                      </select>
                    </div> <!-- col end -->
                  </div> <!-- row end -->                    
                </div> <!-- from group end -->

                <div class="form-group">
                  <label>Postal Code</label>
                  <input type="text" class="form-control" placeholder="Enter postal code">
                </div> <!-- from group end -->

                <div class="form-group">
                  <label>Address</label>
                  <input type="text" class="form-control" placeholder="Enter address">
                </div> <!-- from group end -->
                @if($sessionKey == "lsp")
                <div class="form-group">
                  <label>Your Services</label>
                      <select class="form-control">
                          <option value="0" selected="selected">Trucking</option>
                        <option value="1">Air Freight</option>
                        <option value="2">Trucking + Air Freight</option>
                      </select>
                </div> <!-- from group end -->
                @endif
                <div class="form-group">
                  <button class="btn btn-default" type="submit">Next</button>
                </div> <!-- from group end -->
            </form>
          </div> <!-- account login end -->
        </article>
      </div> <!-- right end -->
    </section>


@endsection