+++
title = "Note Taking"
author = ["Kasra Darvish"]
draft = false
+++

## Hey You Perfectionist {#hey-you-perfectionist}

Don't spend endless hours contemplating the tools. Follow this rule:

1.  As long as you have access to your data and they are palin text, you will be fine. The worst is that you can't convert your files easily to another plain text format, but even in that case you can search your files and find the data you are looking for.
2.  Don't think about publishing and making it look good, because notes evolve over time and you don't want the pdfs of them you created two years ago. The important part is the raw information you capture and not how it looks. You can always take care of that later.
3.  In terms of converting formats: Even if you can't use automatic tools, you can use [regexp]({{< relref "regex" >}}) to convert the syntax more or less.
4.  Don't think about folders and hierarchies. You can always change them relatively easily.
5.  So, if you have a tool that's working for you now, just f\*\*\*ing USE it and don't think about the future of the tool and what happens to it and to your future self.


## TLDR {#tldr}

**Editor**: I use [Emacs]({{< relref "emacs" >}}) for note taking and [Vscode]({{< relref "vscode" >}}) for coding.
**Language**: I decided to use [Org Mode]({{< relref "org-mode" >}}) inside emacs for a few months now and I find it extremely helpful.


## Why {#why}

> Notes aren't a record of my thinking process. They are my **thinking** process. -- Richard Feynman

1.  The primary purpose of note-taking should not be for storing ideas, but for developing them. When we take notes, we should ask **"in what context do I want to see this note again?"**
2.  All the time I spend configuring and debugging Emacs is time I'm not spending doing something more productive,
3.  Restaurant kitchens are not pretty because professionals care about efficiency and not pretty.


## Result {#result}

I will use vscode/vscodium as my main eidtor for now so that I can get rid of Obsidian. Then if I don't like it completely, I move to emacs.
Use a combination of [vscode]({{< relref "vscode" >}}), [emacs]({{< relref "emacs" >}}), and [obsidian]({{< relref "obsidian" >}}). You can use obsidian to print pdfs. Use vscode for snippets, multi-cursor, export to latex, and its huge extension market which is awesome for getting things done and project management (the closest to org-mode I can get). Emacs is used to do stuff that I can't really do here.
But make sure to use a universal syntax so that you can use [vscode]({{< relref "vscode" >}}) or [emacs]({{< relref "emacs" >}}) later if something happens to obsidian. In the meantime vs code extensions will improve and new apps will come out. As long as the syntax is the same, I will be fine.
The only things that are not standard markdown are:

1.  embedding notes
2.  wikilinks (which luckily all three editors support). I can use wikilinks for every file format in both vscode and obsidian. So I guess it makes sense to continue using it. Because if I ever go to emacs, I will be using org mode for sure and markdown-mode in emacs is not very powerful (no link autocompletion, backlinks, ...)
3.  link to sections.

So bottom line: use either of these tools but don't link to section and don't embed files very often (I'm sayin very often because doing so doesn't break the links and a simple link will be added to the file).

I also can download the installation of the current version of [obsidian]({{< relref "obsidian" >}}) which is free so that if they changed it, I can have a working base.

I am very efficient with obsidian and it has all of the features I want. The only problem is that they might change it to require subscription. I will continue to learn emacs org mode and org roam but it's too much time sink and prevents the original deep work. I don't think vscode extensions are there yet to be used as my primary tool for [second-brain-zettlekasten]({{< relref "second-brain-zettlekasten" >}}). I will check vscode extensions again if Obsidian discontinues the free version. Also, all my notes are in markdown, and converting them to org won't be easy.

Memo extension in [vscode]({{< relref "vscode" >}}) is almost identical to [obsidian]({{< relref "obsidian" >}}), so I can easily write in the same format in both. The only difference is linking to sections which is not supported in vscode.
The other problem with vscode is the preview/export to pdf which is not as powerful as obsidian. The preview/export feature is not a deal breaker right now because it doesn't affect my method of note taking and writing. I think I can make a css stylesheet to export to html based on it.


## Methods {#methods}

1.  Outline: Markdown, org mode
2.  Zettelkasten
3.  Mind Map
4.  Cornell: Notebooks and papers
5.  Sentence
6.  Charting


## Techniques {#techniques}

1.  Separate facts from your own opinions
2.  Use/Create a set of symbols to make note taking easier
    -   w/ instead of with and w/o instead of without.
    -   Use numbers instead of letters. 3 instead of three.
    -   Use a symbol like --> to replace if-then statements


## Language of Notes {#language-of-notes}


### Markdown {#markdown}

Use mermaid to draw graphs in your markdown note. The following diagram is to decide which language to use

```text
    graph TD;
        A[org mode] --> |No| Latex --> No;
        A --> |No| M[Markdown];
        A --> |Yes| Emacs;
        M --> Apps --> Zettlr;
        Apps --> Obsidian;
        M --> T[Editors] --> Emacs;
        Emacs --> Doom;
        Emacs --> Spacemacs;
        Emacs --> GNU;
        T[Editors] --> V[VS Code] --> Foam;
        V --> Dendron;
        V --> Memo;
        T[Editors] --> vim;
```


### Org Mode {#org-mode}

See [Org Mode]({{< relref "org-mode" >}}) for a comprehensive instruction and to see what's possible with org mode.


### Markdown or Org mode {#markdown-or-org-mode}

Read this: <http://www.pwills.com/post/2019/09/24/blogging-in-org.html>

Org mode workflow by org roam's author
<https://blog.jethro.dev/posts/org%5C%5Fmode%5C%5Fworkflow%5C%5Fpreview/>

| Feature                       | Org (WYSIWYG)          | Markdown |
|-------------------------------|------------------------|----------|
| open linked files in editor   | ✓                      | ✓        |
| open linked files in html     | ✓                      |          |
| open linked files in pdf      | ✗                      | ✗        |
| embeding files (transclusion) | ✓                      | ✓        |
| export to latex               | ✓                      | ✗        |
| Equation numbering            | ✓                      | ✗        |
| Diagram/Merimaid              | ?                      | ✓        |
| Tags                          | headlines and metadata | ✓        |
| More apps                     | ✗                      | ✓        |
| Consistent syntax             | ✓                      | ✗        |

-   Org mode means I have to use emacs for the rest of my life since there are no better editors for org mode.
-   Markdown is more widely used and there are more apps for it but it's less powerful than org (equation numbering, export to latex) and there is no standard markdown way of writing (wkilinks vs regular links).


#### <span class="org-todo done DONE">DONE</span> I think org mode is out of question for me, since I already have a lot of markdown notes.+ Convert markdown files to org mode files. {#i-think-org-mode-is-out-of-question-for-me-since-i-already-have-a-lot-of-markdown-notes-dot-plus-convert-markdown-files-to-org-mode-files-dot}

I converted my files to org mode and I'm enojoying it so far.

I feel I'm not ready to make a commitment to emacs and use it for my note taking and everything, because I'm not proefficient in it yet. Also converting all of my markdown notes to org mode is a pain.
Maybe the best choice is to use org mode for paper summaries so that I can get used to it and also learn how to make adjustments to emacs with elisp. Then after a while I can decide better because I have more data/knowledge to reason with.

Some references:

1.  <https://cheatsheet.md/notable.pdf>
2.  <https://karl-voit.at/2017/09/23/orgmode-as-markup-only/>
3.  <http://doc.norang.ca/org-mode.html>


#### Exporting {#exporting}

```text
    graph TD;
        Markdown --> HTML --> PDF ;
        Org --> Markdown;
        Org --> LaTeX --> PDF;
        Org --> HTML;
```


### Convert Markdown to org mode {#convert-markdown-to-org-mode}

[resource](https://emacs.stackexchange.com/questions/5465/how-to-migrate-markdown-files-to-emacs-org-mode-format)


#### Change wikilinks to regular markdown links {#change-wikilinks-to-regular-markdown-links}

Use vs code's find and replace with regex to change links from `[some-link](some-link.org)` to `[some-link](some-link.org)`. Use a regexp similar to below to find wikilinks

```text
    \[\[([^\]]*)\]\]
```

and replace them by

```text
    `[$1]($1.org)`
```


#### Add .org extension to the regular links but ignore other file formats and sections {#add-dot-org-extension-to-the-regular-links-but-ignore-other-file-formats-and-sections}

Then some of them are wikilinks to sections which contain `#` so just ignore those with regex `[^#]` and some of them are wikilinks to othe file formats wich contain dots in the parantheses so ignore those as well using regex `[^.]` or altogether `[^#.]`. Next you can convert `[some-link](some-link.org)` to `[some-link](some-link.org)`
Basically, you have to swap `\[([^\]]*)\]\(([^\]\)#.]*)\)` with `[$1]($2.org)`


#### Move all markdown files to a single directory one directory above Knowledge such as ../all\\\_knowledge {#move-all-markdown-files-to-a-single-directory-one-directory-above-knowledge-such-as-dot-dot-all-knowledge}

```sh
    find . -name \*.md -type f -exec mv {} ../all_knowledge \;
```


#### Convert all the files from markdown to org {#convert-all-the-files-from-markdown-to-org}

```sh
        $ find . -name \*.md -type f -exec pandoc  -f markdown -t org -o {}.org {} \;
```

<!--list-separator-->

-  #DONE the script above convert the files but gives them the extension of .md.org while I want .org only so that I can have consistent links. Use the following script instead.

    ```sh
            for md in $(find . -name \*.md -type f)
            do
            echo ${md}
            # echo "${md%.*}"
            pandoc --wrap=preserve -f markdown -t org -o ${md%.*}.org ${md};
            done
    ```

    To convert only one file use

    ```sh
        pandoc -f markdown -t org -o newfile.org original-file.markdown
    ```


#### Remove custom\\\_id properties created by Pandoc for each sections {#remove-custom-id-properties-created-by-pandoc-for-each-sections}

Use vscode's find and replace with regex to remove them easily by

```text
    :PROPERTIES:\n.*:CUSTOM_ID:.*\n.*:END:
```


#### Convert tags to org headlines with keywords. {#convert-tags-to-org-headlines-with-keywords-dot}

Again, use vscode's find and replace with regex to remove them easily by the following.

```text
    .* \[( |x)\].*#(TODO|DONE|HOLD|KILL)
```

and replace it by

```text
    *** $2
```

Note that if a tag is not present in your emacs org-todo-keywords, then you need to convert that one separately so that you can map it to a specific keyword.


#### Add title, author, and org-roam keys {#add-title-author-and-org-roam-keys}

Use the following bash script:

```sh
    for org in $(find . -name \*.org -type f)
    do
        name=$(basename ${org%.*}) # Remove extension and path to file
        title=$(echo $name | tr "-" " ") # Replace dashes with whitespaces
        title=$(echo $title | python3 -c "import sys; print(sys.stdin.read().title())") # Capitalize first letters
        # echo "#+TITLE: "${title}
        (echo "#+ROAM_KEY: "${name} && cat $org) > filename1 && mv filename1 $org # Third line of org file
        (echo "#+AUTHOR: Kasra Darvish" && cat $org) > filename1 && mv filename1 $org # Second line of org file
        (echo "#+TITLE: "${title} && cat $org) > filename1 && mv filename1 $org # First line of org file
    done
```


#### Now you can convert links to section to its correct format in org {#now-you-can-convert-links-to-section-to-its-correct-format-in-org}

Use vscode's find and replace tool to do that, or simply modify them while you encounter them.
swap the `\[\[file:([^\]]*)#([^\]]*)\]\[([^\]\)]*)#([^\]]*)\]\]` with `[[file:$1.org][$3]]`.

To convert all the files use:

```sh
    $ find . -name \*.md -type f -exec pandoc  -f markdown -t org -o {}.org {} \;
```


#### <span class="org-todo done KILL">KILL</span> Converting markdown to org mode with this syntax doesn't convert links at all and all of them are broken. First, I wanted to use the following script but there were complexities including having multiple files of the same name. Anyway, I came up with an idea: {#converting-markdown-to-org-mode-with-this-syntax-doesn-t-convert-links-at-all-and-all-of-them-are-broken-dot-first-i-wanted-to-use-the-following-script-but-there-were-complexities-including-having-multiple-files-of-the-same-name-dot-anyway-i-came-up-with-an-idea}

I can move all my files to a single folder. Then I can use regex to change the wikilinks to markdown links and after that adding org extension to the ones that don't have any extension. Next, using Pandoc I can convert my files to org-mode. Finally using dired and org-roam in emacs I can easily move files to corresponding folders again.

```python
    for f in all_markdown_files:
        for wikilink a [a](a.org) in f:
            find a in all_files
            newlink = os.getcwd() +'/' + a + '.org'
            replace wikilink with newlink
```


#### <span class="org-todo done DONE">DONE</span> the script above convert the files but gives them the extension of .md.org while I want .org only so that I can have consistent links. Use the following script instead. {#the-script-above-convert-the-files-but-gives-them-the-extension-of-dot-md-dot-org-while-i-want-dot-org-only-so-that-i-can-have-consistent-links-dot-use-the-following-script-instead-dot}

```sh
    for md in $(find . -name \*.md -type f)
    do
    echo ${md}
    # echo "${md%.*}"
    pandoc -f markdown -t org -o ${md%.*}.org ${md};
    done
```

To convert only one file use `pandoc -f markdown -t org -o newfile.org original-file.markdown`


## Text Editors {#text-editors}

Refer to [Editors War]({{< relref "editors-war" >}}) for more info.

The result of the table below clearly suggests that I should be using vs code at least for markdown. It doesn't make sense to use emacs for markdown when I already have everything I want in vscode. It's clearly better than obsidian since it's open source.

| Feature/App                  | Obsidian | VS Code | Emacs Markdown  | Emacs Org      |
|------------------------------|----------|---------|-----------------|----------------|
| **Language Related**         |          |         |                 |                |
| Wiki links                   | ✓        | ✓       | ✓               | ✓              |
| Link to other file types     | ✓        | ✓       | ✓ B.            | ✓              |
| link to sections             | ✓        | ✗       | ?               | ✓              |
| Search files to link         | ✓        | ✓       | ✗ A.            | ✗ A.           |
| Embedding notes              | ✓        | ✓       | ✗               | ✓              |
| Tags                         | ✓        | ✓       | ?               | ✓              |
| LaTeX                        | ✓        | ✓       | ✓               | ✓              |
| LateX: Equation numbering    | ✗        | ✗       | ✗               | ✓              |
| Mermaid/Diagram              | ✓        | ✓       | have to install | ✓ C.           |
| Citation/References          |          | ✓       |                 |                |
| Footnotes                    | ✓        | ✓       |                 | ✓              |
| **Editor Related**           | -        | -       | -               | -              |
| Free, Open Source            | ✗        | ✓       | ✓               | ✓              |
| Snippets                     | ✓        | ✓       | ✓               | ✓              |
| Open daily notes w/ template | ✓        | ?       | ?               | ?              |
| Own your files               | ✓        | ✓       | ✓               | ✓              |
| Backlinks                    | ✓        | ✓       | ✗               | ✓              |
| Fuzzy File Switch/Creation   | ✓        | ✓       | ✓               | ✓              |
| Preview/Export to pdf        | pdf      | pdf E.  | html            | latex,pdf,html |
| Automatic link renaming      | ✓        | ✓       | ✗               | ✓ roam         |
| Outline                      | ✓        | ✓       | ✓               | ✓              |
| Mind map                     | ✓        | ✓       | ?               | ✓              |
| Automatic table formatting   | ✓        | ✓       | ✓               | ✓              |
| Daily notes                  | ✓        | ✓       | ?               | ?              |
| Knowledge graph              | ✓        | ✓       | ?               | ✓              |
| Fold/unfold                  | ✓        | ✓       | ✓               | ✓              |
| **Not very important**       | -        | -       | -               | -              |
| Multi cursors                | ✗        | ✓       | ✓               | ✓              |
| Fast                         | ✓        | ✓       | ✓               | ✓              |
| Custom CSS                   | ✓        | ✓       | ?               | ?              |
| powerful text editor         | ✗        | ✓       | ✓               | ✓              |
| Easy                         | ✓        | ✓       | ✓               | ?              |
| Beautiful                    | ✓        | ?       | ?               | ?              |

1.  Emacs org can search for files to link in one directory only, but not in subdirectories which is not good. In Markdown you can't even choose files in the current directory and you have to write the whole thing.

2.  You should use the format `[text](link.org)`. The problem is opening them either in the editor (if supported such as image, pdf) or in system's default app. In emacs, zettlr, and probably other markdown editors I can use `[wikilinks](wikilinks.org)` only for .md files and not other types. For other types, I have to use `[text](link.org)`. In vscode and obsidian though, I can use wikilinks for other file types as well. So I guess it's better to follow emacs paradigm since it's the standard markdown, and probably vscode and obsidian are redesigned to handle this which is not a future-proof feature. The problem is that in vscode I can only open other formats in their default app if they are linked using `[wikilinks](wikilinks.org)`.

3.  I have to save it to a file first as a png. So basically ob-mermaid embeds an image of mermaid in the exported file ~~which is not good quality.~~ You can easily use a pdf file so that you don't lose any quality.

4.  It doesn't include embedded files in enhanced preview, and in the pdf. You only need pdf for your paper summaries because other notes are constantly changing, and in your summaries you don't need to embed anything.

I have 4 choices:

1.  ~~A dedicated app such as [obsidian]({{< relref "obsidian" >}}). Chances are they become proprietary and require subscription but they are usually easy to use. As long as you use a universal syntax, it's fine.~~
2.  A modern text editor such as [vscode]({{< relref "vscode" >}}). These are usualy based on web apps and JS so they can show different file formats and are powerful enough but you are not 100% in control here.
3.  A full text editor such as [emacs]({{< relref "emacs" >}}) or [vim]({{< relref "vim" >}}). You can be sure you always have them but they are not as good looking as the other two options
4.  I can use a combination of apps. For example I can use markdown and write in emacs, and when I want to see the backlinks, I can use [vscode]({{< relref "vscode" >}}).

If you want to have the most power, then emacs can be tweaked completely while vs code is not as configurable as emacs since it is for microsoft.
The easiest and most beautiful: [obsidian]({{< relref "obsidian" >}})
The most configurable, powerful, and hardest: [emacs]({{< relref "emacs" >}})

[vscode]({{< relref "vscode" >}}) and Sublime Text use plugins in a more traditional way. E.g. in Atom packages can change how editor works, while in Sublime Text and VS Code plugins mostly add features on top of how editor works.


### Obsidian {#obsidian}

[{{< relref "obsidian" >}}]({{< relref "obsidian" >}})
Everything is great, but something like org-agenda is missing. Also not as powerful as emacs or vscode when it comes to being a text editor.


### Emacs. Org mode. Org roam {#emacs-dot-org-mode-dot-org-roam}

[{{< relref "emacs" >}}]({{< relref "emacs" >}})
I feel like markdown in emacs is not going to be easy and I have to spend a lot of time finding/writing tools that are already available in [vscode]({{< relref "vscode" >}}) and [obsidian]({{< relref "obsidian" >}}).
Zettelkasten note taking in markdown in emacs: <https://www.eliasstorms.net/zetteldeft/>

Org-mode Workflow Part 3. Zettelkasten with Org-mode by the author of org roam:
<https://blog.jethro.dev/posts/zettelkasten%5C%5Fwith%5C%5Forg/>


### VS Code and extensions {#vs-code-and-extensions}

[{{< relref "vscode" >}}]({{< relref "vscode" >}})

VS Code can easily replace obsidian since it provides all the features and is a more powerful text editor such as:

1.  moving list items up and down updates the item's number while Obsidian can't do that.
2.  when clicking on a todo, it opens the exact line in the corresponding file while obsidian sucks at that.
3.  Snippets and templates are more powerful and I can have placeholders and use tab to move among them when I insert a template.


#### The Problems {#the-problems}

1.  **headings are not bigger than body text**. It can't be fixed apparently.
2.  **Preview/Exporting** is not very good both in terms of beauty, custom CSS, and exporting to pdf easily.
3.  **Opening the monthly note with a keybinding** or a command. I might be able to modify memo for this one since it has daily notes.
4.  ~~Creating a new note and searching for existing note at the same time.~~ I guess one of the extensions can handle this. Yes. you can use VSnotes for that.
    ~~It seems none of the extensions are as complete as Obsidian~~. But I might be able to modify/use multiple extensions to make it happen. Check out the following link to get some idea for doing this. <https://hodgkins.io/vscode-second-brain>


### Zettlr {#zettlr}



### Vim {#vim}

No. It's not as good as obsidian and emacs. Knowledge graph is not available, org-mode and org-agenda are not available either.
Basically it's only a text editor and it can't show any graphical stuff such as pdfs and inline rendered LaTeX.
Also sometimes you should go with your guts, and my gut says Richard Stallman.

The only thing lures me is that vim is faster and easier (both to learn and modify), but if you want easy, then why note vs code?


### Other apps {#other-apps}

-   Typora
-   EverNote
-   Onenote
-   Notable
-   Roam Research
-   Notational Velocity: No. Its UI is terrible and not user friendly at all. Tags are not supported
-   nvALT: No. Same as Notational Velocity, it doesn't autocomplete the wikilinks and tags are not supported.
-   FS Notes: No. Tags don't show up quickly. It doesn't have any awesome feature that Obsidian doesn't already have.
-   Traditional Notebooks


#### Notion.so {#notion-dot-so}

No. It's proprietary. I cannot navigate with keyboard only among tables
I can replicate the feature that every entry of a table is a note for itself here in Markdown and Obsidian just by linking to a note.

<!--list-separator-->

-  Pros

    1.  Beautiful UI
    2.  Calendars to select data
    3.  Databse approach is good where every entry can be opened separately
    4.  You can select a type for each cell of the table and then you can only add the relevant values for that cell
    5.  Spreadsheet like tables where you can compute avg, sum and other functions.

<!--list-separator-->

-  Cons

    1.  Vendor lock-in: I don't own/control my data
    2.  5 MB limit for file attachments
    3.  Universal search function is not good and doesn't find what I want
    4.  Not easy to navigate since it's not completely a text editor and you need to use your mouse eventually at some point
        1.  For example when you are in a table, you can't go to the heading of that page with keyboard


## Mind Map {#mind-map}

use draw.io to draw mind maps and use this [link](https://drawio-app.com/increase-productivity-with-mind-maps-in-draw-io/) to boost your speed when creating mind maps in draw.io


## Handwrite {#handwrite}

There are couple of options but remember that you don't have access to files in any of these applications because the format is proprietary and they can only be opened in ther dedicated apps and the best yo ucan get at least for now is link sharing.

Since you cannot git control these files, it really doesn't matter. You can't back them up because google products like jamboard are not files, and apple doesn't show you the files, but I beleive you can backup microsoft products.

You can use Apple for personal stuff, and Microsoft and Google for research and education.


### Microsoft OneNote {#microsoft-onenote}

1.  Link: No. You can't link to a specific page or section. You can only link to a notebook.
2.  Speed: No. It's very slow to load.
3.  Tool: Yes


### Apple Notes {#apple-notes}

1.  Link: Yes
2.  Speed: Crashes
3.  Tool: No

If it doesn't crash, I will use it.


### Google Jamboard {#google-jamboard}

Use this for collaboration only when you need a whiteboard.

1.  Link: Yes, you have to create a new file everytime.
2.  Speed: Yes
3.  Tool: No


### <span class="org-todo done NO">NO</span> Google Keep {#google-keep}

You don't have access to files to be able to link to them.


### <span class="org-todo done NO">NO</span> Random Free apps on iPad {#random-free-apps-on-ipad}

They usually don't let me to store files on my drive.


## Resources {#resources}

1.  list of apps: <https://github.com/prathyvsh/networked-notebooks>
2.  list of apps: <https://danmackinlay.name/notebook/note%5Ftaking.html>
3.  A Writing Workflow: <https://keleshev.com/my-book-writing-setup/>
4.  Migrating from Obsidian to emacs: <https://notes.huy.rocks/emacs-for-note-taking>
5.  Comparison of [vscode]({{< relref "vscode" >}}) and [emacs]({{< relref "emacs" >}}): <https://www.admiralbumblebee.com/programming/2020/01/04/Six-months-VS-Code.html#scripting>
6.  A good repo about people, articles, and apps for personal knowledge management: <https://github.com/brettkromkamp/awesome-knowledge-management>
