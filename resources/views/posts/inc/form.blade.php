<!-- Si hay algo que mostrar a nivel de status muestra lo siguiente   -->
<x-session-status class="mb-4" :status="session('status')" />
<!-- Oswaldo -->
<!-- Validation Errors -->
<x-validation-errors class="mb-4" :errors="$errors" />
<!-- Oswaldo -->

<!-- route('posts.store') apunta a la ruta posts.store que se encuenta en routes/web.php -->
<form action="{{ route('posts.store') }}" method="POST">
    <!-- token de seguridad -->
    @csrf

    <div class="mt-4">
        <x-input-label for="body" :value="__('Body')" />

        <x-textarea id="body" class="block mt-1 w-full" name="body" required />
    </div>

    <div class="flex items-center justify-end mt-4">
        <x-primary-button>
            {{ __('Save') }}
        </x-primary-button>
    </div>
</form>