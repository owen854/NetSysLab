<?php include '../includes/header.php'; ?>

<style>
    .img-guide {
        background-color: #f0f4f8;
        border: 2px dashed #cbd5e0;
        border-radius: 10px;
        padding: 40px 20px;
        text-align: center;
        color: #555;
        margin: 15px 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 200px;
    }
    .img-guide i { font-size: 2rem; color: #a0aec0; margin-bottom: 10px; }
    .img-guide span { font-weight: 600; color: #2d3748; display: block; margin-bottom: 5px;}
    .img-guide small { font-size: 0.85rem; color: #718096; }
</style>

<div class="course-layout">
    <aside class="sidebar-topic">
        <h3>Módulo 3: Gestión de Memoria</h3>
        <ul>
            <li><a href="#definicion"><i class="fas fa-book"></i> Conceptos Básicos</a></li>
            <li><a href="#tipos"><i class="fas fa-th-large"></i> Tipos de Gestión</a></li>
            <li><a href="#ram"><i class="fas fa-memory"></i> Memoria Principal</a></li>
            <li><a href="#jerarquia"><i class="fas fa-layer-group"></i> Jerarquía</a></li>
            <li><a href="#asignacion"><i class="fas fa-tasks"></i> Asignación</a></li>
            <li><a href="#fragmentacion"><i class="fas fa-puzzle-piece"></i> Fragmentación</a></li>
            <li><a href="#algoritmos"><i class="fas fa-stopwatch"></i> Algoritmos</a></li>
        </ul>
        
        <div class="progress-widget">
            <p>Progreso del módulo</p>
            <div class="progress-bar"><div class="fill" style="width: 100%"></div></div>
        </div>
    </aside>

    <div class="content-topic">
        
        <section id="definicion" class="topic-section">
            <h1>Gestión de Memoria</h1>
            
            <div class="grid-2-col">
                <div class="text-col">
                    <p class="lead">Es el proceso mediante el cual el Sistema Operativo asigna y administra la memoria RAM a los programas que la solicitan.</p>
                    <div class="info-box">
                        <h3><i class="fas fa-exclamation-circle"></i> ¿Por qué es crucial?</h3>
                        <p>Sin una gestión eficiente, ocurriría el caos:</p>
                        <ul>
                            <li><strong>Ralentización:</strong> Procesos peleando por recursos.</li>
                            <li><strong>Bloqueos:</strong> Programas invadiendo el espacio de otros.</li>
                            <li><strong>Colapso:</strong> Agotamiento total de recursos.</li>
                        </ul>
                    </div>
                </div>
                <div class="img-col">
                    <img src="/images/gestion_memoria.png" class="img-fluid shadow-box">
                </div>
            </div>
        </section>

        <section id="tipos" class="topic-section">
            <h2>Tipos de Gestión</h2>
            <p>¿Cómo organizamos los datos en los casilleros de la memoria?</p>
            
            <div class="grid-2-col">
                <div class="card-module">
                    <div class="img-col">
                        <img src="/images/thrashing.png" class="img-fluid shadow-box">
                    </div>
                    <h4>Memoria Contigua</h4>
                    <p>Cada proceso recibe un bloque único y continuo.</p>
                    <ul class="fa-ul" style="font-size: 0.9em; margin-left: 20px;">
                        <li><span class="fa-li"><i class="fas fa-check text-success"></i></span><strong>Ventaja:</strong> Simple y rápida.</li>
                        <li><span class="fa-li"><i class="fas fa-times text-danger"></i></span><strong>Desventaja:</strong> Fragmentación grave.</li>
                    </ul>
                </div>
                
                <div class="card-module">
                    <div class="img-guide" style="min-height: 150px; padding: 10px;">
                        <i class="fas fa-th-large"></i>
                        <span>Imagen: Rompecabezas</span>
                        <small>Bloques de un mismo color dispersos en diferentes lugares.</small>
                    </div>
                    <h4>Memoria No Contigua</h4>
                    <p>El proceso se divide en trozos dispersos.</p>
                    <ul class="fa-ul" style="font-size: 0.9em; margin-left: 20px;">
                        <li><span class="fa-li"><i class="fas fa-check text-success"></i></span><strong>Ventaja:</strong> Aprovecha todo el espacio.</li>
                        <li><span class="fa-li"><i class="fas fa-times text-danger"></i></span><strong>Desventaja:</strong> Gestión compleja.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="ram" class="topic-section">
            <h2>Memoria Principal (RAM)</h2>
            <div class="grid-2-col">
                <div class="img-col">
                     <div class="img-guide">
                        <i class="fas fa-microchip"></i>
                        <span>Imagen: RAM Física vs Lógica</span>
                        <small>Una foto de un módulo RAM real al lado de una cuadrícula tipo Excel (celdas) con direcciones (0x01, 0x02...).</small>
                    </div>
                </div>
                <div class="text-col">
                    <p>Es el área de trabajo de la CPU. Es <strong>volátil</strong> (se borra al apagar) y de acceso rápido.</p>
                    <h4>Organización Celular</h4>
                    <p>La memoria es como un enorme casillero de correo. Cada celda tiene:</p>
                    <ol>
                        <li>Una <strong>Dirección Única</strong> (para encontrarla).</li>
                        <li>Un <strong>Dato almacenado</strong> (el contenido).</li>
                    </ol>
                    <p>Esto permite que la CPU acceda a cualquier dato en el mismo tiempo, sin importar dónde esté.</p>
                </div>
            </div>
        </section>

        <section id="jerarquia" class="topic-section">
            <h2>La Pirámide de Memoria</h2>
            <p>No toda la memoria es igual. Existe un compromiso entre velocidad, costo y capacidad.</p>
            
            <div class="grid-2-col">
                <div class="text-col">
                    <div class="timeline">
                        <div class="timeline-item">
                            <strong>1. Registros CPU</strong> <span class="badge success">Más Rápido</span>
                            <p>Capacidad minúscula (Bytes). Inmediato.</p>
                        </div>
                        <div class="timeline-item">
                            <strong>2. Caché (L1, L2)</strong>
                            <p>Memoria ultrarrápida dentro del procesador.</p>
                        </div>
                        <div class="timeline-item">
                            <strong>3. RAM</strong>
                            <p>Velocidad media. Almacén principal.</p>
                        </div>
                        <div class="timeline-item">
                            <strong>4. Disco Duro / SSD</strong> <span class="badge warning">Más Lento</span>
                            <p>Gran capacidad, persistente, pero lento.</p>
                        </div>
                    </div>
                </div>
                <div class="img-col">
                    

[Image of computer memory hierarchy pyramid]

                    <div class="img-guide">
                        <i class="fas fa-layer-group"></i>
                        <span>Imagen: Pirámide de Jerarquía</span>
                        <small>Busca el clásico diagrama triangular: Registros arriba (punta pequeña) y Disco abajo (base ancha).</small>
                    </div>
                </div>
            </div>
        </section>

        <section id="asignacion" class="topic-section">
            <h2>Métodos de Asignación</h2>
            <p>El SO utiliza estrategias inteligentes para repartir la memoria.</p>
            
            
            <div class="img-guide" style="min-height: 120px; margin-bottom: 20px;">
                <i class="fas fa-exchange-alt"></i>
                <span>Imagen: Diagrama de Swapping</span>
                <small>Ilustración que muestre una flecha moviendo datos de la RAM a un Disco y viceversa.</small>
            </div>

            <div class="accordion-native">
                <details open>
                    <summary><i class="fas fa-random"></i> Swapping (Intercambio)</summary>
                    <div class="details-content">
                        Cuando la RAM se llena, el SO mueve los procesos "dormidos" al disco duro para liberar espacio. Cuando vuelven a despertar, los trae de regreso. ¡Es como tener memoria extra imaginaria!
                    </div>
                </details>
                <details>
                    <summary><i class="fas fa-columns"></i> Particionamiento Fijo vs Dinámico</summary>
                    <div class="details-content">
                        <ul>
                            <li><strong>Fijo:</strong> Divide la RAM en pasteles iguales. Simple pero desperdicia espacio si el proceso es pequeño.</li>
                            <li><strong>Dinámico:</strong> Corta el pastel del tamaño exacto que pide el proceso.</li>
                        </ul>
                    </div>
                </details>
                <details>
                    <summary><i class="fas fa-file"></i> Paginación</summary>
                    <div class="details-content">
                        Divide la memoria en "marcos" y los programas en "páginas" del mismo tamaño. Permite colocar las páginas donde sea que haya hueco.
                    </div>
                </details>
            </div>
        </section>

        <section id="fragmentacion" class="topic-section">
            <h2>El Problema: Fragmentación</h2>
            <p class="lead">Es cuando tenemos memoria libre, pero no podemos usarla.</p>
            
            <div class="grid-2-col">
                <div class="card-module">
                    <h4>Fragmentación Interna</h4>
                    
                    <div class="img-guide" style="min-height: 100px; margin: 10px 0;">
                        <i class="fas fa-box-open"></i>
                        <span>Imagen: Caja medio vacía</span>
                        <small>Un bloque grande con un objeto pequeño dentro, sobrando espacio inútil.</small>
                    </div>
                    <p>Ocurre cuando le das 100MB a un proceso que solo necesita 90MB. Esos 10MB se pierden.</p>
                </div>
                <div class="card-module">
                    <h4>Fragmentación Externa</h4>
                    
                    <div class="img-guide" style="min-height: 100px; margin: 10px 0;">
                        <i class="fas fa-border-none"></i>
                        <span>Imagen: Queso Suizo</span>
                        <small>Bloques de memoria con huecos vacíos en medio, donde no cabe un proceso grande.</small>
                    </div>
                    <p>Hay suficiente espacio total, pero está todo disperso en pedacitos pequeños.</p>
                </div>
            </div>
        </section>

        <section id="algoritmos" class="topic-section">
            <h2>Algoritmos de Reemplazo</h2>
            <p>Si la memoria está llena, ¿a quién sacamos para que entre alguien nuevo?</p>
            
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Algoritmo</th>
                        <th>Lógica</th>
                        <th>Eficacia</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>FIFO</strong> <br><small>(First In, First Out)</small></td>
                        <td>Saca al más antiguo.</td>
                        <td><span class="badge warning">Baja</span> A veces saca procesos importantes solo por ser viejos.</td>
                    </tr>
                    <tr>
                        <td><strong>LRU</strong> <br><small>(Least Recently Used)</small></td>
                        <td>Saca al que lleva más tiempo sin usarse.</td>
                        <td><span class="badge success">Alta</span> Asume que si no lo usaste hace poco, no lo usarás pronto.</td>
                    </tr>
                    <tr>
                        <td><strong>Optimal</strong></td>
                        <td>Saca al que no se usará en el futuro.</td>
                        <td><span class="badge">Teórica</span> Imposible de implementar (no adivinamos el futuro).</td>
                    </tr>
                </tbody>
            </table>
        </section>

    </div>
</div>
<?php include '../includes/footer.php'; ?>