<?php include '../includes/header.php'; ?>

<div class="course-layout">
    <aside class="sidebar-topic">
        <h3>Módulo 3: Memoria</h3>
        <ul>
            <li><a href="#jerarquia"><i class="fas fa-layer-group"></i> Jerarquía de Memoria</a></li>
            <li><a href="#mmu"><i class="fas fa-microchip"></i> La MMU</a></li>
            <li><a href="#chrome"><i class="fab fa-chrome"></i> ¿Por qué Chrome usa tanta RAM?</a></li>
            <li><a href="#virtual"><i class="fas fa-cloud"></i> Memoria Virtual</a></li>
            <li><a href="#curiosidades"><i class="fas fa-lightbulb"></i> Curiosidades</a></li>
        </ul>
    </aside>

    <div class="content-topic">
        
        <section id="jerarquia" class="topic-section">
            <h1>Gestión de Memoria</h1>
            <p>La memoria no es plana. Es una pirámide donde lo más rápido es lo más caro y escaso.</p>
            
            <div class="timeline">
                <div class="timeline-item">
                    <strong>1. Registros de CPU</strong>
                    <p>Velocidad: Inmediata. Capacidad: Minúscula (Bytes). Es donde ocurren los cálculos.</p>
                </div>
                <div class="timeline-item">
                    <strong>2. Caché (L1, L2, L3)</strong>
                    <p>Velocidad: Muy alta. Está dentro del procesador. Guarda los datos más usados recientemente para no ir a la RAM.</p>
                </div>
                <div class="timeline-item">
                    <strong>3. Memoria Principal (RAM)</strong>
                    <p>Velocidad: Media (Nanosegundos). Es donde viven los programas activos.</p>
                </div>
                <div class="timeline-item">
                    <strong>4. Disco Duro / SSD</strong>
                    <p>Velocidad: Lenta (Milisegundos). Almacenamiento persistente.</p>
                </div>
            </div>
        </section>

        <section id="mmu" class="topic-section">
            <h2>El Hardware Mágico: MMU</h2>
            <p>¿Cómo sabe el hardware qué dirección física corresponde a una dirección virtual del software?</p>
            <div class="deep-dive">
                <h3>Memory Management Unit (MMU)</h3>
                <p>Es un chip (ahora parte de la CPU) que traduce direcciones al vuelo. Cuando tu programa dice "Lee la dirección 1000", la MMU intercepta y dice "Espera, para ti es la 1000, pero en el chip de RAM real es la 504020".</p>
                <p>Esto permite la protección: si la MMU ve que quieres acceder a una dirección que no te asignaron, lanza un error de <strong>Segmentation Fault</strong>.</p>
            </div>
        </section>

        <section id="chrome" class="topic-section">
            <h2>Caso Real: Navegadores Web</h2>
            <p>Mucha gente se queja de que Chrome consume mucha RAM. Aquí está la razón técnica:</p>
            <div class="grid-2-col">
                <div class="card-info">
                    <h4>Sandboxing (Aislamiento)</h4>
                    <p>Chrome crea un proceso separado para cada pestaña. Esto asegura que si una página falla, no cierre todo el navegador.</p>
                </div>
                <div class="card-info">
                    <h4>El costo</h4>
                    <p>Cada proceso necesita su propia tabla de páginas, sus propias librerías y estructura. Eso duplica información en RAM, pero gana estabilidad.</p>
                </div>
            </div>
        </section>

        <section id="virtual" class="topic-section">
            <h2>Memoria Virtual: El Truco</h2>
            <p>Permite ejecutar un juego de 10GB en una PC con 4GB de RAM.</p>
            <div class="math-box">
                <p>El SO mueve trozos (páginas) que no estás usando de la RAM al Disco (Swap). Cuando los vuelves a necesitar, los trae de vuelta.</p>
            </div>
        </section>

        <section id="curiosidades" class="topic-section">
            <div class="fun-fact-box">
                <h4><i class="fas fa-quote-left"></i> Mito Histórico</h4>
                <p>Se dice que Bill Gates dijo en 1981: <em>"640 KB de memoria deberían ser suficientes para cualquiera"</em>. Aunque él niega haberlo dicho, esa era la limitación real del diseño del sistema operativo MS-DOS original. Hoy, ¡una simple foto ocupa más que eso!</p>
            </div>
        </section>

    </div>
</div>
<?php include '../includes/footer.php'; ?>