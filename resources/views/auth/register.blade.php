<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf
 
        <!-- First Name -->
        <div>
            <x-input-label for="first_name" :value="__('First Name')" />
            <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="first_name" />
            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
        </div>
 
        <!-- Middle Name -->
        <div class="mt-4">
            <x-input-label for="middle_name" :value="__('Middle Name')" />
            <x-text-input id="middle_name" class="block mt-1 w-full" type="text" name="middle_name" :value="old('middle_name')" autocomplete="middle_name" />
            <x-input-error :messages="$errors->get('middle_name')" class="mt-2" />
        </div>
 
        <!-- Last Name -->
        <div class="mt-4">
            <x-input-label for="last_name" :value="__('Last Name')" />
            <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autocomplete="last_name" />
            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
        </div>
 
        <!-- Gender -->
        <div class="mt-4">
            <x-input-label for="gender" :value="__('Gender')" />
            <select id="gender" name="gender" class="block mt-1 w-full" required>
                <option value="">{{ __('Select Gender') }}</option>
                <option value="male">{{ __('Male') }}</option>
                <option value="female">{{ __('Female') }}</option>
                <option value="other">{{ __('Other') }}</option>
            </select>
            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
        </div>
 
        <!-- Age -->
        <div class="mt-4">
            <x-input-label for="age" :value="__('Age')" />
            <x-text-input id="age" class="block mt-1 w-full" type="number" name="age" :value="old('age')" required />
            <x-input-error :messages="$errors->get('age')" class="mt-2" />
        </div>
 
        <!-- Birthdate -->
        <div class="mt-4">
            <x-input-label for="birthdate" :value="__('Birthdate')" />
            <x-text-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate" :value="old('birthdate')" required />
            <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
        </div>
 
        <!-- Permanent Address -->
        <div class="mt-4">
            <x-input-label for="address" :value="__('Permanent Address')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>
 
        <!-- Civil Status -->
        <div class="mt-4">
            <x-input-label for="civil_status" :value="__('Civil Status')" />
            <select id="civil_status" name="civil_status" class="block mt-1 w-full" required>
                <option value="">{{ __('Select Status') }}</option>
                <option value="single">{{ __('Single') }}</option>
                <option value="married">{{ __('Married') }}</option>
                <option value="widowed">{{ __('Widowed') }}</option>
                <option value="divorced">{{ __('Divorced') }}</option>
            </select>
            <x-input-error :messages="$errors->get('civil_status')" class="mt-2" />
        </div>
 
        <!-- Religion -->
        <div class="mt-4">
            <x-input-label for="religion" :value="__('Religion')" />
            <x-text-input id="religion" class="block mt-1 w-full" type="text" name="religion" :value="old('religion')" />
            <x-input-error :messages="$errors->get('religion')" class="mt-2" />
        </div>
 
        <!-- Spouse Full Name -->
        <div class="mt-4">
            <x-input-label for="spouse_name" :value="__('Spouse Full Name (if applicable)')" />
            <x-text-input id="spouse_name" class="block mt-1 w-full" type="text" name="spouse_name" :value="old('spouse_name')" />
            <x-input-error :messages="$errors->get('spouse_name')" class="mt-2" />
        </div>
 
        <!-- Siblings Full Name -->
        <div class="mt-4">
            <x-input-label for="siblings_name" :value="__('Sibling(s) Full Name (if applicable)')" />
            <x-text-input id="siblings_name" class="block mt-1 w-full" type="text" name="siblings_name" :value="old('siblings_name')" />
            <x-input-error :messages="$errors->get('siblings_name')" class="mt-2" />
        </div>
 
        <!-- Children Full Name -->
        <div class="mt-4">
            <x-input-label for="children_name" :value="__('Child(ren) Full Name (if applicable)')" />
            <x-text-input id="children_name" class="block mt-1 w-full" type="text" name="children_name" :value="old('children_name')" />
            <x-input-error :messages="$errors->get('children_name')" class="mt-2" />
        </div>
 
        <!-- Valid ID Attachment -->
        <div class="mt-4">
            <x-input-label for="valid_id" :value="__('Valid ID (jpg or png)')" />
            <x-text-input id="valid_id" class="block mt-1 w-full" type="file" name="valid_id" accept=".jpg, .jpeg, .png" required />
            <x-input-error :messages="$errors->get('valid_id')" class="mt-2" />
        </div>
 
        <!-- Register Button -->
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
 
            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>