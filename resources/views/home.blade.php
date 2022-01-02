<x-layout title="Home">
    <div class="container">
        <h2 class="position-absolute top-50 start-50 translate-middle">Hallo {{ Auth::user()->name }}</h2>
    </div>
</x-layout>