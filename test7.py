#!/usr/bin/python
from array import *
import random
import time
count = 0
array = []
while (count < 100000): 
	array.append(int(count))
	count = count + 1

a = time.time()
for i in array: 
	pass

print time.time() - a
