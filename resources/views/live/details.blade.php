<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Example Session Title Goes Here') }}
        </h2>
    </x-slot>
    <div class="py-6">
		<div class="grid xs:grid-cols-1 lg:grid-cols-6 gap-4 px-8">
			<div>
				<button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
					<i class="far fa-play-circle pr-2 pt-1"></i> Join Session
				</button>
			</div>
			<div>
				<button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
					<i class="far fa-play-circle pr-2 pt-1"></i> Take Session Survey
				</button>
			</div>
		</div>
	</div>
	<div class="mx-auto sm:px-6 lg:px-8">
	    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
			<div class="grid grid-cols-3 gap-4">
				<div>
					@livewire('live.details.sidebar')
				</div>
				<div class="col-span-2">
					@livewire('live.details.content')
				</div>
			</div>
	    </div>
	</div>
</div>
</x-app-layout>
