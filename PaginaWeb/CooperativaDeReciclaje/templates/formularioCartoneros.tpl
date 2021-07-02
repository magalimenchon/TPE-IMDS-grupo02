{include file="header.tpl"}

<form action="altaCartonero" method="post">
    <div class="mb-3">
        <label class="form-label">Nombre del cartonero</label>
        <input class="form-control" name="input_nombre_cartonero"
             placeholder="Nombre del cartonero" required>

    <label class="form-label">Apellido del cartonero </label>
    <input name="input_apellido" required>
        
    </div>

    <div class="mb-3">
        <label class="form-label">DNI </label>
        <input type="number" class="form-control" name="input_recoleccion_peso"
            placeholder="Ingresar kilos del material" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Fecha de nacimiento </label>
        <input type="date" class="form-control" name="input_recoleccion_fecha" required>
    </div>

    <div class="col text-center">
        <button type="submit" class=" btn btn-lg btn-success">Enviar</button>
    </div>
</form>

{include file="footer.tpl"}