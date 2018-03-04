/**
 * Vitortec.com Codiad EditorConfig
 *
 * ECMAScript Version 6
 *
 * @author    Vitor Guia <vitor.guia@vitortec.com>
 * @copyright 2011-2018 Vitortec.com
 * @license   https://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version   GIT: <git_id>
 * @see       https://devs.vitortec.com/codiad-editorconfig Documentation of Codiad EditorConfig
 */

/* global jQuery, amplify */

(function (global, $) {
  // Define core
  var codiad = global.codiad
  var scripts = document.getElementsByTagName('script')
  var path = scripts[scripts.length - 1].src.split('?')[0]
  var curpath = path.split('/').slice(0, -1).join('/') + '/'

  // Instantiates plugin
  $(function () {
    codiad.EditorConfig.init()
  })

  codiad.EditorConfig = {

    path: curpath,

    init: function () {
      amplify.subscribe('active.onFocus', function () {
        var path = codiad.active.getPath()
        $.getJSON(curpath + 'controller.php?p=' + path, function (result) {
          if (result.indentSize >= 1) {
            codiad.editor.setTabSize(result.indentSize)
          }
          if (result.indentStyle === 'space') {
            codiad.editor.setSoftTabs(true)
          }
          if (result.indentStyle === 'tab') {
            codiad.editor.setSoftTabs(false)
          }
        })
      })
    }
  }
})(this, jQuery)
