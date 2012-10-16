#!/usr/bin/ruby
require 'pp'
i = 1
sample = [0]
while i < 100000
	sample << i
	i += 1
end
beginning = Time.now
average = sample.reduce(:+).to_f / sample.size
puts Time.now - beginning



