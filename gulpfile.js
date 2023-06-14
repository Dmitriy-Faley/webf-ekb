const { src, dest, parallel, watch } = require("gulp");
const browserSync = require("browser-sync").create();
const concat = require("gulp-concat");
const uglify = require("gulp-uglify");
const sass = require("gulp-sass");
const prefix = require("gulp-autoprefixer");
const cleanCSS = require("gulp-clean-css");
const imagemin = require("gulp-imagemin");
const newer = require("gulp-newer");
const aos = require("aos");

const siteUrl = "http://webf-ekb.loc/";
const assetsPath = "app/content/themes/gulp-theme/assets/";
const imgPath = "src/img/";
const imgMinPath = "app/content/themes/gulp-theme/assets/img/";

// Определяем логику работы Browsersync
function browsersync() {
	browserSync.init({
		// Инициализация Browsersync
		proxy: siteUrl,
		notify: false, // Отключаем уведомления
		online: true, // Режим работы: true или false
	});
}

function scripts() {
	return src([
		"node_modules/aos/dist/aos.js",
		//"node_modules/swiper/swiper-bundle.js",
		//"node_modules/swiper/swiper-bundle.esm.js",
		"src/js/main.js",
	])
		.pipe(concat("main.min.js"))
		.pipe(uglify())
		.pipe(dest(assetsPath))
		.pipe(browserSync.stream());
}

function styles() {
	return src([
		"node_modules/aos/dist/aos.css",
		/* "node_modules/swiper/swiper.scss",
		"node_modules/swiper/swiper.min.css",
		"node_modules/swiper/modules/navigation/navigation.scss",
		"node_modules/swiper/modules/pagination/pagination.scss",
		"node_modules/swiper/modules/scrollbar/scrollbar.scss", */
		"src/scss/**/*.scss",
	])
		.pipe(sass())
		.pipe(concat("main.min.css"))
		.pipe(prefix({ overrideBrowserslist: ["last 10 versions"], grid: true }))
		.pipe(cleanCSS({ level: { 1: { specialComments: 0 } } }))
		.pipe(dest(assetsPath))
		.pipe(browserSync.stream());
}

function images() {
	return src(imgPath + "**/*")
		.pipe(newer(imgMinPath))
		.pipe(imagemin())
		.pipe(dest(imgMinPath));
}

function startwatch() {
	watch(
		["src/scss/**/*.scss", "!app/content/themes/gulp-theme/assets/*.min.css"],
		styles
	);
	watch(
		["src/js/*.js", "!app/content/themes/gulp-theme/assets/*.min.js"],
		scripts
	);
	watch([imgPath + "**/*"], images);
	watch("app/content/themes/**/*.css").on("change", browserSync.reload);
	watch("app/content/themes/**/*.php").on("change", browserSync.reload);
}

exports.styles = styles;
exports.scripts = scripts;
exports.images = images;
exports.browsersync = browsersync;

exports.default = parallel(styles, scripts, browsersync, startwatch);
