<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-4 lg:px-6">
            <div class="bg-[#3F1052] overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white text-2xl font-semibold">
                    Country List
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg grid grid-cols-3 gap-5 mt-5">
                @foreach($resData as $value)
                <a href={{ route('leagues', $value->country_id) }} class="flex flex-col cursor-pointer items-center bg-[#3F1052] border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:hover:bg-gray-700">
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src={{ $value->country_logo }} alt={{ $value->country_name }}>
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $value->country_name }}</h5>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
