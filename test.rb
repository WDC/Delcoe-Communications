#!/usr/bin/ruby
i = 0
beginning = Time.now

while i < 100000
        temp = i.to_s
        temp2 = temp.to_i
	i += 1
end

puts Time.now - beginning


