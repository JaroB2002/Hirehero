@props(['score', 'firstPercentage', 'secondPercentage', 'thirdPercentage', 'fourthPercentage'])
<div >
    <h2
        class="px-2 pb-2 mb-8 text-lg font-semibold border-b border-gray-300 dark:text-gray-300 dark:border-gray-700">
        Customer Reviews</h2>
    <div class="max-w-5xl px-4">
        <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
            <div>
                <span class="inline-block text-5xl font-bold text-blue-700 dark:text-gray-300">{{$score}}</span>
                <span class="inline-block text-xl font-medium text-gray-700 dark:text-gray-400">
                    /5</span>
                <ul class="flex items-center mt-4 mb-4">
                    <x-star></x-star>
                    <x-star></x-star>
                    <x-star></x-star>
                    <x-star></x-star>
                    <x-star></x-star>
                </ul>
                <p class="text-sm dark:text-gray-400">Average Rating and percentage per views
                </p>
            </div>
            <div>
                <x-percentage widthPercentage="{{$firstPercentage}}">
                    {{$firstPercentage}}%
                </x-percentage>
               <x-percentage widthPercentage="{{$secondPercentage}}">
                    {{$secondPercentage}}%
                </x-percentage>
                <x-percentage widthPercentage="{{$thirdPercentage}}">
                    {{$thirdPercentage}}%
                </x-percentage>
                <x-percentage widthPercentage="{{$fourthPercentage}}">
                    {{$fourthPercentage}}%
                </x-percentage>

            </div>
        </div>
    </div>
</div>
