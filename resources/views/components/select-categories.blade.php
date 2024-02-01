<div>
    <label for="categories" class="form-label">Categories</label>

    @foreach ($categories as $category)
        <div class="form-check">
            <input name="categories[]" class="form-check-input" type="checkbox" value="{{ $category->id }}"
                @if (array_search($category->id, $selected_categories) !== false) checked @endif>
            <label class="form-check-label" for="flexCheckDefault">
                {{ $category->name }}
            </label>
        </div>
    @endforeach
</div>
