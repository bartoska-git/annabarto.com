#!/bin/bash

echo "Deploying to staging.annabarto.com..."
rsync -avz --delete www/ annabarto@annabarto.com:/home/annabarto/staging.annabarto.com/public/ 
