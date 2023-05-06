<x-layouts.guest>
    <x-slot:title>
        Log In
    </x-slot>
    <h2 class="text-center mb-5">Log In</h2>
    <form class="widget widget--500" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="email">Email</label>
            <x-text-input id="email" class="form-control item" type="email" name="email" :value="old('email')" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="password">Password</label>
            <x-text-input id="password" class="form-control" type="password" name="password" :value="old('password')" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <div class="mb-3">
            <div class="form-check">
                <input
                    id="checkbox"
                    class="form-check-input"
                    type="checkbox"
                /><label class="form-check-label" for="checkbox">Remember me</label>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Log In</button>
    </form>
    <div class="text-center mt-5">
        <p>Don't have an account yet? <a href="{{ route('register') }}">Register</a></p>
    </div>
</x-layouts.guest>
