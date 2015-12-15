module.exports = function(grunt){

  require('load-grunt-tasks')(grunt);

  grunt.initConfig({

  concat: {
    options: {
      separator: ';',
    },

    dist: {
      src: ['bootstrap.js', 'js/*.js', 'js/**/*.js'],
        dest: 'dist/js/min.js',
    },
  },


  uglify: {
    dist: {
      files: {
        'dist/js/min.js': ['dist/js/min.js'],
      },
    },
  },

  jshint: {
    all: ['js/*.js', 'js/libs/*.js', '!js/*.min.js','!js/**/*.min.js'],
  },

  cssmin: {
    options: {
        shorthandCompacting: false,
        roundingPrecision: -1
    },
    target: {
        files: {
          'dist/css/min.css': ['*.css', 'css/*.css'],
        },
      },
    },


  imagemin: {                          // Task
    dynamic: {                         // Another target
      files: [{
        expand: true,                  // Enable dynamic expansion
        cwd: 'images/',                   // Src matches are relative to this path
        src: ['**/*.{png,jpg,gif}'],   // Actual patterns to match
        dest: 'dist/img'                  // Destination path prefix
      }],
    },
  },

  replace: {
    dist: {
      src: ['*.php'],
      overwrite: true,                 // overwrite matched source files
      replacements: [{
        from: "slide_img_5.jpg",
        to: "img/slide_img_5.jpg"
      }]
    }
  }

});



  grunt.registerTask('default',['concat','uglify','cssmin','imagemin','replace'] );
}
