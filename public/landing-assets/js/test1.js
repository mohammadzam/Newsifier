/**
 * Minified by jsDelivr using Terser v5.10.0.
 * Original file: /npm/@davidsemakula/draft-js-giphy-plugin@0.2.3/lib/index.cjs.js
 *
 * Do NOT use SRI with dynamically generated files! More information: https://www.jsdelivr.com/using-sri-with-dynamic-files
 */
"use strict";

function _interopDefault(e) {
    return e && "object" == typeof e && "default" in e ? e.default : e
}

Object.defineProperty(exports, "__esModule", {value: !0});
var React = require("react"), React__default = _interopDefault(React), immutable = require("immutable"),
    jsFetchApi = require("@giphy/js-fetch-api"), draftJs = require("draft-js"), _ = _interopDefault(require("lodash"));

function _classCallCheck(e, t) {
    if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
}

function _defineProperties(e, t) {
    for (var r = 0; r < t.length; r++) {
        var n = t[r];
        n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(e, n.key, n)
    }
}

function _createClass(e, t, r) {
    return t && _defineProperties(e.prototype, t), r && _defineProperties(e, r), e
}

function _defineProperty(e, t, r) {
    return t in e ? Object.defineProperty(e, t, {
        value: r,
        enumerable: !0,
        configurable: !0,
        writable: !0
    }) : e[t] = r, e
}

function _extends() {
    return _extends = Object.assign || function (e) {
        for (var t = 1; t < arguments.length; t++) {
            var r = arguments[t];
            for (var n in r) Object.prototype.hasOwnProperty.call(r, n) && (e[n] = r[n])
        }
        return e
    }, _extends.apply(this, arguments)
}

function ownKeys(e, t) {
    var r = Object.keys(e);
    if (Object.getOwnPropertySymbols) {
        var n = Object.getOwnPropertySymbols(e);
        t && (n = n.filter((function (t) {
            return Object.getOwnPropertyDescriptor(e, t).enumerable
        }))), r.push.apply(r, n)
    }
    return r
}

function _objectSpread2(e) {
    for (var t = 1; t < arguments.length; t++) {
        var r = null != arguments[t] ? arguments[t] : {};
        t % 2 ? ownKeys(Object(r), !0).forEach((function (t) {
            _defineProperty(e, t, r[t])
        })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(r)) : ownKeys(Object(r)).forEach((function (t) {
            Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(r, t))
        }))
    }
    return e
}

function _inherits(e, t) {
    if ("function" != typeof t && null !== t) throw new TypeError("Super expression must either be null or a function");
    e.prototype = Object.create(t && t.prototype, {
        constructor: {
            value: e,
            writable: !0,
            configurable: !0
        }
    }), t && _setPrototypeOf(e, t)
}

function _getPrototypeOf(e) {
    return _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function (e) {
        return e.__proto__ || Object.getPrototypeOf(e)
    }, _getPrototypeOf(e)
}

function _setPrototypeOf(e, t) {
    return _setPrototypeOf = Object.setPrototypeOf || function (e, t) {
        return e.__proto__ = t, e
    }, _setPrototypeOf(e, t)
}

function _isNativeReflectConstruct() {
    if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
    if (Reflect.construct.sham) return !1;
    if ("function" == typeof Proxy) return !0;
    try {
        return Date.prototype.toString.call(Reflect.construct(Date, [], (function () {
        }))), !0
    } catch (e) {
        return !1
    }
}

function _objectWithoutPropertiesLoose(e, t) {
    if (null == e) return {};
    var r, n, i = {}, o = Object.keys(e);
    for (n = 0; n < o.length; n++) r = o[n], t.indexOf(r) >= 0 || (i[r] = e[r]);
    return i
}

function _objectWithoutProperties(e, t) {
    if (null == e) return {};
    var r, n, i = _objectWithoutPropertiesLoose(e, t);
    if (Object.getOwnPropertySymbols) {
        var o = Object.getOwnPropertySymbols(e);
        for (n = 0; n < o.length; n++) r = o[n], t.indexOf(r) >= 0 || Object.prototype.propertyIsEnumerable.call(e, r) && (i[r] = e[r])
    }
    return i
}

function _assertThisInitialized(e) {
    if (void 0 === e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
    return e
}

function _possibleConstructorReturn(e, t) {
    return !t || "object" != typeof t && "function" != typeof t ? _assertThisInitialized(e) : t
}

function _createSuper(e) {
    var t = _isNativeReflectConstruct();
    return function () {
        var r, n = _getPrototypeOf(e);
        if (t) {
            var i = _getPrototypeOf(this).constructor;
            r = Reflect.construct(n, arguments, i)
        } else r = n.apply(this, arguments);
        return _possibleConstructorReturn(this, r)
    }
}

function _slicedToArray(e, t) {
    return _arrayWithHoles(e) || _iterableToArrayLimit(e, t) || _unsupportedIterableToArray(e, t) || _nonIterableRest()
}

function _toConsumableArray(e) {
    return _arrayWithoutHoles(e) || _iterableToArray(e) || _unsupportedIterableToArray(e) || _nonIterableSpread()
}

function _arrayWithoutHoles(e) {
    if (Array.isArray(e)) return _arrayLikeToArray(e)
}

function _arrayWithHoles(e) {
    if (Array.isArray(e)) return e
}

function _iterableToArray(e) {
    if ("undefined" != typeof Symbol && Symbol.iterator in Object(e)) return Array.from(e)
}

function _iterableToArrayLimit(e, t) {
    if ("undefined" != typeof Symbol && Symbol.iterator in Object(e)) {
        var r = [], n = !0, i = !1, o = void 0;
        try {
            for (var a, s = e[Symbol.iterator](); !(n = (a = s.next()).done) && (r.push(a.value), !t || r.length !== t); n = !0) ;
        } catch (e) {
            i = !0, o = e
        } finally {
            try {
                n || null == s.return || s.return()
            } finally {
                if (i) throw o
            }
        }
        return r
    }
}

function _unsupportedIterableToArray(e, t) {
    if (e) {
        if ("string" == typeof e) return _arrayLikeToArray(e, t);
        var r = Object.prototype.toString.call(e).slice(8, -1);
        return "Object" === r && e.constructor && (r = e.constructor.name), "Map" === r || "Set" === r ? Array.from(e) : "Arguments" === r || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r) ? _arrayLikeToArray(e, t) : void 0
    }
}

function _arrayLikeToArray(e, t) {
    (null == t || t > e.length) && (t = e.length);
    for (var r = 0, n = new Array(t); r < t; r++) n[r] = e[r];
    return n
}

function _nonIterableSpread() {
    throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
}

function _nonIterableRest() {
    throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
}

function _createForOfIteratorHelper(e) {
    if ("undefined" == typeof Symbol || null == e[Symbol.iterator]) {
        if (Array.isArray(e) || (e = _unsupportedIterableToArray(e))) {
            var t = 0, r = function () {
            };
            return {
                s: r, n: function () {
                    return t >= e.length ? {done: !0} : {done: !1, value: e[t++]}
                }, e: function (e) {
                    throw e
                }, f: r
            }
        }
        throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
    }
    var n, i, o = !0, a = !1;
    return {
        s: function () {
            n = e[Symbol.iterator]()
        }, n: function () {
            var e = n.next();
            return o = e.done, e
        }, e: function (e) {
            a = !0, i = e
        }, f: function () {
            try {
                o || null == n.return || n.return()
            } finally {
                if (a) throw i
            }
        }
    }
}

var addGiphy = function (e, t) {
        var r, n, i = t.id, o = t.gifUrl, a = t.url, s = t.type,
            l = _objectWithoutProperties(t, ["id", "gifUrl", "url", "type"]), c = e.getCurrentContent(),
            f = e.getSelection(), u = draftJs.Modifier.removeRange(c, f, "backward"), p = u.getSelectionAfter(),
            d = p.get("focusKey"), y = c.getBlockForKey(d), h = 0 === y.getLength() && null === y.getEntityAt(0),
            g = 0 === f.getStartOffset();
        h || g ? (r = p, n = u) : r = (n = draftJs.Modifier.splitBlock(u, p)).getSelectionAfter();
        var _ = draftJs.Modifier.setBlockType(n, r, "giphy"), m = _.createEntity("giphy", "IMMUTABLE", _objectSpread2({
                id: i,
                gifUrl: o,
                url: a,
                type: s
            }, l)).getLastCreatedEntityKey(), v = draftJs.CharacterMetadata.create({entity: m}), b = [new draftJs.ContentBlock({
                key: draftJs.genKey(),
                type: "giphy",
                text: " ",
                characterList: immutable.List(immutable.Repeat(v, 1))
            }), new draftJs.ContentBlock({key: draftJs.genKey(), type: "unstyled", text: "", characterList: immutable.List()})],
            R = draftJs.BlockMapBuilder.createFromArray(b), P = draftJs.Modifier.replaceWithFragment(_, r, R),
            S = draftJs.EditorState.push(e, P, "insert-giphy");
        return draftJs.EditorState.forceSelection(S, P.getSelectionAfter())
    }, removeGiphy = function (e, t) {
        var r, n = e.getCurrentContent(),
            i = new draftJs.SelectionState({anchorKey: t, anchorOffset: 0, focusKey: t, focusOffset: 0}),
            o = n.getKeyAfter(t), a = n.getBlockForKey(o);
        r = a && "unstyled" === a.getType() && 0 === a.getLength() && a === n.getBlockMap().last() ? new draftJs.SelectionState({
            anchorKey: t,
            anchorOffset: 0,
            focusKey: o,
            focusOffset: 0
        }) : new draftJs.SelectionState({
            anchorKey: t,
            anchorOffset: 0,
            focusKey: t,
            focusOffset: 1
        }), n = draftJs.Modifier.setBlockType(n, r, "unstyled"), n = draftJs.Modifier.removeRange(n, r, "backward");
        var s = draftJs.EditorState.push(e, n, "remove-giphy");
        return draftJs.EditorState.forceSelection(s, i)
    }, cleanupGiphy = function (e, t) {
        var r = e.getCurrentContent(),
            n = new draftJs.SelectionState({anchorKey: t, anchorOffset: 0, focusKey: t, focusOffset: 0}),
            i = draftJs.Modifier.setBlockType(r, n, "unstyled"), o = draftJs.EditorState.push(e, i, "remove-giphy");
        return draftJs.EditorState.forceSelection(o, i.getSelectionAfter())
    }, cleanupEmptyGiphy = function (e) {
        var t = e;
        return e.getCurrentContent().get("blockMap").forEach((function (r) {
            "giphy" === r.get("type") && null === r.getEntityAt(0) && (t = cleanupGiphy(e, r.get("key")))
        })), t
    }, blockRendererFn = function (e) {
        return function (t, r) {
            var n = r.getEditorState, i = r.setEditorState;
            if ("giphy" === t.getType()) return {
                component: e.Giphy, props: {
                    onRemove: function (e) {
                        i(removeGiphy(n(), e))
                    }
                }
            }
        }
    }, Giphy = function (e) {
        _inherits(r, React.Component);
        var t = _createSuper(r);

        function r() {
            var e;
            _classCallCheck(this, r);
            for (var n = arguments.length, i = new Array(n), o = 0; o < n; o++) i[o] = arguments[o];
            return _defineProperty(_assertThisInitialized(e = t.call.apply(t, [this].concat(i))), "remove", (function (t) {
                t.preventDefault(), t.stopPropagation(), e.props.blockProps.onRemove(e.props.block.getKey())
            })), e
        }

        return _createClass(r, [{
            key: "render", value: function () {
                var e = this.props, t = e.block, r = e.theme, n = void 0 === r ? {} : r,
                    i = e.contentState.getEntity(t.getEntityAt(0)).getData().gifUrl;
                return React__default.createElement("figure", {
                    contentEditable: !1,
                    "data-offset-key": "".concat(t.get("key"), "-0-0"),
                    className: n.giphy
                }, React__default.createElement("img", {src: i, className: n.giphyImage, role: "presentation"}))
            }
        }]), r
    }(), giphyBlue = "#00ccff", giphyGreen = "#00ff99", giphyPurple = "#9933ff", giphyRed = "#ff6666",
    giphyYellow = "#fff35c", defaultTheme = {
        giphy: "g1tbkpvz",
        giphyImage: "glv743z",
        select: "s12q5piw",
        selectPopover: "s14tyxfe",
        selectPopoverUp: "s8c948t",
        selectPopoverRight: "s1p2dfmq",
        selectClosedPopover: "sgz6d8p",
        selectButton: "szpritq",
        selectPressedButton: "soqyfbi",
        searchWrapper: "s1a4bmxh",
        searchInput: "s1dawnwp",
        filterButtonWrapper: "f14wzft9",
        filterButton: "f1y0dmik",
        filterPressedButton: "f115ln0i",
        gridWrapper: "g4apto0",
        grid: "gujihyd",
        gridColumn: "gve87w6",
        gridImageWrapper: "g7y6n3z",
        gridLoader: "g95dnq1",
        gridFetchError: "g184iueo"
    }, GiphyGrid = function (e) {
        _inherits(r, React.Component);
        var t = _createSuper(r);

        function r(e) {
            var n;
            return _classCallCheck(this, r), _defineProperty(_assertThisInitialized(n = t.call(this, e)), "gridWrapperRef", null), _defineProperty(_assertThisInitialized(n), "gridRef", null), _defineProperty(_assertThisInitialized(n), "onGridScroll", _.debounce((function (e) {
                if (n.gridWrapperRef && n.gridRef) n.gridWrapperRef.scrollTop, n.gridWrapperRef.offsetHeight, n.gridRef.offsetHeight, n.state.isLoading
            }), 100)), _defineProperty(_assertThisInitialized(n), "fetchGifs", (function (e) {
                e && e.preventDefault();
                var t = n.props, r = t.type, i = t.query, o = t.apiClient, a = t.limit, s = void 0 === a ? 10 : a,
                    l = n.state, c = l.count, f = void 0 === c ? 0 : c, u = l.gifs, p = void 0 === u ? [] : u,
                    d = l.isLoading, y = l.version, h = "".concat(r, ":").concat(i || ""), g = h === y;
                if (!(d || g && f <= p.length && p.length)) {
                    var _ = {type: r, limit: s, offset: g && p.length || 0, rating: "g"},
                        m = i && o.search(i, _objectSpread2(_objectSpread2({}, _), {}, {sort: "relevant"})) || o.trending(_),
                        v = g ? p : [];
                    n.setState(_objectSpread2(_objectSpread2({}, g ? {} : {gifs: [], count: null}), {}, {
                        isLoading: !0,
                        isError: !1
                    })), !g && n.gridWrapperRef && n.gridWrapperRef.scrollTo(0, 0), m.then((function (e) {
                        n.setState({
                            gifs: [].concat(_toConsumableArray(v), _toConsumableArray(e.data || [])),
                            count: e.pagination && e.pagination.total_count || 0,
                            isLoading: !1,
                            isError: !1,
                            version: h
                        })
                    })).catch((function (e) {
                        n.setState({isLoading: !1, isError: !0})
                    }))
                }
            })), _defineProperty(_assertThisInitialized(n), "delayedFetchGifs", _.debounce(n.fetchGifs, 20)), _defineProperty(_assertThisInitialized(n), "addGif", (function (e, t) {
                t.preventDefault();
                var r = n.props.onGifClick;
                r && r(e)
            })), _defineProperty(_assertThisInitialized(n), "parseColumns", (function () {
                var e = n.props, t = e.gridColumns, r = void 0 === t ? 2 : t, i = e.gridGutter, o = void 0 === i ? 4 : i,
                    a = n.state, s = a.gifs, l = a.gridWidth, c = o * (r - 1), f = Math.floor((l - c) / r), u = [], p = [];
                _.range(0, r).forEach((function (e) {
                    u[e] = [], p[e] = 0
                }));
                var d, y = _createForOfIteratorHelper(s.filter((function (e) {
                    return e.images && e.images.original
                })));
                try {
                    for (y.s(); !(d = y.n()).done;) {
                        var h = d.value, g = h.images.original, m = g.url, v = g.width, b = g.height;
                        if (m && parseInt(v) && parseInt(b)) {
                            var R = Math.floor(f * parseInt(b) / parseInt(v)), P = Math.min.apply(Math, p),
                                S = p.indexOf(P);
                            u[S].push(h), p[S] = P + R
                        }
                    }
                } catch (e) {
                    y.e(e)
                } finally {
                    y.f()
                }
                return {gutterOffset: c, gifWrapperWidth: f, columns: u}
            })), n.state = {version: null, gifs: [], count: 0, isLoading: !1, isError: !1, hasPacked: !1, gridWidth: 0}, n
        }

        return _createClass(r, [{
            key: "componentDidMount", value: function () {
                this.gridWrapperRef && this.gridWrapperRef.addEventListener("scroll", this.onGridScroll), this.gridRef && this.gridRef.offsetWidth && this.setState({gridWidth: this.gridRef.offsetWidth}), this.fetchGifs()
            }
        }, {
            key: "componentDidUpdate", value: function (e, t, r) {
                var n = this.state, i = (n.gifs, n.gridWidth), o = this.props.type !== e.type,
                    a = this.props.query !== e.query;
                (o || a) && (a ? this.delayedFetchGifs() : this.fetchGifs());
                var s = this.gridRef && this.gridRef.offsetWidth || 0;
                s && s !== i && this.setState({gridWidth: s})
            }
        }, {
            key: "componentWillUnmount", value: function () {
                this.gridWrapperRef && this.gridWrapperRef.removeEventListener("scroll", this.onGridScroll)
            }
        }, {
            key: "render", value: function () {
                var e = this, t = this.props, r = t.theme, n = void 0 === r ? {} : r, i = t.errorMessage,
                    o = void 0 === i ? "Error loading GIFs." : i, a = this.state, s = a.isLoading, l = a.isError,
                    c = a.gridWidth, f = [giphyBlue, giphyGreen, giphyPurple, giphyRed, giphyYellow],
                    u = this.parseColumns(), p = (u.gutterOffset, u.gifWrapperWidth), d = u.columns;
                return React__default.createElement("div", {
                    className: n.gridWrapper, ref: function (t) {
                        return e.gridWrapperRef = t
                    }
                }, s ? React__default.createElement("div", {className: n.gridLoader}, React__default.createElement("div", null), React__default.createElement("div", null), React__default.createElement("div", null), React__default.createElement("div", null), React__default.createElement("div", null)) : l ? React__default.createElement("div", {className: n.gridFetchError}, o, " ", React__default.createElement("a", {onClick: this.fetchGifs}, "Try again?")) : React__default.createElement("div", {
                    className: n.grid,
                    ref: function (t) {
                        return e.gridRef = t
                    }
                }, c && d.map((function (t) {
                    return React__default.createElement("div", {
                        className: n.gridColumn,
                        style: {width: p}
                    }, t.map((function (t) {
                        var r = t.images.original, i = r.url, o = r.width, a = r.height;
                        if (!i || !parseInt(o) || !parseInt(a)) return null;
                        var s = Math.floor(p * parseInt(a) / parseInt(o));
                        return React__default.createElement("div", {
                            className: n.gridImageWrapper,
                            style: {
                                width: p,
                                height: s,
                                backgroundColor: f[Math.floor(Math.random() * Math.floor(f.length))]
                            }
                        }, React__default.createElement("img", {
                            src: i, className: n.gridImage, onClick: function (r) {
                                return e.addGif(t, r)
                            }, onLoad: function (e) {
                                var t = e.target && e.target.parentElement || null;
                                t && t.classList.add("image-loaded")
                            }
                        }))
                    })))
                })) || null))
            }
        }]), r
    }(), TYPE_GIFS = "gifs", TYPE_STICKERS = "stickers", TYPE_TEXT = "text", GiphySelect = function (e) {
        _inherits(r, React.Component);
        var t = _createSuper(r);

        function r(e) {
            var n;
            return _classCallCheck(this, r), _defineProperty(_assertThisInitialized(n = t.call(this, e)), "selectorRef", null), _defineProperty(_assertThisInitialized(n), "popoverRef", null), _defineProperty(_assertThisInitialized(n), "evaluatePosition", (function () {
                if (n.selectorRef) {
                    var e = n.selectorRef.getBoundingClientRect(), t = e.top, r = window.innerHeight - e.bottom, i = e.left,
                        o = window.innerWidth - e.right;
                    n.setState({openUp: t > r, openRight: o > i})
                }
            })), _defineProperty(_assertThisInitialized(n), "togglePopover", (function () {
                n.setState({open: !n.state.open})
            })), _defineProperty(_assertThisInitialized(n), "closePopover", (function () {
                n.state.open && n.setState({open: !1})
            })), _defineProperty(_assertThisInitialized(n), "onOutsideClick", (function (e) {
                n.popoverRef && !n.popoverRef.contains(e.target) && n.selectorRef && !n.selectorRef.contains(e.target) && n.closePopover()
            })), _defineProperty(_assertThisInitialized(n), "changeQuery", (function (e) {
                e.preventDefault(), n.setState({query: e.target.value || ""})
            })), _defineProperty(_assertThisInitialized(n), "changeFilter", (function (e, t) {
                t.preventDefault(), n.setState({type: e})
            })), _defineProperty(_assertThisInitialized(n), "addGif", (function (e) {
                var t = n.props, r = t.editorState, i = t.onChange, o = e.id, a = e.url, s = e.slug, l = e.type,
                    c = e.embed_url, f = e.title, u = e.images && e.images.original || null,
                    p = e.user && _.pick(e.user, ["username", "display_name", "avatar_url", "profile_url"]) || null;
                i(addGiphy(r, {
                    id: o,
                    gifUrl: u && u.url || "",
                    type: l,
                    url: a,
                    slug: s,
                    title: f,
                    embedUrl: c,
                    media: u,
                    user: p
                })), n.closePopover()
            })), n.state = {open: !1, type: TYPE_GIFS, query: "", openUp: !1, openRight: !1}, n
        }

        return _createClass(r, [{
            key: "componentDidMount", value: function () {
                document.addEventListener("click", this.onOutsideClick), this.evaluatePosition()
            }
        }, {
            key: "componentDidUpdate", value: function (e, t, r) {
                var n = this.state.open, i = n !== t.open;
                n && i && this.evaluatePosition()
            }
        }, {
            key: "componentWillUnmount", value: function () {
                document.removeEventListener("click", this.onOutsideClick)
            }
        }, {
            key: "render", value: function () {
                var e = this, t = this.props.theme, r = void 0 === t ? {} : t, n = this.state, i = n.type, o = n.query,
                    a = n.open, s = n.openUp, l = n.openRight,
                    c = a ? "".concat(r.selectPopover).concat(s ? " ".concat(r.selectPopoverUp) : "").concat(l ? " ".concat(r.selectPopoverRight) : "") : r.selectClosedPopover,
                    f = a ? r.selectPressedButton : r.selectButton;
                return React__default.createElement("div", {className: r.select}, React__default.createElement("button", {
                    className: f,
                    onMouseUp: this.togglePopover,
                    type: "button",
                    ref: function (t) {
                        return e.selectorRef = t
                    }
                }, this.props.selectButtonContent), React__default.createElement("div", {
                    className: c, ref: function (t) {
                        return e.popoverRef = t
                    }
                }, React__default.createElement("div", {className: r.searchWrapper}, React__default.createElement("input", {
                    className: r.searchInput,
                    type: "search",
                    placeholder: "Search GIPHY",
                    value: o,
                    onChange: this.changeQuery
                })), React__default.createElement("div", {className: r.filterButtonWrapper}, [[TYPE_GIFS, "GIFs"], [TYPE_STICKERS, "Stickers"], [TYPE_TEXT, "Text"]].map((function (t) {
                    var n = _slicedToArray(t, 2), o = n[0], a = n[1];
                    return React__default.createElement("button", {
                        className: i === o ? r.filterPressedButton : r.filterButton,
                        onClick: function (t) {
                            e.changeFilter(o, t)
                        }
                    }, a)
                }))), a && React__default.createElement(GiphyGrid, _extends({}, this.props, {
                    type: i,
                    query: o,
                    onGifClick: function (t) {
                        e.addGif(t)
                    }
                }))))
            }
        }]), r
    }(), index = function () {
        var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {}, t = e.theme ? e.theme : defaultTheme,
            r = e.selectButtonContent ? e.selectButtonContent : "☺",
            n = "boolean" != typeof e.hideAttribution || e.hideAttribution, i = e.gridColumns || 2, o = e.gridGutter || 4,
            a = e.limit || 10, s = e.errorMessage || "Error loading GIFs.", l = new jsFetchApi.GiphyFetch(e.apiKey),
            c = function (e) {
                return React__default.createElement(Giphy, _extends({}, e, {theme: t}))
            }, f = function (e) {
                return React__default.createElement(GiphySelect, _extends({}, e, {
                    apiClient: l,
                    selectButtonContent: r,
                    gridColumns: i,
                    gridGutter: o,
                    theme: t,
                    hideAttribution: n,
                    limit: a,
                    errorMessage: s
                }))
            }, u = _objectSpread2(_objectSpread2({}, e), {}, {Giphy: c});
        return {
            blockRendererFn: blockRendererFn(u),
            onChange: cleanupEmptyGiphy,
            add: addGiphy,
            remove: removeGiphy,
            blockRenderMap: immutable.Map({giphy: {element: "div"}}),
            GiphySelect: f
        }
    };
exports.default = index;
//# sourceMappingURL=/sm/915f20a2a036c83802d9f944468b14e19f9555d76fd6e0a083559633dcd95b7d.map
