module.exports = function(grunt) {

	grunt.initConfig({

		autoprefixer: {
			single_file: {
				src: 'assets/css/global.css',
				dest: 'assets/css/global-prefixed.css'
			},
		},

		sass: {
			dist: {
				options: {
					style: 'expanded'
				},
				files: {
					'assets/css/global.css': 'assets/scss/global.scss'
				}
			}
		},

		watch: {
			css: {
				files: ['assets/scss/**/*.scss', 'assets/scss/*.scss'],
				tasks: ['sass', 'autoprefixer']
			}
		},



	});


	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');



	grunt.registerTask('default', ['watch']);


};