# Multilingual Plugin Translation Guide

## Overview
This plugin supports multiple languages through WordPress' built-in localization system.

## Translation Files
- POT (Template) file: Located in `/languages/multilingual-plugin.pot`
- PO (Portable Object) files: Created for each language
- MO (Machine Object) files: Compiled from PO files
- Create PO and MO file using Poedit tool

## How to create POT (The command insert in htdocs folder)

(1) php -v

(2) curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar

(3) php wp-cli.phar --info

(4) echo 'alias wp="php ~/wp-cli.phar"' >> ~/.bashrc

(5) source ~/.bashrc

(6) echo 'alias wp="php /c/xampp/htdocs/wp-cli.phar"' >> ~/.bashrc

(7) source ~/.bashrc

(8) wp --info

(9) cd /c/xampp/htdocs/wordpress/wp-content/plugins/my-simple-plugin (your plugin path)

(10) wp i18n make-pot ./ ./languages/my-simple-plugin.pot --slug=my-simple-plugin (replace your slug)

## 🔄 CI/CD Integration using GitHub Actions and FTP

This project is configured for automatic deployment using GitHub Actions and FTP. The deployment workflow is defined in the `.github/workflows/plugin-ci.yml` file.

### 📂 Workflow Overview

The GitHub Actions workflow automatically triggers on push to the main branch (or any other specified branch) and deploys the project files to your server via FTP.

### ⚙️ Setup Instructions

Follow these steps to configure the CI/CD deployment:

#### 1. Create the Workflow File

Ensure the file `.github/workflows/plugin-ci.yml` exists in your repository. This file contains the logic for building and deploying the code via FTP.

#### 2. Define FTP Secrets in GitHub

To securely store your FTP credentials, you need to define the following secrets in your GitHub repository:

- `FTP_HOST` – Your FTP server hostname or IP (e.g., `ftp.example.com`)
- `FTP_USER` – Your FTP username
- `FTP_PASS` – Your FTP password

##### Steps to Add Secrets:

1. Go to your GitHub repository.
2. Navigate to: **Settings** > **Secrets and variables** > **Actions**
3. Click on **New repository secret**
4. Add each of the following secrets one by one:
   - Name: `FTP_HOST`, Value: your FTP host
   - Name: `FTP_USER`, Value: your FTP username
   - Name: `FTP_PASS`, Value: your FTP password

#### 3. How It Works

Once everything is set up:
- On every code push (depending on the workflow trigger), GitHub Actions will run the CI/CD pipeline.
- The code is automatically deployed to your FTP server using the credentials defined in the repository secrets.

### ✅ Example

```yaml
      host: ${{ secrets.FTP_HOST }}
      user: ${{ secrets.FTP_USER }}
      password: ${{ secrets.FTP_PASS }}
