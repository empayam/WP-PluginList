# Plugin List Block

A WordPress plugin that adds a Gutenberg block to display a list of installed plugins.

## Description

The Plugin List Block plugin provides a custom Gutenberg block that, when added to a page or post, will display a list of all installed plugins. This block is useful for displaying plugin information on a WordPress site for documentation, debugging, or information purposes.

## Installation

1. Download the `plugin-list-block.zip` file from the releases section.
2. In your WordPress dashboard, go to **Plugins** > **Add New** > **Upload Plugin**.
3. Upload the `plugin-list-block.zip` file and click **Install Now**.
4. Activate the plugin through the **Plugins** menu in WordPress.

Alternatively, you can install the plugin manually:

1. Upload the `plugin-list-block` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the **Plugins** menu in WordPress.

## Usage

1. Go to the post or page where you want to add the plugin list block.
2. Open the Gutenberg editor.
3. Click on the **Add Block** button and search for "Plugin List".
4. Add the "Plugin List" block to your content.
5. Publish or update your post or page.

The block will render a list of all installed plugins, displaying the name and version of each plugin.

## Development

### File Structure

- `plugin-list-block.php` - The main plugin file that initializes the block.
- `block.js` - The JavaScript file that registers the Gutenberg block.
- `editor.css` - The CSS file for block styling in the editor.

### Build from Source

1. Clone the repository:
   ```bash
   git clone https://github.com/empayam/WP-PluginList.git
