@props(['message'])

@if ($message)
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 dark:text-red-400 space-y-1']) }}>
        @foreach ((array) $messages as $messag)
            <li>{{ $messages }}</li>
        @endforeach
    </ul>
@endif
