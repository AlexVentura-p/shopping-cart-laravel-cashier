<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SHOPPING CART</title>
    <meta name="description" content="Free open source Tailwind CSS Store template">
    <meta name="keywords"
        content="tailwind,tailwindcss,tailwind css,css,starter template,free template,store template, shop layout, minimal, monochrome, minimalistic, theme, nordic">

    @vite(['resources/css/app.css'])
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">
    @yield('custom-head')
</head>

<body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">

    {{ $slot }}

    @if (session()->has('alert'))
        <div id="alert-div"
            class="fixed bg-red-100 border border-blue-400 text-blue-700 px-10 py-6 rounded-xl bottom-3 right-3 "
            role="alert">
            <div class="relative">
                <span class=" font-bold ">{{ session('alert') }}</span>
            </div>
        </div>
    @endif
    <script>
        const alertDiv = document.getElementById('alert-div');
        setTimeout(() => {
            alertDiv.style.display = 'none';
        }, 3000);
    </script>
</body>

</html>
