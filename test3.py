#!/usr/bin/python
from array import *
import time
count = 0
array = []
while (count < 100000): 
	array.append(count)
	count = count + 1

a = time.time()

average = sum(array) / float(len(array))
print time.time() - a
