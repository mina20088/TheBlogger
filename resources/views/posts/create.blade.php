
<x-layouts.dashboard-layout>
    <x-slot name="title">
        {{ $title }}
    </x-slot>

    <x-dashboard.dashboard-content-header title="Create New Post"/>

    <livewire:post.create/>

</x-layouts.dashboard-layout>


