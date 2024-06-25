/* Pricing Slider */
/*! nouislider - 8.3.0 - 2016-02-14 17:37:19 */
! function (t) {
    "function" == typeof define && define.amd ? define([], t) : "object" == typeof exports ? module.exports = t() : window.noUiSlider = t()
}(function () {
    "use strict";

    function t(t) {
        var e = t.getBoundingClientRect(),
            n = t.ownerDocument.documentElement,
            r = s();
        return /webkit.*Chrome.*Mobile/i.test(navigator.userAgent) && (r.x = 0), {
            top: e.top + r.y - n.clientTop,
            left: e.left + r.x - n.clientLeft
        }
    }

    function e(t) {
        return "number" == typeof t && !isNaN(t) && isFinite(t)
    }

    function n(t, e, n) {
        o(t, e), setTimeout(function () {
            a(t, e)
        }, n)
    }

    function r(t) {
        return Math.max(Math.min(t, 100), 0)
    }

    function i(t) {
        return Array.isArray(t) ? t : [t]
    }

    function o(t, e) {
        t.classList ? t.classList.add(e) : t.className += " " + e
    }

    function a(t, e) {
        t.classList ? t.classList.remove(e) : t.className = t.className.replace(new RegExp("(^|\\b)" + e.split(" ").join("|") + "(\\b|$)", "gi"), " ")
    }

    function s() {
        var t = void 0 !== window.pageXOffset,
            e = "CSS1Compat" === (document.compatMode || "");
        return {
            x: t ? window.pageXOffset : e ? document.documentElement.scrollLeft : document.body.scrollLeft,
            y: t ? window.pageYOffset : e ? document.documentElement.scrollTop : document.body.scrollTop
        }
    }

    function u(t) {
        t.stopPropagation()
    }
    var c = window.navigator.pointerEnabled ? {
            start: "pointerdown",
            move: "pointermove",
            end: "pointerup"
        } : window.navigator.msPointerEnabled ? {
            start: "MSPointerDown",
            move: "MSPointerMove",
            end: "MSPointerUp"
        } : {
            start: "mousedown touchstart",
            move: "mousemove touchmove",
            end: "mouseup touchend"
        },
        l = "noUi-";

    function f(t, e) {
        return 100 / (e - t)
    }

    function d(t, e) {
        return 100 * e / (t[1] - t[0])
    }

    function p(t, e) {
        for (var n = 1; t >= e[n];) n += 1;
        return n
    }

    function h(t, e, n) {
        if (n >= t.slice(-1)[0]) return 100;
        var r, i, o, a, s = p(n, t);
        return r = t[s - 1], i = t[s], o = e[s - 1], a = e[s], o + function (t, e) {
            return d(t, t[0] < 0 ? e + Math.abs(t[0]) : e - t[0])
        }([r, i], n) / f(o, a)
    }

    function m(t, e, n, r) {
        if (100 === r) return r;
        var i, o, a = p(r, t);
        return n ? r - (i = t[a - 1]) > ((o = t[a]) - i) / 2 ? o : i : e[a - 1] ? t[a - 1] + function (t, e) {
            return Math.round(t / e) * e
        }(r - t[a - 1], e[a - 1]) : r
    }

    function g(t, n, r) {
        var i;
        if ("number" == typeof n && (n = [n]), "[object Array]" !== Object.prototype.toString.call(n)) throw new Error("noUiSlider: 'range' contains invalid value.");
        if (!e(i = "min" === t ? 0 : "max" === t ? 100 : parseFloat(t)) || !e(n[0])) throw new Error("noUiSlider: 'range' value isn't numeric.");
        r.xPct.push(i), r.xVal.push(n[0]), i ? r.xSteps.push(!isNaN(n[1]) && n[1]) : isNaN(n[1]) || (r.xSteps[0] = n[1])
    }

    function v(t, e, n) {
        if (!e) return !0;
        n.xSteps[t] = d([n.xVal[t], n.xVal[t + 1]], e) / f(n.xPct[t], n.xPct[t + 1])
    }

    function b(t, e, n, r) {
        this.xPct = [], this.xVal = [], this.xSteps = [r || !1], this.xNumSteps = [!1], this.snap = e, this.direction = n;
        var i, o = [];
        for (i in t) t.hasOwnProperty(i) && o.push([t[i], i]);
        for (o.length && "object" == typeof o[0][0] ? o.sort(function (t, e) {
                return t[0][0] - e[0][0]
            }) : o.sort(function (t, e) {
                return t[0] - e[0]
            }), i = 0; i < o.length; i++) g(o[i][1], o[i][0], this);
        for (this.xNumSteps = this.xSteps.slice(0), i = 0; i < this.xNumSteps.length; i++) v(i, this.xNumSteps[i], this)
    }
    b.prototype.getMargin = function (t) {
        return 2 === this.xPct.length && d(this.xVal, t)
    }, b.prototype.toStepping = function (t) {
        return t = h(this.xVal, this.xPct, t), this.direction && (t = 100 - t), t
    }, b.prototype.fromStepping = function (t) {
        return this.direction && (t = 100 - t), e = function (t, e, n) {
            if (n >= 100) return t.slice(-1)[0];
            var r, i = p(n, e);
            return function (t, e) {
                return e * (t[1] - t[0]) / 100 + t[0]
            }([t[i - 1], t[i]], (n - (r = e[i - 1])) * f(r, e[i]))
        }(this.xVal, this.xPct, t), n = Math.pow(10, 7), Number((Math.round(e * n) / n).toFixed(7));
        var e, n
    }, b.prototype.getStep = function (t) {
        return this.direction && (t = 100 - t), t = m(this.xPct, this.xSteps, this.snap, t), this.direction && (t = 100 - t), t
    }, b.prototype.getApplicableStep = function (t) {
        var e = p(t, this.xPct),
            n = 100 === t ? 2 : 1;
        return [this.xNumSteps[e - 2], this.xVal[e - n], this.xNumSteps[e - n]]
    }, b.prototype.convert = function (t) {
        return this.getStep(this.toStepping(t))
    };
    var w = {
        to: function (t) {
            return void 0 !== t && t.toFixed(2)
        },
        from: Number
    };

    function x(t, n) {
        if (!e(n)) throw new Error("noUiSlider: 'step' is not numeric.");
        t.singleStep = n
    }

    function y(t, e) {
        if ("object" != typeof e || Array.isArray(e)) throw new Error("noUiSlider: 'range' is not an object.");
        if (void 0 === e.min || void 0 === e.max) throw new Error("noUiSlider: Missing 'min' or 'max' in 'range'.");
        if (e.min === e.max) throw new Error("noUiSlider: 'range' 'min' and 'max' cannot be equal.");
        t.spectrum = new b(e, t.snap, t.dir, t.singleStep)
    }

    function S(t, e) {
        if (e = i(e), !Array.isArray(e) || !e.length || e.length > 2) throw new Error("noUiSlider: 'start' option is incorrect.");
        t.handles = e.length, t.start = e
    }

    function E(t, e) {
        if (t.snap = e, "boolean" != typeof e) throw new Error("noUiSlider: 'snap' option must be a boolean.")
    }

    function N(t, e) {
        if (t.animate = e, "boolean" != typeof e) throw new Error("noUiSlider: 'animate' option must be a boolean.")
    }

    function M(t, e) {
        if ("lower" === e && 1 === t.handles) t.connect = 1;
        else if ("upper" === e && 1 === t.handles) t.connect = 2;
        else if (!0 === e && 2 === t.handles) t.connect = 3;
        else {
            if (!1 !== e) throw new Error("noUiSlider: 'connect' option doesn't match handle count.");
            t.connect = 0
        }
    }

    function U(t, e) {
        switch (e) {
            case "horizontal":
                t.ort = 0;
                break;
            case "vertical":
                t.ort = 1;
                break;
            default:
                throw new Error("noUiSlider: 'orientation' option is invalid.")
        }
    }

    function P(t, n) {
        if (!e(n)) throw new Error("noUiSlider: 'margin' option must be numeric.");
        if (0 !== n && (t.margin = t.spectrum.getMargin(n), !t.margin)) throw new Error("noUiSlider: 'margin' option is only supported on linear sliders.")
    }

    function O(t, n) {
        if (!e(n)) throw new Error("noUiSlider: 'limit' option must be numeric.");
        if (t.limit = t.spectrum.getMargin(n), !t.limit) throw new Error("noUiSlider: 'limit' option is only supported on linear sliders.")
    }

    function L(t, e) {
        switch (e) {
            case "ltr":
                t.dir = 0;
                break;
            case "rtl":
                t.dir = 1, t.connect = [0, 2, 1, 3][t.connect];
                break;
            default:
                throw new Error("noUiSlider: 'direction' option was not recognized.")
        }
    }

    function j(t, e) {
        if ("string" != typeof e) throw new Error("noUiSlider: 'behaviour' must be a string containing options.");
        var n = e.indexOf("tap") >= 0,
            r = e.indexOf("drag") >= 0,
            i = e.indexOf("fixed") >= 0,
            o = e.indexOf("snap") >= 0,
            a = e.indexOf("hover") >= 0;
        if (r && !t.connect) throw new Error("noUiSlider: 'drag' behaviour must be used with 'connect': true.");
        t.events = {
            tap: n || o,
            drag: r,
            fixed: i,
            snap: o,
            hover: a
        }
    }

    function k(t, e) {
        var n;
        if (!1 !== e)
            if (!0 === e)
                for (t.tooltips = [], n = 0; n < t.handles; n++) t.tooltips.push(!0);
            else {
                if (t.tooltips = i(e), t.tooltips.length !== t.handles) throw new Error("noUiSlider: must pass a formatter for all handles.");
                t.tooltips.forEach(function (t) {
                    if ("boolean" != typeof t && ("object" != typeof t || "function" != typeof t.to)) throw new Error("noUiSlider: 'tooltips' must be passed a formatter or 'false'.")
                })
            }
    }

    function A(t, e) {
        if (t.format = e, "function" == typeof e.to && "function" == typeof e.from) return !0;
        throw new Error("noUiSlider: 'format' requires 'to' and 'from' methods.")
    }

    function F(t, e) {
        if (void 0 !== e && "string" != typeof e) throw new Error("noUiSlider: 'cssPrefix' must be a string.");
        t.cssPrefix = e
    }

    function C(t) {
        var e, n = {
            margin: 0,
            limit: 0,
            animate: !0,
            format: w
        };
        e = {
            step: {
                r: !1,
                t: x
            },
            start: {
                r: !0,
                t: S
            },
            connect: {
                r: !0,
                t: M
            },
            direction: {
                r: !0,
                t: L
            },
            snap: {
                r: !1,
                t: E
            },
            animate: {
                r: !1,
                t: N
            },
            range: {
                r: !0,
                t: y
            },
            orientation: {
                r: !1,
                t: U
            },
            margin: {
                r: !1,
                t: P
            },
            limit: {
                r: !1,
                t: O
            },
            behaviour: {
                r: !0,
                t: j
            },
            format: {
                r: !1,
                t: A
            },
            tooltips: {
                r: !1,
                t: k
            },
            cssPrefix: {
                r: !1,
                t: F
            }
        };
        var r = {
            connect: !1,
            direction: "ltr",
            behaviour: "tap",
            orientation: "horizontal"
        };
        return Object.keys(e).forEach(function (i) {
            if (void 0 === t[i] && void 0 === r[i]) {
                if (e[i].r) throw new Error("noUiSlider: '" + i + "' is required.");
                return !0
            }
            e[i].t(n, void 0 === t[i] ? r[i] : t[i])
        }), n.pips = t.pips, n.style = n.ort ? "top" : "left", n
    }

    function V(e, f) {
        var d, p, h, m, g = e,
            v = [-1, -1],
            b = f.spectrum,
            w = [],
            x = {},
            y = ["target", "base", "origin", "handle", "horizontal", "vertical", "background", "connect", "ltr", "rtl", "draggable", "", "state-drag", "", "state-tap", "active", "", "stacking", "tooltip", "", "pips", "marker", "value"].map((m = f.cssPrefix || l, function (t) {
                return m + t
            }));

        function S(t, e) {
            var n = document.createElement("div"),
                r = document.createElement("div"),
                i = ["-lower", "-upper"];
            return t && i.reverse(), o(r, y[3]), o(r, y[3] + i[e]), o(n, y[2]), n.appendChild(r), n
        }

        function E(t, e) {
            if (!f.tooltips[e]) return !1;
            var n = document.createElement("div");
            return n.className = y[18], t.firstChild.appendChild(n)
        }

        function N(t, e, n) {
            var r = ["horizontal", "vertical"][f.ort],
                i = document.createElement("div"),
                a = "";

            function s(t, e, n) {
                return 'class="' + e + " " + e + "-" + r + " " + e + ["-normal", "-large", "-sub"][n[1]] + '" style="' + f.style + ": " + t + '%"'
            }
            return o(i, y[20]), o(i, y[20] + "-" + r), Object.keys(t).forEach(function (r) {
                var i, o;
                i = r, o = t[r], b.direction && (i = 100 - i), o[1] = o[1] && e ? e(o[0], o[1]) : o[1], a += "<div " + s(i, y[21], o) + "></div>", o[1] && (a += "<div " + s(i, y[22], o) + ">" + n.to(o[0]) + "</div>")
            }), i.innerHTML = a, i
        }

        function M(t) {
            var e = t.mode,
                n = t.density || 1,
                r = t.filter || !1,
                i = function (t, e, n) {
                    if ("range" === t || "steps" === t) return b.xVal;
                    if ("count" === t) {
                        var r, i = 100 / (e - 1),
                            o = 0;
                        for (e = [];
                            (r = o++ * i) <= 100;) e.push(r);
                        t = "positions"
                    }
                    return "positions" === t ? e.map(function (t) {
                        return b.fromStepping(n ? b.getStep(t) : t)
                    }) : "values" === t ? n ? e.map(function (t) {
                        return b.fromStepping(b.getStep(b.toStepping(t)))
                    }) : e : void 0
                }(e, t.values || !1, t.stepped || !1),
                o = function (t, e, n) {
                    var r, i = b.direction,
                        o = {},
                        a = b.xVal[0],
                        s = b.xVal[b.xVal.length - 1],
                        u = !1,
                        c = !1,
                        l = 0;
                    return b.direction = 0, r = n.slice().sort(function (t, e) {
                        return t - e
                    }), (n = r.filter(function (t) {
                        return !this[t] && (this[t] = !0)
                    }, {}))[0] !== a && (n.unshift(a), u = !0), n[n.length - 1] !== s && (n.push(s), c = !0), n.forEach(function (r, i) {
                        var a, s, f, d, p, h, m, g, v, w = r,
                            x = n[i + 1];
                        if ("steps" === e && (a = b.xNumSteps[i]), a || (a = x - w), !1 !== w && void 0 !== x)
                            for (s = w; s <= x; s = (s + a).toFixed(7) / 1) {
                                for (m = (p = (d = b.toStepping(s)) - l) / t, v = p / (g = Math.round(m)), f = 1; f <= g; f += 1) o[(l + f * v).toFixed(5)] = ["x", 0];
                                h = n.indexOf(s) > -1 ? 1 : "steps" === e ? 2 : 0, !i && u && (h = 0), s === x && c || (o[d.toFixed(5)] = [s, h]), l = d
                            }
                    }), b.direction = i, o
                }(n, e, i),
                a = t.format || {
                    to: Math.round
                };
            return g.appendChild(N(o, r, a))
        }

        function U() {
            var t = d.getBoundingClientRect(),
                e = "offset" + ["Width", "Height"][f.ort];
            return 0 === f.ort ? t.width || d[e] : t.height || d[e]
        }

        function P(t, e, n) {
            void 0 !== e && 1 !== f.handles && (e = Math.abs(e - f.dir)), Object.keys(x).forEach(function (r) {
                var o = r.split(".")[0];
                t === o && x[r].forEach(function (t) {
                    t.call(h, i(B()), e, i(O(Array.prototype.slice.call(w))), n || !1, v)
                })
            })
        }

        function O(t) {
            return 1 === t.length ? t[0] : f.dir ? t.reverse() : t
        }

        function L(t, e, n, r) {
            var i = function (e) {
                    return !g.hasAttribute("disabled") && (i = g, o = y[14], (i.classList ? !i.classList.contains(o) : !new RegExp("\\b" + o + "\\b").test(i.className)) && (e = function (t, e) {
                        t.preventDefault();
                        var n, r, i = 0 === t.type.indexOf("touch"),
                            o = 0 === t.type.indexOf("mouse"),
                            a = 0 === t.type.indexOf("pointer"),
                            u = t;
                        return 0 === t.type.indexOf("MSPointer") && (a = !0), i && (n = t.changedTouches[0].pageX, r = t.changedTouches[0].pageY), e = e || s(), (o || a) && (n = t.clientX + e.x, r = t.clientY + e.y), u.pageOffset = e, u.points = [n, r], u.cursor = o || a, u
                    }(e, r.pageOffset), !(t === c.start && void 0 !== e.buttons && e.buttons > 1) && ((!r.hover || !e.buttons) && (e.calcPoint = e.points[f.ort], void n(e, r)))));
                    var i, o
                },
                o = [];
            return t.split(" ").forEach(function (t) {
                e.addEventListener(t, i, !1), o.push([t, i])
            }), o
        }

        function j(t, e) {
            if (-1 === navigator.appVersion.indexOf("MSIE 9") && 0 === t.buttons && 0 !== e.buttonsProperty) return k(t, e);
            var n, i, o, a, s, u, c, l = e.handles || p,
                f = !1,
                d = 100 * (t.calcPoint - e.start) / e.baseSize,
                h = l[0] === p[0] ? 0 : 1;
            if (o = d, a = e.positions, s = l.length > 1, u = o + a[0], c = o + a[1], n = s ? (u < 0 && (c += Math.abs(u)), c > 100 && (u -= c - 100), [r(u), r(c)]) : [u, c], f = q(l[0], n[h], 1 === l.length), l.length > 1) {
                if (f = q(l[1], n[h ? 0 : 1], !1) || f)
                    for (i = 0; i < e.handles.length; i++) P("slide", i)
            } else f && P("slide", h)
        }

        function k(t, e) {
            var n = d.querySelector("." + y[15]),
                r = e.handles[0] === p[0] ? 0 : 1;
            null !== n && a(n, y[15]), t.cursor && (document.body.style.cursor = "", document.body.removeEventListener("selectstart", document.body.noUiListener));
            var i = document.documentElement;
            i.noUiListeners.forEach(function (t) {
                i.removeEventListener(t[0], t[1])
            }), a(g, y[12]), P("set", r), P("change", r), void 0 !== e.handleNumber && P("end", e.handleNumber)
        }

        function A(t, e) {
            "mouseout" === t.type && "HTML" === t.target.nodeName && null === t.relatedTarget && k(t, e)
        }

        function F(t, e) {
            var n = document.documentElement;
            if (1 === e.handles.length && (o(e.handles[0].children[0], y[15]), e.handles[0].hasAttribute("disabled"))) return !1;
            t.preventDefault(), t.stopPropagation();
            var r = L(c.move, n, j, {
                    start: t.calcPoint,
                    baseSize: U(),
                    pageOffset: t.pageOffset,
                    handles: e.handles,
                    handleNumber: e.handleNumber,
                    buttonsProperty: t.buttons,
                    positions: [v[0], v[p.length - 1]]
                }),
                i = L(c.end, n, k, {
                    handles: e.handles,
                    handleNumber: e.handleNumber
                }),
                a = L("mouseout", n, A, {
                    handles: e.handles,
                    handleNumber: e.handleNumber
                });
            if (n.noUiListeners = r.concat(i, a), t.cursor) {
                document.body.style.cursor = getComputedStyle(t.target).cursor, p.length > 1 && o(g, y[12]);
                var s = function () {
                    return !1
                };
                document.body.noUiListener = s, document.body.addEventListener("selectstart", s, !1)
            }
            void 0 !== e.handleNumber && P("start", e.handleNumber)
        }

        function V(e) {
            var r, i, o = e.calcPoint,
                a = 0;
            if (e.stopPropagation(), p.forEach(function (e) {
                    a += t(e)[f.style]
                }), r = o < a / 2 || 1 === p.length ? 0 : 1, p[r].hasAttribute("disabled") && (r = r ? 0 : 1), i = 100 * (o -= t(d)[f.style]) / U(), f.events.snap || n(g, y[14], 300), p[r].hasAttribute("disabled")) return !1;
            q(p[r], i), P("slide", r, !0), P("set", r, !0), P("change", r, !0), f.events.snap && F(e, {
                handles: [p[r]]
            })
        }

        function T(e) {
            var n = e.calcPoint - t(d)[f.style],
                r = b.getStep(100 * n / U()),
                i = b.fromStepping(r);
            Object.keys(x).forEach(function (t) {
                "hover" === t.split(".")[0] && x[t].forEach(function (t) {
                    t.call(h, i)
                })
            })
        }

        function q(t, e, n) {
            var i = t !== p[0] ? 1 : 0,
                s = v[0] + f.margin,
                u = v[1] - f.margin,
                c = v[0] + f.limit,
                l = v[1] - f.limit;
            return p.length > 1 && (e = i ? Math.max(e, s) : Math.min(e, u)), !1 !== n && f.limit && p.length > 1 && (e = i ? Math.min(e, c) : Math.max(e, l)), e = b.getStep(e), (e = r(parseFloat(e.toFixed(7)))) !== v[i] && (window.requestAnimationFrame ? window.requestAnimationFrame(function () {
                t.style[f.style] = e + "%"
            }) : t.style[f.style] = e + "%", t.previousSibling || (a(t, y[17]), e > 50 && o(t, y[17])), v[i] = e, w[i] = b.fromStepping(e), P("update", i), !0)
        }

        function z(t) {
            var e, r, o = i(t);
            for (f.dir && f.handles > 1 && o.reverse(), f.animate && -1 !== v[0] && n(g, y[14], 300), e = p.length > 1 ? 3 : 1, 1 === o.length && (e = 1), function (t, e) {
                    var n, r, i;
                    for (f.limit && (t += 1), n = 0; n < t; n += 1) null !== (i = e[r = n % 2]) && !1 !== i && ("number" == typeof i && (i = String(i)), (!1 === (i = f.format.from(i)) || isNaN(i) || !1 === q(p[r], b.toStepping(i), n === 3 - f.dir)) && P("update", r))
                }(e, o), r = 0; r < p.length; r++) null !== o[r] && P("set", r)
        }

        function B() {
            var t, e = [];
            for (t = 0; t < f.handles; t += 1) e[t] = f.format.to(w[t]);
            return O(e)
        }

        function D(t, e) {
            x[t] = x[t] || [], x[t].push(e), "update" === t.split(".")[0] && p.forEach(function (t, e) {
                P("update", e)
            })
        }
        if (g.noUiSlider) throw new Error("Slider was already initialized.");
        return d = function (t, e, n) {
                o(n, y[0]), o(n, y[8 + t]), o(n, y[4 + e]);
                var r = document.createElement("div");
                return o(r, y[1]), n.appendChild(r), r
            }(f.dir, f.ort, g), p = function (t, e, n) {
                var r, i = [];
                for (r = 0; r < t; r += 1) i.push(n.appendChild(S(e, r)));
                return i
            }(f.handles, f.dir, d),
            function (t, e, n) {
                switch (t) {
                    case 1:
                        o(e, y[7]), o(n[0], y[6]);
                        break;
                    case 3:
                        o(n[1], y[6]);
                    case 2:
                        o(n[0], y[7]);
                    case 0:
                        o(e, y[6])
                }
            }(f.connect, g, p), f.pips && M(f.pips), f.tooltips && function () {
                f.dir && f.tooltips.reverse();
                var t = p.map(E);
                f.dir && (t.reverse(), f.tooltips.reverse()), D("update", function (e, n, r) {
                    t[n] && (t[n].innerHTML = !0 === f.tooltips[n] ? e[n] : f.tooltips[n].to(r[n]))
                })
            }(), h = {
                destroy: function () {
                    for (y.forEach(function (t) {
                            t && a(g, t)
                        }); g.firstChild;) g.removeChild(g.firstChild);
                    delete g.noUiSlider
                },
                steps: function () {
                    return O(v.map(function (t, e) {
                        var n, r, i = b.getApplicableStep(t),
                            o = (n = String(i[2]), (r = n.split(".")).length > 1 ? r[1].length : 0),
                            a = w[e],
                            s = 100 === t ? null : i[2],
                            u = Number((a - i[2]).toFixed(o));
                        return [0 === t ? null : u >= i[1] ? i[2] : i[0] || !1, s]
                    }))
                },
                on: D,
                off: function (t) {
                    var e = t.split(".")[0],
                        n = t.substring(e.length);
                    Object.keys(x).forEach(function (t) {
                        var r = t.split(".")[0],
                            i = t.substring(r.length);
                        e && e !== r || n && n !== i || delete x[t]
                    })
                },
                get: B,
                set: z,
                updateOptions: function (t) {
                    var e, n = B(),
                        r = C({
                            start: [0, 0],
                            margin: t.margin,
                            limit: t.limit,
                            step: t.step,
                            range: t.range,
                            animate: t.animate,
                            snap: void 0 === t.snap ? f.snap : t.snap
                        });
                    for (["margin", "limit", "step", "range", "animate"].forEach(function (e) {
                            void 0 !== t[e] && (f[e] = t[e])
                        }), r.spectrum.direction = b.direction, b = r.spectrum, v = [-1, -1], z(n), e = 0; e < p.length; e++) P("update", e)
                },
                options: f,
                target: g,
                pips: M
            },
            function (t) {
                var e, n;
                if (!t.fixed)
                    for (e = 0; e < p.length; e += 1) L(c.start, p[e].children[0], F, {
                        handles: [p[e]],
                        handleNumber: e
                    });
                if (t.tap && L(c.start, d, V, {
                        handles: p
                    }), t.hover)
                    for (L(c.move, d, T, {
                            hover: !0
                        }), e = 0; e < p.length; e += 1)["mousemove MSPointerMove pointermove"].forEach(function (t) {
                        p[e].children[0].addEventListener(t, u, !1)
                    });
                t.drag && (o((n = [d.querySelector("." + y[7])])[0], y[10]), t.fixed && n.push(p[n[0] === p[0] ? 1 : 0].children[0]), n.forEach(function (t) {
                    L(c.start, t, F, {
                        handles: p
                    })
                }))
            }(f.events), h
    }
    return {
        create: function (t, e) {
            if (!t.nodeName) throw new Error("noUiSlider.create requires a single element.");
            var n = C(e),
                r = V(t, n);
            return r.set(n.start), t.noUiSlider = r, r
        }
    }
}),
function () {
    "use strict";
    var t = ["decimals", "thousand", "mark", "prefix", "postfix", "encoder", "decoder", "negativeBefore", "negative", "edit", "undo"];

    function e(t) {
        return t.split("").reverse().join("")
    }

    function n(t, e) {
        return t.substring(0, e.length) === e
    }

    function r(t, e, n) {
        if ((t[e] || t[n]) && t[e] === t[n]) throw new Error(e)
    }

    function i(t) {
        return "number" == typeof t && isFinite(t)
    }

    function o(t, n, r, o, a, s, u, c, l, f, d, p) {
        var h, m, g, v = p,
            b = "",
            w = "";
        return s && (p = s(p)), !!i(p) && (!1 !== t && 0 === parseFloat(p.toFixed(t)) && (p = 0), p < 0 && (h = !0, p = Math.abs(p)), !1 !== t && (p = function (t, e) {
            var n = Math.pow(10, e);
            return (Math.round(t * n) / n).toFixed(e)
        }(p, t)), -1 !== (p = p.toString()).indexOf(".") ? (g = (m = p.split("."))[0], r && (b = r + m[1])) : g = p, n && (g = e(g).match(/.{1,3}/g), g = e(g.join(e(n)))), h && c && (w += c), o && (w += o), h && l && (w += l), w += g, w += b, a && (w += a), f && (w = f(w, v)), w)
    }

    function a(t, e, r, o, a, s, u, c, l, f, d, p) {
        var h, m = "";
        return d && (p = d(p)), !(!p || "string" != typeof p) && (c && n(p, c) && (p = p.replace(c, ""), h = !0), o && n(p, o) && (p = p.replace(o, "")), l && n(p, l) && (p = p.replace(l, ""), h = !0), a && function (t, e) {
            return t.slice(-1 * e.length) === e
        }(p, a) && (p = p.slice(0, -1 * a.length)), e && (p = p.split(e).join("")), r && (p = p.replace(r, ".")), h && (m += "-"), "" !== (m = (m += p).replace(/[^0-9\.\-.]/g, "")) && (m = Number(m), u && (m = u(m)), !!i(m) && m))
    }

    function s(e, n, r) {
        var i, o = [];
        for (i = 0; i < t.length; i += 1) o.push(e[t[i]]);
        return o.push(r), n.apply("", o)
    }
    window.wNumb = function e(n) {
        if (!(this instanceof e)) return new e(n);
        "object" == typeof n && (n = function (e) {
            var n, i, o, a = {};
            for (n = 0; n < t.length; n += 1)
                if (void 0 === (o = e[i = t[n]])) "negative" !== i || a.negativeBefore ? "mark" === i && "." !== a.thousand ? a[i] = "." : a[i] = !1 : a[i] = "-";
                else if ("decimals" === i) {
                if (!(o >= 0 && o < 8)) throw new Error(i);
                a[i] = o
            } else if ("encoder" === i || "decoder" === i || "edit" === i || "undo" === i) {
                if ("function" != typeof o) throw new Error(i);
                a[i] = o
            } else {
                if ("string" != typeof o) throw new Error(i);
                a[i] = o
            }
            return r(a, "mark", "thousand"), r(a, "prefix", "negative"), r(a, "prefix", "negativeBefore"), a
        }(n), this.to = function (t) {
            return s(n, o, t)
        }, this.from = function (t) {
            return s(n, a, t)
        })
    }
}();

/* ----- New Range Slider Script  ----- */
$(document).on("ready", function () {
    $('.noUi-handle').on("click", function () {
        $(this).width(50);
    });
    var rangeSlider = document.getElementById('slider');
    var moneyFormat = wNumb({
        decimals: 0,
        thousand: ',',
        prefix: '$'
    });
    noUiSlider.create(rangeSlider, {
        start: [0, 98000],
        step: 1,
        range: {
            'min': [52000],
            'max': [130000]
        },
        format: moneyFormat,
        connect: true
    });

    // Set visual min and max values and also update value hidden form inputs
    rangeSlider.noUiSlider.on('update', function (values, handle) {
        document.getElementById('slider-range-value1').innerHTML = values[0];
        document.getElementById('slider-range-value2').innerHTML = values[1];
        document.getElementsByName('min-value').value = moneyFormat.from(values[0]);
        document.getElementsByName('max-value').value = moneyFormat.from(values[1]);
    });
});
