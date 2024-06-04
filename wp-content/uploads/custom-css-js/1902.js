<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
jQuery(document).ready(function($) {
    // Function to scroll to the TPG - List Layout container
    function scrollToTPG() {
        var tpgContainer = $('.rt-tpg-container.list-layout1-main');
        if (tpgContainer.length) {
            $('html, body').animate({
                scrollTop: tpgContainer.offset().top
            }, 1000);
        }
    }

    // Listen for clicks on pagination links
    $('.rt-pagination-wrap a').on('click', function(e) {
        e.preventDefault(); // Prevent default behavior of link
        var pageURL = $(this).attr('href'); // Get URL of the page
        // Load the page using AJAX
        $.get(pageURL, function(data) {
            // Update content on the page
            var newContent = $(data).find('.rt-tpg-container.list-layout1-main');
            $('.rt-tpg-container.list-layout1-main').replaceWith(newContent);
            // Scroll to the TPG - List Layout container
            scrollToTPG();
        });
    });
});
</script>
<!-- end Simple Custom CSS and JS -->
