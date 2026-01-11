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
- Building with AI article: `magic-patterns-inspiration.jpg` (screenshot showing AI tool in action)

**Image Requirements:**
- Recommended size: 1200×630px for optimal display on all platforms
- Supported formats: JPG, PNG
- Place in `/www/public/images/` directory
- Use optimized versions from `/www/public/optimized/` when available

**Dynamic Base URL:**
The OG tag system automatically uses the correct domain (staging vs production) for image URLs and canonical URLs by detecting `$_SERVER['HTTP_HOST']`. This ensures social media previews work correctly in both environments.

**Best Practices:**
- Use content-specific images that represent the article/page topic rather than generic branding
- For articles, show screenshots, tools, or visual examples from the content
- For homepage/profile pages, branding images work well
- Test OG tags on staging before deploying to production using tools like LinkedIn Post Inspector or opengraph.xyz

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
