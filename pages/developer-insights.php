<?php
$pageTitle = 'Developer Audience Insights Study (Google)';
$isCaseStudy = true;
$backLink = '/#portfolio';
$backText = 'Back to Portfolio';
require_once '../includes/header.php';

$stats = [
    ['value' => '387', 'labelSecondary' => 'Developer', 'label' => 'Survey Responses'],
    ['value' => '≈95%', 'labelSecondary' => 'Confidence', 'label' => 'For 210K UMV'],
    ['value' => '2×', 'labelSecondary' => 'Growth', 'label' => 'Audience Reach'],
    ['value' => '~20%', 'labelSecondary' => 'Increase', 'label' => 'Engagement']
];

$sections = [
    ['id' => 'overview', 'label' => 'Overview'],
    ['id' => 'problem', 'label' => 'Problem / Opportunity'],
    ['id' => 'approach', 'label' => 'Research Approach'],
    ['id' => 'findings', 'label' => 'Key Findings & Actions'],
    ['id' => 'impact', 'label' => 'Impact'],
    ['id' => 'related', 'label' => 'Related Case Studies']
];

$relatedCaseStudies = [
    ['title' => 'AI Dubbing Experiment (Google)', 'description' => 'AI experimentation that expanded international reach', 'slug' => 'ai-dubbing'],
    ['title' => 'Cross-Platform Delivery & Discoverability (Google)', 'description' => 'Platform constraints and discovery experiments', 'slug' => 'cross-platform-delivery'],
    ['title' => 'Creator Crowdfunding Product Discovery (YouTube)', 'description' => 'Hypothesis-driven discovery combining SQL data mining with market research', 'slug' => 'creator-crowdfunding']
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
        <h1 class="card-hero-title">Developer Audience Insights Study (Google)</h1>
        <div class="role-box">
            <p><span class="role-label">Role:</span> Research & Insights Lead (Senior Producer, Google Developer Media Lab)</p>
            <p><span class="role-label">Focus:</span> User Research · Data-Informed Strategy · Developer Insights</p>
        </div>
        <p class="text-lg">I designed and led an end-to-end user study to understand Google Search's developer video audience: who they were, what they needed, and how to better serve them. The research gathered 387 responses with ≈95% confidence, revealing insights that shaped content strategy, expanded accessibility, and launched new distribution channels. These efforts doubled audience reach and increased engagement by ~20% with zero paid promotion.</p>
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
        <p class="mb-lg">Video analytics provided strong performance data—views, retention, click-through rates—but offered little understanding of who the viewers actually were or what they needed. The metrics showed what was happening but not why.</p>
        <p>With no precedent for audience research within our team, I initiated a user study to uncover who our viewers were, what they expected and needed, and what was missing: insights to guide programming, accessibility, and discovery strategies for Google Search developer content.</p>
    </section>

    <section id="approach" class="mb-3xl">
        <div class="section-header">
            <h2 class="section-title">Research Approach</h2>
        </div>
        <p class="mb-xl">I led the initiative end-to-end: from designing and testing the study to analyzing the data and creating a follow-up PRD for standardization across the organization.</p>

        <div class="flex flex-col gap-lg">
            <div>
                <h3 class="font-semibold mb-sm">Study Design & Testing</h3>
                <p class="mb-md">I developed the research plan using a Google UX Research template, then designed the survey structure with segmentation questions and relevance checks to tailor the flow to each respondent.</p>
                <p>The questionnaire covered viewer profiles, content preferences, discovery sources, and motivations, combining quantitative questions with open-ended feedback. Before launch, it underwent legal review and was tested by Google Search Console Product Experts, the Search Relations team, and Google UX researchers.</p>
            </div>

            <div>
                <h3 class="font-semibold mb-sm">Implementation & Data Collection</h3>
                <p>The survey was implemented via in-video info cards, end screens, and pinned comments across 100+ high-performing videos, both evergreen content and new releases. This approach captured both regular viewers and occasional visitors discovering content through search, ensuring audience diversity. The study collected 387 responses with ≈95% confidence for ~210K unique monthly viewers.</p>
            </div>

            <div>
                <h3 class="font-semibold mb-sm">Analysis & Insights</h3>
                <p>I analyzed both quantitative patterns and qualitative feedback to identify content gaps, format preferences, and discovery opportunities. All findings included confidence-level reporting and explicit notes on methodological limitations to maintain transparency.</p>
            </div>
        </div>
    </section>

    <section id="findings" class="mb-3xl">
        <div class="section-header">
            <h2 class="section-title">Key Findings & Actions</h2>
        </div>

        <div class="flex flex-col gap-lg">
            <div>
                <h3 class="font-semibold mb-sm">Content & Format Preferences</h3>
                <p class="mb-md">Respondents showed strong interest in technical topics such as Structured Data, Page Speed/Core Web Vitals, and Ecommerce SEO. They also requested more interviews, training-style videos, and case studies: formats we produced infrequently or not at all.</p>
                <div class="callout callout-accent">
                    <p><span class="font-semibold">Action:</span> These insights directly shaped new content programming and format expansion.</p>
                </div>
            </div>

            <div>
                <h3 class="font-semibold mb-sm">Distribution Insights</h3>
                <p class="mb-md">YouTube Search emerged as the dominant entry point, but LinkedIn ranked among the top discovery channels. This was notable since we had no LinkedIn presence at the time.</p>
                <div class="callout callout-accent">
                    <p><span class="font-semibold">Action:</span> Led to LinkedIn's adoption as a new distribution channel.</p>
                </div>
            </div>

            <div>
                <h3 class="font-semibold mb-sm">Accessibility Needs</h3>
                <p class="mb-md">Viewers called for more localized content, transcripts, and easier video navigation.</p>
                <div class="callout callout-accent">
                    <p><span class="font-semibold">Action:</span> Informed localization and transcription expansion priorities.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="impact" class="mb-3xl">
        <div class="section-header">
            <h2 class="section-title">Impact</h2>
        </div>
        <p class="mb-xl">In addition to the key actions in content strategy, accessibility, and distribution outlined above, the study delivered broader organizational impact:</p>

        <div class="flex flex-col gap-lg">
            <div>
                <h3 class="font-semibold mb-sm">Growth & Engagement</h3>
                <p>Doubled audience reach and improved engagement by ~20%, informed by insights from the user study as part of the broader programming and accessibility initiative.</p>
            </div>

            <div>
                <h3 class="font-semibold mb-sm">Standardization PRD</h3>
                <p>Following the study's success and growing cross-team interest, I authored a Product Requirements Document (PRD) outlining how similar research could be standardized across the organization. The proposal defined both a workflow for conducting surveys and a dashboard framework for visualizing results, including segmentation filters, keyword matrices for open-ended feedback, and confidence-level displays.</p>
            </div>

            <div>
                <h3 class="font-semibold mb-sm">Organizational Learning</h3>
                <p>Findings incorporated into the Lab's "Top 10 Strategies for Developer Content," circulated across teams to inform future developer-focused strategy.</p>
            </div>
        </div>

        <div class="callout callout-muted mt-xl">
            <h3 class="callout-title">Constraints</h3>
            <ul class="bullet-list">
                <li><span class="font-semibold">Research bandwidth:</span> UX researchers provided templates and feedback but couldn't staff execution; I owned design, implementation, and analysis.</li>
                <li><span class="font-semibold">Sampling bias and representation:</span> The survey appeared across 100+ videos but didn't capture the full breadth of Google Search's developer video content. Results may have been skewed toward viewers comfortable in English. To maintain transparency, all findings included confidence-level reporting and explicit notes on methodological limitations.</li>
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
