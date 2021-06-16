{include file="header.tpl"}
    <table class="table mb-3">
           <thead>
               <tr>
                   <th>DNI</th>
                   <th>Peso Material</th>
                   <th>Fecha</th>
                   <th>Direccion</th>
                   
               </tr>
           </thead>
       <tbody>
        {foreach $filas as $fila} 
                <tr>
                    <td>{$fila->DNI_cartonero}</td>
                    <td>{$fila->peso_material_recolectado}</td>
                    <td>{$fila->fecha_recoleccion}</td>
                    
                </tr>
        {/foreach}
        </tbody>    
    </table>

{include file="footer.tpl"}   