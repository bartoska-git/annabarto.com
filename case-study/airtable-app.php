<?php
$pageTitle = 'Custom Airtable App (Moniify)';
$isCaseStudy = true;
$backLink = '/#portfolio';
$backText = 'Back to Portfolio';
require_once '../includes/header.php';

$stats = [
    ['label' => 'Automated Handoffs/Year', 'value' => '10K+'],
    ['label' => 'Video Workflows/Year', 'value' => '700+'],
    ['label' => 'Deliverables/Month', 'value' => '240'],
    ['label' => 'Agency Pipelines', 'value' => '5']
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
            <h1 class="font-outfit text-4xl md:text-5xl font-bold text-deep-espresso mb-6">Custom Airtable App (Moniify)</h1>
            <div class="bg-soft-terracotta/10 border-l-4 border-soft-terracotta rounded-r-lg p-4 mb-8">
                <div class="mb-2"><span class="font-semibold text-deep-espresso">Role:</span> <span class="text-deep-espresso/90">Product Lead</span></div>
                <div><span class="font-semibold text-deep-espresso">Focus:</span> <span class="text-deep-espresso/90">System Architecture · Workflow Automation · Internal Tooling</span></div>
            </div>
            <p class="text-deep-espresso/90 leading-relaxed text-lg">I designed and built a custom Airtable app that automated 10K+ manual handoffs across 700+ video workflows per year. The unified editorial workflow platform combined relational database logic, dynamic automations, and tailored interfaces for each user group.</p>
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
            <p class="text-deep-espresso/90 leading-relaxed mb-6"><a href="/case-study/moniify.php" class="text-soft-terracotta hover:text-soft-terracotta/80 transition-colors font-medium">Moniify</a> was a product-led media startup targeting Zillennials interested in building financial independence. Among its portfolio, <a href="/case-study/moniify-creators.php" class="text-soft-terracotta hover:text-soft-terracotta/80 transition-colors font-medium">Moniify Creators</a> stood out for its scale, commissioning twelve creators who delivered ≈240 assets per month across five agency pipelines. Integrating creators directly into editorial production was a new model for business media, creating two core challenges for the product's small 3.5-person editorial team.</p>
            <h3 class="font-outfit text-xl font-semibold text-deep-espresso mb-4">Challenge 1: Volume & Fragmentation</h3>
            <p class="text-deep-espresso/90 leading-relaxed mb-12">Each agency partner used their own spreadsheets and chat threads to manage production, causing lost approvals, conflicting versions, and difficulty tracking progress. Unlike Moniify's other products (which used one partner each), Creators demanded enterprise-level workflow infrastructure—but engineering resources were extremely limited.</p>
            <h3 class="font-outfit text-xl font-semibold text-deep-espresso mb-4">Challenge 2: Confidentiality & Access Control</h3>
            <p class="text-deep-espresso/90 leading-relaxed">Every agency and creator operated under separate agreements. The system needed to restrict partners to only their own work, while giving the internal editorial team edit access across all pipelines and leadership read-only visibility.</p>
        </section>

        <section id="approach" class="mb-24">
            <div class="inline-block bg-soft-terracotta/10 px-4 py-2 rounded-lg mb-6">
                <h2 class="font-outfit text-3xl font-bold text-deep-espresso">Approach & Execution</h2>
            </div>
            <h3 class="font-outfit text-xl font-semibold text-deep-espresso mb-4">Tool Context</h3>
            <p class="text-deep-espresso/90 leading-relaxed mb-6">Airtable had been adopted company-wide as the project-management tool, but most teams used it like a spreadsheet.</p>
            <p class="text-deep-espresso/90 leading-relaxed mb-12">Moniify Creators required a database, a workflow engine, and tiered interfaces: all in one.</p>
            <h3 class="font-outfit text-xl font-semibold text-deep-espresso mb-4">System Design & Build</h3>
            <p class="text-deep-espresso/90 leading-relaxed mb-4">I mapped the entire editorial workflow end-to-end — from idea submission and script review to final delivery — to identify dependencies, repetitive steps, and common failure points.</p>
            <p class="text-deep-espresso/90 leading-relaxed mb-2 font-semibold">Main tables:</p>
            <ul class="space-y-3 mb-6">
                <li class="flex items-start"><span class="text-soft-terracotta mr-3 mt-1">•</span><span class="text-deep-espresso/90">Content Ideas (source record referenced across all stages)</span></li>
                <li class="flex items-start"><span class="text-soft-terracotta mr-3 mt-1">•</span><span class="text-deep-espresso/90">Production Deliverables</span></li>
                <li class="flex items-start"><span class="text-soft-terracotta mr-3 mt-1">•</span><span class="text-deep-espresso/90">Publishing</span></li>
            </ul>
            <p class="text-deep-espresso/90 leading-relaxed mb-2 font-semibold">Sample of auxiliary tables:</p>
            <ul class="space-y-3 mb-6">
                <li class="flex items-start"><span class="text-soft-terracotta mr-3 mt-1">•</span><span class="text-deep-espresso/90">Teams</span></li>
                <li class="flex items-start"><span class="text-soft-terracotta mr-3 mt-1">•</span><span class="text-deep-espresso/90">Content Categories</span></li>
                <li class="flex items-start"><span class="text-soft-terracotta mr-3 mt-1">•</span><span class="text-deep-espresso/90">Creators</span></li>
            </ul>
            <p class="text-deep-espresso/90 leading-relaxed mb-4">Together, these relationships enabled dynamic fields, lookup and rollup, that pulled and displayed key data across the system, eliminating duplication and creating a single source of truth.</p>
            <h4 class="font-outfit text-lg font-semibold text-deep-espresso mb-3 mt-8">Automations</h4>
            <p class="text-deep-espresso/90 leading-relaxed mb-4">Using Airtable's native tools, I built rule-based triggers that:</p>
            <ul class="space-y-3 mb-8">
                <li class="flex items-start"><span class="text-soft-terracotta mr-3 mt-1">•</span><span class="text-deep-espresso/90">Generated new records based on approvals</span></li>
                <li class="flex items-start"><span class="text-soft-terracotta mr-3 mt-1">•</span><span class="text-deep-espresso/90">Notified teams when ideas and deliverables were ready</span></li>
                <li class="flex items-start"><span class="text-soft-terracotta mr-3 mt-1">•</span><span class="text-deep-espresso/90">Pushed the projects to the next workflow stage</span></li>
            </ul>
            <h4 class="font-outfit text-lg font-semibold text-deep-espresso mb-3 mt-8">Interfaces</h4>
            <p class="text-deep-espresso/90 leading-relaxed mb-4">I created three experience layers:</p>
            <ul class="space-y-3 mb-12">
                <li class="flex items-start"><span class="text-soft-terracotta mr-3 mt-1">•</span><span class="text-deep-espresso/90">Editorial Interface — for daily content management</span></li>
                <li class="flex items-start"><span class="text-soft-terracotta mr-3 mt-1">•</span><span class="text-deep-espresso/90">Leadership Dashboard — high-level progress across all pipelines</span></li>
                <li class="flex items-start"><span class="text-soft-terracotta mr-3 mt-1">•</span><span class="text-deep-espresso/90">Agency Interfaces — five partner-specific views with conditional access and edit permissions.</span></li>
            </ul>
            <h3 class="font-outfit text-xl font-semibold text-deep-espresso mb-4">Rollout & Adoption</h3>
            <p class="text-deep-espresso/90 leading-relaxed mb-12">After internal testing with the editorial team, the system was rolled out to agency partners. I onboarded users through short training sessions, and refined automation dependencies based on early feedback.</p>
            <h3 class="font-outfit text-xl font-semibold text-deep-espresso mb-4">Taking Ownership Under Constraints</h3>
            <p class="text-deep-espresso/90 leading-relaxed mb-6">With only a remote, part-time Airtable consultant available, I independently determined what the system needed to do (the jobs to be done) and how to make it possible in Airtable.</p>
            <p class="text-deep-espresso/90 leading-relaxed">Through documentation, experimentation, and ChatGPT-assisted troubleshooting, I uncovered Airtable's app-building capabilities as I went, designing, debugging, and scaling the system myself.</p>
        </section>

        <section id="impact" class="mb-24">
            <div class="inline-block bg-soft-terracotta/10 px-4 py-2 rounded-lg mb-6">
                <h2 class="font-outfit text-3xl font-bold text-deep-espresso">Impact</h2>
            </div>
            <h3 class="font-outfit text-xl font-semibold text-deep-espresso mb-4">Workflow Efficiency</h3>
            <ul class="space-y-3 mb-12">
                <li class="flex items-start"><span class="text-soft-terracotta mr-3 mt-1">•</span><span class="text-deep-espresso/90">Automated 10K+ handoffs/year across 700+ workflows</span></li>
                <li class="flex items-start"><span class="text-soft-terracotta mr-3 mt-1">•</span><span class="text-deep-espresso/90">Turned multi-hour coordination tasks into near-instant updates</span></li>
            </ul>
            <h3 class="font-outfit text-xl font-semibold text-deep-espresso mb-4">Adoption & Usage</h3>
            <ul class="space-y-3 mb-12">
                <li class="flex items-start"><span class="text-soft-terracotta mr-3 mt-1">•</span><span class="text-deep-espresso/90">Used daily by all five agency pipelines (~20 external partners)</span></li>
                <li class="flex items-start"><span class="text-soft-terracotta mr-3 mt-1">•</span><span class="text-deep-espresso/90">Used daily by the product's editorial team (3.5 head-count)</span></li>
                <li class="flex items-start"><span class="text-soft-terracotta mr-3 mt-1">•</span><span class="text-deep-espresso/90">Used weekly by ~10 internal stakeholders (leadership & cross-functional team leads)</span></li>
            </ul>
            <h3 class="font-outfit text-xl font-semibold text-deep-espresso mb-4">Operational Visibility</h3>
            <ul class="space-y-3 mb-12">
                <li class="flex items-start"><span class="text-soft-terracotta mr-3 mt-1">•</span><span class="text-deep-espresso/90">Replaced spreadsheets, chats, and ad hoc updates with one source of truth</span></li>
                <li class="flex items-start"><span class="text-soft-terracotta mr-3 mt-1">•</span><span class="text-deep-espresso/90">Provided multi-level access and visibility to editorial, leadership, cross-functional, and external agency teams</span></li>
            </ul>
            <h3 class="font-outfit text-xl font-semibold text-deep-espresso mb-4">Standardization & Governance</h3>
            <ul class="space-y-3">
                <li class="flex items-start"><span class="text-soft-terracotta mr-3 mt-1">•</span><span class="text-deep-espresso/90">Introduced consistent structures for naming, statuses, approvals, and deliverable logic</span></li>
                <li class="flex items-start"><span class="text-soft-terracotta mr-3 mt-1">•</span><span class="text-deep-espresso/90">Enabled predictable, scalable production at startup speed</span></li>
            </ul>
        </section>

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
