<?php
$pageTitle = 'Moniify Creators';
$isCaseStudy = true;
$backLink = '/case-study/moniify.php';
$backText = 'Back to Moniify Case Study';
require_once '../includes/header.php';

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
<div class="min-h-screen bg-warm-beige">
    <?php require_once '../includes/navigation.php'; ?>

    <aside class="hidden xl:block fixed left-8 top-32 w-56 z-40">
        <div class="bg-light-beige rounded-lg border border-olive-grey/10 p-4 shadow-soft">
            <h3 class="font-outfit text-sm font-semibold text-deep-espresso mb-4 uppercase tracking-wide">Contents</h3>
            <nav class="relative">
                <div class="absolute left-0 top-0 bottom-0 w-0.5 bg-olive-grey/20"></div>
                <ul class="space-y-1 relative">
                    <?php foreach ($sections as $section): ?>
                    <li><a href="#<?php echo $section['id']; ?>" class="toc-link block w-full text-left pl-4 pr-2 py-2 text-sm transition-all duration-200 rounded text-deep-espresso/70 hover:text-deep-espresso"><?php echo $section['label']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </div>
    </aside>

    <main class="max-w-[1040px] mx-auto px-4 sm:px-6 lg:px-8 xl:pl-72 py-12 md:py-16">
        <div id="overview" class="bg-light-beige rounded-card shadow-soft p-8 md:p-12 mb-20 border border-olive-grey/10">
            <h1 class="font-outfit text-4xl md:text-5xl font-bold text-deep-espresso mb-6">Product: Moniify Creators</h1>
            <div class="bg-soft-terracotta/10 border-l-4 border-soft-terracotta rounded-r-lg p-4 mb-8">
                <div><span class="font-semibold text-deep-espresso">Role:</span> <span class="text-deep-espresso/90">Product Lead</span></div>
            </div>
            <p class="text-deep-espresso/90 leading-relaxed text-lg mb-6">I built Moniify Creators to redefine how business media works with creators: integrating credible finance creators directly into editorial output.</p>
            <p class="text-deep-espresso/90 leading-relaxed text-lg">Traditional finance outlets avoided creator content for its lack of editorial credibility, despite Zillennial audiences' love for its authenticity. The Creators product blended the two, offering younger audiences short-form finance content that was both engaging and trustworthy.</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-24">
            <?php foreach ($stats as $stat): ?>
            <div class="bg-soft-terracotta/5 border border-soft-terracotta/20 rounded-lg p-6 text-center">
                <div class="text-3xl font-bold text-soft-terracotta mb-2"><?php echo $stat['value']; ?></div>
                <div class="text-sm text-deep-espresso/70"><?php echo $stat['label']; ?></div>
            </div>
            <?php endforeach; ?>
        </div>

        <section id="problem" class="mb-24">
            <div class="inline-block bg-soft-terracotta/10 px-4 py-2 rounded-lg mb-6">
                <h2 class="font-outfit text-3xl font-bold text-deep-espresso">Problem / Opportunity</h2>
            </div>
            <p class="text-deep-espresso/90 leading-relaxed mb-6">Audience research showed that creators had become a vital source of finance and business content for Zillennials — appreciated for their accessibility, tone, and personality — yet audiences sometimes questioned the accuracy of the information they shared.</p>
            <p class="text-deep-espresso/90 leading-relaxed">Major business media outlets (both global and regional) either avoided creator partnerships entirely or treated creator content as peripheral: unverified, off-brand, or purely marketing-led.</p>
        </section>

        <section id="model" class="mb-24">
            <div class="inline-block bg-soft-terracotta/10 px-4 py-2 rounded-lg mb-6">
                <h2 class="font-outfit text-3xl font-bold text-deep-espresso">The Model</h2>
            </div>
            <p class="text-deep-espresso/90 leading-relaxed mb-6">Each creator we commissioned was a verified subject-matter expert. The approach was: creators as editorial contributors, not influencers. The creators were encouraged to share personal perspectives while following clear editorial guardrails: separating fact from opinion, citing sources, and adhering to Moniify's fact-checking standards.</p>
            <p class="text-deep-espresso/90 leading-relaxed">The model balanced creator authenticity with editorial rigor, delivering content that felt native to social platforms but also aligned with business media brand values.</p>
        </section>

        <section id="implementation" class="mb-24">
            <div class="inline-block bg-soft-terracotta/10 px-4 py-2 rounded-lg mb-6">
                <h2 class="font-outfit text-3xl font-bold text-deep-espresso">Implementation</h2>
            </div>
            <p class="text-deep-espresso/90 leading-relaxed mb-8">I built the end-to-end creator integration pipeline, from partnership strategy to operational systems and distribution:</p>
            <div class="space-y-6">
                <div>
                    <h3 class="font-semibold text-deep-espresso mb-2">Creator Partnerships</h3>
                    <p class="text-deep-espresso/90 leading-relaxed">Developed the selection framework and negotiated direct and agency-based partnerships across key markets.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-deep-espresso mb-2">Editorial Workflow</h3>
                    <p class="text-deep-espresso/90 leading-relaxed">Collaborated with the Executive Producer to establish editorial standards ensuring content met Moniify's tone, quality, and fact-checking requirements. Co-authored a creator toolkit codifying accessibility and technical standards.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-deep-espresso mb-2">Operations System</h3>
                    <p class="text-deep-espresso/90 leading-relaxed"><a href="/case-study/airtable-app.php" class="text-soft-terracotta hover:underline font-medium">Built a custom Airtable app</a> connecting creators, agencies, and the internal team — automating 10K+ handoffs annually across 700+ workflows and five agency pipelines.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-deep-espresso mb-2">Distribution & Launch</h3>
                    <p class="text-deep-espresso/90 leading-relaxed">Oversaw rollout across Moniify's website and social channels (Instagram, TikTok), working with tech, design, marketing, and PR teams on user journeys and launch promotion.</p>
                </div>
            </div>
        </section>

        <section id="outcome" class="mb-24">
            <div class="inline-block bg-soft-terracotta/10 px-4 py-2 rounded-lg mb-6">
                <h2 class="font-outfit text-3xl font-bold text-deep-espresso">Outcome</h2>
            </div>
            <p class="text-deep-espresso/90 leading-relaxed mb-6">Creator-led content became Moniify's top-performing format on Instagram and TikTok, consistently outperforming channel averages for views and engagement.</p>
            <p class="text-deep-espresso/90 leading-relaxed mb-8">The product demonstrated that creators could be editorially integrated into business media without compromising credibility or brand standards: a model that had not been successfully executed by competitors.</p>
            <div class="bg-olive-grey/5 border-l-4 border-olive-grey/30 rounded-r-lg p-6 mb-8">
                <h3 class="font-semibold text-deep-espresso mb-3">Constraints</h3>
                <p class="text-deep-espresso/90 leading-relaxed">Certain website discovery features were deprioritized due to engineering resource constraints. Paid amplification was paused shortly after launch due to an ad spend freeze. The product was discontinued following company-wide budget cuts and a strategic pivot.</p>
            </div>
            <div class="bg-soft-terracotta/5 border-l-4 border-soft-terracotta rounded-r-lg p-6">
                <h3 class="font-semibold text-deep-espresso mb-3">Key Validation</h3>
                <p class="text-deep-espresso/90 leading-relaxed">Despite its short lifespan, Moniify Creators proved that a creator-editorial hybrid model could deliver both audience engagement and editorial trust, addressing a gap that traditional business media had failed to solve.</p>
            </div>
        </section>

        <section class="mb-24">
            <div class="inline-block bg-soft-terracotta/10 px-4 py-2 rounded-lg mb-6">
                <h2 class="font-outfit text-3xl font-bold text-deep-espresso">Related Case Studies</h2>
            </div>
            <div class="grid md:grid-cols-2 gap-6">
                <a href="/case-study/moniify.php" class="bg-light-beige border border-olive-grey/10 rounded-lg p-6 hover:shadow-md transition-shadow">
                    <h3 class="font-semibold text-deep-espresso mb-2 text-lg hover:text-soft-terracotta transition-colors">Building 0→1 Products at Moniify</h3>
                    <p class="text-deep-espresso/70 text-sm">Product strategy and 0→1 building at a media startup</p>
                </a>
                <a href="/case-study/airtable-app.php" class="bg-light-beige border border-olive-grey/10 rounded-lg p-6 hover:shadow-md transition-shadow">
                    <h3 class="font-semibold text-deep-espresso mb-2 text-lg hover:text-soft-terracotta transition-colors">Custom Airtable App (Moniify)</h3>
                    <p class="text-deep-espresso/70 text-sm">Workflow automation for 10K+ handoffs</p>
                </a>
            </div>
        </section>
    </main>

    <?php require_once '../includes/footer.php'; ?>
</div>
