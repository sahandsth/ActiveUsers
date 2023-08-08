<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img width="200px" height="200px" src="{{ asset('images/logo-mesbaran.png')}}" alt="">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />


        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" style="float: right" value="{{ __('نام و نام خانوادگی واقعی') }}" />
                <x-jet-input id="name" style="text-align: right" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" style="float: right" value="{{ __('نام کاربری') }}" />
                <x-jet-input id="email" style="text-align: right" class="block mt-1 w-full" type="text" name="username" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" style="float: right" value="{{ __('رمز عبور') }}" />
                <x-jet-input id="password" style="text-align: right" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" style="float: right" value="{{ __('تکرار رمز عبور') }}" />
                <x-jet-input id="password_confirmation" style="text-align: right" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

           {{-- @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif--}}

            <div class="flex items-center justify-start mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('ثبت نام کرده اید ؟') }}
                </a>

                <x-jet-button  class="ml-4">
                    {{ __('ثبت نام') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
