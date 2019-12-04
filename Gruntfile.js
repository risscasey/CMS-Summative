module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        jshint: {
            files: ['assets/js/script.js'],
            options: {
                esversion: 6
            }
        },

        csslint: {
            lax: {
                options: {
                    'box-sizing': false,
                    'fallback-colors': false,
                    'font-sizes': false,
                    import: 2,
                    important: false,
                    ids: false,
                    'order-alphabetical': false,
                    'universal-selector': false,
                    'compatible-vendor-prefixes': false,
                    'qualified-headings': false,
                    'overqualified-elements': false
                },
                src: ['assets/css/style.css'],
            }
        },

        autoprefixer: {
            options: {
                browsers: ['last 2 versions', 'ie 8', 'ie 9']
            },
            your_target: {
                // Target-specific file lists and/or options go here.
            },
        },

        watch:{
            csslint: {
                files: ['assets/css/style.css'],
                tasks: ['csslint']
            },
            js: {
                files: ['assets/js/script.css'],
                tasks: ['jshint']
            }
        },

    });

    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.registerTask('hintJS', ['jshint']);

    grunt.loadNpmTasks('grunt-contrib-csslint');
    grunt.registerTask('lintCSS', ['csslint']);

    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.registerTask('prefix', ['autoprefixer']);


    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.registerTask('watchFiles', ['watch']);

};
