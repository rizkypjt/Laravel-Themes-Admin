   @extends('layouts.main')
   @section('content')
   <header class="intro-header" style="background-image: url('img/about-bg.jpg')">
       <div class="container">
           <div class="row">
               <br><br><br><br><br>
               <div class="container">
                   <div class="row">
                       <div class="col-md-8 col-md-offset-2">
                           <div class="panel panel-default">
                               <div class="panel-heading">Register</div>
                               <div class="panel-body">
                                   <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                                       {{ csrf_field() }}

                                       <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                           <label for="name" class="col-md-4 control-label"  style="font-size: 15px;">Name</label>

                                           <div class="col-md-6">
                                               <input id="name" type="text" class="form-control"  style="font-size: 15px;" name="name" value="{{ old('name') }}" required autofocus>

                                               @if ($errors->has('name'))
                                                   <span class="help-block">
                                                       <strong>{{ $errors->first('name') }}</strong>
                                                   </span>
                                               @endif
                                           </div>
                                       </div>

                                       <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                           <label for="email" class="col-md-4 control-label"  style="font-size: 15px;">E-Mail Address</label>

                                           <div class="col-md-6">
                                               <input id="email" type="email" class="form-control"  style="font-size: 15px;" name="email" value="{{ old('email') }}" required>

                                               @if ($errors->has('email'))
                                                   <span class="help-block">
                                                       <strong>{{ $errors->first('email') }}</strong>
                                                   </span>
                                               @endif
                                           </div>
                                       </div>

                                       <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                           <label for="password" class="col-md-4 control-label"  style="font-size: 15px;">Password</label>

                                           <div class="col-md-6">
                                               <input id="password" type="password" class="form-control"  style="font-size: 15px;" name="password" required>

                                               @if ($errors->has('password'))
                                                   <span class="help-block">
                                                       <strong>{{ $errors->first('password') }}</strong>
                                                   </span>
                                               @endif
                                           </div>
                                       </div>

                                       <div class="form-group">
                                           <label for="password-confirm" class="col-md-4 control-label"  style="font-size: 15px;">Confirm Password</label>

                                           <div class="col-md-6">
                                               <input id="password-confirm" type="password" class="form-control"  style="font-size: 15px;" name="password_confirmation" required>
                                           </div>
                                       </div>

                                       <div class="form-group">
                                           <div class="col-md-6 col-md-offset-4">
                                               <button type="submit" class="btn btn-primary">
                                                   DAFTAR
                                               </button>
                                           </div>
                                       </div>
                                   </form>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="page-heading">
               </div>
            </div>
         </div>
   </header>
@endsection
