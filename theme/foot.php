<script src="../assets/js/bootstrap.min.js"></script>
<!--CAROSELLO-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            items: 1, // Mostra 1 immagine alla volta
            loop: true, // Autoloop
            nav: false, // Abilita i pulsanti di navigazione
            navText: ['<', '>'], // Testo dei pulsanti di navigazione
            dots: true, // Abilita i punti di navigazione
            animateIn: 'fadeIn', // add this
            animateOut: 'fadeOut', // and this
            autoplay: true, // Autoplay
            autoplayTimeout: 2500, // Durata tra ogni scorrimento (in millisecondi)
            autoplayHoverPause: true, // Metti in pausa l'autoplay quando il mouse si posiziona sul carosello
        });
        window.dispatchEvent(new Event('resize'));
    });
</script>
</html>