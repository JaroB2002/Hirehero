<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

       
    </head>
    <body class="">

        <img src="./images/logoHirehero.png" alt="">
        <h1>Registreren</h1>
        <p>Vul dit formulier in met de benodigde informatie</p>

        <main>

            <!--Status van registratie, Account type, persoonlijke info, profieldata-->

            <div class="status">

                <div>
                    <div>
                        <p>1</p>
                    </div>
                    <p>Account type</p>

                </div>

                <div>
                    <div>
                        <p>2</p>
                    </div>
                    <p>Persoonlijlke informatie</p>

                </div>
                <div>
                    <div>
                        <p>3</p>
                    </div>
                    <p>Profieldata</p>

                </div>
            </div>

            <div class="mt-6 space-y-8 xl:mt-12">
                <div class="flex items-center justify-between max-w-2xl px-8 py-4 mx-auto border cursor-pointer rounded-xl dark:border-gray-700">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 sm:h-9 sm:w-9" viewBox="0 0 20 20" fill="currentColor" width="50">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>

                        <div class="flex flex-col items-center mx-5 space-y-1">
                            <img src="/images/businesscard.svg" alt="">
                            <h2 class="text-lg font-medium text-gray-700 sm:text-2xl dark:text-gray-200">Ik ben student</h2>
                            <div class="px-2 text-xs text-blue-500 bg-gray-100 rounded-full sm:px-4 sm:py-1 dark:bg-gray-700 ">
                                Ik wil de perfecte stageplaats vinden
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div class="flex items-center justify-between max-w-2xl px-8 py-4 mx-auto border border-blue-500 cursor-pointer rounded-xl">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-600 sm:h-9 sm:w-9" viewBox="0 0 20 20" fill="currentColor" width="50">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>

                        <div class="flex flex-col items-center mx-5 space-y-1">
                            <img src="/images/businesscard.svg" alt="">
                            <h2 class="text-lg font-medium text-gray-700 sm:text-2xl dark:text-gray-200">Ik ben een bedrijf</h2>
                            <div class="px-2 text-xs text-blue-500 bg-gray-100 rounded-full sm:px-4 sm:py-1 dark:bg-gray-700 ">
                                Ik zoek de perfecte stagiair
                            </div>
                        </div>
                    </div>
                    
                </div>

            

                <div class="flex justify-center">
                    <button disabled class="px-8 py-2 tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                        Volgende
                    </button>
                    <button disabled class="px-8 py-2 tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                        Vorige
                    </button>
                </div>
            </div>

        </main>
        
    </body>
</html>
