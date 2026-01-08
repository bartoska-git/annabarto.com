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
│   ├── building-with-ai.php     # How I Built This Site Using AI (Writing)
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
- **Featured badge** (.featured-badge): Terracotta background for featured articles in Writing section

### Building with AI Page (pages/building-with-ai.php)
- Featured article in Writing section demonstrating AI tool fluency
- Full navigation (not minimal back-nav) since it's a LinkedIn traffic entry point
- Structure follows About page pattern for readability
- 6 sections:
  1. The part AI didn't replace: Research & taste
  2. Translating ideas into wireframes (with ChatGPT)
  3. Visual identity: the cartoonification experiment
  4. Site prototyping with AI tools (and when things broke)
  5. Recovery, tool-switching, and site finalization
  6. Final reflection
- **Image layouts**:
  - Section 2: Two images side by side (300px height, cropped to landscape)
  - Section 3: Four cartoonification attempts in single row, Artlist result below
  - Section 4: Single Magic Patterns Inspiration mode screenshot
- **Styling**:
  - Custom font size override: body text forced to 1rem with !important
  - Subheader: 1.5rem terracotta color matching section headers
  - All figcaptions: 0.875rem, italic, olive-grey, light-beige background
- **External links**:
  - Notion templates, marketing portfolio examples
  - AI cartoonizer roundup
  - Reforge AI Productivity course
  - LinkedIn article: "It Looks Like ChatGPT Learned to Count. It Didn't."
- **Images directory**: `/public/images/building-with-ai/` (8 images total)
  - chatgpt-wireframe.png, chatgpt-visual-mockup.png
  - cartoonification-attempts1.jpg through 4.png
  - artlist-final-illustration.png
  - magic-patterns-inspiration.png

### Writing Section (pages/index.php)
- Added featured flag to articles array
- Featured article: "How I Built This Site Using AI" with AI Tools category
- Featured badge displays next to category tag for featured articles
- Articles can be internal (/building-with-ai) or external (https://...) links

### CV (anna-barto-cv.html & public/Anna Barto - CV.pdf)
- **File location**: `anna-barto-cv.html` (source), `public/Anna Barto - CV.pdf` (downloadable)
- **Target audience**: PM recruiters and hiring managers for PM/product leadership roles
- **Page count**: Exactly 2 pages when printed (Cmd+P)
- **Download link**: Homepage "Download CV" button links to `/public/Anna-Barto-CV.pdf`

**Design & Typography:**
- **Fonts**: DM Sans (body), Outfit (headings) - matching website
- **Colors**: Terracotta (#c17c5c) for brand consistency - title line, section headers, role titles, links
- **Font sizes**: Body 8pt, section headers 9pt, name 20pt, contact/links 8pt, dates 7.5pt, role context 7pt, company names 8pt, tool categories 8pt
- **Spacing**: Section headers 12px top margin, 8px bottom margin (padding-bottom: 0), content roles 10px apart, tool category margin-bottom 1px
- **Print margins**: @page 0.4in top/bottom, 0.5in sides
- **Layout**: Single column for ATS compatibility, page-break-inside: avoid on roles

**Content Structure:**
1. **Header**:
   - Name: "ANNA BARTO"
   - Title line: "Product Manager · Tech-Led Media & Innovation · Ex-Google & YouTube"
   - Contact info with orange divider: Email, Phone & WhatsApp, LinkedIn, Portfolio, Writing, Location
   - Location integrated: "Based in Zürich | Open to European opportunities"
   - Summary: 14+ years experience across Google, YouTube, and early-stage startups, moving fast in ambiguous environments, AI-assisted workflows, CSPO certified (no "Currently consulting" - kept evergreen)

2. **Core Competencies** (12 skills, pipe-separated):
   - Product Strategy & Delivery | Hypothesis-Driven Discovery | 0→1 Product Building | AI Strategy & Prototyping | Experimentation | User & Market Research | Go-to-Market Strategy | Cross-Functional Team Leadership | Project & Resource Management | Agile (Scrum) | Basic SQL | Cross-Platform User Experience

3. **Platform & Tool Expertise** (3-column grid, 6 categories):
   - Row 1: AI Prototyping & Assistants, Project Management & Collaboration, Analytics & Performance
   - Row 2: Bug Tracking & Documentation, Design & Digital Assets, Content & Media Systems

4. **Selected Highlights** (5 highlights with annabarto.com links, bulleted):
   - Built 0→1 Product Portfolio at Moniify → `/moniify`
   - Led Creator Crowdfunding Product Discovery at YouTube → `/creator-crowdfunding`
   - Ran AI Dubbing Experiment at Google → `/ai-dubbing`
   - Doubled Developer Audience via Research-Led Insights → `/developer-insights`
   - Improved Cross-Platform Delivery & Adoption at Google → `/cross-platform-delivery`

5. **Featured Personal Project** (bulleted for consistency):
   - AI-Assisted Website Build: Built personal portfolio website using ChatGPT, Magic Patterns, and Claude Code for end-to-end prototyping and development → `/building-with-ai`

6. **Professional Experience** (7 roles, reverse chronological):
   - hgs Consultants (Nov 2025 - Present): Consultant, Product & Media
   - Google Developer Marketing (May 2025 - Aug 2025): Acting Executive Producer (via Randstad)
   - Moniify (Jun 2024 - Mar 2025): Product Lead (6 bullets including research, 3 products, Airtable automation)
   - Google Developer Media Lab (Feb 2018 - May 2024): Senior Producer, Research & Content Innovation (via Advanced Systems Group) - bullet: "coordinated production teams across the US and EMEA" (removed "distributed")
   - YouTube (Sep 2014 - Jul 2017): Strategic Partner Manager, CEE & Israel
   - TransformatLab (Jun 2014 - Sep 2014): Project Manager, Transmedia
   - Google (Jun 2011 - Aug 2014): Audience & Media Strategist, Digital Advertising, UKI & CZ/SK

7. **Early Ventures**: Lafluence (Feb 2016 - Nov 2017, Founding Team, Pre-Launch)

8. **Education**: BSc Business, Language & Culture, Copenhagen Business School (2008-2011)

9. **Selected Professional Development** (1 category only, removed Leadership & Technology):
   - Product Management & AI: Reforge courses (2025), CSPO (2025)

**Key Design Decisions:**
- Role titles in terracotta color (not italic) for better readability at 8pt
- Company names 8pt (same as body text, not 9pt) for consistency
- All links consistent at 8pt (not 7pt) for visual harmony, including .education-item a
- Location moved inside contact info block (below orange divider)
- Languages removed from competencies to save space
- Research bullet positioned after product building at Moniify (logical flow)
- TransformatLab kept as "Project Manager, Transmedia" (accurate historical title)
- No layoffs mention (space efficiency, better framing)
- Partnership bullet removed from Google Developer Media Lab (redundant, generic)
- Section header spacing: h2 margin-bottom 8px, padding-bottom 0 (consistent spacing after orange dividers)
- Tool category spacing: margin-bottom 1px (tighter, more consistent)
- Summary kept evergreen: removed "Currently consulting" (redundant with hgs Consultants role)
- Summary positioning: "early-stage startups" (not just "startups") to signal 0→1 experience

**Alignment with Website:**
- Title line matches positioning: "Tech-Led Media & Innovation"
- All 5 highlights link to case studies on annabarto.com
- Competencies align with homepage capabilities
- Tools match demonstrated AI fluency
- Summary echoes About page language
- Visual brand consistency with terracotta color throughout
