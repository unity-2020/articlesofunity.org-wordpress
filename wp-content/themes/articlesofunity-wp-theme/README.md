# Unity 2020

Whenever you do any development on this package, it will be a good idea to run
`npm run build` when you are done. This will rebuild any assets in the dev/dist
directory and also autoprefix any new css styles you've created.

## Dev directory

Here is a place where we can keep important utility css and html blocks under
version control. In addition, there are development utils here that can speed up
the creation of custom HTML blocks along with tailwind classes.

To ensure that a tailwind class is carried over into the `dist` folder, you'll
need to use the class somewhere in an html file in the `src` directory. Any HTML
blocks in the components folder will also be minified and copied to the `dist`
folder when you run `npm run build`.

## CLI

```npm run dev```

Starts the simple server where you can work on components with autoreloading.
This is only useful for HTML that we'd like to keep under source control even
though it will ultimately be copy/pasted (*shudder*) into WordPress as a block. 

```npm run build```

Copies and minifies all the html files in `components` over to `dist`. Creates a
production build of purged tailwind css styles in `dist/tailwind.css`.
Additionally completes all the tasks originally created for Wordpres's Twenty
Twenty template.

## Tailwind

The dist build of tailwind's styles are automatically loaded in to WordPress.
However, the styles are dependent upon actually being used inside an HTML file
in the `src` directory, otherwise PurgeCSS will remove them to keep the build
size small.