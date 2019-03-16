# Edico

[![Software License](https://img.shields.io/github/license/vitorteccom/edico.svg)](COPYING)

> EDItorCOnfig for COdiad

This is a simple plugin for to support [EditorConfig](https://editorconfig.org) in [Codiad](http://codiad.com). This plugin is not official.

This package is compatible with code style [StandardJS](https://github.com/standard/standard), [LibreJS](https://www.gnu.org/software/librejs) and [PSR-2](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md).

## Install

To install you need to have the following pieces of software on your computer:

- EditorConfig

You can install `EditorConfig` via your operating system's package manager. For Debian-like GNU/Linux distributions this would be:

``` bash
# apt-get install editorconfig
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

This plugin only supports for `indent_style`, `indent_size` or `tab_width`.

Partial support: `tab_width` cannot be set to a different value than `indent_size` when `indent_style` is "tab".

## Contributing

Pull Requests not accepted, please contact us at: `contato@vitortec.com`.

### Contributors

- [Vitor Guia](https://github.com/vitoranguia)
- [All Contributors](https://github.com/vitorteccom/dekajs/contributors)

## License

GPL-3.0-or-later, please see [COPYING](COPYING) file for more information.
