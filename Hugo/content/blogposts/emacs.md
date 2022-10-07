+++
title = "Emacs"
author = ["Kasra Darvish"]
draft = false
+++

## Pros {#pros}

1.  org mode
2.  extensible
3.  Powerful text editing capabilities
4.  Org agenda is really good
5.  Future proof


## Cons {#cons}

1.  Emacs is single-threaded so a buggy plugin can freeze your emacs process.
2.  Not very fast


## Learn {#learn}

To search and open a file in all subdirectories from the current directory use Find file from here command or `spc+f+F`.


#### <span class="org-todo todo TODO">TODO</span> how to open files in system's default app form emacs? {#how-to-open-files-in-system-s-default-app-form-emacs}


## General Packagaes {#general-packagaes}

1.  wc-mode to give you number of words in the file.
2.  writeroom-mode for zen mode writing.
3.  Web browser in emacs: <https://www.emacswiki.org/emacs/CategoryWebBrowser>


## Coding {#coding}


### Features {#features}


### Packages {#packages}

---


## Org-mode {#org-mode}

[take notes in org with sacha](https://sachachua.com/blog/2008/01/outlining-your-notes-with-org/)


### Org-mode Packages {#org-mode-packages}

1.  [mind map or outline similar to obsidian](https://github.com/the-ted/org-mind-map)


### Paper Reading and Literature Review {#paper-reading-and-literature-review}

![](paper-reading-emacs.png)
Zotero --> org-roam-bibtex --> org-roam --> org-mode
use the following packages for research in emacs:

1.  org-noter, org-noter-create-skeleton: annotate pdfs
2.  org-capture, pdf-tools, org-roam-server,
3.  org-agenda, org-super-agenda: for habbit tracking

---


## Org-roam {#org-roam}

The org-roam-db (database) is located at `~/.doom-emacs/.local/opt/org-roam.db`
if you want to use org-roam version 1, you can simply delete the database. close the emacs. Open it again and run `M-x org-roam-db-build-cache`.
If in your init file you had org +roam2, you need to change it to +roam and run `doom sync` for changes to take effect.


## Markdown {#markdown}

<https://jblevins.org/projects/markdown-mode/> or <https://github.com/jrblevin/markdown-mode>


### Packagaes {#packagaes}


#### Preview {#preview}

<https://wikemacs.org/wiki/Markdown#Live%5C%5Fpreview%5C%5Fas%5C%5Fyou%5C%5Ftype>
<https://stackoverflow.com/questions/8828853/is-there-a-way-to-look-at-a-rendered-website-from-within-emacs>
<https://stackoverflow.com/questions/36183071/how-can-i-preview-markdown-in-emacs-in-real-time/36189456>

1.  grip-mode: It provides a really good live preview in a web broswer. I prefer it to be in the emacs. The problem is that it's limited to some amount of request per hour since it's using github.
2.  gh-md: No live update


## Doom Emacs {#doom-emacs}

But before you doom yourself, here are some things you should know:

1.  Don't forget to run 'doom sync', then restart Emacs, after modifying
    ~/.doom.d/init.el or ~/.doom.d/packages.el.
    This command ensures needed packages are installed, orphaned packages are
    removed, and your autoloads/cache files are up to date. When in doubt, run
    'doom sync'!
2.  If something goes wrong, run `doom doctor`. It diagnoses common issues with
    your environment and setup, and may offer clues about what is wrong.
3.  Use 'doom upgrade' to update Doom. Doing it any other way will require
    additional steps. Run 'doom help upgrade' to understand those extra steps.
4.  Access Doom's documentation from within Emacs via 'SPC h d h' or 'C-h d h'
    (or 'M-x doom/help')

Have fun!


## References {#references}

1.  [why emacs is better and Doom Emacs config](https://tecosaur.github.io/emacs-config/config.html)
