<x-guest-layout>
   <!-- component -->
<section class="flex flex-col items-center h-screen md:flex-row">

    <div class="hidden w-full h-screen bg-indigo-600 lg:block md:w-1/2 xl:w-2/3">
      <img src="https://source.unsplash.com/random/?houses,cars" alt="" class="object-cover w-full h-full">
    </div>

    <div class="flex items-center justify-center w-full h-screen px-6 bg-white md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 lg:px-16 xl:px-12">

      <div class="w-full h-100">
        <a href="/" class="text-4xl text-gray-700 " style="font-family: 'Pacifico', cursive;">
            <img src="{{asset('images/logo.png')}}" alt="{{env('APP_NAME')}}"  style="height: 55px !important" class="inline ml-6">
            Rental
        </a>

        <x-jet-validation-errors class="my-4" />

        @if (session('status'))
            <div class="my-4 text-sm font-medium text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <h1 class="mt-12 text-xl font-bold leading-tight md:text-2xl">{{ __('Welcome Back !') }}</h1>
        <h3 class="mt-2 text-xs text-gray-600 md:text-sm font-extralight">{{ __('Rent and Manage your Rentals from the Palm of your Hands.' )}}</h3>

        <form class="mt-6" action="{{ route('login') }}" method="POST">
            @csrf
          <div>
            <labe for="email" class="block text-gray-700">{{ __('Email') }}</label>
            <input type="email" name="email" id="email" placeholder="Enter Email Address" class="w-full px-4 py-3 mt-2 bg-gray-200 border rounded-lg focus:border-blue-500 focus:bg-white focus:outline-none" autofocus autocomplete required>
          </div>

          <div class="mt-4">
            <label for="password" class="block text-gray-700">{{ __('Password') }}</label>
            <input type="password" name="password" id="password" placeholder="Enter Password" minlength="6" class="w-full px-4 py-3 mt-2 bg-gray-200 border rounded-lg focus:border-blue-500 focus:bg-white focus:outline-none" required>
          </div>

          <div class="mt-4 ">
            <label for="remember_me" class="flex items-center">
                <x-jet-checkbox id="remember_me" name="remember" />
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>


        @if (Route::has('password.request'))
        <div class="mt-2 text-right">
            <a href="{{ route('password.request') }}" class="text-sm font-semibold text-gray-700 hover:text-blue-700 focus:text-blue-700">{{ __('Forgot password?') }}</a>
          </div>
    @endif

          <button type="submit" class="block w-full px-4 py-3 mt-6 font-semibold text-white bg-indigo-500 rounded-lg hover:bg-indigo-400 focus:bg-indigo-400"> {{ __('Log in') }}</button>
        </form>

        <hr class="w-full my-6 border-gray-300">

        <button type="button" class="block w-full px-4 py-3 font-semibold text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:bg-gray-100">
              <div class="flex items-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-6 h-6" viewBox="0 0 48 48"><defs><path id="a" d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z"/></defs><clipPath id="b"><use xlink:href="#a" overflow="visible"/></clipPath><path clip-path="url(#b)" fill="#FBBC05" d="M0 37V11l17 13z"/><path clip-path="url(#b)" fill="#EA4335" d="M0 11l17 13 7-6.1L48 14V0H0z"/><path clip-path="url(#b)" fill="#34A853" d="M0 37l30-23 7.9 1L48 0v48H0z"/><path clip-path="url(#b)" fill="#4285F4" d="M48 48L17 24l-4-3 35-10z"/></svg>
              <span class="ml-4">
              Log in with Google
            </span>
              </div>
            </button>

        <p class="mt-8">Need an account? <a href="/register" class="font-semibold text-blue-500 hover:text-blue-700">Create an
                account</a></p>


      </div>
    </div>

  </section>
</x-guest-layout>
