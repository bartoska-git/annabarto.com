#!/bin/bash
set -e

DEPLOY_HOST="annabarto.com"
DEPLOY_USER="annabarto"
DEPLOY_PATH="/home/annabarto/staging.annabarto.com/public/"

# If DEPLOY_SSH_KEY env var is set, write it to a temp file
if [ -n "$DEPLOY_SSH_KEY" ]; then
    SSH_KEY_FILE=$(mktemp)
    echo "$DEPLOY_SSH_KEY" > "$SSH_KEY_FILE"
    chmod 600 "$SSH_KEY_FILE"
    SSH_OPTS="-i $SSH_KEY_FILE -o StrictHostKeyChecking=no"
    trap "rm -f $SSH_KEY_FILE" EXIT
else
    SSH_OPTS=""
fi

# If DEPLOY_SSH_KNOWN_HOSTS is set, use it
if [ -n "$DEPLOY_SSH_KNOWN_HOSTS" ]; then
    KNOWN_HOSTS_FILE=$(mktemp)
    echo "$DEPLOY_SSH_KNOWN_HOSTS" > "$KNOWN_HOSTS_FILE"
    SSH_OPTS="$SSH_OPTS -o UserKnownHostsFile=$KNOWN_HOSTS_FILE"
    trap "rm -f $SSH_KEY_FILE $KNOWN_HOSTS_FILE" EXIT
fi

echo "Deploying to staging.annabarto.com..."

if [ -n "$SSH_OPTS" ]; then
    rsync -avz --delete -e "ssh $SSH_OPTS" www/ "${DEPLOY_USER}@${DEPLOY_HOST}:${DEPLOY_PATH}"
else
    rsync -avz --delete www/ "${DEPLOY_USER}@${DEPLOY_HOST}:${DEPLOY_PATH}"
fi

echo "Deployment complete!"
