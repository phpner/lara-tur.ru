function loadCss(url) {
    var $ = document;
    var head = $.getElementsByTagName("head")[0];
    var link = $.createElement("link");
    link.rel = "stylesheet";
    link.type = "text/css";
    link.href = url;
    link.media = "all";
    head.appendChild(link)
}

function strip_tags(str) {
    return str.replace(/<\/?[^>]+>/gi, "")
}

function lat_str_clear(str) {
    return str.replace(/[^a-zA-Z0-9 ]/gi, "")
}

function get_noun(number, one, two, five) {
    number = Math.abs(number);
    number %= 100;
    if (number >= 5 && number <= 20) {
        return five
    }
    number %= 10;
    if (number == 1) {
        return one
    }
    if (number >= 2 && number <= 4) {
        return two
    }
    return five
}

function secondMenuCount(chars) {
    if (chars >= 20) {
        return 4
    } else if (chars >= 14) {
        return 5
    }
    return 6
}

function resizeSecondMenu() {
    var context = $(".b-page-header");
    var $moreMenu = $(".more-menu ul", context);
    var $secondMenu = $(".top-menu", context);
    var $topMenuWrapper = $(".top-menu-wrapper", context);
    var isWide = $("body").hasClass("w1000") ? false : true;
    $secondMenu.show();
    var maxMenuWidth = isWide ? 600 : 350;
    if (isWide) {
        var countElements = secondMenuCount($("span", $topMenuWrapper).text().length);
        var liCount = $("li", $secondMenu).not(".choice").length + $moreMenu.find("li").length;
        var liCountVis = $("li", $secondMenu).not(".choice").length;
        var liCountHidden = liCountVis - countElements;
        while (liCountHidden > 0) {
            var last = $secondMenu.find("li").not(".choice").last();
            $moreMenu.prepend(last);
            liCountHidden--
        }
        while (liCountHidden < 0 && $moreMenu.find("li").length) {
            var first = $moreMenu.find("li").first();
            $secondMenu.find("li").not(".choice").last().after(first);
            liCountHidden++
        }
    } else {
        while ($secondMenu.width() >= maxMenuWidth) {
            var last = $secondMenu.find("li").not(".choice").last();
            $moreMenu.prepend(last)
        }
        while ($secondMenu.width() < maxMenuWidth && $moreMenu.find("li").length) {
            var first = $moreMenu.find("li").first();
            $secondMenu.find("li").not(".choice").last().after(first)
        }
    }
    if ($moreMenu.find("li").length) {
        $secondMenu.find("a.more").css("display", "inline")
    } else {
        $secondMenu.find("a.more").css("display", "none")
    }
    $topMenuWrapper.find("li.covert").removeClass("covert");
    $secondMenu.removeClass("hidden")
}
$(function() {
    var context = $(".b-page-header");
    var $moreMenu = $(".more-menu", context);
    var $selectorArea = $(".selector-area", context);
    var $citySelector = $(".selector", context);
    var $switchLink = $citySelector.find("a");
    var regionSelector = {
        show: function() {
            $switchLink.addClass("active");
            $citySelector.css({
                opacity: 0,
                zIndex: 1e3
            }).delay(350).animate({
                opacity: "1"
            }, 250);
            $selectorArea.stop(1, 1).animate({
                top: 0
            }, 500)
        },
        hide: function() {
            $switchLink.removeClass("active");
            $citySelector.delay(250).css({
                opacity: 1,
                zIndex: 500
            });
            $selectorArea.stop(1, 1).animate({
                top: -1e3 + "px"
            }, 500)
        }
    };
    $(".top-menu a.more", context).click(function() {
        if (!$(this).hasClass("active")) {
            $(this).addClass("active");
            $moreMenu.css("display", "block")
        } else {
            $(this).removeClass("active");
            $moreMenu.css("display", "none")
        }
        return false
    });
    $(document).click(function(event) {
        if (!$selectorArea.has(event.target).length && !$(".selector a", context).has(event.target).length && $(".selector a", context).hasClass("active")) {
            regionSelector.hide()
        }
        if (!$(event.target).closest($moreMenu).length) {
            $(".top-menu a.more", context).removeClass("active");
            $moreMenu.css("display", "none");
            event.stopPropagation()
        }
    });
    $(".selector a.citySelector", context).click(function() {
        if (!$(this).hasClass("active")) {
            regionSelector.show()
        } else {
            regionSelector.hide()
        }
        return false
    });
    $(".selector-area .closer a", context).click(function() {
        regionSelector.hide();
        return false
    })
});

function inFrameOpened() {
    try {
        return window.self !== window.top
    } catch (e) {
        return true
    }
}

function onResizeAction() {
    var $body = $("html").add("body");
    if (!inFrameOpened()) {
        if ($(window).width() < 1200) {
            $body.addClass("w1000")
        } else {
            $body.removeClass("w1000")
        }
    }
    resizeSecondMenu()
}
onResizeAction();
$(window).bind("resize", function() {
    onResizeAction()
});

(function(a) {
    (jQuery.browser = jQuery.browser || {}).mobile = /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))
})(navigator.userAgent || navigator.vendor || window.opera);

(function($) {
    var _iCheck = "iCheck",
        _iCheckHelper = _iCheck + "-helper",
        _checkbox = "checkbox",
        _radio = "radio",
        _checked = "checked",
        _unchecked = "un" + _checked,
        _disabled = "disabled",
        _determinate = "determinate",
        _indeterminate = "in" + _determinate,
        _update = "update",
        _type = "type",
        _click = "click",
        _touch = "touchbegin.i touchend.i",
        _add = "addClass",
        _remove = "removeClass",
        _callback = "trigger",
        _label = "label",
        _cursor = "cursor",
        _mobile = /ipad|iphone|ipod|android|blackberry|windows phone|opera mini/i.test(navigator.userAgent);
    $ = jQuery;
    $.fn.iCheck = function(options, fire) {
        var handle = ":" + _checkbox + ", :" + _radio,
            stack = $(),
            walker = function(object) {
                object.each(function() {
                    var self = $(this);
                    if (self.is(handle)) {
                        stack = stack.add(self)
                    } else {
                        stack = stack.add(self.find(handle))
                    }
                })
            };
        if (/^(check|uncheck|toggle|indeterminate|determinate|disable|enable|update|destroy)$/i.test(options)) {
            options = options.toLowerCase();
            walker(this);
            return stack.each(function() {
                if (options == "destroy") {
                    tidy(this, "ifDestroyed")
                } else {
                    operate($(this), true, options)
                }
                if ($.isFunction(fire)) {
                    fire()
                }
            })
        } else if (typeof options == "object" || !options) {
            var settings = $.extend({
                    checkedClass: _checked,
                    disabledClass: _disabled,
                    indeterminateClass: _indeterminate,
                    labelHover: true
                }, options),
                selector = settings.handle,
                hoverClass = settings.hoverClass || "hover",
                focusClass = settings.focusClass || "focus",
                activeClass = settings.activeClass || "active",
                labelHover = !!settings.labelHover,
                labelHoverClass = settings.labelHoverClass || "hover",
                area = ("" + settings.increaseArea).replace("%", "") | 0;
            if (selector == _checkbox || selector == _radio) {
                handle = ":" + selector
            }
            if (area < -50) {
                area = -50
            }
            walker(this);
            return stack.each(function() {
                tidy(this);
                var self = $(this),
                    node = this,
                    id = node.id,
                    offset = -area + "%",
                    size = 100 + area * 2 + "%",
                    layer = {
                        position: "absolute",
                        top: offset,
                        left: offset,
                        display: "block",
                        width: size,
                        height: size,
                        margin: 0,
                        padding: 0,
                        background: "#fff",
                        border: 0,
                        opacity: 0
                    },
                    hide = _mobile ? {
                        position: "absolute",
                        visibility: "hidden"
                    } : area ? layer : {
                        position: "absolute",
                        opacity: 0
                    },
                    className = node[_type] == _checkbox ? settings.checkboxClass || "i" + _checkbox : settings.radioClass || "i" + _radio,
                    label = $(_label + '[for="' + id + '"]').add(self.closest(_label)),
                    parent = self.wrap('<div class="' + className + '"/>')[_callback]("ifCreated").parent().append(settings.insert),
                    helper = $('<ins class="' + _iCheckHelper + '"/>').css(layer).appendTo(parent);
                self.data(_iCheck, {
                    o: settings,
                    s: self.attr("style")
                }).css(hide);
                !!settings.inheritClass && parent[_add](node.className);
                !!settings.inheritID && id && parent.attr("id", _iCheck + "-" + id);
                parent.css("position") == "static" && parent.css("position", "relative");
                operate(self, true, _update);
                if (label.length) {
                    label.bind(_click + " mouseenter mouseleave " + _touch, function(event) {
                        var type = event[_type],
                            item = $(this);
                        if (!node[_disabled]) {
                            if (type == _click) {
                                operate(self, false, true)
                            } else if (labelHover) {
                                if (/ve|nd/.test(type)) {
                                    parent[_remove](hoverClass);
                                    item[_remove](labelHoverClass)
                                } else {
                                    parent[_add](hoverClass);
                                    item[_add](labelHoverClass)
                                }
                            }
                            if (_mobile) {
                                event.stopPropagation()
                            } else {
                                return false
                            }
                        }
                    })
                }
                self.bind(_click + ".i focus.i blur.i keyup.i keydown.i keypress.i", function(event) {
                    var type = event[_type],
                        key = event.keyCode;
                    if (type == _click) {
                        return false
                    } else if (type == "keydown" && key == 32) {
                        if (!(node[_type] == _radio && node[_checked])) {
                            if (node[_checked]) {
                                off(self, _checked)
                            } else {
                                on(self, _checked)
                            }
                        }
                        return false
                    } else if (type == "keyup" && node[_type] == _radio) {
                        !node[_checked] && on(self, _checked)
                    } else if (/us|ur/.test(type)) {
                        parent[type == "blur" ? _remove : _add](focusClass)
                    }
                });
                helper.bind(_click + " mousedown mouseup mouseover mouseout " + _touch, function(event) {
                    var type = event[_type],
                        toggle = /wn|up/.test(type) ? activeClass : hoverClass;
                    if (!node[_disabled]) {
                        if (type == _click) {
                            operate(self, false, true)
                        } else {
                            if (/wn|er|in/.test(type)) {
                                parent[_add](toggle)
                            } else {
                                parent[_remove](toggle + " " + activeClass)
                            }
                            if (label.length && labelHover && toggle == hoverClass) {
                                label[/ut|nd/.test(type) ? _remove : _add](labelHoverClass)
                            }
                        }
                        if (_mobile) {
                            event.stopPropagation()
                        } else {
                            return false
                        }
                    }
                })
            })
        } else {
            return this
        }
    };

    function operate(input, direct, method) {
        var node = input[0];
        state = /er/.test(method) ? _indeterminate : /bl/.test(method) ? _disabled : _checked, active = method == _update ? {
            checked: node[_checked],
            disabled: node[_disabled],
            indeterminate: input.attr(_indeterminate) == "true" || input.attr(_determinate) == "false"
        } : node[state];
        if (/^(ch|di|in)/.test(method) && !active) {
            on(input, state)
        } else if (/^(un|en|de)/.test(method) && active) {
            off(input, state)
        } else if (method == _update) {
            for (var state in active) {
                if (active[state]) {
                    on(input, state, true)
                } else {
                    off(input, state, true)
                }
            }
        } else if (!direct || method == "toggle") {
            if (!direct) {
                input[_callback]("ifClicked")
            }
            if (active) {
                if (node[_type] !== _radio) {
                    off(input, state)
                }
            } else {
                on(input, state)
            }
        }
    }

    function on(input, state, keep) {
        var node = input[0],
            parent = input.parent(),
            checked = state == _checked,
            indeterminate = state == _indeterminate,
            callback = indeterminate ? _determinate : checked ? _unchecked : "enabled",
            regular = option(node, callback + capitalize(node[_type])),
            specific = option(node, state + capitalize(node[_type]));
        if (node[state] !== true) {
            if (!keep && state == _checked && node[_type] == _radio && node.name) {
                var form = input.closest("form"),
                    inputs = 'input[name="' + node.name + '"]';
                inputs = form.length ? form.find(inputs) : $(inputs);
                inputs.each(function() {
                    if (this !== node && $.data(this, _iCheck)) {
                        off($(this), state)
                    }
                })
            }
            if (indeterminate) {
                node[state] = true;
                if (node[_checked]) {
                    off(input, _checked, "force")
                }
            } else {
                if (!keep) {
                    node[state] = true
                }
                if (checked && node[_indeterminate]) {
                    off(input, _indeterminate, false)
                }
            }
            callbacks(input, checked, state, keep)
        }
        if (node[_disabled] && !!option(node, _cursor, true)) {
            parent.find("." + _iCheckHelper).css(_cursor, "default")
        }
        parent[_add](specific || option(node, state));
        parent[_remove](regular || option(node, callback) || "")
    }

    function off(input, state, keep) {
        var node = input[0],
            parent = input.parent(),
            checked = state == _checked,
            indeterminate = state == _indeterminate,
            callback = indeterminate ? _determinate : checked ? _unchecked : "enabled",
            regular = option(node, callback + capitalize(node[_type])),
            specific = option(node, state + capitalize(node[_type]));
        if (node[state] !== false) {
            if (indeterminate || !keep || keep == "force") {
                node[state] = false
            }
            callbacks(input, checked, callback, keep)
        }
        if (!node[_disabled] && !!option(node, _cursor, true)) {
            parent.find("." + _iCheckHelper).css(_cursor, "pointer")
        }
        parent[_remove](specific || option(node, state) || "");
        parent[_add](regular || option(node, callback))
    }

    function tidy(node, callback) {
        if ($.data(node, _iCheck)) {
            var input = $(node);
            input.parent().html(input.attr("style", $.data(node, _iCheck).s || "")[_callback](callback || ""));
            input.off(".i").unwrap();
            $(_label + '[for="' + node.id + '"]').add(input.closest(_label)).off(".i")
        }
    }

    function option(node, state, regular) {
        if ($.data(node, _iCheck)) {
            return $.data(node, _iCheck).o[state + (regular ? "" : "Class")]
        }
    }

    function capitalize(string) {
        return string.charAt(0).toUpperCase() + string.slice(1)
    }

    function callbacks(input, checked, callback, keep) {
        if (!keep) {
            if (checked) {
                input[_callback]("ifToggled")
            }
            input[_callback]("ifChanged")[_callback]("if" + capitalize(callback))
        }
    }
})(jQuery);
(function() {
    var SelectParser;
    SelectParser = function() {
        function SelectParser() {
            this.options_index = 0;
            this.parsed = []
        }
        SelectParser.prototype.add_node = function(child) {
            if (child.nodeName === "OPTGROUP") {
                return this.add_group(child)
            } else {
                return this.add_option(child)
            }
        };
        SelectParser.prototype.add_group = function(group) {
            var group_position, option, _i, _len, _ref, _results;
            group_position = this.parsed.length;
            this.parsed.push({
                array_index: group_position,
                group: true,
                label: group.label,
                children: 0,
                disabled: group.disabled
            });
            _ref = group.childNodes;
            _results = [];
            for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                option = _ref[_i];
                _results.push(this.add_option(option, group_position, group.disabled))
            }
            return _results
        };
        SelectParser.prototype.add_option = function(option, group_position, group_disabled) {
            if (option.nodeName === "OPTION") {
                if (option.text !== "") {
                    if (group_position != null) this.parsed[group_position].children += 1;
                    this.parsed.push({
                        array_index: this.parsed.length,
                        options_index: this.options_index,
                        value: option.value,
                        text: option.text,
                        html: option.innerHTML,
                        selected: option.selected,
                        disabled: group_disabled === true ? group_disabled : option.disabled,
                        group_array_index: group_position,
                        classes: option.className,
                        style: option.style.cssText
                    })
                } else {
                    this.parsed.push({
                        array_index: this.parsed.length,
                        options_index: this.options_index,
                        empty: true
                    })
                }
                return this.options_index += 1
            }
        };
        return SelectParser
    }();
    SelectParser.select_to_array = function(select) {
        var child, parser, _i, _len, _ref;
        parser = new SelectParser;
        _ref = select.childNodes;
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            child = _ref[_i];
            parser.add_node(child)
        }
        return parser.parsed
    };
    this.SelectParser = SelectParser
}).call(this);
(function() {
    var AbstractChosen, root;
    root = this;
    AbstractChosen = function() {
        function AbstractChosen(form_field, options) {
            this.form_field = form_field;
            this.options = options != null ? options : {};
            this.set_default_values();
            this.is_multiple = this.form_field.multiple;
            this.default_text_default = this.is_multiple ? "Select Some Options" : "Select an Option";
            this.setup();
            this.set_up_html();
            this.register_observers();
            this.finish_setup()
        }
        AbstractChosen.prototype.set_default_values = function() {
            var _this = this;
            this.click_test_action = function(evt) {
                return _this.test_active_click(evt)
            };
            this.activate_action = function(evt) {
                return _this.activate_field(evt)
            };
            this.active_field = false;
            this.mouse_on_container = false;
            this.results_showing = false;
            this.result_highlighted = null;
            this.result_single_selected = null;
            this.allow_single_deselect = this.options.allow_single_deselect != null && this.form_field.options[0] != null && this.form_field.options[0].text === "" ? this.options.allow_single_deselect : false;
            this.disable_search_threshold = this.options.disable_search_threshold || 0;
            this.search_contains = this.options.search_contains || false;
            this.choices = 0;
            return this.results_none_found = this.options.no_results_text || "No results match"
        };
        AbstractChosen.prototype.mouse_enter = function() {
            return this.mouse_on_container = true
        };
        AbstractChosen.prototype.mouse_leave = function() {
            return this.mouse_on_container = false
        };
        AbstractChosen.prototype.input_focus = function(evt) {
            var _this = this;
            if (!this.active_field) {
                return setTimeout(function() {
                    return _this.container_mousedown()
                }, 50)
            }
        };
        AbstractChosen.prototype.input_blur = function(evt) {
            var _this = this;
            if (!this.mouse_on_container) {
                this.active_field = false;
                return setTimeout(function() {
                    return _this.blur_test()
                }, 100)
            }
        };
        AbstractChosen.prototype.result_add_option = function(option) {
            var classes, style;
            if (!option.disabled) {
                option.dom_id = this.container_id + "_o_" + option.array_index;
                classes = option.selected && this.is_multiple ? [] : ["active-result"];
                if (option.selected) classes.push("result-selected");
                if (option.group_array_index != null) classes.push("group-option");
                if (option.classes !== "") classes.push(option.classes);
                style = option.style.cssText !== "" ? ' style="' + option.style + '"' : "";
                return '<li id="' + option.dom_id + '" class="' + classes.join(" ") + '"' + style + ">" + option.html + "</li>"
            } else {
                return ""
            }
        };
        AbstractChosen.prototype.results_update_field = function() {
            this.result_clear_highlight();
            this.result_single_selected = null;
            return this.results_build()
        };
        AbstractChosen.prototype.results_toggle = function() {
            if (this.results_showing) {
                return this.results_hide()
            } else {
                return this.results_show()
            }
        };
        AbstractChosen.prototype.results_search = function(evt) {
            if (this.results_showing) {
                return this.winnow_results()
            } else {
                return this.results_show()
            }
        };
        AbstractChosen.prototype.keyup_checker = function(evt) {
            var stroke, _ref;
            stroke = (_ref = evt.which) != null ? _ref : evt.keyCode;
            this.search_field_scale();
            switch (stroke) {
                case 8:
                    if (this.is_multiple && this.backstroke_length < 1 && this.choices > 0) {
                        return this.keydown_backstroke()
                    } else if (!this.pending_backstroke) {
                        this.result_clear_highlight();
                        return this.results_search()
                    }
                    break;
                case 13:
                    evt.preventDefault();
                    if (this.results_showing) return this.result_select(evt);
                    break;
                case 27:
                    if (this.results_showing) this.results_hide();
                    return true;
                case 9:
                case 38:
                case 40:
                case 16:
                case 91:
                case 17:
                    break;
                default:
                    return this.results_search()
            }
        };
        AbstractChosen.prototype.generate_field_id = function() {
            var new_id;
            new_id = this.generate_random_id();
            this.form_field.id = new_id;
            return new_id
        };
        AbstractChosen.prototype.generate_random_char = function() {
            var chars, newchar, rand;
            chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZ";
            rand = Math.floor(Math.random() * chars.length);
            return newchar = chars.substring(rand, rand + 1)
        };
        return AbstractChosen
    }();
    root.AbstractChosen = AbstractChosen
}).call(this);
(function() {
    var $, Chosen, get_side_border_padding, root, __hasProp = Object.prototype.hasOwnProperty,
        __extends = function(child, parent) {
            for (var key in parent) {
                if (__hasProp.call(parent, key)) child[key] = parent[key]
            }

            function ctor() {
                this.constructor = child
            }
            ctor.prototype = parent.prototype;
            child.prototype = new ctor;
            child.__super__ = parent.prototype;
            return child
        };
    root = this;
    $ = jQuery;
    $.fn.extend({
        chosen: function(options) {
            if ($.browser.msie && ($.browser.version === "6.0" || $.browser.version === "7.0")) {
                return this
            }
            return $(this).each(function(input_field) {
                if (!$(this).hasClass("chzn-done")) return new Chosen(this, options)
            })
        }
    });
    Chosen = function(_super) {
        __extends(Chosen, _super);

        function Chosen() {
            Chosen.__super__.constructor.apply(this, arguments)
        }
        Chosen.prototype.setup = function() {
            this.form_field_jq = $(this.form_field);
            return this.is_rtl = this.form_field_jq.hasClass("chzn-rtl")
        };
        Chosen.prototype.finish_setup = function() {
            return this.form_field_jq.addClass("chzn-done")
        };
        Chosen.prototype.set_up_html = function() {
            var container_div, dd_top, dd_width, sf_width;
            this.container_id = this.form_field.id.length ? this.form_field.id.replace(/(:|\.)/g, "_") : this.generate_field_id();
            this.container_id += "_chzn";
            this.f_width = this.form_field_jq.outerWidth();
            this.default_text = this.form_field_jq.data("placeholder") ? this.form_field_jq.data("placeholder") : this.default_text_default;
            container_div = $("<div />", {
                id: this.container_id,
                class: "chzn-container" + (this.is_rtl ? " chzn-rtl" : ""),
                style: "width: " + this.f_width + "px;"
            });
            if (this.is_multiple) {
                container_div.html('<ul class="chzn-choices"><li class="search-field"><input type="text" value="' + this.default_text + '" class="default" autocomplete="off" style="width:25px;" /></li></ul><div class="chzn-drop" style="left:-9000px;"><ul class="chzn-results"></ul></div>')
            } else {
                container_div.html('<a href="javascript:void(0)" class="chzn-single chzn-default"><span>' + this.default_text + '</span><div><b></b></div></a><div class="chzn-drop" style="left:-9000px;"><div class="chzn-search"><input type="text" autocomplete="off" /></div><ul class="chzn-results"></ul></div>')
            }
            this.form_field_jq.hide().after(container_div);
            this.container = $("#" + this.container_id);
            this.container.addClass("chzn-container-" + (this.is_multiple ? "multi" : "single"));
            this.dropdown = this.container.find("div.chzn-drop").first();
            dd_top = this.container.height();
            dd_width = this.f_width - get_side_border_padding(this.dropdown);
            this.dropdown.css({
                width: dd_width + "px",
                top: dd_top + "px"
            });
            this.search_field = this.container.find("input").first();
            this.search_results = this.container.find("ul.chzn-results").first();
            this.search_field_scale();
            this.search_no_results = this.container.find("li.no-results").first();
            if (this.is_multiple) {
                this.search_choices = this.container.find("ul.chzn-choices").first();
                this.search_container = this.container.find("li.search-field").first()
            } else {
                this.search_container = this.container.find("div.chzn-search").first();
                this.selected_item = this.container.find(".chzn-single").first();
                sf_width = dd_width - get_side_border_padding(this.search_container) - get_side_border_padding(this.search_field);
                this.search_field.css({
                    width: sf_width + "px"
                })
            }
            this.results_build();
            this.set_tab_index();
            return this.form_field_jq.trigger("liszt:ready", {
                chosen: this
            })
        };
        Chosen.prototype.register_observers = function() {
            var _this = this;
            this.container.mousedown(function(evt) {
                return _this.container_mousedown(evt)
            });
            this.container.mouseup(function(evt) {
                return _this.container_mouseup(evt)
            });
            this.container.mouseenter(function(evt) {
                return _this.mouse_enter(evt)
            });
            this.container.mouseleave(function(evt) {
                return _this.mouse_leave(evt)
            });
            this.search_results.mouseup(function(evt) {
                return _this.search_results_mouseup(evt)
            });
            this.search_results.mouseover(function(evt) {
                return _this.search_results_mouseover(evt)
            });
            this.search_results.mouseout(function(evt) {
                return _this.search_results_mouseout(evt)
            });
            this.form_field_jq.bind("liszt:updated", function(evt) {
                return _this.results_update_field(evt)
            });
            this.search_field.blur(function(evt) {
                return _this.input_blur(evt)
            });
            this.search_field.keyup(function(evt) {
                return _this.keyup_checker(evt)
            });
            this.search_field.keydown(function(evt) {
                return _this.keydown_checker(evt)
            });
            if (this.is_multiple) {
                this.search_choices.click(function(evt) {
                    return _this.choices_click(evt)
                });
                return this.search_field.focus(function(evt) {
                    return _this.input_focus(evt)
                })
            } else {
                return this.container.click(function(evt) {
                    return evt.preventDefault()
                })
            }
        };
        Chosen.prototype.search_field_disabled = function() {
            this.is_disabled = this.form_field_jq[0].disabled;
            if (this.is_disabled) {
                this.container.addClass("chzn-disabled");
                this.search_field[0].disabled = true;
                if (!this.is_multiple) {
                    this.selected_item.unbind("focus", this.activate_action)
                }
                return this.close_field()
            } else {
                this.container.removeClass("chzn-disabled");
                this.search_field[0].disabled = false;
                if (!this.is_multiple) {
                    return this.selected_item.bind("focus", this.activate_action)
                }
            }
        };
        Chosen.prototype.container_mousedown = function(evt) {
            var target_closelink;
            if (!this.is_disabled) {
                target_closelink = evt != null ? $(evt.target).hasClass("search-choice-close") : false;
                if (evt && evt.type === "mousedown" && !this.results_showing) {
                    evt.stopPropagation()
                }
                if (!this.pending_destroy_click && !target_closelink) {
                    if (!this.active_field) {
                        if (this.is_multiple) this.search_field.val("");
                        $(document).click(this.click_test_action);
                        this.results_show()
                    } else if (!this.is_multiple && evt && ($(evt.target)[0] === this.selected_item[0] || $(evt.target).parents("a.chzn-single").length)) {
                        evt.preventDefault();
                        this.results_toggle()
                    }
                    return this.activate_field()
                } else {
                    return this.pending_destroy_click = false
                }
            }
        };
        Chosen.prototype.container_mouseup = function(evt) {
            if (evt.target.nodeName === "ABBR") return this.results_reset(evt)
        };
        Chosen.prototype.blur_test = function(evt) {
            if (!this.active_field && this.container.hasClass("chzn-container-active")) {
                return this.close_field()
            }
        };
        Chosen.prototype.close_field = function() {
            $(document).unbind("click", this.click_test_action);
            if (!this.is_multiple) {
                this.selected_item.attr("tabindex", this.search_field.attr("tabindex"));
                this.search_field.attr("tabindex", -1)
            }
            this.active_field = false;
            this.results_hide();
            this.container.removeClass("chzn-container-active");
            this.winnow_results_clear();
            this.clear_backstroke();
            this.show_search_field_default();
            return this.search_field_scale()
        };
        Chosen.prototype.activate_field = function() {
            if (!this.is_multiple && !this.active_field) {
                this.search_field.attr("tabindex", this.selected_item.attr("tabindex"));
                this.selected_item.attr("tabindex", -1)
            }
            this.container.addClass("chzn-container-active");
            this.active_field = true;
            this.search_field.val(this.search_field.val());
            return this.search_field.focus()
        };
        Chosen.prototype.test_active_click = function(evt) {
            if ($(evt.target).parents("#" + this.container_id).length) {
                return this.active_field = true
            } else {
                return this.close_field()
            }
        };
        Chosen.prototype.results_build = function() {
            var content, data, _i, _len, _ref;
            this.parsing = true;
            this.results_data = root.SelectParser.select_to_array(this.form_field);
            if (this.is_multiple && this.choices > 0) {
                this.search_choices.find("li.search-choice").remove();
                this.choices = 0
            } else if (!this.is_multiple) {
                this.selected_item.find("span").text(this.default_text);
                if (this.form_field.options.length <= this.disable_search_threshold) {
                    this.container.addClass("chzn-container-single-nosearch")
                } else {
                    this.container.removeClass("chzn-container-single-nosearch")
                }
            }
            content = "";
            _ref = this.results_data;
            for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                data = _ref[_i];
                if (data.group) {
                    content += this.result_add_group(data)
                } else if (!data.empty) {
                    content += this.result_add_option(data);
                    if (data.selected && this.is_multiple) {
                        this.choice_build(data)
                    } else if (data.selected && !this.is_multiple) {
                        this.selected_item.removeClass("chzn-default").find("span").text(data.text);
                        if (this.allow_single_deselect) this.single_deselect_control_build()
                    }
                }
            }
            this.search_field_disabled();
            this.show_search_field_default();
            this.search_field_scale();
            this.search_results.html(content);
            return this.parsing = false
        };
        Chosen.prototype.result_add_group = function(group) {
            if (!group.disabled) {
                group.dom_id = this.container_id + "_g_" + group.array_index;
                return '<li id="' + group.dom_id + '" class="group-result">' + $("<div />").text(group.label).html() + "</li>"
            } else {
                return ""
            }
        };
        Chosen.prototype.result_do_highlight = function(el) {
            var high_bottom, high_top, maxHeight, visible_bottom, visible_top;
            if (el.length) {
                this.result_clear_highlight();
                this.result_highlight = el;
                this.result_highlight.addClass("highlighted");
                maxHeight = parseInt(this.search_results.css("maxHeight"), 10);
                visible_top = this.search_results.scrollTop();
                visible_bottom = maxHeight + visible_top;
                high_top = this.result_highlight.position().top + this.search_results.scrollTop();
                high_bottom = high_top + this.result_highlight.outerHeight();
                if (high_bottom >= visible_bottom) {
                    return this.search_results.scrollTop(high_bottom - maxHeight > 0 ? high_bottom - maxHeight : 0)
                } else if (high_top < visible_top) {
                    return this.search_results.scrollTop(high_top)
                }
            }
        };
        Chosen.prototype.result_clear_highlight = function() {
            if (this.result_highlight) this.result_highlight.removeClass("highlighted");
            return this.result_highlight = null
        };
        Chosen.prototype.results_show = function() {
            var dd_top;
            if (!this.is_multiple) {
                this.selected_item.addClass("chzn-single-with-drop");
                if (this.result_single_selected) {
                    this.result_do_highlight(this.result_single_selected)
                }
            }
            dd_top = this.is_multiple ? this.container.height() : this.container.height() - 1;
            this.dropdown.css({
                top: dd_top + "px",
                left: 0
            });
            this.results_showing = true;
            this.search_field.focus();
            this.search_field.val(this.search_field.val());
            return this.winnow_results()
        };
        Chosen.prototype.results_hide = function() {
            if (!this.is_multiple) {
                this.selected_item.removeClass("chzn-single-with-drop")
            }
            this.result_clear_highlight();
            this.dropdown.css({
                left: "-9000px"
            });
            return this.results_showing = false
        };
        Chosen.prototype.set_tab_index = function(el) {
            var ti;
            if (this.form_field_jq.attr("tabindex")) {
                ti = this.form_field_jq.attr("tabindex");
                this.form_field_jq.attr("tabindex", -1);
                if (this.is_multiple) {
                    return this.search_field.attr("tabindex", ti)
                } else {
                    this.selected_item.attr("tabindex", ti);
                    return this.search_field.attr("tabindex", -1)
                }
            }
        };
        Chosen.prototype.show_search_field_default = function() {
            if (this.is_multiple && this.choices < 1 && !this.active_field) {
                this.search_field.val(this.default_text);
                return this.search_field.addClass("default")
            } else {
                this.search_field.val("");
                return this.search_field.removeClass("default")
            }
        };
        Chosen.prototype.search_results_mouseup = function(evt) {
            var target;
            target = $(evt.target).hasClass("active-result") ? $(evt.target) : $(evt.target).parents(".active-result").first();
            if (target.length) {
                this.result_highlight = target;
                return this.result_select(evt)
            }
        };
        Chosen.prototype.search_results_mouseover = function(evt) {
            var target;
            target = $(evt.target).hasClass("active-result") ? $(evt.target) : $(evt.target).parents(".active-result").first();
            if (target) return this.result_do_highlight(target)
        };
        Chosen.prototype.search_results_mouseout = function(evt) {
            if ($(evt.target).hasClass("active-result" || $(evt.target).parents(".active-result").first())) {
                return this.result_clear_highlight()
            }
        };
        Chosen.prototype.choices_click = function(evt) {
            evt.preventDefault();
            if (this.active_field && !$(evt.target).hasClass("search-choice" || $(evt.target).parents(".search-choice").first) && !this.results_showing) {
                return this.results_show()
            }
        };
        Chosen.prototype.choice_build = function(item) {
            var choice_id, link, _this = this;
            choice_id = this.container_id + "_c_" + item.array_index;
            this.choices += 1;
            this.search_container.before('<li class="search-choice" id="' + choice_id + '"><span>' + item.html + '</span><a href="javascript:void(0)" class="search-choice-close" rel="' + item.array_index + '"></a></li>');
            link = $("#" + choice_id).find("a").first();
            return link.click(function(evt) {
                return _this.choice_destroy_link_click(evt)
            })
        };
        Chosen.prototype.choice_destroy_link_click = function(evt) {
            evt.preventDefault();
            if (!this.is_disabled) {
                this.pending_destroy_click = true;
                return this.choice_destroy($(evt.target))
            } else {
                return evt.stopPropagation
            }
        };
        Chosen.prototype.choice_destroy = function(link) {
            this.choices -= 1;
            this.show_search_field_default();
            if (this.is_multiple && this.choices > 0 && this.search_field.val().length < 1) {
                this.results_hide()
            }
            this.result_deselect(link.attr("rel"));
            return link.parents("li").first().remove()
        };
        Chosen.prototype.results_reset = function(evt) {
            this.form_field.options[0].selected = true;
            this.selected_item.find("span").text(this.default_text);
            if (!this.is_multiple) this.selected_item.addClass("chzn-default");
            this.show_search_field_default();
            $(evt.target).remove();
            this.form_field_jq.trigger("change");
            if (this.active_field) return this.results_hide()
        };
        Chosen.prototype.result_select = function(evt) {
            var high, high_id, item, position;
            if (this.result_highlight) {
                high = this.result_highlight;
                high_id = high.attr("id");
                this.result_clear_highlight();
                if (this.is_multiple) {
                    this.result_deactivate(high)
                } else {
                    this.search_results.find(".result-selected").removeClass("result-selected");
                    this.result_single_selected = high;
                    this.selected_item.removeClass("chzn-default")
                }
                high.addClass("result-selected");
                position = high_id.substr(high_id.lastIndexOf("_") + 1);
                item = this.results_data[position];
                item.selected = true;
                this.form_field.options[item.options_index].selected = true;
                if (this.is_multiple) {
                    this.choice_build(item)
                } else {
                    this.selected_item.find("span").first().text(item.text);
                    if (this.allow_single_deselect) this.single_deselect_control_build()
                }
                if (!(evt.metaKey && this.is_multiple)) this.results_hide();
                this.search_field.val("");
                this.form_field_jq.trigger("change");
                return this.search_field_scale()
            }
        };
        Chosen.prototype.result_activate = function(el) {
            return el.addClass("active-result")
        };
        Chosen.prototype.result_deactivate = function(el) {
            return el.removeClass("active-result")
        };
        Chosen.prototype.result_deselect = function(pos) {
            var result, result_data;
            result_data = this.results_data[pos];
            result_data.selected = false;
            this.form_field.options[result_data.options_index].selected = false;
            result = $("#" + this.container_id + "_o_" + pos);
            result.removeClass("result-selected").addClass("active-result").show();
            this.result_clear_highlight();
            this.winnow_results();
            this.form_field_jq.trigger("change");
            return this.search_field_scale()
        };
        Chosen.prototype.single_deselect_control_build = function() {
            if (this.allow_single_deselect && this.selected_item.find("abbr").length < 1) {
                return this.selected_item.find("span").first().after('<abbr class="search-choice-close"></abbr>')
            }
        };
        Chosen.prototype.winnow_results = function() {
            var found, option, part, parts, regex, regexAnchor, result, result_id, results, searchText, startpos, text, zregex, _i, _j, _len, _len2, _ref;
            this.no_results_clear();
            results = 0;
            searchText = this.search_field.val() === this.default_text ? "" : $("<div/>").text($.trim(this.search_field.val())).html();
            regexAnchor = this.search_contains ? "" : "^";
            regex = new RegExp(regexAnchor + searchText.replace(/[-[\]{}()*+?.,\\^$|#\s]/g, "\\$&"), "i");
            zregex = new RegExp(searchText.replace(/[-[\]{}()*+?.,\\^$|#\s]/g, "\\$&"), "i");
            _ref = this.results_data;
            for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                option = _ref[_i];
                if (!option.disabled && !option.empty) {
                    if (option.group) {
                        $("#" + option.dom_id).css("display", "none")
                    } else if (!(this.is_multiple && option.selected)) {
                        found = false;
                        result_id = option.dom_id;
                        result = $("#" + result_id);
                        if (regex.test(option.html)) {
                            found = true;
                            results += 1
                        } else if (option.html.indexOf(" ") >= 0 || option.html.indexOf("[") === 0) {
                            parts = option.html.replace(/\[|\]/g, "").split(" ");
                            if (parts.length) {
                                for (_j = 0, _len2 = parts.length; _j < _len2; _j++) {
                                    part = parts[_j];
                                    if (regex.test(part)) {
                                        found = true;
                                        results += 1
                                    }
                                }
                            }
                        }
                        if (found) {
                            if (searchText.length) {
                                startpos = option.html.search(zregex);
                                text = option.html.substr(0, startpos + searchText.length) + "</em>" + option.html.substr(startpos + searchText.length);
                                text = text.substr(0, startpos) + "<em>" + text.substr(startpos)
                            } else {
                                text = option.html
                            }
                            result.html(text);
                            this.result_activate(result);
                            if (option.group_array_index != null) {
                                $("#" + this.results_data[option.group_array_index].dom_id).css("display", "list-item")
                            }
                        } else {
                            if (this.result_highlight && result_id === this.result_highlight.attr("id")) {
                                this.result_clear_highlight()
                            }
                            this.result_deactivate(result)
                        }
                    }
                }
            }
            if (results < 1 && searchText.length) {
                return this.no_results(searchText)
            } else {
                return this.winnow_results_set_highlight()
            }
        };
        Chosen.prototype.winnow_results_clear = function() {
            var li, lis, _i, _len, _results;
            this.search_field.val("");
            lis = this.search_results.find("li");
            _results = [];
            for (_i = 0, _len = lis.length; _i < _len; _i++) {
                li = lis[_i];
                li = $(li);
                if (li.hasClass("group-result")) {
                    _results.push(li.css("display", "auto"))
                } else if (!this.is_multiple || !li.hasClass("result-selected")) {
                    _results.push(this.result_activate(li))
                } else {
                    _results.push(void 0)
                }
            }
            return _results
        };
        Chosen.prototype.winnow_results_set_highlight = function() {
            var do_high, selected_results;
            if (!this.result_highlight) {
                selected_results = !this.is_multiple ? this.search_results.find(".result-selected.active-result") : [];
                do_high = selected_results.length ? selected_results.first() : this.search_results.find(".active-result").first();
                if (do_high != null) return this.result_do_highlight(do_high)
            }
        };
        Chosen.prototype.no_results = function(terms) {
            var no_results_html;
            no_results_html = $('<li class="no-results">' + this.results_none_found + ' "<span></span>"</li>');
            no_results_html.find("span").first().html(terms);
            return this.search_results.append(no_results_html)
        };
        Chosen.prototype.no_results_clear = function() {
            return this.search_results.find(".no-results").remove()
        };
        Chosen.prototype.keydown_arrow = function() {
            var first_active, next_sib;
            if (!this.result_highlight) {
                first_active = this.search_results.find("li.active-result").first();
                if (first_active) this.result_do_highlight($(first_active))
            } else if (this.results_showing) {
                next_sib = this.result_highlight.nextAll("li.active-result").first();
                if (next_sib) this.result_do_highlight(next_sib)
            }
            if (!this.results_showing) return this.results_show()
        };
        Chosen.prototype.keyup_arrow = function() {
            var prev_sibs;
            if (!this.results_showing && !this.is_multiple) {
                return this.results_show()
            } else if (this.result_highlight) {
                prev_sibs = this.result_highlight.prevAll("li.active-result");
                if (prev_sibs.length) {
                    return this.result_do_highlight(prev_sibs.first())
                } else {
                    if (this.choices > 0) this.results_hide();
                    return this.result_clear_highlight()
                }
            }
        };
        Chosen.prototype.keydown_backstroke = function() {
            if (this.pending_backstroke) {
                this.choice_destroy(this.pending_backstroke.find("a").first());
                return this.clear_backstroke()
            } else {
                this.pending_backstroke = this.search_container.siblings("li.search-choice").last();
                return this.pending_backstroke.addClass("search-choice-focus")
            }
        };
        Chosen.prototype.clear_backstroke = function() {
            if (this.pending_backstroke) {
                this.pending_backstroke.removeClass("search-choice-focus")
            }
            return this.pending_backstroke = null
        };
        Chosen.prototype.keydown_checker = function(evt) {
            var stroke, _ref;
            stroke = (_ref = evt.which) != null ? _ref : evt.keyCode;
            this.search_field_scale();
            if (stroke !== 8 && this.pending_backstroke) this.clear_backstroke();
            switch (stroke) {
                case 8:
                    this.backstroke_length = this.search_field.val().length;
                    break;
                case 9:
                    if (this.results_showing && !this.is_multiple) this.result_select(evt);
                    this.mouse_on_container = false;
                    break;
                case 13:
                    evt.preventDefault();
                    break;
                case 38:
                    evt.preventDefault();
                    this.keyup_arrow();
                    break;
                case 40:
                    this.keydown_arrow();
                    break
            }
        };
        Chosen.prototype.search_field_scale = function() {
            var dd_top, div, h, style, style_block, styles, w, _i, _len;
            if (this.is_multiple) {
                h = 0;
                w = 0;
                style_block = "position:absolute; left: -1000px; top: -1000px; display:none;";
                styles = ["font-size", "font-style", "font-weight", "font-family", "line-height", "text-transform", "letter-spacing"];
                for (_i = 0, _len = styles.length; _i < _len; _i++) {
                    style = styles[_i];
                    style_block += style + ":" + this.search_field.css(style) + ";"
                }
                div = $("<div />", {
                    style: style_block
                });
                div.text(this.search_field.val());
                $("body").append(div);
                w = div.width() + 25;
                div.remove();
                if (w > this.f_width - 10) w = this.f_width - 10;
                this.search_field.css({
                    width: w + "px"
                });
                dd_top = this.container.height();
                return this.dropdown.css({
                    top: dd_top + "px"
                })
            }
        };
        Chosen.prototype.generate_random_id = function() {
            var string;
            string = "sel" + this.generate_random_char() + this.generate_random_char() + this.generate_random_char();
            while ($("#" + string).length > 0) {
                string += this.generate_random_char()
            }
            return string
        };
        return Chosen
    }(AbstractChosen);
    get_side_border_padding = function(elmt) {
        var side_border_padding;
        return side_border_padding = elmt.outerWidth() - elmt.width()
    };
    root.get_side_border_padding = get_side_border_padding
}).call(this);

(function(a) {
    function i(f) {
        if (f.attr("title") || typeof f.attr("original-title") != "string") f.attr("original-title", f.attr("title") || "").removeAttr("title")
    }
    a.fn.tipsy = function(f) {
        f = a.extend({}, a.fn.tipsy.defaults, f);
        return this.each(function() {
            i(a(this));
            var b = a.fn.tipsy.elementOptions(this, f),
                j = null;
            a(this).hover(function() {
                var e = this;
                j = setTimeout(function() {
                    a.data(e, "cancel.tipsy", true);
                    var c = a.data(e, "active.tipsy");
                    if (!c) {
                        c = a('<div class="tipsy"><div class="tipsy-inner"/></div>');
                        c.css({
                            position: "absolute",
                            zIndex: 1e5
                        });
                        a.data(e, "active.tipsy", c)
                    }
                    i(a(e));
                    var d;
                    if (typeof b.title == "string") d = a(e).attr(b.title == "title" ? "original-title" : b.title);
                    else if (typeof b.title == "function") d = b.title.call(e);
                    c.find(".tipsy-inner")[b.html ? "html" : "text"](d || b.fallback);
                    d = a.extend({}, a(e).offset(), {
                        width: e.offsetWidth,
                        height: e.offsetHeight
                    });
                    c.get(0).className = "tipsy";
                    c.remove().css({
                        top: 0,
                        left: 0,
                        visibility: "hidden",
                        display: "block"
                    }).appendTo(document.body);
                    var g = c[0].offsetWidth,
                        h = c[0].offsetHeight;
                    switch ((typeof b.gravity == "function" ? b.gravity.call(e) : b.gravity).charAt(0)) {
                        case "n":
                            c.css({
                                top: d.top + d.height,
                                left: d.left + d.width / 2 - g / 2
                            }).addClass("tipsy-north");
                            break;
                        case "s":
                            c.css({
                                top: d.top - h,
                                left: d.left + d.width / 2 - g / 2
                            }).addClass("tipsy-south");
                            break;
                        case "e":
                            c.css({
                                top: d.top + d.height / 2 - h / 2,
                                left: d.left - g
                            }).addClass("tipsy-east");
                            break;
                        case "w":
                            c.css({
                                top: d.top + d.height / 2 - h / 2,
                                left: d.left + d.width
                            }).addClass("tipsy-west");
                            break
                    }
                    b.fade ? c.stop().css({
                        opacity: 0,
                        display: "block",
                        visibility: "visible"
                    }).animate({
                        opacity: b.opacity
                    }) : c.css({
                        visibility: "visible",
                        opacity: b.opacity
                    })
                }, b.delayIn)
            }, function() {
                a.data(this, "cancel.tipsy", false);
                var e = this;
                clearTimeout(j);
                setTimeout(function() {
                    if (!a.data(this, "cancel.tipsy")) {
                        var c = a.data(e, "active.tipsy");
                        if (b.fade) c.stop().fadeOut(function() {
                            a(this).remove()
                        });
                        else c && c.remove()
                    }
                }, b.delayOut)
            })
        })
    };
    a.fn.tipsy.elementOptions = function(f, b) {
        return a.metadata ? a.extend({}, b, a(f).metadata()) : b
    };
    a.fn.tipsy.defaults = {
        delayIn: 0,
        delayOut: 100,
        fade: false,
        fallback: "",
        gravity: "n",
        html: false,
        opacity: .8,
        title: "title"
    };
    a.fn.tipsy.autoNS = function() {
        return a(this).offset().top > a(document).scrollTop() + a(window).height() / 2 ? "s" : "n"
    };
    a.fn.tipsy.autoWE = function() {
        return a(this).offset().left > a(document).scrollLeft() + a(window).width() / 2 ? "e" : "w"
    }
})(jQuery);





function loadCss(url) {
    var $ = document;
    var head = $.getElementsByTagName("head")[0];
    var link = $.createElement("link");
    link.rel = "stylesheet";
    link.type = "text/css";
    link.href = url;
    link.media = "all";
    head.appendChild(link)
}

function strip_tags(str) {
    return str.replace(/<\/?[^>]+>/gi, "")
}

function lat_str_clear(str) {
    return str.replace(/[^a-zA-Z0-9 ]/gi, "")
}

function get_noun(number, one, two, five) {
    number = Math.abs(number);
    number %= 100;
    if (number >= 5 && number <= 20) {
        return five
    }
    number %= 10;
    if (number == 1) {
        return one
    }
    if (number >= 2 && number <= 4) {
        return two
    }
    return five
}

function renderGagarinFlashMessage(selector, type, text, closeable) {
    var closeable = closeable ? true : false;
    switch (type) {
        case "error":
            type = "red";
            break;
        case "warning":
            type = "yellow";
            break;
        case "success":
            type = "green";
            break;
        default:
            type = "green"
    }
    var closeBlock = closeable ? $("<div/>").addClass("close") : "";
    var textBlock = $("<div/>").addClass("text").text(text).append(closeBlock);
    var flashBlock = $("<div/>").addClass("b-flash " + type).append(textBlock);
    $(selector).after(flashBlock);
    if (closeable) {
        $(".b-flash .close").click(function() {
            $(this).parents(".b-flash").remove()
        })
    }
}

function emailDecode(email) {
    var array = email.toString().split(",");
    var length = array.length;
    var string = "";
    for (var i = 0; i < length; i++) {
        string += String.fromCharCode(array[i])
    }
    return string
}
var GagarinButtonHack = function() {
    return {
        init: function() {
            $(".b-button").hover(function() {
                $(this).addClass("hover")
            }, function() {
                $(this).removeClass("hover")
            }).mousedown(function() {
                $(this).addClass("active").removeClass("hover")
            }).mouseup(function() {
                $(this).addClass("hover").removeClass("active")
            }).mouseleave(function() {
                $(this).removeClass("hover active")
            });
            if ($.browser.msie) {
                $(".b-button").click(function() {
                    $(this).find("a")[0].click()
                })
            }
        }
    }
}();
 


(function($) {
    $(function() {
        $(".b-flash .close").click(function() {
            $(this).parents(".b-flash").remove()
        });
        $("select.bgt, select.b-select, form.bgt.auto select").chosen({
            disable_search_threshold: 8,
            no_results_text: "Не найдено результатов"
        });
        $(".b-checkbox.gagarin").iCheck({
            checkboxClass: "b-checkbox",
            radioClass: "b-radio",
            increaseArea: "20%",
            labelHover: true
        });
        if ($.browser.mobile) {
            $(".chzn-search").remove();
            $("html").add("body").addClass("mobile")
        }
        $("select.b-select").each(function() {
            var id, $chozen;
            id = $(this).attr("id");
            $chozen = $("#" + id + "_chzn");
            $chozen.attr("class", $chozen.attr("class") + " " + $(this).attr("class"))
        });
        var $ph = $("input[placeholder], textarea[placeholder]");
        $ph.each(function() {
            $(this).attr("data-placeholder", $(this).attr("placeholder"));
            $(this).attr("placeholder", "");
            if ($(this).val() == "") {
                $(this).val($(this).attr("data-placeholder")).addClass("placeholder")
            }
            $(this).focusin(function() {
                if ($(this).val() == $(this).attr("data-placeholder")) {
                    $(this).val("").removeClass("placeholder")
                }
            });
            $(this).focusout(function() {
                if ($(this).val() == "") {
                    $(this).val($(this).attr("data-placeholder")).addClass("placeholder")
                }
            })
        });
        $("form").submit(function(e) {
            var $form = $(this);
            $(".placeholder", $form).each(function() {
                if ($(this).val() == $(this).attr("data-placeholder")) {
                    $(this).val("")
                }
            })
        });
        $("ul.bgt li").each(function() {
            var a = $(".name a", $(this));
            var href = a.attr("href");
            if (href) {
                $(this).addClass("bgt_clickable").click(function() {
                    window.location.href = href
                })
            }
        });
        $(".dm_widget.promoblock_show img").addClass("shady round");
        if ($.browser.msie) {
            var $markdown = $(".b-markdown.gagarin, .content_ck_editor .dm_widget_inner");
            $("table tr:nth-child(even)", $markdown).addClass("even");
            $("table tr:nth-child(odd)", $markdown).addClass("odd");
            $("table tr:first-child", $markdown).addClass("first-child");
            $("table tr:last-child", $markdown).addClass("last-child");
            $("table tr:first-child > :first-child", $markdown).addClass("first-child");
            $("table tr:first-child > :last-child", $markdown).addClass("last-child");
            $("table tr:last-child > :first-child", $markdown).addClass("last-child");
            $("table tr:last-child > :last-child", $markdown).addClass("last-child")
        }
        GagarinButtonHack.init();
        $("a[href*=\\#]").not("[class*=fancybox]").click(function(e) {
            var anchorLink = $(this);
            var name = anchorLink.attr("href").replace(new RegExp("#", "gi"), "");
            if (!name) {
                return
            }
            var anchor = $("a[name=" + name + "], #" + name);
            if (anchor.length) {
                e.preventDefault()
            } else {
                return false
            }
            $("html, body").stop().animate({
                scrollTop: anchor.offset().top
            }, 750);
            return false
        })
    });
    $(".b-pager").find(".first,.prev,.next,.last").tipsy({
        delayIn: 80
    })
})(jQuery);
(function() {
    var f, l = this;

    function m(a, c) {
        var b = a.split("."),
            d = l;
        b[0] in d || !d.execScript || d.execScript("var " + b[0]);
        for (var e; b.length && (e = b.shift());) b.length || void 0 === c ? d = d[e] ? d[e] : d[e] = {} : d[e] = c
    }
    var n = Array.prototype,
        p = n.forEach ? function(a, c, b) {
            n.forEach.call(a, c, b)
        } : function(a, c, b) {
            for (var d = a.length, e = "string" == typeof a ? a.split("") : a, g = 0; g < d; g++) g in e && c.call(b, e[g], g, a)
        };

    function q(a) {
        var c = 0,
            b;
        for (b in a) c++;
        return c
    }

    function r(a) {
        var c = {},
            b;
        for (b in a) c[b] = a[b];
        return c
    }

    function s(a, c) {
        this.c = {};
        this.b = [];
        var b = arguments.length;
        if (1 < b) {
            if (b % 2) throw Error("Uneven number of arguments");
            for (var d = 0; d < b; d += 2) this.set(arguments[d], arguments[d + 1])
        } else if (a) {
            var e;
            if (a instanceof s)
                for (u(a), d = a.b.concat(), u(a), e = [], b = 0; b < a.b.length; b++) e.push(a.c[a.b[b]]);
            else {
                var b = [],
                    g = 0;
                for (d in a) b[g++] = d;
                d = b;
                b = [];
                g = 0;
                for (e in a) b[g++] = a[e];
                e = b
            }
            for (b = 0; b < d.length; b++) this.set(d[b], e[b])
        }
    }
    s.prototype.f = 0;
    s.prototype.p = 0;

    function u(a) {
        if (a.f != a.b.length) {
            for (var c = 0, b = 0; c < a.b.length;) {
                var d = a.b[c];
                v(a.c, d) && (a.b[b++] = d);
                c++
            }
            a.b.length = b
        }
        if (a.f != a.b.length) {
            for (var e = {}, b = c = 0; c < a.b.length;) d = a.b[c], v(e, d) || (a.b[b++] = d, e[d] = 1), c++;
            a.b.length = b
        }
    }
    s.prototype.get = function(a, c) {
        return v(this.c, a) ? this.c[a] : c
    };
    s.prototype.set = function(a, c) {
        v(this.c, a) || (this.f++, this.b.push(a), this.p++);
        this.c[a] = c
    };

    function v(a, c) {
        return Object.prototype.hasOwnProperty.call(a, c)
    }
    var w, x, y, A;

    function B() {
        return l.navigator ? l.navigator.userAgent : null
    }
    A = y = x = w = !1;
    var C;
    if (C = B()) {
        var D = l.navigator;
        w = 0 == C.lastIndexOf("Opera", 0);
        x = !w && (-1 != C.indexOf("MSIE") || -1 != C.indexOf("Trident"));
        y = !w && -1 != C.indexOf("WebKit");
        A = !w && !y && !x && "Gecko" == D.product
    }
    var E = x,
        G = A,
        H = y;
    var I;
    if (w && l.opera) {
        var J = l.opera.version;
        "function" == typeof J && J()
    } else G ? I = /rv\:([^\);]+)(\)|;)/ : E ? I = /\b(?:MSIE|rv)\s+([^\);]+)(\)|;)/ : H && (I = /WebKit\/(\S+)/), I && I.exec(B());

    function K(a, c) {
        this.a = a || {
            e: "",
            prefix: "",
            host: "",
            scheme: ""
        };
        this.h(c || {})
    }
    K.g = function() {
        return K.j ? K.j : K.j = new K
    };
    f = K.prototype;
    f.h = function(a) {
        this.d = new s(a)
    };
    f.o = function() {
        return this.d
    };
    f.k = function(a) {
        this.a.e = a
    };
    f.n = function() {
        return this.a.e
    };
    f.l = function(a) {
        this.a.prefix = a
    };

    function L(a, c, b, d) {
        var e, g = RegExp(/\[\]$/);
        if (b instanceof Array) p(b, function(b, e) {
            g.test(c) ? d(c, b) : L(a, c + "[" + ("object" === typeof b ? e : "") + "]", b, d)
        });
        else if ("object" === typeof b)
            for (e in b) L(a, c + "[" + e + "]", b[e], d);
        else d(c, b)
    }
    f.i = function(a) {
        var c = this.a.prefix + a;
        if (v(this.d.c, c)) a = c;
        else if (!v(this.d.c, a)) throw Error('The route "' + a + '" does not exist.');
        return this.d.get(a)
    };
    f.m = function(a, c, b) {
        var d = this.i(a),
            e = c || {},
            g = r(e),
            h = "",
            t = !0,
            k = "";
        p(d.tokens, function(b) {
            if ("text" === b[0]) h = b[1] + h, t = !1;
            else if ("variable" === b[0]) {
                var c = b[3] in d.defaults;
                if (!1 === t || !c || b[3] in e && e[b[3]] != d.defaults[b[3]]) {
                    if (b[3] in e) {
                        var c = e[b[3]],
                            k = b[3];
                        k in g && delete g[k]
                    } else if (c) c = d.defaults[b[3]];
                    else {
                        if (t) return;
                        throw Error('The route "' + a + '" requires the parameter "' + b[3] + '".')
                    }
                    if (!0 !== c && !1 !== c && "" !== c || !t) k = encodeURIComponent(c).replace(/%2F/g, "/"), "null" === k && null === c && (k = ""), h = b[1] + k + h;
                    t = !1
                } else c && (b = b[3], b in g && delete g[b])
            } else throw Error('The token type "' + b[0] + '" is not supported.')
        });
        "" === h && (h = "/");
        p(d.hosttokens, function(a) {
            var b;
            if ("text" === a[0]) k = a[1] + k;
            else if ("variable" === a[0]) {
                if (a[3] in e) {
                    b = e[a[3]];
                    var c = a[3];
                    c in g && delete g[c]
                } else a[3] in d.defaults && (b = d.defaults[a[3]]);
                k = a[1] + b + k
            }
        });
        h = this.a.e + h;
        "_scheme" in d.requirements && this.a.scheme != d.requirements._scheme ? h = d.requirements._scheme + "://" + (k || this.a.host) + h : "schemes" in d && "undefined" !== typeof d.schemes[0] && this.a.scheme != d.schemes[0] ? h = d.schemes[0] + "://" + (k || this.a.host) + h : k && this.a.host !== k ? h = this.a.scheme + "://" + k + h : !0 === b && (h = this.a.scheme + "://" + this.a.host + h);
        if (0 < q(g)) {
            var z, F = [];
            c = function(a, b) {
                b = "function" === typeof b ? b() : b;
                F.push(encodeURIComponent(a) + "=" + encodeURIComponent(null === b ? "" : b))
            };
            for (z in g) L(this, z, g[z], c);
            h = h + "?" + F.join("&").replace(/%20/g, "+")
        }
        return h
    };
    m("fos.Router", K);
    m("fos.Router.setData", function(a) {
        var c = K.g();
        c.k(a.base_url);
        c.h(a.routes);
        "prefix" in a && c.l(a.prefix);
        c.a.host = a.host;
        c.a.scheme = a.scheme
    });
    K.getInstance = K.g;
    K.prototype.setRoutes = K.prototype.h;
    K.prototype.getRoutes = K.prototype.o;
    K.prototype.setBaseUrl = K.prototype.k;
    K.prototype.getBaseUrl = K.prototype.n;
    K.prototype.generate = K.prototype.m;
    K.prototype.setPrefix = K.prototype.l;
    K.prototype.getRoute = K.prototype.i;
    window.Routing = K.g()
})();

$(function() {
    var $block = $(".office_address_block");
    $(".help", $block).tipsy({
        delayIn: 80,
        gravity: "n",
        opacity: 1
    });
    setTimeout(function() {
        if (window.bgtOfficeGlobalMapPoints && window.bgtOfficeGlobalMapCards) {
            bgtOfficeGlobalMap("addressBlockGlobalMap", bgtOfficeGlobalMapPoints, bgtOfficeGlobalMapCards)
        }
    }, 1e3)
});



/*-----------------tour!!!!-------------------------*/
var TourForm = function (_departure, _destination, _adults, _kids, _region, _referrer, options, _bgt_country)
{
    var _this = this;

    if (!_departure) {
        //console.error( 'Не указан город вылета' );
    }

    if (!_destination) {
        //console.error( 'Не указана страна' );
    }

    _adults = _adults || 2;
    _kids = _kids || 0;
    _region = _region || null;
    _referrer = _referrer || null;
    _bgt_country = _bgt_country || 1;

    var _formsData = {
        departure_id: _departure,
        destination_id: _destination,
        adults: _adults,
        kids: _kids,
        region: _region,
        referrer: _referrer,
        bgt_country: _bgt_country
    };

    var _options = $.extend({
        init_url: '//inside.bankturov.ru/public/+/accTour/checkForms',
        online_form_url: '//inside.bankturov.ru/public/+/accContract/ajaxOnlineForm',
        offline_form_url: '//inside.bankturov.ru/public/+/accOrder/onlineForm',
        select_form_url: '//inside.bankturov.ru/public/+/accTour/selectForm'
    }, options);

    var _forms = {
        online: null,
        offline: null,
        select: null
    };

    var _tourInfo = {};

    var _activeForm;

    var _overlay;
    var _container;
    var _outerContainer;

    var origAjaxData = {};

    var ajaxDataDisable = function () {
        origAjaxData = $.extend({}, $.ajaxSettings.data);
        $.ajaxSettings.data = {};
    };

    var ajaxDataEnable = function () {
        $.ajaxSettings.data = $.extend($.ajaxSettings.data, origAjaxData);
    };

    var initSelectForm = function () {
        _forms.select = $('<div />').appendTo(_container).hide();

        _forms.select.isLoaded = false;

        ajaxDataDisable();
        $.get(_options.select_form_url, {}, function (response) {
            if (response.success) {
                _forms.select.html(response.form);
                _forms.select.find('.online-btn').on('click', function () {
                    showForm('online');
                });

                _forms.select.find('.offline-btn').on('click', function () {
                    showForm('offline');
                });
                _forms.select.isLoaded = true;
            }
        }, 'jsonp');
        ajaxDataEnable();
    };

    var initOnlineForm = function () {
        _forms.online = $('<iframe class="tour-form"/>').css({
            width: '100%',
            height: '100%'
        }).attr('src', _options.online_form_url + '?' + $.param(_formsData));

        var onLoad = function () {
            _forms.online.isLoaded = true;
            _forms.online.unbind('load', onLoad);
            _forms.online.hide();
        };

        _forms.online.isLoaded = false;
        _forms.online.appendTo(_container).on('load', onLoad);
    };

    function initOfflineForm() {
        _forms.offline = $('<iframe class="tour-form"/>').css({
            width: '100%',
            height: '100%'
        }).appendTo(_container).hide();
        //.attr( 'src', _options.offline_form_url + '?' + $.param( _formsData ) );
    }

    var showOnlineForm = function () {
        if (_forms.online.isLoaded) {
            _forms.online.show();
            var frame_content = _forms.online[0].contentWindow;
            frame_content.postMessage($.toJSON(['tour', _tourInfo]), '*');
        }
        else {
            setTimeout(function () {
                showOnlineForm();
            }, 100);
        }
    };

    var showOfflineForm = function () {
        var src = _options.offline_form_url + '?' + $.param(_tourInfo);
        if (_region) {
            src = src + '&r=' + _region;
        }
        _forms.offline.attr('src', src);
        _forms.offline.show();
    };

    var showSelectForm = function () {
        if (_forms.select.isLoaded) {
            _forms.select.show();
        }
        else {
            setTimeout(showSelectForm, 100);
        }
    };

    var showForm = function (form) {
        hideForm();
        switch (form) {
            case 'online':
                _activeForm = _forms.online;
                showOnlineForm();
                break;
            case 'offline':
                _activeForm = _forms.offline;
                showOfflineForm();
                break;
            case 'select':
                _activeForm = _forms.select;
                showSelectForm();
                break;
        }
    };

    var hideForm = function () {
        if (_activeForm) {
            _activeForm.hide();
            for (var i in _forms) {
                if (_activeForm == _forms[i]) {
                    switch (i) {
                        case 'online':
                            _forms.online.remove();
                            initOnlineForm(_options[i + '_form_url']);
                            break;
                        case 'offline':
                            break;
                        case 'select':
                            break;
                    }
                }
            }
            _activeForm = null;
        }
    };

    var initListener = function () {
        var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
        var eventer = window[eventMethod];
        var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";

        eventer(messageEvent, function (e) {
            try {
                var data = JSON.parse(e.data);
                switch (data[0]) {
                    case 'close':
                        _this.hide();
                        break;
                }
            } catch (error) {}
        }, false);
    };

    var initContainer = function () {
        _overlay = $('.tour-overlay');
        if (!_overlay.length) {
            _overlay = $('<div class="tour-overlay"/>').css({
                position: 'fixed',
                width: '1px',
                height: '1px',
                overflow: 'hidden',
                zIndex: '9999',
                background: 'rgba(0,0,0,0.9)',
                left: 0,
                top: 0
            }).appendTo($('body'));
        }

        _container = $('<div class="form-container-inner" />').css({
            height: $(window).height() - 140,
            position: 'relative'
        });
        _outerContainer = $('<div class="form-container-outer" />').css({
            width: '900px',
            margin: '50px auto',
            padding: '0',
            background: '#fff',
            borderRadius: '3px',
            position: 'relative'
        }).append(_container);

        _overlay.html(_outerContainer);
        _container.html('');
        var closeBtn = $('<div class="fancybox-close"></div>').on('click', function () {
            _this.hide()
        }).appendTo(_outerContainer);
    };

    var init = function () {

        initListener();
        initContainer();

        ajaxDataDisable();
        /*$.ajax({
            url: _options.init_url,
            data: _formsData,
            type: 'GET',
            dataType: 'jsonp',
            success: function (response) {
                if (response.online) {
                    initOnlineForm();
                }
                if (response.offline) {
                    initOfflineForm();
                }
                if (response.online && response.offline) {
                    initSelectForm();
                }
            }
        });*/
        initOnlineForm();
        ajaxDataEnable();

    };

    init();

    this.show = function (tourInfo) {

        _tourInfo = tourInfo;

        _overlay.css({width: '100%', height: '100%', opacity: 0});
        _overlay.animate({opacity: 1}, 200, function () {
        });
        $('body').css({overflow: 'hidden'});

        if (_forms.select) {
            showForm('select');
        }
        else if (_forms.online) {
            showForm('online');
        }
        else {
            showForm('offline');
        }
    };

    this.hide = function () {
        if (_activeForm) {
            _container.hide();
            _overlay.css({width: '100%', height: '100%', opacity: 1});
            _overlay.animate({opacity: 0}, 200, function () {
                _overlay.css({width: '1px', height: '1px'});
                _container.show();
            });

            $('body').css({overflow: 'auto'});
        }
        hideForm();
    };

};

/*-----------------tour end!!!!-------------------------*/

/*-----------------SEARCH!!!!-------------------------*/


jQuery.expr[':'].Contains = function (a, i, m)
{
    return jQuery(a).text().toUpperCase().indexOf(m[3].toUpperCase()) >= 0;
};

(function ($) {
    var name = 'multipleSearch';
    var control_class = 'b-multiple-search';

    var methods = {
        init: function (options) {

            return this.each(function () {

                var $this = $(this), data = $this.data(name);

                // Если плагин ещё не проинициализирован
                if (!data) {
                    var $ul = $('<ul class="choices"/>');
                    var prefix = String(Math.floor(Math.random() * 99999)) + '_mws';

                    $search = $("<div class='input'>" +
                        "<input type='checkbox' name='select_all'/>" +
                        "<input name='search' class='placeholder' type='text' autocomplete='off'  value='' placeholder='Введите название отеля'/>" +
                        "</div>");

                    var html = methods.generateOptions($(this), prefix);

                    $wrapper = $("<div class='hotels " + control_class +
                        "'/>").append($search).append('<div class="choices">' + html +
                        '</div>');

                    $(this).after($wrapper).hide();

//        Навешиваем нужные нам события
                    $('input[type="text"]', $search).bind('keyup.' + name, methods.search);
                    $('input[type="checkbox"]', $search).bind('change.' + name, methods.toggle);
                    $wrapper.delegate('.choices input', 'change.' +
                        name, {target: $this}, methods.change);

                    $(this).data(name, {
                        target: $this,
                        wrapper: $wrapper,
                        search: $search,
                        prefix: prefix,
                        choices: $wrapper.find('.choices')
                    });

                }
            });
        },
        destroy: function () {

            return this.each(function () {

                var $this = $(this),
                    data = $this.data(name);

                $(window).unbind('.' + name);
                data[name].remove();
                $this.removeData(name);

            })

        },
        change: function (event) {
            event.data.target.find('option[value="' + $(this).attr('data-value') +
                '"]').attr('selected', $(this).prop('checked'));
        },
        search: function () {
            $el = $(this).closest('.' + control_class);
            var val = $(this).val();

            if (val == '') {
                $el.find('label').removeClass('hide-name');
            } else {
                $el.find('label').each(function (index, item) {
                    var $item = $(item);
                    if ($item.text().toLowerCase().indexOf(val.toLowerCase()) == -1) {
                        $item.addClass('hide-name');
                    } else {
                        $item.removeClass('hide-name');
                    }
                });
            }

        },
        generateOptions: function (target, prefix) {
            var html = ''

            $('option', target).each(function () {

                var id = prefix + $(this).val();

                html += '<label><input type="checkbox" data-value="' + $(this).val() +
                    '" data-star="' + $(this).attr('data-star') + '">' +
                    $(this).text() + '</label>';
            });
            return html;
        },
        filterByStars: function (stars) {
            var data = $(this).data(name);
            $('input', data.choices).each(function () {
                var star = $(this).attr('data-star');
                if ($.inArray(star, stars) == -1) {
                    $(this).parent().hide();
                } else {
                    $(this).parent().show();
                }
            });
        },
        show: function (val) {
            data = $(this).data(name);
            data.choices.find('input[data-value="' + val + '"]').parent().show();
        },
        hide: function (val) {
            data = $(this).data(name);
            data.choices.find('input[data-value="' + val + '"]').parent().hide();
        },
        update: function (html) {
            data = $(this).data(name);
            $div = data.choices;
            $wrapper = data.wrapper;

            var target = data.target;

            var $tmp = $('input[type="text"]', data.search);
            $tmp.val($tmp.attr('data-placeholder'));

            $div.remove();

            var appendix = $('<div class="choices">' + html + '</div>');
            $wrapper.append(appendix);

            $(this).data(name, {
                target: data.target,
                search: data.search,
                prefix: data.prefix,
                wrapper: data.wrapper,
                choices: $wrapper.find('.choices')
            });

        },
        toggle: function () {
            var checked = $(this).prop('checked');
            $el = $(this).closest('.' + control_class);
            $el.find('.choices label:visible input[type="checkbox"]').prop('checked', true);
        }
    };

    $.fn[name] = function (method) {
        if (methods[method]) {
            return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
        }
        else if (typeof method === 'object' || !method) {
            return methods.init.apply(this, arguments);
        }
        else {
            $.error('Метод с именем ' + method + ' не существует для jQuery.');
        }

    };

})(jQuery);

var bgtSearchForm = function () {
    // Variables
    var $wrapper = null;
    var _domain = null;
    var _maxInterval = 14;
    var _active_page = 1;
    var _count_page = 1;
    //Количество страниц отображаемых перед активной страницей до и после.
    var _count_prefix_postfix_page = 2;
    var _current_date = null;
    var _limit = 20;
    var _scrollDelay = 1200;
    var _SID = null;
    var _portional_search = 0;
    var _process_search = false;
    var _xhr = null;
    var _is_scrolled = false;
    var _options = null;
    var _tourForm = null;
    var _offers = {};
    var _costTO = false;

    var _minCost = 0;
    var _maxCost = 99999999;

    var _urls = {
        departures: '/departures/',
        destinations: '/destinations/',
        turoperators: '/turoperators/',
        curorts: '/curorts/',
        hotels: '/hotels/',
        dates: '/dates/',
        search: '/search/',
        complex: '/complex/',
        directions: '/directions/'
    };

    var _objs = {
        $departures: null,
        $destinations: null,
        $turoperators: null,
        $hotels: null,
        $dates: null,
        $count: null,
        $search: null,
        $nights: null,
        $curorts: null,
        $additional: null,
        $info: null,
        $warning: null,
        $child_ages: null,
        $child_ages_wr: null,
        $cost_origin_btn: null,
        $cost_rounded_btn: null
    };

    var _vals = {
        departure: null,
        destination: null,
        turoperators: null,
        hotels: null,
        curorts: null,
        independent_curorts: null,
        choice_curort: null,
        dates: null,
        nights: null,
        region: null,
        current_date: null,
        week_date: null,
        directions: null
    };

    var _ajaxLoader = function (el, options) {
        // Becomes this.options
        var defaults = {
            bgColor: '#f1f1f1',
            duration: 800,
            opacity: 0.5,
            classOveride: false
        };

        this.options = jQuery.extend(defaults, options);

        this.container = $(el);

        this.init = function () {
            var container = this.container;
            // Delete any other loaders
            this.remove();
            // Create the overlay

            var pos = container.position();

            var overlay = $('<div></div>').css({
                'background-color': this.options.bgColor,
                'opacity': this.options.opacity,
                'width': container.width(),
                'height': container.height(),
                'position': 'absolute',
                'top': pos.top,
                'left': pos.left,
                'z-index': 999
            }).addClass('ajax_overlay');

            // add an overiding class name to set new loader style
            if (this.options.classOveride) {
                overlay.addClass(this.options.classOveride);
            }

            // insert overlay and loader into DOM
            container.append(
                overlay.append(
                    $('<div></div>').addClass('ajax_loader')
                ).animate({opacity: this.options.opacity})
            );

        };

        this.remove = function () {
            var overlay = this.container.children(".ajax_overlay");
            if (overlay.length) {
                overlay.fadeOut(this.options.classOveride, function () {
                    overlay.remove();
                });
            }
        };

        this.init();
    };

    var _ajax_count = 0;

    var _handlers = {

        changeCostOrigin: function (e) {
            e.preventDefault();
            $('.cost .origin', $wrapper).css('display', 'inline');
            $('.cost .rounded', $wrapper).css('display', 'none');

            _objs.$cost_origin_btn.css('display', 'none');
            $('#cost_origin_span', $wrapper).css('display', 'inline');

            _objs.$cost_rounded_btn.css('display', 'inline');
            $('#cost_rounded_span', $wrapper).css('display', 'none');

            $('.notice_to').css('display', 'inline');
            $('.notice_round').css('display', 'none');

            _costTO = true;
        },

        changeCostRounded: function (e) {
            e.preventDefault();
            $('.cost .origin', $wrapper).css('display', 'none');
            $('.cost .rounded', $wrapper).css('display', 'inline');

            _objs.$cost_origin_btn.css('display', 'inline');
            $('#cost_origin_span', $wrapper).css('display', 'none');

            _objs.$cost_rounded_btn.css('display', 'none');
            $('#cost_rounded_span', $wrapper).css('display', 'inline');

            $('.notice_to').css('display', 'none');
            $('.notice_round').css('display', 'inline');

            _costTO = false;
        },

        rememberFields: function (e) {

            if (_objs.$date_from.val()) {
                _options.rememberDate = _objs.$date_from.val();
            } else {
                _options.rememberDate = false;
            }

        },

        refreshFields: function (e) {
            // Сброс значений поля "Ночей от:"
            _objs.$nights_start.find('option').each(function () {
                $(this).removeAttr('selected');
            });
            $(".nights_start [value='2']", $wrapper).attr('selected', 'selected');
            _objs.$nights_start.trigger("liszt:updated");

            // Сброс значений поля "Ночей до:"
            _objs.$nights_end.find('option').each(function () {
                $(this).removeAttr('selected');
            });
            $(".nights_end [value='14']", $wrapper).attr('selected', 'selected');
            _objs.$nights_end.trigger("liszt:updated");

            // Сброс значений поля "Взрослых:"
            _objs.$adults.find('option').each(function () {
                $(this).removeAttr('selected');
            });
            $(".adults [value='2']", $wrapper).attr('selected', 'selected');
            _objs.$adults.trigger("liszt:updated");

            // Сброс значений поля "Детей:"
            _objs.$childs.find('option').each(function () {
                $(this).removeAttr('selected');
            });
            $(".childs [value='0']", $wrapper).attr('selected', 'selected');
            _objs.$childs.trigger("liszt:updated");
            _handlers.childs(0);

            // Сброс туроператоров и получение новой информации о курортах/датах/отелях
            _objs.$turoperators.find('option').each(function () {
                $(this).removeAttr('selected');
            });
            _objs.$turoperators.val('').trigger('liszt:updated');

            _handlers.turoperators();

//      $( '#ticket' ).attr( "checked", "checked" );
//      $( '#nonstop' ).attr( "checked", "checked" );

            $('.b-checkbox', $wrapper).addClass('checked');
        },

        change_hotels: function (e) {
            var stars = [];
            _objs.$hotel_types.each(function () {
                if ($(this).prop('checked')) {
                    stars.push($(this).val() + '*');
                }
            });

            _objs.$hotels.multipleSearch('filterByStars', stars);
        },

        departures: function (e) {
            _objs.$additional.hide();
            _objs.$discount_banner.hide();
            _vals.departure = _objs.$departures.val();

            // добавляем соответствующие страны прилета

            $('option', _objs.$destinations).remove();

            _objs.$destinations.append($('<option/>').attr('value', 0).html(''));

            var destinationsForResorts = null;

            $.each(_vals.directions, function (key, value) {
                if (value.id == _vals.departure) {
                    destinationsForResorts = value.destinations;
                    $.each(value.destinations, function (key, value) {
                        var label = _options.country_names[value.id] ? _options.country_names[value.id] : value.value;

                        _objs.$destinations.append($('<option/>').attr('value', value.id).html(label));
                    });
                }
            });

            _objs.$destinations.trigger("liszt:updated");

            // Добавляем независемые курорты
            if (destinationsForResorts != null) {
                _methods.addIndependentResorts(destinationsForResorts);
            }

            // Сортировка стран в списке
            _methods.sortDestinations();
        },

        destinations: function destinations(e) {
            // Проставляем значение страны прилета
            _vals.destination = _objs.$destinations.val();

            // Убираем принудительные независемые курорты
            _vals.independent_curorts = null;
            _objs.$curorts.attr('disabled', false).trigger("liszt:updated");

            // Действия над независимым курортом
            if (_vals.destination.indexOf('_') > 0) {
                var ids = _vals.destination.split('_');
                _vals.destination = ids[0];

                // Добавляем доступные курорты
                $.each(ids[1].split(','), function (key, value) {
                    if (!_vals.independent_curorts) {
                        _vals.independent_curorts = [value];
                    }
                    else {
                        _vals.independent_curorts.push(value);
                    }
                });

//        _objs.$curorts.attr('disabled', true).trigger("liszt:updated");
            }

            if (_vals.departure != 0 && _vals.destination != 0) {
                _fills.additionalParameters();
            }
            $('.b-text.datepicker-from').datepicker().data('datepicker').clear();

        },

        turoperators: function (e) {
            _vals.turoperators = _objs.$turoperators.val();

            if (_objs.$turoperators.val()) {
                _options.rememberTO = _objs.$turoperators.val();
            } else {
                _options.rememberTO = false;
            }

            _fills.complex();
        },

        curorts: function (e) {
            _vals.choice_curort = _objs.$curorts.val();

            _myAjax({
                url: '/curl',
                type: "POST",
                dataType: 'json',
                data: {urlm : '/hotels/' , param : {
                    destination_id: _vals.destination,
                    departure_id: _vals.departure,
                    resort_id: _objs.$curorts.val()
                }},
                cache: false,
                success: function (data) {
                    // проставляем отели
                    $('option', _objs.$hotels).remove();

                    var html = '';
                    var hotel_html = '';

                    $(data.data).each(function () {
                        if (this.id) {
                            html += '<option data-star="' + this.star_name + '" value="' +
                                this.id + '">' + this.value + '</option>';
                            hotel_html += '<label><input type="checkbox" data-value="' +
                                this.id + '" data-star="' + this.star_name + '">' +
                                this.value + '</label>';
                        }

                    });

                    _objs.$hotels.html(html);
                    _objs.$hotels.multipleSearch("update", hotel_html);
                }
            });
        },

        submit: function (e) {
            $('.schengen', $wrapper).css('display', 'none');
            $('.surcharge_added', $wrapper).text('Топливные и сервисные сборы включены.');

            if (1 == _portional_search || true == _process_search) {
                return false;
            }

         /*   if (_options.buy_urls.init_url) {
                var data = _methods.getParams();
                _tourForm = new TourForm(data.departure_id, data.destination_id, data.adult_num, data.child_num, _vals.region, _options.referrer, _options.buy_urls, _options.bgt_country);
            }*/

            _active_page = 1;
            _methods.showResult();
            _options['presearch'] = 0;
            return false;
        },

        cancel: function (e) {
            if (_xhr != null) {
                _xhr.abort();
                _methods.hideLoader();
            }

            _handlers.refreshFields();

            return false;
        },

        childs: function (e) {
            var chlds = parseInt(_objs.$childs.val());

            $('div.child_age', _objs.$child_ages_wr).hide().trigger("liszt:updated");
            _objs.$child_ages_wr.css('background-size', '100% 1px');

            var label = $('label', _objs.$child_ages_wr);

            if (chlds != 0) {
                label.css('display', 'block');
                _objs.$childAgeWrapper.show();
                $('div.choices').css("cssText", "height: 16em !important;");
                _objs.$child_ages.trigger("liszt:updated");
            }
            else {
                label.hide();
                _objs.$childAgeWrapper.hide();
                $('div.choices').css("cssText", "height: 11em !important;");
            }

            var width = 0;
            for (var i = 0; i < chlds; i++) {
                var $el = $('div.child_age:eq(' + i + ')', _objs.$child_ages_wr);

                width += $el.parent().closest('.dm_form_element').width();
                $el.show().trigger("liszt:updated");
            }

            _objs.$child_ages_wr.css('background-size', width + 'px 1px');

        }
    };

    var _fills = {

        complex: function () {
            _myAjax({
                url:'/curl',
                type: "POST",
                dataType: 'json',
                data: { urlm:  _urls.complex, param:{
                    typecost: 'complex',
                    departure_id: _vals.departure,
                    destination_id: _vals.destination,
                    touroperators: _vals.turoperators || 'null'
                }},
                cache: false,
                success: function (data) {
                    // проставляем отели

                    $('option', _objs.$hotels).remove();

                    var html = '';
                    var hotel_html = '';

                    $(data.data.hotels.data).each(function () {
                        html += '<option data-star="' + this.star_name + '" value="' +
                            this.id + '">' + this.value + '</option>';
                        hotel_html += '<label><input class="ym-disable-keys" type="checkbox" data-value="' +
                            this.id + '" data-star="' + this.star_name + '">' +
                            this.value + '</label>';
                    });

                    _objs.$hotels.html(html);
                    _objs.$hotels.multipleSearch("update", hotel_html);

                    // Проставляются отели из пре-поиска
                    if (_options['presearch'] == 1 && _options['hotel_id'] && _options['hotel_id'].length >= 1) {
                        $(_options['hotel_id']).each(function () {
                            var hotelCheckBox = $('[data-value="' + this + '"]');
                            hotelCheckBox.prop("checked", true);
                        });
                    }

                    // проставляем курорты

                    $('option', _objs.$curorts).remove();
                    $(data.data.curorts.data).each(function () {

                        // Если курорт не независимый или он есть в настройках независимого
                        if (_vals.independent_curorts == null || $.inArray(this.id.toString(), _vals.independent_curorts) != -1) {
                            _objs.$curorts.append($('<option/>').attr('value', this.id).html(this.value));
                        }

                    });
                    _objs.$curorts.trigger("liszt:updated");

                    // проставляем даты

                    _vals.dates = data.data.dates[0];

                    var stop = 0;

                    // Если есть запомненная дата
                    if (_options.rememberDate != false) {
                        // Установка "дат с" из запомненной даты
                        $(_vals.dates).each(function () {
                            if (stop) {
                                return;
                            }

                            // Текущая дата в виде 'Date'
                            var dtT = parseInt(this.substring(0, 2));
                            var monT = parseInt(this.substring(3, 5));
                            var yrT = parseInt(this.substring(6, 10));
                            var dateT = new Date(yrT, monT - 1, dtT);

                            // Запомненная дата в виде 'Date'
                            dtT = parseInt(_options.rememberDate.substring(0, 2));
                            monT = parseInt(_options.rememberDate.substring(3, 5));
                            yrT = parseInt(_options.rememberDate.substring(6, 10));
                            var dateR = new Date(yrT, monT - 1, dtT);

                            if (dateT >= dateR) {
                                _objs.$dates.val(this);
                                stop = 1;
                                return;
                            }

                        });
                    }

                    // Установка "дат с"
                    $(_vals.dates).each(function () {
                        if (stop) {
                            return;
                        }

                        // Дата из строки
                        var dt1 = parseInt(this.substring(0, 2));
                        var mon1 = parseInt(this.substring(3, 5));
                        var yr1 = parseInt(this.substring(6, 10));
                        var date1 = new Date(yr1, mon1 - 1, dt1);

                        // Строка из даты
                        var curr_date = _vals.current_date.getDate();
                        if (curr_date < 10) {
                            curr_date = '0' + curr_date;
                        }
                        var curr_month = _vals.current_date.getMonth() + 1;
                        if (curr_month < 10) {
                            curr_month = '0' + curr_month;
                        }
                        var curr_year = _vals.current_date.getFullYear();
                        var stringDate = curr_date + "." + curr_month + "." + curr_year;

                        if (stringDate == this || (_vals.current_date - date1) <= 0) {
                            _objs.$dates.val(this);

                            _vals.week_date = date1;
                            _vals.week_date.setDate(_vals.week_date.getDate() + _options.days_offset);

                            stop = 1;
                            return;
                        }
                    });

                    // Переворачиваем даты
                    var reverseDates = _vals.dates;
                    reverseDates.reverse();

                    // Если нет запомненной даты, то проставляем "даты по"
                    if (_options.rememberDate == false) {
                        stop = 0;
                    }

                    // Установка "дат по"


                    _methods.preSearchDates();

                    if (data.data.maxDiscount.data < 0) {
                        $('.discount-value', _objs.$discount_banner).html(data.data.maxDiscount.data + '%');
                        _objs.$discount_banner.show();
                    }
                    else {
                        _objs.$discount_banner.hide();
                    }
                },
                error: function (xhr, status, errorThrown) {
                    console.log(status + '\n' + xhr.responseText);
                }
            });
        },

        directions: function () {
            _myAjax({
                crossDomain: true,
                type: "get",
                url:'/curl',
                data: {urlm : _urls.directions, param: {country: _options['bgt_country']}},
                dataType: 'json',
                cache: false,
                success: function (data) {
                    // устанавливаем города вылета

                    $('option:gt(0)', _objs.$departures).remove();

                    _objs.$departures.append($('<option/>').attr('value', 0).html(''));

                    _vals.directions = data.data;

                    // Получаем массив названий городов
                    var regNames = [];
                    $.each(_vals.directions, function (key, value) {
                        regNames.push(value.value);
                    });

                    // Сортировка по алфавиту
                    regNames.sort();

                    var tmpDirections = [];
                    $.each(regNames, function (key, value) {
                        $.each(_vals.directions, function (dkey, dvalue) {
                            if (value == dvalue.value) {
                                tmpDirections.push(dvalue);
                            }
                        });
                    });

                    _vals.directions = tmpDirections;

                    $.each(_vals.directions, function (key, value) {

                        if (value.id == 1269) {
                            _objs.$departures.append($('<option/>').attr('value', value.id).html(value.value).attr('selected', 'selected'));
                            _vals.departure = value.id;
                        }
                        else {
                            _objs.$departures.append($('<option/>').attr('value', value.id).html(value.value));
                        }
                    });

                    _objs.$departures.trigger("liszt:updated");

                    // устанавливаем страны прилета

                    $('option', _objs.$destinations).remove();

                    _objs.$destinations.append($('<option/>').attr('value', 0).html(''));

                    var destinationsForResorts = null;

                    $.each(_vals.directions, function (key, value) {
                        if (value.id == _vals.departure) {
                            destinationsForResorts = value.destinations;

                            $.each(value.destinations, function (key, value) {
                                if (_options.country_names[value.id]) {
                                    _objs.$destinations.append($('<option/>').attr('value', value.id).html(_options.country_names[value.id]));
                                }
                                else {
                                    _objs.$destinations.append($('<option/>').attr('value', value.id).html(value.value));
                                }
                            });
                        }
                    });

                    _objs.$destinations.trigger("liszt:updated");

                    // Добавляем независемые курорты
                    if (destinationsForResorts != null) {
                        _methods.addIndependentResorts(destinationsForResorts);
                    }

                    // Сортировка стран в списке
                    _methods.sortDestinations();

                    _methods.preSearch();
                },
                error: function (xhr, status, errorThrown) {
                    console.log(status + '\n' + xhr.responseText);
                }
            });
        },

        turoperators: function () {
            $('option', _objs.$turoperators).remove();
            _objs.$turoperators.append($('<option/>').attr('value', 0).html(''));

            $.each(_vals.directions, function (key, value) {
                if (value.id == _vals.departure) {
                    $.each(value.destinations, function (key, value) {
                        if (value.id == _vals.destination) {
                            $.each(value.turoperators, function (key, value) {
                                _objs.$turoperators.append($('<option/>').attr('value', value.id).html(value.value));
                            });
                        }
                    });
                }
            });

            _objs.$turoperators.val(_options.rememberTO);

            _objs.$turoperators.trigger("liszt:updated");
        },

        additionalParameters: function () {
            _objs.$additional.show();
            _fills.turoperators();
            _fills.complex();
            _methods.expand();
        }
    };

    // Враппер для бинд-функцию чтобы можно было автоматом вызывать следующий коллбэк
    var bind = function (object, callback) {
        object.bind('change',
            function (e) {
                callback.call(this, e);

                // Если есть следующий обработчик
                if (typeof this.next[callback.name] != undefined) {
                    this.next[callback.name]();
                }
            }
        );
    };

    // Враппер для аякс-запроса
    var _myAjax = function (params) {
        var _ajax_loader = new _ajaxLoader($('.loader_wrapper', $wrapper));

        // Если предыдущих запросов нет, то выводим прогресс бар
        if (_ajax_count == 0 && _portional_search == 0) {
            _ajax_loader.init();
        }

        // Подсчитываем запросы (для того, чтобы не убрать иконку загрузки, пока идет загрузка из параллельных запросов)
        _ajax_count += 1;

        // Добавляем информацию о домене, в урл запроса
        params.url = _domain + params.url;

        // Добавляем обработчик, который убирает иконку загрузки
        params.complete = function (data) {
            if (--_ajax_count > 0) {
                return;
            }

            if (params.url == _domain + _urls.search && data.status == '200') {
                data = $.parseJSON(data.responseText);

                if (data.additional.all == 1) {
                    _ajax_loader.remove();
                    _portional_search = 0;
                }
                else {
                    _portional_search = 1;
                }
            }
            else {
                _ajax_loader.remove();
            }
        };

        params.type = 'GET';

        // Сам аякс-запрос
        _xhr = $.ajax(params);
    };

    var _methods = {

        addIndependentResorts: function (destinations) {
            $.each(destinations, function (desKey, desValue) {
                if (_options.independent_resorts != null) {
                    $.each(_options.independent_resorts, function (key, value) {
                        // Если страна курорта доступна в поиске, то и курорт разрешаем
                        if (value[1] == desValue.id) {
                            _objs.$destinations.append($('<option/>').attr('value', value[1] + '_' + value[2]).html(/*'Kурорт ' +*/ value[0]));
                        }
                    });
                }


            });

            // TODO: Скрываем страну Россия (оставляем только курорты)
            $('[value = 150]', $wrapper).remove();

            _objs.$destinations.trigger("liszt:updated");
        },

        sortDestinations: function () {
            $('.destinations option', $wrapper).each(function () {
                var dOption = $(this);

                $.each(_options.one_resort_countries, function (key, value) {
                    // Если у страны 1 независимый курорт то скрываем ее
                    if (value == dOption.val()) {
                        dOption.remove();
                    }
                });
            });

            _objs.$destinations.trigger("liszt:updated");

            var SORTER = {};
            SORTER.sort = function (which, wrapper, dir) {
                SORTER.dir = (dir == "desc") ? -1 : 1;
                $(which, wrapper).each(function () {
                    // Find the list items and sort them
                    var sorted = $(this).find("> li").sort(function (a, b) {
                        return $(a).text().toLowerCase() > $(b).text().toLowerCase() ? SORTER.dir : -SORTER.dir;
                    });
                    $(this).append(sorted);
                });
            };
            SORTER.sort('.chzn-results', _objs.$destinations, '');
        },

        putRow: function (row) {
            _offers[row.attr('offer_id')] = true;
            var next = null;
            var rowPrice = parseInt(row.find('.rounded').text().replace(/(\s|&nbsp;)/g, ''));
            _objs.$results.find('tr.offer').each(function () {
                var $this = $(this);
                var price = parseInt($this.find('.rounded').text().replace(/(\s|&nbsp;)/g, ''));
                if (price > rowPrice) {
                    next = $this;
                    return false;
                }
            });
            if (next) {
                next.before(row);
            } else {
                _objs.$results.append(row);
            }
        },

        showWarning: function (status) {
            if (status.all && status.timeout) {
                _objs.$warning.show();

                if (_options.price_decode && status.timeoutOperators) {
                    var operators = [];

                    for (var i in status.timeoutOperators) {
                        operators.push(status.timeoutOperators[i]);
                    }

                    _objs.$warning.find('.operators').text(operators.join(', ')).show();
                } else {
                    _objs.$warning.find('.operators').hide();
                }
            } else {
                _objs.$warning.hide();
            }
        },

        scrollToResult: function (force) {
            force = force || false;
            if (!_is_scrolled || force) {


                $('body').animate({
                    scrollTop: $('.results').offset().top
                }, 1200);



                _is_scrolled = true;
            }
        },

        preSearch: function () {
            if (_options['presearch'] == 1) {
                _vals.departure = _options['departure'];
                _vals.destination = _options['destination'];

                $(".departures [value='" + _vals.departure + "']", $wrapper).attr('selected', 'selected');
                _objs.$departures.trigger("liszt:updated");

                $(".destinations [value='" + _vals.destination + "']", $wrapper).attr('selected', 'selected');
                _objs.$destinations.trigger("liszt:updated");

                // Если это составной курорт, то вычленяем страну
                var tmpDest = _vals.destination.split('_');
                _vals.destination = tmpDest[0];

                _fills.additionalParameters();

                $('.nights_start', $wrapper).trigger("liszt:updated");
                $('.nights_end', $wrapper).trigger("liszt:updated");
            }
        },

        preSearchDates: function () {
            if (_options['presearch'] == 1) {

                var arr = _options['date_from'].split('.');
                _objs.$date_from.val(arr[0] + '.' + arr[1] + '.20' + arr[2]);

                arr = _options['date_to'].split('.');
                _objs.$date_to.val(arr[0] + '.' + arr[1] + '.20' + arr[2]);

                if (_options['man'] < 1 || _options['man'] > 4) {
                    _options['man'] = 2;
                }

                if (_options['kid'] < 0 || _options['kid'] > 3) {
                    _options['kid'] = 0;
                }

                //--------------------------------
                // Галочки типа питания
                //--------------------------------

                if (_options['meal_types'] && _options['meal_types'].length) {
                    var i = 1;

                    _objs.$meal_types.each(function () {

                        if ($.inArray(i.toString(), _options['meal_types']) == -1) {
                            $(this).prop('checked', 'false');
                            $(this).attr('checked', 'false');
                            $(this).parent().removeClass('checked');
                        }

                        i++;

                    });
                }

                //--------------------------------
                // Галочки звездности отеля
                //--------------------------------

                if (_options['hotel_stars'] && _options['hotel_stars'].length) {
                    var j = 1;

                    _objs.$hotel_types.each(function () {

                        if ($.inArray(j.toString(), _options['hotel_stars']) == -1) {
                            $(this).prop('checked', 'false');
                            $(this).attr('checked', 'false');
                            $(this).parent().removeClass('checked');
                        }

                        j++;

                    });
                }

                //--------------------------------
                // Курорты
                //--------------------------------

                if (_options['resorts'] && _options['resorts'].length) {
                    $.each(_options['resorts'], function (key, value) {
                        $(".curorts [value='" + value + "']", $wrapper).attr('selected', 'selected');
                    });

                    _objs.$curorts.trigger("liszt:updated");
                }

                //--------------------------------
                // Ограничение стоимости
                //--------------------------------

                _minCost = _options['min_cost'];
                _maxCost = _options['max_cost'];

                //--------------------------------
                // Количество ночей и человек
                //--------------------------------

                $(".nights_start [value='" + _options['nights_start'] + "']", $wrapper).attr('selected', 'selected');
                _objs.$nights_start.trigger("liszt:updated");

                $(".nights_end [value='" + _options['nights_end'] + "']", $wrapper).attr('selected', 'selected');
                _objs.$nights_end.trigger("liszt:updated");

                $(".adults [value='" + _options['man'] + "']", $wrapper).attr('selected', 'selected');
                _objs.$adults.trigger("liszt:updated");

                $(".childs [value='" + _options['kid'] + "']", $wrapper).attr('selected', 'selected');
                _objs.$childs.trigger("liszt:updated");

                $(".age1 [value='" + _options['age1'] + "']", $wrapper).attr('selected', 'selected');
                $(".age2 [value='" + _options['age2'] + "']", $wrapper).attr('selected', 'selected');
                $(".age3 [value='" + _options['age3'] + "']", $wrapper).attr('selected', 'selected');

                _objs.$child_ages.trigger("liszt:updated");

                _handlers.childs();

                _handlers.submit();
            }
        },

        expand: function () {

        },

        renderHeader: function () {
            to_head = '';
            if (_options.show_touroperator) {
                to_head = '<th>Т.О.</th>';
            }

            return false;
        },

        renderRow: function (obj) {


            var date = new Date(obj.date);

            // -----------------------------------------------------------------------------------------
            // Получаем цену и скидку
            // -----------------------------------------------------------------------------------------

            var costArray = obj.costValues[_options['offer_currency']];
            var sourceCostArray = obj.costValues[_methods.getSourceCurrency()];

            var costTotal = costArray.source;
            var costRounded = costArray.rounded;

            // Если форма для посетителей, берем конечную округленную цену
            if (_options.can_bgt == false) {
                costTotal = costRounded
            }

            // -----------------------------------------------------------------------------------------
            // Форматированная строка цены
            // -----------------------------------------------------------------------------------------

            var cost = String(costTotal).replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1&nbsp;');
            var round_cost = String(costRounded).replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1&nbsp;');

            // Формируем строку отображения цены
            var cost_string = '';

            var cost_decode_string = '';



            if (_options.price_decode) {
                cost_decode_string += 'Туроператор: ' + obj.to_name + '. ';
                cost_decode_string += 'Цена: ' + sourceCostArray.source + _methods.getSourceCurrency();
                if (obj.surcharge.discount > 0) {
                    cost_decode_string += ' +' + Math.abs(obj.surcharge.discount) + '% доплата';
                }
                if (obj.surcharge.discount < 0) {
                    cost_decode_string += ' -' + Math.abs(obj.surcharge.discount) + '% скидка';
                }

                // Если есть доплата за топливо, то отображаем в расшифровке
                if (obj.surcharge.fuel.full) {
                    cost_decode_string += ' +' + Math.abs(obj.surcharge.fuel.full) + obj.surcharge.currency.symbol + ' топливные сборы';
                }

                // Если есть виза и статус у нее "Всегда прибавлять", то отображаем в расшифровке
                if (obj.surcharge.visa.full && obj.surcharge.visa.status >= 2) {
                    cost_decode_string += ' +' + Math.abs(obj.surcharge.visa.full) + obj.surcharge.currency.symbol + ' виза';
                }

                // Если есть коммисия за эквайринг, то отображаем в расшифровке
                if (obj.surcharge.acquiring) {
                    cost_decode_string += ' +' + Math.abs(obj.surcharge.acquiring) + '% эквайринг';
                }
            } else {
                cost_decode_string += 'Цена указана с учетом максимальной скидки и топливными сборами!';
            }

            // Если есть виза и она Шенген, то показываем нужную текстовку
            if (obj.surcharge.visa.full && obj.surcharge.visa.status == 1) {
                $('.schengen', $wrapper).css('display', 'inline');
            }

            // Если есть виза и она Прибавляется, то меняем текстовку
            if (obj.surcharge.visa.full && obj.surcharge.visa.status == 2) {
                $('.surcharge_added', $wrapper).text('Доплаты за визы, топливные и сервисные сборы включены.');
            }

            var tickets = '';
            var hotel_in_stop_title = '';
            var hotel_in_stop = '';

            var isDepartureAvailable = obj.EconomTicketsDpt == 'Available' || obj.BusinessTicketsDpt == 'Available';
            var isReturnAvailable = obj.EconomTicketsRtn == 'Available' || obj.BusinessTicketsRtn == 'Available';
            var isDepartureStop = obj.EconomTicketsDpt == 'Stop' || obj.BusinessTicketsDpt == 'Stop';
            var isReturnStop = obj.EconomTicketsRtn == 'Stop' || obj.BusinessTicketsRtn == 'Stop';

            var isDepartureAvailableSmall = obj.FewEconomTicketsDpt == '-1';
            var isReturnAvailableSmall = obj.FewEconomTicketsRtn == '-1';

            if (isDepartureAvailableSmall || isReturnAvailableSmall) {
                tickets = '<span><i class="fas fa-plane AvailableSmall" title="Мало авиабилетов"></i> Мало авиабилетов</span>';
            } else if (isDepartureAvailable && isReturnAvailable) {
                tickets = '<span><i class="fas fa-plane Available" title="Есть авиабилеты"></i> Есть авиабилеты</span>';
            } else if (isDepartureStop && isReturnStop) {
                tickets = '<span><i class="fas fa-plane Stop"  title="Нет авиабилеты"></i> Нет авиабилеты</span>';
            } else {
                tickets = '<i class="fas fa-plane Available"  title="Авиабилеты под запрос"></i><span>Авиабилеты под запрос</span>';
            }

            switch (obj.HotelIsInStop) {
                case 'Available':
                    hotel_in_stop_title = 'Есть места в отеле';
                    hotel_in_stop = '<span><i class="fas fa-home ' + obj.HotelIsInStop + '" title="' + hotel_in_stop_title + '" ></i> '+hotel_in_stop_title+'</span>';
                    break;
                case 'Stop':
                    hotel_in_stop_title = 'Нет мест в отеле';
                    hotel_in_stop = '<span><i class="fas fa-home ' + obj.HotelIsInStop + '" title="' + hotel_in_stop_title + '" ></i> '+hotel_in_stop_title+'</span>';
                    break;
                default:
                    hotel_in_stop_title = 'Отель под запрос';
                    hotel_in_stop = '<span><i class="fas fa-home ' + obj.HotelIsInStop + '" title="' + hotel_in_stop_title + '" ></i> '+hotel_in_stop_title+'</span>';
                    break;
            }

            if (obj.FewPlacesInHotel == '-1') {
                hotel_in_stop_title = 'Мало мест';
                hotel_in_stop = '<span><i class="fas fa-home ' + obj.HotelIsInStop + 'Small" title="' + hotel_in_stop_title + '" ></i> '+hotel_in_stop_title+'</span>';
            }

            var to_field = '';

            if (_options.show_touroperator) {
                to_field = '<td class="center"><a target="_blank" href="' + obj.tour_url + '" class="turoperator ' + obj.to_class + '" title="' + obj.to_name + '"></a></td>';
            }

            var info = '';

            // Если есть подсказки
            if ('search_settings' in obj && obj.search_settings.helpers && obj.search_settings.helpers.length) {
                info += obj.search_settings.helpers.join(', ');
                info += ', ';
            }

            info += obj.tour_name;

            var inside_prices = '';

            var round_cost_valute;

            if (_costTO === false) {
                inside_prices = '<span class="origin" style="display: none;">' + cost + '&nbsp;' + _options['currency_symbol'] + '</span>' +
                    '<span class="rounded">' +
                    '<span class="q">' + round_cost + '&nbsp;' + _options['currency_symbol'] + '</span>' +
                    '</span>';
                $('.notice_to').css('display', 'none');
                $('.notice_round').css('display', 'inline');
            } else {
                inside_prices = '<span class="origin">' + cost + '&nbsp;' + _options['currency_symbol'] + '</span>'
                    + '<span class="rounded" style="display: none;">' +
                    '<span class="q">' + round_cost + '&nbsp;' + _options['currency_symbol'] + '</span>' +
                    '</span>';
                $('.notice_to').css('display', 'inline');
                $('.notice_round').css('display', 'none');
            }

            // Если курорт встречается в имени тура, то не показываем его
            if (info.indexOf(obj.curort) >= 0) {
                obj.curort = '';
            }
            else {
                obj.curort = obj.curort + ' ';
            }

            // Формирование цены
            var priceFinalString = '';

            // Для авторизованных сотрудников выводим 2 варианта цены
            if (_options.price_decode) {
                priceFinalString = inside_prices;
            } else {
                // Для неавторизованных, если не Россия - выводится специальная составная цена
                // cost_decode_string = 'Цена: ' + round_cost + 'р. ' + cost_decode_string; // было для укр и рк
                priceFinalString = '<span class="rounded"><span class="q"' + cost_decode_string + '">' + round_cost + _options['currency_symbol'] + '</span></span>';
            }

            // Кнопка купить

            var data_options = [];

            var jsonT = JSON.stringify(obj);
            cost_string = '' +
                '<span class=" gagarin red low small">' +
                "<a href='#' class='buyTour'  data-search-price=' "+ priceFinalString + " ' data-search-data=' "+ jsonT + " '>Купить</a>" +
                '</span>';

            var urlImg = obj.residenses.hotel_image.replace(/(^\/\/.*)(\/i\/p\/)(.*)/ig,"$1/i/im/$3");

            var from = $(".chzn-container-single.departures span").text();

            return '' +
                '<div class="offer-tour" offer_id="' + obj.offer_id + '">'
                + '<div class="img-tour">' +
                '<a class="hotel_name b-markdown gagarin" href="//hotels.sletat.ru/?id=' + obj.residenses.hotel_id + '" target="_blank"><img src="'+  urlImg + '" alt=""></a></div>'+
                '<div class="date-tour"><div><span>Дата вылета: </span>' + ('0' + date.getDate()).slice(-2)
                    + '.' + ('0' + (date.getMonth() + 1)).slice(-2)
                    + '.' + date.getFullYear().toString().slice(-2)
                +
                '</div>'
                +
                '<div class="night-tour"><span>Вылет с: </span>' + from + '</div>'
                +
                '<div class="night-tour"><span>Ночей: </span>' + obj.nights + '</div>'
                +
                '<div><span>Гостиница: </span><a class="hotel_name b-markdown gagarin" href="//hotels.sletat.ru/?id=' + obj.residenses.hotel_id + '" target="_blank">'
                + obj.residenses.hotel_name + ' ' + obj.residenses.star_name + '</a></div>'
                +
                '<div class="nomer-razme"><span>Номер : </span>' + obj.residenses.o_room_name + '<i> '+ obj.residenses.ht_pl_description+'</i></div>'
                +
                '<div><span>Курорт: </span>' + obj.curort +'</div>'
                +
                '</div>'
                // '<td class="center">' + '<span class="surcharge" original-title="' + originalSurcharges + '">' + obj.surcharge.currency.symbol + ' ' + surcharges + '</span>' + '</td>' +

                +
                '<div class="obedy-tour">'
                +
                '<div class="mesta-tour">' + tickets + hotel_in_stop
                +
                '<span class="q"> <i class="fas fa-utensils"></i>'
                +
                obj.residenses.meal_const +'/'+
                obj.meal_description
                +
                '</span></div>'
                +
                '</div>'
                +
                '<div class="block-price"><div class="price-tour">' + priceFinalString + '</div>'
                +
                cost_string + '<div>'
                +
                '</div>';
        },

        showLoader: function () {
            _objs.$submit.css('display', 'none');
            _objs.$cancel.css('display', 'inline-block');
            //$( '.text, .loop', _objs.$submit ).css( { position: 'relative', top: '-10000px' } );
            $('.loader', _objs.$submit).show();

            _objs.$info.hide();
            _objs.$results.hide();
        },

        hideLoader: function () {
            _objs.$submit.css('display', 'inline-block');
            //_objs.$cancel.css('display', 'none');
            $('.loader', _objs.$submit).hide();

            _SID = null;
            _process_search = false;
            _portional_search = 0;
            _is_scrolled = false;
        },

        showSearchProcessInfo: function (SID) {
            $('.search_progress', _objs.$info).show();
            $('.full', _objs.$info).hide();
            $('.empty', _objs.$info).hide();
            _objs.$info.show();

            _methods.scrollToResult();

            //var caption = $( '.caption', _objs.$info );
            //caption.text( 'Поиск продолжается...' );
            //TODO: почему продолжение поиска запускается из вспомогательного метода отображения состояния поиска?
//      setTimeout( _methods.showPortionResult, 1000 );
           // _methods.showPortionResult();
        },

        showSearchEndEmptyInfo: function () {
            $('.search_progress', _objs.$info).hide();
            $('.full', _objs.$info).hide();
            $('.empty', _objs.$info).show();
            _objs.$info.show();
            _objs.$results.hide();
            // caption.text( 'Найдено 0 туров' );

            var caption = $('.caption', _objs.$info);
            caption.text('Поиск завершен');

            _methods.scrollToResult();
        },

        showSearchEndInfo: function () {
            $('.search_progress', _objs.$info).hide();
            $('.full', _objs.$info).show();
            $('.empty', _objs.$info).hide();

            var adults = _objs.$adults.val();
            var childs = _objs.$childs.val();
            var people = adults + ' ' + get_noun(adults, 'взрослого', 'взрослых', 'взрослых');

            if (childs > 0) {
                people += ' и ' + childs + ' ' + get_noun(childs, 'ребенка', 'детей', 'детей');
                people += ' (';

                for (var i = 1; i <= childs; i++) {
                    var age = parseInt($('.child_age.age' + i, _objs.$ages).val());
                    people += age + ' ' + get_noun(age, 'год', 'года', 'лет');
                    if (i != childs) {
                        people += ', ';
                    }
                }

                people += ')';
            }
            $('.full .people', _objs.$info).text(people);

            var caption = $('.caption', _objs.$info);
            var count = _objs.$results.find(".offer-tour").length;
            caption.text('Найдено более ' + count + ' ' + get_noun(count, 'тура', 'туров', 'туров'));

            _methods.scrollToResult();
        },

        getParams: function () {
            var stars = [];

            var removeHotelsTypes = true;
            _objs.$hotel_types.each(function () {
                if ($(this).prop('checked') && $(this).parent().hasClass('checked')) {
                    stars.push($(this).val());
                }
                else {
                    removeHotelsTypes = false
                }

            });

            var meals = [];

            var removeMealsTypes = true;

            _objs.$meal_types.each(function () {
                if ($(this).prop('checked') && $(this).parent().hasClass('checked')) {
                    meals.push($(this).val());
                }
                else {
                    removeMealsTypes = false
                }
            });

            if (removeHotelsTypes) {
                stars = null;
            }

            if (removeMealsTypes) {
                meals = null;
            }

            var ages = [];

            _objs.$child_ages.each(function () {
                if ($(this).next().is(":visible")) {
                    ages.push($(this).val());
                }
            });

            var hotels = [];

            $('input[type=checkbox]', '.hotels').each(function () {
                if ($(this).attr('data-value') > 0 && $(this).prop('checked')) {
                    hotels.push($(this).attr('data-value'));
                }
            });

            // Если препоиск с отелем
            if (_options['presearch'] == 1 && _options['hotel_id'] && _options['hotel_id'].length > 0) {
                hotels = _options['hotel_id'];
            }

            var resort_id = _objs.$curorts.val();

            // Проверка на наличие независимых курортов
            if (_vals.independent_curorts != null) {
                resort_id = _vals.independent_curorts;
            }

            // Проверка на наличие принудительно-выбранного независимого курорта
            if (_objs.$curorts.val() && _vals.independent_curorts != null && _vals.choice_curort != null) {
                resort_id = _vals.choice_curort;
            }

            return {
                SID: _SID || 'null',
                departure_id: _vals.departure,
                turoperator_id: _objs.$turoperators.val(),
                destination_id: _vals.destination,
                adult_num: _objs.$adults.val(),
                child_num: _objs.$childs.val(),
                child_ages: ages,
                arrivalDateFrom: _objs.$date_from.val(),
                arrivalDateTo: _objs.$date_to.val(),
//        elasticSearch  : _objs.$elastic.attr( 'checked' ),
//        garantee       : _objs.$garantee.attr( 'checked' ),
//        nonstop        : _objs.$nonstop.attr( 'checked' ),
//        ticket         : _objs.$ticket.attr( 'checked' ),
                nonstop: true,
                ticket: true,
                nightsStart: _objs.$nights_start.val(),
                nightsEnd: _objs.$nights_end.val(),
                hotelStars: stars,
                hotels: hotels,
                resort_id: resort_id,
                mealType: meals,
                minCost: _minCost,
                maxCost: _maxCost,
                valute: _methods.getSourceCurrency(),
                offer_currency: _options['offer_currency'],
                source: 'search_online_page' + (_options.presearch_type ? '_' + _options.presearch_type : '')
            };
        },

        /**
         * Позволяет динамически получить валюту, если source_currency передан как массив значений
         * @author Maksim Borisov <maksim.i.borisov@gmail.com> 22.05.18 14:22
         * @returns int
         */
        getSourceCurrency: function() {
            return typeof _options['source_currency'] === 'string' ?
                _options['source_currency'] :
                _options['source_currency'][_vals.destination];
        },

        afterFillResultTable: function (data) {
            var all = data.additional.all;
            var length = data.data.length;
            var SID = data.additional.SID;

            // Заполняем поле SID
            if (_options.show_sid) {
                _objs.$sid.text('SID: ' + SID);
            }

            // Если поиск не закончился, то продолжаем его
            if (all != 1) {
                _methods.showSearchProcessInfo(SID);
            }
            // Поиск закончился
            else {
                _methods.hideLoader();
                _process_search = false;
                _is_scrolled = false;
                _SID = null;

                // Если результатов поиска нет
                if (length == 0) {
                    _methods.showSearchEndEmptyInfo();
                    _objs.$info.show();
                    return;
                }
                // Если поиск закончен и возвращены результаты
                else {
                    _methods.showSearchEndInfo();
                }
            }

            _methods.scrollToResult();
            _objs.$results.show();
            _objs.$info.show();

            $('span.q, a.touroperator').tipsy({delayIn: 80});

        },

        showPortionResult: function () {
            var params = _methods.getParams();

            _myAjax({
                url: "/curl",
                type: "POST",
                dataType: 'json',
                data: {param: params},
                async: true,
                cache: false,
                success: function (data) {
                    _options.currency_usd = data.currency.USD;
                    _options.currency_eur = data.currency.EUR;

                    if (data.additional && data.additional.SID) {
                        _SID = data.additional.SID;
                    }

                    if (data.additional) {
                        _methods.showWarning(data.additional)
                    }

                    var i = 0;
                    var length = data.data.length;
                    while (i < length) {
                        if (!_offers[data.data[i].offer_id]) {
                            _methods.putRow($(_methods.renderRow(data.data[i])));
                        }
                        i++;
                    }

                    // Приводим внешний вид в соответствии с результатами, если надо - ставим таймер на продолжение поиска,
                    // пересчитываем и выводим пагинатор
                    _methods.afterFillResultTable(data);
                },
                error(date){
                    console.log(date.responseText);
                }
            });
        },

        showResult: function () {
            _offers = {};

            // Если поиск не продолжение поиска, то прячем результаты, инфу и выводим лоадер
            _methods.showLoader();

            _objs.$warning.hide();

            var $captionText = 'Честные цены: топливные сборы включены в стоимость!';

            // Если поиск для сотрудников
            if (!_options.order_url) {
                $('.no_inside').css('display', 'none');
                $captionText = 'Выполняется поиск туров';
            }

            $('.caption', _objs.$info).text($captionText);

            $('.search_progress', _objs.$info).show();
            $('.full', _objs.$info).hide();
            $('.empty', _objs.$info).hide();
            _objs.$info.show();
            _methods.scrollToResult(true);
            _objs.$results.hide();

            // Получаем список параметров для поиска
            var params = _methods.getParams();

            _process_search = true;

            _myAjax({
                url: '/curl',
                type: "POST",
                dataType: 'json',
                data: {urlm : '/search/', param : params},
                async: true,
                cache: false,
                success: function (data) {
                    console.log(data.status);
                    if (data.status === 'error'){
                        swal("Что-то пошло не так! Проверьте все поля...",'',"error");
                        $('a.reset').trigger('click');
                        return;
                    }

                    _options.currency_usd = data.currency.USD;
                    _options.currency_eur = data.currency.EUR;

                    if (data.additional && data.additional.SID) {
                        _SID = data.additional.SID;
                    }

                    if (data.additional) {
                        _methods.showWarning(data.additional)
                    }

                    _objs.$results.find(".offer-tour").remove();
                    _objs.$results.append(_methods.renderHeader());

                    // Заполняем таблицу результатами

                    $(data.data).each(function () {
                        _methods.putRow($(_methods.renderRow(this)));
                    });

                    _methods.afterFillResultTable(data);
                },
                error(date){
                    console.log(date.responseText);
                }

            });
        },

        getDate: function (php_date) {
            var date = new Date(php_date);
            return ('0' + date.getDate()).slice(-2) + '.' + ('0' + (date.getMonth() + 1)).slice(-2) + '.' +
                date.getFullYear();
        },

        enableAllTheseDays: function (date) {

            if (_vals.dates != null && (date - _current_date) != 0) {
                if ($.inArray(_methods.getDate(date), _vals.dates) != -1) {
                    return false;
                }
                //}
            }
            return true;
        },



    };

    // public methods
    return {

        init: function (options) {
            $wrapper = $('.otour_search');
            _options = {
                show_sid: false,
                days_offset: 14,
                show_touroperator: true,
                discount_template: '%original_price%р.',
                render_price: false,
                order_url: false,
                current_region: false,
                currency_usd: 0,
                currency_eur: 0,
                domain: false,
                search_domain: false,
                price_decode: false,
                independent_resorts: false,
                one_resort_countries: false,
                buy_urls: {},
                rememberDate: false,
                rememberTO: false,
                can_bgt: false,
                presearch_type: false,
                hotel_id: false,
                referrer: false,
                bgt_country: false
            };

            $.extend(_options, options);

            // Если поиск для сотрудников
            if (_options.can_bgt) {
                $('.no_inside').css('display', 'none');
            } else {
                $('.switch', $wrapper).css('display', 'none');
            }

            _domain =  _options.search_domain;

            _current_date = new Date();
            _current_date.setHours(0, 0, 0, 0);

            _objs.$departures = $('select.departures', $wrapper);
            _objs.$destinations = $('select.destinations', $wrapper);
            _objs.$turoperators = $('select.turoperators', $wrapper);
            _objs.$dates = $('.b-text.datepicker', $wrapper);
            _objs.$date_from = $('.b-text.datepicker-from', $wrapper);
            _objs.$date_to = $('.b-text.datepicker-to', $wrapper);

            _objs.$nights_start = $('.nights_start', $wrapper);
            _objs.$nights_end = $('.nights_end', $wrapper);
            _objs.$hotels = $('select.hotels', $wrapper);
            _objs.$curorts = $('select.curorts', $wrapper);
            _objs.$submit = $('.b-button.submit', $wrapper);
            _objs.$cancel = $('.b-button.cancel', $wrapper);
            _objs.$elastic = $('input[name="elastic"]', $wrapper);
            _objs.$garantee = $('input[name="garantee"]', $wrapper);
//      _objs.$nonstop = $( 'input[name="nonstop"]', $wrapper );
//      _objs.$ticket = $( 'input[name="ticket"]', $wrapper );
            _objs.$adults = $('.adults', $wrapper);
            _objs.$childs = $('.childs', $wrapper);
            _objs.$results = $('.results', $wrapper);
            _objs.$hotel_types = $('input[name="hotel-type\[\]"]', $wrapper);
            _objs.$meal_types = $('input[name="meal-type\[\]"]', $wrapper);
            _objs.$child_ages = $('select[name="child_ages\[\]"]', $wrapper);
            _objs.$child_ages_wr = $('.b-column.child_age .wrapper', $wrapper);
            _objs.$additional = $('.additional', $wrapper);
            _objs.$info = $('.info', $wrapper);
            _objs.$warning = $('.warning', $wrapper);
            _objs.$sid = $('.sid', $wrapper);
            _objs.$childAgeWrapper = $('div.b-column.half.child_age');
            _objs.$discount_banner = $('.discount-banner', $wrapper);

            _objs.$cost_origin_btn = $('.cost_origin', $wrapper);
            _objs.$cost_rounded_btn = $('.cost_rounded', $wrapper);

            _vals.region = _options['current_region'];

            _objs.$departures.bind('change', _handlers.departures);
            _objs.$destinations.bind('change', _handlers.destinations);
            //_objs.$destinations.bind( 'change', _handlers.refreshFields );
            _objs.$destinations.bind('change', _handlers.rememberFields);
            _objs.$turoperators.bind('change', _handlers.turoperators);
            _objs.$curorts.bind('change', _handlers.curorts);
            _objs.$submit.bind('click', _handlers.submit);
            _objs.$cancel.bind('click', _handlers.cancel);
            _objs.$childs.bind('change', _handlers.childs);
            _objs.$hotel_types.bind('ifToggled', _handlers.change_hotels);

            _objs.$cost_origin_btn.bind('click', _handlers.changeCostOrigin);
            _objs.$cost_rounded_btn.bind('click', _handlers.changeCostRounded);

            _objs.data_for_ajax = [];



            _objs.$date_from.datepicker({
                minDate: new Date(),
                startDate:   new Date(),
                todayButton: true,
                onShow: function(dp, animationCompleted){
                    if (!animationCompleted) {

                        var datepicker = $('.b-text.datepicker-from').datepicker().data('datepicker');

                        datepicker.update({
                            startDate:   new Date(),
                            onRenderCell: function (date) {
                                return {
                                    classes: 'my-class',
                                    disabled:  _methods.enableAllTheseDays(date)
                                }
                            }
                        });
                    }
                },
                autoClose:true,
                onHide: function (selectedDate) {
                    arr = _objs.$date_from.val().split('.');
                    date1 = new Date(arr[2], arr[1]-1, arr[0]);
                    timestemp1 = Date.parse(date1);

                    arr = _objs.$date_to.val().split('.');
                    date2 = new Date(arr[2], arr[1]-1, arr[0]);
                    timestemp2 = Date.parse(date2);

                    if (timestemp1 > timestemp2) {
                        _objs.$date_to.val(_objs.$date_from.val());
                    }

                    if (timestemp2 - timestemp1 > _maxInterval * 86400 * 1000) {
                        swal('Максимальный интервал ' + _maxInterval + ' дней','',"error");

                        newTimeStamp = timestemp1 + _maxInterval * 86400 * 1000;
                        newValue = new Date(newTimeStamp);

                        month = newValue.getMonth() + 1;

                        if (month < 10) {
                            month = '0' + month;
                        }

                        day = newValue.getDate();

                        if (day < 10) {
                            day = '0' + day;
                        }

                        date = day + '.' + month + '.' + newValue.getFullYear();


                        _objs.$date_to.data('datepicker').selectDate(new Date(newTimeStamp));

                        _objs.$date_to.val(date);


                    }

                }
            });
            _objs.$date_to.datepicker({
                minDate: new Date(),
                startDate:  new Date(),
                autoClose:true,
                onHide: function (selectedDate) {
                    arr = _objs.$date_from.val().split('.');
                    date1 = new Date(arr[2], arr[1]-1, arr[0]);
                    timestemp1 = Date.parse(date1);

                    arr = _objs.$date_to.val().split('.');
                    date2 = new Date(arr[2], arr[1]-1, arr[0]);
                    timestemp2 = Date.parse(date2);

                    if (timestemp1 > timestemp2) {
                        _objs.$date_from.val(_objs.$date_to.val());
                    }

                    if (timestemp2 - timestemp1 > _maxInterval * 86400 * 1000) {
                        swal('Максимальный интервал ' + _maxInterval + ' дней','',"error");

                        newTimeStamp = timestemp2 - _maxInterval * 86400 * 1000;
                        newValue = new Date(newTimeStamp);

                        month = newValue.getMonth() + 1;

                        if (month < 10) {
                            month = '0' + month;
                        }

                        day = newValue.getDate();

                        if (day < 10) {
                            day = '0' + day;
                        }

                        date = day + '.' + month + '.' + newValue.getFullYear();

                        _objs.$date_from.data('datepicker').selectDate(new Date(newTimeStamp));

                        _objs.$date_from.val(date);
                    }
                }
            });

            _vals.current_date = new Date();
            _vals.current_date.setDate(_vals.current_date.getDate() + _options.days_offset);
            _vals.current_date.setHours(0, 0, 0);

            $wrapper.show();

            _fills.directions();

            $(document).on('click',".buyTour",function(event){
                event.preventDefault();
                var searchData = $(this).attr('data-search-data');
                var searchPrice = $(this).attr('data-search-price');
                _objs.data_for_ajax = JSON.parse( searchData );
                console.log( _objs.data_for_ajax );
                var urlImg = _objs.data_for_ajax.residenses.hotel_image.replace(/(^\/\/.*)(\/i\/p\/)(.*)/ig,"$1/i/im/$3");
                var date = new Date(_objs.data_for_ajax.date);
                var allData = JSON.stringify(_objs.data_for_ajax);
                var from = $(".departures span").text();

                $.magnificPopup.open({
                    items: {
                        src: '<form class="zoom-anim-dialog-info order-popup"><h4>Заказ тура</h4> '+
                            '<a class="order_img" href="//hotels.sletat.ru/?id=' + _objs.data_for_ajax.residenses.hotel_id + '" target="_blank"><img src="'+  urlImg + '" alt=""></a>'+
                            '<div class="date-tour"><div><span>Дата вылета: </span>' + ('0' + date.getDate()).slice(-2)
                            + '.' + ('0' + (date.getMonth() + 1)).slice(-2)
                            + '.' + date.getFullYear().toString().slice(-2)
                            +
                            '</div>'
                            +
                            '<div class="night-tour"><span>Вылет с: </span>' + from + '</div>'
                            +
                            '<div class="night-tour"><span>Ночей: </span>' + _objs.data_for_ajax.nights + '</div>'
                            +
                            '<div><span>Взрослых: </span>' + _objs.data_for_ajax.adults +'</div>'
                            +
                            '<div><span>Детей: </span>' + _objs.data_for_ajax.kids +'</div>'
                            +
                            '<div><span>Гостиница: </span><a class="hotel_name b-markdown gagarin" href="//hotels.sletat.ru/?id=' + _objs.data_for_ajax.residenses.hotel_id + '" target="_blank">'
                            + _objs.data_for_ajax.residenses.hotel_name + ' ' + _objs.data_for_ajax.residenses.star_name + '</a></div>'
                            +
                            '<div class="nomer-razme"><span>Номер : </span>' + _objs.data_for_ajax.residenses.o_room_name + '<i> '+ _objs.data_for_ajax.residenses.ht_pl_description+'</i></div>'
                            +
                            '<div><span>Курорт: </span>' + _objs.data_for_ajax.curort +'</div>'
                            +
                            '<div><span>Цена</span>'+searchPrice+'</div>'
                            +
                            '</div>'
                            +
                            "<input name='dataOrder' type='hidden' value='"+ allData+ "'>"
                            +
                            "<input name='from' type='hidden' value='"+ from+ "'>"
                            +
                            '<div class="btextlockOrderButton"><input type="text" name="name" placeholder="Ваше имя"><input type="text" name="tel" placeholder="Ваша почта"><input type="text" name="email" placeholder="Ваш телефон"><input type="submit" class="buyButton" href="#" value="заказть"></input></div>'

                            +'</form>', // can be a HTML string, jQuery object, or CSS selector
                        type: 'inline',
                        preloader: false,
                        mainClass: 'my-mfp-zoom-in',
                        removalDelay: 300,
                    }
                });
                console.log(_objs.data_for_ajax);
            });

            $(document).on('submit',".order-popup",function(event){
                event.preventDefault();

                var form = $(this).serialize();
                var that = this;
                $.ajax({
                    type:'post',
                    url: "/order/tour/email",
                    data: form,
                    beforeSend: function() {
                        $(".mfp-close").trigger("click");
                        $(".sendForm").fadeIn(400);
                        $(".controll_input span").removeClass('form-holder')
                        $(".controll_input input").removeClass('valid')
                        $(that)[0].reset();
                    },
                    success: function(response){
                        var text =  response === 'ok' ? "Спасибо. Заявка принята. <br> Мы скоро перезвоним!" :'Ошибка отправки!';

                        $('#answers span').html(text);
                        $(".sendForm").fadeOut(400);
                        $('#answers').fadeIn(400).delay(2000).fadeOut(1000);
                        var magnificPopup = $.magnificPopup.instance;
                        // save instance in magnificPopup variable
                        magnificPopup.close();
                        console.log(data);
                    },
                    error: function(res){
                        $(".sendForm").fadeOut(400);
                        $('#answers span').html("Что-то пошло не так! <br> Пропробуйте нам перезвонить");
                        $('#answers').fadeIn(400).delay(2000).fadeOut(1000);
                        var magnificPopup = $.magnificPopup.instance;
                        // save instance in magnificPopup variable
                        magnificPopup.close();

                    }
                });
            });

        }



    }

}();


