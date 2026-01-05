<?php
$pageTitle = 'AI Dubbing Experiment (Google)';
$isCaseStudy = true;
$backLink = '/#portfolio';
$backText = 'Back to Portfolio';
require_once '../includes/header.php';

$stats = [
    ['value' => '3×', 'labelSecondary' => 'vs Subtitles', 'label' => 'Adoption Increase'],
    ['value' => '7', 'labelSecondary' => 'Languages', 'label' => 'Tested'],
    ['value' => '70%', 'labelSecondary' => 'vs Human Dubbing', 'label' => 'Cost Efficiency'],
    ['value' => '2×', 'labelSecondary' => 'vs Human Dubbing', 'label' => 'Speed Improvement']
];

$sections = [
    ['id' => 'overview', 'label' => 'Overview'],
    ['id' => 'problem', 'label' => 'Problem / Opportunity'],
    ['id' => 'experiment', 'label' => 'The Experiment'],
    ['id' => 'implementation', 'label' => 'Implementation'],
    ['id' => 'results', 'label' => 'Results & Impact'],
    ['id' => 'related', 'label' => 'Related Case Studies']
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
        <h1 class="card-hero-title">AI Dubbing Experiment (Google)</h1>
        <div class="role-box">
            <p><span class="role-label">Role:</span> Experiment Lead (Senior Producer, Google Developer Media Lab)</p>
            <p><span class="role-label">Focus:</span> AI Experimentation · Accessibility · User Adoption</p>
        </div>
        <p class="text-lg">I led Google's pilot testing whether AI-generated multilingual audio could make developer videos more accessible than subtitles. The experiment validated that developers valued convenience over perfection: AI dubbing achieved 3× higher adoption than subtitles, expanded reach across key international markets, and reduced production time by 50% compared to human dubbing.</p>
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
        <p class="mb-lg">Web developers and SEOs worldwide rely on Google Search's developer videos for explanations, best practices, and updates.</p>

        <div class="blockquote mb-lg">
            "53.5% of developers prefer video tutorials over any other learning resource."
            <br>
            <cite class="text-sm text-muted not-italic">
                — <a href="https://www.slashdata.co/research/developer-program-benchmarking" target="_blank" rel="noopener noreferrer" class="link-accent font-medium">SlashData's Q1 2025 Developer Program Benchmarking</a>
            </cite>
        </div>

        <p class="mb-lg">Yet while Google's developer audience is global, videos remained largely English-only—limiting accessibility and engagement outside English-speaking markets.</p>

        <p class="mb-lg">Subtitles were the default localization method due to low cost and fast turnaround, but were used in only ~8% of total plays. Human dubbing offered a more natural viewing experience but was too slow and expensive to scale: the localization workflow typically took 7–10 business days per video and required voice casting, coordination, and manual audio recording.</p>

        <p class="mb-lg"><a href="https://www.youtube.com/watch?v=S-iIV5Oo0n0" target="_blank" rel="noopener noreferrer" class="link-accent font-medium">Google's Universal Translator (UT)</a>—an experimental system combining translation, voice cloning, and lip-sync modeling—promised to reduce turnaround time and cost.</p>

        <p class="mb-lg">However, critical questions remained:</p>

        <ul class="bullet-list">
            <li><span class="font-semibold">Quality Threshold:</span> Would AI-generated audio meet the quality bar for technical developer content?</li>
            <li><span class="font-semibold">User Adoption:</span> Would developers choose AI-dubbed tracks over subtitles—or avoid them entirely?</li>
            <li><span class="font-semibold">Discoverability:</span> Could we drive awareness when YouTube's multi-language audio feature had no built-in notifications?</li>
        </ul>
    </section>

    <section id="experiment" class="mb-3xl">
        <div class="section-header">
            <h2 class="section-title">The Experiment</h2>
        </div>
        <p class="mb-lg">When Google's Universal Translator team invited internal teams to test its AI-dubbing technology, I proposed piloting it with Google Search developer videos. The Search DevRel team's global audience, video-first strategy, and regional growth priorities made it an ideal test case.</p>

        <p>We ran the pilot in seven languages—Spanish, Portuguese, Hindi, Indonesian, Chinese, Japanese, and French—chosen based on the overlap between UT's supported languages and Search's regional priorities.</p>
    </section>

    <section id="implementation" class="mb-3xl">
        <div class="section-header">
            <h2 class="section-title">Implementation</h2>
        </div>
        <p class="mb-xl">I coordinated across multiple stakeholders to design and execute the experiment:</p>

        <div class="flex flex-col gap-lg">
            <div>
                <h3 class="font-semibold mb-sm">Cross-Functional Coordination</h3>
                <p>Aligned Search DevRel, video production, Google's Localization team, UT team, and social/content management teams on experiment goals, quality standards, and rollout timeline.</p>
            </div>

            <div>
                <h3 class="font-semibold mb-sm">Discovery Strategy</h3>
                <p class="mb-md">Early user interviews revealed that many viewers didn't know additional language tracks existed. I designed a multi-channel awareness campaign including:</p>
                <ul class="bullet-list">
                    <li>A promo video explaining the experiment</li>
                    <li>Localized social posts across regional Google accounts</li>
                    <li>Pinned YouTube comments announcing the multilingual versions</li>
                </ul>
            </div>

            <div>
                <h3 class="font-semibold mb-sm">Measurement Framework</h3>
                <p>Tracked regional adoption rates, audience retention, and viewership diversification. Benchmarked results against subtitled videos and other AI-dubbing pilots without discovery campaigns. Set up feedback forms and monitored user comments to collect qualitative sentiment.</p>
            </div>

            <div>
                <h3 class="font-semibold mb-sm">Iterative Testing</h3>
                <p>Measured adoption before and after the awareness push to isolate the impact of discoverability efforts on user behavior.</p>
            </div>
        </div>
    </section>

    <section id="results" class="mb-3xl">
        <div class="section-header">
            <h2 class="section-title">Results & Impact</h2>
        </div>
        <p class="mb-xl">The experiment validated that developers valued accessibility and convenience over perfect dubbing quality.</p>

        <div class="flex flex-col gap-lg">
            <div>
                <h3 class="font-semibold mb-sm">Adoption</h3>
                <p>Without promotion, AI-dubbed tracks reached ~15% of viewers. After the awareness campaign, adoption rose to 28%—over 3× higher than subtitles' ~8%.</p>
            </div>

            <div>
                <h3 class="font-semibold mb-sm">Audience Reach</h3>
                <p>Viewership diversified, with particularly strong engagement in Japan, Indonesia, and Spain.</p>
            </div>

            <div>
                <h3 class="font-semibold mb-sm">Production Efficiency</h3>
                <p>Turnaround time reduced from 7–10 days (human dubbing) to 3–5 days (AI dubbing). AI dubbing was ~70% cheaper than human dubbing while achieving significantly higher adoption than subtitles.</p>
            </div>

            <div>
                <h3 class="font-semibold mb-sm">User Feedback</h3>
                <p>Developers confirmed that while AI dubbing wasn't flawless, it was easier to follow than subtitles and met their needs for technical learning content.</p>
            </div>

            <div>
                <h3 class="font-semibold mb-sm">ROI</h3>
                <p>AI dubbing cost ~2× more than subtitles but delivered ~3× higher adoption, resulting in ~75% higher ROI based on engagement metrics.</p>
            </div>
        </div>

        <div class="callout callout-muted mt-xl">
            <h3 class="callout-title">Constraints</h3>
            <ul class="bullet-list">
                <li>Universal Translator was in early testing with limited language support and evolving quality</li>
                <li>YouTube's multi-language audio feature lacked in-product notifications, requiring manual awareness efforts</li>
                <li>The pilot covered a limited set of videos and languages, making results directional rather than statistically comprehensive</li>
                <li>Broader organizational changes limited post-pilot iteration</li>
            </ul>
        </div>
    </section>

    <section id="related" class="mb-3xl">
        <div class="section-header">
            <h2 class="section-title">Related Case Studies</h2>
        </div>
        <div class="grid grid-2">
            <a href="/developer-insights" class="card-info">
                <h3 class="card-info-title">Developer Audience Insights Study (Google)</h3>
                <p class="card-info-text">User research that doubled reach and boosted engagement</p>
            </a>
            <a href="/cross-platform-delivery" class="card-info">
                <h3 class="card-info-title">Cross-Platform Delivery & Discoverability (Google)</h3>
                <p class="card-info-text">Platform constraints and discovery experiments</p>
            </a>
        </div>
    </section>
</main>

<?php require_once '../includes/footer.php'; ?>
