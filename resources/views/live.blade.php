<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Live Sessions') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mb-5">
            	@livewire('live.header')
			</div>
            <div class="p-5 bg-gray-600 shadow-xl sm:rounded-lg">
				@livewire('live.search')
			</div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mt-5">
				@livewire('live.sessions')
			</div>
        </div>
    </div>
</x-app-layout>
