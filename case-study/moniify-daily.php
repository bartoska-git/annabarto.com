<?php
$pageTitle = 'Moniify Daily';
$isCaseStudy = true;
$backLink = '/case-study/moniify.php';
$backText = 'Back to Moniify Case Study';
require_once '../includes/header.php';

$stats = [
    ['label' => 'Content Length', 'value' => '~15 min'],
    ['label' => 'Publishing Cadence', 'value' => 'Weekdays'],
    ['label' => 'Focus Areas', 'value' => 'Tech & Crypto'],
    ['label' => 'Regional Lens', 'value' => 'Asia-first']
];

$sections = [
    ['id' => 'overview', 'label' => 'Overview'],
    ['id' => 'problem', 'label' => 'Problem / Opportunity'],
    ['id' => 'solution', 'label' => 'Solution'],
    ['id' => 'implementation', 'label' => 'Implementation'],
    ['id' => 'outcome', 'label' => 'Outcome']
];
?>
<?php require_once '../includes/navigation.php'; ?>

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
        <h1 class="card-hero-title">Product: Moniify Daily</h1>
        <div class="role-box">
            <p><span class="role-label">Role:</span> Product Lead</p>
        </div>
        <p class="text-lg mb-lg">Together with the Senior Executive Producer, I built Moniify Daily to address the coverage gap around crypto, AI, and emerging markets for Zillennial professionals in high-growth economies.</p>
        <p class="text-lg">Traditional business media covered these "new economy" topics intermittently and rarely from an Asian or youth-centric perspective. Moniify Daily was designed to combine credible business insight with the accessible tone and cultural relevance of modern digital media.</p>
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
        <p class="mb-lg">Audience and competitive research revealed that "new economy" topics — tech, AI, crypto, and emerging markets — were under-covered by legacy outlets and rarely reflected an Asian or Zillennial perspective.</p>
        <p class="mb-lg">Regional business content existed but was formal and focused narrowly on markets and macro. Global digital formats covering crypto or tech reflected Western perspectives and lacked relevance for audiences in Asia's high-growth economies.</p>
        <p>Audiences referenced <a href="https://www.morningbrew.com/" target="_blank" rel="noopener noreferrer" class="link-accent font-medium">Morning Brew</a> as a model for accessible tone and digestible structure but wanted a version that reflected their markets and context.</p>
    </section>

    <section id="solution" class="mb-3xl">
        <div class="section-header">
            <h2 class="section-title">Solution</h2>
        </div>
        <p class="mb-lg">Moniify Daily was designed as a weekday video product sitting between a daily news briefing and a morning catch-up with trusted experts.</p>
        <p class="mb-lg">Each ~15-minute episode, filtered through a regional lens, focused on the new economy — translating complex shifts in tech, crypto, and markets into "what it means for me" takeaways.</p>
        <p>Hosted by experienced digital creators and subject-matter experts, the product paired professional production with personality, strong opinions, and debate — creating an accessible, credible experience built for daily engagement.</p>
    </section>

    <section id="implementation" class="mb-3xl">
        <div class="section-header">
            <h2 class="section-title">Implementation</h2>
        </div>
        <p class="mb-xl">I led the end-to-end product build together with the Senior Executive Producer, from format development to distribution planning:</p>
        <div class="flex flex-col gap-lg">
            <div>
                <h3 class="font-semibold mb-sm">Format Development & Testing</h3>
                <p>Ran internal prototypes with the editorial team to refine pacing, tone, and segment structure. Post-launch, led A/B tests on retention, discovery, and click-through rates to optimize content flow.</p>
            </div>
            <div>
                <h3 class="font-semibold mb-sm">Team & Talent</h3>
                <p>With the Senior Executive Producer, assembled a cross-functional team of producers, editors, designers, and social leads. Co-led scouting and contracting of hosts combining subject-matter expertise with digital fluency.</p>
            </div>
            <div>
                <h3 class="font-semibold mb-sm">Brand System</h3>
                <p>Led development of the product's visual and sonic identity with design, extending Moniify's brand framework while giving Daily a distinct, repeatable presence.</p>
            </div>
            <div>
                <h3 class="font-semibold mb-sm">Distribution & Launch</h3>
                <p>Partnered with design and tech on website user flows for Daily content (also distributed via YouTube). Coordinated launch with marketing and PR, though paid promotion was halted before launch.</p>
            </div>
        </div>
    </section>

    <section id="outcome" class="mb-3xl">
        <div class="section-header">
            <h2 class="section-title">Outcome</h2>
        </div>
        <p class="mb-xl">Moniify Daily launched two weeks after the company's public debut. Early feedback on tone and content was positive, but the product was discontinued soon after launch amid company-wide budget cuts and a strategic pivot, before meaningful performance data could be collected.</p>
        <div class="callout callout-muted mb-xl">
            <h3 class="callout-title">Constraints</h3>
            <p>The product launched into a challenging environment: all paid advertising had been frozen before launch, limiting audience acquisition. Engineering resource constraints delayed key website features. The product's short lifespan — just weeks from launch to discontinuation — prevented any meaningful iteration and performance evaluation.</p>
        </div>
        <div class="callout callout-accent">
            <h3 class="callout-title">Reflection</h3>
            <p>While Moniify Daily demonstrated early promise in addressing a coverage gap for Zillennial audiences in high-growth markets, the lack of distribution support and early discontinuation meant the product never had the opportunity to prove its viability. The experience highlighted the critical importance of sustained investment in validating new product formats.</p>
        </div>
    </section>

    <section class="mb-3xl">
        <div class="section-header">
            <h2 class="section-title">Related Case Studies</h2>
        </div>
        <div class="grid grid-2">
            <a href="/case-study/moniify.php" class="card-info">
                <h3 class="card-info-title">Building 0→1 Products at Moniify</h3>
                <p class="card-info-text">Product strategy and 0→1 building at a media startup</p>
            </a>
            <a href="/case-study/moniify-creators.php" class="card-info">
                <h3 class="card-info-title">Moniify Creators</h3>
                <p class="card-info-text">Integrating credible creators into editorial output</p>
            </a>
            <a href="/case-study/richer.php" class="card-info">
                <h3 class="card-info-title">RicHer</h3>
                <p class="card-info-text">Female-led finance and investing format</p>
            </a>
        </div>
    </section>
</main>

<?php require_once '../includes/footer.php'; ?>
