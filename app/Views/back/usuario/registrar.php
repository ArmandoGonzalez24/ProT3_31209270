
<body class="bodyregistrarse">
    <div class="container mt-5 mb-5 d-flex justify-content-center">
        <?php $validation = \Config\Services::validation(); ?>
        <form method="post" action="<?= base_url('enviar-form'); ?>" class="row g-3 needs-validation" novalidate>
            <?= csrf_field(); ?>
            
            <!-- Mensajes de éxito y error -->
            <?php if (!empty(session()->getFlashdata('fail'))): ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
            <?php endif; ?>
            <?php if (!empty(session()->getFlashdata('success'))): ?>
                <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
            <?php endif; ?>

            <!-- Campo Nombre -->
            <div class="col-md-4">
                <label for="validationDefault01" class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control <?= ($validation->hasError('nombre')) ? 'is-invalid' : ''; ?>" id="validationDefault01" value="<?= old('nombre') ?>" required>
                <!-- Validación de errores -->
                <div class="invalid-feedback"><?= $validation->getError('nombre'); ?></div>
            </div>

            <!-- Campo Apellido -->
            <div class="col-md-4">
                <label for="validationDefault02" class="form-label">Apellido</label>
                <input type="text" name="apellido" class="form-control <?= ($validation->hasError('apellido')) ? 'is-invalid' : ''; ?>" id="validationDefault02" value="<?= old('apellido') ?>" required>
                <!-- Validación de errores -->
                <div class="invalid-feedback"><?= $validation->getError('apellido'); ?></div>
            </div>

            <!-- Campo Usuario -->
            <div class="col-md-4">
                <label for="validationDefaultUsername" class="form-label">Usuario</label>
                <div class="input-group">
                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                    <input type="text" name="usuario" class="form-control <?= ($validation->hasError('usuario')) ? 'is-invalid' : ''; ?>" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" value="<?= old('usuario') ?>" required>
                    <!-- Validación de errores -->
                    <div class="invalid-feedback"><?= $validation->getError('usuario'); ?></div>
                </div>
            </div>

            <!-- Campo Email -->
            <div class="col-md-4">
                <label for="validationDefaultEmail" class="form-label">Email</label>
                <input type="email" name="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="validationDefaultEmail" value="<?= old('email') ?>" required>
                <!-- Validación de errores -->
                <div class="invalid-feedback"><?= $validation->getError('email'); ?></div>
            </div>

            <!-- Campo Contraseña -->
            <div class="col-md-4">
                <label for="validationDefaultPassword" class="form-label">Contraseña</label>
                <input type="password" name="pass" class="form-control <?= ($validation->hasError('pass')) ? 'is-invalid' : ''; ?>" id="validationDefaultPassword" required>
                <!-- Validación de errores -->
                <div class="invalid-feedback"><?= $validation->getError('pass'); ?></div>
            </div>

         
            <!-- Checkbox de aceptar términos -->
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                    <label class="form-check-label" for="invalidCheck2">
                        Acepto términos y condiciones
                    </label>
                </div>
            </div>

            <!-- Botón Enviar Formulario -->
            <div class="col-12">
                <button class="btn btn-secondary" type="submit">Enviar Formulario</button>
            </div>
        </form>
    </div>

    <!-- Scripts JS necesarios -->
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>
