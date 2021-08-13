<div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
    <x-dropdown>
        <x-slot name="trigger">
            <button class="py-2 pl-3 pr-9 text-sm font-semibold text-left flex lg:inline-flex w-full lg:w-32">
                {{ isset($currentCategory) ? $currentCategory->name : 'Categories' }}

                <x-icon name='down-arrow' class="absolute pointer-events-none"/>
            </button>
        </x-slot>

        <x-dropdown-item href='/' :active="request()->routeIs('home')">All</x-dropdown-item>

        @foreach ($categories as $category)
            <x-dropdown-item href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category')) }}" :active="request()->is('categories/' . $category->slug)">{{ ucwords($category->name) }}</x-dropdown-item>
        @endforeach
    </x-dropdown>
</div>
