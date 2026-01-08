<?php
$pageTitle = 'Creator Crowdfunding Product Discovery (YouTube)';
$isCaseStudy = true;
$backLink = '/#portfolio';
$backText = 'Back to Portfolio';
require_once '../includes/header.php';

$stats = [
    ['value' => '0→1', 'label' => 'Strategic Discovery'],
    ['value' => '~50', 'labelSecondary' => 'Crowdfunding Platforms', 'label' => 'Analyzed'],
    ['value' => 'Global', 'label' => 'Crowdfunding Insights'],
    ['value' => '22', 'labelSecondary' => 'Languages', 'label' => 'Internal Playbooks']
];

$sections = [
    ['id' => 'overview', 'label' => 'Overview'],
    ['id' => 'problem', 'label' => 'Problem / Opportunity'],
    ['id' => 'discovery', 'label' => 'Product Discovery'],
    ['id' => 'findings', 'label' => 'Key Findings'],
    ['id' => 'impact', 'label' => 'Impact'],
    ['id' => 'related', 'label' => 'Related Case Studies']
];

$relatedCaseStudies = [
    ['title' => 'Building 0→1 Products (Moniify)', 'description' => 'Product strategy and 0→1 building at a media startup', 'slug' => 'moniify'],
    ['title' => 'Moniify Creators', 'description' => 'Integrating credible creators into editorial output', 'slug' => 'moniify-creators'],
    ['title' => 'Developer Audience Insights Study (Google)', 'description' => 'Research-driven strategy that doubled reach', 'slug' => 'developer-insights']
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
        <h1 class="card-hero-title">Creator Crowdfunding Product Discovery (YouTube)</h1>
        <div class="role-box">
            <p><span class="role-label">Role:</span> Product Research Lead (Strategic Partner Manager, CEE)</p>
            <p><span class="role-label">Focus:</span> Creator Monetization · Product Discovery · Playbooks & Tooling</p>
        </div>
        <p class="text-lg">In 2016, I led a hypothesis-driven discovery on creator crowdfunding at YouTube, combining SQL data mining with market and qualitative research. The work revealed fast-growing but fragmented adoption across regions and funding models: creators valued crowdfunding but lacked guidance and struggled to integrate YouTube into campaigns. I built an adoption dashboard, authored internal playbooks (22 languages), and co-designed a Creator Academy course (20 languages). The findings informed YouTube's approach to localized fan funding and later features such as Channel Memberships.</p>
    </div>

    <div class="stats-grid">
        <?php foreach ($stats as $stat): ?>
        <div class="stat-card">
            <div class="stat-top">
                <div class="stat-value"><?php echo $stat['value']; ?></div>
                <?php if (isset($stat['labelSecondary'])): ?>
                <div class="stat-label-secondary"><?php echo $stat['labelSecondary']; ?></div>
                <?php endif; ?>
            </div>
            <div class="stat-label"><?php echo $stat['label']; ?></div>
        </div>
        <?php endforeach; ?>
    </div>

    <section id="problem" class="mb-3xl">
        <div class="section-header">
            <h2 class="section-title">Problem / Opportunity</h2>
        </div>
        <p class="mb-lg">In 2016, YouTube monetization was ad-centric and largely outside creator control. Crowdfunding was emerging as a promising revenue stream for creators seeking to diversify beyond ads, but YouTube's limited pilots—Tip Jar and Gaming Sponsorships—were narrow in scope and geography.</p>

        <p class="mb-lg">Some creators began organically linking off-platform crowdfunding campaigns to YouTube using info cards and in-video CTAs, revealing both interest and friction. Meanwhile, market research signaled rapid growth:</p>

        <div class="grid grid-2 mb-xl">
            <div class="callout callout-accent">
                <div class="text-3xl font-bold mb-sm" style="color: var(--soft-terracotta);">30%</div>
                <p class="text-sm">Predicted CAGR 2016-2020 (Global Crowdfunding Market)</p>
            </div>
            <div class="callout callout-accent">
                <div class="text-3xl font-bold mb-sm" style="color: var(--soft-terracotta);">1000%</div>
                <p class="text-sm">Increase in funds raised by Indiegogo over 2 years (Indiegogo)</p>
            </div>
        </div>

        <p><span class="font-semibold">The gap:</span> YouTube lacked visibility into third-party crowdfunding adoption, model fit, and creator pain points—limiting its ability to offer guidance or build native solutions.</p>
    </section>

    <section id="discovery" class="mb-3xl">
        <div class="section-header">
            <h2 class="section-title">Product Discovery</h2>
        </div>
        <p class="mb-xl">I structured this as a hypothesis-driven discovery, combining quantitative and qualitative research to understand creator behavior, identify best practices, and outline product directions.</p>

        <div class="flex flex-col gap-xl">
            <div>
                <h3 class="text-xl font-semibold mb-md">Hypotheses</h3>
                <ul class="bullet-list">
                    <li><span class="font-semibold">H1:</span> Crowdfunding is not yet widely used by YouTube creators, except for Patreon</li>
                    <li><span class="font-semibold">H2:</span> Platform-specific designs make it difficult for YouTube to offer neutral guidance</li>
                    <li><span class="font-semibold">H3:</span> Limited adoption stems from lack of knowledge and disjointed workflows</li>
                </ul>
            </div>

            <div>
                <h3 class="text-xl font-semibold mb-md">Data Collection</h3>

                <div class="flex flex-col gap-lg">
                    <div>
                        <h4 class="font-semibold mb-sm">Internal Data Analysis (SQL)</h4>
                        <p>Since YouTube lacked direct tracking for external crowdfunding, I built a proxy dataset by querying internal tables to identify channels linking to ~50 approved platforms. I segmented by country, vertical, and tier, and ran QoQ/YoY trend analyses to quantify adoption velocity.</p>
                    </div>

                    <div>
                        <h4 class="font-semibold mb-sm">Market Landscape Analysis</h4>
                        <p>I analyzed all ~50 approved crowdfunding platforms, mapping regional focus, language support, funding models, and creator fit. I also benchmarked metrics like funds raised, success rates, and monthly visits.</p>
                    </div>

                    <div>
                        <h4 class="font-semibold mb-sm">Best Practices & Friction Points</h4>
                        <p>I analyzed campaign best practices and mapped creator friction points through existing research and interviews with creators and partner managers.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="findings" class="mb-3xl">
        <div class="section-header">
            <h2 class="section-title">Key Findings</h2>
        </div>

        <div class="flex flex-col gap-lg">
            <div>
                <h3 class="text-xl font-semibold mb-sm">H1: Partially Rejected</h3>
                <p>While Patreon was popular among English-speaking creators, adoption was highly fragmented and localized. Tipeee dominated in France, Makuake in Japan, Catarse in Brazil. Crowdfunding grew rapidly (2-4× YoY) across tiers and markets, except where local options were scarce (Russia, MENA).</p>
            </div>

            <div>
                <h3 class="text-xl font-semibold mb-sm">H2: Rejected</h3>
                <p>Regardless of platform, successful campaigns centered on community, clarity of purpose, and meaningful rewards. Common patterns: promo videos, tiered rewards, clear promotional strategies on and off YouTube.</p>
            </div>

            <div>
                <h3 class="text-xl font-semibold mb-sm">H3: Supported</h3>
                <p>Creators valued crowdfunding and wanted to diversify beyond ads. However, many didn't know where to start or struggled with campaign setup, promotion, and fulfillment (especially physical rewards).</p>
            </div>
        </div>
    </section>

    <section id="impact" class="mb-3xl">
        <div class="section-header">
            <h2 class="section-title">Impact</h2>
        </div>

        <div class="flex flex-col gap-lg">
            <div>
                <h3 class="font-semibold mb-sm">Adoption Dashboard</h3>
                <p>I built an internal tool for partnerships and research teams to track crowdfunding adoption by country, vertical, tier, and platform. The dashboard became essential for prioritizing creator outreach and conducting follow-up research.</p>
            </div>

            <div>
                <h3 class="font-semibold mb-sm">Multilingual Education & Playbooks</h3>
                <p class="mb-md">I transformed insights into scalable resources:</p>
                <ul class="bullet-list">
                    <li><span class="font-semibold">Creator-facing:</span> Co-designed a Crowdfunding course for YouTube Creator Academy (20 languages)</li>
                    <li><span class="font-semibold">Team-facing:</span> Authored internal playbooks and global partnerships toolkits (22 languages) for product and partnerships teams</li>
                </ul>
            </div>

            <div>
                <h3 class="font-semibold mb-sm">Product Strategy Impact</h3>
                <p class="mb-md">The research repositioned crowdfunding as a legitimate, creator-controlled revenue stream within YouTube's monetization strategy. I recommended that future native solutions should:</p>
                <ul class="bullet-list mb-md">
                    <li>Support multiple crowdfunding types (recurring, one-off, charity)</li>
                    <li>Include lifecycle support from pre-campaign to fulfillment</li>
                    <li>Integrate tiers, rewards, ticketing, and merch</li>
                </ul>
                <p>These insights contributed to the product thinking behind later features, notably the evolution of Sponsorships into Channel Memberships.</p>
            </div>
        </div>

        <div class="callout callout-muted mt-xl">
            <h3 class="callout-title">Constraints</h3>
            <ul class="bullet-list">
                <li><span class="font-semibold">Limited analytical support:</span> In the absence of dedicated analytical support and any direct off-platform tracking, I learned SQL and built proxy datasets using creator links to third-party platforms</li>
                <li><span class="font-semibold">Platform neutrality:</span> YouTube couldn't officially endorse specific platforms, requiring all materials to remain vendor-agnostic while still offering actionable guidance</li>
                <li><span class="font-semibold">Emerging space:</span> Crowdfunding was relatively new to many stakeholders, requiring extensive education and narrative-building to gain buy-in</li>
            </ul>
        </div>
    </section>

    <section id="related" class="mb-3xl">
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

<?php require_once '../includes/footer.php'; ?>
