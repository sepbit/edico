# Codiad EditorConfig
EditorConfig for Codiad

[![Software License](https://img.shields.io/github/license/vitorteccom/codiad-editorconfig.svg)](LICENSE)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/vitorteccom/codiad-editorconfig/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/vitorteccom/codiad-editorconfig/?branch=master)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/vitorteccom/codiad-editorconfig/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)

This is a simple plugin for to support [EditorConfig](http://editorconfig.org/) in [Codiad](http://codiad.com/). This plugin is not official.

This package is compatible with code style [Standard](https://github.com/standard/standard), [PSR-1](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md) and [PSR-2](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md).

## Install

Via NPM.

``` bash
$ npm install -g editorconfig
```

Via Debian or Ubuntu.

``` bash
$ apt install editorconfig
```

In your plugin directory.

``` bash
$ git clone https://github.com/vitorteccom/codiad-editorconfig.git
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

[*.php]
indent_size = 4
```

This plugin only supports for **indent_style** and **indent_size**.

## Change log

Please see [CHANGELOG](docs/CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](docs/CONTRIBUTING.md) and [CODE_OF_CONDUCT](docs/CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email ``contato@vitortec.com`` instead of using the issue tracker.

## Credits

- [Vitor Guia](https://github.com/vitoranguia)
- [All Contributors](../../contributors)

## License

GPLv3. Please see [License File](LICENSE) for more information.
