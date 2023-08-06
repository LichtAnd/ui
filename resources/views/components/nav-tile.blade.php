@props([
    'href' => '#',
    'title' => '',
])

<a class="duration-250 flex scale-100 rounded-lg bg-gray-50 from-gray-700/50 via-transparent p-6 shadow-2xl shadow-gray-500/20 transition-all focus:outline focus:outline-2 focus:outline-accent-500 motion-safe:hover:scale-[1.01] dark:bg-gray-800/50 dark:bg-gradient-to-bl dark:shadow-none dark:ring-1 dark:ring-inset dark:ring-gray-50/5"
    href="{{ $href }}">
    <div>
        <div class="flex h-16 w-16 items-center justify-center rounded-full bg-accent-50 dark:bg-accent-800/20">
            {{ $icon }}
        </div>

        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-gray-50">{{ $title }}</h2>

        <p class="mt-4 text-sm leading-relaxed text-gray-500 dark:text-gray-400">
            {{ $slot }}
        </p>
    </div>

    <x-heroicon-o-arrow-right class="mx-6 h-6 w-6 shrink-0 self-center stroke-accent-500" />
</a>
