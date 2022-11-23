@extends('backend.layouts.app')

@section('title', 'Login')

@section('guest')
    <!-- BEGIN LOGIN SECTION -->
    <style>
        .logindiv{
            margin-top: -40px;
            margin-left: -40px;
            width: 1700px;
            height: 110vh;
            margin-bottom: -40px;
            background-color: #9bc3e1;
        }
        .cardlogin{
            height: 500px;
        }
        .imglogo{
            
        }
        .logindiv{
          
        }
        .purple{
            margin-left: 20%;
        }
        h1{
            margin-top: 400px;
            margin-left: 20px;
            color: black;
            font-family: 'Times New Roman';
            
      
        }


        .grid-container {
          
    display: grid;
    grid-template-columns: 2fr 2fr;
   
}  
    </style>
    <section class="section-account1 loginBackground">
   <div class="logindiv float-container">
        
          
  <div class="grid-child purple">
  <div class="card col-sm-4 cardlogin float-child">
                <div class="card-body">
                    <br/>
                    <span class="text-lg text-bold text-secondary inganiBa">Clinic Information Management System</span>
                    <br/><br/>
                    @include('partials.errors')
                    <form class="form form-validate" role="form" style="text-align:left;" method="POST" action="{{ url('/login') }}" autocomplete="off" novalidate>
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                            <span for="login">Email</span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="password" required>
                            <span for="password">Password</span>
                            <p class="help-block">
                                <a href="{{ url('/password/reset') }}" target="_blank">Forgot?</a>
                            </p>
                        </div>
                        <br/>
                        <div class="col-xs-6 text-right">
                            <button class="btn btn-secondary btn-raised" type="submit">Login</button>
                        </div><!--end .col -->
                        <div class="row">
                            <div class="col-xs-6 text-left">
                                <div class="checkbox checkbox-inline checkbox-styled">
                                    <label>
                                        {{ Form::checkbox('remember', 1, null) }}
                                        <span>Remember me</span>
                                    </label>
                                </div>
                            </div><!--end .col -->
                            
                        </div><!--end .row -->
                    </form>
                   
            </div>
            
            </div>
            <div class="float-container">

  </div>
  
  <div class="grid-child green">
  <div class="card col-sm-4 cardlogin float-child2">
          <h1>Upgrading medicines, Upgrading Lifes.</h1>      
     
  </div>
  
</div>
            
    </section>
    <!-- END LOGIN SECTION -->

    
@endsection

@push('styles')
<style type="text/css">
    .logo {
        margin-top: 80px;
        margin-bottom: 15px;
    }
</style>
@endpush

@push('scripts')
<script src="{{ asset('backend/js/libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>
<script src="{{ asset('backend/js/libs/jquery-validation/dist/additional-methods.min.js') }}"></script>
@endpush
