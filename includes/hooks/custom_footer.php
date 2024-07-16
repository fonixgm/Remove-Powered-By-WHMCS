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
