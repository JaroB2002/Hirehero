<x-selectie._layout>
    <div class="container mx-auto px-4">
        <form action="{{route('project.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
        <div id="errors" class="mb-8 hidden">

            <div>
                <h2>errors</h2>
                @if($errors->any())
                <div>
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            
            </div>
        </div>
            <input type="hidden" value="{{Auth::user()->voornaam . ' ' .  Auth::user()->familienaam}}" name="author">
            <span><h1 class="text-3xl font-bold mb-4"></h1>
                <input type="text" name="projectName" placeholder="Wat is de naam van het project?" required>
            </span>
        </div>
        <div class="embed-responsive embed-responsive-21by9 relative w-full overflow-hidden" style="padding-top: 42.857143%">
            <img class="embed-responsive-item absolute bottom-0 left-0 right-0 top-0 h-full w-full"  src='/images/gradient.svg' allowfullscreen="" data-gtm-yt-inspected-2340190_699="true" id="240632615">
        
            </div>
            <div class="bg-white p7 rounded w-9/12 mx-auto">
                <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
            
                <div x-data="dataFileDnD()" class="relative flex flex-col p-4 text-gray-400 border border-gray-200 rounded">
                    <div x-ref="dnd"
                        class="relative flex flex-col text-gray-400 border border-gray-200 border-dashed rounded cursor-pointer">
                        <input accept="*" type="file" multiple
                            class="absolute inset-0 z-50 w-full h-full p-0 m-0 outline-none opacity-0 cursor-pointer"
                            @change="addFiles($event)"
                            @dragover="$refs.dnd.classList.add('border-blue-400'); $refs.dnd.classList.add('ring-4'); $refs.dnd.classList.add('ring-inset');"
                            @dragleave="$refs.dnd.classList.remove('border-blue-400'); $refs.dnd.classList.remove('ring-4'); $refs.dnd.classList.remove('ring-inset');"
                            @drop="$refs.dnd.classList.remove('border-blue-400'); $refs.dnd.classList.remove('ring-4'); $refs.dnd.classList.remove('ring-inset');"
                            title="" name="thumbnail" />
                
                        <div class="flex flex-col items-center justify-center py-10 text-center">
                            <svg class="w-6 h-6 mr-1 text-current-50" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <p class="m-0">Drag your files here or click in this area.</p>
                        </div>
                    </div>
                
                    <template x-if="files.length > 0">
                        <div class="grid grid-cols-2 gap-4 mt-4 md:grid-cols-6" @drop.prevent="drop($event)"
                            @dragover.prevent="$event.dataTransfer.dropEffect = 'move'">
                            <template x-for="(_, index) in Array.from({ length: files.length })">
                                <div class="relative flex flex-col items-center overflow-hidden text-center bg-gray-100 border rounded cursor-move select-none"
                                    style="padding-top: 100%;" @dragstart="dragstart($event)" @dragend="fileDragging = null"
                                    :class="{'border-blue-600': fileDragging == index}" draggable="true" :data-index="index">
                                    <button class="absolute top-0 right-0 z-50 p-1 bg-white rounded-bl focus:outline-none" type="button" @click="remove(index)">
                                        <svg class="w-4 h-4 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                    <template x-if="files[index].type.includes('audio/')">
                                        <svg class="absolute w-12 h-12 text-gray-400 transform top-1/2 -translate-y-2/3"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                                        </svg>
                                    </template>
                                    <template x-if="files[index].type.includes('application/') || files[index].type === ''">
                                        <svg class="absolute w-12 h-12 text-gray-400 transform top-1/2 -translate-y-2/3"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                        </svg>
                                    </template>
                                    <template x-if="files[index].type.includes('image/')">
                                        <img class="absolute inset-0 z-0 object-cover w-full h-full border-4 border-white preview"
                                            x-bind:src="loadFile(files[index])" />
                                    </template>
                                    <template x-if="files[index].type.includes('video/')">
                                        <video
                                            class="absolute inset-0 object-cover w-full h-full border-4 border-white pointer-events-none preview">
                                            <fileDragging x-bind:src="loadFile(files[index])" type="video/mp4">
                                        </video>
                                    </template>
                
                                    <div class="absolute bottom-0 left-0 right-0 flex flex-col p-2 text-xs bg-white bg-opacity-50">
                                        <span class="w-full font-bold text-gray-900 truncate"
                                            x-text="files[index].name">Loading</span>
                                        <span class="text-xs text-gray-900" x-text="humanFileSize(files[index].size)">...</span>
                                    </div>
                
                                    <div class="absolute inset-0 z-40 transition-colors duration-300" @dragenter="dragenter($event)"
                                        @dragleave="fileDropping = null"
                                        :class="{'bg-blue-200 bg-opacity-80': fileDropping == index && fileDragging != index}">
                                    </div>
                                </div>
                            </template>
                        </div>
                    </template>
                </div>
                </div>
                
                <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
                <script src="https://unpkg.com/create-file-list"></script>
                <script>
                function dataFileDnD() {
                    return {
                        files: [],
                        fileDragging: null,
                        fileDropping: null,
                        humanFileSize(size) {
                            const i = Math.floor(Math.log(size) / Math.log(1024));
                            return (
                                (size / Math.pow(1024, i)).toFixed(2) * 1 +
                                " " +
                                ["B", "kB", "MB", "GB", "TB"][i]
                            );
                        },
                        remove(index) {
                            let files = [...this.files];
                            files.splice(index, 1);
                
                            this.files = createFileList(files);
                        },
                        drop(e) {
                            let removed, add;
                            let files = [...this.files];
                
                            removed = files.splice(this.fileDragging, 1);
                            files.splice(this.fileDropping, 0, ...removed);
                
                            this.files = createFileList(files);
                
                            this.fileDropping = null;
                            this.fileDragging = null;
                        },
                        dragenter(e) {
                            let targetElem = e.target.closest("[draggable]");
                
                            this.fileDropping = targetElem.getAttribute("data-index");
                        },
                        dragstart(e) {
                            this.fileDragging = e.target
                                .closest("[draggable]")
                                .getAttribute("data-index");
                            e.dataTransfer.effectAllowed = "move";
                        },
                        loadFile(file) {
                            const preview = document.querySelectorAll(".preview");
                            const blobUrl = URL.createObjectURL(file);
                
                            preview.forEach(elem => {
                                elem.onload = () => {
                                    URL.revokeObjectURL(elem.src); // free memory
                                };
                            });
                
                            return blobUrl;
                        },
                        addFiles(e) {
                            const files = createFileList([...this.files], [...e.target.files]);
                            this.files = files;
                            this.form.formData.files = [...files];
                        }
                    };
                }
                </script>
            
    </div>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
        <section class="py-16">
            <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
            <div class="container px-4 mx-auto">
                <div class="flex flex-wrap mb-32 -mx-8">
                    <div class="w-full lg:w-1/2 px-8">
                        <h2 class="text-3xl lg:text-5xl font-bold font-heading mb-20 max-w-xs lg:max-w-lg">Inleiding</h2>
                    </div>
                    <div class="w-full lg:w-1/2 px-8">
                        <p class="text-gray-600 text-lg mb-10"><span>
                            <input type="text" name="introduction" placeholder="Hier komt een super leuke inleiding">
                        </span></p>
                        <span><img class="rounded-3xl w-full mb-24" src="/images/gradient.svg" alt="">
<div class="bg-white p7 rounded w-9/12 mx-auto">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    <div x-data="dataFileDnD()" class="relative flex flex-col p-4 text-gray-400 border border-gray-200 rounded">
        <div x-ref="dnd"
            class="relative flex flex-col text-gray-400 border border-gray-200 border-dashed rounded cursor-pointer">
            <input accept="*" type="file" multiple
                class="absolute inset-0 z-50 w-full h-full p-0 m-0 outline-none opacity-0 cursor-pointer"
                @change="addFiles($event)"
                @dragover="$refs.dnd.classList.add('border-blue-400'); $refs.dnd.classList.add('ring-4'); $refs.dnd.classList.add('ring-inset');"
                @dragleave="$refs.dnd.classList.remove('border-blue-400'); $refs.dnd.classList.remove('ring-4'); $refs.dnd.classList.remove('ring-inset');"
                @drop="$refs.dnd.classList.remove('border-blue-400'); $refs.dnd.classList.remove('ring-4'); $refs.dnd.classList.remove('ring-inset');"
                title="" name="projectImage" />
    
            <div class="flex flex-col items-center justify-center py-10 text-center">
                <svg class="w-6 h-6 mr-1 text-current-50" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <p class="m-0">Drag your files here or click in this area.</p>
            </div>
        </div>
    
        <template x-if="files.length > 0">
            <div class="grid grid-cols-2 gap-4 mt-4 md:grid-cols-6" @drop.prevent="drop($event)"
                @dragover.prevent="$event.dataTransfer.dropEffect = 'move'">
                <template x-for="(_, index) in Array.from({ length: files.length })">
                    <div class="relative flex flex-col items-center overflow-hidden text-center bg-gray-100 border rounded cursor-move select-none"
                        style="padding-top: 100%;" @dragstart="dragstart($event)" @dragend="fileDragging = null"
                        :class="{'border-blue-600': fileDragging == index}" draggable="true" :data-index="index">
                        <button class="absolute top-0 right-0 z-50 p-1 bg-white rounded-bl focus:outline-none" type="button" @click="remove(index)">
                            <svg class="w-4 h-4 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </button>
                        <template x-if="files[index].type.includes('audio/')">
                            <svg class="absolute w-12 h-12 text-gray-400 transform top-1/2 -translate-y-2/3"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                            </svg>
                        </template>
                        <template x-if="files[index].type.includes('application/') || files[index].type === ''">
                            <svg class="absolute w-12 h-12 text-gray-400 transform top-1/2 -translate-y-2/3"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                        </template>
                        <template x-if="files[index].type.includes('image/')">
                            <img class="absolute inset-0 z-0 object-cover w-full h-full border-4 border-white preview"
                                x-bind:src="loadFile(files[index])" />
                        </template>
                        <template x-if="files[index].type.includes('video/')">
                            <video
                                class="absolute inset-0 object-cover w-full h-full border-4 border-white pointer-events-none preview">
                                <fileDragging x-bind:src="loadFile(files[index])" type="video/mp4">
                            </video>
                        </template>
    
                        <div class="absolute bottom-0 left-0 right-0 flex flex-col p-2 text-xs bg-white bg-opacity-50">
                            <span class="w-full font-bold text-gray-900 truncate"
                                x-text="files[index].name">Loading</span>
                            <span class="text-xs text-gray-900" x-text="humanFileSize(files[index].size)">...</span>
                        </div>
    
                        <div class="absolute inset-0 z-40 transition-colors duration-300" @dragenter="dragenter($event)"
                            @dragleave="fileDropping = null"
                            :class="{'bg-blue-200 bg-opacity-80': fileDropping == index && fileDragging != index}">
                        </div>
                    </div>
                </template>
            </div>
        </template>
    </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://unpkg.com/create-file-list"></script>
    <script>
    function dataFileDnD() {
        return {
            files: [],
            fileDragging: null,
            fileDropping: null,
            humanFileSize(size) {
                const i = Math.floor(Math.log(size) / Math.log(1024));
                return (
                    (size / Math.pow(1024, i)).toFixed(2) * 1 +
                    " " +
                    ["B", "kB", "MB", "GB", "TB"][i]
                );
            },
            remove(index) {
                let files = [...this.files];
                files.splice(index, 1);
    
                this.files = createFileList(files);
            },
            drop(e) {
                let removed, add;
                let files = [...this.files];
    
                removed = files.splice(this.fileDragging, 1);
                files.splice(this.fileDropping, 0, ...removed);
    
                this.files = createFileList(files);
    
                this.fileDropping = null;
                this.fileDragging = null;
            },
            dragenter(e) {
                let targetElem = e.target.closest("[draggable]");
    
                this.fileDropping = targetElem.getAttribute("data-index");
            },
            dragstart(e) {
                this.fileDragging = e.target
                    .closest("[draggable]")
                    .getAttribute("data-index");
                e.dataTransfer.effectAllowed = "move";
            },
            loadFile(file) {
                const preview = document.querySelectorAll(".preview");
                const blobUrl = URL.createObjectURL(file);
    
                preview.forEach(elem => {
                    elem.onload = () => {
                        URL.revokeObjectURL(elem.src); // free memory
                    };
                });
    
                return blobUrl;
            },
            addFiles(e) {
                const files = createFileList([...this.files], [...e.target.files]);
                this.files = files;
                this.form.formData.files = [...files];
            }
        };
    }
    </script>
                        </span>
                        <p><span>
                            
                            <input type="text" name="caption" placeholder="Waarover gaat de afbeelding?" required>
                        
                        </span></p>

                    </div>
                </div>
                <div>
                <h3 class="text-2xl lg:text-4xl font-bold font-heading mb-20 max-w-xs lg:max-w-lg">Wat hield het project in?</h3>
                <p class="text-gray-600 text-lg mb-10">
                    <span>
                        
                        <textarea name="projectDescription" id="" cols="30" rows="10" placeholder="Waarover gaat het project?" required></textarea>

                    </span>

                </p>
                </div>
                <div>
                    <h3 class="text-2xl lg:text-4xl font-bold font-heading mb-20 max-w-xs lg:max-w-lg">Conclusie</h3>
                    <p class="text-gray-600 text-lg mb-10">

                        <span>
                            
                            <textarea name="conclusion" id="" cols="30" rows="10" placeholder="Wat is de conclusie van het project?" required></textarea>

                        </span>
                    </p>

                </div>


            </div>

        </section>

        <section class="py-16 bg-gray-100">
            <div class="container px-4 mx-auto">
                <h2 class="text-3xl lg:text-5xl font-bold font-heading mb-20 max-w-xs lg:max-w-lg">Deel dit project</h2>
                <div class="flex items-center">
                <a class="inline-block mr-3 p-1 hover:bg-orange-100 rounded-md" href="#">
                    <img src="/images/icon-linkedin.svg" alt="">
                  </a>

                    <a class="inline-block mr-3 p-1 hover:bg-orange-100 rounded-md" href="#">
                        <img src="/images/icon-facebook.svg" alt="">

                    </a>

                    <a class="inline-block mr-3 p-1 hover:bg-orange-100 rounded-md" href="#">
                        <img src="/images/icon-twitter.svg" alt="">

                    </a>

                    <a class="inline-block mr-3 p-1 hover:bg-orange-100 rounded-md" href="#">
                        <img src="/images/icon-instagram.svg" alt="">

                    </a>

                    <input type="text" name="projectLink" placeholder="Waar kan men je project vinden?">

                </div>

            </div>

        </section>

        <!--Tags-->

        <section class="py-16">
            <div class="container px-4 mx-auto">
                <h2 class="text-3xl lg:text-5xl font-bold font-heading mb-20 max-w-xs lg:max-w-lg">Tags</h2>
                <div class="flex items-center flex-row flex-wrap space-x-4">
                    <input type="text" name="tags" placeholder="Tags zoals PHP, HTML, TailwindCSS, ..." required>


                </div>

            </div>

        </section>

        <button type="submit">Sla op</button>

    </form>

    <script>

        //Kijk of er errors zijn
        let errors = document.querySelector('#errors');
        let form = document.querySelector('form');

        form.addEventListener('submit', function(e){
            errors.classList.remove('hidden');
        });

        //Klik op de img tag om een file te selecteren

        let fileInput = document.querySelectorAll('input[type="file"]');
        let img = document.querySelectorAll('img');

        img.forEach((img, index) => {
            img.addEventListener('click', function(){
                //verander muis naar pointer

                img.style.cursor = 'pointer';


                fileInput[index].click();
            });
        });







    </script>

</x-selectie._layout>

                


