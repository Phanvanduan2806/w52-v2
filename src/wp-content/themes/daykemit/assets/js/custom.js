function handleLoadMore(elementPath, buttonSelector, initialVisibleItems) {
    const $items = jQuery(elementPath);
    const $loadMoreButton = jQuery(buttonSelector);
    let visibleItems = initialVisibleItems;
    let expanded = false; 

    function updateItems() {
        if (!expanded) {
            $items.slice(0, visibleItems + initialVisibleItems).fadeIn();
            visibleItems += initialVisibleItems;
            if (visibleItems >= $items.length) {
                $loadMoreButton.text("Ẩn bớt");
                expanded = true;
            }
        } else {
            $items.slice(initialVisibleItems).fadeOut();
            visibleItems = initialVisibleItems;
            $loadMoreButton.text("Xem thêm");
            expanded = false;
        }
    }
    $loadMoreButton.on("click", function(event) {
        event.preventDefault(); 
        updateItems();
    });
    $items.hide().slice(0, initialVisibleItems).show();
    $loadMoreButton.text("Xem thêm");
}
// Chinh sua class
handleLoadMore(".best-cpurse .row .col-lg-4", ".best-cpurse .c-btn-xemthem", 3);
handleLoadMore(".topic_content_p2 .row .col-lg-4", ".topic_content_p2 .c-btn-xemthem", 3);


