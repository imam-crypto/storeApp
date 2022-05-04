<div class="page-wrapper-row">
    <div class="page-wrapper-bottom">
        <!-- BEGIN FOOTER -->
        <!-- BEGIN PRE-FOOTER -->
        <div class="page-prefooter">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                        <h2>About</h2>
                        <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam dolore. </p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs12 footer-block">
                        <h2>Subscribe Email</h2>
                        <div class="subscribe-form">
                            <form action="javascript:;">
                                <div class="input-group">
                                    <input type="text" placeholder="mail@email.com" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn" type="submit">Submit</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                        <h2>Follow Us On</h2>
                        <ul class="social-icons">
                            <li>
                                <a href="javascript:;" data-original-title="rss" class="rss"></a>
                            </li>
                            <li>
                                <a href="javascript:;" data-original-title="facebook" class="facebook"></a>
                            </li>
                            <li>
                                <a href="javascript:;" data-original-title="twitter" class="twitter"></a>
                            </li>
                            <li>
                                <a href="javascript:;" data-original-title="googleplus" class="googleplus"></a>
                            </li>
                            <li>
                                <a href="javascript:;" data-original-title="linkedin" class="linkedin"></a>
                            </li>
                            <li>
                                <a href="javascript:;" data-original-title="youtube" class="youtube"></a>
                            </li>
                            <li>
                                <a href="javascript:;" data-original-title="vimeo" class="vimeo"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                        <h2>Contacts</h2>
                        <address class="margin-bottom-40"> Phone: 08987029564
                            <br> Email:
                            <a href="mailto:info@metronic.com">PurnamaTech</a>
                        </address>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PRE-FOOTER -->
        <!-- BEGIN INNER FOOTER -->
        <div class="page-footer">
            <div class="container"> 2022 &copy; PurnamaTech
                <a target="_blank" href="http://keenthemes.com">PurnamaTech</a> &nbsp;|&nbsp;
                <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template_admin/4021469?ref=keenthemes" title="Gelora Market" target="_blank">PurnamaTech</a>
            </div>
        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
        <!-- END INNER FOOTER -->
        <!-- END FOOTER -->
    </div>
</div>
</div>
<!--[if lt IE 9]>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="{{asset('template_admin')}}/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="{{asset('template_admin')}}/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
{{-- <script src="{{asset('template_admin')}}/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script> --}}
<script src="{{asset('template_admin')}}/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="{{asset('template_admin')}}/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
@stack('before-script')
<!-- END CORE PLUGINS -->
{{-- Data tables --}}


{{-- end data tables --}}
<script src="{{asset('template_admin/plugins')}}/sweet/sweetalert2.all.min.js" type="text/javascript"></script>
<script src="{{asset('template_admin/plugins')}}/my.js" type="text/javascript"></script>
<!-- BEGIN PAGE LEVEL PLUGINS -->
{{-- <script src="{{asset('template_admin')}}/assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script> --}}
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
{{-- <script src="{{asset('template_admin')}}/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script> --}}
{{-- <script src="{{asset('template_admin')}}/assets/pages/scripts/components-bootstrap-switch.min.js" type="text/javascript"></script> --}}

<script src="{{asset('template_admin')}}/assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
{{-- <script src="{{asset('template_admin')}}/assets/pages/scripts/ecommerce-dashboard.min.js" type="text/javascript"></script> --}}
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="{{asset('template_admin')}}/assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
<script src="{{asset('template_admin')}}/assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
{{-- <script src="{{asset('template_admin')}}/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script> --}}
<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        })
    }, 4000);
    
</script>

<!-- END THEME LAYOUT SCRIPTS -->
@stack('after-script')

</body>

</html>