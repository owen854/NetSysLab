<?php include '../includes/header.php'; ?>

<style>
    .img-guide {
        background-color: #f0f4f8;
        border: 2px dashed #cbd5e0;
        border-radius: 10px;
        padding: 30px;
        text-align: center;
        color: #555;
        margin: 15px 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    sup {
        color: var(--primary);
        font-weight: bold;
        cursor: help;
        font-size: 0.8em;
        margin-left: 2px;
    }
    .references-section {
        margin-top: 50px;
        padding-top: 20px;
        border-top: 1px solid #ddd;
        font-size: 0.9rem;
        color: #666;
    }
</style>

<div class="course-layout">
    <aside class="sidebar-topic">
        <h3>Módulo 1: Introducción</h3>
        <ul>
            <li><a href="#definicion"><i class="fas fa-book"></i> Definición y Conceptos</a></li>
            <li><a href="#componentes"><i class="fas fa-microchip"></i> Hardware y Firmware</a></li>
            <li><a href="#funciones"><i class="fas fa-cogs"></i> Funciones del SO</a></li>
            <li><a href="#estructura"><i class="fas fa-layer-group"></i> Estructura y Núcleo</a></li>
            <li><a href="#clasificacion"><i class="fas fa-list-ul"></i> Clasificación</a></li>
            <li><a href="#referencias"><i class="fas fa-quote-right"></i> Referencias</a></li>
        </ul>
        <div class="progress-widget">
            <p>Progreso del módulo</p>
            <div class="progress-bar"><div class="fill" style="width: 35%"></div></div>
        </div>
    </aside>

    <div class="content-topic">
        
        <section id="definicion" class="topic-section">
            <h1>Introducción a los Sistemas Operativos</h1>
            <div class="grid-2-col">
                <div class="text-col">
                    <p class="lead">Un sistema operativo (SO) es un conjunto organizado de módulos que trabajan en conjunto para gestionar recursos y ofrecer servicios<sup>[15]</sup>. Es el software fundamental que actúa como intermediario entre el usuario y el hardware<sup>[832]</sup>.</p>
                    
                    <div class="info-box">
                        <h4><i class="fas fa-desktop"></i> Interfaces de Usuario</h4>
                        <p>El SO permite la interacción humana mediante dos tipos de interfaces<sup>[860]</sup>:</p>
                        <ul>
                            <li><strong>CLI (Command Line Interface):</strong> Interacción basada en texto y comandos (ej: Terminal Linux, CMD)<sup>[864]</sup>.</li>
                            <li><strong>GUI (Graphical User Interface):</strong> Interacción visual mediante ventanas, iconos y menús (ej: Windows, macOS)<sup>[866]</sup>.</li>
                        </ul>
                    </div>
                </div>
                <div class="img-col">
                    
                    <div class="img-guide">
                        <i class="fas fa-terminal fa-2x"></i>
                        <span>Imagen: CLI vs GUI</span>
                        <small>Comparativa visual: Una pantalla negra con código vs un escritorio con iconos.</small>
                    </div>
                </div>
            </div>
        </section>

        <section id="componentes" class="topic-section">
            <h2>Componentes de un Sistema de Cómputo</h2>
            <p>Un sistema de cómputo integra hardware y software bajo la coordinación del SO<sup>[934]</sup>. Elementos clave:</p>
            
            <div class="accordion-native">
                <details open>
                    <summary><i class="fas fa-microchip"></i> Procesamiento (CPU/GPU)</summary>
                    <div class="details-content">
                        La <strong>CPU</strong> ejecuta las instrucciones. Hoy en día se complementa con la <strong>GPU</strong> (gráficos/IA) y la <strong>TPU</strong> (aprendizaje automático)<sup>[938, 999]</sup>.
                    </div>
                </details>
                <details>
                    <summary><i class="fas fa-memory"></i> Tipos de Memoria</summary>
                    <div class="details-content">
                        <ul>
                            <li><strong>RAM:</strong> Acceso aleatorio, almacena datos temporales en ejecución<sup>[1000]</sup>.</li>
                            <li><strong>ROM:</strong> Memoria de solo lectura que contiene el firmware esencial<sup>[1000]</sup>.</li>
                            <li><strong>Firmware:</strong> Software básico en chips que controla funciones esenciales del hardware<sup>[1001]</sup>.</li>
                        </ul>
                    </div>
                </details>
                <details>
                    <summary><i class="fas fa-wifi"></i> Periféricos e IoT</summary>
                    <div class="details-content">
                        Desde teclados hasta sensores IoT. El SO los administra mediante <strong>Controladores (Drivers)</strong>, que traducen las órdenes del software al dispositivo físico<sup>[986, 1006]</sup>.
                    </div>
                </details>
            </div>
        </section>

        <section id="funciones" class="topic-section">
            <h2>Funciones Esenciales</h2>
            <p>El sistema operativo no es un programa único, sino un gestor integral que cubre cinco áreas vitales<sup>[15]</sup>:</p>
            
            <ul class="step-list">
                <li><strong>Gestión de Procesos:</strong> Administra la ejecución, planificación y sincronización de tareas<sup>[21]</sup>.</li>
                <li><strong>Gestión de Memoria:</strong> Asigna, libera y protege la memoria principal para cada aplicación<sup>[26]</sup>.</li>
                <li><strong>Gestión de Archivos:</strong> Proporciona acceso seguro y organizado a los datos en almacenamiento secundario<sup>[27]</sup>.</li>
                <li><strong>Gestión de E/S:</strong> Comunica las aplicaciones con el hardware externo<sup>[28]</sup>.</li>
                <li><strong>Protección y Seguridad:</strong> Garantiza el acceso controlado a los recursos, evitando usos no autorizados<sup>[29]</sup>.</li>
            </ul>
        </section>

        <section id="estructura" class="topic-section">
            <h2>Estructura del Sistema Operativo</h2>
            <p>La organización interna afecta el rendimiento y la estabilidad. El componente central es el <strong>Kernel (Núcleo)</strong><sup>[20]</sup>.</p>
            
            <div class="grid-2-col">
                <div class="card-module">
                    <h4>Monolítica</h4>
                    <p>Todo el SO corre como un único programa en modo kernel. Es rápido, pero si falla un módulo, cae todo el sistema. (Ej: MS-DOS)<sup>[32, 35]</sup>.</p>
                </div>
                <div class="card-module">
                    <h4>En Capas</h4>
                    <p>Organizado en niveles jerárquicos. Cada capa solo interactúa con la superior e inferior, facilitando la depuración pero aumentando la sobrecarga<sup>[37, 40]</sup>.</p>
                </div>
                <div class="card-module">
                    <h4>Microkernel</h4>
                    <p>El kernel es mínimo (solo procesos y memoria). Los servicios corren en espacio de usuario. Más seguro y estable, pero más lento por la comunicación<sup>[42, 45]</sup>.</p>
                </div>
                <div class="card-module">
                    <h4>Modular</h4>
                    <p>Usa módulos cargables dinámicamente. Permite extender el SO sin reiniciar (Ej: Drivers en Linux)<sup>[56, 61]</sup>.</p>
                </div>
            </div>
            
            
             <div class="img-guide" style="min-height: 100px;">
                <i class="fas fa-sitemap fa-2x"></i>
                <span>Imagen: Arquitecturas de SO</span>
                <small>Diagrama comparativo de las estructuras (Monolítico, Capas, Microkernel).</small>
            </div>

            <div class="info-box">
                <strong><i class="fas fa-mobile-alt"></i> Caso Real: Android</strong>
                <p>Android usa una estructura basada en Linux modular, pero añade sus propios servicios como HAL (Hardware Abstraction Layer) y ART (Android Runtime)<sup>[63]</sup>. Es un ejemplo de evolución moderna.</p>
            </div>
        </section>

        <section id="clasificacion" class="topic-section">
            <h2>Clasificación de los Sistemas</h2>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Categoría</th>
                        <th>Definición</th>
                        <th>Ejemplos</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Por Tareas</strong></td>
                        <td>
                            <strong>Monotarea:</strong> Un programa a la vez<sup>[871]</sup>.<br>
                            <strong>Multitarea:</strong> Ejecución simultánea<sup>[872]</sup>.
                        </td>
                        <td>MS-DOS vs Windows 11</td>
                    </tr>
                    <tr>
                        <td><strong>Por Usuarios</strong></td>
                        <td>
                            <strong>Monousuario:</strong> Acceso individual<sup>[879]</sup>.<br>
                            <strong>Multiusuario:</strong> Accesos remotos simultáneos<sup>[881]</sup>.
                        </td>
                        <td>Windows Home vs Unix Server</td>
                    </tr>
                    <tr>
                        <td><strong>Especializados</strong></td>
                        <td>
                            <strong>Tiempo Real:</strong> Respuesta crítica garantizada<sup>[884]</sup>.<br>
                            <strong>Embebidos:</strong> Funciones específicas en hardware limitado<sup>[887]</sup>.
                        </td>
                        <td>Control Industrial, Autos, IoT</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section id="referencias" class="references-section">
            <h3>Referencias Bibliográficas</h3>
            <ul>
                <li>[15-63] Rueda Fajardo, E. (2025). <em>Unidad 1: Estructura de un Sistema Operativo</em>. Universidad de Pamplona.</li>
                <li>[832-887, 934-1006] Rueda Fajardo, E. (2025). <em>Introducción y Componentes de Sistemas de Cómputo</em>. Universidad de Pamplona.</li>
            </ul>
        </section>

    </div>
</div>
<?php include '../includes/footer.php'; ?>