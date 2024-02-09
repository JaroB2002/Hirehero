<!DOCTYPE html>
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hirehero Dashboard - Vacatures</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/dashboard.css">
  </head>
  <body>
     
        <main class="h-full pb-16 overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Jouw vacatures
            </h2>
  
            <h2
            class="my-6 text-1xl text-gray-700 dark:text-gray-200"
          >
          Hier kan je al je gemaakte vacatures bekijken
          </h2>
           
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                      <th class="px-4 py-3">Rol</th>
                      <th class="px-4 py-3">Status sollicatie</th>
                      <th class="px-4 py-3">Publicatiedatum</th>
                      <th class="px-4 py-3">Einddatum</th>
                      <th class="px-4 py-3">Sollicitanten</th>
                      <th class="px-4 py-3">Acties</th>

                    </tr>
                  </thead>
                  <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                  >
                  @foreach($vacatures as $vacature)
                  <tr class="text-gray-700 dark:text-gray-400" style="background-color: #C4E4F7;">
                    <td class="px-4 py-3">
                        <div class="flex items-center text-sm">   
                        
                          </div>
                          <div>
                            <a href="/bedrijf/vacature/{{$vacature->id}}">
                                <p class="font-semibold">{{$vacature->title}}</p>
                            </a>

                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3 text-xs">
                        <span>
                        
                <form action="{{route('vacature.status')}}" method="POST" class="statusForm ">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="vacature_id" value="{{$vacature->id}}">

                                <select name="status" id="" class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                    <option value="open" {{$vacature->status === "live" ? 'selected' :''}}>Live</option>
                                    <option value="gesloten" {{$vacature->status === "gesloten" ? 'selected' :''}}>Gesloten</option>
                                    <option value="verborgen" {{$vacature->status === "verborgen" ? 'selected' :''}}>Verborgen</option>  
                                   </select>


                            </form>   </span>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        {{$vacature->created_at->format('d/m/Y')}}
                      </td>

                      <td class="px-4 py-3 text-sm">
                        {{$vacature->endDate->format('d/m/Y')}}
                      </td>
                      <td class="px-4 py-3 text-sm">
                        <span
                        class="px-2 py-1 font-medium leading-tight text-blue-600 bg-blue-100 rounded-full dark:bg-blue-700 dark:text-blue-100"
                      >
                      26
                      </span>                      
                    </td>
                    <td class="px-4 py-3 text-sm">
                        <div style="display: flex; align-items: center;">
                            <img src="/images/eye.svg" alt="Oogicoon" style="margin-right: 5px;">
                            <img src="/images/trash-2.svg" alt="Prullenbakicoon" style="margin-left: 5px;">
                        </div>
                    </td>
                    </tr>

@endforeach                    
                  </tbody>
                </table>
              </div>
              <div
                class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
              >
                <span class="flex items-center col-span-3">
                  Je bekijkt {{$vacatures->firstItem()}} to {{$vacatures->lastItem()}} of {{$vacatures->total()}} vacatures
                </span>
                <span class="col-span-2"></span>
                <!-- Pagination -->
                <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                  <nav aria-label="Table navigation">
                    <ul class="inline-flex items-center">
                      <li>
                        <button
                          class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                          aria-label="Previous"
                        >
                          <svg
                            aria-hidden="true"
                            class="w-4 h-4 fill-current"
                            viewBox="0 0 20 20"
                          >
                            <path
                              d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                              clip-rule="evenodd"
                              fill-rule="evenodd"
                            ></path>
                          </svg>
                        </button>
                      </li>
                        <li>
                            @for ($i = 1; $i <= $vacatures->lastPage(); $i++)
                            <button
                            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple @if($vacatures->currentPage() == $i) bg-purple-500 text-white @endif"
                            >
                            <a href="{{$vacatures->url($i)}}">{{$i}}</a>
                            
                            </button>

                            @endfor
                        </li>
                      <li>
                        <button
                          class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                          aria-label="Next"
                        >
                          <svg
                            class="w-4 h-4 fill-current"
                            aria-hidden="true"
                            viewBox="0 0 20 20"
                          >
                            <path
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"
                              fill-rule="evenodd"
                            ></path>
                          </svg>

                          {{--Ga naar pagina 2 van de --}}
                        </button>
                      </li>
                    </ul>
                  </nav>
                </span>
              </div>
            </div>
        </main>
      </div>
    </div>

    <script>
        //Verander de status
        let statusForm = document.querySelectorAll(".statusForm");

        for (let i = 0; i < statusForm.length; i++) {
            statusForm[i].addEventListener('change', (e)=> {


                statusForm[i].submit();


            })
        }


        











    
    </script>

  </body>
</html>












<style>
    tr.text-gray-700:hover,
    tr.dark\:text-gray-400:hover {
      background-color: #97CAF9 !important; /* Kleur voor hover */
    }
    
    </style>