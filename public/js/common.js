$(document).ready(function () {
    if( $("#rate_comment").length > 0 )  {
        var rat = document.querySelector('#rate_comment');
        rating(rat, 0, 5);
    }

    $("#rate_comment li").on('click', function () {
        $("input[name='stars']").val($(this).data('index') + 1);
        $('#rate_comment + .error-block').hide();
    })


    if( $(".rate_2").length > 0 )  {

        $(".rate_2").each(function() {
            idRating = $(this).attr("id");
            el = document.querySelector("#" + idRating);
            currentRating = $(this).attr("data-rate");
            maxRating= 5;
            myRating = rating(el, currentRating, maxRating);
        });

    }

    $('select[name="accessId"]').on('change', function (e) {
        $('#accessPrice').text($(this).children('option:selected').data('price'));
    })
});
