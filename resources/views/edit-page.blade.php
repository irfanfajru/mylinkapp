<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Edit Page') }}
        </h2>
    </x-slot>
    <!-- konten -->
    <div class="container">
        <livewire:edit-page :pageid="$id_page">
    </div>
</x-app-layout>