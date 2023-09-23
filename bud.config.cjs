/**
 * Compiler configuration
 *
 * @see {@link https://roots.io/docs/sage sage documentation}
 * @see {@link https://bud.js.org/guides/configure bud.js configuration guide}
 *
 * @param {import('@roots/bud').Bud} app
 */

// 1. 旧
//    使用 ES 模块语法导出的，并不是常规的 CommonJS 导出。这可能导致 Bud 在处理文件时出现问题。
//    为了解决这个问题，你可以将 bud.config.js 文件改为使用 CommonJS 导出。
//
// 2. js 改名为 cjs
//    由于你的项目中的 package.json 文件中包含了 "type": "module"，这导致了文件被当作 ES 模块处理，而不是常规的 CommonJS 模块。
//    为了解决这个问题，你可以将 bud.config.js 文件的扩展名改为 .cjs
//
// 3. 以上两种方式同样试用与 tailwind.config.cjs
//
// export default async (app) => {

// 新 start
const colors = require('tailwindcss/colors');
const daisyUI = require('daisyui');
module.exports = async (app) => {
// 新 end

  /**
   * Application assets & entrypoints
   *
   * @see {@link https://bud.js.org/docs/bud.entry}
   * @see {@link https://bud.js.org/docs/bud.assets}
   */
  app
    .entry('app', ['@scripts/app', '@styles/app'])
    .entry('editor', ['@scripts/editor', '@styles/editor'])
    .assets(['images']);

  /**
   * Set public path
   *
   * @see {@link https://bud.js.org/docs/bud.setPublicPath}
   */
  // PhpStorm 启动使用，因为 Mac 80 端口，权限问题，需要配合 wp-config.php 的 WordPress 绑定多个域名
  // app.setPublicPath('/wp-content/themes/sage/public/');
  // mamp 和 生产时 使用
  app.setPublicPath('/wp-glamore/wp-content/themes/sage/public/');

  /**
   * Development server settings
   *
   * @see {@link https://bud.js.org/docs/bud.setUrl}
   * @see {@link https://bud.js.org/docs/bud.setProxyUrl}
   * @see {@link https://bud.js.org/docs/bud.watch}
   */
  app
    .setUrl('http://localhost:3000/wp-glamore')
    .setProxyUrl('http://localhost/wp-glamore')
    .watch(['resources/views', 'app']);

  /**
   * Generate WordPress `theme.json`
   *
   * @note This overwrites `theme.json` on every build.
   *
   * @see {@link https://bud.js.org/extensions/sage/theme.json}
   * @see {@link https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json}
   */
  app.wpjson
    .set('settings.color.custom', false)
    .set('settings.color.customDuotone', false)
    .set('settings.color.customGradient', false)
    .set('settings.color.defaultDuotone', false)
    .set('settings.color.defaultGradients', false)
    .set('settings.color.defaultPalette', false)
    .set('settings.color.duotone', [])
    .set('settings.custom.spacing', {})
    .set('settings.custom.typography.font-size', {})
    .set('settings.custom.typography.line-height', {})
    .set('settings.spacing.padding', true)
    .set('settings.spacing.units', ['px', '%', 'em', 'rem', 'vw', 'vh'])
    .set('settings.typography.customFontSize', false)
    .useTailwindColors()
    .useTailwindFontFamily()
    .useTailwindFontSize()
    .enable();
};
