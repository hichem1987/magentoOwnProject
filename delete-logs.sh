#!/bin/bash

echo "delete cache"
sudo rm -rf var/cache/*
sudo rm -rf var/page_cache/*
sudo rm -rf var/generation/*
sudo rm -rf generated/code/*
sudo rm -rf var/view_preprocessed/*