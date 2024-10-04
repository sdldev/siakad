<div class="space-y-1 py-2">
    <label for="{{$title}}"
        class="inline-block text-sm font-medium mt-2.5 ">
        {{$label}} <span class="px-2 text-xs text-primary-600"> {{$note ?? ''}}</span>
    </label>
    <input id="{{$title}}" type="{{$type ?? ''}}" name="{{$title}}" value="{{$value ?? old($title)}}"
        class="rounded-md py-2 px-3 pr-11 block w-full text-sm focus:border-blue-500 focus:ring-blue-500 bg-gray-200 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
        placeholder="{{$label}}">
    @error($title)
    <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
    @enderror
</div>