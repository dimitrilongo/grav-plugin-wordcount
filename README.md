# [![Grav Word Count Plugin](assets/grav-wordcount.png)][project]

[![Release](https://img.shields.io/github/release/dimitrilongo/grav-plugin-wordcount.svg)](https://github.com/dimitrilongo/grav-plugin-wordcount/releases)
[![Issues](https://img.shields.io/github/issues/dimitrilongo/grav-plugin-wordcount.svg)](https://github.com/dimitrilongo/grav-plugin-wordcount/issues)
[![Downloads](https://img.shields.io/github/downloads/dimitrilongo/grav-plugin-wordcount/total.svg)](https://github.com/dimitrilongo/grav-plugin-wordcount/archive/master.zip)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE.txt "License")

> This plugin gives you word count statistics for any content.

##### Table of Contents:

* [About](#grav-wordcount-plugin)
* [Installation and Updates](#installation-and-updates)
* [Usage](#usage)
    * [getWordCount](#user-content-get-word-count-from-a-string)
* [Disclaimer](#disclaimer)
* [Troubleshooting](#troubleshooting)
* [Contributing](#contributing)
* [License](#license)
* [Thanks](#thanks)

# Grav wordcount Plugin

The **Grav Word Count Plugin** for [Grav](http://github.com/getgrav/grav) gives you word count statistics for any content.

# Installation and Updates

The **Grav Word Count Plugin** is easy to install with GPM.

```
$ bin/gpm install wordcount
```

Or clone from GitHub and put in the `user/plugins/wordcount` folder.

For more informations, please check the [Installation and update guide](docs/INSTALL.md).


# Usage

Inside content files.

## Examples

#### Get word count from a string
```
{{ getWordCount('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ut sem tempus, faucibus nulla nec, mattis urna.') }}
```

#### Example Output for `{{ getWordCount('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ut sem tempus, faucibus nulla nec, mattis urna.') }}`
```
17
```

#### Get word count from content
```
{{ getWordCount(content) }}
```

# Troubleshooting

If you find a bug, [please open a new issue][issues]

# Disclaimer

I've 'written' this plugin for my own use. It comes without any guarantee, so your mileage may vary in using it. If you find bugs or have great additions you'd like to share, use github to fork the project and share your improvements by initiating pull request

# Tested on Grav

[![Latest Stable Version](https://poser.pugx.org/getgrav/grav/v/stable)](https://packagist.org/packages/getgrav/grav)

# Contributing

You can contribute at any time! Before opening any issue, please search for existing issues and review the [guidelines for contributing](docs/CONTRIBUTING.md).

After that please note:

* If you find a bug, would like to make a feature request or suggest an improvement, [please open a new issue][issues]. If you have any interesting ideas for additions to the syntax please do suggest them as well!
* Feature requests are more likely to get attention if you include a clearly described use case.
* If you wish to submit a pull request, please make again sure that your request match the [guidelines for contributing](docs/CONTRIBUTING.md) and that you keep track of adding unit tests for any new or changed functionality.

See also the list of [contributors] who participated in this project.

# Licence

See [Licence](https://github.com/dimitrilongo/grav-plugin-wordcount/blob/master/LICENSE.txt)

# Thanks

[Sommerregen/grav-plugin-shortcodes](https://github.com/Sommerregen/grav-plugin-shortcodes)

[getgrav/grav](https://github.com/getgrav/grav)

[github]: https://github.com/dimitrilongo/ "GitHub account from Dimitri Longo"
[mit-license]: http://www.opensource.org/licenses/mit-license.php "MIT license"

[project]: https://github.com/dimitrilongo/grav-plugin-wordcount
[issues]: https://github.com/dimitrilongo/grav-plugin-wordcount/issues "GitHub Issues for Grav wordcount Plugin"
[contributors]: https://github.com/dimitrilongo/grav-plugin-wordcount/graphs/contributors "List of contributors of the project"
