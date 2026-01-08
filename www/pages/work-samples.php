<?php
$pageTitle = 'Work Samples';
$isCaseStudy = true;
$backLink = '/';
$backText = 'Back to Home';
require_once '../includes/header.php';
require_once '../includes/navigation.php';

$categories = [
    ['id' => 'location-shoots', 'title' => 'Location Shoots', 'subtitle' => 'Branded stories', 'image' => 'location-shoots.jpg'],
    ['id' => 'studio-shoots-green-screen', 'title' => 'Studio Shoots - Green Screen', 'subtitle' => 'AMAs, Explainers', 'image' => 'studio-shoots-green-screen.jpg'],
    ['id' => 'studio-shoots-sets', 'title' => 'Studio Shoots - Sets', 'subtitle' => 'Interviews, tutorials', 'image' => 'studio-shoots-sets.jpg'],
    ['id' => 'remote-productions', 'title' => 'Remote Productions', 'subtitle' => 'Interviews, listicles, promos', 'image' => 'remote-productions2.jpg'],
    ['id' => 'podcasts', 'title' => 'Podcasts', 'subtitle' => '', 'image' => 'podcasts.jpg'],
    ['id' => 'animations', 'title' => 'Animation', 'subtitle' => 'Product explainers', 'image' => 'animations.jpg'],
    ['id' => 'event-videos', 'title' => 'Influencer Marketing Videos', 'subtitle' => '', 'image' => 'event-videos.jpg'],
    ['id' => 'feature-documentary', 'title' => 'Feature Documentary', 'subtitle' => '', 'image' => 'feature-documentary.jpg'],
    ['id' => 'passion-projects', 'title' => 'Passion Projects', 'subtitle' => '', 'image' => 'passion-projects.jpg'],
];
?>

<main class="container">
    <section class="section">
        <div class="text-center mb-2xl">
            <h1 class="section-title mb-md">Work Samples</h1>
            <p class="section-subtitle">Video production work from my time at Google and beyond.</p>
        </div>

        <div class="work-samples-grid">
            <?php foreach ($categories as $category): ?>
            <a href="/work-samples/<?php echo $category['id']; ?>" class="work-sample-card" style="background-image: url('/public/optimized/work-samples/<?php echo $category['image']; ?>')">
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
