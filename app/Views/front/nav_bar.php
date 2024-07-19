<?php 
$session = session();
$nombre = $session->get('nombre');
$perfil = $session-> get('perfil_id');
 ?>

 <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="<?php echo base_url('principal')?>">
        <img src="<?php echo base_url('assets/img/logo3.png') ?>" alt="Logotipo" width="100" height="100">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php  if (session ()->perfil_id == 1):?>
            <div class="btn btn-secondary active btnUser btn-sm">
                <a href="">ADMIN: <?php echo session ('nombre'); ?> </a>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="principal">Principal </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registrar">Registrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar Sesion</a>
                </li>
                </ul>
            </div>
                     <?php  elseif (session ()->perfil_id == 2):?>
            <div class="btn btn-info active btnUser btn-sm">
                <a href="">CLIENTE: <?php echo session ('nombre'); ?> </a>
            </div>
                <li class="nav-item">
                    <a class="nav-link" href="quienes_somos">Quiénes Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="acerca_de">Acerca de</a>
                </li> 
                <li class="nav-item">
            <a class="nav-link" href='catalogo'>Catálogo</a></li>
            </li>   
                 <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar Sesion</a>
                </li>
                </ul>
            </div>
        <?php else:?>

                <!-- nav bar para clientes que pueden comprar -->
                <!-- nav bar para clientes no logueados -->

            
            
          </a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link" href='quienes_somos'>Quiénes Somos</a></li>
            </li>
            <li class="nav-item">
            <a class="nav-link" href='acerca_de'>Acerca de</a></li>
            </li>
            <li class="nav-item">
            <a class="nav-link" href='catalogo'>Catálogo</a></li>
            </li>
            <a class="nav-link" href='registrar'>Registrarse</a></li>
            </li>
            <li class="nav-item">
            <a class="nav-link" href='login'>Login</a></li>
            </li>
            </ul>
             <li class="nav-item dropdown">
         
            </div>


            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar" aria-label=" Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        <?php endif;?>
    
    </div>
    </div>
    </nav>