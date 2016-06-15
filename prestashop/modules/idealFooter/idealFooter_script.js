var footerNewsletterForm = $('#footerNewsletterForm');
footerNewsletterForm.submit(function() {
    $.ajax({
        type: "POST",
        url: "https://www.hellofresh.com.au/newsletter/signupajax/?ajax=true&amp;type=index",
        data: {
            'YII_CSRF_TOKEN': __token,
            'email': $('#newsletter_footer_email').val(),
        },
        dataType: 'json',
        beforeSend: function() {
            footerNewsletterForm.find('#footerNewsletterForm .footer_newsletter_error').hide();
        },
        success: function(data) {
            if ( data.validation === false ) {
                footerNewsletterForm.find('.footer_newsletter_error').html(data.error).css('font-style','italic').show();
            } else {
                //eventtracker.trackfunction('NEWSLETTER_SIGNUP');
                footerNewsletterForm.find('.footerNewsletterSubscription').hide();
                footerNewsletterForm.find('.footer_newsletter_error').hide();
                footerNewsletterForm.find('.footer_newsletter_success').html( "Congratulations! You've successfully signed up.").css('font-style','italic').show();
            }
        }
    });

    return false;
});

$('#submitNewsletter').on('click', function(){
    $( '#footerNewsletterForm' ).submit();
});