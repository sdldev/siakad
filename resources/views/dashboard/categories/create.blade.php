<x-dashboard-layout>
    @section('title', 'Create Category')
    <div class="w-full h-full overflow-x-auto">
        <form method="POST" action="{{ route('categories.store') }}">
            @csrf
            <x-form.input label="Nama Kategori" title="name" name="name" value="{{ old('name') }}" required />
            <x-primary-button type="submit">
                Submit
            </x-primary-button>
        </form>
    </div>
</x-dashboard-layout>