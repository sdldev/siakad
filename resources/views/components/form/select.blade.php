<div class="space-y-1 py-2">
    <label for="{{ $id }}" class="block text-gray-700 mb-2">{{ $label }}:</label>  
    <select name="{{ $name }}" id="{{ $id }}"  
        class="border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-200 p-2 w-full">  
        <option value="">-- Pilih {{ $label }} --</option>  
        @foreach($options as $option)  
            <option value="{{ $option->id }}" {{ (old($name) == $option->id || $selected == $option->id) ? 'selected' : '' }}>  
                {{ $option->name }}  
            </option>  
        @endforeach  
    </select>  
    @error($name)
    <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
    @enderror
</div>  