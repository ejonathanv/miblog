<div>
    <div class="mb-4">
        <label class="block" for="">Título:</label>
        <input type="text" name="title" class="w-full" value="{{ isset($page) ? $page->title : old('title') }}" required>
    </div>
    <div class="mb-4">
        <label class="block" for="">Contenido:</label>
        <textarea name="body" id="editor">{{ isset($page) ? $page->body : old('body') }}</textarea>
    </div>
</div>