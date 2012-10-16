#!/usr/bin/python
from array import *
import random
import time
count = 0
array = []
while (count < 100000): 
	a = random.randint(0, 100000)
	b = random.randint(0, 100000)
	c = random.randint(0, 100000)
	var = str(a) + str(b) + str(c)
	array.append(int(var))
	count = count + 1

a = time.time()
average = sum(array) / float(len(array))
print time.time() - a
