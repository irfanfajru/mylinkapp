<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('edit Page') }}
        </h2>
    </x-slot>
    <!-- konten -->
    <div class="container">
     <livewire:edit-page>
    </div>
</x-app-layout>