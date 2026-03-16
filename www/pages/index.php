<?php
$pageTitle = 'Product Manager & Applied AI Builder';
$ogImage = '/public/optimized/images/Hero_website_anna_barto.jpg';
$ogDescription = 'Product manager specializing in strategy, discovery, experimentation, and 0→1 product building.';
require_once '../includes/header.php';
require_once '../includes/navigation.php';
?>

<main class="container">
    <!-- Hero Section -->
    <section id="hero" class="hero">
        <div class="hero-image-wrapper">
            <img src="/public/optimized/anna-portrait.jpg" alt="Anna Barto" class="hero-avatar">
        </div>
        <div class="hero-content">
            <div class="hero-inner">
                <h1 class="hero-title">Anna Barto</h1>
                <h2 class="hero-subtitle">Product Manager & Applied AI Builder</h2>
                <p class="hero-description">
                    I'm a product manager who builds with AI: RAG systems, LLM pipelines, AI-assisted development.
                    My background spans strategy and partnerships at Google &amp; YouTube, content R&amp;D at a
                    developer media lab, and 0&rarr;1 product work at media startups.
                </p>
                <a href="/about" class="hero-about-link">More about my journey &rarr;</a>
                <div class="hero-actions">
                    <a href="#ai-builds" class="btn btn-primary">
                        <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        View My Work
                    </a>
                    <a href="/public/Anna Barto-CV .pdf" class="btn btn-primary" download>
                        <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                        Download CV
                    </a>
                    <a href="https://www.linkedin.com/in/anna-barto-product/" target="_blank" rel="noopener noreferrer" class="btn btn-primary">
                        <svg class="btn-icon" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        LinkedIn
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Logo Strip -->
    <section class="logo-strip">
        <p class="logo-strip-title">Worked with</p>
        <div class="logo-strip-logos">
            <img src="/public/optimized/logos/google-logo.png" alt="Google" class="logo-strip-logo">
            <img src="/public/optimized/logos/youtube-logo.png" alt="YouTube" class="logo-strip-logo">
            <img src="/public/optimized/logos/moniify-logo.png" alt="Moniify" class="logo-strip-logo logo-strip-logo-sm">
            <img src="/public/optimized/logos/hgs-logo.png" alt="HGS Consultants" class="logo-strip-logo">
            <img src="/public/optimized/logos/transform-lab.png" alt="Transform Lab" class="logo-strip-logo">
        </div>
    </section>

    <!-- AI Builds Section -->
    <section id="ai-builds" class="section">
        <div class="text-center mb-2xl">
            <h2 class="section-title mb-md">AI Builds</h2>
            <p class="section-subtitle">Selected projects in RAG, LLM pipelines, and AI-assisted development.</p>
        </div>
        <div class="grid grid-3">
            <?php
            $aiBuilds = [
                [
                    'title' => 'Personal AI DJ',
                    'description' => 'YouTube Music has no AI DJ feature, so <a href="https://personal-ai-dj.streamlit.app/" target="_blank" rel="noopener noreferrer" class="inline-link">I built one</a>. It enriches songs with mood descriptions via GPT, web search, and Last.fm, stores embeddings in Supabase, and retrieves matches from natural language queries.',
                    'tags' => ['RAG', 'Data Enrichment'],
                    'image' => '/public/images/ai-builds/AI_DJ.jpg',
                    'imageUrl' => 'https://personal-ai-dj.streamlit.app/',
                    'imageExternal' => true,
                    'links' => [
                        ['label' => 'GitHub', 'url' => 'https://github.com/bartoska-git/personal-ai-dj', 'external' => true],
                        ['label' => 'Build Log', 'url' => 'https://medium.com/ai-advances/i-dont-use-spotify-so-i-built-my-own-ai-dj-8c6054ceee2d', 'external' => true],
                    ]
                ],
                [
                    'title' => 'AutoFlow',
                    'description' => 'Automation tools have an onboarding blank canvas problem. <a href="https://autoflow-prototype.lovable.app" target="_blank" rel="noopener noreferrer" class="inline-link">AutoFlow</a> addresses it with a two-call LLM pipeline: a classifier validates input, then a generator suggests personalised workflows based on role and tasks.',
                    'tags' => ['Two-Call LLM Pipeline', 'Prompt Design'],
                    'image' => '/public/images/ai-builds/Autoflow.jpg',
                    'imageUrl' => 'https://autoflow-prototype.lovable.app',
                    'imageExternal' => true,
                    'links' => [
                        ['label' => 'GitHub', 'url' => 'https://github.com/bartoska-git/autoflow-prototype', 'external' => true],
                        ['label' => 'Build Log', 'url' => 'https://medium.com/womenintechnology/i-built-an-ai-onboarding-prototype-a-single-llm-call-architecture-wasnt-enough-a0af85604195', 'external' => true],
                    ]
                ],
                [
                    'title' => 'annabarto.com',
                    'description' => 'An experiment in using AI tools across an entire full-stack website build. Wireframe with ChatGPT, interface design in Magic Patterns, code and testing with Claude Code, deployment via GitHub Actions.',
                    'tags' => ['AI-Assisted Dev'],
                    'image' => '/public/images/ai-builds/annabarto.jpg',
                    'imageUrl' => '/building-with-ai',
                    'imageExternal' => false,
                    'links' => [
                        ['label' => 'GitHub', 'url' => 'https://github.com/bartoska-git/annabarto.com', 'external' => true],
                        ['label' => 'Build Log', 'url' => 'https://medium.com/design-bootcamp/building-a-site-with-ai-what-broke-and-what-i-didnt-expect-374b71ac7619', 'external' => true],
                    ]
                ],
            ];
            foreach ($aiBuilds as $build):
                $imageAttrs = $build['imageExternal'] ? 'target="_blank" rel="noopener noreferrer"' : '';
            ?>
            <article class="card">
                <div class="card-image card-image-svg">
                    <a href="<?php echo htmlspecialchars($build['imageUrl']); ?>" <?php echo $imageAttrs; ?>>
                        <img src="<?php echo $build['image']; ?>" alt="<?php echo htmlspecialchars($build['title']); ?>">
                    </a>
                </div>
                <div class="card-body">
                    <h3 class="card-title"><?php echo htmlspecialchars($build['title']); ?></h3>
                    <div class="tags">
                        <?php foreach ($build['tags'] as $tag): ?>
                        <span class="tag tag-terracotta"><?php echo htmlspecialchars($tag); ?></span>
                        <?php endforeach; ?>
                    </div>
                    <p class="card-text"><?php echo $build['description']; ?></p>
                    <div class="ai-build-links">
                        <?php foreach ($build['links'] as $link):
                            $isPending = isset($link['pending']) && $link['pending'];
                            $isExternal = isset($link['external']) && $link['external'];
                            $attrs = $isExternal ? 'target="_blank" rel="noopener noreferrer"' : '';
                            if ($isPending): ?>
                        <span class="ai-build-link-pending"><?php echo htmlspecialchars($link['label']); ?> (soon)</span>
                        <?php else: ?>
                        <a href="<?php echo htmlspecialchars($link['url']); ?>" <?php echo $attrs; ?> class="card-link"><?php echo htmlspecialchars($link['label']); ?> →</a>
                        <?php endif; endforeach; ?>
                    </div>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="section">
        <div class="text-center mb-2xl">
            <h2 class="section-title mb-md">Case Studies</h2>
            <p class="section-subtitle">Selected work in strategy, discovery, experimentation, and 0&rarr;1 building.</p>
        </div>
        <div class="grid grid-3">
            <?php
            $projects = [
                [
                    'title' => 'Building 0→1 Products (Moniify)',
                    'description' => 'Built 3 products from zero and led 20+ hybrid team in a next-gen business media startup. Each product addressed a distinct audience and market opportunity.',
                    'tags' => ['Product Strategy', 'Early-Stage'],
                    'image' => '/public/optimized/portfolio/moniify-products.jpg',
                    'link' => '/moniify'
                ],
                [
                    'title' => 'Custom Airtable App (Moniify)',
                    'description' => 'Designed a low-code Airtable app that automated 10K+ annual handoffs across 700+ video workflows, connecting internal teams and agencies in real time.',
                    'tags' => ['Workflow Automation', 'Internal Tools'],
                    'image' => '/public/optimized/portfolio/airtable-app.jpg',
                    'link' => '/airtable-app'
                ],
                [
                    'title' => 'AI Dubbing Experiment (Google)',
                    'description' => "Led Google's early AI-dubbing experiment for developer content, testing multilingual synthetic audio using Universal Translator. AI dubbing achieved 3× higher adoption than subtitles.",
                    'tags' => ['AI Experimentation', 'Accessibility'],
                    'image' => '/public/optimized/portfolio/ai-dubbing.jpg',
                    'link' => '/ai-dubbing'
                ],
                [
                    'title' => 'Developer Audience Insights Study (Google)',
                    'description' => 'Designed and ran a 387-response user study (≈95% confidence for 210k UMV), revealing audience needs that doubled reach and boosted engagement 20%.',
                    'tags' => ['User Research', 'Data-Informed Strategy'],
                    'image' => '/public/optimized/portfolio/developer-insights.jpg',
                    'link' => '/developer-insights'
                ],
                [
                    'title' => 'Cross-Platform Delivery & Discoverability (Google)',
                    'description' => "Built the delivery and discovery system for Google's Search Off the Record podcast. Discoverability experiments drove 146% and 247% increases in downloads.",
                    'tags' => ['Platform Constraints', 'Product Discoverability'],
                    'image' => '/public/optimized/portfolio/cross-platform-delivery.jpg',
                    'link' => '/cross-platform-delivery'
                ],
                [
                    'title' => 'Creator Crowdfunding Product Discovery (YouTube)',
                    'description' => 'Led a hypothesis-driven discovery on creator crowdfunding, combining SQL data mining with global market research.',
                    'tags' => ['Creator Monetization', 'Product Discovery'],
                    'image' => '/public/optimized/portfolio/creator-crowdfunding.jpg',
                    'link' => '/creator-crowdfunding'
                ]
            ];
            foreach ($projects as $project): ?>
            <article class="card">
                <div class="card-image">
                    <img src="<?php echo $project['image']; ?>" alt="<?php echo htmlspecialchars($project['title']); ?>">
                </div>
                <div class="card-body">
                    <h3 class="card-title"><?php echo htmlspecialchars($project['title']); ?></h3>
                    <div class="tags">
                        <?php foreach ($project['tags'] as $tag): ?>
                        <span class="tag tag-terracotta"><?php echo htmlspecialchars($tag); ?></span>
                        <?php endforeach; ?>
                    </div>
                    <p class="card-text"><?php echo htmlspecialchars($project['description']); ?></p>
                    <a href="<?php echo $project['link'] ?? '#'; ?>" class="card-link">Read Case Study &rarr;</a>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Writing Section -->
    <section id="writing" class="section">
        <div class="text-center mb-2xl">
            <h2 class="section-title mb-md">Writing</h2>
            <p class="section-subtitle">My thoughts on product, media, AI, and the things I'm curious about.</p>
        </div>
        <div class="articles-scroll">
            <?php
            $articles = [
                ['title' => 'How I Built This Site Using AI', 'category' => 'AI Tools', 'excerpt' => 'What worked, what broke, and what I didn\'t expect. A detailed exploration of building this portfolio site using AI tools across the full process.', 'date' => 'January 8, 2026', 'link' => '/building-with-ai', 'featured' => true],
                ['title' => 'I Built an AI Onboarding Prototype. One LLM Call Wasn\'t Enough.', 'category' => 'AI Architecture', 'excerpt' => 'A PM\'s build log for an LLM-powered onboarding prototype: why a single call wasn\'t enough, and what it took — prompt iteration, input design, and a two-call architecture — to get output worth trusting.', 'date' => 'March 15, 2026', 'link' => 'https://medium.com/womenintechnology/i-built-an-ai-onboarding-prototype-a-single-llm-call-architecture-wasnt-enough-a0af85604195'],
                ['title' => 'I Don\'t Use Spotify. So I Built My Own AI DJ.', 'category' => 'AI Architecture', 'excerpt' => 'Spotify launched Prompted Playlists. I don\'t use Spotify. So I built one for YouTube Music instead. A build log covering missing APIs, LLMs that don\'t know obscure music, and the enrichment cost that nearly derailed the whole thing.', 'date' => 'March 10, 2026', 'link' => 'https://medium.com/ai-advances/i-dont-use-spotify-so-i-built-my-own-ai-dj-8c6054ceee2d'],
                ['title' => '6 Levers to Bring Down the Cost of Running an AI Product', 'category' => 'AI Architecture', 'excerpt' => 'Tokens in, tokens out, you pay for both. Here are six concrete levers — from prompt caching to model routing — to cut the cost of running an LLM-powered product without sacrificing quality.', 'date' => 'February 23, 2026', 'link' => 'https://www.linkedin.com/pulse/6-levers-bring-down-cost-running-ai-product-anna-barto-wbhwe'],
                ['title' => 'When Creative Work Is Product Work', 'category' => 'Product Management', 'excerpt' => 'A producer\'s path to product management, exploring how creative production and PM share the same core loop: understand, design, ship, learn, and iterate.', 'date' => 'January 1, 2026', 'link' => 'https://medium.com/womenintechnology/when-creative-work-is-product-work-ba59267fb1ee'],
                ['title' => 'It Looks Like ChatGPT Learned to Count. It Didn\'t.', 'category' => 'AI Architecture', 'excerpt' => 'LLMs seem much better at counting, but the real story is the shift toward hybrid, tool-augmented AI systems that delegate computational tasks strategically.', 'date' => 'December 18, 2025', 'link' => 'https://www.linkedin.com/pulse/looks-like-chatgpt-learned-count-itdidnt-anna-barto-eohmf/'],
                ['title' => 'How Does a \'Normal\' Company Actually Implement Generative AI?', 'category' => 'MLOps', 'excerpt' => 'Exploring how MLOps platforms like Vertex AI bridge the gap between theory and implementation, enabling ordinary businesses to operationalize generative AI.', 'date' => 'November 13, 2025', 'link' => 'https://www.linkedin.com/pulse/how-does-normal-company-actually-implement-generative-anna-barto-gj3lc/'],
                ['title' => 'AI Disruption Risk Framework', 'category' => 'AI Strategy', 'excerpt' => 'A practical framework for evaluating organizational AI vulnerability, emphasizing that successful AI strategy requires understanding where disruption threatens your competitive position.', 'date' => 'October 19, 2025', 'link' => 'https://www.linkedin.com/posts/anna-barto-product_ai-disruption-risk-framework-activity-7385703481598435328-Vfx2']
            ];
            foreach ($articles as $article):
                $isFeatured = isset($article['featured']) && $article['featured'];
                $isExternal = strpos($article['link'], 'http') === 0;
                $cardClass = $isFeatured ? 'article-card featured' : 'article-card';
                $linkAttrs = $isExternal ? 'target="_blank" rel="noopener noreferrer"' : '';
            ?>
            <article class="<?php echo $cardClass; ?>">
                <div style="display: flex; gap: var(--space-sm); align-items: center; margin-bottom: var(--space-md);">
                    <span class="article-category"><?php echo htmlspecialchars($article['category']); ?></span>
                    <?php if ($isFeatured): ?>
                    <span class="featured-badge">Featured</span>
                    <?php endif; ?>
                </div>
                <h3 class="article-title"><?php echo htmlspecialchars($article['title']); ?></h3>
                <p class="article-excerpt"><?php echo htmlspecialchars($article['excerpt']); ?></p>
                <div class="article-meta">
                    <span class="article-date"><?php echo htmlspecialchars($article['date']); ?></span>
                    <a href="<?php echo htmlspecialchars($article['link']); ?>" <?php echo $linkAttrs; ?> class="article-link">Read More &rarr;</a>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
        <p class="medium-note">
            Some of my essays are also published on <a href="https://medium.com/@annabarto" target="_blank" rel="noopener noreferrer" class="link-accent">Medium</a>.
        </p>
    </section>

    <!-- Capabilities Section -->
    <section id="capabilities" class="section-alt">
        <div class="container-narrow">
            <div class="text-center mb-xl">
                <h2 class="section-title mb-lg">Capabilities</h2>
                <p class="section-subtitle">A snapshot of the product skills and experience I bring to teams turning ideas into real products.</p>
            </div>
            <div class="tabs">
                <button class="tab-btn active" data-tab="skills">Skills</button>
                <button class="tab-btn" data-tab="tools">Tools</button>
                <button class="tab-btn" data-tab="experience">Experience</button>
                <button class="tab-btn" data-tab="certifications">Certifications</button>
                <button class="tab-btn" data-tab="education">Education</button>
                <button class="tab-btn" data-tab="languages">Languages</button>
            </div>
            <div class="tabs-container">
                <!-- Skills Tab -->
                <div id="tab-skills" class="tab-content active">
                    <div class="skills-grid">
                        <?php
                        $skills = [
                            'AI Strategy & Prototyping',
                            'Applied AI Architecture',
                            'Product Strategy & Execution',
                            'Hypothesis-Driven Discovery',
                            '0→1 Product Building',
                            'User & Market Research',
                            'Data Analysis & Basic SQL',
                            'Experimentation',
                            'Growth Strategy',
                            'Cross-Functional Leadership',
                            'Prioritization & Trade-offs',
                            'Agile (Scrum)'
                        ];
                        foreach ($skills as $skill): ?>
                        <div class="skill-card">
                            <span class="skill-name"><?php echo htmlspecialchars($skill); ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- Tools Tab -->
                <div id="tab-tools" class="tab-content">
                    <div class="tools-grid">
                        <?php
                        $tools = [
                            ['category' => 'AI Prototyping & Dev', 'tools' => 'Claude Code, Lovable, Magic Patterns, Streamlit'],
                            ['category' => 'APIs & Backend', 'tools' => 'OpenAI API, Supabase (pgvector), GitHub Actions'],
                            ['category' => 'AI Assistants', 'tools' => 'NotebookLM, Perplexity, ChatGPT'],
                            ['category' => 'Data Analysis', 'tools' => 'SQL (PLX)'],
                            ['category' => 'Automation & Collaboration', 'tools' => 'Relay.app, Airtable, Notion, Miro, Asana'],
                            ['category' => 'Analytics & Performance', 'tools' => 'Google Analytics, PostHog, YouTube Analytics, Optimizely'],
                            ['category' => 'Bug Tracking & Documentation', 'tools' => 'Buganizer, g3doc, Google Sites'],
                            ['category' => 'Design & Digital Assets', 'tools' => 'Adobe Suite (Basic), Canva, Artlist, Frame.io, Iconik.io'],
                            ['category' => 'Content & Media Systems', 'tools' => 'YouTube CMS, Content ID'],
                        ];
                        foreach ($tools as $tool): ?>
                        <div class="tool-card">
                            <div class="tool-category"><?php echo htmlspecialchars($tool['category']); ?></div>
                            <div class="tool-list"><?php echo htmlspecialchars($tool['tools']); ?></div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- Experience Tab -->
                <div id="tab-experience" class="tab-content">
                    <table class="data-table">
                        <thead>
                            <tr><th>Year</th><th>Job Title</th><th>Organization</th></tr>
                        </thead>
                        <tbody>
                            <tr><td class="year">2025-Present</td><td>Independent Consultant, Product & Media</td><td>hgs Consultants</td></tr>
                            <tr><td class="year">2025</td><td>Acting Executive Producer (parental leave cover)</td><td>Google Developer Product Marketing (contracted via Randstad Digital Switzerland)</td></tr>
                            <tr><td class="year">2024-2025</td><td>Product Manager</td><td>Moniify</td></tr>
                            <tr><td class="year">2018-2024</td><td>Senior Producer, Media Innovation & Research</td><td>Google Developer Media Lab (contracted via Advanced Systems Group)</td></tr>
                            <tr><td class="year">2016-2017</td><td>Founding Team (Pre-Launch)</td><td>Lafluence</td></tr>
                            <tr><td class="year">2014-2017</td><td>Strategic Partner Manager</td><td>YouTube</td></tr>
                            <tr><td class="year">2014</td><td>Project Manager, Transmedia</td><td>Transform@lab</td></tr>
                            <tr><td class="year">2011-2014</td><td>Audience & Media Strategist, Digital Advertising</td><td>Google</td></tr>
                        </tbody>
                    </table>
                </div>
                <!-- Certifications Tab -->
                <div id="tab-certifications" class="tab-content">
                    <table class="data-table">
                        <thead>
                            <tr><th>Year</th><th>Certification / Course</th><th>Provider</th></tr>
                        </thead>
                        <tbody>
                            <tr><td class="year">2025</td><td>AI Strategy (4-week program)</td><td>Reforge</td></tr>
                            <tr><td class="year">2025</td><td>AI Productivity for Product Managers (4-week program)</td><td>Reforge</td></tr>
                            <tr><td class="year">2025</td><td>Mastering Product Analytics (4-week program)</td><td>Reforge</td></tr>
                            <tr><td class="year">2025</td><td>Certified Scrum Product Owner (CSPO®)</td><td>Scrum Alliance</td></tr>
                            <tr><td class="year">2023</td><td>Virtual Reality & Augmented Reality (2-month program)</td><td>MIT xPRO</td></tr>
                            <tr><td class="year">2022</td><td>Change: How to Turn Uncertainty into Opportunity</td><td>Franklin Covey</td></tr>
                            <tr><td class="year">2021</td><td>The 6 Critical Practices for Leading a Team</td><td>Franklin Covey</td></tr>
                            <tr><td class="year">2015</td><td>App Making for Beginners</td><td>Ravensbourne University London</td></tr>
                        </tbody>
                    </table>
                </div>
                <!-- Education Tab -->
                <div id="tab-education" class="tab-content">
                    <table class="data-table">
                        <thead>
                            <tr><th>Year</th><th>Degree</th><th>University</th></tr>
                        </thead>
                        <tbody>
                            <tr><td class="year">2008-2011</td><td>BSc: Business, Language & Culture (research-based degree taught in English & Spanish)</td><td>Copenhagen Business School (Denmark)</td></tr>
                        </tbody>
                    </table>
                </div>
                <!-- Languages Tab -->
                <div id="tab-languages" class="tab-content">
                    <div class="languages-grid">
                        <?php
                        $languages = [
                            ['name' => 'English', 'flag' => '🇬🇧', 'level' => 'C2', 'color' => 'tag-emerald'],
                            ['name' => 'Czech', 'flag' => '🇨🇿', 'level' => 'C2', 'color' => 'tag-emerald'],
                            ['name' => 'Spanish', 'flag' => '🇪🇸', 'level' => 'B2', 'color' => 'tag-blue'],
                            ['name' => 'German', 'flag' => '🇩🇪', 'level' => 'B1', 'color' => 'tag-amber']
                        ];
                        foreach ($languages as $lang): ?>
                        <div class="language-card">
                            <div class="language-header">
                                <span class="language-flag"><?php echo $lang['flag']; ?></span>
                                <span class="language-name"><?php echo htmlspecialchars($lang['name']); ?></span>
                            </div>
                            <span class="tag <?php echo $lang['color']; ?>"><?php echo htmlspecialchars($lang['level']); ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const tabBtns = document.querySelectorAll('.tab-btn');
        const tabContents = document.querySelectorAll('.tab-content');

        tabBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const tab = this.dataset.tab;
                tabBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                tabContents.forEach(content => content.classList.remove('active'));
                document.getElementById('tab-' + tab).classList.add('active');
            });
        });
    });
    </script>

    <!-- Testimonials Section -->
    <section id="testimonials" class="section">
        <div class="text-center mb-2xl">
            <h2 class="section-title mb-md">Testimonials</h2>
            <p class="section-subtitle">Feedback from my former colleagues, managers, and team members I led.</p>
        </div>
        <div class="testimonials-grid">
            <?php
            $testimonials = [
                ['quote' => "Anna is the ultimate professional and lifts every team she's in! We had a brilliant run launching Moniify at breakneck speeds.", 'author' => 'Mohamad Zaoud', 'title' => 'Co-Founder & Director at Benchmark Capital (former CPO at Moniify)'],
                ['quote' => 'Anna is thoughtful, thorough, and an exceptional manager. She spots opportunities quickly and builds the strongest possible outcome. I still model my management style after hers.', 'author' => 'Becca Loman', 'title' => 'Product Graphics Producer, Apple (former Google Developer Media Lab)'],
                ['quote' => 'Anna combines analytical rigor with rare self-direction. She taught herself SQL to fill a critical data gap and delivered insights that shaped our strategy.', 'author' => 'Andre Nogueira', 'title' => 'Head of Affiliate Operations, TikTok (former YouTube)']
            ];
            foreach ($testimonials as $testimonial): ?>
            <div class="testimonial">
                <div class="testimonial-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M9.983 3v7.391c0 5.704-3.731 9.57-8.983 10.609l-.995-2.151c2.432-.917 3.995-3.638 3.995-5.849h-4v-10h9.983zm14.017 0v7.391c0 5.704-3.748 9.571-9 10.609l-.996-2.151c2.433-.917 3.996-3.638 3.996-5.849h-3.983v-10h9.983z"/>
                    </svg>
                </div>
                <blockquote class="testimonial-quote">"<?php echo htmlspecialchars($testimonial['quote']); ?>"</blockquote>
                <p class="testimonial-author"><?php echo htmlspecialchars($testimonial['author']); ?></p>
                <p class="testimonial-title"><?php echo htmlspecialchars($testimonial['title']); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section-alt">
        <div class="contact">
            <h2 class="contact-title">Let's work together.</h2>
            <p class="contact-text">If you're hiring for a product role or need help with strategy or execution on a project, I'm happy to explore whether we're a good fit.</p>
            <div class="contact-actions">
                <a href="mailto:barto.annie@gmail.com" class="btn btn-primary btn-lg">Get in Touch</a>
                <a href="https://www.linkedin.com/in/anna-barto-product/" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-lg">
                    <svg class="btn-icon" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    LinkedIn
                </a>
            </div>
        </div>
    </section>
</main>

<?php require_once '../includes/footer.php'; ?>
