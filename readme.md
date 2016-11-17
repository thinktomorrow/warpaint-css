# Warpaint

Think Tomorrow <strike>bootstrap</strike> boilerplate/stylesheet. 

**Note: this stylesheet should not be used in production yet as it is still under heavy construction towards a stable release**

## Warpaint follows these guidelines:
- never set font-size in the <html> to a pixel value because it overrides the user’s browser settings. Use em or rem instead
- it’s a best practice to use relative units like em for font-size.
- Size in em if the property scales according to it’s font-size
- Size everything else in rem.
- Increase font-size and line-height as screen sizes increase.

## Content

To just get started, you can use the `warpaint.css` from the /dist folder. For production, you may want to use
the minified `warpaint.min.css` file instead.

However warpaint really shines when you customize it. If you include the `src/sass` files to your build process, 
you can easily adjust the warpaint settings to match your project. Al the adjustable settings are found
in the `src/sass/settings.scss` file. 

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

## Sources
https://zellwk.com/blog/rem-vs-em/
https://zellwk.com/blog/responsive-typography/

## Contribute

Fork the github repository `https://github.com/thinktomorrow/warpaint.git`.
Next, install the node dependencies by running `npm install` in the root of the project

## Security

If you discover any security related issues, please email one of the author (see below) or use the issue tracker.

## Creators

- Ben Cavens <ben@thinktomorrow.be>

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
