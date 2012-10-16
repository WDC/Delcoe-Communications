#!/usr/bin/ruby
i = 0
beginning = Time.now



while i < 100000
	temp = "Hello world number #{i}"
	i += 1
end



puts Time.now - beginning



