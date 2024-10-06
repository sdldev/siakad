<link type="text/css" rel="stylesheet" href="/css/jodit.min.css" />  
<script type="text/javascript" src="/js/jodit.min.js"></script>  

<textarea id="editor" name="content" >{{ old('content', $post->content) }}</textarea>  
@push('scripts')  
<script>  
    document.addEventListener('DOMContentLoaded', function () {  
        const editor = Jodit.make('#editor');  
        editor.value = document.querySelector('textarea[name="content"]').value; // Mengatur nilai editor dengan konten yang sudah ada.  
    });  
</script>  
@endpush  