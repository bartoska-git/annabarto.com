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
│   ├── moniify.php              # Main Moniify case study
│   ├── airtable-app.php         # Airtable workflow automation
│   ├── moniify-creators.php     # Creator integration product
│   ├── moniify-daily.php        # Daily video product
│   └── richer.php               # Female-focused finance format
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
