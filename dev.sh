#!/bin/bash

# Development script for running the portfolio site with live reloading
# Usage: ./dev.sh [port]

PORT="${1:-8080}"
IMAGE_NAME="barto-dev"
CONTAINER_NAME="barto-dev"
SCRIPT_DIR="$(cd "$(dirname "$0")" && pwd)"

# Stop and remove existing container if running
docker rm -f "$CONTAINER_NAME" 2>/dev/null

# Build the image (only needs to rebuild if Dockerfile changes)
echo "Building Docker image..."
docker build -t "$IMAGE_NAME" "$SCRIPT_DIR"

# Run with volume mount for live file changes
echo "Starting container on port $PORT..."
docker run --rm \
    --name "$CONTAINER_NAME" \
    -p "$PORT:80" \
    -v "$SCRIPT_DIR:/var/www/html" \
    "$IMAGE_NAME"
