<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<nav class="fixed top-0 z-20 w-full bg-white shadow-md">
    <div class="flex flex-wrap items-center justify-center max-w-screen-xl p-4 mx-auto gap-4">

    <a href="/explore"
                        class="flex hover:bg-gray-200 px-2 rounded-md justify-center flex-col items-center gap-1 text-blue-600">
                        <!-- <i class="bi bi-inboxes-fill text-[20px]"></i> -->
                        
                    </a>
                    <span class="text-lg font-bold text-gray-900">Pingky</span>    
                    <a href="/explore" class="text-lg font-normal text-gray-900">Explore</a>
                    <form action="/explore" method="get" >
                        <input type="text"class="h-8 px-4 border rounded-full w-52 transition duration-500 ease-in-out hover:scale-105" placeholder="Search ..." name="cari">
                       </form>
        <!--Profil-->
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <button type="button"
                class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                data-dropdown-placement="bottom">
                <span class="sr-only">Open user menu</span>
                <img src="/pic/{{ old('foto_profil', Auth::User()->foto_profil) }}" alt="User Avatar" class="w-8 h-8 rounded-full">
            </button>
            <!-- Dropdown menu -->
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                id="user-dropdown">
                <div class="px-4 py-3">
                    <span
                        class="block text-sm text-gray-900 dark:text-white">{{ old('username', Auth::User()->username) }}</span>
                    <span
                        class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ old('email', Auth::User()->email) }}</span>
                </div>
                <ul class="py-2" aria-labelledby="user-menu-button">
                    <li>
                        <a href="/profile"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                            Profil</a>
                    </li>
                    <li>
                        <a href="/password&username"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                            Edit Password</a></a>
                    </li>
                    <li>
                        <a href="/logout"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                            Logout</a>
                    </li>
                </ul>
            </div>
            <!--Menu User-->
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
            <ul
                class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-purple-700 rounded-lg bg-white md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="/explore"
                        class=" font-normal block py-2 px-3 text-gray-500 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"></a>
                </li>
                <li>
                    <a href="/album"
                        class=" font-normal block py-2 px-3 text-gray-500 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">ALBUM</a>
                </li>
                <li>
                    <a href="/upload"
                        class=" font-normal block py-2 px-3 text-gray-500 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">UPLOAD</a></a>
                </li>
          
            </ul>
            <div class="mr-3">
            </div>
            <!--navbar mobile-->
        </div>
        <div class="fixed lg:hidden bottom-0 right-0 left-0 bg-white shadow-md border px-8 py-2 rounded-sm">
            <ul class="flex justify-evenly gap-5">
                <li>
                    
                </li>
                <li>
                    <a href="/album"
                        class="flex hover:bg-gray-200 px-2 rounded-md justify-center flex-col items-center gap-1 text-blue-600">
                        <i class="bi bi-journal-album text-[20px]"></i>
                        <span class="text-sm font-normal text-gray-900">Postingan</span>
                    </a>
                </li>
                <li>
                    <a href="/upload"
                        class="flex hover:bg-gray-200 px-2 rounded-md justify-center flex-col items-center gap-1 text-blue-600">
                        <i class="bi bi-plus-square-fill text-[20px]"></i>
                        <span class="text-sm font-normal text-gray-900">Upload</span>
                    </a>
                </li>
                <li>
             
                    </a>
                </li>
            </ul>
        </div>
    </div>
    </div>
    </div>
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</nav>
