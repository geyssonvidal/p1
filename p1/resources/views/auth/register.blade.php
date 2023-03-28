<x-guest-layout>
    <x-auth-card>
        <x-slot name="welcome">
            Free Register
        </x-slot>
        <x-slot name="title">
            Get your free Veltrix account now.
        </x-slot>
        <x-slot name="registerlogin">
            Already have an account ?  <a href="{{route('login')}}" class="font-medium text-indigo-500"> Login </a>
        </x-slot>


        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
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
                                name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                

                <x-primary-button class="ml-4 bg-indigo-800/75">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
            <div class="mt-2 mb-0 row">
                <div class="col-12 mt-4">
                    <p class="mb-0 text-gray-500">By registering you agree to the Veltrix <a href="#" class="font-medium text-indigo-500">Terms of Use</a></p>
                </div>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
