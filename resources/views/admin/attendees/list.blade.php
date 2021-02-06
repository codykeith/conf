<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Admin Dashboard <i class="fas fa-ellipsis-v px-2"></i> Users
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="p-5 bg-gray-600 shadow-xl sm:rounded-lg mb-5">
				@livewire('admin.attendees.search')
			</div>
			@livewire('admin.attendees.listings')
        </div>
    </div>
</x-app-layout>
