<!DOCTYPE html>
{{-- Here add the laravel way of loading the language  --}}
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Billing Management</title>
    @livewireScripts
    @livewireStyles
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="grid grid-cols-6">
        <div class="hidden md:col-span-1 md:inline p-5 border-r border-r-black h-screen">
            sidebar
        </div>
        <div class="p-5 col-span-5 h-screen w-full overflow-scroll">
        </div>
    </div>
</body>

</html>
