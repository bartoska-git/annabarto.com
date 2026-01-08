#!/bin/bash
set -e

SCRIPT_DIR="$(cd "$(dirname "$0")" && pwd)"
source "$SCRIPT_DIR/functions.bash"

echo "Deploying to annabarto.com (production)..."
setup_ssh
deploy "/home/annabarto/annabarto.com/public/"
echo "Production deployment complete!"
