var projectName = "papyrus.qi-interactive.com"

module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    less: {
      files: {
        options: {
//          compress: true
},
expand: true,
cwd: 'less',
src: ['**/*.less', '!base/*.less', '!imports/**/*.less'],
dest: 'web/css/',
ext: '.css'
}
},
copy: {
  all: {
    dot: true,
    src: ["*", '!vendor', '*/**'],
    dest: "../../Sites/" + projectName + "/",
},
static: {
    dot: true,
    src: ['js/**/*.js','css/**/*.css', 'protected/widgets/**/assets/*.*', 'images/**/*', 'protected/widgets/**/*.css', 'mata/assets/**/*.*'],
    dest: '../../Sites/' + projectName + '/',
},
protected: {
    dot: true,
    src: ['protected/**/*'],
    dest: '../../Sites/' + projectName + '/',
},
mata: {
    dot: true,
    src: ['mata/**/*'],
    dest: '../../Sites/' + projectName + '/',
},
main: {
   dot: true,
   src: ['css/**', 'js/**', 'mata/**/*.css', 'mata/**/*.php',  'protected/**', 'mata/**/*.php', 'images/**', '!protected/runtime/**'],
   dest: '../../Sites/' + projectName + '/',
}
},
sync: {
 all: {
  src: ['**/*'],
  dest: '../../Sites/' + projectName + '/',
},
},
watch: {
  all: {
    files: ['**/*', '!less/**/*'],
    tasks: ['sync:all'],
    options: {
      livereload: true,
  },
},
  less: {
    files: ['less/**/*.less'],
    tasks: ['less', 'sync:all'],
    options: {
      livereload: true,
  },
},
},
});

grunt.loadNpmTasks('grunt-contrib-less');
grunt.loadNpmTasks('grunt-contrib-watch');
grunt.loadNpmTasks('grunt-contrib-copy');
grunt.loadNpmTasks('grunt-sync');
};
