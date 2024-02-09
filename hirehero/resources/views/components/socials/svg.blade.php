@props(['icon', 'd'])

<div class="flex mr-3 text-sm text-gray-700 dark:text-gray-400">
    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16"
            height="16" fill="currentColor"
            class="w-4 h-4 mr-1 text-blue-400 bi bi-{{$icon}}"
            viewBox="0 0 16 16">
            <path d="{{$d}}"></path>
        </svg></a>
    <span>{{$slot}}</span>
</div>