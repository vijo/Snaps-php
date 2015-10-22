# Snaps-php
PHP server side script for self-hosting Gyazo applications.

#Instuctions
1. Open i.php on your favorite text editor. (Uses UNIX EOL. Don't use Notepad.)
2. Edit the defines
```
	define('F_PATH', 'i/'); // Set path for saving images (Include the trailing slash "/")
	define('D_NAME', 'http://localhost'); // Set domain name (Do not incldude the trailing slash "/")
```
3. Save
4. Edit your Gyazo client source code and set domain to your upload domain and upload path to "/i.php?md=1"
5. Done

Optional:
1. To have an image that tells the user that the image is not found, place an image called "unknown.png" on the image directory.

#License
The MIT License (MIT)

Copyright (c) 2015 1Conan

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
