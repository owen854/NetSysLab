</main> <footer class="main-footer">
        <div class="footer-grid">
            
            <div class="footer-col">
                <h3><i class="fas fa-microchip"></i> NetSysLab</h3>
                <p>Plataforma educativa diseñada para facilitar el aprendizaje de los fundamentos de Sistemas Operativos, optimizando la gestión de recursos y procesos.</p>
            </div>

            <div class="footer-col">
                <h4>Explorar</h4>
                <ul class="footer-links">
                    <li><a href="/netsyslab.php"><i class="fas fa-home"></i> Inicio</a></li>
                    <li><a href="/temas/introduccion.php"><i class="fas fa-book"></i> Introducción</a></li>
                    <li><a href="/temas/procesos.php"><i class="fas fa-tasks"></i> Procesos</a></li>
                    <li><a href="/temas/memoria.php"><i class="fas fa-memory"></i> Memoria</a></li>
                    <li><a href="/temas/almacenamiento.php"><i class="fas fa-hdd"></i> Almacenamiento</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Créditos</h4>
                <div class="credit-block">
                    <span>Docente:</span>
                    <p>Ing. Eduardo Rueda Fajardo</p>
                </div>
                <div class="credit-block">
                    <span>Estudiantes:</span>
                    <ul class="student-list">
                        <li><i class="fas fa-user-graduate"></i> Juan Felipe Mantilla</li>
                        <li><i class="fas fa-user-graduate"></i> Owen Yesid Fuentes</li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-col">
                <h4>Institución</h4>
                <ul class="contact-links">
                    <li><i class="fas fa-university"></i> Universidad de Pamplona</li>
                    <li><i class="fas fa-laptop-code"></i> Ingeniería de Sistemas</li>
                    <li><i class="fas fa-calendar-alt"></i> Semestre 2025-2</li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?php echo date("Y"); ?> NetSysLab - Todos los derechos reservados.</p>
        </div>
    </footer>

    <script>
        const menuBtn = document.querySelector('.menu-btn');
        const navLinks = document.querySelector('.nav-links');
        
        if (menuBtn) {
            menuBtn.addEventListener('click', () => {
                navLinks.classList.toggle('active');
            });
        }
    </script>
</body>
</html>