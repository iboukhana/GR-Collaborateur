<!DOCTYPE html>
<html lang="en-US">


<head>
   
	<title>Gestion des collaborateurs</title>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="x-ua-compatible">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="yes" name="apple-touch-fullscreen">
	<link href="{{asset('assets/plugins/DataTables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href ="{{asset('assets/plugins/datepicker/css/bootstrap-datepicker3.min.css')}}">
    <link rel="stylesheet" href ="{{asset('assets/plugins/clockpicker-gh-pages/dist/bootstrap-clockpicker.min.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link rel="icon" type="image/png" href="{{ asset('img/SQLI-logoC.ico') }}" />

</head>

<body>
        <div id="page-container2">
                <div class="page-helper">
                <div class="form-container">
                            <div class="logo mb-4">
                                <img src="{{ asset('img/SQLI-logoc.png') }}" alt="">
                            </div>
                
                            <div class="login-box">
                
                                <form method="POST" action="{{ route('login') }}">
                                        {{ csrf_field() }}
                             <p style="color: #563d7c;" class="mb-4 h1 text-center color">Bienvenue</p>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" >Nom d Utilisateur </label>
                                       <div>
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Nom d'Utilisateur">
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                        </div>     
                                </div>
                                
                             
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    
                                        <label for="password">Mot de passe</label>

                                        <div>
                                                <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
        
                                <div class="form-group row">      
                                    <div class="col-12 text-right">
                                        <a href="{{ route('password.request') }} ">Forgot password</a>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-block btn-alt-primary">se connecter</button>
                
                </form>			</div>
                
                        </div></div>
                </div>

<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/holder.js')}}"></script>
<script src="{{asset('assets/js/ajout.js')}}"></script>
<script src="{{asset('assets/plugins/switchery/switchery.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
<script src="{{asset('assets/plugins/datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('assets/plugins/datepicker/locales/bootstrap-datepicker.fr.min.js')}}"></script>
<script src="{{asset('assets/plugins/clockpicker-gh-pages/dist/bootstrap-clockpicker.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('assets/plugins/DataTables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/pages/table-data.js')}}"></script>
<script src="{{asset('assets/js/formulaire.js')}}"></script>
</body>

</html>