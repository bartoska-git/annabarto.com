#!/bin/bash
# Shared deployment functions

DEPLOY_HOST="annabarto.com"
DEPLOY_USER="annabarto"

# Setup SSH options from environment variables
# Sets SSH_OPTS global variable
setup_ssh() {
    SSH_OPTS=""

    if [ -n "$DEPLOY_SSH_KEY" ]; then
        SSH_KEY_FILE=$(mktemp)
        echo "$DEPLOY_SSH_KEY" > "$SSH_KEY_FILE"
        chmod 600 "$SSH_KEY_FILE"
        SSH_OPTS="-i $SSH_KEY_FILE -o StrictHostKeyChecking=no"
        CLEANUP_FILES="$SSH_KEY_FILE"
    fi

    if [ -n "$DEPLOY_SSH_KNOWN_HOSTS" ]; then
        KNOWN_HOSTS_FILE=$(mktemp)
        echo "$DEPLOY_SSH_KNOWN_HOSTS" > "$KNOWN_HOSTS_FILE"
        SSH_OPTS="$SSH_OPTS -o UserKnownHostsFile=$KNOWN_HOSTS_FILE"
        CLEANUP_FILES="$CLEANUP_FILES $KNOWN_HOSTS_FILE"
    fi

    if [ -n "$CLEANUP_FILES" ]; then
        trap "rm -f $CLEANUP_FILES" EXIT
    fi
}

# Deploy www/ to a remote path
# Usage: deploy <remote_path>
deploy() {
    local remote_path="$1"
    local exclude_opts="--exclude=.DS_Store --exclude=Thumbs.db --exclude=*.swp --exclude=*.swo --exclude=*~"

    if [ -n "$SSH_OPTS" ]; then
        rsync -avz --delete $exclude_opts -e "ssh $SSH_OPTS" www/ "${DEPLOY_USER}@${DEPLOY_HOST}:${remote_path}"
    else
        rsync -avz --delete $exclude_opts www/ "${DEPLOY_USER}@${DEPLOY_HOST}:${remote_path}"
    fi
}
