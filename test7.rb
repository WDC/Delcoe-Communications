#!/usr/bin/ruby
i = 0
array = Array.new
while i < 100000
	array << i
	i += 1
end

beginning = Time.now

array.each {

}

puts Time.now - beginning



