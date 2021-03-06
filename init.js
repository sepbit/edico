/**
 * @licstart  The following is the entire license notice for the
 * JavaScript code in this page.
 *
 * Edico - EDItorCOnfig for COdiad
 * Copyright (C) 2018-2019  Sepbit
 *
 * The JavaScript code in this page is free software: you can
 * redistribute it and/or modify it under the terms of the GNU
 * General Public License (GNU GPL) as published by the Free Software
 * Foundation, either version 3 of the License, or (at your option)
 * any later version.  The code is distributed WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU GPL for more details.
 *
 * As additional permission under GNU GPL version 3 section 7, you
 * may distribute non-source (e.g., minimized or compacted) forms of
 * that code without the copy of the GNU GPL normally required by
 * section 4, provided you include this license notice and a URL
 * through which recipients can access the Corresponding Source.
 *
 * @licend  The above is the entire license notice
 * for the JavaScript code in this page.
 */

/* global jQuery, amplify */

(function (global, $) {
  /** Define core */
  var codiad = global.codiad
  var scripts = document.getElementsByTagName('script')
  var path = scripts[scripts.length - 1].src.split('?')[0]
  var curpath = path.split('/').slice(0, -1).join('/') + '/'

  /** Instantiates plugin */
  $(function () {
    codiad.EditorConfig.init()
  })

  codiad.EditorConfig = {

    path: curpath,

    init: function () {
      amplify.subscribe('active.onFocus', function () {
        /** Get result EditorConfig */
        $.getJSON(this.path + 'controller.php?p=' + codiad.active.getPath(), function (result) {
          /** Set indent */
          if (result.tabWidth >= 2 && result.tabWidth <= 8) {
            codiad.editor.setTabSize(result.tabWidth)
          }

          /** Set space */
          if (result.indentStyle === 'space') {
            codiad.editor.setSoftTabs(true)
          }

          /** Set tab */
          if (result.indentStyle === 'tab') {
            codiad.editor.setSoftTabs(false)
          }
        })
      })
    }
  }
})(this, jQuery)
