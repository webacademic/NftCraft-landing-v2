import "./import/modules";
import "./import/components";

import $ from "./import/jquery"

$('.application__button').click(function () {
    $('.secret').val('harfestd')
})
$('.application__form').submit(function (event) {
    event.preventDefault();
    if ($('.secret').val() != 'harfestd') {
        return false
    } else {
        $.ajax({
            type: "POST",
            url: "/resource/mailer/smart.php",
            data: $(this).serialize()
        }).done(function () {
            $(this).find("input").val("");
            $("form").trigger("reset");
            alert('Заявка успешно отправлена!')
        });
        return false;
    }
});

