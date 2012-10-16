#!/usr/bin/python
import time
count = 0
a = time.time()
while (count < 100000): 
	"hello world number %s" % count
	count = count + 1

print time.time() - a
