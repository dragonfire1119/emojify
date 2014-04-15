module.exports = function(grunt) {
  grunt.initConfig({
    cache: false,
    mkdir: {
      all: {
        options: {
          mode: 0700,
          create: ['./tmp']
        }
      }
    },
    clean: {
      short: ['tmp/']
    },
    phplint: {
      options: {
        swapPath: 'tmp/'
      }, all: ['**/*.php']
    }
  });

  grunt.loadNpmTasks('grunt-mkdir');
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-phplint');

  grunt.registerTask('default', ['mkdir:all', 'phplint', 'clean']);
}
