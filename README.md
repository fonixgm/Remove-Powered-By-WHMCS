f
# Remove Powered By WHMCS

A simple WHMCS hook script to customize the footer text and URL. This script replaces the "Powered by WHMCompleteSolution" text with your own branding and updates the URL accordingly.
## About

**Custom WHMCS Footer Hook -** a simple script to customize the footer text and URL in WHMCS. Change "Powered by WHMCompleteSolution" to your own branding and link.
## Features

**Modify Footer Text:** Changes "Powered by WHMCompleteSolution" to "Powered by company".
**Update Footer URL:** Replaces the WHMCS link with a custom URL (https://company.com).

## Installation
### Step 1: Download the Repository

Download the repository as a ZIP file from [here.](https://github.com/fonixgm/Remove-Powered-By-WHMCS/archive/refs/heads/main.zip)
### Step 2: Extract the ZIP File

Extract the contents of the ZIP file to a directory on your computer.
### Step 3: Upload the Hook File

Upload the custom_footer.php file to the includes/hooks directory of your WHMCS installation. The final path should look like this:

    /path/to/your/whmcs/includes/hooks/custom_footer.php

### Step 4: Clear Cache

Clear your browser cache and refresh your WHMCS client area to see the changes.
## How It Works

This hook uses JavaScript to modify the DOM elements after the page has loaded. It targets the specific footer text and link and updates them as per the custom values provided.

## Here is the code used in the hook:

    <?php
    add_hook('ClientAreaFooterOutput', 1, function($vars) {
        return '<script>
                    document.addEventListener("DOMContentLoaded", function() {
                        var footerText = document.querySelector("p[style*=\'text-align:center;\']");
                        var footerLink = footerText.querySelector("a[href*=\'www.whmcs.com\']");
                        if (footerText && footerLink) {
                            footerText.childNodes[0].textContent = "Powered by ";
                            footerLink.innerHTML = "COMPANY";
                            footerLink.href = "https://company.com";
                        }
                    });
                </script>';
    });


For any issues or questions, please open an issue in this repository or contact us directly.
