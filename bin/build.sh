#!/usr/bin/env bash
#################
## GHAPI       ##
##             ##
## Builds PHAR ##
#################

# Get project root
bin_dir="$(cd "$(dirname "${BASH_SOURCE[0]}")" >/dev/null 2>&1 && pwd)"
project_root="$(dirname "${bin_dir}")"

# Filenames
php_ex="$(which php)"
creator="$(which phar-composer)"
output_file="${project_root}/build/ghapi.phar"

# Create build dir
mkdir -p "${project_root}/build"

# Remove previous build
rm -rf ${project_root}/build/*

# Create PHAR
"${php_ex}" -d phar.readonly=off "${creator}" build "${project_root}" "${output_file}"

# Set execute bit
chmod +x "${output_file}"

echo "Build finished"

exit 0
