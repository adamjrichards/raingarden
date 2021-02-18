<?php

namespace raingarden\rg_static_pages;

$the_html = "
##article class='page static' id='the_contact_me' draggable='true' resize='both' onmouseenter='there_is_only_one_draggable_element_at_a_time( this )'>
	##p>I try to be good about staying in touch.  I’m not.  I don’t know how long it’s been since we last made contact.  If it’s something important, please copy it to Andrea (wife object), who actually knows what the hell is going on around these here parts. I can’t give out her address here for professional reasons, but you can go to ##a href='http://www.speakingthroughart.com' target='_blank' rel='noopener'>SpeakingThroughArt.com##/a> and contact her from there.##/p>
	##div id='contact-form-10'>
		##form class='contact-form commentsblock' action='#contact-form-10' method='post'>
			##div>##label class='grunion-field-label name' for='g10-yourrealnamerequired'>Your real name (required) (required)##/label> ##input id='g10-yourrealnamerequired' class='name' name='g10-yourrealnamerequired' required='' type='text' value='' aria-required='true' />##/div>
			##div>##label class='grunion-field-label email' for='g10-yourrealemailrequired'>Your real email (required) (required)##/label> ##input id='g10-yourrealemailrequired' class='email' name='g10-yourrealemailrequired' required='' type='email' value='' aria-required='true' />##/div>
			##div>
			##p>##label class='grunion-field-label'>Purpose of contact:##/label>##/p>
			##p>##label class='grunion-checkbox-multiple-label checkbox-multiple'>##input class='checkbox-multiple' name='g10-purposeofcontact[]' type='checkbox' value='Death threat' /> Death threat##/label>##/p>
			##p>##label class='grunion-checkbox-multiple-label checkbox-multiple'>##input class='checkbox-multiple' name='g10-purposeofcontact[]' type='checkbox' value='Outpouring of love' /> Outpouring of love##/label>##/p>
			##p>##label class='grunion-checkbox-multiple-label checkbox-multiple'>##input class='checkbox-multiple' name='g10-purposeofcontact[]' type='checkbox' value='Chance of meaningful communication.' /> Chance of meaningful communication.##/label>##/p>
			##p>##label class='grunion-checkbox-multiple-label checkbox-multiple'>##input class='checkbox-multiple' name='g10-purposeofcontact[]' type='checkbox' value='You still need therapy.' /> You still need therapy.##/label>##/p>
			##/div>
			##div>##label class='grunion-field-label textarea' for='contact-form-comment-g10-nowthenwhatsthisaboutrequired'>Now, then, what's this about? (required)##/label> ##textarea id='contact-form-comment-g10-nowthenwhatsthisaboutrequired' class='textarea' name='g10-nowthenwhatsthisaboutrequired' rows='20'>##/textarea>##/div>
			##div>
			##p>##label class='grunion-field-label'>I am hoping for an answer...##/label>##/p>
			##p>##label class='grunion-radio-label radio'>##input class='radio' name='g10-iamhopingforananswer' type='radio' value='Within a reasonable timeframe.' /> ...within a reasonable timeframe.##/label>##/p>
			##p>##label class='grunion-radio-label radio'>##input class='radio' name='g10-iamhopingforananswer' type='radio' value='Eventually after several reminders.' /> ...eventually after several reminders.##/label>##/p>
			##p>##label class='grunion-radio-label radio'>##input class='radio' name='g10-iamhopingforananswer' type='radio' value='Any' /> ...of some kind, any kind.##/label>##/p>
			##p>##label class='grunion-radio-label radio'>##input class='radio' name='g10-iamhopingforananswer' type='radio' value='if at all' /> ...and any answer will do.##/label>##/p>
			##p>##label class='grunion-radio-label radio'>##input class='radio' name='g10-iamhopingforananswer' type='radio' value='I'm not falling for that again.' /> I'm not falling for that again.##/label>##/p>
			##/div>
			##p class='contact-submit'>##input class='pushbutton-wide' type='submit' value='Submit »' />##/p>
		##/form>
	##/div>
##/article>";