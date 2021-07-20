+++
title = "Jekyll Blogging"
author = ["Kasra Darvish"]
draft = false
tags = ["#blog"]
+++

# Tools

## Jekyll {#jekyll}

Edit files in BuildBlog folder. Do the following in terminal

```sh
    cd BuildBlog
    export PATH=$HOME/.gem/ruby/2.6.0/bin:$PATH
    JEKYLL_ENV=production bundle exec jekyll build
```

Then copy the \\\_site contents to blog folder in your github repo.

You should do this every time you add a new post.


## Hugo {#hugo}


### Create the website (Once) {#create-the-website--once}

```bash
hugo new site blog_name
cd blog_name
```


### Add a new post {#add-a-new-post}

```bash
hugo new posts/my-first-post.md
```


### Publish The Blog {#publish-the-blog}

```bash
hugo server -D # To see it live
hugo -D # To build the website
```

Output will be in ./public/ directory by default (-d/--destination flag to change it, or set publishdir in the config file).
Copy the output to github.

# Design

## UI/UX {#ui-ux}

Users are more likely to scroll all the way down than to click on the next page button since it requires another loading time and changing the method of using keyboard/mouse. Therefore, it's better to have all of your posts in one page, and load them incrementally.


### Font {#font}

Use a comic like font such as the font of this [blog](https://randomgeekery.org/post/2020/06/ox-hugo-for-the-orgconfig/)
