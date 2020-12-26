<img src="{{ secure_asset('images/dash_header.png')}}" class="w-full" />

@livewire('dashboard.greeting')

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
    @livewire('dashboard.live')
    @livewire('dashboard.ondemand')
    @livewire('dashboard.posters')
    @livewire('dashboard.exhibitors')
    @livewire('dashboard.sponsors')
    @livewire('dashboard.help')
</div>

@livewire('dashboard.advertisements')
