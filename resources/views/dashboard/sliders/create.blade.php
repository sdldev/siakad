<x-dashboard-layout>
    @section('title', 'Create Post')
    <div class="w-full h-full">
        <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
            @csrf
            <x-form.image-upload label="Upload Gambar" name="image" />
            <x-form.input label="Judul Artikel" title="title" name="title" value="{{ old('title') }}" required />
            <x-form.text-editor />
            <x-form.input label="Deskripsi" title="description" name="description" value="{{ old('description') }}" required />
            <div class="grid gap-4 sm:grid-cols-3 sm:gap-6">
                <x-form.input label="Tags" title="tag" name="tag" value="{{ old('tag') }}" required />

                <x-form.select label="Kategori" name="category_id" :options="$categories" :selected="old('category_id')" />
                <x-form.select label="Status" name="status_id" :options="$status" :selected="old('status_id')" />
            </div>
            <x-primary-button type="submit">
                Submit
            </x-primary-button>
        </form>
    </div>
</x-dashboard-layout>