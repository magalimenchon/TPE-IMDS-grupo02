{include file="header.tpl"}

<body class="fondo">
        <section class="overlay">
            <h2>Retiro de materiales</h2>

            {include file="mensaje.tpl"}
            
            <form action="retiro" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="input_retiro_nombre_fk" placeholder="Nombre" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Apellido</label>
                    <input type="text" class="form-control" name="input_retiro_apellido_fk" placeholder="Apellido"  required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Dirección</label>
                    <input type="text" class="form-control" name="input_retiro_direccion_fk" placeholder="Dirección" required>
                </div>
                <img src="./img/direccion_cooperativa.jpg">
                <div class="mb-3">
                    <label class="form-label">Teléfono</label>
                    <input type="tel" class="form-control" name="input_retiro_telefono_fk" placeholder="Teléfono" required>
                </div>
                <div class="mb-3">
                    <label for="title">Categoria de volumen</label>
                    <select name="input_retiro_categoria">
                        <option value="caja">Entra en una caja</option>
                        <option value="auto">Entra en el baúl de un auto</option>
                        <option value="camioneta">Entra en la caja de una camioneta</option>
                        <option value="camion">Se necesita un camión</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="title">Franja horaria de retiro</label>
                    <select name="input_franja_horaria" id="">
                        <option value="9:00-12:00">9:00-12:00</option>
                        <option value="13:00-17:00">13:00-17:00</option>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="file" name="imageToUpload" id="imageToUpload">
                </div>
                <div class="col text-center">
                    <button type="submit" class=" btn btn-lg btn-success">Enviar</button>
                </div>
            </form>
        </section>
</body>
{include file="footer.tpl"}