module.exports = {
	globDirectory: '.',
	globPatterns: [
		'**/*.{html,php,css,txt,scss,eot,svg,ttf,woff,woff2,pdf,js,json,png,jpg}'
	],
	swDest: 'sw.js',
	ignoreURLParametersMatching: [
		/^utm_/,
		/^fbclid$/
	]
};
