<!doctype html>
<html lang="es-ES">

    <head>
        
        <?php include 'include/metas.php'; ?>

        <title>Inicio <?php include 'include/title.php'; ?></title>

    </head>

    <!-- Página de carga -->
    <div class="loader"></div>

    <body data-barba="wrapper">

       <!-- HEADER -->
        <?php include 'include/header.php'; ?>
        
        <!-- Cuerpo -->
        <div id="cuerpo" data-barba="container">
            <div id="portadon" class="h-100 backnobi">
                <div id="newbak"  class="h-100">
                    <div id="textpor" class="d-flex justify-content-center align-items-center flex-column">
                        <img class="w20" src="img/grafica_libro.svg" alt="">
                        <div class="cirboo consulte mt-5">Consulta el índice para ir al contenido</div>

                    </div>
                </div>
                

            </div>
        </div>

        <!-- Footer -->
        <?php include 'include/footer.php'; ?>

        <!-- Modal -->
        <?php include 'include/menu.php'; ?>
        
        <!-- Scripts -->
        <?php include 'include/scripts.php'; ?>
        <script>

            function goModal() {

                var modal = $("#myModal");
                var info = $("#infocap")

                modal.modal("show");
                modal.addClass("in");


            }

            function outModal() {

                var modal = $("#myModal");

                modal.modal("hide");

            }

            window.onload = function() {

                document.getElementById("mboton").onclick = goModal;
                document.getElementById("bclose").onclick = outModal;
                document.getElementsByClassName("indicea").onclick = outModal;
                document.body.onclick= function(e){
                    e=window.event? event.srcElement: e.target;
                    if(e.className && e.className.indexOf('indicea')!=-1)outModal();
                };
                
                tween2 = TweenMax.to( '#newbak', 3, {opacity: 1,delay: 1,ease: Power2.easeOut});
                tween1 = TweenMax.to( '#textpor', 4, {opacity: 1,delay: 3});

            }
        </script>

    </body>

</html>