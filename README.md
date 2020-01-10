# oc-assetmonitor-plugin

Generate customizable badges to monitor your theme's static assets.

![](https://img.shields.io/badge/bundle%20size-41.62%20KB-brightgreen)
![](https://img.shields.io/badge/javascript-27.75%20KB-orange)
![](https://img.shields.io/badge/css-13.87%20KB-blue)

## Basic usage

This plugin simply measures the size of static assets in your theme directory, and generates a JSON endpoint that is compatible with shields.io. To create a badge to monitor your assets, install this plugin with the following command.

```
git clone git@github.com:scottbedard/oc-assetmonitor-plugin.git plugins/bedard/assetmonitor
```

Once this is done, use the following endpoint to create a badge.

```
https://example.com/api/bedard/assetmonitor/size?path=mytheme/assets/**/*.js
```

The `path` query parameter accepts a CSV of glob file paths relative to your theme directory. Once you have JSON matching the files you want, check out the [shields.io documentation](https://shields.io/endpoint) to customize the badge appearance.

## License

[MIT](https://github.com/scottbedard/oc-assetmonitor-plugin/blob/master/LICENSE)

Copyright (c) 2020-present, Scott Bedard.
