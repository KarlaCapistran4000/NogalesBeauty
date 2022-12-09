module.exports = {
	globDirectory: '.',
	globPatterns: [
		'**/*.{png,jpg,html,json,js,scss}'
	],
	ignoreURLParametersMatching: [
		/^utm_/,
		/^fbclid$/
	],
	swDest: 'sw.js'
};