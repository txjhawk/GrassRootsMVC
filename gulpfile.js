/**
 * Author: Anthony Allen
 * Description: Gulpfile: Compile SASS and minify CSS and auto prefix,
 * validate JS and minify files, Optimize images
 */

// Load plugins
var gulp     = require( 'gulp' ),
plugins      = require( 'gulp-load-plugins' )( { camelize: true } ),
sass         = require( 'gulp-ruby-sass' ),
autoprefixer = require( 'gulp-autoprefixer' ),
minifyCss    = require( 'gulp-minify-css' ),
jshint       = require( 'gulp-jshint' ),
concat       = require( 'gulp-concat' ),
rename       = require( 'gulp-rename' ),
uglify       = require( 'gulp-uglify' ),
cache        = require( 'gulp-cache' ),
imagemin     = require( 'gulp-imagemin' );

// Styles tasks
gulp.task( 'sass', function()
{
    return sass( 'app/public/scss/app.scss', { style: 'expanded', compass: true } )
        .pipe( autoprefixer( 'last 2 versions', 'ie 8', 'ie 9', 'ios 6', 'android 4', 'safari 5', 'opera 12.1' ) )
        .pipe( gulp.dest( 'app/public/css/' ) )
        .pipe( minifyCss( { keepSpecialComments: 1 } ) )
        .pipe( gulp.dest( 'app/public/css/' ) )
} );

// Site Scripts
gulp.task( 'scripts', function()
{
    return gulp.src( [ 'app/public/js/**/*.js', '!app/public/js/min/**/*.min.js' ] )
        .pipe( jshint( '.jshintrc' ) )
        .pipe( jshint.reporter( 'default' ) )
        .pipe( gulp.dest( 'app/public/js/' ) )
        .pipe( rename( { suffix: '.min' } ) )
        .pipe( uglify() )
        .pipe( gulp.dest( 'app/public/js/min/' ) )
} );

// Images
gulp.task( 'images', function()
{
    return gulp.src( 'app/public/images/**/*' )
        .pipe( imagemin( { optimizationLevel: 7, progressive: true, interlaced: true } ) )
        .pipe( gulp.dest( 'app/public/images/' ) )
} );

// Watch
gulp.task( 'watch', function()
{

    // Watch .scss files
    gulp.watch( 'app/public/scss/**/*.scss', [ 'sass' ] );

    // Watch .js files
    gulp.watch( 'app/public/js/**/*.js', [ 'plugins', 'scripts' ] );

    // Watch image files
    gulp.watch( 'app/public/images/**/*', [ 'images' ] );

} );

// Default task
gulp.task( 'default', [ 'sass', 'scripts', 'images', 'watch' ] );