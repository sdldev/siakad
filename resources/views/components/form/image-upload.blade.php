<div class="mb-6">
    <label class="block" x-data="showImage()">
        <span class="sr-only">Choose File</span>
        <input type="file" id="{{ $name }}" name="{{ $name }}" accept="image/*" @change="showPreview(event)" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" require />
        <img id="preview" class="object-cover h-32 mt-2 w-60">
    </label>
    @error('image')
    <div class="flex items-center text-sm text-red-600">
        {{ $message }}

    </div>
    @enderror
</div>


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