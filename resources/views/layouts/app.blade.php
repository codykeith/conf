<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Big Idea Boat - Conferences you want to attend.') }}</title>
        <!-- Fonts -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
        <!-- Styles -->
		<link rel="stylesheet/css" type="text/css" href="{{ secure_asset('css/app.css')}}" />
		<link rel="stylesheet/less" type="text/css" href="{{ secure_asset('css/styles.less')}}" />
		<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
		<script src="https://kit.fontawesome.com/769a2c33b9.js" crossorigin="anonymous"></script>
    </head>
    <body class="app">
        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-dropdown')
            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        @stack('modals')
        @livewireScripts
    </body>
</html>
