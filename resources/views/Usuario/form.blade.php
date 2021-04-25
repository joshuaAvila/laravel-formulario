
    <div class="row g-3 cuadro-formulario">

        <div class="col-md-6 form_grupo " id="div_empresa" >
            <strong><label class="form_label" for="empresa">Empresa</label></strong> 
            <div class="input-group">
                <input type="text" class="form-control "  placeholder="Ingrese el nombre de la empresa.."  name="empresa" id="empresa"/>
                <i class="validacion_estado fas fa-times-circle"></i>
            </div>
            <p class="formulario_input-error">La empresa tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
        </div>
        
        <div class="col-md-6 form_grupo" id="div_ruc">
            <strong> <label for="ruc" class="form_label" >RUC</label></strong>
             <div class="input-group">
                 <input type="text" class="form-control" name="ruc" id="ruc" placeholder="Ingrese su número de RUC..."  >
                 <i class="validacion_estado fas fa-times-circle"></i>
             </div>
             <p class="formulario_input-error">El campo RUC debe contener números</p>
         </div>
 


        <div class="col-md-6 form_grupo" id="div_nombre">
            <strong><label for="nombre" class="form_label" >Nombre</label></strong> 
            <div class="input-group">
                <input type="text" class="form-control"  placeholder="Ingrese su nombre..."  name="nombre" id="nombre">
                <i class="formulario__validacion-estado far fa-check-circle"></i>
                <p class="formulario_input-error">El Nombre solo puede contener letras .</p>
            </div>
           
        </div>

        <div class="col-md-6 form_grupo" id="div_apellido">
            <strong><label for="apellido" class="form_label" >Apellido</label></strong>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Ingrese su apellido..." name="apellido" id="apellido">
            </div>
            <p class="formulario_input-error">El Apellido solo puede contener letras .</p>
        </div>

        <div class="col-md-12 form_grupo" id="div_correo">
            <strong> <label for="correo" class="form_label" >Correo</label> </strong>
             <div class="input-group">
                 <input type="email" class="form-control" name="correo"  id="correo" placeholder="Ingrese su correo"  >
             </div>
             <p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo. ejemplo@hotmail.com</p>
         </div>

        <div class="col-md-6 form_grupo" id="div_telefono1">
           <strong> <label for="telefono1" class="form_label" >Teléfono #1</label></strong>
            <div class="input-group">
                <input type="text" class="form-control" name="telefono1"  id="telefono1" placeholder="Ingrese su número móvil" >
             </div>
             <p class="formulario_input-error">El Telefono solo debe contener números .</p>
        </div>

        <div class="col-md-6 form_grupo" id="div_telefono2">
           <strong> <label for="telefono2" class="form_label" >Teléfono #2</label></strong>
            <div class="input-group">
                <input type="text" class="form-control" name="telefono2"  id="telefono2" placeholder="Ingrese su número móvil" >
            </div>
            <p class="formulario_input-error">El Telefono soo debe contener números .</p>
        </div>

        
        <div class="col-md-12 form_grupo" id="div_direccion">
             <strong><label for="direccion" class="form_label" >Dirección de Inspección</label></strong>
            <div class="input-group">
                <input type="text" class="form-control" name="direccion"    id="direccion"  placeholder="Ingrese la dirección de realización de inspección"  >
            </div>
            <p class="formulario_input-error">La dirección puede contener letras y números detalle correctamente .</p>
        </div>

        <div class="col-md-12 form_grupo" id="div_ubicacion">
           <strong> <label for="referencia" class="form_label" >Referencias</label></strong>
            <div class="input-group">
                <input type="text" class="form-control" name="referencia"   id="referencia"  placeholder="Ingrese las referencias de la dirección"  >
            </div>
            <p class="formulario_input-error">La referencia puede contener letras y números, detalle correctamente .</p>
        </div>

        <div class="col-md-12 >
            <strong> <label for="ubicacion">Ubicación</label></strong>
             <div  id="map" style="height: 300px; width: 100%"> 
             </div>
        </div>  
        
        <div class="col-md-2 form_grupo" id="div_contenedores">
           <strong> <label for="contenedores" class="form_label" >Contendores</label></strong>
            <div class="form-group">
                <input type="number"  class="form-control" name="contenedores"  id="contenedores" min="1" >
            </div>
        </div>

        

        <div class="col-md-10 form_grupo" id="div_requerimiento">
           <strong > <label for="requerimiento" class="form_label" >Requerimiento</label></strong>
            <div class="input-group">
                <input type="text" class="form-control" name="requerimiento"  id="requerimiento" placeholder="Ingrese su asunto..."  >
            </div>
            <p class="formulario_input-error">El requerimiento puede contener letras y números.</p>
        </div>

        <div class="col-md-8 form_grupo" id="div_detalle">
            <strong><label for="detalle" class="form_label" >Detalle su Requerimiento</label></strong>
              <div class="form-group">
                 <textarea id="detalle" class="form-control" name="detalle"  placeholder="Detalle su asunto" style="resize:none;"  rows="5"></textarea>
             </div>
             <p class="formulario_input-error">Llene los detalles correctamente con letras y numeros .</p>
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
      <strong  class="ml-4 form_label" >Identificador de Contenedores</strong><br>
        <div class="field_wrapper col-md-3 form_grupo" id="div_identificador">
            <div style="display: inline-flex" class="my-2">
                <input type="text" name="field_name[]" class="form-control" value="" min="1"/>
                <a href="javascript:void(0);" class="add_button btn btn-primary ml-3" title="Add field"><i class="fas fa-plus-circle"></i></a>
            </div>
        </div>
        <p class="formulario_input-error">Indique el codigo con letras o nümeros.</p>
      </div>


    
    </div>
            
        <div class="form_grupo grupo-btn-enviar">
            <input type="submit" value="Enviar" class="btn btn-success my-3"> 
            <p class="formulario_mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>  
        </div>
       
