---
allowed-tools: Bash(git:*)
description: Deploy to staging via GitHub Actions
---

# Deploy to Staging

Deploy the current commit to staging.annabarto.com via GitHub Actions.

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

3. Confirm with the user that they want to deploy this commit to staging.

4. Create/update the staging tag and push it to trigger the GitHub Action:
   ```bash
   git tag -f staging && git push -f origin staging
   ```

5. Provide the user with a link to monitor the deployment:
   https://github.com/the80srobot/barto/actions

6. Let the user know the site will be live at https://staging.annabarto.com once the action completes.
