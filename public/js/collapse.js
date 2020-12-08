$(document).ready(function () {
    handleCollapse();

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar, #content, #sidebarCollapse').toggleClass('active');
        $('.collapse.in').toggleClass('in');
    });

    $( window ).resize(handleCollapse);

    function handleCollapse() {
        if($( window ).width() < 992) {
            $('#sidebar, #content, #sidebarCollapse').addClass('active');
            $('.collapse.in').addClass('in');
        } else {
            $('#sidebar, #content, #sidebarCollapse').removeClass('active');
            $('.collapse.in').removeClass('in');
        }
    }
    
});