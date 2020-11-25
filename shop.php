<!DOCTYPE html>
<html lang="en">

<?php
    include $_SERVER['DOCUMENT_ROOT']."/includes/head.php";
?>

<body>
    <div class="site-wrap">
        <?php
            include $_SERVER['DOCUMENT_ROOT']."/includes/header.php";
        ?>
        <div class="bg-light py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong
                            class="text-black">Shop</strong></div>
                </div>
            </div>
        </div>
        <div class="site-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-9 order-2">
                        <div class="row">
                            <div class="col-md-12 mb-5">
                                <div class="float-md-left mb-4">
                                    <h2 class="text-black h5">Shop All</h2>
                                </div>
                                <div class="d-flex">
                                    <div class="dropdown mr-1 ml-md-auto">
                                        <button type="button" class="btn btn-secondary btn-sm dropdown-toggle"
                                            id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Latest
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                            <a class="dropdown-item" href="#">Men</a>
                                            <a class="dropdown-item" href="#">Women</a>
                                            <a class="dropdown-item" href="#">Children</a>
                                        </div>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-secondary btn-sm dropdown-toggle"
                                            id="dropdownMenuReference" data-toggle="dropdown">Reference</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                                            <a class="dropdown-item" href="#">Relevance</a>
                                            <a class="dropdown-item" href="#">Name, A to Z</a>
                                            <a class="dropdown-item" href="#">Name, Z to A</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Price, low to high</a>
                                            <a class="dropdown-item" href="#">Price, high to low</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                                <div class="block-4 text-center border">
                                    <figure class="block-4-image">
                                        <a href="shop-single.html">
                                            <script data-pagespeed-no-defer>
                                                //<![CDATA[
                                                (function () {
                                                    for (var g = "function" == typeof Object.defineProperties ?
                                                            Object.defineProperty : function (b, c, a) {
                                                                if (a.get || a.set) throw new TypeError(
                                                                    "ES3 does not support getters and setters."
                                                                    );
                                                                b != Array.prototype && b != Object.prototype && (b[
                                                                    c] = a.value)
                                                            }, h = "undefined" != typeof window && window === this ?
                                                            this : "undefined" != typeof global && null != global ?
                                                            global : this, k = ["String", "prototype", "repeat"],
                                                            l = 0; l < k.length - 1; l++) {
                                                        var m = k[l];
                                                        m in h || (h[m] = {});
                                                        h = h[m]
                                                    }
                                                    var n = k[k.length - 1],
                                                        p = h[n],
                                                        q = p ? p : function (b) {
                                                            var c;
                                                            if (null == this) throw new TypeError(
                                                                "The 'this' value for String.prototype.repeat must not be null or undefined"
                                                                );
                                                            c = this + "";
                                                            if (0 > b || 1342177279 < b) throw new RangeError(
                                                                "Invalid count value");
                                                            b |= 0;
                                                            for (var a = ""; b;)
                                                                if (b & 1 && (a += c), b >>>= 1) c += c;
                                                            return a
                                                        };
                                                    q != p && null != q && g(h, n, {
                                                        configurable: !0,
                                                        writable: !0,
                                                        value: q
                                                    });
                                                    var t = this;

                                                    function u(b, c) {
                                                        var a = b.split("."),
                                                            d = t;
                                                        a[0] in d || !d.execScript || d.execScript("var " + a[0]);
                                                        for (var e; a.length && (e = a.shift());) a.length ||
                                                            void 0 === c ? d[e] ? d = d[e] : d = d[e] = {} : d[e] =
                                                            c
                                                    };

                                                    function v(b) {
                                                        var c = b.length;
                                                        if (0 < c) {
                                                            for (var a = Array(c), d = 0; d < c; d++) a[d] = b[d];
                                                            return a
                                                        }
                                                        return []
                                                    };

                                                    function w(b) {
                                                        var c = window;
                                                        if (c.addEventListener) c.addEventListener("load", b, !1);
                                                        else if (c.attachEvent) c.attachEvent("onload", b);
                                                        else {
                                                            var a = c.onload;
                                                            c.onload = function () {
                                                                b.call(this);
                                                                a && a.call(this)
                                                            }
                                                        }
                                                    };
                                                    var x;

                                                    function y(b, c, a, d, e) {
                                                        this.h = b;
                                                        this.j = c;
                                                        this.l = a;
                                                        this.f = e;
                                                        this.g = {
                                                            height: window.innerHeight || document
                                                                .documentElement.clientHeight || document.body
                                                                .clientHeight,
                                                            width: window.innerWidth || document.documentElement
                                                                .clientWidth || document.body.clientWidth
                                                        };
                                                        this.i = d;
                                                        this.b = {};
                                                        this.a = [];
                                                        this.c = {}
                                                    }

                                                    function z(b, c) {
                                                        var a, d, e = c.getAttribute("data-pagespeed-url-hash");
                                                        if (a = e && !(e in b.c))
                                                            if (0 >= c.offsetWidth && 0 >= c.offsetHeight) a = !1;
                                                            else {
                                                                d = c.getBoundingClientRect();
                                                                var f = document.body;
                                                                a = d.top + ("pageYOffset" in window ? window
                                                                    .pageYOffset : (document.documentElement ||
                                                                        f.parentNode || f).scrollTop);
                                                                d = d.left + ("pageXOffset" in window ? window
                                                                    .pageXOffset : (document.documentElement ||
                                                                        f.parentNode || f).scrollLeft);
                                                                f = a.toString() + "," + d;
                                                                b.b.hasOwnProperty(f) ? a = !1 : (b.b[f] = !0, a =
                                                                    a <= b.g.height && d <= b.g.width)
                                                            } a && (b.a.push(e), b.c[e] = !0)
                                                    }
                                                    y.prototype.checkImageForCriticality = function (b) {
                                                        b.getBoundingClientRect && z(this, b)
                                                    };
                                                    u("pagespeed.CriticalImages.checkImageForCriticality",
                                                        function (b) {
                                                            x.checkImageForCriticality(b)
                                                        });
                                                    u("pagespeed.CriticalImages.checkCriticalImages", function () {
                                                        A(x)
                                                    });

                                                    function A(b) {
                                                        b.b = {};
                                                        for (var c = ["IMG", "INPUT"], a = [], d = 0; d < c
                                                            .length; ++d) a = a.concat(v(document
                                                            .getElementsByTagName(c[d])));
                                                        if (a.length && a[0].getBoundingClientRect) {
                                                            for (d = 0; c = a[d]; ++d) z(b, c);
                                                            a = "oh=" + b.l;
                                                            b.f && (a += "&n=" + b.f);
                                                            if (c = !!b.a.length)
                                                                for (a += "&ci=" + encodeURIComponent(b.a[0]), d =
                                                                    1; d < b.a.length; ++d) {
                                                                    var e = "," + encodeURIComponent(b.a[d]);
                                                                    131072 >= a.length + e.length && (a += e)
                                                                }
                                                            b.i && (e = "&rd=" + encodeURIComponent(JSON.stringify(
                                                                B())), 131072 >= a.length + e.length && (
                                                                a += e), c = !0);
                                                            C = a;
                                                            if (c) {
                                                                d = b.h;
                                                                b = b.j;
                                                                var f;
                                                                if (window.XMLHttpRequest) f = new XMLHttpRequest;
                                                                else if (window.ActiveXObject) try {
                                                                    f = new ActiveXObject("Msxml2.XMLHTTP")
                                                                } catch (r) {
                                                                    try {
                                                                        f = new ActiveXObject(
                                                                            "Microsoft.XMLHTTP")
                                                                    } catch (D) {}
                                                                }
                                                                f && (f.open("POST", d + (-1 == d.indexOf("?") ?
                                                                            "?" : "&") + "url=" +
                                                                        encodeURIComponent(b)), f
                                                                    .setRequestHeader("Content-Type",
                                                                        "application/x-www-form-urlencoded"), f
                                                                    .send(a))
                                                            }
                                                        }
                                                    }

                                                    function B() {
                                                        var b = {},
                                                            c;
                                                        c = document.getElementsByTagName("IMG");
                                                        if (!c.length) return {};
                                                        var a = c[0];
                                                        if (!("naturalWidth" in a && "naturalHeight" in a))
                                                            return {};
                                                        for (var d = 0; a = c[d]; ++d) {
                                                            var e = a.getAttribute("data-pagespeed-url-hash");
                                                            e && (!(e in b) && 0 < a.width && 0 < a.height && 0 < a
                                                                    .naturalWidth && 0 < a.naturalHeight || e in
                                                                    b && a.width >= b[e].o && a.height >= b[e].m) &&
                                                                (b[e] = {
                                                                    rw: a.width,
                                                                    rh: a.height,
                                                                    ow: a.naturalWidth,
                                                                    oh: a.naturalHeight
                                                                })
                                                        }
                                                        return b
                                                    }
                                                    var C = "";
                                                    u("pagespeed.CriticalImages.getBeaconData", function () {
                                                        return C
                                                    });
                                                    u("pagespeed.CriticalImages.Run", function (b, c, a, d, e, f) {
                                                        var r = new y(b, c, a, e, f);
                                                        x = r;
                                                        d && w(function () {
                                                            window.setTimeout(function () {
                                                                A(r)
                                                            }, 0)
                                                        })
                                                    });
                                                })();
                                                pagespeed.CriticalImages.Run('/mod_pagespeed_beacon',
                                                    'https://preview.colorlib.com/theme/shoppers/shop.html',
                                                    'oJcOUTg7z9', true, false, 'TelgcNyVhnY');
                                                //]]>
                                            </script><img src="https://preview.colorlib.com/theme/shoppers/images/cloth_1.jpg" alt="Image placeholder"
                                                class="img-fluid" data-pagespeed-url-hash="1414887416"
                                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                        </a>
                                    </figure>
                                    <div class="block-4-text p-4">
                                        <h3><a href="shop-single.html">Tank Top</a></h3>
                                        <p class="mb-0">Finding perfect t-shirt</p>
                                        <p class="text-primary font-weight-bold">$50</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                                <div class="block-4 text-center border">
                                    <figure class="block-4-image">
                                        <a href="shop-single.html"><img src="https://preview.colorlib.com/theme/shoppers/images/shoe_1.jpg" alt="Image placeholder"
                                                class="img-fluid" data-pagespeed-url-hash="4056582155"
                                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                    </figure>
                                    <div class="block-4-text p-4">
                                        <h3><a href="shop-single.html">Corater</a></h3>
                                        <p class="mb-0">Finding perfect products</p>
                                        <p class="text-primary font-weight-bold">$50</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                                <div class="block-4 text-center border">
                                    <figure class="block-4-image">
                                        <a href="shop-single.html"><img src="https://preview.colorlib.com/theme/shoppers/images/cloth_2.jpg" alt="Image placeholder"
                                                class="img-fluid" data-pagespeed-url-hash="1709387337"
                                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                    </figure>
                                    <div class="block-4-text p-4">
                                        <h3><a href="shop-single.html">Polo Shirt</a></h3>
                                        <p class="mb-0">Finding perfect products</p>
                                        <p class="text-primary font-weight-bold">$50</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                                <div class="block-4 text-center border">
                                    <figure class="block-4-image">
                                        <a href="shop-single.html"><img src="https://preview.colorlib.com/theme/shoppers/images/cloth_3.jpg" alt="Image placeholder"
                                                class="img-fluid" data-pagespeed-url-hash="2003887258"
                                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                    </figure>
                                    <div class="block-4-text p-4">
                                        <h3><a href="shop-single.html">T-Shirt Mockup</a></h3>
                                        <p class="mb-0">Finding perfect products</p>
                                        <p class="text-primary font-weight-bold">$50</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                                <div class="block-4 text-center border">
                                    <figure class="block-4-image">
                                        <a href="shop-single.html"><img src="https://preview.colorlib.com/theme/shoppers/images/shoe_1.jpg" alt="Image placeholder"
                                                class="img-fluid" data-pagespeed-url-hash="4056582155"
                                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                    </figure>
                                    <div class="block-4-text p-4">
                                        <h3><a href="shop-single.html">Corater</a></h3>
                                        <p class="mb-0">Finding perfect products</p>
                                        <p class="text-primary font-weight-bold">$50</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                                <div class="block-4 text-center border">
                                    <figure class="block-4-image">
                                        <a href="shop-single.html"><img src="https://preview.colorlib.com/theme/shoppers/images/cloth_1.jpg" alt="Image placeholder"
                                                class="img-fluid" data-pagespeed-url-hash="1414887416"
                                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                    </figure>
                                    <div class="block-4-text p-4">
                                        <h3><a href="shop-single.html">Tank Top</a></h3>
                                        <p class="mb-0">Finding perfect t-shirt</p>
                                        <p class="text-primary font-weight-bold">$50</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                                <div class="block-4 text-center border">
                                    <figure class="block-4-image">
                                        <a href="shop-single.html"><img src="https://preview.colorlib.com/theme/shoppers/images/shoe_1.jpg" alt="Image placeholder"
                                                class="img-fluid" data-pagespeed-url-hash="4056582155"
                                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                    </figure>
                                    <div class="block-4-text p-4">
                                        <h3><a href="shop-single.html">Corater</a></h3>
                                        <p class="mb-0">Finding perfect products</p>
                                        <p class="text-primary font-weight-bold">$50</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                                <div class="block-4 text-center border">
                                    <figure class="block-4-image">
                                        <a href="shop-single.html"><img src="https://preview.colorlib.com/theme/shoppers/images/cloth_2.jpg" alt="Image placeholder"
                                                class="img-fluid" data-pagespeed-url-hash="1709387337"
                                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                    </figure>
                                    <div class="block-4-text p-4">
                                        <h3><a href="shop-single.html">Polo Shirt</a></h3>
                                        <p class="mb-0">Finding perfect products</p>
                                        <p class="text-primary font-weight-bold">$50</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                                <div class="block-4 text-center border">
                                    <figure class="block-4-image">
                                        <a href="shop-single.html"><img src="https://preview.colorlib.com/theme/shoppers/images/cloth_3.jpg" alt="Image placeholder"
                                                class="img-fluid" data-pagespeed-url-hash="2003887258"
                                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                    </figure>
                                    <div class="block-4-text p-4">
                                        <h3><a href="shop-single.html">T-Shirt Mockup</a></h3>
                                        <p class="mb-0">Finding perfect products</p>
                                        <p class="text-primary font-weight-bold">$50</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                                <div class="block-4 text-center border">
                                    <figure class="block-4-image">
                                        <a href="shop-single.html"><img src="https://preview.colorlib.com/theme/shoppers/images/shoe_1.jpg" alt="Image placeholder"
                                                class="img-fluid" data-pagespeed-url-hash="4056582155"
                                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                    </figure>
                                    <div class="block-4-text p-4">
                                        <h3><a href="shop-single.html">Corater</a></h3>
                                        <p class="mb-0">Finding perfect products</p>
                                        <p class="text-primary font-weight-bold">$50</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                                <div class="block-4 text-center border">
                                    <figure class="block-4-image">
                                        <a href="shop-single.html"><img src="https://preview.colorlib.com/theme/shoppers/images/cloth_1.jpg" alt="Image placeholder"
                                                class="img-fluid" data-pagespeed-url-hash="1414887416"
                                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                    </figure>
                                    <div class="block-4-text p-4">
                                        <h3><a href="shop-single.html">Tank Top</a></h3>
                                        <p class="mb-0">Finding perfect t-shirt</p>
                                        <p class="text-primary font-weight-bold">$50</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                                <div class="block-4 text-center border">
                                    <figure class="block-4-image">
                                        <a href="shop-single.html"><img src="https://preview.colorlib.com/theme/shoppers/images/cloth_2.jpg" alt="Image placeholder"
                                                class="img-fluid" data-pagespeed-url-hash="1709387337"
                                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                    </figure>
                                    <div class="block-4-text p-4">
                                        <h3><a href="shop-single.html">Polo Shirt</a></h3>
                                        <p class="mb-0">Finding perfect products</p>
                                        <p class="text-primary font-weight-bold">$50</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" data-aos="fade-up">
                            <div class="col-md-12 text-center">
                                <div class="site-block-27">
                                    <ul>
                                        <li><a href="#">&lt;</a></li>
                                        <li class="active"><span>1</span></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">&gt;</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 order-1 mb-5 mb-md-0">
                        <div class="border p-4 rounded mb-4">
                            <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-1"><a href="#" class="d-flex"><span>Men</span> <span
                                            class="text-black ml-auto">(2,220)</span></a></li>
                                <li class="mb-1"><a href="#" class="d-flex"><span>Women</span> <span
                                            class="text-black ml-auto">(2,550)</span></a></li>
                                <li class="mb-1"><a href="#" class="d-flex"><span>Children</span> <span
                                            class="text-black ml-auto">(2,124)</span></a></li>
                            </ul>
                        </div>
                        <div class="border p-4 rounded mb-4">
                            <div class="mb-4">
                                <h3 class="mb-3 h6 text-uppercase text-black d-block">Filter by Price</h3>
                                <div id="slider-range" class="border-primary"></div>
                                <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white"
                                    disabled />
                            </div>
                            <div class="mb-4">
                                <h3 class="mb-3 h6 text-uppercase text-black d-block">Size</h3>
                                <label for="s_sm" class="d-flex">
                                    <input type="checkbox" id="s_sm" class="mr-2 mt-1"> <span class="text-black">Small
                                        (2,319)</span>
                                </label>
                                <label for="s_md" class="d-flex">
                                    <input type="checkbox" id="s_md" class="mr-2 mt-1"> <span class="text-black">Medium
                                        (1,282)</span>
                                </label>
                                <label for="s_lg" class="d-flex">
                                    <input type="checkbox" id="s_lg" class="mr-2 mt-1"> <span class="text-black">Large
                                        (1,392)</span>
                                </label>
                            </div>
                            <div class="mb-4">
                                <h3 class="mb-3 h6 text-uppercase text-black d-block">Color</h3>
                                <a href="#" class="d-flex color-item align-items-center">
                                    <span class="bg-danger color d-inline-block rounded-circle mr-2"></span> <span
                                        class="text-black">Red (2,429)</span>
                                </a>
                                <a href="#" class="d-flex color-item align-items-center">
                                    <span class="bg-success color d-inline-block rounded-circle mr-2"></span> <span
                                        class="text-black">Green (2,298)</span>
                                </a>
                                <a href="#" class="d-flex color-item align-items-center">
                                    <span class="bg-info color d-inline-block rounded-circle mr-2"></span> <span
                                        class="text-black">Blue (1,075)</span>
                                </a>
                                <a href="#" class="d-flex color-item align-items-center">
                                    <span class="bg-primary color d-inline-block rounded-circle mr-2"></span> <span
                                        class="text-black">Purple (1,075)</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="site-section site-blocks-2">
                            <div class="row justify-content-center text-center mb-5">
                                <div class="col-md-7 site-section-heading pt-4">
                                    <h2>Categories</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
                                    <a class="block-2-item" href="#">
                                        <figure class="image">
                                            <img src="https://preview.colorlib.com/theme/shoppers/images/women.jpg" alt="" class="img-fluid"
                                                data-pagespeed-url-hash="2182569662"
                                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                        </figure>
                                        <div class="text">
                                            <span class="text-uppercase">Collections</span>
                                            <h3>Women</h3>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade"
                                    data-aos-delay="100">
                                    <a class="block-2-item" href="#">
                                        <figure class="image">
                                            <img src="https://preview.colorlib.com/theme/shoppers/images/children.jpg" alt="" class="img-fluid"
                                                data-pagespeed-url-hash="3401831149"
                                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                        </figure>
                                        <div class="text">
                                            <span class="text-uppercase">Collections</span>
                                            <h3>Children</h3>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade"
                                    data-aos-delay="200">
                                    <a class="block-2-item" href="#">
                                        <figure class="image">
                                            <img src="https://preview.colorlib.com/theme/shoppers/images/men.jpg" alt="" class="img-fluid"
                                                data-pagespeed-url-hash="2501571130"
                                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                        </figure>
                                        <div class="text">
                                            <span class="text-uppercase">Collections</span>
                                            <h3>Men</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include $_SERVER['DOCUMENT_ROOT']."/includes/footer.php";
        ?>
    </div>
        <?php
            include $_SERVER['DOCUMENT_ROOT']."/includes/script.php";
        ?>
</body>

</html>