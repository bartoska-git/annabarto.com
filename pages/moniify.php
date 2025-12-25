<?php
$pageTitle = 'Building 0→1 Products at Moniify';
$isCaseStudy = true;
$backLink = '/#portfolio';
$backText = 'Back to Portfolio';
require_once 'includes/header.php';

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
<?php require_once 'includes/navigation.php'; ?>

<aside class="toc">
    <div class="toc-inner">
        <h3 class="toc-title">Contents</h3>
        <nav>
            <ul class="toc-list">
                <?php foreach ($sections as $section): ?>
                <li>
                    <a href="#<?php echo $section['id']; ?>" class="toc-link"><?php echo $section['label']; ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
</aside>

<main class="case-study-content">
    <!-- Hero Section -->
    <div id="overview" class="card-hero">
        <h1 class="card-hero-title">Building 0&rarr;1 Products at Moniify</h1>
        <div class="role-box">
            <p><span class="role-label">Role:</span> Product Lead</p>
            <p><span class="role-label">Focus:</span> Product Strategy · Media Innovation · 0→1 Product Building</p>
        </div>
        <p class="text-lg">As one of four Product Leads at Moniify, a stealth-stage business media startup building "Bloomberg for the next generation", I developed three video-first products from zero, launched two, and built a 20+ hybrid product–editorial team.</p>
    </div>

    <!-- Quick Stats -->
    <div class="stats-grid">
        <?php foreach ($stats as $stat): ?>
        <div class="stat-card">
            <div class="stat-value"><?php echo $stat['value']; ?></div>
            <div class="stat-label"><?php echo $stat['label']; ?></div>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- My Product Portfolio -->
    <section id="portfolio" class="mb-3xl">
        <div class="section-header">
            <h2 class="section-title">My Product Portfolio</h2>
        </div>
        <p class="mb-xl">Each of the three products I led at Moniify addressed a distinct problem or opportunity for our target audience: English-speaking Zillennial professionals, investors, and entrepreneurs, particularly in Asia's fast-growing markets.</p>
        <div class="flex flex-col gap-xl">
            <div class="card-info">
                <div class="flex justify-between items-start mb-md">
                    <h3 class="card-info-title">Moniify Creators</h3>
                    <span class="tag tag-emerald">Launched</span>
                </div>
                <p class="mb-md">A creator-led product built around the insight that, while creators had become a leading voice for Zillennials, finance media had failed to integrate them into their editorial output.</p>
                <a href="/moniify-creators" class="link-accent font-medium text-sm">Learn more about this product</a>
            </div>
            <div class="card-info">
                <div class="flex justify-between items-start mb-md">
                    <h3 class="card-info-title">Moniify Daily</h3>
                    <span class="tag tag-emerald">Launched</span>
                </div>
                <p class="mb-md">A daily video product based on the insight that "new money" topics such as AI, crypto, and emerging markets were under-served by traditional coverage.</p>
                <a href="/moniify-daily" class="link-accent font-medium text-sm">Learn more about this product</a>
            </div>
            <div class="card-info">
                <div class="flex justify-between items-start mb-md">
                    <h3 class="card-info-title">RicHer</h3>
                    <span class="tag tag-blue">Piloted</span>
                </div>
                <p class="mb-md">A female-led finance and investing format driven by the insight that, despite women representing a rapidly growing investor segment, financial media still lacked female perspectives on practical finance and investing.</p>
                <a href="/richer" class="link-accent font-medium text-sm">Learn more about this product</a>
            </div>
        </div>
    </section>

    <!-- The Product Philosophy -->
    <section id="philosophy" class="mb-3xl">
        <div class="section-header">
            <h2 class="section-title">The Product Philosophy</h2>
        </div>
        <p class="mb-lg">Unlike traditional media organizations, Moniify adopted a product-first model replacing siloed editorial desks with cross-functional teams that lived by the following principles:</p>
        <ul class="bullet-list mb-lg">
            <li>Build user-centric products our audience loves</li>
            <li>A product with no brand will fail</li>
            <li>Use insights and data to guide every decision</li>
            <li>Create a passionate community that champions our brand</li>
            <li>Stay agile, adapt quickly, and experiment continuously</li>
        </ul>
        <p class="mb-lg">Each initiative functioned as its own product with a distinct audience strategy, brand identity, and growth metrics. Product Leads acted as "Collaborators in Chief", balancing editorial ambition, business priorities, and technical constraints.</p>
        <p>In practice, this philosophy came to life through early-stage product strategy formulation grounded in market, competitive, and user research, followed by format prototyping and initial post-launch testing and iteration.</p>
    </section>

    <!-- Building 0→1 -->
    <section id="building" class="mb-3xl">
        <div class="section-header">
            <h2 class="section-title">Building 0&rarr;1</h2>
        </div>
        <h3 class="text-xl font-semibold mb-md">Company Vision</h3>
        <p class="mb-md">Moniify's founding belief was:</p>
        <p class="blockquote mb-lg">Helping young people build personal wealth is a way of helping them achieve personal freedom.</p>
        <p class="mb-md">Topically, we focused on markets & macro, tech & AI, crypto & DeFi, and private equity. Our main target audience were English-speaking Zillennials in the following high-growth markets:</p>
        <ul class="bullet-list mb-lg">
            <?php foreach (['UAE', 'KSA', 'Indonesia', 'India', 'Singapore'] as $region): ?>
            <li><?php echo $region; ?></li>
            <?php endforeach; ?>
        </ul>
        <p class="mb-lg">These young professionals were underrepresented but fast-growing demographic eager for credible, digital-first coverage of the industries shaping their financial futures. Additionally, we developed specific audience personas in collaboration with Fluency, an external research agency.</p>
        <h3 class="text-xl font-semibold mb-md">Translating the Company Vision into Products</h3>
        <p class="mb-lg">Reporting to the CPO, I translated the company vision into three tangible 0→1 products, delivering strategy, execution, and cross-functional alignment:</p>
        <ul class="bullet-list">
            <li>Developed product strategies grounded in user, market, and competitive research</li>
            <li>Built and led three hybrid product–editorial teams (20+ team members)</li>
            <li>Coordinated with finance and legal on budgets, contracts, and compliance</li>
            <li>Created <a href="/airtable-app" class="link-accent font-medium">Airtable-based workflow systems</a> for cross-team and external collaboration</li>
            <li>Worked on brand systems with design</li>
            <li>Partnered with engineering, design, and analytics on user journeys, data layers, and website discovery optimization and feature prioritization</li>
            <li>Drove format prototyping pre-launch and A/B testing post launch</li>
            <li>Designed launch frameworks together with marketing and PR</li>
        </ul>
    </section>

    <!-- Constraints -->
    <section id="constraints" class="mb-3xl">
        <div class="section-header">
            <h2 class="section-title">Constraints</h2>
        </div>
        <div class="flex flex-col gap-lg">
            <div>
                <h3 class="text-lg font-semibold mb-md">Early-Stage Build</h3>
                <p>As a newly formed startup, Moniify operated without established systems or processes. I was building foundational infrastructure and hiring team members in parallel with product development. As a result, timelines were compressed and operational complexity was high.</p>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-md">Engineering Capacity</h3>
                <p>The engineering team was understaffed, with vendor turnover delaying key website features including search, shareability, chapters, and listen-to-video. A mobile app was postponed to a later phase.</p>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-md">Marketing & Distribution Freeze</h3>
                <p>Paid media and advertising were frozen days after the company's public launch, severely limiting discoverability and audience growth for a completely new brand and newly released products.</p>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-md">Strategic Pivot</h3>
                <p class="mb-md">Within weeks of launch, Moniify underwent a leadership transition, a shift in strategy and scale, and multiple rounds of layoffs that reduced the workforce by roughly 75%. Most product initiatives, including all of my products, were suspended during this pivot.</p>
                <p>Because the suspension occurred so early in the product cycle, testing and optimization remained in early stages, and limited data was collected to inform iteration.</p>
            </div>
        </div>
    </section>

    <!-- Outcome -->
    <section id="outcome" class="mb-3xl">
        <div class="section-header">
            <h2 class="section-title">Outcome</h2>
        </div>
        <p class="mb-md">In six months, I:</p>
        <ul class="bullet-list mb-xl">
            <li>Built three insight-led media products and launched two of them</li>
            <li>Hired and led a 20+ person cross-functional product–editorial team</li>
            <li>Created workflow systems that became the operational backbone for multiple products</li>
            <li>Generated early evidence supporting creator-led, regionally relevant, and women-led finance media products</li>
        </ul>
        <p class="mb-lg">None of the products had the chance to fully mature: all were discontinued within weeks of Moniify's public launch amid a company-wide pivot, leadership change, and layoffs.</p>
        <p>Even so, the 0→1 phase signaled what a next-generation business media company could achieve by uniting product thinking with editorial rigor.</p>
    </section>

    <!-- Related Case Studies -->
    <section id="related">
        <div class="section-header">
            <h2 class="section-title">Related Case Studies</h2>
        </div>
        <div class="grid grid-2">
            <?php foreach ($relatedCaseStudies as $study): ?>
            <a href="/<?php echo $study['slug']; ?>" class="card-info">
                <h3 class="card-info-title"><?php echo htmlspecialchars($study['title']); ?></h3>
                <p class="card-info-text"><?php echo htmlspecialchars($study['description']); ?></p>
            </a>
            <?php endforeach; ?>
        </div>
    </section>
</main>

<?php require_once 'includes/footer.php'; ?>
