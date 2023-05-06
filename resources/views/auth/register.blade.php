<x-layouts.guest>
    <x-slot:title>
        Register
    </x-slot>
    <h2 class="text-center mb-5">Register</h2>
    <form class="widget" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="name">Name</label>
            <x-text-input id="name" type="text" name="name" :value="old('name')" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="email">Email</label>
            <x-text-input id="email" type="email" name="email" :value="old('email')" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="password">Password</label>
            <x-text-input id="password" type="password" name="password" :value="old('password')" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="password_confirmation">Confirm Password</label>
            <x-text-input id="password_confirmation" type="password" name="password_confirmation" :value="old('password_confirmation')" />
        </div>

        <button class="btn btn-primary" type="submit">Register</button>
    </form>
    <div class="text-center mt-5">
        <p>Already have an account? <a href="{{ route('login') }}">Sign in</a></p>
    </div>
</x-layouts.guest>
