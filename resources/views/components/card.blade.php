<div {{ $attributes->merge(['class' => 'bg-white shadow-sm sm:rounded-lg overflow-hidden']) }}>
    <div class="p-6 text-gray-900">
        {{ $slot }}
    </div>
</div>
