<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="space-y-4">
                <div>
                    <x-label for="name" value="{{ __('Name') }}" />
                    <x-input id="name" class="block w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Your Name" />
                </div>

                <div>
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block w-full" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Your Email Address" />
                </div>

                <div>
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input id="password" class="block w-full" type="password" name="password" required autocomplete="new-password" placeholder="Choose a Password" />
                </div>

                <div>
                    <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-input id="password_confirmation" class="block w-full" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Your Password" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div>
                        <x-label for="terms" />
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />
                            <div class="ml-2 text-sm text-gray-600">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline hover:text-gray-900">'.__('Terms of Service').'</a>',
                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            <x-button class="mt-4 w-full">
                {{ __('Register') }}
            </x-button>
        </form>

        <div class="mt-4 text-sm text-gray-600">
            {{ __('Already registered?') }} <a href="{{ route('login') }}" class="underline hover:text-gray-900">{{ __('Log in') }}</a>
        </div>
    </x-authentication-card>
</x-guest-layout>