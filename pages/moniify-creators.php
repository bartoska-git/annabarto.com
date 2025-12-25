<?php
$pageTitle = 'Moniify Creators';
$isCaseStudy = true;
$backLink = '/moniify';
$backText = 'Back to Moniify Case Study';
require_once 'includes/header.php';

$stats = [
    ['label' => 'Commissioned Creators', 'value' => '12'],
    ['label' => 'Assets/Month', 'value' => '240'],
    ['label' => 'Agency Pipelines', 'value' => '5'],
    ['label' => 'Social Performance', 'value' => 'Top']
];

$sections = [
    ['id' => 'overview', 'label' => 'Overview'],
    ['id' => 'problem', 'label' => 'Problem / Opportunity'],
    ['id' => 'model', 'label' => 'The Model'],
    ['id' => 'implementation', 'label' => 'Implementation'],
    ['id' => 'outcome', 'label' => 'Outcome']
];
?>
<?php require_once 'includes/navigation.php'; ?>

<aside class="toc">
    <div class="toc-inner">
        <h3 class="toc-title">Contents</h3>
        <nav>
            <ul class="toc-list">
                <?php foreach ($sections as $section): ?>
                <li><a href="#<?php echo $section['id']; ?>" class="toc-link"><?php echo $section['label']; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
</aside>

<main class="case-study-content">
    <div id="overview" class="card-hero">
        <h1 class="card-hero-title">Product: Moniify Creators</h1>
        <div class="role-box">
            <p><span class="role-label">Role:</span> Product Lead</p>
        </div>
        <p class="text-lg mb-lg">I built Moniify Creators to redefine how business media works with creators: integrating credible finance creators directly into editorial output.</p>
        <p class="text-lg">Traditional finance outlets avoided creator content for its lack of editorial credibility, despite Zillennial audiences' love for its authenticity. The Creators product blended the two, offering younger audiences short-form finance content that was both engaging and trustworthy.</p>
    </div>

    <div class="stats-grid">
        <?php foreach ($stats as $stat): ?>
        <div class="stat-card">
            <div class="stat-value"><?php echo $stat['value']; ?></div>
            <div class="stat-label"><?php echo $stat['label']; ?></div>
        </div>
        <?php endforeach; ?>
    </div>

    <section id="problem" class="mb-3xl">
        <div class="section-header">
            <h2 class="section-title">Problem / Opportunity</h2>
        </div>
        <p class="mb-lg">Audience research showed that creators had become a vital source of finance and business content for Zillennials — appreciated for their accessibility, tone, and personality — yet audiences sometimes questioned the accuracy of the information they shared.</p>
        <p>Major business media outlets (both global and regional) either avoided creator partnerships entirely or treated creator content as peripheral: unverified, off-brand, or purely marketing-led.</p>
    </section>

    <section id="model" class="mb-3xl">
        <div class="section-header">
            <h2 class="section-title">The Model</h2>
        </div>
        <p class="mb-lg">Each creator we commissioned was a verified subject-matter expert. The approach was: creators as editorial contributors, not influencers. The creators were encouraged to share personal perspectives while following clear editorial guardrails: separating fact from opinion, citing sources, and adhering to Moniify's fact-checking standards.</p>
        <p>The model balanced creator authenticity with editorial rigor, delivering content that felt native to social platforms but also aligned with business media brand values.</p>
    </section>

    <section id="implementation" class="mb-3xl">
        <div class="section-header">
            <h2 class="section-title">Implementation</h2>
        </div>
        <p class="mb-xl">I built the end-to-end creator integration pipeline, from partnership strategy to operational systems and distribution:</p>
        <div class="flex flex-col gap-lg">
            <div>
                <h3 class="font-semibold mb-sm">Creator Partnerships</h3>
                <p>Developed the selection framework and negotiated direct and agency-based partnerships across key markets.</p>
            </div>
            <div>
                <h3 class="font-semibold mb-sm">Editorial Workflow</h3>
                <p>Collaborated with the Executive Producer to establish editorial standards ensuring content met Moniify's tone, quality, and fact-checking requirements. Co-authored a creator toolkit codifying accessibility and technical standards.</p>
            </div>
            <div>
                <h3 class="font-semibold mb-sm">Operations System</h3>
                <p><a href="/airtable-app" class="link-accent font-medium">Built a custom Airtable app</a> connecting creators, agencies, and the internal team — automating 10K+ handoffs annually across 700+ workflows and five agency pipelines.</p>
            </div>
            <div>
                <h3 class="font-semibold mb-sm">Distribution & Launch</h3>
                <p>Oversaw rollout across Moniify's website and social channels (Instagram, TikTok), working with tech, design, marketing, and PR teams on user journeys and launch promotion.</p>
            </div>
        </div>
    </section>

    <section id="outcome" class="mb-3xl">
        <div class="section-header">
            <h2 class="section-title">Outcome</h2>
        </div>
        <p class="mb-lg">Creator-led content became Moniify's top-performing format on Instagram and TikTok, consistently outperforming channel averages for views and engagement.</p>
        <p class="mb-xl">The product demonstrated that creators could be editorially integrated into business media without compromising credibility or brand standards: a model that had not been successfully executed by competitors.</p>
        <div class="callout callout-muted mb-xl">
            <h3 class="callout-title">Constraints</h3>
            <p>Certain website discovery features were deprioritized due to engineering resource constraints. Paid amplification was paused shortly after launch due to an ad spend freeze. The product was discontinued following company-wide budget cuts and a strategic pivot.</p>
        </div>
        <div class="callout callout-accent">
            <h3 class="callout-title">Key Validation</h3>
            <p>Despite its short lifespan, Moniify Creators proved that a creator-editorial hybrid model could deliver both audience engagement and editorial trust, addressing a gap that traditional business media had failed to solve.</p>
        </div>
    </section>

    <section class="mb-3xl">
        <div class="section-header">
            <h2 class="section-title">Related Case Studies</h2>
        </div>
        <div class="grid grid-2">
            <a href="/moniify" class="card-info">
                <h3 class="card-info-title">Building 0→1 Products at Moniify</h3>
                <p class="card-info-text">Product strategy and 0→1 building at a media startup</p>
            </a>
            <a href="/airtable-app" class="card-info">
                <h3 class="card-info-title">Custom Airtable App (Moniify)</h3>
                <p class="card-info-text">Workflow automation for 10K+ handoffs</p>
            </a>
        </div>
    </section>
</main>

<?php require_once 'includes/footer.php'; ?>
