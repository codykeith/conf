<div class="grid grid-flow-col gap-4 p-4 bg-blue-500 text-white text-xs font-bold tracking-wide">
	<div class="date">
		02/14/2020
	</div>
	<div class="time text-right">
		5:50 PM
	</div>
</div>
<div class="p-4 border-t border-b">
	<div class="lg:flex lg:items-center lg:justify-between">
		<div class="flex-1 min-w-0">
			<h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-xl sm:truncate">
				Example Session Title Goes Here
			</h2>
			<div class="mt-1 flex flex-col sm:flex-row sm:flex-wrap sm:mt-0 sm:space-x-6">
				<div class="mt-2 flex items-center text-sm text-gray-500">
					<i class="fas fa-stream pr-2"></i> Virtual Conferences
				</div>
			</div>
		</div>
		<div class="mt-5 flex lg:mt-0 lg:ml-4">
			<span class="hidden sm:block">
				<a href="{{route('live-details')}}" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
					<i class="far fa-file-alt pr-2"></i> View Session Details
				</a>
			</span>
			<span class="sm:ml-3">
				<button type="button" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
					<i class="far fa-play-circle pr-2"></i> Join Session
				</button>
			</span>
			<span class="ml-3 relative sm:hidden">
				<button type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="mobile-menu" aria-haspopup="true">
					More
					<!-- Heroicon name: chevron-down -->
					<svg class="-mr-1 ml-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
						<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
					</svg>
				</button>
				<div class="origin-top-right absolute right-0 mt-2 -mr-1 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5" aria-labelledby="mobile-menu" role="menu">
					<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">View Session</a>
					<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">View</a>
				</div>
			</span>
		</div>
	</div>
</div>
