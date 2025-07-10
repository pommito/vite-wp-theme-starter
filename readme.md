# ViteJS & Tailwind theme starter WP

This repo is a WordPress starter theme that uses ViteJS and TailwindCSS. Huge thanks to [Stéfan Lancelot](https://github.com/stfnlnc) for helping me setting up the theme.

## Update for FSE

This new version is premade for Full Site Editing (FSE) and uses the new block editor. If you want to use it in the classic theme, you can just delete the `templates`folder and the `index.html` file in it and also the `theme.json`.

## How to use the theme

### 1. Clone the repository into the theme folder of your WordPress installation:
   ```bash
   git clone git@github.com:pommito/wp-theme-starter.git
   ```

### 2. Install dependencies:
   ```bash
   cd wp-theme-starter
   npm install
   ```

### 3. Start the development server:
   ```bash
   npm run dev
   ```

***FYI** : For the theme to work in dev mode, make sure to add WP_ENV to "local" in your wp-config.php.*

If your using, Local by Flywheel for local development, you'll need to switch the router mode to "localhost" in the Local settings, otherwise you could have CORS issues using the theme.
