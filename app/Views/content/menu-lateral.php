<body>
  <?php 
      $inicio='';
      $Australia='';
      $Dubái='';
      $Colombia='';
      $Puerto='';

     if ($seleccionado == 'inicio') {
        $inicio = 'active';
     }elseif ($seleccionado == 'Australia') {
        $Australia = 'active';
     }elseif ($seleccionado == 'Dubái') {
      $Dubái = 'active'; 
     }elseif ($seleccionado == 'Colombia') {
      $Colombia = 'active'; 
     }elseif ($seleccionado == 'Puerto') {
      $Puerto = 'active'; 
     }
      

  ?>
    <div class="row">
        <div class="col-3 p-3 text-white bg-dark " style="height:100vh">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4">Menu</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column ">
            <li class="nav-item">
                <a href="<?php echo base_url(); ?> Paises/Paises" class="nav-link  text-white <?php echo $inicio; ?>" aria-current=""style="color: yellow" >
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                Inicio
                </a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?> Paises/Australia" class="nav-link text-white <?php echo $Australia; ?>">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="Australia.php"></use></svg>
                Autralia
                </a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?> Paises/Dubái" class="nav-link text-white  <?php echo $Dubái; ?>">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                Dubái
                </a>
            </li>
             <li>
                <a href="<?php echo base_url(); ?> Paises/Colombia" class="nav-link text-white  <?php echo $Colombia; ?>">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                Colombia
                </a>
            </li>
             <li>
                <a href="<?php echo base_url(); ?> Paises/Puerto_Rico" class="nav-link text-white  <?php echo $Puerto; ?>">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                Puerto Rico
                </a> 
            </li> 
            </ul>
            <hr>
            <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://i.pinimg.com/564x/d1/e3/d2/d1e3d2a12bc3d0221898c4391dffcfff.jpg" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>Flexin</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
            </div>
        </div>