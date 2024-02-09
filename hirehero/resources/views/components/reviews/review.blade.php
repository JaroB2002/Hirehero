<div
                    class="p-3 mb-4 border border-gray-200 rounded-md bg-gray-50 lg:p-6 dark:bg-gray-700 dark:border-gray-700">
                    <div class="md:block lg:flex">
                        <img class="object-cover w-16 h-16 mr-4 rounded-full shadow"
                            src="https://i.postimg.cc/rF6G0Dh9/pexels-emmy-e-2381069.jpg" alt="avatar">
                        <div>
                            <div class="flex flex-wrap items-center justify-between mb-1">
                                <div class="mb-2 md:mb-0">
                                    <h2 class="mb-1 text-lg font-semibold text-gray-900 dark:text-gray-400">
                                        {{$title}}
                                    </h2>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">{{$date}} </p>
                                </div>
                                <div>
                                    <ul class="flex items-center pb-1 mb-2">
                                            <x-star></x-star>
                                            <x-star></x-star>
                                            <x-star></x-star>
                                            <x-star></x-star>
                                            <x-star></x-star>
                                    </ul>
                                    <div class="flex items-center">
                                        <x-socials.svg icon="hand-thumbs-up-fill" d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z">
                                            {{$likes}}
                                        </x-socials.svg>

                                        <x-socials.svg icon="chat" d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z">
                                            {{$comments}}

                                        </x-socials.svg>

                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 text-sm text-gray-700 dark:text-gray-400">
                                {{$slot}}
                            </p>
                        </div>
                    </div>
                </div>