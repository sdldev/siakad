<x-dashboard-layout>
    @include ('dashboard.layouts.breadcumb')
    <div class="overflow-hidden py-8">
        <div class="px-3">
            <form method="POST" action="{{ route('categories.store') }}">
                @csrf
                <x-form.input label="Nama Kategori" title="name" name="name" value="{{ old('name') }}" required />
                <x-primary-button type="submit">
                    Submit
                </x-primary-button>
            </form>
        </div>
    </div>
</x-dashboard-layout>