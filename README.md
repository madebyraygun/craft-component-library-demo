# Craft Component Library Demo

This repo is a sample Craft implementation of our [Component Library](https://github.com/madebyraygun/craft-component-library) plugin and our [Matrix Block Loader](https://github.com/madebyraygun/craft-matrix-block-loader) plugin, which shows how to create a basic component system that is fully integrated with Craft CMS. 

## Requirements

This Craft CMS installation uses Craft 5.x, DDEV for local development, and vite for asset compilation.

## Installation

Assuming you already have DDEV installed:

- Clone the repo to your local system and navigate to the folder in the terminal.
- From your terminal, navigate to the folder and run the following commands:
  - `cp .env.example.dev .env`
  - `ddev start`
  - `ddev composer install`
  - `ddev npm install`

Your component library will be available at [https://craft-component-library-demo.ddev.site/component-library](https://craft-component-library-demo.ddev.site/component-library)

## Vite configuration

The Component Library plugin includes [Craft Plugin Vite]() to help link Craft CMS with your Vite configuration. To set up your project to use Vite, you'll need to do a couple of things:

* Update your DDEV configuration to open up the required ports for Vite.
* Enable the Vite plugin dev server in your .env file
* Install vite and any other required node modules to your package.json
* Create a Vite configuration which loads your `app.js` entry point. See `vite.config.js` for an example.
* Your `app.js` file should load relevant css and js modules from your component library. See `app.js` for an example.
* Add `{{ craft.library.script("src/js/app.js") }}` to your main site layout and your preview layout, which will determine whether Vite is running and load the appropriate files. (Update the path name to the location of your `app.js`)
* Run `ddev npm run dev` to start the dev service.

If all goes well, you should see changes to your components updated instantly when in dev mode.

## Context hooks

## Matrix blocks

