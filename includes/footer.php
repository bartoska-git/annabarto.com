<footer class="py-8 border-t border-olive-grey/10 <?php echo isset($isCaseStudy) && $isCaseStudy ? 'mt-16' : ''; ?>">
    <div class="<?php echo isset($isCaseStudy) && $isCaseStudy ? 'max-w-7xl mx-auto px-4 sm:px-6 lg:px-8' : ''; ?>">
        <div class="text-center">
            <p class="text-olive-grey text-sm">
                &copy; <?php echo date('Y'); ?> Anna Barto. All rights reserved.
            </p>
            <?php if (!isset($isCaseStudy) || !$isCaseStudy): ?>
            <div class="flex justify-center gap-6 mt-4">
                <a href="#" class="text-olive-grey hover:text-soft-terracotta text-sm">Privacy Policy</a>
                <a href="#" class="text-olive-grey hover:text-soft-terracotta text-sm">Terms of Use</a>
            </div>
            <?php endif; ?>
        </div>
    </div>
</footer>
</body>
</html>
