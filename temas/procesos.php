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
        <h3>Módulo 2: Procesos</h3>
        <ul>
            <li><a href="#concepto"><i class="fas fa-microchip"></i> Definición y PCB</a></li>
            <li><a href="#tipos"><i class="fas fa-filter"></i> Tipos de Procesos</a></li>
            <li><a href="#ciclo"><i class="fas fa-sync-alt"></i> Ciclo de Vida</a></li>
            <li><a href="#hilos"><i class="fas fa-network-wired"></i> Hilos (Threads)</a></li>
            <li><a href="#planificacion"><i class="fas fa-tasks"></i> Planificación</a></li>
            <li><a href="#sincronizacion"><i class="fas fa-traffic-light"></i> Sincronización</a></li>
            <li><a href="#referencias"><i class="fas fa-quote-right"></i> Referencias</a></li>
        </ul>
        <div class="progress-widget">
            <p>Progreso del módulo</p>
            <div class="progress-bar"><div class="fill" style="width: 65%"></div></div>
        </div>
    </aside>

    <div class="content-topic">
        
        <section id="concepto" class="topic-section">
            <h1>Gestión de Procesos</h1>
            
            <div class="grid-2-col">
                <div class="text-col">
                    <p class="lead">Un proceso es una instancia de un programa en ejecución, con su propio espacio de memoria y contexto<sup>[254]</sup>.</p>
                    <p>Un programa es pasivo (instrucciones en disco), mientras que un proceso es activo (requiere CPU y recursos)<sup>[467]</sup>. Al ejecutar un archivo `.exe`, el programa se convierte en proceso<sup>[473]</sup>.</p>
                    
                    <div class="deep-dive">
                        <h4><i class="fas fa-id-card"></i> Process Control Block (PCB)</h4>
                        <p>Es la estructura de datos vital para gestionar el proceso<sup>[508]</sup>. Contiene:</p>
                        <ul>
                            <li><strong>PID:</strong> Identificador único del proceso<sup>[510]</sup>.</li>
                            <li><strong>Estado:</strong> Situación actual (Nuevo, Listo, etc.)<sup>[511]</sup>.</li>
                            <li><strong>Contador de Programa:</strong> Dirección de la próxima instrucción<sup>[512]</sup>.</li>
                            <li><strong>Registros y Memoria:</strong> Datos temporales y segmentos asignados<sup>[512, 514]</sup>.</li>
                        </ul>
                    </div>
                </div>
                <div class="img-col">
                    
                    <div class="img-col">
                        <img src="/images/process1.jpeg" class="img-fluid shadow-box">
                    </div>
                </div>
            </div>
        </section>

        <section id="tipos" class="topic-section">
            <h2>Tipos de Procesos</h2>
            <table class="data-table">
                <tr>
                    <th>Clasificación</th>
                    <th>Descripción</th>
                    <th>Ejemplo</th>
                </tr>
                <tr>
                    <td><strong>Independientes vs. Interdependientes</strong></td>
                    <td>Los independientes no comparten recursos. Los interdependientes se comunican y comparten datos<sup>[270, 271]</sup>.</td>
                    <td>Word (Indep) vs Navegador (Inter)</td>
                </tr>
                <tr>
                    <td><strong>Usuario vs. Sistema</strong></td>
                    <td>Iniciados por aplicaciones vs iniciados por el SO para mantenimiento<sup>[274, 276]</sup>.</td>
                    <td>Spotify vs Winlogon</td>
                </tr>
                <tr>
                    <td><strong>Primer vs. Segundo Plano</strong></td>
                    <td>Interacción directa (visible) vs ejecución oculta (background)<sup>[280, 282]</sup>.</td>
                    <td>Juego activo vs Antivirus</td>
                </tr>
            </table>
        </section>

        <section id="ciclo" class="topic-section">
            <h2>Ciclo de Vida del Proceso</h2>
            <p>Un proceso transita por 5 estados fundamentales<sup>[476]</sup>. Las transiciones son controladas por el planificador:</p>
            
            
            <div class="img-col">
                        <img src="/images/deadblock.jpeg" class="img-fluid shadow-box">
            </div>

            <ul class="step-list">
                <li><strong>Nuevo:</strong> Se crea el proceso<sup>[477]</sup>.</li>
                <li><strong>Listo (Ready):</strong> En memoria, esperando turno de CPU<sup>[478]</sup>.</li>
                <li><strong>Ejecución (Running):</strong> La CPU ejecuta sus instrucciones<sup>[479]</sup>.</li>
                <li><strong>Bloqueado (Waiting):</strong> Espera un evento (E/S) o recurso<sup>[480]</sup>.</li>
                <li><strong>Terminado:</strong> Finaliza su ejecución<sup>[481]</sup>.</li>
            </ul>
            
            <div class="info-box">
                <small><strong>Transiciones Clave:</strong> De <em>Ejecución</em> a <em>Listo</em> ocurre por interrupción (se acaba el tiempo). De <em>Ejecución</em> a <em>Bloqueado</em> ocurre si el proceso pide leer un archivo<sup>[485, 488]</sup>.</small>
            </div>
        </section>

        <section id="hilos" class="topic-section">
            <h2>Hilos (Threads)</h2>
            <p>Un hilo es la unidad más pequeña de procesamiento. Comparte memoria con su proceso padre, lo que reduce la sobrecarga<sup>[346, 350]</sup>.</p>
            
            <div class="accordion-native">
                <details open>
                    <summary><i class="fas fa-layer-group"></i> Modelos de Hilos</summary>
                    <div class="details-content">
                        <ul>
                            <li><strong>Nivel Usuario:</strong> Gestionados por librerías, sin intervención del kernel. Rápidos pero no aprovechan multinúcleo<sup>[357]</sup>.</li>
                            <li><strong>Nivel Kernel:</strong> Gestionados por el SO. Permiten paralelismo real pero tienen más sobrecarga<sup>[359]</sup>.</li>
                            <li><strong>Híbrido:</strong> Combina ambos para equilibrar eficiencia y rendimiento<sup>[360]</sup>.</li>
                        </ul>
                    </div>
                </details>
            </div>
        </section>

        <section id="planificacion" class="topic-section">
            <h2>Algoritmos de Planificación</h2>
            <p>El objetivo es maximizar el uso de la CPU. Se usan métricas como <strong>TR</strong> (Tiempo Retorno) y <strong>TE</strong> (Tiempo Espera)<sup>[109, 111]</sup>.</p>
            
            <div class="grid-2-col">
                <div class="card-module">
                    <h4>FCFS (First-Come, First-Served)</h4>
                    <p>Orden de llegada. Simple, pero sufre "efecto convoy" (procesos largos bloquean a los cortos)<sup>[128]</sup>.</p>
                </div>
                <div class="card-module">
                    <h4>Round Robin (RR)</h4>
                    <p>Asigna un tiempo límite (Quantum) a cada proceso. Equitativo, pero con sobrecarga si el quantum es pequeño<sup>[138]</sup>.</p>
                </div>
                <div class="card-module">
                    <h4>SJF (Shortest Job First)</h4>
                    <p>Atiende primero al proceso más corto. Optimiza los tiempos de espera<sup>[529]</sup>.</p>
                </div>
                <div class="card-module">
                    <h4>Prioridad</h4>
                    <p>Ejecuta procesos según su importancia. Puede causar "hambre" (starvation) a procesos de baja prioridad<sup>[532, 405]</sup>.</p>
                </div>
            </div>
        </section>

        <section id="sincronizacion" class="topic-section">
            <h2>Sincronización y Problemas</h2>
            <p>Vital para procesos que comparten recursos. Sin ella, ocurren conflictos graves<sup>[401]</sup>.</p>
            
            <table class="data-table">
                <tr>
                    <th>Problema</th>
                    <th>Definición</th>
                </tr>
                <tr>
                    <td><strong>Condición de Carrera</strong></td>
                    <td>El resultado depende del orden incorrecto de ejecución en una sección crítica<sup>[403]</sup>.</td>
                </tr>
                <tr>
                    <td><strong>Interbloqueo (Deadlock)</strong></td>
                    <td>Dos o más procesos se bloquean esperando recursos que el otro tiene<sup>[404]</sup>.</td>
                </tr>
                <tr>
                    <td><strong>Productor-Consumidor</strong></td>
                    <td>Problema clásico donde se debe evitar que se llene el buffer (productor) o se lea vacío (consumidor)<sup>[412]</sup>.</td>
                </tr>
            </table>

            <div class="deep-dive">
                <h4><i class="fas fa-tools"></i> Soluciones</h4>
                <ul>
                    <li><strong>Semáforos:</strong> Variables enteras para controlar acceso<sup>[407]</sup>.</li>
                    <li><strong>Mutex:</strong> Exclusión mutua estricta para secciones críticas<sup>[408]</sup>.</li>
                </ul>
            </div>
        </section>

        <section id="referencias" class="references-section">
            <h3>Referencias Bibliográficas</h3>
            <ul>
                <li>[15-63, 254-320] Rueda Fajardo, E. (2025). <em>Unidad 1 y 2: Intro y Procesos</em>. Universidad de Pamplona.</li>
                <li>[340-444] Rueda Fajardo, E. (2025). <em>Hilos en Sistemas Operativos</em>. Universidad de Pamplona.</li>
                <li>[445-582] Rueda Fajardo, E. (2025). <em>Gestión de Procesos</em>. Universidad de Pamplona.</li>
                <li>[98-159] Rueda Fajardo, E. (2025). <em>Cálculo de Tiempos de Planificación</em>. Universidad de Pamplona.</li>
            </ul>
        </section>

    </div>
</div>
<?php include '../includes/footer.php'; ?>