<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=">
  <title>Hirehero</title>
</head>
<body class="">
  
  
  <main class="main bg-white px-6 md:px-16 py-6">
    <div class="w-full max-w-xl mx-auto">
      <form action="{{route('vacature.store2')}}" method="post">
        <h1 class="text-2xl mb-2">Wil je een vacature plaatsen?</h1>
        <p class="text-gray-600 mb-6">Door de vacatures zo specifiek mogelijk in te vullen, zullen wij u ook de beste matches kunnen bezorgen.</p>
        
        <div class="job-info border-b-2 py-2 mb-5">
          <!-- Title -->
          <div class="my-4">
              <label class="block text-gray-700 text-sm mb-2" for="job-title">Titel</label>
              <label for="hs-trailing-button-add-on" class="sr-only">Label</label>
              <div class="flex rounded-lg shadow-sm">
                  <input type="text" id="title" name="title" placeholder="Titel van vacature" class="py-3 px-4 block w-full border-gray-200 shadow-sm rounded-s-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
              </div>
          </div>



          <!--     Link to apply     -->
          <div class="flex flex-col h-min justify-start">

          
          <div class="my-4">
            <label class="block text-gray-700 text-sm mb-2" for="job-title">Geef minstens 3 skills in</label>
        
            <label for="hs-trailing-button-add-on" class="sr-only">Label</label>
            <div class="flex rounded-lg shadow-sm">
                <input type="text" id="hs-trailing-button-add-on" name="minimumSkills" placeholder="Geef skills in" class="py-3 px-4 block w-full border-gray-200 shadow-sm rounded-s-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                <button type="button" onclick="addSkill()" class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-e-md border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600 max-w-xs">
                    Voeg toe
                </button>
            </div>
        </div>
        
          
            <div class="my-4">
              <div class='px-2 pt-2 pb-11 mb-3 flex flex-wrap rounded-lg bg-purple-200 dark:bg-gray-400' id="skillContainer">
                <span
                  class="flex flex-wrap pl-4 pr-2 py-2 m-1 justify-between items-center text-sm font-medium rounded-xl cursor-pointer bg-purple-500 text-gray-200 hover:bg-purple-600 hover:text-gray-100 dark:bg-gray-700 dark:text-gray-200 dark:hover:bg-gray-800 dark:hover:text-gray-100">
                  UI/UX
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-3 hover:text-gray-300" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                      clip-rule="evenodd" />
                  </svg>
                </span>
                <span
                  class="flex flex-wrap pl-4 pr-2 py-2 m-1 justify-between items-center text-sm font-medium rounded-xl cursor-pointer bg-purple-500 text-gray-200 hover:bg-purple-600 hover:text-gray-100 dark:bg-gray-700 dark:text-gray-200 dark:hover:bg-gray-800 dark:hover:text-gray-100">
                  Graphic Designing
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-3 hover:text-gray-300" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                      clip-rule="evenodd" />
                  </svg>
                </span>
                <span
                  class="flex flex-wrap pl-4 pr-2 py-2 m-1 justify-between items-center text-sm font-medium rounded-xl cursor-pointer bg-purple-500 text-gray-200 hover:bg-purple-600 hover:text-gray-100 dark:bg-gray-700 dark:text-gray-200 dark:hover:bg-gray-800 dark:hover:text-gray-100">
                  Web Designing
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-3 hover:text-gray-300" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                      clip-rule="evenodd" />
                  </svg>
                </span>
              </div>
          
            </div>
          </div>




          <div class="md:flex md:justify-between">

            <!-- Location -->
            <div class="w-full md:w-8/12 mb-4 md:mb-0">
                <div class="my-4">
                    <label for="location" class="block text-gray-700 text-sm mb-2">Locatie</label>
                    <label for="hs-trailing-button-add-on" class="sr-only">Label</label>
                    <div class="flex rounded-lg shadow-sm">
                        <input type="text" id="location" name="location" placeholder="Locatie" class="py-3 px-4 w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                    </div>
                </div>
        
                <div class="flex items-center my-4">
                  <input type="checkbox" id="remote-work" name="remote-work" class="form-checkbox h-5 w-5 text-blue-500 rounded-sm focus:ring-blue-400 focus:ring-offset-gray-100 checked:bg-[#97CAF9] checked:border-transparent focus:ring-[#97CAF9] hover:bg-[#C4E4FF] hover:border-transparent">
                  <label for="remote-work" class="ml-2 text-sm text-gray-700">Werk kan (deels) van thuis gedaan worden</label>
              </div>
              
            </div>
        </div>
        
        

          <!--    Description      -->
          <div class="mb-4">
            <label for="description" class="block text-gray-700 text-sm mb-2">Beschrijving</label>
            <textarea name="description" id="description" class="w-full h-32 px-3 py-2 text-sm text-gray-700 border border-gray-200 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-blue-500 resize-none" placeholder="Voeg hier de beschrijving toe"></textarea>
        </div>
        
        
        
        

        <div class="my-6">
          <div class="flex flex-col h-min justify-start">
              <div class="w-full">
                  <div class="mb-4">
                      <label class="block text-gray-700 text-sm mb-2" for="job-title">Voeg hier je gewenste persoonlijkheidskenmerken toe</label>
                      <input class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-gray-500" type="text" id="job-title" name="job-title" placeholder="tailwindcss" autofocus>
                  </div>
      
                  <div class="px-2 pt-2 pb-11 mb-3 flex flex-wrap rounded-lg bg-purple-200 dark:bg-gray-400">
                      <span class="flex flex-wrap pl-4 pr-2 py-2 m-1 justify-between items-center text-sm font-medium rounded-xl cursor-pointer bg-purple-500 text-gray-200 hover:bg-purple-600 hover:text-gray-100 dark:bg-gray-700 dark:text-gray-200 dark:hover:bg-gray-800 dark:hover:text-gray-100">
                          Stressbestendig
      
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-3 hover:text-gray-300" viewBox="0 0 20 20" fill="currentColor">
                              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                          </svg>
                      </span>
                      <span class="flex flex-wrap pl-4 pr-2 py-2 m-1 justify-between items-center text-sm font-medium rounded-xl cursor-pointer bg-purple-500 text-gray-200 hover:bg-purple-600 hover:text-gray-100 dark:bg-gray-700 dark:text-gray-200 dark:hover:bg-gray-800 dark:hover:text-gray-100">
                          Assertief
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-3 hover:text-gray-300" viewBox="0 0 20 20" fill="currentColor">
                              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                          </svg>
                      </span>
                      <span class="flex flex-wrap pl-4 pr-2 py-2 m-1 justify-between items-center text-sm font-medium rounded-xl cursor-pointer bg-purple-500 text-gray-200 hover:bg-purple-600 hover:text-gray-100 dark:bg-gray-700 dark:text-gray-200 dark:hover:bg-gray-800 dark:hover:text-gray-100">
                          Deadlinewerker
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-3 hover:text-gray-300" viewBox="0 0 20 20" fill="currentColor">
                              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                          </svg>
                      </span>
                  </div>
              </div>
          </div>
      </div>
      
      
       




      <div class="max-w-md mb-4">
        <label for="select" class="block py-2">Kies categorie:</label>
    
        <div class="relative">
            <div class="h-10 bg-white flex border border-gray-400 rounded items-center shadow-md">
                <input value="Marketing" name="categorie" id="select" class="px-4 appearance-none outline-none text-gray-800 w-full" checked />
    
                <button aria-label="Toggle options" class="cursor-pointer outline-none focus:outline-none transition-all text-gray-300 hover:text-gray-600 bg-transparent">
                    <svg class="w-4 h-4 mx-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
                <label for="show_more" class="cursor-pointer outline-none focus:outline-none border-l border-gray-400 transition-all text-gray-300 hover:text-gray-600 bg-transparent">
                    <svg class="w-4 h-4 mx-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="18 15 12 9 6 15"></polyline>
                    </svg>
                </label>
            </div>
    
            <input type="checkbox" name="categorie" id="show_more" class="hidden peer" checked/>
            <div class="absolute rounded shadow bg-white overflow-hidden hidden peer-checked:flex flex-col w-full mt-1 border border-gray-400">
                <div class="cursor-pointer group">
                    <a onclick="updateCheckboxValue('Design')" class="block p-2 border-transparent border-l-4 group-hover:border-blue-600 group-hover:bg-gray-100 transition-colors duration-200">Design</a>
                </div>
                <div class="cursor-pointer group border-t">
                    <a onclick="updateCheckboxValue('Marketing')" class="block p-2 border-transparent border-l-4 group-hover:border-blue-600 border-blue-600 group-hover:bg-gray-100 transition-colors duration-200">Marketing</a>
                </div>
                <div class="cursor-pointer group border-t">
                    <a onclick="updateCheckboxValue('Multimedia')" class="block p-2 border-transparent border-l-4 group-hover:border-blue-600 group-hover:bg-gray-100 transition-colors duration-200">Multimedia</a>
                </div>
                <div class="cursor-pointer group border-t">
                    <a onclick="updateCheckboxValue('Landbouw')" class="block p-2 border-transparent border-l-4 group-hover:border-blue-600 group-hover:bg-gray-100 transition-colors duration-200">Landbouw</a>
                </div>
            </div>
        </div>
    </div>
  
    




    <form class="max-w-sm mx-auto mb-4">
      <label for="number-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Aantal stageplaatsen:</label>
      <input type="number" id="number-input" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="3" required>
  </form>
  



      <div class="my-6">
        <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">Video CV</h3>
        <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
          <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600 py-4">
            <div class="flex items-center px-3">
              <input id="vue-checkbox-list" type="checkbox" value="Verplicht" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-[#97CAF9] dark:focus:ring-[#97CAF9] dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500 hover:bg-[#C4E4FF] hover:border-transparent" checked>
              <label for="vue-checkbox-list" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Verplicht</label>
            </div>
          </li>
          <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600 py-4">
            <div class="flex items-center px-3">
              <input id="react-checkbox-list" type="checkbox" value="Optioneel" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-[#97CAF9] dark:focus:ring-[#97CAF9] dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500 hover:bg-[#C4E4FF] hover:border-transparent">
              <label for="react-checkbox-list" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Optioneel</label>
            </div>
          </li>
          <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600 py-4">
            <div class="flex items-center px-3">
              <input id="angular-checkbox-list" type="checkbox" value="Niet toegestaan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-[#97CAF9] dark:focus:ring-[#97CAF9] dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500 hover:bg-[#C4E4FF] hover:border-transparent">
              <label for="angular-checkbox-list" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Niet toegestaan</label>
            </div>
          </li>
        </ul>
      </div>
 
      
                <!--      Company Website      -->
          <div class="mb-4 md:mb-0">
            <label for="company-logo" class="block text-gray-700 text-sm mb-2">Logo afbeelding</label>
          </div>
          <div class="bg-white p7 rounded w-full mx-auto">
            <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
        
            <div x-data="dataFileDnD()" class="relative flex flex-col p-4 text-gray-400 border border-gray-200 rounded">
                <div x-ref="dnd"
                    class="relative flex flex-col text-gray-400 border border-gray-200 border-dashed rounded cursor-pointer">
                    <input accept="*" type="file" multiple name="logo"
                        class="absolute inset-0 z-50 w-full h-full p-0 m-0 outline-none opacity-0 cursor-pointer"
                        @change="addFiles($event)"
                        @dragover="$refs.dnd.classList.add('border-blue-400'); $refs.dnd.classList.add('ring-4'); $refs.dnd.classList.add('ring-inset');"
                        @dragleave="$refs.dnd.classList.remove('border-blue-400'); $refs.dnd.classList.remove('ring-4'); $refs.dnd.classList.remove('ring-inset');"
                        @drop="$refs.dnd.classList.remove('border-blue-400'); $refs.dnd.classList.remove('ring-4'); $refs.dnd.classList.remove('ring-inset');"
                        title="" />
            
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


            function addSkill() {

                //Krijg inputvalue
                let skillInput = document.getElementById('hs-trailing-button-add-on');
                let skillValue = skillInput.value;

                //Maak een nieuw skill element aan
                let skillElement = document.createElement('span');
                skillElement.className = "flex flex-wrap pl-4 pr-2 py-2 m-1 justify-between items-center text-sm font-medium rounded-xl cursor-pointer bg-purple-500 text-gray-200 hover:bg-purple-600 hover:text-gray-100 dark:bg-gray-700 dark:text-gray-200 dark:hover:bg-gray-800 dark:hover:text-gray-100";
                //De svg moet nog toegevoegd worden


                skillElement.innerHTML = skillValue;

                let svgElement = document.createElementNS("http://www.w3.org/2000/svg", "svg");
                svgElement.setAttribute("class", "h-5 w-5 ml-3 hover:text-gray-300");
                svgElement.setAttribute("xmlns", "http://www.w3.org/2000/svg");
                svgElement.setAttribute("fill", "currentColor");                
                svgElement.setAttribute("viewBox", "0 0 20 20");

                let pathElement = document.createElementNS("http://www.w3.org/2000/svg", "path");
                pathElement.setAttribute("fill-rule", "evenodd");
                pathElement.setAttribute("d", "M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z");
                pathElement.setAttribute("clip-rule", "evenodd");

                svgElement.appendChild(pathElement);

                skillElement.appendChild(svgElement);



                //Append skill element aan container

                let skillContainer = document.querySelector('#skillcontainer');
                console.log(skillContainer);
                skillContainer.appendChild(skillElement);
                skillInput.value = "";

                //Ik wil dat deze skills opgeslagen worden in een array en dat deze array dan naar de backend gestuurd wordt zodat ik er met laravel mee kan werken

                let skills = [];

                skills.push(skillValue);

                console.log(skills);




            
            }

            function updateCheckboxValue(value) {
                let checkbox = document.getElementById('show-more');
                
                checkbox.value = value;
            } 



            </script>
<br>
        
        <div role="alert">
          <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
            Let op
          </div>
          <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
            <p>U kan geen vacature uploaden als u niet betaald hebt.</p>
          </div>
        </div>

        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
          Selecteer abonnementsformule
        </button>
      
      
        <br>
        <!--     Submit     -->
        <div>
          <button class="bg-[#97CAF9] hover:bg-teal-600 text-white py-2 px-3 rounded" type="submit">Plaats vacature</button>
        </div><br>
        <div>
          <button class="border border-[#9080FC] text-[#9080FC] hover:bg-teal-600 hover:border-teal-600 hover:text-white py-2 px-3 rounded" type="submit">Bekijk voorbeeld</button>
        </div>
        
      </form>
    </div>
  </main>
</body>
</html>







<style>
    .dropdown:hover .dropdown-menu {
  display: block;
}

.dropdown-menu {
  right: 0px;
  top: 65px;
}

</style>


<script>
    let simpleMde = new SimpleMDE({
  element: document.getElementById("description")
})
</script>