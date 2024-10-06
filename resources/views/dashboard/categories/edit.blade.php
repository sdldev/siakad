<x-dashboard-layout>
    @section('title', 'Edit Category')
    <div class="w-full h-full overflow-x-auto">
        <form method="POST" action="{{ route('categories.update', $category->id) }}">
            @csrf
            @method('put')
            <x-form.input label="Category Name" title="name" name="name" type="text" value="{{ old('name', $category->name) }}" />
            <x-primary-button type="submit">
                Update
            </x-primary-button>
        </form>
    </div>
</x-dashboard-layout>