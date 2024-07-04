$(document).ready(function(){
    $(".menu-button").click(function(){
        $(".dashboard-navPanel").toggleClass("active");
    });
    $(".menuBtn").click(function(){
        $(".navbarListMobile").toggleClass("open");
    });
    $('.faqItem').on('click', function() {
        // Remove 'active' class from all.faqItemImageContainer and.faqItemBottom initially
        $('.faqItemImageContainer,.faqItemBottom').removeClass('active');

        // Add 'active' class to the clicked.faqItemImageContainer and.faqItemBottom
        $(this).find('.faqItemImageContainer,.faqItemBottom').addClass('active');
    });
    $('.accordion-header').on('click', function() {
        var $faqItem = $(this).closest('.faq-item');
        $faqItem.find('.accordion-collapse').slideToggle(); // Using slideToggle for smoother animation
        var isInitiallyExpanded = $faqItem.find('.accordion-button').attr('aria-expanded') === 'true';
        if (!isInitiallyExpanded) { // If initially collapsed
            $faqItem.find('.accordion-button').attr("aria-expanded", "true");
            $faqItem.find('.accordion-button').removeClass('collapsed');
        } else { // If initially expanded
            $faqItem.find('.accordion-button').attr("aria-expanded", "false");
            $faqItem.find('.accordion-button').addClass('collapsed');
        }
    });

    $('.edit-btn').on('click', function() {
        $('.edit-user-section').toggle();
    });
    $(window).on('click', function(event) {
        if (!$(event.target).closest('.Referral-popup-content').length) {
            $('.Referral-popup-content').hide();
            $('.ReferralModal').removeClass();
        }
        if (!$(".dashboard-navPanel").is(event.target) && // If the click was outside the panel
        $(".dashboard-navPanel").has(event.target).length === 0) { // And the panel itself wasn't clicked
        $(".dashboard-navPanel").removeClass("active");
    }
    });
});
