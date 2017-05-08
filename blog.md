# Wordpress Freelance Theme (a conversion from bootstrap freelance theme)

This is the blog/time tracker/musings/problems dealt with for this project.  This is either going to go great, or end very badly.  Fortunately us code monkeys just have to hit the keyboard for awhile and eventually the right stuff comes out.

Movies watched during this project:
(All or parts of)
- Star Wars Empire Strikes Back
- Star Wars Return of the Jedi

## Sunday May 7, 2017

2:15ish start.  

Day 1.  I started working through a sample project from the web last week, and I decided that I actually wanted something that I could use.  So I found a bootstrap theme that I liked, and I decided I was going to turn that into my portfolio site on kevindahlberg.com.  In the process I hope to learn more about php and wordpress and creating my own themes (yay?).  

Started up, and spent most of an hour just getting myself back into the WP world (I've spent the last 2 weeks buried in my solo project).  Had to remember how to start up my wordpress website on my localhost (make sure you start PHP in the right directory!).  I got the code downloaded, and put in all the right spots, and then... nothing worked.  I had a lot of text, but nothing cool.  Then I found a bit of code from the starter project:

``` PHP
<?php echo get_bloginfo('template_directory'); ?>
```

that guy allowed me to source all of my css and jquery (yes, I have to use F-ing jquery.), and JS of course.  It's a little weird to me sourcing jQUery at the bottom of the page, but I guess it's "faster" (the verdict is out on that, but hey, who am I to judge...).

Everything is now in the index.php file.  That's not very wordpressy...

Time to start the ongoing to-do tasks:
- [x] Create header and footer php docs.
- [x] put content into it's own PHP docs.
- [x] Make index.php look all sorts of sexy (i see you standing there, shaking that ass)
- [x] Might wanna set up a git for this...  just saying.
- [x] finish sourcing things correctly

definitely in a coding happy place today.  new problems and new solutions.  Just finished empire strikes back, on to return of the Jedi.

Ok, this PHP stuff is pretty magic.  I just put the stuff in the php file, and then put a "get whatever" statement in the index.  Um... very modular, which is exactly how I like my code to work.

btw, huge resource for putting this thing together has been:

https://www.taniarascia.com/developing-a-wordpress-theme-from-scratch/

ok, I removed stuff from the top, middle and bottom of the site and put them in separate files called header, footer, and content.  Pretty cool.  The ocd code monkey in me wants the content part way more organized, but I think that comes later...

K, i want to a vent sesh on how shitty the stuff added to Jabba the Hut's palace in the new version of Return... but I'd rather be coding.  Lets just say it sucks from a purist standpoint, and part of me died inside when I saw it.  Just no.  Leave it be.  Please...

Going through the tutorial and seeing what's next...

- [x] put PHP in header to make it change dynamically...

that's a pretty cool thing.  basically I can choose where I want to put my "site name" and "tagline" on my page.  Right now It's in my header on this page, I think the logical spot for it is the nav bar, so that might change in the future.  Learning learning learning.  I'm going to tackle putting the nav bar in it's own php doc next I think.

k, maybe not yet.  Though I am learning about the glorified LOOP.

Pages are now showing up on my nav bar instead of the pre-provided links.  That's pretty cool.  I think it'd be easy then to create the different "modules" of my single page site as pages?  and then have them go from the nav bar to each module on the SP site.

the article ends with defining stuff for different pages.  Which is something that I'll tackle later in my design, but right now I just want to make as much as possible SP for this site.  I like me some singles...

second part of the tutorial:
https://www.taniarascia.com/wordpress-from-scratch-part-two/

functions.php - might be the holy grail that I am searching for.

> So, we’re creating our custom function, and adding it in based on action references. Within this file, you can pretty much change or override anything in WordPress.

this, right here is what makes me all sorts of giddy inside.

well, so much for the file structure I learned at prime.  Let's throw it all out the window while we are at it.

first big problem, trying to make the scripts and styles go in the functions folder the way they are supposed to.  in 2 weeks this will be routine, just hafta get there.

3:58 - I'll give myself 2 hours on this, start time was a little weird. 2 / 2 / 2

- [x] properly source scripts and styles


10:00 pm - doing a little coding before crashing.

by the way.  we are working in php... so you need some of these
``` php
<?php
```

i'm feeling a little sourcing coming on...

ok.  the sourcing is kinda working.  I lost the cool navbar-collapse feature, though, which is kinda dissapointing.


- [ ] add post and page types to project (doesn't hurt to have...)
- [ ] source fonts
- [ ] research the standard way for file structure and naming stuff for wordpress.
- [x] fix navbar-collapse

i had to make sure the js was loading in a particular order, which it wasn't.

after it's sourced, you need to put:
``` JavaScript
array (), version, true);
```
that gets it to show up on the bottom on the page.
