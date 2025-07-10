<?php

if (!defined("ABSPATH")) {
  exit();
}

if (!function_exists("load_vitejs_assets")) {
  /**
   * Load ViteJS assets.
   */
  function load_vitejs_assets(): void
  {
    if (WP_ENV === "local") {

      echo '<script type="module" src="http://localhost:5173/@vite/client"></script>';
      echo '<script type="module" src="http://localhost:5173/assets/js/main.js"></script>';

    } elseif (is_dir(get_theme_file_path() . "/dist")) {

      $manifest_path = get_theme_file_path() . "/dist/.vite/manifest.json";
      if (!file_exists($manifest_path)) {
        return;
      }
      $data = file_get_contents($manifest_path);
      $manifest = json_decode($data, true);

      if (!isset($manifest["main.js"])) {
        return;
      }
      $entry = $manifest["main.js"];
      wp_enqueue_script("vitejs", get_template_directory_uri() . "/dist/" . $entry["file"], [], 1, true);
      wp_enqueue_style("vitejs", get_template_directory_uri() . "/dist/" . $entry["css"][0]);

    }
  }
}

add_action("wp_enqueue_scripts", "load_vitejs_assets", priority: 999);