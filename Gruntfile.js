module.exports = function(grunt) {

  grunt.initConfig({
    jshint: {
      files: ['Gruntfile.js']
    },
    watch: {
      files: ['assets/**/*.css'],
      tasks: ['jshint']
    },
    cssmin: {
      target: {
        files: [{
          expand: true,
          cwd: 'assets/contao/css',
          src: ['*.css', '!*.min.css'],
          dest: 'assets/contao/css',
          ext: '.min.css'
        }]
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', ['jshint', 'cssmin']);

};