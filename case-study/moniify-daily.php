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
            <h1 class="font-outfit text-4xl md:text-5xl font-bold text-deep-espresso mb-6">Product: Moniify Daily</h1>
            <div class="bg-soft-terracotta/10 border-l-4 border-soft-terracotta rounded-r-lg p-4 mb-8">
                <div><span class="font-semibold text-deep-espresso">Role:</span> <span class="text-deep-espresso/90">Product Lead</span></div>
            </div>
            <p class="text-deep-espresso/90 leading-relaxed text-lg mb-6">Together with the Senior Executive Producer, I built Moniify Daily to address the coverage gap around crypto, AI, and emerging markets for Zillennial professionals in high-growth economies.</p>
            <p class="text-deep-espresso/90 leading-relaxed text-lg">Traditional business media covered these "new economy" topics intermittently and rarely from an Asian or youth-centric perspective. Moniify Daily was designed to combine credible business insight with the accessible tone and cultural relevance of modern digital media.</p>
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
            <p class="text-deep-espresso/90 leading-relaxed mb-6">Audience and competitive research revealed that "new economy" topics — tech, AI, crypto, and emerging markets — were under-covered by legacy outlets and rarely reflected an Asian or Zillennial perspective.</p>
            <p class="text-deep-espresso/90 leading-relaxed mb-6">Regional business content existed but was formal and focused narrowly on markets and macro. Global digital formats covering crypto or tech reflected Western perspectives and lacked relevance for audiences in Asia's high-growth economies.</p>
            <p class="text-deep-espresso/90 leading-relaxed">Audiences referenced <a href="https://www.morningbrew.com/" target="_blank" rel="noopener noreferrer" class="text-soft-terracotta hover:underline font-medium">Morning Brew</a> as a model for accessible tone and digestible structure but wanted a version that reflected their markets and context.</p>
        </section>

        <section id="solution" class="mb-24">
            <div class="inline-block bg-soft-terracotta/10 px-4 py-2 rounded-lg mb-6">
                <h2 class="font-outfit text-3xl font-bold text-deep-espresso">Solution</h2>
            </div>
            <p class="text-deep-espresso/90 leading-relaxed mb-6">Moniify Daily was designed as a weekday video product sitting between a daily news briefing and a morning catch-up with trusted experts.</p>
            <p class="text-deep-espresso/90 leading-relaxed mb-6">Each ~15-minute episode, filtered through a regional lens, focused on the new economy — translating complex shifts in tech, crypto, and markets into "what it means for me" takeaways.</p>
            <p class="text-deep-espresso/90 leading-relaxed">Hosted by experienced digital creators and subject-matter experts, the product paired professional production with personality, strong opinions, and debate — creating an accessible, credible experience built for daily engagement.</p>
        </section>

        <section id="implementation" class="mb-24">
            <div class="inline-block bg-soft-terracotta/10 px-4 py-2 rounded-lg mb-6">
                <h2 class="font-outfit text-3xl font-bold text-deep-espresso">Implementation</h2>
            </div>
            <p class="text-deep-espresso/90 leading-relaxed mb-8">I led the end-to-end product build together with the Senior Executive Producer, from format development to distribution planning:</p>
            <div class="space-y-6">
                <div>
                    <h3 class="font-semibold text-deep-espresso mb-2">Format Development & Testing</h3>
                    <p class="text-deep-espresso/90 leading-relaxed">Ran internal prototypes with the editorial team to refine pacing, tone, and segment structure. Post-launch, led A/B tests on retention, discovery, and click-through rates to optimize content flow.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-deep-espresso mb-2">Team & Talent</h3>
                    <p class="text-deep-espresso/90 leading-relaxed">With the Senior Executive Producer, assembled a cross-functional team of producers, editors, designers, and social leads. Co-led scouting and contracting of hosts combining subject-matter expertise with digital fluency.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-deep-espresso mb-2">Brand System</h3>
                    <p class="text-deep-espresso/90 leading-relaxed">Led development of the product's visual and sonic identity with design, extending Moniify's brand framework while giving Daily a distinct, repeatable presence.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-deep-espresso mb-2">Distribution & Launch</h3>
                    <p class="text-deep-espresso/90 leading-relaxed">Partnered with design and tech on website user flows for Daily content (also distributed via YouTube). Coordinated launch with marketing and PR, though paid promotion was halted before launch.</p>
                </div>
            </div>
        </section>

        <section id="outcome" class="mb-24">
            <div class="inline-block bg-soft-terracotta/10 px-4 py-2 rounded-lg mb-6">
                <h2 class="font-outfit text-3xl font-bold text-deep-espresso">Outcome</h2>
            </div>
            <p class="text-deep-espresso/90 leading-relaxed mb-8">Moniify Daily launched two weeks after the company's public debut. Early feedback on tone and content was positive, but the product was discontinued soon after launch amid company-wide budget cuts and a strategic pivot, before meaningful performance data could be collected.</p>
            <div class="bg-olive-grey/5 border-l-4 border-olive-grey/30 rounded-r-lg p-6 mb-8">
                <h3 class="font-semibold text-deep-espresso mb-3">Constraints</h3>
                <p class="text-deep-espresso/90 leading-relaxed">The product launched into a challenging environment: all paid advertising had been frozen before launch, limiting audience acquisition. Engineering resource constraints delayed key website features. The product's short lifespan — just weeks from launch to discontinuation — prevented any meaningful iteration and performance evaluation.</p>
            </div>
            <div class="bg-soft-terracotta/5 border-l-4 border-soft-terracotta rounded-r-lg p-6">
                <h3 class="font-semibold text-deep-espresso mb-3">Reflection</h3>
                <p class="text-deep-espresso/90 leading-relaxed">While Moniify Daily demonstrated early promise in addressing a coverage gap for Zillennial audiences in high-growth markets, the lack of distribution support and early discontinuation meant the product never had the opportunity to prove its viability. The experience highlighted the critical importance of sustained investment in validating new product formats.</p>
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
                <a href="/case-study/moniify-creators.php" class="bg-light-beige border border-olive-grey/10 rounded-lg p-6 hover:shadow-md transition-shadow">
                    <h3 class="font-semibold text-deep-espresso mb-2 text-lg hover:text-soft-terracotta transition-colors">Moniify Creators</h3>
                    <p class="text-deep-espresso/70 text-sm">Integrating credible creators into editorial output</p>
                </a>
                <a href="/case-study/richer.php" class="bg-light-beige border border-olive-grey/10 rounded-lg p-6 hover:shadow-md transition-shadow">
                    <h3 class="font-semibold text-deep-espresso mb-2 text-lg hover:text-soft-terracotta transition-colors">RicHer</h3>
                    <p class="text-deep-espresso/70 text-sm">Female-led finance and investing format</p>
                </a>
            </div>
        </section>
    </main>

    <?php require_once '../includes/footer.php'; ?>
</div>
