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
    <body class="home">
		<div class="relative bg-gray-100 overflow-hidden">
			<div class="max-w-7xl mx-auto">
				<div class="relative z-10 pb-8 bg-gray-100 sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
					<svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-gray-100 transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
						<polygon points="50,0 100,0 50,100 0,100" />
					</svg>
					<div class="relative pt-6 px-4 sm:px-6 lg:px-8">
						<nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
							<div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
								<div class="flex items-center justify-between w-full md:w-auto">
									<a href="#"> <span class="sr-only">Workflow</span> <img class="h-8 w-auto sm:h-10" src="{{secure_asset('images/logo_set.svg')}}"> </a>
									<div class="-mr-2 flex items-center md:hidden">
										<button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500" id="main-menu" aria-haspopup="true"> <span class="sr-only">Open main menu</span>
											<!-- Heroicon name: menu -->
											<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /> </svg>
										</button>
									</div>
								</div>
							</div>
							<div class="hidden md:block md:ml-10 md:pr-4 md:space-x-8">
								<a href="#" class="font-medium text-gray-500 hover:text-gray-900">Attendees</a>
								<a href="#" class="font-medium text-gray-500 hover:text-gray-900">Sessions</a>
								<a href="#" class="font-medium text-gray-500 hover:text-gray-900">Show Hall</a>
								<a href="#" class="font-medium text-gray-500 hover:text-gray-900">About</a>
								<a href="#" class="font-medium text-blue-600 hover:text-blue-500">Log in</a>
							</div>
						</nav>
					</div>
					<div class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
						<div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
							<div class="px-5 pt-4 flex items-center justify-between">
								<div>
									<img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-blue-600.svg" alt="">
								</div>
								<div class="-mr-2">
									<button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500"> <span class="sr-only">Close main menu</span>
										<!-- Heroicon name: x -->
										<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /> </svg>
									</button>
								</div>
							</div>
							<div role="menu" aria-orientation="vertical" aria-labelledby="main-menu">
								<div class="px-2 pt-2 pb-3 space-y-1" role="none">
									<a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50" role="menuitem">Attendees</a>
									<a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50" role="menuitem">Sessions</a>
									 <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50" role="menuitem">Exhibitors</a>
									 <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50" role="menuitem">About</a>
								</div>
								<div role="none">
									<a href="#" class="block w-full px-5 py-3 text-center font-medium text-blue-600 bg-gray-50 hover:bg-gray-100" role="menuitem">
										Log in
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="hidden pt-2 mt-2 border-t-2 border-blue-100 text-center mr-4">
						<a href="#" class="sub-links hover:text-blue-500">On-Demand Sessions</a>
						<a href="#" class="sub-links hover:text-blue-500">Live Sessions</a>
						<a href="#" class="sub-links hover:text-blue-500">Posters</a>
					</div>
					<main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
						<div class="sm:text-center lg:text-left">
							<h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
								<span class="block xl:inline">Global Reach for</span>
								<span class="block text-blue-600 xl:inline">Every Conference</span>
							</h1>
							<p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0"> Learn how <span class="text-blue-600">Big Idea Boat</span> can manage your next conference. We work with you to create the best experience for both your in-person and virtual attendees.</p>
							<div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
								<div class="rounded-md shadow">
									<a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 md:py-4 md:text-lg md:px-10">View Features</a>
								</div>
								<div class="mt-3 sm:mt-0 sm:ml-3">
									<a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-200 md:py-4 md:text-lg md:px-10">Schedule a Demo</a>
								</div>
							</div>
						</div>
					</main>
				</div>
			</div>
			<div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2"> <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="{{secure_asset('images/bg.jpg')}}" alt=""> </div>
		</div>
		<!-- Call to Action -->
		<div class="bg-gray-50">
			<div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
				<h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
					<span class="block">Ready to dive in?</span>
					<span class="block text-blue-600">Click a demo to the right.</span>
				</h2>
				<div class="mt-8 lex lg:mt-0 lg:flex-shrink-0">
					<div class="inline-flex rounded-md shadow">
						<a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-700 hover:bg-blue-800">Attendee Demo</a>
					</div>
					<div class="inline-flex rounded-md shadow ml-3">
						<a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">Exhibitor Demo</a>
					</div>
					<div class="inline-flex rounded-md shadow ml-3">
						<a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-500 hover:bg-blue-600">Admin Demo</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Details -->
		<div class="py-12 bg-white">
			<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
				<div class="lg:text-center">
					<h2 class="text-base text-blue-600 font-semibold tracking-wide uppercase">Features</h2>
					<p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
						Connecting In-Person and Virtual Attendees and Exhibitors.
					</p>
					<p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
						Our software allows you to bridge the gap between live and virtual conferences. Increase attendence and revenue by allowing attendees to view sessions and interact with sessions in real time.
					</p>
				</div>
				<div class="mt-10">
					<dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
						<div class="flex">
							<div class="flex-shrink-0">
								<div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
									<!-- Heroicon name: globe-alt -->
									<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
									</svg>
								</div>
							</div>
							<div class="ml-4">
								<dt class="text-lg leading-6 font-medium text-gray-900">Bridging the Digital Divide Now.</dt>
								<dd class="mt-2 text-base text-gray-500">In March of 2020, COVID-19 caused the world to go into lockdown. As a result, we saw a spike in conferences moving from physical to virtual. OpenWater, our parent company, adapted to the needs of our clients and rapidly integrated with Zoom. This allowed us to serve virtual sessions to hundreds of thousands of attendees in a matter of months. We took we what learned and built <span class="text-blue-600">Big Idea Boat</span>.</dd>
							</div>
						</div>
						<div class="flex">
							<div class="flex-shrink-0">
								<div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
									<!-- Heroicon name: scale -->
									<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
									</svg>
								</div>
							</div>
							<div class="ml-4">
								<dt class="text-lg leading-6 font-medium text-gray-900">Adapting to the Future.</dt>
								<dd class="mt-2 text-base text-gray-500">As we develop for the future, we realize that there is a need for hybrid conferences. Due to the technical skills involved to achieve this, it can often be overwhelming. We take the pressure off by providing you with an easy to use interface to manage every aspect of your conference. Start by managing ticketing. Our <span class="text-blue-600">Hybrid Conference Ticketing System &#8482;</span> allows you to manage both in-person and virtual restrictions.</dd>
							</div>
						</div>
						<div class="flex">
							<div class="flex-shrink-0">
								<div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
									<!-- Heroicon name: lightning-bolt -->
									<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
									</svg>
								</div>
							</div>
							<div class="ml-4">
								<dt class="text-lg leading-6 font-medium text-gray-900">Control of Technology.</dt>
								<dd class="mt-2 text-base text-gray-500">Whether you are a conference hall with screens for your posters, or you are running a virtual only conference, we have you covered. Our software allows you to easily pre-load conference displays with presentations, posters, or exhibitor information. Our <span class="text-blue-600">Hybrid Conference Livestreaming Platform &#8482;</span> allows you to stream your in-person conferences, as well as hosting a completely virtual conference.</dd>
							</div>
						</div>
						<div class="flex">
							<div class="flex-shrink-0">
								<div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
									<!-- Heroicon name: annotation -->
									<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
									</svg>

								</div>
							</div>
							<div class="ml-4">
								<dt class="text-lg leading-6 font-medium text-gray-900">Support You Can Depend On.</dt>
								<dd class="mt-2 text-base text-gray-500">When you join <span class="text-blue-600">Big Idea Boat</span>, you are assigned an account manager and a project manager. Your <span class="text-blue-600">Account Manager</span> will assist you in selecting the right products for your conference. Once your licenses have been selected, your <span class="text-blue-600">Project Manager</span> will assist you in implementing your conference. You have the option to have <span class="text-blue-600">On-Site Support</span> and <span class="text-blue-600">Virtual Support</span></dd>
							</div>
						</div>
					</dl>
				</div>
			</div>
		</div>
		<footer class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:justify-between text-white">
			<div class="w-auto px-6">
				<img class="w-100" src="{{secure_asset('images/logo_white.svg')}}">
				<h6 class="mt-4 text-2xl">OpenWater Software, Inc</h6>
				<p class="mt-4 text-lg">4401 Fairfax Drive, Suite 200<br />
				Arlington, VA 22203</p>
				<p class="mt-4 text-lg">202-765-0247</p>
				<p class="mt-4 text-lg">hi@bigideaboat.com</p>
			</div>
			<div class="w-auto px-6">
				<h6 class="text-lg pb-4">Attendees</h6>
				<ul>
					<li class="pb-2"><a href="#" class="text-blue-100 pl-4"><i class="far fa-dot-circle text-blue-300"></i> Registration</a></li>
					<li class="pb-2"><a href="#" class="text-blue-100 pl-4"><i class="far fa-dot-circle text-blue-300"></i> Live Attendence</a></li>
					<li class="pb-2"><a href="#" class="text-blue-100 pl-4"><i class="far fa-dot-circle text-blue-300"></i> Virtual Attendence</a></li>
				</ul>
			</div>
			<div class="w-auto px-6">
				<h6 class="text-lg pb-4">Sessions</h6>
				<ul>
					<li class="pb-2"><a href="#" class="text-blue-100 pl-4"><i class="far fa-dot-circle text-blue-300"></i> Live Sessions</a></li>
					<li class="pb-2"><a href="#" class="text-blue-100 pl-4"><i class="far fa-dot-circle text-blue-300"></i> On-Demand Sessions</a></li>
					<li class="pb-2"><a href="#" class="text-blue-100 pl-4"><i class="far fa-dot-circle text-blue-300"></i> Posters</a></li>
				</ul>
			</div>
			<div class="w-auto px-6">
				<h6 class="text-lg pb-4">Show Hall</h6>
				<ul>
					<li class="pb-2"><a href="#" class="text-blue-100 pl-4"><i class="far fa-dot-circle text-blue-300"></i> Exhibitors</a></li>
					<li class="pb-2"><a href="#" class="text-blue-100 pl-4"><i class="far fa-dot-circle text-blue-300"></i> Sponsors</a></li>
				</ul>
			</div>
			<div class="w-auto px-6">
				<h6 class="text-lg pb-4">Admin</h6>
				<ul>
					<li class="pb-2"><a href="#" class="text-blue-100 pl-4"><i class="far fa-dot-circle text-blue-300"></i> Exhibitors</a></li>
					<li class="pb-2"><a href="#" class="text-blue-100 pl-4"><i class="far fa-dot-circle text-blue-300"></i> Sponsors</a></li>
				</ul>
			</div>
		</footer>
		<!-- LESS CSS -->
		<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" ></script>
		<!-- LESS CSS ACTIVATOR -->
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
	</body>
</html>
