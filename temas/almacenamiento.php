<?php include '../includes/header.php'; ?>

<div class="course-layout">
    
    <aside class="sidebar-topic">
        <h3>Módulo 4: Almacenamiento</h3>
        <ul>
            <li><a href="#concepto"><i class="fas fa-book"></i> Concepto</a></li>
            <li><a href="#sistemas"><i class="fas fa-folder-tree"></i> Sistemas de Archivos</a></li>
            <li><a href="#fisico"><i class="fas fa-hdd"></i> HDD vs SSD</a></li>
            <li><a href="#jerarquia"><i class="fas fa-layer-group"></i> Jerarquía</a></li>
            <li><a href="#curiosidades"><i class="fas fa-lightbulb"></i> Curiosidades</a></li>
        </ul>
        
        <div class="progress-widget">
            <p>Progreso del módulo</p>
            <div class="progress-bar"><div class="fill" style="width: 10%"></div></div>
        </div>
    </aside>

    <div class="content-topic">
        
        <section id="concepto" class="topic-section">
            <h1>Gestión de Almacenamiento</h1>
            <p class="lead">El sistema operativo abstrae los discos físicos complejos para que tú veas simples "carpetas" y "archivos".</p>
            
            <div class="grid-2-col">
                <div class="text-col">
                    <p>Imagina un disco duro como un almacén gigante sin pasillos. Sin un SO, tendrías que saber la coordenada exacta (sector, cilindro y pista) de cada dato.</p>
                    <div class="info-box">
                        <i class="fas fa-info-circle"></i>
                        <strong>Definición:</strong> El SO define la unidad lógica llamada <strong>Archivo</strong> y la mapea a la unidad física (Bloques en el disco).
                    </div>
                </div>
                <div class="image-col">
                    <img src="../images/abstraction_storage.png" alt="Abstracción Lógica vs Física" class="img-fluid shadow-box" onerror="this.style.display='none'">
                    <p class="caption">Fig 1. Vista lógica (Usuario) vs Vista física (Disco).</p>
                </div>
            </div>
        </section>

        <section id="sistemas" class="topic-section">
            <h2>Sistemas de Archivos</h2>
            <p>Es la estructura que usa el SO para organizar los datos. Sin él, el disco es un ladrillo ilegible.</p>
            
            <div class="grid-cards">
                <div class="card-module card-ntfs">
                    <div class="card-icon"><i class="fab fa-windows"></i></div>
                    <h3>NTFS</h3>
                    <p class="sub-text">New Technology File System</p>
                    <p>El estándar de Windows. Soporta archivos gigantes, permisos de seguridad avanzados y recuperación de errores.</p>
                </div>

                <div class="card-module card-fat">
                    <div class="card-icon"><i class="fas fa-usb"></i></div>
                    <h3>FAT32 / exFAT</h3>
                    <p class="sub-text">Universal</p>
                    <p>El más compatible (USB, Cámaras). FAT32 no acepta archivos >4GB. exFAT sí lo hace.</p>
                </div>

                <div class="card-module card-ext">
                    <div class="card-icon"><i class="fab fa-linux"></i></div>
                    <h3>EXT4</h3>
                    <p class="sub-text">Linux Standard</p>
                    <p>Muy robusto y eficiente. Reduce la fragmentación automáticamente. Es el estándar en servidores mundiales.</p>
                </div>
            </div>
        </section>

        <section id="fisico" class="topic-section">
            <h2>Hardware: HDD vs SSD</h2>
            <p>La gestión del SO cambia drásticamente dependiendo de la tecnología física debajo.</p>
            
            <table class="data-table">
                <thead>
                    <tr>
                        <th style="width: 20%;">Característica</th>
                        <th style="width: 40%;">HDD (Mecánico)</th>
                        <th style="width: 40%;">SSD (Estado Sólido)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Mecanismo</strong></td>
                        <td>Platos giratorios y aguja magnética.</td>
                        <td>Chips de memoria Flash (NAND).</td>
                    </tr>
                    <tr>
                        <td><strong>Velocidad</strong></td>
                        <td>Lento (sufre por fragmentación).</td>
                        <td><span class="badge success">Ultrarrápido</span> (acceso instantáneo).</td>
                    </tr>
                    <tr>
                        <td><strong>Durabilidad</strong></td>
                        <td>Frágil a golpes (partes móviles).</td>
                        <td>Resistente (sin partes móviles).</td>
                    </tr>
                    <tr>
                        <td><strong>Ruido</strong></td>
                        <td>Zumbido al girar.</td>
                        <td>Silencioso.</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section id="jerarquia" class="topic-section">
            <h2>Organización Lógica</h2>
            
            <div class="accordion-native">
                <details open>
                    <summary><i class="fas fa-hdd"></i> Particiones</summary>
                    <div class="details-content">
                        Dividir un disco físico en varias "unidades lógicas" (C:, D:). Útil para separar el Sistema Operativo (C:) de tus Datos (D:) y salvar tus archivos si tienes que formatear.
                    </div>
                </details>
                
                <details>
                    <summary><i class="fas fa-folder-open"></i> Directorios (Carpetas)</summary>
                    <div class="details-content">
                        Técnicamente, una carpeta es solo un archivo especial que contiene una lista de otros archivos. Organizan la información en una estructura de árbol invertido.
                    </div>
                </details>

                <details>
                    <summary><i class="fas fa-file-signature"></i> Metadatos</summary>
                    <div class="details-content">
                        Información oculta de cada archivo: ¿Quién lo creó? ¿Cuándo se modificó? ¿Qué permisos tiene? El SO guarda esto en la tabla maestra de archivos (MFT).
                    </div>
                </details>
            </div>
        </section>

        <section id="curiosidades" class="topic-section">
            <div class="fun-fact-box">
                <h4><i class="fas fa-tools"></i> Mito Tecnológico: Desfragmentar</h4>
                <p><strong>"Debes desfragmentar tu disco frecuentemente".</strong></p>
                <hr style="border: 0; border-top: 1px solid rgba(0,0,0,0.1); margin: 10px 0;">
                <p><strong>Realidad:</strong> Solo en discos viejos (HDD). Si desfragmentas un <strong>SSD</strong>, ¡le reduces la vida útil! Los SSD no tienen cabezales físicos, por lo que leer datos desordenados no les cuesta tiempo extra.</p>
            </div>
        </section>

    </div>
</div>
<?php include '../includes/footer.php'; ?>