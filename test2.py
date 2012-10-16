#!/usr/bin/python
import time
count = 0
string = ''

a = time.time()

while (count < 100000): 
	string = string + str(count)
	count = count + 1

print time.time() - a
