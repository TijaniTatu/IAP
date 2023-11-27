<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... -->
</head>
<body class="font-poppins antialiased">
    <div id="view" class="h-full w-screen flex flex-row" x-data="{ sidenav: true }">
        <!-- ... -->
        <div id="sidebar" class="bg-white h-screen md:block shadow-xl px-3 w-30 md:w-60 lg:w-60 overflow-x-hidden transition-transform duration-300 ease-in-out" x-show="sidenav" @click.away="sidenav = false">
            <div class="space-y-6 md:space-y-10 mt-10">
                <!-- ... -->
                <div id="menu" class="flex flex-col space-y-2">
                    <a href="{{route('generate-token')}}" class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-teal-500 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">
                        <svg class="w-6 h-6 fill-current inline-block" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <!-- SVG content -->
                        </svg>
                        <span class="">Generate token</span>
                    </a>
                    <a href="{{route('subscribe')}}" class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-teal-500 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">
                        <svg class="w-6 h-6 fill-current inline-block" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <!-- SVG content -->
                        </svg>
                        <span class="">Subscribe</span>
                    </a>
                    <a href="{{route('logout')}}" class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-teal-500 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">
                        <svg class="w-6 h-6 fill-current inline-block" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <!-- SVG content -->
                        </svg>
                        <span class="">Logout</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- ... -->
    </div>
</body>
</html>