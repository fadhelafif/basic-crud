@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-danger fs-7 list-unstyled']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
