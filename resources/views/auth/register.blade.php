{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
<!DOCTYPE html>
<html>
<head>
<title>
 SignUp Now!
    </title>
    <link rel="stylesheet" href="{{ asset('assets/css/register.css') }}">


</head>
<body>

    <div id="login-box">
        <div class="left">
          <h1>Sign up</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            @method('post')
            @if($errors->get('name'))
            <p>{{ $errors->get('name')[0] }}</p>
            @endif
          <input type="text" name="name" placeholder="Username" required/>
          
      {{-- @endif --}}
            @if($errors->get('email'))
                <p>{{ $errors->get('email')[0] }}</p>
            @endif
          <input type="text" name="email" placeholder="E-mail" required/>
          <input type="password" name="password" placeholder="Password" required/>
          <input type="password" name="password_confirmation" placeholder="Retype password" required/>
          @if($errors->get('phone'))
                <p>{{ $errors->get('phone')[0] }}</p>
            @endif
          <input type="number" name="phone" placeholder="Enter your phone" pattern="^01[0-2]\s\d{1,8}$" required>
        @foreach ($roles as $role )
            <p>{{ $role->name }}</p>
        @endforeach
          <input type="submit" name="signup_submit" value="Sign up" />
        </form>
        </div>

        <div class="right">
          <span class="loginwith">Sign in with<br />social network</span>

          <button class="social-signin facebook">Log in with facebook</button>
          <button class="social-signin twitter">Log in with Twitter</button>
          <button class="social-signin google">Log in with Google+</button>
        </div>
        <div class="or">OR</div>
      </div>




</body>









</html>
