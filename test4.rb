#!/usr/bin/ruby
require 'securerandom'
i = 1
sample = []
while i < 100000
	a = SecureRandom.random_number(100000)
	b = SecureRandom.random_number(100000)
	c = SecureRandom.random_number(100000)
	num = a.to_s + b.to_s + c.to_s
	num = num.to_i
	sample.push num
	i += 1
end

beginning = Time.now

average = sample.reduce(:+).to_f / sample.size

puts Time.now - beginning



