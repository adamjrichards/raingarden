<?php

namespace raingarden\rg_static_pages;

$the_html = "
##ul class='rgcafe taxonomy level_1' id='the_taxonomy_index'>
##!-- level 2 -->
	##li class='rgcafe taxonomy level_1' id='the_taxonomy_index_header'>
		##h1 class='rgcafe taxonomy level_1' id='the_taxonomy_index'>RGCafe Taxonomy##/h1>
		##p class='rgcafe taxonomy descriptions level_1 blur' id='rgc_ind'>Taxonomy: What a surprised Italian says when he gets a bill from the government##/p>
		##ul class='rgcafe taxonomy level_2' id='the_taxonomy_index_list'>
		##!-- level 3 -->
			##li class='rgcafe taxonomy level_2 journal' id='the_journal_index_link'>
				##h2 class='rgcafe taxonomy level_2 journal' id='the_humans_index_header'>The Journal##/h2>
				##p class='rgcafe taxonomy descriptions level_2 blur' id='jnl_hdr'>To me, “blog” sounds like something you do in the bathroom. I have resisted “blogging” for years, because 'blog' is one of the few words in the English language which always has cooties. This is my journal, thank you. You can find things through the taxonomic specificatons of the following, yo.##/p>
				##ul class='rgcafe taxonomy level_3 journal_entries' id='the_journal_link_list'>
					##li class='rgcafe taxonomy level_3 journal_entries' id='the_journal_entries_index_link'>
						##h3 class='rgcafe taxonomy level_3 journal_entries' id='the_journal_entries_index_header'>Journal Entries##/h3>
						##p class='rgcafe taxonomy descriptions level_3 blur' id='jnl_ind'>##/p>
						##ul class='rgcafe taxonomy level_4 journal_entries closed' id='the_journal_entries_link_list'>
							##li class='rgcafe taxonomy level_4 journal_entries odd' id='journal_entries_latest' onmouseover='focus_the_description( 'jnl_ltw' )' onmouseout='blur_the_description( 'jnl_ltw' )'>
								##h4 class='rgcafe taxonomy level_4 journal_entries'>Latest Work##/h4>
								##p class='rgcafe taxonomy descriptions level_4 blur' id='jnl_ltw'>This is my latest post, not my Last Post, which is a tune I will never hear. If you have to direct the hordes to my most recent publication, send them here, and we will try to accommodate them.##/p>
							##/li>
							##li class='rgcafe taxonomy level_4 journal_entries even' id='journal_entries_dates' onmouseover='focus_the_description( 'jnl_dat' )' onmouseout='blur_the_description( 'jnl_dat' )'>
								##h4 class='rgcafe taxonomy level_4 journal_entries'>By Date##/h4>
								##p class='rgcafe taxonomy descriptions level_4 blur' id='jnl_dat'>##/p>
							##/li>
							##li class='rgcafe taxonomy level_4 journal_entries odd' id='journal_entries_categories' onmouseover='focus_the_description( 'jnl_cat' )' onmouseout='blur_the_description( 'jnl_cat' )'>
								##h4 class='rgcafe taxonomy level_4 journal_entries'>By Categories##/h4>
								##p class='rgcafe taxonomy descriptions level_4 blur' id='jnl_cat'>##/p>
							##/li>
							##li class='rgcafe taxonomy level_4 journal_entries even' id='journal_entries_titles' onmouseover='focus_the_description( 'jnl_tit' )' onmouseout='blur_the_description( 'jnl_tit' )'>
								##h4 class='rgcafe taxonomy level_4 journal_entries'>By Titles##/h4>
								##p class='rgcafe taxonomy descriptions level_4 blur' id='jnl_tit'>##/p>
							##/li>
							##li class='rgcafe taxonomy level_4 journal_entries odd' id='journal_entries_subsites' onmouseover='focus_the_description( 'jnl_sub' )' onmouseout='blur_the_description( 'jnl_sub' )'>
								##h4 class='rgcafe taxonomy level_4 journal_entries'>By Subsite##/h4>
								##p class='rgcafe taxonomy descriptions level_4 blur' id='jnl_sub'>##/p>
							##/li>
							##li class='rgcafe taxonomy level_4 journal_entries even' id='journal_entries_pages' onmouseover='focus_the_description( 'jnl_pgs' )' onmouseout='blur_the_description( 'jnl_pgs' )'>
								##h4 class='rgcafe taxonomy level_4 journal_entries'>By Pages##/h4>
								##p class='rgcafe taxonomy descriptions level_4 blur' id='jnl_pgs'>##/p>
							##/li>
							##li class='rgcafe taxonomy level_4 journal_entries odd' id='journal_entries_pages' onmouseover='focus_the_description( 'jnl_alp' )' onmouseout='blur_the_description( 'jnl_alp' )'>
								##h4 class='rgcafe taxonomy level_4 journal_entries'>Alphabetically##/h4>
								##p class='rgcafe taxonomy descriptions level_4 blur' id='jnl_alp'>##/p>
							##/li>
							##li class='rgcafe taxonomy level_4 journal_entries even' id='journal_entries_threads' onmouseover='focus_the_description( 'jnl_thr' )' onmouseout='blur_the_description( 'jnl_thr' )'>
								##h4 class='rgcafe taxonomy level_4 journal_entries odd' >By Thread##/h4>
								##p class='rgcafe taxonomy descriptions level_4 blur' id='jnl_thr'>##/p>
							##/li>
						##/ul>
					##/li>
					
					##li class='rgcafe taxonomy level_2 autobiography' id='the_humans_index_link'>
						##h3 class='rgcafe taxonomy level_3 autobiography' id='the_autobiography_index_header'>Autobiographical##/h3>
						##p class='rgcafe taxonomy descriptions level_3 blur' id='aut_ind'>This is writing in which I am the subject, either as the protagonist in a story, or as an object example of an aspect of my philosophy of the human. It’s not necessarily about me, but it’s part of who I am in some significant way. There are probably things in here you might wish you didn’t remember next time you’re trying to have a face-to-face conversation with me.##/p>
						##ul class='rgcafe taxonomy level_4 autobiography' id='the_autobiography_index_link_list'>
							##li class='rgcafe taxonomy level_4 autobiography odd' id='autobiography_disability' onmouseover='focus_the_description( 'aut_dis' )' onmouseout='blur_the_description( 'aut_dis' )'>
								##h4 class='rgcafe taxonomy level_4 autobiography'>Disability##/h4>
								##p class='rgcafe taxonomy descriptions level_4 blur' id='aut_dis'>My disability affects every part of my life.  It equally affects how other people see my life.  This is writing either about the nature of disability, or about mine.  No, it's not a pity-mining operation.  It's about how the lens of disability affects life looking both ways.##/p>
							##/li>
							##li class='rgcafe taxonomy level_4 autobiography even' id='autobiography_survival' onmouseover='focus_the_description( 'aut_sur' )' onmouseout='blur_the_description( 'aut_sur' )'>
								##h4 class='rgcafe taxonomy level_4 autobiography'>Survival##/h4>
								##p class='rgcafe taxonomy descriptions level_4 blur' id='aut_sur'>Life shouldn't always be challenging.  Sometimes a nice boring life seems like the coziest future you can have.  I never got to have a boring life.  I'm a Survivor, and trust me, I would trade challenging for boring if I could.  This is my story, and my stuff, and I don't put it here lightly. I won't be apologizing for these opinions, ever.##/p>
							##/li>
							##li class='rgcafe taxonomy level_4 autobiography odd' id='autobiography_personal' onmouseover='focus_the_description( 'aut_per' )' onmouseout='blur_the_description( 'aut_per' )'>
								##h4 class='rgcafe taxonomy level_4 autobiography' >Personal##/h4>
								##p class='rgcafe taxonomy descriptions level_4 blur' id='aut_per'>This is writing about me, but without some stupid agenda hiding behind it.  Ok, sure.  These are parts of my story that I needed to write, because I needed to put them behind me at last. I didn’t do it to “tell the world my story”; I did it because I’ve known for a long time that if I didn’t get honest with myself and the world some day, I’d never get to feel like an honest man. It’s better, for a man, to bear the humiliation of emasculation publicly, than to bear dishonour and self-loathing in private. I started this blog several times, and it never felt honest, until I got real about me.  Now, it's honest; it may not be right or pretty, but it's honest.##/p>
							##/li>
							##li class='rgcafe taxonomy level_4 autobiography even' id='autobiography_opinion' onmouseover='focus_the_description( 'aut_opi' )' onmouseout='blur_the_description( 'aut_opi' )'>
								##h4 class='rgcafe taxonomy level_4 autobiography' >Opinion##/h4>
								##p class='rgcafe taxonomy descriptions level_4 blur' id='aut_opi'>Things I probably shouldn't say but did. I may have absolutely no rightful business discussing them.  Also, there will likely be things you end up wishing you'd never heard me write. Some of them will be things you wish you'd said.  Then you'll think about and be glad you didn't.##/p>
							##/li>
						##/ul>
					##/li>

					##li class='rgcafe taxonomy level_3 humans' id='the_humans_index_link'>
						##h3 class='rgcafe taxonomy level_3 humans' id='the_humans_index_header' >Humans##/h3>
						##h5 class='rgcafe taxonomy descriptions' id='hum_ind'>Part 1: How Genitals Grew Brains and Took Over the World##/h5>
						##ul class='rgcafe taxonomy level_4 humans closed' id='the_humans_index_link_list'>
							##li class='rgcafe taxonomy level_4 humans odd' id='humans_philosphy' onmouseover='focus_the_description( 'hum_phi' )' onmouseout='blur_the_description( 'hum_phi' )'>
								##h4 class='rgcafe taxonomy level_4 humans'>Philosophy##/h4>
								##p class='rgcafe taxonomy descriptions level_4 blur' id='hum_phi'>##/p>
							##/li>
							##/li>
							##li class='rgcafe taxonomy level_4 humans even' id='humans_politics' onmouseover='focus_the_description( 'hum_pol' )' onmouseout='blur_the_description( 'hum_pol' )'>
								##h4 class='rgcafe taxonomy level_4 humans'>Politics##/h4>
								##p class='rgcafe taxonomy descriptions level_4 blur' id='hum_pol'>##/p>
							##/li>
							##li class='rgcafe taxonomy level_4 humans odd' id='humans_religion' onmouseover='focus_the_description( 'hum_rel' )' onmouseout='blur_the_description( 'hum_rel' )'>
								##h4 class='rgcafe taxonomy level_4 humans'>Religion##/h4>
								##p class='rgcafe taxonomy descriptions level_4 blur' id='hum_rel'>##/p>
							##/li>
							##li class='rgcafe taxonomy level_4 humans even' id='humans_society' onmouseover='focus_the_description( 'hum_soc' )' onmouseout='blur_the_description( 'hum_soc' )'>
								##h4 class='rgcafe taxonomy level_4 humans'>Society##/h4>
								##p class='rgcafe taxonomy descriptions level_4 blur' id='hum_soc'>No, this is not about the side of “society” most eminently represented by Kim Kardashian, the buttocks of whom remind me of two water-buffalos jogging side-by-side. Nor is it about any other “society” phenomena; it’s about what makes those phenomena possible. How is “The Donald” (or “El Donaldo” as he’s known extremely south of the border) even possible?##br />Arrogant leftist answer: because those people are stupid. Arrogant rightist answer: because these people aren’t stupid. Arrogant centrist answer: because why can’t you all just be less stupid, not that we’d ever say you’re stupid, because even idiots are part of God’s plan, not that we believe in religion. In touch with reality answer: because people don’t have to be smart. They’re not meant to be smart. Evolution didn’t make them smart; you’re supposed to be smart for them, you lazy elitist bastards. What other reason could there be for your existence? Quit whining about responsibility and accountability, and go do your job.##/p>
							##/li>
							##li class='rgcafe taxonomy level_4 humans odd' id='humans_psychology' onmouseover='focus_the_description( 'hum_psy' )' onmouseout='blur_the_description( 'hum_psy' )'>
								##h4 class='rgcafe taxonomy level_4 humans'>Psychology##/h4>
								##p class='rgcafe taxonomy descriptions level_4 blur' id='hum_psy'>Psychology is the study of the psyche, which is the sum-total of emotions, thoughts, motivations, and nervous sensations which characterize the individual human’s behaviour. It’s an evolutionary and social construct, of a nature far too complicated for any approach other than well-informed intuition. It is not a science, and criticisms of its unscientific nature are uninteresting and obstructive; they hinder without helping. In psychology, you know when something works because it makes people feel better, not because you measured something concrete in an act of mental vivisection. You don’t perform experiments on people’s minds; experiments are not permitted in client-based psychology, because informed consent is impossible if the results of an experiment are entirely unpredictable. In psychiatry, experimentation is required, because, meds are involved, which makes it a practice of science. Why not in client-based psychology? Because people kill or injure themselves every day, as a result of bad advice.##br />Translation: everything you think you know is wrong, and the only people who can help you understand are the people you likely afford the least credibility, the patients. That’s why you should shut up and stop theorizing: you can’t apply scientific method to the human mind if you insist on ignoring most of what it says to you. You did know that most brains can talk, didn’t you?  They do it through a hole on the front of their heads. You should listen.##/p>
							##/li>
							##li class='rgcafe taxonomy level_4 humans odd' id='humans_science' onmouseover='focus_the_description( 'hum_sci' )' onmouseout='blur_the_description( 'hum_sci' )'>
								##h4 class='rgcafe taxonomy level_4 humans'>Science##/h4>
								##p class='rgcafe taxonomy descriptions level_4 blur' id='hum_sci'>##/p>
							##/li>
							##li class='rgcafe taxonomy level_4 humans even' id='humans_disability' onmouseover='focus_the_description( 'hum_dis' )' onmouseout='blur_the_description( 'hum_dis' )'>
								##h4 class='rgcafe taxonomy level_4 humans'>Disability##/h4>
								##p class='rgcafe taxonomy descriptions level_4 blur' id='hum_dis'>##/p>
							##/li>
							##li class='rgcafe taxonomy level_4 humans odd' id='humans_survival' onmouseover='focus_the_description( 'hum_sur' )' onmouseout='blur_the_description( 'hum_sur' )'>
								##h4 class='rgcafe taxonomy level_4 humans'>Survival##/h4>
								##p class='rgcafe taxonomy descriptions level_4 blur' id='hum_sur'>##/p>
							##/li>
							##li class='rgcafe taxonomy level_4 humans even' id='humans_gender' onmouseover='focus_the_description( 'hum_gen' )' onmouseout='blur_the_description( 'hum_gen' )'>
								##h4 class='rgcafe taxonomy level_4 humans'>Gender##/h4>
								##p class='rgcafe taxonomy descriptions level_4 blur' id='hum_gen'>Gender is a really important issue right now. Does it strike you as odd, that after approximately 150,000 years of homo sapiens evolution, our genital configurations have become a huge issue all of a sudden? Do you not find it even odder, that after 5,000+ generations of hot human-on-human action, there’s still some dumb-ass somewhere telling us it’s immoral?  “Politics” is the name we give to human interaction of a one-to-many nature. “Relationships” are the name we give to one-to-one or one-to-an-immediate-few, particularly family, colleagues, and friends; when we relate to the world as a whole, we use more general rules to govern power distribution and differentials on a scale beyond the immediate. Those rules are called “courtesy” and “law”, and they are not optional in a democracy.##/p>
							##/li>
							##li class='rgcafe taxonomy level_4 humans odd' id='humans_sav' onmouseover='focus_the_description( 'hum_sav' )' onmouseout='blur_the_description( 'hum_sav' )'>
								##h4 class='rgcafe taxonomy level_4 humans'>Saving the world##/h4>
								##p class='rgcafe taxonomy descriptions level_4 blur' id='hum_sav'>This is exactly what it says: saving the world. It’s not exactly a how-to, because I’d prefer not to attract freaks wearing camouflage and carrying their bangbang sticks like they’re religious icons. The world will not be saved by changing people; I believe we’ve tried that already, haven’t we? The world will be changed by history, and all we can do is nudge it in this direction or that. And really, if any of you had any degree of political responsibility, you’d have sought out my advice a long time ago.##/p>
							##/li>
						##/ul>
					##/li>

					##li class='rgcafe taxonomy level_3 art' id='the_arts_index_link' >
						##h3 class='rgcafe taxonomy level_3 art' id='the_arts_index_header'>Arts##/h3>
						##p class='rgcafe taxonomy descriptions level_3 blur' id='art_ind'>Art is the non-discrete sector of human industry devoted to applied psychology, in the form of objects and/or performance, of at least one level of symbolic abstraction removed from the quotidian.##/p>
						##ul class='rgcafe taxonomy level_4 arts closed' id='the_arts_index_link_list'>
							##li class='rgcafe taxonomy level_4 arts odd' id='arts_criticism' onmouseover='focus_the_description( 'art_cri' )' onmouseout='blur_the_description( 'art_cri' )'>
								##h4 class='rgcafe taxonomy level_4 arts'>Criticism##/h4>
								##p class='rgcafe taxonomy descriptions level_4 blur' id='art_cri'>##/p>
							##/li>
							##li class='rgcafe taxonomy level_4 arts even' id='arts_master_class' onmouseover='focus_the_description( 'art_mcl' )' onmouseout='blur_the_description( 'art_mcl' )'>
								##h4 class='rgcafe taxonomy level_4 arts'>Master Classes##/h4>
								##p class='rgcafe taxonomy descriptions level_4 blur' id='art_mcl'>##/p>
							##/li>
							##li class='rgcafe taxonomy level_4 arts odd' id='arts_my_work' onmouseover='focus_the_description( 'art_myw' )' onmouseout='blur_the_description( 'art_myw' )'>
								##h4 class='rgcafe taxonomy level_4 arts'>My work##/h4>
								##p class='rgcafe taxonomy descriptions level_4 blur' id='art_myw'>##/p>
							##/li>
							##li class='rgcafe taxonomy level_4 arts even' id='arts_stuff' onmouseover='focus_the_description( 'art_sil' )' onmouseout='blur_the_description( 'art_sil' )'>
								##h4 class='rgcafe taxonomy level_4 arts'>Stuff I like##/h4>
								##p class='rgcafe taxonomy descriptions level_4 blur' id='art_sil'>##/p>
							##/li>
							##/li>
						##/ul>
					##/li>
				##/ul>
			##/li>

			##li class='rgcafe taxonomy level_2 archives' id='the_archives_index_link'>
				##h2 class='rgcafe taxonomy level_2 archives' id='the_archives_index_header'>Archives##/h2>
				##p class='rgcafe taxonomy descriptions level_2 blur' id='arc_ind'>I’m trying to categorize all my output, but I operate on “International-WTF-Time”, which is a time-zone for people who are always late, and where it’s always dinner or at least a coffee-break. If that’s not good enough, you’re welcome to do all my work for me.##/p>
				##ul class='rgcafe taxonomy level_3 archives closed' id='the_archives_index_link_list'>
					##li class='rgcafe taxonomy level_3 archives odd' id='archive_fiction' onmouseover='focus_the_description( 'arc_fic' )' onmouseout='blur_the_description( 'arc_fic' )'>
						##h3 class='rgcafe taxonomy level_3 archives'>Fiction##/h3>
						##p class='rgcafe taxonomy descriptions level_3 blur' id='arc_fic'>I apologize in advance for offending anyone with gratuitous sex or violence, some of which is indexed on the Fiction page, in case you have trouble finding it.##/p>
					##/li>
					##li class='rgcafe taxonomy level_3 archives even' id='archive_non-fiction' onmouseover='focus_the_description( 'arc_nfc' )' onmouseout='blur_the_description( 'arc_nfc' )'>
						##h3 class='rgcafe taxonomy level_3 archives'>Non-fiction##/h3>
						##p class='rgcafe taxonomy descriptions level_3 blur' id='arc_nfc'>This category is the stuff I wrote that isn’t stuff I made up about real things, isn’t it?##/p>					##/li>
					##li class='rgcafe taxonomy level_3 archives odd' id='archive_poetry' onmouseover='focus_the_description( 'arc_poe' )' onmouseout='blur_the_description( 'arc_poe' )'>
						##h3 class='rgcafe taxonomy level_3 archives'>Poetry##/h3>
						##p class='rgcafe taxonomy descriptions level_3 blur' id='arc_poe'>Poetry is the art form which employs words in a semi-abstract form, and in which the standardized rules and guidelines of the language are devalued in favour of literary effect. Lines and verses are of primary significance, while sentences, paragraphs, punctuation, and linkages serve a supporting role to sound and the abstraction of ideas designed, perhaps unknowingly, to allow and encourage cross-talk between cerebral hemispheres.  DO NOT give me that “sound poetry” shit…my car makes more interesting poetry than that, even when I’m not running anyone down.##/p>
					##/li>
					##li class='rgcafe taxonomy level_3 archives even' id='archive_other_media' onmouseover='focus_the_description( 'arc_omd' )' onmouseout='blur_the_description( 'arc_omd' )'>
						##h3 class='rgcafe taxonomy level_3 archives'>Other Media##/h3>
						##p class='rgcafe taxonomy descriptions level_3 blur' id='arc_omd'>Words are my material, and writing is my métier, so I give it pride of place in my output; I’m not an artist who writes, in my self-conception, but a writer who does art. Most of my output is literary, but I also love visual art and music, and I work on those things when my mind needs a break from hyperfocusing on writing (hyperfocus is the flip-side of ADHD; some of us are able to focus entirely on one thing, for hours or days, at the expense of attention to other facets of life; it is one of the six acknowledged forms of ADHD). Anyway, it’s all here, in a single literarty amusement park, making ignoring my work easy and fun for the##/p>
					##/li>
					##li class='rgcafe taxonomy level_3 archives odd' id='archive_fragments' onmouseover='focus_the_description( 'arc_frg' )' onmouseout='blur_the_description( 'arc_frg' )'>
						##h3 class='rgcafe taxonomy level_3 archives'>Fragments##/h3>
						##p class='rgcafe taxonomy descriptions level_3 blur' id='arc_frg'>This is “shit I made up” (SIMU), which doesn’t take way too long to read, and for which I didn’t have to do any research. I usually don’t finish stories; I find them more interesting and pregnant with suggestion if I don’t tie things up neatly. Short fiction doesn’t allow you to ladle on the detail and description; you have to suggest those things in passing, using innuendo and plot-hints to force the reader to do all the real work for herself. I still would like to get paid, though.##/p>
					##/li>
				##/ul>
			##/li>

			##li class='rgcafe taxonomy level_2 projects' id='the_projects_index_link'>
				##h2 class='rgcafe taxonomy level_2 projects' id='the_projects_index_header'>Projects##/h2>
				##p class='rgcafe taxonomy descriptions level_2 blur' id='prj_ind'>Blog entries devoted to gender, disability, social issues, and/or politics. Sometimes, there isn’t much difference amongst them. Love is what I profess, chaos is what I perform, the combination is what I write.##/p>
				##ul class='rgcafe taxonomy level_3 projects closed' id='the_projects_index_link_list'>
					##li class='rgcafe taxonomy level_3 projects odd' id='project_love_and_chaos' onmouseover='focus_the_description( 'prj_lac' )' onmouseout='blur_the_description( 'prj_lac' )'>
						##h3 class='rgcafe taxonomy level_3 '>Love and Chaos##/h3>
						##p class='rgcafe taxonomy descriptions level_3 blur' id='prj_lac'>##/p>
					##/li>
					##li class='rgcafe taxonomy level_3 projects even' id='project_100_poems' onmouseover='focus_the_description( 'prj_100' )' onmouseout='blur_the_description( 'prj_100' )'>
						##h3 class='rgcafe taxonomy level_3 projects'>100 Poems You Should Know##/h3>
						##p class='rgcafe taxonomy descriptions level_3 blur' id='prj_100'>##/p>
					##/li>
					##li class='rgcafe taxonomy level_3 projects odd' id='project_book_of_fun' onmouseover='focus_the_description( 'prj_bof' )' onmouseout='blur_the_description( 'prj_bof' )'>
						##h3 class='rgcafe taxonomy level_3 projects'>The Book of Fun##/h3>
						##p class='rgcafe taxonomy descriptions level_3 blur' id='prj_bof'>##/p>
					##/li>
					##li class='rgcafe taxonomy level_3 projects even' id='project_pickup_lines' onmouseover='focus_the_description( 'prj_pul' )' onmouseout='blur_the_description( 'prj_pul' )'>
						##h3 class='rgcafe taxonomy level_3 projects'>Pickup Lines##/h3>
						##p class='rgcafe taxonomy descriptions level_3 blur' id='prj_pul'>A poem is a singular example of the above. It's not a gay thing, idiot; girls like it. What do you think it was invented for?  Church?##/p>
					##/li>
				##/ul>
			##/li>

			##li class='rgcafe taxonomy level_2 meta' id='the_meta_index_link'>
				##h2 class='rgcafe taxonomy level_2 meta' id='the_meta_index_header'>Meta##/h2>
				##ul class='rgcafe taxonomy level_3 meta closed' id='the_meta_index_link_list'>
					##li class='rgcafe taxonomy level_3 meta odd' id='meta_about_me' onmouseover='focus_the_description( 'met_abm' )' onmouseout='blur_the_description( 'met_abm' )'>
						##h3 class='rgcafe taxonomy level_3 meta'>About Me##/h3>
						##p class='rgcafe taxonomy descriptions level_3 blur' id='met_abm'>##/p>
					##/li>
					##li class='rgcafe taxonomy level_3 meta even' id='meta_contact_me' onmouseover='focus_the_description( 'met_con' )' onmouseout='blur_the_description( 'met_con' )'>
						##h3 class='rgcafe taxonomy level_3 meta'>Contact Me##/h3>
						##p class='rgcafe taxonomy descriptions level_3 blur' id='met_con'>##/p>
					##/li>
					##li class='rgcafe taxonomy level_3 meta odd' id='meta_reaction' onmouseover='focus_the_description( 'met_rea' )' onmouseout='blur_the_description( 'met_rea' )'>
						##h3 class='rgcafe taxonomy level_3 meta'>Reaction##/h3>
						##p class='rgcafe taxonomy descriptions level_3 blur' id='met_rea'>##/p>
					##/li>
					##li class='rgcafe taxonomy level_3 meta even' id='meta_smallprint' onmouseover='focus_the_description( 'met_sml' )' onmouseout='blur_the_description( 'met_sml' )'>
						##h3 class='rgcafe taxonomy level_3 meta'>Smallprint##/h3>
						##p class='rgcafe taxonomy descriptions level_3 blur' id='met_sml'>##/p>
					##/li>
					##li class='rgcafe taxonomy level_3 meta odd' id='meta_privacy' onmouseover='focus_the_description( 'met_prv' )' onmouseout='blur_the_description( 'met_prv' )'>
						##h3 class='rgcafe taxonomy level_3 meta'>Privacy Policy##/h3>
						##p class='rgcafe taxonomy descriptions level_3 blur' id='met_prv'>##/p>
					##/li>
					##li class='rgcafe taxonomy level_3 meta even' id='meta_piracy' onmouseover='focus_the_description( 'met_pir' )' onmouseout='blur_the_description( 'met_pir' )'>
						##h3 class='rgcafe taxonomy level_3 meta'>Piracy Policy##/h3>
						##p class='rgcafe taxonomy descriptions level_3 blur' id='met_pir'>##/p>
					##/li>
					##li class='rgcafe taxonomy level_3 meta odd' id='meta_warranty' onmouseover='focus_the_description( 'met_war' )' onmouseout='blur_the_description( 'met_war' )'>
						##h3 class='rgcafe taxonomy level_3 meta'>Smallprint##/h3>
						##p class='rgcafe taxonomy descriptions level_3 blur' id='met_war'>##/p>
					##/li>
				##/ul>
			##/li>
		##/ul>
	##/li>
##/ul>
##script>
	randomize_the_style_left( 'the_taxonomy_index', 'descriptions' );
	randomize_the_style_width( 'the_taxonomy_index', 'descriptions' ); 
	randomize_the_style_width( 'the_taxonomy_index', 'taxonomy' ); 
##/script>";