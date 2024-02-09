@props(['src', 'link', 'bgColor' => 'bg-blue-200'])

<div class="w-full lg:w-1/3 px-4 mb-12 lg:mb-0">
    <div class="flex items-center lg:justify-center">
      <div class="flex flex-shrink-0 mr-5 sm:mr-8 items-center justify-center p-1 w-16 sm:w-20 h-16 sm:h-20 rounded-full {{$bgColor}}">
        <img src="/images/{{$src}}" alt="">
      </div>
      <div>
        <span class="text-lg text-gray-500">{{$title}}</span>
        <span class="block text-lg font-semibold text-gray-900">{{$slot}}</span>
      </div>
    </div>
</div>
