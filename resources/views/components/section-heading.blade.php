@props([
    'title' => '',
    'subtitle' => '',
    'variant' => 'primary'
])

@php
$colors = [
    'primary' => 'text-primary-default',
    'secondary' => 'text-secondary-default',
    'dark' => 'text-gray-900',
];

$textColor = $colors[$variant] ?? $colors['primary'];
@endphp

<div class="text-center mb-16">
    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold leading-tight {{ $textColor }}">
        {{ $title }}
    </h2>
    <p class="text-gray-600 mt-4 max-w-2xl mx-auto {{ $textColor }}">
        {{ $subtitle }}
    </p>
</div>