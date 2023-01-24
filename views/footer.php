<?php
if ($_SESSION['ok']) {
    print('
</main>
    <hr>
    <footer class="bg-secundario text-center">
            <div class="container">
                <div class="row">
                    <h2 class="text-color-white fs-1">Centro de computo Unsaac</h2> 
                    <div class="horario col-lg-6">
                        <h3 class="text-color-secundario">Atencion</h3>
                        <p class="text-color-secundario">Lunes a viernes</p>
                        <p class="text-color-secundario">De 8am a 4pm</p>
                    </div>
                    <div class="contacto col-lg-6">
                        <p class="text-color-secundario fs-4">Correo ccomputo@unsaac.edu.pe</p>
                        <p class="text-color-secundario fs-4">Telf. 448745 Anexo 1685 - 1507</p>
                    </div>
                </div>
            <p class="text-color-white">Copyright 2022. © All Rights Reserved Av. de la Cultura nro 733 - Pabellón "A"</p>
            <p class="text-color-white">Cusco - Perú </p>    
            </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="./public/js/reLoad.js"></script>
</html>
');
} else {
    echo '';
}
