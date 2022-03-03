<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container mx-auto">
    <nav class="relative w-full flex flex-wrap items-center justify-between py-4 bg-gray-100
    text-gray-500 hover:text-gray-700 focus:text-gray-700 shadow-lg navbar navbar-expand-lg navbar-light">
        <div class="container-fluid w-full flex flex-wrap items-center justify-between px-6">
            Navbar...
        </div>
    </nav>
    <div class="flex flex-row flex-wrap py-4">
        <aside class="w-full sm:w-1/3 md:w-1/4 px-2">
            <div class="sticky top-0 p-4 w-full">
                <!-- navigation -->
                <ul class="flex flex-col overflow-hidden">
                    ...
                </ul>
            </div>
        </aside>
        <main role="main" class="w-full sm:w-2/3 md:w-3/4 pt-1 px-2">
            {{ $slot }}
        </main>
    </div>
</div>
</body>
</html>
