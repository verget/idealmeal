<div class="footer-bg section-inner-shadow hidden-print">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-footer col-1-footer">
                <h2 class="sans-serif">HelloNewsletter</h2>
                <p>Sign up now to get delicious recipes, ideas and the latest news from HelloFresh. Get started with $15 off your first delivery!</p>
                <form method="post" action="https://www.hellofresh.com.au/newsletter/signupajax/?ajax=true&amp;type=index" id="footerNewsletterForm">
                    <div style="display:none">
                        <input type="hidden" name="YII_CSRF_TOKEN" value="2951221f80c399fdbba32b56fa778d5fffb9849a">
                    </div>

                    <div class="input-group input-group-lg footerNewsletterSubscription">
                        <input type="email" placeholder="Enter E-Mail Address" class="form-control" id="newsletter_footer_email">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-success" id="submitNewsletter">Ok</button>
                        </span>
                    </div>
                    <p style="display:none;" class="footer_newsletter_success"></p>
                    <p class="footer_newsletter_error"></p>
                </form>
            </div>

            <div class="col-sm-4 col-footer col-2-footer">
                <h2 class="sans-serif">HelloMedia</h2>
                <p>New things happen every day at HelloFresh. Follow us and be part of the HelloFresh world!</p>
                <div class="social-follow-block">
                    <a target="_blank" href="" class="social-icon social-facebook"><i class="fa fa-facebook fa-3x"></i></a>
                    <a target="_blank" href="" class="social-icon social-twitter"><i class="fa fa-twitter fa-3x"></i></a>
                    <a target="_blank" href="" class="social-icon social-google"><i class="fa fa-google-plus fa-3x"></i></a>
                    <a target="_blank" href="" class="social-icon social-instagram"><i class="fa fa-instagram fa-3x"></i></a>
                    <a target="_blank" href="" class="social-icon social-wordpress"><i class="fa fa-wordpress fa-3x"></i></a>
                </div>
            </div>

            <div class="col-sm-4 col-footer col-3-footer">
                <h2 class="sans-serif">HelloApp</h2>
                <p>Get inspired and cook with your phone and tablet!<br></p>
                <div class="helloapp-image">
                    <a href="https://app.adjust.com/f3lueo?campaign=AU&amp;adgroup=browser&amp;deep_link=&amp;hellofresh%3A%2F%2F&amp;utm_source=website&amp;utm_medium=browser&amp;utm_campaign=app">
                        <svg height="55" width="186">
                            <image height="55" width="186" src="https://d3p7z1qndrc1ec.cloudfront.net/au/cms/app/Download_on_the_App_Store_Badge_US-UK.png" xlink:href="https://d3p7z1qndrc1ec.cloudfront.net/au/cms/app/Download_on_the_App_Store_Badge_US-UK_135x40.svg"/>
                        </svg>
                    </a>
                    <br>
                    <a href="https://app.adjust.com/yp8ycp?campaign=AU&amp;adgroup=browser&amp;deep_link=&amp;hellofresh%3A%2F%2F&amp;utm_source=website&amp;utm_medium=browser&amp;utm_campaign=app">
                        <img width="186" height="55" alt="googel-play-badge_frame_EN.png" src="https://d3p7z1qndrc1ec.cloudfront.net/au/cms/app/google-play-badge.png">
                    </a></div>
            </div>

        </div>

        <img width="100px" class="center-block" alt="footer logo" src="{$logo_url}">

        <div class="row links-panel">
            <ul class="list-inline text-center footer-links">
                <li><a href="/contact/"><span class="iconhf-device-phone"></span> Contact</a></li>
                <li><a href="/press/">Press</a></li>
                <li><a href="/jobs/">Jobs</a></li>
                <li><a target="_blank" href="http://blog.hellofresh.com.au/">Blog</a></li>
                <li><a target="_blank" href="http://www.hellofreshgroup.com/">HelloFresh Group</a></li>
            </ul>
        </div>

    </div>

    <div class="legal-container text-center">
        &copy; {date('Y')} {$shop_name}
        <ul class="list-inline footer-links">
            <li><a href="/termsandconditions/">Terms and Conditions</a></li>
            <li><a href="/privacy/">Privacy</a></li>
        </ul>
    </div>
</div>