

			<!-- Content -->
			<div class="">
				<form action="" method="post" class="form-neon borde2" autocomplete="off">
					<fieldset>
						<legend><i class="far fa-address-card"></i> &nbsp; Información personal</legend>
						<div class="">
							<div class="row">
								<div class="borde3">
									<input type="hidden" pattern="[0-9-]{1,20}" class="form-control" name="userCode" id="userCode" maxlength="20" value="<?php echo $user->getUserCode() ?>">
									<div class="form-group">
										<label for="userCodeM" class="bmd-label-floating">Código Usuario</label>
										<input type="text" pattern="[0-9-]{1,20}" class="form-control" id="userCodeM" maxlength="20" value="<?php echo $user->getUserCode() ?>" disabled>
									</div>
								</div>
								<div class="borde3">
									<div class="form-group">
										<label for="rolCode" class="bmd-label-floating">Código Rol</label>
										<input type="text" pattern="[0-9-]{1,20}" class="form-control" name="rolCode" id="rolCode" maxlength="20" value="<?php echo $user->getRolCode() ?>">
									</div>
								</div>
								<div class="borde3">
									<div class="form-group">
										<label for="userName" class="bmd-label-floating">Nombres</label>
										<input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}" class="form-control" name="userName" id="userName" maxlength="35" value="<?php echo $user->getUserName() ?>">
									</div>
								</div>
								<div class="borde3">
									<div class="form-group">
										<label for="userLastName" class="bmd-label-floating">Apellidos</label>
										<input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}" class="form-control" name="userLastName" id="userLastName" maxlength="35" value="<?php echo $user->getUserLastName() ?>">
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					<br><br><br>
					<fieldset>
						<legend><i class="fas fa-user-lock"></i> &nbsp; Información de la cuenta</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="userEmail" class="bmd-label-floating">Email</label>
										<input type="email" class="form-control" name="userEmail" id="userEmail" maxlength="70" value="<?php echo $user->getUserEmail() ?>">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="userPass" class="bmd-label-floating">Contraseña</label>
										<input type="password" class="form-control" name="userPass" id="userPass" maxlength="200" value="<?php echo $user->getUserPass() ?>">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="userPassConfirm" class="bmd-label-floating">Repetir contraseña</label>
										<input type="password" class="form-control" name="userPassConfirm" id="userPassConfirm" maxlength="200" value="<?php echo $user->getUserPass() ?>">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<select class="form-control" name="userStatus">
											<?php
											for ($i = 0; $i <= 1; $i++) {
												if ($user->getUserStatus() == $i) {
													echo '<option value="' . ($i) . '" selected>' . $user->getUserStatus() . '</option>';
												} else {
													echo '<option value="' . ($i) . '">' . ($i) . '</option>';
												}
											}
											?>
										</select>
									</div>
								</div>
							</div>
					</fieldset>
					<p class="text-center" style="margin-top: 40px;">
						<button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
						&nbsp; &nbsp;
						<button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; ENVIAR</button>
					</p>
				</form>
			</div>


			</section>