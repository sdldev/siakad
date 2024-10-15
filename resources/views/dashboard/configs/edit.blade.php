<section>

    <form method="post" action="{{ route('config.update') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
        @csrf
        @method('patch')
        <input type="hidden" name="url" value="{{ url()->previous() }}">
        <x-form.image-upload label="Upload Gambar" name="image" />
        <x-form.input label="Nama Sekolah" title="name" name="name" value="{{ old('name', $configs->name) }}" required />
        <x-form.input label="Deskripsi" title="description" name="description" value="{{ old('description', $configs->description) }}" required />
        <x-form.input label="Alamat Sekolah" title="address" name="address" value="{{ old('address', $configs->address) }}" required />
        <x-form.input label="NPSN" title="npsn" name="npsn" value="{{ old('npsn', $configs->npsn) }}" required />
        <x-form.input label="PHONE" title="phone" name="phone" value="{{ old('phone', $configs->phone) }}" required />
        <x-form.input label="Email" title="email" name="email" value="{{ old('email', $configs->email) }}" required />
        <x-form.input label="Link Facebook" title="fb" name="fb" value="{{ old('fb', $configs->fb) }}" required />
        <x-form.input label="Link IG" title="ig" name="ig" value="{{ old('ig', $configs->ig) }}" required />
        <x-form.input label="Link Tiktok" title="tiktok" name="tiktok" value="{{ old('tiktok', $configs->tiktok) }}" required />
        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Update') }}</x-primary-button>
            @if (session()->has('status'))
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600 dark:text-gray-400">{{ session()->get('status') }}</p>
            @endif
        </div>
    </form>
</section>

@push('scripts')
<script>
    function showImage() {
        return {
            showPreview(event) {
                if (event.target.files.length > 0) {
                    var src = URL.createObjectURL(event.target.files[0]);
                    var preview = document.getElementById("preview");
                    preview.src = src;
                    preview.style.display = "block";
                }
            }
        }
    }
</script>
@endpush