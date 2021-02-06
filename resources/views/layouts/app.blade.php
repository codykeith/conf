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
		<!--plyr css -->
		<link rel="stylesheet" href="https://cdn.plyr.io/3.6.3/plyr.css" />
		<script src="{{ secure_asset('js/app.js')}}"></script>
		<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.23.0/ui/trumbowyg.min.css" integrity="sha512-iw/TO6rC/bRmSOiXlanoUCVdNrnJBCOufp2s3vhTPyP1Z0CtTSBNbEd5wIo8VJanpONGJSyPOZ5ZRjZ/ojmc7g==" crossorigin="anonymous" />
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    </head>
    <body class="app">
        <div class="min-h-screen bg-gray-400">
			@if(str_contains(url()->current(), '/admin'))
				@livewire('app.navigation.admin')
			@else
				@livewire('app.navigation.attendee')
			@endif
            <!-- Page Heading -->
            <header class="bg-gray-900 shadow">
                <div class="mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
            <!-- Page Content -->
            <main class="min-h-screen">
                {{ $slot }}
            </main>
			@livewire('main.footer')
        </div>
        @stack('modals')
        @livewireScripts
		<script>
			less = {
				env: "development",
				async: false,
				fileAsync: false,
				poll: 1000,
				functions: {},
				dumpLineNumbers: "comments",
				relativeUrls: false,
				rootpath: ":/a.com/"
			};
		</script>
		<script src="//cdn.jsdelivr.net/npm/less@3.13" ></script>
		<script src="https://kit.fontawesome.com/769a2c33b9.js" crossorigin="anonymous"></script>
		<!-- Select2 -->
		<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
		<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
		<!-- plyr js -->
		<script src="https://cdn.plyr.io/3.6.3/plyr.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sendbird/3.0.141/SendBird.min.js" integrity="sha512-Co0zBkBcYrK78gEExLnWd+kL50A7497jPYsU746yK96E5CSIcmmjDWnGVNv7xsxLKDXr7hfZpcHAIGxJ9uUgEg==" crossorigin="anonymous"></script>
		<script src="{{secure_asset('js/liveChat.SendBird.js')}}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.23.0/trumbowyg.min.js" integrity="sha512-sffB9/tXFFTwradcJHhojkhmrCj0hWeaz8M05Aaap5/vlYBfLx5Y7woKi6y0NrqVNgben6OIANTGGlojPTQGEw==" crossorigin="anonymous"></script>
		<script>
			$(document).ready(function() {
				$("select").select2({
					width: 'resolve',
					placeholder: "Search or Select"
				});
			});
		</script>
		<script>
			const players = Plyr.setup('video');
		</script>
		<script>
			$('textarea').trumbowyg({
				btns: [['strong', 'em',], ['insertImage']],
				autogrow: true
			});
			$('textarea#field_text_help').trumbowyg().on('tbwchange', function(){
				var helpVal = $(this).val();
				$('#preview_field_text_help').html(helpVal);
			});
			$('textarea#field_textarea_help').trumbowyg().on('tbwchange', function(){
				var helpVal = $(this).val();
				$('#preview_field_textarea_help').html(helpVal);
			});
		</script>
    </body>
</html>
