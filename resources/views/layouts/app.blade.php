<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('APP_NAME', 'Big Idea Boat - Conferences you want to attend.') }}</title>
        <!-- Fonts -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
        <!-- Styles -->
		<link rel="stylesheet/css" type="text/css" href="{{ secure_asset('css/app.css')}}" />
		<link rel="stylesheet/less" type="text/css" href="{{ secure_asset('css/styles.less')}}" />
		<script src="{{ secure_asset('js/app.js')}}"></script>
		<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" type="text/css">
		<script src="https://kit.fontawesome.com/769a2c33b9.js" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
		<!-- Select2 -->
		<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
		<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    </head>
    <body class="app">
        <div class="min-h-screen bg-gray-400">
            @livewire('navigation-dropdown')
            <!-- Page Heading -->
            <header class="bg-gray-900 shadow">
                <div class="mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
			@livewire('main.footer')
        </div>
        @stack('modals')
        @livewireScripts
		<script>
			$(document).ready(function() {
				$("select").select2({
					width: 'resolve',
					placeholder: "Search or Select"
				});
			});
		</script>
    </body>
</html>
