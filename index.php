<?php
$pageTitle = 'Product Strategy & Media Innovation';
require_once 'includes/header.php';
?>
<div class="w-full min-h-screen bg-warm-beige text-deep-espresso font-dm-sans">
    <?php require_once 'includes/navigation.php'; ?>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Hero Section -->
        <section id="about" class="relative h-screen min-h-[600px] -mx-4 sm:-mx-6 lg:-mx-8">
            <div class="h-full flex flex-col md:flex-row">
                <div class="relative w-full md:w-[40%] h-[40vh] md:h-full bg-soft-terracotta/20 flex items-center justify-center md:clip-diagonal">
                    <div class="relative z-10 w-64 h-64 md:w-80 md:h-80">
                        <img src="/public/barto-1.png" alt="Anna Barto" class="w-full h-full object-cover rounded-full shadow-lg">
                    </div>
                    <div class="hidden md:block absolute right-0 top-0 bottom-0 w-[1px] bg-olive-grey/30 transform translate-x-1/2 rotate-[-8deg] origin-center"></div>
                </div>
                <div class="w-full md:w-[60%] flex items-center px-6 sm:px-8 lg:px-16 py-12 md:py-0 bg-warm-beige">
                    <div class="max-w-2xl space-y-6">
                        <h1 class="font-outfit text-4xl md:text-5xl lg:text-6xl font-bold text-deep-espresso leading-tight">
                            Anna Barto
                        </h1>
                        <h2 class="text-xl md:text-2xl font-medium text-deep-espresso">
                            Product Strategy & Media Innovation
                        </h2>
                        <p class="text-base md:text-lg text-deep-espresso/90 leading-relaxed">
                            I'm a product manager shaped by a nonlinear path across strategy
                            and partnerships at Google & YouTube, creative production and
                            content R&D at a media lab, and 0&rarr;1 product work in early-stage
                            startups and consulting.
                        </p>
                        <div class="flex flex-wrap gap-3 pt-4">
                            <a href="#portfolio" class="px-4 py-2 bg-soft-terracotta hover:bg-soft-terracotta/90 text-white rounded-button transition-colors font-medium flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                View Portfolio
                            </a>
                            <a href="#" class="px-4 py-2 bg-soft-terracotta hover:bg-soft-terracotta/90 text-white rounded-button transition-colors font-medium flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                                Download CV
                            </a>
                            <a href="https://www.linkedin.com/in/anna-barto-product/" target="_blank" rel="noopener noreferrer" class="px-4 py-2 bg-soft-terracotta hover:bg-soft-terracotta/90 text-white rounded-button transition-colors font-medium flex items-center gap-2">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                                LinkedIn
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Logo Strip -->
        <section class="py-16 border-t border-olive-grey/10">
            <div class="text-center mb-10">
                <p class="text-olive-grey/70 uppercase tracking-wider text-sm font-medium">Worked with</p>
            </div>
            <div class="flex flex-wrap justify-center gap-8 md:gap-16">
                <div class="h-8 md:h-10 flex items-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/2560px-Google_2015_logo.svg.png" alt="Google" class="h-full object-contain opacity-50 grayscale">
                </div>
                <div class="h-8 md:h-10 flex items-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e1/Logo_of_YouTube_%282015-2017%29.svg/2560px-Logo_of_YouTube_%282015-2017%29.svg.png" alt="YouTube" class="h-full object-contain opacity-50 grayscale">
                </div>
                <div class="h-6 md:h-7 flex items-center">
                    <img src="/public/MONIIFY_Logo-2.png" alt="Moniify" class="h-full object-contain opacity-50 grayscale">
                </div>
                <div class="h-10 md:h-12 flex items-center">
                    <img src="/public/unnamed.png" alt="HGS Consultants" class="h-full object-contain opacity-50 grayscale">
                </div>
                <div class="h-8 md:h-10 flex items-center">
                    <img src="/public/unnamed_%281%29.png" alt="Transform Lab" class="h-full object-contain opacity-50 grayscale">
                </div>
            </div>
        </section>

        <!-- Portfolio Section -->
        <section id="portfolio" class="py-20">
            <div class="text-center mb-16">
                <h2 class="font-outfit text-3xl md:text-4xl font-bold text-deep-espresso mb-3">Product Portfolio</h2>
                <p class="text-lg text-deep-espresso/70">Selected work in strategy, discovery, experimentation, and 0&rarr;1 building.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
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
                        'description' => "Led Google's early AI-dubbing experiment for developer content, testing multilingual synthetic audio using Universal Translator. AI dubbing achieved ~3× higher adoption than subtitles and expanded reach across key markets.",
                        'tags' => ['AI Experimentation', 'Accessibility'],
                        'image' => '/public/cd39daee-6f59-4f2f-8cf0-57159d8faf59.jpg',
                        'link' => null
                    ],
                    [
                        'title' => 'Developer Audience Insights Study (Google)',
                        'description' => 'Designed and ran a 387-response user study (≈95% confidence for 210k UMV), revealing audience needs that doubled reach and boosted engagement ~20% with zero paid promotion.',
                        'tags' => ['User Research', 'Data-Informed Strategy'],
                        'image' => '/public/22d28a67-69f2-4a30-b34e-e18acc9a5905.jpg',
                        'link' => null
                    ],
                    [
                        'title' => 'Cross-Platform Delivery & Discoverability (Google)',
                        'description' => "Built the delivery and discovery system for Google's Search Off the Record podcast. Addressed cross-platform UI constraints, distribution latency, and accessibility gaps. Discoverability experiments grew downloads ~400%.",
                        'tags' => ['Platform Constraints', 'Product Discoverability'],
                        'image' => '/public/99c400fa-3d3f-470e-80b4-f9b521d39a42.jpg',
                        'link' => null
                    ],
                    [
                        'title' => 'Creator Crowdfunding Product Discovery (YouTube)',
                        'description' => 'Led a hypothesis-driven discovery on creator crowdfunding, combining SQL data mining with global market research. Built internal tooling, playbooks, and an external course.',
                        'tags' => ['Creator Monetization', 'Product Discovery'],
                        'image' => '/public/052b2e21-868c-4771-9b4c-741580b7195e.jpg',
                        'link' => null
                    ]
                ];
                foreach ($projects as $project): ?>
                <div class="bg-light-beige border border-olive-grey/20 rounded-card overflow-hidden shadow-soft transition-transform hover:translate-y-[-4px]">
                    <div class="h-48 overflow-hidden">
                        <img src="<?php echo $project['image']; ?>" alt="<?php echo htmlspecialchars($project['title']); ?>" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="font-outfit text-xl font-bold mb-3"><?php echo htmlspecialchars($project['title']); ?></h3>
                        <div class="flex flex-wrap gap-2 mb-3">
                            <?php foreach ($project['tags'] as $tag): ?>
                            <span class="text-xs px-3 py-1 bg-soft-terracotta/10 text-soft-terracotta rounded-full"><?php echo htmlspecialchars($tag); ?></span>
                            <?php endforeach; ?>
                        </div>
                        <p class="text-deep-espresso/80 mb-4"><?php echo htmlspecialchars($project['description']); ?></p>
                        <?php if ($project['link']): ?>
                        <a href="<?php echo $project['link']; ?>" class="inline-block text-soft-terracotta border-b border-soft-terracotta hover:text-soft-terracotta/80 transition-colors">Read Case Study &rarr;</a>
                        <?php else: ?>
                        <a href="#" class="inline-block text-soft-terracotta border-b border-soft-terracotta hover:text-soft-terracotta/80 transition-colors">Read Case Study &rarr;</a>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Writing Section -->
        <section id="writing" class="py-20 relative">
            <div class="absolute -z-10 top-40 left-20 w-64 h-64 rounded-full bg-light-beige opacity-50"></div>
            <div class="absolute -z-10 bottom-20 right-40 w-80 h-80 rounded-full bg-light-beige opacity-30"></div>
            <div class="text-center mb-16">
                <h2 class="font-outfit text-3xl md:text-4xl font-bold text-deep-espresso mb-4">Writing</h2>
                <p class="text-deep-espresso/70 text-lg max-w-2xl mx-auto">Thoughts on product, media, AI, and the things I'm curious about.</p>
            </div>
            <div class="relative">
                <div id="articles-container" class="flex gap-6 overflow-x-auto scrollbar-hide scroll-smooth px-4 md:px-12">
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
                    <div class="flex-shrink-0 w-[85vw] sm:w-[70vw] md:w-[45vw] lg:w-[30vw] bg-white border border-olive-grey/10 rounded-card overflow-hidden shadow-soft p-6">
                        <div class="mb-4">
                            <span class="inline-block px-4 py-1 bg-soft-terracotta/10 text-soft-terracotta rounded-full text-sm"><?php echo htmlspecialchars($article['category']); ?></span>
                        </div>
                        <h3 class="font-outfit text-xl font-bold mb-3"><?php echo htmlspecialchars($article['title']); ?></h3>
                        <p class="text-deep-espresso/80 mb-4"><?php echo htmlspecialchars($article['excerpt']); ?></p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-olive-grey"><?php echo htmlspecialchars($article['date']); ?></span>
                            <a href="#" class="text-soft-terracotta hover:text-soft-terracotta/80 transition-colors text-sm font-medium">Read Article &rarr;</a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="text-center mt-8">
                <p class="text-deep-espresso/70 text-sm">
                    Some essays are also published on
                    <a href="https://medium.com/@annabarto" target="_blank" rel="noopener noreferrer" class="text-soft-terracotta hover:text-soft-terracotta/80 transition-colors font-medium">Medium</a>.
                </p>
            </div>
        </section>

        <!-- Capabilities Section -->
        <section id="capabilities" class="py-20 bg-light-beige -mx-4 sm:-mx-6 lg:-mx-8 px-4 sm:px-6 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="font-outfit text-3xl md:text-4xl font-bold text-deep-espresso mb-6">Capabilities</h2>
                    <p class="text-deep-espresso/80 max-w-2xl mx-auto">A snapshot of the product skills and experience I bring to teams turning ideas into real products.</p>
                </div>
                <div class="flex flex-wrap justify-center gap-2 mb-10">
                    <button class="tab-btn px-6 py-2 rounded-full transition-colors capitalize bg-soft-terracotta text-white" data-tab="skills">Skills</button>
                    <button class="tab-btn px-6 py-2 rounded-full transition-colors capitalize bg-olive-grey/20 text-olive-grey hover:bg-olive-grey/30" data-tab="tools">Tools</button>
                    <button class="tab-btn px-6 py-2 rounded-full transition-colors capitalize bg-olive-grey/20 text-olive-grey hover:bg-olive-grey/30" data-tab="experience">Experience</button>
                    <button class="tab-btn px-6 py-2 rounded-full transition-colors capitalize bg-olive-grey/20 text-olive-grey hover:bg-olive-grey/30" data-tab="certifications">Certifications</button>
                    <button class="tab-btn px-6 py-2 rounded-full transition-colors capitalize bg-olive-grey/20 text-olive-grey hover:bg-olive-grey/30" data-tab="education">Education</button>
                    <button class="tab-btn px-6 py-2 rounded-full transition-colors capitalize bg-olive-grey/20 text-olive-grey hover:bg-olive-grey/30" data-tab="languages">Languages</button>
                </div>
                <div class="bg-white rounded-card p-8 shadow-soft">
                    <!-- Skills Tab -->
                    <div id="tab-skills" class="tab-content">
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                            <?php
                            $skills = [
                                ['name' => 'Product Strategy & Roadmapping', 'category' => 'Soft skills', 'color' => 'bg-purple-100 text-purple-800'],
                                ['name' => 'User Research & Experience Design', 'category' => 'Soft skills', 'color' => 'bg-purple-100 text-purple-800'],
                                ['name' => 'Agile & Lean Methodologies', 'category' => 'Soft skills', 'color' => 'bg-purple-100 text-purple-800'],
                                ['name' => 'Data-Driven Decision Making', 'category' => 'Hard skills', 'color' => 'bg-amber-100 text-amber-800'],
                                ['name' => 'Cross-functional Team Leadership', 'category' => 'Soft skills', 'color' => 'bg-purple-100 text-purple-800'],
                                ['name' => 'Content Strategy & Development', 'category' => 'Soft skills', 'color' => 'bg-purple-100 text-purple-800'],
                                ['name' => 'Platform Ecosystem Building', 'category' => 'Hard skills', 'color' => 'bg-amber-100 text-amber-800'],
                                ['name' => 'Growth & Monetization Strategy', 'category' => 'Hard skills', 'color' => 'bg-amber-100 text-amber-800'],
                                ['name' => 'Time Management', 'category' => 'Soft skills', 'color' => 'bg-purple-100 text-purple-800'],
                                ['name' => 'Design Systems', 'category' => 'Hard skills', 'color' => 'bg-amber-100 text-amber-800'],
                                ['name' => 'Wireframing & Prototyping', 'category' => 'Hard skills', 'color' => 'bg-amber-100 text-amber-800'],
                                ['name' => 'Communication', 'category' => 'Soft skills', 'color' => 'bg-purple-100 text-purple-800']
                            ];
                            foreach ($skills as $skill): ?>
                            <div class="flex flex-col p-4 bg-warm-beige/50 rounded-lg border border-olive-grey/10 hover:border-olive-grey/20 transition-colors">
                                <h3 class="font-semibold text-deep-espresso text-sm mb-3"><?php echo htmlspecialchars($skill['name']); ?></h3>
                                <span class="inline-block px-3 py-1 rounded-full text-xs font-medium <?php echo $skill['color']; ?> self-start"><?php echo htmlspecialchars($skill['category']); ?></span>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- Tools Tab -->
                    <div id="tab-tools" class="tab-content hidden">
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                            <?php
                            $tools = [
                                ['name' => 'Figma', 'proficiency' => 'Advanced', 'color' => 'bg-amber-100 text-amber-800'],
                                ['name' => 'Adobe Creative Suite', 'proficiency' => 'Advanced', 'color' => 'bg-amber-100 text-amber-800'],
                                ['name' => 'JIRA', 'proficiency' => 'Confident', 'color' => 'bg-blue-100 text-blue-800'],
                                ['name' => 'Confluence', 'proficiency' => 'Confident', 'color' => 'bg-blue-100 text-blue-800'],
                                ['name' => 'Google Analytics', 'proficiency' => 'Advanced', 'color' => 'bg-amber-100 text-amber-800'],
                                ['name' => 'Data Studio', 'proficiency' => 'Confident', 'color' => 'bg-blue-100 text-blue-800'],
                                ['name' => 'Amplitude', 'proficiency' => 'Confident', 'color' => 'bg-blue-100 text-blue-800'],
                                ['name' => 'Mixpanel', 'proficiency' => 'Confident', 'color' => 'bg-blue-100 text-blue-800'],
                                ['name' => 'Notion', 'proficiency' => 'Advanced', 'color' => 'bg-amber-100 text-amber-800'],
                                ['name' => 'Airtable', 'proficiency' => 'Confident', 'color' => 'bg-blue-100 text-blue-800'],
                                ['name' => 'Miro', 'proficiency' => 'Advanced', 'color' => 'bg-amber-100 text-amber-800'],
                                ['name' => 'FigJam', 'proficiency' => 'Confident', 'color' => 'bg-blue-100 text-blue-800'],
                                ['name' => 'GitHub', 'proficiency' => 'Basic', 'color' => 'bg-slate-100 text-slate-800'],
                                ['name' => 'Optimizely', 'proficiency' => 'Confident', 'color' => 'bg-blue-100 text-blue-800'],
                                ['name' => 'A/B Testing Platforms', 'proficiency' => 'Advanced', 'color' => 'bg-amber-100 text-amber-800']
                            ];
                            foreach ($tools as $tool): ?>
                            <div class="flex items-start justify-between p-4 bg-warm-beige/50 rounded-lg border border-olive-grey/10 hover:border-olive-grey/20 transition-colors">
                                <div class="flex-1">
                                    <h3 class="font-semibold text-deep-espresso mb-2"><?php echo htmlspecialchars($tool['name']); ?></h3>
                                    <span class="inline-block px-3 py-1 rounded-full text-xs font-medium <?php echo $tool['color']; ?>"><?php echo htmlspecialchars($tool['proficiency']); ?></span>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- Experience Tab -->
                    <div id="tab-experience" class="tab-content hidden">
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                    <tr class="border-b border-olive-grey/20">
                                        <th class="text-left py-3 px-4 font-semibold text-deep-espresso">Year</th>
                                        <th class="text-left py-3 px-4 font-semibold text-deep-espresso">Job Title</th>
                                        <th class="text-left py-3 px-4 font-semibold text-deep-espresso">Organization</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b border-olive-grey/10"><td class="py-3 px-4 text-olive-grey">2019-2023</td><td class="py-3 px-4">Senior Product Manager</td><td class="py-3 px-4">Google</td></tr>
                                    <tr class="border-b border-olive-grey/10"><td class="py-3 px-4 text-olive-grey">2017-2019</td><td class="py-3 px-4">Product Lead, YouTube Creator Platform</td><td class="py-3 px-4">YouTube</td></tr>
                                    <tr class="border-b border-olive-grey/10"><td class="py-3 px-4 text-olive-grey">2015-2017</td><td class="py-3 px-4">Product Strategy Consultant</td><td class="py-3 px-4">Media Lab</td></tr>
                                    <tr class="border-b border-olive-grey/10"><td class="py-3 px-4 text-olive-grey">2013-2015</td><td class="py-3 px-4">Product Manager</td><td class="py-3 px-4">Early-stage Startup</td></tr>
                                    <tr class="border-b border-olive-grey/10"><td class="py-3 px-4 text-olive-grey">2011-2013</td><td class="py-3 px-4">Content Strategy Lead</td><td class="py-3 px-4">Digital Agency</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Certifications Tab -->
                    <div id="tab-certifications" class="tab-content hidden">
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                    <tr class="border-b border-olive-grey/20">
                                        <th class="text-left py-3 px-4 font-semibold text-deep-espresso">Year</th>
                                        <th class="text-left py-3 px-4 font-semibold text-deep-espresso">Certification / Course</th>
                                        <th class="text-left py-3 px-4 font-semibold text-deep-espresso">Provider</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b border-olive-grey/10"><td class="py-3 px-4 text-olive-grey">2022</td><td class="py-3 px-4">Professional Scrum Product Owner (PSPO)</td><td class="py-3 px-4">Scrum.org</td></tr>
                                    <tr class="border-b border-olive-grey/10"><td class="py-3 px-4 text-olive-grey">2021</td><td class="py-3 px-4">Google Analytics Certification</td><td class="py-3 px-4">Google</td></tr>
                                    <tr class="border-b border-olive-grey/10"><td class="py-3 px-4 text-olive-grey">2020</td><td class="py-3 px-4">Product Management Certification</td><td class="py-3 px-4">Product School</td></tr>
                                    <tr class="border-b border-olive-grey/10"><td class="py-3 px-4 text-olive-grey">2019</td><td class="py-3 px-4">UX Design Professional Certificate</td><td class="py-3 px-4">Google</td></tr>
                                    <tr class="border-b border-olive-grey/10"><td class="py-3 px-4 text-olive-grey">2018</td><td class="py-3 px-4">Advanced Leadership Program</td><td class="py-3 px-4">Berkeley Haas</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Education Tab -->
                    <div id="tab-education" class="tab-content hidden">
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                    <tr class="border-b border-olive-grey/20">
                                        <th class="text-left py-3 px-4 font-semibold text-deep-espresso">Year</th>
                                        <th class="text-left py-3 px-4 font-semibold text-deep-espresso">Degree</th>
                                        <th class="text-left py-3 px-4 font-semibold text-deep-espresso">University</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b border-olive-grey/10"><td class="py-3 px-4 text-olive-grey">2009-2011</td><td class="py-3 px-4">MBA</td><td class="py-3 px-4">Stanford Graduate School of Business</td></tr>
                                    <tr class="border-b border-olive-grey/10"><td class="py-3 px-4 text-olive-grey">2005-2009</td><td class="py-3 px-4">B.A. in Communication & Media Studies</td><td class="py-3 px-4">Columbia University</td></tr>
                                    <tr class="border-b border-olive-grey/10"><td class="py-3 px-4 text-olive-grey">2017</td><td class="py-3 px-4">Executive Education in Design Thinking</td><td class="py-3 px-4">IDEO</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Languages Tab -->
                    <div id="tab-languages" class="tab-content hidden">
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                            <?php
                            $languages = [
                                ['name' => 'English', 'flag' => '🇬🇧', 'level' => 'C2', 'color' => 'bg-emerald-100 text-emerald-800'],
                                ['name' => 'Czech', 'flag' => '🇨🇿', 'level' => 'C2', 'color' => 'bg-emerald-100 text-emerald-800'],
                                ['name' => 'Spanish', 'flag' => '🇪🇸', 'level' => 'B2', 'color' => 'bg-blue-100 text-blue-800'],
                                ['name' => 'German', 'flag' => '🇩🇪', 'level' => 'B1', 'color' => 'bg-amber-100 text-amber-800']
                            ];
                            foreach ($languages as $lang): ?>
                            <div class="flex flex-col p-5 bg-warm-beige/50 rounded-lg border border-olive-grey/10 hover:border-olive-grey/20 transition-colors">
                                <div class="flex items-center gap-3 mb-3">
                                    <span class="text-2xl"><?php echo $lang['flag']; ?></span>
                                    <h3 class="font-semibold text-deep-espresso"><?php echo htmlspecialchars($lang['name']); ?></h3>
                                </div>
                                <span class="inline-block px-3 py-1 rounded-full text-xs font-medium <?php echo $lang['color']; ?> self-start"><?php echo htmlspecialchars($lang['level']); ?></span>
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

                    tabBtns.forEach(b => {
                        b.classList.remove('bg-soft-terracotta', 'text-white');
                        b.classList.add('bg-olive-grey/20', 'text-olive-grey', 'hover:bg-olive-grey/30');
                    });
                    this.classList.remove('bg-olive-grey/20', 'text-olive-grey', 'hover:bg-olive-grey/30');
                    this.classList.add('bg-soft-terracotta', 'text-white');

                    tabContents.forEach(content => content.classList.add('hidden'));
                    document.getElementById('tab-' + tab).classList.remove('hidden');
                });
            });
        });
        </script>

        <!-- Testimonials Section -->
        <section id="testimonials" class="py-20">
            <div class="text-center mb-16">
                <h2 class="font-outfit text-3xl md:text-4xl font-bold text-deep-espresso mb-4">Testimonials</h2>
                <p class="text-deep-espresso/70 text-lg max-w-2xl mx-auto">Feedback from my former colleagues, managers, and team members I led.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php
                $testimonials = [
                    ['quote' => "Anna is the ultimate professional and lifts every team she's in! We had a brilliant run launching Moniify at breakneck speeds.", 'author' => 'Mohamad Zaoud', 'title' => 'Co-Founder & Director at Benchmark Capital (former CPO at Moniify)'],
                    ['quote' => 'Anna is thoughtful, thorough, and an exceptional manager. She spots opportunities quickly and builds the strongest possible outcome. I still model my management style after hers.', 'author' => 'Becca Loman', 'title' => 'Product Graphics Producer, Apple (former Google Developer Media Lab)'],
                    ['quote' => 'Anna combines analytical rigor with rare self-direction. She taught herself SQL to fill a critical data gap and delivered insights that shaped our strategy. She excels at turning ambiguity into clarity.', 'author' => 'Andre Nogueira', 'title' => 'Head of Affiliate Operations, TikTok (former YouTube)']
                ];
                foreach ($testimonials as $testimonial): ?>
                <div class="bg-light-beige rounded-card p-6 shadow-soft">
                    <div class="mb-4 text-soft-terracotta">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="currentColor" class="opacity-30">
                            <path d="M9.983 3v7.391c0 5.704-3.731 9.57-8.983 10.609l-.995-2.151c2.432-.917 3.995-3.638 3.995-5.849h-4v-10h9.983zm14.017 0v7.391c0 5.704-3.748 9.571-9 10.609l-.996-2.151c2.433-.917 3.996-3.638 3.996-5.849h-3.983v-10h9.983z"/>
                        </svg>
                    </div>
                    <blockquote class="font-outfit text-lg italic mb-6 text-deep-espresso/90">"<?php echo htmlspecialchars($testimonial['quote']); ?>"</blockquote>
                    <div>
                        <p class="font-medium text-deep-espresso"><?php echo htmlspecialchars($testimonial['author']); ?></p>
                        <p class="text-olive-grey text-sm"><?php echo htmlspecialchars($testimonial['title']); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-20 bg-light-beige -mx-4 sm:-mx-6 lg:-mx-8 px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="font-outfit text-3xl md:text-4xl font-bold text-deep-espresso mb-6">Let's work together.</h2>
                <p class="text-deep-espresso/80 mb-10 max-w-2xl mx-auto">If you're hiring for a product role or need help with strategy or execution on a project, I'm happy to explore whether we're a good fit.</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="mailto:barto.annie@gmail.com" class="px-6 py-3 bg-soft-terracotta hover:bg-soft-terracotta/90 text-white rounded-button transition-colors font-medium">Get in Touch</a>
                    <a href="https://www.linkedin.com/in/anna-barto-product/" target="_blank" rel="noopener noreferrer" class="px-6 py-3 bg-soft-terracotta hover:bg-soft-terracotta/90 text-white rounded-button transition-colors font-medium flex items-center gap-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        LinkedIn
                    </a>
                </div>
            </div>
        </section>

        <?php require_once 'includes/footer.php'; ?>
    </main>
</div>
