<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <!-- konten -->
    <div class="container">
        <livewire:add-page>
    </div>
</x-app-layout>