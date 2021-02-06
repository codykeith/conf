<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Example Session Title Goes Here') }}
        </h2>
    </x-slot>
	<div class="mx-auto sm:px-6 lg:px-8 py-8">
	    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
			<div class="grid grid-cols-4">
				<div class="bg-gray-100">
					@livewire('live.details.sidebar')
				</div>
				<div class="col-span-2 border-l border-r px-4 pt-4">
					@livewire('live.details.content')
				</div>
				<div class="bg-gray-100">
					@livewire('live.details.chat')
				</div>
			</div>
	    </div>
	</div>
</div>
</x-app-layout>
