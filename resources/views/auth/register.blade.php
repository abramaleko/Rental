<x-guest-layout>
    <div class="flex min-h-screen bg-white">

        <div class="hidden w-1/2 bg-cover md:block"
            style="background-image:  url('images/bg.jpg')">
        </div>

        <div class="max-w-lg px-4 py-5 mx-auto shadow-none md:w-1/2">

            <div class="mt-8">
                <a href="/" class="text-4xl text-gray-700 " style="font-family: 'Pacifico', cursive;">
                    <img src="{{asset('images/logo.png')}}" alt="{{env('APP_NAME')}}"  style="height: 55px !important" class="inline ml-6">
                    Rental
                </a>
            </div>

            <div class="p-0 mt-20 font-sans text-left">
                <h1 class="text-3xl font-medium text-gray-800 ">Create an account for free</h1>
                <h3 class="p-1 text-gray-700">Free forever. No payment needed.</h3>
            </div>

            <form  method="POST" action="{{ route('register') }}"
            class="pt-6 pb-8 mb-24 bg-white rounded ">
                @csrf
                <div class="mb-4 md:flex md:justify-between">
                    <div class="mb-4 md:mr-2 md:mb-0">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
                            {{ __('Full Name') }}
                        </label>
                        <input
                            class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline
                            @error('name')
                            border-red-500
                            @enderror"
                            id="firstName" type="text" placeholder="Full Name" name="name" :value="old('name')" />
                            @error('name')
                            <p class="text-xs italic text-red-500">{{ $message}}</p>
                            @enderror
                        </div>
                    <div class="md:ml-2">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="phone_no">
                            {{ __('Phone Number') }}
                        </label>
                        <input
                            class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline
                            @error('phone_no')
                            border-red-500
                            @enderror"
                            id="phone_no" type="tel" placeholder="Phone Number" name="phone_no"  :value="old('phone_no')"/>
                            @error('phone_no')
                            <p class="text-xs italic text-red-500">{{ $message}}</p>
                            @enderror
                        </div>
                </div>
                <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                        {{ __('Email') }}
                    </label>
                    <input
                        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline
                         @error('email')
                        border-red-500
                        @enderror"
                        id="email" type="email" placeholder="Email" name="email" :value="old('email')"/>
                        @error('email')
                            <p class="text-xs italic text-red-500">{{ $message}}</p>
                            @enderror
                </div>
                <div class="mb-4 md:flex md:justify-between">
                    <div class="mb-4 md:mr-2 md:mb-0">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                            {{ __('Password') }}
                        </label>
                        <input
                            class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline
                            @error('password')
                          border-red-500
                           @enderror"
                            id="password" type="password" placeholder="******************" name="password" autocomplete="new-password" required :value="old('password')" />
                            @error('password')
                            <p class="text-xs italic text-red-500">{{ $message}}</p>
                            @enderror
                    </div>
                    <div class="md:ml-2">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
                            {{ __('Confirm Password') }}
                        </label>
                        <input
                            class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline
                            @error('password')
                          border-red-500
                           @enderror"
                            id="c_password" type="password" placeholder="******************"  name="password_confirmation" required autocomplete="new-password" />
                    </div>
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-jet-label for="terms">
                            <div class="flex items-center">
                                <x-jet-checkbox name="terms" id="terms" />

                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '" class="text-sm text-gray-600 underline hover:text-gray-900">' . __('Terms of Service') . '</a>',
                                    'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '" class="text-sm text-gray-600 underline hover:text-gray-900">' . __('Privacy Policy') . '</a>',
                                ]) !!}
                                </div>
                            </div>
                        </x-jet-label>
                    </div>
                @endif
                <div class="mb-6 text-center">
                    <button
                        class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                        type="submit">
                        Register Account
                    </button>
                </div>
                <hr class="mb-6 border-t" />
                <div class="text-center">
                    <a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                    href="{{ route('login') }}">
                        Already have an account? Login!
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
