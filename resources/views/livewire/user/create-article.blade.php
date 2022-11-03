<div>
    @if (session()->has('success'))
        <div class=" text-white pl-5 py-2.5 mb-6 text-xl rounded bg-green-500">
            {{ session('success') }}
        </div>
    @endif

    <x-card title="Create New Article">
        <div class="grid grid-cols-1 gap-6">
            <div class=" col-span-2">
                <x-input label="Title" placeholder="Title" wire:model.defer="title" />
            </div>

            <div class="col-span-2">
                <x-input label="Tags (comma separated)" placeholder="eg: php, laravel, react" wire:model.defer="tags" />
            </div>

            <div class="col-span-2">
                <x-textarea label="Content" placeholder="Content" wire:model.defer="content" />
            </div>

            <div class="space-y-3 capitalize col-span-2">
                <p class="font-semibold">Select category</p>
                @foreach ($categories as $category)
                    <label class="flex items-center h-5 gap-x-3">
                        <input type="checkbox" value="{{ $category->id }}" wire:model.defer="category"
                            class="form-checkbox rounded transition ease-in-out duration-100 border-secondary-300 text-primary-600 focus:ring-primary-600 focus:border-primary-400">
                        {{ $category->name }}
                    </label>
                @endforeach
                @error('category')
                    <p class="mt-2 text-sm text-negative-600">{{ $message }}</p>
                @enderror
            </div>

            {{-- <x-toggle label="Do you want to publish this post?" wire:model.defer="terms" /> --}}
        </div>

        <x-slot name="footer">
            <div class="flex items-center gap-x-5 justify-end">
                <x-button flat sm rose label='Go Back' href="{{ route('user.articles.index') }}" />
                <x-button wire:click="store" label="Save" wire:loading.spinner="save" primary />
            </div>
        </x-slot>
    </x-card>
</div>
