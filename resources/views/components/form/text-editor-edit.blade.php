<link type="text/css" rel="stylesheet" href="/css/jodit.min.css" />
<script type="text/javascript" src="/js/jodit.min.js"></script>
<div class="py-3">
    <textarea id="slate" name="content">{{ old('content', $post->content) }}</textarea>
</div>
@push('styles')
<style>
    .jodit_theme_slate {
        --jd-color-background-default: #64748b;
        --jd-color-border: #334155;
        --jd-color-panel: #1e293b;
        --jd-color-icon: #cbd5e1;
    }
</style>
@endpush
@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const editor = Jodit.make('#slate', {
            theme: 'slate',
            "buttons": "bold,italic,underline,strikethrough,ul,ol,font,fontsize,paragraph,classSpan,file,image,spellcheck,cut,copy,paste,selectall,copyformat,hr"
        });
        editor.value = document.querySelector('textarea[name="content"]').value;
    });
</script>
@endpush