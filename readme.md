# Warpaint

A responsive typographic CSS stylesheet.

Warpaint gives you a range of classes to work with typography, element-spacing and -positioning.
It aims for typographic rhythm out of the box.

**Note: this stylesheet should not be used in production yet as it is still under construction towards a stable release**

## Quick start
To get started, download and include the `warpaint.min.css` in the head of your html:
```html
<link rel="stylesheet" href="/warpaint.min.css" type="text/css">
```

Or you can use our unpkg version of warpaint.

```html
<link rel="stylesheet" href="https://unpkg.com/warpaint@0.0.9/dist/warpaint.min.css" type="text/css">
```

Full documentation can be consulted at [warpaint.thinktomorrow.be/docs](http://warpaint.thinktomorrow.be/docs).

## Project file structure
```
warpaint/
├── dist/
│   ├── warpaint.css
│   ├── warpaint.css.map
│   └── warpaint.min.css
└── docs/
└── src/
    └── sass
        ├── ...
        ├── settings.scss
        └── warpaint.scss
```

## Browser support
Out of the box, warpaint is supported in all modern browsers: Chrome, Firefox, Safari, Edge and Opera.

There is a fairly good support for IE10+ and most functionality should be working.
Since it relies on flexbox there is limited compatibility with IE9. For those in need for IE9 support, we provide a separate stylesheet which you can load via a conditional comment:

```html
    <link rel="stylesheet" href="/warpaint.min.css" type="text/css">
    <!--[if IE 9]><link rel="stylesheet" href="/warpaint-ie9.css" type="text/css" /><![endif]-->
```

## Customize
You can customize Warpaint by editing the `src/sass/settings.scss` file. The most important settings are:

```sass
  // Grid columns
  $grid-columns: 12

  // Base fontsize
  $base-font-size:  0.875em
```

## Contribute

Fork the github repository `https://github.com/thinktomorrow/warpaint.git`.
Next, install the node dependencies by running `npm install` in the root of the project
Run the sass build with gulp.

## Security

If you discover any security related issues, please email one of the author (see below) or use the issue tracker.

## Creators

- Ben Cavens <ben@thinktomorrow.be>

## Contributor

- Berkmans Johnny <johnny@thinktomorrow.be>

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
