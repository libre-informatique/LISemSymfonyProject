/*
 * Copyright (C) 2015-2016 Libre Informatique
 *
 * This file is licenced under the GNU GPL v3.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

var gulp = require('gulp');
var chug = require('gulp-chug');

gulp.task('sylius-admin', function() {
    gulp.src('vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Gulpfile.js', { read: false })
        .pipe(chug())
    ;
});

gulp.task('sylius-shop', function() {
    // original file : vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Gulpfile.js
    gulp.src('app/themes/LisemTheme/SyliusShopBundle/Gulpfile.js', { read: false })
        .pipe(chug())
    ;
});

gulp.task('default', ['sylius-admin', 'sylius-shop']);
