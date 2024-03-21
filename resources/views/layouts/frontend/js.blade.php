<script src="{{ asset('template/frontend_ndi/js/jquery.min.js') }}"></script>
<script src="{{ asset('template/frontend_ndi/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('template/frontend_ndi/js/popper.min.js') }}"></script>
<script src="{{ asset('template/frontend_ndi/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('template/frontend_ndi/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('template/frontend_ndi/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('template/frontend_ndi/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('template/frontend_ndi/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('template/frontend_ndi/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('template/frontend_ndi/js/aos.js') }}"></script>
<script src="{{ asset('template/frontend_ndi/js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('template/frontend_ndi/js/scrollax.min.js') }}"></script>

<script src="{{ asset('template/frontend_ndi/js/main.js') }}"></script>

<script>
function smoothScroll(target) {
    var targetElement = document.getElementById(target);
    if (targetElement) {
        var targetPosition = targetElement.offsetTop;
        var startPosition = window.pageYOffset;
        var distance = targetPosition - startPosition;
        var duration = 1000; // Waktu dalam milidetik (misalnya, 1000ms = 1 detik)
        var startTime = null;

        function easeInOutQuad(t, b, c, d) {
            t /= d / 2;
            if (t < 1) return c / 2 * t * t + b;
            t--;
            return -c / 2 * (t * (t - 2) - 1) + b;
        }

        function animation(currentTime) {
            if (startTime === null) startTime = currentTime;
            var timeElapsed = currentTime - startTime;
            var run = easeInOutQuad(timeElapsed, startPosition, distance, duration);
            window.scrollTo(0, run);
            if (timeElapsed < duration) requestAnimationFrame(animation);
        }

        requestAnimationFrame(animation);
    }
}
</script>
