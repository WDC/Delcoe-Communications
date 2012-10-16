#!/usr/bin/ruby
string = ''
i = 0

beginning = Time.now

while i < 100000
	string << i.to_s
        i += 1
end

puts Time.now - beginning



