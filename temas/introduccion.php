<?php include '../includes/header.php'; ?>

<div class="course-layout">
    <aside class="sidebar-topic">
        <h3>Módulo 1: Introducción</h3>
        <ul>
            <li><a href="#definicion"><i class="fas fa-book"></i> Definición Profunda</a></li>
            <li><a href="#historia"><i class="fas fa-history"></i> Evolución Histórica</a></li>
            <li><a href="#kernel"><i class="fas fa-microchip"></i> El Kernel y Modos</a></li>
            <li><a href="#syscalls"><i class="fas fa-code"></i> Llamadas al Sistema</a></li>
            <li><a href="#curiosidades"><i class="fas fa-lightbulb"></i> Datos Curiosos</a></li>
        </ul>
    </aside>

    <div class="content-topic">
        
        <section id="definicion" class="topic-section">
            <h1>Introducción a los Sistemas Operativos</h1>
            <p class="lead">Más que un simple software, el Sistema Operativo (SO) es el gobierno de tu computadora. Administra recursos finitos (CPU, RAM, Disco) para demandas infinitas (Tus aplicaciones).</p>
            
            <div class="grid-2-col">
                <div class="card-info">
                    <h4><i class="fas fa-layer-group"></i> Abstracción</h4>
                    <p>El SO oculta la complejidad del hardware ("esconder los cables"). Al programador no le importa cómo funciona el disco duro físicamente, solo le dice al SO "guarda este archivo".</p>
                </div>
                <div class="card-info">
                    <h4><i class="fas fa-tasks"></i> Gestión de Recursos</h4>
                    <p>Actúa como un policía de tráfico, decidiendo qué programa usa la CPU y por cuánto tiempo, evitando el caos y los choques.</p>
                </div>
            </div>
        </section>

        <section id="historia" class="topic-section">
            <h2><i class="fas fa-hourglass-start"></i> Breve Historia de los SO</h2>
            <p>Para entender el presente, debemos mirar el pasado. Los SO no siempre existieron.</p>
            
            <div class="timeline">
                <div class="timeline-item">
                    <strong>1ra Generación (1945-55): Tubos de Vacío</strong>
                    <p>No había SO. Los programadores conectaban cables físicamente en tableros. Lenguaje de máquina absoluto.</p>
                </div>
                <div class="timeline-item">
                    <strong>2da Generación (1955-65): Transistores y Lotes</strong>
                    <p>Nace el procesamiento por lotes (Batch). La computadora leía tarjetas perforadas una tras otra. Ej: IBM 1401.</p>
                </div>
                <div class="timeline-item">
                    <strong>3ra Generación (1965-80): Circuitos Integrados</strong>
                    <p>Nace la <strong>Multiprogramación</strong>. ¡Revolución! La CPU podía tener varios trabajos en memoria a la vez. Nace UNIX (el padre de Linux y macOS).</p>
                </div>
                <div class="timeline-item">
                    <strong>4ta Generación (1980-Actualidad): PC y Móviles</strong>
                    <p>Computadoras personales. MS-DOS, Windows, MacOS. Y más tarde, la era móvil con Android e iOS.</p>
                </div>
            </div>
        </section>

        <section id="kernel" class="topic-section">
            <h2>Modo Usuario vs Modo Kernel</h2>
            <p>Para proteger el sistema, el hardware moderno tiene dos modos de operación. Es una barrera de seguridad vital.</p>
            
            <div class="deep-dive">
                <h3>El anillo de protección (Ring 0 vs Ring 3)</h3>
                <p>Las aplicaciones normales (Chrome, Word) corren en <strong>Modo Usuario</strong> (acceso restringido). Si intentan tocar la memoria de otro programa o acceder al hardware directamente, el CPU lanza una excepción y el SO mata el programa.</p>
                <p>Solo el <strong>Kernel</strong> corre en <strong>Modo Privilegiado</strong> (acceso total al hardware).</p>
            </div>
        </section>

        <section id="syscalls" class="topic-section">
            <h2>Llamadas al Sistema (System Calls)</h2>
            <p>Si una app no puede tocar el hardware, ¿cómo lee un archivo o muestra algo en pantalla?</p>
            <p>Usa una <strong>System Call</strong>. Es como tocar el timbre en la ventanilla del Kernel para pedir un servicio.</p>
            
            <ul class="step-list">
                <li><code>fork()</code>: Para crear un nuevo proceso.</li>
                <li><code>read() / write()</code>: Para leer o escribir datos.</li>
                <li><code>open()</code>: Para abrir archivos.</li>
            </ul>
        </section>

        <section id="curiosidades" class="topic-section">
            <div class="fun-fact-box">
                <h4><i class="fas fa-star"></i> ¿Sabías que?</h4>
                <p><strong>El error del año 2038:</strong> Muchos sistemas basados en UNIX (incluyendo servidores y routers) cuentan el tiempo contando segundos desde el 1 de enero de 1970. El contador es de 32 bits y se desbordará el 19 de enero de 2038, haciendo que las computadoras crean que volvieron a 1901. ¡Es el Y2K real!</p>
            </div>
        </section>

    </div>
</div>
<?php include '../includes/footer.php'; ?>