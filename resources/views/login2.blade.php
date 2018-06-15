@extends('layouts.app')

@section('content')

	<div class="limiter">
		<div class="container-login100" >
			<div class="wrap-login100">
            <form method="POST" action="{{ route('mylog') }}" class="login100-form validate-form">
                        @csrf
                        	<span class="login100-form-logo">
						
						<img src="images/log2.png" class="rounded-circle" style="width:100%;">
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Connexion
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
                    <input id="custcod" type="text" class="input100{{ $errors->has('custcod') ? ' is-invalid' : '' }}" 
                           name="custcod" value="{{ old('custcod') }}" placeholder="votre code client" required>                             
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input id="password" type="password" class="input100{{ $errors->has('password') ? ' is-invalid' : '' }}" 
                        	name="password" placeholder="Mot de passe" required >               
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember 
                           
						</label>
					</div>

					<div class="alert alert-danger">
                    <?php
                       echo $erreur;
                    ?>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--
		<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
            <form method="POST" action="{{ URL::to('/login') }}" class="login100-form validate-form">
                        @csrf
                        	<span class="login100-form-logo">
						
						<img src="images/naftal.png" class="rounded-circle">
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
                    <input id="code" type="text" class="form-control{{ $errors->has('custcod') ? ' is-invalid' : '' }}" 
                           name="custcod" value="{{ old('custcod') }}" placeholder="Code" required autofocus>                             
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" 
                        	name="password" placeholder="Password" required autofocus>               
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
-->
<!--===============================================================================================-->
	
@endsection
