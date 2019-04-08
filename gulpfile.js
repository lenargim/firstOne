var gulp 		= require('gulp'),
	sass 		= require('gulp-sass'),
	browserSync = require('browser-sync');

gulp.task('sass', function() {
	return gulp.src('app/sass/**/*.sass')
	.pipe(sass())
	.pipe(gulp.dest('app/css'))
	.pipe(browserSync.reload({stream: true}))
});
gulp.task('browser-sync', function() { // Создаем таск browser-sync
    browserSync.init({ // Выполняем browserSync
        server: { // Определяем параметры сервера
            baseDir: 'app'// Директория для сервера - app
        },
        open: true,
        notify: false // Отключаем уведомления
    });
});
gulp.task('watch',  function() {
    gulp.watch('app/sass/**/*.sass',  gulp.series('sass')); // Наблюдение за sass файлами
    gulp.watch('app/*.html').on('change', browserSync.reload);
    gulp.watch('app/*.js').on('change', browserSync.reload);
    gulp.watch('app/css/**/*.css').on('change', browserSync.stream); // Обновляем CSS на странице при изменении
    // Наблюдение за другими типами файлов
});
gulp.task('default', gulp.parallel('browser-sync','sass','watch'));