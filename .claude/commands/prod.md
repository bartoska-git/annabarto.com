---
allowed-tools: Bash(git:*)
description: Deploy to production via GitHub Actions
---

# Production Deploy

Deploy the current commit to annabarto.com (production) via GitHub Actions.

## Steps

1. First, check if there are uncommitted changes:
   ```bash
   git status --porcelain
   ```
   If there are uncommitted changes, warn the user and ask if they want to commit first.

2. Get the current commit hash for confirmation:
   ```bash
   git rev-parse --short HEAD
   ```

3. **Important**: This is a PRODUCTION deployment. Confirm with the user that they want to deploy this commit to production (annabarto.com). Recommend they test on staging first if they haven't.

4. Create/update the prod tag and push it to trigger the GitHub Action:
   ```bash
   git tag -f prod && git push -f origin prod
   ```

5. Provide the user with a link to monitor the deployment:
   https://github.com/the80srobot/barto/actions

6. Let the user know the site will be live at https://annabarto.com once the action completes.
