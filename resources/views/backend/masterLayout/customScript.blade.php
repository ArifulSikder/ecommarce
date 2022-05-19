{{-- single image preview for insert and update --}}
<script>
    //preview image user
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#previewHolder, .previewHolder').attr('src', '');
                $('#previewHolder, .previewHolder').attr('src', e.target.result);
                $('#previewHolder, .previewHolder').css('width', '100px')
            }
            reader.readAsDataURL(input.files[0]);
        } else {
            alert('select a file to see preview');
            $('#previewHolder, .previewHolder').attr('src', '');
        }
    }
    $("#photoUpload, .photoUpload").change(function() {
        readURL(this);
    });
</script>
