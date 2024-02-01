
<div>
    <label for="author_id" class="form-label">Author</label>
    <select class="form-control" name="author_id">
        @foreach ($authors as $author)
            <option value="{{ $author->id }}"  @if ($author_id == $author->id) selected="selected" @endif>
                {{ $author->fullName }}
            </option>
        @endforeach
    </select>
</div>
