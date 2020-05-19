# about-me
A simple system, JSON base for the introduction self and about self

## Usage
Go to the **/content** dir and rename in order **blog-sample.json**, **bloginfo-sample.json**, **skills-sample.json** to **blog.json**, **bloginfo.json**, **skills.json**

### bloginfo.json
1. `name` is your page name, Which is of the string type
2. `lang` is your page language, Which is of the string type ([ISO language code](https://www.w3schools.com/tags/ref_language_codes.asp))
3. `description` is your page description, Which is of the string type
4. `keywords` is your page keywords, Which is of the string type
5. `author` is your page author, Which is of the string type
6. `url` is your page URL, Which is of the string type
7. `social` each item in this object is your page or social network URL, Which is of the string type
8. `profile_images` is your profile image URL, Which is of the string type
9. `profile_text` is your profile text (for example biography,...), Which is of the string type
10. `browser_color` is color of the browser theme, Which is of the string type ([HEX color](https://www.color-hex.com/))
12. `favicon_url` is favicon URL for browsers, Which is of the string type ([favicon generator](https://favicon.io/))

### blog.json
1. `title` is your post title, Which is of the string type
2. `images_url` is your post image URL, Which is of the string type
3. `link` is your post link in your blog, Which is of the string type
> Note that if the posts object is empty, the carousel will not be displayed.

### skills.json
1. `name` is the name of your skill, Which is of the string type
2. `value` is your level of skill (from 100%), Which is of the integer type
> Note that if the item object is empty, the skills box will not be displayed.

### Template guide
To create and design a new template, Read [Template guide](https://github.com/AmiiirCom/about-me/blob/master/TEMPLATE-GUIDE.md)