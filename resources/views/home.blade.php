<x-app-layout>
    <!-- hero section start -->
    <section id="home">
        <div class="container pb-14 pt-32 md:pt-24 lg:pt-12 xl:pt-12 2xl:pt-12 mx-auto">
            <div class="flex flex-wrap px-6">
                <div class="w-full self-center lg:w-1/2 lg:order-last lg:aspect-square">
                    <img src="{{ asset('img/rdepok/1.jpg') }}" alt="desain arsitektur" class="rounded-br-2xl object-cover h-full">
                </div>
                <div class="w-full self-center pt-10 sm:text-center lg:text-left lg:w-1/2 lg:pt-0 lg:pr-8 xl:pr-10">
                    <h1 class="font-medium text-2xl text-jet capitalize leading-loose lg:leading-[2]">Mengubah dunia melalui <span class="capitalize text-gold text-5xl font-semibold tracking-wide block lg:mt-2 xl:font-bold">dhisan arsitektur</span></h1>
                    <p class="text-lg font-base mt-4 text-gray-500 md:text-xl lg:text-2xl lg:mt-4 tracking-widest md:tracking-wider lg:tracking-wide">Membangun dunia yang lebih baik, satu bangunan demi satu bangunan</p>
                    <div class="mt-6 lg:mt-10">
                        <a href="#" class="py-3 px-4 md:px-6 md:py-3 bg-gradient-to-r from-jet to-erie rounded-md text-lg font-base tracking-wide text-ivory capitalize">hubungi kami</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero section end -->

    <!-- layanan section start -->
    <section id="layanan">
        <div class="container pt-44 pb-14 md:pt-36 lg:pt-48 mx-auto">
            <div class="flex flex-wrap px-6">
                <div class="w-full self-center pt-10 lg:w-1/2 lg:pt-12">
                    <div class="relative w-[20rem] h-[24rem] md:mt-6 md:w-[20rem] md:h-[28rem] lg:w-[20rem] lg:h-[26rem]">
                            <img class="w-[90%] h-full object-cover object-left mr-3 mt-3 rounded-md" src="{{ asset('img/crc/interior rumah & r sulam pak charles.jpg') }}" alt="">
                            <div class="absolute w-[90%] h-full bottom-12 left-36 md:bottom-20 md:w-full md:left-40 lg:bottom-16 lg:left-36 lg:w-[90%] pl-3 pb-3 bg-white rounded-md">
                                <img class="object-cover w-full h-full rounded-md" src="{{ asset('img/nascb1/r. keluarga.jpg') }}" alt="">
                            </div>
                    </div>
                </div>
                <div class="w-full mt-14 md:mt-14 lg:w-1/2 lg:pt-0  self-center items-center">
                    <h2 class="text-lg font-medium text-gold uppercase tracking-widest">layanan</h2>
                    <h1 class="text-2xl font-semibold text-erie tracking-wide mt-2">Membangun Tempat Tinggal yang Nyaman dan Indah</h1>
                    <p class="text-base font-normal text-gray-500 tracking-wide mt-3">Dhisan atelier siap menjadi teman untuk mewujudkan tempat tinggal yang nyaman bagi anda dengan layanan sebagai berikut:</p>
                    <div class="space-y-6 mt-6">
                        <div class="py-4 px-6 border-2 rounded-md border-cream border-opacity-20 shadow-transparent hover:shadow-lg hover:shadow-cream/25 transition duration-200 ease-in-out">
                            <p>desain rumah eksterior</p>
                        </div>
                        <div class="py-4 px-6 border-2 rounded-md border-cream border-opacity-20 shadow-transparent hover:shadow-lg hover:shadow-cream/25 transition duration-200 ease-in-out">
                            <p>desain ruangan interior</p>
                        </div>
                        <div class="py-4 px-6 border-2 rounded-md border-cream border-opacity-20 shadow-transparent hover:shadow-lg hover:shadow-cream/25 transition duration-200 ease-in-out">
                            <p>desain arsitektural</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- layanan section end -->

    <!-- Jasa  start -->
    <section id="produk">
        <div class="px-6 py-16 mt-24 lg:mt-44 bg-jet">
            <div class="container mx-auto">
                <div class="flex justify-evenly w-full">
                    <h2 class="text-lg font-medium text-gold uppercase tracking-widest ">jasa</h2>
                    <span class="bg-jet invisible">..............................................................</span>
                </div>
                <div class="flex justify-evenly w-full">
                    <h1 class="text-3xl font-semibold text-ivory capitalize tracking-wide mt-2">katalog produk</h1>
                    <a href="#" class="text-gold">
                        <span class="sr-only">open katalog</span>
                        <svg class="w-12 h-12 self-center items-center mt-1 fill-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
                <div class="flex justify-center mt-16 -z-30">
                    <!-- card produk -->
                    <x-card/>
                </div>
                </div>
        </div>
    </section>
    <!-- produk end -->

    <!-- alasan start -->
    <section id="alasan">
        <div class="px-6 py-16 mt-16 lg:mt-44">
            <h1 class="text-lg text-center font-medium text-gold uppercase tracking-wide">Alasan</h1>
            <h2 class="mt-2 text-2xl text-center font-semibold text-erie capitalize ">mengapa memilih kami?</h2>
            <div class="container mx-auto flex flex-wrap mt-12 lg:flex-nowrap lg:space-x-5">
                <div class="w-full h-90 md:h-[28rem] px-8 py-14 bg-cream/60 rounded-md scale-[.96] hover:scale-100 transition duration-300 ease-in-out overflow-hidden md:w-1/3">
                    <svg class="w-24 h-24" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        viewBox="0 0 50 50">
                        <path d="M48,25C48,12.317,37.682,2,25,2S2,12.317,2,25s10.318,23,23,23S48,37.683,48,25z M35.554,27.875 c0,0,1.446,0.542,1.446,2.078c0,1.626-1.897,2.349-1.897,2.349s0.542,0.723,0.542,1.717c0,0.904,0.09,2.982-8.493,2.982 c-10.581,0-10.368-1.728-14.202-1.972C12.42,34.995,12,34.563,12,34.032v-9.149c0-0.427,0.233-0.848,0.634-0.996 c1.384-0.515,2.174-2.687,3.676-4.505c1.988-2.349,6.148-3.343,6.69-9.035c0.271-2.259,2.53-1.265,3.253,0 c1.175,1.988,0.209,4.052-0.785,6.13C24.654,18.283,24.729,20,27.094,20c3,0,3.557,0,5.906,0c1.626,0,2.554,0.647,2.554,1.55 c0,0.723-0.181,1.897-0.181,1.897S37,23.99,37,25.616C37,27.152,35.554,27.875,35.554,27.875z"></path>
                    </svg>
                    <h2 class="mt-4 text-3xl font-bold capitalize">kualitas terjamin</h2>
                    <p class="mt-6 mb-12 text-xl">Kami selalu mengutamakan kualitas dalam setiap project yang kami kerjakan.</p>
                </div>
                <div class="w-full h-90 md:h-[28rem] px-8 py-14 bg-cream/60 rounded-md scale-[.96] hover:scale-100 transition duration-300 ease-in-out overflow-hidden md:w-1/3 mt-5 md:mt-0">
                    <svg class="w-24 h-24" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        viewBox="0 0 30 30">
                        <path d="M 15.001953 3.9921875 C 12.801953 3.9921875 11.001953 5.7821875 11.001953 7.9921875 C 11.001953 10.202188 12.801953 11.992188 15.001953 11.992188 C 17.211953 11.992188 19.011719 10.202187 19.011719 7.9921875 C 19.011719 5.7821875 17.211953 3.9921875 15.001953 3.9921875 z M 6.0019531 8.0039062 C 3.7919531 8.0039062 2.0019531 9.7939062 2.0019531 12.003906 C 2.0019531 14.213906 3.7919531 16.003906 6.0019531 16.003906 C 8.2119531 16.003906 10.001953 14.213906 10.001953 12.003906 C 10.001953 9.7939062 8.2119531 8.0039062 6.0019531 8.0039062 z M 6.0019531 16.003906 L 5.0019531 16.003906 C 2.7919531 16.003906 1.0019531 17.793906 1.0019531 20.003906 L 1.0019531 22.992188 C 1.0019531 23.542188 1.4519531 23.992188 2.0019531 23.992188 L 28.001953 23.992188 C 28.551953 23.992188 29.001953 23.542188 29.001953 22.992188 L 29.001953 20.003906 C 29.001953 17.793906 27.211953 16.003906 25.001953 16.003906 L 24.001953 16.003906 L 23.001953 16.003906 C 22.151953 16.003906 21.362891 16.272422 20.712891 16.732422 C 20.042891 15.142422 18.311719 13.992187 16.261719 13.992188 L 13.751953 13.992188 C 11.701953 13.992188 9.9727344 15.142187 9.3027344 16.742188 C 8.6527344 16.282187 7.8619531 16.003906 7.0019531 16.003906 L 6.0019531 16.003906 z M 24.001953 16.003906 C 26.211953 16.003906 28.001953 14.213906 28.001953 12.003906 C 28.001953 9.7939062 26.211953 8.0039062 24.001953 8.0039062 C 21.791953 8.0039062 20.001953 9.7939062 20.001953 12.003906 C 20.001953 14.213906 21.791953 16.003906 24.001953 16.003906 z M 6.0019531 10.003906 C 7.1019531 10.003906 8.0019531 10.903906 8.0019531 12.003906 C 8.0019531 13.103906 7.1019531 14.003906 6.0019531 14.003906 C 4.9019531 14.003906 4.0019531 13.103906 4.0019531 12.003906 C 4.0019531 10.903906 4.9019531 10.003906 6.0019531 10.003906 z M 24.001953 10.003906 C 25.101953 10.003906 26.001953 10.903906 26.001953 12.003906 C 26.001953 13.103906 25.101953 14.003906 24.001953 14.003906 C 22.901953 14.003906 22.001953 13.103906 22.001953 12.003906 C 22.001953 10.903906 22.901953 10.003906 24.001953 10.003906 z M 5.0019531 18.003906 L 7.0019531 18.003906 C 8.0819531 18.003906 9.0019531 18.923906 9.0019531 20.003906 L 9.0019531 21.992188 L 3.0019531 21.992188 L 3.0019531 20.003906 C 3.0019531 18.903906 3.9019531 18.003906 5.0019531 18.003906 z M 23.001953 18.003906 L 25.001953 18.003906 C 26.081953 18.003906 27.001953 18.923906 27.001953 20.003906 L 27.001953 21.992188 L 21.011719 21.992188 L 21.011719 19.902344 C 21.061719 18.852344 21.931953 18.003906 23.001953 18.003906 z"></path>
                    </svg>
                    <h2 class="mt-4 text-3xl font-bold capitalize">tim profesional</h2>
                    <p class="mt-6 mb-12 text-xl">Tim kami terdiri dari arsitek berpengalaman yang sudah banyak mengerjakan project-project berkualitas.</p>
                </div>
                <div class="w-full h-90 md:h-[28rem] px-8 py-14 bg-cream/60 rounded-md scale-[.96] hover:scale-100 transition duration-300 ease-in-out overflow-hidden md:w-1/3 mt-5 md:mt-0">
                    <svg class="w-24 h-24" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        viewBox="0 0 468 468">
                        <path d="M 234.01562 0 C 226.50663 0 220.01563 6.0867031 220.01562 13.595703 L 220.01562 40.275391 C 193.01562 45.756391 170.06642 67.240891 164.98242 94.712891 C 139.05742 99.292891 119.79745 122.60214 119.81445 148.86914 L 120.0293 306.91797 C 120.0483 324.03497 134.04025 338 151.15625 338 L 317.0293 338 C 334.0113 338 348.16147 323.7573 348.10547 306.7793 L 347.57617 148.70312 C 347.52617 123.31713 329.55908 100.57886 304.70508 95.130859 C 299.90308 66.645859 276.01562 44.903547 248.01562 39.935547 L 248.01562 13.595703 C 248.01562 6.0867031 241.52463 1.1842379e-15 234.01562 0 z M 248.01367 67.798828 C 265.01367 72.649828 278.85153 88.549344 278.39453 107.02734 C 278.15153 114.70134 284.49811 121.19083 292.16211 121.04883 C 307.50211 120.78683 320.40064 133.41534 320.43164 148.77734 L 320.9375 306.9668 C 320.9475 309.0898 319.16425 311 317.03125 311 L 151.15625 311 C 149.01625 311 147.27544 309.12338 147.27344 306.98438 L 147.10938 148.91602 C 147.09938 133.73402 159.81091 121.41602 174.87891 121.41602 C 183.29191 121.41602 191.08008 116.98323 191.08008 107.49023 C 190.98808 89.117234 204.01367 74.511141 220.01367 68.369141 L 220.01367 107.46484 C 220.01367 114.97384 226.50467 121.06055 234.01367 121.06055 C 241.52267 121.06055 248.01367 114.97384 248.01367 107.46484 L 248.01367 67.798828 z M 225.42969 150.50781 L 225.42969 167.21094 C 210.89169 171.09194 201.89648 182.16462 201.89648 196.26562 C 201.89648 214.03063 215.71281 221.90853 230.63281 227.76953 C 240.99581 231.97953 245.22461 236.06137 245.22461 241.85938 C 245.22461 248.11238 239.71608 252.31441 231.58008 252.31641 C 222.48508 251.73541 213.79681 248.57039 206.63281 242.90039 L 199.55469 262.69727 C 206.69669 268.32427 215.3118 271.53575 224.3418 272.34375 L 224.3418 288.39844 L 243.83984 288.39844 L 243.83984 271.2168 C 258.82584 267.1688 268.46289 255.29058 268.46289 240.76758 C 268.46089 225.37458 260.34245 215.48889 241.31445 207.71289 C 228.64445 202.45989 224.98047 199.47158 224.98047 194.39258 C 224.98047 190.24358 228.0478 185.81059 236.5918 185.80859 C 244.5258 186.36159 252.18592 188.91152 258.79492 193.35352 L 266.15625 173.88281 C 259.71225 169.68681 252.38944 167.03367 244.77344 166.01367 L 244.77344 150.50781 L 225.42969 150.50781 z M 48.515625 231.15625 C 41.006625 231.15625 35.015625 237.24295 35.015625 244.75195 L 35.015625 329.18555 L 26.486328 320.76367 C 21.232328 315.39967 12.485141 315.31145 7.1191406 320.56445 C 1.7551406 325.81845 1.5956094 334.42406 6.8496094 339.78906 L 36.224609 369.81641 C 40.698609 377.79341 52.272359 379.16378 58.568359 372.55078 L 90.814453 338.67773 C 95.991453 333.24073 95.778844 324.63303 90.339844 319.45703 C 84.900844 314.28103 76.482734 314.49364 71.302734 319.93164 L 62.015625 329.88281 L 62.015625 244.75195 C 62.015625 237.24295 56.024625 231.15625 48.515625 231.15625 z M 419.51562 231.15625 C 412.00662 231.15625 406.01562 237.24295 406.01562 244.75195 L 406.01562 327.16016 L 399.20703 319.41797 C 394.28203 313.75097 385.65728 313.14922 379.98828 318.07422 C 374.32028 322.99822 373.70095 331.58495 378.62695 337.25195 L 408.9043 372.09766 C 414.7533 378.82866 425.89269 378.09506 430.80469 370.66406 L 461.25391 338.67773 C 466.43091 333.23973 466.21634 324.63303 460.77734 319.45703 C 455.33834 314.28103 446.71511 314.49364 441.53711 319.93164 L 433.01562 328.86328 L 433.01562 244.75195 C 433.01562 237.24295 427.02463 231.15625 419.51562 231.15625 z M 233.01562 351.56445 C 225.50662 351.56445 219.01562 357.6492 219.01562 365.1582 L 219.01562 418.43359 L 212.61328 410.69141 C 207.68828 405.02541 199.26566 404.42566 193.59766 409.34766 C 187.92966 414.27266 187.41094 422.86034 192.33594 428.52734 L 222.66211 463.37109 C 228.51311 470.10309 239.68266 469.37245 244.59766 461.93945 L 275.05469 429.95312 C 280.23269 424.51713 280.02884 415.91137 274.58984 410.73438 C 269.15384 405.55937 260.62136 405.76803 255.44336 411.20703 L 247.01562 420.14062 L 247.01562 365.1582 C 247.01562 357.6492 240.52463 351.56445 233.01562 351.56445 z"></path>
                    </svg>
                    <h2 class="mt-6 text-3xl font-bold capitalize">harga terjangkau</h2>
                    <p class="mt-6 mb-12 text-xl">Kami menyediakan harga yang terjangkau untuk project arsitektur yang berkualitas.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- alasan end -->

    <!-- margin bottom -->
    <div class="mb-96"></div>

    <!-- speed dial start -->
    <x-dial/>
    <!-- speed dial end -->

</x-app-layout>