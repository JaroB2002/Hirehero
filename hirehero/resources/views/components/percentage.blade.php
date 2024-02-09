@props(['widthPercentage' => '75'])

<div class="flex items-center mb-2">
    <div class="w-full h-4 mr-2 bg-gray-200 rounded-full dark:bg-gray-700">
        <div class="h-4 bg-blue-500 rounded-full dark:bg-blue-400" style="width: {{$widthPercentage}}%"></div>
    </div>
    <div class="flex justify-end text-base font-medium dark:text-gray-400">{{$slot}}</div>
</div>