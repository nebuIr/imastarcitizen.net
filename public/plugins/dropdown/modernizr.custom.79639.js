/* Modernizr 2.6.2 (Custom Build) | MIT & BSD
 * Build: http://modernizr.com/download/#-opacity-generatedcontent-shiv-cssclasses-teststyles-prefixes-css_pointerevents-load
 */
window.Modernizr = function (af, ae, ad) {
        function F(b) {
            W.cssText = b
        }

        function E(d, c) {
            return F(S.join(d + ";") + (c || ""))
        }

        function D(d, c) {
            return typeof d === c
        }

        function Q(d, c) {
            return !!~("" + d).indexOf(c)
        }

        function O(g, c, j) {
            for (var i in g) {
                var h = c[g[i]];
                if (h !== ad) {
                    return j === !1 ? g[i] : D(h, "function") ? h.bind(j || c) : h
                }
            }
            return !1
        }
        var ac = "2.6.2",
            ab = {},
            aa = !0,
            Z = ae.documentElement,
            Y = "modernizr",
            X = ae.createElement(Y),
            W = X.style,
            V, U = ":)",
            T = {}.toString,
            S = " -webkit- -moz- -o- -ms- ".split(" "),
            R = {},
            P = {},
            N = {},
            M = [],
            K = M.slice,
            J, I = function (v, u, t, s) {
                var r, q, p, o, h = ae.createElement("div"),
                    g = ae.body,
                    b = g || ae.createElement("body");
                if (parseInt(t, 10)) {
                    while (t--) {
                        p = ae.createElement("div"), p.id = s ? s[t] : Y + (t + 1), h.appendChild(p)
                    }
                }
                return r = ["&#173;", '<style id="s', Y, '">', v, "</style>"].join(""), h.id = Y, (g ? h : b).innerHTML += r, b.appendChild(h), g || (b.style.background = "", b.style.overflow = "hidden", o = Z.style.overflow, Z.style.overflow = "hidden", Z.appendChild(b)), q = u(h, v), g ? h.parentNode.removeChild(h) : (b.parentNode.removeChild(b), Z.style.overflow = o), !!q
            },
            H = {}.hasOwnProperty,
            G;
        !D(H, "undefined") && !D(H.call, "undefined") ? G = function (d, c) {
            return H.call(d, c)
        } : G = function (d, c) {
            return c in d && D(d.constructor.prototype[c], "undefined")
        }, Function.prototype.bind || (Function.prototype.bind = function (a) {
            var h = this;
            if (typeof h != "function") {
                throw new TypeError
            }
            var g = K.call(arguments, 1),
                f = function () {
                    if (this instanceof f) {
                        var b = function () {};
                        b.prototype = h.prototype;
                        var d = new b,
                            c = h.apply(d, g.concat(K.call(arguments)));
                        return Object(c) === c ? c : d
                    }
                    return h.apply(a, g.concat(K.call(arguments)))
                };
            return f
        }), R.opacity = function () {
            return E("opacity:.55"), /^0.55$/.test(W.opacity)
        }, R.generatedcontent = function () {
            var b;
            return I(["#", Y, "{font:0/0 a}#", Y, ':after{content:"', U, '";visibility:hidden;font:3px/1 a}'].join(""), function (a) {
                b = a.offsetHeight >= 3
            }), b
        };
        for (var L in R) {
            G(R, L) && (J = L.toLowerCase(), ab[J] = R[L](), M.push((ab[J] ? "" : "no-") + J))
        }
        return ab.addTest = function (e, c) {
                if (typeof e == "object") {
                    for (var f in e) {
                        G(e, f) && ab.addTest(f, e[f])
                    }
                } else {
                    e = e.toLowerCase();
                    if (ab[e] !== ad) {
                        return ab
                    }
                    c = typeof c == "function" ? c() : c, typeof aa != "undefined" && aa && (Z.className += " " + (c ? "" : "no-") + e), ab[e] = c
                }
                return ab
            }, F(""), X = V = null,
            function (am, al) {
                function z(f, e) {
                    var h = f.createElement("p"),
                        g = f.getElementsByTagName("head")[0] || f.documentElement;
                    return h.innerHTML = "x<style>" + e + "</style>", g.insertBefore(h.lastChild, g.firstChild)
                }

                function y() {
                    var b = s.elements;
                    return typeof b == "string" ? b.split(" ") : b
                }

                function x(d) {
                    var c = B[d[ag]];
                    return c || (c = {}, C++, d[ag] = C, B[C] = c), c
                }

                function w(b, h, e) {
                    h || (h = al);
                    if (A) {
                        return h.createElement(b)
                    }
                    e || (e = x(h));
                    var d;
                    return e.cache[b] ? d = e.cache[b].cloneNode() : ai.test(b) ? d = (e.cache[b] = e.createElem(b)).cloneNode() : d = e.createElem(b), d.canHaveChildren && !aj.test(b) ? e.frag.appendChild(d) : d
                }

                function v(b, l) {
                    b || (b = al);
                    if (A) {
                        return b.createDocumentFragment()
                    }
                    l = l || x(b);
                    var k = l.frag.cloneNode(),
                        j = 0,
                        i = y(),
                        h = i.length;
                    for (; j < h; j++) {
                        k.createElement(i[j])
                    }
                    return k
                }

                function u(d, c) {
                    c.cache || (c.cache = {}, c.createElem = d.createElement, c.createFrag = d.createDocumentFragment, c.frag = c.createFrag()), d.createElement = function (a) {
                        return s.shivMethods ? w(a, d, c) : c.createElem(a)
                    }, d.createDocumentFragment = Function("h,f", "return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&(" + y().join().replace(/\w+/g, function (b) {
                        return c.createElem(b), c.frag.createElement(b), 'c("' + b + '")'
                    }) + ");return n}")(s, c.frag)
                }

                function t(b) {
                    b || (b = al);
                    var d = x(b);
                    return s.shivCSS && !ah && !d.hasCSS && (d.hasCSS = !!z(b, "article,aside,figcaption,figure,footer,header,hgroup,nav,section{display:block}mark{background:#FF0;color:#000}")), A || u(b, d), b
                }
                var ak = am.html5 || {},
                    aj = /^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,
                    ai = /^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,
                    ah, ag = "_html5shiv",
                    C = 0,
                    B = {},
                    A;
                (function () {
                    try {
                        var b = al.createElement("a");
                        b.innerHTML = "<xyz></xyz>", ah = "hidden" in b, A = b.childNodes.length == 1 || function () {
                            al.createElement("a");
                            var c = al.createDocumentFragment();
                            return typeof c.cloneNode == "undefined" || typeof c.createDocumentFragment == "undefined" || typeof c.createElement == "undefined"
                        }()
                    } catch (d) {
                        ah = !0, A = !0
                    }
                })();
                var s = {
                    elements: ak.elements || "abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video",
                    shivCSS: ak.shivCSS !== !1,
                    supportsUnknownElements: A,
                    shivMethods: ak.shivMethods !== !1,
                    type: "default",
                    shivDocument: t,
                    createElement: w,
                    createDocumentFragment: v
                };
                am.html5 = s, t(al)
            }(this, ae), ab._version = ac, ab._prefixes = S, ab.testStyles = I, Z.className = Z.className.replace(/(^|\s)no-js(\s|$)/, "$1$2") + (aa ? " js " + M.join(" ") : ""), ab
    }(this, this.document),
    function (ad, ac, ab) {
        function aa(b) {
            return "[object Function]" == P.call(b)
        }

        function Z(b) {
            return "string" == typeof b
        }

        function Y() {}

        function X(b) {
            return !b || "loaded" == b || "complete" == b || "uninitialized" == b
        }

        function W() {
            var b = O.shift();
            M = 1, b ? b.t ? R(function () {
                ("c" == b.t ? L.injectCss : L.injectJs)(b.s, 0, b.a, b.x, b.e, 1)
            }, 0) : (b(), W()) : M = 0
        }

        function V(w, v, t, s, q, p, n) {
            function m(a) {
                if (!g && X(h.readyState) && (x.r = g = 1, !M && W(), h.onload = h.onreadystatechange = null, a)) {
                    "img" != w && R(function () {
                        I.removeChild(h)
                    }, 50);
                    for (var c in D[v]) {
                        D[v].hasOwnProperty(c) && D[v][c].onload()
                    }
                }
            }
            var n = n || L.errorTimeout,
                h = ac.createElement(w),
                g = 0,
                b = 0,
                x = {
                    t: t,
                    s: v,
                    e: q,
                    a: p,
                    x: n
                };
            1 === D[v] && (b = 1, D[v] = []), "object" == w ? h.data = v : (h.src = v, h.type = w), h.width = h.height = "0", h.onerror = h.onload = h.onreadystatechange = function () {
                m.call(this, b)
            }, O.splice(s, 0, x), "img" != w && (b || 2 === D[v] ? (I.insertBefore(h, J ? null : Q), R(m, n)) : D[v].push(h))
        }

        function U(g, e, j, i, h) {
            return M = 0, e = e || "j", Z(g) ? V("c" == e ? G : H, g, e, this.i++, j, i, h) : (O.splice(this.i++, 0, g), 1 == O.length && W()), this
        }

        function T() {
            var b = L;
            return b.loader = {
                load: U,
                i: 0
            }, b
        }
        var S = ac.documentElement,
            R = ad.setTimeout,
            Q = ac.getElementsByTagName("script")[0],
            P = {}.toString,
            O = [],
            M = 0,
            K = "MozAppearance" in S.style,
            J = K && !!ac.createRange().compareNode,
            I = J ? S : Q.parentNode,
            S = ad.opera && "[object Opera]" == P.call(ad.opera),
            S = !!ac.attachEvent && !S,
            H = K ? "object" : S ? "script" : "img",
            G = S ? "script" : H,
            F = Array.isArray || function (b) {
                return "[object Array]" == P.call(b)
            },
            E = [],
            D = {},
            C = {
                timeout: function (d, c) {
                    return c.length && (d.timeout = c[0]), d
                }
            },
            N, L;
        L = function (e) {
            function c(i) {
                var i = i.split("!"),
                    h = E.length,
                    q = i.pop(),
                    p = i.length,
                    q = {
                        url: q,
                        origUrl: q,
                        prefixes: i
                    },
                    o, l, j;
                for (l = 0; l < p; l++) {
                    j = i[l].split("="), (o = C[j.shift()]) && (q = o(q, j))
                }
                for (l = 0; l < h; l++) {
                    q = E[l](q)
                }
                return q
            }

            function n(b, s, r, q, p) {
                var o = c(b),
                    l = o.autoCallback;
                o.url.split(".").pop().split("?").shift(), o.bypass || (s && (s = aa(s) ? s : s[b] || s[q] || s[b.split("/").pop().split("?")[0]]), o.instead ? o.instead(b, s, r, q, p) : (D[o.url] ? o.noexec = !0 : D[o.url] = 1, r.load(o.url, o.forceCSS || !o.forceJS && "css" == o.url.split(".").pop().split("?").shift() ? "c" : ab, o.noexec, o.attrs, o.timeout), (aa(s) || aa(l)) && r.load(function () {
                    T(), s && s(o.origUrl, p, q), l && l(o.origUrl, p, q), D[o.url] = 2
                })))
            }

            function m(w, v) {
                function u(b, h) {
                    if (b) {
                        if (Z(b)) {
                            h || (r = function () {
                                var i = [].slice.call(arguments);
                                q.apply(this, i), p()
                            }), n(b, r, v, 0, t)
                        } else {
                            if (Object(b) === b) {
                                for (g in o = function () {
                                        var a = 0,
                                            i;
                                        for (i in b) {
                                            b.hasOwnProperty(i) && a++
                                        }
                                        return a
                                    }(), b) {
                                    b.hasOwnProperty(g) && (!h && !--o && (aa(r) ? r = function () {
                                        var i = [].slice.call(arguments);
                                        q.apply(this, i), p()
                                    } : r[g] = function (i) {
                                        return function () {
                                            var a = [].slice.call(arguments);
                                            i && i.apply(this, a), p()
                                        }
                                    }(q[g])), n(b[g], r, v, g, t))
                                }
                            }
                        }
                    } else {
                        !h && p()
                    }
                }
                var t = !!w.test,
                    s = w.load || w.both,
                    r = w.callback || Y,
                    q = r,
                    p = w.complete || Y,
                    o, g;
                u(t ? w.yep : w.nope, !!s), s && u(s)
            }
            var k, f, d = this.yepnope.loader;
            if (Z(e)) {
                n(e, 0, d, 0)
            } else {
                if (F(e)) {
                    for (k = 0; k < e.length; k++) {
                        f = e[k], Z(f) ? n(f, 0, d, 0) : F(f) ? L(f) : Object(f) === f && m(f, d)
                    }
                } else {
                    Object(e) === e && m(e, d)
                }
            }
        }, L.addPrefix = function (d, c) {
            C[d] = c
        }, L.addFilter = function (b) {
            E.push(b)
        }, L.errorTimeout = 10000, null == ac.readyState && ac.addEventListener && (ac.readyState = "loading", ac.addEventListener("DOMContentLoaded", N = function () {
            ac.removeEventListener("DOMContentLoaded", N, 0), ac.readyState = "complete"
        }, 0)), ad.yepnope = T(), ad.yepnope.executeStack = W, ad.yepnope.injectJs = function (r, q, p, n, m, h) {
            var g = ac.createElement("script"),
                f, b, n = n || L.errorTimeout;
            g.src = r;
            for (b in p) {
                g.setAttribute(b, p[b])
            }
            q = h ? W : q || Y, g.onreadystatechange = g.onload = function () {
                !f && X(g.readyState) && (f = 1, q(), g.onload = g.onreadystatechange = null)
            }, R(function () {
                f || (f = 1, q(1))
            }, n), m ? g.onload() : Q.parentNode.insertBefore(g, Q)
        }, ad.yepnope.injectCss = function (b, n, m, l, k, h) {
            var l = ac.createElement("link"),
                f, n = h ? W : n || Y;
            l.href = b, l.rel = "stylesheet", l.type = "text/css";
            for (f in m) {
                l.setAttribute(f, m[f])
            }
            k || (Q.parentNode.insertBefore(l, Q), R(n, 0))
        }
    }(this, document), Modernizr.load = function () {
        yepnope.apply(window, [].slice.call(arguments, 0))
    }, Modernizr.addTest("pointerevents", function () {
        var f = document.createElement("x"),
            e = document.documentElement,
            h = window.getComputedStyle,
            g;
        return "pointerEvents" in f.style ? (f.style.pointerEvents = "auto", f.style.pointerEvents = "x", e.appendChild(f), g = h && h(f, "").pointerEvents === "auto", e.removeChild(f), !!g) : !1
    });