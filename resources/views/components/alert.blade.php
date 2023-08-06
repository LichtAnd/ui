@props(['type' => 'danger'])

@php
    switch ($type) {
        case 'success':
            $color = 'border-teal-200 bg-teal-50 text-teal-700 dark:border-teal-500/40 dark:bg-teal-500/20 dark:text-teal-100/80';
            $icon = 'heroicon-o-check-circle';
            break;
        case 'info':
            $color = 'border-accent-200 bg-accent-50 text-accent-700 dark:border-accent-500/40 dark:bg-accent-500/20 dark:text-accent-100/80';
            $icon = 'heroicon-o-information-circle';
            break;
        case 'warning':
            $color = 'border-yellow-200 bg-yellow-50 text-yellow-700 dark:border-yellow-500/40 dark:bg-yellow-500/20 dark:text-yellow-100/80';
            $icon = 'heroicon-o-exclamation-circle';
            break;
        case 'danger':
            $color = 'border-red-200 bg-red-50 text-red-700 dark:border-red-500/40 dark:bg-red-500/20 dark:text-red-100/80';
            $icon = 'heroicon-o-x-circle';
            break;
    }
@endphp

<div {{ $attributes->merge(['class' => 'flex items-center rounded px-4 py-2 border text-sm ' . $color]) }}>
    @svg($icon, 'w-6 h-6 mr-2')
    <span class="sr-only">{{ ucfirst($type) }}</span>
    <div>{{ $slot }}</div>
</div>
