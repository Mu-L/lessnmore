<?php 

header('Content-Type: text/plain');

// Ask browser to treat this as a download with filename example.tld_export_2000-01-31.txt
$filename = BCURLS_DOMAIN . '_export_' . date('Y-m-d') . '.txt';
header('Content-Disposition: attachment; filename="' . $filename . '"');

// NOTE: Per 301Works.org, format is tab-delimited text with columns: 
// (1) long url, (2) short URL, (3) date of creation, and (4) click count (optional).

foreach ($all_urls as $url) {
    print(
        // (1) long URL
        $url['url'] .
        "\t" .

        // (2) short URL
        BCURLS_URL . $url['custom_url'] .
        "\t" .

        // (3) date of creation
        // (we don't have that)
        "\t" .

        // (4) click count (optional)
        $url['hits'] .

        "\n"
    );
}
