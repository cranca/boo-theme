# Boo Theme

Boo theme is a simple FSE theme based on Frost to play around with template patterns and theme.json.

## Installation

Clone the repo or download the .zip. place the boo-theme folder inside your instace's theme folder and activate it.

## Playing

All the meat is in Patterns tab in the editor. Just play and get fun.

## Developing

Feel free to fork, contribute or whatever you want with the code. Above you have some code chunks to help you:

### Call the default images

You can use this to call the default images inside the neew pattern.

```
' . esc_url( get_template_directory_uri() ) . '/assets/images/boo-image-placeholder.png' . '
' . esc_url( get_template_directory_uri() ) . '/assets/images/boo-image-background.jpeg' . '
' . esc_url( get_template_directory_uri() ) . '/assets/images/boo-avatar-placeholder.png' . '
' . esc_url( get_template_directory_uri() ) . '/assets/images/boo-avatar-placeholder-white.png' . '
```

### Translate string

Add this to any text string to make it translatable.

```
' . esc_html__( 'Your text', 'boo' ) . '
```

### Pattern header

Keep consistency adding this to new pattern beginning.

```
/**
 * Pattern:
 *
 * @package Boo Theme
 * @since 0.0.1
 */
```
