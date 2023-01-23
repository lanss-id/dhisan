<nav class="bg-white border-gray-200 sm:px-4 py-2.5 rounded dark:bg-gray-900 fixed w-full z-20 top-0">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="/" class="flex items-center">
            <img src="{{ asset('img/Logo-01.png') }}" class="h-[6rem]  sm:h-36 overflow-hidden ml-3" alt="Flowbite Logo" />
        </a>
        <div class="flex mr-5 md:order-2">
            <button type="button" class="text-white bg-transparent focus:ring-2 transition duration-300 focus:outline-none focus:ring-black/20 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0" type="button" data-modal-toggle="defaultModal""><svg class="w-10 h-10" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></button>
        </div>
    </div>

    <!-- Main modal -->
    <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 w-full h-full z-50 hidden">
        <div class="relative max-w-2xl w-full h-full">
            <!-- Modal content -->
            <div class="relative bg-black w-full h-full shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-8 mr-3 rounded-t dark:border-gray-600">
                    <a href="/"><h1 class="text-4xl font-bold text-white tracking-widest">Dhasa</h1></a>
                    <button type="button" class="text-white bg-transparent rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                        <svg aria-hidden="true" class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-12 text-white text-3xl font-bold tracking-wider mt-28">
                    <div class="flex justify-center"><a href="/about">About</a></div>
                    <div class="flex justify-center"><a href="/project">Project</a></div>
                    <div class="flex justify-center"><a href="/team">Team</a></div>
                    <div class="flex justify-center"><a href="/client">Client</a></div>
                    <div class="flex justify-center"><a href="#">Workflow</a></div>
                    <div class="flex justify-center"><a href="#">Contact</a></div>
                </div>
            </div>
        </div>
    </div>
</nav>

