@php
    $classes = "p-4 bg-white/5 rounded-xl border border-transparent hover:border-blueish group transition-colors duration-300";
@endphp

<div {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</div>
