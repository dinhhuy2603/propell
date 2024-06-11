jQuery(document).ready(function($) {
    var page = 2; // Next page to load
    var loading = false; // Are we currently loading content?
    var $loadmore = $('#btn-load-more');
    var $container = $('#project-list');
    var categoryId = $loadmore.data('category-id'); // Assuming the button has the category ID as a data attribute
    var serviceId = $loadmore.data('service-id'); // Assuming the button has the category ID as a data attribute

    $loadmore.on('click', function() {
        if (!loading) {
            loading = true;
            // $loadmore.text('Loading...');
            var data = {
                action: 'load_more_projects',
                page: page,
                category_id: categoryId,
                service_id: serviceId
            };
            $.ajax({
                url: ajax_url,
                data: data,
                type: 'POST',
                success: function(response) {
                    if (response !== 'no-more-posts') {
                        $container.append(response); // Append new posts
                        page++; // Increment page number for the next request
                        // $loadmore.text('Load More');
                        loading = false;
                    } else {
                        $loadmore.hide(); // If no more posts, hide the button
                    }
                },
                error: function(xhr, textStatus, errorThrown) {
                    console.error('AJAX error: ' + textStatus, errorThrown);
                    // $loadmore.text('Load More');
                    loading = false;
                }
            });
        }
    });

    var $loadmoreEvent = $('#btn-load-more-event');
    var $eventContainer = $('#event-list');
    $loadmoreEvent.on('click', function() {
        if (!loading) {
            loading = true;
            var data = {
                action: 'load_more_events',
                page: page,
            };
            $.ajax({
                url: ajax_url,
                data: data,
                type: 'POST',
                success: function(response) {
                    if (response !== 'no-more-posts') {
                        $eventContainer.append(response); // Append new posts
                        page++; // Increment page number for the next request
                        // $loadmoreEvent.text('Load More');
                        loading = false;
                    } else {
                        $loadmoreEvent.hide(); // If no more posts, hide the button
                    }
                },
                error: function(xhr, textStatus, errorThrown) {
                    console.error('AJAX error: ' + textStatus, errorThrown);
                    // $loadmoreEvent.text('Load More');
                    loading = false;
                }
            });
        }
    });
});
