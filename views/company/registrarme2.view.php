
<body class="">
    <div class="">
        <h3 class="centrar2">FORMULARIO DE REGISTRO</h3>
        <form action="" method="post" class="form-neon borde2" autocomplete="off">
            <fieldset>
                <legend><i class="far fa-address-card"></i> &nbsp; Información personal</legend>
            
                    <div class="row">
                        <div class="borde3">
                            <div class="form-group">
                                <label for="rolCode" class="bmd-label-floating">Código Rol</label>
                                <div class="form-group">
                                <select class="form-control" name="rolCode" required>
                                    <option value="" selected="" disabled="">Seleccione una Opción</option>
                                    <option value="1">Administrador</option>
                                    <option value="2">Usuario</option> 
                                </select>
                            </div>
                                <!-- <input type="text" pattern="[0-9-]{1,20}" class="form-control" name="rolCode"
                                    id="rolCode" maxlength="20" required> -->
                            </div>
                        </div>
                        <div class="borde3">
                            <div class="form-group">
                                <label for="userCode" class="bmd-label-floating">Cédula Colaborador</label>
                                <input type="text" pattern="[0-9-]{1,20}" class="form-control" name="userCode"
                                    id="userCode" maxlength="20" required>
                            </div>
                        </div>

                        <div class="borde3">
                            <div class="form-group">
                                <label for="userName" class="bmd-label-floating">Nombres</label>
                                <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}" class="form-control"
                                    name="userName" id="userName" maxlength="35" required>
                            </div>
                        </div>
                        <div class="borde3">
                            <div class="form-group">
                                <label for="userLastName" class="bmd-label-floating">Apellidos</label>
                                <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}" class="form-control"
                                    name="userLastName" id="userLastName" maxlength="35" required>
                            </div>
                        </div>
                    </div>
                
            </fieldset>
            <fieldset>
                <legend><i class="fas fa-user-lock"></i> &nbsp; Información de la Cuenta</legend>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="userEmail" class="bmd-label-floating">Email Corporativo (@telefonica.com)</label>
                                <input type="email" class="form-control" name="userEmail" id="userEmail" maxlength="70" required>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="userPass" class="bmd-label-floating">Contraseña</label>
                                <input type="password" class="form-control" name="userPass" id="userPass"
                                    maxlength="200" required>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="userPassConfirm" class="bmd-label-floating">Repetir Contraseña</label>
                                <input type="password" class="form-control" name="userPassConfirm" id="userPassConfirm"
                                    maxlength="200" required>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <select class="form-control" name="userStatus" required>
                                    <option value="" selected="" disabled="">Seleccione una Opción</option>
                                    <option value="1">Activo</option>
                                    <option value="0">Inactivo</option> 
                                </select>
                            </div>
                        </div>
                    </div>
            </fieldset>
            <p class="text-center" style="margin-top: 40px;">

                <a type="submit" href="?c=Users&a=registrarUsuarios" class="btn bg-secondary text-white">Cancelar</a>

                <input class="btn btn-success letra3" type="submit" value="Registrar Usuario">
                <a href="?c=users&a=consultarUsuarios" class="btn btn-primary"> Lista De Usuarios</a>
                

                <a href="?c=Dashboard" class="btn btn-secondary">Atrás</a>
            </p>
        </form>
    </div>
</body>