$('#show-search').click(() => {
    $('#hidden-search-bar').removeClass('d-none');
    $('#navbar-elements').addClass('d-none');
});

$('#show-navbar-elements').click(() => {
    $('#hidden-search-bar').addClass('d-none');
    $('#navbar-elements').removeClass('d-none');
});