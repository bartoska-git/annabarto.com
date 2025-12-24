<?php
$pageTitle = 'Product Strategy & Media Innovation';
require_once 'includes/header.php';
require_once 'includes/navigation.php';
?>

<main class="container">
    <!-- Hero Section -->
    <section id="about" class="hero">
        <div class="hero-image-wrapper">
            <img src="/public/barto-1.png" alt="Anna Barto" class="hero-avatar">
        </div>
        <div class="hero-content">
            <div class="hero-inner">
                <h1 class="hero-title">Anna Barto</h1>
                <h2 class="hero-subtitle">Product Strategy & Media Innovation</h2>
                <p class="hero-description">
                    I'm a product manager shaped by a nonlinear path across strategy
                    and partnerships at Google & YouTube, creative production and
                    content R&D at a media lab, and 0&rarr;1 product work in early-stage
                    startups and consulting.
                </p>
                <div class="hero-actions">
                    <a href="#portfolio" class="btn btn-primary">
                        <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        View Portfolio
                    </a>
                    <a href="#" class="btn btn-primary">
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
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/2560px-Google_2015_logo.svg.png" alt="Google" class="logo-strip-logo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e1/Logo_of_YouTube_%282015-2017%29.svg/2560px-Logo_of_YouTube_%282015-2017%29.svg.png" alt="YouTube" class="logo-strip-logo">
            <img src="/public/MONIIFY_Logo-2.png" alt="Moniify" class="logo-strip-logo logo-strip-logo-sm">
            <img src="/public/unnamed.png" alt="HGS Consultants" class="logo-strip-logo">
            <img src="/public/unnamed_%281%29.png" alt="Transform Lab" class="logo-strip-logo">
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="section">
        <div class="text-center mb-2xl">
            <h2 class="section-title mb-md">Product Portfolio</h2>
            <p class="section-subtitle">Selected work in strategy, discovery, experimentation, and 0&rarr;1 building.</p>
        </div>
        <div class="grid grid-3">
            <?php
            $projects = [
                [
                    'title' => 'Building 0→1 Products (Moniify)',
                    'description' => 'Built 3 products from zero and led 20+ hybrid team in a next-gen business media startup. Each product addressed a distinct audience and market opportunity.',
                    'tags' => ['Product Strategy', 'Early-Stage'],
                    'image' => '/public/6631043b-6410-455a-9938-9d6e1eb8ca40.jpg',
                    'link' => '/case-study/moniify.php'
                ],
                [
                    'title' => 'Custom Airtable App (Moniify)',
                    'description' => 'Designed a low-code Airtable app that automated 10K+ annual handoffs across 700+ video workflows, connecting internal teams and agencies in real time.',
                    'tags' => ['Workflow Automation', 'Internal Tools'],
                    'image' => '/public/622ab1d7-e27c-474d-84a6-ea33c89e469d.jpg',
                    'link' => '/case-study/airtable-app.php'
                ],
                [
                    'title' => 'AI Dubbing Experiment (Google)',
                    'description' => "Led Google's early AI-dubbing experiment for developer content, testing multilingual synthetic audio using Universal Translator. AI dubbing achieved ~3× higher adoption than subtitles.",
                    'tags' => ['AI Experimentation', 'Accessibility'],
                    'image' => '/public/cd39daee-6f59-4f2f-8cf0-57159d8faf59.jpg',
                    'link' => null
                ],
                [
                    'title' => 'Developer Audience Insights Study (Google)',
                    'description' => 'Designed and ran a 387-response user study (≈95% confidence for 210k UMV), revealing audience needs that doubled reach and boosted engagement ~20%.',
                    'tags' => ['User Research', 'Data-Informed Strategy'],
                    'image' => '/public/22d28a67-69f2-4a30-b34e-e18acc9a5905.jpg',
                    'link' => null
                ],
                [
                    'title' => 'Cross-Platform Delivery & Discoverability (Google)',
                    'description' => "Built the delivery and discovery system for Google's Search Off the Record podcast. Discoverability experiments grew downloads ~400%.",
                    'tags' => ['Platform Constraints', 'Product Discoverability'],
                    'image' => '/public/99c400fa-3d3f-470e-80b4-f9b521d39a42.jpg',
                    'link' => null
                ],
                [
                    'title' => 'Creator Crowdfunding Product Discovery (YouTube)',
                    'description' => 'Led a hypothesis-driven discovery on creator crowdfunding, combining SQL data mining with global market research.',
                    'tags' => ['Creator Monetization', 'Product Discovery'],
                    'image' => '/public/052b2e21-868c-4771-9b4c-741580b7195e.jpg',
                    'link' => null
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
            <p class="section-subtitle">Thoughts on product, media, AI, and the things I'm curious about.</p>
        </div>
        <div class="articles-scroll">
            <?php
            $articles = [
                ['title' => 'When Creative Work Is Product Work', 'category' => 'Product Strategy', 'excerpt' => 'Exploring the intersection of creative processes and product development methodologies.', 'date' => 'June 12, 2023'],
                ['title' => 'Building Products That Scale With User Needs', 'category' => 'Product Development', 'excerpt' => 'How to design flexible systems that evolve with your user base and their changing requirements.', 'date' => 'April 3, 2023'],
                ['title' => 'The Future of Media Platforms', 'category' => 'Industry Insights', 'excerpt' => 'Predictions and analysis of emerging trends in media consumption and creator economies.', 'date' => 'February 18, 2023'],
                ['title' => 'Data-Driven Product Decisions', 'category' => 'Product Strategy', 'excerpt' => 'How to leverage analytics and user research to make informed product choices.', 'date' => 'January 8, 2023'],
                ['title' => 'The Art of Saying No', 'category' => 'Product Management', 'excerpt' => 'Why strategic prioritization and focus are essential skills for product managers.', 'date' => 'December 15, 2022'],
                ['title' => 'AI and the Future of Content', 'category' => 'Industry Insights', 'excerpt' => 'Examining how artificial intelligence is reshaping content creation and distribution.', 'date' => 'November 22, 2022']
            ];
            foreach ($articles as $article): ?>
            <article class="article-card">
                <span class="article-category"><?php echo htmlspecialchars($article['category']); ?></span>
                <h3 class="article-title"><?php echo htmlspecialchars($article['title']); ?></h3>
                <p class="article-excerpt"><?php echo htmlspecialchars($article['excerpt']); ?></p>
                <div class="article-meta">
                    <span class="article-date"><?php echo htmlspecialchars($article['date']); ?></span>
                    <a href="#" class="article-link">Read Article &rarr;</a>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
        <p class="medium-note">
            Some essays are also published on <a href="https://medium.com/@annabarto" target="_blank" rel="noopener noreferrer" class="link-accent">Medium</a>.
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
                            ['name' => 'Product Strategy & Roadmapping', 'category' => 'Soft skills', 'color' => 'tag-purple'],
                            ['name' => 'User Research & Experience Design', 'category' => 'Soft skills', 'color' => 'tag-purple'],
                            ['name' => 'Agile & Lean Methodologies', 'category' => 'Soft skills', 'color' => 'tag-purple'],
                            ['name' => 'Data-Driven Decision Making', 'category' => 'Hard skills', 'color' => 'tag-amber'],
                            ['name' => 'Cross-functional Team Leadership', 'category' => 'Soft skills', 'color' => 'tag-purple'],
                            ['name' => 'Content Strategy & Development', 'category' => 'Soft skills', 'color' => 'tag-purple'],
                            ['name' => 'Platform Ecosystem Building', 'category' => 'Hard skills', 'color' => 'tag-amber'],
                            ['name' => 'Growth & Monetization Strategy', 'category' => 'Hard skills', 'color' => 'tag-amber'],
                            ['name' => 'Time Management', 'category' => 'Soft skills', 'color' => 'tag-purple'],
                            ['name' => 'Design Systems', 'category' => 'Hard skills', 'color' => 'tag-amber'],
                            ['name' => 'Wireframing & Prototyping', 'category' => 'Hard skills', 'color' => 'tag-amber'],
                            ['name' => 'Communication', 'category' => 'Soft skills', 'color' => 'tag-purple']
                        ];
                        foreach ($skills as $skill): ?>
                        <div class="skill-card">
                            <span class="skill-name"><?php echo htmlspecialchars($skill['name']); ?></span>
                            <span class="tag <?php echo $skill['color']; ?>"><?php echo htmlspecialchars($skill['category']); ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- Tools Tab -->
                <div id="tab-tools" class="tab-content">
                    <div class="tools-grid">
                        <?php
                        $tools = [
                            ['name' => 'Figma', 'proficiency' => 'Advanced', 'color' => 'tag-amber'],
                            ['name' => 'Adobe Creative Suite', 'proficiency' => 'Advanced', 'color' => 'tag-amber'],
                            ['name' => 'JIRA', 'proficiency' => 'Confident', 'color' => 'tag-blue'],
                            ['name' => 'Confluence', 'proficiency' => 'Confident', 'color' => 'tag-blue'],
                            ['name' => 'Google Analytics', 'proficiency' => 'Advanced', 'color' => 'tag-amber'],
                            ['name' => 'Data Studio', 'proficiency' => 'Confident', 'color' => 'tag-blue'],
                            ['name' => 'Amplitude', 'proficiency' => 'Confident', 'color' => 'tag-blue'],
                            ['name' => 'Mixpanel', 'proficiency' => 'Confident', 'color' => 'tag-blue'],
                            ['name' => 'Notion', 'proficiency' => 'Advanced', 'color' => 'tag-amber'],
                            ['name' => 'Airtable', 'proficiency' => 'Confident', 'color' => 'tag-blue'],
                            ['name' => 'Miro', 'proficiency' => 'Advanced', 'color' => 'tag-amber'],
                            ['name' => 'FigJam', 'proficiency' => 'Confident', 'color' => 'tag-blue'],
                            ['name' => 'GitHub', 'proficiency' => 'Basic', 'color' => 'tag-slate'],
                            ['name' => 'Optimizely', 'proficiency' => 'Confident', 'color' => 'tag-blue'],
                            ['name' => 'A/B Testing Platforms', 'proficiency' => 'Advanced', 'color' => 'tag-amber']
                        ];
                        foreach ($tools as $tool): ?>
                        <div class="tool-card">
                            <span class="tool-name"><?php echo htmlspecialchars($tool['name']); ?></span>
                            <span class="tag <?php echo $tool['color']; ?>"><?php echo htmlspecialchars($tool['proficiency']); ?></span>
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
                            <tr><td class="year">2019-2023</td><td>Senior Product Manager</td><td>Google</td></tr>
                            <tr><td class="year">2017-2019</td><td>Product Lead, YouTube Creator Platform</td><td>YouTube</td></tr>
                            <tr><td class="year">2015-2017</td><td>Product Strategy Consultant</td><td>Media Lab</td></tr>
                            <tr><td class="year">2013-2015</td><td>Product Manager</td><td>Early-stage Startup</td></tr>
                            <tr><td class="year">2011-2013</td><td>Content Strategy Lead</td><td>Digital Agency</td></tr>
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
                            <tr><td class="year">2022</td><td>Professional Scrum Product Owner (PSPO)</td><td>Scrum.org</td></tr>
                            <tr><td class="year">2021</td><td>Google Analytics Certification</td><td>Google</td></tr>
                            <tr><td class="year">2020</td><td>Product Management Certification</td><td>Product School</td></tr>
                            <tr><td class="year">2019</td><td>UX Design Professional Certificate</td><td>Google</td></tr>
                            <tr><td class="year">2018</td><td>Advanced Leadership Program</td><td>Berkeley Haas</td></tr>
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
                            <tr><td class="year">2009-2011</td><td>MBA</td><td>Stanford Graduate School of Business</td></tr>
                            <tr><td class="year">2005-2009</td><td>B.A. in Communication & Media Studies</td><td>Columbia University</td></tr>
                            <tr><td class="year">2017</td><td>Executive Education in Design Thinking</td><td>IDEO</td></tr>
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

<?php require_once 'includes/footer.php'; ?>
