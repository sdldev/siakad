<link type="text/css" rel="stylesheet" href="/css/jodit.min.css" />
<script type="text/javascript" src="/js/jodit.min.js"></script>
<div class="py-3">
    <textarea id="slate" name="content" hidden>{{ old('content', $content ?? '') }}</textarea>
    <input type="hidden" id="hidden-content" name="hidden_content" value="{{ old('content', $content ?? '') }}">
    @if ($errors->has('content'))
    <div class="text-red-500 text-xs mt-2">{{ $errors->first('content') }}</div>
    @endif
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
    const editor = Jodit.make('#slate', {
        theme: 'slate',
        events: {
            change: function(editorInstance) {
                document.getElementById('hidden-content').value = editorInstance.value;
            }
        }
    });

    if (document.getElementById('hidden-content').value) {
        editor.value = document.getElementById('hidden-content').value;
    }
</script>
@endpush