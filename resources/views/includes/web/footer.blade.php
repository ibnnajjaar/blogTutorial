

<script src="{{ asset('lib/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('lib/popper.min.js') }}"></script>
<script src="{{ asset('lib/bootstrap/js/bootstrap.min.js') }}"></script>
<script>
    // $(document).ready(function () {
    //     $.ajaxSetup({
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         }
    //     })
    // });
</script>

@stack('scripts')

</body>
</html>
