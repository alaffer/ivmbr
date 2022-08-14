<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 92" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#FFFFFF">
                            <polygon class="st0" points="61.9,102.8 26.2,0.2 49.4,0.2 71.3,76.8 93.4,0.2 117.3,0.2 82.7,102.8 	"/>
                            <polygon class="st0" points="141.7,102.8 141.7,30.2 162.5,102.8 185.1,102.8 206,30.4 206,102.8 226.8,102.8 226.8,0.2 194.7,0.2 
                                173.9,76.9 152.9,0.2 121.8,0.2 121.8,102.8 	"/>
                            <rect x="0.2" y="0.2" class="st0" width="21.5" height="102.6"/>
                        </g>
                    </svg>
                    
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://apployee.ivm.at" class="underline text-gray-900 dark:text-white">IVM Betriebsrat Kassa</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Der IVM Betriebsrat ist der Beste von allen
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://apployee.ivm.at" class="underline text-gray-900 dark:text-white">Die Förderungen</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Der IVM Betriebsrat hat im Vorjahr in Summe €12153,78 für Förderungen und Mitarbeiter-Aktionen in Form von Gutscheinen ausgezahlt.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://apployee.ivm.at" class="underline text-gray-900 dark:text-white">Ivm BR News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Wir freuen uns mit Dir über geplante Hochzeiten und die Geburt eines Kindes und unterstützen Dich auch hier, ab einem Jahr Firmenzugehörigkeit, mit € 140. Sende uns die Heirats- oder Geburtsurkunde zu. Wir fördern Dich außerdem (max. zweimal pro Kalenderjahr) mit € 15, wenn Du bei Deinem eingesetzten Projekt an firmeninternen Events oder Veranstaltungen teilgenommen hast.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://apployee.ivm.at/home/workcouncil" class="underline text-gray-900 dark:text-white">Lass Dich fördern</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Wir fördern aktuell kulturelle und sportliche Aktivitäten sowie persönliche Weiterbildung und Deinen Weg zur Arbeit mit insgesamt max. € 70/Mitarbeiter*in/Jahr für höchstens zwei Bereiche, ab einem halben Jahr Firmenzugehörigkeit. Das heißt, der erste Bereich wird mit max. € 40 gefördert und ein weiterer Bereich mit weiteren € 30!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <g>
                                  <rect height="24" width="24" fill="#000000" />
                                  <path id="path1" transform="rotate(0,12,12) translate(4.45916052051304,4) scale(0.551876404960817,0.551876404960817)  " fill="#FFFFFF" d="M27.264005,28.095988C27.285001,28.395991,27.307005,28.693995,27.328001,28.991999L26.368009,28.991999C26.687986,28.714991,26.986997,28.415995,27.264005,28.095988z M21.44,20.959996C20.864988,20.981999 20.372984,21.189999 19.967985,21.583997 19.562986,21.979993 19.359983,22.474994 19.359983,23.072993 19.38101,23.882991 19.727995,24.485995 20.399992,24.879992 21.072996,25.275996 21.833982,25.247996 22.687986,24.799991 22.900999,24.671992 23.072996,24.501994 23.200986,24.287997 23.648008,23.435992 23.669004,22.677996 23.264005,22.015996 22.859006,21.355992 22.249998,21.002995 21.44,20.959996z M13.664,17.887997C14.346983,17.887997 15.029997,17.919995 15.712004,17.984998 15.092986,18.666997 14.613982,19.445996 14.272002,20.320996 13.930998,21.195996 13.748992,22.122998 13.727995,23.104991 13.748992,24.298991 13.999999,25.403994 14.48001,26.415995 14.95999,27.429995 15.626006,28.287989 16.480009,28.991999L0,28.991999C0.10699476,25.258998 1.4459838,22.474994 4.0159908,20.639996 6.5859981,18.805997 9.8030077,17.887997 13.664,17.887997z M20.480009,17.215993L22.399992,17.215993C22.50601,17.215993,22.570982,17.269994,22.592008,17.375996L22.719999,18.431996C23.124998,18.538998,23.509,18.699994,23.872007,18.912L24.449003,18.463994C24.55499,18.378995 24.677,18.341992 24.816007,18.352994 24.954008,18.363995 25.066984,18.410992 25.152006,18.495999L26.303983,19.648999C26.346983,19.711995,26.346983,19.787,26.303983,19.871999L25.631986,20.703999C25.82501,21.045995,25.97299,21.418996,26.079984,21.824994L27.167997,21.951993C27.252988,21.951993,27.307005,22.005994,27.328001,22.112996L27.328001,24.032992C27.307005,24.138995,27.252988,24.192996,27.167997,24.192996L26.079984,24.320994C25.97299,24.725993,25.812986,25.109996,25.600004,25.471995L26.303983,26.335994C26.368009,26.421992,26.368009,26.495997,26.303983,26.560992L24.928007,27.936992C24.864988,27.999995,24.788999,27.999995,24.704008,27.936992L23.807981,27.232997C23.445982,27.445994,23.061002,27.605998,22.657011,27.712001L22.528989,28.831996C22.50601,28.939998,22.453001,28.991999,22.368009,28.991999L20.449003,28.991999C20.341001,28.991999,20.277006,28.939998,20.25601,28.831996L20.127988,27.679988C19.764982,27.574,19.412992,27.423991,19.072996,27.232997L18.14401,27.936992C18.079984,27.999995,18.005003,27.999995,17.920011,27.936992L16.575986,26.560992C16.511991,26.495997,16.501005,26.421992,16.544004,26.335994L17.281004,25.407992C17.08801,25.087993,16.938993,24.746997,16.831998,24.383998L15.679991,24.255992C15.595,24.235995,15.552001,24.181994,15.552001,24.095996L15.552001,22.175998C15.552001,22.069997,15.595,22.005994,15.679991,21.984998L16.799985,21.856999C16.907011,21.471997,17.055997,21.098996,17.247984,20.736997L16.544004,19.871999C16.501005,19.787,16.511991,19.711995,16.575986,19.648999L17.920011,18.273C18.005003,18.207997,18.079984,18.207997,18.14401,18.273L19.007993,18.944997C19.369993,18.709996,19.764982,18.538998,20.191984,18.431996L20.320982,17.375996C20.341001,17.269994,20.394987,17.215993,20.480009,17.215993z M13.664,0C15.860991,0.042999261 17.691007,0.79000077 19.152006,2.2409967 20.613981,3.6920007 21.365995,5.5149983 21.408994,7.7119964 21.365995,9.8879984 20.613981,11.700994 19.152006,13.152998 17.691007,14.603993 15.860991,15.360997 13.664,15.423993 11.467009,15.360997 9.636992,14.603993 8.1759945,13.152998 6.7139884,11.700994 5.9620052,9.8879984 5.920013,7.7119964 5.9620052,5.5149983 6.7139884,3.6920007 8.1759945,2.2409967 9.636992,0.79000077 11.467009,0.042999261 13.664,0z" />
                                </g>
                              </svg>
                              
                            <a href="{{ url('/br') }}" class="ml-1 underline">
                                BR-Kassa
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
