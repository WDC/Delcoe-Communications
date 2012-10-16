var microtime = require('microtime');
i = 0;

a = microtime.nowDouble();

while (i < 100000) {
	temp = i.toString();
	temp2 = parseInt(temp);
	i++;
}

console.log(microtime.nowDouble() - a);
