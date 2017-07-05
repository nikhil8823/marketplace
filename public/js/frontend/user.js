$(document).ready(function () {

    $('input[name=user_category]').change(function () {
        var value = $('input[name=user_category]:checked').val();
        if (value == 1) {
            $("#company_name").hide();
        }
        else {
            $("#company_name").show();
        }
    });


    $("#country").on("change", function (ev) {
        var countryId = $(this).val();
        getCities(countryId);

    });

});

function getCities(countryId) {
    $.ajax({
        url: "getCities",
        type: 'POST',
        data: {'country_id': countryId},
        success: function (response) {
            if (response != '') {
                $("#city").empty();
                $("#city").attr('disabled', false);
                $("#city").append('<option>Select</option>');
                $.each(response, function (key, value) {
                    $("#city").append('<option value="' + value.id + '">' + value.name + '</option>');
                });
            }
            else {
                $("#city").attr('disabled', true);
                $("#city").empty();
                $("#city").append('<option>Select</option>');
            }
        }
    });
}