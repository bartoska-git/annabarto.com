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
   ```
3. Include header, navigation, content, footer
4. Add link from `www/pages/index.php` portfolio section
