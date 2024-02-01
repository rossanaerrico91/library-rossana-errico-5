<form wire:submit.prevent="store">
    <label class="form-label">Titolo</label>
    <input class="form-control" type="text" wire:model="title">
    @error('title')
        <span class="error text-danger">{{ $message }}</span>
    @enderror

    <label class="form-label">Sotto-Titolo</label>
    <input class="form-control" type="text" wire:model="subtitle">
    @error('subtitle')
        <span class="error text-danger">{{ $message }}</span>
    @enderror

    <label class="form-label">Descrizione</label>
    <textarea class="form-control" wire:model="description"></textarea>
    @error('description')
        <span class="error text-danger">{{ $message }}</span>
    @enderror

    <button class="btn btn-primary" type="submit">Create</button>

    @if (Session::has('tasks'))
        <p class="alert alert-info">{{ Session::get('tasks') }}
            <br>
            <a class="btn btn-primary" href="{{ route('articles.index') }}">Torna agli Articoli</a>
        </p>
    @endif
</form>
