<?php
$pageTitle = 'Cross-Platform Delivery & Discoverability (Google)';
$isCaseStudy = true;
$backLink = '/#portfolio';
$backText = 'Back to Portfolio';
require_once '../includes/header.php';

$stats = [
    ['value' => '146%', 'labelSecondary' => 'Smart App Banner', 'label' => 'Downloads Increase'],
    ['value' => '247%', 'labelSecondary' => 'Announcement Bar', 'label' => 'Downloads Increase'],
    ['value' => '21%', 'labelSecondary' => 'of Listeners', 'label' => 'Transcript Downloads'],
    ['value' => '1.5M', 'labelSecondary' => 'in ≈2.5 Years', 'label' => 'Total Downloads']
];

$sections = [
    ['id' => 'overview', 'label' => 'Overview'],
    ['id' => 'problem', 'label' => 'Problem / Opportunity'],
    ['id' => 'approach', 'label' => 'Approach'],
    ['id' => 'impact', 'label' => 'Impact'],
    ['id' => 'related', 'label' => 'Related Case Studies']
];

$relatedCaseStudies = [
    ['title' => 'Developer Audience Insights Study (Google)', 'description' => 'User research that doubled reach and boosted engagement', 'slug' => 'developer-insights'],
    ['title' => 'AI Dubbing Experiment (Google)', 'description' => 'AI experimentation that expanded international reach', 'slug' => 'ai-dubbing']
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
        <h1 class="card-hero-title">Cross-Platform Delivery & Discoverability (Google)</h1>
        <div class="role-box">
            <p><span class="role-label">Role:</span> Product Lead for Dev Audio (Producer, Google Developer Media Lab)</p>
            <p><span class="role-label">Focus:</span> Platform Constraints · Product Discoverability · Accessibility</p>
        </div>
        <p class="text-lg">I designed the delivery and discovery framework for Google's Search Off the Record podcast across a fragmented third-party ecosystem. I addressed UI limitations, distribution latency, and accessibility gaps while building owned discovery surfaces and running awareness experiments. Simple tactics—Smart App Banner and an announcement bar—lifted downloads by 146% and 247%, respectively. I also validated demand for transcripts, built the workflow, and saw ~21% listener adoption.</p>
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
        <p class="mb-lg">Google's video ecosystem benefited from end-to-end ownership: hosting (YouTube), discovery (Search and YouTube), and accessibility (auto-captions). The podcast ecosystem, by contrast, was a fragmented network of third-party platforms: podcast players such as Apple Podcasts, Spotify, and Overcast, each with its own UI standards, feed-propagation timelines, and accessibility limitations.</p>

        <p class="mb-lg">Google Developer Media Lab had only just begun experimenting with audio-only formats. There was no internal playbook, and our media engineering, design, and content management teams had few established workflows.</p>

        <p class="mb-lg">My research into delivery platforms, early user feedback, and adoption metrics surfaced several friction points:</p>

        <ul class="bullet-list mb-lg">
            <li><span class="font-semibold">Design constraints:</span> Podcast players imposed unique artwork rules; Apple Podcasts, for example, obscured the bottom 15% of cover art</li>
            <li><span class="font-semibold">Distribution latency:</span> RSS feed propagation could take several days, risking launch failures</li>
            <li><span class="font-semibold">Accessibility gaps:</span> Unlike YouTube, podcasts lacked automatic captions</li>
            <li><span class="font-semibold">Low awareness:</span> Many developers didn't regularly use podcast apps and expected Google content to live on Google-owned surfaces; searching for the podcast returned only third-party results</li>
        </ul>

        <p>The challenge was to mitigate delivery and launch risks while creating a foundation for discoverability, accessibility, and adoption in a medium Google didn't own.</p>
    </section>

    <section id="approach" class="mb-3xl">
        <div class="section-header">
            <h2 class="section-title">Approach</h2>
        </div>

        <div class="flex flex-col gap-xl">
            <div>
                <h3 class="text-xl font-semibold mb-md">Solving Delivery Challenges</h3>

                <div class="flex flex-col gap-lg">
                    <div>
                        <h4 class="font-semibold mb-sm">Designing for Platform UI Constraints</h4>
                        <p class="mb-md">Working with design, I led multiple iterations of the podcast's visual identity after discovering Apple Podcasts' requirement that the bottom 15% of cover art remain text-free. Testing across major players also revealed that many interfaces used white backgrounds, causing our original artwork to blend in.</p>
                        <p>I introduced a colored outline to preserve contrast and compliance, creating a single design system that rendered consistently across platforms.</p>
                    </div>

                    <div>
                        <h4 class="font-semibold mb-sm">Addressing Distribution Latency</h4>
                        <p>To address distribution latency, I researched how RSS feeds propagated from Libsyn to major podcast players and discovered multi-day delays for first-time publications. I designed a pre-launch validation workflow: verifying feed updates across all major players before promotional activity began.</p>
                    </div>

                    <div class="callout callout-accent">
                        <p><span class="font-semibold">Outcome:</span> Seamless multi-platform rollout and a standardized "pre-flight" checklist for future audio launches.</p>
                    </div>
                </div>
            </div>

            <div>
                <h3 class="text-xl font-semibold mb-sm">Building an Owned Discovery Surface</h3>
                <p class="mb-md">Search results for "Search Off the Record" surfaced only third-party links. I proposed and led the creation of an official podcast page on the Google Search Central Developers site.</p>
                <div class="callout callout-accent">
                    <p><span class="font-semibold">Outcome:</span> Improved brand ownership, search visibility, and a discoverable destination for audio content within the Google ecosystem.</p>
                </div>
            </div>

            <div>
                <h3 class="text-xl font-semibold mb-md">Accessibility Validation & Scale</h3>

                <p class="mb-md">Early user feedback highlighted accessibility gaps for non-native English speakers, hard-of-hearing users, and those who preferred text over audio. To validate demand, I prototyped a transcript workflow using ML-based transcription (<a href="https://trint.com/" target="_blank" rel="noopener noreferrer" class="link-accent font-medium">Trint</a>) and light manual edits on the first few episodes.</p>

                <p class="mb-md">Within weeks, roughly 14% of listeners were downloading transcripts, confirming clear demand. I then worked with our vendor management team to outsource transcript creation at scale. By the end of the first year, about 21% of listeners were downloading transcripts.</p>

                <div class="callout callout-accent">
                    <p><span class="font-semibold">Outcome:</span> Validated and scaled an accessibility feature that also enhanced discoverability, as transcripts became indexable and quotable.</p>
                </div>
            </div>

            <div>
                <h3 class="text-xl font-semibold mb-sm">Awareness Experiments</h3>
                <p class="mb-lg">To address low awareness and limited adoption, I ran lightweight experiments across Google-owned surfaces:</p>

                <div class="flex flex-col gap-md mb-md">
                    <div>
                        <h4 class="font-semibold mb-sm">Smart App Banner</h4>
                        <p class="mb-sm">Partnered with the Google Search DevRel team to implement Apple's native Smart App Banner on the mobile Safari version of the Google Search Central Developers site, enabling one-tap subscription.</p>
                        <p class="font-semibold" style="color: var(--soft-terracotta);">Result: ≈146% increase in downloads within the following weeks</p>
                    </div>
                    <div>
                        <h4 class="font-semibold mb-sm">Announcement Bar</h4>
                        <p class="mb-sm">Ran a short-term experiment adding a promotional announcement bar to the Google Search Central Developers homepage.</p>
                        <p class="font-semibold" style="color: var(--soft-terracotta);">Result: ≈247% increase in downloads during the experiment period</p>
                    </div>
                </div>

                <div class="callout callout-accent">
                    <p><span class="font-semibold">Outcome:</span> Combined results showed that awareness and convenience were the primary adoption barriers. The podcast's growth continued organically thereafter, the experiments having jump-started a viral growth loop.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="impact" class="mb-3xl">
        <div class="section-header">
            <h2 class="section-title">Impact</h2>
        </div>

        <div class="flex flex-col gap-lg">
            <div>
                <h3 class="font-semibold mb-sm">Adoption & Reach</h3>
                <p>Drove 146% and 247% increases in podcast downloads through Smart App Banner and announcement bar experiments. Sustained organic growth thereafter, totaling more than 1.5 million downloads in ≈2.5 years.</p>
            </div>

            <div>
                <h3 class="font-semibold mb-sm">Accessibility & Inclusion</h3>
                <p>Introduced transcripts as an accessibility feature, scaling from 14% to 21% of listeners downloading transcripts. Validated strong user demand and improved discoverability through indexable content.</p>
            </div>

            <div>
                <h3 class="font-semibold mb-sm">Brand Visibility</h3>
                <p>Built an owned discovery surface for Google Search developer audio, improving SEO and brand ownership for "Search Off the Record."</p>
            </div>

            <div>
                <h3 class="font-semibold mb-sm">Organizational Learning</h3>
                <p>Findings became foundational for Google Developer Media Lab's podcasting practice. I was later invited to run internal trainings for multiple developer and consumer-facing teams.</p>
            </div>
        </div>

        <div class="callout callout-muted mt-xl">
            <h3 class="callout-title">Constraints</h3>
            <ul class="bullet-list">
                <li><span class="font-semibold">Limited organizational experience:</span> Google Developer Media Lab and the Search Relations team were both new to managing cross-platform podcast delivery. Existing workflows for video and web content didn't translate to audio, requiring extensive discovery and coordination.</li>
                <li><span class="font-semibold">Remote collaboration:</span> The project was developed fully remotely during 2020, adding logistical complexity across time zones and teams.</li>
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
