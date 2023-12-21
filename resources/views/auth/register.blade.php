{{-- <x-guest-layout>
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
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


<!-- /*
* Template Name: Blogy
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
@extends('layouts.master')
@section('content')

    <div class="container">
        <div class="comment-form-wrap pt-5">
            <h3 class="mb-5">Register</h3>
            <form method="POST" action="{{ route('register') }}">
            @csrf
                <div class="form-group">
                    <label for="name">Username *</label>
                    <input type="text" class="form-control" id="name" name="name" required autofocus autocomplete="name">
                </div>
                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username">
                </div>
                <div class="form-group">
                    <label >Password *</label>
                    <input type="password" class="form-control" id="password" name="password"required autocomplete="new-password">
                </div>

                <div class="form-group">
                    <label >Confirm Password *</label>
                    <input type="password" name="password_confirmation"  class="form-control" id="password_confirmation" required autocomplete="new-password"
                     >
                </div>

                <div class="form-group">
                    <button type="submit"  class="btn btn-primary">Register</button>
                </div>

            </form>
        </div>
    </div>
@endsection

