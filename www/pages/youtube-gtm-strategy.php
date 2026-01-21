<?php
$pageTitle = 'YouTube Partner Program Market Expansion';
$isCaseStudy = true;
$backLink = '/#portfolio';
$backText = 'Back to Portfolio';
require_once '../includes/header.php';

$stats = [
    ['value' => '10', 'labelSecondary' => 'New Markets', 'label' => 'YPP Launched'],
    ['value' => '1M+', 'label' => 'Channels Monetized'],
    ['value' => '100M+', 'labelSecondary' => 'Weekly', 'label' => 'Monetizable Views'],
    ['value' => 'Regional', 'label' => 'Creator Economy']
];

$sections = [
    ['id' => 'overview', 'label' => 'Overview'],
    ['id' => 'problem', 'label' => 'Problem / Opportunity'],
    ['id' => 'objectives', 'label' => 'Objectives'],
    ['id' => 'strategy', 'label' => 'GTM Strategy & Execution'],
    ['id' => 'outcome', 'label' => 'Outcome'],
    ['id' => 'related', 'label' => 'Related Case Studies']
];

$relatedCaseStudies = [
    ['title' => 'Creator Crowdfunding Product Discovery (YouTube)', 'description' => 'Hypothesis-driven discovery combining SQL data mining with market research', 'slug' => 'creator-crowdfunding'],
    ['title' => 'Building 0→1 Products (Moniify)', 'description' => 'Product strategy and 0→1 building at a media startup', 'slug' => 'moniify'],
    ['title' => 'Moniify Creators', 'description' => 'Integrating credible creators into editorial output', 'slug' => 'moniify-creators']
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
        <h1 class="card-hero-title">YouTube Partner Program Market Expansion</h1>
        <div class="role-box">
            <p><span class="role-label">Role:</span> Go-to-Market Lead (Strategic Partner Manager, CEE)</p>
            <p><span class="role-label">Focus:</span> Market Expansion · Go-To-Market · Ecosystem Enablement</p>
        </div>
        <p class="text-lg">I led YouTube's Partner Program expansion across ten EMEA markets. The rollout enabled 1M+ channels to monetize, generated over 100M monetizable weekly views, and connected local creators, advertisers, and media partners. I owned the expansion from the initial market assessment to the GTM roll-out.</p>
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
        <p class="mb-lg">Since March 2013, advertisers in the Baltics, Bulgaria, and the Adriatics could run campaigns on YouTube. However, the YouTube Partner Program (YPP)—which allows creators and media companies to monetize their content—wasn't locally available. This was an untapped growth opportunity, as the 10 markets represented:</p>

        <div class="grid grid-2 mb-xl">
            <div class="callout callout-accent">
                <div class="text-3xl font-bold mb-sm" style="color: var(--soft-terracotta);">34M</div>
                <p class="text-sm">People</p>
            </div>
            <div class="callout callout-accent">
                <div class="text-3xl font-bold mb-sm" style="color: var(--soft-terracotta);">~1B</div>
                <p class="text-sm">Watch-time hours annually</p>
            </div>
        </div>

        <p><span class="font-semibold">The gap:</span> Creators couldn't earn locally, advertisers lacked locally relevant inventory, and community growth lagged behind markets where monetization was enabled.</p>
    </section>

    <section id="objectives" class="mb-3xl">
        <div class="section-header">
            <h2 class="section-title">Objectives</h2>
        </div>
        <p class="mb-lg">Launch YPP in 10 new markets (Adriatics (6), Baltics (3), and Bulgaria):</p>

        <ul class="bullet-list mb-lg">
            <li>Enable monetization for eligible creators</li>
            <li>Onboard off-platform IP owners (TV stations, production companies, labels, celebrities)</li>
            <li>Educate advertisers and agencies on YouTube-first creative and campaign planning</li>
            <li>Establish YouTube's local brand presence for creative entrepreneurship</li>
        </ul>

        <div>
            <h3 class="font-semibold mb-sm">Success Metrics</h3>
            <ul class="bullet-list">
                <li>Number of creators and partners onboarded and monetization enabled</li>
                <li>Number of monetizable weekly views across the ten markets</li>
                <li>Local press coverage and visibility of YouTube's regional presence</li>
            </ul>
        </div>
    </section>

    <section id="strategy" class="mb-3xl">
        <div class="section-header">
            <h2 class="section-title">GTM Strategy & Execution</h2>
        </div>
        <p class="mb-xl">I designed and led YouTube's regional go-to-market strategy—from market assessment and readiness planning to local launch initiatives—working cross-functionally with global, regional, and in-country teams across ten markets.</p>

        <div class="flex flex-col gap-xl">
            <div>
                <h3 class="text-xl font-semibold mb-md">1. Market Assessment & Prioritization</h3>
                <p class="mb-md">To determine rollout sequencing and resource allocation, I conducted a market readiness analysis across three lenses:</p>
                <ul class="bullet-list">
                    <li><span class="font-semibold">Creator & Channel Health:</span> Active channels, Tier 6+ channels (YouTube's channel segmentation), monetizable views, YoY growth</li>
                    <li><span class="font-semibold">Economic & Digital Maturity:</span> GDP per capita, internet penetration, CPM benchmarks</li>
                    <li><span class="font-semibold">Local Presence & Legal Readiness:</span> Google office & sales team presence, SRAV (sound recording & audiovisual) licensing readiness</li>
                </ul>
                <p class="mt-md">Based on this assessment, Serbia emerged as P0, with Bulgaria, Croatia, and Lithuania evaluated as strategically significant.</p>
            </div>

            <div>
                <h3 class="text-xl font-semibold mb-md">2. Market Enablement & Readiness</h3>
                <p class="mb-md">I coordinated cross-functionally with product, legal, localization, and support teams to ensure:</p>
                <ul class="bullet-list">
                    <li>SRAV contract readiness</li>
                    <li>Monetization enablement</li>
                    <li>Localized creator and advertiser resources</li>
                    <li>Market sequencing and launch coordination</li>
                </ul>
            </div>

            <div>
                <h3 class="text-xl font-semibold mb-md">3. Local Ecosystem Activation</h3>
                <p class="mb-md">I partnered with local marketing, PR, and sales teams to activate the ecosystem:</p>
                <ul class="bullet-list">
                    <li><span class="font-semibold">Creators & IP Holders:</span> Four Partner Launch Events (Belgrade · Sofia · Zagreb · Vilnius) focused on audience development, monetization, branded content, and copyright</li>
                    <li><span class="font-semibold">Press & Users:</span> Three press events (Belgrade · Sofia · Vilnius) + seven localized press releases highlighting local success stories</li>
                    <li><span class="font-semibold">Advertisers & Agencies:</span> Introduced YouTube ad formats and creative strategy; seeded creator–brand collaborations and local campaigns</li>
                </ul>
            </div>
        </div>

        <div class="callout callout-muted mt-xl">
            <h3 class="callout-title">Constraints</h3>
            <ul class="bullet-list">
                <li><span class="font-semibold">No dedicated teams:</span> Orchestrated via shared EMEA & Global teams across product, legal, and support</li>
                <li><span class="font-semibold">Fragmented markets:</span> Budget and resources distributed across highly varied market maturity levels</li>
                <li><span class="font-semibold">Compressed timeline:</span> Multi-country launch schedule required tight sequencing and prioritization</li>
            </ul>
        </div>
    </section>

    <section id="outcome" class="mb-3xl">
        <div class="section-header">
            <h2 class="section-title">Outcome</h2>
        </div>

        <div class="grid grid-2 mb-xl">
            <div class="callout callout-accent">
                <div class="text-2xl font-bold mb-sm" style="color: var(--soft-terracotta);">10 New YPP Markets</div>
                <p class="text-sm">Adriatics (6), Bulgaria, Baltics (3)</p>
            </div>
            <div class="callout callout-accent">
                <div class="text-2xl font-bold mb-sm" style="color: var(--soft-terracotta);">1M+ Channels</div>
                <p class="text-sm">Enabled for monetization</p>
            </div>
        </div>

        <div class="flex flex-col gap-lg">
            <div>
                <h3 class="font-semibold mb-sm">Ecosystem Foundation</h3>
                <p>The expansion established the foundation of YouTube's local creator economy across ten markets, connecting creators with advertisers and enabling sustainable content creation at scale.</p>
            </div>

            <div>
                <h3 class="font-semibold mb-sm">Monetizable Inventory</h3>
                <p>Generated over 100M monetizable weekly views, providing advertisers with locally relevant inventory and creators with revenue opportunities.</p>
            </div>

            <div>
                <h3 class="font-semibold mb-sm">Brand Presence</h3>
                <p>Established YouTube's presence as a platform for creative entrepreneurship through press coverage, launch events, and local partnerships, shifting perception from purely entertainment to economic opportunity.</p>
            </div>
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
