<footer class="footer">
    <p class="footer-copyright">&copy; <?php echo date('Y'); ?> Anna Barto. All rights reserved.</p>
    <?php if (!isset($isCaseStudy) || !$isCaseStudy): ?>
    <div class="footer-links">
        <a href="#" class="footer-link">Privacy Policy</a>
        <a href="#" class="footer-link">Terms of Use</a>
    </div>
    <?php endif; ?>
</footer>

<?php if (isset($isCaseStudy) && $isCaseStudy): ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const tocList = document.querySelector('.toc-list');
    const tocLinks = document.querySelectorAll('.toc-link');
    const sections = [];

    // Build sections array
    tocLinks.forEach(link => {
        const href = link.getAttribute('href');
        if (href && href.startsWith('#')) {
            const section = document.querySelector(href);
            if (section) sections.push({ element: section, link: link });
        }
    });

    if (sections.length === 0 || !tocList) return;

    function updateTOC() {
        // Find the current section
        let currentSection = null;
        let currentIndex = -1;

        for (let i = 0; i < sections.length; i++) {
            const rect = sections[i].element.getBoundingClientRect();
            if (rect.top <= 150) {
                currentSection = sections[i];
                currentIndex = i;
            }
        }

        // Check if we're near the bottom of the page (for last section)
        const scrolledToBottom = (window.innerHeight + window.scrollY) >= document.documentElement.scrollHeight - 50;
        if (scrolledToBottom && sections.length > 0) {
            currentSection = sections[sections.length - 1];
            currentIndex = sections.length - 1;
        }

        // Update active link
        tocLinks.forEach(l => l.classList.remove('active'));
        if (currentSection) {
            currentSection.link.classList.add('active');
        }

        // Update progress bar to reach the active section
        if (tocList && currentIndex >= 0) {
            // Calculate the position that extends to the bottom of the active link
            const activeLink = tocLinks[currentIndex];
            if (activeLink) {
                const tocListRect = tocList.getBoundingClientRect();
                const activeLinkRect = activeLink.getBoundingClientRect();

                // For the last section, extend to 100% of TOC height
                // For other sections, extend to the bottom of the active link
                let progressHeight;
                if (currentIndex === sections.length - 1) {
                    progressHeight = 100;
                } else {
                    progressHeight = (activeLinkRect.bottom - tocListRect.top) / tocListRect.height * 100;
                }

                const style = document.getElementById('toc-progress-style') || document.createElement('style');
                style.id = 'toc-progress-style';
                style.textContent = `.toc-list::after { height: ${progressHeight}%; }`;
                if (!style.parentNode) document.head.appendChild(style);
            }
        } else if (currentIndex < 0) {
            // No section active, reset progress bar
            const style = document.getElementById('toc-progress-style');
            if (style) {
                style.textContent = `.toc-list::after { height: 0%; }`;
            }
        }
    }

    let scrollTimeout;
    window.addEventListener('scroll', () => {
        clearTimeout(scrollTimeout);
        scrollTimeout = setTimeout(updateTOC, 10);
    }, { passive: true });

    // Handle TOC link clicks with proper offset
    tocLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const targetId = link.getAttribute('href');
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                const headerOffset = 100; // Offset to account for fixed navigation
                const elementPosition = targetElement.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Initialize
    updateTOC();
});
</script>
<?php endif; ?>

</body>
</html>
