<link type="text/css" rel="stylesheet" href="/css/jodit.min.css" />  
<script type="text/javascript" src="/js/jodit.min.js"></script>  

<textarea id="editor" name="content" hidden>{{ old('content', $content ?? '') }}</textarea>  
<input type="hidden" id="hidden-content" name="hidden_content" value="{{ old('content', $content ?? '') }}">  
@if ($errors->has('content'))  
    <div class="text-red-500 text-xs mt-2">{{ $errors->first('content') }}</div>  
@endif  

@push('scripts')  
<script>  
    const editor = Jodit.make('#editor', {  
        events: {  
            change: function (editorInstance) {  
                document.getElementById('hidden-content').value = editorInstance.value;  
            }  
        }  
    });  

    if (document.getElementById('hidden-content').value) {  
        editor.value = document.getElementById('hidden-content').value;  
    }  
</script>  
@endpush