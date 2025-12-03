<?php include 'includes/header.php'; ?>

<section class="hero">
    <div class="hero-content">
        <h1>Domina los <span class="highlight">Sistemas Operativos</span></h1>
        <p>Una plataforma interactiva para comprender la gestión de recursos en computación.</p>
        <a href="#modulos" class="btn-primary">Comenzar Curso <i class="fas fa-arrow-right"></i></a>
    </div>
    <div class="hero-image">
        <i class="fas fa-server fa-10x" style="color: rgba(255,255,255,0.1);"></i>
    </div>
</section>

<section id="modulos" class="container section-pad">
    <div class="section-header">
        <h2>Módulos de Aprendizaje</h2>
        <p>Selecciona un tema para iniciar la lección</p>
    </div>

    <div class="grid-cards">
        <a href="temas/introduccion.php" class="card-module">
            <div class="card-icon"><i class="fas fa-desktop"></i></div>
            <h3>Introducción al SO</h3>
            <p>Conceptos básicos, evolución y estructura fundamental del sistema.</p>
            <span class="btn-text">Entrar <i class="fas fa-chevron-right"></i></span>
        </a>

        <a href="temas/procesos.php" class="card-module">
            <div class="card-icon"><i class="fas fa-tasks"></i></div>
            <h3>Gestión de Procesos</h3>
            <p>Hilos, planificación de CPU y concurrencia.</p>
            <span class="btn-text">Entrar <i class="fas fa-chevron-right"></i></span>
        </a>

        <a href="temas/memoria.php" class="card-module">
            <div class="card-icon"><i class="fas fa-microchip"></i></div>
            <h3>Gestión de Memoria</h3>
            <p>Memoria virtual, paginación y segmentación.</p>
            <span class="btn-text">Entrar <i class="fas fa-chevron-right"></i></span>
        </a>

        <a href="temas/almacenamiento.php" class="card-module">
            <div class="card-icon"><i class="fas fa-hdd"></i></div>
            <h3>Almacenamiento</h3>
            <p>Sistemas de archivos y gestión de discos I/O.</p>
            <span class="btn-text">Entrar <i class="fas fa-chevron-right"></i></span>
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>