<x-dashboard-layout>
    @section('title', 'Create Post')
    <div class="w-full h-full">
        <form method="POST" action="{{ route('sliders.store') }}" enctype="multipart/form-data">
            @csrf
            <x-form.image-upload label="Upload Gambar" name="image" />
            <x-form.input label="TEXT Slider" title="text" name="text" value="{{ old('text') }}" required />
            <x-primary-button type="submit">
                Submit
            </x-primary-button>
        </form>
    </div>
</x-dashboard-layout>