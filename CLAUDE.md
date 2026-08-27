# CLAUDE.md

## Project Overview

Anna Barto's portfolio website - a simple PHP site with clean URLs on Apache.

## Homepage Restructure (August 2026, mento.co mentor feedback)

The homepage was stripped down to lead with work, per mentor feedback:

- **Hero**: Subtitle is "Product Manager · Content, Media & AI"; tagline is "Ex-Google & YouTube. I do my best work where there's no playbook." (Differentiator: thrives where there's no playbook, chaos → tangible. The longer "...turning ambiguous opportunities into shipped products" clause lives only in `$ogDescription`.) Hero buttons are Download CV + LinkedIn only — "View My Work" was removed (mentor questioned it; work is one scroll away and in the nav).
- **"More about my journey" link removed** from hero.
- **About page hidden, not deleted**: still live at `/about`, but nav links are commented out in `www/includes/navigation.php` (desktop + mobile) for easy restore.
- **Section order**: Case Studies (`#portfolio`) now come BEFORE AI Builds (`#ai-builds`) — case studies are "real work"; nav order matches.
- **Capabilities Skills tab**: restyled as 4 grouped category cards (2×2, reusing `.tool-card`/`.tools-grid` with the `.tools-grid-2col` modifier) so it matches the Tools tab visually and doesn't look clickable. Groups: Product Strategy & Discovery / AI & 0→1 Building / Media & Growth / Leadership & Execution. The Media & Growth group (Creator Ecosystems & Monetization, Content & Media Platforms, Growth Strategy, Go-to-Market Strategy) was added deliberately to back up the "Content, Media & AI" positioning. The old `.skill-card`/`.skills-grid` CSS was removed.
- **Certifications**: "CAS in Applied Machine Learning & Information Processing (one-semester program; admitted, starts Sept 2026)" at ETH Zürich (with umlaut; "ETH" dropped from the course title on the site since the Provider column already says ETH Zürich — the formal name "CAS ETH AMI" can still be used on the CV) added at top (selective admission; per Anna it runs Sep 11 – ~Dec 11 2026, final exam Module 5 Reinforcement Learning on Dec 11, hence "one-semester" not "4-month"; https://mas-at.ethz.ch/cas-programs/cas1.html). "App Making for Beginners" (Ravensbourne, 2015) removed as too junior next to the rest.
- **Pending (per Anna, Aug 2026)**: a new CV version incorporating mentor feedback is needed once the homepage look is finalized — the CV still has the old hgs org, old subtitle, old skills, no ETH CAS, German at B1.
- **Languages**: German is B2 (blue tag) as of Aug 2026.
- **Testimonials**: kept deliberately.
- **Experience table**: current role reads "Independent Consultant, Product & Media" at "Independent · Clients incl. askshannon.ai & hgs Consultants". Rationale: Anna never got client work through hgs (only worked with them at their start); named clients read stronger than an umbrella brand; she's a sole trader with no registered brand entity, so "Anna Barto Consulting" was rejected. **Aug 2026 status — IMPORTANT PRODUCTION GATE**: site + CV currently NAME askshannon.ai and the Alpha 2/beta details (Anna's call, Aug 2026: staging-only for a mentor review; she asks Agnes Chong for written consent in early September when both are back from holidays). DO NOT deploy the homepage or the new CV to PRODUCTION until that consent exists, per the Cluesmith contract §5.1/§6.6 (signed 2026-08-14, in Anna's Google Drive). If consent is declined, the ready-made consent-free fallback: org "Independent · Clients incl. an early-stage AI startup & hgs Consultants", bullet "For an early-stage personal AI assistant startup: designing and running a structured user validation program ... and the success criteria for the company's next-stage decision". Add Parloa to the client list once that engagement is signed and naming is cleared the same way.

## Tech Stack

- **PHP 8.2** - Used purely as a templating system (no frameworks)
- **Custom CSS** - Semantic stylesheet in public/styles.css
- **Apache** - With mod_rewrite for clean URLs
- **Docker** - For local development

## Project Structure

```
barto/
├── www/                    # Deployable web content
│   ├── includes/           # PHP includes (header, nav, footer)
│   ├── pages/              # PHP pages (index.php, about.php, case studies)
│   ├── public/             # Static assets (CSS, images, PDF)
│   └── .htaccess           # URL rewriting
├── .claude/commands/       # Claude slash commands (/stage, /prod)
├── dev.sh                  # Local dev server with live reload
├── direct-stage.sh         # Direct rsync to staging
├── direct-prod.sh          # Direct rsync to production
└── functions.bash          # Shared deployment functions
```

## Development

Start local dev server with live reloading:

```bash
./dev.sh
```

Then visit http://localhost:8080. File changes in `www/` are reflected immediately.

## Deployment

### Environments

| Environment | URL | Host |
|-------------|-----|------|
| Staging | https://staging.annabarto.com | Dreamhost |
| Production | https://annabarto.com | Dreamhost |

### Via GitHub Actions (preferred)

Use Claude slash commands to deploy the current commit:

```
/stage    # Deploy to staging.annabarto.com
/prod     # Deploy to annabarto.com (production)
```

These push a git tag (`staging` or `prod`) which triggers the GitHub Action.

Monitor deployments: https://github.com/the80srobot/barto/actions

### Direct Deployment

For quick deploys without going through GitHub Actions:

```bash
./direct-stage.sh    # rsync www/ to staging
./direct-prod.sh     # rsync www/ to production
```

Requires SSH access to annabarto.com. SSH key: `~/.ssh/claude_annabarto`

## Key Implementation Details

- **Colors**: warm-beige, olive-grey, soft-terracotta, deep-espresso, light-beige
- **Fonts**: Outfit (headings) and DM Sans (body) via Google Fonts
- **Navigation**: Uses PHP variables (`$isCaseStudy`, `$backLink`, `$backText`) to adapt behavior
- **Clean URLs**: .htaccess rewrites `/moniify` to `pages/moniify.php`

## Adding New Pages

1. Create `www/pages/new-project.php`
2. Set PHP variables at top:
   ```php
   $pageTitle = 'Project Title';
   $isCaseStudy = true;
   $backLink = '/#portfolio';
   $backText = 'Back to Portfolio';

   // Optional: Set custom Open Graph tags for social sharing
   $ogImage = '/public/images/your-preview-image.jpg';
   $ogDescription = 'Brief description for social media previews';
   $ogType = 'article';  // or 'website' (default)
   ```
3. Include header, navigation, content, footer
4. Add link from `www/pages/index.php` portfolio section

## Social Media Preview (Open Graph Tags)

The site supports dynamic Open Graph meta tags for customized social media previews.

**System Location:** `www/includes/header.php` contains the OG tag template

**Per-Page Configuration:** Set these variables at the top of any page to customize its social preview:

```php
$ogImage = '/public/images/custom-preview.jpg';          // Full URL path to preview image
$ogDescription = 'Your custom description';              // Preview description text
$ogTitle = 'Custom Title';                               // Optional: Override page title
$ogType = 'article';                                     // Optional: 'article' or 'website' (default)
```

**Default Behavior:** If variables aren't set, the system falls back to:
- **Image**: `/public/optimized/anna-portrait.jpg`
- **Title**: Page title from `$pageTitle` or site default
- **Description**: "Product manager specializing in strategy, discovery, experimentation, and 0→1 product building."
- **Type**: `website`

**Current OG Images:**
- Homepage: `Hero_website_anna_barto.png` (portrait/branding)
- Building with AI article: `anna-portrait.jpg` (portrait illustration - optimized for small preview visibility)

**Image Requirements:**
- Recommended size: 1200×630px for optimal display on all platforms
- Supported formats: JPG, PNG
- Place in `/www/public/images/` directory
- Use optimized versions from `/www/public/optimized/` when available

**Dynamic Base URL:**
The OG tag system automatically uses the correct domain (staging vs production) for image URLs and canonical URLs by detecting `$_SERVER['HTTP_HOST']`. This ensures social media previews work correctly in both environments.

**Best Practices:**
- **Visibility is critical**: On platforms like LinkedIn, OG images appear very small. Simple, recognizable images (like portraits) work better than detailed screenshots
- For personal articles/blog posts, using your portrait is appropriate and helps with recognition
- For technical tutorials aimed at anonymity, consider simple diagrams or tool logos
- Test OG tags on staging before deploying to production using tools like LinkedIn Post Inspector or opengraph.xyz
- When in doubt, prioritize what's recognizable at thumbnail size over what's conceptually perfect

**Lesson Learned:**
Complex screenshots (like Magic Patterns interface) may look great at full size but become indistinguishable in small LinkedIn/Twitter previews. For personal content, portraits provide better visibility and brand recognition even when the article is technical.

## CV Management

The CV is maintained in two files:
- **Source**: `/Users/bartoska/web/cv/anna-barto-cv.html` - separate git repo at `/Users/bartoska/web/cv/`, with job-specific variants under `cv-versions/` (7 positioning folders + testimonials)
- **Published (production)**: `www/public/Anna Barto-CV .pdf` - the PDF production currently links
- **Published (staging/dev only, Aug 2026)**: `www/public/Anna Barto-CV-2026.pdf` - the restructured CV. The Download CV button in `www/pages/index.php` is environment-aware: production hosts (annabarto.com, www.annabarto.com) get the old PDF; staging and localhost get the 2026 one. Once the new CV is approved (and AskShannon naming confirmed), overwrite the old filename with the new PDF and remove the conditional. Regenerate the PDF from the HTML master headlessly: `"/Applications/Google Chrome.app/Contents/MacOS/Google Chrome" --headless --print-to-pdf=... --no-pdf-header-footer file:///Users/bartoska/web/cv/anna-barto-cv.html` (always sanity-check it stays 2 pages, e.g. with pypdf).
- **ChatGPT removed from the CV tools list** (Aug 2026, per Anna): table-stakes tool, no signal.

### CV Restructure (August 2026, mento.co mentor feedback)

The master CV was restructured (backup: `anna-barto-cv-backup-pre-restructure-aug2026.html` in the cv repo):
- **Order**: Header → 2-sentence summary → Professional Experience (highlights nested under roles; the standalone "Selected Product Highlights" section was dissolved into Moniify/Media Lab/YouTube bullets) → Selected AI Builds → Early Ventures (Lafluence one-liner kept, NOT a full chronological entry) → Education (CAS ETH first, then BSc) → Professional Development → Core Competencies → Platform & Tool Expertise. Competencies/tools moved to bottom per mentor (ATS fodder, not human signal).
- **Title line**: "Product Manager · Content, Media & AI · Ex-Google & YouTube" (matches website).
- **Summary** (NO EM DASHES anywhere in Anna's copy, ever, per Anna): just the one line "I do my best work where there's no playbook." (Anna's call, Aug 2026: everything else is in the CV). The fuller fallback sentence if a conservative application ever needs it: "Product manager with 15 years of experience across various roles in creator platforms (YouTube), developer ecosystems (Google), media (a stealth-stage finance media startup), and now early-stage AI products (independent consulting)." Note "of experience across various roles": deliberate, avoids overstating 15 years AS a PM.
- **Skills umbrella section** (bottom of CV, Teal-style): one "Skills" header with three comma-separated labeled lines: Core Competencies, Platform & Tool Expertise (flat list, no subcategories), Certifications (CSPO® lives here now that it left the summary). Commas, not pipes, throughout (incl. Languages).
- **Location**: "Based in Prague | Regularly in Zürich | Open to opportunities across Europe" (moved from Zürich; +44 phone stays deliberately, it's her one constant number/WhatsApp).
- **Dates**: MM/YYYY format ("11/2025 – Present") per tealhq recommendation.
- **Consulting entry**: org "Independent · Clients incl. askshannon.ai & hgs Consultants"; the askshannon.ai bullet names the Alpha 2 validation program and beta go/no-go decision framework. STAGING-ONLY until written consent from Agnes Chong (COO, agnes@cluesmith.com) — the Cluesmith contract (signed 2026-08-14, in Anna's Google Drive) makes "the existence and terms of this Agreement" confidential (§5.1); §6.6 permits describing the engagement in general terms (role, duration, nature of work) but not product details/metrics without written consent. See the production gate note in the Homepage Restructure section, which also carries the consent-free fallback wording. hgs (early-stage startup advisory, named publicly for months, no such contract) stays named; one truthful bullet (product discovery framework) since no client work ever came through hgs.
- **Titles**: Moniify is "Product Lead" (officially one of the Product Leads; contract said PM; website table aligned to Product Lead too). Media Lab simplified to "Senior Producer (Product Initiatives Owner)" — "Media Innovation & Research" dropped as redundant with the org description.
- **Typography**: 10pt body (was 8pt) per tealhq/mentor "simpler, more readable" advice; the terracotta accent stays (matches website brand). Competencies/tools blocks set at 9pt (ATS keywords, not human signal). Still exactly 2 pages (verified via headless Chrome print).
- **Second pass (Anna's notes, Aug 2026)**: contact header has no field labels (bare values, "(WhatsApp)" after phone) and only LinkedIn + annabarto.com (GitHub/Medium dropped; the site is the hub, GitHub links stay on AI build bullets). Summary says "15 years of experience across various roles in..." (deliberate: avoids overstating 15 years AS a PM). askshannon.ai is ONE bullet with "designing" tense (success criteria not yet defined, so never "Defined"). Section divider rules removed; terracotta only on name + section headers (role titles dark, links stay terracotta). "Oversaw senior producers" without the count (it's 2). Case-study links kept. "Video-first" kept over "content-first". Title stays "Product Lead" (not "Product Lead, Content" — no title decoration). No mention of why Moniify ended (interview answer, not CV content). Dev relations/product marketing bullet restored under Media Lab. Promotion stated in-bullet, not in title (year can be added if Anna supplies it). annabarto.com AI build cut (site is its own evidence). Reforge/CSPO certifications line dropped entirely per Anna — Education holds only CAS + BSc (CSPO® survives in the summary). Languages kept as its own section. Header order is Teal-style: name → contact → title line → summary (summary kept deliberately; it carries the no-playbook hook). Spacing: `.highlight-item` needs full margin shorthand (a p tag's default top margin caused the uneven AI Builds gap); sections separated by h2 margin 14px top.
- **Content upgrades pulled from job-variant CVs** (Aug 2026 sweep of cv-versions/): richer Acting EP bullet (I/O Connect, oversaw senior producers, 2026 strategy planning); crowdfunding outcomes (informed YouTube's native funding features + Creator Academy course in 20 languages); podcast "zero to 1.5M+ downloads in 2.5 years"; audience study "9 new video series + LinkedIn channel launch"; Moniify products named (daily news, creators, vodcast; YouTube/TikTok/Instagram/web); YouTube day-job bullet (advised creators, media companies, music labels); "Phone & WhatsApp:" label; Languages line under Education (German B2).
- **Cuts made for the 10pt/2-page fit**: "Design & Digital Assets" tools row (double "(Basic)" weakened it), "Experimentation" competency (covered by discovery + A/B bullets), AI build blurbs shortened, Professional Development collapsed to one line, Transform@lab to one bullet, tools grid converted to inline keyword format.

### Updating the CV

1. Edit `anna-barto-cv.html` with changes
2. Generate PDF from the HTML (print to PDF from browser)
3. Save as `www/public/Anna Barto - CV - web.pdf` (exact filename)
4. The website links to `/public/Anna Barto - CV - web.pdf` via the "Download CV" button

### CV Content Guidelines

**Job Titles & Organizations:**
- Use accurate, specific titles (e.g., "Senior Producer, Media Innovation & Research" not "Research & Content Innovation")
- Include full organization names (e.g., "Google Developer Product Marketing" not just "Google Developer Marketing")
- Format organization names correctly (e.g., "Transform@lab" not "TransformatLab")
- Use "Independent Consultant" not just "Consultant" for hgs Consultants role (clarifies independent nature of work; avoid "Freelance" as recruiters may view it negatively)

**Skills & Competencies:**
- CV summary emphasizes "hypothesis-driven discovery" to show process/methodology
- Core competencies include: Product Strategy & Execution, Hypothesis-Driven Discovery, 0→1 Product Building, AI Strategy & Prototyping, Experimentation, User & Market Research, Growth Strategy, Go-to-Market Strategy, Cross-Functional Leadership, Prioritization & Trade-offs, Agile (Scrum), Basic SQL, Cross-Platform User Experience
- Growth Strategy appears before Go-to-Market Strategy (outcome before tactic)
- Website Skills section shows 4 grouped category cards (see Homepage Restructure section above), no longer a 12-item grid

**Role Descriptions:**
- Be specific about scope and impact (e.g., "product marketing planning for Google's developer ecosystem")
- Focus on tangible deliverables (e.g., "product strategy, user research, and AI-assisted workflows")
- Use "Led product initiatives including..." to show breadth while listing specific achievements

**Consistency with Website:**
- CV serves as downloadable summary that complements portfolio case studies
- Header "Tech-Led Media & Innovation · Ex-Google & YouTube" aligns with website positioning
- Website hero states HOW you work (strategy, discovery, experimentation, 0→1); CV title states WHERE you work (tech-led media)
- Both CV and website should reflect the same job titles and organization names in Experience sections

**CV Positioning Strategy (General-Purpose Version):**
- **Title line:** "Product Manager · Tech-Led Media & Innovation · Ex-Google & YouTube"
  - Rationale: "Tech-Led Media & Innovation" is broad enough for media companies, platforms, and adjacent roles while showing distinctive expertise
  - "Ex-Google & YouTube" provides strong credential signal
  - Alternative considered: "Platform & Ecosystem Strategy" (good for platform-specific roles, but slightly narrow for general use)
- **Target roles:** Primary = Product Management in media/content companies; Secondary = Product Operations, Platform/Ecosystem roles, Product Strategy, Product Education
- **Ops balance:** Main CV emphasizes PM positioning with strategic operational outputs (dashboards, playbooks, courses) but avoids being too ops-heavy
- **Key achievements included:**
  - YouTube North Star Award (2016): Shows recognition and measurable impact (30% Revenue Per Hour increase)
  - Creator crowdfunding: Adoption dashboard and Creator Academy course (20 languages) demonstrate operational deliverables
  - AI dubbing experimentation: Specific and clear about the type of AI work
  - YouTube Partner Program: Case study link added for portfolio integration

## Writing Section (index.php)

The Writing section lives in `www/pages/index.php` as a PHP array of article cards rendered in a horizontal scroll.

**Article card structure:**
```php
['title' => '...', 'category' => '...', 'excerpt' => '...', 'date' => 'Month D, YYYY', 'link' => '...']
// Optional: 'featured' => true  (adds Featured badge and larger card styling)
```

**Ordering convention:**
- Featured article ("How I Built This Site Using AI") stays first — it links to an on-site page and acts as a portfolio piece
- New articles go second (after featured), then remaining articles in reverse chronological order
- Featured takes priority over recency — featured stays pinned at position 1 regardless of date

**Category tags in use:** `AI Tools`, `AI Architecture`, `MLOps`, `AI Strategy`, `Product Management`
- Tags describe the lens/domain, not the article's specific topic (e.g. "AI Architecture" not "Token Economics")
- External links (LinkedIn, Medium) open in new tab via automatic detection (`strpos($link, 'http') === 0`)

**Current articles (as of Mar 2026):**
1. How I Built This Site Using AI — `/building-with-ai` — featured
2. I Built an AI Onboarding Prototype. One LLM Call Wasn't Enough. — Medium (womenintechnology) — March 15, 2026 — https://medium.com/womenintechnology/i-built-an-ai-onboarding-prototype-a-single-llm-call-architecture-wasnt-enough-a0af85604195
3. I Don't Use Spotify. So I Built My Own AI DJ. — Medium (ai-advances) — March 10, 2026
4. 6 Levers to Bring Down the Cost of Running an AI Product — LinkedIn — Feb 23, 2026
5. When Creative Work Is Product Work — Medium — Jan 1, 2026
6. It Looks Like ChatGPT Learned to Count. It Didn't. — LinkedIn — Dec 18, 2025
7. How Does a 'Normal' Company Actually Implement Generative AI? — LinkedIn — Nov 13, 2025
8. AI Disruption Risk Framework — LinkedIn — Oct 19, 2025

## Medium Publications

The "How I Built This Site Using AI" article has been published in multiple versions:

**Website version** (`www/pages/building-with-ai.php`):
- Original shorter version with core narrative
- Focus on the story and key learnings
- Includes link banner to Medium version
- Includes link to GitHub repo (`https://github.com/bartoska-git/annabarto.com`) at end of section 5, as its own paragraph after the GitHub/deployment sentence

**Medium version** (published in Bootcamp):
- URL: https://medium.com/design-bootcamp/building-a-site-with-ai-what-worked-what-broke-and-what-i-didnt-expect-374b71ac7619
- Expanded with additional detail on reasoning and decision-making process
- Repositioned for publication audience with more methodology context
- Title: "Building a Site with AI: What Worked, What Broke, and What I Didn't Expect"
- Subtitle: "An end-to-end exploration of what today's AI tools can (and can't) realistically do across a full build process"

**Cross-linking strategy:**
- Website version includes banner after intro linking to Medium version
- Banner text: "An expanded version of this article was published on Medium via Bootcamp with additional detail on the decision-making process"
- Positioned to inform readers upfront about the more detailed version
- Styled with light beige background and terracotta border to match site design

## Case Study Pages

**Standard Structure:**
All case study pages follow a consistent structure defined by PHP arrays and HTML sections:

```php
$pageTitle = 'Case Study Title';
$isCaseStudy = true;
$backLink = '/#portfolio';
$backText = 'Back to Portfolio';

$stats = [
    ['value' => '10', 'labelSecondary' => 'New Markets', 'label' => 'YPP Launched'],
    // ... more stats
];

$sections = [
    ['id' => 'overview', 'label' => 'Overview'],
    ['id' => 'problem', 'label' => 'Problem / Opportunity'],
    // ... more sections
];

$relatedCaseStudies = [
    ['title' => 'Title', 'description' => 'Description', 'slug' => 'slug'],
    // ... more related studies
];
```

**Role Box Format:**
```html
<div class="role-box">
    <p><span class="role-label">Role:</span> Descriptive Role Title (Actual Job Title)</p>
    <p><span class="role-label">Focus:</span> Area 1 · Area 2 · Area 3</p>
</div>
```

**Summary Paragraph Spacing:**
When case study summaries have multiple paragraphs, use `mb-lg` class on the first paragraph to create visual spacing:
```html
<p class="text-lg mb-lg">First paragraph...</p>
<p class="text-lg">Second paragraph...</p>
```

**Related Case Studies:**
Maintain consistency in related case study descriptions across all pages. Current descriptions:
- YouTube Partner Program Market Expansion: "GTM strategy enabling monetization for 1M+ channels across 10 markets"
- Creator Crowdfunding Product Discovery: "Hypothesis-driven discovery combining SQL data mining with market research"
- Building 0→1 Products (Moniify): "Product strategy and 0→1 building at a media startup"
- Moniify Creators: "Integrating credible creators into editorial output"
- Developer Audience Insights Study: "User research that doubled reach and boosted engagement"

**Current Case Studies:**
- `/youtube-gtm-strategy` - YouTube Partner Program Market Expansion (10 markets, 1M+ channels, GTM strategy)
- `/creator-crowdfunding` - Creator Crowdfunding Product Discovery (hypothesis-driven, SQL data mining, playbooks)
- `/moniify` - Building 0→1 Products at Moniify
- `/moniify-creators` - Moniify Creators integration
- `/developer-insights` - Developer Audience Insights Study

**Mobile Responsiveness:**
Stats cards display in a 2×2 grid on mobile with optimized spacing:
- Gap reduced to `var(--space-sm)` (0.5rem) on mobile
- Stat values sized at 2rem (down from 2.5rem) for better fit
- Card padding explicitly set to `var(--space-md)` (1rem)
- Label font sizes reduced to 0.7rem and 0.65rem for secondary labels
- Maintains 2-column layout rather than stacking to single column

## Portfolio & AI Builds Thumbnails

### File Locations
- **Case study thumbnails**: `www/public/optimized/portfolio/*.jpg` — use clean descriptive names
- **AI Build thumbnails**: `www/public/images/ai-builds/` — current files: `AI_DJ.jpg`, `Autoflow.jpg`, `annabarto.jpg`

### Stray Image Files (Aug 2026)
Several unreferenced images sit untracked in `www/public/` (e.g. `0_to_1.jpg`, `AI_Dub.jpg`, `keep_the_image_as_is_but_*.jpg`, `moniify_0_to_1.jpg`): leftover sources/experiments from the thumbnail-swap session. The applied thumbnails were committed separately; these can be deleted or kept as sources, but don't commit them without checking with Anna.

### Swapping Thumbnails
When the user uploads a new thumbnail, check `www/public/` or `www/public/optimized/portfolio/` for new files by modification time (`ls -lt`), then copy to the correct location:
```bash
cp /path/to/new-file.jpg www/public/optimized/portfolio/existing-name.jpg
```
No code changes needed as long as the destination filename stays the same.

### Colour Palette (extracted from case study thumbnails)
These are the exact hex codes used in the case study illustrations — use when prompting AI image generators for new thumbnails to ensure consistency:

| Role | Hex | Description |
|------|-----|-------------|
| Primary orange | `#F8A860` | Main fills — warm golden amber |
| Accent orange | `#F88860` | Darker fills — coral orange |
| Yellow | `#FAC878` | Highlight fills — warm golden yellow |
| Green | `#DCE6C8` | Cool contrast — very pale yellow-sage |

### Artlist Prompt Guidelines
When generating new thumbnails via Artlist, include:
- Exact hex codes (tools ignore vague colour names like "terracotta" or "muted green")
- `"flat matte fills — zero gradients, zero glow, zero drop shadows"`
- `"thin black ink outlines throughout"`
- `"New Yorker editorial illustration aesthetic"`
- `"all elements contained within the central 70% of the image, with generous white margins on all four sides"` — critical to prevent cropping on cards
- Avoid "keep as is BUT..." instructions — they conflict; describe from scratch instead

### object-fit: cover Behaviour
Card images use `object-fit: cover` in `.card-image img` (styles.css). This crops images to fill the card. If subjects are at the very edges of a generated image they will be cut off. Solutions in order of preference:
1. Regenerate with generous margins baked in (best)
2. Add white padding via Python/PIL: `Image.new('RGB', (w, new_h), (255,255,255))` and paste original centred
3. Do NOT use `object-fit: contain` — makes images look tiny

### Colour Consistency: AI Builds vs Case Studies
The AI Build thumbnails (Artlist-generated) historically had a more muted/autumnal palette vs the case study thumbnails. The gap has been narrowed but not eliminated. Key phrase for future Artlist prompts: **"no grey undertones"** — grey mixed into greens and oranges is what makes fills look autumnal rather than spring-like.

## Production Portfolio (Hidden Page)

A standalone production portfolio page at `/production-portfolio` — not linked from the main site navigation. Designed for sharing directly with hiring managers when applying for production/Head of Production roles (e.g., Kurzgesagt). The main website and LinkedIn remain positioned for Product Management roles.

**URL:** `annabarto.com/production-portfolio`
**Files:** `www/pages/work-samples.php` (grid page), `www/pages/work-samples-category.php` (category detail pages)

**Key Design Decisions:**
- No navigation linking back to the main PM-focused site (uses `$hideNavigation = true`)
- Category pages have a standalone "Back to Production Portfolio" nav bar (no "Anna Barto" logo link)
- Title: "Anna Barto · Production Portfolio"
- Subtitle: "Selected production work from my time at Moniify, Google, and beyond."
- Old `/work-samples/[category]` routes preserved for backward compatibility in `.htaccess`

**Categories (in display order):**
1. On Location · Branded Stories (`location-shoots`) — Pinpoint Delivery, iNaturalist, EMEA Relocation
2. Studio Shows & Formats (`studio-shoots-sets`) — Moniify Daily, SEO Mythbusting, Search Console Training
3. White Cyc & Green Screen (`studio-shoots-green-screen`) — How Search Works Mini-Series, AMA Series
4. Creator Collaborations (`event-videos`) — Moniify Creators (thumbnail+link), Google I/O 2018
5. Vodcasts & Podcasts (`podcasts`) — RicHer Vodcast (TikTok embed), Search Off the Record (Libsyn embed)
6. Animation (`animations`) — Interactive Video Game, Google Pay API Explainer
7. Event Formats (`event-formats`) — Red Flag/Green Flag (short), Flutter I/O Announcements
8. Feature Documentary (`feature-documentary`) — Nejsledovanější (Following)
9. Passion Projects (`passion-projects`) — Film Poster, Converse Shoes, Transmedia Academy

**Technical Implementation:**
- Each video entry has: `title`, `embed` (or `thumbnail`+`link` for non-embeddable content), `date`, `role`, `company` (optional, omitted for Passion Projects), `description`
- Thumbnail+link pattern used for Instagram content (Instagram embeds don't work): shows image with play button overlay, links to Instagram
- TikTok embeds work fine with `https://www.tiktok.com/embed/v2/[id]`
- Libsyn embeds used for podcast episodes
- `width`/`height` overrides supported per video (defaults: 700×394)
- Category card images stored in `/www/public/optimized/work-samples/` with source files in `/www/public/work-samples/`
- `background-position` override supported per category card via `'position'` field

**Embed Lessons Learned:**
- Instagram embeds (`/embed` suffix) show broken file icons — use thumbnail+link approach instead
- Google Photos share links redirect and can't be embedded — use thumbnail approach
- TikTok embeds work reliably
- Libsyn player embeds work for podcasts (use small height ~90px for audio-only)

## CV Customization

**Custom CV Versions:**
Custom CV versions are stored in `cv-versions/` directory for specific job applications:
- `anna-barto-cv-tiktok-live.html` - Customized for TikTok LIVE Product Strategy Manager role
- `anna-barto-cv-custom.html` - General custom version template

**TikTok LIVE CV Customization:**
For the TikTok LIVE Product Strategy Manager role (London), the following customizations were made:
- Title line: "Product Strategist · Creator, Developer & Media Platforms · Ex-YouTube"
- Summary emphasizes: hypothesis-driven discovery, creator monetization, data-informed GTM, growth experimentation
- Core competencies reordered to prioritize: GTM Strategy, Creator Ecosystem & Monetization
- Product Highlights reordered: Moniify first, YouTube GTM second, Creator Crowdfunding third
- Moniify role includes: "Conducted user, market, and competitive research to shape product hypotheses and guide iterations"
- Truthful representation: removed claims that couldn't be supported (e.g., "live streaming experience", "Feature GTM Strategy")
- Space-optimized to fit within 2 pages

**CV Customization Guidelines:**
- Always prioritize truthfulness over overstating experience
- Reorder sections to match job requirements, but don't invent experience
- Keep chronological order in Experience section
- Ensure CV fits within 2 pages through strategic editing
- Reference Portfolio case studies for detailed examples ([See Selected Product Highlights])

**Recent CV Updates (January 2026):**
Strategic additions to strengthen general-purpose CV while maintaining PM focus:

1. **YouTube North Star Award (2016)** - Added under Strategic Partner Manager role
   - Text: "Received YouTube North Star Award (2016) for exceptional impact in driving adoption of mid-roll ads feature, contributing to 30% increase in Revenue Per Hour"
   - Note: "Revenue Per Hour" capitalized (official YouTube metric name)
   - Placement: Last bullet in YouTube role (serves as capstone achievement)

2. **Creator Crowdfunding Operational Outputs** - Enhanced Selected Product Highlights
   - Added: "Built adoption dashboard and Creator Academy course"
   - Full text: "Mapped creator crowdfunding ecosystem combining SQL, market analysis, and qualitative insights. Built adoption dashboard and Creator Academy course; research informed YouTube's later native creator funding features"
   - Shows operational deliverables without being too ops-focused

3. **YouTube Partner Program Case Study Link** - Added portfolio integration
   - Link: `[annabarto.com/youtube-gtm-strategy]`
   - Placed after YPP bullet to connect CV to detailed case study

4. **Minor Clarifications:**
   - Acting Executive Producer: Added "(Parental Leave Cover)" to role title
   - Moniify: Changed to "website feature prioritization" (vs generic "feature prioritization")
   - Dev Media Lab: Changed to "AI dubbing experimentation" (vs generic "AI experimentation")
   - First Google role: Removed beta tests bullet, kept only integrated marketing models

**What Was NOT Added (Intentionally):**
- Dev Media Lab best practices documentation: Too ops/enablement-focused for general PM CV
- Moniify creator toolkit: Felt too ops-y for main version
- Additional xfn partnership details: Already covered sufficiently
- These can be added to custom versions for ops/enablement roles

**CV Updates (February 2026):**

1. **"Freelance" → "Independent" Terminology Change**
   - Recruiter feedback: "Freelance" can be viewed negatively by recruiters
   - Changed role title from "Freelance Consultant, Product & Media" to "Independent Consultant, Product & Media" across all CV versions
   - Website Experience table: updated job title to "Independent Consultant, Product & Media" and removed "(freelance)" from organization name "hgs Consultants"
   - "Independent" is widely understood in professional contexts and cleanly signals a non-staff engagement
   - "External" was considered but reads awkwardly as a standalone CV title

2. **CV PDF Filename Change**
   - Old: `Anna-Barto-CV.pdf` (hyphenated)
   - Intermediate: `Anna Barto - CV.pdf` (spaces with dash separator)
   - Previous: `Anna Barto - CV - web.pdf` (web-optimized version)
   - Current: `Anna Barto-CV .pdf` (March 2026 — note: space before .pdf is intentional)
   - Download link in `index.php` updated to match current filename
