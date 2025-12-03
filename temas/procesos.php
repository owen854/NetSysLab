<?php include '../includes/header.php'; ?>

<div class="course-layout">
    <aside class="sidebar-topic">
        <h3>Módulo 2: Procesos</h3>
        <ul>
            <li><a href="#concepto"><i class="fas fa-utensils"></i> Analogía del Chef</a></li>
            <li><a href="#context-switch"><i class="fas fa-exchange-alt"></i> Cambio de Contexto</a></li>
            <li><a href="#pcb"><i class="fas fa-id-card"></i> El PCB</a></li>
            <li><a href="#ipc"><i class="fas fa-network-wired"></i> Comunicación (IPC)</a></li>
            <li><a href="#curiosidades"><i class="fas fa-lightbulb"></i> Curiosidades</a></li>
        </ul>
    </aside>

    <div class="content-topic">
        
        <section id="concepto" class="topic-section">
            <h1>Gestión de Procesos</h1>
            
            <div class="deep-dive">
                <h3><i class="fas fa-utensils"></i> La Analogía del Chef</h3>
                <p>Imagina que la <strong>CPU</strong> es un <strong>Chef</strong> y el <strong>Proceso</strong> es una <strong>Receta</strong>.</p>
                <ul>
                    <li><strong>Programa:</strong> Es el libro de recetas (está guardado, no hace nada).</li>
                    <li><strong>Proceso:</strong> Es el Chef cocinando la receta (actividad en tiempo real).</li>
                    <li><strong>Hilo (Thread):</strong> Si el Chef corta cebolla mientras vigila el horno, son hilos de la misma tarea.</li>
                    <li><strong>Cambio de Contexto:</strong> Si el Chef debe dejar de cocinar Pasta para cocinar Arroz, debe limpiar la mesa y sacar los nuevos ingredientes. Eso toma tiempo.</li>
                </ul>
            </div>
        </section>

        <section id="context-switch" class="topic-section">
            <h2>El Costo del Cambio de Contexto</h2>
            <p>La multitarea es una ilusión. La CPU cambia tan rápido entre procesos (miles de veces por segundo) que parece que todo corre a la vez.</p>
            <p>Pero cambiar cuesta. El sistema debe:</p>
            <ol>
                <li>Guardar el estado del proceso actual (registros, contadores).</li>
                <li>Cargar el estado del siguiente proceso.</li>
                <li>Limpiar cachés (a veces).</li>
            </ol>
            <div class="warning-box">
                <p><strong>Overhead:</strong> Si el sistema pasa demasiado tiempo cambiando de procesos, no le queda tiempo para <em>ejecutar</em> procesos. Esto se llama "Thrashing".</p>
            </div>
        </section>

        <section id="pcb" class="topic-section">
            <h2>PCB: El DNI del Proceso</h2>
            <p>El Sistema Operativo mantiene una ficha técnica de cada proceso llamada <strong>Process Control Block (PCB)</strong>.</p>
            <table class="data-table">
                <tr>
                    <th>Dato</th>
                    <th>Descripción</th>
                </tr>
                <tr>
                    <td><strong>PID</strong></td>
                    <td>Identificador único (ej: 4021).</td>
                </tr>
                <tr>
                    <td><strong>Estado</strong></td>
                    <td>¿Está corriendo, listo o bloqueado?</td>
                </tr>
                <tr>
                    <td><strong>Contador de Programa</strong></td>
                    <td>¿En qué línea de código se quedó?</td>
                </tr>
                <tr>
                    <td><strong>Información de Memoria</strong></td>
                    <td>¿Qué partes de la RAM le pertenecen?</td>
                </tr>
            </table>
        </section>

        <section id="ipc" class="topic-section">
            <h2>Comunicación entre Procesos (IPC)</h2>
            <p>Los procesos son aislados por seguridad, pero a veces necesitan hablarse. ¿Cómo lo hacen?</p>
            <div class="grid-2-col">
                <div class="card-module">
                    <h4>Tuberías (Pipes)</h4>
                    <p>Un proceso escribe datos en un extremo y otro los lee del otro. Ej: <code>ls | grep archivo</code> en Linux.</p>
                </div>
                <div class="card-module">
                    <h4>Memoria Compartida</h4>
                    <p>Dos procesos acuerdan usar un mismo pedazo de RAM. Es lo más rápido, pero peligroso si no se sincronizan.</p>
                </div>
            </div>
        </section>

        <section id="curiosidades" class="topic-section">
            <div class="fun-fact-box">
                <h4><i class="fas fa-robot"></i> Proceso Zombie</h4>
                <p>En sistemas UNIX/Linux, un proceso puede morir pero seguir apareciendo en la lista. Se llama <strong>Proceso Zombie</strong>. Ocurre cuando un proceso hijo termina, pero su padre no ha leído su estado final. ¡Técnicamente está muerto pero ocupa una entrada en la tabla!</p>
            </div>
        </section>

    </div>
</div>
<?php include '../includes/footer.php'; ?>