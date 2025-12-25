<?php
$isHomepage = !isset($isCaseStudy) || !$isCaseStudy;
$backLink = isset($backLink) ? $backLink : '/';
$backText = isset($backText) ? $backText : 'Back to Portfolio';
?>
<nav class="nav">
    <div class="nav-inner">
        <a href="/" class="nav-logo">Anna Barto</a>
        <?php if ($isHomepage): ?>
        <div class="nav-links">
            <a href="#about" class="nav-link">About</a>
            <a href="#portfolio" class="nav-link">Portfolio</a>
            <a href="#writing" class="nav-link">Writing</a>
            <a href="#capabilities" class="nav-link">Capabilities</a>
            <a href="#testimonials" class="nav-link">Testimonials</a>
        </div>
        <div class="nav-cta-wrapper">
            <a href="#contact" class="nav-cta">Get in Touch</a>
        </div>
        <button id="mobile-menu-btn" class="nav-mobile-btn" aria-label="Toggle menu">
            <svg id="menu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
            <svg id="close-icon" class="hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
        <?php else: ?>
        <a href="<?php echo $backLink; ?>" class="nav-back">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
            </svg>
            <?php echo $backText; ?>
        </a>
        <?php endif; ?>
    </div>
</nav>

<?php if ($isHomepage): ?>
<div id="mobile-overlay" class="nav-mobile-overlay"></div>
<div id="mobile-menu" class="nav-mobile-menu">
    <div class="nav-mobile-header">
        <span>Menu</span>
        <button id="close-mobile-menu" class="nav-mobile-btn" aria-label="Close menu">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>
    <div class="nav-mobile-body">
        <a href="#about" class="nav-mobile-link">About</a>
        <a href="#portfolio" class="nav-mobile-link">Portfolio</a>
        <a href="#writing" class="nav-mobile-link">Writing</a>
        <a href="#capabilities" class="nav-mobile-link">Capabilities</a>
        <a href="#testimonials" class="nav-mobile-link">Testimonials</a>
    </div>
    <div class="nav-mobile-footer">
        <a href="#contact" class="btn btn-primary btn-lg" style="width: 100%; justify-content: center;">Get in Touch</a>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileOverlay = document.getElementById('mobile-overlay');
    const closeMobileMenu = document.getElementById('close-mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');
    const mobileNavLinks = document.querySelectorAll('.nav-mobile-link');

    function openMenu() {
        mobileMenu.classList.add('active');
        mobileOverlay.classList.add('active');
        menuIcon.classList.add('hidden');
        closeIcon.classList.remove('hidden');
    }

    function closeMenu() {
        mobileMenu.classList.remove('active');
        mobileOverlay.classList.remove('active');
        menuIcon.classList.remove('hidden');
        closeIcon.classList.add('hidden');
    }

    mobileMenuBtn.addEventListener('click', openMenu);
    closeMobileMenu.addEventListener('click', closeMenu);
    mobileOverlay.addEventListener('click', closeMenu);
    mobileNavLinks.forEach(link => link.addEventListener('click', closeMenu));

    // Active section indicator
    const navLinks = document.querySelectorAll('.nav-link');
    const sections = [];

    navLinks.forEach(link => {
        const href = link.getAttribute('href');
        if (href && href.startsWith('#')) {
            const section = document.querySelector(href);
            if (section) sections.push({ id: href.slice(1), element: section, link: link });
        }
    });

    const observerOptions = {
        root: null,
        rootMargin: '-20% 0px -60% 0px',
        threshold: 0
    };

    let currentActive = null;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const sectionData = sections.find(s => s.element === entry.target);
                if (sectionData && currentActive !== sectionData.link) {
                    navLinks.forEach(l => l.classList.remove('active'));
                    sectionData.link.classList.add('active');
                    currentActive = sectionData.link;
                }
            }
        });
    }, observerOptions);

    sections.forEach(section => observer.observe(section.element));
});
</script>
<?php endif; ?>

<div class="nav-spacer"></div>
