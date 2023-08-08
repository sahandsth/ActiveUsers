<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img width="200px" height="200px" src="{{ asset('images/logo-mesbaran.png')}}" alt="">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mt-4">
                <x-jet-label for="email" style="float: right" value="{{ __('نام کاربری') }}" />
                <x-jet-input id="email" style="text-align: right" class="block mt-1 w-full" type="text" name="username" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" style="float: right" value="{{ __('رمز عبور') }}" />
                <x-jet-input id="password" style="text-align: right" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('به خاطر بسپار') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
              {{--  @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('رمز خود را فراموش کردید ؟') }}
                    </a>
                @endif--}}

                <x-jet-button class="ml-4">
                    {{ __('ورود') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
