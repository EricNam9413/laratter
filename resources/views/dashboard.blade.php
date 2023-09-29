<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard (Location)') }}
        </h2>
    </x-slot>

    <div class="py-12" style="background-color: gray;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 text-lg">
                    <div class="bg-green-100 text-green-800 rounded-md p-4 mb-4">
                        {{ __("You're logged in!") }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-10" style="background-color: gray;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 text-lg">
                    <div class="bg-green-100 text-green-800 rounded-md p-4 mb-4">
                        {{ __("This web application is for geo-based location") }}
                    </div>
                    <div id="map" style="height:500px"></div>
                    <script src="{{ asset('/result.js') }}"></script>
                    <script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key=AIzaSyDjUgcBBuXnzbe2MFR9dtWABgO4O3NPKLo&callback=initMap" async defer>
                    </script>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12" style="background-color: gray;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 text-lg">
                    <div class="bg-green-100 text-green-800 rounded-md p-4 mb-4">
                        {{ __("あなたの位置情報をチェックしてください！") }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    

</x-app-layout>

