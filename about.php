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
                            class="text-black">About</strong></div>
                </div>
            </div>
        </div>
        <div class="site-section border-bottom" data-aos="fade">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-6">
                        <div class="block-16">
                            <figure>
                                <script data-pagespeed-no-defer>
                                    //<![CDATA[
                                    (function () {
                                        for (var g = "function" == typeof Object.defineProperties ? Object
                                                .defineProperty : function (b, c, a) {
                                                    if (a.get || a.set) throw new TypeError(
                                                        "ES3 does not support getters and setters.");
                                                    b != Array.prototype && b != Object.prototype && (b[c] = a
                                                        .value)
                                                }, h = "undefined" != typeof window && window === this ? this :
                                                "undefined" != typeof global && null != global ? global : this,
                                                k = ["String", "prototype", "repeat"], l = 0; l < k.length -
                                            1; l++) {
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
                                            for (var e; a.length && (e = a.shift());) a.length || void 0 === c ? d[
                                                e] ? d = d[e] : d = d[e] = {} : d[e] = c
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
                                                height: window.innerHeight || document.documentElement
                                                    .clientHeight || document.body.clientHeight,
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
                                                    a = d.top + ("pageYOffset" in window ? window.pageYOffset : (
                                                            document.documentElement || f.parentNode || f)
                                                        .scrollTop);
                                                    d = d.left + ("pageXOffset" in window ? window.pageXOffset : (
                                                            document.documentElement || f.parentNode || f)
                                                        .scrollLeft);
                                                    f = a.toString() + "," + d;
                                                    b.b.hasOwnProperty(f) ? a = !1 : (b.b[f] = !0, a = a <= b.g
                                                        .height && d <= b.g.width)
                                                } a && (b.a.push(e), b.c[e] = !0)
                                        }
                                        y.prototype.checkImageForCriticality = function (b) {
                                            b.getBoundingClientRect && z(this, b)
                                        };
                                        u("pagespeed.CriticalImages.checkImageForCriticality", function (b) {
                                            x.checkImageForCriticality(b)
                                        });
                                        u("pagespeed.CriticalImages.checkCriticalImages", function () {
                                            A(x)
                                        });

                                        function A(b) {
                                            b.b = {};
                                            for (var c = ["IMG", "INPUT"], a = [], d = 0; d < c.length; ++d) a = a
                                                .concat(v(document.getElementsByTagName(c[d])));
                                            if (a.length && a[0].getBoundingClientRect) {
                                                for (d = 0; c = a[d]; ++d) z(b, c);
                                                a = "oh=" + b.l;
                                                b.f && (a += "&n=" + b.f);
                                                if (c = !!b.a.length)
                                                    for (a += "&ci=" + encodeURIComponent(b.a[0]), d = 1; d < b.a
                                                        .length; ++d) {
                                                        var e = "," + encodeURIComponent(b.a[d]);
                                                        131072 >= a.length + e.length && (a += e)
                                                    }
                                                b.i && (e = "&rd=" + encodeURIComponent(JSON.stringify(B())),
                                                    131072 >= a.length + e.length && (a += e), c = !0);
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
                                                            f = new ActiveXObject("Microsoft.XMLHTTP")
                                                        } catch (D) {}
                                                    }
                                                    f && (f.open("POST", d + (-1 == d.indexOf("?") ? "?" : "&") +
                                                            "url=" + encodeURIComponent(b)), f.setRequestHeader(
                                                            "Content-Type", "application/x-www-form-urlencoded"
                                                            ), f.send(a))
                                                }
                                            }
                                        }

                                        function B() {
                                            var b = {},
                                                c;
                                            c = document.getElementsByTagName("IMG");
                                            if (!c.length) return {};
                                            var a = c[0];
                                            if (!("naturalWidth" in a && "naturalHeight" in a)) return {};
                                            for (var d = 0; a = c[d]; ++d) {
                                                var e = a.getAttribute("data-pagespeed-url-hash");
                                                e && (!(e in b) && 0 < a.width && 0 < a.height && 0 < a
                                                    .naturalWidth && 0 < a.naturalHeight || e in b && a.width >=
                                                    b[e].o && a.height >= b[e].m) && (b[e] = {
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
                                        'https://preview.colorlib.com/theme/shoppers/about.html', 'oJcOUTg7z9',
                                        true, false, 'UYMyHPCWFOQ');
                                    //]]>
                                </script><img src="https://preview.colorlib.com/theme/shoppers/images/xblog_1.jpg.pagespeed.ic.Skqn_HuXGv.webp"
                                    alt="Image placeholder" class="img-fluid rounded"
                                    data-pagespeed-url-hash="2922651310"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                <a href="https://vimeo.com/channels/staffpicks/93951774"
                                    class="play-button popup-vimeo"><span class="ion-md-play"></span></a>
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <div class="site-section-heading pt-3 mb-4">
                            <h2 class="text-black">How We Started</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius repellat, dicta at laboriosam,
                            nemo exercitationem itaque eveniet architecto cumque, deleniti commodi molestias repellendus
                            quos sequi hic fugiat asperiores illum. Atque, in, fuga excepturi corrupti error corporis
                            aliquam unde nostrum quas.</p>
                        <p>Accusantium dolor ratione maiores est deleniti nihil? Dignissimos est, sunt nulla illum autem
                            in, quibusdam cumque recusandae, laudantium minima repellendus.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section border-bottom" data-aos="fade">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 site-section-heading text-center pt-4">
                        <h2>The Team</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="block-38 text-center">
                            <div class="block-38-img">
                                <div class="block-38-header">
                                    <img src="https://preview.colorlib.com/theme/shoppers/images/person_1.jpg" alt="Image placeholder" class="mb-4"
                                        data-pagespeed-url-hash="53532713"
                                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                    <h3 class="block-38-heading h4">Elizabeth Graham</h3>
                                    <p class="block-38-subheading">CEO/Co-Founder</p>
                                </div>
                                <div class="block-38-body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil
                                        sit distinctio recusandae doloribus ut fugit officia voluptate soluta. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="block-38 text-center">
                            <div class="block-38-img">
                                <div class="block-38-header">
                                    <img src="https://preview.colorlib.com/theme/shoppers/images/person_2.jpg" alt="Image placeholder" class="mb-4"
                                        data-pagespeed-url-hash="348032634"
                                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                    <h3 class="block-38-heading h4">Jennifer Greive</h3>
                                    <p class="block-38-subheading">Co-Founder</p>
                                </div>
                                <div class="block-38-body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil
                                        sit distinctio recusandae doloribus ut fugit officia voluptate soluta. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="block-38 text-center">
                            <div class="block-38-img">
                                <div class="block-38-header">
                                    <img src="https://preview.colorlib.com/theme/shoppers/images/person_3.jpg" alt="Image placeholder" class="mb-4"
                                        data-pagespeed-url-hash="642532555"
                                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                    <h3 class="block-38-heading h4">Patrick Marx</h3>
                                    <p class="block-38-subheading">Marketing</p>
                                </div>
                                <div class="block-38-body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil
                                        sit distinctio recusandae doloribus ut fugit officia voluptate soluta. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="block-38 text-center">
                            <div class="block-38-img">
                                <div class="block-38-header">
                                    <img src="https://preview.colorlib.com/theme/shoppers/images/person_4.jpg" alt="Image placeholder" class="mb-4"
                                        data-pagespeed-url-hash="937032476"
                                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                    <h3 class="block-38-heading h4">Mike Coolbert</h3>
                                    <p class="block-38-subheading">Sales Manager</p>
                                </div>
                                <div class="block-38-body">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima nihil
                                        sit distinctio recusandae doloribus ut fugit officia voluptate soluta. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section site-section-sm site-blocks-1 border-0" data-aos="fade">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
                        <div class="icon mr-4 align-self-start">
                            <span class="icon-truck"></span>
                        </div>
                        <div class="text">
                            <h2 class="text-uppercase">Free Shipping</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam.
                                Integer accumsan tincidunt fringilla.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon mr-4 align-self-start">
                            <span class="icon-refresh2"></span>
                        </div>
                        <div class="text">
                            <h2 class="text-uppercase">Free Returns</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam.
                                Integer accumsan tincidunt fringilla.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon mr-4 align-self-start">
                            <span class="icon-help"></span>
                        </div>
                        <div class="text">
                            <h2 class="text-uppercase">Customer Support</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam.
                                Integer accumsan tincidunt fringilla.</p>
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