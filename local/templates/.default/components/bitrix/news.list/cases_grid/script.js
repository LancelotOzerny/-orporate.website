// Case filtering
$(document).ready(function() {
    $('.case-filter').click(function() {
        $('.case-filter').removeClass('active');
        $(this).addClass('active');

        const filter = $(this).data('filter');

        if (filter === 'all') {
            $('.case-item').fadeIn(400);
        } else {
            $('.case-item').fadeOut(400);
            $(`.case-item[data-category="${filter}"]`).fadeIn(400);
        }
    });
});