module.exports = function(grunt) {

    grunt.loadNpmTasks("grunt-contrib-less");
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-csso');

    grunt.initConfig({
            less: {
                style: {
                    files: {
                        "css/style.css" : "less/style.less"
                    }
                }
            },
            watch: {
                less: {
                    files: ['less/**/*.less'],
                    tasks: ['less'],
                    options: {
                        nospawn: true
                    }
                }
            },
            csso: {
                style: {
                    options: {
                        report: "qzip"
                    },
                    files: {
                        "css/style.min.css": ["css/style.css"]
                    }
                }
            },
    });

    grunt.registerTask('default', ['less', 'watch']);

};
