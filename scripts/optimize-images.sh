#!/bin/bash
# Image optimization script for barto portfolio
# Creates smaller, web-optimized versions of images while keeping originals
# Run from project root: ./scripts/optimize-images.sh

set -e

PUBLIC_DIR="www/public"
OPTIMIZED_DIR="$PUBLIC_DIR/optimized"

# Create optimized directory structure
mkdir -p "$OPTIMIZED_DIR/images/building-with-ai"
mkdir -p "$OPTIMIZED_DIR/work-samples"
mkdir -p "$OPTIMIZED_DIR/logos"

echo "Optimizing images..."

# ============================================
# Hero Avatar (displayed at 320px width in circle, need 640px for retina)
# Flatten to JPEG with background color matching the page (#EDDCCE)
# ============================================
echo "  Hero avatar..."
magick "$PUBLIC_DIR/anna-portrait.png" \
    -trim \
    +repage \
    -resize 640x \
    -background '#EDDCCE' \
    -alpha remove \
    -alpha off \
    -quality 90 \
    "$OPTIMIZED_DIR/anna-portrait.jpg"

# ============================================
# Logo strip images (displayed at 40px height with grayscale filter)
# Convert to actual grayscale and resize to 80px height for retina
# ============================================
echo "  Logo strip images..."

# ============================================
# Portfolio card images (displayed at 12rem/192px height, ~380px wide)
# Use 800x400 for retina
# ============================================
echo "  Portfolio card images..."
mkdir -p "$OPTIMIZED_DIR/portfolio"

PORTFOLIO_IMAGES="moniify-products airtable-app ai-dubbing developer-insights cross-platform-delivery creator-crowdfunding"
for name in $PORTFOLIO_IMAGES; do
    magick "$PUBLIC_DIR/${name}.jpg" \
        -resize 800x400^ \
        -gravity center \
        -extent 800x400 \
        -quality 85 \
        "$OPTIMIZED_DIR/portfolio/${name}.jpg"
done

# Google logo
magick "$PUBLIC_DIR/google-logo.png" \
    -resize x80 \
    -colorspace Gray \
    "$OPTIMIZED_DIR/logos/google-logo.png"

# YouTube logo
magick "$PUBLIC_DIR/youtube-logo.png" \
    -resize x80 \
    -colorspace Gray \
    "$OPTIMIZED_DIR/logos/youtube-logo.png"

# Moniify logo (smaller variant at 28px = 56px for retina)
magick "$PUBLIC_DIR/moniify-logo.png" \
    -resize x56 \
    -colorspace Gray \
    "$OPTIMIZED_DIR/logos/moniify-logo.png"

# HGS logo
magick "$PUBLIC_DIR/hgs-logo.png" \
    -resize x80 \
    -colorspace Gray \
    "$OPTIMIZED_DIR/logos/hgs-logo.png"

# Transform Lab logo
magick "$PUBLIC_DIR/transform-lab.png" \
    -resize x80 \
    -colorspace Gray \
    "$OPTIMIZED_DIR/logos/transform-lab.png"

# ============================================
# Building with AI images
# ============================================
echo "  Building with AI images..."

# ChatGPT wireframe (displayed at 300px height = 600px for retina)
magick "$PUBLIC_DIR/images/building-with-ai/chatgpt-wireframe.png" \
    -resize x600 \
    -quality 85 \
    "$OPTIMIZED_DIR/images/building-with-ai/chatgpt-wireframe.jpg"

# ChatGPT visual mockup (displayed at 300px height = 600px for retina)
magick "$PUBLIC_DIR/images/building-with-ai/chatgpt-visual-mockup.png" \
    -resize x600 \
    -quality 85 \
    "$OPTIMIZED_DIR/images/building-with-ai/chatgpt-visual-mockup.jpg"

# Cartoonification attempts (displayed at 180px height = 360px for retina)
magick "$PUBLIC_DIR/images/building-with-ai/cartoonification-attempts1.jpg" \
    -resize x360 \
    -quality 85 \
    "$OPTIMIZED_DIR/images/building-with-ai/cartoonification-attempts1.jpg"

magick "$PUBLIC_DIR/images/building-with-ai/cartoonification-attempts2.png" \
    -resize x360 \
    -quality 85 \
    "$OPTIMIZED_DIR/images/building-with-ai/cartoonification-attempts2.jpg"

magick "$PUBLIC_DIR/images/building-with-ai/cartoonification-attempts3.png" \
    -resize x360 \
    -quality 85 \
    "$OPTIMIZED_DIR/images/building-with-ai/cartoonification-attempts3.jpg"

magick "$PUBLIC_DIR/images/building-with-ai/cartoonification-attempts4.png" \
    -resize x360 \
    -quality 85 \
    "$OPTIMIZED_DIR/images/building-with-ai/cartoonification-attempts4.jpg"

# Artlist final illustration (full width in ~800px container = 1600px for retina)
magick "$PUBLIC_DIR/images/building-with-ai/artlist-final-illustration.png" \
    -resize 1600x \
    -quality 85 \
    "$OPTIMIZED_DIR/images/building-with-ai/artlist-final-illustration.jpg"

# Magic Patterns inspiration (full width in ~800px container = 1600px for retina)
magick "$PUBLIC_DIR/images/building-with-ai/magic-patterns-inspiration.png" \
    -resize 1600x \
    -quality 85 \
    "$OPTIMIZED_DIR/images/building-with-ai/magic-patterns-inspiration.jpg"

# ============================================
# Work samples (displayed ~400px wide as backgrounds = 800px for retina)
# ============================================
echo "  Work samples..."

for img in "$PUBLIC_DIR/work-samples"/*.jpg; do
    basename=$(basename "$img")
    magick "$img" \
        -resize 800x800\> \
        -quality 85 \
        "$OPTIMIZED_DIR/work-samples/$basename"
done

# ============================================
# Summary
# ============================================
echo ""
echo "Optimization complete!"
echo ""
echo "Size comparison:"
echo "  Originals:"
du -sh "$PUBLIC_DIR"/*.{png,jpg} "$PUBLIC_DIR/images" "$PUBLIC_DIR/work-samples" 2>/dev/null | head -20
echo ""
echo "  Optimized:"
du -sh "$OPTIMIZED_DIR"/* 2>/dev/null
echo ""
echo "Total original size: $(du -sh "$PUBLIC_DIR" | cut -f1)"
echo "Total optimized size: $(du -sh "$OPTIMIZED_DIR" | cut -f1)"
