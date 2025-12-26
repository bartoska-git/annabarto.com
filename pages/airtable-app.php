<?php
$pageTitle = 'Custom Airtable App (Moniify)';
$isCaseStudy = true;
$backLink = '/#portfolio';
$backText = 'Back to Portfolio';
require_once '../includes/header.php';

$stats = [
    ['value' => '10K+', 'labelSecondary' => 'Automated', 'label' => 'Handoffs/Year'],
    ['value' => '700+', 'labelSecondary' => 'Video', 'label' => 'Workflows/Year'],
    ['value' => '240', 'label' => 'Deliverables/Month'],
    ['value' => '5', 'labelSecondary' => 'Agency', 'label' => 'Pipelines']
];

$sections = [
    ['id' => 'overview', 'label' => 'Overview'],
    ['id' => 'problem', 'label' => 'Problem / Opportunity'],
    ['id' => 'approach', 'label' => 'Approach & Execution'],
    ['id' => 'impact', 'label' => 'Impact'],
    ['id' => 'related', 'label' => 'Related Case Studies']
];

$relatedCaseStudies = [
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
        <h1 class="card-hero-title">Custom Airtable App (Moniify)</h1>
        <div class="role-box">
            <p><span class="role-label">Role:</span> Product Lead</p>
            <p><span class="role-label">Focus:</span> System Architecture · Workflow Automation · Internal Tooling</p>
        </div>
        <p class="text-lg">I designed and built a custom Airtable app that automated 10K+ manual handoffs across 700+ video workflows per year. The unified editorial workflow platform combined relational database logic, dynamic automations, and tailored interfaces for each user group.</p>
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
        <p class="mb-lg"><a href="/moniify" class="link-accent font-medium">Moniify</a> was a product-led media startup targeting Zillennials interested in building financial independence. Among its portfolio, <a href="/moniify-creators" class="link-accent font-medium">Moniify Creators</a> stood out for its scale, commissioning twelve creators who delivered ≈240 assets per month across five agency pipelines. Integrating creators directly into editorial production was a new model for business media, creating two core challenges for the product's small 3.5-person editorial team.</p>
        <h3 class="text-xl font-semibold mb-md">Challenge 1: Volume & Fragmentation</h3>
        <p class="mb-2xl">Each agency partner used their own spreadsheets and chat threads to manage production, causing lost approvals, conflicting versions, and difficulty tracking progress. Unlike Moniify's other products (which used one partner each), Creators demanded enterprise-level workflow infrastructure—but engineering resources were extremely limited.</p>
        <h3 class="text-xl font-semibold mb-md">Challenge 2: Confidentiality & Access Control</h3>
        <p>Every agency and creator operated under separate agreements. The system needed to restrict partners to only their own work, while giving the internal editorial team edit access across all pipelines and leadership read-only visibility.</p>
    </section>

    <section id="approach" class="mb-3xl">
        <div class="section-header">
            <h2 class="section-title">Approach & Execution</h2>
        </div>
        <h3 class="text-xl font-semibold mb-md">Tool Context</h3>
        <p class="mb-lg">Airtable had been adopted company-wide as the project-management tool, but most teams used it like a spreadsheet.</p>
        <p class="mb-2xl">Moniify Creators required a database, a workflow engine, and tiered interfaces: all in one.</p>
        <h3 class="text-xl font-semibold mb-md">System Design & Build</h3>
        <p class="mb-md">I mapped the entire editorial workflow end-to-end — from idea submission and script review to final delivery — to identify dependencies, repetitive steps, and common failure points.</p>
        <p class="font-semibold mb-sm">Main tables:</p>
        <ul class="bullet-list mb-lg">
            <li>Content Ideas (source record referenced across all stages)</li>
            <li>Production Deliverables</li>
            <li>Publishing</li>
        </ul>
        <p class="font-semibold mb-sm">Sample of auxiliary tables:</p>
        <ul class="bullet-list mb-lg">
            <li>Teams</li>
            <li>Content Categories</li>
            <li>Creators</li>
        </ul>
        <p class="mb-md">Together, these relationships enabled dynamic fields, lookup and rollup, that pulled and displayed key data across the system, eliminating duplication and creating a single source of truth.</p>
        <h4 class="text-lg font-semibold mb-md mt-xl">Automations</h4>
        <p class="mb-md">Using Airtable's native tools, I built rule-based triggers that:</p>
        <ul class="bullet-list mb-xl">
            <li>Generated new records based on approvals</li>
            <li>Notified teams when ideas and deliverables were ready</li>
            <li>Pushed the projects to the next workflow stage</li>
        </ul>
        <h4 class="text-lg font-semibold mb-md mt-xl">Interfaces</h4>
        <p class="mb-md">I created three experience layers:</p>
        <ul class="bullet-list mb-2xl">
            <li>Editorial Interface — for daily content management</li>
            <li>Leadership Dashboard — high-level progress across all pipelines</li>
            <li>Agency Interfaces — five partner-specific views with conditional access and edit permissions.</li>
        </ul>
        <h3 class="text-xl font-semibold mb-md">Rollout & Adoption</h3>
        <p class="mb-2xl">After internal testing with the editorial team, the system was rolled out to agency partners. I onboarded users through short training sessions, and refined automation dependencies based on early feedback.</p>
        <h3 class="text-xl font-semibold mb-md">Taking Ownership Under Constraints</h3>
        <p class="mb-lg">With only a remote, part-time Airtable consultant available, I independently determined what the system needed to do (the jobs to be done) and how to make it possible in Airtable.</p>
        <p>Through documentation, experimentation, and ChatGPT-assisted troubleshooting, I uncovered Airtable's app-building capabilities as I went, designing, debugging, and scaling the system myself.</p>
    </section>

    <section id="impact" class="mb-3xl">
        <div class="section-header">
            <h2 class="section-title">Impact</h2>
        </div>
        <h3 class="text-xl font-semibold mb-md">Workflow Efficiency</h3>
        <ul class="bullet-list mb-2xl">
            <li>Automated 10K+ handoffs/year across 700+ workflows</li>
            <li>Turned multi-hour coordination tasks into near-instant updates</li>
        </ul>
        <h3 class="text-xl font-semibold mb-md">Adoption & Usage</h3>
        <ul class="bullet-list mb-2xl">
            <li>Used daily by all five agency pipelines (~20 external partners)</li>
            <li>Used daily by the product's editorial team (3.5 head-count)</li>
            <li>Used weekly by ~10 internal stakeholders (leadership & cross-functional team leads)</li>
        </ul>
        <h3 class="text-xl font-semibold mb-md">Operational Visibility</h3>
        <ul class="bullet-list mb-2xl">
            <li>Replaced spreadsheets, chats, and ad hoc updates with one source of truth</li>
            <li>Provided multi-level access and visibility to editorial, leadership, cross-functional, and external agency teams</li>
        </ul>
        <h3 class="text-xl font-semibold mb-md">Standardization & Governance</h3>
        <ul class="bullet-list">
            <li>Introduced consistent structures for naming, statuses, approvals, and deliverable logic</li>
            <li>Enabled predictable, scalable production at startup speed</li>
        </ul>
    </section>

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

<?php require_once '../includes/footer.php'; ?>
