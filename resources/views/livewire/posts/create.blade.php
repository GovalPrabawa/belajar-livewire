<div>
    <x-flash-message />
    <form wire:submit="save">
        <div class="mb-2">
            {{-- <label for="body" class="visuality-hidden">Body</label> --}}
            <textarea placeholder="what's on your mind ?" wire:model="form.body" name="" id="body" class="form-control"></textarea>
            @error('form.body')
                <small d-block mt-1 class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="flex justify-content-end">
            <button class="btn btn-primary">Save</button>

        </div>
    </form>
</div>
