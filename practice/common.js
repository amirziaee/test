$(document).ready(function () {
    $(".ajaxSubmit").on("submit",function (event) {
        event.preventDefault();
        var formTag = $(this);
        var resultTag = formTag.find("div.result");
        resultTag.slideDown();
        $.ajax({
            url: formTag.attr("action"),
            data: formTag.serialize(),
            method:formTag.attr("method"),
            success: function(response){
                resultTag.html(response);
            }});
    });

});

