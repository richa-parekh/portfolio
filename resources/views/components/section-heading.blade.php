@props([
    'title' => '',
    'subtitle' => ''
])
<div class="text-center mb-16">
    <h2 class="text-4xl md:text-5xl font-bold">
        {{ $title }}
    </h2>
    <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
        {{ $subtitle }}
    </p>
</div>