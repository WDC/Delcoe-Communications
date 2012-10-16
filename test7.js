var microtime = require('microtime');
i = 0;
var sample = [];
while (i < 100000) {
	sample.push(i);
	i++;
}
a = microtime.nowDouble();

sample.forEach(
	function s(value) {

	});

console.log(microtime.nowDouble() - a);
