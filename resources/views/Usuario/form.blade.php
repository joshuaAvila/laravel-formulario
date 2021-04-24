
    <div class="row g-3">

        <div class="col-md-6 ">
            <strong><label for="empresa">Empresa</label></strong> 
            <div class="input-group">
                <input type="text" class="form-control"  placeholder="Ingrese el nombre de la empresa.."  name="empresa" id="empresa">
            </div>
           
        </div>
        
        <div class="col-md-6">
            <strong> <label for="ruc">RUC</label></strong>
             <div class="input-group">
                 <input type="text" class="form-control" name="ruc" placeholder="Ingrese su número de RUC..."  id="ruc">
             </div>
         </div>
 


        <div class="col-md-6 formulario__grupo" id="grupo__usuario">
            <strong><label for="nombre">Nombre</label></strong> 
            <div class="input-group">
                <input type="text" class="form-control"  placeholder="Ingrese su nombre..."  name="nombre" id="nombre">
                <i class="formulario__validacion-estado far fa-check-circle"></i>
            </div>
            <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
        </div>

        <div class="col-md-6">
            <strong><label for="apellido">Apellido</label></strong>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Ingrese su apellido..." name="apellido" id="apellido">
            </div>
        </div>

        <div class="col-md-12">
            <strong> <label for="correo">Correo</label> </strong>
             <div class="input-group">
                 <input type="email" class="form-control" name="correo" placeholder="Ingrese su correo"  id="correo">
             </div>
         </div>

        <div class="col-md-6">
           <strong> <label for="telefono">Teléfono #1</label></strong>
            <div class="input-group">
                <input type="text" class="form-control" name="telefono" placeholder="Ingrese su número móvil" id="telefono">
             </div>
        </div>

        <div class="col-md-6">
           <strong> <label for="telefono">Teléfono #2</label></strong>
            <div class="input-group">
                <input type="text" class="form-control" name="telefono" placeholder="Ingrese su número móvil" id="telefono">
            </div>
        </div>

        
        <div class="col-md-12">
             <strong><label for="direccion">Dirección de Inspección</label></strong>
            <div class="input-group">
                <input type="text" class="form-control" name="direccion"  placeholder="Ingrese la dirección de realización de inspección"  id="direccion">
            </div>
        </div>

        <div class="col-md-12">
           <strong> <label for="referencia">Referencias</label></strong>
            <div class="input-group">
                <input type="text" class="form-control" name="referencia"  placeholder="Ingrese las referencias de la dirección"  id="referencia">
            </div>
        </div>

        <div class="col-md-12">
            <strong> <label for="ubicacion">Ubicación</label></strong>
             <div  id="map" style="height: 300px; width: 100%"> 
             </div>
        </div>  
        
        <div class="col-md-2">
           <strong> <label for="contenedores">Contendores</label></strong>
            <div class="form-group">
                <input type="number"  class="form-control" name="contenedores"  id="contenedores" min="1" >
            </div>
        </div>

        

        <div class="col-md-10 ">
           <strong > <label for="detale">Requerimiento</label></strong>
            <div class="input-group">
                <input type="text" class="form-control" name="detalle"  placeholder="Ingrese su asunto..."  id="detalle">
            </div>
        </div>

        <div class="col-md-8">
            <strong><label for="requerimiento">Detalle su Requerimiento</label></strong>
              <div class="form-group">
                 <textarea id="requerimiento" class="form-control" name="requerimiento"  placeholder="Detalle su asunto" style="resize:none;"  rows="5"></textarea>
             </div>
        </div>
        <br>    
        
      <!--c<br>
       <strong class="ml-4">Identificador</strong><br>
            <div  class="form-group" style="display: inline-flex;">
                <div class="identificador  col-md-7 col-sm-7 col-xs-12 my-2">
                    <input type="number"  class="form-control"  name="idenfiticador" id="identificador">
                </div>
                <a href="javascript:void(0);" class="btn btn-sm btn-info add_button  col-sm-2 col-xs-3 my-2"><i class="fa fa-plus"></i></a>
            </div>  
      </div>-->
      <div class="input-group">
      <strong  class="ml-4">Identificador de Contenedores</strong><br>
    <div class="field_wrapper col-md-3 ">
        <div style="display: inline-flex" class="my-2">
            <input type="text" name="field_name[]" class="form-control" value="" min="1"/>
            <a href="javascript:void(0);" class="add_button btn btn-primary ml-3" title="Add field"><i class="fas fa-plus-circle"></i></a>
        </div>
    </div>
      </div>


    </div>
            
    <div class="d-md-flex justify-content ">
        <input type="submit" value="Enviar" class="btn btn-success my-3">    
    </div>
       
