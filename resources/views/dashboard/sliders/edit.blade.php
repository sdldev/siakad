<x-dashboard-layout>
    @section('title', 'Edit SLider')
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
        <form method="POST" action="{{ route('sliders.update', $slider->id) }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <input type="hidden" name="url" value="{{ url()->previous() }}">
            <x-form.image-upload label="Upload Gambar" name="image" />
            <x-form.input label="Text Slider" title="text" name="text" value="{{ old('text', $slider->text) }}" required />

            <x-primary-button type="submit">
                Update
            </x-primary-button>
        </form>
    </div>
</x-dashboard-layout>