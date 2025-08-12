<div class="barra">
    <p>Hola: <span><?php echo $nombre ?? ''; ?></span></p>
    <a class="boton" href="/logout">Cerrar Sesión</a>
</div>

<?php if(isset($_SESSION['admin'])){ ?>
    <div class="barra-servicios">
        <a class="boto8n" href="/admin">Ver Citas</a>
        <a class="boto8n" href="/servicios">Ver Servicios</a>
        <a class="boto8n" href="/servicios/crear">Nuevo Servicio</a>
    </div>
<?php } ?>