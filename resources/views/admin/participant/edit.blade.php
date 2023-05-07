<x-layouts.admin>
    <x-slot:title>
        Edit Participant
    </x-slot>
    <div class="container pt-5">
        <h2 class="text-center mb-5">Edit Participant</h2>
        <form class="widget widget--500" method="POST" action="{{ route('participant.update', $participant->id) }}">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label class="form-label" for="name">Nama</label>
                <x-text-input id="name" type="text" name="name" :value="old('name', $participant->name)" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <div class="mb-3">
                <label class="form-label" for="email">Email</label>
                <x-text-input id="email" class="form-control item" type="email" name="email" :value="old('email', $participant->email)" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div class="mb-3">
                <label class="form-label" for="x">X</label>
                <x-text-input id="x" type="text" name="x" :value="old('x', $participant->x)" />
                <x-input-error :messages="$errors->get('x')" class="mt-2" />
            </div>
            <div class="mb-3">
                <label class="form-label" for="y">Y</label>
                <x-text-input id="y" type="text" name="y" :value="old('y', $participant->y)" />
                <x-input-error :messages="$errors->get('y')" class="mt-2" />
            </div>
            <div class="mb-3">
                <label class="form-label" for="z">Z</label>
                <x-text-input id="z" type="text" name="z" :value="old('z', $participant->z)" />
                <x-input-error :messages="$errors->get('z')" class="mt-2" />
            </div>
            <div class="mb-3">
                <label class="form-label" for="w">W</label>
                <x-text-input id="w" type="text" name="w" :value="old('w', $participant->w)" />
                <x-input-error :messages="$errors->get('w')" class="mt-2" />
            </div>
            <div class="text-end">
                <a class="btn btn-outline-secondary" href="{{ route('participant.index') }}">Batal</a>
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </form>
    </div>
</x-layouts.admin>
