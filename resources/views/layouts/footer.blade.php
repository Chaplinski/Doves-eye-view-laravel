<!-- Page Footer-->
<footer class="section footer-classic context-dark">
    <div class="container">
        <div class="row row-50">
            <div class="col-lg-8 order-lg-2 pl-xl-5 wow-outer">
                <div class="wow slideInRight">
                    <div class="row row-50">
                        <div class="col-md-6">
                            <h5 class="footer-title">Contact</h5>
                            <ul class="list-contact-info">
                                <li><span class="icon mdi mdi-email icon-md icon-secondary"></span><span class="list-item-text"><a href="mailto:info@doveseyeviewwedding.com">info@doveseyeviewwedding.com</a></span></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h5 class="footer-title">Get Social</h5>
                            <p class="big">Follow us to stay connected and receive instant updates about the professional wedding and event livestreaming services we offer.</p>
                            <ul class="social-list">
                                <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-facebook" href="https://www.facebook.com/doveseyeviewstreaming"></a></li>
                                <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-instagram" href="https://www.instagram.com/doveseyeviewstreaming"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 order-lg-1 pr-xl-5 wow-outer">
                <div class="wow slideInLeft">
                    <div class="row row-30">
                        <div class="col-12"><a href="."><h4>Dove's Eye View</h4></a></div>
                        <div class="col-12">
                            <p>Dove's Eye View is Chicagoland's First Wedding and Event Livestreaming Service.</p>
                            <div class="footer-divider"></div>
                            <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>Dove's Eye View</span><span>.&nbsp;</span><span> Design&nbsp;by&nbsp;Scott Chaplinski</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<div class="snackbars" id="form-output-global"></div>
<script src="{{ asset('assets/js/core.min.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script>
    function onSubmit(token) {
        document.getElementById("contact-form").submit();
    }
</script>
<script>
    window.twttr = (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0],
            t = window.twttr || {};
        if (d.getElementById(id)) return t;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://platform.twitter.com/widgets.js";
        fjs.parentNode.insertBefore(js, fjs);

        t._e = [];
        t.ready = function(f) {
            t._e.push(f);
        };

        return t;
    }(document, "script", "twitter-wjs"));
</script>
</body>
</html>
