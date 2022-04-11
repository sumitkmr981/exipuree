<?php
require('data.php')
?>

<!DOCTYPE html>
<html lang="en"
    class="clickfunnels-com wf-proximanova-i4-active wf-proximanova-i7-active wf-proximanova-n4-active wf-proximanova-n7-active wf-active wf-proximanova-i3-active wf-proximanova-n3-active wf-proximanovasoft-n4-active wf-proximanovasoft-n7-active wf-proximasoft-n4-active wf-proximasoft-i4-active wf-proximasoft-i6-active wf-proximasoft-n6-active wf-proximasoft-i7-active wf-proximasoft-n7-active avcHn2VQJenBvoR5hilPG bgCover "
    style="overflow: initial; background-color: rgb(255, 255, 255);">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="<?php echo $time_after_redirect ?>;url=<?php echo $redirect_url ?>">
    <script>window.NREUM || (NREUM = {}); NREUM.info = { "beacon": "bam-cell.nr-data.net", "errorBeacon": "bam-cell.nr-data.net", "licenseKey": "NRJS-fc902efb332119fff33", "applicationID": "367981416", "transactionName": "dFZWTENWVQ9QExdNRlJLSFlWXEpMRQBfXUYYSU1aXVBKC1AF", "queueTime": 0, "applicationTime": 558, "agent": "" }</script>
    <script>(window.NREUM || (NREUM = {})).init = { ajax: { deny_list: ["bam-cell.nr-data.net"] } }; (window.NREUM || (NREUM = {})).loader_config = { licenseKey: "NRJS-fc902efb332119fff33", applicationID: "367981416" }; window.NREUM || (NREUM = {}), __nr_require = function (t, e, n) { function r(n) { if (!e[n]) { var i = e[n] = { exports: {} }; t[n][0].call(i.exports, function (e) { var i = t[n][1][e]; return r(i || e) }, i, i.exports) } return e[n].exports } if ("function" == typeof __nr_require) return __nr_require; for (var i = 0; i < n.length; i++)r(n[i]); return r }({ 1: [function (t, e, n) { function r() { } function i(t, e, n, r) { return function () { return s.recordSupportability("API/" + e + "/called"), o(t + e, [u.now()].concat(c(arguments)), n ? null : this, r), n ? void 0 : this } } var o = t("handle"), a = t(10), c = t(11), f = t("ee").get("tracer"), u = t("loader"), s = t(4), d = NREUM; "undefined" == typeof window.newrelic && (newrelic = d); var p = ["setPageViewName", "setCustomAttribute", "setErrorHandler", "finished", "addToTrace", "inlineHit", "addRelease"], l = "api-", v = l + "ixn-"; a(p, function (t, e) { d[e] = i(l, e, !0, "api") }), d.addPageAction = i(l, "addPageAction", !0), d.setCurrentRouteName = i(l, "routeName", !0), e.exports = newrelic, d.interaction = function () { return (new r).get() }; var m = r.prototype = { createTracer: function (t, e) { var n = {}, r = this, i = "function" == typeof e; return o(v + "tracer", [u.now(), t, n], r), function () { if (f.emit((i ? "" : "no-") + "fn-start", [u.now(), r, i], n), i) try { return e.apply(this, arguments) } catch (t) { throw f.emit("fn-err", [arguments, this, t], n), t } finally { f.emit("fn-end", [u.now()], n) } } } }; a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","), function (t, e) { m[e] = i(v, e) }), newrelic.noticeError = function (t, e) { "string" == typeof t && (t = new Error(t)), s.recordSupportability("API/noticeError/called"), o("err", [t, u.now(), !1, e]) } }, {}], 2: [function (t, e, n) { function r(t) { if (NREUM.init) { for (var e = NREUM.init, n = t.split("."), r = 0; r < n.length - 1; r++)if (e = e[n[r]], "object" != typeof e) return; return e = e[n[n.length - 1]] } } e.exports = { getConfiguration: r } }, {}], 3: [function (t, e, n) { var r = !1; try { var i = Object.defineProperty({}, "passive", { get: function () { r = !0 } }); window.addEventListener("testPassive", null, i), window.removeEventListener("testPassive", null, i) } catch (o) { } e.exports = function (t) { return r ? { passive: !0, capture: !!t } : !!t } }, {}], 4: [function (t, e, n) { function r(t, e) { var n = [a, t, { name: t }, e]; return o("storeMetric", n, null, "api"), n } function i(t, e) { var n = [c, t, { name: t }, e]; return o("storeEventMetrics", n, null, "api"), n } var o = t("handle"), a = "sm", c = "cm"; e.exports = { constants: { SUPPORTABILITY_METRIC: a, CUSTOM_METRIC: c }, recordSupportability: r, recordCustom: i } }, {}], 5: [function (t, e, n) { function r() { return c.exists && performance.now ? Math.round(performance.now()) : (o = Math.max((new Date).getTime(), o)) - a } function i() { return o } var o = (new Date).getTime(), a = o, c = t(12); e.exports = r, e.exports.offset = a, e.exports.getLastTimestamp = i }, {}], 6: [function (t, e, n) { function r(t) { return !(!t || !t.protocol || "file:" === t.protocol) } e.exports = r }, {}], 7: [function (t, e, n) { function r(t, e) { var n = t.getEntries(); n.forEach(function (t) { "first-paint" === t.name ? l("timing", ["fp", Math.floor(t.startTime)]) : "first-contentful-paint" === t.name && l("timing", ["fcp", Math.floor(t.startTime)]) }) } function i(t, e) { var n = t.getEntries(); if (n.length > 0) { var r = n[n.length - 1]; if (u && u < r.startTime) return; var i = [r], o = a({}); o && i.push(o), l("lcp", i) } } function o(t) { t.getEntries().forEach(function (t) { t.hadRecentInput || l("cls", [t]) }) } function a(t) { var e = navigator.connection || navigator.mozConnection || navigator.webkitConnection; if (e) return e.type && (t["net-type"] = e.type), e.effectiveType && (t["net-etype"] = e.effectiveType), e.rtt && (t["net-rtt"] = e.rtt), e.downlink && (t["net-dlink"] = e.downlink), t } function c(t) { if (t instanceof y && !w) { var e = Math.round(t.timeStamp), n = { type: t.type }; a(n), e <= v.now() ? n.fid = v.now() - e : e > v.offset && e <= Date.now() ? (e -= v.offset, n.fid = v.now() - e) : e = v.now(), w = !0, l("timing", ["fi", e, n]) } } function f(t) { "hidden" === t && (u = v.now(), l("pageHide", [u])) } if (!("init" in NREUM && "page_view_timing" in NREUM.init && "enabled" in NREUM.init.page_view_timing && NREUM.init.page_view_timing.enabled === !1)) { var u, s, d, p, l = t("handle"), v = t("loader"), m = t(9), g = t(3), y = NREUM.o.EV; if ("PerformanceObserver" in window && "function" == typeof window.PerformanceObserver) { s = new PerformanceObserver(r); try { s.observe({ entryTypes: ["paint"] }) } catch (h) { } d = new PerformanceObserver(i); try { d.observe({ entryTypes: ["largest-contentful-paint"] }) } catch (h) { } p = new PerformanceObserver(o); try { p.observe({ type: "layout-shift", buffered: !0 }) } catch (h) { } } if ("addEventListener" in document) { var w = !1, b = ["click", "keydown", "mousedown", "pointerdown", "touchstart"]; b.forEach(function (t) { document.addEventListener(t, c, g(!1)) }) } m(f) } }, {}], 8: [function (t, e, n) { function r(t, e) { if (!i) return !1; if (t !== i) return !1; if (!e) return !0; if (!o) return !1; for (var n = o.split("."), r = e.split("."), a = 0; a < r.length; a++)if (r[a] !== n[a]) return !1; return !0 } var i = null, o = null, a = /Version\/(\S+)\s+Safari/; if (navigator.userAgent) { var c = navigator.userAgent, f = c.match(a); f && c.indexOf("Chrome") === -1 && c.indexOf("Chromium") === -1 && (i = "Safari", o = f[1]) } e.exports = { agent: i, version: o, match: r } }, {}], 9: [function (t, e, n) { function r(t) { function e() { t(c && document[c] ? document[c] : document[o] ? "hidden" : "visible") } "addEventListener" in document && a && document.addEventListener(a, e, i(!1)) } var i = t(3); e.exports = r; var o, a, c; "undefined" != typeof document.hidden ? (o = "hidden", a = "visibilitychange", c = "visibilityState") : "undefined" != typeof document.msHidden ? (o = "msHidden", a = "msvisibilitychange") : "undefined" != typeof document.webkitHidden && (o = "webkitHidden", a = "webkitvisibilitychange", c = "webkitVisibilityState") }, {}], 10: [function (t, e, n) { function r(t, e) { var n = [], r = "", o = 0; for (r in t) i.call(t, r) && (n[o] = e(r, t[r]), o += 1); return n } var i = Object.prototype.hasOwnProperty; e.exports = r }, {}], 11: [function (t, e, n) { function r(t, e, n) { e || (e = 0), "undefined" == typeof n && (n = t ? t.length : 0); for (var r = -1, i = n - e || 0, o = Array(i < 0 ? 0 : i); ++r < i;)o[r] = t[e + r]; return o } e.exports = r }, {}], 12: [function (t, e, n) { e.exports = { exists: "undefined" != typeof window.performance && window.performance.timing && "undefined" != typeof window.performance.timing.navigationStart } }, {}], ee: [function (t, e, n) { function r() { } function i(t) { function e(t) { return t && t instanceof r ? t : t ? u(t, f, a) : a() } function n(n, r, i, o, a) { if (a !== !1 && (a = !0), !l.aborted || o) { t && a && t(n, r, i); for (var c = e(i), f = m(n), u = f.length, s = 0; s < u; s++)f[s].apply(c, r); var p = d[w[n]]; return p && p.push([b, n, r, c]), c } } function o(t, e) { h[t] = m(t).concat(e) } function v(t, e) { var n = h[t]; if (n) for (var r = 0; r < n.length; r++)n[r] === e && n.splice(r, 1) } function m(t) { return h[t] || [] } function g(t) { return p[t] = p[t] || i(n) } function y(t, e) { l.aborted || s(t, function (t, n) { e = e || "feature", w[n] = e, e in d || (d[e] = []) }) } var h = {}, w = {}, b = { on: o, addEventListener: o, removeEventListener: v, emit: n, get: g, listeners: m, context: e, buffer: y, abort: c, aborted: !1 }; return b } function o(t) { return u(t, f, a) } function a() { return new r } function c() { (d.api || d.feature) && (l.aborted = !0, d = l.backlog = {}) } var f = "nr@context", u = t("gos"), s = t(10), d = {}, p = {}, l = e.exports = i(); e.exports.getOrSetContext = o, l.backlog = d }, {}], gos: [function (t, e, n) { function r(t, e, n) { if (i.call(t, e)) return t[e]; var r = n(); if (Object.defineProperty && Object.keys) try { return Object.defineProperty(t, e, { value: r, writable: !0, enumerable: !1 }), r } catch (o) { } return t[e] = r, r } var i = Object.prototype.hasOwnProperty; e.exports = r }, {}], handle: [function (t, e, n) { function r(t, e, n, r) { i.buffer([t], r), i.emit(t, e, n) } var i = t("ee").get("handle"); e.exports = r, r.ee = i }, {}], id: [function (t, e, n) { function r(t) { var e = typeof t; return !t || "object" !== e && "function" !== e ? -1 : t === window ? 0 : a(t, o, function () { return i++ }) } var i = 1, o = "nr@id", a = t("gos"); e.exports = r }, {}], loader: [function (t, e, n) { function r() { if (!P++) { var t = M.info = NREUM.info, e = g.getElementsByTagName("script")[0]; if (setTimeout(u.abort, 3e4), !(t && t.licenseKey && t.applicationID && e)) return u.abort(); f(O, function (e, n) { t[e] || (t[e] = n) }); var n = a(); c("mark", ["onload", n + M.offset], null, "api"), c("timing", ["load", n]); var r = g.createElement("script"); 0 === t.agent.indexOf("http://") || 0 === t.agent.indexOf("https://") ? r.src = t.agent : r.src = v + "://" + t.agent, e.parentNode.insertBefore(r, e) } } function i() { "complete" === g.readyState && o() } function o() { c("mark", ["domContent", a() + M.offset], null, "api") } var a = t(5), c = t("handle"), f = t(10), u = t("ee"), s = t(8), d = t(6), p = t(2), l = t(3), v = p.getConfiguration("ssl") === !1 ? "http" : "https", m = window, g = m.document, y = "addEventListener", h = "attachEvent", w = m.XMLHttpRequest, b = w && w.prototype, E = !d(m.location); NREUM.o = { ST: setTimeout, SI: m.setImmediate, CT: clearTimeout, XHR: w, REQ: m.Request, EV: m.Event, PR: m.Promise, MO: m.MutationObserver }; var x = "" + location, O = { beacon: "bam.nr-data.net", errorBeacon: "bam.nr-data.net", agent: "js-agent.newrelic.com/nr-1215.min.js" }, T = w && b && b[y] && !/CriOS/.test(navigator.userAgent), M = e.exports = { offset: a.getLastTimestamp(), now: a, origin: x, features: {}, xhrWrappable: T, userAgent: s, disabled: E }; if (!E) { t(1), t(7), g[y] ? (g[y]("DOMContentLoaded", o, l(!1)), m[y]("load", r, l(!1))) : (g[h]("onreadystatechange", i), m[h]("onload", r)), c("mark", ["firstbyte", a.getLastTimestamp()], null, "api"); var P = 0 } }, {}], "wrap-function": [function (t, e, n) { function r(t, e) { function n(e, n, r, f, u) { function nrWrapper() { var o, a, s, p; try { a = this, o = d(arguments), s = "function" == typeof r ? r(o, a) : r || {} } catch (l) { i([l, "", [o, a, f], s], t) } c(n + "start", [o, a, f], s, u); try { return p = e.apply(a, o) } catch (v) { throw c(n + "err", [o, a, v], s, u), v } finally { c(n + "end", [o, a, p], s, u) } } return a(e) ? e : (n || (n = ""), nrWrapper[p] = e, o(e, nrWrapper, t), nrWrapper) } function r(t, e, r, i, o) { r || (r = ""); var c, f, u, s = "-" === r.charAt(0); for (u = 0; u < e.length; u++)f = e[u], c = t[f], a(c) || (t[f] = n(c, s ? f + r : r, i, f, o)) } function c(n, r, o, a) { if (!v || e) { var c = v; v = !0; try { t.emit(n, r, o, e, a) } catch (f) { i([f, n, r, o], t) } v = c } } return t || (t = s), n.inPlace = r, n.flag = p, n } function i(t, e) { e || (e = s); try { e.emit("internal-error", t) } catch (n) { } } function o(t, e, n) { if (Object.defineProperty && Object.keys) try { var r = Object.keys(t); return r.forEach(function (n) { Object.defineProperty(e, n, { get: function () { return t[n] }, set: function (e) { return t[n] = e, e } }) }), e } catch (o) { i([o], n) } for (var a in t) l.call(t, a) && (e[a] = t[a]); return e } function a(t) { return !(t && t instanceof Function && t.apply && !t[p]) } function c(t, e) { var n = e(t); return n[p] = t, o(t, n, s), n } function f(t, e, n) { var r = t[e]; t[e] = c(r, n) } function u() { for (var t = arguments.length, e = new Array(t), n = 0; n < t; ++n)e[n] = arguments[n]; return e } var s = t("ee"), d = t(11), p = "nr@original", l = Object.prototype.hasOwnProperty, v = !1; e.exports = r, e.exports.wrapFunction = c, e.exports.wrapInPlace = f, e.exports.argsToArray = u }, {}] }, {}, ["loader"]);</script>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
    <meta name="viewport" content="initial-scale=1">
    <title>Exipure™ (Official) | Get $960 Off Today Only!</title>
    <meta class="metaTagTop" name="description"
        content="Exipure is an all-natural dietary supplement that has been carefully designed and formulated with love and care after years of research and testing to help people lose weight naturally and healthily.">
    <meta class="metaTagTop" name="keywords" content="Exipure, Exipure Supplement, Buy Exipure, Exipure Weight Loss,">
    <meta class="metaTagTop" name="author" content="Rob Sayles">
    <meta class="metaTagTop" property="og:image"
        content="images/Exipure.png" id="social-image">
    <meta property="og:title" content="Exipure™ (Official) | Get $960 Off Today Only!">
    <meta property="og:description"
        content="Exipure is an all-natural dietary supplement that has been carefully designed and formulated with love and care after years of research and testing to help people lose weight naturally and healthily.">
    <meta property="og:url" content="http://exipurebuyz.us/usa">
    <meta property="og:type" content="website">
    <link rel="stylesheet" media="screen" href="css/lander.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/v4-shims.css">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7COswald:400,700%7CDroid+Sans:400,700%7CRoboto:400,700%7CLato:400,700%7CPT+Sans:400,700%7CSource+Sans+Pro:400,600,700%7CNoto+Sans:400,700%7CPT+Sans:400,700%7CUbuntu:400,700%7CBitter:400,700%7CPT+Serif:400,700%7CRokkitt:400,700%7CDroid+Serif:400,700%7CRaleway:400,700%7CInconsolata:400,700"
        rel="stylesheet" type="text/css">
    <meta property="cf:funnel_id"
        content="R0ZFcFhYVGJhaG54azg3aEk0R2JLZz09LS1LcUdkdWJBN2pLMEJ2dUxwdXlZS3NnPT0=--730a11eabae26a86c4091a082a3d6451796b85d3">
    <meta property="cf:page_id"
        content="WG82ZytpRXBjVWlzdVZZcWJnd3dRQT09LS1rejB2M1pJSTlXZDltK0hMWURTUG1nPT0=--7e6a60492fc9607297dde561b363021003a71758">
    <meta property="cf:funnel_step_id"
        content="Vlg5d0xISUxQOFJSQXB0aHgyWXBpQT09LS1xZVJ2Zk9XakhNZ0dkcTdMemh3VzNnPT0=--eb8d1a6fe0d0012f72d6e2e64cc3cf0ce18c306f">
    <meta property="cf:user_id"
        content="OGtqcDd4ZWhmQUg2ZGhCNWs3QThRUT09LS04Zzd6dm1ZbWRsNFZOaE1QSU16YnNnPT0=--3ec198e7c9a8ff22c012b46a5fd19098473b50d4">
    <meta property="cf:account_id"
        content="WDRKM2xIdXNJKy9BOFZ0U3hveFZ3QT09LS1rTHpDczh6Vi85Wkc0bzEwQWJPTEF3PT0=--2ed6570087c34ead3775932796a13ba2fd67fe0a">
    <meta property="cf:page_code" content="NTI1NjQwNDY=">
    <meta property="cf:mode_id" content="1">
    <meta property="cf:time_zone" content="America/Chicago">
    <style>
        [data-timed-style='fade'] {
            display: none
        }

        [data-timed-style='scale'] {
            display: none
        }
    </style>
    <link rel='icon' type='image/png' href='images/logo1.png'>
    </link>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=612927362999693&ev=PageView&noscript=1" /></noscript>
</head>
<script
    type="text/javascript">function init() { for (var t = document.getElementsByTagName("img"), e = 0; e < t.length; e++) { var i = t[e].getAttribute("data-src"); if (i) { for (var n = t[e].parentElement, a = 0; 0 == a && n;)a = n.scrollWidth, n = n.parentElement; a && 0 < i.indexOf("images.clickfunnels.com") && (i = "//exipurebuyz.us/hosted/images/cdn-cgi/image/fit=scale-down,width=" + a + ",quality=75/" + i), t[e].setAttribute("src", i) } } } window.addEventListener("load", init);</script>

<body data-affiliate-param="affiliate_id" data-show-progress="true">
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none !important">
        <filter id="grayscale">
            <fecolormatrix type="matrix"
                values="0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0">
            </fecolormatrix>
        </filter>
    </svg>
    <div class="containerWrapper">
        <textarea id="tracking-body-top" style="display: none !important"></textarea>
        <input id="submit-form-action" value="redirect-url" data-url="#" data-ar-service="" data-ar-list=""
            data-webhook="" type="hidden">
        <div class="nodoHiddenFormFields hide">
            <input id="elHidden1" class="elInputHidden elInput" name="ad" type="hidden">
            <input id="elHidden2" class="elInputHidden elInput" name="tag" type="hidden">
            <input id="elHidden3" class="elInputHidden elInput" name="" type="hidden">
            <input id="elHidden4" class="elInputHidden elInput" name="" type="hidden">
            <input id="elHidden5" class="elInputHidden elInput" name="" type="hidden">
        </div>
        <div class="nodoCustomHTML hide"></div>
        <div class="modalBackdropWrapper"
            style="background-color: rgba(245, 245, 245, 0.87); height: 100%; display: none;"></div>
        <div class="container containerModal midContainer noTopMargin padding40-top padding40-bottom padding40H borderSolid cornersAll radius10 shadow0 bgNoRepeat emptySection border5px noBorder"
            id="modalPopup" data-title="Modal" data-block-color="0074C7"
            style="margin-top: 100px; padding-top: 40px; padding-bottom: 40px; border-color: rgb(28, 28, 28); outline: none; position: fixed; background-color: rgba(255, 255, 255, 0); display: none;"
            data-trigger="none" data-animate="top" data-delay="0">
            <div class="containerInner ui-sortable">
                <div class="row bgCover noBorder borderSolid border3px cornersAll P0-top P0-bottom P0H noTopMargin radius5 shadow30"
                    id="row--41252" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row"
                    style="padding: 85px 60px 90px; margin: 0px; outline: none; background-color: rgb(255, 255, 255);">
                    <div id="col-full-169-135-175" class="col-md-12 innerContent col_left" data-col="full"
                        data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column"
                        style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px"></div>
                    </div>
                </div>
                <style id="bold_style_tmp_headline1-82884-151">
                    #tmp_headline1-82884-151 .elHeadline b {
                        color: rgb(255, 255, 255);
                    }
                </style>
                <style id="button_style_tmp_button-80746-135">
                    #tmp_button-80746-135 .elButtonFlat:hover {
                        background-color: #d63c00 !important;
                    }

                    #tmp_button-80746-135 .elButtonBottomBorder:hover {
                        background-color: #d63c00 !important;
                    }

                    #tmp_button-80746-135 .elButtonSubtle:hover {
                        background-color: #d63c00 !important;
                    }

                    #tmp_button-80746-135 .elButtonGradient {
                        background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(255, 72, 0)), color-stop(1, #d63c00));
                        background-image: -o-linear-gradient(bottom, rgb(255, 72, 0) 0%, #d63c00 100%);
                        background-image: -moz-linear-gradient(bottom, rgb(255, 72, 0) 0%, #d63c00 100%);
                        background-image: -webkit-linear-gradient(bottom, rgb(255, 72, 0) 0%, #d63c00 100%);
                        background-image: -ms-linear-gradient(bottom, rgb(255, 72, 0) 0%, #d63c00 100%);
                        background-image: linear-gradient(to bottom, rgb(255, 72, 0) 0%, #d63c00 100%);
                    }

                    #tmp_button-80746-135 .elButtonGradient:hover {
                        background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgb(255, 72, 0)), color-stop(0, #d63c00));
                        background-image: -o-linear-gradient(bottom, rgb(255, 72, 0) 100%, #d63c00 0%);
                        background-image: -moz-linear-gradient(bottom, rgb(255, 72, 0) 100%, #d63c00 0%);
                        background-image: -webkit-linear-gradient(bottom, rgb(255, 72, 0) 100%, #d63c00 0%);
                        background-image: -ms-linear-gradient(bottom, rgb(255, 72, 0) 100%, #d63c00 0%);
                        background-image: linear-gradient(to bottom, rgb(255, 72, 0) 100%, #d63c00 0%);
                    }

                    #tmp_button-80746-135 .elButtonGradient2 {
                        background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(255, 72, 0)), color-stop(1, #d63c00));
                        background-image: -o-linear-gradient(bottom, rgb(255, 72, 0) 30%, #d63c00 80%);
                        background-image: -moz-linear-gradient(bottom, rgb(255, 72, 0) 30%, #d63c00 80%);
                        background-image: -webkit-linear-gradient(bottom, rgb(255, 72, 0) 30%, #d63c00 80%);
                        background-image: -ms-linear-gradient(bottom, rgb(255, 72, 0) 30%, #d63c00 80%);
                        background-image: linear-gradient(to bottom, rgb(255, 72, 0) 30%, #d63c00 80%);
                    }

                    #tmp_button-80746-135 .elButtonGradient2:hover {
                        background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgb(255, 72, 0)), color-stop(0, #d63c00));
                        background-image: -o-linear-gradient(bottom, rgb(255, 72, 0) 100%, #d63c00 30%);
                        background-image: -moz-linear-gradient(bottom, rgb(255, 72, 0) 100%, #d63c00 30%);
                        background-image: -webkit-linear-gradient(bottom, rgb(255, 72, 0) 100%, #d63c00 30%);
                        background-image: -ms-linear-gradient(bottom, rgb(255, 72, 0) 100%, #d63c00 30%);
                        background-image: linear-gradient(to bottom, rgb(255, 72, 0) 100%, #d63c00 30%);
                    }

                    #tmp_button-80746-135 .elButtonBorder {
                        border: 3px solid rgb(255, 72, 0) !important;
                        color: rgb(255, 72, 0) !important;
                    }

                    #tmp_button-80746-135 .elButtonBorder:hover {
                        background-color: rgb(255, 72, 0) !important;
                        color: #FFF !important;
                    }
                </style>
            </div>
            <div class="closeLPModal"><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt=""
                    data-src="images/closemodal.png"></div>
        </div>
        <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
        </div>
        <style id="button_style_tmp_button-94931">
            #tmp_button-94931 .elButtonFlat:hover {
                background-color: #cf3323 !important;
            }

            #tmp_button-94931 .elButtonBottomBorder:hover {
                background-color: #cf3323 !important;
            }

            #tmp_button-94931 .elButtonSubtle:hover {
                background-color: #cf3323 !important;
            }

            #tmp_button-94931 .elButtonGradient {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(222, 76, 61)), color-stop(1, #cf3323));
                background-image: -o-linear-gradient(bottom, rgb(222, 76, 61) 0%, #cf3323 100%);
                background-image: -moz-linear-gradient(bottom, rgb(222, 76, 61) 0%, #cf3323 100%);
                background-image: -webkit-linear-gradient(bottom, rgb(222, 76, 61) 0%, #cf3323 100%);
                background-image: -ms-linear-gradient(bottom, rgb(222, 76, 61) 0%, #cf3323 100%);
                background-image: linear-gradient(to bottom, rgb(222, 76, 61) 0%, #cf3323 100%);
            }

            #tmp_button-94931 .elButtonGradient:hover {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgb(222, 76, 61)), color-stop(0, #cf3323));
                background-image: -o-linear-gradient(bottom, rgb(222, 76, 61) 100%, #cf3323 0%);
                background-image: -moz-linear-gradient(bottom, rgb(222, 76, 61) 100%, #cf3323 0%);
                background-image: -webkit-linear-gradient(bottom, rgb(222, 76, 61) 100%, #cf3323 0%);
                background-image: -ms-linear-gradient(bottom, rgb(222, 76, 61) 100%, #cf3323 0%);
                background-image: linear-gradient(to bottom, rgb(222, 76, 61) 100%, #cf3323 0%);
            }

            #tmp_button-94931 .elButtonBorder {
                border: 3px solid rgb(222, 76, 61) !important;
                color: rgb(222, 76, 61) !important;
            }

            #tmp_button-94931 .elButtonBorder:hover {
                background-color: rgb(222, 76, 61) !important;
                color: #FFF !important;
            }
        </style>
        <style id="bold_style_tmp_headline1-90167">
            #tmp_headline1-90167 .elHeadline b {
                color: rgb(222, 76, 61);
            }
        </style>
        <div class="container noTopMargin padding40-top padding40-bottom padding40H borderSolid border3px cornersAll radius0 bgNoRepeat noBorder shadow0 fullContainer emptySection nosticky"
            id="section--27635" data-title="Section" data-block-color="0074C7"
            style="padding-top: 5px; padding-bottom: 0px; outline: none; background-color: rgb(0, 101, 104); border-color: rgb(14, 141, 199); color: rgb(255, 255, 255);"
            data-trigger="none" data-animate="fade" data-delay="500" data-hide-on="">
            <div class="containerInner ui-sortable" style="padding-left: 0px; padding-right: 0px;">
                <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                    id="row--19376" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row"
                    style="padding: 5px 0px 15px; margin: 0px; outline: none;">
                    <div id="col-full-105" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none"
                        data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_subheadline-46037"
                                data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                                style='margin-top: 0px; outline: none; cursor: pointer; font-family: "Droid Sans", Helvetica, sans-serif !important;'
                                data-google-font="Droid+Sans" aria-disabled="false">
                                <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0 mfs_24"
                                    style="text-align: center; font-size: 46px; color: rgb(255, 255, 255);"
                                    data-bold="inherit" data-gramm="false" contenteditable="false"><b>Exipure™ Only
                                        $39/Bottle - Limited Time Offer</b></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
        </div>
        <div class="container fullContainer noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection"
            id="section--25023" data-title="Section" data-block-color="0074C7"
            style="padding-top: 10px; padding-bottom: 0px; outline: none;" data-trigger="none" data-animate="fade"
            data-delay="500" data-hide-on="desktop">
            <div class="containerInner ui-sortable">
                <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                    id="row--53804" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row"
                    style="padding-top: 10px; padding-bottom: 0px; margin: 0px; outline: none;">
                    <div id="col-full-167" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none"
                        data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_subheadline-75347"
                                data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                                style='margin-top: 0px; outline: none; cursor: pointer; font-family: "Fjalla One", Helvetica, sans-serif !important;'
                                data-google-font="Fjalla+One" aria-disabled="false" data-hide-on="desktop">
                                <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0 mfs_28"
                                    style="text-align: center; font-size: 42px; color: rgb(218, 87, 35);"
                                    data-bold="inherit" data-gramm="false" contenteditable="false">Flat Sale ONLY For<b>
                                        Today - </b>Special Offer<div><b>Save Upto $960 + 2 FREE Bonuses + 180 Day Money
                                            Back Guarantee</b></div>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
        </div>
        <a href="<?php echo $main_link ?>">
        <div class="container noTopMargin padding40-top padding40-bottom padding40H borderSolid border3px cornersAll radius0 shadow0 emptySection fullContainer nosticky noBorder bgCover101 containerWithVisibleOverflow"
            id="section--82815" data-title="Section" data-block-color="0074C7"
            style="padding-top: 0px; padding-bottom: 20px; outline: none; background-color: rgb(255, 255, 255); margin-top: 10px;"
            images.clickfunnels.com="" b52291940c11e7ab38bf0cf6ce16a8="" marc-sporys-364980.jpg="" data-trigger="none"
            data-animate="fade" data-delay="500" data-hide-on="" https:="">
            <div class="containerInner ui-sortable">
                <div class="row borderSolid cornersAll shadow0 P0-top P0-bottom P0H noTopMargin bgCover101 borderLight radius10 border2px"
                    id="row--95052" data-trigger="none" data-animate="fade" data-delay="500" data-title="OptinForm"
                    style="padding-top: 0px; padding-bottom: 20px; margin: 15px auto 0px; outline: none; background-color: rgb(255, 255, 255); width: 100%; max-width: 100%;">
                    <div id="col-left-132" class="innerContent col_left ui-resizable col-md-6" data-col="left"
                        data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column"
                        style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable hiddenElementTools de-editable"
                                id="tmp_image-50098" data-de-type="img" data-de-editing="false" data-title="image"
                                data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false"
                                data-element-theme="customized"
                                data-imagelink=""
                                data-hide-on="desktop">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg"
                                    alt="Exipure" width="" height=""
                                    data-imagelink=""
                                    data-src="images/Exipure.png">
                            </div>
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable"
                                id="tmp_image-59084" data-de-type="img" data-de-editing="false" data-title="image"
                                data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false"
                                data-hide-on="desktop">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg"
                                    alt="Exipure Rated 5 Star" width=""
                                    data-src="images/Revitaa-Pro-FDA-Approved.png">
                            </div>
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable"
                                id="img-93169" data-de-type="img" data-de-editing="false" data-title="image"
                                data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false"
                                data-hide-on="desktop">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg"
                                    alt="Exipure Rated 5 Star" width="300"
                                    data-src="images/Five-star-logo-1-.png">
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_subheadline-34806"
                                data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                                style='margin-top: 5px; outline: none; cursor: pointer; font-family: "Fjalla One", Helvetica, sans-serif !important;'
                                aria-disabled="false" data-google-font="Fjalla+One" data-hide-on="desktop">
                                <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0 mfs_22"
                                    style="text-align: center; font-size: 35px; color: rgb(225, 34, 17);"
                                    data-bold="inherit" data-gramm="false" contenteditable="false">
                                    <b>Order TODAY And Save Up To </b>$960!
                                    <div>Save Over 80%!</div>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div id="col-right-105" class="innerContent col_right ui-resizable col-md-6" data-col="right"
                        data-trigger="none" data-animate="fade" data-delay="500" data-title="2nd column"
                        style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable hiddenElementTools de-editable"
                                id="tmp_paragraph-66267" data-de-type="headline" data-de-editing="false"
                                data-title="Paragraph" data-ce="true" data-trigger="none" data-animate="fade"
                                data-delay="500"
                                style='margin-top: 5px; outline: none; cursor: pointer; font-family: "Roboto Slab", Helvetica, sans-serif !important;'
                                data-google-font="Roboto+Slab" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0 mfs_24"
                                    data-bold="inherit" style="text-align: center; font-size: 28px;" data-gramm="false"
                                    contenteditable="false">
                                    <span style="color: inherit;"><b>Exipure</b> is a Natural Weight Loss Supplement
                                        That Aims to Help Users Burn Fat Safely and Effectively.</span>
                                    <div><span style="color: inherit;"><br></span></div>
                                    <div><span style="color: inherit;">The Formula is Easy to Take Each Day, and it Only
                                            Uses <b>Natural Ingredients</b> to Get the Desired Effect.</span></div>
                                </div>
                            </div>
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable hiddenElementTools de-editable"
                                id="tmp_image-56054" data-de-type="img" data-de-editing="false" data-title="image"
                                data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 5px; outline: none; cursor: pointer;" data-hide-on="mobile"
                                data-imagelink=""
                                aria-disabled="false">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg"
                                    alt="Exipure"
                                    data-imagelink=""
                                    data-src="images/Exipure.png">
                            </div>
                            <div class="de elSeperator elMargin0 ui-droppable de-editable" id="tmp_divider-90597"
                                data-de-type="divider" data-de-editing="false" data-title="Divider" data-ce="false"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="elDivider elDividerStyle1 padding10-top padding10-bottom">
                                    <div class="elDividerInner"></div>
                                </div>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_subheadline-64184"
                                data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                                style="margin-top: -3px; outline: none; cursor: pointer; font-family: Oswald, Helvetica, sans-serif !important;"
                                data-google-font="Oswald" aria-disabled="false">
                                <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0 mfs_26"
                                    style="text-align: center; font-size: 32px;" data-bold="inherit" data-gramm="false"
                                    contenteditable="false">Try <font color="#da5723"><b>Exipure</b></font> For Over
                                    <b>80% OFF Today!</b>
                                </h2>
                            </div>
                            <div class="de elSeperator elMargin0 ui-droppable de-editable" id="divider-10376"
                                data-de-type="divider" data-de-editing="false" data-title="Divider" data-ce="false"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="elDivider elDividerStyle1 padding10-top padding10-bottom">
                                    <div class="elDividerInner"></div>
                                </div>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_subheadline-86492"
                                data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                                style="margin-top: 10px; outline: none; cursor: pointer;" aria-disabled="false">
                                <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0 mfs_26"
                                    style="text-align: center; font-size: 30px;" data-bold="inherit" data-gramm="false"
                                    contenteditable="false">Regular Price: <strike>$199/per bottle</strike>
                                </h2>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_subheadline-27801"
                                data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                                style="margin-top: 10px; outline: none; cursor: pointer;" aria-disabled="false">
                                <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0 mfs_30"
                                    style="text-align: center; font-size: 42px;" data-bold="inherit" data-gramm="false"
                                    contenteditable="false"><b>Only for: $39/per bottle</b></h2>
                            </div>
                            <div class="de elCountdownEvergreen elAlign_center elMargin0 ui-droppable de-editable"
                                id="tmp_countdown_evergreen-12725" data-de-type="countdown-evergreen"
                                data-de-editing="false" data-title="Minute Countdown (evergreen)" data-ce="false"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 10px; outline: none; cursor: pointer;"
                                data-element-theme="customized" data-hide-on="mobile" aria-disabled="false">
                                <div class="wideCountdownEvergreen  clearfix hide cdLabelBold wideCountdownSize2 cdYellow cdStyleCircleFill"
                                    data-hours="0" data-minutes="30" data-seconds="0" data-tz="America/New_York"
                                    data-url=""
                                    data-lang="eng" style="">countdown</div>
                                <div class="wideCountdownEvergreen clearfix cdLabelBold wideCountdownSize2 cdYellow cdStyleCircleFill wideCountdown-demo is-countdown"
                                    style=""
                                    data-url="">
                                    <span class="countdown-row countdown-show3"><span class="countdown-section"><span
                                                class="countdown-section"><span class="countdown-amount">00</span><span
                                                    class="countdown-period">Hours</span></span><span
                                                class="countdown-section"><span class="countdown-amount">00</span><span
                                                    class="countdown-period">Minutes</span></span><span
                                                class="countdown-section"><span class="countdown-amount">00</span><span
                                                    class="countdown-period">Seconds</span></span></span></span></div>
                            </div>
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable"
                                id="tmp_image-66375" data-de-type="img" data-de-editing="false" data-title="image"
                                data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 10px; outline: none; cursor: pointer;"
                                data-imagelink=""
                                aria-disabled="false">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg"
                                    alt="Buy Exipure"
                                    data-imagelink="" width=""
                                    data-src="images/Buy-Now-1.gif">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </a>
        <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
        </div>
        <div class="container fullContainer noTopMargin padding20-top padding20-bottom padding40H borderSolid cornersAll radius0 shadow0 bgNoRepeat emptySection borderLightTop border2px"
            id="section--40000" data-title="Section" data-block-color="0074C7"
            style="padding-top: 5px; padding-bottom: 20px; outline: none;" data-trigger="none" data-animate="fade"
            data-delay="500">
            <div class="containerInner ui-sortable">
                <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                    id="row--41031" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row"
                    style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none;">
                    <div id="col-full-108" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none"
                        data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elHeadlineWrapper radius5 ui-droppable hiddenElementTools de-editable"
                                id="tmp_subheadline-16154" data-de-type="headline" data-de-editing="false"
                                data-title="sub-headline" data-ce="true" data-trigger="none" data-animate="fade"
                                data-delay="500" data-gramm="false"
                                style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
                                <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0 shadow20 radius5 padding10 mfs_28"
                                    style="text-align: center; font-size: 34px; background-color: rgb(0, 101, 104);"
                                    data-bold="inherit" data-gramm="false" contenteditable="false"><b>Proven By
                                        Thousands</b></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row bgCover borderSolid cornersAll shadow0 P0-top P0-bottom P0H noTopMargin radius10 borderLight border2px"
                    id="row--29197" data-trigger="none" data-animate="fade" data-delay="500" data-title="3 column row"
                    style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none;">
                    <div id="col-left-173" class="col-md-4 innerContent col_left ui-resizable" data-col="left"
                        data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column"
                        style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable"
                                id="img-88374" data-de-type="img" data-de-editing="false" data-title="image"
                                data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                                    class="elIMG ximg img-circle" alt="Lauren G" width="200"
                                    data-src="images/Lauren-G.jpg">
                            </div>
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable"
                                id="img-68830" data-de-type="img" data-de-editing="false" data-title="image"
                                data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 15px; outline: none; cursor: pointer;" aria-disabled="false">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg"
                                    alt="Lauren G Rated 5 Star" width="270"
                                    data-src="images/png-transparent-star-5-star-text-logo-computer-wallpaper-removebg-preview.png">
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-98341"
                                data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                                style='margin-top: 5px; outline: none; cursor: pointer; font-family: "Roboto Slab", Helvetica, sans-serif !important;'
                                data-google-font="Roboto+Slab" aria-disabled="false">
                                <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0"
                                    style="text-align: center; font-size: 24px;" data-bold="inherit" data-gramm="false"
                                    contenteditable="false"><b>Verified Purchase</b></h2>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-93782"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 15px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0 mfs_26"
                                    data-bold="inherit" style="text-align: center; font-size: 24px;" data-gramm="false"
                                    contenteditable="false"><b>“Lauren is 35 lbs lighter so far...!”</b></div>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable hiddenElementTools de-editable"
                                id="headline-73169" data-de-type="headline" data-de-editing="false"
                                data-title="Paragraph" data-ce="true" data-trigger="none" data-animate="fade"
                                data-delay="500" style="margin-top: 5px; outline: none; cursor: pointer;"
                                aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit" style="text-align: center; font-size: 22px;" data-gramm="false"
                                    contenteditable="false">“I never used to leave the house, worried about not fitting
                                    into chairs or public transport. Now after trying Exipure I'm down 35 lbs! I feel
                                    and look amazing. My energy levels are through the roof and I regularly use the bus
                                    and try on slim clothes and shop in the mall stress free. Thank you so much!”</div>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-85106"
                                data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                                style="margin-top: 10px; outline: none; cursor: pointer;" aria-disabled="false">
                                <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0"
                                    style="text-align: right; font-size: 22px;" data-bold="inherit" data-gramm="false"
                                    contenteditable="false">
                                    <font color="#e12211"><b>Lauren G. Wyoming, USA</b></font>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div id="col-center-112" class="col-md-4 innerContent col_right ui-resizable" data-col="center"
                        data-trigger="none" data-animate="fade" data-delay="500" data-title="2nd column"
                        style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable"
                                id="img-22762" data-de-type="img" data-de-editing="false" data-title="image"
                                data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                                    class="elIMG ximg img-circle" alt="Zach M" width="200"
                                    data-src="images/Zach-M.jpg">
                            </div>
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable"
                                id="img-35616" data-de-type="img" data-de-editing="false" data-title="image"
                                data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 15px; outline: none; cursor: pointer;" aria-disabled="false">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg"
                                    alt="Zach M Rated 5 Star" width="270"
                                    data-src="images/png-transparent-star-5-star-text-logo-computer-wallpaper-removebg-preview.png">
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-76277"
                                data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                                style='margin-top: 5px; outline: none; cursor: pointer; font-family: "Roboto Slab", Helvetica, sans-serif !important;'
                                data-google-font="Roboto+Slab" aria-disabled="false">
                                <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0"
                                    style="text-align: center; font-size: 24px;" data-bold="inherit" data-gramm="false"
                                    contenteditable="false"><b>Verified Purchase</b></h2>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-99907"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 15px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0 mfs_26"
                                    data-bold="inherit" style="text-align: center; font-size: 24px;" data-gramm="false"
                                    contenteditable="false">
                                    <font color="#e43b2c"><span style="caret-color: rgb(228, 59, 44);"><b>“Zach has
                                                dropped 26 lbs...!”</b></span></font>
                                </div>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-59826"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 5px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit" style="text-align: center; font-size: 22px;" data-gramm="false"
                                    contenteditable="false">“I was so embarrassed when my son grabbed my belly and
                                    asked, Daddy why is your tummy so squishy. I had to do something, and when I saw the
                                    Exipure video and verified the research I had to try it out. I'm down 26 lbs and it
                                    keeps melting off! My snoring has disappeared. I feel fitter and happier than I did
                                    in my 30s!<span style="background-color: initial; color: inherit;">”</span>
                                </div>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-30491"
                                data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                                style="margin-top: 5px; outline: none; cursor: pointer;" aria-disabled="false">
                                <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0"
                                    style="text-align: right; font-size: 22px;" data-bold="inherit" data-gramm="false"
                                    contenteditable="false">
                                    <font color="#e12211"><span style="caret-color: rgb(225, 34, 17);"><b>Zach M. New
                                                York, USA</b></span></font>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div id="col-right-166" class="col-md-4 innerContent col_right ui-resizable" data-col="right"
                        data-trigger="none" data-animate="fade" data-delay="500" data-title="3rd Column"
                        style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable"
                                id="img-30209" data-de-type="img" data-de-editing="false" data-title="image"
                                data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                                    class="elIMG ximg img-circle" alt="Cassie T" width="200"
                                    data-src="images/Cassie-T.jpg">
                            </div>
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable"
                                id="tmp_image-58400" data-de-type="img" data-de-editing="false" data-title="image"
                                data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 15px; outline: none; cursor: pointer;" aria-disabled="false">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg"
                                    alt="Cassie T Rated 5 Star" width="270"
                                    data-src="images/png-transparent-star-5-star-text-logo-computer-wallpaper-removebg-preview.png">
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_subheadline-23023"
                                data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                                style='margin-top: 5px; outline: none; cursor: pointer; font-family: "Roboto Slab", Helvetica, sans-serif !important;'
                                data-google-font="Roboto+Slab" aria-disabled="false">
                                <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0"
                                    style="text-align: center; font-size: 24px;" data-bold="inherit" data-gramm="false"
                                    contenteditable="false"><b>Verified Purchase</b></h2>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-84107"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 15px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0 mfs_26"
                                    data-bold="inherit" style="text-align: center; font-size: 24px;" data-gramm="false"
                                    contenteditable="false">
                                    <font color="#e43b2c"><span style="caret-color: rgb(228, 59, 44);"><b>"Cassie
                                                dissolved 40 lbs in no time...!"</b></span></font>
                                </div>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-81143"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 5px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit" style="text-align: center; font-size: 22px;" data-gramm="false"
                                    contenteditable="false">“Every since taking Exipure every day I am eating what I
                                    want - more than ever, but I'm still dropping weight! I'm down 4 dress sizes, about
                                    40 lbs. Who would have thought it would be so easy? I feel so sexy, so pretty. I no
                                    longer worry about what my friends think of me or how my weight affects those around
                                    me. Thank you!<span style="background-color: initial; color: inherit;">”</span>
                                </div>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_subheadline-99515"
                                data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                                style="margin-top: 10px; outline: none; cursor: pointer;" aria-disabled="false">
                                <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0"
                                    style="text-align: right; font-size: 22px;" data-bold="inherit" data-gramm="false"
                                    contenteditable="false">
                                    <font color="#e12211"><span style="caret-color: rgb(225, 34, 17);"><b>Cassie T.
                                                Delaware, USA</b></span></font>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
        </div>
        <div class="container fullContainer noTopMargin padding20-top padding20-bottom padding40H borderSolid cornersAll radius0 shadow0 bgNoRepeat emptySection border2px borderLightTop"
            id="section--70046" data-title="Section" data-block-color="0074C7"
            style="padding-top: 0px; padding-bottom: 15px; outline: none; background-color: rgb(0, 101, 104);"
            data-trigger="none" data-animate="fade" data-delay="500">
            <div class="containerInner ui-sortable">
                <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                    id="row--46772" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row"
                    style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none;">
                    <div id="col-full-114" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none"
                        data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable radius5 de-editable"
                                id="tmp_subheadline-16105" data-de-type="headline" data-de-editing="false"
                                data-title="sub-headline" data-ce="true" data-trigger="none" data-animate="fade"
                                data-delay="500" data-gramm="false"
                                style="margin-top: 0px; outline: none; cursor: pointer; background-color: rgb(255, 255, 255);"
                                aria-disabled="false">
                                <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0 shadow20 radius5 padding10 mfs_28"
                                    style="text-align: center; font-size: 34px; background-color: rgb(255, 255, 255);"
                                    data-bold="inherit" data-gramm="false" contenteditable="false"><b>Why Choose
                                        Exipure</b></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row bgCover borderSolid cornersAll shadow0 P0-top P0-bottom P0H noTopMargin borderLight radius10 border2px"
                    id="row--68414" data-trigger="none" data-animate="fade" data-delay="500" data-title="3 column row"
                    style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none; color: rgb(255, 255, 255); border-color: rgb(255, 255, 255);">
                    <div id="col-left-153" class="col-md-4 innerContent col_left ui-resizable" data-col="left"
                        data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column"
                        style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable"
                                id="tmp_image-31931" data-de-type="img" data-de-editing="false" data-title="image"
                                data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg"
                                    alt="Made In The USA"
                                    data-src="images/usa.png">
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-30286"
                                data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                                style="margin-top: 15px; outline: none; cursor: pointer;" aria-disabled="false">
                                <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0 mfs_26"
                                    style="text-align: center;font-size: 23px" data-bold="inherit" data-gramm="false"
                                    contenteditable="false"><b>Made In The USA</b></h2>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-88674"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 5px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit"
                                    style="text-align: center; font-size: 22px; color: rgb(255, 255, 255);"
                                    data-gramm="false" contenteditable="false">Exipure is manufactured on US soil.</div>
                            </div>
                        </div>
                    </div>
                    <div id="col-center-136" class="col-md-4 innerContent col_right ui-resizable" data-col="center"
                        data-trigger="none" data-animate="fade" data-delay="500" data-title="2nd column"
                        style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable"
                                id="tmp_image-27552" data-de-type="img" data-de-editing="false" data-title="image"
                                data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg"
                                    alt="Exipure 100% All Natural"
                                    data-src="images/all.png">
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-87073"
                                data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                                style="margin-top: 15px; outline: none; cursor: pointer;" aria-disabled="false">
                                <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0 mfs_26"
                                    style="text-align: center;font-size: 23px" data-bold="inherit" data-gramm="false"
                                    contenteditable="false"><b>100% All Natural</b></h2>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-76066"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 5px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit"
                                    style="text-align: center; font-size: 22px; color: rgb(255, 255, 255);"
                                    data-gramm="false" contenteditable="false">All ingredients are pure, natural, and
                                    carefully sourced.</div>
                            </div>
                        </div>
                    </div>
                    <div id="col-right-163" class="col-md-4 innerContent col_right ui-resizable" data-col="right"
                        data-trigger="none" data-animate="fade" data-delay="500" data-title="3rd Column"
                        style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable"
                                id="tmp_image-33671" data-de-type="img" data-de-editing="false" data-title="image"
                                data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg"
                                    alt="FDA Approved Facility"
                                    data-src="images/fda.png">
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_subheadline-69558"
                                data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                                style="margin-top: 15px; outline: none; cursor: pointer;" aria-disabled="false">
                                <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0 mfs_26"
                                    style="text-align: center;font-size: 23px" data-bold="inherit" data-gramm="false"
                                    contenteditable="false"><b>FDA Approved Facility</b></h2>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-35904"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 5px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit"
                                    style="text-align: center; font-size: 22px; color: rgb(255, 255, 255);"
                                    data-gramm="false" contenteditable="false">Exipure is manufactured according to the
                                    latest standards.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
        </div>
        <div class="container fullContainer noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection"
            id="section--65219" data-title="Section" data-block-color="0074C7"
            style="padding-top: 20px; padding-bottom: 20px; outline: none;" data-trigger="none" data-animate="fade"
            data-delay="500">
            <div class="containerInner ui-sortable">
                <div class="row bgCover borderSolid cornersAll shadow0 P0-top P0-bottom P0H noTopMargin radius10 borderLight border2px"
                    id="row--78813" data-trigger="none" data-animate="fade" data-delay="500" data-title="2 column row"
                    style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none;">
                    <div id="col-left-177" class="innerContent col_left ui-resizable col-md-4" data-col="left"
                        data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column"
                        style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable"
                                id="tmp_image-99654" data-de-type="img" data-de-editing="false" data-title="image"
                                data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 15px; outline: none; cursor: pointer;" aria-disabled="false"
                                data-hide-on="desktop"
                                data-imagelink="">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg"
                                    alt="Exipure Supplement" width="300"
                                    data-imagelink=""
                                    data-src="images/Exipure-1-Bottle.png">
                            </div>
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable"
                                id="tmp_image-97906" data-de-type="img" data-de-editing="false" data-title="image"
                                data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 35px; outline: none; cursor: pointer;" aria-disabled="false"
                                data-hide-on="desktop">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg"
                                    alt="Exipure Results"
                                    data-src="images/testi3.png">
                            </div>
                        </div>
                    </div>
                    <div id="col-right-172" class="innerContent col_right ui-resizable col-md-8" data-col="right"
                        data-trigger="none" data-animate="fade" data-delay="500" data-title="2nd column"
                        style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_headline1-50005"
                                data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
                                <h1 class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0 mfs_30"
                                    style="text-align: left; font-size: 38px;" data-bold="inherit" data-gramm="false"
                                    contenteditable="false"><b>What is Exipure?</b></h1>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-14734"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 15px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit" style="text-align: left; font-size: 22px;" data-gramm="false"
                                    contenteditable="false">
                                    <div>Exipure is an all-natural dietary supplement that has been carefully designed
                                        and formulated with love and care after years of research and testing to help
                                        people lose weight naturally and healthily.</div>
                                    <div><br></div>
                                    <div>This revolutionary formula is made with a healthy blend of 8 exotic nutrients
                                        that are super healthy and have been proven to be effective to help shed
                                        unwanted fats.</div>
                                    <div><br></div>
                                    <div>The main aim of this supplement is to help men and women facing the problem of
                                        obesity, get rid of it and its ill effects.</div>
                                    <div><br></div>
                                    <div>Did you know the root cause of obesity is low brown adipose tissue levels?
                                        Thus, to help you overcome that, the makers have added the correct amount of
                                        herbs and ingredients that will help your body create brown adipose tissue so
                                        that your body can naturally burn a lot of fats.</div>
                                    <div><br></div>
                                    <div>The entire Exipure formula has been manufactured right here in the USA in an
                                        FDA-approved facility. The solution is also certified by the Goods Manufacturing
                                        Practices facility (GMP).</div>
                                    <div><br></div>
                                    <div>Each and every batch of Exipure has been made under strict, sterile, and
                                        precise standards that ensure high quality and safety. It is easy to use and
                                        easy to swallow.</div>
                                    <div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
        </div>
        <div class="container wideContainer noTopMargin padding20-top padding20-bottom padding40H borderSolid cornersAll emptySection radius10 bgCover shadow20 borderLight border2px"
            id="section--18274" data-title="Section" data-block-color="0074C7"
            style="padding-top: 20px; padding-bottom: 20px; outline: none; background-color: rgb(255, 255, 255);"
            data-trigger="none" data-animate="fade" data-delay="500">
            <div class="containerInner ui-sortable">
                <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                    id="row--81920" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row"
                    style="padding: 20px 0px; margin: 0px; outline: none; background-color: rgb(255, 255, 255);">
                    <div id="col-full-127" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none"
                        data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable radius5 de-editable" id="headline-10119"
                                data-de-type="headline" data-de-editing="false" data-title="headline" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 0px; outline: none; cursor: pointer; background-color: rgb(0, 117, 178);"
                                aria-disabled="false">
                                <h1 class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0 shadow20 radius5 padding5 mfs_28"
                                    style="text-align: center; font-size: 34px; background-color: rgb(0, 101, 104);"
                                    data-bold="inherit" data-gramm="false" contenteditable="false">
                                    <font color="#ffffff"><b>How Exipure Can Help You Lose Weight?</b></font>
                                </h1>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-92486"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 15px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit"
                                    style="text-align: left; font-size: 22px; color: rgb(45, 45, 45);"
                                    data-gramm="false" contenteditable="false">Exipure is a weight loss formula that
                                    uses eight plant and herb extracts to raise levels of brown adipose tissue (BAT) in
                                    your body.
                                    <div><br></div>
                                    <div>BAT is a fat burning furnace hiding inside every lean person. Research has
                                        increasingly validated the value of BAT for weight loss. Studies show that BAT
                                        burns calories 300 times faster than other fat cells, for example. It helps you
                                        maintain a caloric deficit – and it burns calories inside of you 24 hours a day,
                                        7 days a week.</div>
                                    <div><br></div>
                                    <div>Here’s how the makers of Exipure explain how the diet pill works:</div>
                                    <div><br></div>
                                    <div>“Exipure is unlike anything you’ve ever tried or experienced in your life
                                        before. It is the only product in the world with a proprietary blend of 8 exotic
                                        nutrients and plants designed to target low brown adipose tissue (BAT) levels,
                                        the new found root-cause of your unexplained weight gain.”</div>
                                    <div><br></div>
                                    <div>By raising BAT levels even a small amount, Exipure can lead to a huge increase
                                        in your body’s calorie and fat burning powers.</div>
                                    <div><br></div>
                                    <div>At the same time, BAT can also boost energy levels. When your body has higher
                                        levels of BAT, it tends to have higher levels of energy.</div>
                                    <div><br></div>
                                    <div>With all of that in mind, Exipure aims to jumpstart your metabolism and energy
                                        by raising levels of brown adipose tissue within your body.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
        </div>
        <div class="container fullContainer noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection"
            id="section--98523" data-title="Section" data-block-color="0074C7"
            style="padding-top: 5px; padding-bottom: 20px; outline: none; background-color: rgba(0, 0, 0, 0);"
            data-trigger="none" data-animate="fade" data-delay="500">
            <div class="containerInner ui-sortable">
                <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                    id="row--20527" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row"
                    style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none;">
                    <div id="col-full-169" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none"
                        data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable radius5 de-editable"
                                id="tmp_subheadline-64215" data-de-type="headline" data-de-editing="false"
                                data-title="sub-headline" data-ce="true" data-trigger="none" data-animate="fade"
                                data-delay="500" data-gramm="false"
                                style='margin-top: 0px; outline: none; cursor: pointer; background-color: rgb(239, 247, 255); font-family: "Fjalla One", Helvetica, sans-serif !important;'
                                data-google-font="Fjalla+One" aria-disabled="false">
                                <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0 shadow20 padding5 radius5 mfs_28"
                                    style="text-align: center; font-size: 42px; color: rgb(0, 101, 104); background-color: rgb(239, 247, 255);"
                                    data-bold="inherit" data-gramm="false" contenteditable="false">Order <b>6
                                        Bottles</b> or <b>3 Bottles</b> and Get <b>2 FREE Bonuses!</b>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row bgCover borderSolid cornersAll shadow0 P0-top P0-bottom P0H noTopMargin borderLight border2px radius10"
                    id="row--59734" data-trigger="none" data-animate="fade" data-delay="500" data-title="2 column row"
                    style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none;">
                    <div id="col-left-102" class="innerContent col_left ui-resizable col-md-3" data-col="left"
                        data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column"
                        style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable"
                                id="tmp_image-59721" data-de-type="img" data-de-editing="false" data-title="image"
                                data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg"
                                    alt="1-Day Kickstart Detox" width="240"
                                    data-src="images/book-1.jpg">
                            </div>
                        </div>
                    </div>
                    <div id="col-right-170" class="innerContent col_right ui-resizable col-md-9" data-col="right"
                        data-trigger="none" data-animate="fade" data-delay="500" data-title="2nd column"
                        style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_subheadline-59087"
                                data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                                style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
                                <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0 mfs_26"
                                    style="text-align: left; font-size: 34px;" data-bold="inherit" data-gramm="false"
                                    contenteditable="false"><b>BONUS #1: 1-Day Kickstart Detox</b></h2>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-89751"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 5px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0 mfs_22"
                                    data-bold="inherit" style="text-align: left; font-size: 24px;" data-gramm="false"
                                    contenteditable="false">Detox, cleanse and flush your organs to aid absorption and
                                    kickstart your Exipure journey with 20 bizarre 15 second detox tea recipes, using
                                    everyday ingredients from your kitchen.</div>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-99332"
                                data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                                style='margin-top: 15px; outline: none; cursor: pointer; font-family: "Fjalla One", Helvetica, sans-serif !important;'
                                data-google-font="Fjalla+One" aria-disabled="false">
                                <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0 mfs_28"
                                    style="text-align: left; font-size: 32px; color: rgb(228, 59, 44);"
                                    data-bold="inherit" data-gramm="false" contenteditable="false">RRP: <strike
                                        style="">$59.95</strike> Today: <b>FREE</b>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row bgCover borderSolid cornersAll shadow0 P0-top P0-bottom P0H noTopMargin borderLight border2px radius10"
                    id="row--59734-112" data-trigger="none" data-animate="fade" data-delay="500"
                    data-title="2 column row - Clone"
                    style="padding-top: 20px; padding-bottom: 20px; margin: 10px 0px 0px; outline: none;">
                    <div id="col-left-102-121" class="innerContent col_left ui-resizable col-md-3" data-col="left"
                        data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column"
                        style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable"
                                id="tmp_image-59721-131" data-de-type="img" data-de-editing="false" data-title="image"
                                data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg"
                                    alt="Renew You" width="240"
                                    data-src="images/book-2.jpg">
                            </div>
                        </div>
                    </div>
                    <div id="col-right-170-111" class="innerContent col_right ui-resizable col-md-9" data-col="right"
                        data-trigger="none" data-animate="fade" data-delay="500" data-title="2nd column"
                        style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_subheadline-59087-147"
                                data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                                style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
                                <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0 mfs_26"
                                    style="text-align: left; font-size: 34px;" data-bold="inherit" data-gramm="false"
                                    contenteditable="false"><b>BONUS #2: Renew You</b></h2>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable hiddenElementTools de-editable"
                                id="tmp_paragraph-89751-105" data-de-type="headline" data-de-editing="false"
                                data-title="Paragraph" data-ce="true" data-trigger="none" data-animate="fade"
                                data-delay="500" style="margin-top: 5px; outline: none; cursor: pointer;"
                                aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0 mfs_22"
                                    data-bold="inherit" style="text-align: left; font-size: 24px;" data-gramm="false"
                                    contenteditable="false">With your brand-new fast-tracked body comes a new mindset.
                                    Discover simple methods you can do right now to instantly relieve stress and calm
                                    your mind, boost confidence and reduce anxiety.</div>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-99332-153"
                                data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                                style='margin-top: 15px; outline: none; cursor: pointer; font-family: "Fjalla One", Helvetica, sans-serif !important;'
                                data-google-font="Fjalla+One" aria-disabled="false">
                                <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0 mfs_28"
                                    style="text-align: left; font-size: 32px; color: rgb(228, 59, 44);"
                                    data-bold="inherit" data-gramm="false" contenteditable="false">RRP: <strike
                                        style="">$49.95</strike> Today: <b>FREE</b>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
        </div>
        <div class="container fullContainer noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgCover101 emptySection"
            id="section--47669" data-title="Section" data-block-color="0074C7"
            style='padding-top: 30px; padding-bottom: 15px; outline: none; background-image: url("images/greentexture-bg.jpg"); margin-top: 25px;'
            data-trigger="none" data-animate="fade" data-delay="500">
            <div class="containerInner ui-sortable">
                <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                    id="row--91615" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row"
                    style="padding-top: 0px; padding-bottom: 20px; margin: 0px; outline: none;">
                    <div id="col-full-147" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none"
                        data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_subheadline-60102"
                                data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                                style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
                                <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0 mfs_30"
                                    style="text-align: center; font-size: 52px;" data-bold="inherit" data-gramm="false"
                                    contenteditable="false"><b>Limited Time Special Pricing - Act Now!</b></h2>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-51335"
                                data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                                style="margin-top: 5px; outline: none; cursor: pointer;" aria-disabled="false">
                                <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0 mfs_24"
                                    style="text-align: center; font-size: 38px;" data-bold="inherit" data-gramm="false"
                                    contenteditable="false"><b>Secure Your Reserved Exipure While Stocks Last</b></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
        </div>
        <div class="container fullContainer noTopMargin padding20-top padding20-bottom padding40H borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection noBorder containerWithVisibleOverflow"
            id="section--12187-105-128" data-title="Section - Clone - Clone" data-block-color="0074C7"
            style="padding-top: 20px; padding-bottom: 20px; outline: none; background-color: rgb(255, 255, 255); margin-top: 5px;"
            data-trigger="none" data-animate="fade" data-delay="500" data-hide-on="">
            <div class="containerInner ui-sortable">
                <div class="row bgCover border3px P0-top P0-bottom P0H noTopMargin borderSolid borderLightBottom shadow5inner cornersAll radius50"
                    id="row--45669-186-124" data-trigger="none" data-animate="fade" data-delay="500"
                    data-title="3 column row"
                    style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none; background-color: rgb(239, 247, 255);">
                    <div id="col-left-187-183-154" class="col-md-4 innerContent col_left ui-resizable" data-col="left"
                        data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column"
                        style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable radius10 de-editable" id="headline-27276"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 10px; outline: none; cursor: pointer; background-color: rgb(0, 117, 178);"
                                aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0 padding5 radius10 cornersTop"
                                    data-bold="inherit"
                                    style="text-align: center; font-size: 32px; background-color: rgb(0, 117, 178);"
                                    data-gramm="false" contenteditable="false">
                                    <font color="#2d2d2d"><b>1 Bottle</b></font>
                                </div>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-36201"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 10px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit" style="text-align: center; font-size: 28px;" data-gramm="false"
                                    contenteditable="false"><b>
                                        1 Month Supply</b></div>
                            </div>
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable"
                                id="img-97524-148" data-de-type="img" data-de-editing="false" data-title="image"
                                data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 10px; outline: none; cursor: pointer;" aria-disabled="false">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg"
                                    alt="Buy Exipure 1 Bottle" width="173"
                                    data-src="images/Exipure-1-Bottle.png">
                            </div>
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable"
                                id="img-45775-132" data-de-type="img" data-de-editing="false" data-title="image"
                                data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 15px; outline: none; cursor: pointer;" aria-disabled="false">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg"
                                    alt="$59 Per Bottle" width="220"
                                    data-src="//exipurebuyz.us/hosted/images/47/df1aa69bdc48f094c92b6ada80a9c3/59-Per-Bottle.png">
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-20927-179"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 30px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit" style="text-align: center; font-size: 36px;" data-gramm="false"
                                    contenteditable="false"><b>
                                        Total: <strike>$199</strike> $59</b></div>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-98316-133"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: -5px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit" style="text-align: center; font-size: 28px;" data-gramm="false"
                                    contenteditable="false"><b>
                                        You Save $140</b></div>
                            </div>
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable"
                                id="img-69172-153" data-de-type="img" data-de-editing="false" data-title="image"
                                data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 15px; outline: none; cursor: pointer;" aria-disabled="false"
                                data-imagelink="">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg"
                                    alt="Order Exipure 1 Bottle"
                                    data-imagelink=""
                                    data-src="images/Order-Now-2.png">
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-63194-101"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 5px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit" style="text-align: center; font-size: 20px;" data-gramm="false"
                                    contenteditable="false">
                                    <i class="fa_prepended fas fa-shipping-fast" contenteditable="false"></i><b>
                                        + Small Shipping</b>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="col-center-177-134-172" class="col-md-4 innerContent col_right ui-resizable"
                        data-col="center" data-trigger="none" data-animate="fade" data-delay="500"
                        data-title="2nd column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable radius10 de-editable" id="headline-31262"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 10px; outline: none; cursor: pointer; background-color: rgb(228, 59, 44);"
                                aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0 padding5 radius10 cornersTop"
                                    data-bold="inherit"
                                    style="text-align: center; font-size: 32px; background-color: rgb(228, 59, 44);"
                                    data-gramm="false" contenteditable="false">
                                    <font color="#2d2d2d"><b>6 Bottles</b></font>
                                </div>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-29216-148"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 10px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit" style="text-align: center; font-size: 28px;" data-gramm="false"
                                    contenteditable="false"><b>
                                        6 Month Supply</b></div>
                            </div>
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable hiddenElementTools de-editable"
                                id="img-13620-161" data-de-type="img" data-de-editing="false" data-title="image"
                                data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 10px; outline: none; cursor: pointer;" aria-disabled="false">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg"
                                    alt="Buy Exipure 6 Bottles" width="292"
                                    data-src="images/Exipure-6-Bottles.png">
                            </div>
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable"
                                id="img-19691-162" data-de-type="img" data-de-editing="false" data-title="image"
                                data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 15px; outline: none; cursor: pointer;" aria-disabled="false">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg"
                                    alt="Buy 6 Bottles/ $39 Per Bottle" width="220"
                                    data-src="//exipurebuyz.us/hosted/images/4b/7b940bd8a2439cb1025f8ac745ec41/39-Per-Bottle.png">
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-13239-121"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 30px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit" style="text-align: center; font-size: 36px;" data-gramm="false"
                                    contenteditable="false"><b>
                                        Total: <strike>$1194</strike> $234</b></div>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-46345-144"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: -5px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit" style="text-align: center; font-size: 28px;" data-gramm="false"
                                    contenteditable="false"><b>
                                        You Save $960</b></div>
                            </div>
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable"
                                id="img-12639-145" data-de-type="img" data-de-editing="false" data-title="image"
                                data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 15px; outline: none; cursor: pointer;" aria-disabled="false"
                                data-imagelink="">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg"
                                    alt="Order Exipure 6 Bottles"
                                    data-imagelink=""
                                    data-src="images/Order-Now-2.png">
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-62199-117"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 5px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit" style="text-align: center; font-size: 20px;" data-gramm="false"
                                    contenteditable="false">
                                    <i class="fa_prepended fas fa-shipping-fast" contenteditable="false"></i><b> Free
                                        Shipping</b>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="col-right-118-122-117" class="col-md-4 innerContent col_right ui-resizable"
                        data-col="right" data-trigger="none" data-animate="fade" data-delay="500"
                        data-title="3rd column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable radius10 de-editable" id="headline-88110-149"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 10px; outline: none; cursor: pointer; background-color: rgb(0, 117, 178);"
                                aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0 padding5 radius10 cornersTop"
                                    data-bold="inherit"
                                    style="text-align: center; font-size: 32px; background-color: rgb(0, 117, 178);"
                                    data-gramm="false" contenteditable="false">
                                    <font color="#2d2d2d"><b>3 Bottles</b></font>
                                </div>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-83814-118"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 10px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit" style="text-align: center; font-size: 28px;" data-gramm="false"
                                    contenteditable="false"><b>
                                        3 Month Supply</b></div>
                            </div>
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable"
                                id="tmp_image-89674-159" data-de-type="img" data-de-editing="false" data-title="image"
                                data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 10px; outline: none; cursor: pointer;" aria-disabled="false">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg"
                                    alt="Buy Exipure 3 Bottles" width=""
                                    data-src="images/Exipure-3-Bottles.png">
                            </div>
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable"
                                id="tmp_image-56895-115" data-de-type="img" data-de-editing="false" data-title="image"
                                data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 15px; outline: none; cursor: pointer;" aria-disabled="false">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg"
                                    alt="Buy 3 Bottles/ $49 Per Bottle" width="220"
                                    data-src="//exipurebuyz.us/hosted/images/71/1e7e3e86bd4600a1be76e2ca2991d4/49-Per-Bottle.png">
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-62212-176"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 30px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit" style="text-align: center; font-size: 36px;" data-gramm="false"
                                    contenteditable="false"><b>
                                        Total: <strike>$597</strike> $147</b></div>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-24252-102"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: -5px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit" style="text-align: center; font-size: 28px;" data-gramm="false"
                                    contenteditable="false"><b>
                                        You Save $450</b></div>
                            </div>
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable"
                                id="tmp_image-54504-147" data-de-type="img" data-de-editing="false" data-title="image"
                                data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 15px; outline: none; cursor: pointer;" aria-disabled="false"
                                data-imagelink="">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg"
                                    alt="Order Exipure 3 Bottles"
                                    data-imagelink=""
                                    data-src="images/Order-Now-2.png">
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-43872-125"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 5px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit" style="text-align: center; font-size: 20px;" data-gramm="false"
                                    contenteditable="false">
                                    <i class="fa_prepended fas fa-shipping-fast" contenteditable="false"></i><b> + Small
                                        Shipping</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row bgCover borderSolid border3px cornersAll shadow0 P0-top P0-bottom P0H noTopMargin radius10 borderLight"
                    id="row--21982-170-133" data-trigger="none" data-animate="fade" data-delay="500"
                    data-title="2 column row"
                    style="padding-top: 9px; padding-bottom: 9px; margin: 20px 0px 0px; outline: none; background-color: rgb(253, 184, 49);"
                    data-hide-on="">
                    <div id="col-left-129-106-136" class="innerContent col_left ui-resizable col-md-2" data-col="left"
                        data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column"
                        style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elImageWrapper de-image-block elMargin0 ui-droppable elAlign_right de-editable"
                                id="tmp_image-38704-170-101" data-de-type="img" data-de-editing="false"
                                data-title="image" data-ce="false" data-trigger="none" data-animate="fade"
                                data-delay="500" style="margin-top: 5px; outline: none; cursor: pointer;"
                                aria-disabled="false">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg"
                                    alt="Exipure Limited Time Offer" width="60"
                                    data-src="images/warning.png">
                            </div>
                        </div>
                    </div>
                    <div id="col-right-151-144-132" class="innerContent col_right ui-resizable col-md-10"
                        data-col="right" data-trigger="none" data-animate="fade" data-delay="500"
                        data-title="2nd column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-78299-187-153"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style='margin-top: 0px; outline: none; cursor: pointer; font-family: "Fjalla One", Helvetica, sans-serif !important;'
                                data-google-font="Fjalla+One" aria-disabled="false" data-hide-on="desktop">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0 mfs_20"
                                    data-bold="inherit"
                                    style="text-align: left; font-size: 24px; color: rgb(241, 20, 0);"
                                    data-gramm="false" contenteditable="false">
                                    <b>WARNING Nov-2021:</b> Stock levels of Exipure are limited Accept your reserved
                                    bottle above <b>NOW</b> before your discount expires.
                                </div>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-37031"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style='margin-top: 0px; outline: none; cursor: pointer; font-family: "Fjalla One", Helvetica, sans-serif !important;'
                                data-google-font="Fjalla+One" aria-disabled="false" data-hide-on="mobile">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0 mfs_20"
                                    data-bold="inherit"
                                    style="text-align: center; font-size: 24px; color: rgb(241, 20, 0);"
                                    data-gramm="false" contenteditable="false">
                                    <b>WARNING Nov-2021:</b> Stock levels of Exipure are limited Accept your reserved
                                    pouch above <b>NOW</b> before your discount expires.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
        </div>
        <div class="container wideContainer noTopMargin padding20-top padding20-bottom padding40H borderSolid cornersAll emptySection radius10 bgCover101 shadow20 borderLight border2px"
            id="section--18274-157" data-title="Section - Clone" data-block-color="0074C7"
            style="padding-top: 20px; padding-bottom: 20px; outline: none; background-color: rgb(255, 255, 255);"
            data-trigger="none" data-animate="fade" data-delay="500">
            <div class="containerInner ui-sortable">
                <div class="row borderSolid cornersAll radius0 P0-top P0-bottom P0H noTopMargin borderLight bgCover101 shadow20 border1px"
                    id="row--81920-154" data-trigger="none" data-animate="fade" data-delay="500"
                    data-title="1 column row"
                    style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none; background-color: rgb(255, 255, 255); border-color: rgb(0, 87, 132);">
                    <div id="col-full-127-117" class="col-md-12 innerContent col_left" data-col="full"
                        data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column"
                        style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable radius5 de-editable"
                                id="tmp_headline1-33407-123" data-de-type="headline" data-de-editing="false"
                                data-title="headline" data-ce="true" data-trigger="none" data-animate="fade"
                                data-delay="500"
                                style="margin-top: 0px; outline: none; cursor: pointer; background-color: rgb(0, 117, 178);"
                                aria-disabled="false">
                                <h1 class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0 shadow20 padding5 radius5 borderLight borderSolid mfs_28"
                                    style="text-align: center; font-size: 34px; background-color: rgb(0, 101, 104);"
                                    data-bold="inherit" data-gramm="false" contenteditable="false"><b>Exipure
                                        Ingredients</b></h1>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable hiddenElementTools de-editable"
                                id="tmp_paragraph-92486-165" data-de-type="headline" data-de-editing="false"
                                data-title="Paragraph" data-ce="true" data-trigger="none" data-animate="fade"
                                data-delay="500" style="margin-top: 15px; outline: none; cursor: pointer;"
                                aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit"
                                    style="text-align: center; font-size: 22px; color: rgb(45, 45, 45);"
                                    data-gramm="false" contenteditable="false">Presently, only six of the eight
                                    ingredients have been listed, with no insight into how much of each is found per
                                    serving. This might be something to take up with customer service prior to
                                    investing. Nevertheless, here’s what we do know about the Exipure weight loss
                                    formula so far:
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row bgCover borderSolid cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin borderLight border1px"
                    id="row--43456-133-156-101-189-162-147-162-164-147" data-trigger="none" data-animate="fade"
                    data-delay="500"
                    data-title="1 column row - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone"
                    style="padding-top: 5px; padding-bottom: 5px; margin: 10px 0px 0px; outline: none;">
                    <div id="col-full-128-136-148-188-101-112-162-132-113-126" class="col-md-12 innerContent col_left"
                        data-col="full" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column"
                        style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable de-editable"
                                id="tmp_subheadline-45042-169-137-127-115-136-155-156-108-131" data-de-type="headline"
                                data-de-editing="false" data-title="sub-headline" data-ce="true" data-trigger="none"
                                data-animate="fade" data-delay="500" data-gramm="false"
                                style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
                                <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0"
                                    style="text-align: left; font-size: 26px; border-color: rgb(0, 87, 132);"
                                    data-bold="inherit" data-gramm="false" contenteditable="false">
                                    <i class="fa_prepended fas fa-leaf" contenteditable="false"
                                        style="color: rgb(13, 172, 25);"></i>
                                    <font color="#ffffff"><b> Perilla:</b></font>
                                </h2>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable hiddenElementTools de-editable"
                                id="tmp_paragraph-75724-156-167-137-123-107-103-135-161-125" data-de-type="headline"
                                data-de-editing="false" data-title="Paragraph" data-ce="true" data-trigger="none"
                                data-animate="fade" data-delay="500"
                                style="margin-top: 10px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit"
                                    style="text-align: left; color: rgb(45, 45, 45); font-size: 22px;"
                                    data-gramm="false" contenteditable="false">
                                    <i class="fa_prepended fas fa-angle-double-right" contenteditable="false"
                                        style="color: rgb(13, 172, 25);"></i> Perilla Frutescens is a healthy supporter
                                    of HDL cholesterol as it reduces the storage of LDL cholesterol. It has been proven
                                    to boost the brown adipose tissues to help your body shrink more fats. It also
                                    rejuvenates brain cells so your brain can improve the brain and nervous system
                                    communication to tell you that you don’t need more food.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row bgCover borderSolid cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin borderLight border1px"
                    id="row--43456-133-156-101-189-162-147-162-164-147-153" data-trigger="none" data-animate="fade"
                    data-delay="500"
                    data-title="1 column row - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone"
                    style="padding-top: 5px; padding-bottom: 5px; margin: 10px 0px 0px; outline: none;">
                    <div id="col-full-128-136-148-188-101-112-162-132-113-126-121"
                        class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade"
                        data-delay="500" data-title="1st column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable de-editable"
                                id="tmp_subheadline-45042-169-137-127-115-136-155-156-108-131-176"
                                data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                                style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
                                <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0"
                                    style="text-align: left; font-size: 26px; border-color: rgb(0, 87, 132);"
                                    data-bold="inherit" data-gramm="false" contenteditable="false">
                                    <i class="fa_prepended fas fa-leaf" contenteditable="false"
                                        style="color: rgb(13, 172, 25);"></i>
                                    <font color="#ffffff"><b> Holy Basil:</b></font>
                                </h2>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable"
                                id="tmp_paragraph-75724-156-167-137-123-107-103-135-161-125-148" data-de-type="headline"
                                data-de-editing="false" data-title="Paragraph" data-ce="true" data-trigger="none"
                                data-animate="fade" data-delay="500"
                                style="margin-top: 10px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit"
                                    style="text-align: left; color: rgb(45, 45, 45); font-size: 22px;"
                                    data-gramm="false" contenteditable="false">
                                    <i class="fa_prepended fas fa-angle-double-right" contenteditable="false"
                                        style="color: rgb(13, 172, 25);"></i> This natural anti-depressant helps reduce
                                    stress and anxiety. As many people gain weight due to stress, holy basil is added to
                                    Exipure to help your body cope with different kinds of stress. Like other
                                    ingredients, holy basil being a herb helps detoxify the cells and improve the brown
                                    adipose tissues composition to help you melt more fat.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row bgCover borderSolid cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin borderLight border1px"
                    id="row--43456-133-156-101-189-162-147-162-164-147-153-105" data-trigger="none" data-animate="fade"
                    data-delay="500"
                    data-title="1 column row - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone"
                    style="padding-top: 5px; padding-bottom: 5px; margin: 10px 0px 0px; outline: none;">
                    <div id="col-full-128-136-148-188-101-112-162-132-113-126-121-161"
                        class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade"
                        data-delay="500" data-title="1st column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable de-editable"
                                id="tmp_subheadline-45042-169-137-127-115-136-155-156-108-131-176-154"
                                data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                                style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
                                <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0"
                                    style="text-align: left; font-size: 26px; border-color: rgb(0, 87, 132);"
                                    data-bold="inherit" data-gramm="false" contenteditable="false">
                                    <i class="fa_prepended fas fa-leaf" contenteditable="false"
                                        style="color: rgb(13, 172, 25);"></i>
                                    <font color="#ffffff"><b> White Korean Ginseng:</b></font>
                                </h2>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable"
                                id="tmp_paragraph-75724-156-167-137-123-107-103-135-161-125-148-179"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 10px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit"
                                    style="text-align: left; color: rgb(45, 45, 45); font-size: 22px;"
                                    data-gramm="false" contenteditable="false">
                                    <i class="fa_prepended fas fa-angle-double-right" contenteditable="false"
                                        style="color: rgb(13, 172, 25);"></i> Ginseng is known to energize cells and
                                    activate a healthy inflammatory response that allows your body to remain healthy. It
                                    boosts immunity and controls oxidative stress and free radical damage too. It is
                                    proven to boost metabolism in a way that helps your fat cells release fats and never
                                    store excess fats again.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row bgCover borderSolid cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin borderLight border1px"
                    id="row--43456-133-156-101-189-162-147-162-164-147-153-105-153" data-trigger="none"
                    data-animate="fade" data-delay="500"
                    data-title="1 column row - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone"
                    style="padding-top: 5px; padding-bottom: 5px; margin: 10px 0px 0px; outline: none;">
                    <div id="col-full-128-136-148-188-101-112-162-132-113-126-121-161-186"
                        class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade"
                        data-delay="500" data-title="1st column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable de-editable"
                                id="tmp_subheadline-45042-169-137-127-115-136-155-156-108-131-176-154-155"
                                data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                                style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
                                <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0"
                                    style="text-align: left; font-size: 26px; border-color: rgb(0, 87, 132);"
                                    data-bold="inherit" data-gramm="false" contenteditable="false">
                                    <i class="fa_prepended fas fa-leaf" contenteditable="false"
                                        style="color: rgb(13, 172, 25);"></i>
                                    <font color="#ffffff"><b> Amur Cork Bark:</b></font>
                                </h2>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable"
                                id="tmp_paragraph-75724-156-167-137-123-107-103-135-161-125-148-179-182"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 10px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit"
                                    style="text-align: left; color: rgb(45, 45, 45); font-size: 22px;"
                                    data-gramm="false" contenteditable="false">
                                    <i class="fa_prepended fas fa-angle-double-right" contenteditable="false"
                                        style="color: rgb(13, 172, 25);"></i> It is mainly added to ease your gut health
                                    and soothe the digestive system. Since bloating and edema can result in unexplained
                                    weight gain, Amur Cork Bark can help reduce this bloating and digestive issues. It
                                    supports healthy liver and heart cells that take care of your body’s metabolism.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row bgCover borderSolid cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin borderLight border1px"
                    id="row--43456-133-156-101-189-162-147-162-164-147-153-105-153-144" data-trigger="none"
                    data-animate="fade" data-delay="500"
                    data-title="1 column row - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone"
                    style="padding-top: 5px; padding-bottom: 5px; margin: 10px 0px 0px; outline: none;">
                    <div id="col-full-128-136-148-188-101-112-162-132-113-126-121-161-186-160"
                        class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade"
                        data-delay="500" data-title="1st column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable de-editable"
                                id="tmp_subheadline-45042-169-137-127-115-136-155-156-108-131-176-154-155-163"
                                data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                                style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
                                <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0"
                                    style="text-align: left; font-size: 26px; border-color: rgb(0, 87, 132);"
                                    data-bold="inherit" data-gramm="false" contenteditable="false">
                                    <i class="fa_prepended fas fa-leaf" contenteditable="false"
                                        style="color: rgb(13, 172, 25);"></i>
                                    <font color="#ffffff"><b> Quercetin:</b></font>
                                </h2>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable"
                                id="tmp_paragraph-75724-156-167-137-123-107-103-135-161-125-148-179-182-139"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 10px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit"
                                    style="text-align: left; color: rgb(45, 45, 45); font-size: 22px;"
                                    data-gramm="false" contenteditable="false">
                                    <i class="fa_prepended fas fa-angle-double-right" contenteditable="false"
                                        style="color: rgb(13, 172, 25);"></i> It supports healthy blood pressure and
                                    controls blood sugar spikes as well. It controls and reverses aging processes to
                                    keep you youthful forever. It rejuvenates and repairs aging cells so your skin,
                                    cells, tissues, and muscles remain fresh and active. It also activates metabolism
                                    and other fat-burning processes in your body.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row bgCover borderSolid cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin borderLight border1px"
                    id="row--43456-133-156-101-189-162-147-162-164-147-153-105-153-144-106" data-trigger="none"
                    data-animate="fade" data-delay="500"
                    data-title="1 column row - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone"
                    style="padding-top: 5px; padding-bottom: 5px; margin: 10px 0px 0px; outline: none;">
                    <div id="col-full-128-136-148-188-101-112-162-132-113-126-121-161-186-160-174"
                        class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade"
                        data-delay="500" data-title="1st column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable de-editable"
                                id="tmp_subheadline-45042-169-137-127-115-136-155-156-108-131-176-154-155-163-146"
                                data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                                style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
                                <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0"
                                    style="text-align: left; font-size: 26px; border-color: rgb(0, 87, 132);"
                                    data-bold="inherit" data-gramm="false" contenteditable="false">
                                    <i class="fa_prepended fas fa-leaf" contenteditable="false"
                                        style="color: rgb(13, 172, 25);"></i>
                                    <font color="#ffffff"><b> Oleuropein:</b></font>
                                </h2>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable"
                                id="tmp_paragraph-75724-156-167-137-123-107-103-135-161-125-148-179-182-139-126"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 10px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit"
                                    style="text-align: left; color: rgb(45, 45, 45); font-size: 22px;"
                                    data-gramm="false" contenteditable="false">
                                    <i class="fa_prepended fas fa-angle-double-right" contenteditable="false"
                                        style="color: rgb(13, 172, 25);"></i> Also known as Olea Europaea, this
                                    ingredient helps improve the quantity of BAT (brown adipose tissue) that helps the
                                    fat to shrink from fat cells. It is also famous for controlling cholesterol, sugar,
                                    and blood pressure that helps metabolism function normally. It supports artery
                                    health by discarding plaque and toxins from it.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row bgCover borderSolid cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin borderLight border1px"
                    id="row--43456-133-156-101-189-162-147-162-164-147-153-105-153-144-106-183" data-trigger="none"
                    data-animate="fade" data-delay="500"
                    data-title="1 column row - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone"
                    style="padding-top: 5px; padding-bottom: 5px; margin: 10px 0px 0px; outline: none;">
                    <div id="col-full-128-136-148-188-101-112-162-132-113-126-121-161-186-160-174-178"
                        class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade"
                        data-delay="500" data-title="1st column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable de-editable"
                                id="tmp_subheadline-45042-169-137-127-115-136-155-156-108-131-176-154-155-163-146-102"
                                data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                                style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
                                <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0"
                                    style="text-align: left; font-size: 26px; border-color: rgb(0, 87, 132);"
                                    data-bold="inherit" data-gramm="false" contenteditable="false">
                                    <i class="fa_prepended fas fa-leaf" contenteditable="false"
                                        style="color: rgb(13, 172, 25);"></i>
                                    <font color="#ffffff"><b> Berberine:</b></font>
                                </h2>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable"
                                id="tmp_paragraph-75724-156-167-137-123-107-103-135-161-125-148-179-182-139-126-119"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 10px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit"
                                    style="text-align: left; color: rgb(45, 45, 45); font-size: 22px;"
                                    data-gramm="false" contenteditable="false">
                                    <i class="fa_prepended fas fa-angle-double-right" contenteditable="false"
                                        style="color: rgb(13, 172, 25);"></i> It is an amazing antioxidant and an
                                    anti-inflammatory ingredient that helps your body remove toxins and function very
                                    normally. It contains active compounds that can accelerate metabolism and support
                                    your digestion as well. When paired with quercetin and other ingredients, its
                                    accuracy and efficiency increase to burn fats.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row bgCover borderSolid cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin borderLight border1px"
                    id="row--43456-133-156-101-189-162-147-162-164-147-153-105-153-144-106-183-129" data-trigger="none"
                    data-animate="fade" data-delay="500"
                    data-title="1 column row - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone - Clone"
                    style="padding-top: 5px; padding-bottom: 5px; margin: 10px 0px 0px; outline: none;">
                    <div id="col-full-128-136-148-188-101-112-162-132-113-126-121-161-186-160-174-178-105"
                        class="col-md-12 innerContent col_left" data-col="full" data-trigger="none" data-animate="fade"
                        data-delay="500" data-title="1st column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable de-editable"
                                id="tmp_subheadline-45042-169-137-127-115-136-155-156-108-131-176-154-155-163-146-102-115"
                                data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                                style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
                                <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0"
                                    style="text-align: left; font-size: 26px; border-color: rgb(0, 87, 132);"
                                    data-bold="inherit" data-gramm="false" contenteditable="false">
                                    <i class="fa_prepended fas fa-leaf" contenteditable="false"
                                        style="color: rgb(13, 172, 25);"></i>
                                    <font color="#ffffff"><b> Resveratrol:</b></font>
                                </h2>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable"
                                id="tmp_paragraph-75724-156-167-137-123-107-103-135-161-125-148-179-182-139-126-119-178"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 10px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit"
                                    style="text-align: left; color: rgb(45, 45, 45); font-size: 22px;"
                                    data-gramm="false" contenteditable="false">
                                    <i class="fa_prepended fas fa-angle-double-right" contenteditable="false"
                                        style="color: rgb(13, 172, 25);"></i> It helps your body lose and burn fats that
                                    are stored for a long time, also known as visceral fats. It even promotes a
                                    reduction in LDL cholesterol which is the worst type of cholesterol in your body. By
                                    reducing the plaque and toxin buildup in your arteries, it promotes your heart and
                                    liver health, while simultaneously fighting obesity and overweight issues.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
        </div>
        <div class="container fullContainer noTopMargin padding20-top padding20-bottom padding40H borderSolid cornersAll radius0 shadow0 bgNoRepeat emptySection border2px borderLightTop"
            id="section--77781" data-title="Section" data-block-color="0074C7"
            style="padding-top: 20px; padding-bottom: 0px; outline: none; margin-top: 35px; background-color: rgb(0, 101, 104);"
            data-trigger="none" data-animate="fade" data-delay="500">
            <div class="containerInner ui-sortable">
                <div class="row bgCover borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin noBorder"
                    id="row--67724" data-trigger="none" data-animate="fade" data-delay="500" data-title="2 column row"
                    style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none;">
                    <div id="col-left-178" class="innerContent col_left ui-resizable col-md-4" data-col="left"
                        data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column"
                        style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable hiddenElementTools de-editable"
                                id="tmp_image-83277" data-de-type="img" data-de-editing="false" data-title="image"
                                data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false"
                                data-hide-on="desktop"
                                data-imagelink="">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg"
                                    alt="Exipure  180-Day Money Back"
                                    data-imagelink=""
                                    data-src="images/180-day-guarantee.png">
                            </div>
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable"
                                id="img-58782" data-de-type="img" data-de-editing="false" data-title="image"
                                data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false"
                                data-hide-on="mobile">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg"
                                    alt="Exipure 180-Day Money Back" width="180"
                                    data-src="images/180-day-guarantee.png">
                            </div>
                        </div>
                    </div>
                    <div id="col-right-189" class="innerContent col_right ui-resizable col-md-8" data-col="right"
                        data-trigger="none" data-animate="fade" data-delay="500" data-title="2nd column"
                        style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_subheadline-84419"
                                data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                                style="margin-top: 0px; outline: none; cursor: pointer; background-color: rgba(0, 0, 0, 0);"
                                aria-disabled="false">
                                <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0 mfs_26"
                                    style="text-align: center; font-size: 32px; background-color: rgba(0, 0, 0, 0);"
                                    data-bold="inherit" data-gramm="false" contenteditable="false">
                                    <font color="#293c64"><b>180-DAYS 100% MONEY-BACK GUARANTEE</b></font>
                                </h2>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-97499"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 15px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit"
                                    style="text-align: center; font-size: 22px; color: rgb(255, 255, 255);"
                                    data-gramm="false" contenteditable="false">Exipure will be available for you to test
                                    out for SIX months. You can apply for our FULL refund if you are among the 0.5% who
                                    are not satisfied.
                                    <div><br></div>
                                    <div>Consider this a trial run in case things don't go your way. Exipure may work.
                                        If it doesn't, you can ask for your money back.</div>
                                    <div><br></div>
                                    <div><b>Get your exipure bottle and see for yourself.</b></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
        </div>
        <div class="container fullContainer noTopMargin padding20-top padding20-bottom padding40H borderSolid cornersAll radius0 shadow0 bgNoRepeat emptySection borderLightTop border2px editingInRow"
            id="section--80344" data-title="Section" data-block-color="0074C7"
            style="padding-top: 15px; padding-bottom: 15px; outline: none;" data-trigger="none" data-animate="fade"
            data-delay="500">
            <div class="containerInner ui-sortable"></div>
        </div>
        <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
        </div>
        <div class="container wideContainer noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll emptySection shadow0 radius10 bgCover101"
            id="section--18274-157-175" data-title="Section - Clone - Clone" data-block-color="0074C7"
            style="padding-top: 15px; padding-bottom: 15px; outline: none; background-color: rgb(255, 255, 255);"
            data-trigger="none" data-animate="fade" data-delay="500">
            <div class="containerInner ui-sortable">
                <div class="row bgCover borderSolid cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin borderLight border2px"
                    id="row--81920-154-145" data-trigger="none" data-animate="fade" data-delay="500"
                    data-title="1 column row"
                    style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none; background-color: rgb(255, 255, 255); border-color: rgb(255, 227, 0);">
                    <div id="col-full-127-117-106" class="col-md-12 innerContent col_left" data-col="full"
                        data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column"
                        style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable radius5 de-editable"
                                id="tmp_headline1-33407-123-148" data-de-type="headline" data-de-editing="false"
                                data-title="headline" data-ce="true" data-trigger="none" data-animate="fade"
                                data-delay="500"
                                style="margin-top: 0px; outline: none; cursor: pointer; background-color: rgb(0, 117, 178);"
                                aria-disabled="false">
                                <h1 class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0 shadow20 padding5 radius5 borderLight borderSolid border0px mfs_28"
                                    style="text-align: center; font-size: 34px; background-color: rgb(0, 101, 104);"
                                    data-bold="inherit" data-gramm="false" contenteditable="false">
                                    <font color="#ffffff"><b>How Much Weight Can You Lose with Exipure?</b></font>
                                </h1>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable hiddenElementTools de-editable"
                                id="tmp_paragraph-92486-165-103" data-de-type="headline" data-de-editing="false"
                                data-title="Paragraph" data-ce="true" data-trigger="none" data-animate="fade"
                                data-delay="500" style="margin-top: 15px; outline: none; cursor: pointer;"
                                aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit"
                                    style="text-align: center; font-size: 22px; color: rgb(45, 45, 45);"
                                    data-gramm="false" contenteditable="false">You can lose a significant amount of
                                    weight in a short period of time when taking Exipure.<div><br></div>
                                    <div>Here are some of the weight loss testimonials shared on the official website:
                                    </div>
                                    <div><br></div>
                                    <div>One woman, Lauren, claims she lost 35lbs and looks and feels amazing after
                                        taking Exipure. Lauren claims her energy levels are through the roof and she no
                                        longer feels stressed or anxious when venturing out in public.</div>
                                    <div><br></div>
                                    <div>One man, Zach, lost 26lbs when taking Exipure. Zach feels fitter and happier in
                                        his 40s than he did in his 30s, and his fat continues to melt off.</div>
                                    <div><br></div>
                                    <div>Another woman, Cassie, claims to have dissolved 40lbs “in no time” while taking
                                        Exipure. Cassie lost 4 dress sizes in a short period – and she continues to lose
                                        weight.</div>
                                    <div><br></div>
                                    <div>In one sales page, the makers of Exipure describe their formula as a “5-second
                                        exotic hack that melts 59lbs of fat”</div>
                                    <div><br></div>
                                    <div>Overall, the makers of Exipure claim to have developed the formula based on a
                                        “tropical loophole” that “dissolves fat overnight.” By taking Exipure daily, you
                                        can purportedly lose a significant amount of weight in a short period of time.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
        </div>
        <div class="container fullContainer noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgCover101 emptySection"
            id="section--47669-115" data-title="Section - Clone" data-block-color="0074C7"
            style='padding-top: 30px; padding-bottom: 15px; outline: none; background-image: url("images/greentexture-bg.jpg"); margin-top: 25px;'
            data-trigger="none" data-animate="fade" data-delay="500">
            <div class="containerInner ui-sortable">
                <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                    id="row--91615-124" data-trigger="none" data-animate="fade" data-delay="500"
                    data-title="1 column row"
                    style="padding-top: 0px; padding-bottom: 20px; margin: 0px; outline: none;">
                    <div id="col-full-147-109" class="col-md-12 innerContent col_left" data-col="full"
                        data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column"
                        style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_subheadline-60102-149"
                                data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                                style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
                                <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0 mfs_32"
                                    style="text-align: center; font-size: 54px;" data-bold="inherit" data-gramm="false"
                                    contenteditable="false"><b>Limited Time Special Pricing - Act Now!</b></h2>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-51335-143"
                                data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                                style="margin-top: 5px; outline: none; cursor: pointer;" aria-disabled="false">
                                <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0 mfs_24"
                                    style="text-align: center; font-size: 38px;" data-bold="inherit" data-gramm="false"
                                    contenteditable="false"><b>Secure Your Reserved Exipure While Stocks Last</b></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
        </div>
        <div class="container fullContainer noTopMargin padding20-top padding20-bottom padding40H borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection noBorder containerWithVisibleOverflow"
            id="section--12187-105-128-104" data-title="Section - Clone - Clone - Clone" data-block-color="0074C7"
            style="padding-top: 20px; padding-bottom: 20px; outline: none; background-color: rgb(255, 255, 255); margin-top: 5px;"
            data-trigger="none" data-animate="fade" data-delay="500" data-hide-on="">
            <div class="containerInner ui-sortable">
                <div class="row bgCover border3px P0-top P0-bottom P0H noTopMargin borderSolid borderLightBottom shadow5inner cornersAll radius50"
                    id="row--45669-186-124-107" data-trigger="none" data-animate="fade" data-delay="500"
                    data-title="3 column row"
                    style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none; background-color: rgb(239, 247, 255);">
                    <a style="color:#000;" href="<?php echo $pricing['first_link'] ?>">
                    <div id="col-left-187-183-154-138" class="col-md-4 innerContent col_left ui-resizable"
                        data-col="left" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column"
                        style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable radius10 de-editable" id="headline-27276-170"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 10px; outline: none; cursor: pointer; background-color: rgb(0, 117, 178);"
                                aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0 padding5 radius10 cornersTop"
                                    data-bold="inherit"
                                    style="text-align: center; font-size: 32px; background-color: rgb(0, 117, 178);"
                                    data-gramm="false" contenteditable="false">
                                    <font color="#2d2d2d"><b>1 Bottle</b></font>
                                </div>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-36201-134"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 10px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit" style="text-align: center; font-size: 28px;" data-gramm="false"
                                    contenteditable="false"><b>
                                        1 Month Supply</b></div>
                            </div>
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable hiddenElementTools de-editable"
                                id="img-97524-148-112" data-de-type="img" data-de-editing="false" data-title="image"
                                data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 10px; outline: none; cursor: pointer;" aria-disabled="false"
                                data-imagelink="">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg"
                                    alt="Buy Exipure 1 Bottle" width="173"
                                    data-imagelink=""
                                    data-src="images/Exipure-1-Bottle.png">
                            </div>
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable"
                                id="img-45775-132-115" data-de-type="img" data-de-editing="false" data-title="image"
                                data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 15px; outline: none; cursor: pointer;" aria-disabled="false">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg"
                                    alt="$59 Per Bottle" width="220"
                                    data-src="//exipurebuyz.us/hosted/images/47/df1aa69bdc48f094c92b6ada80a9c3/59-Per-Bottle.png">
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-20927-179-183"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 30px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit" style="text-align: center; font-size: 36px;" data-gramm="false"
                                    contenteditable="false"><b>
                                        Total: <strike>$199</strike> $59</b></div>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-98316-133-130"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: -5px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit" style="text-align: center; font-size: 28px;" data-gramm="false"
                                    contenteditable="false"><b>
                                        You Save $140</b></div>
                            </div>
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable"
                                id="img-69172-153-154" data-de-type="img" data-de-editing="false" data-title="image"
                                data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 15px; outline: none; cursor: pointer;" aria-disabled="false"
                                data-imagelink="">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg"
                                    alt="Order Exipure 1 Bottle"
                                    data-imagelink=""
                                    data-src="images/Order-Now-2.png">
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-63194-101-129"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 5px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit" style="text-align: center; font-size: 20px;" data-gramm="false"
                                    contenteditable="false">
                                    <i class="fa_prepended fas fa-shipping-fast" contenteditable="false"></i><b>
                                        + Small Shipping</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                    <a style="color:#000;" href="<?php echo $pricing['second_link'] ?>">
                        
                    <div id="col-center-177-134-172-181" class="col-md-4 innerContent col_right ui-resizable"
                        data-col="center" data-trigger="none" data-animate="fade" data-delay="500"
                        data-title="2nd column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable radius10 de-editable" id="headline-31262-120"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 10px; outline: none; cursor: pointer; background-color: rgb(228, 59, 44);"
                                aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0 padding5 radius10 cornersTop"
                                    data-bold="inherit"
                                    style="text-align: center; font-size: 32px; background-color: rgb(228, 59, 44);"
                                    data-gramm="false" contenteditable="false">
                                    <font color="#2d2d2d"><b>6 Bottles</b></font>
                                </div>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-29216-148-146"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 10px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit" style="text-align: center; font-size: 28px;" data-gramm="false"
                                    contenteditable="false"><b>
                                        6 Month Supply</b></div>
                            </div>
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable hiddenElementTools de-editable"
                                id="img-13620-161-101" data-de-type="img" data-de-editing="false" data-title="image"
                                data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 10px; outline: none; cursor: pointer;" aria-disabled="false"
                                data-imagelink="">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg"
                                    alt="Buy Exipure 6 Bottles" width="292"
                                    data-imagelink=""
                                    data-src="images/Exipure-6-Bottles.png">
                            </div>
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable"
                                id="img-19691-162-112" data-de-type="img" data-de-editing="false" data-title="image"
                                data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 15px; outline: none; cursor: pointer;" aria-disabled="false">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg"
                                    alt="Buy 6 Bottles/ $39 Per Bottle" width="220"
                                    data-src="//exipurebuyz.us/hosted/images/4b/7b940bd8a2439cb1025f8ac745ec41/39-Per-Bottle.png">
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-13239-121-137"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 30px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit" style="text-align: center; font-size: 36px;" data-gramm="false"
                                    contenteditable="false"><b>
                                        Total: <strike>$1194</strike> $234</b></div>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-46345-144-115"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: -5px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit" style="text-align: center; font-size: 28px;" data-gramm="false"
                                    contenteditable="false"><b>
                                        You Save $960</b></div>
                            </div>
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable"
                                id="img-12639-145-182" data-de-type="img" data-de-editing="false" data-title="image"
                                data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 15px; outline: none; cursor: pointer;" aria-disabled="false"
                                data-imagelink="">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg"
                                    alt="Order Exipure 6 Bottles"
                                    data-imagelink=""
                                    data-src="images/Order-Now-2.png">
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-62199-117-140"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 5px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit" style="text-align: center; font-size: 20px;" data-gramm="false"
                                    contenteditable="false">
                                    <i class="fa_prepended fas fa-shipping-fast" contenteditable="false"></i><b> Free
                                        Shipping</b>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                    <a style="color:#000;" href="<?php echo $pricing['third_link'] ?>">
                    <div id="col-right-118-122-117-176" class="col-md-4 innerContent col_right ui-resizable"
                        data-col="right" data-trigger="none" data-animate="fade" data-delay="500"
                        data-title="3rd column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable radius10 de-editable"
                                id="headline-88110-149-106" data-de-type="headline" data-de-editing="false"
                                data-title="Paragraph" data-ce="true" data-trigger="none" data-animate="fade"
                                data-delay="500"
                                style="margin-top: 10px; outline: none; cursor: pointer; background-color: rgb(0, 117, 178);"
                                aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0 padding5 radius10 cornersTop"
                                    data-bold="inherit"
                                    style="text-align: center; font-size: 32px; background-color: rgb(0, 117, 178);"
                                    data-gramm="false" contenteditable="false">
                                    <font color="#2d2d2d"><b><?php echo $pricing['third_heading'] ?></b></font>
                                </div>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-83814-118-161"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 10px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit" style="text-align: center; font-size: 28px;" data-gramm="false"
                                    contenteditable="false"><b>
                                    <?php echo $pricing['third_supply'] ?></b></div>
                            </div>
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable hiddenElementTools de-editable"
                                id="tmp_image-89674-159-136" data-de-type="img" data-de-editing="false"
                                data-title="image" data-ce="false" data-trigger="none" data-animate="fade"
                                data-delay="500" style="margin-top: 10px; outline: none; cursor: pointer;"
                                aria-disabled="false"
                                data-imagelink="<?php echo $pricing['third_link'] ?>">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg"
                                    alt="Buy Exipure 3 Bottles" width=""
                                    data-imagelink="<?php echo $pricing['order_now_image'] ?>"
                                    data-src="<?php echo $pricing['third_image'] ?>">
                            </div>
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable"
                                id="tmp_image-56895-115-153" data-de-type="img" data-de-editing="false"
                                data-title="image" data-ce="false" data-trigger="none" data-animate="fade"
                                data-delay="500" style="margin-top: 15px; outline: none; cursor: pointer;"
                                aria-disabled="false">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg"
                                    alt="Buy 3 Bottles/ $49 Per Bottle" width="220"
                                    data-src="<?php echo $pricing['third_price'] ?>">
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-62212-176-153"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 30px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit" style="text-align: center; font-size: 36px;" data-gramm="false"
                                    contenteditable="false"><b>
                                        Total: <strike><?php echo $pricing['third_total_crossed'] ?></strike> <?php echo $pricing['third_total'] ?></b></div>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-24252-102-132"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: -5px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit" style="text-align: center; font-size: 28px;" data-gramm="false"
                                    contenteditable="false"><b>
                                    <?php echo $pricing['third_you_save'] ?></b></div>
                            </div>
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable"
                                id="tmp_image-54504-147-186" data-de-type="img" data-de-editing="false"
                                data-title="image" data-ce="false" data-trigger="none" data-animate="fade"
                                data-delay="500" style="margin-top: 15px; outline: none; cursor: pointer;"
                                aria-disabled="false"
                                data-imagelink="">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg"
                                    alt="Order Exipure 3 Bottles"
                                    data-imagelink=""
                                    data-src="<?php echo $pricing['order_now_image'] ?>">
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-43872-125-146"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 5px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit" style="text-align: center; font-size: 20px;" data-gramm="false"
                                    contenteditable="false">
                                    <i class="fa_prepended fas fa-shipping-fast" contenteditable="false"></i><b> + Small
                                        Shipping</b>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="row bgCover borderSolid border3px cornersAll shadow0 P0-top P0-bottom P0H noTopMargin radius10 borderLight"
                    id="row--21982-170-133-151" data-trigger="none" data-animate="fade" data-delay="500"
                    data-title="2 column row"
                    style="padding-top: 9px; padding-bottom: 9px; margin: 20px 0px 0px; outline: none; background-color: rgb(253, 184, 49);"
                    data-hide-on="">
                    <div id="col-left-129-106-136-154" class="innerContent col_left ui-resizable col-md-2"
                        data-col="left" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column"
                        style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elImageWrapper de-image-block elMargin0 ui-droppable elAlign_right de-editable"
                                id="tmp_image-38704-170-101-178" data-de-type="img" data-de-editing="false"
                                data-title="image" data-ce="false" data-trigger="none" data-animate="fade"
                                data-delay="500" style="margin-top: 5px; outline: none; cursor: pointer;"
                                aria-disabled="false">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg"
                                    alt="Exipure Limited Time Offer" width="60"
                                    data-src="images/warning.png">
                            </div>
                        </div>
                    </div>
                    <div id="col-right-151-144-132-186" class="innerContent col_right ui-resizable col-md-10"
                        data-col="right" data-trigger="none" data-animate="fade" data-delay="500"
                        data-title="2nd column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable de-editable"
                                id="tmp_paragraph-78299-187-153-107" data-de-type="headline" data-de-editing="false"
                                data-title="Paragraph" data-ce="true" data-trigger="none" data-animate="fade"
                                data-delay="500"
                                style='margin-top: 0px; outline: none; cursor: pointer; font-family: "Fjalla One", Helvetica, sans-serif !important;'
                                data-google-font="Fjalla+One" aria-disabled="false" data-hide-on="desktop">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0 mfs_20"
                                    data-bold="inherit"
                                    style="text-align: left; font-size: 24px; color: rgb(241, 20, 0);"
                                    data-gramm="false" contenteditable="false">
                                    <?php echo $warning ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
        </div>
        <div class="container wideContainer noTopMargin padding20-top padding20-bottom padding40H borderSolid cornersAll emptySection radius10 bgCover101 shadow20 borderLight border2px"
            id="section--18274-157-109" data-title="Section - Clone - Clone" data-block-color="0074C7"
            style="padding-top: 20px; padding-bottom: 20px; outline: none; background-color: rgb(255, 255, 255);"
            data-trigger="none" data-animate="fade" data-delay="500">
            <div class="containerInner ui-sortable">
                <div class="row borderSolid P0-top P0-bottom P0H noTopMargin borderLight bgCover101 shadow20 border1px radius15 cornersTop"
                    id="row--81920-154-121" data-trigger="none" data-animate="fade" data-delay="500"
                    data-title="1 column row"
                    style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none; background-color: rgb(255, 255, 255); border-color: rgb(0, 87, 132);">
                    <div id="col-full-127-117-120" class="col-md-12 innerContent col_left" data-col="full"
                        data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column"
                        style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable radius5 de-editable"
                                id="tmp_headline1-33407-123-111" data-de-type="headline" data-de-editing="false"
                                data-title="headline" data-ce="true" data-trigger="none" data-animate="fade"
                                data-delay="500"
                                style="margin-top: 0px; outline: none; cursor: pointer; background-color: rgb(0, 117, 178);"
                                aria-disabled="false">
                                <h1 class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0 mfs_26 shadow20 padding5 radius5 borderLight borderSolid"
                                    style="text-align: center; font-size: 34px; background-color: rgb(0, 101, 104);"
                                    data-bold="inherit" data-gramm="false" contenteditable="false"><b><?php echo $faqs['heading'] ?></b></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row bgCover borderSolid cornersAll shadow0 P0-top P0-bottom P0H noTopMargin borderLight border1px radius15"
                    id="row--43456-122" data-trigger="none" data-animate="fade" data-delay="500"
                    data-title="1 column row"
                    style="padding-top: 10px; padding-bottom: 10px; margin: 10px 0px 0px; outline: none;">
                    <div id="col-full-128-181" class="col-md-12 innerContent col_left" data-col="full"
                        data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column"
                        style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elQuestions elMargin0 ui-droppable de-editable" id="tmp_question-58661"
                                data-de-type="faq" data-de-editing="false" data-title="FAQ Block" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                                style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="faqBlock">
                                    <div class="faqTitle ssHeadlineSize2"
                                        style="font-size: 26px; color: rgb(0, 101, 104);">
                                        <i class="fa fa-question-circle faqIcon"></i>
                                        <span class="ne faqTitleText" data-gramm="false" contenteditable="false"><b><?php echo $faqs['first_question'] ?></b></span>
                                    </div>
                                    <div class="ne faqAnswer ssBodySize2" style="font-size: 22px;" data-gramm="false"
                                        contenteditable="false"><?php echo $faqs['first_answer'] ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row bgCover borderSolid cornersAll shadow0 P0-top P0-bottom P0H noTopMargin borderLight border1px radius15"
                    id="row--43456-122-176" data-trigger="none" data-animate="fade" data-delay="500"
                    data-title="1 column row - Clone"
                    style="padding-top: 10px; padding-bottom: 10px; margin: 10px 0px 0px; outline: none;">
                    <div id="col-full-128-181-182" class="col-md-12 innerContent col_left" data-col="full"
                        data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column"
                        style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elQuestions elMargin0 ui-droppable de-editable" id="tmp_question-58661-173"
                                data-de-type="faq" data-de-editing="false" data-title="FAQ Block" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                                style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="faqBlock">
                                    <div class="faqTitle ssHeadlineSize2"
                                        style="font-size: 26px; color: rgb(0, 101, 104);">
                                        <i class="fa fa-question-circle faqIcon"></i>
                                        <span class="ne faqTitleText" data-gramm="false" contenteditable="false"><b><?php echo $faqs['second_question'] ?></b></span>
                                    </div>
                                    <div class="ne faqAnswer ssBodySize2" style="font-size: 22px;" data-gramm="false"
                                        contenteditable="false"><?php echo $faqs['second_answer'] ?>.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row bgCover borderSolid cornersAll shadow0 P0-top P0-bottom P0H noTopMargin borderLight border1px radius15"
                    id="row--43456-122-176-168" data-trigger="none" data-animate="fade" data-delay="500"
                    data-title="1 column row - Clone - Clone"
                    style="padding-top: 10px; padding-bottom: 10px; margin: 10px 0px 0px; outline: none;">
                    <div id="col-full-128-181-182-182" class="col-md-12 innerContent col_left" data-col="full"
                        data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column"
                        style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elQuestions elMargin0 ui-droppable de-editable"
                                id="tmp_question-58661-173-111" data-de-type="faq" data-de-editing="false"
                                data-title="FAQ Block" data-ce="true" data-trigger="none" data-animate="fade"
                                data-delay="500" data-gramm="false"
                                style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="faqBlock">
                                    <div class="faqTitle ssHeadlineSize2"
                                        style="font-size: 26px; color: rgb(0, 101, 104);">
                                        <i class="fa fa-question-circle faqIcon"></i>
                                        <span class="ne faqTitleText" data-gramm="false" contenteditable="false"><b><?php echo $faqs['third_question'] ?></b></span>
                                    </div>
                                    <div class="ne faqAnswer ssBodySize2" style="font-size: 22px;" data-gramm="false"
                                        contenteditable="false"><?php echo $faqs['third_answer'] ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row bgCover borderSolid cornersAll shadow0 P0-top P0-bottom P0H noTopMargin borderLight border1px radius15"
                    id="row--43456-122-176-168-189" data-trigger="none" data-animate="fade" data-delay="500"
                    data-title="1 column row - Clone - Clone - Clone"
                    style="padding-top: 10px; padding-bottom: 10px; margin: 10px 0px 0px; outline: none;">
                    <div id="col-full-128-181-182-182-169" class="col-md-12 innerContent col_left" data-col="full"
                        data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column"
                        style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elQuestions elMargin0 ui-droppable de-editable"
                                id="tmp_question-58661-173-111-120" data-de-type="faq" data-de-editing="false"
                                data-title="FAQ Block" data-ce="true" data-trigger="none" data-animate="fade"
                                data-delay="500" data-gramm="false"
                                style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="faqBlock">
                                    <div class="faqTitle ssHeadlineSize2"
                                        style="font-size: 26px; color: rgb(0, 101, 104);">
                                        <i class="fa fa-question-circle faqIcon"></i>
                                        <span class="ne faqTitleText" data-gramm="false" contenteditable="false"><b><?php echo $faqs['fourth_question'] ?></b></span>
                                    </div>
                                    <div class="ne faqAnswer ssBodySize2" style="font-size: 22px;" data-gramm="false"
                                        contenteditable="false"><?php echo $faqs['fourth_answer'] ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row bgCover borderSolid cornersAll shadow0 P0-top P0-bottom P0H noTopMargin borderLight border1px radius15"
                    id="row--43456-122-176-168-189-156" data-trigger="none" data-animate="fade" data-delay="500"
                    data-title="1 column row - Clone - Clone - Clone - Clone"
                    style="padding-top: 10px; padding-bottom: 10px; margin: 10px 0px 0px; outline: none;">
                    <div id="col-full-128-181-182-182-169-117" class="col-md-12 innerContent col_left" data-col="full"
                        data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column"
                        style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elQuestions elMargin0 ui-droppable de-editable"
                                id="tmp_question-58661-173-111-120-111" data-de-type="faq" data-de-editing="false"
                                data-title="FAQ Block" data-ce="true" data-trigger="none" data-animate="fade"
                                data-delay="500" data-gramm="false"
                                style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="faqBlock">
                                    <div class="faqTitle ssHeadlineSize2"
                                        style="font-size: 26px; color: rgb(0, 101, 104);">
                                        <i class="fa fa-question-circle faqIcon"></i>
                                        <span class="ne faqTitleText" data-gramm="false" contenteditable="false"><b><?php echo $faqs['fifth_question'] ?></b></span>
                                    </div>
                                    <div class="ne faqAnswer ssBodySize2" style="font-size: 22px;" data-gramm="false"
                                        contenteditable="false"><?php echo $faqs['fifth_answer'] ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
        </div>
        <div class="container fullContainer noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 bgNoRepeat emptySection"
            id="section--20341" data-title="Section" data-block-color="0074C7"
            style="padding-top: 25px; padding-bottom: 25px; outline: none;" data-trigger="none" data-animate="fade"
            data-delay="500">
            <div class="containerInner ui-sortable"></div>
        </div>
        <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
        </div>
        <div class="container fullContainer noTopMargin padding20-top padding20-bottom padding40H noBorder borderSolid border3px cornersAll radius0 shadow0 emptySection bgCover101"
            id="section--72009" data-title="Section" data-block-color="0074C7"
            style="padding-top: 10px; padding-bottom: 20px; outline: none; background-color: rgb(0, 101, 104);"
            data-trigger="none" data-animate="fade" data-delay="500">
            <div class="containerInner ui-sortable">
                <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                    id="row--16934" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row"
                    style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none;">
                    <div id="col-full-159" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none"
                        data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable hiddenElementTools de-editable"
                                id="tmp_headline1-46258" data-de-type="headline" data-de-editing="false"
                                data-title="headline" data-ce="true" data-trigger="none" data-animate="fade"
                                data-delay="500" style="margin-top: 0px; outline: none; cursor: pointer;"
                                aria-disabled="false">
                                <h1 class="ne elHeadline hsSize3 lh4 elMargin0 elBGStyle0 hsTextShadow0 mfs_27"
                                    style="text-align: center; font-size: 38px;" data-bold="inherit" data-gramm="false"
                                    contenteditable="false"><b><?php echo $timing_section['heading'] ?></b></h1>
                            </div>
                            <div class="de elImageWrapper de-image-block elAlign_center elMargin0 ui-droppable de-editable"
                                id="tmp_image-94502" data-de-type="img" data-de-editing="false" data-title="image"
                                data-ce="false" data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 10px; outline: none; cursor: pointer;" aria-disabled="false"
                                data-imagelink="">
                                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="elIMG ximg"
                                    alt="Buy Exipure Weight Loss Supplement" width=""
                                    data-imagelink=""
                                    data-src="<?php echo $timing_section['img'] ?>">
                            </div>
                            <!-- <div class="de elCountdownEvergreen elAlign_center elMargin0 ui-droppable de-editable"
                                id="tmp_countdown_evergreen-15949" data-de-type="countdown-evergreen"
                                data-de-editing="false" data-title="Minute Countdown (evergreen)" data-ce="false"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 15px; outline: none; cursor: pointer;"
                                data-element-theme="customized" aria-disabled="false" data-hide-on="desktop">
                                <div class="wideCountdownEvergreen clearfix hide cdLabelBold wideCountdownSize2 cdYellow cdStyleCircleFill cdLabelWhite"
                                    data-hours="0" data-minutes="30" data-seconds="0" data-tz="America/New_York"
                                    data-url="" data-lang="eng"
                                    style="">countdown</div>
                                <div class="wideCountdownEvergreen clearfix cdLabelBold wideCountdownSize2 cdYellow cdStyleCircleFill wideCountdown-demo is-countdown cdLabelWhite"
                                    style="" data-url=""><span
                                        class="countdown-row countdown-show3"><span class="countdown-section"><span
                                                class="countdown-section"><span class="countdown-amount">00</span><span
                                                    class="countdown-period">Hours</span></span><span
                                                class="countdown-section"><span class="countdown-amount">00</span><span
                                                    class="countdown-period">Minutes</span></span><span
                                                class="countdown-section"><span class="countdown-amount">00</span><span
                                                    class="countdown-period">Seconds</span></span></span></span></div>
                            </div> -->
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_subheadline-90627"
                                data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                                style="margin-top: 10px; outline: none; cursor: pointer;" aria-disabled="false">
                                <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0 mfs_28"
                                    style="text-align: center; font-size: 34px; color: rgb(255, 255, 255);"
                                    data-bold="inherit" data-gramm="false" contenteditable="false">Regular Price:
                                    <strike><?php echo $timing_section['regular_price'] ?></strike>
                                </h2>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="headline-37927"
                                data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                                style="margin-top: 10px; outline: none; cursor: pointer;" aria-disabled="false">
                                <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0 mfs_32"
                                    style="text-align: center; font-size: 56px;" data-bold="inherit" data-gramm="false"
                                    contenteditable="false"><b><?php echo $timing_section['now'] ?></b></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
        </div>
        <div class="container noTopMargin padding40-top padding40-bottom padding40H borderSolid cornersAll radius0 shadow0 bgNoRepeat fullContainer borderLightTop emptySection border5px"
            id="section--90398" data-title="Section" data-block-color="0074C7"
            style="padding-top: 0px; padding-bottom: 25px; outline: none; background-color: rgb(47, 57, 72); margin-top: 0px; border-color: rgb(64, 108, 163);"
            data-trigger="none" data-animate="fade" data-delay="500" data-hide-on="desktop">
            <div class="containerInner ui-sortable">
                <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                    id="row-163" data-trigger="none" data-animate="fade" data-delay="500" data-title="2 column row"
                    style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none;">
                    <div id="col-left-162-120-134-110-161" class="col-md-6 innerContent col_left ui-resizable"
                        data-col="left" data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column"
                        style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable de-editable"
                                id="tmp_subheadline-79220-117-122-146-119" data-de-type="headline"
                                data-de-editing="false" data-title="sub-headline" data-ce="true" data-trigger="none"
                                data-animate="fade" data-delay="500"
                                style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0"
                                    style="text-align: left; font-size: 18px; color: rgb(255, 255, 255);"
                                    data-bold="inherit" contenteditable="false"><?php echo $footer['copyright'] ?></div>
                            </div>
                        </div>
                    </div>
                    <div id="col-right-170-149-173-161-106" class="col-md-6 innerContent col_right ui-resizable"
                        data-col="right" data-trigger="none" data-animate="fade" data-delay="500"
                        data-title="2nd column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable de-editable"
                                id="tmp_subheadline-79412-156-188-166-134" data-de-type="headline"
                                data-de-editing="false" data-title="sub-headline" data-ce="true" data-trigger="none"
                                data-animate="fade" data-delay="500"
                                style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0"
                                    style="text-align: right; font-size: 18px; color: rgb(255, 255, 255);"
                                    data-bold="inherit" contenteditable="false"> <a
                                        href="<?php echo $footer_links['privacy_policy'] ?>" id="link-11106"
                                        class="" target="_self" rel="noopener noreferrer"
                                        style="color: rgba(255, 255, 255, 0.91);">Privacy Policy</a> | <a
                                        href="<?php echo $footer_links['disclaimer'] ?>" id="link-38211" class=""
                                        target="_self" rel="noopener noreferrer"
                                        style="color: rgba(255, 255, 255, 0.92);">Disclaimer </a>| <a
                                        href="<?php echo $footer_links['terms'] ?>" id="link-29391"
                                        class="" target="_self" rel="noopener noreferrer"
                                        style="color: rgba(255, 255, 255, 0.91);">Terms</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                    id="row--99092" data-trigger="none" data-animate="fade" data-delay="500" data-title="1 column row"
                    style="padding-top: 0px; padding-bottom: 20px; margin: 0px; outline: none;">
                    <div id="col-full-155" class="col-md-12 innerContent col_left" data-col="full" data-trigger="none"
                        data-animate="fade" data-delay="500" data-title="1st column" style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_subheadline-93325"
                                data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                                style="margin-top: 20px; outline: none; cursor: pointer;" aria-disabled="false">
                                <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0"
                                    style="text-align: center; font-size: 23px; color: rgb(255, 255, 255);"
                                    data-bold="inherit" data-gramm="false" contenteditable="false"><?php echo $footer['title'] ?>
                                </h2>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-32611"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 15px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit" style="text-align: center; color: rgb(255, 255, 255);"
                                    data-gramm="false" contenteditable="false"><?php echo $footer['para1'] ?>
                                    <div><br></div>
                                    <div><?php echo $footer['para2'] ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropZoneForSections ui-droppable" style="display: none;">
            <div class="dropIconr"><i class="fa fa-plus"></i></div>
        </div>
        <div class="container noTopMargin padding40-top padding40-bottom padding40H borderSolid cornersAll radius0 shadow0 bgNoRepeat fullContainer borderLightTop emptySection border5px"
            id="section--90398-183" data-title="Section - Clone" data-block-color="0074C7"
            style="padding-top: 0px; padding-bottom: 25px; outline: none; background-color: rgb(47, 57, 72); margin-top: 0px; border-color: rgb(64, 108, 163);"
            data-trigger="none" data-animate="fade" data-delay="500" data-hide-on="mobile">
            <div class="containerInner ui-sortable">
                <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                    id="row-163-100" data-trigger="none" data-animate="fade" data-delay="500" data-title="2 column row"
                    style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none;">
                <div class="row bgCover noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                    id="row--99092-117" data-trigger="none" data-animate="fade" data-delay="500"
                    data-title="1 column row"
                    style="padding-top: 20px; padding-bottom: 20px; margin: 0px; outline: none;">
                    <div id="col-full-155-101" class="col-md-12 innerContent col_left" data-col="full"
                        data-trigger="none" data-animate="fade" data-delay="500" data-title="1st column"
                        style="outline: none;">
                        <div class="col-inner bgCover  noBorder borderSolid border3px cornersAll radius0 shadow0 P0-top P0-bottom P0H noTopMargin"
                            style="padding: 0 10px">
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_subheadline-93325-150"
                                data-de-type="headline" data-de-editing="false" data-title="sub-headline" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500" data-gramm="false"
                                style="margin-top: 0px; outline: none; cursor: pointer;" aria-disabled="false">
                                <h2 class="ne elHeadline hsSize2 lh3 elMargin0 elBGStyle0 hsTextShadow0"
                                    style="text-align: center; font-size: 23px; color: rgb(255, 255, 255);"
                                    data-bold="inherit" data-gramm="false" contenteditable="false">
                                    <?php echo $footer['title'] ?>
                                </h2>
                            </div>
                            <div class="de elHeadlineWrapper ui-droppable de-editable" id="tmp_paragraph-32611-158"
                                data-de-type="headline" data-de-editing="false" data-title="Paragraph" data-ce="true"
                                data-trigger="none" data-animate="fade" data-delay="500"
                                style="margin-top: 15px; outline: none; cursor: pointer;" aria-disabled="false">
                                <div class="ne elHeadline hsSize1 lh5 elMargin0 elBGStyle0 hsTextShadow0"
                                    data-bold="inherit" style="text-align: center; color: rgb(255, 255, 255);"
                                    data-gramm="false" contenteditable="false">
                                    <?php echo $footer['para1'] ?>
                                    <div><br></div>
                                    <div>
                                        <?php echo $footer['para2'] ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style id="bold_style_tmp_headline1-63627">
            #tmp_headline1-63627 .elHeadline b {
                color: rgb(255, 255, 255);
            }
        </style>
        <style id="bold_style_headline-32128">
            #headline-32128 .elHeadline b {
                color: rgb(64, 108, 163);
            }
        </style>
        <style id="bold_style_headline-55723">
            #headline-55723 .elHeadline b {
                color: rgb(64, 108, 163);
            }
        </style>
        <style id="button_style_button-16934">
            #button-16934 .elButtonFlat:hover {
                background-color: #32547e !important;
            }

            #button-16934 .elButtonBottomBorder:hover {
                background-color: #32547e !important;
            }

            #button-16934 .elButtonSubtle:hover {
                background-color: #32547e !important;
            }

            #button-16934 .elButtonGradient {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(64, 108, 163)), color-stop(1, #32547e));
                background-image: -o-linear-gradient(bottom, rgb(64, 108, 163) 0%, #32547e 100%);
                background-image: -moz-linear-gradient(bottom, rgb(64, 108, 163) 0%, #32547e 100%);
                background-image: -webkit-linear-gradient(bottom, rgb(64, 108, 163) 0%, #32547e 100%);
                background-image: -ms-linear-gradient(bottom, rgb(64, 108, 163) 0%, #32547e 100%);
                background-image: linear-gradient(to bottom, rgb(64, 108, 163) 0%, #32547e 100%);
            }

            #button-16934 .elButtonGradient:hover {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgb(64, 108, 163)), color-stop(0, #32547e));
                background-image: -o-linear-gradient(bottom, rgb(64, 108, 163) 100%, #32547e 0%);
                background-image: -moz-linear-gradient(bottom, rgb(64, 108, 163) 100%, #32547e 0%);
                background-image: -webkit-linear-gradient(bottom, rgb(64, 108, 163) 100%, #32547e 0%);
                background-image: -ms-linear-gradient(bottom, rgb(64, 108, 163) 100%, #32547e 0%);
                background-image: linear-gradient(to bottom, rgb(64, 108, 163) 100%, #32547e 0%);
            }

            #button-16934 .elButtonBorder {
                border: 3px solid rgb(64, 108, 163) !important;
                color: rgb(64, 108, 163) !important;
            }

            #button-16934 .elButtonBorder:hover {
                background-color: rgb(64, 108, 163) !important;
                color: #FFF !important;
            }
        </style>
        <style id="bold_style_tmp_paragraph-49574">
            #tmp_paragraph-49574 .elHeadline b {
                color: rgb(255, 255, 255);
            }
        </style>
        <style id="button_style_tmp_button-30430">
            #tmp_button-30430 .elButtonFlat:hover {
                background-color: #db390f !important;
            }

            #tmp_button-30430 .elButtonBottomBorder:hover {
                background-color: #db390f !important;
            }

            #tmp_button-30430 .elButtonSubtle:hover {
                background-color: #db390f !important;
            }

            #tmp_button-30430 .elButtonGradient {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(240, 77, 35)), color-stop(1, #db390f));
                background-image: -o-linear-gradient(bottom, rgb(240, 77, 35) 0%, #db390f 100%);
                background-image: -moz-linear-gradient(bottom, rgb(240, 77, 35) 0%, #db390f 100%);
                background-image: -webkit-linear-gradient(bottom, rgb(240, 77, 35) 0%, #db390f 100%);
                background-image: -ms-linear-gradient(bottom, rgb(240, 77, 35) 0%, #db390f 100%);
                background-image: linear-gradient(to bottom, rgb(240, 77, 35) 0%, #db390f 100%);
            }

            #tmp_button-30430 .elButtonGradient:hover {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgb(240, 77, 35)), color-stop(0, #db390f));
                background-image: -o-linear-gradient(bottom, rgb(240, 77, 35) 100%, #db390f 0%);
                background-image: -moz-linear-gradient(bottom, rgb(240, 77, 35) 100%, #db390f 0%);
                background-image: -webkit-linear-gradient(bottom, rgb(240, 77, 35) 100%, #db390f 0%);
                background-image: -ms-linear-gradient(bottom, rgb(240, 77, 35) 100%, #db390f 0%);
                background-image: linear-gradient(to bottom, rgb(240, 77, 35) 100%, #db390f 0%);
            }

            #tmp_button-30430 .elButtonGradient2 {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(240, 77, 35)), color-stop(1, #db390f));
                background-image: -o-linear-gradient(bottom, rgb(240, 77, 35) 30%, #db390f 80%);
                background-image: -moz-linear-gradient(bottom, rgb(240, 77, 35) 30%, #db390f 80%);
                background-image: -webkit-linear-gradient(bottom, rgb(240, 77, 35) 30%, #db390f 80%);
                background-image: -ms-linear-gradient(bottom, rgb(240, 77, 35) 30%, #db390f 80%);
                background-image: linear-gradient(to bottom, rgb(240, 77, 35) 30%, #db390f 80%);
            }

            #tmp_button-30430 .elButtonGradient2:hover {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgb(240, 77, 35)), color-stop(0, #db390f));
                background-image: -o-linear-gradient(bottom, rgb(240, 77, 35) 100%, #db390f 30%);
                background-image: -moz-linear-gradient(bottom, rgb(240, 77, 35) 100%, #db390f 30%);
                background-image: -webkit-linear-gradient(bottom, rgb(240, 77, 35) 100%, #db390f 30%);
                background-image: -ms-linear-gradient(bottom, rgb(240, 77, 35) 100%, #db390f 30%);
                background-image: linear-gradient(to bottom, rgb(240, 77, 35) 100%, #db390f 30%);
            }

            #tmp_button-30430 .elButtonBorder {
                border: 3px solid rgb(240, 77, 35) !important;
                color: rgb(240, 77, 35) !important;
            }

            #tmp_button-30430 .elButtonBorder:hover {
                background-color: rgb(240, 77, 35) !important;
                color: #FFF !important;
            }
        </style>
        <style id="button_style_tmp_button-27223">
            #tmp_button-27223 .elButtonFlat:hover {
                background-color: #0b72a1 !important;
            }

            #tmp_button-27223 .elButtonBottomBorder:hover {
                background-color: #0b72a1 !important;
            }

            #tmp_button-27223 .elButtonSubtle:hover {
                background-color: #0b72a1 !important;
            }

            #tmp_button-27223 .elButtonGradient {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(14, 141, 199)), color-stop(1, #0b72a1));
                background-image: -o-linear-gradient(bottom, rgb(14, 141, 199) 0%, #0b72a1 100%);
                background-image: -moz-linear-gradient(bottom, rgb(14, 141, 199) 0%, #0b72a1 100%);
                background-image: -webkit-linear-gradient(bottom, rgb(14, 141, 199) 0%, #0b72a1 100%);
                background-image: -ms-linear-gradient(bottom, rgb(14, 141, 199) 0%, #0b72a1 100%);
                background-image: linear-gradient(to bottom, rgb(14, 141, 199) 0%, #0b72a1 100%);
            }

            #tmp_button-27223 .elButtonGradient:hover {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgb(14, 141, 199)), color-stop(0, #0b72a1));
                background-image: -o-linear-gradient(bottom, rgb(14, 141, 199) 100%, #0b72a1 0%);
                background-image: -moz-linear-gradient(bottom, rgb(14, 141, 199) 100%, #0b72a1 0%);
                background-image: -webkit-linear-gradient(bottom, rgb(14, 141, 199) 100%, #0b72a1 0%);
                background-image: -ms-linear-gradient(bottom, rgb(14, 141, 199) 100%, #0b72a1 0%);
                background-image: linear-gradient(to bottom, rgb(14, 141, 199) 100%, #0b72a1 0%);
            }

            #tmp_button-27223 .elButtonBorder {
                border: 3px solid rgb(14, 141, 199) !important;
                color: rgb(14, 141, 199) !important;
            }

            #tmp_button-27223 .elButtonBorder:hover {
                background-color: rgb(14, 141, 199) !important;
                color: #FFF !important;
            }
        </style>
        <style id="button_style_tmp_button-30430-112-131">
            #tmp_button-30430-112-131 .elButtonFlat:hover {
                background-color: #0b72a1 !important;
            }

            #tmp_button-30430-112-131 .elButtonBottomBorder:hover {
                background-color: #0b72a1 !important;
            }

            #tmp_button-30430-112-131 .elButtonSubtle:hover {
                background-color: #0b72a1 !important;
            }

            #tmp_button-30430-112-131 .elButtonGradient {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(14, 141, 199)), color-stop(1, #0b72a1));
                background-image: -o-linear-gradient(bottom, rgb(14, 141, 199) 0%, #0b72a1 100%);
                background-image: -moz-linear-gradient(bottom, rgb(14, 141, 199) 0%, #0b72a1 100%);
                background-image: -webkit-linear-gradient(bottom, rgb(14, 141, 199) 0%, #0b72a1 100%);
                background-image: -ms-linear-gradient(bottom, rgb(14, 141, 199) 0%, #0b72a1 100%);
                background-image: linear-gradient(to bottom, rgb(14, 141, 199) 0%, #0b72a1 100%);
            }

            #tmp_button-30430-112-131 .elButtonGradient:hover {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgb(14, 141, 199)), color-stop(0, #0b72a1));
                background-image: -o-linear-gradient(bottom, rgb(14, 141, 199) 100%, #0b72a1 0%);
                background-image: -moz-linear-gradient(bottom, rgb(14, 141, 199) 100%, #0b72a1 0%);
                background-image: -webkit-linear-gradient(bottom, rgb(14, 141, 199) 100%, #0b72a1 0%);
                background-image: -ms-linear-gradient(bottom, rgb(14, 141, 199) 100%, #0b72a1 0%);
                background-image: linear-gradient(to bottom, rgb(14, 141, 199) 100%, #0b72a1 0%);
            }

            #tmp_button-30430-112-131 .elButtonBorder {
                border: 3px solid rgb(14, 141, 199) !important;
                color: rgb(14, 141, 199) !important;
            }

            #tmp_button-30430-112-131 .elButtonBorder:hover {
                background-color: rgb(14, 141, 199) !important;
                color: #FFF !important;
            }
        </style>
        <style id="bold_style_headline-49937">
            #headline-49937 .elHeadline b {
                color: rgb(255, 255, 255);
            }
        </style>
        <style id="button_style_headline-49937">
            #headline-49937 .elButtonFlat:hover {
                background-color: #005c9e !important;
            }

            #headline-49937 .elButtonBottomBorder:hover {
                background-color: #005c9e !important;
            }

            #headline-49937 .elButtonSubtle:hover {
                background-color: #005c9e !important;
            }

            #headline-49937 .elButtonGradient {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgba(0, 116, 199, 0.88)), color-stop(1, #005c9e));
                background-image: -o-linear-gradient(bottom, rgba(0, 116, 199, 0.88) 0%, #005c9e 100%);
                background-image: -moz-linear-gradient(bottom, rgba(0, 116, 199, 0.88) 0%, #005c9e 100%);
                background-image: -webkit-linear-gradient(bottom, rgba(0, 116, 199, 0.88) 0%, #005c9e 100%);
                background-image: -ms-linear-gradient(bottom, rgba(0, 116, 199, 0.88) 0%, #005c9e 100%);
                background-image: linear-gradient(to bottom, rgba(0, 116, 199, 0.88) 0%, #005c9e 100%);
            }

            #headline-49937 .elButtonGradient:hover {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgba(0, 116, 199, 0.88)), color-stop(0, #005c9e));
                background-image: -o-linear-gradient(bottom, rgba(0, 116, 199, 0.88) 100%, #005c9e 0%);
                background-image: -moz-linear-gradient(bottom, rgba(0, 116, 199, 0.88) 100%, #005c9e 0%);
                background-image: -webkit-linear-gradient(bottom, rgba(0, 116, 199, 0.88) 100%, #005c9e 0%);
                background-image: -ms-linear-gradient(bottom, rgba(0, 116, 199, 0.88) 100%, #005c9e 0%);
                background-image: linear-gradient(to bottom, rgba(0, 116, 199, 0.88) 100%, #005c9e 0%);
            }

            #headline-49937 .elButtonGradient2 {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgba(0, 116, 199, 0.88)), color-stop(1, #005c9e));
                background-image: -o-linear-gradient(bottom, rgba(0, 116, 199, 0.88) 30%, #005c9e 80%);
                background-image: -moz-linear-gradient(bottom, rgba(0, 116, 199, 0.88) 30%, #005c9e 80%);
                background-image: -webkit-linear-gradient(bottom, rgba(0, 116, 199, 0.88) 30%, #005c9e 80%);
                background-image: -ms-linear-gradient(bottom, rgba(0, 116, 199, 0.88) 30%, #005c9e 80%);
                background-image: linear-gradient(to bottom, rgba(0, 116, 199, 0.88) 30%, #005c9e 80%);
            }

            #headline-49937 .elButtonGradient2:hover {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgba(0, 116, 199, 0.88)), color-stop(0, #005c9e));
                background-image: -o-linear-gradient(bottom, rgba(0, 116, 199, 0.88) 100%, #005c9e 30%);
                background-image: -moz-linear-gradient(bottom, rgba(0, 116, 199, 0.88) 100%, #005c9e 30%);
                background-image: -webkit-linear-gradient(bottom, rgba(0, 116, 199, 0.88) 100%, #005c9e 30%);
                background-image: -ms-linear-gradient(bottom, rgba(0, 116, 199, 0.88) 100%, #005c9e 30%);
                background-image: linear-gradient(to bottom, rgba(0, 116, 199, 0.88) 100%, #005c9e 30%);
            }

            #headline-49937 .elButtonBorder {
                border: 3px solid rgba(0, 116, 199, 0.88) !important;
                color: rgba(0, 116, 199, 0.88) !important;
            }

            #headline-49937 .elButtonBorder:hover {
                background-color: rgba(0, 116, 199, 0.88) !important;
                color: #000 !important;
            }
        </style>
        <style id="bold_style_tmp_headline1-55198">
            #tmp_headline1-55198 .elHeadline b {
                color: rgb(255, 255, 255);
            }
        </style>
        <style id="button_style_tmp_headline1-55198">
            #tmp_headline1-55198 .elButtonFlat:hover {
                background-color: #191919 !important;
            }

            #tmp_headline1-55198 .elButtonBottomBorder:hover {
                background-color: #191919 !important;
            }

            #tmp_headline1-55198 .elButtonSubtle:hover {
                background-color: #191919 !important;
            }

            #tmp_headline1-55198 .elButtonGradient {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(45, 45, 45)), color-stop(1, #191919));
                background-image: -o-linear-gradient(bottom, rgb(45, 45, 45) 0%, #191919 100%);
                background-image: -moz-linear-gradient(bottom, rgb(45, 45, 45) 0%, #191919 100%);
                background-image: -webkit-linear-gradient(bottom, rgb(45, 45, 45) 0%, #191919 100%);
                background-image: -ms-linear-gradient(bottom, rgb(45, 45, 45) 0%, #191919 100%);
                background-image: linear-gradient(to bottom, rgb(45, 45, 45) 0%, #191919 100%);
            }

            #tmp_headline1-55198 .elButtonGradient:hover {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgb(45, 45, 45)), color-stop(0, #191919));
                background-image: -o-linear-gradient(bottom, rgb(45, 45, 45) 100%, #191919 0%);
                background-image: -moz-linear-gradient(bottom, rgb(45, 45, 45) 100%, #191919 0%);
                background-image: -webkit-linear-gradient(bottom, rgb(45, 45, 45) 100%, #191919 0%);
                background-image: -ms-linear-gradient(bottom, rgb(45, 45, 45) 100%, #191919 0%);
                background-image: linear-gradient(to bottom, rgb(45, 45, 45) 100%, #191919 0%);
            }

            #tmp_headline1-55198 .elButtonGradient2 {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(45, 45, 45)), color-stop(1, #191919));
                background-image: -o-linear-gradient(bottom, rgb(45, 45, 45) 30%, #191919 80%);
                background-image: -moz-linear-gradient(bottom, rgb(45, 45, 45) 30%, #191919 80%);
                background-image: -webkit-linear-gradient(bottom, rgb(45, 45, 45) 30%, #191919 80%);
                background-image: -ms-linear-gradient(bottom, rgb(45, 45, 45) 30%, #191919 80%);
                background-image: linear-gradient(to bottom, rgb(45, 45, 45) 30%, #191919 80%);
            }

            #tmp_headline1-55198 .elButtonGradient2:hover {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgb(45, 45, 45)), color-stop(0, #191919));
                background-image: -o-linear-gradient(bottom, rgb(45, 45, 45) 100%, #191919 30%);
                background-image: -moz-linear-gradient(bottom, rgb(45, 45, 45) 100%, #191919 30%);
                background-image: -webkit-linear-gradient(bottom, rgb(45, 45, 45) 100%, #191919 30%);
                background-image: -ms-linear-gradient(bottom, rgb(45, 45, 45) 100%, #191919 30%);
                background-image: linear-gradient(to bottom, rgb(45, 45, 45) 100%, #191919 30%);
            }

            #tmp_headline1-55198 .elButtonBorder {
                border: 3px solid rgb(45, 45, 45) !important;
                color: rgb(45, 45, 45) !important;
            }

            #tmp_headline1-55198 .elButtonBorder:hover {
                background-color: rgb(45, 45, 45) !important;
                color: #FFF !important;
            }
        </style>
        <style id="bold_style_tmp_paragraph-49574-152">
            #tmp_paragraph-49574-152 .elHeadline b {
                color: rgb(255, 255, 255);
            }
        </style>
        <style id="button_style_tmp_button-30430-119">
            #tmp_button-30430-119 .elButtonFlat:hover {
                background-color: #db390f !important;
            }

            #tmp_button-30430-119 .elButtonBottomBorder:hover {
                background-color: #db390f !important;
            }

            #tmp_button-30430-119 .elButtonSubtle:hover {
                background-color: #db390f !important;
            }

            #tmp_button-30430-119 .elButtonGradient {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(240, 77, 35)), color-stop(1, #db390f));
                background-image: -o-linear-gradient(bottom, rgb(240, 77, 35) 0%, #db390f 100%);
                background-image: -moz-linear-gradient(bottom, rgb(240, 77, 35) 0%, #db390f 100%);
                background-image: -webkit-linear-gradient(bottom, rgb(240, 77, 35) 0%, #db390f 100%);
                background-image: -ms-linear-gradient(bottom, rgb(240, 77, 35) 0%, #db390f 100%);
                background-image: linear-gradient(to bottom, rgb(240, 77, 35) 0%, #db390f 100%);
            }

            #tmp_button-30430-119 .elButtonGradient:hover {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgb(240, 77, 35)), color-stop(0, #db390f));
                background-image: -o-linear-gradient(bottom, rgb(240, 77, 35) 100%, #db390f 0%);
                background-image: -moz-linear-gradient(bottom, rgb(240, 77, 35) 100%, #db390f 0%);
                background-image: -webkit-linear-gradient(bottom, rgb(240, 77, 35) 100%, #db390f 0%);
                background-image: -ms-linear-gradient(bottom, rgb(240, 77, 35) 100%, #db390f 0%);
                background-image: linear-gradient(to bottom, rgb(240, 77, 35) 100%, #db390f 0%);
            }

            #tmp_button-30430-119 .elButtonGradient2 {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(240, 77, 35)), color-stop(1, #db390f));
                background-image: -o-linear-gradient(bottom, rgb(240, 77, 35) 30%, #db390f 80%);
                background-image: -moz-linear-gradient(bottom, rgb(240, 77, 35) 30%, #db390f 80%);
                background-image: -webkit-linear-gradient(bottom, rgb(240, 77, 35) 30%, #db390f 80%);
                background-image: -ms-linear-gradient(bottom, rgb(240, 77, 35) 30%, #db390f 80%);
                background-image: linear-gradient(to bottom, rgb(240, 77, 35) 30%, #db390f 80%);
            }

            #tmp_button-30430-119 .elButtonGradient2:hover {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgb(240, 77, 35)), color-stop(0, #db390f));
                background-image: -o-linear-gradient(bottom, rgb(240, 77, 35) 100%, #db390f 30%);
                background-image: -moz-linear-gradient(bottom, rgb(240, 77, 35) 100%, #db390f 30%);
                background-image: -webkit-linear-gradient(bottom, rgb(240, 77, 35) 100%, #db390f 30%);
                background-image: -ms-linear-gradient(bottom, rgb(240, 77, 35) 100%, #db390f 30%);
                background-image: linear-gradient(to bottom, rgb(240, 77, 35) 100%, #db390f 30%);
            }

            #tmp_button-30430-119 .elButtonBorder {
                border: 3px solid rgb(240, 77, 35) !important;
                color: rgb(240, 77, 35) !important;
            }

            #tmp_button-30430-119 .elButtonBorder:hover {
                background-color: rgb(240, 77, 35) !important;
                color: #FFF !important;
            }
        </style>
        <style id="bold_style_tmp_headline1-82884-151-173">
            #tmp_headline1-82884-151-173 .elHeadline b {
                color: rgb(255, 255, 255);
            }
        </style>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Helvetica+Neue+Helvetica+Arial+sans-serif%7CDroid+Sans%7CFjalla+One%7Csans-serif%7CFjalla+One%7CRoboto+Slab%7Csans-serif%7COswald%7Csans-serif%7CRoboto+Slab%7Csans-serif%7CRoboto+Slab%7Csans-serif%7CRoboto+Slab%7Csans-serif%7CFjalla+One%7Csans-serif%7CFjalla+One%7Csans-serif%7CFjalla+One%7Csans-serif%7CFjalla+One%7Csans-serif%7CFjalla+One%7Csans-serif%7C%7C"
            id="custom_google_font">
        <style id="button_style_tmp_button-16308">
            #tmp_button-16308 .elButtonFlat:hover {
                background-color: #345986 !important;
            }

            #tmp_button-16308 .elButtonBottomBorder:hover {
                background-color: #345986 !important;
            }

            #tmp_button-16308 .elButtonSubtle:hover {
                background-color: #345986 !important;
            }

            #tmp_button-16308 .elButtonGradient {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(64, 108, 163)), color-stop(1, #345986));
                background-image: -o-linear-gradient(bottom, rgb(64, 108, 163) 0%, #345986 100%);
                background-image: -moz-linear-gradient(bottom, rgb(64, 108, 163) 0%, #345986 100%);
                background-image: -webkit-linear-gradient(bottom, rgb(64, 108, 163) 0%, #345986 100%);
                background-image: -ms-linear-gradient(bottom, rgb(64, 108, 163) 0%, #345986 100%);
                background-image: linear-gradient(to bottom, rgb(64, 108, 163) 0%, #345986 100%);
            }

            #tmp_button-16308 .elButtonGradient:hover {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgb(64, 108, 163)), color-stop(0, #345986));
                background-image: -o-linear-gradient(bottom, rgb(64, 108, 163) 100%, #345986 0%);
                background-image: -moz-linear-gradient(bottom, rgb(64, 108, 163) 100%, #345986 0%);
                background-image: -webkit-linear-gradient(bottom, rgb(64, 108, 163) 100%, #345986 0%);
                background-image: -ms-linear-gradient(bottom, rgb(64, 108, 163) 100%, #345986 0%);
                background-image: linear-gradient(to bottom, rgb(64, 108, 163) 100%, #345986 0%);
            }

            #tmp_button-16308 .elButtonGradient2 {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(64, 108, 163)), color-stop(1, #345986));
                background-image: -o-linear-gradient(bottom, rgb(64, 108, 163) 30%, #345986 80%);
                background-image: -moz-linear-gradient(bottom, rgb(64, 108, 163) 30%, #345986 80%);
                background-image: -webkit-linear-gradient(bottom, rgb(64, 108, 163) 30%, #345986 80%);
                background-image: -ms-linear-gradient(bottom, rgb(64, 108, 163) 30%, #345986 80%);
                background-image: linear-gradient(to bottom, rgb(64, 108, 163) 30%, #345986 80%);
            }

            #tmp_button-16308 .elButtonGradient2:hover {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgb(64, 108, 163)), color-stop(0, #345986));
                background-image: -o-linear-gradient(bottom, rgb(64, 108, 163) 100%, #345986 30%);
                background-image: -moz-linear-gradient(bottom, rgb(64, 108, 163) 100%, #345986 30%);
                background-image: -webkit-linear-gradient(bottom, rgb(64, 108, 163) 100%, #345986 30%);
                background-image: -ms-linear-gradient(bottom, rgb(64, 108, 163) 100%, #345986 30%);
                background-image: linear-gradient(to bottom, rgb(64, 108, 163) 100%, #345986 30%);
            }

            #tmp_button-16308 .elButtonBorder {
                border: 3px solid rgb(64, 108, 163) !important;
                color: rgb(64, 108, 163) !important;
            }

            #tmp_button-16308 .elButtonBorder:hover {
                background-color: rgb(64, 108, 163) !important;
                color: #FFF !important;
            }
        </style>
        <style id="bold_style_tmp_headline1-60019">
            #tmp_headline1-60019 .elHeadline b {
                color: rgb(64, 108, 163);
            }
        </style>
        <style id="bold_style_headline-98782">
            #headline-98782 .elHeadline b {
                color: rgba(47, 47, 47, 0.66);
            }
        </style>
        <style id="bold_style_headline-98326">
            #headline-98326 .elHeadline b {
                color: rgba(47, 47, 47, 0.66);
            }
        </style>
        <style id="bold_style_headline-90348">
            #headline-90348 .elHeadline b {
                color: rgba(47, 47, 47, 0.66);
            }
        </style>
        <style id="bold_style_tmp_headline1-63627-131">
            #tmp_headline1-63627-131 .elHeadline b {
                color: rgb(255, 255, 255);
            }
        </style>
        <style id="bold_style_headline-32128-133">
            #headline-32128-133 .elHeadline b {
                color: rgb(64, 108, 163);
            }
        </style>
        <style id="bold_style_headline-55723-140">
            #headline-55723-140 .elHeadline b {
                color: rgb(64, 108, 163);
            }
        </style>
        <style id="bold_style_tmp_headline1-97119">
            #tmp_headline1-97119 .elHeadline b {
                color: rgb(9, 17, 192);
            }
        </style>
        <style id="bold_style_tmp_subheadline-91524">
            #tmp_subheadline-91524 .elHeadline b {
                color: rgb(0, 0, 238);
            }
        </style>
        <style id="bold_style_tmp_subheadline-17821">
            #tmp_subheadline-17821 .elHeadline b {
                color: rgb(64, 108, 163);
            }
        </style>
        <style id="bold_style_tmp_subheadline-10154">
            #tmp_subheadline-10154 .elHeadline b {
                color: rgb(239, 10, 10);
            }
        </style>
        <style id="bold_style_tmp_headline1-97119-128">
            #tmp_headline1-97119-128 .elHeadline b {
                color: rgb(9, 17, 192);
            }

            #tmp_headline1-97119-128 .elHeadline b {
                color: rgb(9, 17, 192);
            }
        </style>
        <style id="bold_style_tmp_headline1-97119-128"></style>
        <style id="bold_style_tmp_headline1-63627-131-144">
            #tmp_headline1-63627-131-144 .elHeadline b {
                color: rgb(255, 255, 255);
            }

            #tmp_headline1-63627-131-144 .elHeadline b {
                color: rgb(255, 255, 255);
            }
        </style>
        <style id="bold_style_tmp_headline1-63627-131-144"></style>
        <style id="bold_style_headline-55723-140-170">
            #headline-55723-140-170 .elHeadline b {
                color: rgb(64, 108, 163);
            }

            #headline-55723-140-170 .elHeadline b {
                color: rgb(64, 108, 163);
            }
        </style>
        <style id="bold_style_headline-55723-140-170"></style>
        <style id="bold_style_tmp_paragraph-13393-146-175">
            #tmp_paragraph-13393-146-175 .elHeadline b {
                color: rgb(239, 10, 10);
            }

            #tmp_paragraph-13393-146-175 .elHeadline b {
                color: rgb(239, 10, 10);
            }
        </style>
        <style id="bold_style_tmp_paragraph-13393-146-175"></style>
        <style id="bold_style_tmp_subheadline-99608-103">
            #tmp_subheadline-99608-103 .elHeadline b {
                color: rgb(239, 10, 10);
            }

            #tmp_subheadline-99608-103 .elHeadline b {
                color: rgb(239, 10, 10);
            }
        </style>
        <style id="bold_style_tmp_subheadline-99608-103"></style>
        <style id="bold_style_tmp_subheadline-17821-189">
            #tmp_subheadline-17821-189 .elHeadline b {
                color: rgb(64, 108, 163);
            }

            #tmp_subheadline-17821-189 .elHeadline b {
                color: rgb(64, 108, 163);
            }
        </style>
        <style id="bold_style_tmp_subheadline-17821-189"></style>
        <style id="bold_style_tmp_subheadline-41358-119">
            #tmp_subheadline-41358-119 .elHeadline b {
                color: rgb(13, 230, 27);
            }

            #tmp_subheadline-41358-119 .elHeadline b {
                color: rgb(13, 230, 27);
            }
        </style>
        <style id="bold_style_tmp_subheadline-41358-119"></style>
        <style id="bold_style_tmp_subheadline-74291-120">
            #tmp_subheadline-74291-120 .elHeadline b {
                color: rgb(239, 10, 10);
            }

            #tmp_subheadline-74291-120 .elHeadline b {
                color: rgb(239, 10, 10);
            }
        </style>
        <style id="bold_style_tmp_subheadline-74291-120"></style>
        <style id="bold_style_tmp_subheadline-88307-148">
            #tmp_subheadline-88307-148 .elHeadline b {
                color: rgb(239, 10, 10);
            }

            #tmp_subheadline-88307-148 .elHeadline b {
                color: rgb(239, 10, 10);
            }
        </style>
        <style id="bold_style_tmp_subheadline-88307-148"></style>
        <style id="bold_style_tmp_subheadline-10154-160">
            #tmp_subheadline-10154-160 .elHeadline b {
                color: rgb(239, 10, 10);
            }

            #tmp_subheadline-10154-160 .elHeadline b {
                color: rgb(239, 10, 10);
            }
        </style>
        <style id="bold_style_tmp_subheadline-10154-160"></style>
        <style id="bold_style_tmp_subheadline-92744-123">
            #tmp_subheadline-92744-123 .elHeadline b {
                color: rgb(239, 10, 10);
            }

            #tmp_subheadline-92744-123 .elHeadline b {
                color: rgb(239, 10, 10);
            }
        </style>
        <style id="bold_style_tmp_subheadline-92744-123"></style>
        <style id="bold_style_tmp_headline1-97859-136">
            #tmp_headline1-97859-136 .elHeadline b {
                color: rgb(29, 37, 40);
            }
        </style>
        <style id="bold_style_tmp_paragraph-13393-146">
            #tmp_paragraph-13393-146 .elHeadline b {
                color: rgb(10, 78, 239);
            }
        </style>
        <style id="bold_style_tmp_paragraph-90378">
            #tmp_paragraph-90378 .elHeadline b {
                color: rgb(136, 136, 136);
            }
        </style>
        <style id="bold_style_tmp_headline1-97859-165">
            #tmp_headline1-97859-165 .elHeadline b {
                color: rgb(199, 4, 203);
            }

            #tmp_headline1-97859-165 .elHeadline b {
                color: rgb(199, 4, 203);
            }
        </style>
        <style id="bold_style_tmp_headline1-97859-165"></style>
        <style id="bold_style_tmp_headline1-97119-111">
            #tmp_headline1-97119-111 .elHeadline b {
                color: rgb(9, 17, 192);
            }

            #tmp_headline1-97119-111 .elHeadline b {
                color: rgb(9, 17, 192);
            }
        </style>
        <style id="bold_style_tmp_headline1-97119-111"></style>
        <style id="bold_style_tmp_headline1-63627-131-162">
            #tmp_headline1-63627-131-162 .elHeadline b {
                color: rgb(255, 255, 255);
            }

            #tmp_headline1-63627-131-162 .elHeadline b {
                color: rgb(255, 255, 255);
            }
        </style>
        <style id="bold_style_tmp_headline1-63627-131-162"></style>
        <style id="bold_style_tmp_paragraph-13393-146-138">
            #tmp_paragraph-13393-146-138 .elHeadline b {
                color: rgb(10, 78, 239);
            }

            #tmp_paragraph-13393-146-138 .elHeadline b {
                color: rgb(10, 78, 239);
            }
        </style>
        <style id="bold_style_tmp_paragraph-13393-146-138"></style>
        <style id="bold_style_tmp_subheadline-99608-106">
            #tmp_subheadline-99608-106 .elHeadline b {
                color: rgb(239, 10, 10);
            }

            #tmp_subheadline-99608-106 .elHeadline b {
                color: rgb(239, 10, 10);
            }
        </style>
        <style id="bold_style_tmp_subheadline-99608-106"></style>
        <style id="bold_style_tmp_list-67767-172">
            #tmp_list-67767-172 .elBulletList b {
                color: rgb(0, 0, 0);
            }
        </style>
        <style id="button_style_tmp_button-64442-160">
            #tmp_button-64442-160 .elButtonFlat:hover {
                background-color: #b98b02 !important;
            }

            #tmp_button-64442-160 .elButtonBottomBorder:hover {
                background-color: #b98b02 !important;
            }

            #tmp_button-64442-160 .elButtonSubtle:hover {
                background-color: #b98b02 !important;
            }

            #tmp_button-64442-160 .elButtonGradient {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(235, 177, 3)), color-stop(1, #b98b02));
                background-image: -o-linear-gradient(bottom, rgb(235, 177, 3) 0%, #b98b02 100%);
                background-image: -moz-linear-gradient(bottom, rgb(235, 177, 3) 0%, #b98b02 100%);
                background-image: -webkit-linear-gradient(bottom, rgb(235, 177, 3) 0%, #b98b02 100%);
                background-image: -ms-linear-gradient(bottom, rgb(235, 177, 3) 0%, #b98b02 100%);
                background-image: linear-gradient(to bottom, rgb(235, 177, 3) 0%, #b98b02 100%);
            }

            #tmp_button-64442-160 .elButtonGradient:hover {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgb(235, 177, 3)), color-stop(0, #b98b02));
                background-image: -o-linear-gradient(bottom, rgb(235, 177, 3) 100%, #b98b02 0%);
                background-image: -moz-linear-gradient(bottom, rgb(235, 177, 3) 100%, #b98b02 0%);
                background-image: -webkit-linear-gradient(bottom, rgb(235, 177, 3) 100%, #b98b02 0%);
                background-image: -ms-linear-gradient(bottom, rgb(235, 177, 3) 100%, #b98b02 0%);
                background-image: linear-gradient(to bottom, rgb(235, 177, 3) 100%, #b98b02 0%);
            }

            #tmp_button-64442-160 .elButtonBorder {
                border: 3px solid rgb(235, 177, 3) !important;
                color: rgb(235, 177, 3) !important;
            }

            #tmp_button-64442-160 .elButtonBorder:hover {
                background-color: rgb(235, 177, 3) !important;
                color: #FFF !important;
            }
        </style>
        <style id="button_style_button-62313-163">
            #button-62313-163 .elButtonFlat:hover {
                background-color: #b98b02 !important;
            }

            #button-62313-163 .elButtonBottomBorder:hover {
                background-color: #b98b02 !important;
            }

            #button-62313-163 .elButtonSubtle:hover {
                background-color: #b98b02 !important;
            }

            #button-62313-163 .elButtonGradient {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(235, 177, 3)), color-stop(1, #b98b02));
                background-image: -o-linear-gradient(bottom, rgb(235, 177, 3) 0%, #b98b02 100%);
                background-image: -moz-linear-gradient(bottom, rgb(235, 177, 3) 0%, #b98b02 100%);
                background-image: -webkit-linear-gradient(bottom, rgb(235, 177, 3) 0%, #b98b02 100%);
                background-image: -ms-linear-gradient(bottom, rgb(235, 177, 3) 0%, #b98b02 100%);
                background-image: linear-gradient(to bottom, rgb(235, 177, 3) 0%, #b98b02 100%);
            }

            #button-62313-163 .elButtonGradient:hover {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgb(235, 177, 3)), color-stop(0, #b98b02));
                background-image: -o-linear-gradient(bottom, rgb(235, 177, 3) 100%, #b98b02 0%);
                background-image: -moz-linear-gradient(bottom, rgb(235, 177, 3) 100%, #b98b02 0%);
                background-image: -webkit-linear-gradient(bottom, rgb(235, 177, 3) 100%, #b98b02 0%);
                background-image: -ms-linear-gradient(bottom, rgb(235, 177, 3) 100%, #b98b02 0%);
                background-image: linear-gradient(to bottom, rgb(235, 177, 3) 100%, #b98b02 0%);
            }

            #button-62313-163 .elButtonBorder {
                border: 3px solid rgb(235, 177, 3) !important;
                color: rgb(235, 177, 3) !important;
            }

            #button-62313-163 .elButtonBorder:hover {
                background-color: rgb(235, 177, 3) !important;
                color: #FFF !important;
            }
        </style>
        <style id="button_style_button-32181-162">
            #button-32181-162 .elButtonFlat:hover {
                background-color: #b98b02 !important;
            }

            #button-32181-162 .elButtonBottomBorder:hover {
                background-color: #b98b02 !important;
            }

            #button-32181-162 .elButtonSubtle:hover {
                background-color: #b98b02 !important;
            }

            #button-32181-162 .elButtonGradient {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(235, 177, 3)), color-stop(1, #b98b02));
                background-image: -o-linear-gradient(bottom, rgb(235, 177, 3) 0%, #b98b02 100%);
                background-image: -moz-linear-gradient(bottom, rgb(235, 177, 3) 0%, #b98b02 100%);
                background-image: -webkit-linear-gradient(bottom, rgb(235, 177, 3) 0%, #b98b02 100%);
                background-image: -ms-linear-gradient(bottom, rgb(235, 177, 3) 0%, #b98b02 100%);
                background-image: linear-gradient(to bottom, rgb(235, 177, 3) 0%, #b98b02 100%);
            }

            #button-32181-162 .elButtonGradient:hover {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgb(235, 177, 3)), color-stop(0, #b98b02));
                background-image: -o-linear-gradient(bottom, rgb(235, 177, 3) 100%, #b98b02 0%);
                background-image: -moz-linear-gradient(bottom, rgb(235, 177, 3) 100%, #b98b02 0%);
                background-image: -webkit-linear-gradient(bottom, rgb(235, 177, 3) 100%, #b98b02 0%);
                background-image: -ms-linear-gradient(bottom, rgb(235, 177, 3) 100%, #b98b02 0%);
                background-image: linear-gradient(to bottom, rgb(235, 177, 3) 100%, #b98b02 0%);
            }

            #button-32181-162 .elButtonBorder {
                border: 3px solid rgb(235, 177, 3) !important;
                color: rgb(235, 177, 3) !important;
            }

            #button-32181-162 .elButtonBorder:hover {
                background-color: rgb(235, 177, 3) !important;
                color: #FFF !important;
            }
        </style>
        <style id="bold_style_tmp_subheadline-41358-179">
            #tmp_subheadline-41358-179 .elHeadline b {
                color: rgb(10, 83, 192);
            }

            #tmp_subheadline-41358-179 .elHeadline b {
                color: rgb(10, 83, 192);
            }
        </style>
        <style id="bold_style_tmp_subheadline-41358-179"></style>
        <style id="bold_style_tmp_subheadline-74291-128">
            #tmp_subheadline-74291-128 .elHeadline b {
                color: rgb(239, 10, 10);
            }

            #tmp_subheadline-74291-128 .elHeadline b {
                color: rgb(239, 10, 10);
            }
        </style>
        <style id="bold_style_tmp_subheadline-74291-128"></style>
        <style id="bold_style_tmp_subheadline-88307-161">
            #tmp_subheadline-88307-161 .elHeadline b {
                color: rgb(239, 10, 10);
            }

            #tmp_subheadline-88307-161 .elHeadline b {
                color: rgb(239, 10, 10);
            }
        </style>
        <style id="bold_style_tmp_subheadline-88307-161"></style>
        <style id="bold_style_tmp_subheadline-92744-159">
            #tmp_subheadline-92744-159 .elHeadline b {
                color: rgb(239, 10, 10);
            }

            #tmp_subheadline-92744-159 .elHeadline b {
                color: rgb(239, 10, 10);
            }
        </style>
        <style id="bold_style_tmp_subheadline-92744-159"></style>
        <style id="bold_style_tmp_headline1-97859-147">
            #tmp_headline1-97859-147 .elHeadline b {
                color: rgb(33, 95, 159);
            }

            #tmp_headline1-97859-147 .elHeadline b {
                color: rgb(33, 95, 159);
            }
        </style>
        <style id="bold_style_tmp_headline1-97859-147"></style>
        <style id="bold_style_tmp_headline1-97119-153">
            #tmp_headline1-97119-153 .elHeadline b {
                color: rgb(9, 17, 192);
            }

            #tmp_headline1-97119-153 .elHeadline b {
                color: rgb(9, 17, 192);
            }
        </style>
        <style id="bold_style_tmp_headline1-97119-153"></style>
        <style id="bold_style_tmp_headline1-63627-131-143">
            #tmp_headline1-63627-131-143 .elHeadline b {
                color: rgb(255, 255, 255);
            }

            #tmp_headline1-63627-131-143 .elHeadline b {
                color: rgb(255, 255, 255);
            }
        </style>
        <style id="bold_style_tmp_headline1-63627-131-143"></style>
        <style id="bold_style_tmp_paragraph-13393-146-129">
            #tmp_paragraph-13393-146-129 .elHeadline b {
                color: rgb(10, 78, 239);
            }

            #tmp_paragraph-13393-146-129 .elHeadline b {
                color: rgb(10, 78, 239);
            }
        </style>
        <style id="bold_style_tmp_paragraph-13393-146-129"></style>
        <style id="bold_style_tmp_subheadline-64038-121">
            #tmp_subheadline-64038-121 .elHeadline b {
                color: rgb(10, 78, 239);
            }

            #tmp_subheadline-64038-121 .elHeadline b {
                color: rgb(10, 78, 239);
            }
        </style>
        <style id="bold_style_tmp_subheadline-64038-121"></style>
        <style id="bold_style_tmp_subheadline-99608-131">
            #tmp_subheadline-99608-131 .elHeadline b {
                color: rgb(239, 10, 10);
            }

            #tmp_subheadline-99608-131 .elHeadline b {
                color: rgb(239, 10, 10);
            }
        </style>
        <style id="bold_style_tmp_subheadline-99608-131"></style>
        <style id="bold_style_tmp_list-67767-182">
            #tmp_list-67767-182 .elBulletList b {
                color: rgb(0, 0, 0);
            }
        </style>
        <style id="bold_style_tmp_subheadline-41358-161">
            #tmp_subheadline-41358-161 .elHeadline b {
                color: rgb(10, 83, 192);
            }

            #tmp_subheadline-41358-161 .elHeadline b {
                color: rgb(10, 83, 192);
            }
        </style>
        <style id="bold_style_tmp_subheadline-41358-161"></style>
        <style id="bold_style_tmp_subheadline-74291-155">
            #tmp_subheadline-74291-155 .elHeadline b {
                color: rgb(239, 10, 10);
            }

            #tmp_subheadline-74291-155 .elHeadline b {
                color: rgb(239, 10, 10);
            }
        </style>
        <style id="bold_style_tmp_subheadline-74291-155"></style>
        <style id="bold_style_tmp_subheadline-88307-184">
            #tmp_subheadline-88307-184 .elHeadline b {
                color: rgb(239, 10, 10);
            }

            #tmp_subheadline-88307-184 .elHeadline b {
                color: rgb(239, 10, 10);
            }
        </style>
        <style id="bold_style_tmp_subheadline-88307-184"></style>
        <style id="bold_style_tmp_subheadline-92744-136">
            #tmp_subheadline-92744-136 .elHeadline b {
                color: rgb(239, 10, 10);
            }

            #tmp_subheadline-92744-136 .elHeadline b {
                color: rgb(239, 10, 10);
            }
        </style>
        <style id="bold_style_tmp_subheadline-92744-136"></style>
        <style id="bold_style_tmp_headline1-97859-103">
            #tmp_headline1-97859-103 .elHeadline b {
                color: rgb(33, 95, 159);
            }

            #tmp_headline1-97859-103 .elHeadline b {
                color: rgb(33, 95, 159);
            }
        </style>
        <style id="bold_style_tmp_headline1-97859-103"></style>
        <style id="bold_style_tmp_headline1-97859-155">
            #tmp_headline1-97859-155 .elHeadline b {
                color: rgb(33, 95, 159);
            }

            #tmp_headline1-97859-155 .elHeadline b {
                color: rgb(33, 95, 159);
            }
        </style>
        <style id="bold_style_tmp_headline1-97859-155"></style>
        <style id="bold_style_tmp_paragraph-79620-187">
            #tmp_paragraph-79620-187 .elHeadline b {
                color: rgb(4, 202, 17);
            }

            #tmp_paragraph-79620-187 .elHeadline b {
                color: rgb(4, 202, 17);
            }
        </style>
        <style id="bold_style_tmp_paragraph-79620-187"></style>
        <style id="bold_style_tmp_headline1-97119-185">
            #tmp_headline1-97119-185 .elHeadline b {
                color: rgb(9, 17, 192);
            }

            #tmp_headline1-97119-185 .elHeadline b {
                color: rgb(9, 17, 192);
            }
        </style>
        <style id="bold_style_tmp_headline1-97119-185"></style>
        <style id="bold_style_tmp_headline1-63627-131-157">
            #tmp_headline1-63627-131-157 .elHeadline b {
                color: rgb(255, 255, 255);
            }

            #tmp_headline1-63627-131-157 .elHeadline b {
                color: rgb(255, 255, 255);
            }
        </style>
        <style id="bold_style_tmp_headline1-63627-131-157"></style>
        <style id="bold_style_tmp_headline1-70597-168">
            #tmp_headline1-70597-168 .elHeadline b {
                color: rgb(25, 188, 52);
            }

            #tmp_headline1-70597-168 .elHeadline b {
                color: rgb(25, 188, 52);
            }
        </style>
        <style id="bold_style_tmp_headline1-70597-168"></style>
        <style id="bold_style_tmp_subheadline-64038-153">
            #tmp_subheadline-64038-153 .elHeadline b {
                color: rgb(10, 78, 239);
            }

            #tmp_subheadline-64038-153 .elHeadline b {
                color: rgb(10, 78, 239);
            }
        </style>
        <style id="bold_style_tmp_subheadline-64038-153"></style>
        <style id="bold_style_tmp_subheadline-99608-172">
            #tmp_subheadline-99608-172 .elHeadline b {
                color: rgb(239, 10, 10);
            }

            #tmp_subheadline-99608-172 .elHeadline b {
                color: rgb(239, 10, 10);
            }
        </style>
        <style id="bold_style_tmp_subheadline-99608-172"></style>
        <style id="bold_style_tmp_list-67767-183">
            #tmp_list-67767-183 .elBulletList b {
                color: rgb(0, 0, 0);
            }
        </style>
        <style id="bold_style_tmp_headline1-25724-185">
            #tmp_headline1-25724-185 .elHeadline b {
                color: rgb(31, 188, 25);
            }

            #tmp_headline1-25724-185 .elHeadline b {
                color: rgb(31, 188, 25);
            }
        </style>
        <style id="bold_style_tmp_headline1-25724-185"></style>
        <style id="bold_style_tmp_subheadline-78433-129">
            #tmp_subheadline-78433-129 .elHeadline b {
                color: rgb(230, 29, 29);
            }

            #tmp_subheadline-78433-129 .elHeadline b {
                color: rgb(230, 29, 29);
            }
        </style>
        <style id="bold_style_tmp_subheadline-78433-129"></style>
        <style id="bold_style_tmp_subheadline-41358-142">
            #tmp_subheadline-41358-142 .elHeadline b {
                color: rgb(10, 83, 192);
            }

            #tmp_subheadline-41358-142 .elHeadline b {
                color: rgb(10, 83, 192);
            }
        </style>
        <style id="bold_style_tmp_subheadline-41358-142"></style>
        <style id="bold_style_tmp_subheadline-74291-123">
            #tmp_subheadline-74291-123 .elHeadline b {
                color: rgb(239, 10, 10);
            }

            #tmp_subheadline-74291-123 .elHeadline b {
                color: rgb(239, 10, 10);
            }
        </style>
        <style id="bold_style_tmp_subheadline-74291-123"></style>
        <style id="bold_style_tmp_subheadline-88307-151">
            #tmp_subheadline-88307-151 .elHeadline b {
                color: rgb(239, 10, 10);
            }

            #tmp_subheadline-88307-151 .elHeadline b {
                color: rgb(239, 10, 10);
            }
        </style>
        <style id="bold_style_tmp_subheadline-88307-151"></style>
        <style id="bold_style_tmp_subheadline-92744-142">
            #tmp_subheadline-92744-142 .elHeadline b {
                color: rgb(239, 10, 10);
            }

            #tmp_subheadline-92744-142 .elHeadline b {
                color: rgb(239, 10, 10);
            }
        </style>
        <style id="bold_style_tmp_subheadline-92744-142"></style>
        <style id="bold_style_tmp_headline1-97859-144">
            #tmp_headline1-97859-144 .elHeadline b {
                color: rgb(33, 95, 159);
            }

            #tmp_headline1-97859-144 .elHeadline b {
                color: rgb(33, 95, 159);
            }
        </style>
        <style id="bold_style_tmp_headline1-97859-144"></style>
        <style id="bold_style_headline-52854-129">
            #headline-52854-129 .elHeadline b {
                color: rgb(230, 29, 29);
            }

            #headline-52854-129 .elHeadline b {
                color: rgb(230, 29, 29);
            }
        </style>
        <style id="bold_style_headline-52854-129"></style>
        <style id="bold_style_tmp_paragraph-79620-163">
            #tmp_paragraph-79620-163 .elHeadline b {
                color: rgb(4, 202, 17);
            }

            #tmp_paragraph-79620-163 .elHeadline b {
                color: rgb(4, 202, 17);
            }
        </style>
        <style id="bold_style_tmp_paragraph-79620-163"></style>
        <style id="bold_style_tmp_headline1-63627-131-114">
            #tmp_headline1-63627-131-114 .elHeadline b {
                color: rgb(255, 255, 255);
            }

            #tmp_headline1-63627-131-114 .elHeadline b {
                color: rgb(255, 255, 255);
            }
        </style>
        <style id="bold_style_tmp_headline1-63627-131-114"></style>
        <style id="bold_style_tmp_headline1-70597-137">
            #tmp_headline1-70597-137 .elHeadline b {
                color: rgb(25, 188, 52);
            }

            #tmp_headline1-70597-137 .elHeadline b {
                color: rgb(25, 188, 52);
            }
        </style>
        <style id="bold_style_tmp_headline1-70597-137"></style>
        <style id="bold_style_tmp_subheadline-64038-128">
            #tmp_subheadline-64038-128 .elHeadline b {
                color: rgb(10, 78, 239);
            }

            #tmp_subheadline-64038-128 .elHeadline b {
                color: rgb(10, 78, 239);
            }
        </style>
        <style id="bold_style_tmp_subheadline-64038-128"></style>
        <style id="bold_style_tmp_subheadline-99608-161">
            #tmp_subheadline-99608-161 .elHeadline b {
                color: rgb(239, 10, 10);
            }

            #tmp_subheadline-99608-161 .elHeadline b {
                color: rgb(239, 10, 10);
            }
        </style>
        <style id="bold_style_tmp_subheadline-99608-161"></style>
        <style id="bold_style_tmp_list-67767-106">
            #tmp_list-67767-106 .elBulletList b {
                color: rgb(0, 0, 0);
            }
        </style>
        <style id="bold_style_tmp_headline1-25724-156">
            #tmp_headline1-25724-156 .elHeadline b {
                color: rgb(31, 188, 25);
            }

            #tmp_headline1-25724-156 .elHeadline b {
                color: rgb(31, 188, 25);
            }
        </style>
        <style id="bold_style_tmp_headline1-25724-156"></style>
        <style id="bold_style_tmp_subheadline-78433-171">
            #tmp_subheadline-78433-171 .elHeadline b {
                color: rgb(230, 29, 29);
            }

            #tmp_subheadline-78433-171 .elHeadline b {
                color: rgb(230, 29, 29);
            }
        </style>
        <style id="bold_style_tmp_subheadline-78433-171"></style>
        <style id="bold_style_tmp_subheadline-41358-149">
            #tmp_subheadline-41358-149 .elHeadline b {
                color: rgb(10, 83, 192);
            }

            #tmp_subheadline-41358-149 .elHeadline b {
                color: rgb(10, 83, 192);
            }
        </style>
        <style id="bold_style_tmp_subheadline-41358-149"></style>
        <style id="bold_style_tmp_subheadline-74291-171">
            #tmp_subheadline-74291-171 .elHeadline b {
                color: rgb(239, 10, 10);
            }

            #tmp_subheadline-74291-171 .elHeadline b {
                color: rgb(239, 10, 10);
            }
        </style>
        <style id="bold_style_tmp_subheadline-74291-171"></style>
        <style id="bold_style_tmp_subheadline-88307-108">
            #tmp_subheadline-88307-108 .elHeadline b {
                color: rgb(239, 10, 10);
            }

            #tmp_subheadline-88307-108 .elHeadline b {
                color: rgb(239, 10, 10);
            }
        </style>
        <style id="bold_style_tmp_subheadline-88307-108"></style>
        <style id="bold_style_tmp_subheadline-92744-102">
            #tmp_subheadline-92744-102 .elHeadline b {
                color: rgb(239, 10, 10);
            }

            #tmp_subheadline-92744-102 .elHeadline b {
                color: rgb(239, 10, 10);
            }
        </style>
        <style id="bold_style_tmp_subheadline-92744-102"></style>
        <style id="bold_style_tmp_headline1-97859-122">
            #tmp_headline1-97859-122 .elHeadline b {
                color: rgb(33, 95, 159);
            }

            #tmp_headline1-97859-122 .elHeadline b {
                color: rgb(33, 95, 159);
            }
        </style>
        <style id="bold_style_tmp_headline1-97859-122"></style>
        <style id="bold_style_headline-52854-176">
            #headline-52854-176 .elHeadline b {
                color: rgb(230, 29, 29);
            }

            #headline-52854-176 .elHeadline b {
                color: rgb(230, 29, 29);
            }
        </style>
        <style id="bold_style_headline-52854-176"></style>
        <style id="bold_style_tmp_paragraph-79620-149">
            #tmp_paragraph-79620-149 .elHeadline b {
                color: rgb(4, 202, 17);
            }

            #tmp_paragraph-79620-149 .elHeadline b {
                color: rgb(4, 202, 17);
            }
        </style>
        <style id="bold_style_tmp_paragraph-79620-149"></style>
        <style id="bold_style_tmp_subheadline-34806-163">
            #tmp_subheadline-34806-163 .elHeadline b {
                color: rgb(69, 190, 31);
            }

            #tmp_subheadline-34806-163 .elHeadline b {
                color: rgb(69, 190, 31);
            }
        </style>
        <style id="bold_style_tmp_subheadline-34806-163"></style>
        <style id="bold_style_tmp_headline1-70597-123">
            #tmp_headline1-70597-123 .elHeadline b {
                color: rgb(210, 25, 8);
            }

            #tmp_headline1-70597-123 .elHeadline b {
                color: rgb(210, 25, 8);
            }
        </style>
        <style id="bold_style_tmp_headline1-70597-123"></style>
        <style id="bold_style_tmp_headline1-50659-147">
            #tmp_headline1-50659-147 .elHeadline b {
                color: rgb(44, 153, 96);
            }

            #tmp_headline1-50659-147 .elHeadline b {
                color: rgb(44, 153, 96);
            }
        </style>
        <style id="bold_style_tmp_headline1-50659-147"></style>
        <style id="bold_style_tmp_subheadline-64038-178">
            #tmp_subheadline-64038-178 .elHeadline b {
                color: rgb(10, 78, 239);
            }

            #tmp_subheadline-64038-178 .elHeadline b {
                color: rgb(10, 78, 239);
            }
        </style>
        <style id="bold_style_tmp_subheadline-64038-178"></style>
        <style id="bold_style_tmp_headline1-45822-180">
            #tmp_headline1-45822-180 .elHeadline b {
                color: rgb(44, 153, 96);
            }

            #tmp_headline1-45822-180 .elHeadline b {
                color: rgb(44, 153, 96);
            }
        </style>
        <style id="bold_style_tmp_headline1-45822-180"></style>
        <style id="bold_style_tmp_subheadline-99608-113">
            #tmp_subheadline-99608-113 .elHeadline b {
                color: rgb(239, 10, 10);
            }

            #tmp_subheadline-99608-113 .elHeadline b {
                color: rgb(239, 10, 10);
            }
        </style>
        <style id="bold_style_tmp_subheadline-99608-113"></style>
        <style id="bold_style_tmp_list-67767-142">
            #tmp_list-67767-142 .elBulletList b {
                color: rgb(0, 0, 0);
            }
        </style>
        <style id="bold_style_tmp_headline1-25724-189">
            #tmp_headline1-25724-189 .elHeadline b {
                color: rgb(31, 188, 25);
            }

            #tmp_headline1-25724-189 .elHeadline b {
                color: rgb(31, 188, 25);
            }
        </style>
        <style id="bold_style_tmp_headline1-25724-189"></style>
        <style id="bold_style_tmp_subheadline-78433-161">
            #tmp_subheadline-78433-161 .elHeadline b {
                color: rgb(230, 29, 29);
            }

            #tmp_subheadline-78433-161 .elHeadline b {
                color: rgb(230, 29, 29);
            }
        </style>
        <style id="bold_style_tmp_subheadline-78433-161"></style>
        <style id="bold_style_tmp_headline1-24658-132">
            #tmp_headline1-24658-132 .elHeadline b {
                color: rgb(44, 153, 96);
            }

            #tmp_headline1-24658-132 .elHeadline b {
                color: rgb(44, 153, 96);
            }
        </style>
        <style id="bold_style_tmp_headline1-24658-132"></style>
        <style id="bold_style_tmp_subheadline-41358-173">
            #tmp_subheadline-41358-173 .elHeadline b {
                color: rgb(44, 153, 96);
            }

            #tmp_subheadline-41358-173 .elHeadline b {
                color: rgb(44, 153, 96);
            }
        </style>
        <style id="bold_style_tmp_subheadline-41358-173"></style>
        <style id="bold_style_tmp_subheadline-74291-105">
            #tmp_subheadline-74291-105 .elHeadline b {
                color: rgb(239, 10, 10);
            }

            #tmp_subheadline-74291-105 .elHeadline b {
                color: rgb(239, 10, 10);
            }
        </style>
        <style id="bold_style_tmp_subheadline-74291-105"></style>
        <style id="bold_style_tmp_subheadline-88307-178">
            #tmp_subheadline-88307-178 .elHeadline b {
                color: rgb(239, 10, 10);
            }

            #tmp_subheadline-88307-178 .elHeadline b {
                color: rgb(239, 10, 10);
            }
        </style>
        <style id="bold_style_tmp_subheadline-88307-178"></style>
        <style id="bold_style_tmp_subheadline-92744-163">
            #tmp_subheadline-92744-163 .elHeadline b {
                color: rgb(239, 10, 10);
            }

            #tmp_subheadline-92744-163 .elHeadline b {
                color: rgb(239, 10, 10);
            }
        </style>
        <style id="bold_style_tmp_subheadline-92744-163"></style>
        <style id="bold_style_tmp_headline1-76814-145">
            #tmp_headline1-76814-145 .elHeadline b {
                color: rgb(22, 164, 133);
            }
        </style>
        <style id="bold_style_tmp_subheadline-46037-148">
            #tmp_subheadline-46037-148 .elHeadline b {
                color: rgb(45, 45, 45);
            }
        </style>
        <style id="bold_style_tmp_headline1-97859-169">
            #tmp_headline1-97859-169 .elHeadline b {
                color: rgb(33, 95, 159);
            }

            #tmp_headline1-97859-169 .elHeadline b {
                color: rgb(33, 95, 159);
            }

            #tmp_headline1-97859-169 .elHeadline b {
                color: rgb(33, 95, 159);
            }

            #tmp_headline1-97859-169 .elHeadline b {
                color: rgb(33, 95, 159);
            }
        </style>
        <style id="bold_style_tmp_headline1-97859-169"></style>
        <style id="bold_style_headline-52854-189">
            #headline-52854-189 .elHeadline b {
                color: rgb(210, 64, 29);
            }

            #headline-52854-189 .elHeadline b {
                color: rgb(210, 64, 29);
            }
        </style>
        <style id="bold_style_headline-52854-189"></style>
        <style id="bold_style_tmp_paragraph-79620-117">
            #tmp_paragraph-79620-117 .elHeadline b {
                color: rgb(4, 202, 17);
            }

            #tmp_paragraph-79620-117 .elHeadline b {
                color: rgb(4, 202, 17);
            }
        </style>
        <style id="bold_style_tmp_paragraph-79620-117"></style>
        <style id="bold_style_tmp_subheadline-34806-117">
            #tmp_subheadline-34806-117 .elHeadline b {
                color: rgb(69, 190, 31);
            }

            #tmp_subheadline-34806-117 .elHeadline b {
                color: rgb(69, 190, 31);
            }
        </style>
        <style id="bold_style_tmp_subheadline-34806-117"></style>
        <style id="bold_style_tmp_headline1-70597-154">
            #tmp_headline1-70597-154 .elHeadline b {
                color: rgb(220, 89, 59);
            }

            #tmp_headline1-70597-154 .elHeadline b {
                color: rgb(220, 89, 59);
            }
        </style>
        <style id="bold_style_tmp_headline1-70597-154"></style>
        <style id="bold_style_tmp_headline1-50659-188">
            #tmp_headline1-50659-188 .elHeadline b {
                color: rgb(220, 101, 80);
            }

            #tmp_headline1-50659-188 .elHeadline b {
                color: rgb(220, 101, 80);
            }
        </style>
        <style id="bold_style_tmp_headline1-50659-188"></style>
        <style id="bold_style_tmp_subheadline-64038-131">
            #tmp_subheadline-64038-131 .elHeadline b {
                color: rgb(10, 78, 239);
            }

            #tmp_subheadline-64038-131 .elHeadline b {
                color: rgb(10, 78, 239);
            }
        </style>
        <style id="bold_style_tmp_subheadline-64038-131"></style>
        <style id="bold_style_tmp_headline1-45822-154">
            #tmp_headline1-45822-154 .elHeadline b {
                color: rgb(220, 101, 80);
            }

            #tmp_headline1-45822-154 .elHeadline b {
                color: rgb(220, 101, 80);
            }
        </style>
        <style id="bold_style_tmp_headline1-45822-154"></style>
        <style id="bold_style_tmp_subheadline-99608-133">
            #tmp_subheadline-99608-133 .elHeadline b {
                color: rgb(239, 10, 10);
            }

            #tmp_subheadline-99608-133 .elHeadline b {
                color: rgb(239, 10, 10);
            }
        </style>
        <style id="bold_style_tmp_subheadline-99608-133"></style>
        <style id="bold_style_tmp_headline1-76814-124">
            #tmp_headline1-76814-124 .elHeadline b {
                color: rgb(220, 101, 80);
            }

            #tmp_headline1-76814-124 .elHeadline b {
                color: rgb(220, 101, 80);
            }
        </style>
        <style id="bold_style_tmp_headline1-76814-124"></style>
        <style id="bold_style_tmp_list-67767-149">
            #tmp_list-67767-149 .elBulletList b {
                color: rgb(0, 0, 0);
            }
        </style>
        <style id="bold_style_tmp_subheadline-59166-180">
            #tmp_subheadline-59166-180 .elHeadline b {
                color: rgb(220, 101, 80);
            }

            #tmp_subheadline-59166-180 .elHeadline b {
                color: rgb(220, 101, 80);
            }
        </style>
        <style id="bold_style_tmp_subheadline-59166-180"></style>
        <style id="bold_style_tmp_headline1-25724-152">
            #tmp_headline1-25724-152 .elHeadline b {
                color: rgb(31, 188, 25);
            }

            #tmp_headline1-25724-152 .elHeadline b {
                color: rgb(31, 188, 25);
            }
        </style>
        <style id="bold_style_tmp_headline1-25724-152"></style>
        <style id="bold_style_tmp_subheadline-78433-102">
            #tmp_subheadline-78433-102 .elHeadline b {
                color: rgb(230, 29, 29);
            }

            #tmp_subheadline-78433-102 .elHeadline b {
                color: rgb(230, 29, 29);
            }
        </style>
        <style id="bold_style_tmp_subheadline-78433-102"></style>
        <style id="bold_style_tmp_headline1-24658-126">
            #tmp_headline1-24658-126 .elHeadline b {
                color: rgb(220, 101, 80);
            }

            #tmp_headline1-24658-126 .elHeadline b {
                color: rgb(220, 101, 80);
            }
        </style>
        <style id="bold_style_tmp_headline1-24658-126"></style>
        <style id="bold_style_headline-79633-142">
            #headline-79633-142 .elHeadline b {
                color: rgb(220, 101, 80);
            }

            #headline-79633-142 .elHeadline b {
                color: rgb(220, 101, 80);
            }
        </style>
        <style id="bold_style_headline-79633-142"></style>
        <style id="bold_style_headline-96476-137">
            #headline-96476-137 .elHeadline b {
                color: rgb(220, 101, 80);
            }

            #headline-96476-137 .elHeadline b {
                color: rgb(220, 101, 80);
            }
        </style>
        <style id="bold_style_headline-96476-137"></style>
        <style id="bold_style_headline-46616-133">
            #headline-46616-133 .elHeadline b {
                color: rgb(220, 101, 80);
            }

            #headline-46616-133 .elHeadline b {
                color: rgb(220, 101, 80);
            }
        </style>
        <style id="bold_style_headline-46616-133"></style>
        <style id="bold_style_tmp_subheadline-41358-185">
            #tmp_subheadline-41358-185 .elHeadline b {
                color: rgb(220, 101, 80);
            }

            #tmp_subheadline-41358-185 .elHeadline b {
                color: rgb(220, 101, 80);
            }
        </style>
        <style id="bold_style_tmp_subheadline-41358-185"></style>
        <style id="bold_style_tmp_subheadline-74291-183">
            #tmp_subheadline-74291-183 .elHeadline b {
                color: rgb(44, 153, 96);
            }

            #tmp_subheadline-74291-183 .elHeadline b {
                color: rgb(44, 153, 96);
            }
        </style>
        <style id="bold_style_tmp_subheadline-74291-183"></style>
        <style id="bold_style_tmp_subheadline-88307-177">
            #tmp_subheadline-88307-177 .elHeadline b {
                color: rgb(220, 101, 80);
            }

            #tmp_subheadline-88307-177 .elHeadline b {
                color: rgb(220, 101, 80);
            }
        </style>
        <style id="bold_style_tmp_subheadline-88307-177"></style>
        <style id="bold_style_tmp_subheadline-92744-145">
            #tmp_subheadline-92744-145 .elHeadline b {
                color: rgb(220, 101, 80);
            }

            #tmp_subheadline-92744-145 .elHeadline b {
                color: rgb(220, 101, 80);
            }
        </style>
        <style id="bold_style_tmp_subheadline-92744-145"></style>
        <style id="bold_style_tmp_headline1-97859-169"></style>
        <style id="bold_style_tmp_headline1-97859-169"></style>
        <style id="bold_style_headline-52854-127">
            #headline-52854-127 .elHeadline b {
                color: rgb(210, 64, 29);
            }

            #headline-52854-127 .elHeadline b {
                color: rgb(210, 64, 29);
            }
        </style>
        <style id="bold_style_headline-52854-127"></style>
        <style id="bold_style_tmp_paragraph-79620-136">
            #tmp_paragraph-79620-136 .elHeadline b {
                color: rgb(4, 202, 17);
            }

            #tmp_paragraph-79620-136 .elHeadline b {
                color: rgb(4, 202, 17);
            }
        </style>
        <style id="bold_style_tmp_paragraph-79620-136"></style>
        <style id="bold_style_tmp_headline1-70597-143">
            #tmp_headline1-70597-143 .elHeadline b {
                color: rgb(24, 93, 145);
            }

            #tmp_headline1-70597-143 .elHeadline b {
                color: rgb(24, 93, 145);
            }
        </style>
        <style id="bold_style_tmp_headline1-70597-143"></style>
        <style id="bold_style_tmp_headline1-50659-107">
            #tmp_headline1-50659-107 .elHeadline b {
                color: rgb(24, 93, 145);
            }

            #tmp_headline1-50659-107 .elHeadline b {
                color: rgb(24, 93, 145);
            }
        </style>
        <style id="bold_style_tmp_headline1-50659-107"></style>
        <style id="bold_style_tmp_subheadline-64038-187">
            #tmp_subheadline-64038-187 .elHeadline b {
                color: rgb(10, 78, 239);
            }

            #tmp_subheadline-64038-187 .elHeadline b {
                color: rgb(10, 78, 239);
            }
        </style>
        <style id="bold_style_tmp_subheadline-64038-187"></style>
        <style id="bold_style_tmp_headline1-45822-124">
            #tmp_headline1-45822-124 .elHeadline b {
                color: rgb(24, 93, 145);
            }

            #tmp_headline1-45822-124 .elHeadline b {
                color: rgb(24, 93, 145);
            }
        </style>
        <style id="bold_style_tmp_headline1-45822-124"></style>
        <style id="bold_style_tmp_subheadline-99608-181">
            #tmp_subheadline-99608-181 .elHeadline b {
                color: rgb(239, 10, 10);
            }

            #tmp_subheadline-99608-181 .elHeadline b {
                color: rgb(239, 10, 10);
            }
        </style>
        <style id="bold_style_tmp_subheadline-99608-181"></style>
        <style id="bold_style_tmp_headline1-76814-119">
            #tmp_headline1-76814-119 .elHeadline b {
                color: rgb(24, 93, 145);
            }

            #tmp_headline1-76814-119 .elHeadline b {
                color: rgb(24, 93, 145);
            }
        </style>
        <style id="bold_style_tmp_headline1-76814-119"></style>
        <style id="bold_style_tmp_list-67767-104">
            #tmp_list-67767-104 .elBulletList b {
                color: rgb(0, 0, 0);
            }
        </style>
        <style id="bold_style_tmp_subheadline-59166-120">
            #tmp_subheadline-59166-120 .elHeadline b {
                color: rgb(24, 93, 145);
            }

            #tmp_subheadline-59166-120 .elHeadline b {
                color: rgb(24, 93, 145);
            }
        </style>
        <style id="bold_style_tmp_subheadline-59166-120"></style>
        <style id="bold_style_tmp_headline1-25724-126">
            #tmp_headline1-25724-126 .elHeadline b {
                color: rgb(31, 188, 25);
            }

            #tmp_headline1-25724-126 .elHeadline b {
                color: rgb(31, 188, 25);
            }
        </style>
        <style id="bold_style_tmp_headline1-25724-126"></style>
        <style id="bold_style_tmp_subheadline-78433-158">
            #tmp_subheadline-78433-158 .elHeadline b {
                color: rgb(230, 29, 29);
            }

            #tmp_subheadline-78433-158 .elHeadline b {
                color: rgb(230, 29, 29);
            }
        </style>
        <style id="bold_style_tmp_subheadline-78433-158"></style>
        <style id="bold_style_tmp_headline1-24658-167">
            #tmp_headline1-24658-167 .elHeadline b {
                color: rgb(24, 93, 145);
            }

            #tmp_headline1-24658-167 .elHeadline b {
                color: rgb(24, 93, 145);
            }
        </style>
        <style id="bold_style_tmp_headline1-24658-167"></style>
        <style id="bold_style_headline-79633-125">
            #headline-79633-125 .elHeadline b {
                color: rgb(24, 93, 145);
            }

            #headline-79633-125 .elHeadline b {
                color: rgb(24, 93, 145);
            }
        </style>
        <style id="bold_style_headline-79633-125"></style>
        <style id="bold_style_tmp_list-92812-139">
            #tmp_list-92812-139 .elBulletList b {
                color: rgb(24, 93, 145);
            }
        </style>
        <style id="bold_style_list-64312-170">
            #list-64312-170 .elBulletList b {
                color: rgb(24, 93, 145);
            }
        </style>
        <style id="bold_style_list-90790-157">
            #list-90790-157 .elBulletList b {
                color: rgb(24, 93, 145);
            }
        </style>
        <style id="bold_style_headline-96476-135">
            #headline-96476-135 .elHeadline b {
                color: rgb(24, 93, 145);
            }

            #headline-96476-135 .elHeadline b {
                color: rgb(24, 93, 145);
            }
        </style>
        <style id="bold_style_headline-96476-135"></style>
        <style id="bold_style_headline-46616-136">
            #headline-46616-136 .elHeadline b {
                color: rgb(24, 93, 145);
            }

            #headline-46616-136 .elHeadline b {
                color: rgb(24, 93, 145);
            }
        </style>
        <style id="bold_style_headline-46616-136"></style>
        <style id="bold_style_tmp_subheadline-41358-175">
            #tmp_subheadline-41358-175 .elHeadline b {
                color: rgb(24, 93, 145);
            }

            #tmp_subheadline-41358-175 .elHeadline b {
                color: rgb(24, 93, 145);
            }
        </style>
        <style id="bold_style_tmp_subheadline-41358-175"></style>
        <style id="bold_style_tmp_subheadline-74291-177">
            #tmp_subheadline-74291-177 .elHeadline b {
                color: rgb(44, 153, 96);
            }

            #tmp_subheadline-74291-177 .elHeadline b {
                color: rgb(44, 153, 96);
            }
        </style>
        <style id="bold_style_tmp_subheadline-74291-177"></style>
        <style id="bold_style_tmp_subheadline-88307-185">
            #tmp_subheadline-88307-185 .elHeadline b {
                color: rgb(24, 93, 145);
            }

            #tmp_subheadline-88307-185 .elHeadline b {
                color: rgb(24, 93, 145);
            }
        </style>
        <style id="bold_style_tmp_subheadline-88307-185"></style>
        <style id="bold_style_tmp_subheadline-92744-137">
            #tmp_subheadline-92744-137 .elHeadline b {
                color: rgb(24, 93, 145);
            }

            #tmp_subheadline-92744-137 .elHeadline b {
                color: rgb(24, 93, 145);
            }
        </style>
        <style id="bold_style_tmp_subheadline-92744-137"></style>
        <style id="button_style_tmp_button-80249">
            #tmp_button-80249 .elButtonFlat:hover {
                background-color: #cf1404 !important;
            }

            #tmp_button-80249 .elButtonBottomBorder:hover {
                background-color: #cf1404 !important;
            }

            #tmp_button-80249 .elButtonSubtle:hover {
                background-color: #cf1404 !important;
            }

            #tmp_button-80249 .elButtonGradient {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(250, 31, 12)), color-stop(1, #cf1404));
                background-image: -o-linear-gradient(bottom, rgb(250, 31, 12) 0%, #cf1404 100%);
                background-image: -moz-linear-gradient(bottom, rgb(250, 31, 12) 0%, #cf1404 100%);
                background-image: -webkit-linear-gradient(bottom, rgb(250, 31, 12) 0%, #cf1404 100%);
                background-image: -ms-linear-gradient(bottom, rgb(250, 31, 12) 0%, #cf1404 100%);
                background-image: linear-gradient(to bottom, rgb(250, 31, 12) 0%, #cf1404 100%);
            }

            #tmp_button-80249 .elButtonGradient:hover {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgb(250, 31, 12)), color-stop(0, #cf1404));
                background-image: -o-linear-gradient(bottom, rgb(250, 31, 12) 100%, #cf1404 0%);
                background-image: -moz-linear-gradient(bottom, rgb(250, 31, 12) 100%, #cf1404 0%);
                background-image: -webkit-linear-gradient(bottom, rgb(250, 31, 12) 100%, #cf1404 0%);
                background-image: -ms-linear-gradient(bottom, rgb(250, 31, 12) 100%, #cf1404 0%);
                background-image: linear-gradient(to bottom, rgb(250, 31, 12) 100%, #cf1404 0%);
            }

            #tmp_button-80249 .elButtonBorder {
                border: 3px solid rgb(250, 31, 12) !important;
                color: rgb(250, 31, 12) !important;
            }

            #tmp_button-80249 .elButtonBorder:hover {
                background-color: rgb(250, 31, 12) !important;
                color: #FFF !important;
            }
        </style>
        <style id="bold_style_tmp_subheadline-34806-148">
            #tmp_subheadline-34806-148 .elHeadline b {
                color: rgb(0, 117, 178);
            }
        </style>
        <style id="bold_style_tmp_subheadline-34806-148">
            #tmp_subheadline-34806-148 .elHeadline b {
                color: rgb(0, 117, 178);
            }
        </style>
        <style id="bold_style_headline-44687">
            #headline-44687 .elHeadline b {
                color: rgb(228, 59, 44);
            }
        </style>
        <style id="bold_style_headline-87062">
            #headline-87062 .elHeadline b {
                color: rgb(228, 59, 44);
            }
        </style>
        <style id="bold_style_headline-58674">
            #headline-58674 .elHeadline b {
                color: rgb(228, 59, 44);
            }
        </style>
        <style id="button_style_tmp_button-47866">
            #tmp_button-47866 .elButtonFlat:hover {
                background-color: #db1b09 !important;
            }

            #tmp_button-47866 .elButtonBottomBorder:hover {
                background-color: #db1b09 !important;
            }

            #tmp_button-47866 .elButtonSubtle:hover {
                background-color: #db1b09 !important;
            }

            #tmp_button-47866 .elButtonGradient {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(245, 42, 24)), color-stop(1, #db1b09));
                background-image: -o-linear-gradient(bottom, rgb(245, 42, 24) 0%, #db1b09 100%);
                background-image: -moz-linear-gradient(bottom, rgb(245, 42, 24) 0%, #db1b09 100%);
                background-image: -webkit-linear-gradient(bottom, rgb(245, 42, 24) 0%, #db1b09 100%);
                background-image: -ms-linear-gradient(bottom, rgb(245, 42, 24) 0%, #db1b09 100%);
                background-image: linear-gradient(to bottom, rgb(245, 42, 24) 0%, #db1b09 100%);
            }

            #tmp_button-47866 .elButtonGradient:hover {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgb(245, 42, 24)), color-stop(0, #db1b09));
                background-image: -o-linear-gradient(bottom, rgb(245, 42, 24) 100%, #db1b09 0%);
                background-image: -moz-linear-gradient(bottom, rgb(245, 42, 24) 100%, #db1b09 0%);
                background-image: -webkit-linear-gradient(bottom, rgb(245, 42, 24) 100%, #db1b09 0%);
                background-image: -ms-linear-gradient(bottom, rgb(245, 42, 24) 100%, #db1b09 0%);
                background-image: linear-gradient(to bottom, rgb(245, 42, 24) 100%, #db1b09 0%);
            }

            #tmp_button-47866 .elButtonGradient2 {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(245, 42, 24)), color-stop(1, #db1b09));
                background-image: -o-linear-gradient(bottom, rgb(245, 42, 24) 30%, #db1b09 80%);
                background-image: -moz-linear-gradient(bottom, rgb(245, 42, 24) 30%, #db1b09 80%);
                background-image: -webkit-linear-gradient(bottom, rgb(245, 42, 24) 30%, #db1b09 80%);
                background-image: -ms-linear-gradient(bottom, rgb(245, 42, 24) 30%, #db1b09 80%);
                background-image: linear-gradient(to bottom, rgb(245, 42, 24) 30%, #db1b09 80%);
            }

            #tmp_button-47866 .elButtonGradient2:hover {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgb(245, 42, 24)), color-stop(0, #db1b09));
                background-image: -o-linear-gradient(bottom, rgb(245, 42, 24) 100%, #db1b09 30%);
                background-image: -moz-linear-gradient(bottom, rgb(245, 42, 24) 100%, #db1b09 30%);
                background-image: -webkit-linear-gradient(bottom, rgb(245, 42, 24) 100%, #db1b09 30%);
                background-image: -ms-linear-gradient(bottom, rgb(245, 42, 24) 100%, #db1b09 30%);
                background-image: linear-gradient(to bottom, rgb(245, 42, 24) 100%, #db1b09 30%);
            }

            #tmp_button-47866 .elButtonBorder {
                border: 3px solid rgb(245, 42, 24) !important;
                color: rgb(245, 42, 24) !important;
            }

            #tmp_button-47866 .elButtonBorder:hover {
                background-color: rgb(245, 42, 24) !important;
                color: #FFF !important;
            }
        </style>
        <style id="bold_style_tmp_subheadline-27801">
            #tmp_subheadline-27801 .elHeadline b {
                color: rgb(228, 59, 44);
            }
        </style>
        <style id="bold_style_tmp_subheadline-60102">
            #tmp_subheadline-60102 .elHeadline b {
                color: rgb(255, 255, 255);
            }
        </style>
        <style id="bold_style_headline-51335">
            #headline-51335 .elHeadline b {
                color: rgb(255, 227, 0);
            }
        </style>
        <style id="bold_style_headline-37927">
            #headline-37927 .elHeadline b {
                color: rgb(255, 255, 255);
            }
        </style>
        <style id="bold_style_tmp_subheadline-60102-149">
            #tmp_subheadline-60102-149 .elHeadline b {
                color: rgb(255, 255, 255);
            }
        </style>
        <style id="bold_style_headline-51335-143">
            #headline-51335-143 .elHeadline b {
                color: rgb(255, 227, 0);
            }
        </style>
        <style id="bold_style_tmp_headline1-46258">
            #tmp_headline1-46258 .elHeadline b {
                color: rgb(255, 255, 255);
            }
        </style>
        <style id="bold_style_tmp_headline1-33407-123-148">
            #tmp_headline1-33407-123-148 .elHeadline b {
                color: rgb(255, 255, 255);
            }
        </style>
        <style id="bold_style_tmp_headline1-33407-123">
            #tmp_headline1-33407-123 .elHeadline b {
                color: rgb(255, 255, 255);
            }
        </style>
        <style id="bold_style_tmp_subheadline-34806">
            #tmp_subheadline-34806 .elHeadline b {
                color: rgb(0, 117, 178);
            }
        </style>
        <style id="bold_style_tmp_headline1-33407-123-111">
            #tmp_headline1-33407-123-111 .elHeadline b {
                color: rgb(255, 255, 255);
            }
        </style>
        <style id="bold_style_headline-98316-133">
            #headline-98316-133 .elHeadline b {
                color: rgb(228, 59, 44);
            }
        </style>
        <style id="bold_style_headline-29216-148">
            #headline-29216-148 .elHeadline b {
                color: rgb(45, 45, 45);
            }
        </style>
        <style id="bold_style_headline-46345-144">
            #headline-46345-144 .elHeadline b {
                color: rgb(228, 59, 44);
            }
        </style>
        <style id="bold_style_tmp_paragraph-83814-118">
            #tmp_paragraph-83814-118 .elHeadline b {
                color: rgb(45, 45, 45);
            }
        </style>
        <style id="bold_style_tmp_paragraph-24252-102">
            #tmp_paragraph-24252-102 .elHeadline b {
                color: rgb(228, 59, 44);
            }
        </style>
        <style id="bold_style_tmp_paragraph-78299-187-153">
            #tmp_paragraph-78299-187-153 .elHeadline b {
                color: rgb(228, 59, 44);
            }
        </style>
        <style id="bold_style_headline-36201">
            #headline-36201 .elHeadline b {
                color: rgb(45, 45, 45);
            }
        </style>
        <style id="bold_style_headline-88110-149">
            #headline-88110-149 .elHeadline b {
                color: rgb(255, 255, 255);
            }
        </style>
        <style id="bold_style_headline-27276">
            #headline-27276 .elHeadline b {
                color: rgb(255, 255, 255);
            }
        </style>
        <style id="bold_style_headline-31262">
            #headline-31262 .elHeadline b {
                color: rgb(255, 255, 255);
            }
        </style>
        <style id="button_style_headline-27276">
            #headline-27276 .elButtonFlat:hover {
                background-color: #005a89 !important;
            }

            #headline-27276 .elButtonBottomBorder:hover {
                background-color: #005a89 !important;
            }

            #headline-27276 .elButtonSubtle:hover {
                background-color: #005a89 !important;
            }

            #headline-27276 .elButtonGradient {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(0, 117, 178)), color-stop(1, #005a89));
                background-image: -o-linear-gradient(bottom, rgb(0, 117, 178) 0%, #005a89 100%);
                background-image: -moz-linear-gradient(bottom, rgb(0, 117, 178) 0%, #005a89 100%);
                background-image: -webkit-linear-gradient(bottom, rgb(0, 117, 178) 0%, #005a89 100%);
                background-image: -ms-linear-gradient(bottom, rgb(0, 117, 178) 0%, #005a89 100%);
                background-image: linear-gradient(to bottom, rgb(0, 117, 178) 0%, #005a89 100%);
            }

            #headline-27276 .elButtonGradient:hover {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgb(0, 117, 178)), color-stop(0, #005a89));
                background-image: -o-linear-gradient(bottom, rgb(0, 117, 178) 100%, #005a89 0%);
                background-image: -moz-linear-gradient(bottom, rgb(0, 117, 178) 100%, #005a89 0%);
                background-image: -webkit-linear-gradient(bottom, rgb(0, 117, 178) 100%, #005a89 0%);
                background-image: -ms-linear-gradient(bottom, rgb(0, 117, 178) 100%, #005a89 0%);
                background-image: linear-gradient(to bottom, rgb(0, 117, 178) 100%, #005a89 0%);
            }

            #headline-27276 .elButtonGradient2 {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(0, 117, 178)), color-stop(1, #005a89));
                background-image: -o-linear-gradient(bottom, rgb(0, 117, 178) 30%, #005a89 80%);
                background-image: -moz-linear-gradient(bottom, rgb(0, 117, 178) 30%, #005a89 80%);
                background-image: -webkit-linear-gradient(bottom, rgb(0, 117, 178) 30%, #005a89 80%);
                background-image: -ms-linear-gradient(bottom, rgb(0, 117, 178) 30%, #005a89 80%);
                background-image: linear-gradient(to bottom, rgb(0, 117, 178) 30%, #005a89 80%);
            }

            #headline-27276 .elButtonGradient2:hover {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgb(0, 117, 178)), color-stop(0, #005a89));
                background-image: -o-linear-gradient(bottom, rgb(0, 117, 178) 100%, #005a89 30%);
                background-image: -moz-linear-gradient(bottom, rgb(0, 117, 178) 100%, #005a89 30%);
                background-image: -webkit-linear-gradient(bottom, rgb(0, 117, 178) 100%, #005a89 30%);
                background-image: -ms-linear-gradient(bottom, rgb(0, 117, 178) 100%, #005a89 30%);
                background-image: linear-gradient(to bottom, rgb(0, 117, 178) 100%, #005a89 30%);
            }

            #headline-27276 .elButtonBorder {
                border: 3px solid rgb(0, 117, 178) !important;
                color: rgb(0, 117, 178) !important;
            }

            #headline-27276 .elButtonBorder:hover {
                background-color: rgb(0, 117, 178) !important;
                color: #FFF !important;
            }
        </style>
        <style id="button_style_headline-88110-149">
            #headline-88110-149 .elButtonFlat:hover {
                background-color: #005a89 !important;
            }

            #headline-88110-149 .elButtonBottomBorder:hover {
                background-color: #005a89 !important;
            }

            #headline-88110-149 .elButtonSubtle:hover {
                background-color: #005a89 !important;
            }

            #headline-88110-149 .elButtonGradient {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(0, 117, 178)), color-stop(1, #005a89));
                background-image: -o-linear-gradient(bottom, rgb(0, 117, 178) 0%, #005a89 100%);
                background-image: -moz-linear-gradient(bottom, rgb(0, 117, 178) 0%, #005a89 100%);
                background-image: -webkit-linear-gradient(bottom, rgb(0, 117, 178) 0%, #005a89 100%);
                background-image: -ms-linear-gradient(bottom, rgb(0, 117, 178) 0%, #005a89 100%);
                background-image: linear-gradient(to bottom, rgb(0, 117, 178) 0%, #005a89 100%);
            }

            #headline-88110-149 .elButtonGradient:hover {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgb(0, 117, 178)), color-stop(0, #005a89));
                background-image: -o-linear-gradient(bottom, rgb(0, 117, 178) 100%, #005a89 0%);
                background-image: -moz-linear-gradient(bottom, rgb(0, 117, 178) 100%, #005a89 0%);
                background-image: -webkit-linear-gradient(bottom, rgb(0, 117, 178) 100%, #005a89 0%);
                background-image: -ms-linear-gradient(bottom, rgb(0, 117, 178) 100%, #005a89 0%);
                background-image: linear-gradient(to bottom, rgb(0, 117, 178) 100%, #005a89 0%);
            }

            #headline-88110-149 .elButtonGradient2 {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(0, 117, 178)), color-stop(1, #005a89));
                background-image: -o-linear-gradient(bottom, rgb(0, 117, 178) 30%, #005a89 80%);
                background-image: -moz-linear-gradient(bottom, rgb(0, 117, 178) 30%, #005a89 80%);
                background-image: -webkit-linear-gradient(bottom, rgb(0, 117, 178) 30%, #005a89 80%);
                background-image: -ms-linear-gradient(bottom, rgb(0, 117, 178) 30%, #005a89 80%);
                background-image: linear-gradient(to bottom, rgb(0, 117, 178) 30%, #005a89 80%);
            }

            #headline-88110-149 .elButtonGradient2:hover {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgb(0, 117, 178)), color-stop(0, #005a89));
                background-image: -o-linear-gradient(bottom, rgb(0, 117, 178) 100%, #005a89 30%);
                background-image: -moz-linear-gradient(bottom, rgb(0, 117, 178) 100%, #005a89 30%);
                background-image: -webkit-linear-gradient(bottom, rgb(0, 117, 178) 100%, #005a89 30%);
                background-image: -ms-linear-gradient(bottom, rgb(0, 117, 178) 100%, #005a89 30%);
                background-image: linear-gradient(to bottom, rgb(0, 117, 178) 100%, #005a89 30%);
            }

            #headline-88110-149 .elButtonBorder {
                border: 3px solid rgb(0, 117, 178) !important;
                color: rgb(0, 117, 178) !important;
            }

            #headline-88110-149 .elButtonBorder:hover {
                background-color: rgb(0, 117, 178) !important;
                color: #FFF !important;
            }
        </style>
        <style id="bold_style_headline-10119">
            #headline-10119 .elHeadline b {
                color: rgb(255, 255, 255);
            }
        </style>
        <style id="bold_style_tmp_paragraph-84107">
            #tmp_paragraph-84107 .elHeadline b {
                color: rgb(228, 59, 44);
            }
        </style>
        <style id="bold_style_tmp_subheadline-99515">
            #tmp_subheadline-99515 .elHeadline b {
                color: rgb(225, 34, 17);
            }
        </style>
        <style id="bold_style_headline-93782">
            #headline-93782 .elHeadline b {
                color: rgb(228, 59, 44);
            }
        </style>
        <style id="bold_style_headline-85106">
            #headline-85106 .elHeadline b {
                color: rgb(225, 34, 17);
            }
        </style>
        <style id="bold_style_headline-99907">
            #headline-99907 .elHeadline b {
                color: rgb(228, 59, 44);
            }
        </style>
        <style id="bold_style_headline-30491">
            #headline-30491 .elHeadline b {
                color: rgb(225, 34, 17);
            }
        </style>
        <style id="bold_style_tmp_subheadline-16154">
            #tmp_subheadline-16154 .elHeadline b {
                color: rgb(255, 255, 255);
            }
        </style>
        <style id="bold_style_headline-37031">
            #headline-37031 .elHeadline b {
                color: rgb(228, 59, 44);
            }
        </style>
        <style id="bold_style_tmp_subheadline-45042-169-137-127-115-136-155-156-108-131">
            #tmp_subheadline-45042-169-137-127-115-136-155-156-108-131 .elHeadline b {
                color: rgb(13, 172, 25);
            }
        </style>
        <style id="bold_style_tmp_subheadline-45042-169-137-127-115-136-155-156-108-131-176">
            #tmp_subheadline-45042-169-137-127-115-136-155-156-108-131-176 .elHeadline b {
                color: rgb(13, 172, 25);
            }
        </style>
        <style id="bold_style_tmp_subheadline-45042-169-137-127-115-136-155-156-108-131-176-154">
            #tmp_subheadline-45042-169-137-127-115-136-155-156-108-131-176-154 .elHeadline b {
                color: rgb(13, 172, 25);
            }
        </style>
        <style id="bold_style_tmp_subheadline-45042-169-137-127-115-136-155-156-108-131-176-154-155">
            #tmp_subheadline-45042-169-137-127-115-136-155-156-108-131-176-154-155 .elHeadline b {
                color: rgb(13, 172, 25);
            }
        </style>
        <style id="bold_style_tmp_subheadline-45042-169-137-127-115-136-155-156-108-131-176-154-155-163">
            #tmp_subheadline-45042-169-137-127-115-136-155-156-108-131-176-154-155-163 .elHeadline b {
                color: rgb(13, 172, 25);
            }
        </style>
        <style id="bold_style_tmp_subheadline-45042-169-137-127-115-136-155-156-108-131-176-154-155-163-146">
            #tmp_subheadline-45042-169-137-127-115-136-155-156-108-131-176-154-155-163-146 .elHeadline b {
                color: rgb(13, 172, 25);
            }
        </style>
        <style id="bold_style_tmp_subheadline-45042-169-137-127-115-136-155-156-108-131-176-154-155-163-146-102">
            #tmp_subheadline-45042-169-137-127-115-136-155-156-108-131-176-154-155-163-146-102 .elHeadline b {
                color: rgb(13, 172, 25);
            }
        </style>
        <style id="bold_style_tmp_subheadline-45042-169-137-127-115-136-155-156-108-131-176-154-155-163-146-102-115">
            #tmp_subheadline-45042-169-137-127-115-136-155-156-108-131-176-154-155-163-146-102-115 .elHeadline b {
                color: rgb(13, 172, 25);
            }
        </style>
        <style id="bold_style_headline-99332">
            #headline-99332 .elHeadline b {
                color: rgb(0, 117, 178);
            }
        </style>
        <style id="bold_style_tmp_subheadline-75347">
            #tmp_subheadline-75347 .elHeadline b {
                color: rgb(0, 101, 104);
            }
        </style>
        <style id="button_style_tmp_subheadline-16154">
            #tmp_subheadline-16154 .elButtonFlat:hover {
                background-color: #003d3f !important;
            }

            #tmp_subheadline-16154 .elButtonBottomBorder:hover {
                background-color: #003d3f !important;
            }

            #tmp_subheadline-16154 .elButtonSubtle:hover {
                background-color: #003d3f !important;
            }

            #tmp_subheadline-16154 .elButtonGradient {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(0, 101, 104)), color-stop(1, #003d3f));
                background-image: -o-linear-gradient(bottom, rgb(0, 101, 104) 0%, #003d3f 100%);
                background-image: -moz-linear-gradient(bottom, rgb(0, 101, 104) 0%, #003d3f 100%);
                background-image: -webkit-linear-gradient(bottom, rgb(0, 101, 104) 0%, #003d3f 100%);
                background-image: -ms-linear-gradient(bottom, rgb(0, 101, 104) 0%, #003d3f 100%);
                background-image: linear-gradient(to bottom, rgb(0, 101, 104) 0%, #003d3f 100%);
            }

            #tmp_subheadline-16154 .elButtonGradient:hover {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgb(0, 101, 104)), color-stop(0, #003d3f));
                background-image: -o-linear-gradient(bottom, rgb(0, 101, 104) 100%, #003d3f 0%);
                background-image: -moz-linear-gradient(bottom, rgb(0, 101, 104) 100%, #003d3f 0%);
                background-image: -webkit-linear-gradient(bottom, rgb(0, 101, 104) 100%, #003d3f 0%);
                background-image: -ms-linear-gradient(bottom, rgb(0, 101, 104) 100%, #003d3f 0%);
                background-image: linear-gradient(to bottom, rgb(0, 101, 104) 100%, #003d3f 0%);
            }

            #tmp_subheadline-16154 .elButtonGradient2 {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(0, 101, 104)), color-stop(1, #003d3f));
                background-image: -o-linear-gradient(bottom, rgb(0, 101, 104) 30%, #003d3f 80%);
                background-image: -moz-linear-gradient(bottom, rgb(0, 101, 104) 30%, #003d3f 80%);
                background-image: -webkit-linear-gradient(bottom, rgb(0, 101, 104) 30%, #003d3f 80%);
                background-image: -ms-linear-gradient(bottom, rgb(0, 101, 104) 30%, #003d3f 80%);
                background-image: linear-gradient(to bottom, rgb(0, 101, 104) 30%, #003d3f 80%);
            }

            #tmp_subheadline-16154 .elButtonGradient2:hover {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgb(0, 101, 104)), color-stop(0, #003d3f));
                background-image: -o-linear-gradient(bottom, rgb(0, 101, 104) 100%, #003d3f 30%);
                background-image: -moz-linear-gradient(bottom, rgb(0, 101, 104) 100%, #003d3f 30%);
                background-image: -webkit-linear-gradient(bottom, rgb(0, 101, 104) 100%, #003d3f 30%);
                background-image: -ms-linear-gradient(bottom, rgb(0, 101, 104) 100%, #003d3f 30%);
                background-image: linear-gradient(to bottom, rgb(0, 101, 104) 100%, #003d3f 30%);
            }

            #tmp_subheadline-16154 .elButtonBorder {
                border: 3px solid rgb(0, 101, 104) !important;
                color: rgb(0, 101, 104) !important;
            }

            #tmp_subheadline-16154 .elButtonBorder:hover {
                background-color: rgb(0, 101, 104) !important;
                color: #FFF !important;
            }
        </style>
        <style id="bold_style_headline-30286">
            #headline-30286 .elHeadline b {
                color: rgb(255, 227, 0);
            }
        </style>
        <style id="bold_style_headline-87073">
            #headline-87073 .elHeadline b {
                color: rgb(255, 227, 0);
            }
        </style>
        <style id="bold_style_tmp_subheadline-69558">
            #tmp_subheadline-69558 .elHeadline b {
                color: rgb(255, 227, 0);
            }
        </style>
        <style id="button_style_tmp_subheadline-16105">
            #tmp_subheadline-16105 .elButtonFlat:hover {
                background-color: #ebebeb !important;
            }

            #tmp_subheadline-16105 .elButtonBottomBorder:hover {
                background-color: #ebebeb !important;
            }

            #tmp_subheadline-16105 .elButtonSubtle:hover {
                background-color: #ebebeb !important;
            }

            #tmp_subheadline-16105 .elButtonGradient {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(255, 255, 255)), color-stop(1, #ebebeb));
                background-image: -o-linear-gradient(bottom, rgb(255, 255, 255) 0%, #ebebeb 100%);
                background-image: -moz-linear-gradient(bottom, rgb(255, 255, 255) 0%, #ebebeb 100%);
                background-image: -webkit-linear-gradient(bottom, rgb(255, 255, 255) 0%, #ebebeb 100%);
                background-image: -ms-linear-gradient(bottom, rgb(255, 255, 255) 0%, #ebebeb 100%);
                background-image: linear-gradient(to bottom, rgb(255, 255, 255) 0%, #ebebeb 100%);
            }

            #tmp_subheadline-16105 .elButtonGradient:hover {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgb(255, 255, 255)), color-stop(0, #ebebeb));
                background-image: -o-linear-gradient(bottom, rgb(255, 255, 255) 100%, #ebebeb 0%);
                background-image: -moz-linear-gradient(bottom, rgb(255, 255, 255) 100%, #ebebeb 0%);
                background-image: -webkit-linear-gradient(bottom, rgb(255, 255, 255) 100%, #ebebeb 0%);
                background-image: -ms-linear-gradient(bottom, rgb(255, 255, 255) 100%, #ebebeb 0%);
                background-image: linear-gradient(to bottom, rgb(255, 255, 255) 100%, #ebebeb 0%);
            }

            #tmp_subheadline-16105 .elButtonGradient2 {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(255, 255, 255)), color-stop(1, #ebebeb));
                background-image: -o-linear-gradient(bottom, rgb(255, 255, 255) 30%, #ebebeb 80%);
                background-image: -moz-linear-gradient(bottom, rgb(255, 255, 255) 30%, #ebebeb 80%);
                background-image: -webkit-linear-gradient(bottom, rgb(255, 255, 255) 30%, #ebebeb 80%);
                background-image: -ms-linear-gradient(bottom, rgb(255, 255, 255) 30%, #ebebeb 80%);
                background-image: linear-gradient(to bottom, rgb(255, 255, 255) 30%, #ebebeb 80%);
            }

            #tmp_subheadline-16105 .elButtonGradient2:hover {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgb(255, 255, 255)), color-stop(0, #ebebeb));
                background-image: -o-linear-gradient(bottom, rgb(255, 255, 255) 100%, #ebebeb 30%);
                background-image: -moz-linear-gradient(bottom, rgb(255, 255, 255) 100%, #ebebeb 30%);
                background-image: -webkit-linear-gradient(bottom, rgb(255, 255, 255) 100%, #ebebeb 30%);
                background-image: -ms-linear-gradient(bottom, rgb(255, 255, 255) 100%, #ebebeb 30%);
                background-image: linear-gradient(to bottom, rgb(255, 255, 255) 100%, #ebebeb 30%);
            }

            #tmp_subheadline-16105 .elButtonBorder {
                border: 3px solid rgb(255, 255, 255) !important;
                color: rgb(255, 255, 255) !important;
            }

            #tmp_subheadline-16105 .elButtonBorder:hover {
                background-color: rgb(255, 255, 255) !important;
                color: #000 !important;
            }
        </style>
        <style id="bold_style_tmp_subheadline-16105">
            #tmp_subheadline-16105 .elHeadline b {
                color: rgb(0, 101, 104);
            }
        </style>
        <style id="bold_style_tmp_subheadline-59087">
            #tmp_subheadline-59087 .elHeadline b {
                color: rgb(0, 96, 99);
            }
        </style>
        <style id="bold_style_tmp_subheadline-64215">
            #tmp_subheadline-64215 .elHeadline b {
                color: rgb(228, 59, 44);
            }
        </style>
        <style id="bold_style_tmp_subheadline-59087-147">
            #tmp_subheadline-59087-147 .elHeadline b {
                color: rgb(0, 96, 99);
            }
        </style>
        <style id="bold_style_headline-99332-153">
            #headline-99332-153 .elHeadline b {
                color: rgb(0, 117, 178);
            }
        </style>
        <style id="bold_style_tmp_subheadline-64184">
            #tmp_subheadline-64184 .elHeadline b {
                color: rgb(228, 59, 44);
            }
        </style>
        <style id="bold_style_tmp_paragraph-66267">
            #tmp_paragraph-66267 .elHeadline b {
                color: rgb(228, 59, 44);
            }
        </style>
        <style id="bold_style_tmp_headline1-50005">
            #tmp_headline1-50005 .elHeadline b {
                color: rgb(0, 101, 104);
            }
        </style>
        <style id="button_style_headline-10119">
            #headline-10119 .elButtonFlat:hover {
                background-color: #003d3f !important;
            }

            #headline-10119 .elButtonBottomBorder:hover {
                background-color: #003d3f !important;
            }

            #headline-10119 .elButtonSubtle:hover {
                background-color: #003d3f !important;
            }

            #headline-10119 .elButtonGradient {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(0, 101, 104)), color-stop(1, #003d3f));
                background-image: -o-linear-gradient(bottom, rgb(0, 101, 104) 0%, #003d3f 100%);
                background-image: -moz-linear-gradient(bottom, rgb(0, 101, 104) 0%, #003d3f 100%);
                background-image: -webkit-linear-gradient(bottom, rgb(0, 101, 104) 0%, #003d3f 100%);
                background-image: -ms-linear-gradient(bottom, rgb(0, 101, 104) 0%, #003d3f 100%);
                background-image: linear-gradient(to bottom, rgb(0, 101, 104) 0%, #003d3f 100%);
            }

            #headline-10119 .elButtonGradient:hover {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgb(0, 101, 104)), color-stop(0, #003d3f));
                background-image: -o-linear-gradient(bottom, rgb(0, 101, 104) 100%, #003d3f 0%);
                background-image: -moz-linear-gradient(bottom, rgb(0, 101, 104) 100%, #003d3f 0%);
                background-image: -webkit-linear-gradient(bottom, rgb(0, 101, 104) 100%, #003d3f 0%);
                background-image: -ms-linear-gradient(bottom, rgb(0, 101, 104) 100%, #003d3f 0%);
                background-image: linear-gradient(to bottom, rgb(0, 101, 104) 100%, #003d3f 0%);
            }

            #headline-10119 .elButtonGradient2 {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(0, 101, 104)), color-stop(1, #003d3f));
                background-image: -o-linear-gradient(bottom, rgb(0, 101, 104) 30%, #003d3f 80%);
                background-image: -moz-linear-gradient(bottom, rgb(0, 101, 104) 30%, #003d3f 80%);
                background-image: -webkit-linear-gradient(bottom, rgb(0, 101, 104) 30%, #003d3f 80%);
                background-image: -ms-linear-gradient(bottom, rgb(0, 101, 104) 30%, #003d3f 80%);
                background-image: linear-gradient(to bottom, rgb(0, 101, 104) 30%, #003d3f 80%);
            }

            #headline-10119 .elButtonGradient2:hover {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgb(0, 101, 104)), color-stop(0, #003d3f));
                background-image: -o-linear-gradient(bottom, rgb(0, 101, 104) 100%, #003d3f 30%);
                background-image: -moz-linear-gradient(bottom, rgb(0, 101, 104) 100%, #003d3f 30%);
                background-image: -webkit-linear-gradient(bottom, rgb(0, 101, 104) 100%, #003d3f 30%);
                background-image: -ms-linear-gradient(bottom, rgb(0, 101, 104) 100%, #003d3f 30%);
                background-image: linear-gradient(to bottom, rgb(0, 101, 104) 100%, #003d3f 30%);
            }

            #headline-10119 .elButtonBorder {
                border: 3px solid rgb(0, 101, 104) !important;
                color: rgb(0, 101, 104) !important;
            }

            #headline-10119 .elButtonBorder:hover {
                background-color: rgb(0, 101, 104) !important;
                color: #FFF !important;
            }
        </style>
        <style id="button_style_tmp_headline1-33407-123">
            #tmp_headline1-33407-123 .elButtonFlat:hover {
                background-color: #003d3f !important;
            }

            #tmp_headline1-33407-123 .elButtonBottomBorder:hover {
                background-color: #003d3f !important;
            }

            #tmp_headline1-33407-123 .elButtonSubtle:hover {
                background-color: #003d3f !important;
            }

            #tmp_headline1-33407-123 .elButtonGradient {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(0, 101, 104)), color-stop(1, #003d3f));
                background-image: -o-linear-gradient(bottom, rgb(0, 101, 104) 0%, #003d3f 100%);
                background-image: -moz-linear-gradient(bottom, rgb(0, 101, 104) 0%, #003d3f 100%);
                background-image: -webkit-linear-gradient(bottom, rgb(0, 101, 104) 0%, #003d3f 100%);
                background-image: -ms-linear-gradient(bottom, rgb(0, 101, 104) 0%, #003d3f 100%);
                background-image: linear-gradient(to bottom, rgb(0, 101, 104) 0%, #003d3f 100%);
            }

            #tmp_headline1-33407-123 .elButtonGradient:hover {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgb(0, 101, 104)), color-stop(0, #003d3f));
                background-image: -o-linear-gradient(bottom, rgb(0, 101, 104) 100%, #003d3f 0%);
                background-image: -moz-linear-gradient(bottom, rgb(0, 101, 104) 100%, #003d3f 0%);
                background-image: -webkit-linear-gradient(bottom, rgb(0, 101, 104) 100%, #003d3f 0%);
                background-image: -ms-linear-gradient(bottom, rgb(0, 101, 104) 100%, #003d3f 0%);
                background-image: linear-gradient(to bottom, rgb(0, 101, 104) 100%, #003d3f 0%);
            }

            #tmp_headline1-33407-123 .elButtonGradient2 {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(0, 101, 104)), color-stop(1, #003d3f));
                background-image: -o-linear-gradient(bottom, rgb(0, 101, 104) 30%, #003d3f 80%);
                background-image: -moz-linear-gradient(bottom, rgb(0, 101, 104) 30%, #003d3f 80%);
                background-image: -webkit-linear-gradient(bottom, rgb(0, 101, 104) 30%, #003d3f 80%);
                background-image: -ms-linear-gradient(bottom, rgb(0, 101, 104) 30%, #003d3f 80%);
                background-image: linear-gradient(to bottom, rgb(0, 101, 104) 30%, #003d3f 80%);
            }

            #tmp_headline1-33407-123 .elButtonGradient2:hover {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgb(0, 101, 104)), color-stop(0, #003d3f));
                background-image: -o-linear-gradient(bottom, rgb(0, 101, 104) 100%, #003d3f 30%);
                background-image: -moz-linear-gradient(bottom, rgb(0, 101, 104) 100%, #003d3f 30%);
                background-image: -webkit-linear-gradient(bottom, rgb(0, 101, 104) 100%, #003d3f 30%);
                background-image: -ms-linear-gradient(bottom, rgb(0, 101, 104) 100%, #003d3f 30%);
                background-image: linear-gradient(to bottom, rgb(0, 101, 104) 100%, #003d3f 30%);
            }

            #tmp_headline1-33407-123 .elButtonBorder {
                border: 3px solid rgb(0, 101, 104) !important;
                color: rgb(0, 101, 104) !important;
            }

            #tmp_headline1-33407-123 .elButtonBorder:hover {
                background-color: rgb(0, 101, 104) !important;
                color: #FFF !important;
            }
        </style>
        <style id="bold_style_tmp_subheadline-84419">
            #tmp_subheadline-84419 .elHeadline b {
                color: rgb(255, 227, 0);
            }
        </style>
        <style id="button_style_tmp_subheadline-84419">
            #tmp_subheadline-84419 .elButtonFlat:hover {
                background-color: #000000 !important;
            }

            #tmp_subheadline-84419 .elButtonBottomBorder:hover {
                background-color: #000000 !important;
            }

            #tmp_subheadline-84419 .elButtonSubtle:hover {
                background-color: #000000 !important;
            }

            #tmp_subheadline-84419 .elButtonGradient {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgba(0, 0, 0, 0)), color-stop(1, #000000));
                background-image: -o-linear-gradient(bottom, rgba(0, 0, 0, 0) 0%, #000000 100%);
                background-image: -moz-linear-gradient(bottom, rgba(0, 0, 0, 0) 0%, #000000 100%);
                background-image: -webkit-linear-gradient(bottom, rgba(0, 0, 0, 0) 0%, #000000 100%);
                background-image: -ms-linear-gradient(bottom, rgba(0, 0, 0, 0) 0%, #000000 100%);
                background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, #000000 100%);
            }

            #tmp_subheadline-84419 .elButtonGradient:hover {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgba(0, 0, 0, 0)), color-stop(0, #000000));
                background-image: -o-linear-gradient(bottom, rgba(0, 0, 0, 0) 100%, #000000 0%);
                background-image: -moz-linear-gradient(bottom, rgba(0, 0, 0, 0) 100%, #000000 0%);
                background-image: -webkit-linear-gradient(bottom, rgba(0, 0, 0, 0) 100%, #000000 0%);
                background-image: -ms-linear-gradient(bottom, rgba(0, 0, 0, 0) 100%, #000000 0%);
                background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 100%, #000000 0%);
            }

            #tmp_subheadline-84419 .elButtonGradient2 {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgba(0, 0, 0, 0)), color-stop(1, #000000));
                background-image: -o-linear-gradient(bottom, rgba(0, 0, 0, 0) 30%, #000000 80%);
                background-image: -moz-linear-gradient(bottom, rgba(0, 0, 0, 0) 30%, #000000 80%);
                background-image: -webkit-linear-gradient(bottom, rgba(0, 0, 0, 0) 30%, #000000 80%);
                background-image: -ms-linear-gradient(bottom, rgba(0, 0, 0, 0) 30%, #000000 80%);
                background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 30%, #000000 80%);
            }

            #tmp_subheadline-84419 .elButtonGradient2:hover {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgba(0, 0, 0, 0)), color-stop(0, #000000));
                background-image: -o-linear-gradient(bottom, rgba(0, 0, 0, 0) 100%, #000000 30%);
                background-image: -moz-linear-gradient(bottom, rgba(0, 0, 0, 0) 100%, #000000 30%);
                background-image: -webkit-linear-gradient(bottom, rgba(0, 0, 0, 0) 100%, #000000 30%);
                background-image: -ms-linear-gradient(bottom, rgba(0, 0, 0, 0) 100%, #000000 30%);
                background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 100%, #000000 30%);
            }

            #tmp_subheadline-84419 .elButtonBorder {
                border: 3px solid rgba(0, 0, 0, 0) !important;
                color: rgba(0, 0, 0, 0) !important;
            }

            #tmp_subheadline-84419 .elButtonBorder:hover {
                background-color: rgba(0, 0, 0, 0) !important;
                color: #000 !important;
            }
        </style>
        <style id="bold_style_tmp_paragraph-97499">
            #tmp_paragraph-97499 .elHeadline b {
                color: rgb(255, 227, 0);
            }
        </style>
        <style id="button_style_tmp_headline1-33407-123-148">
            #tmp_headline1-33407-123-148 .elButtonFlat:hover {
                background-color: #003d3f !important;
            }

            #tmp_headline1-33407-123-148 .elButtonBottomBorder:hover {
                background-color: #003d3f !important;
            }

            #tmp_headline1-33407-123-148 .elButtonSubtle:hover {
                background-color: #003d3f !important;
            }

            #tmp_headline1-33407-123-148 .elButtonGradient {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(0, 101, 104)), color-stop(1, #003d3f));
                background-image: -o-linear-gradient(bottom, rgb(0, 101, 104) 0%, #003d3f 100%);
                background-image: -moz-linear-gradient(bottom, rgb(0, 101, 104) 0%, #003d3f 100%);
                background-image: -webkit-linear-gradient(bottom, rgb(0, 101, 104) 0%, #003d3f 100%);
                background-image: -ms-linear-gradient(bottom, rgb(0, 101, 104) 0%, #003d3f 100%);
                background-image: linear-gradient(to bottom, rgb(0, 101, 104) 0%, #003d3f 100%);
            }

            #tmp_headline1-33407-123-148 .elButtonGradient:hover {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgb(0, 101, 104)), color-stop(0, #003d3f));
                background-image: -o-linear-gradient(bottom, rgb(0, 101, 104) 100%, #003d3f 0%);
                background-image: -moz-linear-gradient(bottom, rgb(0, 101, 104) 100%, #003d3f 0%);
                background-image: -webkit-linear-gradient(bottom, rgb(0, 101, 104) 100%, #003d3f 0%);
                background-image: -ms-linear-gradient(bottom, rgb(0, 101, 104) 100%, #003d3f 0%);
                background-image: linear-gradient(to bottom, rgb(0, 101, 104) 100%, #003d3f 0%);
            }

            #tmp_headline1-33407-123-148 .elButtonGradient2 {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(0, 101, 104)), color-stop(1, #003d3f));
                background-image: -o-linear-gradient(bottom, rgb(0, 101, 104) 30%, #003d3f 80%);
                background-image: -moz-linear-gradient(bottom, rgb(0, 101, 104) 30%, #003d3f 80%);
                background-image: -webkit-linear-gradient(bottom, rgb(0, 101, 104) 30%, #003d3f 80%);
                background-image: -ms-linear-gradient(bottom, rgb(0, 101, 104) 30%, #003d3f 80%);
                background-image: linear-gradient(to bottom, rgb(0, 101, 104) 30%, #003d3f 80%);
            }

            #tmp_headline1-33407-123-148 .elButtonGradient2:hover {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgb(0, 101, 104)), color-stop(0, #003d3f));
                background-image: -o-linear-gradient(bottom, rgb(0, 101, 104) 100%, #003d3f 30%);
                background-image: -moz-linear-gradient(bottom, rgb(0, 101, 104) 100%, #003d3f 30%);
                background-image: -webkit-linear-gradient(bottom, rgb(0, 101, 104) 100%, #003d3f 30%);
                background-image: -ms-linear-gradient(bottom, rgb(0, 101, 104) 100%, #003d3f 30%);
                background-image: linear-gradient(to bottom, rgb(0, 101, 104) 100%, #003d3f 30%);
            }

            #tmp_headline1-33407-123-148 .elButtonBorder {
                border: 3px solid rgb(0, 101, 104) !important;
                color: rgb(0, 101, 104) !important;
            }

            #tmp_headline1-33407-123-148 .elButtonBorder:hover {
                background-color: rgb(0, 101, 104) !important;
                color: #FFF !important;
            }
        </style>
        <style id="button_style_tmp_headline1-33407-123-111">
            #tmp_headline1-33407-123-111 .elButtonFlat:hover {
                background-color: #003d3f !important;
            }

            #tmp_headline1-33407-123-111 .elButtonBottomBorder:hover {
                background-color: #003d3f !important;
            }

            #tmp_headline1-33407-123-111 .elButtonSubtle:hover {
                background-color: #003d3f !important;
            }

            #tmp_headline1-33407-123-111 .elButtonGradient {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(0, 101, 104)), color-stop(1, #003d3f));
                background-image: -o-linear-gradient(bottom, rgb(0, 101, 104) 0%, #003d3f 100%);
                background-image: -moz-linear-gradient(bottom, rgb(0, 101, 104) 0%, #003d3f 100%);
                background-image: -webkit-linear-gradient(bottom, rgb(0, 101, 104) 0%, #003d3f 100%);
                background-image: -ms-linear-gradient(bottom, rgb(0, 101, 104) 0%, #003d3f 100%);
                background-image: linear-gradient(to bottom, rgb(0, 101, 104) 0%, #003d3f 100%);
            }

            #tmp_headline1-33407-123-111 .elButtonGradient:hover {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgb(0, 101, 104)), color-stop(0, #003d3f));
                background-image: -o-linear-gradient(bottom, rgb(0, 101, 104) 100%, #003d3f 0%);
                background-image: -moz-linear-gradient(bottom, rgb(0, 101, 104) 100%, #003d3f 0%);
                background-image: -webkit-linear-gradient(bottom, rgb(0, 101, 104) 100%, #003d3f 0%);
                background-image: -ms-linear-gradient(bottom, rgb(0, 101, 104) 100%, #003d3f 0%);
                background-image: linear-gradient(to bottom, rgb(0, 101, 104) 100%, #003d3f 0%);
            }

            #tmp_headline1-33407-123-111 .elButtonGradient2 {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(0, 101, 104)), color-stop(1, #003d3f));
                background-image: -o-linear-gradient(bottom, rgb(0, 101, 104) 30%, #003d3f 80%);
                background-image: -moz-linear-gradient(bottom, rgb(0, 101, 104) 30%, #003d3f 80%);
                background-image: -webkit-linear-gradient(bottom, rgb(0, 101, 104) 30%, #003d3f 80%);
                background-image: -ms-linear-gradient(bottom, rgb(0, 101, 104) 30%, #003d3f 80%);
                background-image: linear-gradient(to bottom, rgb(0, 101, 104) 30%, #003d3f 80%);
            }

            #tmp_headline1-33407-123-111 .elButtonGradient2:hover {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgb(0, 101, 104)), color-stop(0, #003d3f));
                background-image: -o-linear-gradient(bottom, rgb(0, 101, 104) 100%, #003d3f 30%);
                background-image: -moz-linear-gradient(bottom, rgb(0, 101, 104) 100%, #003d3f 30%);
                background-image: -webkit-linear-gradient(bottom, rgb(0, 101, 104) 100%, #003d3f 30%);
                background-image: -ms-linear-gradient(bottom, rgb(0, 101, 104) 100%, #003d3f 30%);
                background-image: linear-gradient(to bottom, rgb(0, 101, 104) 100%, #003d3f 30%);
            }

            #tmp_headline1-33407-123-111 .elButtonBorder {
                border: 3px solid rgb(0, 101, 104) !important;
                color: rgb(0, 101, 104) !important;
            }

            #tmp_headline1-33407-123-111 .elButtonBorder:hover {
                background-color: rgb(0, 101, 104) !important;
                color: #FFF !important;
            }
        </style>
        <style id="bold_style_tmp_subheadline-23023">
            #tmp_subheadline-23023 .elHeadline b {
                color: rgb(0, 101, 104);
            }
        </style>
        <style id="bold_style_headline-98341">
            #headline-98341 .elHeadline b {
                color: rgb(0, 101, 104);
            }
        </style>
        <style id="bold_style_headline-76277">
            #headline-76277 .elHeadline b {
                color: rgb(0, 101, 104);
            }
        </style>
        <style id="button_style_tmp_subheadline-64215">
            #tmp_subheadline-64215 .elButtonFlat:hover {
                background-color: #c6e3ff !important;
            }

            #tmp_subheadline-64215 .elButtonBottomBorder:hover {
                background-color: #c6e3ff !important;
            }

            #tmp_subheadline-64215 .elButtonSubtle:hover {
                background-color: #c6e3ff !important;
            }

            #tmp_subheadline-64215 .elButtonGradient {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(239, 247, 255)), color-stop(1, #c6e3ff));
                background-image: -o-linear-gradient(bottom, rgb(239, 247, 255) 0%, #c6e3ff 100%);
                background-image: -moz-linear-gradient(bottom, rgb(239, 247, 255) 0%, #c6e3ff 100%);
                background-image: -webkit-linear-gradient(bottom, rgb(239, 247, 255) 0%, #c6e3ff 100%);
                background-image: -ms-linear-gradient(bottom, rgb(239, 247, 255) 0%, #c6e3ff 100%);
                background-image: linear-gradient(to bottom, rgb(239, 247, 255) 0%, #c6e3ff 100%);
            }

            #tmp_subheadline-64215 .elButtonGradient:hover {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgb(239, 247, 255)), color-stop(0, #c6e3ff));
                background-image: -o-linear-gradient(bottom, rgb(239, 247, 255) 100%, #c6e3ff 0%);
                background-image: -moz-linear-gradient(bottom, rgb(239, 247, 255) 100%, #c6e3ff 0%);
                background-image: -webkit-linear-gradient(bottom, rgb(239, 247, 255) 100%, #c6e3ff 0%);
                background-image: -ms-linear-gradient(bottom, rgb(239, 247, 255) 100%, #c6e3ff 0%);
                background-image: linear-gradient(to bottom, rgb(239, 247, 255) 100%, #c6e3ff 0%);
            }

            #tmp_subheadline-64215 .elButtonGradient2 {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(239, 247, 255)), color-stop(1, #c6e3ff));
                background-image: -o-linear-gradient(bottom, rgb(239, 247, 255) 30%, #c6e3ff 80%);
                background-image: -moz-linear-gradient(bottom, rgb(239, 247, 255) 30%, #c6e3ff 80%);
                background-image: -webkit-linear-gradient(bottom, rgb(239, 247, 255) 30%, #c6e3ff 80%);
                background-image: -ms-linear-gradient(bottom, rgb(239, 247, 255) 30%, #c6e3ff 80%);
                background-image: linear-gradient(to bottom, rgb(239, 247, 255) 30%, #c6e3ff 80%);
            }

            #tmp_subheadline-64215 .elButtonGradient2:hover {
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(1, rgb(239, 247, 255)), color-stop(0, #c6e3ff));
                background-image: -o-linear-gradient(bottom, rgb(239, 247, 255) 100%, #c6e3ff 30%);
                background-image: -moz-linear-gradient(bottom, rgb(239, 247, 255) 100%, #c6e3ff 30%);
                background-image: -webkit-linear-gradient(bottom, rgb(239, 247, 255) 100%, #c6e3ff 30%);
                background-image: -ms-linear-gradient(bottom, rgb(239, 247, 255) 100%, #c6e3ff 30%);
                background-image: linear-gradient(to bottom, rgb(239, 247, 255) 100%, #c6e3ff 30%);
            }

            #tmp_subheadline-64215 .elButtonBorder {
                border: 3px solid rgb(239, 247, 255) !important;
                color: rgb(239, 247, 255) !important;
            }

            #tmp_subheadline-64215 .elButtonBorder:hover {
                background-color: rgb(239, 247, 255) !important;
                color: #FFF !important;
            }
        </style>
    </div>
    <style>
        #IntercomDefaultWidget {
            display: none;
        }

        .selectAW-date-demo,
        .elTicketAddToCalendar,
        .elTicketAddToCalendarV2 {
            display: none;
        }

        .video-js {
            padding-top: 56.25%;
        }

        .vjs-big-play-button,
        .vjs-control-bar {
            z-index: 10 !important;
        }

        .vjs-fullscreen {
            padding-top: 0;
        }
    </style>
</body>

</html>