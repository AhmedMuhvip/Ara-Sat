<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Araç Sat</title>
    @vite(['resources/js/app.js'])
</head>
<body class="bg-black text-white">
<div class="px-10">
    <nav class="flex justify-between items-center py-4 border-b border-white/10">
        <div class="flex items-center">
            <a href="/">
                <img class="w-16" src="{{Vite::asset('resources/images/websiteLogo.png')}}" alt="Logo">
            </a>
        </div>

        <div class="space-x-6 font-bold">
            <a href="#">Cars</a>
            <a href="#">Contact Us</a>
        </div>

        <div class="">
            <a href="#">Post a Car</a>
        </div>
    </nav>
    <main class="mt-10 max-w-[986px] mx-auto">
        {{$slot}}
    </main>
</div>
</body>
</html>
