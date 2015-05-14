Ffuenf_Pagespeed
================
[![GitHub tag](https://img.shields.io/github/tag/ffuenf/Ffuenf_Pagespeed.svg)][tag]
[![Build Status](https://img.shields.io/travis/ffuenf/Ffuenf_Pagespeed.svg)][travis]
[![Code Climate](https://codeclimate.com/github/ffuenf/Ffuenf_Pagespeed/badges/gpa.svg)][codeclimate_gpa]
[![Test Coverage](https://codeclimate.com/github/ffuenf/Ffuenf_Pagespeed/badges/coverage.svg)][codeclimate_coverage]

[tag]: https://github.com/ffuenf/Ffuenf_Pagespeed
[travis]: https://travis-ci.org/ffuenf/Ffuenf_Pagespeed
[codeclimate_gpa]: https://codeclimate.com/github/ffuenf/Ffuenf_Pagespeed
[codeclimate_coverage]: https://codeclimate.com/github/ffuenf/Ffuenf_Pagespeed


This is a extension for Magento Community Edition that adds support for ngx_pagespeed to the cache clearing mechanisms.

Platform
--------

The following versions are supported and tested:

* Magento Community Edition 1.6.2.0
* Magento Community Edition 1.7.0.2
* Magento Community Edition 1.8.1.0
* Magento Community Edition 1.9.1.1

Other versions are assumed to work.

Installation
------------

Use [modman](https://github.com/colinmollenhour/modman) to install:
```
modman init
modman clone https://github.com/ffuenf/Ffuenf_Pagespeed
```

Deinstallation
--------------

Use [modman](https://github.com/colinmollenhour/modman) to clear all files and symlinks:
```
modman clean Ffuenf_FixCatalogOptionSort
```
see `uninstall.sql` to clear all entries of this extension from your database.

Development
-----------
1. Fork the repository from GitHub.
2. Clone your fork to your local machine:

        $ git clone https://github.com/USER/Ffuenf_Pagespeed

3. Create a git branch

        $ git checkout -b my_bug_fix

4. Make your changes/patches/fixes, committing appropriately
5. Push your changes to GitHub
6. Open a Pull Request

License and Author
------------------

- Author:: Achim Rosenhagen (<a.rosenhagen@ffuenf.de>)
- Copyright:: 2015, ffuenf

The MIT License (MIT)

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.