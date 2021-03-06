<link rel="stylesheet" href="{{ asset('plugin/editor/css/pygment_trac.css') }}">
<link rel="stylesheet" href="{{ asset('plugin/editor/css/editor.css') }}">
<script type="text/javascript" src="{{ asset('plugin/editor/js/highlight.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugin/editor/js/modal.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugin/editor/js/MIDI.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugin/editor/js/fileupload.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugin/editor/js/bacheditor.js') }}"></script>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<script type="text/javascript" src="{{ asset('plugin/editor/js/bootstrap3-typeahead.js') }}"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(function() {
        url = "{{ url(config('editor.uploadUrl')) }}";

        @if(config('editor.ajaxTopicSearchUrl',null))
            ajaxTopicSearchUrl = "{{ url(config('editor.ajaxTopicSearchUrl')) }}";
        @else
            ajaxTopicSearchUrl = null;
                @endif

        var myEditor = new Editor(url,ajaxTopicSearchUrl);
        myEditor.render('#myEditor');
    });
</script>

<style>
    .editor{
        width:{{ config('editor.width') }};
    }
</style>
<div class="editor">

    <textarea id='myEditor'></textarea>

</div>