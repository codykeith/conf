<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Admin Dashboard <i class="fas fa-ellipsis-v px-2"></i> User
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			@livewire('admin.attendees.profile')
        </div>
    </div>
</x-app-layout>
