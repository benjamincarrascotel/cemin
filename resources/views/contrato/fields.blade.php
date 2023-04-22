<!-- Clasificaciones -->
<div class="mb-3 row">
    <label for="clasificacion_id" class="col-sm-2 col-form-label">Clasificacion</label>
    <div class="col-sm-10">
        <select class="form-control block mt-1 w-full" name="clasificacion_id">        
            <option value="0" >                
                Seleccione alguna de las opciones                 
            </option>   
            @foreach ($clasificaciones as $key => $value)              
                <option value="{{ $key }}" {{ ( $key == $selectedID) ? 'selected' : '' }}>                
                    {{ $value }}                 
                </option>
            @endforeach                   
        </select>
    </div>
</div>


<!-- Tipo de Contrato General -->
<div class="mb-3 row">
    <label for="tipo_contrato_general" class="col-sm-2 col-form-label">Tipo de contrato (General) </label>
    <div class="col-sm-10">
        <select class="form-control block mt-1 w-full" name="tipo_contrato_general" id="tipo_contrato_general" > 
            <option value="0" >                
                Seleccione alguna de las opciones                 
            </option>                  
            <option value="Bienes" >                
                Bienes                 
            </option>
            <option value="Servicios" >                
                Servicios                 
            </option>                        
        </select>
    </div>
</div>

<!-- Tipo de Contrato -->
<div class="mb-3 row">
    <label for="tipo_contrato_id" class="col-sm-2 col-form-label">Tipo de contrato (Específico) </label>
    <div class="col-sm-10">
        <select class="form-control block mt-1 w-full" name="tipo_contrato_id">        
            <option value="0" >                
                Seleccione alguna de las opciones                 
            </option>   
            @foreach ($tipo_contratos as $key => $value)              
                <option value="{{ $key }}" {{ ( $key == $selectedID) ? 'selected' : '' }}>                
                    {{ $value }}                 
                </option>
            @endforeach                   
        </select>
    </div>
</div>


<!-- Faenas -->
<div class="mb-3 row">
    <label for="faena_id" class="col-sm-2 col-form-label">Faena</label>
    <div class="col-sm-10">
        <select class="form-control block mt-1 w-full" name="faena_id">        
            <option value="0" >                
                Seleccione alguna de las opciones                 
            </option>   
            @foreach ($faenas as $key => $value)              
                <option value="{{ $key }}" {{ ( $key == $selectedID) ? 'selected' : '' }}>                
                    {{ $value }}                 
                </option>
            @endforeach                   
        </select>
    </div>
</div>


<!-- Áreas -->
<div class="mb-3 row">
    <label for="area_id" class="col-sm-2 col-form-label">Área</label>
    <div class="col-sm-10">
        <select class="form-control block mt-1 w-full" name="area_id">        
            <option value="0" >                
                Seleccione alguna de las opciones                 
            </option>   
            @foreach ($areas as $key => $value)              
                <option value="{{ $key }}" {{ ( $key == $selectedID) ? 'selected' : '' }}>                
                    {{ $value }}                 
                </option>
            @endforeach                   
        </select>
    </div>
</div>

<!-- Centro -->
<div class="mb-3 row">
    <label for="centro_id" class="col-sm-2 col-form-label">Centro</label>
    <div class="col-sm-10">
        <select class="form-control block mt-1 w-full" name="centro_id">        
            <option value="0" >                
                Seleccione alguna de las opciones                 
            </option>   
            @foreach ($centros as $key => $value)              
                <option value="{{ $key }}" {{ ( $key == $selectedID) ? 'selected' : '' }}>                
                    {{ $value }}                 
                </option>
            @endforeach                   
        </select>
    </div>
</div>

<!-- Servicio o Bien -->
<div class="mb-3 row">
    <label for="servicio_bien_id" class="col-sm-2 col-form-label">Servicio o Bien</label>
    <div class="col-sm-10">
        <select class="form-control block mt-1 w-full" name="servicio_bien_id">        
            <option value="0" >                
                Seleccione alguna de las opciones                 
            </option>   
            @foreach ($servicios_bienes as $key => $value)              
                <option value="{{ $key }}" {{ ( $key == $selectedID) ? 'selected' : '' }}>                
                    {{ $value }}                 
                </option>
            @endforeach                   
        </select>
    </div>
</div>

<!-- Proveedor -->
<div class="mb-3 row">
    <label for="proveedor_id" class="col-sm-2 col-form-label">Proveedor</label>
    <div class="col-sm-10">
        <select class="form-control block mt-1 w-full" name="proveedor_id">        
            <option value="0" >                
                Seleccione alguna de las opciones                 
            </option>   
            @foreach ($proveedores as $key => $value)              
                <option value="{{ $key }}" {{ ( $key == $selectedID) ? 'selected' : '' }}>                
                    {{ $value }}                 
                </option>
            @endforeach                   
        </select>
    </div>
</div>

<div class="mb-3 row">
    <label for="contrato_sap" class="col-sm-2 col-form-label">Contrato SAP </label>
    <div class="col-sm-10">
        <input name="contrato_sap" id='contrato_sap' type="text" class="form-control"  required>
    </div>
</div>

<!-- Admin Contratos -->
<div class="mb-3 row">
    <label for="admin_contrato_id" class="col-sm-2 col-form-label">Admin del Contrato</label>
    <div class="col-sm-10">
        <select class="form-control block mt-1 w-full" name="admin_contrato_id">        
            <option value="0" >                
                Seleccione alguna de las opciones                 
            </option>   
            @foreach ($admin_contratos as $key => $value)              
                <option value="{{ $key }}" {{ ( $key == $selectedID) ? 'selected' : '' }}>                
                    {{ $value }}                 
                </option>
            @endforeach                   
        </select>
    </div>
</div>

<!-- USUARIO
<div class="mb-3 row">
    <label for="usuario" class="col-sm-2 col-form-label">Usuario (Mismo que "gestionador") </label>
    <div class="col-sm-10">
        <input name="usuario" id='usuario' type="text" class="form-control"  required>
    </div>
</div>
-->

<!-- Abastecimiento User -->
<div class="mb-3 row">
    <label for="abastecimiento_user_id" class="col-sm-2 col-form-label">Usuario de Abastecimiento</label>
    <div class="col-sm-10">
        <select class="form-control block mt-1 w-full" name="abastecimiento_user_id">        
            <option value="0" >                
                Seleccione alguna de las opciones                 
            </option>   
            @foreach ($abastecimiento_users as $key => $value)              
                <option value="{{ $key }}" {{ ( $key == $selectedID) ? 'selected' : '' }}>                
                    {{ $value }}                 
                </option>
            @endforeach                   
        </select>
    </div>
</div>

<div class="mb-3 row">
    <label for="descripcion" class="col-sm-2 col-form-label">Descripcion </label>
    <div class="col-sm-10">
        <input name="descripcion" id='descripcion' type="text" class="form-control"  required>
    </div>
</div>

<!-- Detalle del contrato -->

<div class="mb-3 row">
    <label for="gasto_anual" class="col-sm-2 col-form-label">Gasto Anual (Integer) </label>
    <div class="col-sm-10">
        <input name="gasto_anual" id='gasto_anual' type="text" class="form-control"  required>
    </div>
</div>

<div class="mb-3 row">
    <label for="fecha_inicio" class="col-sm-2 col-form-label">Fecha Inicio (selector de calendario) </label>
    <div class="col-sm-10">
        <input name="fecha_inicio" id='fecha_inicio' type="text" class="form-control"  required>
    </div>
</div>

<div class="mb-3 row">
    <label for="fecha_termino" class="col-sm-2 col-form-label">Fecha Termino (selector de calendario) </label>
    <div class="col-sm-10">
        <input name="fecha_termino" id='fecha_termino' type="text" class="form-control"  required>
    </div>
</div>

<div class="mb-3 row">
    <label for="facturacion_mensual" class="col-sm-2 col-form-label">Facturacion Mensual </label>
    <div class="col-sm-10">
        <input name="facturacion_mensual" id='facturacion_mensual' type="text" class="form-control"  required>
    </div>
</div>

<div class="mb-3 row">
    <label for="puntos_FM" class="col-sm-2 col-form-label">Puntos FM (Integer) </label>
    <div class="col-sm-10">
        <input name="puntos_FM" id='puntos_FM' type="text" class="form-control"  required>
    </div>
</div>

<div class="mb-3 row">
    <label for="dotacion" class="col-sm-2 col-form-label">Dotacion (Integer) </label>
    <div class="col-sm-10">
        <input name="dotacion" id='dotacion' type="text" class="form-control"  required>
    </div>
</div>

<div class="mb-3 row">
    <label for="puntos_DOT" class="col-sm-2 col-form-label">Puntos Dotacion (Integer) </label>
    <div class="col-sm-10">
        <input name="puntos_DOT" id='puntos_DOT' type="text" class="form-control"  required>
    </div>
</div>

<!-- Interferencia OPS -->
<div class="mb-3 row">
    <label for="interferencia_ops" class="col-sm-2 col-form-label">Interferencia Ops</label>
    <div class="col-sm-10">
        <select class="form-control block mt-1 w-full" name="interferencia_ops" id="interferencia_ops" > 
            <option value="0" >                
                Seleccione alguna de las opciones                 
            </option>                  
            <option value="Alta" >                
                Alta                 
            </option>
            <option value="Media" >                
                Media                 
            </option>       
            <option value="Baja" >                
                Baja                 
            </option>                         
        </select>
    </div>
</div>

<div class="mb-3 row">
    <label for="dotacion" class="col-sm-2 col-form-label">Puntos Interferencia (Integer) </label>
    <div class="col-sm-10">
        <input name="dotacion" id='dotacion' type="text" class="form-control"  required>
    </div>
</div>

<div class="mb-3 row">
    <label for="duracion" class="col-sm-2 col-form-label">Duracion (Integer) </label>
    <div class="col-sm-10">
        <input name="duracion" id='duracion' type="text" class="form-control"  required>
    </div>
</div>

<div class="mb-3 row">
    <label for="puntos_duracion" class="col-sm-2 col-form-label">Puntos Duracion (Integer) </label>
    <div class="col-sm-10">
        <input name="puntos_duracion" id='puntos_duracion' type="text" class="form-control"  required>
    </div>
</div>

<div class="mb-3 row">
    <label for="puntos_tipo_contrato" class="col-sm-2 col-form-label">Puntos Tipo Contrato (Integer) </label>
    <div class="col-sm-10">
        <input name="puntos_tipo_contrato" id='puntos_tipo_contrato' type="text" class="form-control"  required>
    </div>
</div>

<div class="mb-3 row">
    <label for="riesgo_negocio" class="col-sm-2 col-form-label">Riesgo Negocio (Integer) </label>
    <div class="col-sm-10">
        <input name="riesgo_negocio" id='riesgo_negocio' type="text" class="form-control"  required>
    </div>
</div>

<div class="mb-3 row">
    <label for="criticidad_ops" class="col-sm-2 col-form-label">Criticidad Ops (Integer) </label>
    <div class="col-sm-10">
        <input name="criticidad_ops" id='criticidad_ops' type="text" class="form-control"  required>
    </div>
</div>

<div class="mb-3 row">
    <label for="criticidad_personas" class="col-sm-2 col-form-label">Criticidad Personas (Integer) </label>
    <div class="col-sm-10">
        <input name="criticidad_personas" id='criticidad_personas' type="text" class="form-control"  required>
    </div>
</div>

<div class="mb-3 row">
    <label for="cantidad_areas_invo" class="col-sm-2 col-form-label">Cantidad Areas Involucradas (Integer) </label>
    <div class="col-sm-10">
        <input name="cantidad_areas_invo" id='cantidad_areas_invo' type="text" class="form-control"  required>
    </div>
</div>

<!-- Tipo de Contrato -->
<div class="mb-3 row">
    <label for="transversal" class="col-sm-2 col-form-label">Transversal</label>
    <div class="col-sm-10">
        <select class="form-control block mt-1 w-full" name="transversal" id="transversal" > 
            <option value="0" >                
                Seleccione alguna de las opciones                 
            </option>                  
            <option value="MED" >                
                MED                 
            </option>
            <option value="SI" >                
                SI                
            </option>       
            <option value="NO" >                
                NO                 
            </option>                         
        </select>
    </div>
</div>


<!-- Accion -->
<div class="mb-3 row">
    <label for="accion_id" class="col-sm-2 col-form-label">Acción</label>
    <div class="col-sm-10">
        <select class="form-control block mt-1 w-full" name="accion_id">        
            <option value="0" >                
                Seleccione alguna de las opciones                 
            </option>   
            @foreach ($acciones as $key => $value)              
                <option value="{{ $key }}" {{ ( $key == $selectedID) ? 'selected' : '' }}>                
                    {{ $value }}                 
                </option>
            @endforeach                   
        </select>
    </div>
</div>

<div class="mb-3 row">
    <label for="kpi" class="col-sm-2 col-form-label">KPI</label>
    <div class="col-sm-10">
        <input name="kpi" type="checkbox" value="1">
    </div>
</div>

<div class="mb-3 row">
    <label for="polinomio" class="col-sm-2 col-form-label">Polinomio</label>
    <div class="col-sm-10">
        <input name="polinomio" type="checkbox" value="1">
    </div>
</div>





