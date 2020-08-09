# Articles of Unity WordPress concerns
This is the source code of the articlesofunity.org website built on WordPress.

Please see any further readme files inside plugin or theme folders for specifics
if they exist there.

## Why is it in WordPress's root?
We are using WordPress to power the website at the moment and we want to leave
open the possibility of hacking away at certain WordPress files themselves. For
now we are simply tracking our inclusion of a few plugins and also the theme.

## Installation

Installing and running a WordPress site is beyond the scope of this readme, but
that is what you will probably want to do to contribute in a meaningful way. I'd
recommend the free tool called [Local](https://localwp.com), but there's also a
docker-compose workflow.

## Development with [Local](https://localwp.com)

Once you have Local installed and WP up and running, you'll want to locate the
root of your WP app. When using Local, that'd be something like:

```
<path to Local>/Local Sites/<your_unity_2020_name>/app/public
```

In any case you should be looking at files/folders with these names:

- index.php
- license.txt
- readme.html
- wp-activate.php
- wp-admin/
- (etc...)

Once you are inside that folder, you'll want to carefully merge in the repo. One
way to do this is to use the following steps:

```
# initialize an empty repository
$ git init

# add this repo as a remote
$ git remote add origin https://github.com/unity-2020/articlesofunity.org-wordpress.git

# fetch all the branches
$ git fetch

# checkout master
$ git checkout master
```

When you do this final step, you'll get an error from git explaining that certain files will be overwritten. You can now add each file to staging. Something like this for example:

```
$ git checkout master
    error: The following untracked working tree files would be overwritten by
    checkout:
      wp-content/plugins/index.php
      wp-content/themes/index.php
    Please move or remove them before you switch branches.
    Aborting

$ git add wp-content/plugins/index.php 
    warning: CRLF will be replaced by LF in wp-config-sample.php.
    The file will have its original line endings in your working directory

$ git add wp-content/themes/index.php 
```

Now you can checkout a temporary branch, commit the changes, and finally checkout master

```
$ git checkout -b temp
    Switched to a new branch 'temp'

$ git commit -m WIP
    [temp (root-commit) 3595d0d] WIP
    4 files changed, 171 insertions(+)
    create mode 100644 wp-content/plugins/index.php
    create mode 100644 wp-content/themes/index.php

$ git checkout master
    Branch 'master' set up to track remote branch 'master' from 'origin'.
    Switched to a new branch 'master'
```

If you want, you can now apply the old files to the new ones in case there were
important differences between them. Though we may not accept these changes
upstream. So I don't recommend this, but you could...

```
$ git cherry-pick 3595d0d -n
    error: could not apply 3595d0d... WIP
    hint: after resolving the conflicts, mark the corrected paths
    hint: with 'git add <paths>' or 'git rm <paths>'
```

Instead, it is probably simpler to leave the temp branch alone in case you want to restor it later. Or just remove it entirely:

```
$ git branch -D temp
```

This should leave all your other files in tact.

## Development with [docker-compose](https://docs.docker.com/compose/)

First, fork this repo into your own Github account.

Then, clone your repo and fire up the stack with `docker-compose`:

```
$ git clone https://github.com/<your github username>/articlesofunity.org-wordpress.git
$ cd articlesofunity.org-wordpress
$ docker-compose up -d
$ open http://localhost:8080
```

The first time you `docker-compose up`, two things will happen:
1. WP will populate your checkout directory with an actual Wordpress install
2. You'll see the WP first-time setup UI in your browser (this will also happen
   anytime you delete the `mysql` volume)

Tracking the upstream repo and the rest of the development workflow is beyond
the scope of this document, but the
[Syncing a fork](https://docs.github.com/en/github/collaborating-with-issues-and-pull-requests/syncing-a-fork)
and [Github Flow](https://guides.github.com/introduction/flow/) pages should be
helpful for the uninitiated!

## Development
If you add a file or folder that is not housed inside a template or in a plugin
that is already under source control, you'll have to edit the .gitignore to
allow it because we ignore everything by default.

For example, if you change a file in the root called `wp-load.php`, and you want
that change included in this repo, you'll have to add the following to
`.gitignore`:

```
!wp-load.php
```

If you add a new plugin called `my-new-plugin`, you'll need to add the following
to `.gitignore`:

```
!wp-content/plugins/my-new-plugin
```

Same with themes.

All plugins and themes should contain their own `.gitignore` files if anything
needs to be ignored within those folders.
