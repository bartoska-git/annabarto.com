# annabarto.com

Personal portfolio website for Anna Barto, product manager & applied AI builder.

**Live site:** [annabarto.com](https://annabarto.com)

---

## About this project

This site was built almost entirely with AI assistance as an end-to-end experiment in how far current tooling can take a full site build. The process included AI-assisted wireframing, visual identity, prototyping, coding, and deployment.

A full writeup of what worked, what broke, and what I learned is on [Medium](https://medium.com/design-bootcamp/building-a-site-with-ai-what-worked-what-broke-and-what-i-didnt-expect-374b71ac7619) and on the [site itself](https://annabarto.com/building-with-ai).

---

## Tech stack

- **PHP 8.2:** used as a templating system, no frameworks
- **Custom CSS:** semantic stylesheet, no libraries
- **Apache** with mod_rewrite for clean URLs
- **Docker** for local development
- **GitHub Actions** for deployment to Dreamhost

---

## Project structure

```
barto/
├── www/                    # Deployable web content
│   ├── includes/           # PHP includes (header, nav, footer)
│   ├── pages/              # PHP pages (index, about, case studies)
│   ├── public/             # Static assets (CSS, images, PDF)
│   └── .htaccess           # URL rewriting rules
├── dev.sh                  # Local dev server with live reload
├── direct-stage.sh         # Direct rsync to staging
├── direct-prod.sh          # Direct rsync to production
└── functions.bash          # Shared deployment utilities
```

---

## Local development

Start the local dev server with live reloading:

```bash
./dev.sh
```

Then open [http://localhost:8080](http://localhost:8080). Changes to files in `www/` are reflected immediately.

---

## Deployment

| Environment | URL |
|-------------|-----|
| Staging | https://staging.annabarto.com |
| Production | https://annabarto.com |

### Via GitHub Actions

```bash
/stage    # Deploy to staging
/prod     # Deploy to production
```

These push a `staging` or `prod` git tag, which triggers the corresponding GitHub Action.

Monitor deployments: [github.com/bartoska-git/annabarto.com/actions](https://github.com/bartoska-git/annabarto.com/actions)

### Direct deployment (requires SSH access)

```bash
./direct-stage.sh    # rsync www/ to staging
./direct-prod.sh     # rsync www/ to production
```

---

## How it was built

| Phase | Tools used |
|-------|-----------|
| Wireframing and content structure | ChatGPT |
| Visual identity and illustration | Artlist.io |
| Site prototyping | Magic Patterns |
| Implementation and refinement | Claude Code |
| Deployment | Claude Code and GitHub Actions |

The stack changed mid-project: the prototype started in React, then switched to PHP on the advice of a more technical collaborator. Claude Code handled the conversion and all subsequent implementation.

For visual identity, I tested several AI image tools but Artlist.io was the only one that produced results close to what I had in mind: a flat, editorial-style illustrated portrait.

---

## Design

- **Colours:** warm-beige, olive-grey, soft-terracotta, deep-espresso, light-beige
- **Fonts:** Outfit (headings) and DM Sans (body) via Google Fonts

---

## Key lessons

Three things became clear from this process:

1. Specialized AI tools, each handling a different phase, can collectively take you much further than any single tool.
2. LLM-based tools are probabilistic systems. Their behavior can shift unexpectedly with model updates, requiring adjustments to prompts and orchestration. (More on this in the article.)
3. AI doesn't remove the need for research, judgment, or iteration. The quality of output is still proportional to the time and thought put in.
