<!-- //Recorrer con foreach los posts que se envían desde el controlador -->
@foreach($posts as $post)
    <div class="mt-4">
        <!-- //Incluir el archivo item.blade.php -->
        @include('posts.inc.item')
    </div>

@endforeach

<div class="mt-4" >
    <!-- //Incluir el archivo pagination.blade.php -->
    {{ $posts->links()}}
</div>