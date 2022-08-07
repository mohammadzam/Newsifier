'use strict';

Object.defineProperty(exports, '__esModule', { value: true });

function _interopDefault (ex) { return (ex && (typeof ex === 'object') && 'default' in ex) ? ex['default'] : ex; }

var React = require('react');
var React__default = _interopDefault(React);
var immutable = require('immutable');
var jsFetchApi = require('@giphy/js-fetch-api');
var draftJs = require('draft-js');
var _ = _interopDefault(require('lodash'));

function _classCallCheck(instance, Constructor) {
    if (!(instance instanceof Constructor)) {
        throw new TypeError("Cannot call a class as a function");
    }
}

function _defineProperties(target, props) {
    for (var i = 0; i < props.length; i++) {
        var descriptor = props[i];
        descriptor.enumerable = descriptor.enumerable || false;
        descriptor.configurable = true;
        if ("value" in descriptor) descriptor.writable = true;
        Object.defineProperty(target, descriptor.key, descriptor);
    }
}

function _createClass(Constructor, protoProps, staticProps) {
    if (protoProps) _defineProperties(Constructor.prototype, protoProps);
    if (staticProps) _defineProperties(Constructor, staticProps);
    return Constructor;
}

function _defineProperty(obj, key, value) {
    if (key in obj) {
        Object.defineProperty(obj, key, {
            value: value,
            enumerable: true,
            configurable: true,
            writable: true
        });
    } else {
        obj[key] = value;
    }

    return obj;
}

function _extends() {
    _extends = Object.assign || function (target) {
        for (var i = 1; i < arguments.length; i++) {
            var source = arguments[i];

            for (var key in source) {
                if (Object.prototype.hasOwnProperty.call(source, key)) {
                    target[key] = source[key];
                }
            }
        }

        return target;
    };

    return _extends.apply(this, arguments);
}

function ownKeys(object, enumerableOnly) {
    var keys = Object.keys(object);

    if (Object.getOwnPropertySymbols) {
        var symbols = Object.getOwnPropertySymbols(object);
        if (enumerableOnly) symbols = symbols.filter(function (sym) {
            return Object.getOwnPropertyDescriptor(object, sym).enumerable;
        });
        keys.push.apply(keys, symbols);
    }

    return keys;
}

function _objectSpread2(target) {
    for (var i = 1; i < arguments.length; i++) {
        var source = arguments[i] != null ? arguments[i] : {};

        if (i % 2) {
            ownKeys(Object(source), true).forEach(function (key) {
                _defineProperty(target, key, source[key]);
            });
        } else if (Object.getOwnPropertyDescriptors) {
            Object.defineProperties(target, Object.getOwnPropertyDescriptors(source));
        } else {
            ownKeys(Object(source)).forEach(function (key) {
                Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key));
            });
        }
    }

    return target;
}

function _inherits(subClass, superClass) {
    if (typeof superClass !== "function" && superClass !== null) {
        throw new TypeError("Super expression must either be null or a function");
    }

    subClass.prototype = Object.create(superClass && superClass.prototype, {
        constructor: {
            value: subClass,
            writable: true,
            configurable: true
        }
    });
    if (superClass) _setPrototypeOf(subClass, superClass);
}

function _getPrototypeOf(o) {
    _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) {
        return o.__proto__ || Object.getPrototypeOf(o);
    };
    return _getPrototypeOf(o);
}

function _setPrototypeOf(o, p) {
    _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) {
        o.__proto__ = p;
        return o;
    };

    return _setPrototypeOf(o, p);
}

function _isNativeReflectConstruct() {
    if (typeof Reflect === "undefined" || !Reflect.construct) return false;
    if (Reflect.construct.sham) return false;
    if (typeof Proxy === "function") return true;

    try {
        Date.prototype.toString.call(Reflect.construct(Date, [], function () {}));
        return true;
    } catch (e) {
        return false;
    }
}

function _objectWithoutPropertiesLoose(source, excluded) {
    if (source == null) return {};
    var target = {};
    var sourceKeys = Object.keys(source);
    var key, i;

    for (i = 0; i < sourceKeys.length; i++) {
        key = sourceKeys[i];
        if (excluded.indexOf(key) >= 0) continue;
        target[key] = source[key];
    }

    return target;
}

function _objectWithoutProperties(source, excluded) {
    if (source == null) return {};

    var target = _objectWithoutPropertiesLoose(source, excluded);

    var key, i;

    if (Object.getOwnPropertySymbols) {
        var sourceSymbolKeys = Object.getOwnPropertySymbols(source);

        for (i = 0; i < sourceSymbolKeys.length; i++) {
            key = sourceSymbolKeys[i];
            if (excluded.indexOf(key) >= 0) continue;
            if (!Object.prototype.propertyIsEnumerable.call(source, key)) continue;
            target[key] = source[key];
        }
    }

    return target;
}

function _assertThisInitialized(self) {
    if (self === void 0) {
        throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
    }

    return self;
}

function _possibleConstructorReturn(self, call) {
    if (call && (typeof call === "object" || typeof call === "function")) {
        return call;
    }

    return _assertThisInitialized(self);
}

function _createSuper(Derived) {
    var hasNativeReflectConstruct = _isNativeReflectConstruct();

    return function () {
        var Super = _getPrototypeOf(Derived),
            result;

        if (hasNativeReflectConstruct) {
            var NewTarget = _getPrototypeOf(this).constructor;

            result = Reflect.construct(Super, arguments, NewTarget);
        } else {
            result = Super.apply(this, arguments);
        }

        return _possibleConstructorReturn(this, result);
    };
}

function _slicedToArray(arr, i) {
    return _arrayWithHoles(arr) || _iterableToArrayLimit(arr, i) || _unsupportedIterableToArray(arr, i) || _nonIterableRest();
}

function _toConsumableArray(arr) {
    return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread();
}

function _arrayWithoutHoles(arr) {
    if (Array.isArray(arr)) return _arrayLikeToArray(arr);
}

function _arrayWithHoles(arr) {
    if (Array.isArray(arr)) return arr;
}

function _iterableToArray(iter) {
    if (typeof Symbol !== "undefined" && Symbol.iterator in Object(iter)) return Array.from(iter);
}

function _iterableToArrayLimit(arr, i) {
    if (typeof Symbol === "undefined" || !(Symbol.iterator in Object(arr))) return;
    var _arr = [];
    var _n = true;
    var _d = false;
    var _e = undefined;

    try {
        for (var _i = arr[Symbol.iterator](), _s; !(_n = (_s = _i.next()).done); _n = true) {
            _arr.push(_s.value);

            if (i && _arr.length === i) break;
        }
    } catch (err) {
        _d = true;
        _e = err;
    } finally {
        try {
            if (!_n && _i["return"] != null) _i["return"]();
        } finally {
            if (_d) throw _e;
        }
    }

    return _arr;
}

function _unsupportedIterableToArray(o, minLen) {
    if (!o) return;
    if (typeof o === "string") return _arrayLikeToArray(o, minLen);
    var n = Object.prototype.toString.call(o).slice(8, -1);
    if (n === "Object" && o.constructor) n = o.constructor.name;
    if (n === "Map" || n === "Set") return Array.from(o);
    if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen);
}

function _arrayLikeToArray(arr, len) {
    if (len == null || len > arr.length) len = arr.length;

    for (var i = 0, arr2 = new Array(len); i < len; i++) arr2[i] = arr[i];

    return arr2;
}

function _nonIterableSpread() {
    throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.");
}

function _nonIterableRest() {
    throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.");
}

function _createForOfIteratorHelper(o) {
    if (typeof Symbol === "undefined" || o[Symbol.iterator] == null) {
        if (Array.isArray(o) || (o = _unsupportedIterableToArray(o))) {
            var i = 0;

            var F = function () {};

            return {
                s: F,
                n: function () {
                    if (i >= o.length) return {
                        done: true
                    };
                    return {
                        done: false,
                        value: o[i++]
                    };
                },
                e: function (e) {
                    throw e;
                },
                f: F
            };
        }

        throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.");
    }

    var it,
        normalCompletion = true,
        didErr = false,
        err;
    return {
        s: function () {
            it = o[Symbol.iterator]();
        },
        n: function () {
            var step = it.next();
            normalCompletion = step.done;
            return step;
        },
        e: function (e) {
            didErr = true;
            err = e;
        },
        f: function () {
            try {
                if (!normalCompletion && it.return != null) it.return();
            } finally {
                if (didErr) throw err;
            }
        }
    };
}

var addGiphy = (function (editorState, _ref) {
    var giphyId = _ref.id,
        gifUrl = _ref.gifUrl,
        giphyUrl = _ref.url,
        giphyType = _ref.type,
        giphyData = _objectWithoutProperties(_ref, ["id", "gifUrl", "url", "type"]);

    var currentContentState = editorState.getCurrentContent();
    var currentSelectionState = editorState.getSelection(); // in case text is selected it is removed and then the giphy is appended

    var afterRemovalContentState = draftJs.Modifier.removeRange(currentContentState, currentSelectionState, 'backward'); // deciding on the postion to split the text

    var targetSelection = afterRemovalContentState.getSelectionAfter();
    var blockKeyForTarget = targetSelection.get('focusKey');
    var block = currentContentState.getBlockForKey(blockKeyForTarget);
    var insertionTargetSelection;
    var insertionTargetBlock; // In case there are no characters or entity or the selection is at the start it
    // is safe to insert the giphy in the current block.
    // Otherwise a new block is created (the giphy is always its own block)

    var isEmptyBlock = block.getLength() === 0 && block.getEntityAt(0) === null;
    var selectedFromStart = currentSelectionState.getStartOffset() === 0;

    if (isEmptyBlock || selectedFromStart) {
        insertionTargetSelection = targetSelection;
        insertionTargetBlock = afterRemovalContentState;
    } else {
        // the only way to insert a new seems to be by splitting an existing in to two
        insertionTargetBlock = draftJs.Modifier.splitBlock(afterRemovalContentState, targetSelection); // the position to insert our blocks

        insertionTargetSelection = insertionTargetBlock.getSelectionAfter();
    } // TODO not sure why we need it …


    var newContentStateAfterSplit = draftJs.Modifier.setBlockType(insertionTargetBlock, insertionTargetSelection, 'giphy'); // creating a new ContentBlock including the entity with data

    var contentStateWithEntity = newContentStateAfterSplit.createEntity('giphy', 'IMMUTABLE', _objectSpread2({
        id: giphyId,
        gifUrl: gifUrl,
        url: giphyUrl,
        type: giphyType
    }, giphyData));
    var entityKey = contentStateWithEntity.getLastCreatedEntityKey();
    var charDataOfGiphy = draftJs.CharacterMetadata.create({
        entity: entityKey
    });
    var fragmentArray = [new draftJs.ContentBlock({
        key: draftJs.genKey(),
        type: 'giphy',
        text: ' ',
        characterList: immutable.List(immutable.Repeat(charDataOfGiphy, 1)) // eslint-disable-line new-cap

    }), // new contentblock so we can continue writing right away after inserting the giphy
        new draftJs.ContentBlock({
            key: draftJs.genKey(),
            type: 'unstyled',
            text: '',
            characterList: immutable.List() // eslint-disable-line new-cap

        })]; // create fragment containing the two content blocks

    var fragment = draftJs.BlockMapBuilder.createFromArray(fragmentArray); // replace the contentblock we reserved for our insert

    var contentStateWithGiphy = draftJs.Modifier.replaceWithFragment(newContentStateAfterSplit, insertionTargetSelection, fragment); // update editor state with our new state including the giphy

    var newState = draftJs.EditorState.push(editorState, contentStateWithGiphy, 'insert-giphy');
    return draftJs.EditorState.forceSelection(newState, contentStateWithGiphy.getSelectionAfter());
});

/**
 * Removes a giphy from the editor state
 */
var removeGiphy = (function (editorState, blockKey) {
    var content = editorState.getCurrentContent();
    var newSelection = new draftJs.SelectionState({
        anchorKey: blockKey,
        anchorOffset: 0,
        focusKey: blockKey,
        focusOffset: 0
    });
    var afterKey = content.getKeyAfter(blockKey);
    var afterBlock = content.getBlockForKey(afterKey);
    var targetRange; // Only if the following block the last with no text then the whole block
    // should be removed. Otherwise the block should be reduced to an unstyled block
    // without any characters.

    if (afterBlock && afterBlock.getType() === 'unstyled' && afterBlock.getLength() === 0 && afterBlock === content.getBlockMap().last()) {
        targetRange = new draftJs.SelectionState({
            anchorKey: blockKey,
            anchorOffset: 0,
            focusKey: afterKey,
            focusOffset: 0
        });
    } else {
        targetRange = new draftJs.SelectionState({
            anchorKey: blockKey,
            anchorOffset: 0,
            focusKey: blockKey,
            focusOffset: 1
        });
    } // change the blocktype and remove the characterList entry with the giphy


    content = draftJs.Modifier.setBlockType(content, targetRange, 'unstyled');
    content = draftJs.Modifier.removeRange(content, targetRange, 'backward'); // force to new selection

    var newState = draftJs.EditorState.push(editorState, content, 'remove-giphy');
    return draftJs.EditorState.forceSelection(newState, newSelection);
});

/**
 * Adds backspace support to giphy
 */

var cleanupGiphy = function cleanupGiphy(editorState, blockKey) {
    var content = editorState.getCurrentContent(); // get range of the broken giphy block

    var targetRange = new draftJs.SelectionState({
        anchorKey: blockKey,
        anchorOffset: 0,
        focusKey: blockKey,
        focusOffset: 0
    }); // convert the giphy block to a unstyled block to make text editing work

    var withoutGiphy = draftJs.Modifier.setBlockType(content, targetRange, 'unstyled');
    var newState = draftJs.EditorState.push(editorState, withoutGiphy, 'remove-giphy');
    return draftJs.EditorState.forceSelection(newState, withoutGiphy.getSelectionAfter());
};

var cleanupEmptyGiphy = (function (editorState) {
    var newEditorState = editorState; // If there is an empty giphy block we remove it.
    // This can happen if a user hits the backspace button and removes the giphy.
    // In this case the block will still be of type giphy.

    editorState.getCurrentContent().get('blockMap').forEach(function (block) {
        if (block.get('type') === 'giphy' && block.getEntityAt(0) === null) {
            newEditorState = cleanupGiphy(editorState, block.get('key'));
        }
    });
    return newEditorState;
});

var blockRendererFn = (function (config) {
    return function (contentBlock, _ref) {
        var getEditorState = _ref.getEditorState,
            setEditorState = _ref.setEditorState;
        var type = contentBlock.getType();

        if (type === 'giphy') {
            return {
                component: config.Giphy,
                props: {
                    onRemove: function onRemove(blockKey) {
                        setEditorState(removeGiphy(getEditorState(), blockKey));
                    }
                }
            };
        }

        return undefined;
    };
});

var Giphy = /*#__PURE__*/function (_Component) {
    _inherits(Giphy, _Component);

    var _super = _createSuper(Giphy);

    function Giphy() {
        var _this;

        _classCallCheck(this, Giphy);

        for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
            args[_key] = arguments[_key];
        }

        _this = _super.call.apply(_super, [this].concat(args));

        _defineProperty(_assertThisInitialized(_this), "remove", function (event) {
            // Note: important to avoid a content edit change
            event.preventDefault();
            event.stopPropagation();

            _this.props.blockProps.onRemove(_this.props.block.getKey());
        });

        return _this;
    }

    _createClass(Giphy, [{
        key: "render",
        value: function render() {
            var _this$props = this.props,
                block = _this$props.block,
                _this$props$theme = _this$props.theme,
                theme = _this$props$theme === void 0 ? {} : _this$props$theme,
                contentState = _this$props.contentState;

            var _contentState$getEnti = contentState.getEntity(block.getEntityAt(0)).getData(),
                gifUrl = _contentState$getEnti.gifUrl;

            return /*#__PURE__*/React__default.createElement("figure", {
                contentEditable: false,
                "data-offset-key": "".concat(block.get('key'), "-0-0"),
                className: theme.giphy
            }, /*#__PURE__*/React__default.createElement("img", {
                src: gifUrl,
                className: theme.giphyImage,
                role: "presentation"
            }));
        }
    }]);

    return Giphy;
}(React.Component);

/* greys */
/* primary */

var giphyBlue = '#00ccff';
var giphyGreen = '#00ff99';
var giphyPurple = '#9933ff';
var giphyRed = '#ff6666';
var giphyYellow = '#fff35c';
var defaultTheme = {
    // giphy styles
    giphy: "g1tbkpvz",
    giphyImage: "glv743z",
    // select styles
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
};

/**
 * Giphy Grid Component
 */

var GiphyGrid = /*#__PURE__*/function (_Component) {
    _inherits(GiphyGrid, _Component);

    var _super = _createSuper(GiphyGrid);

    function GiphyGrid(props) {
        var _this;

        _classCallCheck(this, GiphyGrid);

        _this = _super.call(this, props);

        _defineProperty(_assertThisInitialized(_this), "gridWrapperRef", null);

        _defineProperty(_assertThisInitialized(_this), "gridRef", null);

        _defineProperty(_assertThisInitialized(_this), "onGridScroll", _.debounce(function (e) {
            if (_this.gridWrapperRef && _this.gridRef) {
                var scrollTop = _this.gridWrapperRef.scrollTop || 0,
                    viewPortHeight = _this.gridWrapperRef.offsetHeight || 0,
                    contentHeight = _this.gridRef.offsetHeight || 0;
                var isLoading = _this.state.isLoading;
            }
        }, 100));

        _defineProperty(_assertThisInitialized(_this), "fetchGifs", function (e) {
            if (e) {
                e.preventDefault();
            }

            var _this$props = _this.props,
                type = _this$props.type,
                query = _this$props.query,
                apiClient = _this$props.apiClient,
                _this$props$limit = _this$props.limit,
                limit = _this$props$limit === void 0 ? 10 : _this$props$limit,
                _this$state = _this.state,
                _this$state$count = _this$state.count,
                count = _this$state$count === void 0 ? 0 : _this$state$count,
                _this$state$gifs = _this$state.gifs,
                gifs = _this$state$gifs === void 0 ? [] : _this$state$gifs,
                isLoading = _this$state.isLoading,
                prevVersion = _this$state.version,
                version = "".concat(type, ":").concat(query || ''),
                isLoadMore = version === prevVersion;

            if (isLoading || isLoadMore && count <= gifs.length && gifs.length) {
                return; // Either already loading or we've reached the end of the list
            }

            var offset = isLoadMore && gifs.length || 0,
                filters = {
                    type: type,
                    limit: limit,
                    offset: offset,
                    rating: 'g'
                };
            var apiMethod = query && apiClient.search(query, _objectSpread2(_objectSpread2({}, filters), {}, {
                sort: 'relevant'
            })) || apiClient.trending(filters);
            var existingGifs = isLoadMore ? gifs : [];

            _this.setState(_objectSpread2(_objectSpread2({}, isLoadMore ? {} : {
                gifs: [],
                count: null
            }), {}, {
                isLoading: true,
                isError: false
            }));

            if (!isLoadMore && _this.gridWrapperRef) {
                _this.gridWrapperRef.scrollTo(0, 0);
            }

            apiMethod.then(function (res) {
                _this.setState({
                    gifs: [].concat(_toConsumableArray(existingGifs), _toConsumableArray(res.data || [])),
                    count: res.pagination && res.pagination.total_count || 0,
                    isLoading: false,
                    isError: false,
                    version: version
                });
            })["catch"](function (e) {
                _this.setState({
                    isLoading: false,
                    isError: true
                });
            });
        });

        _defineProperty(_assertThisInitialized(_this), "delayedFetchGifs", _.debounce(_this.fetchGifs, 20));

        _defineProperty(_assertThisInitialized(_this), "addGif", function (gif, e) {
            e.preventDefault();
            var onGifClick = _this.props.onGifClick;

            if (onGifClick) {
                onGifClick(gif);
            }
        });

        _defineProperty(_assertThisInitialized(_this), "parseColumns", function () {
            var _this$props2 = _this.props,
                _this$props2$gridColu = _this$props2.gridColumns,
                gridColumns = _this$props2$gridColu === void 0 ? 2 : _this$props2$gridColu,
                _this$props2$gridGutt = _this$props2.gridGutter,
                gridGutter = _this$props2$gridGutt === void 0 ? 4 : _this$props2$gridGutt,
                _this$state2 = _this.state,
                gifs = _this$state2.gifs,
                gridWidth = _this$state2.gridWidth;
            var gutterOffset = gridGutter * (gridColumns - 1);
            var gifWrapperWidth = Math.floor((gridWidth - gutterOffset) / gridColumns);
            var columns = [],
                columnsTracker = [];

            _.range(0, gridColumns).forEach(function (idx) {
                columns[idx] = [];
                columnsTracker[idx] = 0;
            });

            var _iterator = _createForOfIteratorHelper(gifs.filter(function (gif) {
                    return gif.images && gif.images.original;
                })),
                _step;

            try {
                for (_iterator.s(); !(_step = _iterator.n()).done;) {
                    var gif = _step.value;
                    var _gif$images$original = gif.images.original,
                        url = _gif$images$original.url,
                        width = _gif$images$original.width,
                        height = _gif$images$original.height;

                    if (!url || !parseInt(width) || !parseInt(height)) {
                        continue;
                    }

                    var gifWrapperHeight = Math.floor(gifWrapperWidth * parseInt(height) / parseInt(width));
                    var minVal = Math.min.apply(Math, columnsTracker);
                    var minValIdx = columnsTracker.indexOf(minVal);
                    columns[minValIdx].push(gif);
                    columnsTracker[minValIdx] = minVal + gifWrapperHeight;
                }
            } catch (err) {
                _iterator.e(err);
            } finally {
                _iterator.f();
            }

            return {
                gutterOffset: gutterOffset,
                gifWrapperWidth: gifWrapperWidth,
                columns: columns
            };
        });

        _this.state = {
            version: null,
            gifs: [],
            count: 0,
            isLoading: false,
            isError: false,
            hasPacked: false,
            gridWidth: 0
        };
        return _this;
    }

    _createClass(GiphyGrid, [{
        key: "componentDidMount",
        value: function componentDidMount() {
            if (this.gridWrapperRef) {
                this.gridWrapperRef.addEventListener('scroll', this.onGridScroll);
            }

            if (this.gridRef && this.gridRef.offsetWidth) {
                this.setState({
                    gridWidth: this.gridRef.offsetWidth
                });
            }

            this.fetchGifs();
        }
    }, {
        key: "componentDidUpdate",
        value: function componentDidUpdate(prevProps, prevState, snapshot) {
            var _this$state3 = this.state,
                gifs = _this$state3.gifs,
                gridWidth = _this$state3.gridWidth,
                hasFiltered = this.props.type !== prevProps.type,
                hasSearched = this.props.query !== prevProps.query;

            if (hasFiltered || hasSearched) {
                if (hasSearched) {
                    this.delayedFetchGifs(); // Debounced
                } else {
                    this.fetchGifs(); // Immediate
                }
            }

            var actualGridWidth = this.gridRef && this.gridRef.offsetWidth || 0;

            if (actualGridWidth && actualGridWidth !== gridWidth) {
                this.setState({
                    gridWidth: actualGridWidth
                });
            }
        }
    }, {
        key: "componentWillUnmount",
        value: function componentWillUnmount() {
            if (this.gridWrapperRef) {
                this.gridWrapperRef.removeEventListener('scroll', this.onGridScroll);
            }
        }
    }, {
        key: "render",
        value: function render() {
            var _this2 = this;

            var _this$props3 = this.props,
                _this$props3$theme = _this$props3.theme,
                theme = _this$props3$theme === void 0 ? {} : _this$props3$theme,
                _this$props3$errorMes = _this$props3.errorMessage,
                errorMessage = _this$props3$errorMes === void 0 ? 'Error loading GIFs.' : _this$props3$errorMes,
                _this$state4 = this.state,
                isLoading = _this$state4.isLoading,
                isError = _this$state4.isError,
                gridWidth = _this$state4.gridWidth;
            var colors = [giphyBlue, giphyGreen, giphyPurple, giphyRed, giphyYellow];

            var getRandomColor = function getRandomColor() {
                return colors[Math.floor(Math.random() * Math.floor(colors.length))];
            };

            var _this$parseColumns = this.parseColumns(),
                gutterOffset = _this$parseColumns.gutterOffset,
                gifWrapperWidth = _this$parseColumns.gifWrapperWidth,
                columns = _this$parseColumns.columns;

            return /*#__PURE__*/React__default.createElement("div", {
                className: theme.gridWrapper,
                ref: function ref(node) {
                    return _this2.gridWrapperRef = node;
                }
            }, isLoading ? /*#__PURE__*/React__default.createElement("div", {
                className: theme.gridLoader
            }, /*#__PURE__*/React__default.createElement("div", null), /*#__PURE__*/React__default.createElement("div", null), /*#__PURE__*/React__default.createElement("div", null), /*#__PURE__*/React__default.createElement("div", null), /*#__PURE__*/React__default.createElement("div", null)) : isError ? /*#__PURE__*/React__default.createElement("div", {
                className: theme.gridFetchError
            }, errorMessage, " ", /*#__PURE__*/React__default.createElement("a", {
                onClick: this.fetchGifs
            }, "Try again?")) : /*#__PURE__*/React__default.createElement("div", {
                className: theme.grid,
                ref: function ref(node) {
                    return _this2.gridRef = node;
                }
            }, gridWidth && columns.map(function (column) {
                return /*#__PURE__*/React__default.createElement("div", {
                    className: theme.gridColumn,
                    style: {
                        width: gifWrapperWidth
                    }
                }, column.map(function (gif) {
                    var _gif$images$original2 = gif.images.original,
                        url = _gif$images$original2.url,
                        width = _gif$images$original2.width,
                        height = _gif$images$original2.height;
                    if (!url || !parseInt(width) || !parseInt(height)) return null;
                    var gifWrapperHeight = Math.floor(gifWrapperWidth * parseInt(height) / parseInt(width));
                    return /*#__PURE__*/React__default.createElement("div", {
                        className: theme.gridImageWrapper,
                        style: {
                            width: gifWrapperWidth,
                            height: gifWrapperHeight,
                            backgroundColor: getRandomColor()
                        }
                    }, /*#__PURE__*/React__default.createElement("img", {
                        src: url,
                        className: theme.gridImage,
                        onClick: function onClick(e) {
                            return _this2.addGif(gif, e);
                        },
                        onLoad: function onLoad(e) {
                            var parent = e.target && e.target.parentElement || null;

                            if (parent) {
                                parent.classList.add('image-loaded');
                            }
                        }
                    }));
                }));
            }) || null));
        }
    }]);

    return GiphyGrid;
}(React.Component);

var TYPE_GIFS = 'gifs',
    TYPE_STICKERS = 'stickers',
    TYPE_TEXT = 'text';
/**
 * Giphy Selector Component
 */

var GiphySelect = /*#__PURE__*/function (_Component) {
    _inherits(GiphySelect, _Component);

    var _super = _createSuper(GiphySelect);

    function GiphySelect(props) {
        var _this;

        _classCallCheck(this, GiphySelect);

        _this = _super.call(this, props);

        _defineProperty(_assertThisInitialized(_this), "selectorRef", null);

        _defineProperty(_assertThisInitialized(_this), "popoverRef", null);

        _defineProperty(_assertThisInitialized(_this), "evaluatePosition", function () {
            if (_this.selectorRef) {
                var viewportOffset = _this.selectorRef.getBoundingClientRect();

                var topOffset = viewportOffset.top,
                    bottomOffset = window.innerHeight - viewportOffset.bottom,
                    leftOffset = viewportOffset.left,
                    rightOffset = window.innerWidth - viewportOffset.right;

                _this.setState({
                    openUp: topOffset > bottomOffset,
                    openRight: rightOffset > leftOffset
                });
            }
        });

        _defineProperty(_assertThisInitialized(_this), "togglePopover", function () {
            _this.setState({
                open: !_this.state.open
            });
        });

        _defineProperty(_assertThisInitialized(_this), "closePopover", function () {
            if (_this.state.open) {
                _this.setState({
                    open: false
                });
            }
        });

        _defineProperty(_assertThisInitialized(_this), "onOutsideClick", function (e) {
            if (_this.popoverRef && !_this.popoverRef.contains(e.target) && _this.selectorRef && !_this.selectorRef.contains(e.target)) {
                // Ignore clicks inside popover or on selector
                _this.closePopover();
            }
        });

        _defineProperty(_assertThisInitialized(_this), "changeQuery", function (e) {
            e.preventDefault();

            _this.setState({
                query: e.target.value || ''
            });
        });

        _defineProperty(_assertThisInitialized(_this), "changeFilter", function (type, e) {
            e.preventDefault();

            _this.setState({
                type: type
            });
        });

        _defineProperty(_assertThisInitialized(_this), "addGif", function (gif) {
            var _this$props = _this.props,
                editorState = _this$props.editorState,
                onChange = _this$props.onChange,
                id = gif.id,
                url = gif.url,
                slug = gif.slug,
                type = gif.type,
                embed_url = gif.embed_url,
                title = gif.title;
            var media = gif.images && gif.images.original || null,
                user = gif.user && _.pick(gif.user, ['username', 'display_name', 'avatar_url', 'profile_url']) || null;
            onChange(addGiphy(editorState, {
                id: id,
                gifUrl: media && media.url || '',
                type: type,
                url: url,
                slug: slug,
                title: title,
                embedUrl: embed_url,
                media: media,
                user: user
            }));

            _this.closePopover();
        });

        _this.state = {
            open: false,
            type: TYPE_GIFS,
            query: '',
            openUp: false,
            openRight: false
        };
        return _this;
    } // When the selector is open and users click anywhere on the page,
    // the selector should close


    _createClass(GiphySelect, [{
        key: "componentDidMount",
        value: function componentDidMount() {
            document.addEventListener('click', this.onOutsideClick);
            this.evaluatePosition();
        }
    }, {
        key: "componentDidUpdate",
        value: function componentDidUpdate(prevProps, prevState, snapshot) {
            var open = this.state.open,
                hasOpenChanged = open !== prevState.open;

            if (open && hasOpenChanged) {
                this.evaluatePosition();
            }
        }
    }, {
        key: "componentWillUnmount",
        value: function componentWillUnmount() {
            document.removeEventListener('click', this.onOutsideClick);
        }
    }, {
        key: "render",
        value: function render() {
            var _this2 = this;

            var _this$props$theme = this.props.theme,
                theme = _this$props$theme === void 0 ? {} : _this$props$theme,
                _this$state = this.state,
                type = _this$state.type,
                query = _this$state.query,
                open = _this$state.open,
                openUp = _this$state.openUp,
                openRight = _this$state.openRight;
            var popoverClassName = open ? "".concat(theme.selectPopover).concat(openUp ? " ".concat(theme.selectPopoverUp) : '').concat(openRight ? " ".concat(theme.selectPopoverRight) : '') : theme.selectClosedPopover;
            var buttonClassName = open ? theme.selectPressedButton : theme.selectButton;
            return /*#__PURE__*/React__default.createElement("div", {
                className: theme.select
            }, /*#__PURE__*/React__default.createElement("button", {
                className: buttonClassName,
                onMouseUp: this.togglePopover,
                type: "button",
                ref: function ref(node) {
                    return _this2.selectorRef = node;
                }
            }, this.props.selectButtonContent), /*#__PURE__*/React__default.createElement("div", {
                className: popoverClassName,
                ref: function ref(node) {
                    return _this2.popoverRef = node;
                }
            }, /*#__PURE__*/React__default.createElement("div", {
                className: theme.searchWrapper
            }, /*#__PURE__*/React__default.createElement("input", {
                className: theme.searchInput,
                type: "search",
                placeholder: "Search GIPHY",
                value: query,
                onChange: this.changeQuery
            })), /*#__PURE__*/React__default.createElement("div", {
                className: theme.filterButtonWrapper
            }, [[TYPE_GIFS, 'GIFs'], [TYPE_STICKERS, 'Stickers'], [TYPE_TEXT, 'Text']].map(function (_ref) {
                var _ref2 = _slicedToArray(_ref, 2),
                    giphyType = _ref2[0],
                    label = _ref2[1];

                return /*#__PURE__*/React__default.createElement("button", {
                    className: type === giphyType ? theme.filterPressedButton : theme.filterButton,
                    onClick: function onClick(e) {
                        _this2.changeFilter(giphyType, e);
                    }
                }, label);
            })), open && /*#__PURE__*/React__default.createElement(GiphyGrid, _extends({}, this.props, {
                type: type,
                query: query,
                onGifClick: function onGifClick(gif) {
                    _this2.addGif(gif);
                }
            }))));
        }
    }]);

    return GiphySelect;
}(React.Component);

var index = (function () {
    var config = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};
    var theme = config.theme ? config.theme : defaultTheme;
    var selectButtonContent = config.selectButtonContent ? config.selectButtonContent : '☺';
    var hideAttribution = typeof config.hideAttribution === 'boolean' ? config.hideAttribution : true,
        gridColumns = config.gridColumns || 2,
        gridGutter = config.gridGutter || 4,
        limit = config.limit || 10,
        errorMessage = config.errorMessage || 'Error loading GIFs.';
    var gf = new jsFetchApi.GiphyFetch(config.apiKey);

    var DecoratedGiphy = function DecoratedGiphy(props) {
        return /*#__PURE__*/React__default.createElement(Giphy, _extends({}, props, {
            theme: theme
        }));
    };

    var DecoratedGiphySelect = function DecoratedGiphySelect(props) {
        return /*#__PURE__*/React__default.createElement(GiphySelect, _extends({}, props, {
            apiClient: gf,
            selectButtonContent: selectButtonContent,
            gridColumns: gridColumns,
            gridGutter: gridGutter,
            theme: theme,
            hideAttribution: hideAttribution,
            limit: limit,
            errorMessage: errorMessage
        }));
    };

    var blockRendererConfig = _objectSpread2(_objectSpread2({}, config), {}, {
        Giphy: DecoratedGiphy
    });

    return {
        blockRendererFn: blockRendererFn(blockRendererConfig),
        onChange: cleanupEmptyGiphy,
        add: addGiphy,
        remove: removeGiphy,
        blockRenderMap: immutable.Map({
            giphy: {
                element: 'div'
            }
        }),
        GiphySelect: DecoratedGiphySelect
    };
});

exports.default = index;
