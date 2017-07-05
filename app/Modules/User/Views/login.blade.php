@extends('layouts.user.app')
@section('content')
<section>
      <div class="left-half hidden-sm hidden-xs">
        <article>
          <center> <img src="{{ url('/images/frontend/login-screen-logo.png') }}" class="login-logo img-responsive"> </center>
          <p>Lorem ipsum dolor sit amet, consectetur</p>
          <p>Lorem ipsum dolor sit amet, consectetur</p>
          <p>Lorem ipsum dolor sit amet, consectetur</p>
        </article>
      </div> <!-- left end -->

      <div class="right-half">
        <article>
          <div class="account-login">
            <h4>Account Login</h4>
            <form action="dashboard.php">
                <div class="form-group">
                  <label>Email Address</label>
                  <input type="text" class="form-control" placeholder="Enter email address">
                </div> <!-- from group end -->

                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" placeholder="Enter password">
                </div> <!-- from group end -->

                <div class="form-group">
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <button class="btn btn-default pull-left" type="submit">Sign In</button>
                      <p class="pull-right forgot-pass"><a href="#">Forgot password?</a></p>
                    </div> <!-- col end -->
                  </div> <!-- row end -->
                </div> <!-- from group end -->
                
                <div class="form-group">
                    <p><strong>Don't have account?</strong>
                    <p><a href="{{ url('/create-account') }}<?php echo "/".Config::get('constants.user_type.shipper'); ?>">Sign up as Shipper</a></p>
                    <p><a href="{{ url('/create-account') }}<?php echo "/".Config::get('constants.user_type.lsp'); ?>">Sign up as LSP</a></p>
                </div> <!-- from group end -->
            </form>
          </div> <!-- account login end -->
        </article>
      </div> <!-- right end -->
    </section>
@endsection