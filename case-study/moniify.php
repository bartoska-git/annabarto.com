<?php
$pageTitle = 'Building 0→1 Products at Moniify';
$isCaseStudy = true;
$backLink = '/#portfolio';
$backText = 'Back to Portfolio';
require_once '../includes/header.php';

$stats = [
    ['label' => 'Products Built', 'value' => '3'],
    ['label' => 'Products Launched', 'value' => '2'],
    ['label' => 'Team Members Hired', 'value' => '20+'],
    ['label' => 'Build Timeline', 'value' => '6 months']
];

$relatedCaseStudies = [
    ['title' => 'Custom Airtable App (Moniify)', 'description' => 'Workflow automation for 10K+ handoffs', 'slug' => 'airtable-app'],
    ['title' => 'Moniify Creators', 'description' => 'Integrating credible creators into editorial output', 'slug' => 'moniify-creators'],
    ['title' => 'Moniify Daily', 'description' => 'Daily video product covering the new economy', 'slug' => 'moniify-daily'],
    ['title' => 'RicHer', 'description' => 'Female-led finance and investing format', 'slug' => 'richer']
];

$sections = [
    ['id' => 'overview', 'label' => 'Overview'],
    ['id' => 'portfolio', 'label' => 'Product Portfolio'],
    ['id' => 'philosophy', 'label' => 'Product Philosophy'],
    ['id' => 'building', 'label' => 'Building 0→1'],
    ['id' => 'constraints', 'label' => 'Constraints'],
    ['id' => 'outcome', 'label' => 'Outcome'],
    ['id' => 'related', 'label' => 'Related Case Studies']
];
?>
<div class="min-h-screen bg-warm-beige">
    <?php require_once '../includes/navigation.php'; ?>

    <!-- Sticky Sidebar TOC - Desktop Only -->
    <aside class="hidden xl:block fixed left-8 top-32 w-56 z-40">
        <div class="bg-light-beige rounded-lg border border-olive-grey/10 p-4 shadow-soft">
            <h3 class="font-outfit text-sm font-semibold text-deep-espresso mb-4 uppercase tracking-wide">Contents</h3>
            <nav class="relative">
                <div class="absolute left-0 top-0 bottom-0 w-0.5 bg-olive-grey/20"></div>
                <ul class="space-y-1 relative">
                    <?php foreach ($sections as $section): ?>
                    <li>
                        <a href="#<?php echo $section['id']; ?>" class="toc-link block w-full text-left pl-4 pr-2 py-2 text-sm transition-all duration-200 rounded text-deep-espresso/70 hover:text-deep-espresso"><?php echo $section['label']; ?></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </div>
    </aside>

    <!-- Content -->
    <main class="max-w-[1040px] mx-auto px-4 sm:px-6 lg:px-8 xl:pl-72 py-12 md:py-16">
        <!-- Hero Section -->
        <div id="overview" class="bg-light-beige rounded-card shadow-soft p-8 md:p-12 mb-20 border border-olive-grey/10">
            <h1 class="font-outfit text-4xl md:text-5xl font-bold text-deep-espresso mb-6">Building 0&rarr;1 Products at Moniify</h1>
            <div class="bg-soft-terracotta/10 border-l-4 border-soft-terracotta rounded-r-lg p-4 mb-8">
                <div class="mb-2"><span class="font-semibold text-deep-espresso">Role:</span> <span class="text-deep-espresso/90">Product Lead</span></div>
                <div><span class="font-semibold text-deep-espresso">Focus:</span> <span class="text-deep-espresso/90">Product Strategy · Media Innovation · 0→1 Product Building</span></div>
            </div>
            <p class="text-deep-espresso/90 leading-relaxed text-lg">As one of four Product Leads at Moniify, a stealth-stage business media startup building "Bloomberg for the next generation", I developed three video-first products from zero, launched two, and built a 20+ hybrid product–editorial team.</p>
        </div>

        <!-- Quick Stats -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-24">
            <?php foreach ($stats as $stat): ?>
            <div class="bg-soft-terracotta/5 border border-soft-terracotta/20 rounded-lg p-6 text-center">
                <div class="text-3xl font-bold text-soft-terracotta mb-2"><?php echo $stat['value']; ?></div>
                <div class="text-sm text-deep-espresso/70"><?php echo $stat['label']; ?></div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- My Product Portfolio -->
        <section id="portfolio" class="mb-24">
            <div class="inline-block bg-soft-terracotta/10 px-4 py-2 rounded-lg mb-6">
                <h2 class="font-outfit text-3xl font-bold text-deep-espresso">My Product Portfolio</h2>
            </div>
            <p class="text-deep-espresso/90 leading-relaxed mb-8">Each of the three products I led at Moniify addressed a distinct problem or opportunity for our target audience: English-speaking Zillennial professionals, investors, and entrepreneurs, particularly in Asia's fast-growing markets.</p>
            <div class="space-y-8">
                <div class="bg-light-beige rounded-lg p-6 border border-olive-grey/10">
                    <div class="flex items-start justify-between mb-3">
                        <h3 class="font-outfit text-xl font-semibold text-deep-espresso">Moniify Creators</h3>
                        <span class="px-3 py-1 bg-emerald-100 text-emerald-800 rounded-full text-xs font-medium">Launched</span>
                    </div>
                    <p class="text-deep-espresso/90 leading-relaxed mb-4">A creator-led product built around the insight that, while creators had become a leading voice for Zillennials, finance media had failed to integrate them into their editorial output.</p>
                    <a href="/case-study/moniify-creators.php" class="text-soft-terracotta hover:text-soft-terracotta/80 transition-colors font-medium text-sm">Learn more about this product</a>
                </div>
                <div class="bg-light-beige rounded-lg p-6 border border-olive-grey/10">
                    <div class="flex items-start justify-between mb-3">
                        <h3 class="font-outfit text-xl font-semibold text-deep-espresso">Moniify Daily</h3>
                        <span class="px-3 py-1 bg-emerald-100 text-emerald-800 rounded-full text-xs font-medium">Launched</span>
                    </div>
                    <p class="text-deep-espresso/90 leading-relaxed mb-4">A daily video product based on the insight that "new money" topics such as AI, crypto, and emerging markets were under-served by traditional coverage.</p>
                    <a href="/case-study/moniify-daily.php" class="text-soft-terracotta hover:text-soft-terracotta/80 transition-colors font-medium text-sm">Learn more about this product</a>
                </div>
                <div class="bg-light-beige rounded-lg p-6 border border-olive-grey/10">
                    <div class="flex items-start justify-between mb-3">
                        <h3 class="font-outfit text-xl font-semibold text-deep-espresso">RicHer</h3>
                        <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-xs font-medium">Piloted</span>
                    </div>
                    <p class="text-deep-espresso/90 leading-relaxed mb-4">A female-led finance and investing format driven by the insight that, despite women representing a rapidly growing investor segment, financial media still lacked female perspectives on practical finance and investing.</p>
                    <a href="/case-study/richer.php" class="text-soft-terracotta hover:text-soft-terracotta/80 transition-colors font-medium text-sm">Learn more about this product</a>
                </div>
            </div>
        </section>

        <!-- The Product Philosophy -->
        <section id="philosophy" class="mb-24">
            <div class="inline-block bg-soft-terracotta/10 px-4 py-2 rounded-lg mb-6">
                <h2 class="font-outfit text-3xl font-bold text-deep-espresso">The Product Philosophy</h2>
            </div>
            <p class="text-deep-espresso/90 leading-relaxed mb-6">Unlike traditional media organizations, Moniify adopted a product-first model replacing siloed editorial desks with cross-functional teams that lived by the following principles:</p>
            <ul class="space-y-3 mb-6">
                <li class="flex items-start"><span class="text-soft-terracotta mr-3 mt-1">•</span><span class="text-deep-espresso/90">Build user-centric products our audience loves</span></li>
                <li class="flex items-start"><span class="text-soft-terracotta mr-3 mt-1">•</span><span class="text-deep-espresso/90">A product with no brand will fail</span></li>
                <li class="flex items-start"><span class="text-soft-terracotta mr-3 mt-1">•</span><span class="text-deep-espresso/90">Use insights and data to guide every decision</span></li>
                <li class="flex items-start"><span class="text-soft-terracotta mr-3 mt-1">•</span><span class="text-deep-espresso/90">Create a passionate community that champions our brand</span></li>
                <li class="flex items-start"><span class="text-soft-terracotta mr-3 mt-1">•</span><span class="text-deep-espresso/90">Stay agile, adapt quickly, and experiment continuously</span></li>
            </ul>
            <p class="text-deep-espresso/90 leading-relaxed mb-6">Each initiative functioned as its own product with a distinct audience strategy, brand identity, and growth metrics. Product Leads acted as "Collaborators in Chief", balancing editorial ambition, business priorities, and technical constraints.</p>
            <p class="text-deep-espresso/90 leading-relaxed">In practice, this philosophy came to life through early-stage product strategy formulation grounded in market, competitive, and user research, followed by format prototyping and initial post-launch testing and iteration.</p>
        </section>

        <!-- Building 0→1 -->
        <section id="building" class="mb-24">
            <div class="inline-block bg-soft-terracotta/10 px-4 py-2 rounded-lg mb-6">
                <h2 class="font-outfit text-3xl font-bold text-deep-espresso">Building 0&rarr;1</h2>
            </div>
            <h3 class="font-outfit text-xl font-semibold text-deep-espresso mb-4">Company Vision</h3>
            <p class="text-deep-espresso/90 leading-relaxed mb-4">Moniify's founding belief was:</p>
            <p class="text-lg font-medium text-deep-espresso italic mb-6 pl-6 border-l-4 border-soft-terracotta">Helping young people build personal wealth is a way of helping them achieve personal freedom.</p>
            <p class="text-deep-espresso/90 leading-relaxed mb-4">Topically, we focused on markets & macro, tech & AI, crypto & DeFi, and private equity. Our main target audience were English-speaking Zillennials in the following high-growth markets:</p>
            <ul class="grid grid-cols-2 md:grid-cols-3 gap-3 mb-6">
                <?php foreach (['UAE', 'KSA', 'Indonesia', 'India', 'Singapore'] as $region): ?>
                <li class="flex items-center text-deep-espresso/90"><span class="text-soft-terracotta mr-2">•</span><?php echo $region; ?></li>
                <?php endforeach; ?>
            </ul>
            <p class="text-deep-espresso/90 leading-relaxed mb-6">These young professionals were underrepresented but fast-growing demographic eager for credible, digital-first coverage of the industries shaping their financial futures. Additionally, we developed specific audience personas in collaboration with Fluency, an external research agency.</p>
            <h3 class="font-outfit text-xl font-semibold text-deep-espresso mb-4">Translating the Company Vision into Products</h3>
            <p class="text-deep-espresso/90 leading-relaxed mb-6">Reporting to the CPO, I translated the company vision into three tangible 0→1 products, delivering strategy, execution, and cross-functional alignment:</p>
            <ul class="space-y-3 mb-6">
                <li class="flex items-start"><span class="text-soft-terracotta mr-3 mt-1">•</span><span class="text-deep-espresso/90">Developed product strategies grounded in user, market, and competitive research</span></li>
                <li class="flex items-start"><span class="text-soft-terracotta mr-3 mt-1">•</span><span class="text-deep-espresso/90">Built and led three hybrid product–editorial teams (20+ team members)</span></li>
                <li class="flex items-start"><span class="text-soft-terracotta mr-3 mt-1">•</span><span class="text-deep-espresso/90">Coordinated with finance and legal on budgets, contracts, and compliance</span></li>
                <li class="flex items-start"><span class="text-soft-terracotta mr-3 mt-1">•</span><span class="text-deep-espresso/90">Created <a href="/case-study/airtable-app.php" class="text-soft-terracotta hover:text-soft-terracotta/80 transition-colors font-medium">Airtable-based workflow systems</a> for cross-team and external collaboration</span></li>
                <li class="flex items-start"><span class="text-soft-terracotta mr-3 mt-1">•</span><span class="text-deep-espresso/90">Worked on brand systems with design</span></li>
                <li class="flex items-start"><span class="text-soft-terracotta mr-3 mt-1">•</span><span class="text-deep-espresso/90">Partnered with engineering, design, and analytics on user journeys, data layers, and website discovery optimization and feature prioritization</span></li>
                <li class="flex items-start"><span class="text-soft-terracotta mr-3 mt-1">•</span><span class="text-deep-espresso/90">Drove format prototyping pre-launch and A/B testing post launch</span></li>
                <li class="flex items-start"><span class="text-soft-terracotta mr-3 mt-1">•</span><span class="text-deep-espresso/90">Designed launch frameworks together with marketing and PR</span></li>
            </ul>
        </section>

        <!-- Constraints -->
        <section id="constraints" class="mb-24">
            <div class="inline-block bg-soft-terracotta/10 px-4 py-2 rounded-lg mb-6">
                <h2 class="font-outfit text-3xl font-bold text-deep-espresso">Constraints</h2>
            </div>
            <div class="space-y-6">
                <div>
                    <h3 class="font-outfit text-lg font-semibold text-deep-espresso mb-3">Early-Stage Build</h3>
                    <p class="text-deep-espresso/90 leading-relaxed">As a newly formed startup, Moniify operated without established systems or processes. I was building foundational infrastructure and hiring team members in parallel with product development. As a result, timelines were compressed and operational complexity was high.</p>
                </div>
                <div>
                    <h3 class="font-outfit text-lg font-semibold text-deep-espresso mb-3">Engineering Capacity</h3>
                    <p class="text-deep-espresso/90 leading-relaxed">The engineering team was understaffed, with vendor turnover delaying key website features including search, shareability, chapters, and listen-to-video. A mobile app was postponed to a later phase.</p>
                </div>
                <div>
                    <h3 class="font-outfit text-lg font-semibold text-deep-espresso mb-3">Marketing & Distribution Freeze</h3>
                    <p class="text-deep-espresso/90 leading-relaxed">Paid media and advertising were frozen days after the company's public launch, severely limiting discoverability and audience growth for a completely new brand and newly released products.</p>
                </div>
                <div>
                    <h3 class="font-outfit text-lg font-semibold text-deep-espresso mb-3">Strategic Pivot</h3>
                    <p class="text-deep-espresso/90 leading-relaxed mb-4">Within weeks of launch, Moniify underwent a leadership transition, a shift in strategy and scale, and multiple rounds of layoffs that reduced the workforce by roughly 75%. Most product initiatives, including all of my products, were suspended during this pivot.</p>
                    <p class="text-deep-espresso/90 leading-relaxed">Because the suspension occurred so early in the product cycle, testing and optimization remained in early stages, and limited data was collected to inform iteration.</p>
                </div>
            </div>
        </section>

        <!-- Outcome -->
        <section id="outcome" class="mb-24">
            <div class="inline-block bg-soft-terracotta/10 px-4 py-2 rounded-lg mb-6">
                <h2 class="font-outfit text-3xl font-bold text-deep-espresso">Outcome</h2>
            </div>
            <p class="text-deep-espresso/90 leading-relaxed mb-4">In six months, I:</p>
            <ul class="space-y-3 mb-8">
                <li class="flex items-start"><span class="text-soft-terracotta mr-3 mt-1">•</span><span class="text-deep-espresso/90">Built three insight-led media products and launched two of them</span></li>
                <li class="flex items-start"><span class="text-soft-terracotta mr-3 mt-1">•</span><span class="text-deep-espresso/90">Hired and led a 20+ person cross-functional product–editorial team</span></li>
                <li class="flex items-start"><span class="text-soft-terracotta mr-3 mt-1">•</span><span class="text-deep-espresso/90">Created workflow systems that became the operational backbone for multiple products</span></li>
                <li class="flex items-start"><span class="text-soft-terracotta mr-3 mt-1">•</span><span class="text-deep-espresso/90">Generated early evidence supporting creator-led, regionally relevant, and women-led finance media products</span></li>
            </ul>
            <p class="text-deep-espresso/90 leading-relaxed mb-6">None of the products had the chance to fully mature: all were discontinued within weeks of Moniify's public launch amid a company-wide pivot, leadership change, and layoffs.</p>
            <p class="text-deep-espresso/90 leading-relaxed">Even so, the 0→1 phase signaled what a next-generation business media company could achieve by uniting product thinking with editorial rigor.</p>
        </section>

        <!-- Related Case Studies -->
        <section id="related">
            <div class="inline-block bg-soft-terracotta/10 px-4 py-2 rounded-lg mb-8">
                <h2 class="font-outfit text-2xl font-bold text-deep-espresso">Related Case Studies</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <?php foreach ($relatedCaseStudies as $study): ?>
                <a href="/case-study/<?php echo $study['slug']; ?>.php" class="group bg-light-beige rounded-lg p-6 border border-olive-grey/10 hover:border-soft-terracotta/30 transition-all">
                    <h3 class="font-outfit text-lg font-semibold text-deep-espresso mb-2 group-hover:text-soft-terracotta transition-colors"><?php echo htmlspecialchars($study['title']); ?></h3>
                    <p class="text-deep-espresso/70 text-sm"><?php echo htmlspecialchars($study['description']); ?></p>
                </a>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <?php require_once '../includes/footer.php'; ?>
</div>
