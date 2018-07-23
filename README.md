# Edico
EDItorCOnfig for COdiad

[![Software License](https://img.shields.io/github/license/vitorteccom/edico.svg)](LICENSE.md)

This is a simple plugin for to support [EditorConfig](http://editorconfig.org/) in [Codiad](http://codiad.com/). This plugin is not official.

This package is compatible with code style [Standard](https://github.com/standard/standard), [LibreJS](https://www.gnu.org/software/librejs) and [PSR-2](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md).

## Install

To install you need to have the following pieces of software on your computer:

- EditorConfig

You can install ``EditorConfig`` via your operating system's package manager. For Debian-like GNU/Linux distributions this would be:

``` bash
$ apt-get install editorconfig
```

## Usage

This is minimal example.

``` yaml
# see editorconfig.org

root = true

[*]
indent_style = space
indent_size = 2

[*.md]
indent_style = tab
tab_width = 2

[*.php]
indent_size = 4
```

This plugin only supports for ``indent_style``, ``indent_size`` or ``tab_width``.

Partial support: ``tab_width`` cannot be set to a different value than ``indent_size`` when ``indent_style`` is "tab".

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email ``contato@vitortec.com`` instead of using the issue tracker.

## Credits

- [Vitor Guia](https://github.com/vitoranguia)
- [All Contributors](../../contributors)

## License

GPL-3.0-or-later. Please see [License File](LICENSE.md) for more information.
