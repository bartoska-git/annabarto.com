<footer class="footer">
    <p class="footer-copyright">&copy; <?php echo date('Y'); ?> Anna Barto. All rights reserved.</p>
    <?php if (!isset($isCaseStudy) || !$isCaseStudy): ?>
    <div class="footer-links">
        <a href="#" class="footer-link">Privacy Policy</a>
        <a href="#" class="footer-link">Terms of Use</a>
    </div>
    <?php endif; ?>
</footer>
</body>
</html>
