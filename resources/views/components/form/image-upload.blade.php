<div x-data="imageUploader()" class="mb-4">
    <div x-show="imagePreview" class="mt-4">
        <img x-bind:src="imagePreview" alt="Preview Image" class="imagePreview rounded" />
    </div>
    <input type="file" id="{{ $name }}" name="{{ $name }}" accept="image/*"
        @change="previewImage($event)"
        class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
</div>

@push('scripts')
<script>
    function imageUploader() {
        return {
            imagePreview: '',
            previewImage(event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = e => {
                        this.imagePreview = e.target.result;
                    };
                    reader.readAsDataURL(file);
                } else {
                    this.imagePreview = '';
                }
            }
        }
    }
</script>
@endpush