<?php
$isHomepage = !isset($isCaseStudy) || !$isCaseStudy;
$backLink = isset($backLink) ? $backLink : '/';
$backText = isset($backText) ? $backText : 'Back to Portfolio';
?>
<nav class="fixed top-0 left-0 right-0 z-50 bg-warm-beige border-b border-olive-grey/10 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex-shrink-0">
                <a href="/" class="font-outfit text-xl font-bold text-deep-espresso hover:text-soft-terracotta transition-colors">
                    Anna Barto
                </a>
            </div>
            <?php if ($isHomepage): ?>
            <div class="hidden md:flex items-center space-x-8">
                <a href="#about" class="nav-link relative text-deep-espresso hover:text-olive-grey transition-colors font-medium">About</a>
                <a href="#portfolio" class="nav-link relative text-deep-espresso hover:text-olive-grey transition-colors font-medium">Portfolio</a>
                <a href="#writing" class="nav-link relative text-deep-espresso hover:text-olive-grey transition-colors font-medium">Writing</a>
                <a href="#capabilities" class="nav-link relative text-deep-espresso hover:text-olive-grey transition-colors font-medium">Capabilities</a>
                <a href="#testimonials" class="nav-link relative text-deep-espresso hover:text-olive-grey transition-colors font-medium">Testimonials</a>
            </div>
            <div class="hidden md:block">
                <a href="#contact" class="px-6 py-2 bg-soft-terracotta hover:bg-soft-terracotta/90 text-white rounded-button transition-colors font-medium">
                    Get in Touch
                </a>
            </div>
            <button id="mobile-menu-btn" class="md:hidden p-2 text-deep-espresso hover:text-olive-grey transition-colors" aria-label="Toggle menu">
                <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
            <?php else: ?>
            <a href="<?php echo $backLink; ?>" class="flex items-center gap-2 text-deep-espresso hover:text-soft-terracotta transition-colors font-medium">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                <?php echo $backText; ?>
            </a>
            <?php endif; ?>
        </div>
    </div>
</nav>

<?php if ($isHomepage): ?>
<div id="mobile-overlay" class="fixed inset-0 bg-deep-espresso/50 z-40 transition-opacity duration-300 md:hidden opacity-0 pointer-events-none"></div>
<div id="mobile-menu" class="fixed top-0 right-0 bottom-0 w-64 bg-warm-beige z-50 transform translate-x-full transition-transform duration-300 md:hidden">
    <div class="flex flex-col h-full">
        <div class="flex items-center justify-between p-4 border-b border-olive-grey/10">
            <span class="font-outfit text-lg font-bold text-deep-espresso">Menu</span>
            <button id="close-mobile-menu" class="p-2 text-deep-espresso hover:text-olive-grey transition-colors" aria-label="Close menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
        <div class="flex-1 py-6 px-4 space-y-4">
            <a href="#about" class="mobile-nav-link block w-full text-left px-4 py-3 rounded-button font-medium text-deep-espresso hover:bg-olive-grey/5 hover:text-olive-grey transition-colors">About</a>
            <a href="#portfolio" class="mobile-nav-link block w-full text-left px-4 py-3 rounded-button font-medium text-deep-espresso hover:bg-olive-grey/5 hover:text-olive-grey transition-colors">Portfolio</a>
            <a href="#writing" class="mobile-nav-link block w-full text-left px-4 py-3 rounded-button font-medium text-deep-espresso hover:bg-olive-grey/5 hover:text-olive-grey transition-colors">Writing</a>
            <a href="#capabilities" class="mobile-nav-link block w-full text-left px-4 py-3 rounded-button font-medium text-deep-espresso hover:bg-olive-grey/5 hover:text-olive-grey transition-colors">Capabilities</a>
            <a href="#testimonials" class="mobile-nav-link block w-full text-left px-4 py-3 rounded-button font-medium text-deep-espresso hover:bg-olive-grey/5 hover:text-olive-grey transition-colors">Testimonials</a>
        </div>
        <div class="p-4 border-t border-olive-grey/10">
            <a href="#contact" class="mobile-nav-link block w-full px-6 py-3 bg-soft-terracotta hover:bg-soft-terracotta/90 text-white rounded-button transition-colors font-medium text-center">
                Get in Touch
            </a>
        </div>
    </div>
</div>
<?php endif; ?>

<div class="h-16"></div>

<?php if ($isHomepage): ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileOverlay = document.getElementById('mobile-overlay');
    const closeMobileMenu = document.getElementById('close-mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');
    const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');

    function openMenu() {
        mobileMenu.classList.remove('translate-x-full');
        mobileOverlay.classList.remove('opacity-0', 'pointer-events-none');
        menuIcon.classList.add('hidden');
        closeIcon.classList.remove('hidden');
    }

    function closeMenu() {
        mobileMenu.classList.add('translate-x-full');
        mobileOverlay.classList.add('opacity-0', 'pointer-events-none');
        menuIcon.classList.remove('hidden');
        closeIcon.classList.add('hidden');
    }

    mobileMenuBtn.addEventListener('click', openMenu);
    closeMobileMenu.addEventListener('click', closeMenu);
    mobileOverlay.addEventListener('click', closeMenu);
    mobileNavLinks.forEach(link => link.addEventListener('click', closeMenu));
});
</script>
<?php endif; ?>
