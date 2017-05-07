# Wordpress Freelance Theme (a conversion from bootstrap freelance theme)

This is the blog/time tracker/musings/problems dealt with for this project.  This is either going to go great, or end very badly.  Fortunately us code monkeys just have to hit the keyboard for awhile and eventually the right stuff comes out.

## Sunday May 7, 2017

Day 1.  I started working through a sample project from the web last week, and I decided that I actually wanted something that I could use.  So I found a bootstrap theme that I liked, and I decided I was going to turn that into my portfolio site on kevindahlberg.com.  In the process I hope to learn more about php and wordpress and creating my own themes (yay?).  

Started up, and spent most of an hour just getting myself back into the WP world (I've spent the last 2 weeks buried in my solo project).  Had to remember how to start up my wordpress website on my localhost (make sure you start PHP in the right directory!).  I got the code downloaded, and put in all the right spots, and then... nothing worked.  I had a lot of text, but nothing cool.  Then I found a bit of code from the starter project:

'''<?php echo get_bloginfo('template_directory'); ?>

that guy allowed me to source all of my css and jquery (yes, I have to use F-ing jquery.), and JS of course.  It's a little weird to me sourcing jQUery at the bottom of the page, but I guess it's "faster" (the verdict is out on that, but hey, who am I to judge...).

Time to start the ongoing to-do tasks:
- [ ] Create header and footer php docs.
- [ ] But content into it's own PHP docs.
- [ ] Make index.php look all sorts of sexy (i see you standing there, shaking that ass)
- [ ] Might wanna set up a git for this...  just saying.
