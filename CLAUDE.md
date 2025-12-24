# CLAUDE.md

## Project Overview

This is Anna Barto's portfolio website - a simple PHP site converted from a Magic Patterns React export.

## Tech Stack

- **PHP 8.2** - Used purely as a templating system (no frameworks)
- **Tailwind CSS** - Loaded via CDN, configured inline in header.php
- **Apache** - With mod_rewrite for clean URLs

## Project Structure

```
barto/
├── index.php                    # Homepage
├── includes/
│   ├── header.php               # HTML head, Tailwind config, fonts
│   ├── navigation.php           # Responsive nav (adapts for homepage vs case studies)
│   └── footer.php               # Footer with copyright
├── case-study/
│   ├── moniify.php              # Main Moniify case study
│   ├── airtable-app.php         # Airtable workflow automation
│   ├── moniify-creators.php     # Creator integration product
│   ├── moniify-daily.php        # Daily video product
│   └── richer.php               # Female-focused finance format
├── public/                      # Images (profile photo, logos, project images)
├── Dockerfile                   # PHP 8.2 Apache image
├── .htaccess                    # URL rewriting for clean URLs
└── .dockerignore
```

## Running Locally

```bash
docker build -t barto .
docker run -p 8080:80 barto
```

Then visit http://localhost:8080

## Key Implementation Details

- **Tailwind config** is embedded in `includes/header.php` using the CDN's inline config
- **Custom colors**: warm-beige, olive-grey, soft-terracotta, deep-espresso, light-beige
- **Fonts**: Outfit (headings) and DM Sans (body) via Google Fonts
- **Navigation** uses PHP variables (`$isCaseStudy`, `$backLink`, `$backText`) to adapt behavior
- **Clean URLs** work via .htaccess rewrite rules (e.g., `/case-study/moniify` serves `moniify.php`)

## Adding New Case Studies

1. Create a new file in `case-study/` (e.g., `new-project.php`)
2. Set the PHP variables at the top:
   ```php
   $pageTitle = 'Project Title';
   $isCaseStudy = true;
   $backLink = '/#portfolio';
   $backText = 'Back to Portfolio';
   ```
3. Include the header, navigation, content, and footer
4. Add a link to it from `index.php` in the portfolio section
