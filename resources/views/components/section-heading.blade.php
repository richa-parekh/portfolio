@props([
    'title' => '',
    'subtitle' => ''
])
<div class="text-center mb-16">
    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold leading-tight">
        {{ $title }}
    </h2>
    <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
        {{ $subtitle }}
    </p>
</div>