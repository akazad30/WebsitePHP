<script src="js/scripts.js"></script>
<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
<script>
    $(document).ready(function($){
        $('#mgmenu1').universalMegaMenu({
            menu_effect: 'hover_fade',
            menu_speed_show: 300,
            menu_speed_hide: 200,
            menu_speed_delay: 200,
            menu_click_outside: false,
            menubar_trigger : false,
            menubar_hide : false,
            menu_responsive: true
        });
        megaMenuContactForm();
    });
</script>