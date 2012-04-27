# Placeholder helper for CodeIgniter

This helper allows you to add placeholder images and text in your applications. It is extremely useful when prototyping the layout of the page.

# Usage

`placeholder(width, height, text, bgcolor, color);` - placeholder images

`lipsum(paragraphs, length, extra_options)` - placeholder text

The helper uses [placehold.it](http://placehold.it) and [loripsum.net](http://loripsum.net) services.

## Examples

### Image placeholders

- 300px square: `placeholder(300);`.
- 200x100px rectangular: `placeholder(200, 100);`
- 200x100px rectangular with custom text: `placeholder(200, 100, 'Howdy');`
- 100px black square with white text: `placeholder(100, 100, 'Howdy', '000000', 'FFFFFF');`

Note that colors are represented as HEX values (when passing arguments to the function, don't add the pound `#` symbol).

You can also pass in an array:

`placeholder(array('width' => 100, 'height' => 100, 'text' => 'Howdy', 'background' => '000000', 'foreground' => 'FFFFFF'));`

### Text placeholders

- 2 medium length paragraphs: `lipsum()`
- 3 short paragraphs: `lipsum(3, 'short')`
- 5 long paragraphs with decorations (bold, italic text) and links: `lipsum(3, 'long', array('decorate', 'link'))`

Here is a full list of extra options that you can put in the array:

- decorate - Add bold, italic and marked text
- link - Add links
- ul - Add unordered lists
- ol - Add numbered lists
- dl - Add description lists
- bq - Add blockquotes
- code - Add code samples
- headers - Add headers
- allcaps - Use ALL CAPS
- prude - Prude version

# CHANGELOG

### 0.0.3

* Add `lipsum()` helper function for generating dummy lorem ipsum paragraphs.

# COPYRIGHT

### Contributors

- Thanks goes to **Brandon Probst** for suggesting text placeholders.

Copyright (c) 2012 Edmundas Kondrašovas

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