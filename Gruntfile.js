/*global module:false*/
module.exports = function(grunt) {

	// Project configuration.
	grunt.initConfig({

		// Metadata.
		pkg: grunt.file.readJSON('package.json'),

		// Javascript processing.
		jshint: {
			all: ['lib/js/blob-phone.js']
		},

		uglify: {
			options: {
				mangle: true
			},
			my_target: {
				files: {
					'lib/js/blob-phone.min.js': ['lib/js/blob-phone.js']
				}
			}
		},

		// Cleanup.
		clean: {
			composer: [
				'lib/vendor/**/*.md',
				'lib/vendor/**/.*.yml',
				'lib/vendor/**/.gitignore',
				'lib/vendor/**/.gitattributes',
				'lib/vendor/**/build.xml',
				'lib/vendor/**/composer.json',
				'lib/vendor/**/composer.lock',
				'lib/vendor/**/examples',
				'lib/vendor/**/phpunit.*',
				'lib/vendor/**/Tests',
				'lib/vendor/**/tests',
				'lib/vendor/**/.git'
			]
		},

		// PHP Review.
		blobphp: {
			check: {
				src: process.cwd(),
				options: {
					colors: true,
					warnings: true
				}
			},
			fix: {
				src: process.cwd(),
				options: {
					fix: true
				},
			}
		},

		// File watchers.
		watch: {
			cleanup: {
				files: [
					'lib/vendor/**/*.md',
					'lib/vendor/**/.*.yml',
					'lib/vendor/**/.gitignore',
					'lib/vendor/**/.gitattributes',
					'lib/vendor/**/build.xml',
					'lib/vendor/**/composer.json',
					'lib/vendor/**/composer.lock',
					'lib/vendor/**/examples',
					'lib/vendor/**/phpunit.*',
					'lib/vendor/**/Tests',
					'lib/vendor/**/tests',
					'lib/vendor/**/.git'
				],
				tasks: ['clean', 'notify:cleanup'],
			},
			php: {
				files: [
					'**/*.php',
					'.core/**/*.php'
				],
				tasks: ['php'],
				options: {
					spawn: false
				},
			},
			scripts: {
				files: ['lib/js/*.js'],
				tasks: ['javascript', 'notify:js'],
				options: {
					spawn: false
				},
			}
		},

		// Notifications.
		notify: {
			cleanup: {
				options: {
					title: "Composer garbage cleaned",
					message: "grunt-clean has successfully run"
				}
			},

			js: {
				options: {
					title: "JS Files built",
					message: "Uglify and JSHint task complete"
				}
			}
		}
	});

	// These plugins provide necessary tasks.
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-notify');
	grunt.loadNpmTasks('grunt-contrib-clean');
	grunt.loadNpmTasks('grunt-blobfolio');
	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-uglify');

	grunt.registerTask('php', ['blobphp:check']);
	grunt.registerTask('javascript', ['jshint', 'uglify']);

	grunt.event.on('watch', function(action, filepath, target) {
		grunt.log.writeln(target + ': ' + filepath + ' has ' + action);
	});
};
