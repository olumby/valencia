# An exhibit of Markdown

This note demonstrates some of what [Markdown][1] is capable of doing.

## Basic formatting

I strongly recommend against using any `<blink>` tags.
I wish SmartyPants used named entities like `&mdash;` instead of decimal-encoded entites like `&#8212;`.
If you want your page to validate under XHTML 1.0 Strict, you've got to put paragraph tags in your blockquotes:

```bash
# Disable autosave in Sketch
defaults write com.bohemiancoding.sketch3 ApplePersistence -bool no
```
I strongly recommend against using any `<blink>` tags.

I wish SmartyPants used named entities like `&mdash;` instead of decimal-encoded entites like `&#8212;`.

If you want your page to validate under XHTML 1.0 Strict, you've got to put paragraph tags in your blockquotes:

```css
html, body {
	font-family: "Source Sans Pro", sans-serif;
}
pre, code {
	font-family: "Source Code Pro";
}
```

I strongly recommend against using any `<blink>` tags.
I wish SmartyPants used named entities like `&mdash;` instead of decimal-encoded entites like `&#8212;`.
If you want your page to validate under XHTML 1.0 Strict, you've got to put paragraph tags in your blockquotes:

```php
return Validator::make($data, [
    'name' => 'required|max:255',
    'email' => 'required|email|max:255|unique:users',
    'password' => 'required|confirmed|min:6',
]);
```

Paragraphs can be written like so. A paragraph is the basic block of Markdown. A paragraph is what text will turn into when there is no reason it should become anything else.

Paragraphs must be separated by a blank line. Basic formatting of *italics* and **bold** is supported. This *can be **nested** like* so.

[1]: http://daringfireball.net/projects/markdown/