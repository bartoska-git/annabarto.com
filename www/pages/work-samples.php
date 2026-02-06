<?php
$pageTitle = 'Anna Barto · Production Portfolio';
$isCaseStudy = true;
$hideNavigation = true;
require_once '../includes/header.php';

$categories = [
    ['id' => 'location-shoots', 'title' => 'On Location · Branded Stories', 'subtitle' => '', 'image' => 'location-shoots.jpg'],
    ['id' => 'studio-shoots-sets', 'title' => 'Studio Shows & Formats', 'subtitle' => '', 'image' => 'studio-shows-6.jpg'],
    ['id' => 'studio-shoots-green-screen', 'title' => 'White Cyc & Green Screen', 'subtitle' => '', 'image' => 'white-cyc-2.png'],
    ['id' => 'event-videos', 'title' => 'Creator Collaborations', 'subtitle' => '', 'image' => 'event-videos.jpg'],
    ['id' => 'podcasts', 'title' => 'Vodcasts & Podcasts', 'subtitle' => '', 'image' => 'vodcasts2.png'],
    ['id' => 'animations', 'title' => 'Animation', 'subtitle' => '', 'image' => 'animation4.png'],
    ['id' => 'event-formats', 'title' => 'Event Formats', 'subtitle' => '', 'image' => 'event-3.png'],
    ['id' => 'feature-documentary', 'title' => 'Feature Documentary', 'subtitle' => '', 'image' => 'feature-documentary.jpg'],
    ['id' => 'passion-projects', 'title' => 'Passion Projects', 'subtitle' => '', 'image' => 'passion-projects-2.png'],
];
?>

<main class="container">
    <section class="section">
        <div class="text-center mb-2xl">
            <h1 class="section-title mb-md">Anna Barto · Production Portfolio</h1>
            <p class="section-subtitle">Selected production work from my time at Moniify, Google, and beyond.</p>
        </div>

        <div class="work-samples-grid">
            <?php foreach ($categories as $category): ?>
            <?php $bgPosition = isset($category['position']) ? $category['position'] : 'center'; ?>
            <a href="/production-portfolio/<?php echo $category['id']; ?>" class="work-sample-card" style="background-image: url('/public/optimized/work-samples/<?php echo $category['image']; ?>'); background-position: <?php echo $bgPosition; ?>">
                <div class="work-sample-overlay">
                    <h3 class="work-sample-title"><?php echo htmlspecialchars($category['title']); ?></h3>
                    <?php if ($category['subtitle']): ?>
                    <p class="work-sample-subtitle"><?php echo htmlspecialchars($category['subtitle']); ?></p>
                    <?php endif; ?>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </section>
</main>

<?php require_once '../includes/footer.php'; ?>
