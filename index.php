<?php require __DIR__ . '/components/header.php';
?>

<main>

    <?php require __DIR__ . '/components/hero_section.php'; ?>

    <?php require __DIR__ . '/pages/about.php'; ?>
</main>

<footer class="footer">
    <div class="container footer-content">
        <p>&copy; 2026 Portfolio. All rights reserved.</p>

        <a href="#home"> Back to top ↑ </a>
    </div>
</footer>

<script>
    const sections = document.querySelectorAll("main section[id]");
    const navLinks = document.querySelectorAll(".nav a");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const id = entry.target.id;

                    navLinks.forEach((link) => {
                        link.classList.remove("active");

                        if (link.getAttribute("href") === `#${id}`) {
                            link.classList.add("active");
                        }
                    });
                }
            });
        }, {
            rootMargin: "-30% 0px -60% 0px"
        }
    );

    sections.forEach((section) => {
        observer.observe(section);
    });
    // Project filters
    const filterButtons = document.querySelectorAll(
        ".project-filters button",
    );

    filterButtons.forEach((button) => {
        button.addEventListener("click", () => {
            filterButtons.forEach((btn) => btn.classList.remove("active"));

            button.classList.add("active");
        });
    });
</script>
</body>

</html>
