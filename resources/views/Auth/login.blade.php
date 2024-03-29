<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">


        <!-- Styles -->
        <style>
        </style>
    </head>
    <body>

        <div class="h-screen md:flex">
            
            <div
                class="relative overflow-hidden md:flex w-1/2 bg-gradient-to-tr from-blue-800 to-purple-700 i justify-around items-center hidden">
                <div>
                    <h1 class="text-white font-bold text-4xl font-sans">Welcome</h1>
                    <p class="text-white mt-1">You don't have an account yet !?</p>
                    <a href="/register" type="submit" class="text-center block w-28 bg-white text-indigo-800 mt-4 py-2 rounded-2xl font-bold mb-2">Register</a>
                </div>
                <div class="absolute -bottom-32 -left-40 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
                <div class="absolute -bottom-40 -left-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
                <div class="absolute -top-40 -right-0 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
                <div class="absolute -top-20 -right-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
            </div>

            <div class="flex md:w-1/2 justify-center py-10 items-center bg-white">
                <form class="bg-white" action="{{ route('login') }}" method="POST">
                    @csrf
                    <h1 class="text-gray-800 font-bold text-2xl mb-8">Hello Again!</h1>
                
                    @error('email')
                    <span class="text-red-500">{{$message}}</span>
                    @enderror
                            <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                </svg>
        
                                <input class="pl-2 outline-none border-none w-full" type="email" name="email" id="" placeholder="Email" />
                </div>
            
                                    <div class="flex items-center border-2 py-2 px-3 rounded-2xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                                clip-rule="evenodd" />
                                        </svg>
            
                                        <input class="pl-2 outline-none border-none w-full" type="password" name="password" id="" placeholder="Mot de passe" />
                </div>
                                    <button type="submit" class="block w-full bg-indigo-600 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Se connecter</button>
                                    <a href="{{ route('forgot_password') }}" class="text-sm ml-2 hover:text-blue-500 cursor-pointer">Forgot Password ?</a>
                </form>
            </div>
            
        </div>

    </body>
</html>



