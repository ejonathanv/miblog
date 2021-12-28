<div>
    <div class="mb-4">
        <label class="block" for="">Portada:</label>
        <input type="file" name="cover" accept="image/*">
    </div>
    <div class="mb-4">
        <label class="block" for="">Título:</label>
        <input type="text" name="title" class="w-full" value="{{ isset($post) ? $post->title : old('title') }}" required>
    </div>
    <div class="mb-4">
        <label class="block" for="">Descripción:</label>
        <input type="text" name="description" class="w-full" value="{{ isset($post) ? $post->description: old('title') }}" required>
    </div>
    <div class="mb-4">
        <label class="block" for="">Contenido:</label>
        <textarea name="body" id="editor">{{ isset($post) ? $post->body : old('body') }}</textarea>
    </div>
    <div class="mb-4">
        <label for="" class="block">Etiquetas:</label>
        <input type="text" name="tags" class="w-full" value="{{ isset($post) ? $post->categoriesString : old('tags') }}" required>
    </div>
    <div class="mb-4">
        <label for="" class="block">Descripción (meta):</label>
        <input type="text" name="meta_description" class="w-full" value="{{ isset($post) ? $post->meta_description : old('meta_description') }}" required>
    </div>
    <div class="mb-4">
        <label for="" class="block">Palabras clave (meta):</label>
        <input type="text" name="meta_keywords" class="w-full" value="{{ isset($post) ? $post->meta_keywords : old('meta_description') }}" required>
    </div>
</div>