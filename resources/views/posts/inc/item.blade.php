<a href="#" class="text-lg font-semibold">{{ $post->user->name }}</a>
<p class="mt-1 text-xs">
    <em>
        {{ $post->created_at->format('d/m/Y') }}
    </em>
    {{ $post->body }}
</p>
<!-- //Cada vez que se muestre un post, se va a verificar si el usuario que está viendo el post es el mismo que lo creó
//Si es así, se mostrará el botón de borrar y si no, no se mostrará -->
<!-- @ can ('destroy-post', $post) -->
<!-- //Usamos ahora el método delete de la clase PostPolicy -->
@can('delete', $post)
<form action="{{ route('posts.destroy', $post->id) }}" method="POST">
    @csrf
    @method('DELETE')

    <button class="text-indigo-600 text-xs"> {{ __('Delete') }} </button>
</form>
@endcan