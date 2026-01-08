#!/bin/bash
set -e

SCRIPT_DIR="$(cd "$(dirname "$0")" && pwd)"
source "$SCRIPT_DIR/functions.bash"

echo "Deploying to staging.annabarto.com..."
setup_ssh
deploy "/home/annabarto/staging.annabarto.com/public/"
echo "Staging deployment complete!"
