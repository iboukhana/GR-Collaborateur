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


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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

