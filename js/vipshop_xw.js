QZFL.dragdrop = {
    dragdropPool: {},
    dragTempId: 0,
    _scrollRange: 0,
    dragGhostStyle: "cursor:move;position:absolute;border:1px solid #06c;background:#6cf;z-index:1000;color:#003;overflow:hidden",
    registerDragdropHandler: function(d, f, c) {
        var a = QZFL.event;
        var g = QZFL.dom.get(d);
        var e = QZFL.dom.get(f);
        c = c || {
            range: [null, null, null, null],
            ghost: 0
        };
        if (!g) {
            return null
        }
        var b = e || g;
        if (!g.id) {
            g.id = "dragdrop_" + this.dragTempId;
            QZFL.dragdrop.dragTempId++
        }
        g.style.cursor = c.cursor || "move";
        this.dragdropPool[g.id] = new this.eventController();
        a.on(g, "mousedown", a.bind(this, this.startDrag), [g.id, b, c]);
        return this.dragdropPool[g.id]
    },
    unRegisterDragdropHandler: function(b) {
        var c = QZFL.dom.get(b);
        var a = QZFL.event;
        if (!c) {
            return null
        }
        c.style.cursor = "default";
        delete this.dragdropPool[c.id];
        a.removeEvent(c, "mousedown")
    },
    startDrag: function(p, a, s, d) {
        var h = QZFL.dom;
        var f = QZFL.event;
        if (f.getButton() != 0 || f.getTarget().noDrag) {
            return
        }
        if (d.ignoreTagName == f.getTarget().tagName || f.getTarget().noDragdrop) {
            return
        }
        var l = h.getSize(s);
        var c = h.getStyle(s, "position");
        var n = c == "absolute" || c == "fixed";
        var b = null,
        o = false;
        var j = null;
        if (d.rangeElement) {
            var i = d.rangeElement;
            var m = QZFL.dom.get(i[0]);
            var g = QZFL.dom.getSize(m);
            var q = i[1];
            if (!i[2]) {
                d.range = [q[0] ? 0: null, q[1] ? 0: null, q[2] ? g[1] : null, q[3] ? g[0] : null]
            } else {
                var k = QZFL.dom.getXY(m);
                d.range = [q[0] ? k[1] : null, q[1] ? k[0] : null, q[2] ? k[1] + g[1] : null, q[3] ? k[0] + g[0] : null]
            }
        }
        if (!n || d.ghost) {
            j = n ? [parseInt(s.style.left), parseInt(s.style.top)] : h.getXY(s);
            b = h.createElementIn("div", n ? s.parentNode: document.body, false, {
                style: d.ghostStyle || this.dragGhostStyle
            });
            b.id = "dragGhost";
            h.setStyle(b, "opacity", "0.8");
            setTimeout(function() {
                h.setStyle(s, "opacity", "0.5")
            },
            0);
            if (d.ghostSize) {
                h.setSize(b, d.ghostSize[0], d.ghostSize[1]);
                j = [p.clientX + QZFL.dom.getScrollLeft() - 30, p.clientY + QZFL.dom.getScrollTop() - 20]
            } else {
                h.setSize(b, l[0] - 2, l[1] - 2)
            }
            h.setXY(b, j[0], j[1]);
            o = true
        } else {
            j = [parseInt(h.getStyle(s, "left")), parseInt(h.getStyle(s, "top"))]
        }
        var r = b || s;
        this.currentDragCache = {
            size: l,
            xy: j,
            mXY: j,
            dragTarget: r,
            target: s,
            x: p.clientX - parseInt(j[0]),
            y: p.clientY - parseInt(j[1]),
            ghost: b,
            hasGhost: o,
            isAbsolute: n,
            options: d,
            scrollRangeTop: QZFL.dragdrop._scrollRange,
            scrollRangeBottom: QZFL.dom.getClientHeight() - QZFL.dragdrop._scrollRange,
            maxScrollRange: Math.max(QZFL.dom.getScrollHeight() - QZFL.dom.getClientHeight(), 0)
        };
        f.on(document, "mousemove", f.bind(this, this.doDrag), [a, this.currentDragCache, d]);
        f.on(document, "mouseup", f.bind(this, this.endDrag), [a, this.currentDragCache, d]);
        this.dragdropPool[a].onStartDrag.apply(null, [p, a, this.currentDragCache, d]);
        f.preventDefault()
    },
    doDrag: function(h, d, b, a) {
        var i = {};
        if (a.autoScroll) {
            if (h.clientY < b.scrollRangeTop) {
                if (!QZFL.dragdrop._scrollTop) {
                    QZFL.dragdrop._stopScroll();
                    QZFL.dragdrop._scrollTimer = setTimeout(function() {
                        QZFL.dragdrop._doScroll(true, b)
                    },
                    200)
                }
            } else {
                if (h.clientY > b.scrollRangeBottom) {
                    if (!QZFL.dragdrop._scrollBottom) {
                        QZFL.dragdrop._stopScroll();
                        QZFL.dragdrop._scrollTimer = setTimeout(function() {
                            QZFL.dragdrop._doScroll(false, b)
                        },
                        200)
                    }
                } else {
                    QZFL.dragdrop._stopScroll()
                }
            }
        }
        var g = h.clientX - b.x;
        var c = h.clientY - b.y;
        var f = this._countXY(g, c, b.size, a);
        g = f.x;
        c = f.y;
        QZFL.dom.setXY(b.dragTarget, g, c);
        b.mXY = [g, c];
        this.dragdropPool[d].onDoDrag.apply(null, [h, d, b, a]);
        if (QZFL.userAgent.ie) {
            document.body.setCapture()
        } else {
            if (window.captureEvents) {
                window.captureEvents(Event.MOUSEMOVE | Event.MOUSEUP)
            }
        }
        QZFL.event.preventDefault()
    },
    endDrag: function(b, a, f, j) {
        var c = QZFL.dom;
        if (f.hasGhost) {
            QZFL.dom.removeElement(f.dragTarget);
            var h = f.target;
            setTimeout(function() {
                QZFL.dom.setStyle(h, "opacity", "1");
                h = null
            },
            0);
            if (f.isAbsolute) {
                var g = parseInt(c.getStyle(f.target, "left")) + (f.mXY[0] - f.xy[0]);
                var d = parseInt(c.getStyle(f.target, "top")) + (f.mXY[1] - f.xy[1]);
                var i = this._countXY(g, d, f.size, j);
                QZFL.dom.setXY(f.target, i.x, i.y)
            }
        }
        QZFL.event.removeEvent(document, "mousemove");
        QZFL.event.removeEvent(document, "mouseup");
        this.dragdropPool[a].onEndDrag.apply(null, [b, a, f, j]);
        f = null;
        QZFL.dragdrop._stopScroll();
        if (QZFL.userAgent.ie) {
            document.body.releaseCapture()
        } else {
            if (window.releaseEvents) {
                window.releaseEvents(Event.MOUSEMOVE | Event.MOUSEUP)
            }
        }
    },
    _doScroll: function(c, a) {
        step = c ? -15: 15;
        var b = QZFL.dom.getScrollTop();
        if (c && b + step < 0) {
            step = 0
        }
        if (!c && b + step > a.maxScrollRange) {
            step = 0
        }
        QZFL.dom.setScrollTop(b + step);
        a.y = a.y - step;
        QZFL.dragdrop._scrollTop = c;
        QZFL.dragdrop._scrollBottom = !c;
        QZFL.dragdrop._scrollTimer = setTimeout(function() {
            QZFL.dragdrop._doScroll(c, a)
        },
        16)
    },
    _stopScroll: function() {
        QZFL.dragdrop._scrollTop = QZFL.dragdrop._scrollBottom = false;
        clearTimeout(QZFL.dragdrop._scrollTimer)
    },
    _countXY: function(f, d, l, m) {
        var e = {
            x: f,
            y: d
        };
        if (m.x) {
            e.x = parseInt(e.x / m.x, 10) * m.x + (e.x % m.x < m.x / 2 ? 0: m.x)
        }
        if (m.y) {
            e.y = parseInt(e.y / m.y, 10) * m.y + (e.y % m.y < m.y / 2 ? 0: m.y)
        }
        if (m.range) {
            var h = m.range;
            var c = 0,
            b = 0;
            while (c < h.length && b < 2) {
                if (typeof h[c] != "number") {
                    c++;
                    continue
                }
                var a = c % 2 ? "x": "y";
                var g = e[a];
                e[a] = c < 2 ? Math.max(e[a], h[c]) : Math.min(e[a], h[c] - l[(c + 1) % 2]);
                if (e[a] != g) {
                    b++
                }
                c++
            }
        }
        return e
    }
};
QZFL.dragdrop.eventController = function() {
    this.onStartDrag = QZFL.emptyFn;
    this.onDoDrag = QZFL.emptyFn;
    this.onEndDrag = QZFL.emptyFn
};
QZFL.element.extendFn({
    dragdrop: function(c, b) {
        var a = [];
        this.each(function() {
            a.push(QZFL.dragdrop.registerDragdropHandler(this, c, b))
        });
        return a
    },
    unDragdrop: function(b, a) {
        this.each(function() {
            _arr.push(QZFL.dragdrop.unRegisterDragdropHandler(this))
        })
    }
});
QZFL.dialog = {
    items: [],
    lastFocus: null,
    tween: true,
    create: function(g, e, d, a, c, h) {
        var f = this.items;
        f.push(new QZFL.DialogHandler(f.length, h, c));
        var b = f[f.length - 1];
        b.init(d || 300, a || 200);
        b.fillTitle(g || "无标题");
        b.fillContent(e || "");
        return b
    },
    createBorderNone: function(d, c, a) {
        var e = this.items;
        var b;
        e.push(b = (new QZFL.DialogHandler(e.length, true)));
        b.init(c || 300, a || 200, true);
        b.fillContent(d || "");
        return b
    }
};
QZFL.DialogHandler = function(d, b, a) {
    this._id = d;
    this._isIE6 = (QZFL.userAgent.ie && QZFL.userAgent.ie < 7);
    this.id = "dialog_" + d;
    this.mainId = "dialog_main_" + d;
    this.headId = "dialog_head_" + d;
    this.titleId = "dialog_title_" + d;
    this.closeId = "dialog_button_" + d;
    this.contentId = "dialog_content_" + d;
    this.frameId = "dialog_frame_" + d;
    this.useTween = (typeof(a) != "boolean") ? QZFL.dialog.tween: a;
    this.zIndex = 6000 + this._id;
    this.iconClass = "none";
    this.onBeforeUnload = function() {
        return true
    };
    this.onUnload = QZFL.emptyFn;
    this.isFocus = false;
    var c = ['<div id="', this.mainId, '" class="', (b ? "": "layer_global_main"), '">', "<div id=", this.headId, ' class="', (b ? "none": "layer_global_title"), '">', '<h3><span class="jian">&gt;</span><span id=', this.titleId, " ></span></h3>", '<button id="', this.closeId, '" title="关闭"><span class="none">&#9587;</span></button>', "</div>", '<div id="', this.contentId, '" class="', (b ? "": "layer_global_cont"), '"></div>', "</div>"];
    if (this._isIE6 && !b) {
        c.push('<iframe id="' + this.frameId + '" style="position:absolute;width:100%;top:0px;z-index:-1;"></iframe>')
    }
    this.temlate = c.join("")
};
QZFL.DialogHandler.prototype.init = function(width, height, isNoneBerder) {
    this.dialog = document.createElement("div");
    this.dialog.id = this.id;
    var _l = (QZFL.dom.getClientWidth() - width) / 2 + QZFL.dom.getScrollLeft();
    var _t = Math.max((QZFL.dom.getClientHeight() - height) / 2 + QZFL.dom.getScrollTop(), 0);
    with(this.dialog) {
        if (!isNoneBerder) {
            className = "layer_global"
        }
        style.position = "absolute";
        style.left = _l + "px";
        style.top = _t + "px";
        style.zIndex = this.zIndex;
        innerHTML = this.temlate
    }
    document.body.appendChild(this.dialog);
    this.dialogClose = QZFL.dom.get(this.closeId);
    var o = this;
    QZFL.event.addEvent(this.dialog, "mousedown", QZFL.event.bind(o, o.focus));
    QZFL.event.addEvent(this.dialogClose, "click",
    function() {
        var t = QZFL.dialog.items[o._id];
        if (t) {
            t.unload()
        }
    });
    if (QZFL.dragdrop) {
        QZFL.dragdrop.registerDragdropHandler(QZFL.dom.get(this.headId), QZFL.dom.get(this.id), {
            range: [0, null, null, null],
            ghost: 0
        })
    }
    this.setSize(width, height);
    if (this.useTween && QZFL.Tween) {
        QZFL.dom.setStyle(this.dialog, "opacity", 0);
        var tween1 = new QZFL.Tween(this.dialog, "top", QZFL.transitions.regularEaseIn, _t - 30 + "px", _t + "px", 0.3);
        tween1.onMotionChange = function() {
            QZFL.dom.setStyle(o.dialog, "opacity", this.getPercent() / 100)
        };
        tween1.onMotionStop = function() {
            QZFL.dom.setStyle(o.dialog, "opacity", 1);
            tween1 = null
        };
        tween1.start()
    } else {}
};
QZFL.DialogHandler.prototype.focus = function() {
    if (this.isFocus) {
        return
    }
    this.dialog.style.zIndex = this.zIndex + 3000;
    if (QZFL.dialog.lastFocus) {
        QZFL.dialog.lastFocus.blur()
    }
    this.isFocus = true;
    QZFL.dialog.lastFocus = this
};
QZFL.DialogHandler.prototype.blur = function() {
    this.isFocus = false;
    this.dialog.style.zIndex = this.zIndex
};
QZFL.DialogHandler.prototype.getZIndex = function() {
    return this.dialog.style.zIndex
};
QZFL.DialogHandler.prototype.fillTitle = function(b) {
    var a = QZFL.dom.get(this.titleId);
    a.innerHTML = b
};
QZFL.DialogHandler.prototype.fillContent = function(b) {
    var a = QZFL.dom.get(this.contentId);
    a.innerHTML = b
};
QZFL.DialogHandler.prototype.setSize = function(d, a) {
    var c = QZFL.dom.get(this.id);
    c.style.width = d + "px";
    var b = QZFL.dom.get(this.contentId);
    a = a - 28 < 0 ? 50: a - 28;
    b.style[QZFL.userAgent.ie < 7 ? "height": "minHeight"] = a + "px";
    if (this._isIE6) {
        var e = QZFL.dom.getSize(QZFL.dom.get(this.id)),
        f = QZFL.dom.get(this.frameId);
        QZFL.dom.setSize(f, e[0], e[1])
    }
};
QZFL.DialogHandler.prototype.unload = function() {
    if (!this.onBeforeUnload()) {
        return
    }
    var b = this;
    if (this.useTween && QZFL.Tween) {
        var a = new QZFL.Tween(this.dialog, "opacity", QZFL.transitions.regularEaseIn, 1, 0, 0.2);
        a.onMotionStop = function() {
            b._unload();
            a = null
        };
        a.start()
    } else {
        this._unload()
    }
};
QZFL.DialogHandler.prototype._unload = function() {
    this.onUnload();
    if (QZFL.dragdrop) {
        QZFL.dragdrop.unRegisterDragdropHandler(QZFL.dom.get(this.headId))
    }
    this.dialog.innerHTML = "";
    QZFL.dom.removeElement(this.dialog);
    delete QZFL.dialog.items[this._id]
}; (function() {
    function a(f, d) {
        var b = {
            title: "提 示",
            subTitle: "",
            content: "",
            tips: "",
            tips2: "",
            yes: "确 定",
            no: "",
            width: 410,
            height: 200,
            useTween: false,
            onYes: false,
            onNo: false,
            className: "tips"
        };
        QZFL.object.extend(b, f);
        QZFL.object.extend(b, d);
        QZFL.object.each(QZFL.dialog.items,
        function(g) {
            try {
                g.unload()
            } catch(h) {}
        });
        var c = '<div class="mod ' + b.className + '"><h4 class="layer_global_tit"' + (b.subTitle ? "": ' style="display:none"') + ">" + b.subTitle + "</h4><p>" + b.content + '</p></div><p class="tips_over strong"' + (b.tips2 ? "": ' style="display:none"') + ">" + b.tips2 + '</p><div class="wrap_tips"><p class="tips_text">' + b.tips + '</p><div class="bt_wrap">' + (b.yes ? '<a href="javascript:;" id="dialog_button_yes" class="bt_small"><strong>' + b.yes + "</strong></a>": "") + (b.no ? '<a href="javascript:;" id="dialog_button_no" class="bt_small"><strong>' + b.no + "</strong></a>": "") + "</div></div>";
        var e = QZFL.dialog.create(b.title, c, b.width, b.height);
        e.onYes = b.onYes ||
        function() {
            e.unload()
        };
        e.onNo = b.onNo ||
        function() {
            e.unload()
        };
        $e("#dialog_button_yes").bind("click",
        function() {
            e.onYes()
        });
        $e("#dialog_button_no").bind("click",
        function() {
            e.onNo()
        });
        $e("#" + e.id).addClass("dialog");
        return e
    }
    QZFL.object.extend(QZFL.dialog, {
        tips: function(b) {
            return a({
                className: "tips"
            },
            b)
        },
        error: function(b) {
            return a({
                className: "error"
            },
            b)
        },
        success: function(b) {
            return a({
                className: "success"
            },
            b)
        },
        confirm: function(b) {
            return a({
                className: "confirm",
                no: "取 消"
            },
            b)
        }
    })
})();
QZFL.maskLayout = {
    count: 0,
    items: {},
    create: function(b, d) {
        this.count++;
        b = b || 5000;
        d = d || document;
        var a = QZFL.dom.createElementIn("div", d.body, false, {
            className: "qz_mask_layout"
        });
        var c = (QZFL.userAgent.ie && QZFL.userAgent.ie < 7) ? Math.max(d.documentElement.scrollHeight, d.body.scrollHeight) : QZFL.dom.getClientHeight(d);
        a.style.zIndex = b;
        a.style.height = c + "px";
        a.unselectable = "on";
        this.items[this.count] = a;
        return this.count
    },
    remove: function(a) {
        QZFL.dom.removeElement(this.items[a]);
        delete this.items[a]
    }
};
var QZFL = QZFL || {};
QZFL.lazyLoad = (function() {
    var c = 0,
    a = [],
    d = [],
    g = 0,
    l = "http://imgcache.qq.com/club/vipshop/img/loading/default.gif",
    e = QZFL,
    h = e.css,
    f = e.event;
    function j() {
        if (c != 0) {
            return
        }
        c = setTimeout(k, 30)
    }
    function i(p) {
        var o = document.documentElement.scrollTop || document.body.scrollTop;
        var n = o + document.documentElement.clientHeight;
        var q = p.offsetTop;
        while (p = p.offsetParent) {
            q += p.offsetTop
        }
        return q <= n
    }
    function k() {
        if (g < 1) {
            f.removeEvent(window, "scroll", j);
            f.removeEvent(window, "resize", j);
            return
        }
        for (var o = 0, n = a.length; o < n; o++) {
            if (!a[o]) {
                continue
            }
            if (i(a[o])) {
                a[o].src = a[o].getAttribute("init_src");
                delete a[o];
                g--
            }
        }
        c = 0
    }
    function m(p) {
        if (!p) {
            p = ["img", "iframe"]
        }
        for (var t = 0, r = p.length; t < r; t++) {
            var u = document.getElementsByTagName(p[t]);
            for (var v = 0, o = u.length; v < o; v++) {
                if (typeof u[v] == "object" && u[v].getAttribute("init_src")) {
                    a.push(u[v]);
                    g++
                } else {
                    if (typeof u[v] == "object" && u[v].getAttribute("hide_init_src")) {
                        d.push(u[v])
                    }
                }
                f.on(u[v], "load", (function(n) {
                    return function() {
                        if (n.src && n.src != e.lazyLoad.defaultImg) {
                            h.removeClassName(n, "loading_82_21");
                            h.removeClassName(n, "loading_36_35");
                            h.removeClassName(n, "loading_58_58");
                            h.removeClassName(n, "loading_16_16")
                        }
                    }
                })(u[v]))
            }
        }
        var q = new Image();
        var s = a.concat(d);
        f.on(q, "load", (function(n) {
            return function() {
                for (var x = 0, w = n.length; x < w; x++) {
                    if (!n[x].src) {
                        n[x].src = e.lazyLoad.defaultImg
                    }
                }
            }
        })(s));
        q.src = e.lazyLoad.defaultImg;
        f.on(window, "scroll", j);
        f.on(window, "resize", j);
        k()
    }
    function b(n) {
        var o = ((typeof n == "string") && e.element.get("#" + n + " img").elements) || (n.length && n) || e.dom.get(n).getElementsByTagName("img");
        e.object.each(o,
        function(p) {
            if (p.getAttribute && p.getAttribute("hide_init_src")) {
                p.src = p.getAttribute("hide_init_src");
                p.setAttribute("hide_init_src", "")
            }
        })
    }
    return {
        init: m,
        loadHideImg: b,
        defaultImg: l
    }
})();
QZFL.User = {
    info: {},
    f_info: {},
    callback: null,
    load: function(a) {
        if (!a.data) {
            return
        }
        if (a.callback) {
            QZFL.User.callback = a.callback
        }
        if (!QZFL.cookie.get("uin") || !QZFL.cookie.get("skey")) {
            QZFL.User.callback && QZFL.User.callback();
            return
        }
        new QZFL.JsLoader().load("http://d1.shop.qq.com/json.php?mod=userInfo&act=login&data=" + a.data + "&callback=QZFL.User.init", document, "utf-8")
    },
    init: function(d) {
        var e = d;
        if (e.nick_name) {
            e.nick_name = e.nick_name.replace(/ $/, "")
        }
        for (var b in e) {
            QZFL.User.info[b] = e[b]
        }
        if (QZFL.User.callback) {
            QZFL.User.callback(QZFL.User.info, QZFL.User.f_info)
        }
        if (QZFL.User.info.is_login && !QZFL.cookie.get("is_login_paipai")) {
            var c = "http://ptlogin2.paipai.com/jump?uin=" + QZFL.User.info.uin + "&skey=" + QZFL.cookie.get("skey") + "&u1=http%3A%2F%2Fmember.paipai.com%2Fcgi-bin%2Fptlogin%3Freturnurl%3Dhttp%3A%2F%2Fauction.paipai.com%2Fnull.shtml%26loginfrom%3D4";
            var a = document.createElement("iframe");
            a.style.display = "none";
            a.style.width = a.style.height = a.style.borderWidth = "0";
            a.src = c;
            document.body.appendChild(a);
            if (typeof a.onreadystatechange != "undefined") {
                a.onreadystatechange = function() {
                    QZFL.cookie.set("is_login_paipai", "1")
                }
            } else {
                QZFL.cookie.set("is_login_paipai", "1")
            }
        }
    },
    logout: function(b) {
        var a = new QZFL.FormSender("http://d1.shop.qq.com/json.php", "POST", {
            mod: "userInfo",
            act: "logout"
        },
        "utf-8");
        a.onSuccess = a.onError = function() {
            QZFL.cookie.del("is_login_paipai");
            if (b) {
                b()
            } else {
                window.location.reload()
            }
        };
        document.domain = "qq.com";
        a.send()
    },
    login: function() {
        QZFL.cookie.del("is_login_paipai");
        QZFL.quickLogin.open(2)
    },
    stuff: function(e, d, b) {
        var b = b || ["a", "p", "span", "strong"];
        for (var c = 0, a = b.length; c < a; c++) {
            QZFL.User._stuff(b[c], false, d);
            e && QZFL.User._stuff(b[c], true, d)
        }
    },
    _stuff: function(c, m, a) {
        var h = function(o, p) {
            if (o.outerHTML) {
                o.outerHTML = p;
                return
            }
            var i = o.ownerDocument.createRange();
            i.setStartBefore(o);
            var k = i.createContextualFragment(p);
            o.parentNode.replaceChild(k, o)
        };
        var b = !!m ? this.f_info: this.info;
        var n = document.getElementsByTagName(c);
        var d = function(k, o, i) {
            i == "inner" ? (k.innerHTML = o) : h(k, o)
        };
        for (var f = 0, g = n.length; f < g; f++) {
            var l = n[f].getAttribute( !! m ? "f_user": "user");
            var j = n[f].getAttribute("stuff_method") || "inner";
            switch (l) {
            default:
                for (var e in b) {
                    if (l == e) {
                        d(n[f], b[e], j);
                        break
                    }
                }
                break
            }
        }
    },
    parse: function(b, a) {
        return b.replace(/{(\w+)}/gi,
        function(d, c) {
            return c.toLowerCase() in QZFL.User.info ? (a ? QZFL.User.f_info[c.toLowerCase()] : QZFL.User.info[c.toLowerCase()]) : d
        })
    }
};
var QZFL = QZFL || {};
QZFL.Template = {
    parse: function(c, a, b) {
        var d = [];
        QZFL.object.each(c,
        function(e) {
            d.push(a.replace(/{(\w+)}/g,
            function(g, f) {
                return e[f] !== undefined ? e[f] : g
            }))
        });
        return d.join(b || "")
    },
    stuff: function(e, f, c, d) {
        c = $(c || f + "_tpl").value;
        f = $(f);
        var a = c.match(/<#([\s\S]+)#>/);
        var b = a[1];
        f.innerHTML = c.replace(a[0], this.parse(e, b, d));
        f.style.visibility = "visible"
    }
}; (function() {
    jWidget = {
        version: "1.0.0",
        each: function(d, c) {
            if (typeof d.length == "undefined" || typeof d == "string") {
                d = [d]
            }
            for (var b = 0, a = d.length; b < a; b++) {
                if (c.call(d[b], d[b], b, d) === false) {
                    return b
                }
            }
        },
        extend: QZFL.object.extend
    };
    jWidget.dom = QZFL.dom;
    jWidget.extend(QZFL.dom, {
        hasClass: QZFL.css.hasClassName,
        addClass: QZFL.css.addClassName,
        removeClass: QZFL.css.removeClassName
    });
    jWidget.dom.getChildren = function(b) {
        var a = [];
        var b = jWidget.dom.getFirstChild(b);
        while (b) {
            if ( !! b && b.nodeType == 1) {
                a.push(b)
            }
            b = b.nextSibling
        }
        return a
    };
    jWidget.Tween = QZFL.Tween;
    jWidget.ui = jWidget.ui || {}
})(); (function() {
    var b = jWidget,
    a = b.dom;
    _Slide = function(c) {
        c = c || {};
        this.eventType = c.eventType || "mouseover",
        this.autoPlayInterval = c.autoPlayInterval || 3 * 1000;
        this._play = true;
        this._timer = null;
        this._fadeTimer = null;
        this._container = a.get(c.container);
        this._panelWrapper = a.get(c.panelWrapper) || a.getFirstChild(this._container);
        this._sliders = a.getChildren(this._panelWrapper);
        this._navWrapper = a.get(c.navWrapper) || a.getNextSibling(this._panelWrapper) || null;
        this._navs = (this._navWrapper && a.getChildren(this._navWrapper)) || null;
        this._effect = c.effect || "scrollx";
        this._panelSize = (this._effect.indexOf("scrolly") == -1 ? c.width: c.height) || a.getSize(a.getFirstChild(this._panelWrapper))[this._effect.indexOf("scrolly") == -1 ? 0: 1];
        this._count = c.count || a.getChildren(this._panelWrapper).length;
        this._navClassOn = c.navClassOn || "on";
        this._target = 0;
        this._changeProperty = this._effect.indexOf("scrolly") == -1 ? "left": "top";
        this.curIndex = 0;
        this.step = this._effect.indexOf("scroll") == -1 ? 1: (c.Step || 5);
        this.slideTime = c.slideTime || 10;
        if (c.nextButton) {
            var d = this;
            a.get(c.nextButton).onclick = (function(e) {
                return function() {
                    e.next()
                }
            })(d)
        }
        if (c.prevButton) {
            a.get(c.prevButton).onclick = (function(e) {
                return function() {
                    e.prev()
                }
            })(d)
        }
        this.init();
        this.run(true)
    };
    _Slide.prototype = {
        init: function() {
            a.setStyle(this._container, "overflow", "hidden");
            a.setStyle(this._container, "position", "relative");
            a.setStyle(this._panelWrapper, "position", "relative");
            if (this._effect.indexOf("scrolly") == -1) {
                a.setStyle(this._panelWrapper, "width", this._count * (this._panelSize + 200) + "px");
                b.each(this._sliders,
                function(d) {
                    d.style.styleFloat = d.style.cssFloat = "left"
                })
            }
            if (this._navs) {
                var c = this;
                if (c.eventType == "click") {
                    b.each(this._navs,
                    function(e, d) {
                        e.onclick = (function(f) {
                            return function() {
                                a.addClass(e, f._navClassOn);
                                f._play = false;
                                f.curIndex = d;
                                f._play = true;
                                f.run()
                            }
                        })(c)
                    })
                } else {
                    b.each(this._navs,
                    function(e, d) {
                        e.onmouseover = (function(f) {
                            return function() {
                                a.addClass(e, f._navClassOn);
                                f._play = false;
                                f.curIndex = d;
                                f.run()
                            }
                        })(c);
                        e.onmouseout = (function(f) {
                            return function() {
                                a.removeClass(e, f._navClassOn);
                                f._play = true;
                                f.run(false, true)
                            }
                        })(c)
                    })
                }
            }
        },
        run: function(e, c) {
            if (this.curIndex < 0) {
                this.curIndex = this._count - 1
            } else {
                if (this.curIndex >= this._count) {
                    this.curIndex = 0
                }
            }
            this._target = -1 * this._panelSize * this.curIndex;
            var d = this;
            if (this._navs) {
                b.each(this._navs,
                function(g, f) {
                    d.curIndex == (f) ? a.addClass(g, d._navClassOn) : a.removeClass(g, d._navClassOn)
                })
            }
            this.scroll();
            if (this._effect.indexOf("fade") >= 0 && !c) {
                a.setStyle(this._panelWrapper, "opacity", e ? 0.5: 0.1);
                this.fade()
            }
        },
        scroll: function() {
            clearTimeout(this._timer);
            var e = this,
            d = parseInt(this._panelWrapper.style[this._changeProperty]) || 0,
            c = (this._target - d) / this.step;
            if (Math.abs(c) < 1 && c != 0) {
                c = c > 0 ? 1: -1
            }
            if (c != 0) {
                this._panelWrapper.style[this._changeProperty] = (d + c) + "px";
                this._timer = setTimeout(function() {
                    e.scroll()
                },
                this.slideTime)
            } else {
                this._panelWrapper.style[this._changeProperty] = this._target + "px";
                if (this._play) {
                    this._timer = setTimeout(function() {
                        e.curIndex++;
                        e.run()
                    },
                    this.autoPlayInterval)
                }
            }
        },
        fade: function() {
            var c = a.getStyle(this._panelWrapper, "opacity");
            var d = this;
            if (c < 1) {
                a.setStyle(this._panelWrapper, "opacity", parseFloat(c) + 0.02);
                setTimeout(function() {
                    d.fade()
                },
                1)
            }
        },
        next: function() {
            this._play = false;
            this.curIndex++;
            this._play = true;
            this.run()
        },
        prev: function() {
            this._play = false;
            this.curIndex--;
            this._play = true;
            this.run()
        }
    };
    jWidget.ui.SlideView = function(d, c) {
        c = c || {};
        c.container = d;
        return new _Slide(c)
    }
})(); (function() {
    var b = jWidget,
    a = b.dom;
    _Tab = function(d) {
        this.eventType = d.eventType || "mouseover",
        this._container = d.container;
        this._type = d.type || "normal";
        this._navClassOn = d.navClassOn || "on";
        var e = this;
        if (this._type == "list") {
            var c = a.getChildren(this._container);
            this._panels = [];
            this._navs = [];
            b.each(c,
            function(g, f) {
                if (f % 2) {
                    e._panels.push(g)
                } else {
                    e._navs.push(g)
                }
            })
        } else {
            this._navWrapper = a.get(d.navWrapper) || a.getFirstChild(this._container);
            this._navs = a.getChildren(this._navWrapper);
            this._panelWrapper = a.get(d.panelWrapper) || a.getNextSibling(this._navWrapper);
            this._panels = a.getChildren(this._panelWrapper)
        }
        this.curIndex = 0;
        b.each(this._panels,
        function(g, f) {
            if (g.style.display != "none") {
                e.curIndex = f
            }
        });
        this._panels[this.curIndex].style.display = "";
        this._panels[this.curIndex].style.display = "";
        a.removeClass(this._navs[this.curIndex], this._navClassOn);
        a.addClass(this._navs[this.curIndex], this._navClassOn);
        b.each(this._navs,
        function(g, f) {
            g["on" + e.eventType] = (function(h) {
                return function() {
                    a.removeClass(h._navs[h.curIndex], h._navClassOn);
                    h._panels[h.curIndex].style.display = "none";
                    h.curIndex = f;
                    a.addClass(g, h._navClassOn);
                    h._panels[h.curIndex].style.display = "";
                    try {
                        QZFL.lazyLoad.loadHideImg(h._panels[h.curIndex])
                    } catch(i) {}
                }
            })(e)
        })
    };
    jWidget.ui.TabView = function(d, c) {
        c = c || {};
        c.container = a.get(d);
        return new _Tab(c)
    }
})();
jWidget.ui.Pager = function(b, a) {
    if (!b) {
        return
    }
    this.container = document.getElementById(b);
    this.offset = a.offset || 2;
    this.step = this.offset + 2;
    this.pageNum = a.pageNum;
    this.callback = a.callback ||
    function() {};
    this.currentTpl = a.currentTpl || '<a class="num on"><span>{num}</span></a>';
    this.anchor = a.anchor;
    this.normalTpl = a.normalTpl || '<a class="num" onclick="pager.go({num})"><span>{num}</span></a>';
    this.omitTpl = a.omitTpl || '<span class="omit">...</span>';
    this.firstTpl = a.firstTpl || "";
    this.lastTpl = a.lastTpl || "";
    this.preTpl = a.preTpl || '<a href="' + (this.anchor ? "#" + this.anchor: "javascript:;") + '" onclick="pager.go({num})"><span class="before_page">上一页</span></a>';
    this.nextTpl = a.nextTpl || '<a href="' + (this.anchor ? "#" + this.anchor: "javascript:;") + '" onclick="pager.go({num})"><span class="next_page">下一页</span></a>';
    this.preDisableTpl = a.preDisableTpl || '<a href="' + (this.anchor ? "#" + this.anchor: "javascript:;") + '"><span class="before_page">上一页</span></a>';
    this.nextDisableTpl = a.nextDisableTpl || '<a href="' + (this.anchor ? "#" + this.anchor: "javascript:;") + '"><span class="next_page">下一页</span></a>';
    this.show(1)
};
jWidget.ui.Pager.prototype.go = function(b) {
    try {
        this.callback(b)
    } catch(a) {}
    if (this.anchor) {
        window.location.hash = "#" + this.anchor
    }
    this.show(b)
};
jWidget.ui.Pager.prototype.show = function(h) {
    if (h < 1 || h > this.pageNum) {
        return false
    }
    var f = 0,
    b = 0;
    if (h - 2 < this.step) {
        f = this.step - (h - 1)
    }
    if (this.pageNum - h - 1 < this.step) {
        b = this.step - (this.pageNum - h)
    }
    var a = h - this.offset - b;
    var g = h + this.offset + f;
    var e = [];
    e.push(this.firstTpl);
    if (h > 1) {
        var k = this.preTpl.replace("{num}", h - 1);
        e.push(k)
    } else {
        e.push(this.preDisableTpl)
    }
    if (a > 1) {
        e.push(this.normalTpl.replace(/{num}/g, 1))
    }
    if (a == 3) {
        e.push(this.normalTpl.replace(/{num}/g, 2))
    } else {
        if (a > 3) {
            e.push(this.omitTpl)
        }
    }
    for (var c = h, d = a; d < c; d++) {
        if (d < 1) {
            continue
        }
        e.push(this.normalTpl.replace(/{num}/g, d))
    }
    e.push(this.currentTpl.replace(/{num}/g, h));
    for (var d = h + 1, c = g + 1; d < c; d++) {
        if (d > this.pageNum) {
            break
        }
        e.push(this.normalTpl.replace(/{num}/g, d))
    }
    if (g == this.pageNum - 2) {
        e.push(this.normalTpl.replace(/{num}/g, this.pageNum - 1))
    } else {
        if (g < this.pageNum - 2) {
            e.push(this.omitTpl)
        }
    }
    if (g < this.pageNum) {
        e.push(this.normalTpl.replace(/{num}/g, this.pageNum))
    }
    if (h < this.pageNum) {
        var k = this.nextTpl.replace("{num}", h + 1);
        e.push(k)
    } else {
        e.push(this.nextDisableTpl)
    }
    e.push(this.lastTpl.replace(/{num}/g, this.pageNum));
    this.container.innerHTML = e.join("");
    return true
}; (function() {
    _SlideBanner = function(f) {
        var d = jWidget,
        b = f.upTime || 2,
        h = f.downTime || 1.2,
        g = f.delayTime || 4,
        c = d.dom.get(f.bigBanner || "silde_banner_big"),
        i = d.dom.get(f.smallBanner || "silde_banner_small"),
        e = f.bigHeight || "420px",
        a = f.smallHeight || "45px";
        i.style.height = "0px";
        i.style.overflow = c.style.overflow = "hidden";
        setTimeout(function() {
            new d.Tween(c, "height", null, e, "0px", b).start();
            setTimeout(function() {
                i.style.display = "";
                new d.Tween(i, "height", null, "0px", a, h).start()
            },
            b * 1000)
        },
        g * 1000)
    };
    jWidget.ui.SlideBanner = function(a) {
        a = a || {};
        return new _SlideBanner(a)
    }
})();
jWidget.extend(QZFL.ui = QZFL.ui || {},
jWidget.ui);
if ($ !== undefined) {
    window._$ = $
}
var $ = (function() {
    var a = function(b) {
        return QZFL.dom.get(b)
    };
    QZFL.object.extend(a, QZFL);
    QZFL.userAgent.adjustBehaviors();
    return a
})();
var $S = {};
$S.time = {
    getDistance: function(b, a) {
        today = a || new Date();
        timeold = b - today.getTime();
        sectimeold = timeold / 1000;
        secondsold = Math.floor(sectimeold);
        msPerDay = 24 * 60 * 60 * 1000;
        e_daysold = timeold / msPerDay;
        daysold = Math.floor(e_daysold);
        e_hrsold = (e_daysold - daysold) * 24;
        hrsold = Math.floor(e_hrsold);
        e_minsold = (e_hrsold - hrsold) * 60;
        minsold = Math.floor((e_hrsold - hrsold) * 60);
        seconds = Math.floor((e_minsold - minsold) * 60);
        if (daysold < 10 && daysold > 0) {
            daysold = "0" + daysold
        }
        if (hrsold < 10) {
            hrsold = "0" + hrsold
        }
        if (minsold < 10) {
            minsold = "0" + minsold
        }
        if (seconds < 10) {
            seconds = "0" + seconds
        }
        return {
            dd: "" + daysold,
            hh: "" + hrsold,
            mm: "" + minsold,
            ss: "" + seconds
        }
    }
};
/*  |xGv00|fde50612b9f7e8c0ab45fd4953f42458 */
