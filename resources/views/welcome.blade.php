<x-guest-layout>
    @push('scripts')
        <script src="{{ Vite::asset('resources/js/ballGame.js') }}"></script>
        <script src="{{ Vite::asset('resources/js/textScramble.js') }}"></script>
    @endpush
    <style>
        .person {
            position: absolute;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            transition: all 1s ease-out;
        }

        .ball {
            position: absolute;
            transition: all 1s ease-out;
        }
    </style>

    <div class="h-screen w-full bg-[#232323]">
        @include('components.layouts.guest-navbar')
        <div class="container mx-auto relative h-full w-full">
            <svg class="rounded-xl intro" viewbox="0 0 200 86">
                <text text-anchor="start" x="10" y="30" class="text text-stroke"
                    clip-path="url(#text1)">Kabai</text>
                <text text-anchor="start" x="10" y="50" class="text text-stroke"
                    clip-path="url(#text2)">Delta</text>
                <text text-anchor="start" x="10" y="70" class="text text-stroke"
                    clip-path="url(#text3)">kse</text>
                <text text-anchor="start" x="10" y="30" class="text text-stroke text-stroke-2"
                    clip-path="url(#text1)">Kabai</text>
                <text text-anchor="start" x="10" y="50" class="text text-stroke text-stroke-2"
                    clip-path="url(#text2)">Delta</text>
                <text text-anchor="start" x="10" y="70" class="text text-stroke text-stroke-2"
                    clip-path="url(#text3)">kse</text>
                <defs>
                    <clipPath id="text1">
                        <text text-anchor="start" x="10" y="30" class="text">Kabai</text>
                    </clipPath>
                    <clipPath id="text2">
                        <text text-anchor="start" x="10" y="50" class="text">Delta</text>
                    </clipPath>
                    <clipPath id="text3">
                        <text text-anchor="start" x="10" y="70" class="text">kse</text>
                    </clipPath>
                </defs>
            </svg>
            <div class="pt-20 h-full">
                <span class="ball relative flex h-4 w-4">
                    <span
                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-cyan-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-4 w-4 bg-cyan-500"></span>
                </span>
                <div class="person bg-gradient-to-r from-[#E5AA87] to-[#AC6E49]"></div>
                <div class="person bg-gradient-to-r from-[#E5AA87] to-[#AC6E49]"></div>
                <div class="person bg-gradient-to-r from-[#E5AA87] to-[#AC6E49]"></div>
                <div class="person bg-gradient-to-r from-[#E5AA87] to-[#AC6E49]"></div>
                <div class="person bg-gradient-to-r from-[#E5AA87] to-[#AC6E49]"></div>
                <div class="person bg-gradient-to-r from-[#E5AA87] to-[#AC6E49]"></div>
            </div>
        </div>

    </div>
    <div class="relative w-full bg-[#232323] pb-14 text-white">
        <div class="container mx-auto">
            <h2 class="text-center text-3xl mb-8">Események</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <a href="#">
                    <div class="rounded-lg shadow-lg p-4 border-2 hover:border-2 hover:border-[#AC6E49]">
                        <h2 class="text-xl font-bold">2023. május 14.</h2>
                        <h3 class="Text-lg font-bold">18:00</h3>
                        <p class="text-md">Helyszin: Lorem ipsum</p>
                        <p class="text-md">Dolor et cetera</p>
                    </div>
                </a>
                <a href="#">
                    <div class="rounded-lg shadow-lg p-4 border-2 hover:border-2 hover:border-[#AC6E49]">
                        <h2 class="text-xl font-bold">2023. május 14.</h2>
                        <h3 class="Text-lg font-bold">18:00</h3>
                        <p class="text-md">Helyszin: Lorem ipsum</p>
                        <p class="text-md">Dolor et cetera</p>
                    </div>
                </a>
                <a href="#">
                    <div class="rounded-lg shadow-lg p-4 border-2 hover:border-2 hover:border-[#AC6E49]">
                        <h2 class="text-xl font-bold">2023. május 14.</h2>
                        <h3 class="Text-lg font-bold">18:00</h3>
                        <p class="text-md">Helyszin: Lorem ipsum</p>
                        <p class="text-md">Dolor et cetera</p>
                    </div>
                </a>
                <a href="#">
                    <div class="rounded-lg shadow-lg p-4 border-2 hover:border-2 hover:border-[#AC6E49]">
                        <h2 class="text-xl font-bold">2023. május 14.</h2>
                        <h3 class="Text-lg font-bold">18:00</h3>
                        <p class="text-md">Helyszin: Lorem ipsum</p>
                        <p class="text-md">Dolor et cetera</p>
                    </div>
                </a>
            </div>
            <div class="w-full flex justify-center mt-10">
                <button
                    class="py-2 px-8 rounded-full border-2 border-white font-bold hover:bg-white hover:text-gray-800">Még
                    több esemény</button>
            </div>
        </div>
    </div>

    <div class="container mx-auto py-14">
        <h2 class="text-center text-3xl mb-8">Csapatok</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">

                <div class="h-fit">
                    <div>
                        <img class="clippingProfile object-cover w-full h-48"
                            src="https://pbs.twimg.com/media/FjU2lkcWYAgNG6d.jpg" alt="prof" />
                        <svg class="h-2">
                            <defs>
                                <clipPath id="myClipPath">
                                    <rect x="0" y="0" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="15" y="0" width="160" height="30" />
                                    <rect x="160" y="0" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="20" y="30" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="30" y="30" width="160" height="30" />
                                    <rect x="170" y="30" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="10" y="60" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="25" y="60" width="160" height="30" />
                                    <rect x="165" y="60" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="25" y="90" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="40" y="90" width="160" height="30" />
                                    <rect x="180" y="90" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="20" y="120" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="35" y="120" width="160" height="30" />
                                    <rect x="175" y="120" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="5" y="150" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="20" y="150" width="160" height="30" />
                                    <rect x="165" y="150" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="15" y="180" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="30" y="180" width="160" height="30" />
                                    <rect x="175" y="180" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="5" y="210" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="20" y="210" width="160" height="30" />
                                    <rect x="165" y="210" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="10" y="240" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="30" y="240" width="160" height="30" />
                                    <rect x="170" y="240" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="15" y="270" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="30" y="270" width="160" height="30" />
                                    <rect x="175" y="270" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="5" y="300" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="20" y="300" width="160" height="30" />
                                    <rect x="165" y="300" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="15" y="330" width="30" height="30"
                                        rx="30" ry="30" transform="translate(50)" />
                                    <rect x="30" y="330" width="160" height="30"
                                        transform="translate(50)" />
                                    <rect x="175" y="330" width="30" height="30"
                                        rx="30" ry="30" transform="translate(50)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>


                    <h2 class="text-center">
                        Lorem ipsum
                    </h2>
                </div>

                <div class="h-fit">
                    <div>
                        <img class="clippingProfile object-cover w-full h-48"
                            src="https://pbs.twimg.com/media/FjU2lkcWYAgNG6d.jpg" alt="prof" />
                        <svg class="h-2">
                            <defs>
                                <clipPath id="myClipPath">
                                    <rect x="0" y="0" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="15" y="0" width="160" height="30" />
                                    <rect x="160" y="0" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="20" y="30" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="30" y="30" width="160" height="30" />
                                    <rect x="170" y="30" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="10" y="60" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="25" y="60" width="160" height="30" />
                                    <rect x="165" y="60" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="25" y="90" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="40" y="90" width="160" height="30" />
                                    <rect x="180" y="90" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="20" y="120" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="35" y="120" width="160" height="30" />
                                    <rect x="175" y="120" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="5" y="150" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="20" y="150" width="160" height="30" />
                                    <rect x="165" y="150" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="15" y="180" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="30" y="180" width="160" height="30" />
                                    <rect x="175" y="180" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="5" y="210" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="20" y="210" width="160" height="30" />
                                    <rect x="165" y="210" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="10" y="240" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="30" y="240" width="160" height="30" />
                                    <rect x="170" y="240" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="15" y="270" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="30" y="270" width="160" height="30" />
                                    <rect x="175" y="270" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="5" y="300" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="20" y="300" width="160" height="30" />
                                    <rect x="165" y="300" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="15" y="330" width="30" height="30"
                                        rx="30" ry="30" transform="translate(50)" />
                                    <rect x="30" y="330" width="160" height="30"
                                        transform="translate(50)" />
                                    <rect x="175" y="330" width="30" height="30"
                                        rx="30" ry="30" transform="translate(50)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>


                    <h2 class="text-center">
                        Lorem ipsum
                    </h2>
                </div>

                <div class="h-fit">
                    <div>
                        <img class="clippingProfile object-cover w-full h-48"
                            src="https://pbs.twimg.com/media/FjU2lkcWYAgNG6d.jpg" alt="prof" />
                        <svg class="h-2">
                            <defs>
                                <clipPath id="myClipPath">
                                    <rect x="0" y="0" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="15" y="0" width="160" height="30" />
                                    <rect x="160" y="0" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="20" y="30" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="30" y="30" width="160" height="30" />
                                    <rect x="170" y="30" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="10" y="60" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="25" y="60" width="160" height="30" />
                                    <rect x="165" y="60" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="25" y="90" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="40" y="90" width="160" height="30" />
                                    <rect x="180" y="90" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="20" y="120" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="35" y="120" width="160" height="30" />
                                    <rect x="175" y="120" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="5" y="150" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="20" y="150" width="160" height="30" />
                                    <rect x="165" y="150" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="15" y="180" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="30" y="180" width="160" height="30" />
                                    <rect x="175" y="180" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="5" y="210" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="20" y="210" width="160" height="30" />
                                    <rect x="165" y="210" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="10" y="240" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="30" y="240" width="160" height="30" />
                                    <rect x="170" y="240" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="15" y="270" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="30" y="270" width="160" height="30" />
                                    <rect x="175" y="270" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="5" y="300" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="20" y="300" width="160" height="30" />
                                    <rect x="165" y="300" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="15" y="330" width="30" height="30"
                                        rx="30" ry="30" transform="translate(50)" />
                                    <rect x="30" y="330" width="160" height="30"
                                        transform="translate(50)" />
                                    <rect x="175" y="330" width="30" height="30"
                                        rx="30" ry="30" transform="translate(50)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>


                    <h2 class="text-center">
                        Lorem ipsum
                    </h2>
                </div>

                <div class="h-fit">
                    <div>
                        <img class="clippingProfile object-cover w-full h-48"
                            src="https://pbs.twimg.com/media/FjU2lkcWYAgNG6d.jpg" alt="prof" />
                        <svg class="h-2">
                            <defs>
                                <clipPath id="myClipPath">
                                    <rect x="0" y="0" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="15" y="0" width="160" height="30" />
                                    <rect x="160" y="0" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="20" y="30" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="30" y="30" width="160" height="30" />
                                    <rect x="170" y="30" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="10" y="60" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="25" y="60" width="160" height="30" />
                                    <rect x="165" y="60" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="25" y="90" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="40" y="90" width="160" height="30" />
                                    <rect x="180" y="90" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="20" y="120" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="35" y="120" width="160" height="30" />
                                    <rect x="175" y="120" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="5" y="150" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="20" y="150" width="160" height="30" />
                                    <rect x="165" y="150" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="15" y="180" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="30" y="180" width="160" height="30" />
                                    <rect x="175" y="180" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="5" y="210" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="20" y="210" width="160" height="30" />
                                    <rect x="165" y="210" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="10" y="240" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="30" y="240" width="160" height="30" />
                                    <rect x="170" y="240" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="15" y="270" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="30" y="270" width="160" height="30" />
                                    <rect x="175" y="270" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="5" y="300" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="20" y="300" width="160" height="30" />
                                    <rect x="165" y="300" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="15" y="330" width="30" height="30"
                                        rx="30" ry="30" transform="translate(50)" />
                                    <rect x="30" y="330" width="160" height="30"
                                        transform="translate(50)" />
                                    <rect x="175" y="330" width="30" height="30"
                                        rx="30" ry="30" transform="translate(50)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>


                    <h2 class="text-center">
                        Lorem ipsum
                    </h2>
                </div>

                <div class="h-fit">
                    <div>
                        <img class="clippingProfile object-cover w-full h-48"
                            src="https://pbs.twimg.com/media/FjU2lkcWYAgNG6d.jpg" alt="prof" />
                        <svg class="h-2">
                            <defs>
                                <clipPath id="myClipPath">
                                    <rect x="0" y="0" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="15" y="0" width="160" height="30" />
                                    <rect x="160" y="0" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="20" y="30" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="30" y="30" width="160" height="30" />
                                    <rect x="170" y="30" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="10" y="60" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="25" y="60" width="160" height="30" />
                                    <rect x="165" y="60" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="25" y="90" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="40" y="90" width="160" height="30" />
                                    <rect x="180" y="90" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="20" y="120" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="35" y="120" width="160" height="30" />
                                    <rect x="175" y="120" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="5" y="150" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="20" y="150" width="160" height="30" />
                                    <rect x="165" y="150" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="15" y="180" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="30" y="180" width="160" height="30" />
                                    <rect x="175" y="180" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="5" y="210" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="20" y="210" width="160" height="30" />
                                    <rect x="165" y="210" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="10" y="240" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="30" y="240" width="160" height="30" />
                                    <rect x="170" y="240" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="15" y="270" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="30" y="270" width="160" height="30" />
                                    <rect x="175" y="270" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="5" y="300" width="30" height="30"
                                        rx="30" ry="30" />
                                    <rect x="20" y="300" width="160" height="30" />
                                    <rect x="165" y="300" width="30" height="30"
                                        rx="30" ry="30" />

                                    <rect x="15" y="330" width="30" height="30"
                                        rx="30" ry="30" transform="translate(50)" />
                                    <rect x="30" y="330" width="160" height="30"
                                        transform="translate(50)" />
                                    <rect x="175" y="330" width="30" height="30"
                                        rx="30" ry="30" transform="translate(50)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>


                    <h2 class="text-center">
                        Lorem ipsum
                    </h2>
                </div>

        </div>
    </div>
</x-guest-layout>
