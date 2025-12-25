<?php
$pageTitle = 'RicHer';
$isCaseStudy = true;
$backLink = '/moniify';
$backText = 'Back to Moniify Case Study';
require_once 'includes/header.php';

$stats = [
    ['label' => 'Format Type', 'value' => 'Dual-Host Vodcast'],
    ['label' => 'Host Dynamic', 'value' => 'Advisor + Aspiring Investor'],
    ['label' => 'Development Cycles', 'value' => '3 Iterations'],
    ['label' => 'Target Audience', 'value' => 'Female Investors (Asia)']
];

$sections = [
    ['id' => 'overview', 'label' => 'Overview'],
    ['id' => 'problem', 'label' => 'Problem / Opportunity'],
    ['id' => 'solution', 'label' => 'Solution'],
    ['id' => 'development', 'label' => 'Product Development'],
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
        <h1 class="card-hero-title">Product: RicHer</h1>
        <div class="role-box">
            <p><span class="role-label">Role:</span> Product Lead</p>
        </div>
        <p class="text-lg mb-lg">I built RicHer to address the content gap in financial media for the rapidly expanding segment of female investors in Asia's high-growth markets.</p>
        <p class="text-lg">Despite growing momentum in women's investing, most content focused on inspiration over instruction: spotlighting successful women but rarely offering practical investing conversations or lived experiences. RicHer was designed as a peer-to-peer finance format by and for women, combining credible expertise with authentic, relatable storytelling.</p>
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
        <p class="mb-lg">Audience and market research identified a fast-growing but underserved segment: women actively building wealth and investing.</p>
        <p class="mb-lg">According to <a href="https://www.royalmint.com/aboutus/press-centre/the-royal-mint-sees-significant-uplift-in-female-investors-as-more-women-look-to-gold-and-silver-to-manage-investment-risk/" target="_blank" rel="noopener noreferrer" class="link-accent font-medium">The Royal Mint (2024)</a>, women investors grew from 8% to 26% between 2018-2023, with 27% planning to move savings into investments. <a href="https://www.ubs.com/global/en/wealthmanagement/who-we-serve/women-wealth/women-and-investing-in-mena-region/" target="_blank" rel="noopener noreferrer" class="link-accent font-medium">UBS's 2023 Women and Investing Report</a> found that 62% of women in MENA aim to become more active investors, with strong interest in sustainable investing (55%) and private markets (39%).</p>
        <p class="mb-lg">Despite this momentum, most content targeting women in finance focused on inspiration over instruction: spotlighting successful women or empowerment themes but rarely offering practical investing conversations or lived experiences.</p>
        <p>The global success of <a href="https://friendsthatinvest.com/" target="_blank" rel="noopener noreferrer" class="link-accent font-medium">Girls That Invest</a> validated this demand, though it remained largely Western-focused. Together, these insights pointed to a clear opportunity for a credible yet conversational platform offering practical, regionally relevant financial storytelling for women in Asia's fast-growing markets.</p>
    </section>

    <section id="solution" class="mb-3xl">
        <div class="section-header">
            <h2 class="section-title">Solution</h2>
        </div>
        <p class="mb-lg">RicHer was designed as a peer-to-peer vodcast conversation about money, investing, and entrepreneurship that felt both credible and human.</p>
        <p class="mb-lg">The format paired two hosts — Raji, a 31-year-old certified financial advisor and investor, and Mahreen, a 22-year-old aspiring investor and entrepreneur — creating an older/younger-sister dynamic that blended expertise with curiosity. Both were successful creators and represented RicHer's target audience.</p>
        <p>Each episode explored finance through a singular lens: demystifying the biases and realities women face in investing and financial independence. The concept also envisioned community-led growth, with highly engaged audiences connecting on platforms such as Slack or Discord to continue discussions and share experiences.</p>
    </section>

    <section id="development" class="mb-3xl">
        <div class="section-header">
            <h2 class="section-title">Product Development</h2>
        </div>
        <p class="mb-xl">The RicHer format was developed through multiple rounds of prototyping and testing, with each iteration informed by user feedback and format testing:</p>
        <div class="flex flex-col gap-lg">
            <div>
                <h3 class="font-semibold mb-sm">Iteration 1 — Solo Explainer Format</h3>
                <p>The initial concept featured Raji as a solo host breaking down finance topics. While clear and informative, user testing revealed it felt overly didactic, and the "by women, for women" perspective struggled to come through in this structure.</p>
            </div>
            <div>
                <h3 class="font-semibold mb-sm">Iteration 2 — Interview Format</h3>
                <p>The next version cast Mahreen as a host interviewing successful women from the region. This format struggled with the same issue found in existing content for women: inspirational but not actionable. Mahreen came across as an interviewer rather than a peer, and guests felt distant rather than relatable.</p>
            </div>
            <div>
                <h3 class="font-semibold mb-sm">Iteration 3 — Dual-Host Chat Format (Final)</h3>
                <p>The breakthrough came when we paired Raji and Mahreen together as co-hosts. The dynamic instantly worked: Mahreen's curiosity and Raji's expertise balanced each other perfectly. Their conversations felt authentic, informative, and approachable, capturing the tone and relatability the research called for.</p>
            </div>
        </div>
    </section>

    <section id="outcome" class="mb-3xl">
        <div class="section-header">
            <h2 class="section-title">Outcome</h2>
        </div>
        <p class="mb-xl">Early user testing confirmed the format's relatability and clarity, validating the dual-host chat approach.</p>
        <p class="mb-xl">RicHer was greenlit just before Moniify's public launch, with release planned for Q1 2025. The product was discontinued shortly after the leadership transition and strategic pivot that followed the company's launch, before any public release.</p>
        <div class="callout callout-accent">
            <h3 class="callout-title">Reflection</h3>
            <p>While RicHer never launched publicly, the iterative development process demonstrated how rapid prototyping and user feedback can fundamentally reshape product direction, moving from a didactic solo format to a peer-to-peer conversation that better served the target audience.</p>
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
            <a href="/moniify-creators" class="card-info">
                <h3 class="card-info-title">Moniify Creators</h3>
                <p class="card-info-text">Integrating credible creators into editorial output</p>
            </a>
            <a href="/moniify-daily" class="card-info">
                <h3 class="card-info-title">Moniify Daily</h3>
                <p class="card-info-text">Weekday video product for new economy topics</p>
            </a>
        </div>
    </section>
</main>

<?php require_once 'includes/footer.php'; ?>
