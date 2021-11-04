+++
title = "Org Mode"
author = "Kasra Darvish"
draft = false
+++

## Links {#links}

1.  Insert a link: C-c C-l and then choose org: for example
2.  Edit a link: Same as inserting a link
3.  To link to a url use the following syntax: `[[LINK][DESCRIPTION]]`
4.  Link to other file formats: You can simply use the syntax above for urls, but instead of a url, provide the path to a file. You can alternatively use the command `org-insert-link` or keyborad shortcut `spc m l l`. The default keybinding is `C-c C-l`.
    Example: code or audio.
5.  Use `counsel` to insert internal links to headings in the current file/buffer.
6.  Autcompleting the links simply by ?? I don't know yet.
7.  Can I link to a markdown from org and have it backlinked? I can link to whatever file I want, but it will break the knowledge graph.


## Let's write something {#let-s-write-something}

-   item 1
    in order to have a bullet point you can hit space and then \* on a new line
    -   like this
    -


## Headings and Folding {#headings-and-folding}

-   create a new heading/lit item of the same level by using `cmd+enter` or `M+ret` read it as `alt+enter`
-   create a new sub heading by using


### Folding {#folding}

-   use `shift+tab` to fold/unfold all headings at once
-   use `tab` to fold/unfold the heading under the cursor
-   using `M-x clone-indirect-buffer` you can have an indirect buffer that is a twin copy of the current buffer but does not update with the other one. It's very useful to have an outline for a file


#### Level 3 {#level-3}

<!--list-separator-->

-  Level 4

    <!--list-separator-->

    -  Level 5

        <!--list-separator-->

        -  Level 6

            <!--list-separator-->

            -  Level 7

                <!--list-separator-->

                -  Level 8


### Focus mode or narrowing {#focus-mode-or-narrowing}

You can focus a buffer on a subtree by using `C-x n s` or the command `(org-narrow-to-subtree)` which narrows the current buffer to the subtree at point.
You can widen the buffer back or remove narrowing by `C-x n w`


## Text Annotations {#text-annotations}

-   <span class="underline">underline</span>
-   _italic_
-   **bold**
-   `code`
-   `verbatim`
-   ~~stirke~~
-   :tag:


## Embed or include org files in another org file (transclusion) {#embed-or-include-org-files-in-another-org-file--transclusion}



### Why Emacs? {#why-emacs}

Many platforms have a single item clipboard. Emacs has an infinite clipboard.
If you undo a change, and then continue editing, you can't redo the original change. Emacs allows undoing to any historical state, even allowing tree-based exploration of history.
Emacs supports a reverse variable search: you can find variables with a given value.
You can perform structural editing of code, allowing you to make changes without breaking syntax. This works for lisps (paredit) and non-lisps (smartparens).
Many applications use a modal GUI: for example, you can't do other edits during a find-and-replace operation. Emacs provides recursive editing that allow you to suspend what you're currently doing, perform other edits, then continue the original task.


### Some keybindings and commands {#some-keybindings-and-commands}

1.  spc ? shows all the key bindings
2.  spc : or M-x for typing your command
3.  escp goes to command mode. i goes to insert mode
4.  cmd-f activates swiper
5.  C-s activates i-search and after entering your term, you can use C-s to search for next occurences
6.  tramp for ssh
7.  multiple cursor doesn't work or I don't know yet
8.  cmd-l goes to line
9.  cmd-' changes windows
10. cmd-w close a window
11. cmd-t creates new workspace/tab/sessions and you can navigate them with M-1,2,3 each number is one of the workspaces
12. select a region and `C-x` tab for indention. then use H and L
13. horizontal split `spc-w-s`
14. vertical split `spc-w-v`
15. In emacs `C-x` generally refer to global commands, while `C-c` refers to language specific commands.


### Help {#help}

1.  You can see the current value of a variable, any variable, by using the `describe-variable` function, which is usually invoked by typing `C-h v`


### Themes {#themes}

I am using chemacs which is a config profile switcher that allows me to select from different configs <https://github.com/plexus/chemacs>
use the following command to choose other configs:
emacs --with-profile prime


### Files {#files}

1.  spc f for anything related to files
2.  spc spc for opening files in all subdirectories.
3.  spc f f or spc . to open directory to select or create a file
4.  spc f r shows a list of recent files (files recent)
5.  spc f p to open config files (packages, init, config)
6.  spc f l to locate a file just by its name. Much like cmd-o in Obsidian.


### Navigation {#navigation}

1.  alt and left/right arrows: jump over 1 word.
2.  alt and up/down arrows: swap two lines.
3.  fn and left/right arrows: jump to the beginning or the end of the file.
4.


### Text Edit {#text-edit}


#### copy/cut/paste {#copy-cut-paste}

1.  cut a peice of text: You can just delete the piece you want and it will be cut but only using emacs keys. Amazing!
2.  If you want to select a region/text and then cut it: C-spc to start highlighting, and then press cmd-x or d to cut.
3.  M-del or C-del to cut the previous word.
4.  M-d for cutting the next word.
5.  cmd-c to copy a text
6.  cmd-v to paste a text
7.  To edit multiple items at once, select the word first and then hit R to select all occurences. Then either add characters or to completely change it first use C-del or M-del to delete sected word and then start typing (isntead of selecting it and then start typing)


#### Mark/highlight region/text {#mark-highlight-region-text}

In doom emacs you could use `C-M-SPC` to select text. In regular emacs you could use `C-SPC` to do that.
You can then add enclosing parantheses or other things.


#### Tricks {#tricks}

Read this [Nifty Tricks](https://www.emacswiki.org/emacs/EmacsNiftyTricks).

1.  use `c s ( [` to change a matching parantheses to a matching bracket.
2.  to change inside a matching parantheses, use `f ( l` to find the starting '(' and then move one character so that you are inside it. Then use er/expand region command to select evreything inside. Then use `d` to cut and `i` to go to insert mode and start writing.


#### Uppercase/lowercase, capitalize {#uppercase-lowercase-capitalize}

1.  Select a region by `C-M-SPC` and then run the command `upcase-word` or `upcase-region` to make a region all uppercase letter.
2.  Do the same and run the command `downcase-word` or `downcase-region` to make a region all lowercase letter.


#### Column Editing {#column-editing}

```nil
C-x SPC
down down
C-x r t insert-what-you-want RET
```


### Buffer {#buffer}

1.  spc b for anything related to buffers.
2.  spc b ] for next buffer and [ for previous buffer
3.  spc b B to list all buffers
4.  spc b b to list workspace buffers (Doesn't list messages, scratch, other unnecessary stuff)
5.  spc b k kills the current buffer
6.  spc b i to list all buffers in a window instead of promp so that you can either open them or kill multiple of them at once.
7.  To delete buffers from the list mention in previous item, just press d on each line you want to kill. Then afte ryou selected all of the buffers you want to delete, press x. Press u for undo selection on each line.


### Integrated Terminal {#integrated-terminal}

In order to open a file from an integrated terminal such as vterm you can use emacsclient and provide -n flag which means no-wait.

```bash
emacsclient -n file.txt
```

You can then close the terminal if you want and the file stays alive.


### Python: {#python}

1.  code completion
2.  multiple cursors
3.


### Keybindings {#keybindings}

-   use `C-h b` (help binding) in order to see all of the keybindings in the current buffer. This is useful when you find some keybindings for a task, but you want to remap it, so you can search the keybindings to find it and then remap the command.


### Keys {#keys}

use `C-h k` and then hit the key on your keyboard for which you want to see the description.


### Tramp {#tramp}

-   to terminate or abort a running command use C-c C-c
-   to open vterm at current file (whether local or over ssh) use +vterm/toglle command or M-spc o t


#### <span class="org-todo done DONE">DONE</span> make tramp work with vterm, the regular shell is not good enough. I can ssh to server separately with vterm, but I don't like it. I want to be able to open and close terminal whenever I want. {#make-tramp-work-with-vterm-the-regular-shell-is-not-good-enough-dot-i-can-ssh-to-server-separately-with-vterm-but-i-don-t-like-it-dot-i-want-to-be-able-to-open-and-close-terminal-whenever-i-want-dot}


#### <span class="org-todo done DONE">DONE</span> make tramp work with screen. This might be solved if I can use vterm. {#make-tramp-work-with-screen-dot-this-might-be-solved-if-i-can-use-vterm-dot}


### org mode + roam {#org-mode-plus-roam}

-   press tab to fold/unfold subtress and shift-tab to fold/unfold the whole document
-   C-<ret> creates a new item of the same level (heading, item, or ...) even if you are on a heading and there are bunch of stuff below it, this key cord makes a new heading after all of the stuff
-   M-l makes an item 1 level lower, similarly M-h for higher
-   Check this file for more details: [basics of org mode]({{< relref "org-mode" >}})
-   How to write latex and code in org mode?
-   Isn't it easier to use markdown for note taking?
-   To move one line/section up or down use shift-alt-up and shift-alt-down respectively

<!--list-separator-->

- <span class="org-todo done KILL">KILL</span>  this is my task


### Multiple Cursors {#multiple-cursors}

Let's say I want to change all my obsidian references to emacs.

Obsidian is too good and easy to be true.
My text editor is obsidian.


### Great packages {#great-packages}

1.  Magit: the best git client in the known universe
2.  expand-region:
3.  projectile: powerful project navigation/interaction package
4.  [smartparens](https://github.com/Fuco1/smartparens) for dealing with expressions and matched delimiters (e.g. brackets and parantheses)
5.  which-key that shows you possible keybindings when you type a partial keybinding.
6.  [undo-tree](https://elpa.gnu.org/packages/undo-tree.html): A powerful way to navigate your editing history
7.  [yasnippet](https://github.com/joaotavora/yasnippet) for creating custom snippets and templates much like in vscode.
8.  [multiple-cursors](https://github.com/magnars/multiple-cursors.el)
9.  [org-ref](https://github.com/jkitchin/org-ref) for citations


### Some good config/distributions of Emacs {#some-good-config-distributions-of-emacs}

1.  [Spacemacs](https://github.com/syl20bnr/spacemacs) which is a combination of emacs and vim.
2.  [Purcell](https://github.com/purcell/emacs.d)
3.  [Prelude](https://github.com/bbatsov/prelude)
4.  [emacs rocks config](https://github.com/magnars/.emacs.d) by Magnar Sveen
5.  [Remacs](https://github.com/remacs/remacs) which is emacs ported to rust instead of C.
6.  [Scimax](https://github.com/jkitchin/scimax) an emacs starter kit for scientists and engineers for reproducible research and publishing, with a focus on LaTeX and org-mode.
7.  [Graphene](https://github.com/rdallasgray/graphene) for woo users of GUI IDEs like Sublime.
8.  [Aquamacs](http://aquamacs.org/) and their [github page](https://github.com/aquamacs-emacs/aquamacs-emacs). This is similar to the previous one but better for macOS users.
9.  [configs of the owner of org-roam](https://github.com/jethrokuan/.emacs.d/)


#### Doom {#doom}

1.  private/default binds `SPC u` as an alternative to `C-u`. If you want to disable evil hijacking C-u and C-d, do this before evil loads (ie. in private/xarthurx/init.el):
2.  To install a package from (M)ELPA, first write `(package! example-package)` in the [packages.el](~/.doom.d/packages.el) file and just reload doom emacs.


### Make Emacs better {#make-emacs-better}


#### <span class="org-todo done DONE">DONE</span> Add tab support to emacs so I can see all open buffers. {#add-tab-support-to-emacs-so-i-can-see-all-open-buffers-dot}


#### <span class="org-todo done KILL">KILL</span> Read this link [doom emacs repo](https://github.com/hlissner/doom-emacs/issues/2578) about tramp crashing {#read-this-link-doom-emacs-repo-about-tramp-crashing}


### Resources {#resources}

1.  <http://www.jesshamrick.com/2012/09/10/absolute-beginners-guide-to-emacs/>
2.  <https://www.gnu.org/software/emacs/refcards/pdf/dired-ref.pdf>
3.  <https://blog.insightdatascience.com/emacs-for-data-science-af814b78eb41>
4.  [Emacs rocks](http://emacsrocks.com/)
5.  <https://tecosaur.github.io/emacs-config/config.html>
6.  <https://tuhdo.github.io/emacs-tutor.html>
7.  If you want to start from scratch, you can use [better deafults](https://git.sr.ht/~technomancy/better-defaults).
8.  A good article about [why you should by into the emacs platform](https://two-wrongs.com/why-you-should-buy-into-the-emacs-platform#fn.2).
9.  A [glossary](https://two-wrongs.com/emacs-for-humans-glossary.html) for emacs.
10. What features every editor must have and how emacs does it on [quora](https://www.quora.com/What-do-you-do-with-emacs/answer/Roy-Raj-9?ch=10&share=ba37e024) which is also availbe on [this link](http://www.howardism.org/Technical/Emacs/why-emacs.html#fn.3).
11. A good [video](https://www.youtube.com/watch?v=B6jfrrwR10k&t=2193s) showing some stuff in emacs by [Howard Abrams](http://www.howardism.org/).
12. A tutorial for emacs [calculator](https://vimeo.com/14742598).
13. Emacs as a [python IDE](http://www.jesshamrick.com/2012/09/18/emacs-as-a-python-ide/).
14. A youtube [toturial](https://www.youtube.com/playlist?list=PLNJWazvift25KnHDwYlhwrrgr60wtpQOB) to learn emacs from beginning.
15. Yet another [intro to emacs](https://www.youtube.com/embed/B6jfrrwR10k)
16. [Why somethings should be difficult to use?](https://www.wired.com/2015/02/on-the-joy-of-mastery/)
17. [Emacs Nifty Tricks](https://www.emacswiki.org/emacs/EmacsNiftyTricks)
18. [Emacs Crash Course](https://www.emacswiki.org/emacs/EmacsCrashCourse)


## Tags and getting things done {#tags-and-getting-things-done}


### You can use getting things done tags simply by creating a new heading and use of the specified tags such as: {#you-can-use-getting-things-done-tags-simply-by-creating-a-new-heading-and-use-of-the-specified-tags-such-as}


#### <span class="org-todo todo TODO">TODO</span> do this {#do-this}


#### <span class="org-todo todo PROJ">PROJ</span> eager {#eager}


#### <span class="org-todo todo STRT">STRT</span> Tasks that I have started. I'm reading a paper {#tasks-that-i-have-started-dot-i-m-reading-a-paper}


#### <span class="org-todo todo WAIT">WAIT</span> Tasks that require something else from someone else. image segmentation {#tasks-that-require-something-else-from-someone-else-dot-image-segmentation}


#### <span class="org-todo todo HOLD">HOLD</span> Tasks that are on hold. email from ED {#tasks-that-are-on-hold-dot-email-from-ed}


#### <span class="org-todo done DONE">DONE</span> Taks that are finished. Obsidian config {#taks-that-are-finished-dot-obsidian-config}


#### <span class="org-todo done KILL">KILL</span> Tasks that are canceled. make emacs perfect {#tasks-that-are-canceled-dot-make-emacs-perfect}


#### <span class="org-todo todo ___">[?]</span> I don't know {#i-don-t-know}


#### <span class="org-todo todo TODO">TODO</span> you can specify deadlines by typing the following or simply use `C-c C-d` and then select a date. {#you-can-specify-deadlines-by-typing-the-following-or-simply-use-c-c-c-d-and-then-select-a-date-dot}


#### <span class="org-todo todo TODO">TODO</span> You can schedule tasks by typing the following or simply use `C-c C-s` and the select a date. {#you-can-schedule-tasks-by-typing-the-following-or-simply-use-c-c-c-s-and-the-select-a-date-dot}


### You can change these tags simply by `shift+left or right arrow` {#you-can-change-these-tags-simply-by-shift-plus-left-or-right-arrow}


### Using `C-c C-t` you can change the states {#using-c-c-c-t-you-can-change-the-states}


### what tags do I need/have? {#what-tags-do-i-need-have}


### <span class="org-todo done DONE">DONE</span> Create a file for each tag? Or create a file called todo just to put the stuff that I need to do but I don't know where to put? I can use short-term-memory for that, right? yes! {#create-a-file-for-each-tag-or-create-a-file-called-todo-just-to-put-the-stuff-that-i-need-to-do-but-i-don-t-know-where-to-put-i-can-use-short-term-memory-for-that-right-yes}


### Do we have tags or something like that :tags: ? {#do-we-have-tags-or-something-like-that-tags}

Every headline can contain a list of tags; they occur at the end of the headline. Tags are normal words containing letters, numbers, ‘\_’, and ‘@’. Tags must be preceded and followed by a single colon, e.g., ‘:work:’. Several tags can be specified, as in ‘:work:urgent:’. Tags by default are in bold face with the same color as the headline. :tags:


### Do we have #tags as well? {#do-we-have-tags-as-well}


## Get The Following Done <code>[2/3]</code> <code>[66%]</code> {#get-the-following-done}


### <span class="org-todo done DONE">DONE</span> figure out cut {#figure-out-cut}


### <span class="org-todo done DONE">DONE</span> why headings don't look different DEADLINE: <span class="timestamp-wrapper"><span class="timestamp">&lt;2020-12-28 Mon&gt;</span></span> {#why-headings-don-t-look-different-deadline}

This is done by a package called org-bullets. However, in doom emacs you can easily use org +pretty in init.el


### <span class="org-todo todo TODO">TODO</span> Mind map based on the headings same as in Obsidian {#mind-map-based-on-the-headings-same-as-in-obsidian}


## Commands {#commands}

1.  You can use shift-up for increasing date by 1 day and shift-down for decreasing it if you are inside the date < > otherwise it changes the priority.
2.  shift-right and shift-left changes the type of the item: TODO, DONE, WAIT, STRT, PROJ, HOLD, KILL


## Something {#something}


### <span class="org-todo todo TODO">TODO</span> Use shift to select text in org mode and another key to change priority and task {#use-shift-to-select-text-in-org-mode-and-another-key-to-change-priority-and-task}


## check boxes <code>[3/3]</code> <code>[100%]</code> {#check-boxes}

-   [X] cut paste with cmd
-   [X] headings are different

tree


## Code blocks in org mode {#code-blocks-in-org-mode}

1.  Use the headings shown in example below to write a code inside org file. Alternatively, you could type `<s` and then hit tab to automatically inser t a code block.
2.  To run the code use: C-c C-c
3.  For python you have to use `RET` to see the results, otherwise it always says : None


### Example {#example}

```python
return 'Hello Emacs and org mode!'
```


### LaTeX {#latex}

-   It's perfect and I can have equation numbering as well.
-   You don't even need to add the $ sign dude.
-   If you hit enter in normal mode when you are inside a latex part, it renders it. How cool is that?

Let's try an inline math first:
\\(x^2 + y^2 =1\\).

Let's try it without $ sign:

\begin{equaiton}\label{eq:org}
p(a \vert b) = \frac{p(a,b)}{p(b)}
\end{equaiton}

Can I refer to this equation with \ref{eq:org}?

Now, let's try an elaborate formula with number.

\\[\begin{equation}\label{my-eq}
    e = mc^2
\end{equation}\\]

in equation \\(\ref{my-eq}\\) we have einstein.


### Figures and Graphics {#figures-and-graphics}

You have to options to insert and link to graphs in your org files.

<!--list-separator-->

-  Using latex

    \begin{figure}[ht]
    \centering
    \includegraphics[width=1.0\columnwidth]{/Volumes/GoogleDrive/My Drive/Apps-Storage/Prime/BrainPrime/Resources/Research/Paper-Summary-Figures/Variational-Sequence-Labelers.png}
    \caption{VSLs}
    \label{fig:vsls}
    \end{figure}

    Then you can link to it by \\(\ref{fig:vsls}\\).

    Using this method results in a correct numbering of figures while in the next mehtod it's a bit harder.

<!--list-separator-->

-  Using org-ref

    You can simply link to graph [1](#orgb21102b) by org's link syntax which is `[[figure's label][custom name]]`.

    You can easily add the graph by the following syntax.

    <a id="orgb21102b"></a>

    {{< figure src="/ox-hugo/Variational-Sequence-Labelers.png" >}}


### Citations and org-ref {#citations-and-org-ref}

you can simply use `org-ref-helm-insert-cite-link` or `C-c ]` to search for the citation you want to add.


### Markdown {#markdown}

```markdown
$x_2^2 + x_1^2 =1$
```


## Mermaid and diagrams {#mermaid-and-diagrams}

</ox-hugo/deleteme.pdf>


## Export {#export}

There are packages prefixed with ox (org export).

-   ox-twbs: export a good looking html.
-   ox-gfm: export to github flavored markdowon
-   Use `C-c C-e` to see the export menu


### PDF {#pdf}

When exporting to pdf thorugh latex using command `org-latex-export-to-pdf`, it deletes all extra intermediary files (aux, log, etc) by itself.


### HTML {#html}

Use the command `org-html-export-to-html`.
This is better than latex and is more readable.


### Beamer {#beamer}

use a package called ox-beamer to make presentation-like pdfs.


## Tables {#tables}

-   To create a table just type `| some | data |RET |- tab`

| data | Some |
|------|------|
| 12   | hi   |
| 34   | bye  |
|      |      |

-   Use `shift-right` to swap a cell with the cell in its right.
-   Use `M-right` to move a column to right.


### <span class="org-todo todo TODO">TODO</span> I have to find a way to let me have tables not go to next line. {#i-have-to-find-a-way-to-let-me-have-tables-not-go-to-next-line-dot}


## Org-Agenda {#org-agenda}

1.  You have to add files to org-agenda-files so that tasks can be shown there. To do so use `C-c [`. You can also remove files from org-agenda-files by `C-c ]`


### <span class="org-todo todo TODO">TODO</span> how to use org-agenda and calendar for scheduling and time tracking? {#how-to-use-org-agenda-and-calendar-for-scheduling-and-time-tracking}


### <span class="org-todo todo TODO">TODO</span> how to use habit tracker of org mode? {#how-to-use-habit-tracker-of-org-mode}


### <span class="org-todo done DONE">DONE</span> in order to add closed date when you mark a task as DONE or KILL, you can add `(setq org-log-done 'time)` to your config files. {#in-order-to-add-closed-date-when-you-mark-a-task-as-done-or-kill-you-can-add--setq-org-log-done-time--to-your-config-files-dot}


## Zettelkasten in org mode {#zettelkasten-in-org-mode}

The following packages are available to help you

1.  [org-zettelkasten](https://github.com/l3kn/org-zettelkasten) which is not maintained anymore
2.  [org-roam](https://github.com/org-roam/org-roam) which is my favorite so far. Their [website](https://www.orgroam.com/).
3.  [org-brain](https://github.com/Kungsgeten/org-brain): I don't like this one. Very ugly.
4.  [zetteldeft](https://github.com/EFLS/zetteldeft)


## Org-Roam {#org-roam}


### You can have automatic file renaming using org-roam. For that you only need to change the title of the file you want to rename. {#you-can-have-automatic-file-renaming-using-org-roam-dot-for-that-you-only-need-to-change-the-title-of-the-file-you-want-to-rename-dot}

Change the title, but also use `M-x rename-file` and that would update the org-roam database and all the backlinks.


### <span class="org-todo done DONE">DONE</span> figure out why org-roam graph doesn't work? {#figure-out-why-org-roam-graph-doesn-t-work}

It makes the graph as SVG file, so the problem is not with org-roam but rather doom emacs or grpahviz that makes the graph. It can open inkspace svg files.


#### You can use org-roam-server to see the knowledge graph. To do so just run the command org-roam-server-open which you defined that is different from org-roam-server-mode because you have to disable smart-parens since they have conflict. After running this command you can open a tab in your browser with this url <http://127.0.0.1:8080/> and see your graph. {#you-can-use-org-roam-server-to-see-the-knowledge-graph-dot-to-do-so-just-run-the-command-org-roam-server-open-which-you-defined-that-is-different-from-org-roam-server-mode-because-you-have-to-disable-smart-parens-since-they-have-conflict-dot-after-running-this-command-you-can-open-a-tab-in-your-browser-with-this-url-http-127-dot-0-dot-0-dot-1-8080-and-see-your-graph-dot}


### <span class="org-todo todo TODO">TODO</span> change the format of captured files to not use dates. {#change-the-format-of-captured-files-to-not-use-dates-dot}


### [Introduction to org-roam by its author](https://blog.jethro.dev/posts/introducing%5Forg%5Froam/) {#introduction-to-org-roam-by-its-author}


## References {#references}

1.  A great [intro to org mode](https://www.youtube.com/watch?v=SzA2YODtgK4) by Harry Schwartz. Also check his [dot files and emacs config](https://github.com/hrs/dotfiles).
2.  A list of talks from [EmacsNYC](https://emacsnyc.org/videos.html).
3.  [Emacs rocks](http://emacsrocks.com/)
4.  The ultimate guide to [organize your life in plain text with org](http://doc.norang.ca/org-mode.html).
5.  Citation in emacs org mode using [org-ref](https://github.com/jkitchin/org-ref).
6.  A short read on [productivity with org mode](https://www.badykov.com/emacs/2018/08/26/be-productive-with-org-mode/).
7.  [Writing PhD thesis in org mode](https://write.as/dani/writing-a-phd-thesis-with-org-mode#fnr.1)
8.  [org tutorials](https://orgmode.org/worg/org-tutorials/index.html)
9.  [some org mode features you may not know](https://bzg.fr/en/some-emacs-org-mode-features-you-may-not-know/)
