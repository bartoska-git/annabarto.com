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

        // Update active link
        tocLinks.forEach(l => l.classList.remove('active'));
        if (currentSection) {
            currentSection.link.classList.add('active');
        }

        // Update progress bar to reach the active section
        if (tocList && currentIndex >= 0) {
            // Calculate the position of the active link in the TOC
            const activeLink = tocLinks[currentIndex];
            if (activeLink) {
                const tocListRect = tocList.getBoundingClientRect();
                const activeLinkRect = activeLink.getBoundingClientRect();
                const progressHeight = (activeLinkRect.bottom - tocListRect.top) / tocListRect.height * 100;

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

    // Initialize
    updateTOC();
});
</script>
<?php endif; ?>

</body>
</html>
