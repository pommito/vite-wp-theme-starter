<?php

add_action("wp_enqueue_scripts", function () {
    if (defined("WP_DEBUG") && WP_DEBUG) {
        // DEV ENV
        $viteDevServer = "http://localhost:3000";
        wp_enqueue_script(
            "vite-client",
            $viteDevServer . "/@vite/client",
            [],
            null,
            true
        );
        wp_enqueue_script(
            "theme",
            $viteDevServer . "/assets/js/main.js",
            [],
            null,
            true
        );
    } else {
        // PROD ENV
        $manifestPath = get_theme_file_path("dist/.vite/manifest.json");

        if (file_exists($manifestPath)) {
            $manifest = json_decode(file_get_contents($manifestPath), true);

            if (isset($manifest["assets/js/main.js"])) {
                $mainJs = $manifest["assets/js/main.js"]["file"];
                wp_enqueue_script(
                    "theme",
                    get_theme_file_uri("dist/" . $mainJs),
                    [],
                    null,
                    true
                );
            }
        }
    }
});
