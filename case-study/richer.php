<?php
$pageTitle = 'RicHer';
$isCaseStudy = true;
$backLink = '/case-study/moniify.php';
$backText = 'Back to Moniify Case Study';
require_once '../includes/header.php';

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
            <h1 class="font-outfit text-4xl md:text-5xl font-bold text-deep-espresso mb-6">Product: RicHer</h1>
            <div class="bg-soft-terracotta/10 border-l-4 border-soft-terracotta rounded-r-lg p-4 mb-8">
                <div><span class="font-semibold text-deep-espresso">Role:</span> <span class="text-deep-espresso/90">Product Lead</span></div>
            </div>
            <p class="text-deep-espresso/90 leading-relaxed text-lg mb-6">I built RicHer to address the content gap in financial media for the rapidly expanding segment of female investors in Asia's high-growth markets.</p>
            <p class="text-deep-espresso/90 leading-relaxed text-lg">Despite growing momentum in women's investing, most content focused on inspiration over instruction: spotlighting successful women but rarely offering practical investing conversations or lived experiences. RicHer was designed as a peer-to-peer finance format by and for women, combining credible expertise with authentic, relatable storytelling.</p>
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
            <p class="text-deep-espresso/90 leading-relaxed mb-6">Audience and market research identified a fast-growing but underserved segment: women actively building wealth and investing.</p>
            <p class="text-deep-espresso/90 leading-relaxed mb-6">According to <a href="https://www.royalmint.com/aboutus/press-centre/the-royal-mint-sees-significant-uplift-in-female-investors-as-more-women-look-to-gold-and-silver-to-manage-investment-risk/" target="_blank" rel="noopener noreferrer" class="text-soft-terracotta hover:underline font-medium">The Royal Mint (2024)</a>, women investors grew from 8% to 26% between 2018-2023, with 27% planning to move savings into investments. <a href="https://www.ubs.com/global/en/wealthmanagement/who-we-serve/women-wealth/women-and-investing-in-mena-region/" target="_blank" rel="noopener noreferrer" class="text-soft-terracotta hover:underline font-medium">UBS's 2023 Women and Investing Report</a> found that 62% of women in MENA aim to become more active investors, with strong interest in sustainable investing (55%) and private markets (39%).</p>
            <p class="text-deep-espresso/90 leading-relaxed mb-6">Despite this momentum, most content targeting women in finance focused on inspiration over instruction: spotlighting successful women or empowerment themes but rarely offering practical investing conversations or lived experiences.</p>
            <p class="text-deep-espresso/90 leading-relaxed">The global success of <a href="https://friendsthatinvest.com/" target="_blank" rel="noopener noreferrer" class="text-soft-terracotta hover:underline font-medium">Girls That Invest</a> validated this demand, though it remained largely Western-focused. Together, these insights pointed to a clear opportunity for a credible yet conversational platform offering practical, regionally relevant financial storytelling for women in Asia's fast-growing markets.</p>
        </section>

        <section id="solution" class="mb-24">
            <div class="inline-block bg-soft-terracotta/10 px-4 py-2 rounded-lg mb-6">
                <h2 class="font-outfit text-3xl font-bold text-deep-espresso">Solution</h2>
            </div>
            <p class="text-deep-espresso/90 leading-relaxed mb-6">RicHer was designed as a peer-to-peer vodcast conversation about money, investing, and entrepreneurship that felt both credible and human.</p>
            <p class="text-deep-espresso/90 leading-relaxed mb-6">The format paired two hosts — Raji, a 31-year-old certified financial advisor and investor, and Mahreen, a 22-year-old aspiring investor and entrepreneur — creating an older/younger-sister dynamic that blended expertise with curiosity. Both were successful creators and represented RicHer's target audience.</p>
            <p class="text-deep-espresso/90 leading-relaxed">Each episode explored finance through a singular lens: demystifying the biases and realities women face in investing and financial independence. The concept also envisioned community-led growth, with highly engaged audiences connecting on platforms such as Slack or Discord to continue discussions and share experiences.</p>
        </section>

        <section id="development" class="mb-24">
            <div class="inline-block bg-soft-terracotta/10 px-4 py-2 rounded-lg mb-6">
                <h2 class="font-outfit text-3xl font-bold text-deep-espresso">Product Development</h2>
            </div>
            <p class="text-deep-espresso/90 leading-relaxed mb-8">The RicHer format was developed through multiple rounds of prototyping and testing, with each iteration informed by user feedback and format testing:</p>
            <div class="space-y-6">
                <div>
                    <h3 class="font-semibold text-deep-espresso mb-2">Iteration 1 — Solo Explainer Format</h3>
                    <p class="text-deep-espresso/90 leading-relaxed">The initial concept featured Raji as a solo host breaking down finance topics. While clear and informative, user testing revealed it felt overly didactic, and the "by women, for women" perspective struggled to come through in this structure.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-deep-espresso mb-2">Iteration 2 — Interview Format</h3>
                    <p class="text-deep-espresso/90 leading-relaxed">The next version cast Mahreen as a host interviewing successful women from the region. This format struggled with the same issue found in existing content for women: inspirational but not actionable. Mahreen came across as an interviewer rather than a peer, and guests felt distant rather than relatable.</p>
                </div>
                <div>
                    <h3 class="font-semibold text-deep-espresso mb-2">Iteration 3 — Dual-Host Chat Format (Final)</h3>
                    <p class="text-deep-espresso/90 leading-relaxed">The breakthrough came when we paired Raji and Mahreen together as co-hosts. The dynamic instantly worked: Mahreen's curiosity and Raji's expertise balanced each other perfectly. Their conversations felt authentic, informative, and approachable, capturing the tone and relatability the research called for.</p>
                </div>
            </div>
        </section>

        <section id="outcome" class="mb-24">
            <div class="inline-block bg-soft-terracotta/10 px-4 py-2 rounded-lg mb-6">
                <h2 class="font-outfit text-3xl font-bold text-deep-espresso">Outcome</h2>
            </div>
            <p class="text-deep-espresso/90 leading-relaxed mb-8">Early user testing confirmed the format's relatability and clarity, validating the dual-host chat approach.</p>
            <p class="text-deep-espresso/90 leading-relaxed mb-8">RicHer was greenlit just before Moniify's public launch, with release planned for Q1 2025. The product was discontinued shortly after the leadership transition and strategic pivot that followed the company's launch, before any public release.</p>
            <div class="bg-soft-terracotta/5 border-l-4 border-soft-terracotta rounded-r-lg p-6">
                <h3 class="font-semibold text-deep-espresso mb-3">Reflection</h3>
                <p class="text-deep-espresso/90 leading-relaxed">While RicHer never launched publicly, the iterative development process demonstrated how rapid prototyping and user feedback can fundamentally reshape product direction, moving from a didactic solo format to a peer-to-peer conversation that better served the target audience.</p>
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
                <a href="/case-study/moniify-daily.php" class="bg-light-beige border border-olive-grey/10 rounded-lg p-6 hover:shadow-md transition-shadow">
                    <h3 class="font-semibold text-deep-espresso mb-2 text-lg hover:text-soft-terracotta transition-colors">Moniify Daily</h3>
                    <p class="text-deep-espresso/70 text-sm">Weekday video product for new economy topics</p>
                </a>
            </div>
        </section>
    </main>

    <?php require_once '../includes/footer.php'; ?>
</div>
