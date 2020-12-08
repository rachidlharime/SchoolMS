$(document).on("click", ".removeBtn", function () {
    $("#confirmBtn").attr('href',$(this).attr('id'))
});