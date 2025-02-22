// Add this at the top of the file
const $ = jQuery;
let initialPosts = null;

// Store initial posts on page load
function cacheInitialPosts() {
    initialPosts = $('.main-blog-post').html();
}

$(document).ready(function($) {
    
    // Store initial posts
    cacheInitialPosts();


    let typingTimer;
    const doneTypingInterval = 500;
    
    // Prevent form submission
    $('#blogSearchForm').on('submit', function(e) {
        e.preventDefault();
        searchPosts();
    });

    $('#searchInput').on('keyup', function() {
        clearTimeout(typingTimer);
        typingTimer = setTimeout(searchPosts, doneTypingInterval);
    });
    
    function searchPosts() {
        const searchValue = $('#searchInput').val().trim();

        if (searchValue.length < 3) {
            if (initialPosts) {
                $('.main-blog-post').html(initialPosts);
            } else {
                // Fallback: Reload initial content via AJAX
                $.ajax({
                    url: blogAjax.ajaxurl,
                    type: 'POST',
                    data: {
                        action: 'get_initial_posts',
                        security: blogAjax.nonce
                    },
                    success: function(response) {
                        if(response.success) {
                            initialPosts = response.data; // Cache the response
                            $('.main-blog-post').html(response.data);
                        }
                    }
                });
            }
            return;
        }    
        
        $.ajax({
            url: blogAjax.ajaxurl,
            type: 'POST',
            data: {
                action: 'blog_search',
                search: searchValue,
                security: blogAjax.nonce // Add nonce
            },
            beforeSend: function() {
                $('.main-blog-post').html('<div class="loading-spinner loading-spinner--primary"></div>');
            },
            success: function(response) {
                if(response.success) {
                    $('.main-blog-post').html(response.data);
                } else {
                    console.error('Server error:', response.data);
                    $('.main-blog-post').html('<p>Error: ' + response.data + '</p>');
                }
            },
            error: function(xhr) {
                const errorMsg = xhr.responseJSON && xhr.responseJSON.data 
                    ? xhr.responseJSON.data 
                    : 'Connection failed';
                $('.main-blog-post').html('<p>Error: ' + errorMsg + '</p>');
                console.error('AJAX Error:', xhr.status, errorMsg);
            }
        });
    }
});