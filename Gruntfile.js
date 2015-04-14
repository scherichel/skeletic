	module.exports = function(grunt) {
		
		// Project Config
		grunt.initConfig({

			// Access to Nodejs package file
			pkg: grunt.file.readJSON('package.json'),

			less: {
				development: {
					options: {
						compress: false,
						yuicompress: true,
						optimization: 2
					},
					files: {
						"dist/css/skeletic.css": 'less/skeletic.less'
					}
				}
			},
			watch: {
				less: {
					files: ['less/**/*.less'],
					task: ['less'],
					options: {
						nospawn:true
					}
				}
			}
		});

		// Load Plugins
		grunt.loadNpmTasks('grunt-contrib-less');
		grunt.loadNpmTasks('grunt-contrib-watch');

		// Default Task
		grunt.registerTask('default', ['less', 'watch']);
	};