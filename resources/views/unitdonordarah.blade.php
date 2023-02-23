<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
        Unit Donor PMI Kabupaten Bojonegoro
    </title>
    <meta name="description" content="UDD PMI Bojonegoro" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
    <style>
        .gradient {
            background: linear-gradient(90deg, #ff0900 0%, #ff6c67 100%);
        }
    </style>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>
    <header class="fixed w-full">
        <div class="w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800">
            <div x-data="{ open: false }"
                class="flex flex-col max-w-screen-xl mx-auto md:items-center md:justify-between md:flex-row">
                <div class="p-4 flex flex-row items-center justify-between">
                    <a href="" class="flex items-center">
                        <img src={{ asset('assets/image/pmibjn.png') }} class="h-6 mr-3 sm:h-9" alt="PMI Logo" />

                    </a>
                    <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                            <path x-show="!open" fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                            <path x-show="open" fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <nav :class="{ 'flex': open, 'hidden': !open }"
                    class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
                    <a class="px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="#">Home</a>
                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="#">PMI Bojonegoro</a>
                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="#">Kontak</a>
                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="https://gis.pmibojonegoro.com">Webgis</a>
                    <div @click.away="open = false" class="relative" x-data="{ open: false }">
                        <button @click="open = !open"
                            class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                            <span>Informasi Publik</span>
                            <svg fill="currentColor" viewBox="0 0 20 20"
                                :class="{ 'rotate-180': open, 'rotate-0': !open }"
                                class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                            <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                    href="#">Profil</a>
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                    href="#">Sejarah</a>
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                    href="#">Pengurus</a>
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                    href="#">Kemitraaan</a>
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                    href="#">Visi dan Misi</a>
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                    href="#">Struktur Organisasi</a>
                            </div>
                        </div>
                    </div>
                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="#">PMI Bojonegoro</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Start block -->
    <section class="bg-white dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white">
                    Mari Bersinergi<br>Dalam Kemausiaan.</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    Kemanusiaan tidak mengenal batas negara, agama, dan ras. Kemanusiaan tumbuh dari keajaiban nurani.
                </p>

            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src={{ asset('assets/image/hero.png') }} alt="hero image">
            </div>
        </div>
    </section>
    <!-- End block -->
    <!-- Start block -->
    <section class="bg-gray-50 dark:bg-gray-800 py-8">
        <div class="pb-2">
            <h4 class="w-full my-2 text-4xl font-bold leading-tight text-center text-gray-800 dark:text-gray-400 b-1">
                Informasi stok darah siap pakai
            </h4>
            <h4 class="w-full my-2 text-2xl font-bold leading-tight text-center text-gray-800 dark:text-gray-400 b-1">
                UDD PMI Bojonegoro
            </h4>
            <h4 class="w-full my-2 text-l font-bold leading-tight text-center text-gray-800 dark:text-gray-400 b-1">
                Update {{ str_replace('"', '', $stocks->datetime) }}
            </h4>
        </div>
        <div class="flex justify-items-stretch justify-center">
            <div class="inline-block shadow rounded-lg overflow-scroll">
                <table class="table-auto">
                    <thead class="bg-red-600 divide-y">
                        <tr>
                            <th rowspan="2" class="px-4 py-2  text-white border-solid border-1 border-white">
                                Komponen
                            </th>
                            <th colspan="4" class="px-4 py-2  text-white border-solid border-1 border-white">
                                Golongan
                            </th>
                            <th rowspan="2" class="px-4 py-2  text-white border-solid border-1 border-white">
                                Total
                            </th>
                        </tr>
                        <tr>
                            <th class="px-4 py-2  text-white border-solid border-1 border-white">
                                A
                            </th>
                            <th class="px-4 py-2  text-white border-solid border-1 border-white">
                                B
                            </th>
                            <th class="px-4 py-2  text-white border-solid border-1 border-white">
                                O
                            </th>
                            <th class="px-4 py-2  text-white border-solid border-1 border-white">
                                AB
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-double divide-y divide-gray-300">
                        <tr class="whitespace-nowrap bg-white">
                            <td class="px-4 py-4  bg-white  text-gray-500 tracking-wide">
                                WB (Whole Blood)
                            </td>
                            <td class="px-4 py-4 text-gray-500  text-center tracking-wide">
                                {{ $stocks->wb_a }}
                            </td>
                            <td class="px-4 py-4 text-gray-500  text-center">
                                {{ $stocks->wb_b }}
                            </td>
                            <td class="px-4 py-4  text-gray-500  text-center">
                                {{ $stocks->wb_o }}
                            </td>
                            <td class="px-4 py-4 text-gray-500  text-center">
                                {{ $stocks->wb_ab }}
                            </td>
                            <td class="px-4 py-4 text-gray-500  text-center">
                                {{ $stocks->wb_jum }}
                            </td>
                        </tr>
                        <tr class="whitespace-nowrap bg-white">
                            <td class="px-4 py-4  text-gray-500">
                                PRC (Packed Red Cell)
                            </td>
                            <td class="px-4 py-4 text-gray-500  text-center">
                                {{ $stocks->prc_a }}
                            </td>
                            <td class="px-4 py-4 text-gray-500  text-center">
                                {{ $stocks->prc_b }}
                            </td>
                            <td class="px-4 py-4  text-gray-500  text-center">
                                {{ $stocks->prc_o }}
                            </td>
                            <td class="px-4 py-4 text-gray-500  text-center">
                                {{ $stocks->prc_ab }}
                            </td>
                            <td class="px-4 py-4 text-gray-500  text-center">
                                {{ $stocks->prc_jum }}
                            </td>
                        </tr>
                        <tr class="whitespace-nowrap bg-white">
                            <td class="px-4 py-4  text-gray-500">
                                TC (Trombocyte)
                            </td>
                            <td class="px-4 py-4 text-gray-500  text-center">
                                {{ $stocks->tc_a }}
                            </td>
                            <td class="px-4 py-4 text-gray-500  text-center">
                                {{ $stocks->tc_b }}
                            </td>
                            <td class="px-4 py-4  text-gray-500  text-center">
                                {{ $stocks->tc_o }}
                            </td>
                            <td class="px-4 py-4 text-gray-500  text-center">
                                {{ $stocks->tc_ab }}
                            </td>
                            <td class="px-4 py-4 text-gray-500  text-center">
                                {{ $stocks->tc_jum }}
                            </td>
                        </tr>
                        <tr class="whitespace-nowrap bg-white">
                            <td class="px-4 py-4  text-gray-500">
                                FFP (Fresh Frozen Plasma)
                            </td>
                            <td class="px-4 py-4 text-gray-500  text-center">
                                {{ $stocks->ffp_a }}
                            </td>
                            <td class="px-4 py-4 text-gray-500  text-center">
                                {{ $stocks->ffp_b }}
                            </td>
                            <td class="px-4 py-4  text-gray-500  text-center">
                                {{ $stocks->ffp_o }}
                            </td>
                            <td class="px-4 py-4 text-gray-500  text-center">
                                {{ $stocks->ffp_ab }}
                            </td>
                            <td class="px-4 py-4 text-gray-500  text-center">
                                {{ $stocks->ffp_jum }}
                            </td>
                        </tr>
                        <tr class="whitespace-nowrap bg-white">
                            <td class="px-4 py-4  text-gray-500">
                                Total
                            </td>
                            <td class="px-4 py-4 text-gray-500  text-center">
                                {{ $stocks->tot_a }}
                            </td>
                            <td class="px-4 py-4 text-gray-500  text-center">
                                {{ $stocks->tot_b }}
                            </td>
                            <td class="px-4 py-4  text-gray-500  text-center">
                                {{ $stocks->tot_o }}
                            </td>
                            <td class="px-4 py-4 text-gray-500  text-center">
                                {{ $stocks->tot_ab }}
                            </td>
                            <td class="px-4 py-4 text-gray-500  text-center">
                                {{ $stocks->tot_jum }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- End block -->
    <!-- Start block -->
    <section class="bg-red-500 dark:bg-red-700 py-8">
        <div class="pb-2">
            <h4 class="w-full my-2 text-4xl font-bold leading-tight text-center text-white b-1">
                Informasi Jadwal Mobile Unit Donor Darah
            </h4>
        </div>
        @if (count((array) $schedules) > 0)
            <div class="flex justify-items-stretch justify-center">
                <div class="inline-block shadow rounded-lg overflow-scroll">
                    {{-- Table Here --}}
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th
                                    class="px-4 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                    Nomor</th>
                                <th
                                    class="px-4 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                    Lokasi</th>
                                <th
                                    class="px-4 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                    Jadwal</th>
                                <th
                                    class="px-4 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                    Alamat</th>

                            </tr>
                        </thead>

                        <tbody class="bg-white">
                            @foreach ($schedules as $schedule)
                                <tr>
                                    <td class="px-4 py-4 whitespace-no-wrap border-b border-gray-200 text-gray-500">
                                        {{ $loop->index + 1 }}
                                    </td>
                                    <td class="px-4 py-4 whitespace-no-wrap border-b border-gray-200 text-gray-500">
                                        {{ str_replace('"', '', $schedule->Lokasi) }}
                                    </td>
                                    <td class="px-4 py-4 whitespace-no-wrap border-b border-gray-200 text-gray-500">
                                        {{ str_replace('"', '', $schedule->Jadwal) }}
                                    </td>
                                    <td class="px-4 py-4 whitespace-no-wrap border-b border-gray-200 text-gray-500">
                                        {{ str_replace('"', '', $schedule->Alamat) }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            <div class="container flex justify-center mx-auto">
                <div class=" justify-center rounded-lg text-lg bg-red-500 border-2 border-gray-200 shadow px-4">
                    <h4 class="w-full my-2 text-4xl font-bol leading-tight text-center text-gray-100 b-1">
                        Belum Ada Jadwal Hari Ini
                    </h4>
                </div>
            </div>
        @endif
    </section>
    <!-- End block -->
    <!-- Start block -->
    <section class="bg-gray-50 dark:bg-gray-800">
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16 lg:px-6">
            <div class="max-w-screen-sm mx-auto text-center">
                <h2 class="mb-4 text-3xl font-extrabold leading-tight tracking-tight text-gray-900 dark:text-white">
                    COMING SOON</h2>
                <p class="mb-6 font-light text-gray-500 dark:text-gray-400 md:text-lg">Waiting is fun with sipping a
                    coffee.</p>
                {{-- <a href="#"
                    class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800">Free
                    trial for 30 days</a> --}}
            </div>
        </div>
    </section>
    <!-- End block -->
    <footer class="bg-red-500 dark:bg-red-700">
        <div class="max-w-screen-xl p-4 py-6 mx-auto lg:py-16 md:p-8 lg:p-10">
            <div class="grid grid-cols-2 gap-8 md:grid-cols-3 lg:grid-cols-5">
                <div>
                    <h3 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Company</h3>
                    <ul class="text-white dark:text-gray-400">
                        <li class="mb-4">
                            <a href="#" class=" hover:underline">About</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Careers</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Brand Center</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Blog</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Help center</h3>
                    <ul class="text-white dark:text-gray-400">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Discord Server</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Twitter</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Facebook
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h3>
                    <ul class="text-white dark:text-gray-400">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Privacy Policy</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Licensing</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Terms</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Company</h3>
                    <ul class="text-white dark:text-gray-400">
                        <li class="mb-4">
                            <a href="#" class=" hover:underline">About</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Careers</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Brand Center</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Blog</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Download</h3>
                    <ul class="text-white dark:text-gray-400">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">iOS</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Android</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Windows</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">MacOS</a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="my-6 border-red-600 sm:mx-auto dark:border-gray-700 lg:my-8">
            <div class="text-center">

            </div>
        </div>
    </footer>
</body>

</html>
