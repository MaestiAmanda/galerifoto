<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Galeri Foto | login</title>
    <link rel="short icon" href="/assets/logo.png">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hurricane&display=swap" rel="stylesheet">
</head>

<body class="bg-slate-400">
    <nav class="bg-white border-gray-200 shadow-md dark:bg-gray-900">
        <div class="flex flex-wrap items-center justify-between max-w-screen-md p-4 mx-auto">
            <h3 class="text-3xl font-pacifico text--700">Galeri</h3>
            <div class="flex gap-1">
            <a href="login"><button class="px-5 py-1 text-white rounded-full border bg-blue-700">Login</button></a>
                <a href="register"><button class="px-5 py-1 rounded-full border bg-slate-200">Register</button></a>
            </div>
        </div>
    </nav>
    <section class="mt-14">
        <div class="max-w-[364px] bg-white rounded-md shadow-md mx-auto px-6 py-4">
            <form action="/ceklogin" method="post">
                @csrf
                <div class="flex flex-col">
                    <a href="/" class="mx-auto text text-3xl font-hurricane">Login</a>
                    <div>
                        <h4 class="mt-3">Email</h4>
                        <input type="email" name="email" id=""
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Bagol@gmail.com" required="#">
                        @error('email')
                            <small class="text-red-600 mt-2 text-sm">{{ $message }}</small>
                        @enderror
                    </div>
                    <div>
                        <h4 class="mt-3">Password</h4>
                        <input type="password" name="password" id="password" placeholder="••••••••"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required="">
                        @error('password')
                            <small class="text-red-600 mt-2 text-sm">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit"
                        class="py-2 px-32 mt-4 text-white rounded-full bg-blue-600 hover:bg-blue-700">Log in</button>
                    <div class="mt-3"></div>
                    
                    <div class="mb-4"></div>
                    <p class=" text-center text-sm font-light text-gray-500 dark:text-gray-400">
                        Belum Punya Akun Daftar? <a href="/register"
                            class=" text-blue-700 text-primary-600 hover:underline dark:text-primary-500">Register</a>
                    </p>
                </div>
            </form>
        </div>
        @include('sweetalert::alert')
    </section>
    <script src="/node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
