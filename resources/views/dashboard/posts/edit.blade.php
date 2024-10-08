<x-dashboard-layout>
    @section('title', 'Edit Post')
    <div class="w-full h-full">
        <div class="flex flex-col border">
            @if (Session::has('errors'))
            <x-slot name="header">
                <div class="p-4 sm:ml-64">
                    <div class="mt-12">
                        <h2 class="text-xl font-semibold leading-tight">
                            {{ __('TERDAPAT ERROR') }}
                        </h2>
                        <p>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>- {{ $error }}</li>
                            @endforeach
                        </ul>
                        </p>
                    </div>
                </div>
            </x-slot>
            @endif
        </div>
        <form method="POST" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <input type="hidden" name="url" value="{{ url()->previous() }}">
            <x-form.image-upload label="Upload Gambar" name="image" />
            <x-form.input label="Judul Artikel" title="title" name="title" value="{{ old('title', $post->title) }}" required />
            <x-form.text-editor-edit :post="$post" />
            <x-form.input label="Deskripsi" title="description" name="description" value="{{ old('description', $post->description) }}" required />
            <div class="grid gap-4 sm:grid-cols-3 sm:gap-6">
                <x-form.input label="Tag" title="tags" name="tags" value="{{ old('tags', $post->tags) }}" required />
                <x-form.select label="Kategori" name="category_id" :options="$categories" :selected="old('category_id', $post->category_id)" />
                <x-form.select label="Status" name="status_id" :options="$status" :selected="old('status_id', $post->status_id)" />
            </div>

            <x-primary-button type="submit">
                Update
            </x-primary-button>
        </form>
    </div>
</x-dashboard-layout>