# CLAUDE.md

## Project Overview

This is Anna Barto's portfolio website - a simple PHP site converted from a Magic Patterns React export.

## Tech Stack

- **PHP 8.2** - Used purely as a templating system (no frameworks)
- **Custom CSS** - Semantic stylesheet in public/styles.css
- **Apache** - With mod_rewrite for clean URLs

## Project Structure

```
barto/
├── includes/                    # PHP includes (not web-accessible)
│   ├── header.php               # HTML head, fonts
│   ├── navigation.php           # Responsive nav (adapts for homepage vs case studies)
│   └── footer.php               # Footer with copyright
├── pages/                       # Web-accessible PHP pages
│   ├── index.php                # Homepage
│   ├── about.php                # About page
│   ├── moniify.php              # Main Moniify case study
│   ├── airtable-app.php         # Airtable workflow automation
│   ├── moniify-creators.php     # Creator integration product
│   ├── moniify-daily.php        # Daily video product
│   ├── richer.php               # Female-focused finance format
│   ├── ai-dubbing.php           # AI dubbing case study
│   ├── creator-crowdfunding.php # Creator crowdfunding case study
│   ├── cross-platform-delivery.php # Cross-platform delivery case study
│   └── developer-insights.php   # Developer insights case study
├── public/                      # Images and CSS
│   └── styles.css               # Main stylesheet
├── Dockerfile                   # PHP 8.2 Apache image
├── .htaccess                    # URL rewriting for clean URLs
└── dev.sh                       # Development script with live reloading
```

## Running Locally

```bash
docker build -t barto .
docker run -p 8080:80 barto
```

Then visit http://localhost:8080

Or use the dev script for live reloading:
```bash
./dev.sh
```

## Key Implementation Details

- **Custom colors**: warm-beige, olive-grey, soft-terracotta, deep-espresso, light-beige
- **Fonts**: Outfit (headings) and DM Sans (body) via Google Fonts
- **Navigation** uses PHP variables (`$isCaseStudy`, `$backLink`, `$backText`) to adapt behavior
- **Clean URLs** work via .htaccess rewrite rules (e.g., `/moniify` serves `pages/moniify.php`)

## Adding New Pages

1. Create a new file in `pages/` (e.g., `new-project.php`)
2. Set the PHP variables at the top:
   ```php
   $pageTitle = 'Project Title';
   $isCaseStudy = true;
   $backLink = '/#portfolio';
   $backText = 'Back to Portfolio';
   ```
3. Include the header, navigation, content, and footer
4. Add a link to it from `pages/index.php` in the portfolio section

## Recent Updates

### About Page (pages/about.php)
- Streamlined, concise About page optimized for PM/product leadership recruiters
- Content structure (4 paragraphs):
  - **Opening**: Strong hook - "product leader who moves fast in ambiguous environments"
  - **Career path**: Chronological progression (strategy/advertising at Google → YouTube partnerships → Google Developer Media Lab → early-stage startups/consulting)
  - **Specific examples**: YouTube creator crowdfunding discovery (with SQL), Google Developer Media Lab AI dubbing pilot, Moniify 0→1 products
  - **AI fluency**: Recent focus on understanding AI systems and practical application
- **How I work** section: 5 distinctive principles
  - Bias toward action and adaptability
  - Collaboration over rigid process
  - Problem solver who takes initiative
  - Combines data with experience, intuition, storytelling
  - Walks the talk, transparent decision-making, continuous learning
- Inline links to case studies: `/creator-crowdfunding`, `/ai-dubbing`, `/moniify`
- External links to thought leadership: Medium essay on creative work as product work, LinkedIn articles on AI
- Language optimized to avoid AI-sounding patterns (removed em dashes, generic phrases)
- ~310 words total (10% shorter than original, significantly less dense)

### Homepage Capabilities Section (pages/index.php)
- **Skills**: 12 strategic PM skills in card layout without categories
  - Product Strategy & Delivery, Hypothesis-Driven Discovery, 0→1 Product Building, AI Strategy, etc.
  - Centered text with subtle gradient backgrounds
- **Tools**: 9 categories with grouped display
  - AI Prototyping, AI Assistants, Bug Tracking & Corporate Wiki, Project Management, Data & Analytics, etc.
  - Category headers with tool lists
- **Data Tables**: Card-like row styling for Experience, Certifications, Education
  - Individual gradient per row with rounded corners
  - Separate rows with spacing for better visual hierarchy
- **Experience**: Added Lafluence (2016-2017) between Google Developer Media Lab and YouTube
- **Certifications**: Split Reforge courses, updated Franklin Covey years (2022, 2021)

### Navigation (includes/navigation.php)
- Added About link in main navigation
- Implemented `$isActualHomepage` and `$baseUrl` logic for proper anchor handling
- Navigation works correctly from both homepage and About page
- Active section indicator uses scroll position to highlight current section
- Orange dot moves from logo to section links as user scrolls

### Hero Section (pages/index.php)
- Changed section ID from `#about` to `#hero` to avoid conflict with About page
- Added "More about my journey →" link to About page
- Link styled in terracotta color (`var(--soft-terracotta)`) to match site accent links
- Positioned closer to intro text with `margin-top: var(--space-sm)` and `margin-bottom: var(--space-xl)`

### CSS Updates (public/styles.css)
- **About page styles** (lines 1576-1667):
  - `.about-header`, `.about-title`, `.about-divider` for page header
  - Increased paragraph spacing for better readability
  - `.work-statements .statement` for bold statement blocks
  - `.inline-link` for in-text links with hover effects
- **Skills cards** (lines 1005-1027): Centered text, gradient backgrounds
- **Tools cards** (lines 1055-1066): Category headers with tool lists
- **Data tables** (lines 1114-1158): Card-like rows with individual gradients
- **Hero about link** (lines 474-487): Terracotta color with hover effect
