<script src="{{ asset('js/neo/index.min.js') }}?v={{ env('APP_VERSION') }}"></script>
<script src="{{ asset('js/neo/plugins/guest.min.js') }}?v={{ env('APP_VERSION') }}"></script>
<script>
    Neo.load(function() {
        document.body.removeAttribute("close");
        document.body.querySelector("#neo-page-cover").remove();
        Neo.Helper.Theme.assign(
            "colors",
            "PRIME",
            getComputedStyle(document.documentElement)
            .getPropertyValue("--prime")
        );
        Neo.upgrade();
    });
</script>
@if (Session::has('message'))
    @php
        $messages = is_array(Session::get('message')) ? Session::get('message') : [Session::get('message')];
    @endphp
    <script>
        Neo.load(function() {
            @foreach ($messages as $message)
                Neo.Toaster.toast("{{ $message }}", "{{ Session::get('type') }}");
            @endforeach
        });
    </script>
@endif
