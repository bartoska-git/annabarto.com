# CLAUDE.md

## Project Overview

Anna Barto's portfolio website - a simple PHP site with clean URLs on Apache.

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
- **Source**: `anna-barto-cv.html` - HTML file that can be printed to PDF
- **Published**: `www/public/Anna-Barto-CV.pdf` - The PDF file linked from the website

### Updating the CV

1. Edit `anna-barto-cv.html` with changes
2. Generate PDF from the HTML (print to PDF from browser)
3. Save as `www/public/Anna-Barto-CV.pdf` (exact filename with hyphen, not space)
4. The website links to `/public/Anna-Barto-CV.pdf` via the "Download CV" button

### CV Content Guidelines

**Job Titles & Organizations:**
- Use accurate, specific titles (e.g., "Senior Producer, Media Innovation & Research" not "Research & Content Innovation")
- Include full organization names (e.g., "Google Developer Product Marketing" not just "Google Developer Marketing")
- Format organization names correctly (e.g., "Transform@lab" not "TransformatLab")
- Use "Freelance Consultant" not just "Consultant" for hgs Consultants role (clarifies independent nature of work)

**Skills & Competencies:**
- CV summary emphasizes "hypothesis-driven discovery" to show process/methodology
- Core competencies include: Product Strategy & Execution, Hypothesis-Driven Discovery, 0→1 Product Building, AI Strategy & Prototyping, Experimentation, User & Market Research, Growth Strategy, Go-to-Market Strategy, Cross-Functional Leadership, Prioritization & Trade-offs, Agile (Scrum), Basic SQL, Cross-Platform User Experience
- Growth Strategy appears before Go-to-Market Strategy (outcome before tactic)
- Website Skills section has 12 items (3x4 grid) - if adding a skill, replace one to maintain layout

**Role Descriptions:**
- Be specific about scope and impact (e.g., "product marketing planning for Google's developer ecosystem")
- Focus on tangible deliverables (e.g., "product strategy, user research, and AI-assisted workflows")
- Use "Led product initiatives including..." to show breadth while listing specific achievements

**Consistency with Website:**
- CV serves as downloadable summary that complements portfolio case studies
- Header "Tech-Led Media & Innovation" aligns with website positioning
- Both CV and website should reflect the same job titles and organization names in Experience sections

## Medium Publications

The "How I Built This Site Using AI" article has been published in multiple versions:

**Website version** (`www/pages/building-with-ai.php`):
- Original shorter version with core narrative
- Focus on the story and key learnings
- Includes link banner to Medium version

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
