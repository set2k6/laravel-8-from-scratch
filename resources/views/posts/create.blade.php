<x-layout>
    <section class="mt-8 max-w-md mx-auto mt-8 mb-2">
        <h1 class="text-lg font-bold mb-4">Publish New Post</h1>
    </section>

    <x-panel class="max-w-md mx-auto">
        <section class="px-6 py-4">
            <form method="POST" action="/admin/posts" enctype="multipart/form-data">
                @csrf

                <x-form.input name="title" />
                <x-form.input name="slug" />
                <x-form.input name="thumbnail" type="file" />
                <x-form.input name="excerpt" />
                <x-form.input name="body" />
                <x-form.input name="title" />


                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="slug">Slug</label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="slug"
                           id="slug"
                           value="{{ old('slug') }}"
                           required>

                    @error('slug')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="thumbnail">Thumbnail</label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="file"
                           name="thumbnail"
                           id="thumbnail"
                           value="{{ old('slug') }}"
                           required>

                    @error('slug')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="excerpt">Excerpt</label>

                    <textarea class="border border-gray-400 p-2 w-full"
                        name="excerpt"
                        id="excerpt"
                        required>
                            {{ old('excerpt') }}
                    </textarea>

                    @error('excerpt')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="body">Body</label>

                    <textarea class="border border-gray-400 p-2 w-full"
                        name="body"
                        id="body"
                        required>
                            {{ old('body') }}
                    </textarea>

                    @error('body')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="category_id">Category</label>

                    <select name="category_id" id="category_id">
                        @foreach( \App\Models\Category::all() as $category)
                            <option
                                value="{{ $category->id }}"
                                {{ old('$category_id') == $category->id ? 'selected' : '' }}>
                                 {{ ucwords($category->name) }}</option>
                        @endforeach
                    </select>

                    @error('category')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <x-submit-button>Publish</x-submit-button>
            </form>
{{--        </section>--}}
    </x-panel>
</x-layout>
