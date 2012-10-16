#!/usr/bin/python
import time
count = 0

a = time.time()

while (count < 100000): 
	temp = str(count)
	temp2 = int(temp)
	count = count + 1

print time.time() - a
