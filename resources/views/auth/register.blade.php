<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

       <!-- First Name -->
    <div class="mb-4">
        <label for="fname" class="block text-sm font-medium text-gray-700">First Name</label>
        <input type="text" id="fname" name="fname" value="{{ old('fname') }}" class="mt-1 p-2 border rounded-md w-full" required autofocus>
        @error('fname')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

        <!-- Last Name -->
    <div class="mb-4">
        <label for="lname" class="block text-sm font-medium text-gray-700">Last Name</label>
        <input type="text" id="lname" name="lname" value="{{ old('lname') }}" class="mt-1 p-2 border rounded-md w-full" required autofocus>
        @error('lname')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        

        <!-- Phone Number -->
    <div class="mb-4">
        <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number</label>
        <input type="tel" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" class="mt-1 p-2 border rounded-md w-full" required autofocus>
        @error('phone_number')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Gender</label>
        <div class="mt-2">
            <label class="inline-flex items-center">
                <input type="radio" name="gender" value="{{ old('gender') == 'male' ? 'checked' : '' }}" class="form-radio">
                <span class="ml-2">Male</span>
            </label>

            <label class="inline-flex items-center ml-6">
                <input type="radio" name="gender" value="{{ old('gender') == 'female' ? 'checked' : '' }}" class="form-radio">
                <span class="ml-2">Female</span>
            </label>

            <label class="inline-flex items-center ml-6">
                <input type="radio" name="gender" value=" {{ old('gender') == 'other' ? 'checked' : '' }}" class="form-radio">
                <span class="ml-2">Other</span>
            </label>
        </div>
        @error('gender')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
    </div>

        <!-- <div>
            <x-input-label for="gender" :value="__('Gender')" />
            <x-text-input id="gender" class="block mt-1 w-full" type="text" gender="gender" :value="old('gender')" required autofocus autocomplete="gender" />
            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
        </div> -->

        <!--Date of Birth -->
        <div class="mb-4">
        <label for="dob" class="block text-sm font-medium text-gray-700">Date of Birth</label>
        <input type="date" id="dob" name="dob" value="{{ old('dob') }}" class="mt-1 p-2 border rounded-md w-full" required autofocus>
        @error('dob')
            <p class="text-red-500 text-sm">{{ $message }}</p>
        @enderror
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
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
