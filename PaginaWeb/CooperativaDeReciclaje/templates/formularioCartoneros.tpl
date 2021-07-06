{include file="header.tpl"}


<body class="fondo">
        <section class="overlay">
            <h2>Añadir cartonero</h2>
            
            <form action="altaCartonero" method="post">
                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="cartonero_nombre" placeholder="Nombre" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Apellido</label>
                    <input type="text" class="form-control" name="cartonero_apellido" placeholder="Apellido"  required>
                </div>
                <div class="mb-3">
                    <label class="form-label">DNI</label>
                    <input type="text" class="form-control" name="cartonero_dni" placeholder="Dirección" required>
                </div>
                <div class="mb-3">
                    <label for="title">Dirección</label>
                    <input type="text" class="form-control" name="cartonero_direccion" placeholder="Dirección" required>
                </div>
                <div class="mb-3">
                    <label for="title">Fecha nacimiento</label>
                    <input type="date" class="form-control" name="cartonero_fecha" required>
                </div>
                
                <div class="mb-3">
                <label for="title">Categoria de volumen</label>
                    <select name="cartonero_select">
                        <option value="a">Entra en una caja</option>
                        <option value="b">Entra en el baúl de un auto</option>
                        <option value="c">Entra en la caja de una camioneta</option>
                        <option value="d">Se necesita un camión</option>
                    </select>
                </div>
                <div class="col text-center">
                    <button type="submit" class=" btn btn-lg btn-success">Enviar</button>
                </div>
            </form>
        </section>
</body>

{include file="footer.tpl"}