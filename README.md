# Craft Component Library Demo

This repo is a sample Craft implementation of our [Component Library](https://github.com/madebyraygun/craft-component-library) plugin and our [Block Loader](https://github.com/madebyraygun/craft-block-loader) plugin, which shows how to create a complete component system that is fully integrated with Craft CMS. 

## Requirements

This Craft CMS installation uses Craft 5.x, DDEV for local development, and Vite.js for asset compilation.

## Installation

Assuming you already have DDEV installed:

- Clone the repo to your local system and navigate to the folder in your terminal application.
- Run the following commands in the root folder:
  - `cp .env.example.dev .env`
  - `ddev start`
  - `ddev npm install`
  - `ddev composer install`
  - `ddev craft install`  

Your component library will be available at [https://craft-component-library-demo.ddev.site/component-library](https://craft-component-library-demo.ddev.site/component-library)

Run `ddev npm run dev` to run Vite.js and see your edits updated in real-time in the component library and on the front-end of the site.

## Vite configuration

The plugin internally uses [nystudio107/craft-vite](https://nystudio107.com/docs/vite/) to provide seamless integration between Craft CMS and Vite.js. This allows you to use the latest ES6+ features, SCSS, PostCSS, and more in your components. 

To set up *your* project to use Vite, you'll need to do a couple of things:

* Update your [DDEV configuration](#ddev-configuration) to open up the required ports for Vite.
* Make sure the Vite dev server is enabled in your [`.env` file](https://github.com/madebyraygun/craft-component-library-demo/blob/dd33b61c078c5146fa4dddb35b76d362c7828e4d/.env.example.dev#L30)
* NPM install vite and any other required modules to your project. This example makes use of `vite-plugin-restart` to watch and reload when `twig` component files are edited. 
* Create a Vite configuration which loads your `app.js` entry point. See [vite.config.js](https://github.com/madebyraygun/craft-component-library-demo/blob/dev/vite.config.js) for our example.
* Your `app.js` file should load relevant css and js modules from your component library. See [app.js](https://github.com/madebyraygun/craft-component-library-demo/blob/dev/src/app.js) for our example.
* Add `{{ craft.library.script("src/app.js") }}` to your main site layout and your preview layout, which will determine whether Vite is running and load the appropriate files. See [_site.twig](https://github.com/madebyraygun/craft-component-library-demo/blob/dev/templates/_layouts/_site.twig#L11) for our example.

* Remember that if you are using `Vite` with `DDEV` or a custom `Docker` container you will need to start the server **inside** the container and not in your host machine. For Vite this would look like:

```bash
ddev npm run dev
```

### DDEV Configuration

To use Vite with `DDEV` you'll need to expose the ports by adding the following lines into your `ddev.yaml` file. (Dev environment only):

```yaml
web_extra_exposed_ports:
    - name: node-vite
      container_port: 8080
      http_port: 8081
      https_port: 8080
```

## Global and page-level content

For global components (i.e, masthead, navigation, site footer), we use [template hooks](https://craftcms.com/docs/5.x/extend/template-hooks.html) and a custom Craft module populate the template context. See the components in [`modules/layoutcontext`](https://github.com/madebyraygun/craft-component-library-demo/tree/dev/modules/layoutcontext) folder for a simple example:

* Hook the `global-context` in [`_site.twig`](https://github.com/madebyraygun/craft-component-library-demo/blob/dev/templates/_layouts/_site.twig)
* Include the masthead and footer templates in `_site.twig`, making sure to pass along the relevant context objects. e.g. `{% include '@modules/masthead' with masthead_context %}`
* The masthead_context object is populated by [`modules/layoutcontext/components/MastheadContext.php`](https://github.com/madebyraygun/craft-component-library-demo/blob/dev/modules/layoutcontext/components/MastheadContext.php). In our example we're using a matrix field to create a simple site navigation.

We use this system for populating body classes, sitewide notifications, and entry or page-level context as well. For matrix and nested entry blocks, we have also have a special loader.

## Matrix & Nested Entry blocks

Context for matrix blocks are defined in the blocks module folder at [`modules/blocks`](https://github.com/madebyraygun/craft-component-library-demo/tree/dev/modules/blocks), using the [Block Loader](https://github.com/madebyraygun/craft-block-loader) plugin to scaffold the block definitions. See that plugin documentation for more examples of how to create and load matrix block context.
