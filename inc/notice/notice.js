(function ($) {
    "use strict";

    // Handle install and activate plugins button click
    $("#install-activate-button").on("click", function (e) {
        e.preventDefault();
        var button = $(this);
        button.attr("disabled", "disabled");
        button.text("Installing & Activating recommended plugins").addClass("processing-spinner");

        var activationData = {
            action: "sports_outlet_install_and_activate_plugins",
            nonce: sports_outlet_localize.nonce,
        };

        $.post(sports_outlet_localize.ajax_url, activationData, function (response) {
            if (response.success) {
                window.location.href = sports_outlet_localize.redirect_url;
            } else if (response.data && response.data.message) {
                button.text(response.data.message);
            }
        });
    });


    // Handle notice dismiss button click for our notices.
    $(document).on('click', '.notice .notice-dismiss', function () {
        var notice = $(this).closest('.notice');
        var type = notice.data('notice');

        if (!type) {
            return;
        }

        $.ajax({
            type: 'POST',
            url: sports_outlet_localize.ajax_url,
            data: {
                action: 'sports_outlet_dismissed_notice_handler',
                type: type,
                wpnonce: sports_outlet_localize.dismiss_nonce
            },
            success: function (response) {
                if (response.success) {
                    console.log("Notice dismissed successfully");
                } else {
                    console.log("Failed to dismiss notice");
                }
            }
        });
    });

})(jQuery);
