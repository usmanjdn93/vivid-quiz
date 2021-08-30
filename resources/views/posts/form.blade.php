{{ csrf_field() }}

    <input type="text"
           name="title"
           class="form-control"
           value="{{ old('title', $post->title) }}"
           placeholder="The title of your post."
           required>
    <textarea
        name="body"
        class="textarea form-control"
        placeholder="The body for your post">{{ old('body', $post->body) }}</textarea>

<button type="submit" class="btn btn-primary">
    {{ $submitButtonText ?? 'Create Post' }}
</button>
