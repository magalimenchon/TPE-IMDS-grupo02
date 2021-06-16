{include file="header.tpl"}
<body class="fondo">
<section class="overlay">
            <h2>Recolección de materiales</h2>

            {include file="mensaje.tpl"}
            
    <table class="table mb-3">
           <thead>
               <tr>
                   <th>DNI</th>
                   <th>Peso Material</th>
                   <th>Fecha</th>
                   <th>Nombre Material</th>
                   
               </tr>
           </thead>
       <tbody>
        {foreach $filas as $fila} 
                <tr>
                    <td>{$fila->DNI_cartonero}</td>
                    <td>{$fila->peso_material_recolectado}</td>
                    <td>{$fila->fecha_recoleccion}</td>
                    <td>{$fila->nombre_mat}</td>
                    
                </tr>
        {/foreach}
        </tbody>    
    </table>

   <!-- 
 <form action="recoleccion" method="post">

                <div class="mb-3">
                    <label class="form-label">Cartonero</label>
                    <input type="hidden" class="form-control" name="input_recoleccion_nombre_cartonero_fk"
                           value="{$cartonero->DNI_cartonero}" placeholder="{$cartonero->nombre_cartonero}" required>
                </div>
            
                  <label class="form-label">Material recolectado </label>
                    <select name="input_recoleccion_id_especificacion_material_fk" id="materiales_s" required>
                        <option value="" selected></option>
                        {foreach from=$materiales item=material}
                            <option value="{$material->id_especificacion}">{$material->nombre_mat}</option>
                        {/foreach}
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Peso </label>
                    <input type="number" class="form-control" name="input_recoleccion_peso" placeholder="Ingresar kilos del material"  required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Fecha de retiro </label>
                    <input type="date" class="form-control" name="input_recoleccion_fecha" required>
                </div>

                <div class="col text-center">
                    <button type="submit" class=" btn btn-lg btn-success">Enviar</button>
                </div>
            </form>
            -->
            </section>
            </body>
{include file="footer.tpl"}   