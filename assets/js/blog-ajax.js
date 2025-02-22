jQuery(document).ready(function($) {
    let typingTimer;
    const doneTypingInterval = 500;
    
    $('#searchInput').on('keyup', function() {
        clearTimeout(typingTimer);
        typingTimer = setTimeout(searchPosts, doneTypingInterval);
    });
    
    function searchPosts() {
        const searchValue = $('#searchInput').val();
        
        $.ajax({
            url: blogAjax.ajaxurl,
            type: 'POST',
            data: {
                action: 'blog_search',
                search: searchValue
            },
            success: function(response) {
                $('.main-blog-post').html(response);
            }
        });
    }
});