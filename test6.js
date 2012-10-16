var microtime = require('microtime');
i = 0;

a = microtime.nowDouble();

while (i < 100000) {
	i++;
}

console.log(microtime.nowDouble() - a);
