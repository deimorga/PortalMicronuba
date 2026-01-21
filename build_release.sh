#!/bin/bash

# Configuration
RELEASE_DIR="release"
ROOT_DIR="portal_web_micronuba_new"
TIMESTAMP=$(date +"%Y%m%d_%H%M%S")
ZIP_NAME="portal_micronuba_${TIMESTAMP}.zip"
TEMP_DIR="temp_build"

# Create release directory
mkdir -p "$RELEASE_DIR"

# Clean and create temp directory
rm -rf "$TEMP_DIR"
mkdir -p "$TEMP_DIR/$ROOT_DIR"

# Copy files to temp directory using rsync to handle exclusions easily
echo "Staging files..."
rsync -av --progress . "$TEMP_DIR/$ROOT_DIR" \
    --exclude ".git" \
    --exclude ".gitignore" \
    --exclude "Dockerfile" \
    --exclude "docker-compose.yml" \
    --exclude "README.md" \
    --exclude "build_release.sh" \
    --exclude "release" \
    --exclude ".DS_Store" \
    --exclude ".vscode" \
    --exclude "logs" \
    --exclude "temp_build"

# Zip the project from the temp directory
echo "Creating release package: $RELEASE_DIR/$ZIP_NAME"
cd "$TEMP_DIR"
zip -r "../$RELEASE_DIR/$ZIP_NAME" "$ROOT_DIR"
cd ..

# Cleanup
rm -rf "$TEMP_DIR"

echo "Package created successfully at $RELEASE_DIR/$ZIP_NAME"
echo "Root directory in zip: $ROOT_DIR"
