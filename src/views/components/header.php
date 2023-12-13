<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="src/views/assets/images/ICO.png" type="image/x-icon" />
    <link rel="stylesheet" href="./dist/output.css" />
    <title>Ibconstruye</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css" />
    
</head>

<body>

    <!-- Header -->
    <header class="fixed flex flex-row justify-center h-20 w-screen bg-[#E9A825] z-10 shadow-lg shadow-yellow-700">
        <nav class="w-9/12 flex justify-between items-center relative">
            <figure>
                <a href="index.php"><img src="src/views/assets/images/ibconstruye.png" alt="logo ibConstruye"
                        class="w-40 h-14 sm:w-48 sm:h-14 md:w-56 md:h-16 hover:scale-105 duration-500" /></a>
            </figure>

            <ul class="hidden lg:flex flex-row gap-x-6 list-none font-bold transition-transform pe-6 cursor-pointer">
                <li class="hover:scale-110 duration-300 hover:text-red-800"><a href="index.php"><i
                            class="bi bi-house me-1 "></i>Inicio</a></li>
                <li class="hover:scale-110 duration-300 hover:text-red-800"><a href="index.php#nosotros"><i
                            class="bi bi-buildings me-1"></i>Nosotros</a></li>
                <li class="hover:scale-110 duration-300 hover:text-red-800"><a href="index.php#servicios"><i
                            class="bi bi-gear me-1"></i>Servicios</a></li>
                <li class="hover:scale-110 duration-300 hover:text-red-800"><a href="?page=contacto"><i
                            class="bi bi-journals me-1"></i>Contacto</a></li>
            </ul>

            <!-- Button movile -->
            <div class="block lg:hidden">
                <button id="button_menu" type="button" class="focus:outline-none">
                    <i class="bi bi-list text-black border-2 border-black/50 rounded-lg px-2 text-2xl md:text-3xl"></i>
                </button>

                <!-- Movile menu -->
                <div id="movile_list"
                    class="absolute top-0 translate-x-44 h-screen w-80 flex flex-col items-start bg-gray-950 z-30 border-l-[1px] border-gray-600 text-white transition-transform duration-[1200ms]">
                    <button id="button_close_menu" class="pt-3 ps-5">
                        <i class="bi bi-x-lg text-2xl"></i>
                    </button>
                    <h3 class="pt-6 mb-12 ms-11 md:ms-14 border-b border-white text-md md:text-lg">¿Que es lo que
                        buscas?</h3>
                    <ul class="text-md md:text-lg overflow-hidden flex flex-col gap-7 ps-11 md:ps-14">
                        <li><i class="bi bi-house me-5"></i><a id="click_direction" href="index.php">Inicio</a></li>
                        <li><i class="bi bi-buildings me-5"></i><a id="click_direction" href="index.php#nosotros">Nosotros</a>
                        </li>
                        <li><i class="bi bi-gear me-5"></i><a id="click_direction" href="index.php#servicios">Servicios</a></li>
                        <li><i class="bi bi-journals me-5"></i><a id="click_direction" href="?page=contacto">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Opcity Menu -->
        <div id="menu_opacity"
            class="hidden lg:hidden absolute w-screen top-0 backdrop-filter backdrop-blur-[3px] bg-black/80 h-screen z-20">
        </div>
    </header>