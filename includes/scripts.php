<!-- ck footer wrapper End -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/fullpage.min.js"></script>
<script src="js/scrolloverflow.js"></script>
<script src="js/demo3.js"></script>
<script src="js/easings.js"></script>
<script src="js/jquery.inview.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/custom_III.js"></script>
<!-- custom js-->
<script>
function initMap() {
    var uluru = {
        lat: -36.742775,
        lng: 174.731559
    };
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        scrollwheel: false,
        center: uluru
    });
    var marker = new google.maps.Marker({
        position: uluru,
        map: map
    });
}
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBi2zbxXa0ObGqaSBo5NJMdwLs_xtQ03nI&amp;callback=initMap">
</script>