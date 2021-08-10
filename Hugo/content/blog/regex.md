+++
title = "Regex"
author = ["Kasra Darvish"]
draft = false
+++

## Basics {#basics}

Use this [website](https://regexr.com/) interactively to learn.
Use this [website](https://regex-generator.olafneumann.org/) to generate regular expressions


### Exclude something {#exclude-something}

Use `[^something]` to exclude some patterns.


### Include something {#include-something}

Similar to excluding but `[something]`.


#### Include one or another {#include-one-or-another}

`[one|another]`


### Repeats {#repeats}

1.  `*` 0 or more of something
2.  `+` 1 or more of something


#### Some Characters {#some-characters}

1.  `.` Everything except new line.

in or der to search for `[](.org)` you need to write `\[\[.*\]\]`.
Let's say you want to keep the content between the brackets. Then you need to use capture groups and instead you add a pair of parantheses which acts as a group and then you can reference to it.
`\[\[(.*)\]\]`
Then you can reference to it by `$1`. `$0` is the whole pattern you searched for. So if you replace your search with $0 it basically doesn't change anything.


### Example {#example}

You want to convert `[anything](anything.org)` to `[anything](anything.md)`. you can simply search for `\[\[([^\]]*)\]\]` and then replace it by `[$1]($1.md)` since you only have 1 capture group.

We have to exlude bracket characters by `[^\]]*` which means everything except `]`, `[` can be repeated unlimited in the group 1 to avoid selecting something lik `[anv](anv.org) blah blah [bcd](bcd.org)`.
`\[\[([^\]]*)\]\]`
