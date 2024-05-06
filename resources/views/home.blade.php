<html>
    <head>
        <title> Cine Dev </title>
        @vite('resources/css/app.css')
    </head>
    <body>
        <div class="w-full h-auto min-h-screen flex flex-col">
            <div class="w-full bg-white h-[96px] drop-shadow-lg flex flex-row items-center">
                <div class="w-1/3 pl-5">
                    <a href="/movies" class="uppercase text-base mx-5 text-black hover:text-develobe-500 duration-200 fonte-inter">Movies</a>
                    <a href="/tv-shows"  class="uppercase text-base mx-5 text-black hover:text-develobe-500 duration-200 fonte-inter">TV-Shows</a>
                </div>

                <div class="w-1/3 flex items-center justify-center bg-red-100">
                 B   
                </div> 

                <div class="w-1/3 flex flex-row justify-end pr-10 bg-yellow-100">
                C    
                </div>  
            </div>
        </div>
    </body>
</html>