</main> <footer class="main-footer">
        <div class="footer-grid">
            <div class="footer-info">
                <h3>NetSysLab</h3>
                <p>Plataforma educativa para el aprendizaje de Sistemas Operativos.</p>
                <p><strong>Docente:</strong> Ing. Eduardo Rueda Fajardo</p> </div>
            <div class="footer-links">
                <h4>Navegación</h4>
                <ul>
                    <li><a href="/netsyslab.php">Inicio</a></li>
                    <li><a href="/temas/procesos.php">Temario</a></li>
                </ul>
            </div>
            <div class="footer-contact">
                <h4>Contacto</h4>
                <p>Universidad de Pamplona</p>
                <p>&copy; <?php echo date("Y"); ?> Ingeniería de Sistemas</p>
            </div>
        </div>
    </footer>

    <script>
        // Script simple para menú móvil
        const menuBtn = document.querySelector('.menu-btn');
        const navLinks = document.querySelector('.nav-links');
        menuBtn.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
    </script>
</body>
</html>