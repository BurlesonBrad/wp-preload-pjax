=== Preload & Pjax Faster Page Load ===
Contributors: falsandtru
Donate link: -
Tags: pjax, preload, ajax, fast, page, load, cache
Tested up to: 4.4.4
Stable tag: 0.4.4
License: GPL2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

About 0.5 seconds faster page load of the site, even after you've taken the various means for faster site, without making any changes.

== Description ==

About 0.5 seconds faster page load of the site, even after you've taken the various means for faster site, without making any changes.

Google and Amazon have shown, there is a huge value to 0.1 seconds to shorten further after you have improved to about 1 second load time of the page. pjax and preload provides about 0.5 seconds of this value.

You can see if was how fast this plugin from the output of the console.

<pre>
[-310, 1, 361, 379, 403, 424, 450, 486, 487, 491]  
["preload(-310)", "continue(1)", "load(361)", "parse(379)", "head(403)", "content(424)", "css(450)", "script(486)", "renderd(487)", "defer(491)"]
</pre>

If you have problems reading such as JavaScript and CSS, it is necessary to set the pjax of built-in `load.reload ` and ` load.ignore` parameter.

This plug-in is like a trial version. If you want to optimize and customize in more detail, it is recommended that you set directly jQuery plug-ins built without the use of this plug-in.

[API](http://falsandtru.github.io/jquery-pjax/api/)

pjax: [http://falsandtru.github.io/jquery-pjax/](http://falsandtru.github.io/jquery-pjax/)  
preload: [https://github.com/falsandtru/jquery-preload](https://github.com/falsandtru/jquery-preload)  
require: jQuery1.6+

== Installation ==

1. Install and activate, only this

== Frequently Asked Questions ==

= Where are the docs ? =

preload: [https://github.com/falsandtru/jquery-preload](https://github.com/falsandtru/jquery-preload)  
pjax: [https://github.com/falsandtru/jquery-pjax](https://github.com/falsandtru/jquery-pjax)

= Ugh, no documentation in english ? =

Sorry, please use the machine translation, such as google.
I will not be able to make the English document better than machine translation.

= It is possible to display the loading effect or progress bar? =

Shure, please refer to the documentation

[effect, progressbar](http://falsandtru.github.io/jquery-pjax/guide/)

== Changelog ==

= 0.4.4 =
Update pjax and swith to minified version

* pjax: v2.40.0
* preload: v0.8.1

= 0.4.3 =
Update pjax and preload

* pjax: v2.33.0
* preload: v0.8.1

= 0.4.2 =
Update pjax

* pjax: v2.28.0

= 0.4.1 =
Fix setting

= 0.4.0 =
Rebuild

= 0.3.9 =
Update pjax and preload

* pjax: v2.27.0
* preload: v0.8.0

= 0.3.8 =
Update pjax

* pjax: v2.26.0

= 0.3.7 =
Update pjax

* pjax: v2.25.4

= 0.3.6 =
Update pjax

* pjax: v2.25.2

= 0.3.5 =
Update pjax

* pjax: v2.25.1

= 0.3.4 =
Update preload and pjax

* preload: v0.7.1
* pjax: v2.24.0

= 0.3.3 =
Fix update miss

= 0.3.2 =
Fix accelerate.js

= 0.3.1 =
Update pjax

* pjax: v2.22.0

= 0.3.0 =
Update pjax

* pjax: v2.15.0

= 0.2.3 =
Update preload

* preload: v0.5.0

= 0.2.2 =
Update pjax

* pjax: v2.11.1

= 0.2.1 =
Update pjax

* pjax: v2.5.0

= 0.2.0 =
Fix bug that not work at jQuery1.10.0-1.x

* pjax: v2.4.0

= 0.1.0 =
Fix install fail

= 0.0.8 =
Update pjax, preload

* pjax: v2.1.0
* preload: v0.3.0

= 0.0.7 =
Fix plugin display name
Fix that is not read by the admin page

= 0.0.6 =
Fix fatal error

= 0.0.5 =
Fix that does not use jQuery from `$` variable

= 0.0.4 =
Update pjax, preload

* pjax: v1.36.3

= 0.0.3 =
Change function name

= 0.0.2 =
Update pjax, preload

* preload: v0.2.3
* pjax: v1.36.2

= 0.0.1 =
Release

* preload: v0.2.2
* pjax: v1.36.1
