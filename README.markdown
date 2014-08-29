PersistentPest
====

**PersistentPest** brings some tenacity to [**Pest**](https://github.com/educoder/pest), an HTTP client library for PHP. If a given GET, PUT, or POST request fails, PersistentPest will retry up to 3 times.



Basic Example
-------------

To begin, see [Pest](https://github.com/educoder/pest)'s documentation.

To make Pest persistent:

    <?php
    require 'PersistentPest.php';

    $pest = new PersistentPest('http://example.com');
    $pest->retries = 7; // try these requests up to 7 times

    $thing = $pest->get('/things');

    $thing = $pest->post('/things', 
    	array(
    		'name' => "Foo",
    		'colour' => "Red"
    	)
    );

    $thing = $pest->put('/things/15',
    	array(
    		'colour' => "Blue"
    	)
    );


License
-------

Copyright (C) 2013-2014 by Richard K. Miller

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
