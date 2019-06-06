<!-- bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
<script>
    $('#type').on('change', function() {
        var type = $(this).find('option:selected').val();
        $('.docform').hide();
        $('#inlineFormCustomSelect option[value=defauld]').prop("selected", true);

        if (type == 'ur') {
            $('.ur').hide();
            $('.fiz').show();
        } else {
            $('.ur').show();
            $('.fiz').hide();
        }


    });

    $('#inlineFormCustomSelect').on('change', function() {
        var selected_form = $(this).find('option:selected').val();

        $('.docform').hide();
        $('#' + selected_form).show();

    });

    $('#SelectLog').on('change', function() {
        var selected_form = $(this).find('option:selected').val();

        // $('.date').hide();
        $('#' + selected_form).show();
        $('td, #' + selected_form).show();

    });

    var selectetForm = $('#inlineFormCustomSelect').find('option:selected').val();
    $('#'+selectetForm).show();

</script>
</body>

</html>