<script src="../js/bootstrap.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>     
<script src="../js/estadio.js"></script>
<script src="../js/barba.min.js"></script>
<script src="../js/gsap.min.js"></script>
<script src="../js/loader.js"></script>
<script src="../js/lightbox.js"></script>
<script>
    lightbox.option({
      'resizeDuration': 200,
      'albumLabel': "Imagen %1 de %2"
    });

    barba.hooks.enter(() => {
      window.scrollTo(0, 0);
    });

    barba.init({
      cacheIgnore: ['/'],
     
    });


    
</script>