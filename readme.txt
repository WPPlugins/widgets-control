=== Widgets Control ===
Contributors: itthinx
Donate link: http://www.itthinx.com/plugins/widgets-control/
Tags: widget, sidebar, context, visibility, theme, widgets, appearance, conditional, control, customize, display, hide, logic, placement, restrict, restrict content, shortcode, show, view
Requires at least: 4.0
Tested up to: 4.8
Stable tag: 1.7.0
License: GPLv3

A Widget toolbox that adds visibility management and helps to control where widgets, sidebars and content are shown efficiently.

== Description ==

_Widgets Control_ is a toolbox that features visibility management for all widgets, sidebars and content sections.
It allows to show widgets and sidebars based on conditions -
you can choose to show them only on certain pages or
exclude them from being displayed.
Sections of content can also be restricted by using this plugin's `[widgets_control]` shortcode.

For each widget and sidebar, you can decide where it should be displayed:

- show it on all pages
- show it on some pages
- show it on all except some pages

To include or exclude pages, the plugin allows you to indicate page ids, titles or slugs and tokens that identify the front page, categories, tags, etc.

In addition to page ids, titles and slugs, these tokens can be used to determine where a widget should or should not be displayed:

<code>[home] [front] [single] [page] [category] ...</code>

On sites using [WPML](http://wpml.org), widgets can be shown conditionally based on the language viewed.

The `[widgets_control]` shortcode is used to embed content and show it conditionally similar to the visibility options used for widgets and sidebars.
For example, `[widgets_control conditions="{archive}"]This text is shown only when the content is displayed on an archive page.[/widgets_control]`.

See the [documentation](http://docs.itthinx.com/document/widgets-control/) for more details.

_Widgets Control_ works with virtually any widget. It is compatible with lots of plugins, among these it has been tested with:

- [Groups](http://wordpress.org/plugins/groups/)
- [WooCommerce](http://wordpress.org/plugins/woocommerce/)
- [Events Manager](http://wordpress.org/plugins/events-manager/)
- [BuddyPress](http://buddypress.org)
- [bbPress](http://wordpress.org/plugins/bbpress/)
- [Ninja Forms](http://wordpress.org/plugins/ninja-forms)
- [Gravity Forms](http://gravityforms.com/)
- [Jetpack](http://wordpress.org/plugins/jetpack/)
- [WPML](http://wpml.org)
- [NextGEN Gallery](http://wordpress.org/plugins/nextgen-gallery/)
- [Image Widget](http://wordpress.org/plugins/image-widget/)
- [MailChimp for WordPress](http://wordpress.org/plugins/mailchimp-for-wp/)
- [Custom Post Widget](http://wordpress.org/plugins/custom-post-widget/)
- [The Events Calendar](http://wordpress.org/plugins/the-events-calendar/)
- [MailPoet Newsletters](http://wordpress.org/plugins/wysija-newsletters)

### Widgets Control Pro ###

Our [Widgets Control Pro](http://www.itthinx.com/shop/widgets-control-pro/) provides additional features:

- Conditions based on the viewed __post type__. For example, show a widget only on posts with `[type:post]` or only on product pages with `[type:product]`
- Show or hide widgets on full __page hierarchies__, where conditions are based on a parent page and all its child pages: `some-page/*`
- Show or hide widgets based on user __roles__. For example, show a widget to subscribers and customers only: `[role:subscriber,customer]`
- Show or hide widgets based on a user's __group membership__ with [Groups](http://wordpress.org/plugins/groups/). For example, show a widget only to registered users with `[group:Registered]` or show a widget only to users in a Premium group using `[group:Premium]`
- Show or hide widgets for archive pages of a specific post type. For example, `[archive:product]` can be used to show widgets for the WooCommerce shop page and product archives only.
- Allows to specify exclusions. For example, to show a widget only on pages, but exclude it from being shown on one or more specific pages.

### Feedback ###

Feedback is welcome!

If you need help, have problems, want to leave feedback or want to provide constructive criticism, please do so here at the [Widgets Control](http://www.itthinx.com/plugins/widgets-control/) plugin page.

Please try to solve problems there before you rate this plugin or say it doesn't work. There goes a _lot_ of work into providing you with quality plugins!

Please help with your feedback and we're also grateful if you help spread the word about this plugin.

**Thanks!**

#### Twitter ####

Follow [@itthinx](http://twitter.com/itthinx) on Twitter for updates on this and other plugins.


== Installation ==

= Dashboard =

Log in as an administrator and go to <strong>Plugins > Add New</strong>.

Type <em>Widgets Control</em> in the search field and click <em>Search Plugins</em>, locate the <em>Widgets Control<em> plugin by <em>itthinx</em> and install it by clicking <em>Install Now</em>.
Now <em>activate</em> the plugin to have the widget placement features available.

= FTP =

You can install the plugin via FTP, see [Manual Plugin Installation](http://codex.wordpress.org/Managing_Plugins#Manual_Plugin_Installation).

== Screenshots ==

1. Widget visibility example I.
2. Widget visibility example II.
3. Widget visibility example III.
4. Sidebar visibility example.
5. Shortcode usage examples to restrict sections of content.

== Frequently Asked Questions ==

= Where is the documentation for this plugin? =

You can find the documentation on the [Widgets Control](http://docs.itthinx.com/document/widgets-control/) documentation pages.

== Changelog ==

= 1.7.0 =
* German translation added.
* Updated plugin tags.
* Added text domain and domain path to the plugin header.

== Upgrade Notice ==

= 1.7.0 =
* This release adds the German translation and has been tested with WordPress 4.8.
