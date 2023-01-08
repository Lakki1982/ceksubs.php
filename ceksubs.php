<!DOCTYPE html>
<!-- saved from url=(0042)https://www.jdoodle.com/php-online-editor/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style id="ace-xcode">.ace-xcode .ace_gutter {background: #e8e8e8;color: #333}.ace-xcode .ace_print-margin {width: 1px;background: #e8e8e8}.ace-xcode {background-color: #FFFFFF;color: #000000}.ace-xcode .ace_cursor {color: #000000}.ace-xcode .ace_marker-layer .ace_selection {background: #B5D5FF}.ace-xcode.ace_multiselect .ace_selection.ace_start {box-shadow: 0 0 3px 0px #FFFFFF;}.ace-xcode .ace_marker-layer .ace_step {background: rgb(198, 219, 174)}.ace-xcode .ace_marker-layer .ace_bracket {margin: -1px 0 0 -1px;border: 1px solid #BFBFBF}.ace-xcode .ace_marker-layer .ace_active-line {background: rgba(0, 0, 0, 0.071)}.ace-xcode .ace_gutter-active-line {background-color: rgba(0, 0, 0, 0.071)}.ace-xcode .ace_marker-layer .ace_selected-word {border: 1px solid #B5D5FF}.ace-xcode .ace_constant.ace_language,.ace-xcode .ace_keyword,.ace-xcode .ace_meta,.ace-xcode .ace_variable.ace_language {color: #C800A4}.ace-xcode .ace_invisible {color: #BFBFBF}.ace-xcode .ace_constant.ace_character,.ace-xcode .ace_constant.ace_other {color: #275A5E}.ace-xcode .ace_constant.ace_numeric {color: #3A00DC}.ace-xcode .ace_entity.ace_other.ace_attribute-name,.ace-xcode .ace_support.ace_constant,.ace-xcode .ace_support.ace_function {color: #450084}.ace-xcode .ace_fold {background-color: #C800A4;border-color: #000000}.ace-xcode .ace_entity.ace_name.ace_tag,.ace-xcode .ace_support.ace_class,.ace-xcode .ace_support.ace_type {color: #790EAD}.ace-xcode .ace_storage {color: #C900A4}.ace-xcode .ace_string {color: #DF0002}.ace-xcode .ace_comment {color: #008E00}.ace-xcode .ace_indent-guide {background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAACCAYAAACZgbYnAAAAE0lEQVQImWP4////f4bLly//BwAmVgd1/w11/gAAAABJRU5ErkJggg==) right repeat-y}
/*# sourceURL=ace/css/ace-xcode */</style><style id="autocompletion.css">.ace_editor.ace_autocomplete .ace_marker-layer .ace_active-line {    background-color: #CAD6FA;    z-index: 1;}.ace_dark.ace_editor.ace_autocomplete .ace_marker-layer .ace_active-line {    background-color: #3a674e;}.ace_editor.ace_autocomplete .ace_line-hover {    border: 1px solid #abbffe;    margin-top: -1px;    background: rgba(233,233,253,0.4);    position: absolute;    z-index: 2;}.ace_dark.ace_editor.ace_autocomplete .ace_line-hover {    border: 1px solid rgba(109, 150, 13, 0.8);    background: rgba(58, 103, 78, 0.62);}.ace_completion-meta {    opacity: 0.5;    margin: 0.9em;}.ace_completion-message {    color: blue;}.ace_editor.ace_autocomplete .ace_completion-highlight{    color: #2d69c7;}.ace_dark.ace_editor.ace_autocomplete .ace_completion-highlight{    color: #93ca12;}.ace_editor.ace_autocomplete {    width: 300px;    z-index: 200000;    border: 1px lightgray solid;    position: fixed;    box-shadow: 2px 3px 5px rgba(0,0,0,.2);    line-height: 1.4;    background: #fefefe;    color: #111;}.ace_dark.ace_editor.ace_autocomplete {    border: 1px #484747 solid;    box-shadow: 2px 3px 5px rgba(0, 0, 0, 0.51);    line-height: 1.4;    background: #25282c;    color: #c1c1c1;}
/*# sourceURL=ace/css/autocompletion.css */</style><style>.ace_snippet-marker {    -moz-box-sizing: border-box;    box-sizing: border-box;    background: rgba(194, 193, 208, 0.09);    border: 1px dotted rgba(211, 208, 235, 0.62);    position: absolute;}</style><style>    .error_widget_wrapper {        background: inherit;        color: inherit;        border:none    }    .error_widget {        border-top: solid 2px;        border-bottom: solid 2px;        margin: 5px 0;        padding: 10px 40px;        white-space: pre-wrap;    }    .error_widget.ace_error, .error_widget_arrow.ace_error{        border-color: #ff5a5a    }    .error_widget.ace_warning, .error_widget_arrow.ace_warning{        border-color: #F1D817    }    .error_widget.ace_info, .error_widget_arrow.ace_info{        border-color: #5a5a5a    }    .error_widget.ace_ok, .error_widget_arrow.ace_ok{        border-color: #5aaa5a    }    .error_widget_arrow {        position: absolute;        border: solid 5px;        border-top-color: transparent!important;        border-right-color: transparent!important;        border-left-color: transparent!important;        top: -5px;    }</style><style id="ace-tm">.ace-tm .ace_gutter {background: #f0f0f0;color: #333;}.ace-tm .ace_print-margin {width: 1px;background: #e8e8e8;}.ace-tm .ace_fold {background-color: #6B72E6;}.ace-tm {background-color: #FFFFFF;color: black;}.ace-tm .ace_cursor {color: black;}.ace-tm .ace_invisible {color: rgb(191, 191, 191);}.ace-tm .ace_storage,.ace-tm .ace_keyword {color: blue;}.ace-tm .ace_constant {color: rgb(197, 6, 11);}.ace-tm .ace_constant.ace_buildin {color: rgb(88, 72, 246);}.ace-tm .ace_constant.ace_language {color: rgb(88, 92, 246);}.ace-tm .ace_constant.ace_library {color: rgb(6, 150, 14);}.ace-tm .ace_invalid {background-color: rgba(255, 0, 0, 0.1);color: red;}.ace-tm .ace_support.ace_function {color: rgb(60, 76, 114);}.ace-tm .ace_support.ace_constant {color: rgb(6, 150, 14);}.ace-tm .ace_support.ace_type,.ace-tm .ace_support.ace_class {color: rgb(109, 121, 222);}.ace-tm .ace_keyword.ace_operator {color: rgb(104, 118, 135);}.ace-tm .ace_string {color: rgb(3, 106, 7);}.ace-tm .ace_comment {color: rgb(76, 136, 107);}.ace-tm .ace_comment.ace_doc {color: rgb(0, 102, 255);}.ace-tm .ace_comment.ace_doc.ace_tag {color: rgb(128, 159, 191);}.ace-tm .ace_constant.ace_numeric {color: rgb(0, 0, 205);}.ace-tm .ace_variable {color: rgb(49, 132, 149);}.ace-tm .ace_xml-pe {color: rgb(104, 104, 91);}.ace-tm .ace_entity.ace_name.ace_function {color: #0000A2;}.ace-tm .ace_heading {color: rgb(12, 7, 255);}.ace-tm .ace_list {color:rgb(185, 6, 144);}.ace-tm .ace_meta.ace_tag {color:rgb(0, 22, 142);}.ace-tm .ace_string.ace_regex {color: rgb(255, 0, 0)}.ace-tm .ace_marker-layer .ace_selection {background: rgb(181, 213, 255);}.ace-tm.ace_multiselect .ace_selection.ace_start {box-shadow: 0 0 3px 0px white;}.ace-tm .ace_marker-layer .ace_step {background: rgb(252, 255, 0);}.ace-tm .ace_marker-layer .ace_stack {background: rgb(164, 229, 101);}.ace-tm .ace_marker-layer .ace_bracket {margin: -1px 0 0 -1px;border: 1px solid rgb(192, 192, 192);}.ace-tm .ace_marker-layer .ace_active-line {background: rgba(0, 0, 0, 0.07);}.ace-tm .ace_gutter-active-line {background-color : #dcdcdc;}.ace-tm .ace_marker-layer .ace_selected-word {background: rgb(250, 250, 255);border: 1px solid rgb(200, 200, 250);}.ace-tm .ace_indent-guide {background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAACCAYAAACZgbYnAAAAE0lEQVQImWP4////f4bLly//BwAmVgd1/w11/gAAAABJRU5ErkJggg==") right repeat-y;}
/*# sourceURL=ace/css/ace-tm */</style><style id="ace_editor.css">.ace_br1 {border-top-left-radius    : 3px;}.ace_br2 {border-top-right-radius   : 3px;}.ace_br3 {border-top-left-radius    : 3px; border-top-right-radius:    3px;}.ace_br4 {border-bottom-right-radius: 3px;}.ace_br5 {border-top-left-radius    : 3px; border-bottom-right-radius: 3px;}.ace_br6 {border-top-right-radius   : 3px; border-bottom-right-radius: 3px;}.ace_br7 {border-top-left-radius    : 3px; border-top-right-radius:    3px; border-bottom-right-radius: 3px;}.ace_br8 {border-bottom-left-radius : 3px;}.ace_br9 {border-top-left-radius    : 3px; border-bottom-left-radius:  3px;}.ace_br10{border-top-right-radius   : 3px; border-bottom-left-radius:  3px;}.ace_br11{border-top-left-radius    : 3px; border-top-right-radius:    3px; border-bottom-left-radius:  3px;}.ace_br12{border-bottom-right-radius: 3px; border-bottom-left-radius:  3px;}.ace_br13{border-top-left-radius    : 3px; border-bottom-right-radius: 3px; border-bottom-left-radius:  3px;}.ace_br14{border-top-right-radius   : 3px; border-bottom-right-radius: 3px; border-bottom-left-radius:  3px;}.ace_br15{border-top-left-radius    : 3px; border-top-right-radius:    3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px;}.ace_editor {position: relative;overflow: hidden;padding: 0;font: 12px/normal 'Monaco', 'Menlo', 'Ubuntu Mono', 'Consolas', 'source-code-pro', monospace;direction: ltr;text-align: left;-webkit-tap-highlight-color: rgba(0, 0, 0, 0);}.ace_scroller {position: absolute;overflow: hidden;top: 0;bottom: 0;background-color: inherit;-ms-user-select: none;-moz-user-select: none;-webkit-user-select: none;user-select: none;cursor: text;}.ace_content {position: absolute;box-sizing: border-box;min-width: 100%;contain: style size layout;font-variant-ligatures: no-common-ligatures;}.ace_dragging .ace_scroller:before{position: absolute;top: 0;left: 0;right: 0;bottom: 0;content: '';background: rgba(250, 250, 250, 0.01);z-index: 1000;}.ace_dragging.ace_dark .ace_scroller:before{background: rgba(0, 0, 0, 0.01);}.ace_selecting, .ace_selecting * {cursor: text !important;}.ace_gutter {position: absolute;overflow : hidden;width: auto;top: 0;bottom: 0;left: 0;cursor: default;z-index: 4;-ms-user-select: none;-moz-user-select: none;-webkit-user-select: none;user-select: none;contain: style size layout;}.ace_gutter-active-line {position: absolute;left: 0;right: 0;}.ace_scroller.ace_scroll-left {box-shadow: 17px 0 16px -16px rgba(0, 0, 0, 0.4) inset;}.ace_gutter-cell {position: absolute;top: 0;left: 0;right: 0;padding-left: 19px;padding-right: 6px;background-repeat: no-repeat;}.ace_gutter-cell.ace_error {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAABOFBMVEX/////////QRswFAb/Ui4wFAYwFAYwFAaWGAfDRymzOSH/PxswFAb/SiUwFAYwFAbUPRvjQiDllog5HhHdRybsTi3/Tyv9Tir+Syj/UC3////XurebMBIwFAb/RSHbPx/gUzfdwL3kzMivKBAwFAbbvbnhPx66NhowFAYwFAaZJg8wFAaxKBDZurf/RB6mMxb/SCMwFAYwFAbxQB3+RB4wFAb/Qhy4Oh+4QifbNRcwFAYwFAYwFAb/QRzdNhgwFAYwFAbav7v/Uy7oaE68MBK5LxLewr/r2NXewLswFAaxJw4wFAbkPRy2PyYwFAaxKhLm1tMwFAazPiQwFAaUGAb/QBrfOx3bvrv/VC/maE4wFAbRPBq6MRO8Qynew8Dp2tjfwb0wFAbx6eju5+by6uns4uH9/f36+vr/GkHjAAAAYnRSTlMAGt+64rnWu/bo8eAA4InH3+DwoN7j4eLi4xP99Nfg4+b+/u9B/eDs1MD1mO7+4PHg2MXa347g7vDizMLN4eG+Pv7i5evs/v79yu7S3/DV7/498Yv24eH+4ufQ3Ozu/v7+y13sRqwAAADLSURBVHjaZc/XDsFgGIBhtDrshlitmk2IrbHFqL2pvXf/+78DPokj7+Fz9qpU/9UXJIlhmPaTaQ6QPaz0mm+5gwkgovcV6GZzd5JtCQwgsxoHOvJO15kleRLAnMgHFIESUEPmawB9ngmelTtipwwfASilxOLyiV5UVUyVAfbG0cCPHig+GBkzAENHS0AstVF6bacZIOzgLmxsHbt2OecNgJC83JERmePUYq8ARGkJx6XtFsdddBQgZE2nPR6CICZhawjA4Fb/chv+399kfR+MMMDGOQAAAABJRU5ErkJggg==");background-repeat: no-repeat;background-position: 2px center;}.ace_gutter-cell.ace_warning {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAmVBMVEX///8AAAD///8AAAAAAABPSzb/5sAAAAB/blH/73z/ulkAAAAAAAD85pkAAAAAAAACAgP/vGz/rkDerGbGrV7/pkQICAf////e0IsAAAD/oED/qTvhrnUAAAD/yHD/njcAAADuv2r/nz//oTj/p064oGf/zHAAAAA9Nir/tFIAAAD/tlTiuWf/tkIAAACynXEAAAAAAAAtIRW7zBpBAAAAM3RSTlMAABR1m7RXO8Ln31Z36zT+neXe5OzooRDfn+TZ4p3h2hTf4t3k3ucyrN1K5+Xaks52Sfs9CXgrAAAAjklEQVR42o3PbQ+CIBQFYEwboPhSYgoYunIqqLn6/z8uYdH8Vmdnu9vz4WwXgN/xTPRD2+sgOcZjsge/whXZgUaYYvT8QnuJaUrjrHUQreGczuEafQCO/SJTufTbroWsPgsllVhq3wJEk2jUSzX3CUEDJC84707djRc5MTAQxoLgupWRwW6UB5fS++NV8AbOZgnsC7BpEAAAAABJRU5ErkJggg==");background-position: 2px center;}.ace_gutter-cell.ace_info {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAAAAAA6mKC9AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAAJ0Uk5TAAB2k804AAAAPklEQVQY02NgIB68QuO3tiLznjAwpKTgNyDbMegwisCHZUETUZV0ZqOquBpXj2rtnpSJT1AEnnRmL2OgGgAAIKkRQap2htgAAAAASUVORK5CYII=");background-position: 2px center;}.ace_dark .ace_gutter-cell.ace_info {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQBAMAAADt3eJSAAAAJFBMVEUAAAChoaGAgIAqKiq+vr6tra1ZWVmUlJSbm5s8PDxubm56enrdgzg3AAAAAXRSTlMAQObYZgAAAClJREFUeNpjYMAPdsMYHegyJZFQBlsUlMFVCWUYKkAZMxZAGdxlDMQBAG+TBP4B6RyJAAAAAElFTkSuQmCC");}.ace_scrollbar {contain: strict;position: absolute;right: 0;bottom: 0;z-index: 6;}.ace_scrollbar-inner {position: absolute;cursor: text;left: 0;top: 0;}.ace_scrollbar-v{overflow-x: hidden;overflow-y: scroll;top: 0;}.ace_scrollbar-h {overflow-x: scroll;overflow-y: hidden;left: 0;}.ace_print-margin {position: absolute;height: 100%;}.ace_text-input {position: absolute;z-index: 0;width: 0.5em;height: 1em;opacity: 0;background: transparent;-moz-appearance: none;appearance: none;border: none;resize: none;outline: none;overflow: hidden;font: inherit;padding: 0 1px;margin: 0 -1px;contain: strict;-ms-user-select: text;-moz-user-select: text;-webkit-user-select: text;user-select: text;white-space: pre!important;}.ace_text-input.ace_composition {background: transparent;color: inherit;z-index: 1000;opacity: 1;}.ace_composition_placeholder { color: transparent }.ace_composition_marker { border-bottom: 1px solid;position: absolute;border-radius: 0;margin-top: 1px;}[ace_nocontext=true] {transform: none!important;filter: none!important;clip-path: none!important;mask : none!important;contain: none!important;perspective: none!important;mix-blend-mode: initial!important;z-index: auto;}.ace_layer {z-index: 1;position: absolute;overflow: hidden;word-wrap: normal;white-space: pre;height: 100%;width: 100%;box-sizing: border-box;pointer-events: none;}.ace_gutter-layer {position: relative;width: auto;text-align: right;pointer-events: auto;height: 1000000px;contain: style size layout;}.ace_text-layer {font: inherit !important;position: absolute;height: 1000000px;width: 1000000px;contain: style size layout;}.ace_text-layer > .ace_line, .ace_text-layer > .ace_line_group {contain: style size layout;position: absolute;top: 0;left: 0;right: 0;}.ace_hidpi .ace_text-layer,.ace_hidpi .ace_gutter-layer,.ace_hidpi .ace_content,.ace_hidpi .ace_gutter {contain: strict;will-change: transform;}.ace_hidpi .ace_text-layer > .ace_line, .ace_hidpi .ace_text-layer > .ace_line_group {contain: strict;}.ace_cjk {display: inline-block;text-align: center;}.ace_cursor-layer {z-index: 4;}.ace_cursor {z-index: 4;position: absolute;box-sizing: border-box;border-left: 2px solid;transform: translatez(0);}.ace_multiselect .ace_cursor {border-left-width: 1px;}.ace_slim-cursors .ace_cursor {border-left-width: 1px;}.ace_overwrite-cursors .ace_cursor {border-left-width: 0;border-bottom: 1px solid;}.ace_hidden-cursors .ace_cursor {opacity: 0.2;}.ace_hasPlaceholder .ace_hidden-cursors .ace_cursor {opacity: 0;}.ace_smooth-blinking .ace_cursor {transition: opacity 0.18s;}.ace_animate-blinking .ace_cursor {animation-duration: 1000ms;animation-timing-function: step-end;animation-name: blink-ace-animate;animation-iteration-count: infinite;}.ace_animate-blinking.ace_smooth-blinking .ace_cursor {animation-duration: 1000ms;animation-timing-function: ease-in-out;animation-name: blink-ace-animate-smooth;}@keyframes blink-ace-animate {from, to { opacity: 1; }60% { opacity: 0; }}@keyframes blink-ace-animate-smooth {from, to { opacity: 1; }45% { opacity: 1; }60% { opacity: 0; }85% { opacity: 0; }}.ace_marker-layer .ace_step, .ace_marker-layer .ace_stack {position: absolute;z-index: 3;}.ace_marker-layer .ace_selection {position: absolute;z-index: 5;}.ace_marker-layer .ace_bracket {position: absolute;z-index: 6;}.ace_marker-layer .ace_error_bracket {position: absolute;border-bottom: 1px solid #DE5555;border-radius: 0;}.ace_marker-layer .ace_active-line {position: absolute;z-index: 2;}.ace_marker-layer .ace_selected-word {position: absolute;z-index: 4;box-sizing: border-box;}.ace_line .ace_fold {box-sizing: border-box;display: inline-block;height: 11px;margin-top: -2px;vertical-align: middle;background-image:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAJCAYAAADU6McMAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAJpJREFUeNpi/P//PwOlgAXGYGRklAVSokD8GmjwY1wasKljQpYACtpCFeADcHVQfQyMQAwzwAZI3wJKvCLkfKBaMSClBlR7BOQikCFGQEErIH0VqkabiGCAqwUadAzZJRxQr/0gwiXIal8zQQPnNVTgJ1TdawL0T5gBIP1MUJNhBv2HKoQHHjqNrA4WO4zY0glyNKLT2KIfIMAAQsdgGiXvgnYAAAAASUVORK5CYII="),url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAA3CAYAAADNNiA5AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAACJJREFUeNpi+P//fxgTAwPDBxDxD078RSX+YeEyDFMCIMAAI3INmXiwf2YAAAAASUVORK5CYII=");background-repeat: no-repeat, repeat-x;background-position: center center, top left;color: transparent;border: 1px solid black;border-radius: 2px;cursor: pointer;pointer-events: auto;}.ace_dark .ace_fold {}.ace_fold:hover{background-image:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAJCAYAAADU6McMAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAJpJREFUeNpi/P//PwOlgAXGYGRklAVSokD8GmjwY1wasKljQpYACtpCFeADcHVQfQyMQAwzwAZI3wJKvCLkfKBaMSClBlR7BOQikCFGQEErIH0VqkabiGCAqwUadAzZJRxQr/0gwiXIal8zQQPnNVTgJ1TdawL0T5gBIP1MUJNhBv2HKoQHHjqNrA4WO4zY0glyNKLT2KIfIMAAQsdgGiXvgnYAAAAASUVORK5CYII="),url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAA3CAYAAADNNiA5AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAACBJREFUeNpi+P//fz4TAwPDZxDxD5X4i5fLMEwJgAADAEPVDbjNw87ZAAAAAElFTkSuQmCC");}.ace_tooltip {background-color: #FFF;background-image: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.1));border: 1px solid gray;border-radius: 1px;box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);color: black;max-width: 100%;padding: 3px 4px;position: fixed;z-index: 999999;box-sizing: border-box;cursor: default;white-space: pre;word-wrap: break-word;line-height: normal;font-style: normal;font-weight: normal;letter-spacing: normal;pointer-events: none;}.ace_folding-enabled > .ace_gutter-cell {padding-right: 13px;}.ace_fold-widget {box-sizing: border-box;margin: 0 -12px 0 1px;display: none;width: 11px;vertical-align: top;background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAANElEQVR42mWKsQ0AMAzC8ixLlrzQjzmBiEjp0A6WwBCSPgKAXoLkqSot7nN3yMwR7pZ32NzpKkVoDBUxKAAAAABJRU5ErkJggg==");background-repeat: no-repeat;background-position: center;border-radius: 3px;border: 1px solid transparent;cursor: pointer;}.ace_folding-enabled .ace_fold-widget {display: inline-block;   }.ace_fold-widget.ace_end {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAANElEQVR42m3HwQkAMAhD0YzsRchFKI7sAikeWkrxwScEB0nh5e7KTPWimZki4tYfVbX+MNl4pyZXejUO1QAAAABJRU5ErkJggg==");}.ace_fold-widget.ace_closed {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAAGCAYAAAAG5SQMAAAAOUlEQVR42jXKwQkAMAgDwKwqKD4EwQ26sSOkVWjgIIHAzPiCgaqiqnJHZnKICBERHN194O5b9vbLuAVRL+l0YWnZAAAAAElFTkSuQmCCXA==");}.ace_fold-widget:hover {border: 1px solid rgba(0, 0, 0, 0.3);background-color: rgba(255, 255, 255, 0.2);box-shadow: 0 1px 1px rgba(255, 255, 255, 0.7);}.ace_fold-widget:active {border: 1px solid rgba(0, 0, 0, 0.4);background-color: rgba(0, 0, 0, 0.05);box-shadow: 0 1px 1px rgba(255, 255, 255, 0.8);}.ace_dark .ace_fold-widget {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAAHklEQVQIW2P4//8/AzoGEQ7oGCaLLAhWiSwB146BAQCSTPYocqT0AAAAAElFTkSuQmCC");}.ace_dark .ace_fold-widget.ace_end {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAAH0lEQVQIW2P4//8/AxQ7wNjIAjDMgC4AxjCVKBirIAAF0kz2rlhxpAAAAABJRU5ErkJggg==");}.ace_dark .ace_fold-widget.ace_closed {background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAAFCAYAAACAcVaiAAAAHElEQVQIW2P4//+/AxAzgDADlOOAznHAKgPWAwARji8UIDTfQQAAAABJRU5ErkJggg==");}.ace_dark .ace_fold-widget:hover {box-shadow: 0 1px 1px rgba(255, 255, 255, 0.2);background-color: rgba(255, 255, 255, 0.1);}.ace_dark .ace_fold-widget:active {box-shadow: 0 1px 1px rgba(255, 255, 255, 0.2);}.ace_inline_button {border: 1px solid lightgray;display: inline-block;margin: -1px 8px;padding: 0 5px;pointer-events: auto;cursor: pointer;}.ace_inline_button:hover {border-color: gray;background: rgba(200,200,200,0.2);display: inline-block;pointer-events: auto;}.ace_fold-widget.ace_invalid {background-color: #FFB4B4;border-color: #DE5555;}.ace_fade-fold-widgets .ace_fold-widget {transition: opacity 0.4s ease 0.05s;opacity: 0;}.ace_fade-fold-widgets:hover .ace_fold-widget {transition: opacity 0.05s ease 0.05s;opacity:1;}.ace_underline {text-decoration: underline;}.ace_bold {font-weight: bold;}.ace_nobold .ace_bold {font-weight: normal;}.ace_italic {font-style: italic;}.ace_error-marker {background-color: rgba(255, 0, 0,0.2);position: absolute;z-index: 9;}.ace_highlight-marker {background-color: rgba(255, 255, 0,0.2);position: absolute;z-index: 8;}.ace_mobile-menu {position: absolute;line-height: 1.5;border-radius: 4px;-ms-user-select: none;-moz-user-select: none;-webkit-user-select: none;user-select: none;background: white;box-shadow: 1px 3px 2px grey;border: 1px solid #dcdcdc;color: black;}.ace_dark > .ace_mobile-menu {background: #333;color: #ccc;box-shadow: 1px 3px 2px grey;border: 1px solid #444;}.ace_mobile-button {padding: 2px;cursor: pointer;overflow: hidden;}.ace_mobile-button:hover {background-color: #eee;opacity:1;}.ace_mobile-button:active {background-color: #ddd;}.ace_placeholder {font-family: arial;transform: scale(0.9);transform-origin: left;white-space: pre;opacity: 0.7;margin: 0 10px;}
/*# sourceURL=ace/css/ace_editor.css */</style><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"><meta property="og:url" content="https://www.jdoodle.com"><meta property="og:type" content="website"><meta property="og:title" content="JDoodle - Online Compiler, Editor for Java, C/C++, etc"><meta property="og:description" content="JDoodle is an Online Compiler, Editor, IDE  for Java, C, C++, PHP, Perl, Python, Ruby and many more.  You can run your programs on the fly online, and you can save and share them with others. Quick and Easy way to compile and run programs online."><meta property="og:image" content="https://www.jdoodle.com/assets/jdoodle-og.jpeg"><meta property="og:image:alt" content="JDoodle"><meta name="google-site-verification" content="UvObv0WXViGO2pEP8egoe3k1sXqHcsSeAfEEjnUyuXg"><meta name="msvalidate.01" content="93539EB8D681BD90594A81FCAF6560BC"><style type="text/css">svg:not(:root).svg-inline--fa {
  overflow: visible;
}

.svg-inline--fa {
  display: inline-block;
  font-size: inherit;
  height: 1em;
  overflow: visible;
  vertical-align: -0.125em;
}
.svg-inline--fa.fa-lg {
  vertical-align: -0.225em;
}
.svg-inline--fa.fa-w-1 {
  width: 0.0625em;
}
.svg-inline--fa.fa-w-2 {
  width: 0.125em;
}
.svg-inline--fa.fa-w-3 {
  width: 0.1875em;
}
.svg-inline--fa.fa-w-4 {
  width: 0.25em;
}
.svg-inline--fa.fa-w-5 {
  width: 0.3125em;
}
.svg-inline--fa.fa-w-6 {
  width: 0.375em;
}
.svg-inline--fa.fa-w-7 {
  width: 0.4375em;
}
.svg-inline--fa.fa-w-8 {
  width: 0.5em;
}
.svg-inline--fa.fa-w-9 {
  width: 0.5625em;
}
.svg-inline--fa.fa-w-10 {
  width: 0.625em;
}
.svg-inline--fa.fa-w-11 {
  width: 0.6875em;
}
.svg-inline--fa.fa-w-12 {
  width: 0.75em;
}
.svg-inline--fa.fa-w-13 {
  width: 0.8125em;
}
.svg-inline--fa.fa-w-14 {
  width: 0.875em;
}
.svg-inline--fa.fa-w-15 {
  width: 0.9375em;
}
.svg-inline--fa.fa-w-16 {
  width: 1em;
}
.svg-inline--fa.fa-w-17 {
  width: 1.0625em;
}
.svg-inline--fa.fa-w-18 {
  width: 1.125em;
}
.svg-inline--fa.fa-w-19 {
  width: 1.1875em;
}
.svg-inline--fa.fa-w-20 {
  width: 1.25em;
}
.svg-inline--fa.fa-pull-left {
  margin-right: 0.3em;
  width: auto;
}
.svg-inline--fa.fa-pull-right {
  margin-left: 0.3em;
  width: auto;
}
.svg-inline--fa.fa-border {
  height: 1.5em;
}
.svg-inline--fa.fa-li {
  width: 2em;
}
.svg-inline--fa.fa-fw {
  width: 1.25em;
}

.fa-layers svg.svg-inline--fa {
  bottom: 0;
  left: 0;
  margin: auto;
  position: absolute;
  right: 0;
  top: 0;
}

.fa-layers {
  display: inline-block;
  height: 1em;
  position: relative;
  text-align: center;
  vertical-align: -0.125em;
  width: 1em;
}
.fa-layers svg.svg-inline--fa {
  -webkit-transform-origin: center center;
          transform-origin: center center;
}

.fa-layers-counter, .fa-layers-text {
  display: inline-block;
  position: absolute;
  text-align: center;
}

.fa-layers-text {
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  -webkit-transform-origin: center center;
          transform-origin: center center;
}

.fa-layers-counter {
  background-color: #ff253a;
  border-radius: 1em;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  color: #fff;
  height: 1.5em;
  line-height: 1;
  max-width: 5em;
  min-width: 1.5em;
  overflow: hidden;
  padding: 0.25em;
  right: 0;
  text-overflow: ellipsis;
  top: 0;
  -webkit-transform: scale(0.25);
          transform: scale(0.25);
  -webkit-transform-origin: top right;
          transform-origin: top right;
}

.fa-layers-bottom-right {
  bottom: 0;
  right: 0;
  top: auto;
  -webkit-transform: scale(0.25);
          transform: scale(0.25);
  -webkit-transform-origin: bottom right;
          transform-origin: bottom right;
}

.fa-layers-bottom-left {
  bottom: 0;
  left: 0;
  right: auto;
  top: auto;
  -webkit-transform: scale(0.25);
          transform: scale(0.25);
  -webkit-transform-origin: bottom left;
          transform-origin: bottom left;
}

.fa-layers-top-right {
  right: 0;
  top: 0;
  -webkit-transform: scale(0.25);
          transform: scale(0.25);
  -webkit-transform-origin: top right;
          transform-origin: top right;
}

.fa-layers-top-left {
  left: 0;
  right: auto;
  top: 0;
  -webkit-transform: scale(0.25);
          transform: scale(0.25);
  -webkit-transform-origin: top left;
          transform-origin: top left;
}

.fa-lg {
  font-size: 1.3333333333em;
  line-height: 0.75em;
  vertical-align: -0.0667em;
}

.fa-xs {
  font-size: 0.75em;
}

.fa-sm {
  font-size: 0.875em;
}

.fa-1x {
  font-size: 1em;
}

.fa-2x {
  font-size: 2em;
}

.fa-3x {
  font-size: 3em;
}

.fa-4x {
  font-size: 4em;
}

.fa-5x {
  font-size: 5em;
}

.fa-6x {
  font-size: 6em;
}

.fa-7x {
  font-size: 7em;
}

.fa-8x {
  font-size: 8em;
}

.fa-9x {
  font-size: 9em;
}

.fa-10x {
  font-size: 10em;
}

.fa-fw {
  text-align: center;
  width: 1.25em;
}

.fa-ul {
  list-style-type: none;
  margin-left: 2.5em;
  padding-left: 0;
}
.fa-ul > li {
  position: relative;
}

.fa-li {
  left: -2em;
  position: absolute;
  text-align: center;
  width: 2em;
  line-height: inherit;
}

.fa-border {
  border: solid 0.08em #eee;
  border-radius: 0.1em;
  padding: 0.2em 0.25em 0.15em;
}

.fa-pull-left {
  float: left;
}

.fa-pull-right {
  float: right;
}

.fa.fa-pull-left,
.fas.fa-pull-left,
.far.fa-pull-left,
.fal.fa-pull-left,
.fab.fa-pull-left {
  margin-right: 0.3em;
}
.fa.fa-pull-right,
.fas.fa-pull-right,
.far.fa-pull-right,
.fal.fa-pull-right,
.fab.fa-pull-right {
  margin-left: 0.3em;
}

.fa-spin {
  -webkit-animation: fa-spin 2s infinite linear;
          animation: fa-spin 2s infinite linear;
}

.fa-pulse {
  -webkit-animation: fa-spin 1s infinite steps(8);
          animation: fa-spin 1s infinite steps(8);
}

@-webkit-keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}

@keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}
.fa-rotate-90 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
  -webkit-transform: rotate(90deg);
          transform: rotate(90deg);
}

.fa-rotate-180 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
  -webkit-transform: rotate(180deg);
          transform: rotate(180deg);
}

.fa-rotate-270 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
  -webkit-transform: rotate(270deg);
          transform: rotate(270deg);
}

.fa-flip-horizontal {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
  -webkit-transform: scale(-1, 1);
          transform: scale(-1, 1);
}

.fa-flip-vertical {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
  -webkit-transform: scale(1, -1);
          transform: scale(1, -1);
}

.fa-flip-both, .fa-flip-horizontal.fa-flip-vertical {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
  -webkit-transform: scale(-1, -1);
          transform: scale(-1, -1);
}

:root .fa-rotate-90,
:root .fa-rotate-180,
:root .fa-rotate-270,
:root .fa-flip-horizontal,
:root .fa-flip-vertical,
:root .fa-flip-both {
  -webkit-filter: none;
          filter: none;
}

.fa-stack {
  display: inline-block;
  height: 2em;
  position: relative;
  width: 2.5em;
}

.fa-stack-1x,
.fa-stack-2x {
  bottom: 0;
  left: 0;
  margin: auto;
  position: absolute;
  right: 0;
  top: 0;
}

.svg-inline--fa.fa-stack-1x {
  height: 1em;
  width: 1.25em;
}
.svg-inline--fa.fa-stack-2x {
  height: 2em;
  width: 2.5em;
}

.fa-inverse {
  color: #fff;
}

.sr-only {
  border: 0;
  clip: rect(0, 0, 0, 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px;
}

.sr-only-focusable:active, .sr-only-focusable:focus {
  clip: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  position: static;
  width: auto;
}

.svg-inline--fa .fa-primary {
  fill: var(--fa-primary-color, currentColor);
  opacity: 1;
  opacity: var(--fa-primary-opacity, 1);
}

.svg-inline--fa .fa-secondary {
  fill: var(--fa-secondary-color, currentColor);
  opacity: 0.4;
  opacity: var(--fa-secondary-opacity, 0.4);
}

.svg-inline--fa.fa-swap-opacity .fa-primary {
  opacity: 0.4;
  opacity: var(--fa-secondary-opacity, 0.4);
}

.svg-inline--fa.fa-swap-opacity .fa-secondary {
  opacity: 1;
  opacity: var(--fa-primary-opacity, 1);
}

.svg-inline--fa mask .fa-primary,
.svg-inline--fa mask .fa-secondary {
  fill: black;
}

.fad.fa-inverse {
  color: #fff;
}</style><style type="text/css">svg:not(:root).svg-inline--fa {
  overflow: visible;
}

.svg-inline--fa {
  display: inline-block;
  font-size: inherit;
  height: 1em;
  overflow: visible;
  vertical-align: -0.125em;
}
.svg-inline--fa.fa-lg {
  vertical-align: -0.225em;
}
.svg-inline--fa.fa-w-1 {
  width: 0.0625em;
}
.svg-inline--fa.fa-w-2 {
  width: 0.125em;
}
.svg-inline--fa.fa-w-3 {
  width: 0.1875em;
}
.svg-inline--fa.fa-w-4 {
  width: 0.25em;
}
.svg-inline--fa.fa-w-5 {
  width: 0.3125em;
}
.svg-inline--fa.fa-w-6 {
  width: 0.375em;
}
.svg-inline--fa.fa-w-7 {
  width: 0.4375em;
}
.svg-inline--fa.fa-w-8 {
  width: 0.5em;
}
.svg-inline--fa.fa-w-9 {
  width: 0.5625em;
}
.svg-inline--fa.fa-w-10 {
  width: 0.625em;
}
.svg-inline--fa.fa-w-11 {
  width: 0.6875em;
}
.svg-inline--fa.fa-w-12 {
  width: 0.75em;
}
.svg-inline--fa.fa-w-13 {
  width: 0.8125em;
}
.svg-inline--fa.fa-w-14 {
  width: 0.875em;
}
.svg-inline--fa.fa-w-15 {
  width: 0.9375em;
}
.svg-inline--fa.fa-w-16 {
  width: 1em;
}
.svg-inline--fa.fa-w-17 {
  width: 1.0625em;
}
.svg-inline--fa.fa-w-18 {
  width: 1.125em;
}
.svg-inline--fa.fa-w-19 {
  width: 1.1875em;
}
.svg-inline--fa.fa-w-20 {
  width: 1.25em;
}
.svg-inline--fa.fa-pull-left {
  margin-right: 0.3em;
  width: auto;
}
.svg-inline--fa.fa-pull-right {
  margin-left: 0.3em;
  width: auto;
}
.svg-inline--fa.fa-border {
  height: 1.5em;
}
.svg-inline--fa.fa-li {
  width: 2em;
}
.svg-inline--fa.fa-fw {
  width: 1.25em;
}

.fa-layers svg.svg-inline--fa {
  bottom: 0;
  left: 0;
  margin: auto;
  position: absolute;
  right: 0;
  top: 0;
}

.fa-layers {
  display: inline-block;
  height: 1em;
  position: relative;
  text-align: center;
  vertical-align: -0.125em;
  width: 1em;
}
.fa-layers svg.svg-inline--fa {
  -webkit-transform-origin: center center;
          transform-origin: center center;
}

.fa-layers-counter, .fa-layers-text {
  display: inline-block;
  position: absolute;
  text-align: center;
}

.fa-layers-text {
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  -webkit-transform-origin: center center;
          transform-origin: center center;
}

.fa-layers-counter {
  background-color: #ff253a;
  border-radius: 1em;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  color: #fff;
  height: 1.5em;
  line-height: 1;
  max-width: 5em;
  min-width: 1.5em;
  overflow: hidden;
  padding: 0.25em;
  right: 0;
  text-overflow: ellipsis;
  top: 0;
  -webkit-transform: scale(0.25);
          transform: scale(0.25);
  -webkit-transform-origin: top right;
          transform-origin: top right;
}

.fa-layers-bottom-right {
  bottom: 0;
  right: 0;
  top: auto;
  -webkit-transform: scale(0.25);
          transform: scale(0.25);
  -webkit-transform-origin: bottom right;
          transform-origin: bottom right;
}

.fa-layers-bottom-left {
  bottom: 0;
  left: 0;
  right: auto;
  top: auto;
  -webkit-transform: scale(0.25);
          transform: scale(0.25);
  -webkit-transform-origin: bottom left;
          transform-origin: bottom left;
}

.fa-layers-top-right {
  right: 0;
  top: 0;
  -webkit-transform: scale(0.25);
          transform: scale(0.25);
  -webkit-transform-origin: top right;
          transform-origin: top right;
}

.fa-layers-top-left {
  left: 0;
  right: auto;
  top: 0;
  -webkit-transform: scale(0.25);
          transform: scale(0.25);
  -webkit-transform-origin: top left;
          transform-origin: top left;
}

.fa-lg {
  font-size: 1.3333333333em;
  line-height: 0.75em;
  vertical-align: -0.0667em;
}

.fa-xs {
  font-size: 0.75em;
}

.fa-sm {
  font-size: 0.875em;
}

.fa-1x {
  font-size: 1em;
}

.fa-2x {
  font-size: 2em;
}

.fa-3x {
  font-size: 3em;
}

.fa-4x {
  font-size: 4em;
}

.fa-5x {
  font-size: 5em;
}

.fa-6x {
  font-size: 6em;
}

.fa-7x {
  font-size: 7em;
}

.fa-8x {
  font-size: 8em;
}

.fa-9x {
  font-size: 9em;
}

.fa-10x {
  font-size: 10em;
}

.fa-fw {
  text-align: center;
  width: 1.25em;
}

.fa-ul {
  list-style-type: none;
  margin-left: 2.5em;
  padding-left: 0;
}
.fa-ul > li {
  position: relative;
}

.fa-li {
  left: -2em;
  position: absolute;
  text-align: center;
  width: 2em;
  line-height: inherit;
}

.fa-border {
  border: solid 0.08em #eee;
  border-radius: 0.1em;
  padding: 0.2em 0.25em 0.15em;
}

.fa-pull-left {
  float: left;
}

.fa-pull-right {
  float: right;
}

.fa.fa-pull-left,
.fas.fa-pull-left,
.far.fa-pull-left,
.fal.fa-pull-left,
.fab.fa-pull-left {
  margin-right: 0.3em;
}
.fa.fa-pull-right,
.fas.fa-pull-right,
.far.fa-pull-right,
.fal.fa-pull-right,
.fab.fa-pull-right {
  margin-left: 0.3em;
}

.fa-spin {
  -webkit-animation: fa-spin 2s infinite linear;
          animation: fa-spin 2s infinite linear;
}

.fa-pulse {
  -webkit-animation: fa-spin 1s infinite steps(8);
          animation: fa-spin 1s infinite steps(8);
}

@-webkit-keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}

@keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}
.fa-rotate-90 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
  -webkit-transform: rotate(90deg);
          transform: rotate(90deg);
}

.fa-rotate-180 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
  -webkit-transform: rotate(180deg);
          transform: rotate(180deg);
}

.fa-rotate-270 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
  -webkit-transform: rotate(270deg);
          transform: rotate(270deg);
}

.fa-flip-horizontal {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
  -webkit-transform: scale(-1, 1);
          transform: scale(-1, 1);
}

.fa-flip-vertical {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
  -webkit-transform: scale(1, -1);
          transform: scale(1, -1);
}

.fa-flip-both, .fa-flip-horizontal.fa-flip-vertical {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
  -webkit-transform: scale(-1, -1);
          transform: scale(-1, -1);
}

:root .fa-rotate-90,
:root .fa-rotate-180,
:root .fa-rotate-270,
:root .fa-flip-horizontal,
:root .fa-flip-vertical,
:root .fa-flip-both {
  -webkit-filter: none;
          filter: none;
}

.fa-stack {
  display: inline-block;
  height: 2em;
  position: relative;
  width: 2.5em;
}

.fa-stack-1x,
.fa-stack-2x {
  bottom: 0;
  left: 0;
  margin: auto;
  position: absolute;
  right: 0;
  top: 0;
}

.svg-inline--fa.fa-stack-1x {
  height: 1em;
  width: 1.25em;
}
.svg-inline--fa.fa-stack-2x {
  height: 2em;
  width: 2.5em;
}

.fa-inverse {
  color: #fff;
}

.sr-only {
  border: 0;
  clip: rect(0, 0, 0, 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px;
}

.sr-only-focusable:active, .sr-only-focusable:focus {
  clip: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  position: static;
  width: auto;
}

.svg-inline--fa .fa-primary {
  fill: var(--fa-primary-color, currentColor);
  opacity: 1;
  opacity: var(--fa-primary-opacity, 1);
}

.svg-inline--fa .fa-secondary {
  fill: var(--fa-secondary-color, currentColor);
  opacity: 0.4;
  opacity: var(--fa-secondary-opacity, 0.4);
}

.svg-inline--fa.fa-swap-opacity .fa-primary {
  opacity: 0.4;
  opacity: var(--fa-secondary-opacity, 0.4);
}

.svg-inline--fa.fa-swap-opacity .fa-secondary {
  opacity: 1;
  opacity: var(--fa-primary-opacity, 1);
}

.svg-inline--fa mask .fa-primary,
.svg-inline--fa mask .fa-secondary {
  fill: black;
}

.fad.fa-inverse {
  color: #fff;
}</style><link rel="icon" href="https://www.jdoodle.com/favicon.ico"><title>PHP Online Editor - PHP Online IDE -  PHP Coding Online</title><script type="text/javascript" async="" src="./ceksubs_files/recaptcha__en.js.download" crossorigin="anonymous" integrity="sha384-0UmWi2drUOFtiIl9tXA3B9fWn6Oz5K3vecq0zC8vAzesBQkPzPdlJKXnimDbxieW"></script><script type="application/ld+json">{
        "@context" : "http://schema.org",
        "@type" : "SoftwareApplication",
        "name" : "JDoodle - Online Compiler And Editor",
        "image" : "https://www.jdoodle.com/assets/jdoodle-og.jpeg"
      }</script><link href="./ceksubs_files/chunk-00cc4b31.f77fcd6e.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-035abb13.6be68169.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-03fa5ac1.b693584a.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-066bfaa8.b693584a.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-06ac3a82.57ecb774.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-07b84418.06ba15e0.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-0b949e46.9a64a201.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-0c529c3e.feb37778.css" rel="prefetch"><link href="./ceksubs_files/chunk-0c6b7169.8f64bd2e.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-1c0ee588.bbab49d0.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-1d4bce52.b693584a.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-211c311d.9a64a201.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-22bc8f13.b693584a.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-280f09d4.b50ebec4.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-283a7498.049be0dc.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-2960dc9a.f5ce280f.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-2c123f4a.42e57394.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-36b81d26.f5ce280f.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-38b68bed.b84218e7.css" rel="prefetch"><link href="./ceksubs_files/chunk-3b4ba898.bc28df53.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-3c9ac7f8.e0b6b949.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-3d1dfd18.467687e6.css" rel="prefetch"><link href="./ceksubs_files/chunk-3fd6efea.9c0c96eb.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-4881fce6.46d1435e.css" rel="prefetch"><link href="./ceksubs_files/chunk-49b1ad03.9a76d1d2.css" rel="prefetch"><link href="./ceksubs_files/chunk-4a2a93f2.42e57394.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-4a445de6.d0364b7b.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-4d0f887a.0ab5a017.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-5001cd97.9a64a201.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-51026210.0f23e30b.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-51df5fd4.99a77867.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-527e1f3f.f5ce280f.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-558d83ec.c691c68d.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-561ab7cd.fe51c4d3.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-578b50f5.f5ce280f.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-5861a136.fa3c08b2.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-5bc51e22.2dc7e121.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-5c85b6b4.8a8d1b07.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-5e33ccdd.94dbbfc5.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-62fcc2db.c27ca486.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-63be1ceb.1bb7a823.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-6b1c31fe.8c46cdc8.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-6bb96cd4.a1227098.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-6de5ffb2.8cee74d3.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-70de9abe.64f853ca.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-716a62d6.08fa1376.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-7aac3342.42e57394.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-7c8eb802.4804bf7a.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-7d1ec31c.30def069.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-7ea1b17d.ad6e41ed.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-7f25d7f6.f5ce280f.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-7fc543a6.b693584a.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-8a7c0928.a977731d.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-9c0e66b8.92a4068e.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-9c86a6bc.5410b7d3.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-9ee35d30.f5ce280f.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-9fe2e7e4.240aa3e5.css" rel="prefetch"><link href="./ceksubs_files/chunk-a08eb948.58bfdb38.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-a0c3db4a.a7f474cf.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-ac8a0d62.42e57394.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-add4b03e.d56167ef.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-c498faba.d060ca09.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-cacedc96.317dfa84.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-dd1c8980.8e443cb8.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-e6f9bb36.06060476.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-f4851822.51383d13.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-f60d9f3c.69b83856.css" rel="prefetch"><link href="https://www.jdoodle.com/css/chunk-fd1c93e0.5f551bff.css" rel="prefetch"><link href="./ceksubs_files/chunk-00cc4b31.73140ea2.js.download" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-035abb13.7d2d4676.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-03fa5ac1.0d270454.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-066bfaa8.b5c37e5c.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-06ac3a82.b22f4163.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-07b84418.8eccbc17.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-0b949e46.fc7fec0d.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-0c529c3e.47031b66.js" rel="prefetch"><link href="./ceksubs_files/chunk-0c6b7169.9a010db2.js.download" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-1c0ee588.3ff3e162.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-1d4bce52.8d0aa326.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-211c311d.b7405aac.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-22bc8f13.73a0a6ed.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-251e2180.25d4c791.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-280f09d4.1797b82f.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-283a7498.00de8cd8.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-2960dc9a.8e478f24.js" rel="prefetch"><link href="./ceksubs_files/chunk-2b7aad2e.77f84cbf.js.download" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-2c123f4a.98936a07.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-2d0f028f.8a6118e6.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-36b81d26.926c64c5.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-38b68bed.91190052.js" rel="prefetch"><link href="./ceksubs_files/chunk-3b4ba898.9e633918.js.download" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-3c9ac7f8.4236b068.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-3d1dfd18.0c7f3dd8.js" rel="prefetch"><link href="./ceksubs_files/chunk-3fd6efea.50d16a60.js.download" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-4881fce6.3d6b39ba.js" rel="prefetch"><link href="./ceksubs_files/chunk-49b1ad03.319ab812.js.download" rel="prefetch"><link href="./ceksubs_files/chunk-4a2a93f2.438192f4.js.download" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-4a445de6.1d95058a.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-4d0f887a.44e2ab5a.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-5001cd97.47e2a977.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-51026210.b637cd7a.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-51df5fd4.cc7f8e99.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-527e1f3f.944e41ac.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-558d83ec.08db21d6.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-561ab7cd.6bc77d57.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-578b50f5.d5b71e8b.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-5861a136.1e6ae616.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-5bc51e22.1066f5c9.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-5c504b38.540480a1.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-5c85b6b4.c0b356d5.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-5e33ccdd.f32a9cc9.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-62fcc2db.9ccb9686.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-63be1ceb.540bc987.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-6b1c31fe.086a6aa2.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-6bb96cd4.e5db80df.js" rel="prefetch"><link href="./ceksubs_files/chunk-6cf5e006.bd016028.js.download" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-6de5ffb2.138fbf7a.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-70de9abe.8ca81c2e.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-716a62d6.9fe8b6f9.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-7aac3342.3b125a6e.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-7c8eb802.2a762960.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-7d1ec31c.15173751.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-7db688a6.eff0083d.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-7ea1b17d.c2626f85.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-7f25d7f6.53ea7b9a.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-7fc543a6.5368e8b7.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-8a7c0928.dd8a33b8.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-9c0e66b8.502f8b40.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-9c86a6bc.20c3d5f3.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-9ee35d30.29be8f9b.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-9fe2e7e4.abc9414c.js" rel="prefetch"><link href="./ceksubs_files/chunk-a08eb948.9b08216c.js.download" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-a0c3db4a.5359ec77.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-ac8a0d62.6f869a07.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-add4b03e.295f7d84.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-c498faba.78c7fa59.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-cacedc96.2c70213c.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-dd1c8980.c3e536a4.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-e6f9bb36.117d6af5.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-f4851822.4a07b35f.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-f60d9f3c.54c93d37.js" rel="prefetch"><link href="https://www.jdoodle.com/js/chunk-fd1c93e0.c15e662b.js" rel="prefetch"><link href="./ceksubs_files/app.38c45ee0.css" rel="preload" as="style"><link href="./ceksubs_files/chunk-vendors.9d5e62ae.css" rel="preload" as="style"><link href="./ceksubs_files/app.c2b5b539.js.download" rel="preload" as="script"><link href="./ceksubs_files/chunk-vendors.98bdd3d8.js.download" rel="preload" as="script"><link href="./ceksubs_files/chunk-vendors.9d5e62ae.css" rel="stylesheet"><link href="./ceksubs_files/app.38c45ee0.css" rel="stylesheet"><link rel="stylesheet" type="text/css" href="./ceksubs_files/chunk-a08eb948.58bfdb38.css"><script charset="utf-8" src="./ceksubs_files/chunk-a08eb948.9b08216c.js.download"></script><script charset="utf-8" src="./ceksubs_files/chunk-2b7aad2e.77f84cbf.js.download"></script><script charset="utf-8" src="./ceksubs_files/chunk-6cf5e006.bd016028.js.download"></script><link rel="stylesheet" type="text/css" href="./ceksubs_files/chunk-3b4ba898.bc28df53.css"><script charset="utf-8" src="./ceksubs_files/chunk-3b4ba898.9e633918.js.download"></script><link rel="stylesheet" type="text/css" href="./ceksubs_files/chunk-49b1ad03.9a76d1d2.css"><script charset="utf-8" src="./ceksubs_files/chunk-49b1ad03.319ab812.js.download"></script><style type="text/css">.Cookie{position:fixed;overflow:hidden;box-sizing:border-box;z-index:9999;width:100%;display:flex;justify-content:space-between;align-items:baseline;flex-direction:column}.Cookie>*{margin:.9375rem 0;align-self:center}@media screen and (min-width: 48rem){.Cookie{flex-flow:row}.Cookie>*{margin:0}}.Cookie--top{top:0;left:0;right:0}.Cookie--bottom{bottom:0;left:0;right:0}.Cookie__buttons{display:flex;flex-direction:column}.Cookie__buttons>*{margin:.3125rem 0}@media screen and (min-width: 48rem){.Cookie__buttons{flex-direction:row}.Cookie__buttons>*{margin:0 .9375rem}}.Cookie__button{cursor:pointer;align-self:center;white-space:nowrap}.Cookie__declineButton{cursor:pointer;align-self:center;white-space:nowrap}.Cookie--base{background:#F1F1F1;color:#232323;padding:1.250em}.Cookie--base .Cookie__button{background:#97D058;padding:0.625em 3.125em;color:#fff;border-radius:0;border:0;font-size:1em}.Cookie--base .Cookie__button:hover{background:#7ebf36}.Cookie--base .Cookie__button--decline{background:transparent;padding:0.625em 3.125em;color:#727272;border-radius:0;border:0;font-size:1em}.Cookie--base .Cookie__button--decline:hover{background:#cbcbcb}.Cookie--base--rounded{background:#F1F1F1;color:#232323;padding:1.250em}.Cookie--base--rounded .Cookie__button{background:#97D058;padding:0.625em 3.125em;color:#fff;border-radius:20px;border:0;font-size:1em}.Cookie--base--rounded .Cookie__button:hover{background:#7ebf36}.Cookie--base--rounded .Cookie__button--decline{background:transparent;padding:0.625em 3.125em;color:#727272;border-radius:20px;border:0;font-size:1em}.Cookie--base--rounded .Cookie__button--decline:hover{background:#cbcbcb}.Cookie--blood-orange{background:#424851;color:#fff;padding:1.250em}.Cookie--blood-orange .Cookie__button{background:#E76A68;padding:0.625em 3.125em;color:#fff;border-radius:0;border:0;font-size:1em}.Cookie--blood-orange .Cookie__button:hover{background:#e03f3c}.Cookie--blood-orange .Cookie__button--decline{background:transparent;padding:0.625em 3.125em;color:#000;border-radius:0;border:0;font-size:1em}.Cookie--blood-orange .Cookie__button--decline:hover{background:#202327}.Cookie--blood-orange--rounded{background:#424851;color:#fff;padding:1.250em}.Cookie--blood-orange--rounded .Cookie__button{background:#E76A68;padding:0.625em 3.125em;color:#fff;border-radius:20px;border:0;font-size:1em}.Cookie--blood-orange--rounded .Cookie__button:hover{background:#e03f3c}.Cookie--blood-orange--rounded .Cookie__button--decline{background:transparent;padding:0.625em 3.125em;color:#000;border-radius:20px;border:0;font-size:1em}.Cookie--blood-orange--rounded .Cookie__button--decline:hover{background:#202327}.Cookie--dark-lime{background:#424851;color:#fff;padding:1.250em}.Cookie--dark-lime .Cookie__button{background:#97D058;padding:0.625em 3.125em;color:#fff;border-radius:0;border:0;font-size:1em}.Cookie--dark-lime .Cookie__button:hover{background:#7ebf36}.Cookie--dark-lime .Cookie__button--decline{background:transparent;padding:0.625em 3.125em;color:#000;border-radius:0;border:0;font-size:1em}.Cookie--dark-lime .Cookie__button--decline:hover{background:#202327}.Cookie--dark-lime--rounded{background:#424851;color:#fff;padding:1.250em}.Cookie--dark-lime--rounded .Cookie__button{background:#97D058;padding:0.625em 3.125em;color:#fff;border-radius:20px;border:0;font-size:1em}.Cookie--dark-lime--rounded .Cookie__button:hover{background:#7ebf36}.Cookie--dark-lime--rounded .Cookie__button--decline{background:transparent;padding:0.625em 3.125em;color:#000;border-radius:20px;border:0;font-size:1em}.Cookie--dark-lime--rounded .Cookie__button--decline:hover{background:#202327}.Cookie--royal{background:#FBC227;color:#232323;padding:1.250em}.Cookie--royal .Cookie__button{background:#726CEA;padding:0.625em 3.125em;color:#fff;border-radius:0;border:0;font-size:1em}.Cookie--royal .Cookie__button:hover{background:#473fe4}.Cookie--royal .Cookie__button--decline{background:transparent;padding:0.625em 3.125em;color:#221901;border-radius:0;border:0;font-size:1em}.Cookie--royal .Cookie__button--decline:hover{background:#d29a04}.Cookie--royal--rounded{background:#FBC227;color:#232323;padding:1.250em}.Cookie--royal--rounded .Cookie__button{background:#726CEA;padding:0.625em 3.125em;color:#fff;border-radius:20px;border:0;font-size:1em}.Cookie--royal--rounded .Cookie__button:hover{background:#473fe4}.Cookie--royal--rounded .Cookie__button--decline{background:transparent;padding:0.625em 3.125em;color:#221901;border-radius:20px;border:0;font-size:1em}.Cookie--royal--rounded .Cookie__button--decline:hover{background:#d29a04}.slideFromTop-enter,.slideFromTop-leave-to{transform:translate(0px, -12.5em)}.slideFromTop-enter-to,.slideFromTop-leave{transform:translate(0px, 0px)}.slideFromBottom-enter,.slideFromBottom-leave-to{transform:translate(0px, 12.5em)}.slideFromBottom-enter-to,.slideFromBottom-leave{transform:translate(0px, 0px)}.slideFromBottom-enter-active,.slideFromBottom-leave-active,.slideFromTop-enter-active,.slideFromTop-leave-active{transition:transform .4s ease-in}.fade-enter-active,.fade-leave-active{transition:opacity .5s}.fade-enter,.fade-leave-to{opacity:0}
</style><meta name="description" content="PHP Online Editor - PHP Online IDE -  PHP Coding Online - Share Save PHP Program online" data-vue-router-controlled=""><meta name="keywords" content="PHP Online Editor - PHP Online IDE -  PHP Coding Online - Share Save PHP Program online" data-vue-router-controlled=""><style type="text/css">.Cookie{position:fixed;overflow:hidden;box-sizing:border-box;z-index:9999;width:100%;display:flex;justify-content:space-between;align-items:baseline;flex-direction:column}.Cookie>*{margin:.9375rem 0;align-self:center}@media screen and (min-width: 48rem){.Cookie{flex-flow:row}.Cookie>*{margin:0}}.Cookie--top{top:0;left:0;right:0}.Cookie--bottom{bottom:0;left:0;right:0}.Cookie__buttons{display:flex;flex-direction:column}.Cookie__buttons>*{margin:.3125rem 0}@media screen and (min-width: 48rem){.Cookie__buttons{flex-direction:row}.Cookie__buttons>*{margin:0 .9375rem}}.Cookie__button{cursor:pointer;align-self:center;white-space:nowrap}.Cookie__declineButton{cursor:pointer;align-self:center;white-space:nowrap}.Cookie--base{background:#F1F1F1;color:#232323;padding:1.250em}.Cookie--base .Cookie__button{background:#97D058;padding:0.625em 3.125em;color:#fff;border-radius:0;border:0;font-size:1em}.Cookie--base .Cookie__button:hover{background:#7ebf36}.Cookie--base .Cookie__button--decline{background:transparent;padding:0.625em 3.125em;color:#727272;border-radius:0;border:0;font-size:1em}.Cookie--base .Cookie__button--decline:hover{background:#cbcbcb}.Cookie--base--rounded{background:#F1F1F1;color:#232323;padding:1.250em}.Cookie--base--rounded .Cookie__button{background:#97D058;padding:0.625em 3.125em;color:#fff;border-radius:20px;border:0;font-size:1em}.Cookie--base--rounded .Cookie__button:hover{background:#7ebf36}.Cookie--base--rounded .Cookie__button--decline{background:transparent;padding:0.625em 3.125em;color:#727272;border-radius:20px;border:0;font-size:1em}.Cookie--base--rounded .Cookie__button--decline:hover{background:#cbcbcb}.Cookie--blood-orange{background:#424851;color:#fff;padding:1.250em}.Cookie--blood-orange .Cookie__button{background:#E76A68;padding:0.625em 3.125em;color:#fff;border-radius:0;border:0;font-size:1em}.Cookie--blood-orange .Cookie__button:hover{background:#e03f3c}.Cookie--blood-orange .Cookie__button--decline{background:transparent;padding:0.625em 3.125em;color:#000;border-radius:0;border:0;font-size:1em}.Cookie--blood-orange .Cookie__button--decline:hover{background:#202327}.Cookie--blood-orange--rounded{background:#424851;color:#fff;padding:1.250em}.Cookie--blood-orange--rounded .Cookie__button{background:#E76A68;padding:0.625em 3.125em;color:#fff;border-radius:20px;border:0;font-size:1em}.Cookie--blood-orange--rounded .Cookie__button:hover{background:#e03f3c}.Cookie--blood-orange--rounded .Cookie__button--decline{background:transparent;padding:0.625em 3.125em;color:#000;border-radius:20px;border:0;font-size:1em}.Cookie--blood-orange--rounded .Cookie__button--decline:hover{background:#202327}.Cookie--dark-lime{background:#424851;color:#fff;padding:1.250em}.Cookie--dark-lime .Cookie__button{background:#97D058;padding:0.625em 3.125em;color:#fff;border-radius:0;border:0;font-size:1em}.Cookie--dark-lime .Cookie__button:hover{background:#7ebf36}.Cookie--dark-lime .Cookie__button--decline{background:transparent;padding:0.625em 3.125em;color:#000;border-radius:0;border:0;font-size:1em}.Cookie--dark-lime .Cookie__button--decline:hover{background:#202327}.Cookie--dark-lime--rounded{background:#424851;color:#fff;padding:1.250em}.Cookie--dark-lime--rounded .Cookie__button{background:#97D058;padding:0.625em 3.125em;color:#fff;border-radius:20px;border:0;font-size:1em}.Cookie--dark-lime--rounded .Cookie__button:hover{background:#7ebf36}.Cookie--dark-lime--rounded .Cookie__button--decline{background:transparent;padding:0.625em 3.125em;color:#000;border-radius:20px;border:0;font-size:1em}.Cookie--dark-lime--rounded .Cookie__button--decline:hover{background:#202327}.Cookie--royal{background:#FBC227;color:#232323;padding:1.250em}.Cookie--royal .Cookie__button{background:#726CEA;padding:0.625em 3.125em;color:#fff;border-radius:0;border:0;font-size:1em}.Cookie--royal .Cookie__button:hover{background:#473fe4}.Cookie--royal .Cookie__button--decline{background:transparent;padding:0.625em 3.125em;color:#221901;border-radius:0;border:0;font-size:1em}.Cookie--royal .Cookie__button--decline:hover{background:#d29a04}.Cookie--royal--rounded{background:#FBC227;color:#232323;padding:1.250em}.Cookie--royal--rounded .Cookie__button{background:#726CEA;padding:0.625em 3.125em;color:#fff;border-radius:20px;border:0;font-size:1em}.Cookie--royal--rounded .Cookie__button:hover{background:#473fe4}.Cookie--royal--rounded .Cookie__button--decline{background:transparent;padding:0.625em 3.125em;color:#221901;border-radius:20px;border:0;font-size:1em}.Cookie--royal--rounded .Cookie__button--decline:hover{background:#d29a04}.slideFromTop-enter,.slideFromTop-leave-to{transform:translate(0px, -12.5em)}.slideFromTop-enter-to,.slideFromTop-leave{transform:translate(0px, 0px)}.slideFromBottom-enter,.slideFromBottom-leave-to{transform:translate(0px, 12.5em)}.slideFromBottom-enter-to,.slideFromBottom-leave{transform:translate(0px, 0px)}.slideFromBottom-enter-active,.slideFromBottom-leave-active,.slideFromTop-enter-active,.slideFromTop-leave-active{transition:transform .4s ease-in}.fade-enter-active,.fade-leave-active{transition:opacity .5s}.fade-enter,.fade-leave-to{opacity:0}
</style><script src="./ceksubs_files/theme-xcode.js.download"></script><script src="./ceksubs_files/mode-php.js.download"></script><script src="./ceksubs_files/php.js.download"></script><link rel="stylesheet" type="text/css" href="./ceksubs_files/chunk-00cc4b31.f77fcd6e.css"><script charset="utf-8" src="./ceksubs_files/chunk-00cc4b31.73140ea2.js.download"></script><link rel="stylesheet" type="text/css" href="./ceksubs_files/chunk-4a2a93f2.42e57394.css"><script charset="utf-8" src="./ceksubs_files/chunk-4a2a93f2.438192f4.js.download"></script><link rel="stylesheet" type="text/css" href="./ceksubs_files/chunk-3fd6efea.9c0c96eb.css"><script charset="utf-8" src="./ceksubs_files/chunk-3fd6efea.50d16a60.js.download"></script><link rel="stylesheet" type="text/css" href="./ceksubs_files/chunk-0c6b7169.8f64bd2e.css"><script charset="utf-8" src="./ceksubs_files/chunk-0c6b7169.9a010db2.js.download"></script></head><body><noscript><strong>We're sorry but jdoodle-spa doesn't work properly without JavaScript enabled. Please enable it to continue.</strong></noscript><div id="app" class=""><nav data-v-368b6c3e="" class="jd-nav is-marginless has-background-white-ter" msg="Welcome to JDoodle.com"><div data-v-368b6c3e="" class="level is-mobile is-marginless"><div data-v-368b6c3e="" class="level-left"><div data-v-368b6c3e="" class="level-item is-vertical"><a data-v-368b6c3e="" href="https://www.jdoodle.com/" class="router-link-active"><img data-v-368b6c3e="" src="./ceksubs_files/jdoodle.f84bbcd1.png" alt="JDoodle" width="150" class="logo"></a></div></div><div data-v-368b6c3e="" class="level-right is-hidden-print"><div data-v-368b6c3e="" class="level-item"><button data-v-368b6c3e="" class="button share-button is-rounded"><svg data-v-368b6c3e="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="share-button-icon svg-inline--fa fa-share fa-w-16"><path data-v-368b6c3e="" fill="currentColor" d="M503.691 189.836L327.687 37.851C312.281 24.546 288 35.347 288 56.015v80.053C127.371 137.907 0 170.1 0 322.326c0 61.441 39.581 122.309 83.333 154.132 13.653 9.931 33.111-2.533 28.077-18.631C66.066 312.814 132.917 274.316 288 272.085V360c0 20.7 24.3 31.453 39.687 18.164l176.004-152c11.071-9.562 11.086-26.753 0-36.328z" class=""></path></svg></button></div><div data-v-368b6c3e="" class="level-item"><button data-v-368b6c3e="" class="button user-button is-rounded"><svg data-v-368b6c3e="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="share-button-icon svg-inline--fa fa-bars fa-w-14"><path data-v-368b6c3e="" fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z" class=""></path></svg></button></div><div data-v-368b6c3e="" class="level-item"><!----><button data-v-368b6c3e="" class="button is-info user-button is-rounded"><svg data-v-368b6c3e="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="share-button-icon has-text-black svg-inline--fa fa-user fa-w-14"><path data-v-368b6c3e="" fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z" class=""></path></svg></button></div></div></div><div data-v-05d65802="" data-v-454f94e8="" data-v-368b6c3e="" class="sidebar is-hidden-print has-background-white-bis is-large active"><div data-v-05d65802="" class="title has-text-centered"><!---->&nbsp;&nbsp;
    <span data-v-05d65802="" class="has-text-danger"></span><span data-v-05d65802="" class="is-pulled-left"><a data-v-05d65802="" class="has-text-grey is-size-4"><svg data-v-05d65802="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-times-circle fa-w-16"><path data-v-05d65802="" fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z" class=""></path></svg></a></span></div><div data-v-05d65802=""><div data-v-454f94e8="" data-v-05d65802=""><div data-v-454f94e8="" data-v-05d65802=""><div data-v-43415e11="" data-v-454f94e8="" class="level" data-v-05d65802=""><div data-v-43415e11="" class="level-item"><h6 data-v-43415e11="" class="title has-text-grey-dark">My PHP Projects</h6></div></div></div><div data-v-454f94e8="" data-v-05d65802="" class="doodle-display-box"><div data-v-25b7342e="" data-v-454f94e8="" class="wait-message has-text-weight-semibold" data-v-05d65802="" style="display: none;"><div data-v-25b7342e="" class="spinner"><div data-v-25b7342e="" class="rect1"></div><div data-v-25b7342e="" class="rect2"></div><div data-v-25b7342e="" class="rect3"></div><div data-v-25b7342e="" class="rect4"></div><div data-v-25b7342e="" class="rect5"></div></div><div data-v-25b7342e="" class="weight-message-text">
    JDoodle is loading your projects, please wait...
  </div></div><div data-v-454f94e8="" data-v-05d65802="" class="column is-8 is-offset-2" style="display: none;"><div data-v-62a83e41="" data-v-454f94e8="" class="has-text-centered error-box" data-v-05d65802="" style="display: none;"><svg data-v-62a83e41="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="exclamation-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="is-size-5 svg-inline--fa fa-exclamation-circle fa-w-16 has-text-danger"><path data-v-62a83e41="" fill="currentColor" d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zm-248 50c-25.405 0-46 20.595-46 46s20.595 46 46 46 46-20.595 46-46-20.595-46-46-46zm-43.673-165.346l7.418 136c.347 6.364 5.609 11.346 11.982 11.346h48.546c6.373 0 11.635-4.982 11.982-11.346l7.418-136c.375-6.874-5.098-12.654-11.982-12.654h-63.383c-6.884 0-12.356 5.78-11.981 12.654z" class=""></path></svg><span data-v-62a83e41="" class="has-text-weight-bold error-message">
        
  </span></div></div><div data-v-454f94e8="" data-v-05d65802=""><div data-v-454f94e8="" data-v-05d65802=""><div data-v-454f94e8="" data-v-05d65802="" style=""><div data-v-454f94e8="" data-v-05d65802="" class="columns is-mobile file-div is-multiline"><div data-v-454f94e8="" data-v-05d65802="" class="column is-4 file-list is-paddingless"><div data-v-454f94e8="" data-v-05d65802="" class="file-list-items"><div data-v-454f94e8="" data-v-05d65802="" class="file-list-item is-active"><svg data-v-454f94e8="" data-v-05d65802="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="file-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="has-text-grey-dark svg-inline--fa fa-file-alt fa-w-12"><path data-v-454f94e8="" data-v-05d65802="" fill="currentColor" d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm64 236c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-64c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-72v8c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12zm96-114.1v6.1H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z" class=""></path></svg>&nbsp;&nbsp;ceksubs.php
                  </div></div></div><div data-v-454f94e8="" data-v-05d65802="" class="column is-8 text-center" style="display: none;"><div data-v-25b7342e="" data-v-454f94e8="" class="wait-message has-text-weight-semibold" data-v-05d65802=""><div data-v-25b7342e="" class="spinner"><div data-v-25b7342e="" class="rect1"></div><div data-v-25b7342e="" class="rect2"></div><div data-v-25b7342e="" class="rect3"></div><div data-v-25b7342e="" class="rect4"></div><div data-v-25b7342e="" class="rect5"></div></div><div data-v-25b7342e="" class="weight-message-text">
    JDoodle is loading your file, please wait...
  </div></div></div><div data-v-454f94e8="" data-v-05d65802="" class="column is-8 text-center" style="display: none;"><div data-v-62a83e41="" data-v-454f94e8="" class="has-text-centered error-box" data-v-05d65802="" style="display: none;"><svg data-v-62a83e41="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="exclamation-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="is-size-5 svg-inline--fa fa-exclamation-circle fa-w-16 has-text-danger"><path data-v-62a83e41="" fill="currentColor" d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zm-248 50c-25.405 0-46 20.595-46 46s20.595 46 46 46 46-20.595 46-46-20.595-46-46-46zm-43.673-165.346l7.418 136c.347 6.364 5.609 11.346 11.982 11.346h48.546c6.373 0 11.635-4.982 11.982-11.346l7.418-136c.375-6.874-5.098-12.654-11.982-12.654h-63.383c-6.884 0-12.356 5.78-11.981 12.654z" class=""></path></svg><span data-v-62a83e41="" class="has-text-weight-bold error-message">
        
  </span></div></div><div data-v-454f94e8="" data-v-05d65802="" class="column is-8 code-editor-div" style=""><div data-v-454f94e8="" data-v-05d65802="" id="myFilesEditor" class="code-editor ace_editor ace-xcode"><textarea class="ace_text-input" wrap="off" autocorrect="off" autocapitalize="off" spellcheck="false" readonly="" style="opacity: 0; font-size: 1px; height: 1px; width: 1px; top: 14px; left: 50px;"></textarea><div class="ace_gutter" aria-hidden="true" style="display: block; left: 0px; width: 47px;"><div class="ace_layer ace_gutter-layer ace_folding-enabled" style="height: 1e+06px; top: 0px; left: 0px; width: 47px;"><div class="ace_gutter-cell ace_gutter-active-line " style="height: 14px; top: 0px;">1<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 14px;">2<span class="ace_fold-widget ace_start ace_open" style="height: 14px; display: inline-block;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 28px;">3<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 42px;">4<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 56px;">5<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 70px;">6<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 84px;">7<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 98px;">8<span class="ace_fold-widget ace_start ace_open" style="height: 14px; display: inline-block;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 112px;">9<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 126px;">10<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 140px;">11<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 154px;">12<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 168px;">13<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 182px;">14<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 196px;">15<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 210px;">16<span class="ace_fold-widget ace_start ace_open" style="height: 14px; display: inline-block;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 224px;">17<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 238px;">18<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 252px;">19<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 266px;">20<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 280px;">21<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 294px;">22<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 308px;">23<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 322px;">24<span style="display: none;"></span></div></div></div><div class="ace_scroller" style="line-height: 14px; left: 47px; right: 17px; bottom: 0px;"><div class="ace_content" style="top: 0px; left: 0px; width: 1024px; height: 309px;"><div class="ace_layer ace_print-margin-layer"><div class="ace_print-margin" style="left: 532px; visibility: hidden;"></div></div><div class="ace_layer ace_marker-layer"><div class="ace_active-line" style="height: 14px; top: 0px; left: 0px; right: 0px;"></div></div><div class="ace_layer ace_text-layer" style="height: 1e+06px; margin: 0px 4px; top: 0px; left: 0px;"><div class="ace_line" style="height: 14px; top: 0px;"><span class="ace_support ace_php_tag">&lt;?php</span></div><div class="ace_line" style="height: 14px; top: 14px;"><span class="ace_comment">/*</span></div><div class="ace_line" style="height: 14px; top: 28px;"><span class="ace_comment">Arief 125</span></div><div class="ace_line" style="height: 14px; top: 42px;"><span class="ace_comment">*/</span></div><div class="ace_line" style="height: 14px; top: 56px;"><span class="ace_comment">// Started //</span></div><div class="ace_line" style="height: 14px; top: 70px;"></div><div class="ace_line" style="height: 14px; top: 84px;"><span class="ace_comment">// Msg Usage //</span></div><div class="ace_line" style="height: 14px; top: 98px;"><span class="ace_keyword">if</span> <span class="ace_paren ace_lparen">(</span> <span class="ace_variable ace_language">$argc</span> <span class="ace_keyword ace_operator">&lt;</span> <span class="ace_constant ace_numeric">2</span> <span class="ace_paren ace_rparen">)</span><span class="ace_paren ace_lparen">{</span></div><div class="ace_line" style="height: 14px; top: 112px;">  <span class="ace_support ace_function">print</span> <span class="ace_string">" __     __      _______    _                    </span></div><div class="ace_line" style="height: 14px; top: 126px;"><span class="ace_string"> \ \   / /     |__   __|  | |                   </span></div><div class="ace_line" style="height: 14px; top: 140px;"><span class="ace_string">  \ \_/ /__  _   _| |_   _| |__   ___           </span></div><div class="ace_line" style="height: 14px; top: 154px;"><span class="ace_string">   \   / _ \| | | | | | | | '_ \ / _ \          </span></div><div class="ace_line" style="height: 14px; top: 168px;"><span class="ace_string">    | | (_) | |_| | | |_| | |_) |  __/          </span></div><div class="ace_line" style="height: 14px; top: 182px;"><span class="ace_string">   _|_|\___/ \__,_|_|\__,_|_.__/ \___|          </span></div><div class="ace_line" style="height: 14px; top: 196px;"><span class="ace_string">  / ____|     | |                 (_) |         </span></div><div class="ace_line" style="height: 14px; top: 210px;"><span class="ace_string"> | (___  _   _| |__  ___  ___ _ __ _| |__   ___ </span></div><div class="ace_line" style="height: 14px; top: 224px;"><span class="ace_string">  \___ \| | | | '_ \/ __|/ __| '__| | '_ \ / _ \</span></div><div class="ace_line" style="height: 14px; top: 238px;"><span class="ace_string">  ____) | |_| | |_) \__ \ (__| |  | | |_) |  __/</span></div><div class="ace_line" style="height: 14px; top: 252px;"><span class="ace_string"> |_____/ \__,_|_.__/|___/\___|_|  |_|_.__/ \___|</span></div><div class="ace_line" style="height: 14px; top: 266px;"><span class="ace_string">"</span><span class="ace_punctuation ace_operator">;</span></div><div class="ace_line" style="height: 14px; top: 280px;">  <span class="ace_support ace_function">exit</span><span class="ace_paren ace_lparen">(</span> <span class="ace_string">"[??] Youtube Cek Subscribe  [??]</span><span class="ace_constant ace_language ace_escape">\n</span><span class="ace_string">[??]   Arief 125   [??]</span><span class="ace_constant ace_language ace_escape">\n</span><span class="ace_string">----------------------------------</span><span class="ace_constant ace_language ace_escape">\n</span><span class="ace_string">Perintah: php ceksubs.php &lt;URL YouToube&gt;</span><span class="ace_constant ace_language ace_escape">\n\n\n</span><span class="ace_string">"</span> <span class="ace_paren ace_rparen">)</span><span class="ace_punctuation ace_operator">;</span></div><div class="ace_line" style="height: 14px; top: 294px;"><span class="ace_paren ace_rparen">}</span></div></div><div class="ace_layer ace_marker-layer"></div><div class="ace_layer ace_cursor-layer ace_hidden-cursors"><div class="ace_cursor" style="display: block; top: 0px; left: 4px; width: 7px; height: 14px;"></div></div></div></div><div class="ace_scrollbar ace_scrollbar-v" style="width: 22px; bottom: 17px;"><div class="ace_scrollbar-inner" style="width: 22px; height: 728px;">&nbsp;</div></div><div class="ace_scrollbar ace_scrollbar-h" style="height: 22px; left: 47px; right: 17px;"><div class="ace_scrollbar-inner" style="height: 22px; width: 1024px;">&nbsp;</div></div><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font: inherit; overflow: hidden;"><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font: inherit; overflow: visible;">הההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההה</div><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; overflow: visible;">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</div></div></div></div><!----><div data-v-454f94e8="" data-v-05d65802="" class="column is-12 is-marginless is-paddingless" style="display: none;"><div data-v-62a83e41="" data-v-454f94e8="" class="has-text-centered error-box" data-v-05d65802=""><svg data-v-62a83e41="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="exclamation-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="is-size-5 svg-inline--fa fa-exclamation-circle fa-w-16 has-text-success"><path data-v-62a83e41="" fill="currentColor" d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zm-248 50c-25.405 0-46 20.595-46 46s20.595 46 46 46 46-20.595 46-46-20.595-46-46-46zm-43.673-165.346l7.418 136c.347 6.364 5.609 11.346 11.982 11.346h48.546c6.373 0 11.635-4.982 11.982-11.346l7.418-136c.375-6.874-5.098-12.654-11.982-12.654h-63.383c-6.884 0-12.356 5.78-11.981 12.654z" class=""></path></svg><span data-v-62a83e41="" class="has-text-weight-bold error-message">
        File deleted successfully
  </span></div></div><div data-v-454f94e8="" data-v-05d65802="" class="column is-6"><!----></div><div data-v-454f94e8="" data-v-05d65802="" class="column is-6 buttons has-text-centered"><div data-v-454f94e8="" data-v-05d65802=""><button data-v-454f94e8="" data-v-05d65802="" class="button is-info" style="">Open</button><button data-v-454f94e8="" data-v-05d65802="" class="button is-danger" style="">Remove</button><button data-v-454f94e8="" data-v-05d65802="" class="button">Close</button></div><div data-v-454f94e8="" data-v-05d65802="" class="ide-menu-box is-marginless"><div data-v-454f94e8="" data-v-05d65802="" class="box is-marginless"><div data-v-454f94e8="" data-v-05d65802="" class="has-text-centered confirm-text has-text-weight-semibold">Are you sure, do you want to delete this project?</div><div data-v-454f94e8="" data-v-05d65802="" class="columns is-mobile"><div data-v-454f94e8="" data-v-05d65802="" class="column is-6 has-text-right"><button data-v-454f94e8="" data-v-05d65802="" class="button is-small is-rounded has-text-weight-bold is-info">Yes</button></div><div data-v-454f94e8="" data-v-05d65802="" class="column is-6 has-text-left"><button data-v-454f94e8="" data-v-05d65802="" class="button is-small is-rounded has-text-weight-semibold ">No</button></div></div></div></div></div></div></div></div></div></div></div></div></div></nav><div class="app-wrap"><div data-v-f6698a44="" class="home-container"><div data-v-f6698a44="" class="has-text-centered title-section is-marginless"><h1 data-v-f6698a44="" class="title is-marginless custom-grey"><span data-v-f6698a44="">Online</span> PHP <!----><span data-v-f6698a44=""> IDE</span></h1><!----></div><!----><!----><!----><div data-v-f6698a44="" class="box no-border-print code-editor-box"><div data-v-f6698a44="" id="ide-left" class="ide-left"><div data-v-f6698a44="" class="has-text-weight-semibold ide-title">Project Name: <span data-v-f6698a44="" class="has-text-danger">ceksubs.php</span></div><div data-v-f6698a44="" class="is-flex ide-part is-mobile"><!----><div data-v-f6698a44="" id="ide-code" class="split is-marginless is-paddingless"><!----><div data-v-f6698a44="" class=""><!----><div data-v-f6698a44="" class=""><div data-v-f6698a44="" id="code" class="code-editor no-border-print ace_editor ace-xcode" style="font-size: 12px; height: 740px;"><textarea class="ace_text-input" wrap="off" autocorrect="off" autocapitalize="off" spellcheck="false" style="opacity: 0; font-size: 1px; height: 1px; width: 1px; top: 721px; left: 63px;"></textarea><div class="ace_gutter" aria-hidden="true" style="display: block; left: 0px; width: 47px;"><div class="ace_layer ace_gutter-layer ace_folding-enabled" style="height: 1e+06px; top: -7px; left: 0px; width: 47px;"><div class="ace_gutter-cell " style="height: 14px; top: 0px;">1<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 14px;">2<span style="display: inline-block; height: 14px;" class="ace_fold-widget ace_start ace_open"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 28px;">3<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 42px;">4<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 56px;">5<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 70px;">6<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 84px;">7<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 98px;">8<span style="display: inline-block; height: 14px;" class="ace_fold-widget ace_start ace_open"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 112px;">9<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 126px;">10<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 140px;">11<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 154px;">12<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 168px;">13<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 182px;">14<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 196px;">15<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 210px;">16<span class="ace_fold-widget ace_start ace_open" style="height: 14px; display: inline-block;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 224px;">17<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 238px;">18<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 252px;">19<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 266px;">20<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 280px;">21<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 294px;">22<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 308px;">23<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 322px;">24<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 336px;">25<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 350px;">26<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 364px;">27<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 378px;">28<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 392px;">29<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 406px;">30<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 420px;">31<span class="ace_fold-widget ace_start ace_open" style="height: 14px; display: inline-block;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 434px;">32<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 448px;">33<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 462px;">34<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 476px;">35<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 490px;">36<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 504px;">37<span class="ace_fold-widget ace_start ace_open" style="height: 14px; display: inline-block;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 518px;">38<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 532px;">39<span class="ace_fold-widget ace_start ace_open" style="height: 14px; display: inline-block;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 546px;">40<span class="ace_fold-widget ace_start ace_open" style="height: 14px; display: inline-block;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 560px;">41<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 574px;">42<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 588px;">43<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 602px;">44<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 616px;">45<span class="ace_fold-widget ace_start ace_open" style="height: 14px; display: inline-block;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 630px;">46<span class="ace_fold-widget ace_start ace_open" style="height: 14px; display: inline-block;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 644px;">47<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 658px;">48<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 672px;">49<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 686px;">50<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 700px;">51<span style="display: none;"></span></div><div class="ace_gutter-cell ace_gutter-active-line " style="height: 14px; top: 714px;">52<span style="display: none;"></span></div></div></div><div class="ace_scroller" style="line-height: 14px; left: 46.1953px; right: 17px; bottom: 0px;"><div class="ace_content" style="top: -7px; left: 0px; width: 1024px; height: 749px;"><div class="ace_layer ace_print-margin-layer"><div class="ace_print-margin" style="left: 532px; visibility: hidden;"></div></div><div class="ace_layer ace_marker-layer"><div class="ace_active-line" style="height: 14px; top: 714px; left: 0px; right: 0px;"></div></div><div class="ace_layer ace_text-layer" style="height: 1e+06px; margin: 0px 4px; top: 0px; left: 0px;"><div class="ace_line" style="height: 14px; top: 0px;"><span class="ace_support ace_php_tag">&lt;?php</span></div><div class="ace_line" style="height: 14px; top: 14px;"><span class="ace_comment">/*</span></div><div class="ace_line" style="height: 14px; top: 28px;"><span class="ace_comment">Arief 125</span></div><div class="ace_line" style="height: 14px; top: 42px;"><span class="ace_comment">*/</span></div><div class="ace_line" style="height: 14px; top: 56px;"><span class="ace_comment">// Started //</span></div><div class="ace_line" style="height: 14px; top: 70px;"></div><div class="ace_line" style="height: 14px; top: 84px;"><span class="ace_comment">// Msg Usage //</span></div><div class="ace_line" style="height: 14px; top: 98px;"><span class="ace_keyword">if</span> <span class="ace_paren ace_lparen">(</span> <span class="ace_variable ace_language">$argc</span> <span class="ace_keyword ace_operator">&lt;</span> <span class="ace_constant ace_numeric">2</span> <span class="ace_paren ace_rparen">)</span><span class="ace_paren ace_lparen">{</span></div><div class="ace_line" style="height: 14px; top: 112px;">  <span class="ace_support ace_function">print</span> <span class="ace_string">" __     __      _______    _                    </span></div><div class="ace_line" style="height: 14px; top: 126px;"><span class="ace_string"> \ \   / /     |__   __|  | |                   </span></div><div class="ace_line" style="height: 14px; top: 140px;"><span class="ace_string">  \ \_/ /__  _   _| |_   _| |__   ___           </span></div><div class="ace_line" style="height: 14px; top: 154px;"><span class="ace_string">   \   / _ \| | | | | | | | '_ \ / _ \          </span></div><div class="ace_line" style="height: 14px; top: 168px;"><span class="ace_string">    | | (_) | |_| | | |_| | |_) |  __/          </span></div><div class="ace_line" style="height: 14px; top: 182px;"><span class="ace_string">   _|_|\___/ \__,_|_|\__,_|_.__/ \___|          </span></div><div class="ace_line" style="height: 14px; top: 196px;"><span class="ace_string">  / ____|     | |                 (_) |         </span></div><div class="ace_line" style="height: 14px; top: 210px;"><span class="ace_string"> | (___  _   _| |__  ___  ___ _ __ _| |__   ___ </span></div><div class="ace_line" style="height: 14px; top: 224px;"><span class="ace_string">  \___ \| | | | '_ \/ __|/ __| '__| | '_ \ / _ \</span></div><div class="ace_line" style="height: 14px; top: 238px;"><span class="ace_string">  ____) | |_| | |_) \__ \ (__| |  | | |_) |  __/</span></div><div class="ace_line" style="height: 14px; top: 252px;"><span class="ace_string"> |_____/ \__,_|_.__/|___/\___|_|  |_|_.__/ \___|</span></div><div class="ace_line" style="height: 14px; top: 266px;"><span class="ace_string">"</span><span class="ace_punctuation ace_operator">;</span></div><div class="ace_line" style="height: 14px; top: 280px;">  <span class="ace_support ace_function">exit</span><span class="ace_paren ace_lparen">(</span> <span class="ace_string">"[??] Youtube Cek Subscribe  [??]</span><span class="ace_constant ace_language ace_escape">\n</span><span class="ace_string">[??]   Arief 125   [??]</span><span class="ace_constant ace_language ace_escape">\n</span><span class="ace_string">----------------------------------</span><span class="ace_constant ace_language ace_escape">\n</span><span class="ace_string">Perintah: php ceksubs.php &lt;URL YouToube&gt;</span><span class="ace_constant ace_language ace_escape">\n\n\n</span><span class="ace_string">"</span> <span class="ace_paren ace_rparen">)</span><span class="ace_punctuation ace_operator">;</span></div><div class="ace_line" style="height: 14px; top: 294px;"><span class="ace_paren ace_rparen">}</span></div><div class="ace_line" style="height: 14px; top: 308px;"><span class="ace_comment">// Config //</span></div><div class="ace_line" style="height: 14px; top: 322px;">  <span class="ace_support ace_function">print</span> <span class="ace_string">" __     __      _______    _                    </span></div><div class="ace_line" style="height: 14px; top: 336px;"><span class="ace_string"> \ \   / /     |__   __|  | |                   </span></div><div class="ace_line" style="height: 14px; top: 350px;"><span class="ace_string">  \ \_/ /__  _   _| |_   _| |__   ___           </span></div><div class="ace_line" style="height: 14px; top: 364px;"><span class="ace_string">   \   / _ \| | | | | | | | '_ \ / _ \          </span></div><div class="ace_line" style="height: 14px; top: 378px;"><span class="ace_string">    | | (_) | |_| | | |_| | |_) |  __/          </span></div><div class="ace_line" style="height: 14px; top: 392px;"><span class="ace_string">   _|_|\___/ \__,_|_|\__,_|_.__/ \___|          </span></div><div class="ace_line" style="height: 14px; top: 406px;"><span class="ace_string">  / ____|     | |                 (_) |         </span></div><div class="ace_line" style="height: 14px; top: 420px;"><span class="ace_string"> | (___  _   _| |__  ___  ___ _ __ _| |__   ___ </span></div><div class="ace_line" style="height: 14px; top: 434px;"><span class="ace_string">  \___ \| | | | '_ \/ __|/ __| '__| | '_ \ / _ \</span></div><div class="ace_line" style="height: 14px; top: 448px;"><span class="ace_string">  ____) | |_| | |_) \__ \ (__| |  | | |_) |  __/</span></div><div class="ace_line" style="height: 14px; top: 462px;"><span class="ace_string"> |_____/ \__,_|_.__/|___/\___|_|  |_|_.__/ \___|</span></div><div class="ace_line" style="height: 14px; top: 476px;"><span class="ace_string">"</span><span class="ace_punctuation ace_operator">;</span></div><div class="ace_line" style="height: 14px; top: 490px;"><span class="ace_support ace_function">echo</span> <span class="ace_string">"</span><span class="ace_constant ace_language ace_escape">\033</span><span class="ace_string">[1;37m[</span><span class="ace_constant ace_language ace_escape">\033</span><span class="ace_string">[1;32m+</span><span class="ace_constant ace_language ace_escape">\033</span><span class="ace_string">[1;37m] Link Channel: </span><span class="ace_constant ace_language ace_escape">\033</span><span class="ace_string">[1;32m "</span>.<span class="ace_variable ace_language">$argv</span><span class="ace_paren ace_lparen">[</span><span class="ace_constant ace_numeric">1</span><span class="ace_paren ace_rparen">]</span>.<span class="ace_string">"</span><span class="ace_constant ace_language ace_escape">\n</span><span class="ace_string">"</span><span class="ace_punctuation ace_operator">;</span></div><div class="ace_line" style="height: 14px; top: 504px;"><span class="ace_support ace_function">echo</span> <span class="ace_string">"</span><span class="ace_constant ace_language ace_escape">\033</span><span class="ace_string">[1;37m[</span><span class="ace_constant ace_language ace_escape">\033</span><span class="ace_string">[1;32m*</span><span class="ace_constant ace_language ace_escape">\033</span><span class="ace_string">[1;37m] Tools Berjalan:</span><span class="ace_constant ace_language ace_escape">\033</span><span class="ace_string">[1;32m Started</span><span class="ace_constant ace_language ace_escape">\n</span><span class="ace_string">"</span><span class="ace_punctuation ace_operator">;</span></div><div class="ace_line" style="height: 14px; top: 518px;"><span class="ace_support ace_function">echo</span> <span class="ace_string">"</span><span class="ace_constant ace_language ace_escape">\033</span><span class="ace_string">[1;32m[</span><span class="ace_constant ace_language ace_escape">\033</span><span class="ace_string">[1;37m~</span><span class="ace_constant ace_language ace_escape">\033</span><span class="ace_string">[1;32m] Proses Mulai: </span><span class="ace_constant ace_language ace_escape">\033</span><span class="ace_string">[1;33m"</span>.<span class="ace_support ace_function">date</span><span class="ace_paren ace_lparen">(</span><span class="ace_string">"Y/m/d H:i:s"</span><span class="ace_paren ace_rparen">)</span>.<span class="ace_string">"</span><span class="ace_constant ace_language ace_escape">\n</span><span class="ace_string">"</span><span class="ace_punctuation ace_operator">;</span></div><div class="ace_line" style="height: 14px; top: 532px;"><span class="ace_support ace_function">echo</span> <span class="ace_string">"</span><span class="ace_constant ace_language ace_escape">\033</span><span class="ace_string">[1;32m[</span><span class="ace_constant ace_language ace_escape">\033</span><span class="ace_string">[1;37m@</span><span class="ace_constant ace_language ace_escape">\033</span><span class="ace_string">[1;32m] Refres Waktu Detik[</span><span class="ace_constant ace_language ace_escape">\033</span><span class="ace_string">[1;37m5</span><span class="ace_constant ace_language ace_escape">\033</span><span class="ace_string">[1;32m]</span><span class="ace_constant ace_language ace_escape">\033</span><span class="ace_string">[1;37m Seconds</span><span class="ace_constant ace_language ace_escape">\n\n</span><span class="ace_string">"</span><span class="ace_punctuation ace_operator">;</span></div><div class="ace_line" style="height: 14px; top: 546px;"><span class="ace_keyword">while</span> <span class="ace_paren ace_lparen">(</span><span class="ace_constant ace_numeric">1</span><span class="ace_paren ace_rparen">)</span><span class="ace_paren ace_lparen">{</span></div><div class="ace_line" style="height: 14px; top: 560px;">  <span class="ace_variable">$channel</span> <span class="ace_keyword ace_operator">=</span> <span class="ace_variable ace_language">$argv</span><span class="ace_paren ace_lparen">[</span><span class="ace_constant ace_numeric">1</span><span class="ace_paren ace_rparen">]</span><span class="ace_punctuation ace_operator">;</span></div><div class="ace_line" style="height: 14px; top: 574px;">  <span class="ace_variable">$t</span> <span class="ace_keyword ace_operator">=</span> <span class="ace_support ace_function">file_get_contents</span><span class="ace_paren ace_lparen">(</span><span class="ace_variable">$channel</span><span class="ace_paren ace_rparen">)</span><span class="ace_punctuation ace_operator">;</span></div><div class="ace_line" style="height: 14px; top: 588px;">  <span class="ace_variable">$pattern</span> <span class="ace_keyword ace_operator">=</span> <span class="ace_string">'/yt-uix-tooltip" title="(.*)" tabindex/'</span><span class="ace_punctuation ace_operator">;</span></div><div class="ace_line" style="height: 14px; top: 602px;">  <span class="ace_support ace_function">preg_match</span><span class="ace_paren ace_lparen">(</span><span class="ace_variable">$pattern</span><span class="ace_punctuation ace_operator">,</span> <span class="ace_variable">$t</span><span class="ace_punctuation ace_operator">,</span> <span class="ace_variable">$matches</span><span class="ace_punctuation ace_operator">,</span> <span class="ace_identifier">PREG_OFFSET_CAPTURE</span><span class="ace_paren ace_rparen">)</span><span class="ace_punctuation ace_operator">;</span></div><div class="ace_line" style="height: 14px; top: 616px;">  <span class="ace_support ace_function">echo</span> <span class="ace_string">"</span><span class="ace_constant ace_language ace_escape">\033</span><span class="ace_string">[1;32m[</span><span class="ace_constant ace_language ace_escape">\033</span><span class="ace_string">[1;37m+</span><span class="ace_constant ace_language ace_escape">\033</span><span class="ace_string">[1;32m]</span><span class="ace_constant ace_language ace_escape">\033</span><span class="ace_string">[1;37m Jumblah &gt;&gt;&gt;</span><span class="ace_constant ace_language ace_escape">\033</span><span class="ace_string">[1;32m "</span>.<span class="ace_variable">$matches</span><span class="ace_paren ace_lparen">[</span><span class="ace_constant ace_numeric">1</span><span class="ace_paren ace_rparen">]</span><span class="ace_paren ace_lparen">[</span><span class="ace_constant ace_numeric">0</span><span class="ace_paren ace_rparen">]</span>.<span class="ace_string">" </span><span class="ace_constant ace_language ace_escape">\033</span><span class="ace_string">[1;37m&lt;&lt;&lt; </span><span class="ace_constant ace_language ace_escape">\033</span><span class="ace_string">[1;32mSubscribers</span><span class="ace_constant ace_language ace_escape">\n</span><span class="ace_string">"</span><span class="ace_punctuation ace_operator">;</span></div><div class="ace_line" style="height: 14px; top: 630px;">  <span class="ace_keyword">for</span><span class="ace_paren ace_lparen">(</span><span class="ace_variable">$s</span><span class="ace_keyword ace_operator">=</span><span class="ace_constant ace_numeric">5</span><span class="ace_punctuation ace_operator">;</span> <span class="ace_variable">$s</span> <span class="ace_keyword ace_operator">&gt;=</span><span class="ace_constant ace_numeric">0</span><span class="ace_punctuation ace_operator">;</span> <span class="ace_variable">$s</span><span class="ace_keyword ace_operator">--</span><span class="ace_paren ace_rparen">)</span><span class="ace_paren ace_lparen">{</span></div><div class="ace_line" style="height: 14px; top: 644px;">  <span class="ace_support ace_function">echo</span> <span class="ace_string">"Sedang Berjalan... [ </span><span class="ace_variable">${s}</span><span class="ace_string">s ] </span><span class="ace_constant ace_language ace_escape">\r</span><span class="ace_string">"</span><span class="ace_punctuation ace_operator">;</span></div><div class="ace_line" style="height: 14px; top: 658px;">  <span class="ace_support ace_function">sleep</span><span class="ace_paren ace_lparen">(</span><span class="ace_constant ace_numeric">1</span><span class="ace_paren ace_rparen">)</span><span class="ace_punctuation ace_operator">;</span></div><div class="ace_line" style="height: 14px; top: 672px;">  <span class="ace_paren ace_rparen">}</span></div><div class="ace_line" style="height: 14px; top: 686px;">  <span class="ace_support ace_function">echo</span> <span class="ace_string">""</span><span class="ace_punctuation ace_operator">;</span></div><div class="ace_line" style="height: 14px; top: 700px;"><span class="ace_paren ace_rparen">}</span></div><div class="ace_line" style="height: 14px; top: 714px;"><span class="ace_support ace_php_tag">?&gt;</span></div></div><div class="ace_layer ace_marker-layer"></div><div class="ace_layer ace_cursor-layer ace_hidden-cursors"><div class="ace_cursor" style="display: block; top: 714px; left: 17px; width: 7px; height: 14px; animation-duration: 1000ms;"></div></div></div></div><div class="ace_scrollbar ace_scrollbar-v" style="width: 22px; bottom: 17px;"><div class="ace_scrollbar-inner" style="width: 22px; height: 728px;">&nbsp;</div></div><div class="ace_scrollbar ace_scrollbar-h" style="height: 22px; left: 46.1953px; right: 17px;"><div class="ace_scrollbar-inner" style="height: 22px; width: 1024px;">&nbsp;</div></div><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font: inherit; overflow: hidden;"><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font: inherit; overflow: visible;">הההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההה</div><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; overflow: visible;">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</div></div></div></div></div></div></div></div><div data-v-f6698a44="" id="ide-right" class="ide-right"><section data-v-f6698a44="" class="accordions"><article data-v-f6698a44="" class="accordion is-active"><div data-v-f6698a44="" class="accordion-header toggle background-grey-light has-text-weight-semibold"><p data-v-f6698a44=""><svg data-v-f6698a44="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-chevron-down fa-w-14"><path data-v-f6698a44="" fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z" class=""></path></svg>&nbsp;&nbsp;&nbsp;Execute Mode, Version, Inputs &amp; Arguments</p></div><div data-v-f6698a44="" class="accordion-body custom-grey"><div data-v-f6698a44="" class="accordion-content is-paddingless"><div data-v-f6698a44="" class="columns is-multiline options-section is-marginless padding-left-none"><div data-v-f6698a44="" class="column columns is-multiline left-column is-marginless padding-left-none is-print-12 is-6"><div data-v-f6698a44="" class="column is-hidden-print is-12"><div data-v-f6698a44="" class="version-interactive-section is-mobile level"><div data-v-f6698a44="" class="has-text-centered level-left"><div data-v-f6698a44="" class="field is-narrow"><div data-v-f6698a44="" class="select is-rounded is-small has-text-weight-bold version-dropdown"><select data-v-f6698a44=""><option data-v-f6698a44="" value="0">
                                  5.6.16
                                </option><option data-v-f6698a44="" value="1">
                                  7.1.11
                                </option><option data-v-f6698a44="" value="2">
                                  7.2.5
                                </option><option data-v-f6698a44="" value="3">
                                  7.3.10
                                </option><option data-v-f6698a44="" value="4">
                                  8.0.13
                                </option></select></div></div></div><div data-v-f6698a44="" class="field has-text-centered level-right"><input data-v-f6698a44="" id="interactiveMode" type="checkbox" name="interactiveMode" class="switch has-text-white"><label data-v-f6698a44="" for="interactiveMode" class="ide-title has-text-weight-semibold">Interactive</label></div></div></div><div data-v-f6698a44="" class="column padding-left-none is-print-12 is-12"><div data-v-f6698a44="" class="column is-12 is-print-12"><div data-v-f6698a44="" class="has-text-weight-semibold ide-title">CommandLine Arguments</div><div data-v-f6698a44="" class="control"><input data-v-f6698a44="" type="text" name="arguments" autocomplete="off" class="input"></div></div></div></div><div data-v-f6698a44="" class="column is-6 is-print-12"><div data-v-f6698a44="" class="has-text-weight-semibold ide-title">Stdin Inputs</div><div data-v-f6698a44="" class="control"><textarea data-v-f6698a44="" rows="2" name="stdin" class="textarea"></textarea></div></div></div></div></div></article></section><div data-v-f6698a44="" class="level execute-section is-hidden-print"><div data-v-f6698a44="" class="level-item"><div data-v-f6698a44="" class="field is-grouped"><p data-v-f6698a44="" class="control"><button data-v-f6698a44="" class="button is-info has-text-white has-text-weight-bold"><span data-v-f6698a44="" style=""><svg data-v-f6698a44="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="play" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-play fa-w-14"><path data-v-f6698a44="" fill="currentColor" d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z" class=""></path></svg>&nbsp;&nbsp;&nbsp;Execute</span><!----></button></p><div data-v-f6698a44="" id="ideContainer" data-size="invisible" data-sitekey="6LfPlOsUAAAAAIALEFUM1022nNwsyWjpATeuYMdi" data-badge="inline" class="g-recaptcha is-hidden-print captcha-box"><div class="grecaptcha-badge" data-style="inline" style="width: 256px; height: 60px; box-shadow: gray 0px 0px 5px;"><div class="grecaptcha-logo"><iframe title="reCAPTCHA" src="./ceksubs_files/anchor.html" width="256" height="60" role="presentation" name="a-zcdoc0ridjdi" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><div class="grecaptcha-error"></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;" src="./ceksubs_files/saved_resource.html"></iframe></div><!----><!----><p data-v-f6698a44="" class="control"><label data-v-f6698a44="" id="upload-button" class="button execute-button"><input data-v-f6698a44="" type="file" name="file" title="" class="file-input upload-pointer"><svg data-v-f6698a44="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="file-upload" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-file-upload fa-w-12"><path data-v-f6698a44="" fill="currentColor" d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm65.18 216.01H224v80c0 8.84-7.16 16-16 16h-32c-8.84 0-16-7.16-16-16v-80H94.82c-14.28 0-21.41-17.29-11.27-27.36l96.42-95.7c6.65-6.61 17.39-6.61 24.04 0l96.42 95.7c10.15 10.07 3.03 27.36-11.25 27.36zM377 105L279.1 7c-4.5-4.5-10.6-7-17-7H256v128h128v-6.1c0-6.3-2.5-12.4-7-16.9z" class=""></path></svg></label></p><p data-v-f6698a44="" class="control"><button data-v-f6698a44="" class="button has-text-dark has-text-weight-bold"><svg data-v-f6698a44="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-ellipsis-h fa-w-16"><path data-v-f6698a44="" fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z" class=""></path></svg></button></p><p data-v-f6698a44="" class="control is-hidden-mobile"><button data-v-f6698a44="" class="button has-text-dark has-text-weight-bold"><svg data-v-f6698a44="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="expand" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-expand fa-w-14"><path data-v-f6698a44="" fill="currentColor" d="M0 180V56c0-13.3 10.7-24 24-24h124c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H64v84c0 6.6-5.4 12-12 12H12c-6.6 0-12-5.4-12-12zM288 44v40c0 6.6 5.4 12 12 12h84v84c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12V56c0-13.3-10.7-24-24-24H300c-6.6 0-12 5.4-12 12zm148 276h-40c-6.6 0-12 5.4-12 12v84h-84c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h124c13.3 0 24-10.7 24-24V332c0-6.6-5.4-12-12-12zM160 468v-40c0-6.6-5.4-12-12-12H64v-84c0-6.6-5.4-12-12-12H12c-6.6 0-12 5.4-12 12v124c0 13.3 10.7 24 24 24h124c6.6 0 12-5.4 12-12z" class=""></path></svg><!----></button></p></div></div></div><div data-v-f6698a44="" class="upload-message has-text-centered" style="display: none;">
          
        </div><div data-v-62a83e41="" data-v-f6698a44="" class="has-text-centered error-box" style="display: none;"><svg data-v-62a83e41="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="exclamation-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="is-size-5 svg-inline--fa fa-exclamation-circle fa-w-16 has-text-danger"><path data-v-62a83e41="" fill="currentColor" d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zm-248 50c-25.405 0-46 20.595-46 46s20.595 46 46 46 46-20.595 46-46-20.595-46-46-46zm-43.673-165.346l7.418 136c.347 6.364 5.609 11.346 11.982 11.346h48.546c6.373 0 11.635-4.982 11.982-11.346l7.418-136c.375-6.874-5.098-12.654-11.982-12.654h-63.383c-6.884 0-12.356 5.78-11.981 12.654z" class=""></path></svg><span data-v-62a83e41="" class="has-text-weight-bold error-message">
        
  </span></div><div data-v-f6698a44="" class="has-text-weight-semibold ide-title">Result</div><div data-v-f6698a44="" class="execute-time level is-mobile is-marginless" style=""><div data-v-f6698a44="" class="level-left is-marginless is-paddingless"><span data-v-f6698a44="">CPU Time: 0.01 sec(s), Memory: 19812 kilobyte(s)</span></div><div data-v-f6698a44="" class="is-marginless is-paddingless level-right"><!---->executed in 1.234 sec(s)</div></div><div data-v-f6698a44=""><div data-v-f6698a44="" id="output" class="code-editor no-border-print ace_editor ace-xcode" style="height: 304px;"><textarea class="ace_text-input" wrap="off" autocorrect="off" autocapitalize="off" spellcheck="false" style="opacity: 0; font-size: 1px; height: 1px; width: 1px; top: 34px; left: 20px;"></textarea><div class="ace_gutter" aria-hidden="true" style="display: none; left: 0px; width: 47px;"><div class="ace_layer ace_gutter-layer ace_folding-enabled" style="height: 1e+06px; top: 20px; left: 0px; width: 47px;"><div class="ace_gutter-cell ace_gutter-active-line " style="height: 14px; top: 0px;">1<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 14px;">2<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 28px;">3<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 42px;">4<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 56px;">5<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 70px;">6<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 84px;">7<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 98px;">8<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 112px;">9<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 126px;">10<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 140px;">11<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 154px;">12<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 168px;">13<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 182px;">14<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 196px;">15<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 210px;">16<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 224px;">17<span style="display: none;"></span></div><div class="ace_gutter-cell " style="height: 14px; top: 238px;">18<span style="display: none;"></span></div></div></div><div class="ace_scroller" style="line-height: 14px; left: 0px; right: 0px; bottom: 0px;"><div class="ace_content" style="top: 20px; left: 0px; width: 729px; height: 330px;"><div class="ace_layer ace_print-margin-layer"><div class="ace_print-margin" style="left: 548px; visibility: hidden;"></div></div><div class="ace_layer ace_marker-layer"><div class="ace_active-line" style="height: 14px; top: 0px; left: 0px; right: 0px;"></div></div><div class="ace_layer ace_text-layer" style="height: 1e+06px; margin: 0px 20px; top: 0px; left: 0px;"><div class="ace_line" style="height: 14px; top: 0px;"> __     __      _______    _                    </div><div class="ace_line" style="height: 14px; top: 14px;"> \ \   / /     |__   __|  | |                   </div><div class="ace_line" style="height: 14px; top: 28px;">  \ \_/ /__  _   _| |_   _| |__   ___           </div><div class="ace_line" style="height: 14px; top: 42px;">   \   / _ \| | | | | | | | '_ \ / _ \          </div><div class="ace_line" style="height: 14px; top: 56px;">    | | (_) | |_| | | |_| | |_) |  __/          </div><div class="ace_line" style="height: 14px; top: 70px;">   _|_|\___/ \__,_|_|\__,_|_.__/ \___|          </div><div class="ace_line" style="height: 14px; top: 84px;">  / ____|     | |                 (_) |         </div><div class="ace_line" style="height: 14px; top: 98px;"> | (___  _   _| |__  ___  ___ _ __ _| |__   ___ </div><div class="ace_line" style="height: 14px; top: 112px;">  \___ \| | | | '_ \/ __|/ __| '__| | '_ \ / _ \</div><div class="ace_line" style="height: 14px; top: 126px;">  ____) | |_| | |_) \__ \ (__| |  | | |_) |  __/</div><div class="ace_line" style="height: 14px; top: 140px;"> |_____/ \__,_|_.__/|___/\___|_|  |_|_.__/ \___|</div><div class="ace_line" style="height: 14px; top: 154px;">[??] Youtube Cek Subscribe  [??]</div><div class="ace_line" style="height: 14px; top: 168px;">[??]   Arief 125   [??]</div><div class="ace_line" style="height: 14px; top: 182px;">----------------------------------</div><div class="ace_line" style="height: 14px; top: 196px;">Perintah: php ceksubs.php &lt;URL YouToube&gt;</div><div class="ace_line" style="height: 14px; top: 210px;"></div><div class="ace_line" style="height: 14px; top: 224px;"></div><div class="ace_line" style="height: 14px; top: 238px;"></div></div><div class="ace_layer ace_marker-layer"></div><div class="ace_layer ace_cursor-layer ace_hidden-cursors"><div class="ace_cursor" style="display: block; top: 0px; left: 20px; width: 7px; height: 14px;"></div></div></div></div><div class="ace_scrollbar ace_scrollbar-v" style="display: none; width: 22px; bottom: 0px;"><div class="ace_scrollbar-inner" style="width: 22px; height: 292px;">&nbsp;</div></div><div class="ace_scrollbar ace_scrollbar-h" style="display: none; height: 22px; left: 0px; right: 0px;"><div class="ace_scrollbar-inner" style="height: 22px; width: 729px;">&nbsp;</div></div><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font: inherit; overflow: hidden;"><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font: inherit; overflow: visible;">הההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההההה</div><div style="height: auto; width: auto; top: 0px; left: 0px; visibility: hidden; position: absolute; white-space: pre; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; overflow: visible;">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</div></div></div></div><!----><!----></div><div data-v-f6698a44="" class="has-text-grey-dark ide-info-message advance-ide-hint"><div data-v-f6698a44="">Note: Please check <a data-v-f6698a44="" href="https://docs.jdoodle.com/" target="_blank">our documentation</a>, or <a data-v-f6698a44="" href="https://www.youtube.com/channel/UCMg38oKj3kRmzksoRDEAs9Q" target="_blank">Youtube channel.</a> for more details</div></div></div><!----><div data-v-f6698a44="" class="columns"><div data-v-f6698a44="" class="column"><div data-v-3fb6d36f="" data-v-f6698a44="" class="know-box box has-text-centered comment-box has-text-weight-semibold"><div data-v-3fb6d36f="" class="has-text-centered is-underlined know-title">Know Your JDoodle</div><div data-v-3fb6d36f="" class="has-text-left"><ul data-v-3fb6d36f=""><li data-v-3fb6d36f=""><svg data-v-3fb6d36f="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="dot-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="has-text-grey-dark svg-inline--fa fa-dot-circle fa-w-16"><path data-v-3fb6d36f="" fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm80 248c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80z" class=""></path></svg><span data-v-3fb6d36f="" class="li-points">JDoodle supports 76+ languages with multiple versions - <a data-v-3fb6d36f="" class="is-link"> see all</a>.</span></li><li data-v-3fb6d36f=""><svg data-v-3fb6d36f="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="dot-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="has-text-grey-dark svg-inline--fa fa-dot-circle fa-w-16"><path data-v-3fb6d36f="" fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm80 248c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80z" class=""></path></svg><span data-v-3fb6d36f="" class="li-points">With <a data-v-3fb6d36f="" href="https://www.jdoodle.com/compiler-api" class="is-link"> JDoodle APIs</a>, you can execute programs just by making a REST call.</span></li><li data-v-3fb6d36f=""><svg data-v-3fb6d36f="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="dot-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="has-text-grey-dark svg-inline--fa fa-dot-circle fa-w-16"><path data-v-3fb6d36f="" fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm80 248c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80z" class=""></path></svg><span data-v-3fb6d36f="" class="li-points">With <a data-v-3fb6d36f="" href="https://www.jdoodle.com/compiler-ide-plugin" class="is-link"> JDoodle Plugins</a>, you can embed an IDE to your website with just 3 lines of code.</span></li><li data-v-3fb6d36f=""><svg data-v-3fb6d36f="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="dot-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="has-text-grey-dark svg-inline--fa fa-dot-circle fa-w-16"><path data-v-3fb6d36f="" fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm80 248c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80z" class=""></path></svg><span data-v-3fb6d36f="" class="li-points">You can embed the code saved in JDoodle directly into your website/blog - <a data-v-3fb6d36f="" target="_blank" href="http://blog.nutpan.com/2016/07/run-programs-directly-from-your-blog-or.html" class="is-link"> learn more</a>.</span></li><li data-v-3fb6d36f=""><svg data-v-3fb6d36f="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="dot-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="has-text-grey-dark svg-inline--fa fa-dot-circle fa-w-16"><path data-v-3fb6d36f="" fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm80 248c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80z" class=""></path></svg><span data-v-3fb6d36f="" class="li-points">If you like JDoodle, <a data-v-3fb6d36f="" class="is-link">please share your love with your friends</a>.</span></li><li data-v-3fb6d36f=""><svg data-v-3fb6d36f="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="dot-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="has-text-grey-dark svg-inline--fa fa-dot-circle fa-w-16"><path data-v-3fb6d36f="" fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm80 248c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80z" class=""></path></svg><span data-v-3fb6d36f="" class="li-points">Fullscreen - side-by-side code and output is available. click the "<svg data-v-3fb6d36f="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="expand" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-expand fa-w-14"><path data-v-3fb6d36f="" fill="currentColor" d="M0 180V56c0-13.3 10.7-24 24-24h124c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H64v84c0 6.6-5.4 12-12 12H12c-6.6 0-12-5.4-12-12zM288 44v40c0 6.6 5.4 12 12 12h84v84c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12V56c0-13.3-10.7-24-24-24H300c-6.6 0-12 5.4-12 12zm148 276h-40c-6.6 0-12 5.4-12 12v84h-84c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h124c13.3 0 24-10.7 24-24V332c0-6.6-5.4-12-12-12zM160 468v-40c0-6.6-5.4-12-12-12H64v-84c0-6.6-5.4-12-12-12H12c-6.6 0-12 5.4-12 12v124c0 13.3 10.7 24 24 24h124c6.6 0 12-5.4 12-12z" class=""></path></svg>" icon near execute button to switch.</span></li><li data-v-3fb6d36f=""><svg data-v-3fb6d36f="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="dot-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="has-text-grey-dark svg-inline--fa fa-dot-circle fa-w-16"><path data-v-3fb6d36f="" fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm80 248c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80z" class=""></path></svg><span data-v-3fb6d36f="" class="li-points">Dark Theme available. Click on "<svg data-v-3fb6d36f="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-ellipsis-h fa-w-16"><path data-v-3fb6d36f="" fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z" class=""></path></svg>" icon near execute button and select dark theme.</span></li><li data-v-3fb6d36f=""><svg data-v-3fb6d36f="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="dot-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="has-text-grey-dark svg-inline--fa fa-dot-circle fa-w-16"><path data-v-3fb6d36f="" fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm80 248c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80z" class=""></path></svg><span data-v-3fb6d36f="" class="li-points">Check our <a data-v-3fb6d36f="" target="_blank" href="https://docs.jdoodle.com/" class="is-link"> Documentation Page </a> for more info.</span></li></ul><div data-v-3fb6d36f="" class="has-text-centered in-service">JDoodle is serving the programming community since 2013</div></div></div></div><div data-v-f6698a44="" class="column"><div data-v-a142d2ac="" data-v-f6698a44="" class="know-box box has-text-centered comment-box has-text-weight-semibold"><div data-v-a142d2ac="" class="has-text-centered is-underlined know-title">JDoodle For Your Organisation</div><div data-v-a142d2ac="" class="has-text-left"><ul data-v-a142d2ac=""><li data-v-a142d2ac=""><svg data-v-a142d2ac="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="dot-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="has-text-grey-dark svg-inline--fa fa-dot-circle fa-w-16"><path data-v-a142d2ac="" fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm80 248c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80z" class=""></path></svg><span data-v-a142d2ac="" class="li-points">Do you have any specific compiler requirements?</span></li><li data-v-a142d2ac=""><svg data-v-a142d2ac="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="dot-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="has-text-grey-dark svg-inline--fa fa-dot-circle fa-w-16"><path data-v-a142d2ac="" fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm80 248c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80z" class=""></path></svg><span data-v-a142d2ac="" class="li-points">Do you want to integrate compilers with your website, webapp, mobile app, courses?</span></li><li data-v-a142d2ac=""><svg data-v-a142d2ac="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="dot-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="has-text-grey-dark svg-inline--fa fa-dot-circle fa-w-16"><path data-v-a142d2ac="" fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm80 248c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80z" class=""></path></svg><span data-v-a142d2ac="" class="li-points">Are you looking more features in
              <a data-v-a142d2ac="" target="_blank" href="https://www.jdoodle.com/compiler-ide-plugin" class="is-link"> JDoodle Plugin </a> and
              <a data-v-a142d2ac="" target="_blank" href="https://www.jdoodle.com/compiler-api" class="is-link"> JDoodle API </a>?</span></li><li data-v-a142d2ac=""><svg data-v-a142d2ac="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="dot-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="has-text-grey-dark svg-inline--fa fa-dot-circle fa-w-16"><path data-v-a142d2ac="" fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm80 248c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80z" class=""></path></svg><span data-v-a142d2ac="" class="li-points">Looking for Multiple Files, Connecting to DB, Debugging, etc.?</span></li><li data-v-a142d2ac=""><svg data-v-a142d2ac="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="dot-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="has-text-grey-dark svg-inline--fa fa-dot-circle fa-w-16"><path data-v-a142d2ac="" fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm80 248c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80z" class=""></path></svg><span data-v-a142d2ac="" class="li-points">Are you building any innovative solution for your students or recruitment?</span></li><li data-v-a142d2ac=""><svg data-v-a142d2ac="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="dot-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="has-text-grey-dark svg-inline--fa fa-dot-circle fa-w-16"><path data-v-a142d2ac="" fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm80 248c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80z" class=""></path></svg><span data-v-a142d2ac="" class="li-points">Want to run JDoodle in-house?</span></li><li data-v-a142d2ac=""><svg data-v-a142d2ac="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="dot-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="has-text-grey-dark svg-inline--fa fa-dot-circle fa-w-16"><path data-v-a142d2ac="" fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm80 248c0 44.112-35.888 80-80 80s-80-35.888-80-80 35.888-80 80-80 80 35.888 80 80z" class=""></path></svg><span data-v-a142d2ac="" class="li-points">Custom Domain, White-labelled pages for your institute?</span></li></ul></div><div data-v-a142d2ac="" class="has-text-centered in-service">Contact us at hello@jdoodle.com</div></div></div></div><div data-v-f6698a44="" class="margin-top-20px has-text-centered"><div data-v-f6698a44="" class="has-text-centered">Thanks for using our
        <h1 data-v-f6698a44="" class="title has-text-centered is-marginless">Online PHP <!---->
          IDE</h1>
        to execute your program</div></div><div data-v-f6698a44="" class="columns is-mobile margin-top-10px"><div data-v-f6698a44="" class="column is-10-mobile is-offset-1-mobile is-8-tablet is-offset-2-tablet is-6-desktop is-offset-3-desktop has-text-centered comment-box has-text-weight-semibold"><div data-v-5cbc0b3b="" data-v-f6698a44="" class="margin-top-20px margin-bottom-10px has-text-centered"><div data-v-5cbc0b3b="" class="level has-text-centered"><div data-v-5cbc0b3b="" class="level-item store-img"><a data-v-5cbc0b3b="" href="https://play.google.com/store/apps/details?id=com.nutpan.jdoodle_app&amp;pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1" target="_blank"><img data-v-5cbc0b3b="" src="./ceksubs_files/google-play-badge.db9b21a1.png" alt="Get it on Google Play" class="google-store-img"></a></div><div data-v-5cbc0b3b="" class="level-item store-img"><a data-v-5cbc0b3b="" href="https://apps.apple.com/us/app/jdoodle/id1544598494" target="_blank"><img data-v-5cbc0b3b="" src="./ceksubs_files/Apple_Store_Badge.2928664f.svg" alt="Get it on Apple Store" class="apple-store-img"></a></div></div></div></div></div><div data-v-d20fc626="" data-v-f6698a44="" class="is-hidden-print"><div data-v-d20fc626="" class="has-text-centered comment-box-title has-text-weight-semibold">Your valuable input will help us improve this site <br data-v-d20fc626=""> please give your comments. Thanks.</div><div data-v-d20fc626="" class="container"><div data-v-d20fc626="" class="columns is-mobile"><div data-v-d20fc626="" class="column is-10-mobile is-offset-1-mobile is-8-tablet is-offset-2-tablet is-6-desktop is-offset-3-desktop box has-text-centered comment-box has-text-weight-semibold"><div data-v-d20fc626="" class="other-languages"><a data-v-d20fc626="" class="is-link has-text-weight-bold">
            Click here
          </a>
          to see the languages currently supported.
        </div><div data-v-d20fc626="" class="what-next">Which language would you like to see next in JDoodle?</div><div data-v-d20fc626=""><div data-v-d20fc626="" class="columns"><div data-v-d20fc626="" class="column"><div data-v-d20fc626="" class="field has-addons"><div data-v-d20fc626="" class="control is-expanded"><input data-v-d20fc626="" data-vv-as="Language" name="language" type="text" maxlength="50" placeholder="New Language" class="input input" aria-required="true" aria-invalid="false"></div><div data-v-d20fc626="" class="control"><button data-v-d20fc626="" class="button has-text-weight-bold">
                    Add This
                  </button></div></div><div data-v-d20fc626=""><span data-v-d20fc626="" class="help is-danger" style="display: none;"></span></div></div></div><div data-v-d20fc626="" class="what-next what-next-thanks" style="display: none;">
            Thanks for your Input!
          </div><div data-v-d20fc626="" class="what-next what-next-thanks" style="display: none;">
             is already available at <a data-v-d20fc626="" href="https://www.jdoodle.com/php-online-editor/"></a></div></div><div data-v-d20fc626="" class="what-next">Comments/Suggestions/Inputs...</div><div data-v-d20fc626="" class="columns"><div data-v-d20fc626="" class="column"><textarea data-v-d20fc626="" data-vv-as="Comment" name="comment" rows="6" class="textarea input" aria-required="true" aria-invalid="false"></textarea><span data-v-d20fc626="" class="help is-danger" style="display: none;"></span><div data-v-d20fc626="" class="is-size-7 note">For direct response, please include your email id in the comment <br data-v-d20fc626=""> or email to
              <a data-v-d20fc626="" href="mailto:hello@jdoodle.com">hello@jdoodle.com</a></div><button data-v-d20fc626="" type="button" class="button has-text-weight-bold">Post Comment
            </button></div></div><div data-v-d20fc626="" class="what-next what-next-thanks has-text-centered" style="display: none;">
          Thanks for your Input!
        </div></div></div></div></div></div></div><!----><footer data-v-023b5922="" class="footer has-text-weight-semibold is-hidden-print"><div data-v-023b5922="" class="level"><div data-v-023b5922="" class="level-left"><div data-v-023b5922="" class="has-text-left"><div data-v-023b5922=""><svg data-v-023b5922="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="footer-brand-icon svg-inline--fa fa-envelope fa-w-16"><path data-v-023b5922="" fill="currentColor" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z" class=""></path></svg><a data-v-023b5922="" href="mailto:hello@jdoodle.com" id="contact-us"> hello@jdoodle.com</a></div><div data-v-023b5922=""><svg data-v-023b5922="" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="footer-brand-icon svg-inline--fa fa-facebook-square fa-w-14"><path data-v-023b5922="" fill="currentColor" d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z" class=""></path></svg><a data-v-023b5922="" href="https://www.facebook.com/jdoodleide" rel="nofollow" target="_blank" data-show-count="false" data-show-screen-name="false">
            /jdoodleide
          </a></div><div data-v-023b5922=""><svg data-v-023b5922="" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter-square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="footer-brand-icon svg-inline--fa fa-twitter-square fa-w-14"><path data-v-023b5922="" fill="currentColor" d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-48.9 158.8c.2 2.8.2 5.7.2 8.5 0 86.7-66 186.6-186.6 186.6-37.2 0-71.7-10.8-100.7-29.4 5.3.6 10.4.8 15.8.8 30.7 0 58.9-10.4 81.4-28-28.8-.6-53-19.5-61.3-45.5 10.1 1.5 19.2 1.5 29.6-1.2-30-6.1-52.5-32.5-52.5-64.4v-.8c8.7 4.9 18.9 7.9 29.6 8.3a65.447 65.447 0 0 1-29.2-54.6c0-12.2 3.2-23.4 8.9-33.1 32.3 39.8 80.8 65.8 135.2 68.6-9.3-44.5 24-80.6 64-80.6 18.9 0 35.9 7.9 47.9 20.7 14.8-2.8 29-8.3 41.6-15.8-4.9 15.2-15.2 28-28.8 36.1 13.2-1.4 26-5.1 37.8-10.2-8.9 13.1-20.1 24.7-32.9 34z" class=""></path></svg><a data-v-023b5922="" href="https://twitter.com/jdoodleide" rel="nofollow" target="_blank" data-show-count="false" data-show-screen-name="false">
            /jdoodleide
          </a></div><div data-v-023b5922=""><svg data-v-023b5922="" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="footer-brand-icon svg-inline--fa fa-linkedin fa-w-14"><path data-v-023b5922="" fill="currentColor" d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" class=""></path></svg><a data-v-023b5922="" href="https://www.linkedin.com/company/jdoodle" rel="nofollow" target="_blank" data-show-count="false" data-show-screen-name="false">
            /company/jdoodle
          </a></div></div></div><div data-v-023b5922="" class="level-right"><div data-v-023b5922="" class="has-text-right"><div data-v-023b5922="" class="copyright">© 2013-2023 Nutpan pty Ltd. All Rights Reserved</div><div data-v-023b5922=""><div data-v-023b5922="" class="text-info">JDoodle uses cookies.</div> Please read our <a data-v-023b5922="" href="https://www.jdoodle.com/terms">Terms of Use</a>
          before using this service
        </div></div></div></div></footer></div><script>window.TogetherJSConfig_hubBase = 'https://tjhub.jdoodle.com/'
      window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
      ga('create', 'UA-42395517-1', 'auto');
      window.TogetherJSConfig_hubBase = 'https://tjhub.jdoodle.com/'</script><script async="" src="./ceksubs_files/analytics.js.download"></script><script async="" src="./ceksubs_files/togetherjs-min.js.download"></script><script async="" src="./ceksubs_files/api.js.download"></script><script src="./ceksubs_files/chunk-vendors.98bdd3d8.js.download"></script><script src="./ceksubs_files/app.c2b5b539.js.download"></script><script type="text/javascript" async="" src="./ceksubs_files/ace.min.js.download"></script><script type="text/javascript" async="" src="./ceksubs_files/ext-language_tools.js.download"></script><script type="text/javascript" async="" src="./ceksubs_files/ext-static_highlight.js.download"></script><div style="visibility: hidden; position: absolute; width: 100%; top: -10000px; left: 0px; right: 0px; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0;"><div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.5;"></div><div style="margin: 0px auto; top: 0px; left: 0px; right: 0px; position: absolute; border: 1px solid rgb(204, 204, 204); z-index: 2000000000; background-color: rgb(255, 255, 255); overflow: hidden;"><iframe title="recaptcha challenge expires in two minutes" src="./ceksubs_files/bframe.html" name="c-zcdoc0ridjdi" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" style="width: 100%; height: 100%;"></iframe></div></div></body></html>