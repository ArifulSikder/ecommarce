<script>
    $(document).ready(function() {
        $('#searchKeyWord').keyup(function(e) {
            e.preventDefault();
            var searched = $(this).val().trim();
            searchFunction(searched)
        });

        $('#searchKeyWordMobile').keyup(function(e) {
            e.preventDefault();
            var searched = $(this).val().trim();
            searchFunction(searched)
        });

        function searchFunction(searched) {
            var searched = searched;
            $.ajax({
                type: "POST",
                url: "{{ url('live-search') }}",
                data: {
                    searched: searched
                },
                // dataType: "JSON",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    $('.searchAutoComplete').html('');
                    $('.searchAutoComplete').html(response);
                }
            });
        }
    });
</script>
