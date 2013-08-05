<?php
/**
 * Internationalisation file for extension Wikimedia Messages
 *
 * @file
 * @ingroup Extensions
 * @comment TODO:
 * @comment + Remove current events and community portal from the default sidebar
 * @comment + and add those messages to here
 * @comment + Make the help links on non-Wikimedia sites point to mediawiki.org?
 */

$messages = array();

$messages['en'] = array(
	'wikimediamessages-desc' => 'Wikimedia specific messages',
	'sitesupport-url'        => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=en', # do not change anything except the uselang for the link
	'sitesupport'            => 'Donate',
	'tooltip-n-sitesupport'  => 'Support us',
	'sidebar'                =>  '* navigation
** mainpage|mainpage-description
** portal-url|portal
** currentevents-url|currentevents
** recentchanges-url|recentchanges
** randompage-url|randompage
** helppage|help
** sitesupport-url|sitesupport', # do not translate or duplicate this message to other languages

	# Message used by multiple extensions (StoryBoard and ContributionReporting)
	'specialpages-group-contribution' => 'Contribution/Fundraiser',

	# Per http://lists.wikimedia.org/pipermail/wikitech-l/2008-September/039454.html
	'robots.txt'  => '# Lines here will be added to the global robots.txt', # do not translate or duplicate this message to other languages

	# Wikimedia specific extra namespaces
	'nstab-creator'     => 'Creator', # Wikimedia Commons
	'nstab-institution' => 'Institution', # Wikimedia Commons
	'nstab-sequence'    => 'Sequence', # Wikimedia Commons
	'nstab-timedtext'   => 'TimedText', # Wikimedia Commons

	# Wikimedia specific usergroups
	'group-Ex_Administrator'        => 'Ex administrators',
	'group-Ex_Administrator-member' => '{{GENDER:$1|ex administrator}}',
	'grouppage-Ex_Administrator'    => '{{ns:project}}:Ex administrators',

	'group-Ex_Bureaucrat'        => 'Ex bureaucrats',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|ex bureaucrat}}',
	'grouppage-Ex_Bureaucrat'    => '{{ns:project}}:Ex bureaucrats',

	'group-Image-reviewer'        => 'Image reviewers',
	'group-Image-reviewer-member' => '{{GENDER:$1|image reviewer}}',
	'grouppage-Image-reviewer'    => '{{ns:project}}:Image reviewers',

	'group-OTRS-member'        => 'OTRS members',
	'group-OTRS-member-member' => '{{GENDER:$1|OTRS member}}',
	'grouppage-OTRS-member'    => '{{ns:project}}:OTRS members',

	'group-abusefilter'        => 'Abuse filter editors',
	'group-abusefilter-member' => '{{GENDER:$1|abuse filter editor}}',
	'grouppage-abusefilter'    => '{{ns:project}}:Abuse filter editors',

	'group-accountcreator'        => 'Account creators',
	'group-accountcreator-member' => '{{GENDER:$1|account creator}}',
	'grouppage-accountcreator'    => '{{ns:project}}:Account creators',

	'group-arbcom'        => 'Arbitration committee members',
	'group-arbcom-member' => '{{GENDER:$1|arbitration committee member}}',
	'grouppage-arbcom'    => '{{ns:project}}:Arbitration committee members',

	'group-autopatrolled'        => 'Autopatrollers',
	'group-autopatrolled-member' => '{{GENDER:$1|autopatroller}}',
	'grouppage-autopatrolled'    => '{{ns:project}}:Autopatrollers',

	'group-autoreviewer'        => 'Autoreviewers',
	'group-autoreviewer-member' => '{{GENDER:$1|autoreviewer}}',
	'grouppage-autoreviewer'    => '{{ns:project}}:Autoreviewers',

	'group-bigexport'        => 'Big exporters',
	'group-bigexport-member' => '{{GENDER:$1|big exporter}}',
	'grouppage-bigexport'    => '{{ns:project}}:Big exporters',

	'group-botadmin'        => 'Bots with administrator rights',
	'group-botadmin-member' => '{{GENDER:$1|bot with administrator rights}}',
	'grouppage-botadmin'    => '{{ns:project}}:Bots with administrator rights',

	'group-confirmed'        => 'Confirmed users',
	'group-confirmed-member' => '{{GENDER:$1|confirmed user}}',
	'grouppage-confirmed'    => '{{ns:project}}:Confirmed users',

	'group-editprotected'        => 'Protected page editors',
	'group-editprotected-member' => '{{GENDER:$1|protected page editor}}',
	'grouppage-editprotected'    => '{{ns:project}}:Protected page editors',

	'group-eliminator'        => 'Eliminators',
	'group-eliminator-member' => '{{GENDER:$1|eliminator}}',
	'grouppage-eliminator'    => '{{ns:project}}:Eliminators',

	'group-filemover'        => 'File movers',
	'group-filemover-member' => '{{GENDER:$1|file mover}}',
	'grouppage-filemover'    => '{{ns:project}}:File movers',

	'group-flood'        => 'Bot users', // http://meta.wikimedia.org/wiki/Meta:Flood_flag
	'group-flood-member' => '{{GENDER:$1|bot user}}',
	'grouppage-flood'    => '{{ns:project}}:Bot users',

	'group-founder'        => 'Founders',
	'group-founder-member' => '{{GENDER:$1|founder}}',
	'grouppage-founder'    => '{{ns:project}}:Founders',

	'group-import'        => 'Importers',
	'group-import-member' => '{{GENDER:$1|importer}}',
	'grouppage-import'    => '{{ns:project}}:Importers',

	'group-interface_editor'        => 'Interface editors',
	'group-interface_editor-member' => '{{GENDER:$1|interface editor}}',
	'grouppage-interface_editor'    => '{{ns:project}}:Interface editors',

	'group-ipblock-exempt'        => 'IP block exemptions',
	'group-ipblock-exempt-member' => '{{GENDER:$1|IP block exempt}}',
	'grouppage-ipblock-exempt'    => '{{ns:project}}:IP block exemption',

	'group-patroller'        => 'Patrollers',
	'group-patroller-member' => '{{GENDER:$1|patroller}}',
	'grouppage-patroller'    => '{{ns:project}}:Patrollers',

	'group-researcher'        => 'Researchers',
	'group-researcher-member' => '{{GENDER:$1|researcher}}',
	'grouppage-researcher'    => '{{ns:project}}:Researchers',

	'group-rollbacker'        => 'Rollbackers',
	'group-rollbacker-member' => '{{GENDER:$1|rollbacker}}',
	'grouppage-rollbacker'    => '{{ns:project}}:Rollbackers',

	'group-transwiki'        => 'Transwiki importers',
	'group-transwiki-member' => '{{GENDER:$1|transwiki importer}}',
	'grouppage-transwiki'    => '{{ns:project}}:Transwiki importers',

	'group-trusted'        => 'Trusted users',
	'group-trusted-member' => '{{GENDER:$1|trusted user}}',
	'grouppage-trusted'    => '{{ns:project}}:Trusted users',

	'group-uploader'        => 'Uploaders',
	'group-uploader-member' => '{{GENDER:$1|uploader}}',
	'grouppage-uploader'    => '{{ns:project}}:Uploaders',

	# Global Wikimedia specific usergroups (defined on http://meta.wikimedia.org/wiki/Special:GlobalGroupPermissions)

	'group-Global_bot'        => 'Global bots',
	'group-Global_bot-member' => '{{GENDER:$1|global bot}}',
	'grouppage-Global_bot'    => 'm:Global bot', # only translate this message to other languages if you have to change it

	'group-Global_rollback'        => 'Global rollbackers',
	'group-Global_rollback-member' => '{{GENDER:$1|global rollbacker}}',
	'grouppage-Global_rollback'    => 'm:Global rollback', # only translate this message to other languages if you have to change it

	'group-Global_sysops'        => 'Global sysops',
	'group-Global_sysops-member' => '{{GENDER:$1|global sysop}}',
	'grouppage-Global_sysops'    => 'm:Global sysops', # only translate this message to other languages if you have to change it

	'group-Ombudsmen'        => 'Ombudsmen',
	'group-Ombudsmen-member' => '{{GENDER:$1|ombudsman}}',
	'grouppage-Ombudsmen'    => 'm:Ombudsman commission', # only translate this message to other languages if you have to change it

	'group-Staff'        => 'Staff',
	'group-Staff-member' => '{{GENDER:$1|staff}}',
	'grouppage-Staff'    => 'Foundation:Staff', # only translate this message to other languages if you have to change it

	'group-editinterface'        => 'Interface editors',
	'group-editinterface-member' => '{{GENDER:$1|interface editor}}',
	'grouppage-editinterface'    => 'm:Editinterface', # only translate this message to other languages if you have to change it

	'group-steward'        => 'Stewards',
	'group-steward-member' => '{{GENDER:$1|steward}}',
	'grouppage-steward'    => 'm:Stewards', # only translate this message to other languages if you have to change it

	'group-sysadmin'        => 'System administrators',
	'group-sysadmin-member' => '{{GENDER:$1|system administrator}}',
	'grouppage-sysadmin'    => 'm:System administrators', # only translate this message to other languages if you have to change it

	'group-API_High_Limit_Requestor'        => 'API high limit requestors',
	'group-API_High_Limit_Requestor-member' => '{{GENDER:$1|API high limit requestor}}',
	'grouppage-API_High_Limit_Requestor'    => 'm:API high limit requestors', # only translate this message to other languages if you have to change it

	'group-Indic_Bots'        => 'Indic bots',
	'group-Indic_Bots-member' => '{{GENDER:$1|indic bot}}',
	'grouppage-Indic_Bots'    => 'm:Indic bots', # only translate this message to other languages if you have to change it

	'group-New_wikis_importer'        => 'New wikis importers',
	'group-New_wikis_importer-member' => '{{GENDER:$1|new wikis importer}}',
	'grouppage-New_wikis_importer'    => 'm:New wikis importers', # only translate this message to other languages if you have to change it

	'group-global-ipblock-exempt'        => 'Global IP block exemptions',
	'group-global-ipblock-exempt-member' => '{{GENDER:$1|global IP block exempt}}',
	'grouppage-global-ipblock-exempt'    => 'm:Global IP block exemptions', # only translate this message to other languages if you have to change it

	'group-recursive-export'        => 'Recursive export',
	'group-recursive-export-member' => '{{GENDER:$1|recursive exporter}}',
	'grouppage-recursive-export'    => 'm:Recursive export', # only translate this message to other languages if you have to change it

	# meta.wikimedia.org specific user group

	'group-translationadmin'        => 'Translation administrators',
	'group-translationadmin-member' => '{{GENDER:$1|translation administrator}}',
	'grouppage-translationadmin'    => '{{ns:project}}:Translation administrators', # only translate this message to other languages if you have to change it

	# Bug 45270 due to https://gerrit.wikimedia.org/r/#/c/50196/
	'group-centralnoticeadmin'        => 'Central notice administrators',
	'group-centralnoticeadmin-member' => '{{GENDER:$1|central notice administrator}}',
	'grouppage-centralnoticeadmin'    => '{{ns:project}}:Central notice administrators',

	# mediawiki.org specific user group

	'group-coder'        => 'Coders',
	'group-coder-member' => '{{GENDER:$1|coder}}',
	'grouppage-coder'    => '{{ns:project}}:Coder', # only translate this message to other languages if you have to change it

	# Private and fishbowl wikis
	'group-inactive'        => 'Inactive users',
	'group-inactive-member' => '{{GENDER:$1|inactive user}}',
	'grouppage-inactive'    => '{{ns:project}}:Inactive users',

	# The name for the common shared repo 'shared'
	'shared-repo-name-shared' => 'Wikimedia Commons', # only translate this message to other languages if you have to change it

	# Copyright fun!
	'wikimedia-copyright' => 'Text is available under the <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike License</a>;
additional terms may apply.
See <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Terms of Use</a> for details.',
	'wikidata-copyright' => 'All structured data from the main and property namespace is available under the <a href="//creativecommons.org/publicdomain/zero/1.0/" title="Definition of the Creative Commons CC0 License">Creative Commons CC0 License</a>;
text in the other namespaces is available under the <a href="//creativecommons.org/licenses/by-sa/3.0/" title="Definition of the Creative Commons Attribution/Share-Alike License">Creative Commons Attribution/Share-Alike License</a>;
additional terms may apply.
See <a href="//wikimediafoundation.org/wiki/Terms_of_Use" title="Wikimedia Foundation Terms of Use">Terms of Use</a> for details.',
	'wikidata-shortcopyrightwarning' => 'By clicking "{{int:wikibase-save}}", you agree to the [//wikimediafoundation.org/wiki/Terms_of_Use terms of use], and you irrevocably agree to release your contribution under the [//creativecommons.org/publicdomain/zero/1.0/ CC0 license].',
	'wikimedia-copyrightwarning' => 'By clicking the "{{int:savearticle}}" button, you agree to the [//wikimediafoundation.org/wiki/Terms_of_Use Terms of Use], and you irrevocably agree to release your contribution under the [//en.wikipedia.org/wiki/Wikipedia:Text_of_Creative_Commons_Attribution-ShareAlike_3.0_Unported_License CC-BY-SA 3.0 License] and the [//en.wikipedia.org/wiki/Wikipedia:Text_of_the_GNU_Free_Documentation_License GFDL].
You agree that a hyperlink or URL is sufficient attribution under the Creative Commons license.',

	# Wikidata-specific messages
	'wikibase-sitelinks-wikivoyage' => 'Wikivoyage pages linked to this item',

	# Custom message for enwiki to stop from deleting the mainpage
	'cant-delete-main-page' => 'You cannot delete or move the main page.',

	'wikimedia-translationnotifications-signup-legal' => 'You agree that by providing the Wikimedia Foundation with this information we may contact you regarding translations or other topics related to the Wikimedia movement we think may be of interest to you. You agree your data may be stored in the United States of America and is subject to our [https://wikimediafoundation.org/wiki/Privacy_policy privacy policy].',

	# Added by the WLM mobile app
	'upload-more-photos-of-this-monument' => 'Upload more photos of this monument',

	# Extension distributor messages for mediawiki.org
	'extdist-branch-master' => 'master (latest development version)',
	'extdist-branch-REL1_21' => '1.21 (latest stable MediaWiki)',
	'extdist-branch-REL1_20' => '1.20',
	'extdist-branch-REL1_19' => '1.19',

	# Links in new vertical-layout login and create account forms
	'createacct-helpusername-url' => '{{ns:Project}}:Username_policy',
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(help me choose)]]',
	'createacct-captcha-help-url' => '{{ns:Project}}:Request an account',
	'createacct-imgcaptcha-help' => 'Can\'t see the image? [[{{MediaWiki:createacct-captcha-help-url}}|Request an account]]',

	# Bug 33464: "Developers" link in the page footer
	'wikimedia-developers' => 'Developers',
	'wikimedia-developers-url' => 'https://www.mediawiki.org/wiki/Special:MyLanguage/How_to_contribute',
);

/** Message documentation (Message documentation)
 * @author Amire80
 * @author Aotake
 * @author Crt
 * @author EugeneZelenko
 * @author Fryed-peach
 * @author IAlex
 * @author Jon Harald Søby
 * @author Lloffiwr
 * @author Meno25
 * @author Mormegil
 * @author Nemo bis
 * @author Purodha
 * @author Raymond
 * @author SPQRobin
 * @author Seb35
 * @author Shirayuki
 * @author Siebrand
 * @author Sp5uhe
 * @author Tagimata
 * @author Umherirrender
 */
$messages['qqq'] = array(
	'wikimediamessages-desc' => '{{desc|name=Wikimedia Messages|url=http://www.mediawiki.org/wiki/Extension:WikimediaMessages}}',
	'sitesupport-url' => 'Wikimedia-specific message used in the sidebar.
{{doc-important|Do not change anything except the uselang for the link|([[wmf:Special:Prefixindex/Donate/|check]])}}',
	'sitesupport' => "Display name for the 'Donations' page, shown in the sidebar menu of all pages. The target page is meant to be the page where users can see how they can contribute financially to the wiki site.

{{Identical|Donate}}",
	'tooltip-n-sitesupport' => 'The tooltip when hovering over the {{msg-mw|sitesupport}} link in the sidebar.',
	'sidebar' => '{{notranslate}}',
	'specialpages-group-contribution' => '{{doc-special-group|that=are related to the extensions ContributionReporting and LandingCheck|like=[[Special:ContributionHistory]], [[Special:ContributionTotal]], [[Special:ContributionStatistics]], [[Special:FundraiserStatistics]], [[Special:ContributionTrackingStatistics]], [[Special:LandingCheck]]}}',
	'robots.txt' => '{{notranslate}}',
	'nstab-creator' => 'Text on the tab of pages in the "Creator" namespace on Wikimedia Commons ([[commons:Creator:Heinrich_Hoerle|Example]])
{{Identical|Creator}}',
	'nstab-institution' => 'Text on the tab of pages in the "Institution" namespace on Wikimedia Commons ([[commons:Institution:Wallraf-Richartz-Museum|Example]])',
	'nstab-sequence' => 'Text on the tab of pages in the "Sequence" namespace on Wikimedia Commons ([[commons:Sequence:Cats|Example]])',
	'nstab-timedtext' => 'Text on the tab of pages in the "TimedText" namespace on Wikimedia Commons ([[commons:TimedText:Edit_Button.ogv.en.srt|Example]])',
	'group-Ex_Administrator' => '{{doc-group|Ex Administrator}}',
	'group-Ex_Administrator-member' => '{{doc-group|Ex Administrator|member}}',
	'grouppage-Ex_Administrator' => '{{doc-group|Ex Administrator|page}}',
	'group-Ex_Bureaucrat' => '{{doc-group|Ex Bureaucrat}}',
	'group-Ex_Bureaucrat-member' => '{{doc-group|Ex Bureaucrat|member}}',
	'grouppage-Ex_Bureaucrat' => '{{doc-group|Ex Bureaucrat|page}}',
	'group-Image-reviewer' => '{{doc-group|Image-reviewer}}',
	'group-Image-reviewer-member' => '{{doc-group|Image-reviewer|member}}',
	'grouppage-Image-reviewer' => '{{doc-group|Image-reviewer|page}}',
	'group-OTRS-member' => '{{doc-group|OTRS-member}}',
	'group-OTRS-member-member' => '{{doc-group|OTRS-member|member}}

The initial letter of messages of this type is usually lowercase.',
	'grouppage-OTRS-member' => '{{doc-group|OTRS-member|page}}',
	'group-abusefilter' => '{{doc-group|abusefilter}}',
	'group-abusefilter-member' => '{{doc-group|abusefilter|member}}',
	'grouppage-abusefilter' => '{{doc-group|abusefilter|page}}',
	'group-accountcreator' => '{{doc-group|accountcreator}}
A specific group of the English Wikipedia; see [[wikipedia:Special:ListUsers/accountcreator]].',
	'group-accountcreator-member' => '{{doc-group|accountcreator|member}}',
	'grouppage-accountcreator' => '{{doc-group|accountcreator|page}}',
	'group-arbcom' => '{{doc-group|arbcom}}',
	'group-arbcom-member' => '{{doc-group|arbcom|member}}',
	'grouppage-arbcom' => '{{doc-group|arbcom|page}}',
	'group-autopatrolled' => '{{doc-group|autopatrolled}}',
	'group-autopatrolled-member' => '{{doc-group|autopatrolled|member}}',
	'grouppage-autopatrolled' => '{{doc-group|autopatrolled|page}}',
	'group-autoreviewer' => '{{doc-group|autoreviewer}}',
	'group-autoreviewer-member' => '{{doc-group|autoreviewer|member}}',
	'grouppage-autoreviewer' => '{{doc-group|autoreviewer|page}}',
	'group-bigexport' => '{{doc-group|bigexport}}
Big export user has a right to: {{int:right-override-export-depth}}',
	'group-bigexport-member' => '{{doc-group|bigexport|member}}
Big export user has a right to: {{int:Right-override-export-depth}}',
	'grouppage-bigexport' => '{{doc-group|bigexport|page}}
Big export user has a right to: {{int:right-override-export-depth}}',
	'group-botadmin' => '{{doc-group|botadmin}}',
	'group-botadmin-member' => '{{doc-group|botadmin|member}}',
	'grouppage-botadmin' => '{{doc-group|botadmin|page}}',
	'group-confirmed' => '{{doc-group|confirmed}}',
	'group-confirmed-member' => '{{doc-group|confirmed|member}}',
	'grouppage-confirmed' => '{{doc-group|confirmed|page}}',
	'group-editprotected' => '{{doc-group|editprotected}}',
	'group-editprotected-member' => '{{doc-group|editprotected|member}}',
	'grouppage-editprotected' => '{{doc-group|editprotected|page}}',
	'group-eliminator' => '{{doc-group|eliminator}}
Usergroup introduced for ptwiki ([[w:pt:Especial:Lista_de_privil%C3%A9gios_de_grupos|Especial:Lista de privilégios de grupos]], [[bugzilla:24623|Bug 24623]])',
	'group-eliminator-member' => '{{doc-group|eliminator|member}}',
	'grouppage-eliminator' => '{{doc-group|eliminator|page}}',
	'group-filemover' => '{{doc-group|filemover}}',
	'group-filemover-member' => '{{doc-group|filemover|member}}',
	'grouppage-filemover' => '{{doc-group|filemover|page}}',
	'group-flood' => '{{doc-group|flood}}',
	'group-flood-member' => '{{doc-group|flood|member}}',
	'grouppage-flood' => '{{doc-group|flood|page}}',
	'group-founder' => '{{doc-group|founder}}
A specific group of the English Wikipedia; see [[wikipedia:Special:ListUsers/founder]] (used exclusively for [[wikipedia:User:Jimbo Wales|Jimbo Wales]]).
{{Identical|Founder}}',
	'group-founder-member' => '{{doc-group|founder|member}}
used exclusively for [[wikipedia:User:Jimbo Wales|Jimbo Wales]]
{{Identical|Founder}}',
	'grouppage-founder' => '{{doc-group|founder|page}}',
	'group-import' => '{{doc-group|import}}',
	'group-import-member' => '{{doc-group|import|member}}',
	'grouppage-import' => '{{doc-group|import|page}}',
	'group-interface_editor' => '{{doc-group|interface editor}}',
	'group-interface_editor-member' => '{{doc-group|interface editor|member}}',
	'grouppage-interface_editor' => '{{doc-group|interface editor|page}}',
	'group-ipblock-exempt' => '{{doc-group|ipblock-exempt}}',
	'group-ipblock-exempt-member' => '{{doc-group|ipblock-exempt|member}}',
	'grouppage-ipblock-exempt' => '{{doc-group|ipblock-exempt|page}}',
	'group-patroller' => '{{doc-group|patroller|prefix=wmf-}}',
	'group-patroller-member' => '{{doc-group|patroller|member|prefix=wmf-}}',
	'grouppage-patroller' => '{{doc-group|patroller|page|prefix=wmf-}}',
	'group-researcher' => "{{doc-group|researcher}}
From [[wikipedia:Wikipedia:Researcher#Researcher]]
The 'researcher' group was created in April 2010 to allow individuals explicitly approved by the Wikimedia Foundation to search deleted pages and view deleted history entries without their associated text.",
	'group-researcher-member' => "{{doc-group|researcher|member}}
From [[wikipedia:Wikipedia:Researcher#Researcher]]
The 'researcher' group was created in April 2010 to allow individuals explicitly approved by the Wikimedia Foundation to search deleted pages and view deleted history entries without their associated text.",
	'grouppage-researcher' => "{{doc-group|researcher|page}}
From [[wikipedia:Wikipedia:Researcher#Researcher]]
The 'researcher' group was created in April 2010 to allow individuals explicitly approved by the Wikimedia Foundation to search deleted pages and view deleted history entries without their associated text.",
	'group-rollbacker' => '{{doc-group|rollbacker}}
{{Identical|Rollback}}',
	'group-rollbacker-member' => '{{doc-group|rollbacker|member}}
{{Identical|Rollback}}',
	'grouppage-rollbacker' => '{{doc-group|rollbacker|page}}
{{Identical|Rollback}}',
	'group-transwiki' => '{{doc-group|transwiki}}',
	'group-transwiki-member' => '{{doc-group|transwiki|member}}',
	'grouppage-transwiki' => '{{doc-group|transwiki|page}}',
	'group-trusted' => '{{doc-group|trusted}}',
	'group-trusted-member' => '{{doc-group|trusted|member}}',
	'grouppage-trusted' => '{{doc-group|trusted|page}}',
	'group-uploader' => '{{doc-group|uploader}}',
	'group-uploader-member' => '{{doc-group|uploader|member}}',
	'grouppage-uploader' => '{{doc-group|uploader|page}}',
	'group-Global_bot' => '{{doc-group|Global bot}}',
	'group-Global_bot-member' => '{{doc-group|Global bot|member}}',
	'grouppage-Global_bot' => '{{optional}}
{{doc-group|Global bot|page}}
{{Global grouppage}}',
	'group-Global_rollback' => '{{doc-group|Global rollback}}
{{Identical|Rollback}}',
	'group-Global_rollback-member' => '{{doc-group|Global rollback|member}}
{{Identical|Rollback}}',
	'grouppage-Global_rollback' => '{{optional}}
{{doc-group|Global rollback|page}}
{{Global grouppage}}',
	'group-Global_sysops' => '{{doc-group|Global sysops}}',
	'group-Global_sysops-member' => '{{doc-group|Global sysops|member}}',
	'grouppage-Global_sysops' => '{{optional}}
{{doc-group|Global sysops|page}}
{{Global grouppage}}',
	'group-Ombudsmen' => '{{doc-group|Ombudsmen}}',
	'group-Ombudsmen-member' => '{{doc-group|Ombudsmen|member}}',
	'grouppage-Ombudsmen' => '{{optional}}
{{doc-group|Ombudsmen|page}}
{{Global grouppage}}',
	'group-Staff' => '{{doc-group|Staff|prefix=wmf-}}',
	'group-Staff-member' => '{{doc-group|Staff|member|prefix=wmf-}}',
	'grouppage-Staff' => '{{optional}}
Please leave <code>Foundation:</code> untranslated.
{{doc-group|Staff|page|prefix=wmf-}}',
	'group-editinterface' => '{{doc-group|editinterface}}',
	'group-editinterface-member' => '{{doc-group|editinterface|member}}',
	'grouppage-editinterface' => '{{doc-group|editinterface|page}}
{{Global grouppage}}',
	'group-steward' => '{{doc-group|steward}}',
	'group-steward-member' => '{{doc-group|steward|member}}',
	'grouppage-steward' => '{{optional}}
{{doc-group|steward|page}}
{{Global grouppage}}',
	'group-sysadmin' => '{{doc-group|sysadmin}}',
	'group-sysadmin-member' => '{{doc-group|sysadmin|member}}',
	'grouppage-sysadmin' => '{{optional}}
{{doc-group|sysadmin|page}}
{{Global grouppage}}',
	'group-API_High_Limit_Requestor' => '{{doc-group|API_High_Limit_Requestor}}',
	'group-API_High_Limit_Requestor-member' => '{{doc-group|API_High_Limit_Requestor|member}}',
	'grouppage-API_High_Limit_Requestor' => '{{optional}}
{{doc-group|API_High_Limit_Requestor|page}}
{{Global grouppage}}',
	'group-Indic_Bots' => '{{doc-group|Indic_Bots}}',
	'group-Indic_Bots-member' => '{{doc-group|Indic_Bots|member}}',
	'grouppage-Indic_Bots' => '{{optional}}
{{doc-group|Indic_Bots|page}}
{{Global grouppage}}',
	'group-New_wikis_importer' => '{{doc-group|New_wikis_importer}}',
	'group-New_wikis_importer-member' => '{{doc-group|New_wikis_importer|member}}',
	'grouppage-New_wikis_importer' => '{{optional}}
{{doc-group|New_wikis_importer|page}}
{{Global grouppage}}',
	'group-global-ipblock-exempt' => '{{doc-group|global-ipblock-exempt}}',
	'group-global-ipblock-exempt-member' => '{{doc-group|global-ipblock-exempt|member}}',
	'grouppage-global-ipblock-exempt' => '{{optional}}
{{doc-group|global-ipblock-exempt|page}}
{{Global grouppage}}',
	'group-recursive-export' => '{{doc-group|recursive-export}}',
	'group-recursive-export-member' => '{{doc-group|recursive-export|member}}',
	'grouppage-recursive-export' => '{{optional}}
{{doc-group|recursive-export|page}}
{{Global grouppage}}',
	'group-translationadmin' => '{{doc-group|translationadmin}}',
	'group-translationadmin-member' => '{{doc-group|translationadmin|member}}',
	'grouppage-translationadmin' => '{{doc-group|translationadmin|page}}',
	'group-centralnoticeadmin' => '{{doc-group|centralnoticeadmin}}',
	'group-centralnoticeadmin-member' => '{{doc-group|centralnoticeadmin|member}}',
	'grouppage-centralnoticeadmin' => '{{doc-group|centralnoticeadmin|page}}',
	'group-coder' => '{{doc-group|coder}}',
	'group-coder-member' => '{{doc-group|coder|member}}',
	'grouppage-coder' => '{{optional}}
{{doc-group|coder|page}}',
	'group-inactive' => '{{doc-group|inactive}}
{{Identical|Inactive user}}',
	'group-inactive-member' => '{{doc-group|inactive|member}}
{{Identical|Inactive user}}',
	'grouppage-inactive' => '{{doc-group|inactive|page}}
{{Identical|Inactive user}}',
	'shared-repo-name-shared' => '{{optional}}
{{Identical|Wikimedia Commons}}',
	'wikimedia-copyright' => '{{Identical/Wikimedia-licensing}}
This message is displayed in the site footer. It is the default licensing policy for most Wikimedia sites.',
	'wikidata-copyright' => 'This message is displayed in the site footer. It is the special licensing policy for the Wikidata project.

The attribute "<code>title</code>" values ("Definition of the Creative Commons CC0 License", "Definition of the Creative Commons Attribution/Share-Alike License" and "Wikimedia Foundation Terms of Use") are also translatable.',
	'wikidata-shortcopyrightwarning' => 'Message displayed in the pop up when editing Wikidata data. It points to the terms of use and the CC0 license, as the structured data is published under CC0.

Uses {{msg-mw|Wikibase-save}}.',
	'wikimedia-copyrightwarning' => 'Warning: the correct default licenses links are to the creativecommons.org ([http://creativecommons.org/licenses/by-sa/3.0/] or e.g. [https://creativecommons.org/licenses/by-sa/3.0/deed.fr]) and fsf.org ([http://www.gnu.org/copyleft/fdl.html]) pages, which should be used in the translations to languages other than English. Customisation may be possible on local wikis upon community consensus.

{{Identical/Wikimedia-licensing}}',
	'wikibase-sitelinks-wikivoyage' => 'Section heading on Wikidata item page for Wikivoyage site links',
	'wikimedia-translationnotifications-signup-legal' => 'Legal text about the notifications sent to translators.',
	'upload-more-photos-of-this-monument' => 'This message is addded by the WLM app linking to the upload wizard with the parameters set for a new upload of the same monument.',
	'extdist-branch-master' => 'Message used for an extensions git master version; the latest development version',
	'extdist-branch-REL1_21' => 'See also:
* {{msg-mw|Extdist-branch-REL1 20}}',
	'extdist-branch-REL1_20' => 'Message used for an extension branched for MediaWiki version 1.20.

See also:
* {{msg-mw|Extdist-branch-REL1 21}}',
	'extdist-branch-REL1_19' => 'Message used for an extension branched for MediaWiki version 1.19',
	'createacct-helpusername-url' => 'The URL of a page providing username guidance for the wiki.
Used as a link in the {{msg-mw|Createacct-helpusername}} on WMF wikis.',
	'createacct-helpusername' => 'Message in new create account form providing guidance for username.',
	'createacct-captcha-help-url' => 'The URL of a page providing CAPTCHA assistance for the wiki.

Used as a link in {{msg-mw|Createacct-imgcaptcha-help}}.',
	'createacct-imgcaptcha-help' => 'Help text in vertical-layout create account form for image CAPTCHA input field when repositioned by JavaScript.',
	'wikimedia-developers' => 'Message in page footer that links to a "Developers" landing page.
{{Identical|Developer}}',
	'wikimedia-developers-url' => 'The URL of a portal page for development efforts.',
);

/** Abkhazian (Аҧсшәа)
 * @author Temuri rajavi
 */
$messages['ab'] = array(
	'sitesupport' => 'Ацхыраара зылшо',
);

/** Achinese (Acèh)
 * @author Andri.h
 * @author Nemo bis
 * @author Si Gam Acèh
 */
$messages['ace'] = array(
	'sitesupport' => 'Meuripè',
	'tooltip-n-sitesupport' => 'Dukông kamoë',
	'wikimedia-copyrightwarning' => 'Ngön neuteugön "{{int:savearticle}}", droëneuh akô ngön [//wikimediafoundation.org/wiki/Terms_of_Use Terms of Use], ngön droëneuh ngön h\'an jeuët neupubateuë lé, akô keu neupeuteubiët teunuléh droëneuh di yup [//creativecommons.org/licenses/by-sa/3.0/ CC-BY-SA 3.0 Lisensi] ngön [//www.gnu.org/copyleft/fdl.html GFDL].
Droëneuh akô meunyö hyperlink atawa URL nakeuh neuhubông nyang sép di yup lisensi Creative Commons.',
);

/** Afrikaans (Afrikaans)
 * @author Meno25
 * @author Naudefj
 * @author SPQRobin
 * @author Spacebirdy
 * @author පසිඳු කාවින්ද
 */
$messages['af'] = array(
	'wikimediamessages-desc' => 'Wikimedia spesifieke boodskappe',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=af',
	'sitesupport' => 'Skenkings',
	'tooltip-n-sitesupport' => 'Ondersteun ons',
	'specialpages-group-contribution' => 'Skenkings/Fondsinsameling',
	'nstab-creator' => 'Outeur',
	'nstab-institution' => 'Instelling',
	'nstab-sequence' => 'Volgorde',
	'nstab-timedtext' => 'Ondertitel',
	'group-Image-reviewer' => 'Beeld-beoordelaars',
	'group-Image-reviewer-member' => 'beeld-beoordelaar', # Fuzzy
	'grouppage-Image-reviewer' => '{{ns:project}}:Beeld beoordelaars',
	'group-OTRS-member' => 'OTRS-lede',
	'group-OTRS-member-member' => 'OTRS-lid', # Fuzzy
	'grouppage-OTRS-member' => '{{ns:project}}:OTRS-lede',
	'group-abusefilter' => 'misbruikfilter-redakteurs',
	'group-abusefilter-member' => 'misbruikfilter-redakteur', # Fuzzy
	'grouppage-abusefilter' => '{{ns:project}}:Misbruikfilter-redakteurs',
	'group-accountcreator' => 'Gebruikersrekening-skeppers',
	'group-accountcreator-member' => 'gebruikersrekening-skepper', # Fuzzy
	'grouppage-accountcreator' => '{{ns:project}}:Gebruikersrekening-skeppers',
	'group-arbcom' => 'Arbitrasie komiteelede',
	'group-arbcom-member' => 'arbitrasie komiteelid', # Fuzzy
	'grouppage-arbcom' => '{{ns:project}}:Arbitrasiekomiteelede',
	'group-autopatrolled' => 'Autopatrollers',
	'grouppage-autopatrolled' => '{{ns:project}}:Autopatrollers',
	'group-autoreviewer' => 'Autoreviewers',
	'group-bigexport' => 'Groot eksporteurs',
	'group-bigexport-member' => 'groot eksporteur', # Fuzzy
	'grouppage-bigexport' => '{{ns:project}}:Groot eksporteurs',
	'group-botadmin' => 'Bots met administrateur regte',
	'group-confirmed' => 'bevestigde gebruikers',
	'group-confirmed-member' => 'bevestigde gebruiker', # Fuzzy
	'grouppage-confirmed' => '{{ns:project}}:Bevestigde gebruikers',
	'group-editprotected' => 'Wysigers van beskermde bladsye',
	'group-editprotected-member' => 'wysigers van beskermde bladsye', # Fuzzy
	'grouppage-editprotected' => '{{ns:project}}:Wysigers van beskermde bladsye',
	'group-eliminator' => 'Opruimers',
	'group-eliminator-member' => 'opruimer', # Fuzzy
	'grouppage-eliminator' => '{{ns:project}}:Opruimer',
	'group-filemover' => 'Lêerskuiwers',
	'group-filemover-member' => 'lêerskuiwer', # Fuzzy
	'grouppage-filemover' => '{{ns:project}}:Lêerskuiwers',
	'group-flood' => 'botgebruikers',
	'group-flood-member' => 'botgebruiker', # Fuzzy
	'grouppage-flood' => '{{ns:project}}:Botgebruikers',
	'group-founder' => 'Stigters',
	'group-founder-member' => 'Stigter', # Fuzzy
	'grouppage-founder' => '{{ns:project}}:Grondleggers',
	'group-import' => 'Importeurders',
	'group-import-member' => 'Importeurder', # Fuzzy
	'grouppage-import' => '{{ns:project}}:Importeurders',
	'group-interface_editor' => 'Koppelvlakontwerpers',
	'group-interface_editor-member' => 'koppelvlakontwerper', # Fuzzy
	'grouppage-interface_editor' => '{{ns:project}}:Koppelvlakontwerpers',
	'group-ipblock-exempt' => 'uitgesonderdes van IP-adresblokkades',
	'group-ipblock-exempt-member' => 'uitgesonder van IP-adresblokkades', # Fuzzy
	'grouppage-ipblock-exempt' => '{{ns:project}}:Uitgesonderdes van IP-adresblokkades',
	'group-patroller' => 'Kontroleurs',
	'group-patroller-member' => 'Kontroleur', # Fuzzy
	'group-researcher' => 'Navorsers',
	'group-researcher-member' => 'navorser', # Fuzzy
	'grouppage-researcher' => '{{ns:project}}:Navorsers',
	'group-rollbacker' => 'Terugrollers',
	'group-rollbacker-member' => 'terugroller', # Fuzzy
	'grouppage-rollbacker' => '{{ns:project}}:Terugrollers',
	'group-transwiki' => 'Transwiki-importeurs',
	'group-transwiki-member' => 'transwiki-importeur', # Fuzzy
	'grouppage-transwiki' => '{{ns:project}}:Transwiki-importeurs',
	'group-trusted' => 'Vertroude gebruikers',
	'group-trusted-member' => 'vertroude gebruiker', # Fuzzy
	'grouppage-trusted' => '{{ns:project}}:Vertroude gebruikers',
	'group-Global_bot' => 'Globale botte',
	'group-Global_bot-member' => 'globale bot', # Fuzzy
	'group-Global_rollback' => 'Globale terugrollers',
	'group-Global_rollback-member' => 'globale terugroller', # Fuzzy
	'group-Global_sysops' => 'Globale beheerders',
	'group-Global_sysops-member' => 'globale beheerder', # Fuzzy
	'group-Ombudsmen' => 'Ombudsmanne',
	'group-Ombudsmen-member' => 'ombudsman', # Fuzzy
	'group-Staff' => 'Personeel',
	'group-Staff-member' => 'Personeellid',
	'group-editinterface' => 'Koppelvlakontwerpers',
	'group-editinterface-member' => 'koppelvlak-redakteur', # Fuzzy
	'group-steward' => 'Waarde',
	'group-steward-member' => 'Waard', # Fuzzy
	'grouppage-steward' => '{{ns:project}}:Waarde',
	'group-sysadmin' => 'Stelseladministrateurs',
	'group-sysadmin-member' => 'Stelseladministrateur', # Fuzzy
	'group-coder' => 'Programmeerders',
	'group-coder-member' => 'programmeerder', # Fuzzy
	'group-inactive' => 'Onaktiewe gebruikers',
	'group-inactive-member' => 'onaktiewe gebruiker', # Fuzzy
	'grouppage-inactive' => '{{ns:project}}:Onaktiewe gebruikers',
	'wikimedia-copyright' => "Die teks is beskikbaar onder die <a href='//en.wikipedia.org/wiki/Wikipedia:Text_of_Creative_Commons_Attribution-ShareAlike_3.0_Unported_License'>Creative Commons Erkenning-Insgelyks Deel</a> lisensie. Dit is moontlik dat aanvullende voorwaardes van toepassing is. Sien die <a href='//wikimediafoundation.org/wiki/Terms_of_Use'>Algemene Voorwaardes</a> vir meer inligting.",
	'wikimedia-copyrightwarning' => 'Deur op "{{int:savearticle}}" te kliek stem u in tot die [//wikimediafoundation.org/wiki/Terms_of_Use gebruiksvoorwaardes] en gee u onherroeplik toestemming dat u bydrae onder die [//creativecommons.org/licenses/by-sa/3.0/deed.af Creative Commons Erkenning-InsgelyksDeel] en die [http://af.wikipedia.org/wiki/GNU-lisensie_vir_vrye_dokumentasie GNU-lisensie vir vrye dokumentasie] gepubliseer word.
U stem verder in dat \'n skakel of URL voldoende naamsvermelding is om aan die Creative Commons-lisensie te voldoen.',
	'cant-delete-main-page' => 'Jy kan nie verwyder of skuif die hoofblad.',
	'createacct-helpusername-url' => '{{ns:Project}}:Beleid_gebruikersname',
	'createacct-captcha-help-url' => '{{ns:Project}}:Gebruiker_aanvra',
	'createacct-imgcaptcha-help' => "Kan nie die beeld sien nie? [[{{MediaWiki:createacct-captcha-help-url}}|Vra dan 'n gebruiker aan]]",
);

/** Gheg Albanian (Gegë)
 * @author Bresta
 * @author Cradel
 * @author Mdupont
 */
$messages['aln'] = array(
	'wikimediamessages-desc' => 'Mesazhet specifike për wikimedia',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=aln',
	'sitesupport' => 'Jep donacion',
	'tooltip-n-sitesupport' => 'Përkrahnani',
	'specialpages-group-contribution' => 'Kontributi/fundraiser',
	'group-abusefilter' => 'Redaktuesit e filtrave të keqpërdorimit',
	'group-abusefilter-member' => 'redaktues i filtrave të keqpërdorimit', # Fuzzy
	'grouppage-abusefilter' => '{{ns:project}}:Redaktuesit e filtrave të keqpërdorimit',
	'group-accountcreator' => 'Krijuesit e llogarive',
	'group-accountcreator-member' => 'krijues i llogarisë', # Fuzzy
	'grouppage-accountcreator' => '{{ns:project}}:Krijues llogarish',
	'group-arbcom' => 'Anëtarët e komisionit Arbitrazhi',
	'group-arbcom-member' => 'komisioni arbitrazhi anëtar', # Fuzzy
	'grouppage-arbcom' => '{{ns:project}}:anëtarët e komisionit arbitrazhit',
	'group-autopatrolled' => 'Autopatrollers',
	'group-autopatrolled-member' => 'autopatrulluesi', # Fuzzy
	'grouppage-autopatrolled' => '{{ns:project}}:Autopatrullues',
	'group-autoreviewer' => 'Autorishikuesit',
	'group-autoreviewer-member' => 'autorishikues', # Fuzzy
	'grouppage-autoreviewer' => '{{ns:project}}:Autorishikuesit',
	'group-bigexport' => 'Eksportuesit e mëdhêj',
	'group-bigexport-member' => 'eksportues i madh', # Fuzzy
	'grouppage-bigexport' => '{{ns:project}}:Eksportuesit e mëdhêj',
	'group-confirmed' => 'përdoruesit e konfirmuar',
	'group-confirmed-member' => 'përdorues konfirmoi', # Fuzzy
	'grouppage-confirmed' => '{{ns:project}}:përdoruesit e konfirmoi',
	'group-editprotected' => 'Redaktorët e mbrojtura faqe',
	'group-editprotected-member' => 'mbrojtur redaktor faqe', # Fuzzy
	'grouppage-editprotected' => '{{ns:project}}:redaktorët e mbrojtura faqe',
	'group-filemover' => 'Levizesit File',
	'group-filemover-member' => 'file forcë lëvizëse', # Fuzzy
	'grouppage-filemover' => '{{ns:project}}:Levizesit File',
	'group-flood' => 'përdoruesit Bot',
	'group-flood-member' => 'përdorues bot', # Fuzzy
	'grouppage-flood' => '{{ns:project}}:përdoruesit Bot',
	'group-founder' => 'Themeluesit',
	'group-founder-member' => 'themelues', # Fuzzy
	'grouppage-founder' => '{{ns:project}}:Themeluesit',
	'group-import' => 'Importuesit',
	'group-import-member' => 'importues', # Fuzzy
	'grouppage-import' => '{{ns:project}}:Importuesit',
	'group-interface_editor' => 'redaktorët Interface',
	'group-interface_editor-member' => 'editor interface', # Fuzzy
	'grouppage-interface_editor' => '{{ns:project}}:redaktorët Interface',
	'group-ipblock-exempt' => "Përjashtimet e bllokimeve të IP've",
	'group-ipblock-exempt-member' => "përjashtim nga bllokimi i IP've", # Fuzzy
	'grouppage-ipblock-exempt' => "{{ns:project}}:përjashtim prej bllokimit të IP've",
	'group-patroller' => 'Patrollers',
	'group-patroller-member' => 'patroller', # Fuzzy
	'group-rollbacker' => 'Mbrapakthyesit',
	'group-rollbacker-member' => 'mbrapakthyes', # Fuzzy
	'grouppage-rollbacker' => '{{ns:project}}:Mbrapakthyesit',
	'group-transwiki' => 'Importuesit transwiki',
	'group-transwiki-member' => 'importues transwiki', # Fuzzy
	'grouppage-transwiki' => '{{ns:project}}:Importuesit transwiki',
	'group-trusted' => 'përdoruesit e Besuar',
	'group-trusted-member' => 'përdorues besuar', # Fuzzy
	'grouppage-trusted' => '{{ns:project}}:përdoruesit e Besuar',
	'group-Global_bot' => 'Botat global',
	'group-Global_bot-member' => 'bot global', # Fuzzy
	'group-Global_rollback' => 'Mbrapakthyesit global',
	'group-Global_rollback-member' => 'mbrapakthyes global', # Fuzzy
	'group-Global_sysops' => 'sysops Global',
	'group-Global_sysops-member' => 'sysop globale', # Fuzzy
	'group-Ombudsmen' => 'Ombudspersonat',
	'group-Ombudsmen-member' => 'ombudsperson', # Fuzzy
	'group-Staff' => 'Staffi',
	'group-Staff-member' => 'antar i staffit',
	'group-editinterface' => 'redaktorët Interface',
	'group-editinterface-member' => 'editor interface', # Fuzzy
	'group-steward' => 'Përcjellësit',
	'group-steward-member' => 'përcjellës', # Fuzzy
	'group-sysadmin' => 'Administruesit e sistemit',
	'group-sysadmin-member' => 'administrues i sistemit', # Fuzzy
	'group-coder' => 'Programerat',
	'group-coder-member' => 'programer', # Fuzzy
	'group-inactive' => 'Përdoruesit joaktiv',
	'group-inactive-member' => 'përdorues joaktiv', # Fuzzy
	'grouppage-inactive' => '{{ns:project}}:Përdoruesit joaktiv',
	'wikimedia-copyright' => 'Ky tekst âsht vû në dispozicion nën licencën <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike License</a>;
mundet me pasë klauzola shtesë që vijnë në shprehje.
Shih <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Kushtet e përdorimit</a> për mâ shumë detaje.',
	'wikimedia-copyrightwarning' => "Me t'regjistrue faqen, ju pajtoheni me lëshue kontributin tuej parevokueshëm nën [//creativecommons.org/licenses/by-sa/3.0/ Licencën Creative Commons Attribution/Share-Alike 3.0] dhe [//www.gnu.org/copyleft/fdl.html GFDL].
Pajtoheni që ri-përdoruesit mujnë me shprehë mirënjohjen së paku përmjet nji vegze apo URL'je te faqja, në të cilën po kontribuoni.
Shih [//wikimediafoundation.org/wiki/Terms_of_Use Kushtet e përdorimit] për detaje.", # Fuzzy
);

/** Amharic (አማርኛ)
 * @author Codex Sinaiticus
 */
$messages['am'] = array(
	'sitesupport' => 'መዋጮ ለመስጠት',
	'tooltip-n-sitesupport' => 'የገንዘብ ስጦታ ለዊኪሜድያ ይስጡ',
	'group-founder' => 'መስራች',
	'group-founder-member' => 'መስራች', # Fuzzy
);

/** Aragonese (aragonés)
 * @author Dalton2
 * @author Juanpabl
 * @author Nemo bis
 */
$messages['an'] = array(
	'wikimediamessages-desc' => 'Mensaches especificos de Wikimedia',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=an',
	'sitesupport' => 'Donativos',
	'tooltip-n-sitesupport' => 'Aduye-nos',
	'specialpages-group-contribution' => 'Contribución/Recaudación de fundos',
	'nstab-creator' => 'Creyador',
	'nstab-institution' => 'Institución',
	'nstab-sequence' => 'Seqüencia',
	'nstab-timedtext' => 'TimedText',
	'group-Ex_Administrator' => 'Antigos administradors',
	'group-Ex_Administrator-member' => '{{GENDER:$1|antigo administrador|antiga administradora}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}: Ex-administradors',
	'group-Ex_Bureaucrat' => 'Antigos burócratas',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|antigo burócrata|antiga burócrata}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}: Ex-burocratas',
	'group-Image-reviewer' => "Revisors d'imachens",
	'group-Image-reviewer-member' => '{{GENDER:$1|revisor de fichers|revisora de fichers}}',
	'grouppage-Image-reviewer' => "{{ns:project}}:Revisors d'imachens",
	'group-OTRS-member' => "Miembros de l'OTRS",
	'group-OTRS-member-member' => '{{GENDER:$1|miembro de OTRS}}',
	'grouppage-OTRS-member' => "{{ns:project}}:Miembros d'OTRS",
	'group-abusefilter' => "Editors de filtro d'abuso",
	'group-abusefilter-member' => "{{GENDER:$1|editor de filtro d'abuso|editoria de filtro d'abuso}}",
	'grouppage-abusefilter' => "{{ns:project}}:Editors de filtro d'abuso",
	'group-accountcreator' => 'Creyadors de cuentas',
	'group-accountcreator-member' => '{{GENDER:$1|Creyador de cuenta|Creyadora de cuenta}}',
	'grouppage-accountcreator' => '{{ns:project}}:Creyadors de cuenta',
	'group-arbcom' => "Miembros d'o comité d'arbitrache",
	'group-arbcom-member' => "{{GENDER:$1|miembro d'o comité d'arbitrache}}",
	'grouppage-arbcom' => "{{ns:project}}:Miembros d'o comité d'arbitrache",
	'group-autopatrolled' => 'Autopatrullers',
	'group-autopatrolled-member' => '{{GENDER:$1|autoverificado|autoverificada}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Autopatrullers',
	'group-autoreviewer' => 'Autorevisadors',
	'group-autoreviewer-member' => '{{GENDER:$1|autorevisor|autorevisora}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Autorrevisors',
	'group-bigexport' => 'Grans exportadors',
	'group-bigexport-member' => '{{GENDER:$1|gran exportador|gran exportadora}}',
	'grouppage-bigexport' => '{{ns:project}}:Grans exportadors',
	'group-botadmin' => "Bots con dreitos d'administrador",
	'group-botadmin-member' => "{{GENDER:$1|bot con dreitos d'administrador}}",
	'grouppage-botadmin' => "{{ns:project}}:Bots con dreitos d'administrador",
	'group-confirmed' => 'Usuarios confirmaus',
	'group-confirmed-member' => '{{GENDER:$1|usuario confirmau|usuaria confirmada}}',
	'grouppage-confirmed' => '{{ns:project}}:Usuarios confirmaus',
	'group-editprotected' => 'Editors de pachinas protechidas',
	'group-editprotected-member' => '{{GENDER:$1|editor de pachina protechida|editora de pachina protechida}}',
	'grouppage-editprotected' => '{{ns:project}}:Editors de pachinas protechidas',
	'group-eliminator' => 'Eliminadors',
	'group-eliminator-member' => '{{GENDER:$1|borrador|borradora}}',
	'grouppage-eliminator' => '{{ns:project}}:Borradors',
	'group-filemover' => 'Tresladadors de fichers',
	'group-filemover-member' => '{{GENDER:$1|tresladador de fichers|tresladadera de fichers}}',
	'grouppage-filemover' => '{{ns:project}}:Tresladador de fichers',
	'group-flood' => 'Usuarios bot',
	'group-flood-member' => '{{GENDER:$1|usuario|usuaria}} bot',
	'grouppage-flood' => '{{ns:project}}:Usuarios bot',
	'group-founder' => 'Fundadors',
	'group-founder-member' => '{{GENDER:$1|fundador}}',
	'grouppage-founder' => '{{ns:project}}:Fundadors',
	'group-import' => 'Importadors',
	'group-import-member' => '{{GENDER:$1|importador|importadora}}',
	'grouppage-import' => '{{ns:project}}:Importadors',
	'group-interface_editor' => "Editores d'interficie",
	'group-interface_editor-member' => "{{GENDER:$1|editor d'interfici|editora d'interficie}}",
	'grouppage-interface_editor' => "{{ns:project}}:Editors d'a interficie",
	'group-ipblock-exempt' => 'Exención de bloqueyo IP',
	'group-ipblock-exempt-member' => '{{GENDER:$1|exento de bloqueyo IP|exenta de bloqueyo IP}}',
	'grouppage-ipblock-exempt' => "{{ns:project}}:Exención d'o bloqueyo d'IP",
	'group-patroller' => 'Patrullers',
	'group-patroller-member' => '{{GENDER:$1|patrullero|patrullera}}',
	'group-researcher' => 'Investigadors',
	'group-researcher-member' => '{{GENDER:$1|investigador|investigadera}}',
	'grouppage-researcher' => '{{ns:project}}:Investigadors',
	'group-rollbacker' => 'Revertidors',
	'group-rollbacker-member' => '{{revertidor|revertidor|revertidora}}',
	'grouppage-rollbacker' => '{{ns:project}}:Reversors',
	'group-transwiki' => 'Importadors de transwiki',
	'group-transwiki-member' => '{{GENDER:$1|importador transwiki|importadora transwiki}}',
	'grouppage-transwiki' => '{{ns:project}}:Importardors transwiki',
	'group-trusted' => 'Usuarios de confianza',
	'group-trusted-member' => '{{GENDER:$1|usuario de fiar|usuaria de fiar}}',
	'grouppage-trusted' => '{{ns:project}}:Usuarios de confianza',
	'group-Global_bot' => 'Bots globals',
	'group-Global_bot-member' => '{{GENDER:$1|Bot global}}',
	'group-Global_rollback' => 'Revertidors globals',
	'group-Global_rollback-member' => '{{GENDER:$1|revertidor global|revertidora global}}',
	'group-Global_sysops' => 'Administradors globals',
	'group-Global_sysops-member' => '{{GENDER:$1|administrador global|administradera global}}',
	'group-Ombudsmen' => 'Chusticias',
	'group-Ombudsmen-member' => '{{GENDER:$1|chusticia}}',
	'group-Staff' => "Personal d'o wiki",
	'group-Staff-member' => "{{GENDER:$1|Miembro d'o personal}}",
	'group-editinterface' => "Editors d'interficie",
	'group-editinterface-member' => "{{GENDER:$1|editor d'interficie|editora d'interficie}}",
	'group-steward' => 'Stewards',
	'group-steward-member' => '{{GENDER:$1|steward}}',
	'group-sysadmin' => "Almenistradors d'o sistema",
	'group-sysadmin-member' => "{{GENDER:$1|administrador|administradora}} d'o sistema",
	'group-translationadmin' => 'Administradors de traducción',
	'group-translationadmin-member' => '{{GENDER:$1|Administrador|Administradora}} de traducción',
	'grouppage-translationadmin' => '{{ns:project}}:Administradors de traducción',
	'group-coder' => 'Codificadors',
	'group-coder-member' => '{{GENDER:$1|codificador|codificadora}}',
	'group-inactive' => 'Usuarios inactivos',
	'group-inactive-member' => '{{GENDER:$1|usuario inactivo|usuaria inactiva}}',
	'grouppage-inactive' => '{{ns:project}}:Usuarios inactivos',
	'wikimedia-copyright' => 'O texto ye disponible baixo a <a href="//creativecommons.org/licenses/by-sa/3.0/">Licencia Creative Commons Atribución/Compartir-Igual</a>;
talment sigan d\'aplicación clausulas adicionals.
Mire-se <a href="//wikimediafoundation.org/wiki/Terms_of_Use">os termins d\'uso</a> ta conoixer más detalles.',
	'wikimedia-copyrightwarning' => "En pretando o botón \"{{int:savearticle}}\", ye acceptando os [//wikimediafoundation.org/wiki/Terms_of_Use Termins d'utilización], y a cesión irrefusable d'a suya contribución baixo a [//creativecommons.org/licenses/by-sa/3.0/ Licencia Creative Commons CC-BY-SA 3.0] y a [//www.gnu.org/copyleft/fdl.html Licencia GFDL].
Tamién ye acceptando que una cita por meyo d'un hipervinclo u URL ye una atribución suficient baixo a licencia Creative Commons.",
	'cant-delete-main-page' => 'No puede borrar ni mover a pachina prencipal.',
);

/** Old English (Ænglisc)
 * @author Gott wisst
 * @author Wōdenhelm
 */
$messages['ang'] = array(
	'wikimediamessages-desc' => 'Ǣrendgewritu synderlīce for Wikimedie',
	'sitesupport' => 'Giefan fēos lēane',
	'group-autopatrolled' => 'Selffremmende weardas',
	'group-autopatrolled-member' => 'selffremmende ƿeard', # Fuzzy
	'group-autoreviewer' => 'Selffremmende dēmendas',
	'group-autoreviewer-member' => 'selffremmende dēmend', # Fuzzy
	'group-bigexport' => 'Grēate ūtsenderas',
	'group-bigexport-member' => 'grēat ūtsendere', # Fuzzy
	'group-editprotected' => 'Borgenra trameta adihtendas',
	'group-editprotected-member' => 'Borgen sīde ādihtend', # Fuzzy
	'group-flood' => 'Searuþrǣla brūcendas',
	'group-flood-member' => 'searuþrælisc brūcend', # Fuzzy
	'grouppage-flood' => '{{ns:project}}:Searuþrǣla brūcendas',
	'group-founder' => 'Onstelleras',
	'group-founder-member' => 'onstellere', # Fuzzy
	'grouppage-founder' => '{{ns:project}}:Onstelleras',
	'group-import' => 'Inbringeras',
	'group-import-member' => 'inbringere', # Fuzzy
	'grouppage-import' => '{{ns:project}}:Inbringeras',
	'group-interface_editor' => 'Gewealdes wlitan adihtendas',
	'group-interface_editor-member' => 'ānsīene ādihtend', # Fuzzy
	'group-patroller' => 'Weardas',
	'group-patroller-member' => 'ƿeard', # Fuzzy
	'group-transwiki' => 'Inbringeras þā wyrcaþ betweoh wiki',
	'group-transwiki-member' => 'ȝeondƿiki inbringere', # Fuzzy
	'grouppage-transwiki' => '{{ns:project}}:Inbringendas þā wyrcaþ betweoh wiki',
	'group-trusted' => 'Getrēowede brūcendas',
	'group-trusted-member' => 'betrēoƿed brūcend', # Fuzzy
	'grouppage-trusted' => '{{ns:project}}:Getrēowede brūcendas',
	'group-Global_bot' => 'Eormenlice searuþrǣlas',
	'group-Global_bot-member' => 'ƿorulde searuþræl', # Fuzzy
	'group-Global_sysops' => 'Eormenlice bewitendas',
	'group-Global_sysops-member' => 'ƿorulde betƿitend', # Fuzzy
	'group-editinterface' => 'Gewealdes wlitan adihtendas',
	'group-editinterface-member' => 'ānsīene ādihtend', # Fuzzy
	'group-steward' => 'Stigweardas',
	'group-steward-member' => 'stiȝƿeard', # Fuzzy
	'group-sysadmin' => 'Endebyrdnesse tōþegnendas',
	'group-sysadmin-member' => 'endebyrdnesse tōþeȝn', # Fuzzy
	'group-inactive' => 'Īdle brūcendas',
	'group-inactive-member' => 'sleac brūcend', # Fuzzy
	'grouppage-inactive' => '{{ns:project}}:Īdle brūcendas',
);

/** Arabic (العربية)
 * @author Abanima
 * @author Achraf94
 * @author Aiman titi
 * @author AwamerT
 * @author Ciphers
 * @author DRIHEM
 * @author Meno25
 * @author Mido
 * @author OsamaK
 * @author ترجمان05
 */
$messages['ar'] = array(
	'wikimediamessages-desc' => 'رسائل خاصة بويكيميديا',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=ar',
	'sitesupport' => 'تبرع',
	'tooltip-n-sitesupport' => 'ادعمنا',
	'specialpages-group-contribution' => 'المساهمات/جمع التبرعات',
	'nstab-creator' => 'المنشئ',
	'nstab-institution' => 'مؤسسة',
	'nstab-sequence' => 'تتابع',
	'nstab-timedtext' => 'توقيت النص',
	'group-Ex_Administrator' => 'مدراء سابقون',
	'group-Ex_Administrator-member' => '{{GENDER:$1|إداري سابق|إدارية سابقة}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:مدراء سابقون',
	'group-Ex_Bureaucrat' => 'بيروقراطيون سابقون',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|بيروقراطي سابق}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:بيروقراطيون سابقون',
	'group-Image-reviewer' => 'مراجعو الصورة',
	'group-Image-reviewer-member' => '{{GENDER:$1|مراجع صور|مراجعة صور}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:مراجعو الصور',
	'group-OTRS-member' => 'أعضاء أو تي آر إس',
	'group-OTRS-member-member' => '{{GENDER:$1|OTRS عضو}}',
	'grouppage-OTRS-member' => '{{ns:project}}:أعضاء أو تي آر إس',
	'group-abusefilter' => 'معدلو مرشحات الإساءة',
	'group-abusefilter-member' => '{{GENDER:$1|معدل مرشح الإساءة|معدلة مرشح الإساءة}}',
	'grouppage-abusefilter' => '{{ns:project}}:معدلو مرشح الإساءة',
	'group-accountcreator' => 'منشئو الحسابات',
	'group-accountcreator-member' => '{{GENDER:$1|منشئ حسابات|منشئة حسابات}}',
	'grouppage-accountcreator' => '{{ns:project}}:منشئو الحسابات',
	'group-arbcom' => 'أعضاء لجنة التحكيم',
	'group-arbcom-member' => '{{GENDER:$1|عضو لجنة التحكيم|عضوة لجنة التحكيم}}',
	'grouppage-arbcom' => '{{ns:project}}:أعضاء لجنة التحكيم',
	'group-autopatrolled' => 'المراجِعون التلقائيون',
	'group-autopatrolled-member' => '{{GENDER:$1|مراجع تلقائي}}',
	'grouppage-autopatrolled' => '{{ns:project}}:مراجعون تلقائيون',
	'group-autoreviewer' => 'مراجعون تلقائيون',
	'group-autoreviewer-member' => '{{GENDER:$1|مراجع تلقائي}}',
	'grouppage-autoreviewer' => '{{ns:project}}:مراجع تلقائي',
	'group-bigexport' => 'مصدرون كبار',
	'group-bigexport-member' => '{{GENDER:$1|مصدر كبير}}',
	'grouppage-bigexport' => '{{ns:project}}:مصدرون كبار',
	'group-botadmin' => 'بوتات حاملة لحقوق إدارية',
	'group-botadmin-member' => '{{GENDER:$1|بوت حامل لحقوق إدارية}}',
	'grouppage-botadmin' => '{{ns:project}}:بوتات حاملة لحقوق إدارية',
	'group-confirmed' => 'مستخدمون مؤكدون',
	'group-confirmed-member' => '{{GENDER:$1|مستخدم مؤكد|مستخدمة مؤكدة}}',
	'grouppage-confirmed' => '{{ns:project}}:مستخدمون مؤكدون',
	'group-editprotected' => 'معدلو الصفحات المحمية',
	'group-editprotected-member' => '{{GENDER:$1|معدل صفحات محمي}}',
	'grouppage-editprotected' => '{{ns:project}}:معدلو الصفحات المحمية',
	'group-eliminator' => 'المحررون',
	'group-eliminator-member' => '{{GENDER:$1|مقصي}}',
	'grouppage-eliminator' => '{{ns:project}}:محرر',
	'group-filemover' => 'ناقلو الملف',
	'group-filemover-member' => '{{GENDER:$1|ناقل الملفات}}',
	'grouppage-filemover' => '{{ns:project}}:ناقلو الملفات',
	'group-flood' => 'مستخدمو البوت',
	'group-flood-member' => '{{GENDER:$1|مستخدم بوت}}',
	'grouppage-flood' => '{{ns:project}}:مستخدمو البوت',
	'group-founder' => 'مؤسسون',
	'group-founder-member' => '{{GENDER:$1|مؤسس|مؤسسة}}',
	'grouppage-founder' => '{{ns:project}}:مؤسسون',
	'group-import' => 'مستوردون',
	'group-import-member' => '{{GENDER:$1|مستورد|مستوردة}}',
	'grouppage-import' => '{{ns:project}}:مستوردون',
	'group-interface_editor' => 'محرّرو الواجهة',
	'group-interface_editor-member' => '{{GENDER:$1|محرر الواجهة}}',
	'grouppage-interface_editor' => '{{ns:project}}:محرّرو الواجهة',
	'group-ipblock-exempt' => 'مستثنون من منع الأيبي',
	'group-ipblock-exempt-member' => '{{GENDER:$1|مستثنى|مستثناة}} من حظر الآيبي',
	'grouppage-ipblock-exempt' => '{{ns:project}}:استثناء من منع الأيبي',
	'group-patroller' => 'مراجعون',
	'group-patroller-member' => '{{GENDER:$1|مدقق|مدققة}}',
	'group-researcher' => 'الباحثون',
	'group-researcher-member' => '{{GENDER:$1|باحث|باحثة}}',
	'grouppage-researcher' => '{{ns:project}}:باحثون',
	'group-rollbacker' => 'مسترجعون',
	'group-rollbacker-member' => '{{GENDER:$1|مسترجع}}',
	'grouppage-rollbacker' => '{{ns:project}}:مسترجعون',
	'group-transwiki' => 'مستوردون عبر الويكي',
	'group-transwiki-member' => '{{GENDER:$1|مستورد|مستوردة}} عبر الويكي',
	'grouppage-transwiki' => '{{ns:project}}:مستوردون عبر الويكي',
	'group-trusted' => 'مستخدمون موثوقون',
	'group-trusted-member' => '{{GENDER:$1|مستخدم موثوق}}',
	'grouppage-trusted' => '{{ns:project}}:مستخدمون موثوقون',
	'group-Global_bot' => 'بوتات عامة',
	'group-Global_bot-member' => '{{GENDER:$1|بوت عام}}',
	'group-Global_rollback' => 'مسترجعون عامون',
	'group-Global_rollback-member' => '{{GENDER:$1|مسترجع عام}}',
	'grouppage-Global_rollback' => 'm:Global rollback/ar',
	'group-Global_sysops' => 'مديرو نظام عامون',
	'group-Global_sysops-member' => '{{GENDER:$1|مدير نظام عام}}',
	'grouppage-Global_sysops' => 'm:Global sysops/ar',
	'group-Ombudsmen' => 'أومبدسمين',
	'group-Ombudsmen-member' => '{{GENDER:$1|ديوان المظالم}}',
	'grouppage-Ombudsmen' => 'm:Ombudsman commission/ar',
	'group-Staff' => 'مشرفون',
	'group-Staff-member' => '{{GENDER:$1|موظف|موظفة}}',
	'grouppage-Staff' => 'Foundation:الطاقم',
	'group-editinterface' => 'محرّرو الواجهة',
	'group-editinterface-member' => '{{GENDER:$1|محرر الواجهة}}',
	'group-steward' => 'مضيفون',
	'group-steward-member' => '{{GENDER:$1|مضيف|مضيفة}}',
	'grouppage-steward' => 'm:Stewards/ar',
	'group-sysadmin' => 'إداريو النظام',
	'group-sysadmin-member' => '{{GENDER:$1|مسؤول النظام}}',
	'group-translationadmin' => 'إداريو الترجمة',
	'group-translationadmin-member' => '{{GENDER:$1 |إداري الترجمة}}',
	'grouppage-translationadmin' => '{{ns:project}}: إداريو الترجمة',
	'group-coder' => 'مكودون',
	'group-coder-member' => '{{GENDER:$1|مشفر بيانات}}',
	'grouppage-coder' => '{{ns:project}}:مكود',
	'group-inactive' => 'مستخدمون غير نشطين',
	'group-inactive-member' => '{{GENDER:$1|مستخدم غير نشط|مستخدمة  غير نشطة}}',
	'grouppage-inactive' => '{{ns:project}}:مستخدمون غير نشطين',
	'shared-repo-name-shared' => 'ويكيميديا كومنز',
	'wikimedia-copyright' => 'النصوص مُرخّصة <a href="//creativecommons.org/licenses/by-sa/3.0/">برخصة المُشاع الإبداعي: النسبة-الترخيص بالمثل</a>.
قد تنطبق بنود أخرى أيضًا.
انظر <a href="//wikimediafoundation.org/wiki/Terms_of_use">شروط الاستخدام</a> للتفاصيل.',
	'wikimedia-copyrightwarning' => 'بنقر زر "{{int:savearticle}}"، أنت توافق على [//wikimediafoundation.org/wiki/Terms_of_Use شروط الاستخدام] وتُرخّص مساهمتك بلا رجعة [//creativecommons.org/licenses/by-sa/3.0/ برخصة المشاع الإبداعي: النسبة-الترخيص بالمثل 3.0] و[//www.gnu.org/copyleft/fdl.html رخصة جنو للوثائق الحرة].
أنت توافق على أن تكفي النسبة في رخصة المشاع الإبداعي بوصلة فائقة أو مسار الصفحة.',
	'cant-delete-main-page' => 'لا يمكنك حذف أو نقل الصفحة الرئيسية.',
	'upload-more-photos-of-this-monument' => 'قم برفع المزيد من الصور لهذا الأثر',
	'createacct-captcha-help-url' => '{{ns:Project}}: طلب حساب',
);

/** Aramaic (ܐܪܡܝܐ)
 * @author Basharh
 * @author Man2fly2002
 */
$messages['arc'] = array(
	'sitesupport' => 'ܕܒܘܚ ܠܢ',
	'group-confirmed' => 'ܡܦܠܚܢ̈ܐ ܡܫܪܪ̈ܐ',
	'grouppage-confirmed' => '{{ns:project}}:ܡܦܠܚܢ̈ܐ ܡܫܪܪ̈ܐ',
	'group-founder-member' => '{{GENDER:$1|ܫܬܐܣܢܐ|ܫܬܐܣܢܬܐ}}',
	'grouppage-founder' => '{{ns:project}}:ܫܬܐܣܢ̈ܐ',
	'grouppage-import' => '{{ns:project}}:ܡܥܠܢ̈ܐ',
	'group-sysadmin' => 'ܡܕܒܪ̈ܢܐ ܕܛܟܣܐ',
	'group-inactive' => 'ܡܦܠܚܢ̈ܐ ܠܐ ܙܪ̈ܝܙܐ',
	'wikimedia-copyright' => 'ܓܘܫܡܐ ܕܡܟܬܒܢܘܬܐ ܐܝܬ ܬܚܝܬ <a href="//creativecommons.org/licenses/by-sa/3.0/">ܦܣܣܘܬܐ ܕܡܬܟܝܢܢܘܬܐ ܕܬܘܩܢܐ ܓܘܢܝܐ܇ܫܘܬܦܘܬܐ-ܡܬܚܝܢܢܬܐ</a>.
ܬܢܘ̈ܝ ܐܚܪ̈ܢܝܬܐ ܒܙܒܢ ܡܬܩܪܒܘ.
ܚܙܝ <a href="//wikimediafoundation.org/wiki/Terms_of_use">ܬܢܘ̈ܝ ܕܡܬܚܫܚܢܘܬܐ</a> ܠܐܪ̈ܝܟܬܐ.',
	'wikimedia-copyrightwarning' => 'ܒܟܒܫܬܐ ܕܬܪܘܩܬܐ "{{int:savearticle}}" ܐܘܝܘ ܐܢܬ ܥܠ [//wikimediafoundation.org/wiki/Terms_of_Use ܫܪ̈ܛܐ ܕܡܦܠܚܬܐ] ܘܦܣ ܫܘܬܦܘܬܟ ܒܠܥܕ ܗܦܟܬܐ [//creativecommons.org/licenses/by-sa/3.0/ ܒܦܣܣܐ ܓܘܢܝܐ ܕܒܪܝܬܐ :ܢܣܒܬܐ-ܦܣܣܐ ܒܛܘܣܐ 3.0] ܘ[//www.gnu.org/copyleft/fdl.html ܒܦܣܣܐ ܕGNU ܠܐܫܛܪ̈ܐ ܚܐܪ̈ܐ].
ܐܘܝܘ ܐܢܬ ܕܫܘܡܠܝܬܝܠܗ̇ ܒܟܘܢܝܐ ܒܓܘ ܒܦܣܣܐ ܓܘܢܝܐ ܕܒܪܝܬܐ ܒܝܕ hyperlink ܐܘ URL.',
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(ܥܕܪ ܠܝ ܒܓܘܒܝܐ)]]',
);

/** Mapuche (mapudungun)
 * @author Lin linao
 */
$messages['arn'] = array(
	'sitesupport' => 'Elungechi',
);

/** Egyptian Spoken Arabic (مصرى)
 * @author Ghaly
 * @author Meno25
 * @author Ramsis II
 */
$messages['arz'] = array(
	'wikimediamessages-desc' => 'رسايل خاصه بويكيميديا',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=arz',
	'sitesupport' => 'التبرعات',
	'tooltip-n-sitesupport' => 'ساندنا',
	'specialpages-group-contribution' => 'المساهمين/جامعين التبرعات',
	'group-abusefilter' => 'معدلين فيلتر الاساءه',
	'group-abusefilter-member' => 'محرر فيلتر الاساءه', # Fuzzy
	'grouppage-abusefilter' => '{{ns:project}}:محررين فيلتر الاساءه',
	'group-accountcreator' => 'مؤسسين الحسابات',
	'group-accountcreator-member' => 'مؤسس حساب', # Fuzzy
	'grouppage-accountcreator' => '{{ns:project}}:منشئين الحسابات',
	'group-autopatrolled' => 'مراجعين أوتوماتيكى',
	'group-autopatrolled-member' => 'اوتوباترولار', # Fuzzy
	'grouppage-autopatrolled' => '{{ns:project}}:اوتوباترولارز',
	'group-autoreviewer' => 'اوتوريفيورات',
	'group-autoreviewer-member' => 'مراجع اوتوماتيكى', # Fuzzy
	'grouppage-autoreviewer' => '{{ns:project}}:مراجعين اوتوماتيكيين',
	'group-bigexport' => 'المصدرين الكبار',
	'group-bigexport-member' => 'مصدر كبير', # Fuzzy
	'grouppage-bigexport' => '{{ns:project}}:مصدرين كبار',
	'group-confirmed' => 'يوزرات متأكدين',
	'group-confirmed-member' => 'يوزر متأكد', # Fuzzy
	'grouppage-confirmed' => '{{ns:project}}:يوزرات متأكدين',
	'group-flood' => 'يوزرز بوت',
	'group-flood-member' => 'يوزر بوت', # Fuzzy
	'group-founder' => 'مؤسسين',
	'group-founder-member' => 'مؤسس', # Fuzzy
	'grouppage-founder' => '{{ns:project}}:مؤسسين',
	'group-import' => 'مستوردين',
	'group-import-member' => 'مستورد', # Fuzzy
	'grouppage-import' => '{{ns:project}}:مستوردين',
	'group-ipblock-exempt' => 'مستثنيين من منع الااى بى',
	'group-ipblock-exempt-member' => 'مستثنى من منع الاايبى', # Fuzzy
	'grouppage-ipblock-exempt' => '{{ns:project}}:استثناء من منع الااى بى',
	'group-patroller' => 'مراجعون',
	'group-patroller-member' => 'مراجع', # Fuzzy
	'group-rollbacker' => 'مسترجعين',
	'group-rollbacker-member' => 'مسترجع', # Fuzzy
	'grouppage-rollbacker' => '{{ns:project}}:مسترجعين',
	'group-transwiki' => 'مستوردين عبر الويكى',
	'group-transwiki-member' => 'مستورد عبر الويكى', # Fuzzy
	'grouppage-transwiki' => '{{ns:project}}:مستوردين عبر الويكى',
	'group-trusted' => 'مستخدمين موثوقين',
	'group-trusted-member' => 'مستخدم موثوق', # Fuzzy
	'group-Global_bot' => 'بوتات عامه',
	'group-Global_bot-member' => 'بوت عام', # Fuzzy
	'group-Global_rollback' => 'مسترجعين عامين',
	'group-Global_rollback-member' => 'مسترجع عام', # Fuzzy
	'grouppage-Global_rollback' => 'm:Global rollback/ar',
	'group-Ombudsmen' => 'اومبادزمين',
	'group-Ombudsmen-member' => 'اومبدادزمان', # Fuzzy
	'group-Staff' => 'مشرفون',
	'group-Staff-member' => 'عضو من المشرفين',
	'grouppage-Staff' => 'Foundation:الطاقم',
	'group-editinterface' => 'محررين الواجهه',
	'group-editinterface-member' => 'محرر الواجهه', # Fuzzy
	'group-steward' => 'مضيفين',
	'group-steward-member' => 'مضيف', # Fuzzy
	'grouppage-steward' => 'm:Stewards/ar',
	'group-sysadmin' => 'اداريين النظام',
	'group-sysadmin-member' => 'ادارى نظام', # Fuzzy
	'group-coder' => 'مكودون',
	'group-coder-member' => 'مكود', # Fuzzy
	'grouppage-coder' => '{{ns:project}}:مكود',
	'group-inactive' => 'يوزرات مش ناشطين',
	'group-inactive-member' => 'يوزر مش نشيط', # Fuzzy
	'grouppage-inactive' => '{{ns:project}}:يوزرات مش نشطين',
	'shared-repo-name-shared' => 'ويكيميديا كومنز',
	'wikimedia-copyright' => 'النصوص متوفرة تحت <a href="//creativecommons.org/licenses/by-sa/3.0/">رخصة التشارك الإبداع العزو/المشاركة بالمثل</a>;
ممكن تطبيق شروط إضافية.
بص على <a href="//wikimediafoundation.org/wiki/Terms_of_Use">شروط الاستخدام</a> للتفاصيل.',
	'wikimedia-copyrightwarning' => 'بتسييڤ التعديلات بتاعتك، انت بتوافق على إصدار مساهمتك بلا رجعه تحت [//creativecommons.org/licenses/by-sa/3.0/ رخصة التشارك الإبداعى العزو/المشاركة بالمثل 3.0] و [//www.gnu.org/copyleft/fdl.html رخصة جنو للوثائق الحرة].
أنت توافق على أن يتم الإشارة لك بواسطة معيدى الاستخدام، على الأقل، من خلال وصلة فائقة أو لينك للصفحة اللى ساهمت فيها.   بص على [//wikimediafoundation.org/wiki/Terms_of_Use شروط الاستخدام] للتفاصيل.', # Fuzzy
);

/** Assamese (অসমীয়া)
 * @author Bishnu Saikia
 * @author Chaipau
 * @author Gitartha.bordoloi
 * @author Nemo bis
 * @author Nilamdyuti
 * @author Psneog
 * @author Rajuonline
 */
$messages['as'] = array(
	'wikimediamessages-desc' => 'ৱিকিমিডিয়া নিৰ্ধাৰিত বাৰ্তা',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=as',
	'sitesupport' => 'দান-বৰঙনি',
	'tooltip-n-sitesupport' => 'আমাক সহায় কৰক!',
	'specialpages-group-contribution' => 'অৱদান/তহবিল সংগ্রাহক',
	'nstab-creator' => 'সৃষ্টিকৰ্তা',
	'nstab-institution' => 'প্ৰতিষ্ঠান',
	'nstab-sequence' => 'ক্রম',
	'nstab-timedtext' => 'সাময়িক পাঠ্য',
	'group-Ex_Administrator' => 'প্ৰাক্তন প্ৰশাসক',
	'group-Ex_Administrator-member' => '{{GENDER:$1|প্ৰাক্তন প্ৰশাসক}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:প্ৰাক্তন প্ৰশাসকসকল',
	'group-Ex_Bureaucrat' => 'প্ৰাক্তন ব্যুৰোকেট',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|প্ৰাক্তন ব্যুৰোকেট}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:প্ৰাক্তন ব্যুৰোকেটসকল',
	'group-Image-reviewer' => 'চিত্র পৰ্যালোচক',
	'group-Image-reviewer-member' => '{{GENDER:$1|চিত্ৰ পৰ্যালোচক}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:চিত্ৰ পৰ্যালোচক',
	'group-OTRS-member' => 'OTRS সদস্য',
	'group-OTRS-member-member' => '{{GENDER:$1|OTRS সদস্য}}',
	'grouppage-OTRS-member' => '{{ns:project}}:অটিআৰএছ সদস্যসকল',
	'group-abusefilter' => 'অপব্যৱহাৰ ফিল্টাৰ সম্পাদক',
	'group-abusefilter-member' => '{{GENDER:$1|অপব্যৱহাৰ ফিল্টাৰ সম্পাদক}}',
	'grouppage-abusefilter' => '{{ns:project}}:অপব্যৱহাৰ ফিল্টাৰ সম্পাদক',
	'group-accountcreator' => "একাউণ্ট সৃষ্টি কৰা হ'ল",
	'group-accountcreator-member' => '{{GENDER:$1|একাউণ্ট স্ৰষ্টা}}',
	'grouppage-accountcreator' => '{{ns:project}}:একাউন্ট সৃষ্টিকৰ্তাসমূহ',
	'group-arbcom' => 'আৰ্বিট্ৰেছন কমিটি সদস্য',
	'group-arbcom-member' => '{{GENDER:$1|আৰ্বিট্ৰেছন কমিটি সদস্য}}',
	'grouppage-arbcom' => '{{ns:project}}:আৰ্বিট্ৰেশন কমিটি সদস্য',
	'group-autopatrolled' => 'স্বয়ংক্ৰিয় পৰীক্ষক',
	'group-autopatrolled-member' => '{{GENDER:$1|স্বয়ংক্ৰিয় পৰীক্ষক}}',
	'grouppage-autopatrolled' => '{{ns:project}}:স্বয়ংক্রিয়-পর্যালোচক',
	'group-autoreviewer' => 'স্বয়ংক্ৰিয় পৰ্যালোচক',
	'group-autoreviewer-member' => '{{GENDER:$1|স্বয়ংক্ৰিয়-পৰ্যালোচক}}',
	'grouppage-autoreviewer' => '{{ns:project}}:স্বয়ংক্রিয়-পর্যালোচক',
	'group-bigexport' => 'বহু-পৃষ্ঠা-ৰপ্তানিকৰ্তাসকল',
	'group-bigexport-member' => '{{GENDER:$1|অধিক পৃষ্ঠা-ৰপ্তানিকৰ্তাসকল}}',
	'grouppage-bigexport' => '{{ns:project}}:বহু-পৃষ্ঠা-ৰপ্তানিকৰ্তা',
	'group-botadmin' => 'প্ৰশাসনিক অধিকাৰপ্ৰাপ্ত বটসমূহ',
	'group-botadmin-member' => '{{GENDER:$1|প্ৰশাসনিক ক্ষমতাসম্পন বট}}',
	'grouppage-botadmin' => '{{ns:project}}:প্ৰশাসনিক অধিকাৰপ্ৰাপ্ত বটসমূহ',
	'group-confirmed' => 'স্বয়ংনিশ্চিত সদস্যসকল',
	'group-confirmed-member' => '{{GENDER:$1| স্বয়ংনিশ্চিত সদস্য}}',
	'grouppage-confirmed' => '{{ns:project}}:স্বয়ংনিশ্চিত সদস্য',
	'group-editprotected' => 'সুৰক্ষিত পৃষ্ঠা সম্পাদক',
	'group-editprotected-member' => '{{GENDER:$1|সুৰক্ষিত পৃষ্ঠা সম্পাদক}}',
	'grouppage-editprotected' => '{{ns:project}}:সুৰক্ষিত পৃষ্ঠা সম্পাদক',
	'group-eliminator' => 'এলিমিনাটৰ',
	'group-eliminator-member' => '{{GENDER:$1|এলিমিনেটৰ}}',
	'grouppage-eliminator' => '{{ns:project}}:এলিমিনেটৰ',
	'group-filemover' => 'ফাইল স্থানান্তৰকৰ্তাসকল',
	'group-filemover-member' => '{{GENDER:$1|ফাইল স্থানান্তৰকৰ্তা}}',
	'grouppage-filemover' => '{{ns:project}}:ফাইল স্থানান্তৰকৰ্তা',
	'group-flood' => 'বট ব্যবহাৰকাৰী',
	'group-flood-member' => '{{GENDER:$1|বট ব্যৱহাৰকাৰী}}',
	'grouppage-flood' => '{{ns:project}}:বট ব্যৱহাৰকাৰীসকল',
	'group-founder' => 'প্ৰতিষ্ঠাতা',
	'group-founder-member' => '{{GENDER:$1|প্ৰতিষ্ঠাপক}}',
	'grouppage-founder' => '{{ns:project}}:প্ৰতিষ্ঠাপকসকল',
	'group-import' => 'আমদানীকৰ্তা',
	'group-import-member' => '{{GENDER:$1|আমদানিকৰ্তা}}',
	'grouppage-import' => '{{ns:project}}:আমদানীকৰ্তাসকল',
	'group-interface_editor' => 'ইন্টাৰফেছ সম্পাদক',
	'group-interface_editor-member' => "{{GENDER:$1|ইণ্টাৰফে'চ সম্পাদক}}",
	'grouppage-interface_editor' => '{{ns:project}}:ইন্টাৰফেছ সম্পাদক',
	'group-ipblock-exempt' => 'আইপি নিষেধাজ্ঞা ৰহিত',
	'group-ipblock-exempt-member' => '{{GENDER:$1|আইপি নিষেধাজ্ঞা ৰহিত}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:আইপি নিষেধাজ্ঞা ৰহিত',
	'group-patroller' => 'পৰ্যবেক্ষক',
	'group-patroller-member' => '{{GENDER:$1|পৰ্যবেক্ষক}}',
	'grouppage-patroller' => '{{ns:project}}:পৰ্যবেক্ষক',
	'group-researcher' => 'গৱেষক',
	'group-researcher-member' => '{{GENDER:$1|গৱেষক}}',
	'grouppage-researcher' => '{{ns:project}}:গৱেষক',
	'group-rollbacker' => 'ৰোলবেকাৰ',
	'group-rollbacker-member' => '{{GENDER:$1|ৰোলবেকাৰ}}',
	'grouppage-rollbacker' => '{{ns:project}}:ৰোলবেকাৰবৃন্দ',
	'group-transwiki' => 'ট্ৰেন্সৱিকি আমদানিকৰ্তা',
	'group-transwiki-member' => '{{GENDER:$1|ট্ৰান্সৱিকি আমদানিকৰ্তা}}',
	'grouppage-transwiki' => '{{ns:project}}:ট্ৰান্সৱিকি আমদানিকৰ্তা',
	'group-trusted' => 'বিশ্বাসযোগ্য ব্যৱহাৰকাৰী',
	'group-trusted-member' => '{{GENDER:$1|বিশ্বাসযোগ্য সদস্য}}',
	'grouppage-trusted' => '{{ns:project}}:বিশ্বাসযোগ্য ব্যৱহাৰকাৰী',
	'group-Global_bot' => 'গোলকীয় বটসমূহ',
	'group-Global_bot-member' => '{{GENDER:$1|গোলকীয় বট}}',
	'group-Global_rollback' => 'গোলকীয় ৰোলবেকাৰসকল',
	'group-Global_rollback-member' => '{{GENDER:$1|গোলকীয় ৰোলবেকাৰ}}',
	'group-Global_sysops' => 'গোলকীয় প্ৰশাসক',
	'group-Global_sysops-member' => '{{GENDER:$1|গোলকীয় প্ৰশাসক}}',
	'group-Ombudsmen' => 'ন্যায়পাল',
	'group-Ombudsmen-member' => '{{GENDER:$1|ন্যায়পাল সদস্য}}',
	'group-Staff' => 'কৰ্মীবৃন্দ',
	'group-Staff-member' => 'কৰ্মচাৰী',
	'group-editinterface' => 'ইন্টাৰফেছ সম্পাদকসমূহ',
	'group-editinterface-member' => "{{GENDER:$1|ইণ্টাৰফে'চ সম্পাদক}}",
	'group-steward' => 'ষ্টুৱাৰ্ডসমূহ',
	'group-steward-member' => '{{GENDER:$1|ষ্টুৱাৰ্ড}}',
	'group-sysadmin' => 'চিষ্টেম প্ৰশাসক',
	'group-sysadmin-member' => '{{GENDER:$1|চিষ্টেম প্ৰশাসক}}',
	'group-Indic_Bots' => 'ইণ্ডিক বটসমূহ',
	'group-Indic_Bots-member' => '{{GENDER:$1|ভাৰতীয় বট}}',
	'group-New_wikis_importer' => 'নতুন ৱিকি আমদানিকৰ্তা',
	'group-New_wikis_importer-member' => '{{GENDER:$1|নতুন ৱিকি আমদানিকৰ্তা}}',
	'group-translationadmin' => 'অনুবাদ প্ৰশাসকবৃন্দ',
	'group-translationadmin-member' => '{{GENDER:$1|অনুবাদ প্ৰশাসকবৃন্দ}}',
	'grouppage-translationadmin' => '{{ns:project}}:অনুবাদ প্ৰশাসকবৃন্দ',
	'group-coder' => 'কোডাৰ',
	'group-coder-member' => '{{GENDER:$1|কোডাৰ}}',
	'grouppage-coder' => '{{ns:project}}:কোডাৰ', # Fuzzy
	'group-inactive' => 'নিস্ক্ৰিয় সদস্যসকল',
	'group-inactive-member' => '{{GENDER:$1|নিষ্ক্ৰিয় সদস্য}}',
	'grouppage-inactive' => '{{ns:project}}:নিস্ক্ৰিয় ব্যৱহাৰকাৰী',
	'wikimedia-copyright' => 'লিখনিসমূহ<a href="//creativecommons.org/licenses/by-sa/3.0/">ক্ৰিয়েটিভ কমন্স এট্ৰিবিউশ্যন/শ্বেয়াৰ-এলাইক অনুজ্ঞাপত্ৰৰ</a> আওতাভুক্ত;
ইয়াৰ লগত অনান্য পদ প্ৰযোজ্য হ’ব পাৰে।
 <a href="//wikimediafoundation.org/wiki/Terms_of_Use">ব্যৱহাৰৰ চৰ্তাৱলীত</a> বিস্তাৰিত ভাবে চাওক।',
	'wikimedia-copyrightwarning' => '"{{int:savearticle}}" বুটাম ক্লিক কৰি আপুনি [//wikimediafoundation.org/wiki/Terms_of_Use ব্যৱহাৰৰ চৰ্ত্তসমূহত] সন্মতি প্ৰকাশ কৰিছে আৰু এই বিষয়ে সন্মত হৈছে যে আপোনাৰ বৰঙণি ক্ৰিয়েটিভ কমন্স [//creativecommons.org/licenses/by-sa/3.0/ CC-BY-SA ৩.০ অনুজ্ঞাপত্ৰ] আৰু [//www.gnu.org/copyleft/fdl.html জি.এফ.ডি.এল.]ৰ অধীনত মুকলি কৰা হ\'ব। আপুনি সন্মত হৈছে যে ক্ৰিয়েটিভ কমন্স লাইছেন্সৰ অধীনত এট্ৰিবিউছনৰ বাবে হাইপাৰলিঙ্ক বা ইউ.আৰ.এল. উল্লেখেই যথেষ্ট।',
	'cant-delete-main-page' => 'মূল পৃষ্ঠাখন আপুনি বিলোপ বা স্থানান্তৰ কৰিব নোৱাৰে',
	'wikimedia-translationnotifications-signup-legal' => 'আপুনি ৱিকিমিডিয়া সংগঠনক এই তথ্য প্ৰদান কৰি এই কথাত মান্তি হৈছে যে আমি আপোনাক অনুবাদ জড়িত অথবা আপুনি আগ্ৰহী হোৱা ৱিকিমিডিয়া গতিবিধিৰ সৈতে জড়িত অন্য বিষয়ৰ বাবে যোগাযোগ কৰিব পাৰো। আপুনি মান্তি যে আপোনাৰ তথ্য মাৰ্কিন যুক্তৰাষ্ট্ৰত সংৰক্ষণ কৰা হ’ব পাৰে আৰু আমাৰ [https://wikimediafoundation.org/wiki/Privacy_policy গোপনীয়তা নীতিৰ] অধীনত থাকিব।',
	'upload-more-photos-of-this-monument' => 'এই স্মৃতিচিহ্নৰ অধিক চিত্ৰ আপল’ড কৰক',
	'createacct-helpusername-url' => '{{ns:Project}}:সদস্যনাম_নীতি',
	'createacct-captcha-help-url' => '{{ns:Project}}:এটা একাউণ্টৰ বাবে অনুৰোধ কৰক',
	'createacct-imgcaptcha-help' => 'ছবিখন দেখা পোৱা নাই? [[{{MediaWiki:createacct-captcha-help-url}}|এটা একাউণ্টৰ বাবে অনুৰোধ কৰক]]',
);

/** Asturian (asturianu)
 * @author Esbardu
 * @author Nemo bis
 * @author Xuacu
 */
$messages['ast'] = array(
	'wikimediamessages-desc' => 'Mensaxes específicos de Wikimedia',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=ast',
	'sitesupport' => 'Donativos',
	'tooltip-n-sitesupport' => 'Sofítanos',
	'specialpages-group-contribution' => 'Contribución/Recaudación de fondos',
	'nstab-creator' => 'Creador',
	'nstab-institution' => 'Institución',
	'nstab-sequence' => 'Secuencia',
	'nstab-timedtext' => 'Subtítulos',
	'group-Ex_Administrator' => 'Antiguos alministradores',
	'group-Ex_Administrator-member' => '{{GENDER:$1|antiguu alministrador|antigua alministradora}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Antiguos alministradores',
	'group-Ex_Bureaucrat' => 'Antiguos burócrates',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|antiguu|antigua}} burócrata',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Antiguos burócrates',
	'group-Image-reviewer' => "Revisores d'imaxes",
	'group-Image-reviewer-member' => "{{GENDER:$1|revisor|revisora}} d'imaxes",
	'grouppage-Image-reviewer' => "{{ns:project}}:Revisores d'imaxes",
	'group-OTRS-member' => 'Miembros de OTRS',
	'group-OTRS-member-member' => '{{GENDER:$1|miembru del OTRS}}',
	'grouppage-OTRS-member' => '{{ns:project}}:Miembros del OTRS',
	'group-abusefilter' => "Editores de peñera d'abusu",
	'group-abusefilter-member' => "{{GENDER:$1|editor|editora}} de la peñera d'abusos",
	'grouppage-abusefilter' => "{{ns:project}}:Editores de la peñera d'abusos",
	'group-accountcreator' => 'Creadores de cuentes',
	'group-accountcreator-member' => '{{GENDER:$1|creador|creadora}} de cuentes',
	'grouppage-accountcreator' => '{{ns:project}}:Creadores de cuentes',
	'group-arbcom' => 'Miembros del comité de arbitraxe',
	'group-arbcom-member' => "{{GENDER:$1|miembru del comité d'arbitraxe}}",
	'grouppage-arbcom' => "{{ns:project}}:Miembros del comité d'arbitraxe",
	'group-autopatrolled' => 'Autopatrullaos',
	'group-autopatrolled-member' => '{{GENDER:$1|autopatrulláu|autopatrullada}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Autopatrullaos',
	'group-autoreviewer' => 'Revisores automáticos',
	'group-autoreviewer-member' => '{{GENDER:$1|revisor automáticu|revisora automática}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Revisores automáticos',
	'group-bigexport' => 'Grandes esportadores',
	'group-bigexport-member' => 'gran {{GENDER:$1|esportador|esportadora}}',
	'grouppage-bigexport' => '{{ns:project}}:Grandes esportadores',
	'group-botadmin' => "Bots con permisos d'alministrador",
	'group-botadmin-member' => "{{GENDER:$1|bot con permisos d'alministrador}}",
	'grouppage-botadmin' => "{{ns:project}}:Bots con permisos d'alministrador",
	'group-confirmed' => 'Usuarios confirmaos',
	'group-confirmed-member' => '{{GENDER:$1|usuariu confirmáu|usuaria confirmada}}',
	'grouppage-confirmed' => '{{ns:project}}:Usuarios confirmaos',
	'group-editprotected' => 'Editores de páxines protexíes',
	'group-editprotected-member' => '{{GENDER:$1|editor|editora}} de páxines protexíes',
	'grouppage-editprotected' => '{{ns:project}}:Editores de páxines protexíes',
	'group-eliminator' => 'Desaniciadores',
	'group-eliminator-member' => '{{GENDER:$1|desaniciador|desaniciadora}}',
	'grouppage-eliminator' => '{{ns:project}}:Desaniciadores',
	'group-filemover' => 'Desplazadores de ficheros',
	'group-filemover-member' => '{{GENDER:$1|desplazador|desplazadora}} de ficheros',
	'grouppage-filemover' => '{{ns:project}}:Desplazadores de ficheros',
	'group-flood' => 'Usuarios robot',
	'group-flood-member' => '{{GENDER:$1|usuariu|usuaria}} robot',
	'grouppage-flood' => '{{ns:project}}:Usuarios robot',
	'group-founder' => 'Fundadores',
	'group-founder-member' => '{{GENDER:$1|fundador|fundadora}}',
	'grouppage-founder' => '{{ns:project}}:Fundadores',
	'group-import' => 'Importadores',
	'group-import-member' => '{{GENDER:$1|importador|importadora}}',
	'grouppage-import' => '{{ns:project}}:Importadores',
	'group-interface_editor' => 'Editores de la interfaz',
	'group-interface_editor-member' => '{{GENDER:$1|editor|editora}} de la interfaz',
	'grouppage-interface_editor' => '{{ns:project}}:Editores de la interfaz',
	'group-ipblock-exempt' => 'Exenciones de bloqueos IP',
	'group-ipblock-exempt-member' => "{{GENDER:$1|llibre del bloquéu d'IP}}",
	'grouppage-ipblock-exempt' => '{{ns:project}}:exención de bloqueos IP',
	'group-patroller' => 'Patrulleros',
	'group-patroller-member' => '{{GENDER:$1|patrulleru|patrullera}}',
	'grouppage-patroller' => '{{ns:project}}:Patrulleros',
	'group-researcher' => 'Investigadores',
	'group-researcher-member' => '{{GENDER:$1|investigador|investigadora}}',
	'grouppage-researcher' => '{{ns:project}}:Investigadores',
	'group-rollbacker' => 'Revertidores',
	'group-rollbacker-member' => '{{GENDER:$1|revertidor|revertidora}}',
	'grouppage-rollbacker' => '{{ns:project}}:Revertidores',
	'group-transwiki' => 'Importadores treswiki',
	'group-transwiki-member' => '{{GENDER:$1|importador|importadora}} transwiki',
	'grouppage-transwiki' => '{{ns:project}}:Importadores treswiki',
	'group-trusted' => 'Usuarios de confianza',
	'group-trusted-member' => '{{GENDER:$1|usuariu|usuaria}} de confianza',
	'grouppage-trusted' => '{{ns:project}}:Usuarios de confianza',
	'group-uploader' => 'Cargadores',
	'group-uploader-member' => '{{GENDER:$1|cargador|cargadora}}',
	'grouppage-uploader' => '{{ns:project}}:Cargadores',
	'group-Global_bot' => 'Bots globales',
	'group-Global_bot-member' => '{{GENDER:$1|bot global}}',
	'group-Global_rollback' => 'Revertidores globales',
	'group-Global_rollback-member' => '{{GENDER:$1|revertidor|revertidora}} global',
	'group-Global_sysops' => 'Alministradores globales',
	'group-Global_sysops-member' => '{{GENDER:$1|alministrador|alministradora}} global',
	'group-Ombudsmen' => 'Defensores del usuariu',
	'group-Ombudsmen-member' => '{{GENDER:$1|defensor|defensora}} del usuariu',
	'group-Staff' => 'Personal',
	'group-Staff-member' => 'Miembru del personal',
	'group-editinterface' => 'Editores de la interfaz',
	'group-editinterface-member' => '{{GENDER:$1|editor|editora}} de la interfaz',
	'group-steward' => 'Stewards',
	'group-steward-member' => '{{GENDER:$1|steward}}',
	'grouppage-steward' => '{{ns:project}}:Stewards',
	'group-sysadmin' => 'Alministradores del sistema',
	'group-sysadmin-member' => '{{GENDER:$1|alministrador|alministradora}} del sistema',
	'group-API_High_Limit_Requestor' => 'Solicitantes de llimite altu de la API',
	'group-API_High_Limit_Requestor-member' => '{{GENDER:$1|Solicitante de llimite altu de la API}}',
	'group-Indic_Bots' => 'Bots índicos',
	'group-Indic_Bots-member' => '{{GENDER:$1|bot índicu}}',
	'group-New_wikis_importer' => 'Importadores de wikis nueves',
	'group-New_wikis_importer-member' => '{{GENDER:$1|importador|importadora}} de wikis nueves',
	'group-global-ipblock-exempt' => 'Llibres de bloqueos IP globales',
	'group-global-ipblock-exempt-member' => "{{GENDER:$1|llibre}} de bloquéu global d'IP",
	'group-recursive-export' => 'Esportación recurrente',
	'group-recursive-export-member' => '{{GENDER:$1|esportador|esportadora}} recurrente',
	'group-translationadmin' => 'Alministradores de traducción',
	'group-translationadmin-member' => '{{GENDER:$1|alministrador|alministradora}} de traducción',
	'grouppage-translationadmin' => '{{ns:project}}:Alministradores de traducción',
	'group-centralnoticeadmin' => "Alministradores d'avisu central",
	'group-centralnoticeadmin-member' => "{{GENDER:$1|Alministrador d'avisu central|Alministradora d'avisu central}}",
	'grouppage-centralnoticeadmin' => "{{ns:project}}:Alministradores d'avisu central",
	'group-coder' => 'Programadores',
	'group-coder-member' => '{{GENDER:$1|programador|programadora}}',
	'group-inactive' => 'Usuarios inactivos',
	'group-inactive-member' => '{{GENDER:$1|usuariu inactivu|usuaria inactiva}}',
	'grouppage-inactive' => '{{ns:project}}:Usuarios inactivos',
	'wikimedia-copyright' => 'El testu ta disponible baxo la <a href="//creativecommons.org/licenses/by-sa/3.0/deed.es">Llicencia Creative Commons Reconocimientu/Compartir-Igual 3.0</a>; puen aplicase otres cláusules más.
Llea <a href="//wikimediafoundation.org/wiki/Terms_of_Use/ast">les condiciones d\'usu</a> pa más detalles.',
	'wikidata-copyright' => 'Tolos datos estruturaos de los espacios de nomes principal y de propiedaá tan disponibles baxo la <a href="//creativecommons.org/publicdomain/zero/1.0/" title="Definition of the Creative Commons CC0 License">llicencia Creative Commons CC0</a>;
el testu de los demás espacios de nomes ta disponible baxo la <a href="//creativecommons.org/licenses/by-sa/3.0/" title="Definition of the Creative Commons Attribution/Share-Alike License">llicencia Creative Commons reconocimientu/compartir igual</a>;
puen aplicase otres condiciones más.
Consulte les <a href="//wikimediafoundation.org/wiki/Terms_of_Use" title="Wikimedia Foundation Terms of Use">condiciones d\'usu</a> pa más detalles.',
	'wikidata-shortcopyrightwarning' => "Calcando en «{{int:wikibase-save}}», aceuta les [//wikimediafoundation.org/wiki/Terms_of_Use/ast condiciones d'usu] y aceuta lliberar irrevocablemente la so collaboración baxo la [//creativecommons.org/publicdomain/zero/1.0/deed.ast llicencia CC0].",
	'wikimedia-copyrightwarning' => 'Al calcar nel botón "{{int:savearticle}}" aceutes los [//wikimediafoundation.org/wiki/Terms_of_Use términos d\'usu] y aceutes de mou irrevocable lliberar la contribución baxo la [//creativecommons.org/licenses/by-sa/3.0/ llicencia CC-BY-SA 3.0] y la [//www.gnu.org/copyleft/fdl.html GFDL].
Aceutes qu\'un hiperenllaz o URL ye reconocimientu abondo baxo la llicencia Creative Commons.',
	'wikibase-sitelinks-wikivoyage' => 'Páxines de Wikivoyage enllazaes con esti elementu',
	'cant-delete-main-page' => 'Nun pues desaniciar nin treslladar la portada.',
	'wikimedia-translationnotifications-signup-legal' => "Aceutes que al proporcionar esta información a la Fundación Wikimedia podemos ponenos en contautu contigo no que cinca a les traducciones o otros asuntos rellacionaos col movimientu de Wikimedia que piensemos que puedan interesate. Aceutes que los tos datos puedan almacenase nos Estaos Xunios d'América y que tan suxetos a la nuesa [https://wikimediafoundation.org/wiki/Privacy_policy política de proteición de datos].",
	'upload-more-photos-of-this-monument' => "Xubir más semeyes d'esti monumentu",
	'extdist-branch-master' => 'maestra (cabera versión en desendolcu)',
	'extdist-branch-REL1_21' => '1.21 (cabera MediaWiki estable)',
	'createacct-helpusername-url' => "{{ns:Project}}:Política_de_nomes_d'usuariu",
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(ayudame a escoyer)]]',
	'createacct-captcha-help-url' => '{{ns:Project}}:Solicite una cuenta',
	'createacct-imgcaptcha-help' => '¿Nun pue ver la imaxe? [[{{MediaWiki:createacct-captcha-help-url}}|Solicite una cuenta]]',
);

/** Avaric (авар)
 */
$messages['av'] = array(
	'sitesupport' => 'Садакъа',
);

/** Kotava (Kotava)
 * @author Wikimistusik
 */
$messages['avk'] = array(
	'sitesupport' => 'Zobera',
	'tooltip-n-sitesupport' => 'Va cin zobel !',
);

/** Aymara (Aymar aru)
 */
$messages['ay'] = array(
	'sitesupport' => 'Ramañanaka',
);

/** Azerbaijani (azərbaycanca)
 * @author Cekli829
 * @author PPerviz
 * @author Vago
 * @author Vugar 1981
 */
$messages['az'] = array(
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=az',
	'sitesupport' => 'Maddi kömək',
	'tooltip-n-sitesupport' => 'Bizə dəstək verin',
	'nstab-creator' => 'Yaradıcı',
	'group-Ex_Administrator' => 'Keçmiş idarəçilər',
	'group-Ex_Administrator-member' => '{{GENDER:$1|Keçmiş bürokrat}}',
	'grouppage-Ex_Administrator' => '{{ns:layihə}}: Keçmiş idarəçilər', # Fuzzy
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|keçmiş bürokrat}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:layihə}}:Keçmiş bürokrat', # Fuzzy
	'group-OTRS-member' => 'OTRS üzvləri',
	'group-OTRS-member-member' => '{{GENDER:$1|OTRS üzvü}}',
	'grouppage-OTRS-member' => '{{ns:project}}:OTRS üzvləri',
	'group-accountcreator-member' => '{{GENDER:$1|hesab yaradan}}',
	'grouppage-accountcreator' => '{{ns:project}}:Hesab yaradanlar',
	'group-arbcom' => 'Arbitraj Komitəsinin üzvləri',
	'group-arbcom-member' => '{{GENDER:$1|arbitraj komitəsinin üzvü}}',
	'grouppage-arbcom' => '{{ns:project}}:Arbitraj komitə üzvləri',
	'group-autopatrolled' => 'Avtopatrullar',
	'group-autopatrolled-member' => '{{GENDER:$1|avtopatrul}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Avtopatrullar',
	'group-autoreviewer-member' => '{{GENDER:$1|autoreviewer}}',
	'group-botadmin-member' => '{{GENDER:$1|idarəçi hüququna malik bot}}',
	'grouppage-botadmin' => '{{ns:layihə}}:İdarəçi hüququ olan bot', # Fuzzy
	'group-confirmed' => 'Təsdiqlənmiş istifadəçilər',
	'group-confirmed-member' => '{{GENDER:$1|Təsdiqlənmiş istifadəçi}}',
	'grouppage-confirmed' => '{{nslayihə}}:Təsdiqlənmiş istifadəçilər', # Fuzzy
	'group-editprotected' => 'Mühafizə olunmuş səhifə redaktorları',
	'group-eliminator-member' => '{{GENDER:$1|eliminator}}',
	'grouppage-eliminator' => '{{ns:layihə}}:Eliminator', # Fuzzy
	'group-filemover-member' => '{{GENDER:$1|file mover}}',
	'group-flood' => 'Bot istifadəçilər',
	'group-flood-member' => '{{GENDER:$1|bot}}',
	'grouppage-flood' => '{{ns:project}}:Botlar',
	'group-founder' => 'Banilər',
	'group-founder-member' => '{{GENDER:$1|Bani}}',
	'grouppage-founder' => '{{ns:project}}:Banilər',
	'group-import' => 'Çıxaranlar',
	'grouppage-import' => '{{ns:project}}:Çıxaranlar',
	'group-interface_editor' => 'İnterfeys redaktoru',
	'group-interface_editor-member' => '{{GENDER:$1|interfeys redaktoru}}',
	'grouppage-interface_editor' => '{{ns:project}}: İnterfeys redaktorları',
	'group-ipblock-exempt' => 'IP blokundan azad olma',
	'group-ipblock-exempt-member' => '{{GENDER:$1|IP blokundan azad olma}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP blokundan azad olma',
	'group-patroller' => 'Patrullar',
	'group-patroller-member' => '{{GENDER:$1|patrul}}',
	'group-researcher' => 'Araşdırıcılar',
	'group-researcher-member' => '{{GENDER:$1|tədqiqatçı}}',
	'grouppage-researcher' => '{{ns:project}}:Araşdırmaçılar',
	'group-rollbacker' => 'Rolbakerlər',
	'group-rollbacker-member' => '{{GENDER:$1|rolbaker}}',
	'grouppage-rollbacker' => '{{ns:project}}:Rolbakerlər',
	'group-trusted' => 'İnanılmış tistifadəçilər',
	'group-trusted-member' => '{{GENDER:$1|inanılmış istifadəçi}}',
	'grouppage-trusted' => '{{ns:project}}:İnanılmış istifadəçilər',
	'group-Global_bot' => 'Qlobal bot',
	'group-Global_bot-member' => '{{GENDER:$1|qlobal bot}}',
	'grouppage-Global_bot' => 'm:Qlobal bot',
	'group-Global_rollback' => 'Qlobal rolbakerlər',
	'group-Global_rollback-member' => '{{GENDER:$1|qlobal rolbaker}}',
	'group-Global_sysops' => 'Qlobal idarəçi',
	'group-Global_sysops-member' => '{{GENDER:$1|qlobal idarəçi}}',
	'grouppage-Global_sysops' => 'Qlobal idarəçilər',
	'group-Ombudsmen' => 'Ombudsman',
	'group-Ombudsmen-member' => '{{GENDER:$1|ombudsman}}',
	'group-Staff' => 'Əməkdaşlar',
	'group-Staff-member' => 'əməkdaşlar',
	'group-editinterface' => 'İnterfeys redaktoru',
	'group-editinterface-member' => '{{GENDER:$1|interfeys redaktoru}}',
	'group-steward' => 'Stüardlar',
	'group-steward-member' => '{{GENDER:$1|stüard}}',
	'grouppage-steward' => 'm:Stüardlar',
	'group-sysadmin' => 'Sistem idarəçiləri',
	'group-sysadmin-member' => '{{GENDER:$1|Sistem idarəçisi}}',
	'grouppage-sysadmin' => 'm:Sistem idarəçisiləri',
	'group-coder' => 'Coderlər',
	'group-coder-member' => '{{GENDER:$1|coder}}',
	'group-inactive' => 'Qeyri-aktiv istifadəçilər',
	'group-inactive-member' => '{{GENDER:$1|qeyri-aktiv istifadəçi}}',
	'grouppage-inactive' => '{{ns:project}}:Qeyri-aktiv istifadəçilər',
	'shared-repo-name-shared' => 'Wikimedia Commons',
	'wikimedia-copyright' => 'Mətn <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike Lisenziyası</a> altındadır;
əlavə şərtlər tətbiq oluna bilər.
Ətraflı məlumat üçün <a href="//wikimediafoundation.org/wiki/Terms_of_Use">İstifadə Şərtlərinə</a> baxın.',
);

/** South Azerbaijani (تورکجه)
 * @author Amir a57
 * @author E THP
 * @author Ebrahimi-amir
 * @author Mousa
 */
$messages['azb'] = array(
	'wikimediamessages-desc' => 'ویکی‌مِدیایا اؤزل مئساژلار',
	'sitesupport' => 'باغیشلا',
	'tooltip-n-sitesupport' => 'بیزه دستک وئرین',
	'specialpages-group-contribution' => 'چالیشمالار/یاردیم ییغما',
	'nstab-creator' => 'یارادان',
	'nstab-institution' => 'قوروم',
	'nstab-sequence' => 'سیرا',
	'nstab-timedtext' => 'واختلی یازی',
	'group-Ex_Administrator' => 'قاباق ایداره‌چیلر',
	'group-Ex_Administrator-member' => '{{GENDER:$1|گئچمیش ایداره‌چی}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:گئچمیش ایداره‌چیلر',
	'group-Ex_Bureaucrat' => 'قاباق بوروکراتلار',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|قاباق بوروکرات}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:قاباق بوروکراتلار',
	'group-Image-reviewer' => 'عکس گؤزدن گئچیردنلر',
	'group-Image-reviewer-member' => '{{GENDER:$1|عکس گؤزدن گئچیردن}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:عکس گؤزدن گئچیردنلر',
	'group-OTRS-member' => 'OTRS عوضولری',
	'group-OTRS-member-member' => '{{GENDER:$1|OTRS عضوو}}',
	'grouppage-OTRS-member' => '{{ns:project}}:OTRS عضولری',
	'group-abusefilter' => 'خارابکارلیق سۆزگَجی دَییشدیرنلر',
	'group-abusefilter-member' => '{{GENDER:$1|خارابکارلیق سۆزگَجی دَییشدیرن}}',
	'grouppage-abusefilter' => '{{ns:project}}:خارابکارلیق سۆزگَجی دَییشدیرنلر',
	'group-accountcreator' => 'حساب یارادانلار',
	'group-accountcreator-member' => '{{GENDER:$1|حساب یاردان}}',
	'grouppage-accountcreator' => '{{ns:project}}:حساب یارادانلار',
	'group-arbcom' => 'هیأت حکمیت عوضولری',
	'group-arbcom-member' => '{{GENDER:$1|هیأت حکمیت عوضوو}}',
	'grouppage-arbcom' => '{{ns:project}}:کمیتهٔ داوری عضولاری',
	'group-autopatrolled' => 'اوتماتیک آختارانلار',
	'group-autopatrolled-member' => '{{GENDER:$1|اوتوماتیک آختاران}}',
	'grouppage-autopatrolled' => '{{ns:project}}:اوتوماتیک آختارانلار',
	'group-autoreviewer' => 'اوتوماتیک گؤزدن گئچیردنلر',
	'group-autoreviewer-member' => '{{GENDER:$1|اوتوماتیک یئنی‌دن باخان}}',
	'grouppage-autoreviewer' => '{{ns:project}}:اوتوماتیک گؤزدن گئچیردنلر',
	'group-bigexport' => 'یئکه ائشیگه چیخاردانلار',
	'group-bigexport-member' => '{{GENDER:$1|یئکه ائشیگه چیخاردان}}',
	'grouppage-bigexport' => '{{ns:project}}:یئکه ائشیگه چیخاردانلار',
	'group-botadmin' => 'ایداره‌چی حاقلاری اولان بوتلار',
	'group-botadmin-member' => '{{GENDER:$1|ایداره‌چی حاقلاری اولان بوت}}',
	'grouppage-botadmin' => '{{ns:project}}:ایداره‌چی حاقلاری اولان بوتلار',
	'group-confirmed' => 'دوغرولانمیش ایستیفاده‌چی‌لر',
	'group-confirmed-member' => '{{GENDER:$1|تصدیقلنمیش ایستیفاده‌چی}}',
	'grouppage-confirmed' => '{{ns:project}}:دوغرولانمیش ایستیفاده‌چی‌لر',
	'group-editprotected' => 'محافظه اولونموش صحیفه دییشدیرچی لر',
	'group-eliminator-member' => '{{GENDER:$1|ائلیمیناتور}}',
	'grouppage-eliminator' => '{{ns:project}}:ائلیمیناتور',
	'group-filemover-member' => '{{GENDER:$1|فایل کؤچوردن}}',
	'group-flood-member' => '{{GENDER:$1|بوت}}',
	'grouppage-flood' => '{{ns:project}}:بوتلار',
	'group-founder' => 'بونیانین قویان لار',
	'group-founder-member' => '{{GENDER:$1|بانی}}',
	'grouppage-founder' => '{{ns:project}}:بانی لر',
	'group-import' => 'ایچری گتیرنلر',
	'grouppage-import' => '{{ns:project}}:ایچری گتیرنلر',
	'group-interface_editor' => 'رابط دییشدیرچی لر',
	'group-interface_editor-member' => '{{GENDER:$1|رابط دییشدیرچی لر}}',
	'grouppage-interface_editor' => '{{ns:project}}: رابط دییشدیرچی لر',
	'group-ipblock-exempt' => 'ای پی باغلانما‌دان آزاد اولما',
	'group-ipblock-exempt-member' => '{{GENDER:$1|ای پی باغلانما‌دان آزاد اولما}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:ای پی بلوکون‌دان آزاد اولما',
	'group-patroller' => 'دولانان',
	'group-patroller-member' => '{{GENDER:$1|دولان}}',
	'grouppage-patroller' => '{{ns:project}}:دولانانلار',
	'group-researcher' => 'آراشدیرچیلار',
	'group-researcher-member' => '{{GENDER:$1|تدقیقاچیلار}}',
	'grouppage-researcher' => '{{ns:project}}:آراشدیرماچیلار',
	'group-rollbacker' => 'گئیترنلر',
	'group-rollbacker-member' => '{{GENDER:$1|گئیترچی}}',
	'grouppage-rollbacker' => '{{ns:project}}:گئیترچیلر',
	'group-trusted-member' => '{{GENDER:$1|اینانلانمیش ایستفاده چی}}',
	'grouppage-trusted' => '{{ns:project}}:اینانلانمیش ایستفاده چیلر',
	'group-Global_bot' => 'سراسری بوت',
	'group-Global_bot-member' => '{{GENDER:$1|سراسری بوت}}',
	'group-Global_rollback' => 'سراسری دییشدیرچیلر',
	'group-Global_rollback-member' => '{{GENDER:$1|سراسری گئیترچی}}',
	'group-Global_sysops' => 'سراسری ایداره‌چی',
	'group-Global_sysops-member' => '{{GENDER:$1|سراسرس ایداره چی}}',
	'group-Ombudsmen' => 'اومبودسمان',
	'group-Staff' => 'ایشچیلر',
	'group-Staff-member' => '{{GENDER:$1|ایشچیلر عضوی}}',
	'group-editinterface' => 'رابط دییشدیرچی لر',
	'group-editinterface-member' => '{{GENDER:$1|رابط دییشدیرچی لر}}',
	'group-steward' => 'ایستواردلار',
	'group-steward-member' => '{{GENDER:$1|استورد}}',
	'group-sysadmin' => 'سیستم ایداره چی لر',
	'group-sysadmin-member' => '{{GENDER:$1|سیستم ایداره‌چی‌سی}}',
	'group-coder' => 'کود یازانلار',
	'group-coder-member' => '{{GENDER:$1|برنامه یازان}}',
	'group-inactive' => 'غیر فعال ایستیفاده‌چی‌لر',
	'group-inactive-member' => '{{GENDER:$1|غیر فعال ایستفاده‌چی‌لر}}',
	'grouppage-inactive' => '{{ns:project}}:غیر فعال ایستفاده‌چی‌لر',
	'wikimedia-copyright' => 'یازی <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike لیسانسی</a> آلتیندا‌دیر؛
آرتیق شرطلر آرتیریلا بیلر.
آرتیق بیلگیلر اوچون <a href="//wikimediafoundation.org/wiki/Terms_of_Use">ایستیفاده شرطلرینه</a> باخین.',
	'cant-delete-main-page' => 'آنا صحیفه‌سینی سیلیب یا آپارا بیلنمزسینیز.',
	'upload-more-photos-of-this-monument' => 'بو عابیده‌دن آرتیق شکیل‌لر یوکله',
);

/** Bashkir (башҡортса)
 * @author Assele
 * @author Comp1089
 * @author Haqmar
 * @author Рустам Нурыев
 * @author ҒатаУлла
 */
$messages['ba'] = array(
	'wikimediamessages-desc' => 'Викимедиа өсөн махсус хәбәрҙәр',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=ba',
	'sitesupport' => 'Ярҙам итеү',
	'tooltip-n-sitesupport' => 'Беҙгә ярҙам итегеҙ',
	'specialpages-group-contribution' => 'Иғәнә йыйыу',
	'nstab-creator' => 'Автор',
	'nstab-institution' => 'Ойошма',
	'nstab-sequence' => 'Эҙлеклелек',
	'nstab-timedtext' => 'ВаҡытБилдәһе',
	'group-Ex_Administrator' => 'Элекке администраторҙар',
	'group-Ex_Administrator-member' => '{{GENDER:$1|элекке администратор}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Элекке администраторҙар',
	'group-Ex_Bureaucrat' => 'Элекке бейҙәр',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|элекке бюрократ}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Элекке бейҙәр',
	'group-Image-reviewer' => 'Рәсем ҡараусылар',
	'group-Image-reviewer-member' => '{{GENDER:$1|рәсем тикшереүсе}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:Рәсем ҡараусылар',
	'group-OTRS-member' => 'OTRS ағзалары',
	'group-OTRS-member-member' => '{{GENDER:$1|OTRS ағзаһы}}',
	'grouppage-OTRS-member' => '{{ns:project}}:OTRS ағзалары',
	'group-abusefilter' => 'Урынһыҙ файҙаланыуҙар һөҙгөсө мөхәррирҙәре',
	'group-abusefilter-member' => '{{GENDER:$1|урынһыҙ файҙаланыуҙар һөҙгөсө мөхәррире}}',
	'grouppage-abusefilter' => '{{ns:project}}:Урынһыҙ файҙаланыуҙар һөҙгөсө мөхәррирҙәре',
	'group-accountcreator' => 'Иҫәп яҙмаларын булдырыусылар',
	'group-accountcreator-member' => '{{GENDER:$1|иҫәп яҙмаларын яһаусы}}',
	'grouppage-accountcreator' => '{{ns:project}}:Иҫәп яҙмаларын булдырыусылар',
	'group-arbcom' => 'Арбитраж комитет ағзалары',
	'group-arbcom-member' => '{{GENDER:$1|арбитраж комитет ағзаһы}}',
	'grouppage-arbcom' => '{{ns:project}}:Арбитраж комитет ағзалары',
	'group-autopatrolled' => 'Авто-тикшерелеүселәр',
	'group-autopatrolled-member' => '{{GENDER:$1|авто-тикшерелеүсе}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Авто-тикшерелеүселәр',
	'group-autoreviewer' => 'Авто-ҡаралыусылар',
	'group-autoreviewer-member' => '{{GENDER:$1|авто-ҡаралыусы}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Авто-ҡаралыусылар',
	'group-bigexport' => 'Эре экспортлаусылар',
	'group-bigexport-member' => '{{GENDER:$1|эре экспортлаусы}}',
	'grouppage-bigexport' => '{{ns:project}}:Эре экспортлаусылар',
	'group-botadmin' => 'Администратор хоҡуғына эйә боттар',
	'group-botadmin-member' => '{{GENDER:$1|администратор хоҡуғына эйә боттар}}',
	'grouppage-botadmin' => '{{ns:project}}:Администратор хоҡуҡлы боттар',
	'group-confirmed' => 'Раҫланған ҡатнашыусылар',
	'group-confirmed-member' => '{{GENDER:$1|раҫланған ҡатнашыусы}}',
	'grouppage-confirmed' => '{{ns:project}}:Раҫланған ҡатнашыусылар',
	'group-editprotected' => 'Һаҡланған битте мөхәррирләүселәр',
	'group-editprotected-member' => '{{GENDER:$1|һаҡланған битте мөхәррирләүсе}}',
	'grouppage-editprotected' => '{{ns:project}}:Һаҡланған битте мөхәррирләүселәр',
	'group-eliminator' => 'Юйыусылар',
	'group-eliminator-member' => '{{GENDER:$1|юйыусы}}',
	'grouppage-eliminator' => '{{ns:project}}:Юйыусылар',
	'group-filemover' => 'Файл исемен үҙгәртеүселәр',
	'group-filemover-member' => '{{GENDER:$1|файл исемен үҙгәртеүсе}}',
	'grouppage-filemover' => '{{ns:project}}:Файл исемен үҙгәртеүселәр',
	'group-flood' => 'Боттар',
	'group-flood-member' => '{{GENDER:$1|бот}}',
	'grouppage-flood' => '{{ns:project}}:Боттар',
	'group-founder' => 'Нигеҙләүселәр',
	'group-founder-member' => '{{GENDER:$1|нигеҙ һалыусы}}',
	'grouppage-founder' => '{{ns:project}}:Нигеҙләүселәр',
	'group-import' => 'Импортёрҙар',
	'group-import-member' => '{{GENDER:$1|импортлаусы}}',
	'grouppage-import' => '{{ns:project}}:Импортлаусылар',
	'group-interface_editor' => 'Интерфейс мөхәррирләүселәр',
	'group-interface_editor-member' => '{{GENDER:$1|арайөҙ мөхәррирләүсе}}',
	'grouppage-interface_editor' => '{{ns:project}}:Интерфейс мөхәррирләүселәр',
	'group-ipblock-exempt' => 'IP биктәрҙән азат итеү',
	'group-ipblock-exempt-member' => '{{GENDER:$1|IP биктән азат итеү}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP биктәрҙән азат итеү',
	'group-patroller' => 'Тикшереүселәр',
	'group-patroller-member' => '{{GENDER:$1|патруль}}',
	'grouppage-patroller' => '{{ns:project}}:Авто-тикшерелеүселәр',
	'group-researcher' => 'Өйрәнеүселәр',
	'group-researcher-member' => '{{GENDER:$1|эҙләнеүсе}}',
	'grouppage-researcher' => '{{ns:project}}:Өйрәнеүселәр',
	'group-rollbacker' => 'Кире алыусылар',
	'group-rollbacker-member' => '{{GENDER:$1|кире ҡайтарыусы}}',
	'grouppage-rollbacker' => '{{ns:project}}:Кире алыусылар',
	'group-transwiki' => 'Вики-ара индереүселәр',
	'group-transwiki-member' => '{{GENDER:$1|вики-ара импортлаусы}}',
	'grouppage-transwiki' => '{{ns:project}}:	Вики-ара индереүселәр',
	'group-trusted' => 'Ышаныслы ҡатнашыусылар',
	'group-trusted-member' => '{{GENDER:$1|ышанырлыҡ ҡатнашыусы}}',
	'grouppage-trusted' => '{{ns:project}}:Ышаныслы ҡатнашыусылар',
	'group-Global_bot' => 'Дөйөм боттар',
	'group-Global_bot-member' => '{{GENDER:$1|глобаль бот}}',
	'group-Global_rollback' => 'Дөйөм кире алыусылар',
	'group-Global_rollback-member' => '{{GENDER:$1|глобаль кире ҡайтарыусы}}',
	'group-Global_sysops' => 'Дөйөм хакимдәр',
	'group-Global_sysops-member' => '{{GENDER:$1|дөйөм хаким}}',
	'group-Ombudsmen' => 'Омбудсмендар',
	'group-Ombudsmen-member' => '{{GENDER:$1|омбудсмен}}',
	'group-Staff' => 'Эшмәкәрҙәр',
	'group-Staff-member' => 'эшмәкәр',
	'group-editinterface' => 'Интерфейс мөхәррирләүселәр',
	'group-editinterface-member' => '{{GENDER:$1|арайөҙ мөхәррире}}',
	'group-steward' => 'Стюардтар',
	'group-steward-member' => '{{GENDER:$1|стюард}}',
	'group-sysadmin' => 'Система хакимдәре',
	'group-sysadmin-member' => '{{GENDER:$1|система администраторы}}',
	'group-translationadmin' => 'Тәржәмә хакимдары',
	'group-translationadmin-member' => '{{GENDER:$1|тәржемә администраторы}}',
	'grouppage-translationadmin' => '{{ns:project}}:Тәржемә администраторҙары',
	'group-coder' => 'Программистар',
	'group-coder-member' => '{{GENDER:$1|программист}}',
	'group-inactive' => 'Әүҙем булмаған ҡатнашыусылар',
	'group-inactive-member' => '{{GENDER:$1|актив булмаған ҡулланыусы}}',
	'grouppage-inactive' => '{{ns:project}}:Әүҙем булмаған ҡатнашыусылар',
	'wikimedia-copyright' => 'Текст <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike License</a> рөхсәтнамәһе буйынса рөхсәт ителгән; өҫтәмә шарттар ҡулланыла ала.
Тулыраҡ мәғлүмәт алыр өсөн, <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Ҡулланыу шарттарын</a> ҡарағыҙ.',
	'wikimedia-copyrightwarning' => "'''«{{int:savearticle}}»''' төймәһенә баҫыу менән һеҙ [//wikimediafoundation.org/wiki/Terms_of_Use ҡулланыу шарттарын] ҡабул итәһегеҙ. Шулай уҡ, был мәғлүмәттең [//creativecommons.org/licenses/by-sa/3.0/deed.ru Creative Commons Attribution/Share-Alike 3.0] һәм [//www.gnu.org/copyleft/fdl.html GFDL] рөхсәтнамәләренә ярашлы ирекле таратылыуына кире алып булмаған ризалыҡ бирәһегеҙ.  Creative Commons рөхсәтнамәһенең үтәлеү шарты итеп, был мәғлүмәткә гиперһылтанма йәки URL адрес аша һылтанма ҡуйыуҙы таныйһығыҙ.",
	'cant-delete-main-page' => 'Төп битте юя йәки күсерә алмайһығыҙ.',
);

/** Bavarian (Boarisch)
 * @author Mucalexx
 */
$messages['bar'] = array(
	'wikimedia-copyright' => 'Da Text is unter da Lizenz <a href="//creativecommons.org/licenses/by-sa/3.0/deed.de">„Creative Commons Attribution/Share-Alike“</a> vafiagbor; zuasätzliche Bedingungen kennan åwendbor sai.
Oazlhaiten san in de <a href="//wikimediafoundation.org/wiki/Nutzungsbedingungen">Nutzungsbedingungen</a> beschrim.',
);

/** Southern Balochi (بلوچی مکرانی)
 * @author Mostafadaneshvar
 */
$messages['bcc'] = array(
	'wikimediamessages-desc' => 'کوله یان مخصوص ویکی‌مدیا',
	'sitesupport' => 'مدتان',
	'tooltip-n-sitesupport' => 'ما را حمایت کنیت',
	'group-accountcreator' => 'حساب شرکنوکان',
	'group-accountcreator-member' => 'حساب شرکنوک', # Fuzzy
	'grouppage-accountcreator' => '{{ns:project}}:حساب شرکنوکان',
	'group-founder' => 'بنگیج کنوکان',
	'group-founder-member' => 'بنگیج کنوک', # Fuzzy
	'grouppage-founder' => '{{ns:project}}:بنگیج کنوکان',
	'group-import' => 'وارد کنوکان',
	'group-import-member' => 'واردکنوک', # Fuzzy
	'grouppage-import' => '{{ns:project}}:واردکنوکان',
	'group-ipblock-exempt' => 'معافیت محدودیت آی پی',
	'group-ipblock-exempt-member' => 'استثنای محدودیت آی پی', # Fuzzy
	'grouppage-ipblock-exempt' => '{{ns:project}}:استثناء محدودیت آی پی',
	'group-rollbacker' => 'عقب ترینوک',
	'group-rollbacker-member' => 'ترینوک', # Fuzzy
	'grouppage-rollbacker' => '{{ns:project}}:واردکنوکان',
	'group-transwiki' => 'واردکنوکان بین‌ویکی',
	'group-transwiki-member' => 'واردکنوک بین‌ویکی', # Fuzzy
	'grouppage-transwiki' => '{{ns:project}}:واردکنوکان بین ویکی',
	'group-Global_bot' => 'رباتان سراسری',
	'group-Global_bot-member' => 'ربات سراسری', # Fuzzy
	'group-Global_rollback' => 'ترینوک سراسری',
	'group-Global_rollback-member' => 'ترینوک سراسری', # Fuzzy
	'group-Staff' => 'کارمند',
	'group-Staff-member' => 'عضو کارمند',
	'group-steward' => 'نگهبانان',
	'group-steward-member' => 'نگهبان', # Fuzzy
	'group-sysadmin' => 'مدیران سیستم',
	'group-sysadmin-member' => 'مدیر سیستم', # Fuzzy
);

/** Bikol Central (Bikol Central)
 * @author Filipinayzd
 * @author Geopoet
 */
$messages['bcl'] = array(
	'sitesupport' => 'Magdonar',
	'tooltip-n-sitesupport' => 'Suportaran kami',
);

/** Belarusian (беларуская)
 * @author Platonides
 * @author TarzanASG
 * @author Yury Tarasievich
 * @author Чаховіч Уладзіслаў
 */
$messages['be'] = array(
	'sitesupport' => 'Ахвяраванні',
	'tooltip-n-sitesupport' => 'Падтрымайце нас',
	'nstab-creator' => 'Аўтар',
	'nstab-institution' => 'Установа',
	'nstab-sequence' => 'Паслядоўнасць',
	'nstab-timedtext' => 'Сінхратэкст',
	'group-Ex_Administrator' => 'Былыя адміністратары',
	'grouppage-abusefilter' => '{{ns:project}}:Abuse filter editors',
	'grouppage-accountcreator' => '{{ns:project}}:Account creators',
	'grouppage-autopatrolled' => '{{ns:project}}:Autopatrollers',
	'grouppage-autoreviewer' => '{{ns:project}}:Autoreviewers',
	'grouppage-bigexport' => '{{ns:project}}:Big exporters',
	'grouppage-founder' => '{{ns:project}}:Founders',
	'grouppage-import' => '{{ns:project}}:Importers',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP block exemption',
	'grouppage-rollbacker' => '{{ns:project}}:Rollbackers',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki importers',
	'grouppage-inactive' => '{{ns:project}}:Inactive users',
	'wikimedia-copyright' => 'Тэкст даступны на ўмовах ліцэнзіі <a href="//creativecommons.org/licenses/by-sa/3.0/deed.be">Creative Commons Attribution/Share-Alike</a>;
таксама могуць дзейнічаць дадатковыя ўмовы.
Падрабязней гл. <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Умовы карыстання</a>.',
	'wikimedia-copyrightwarning' => "Замацоўваючы гэта, вы згаджаецеся беззваротна выпусціць свой уклад на ўмовах ліцэнзій [//creativecommons.org/licenses/by-sa/3.0/deed.be Creative Commons Attribution/Share-Alike License 3.0] і [//www.gnu.org/copyleft/fdl.html GFDL].
Вы згаджаецеся на адзначэнне вашага аўтарства пры паўторным выкарыстанні гэтай старонкі, у мінімальным аб'ёме гіпер-спасылкі або адрасу URL гэтай старонкі, у якую вы робіце ўклад.
Падрабязней гл. [//wikimediafoundation.org/wiki/Terms_of_Use Умовы карыстання].", # Fuzzy
	'upload-more-photos-of-this-monument' => 'Загрузіць болей здымкаў гэтага аб’екта',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author Cesco
 * @author EugeneZelenko
 * @author Jim-by
 * @author Red Winged Duck
 * @author Wizardist
 * @author Zedlik
 */
$messages['be-tarask'] = array(
	'wikimediamessages-desc' => 'Спэцыфічныя паведамленьні фундацыі «Вікімэдыя»',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=be-tarask',
	'sitesupport' => 'Ахвяраваньні',
	'tooltip-n-sitesupport' => 'Падтрымайце нас',
	'specialpages-group-contribution' => 'Ахвяраваньні/Збор сродкаў',
	'nstab-creator' => 'Аўтар',
	'nstab-institution' => 'Установа',
	'nstab-sequence' => 'Пасьлядоўнасьць',
	'nstab-timedtext' => 'Сынхронны тэкст',
	'group-Ex_Administrator' => 'Былыя адміністратары',
	'group-Ex_Administrator-member' => '{{GENDER:$1|былы адміністратар|былая адміністратарка}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Былыя адміністратары',
	'group-Ex_Bureaucrat' => 'Былыя бюракраты',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|былы бюракрат|былая бюракратка}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Былыя бюракраты',
	'group-Image-reviewer' => 'Правяраючыя выявы',
	'group-Image-reviewer-member' => '{{GENDER:$1|правяраючы выявы|правяраючая выявы}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:Правяраючыя выявы',
	'group-OTRS-member' => 'Удзельнікі OTRS',
	'group-OTRS-member-member' => '{{GENDER:$1|удзельнік OTRS|удзельніца OTRS}}',
	'grouppage-OTRS-member' => '{{ns:project}}:Удзельнікі OTRS',
	'group-abusefilter' => 'Рэдактары фільтру злоўжываньняў',
	'group-abusefilter-member' => '{{GENDER:$1|рэдактар фільтру злоўжываньняў|рэдактарка фільтру злоўжываньняў}}',
	'grouppage-abusefilter' => '{{ns:project}}:Рэдактары фільтру злоўжываньняў',
	'group-accountcreator' => 'Стваральнікі рахункаў',
	'group-accountcreator-member' => '{{GENDER:$1|стваральнік рахункаў|стваральніца рахункаў}}',
	'grouppage-accountcreator' => '{{ns:project}}:Стваральнікі рахункаў',
	'group-arbcom' => 'Чальцы арбітражнага камітэту',
	'group-arbcom-member' => '{{GENDER:$1|чалец арбітражнага камітэту|чалец арбітражнага камітэту}}',
	'grouppage-arbcom' => '{{ns:project}}:Чальцы арбітражнага камітэту',
	'group-autopatrolled' => 'Аўтаматычна патруліруючыя',
	'group-autopatrolled-member' => '{{GENDER:$1|аўтаматычна патруліруючы|аўтаматычна патруліруючая}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Аўтаматычна патруліруючыя',
	'group-autoreviewer' => 'Аўтаматычныя рэцэнзэнты',
	'group-autoreviewer-member' => '{{GENDER:$1|аўтаматычны рэцэнзэнт|аўтаматычныя рэцэнзэнтка}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Аўтаматычныя рэцэнзэнты',
	'group-bigexport' => 'Значныя экспарцёры',
	'group-bigexport-member' => '{{GENDER:$1|значны экспарцёр|значная экспарцёрка}}',
	'grouppage-bigexport' => '{{ns:project}}:Значныя экспарцёры',
	'group-botadmin' => 'Робаты з правамі адміністратара',
	'group-botadmin-member' => '{{GENDER:$1|}}Робат з правамі адміністратара',
	'grouppage-botadmin' => '{{ns:project}}:Робаты з правамі адміністратара',
	'group-confirmed' => 'Пацьверджаныя ўдзельнікі',
	'group-confirmed-member' => '{{GENDER:$1|пацьверджаны ўдзельнік|пацьверджаная ўдзельніца}}',
	'grouppage-confirmed' => '{{ns:project}}:Пацьверджаныя ўдзельнікі',
	'group-editprotected' => 'Рэдактары абароненых старонак',
	'group-editprotected-member' => '{{GENDER:$1|рэдактар абароненых старонак|рэдактарка абароненых старонак}}',
	'grouppage-editprotected' => '{{ns:project}}:Рэдактары абароненых старонак',
	'group-eliminator' => 'Выдаляючыя',
	'group-eliminator-member' => '{{GENDER:$1|выдаляючы|выдаляючая}}',
	'grouppage-eliminator' => '{{ns:project}}:Выдаляючы',
	'group-filemover' => 'Пераносчыкі файлаў',
	'group-filemover-member' => '{{GENDER:$1|пераносчык файлаў|пераносчыца файлаў}}',
	'grouppage-filemover' => '{{ns:project}}:Пераносчыкі файлаў',
	'group-flood' => 'Робаты',
	'group-flood-member' => '{{GENDER:$1|удзельнік-робат|удзельніца-робат}}',
	'grouppage-flood' => '{{ns:project}}:Робаты',
	'group-founder' => 'Фундатары',
	'group-founder-member' => '{{GENDER:$1|фундатар|фундатарка}}',
	'grouppage-founder' => '{{ns:project}}:Фундатары',
	'group-import' => 'Імпартэры',
	'group-import-member' => '{{GENDER:$1|імпартэр|імпартэрка}}',
	'grouppage-import' => '{{ns:project}}:Імпартэры',
	'group-interface_editor' => 'Рэдактары інтэрфэйса',
	'group-interface_editor-member' => '{{GENDER:$1|рэдактар інтэрфэйса|рэдактарка інтэрфэйса}}',
	'grouppage-interface_editor' => '{{ns:project}}:Рэдактары інтэрфэйса',
	'group-ipblock-exempt' => 'Выключэньні з блякаваньняў ІР-адрасоў',
	'group-ipblock-exempt-member' => '{{GENDER:$1||}}выключэньне з блякаваньняў ІР-адрасоў',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Выключэньні з блякаваньняў ІР-адрасоў',
	'group-patroller' => 'Патруліруючыя',
	'group-patroller-member' => '{{GENDER:$1|патрулюючы|патрулюючая}}',
	'grouppage-patroller' => '{{ns:project}}:Патрульныя',
	'group-researcher' => 'Дасьледчыкі',
	'group-researcher-member' => '{{GENDER:$1|дасьледчык|дасьледчыца}}',
	'grouppage-researcher' => '{{ns:project}}:Дасьледчык',
	'group-rollbacker' => 'Адкатвальнікі',
	'group-rollbacker-member' => '{{GENDER:$1|адкатвальнік|адкатвальніца}}',
	'grouppage-rollbacker' => '{{ns:project}}:Адкатвальнікі',
	'group-transwiki' => 'Імпартэры зь іншых вікі',
	'group-transwiki-member' => '{{GENDER:$1|імпартэр зь іншых вікі|імпартэрка зь іншых вікі}}',
	'grouppage-transwiki' => '{{ns:project}}:Імпартэры зь іншых вікі',
	'group-trusted' => 'Давераныя ўдзельнікі',
	'group-trusted-member' => '{{GENDER:$1|давераны ўдзельнік|давераная ўдзельніца}}',
	'grouppage-trusted' => '{{ns:project}}:Давераныя ўдзельнікі',
	'group-Global_bot' => 'Глябальныя робаты',
	'group-Global_bot-member' => '{{GENDER:$1|глябальны робат}}',
	'group-Global_rollback' => 'Глябальныя адкатвальнікі',
	'group-Global_rollback-member' => '{{GENDER:$1|глябальны адкатвальнік|глябальная адкатвальніца}}',
	'group-Global_sysops' => 'Глябальныя адміністратары',
	'group-Global_sysops-member' => '{{GENDER:$1|глябальны адміністратар|глябальная адміністратарка}}',
	'group-Ombudsmen' => 'праваабаронцы',
	'group-Ombudsmen-member' => '{{GENDER:$1|праваабаронца|праваабаронца}}',
	'group-Staff' => 'Супрацоўнікі',
	'group-Staff-member' => 'супрацоўнік',
	'group-editinterface' => 'Рэдактары інтэрфэйса',
	'group-editinterface-member' => '{{GENDER:$1|рэдактар інтэрфэйса|рэдактарка інтэрфэйса}}',
	'group-steward' => 'Сьцюарды',
	'group-steward-member' => '{{GENDER:$1|сьцюард|сьцюардка}}',
	'group-sysadmin' => 'Сыстэмныя адміністратары',
	'group-sysadmin-member' => '{{GENDER:$1|сыстэмны адміністратар|сыстэмная адміністратарка}}',
	'group-API_High_Limit_Requestor' => 'Карыстальнікі API з паменшанымі абмежаваньнямі',
	'group-API_High_Limit_Requestor-member' => '{{GENDER:$1|Карыстальнік API з паменшанымі абмежаваньнямі}}',
	'group-Indic_Bots' => 'Індыйскія робаты',
	'group-Indic_Bots-member' => '{{GENDER:$1|індыйскі робат}}',
	'group-New_wikis_importer' => 'Імпартэры новых праектаў',
	'group-New_wikis_importer-member' => '{{GENDER:$1|імпартэр|імпартэрка}} новых праектаў',
	'group-global-ipblock-exempt' => 'Выключаныя з глябальных блякаваньняў па IP',
	'group-global-ipblock-exempt-member' => '{{GENDER:$1|выключаны|выключаная}} з глябальных блякаваньняў па IP',
	'group-recursive-export' => 'Рэкурсіўны экспарт',
	'group-recursive-export-member' => '{{GENDER:$1|рэкурсіўны экспартэр|рэкурсіўная экспартэрка}}',
	'group-translationadmin' => 'Адміністратары перакладаў',
	'group-translationadmin-member' => '{{GENDER:$1|адміністратар перакладаў|адміністратарка перакладаў}}',
	'grouppage-translationadmin' => '{{ns:project}}:Адміністратары перакладаў',
	'group-centralnoticeadmin' => 'Адміністратары CentralNotice',
	'group-centralnoticeadmin-member' => '{{GENDER:$1|адміністратар|адміністратарка}} CentralNotice',
	'grouppage-centralnoticeadmin' => '{{ns:project}}:Адміністратары CentralNotice',
	'group-coder' => 'Праграмісты',
	'group-coder-member' => '{{GENDER:$1|праграміст|праграмістка}}',
	'group-inactive' => 'Неактыўныя ўдзельнікі',
	'group-inactive-member' => '{{GENDER:$1|неактыўны ўдзельнік|неактыўная ўдзельніца}}',
	'grouppage-inactive' => '{{ns:project}}:Неактыўныя ўдзельнікі',
	'wikimedia-copyright' => 'Гэты тэкст даступны на ўмовах <a href="//creativecommons.org/licenses/by-sa/3.0/">ліцэнзіі Creative Commons Attribution/Share-Alike</a>; могуць ужывацца дадатковыя ўмовы. Глядзіце падрабязнасьці ва <a href="//wikimediafoundation.org/wiki/Умовы_выкарыстаньня">ўмовах выкарыстаньня</a>.',
	'wikidata-copyright' => 'Усе структураваныя зьвесткі ў галоўнай прасторы назваў і прасторы ўласьцівасьцяў даступныя на ўмове ліцэнзіі <a href="//creativecommons.org/publicdomain/zero/1.0/" title="Definition of the Creative Commons CC0 License">Creative Commons CC0 License</a>; зьмест у іншых прасторах даступны на ўмовах <a href="//creativecommons.org/licenses/by-sa/3.0/" title="Definition of the Creative Commons Attribution/Share-Alike License">Creative Commons Attribution/Share-Alike License</a>; могуць ужывацца дадатковыя ўмовы.
Глядзіце падрабязнасьці ва <a href="//wikimediafoundation.org/wiki/Terms_of_Use" title="Wikimedia Foundation Terms of Use">Ўмовах выкарыстаньня</a>.',
	'wikidata-shortcopyrightwarning' => 'Націснуўшы «захаваць», вы пагаджаецеся з [https://wikimediafoundation.org/wiki/Умовы_выкарыстаньня умовамі выкарыстаньня], а таксама беспаваротна пагаджаецеся на публікацыю вашага ўнёска на ўмовах [https://creativecommons.org/publicdomain/zero/1.0/ ліцэнзіі CC0].',
	'wikimedia-copyrightwarning' => 'Націскаючы на кнопку «{{int:savearticle}}», Вы пагаджаецеся з [//wikimediafoundation.org/wiki/Terms_of_Use умовамі выкарыстаньня], а таксама на апублікаваньне Вашага ўнёску згодна ўмоваў ліцэнзіяў [//creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] і [//www.gnu.org/copyleft/fdl.html GFDL]. Вы пагаджаецеся, што пазнака гіпэр-спасылкі на адпаведную старонку ці яе URL-адрас будзе дастатковым для выкананьня ўмоваў ліцэнзіі Creative Commons.',
	'cant-delete-main-page' => 'Вы ня можаце выдаліць ці перанесьці галоўную старонку.',
	'wikimedia-translationnotifications-signup-legal' => 'Вы пагаджаецеся, што, перадаючы гэтыя зьвесткі ў Фундацыю «Вікімэдыя», мы можам зьвяртацца да вас на конт перакладаў і іншых пытаньняў, датычных руху Вікімэдыі, якія могуць быць цікавымі вам. Вы пагаджаецеся на захоўваньне вашых зьвестак ў Злучаных Штатах Амэрыкі, што робіць іх прадметам нашых [https://wikimediafoundation.org/wiki/Privacy_policy правілаў адносна прыватнасьці].',
	'upload-more-photos-of-this-monument' => 'Загрузіць болей здымкаў гэтага аб’екта',
	'extdist-branch-master' => 'master (апошняя працоўная вэрсія)',
	'extdist-branch-REL1_21' => '1.21 (апошняя стабільная MediaWiki)',
	'createacct-helpusername-url' => '{{ns:Project}}:Правілы_найменьня_ўдзельнікаў',
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(дапамажыце выбраць)]]',
	'createacct-captcha-help-url' => '{{ns:Project}}:Запыты на стварэньне рахункаў',
	'createacct-imgcaptcha-help' => 'Ня бачыце выяву? [[{{MediaWiki:createacct-captcha-help-url}}|Запытайце рахунак]]',
);

/** Bulgarian (български)
 * @author Borislav
 * @author DCLXVI
 * @author Ivanko
 * @author Meno25
 * @author Spiritia
 * @author Stanqo
 * @author Turin
 */
$messages['bg'] = array(
	'wikimediamessages-desc' => 'Съобщения, специфични за Уикимедия',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=bg',
	'sitesupport' => 'Дарения',
	'tooltip-n-sitesupport' => 'Подкрепете ни',
	'nstab-creator' => 'Създател',
	'nstab-institution' => 'Институция',
	'nstab-sequence' => 'Последователност',
	'group-Ex_Administrator' => 'Бивши администратори',
	'group-Ex_Bureaucrat' => 'Бивши бюрократи',
	'group-OTRS-member' => 'OTRS членове',
	'group-OTRS-member-member' => 'член на OTRS', # Fuzzy
	'group-abusefilter' => 'Редактори на филтъра срещу злоупотреби',
	'group-abusefilter-member' => 'редактор на филтъра срещу злоупотреби', # Fuzzy
	'grouppage-abusefilter' => '{{ns:project}}: Редактори на филтъра срещу злоупотреби',
	'group-accountcreator' => 'Създатели на сметки',
	'group-accountcreator-member' => 'създател на сметки', # Fuzzy
	'grouppage-accountcreator' => '{{ns:project}}:Създатели на сметки',
	'group-arbcom' => 'Членове на арбитражната комисия',
	'group-arbcom-member' => 'член на арбитражната комисия', # Fuzzy
	'grouppage-arbcom' => '{{ns:project}}:Членове на арбитражната комисия',
	'group-autopatrolled' => 'Автопатрули',
	'group-autopatrolled-member' => 'Автопатрульор', # Fuzzy
	'grouppage-autopatrolled' => '{{ns:project}}:Автопатрули',
	'group-autoreviewer' => 'Авторецензенти',
	'group-autoreviewer-member' => 'авторецензент', # Fuzzy
	'grouppage-autoreviewer' => '{{ns:project}}:Авторецензенти',
	'group-bigexport' => 'Големи износители',
	'group-bigexport-member' => 'голям износител', # Fuzzy
	'grouppage-bigexport' => '{{ns:project}}: Големи износители',
	'group-botadmin' => 'Ботове с права на администратор',
	'group-confirmed' => 'Потвърдени потребители',
	'group-confirmed-member' => 'потвърден потребител', # Fuzzy
	'grouppage-confirmed' => '{{ns:project}}:Потвърдени потребители',
	'group-editprotected' => 'Редактори на защитени страници',
	'group-editprotected-member' => 'редактор на защитени страници', # Fuzzy
	'grouppage-editprotected' => '{{ns:project}}:Редактори на защитени страници',
	'group-flood' => 'Оператори на бот',
	'group-flood-member' => 'бот оператор', # Fuzzy
	'grouppage-flood' => '{{ns:project}}:Бот оператори',
	'group-founder' => 'Основатели',
	'group-founder-member' => 'Основател', # Fuzzy
	'grouppage-founder' => '{{ns:project}}:Основатели',
	'group-import' => 'Вносители',
	'group-import-member' => 'вносител', # Fuzzy
	'grouppage-import' => '{{ns:project}}:Вносители',
	'group-interface_editor' => 'Редактори на интерфейса',
	'group-interface_editor-member' => 'редактор на интерфейса', # Fuzzy
	'grouppage-interface_editor' => '{{ns:project}}:Редактори на интерфейса',
	'group-ipblock-exempt' => 'Изключения от блокирането по IP адрес',
	'group-ipblock-exempt-member' => 'Изключение от блокирането по IP адрес', # Fuzzy
	'grouppage-ipblock-exempt' => '{{ns:project}}:Изключения от блокирането по IP адрес',
	'group-patroller' => 'Патрульори',
	'group-patroller-member' => 'Патрульор', # Fuzzy
	'group-researcher' => 'Изследователи',
	'group-researcher-member' => 'изследовател', # Fuzzy
	'grouppage-researcher' => '{{ns:project}}:Изследователи',
	'group-rollbacker' => 'Изпълнителни на отмени',
	'group-rollbacker-member' => 'изпълнител на отмени', # Fuzzy
	'grouppage-rollbacker' => '{{ns:project}}:Изпълнители на отмени',
	'group-transwiki' => 'Transwiki вносители',
	'group-transwiki-member' => 'Transwiki вносител', # Fuzzy
	'grouppage-transwiki' => '{{ns:project}}:Transwiki вносители',
	'group-trusted' => 'Доверени потребители',
	'group-trusted-member' => 'доверен потребител', # Fuzzy
	'grouppage-trusted' => '{{ns:project}}:Доверени потребители',
	'group-Global_bot' => 'Глобални ботове',
	'group-Global_bot-member' => 'глобален бот', # Fuzzy
	'group-Global_rollback' => 'Глобални изпълнители на отмени',
	'group-Global_rollback-member' => 'глобален изпълнител на отмени', # Fuzzy
	'group-Global_sysops' => 'Глобални администратори',
	'group-Global_sysops-member' => 'глобален администратор', # Fuzzy
	'group-Ombudsmen' => 'Омбудсмани',
	'group-Ombudsmen-member' => 'омбудсман', # Fuzzy
	'group-Staff' => 'Персонал',
	'group-Staff-member' => 'персонал',
	'group-editinterface' => 'Редактори на интерфейса',
	'group-editinterface-member' => 'редактор на интерфейса', # Fuzzy
	'group-steward' => 'Стюарди',
	'group-steward-member' => '{{GENDER:$1|стюард}}',
	'grouppage-steward' => '{{ns:project}}:Стюарди',
	'group-sysadmin' => 'Системни администратори',
	'group-sysadmin-member' => 'системен администратор', # Fuzzy
	'group-recursive-export' => 'Рекурсивно изнасяне',
	'group-coder' => 'Програмисти',
	'group-coder-member' => '{{GENDER:$1|програмист}}',
	'group-inactive' => 'Неактивни потребители',
	'group-inactive-member' => 'неактивен потребител', # Fuzzy
	'grouppage-inactive' => '{{ns:project}}:Неактивни потребители',
	'wikimedia-copyright' => 'Текстът е достъпен под лиценза <a href="//creativecommons.org/licenses/by-sa/3.0/deed.bg">Creative Commons Признание-Споделяне на споделеното</a>;
може да са приложени допълнителни условия.
За подробности вижте <a href="//wikimediafoundation.org/wiki/Terms_of_Use/bg">Условия за ползване</a>.',
	'wikidata-copyright' => 'Всички структурирани данни от основното именно пространство и именно пространство "Свойство:" са достъпни под условията на договор <a href="//creativecommons.org/publicdomain/zero/1.0/" title="Дефиниция на договор Криейтив Комънс CC0">Криейтив Комънс CC0</a>; съдържанието в останалите именни пространства е достъпно под условията на договор <a href="//creativecommons.org/licenses/by-sa/3.0/" title="Дефиниция на договор Криейтив Комънс Признание/Споделяне на споделеното">Криейтив Комънс Признание/Споделяне на споделеното</a>; може да са в сила и допълнителни условия. За повече подробности вижте <a href="//wikimediafoundation.org/wiki/Terms_of_Use" title="Условия за ползване на Фондация Уикимедия">Условията за ползване</a>.',
	'wikidata-shortcopyrightwarning' => 'Натискайки бутона "Съхраняване", се съгласявате с [https://wikimediafoundation.org/wiki/Terms_of_Use/bg Условията за ползване] и безвъзвратно публикувате приноса си под условията на договор [https://creativecommons.org/publicdomain/zero/1.0/ Криейтив Комънс CC0].',
	'wikimedia-copyrightwarning' => 'Със съхраняването на редакцията, се съгласявате безвъзвратно да отдадете своя принос под лиценза [//creativecommons.org/licenses/by-sa/3.0/ Криейтив Комънс Признание — Споделяне на споделеното 3.0] и [//www.gnu.org/copyleft/fdl.html Лиценза за свободна документация на GNU].
Съгласявате се минималното признание на авторството ви, при ползване на материала от други потребители, да става с хипервръзка към страницата, към която допринасяте.
За подробности вижте [//wikimediafoundation.org/wiki/Terms_of_Use/bg Условията за ползване].', # Fuzzy
	'cant-delete-main-page' => 'Не можете да изтривате или премествате Началната страница.',
	'upload-more-photos-of-this-monument' => 'Качване на още снимки на този паметник',
);

/** Bhojpuri (भोजपुरी)
 * @author Ganesh
 */
$messages['bho'] = array(
	'sitesupport' => 'दान करीं',
	'tooltip-n-sitesupport' => 'हमनी के सहयोग करीं',
	'group-accountcreator' => 'खाता बनावे वाला',
);

/** Banjar (Bahasa Banjar)
 * @author Ezagren
 * @author Nemo bis
 */
$messages['bjn'] = array(
	'group-abusefilter' => 'Editor filter panyalahgunaan',
	'group-bigexport' => 'Ikspurtir ganal',
	'wikimedia-copyrightwarning' => 'Lawan mangaklik picikan "{{int:savearticle}}", Pian hakun haja kapada [//wikimediafoundation.org/wiki/Terms_of_Use Katantuan mamakai], wan Pian satarusnya malapas sumbangan Pian--kada kawa dijumput lagi-- di bawah [//creativecommons.org/licenses/by-sa/3.0/ Lisansi CC-BY-SA 3.0] wan [//www.gnu.org/copyleft/fdl.html GFDL].
Pian hakun haja kalu sabuting tautan atawa URL cukup manaliakan di bawah lisénsi Creative Commons.',
);

/** Bambara (bamanankan)
 */
$messages['bm'] = array(
	'sitesupport' => 'Banumanke',
);

/** Bengali (বাংলা)
 * @author Abdullah Harun Jewel
 * @author Aftab1995
 * @author Bellayet
 * @author Nasir8891
 * @author Nemo bis
 * @author Prometheus.pyrphoros
 * @author Wikitanvir
 * @author Zaheen
 */
$messages['bn'] = array(
	'wikimediamessages-desc' => 'উইকিমিডিয়া নির্ধারিত বার্তা',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=bn',
	'sitesupport' => 'দান করুন',
	'tooltip-n-sitesupport' => 'আমাদের সহায়তা করুন',
	'specialpages-group-contribution' => 'অবদান/তহবিল সংগ্রাহক',
	'nstab-creator' => 'নির্মাতা',
	'nstab-institution' => 'প্রতিষ্ঠান',
	'nstab-sequence' => 'ক্রম',
	'nstab-timedtext' => 'টাইমডটেক্সট',
	'group-Ex_Administrator' => 'পূর্বের প্রশাসকগণ',
	'group-Ex_Administrator-member' => '{{GENDER:$1|পূর্বের প্রশাসকগণ}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:পূর্বের প্রশাসকগণ',
	'group-Ex_Bureaucrat' => 'পূর্বের বুরোক্র্যটগণ',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|পূর্বের বুরোক্র্যটগণ}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:পূর্বের বুরোক্র্যটগণ',
	'group-Image-reviewer' => 'চিত্র পর্যালোচক',
	'group-Image-reviewer-member' => '{{GENDER:$1|চিত্র পর্যালোচক}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:চিত্র পর্যালোচক',
	'group-OTRS-member' => 'OTRS সদস্য',
	'group-OTRS-member-member' => '{{GENDER:$1|OTRS সদস্য}}',
	'grouppage-OTRS-member' => '{{ns:project}}:ওটিআরএস সদস্য',
	'group-abusefilter' => 'অপব্যবহার ফিল্টার সম্পাদক',
	'group-abusefilter-member' => '{{GENDER:$1|অপব্যবহার ফিল্টার সম্পাদক}}',
	'grouppage-abusefilter' => '{{ns:project}}:অপব্যবহার ফিল্টার সম্পাদক',
	'group-accountcreator' => 'অ্যাকাউন্ট স্রষ্টা',
	'group-accountcreator-member' => '{{GENDER:$1|অ্যাকাউন্ট স্রষ্টা}}',
	'grouppage-accountcreator' => '{{ns:project}}:অ্যাকাউন্ট সৃষ্টিকারী',
	'group-arbcom' => 'আর্বিট্রেশন কমিটি সদস্য',
	'group-arbcom-member' => '{{GENDER:$1|আর্বিট্রেশন কমিটি সদস্য}}',
	'grouppage-arbcom' => '{{ns:project}}:আর্বিট্রেশন কমিটি সদস্য',
	'group-autopatrolled' => 'স্বয়ংক্রিয় পরীক্ষক',
	'group-autopatrolled-member' => '{{GENDER:$1|স্বয়ংক্রিয় পরীক্ষক}}',
	'grouppage-autopatrolled' => '{{ns:project}}:স্বয়ংক্রিয় পরীক্ষণ',
	'group-autoreviewer' => 'স্বয়ংক্রিয় পর্যালোচক',
	'group-autoreviewer-member' => '{{GENDER:$1|স্বয়ংক্রিয়-পর্যালোচক}}',
	'grouppage-autoreviewer' => '{{ns:project}}:স্বয়ংক্রিয়-পর্যালোচক',
	'group-bigexport' => 'বহু-পাতা-রপ্তানিকারক',
	'group-bigexport-member' => '{{GENDER:$1|বহু-পাতা-রপ্তানিকারক}}',
	'grouppage-bigexport' => '{{ns:project}}:বহু-পাতা-রপ্তানিকারক',
	'group-botadmin' => 'প্রশাসকের ক্ষমতা সম্পন্ন বট',
	'group-botadmin-member' => '{{GENDER:$1|প্রশাসকের ক্ষমতা সম্পন্ন বট}}',
	'grouppage-botadmin' => '{{ns:project}}:প্রশাসকের ক্ষমতা সম্পন্ন বট',
	'group-confirmed' => 'নিশ্চিতকৃত ব্যবহারকারী',
	'group-confirmed-member' => '{{GENDER:$1|নিশ্চিতকৃত ব্যবহারকারী}}',
	'grouppage-confirmed' => '{{ns:project}}:নিশ্চিতকৃত ব্যবহারকারীরা',
	'group-editprotected' => 'সুরক্ষিত পাতা সম্পাদক',
	'group-editprotected-member' => '{{GENDER:$1|সুরক্ষিত পাতা সম্পাদক}}',
	'grouppage-editprotected' => '{{ns:project}}:সুরক্ষিত পাতা সম্পাদক',
	'group-eliminator' => 'এলিমিনাটর',
	'group-eliminator-member' => '{{GENDER:$1|এলিমিনাটর}}',
	'grouppage-eliminator' => '{{ns:project}}:এলিমিনাটর',
	'group-filemover' => 'ফাইল মুভার',
	'group-filemover-member' => '{{GENDER:$1|ফাইল মুভার}}',
	'grouppage-filemover' => '{{ns:project}}:ফাইল অপসারক',
	'group-flood' => 'বট ব্যবহারকারী',
	'group-flood-member' => '{{GENDER:$1|ব্যবহারকারী বট}}',
	'grouppage-flood' => '{{ns:project}}:বট ব্যবহারকারী',
	'group-founder' => 'প্রতিষ্ঠাতা',
	'group-founder-member' => '{{GENDER:$1|প্রতিষ্ঠাতা}}',
	'grouppage-founder' => '{{ns:project}}:প্রতিষ্ঠাতাগণ',
	'group-import' => 'আমদানীকারক',
	'group-import-member' => '{{GENDER:$1|ইম্পোর্টার}}',
	'grouppage-import' => '{{ns:project}}:আমদানীকারক',
	'group-interface_editor' => 'ইন্টারফেস সম্পাদক',
	'group-interface_editor-member' => '{{GENDER:$1|ইন্টারফেস সম্পাদক}}',
	'grouppage-interface_editor' => '{{ns:project}}:ইন্টারফেস সম্পাদক',
	'group-ipblock-exempt' => 'আইপি বাধাদান রহিত',
	'group-ipblock-exempt-member' => '{{GENDER:$1|আইপি নিষেধাজ্ঞা রহিত}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:আইপি নিষেধাজ্ঞা রহিত',
	'group-patroller' => 'পর্যবেক্ষক',
	'group-patroller-member' => '{{GENDER:$1|পর্যবেক্ষক}}',
	'grouppage-patroller' => '{{ns:project}}:স্বয়ংক্রিয় পরীক্ষক',
	'group-researcher' => 'গবেষক',
	'group-researcher-member' => '{{GENDER:$1|গবেষক}}',
	'grouppage-researcher' => '{{ns:project}}:গবেষক',
	'group-rollbacker' => 'রোলব্যাকার',
	'group-rollbacker-member' => '{{GENDER:$1|রোলব্যাকার}}',
	'grouppage-rollbacker' => '{{ns:project}}:রোলব্যাক',
	'group-transwiki' => 'ট্রান্সউইকি আমদানিকারক',
	'group-transwiki-member' => '{{GENDER:$1|ট্রান্সউইকি ইম্পোর্টার}}',
	'grouppage-transwiki' => '{{ns:project}}:ট্রান্সউইকি আমদানিকারক',
	'group-trusted' => 'আস্থাভাজন ব্যবহারকারী',
	'group-trusted-member' => '{{GENDER:$1|বিশ্বস্ত ব্যবহারকারী}}',
	'grouppage-trusted' => '{{ns:project}}:আস্থাভাজন ব্যবহারকারী',
	'group-uploader' => 'উত্তোলনকারীবৃন্দ
ওয়েব সার্ভারে ফাইল উত্তোলনকারী',
	'group-uploader-member' => 'উত্তোলনকারী
<BR>যে সার্ভারে ফাইল উত্তোলন করে।', # Fuzzy
	'grouppage-uploader' => '{{ns:প্রকল্প}}:উত্তোলনকারীগণ
<BR>যারা গোষ্ঠীর পৃষ্ঠাসমূহ সার্ভারে উত্তোলন করে।', # Fuzzy
	'group-Global_bot' => 'গ্লোবাল বটস',
	'group-Global_bot-member' => '{{GENDER:$1|গ্লোবাল বট}}',
	'group-Global_rollback' => 'গ্লোবাল রোলব্যাকার',
	'group-Global_rollback-member' => '{{GENDER:$1|গ্লোবাল রোলব্যাকার}}',
	'group-Global_sysops' => 'গ্লোবাল প্রশাসক',
	'group-Global_sysops-member' => '{{GENDER:$1|গ্লোবাল প্রশাসক}}',
	'group-Ombudsmen' => 'ন্যায়পাল',
	'group-Ombudsmen-member' => '{{GENDER:$1|ন্যায়পাল সদস্য}}',
	'group-Staff' => 'কর্মচারি',
	'group-Staff-member' => 'কর্মচারি',
	'group-editinterface' => 'ইন্টারফেস সম্পাদক',
	'group-editinterface-member' => '{{GENDER:$1|ইন্টারফেস সম্পাদক}}',
	'group-steward' => 'স্টুয়ার্ড',
	'group-steward-member' => '{{GENDER:$1|স্টুয়ার্ড}}',
	'group-sysadmin' => 'সিস্টেম প্রশাসক',
	'group-sysadmin-member' => '{{GENDER:$1|সিস্টেম প্রশাসক}}',
	'group-Indic_Bots' => 'ইন্ডিক বট',
	'group-Indic_Bots-member' => '{{GENDER:$1|ইন্ডিক বট}}',
	'group-New_wikis_importer' => 'নতুন উইকি ইম্পোর্টারগণ',
	'group-New_wikis_importer-member' => '{{GENDER:$1|নতুন উইকি ইম্পোর্টারগণ}}',
	'group-global-ipblock-exempt' => 'গ্লোবাল আইপি নিষেধাজ্ঞা রহিতকরণ',
	'group-global-ipblock-exempt-member' => '{{GENDER:$1|গ্লোবাল আইপি নিষেধাজ্ঞা রহিতকরণ}}',
	'group-translationadmin' => 'অনুবাদ প্রশাসক',
	'group-translationadmin-member' => '{{GENDER:$1|অনুবাদ প্রশাসক}}',
	'grouppage-translationadmin' => '{{ns:project}}:অনুবাদ প্রশাসক',
	'group-centralnoticeadmin' => 'প্রশাসকদের কেন্দ্রীয় নোটিশ',
	'group-centralnoticeadmin-member' => '{{GENDER:$1|কেন্দ্রীয় বিজ্ঞপ্তি প্রশাসক}}',
	'grouppage-centralnoticeadmin' => '{{ns:project}}:কেন্দ্রীয় বিজ্ঞপ্তি প্রশাসক',
	'group-coder' => 'কোডার',
	'group-coder-member' => '{{GENDER:$1|কোডার}}',
	'group-inactive' => 'নিস্ক্রিয় ব্যবহারকারী',
	'group-inactive-member' => '{{GENDER:$1|নিস্ক্রিয় ব্যবহারকারী}}',
	'grouppage-inactive' => '{{ns:project}}:নিস্ক্রিয় ব্যবহারকারী',
	'wikimedia-copyright' => 'লেখাগুলো <a href="//creativecommons.org/licenses/by-sa/3.0/">ক্রিয়েটিভ কমন্স অ্যাট্রিবিউশন/শেয়ার-আলাইক লাইসেন্সের</a> আওতাভুক্ত;
এর সাথে বাড়তি পদ প্রযোজ্য হতে পারে।
 <a href="//wikimediafoundation.org/wiki/Terms_of_Use">ব্যবহারের শর্তাবলীতে</a> বিস্তারিত দেখুন।',
	'wikidata-copyright' => 'প্রধান এবং বৈশিষ্ট্য নামস্থান থেকে সকল কাঠামোবদ্ধ উপাত্ত <a href="//creativecommons.org/publicdomain/zero/1.0/" title="ক্রিয়েটিভ কমন্স সিসি০ লাইসেন্সের সংজ্ঞা">ক্রিয়েটিভ কমন্স সিসি০ লাইসেন্সের</a> আওতাভুক্ত; অন্যান্য নামস্থান বার্তা <a href="//creativecommons.org/licenses/by-sa/3.0/" title="ক্রিয়েটিভ কমন্স অ্যাট্রিবিউশন/শেয়ার-আলাইক লাইসেন্সের সংজ্ঞা">ক্রিয়েটিভ কমন্স অ্যাট্রিবিউশন/শেয়ার-আলাইক লাইসেন্সের</a> আওতাভুক্ত; এর সাথে বাড়তি পদ যুক্ত করা সম্ভব। <a href="//wikimediafoundation.org/wiki/Terms_of_Use" title="উইকিমিডিয়া ফাউন্ডেশন ব্যবহারের শর্তাবলী">ব্যবহারের শর্তাবলীতে</a> বিস্তারিত দেখুন।',
	'wikidata-shortcopyrightwarning' => '"{{int:wikibase-save}}"-এ ক্লিক করার মাধ্যমে, আপনি [//wikimediafoundation.org/wiki/Terms_of_Use ব্যবহারের শর্তাবলীর] সাথে একমত হচ্ছেন, এবং [//creativecommons.org/publicdomain/zero/1.0/deed.bn সিসি০ লাইসেন্সের] অধীনে আপনার অবদান প্রকাশে সম্মত হচ্ছেন।',
	'wikimedia-copyrightwarning' => '"{{int:savearticle}}" বাটনে ক্লিক করার মাধ্যমে, [//wikimediafoundation.org/wiki/Terms_of_Use ব্যবহারের নীতিমালার] সাথে সম্মত হচ্ছেন এবং একই সাথে আপনার অবদান [//creativecommons.org/licenses/by-sa/3.0/ CC-BY-SA 3.0] এবং [//www.gnu.org/copyleft/fdl.html GFDL] লাইসেন্সের অধিনে প্রকাশের অনুমতি দিচ্ছেন।
আপনি সম্মতি দিচ্ছেন যে ক্রিয়েটিভ কমন্স লাইসেন্সের অধিনে আপনার কাজের স্বীকৃতি দিতে হবে, এবং সেটি একটি হাইপারলিংক অথবা উইআরএল হলেই যথেষ্ট।',
	'wikibase-sitelinks-wikivoyage' => 'এই আইটেমটির সাথে সংযুক্ত উইকিভ্রমণের পাতা',
	'cant-delete-main-page' => 'আপনি প্রধান পাতা অপসারণ বা স্থানান্তর করতে পারবেন না।',
	'upload-more-photos-of-this-monument' => 'এই স্মৃতিস্তম্ভের আরও চিত্র আপলোড করুন',
	'extdist-branch-master' => 'মাস্টার (সর্বশেষ সংস্করণ উন্নয়ন)',
	'extdist-branch-REL1_21' => '১.২১ (সর্বশেষ স্থিতিশীল মিডিয়াউইকি)',
	'createacct-helpusername-url' => '{{ns:Project}}:ব্যবহারকারী_নামের_নীতি',
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(বাছাই করতে আমাকে সাহায্য করুন)]]',
	'createacct-captcha-help-url' => '{{ns:Project}}:অ্যাকাউন্টের জন্য অনুরোধ',
	'createacct-imgcaptcha-help' => 'ছবিটি দেখতে পাচ্ছেন না? [[{{MediaWiki:createacct-captcha-help-url}}|অ্যাকাউন্টের জন্য অনুরোধ]]',
);

/** Tibetan (བོད་ཡིག)
 * @author Freeyak
 */
$messages['bo'] = array(
	'sitesupport' => 'ཞལ་འདེབས།',
	'tooltip-n-sitesupport' => 'ང་ཚོར་རོགས་སྐྱོར།',
	'group-founder-member' => 'གསར་གཏོད་བྱེད་མཁན།', # Fuzzy
);

/** Bishnupria Manipuri (বিষ্ণুপ্রিয়া মণিপুরী)
 */
$messages['bpy'] = array(
	'sitesupport' => 'দান দেনা',
);

/** Bakhtiari (بختياري)
 * @author Behdarvandyani
 */
$messages['bqi'] = array(
	'wikimediamessages-desc' => 'پیام‌های مخصوص ویکی‌مدیا',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=bqi',
	'sitesupport' => 'کمک مالی',
	'tooltip-n-sitesupport' => 'حمایت زه ایما',
);

/** Breton (brezhoneg)
 * @author Fohanno
 * @author Fulup
 * @author Gwendal
 * @author Nemo bis
 * @author Y-M D
 * @author לערי ריינהארט
 */
$messages['br'] = array(
	'wikimediamessages-desc' => 'Kemennoù dibar Wikimedia',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=br',
	'sitesupport' => 'Roadoù',
	'tooltip-n-sitesupport' => "Harpit ac'hanomp",
	'specialpages-group-contribution' => 'Degasadenn/Dastum moneiz',
	'nstab-creator' => 'Krouer',
	'nstab-institution' => 'Ensavadur',
	'nstab-sequence' => 'Heuliad',
	'nstab-timedtext' => 'TimedText',
	'group-Ex_Administrator' => 'Bet merourien',
	'group-Ex_Administrator-member' => '{{GENDER:$1|bet merour|bet merourez}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Bet merourien',
	'group-Ex_Bureaucrat' => 'Bet burevidi',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|bet bureviad|bet bureviadez}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Bet burevidi',
	'group-Image-reviewer' => 'Gwirierien skeudenn',
	'group-Image-reviewer-member' => '{{GENDER:$1|gwirier|gwirierez}} skeudennoù',
	'grouppage-Image-reviewer' => '{{ns:project}}:Adlennerioù skeudennoù',
	'group-OTRS-member' => 'Izili OTRS',
	'group-OTRS-member-member' => '{{GENDER:$1|ezel OTRS}}',
	'grouppage-OTRS-member' => '{{ns:project}}: Izili OTRS',
	'group-abusefilter' => 'Aozerioù siloù dinoazañ',
	'group-abusefilter-member' => '{{GENDER:$1|aozer|aozerez}} siloù a-enep ar gwallimplij',
	'grouppage-abusefilter' => '{{ns:project}}:Aozerien siloù a-enep ar gwallimplij',
	'group-accountcreator' => 'Krouerien kontoù',
	'group-accountcreator-member' => '{{GENDER:$1|krouer|krouerez}} kontoù',
	'grouppage-accountcreator' => '{{ns:project}}: Krouerien kontoù',
	'group-arbcom' => "Izili ar c'huzul tredeogiezh",
	'group-arbcom-member' => "{{GENDER:$1|ezel eus ar c'huzul hanteriñ}}",
	'grouppage-arbcom' => "{{ns:project}}:Izili ar c'huzul tredeogiezh",
	'group-autopatrolled' => 'Patrouilherien emgefre',
	'group-autopatrolled-member' => '{{GENDER:$1|patrouilher|patrouilherez}} emgefre',
	'grouppage-autopatrolled' => '{{ns:project}}:Patrouilherien emgefre',
	'group-autoreviewer' => 'Adlennerioù emgefre',
	'group-autoreviewer-member' => '{{GENDER:$1|adlenner|adlennerez}} emgefre',
	'grouppage-autoreviewer' => '{{ns:project}}:Adlennerioù emgefre',
	'group-bigexport' => 'Ezporzhierien vras',
	'group-bigexport-member' => '{{GENDER:$1|ezporzhier bras|ezporzhierez vras}}',
	'grouppage-bigexport' => '{{ns:project}}: Ezporzhierien vras',
	'group-botadmin' => 'Robotoù dezho gwirioù merañ',
	'group-botadmin-member' => '{{GENDER:$1|robot gant gwirioù merañ}}',
	'grouppage-botadmin' => '{{ns:project}}: Robotoù dezho gwirioù merañ',
	'group-confirmed' => 'Implijerien kadarnaet',
	'group-confirmed-member' => '{{GENDER:$1|implijer|implijerez}} bet kadarnaet ent emgefre',
	'grouppage-confirmed' => '{{ns:project}}:Implijerien bet kadarnaet',
	'group-editprotected' => 'Embannerien pennadoù gwarezet',
	'group-editprotected-member' => '{{GENDER:$1|aozer|aozerez}} pajennoù gwarezet',
	'grouppage-editprotected' => '{{ns:project}}: Embannerien pennadoù gwarezet',
	'group-eliminator' => 'Raskerien',
	'group-eliminator-member' => '{{GENDER:$1|rasker|raskerez}}',
	'grouppage-eliminator' => '{{ns:project}}:Rasker',
	'group-filemover' => 'Adenver restroù',
	'group-filemover-member' => "{{GENDER:$1|dilec'hier|dilec'hierez}} restroù",
	'grouppage-filemover' => '{{ns:project}}: Adenverien restr',
	'group-flood' => 'Implijerien botoù',
	'group-flood-member' => '{{GENDER:$1|implijer|implijerez}} robotoù',
	'grouppage-flood' => '{{ns:project}}: implijer botoù',
	'group-founder' => 'Diazezourien',
	'group-founder-member' => '{{GENDER:$1|diazezer|diazezerez}}',
	'grouppage-founder' => '{{ns:project}}:Diazezerien',
	'group-import' => 'Enporzhierien',
	'group-import-member' => '{{GENDER:$1|enporzhier|enporzhierez}}',
	'grouppage-import' => '{{ns:project}}:Enporzhierien',
	'group-interface_editor' => 'Aozerien an etrefas',
	'group-interface_editor-member' => '{{GENDER:$1|aozer|aozerez}} an etrefas',
	'grouppage-interface_editor' => '{{ns:project}}:Aozerien an etrefas',
	'group-ipblock-exempt' => "Nemedennoù bloc'hadoù IP",
	'group-ipblock-exempt-member' => '{{GENDER:$1|na sell ket ar stankañ IPoù outañ}}',
	'grouppage-ipblock-exempt' => "{{ns:project}}:Nemedenn bloc'had IP",
	'group-patroller' => 'Patrouilherien',
	'group-patroller-member' => '{{GENDER:$1|patrouilher|patrouilherez}}',
	'grouppage-patroller' => '{{ns:project}}:Patrouilherien',
	'group-researcher' => 'Klaskerien',
	'group-researcher-member' => '{{GENDER:$1|klasker|klaskerez}}',
	'grouppage-researcher' => '{{ns:project}}:Klaskerien',
	'group-rollbacker' => 'Assaverien',
	'group-rollbacker-member' => '{{GENDER:$1|assaver|assaverez}}',
	'grouppage-rollbacker' => '{{ns:project}}:Assaverien',
	'group-transwiki' => 'Enporzhierien treuzwiki',
	'group-transwiki-member' => '{{GENDER:$1|enporzhier|enporzhierez}} treuzwiki',
	'grouppage-transwiki' => '{{ns:project}}:Enporzhierien treuzwiki',
	'group-trusted' => 'Implijerien a fiziañs',
	'group-trusted-member' => '{{GENDER:$1|implijer|implijerez}} a fiziañs',
	'grouppage-trusted' => '{{ns:project}}:Implijerien a fiziañs',
	'group-Global_bot' => 'Botoù hollek',
	'group-Global_bot-member' => '{{GENDER:$1|robot hollek}}',
	'group-Global_rollback' => 'Distaolerioù a-vras',
	'group-Global_rollback-member' => '{{GENDER:$1|assaver|assaverez}} hollek',
	'group-Global_sysops' => 'Merourien hollek',
	'group-Global_sysops-member' => '{{GENDER:$1|merour|merourez}} hollek',
	'group-Ombudsmen' => 'Hanterourien',
	'group-Ombudsmen-member' => '{{GENDER:$1|hanterour|hanterourez}}',
	'group-Staff' => 'skipailh',
	'group-Staff-member' => "Ezel eus ar c'hoskor",
	'group-editinterface' => 'Aozañ etrefas',
	'group-editinterface-member' => '{{GENDER:$1|aozer|aozerez}} an etrefas',
	'group-steward' => 'Stewarded',
	'group-steward-member' => '{{GENDER:$1|steward|stewardez}}',
	'group-sysadmin' => 'Merourien ar reizhiad',
	'group-sysadmin-member' => '{{GENDER:$1|merour|merourez}} ar reizhiad',
	'group-translationadmin' => 'Merourien troidigezhioù',
	'group-translationadmin-member' => 'mer{{GENDER:$1|our|ourez}} troidigezhioù',
	'grouppage-translationadmin' => '{{ns:project}}:Merourien troidigezhioù',
	'group-coder' => 'Koderien',
	'group-coder-member' => '{{GENDER:$1|koder|koderez}}',
	'group-inactive' => 'Implijerien dioberiant',
	'group-inactive-member' => '{{GENDER:$1|implijer dizoberiant|implijerez dizoberiant}}',
	'grouppage-inactive' => '{{ns:project}}:Implijerien dioberiant',
	'wikimedia-copyright' => 'Gallout a reer implijout an testennoù zo dindan <a href="//creativecommons.org/licenses/by-sa/3.0/">an Aotre-Implijout Creative Commons Dereiñ/Kenrannañ</a>;
divizoù ouzhpenn a c\'hall bezañ ivez.
Gwelet an <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Doareoù Implijout</a> evit gouzout hiroc\'h.',
	'wikimedia-copyrightwarning' => "Dre glikañ war ar bouton \"{{int:savearticle}}\" ec'h asantit [//wikimediafoundation.org/wiki/Terms_of_Use d'an Termenoù Implij] hag emaoc'h a-du da enskrivañ da viken ho tegasadennoù dindan
[//creativecommons.org/licenses/by-sa/3.0/ an aotre-implijout CC-BY-SA 3.0] hag ar [//www.gnu.org/copyleft/fdl.html GFDL]
A-du emaoc'h ez eo trawalc'h deoc'h bezañ meneget dre ur gourliamm pe un URL, dindan an aotre-implijout Creative Commons Dereiñ.",
	'cant-delete-main-page' => "N'hallit ket diverkañ pe dilec'hiañ ar bajenn bennañ.",
);

/** Bosnian (bosanski)
 * @author CERminator
 * @author Demicx
 * @author DzWiki
 * @author Kal-El
 * @author Palapa
 * @author Smooth O
 * @author לערי ריינהארט
 */
$messages['bs'] = array(
	'wikimediamessages-desc' => 'Posebne poruke Wikimedije',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=bs',
	'sitesupport' => 'Donacije',
	'tooltip-n-sitesupport' => 'Podržite nas',
	'specialpages-group-contribution' => 'Doprinosi/donacije',
	'nstab-creator' => 'Izrađivač',
	'nstab-institution' => 'Ustanova',
	'nstab-sequence' => 'Niz',
	'nstab-timedtext' => 'VremenskiTekst',
	'group-Image-reviewer' => 'Preglednici slika',
	'group-Image-reviewer-member' => 'Preglednik slika', # Fuzzy
	'grouppage-Image-reviewer' => '{{ns:project}}:Preglednici slika',
	'group-OTRS-member' => 'Članovi OTRS',
	'group-OTRS-member-member' => 'Član OTRS', # Fuzzy
	'grouppage-OTRS-member' => '{{ns:project}}:Članovi OTRS',
	'group-abusefilter' => 'Uređivači filtera zloupotrebe',
	'group-abusefilter-member' => 'uređivač filtera zloupotrebe', # Fuzzy
	'grouppage-abusefilter' => '{{ns:project}}:Uređivači filtera zloupotrebe',
	'group-accountcreator' => 'Kreatori računa',
	'group-accountcreator-member' => 'kreator računa', # Fuzzy
	'grouppage-accountcreator' => '{{ns:project}}:Kreatori računa',
	'group-arbcom' => 'Članovi komiteta za arbitriranje',
	'group-arbcom-member' => 'član komiteta za arbitriranje', # Fuzzy
	'grouppage-arbcom' => '{{ns:project}}:Članovi Arbitracionog komiteta',
	'group-autopatrolled' => 'Autopatroleri',
	'group-autopatrolled-member' => 'automatski patroliran', # Fuzzy
	'grouppage-autopatrolled' => '{{ns:project}}:Automatski patroleri',
	'group-autoreviewer' => 'Autonadzornici',
	'group-autoreviewer-member' => 'autonadzornik', # Fuzzy
	'grouppage-autoreviewer' => '{{ns:project}}:Autonadzornici',
	'group-bigexport' => 'Veliki izvoznici',
	'group-bigexport-member' => 'veliki izvoznik', # Fuzzy
	'grouppage-bigexport' => '{{ns:project}}:Veliki izvoznici',
	'group-confirmed' => 'Potvrđeni korisnici',
	'group-confirmed-member' => 'potvrđeni korisnik', # Fuzzy
	'grouppage-confirmed' => '{{ns:project}}:Potvrđeni korisnici',
	'group-editprotected' => 'Urednici zaštićenih stranica',
	'group-editprotected-member' => 'urednik zaštićene stranice', # Fuzzy
	'grouppage-editprotected' => '{{ns:project}}:Urednici zaštićenih stranica',
	'group-eliminator' => 'Odstranjivači',
	'group-eliminator-member' => 'odstranjivač', # Fuzzy
	'grouppage-eliminator' => '{{ns:project}}:Odstranjivač',
	'group-filemover' => 'Premještaju datoteke',
	'group-filemover-member' => 'premješta datoteke', # Fuzzy
	'grouppage-filemover' => '{{ns:project}}:Premještanje datoteka',
	'group-flood' => 'Bot korisnici',
	'group-flood-member' => 'bot korisnici', # Fuzzy
	'grouppage-flood' => '{{ns:project}}:Bot korisnici',
	'group-founder' => 'Osnivači',
	'group-founder-member' => 'osnivač', # Fuzzy
	'grouppage-founder' => '{{ns:project}}:Osnivači',
	'group-import' => 'Uvoznici',
	'group-import-member' => 'uvoznik', # Fuzzy
	'grouppage-import' => '{{ns:project}}:Uvoznici',
	'group-interface_editor' => 'Urednici sučelja',
	'group-interface_editor-member' => 'urednik sučelja', # Fuzzy
	'grouppage-interface_editor' => '{{ns:project}}:Urednici sučelja',
	'group-ipblock-exempt' => 'Izuzeci IP blokada',
	'group-ipblock-exempt-member' => 'Izuzeci IP blokada', # Fuzzy
	'grouppage-ipblock-exempt' => '{{ns:project}}:Izuzeci IP blokada',
	'group-patroller' => 'Patroleri',
	'group-patroller-member' => 'patroler', # Fuzzy
	'group-researcher' => 'Istraživači',
	'group-researcher-member' => 'istraživač', # Fuzzy
	'grouppage-researcher' => '{{ns:project}}:Istraživači',
	'group-rollbacker' => 'Povratioci',
	'group-rollbacker-member' => 'povratioc', # Fuzzy
	'grouppage-rollbacker' => '{{ns:project}}:Povratioci',
	'group-transwiki' => 'Transwiki uvoznici',
	'group-transwiki-member' => 'transwiki uvoznik', # Fuzzy
	'grouppage-transwiki' => '{{ns:project}}:Transwiki uvoznici',
	'group-trusted' => 'Korisnici od povjerenja',
	'group-trusted-member' => 'korisnik od povjerenja', # Fuzzy
	'grouppage-trusted' => '{{ns:project}}:Korisnici od povjerenja',
	'group-Global_bot' => 'Globalni botovi',
	'group-Global_bot-member' => 'globalni bot', # Fuzzy
	'group-Global_rollback' => 'Globalni povratioci',
	'group-Global_rollback-member' => 'globalni povratioc', # Fuzzy
	'group-Global_sysops' => 'Globalni operateri sistema',
	'group-Global_sysops-member' => 'Globalni operater sistema', # Fuzzy
	'group-Ombudsmen' => 'Ombudsmeni',
	'group-Ombudsmen-member' => 'ombudsmen', # Fuzzy
	'group-Staff' => 'Osoblje',
	'group-Staff-member' => 'članovi osoblja',
	'group-editinterface' => 'Urednici sučelja',
	'group-editinterface-member' => 'urednik sučelja', # Fuzzy
	'group-steward' => 'Stjuardi',
	'group-steward-member' => 'stujard', # Fuzzy
	'group-sysadmin' => 'Sistemski administratori',
	'group-sysadmin-member' => 'sistemski administrator', # Fuzzy
	'group-coder' => 'Koderi',
	'group-coder-member' => 'koder', # Fuzzy
	'group-inactive' => 'Neaktivni korisnici',
	'group-inactive-member' => 'neaktivni korisnik', # Fuzzy
	'grouppage-inactive' => '{{ns:project}}:Neaktivni korisnici',
	'wikimedia-copyright' => 'Tekst je dostupan pod <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike licencom</a>;
dodatni uslovi se mogu primijeniti.
Za detalje pogledajte <a href="//wikimediafoundation.org/wiki/Terms_of_Use">uslove korištenja</a>.',
	'wikimedia-copyrightwarning' => 'Ako spremite promjene, nepovratno se slažete da Vaš doprinos objavljujete pod [//creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike licencom 3.0] i [//www.gnu.org/copyleft/fdl.html GFDL].
Slažete se da Vaš doprinos može biti izmijenjen od drugih korisnika, najmanje preko linka ili URLa.
Za dalje detalje pogledajte [//wikimediafoundation.org/wiki/Terms_of_Use Pravila korištenja].', # Fuzzy
	'createacct-imgcaptcha-help' => 'Ne vidite sliku? [[{{MediaWiki:createacct-captcha-help-url}}|Zatražite korisnički račun]]',
);

/** буряад (буряад)
 * @author Amire80
 */
$messages['bxr'] = array(
	'sitesupport' => 'Хандиблаха',
);

/** Catalan (català)
 * @author Aleator
 * @author Arnaugir
 * @author El libre
 * @author Gemmaa
 * @author Juanpabl
 * @author Martorell
 * @author McDutchie
 * @author Nemo bis
 * @author Paucabot
 * @author SMP
 * @author Solde
 * @author Toniher
 * @author Vriullop
 */
$messages['ca'] = array(
	'wikimediamessages-desc' => 'Missatges específics de Wikimedia',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=ca',
	'sitesupport' => 'Donatius',
	'tooltip-n-sitesupport' => 'Ajudau-nos',
	'specialpages-group-contribution' => 'Contribució/Recaptació de fons',
	'nstab-creator' => 'Creador',
	'nstab-institution' => 'Institució',
	'nstab-sequence' => 'Seqüència',
	'nstab-timedtext' => 'TimedText',
	'group-Ex_Administrator' => 'Exadministradors',
	'group-Ex_Administrator-member' => '{{GENDER:$1|exadministrador}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}: exadministradors',
	'group-Ex_Bureaucrat' => 'Exburòcrates',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|exburòcrata}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}: exburòcrates',
	'group-Image-reviewer' => "Revisors d'imatges",
	'group-Image-reviewer-member' => "{{GENDER:$1|revisor d'imatges|revisora d'imatges}}",
	'grouppage-Image-reviewer' => "{{ns:project}}:Revisors d'imatges",
	'group-OTRS-member' => "Membres d'OTRS",
	'group-OTRS-member-member' => "membre d'OTRS",
	'grouppage-OTRS-member' => "{{ns:project}}:Membres d'OTRS",
	'group-abusefilter' => "Editors del filtre d'abusos",
	'group-abusefilter-member' => "{{GENDER:$1|editor|editora}} del filtre d'abusos",
	'grouppage-abusefilter' => "{{ns:project}}:Editors del filtre d'abusos",
	'group-accountcreator' => 'Creadors de comptes',
	'group-accountcreator-member' => '{{GENDER:$1|creador|creadora}} de comptes',
	'grouppage-accountcreator' => '{{ns:project}}:Creadors de comptes',
	'group-arbcom' => "Membres del comitè d'arbitratge",
	'group-arbcom-member' => "membre del comitè d'arbitratge",
	'grouppage-arbcom' => "{{ns:project}}:Membres del comitè d'arbitratge",
	'group-autopatrolled' => 'Autopatrulladors',
	'group-autopatrolled-member' => '{{GENDER:$1|autopatrullat|autopatrullada}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Usuaris autopatrullats',
	'group-autoreviewer' => 'Autorevisadors',
	'group-autoreviewer-member' => '{{GENDER:$1|autorevisador|autorevisadora}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Autorevisadors',
	'group-bigexport' => 'Grans exportadors',
	'group-bigexport-member' => 'gran {{GENDER:$1|exportador|exportadora}}',
	'grouppage-bigexport' => '{{ns:project}}:Grans exportadors',
	'group-botadmin' => "Bots amb drets d'administrador",
	'group-botadmin-member' => "{{GENDER:$1|bot amb drets d'administrador}}",
	'grouppage-botadmin' => "{{ns:project}}: Bots amb drets d'administrador",
	'group-confirmed' => 'Usuaris confirmats',
	'group-confirmed-member' => '{{GENDER:$1|usuari confirmat|usuària confirmada}}',
	'grouppage-confirmed' => '{{ns:project}}:Usuaris confirmats',
	'group-editprotected' => 'Editors de pàgines protegides',
	'group-editprotected-member' => '{{GENDER:$1|editor|editora}} de pàgines protegides',
	'grouppage-editprotected' => '{{ns:project}}:Editors de pàgines protegides',
	'group-eliminator' => 'Eliminadors',
	'group-eliminator-member' => '{{GENDER:$1|eliminador|eliminadora}}',
	'grouppage-eliminator' => '{{ns:project}}:Eliminadors',
	'group-filemover' => 'Desplaçadors de fitxers',
	'group-filemover-member' => '{{GENDER:$1|desplaçador|desplaçadora}} de fitxers',
	'grouppage-filemover' => '{{ns:project}}:Desplaçadors de fitxers',
	'group-flood' => 'Usuaris-bots',
	'group-flood-member' => '{{GENDER:$1|usuari-bot|usuària-bot}}',
	'grouppage-flood' => '{{ns:project}}:Bots',
	'group-founder' => 'Fundadors',
	'group-founder-member' => '{{GENDER:$1|fundador|fundadora}}',
	'grouppage-founder' => '{{ns:project}}:Fundadors',
	'group-import' => 'Importadors',
	'group-import-member' => '{{GENDER:$1|importador|importadora}}',
	'grouppage-import' => '{{ns:project}}:Importadors',
	'group-interface_editor' => 'Editors de la interfície',
	'group-interface_editor-member' => '{{GENDER:$1|editor de la interfície|editora de la interfície}}',
	'grouppage-interface_editor' => '{{ns:project}}:Editors de la interfície',
	'group-ipblock-exempt' => "Exempts del bloqueig d'IP",
	'group-ipblock-exempt-member' => "{{GENDER:$1|exempt|exempta}} del bloqueig d'IP",
	'grouppage-ipblock-exempt' => "{{ns:project}}:Exempts del bloqueig d'IP",
	'group-patroller' => 'Patrullers',
	'group-patroller-member' => '{{GENDER:$1|patruller|patrullera}}',
	'grouppage-patroller' => '{{ns:project}}:Patrulladors',
	'group-researcher' => 'Recercadors',
	'group-researcher-member' => '{{GENDER:$1|recercador|recercadora}}',
	'grouppage-researcher' => '{{ns:project}}:Recercadors',
	'group-rollbacker' => 'Reversors',
	'group-rollbacker-member' => '{{GENDER:$1|reversor|reversora}}',
	'grouppage-rollbacker' => '{{ns:project}}:Reversors',
	'group-transwiki' => 'Importadors transwiki',
	'group-transwiki-member' => '{{GENDER:$1|importador|importadora}} transwiki',
	'grouppage-transwiki' => '{{ns:project}}:Importadors transwiki',
	'group-trusted' => 'Usuaris de confiança',
	'group-trusted-member' => '{{GENDER:$1|usuari|usuària}} de confiança',
	'grouppage-trusted' => '{{ns:project}}:Usuaris de confiança',
	'group-Global_bot' => 'Bots globals',
	'group-Global_bot-member' => '{{GENDER:$1|bot global}}',
	'group-Global_rollback' => 'Reversors globals',
	'group-Global_rollback-member' => '{{GENDER:$1|reversor|reversora}} global',
	'group-Global_sysops' => 'Administradors globals',
	'group-Global_sysops-member' => '{{GENDER:$1|administrador|administradora}} global',
	'group-Ombudsmen' => 'Síndics de greuges',
	'group-Ombudsmen-member' => '{{GENDER:$1|síndic de greuges|síndica de greuges}}',
	'group-Staff' => 'Personal',
	'group-Staff-member' => 'Personal del wiki',
	'group-editinterface' => 'Editors de la interfície',
	'group-editinterface-member' => '{{GENDER:$1|editor de la interfície|editora de la interfície}}',
	'group-steward' => 'Stewards',
	'group-steward-member' => '{{GENDER:$1|steward}}',
	'group-sysadmin' => 'Administradors del sistema',
	'group-sysadmin-member' => '{{GENDER:$1|administrador|administradora}} del sistema',
	'group-translationadmin' => 'Administradors de traducció',
	'group-translationadmin-member' => '{{GENDER:$1|administrador de traducció|administradora de traducció}}',
	'grouppage-translationadmin' => '{{ns:project}}: administradors de traducció',
	'group-coder' => 'Programadors',
	'group-coder-member' => '{{GENDER:$1|programador|programadora}}',
	'group-inactive' => 'Usuaris inactius',
	'group-inactive-member' => '{{GENDER:$1|usuari inactiu|usuària inactiva}}',
	'grouppage-inactive' => '{{ns:project}}:Usuaris inactius',
	'wikimedia-copyright' => 'El text està disponible sota la <a href="//creativecommons.org/licenses/by-sa/3.0/deed.ca">Llicència de Creative Commons Reconeixement/Compartir-Igual</a>; es poden aplicar termes addicionals.
Vegeu les <a href="//wikimediafoundation.org/wiki/Condicions_d%27%C3%BAs">condicions d\'ús</a> per a més informació.',
	'wikidata-shortcopyrightwarning' => 'En clicar "desa", esteu acceptant les [https://wikimediafoundation.org/wiki/Terms_of_Use/ca condicions d\'ús] i accepteu alliberar irrevocablement la vostra contribució sota la [https://creativecommons.org/publicdomain/zero/1.0/deed.ca llicència CC0].',
	'wikimedia-copyrightwarning' => 'Fent clic al botó de "{{int:savearticle}}" esteu acceptant les [//wikimediafoundation.org/wiki/Terms_of_Use condicions d\'ús] i esteu acceptant alliberar irrevocablement la vostra contribució sota la [//creativecommons.org/licenses/by-sa/3.0/ llicència CC-BY-SA 3.0] i la [//www.gnu.org/copyleft/fdl.html GFDL].
Accepteu que un hiperenllaç o URL és suficient atribució sota la llicència Creative Commons.',
	'cant-delete-main-page' => 'No podeu esborrar ni traslladar la portada.',
	'upload-more-photos-of-this-monument' => "Carrega més fotos d'aquest monument",
	'createacct-helpusername-url' => "{{ns:Project}}:Nom d'usuari",
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(ajuda per escollir-ne un)]]',
	'createacct-captcha-help-url' => '{{ns:Project}}:Sol·licitar un compte',
	'createacct-imgcaptcha-help' => 'No podeu veure la imatge? [[{{MediaWiki:createacct-captcha-help-url}}|Sol·liciteu un compte]]',
);

/** Min Dong Chinese (Mìng-dĕ̤ng-ngṳ̄)
 * @author Yejianfei
 */
$messages['cdo'] = array(
	'sitesupport' => '捐獻',
);

/** Chechen (нохчийн)
 * @author Sasan700
 * @author Умар
 */
$messages['ce'] = array(
	'sitesupport' => 'Википедин гӀо дар',
	'tooltip-n-sitesupport' => 'ГIо дайша тхуна',
	'group-accountcreator' => 'Декъашхойн дӀаяздарш кхуллурш',
	'grouppage-accountcreator' => '{{ns:project}}:Декъашхойн дӀаяздарш кхуллурш',
	'group-confirmed' => 'ТӀелаьцболу декъашхой',
	'grouppage-confirmed' => '{{ns:project}}:ТӀелаьцболу декъашхой',
	'group-flood' => 'Декъашхой-шаболххой',
	'group-flood-member' => 'декъашхой-шаболххой', # Fuzzy
	'grouppage-flood' => '{{ns:project}}:Декъашхой-шаболххой',
	'group-import' => 'Импорт ерш',
	'grouppage-import' => '{{ns:project}}:Импорт ерш',
	'group-ipblock-exempt' => 'IP-сацор юкъарадоккху',
	'group-ipblock-exempt-member' => '{{GENDER:$1|юкъараваккхар/яккхар IP-блоктохаршана}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Юкъараваккхар/яккхар IP-блоктохаршана',
	'group-transwiki' => 'Викиюкъахь-импорт ерш',
	'grouppage-transwiki' => '{{ns:project}}:Викиюкъахь-импорт ерш',
	'group-Global_bot' => 'Масхьара шаболххой',
	'group-Global_bot-member' => 'масхьара шаболххо', # Fuzzy
	'group-Global_sysops' => 'Глобальни куьйгалхой',
	'group-steward' => 'Стюардхой',
	'group-sysadmin' => 'Системин куьйгалхой',
	'shared-repo-name-shared' => 'ВикидӀайуьллуче',
	'wikimedia-copyright' => 'Йоза тlекхочучехь ду оцу хьола бакъойаларца <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike</a>, цхьайолчу хенахь хила мега хьоле хьаьжжина локхаллий таронца. Мадарра хьажа. <a href="//wikimediafoundation.org/wiki/Terms_of_Use/ce">Лелоран хьал</a>.',
	'wikimedia-copyrightwarning' => 'Хийцамаш lалашбеш, хьан пурбанца уьш чутохар йуха боьхур боцуш оцу бакъонашца [//creativecommons.org/licenses/by-sa/3.0/deed.ru Creative Commons Attribution/Share-Alike 3.0] а [//www.gnu.org/copyleft/fdl.html GFDL]. Хьан пурбанца, ахьа бина хийцамаш тlаьхь болу агlо лелош, хьуна тlе хьажориг йирайу, оцу лаккхар хьажоригех йа URL, йогlучу агlон тlе.
Мадарра хьажа. [//wikimediafoundation.org/wiki/Terms_of_Use/ru Лелоран таронаш].', # Fuzzy
);

/** Cebuano (Cebuano)
 * @author Abastillas
 * @author Jordz
 */
$messages['ceb'] = array(
	'sitesupport' => 'Mga donasyon',
	'tooltip-n-sitesupport' => 'Tabangi kami',
	'wikimedia-copyright' => 'Ang teksto puyde magamit ubos sa <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike License</a>; puyde madugangan ang mga termino.
Tan-awa ang <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Mga Termino sa Paggamit</a> para sa mga detalye.',
	'wikimedia-copyrightwarning' => 'Sa pagtipig, miuyon ka sa di-mabawi nga pagpagawas sa imong kontribusyon ubos sa [//creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] ug sa [//www.gnu.org/copyleft/fdl.html GFDL].
Miuyon ka nga tagaan og kredito sa mga re-user, sa minimum, pinaagi sa hyperlink o URL ngadto sa panid nga imo gitampohan.
Tan-awa ang [//wikimediafoundation.org/wiki/Terms_of_Use Mga Termino sa Paggamit] para sa mga detalye.', # Fuzzy
);

/** Chamorro (Chamoru)
 * @author Gadao01
 */
$messages['ch'] = array(
	'sitesupport' => "Nina'i siha",
	'tooltip-n-sitesupport' => 'Supotta ham',
);

/** Cherokee (ᏣᎳᎩ)
 */
$messages['chr'] = array(
	'sitesupport' => 'ᎠᎵᏍᎪᎸᏙᏗ',
);

/** Sorani Kurdish (کوردی)
 * @author Asoxor
 * @author Calak
 * @author Ferhad y
 * @author Marmzok
 * @author رزگار
 */
$messages['ckb'] = array(
	'wikimediamessages-desc' => 'پەیامە تایبەتەکانی ویکیمیدیا',
	'sitesupport' => 'پاڵپشتی و بەخشین',
	'tooltip-n-sitesupport' => 'پاڵپشتیمان بکە',
	'nstab-institution' => 'دامەزراوە',
	'group-accountcreator' => 'دروستکەرانی ھەژمار',
	'group-accountcreator-member' => '{{GENDER:$1|دروستکەری ھەژمار}}',
	'group-autopatrolled' => 'پاسدەرانی خۆگەڕ',
	'group-autopatrolled-member' => '{{GENDER:$1|پاسدەری خۆگەڕ}}',
	'grouppage-autopatrolled' => '{{ns:project}}:پاسدانی خۆگەڕ',
	'group-confirmed' => 'بەکارھێنەرانی پەسندکراو',
	'group-confirmed-member' => '{{GENDER:$1|بەکارھێنەرانی پەسندکراو}}',
	'grouppage-confirmed' => '{{ns:project}}:بەکارھێنەرانی پەسندکراو',
	'group-flood' => 'زڕبۆتەکان',
	'group-flood-member' => '{{GENDER:$1|زڕبۆت}}',
	'grouppage-flood' => '{{ns:project}}:زڕبۆت',
	'group-founder' => 'دامەزرێنەران',
	'group-founder-member' => '{{GENDER:$1|دامەزرێنەر}}',
	'grouppage-founder' => '{{ns:project}}:دامەزرێنەران',
	'group-ipblock-exempt' => 'ھەڵاواردەکان لە بەربەستنی ئایپی',
	'group-ipblock-exempt-member' => 'ھەڵاوارده لە بەربەستنی ئایپی',
	'grouppage-ipblock-exempt' => '{{ns:project}}:ھەڵاواردن لە بەربەستنی ئایپی',
	'group-rollbacker' => 'گەڕێنەرەوەکان',
	'group-rollbacker-member' => '{{GENDER:$1|گەڕێنەرەوە}}',
	'grouppage-rollbacker' => '{{ns:project}}:گەڕاندنەوە',
	'group-trusted' => 'بەکارھێنەرانی جێباوەر',
	'group-trusted-member' => '{{GENDER:$1|بەکارھێنەری جێباوەر}}',
	'grouppage-trusted' => '{{ns:project}}:بەکارھێنەرانی جێباوەر',
	'group-uploader' => 'بارکەرەکان',
	'group-uploader-member' => '{{GENDER:$1|بارکەر}}',
	'grouppage-uploader' => '{{ns:project}}:بارکەرەکان',
	'group-Staff' => 'کارمەندان',
	'group-Staff-member' => 'کارمەند',
	'group-steward' => 'ستیواردەکان',
	'group-steward-member' => '{{GENDER:$1|ستیوارد}}',
	'group-sysadmin' => 'به‌ڕێوبه‌رانی سیسته‌م',
	'group-sysadmin-member' => '{{GENDER:$1|بەڕێوبەری سیستەم}}',
	'group-inactive' => 'بەکارهێنەرانی ناچالاک',
	'group-inactive-member' => '{{GENDER:$1|بەکارھێنەری ناچالاک}}',
	'grouppage-inactive' => '{{ns:project}}: بەکارهێنەرانی ناچالاک',
	'wikimedia-copyright' => 'دەق لەژێر <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike License</a> لە بەردەستدایە؛
لەوانەیە مەرجی تریشی پێ زیاد ببێ.
سەیری <a href="//wikimediafoundation.org/wiki/Terms_of_Use">مەرجەکانی بەکارھێنان</a> بکە بۆ وردەکارییەکانی.',
	'wikimedia-copyrightwarning' => 'بە پاشەکەوت کردن، قەبووڵ دەکەی کە بەشدارییەکەت بە بێگەڕانەوە لەژێر [//creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] و [//www.gnu.org/copyleft/fdl.html GFDL] بڵاو ببێتەوە.
قەبووڵ دەکەی بەکارھێنەرانی تر ناوت لێببەن، لانی کەم، بە URL یان ھایپەرلینکێک بەو پەڕە بەشداری تێدا دەکەی.
سەیری [//wikimediafoundation.org/wiki/Terms_of_Use مەرجەکانی بەکارھێنان] بکە بۆ وردەکارییەکان.', # Fuzzy
);

/** Corsican (corsu)
 */
$messages['co'] = array(
	'sitesupport' => 'Dunazione',
	'group-steward' => 'Steward',
	'grouppage-steward' => '{{ns:project}}:Steward',
);

/** Crimean Turkish (Cyrillic script) (къырымтатарджа (Кирилл)‎)
 * @author Don Alessandro
 */
$messages['crh-cyrl'] = array(
	'sitesupport' => 'Багъышлар',
	'wikimedia-copyright' => 'Метин <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike</a> лицензиясынен берильген; базыда иляве шартлар къулланылып ола. Тафсилят ичюн <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Къулланув Шартлары</a>на бакъынъыз.',
	'wikimedia-copyrightwarning' => "'''«{{int:savearticle}}»''' дёгмесине басып сиз [//wikimediafoundation.org/wiki/Terms_of_Use Къулланув Шартлары]нен разы олып [//creativecommons.org/licenses/by-sa/3.0/deed.ru Creative Commons Attribution/Share-Alike 3.0] ве [//www.gnu.org/copyleft/fdl.html GFDL] лицензияларынынъ шартларына коре язгъанынъызнынъ кери къайтарылмаз шекильде дердж этильгенини къабул этерсинъиз. Creative Commons лицензиясынынъ талапларына уйгъун олмакъ ичюн бу саифеге багъланты бермек я да бу саифенинъ URL адресини бильдирмек етерлик оладжагъыны да къабул этерсинъиз.",
);

/** Crimean Turkish (Latin script) (qırımtatarca (Latin)‎)
 * @author Don Alessandro
 */
$messages['crh-latn'] = array(
	'sitesupport' => 'Bağışlar',
	'wikimedia-copyright' => 'Metin <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike</a> litsenziyasınen berilgen; bazıda ilâve şartlar qullanılıp ola. Tafsilât içün <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Qullanuv Şartları</a>na baqıñız.',
	'wikimedia-copyrightwarning' => "'''“{{int:savearticle}}”''' dögmesine basıp siz [//wikimediafoundation.org/wiki/Terms_of_Use Qullanuv Şartları]nen razı olıp [//creativecommons.org/licenses/by-sa/3.0/deed.ru Creative Commons Attribution/Share-Alike 3.0] ve [//www.gnu.org/copyleft/fdl.html GFDL] litsenziyalarınıñ şartlarına köre yazğanıñıznıñ keri qaytarılmaz şekilde derc etilgenini qabul etersiñiz. Creative Commons litsenziyasınıñ talaplarına uyğun olmaq içün bu saifege bağlantı bermek ya da bu saifeniñ URL adresini bildirmek yeterlik olacağını da qabul etersiñiz.",
);

/** Czech (česky)
 * @author Chmee2
 * @author Danny B.
 * @author Li-sung
 * @author Littledogboy
 * @author Matěj Grabovský
 * @author Mormegil
 * @author Ragimiri
 */
$messages['cs'] = array(
	'wikimediamessages-desc' => 'Hlášení specifická pro projekty nadace Wikimedia Foundation',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=cs',
	'sitesupport' => 'Podpořte nás',
	'tooltip-n-sitesupport' => 'Podpořte nás',
	'specialpages-group-contribution' => 'Příspěvky/financování',
	'nstab-creator' => 'Autor',
	'nstab-institution' => 'Instituce',
	'nstab-sequence' => 'Sekvence',
	'nstab-timedtext' => 'Synchronizovaný text',
	'group-Ex_Administrator' => 'Bývalí správci',
	'group-Ex_Administrator-member' => '{{GENDER:$1|bývalý správce|bývalá správkyně|bývalý správce}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Bývalí správci',
	'group-Ex_Bureaucrat' => 'Bývalí byrokraté',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|bývalý byrokrat|bývalá byrokratka|bývalý byrokrat}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Bývalí byrokrati',
	'group-Image-reviewer' => 'Posuzovatelé obrázků',
	'group-Image-reviewer-member' => '{{GENDER:$1|posuzovatel|posuzovatelka|posuzovatel}} obrázků',
	'grouppage-Image-reviewer' => '{{ns:project}}:Posuzovatelé obrázků',
	'group-OTRS-member' => 'Členové OTRS',
	'group-OTRS-member-member' => '{{GENDER:$1|člen|členka|člen}} OTRS',
	'grouppage-OTRS-member' => '{{ns:project}}:Členové OTRS',
	'group-abusefilter' => 'Správci filtrů zneužívání',
	'group-abusefilter-member' => '{{GENDER:$1|správce|správkyně|správce}} filtrů zneužívání',
	'grouppage-abusefilter' => '{{ns:project}}:Správci filtrů zneužívání',
	'group-accountcreator' => 'Zakladatelé účtů',
	'group-accountcreator-member' => '{{GENDER:$1|zakladatel|zakladatelka|zakladatel}} účtů',
	'grouppage-accountcreator' => '{{ns:project}}:Zakladatelé účtů',
	'group-arbcom' => 'Členové arbitrážního výboru',
	'group-arbcom-member' => '{{GENDER:$1|člen|členka|člen}} arbitrážního výboru',
	'grouppage-arbcom' => '{{ns:project}}:Arbitrážní výbor',
	'group-autopatrolled' => 'Automatičtí strážci',
	'group-autopatrolled-member' => '{{GENDER:$1|automatický strážce|automatická strážkyně|automatický strážce}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Strážci',
	'group-autoreviewer' => 'Autokontroloři',
	'group-autoreviewer-member' => '{{GENDER:$1|autokontrolor|autokontrolorka|autokontrolor}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Autokontroloři',
	'group-bigexport' => 'Velkoexportéři',
	'group-bigexport-member' => '{{GENDER:$1|velkoexportér|velkoexportérka|velkoexportér}}',
	'grouppage-bigexport' => '{{ns:project}}:Velkoexportéři',
	'group-botadmin' => 'Boti se správcovskými právy',
	'group-botadmin-member' => '{{GENDER:$1|bot|botka|bot}} se správcovskými právy',
	'grouppage-botadmin' => '{{ns:project}}:Boti se správcovskými právy',
	'group-confirmed' => 'Schválení uživatelé',
	'group-confirmed-member' => '{{GENDER:$1|schválený uživatel|schválená uživatelka|schválený uživatel}}',
	'grouppage-confirmed' => '{{ns:project}}:Schválení uživatelé',
	'group-editprotected' => 'Editoři zamčených stránek',
	'group-editprotected-member' => '{{GENDER:$1|editor|editorka|editor}} zamčených stránek',
	'grouppage-editprotected' => '{{ns:project}}:Editoři zamčených stránek',
	'group-eliminator' => 'Eliminátoři',
	'group-eliminator-member' => '{{GENDER:$1|eliminátor|eliminátorka|eliminátor}}',
	'grouppage-eliminator' => '{{ns:project}}:Eliminátor', # Fuzzy
	'group-filemover' => 'Přesouvači souborů',
	'group-filemover-member' => '{{GENDER:$1|přesouvač|přesouvačka|přesouvač}} souborů',
	'grouppage-filemover' => '{{ns:project}}:Přesouvači souborů',
	'group-flood' => 'Uživatelé botů',
	'group-flood-member' => '{{GENDER:$1|uživatel|uživatelka|uživatel}} botů',
	'grouppage-flood' => '{{ns:project}}:Uživatelé botů',
	'group-founder' => 'Zakladatelé',
	'group-founder-member' => '{{GENDER:$1|zakladatel|zakladatelka|zakladatel}}',
	'grouppage-founder' => '{{ns:project}}:Zakladatelé',
	'group-import' => 'Importéři',
	'group-import-member' => '{{GENDER:$1|importér|importérka|importér}}',
	'grouppage-import' => '{{ns:project}}:Importéři',
	'group-interface_editor' => 'Editoři uživatelského rozhraní',
	'group-interface_editor-member' => '{{GENDER:$1|editor|editorka|editor}} uživatelského rozhraní',
	'grouppage-interface_editor' => '{{ns:project}}:Editoři uživatelského rozhraní',
	'group-ipblock-exempt' => 'Nepodléhající blokování IP adres',
	'group-ipblock-exempt-member' => '{{GENDER:$1|nepodléhající blokování IP adres}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Výjimky z blokování IP adres',
	'group-patroller' => 'Strážci',
	'group-patroller-member' => '{{GENDER:$1|strážce|strážkyně}}',
	'grouppage-patroller' => '{{ns:project}}:Strážci',
	'group-researcher' => 'Výzkumníci',
	'group-researcher-member' => '{{GENDER:$1|výzkumník|výzkumnice|výzkumník}}',
	'grouppage-researcher' => '{{ns:project}}:Výzkumníci',
	'group-rollbacker' => 'Revertovatelé',
	'group-rollbacker-member' => '{{GENDER:$1|revertovatel|revertovatelka|revertovatel}}',
	'grouppage-rollbacker' => '{{ns:project}}:Revertovatelé',
	'group-transwiki' => 'Transwiki importéři',
	'group-transwiki-member' => 'transwiki {{GENDER:$1|importér|importérka|importér}}',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki importéři',
	'group-trusted' => 'Důvěryhodní uživatelé',
	'group-trusted-member' => '{{GENDER:$1|důvěryhodný uživatel|důvěryhodná uživatelka|důvěryhodný uživatel}}',
	'grouppage-trusted' => '{{ns:project}}:Důvěryhodní uživatelé',
	'group-uploader' => 'Načítači souborů',
	'group-uploader-member' => '{{GENDER:$1|načítač|načítačka}} souborů',
	'grouppage-uploader' => '{{ns:project}}:Načítači souborů',
	'group-Global_bot' => 'Globální boti',
	'group-Global_bot-member' => 'globální {{GENDER:$1|bot|botka|bot}}',
	'group-Global_rollback' => 'Globální revertovatelé',
	'group-Global_rollback-member' => 'globální {{GENDER:$1|revertovatel|revertovatelka|revertovatel}}',
	'group-Global_sysops' => 'Globální správci',
	'group-Global_sysops-member' => 'globální {{GENDER:$1|správce|správkyně|správce}}',
	'group-Ombudsmen' => 'Ombudsmani',
	'group-Ombudsmen-member' => '{{GENDER:$1|ombudsman|ombudsmanka}}',
	'group-Staff' => 'Personál',
	'group-Staff-member' => '{{GENDER:$1|zaměstnanec|zaměstnankyně|zaměstnanec}}',
	'group-editinterface' => 'Editoři uživatelského rozhraní',
	'group-editinterface-member' => '{{GENDER:$1|editor|editorka|editor}} uživatelského rozhraní',
	'group-steward' => 'Stevardi',
	'group-steward-member' => '{{GENDER:$1|stevard|stevardka|stevard}}',
	'group-sysadmin' => 'Správcové serveru',
	'group-sysadmin-member' => '{{GENDER:$1|správce|správkyně|správce}} serveru',
	'group-Indic_Bots' => 'Indičtí boti',
	'group-Indic_Bots-member' => '{{GENDER:$1|indický bot|indická botka}}',
	'group-global-ipblock-exempt' => 'Globálně nepodléhající blokování IP adres',
	'group-global-ipblock-exempt-member' => '{{GENDER:$1|globálně nepodléhající blokování IP adres}}',
	'group-translationadmin' => 'Správci překladů',
	'group-translationadmin-member' => '{{GENDER:$1|správce|správkyně|správce}} překladů',
	'grouppage-translationadmin' => '{{ns:project}}:Správci překladů',
	'group-centralnoticeadmin' => 'Správci centralizovaných oznámení',
	'group-centralnoticeadmin-member' => '{{GENDER:$1|Správce|Správkyně}} centralizovaných oznámení',
	'grouppage-centralnoticeadmin' => '{{ns:project}}:Správci centralizovaných oznámení',
	'group-coder' => 'Programátoři',
	'group-coder-member' => '{{GENDER:$1|programátor|programátorka|programátor}}',
	'group-inactive' => 'Neaktivní uživatelé',
	'group-inactive-member' => 'neaktivní {{GENDER:$1|uživatel|uživatelka|uživatel}}',
	'grouppage-inactive' => '{{ns:project}}:Neaktivní uživatelé',
	'wikimedia-copyright' => 'Text je dostupný pod <a href="//creativecommons.org/licenses/by-sa/3.0/deed.cs">licencí Creative Commons Uveďte autora&nbsp;– Zachovejte licenci</a>, případně za dalších podmínek. Podrobnosti naleznete na stránce <a href="//wikimediafoundation.org/wiki/Podmínky_užití">Podmínky užití</a>.',
	'wikidata-copyright' => 'Všechna strukturovaná data z hlavního jmenného prostoru a jmenného prostoru vlastností jsou k dispozici pod licencí <a href="//creativecommons.org/publicdomain/zero/1.0/deed.cs" title="Definice licence Creative Commons CC0">Creative Commons CC0</a>;
text v ostatních jmenných prostorech je k dispozici pod licencí <a href="//creativecommons.org/licenses/by-sa/3.0/deed.cs" title="Definice licence Creative Commons Uveďte autora-Zachovejte licenci">Creative Commons Uveďte autora-Zachovejte licenci</a>;
mohou se vyskytnout další podmínky.
Pro další detaily vizte <a href="//wikimediafoundation.org/wiki/Terms_of_use/cs" title="Podmínky užití Wikimedia Foundation">Podmínky užití</a>.',
	'wikidata-shortcopyrightwarning' => 'Kliknutím na „{{int:wikibase-save}}“ potvrzujete souhlas s [//wikimediafoundation.org/wiki/Terms_of_Use/cs podmínkami užití] a neodvolatelně zveřejňujete svůj příspěvek za podmínek [//creativecommons.org/publicdomain/zero/1.0/deed.cs licence CC0].',
	'wikimedia-copyrightwarning' => 'Kliknutím na „{{int:savearticle}}“ souhlasíte s&nbsp;[//wikimediafoundation.org/wiki/Podm%C3%ADnky_u%C5%BEit%C3%AD Podmínkami užití] a neodvolatelně svůj příspěvek uvolňujete pod licencemi [//creativecommons.org/licenses/by-sa/3.0/deed.cs CC-BY-SA&nbsp;3.0] a&nbsp;[//www.gnu.org/copyleft/fdl.html GFDL]. Souhlasíte s&nbsp;tím, že hypertextový odkaz nebo URL je dostatečným uvedením vašeho autorství podle licence Creative Commons.',
	'wikibase-sitelinks-wikivoyage' => 'Stránky Wikivoyage provázané s touto položkou',
	'cant-delete-main-page' => 'Hlavní stranu nemůžete smazat ani přesunout.',
	'wikimedia-translationnotifications-signup-legal' => 'Poskytnutím těchto informací nadaci Wikimedia Foundation udělujete souhlas, že vás můžeme kontaktovat ohledně překladů či dalších témat souvisejících s hnutím Wikimedia, o kterých se budeme domnívat, že by vás mohly zajímat. Souhlasíte, že vaše údaje mohou být uloženy ve Spojených státech amerických a že se na ně vztahují naše [https://wikimediafoundation.org/wiki/Ochrana_osobn%C3%ADch_%C3%BAdaj%C5%AF Pravidla ochrany osobních údajů].',
	'upload-more-photos-of-this-monument' => 'Načíst další fotografie této památky',
	'extdist-branch-master' => 'master (nejnovější vývojová verze)',
	'extdist-branch-REL1_21' => '1.21 (aktuální stabilní MediaWiki)',
	'createacct-helpusername-url' => '{{ns:Project}}:Uživatelské_jméno',
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(pomozte mi s výběrem)]]',
	'createacct-captcha-help-url' => '{{ns:Project}}:Žádost o účet',
	'createacct-imgcaptcha-help' => 'Nevidíte obrázek? [[{{MediaWiki:createacct-captcha-help-url}}|Požádejte o účet]].',
);

/** Church Slavic (словѣ́ньскъ / ⰔⰎⰑⰂⰡⰐⰠⰔⰍⰟ)
 * @author Nemo bis
 * @author ОйЛ
 */
$messages['cu'] = array(
	'sitesupport' => 'даꙗниꙗ',
	'wikimedia-copyright' => 'подъ прощєниѥмь <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike License</a> пьсано ѥстъ · доплънитєл҄ьнꙑ оуставлєниꙗ тако жє могѫтъ бꙑти ⁙
Ꙁьри <a href="//wikimediafoundation.org/wiki/Terms_of_Use/cu">польꙃєваниꙗ оуставъ</a> пльна расъмощрѥниꙗ дѣл̑ьма',
	'wikimedia-copyrightwarning' => 'ащє жьмєши ⁖ {{int:savearticle}} ⁖ · тъ бѫди съгласьнъ съ [//wikimediafoundation.org/wiki/Terms_of_Use польꙃєваниꙗ оуставомь] · и сътворѥниѥмь твоꙗ добродѣꙗнии подъ прощєнии [//creativecommons.org/licenses/by-sa/3.0/ CC-BY-SA 3.0] и [//www.gnu.org/copyleft/fdl.html GFDL] ⁙
съгласьнь бѫди бо съвѧꙁь (URL) добро оукаꙁаниѥ творьца прощєниꙗ Creative Commons дѣлꙗ ѥстъ',
);

/** Chuvash (Чӑвашла)
 * @author PCode
 */
$messages['cv'] = array(
	'sitesupport' => 'Пожертвованисем',
);

/** Welsh (Cymraeg)
 * @author Lloffiwr
 * @author Robin Owain
 * @author Xxglennxx
 */
$messages['cy'] = array(
	'wikimediamessages-desc' => 'Negeseuon neilltuol Wikimedia',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=cy',
	'sitesupport' => 'Rhoi arian',
	'tooltip-n-sitesupport' => "Ein cefnogi'n ariannol",
	'specialpages-group-contribution' => 'Cyfrannu/Codi arian',
	'nstab-creator' => 'Gwneuthurwr',
	'nstab-institution' => 'Sefydliad',
	'nstab-sequence' => 'Dilyniant',
	'nstab-timedtext' => 'Is-deitlau',
	'group-Ex_Administrator' => 'Cyn-weinyddwyr',
	'group-Ex_Administrator-member' => '{{GENDER:$1|cyn-weinyddwr}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Cyn-weinyddwyr',
	'group-Ex_Bureaucrat' => 'Cyn-fiwrocratiaid',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|cyn-fiwrocrat}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Cyn-fiwrocratiaid',
	'group-Image-reviewer' => 'Adolygwyr delweddau',
	'group-Image-reviewer-member' => 'adolygydd delweddau',
	'grouppage-Image-reviewer' => '{{ns:project}}:Adolygwyr delweddau',
	'group-OTRS-member' => 'Aelodau o OTRS',
	'group-OTRS-member-member' => 'aelod o OTRS',
	'grouppage-OTRS-member' => '{{ns:project}}:Aelodau OTRS',
	'group-abusefilter' => 'Golygyddion hidlo camdriniaeth',
	'group-abusefilter-member' => 'Golygydd hidlo camdriniaeth',
	'grouppage-abusefilter' => '{{ns:project}}:Golygwyr hidlo camdriniaeth',
	'group-accountcreator' => 'Gwneuthurwyr cyfrifon',
	'group-accountcreator-member' => 'gwneuthurwr cyfrifon',
	'grouppage-accountcreator' => '{{ns:project}}:Gwneuthurwyr cyfrifon',
	'group-arbcom' => "Aelodau'r pwyllgor cyflafareddu",
	'group-arbcom-member' => "aelod o'r pwyllgor cyflafareddu",
	'grouppage-arbcom' => "{{ns:project}}:Aelodau'r pwyllgor cyflafareddu",
	'group-autopatrolled' => 'Awto-batrolwyr',
	'group-autopatrolled-member' => 'awto-batrolwyr',
	'grouppage-autopatrolled' => '{{ns:project}}:Awto-batrolwyr',
	'group-autoreviewer' => 'Awto-adolygyddion',
	'group-autoreviewer-member' => 'awto-adolygyddion',
	'grouppage-autoreviewer' => '{{ns:project}}:Awto-adolygyddion',
	'group-bigexport' => 'Allforwyr mawr',
	'group-bigexport-member' => 'allforiwr mawr',
	'grouppage-bigexport' => '{{ns:project}}:Allforwyr mawr',
	'group-botadmin' => 'Botiaid a chanddynt alluoedd gweinyddu',
	'group-botadmin-member' => '{{GENDER:$1|bot a chanddo alluoedd gweinyddu}}',
	'grouppage-botadmin' => '{{ns:project}}:Botiaid a chanddynt alluoedd gweinyddu',
	'group-confirmed' => "Defnyddwyr wedi'u cadarnhau",
	'group-confirmed-member' => 'defnyddiwr wedi ei gadarnhau',
	'grouppage-confirmed' => "{{ns:project}}:Defnyddwyr wedi'u cadarnhau",
	'group-editprotected' => "Golygyddion tudalennau wedi'u diogelu",
	'group-editprotected-member' => "golygydd tudalennau wedi'u diogelu",
	'grouppage-editprotected' => "{{ns:project}}:Golygyddion tudalennau wedi'u diogelu",
	'group-eliminator' => 'Dilëwyr',
	'group-eliminator-member' => 'dilëwr',
	'grouppage-eliminator' => '{{ns:project}}:Dilëwr',
	'group-filemover' => 'Symudwyr ffeiliau',
	'group-filemover-member' => 'symudwr ffeiliau',
	'grouppage-filemover' => '{{ns:project}}:Symudwyr ffeiliau',
	'group-flood' => 'Defnyddwyr bot',
	'group-flood-member' => 'defnyddiwr bot',
	'grouppage-flood' => '{{ns:project}}:Defnyddwyr bot',
	'group-founder' => 'Sefydlwyr',
	'group-founder-member' => 'sefydlydd',
	'grouppage-founder' => '{{ns:project}}:Sefydlwyr',
	'group-import' => 'Mewnforwyr',
	'group-import-member' => 'mewnforwr',
	'grouppage-import' => '{{ns:project}}:Mewnforwyr',
	'group-interface_editor' => 'Golygyddion y rhyngwyneb',
	'group-interface_editor-member' => '{{GENDER:$1|golygydd y rhyngwyneb}}',
	'grouppage-interface_editor' => '{{ns:project}}:Golygyddion y rhyngwyneb',
	'group-ipblock-exempt' => 'Wedi eithrio rhag bod eu cyfeiriadau IP yn cael eu blocio',
	'group-ipblock-exempt-member' => 'ymhlith y rhai sydd wedi eithrio rhag bod eu cyfeiriadau IP yn cael eu blocio',
	'grouppage-ipblock-exempt' => "{{ns:project}}:Eithrio rhag blocio'r IP",
	'group-patroller' => 'Patrolwyr',
	'group-patroller-member' => '{{GENDER:$1|patrolwr}}',
	'grouppage-patroller' => '{{ns:project}}:Ymchwilwyr',
	'group-researcher' => 'Ymchwilwyr',
	'group-researcher-member' => 'ymchwilydd',
	'grouppage-researcher' => '{{ns:project}}:Ymchwilwyr',
	'group-rollbacker' => 'Gwrthdrowyr',
	'group-rollbacker-member' => 'gwrthdroiwr',
	'grouppage-rollbacker' => '{{ns:project}}:Gwrthdrowyr',
	'group-transwiki' => 'Mewnforwyr trawswici',
	'group-transwiki-member' => 'mewnforwr trawswici',
	'grouppage-transwiki' => '{{ns:project}}:Mewnforwyr trawswici',
	'group-trusted' => 'Defnyddwyr dibynadwy',
	'group-trusted-member' => 'defnyddiwr dibynadwy',
	'grouppage-trusted' => '{{ns:project}}:Defnyddwyr dibynadwy',
	'group-Global_bot' => 'Botiau cydwici',
	'group-Global_bot-member' => 'bot cydwici',
	'group-Global_rollback' => 'Gwrthdrowyr cydwici',
	'group-Global_rollback-member' => 'gwrthdroiwr cydwici',
	'group-Global_sysops' => 'Gweinyddwyr cydwici',
	'group-Global_sysops-member' => 'gweinyddwr cydwici',
	'group-Ombudsmen' => 'Ombwdsmyn',
	'group-Ombudsmen-member' => 'ombwdsmon',
	'group-Staff' => 'Y staff',
	'group-Staff-member' => "aelod o'r staff",
	'grouppage-Staff' => 'Y Sefydliad:Staff',
	'group-editinterface' => 'Golygyddion y rhyngwyneb',
	'group-editinterface-member' => 'golygydd y rhyngwyneb',
	'group-steward' => 'Stiwardiaid',
	'group-steward-member' => 'stiward',
	'group-sysadmin' => 'Gweinyddwyr y system',
	'group-sysadmin-member' => 'gweinyddwr y system',
	'group-global-ipblock-exempt' => 'Wedi eu heithrio rhag blocio IP ar wicis ar y cyd',
	'group-global-ipblock-exempt-member' => '{{GENDER:$1|wedi ei eithrio rhag blocio IP ar wicis ar y cyd}}',
	'group-translationadmin' => 'Gweinyddwyr y cyfieithiadau',
	'group-translationadmin-member' => '{{GENDER:$1|gweinyddwr y cyfieithiadau}}',
	'grouppage-translationadmin' => '{{ns:project}}:Gweinyddwyr y cyfieithiadau',
	'group-centralnoticeadmin' => 'Gweinyddwyr yr hysbysiadau canolog',
	'group-centralnoticeadmin-member' => '{{GENDER:$1|gweinyddwr yr hysbysiadau canolog}}',
	'grouppage-centralnoticeadmin' => '{{ns:project}}:Gweinyddwyr yr hysbysiadau canolog',
	'group-coder' => 'Codyddion',
	'group-coder-member' => '{{GENDER:$1|codydd}}',
	'group-inactive' => 'Defnyddwyr segur',
	'group-inactive-member' => '{{GENDER:$1|defnyddiwr segur}}',
	'grouppage-inactive' => '{{ns:project}}:Defnyddwyr segur',
	'wikimedia-copyright' => 'Rhoddir testun y dudalen ar gael ar delerau\'r drwydded <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike</a>;
gall fod telerau ychwanegol yn perthyn i\'r testun.
Gweler <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Telerau Defnyddio\'r Drwydded</a> am fanylion pellach.',
	'wikidata-copyright' => 'Mae\'r holl data strwythuredig yn y prif barth a\'r parth nodwedd ar gael yn ôl termau\'r drwydded <a href="//creativecommons.org/publicdomain/zero/1.0/" title="Deffiniad y Drwydded Creative Commons CC0">Creative Commons CC0</a>;
mae testun yn y parthau eraill ar gael yn ôl termau\'r drwydded <a href="//creativecommons.org/licenses/by-sa/3.0/" title="Diffiniad y Drwydded Creative Commons Attribution/Share-Alike">Creative Commons Attribution/Share-Alike</a>;
gall termau ychwanegol fod yn weithredol.
Gweler y <a href="//wikimediafoundation.org/wiki/Terms_of_Use" title="Termau Defnyddio Sefydliad Wikimedia">Termau Defnyddio</a> am fanylion.',
	'wikidata-shortcopyrightwarning' => 'Wrth bwyso ar "cadwer", rydych yn derbyn y [https://wikimediafoundation.org/wiki/Terms_of_Use telerau defnyddio], ac yn cytuno\'n ddi-droi-nôl i ryddhau eich cyfraniad gyda  [https://creativecommons.org/publicdomain/zero/1.0/ thrwydded CC0] arno.',
	'wikimedia-copyrightwarning' => "Wrth roi'r dudalen ar gadw, rydych yn cytuno, a hynny'n ddi-alw'n-ôl, i ryddhau eich cyfraniad ar drwyddedau'r [//creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] a'r [//www.gnu.org/copyleft/fdl.html GFDL].
Yr ydych yn cytuno i gael eich cydnabod pan gaiff y cyfraniad ei ail-ddefnyddio, o leiaf trwy osod hypergyswllt neu URL at y dudalen yr ydych yn cyfrannu ato.
Gweler [//wikimediafoundation.org/wiki/Terms_of_Use Telerau Defnyddio'r Drwydded] am fanylion pellach.",
	'cant-delete-main-page' => "Ni allwch ddileu'r brif dudalen na'i symud.",
	'wikimedia-translationnotifications-signup-legal' => "Wrth roi'r wybodaeth hon i Sefydliad Wicifryngau rydych yn cytuno y gallwn gysylltu â chi ynglŷn â chyfieithu neu faterion eraill yn gysylltiedig â mudiad Wicifryngau, y tybiwn y byddent o ddiddordeb i chi. Rydych yn cytuno y gall eich gwybodaeth gael ei roi ar gadw yn Unol Daleithiau America a'i bod yn rhwym wrth ein [https://wikimediafoundation.org/wiki/Privacy_policy polisi preifatrwydd].",
	'upload-more-photos-of-this-monument' => "Uwchlwytho rhagor o luniau o'r gofeb hon",
	'extdist-branch-master' => 'pen-fersiwn (y fersiwn datblygu diweddaraf)',
	'extdist-branch-REL1_21' => '1.21 (y fersiwn MediaWiki safadwy diweddaraf)',
	'createacct-helpusername-url' => '{{ns:Project}}:Polisi_enwi_cyfrifon',
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(cymorth wrth ddewis enw)]]',
	'createacct-captcha-help-url' => '{{ns:Project}}:Ymholi am gyfri',
	'createacct-imgcaptcha-help' => 'Methu gweld y ddelwedd? [[{{MediaWiki:createacct-captcha-help-url}}|Holwch am gyfrif]]',
);

/** Danish (dansk)
 * @author Byrial
 * @author Christian List
 * @author Fnielsen
 * @author Froztbyte
 * @author HenrikKbh
 * @author Jon Harald Søby
 * @author Kaare
 * @author Masz
 * @author Nemo bis
 * @author Peter Alberti
 * @author Sarrus
 * @author Steenth
 */
$messages['da'] = array(
	'wikimediamessages-desc' => 'Wikimedia-specifikke meddelelser',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=da',
	'sitesupport' => 'Donationer',
	'tooltip-n-sitesupport' => 'Støt os',
	'specialpages-group-contribution' => 'Bidrag/Indsamling',
	'nstab-creator' => 'Ophavsmand',
	'nstab-institution' => 'Institution',
	'nstab-sequence' => 'Sekvens',
	'nstab-timedtext' => 'Undertekst',
	'group-Ex_Administrator' => 'Forhenværende administratorer',
	'group-Ex_Administrator-member' => '{{GENDER:$1|forhenværende administrator}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Forhenværende administratorer',
	'group-Ex_Bureaucrat' => 'Forhenværende bureaukrater',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|forhenværende bureaukrat}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Forhenværende bureaukrater',
	'group-Image-reviewer' => 'Billedgranskere',
	'group-Image-reviewer-member' => '{{GENDER:$1|billedgransker}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:Billedgranskere',
	'group-OTRS-member' => 'OTRS-medlemmer',
	'group-OTRS-member-member' => '{{GENDER:$1|OTRS-medlem}}',
	'grouppage-OTRS-member' => '{{ns:project}}:OTRS-medlemmer',
	'group-abusefilter' => 'Operatører af misbrugsfilteret',
	'group-abusefilter-member' => '{{GENDER:$1|operatør af misbrugsfilteret}}',
	'grouppage-abusefilter' => '{{ns:project}}:Operatører af misbrugsfilteret',
	'group-accountcreator' => 'Kontooprettere',
	'group-accountcreator-member' => '{{GENDER:$1|kontoopretter}}',
	'grouppage-accountcreator' => '{{ns:project}}:Kontooprettere',
	'group-arbcom' => 'Voldgift udvalgets medlemmer',
	'group-arbcom-member' => '{{GENDER:$1|voldgift udvalgsmedlem}}',
	'grouppage-arbcom' => '{{ns:project}}: voldgiftudvalgets medlemmer',
	'group-autopatrolled' => 'Autopatruljerede',
	'group-autopatrolled-member' => '{{GENDER:$1|autopatruljeret}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Autopatruljerede',
	'group-autoreviewer' => 'Autopatruljanter',
	'group-autoreviewer-member' => '{{GENDER:$1|autopatruljant}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Autopatruljanter',
	'group-bigexport' => 'Storeksportører',
	'group-bigexport-member' => '{{GENDER:$1|storeksportør}}',
	'grouppage-bigexport' => '{{ns:project}}:Storeksportører',
	'group-botadmin' => 'Robotter med administratorrettigheder',
	'group-botadmin-member' => '{{GENDER:$1|robot med administratorrettigheder}}',
	'grouppage-botadmin' => '{{ns:project}}:Robotter med administratorrettigheder',
	'group-confirmed' => 'Bekræftede brugere',
	'group-confirmed-member' => '{{GENDER:$1|bekræftet bruger}}',
	'grouppage-confirmed' => '{{ns:project}}:Bekræftede brugere',
	'group-editprotected' => 'Brugere, der kan redigere beskyttede sider',
	'group-editprotected-member' => '{{GENDER:$1|redaktør af beskyttede sider}}',
	'grouppage-editprotected' => '{{ns:project}}:Brugere, der kan redigere beskyttede sider',
	'group-eliminator' => 'Eliminatorer',
	'group-eliminator-member' => '{{GENDER:$1|eliminator}}',
	'grouppage-eliminator' => '{{ns:project}}:Eliminator',
	'group-filemover' => 'Filflyttere',
	'group-filemover-member' => '{{GENDER:$1|filflytter}}',
	'grouppage-filemover' => '{{ns:project}}:Filflyttere',
	'group-flood' => 'Bot-brugere',
	'group-flood-member' => '{{GENDER:$1|bot-bruger}}',
	'grouppage-flood' => '{{ns:project}}:Botbrugere',
	'group-founder' => 'Grundlæggere',
	'group-founder-member' => '{{GENDER:$1|grundlægger}}',
	'grouppage-founder' => '{{ns:project}}:Grundlæggere',
	'group-import' => 'Importører',
	'group-import-member' => '{{GENDER:$1|importør}}',
	'grouppage-import' => '{{ns:project}}:Importører',
	'group-interface_editor' => 'Brugerfladeændrere',
	'group-interface_editor-member' => '{{GENDER:$1|brugerfladeændrer}}',
	'grouppage-interface_editor' => '{{ns:project}}:Brugerfladeændrere',
	'group-ipblock-exempt' => 'IP-blokeringsundtagelser',
	'group-ipblock-exempt-member' => '{{GENDER:$1|IP-blokeringsundtagelse}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP-blokeringsundtagelser',
	'group-patroller' => 'Patruljanter',
	'group-patroller-member' => '{{GENDER:$1|patruljant}}',
	'grouppage-patroller' => '{{ns:project}}:Patruljanter',
	'group-researcher' => 'Forskere',
	'group-researcher-member' => '{{GENDER:$1|forsker}}',
	'grouppage-researcher' => '{{ns:project}}:Forskere',
	'group-rollbacker' => 'Tilbagerullere',
	'group-rollbacker-member' => '{{GENDER:$1|tilbageruller}}',
	'grouppage-rollbacker' => '{{ns:project}}:Tilbagerullere',
	'group-transwiki' => 'Transwiki-importører',
	'group-transwiki-member' => '{{GENDER:$1|transwiki-importør}}',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki-importører',
	'group-trusted' => 'Betroede brugere',
	'group-trusted-member' => '{{GENDER:$1|betroet bruger}}',
	'grouppage-trusted' => '{{ns:project}}:Betroede brugere',
	'group-Global_bot' => 'Globale robotter',
	'group-Global_bot-member' => '{{GENDER:$1|global robot}}',
	'group-Global_rollback' => 'Globale tilbagerullere',
	'group-Global_rollback-member' => '{{GENDER:$1|global tilbageruller}}',
	'grouppage-Global_rollback' => 'm:Global rollback/nb',
	'group-Global_sysops' => 'Global administrator',
	'group-Global_sysops-member' => '{{GENDER:$1|global administrator}}',
	'group-Ombudsmen' => 'Ombudsmænd',
	'group-Ombudsmen-member' => '{{GENDER:$1|ombudsmand}}',
	'group-Staff' => 'Ansatte',
	'group-Staff-member' => '{{GENDER:$1|ansatte}}',
	'group-editinterface' => 'Brugerfladeændrere',
	'group-editinterface-member' => '{{GENDER:$1|brugerfladeændrer}}',
	'group-steward' => 'Forvaltere',
	'group-steward-member' => '{{GENDER:$1|forvalter}}',
	'grouppage-steward' => 'm:Stewards/nb',
	'group-sysadmin' => 'Systemadministratorer',
	'group-sysadmin-member' => '{{GENDER:$1|systemadministrator}}',
	'group-API_High_Limit_Requestor' => 'API høj grænse anmodere',
	'group-API_High_Limit_Requestor-member' => '{{GENDER:$1|API høj grænse anmodere}}',
	'group-Indic_Bots' => 'Indic bots',
	'group-Indic_Bots-member' => '{{GENDER:$1|indic bot}}',
	'group-New_wikis_importer' => 'Nye wiki-websteder direkte importører',
	'group-New_wikis_importer-member' => '{{GENDER:$1|nye wiki-websteder importør}}',
	'group-global-ipblock-exempt' => 'Global IP-gruppefritagelser',
	'group-global-ipblock-exempt-member' => '{{GENDER:$1|IP-blokeringsundtagelse}}',
	'group-recursive-export' => 'Rekursiv eksport',
	'group-recursive-export-member' => '{{GENDER:$1|rekursiv eksportør}}',
	'group-translationadmin' => 'Oversættelsesadministratorer',
	'group-translationadmin-member' => '{{GENDER:$1|oversættelsesadministrator}}',
	'grouppage-translationadmin' => '{{ns:project}}:Oversættelsesadministratorer',
	'group-centralnoticeadmin' => 'Centrale notificer administratorer',
	'group-centralnoticeadmin-member' => '{{GENDER:$1|Centrale notificer administrator}}',
	'grouppage-centralnoticeadmin' => '{{ns:project}}: Central notificer administratorer',
	'group-coder' => 'Programmører',
	'group-coder-member' => '{{GENDER:$1|programmør}}',
	'group-inactive' => 'Inaktive brugere',
	'group-inactive-member' => '{{GENDER:$1|inaktiv bruger}}',
	'grouppage-inactive' => '{{ns:project}}:Inaktive brugere',
	'wikimedia-copyright' => 'Tekst er tilgængelig under <a href="//creativecommons.org/licenses/by-sa/3.0/deed.da">Creative Commons-licensen Navngivelse/Del på samme vilkår</a>; yderligere betingelser kan være gældende. Se <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Brugsbetingelser</a> for flere oplysninger.',
	'wikidata-copyright' => 'Alle strukturerede data fra hoved- og egenskabsnavnerummet er tilgængelige under en <a href="//creativecommons.org/publicdomain/zero/1.0/" title="Definition of the Creative Commons CC0 License">Creative Commons CC0 licens</a>;
tekst i de andre navnerum er tilgængelig under <a href="//creativecommons.org/licenses/by-sa/3.0/" title="Definition of the Creative Commons Attribution/Share-Alike License">Creative Commons Attribution/Share-Alike licens</a>;
yderligere betingelser kan forekomme.
Se <a href="//wikimediafoundation.org/wiki/Terms_of_Use" title="Wikimedia Foundation Terms of Use">Vilkår for anvendelse</a> for detaljer.',
	'wikidata-shortcopyrightwarning' => 'Ved at klikke på "Gem", accepterer du [https://wikimediafoundation.org/wiki/Terms_of_Use vilkår for brug], og du accepterer uigenkaldeligt at frigive dit bidrag under [https://creativecommons.org/publicdomain/zero/1.0/ CC0 licens].',
	'wikimedia-copyrightwarning' => 'Ved at trykke på "{{int:savearticle}}"-knappen accepterer du [//wikimediafoundation.org/wiki/Terms_of_Use brugsbetingelserne], og du indvilliger i at uigenkaldeligt udgive dit bidrag under [//creativecommons.org/licenses/by-sa/3.0/ CC-BY-SA 3.0-licensen] og [//www.gnu.org/copyleft/fdl.html GFDL].
Du accepterer ligeledes, at et hyperlink eller en URL-adresse er tilstrækkelig navngivelse under Creative Commons-licensen.',
	'cant-delete-main-page' => 'Du kan ikke slette eller flytte forsiden.',
	'wikimedia-translationnotifications-signup-legal' => 'Du accepterer, at du ved at give Wikimedia Foundation denne information, må vi kontakte dig vedrørende oversættelse af andre emner relateret til Wikimedia Foundations, som vi tror vil interessere dig. Du accepterer at data kan lagres i USA og er underlagt vores [https://wikimediafoundation.org/wiki/Privacy_policy fortrolighedspolitik].',
	'upload-more-photos-of-this-monument' => 'Overfør flere fotos af monumentet',
	'extdist-branch-master' => 'Master (seneste udviklingsversion)',
	'extdist-branch-REL1_21' => '1.21 (seneste stabile MediaWiki)',
	'createacct-helpusername-url' => '{{ns:Project}}:Brugernavns_regler',
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(hjælp mig med at vælge)]]',
	'createacct-captcha-help-url' => '{{ns:Project}}:Anmod om en konto',
	'createacct-imgcaptcha-help' => 'Kan du ikke se billedet? [[{{MediaWiki:createacct-captcha-help-url}}|Anmod om en konto]]',
);

/** German (Deutsch)
 * @author Church of emacs
 * @author Geitost
 * @author Kghbln
 * @author Khaledelmansoury
 * @author MF-Warburg
 * @author Melancholie
 * @author Merlissimo
 * @author Metalhead64
 * @author Nemo bis
 * @author Neverendingo
 * @author Pill
 * @author Purodha
 * @author Raimond Spekking
 * @author Spacebirdy
 * @author The Evil IP address
 * @author Umherirrender
 * @author Απεργός
 */
$messages['de'] = array(
	'wikimediamessages-desc' => 'Ermöglicht spezifische Systemnachrichten für Projekte der Wikimedia Foundation',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=de',
	'sitesupport' => 'Spenden',
	'tooltip-n-sitesupport' => 'Unterstütze uns',
	'specialpages-group-contribution' => 'Spenden/Fundraiser',
	'nstab-creator' => 'Urheber',
	'nstab-institution' => 'Institution',
	'nstab-sequence' => 'Sequenz',
	'nstab-timedtext' => 'Timed Text',
	'group-Ex_Administrator' => 'Ehemalige Administratoren',
	'group-Ex_Administrator-member' => '{{GENDER:$1|Ehemaliger Administrator|Ehemalige Administratorin}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Ehemalige Administratoren',
	'group-Ex_Bureaucrat' => 'Ehemalige Bürokraten',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|Ehemaliger Bürokrat|Ehemalige Bürokratin}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Ehemalige Bürokraten',
	'group-Image-reviewer' => 'Dateiprüfer',
	'group-Image-reviewer-member' => '{{GENDER:$1|Dateiprüfer|Dateiprüferin}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:Dateiprüfer',
	'group-OTRS-member' => 'OTRS-Mitglieder',
	'group-OTRS-member-member' => '{{GENDER:$1|OTRS-Mitglied}}',
	'grouppage-OTRS-member' => '{{ns:project}}:OTRS-Mitglieder',
	'group-abusefilter' => 'Missbrauchsfilter-Bearbeiter',
	'group-abusefilter-member' => '{{GENDER:$1|Missbrauchsfilter-Bearbeiter|Missbrauchsfilter-Bearbeiterin}}',
	'grouppage-abusefilter' => '{{ns:project}}:Missbrauchsfilter-Bearbeiter',
	'group-accountcreator' => 'Benutzerkontenersteller',
	'group-accountcreator-member' => '{{GENDER:$1|Benutzerkontenersteller|Benutzerkontenerstellerin}}',
	'grouppage-accountcreator' => '{{ns:project}}:Benutzerkontenersteller',
	'group-arbcom' => 'Mitglieder des Schiedsgerichts',
	'group-arbcom-member' => '{{GENDER:$1|Mitglied des Schiedsgerichts}}',
	'grouppage-arbcom' => '{{ns:project}}:Mitglieder des Schiedsgerichts',
	'group-autopatrolled' => 'Automatische Kontrollierer',
	'group-autopatrolled-member' => '{{GENDER:$1|Automatischer Kontrollierer|Automatische Kontrolliererin}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Automatische Kontrollierer',
	'group-autoreviewer' => 'Passive Prüfer',
	'group-autoreviewer-member' => '{{GENDER:$1|Passiver Prüfer|Passive Prüferin}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Passive Prüfer',
	'group-bigexport' => 'Großexporteure',
	'group-bigexport-member' => '{{GENDER:$1|Großexporteur|Großexporteurin}}',
	'grouppage-bigexport' => '{{ns:project}}:Großexporteure',
	'group-botadmin' => 'Bots mit Administratorrechten',
	'group-botadmin-member' => '{{GENDER:$1|Bot mit Administratorrechten}}',
	'grouppage-botadmin' => '{{ns:project}}:Bots mit Administratorrechten',
	'group-confirmed' => 'Bestätigte Benutzer',
	'group-confirmed-member' => '{{GENDER:$1|Bestätigter Benutzer|Bestätigte Benutzerin}}',
	'grouppage-confirmed' => '{{ns:project}}:Bestätigte Benutzer',
	'group-editprotected' => 'Seitenschutz-Ausgenommene',
	'group-editprotected-member' => '{{GENDER:$1|Seitenschutz-Ausgenommener|Seitenschutz-Ausgenommene}}',
	'grouppage-editprotected' => '{{ns:project}}:Seitenschutz-Ausgenommene',
	'group-eliminator' => 'Löscher',
	'group-eliminator-member' => '{{GENDER:$1|Löscher|Löscherin}}',
	'grouppage-eliminator' => '{{ns:project}}:Löscher',
	'group-filemover' => 'Dateiverschieber',
	'group-filemover-member' => '{{GENDER:$1|Dateiverschieber|Dateiverschieberin}}',
	'grouppage-filemover' => '{{ns:project}}:Dateiverschieber',
	'group-flood' => 'Botbenutzer',
	'group-flood-member' => '{{GENDER:$1|Botbenutzer|Botbenutzerin}}',
	'grouppage-flood' => '{{ns:project}}:Botbenutzer',
	'group-founder' => 'Gründer',
	'group-founder-member' => '{{GENDER:$1|Gründer}}',
	'grouppage-founder' => '{{ns:project}}:Gründer',
	'group-import' => 'Importeure',
	'group-import-member' => '{{GENDER:$1|Importeur|Importeurin}}',
	'grouppage-import' => '{{ns:project}}:Importeure',
	'group-interface_editor' => 'Benutzeroberflächen-Bearbeiter',
	'group-interface_editor-member' => '{{GENDER:$1|Benutzeroberflächen-Bearbeiter|Benutzeroberflächen-Bearbeiterin}}',
	'grouppage-interface_editor' => '{{ns:project}}:Benutzeroberflächen-Bearbeiter',
	'group-ipblock-exempt' => 'IP-Sperren-Ausgenommene',
	'group-ipblock-exempt-member' => '{{GENDER:$1|IP-Sperren-Ausgenommener|IP-Sperren-Ausgenommene}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP-Sperren-Ausgenommene',
	'group-patroller' => 'Kontrolleure',
	'group-patroller-member' => '{{GENDER:$1|Kontrolleur|Kontrolleurin}}',
	'grouppage-patroller' => '{{ns:project}}:Kontrolleure',
	'group-researcher' => 'Rechercheur',
	'group-researcher-member' => '{{GENDER:$1|Rechercheur|Rechercheurin}}',
	'grouppage-researcher' => '{{ns:project}}:Rechercheur',
	'group-rollbacker' => 'Zurücksetzer',
	'group-rollbacker-member' => '{{GENDER:$1|Zurücksetzer|Zurücksetzerin}}',
	'grouppage-rollbacker' => '{{ns:project}}:Zurücksetzer',
	'group-transwiki' => 'Transwiki-Importeure',
	'group-transwiki-member' => '{{GENDER:$1|Transwiki-Importeur|Transwiki-Importeurin}}',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki-Importeure',
	'group-trusted' => 'Vertrauenswürdige Benutzer',
	'group-trusted-member' => '{{GENDER:$1|Vertrauenswürdiger Benutzer|Vertrauenswürdige Benutzerin}}',
	'grouppage-trusted' => '{{ns:project}}:Vertrauenswürdige Benutzer',
	'group-uploader' => 'Hochlader',
	'group-uploader-member' => '{{GENDER:$1|Hochlader|Hochladerin}}',
	'grouppage-uploader' => '{{ns:project}}:Hochlader',
	'group-Global_bot' => 'Globale Bots',
	'group-Global_bot-member' => '{{GENDER:$1|Globaler Bot}}',
	'group-Global_rollback' => 'Globale Zurücksetzer',
	'group-Global_rollback-member' => '{{GENDER:$1|Globaler Zurücksetzer|Globale Zurücksetzerin}}',
	'grouppage-Global_rollback' => 'm:Global rollback/de',
	'group-Global_sysops' => 'Globale Administratoren',
	'group-Global_sysops-member' => '{{GENDER:$1|Globaler Administrator|Globale Administratorin}}',
	'grouppage-Global_sysops' => 'm:Global sysops/de',
	'group-Ombudsmen' => 'Ombudspersonen',
	'group-Ombudsmen-member' => '{{GENDER:$1|Ombudsperson}}',
	'grouppage-Ombudsmen' => 'm:Ombudsman commission/de',
	'group-Staff' => 'Mitarbeiter',
	'group-Staff-member' => '{{GENDER:$1|Mitarbeiter|Mitarbeiterin}}',
	'group-editinterface' => 'Benutzeroberflächen-Bearbeiter',
	'group-editinterface-member' => '{{GENDER:$1|Benutzeroberflächen-Bearbeiter|Benutzeroberflächen-Bearbeiterin}}',
	'group-steward' => 'Stewards',
	'group-steward-member' => '{{GENDER:$1|Steward}}',
	'grouppage-steward' => 'm:Stewards/de',
	'group-sysadmin' => 'Systemadministratoren',
	'group-sysadmin-member' => '{{GENDER:$1|Systemadministrator|Systemadministratorin}}',
	'group-API_High_Limit_Requestor' => 'Hohes-API-Limit-Benötigender',
	'group-API_High_Limit_Requestor-member' => '{{GENDER:$1|Hohes-API-Limit-Benötigender|Hohes-API-Limit-Benötigende}}',
	'group-Indic_Bots' => 'Bots für indische Sprachen',
	'group-Indic_Bots-member' => '{{GENDER:$1|Bot für indische Sprachen}}',
	'group-New_wikis_importer' => 'Neuwikiimporteure',
	'group-New_wikis_importer-member' => '{{GENDER:$1|Neuwikiimporteur|Neuwikiimporteurin}}',
	'group-global-ipblock-exempt' => 'Globale IP-Sperren-Ausgenommene',
	'group-global-ipblock-exempt-member' => '{{GENDER:$1|Globaler IP-Sperren-Ausgenommener|Globale IP-Sperren-Ausgenommene}}',
	'group-recursive-export' => 'Rekursive Exporteure',
	'group-recursive-export-member' => '{{GENDER:$1|Rekursiver Exporteur|Rekursive Exporteurin}}',
	'group-translationadmin' => 'Übersetzungsadministratoren',
	'group-translationadmin-member' => '{{GENDER:$1|Übersetzungsadministrator|Übersetzungsadministratorin}}',
	'grouppage-translationadmin' => '{{ns:project}}:Übersetzungsadministratoren',
	'group-centralnoticeadmin' => 'Zentrale-Meldungen-Administratoren',
	'group-centralnoticeadmin-member' => '{{GENDER:$1|Zentrale-Meldungen-Administrator|Zentrale-Meldungen-Administratorin}}',
	'grouppage-centralnoticeadmin' => '{{ns:project}}:Zentrale-Meldungen-Administratoren',
	'group-coder' => 'Programmierer',
	'group-coder-member' => '{{GENDER:$1|Programmierer|Programmiererin}}',
	'grouppage-coder' => '{{ns:project}}:Programmierer',
	'group-inactive' => 'Inaktive Benutzer',
	'group-inactive-member' => '{{GENDER:$1|Inaktiver Benutzer|Inaktive Benutzerin}}',
	'grouppage-inactive' => '{{ns:project}}:Inaktive Benutzer',
	'wikimedia-copyright' => 'Der Text ist unter der Lizenz <a href="//creativecommons.org/licenses/by-sa/3.0/deed.de">„Creative Commons Attribution/Share-Alike“</a> verfügbar; zusätzliche Bedingungen können gelten.
Einzelheiten sind in den <a href="//wikimediafoundation.org/wiki/Nutzungsbedingungen">Nutzungsbedingungen</a> beschrieben.',
	'wikidata-copyright' => 'Alle strukturierten Daten des Artikel- und Eigenschaftsnamensraums sind verfügbar unter der <a href="//creativecommons.org/publicdomain/zero/1.0/deed.de" title="Definition der Creative-Commons-CC0-Lizenz">Creative-Commons-CC0-Lizenz</a>;
Text in anderen Namensräumen ist verfügbar unter der <a href="//creativecommons.org/licenses/by-sa/3.0/deed.de" title="Definition der Creative-Commons-Attribution/Share-Alike-Lizenz">Creative-Commons-Attribution/Share-Alike-Lizenz</a>;
zusätzliche Bedingungen können anwendbar sein.
Siehe die <a href="//wikimediafoundation.org/wiki/Terms_of_Use/de" title="Nutzungsbedingungen der Wikimedia Foundation">Nutzungsbedingungen</a> für Einzelheiten.',
	'wikidata-shortcopyrightwarning' => 'Durch Klicken auf „{{int:wikibase-save}}“ stimmst du den [//wikimediafoundation.org/wiki/Terms_of_Use/de Nutzungsbedingungen] und unwiderruflich der Veröffentlichung deines Beitrags unter der [//creativecommons.org/publicdomain/zero/1.0/deed.de CC0-Lizenz] zu.',
	'wikimedia-copyrightwarning' => "Mit dem Klick auf die Schaltfläche „{{int:savearticle}}“ erklärst du dich mit den [//wikimediafoundation.org/wiki/Terms_of_Use Nutzungsbedingungen] einverstanden und lizenzierst deine Bearbeitung unwiderruflich unter der Lizenz [//creativecommons.org/licenses/by-sa/3.0/deed.de ''Creative Commons'' „Namensnennung / Weitergabe unter gleichen Bedingungen 3.0“] und der [//de.wikipedia.org/wiki/Wikipedia:GNU_Free_Documentation_License GFDL].
Du stimmst zu, dass ein Hyperlink oder eine URL zur Seite für die notwendige Zuschreibung, gemäß der ''Creative-Commons''-Lizenz, ausreichend ist.",
	'wikibase-sitelinks-wikivoyage' => 'Wikivoyage-Seiten, die auf dieses Objekt verlinkt sind',
	'cant-delete-main-page' => 'Die Hauptseite kann weder gelöscht noch verschoben werden.',
	'wikimedia-translationnotifications-signup-legal' => 'Mit Angabe dieser Informationen stimmst du zu, dass die Wikimedia Foundation dich bezüglich Themen im Zusammenhang mit Übersetzungen und andere Informationen zu Wikimedia kontaktieren kann, die unserer Meinung nach für dich von Interesse sind. Du stimmst zudem zu, dass deine Daten in den Vereinigten Staaten von Amerika gespeichert werden können und unserer [https://wikimediafoundation.org/wiki/Privacy_policy Datenschutzrichtlinie] unterliegen.',
	'upload-more-photos-of-this-monument' => 'Weitere Fotos dieses Denkmals hochladen',
	'extdist-branch-master' => 'master (aktuellste Entwicklerversion)',
	'extdist-branch-REL1_21' => '1.21 (aktuellste stabile MediaWiki-Version)',
	'createacct-helpusername-url' => '{{ns:Project}}:Benutzernamensrichtlinie',
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(Auswahlhilfe)]]',
	'createacct-captcha-help-url' => '{{ns:Project}}:Benutzerkontenanträge',
	'createacct-imgcaptcha-help' => 'Das Bild ist nicht sichtbar? [[{{MediaWiki:createacct-captcha-help-url}}|Beantrage ein Benutzerkonto]].',
	'wikimedia-developers' => 'Entwickler',
);

/** Swiss High German (Schweizer Hochdeutsch)
 * @author Geitost
 * @author Nemo bis
 */
$messages['de-ch'] = array(
	'group-bigexport' => 'Grossexporteure',
	'group-bigexport-member' => '{{GENDER:$1|Grossexporteur|Grossexporteurin}}',
	'grouppage-bigexport' => '{{ns:project}}:Grossexporteure',
	'wikimedia-copyrightwarning' => "Mit dem Klick auf die Schaltfläche «{{int:savearticle}}» erklärst du dich mit den [//wikimediafoundation.org/wiki/Terms_of_Use Nutzungsbedingungen] einverstanden und lizenzierst deine Bearbeitung unwiderruflich unter der Lizenz [//creativecommons.org/licenses/by-sa/3.0/deed.de ''Creative Commons'' «Namensnennung / Weitergabe unter gleichen Bedingungen 3.0»] und der [//de.wikipedia.org/wiki/Wikipedia:GNU_Free_Documentation_License GFDL].
Du stimmst zu, dass ein Hyperlink oder eine URL zur Seite für die notwendige Zuschreibung, gemäss der ''Creative-Commons''-Lizenz, ausreichend ist.",
);

/** German (formal address) (Deutsch (Sie-Form)‎)
 * @author Kghbln
 * @author Nemo bis
 * @author Raimond Spekking
 * @author Umherirrender
 */
$messages['de-formal'] = array(
	'tooltip-n-sitesupport' => 'Unterstützen Sie uns',
	'wikimedia-copyrightwarning' => 'Mit dem Klick auf die Schaltfläche „{{int:savearticle}}“ erklären Sie sich mit den [//wikimediafoundation.org/wiki/Terms_of_Use Nutzungsbedingungen] einverstanden und lizenzieren Ihre Bearbeitung unwiderruflich unter der Lizenz [//creativecommons.org/licenses/by-sa/3.0/deed.de Creative Commons „Namensnennung / Weitergabe unter gleichen Bedingungen 3.0“] und der [//de.wikipedia.org/wiki/Wikipedia:GNU_Free_Documentation_License GFDL].
Sie stimmen zu, dass ein Hyperlink oder eine URL zur Seite für die notwendige Zuschreibung, gemäß der Creative-Commons-Lizenz, ausreichend ist.',
	'wikimedia-translationnotifications-signup-legal' => 'Mit Angabe dieser Informationen stimmen Sie zu, dass die Wikimedia Foundation Sie bezüglich Themen im Zusammenhang mit Übersetzungen und andere Informationen zu Wikimedia kontaktieren kann, die unserer Meinung nach für Sie von Interesse sind. Sie stimmen zudem zu, dass Ihre Daten in den Vereinigten Staaten von Amerika gespeichert werden können und unserer [https://wikimediafoundation.org/wiki/Privacy_policy Datenschutzrichtlinie] unterliegen.',
);

/** Zazaki (Zazaki)
 * @author Aspar
 * @author Erdemaslancan
 * @author Mirzali
 * @author Nemo bis
 * @author Xoser
 */
$messages['diq'] = array(
	'wikimediamessages-desc' => 'mesajê xususi yê wikimedyayi',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=diq',
	'sitesupport' => 'Beğş',
	'tooltip-n-sitesupport' => 'paşt bıde ma',
	'specialpages-group-contribution' => 'Beğş/Peredaoğ',
	'nstab-creator' => 'Vıraştoğ',
	'nstab-institution' => 'Daire',
	'nstab-sequence' => 'Rate',
	'nstab-timedtext' => 'NusneDemi',
	'group-Ex_Administrator' => 'Hızmetkarê verêni',
	'group-Ex_Administrator-member' => '{{GENDER:$1|admino verên}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:admino verên',
	'group-Ex_Bureaucrat' => 'Burokratê verêni',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|burokrato verên}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:burokrato verên',
	'group-Image-reviewer' => 'Weyndarê resiman',
	'group-Image-reviewer-member' => '{{GENDER:$1|rexnekarê resimi}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:Weyndarê resiman',
	'group-OTRS-member' => "Ezayê OTRS'i",
	'group-OTRS-member-member' => "{{GENDER:$1|Ezay OTRS'i}}",
	'grouppage-OTRS-member' => "{{ns:project}}:Ezayê OTRS'i",
	'group-abusefilter' => 'serkarê filtreyê suistimali',
	'group-abusefilter-member' => '{{GENDER:$1|editor filtreyê bilenderi}}',
	'grouppage-abusefilter' => '{{ns:project}}:serkarê filtreyê suitimali',
	'group-accountcreator' => 'vıraştoxê hesabi',
	'group-accountcreator-member' => '{{GENDER:$1|Hesab vıraşteber}}',
	'grouppage-accountcreator' => '{{ns:project}}:vıraştoxê hesabi',
	'group-arbcom' => 'Ezayanê komiteyê arbitasyon',
	'group-arbcom-member' => '{{GENDER:$1|ezay tahkimi}}',
	'grouppage-arbcom' => '{{ns:project}}:Ezayanê komiteyê arbitasyon',
	'group-autopatrolled' => 'Oto-kontroloğî',
	'group-autopatrolled-member' => '{{GENDER:$1|oto-kontrolkar}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Oto-kontroloğ',
	'group-autoreviewer' => 'oto-rexnekeri',
	'group-autoreviewer-member' => '{{GENDER:$1|oto-rexneker}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Oto-rexneker',
	'group-bigexport' => 'ixracatkero gırd',
	'group-bigexport-member' => '{{GENDER:$1|ixracatkero gırd}}',
	'grouppage-bigexport' => '{{ns:project}}:ixracatkero gırd',
	'group-botadmin' => 'botê heqandê admina',
	'group-botadmin-member' => '{{GENDER:$1|botê heqandê admina}}',
	'grouppage-botadmin' => '{{ns:project}}:botê heqandê admina',
	'group-confirmed' => 'Karberi araşteni',
	'group-confirmed-member' => '{{GENDER:$1|karberi araşteni}}',
	'grouppage-confirmed' => '{{ns:project}}:karberê ke biye araşt',
	'group-editprotected' => 'Nustekaranê pelanê ke kilit biyo',
	'group-editprotected-member' => '{{GENDER:$1|editorê pelandê stara}}',
	'grouppage-editprotected' => '{{ns:project}}:Nustekaranê pelanê ke kilit biyo',
	'group-eliminator' => 'Bestereni',
	'group-eliminator-member' => '{{GENDER:$1|besterner}}',
	'grouppage-eliminator' => '{{ns:project}}:besterner',
	'group-filemover' => 'Berdoxê dosyayi',
	'group-filemover-member' => '{{GENDER:$1|Dosya berdkar}}',
	'grouppage-filemover' => '{{ns:project}}:Hewadarê Dosya',
	'group-flood' => 'Boti',
	'group-flood-member' => '{{GENDER:$1|bot karber}}',
	'grouppage-flood' => '{{ns:project}}:Boti',
	'group-founder' => 'ronayoxi',
	'group-founder-member' => '{{GENDER:$1|Sazkar}}',
	'grouppage-founder' => '{{ns:project}}:ronayoxi',
	'group-import' => 'kırıştoxê zerre kerdışi',
	'group-import-member' => '{{GENDER:$1|miyan berdkar}}',
	'grouppage-import' => '{{ns:project}}:kırıştoxê zerre kerdışi',
	'group-interface_editor' => 'Serkaranê interfaceyi',
	'group-interface_editor-member' => '{{GENDER:$1|serkarê rıasayışi}}',
	'grouppage-interface_editor' => '{{ns:project}}:Serkaranê interfaceyi',
	'group-ipblock-exempt' => 'muafiyetê ver-gırewtışê Ipyi',
	'group-ipblock-exempt-member' => "{{GENDER:$1|mu'afiyetê ver-gırewtışê IPyi}}",
	'grouppage-ipblock-exempt' => '{{ns:project}}:muafiyetê ver-gırewtışê IPyi',
	'group-patroller' => 'dewriyeyi',
	'group-patroller-member' => '{{GENDER:$1|dewriye}}',
	'grouppage-patroller' => '{{ns:project}}:Oto-kontroloğ',
	'group-researcher' => 'Cigeyroxan',
	'group-researcher-member' => '{{GENDER:$1|Cigeyroxan}}',
	'grouppage-researcher' => '{{ns:project}}:Cigeyroxan',
	'group-rollbacker' => 'açarnayoxî',
	'group-rollbacker-member' => '{{GENDER:$1|peyd ardışkar}}',
	'grouppage-rollbacker' => '{{ns:project}}:açarnayoxi',
	'group-transwiki' => 'kırıştoxê zerrekerdışi ye benateyê wikiyani',
	'group-transwiki-member' => '{{GENDER:$1|wiki ra wiki berder}}',
	'grouppage-transwiki' => '{{ns:project}}:kırıştoxê zerrekerdışi yê benateyê wikiyani',
	'group-trusted' => 'Karbero emin',
	'group-trusted-member' => '{{GENDER:$1|karbero emin}}',
	'grouppage-trusted' => '{{ns:project}}:Karbero emin',
	'group-Global_bot' => 'botê globali',
	'group-Global_bot-member' => '{{GENDER:$1|boto global}}',
	'group-Global_rollback' => 'açarnayoxê globali',
	'group-Global_rollback-member' => '{{GENDER:$1|peyd ardışo global}}',
	'group-Global_sysops' => 'Sysopanê globali',
	'group-Global_sysops-member' => '{{GENDER:$1|sysopo global}}',
	'group-Ombudsmen' => 'hekemê xoseri',
	'group-Ombudsmen-member' => '{{GENDER:$1|Hekemo xoser}}',
	'group-Staff' => 'wezifedari',
	'group-Staff-member' => 'wezifedar',
	'group-editinterface' => 'serkarê interfaceyi',
	'group-editinterface-member' => '{{GENDER:$1|serkarê rıasayışi}}',
	'group-steward' => 'serkari/kehyayi',
	'group-steward-member' => '{{GENDER:$1|kahya}}',
	'group-sysadmin' => 'serkarê sistemi',
	'group-sysadmin-member' => '{{GENDER:$1|adminê sistemi}}',
	'group-API_High_Limit_Requestor' => 'API berz limit wazayış',
	'group-API_High_Limit_Requestor-member' => '{{GENDER:$1|API limito berz wastış}}',
	'group-Indic_Bots' => 'Hindik boti',
	'group-Indic_Bots-member' => '{{GENDER:$1|hindik boto}}',
	'group-New_wikis_importer' => 'Wikiya newi definayış',
	'group-New_wikis_importer-member' => '{{GENDER:$1|wikiya newi definayış}}',
	'group-global-ipblock-exempt' => 'Global IP lıngeştış ra muafo',
	'group-global-ipblock-exempt-member' => "{{GENDER:$1|mu'afiyetê ver-gırewtışê IPyi}}",
	'group-recursive-export' => 'Teberdarê xo newekerden',
	'group-recursive-export-member' => '{{GENDER:$1|teberdarê xo newekerden}}',
	'group-translationadmin' => 'Adminê açarnayışi',
	'group-translationadmin-member' => '{{GENDER:$1|Adminê açarnayışi}}',
	'grouppage-translationadmin' => '{{ns:project}}:Adminê açarnayışi',
	'group-coder' => 'kod kerdoxi',
	'group-coder-member' => '{{GENDER:$1|Kodkar}}',
	'group-inactive' => 'karber ê ke aktif niyê',
	'group-inactive-member' => '{{GENDER:$1|Karbero qulxan}}',
	'grouppage-inactive' => '{{ns:project}}:karber ê ke aktif niyê',
	'wikimedia-copyright' => 'nuşte, bınê ıney <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/lisansê share-Alikeyi</a> de yo; şertê bini tetbiq beni. qey teferru\'ati bıewnê <a href="//wikimediafoundation.org/wiki/Terms_of_Use">şertê karkerdışi</a>na.',
	'wikimedia-copyrightwarning' => "Ebe tıknayışê gocega \"{{int:savearticle}}\", şıma [//wikimediafoundation.org/wiki/Terms_of_Use Terms of Use] qebul kenê, u şıma iştıraqê xoyo ke bınê [//creativecommons.org/licenses/by-sa/3.0/ CC-BY-SA 3.0 License] u  [//www.gnu.org/copyleft/fdl.html GFDL]i de serbest verdayo ra u peysernêgêriyeno, qebul kenê.
Yew gıreyê pırdi ya zi bınê ''URL Creative Commons''i meyilo kafi ke esto, qebul kenê.",
	'cant-delete-main-page' => 'Nêbesterneyêno yana pela seri nêahulneyêno.',
	'wikimedia-translationnotifications-signup-legal' => "Açarnayışê weqıf da Wikimedia yana heq dê wikimedia zewbi meselan dı malumat dayış u grotışi rê şimaya irtibat kewtışi icab keno. Malumatê şıma Dewletanê Amrikayê Yewbiyayey'an dı depo benê u [https://wikimediafoundation.org/wiki/Privacy_policy politikayê nımıtışi]  deye şıma şenê eney kebul kerê.",
	'upload-more-photos-of-this-monument' => 'Na zıyarık  ra zewbi fotrafi barkerê',
	'createacct-helpusername-url' => '{{ns:Project}}:Politikaya_nameyê_karberan',
	'createacct-captcha-help-url' => '{{ns:Project}}:Yew hesab bıwaze',
	'createacct-imgcaptcha-help' => 'Asayışi nêvênena? [[{{MediaWiki:createacct-captcha-help-url}}|Yew hesab bıwaze]]',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 * @author Nemo bis
 * @author Pe7er
 * @author Qualia
 */
$messages['dsb'] = array(
	'wikimediamessages-desc' => 'Zdźělenja specifiske za Wikimediju',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=dsb',
	'sitesupport' => 'Dary',
	'tooltip-n-sitesupport' => 'Pódpěraj nas',
	'specialpages-group-contribution' => 'Pśinoski/Pósćiwańska akcija',
	'nstab-creator' => 'Stwóriśel',
	'nstab-institution' => 'Institucija',
	'nstab-sequence' => 'Sekwenca',
	'nstab-timedtext' => 'TimedText',
	'group-Ex_Administrator' => 'Něgajšne administratory',
	'group-Ex_Administrator-member' => '{{GENDER:$1|něgajšny administrator|něgajšna administratorka}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Něgajšne administratory',
	'group-Ex_Bureaucrat' => 'Něgjašne běrokraty',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|něgajšny běrokrat|něgajšna běrokratka}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Něgajšne běrokraty',
	'group-Image-reviewer' => 'Pśeglědowarje wobrazow',
	'group-Image-reviewer-member' => '{{GENDER:$1|pśeglědowaŕ|pśeglědowarka}} wobrazow',
	'grouppage-Image-reviewer' => '{{ns:project}}:Pśeglědowarje wobrazow',
	'group-OTRS-member' => 'Cłonki OTRS',
	'group-OTRS-member-member' => '{{GENDER:$1|OTRS-cłon|OTRS-cłonka}}',
	'grouppage-OTRS-member' => '{{ns:project}}:Cłonki OTRS',
	'group-abusefilter' => 'Wobźěłarje znjewužywańskego filtra',
	'group-abusefilter-member' => '{{GENDER:$1|wobźěłaŕ znjewužywańskego filtra|wobźěłarka znjewužywańskego filtra}}',
	'grouppage-abusefilter' => '{{ns:project}}:Wobźěłarje znjewužywańskego filtra',
	'group-accountcreator' => 'Kontowe załožarje',
	'group-accountcreator-member' => '{{GENDER:$1|kontowy załožaŕ|kontowa załožarka}}',
	'grouppage-accountcreator' => '{{ns:project}}:Kontowe załožarje',
	'group-arbcom' => 'Cłonki wujadnarskeje komisije',
	'group-arbcom-member' => '{{GENDER:$1|cłonk wujadnarskeje komisije|cłonka wujadnarskeje komisije}}',
	'grouppage-arbcom' => '{{ns:project}}:Cłonki wujadnarskeje komisije',
	'group-autopatrolled' => 'Awtomatiske doglědowarje',
	'group-autopatrolled-member' => '{{GENDER:$1|awtomatiski doglědowaŕ|awtomatiska doglědowarka}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Automatiske doglědowarje',
	'group-autoreviewer' => 'Awtomatiske kontrolery',
	'group-autoreviewer-member' => '{{GENDER:$1|awtomatiski kontroler|awtomatiska kontrolerka}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Awotomatiske kontrolery',
	'group-bigexport' => 'Wjelikoeksportery',
	'group-bigexport-member' => '{{GENDER:$1|wjelikoeksporter|wjelikoeksporterka}}',
	'grouppage-bigexport' => '{{ns:project}}:Wjelikoeksportery',
	'group-botadmin' => 'Boty z pšawami administratora',
	'group-botadmin-member' => '{{GENDER:$1|bot z pšawami administratora}}',
	'grouppage-botadmin' => '{{ns:project}}:Boty z pšawami administratora',
	'group-confirmed' => 'Wobkšuśone wužywarje',
	'group-confirmed-member' => '{{GENDER:$1|wobkšuśony wužywaŕ|wobkšuśona wužywarka}}',
	'grouppage-confirmed' => '{{ns:project}}:Wobkšuśone wužywarje',
	'group-editprotected' => 'Wobźěłarje šćitanych bokow',
	'group-editprotected-member' => '{{GENDER:$1|wobźěłaŕ|wobźěłarka}} šćitanych bokow',
	'grouppage-editprotected' => '{{ns:project}}:Wobźěłarje šćitanych bokow',
	'group-eliminator' => 'Lašowarje',
	'group-eliminator-member' => '{{GENDER:$1|lašowaŕ|lašowarka}}',
	'grouppage-eliminator' => '{{ns:project}}:Lašowaŕ',
	'group-filemover' => 'Pśesuwarje datajow',
	'group-filemover-member' => '{{GENDER:$1|pśesuwaŕ|pśesuwarka}} datajow',
	'grouppage-filemover' => '{{ns:project}}:Pśesuwarje datajow',
	'group-flood' => 'Botowe wužywarje',
	'group-flood-member' => '{{GENDER:$1|botowy wužywaŕ|botowa wužywarka}}',
	'grouppage-flood' => '{{ns:project}}:Botowe wužywarje',
	'group-founder' => 'Załožarje',
	'group-founder-member' => '{{GENDER:$1|załožaŕ|załožarka}}',
	'grouppage-founder' => '{{ns:project}}:Załožarje',
	'group-import' => 'Importery',
	'group-import-member' => '{{GENDER:$1|importer|importerka}}',
	'grouppage-import' => '{{ns:project}}:Importery',
	'group-interface_editor' => 'Wobźěłarje wužywarskego pówjercha',
	'group-interface_editor-member' => '{{GENDER:$1|wobźěłaŕ|wobźěłarka}} wužywarskego pówjercha',
	'grouppage-interface_editor' => '{{ns:project}}:Wobźěłarje wužywarskego pówjercha',
	'group-ipblock-exempt' => 'Wuwześe z blokěrowanja IP',
	'group-ipblock-exempt-member' => 'Z blokěrowanja IP {{GENDER:$1|wuwzety|wuwzeta}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Wuwześe z blokěrowanja IP',
	'group-patroller' => 'Doglědowarje',
	'group-patroller-member' => '{{GENDER:$1|doglědowaŕ|doglědowarka}}',
	'grouppage-patroller' => '{{ns:project}}:Doglědowarje',
	'group-researcher' => 'Rešeršěrowarje',
	'group-researcher-member' => '{{GENDER:$1|rešeršěrowaŕ|rešeršěrowarka}}',
	'grouppage-researcher' => '{{ns:project}}:Rešeršowarje',
	'group-rollbacker' => 'Slědkstajarje',
	'group-rollbacker-member' => '{{GENDER:$1|slědkstajaŕ|slědkstajarka}}',
	'grouppage-rollbacker' => '{{ns:project}}:Slědkstajarje',
	'group-transwiki' => 'Transwiki importery',
	'group-transwiki-member' => '{{GENDER:$1|transwiki-importer|transwiki-importerka}}',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki importery',
	'group-trusted' => 'Dowěry gódne wužywarje',
	'group-trusted-member' => '{{GENDER:$1|dowěry gódny wužywaŕ|dowěry gódna wužywarka}}',
	'grouppage-trusted' => '{{ns:project}}:Dowěry gódne wužywarje',
	'group-Global_bot' => 'Globalne bośiki',
	'group-Global_bot-member' => '{{GENDER:$1|globalny bot}}',
	'group-Global_rollback' => 'Globalne slědkstajarje',
	'group-Global_rollback-member' => '{{GENDER:$1|globalny slědkstajaŕ|globalna slědkstajarka}}',
	'group-Global_sysops' => 'Globalne administratory',
	'group-Global_sysops-member' => '{{GENDER:$1|globalny administrator|globalna administratorka}}',
	'group-Ombudsmen' => 'Ombudsniki',
	'group-Ombudsmen-member' => '{{GENDER:$1|ombudsnik|ombudsnica}}',
	'group-Staff' => 'Sobuźěłaśerje',
	'group-Staff-member' => 'sobuźěłaśerje',
	'group-editinterface' => 'Wužywarski pówjerch wobźěłaś',
	'group-editinterface-member' => '{{GENDER:$1|wobźěłaŕ|wobźěłarka}} wužywarskego pówjercha',
	'group-steward' => 'Stewardy',
	'group-steward-member' => '{{GENDER:$1|steward|stewardesa}}',
	'group-sysadmin' => 'Systemowe administratory',
	'group-sysadmin-member' => '{{GENDER:$1|systemowy administrator|systemowa administratorka}}',
	'group-translationadmin' => 'Pśełožowańske administratory',
	'group-translationadmin-member' => '{{GENDER:$1|pśełožowaski administrator|pśełožowańska administratorka}}',
	'grouppage-translationadmin' => '{{ns:project}}:Pśełožowańke administratory',
	'group-coder' => 'Programěrarje',
	'group-coder-member' => '{{GENDER:$1|programěraŕ|programěrarka}}',
	'group-inactive' => 'Njeaktiwne wužywarje',
	'group-inactive-member' => '{{GENDER:$1|njeaktiwny wužywaŕ|njeaktiwna wužywarka}}',
	'grouppage-inactive' => '{{ns:project}}:Njeaktiwne wužywarje',
	'wikimedia-copyright' => 'Tekst stoj pód <a href="//creativecommons.org/licenses/by-sa/3.0/">licencu Creative Commons Attribution/Share-Alike</a> k dispoziciji; pśidatne wuměnjenja mógu se nałožowaś. Glědaj <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Wužywańske wuměnjenja</a> za drobnostki.',
	'wikimedia-copyrightwarning' => 'Pśez kliknjenje na tłocašk "{{int:savearticle}}" pśigłosujoš [//wikimediafoundation.org/wiki/Terms_of_Use wužywańskim wuměnjenjam] a wugronijoš definitiwnje swóju wobjadnosć, až stajijoš swój pśinosk pód licency [//creativecommons.org/licenses/by-sa/3.0/ CC-BY-SA 3.0] a [//www.gnu.org/copyleft/fdl.html GFDL].
Pśigłosujoš, až wótkaz abo URL jo dosegajuce pśipokazanje pod licencu Creative Commons.',
	'cant-delete-main-page' => 'Njamóžoš głowny bok wulašowaś abo pśesunuś.',
	'wikimedia-translationnotifications-signup-legal' => 'Pśez pśepowdawanje toś tych informacijow załožbje Wikimedian Foundation zwólijoš do togo, až móžomy se nastupajucy pśełožki abo druge temy, kótarež gibanje Wikimedije nastupaju, z tobu do zwiska stajiś. Zwólijoš do togo, až twóje daty składuju se w Zjadnośonych statach Ameriki a su pśedmjat našych [https://wikimediafoundation.org/wiki/Privacy_policy pšawidłow priwatnosći].',
);

/** Divehi (ދިވެހިބަސް)
 */
$messages['dv'] = array(
	'sitesupport' => 'ޚައިރާތުތައް',
);

/** Dzongkha (ཇོང་ཁ)
 * @author Tenzin
 */
$messages['dz'] = array(
	'sitesupport' => 'ཕན་འདེབས།',
	'tooltip-n-sitesupport' => 'ང་བཅས་ལུ་རྒྱབ་སྐྱོར་འབད།',
);

/** Ewe (eʋegbe)
 * @author Enock4seth
 * @author Natsubee
 */
$messages['ee'] = array(
	'wikimediamessages-desc' => 'Wikimedia duwo ko',
	'sitesupport' => 'Wɔ nunana',
	'tooltip-n-sitesupport' => 'Kpe ɖe mía ŋu',
	'group-accountcreator' => 'Ŋkɔ ŋlɔlawo',
	'group-accountcreator-member' => 'ŋkɔ ŋlɔla',
	'group-flood' => 'Bɔt zãlawo',
	'group-flood-member' => '{{GENDER:$1|bɔt zãla}}',
	'grouppage-flood' => '{{ns:project}}:Bɔt zãlawo',
	'group-founder' => 'Eɖolawo',
	'group-founder-member' => '{{GENDER:$1|eɖola}}',
	'cant-delete-main-page' => 'Wo mate ŋu tutu alo ɖe Axɔ do ŋgɔ o.',
);

/** Greek (Ελληνικά)
 * @author AK
 * @author Badseed
 * @author Consta
 * @author Crazymadlover
 * @author Dead3y3
 * @author Flyax
 * @author Geraki
 * @author Glavkos
 * @author Lou
 * @author Nikosguard
 * @author Omnipaedista
 * @author ZaDiak
 * @author Απεργός
 */
$messages['el'] = array(
	'wikimediamessages-desc' => 'Μηνύματα ειδικά για το Wikimedia',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=el',
	'sitesupport' => 'Δωρεές',
	'tooltip-n-sitesupport' => 'Υποστηρίξτε μας',
	'specialpages-group-contribution' => 'Συνεισφορές/Έρανος',
	'nstab-creator' => 'Δημιουργός',
	'nstab-institution' => 'Ίδρυμα',
	'nstab-sequence' => 'Ακολουθία',
	'nstab-timedtext' => 'ΧρονισμένοΚείμενο',
	'group-Ex_Administrator' => 'Πρώην διαχειριστές',
	'group-Ex_Administrator-member' => '{{GENDER:$1|τέως διαχειριστής}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}: πρώην διαχειριστές',
	'group-Ex_Bureaucrat' => 'Πρώην γραφειοκράτες',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|τέως γραφειοκράτης}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}: πρώην γραφειοκράτες',
	'group-Image-reviewer' => 'Εξεταστές εικόνων',
	'group-Image-reviewer-member' => '{{GENDER:$1|επιθεωρητής εικόνας}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:Εξεταστές εικόνας',
	'group-OTRS-member' => 'μέλη OTRS',
	'group-OTRS-member-member' => '{{GENDER:$1|μέλος OTRS}}',
	'grouppage-OTRS-member' => '{{ns:project}}: OTRS μέλη',
	'group-abusefilter' => 'Τροποποιητές φίλτρων καταχρήσεων',
	'group-abusefilter-member' => '{{GENDER:$1|επεξεργαστής φίλτρων κατάχρησης}}',
	'grouppage-abusefilter' => '{{ns:project}}:Τροποποιητές φίλτρων καταχρήσεων',
	'group-accountcreator' => 'Δημιουργοί λογαριασμών',
	'group-accountcreator-member' => '{{GENDER:$1|δημιουργός λογαριασμού}}',
	'grouppage-accountcreator' => '{{ns:project}}:Δημιουργοί λογαριασμών',
	'group-arbcom' => 'Μέλη της επιτροπής διαιτησίας',
	'group-arbcom-member' => '{{GENDER:$1|μέλος επιτροπής διαιτησίας}}',
	'grouppage-arbcom' => '{{ns:project}}:Μέλη της επιτροπής διαιτησίας',
	'group-autopatrolled' => 'Αυτοεπιτηρητές',
	'group-autopatrolled-member' => '{{GENDER:$1|αυτοεπιτηρητής}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Αυτοεπιτηρητές',
	'group-autoreviewer' => 'Αυτοελεγκτές',
	'group-autoreviewer-member' => '{{GENDER:$1|αυτοελεγκτής}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Αυτοελεγκτές',
	'group-bigexport' => 'Μεγάλοι εξαγωγείς',
	'group-bigexport-member' => '{{GENDER:$1|Μεγάλος|Μεγάλη}} εξαγωγέας',
	'grouppage-bigexport' => '{{ns:project}}:Μεγάλοι εξαγωγείς',
	'group-botadmin' => 'Bot με δικαιώματα διαχειριστή',
	'group-botadmin-member' => '{{GENDER:$1|bot με δικαιώματα διαχειριστή}}',
	'grouppage-botadmin' => '{{ns:project}}:Bot με δικαιώματα διαχειριστή',
	'group-confirmed' => 'Eπιβεβαιωμένοι χρήστες',
	'group-confirmed-member' => '{{GENDER:$1|επιβεβαιωμένος χρήστης}}',
	'grouppage-confirmed' => '{{ns:project}}:Επιβεβαιωμένοι χρήστες',
	'group-editprotected' => 'Σελίδα που προστατεύεται από συντάκτες',
	'group-editprotected-member' => '{{GENDER:$1|προστατευμένος επεξεργαστής σελίδας}}',
	'grouppage-editprotected' => '{{ns:project}}: Προστατευμένη σελίδα από συντάκτες',
	'group-eliminator' => 'Εξαλείφοντες',
	'group-eliminator-member' => 'Εξαλείφοντες',
	'grouppage-eliminator' => '{{ns:project}}:Εξαλείφων',
	'group-filemover' => 'Μετακινητές αρχείου',
	'group-filemover-member' => '{{GENDER:$1|μετακινητής αρχείου}}',
	'grouppage-filemover' => '{{ns:project}}:Μεταφορείς αρχείων',
	'group-flood' => 'Χρήστες bot',
	'group-flood-member' => '{{GENDER:$1|χρήστης bot}}',
	'grouppage-flood' => '{{ns:project}}:Χρήστες bot',
	'group-founder' => 'Ιδρυτές',
	'group-founder-member' => '{{GENDER:$1|ιδρυτής}}',
	'grouppage-founder' => '{{ns:project}}:Ιδρυτές',
	'group-import' => 'Εισαγωγείς',
	'group-import-member' => '{{GENDER:$1|εισαγωγέας}}',
	'grouppage-import' => '{{ns:project}}:Εισαγωγείς',
	'group-interface_editor' => 'Επεξεργαστές της διεπαφής',
	'group-interface_editor-member' => '{{GENDER:$1|επεξεργαστής της διεπαφής}}',
	'grouppage-interface_editor' => '{{ns:project}}:Επεξεργαστές της διεπαφής',
	'group-ipblock-exempt' => 'Απαλλαγές από φραγή IP',
	'group-ipblock-exempt-member' => '{{GENDER:$1|Απαλλαγή από φραγή IP}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Απαλλαγή από φραγή IP',
	'group-patroller' => 'Επιτηρητές',
	'group-patroller-member' => '{{GENDER:$1|επιτηρητής}}',
	'group-researcher' => 'Ερευνητές',
	'group-researcher-member' => '{{GENDER:$1|ερευνητής|ερευνήτής}}',
	'grouppage-researcher' => '{{ns:project}}:Ερευνητές',
	'group-rollbacker' => 'Αναιρέτες',
	'group-rollbacker-member' => '{{GENDER:$1|αναιρέτης}}',
	'grouppage-rollbacker' => '{{ns:project}}:Αναιρέτες',
	'group-transwiki' => 'Εισαγωγείς Transwiki',
	'group-transwiki-member' => '{{GENDER:$1|εισαγωγέας transwiki}}',
	'grouppage-transwiki' => '{{ns:project}}:Εισαγωγείς Transwiki',
	'group-trusted' => 'Έμπιστοι χρήστες',
	'group-trusted-member' => '{{GENDER:$1|έμπιστος χρήστης}}',
	'grouppage-trusted' => '{{ns:project}}:Έμπιστοι χρήστες',
	'group-Global_bot' => 'Καθολικά bots',
	'group-Global_bot-member' => '{{GENDER:$1|καθολικό bot}}',
	'group-Global_rollback' => 'Καθολικοί rollbackers',
	'group-Global_rollback-member' => '{{GENDER:$1|καθολικός αναιρέτης}}',
	'group-Global_sysops' => 'Καθολικοί διαχειριστές',
	'group-Global_sysops-member' => '{{GENDER:$1|καθολικός διαχειριστής}}',
	'group-Ombudsmen' => 'Διαμεσολαβήτες',
	'group-Ombudsmen-member' => '{{GENDER:$1|διαμεσολαβητής}}',
	'group-Staff' => 'Προσωπικό',
	'group-Staff-member' => '{{GENDER:$1|Μέλος προσωπικού}}',
	'group-editinterface' => 'Επεξεργαστής της διεπαφής',
	'group-editinterface-member' => '{{GENDER:$1|επεξεργαστής της διεπαφής}}',
	'group-steward' => 'Επίτροποι',
	'group-steward-member' => '{{GENDER:$1|επίτροπος}}',
	'group-sysadmin' => 'Διαχειριστές συστήματος',
	'group-sysadmin-member' => '{{GENDER:$1|διαχειριστής συστήματος}}',
	'group-translationadmin' => 'Διαχειριστές μετάφρασης',
	'group-translationadmin-member' => '{{GENDER:$1|διαχειριστές μετάφρασης}}',
	'grouppage-translationadmin' => '{{ns:project}}: διαχειριστές μετάφρασης',
	'group-coder' => 'Κωδικογράφοι',
	'group-coder-member' => '{{GENDER:$1|κωδικογράφος}}',
	'group-inactive' => 'Ανενεργοί χρήστες',
	'group-inactive-member' => '{{GENDER:$1|ανενεργός χρήστης}}',
	'grouppage-inactive' => '{{ns:project}}:Ανενεργοί χρήστες',
	'wikimedia-copyright' => 'Όλα τα κείμενα είναι διαθέσιμα υπό την <a href="//creativecommons.org/licenses/by-sa/3.0/deed.el">Creative Commons Attribution/Share-Alike License</a>· μπορεί να ισχύουν και πρόσθετοι όροι. Δείτε τους <a href="//wikimediafoundation.org/wiki/%CE%8C%CF%81%CE%BF%CE%B9_%CE%A7%CF%81%CE%AE%CF%83%CE%B7%CF%82">Όρους Χρήσης</a> για λεπτομέρειες.',
	'wikidata-shortcopyrightwarning' => 'Κάνοντας κλικ στο κουμπί "Αποθήκευση", συμφωνείτε με τους [https://wikimediafoundation.org/wiki/Terms_of_Use όρους χρήσης], και συμφωνείτε αμετάκλητα να θέσετε τη συμβολή σας υπό την  [https://creativecommons.org/publicdomain/zero/1.0/ άδεια CC0].',
	'wikimedia-copyrightwarning' => "Αποθηκεύοντας, συμφωνείτε χωρίς δικαίωμα ανάκλησης για την δημοσίευση του υλικού υπό τους όρους της [//creativecommons.org/licenses/by-sa/3.0/deed.el Creative Commons Attribution/Share-Alike License 3.0] και της [//www.gnu.org/copyleft/fdl.html GFDL]. Συμφωνείτε να σας αποδίδεται η πατρότητα από τρίτους χρήστες, κατ' ελάχιστο μέσω ενός υπερσυνδέσμου ή URL προς την σελίδα στην οποία συνεισφέρετε. Δείτε τους [//wikimediafoundation.org/wiki/%CE%8C%CF%81%CE%BF%CE%B9_%CE%A7%CF%81%CE%AE%CF%83%CE%B7%CF%82 Όρους Χρήσης] για λεπτομέρειες.", # Fuzzy
	'cant-delete-main-page' => 'Δεν μπορείτε να διαγράψετε ή να μετακινήσετε την κύρια σελίδα.',
	'wikimedia-translationnotifications-signup-legal' => 'Συμφωνείτε ότι παρέχοντας στο Ίδρυμα Wikimedia αυτές τις πληροφορίες μπορούμε να επικοινωνήσουμε μαζί σας σχετικά με μεταφράσεις ή άλλα θέματα σχετικά με το κίνημα Wikimedia που πιστεύουμε ότι μπορεί να σας ενδιαφέρουν. Συμφωνείτε ότι οι πληροφορίες σχετικά με εσάς θα αποθηκευτούν στις ΗΠΑ και υπόκείνται στην [https://wikimediafoundation.org/wiki/Privacy_policy πολιτική ιδιωτικότητας] που έχουμε.',
	'upload-more-photos-of-this-monument' => 'Ανεβάσετε περισσότερες φωτογραφίες από αυτό το μνημείο',
	'createacct-helpusername-url' => '{{ns:Project}}:Πολιτική_Ονομασίας_Χρηστών',
	'createacct-captcha-help-url' => '{{ns:Project}}:Αίτημα για λογαριασμό',
);

/** Emiliano-Romagnolo (emiliàn e rumagnòl)
 */
$messages['eml'] = array(
	'sitesupport' => 'Donaziòun',
);

/** Esperanto (Esperanto)
 * @author Airon90
 * @author ArnoLagrange
 * @author Marcos
 * @author Michawiki
 * @author Mihxil
 * @author Petrus Adamus
 * @author Tlustulimu
 * @author Yekrats
 * @author Ziko
 */
$messages['eo'] = array(
	'wikimediamessages-desc' => 'Specifaj mesaĝoj de Wikimedia',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=eo',
	'sitesupport' => 'Donaci',
	'tooltip-n-sitesupport' => 'Subteni nin per mono',
	'specialpages-group-contribution' => 'Kontribuoj/Monkolekto',
	'nstab-creator' => 'Kreinto',
	'nstab-institution' => 'Institucio',
	'nstab-sequence' => 'Sinsekvo',
	'nstab-timedtext' => 'TimedText',
	'group-Ex_Administrator' => 'Iamaj administrantoj',
	'group-Ex_Administrator-member' => '{{GENDER:$1|Iama administranto|Iama administrantino}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Iamaj administrantoj',
	'group-Ex_Bureaucrat' => 'Iamaj burokratoj',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|Iama Burokrato|Iama Burokratino}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Iamaj burokratoj',
	'group-Image-reviewer' => 'Bildaj kontrolantoj',
	'group-Image-reviewer-member' => '{{GENDER:$1|bilda kontrolanto|bilda kontrolantino|bilda kontrolanto}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:Bildaj kontrolantoj',
	'group-OTRS-member' => 'OTRS-anoj',
	'group-OTRS-member-member' => '{{GENDER:$1|OTRS-ano|OTRS-anino|OTRS-ano}}',
	'grouppage-OTRS-member' => '{{ns:project}}:OTRS-anoj',
	'group-abusefilter' => 'Redaktantoj de misuzadaj filtriloj',
	'group-abusefilter-member' => '{{GENDER:$1|redaktanto de misuzadaj filtriloj|redaktantino de misuzadaj filtriloj}}',
	'grouppage-abusefilter' => '{{ns:project}}:Redaktantoj de misuzadaj filtriloj',
	'group-accountcreator' => 'Kreintoj de kontoj',
	'group-accountcreator-member' => '{{GENDER:$1|Kreanto de kontoj|Kreantino de kontoj}}',
	'grouppage-accountcreator' => '{{ns:project}}:Kreintoj de kontoj',
	'group-arbcom' => 'Komitatano de arbitracia komitato',
	'group-arbcom-member' => '{{GENDER:$1|komitatano de arbitracia komitato|komitatanino de arbitracia komitato}}',
	'grouppage-arbcom' => '{{ns:project}}:Komitatantoj de arbitracia komitato',
	'group-autopatrolled' => 'Aŭtomataj patrolantoj',
	'group-autopatrolled-member' => '{{GENDER:$1|Aŭtomata patrolanto|Aŭtomata patrolantino}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Aŭtomataj patrolantoj',
	'group-autoreviewer' => 'Aŭtomataj kontrolantoj',
	'group-autoreviewer-member' => '{{GENDER:$1|aŭtomata kontrolanto|aŭtomata kontrolantino}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Aŭtomataj kontrolantoj',
	'group-bigexport' => 'Grandaj eksportantoj',
	'group-bigexport-member' => '{{GENDER:$1|granda eksportanto|granda eksportantino}}',
	'grouppage-bigexport' => '{{ns:project}}:Grandaj eksportantoj',
	'group-botadmin' => 'Robotoj kun rajtoj de administranto',
	'group-botadmin-member' => '{{GENDER:$1|roboto kun rajtoj de administranto}}',
	'grouppage-botadmin' => '{{ns:project}}:Robotoj kun rajtoj de administranto',
	'group-confirmed' => 'Konfirmitaj uzantoj',
	'group-confirmed-member' => '{{GENDER:$1|konfirmita uzanto|konfirmita uzantino}}',
	'grouppage-confirmed' => '{{ns:project}}:Konfirmitaj uzantoj',
	'group-editprotected' => 'Redaktantoj de protektitaj paĝoj',
	'group-editprotected-member' => '{{GENDER:$1|redaktanto de protektitaj paĝoj|redaktantino de protektitaj paĝoj}}',
	'grouppage-editprotected' => '{{ns:project}}:Redaktantoj de protektitaj paĝoj',
	'group-eliminator' => 'Forigantoj',
	'group-eliminator-member' => '{{GENDER:$1|foriganto|forigantino}}',
	'grouppage-eliminator' => '{{ns:project}}:Foriganto',
	'group-filemover' => 'Dosieraj movantoj',
	'group-filemover-member' => '{{GENDER:$1|dosiera movanto|dosiera movantino}}',
	'grouppage-filemover' => '{{ns:project}}:Dosieraj movantoj',
	'group-flood' => 'Robot-uzantoj',
	'group-flood-member' => '{{GENDER:$1|roboto-uzanto}}',
	'grouppage-flood' => '{{ns:project}}:Robot-uzantoj',
	'group-founder' => 'Fondintoj',
	'group-founder-member' => '{{GENDER:$1|fondinto|fondintino}}',
	'grouppage-founder' => '{{ns:project}}:Fondintoj',
	'group-import' => 'Importantoj',
	'group-import-member' => '{{GENDER:$1|Importanto|Importantino}}',
	'grouppage-import' => '{{ns:project}}:Importantoj',
	'group-interface_editor' => 'Interfacaj redaktantoj',
	'group-interface_editor-member' => '{{GENDER:$1|interfaca redaktanto|interfaca redaktantino}}',
	'grouppage-interface_editor' => '{{ns:project}}:Interfacaj redaktantoj',
	'group-ipblock-exempt' => 'Grupano imuna de IP-forbaro',
	'group-ipblock-exempt-member' => '{{GENDER:$1|Grupano imuna de IP-forbaro|Grupanino imuna de IP-forbaro}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Grupano imuna de IP-forbaro',
	'group-patroller' => 'Patrolantoj',
	'group-patroller-member' => '{{GENDER:$1|patrolanto|patrolantino}}',
	'grouppage-patroller' => '{{ns:project}}:Patrolantoj',
	'group-researcher' => 'Esplorantoj de forigitaĵoj',
	'group-researcher-member' => '{{GENDER:$1|esploranto|esplorantino}}',
	'grouppage-researcher' => '{{ns:project}}:Esploranto de forigitaĵoj',
	'group-rollbacker' => 'Restarigantoj',
	'group-rollbacker-member' => '{{GENDER:$1|restariganto|restarigantino}}',
	'grouppage-rollbacker' => '{{ns:project}}:Restarigantoj',
	'group-transwiki' => 'Importintoj de Transvikio',
	'group-transwiki-member' => '{{GENDER:$1|transvikia importanto|transvikia importantino}}',
	'grouppage-transwiki' => '{{ns:project}}:Transvikiaj importantoj',
	'group-trusted' => 'Fidelaj uzantoj',
	'group-trusted-member' => '{{GENDER:$1|fidela uzanto|fidela uzantino}}',
	'grouppage-trusted' => '{{ns:project}}:Fidelaj uzantoj',
	'group-Global_bot' => 'Ĝeneralaj robotoj',
	'group-Global_bot-member' => '{{GENDER:$1|ĝenerala roboto}}',
	'group-Global_rollback' => 'Transvikia restariganto',
	'group-Global_rollback-member' => '{{GENDER:$1|transvikia restariganto|transvikia restarigantino}}',
	'group-Global_sysops' => 'Ĝeneralaj administrantoj',
	'group-Global_sysops-member' => '{{GENDER:$1|ĝenerala administranto|ĝenerala administrantino}}',
	'group-Ombudsmen' => 'Arbitraciistoj',
	'group-Ombudsmen-member' => '{{GENDER:$1|arbitraciisto|arbitraciistino}}',
	'group-Staff' => 'Dungitaro',
	'group-Staff-member' => 'dungito',
	'group-editinterface' => 'Redakti interfacon',
	'group-editinterface-member' => '{{GENDER:$1|redaktanto de interfaco|redaktantino de interfaco}}',
	'group-steward' => 'Stevardoj',
	'group-steward-member' => '{{GENDER:$1|Stevardo|Stevardino}}',
	'group-sysadmin' => 'Sistemaj administrantoj',
	'group-sysadmin-member' => '{{GENDER:$1|sistema administranto|sistema administrantino}}',
	'group-Indic_Bots-member' => '{{GENDER:$1|indic-roboto}}',
	'group-global-ipblock-exempt-member' => '{{GENDER:$1|Grupano imuna de ĝenerala IP-forbaro|Grupanino imuna de ĝenerala IP-forbaro}}',
	'group-translationadmin' => 'Tradukaj administrantoj',
	'group-translationadmin-member' => '{{GENDER:$1|traduka administranto|traduka administrantino}}',
	'grouppage-translationadmin' => '{{ns:project}}:Tradukaj administrantoj',
	'group-coder' => 'Programistoj',
	'group-coder-member' => '{{GENDER:$1|programisto|programistino}}',
	'group-inactive' => 'Neaktivaj uzantoj',
	'group-inactive-member' => '{{GENDER:$1|neaktiva uzanto|neaktiva uzantino}}',
	'grouppage-inactive' => '{{ns:project}}:Neaktivaj uzantoj',
	'wikimedia-copyright' => 'La teksto disponeblas laŭ la permesilo <a href="//creativecommons.org/licenses/by-sa/3.0/deed.eo">Krea Komunaĵo Atribuite-Samkondiĉe 3.0 Neadaptita</a>; eble aldonaj rajtigoj aplikeblas.
Vidu la <a href="//wikimediafoundation.org/wiki/Terms_of_Use">uzkondiĉojn</a> por detaloj.',
	'wikimedia-copyrightwarning' => 'Konservante, vi konsentas al la [//wikimediafoundation.org/wiki/Terms_of_Use Rajtoj de Uzado], kaj senlime liberigi vian kontribuon laŭ la [//creativecommons.org/licenses/by-sa/3.0/ Permesilo Creative Commons Attribution-ShareAlike 3.0] kaj la [//www.gnu.org/copyleft/fdl.html GFDL].
Vi konsentas ke reuzantoj atribuas al vi almenaŭ per ligilo aŭ URL al la paĝo kontribuita.',
	'cant-delete-main-page' => 'Vi ne povas forigi aŭ movi la ĉefpaĝo.',
	'wikimedia-translationnotifications-signup-legal' => 'Donante ĉi tiun informon al la Fonduso Wikimedia, vi konsentas kontakti vin pri tradukoj aŭ aliaj temoj rilataj al la Wikimedia-movado, kiun ni konsideras esti interesa al vi. Vi konsentas ke via datumoj estos konservita en Usono kaj estas sub nia [https://wikimediafoundation.org/wiki/Privacy_policy regularo pri privateco].',
);

/** Spanish (español)
 * @author AlimanRuna
 * @author Armando-Martin
 * @author Ascánder
 * @author Crazymadlover
 * @author Cvmontuy
 * @author Dalton2
 * @author Dferg
 * @author Fitoschido
 * @author Fortega
 * @author Gustronico
 * @author Hazard-SJ
 * @author Hoo
 * @author Imre
 * @author Locos epraix
 * @author Manuelt15
 * @author MarcoAurelio
 * @author Platonides
 * @author Sanbec
 * @author Shirayuki
 * @author Translationista
 * @author Vivaelcelta
 */
$messages['es'] = array(
	'wikimediamessages-desc' => 'Mensajes específicos de Wikimedia',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=es',
	'sitesupport' => 'Donaciones',
	'tooltip-n-sitesupport' => 'Apóyanos',
	'specialpages-group-contribution' => 'Contribución/Recaudación de fondos',
	'nstab-creator' => 'Creador',
	'nstab-institution' => 'Institución',
	'nstab-sequence' => 'Secuencia',
	'nstab-timedtext' => 'TimedText',
	'group-Ex_Administrator' => 'Antiguos administradores',
	'group-Ex_Administrator-member' => '{{GENDER:$1|antiguo administrador|antigua administradora}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Antiguos administradores',
	'group-Ex_Bureaucrat' => 'Antiguos burócratas',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|antiguo|antigua}} burócrata',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Antiguos burócratas',
	'group-Image-reviewer' => 'Revisores de imágenes',
	'group-Image-reviewer-member' => '{{GENDER:$1|revisor|revisora}} de imágenes',
	'grouppage-Image-reviewer' => '{{ns:project}}:Revisores de imágenes',
	'group-OTRS-member' => 'Miembros de OTRS',
	'group-OTRS-member-member' => '{{GENDER:$1|miembro de OTRS}}',
	'grouppage-OTRS-member' => '{{ns:project}}:Miembros de OTRS',
	'group-abusefilter' => 'Editores de filtro de abuso',
	'group-abusefilter-member' => '{{GENDER:$1|editor del filtro antiabusos|editora del filtro antiabusos}}',
	'grouppage-abusefilter' => '{{ns:project}}:Editores de filtro de abuso',
	'group-accountcreator' => 'Creadores de cuentas',
	'group-accountcreator-member' => '{{GENDER:$1|creador de cuentas|creadora de cuentas}}',
	'grouppage-accountcreator' => '{{ns:project}}:Creadores de cuentas',
	'group-arbcom' => 'Miembros del comité de arbitraje',
	'group-arbcom-member' => '{{GENDER:$1|miembro del comité de arbitraje}}',
	'grouppage-arbcom' => '{{ns:project}}:Miembros del comité de arbitraje',
	'group-autopatrolled' => 'Autoverificados',
	'group-autopatrolled-member' => '{{GENDER:$1|autoverificado|autoverificada}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Autoverificados',
	'group-autoreviewer' => 'Autorrevisores',
	'group-autoreviewer-member' => '{{GENDER:$1|autorrevisor|autorrevisora}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Autorrevisores',
	'group-bigexport' => 'Grandes exportadores',
	'group-bigexport-member' => '{{GENDER:$1|gran exportador|gran exportadora}}',
	'grouppage-bigexport' => '{{ns:project}}:Grandes exportadores',
	'group-botadmin' => 'Bots con derechos de administrador',
	'group-botadmin-member' => '{{GENDER:$1|robot con permisos de administrador}}',
	'grouppage-botadmin' => '{{ns:project}}:Bots con derechos de administrador',
	'group-confirmed' => 'Usuarios confirmados',
	'group-confirmed-member' => '{{GENDER:$1|usuario confirmado|usuaria confirmada}}',
	'grouppage-confirmed' => '{{ns:project}}:Usuarios confirmados',
	'group-editprotected' => 'Editores de páginas protegidas',
	'group-editprotected-member' => '{{GENDER:$1|editor de páginas protegidas|editora de páginas protegidas}}',
	'grouppage-editprotected' => '{{ns:project}}:Editores de páginas protegidas',
	'group-eliminator' => 'Eliminadores',
	'group-eliminator-member' => '{{GENDER:$1|eliminador|eliminadora}}',
	'grouppage-eliminator' => '{{ns:project}}:Eliminador', # Fuzzy
	'group-filemover' => 'Desplazadores de archivos',
	'group-filemover-member' => '{{GENDER:$1|desplazador|desplazadora}} de archivos',
	'grouppage-filemover' => '{{ns:project}}:Desplazador de archivos',
	'group-flood' => 'Pseudobots',
	'group-flood-member' => '{{GENDER:$1|pseudobot}}',
	'grouppage-flood' => '{{ns:project}}:Pseudobots',
	'group-founder' => 'Fundadores',
	'group-founder-member' => '{{GENDER:$1|fundador}}',
	'grouppage-founder' => '{{ns:project}}:Fundadores',
	'group-import' => 'Importadores',
	'group-import-member' => '{{GENDER:$1|importador|importadora}}',
	'grouppage-import' => '{{ns:project}}:Importadores',
	'group-interface_editor' => 'Editores de la interfaz',
	'group-interface_editor-member' => '{{GENDER:$1|editor|editora}} de la interfaz',
	'grouppage-interface_editor' => '{{ns:project}}:Editores de la interfaz',
	'group-ipblock-exempt' => 'Exentos de bloqueo a IP',
	'group-ipblock-exempt-member' => '{{GENDER:$1|exento de bloqueo IP|exenta de bloqueo IP}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Exento de bloqueo a IP',
	'group-patroller' => 'Patrulleros',
	'group-patroller-member' => '{{GENDER:$1|patrullero|patrullera}}',
	'grouppage-patroller' => '{{ns:project}}:Verificadores',
	'group-researcher' => 'Investigadores',
	'group-researcher-member' => '{{GENDER:$1|investigador|investigadora}}',
	'grouppage-researcher' => '{{ns:project}}:Investigador',
	'group-rollbacker' => 'Reversores',
	'group-rollbacker-member' => '{{GENDER:$1|reversor|reversora}}',
	'grouppage-rollbacker' => '{{ns:project}}:Reversores',
	'group-transwiki' => 'Importadores transwiki',
	'group-transwiki-member' => '{{GENDER:$1|importador|importadora}} transwiki',
	'grouppage-transwiki' => '{{ns:project}}:Importadores transwiki',
	'group-trusted' => 'Usuarios confiables',
	'group-trusted-member' => '{{GENDER:$1|usuario|usuaria}} de confianza',
	'grouppage-trusted' => '{{ns:project}}:Usuarios confiables',
	'group-uploader' => 'Cargadores',
	'group-uploader-member' => 'Cargador', # Fuzzy
	'grouppage-uploader' => '{{ns:project}}:Cargadores',
	'group-Global_bot' => 'Bots globales',
	'group-Global_bot-member' => '{{GENDER:$1|bot global}}',
	'group-Global_rollback' => 'Reversores globales',
	'group-Global_rollback-member' => '{{GENDER:$1|reversor global|reversora global}}',
	'group-Global_sysops' => 'Administradores globales',
	'group-Global_sysops-member' => '{{GENDER:$1|administrador|administradora}} global',
	'grouppage-Global_sysops' => 'm:Global sysops/es',
	'group-Ombudsmen' => 'Inspectores de privacidad',
	'group-Ombudsmen-member' => '{{GENDER:$1|inspector|inspectora}} de protección de datos',
	'group-Staff' => 'Personal de la Fundación',
	'group-Staff-member' => 'personal de la fundación',
	'group-editinterface' => 'Editores de interfaz',
	'group-editinterface-member' => '{{GENDER:$1|editor de la interfaz}}',
	'group-steward' => 'Stewards',
	'group-steward-member' => '{{GENDER:$1|steward}}',
	'grouppage-steward' => 'm:Stewards/es',
	'group-sysadmin' => 'Administradores del sistema',
	'group-sysadmin-member' => '{{GENDER:$1|administrador|administradora}} del sistema',
	'group-API_High_Limit_Requestor' => 'Solicitantes de alto límite de API',
	'group-API_High_Limit_Requestor-member' => '{{GENDER:$1|Solicitante de alto límite de API}}',
	'grouppage-API_High_Limit_Requestor' => 'm:API high limit requestors',
	'group-Indic_Bots' => 'Robots hindúes',
	'group-Indic_Bots-member' => '{{GENDER:$1|robot indicador}}',
	'group-New_wikis_importer' => 'Nuevos importadores de wikis',
	'group-New_wikis_importer-member' => '{{GENDER:$1|importador|importadora}} de nuevos wikis',
	'grouppage-New_wikis_importer' => 'm:New wikis importers',
	'group-global-ipblock-exempt' => 'Exenciones de bloqueos IP globales',
	'group-global-ipblock-exempt-member' => '{{GENDER:$1|exento de bloqueo IP global}}',
	'grouppage-global-ipblock-exempt' => 'm:Global IP block exemptions',
	'group-recursive-export' => 'Exportación recursiva',
	'group-recursive-export-member' => '{{GENDER:$1|exportador recursivo|exportadora recursiva}}',
	'group-translationadmin' => 'Administradores de traducción',
	'group-translationadmin-member' => '{{GENDER:$1|administrador|administradora}} de traducción',
	'grouppage-translationadmin' => '{{ns:project}}:Administradores de traducción',
	'group-coder' => 'Programadores',
	'group-coder-member' => '{{GENDER:$1|programador|programadora}}',
	'group-inactive' => 'Usuarios inactivos',
	'group-inactive-member' => '{{GENDER:$1|usuario inactivo|usuaria inactiva}}',
	'grouppage-inactive' => '{{ns:project}}:Usuarios inactivos',
	'wikimedia-copyright' => 'El texto está disponible bajo la <a href="//creativecommons.org/licenses/by-sa/3.0/deed.es">Licencia Creative Commons Atribución/Compartir-Igual 3.0</a>;
pueden aplicarse términos adicionales.
Véase <a href="//wikimediafoundation.org/wiki/Términos_de_Uso">Términos de uso</a> para más detalles.',
	'wikidata-copyright' => 'Todos los datos estructurados del espacio de nombres principal y de propiedad están disponibles bajo la <a href="//creativecommons.org/publicdomain/zero/1.0/deed.es" title="Definición de la licencia Creative Commons CC0">licencia Creative Commons CC0</a>;
el texto en los demás espacios de nombres está disponible bajo la <a href="//creativecommons.org/licenses/by-sa/3.0/deed.es" title="Definición de la licencia Creative Commons Atribución-CompartirIgual">licencia Creative Commons Atribución-CompartirIgual</a>;
pueden aplicarse términos adicionales.
Véanse los <a href="//wikimediafoundation.org/wiki/Terms_of_Use/es" title="Términos y condiciones de uso de la Fundacuón Wikimedia">Términos y condiciones de uso</a> para más detalles.',
	'wikidata-shortcopyrightwarning' => 'Al pulsar en «{{int:wikibase-save}}» aceptas los [//wikimediafoundation.org/wiki/Terms_of_Use términos de uso] y acuerdas liberar tu contribución bajo la [//creativecommons.org/publicdomain/zero/1.0/ licencia CC0].',
	'wikimedia-copyrightwarning' => 'Al grabar el texto, aceptas ceder tus contribuciones de manera irrevocable bajo la [http://creativecommons.org/licenses/by-sa/3.0/ Licencia Creative Commons Compartir-Igual 3.0] y la [http://www.gnu.org/copyleft/fdl.html licencia GFDL].
Estás de acuerdo con ser citado, al menos, por medio de un hipervínculo a la página donde has contribuido.
Consulta [http://wikimediafoundation.org/wiki/Terms_of_Use el acuerdo de utilización] para más detalles.',
	'cant-delete-main-page' => 'No se puede borrar ni trasladar la página principal.',
	'wikimedia-translationnotifications-signup-legal' => 'Usted acepta que al suministrar a la Fundación Wikimedia esta información podamos ponernos en contacto con usted en relación con las traducciones u otros temas relacionados con el movimiento Wikimedia que nosotros pensemos puedan ser de interés para usted. Usted acepta que sus datos puedan ser almacenados en los Estados Unidos de América y estar sujetos a nuestra [https://wikimediafoundation.org/wiki/Privacy_policy política de privacidad de datos].',
	'upload-more-photos-of-this-monument' => 'Subir más fotos de este monumento',
	'createacct-helpusername-url' => '{{ns:Project}}:Política_de_nombres_de_usuario',
	'createacct-captcha-help-url' => '{{ns:Project}}:Solicitar una cuenta',
	'createacct-imgcaptcha-help' => '¿No ves la imagen? [[{{MediaWiki:createacct-captcha-help-url}}|Solicitar una cuenta]]',
);

/** Estonian (eesti)
 * @author Avjoska
 * @author KalmerE.
 * @author Ker
 * @author Oop
 * @author Pikne
 * @author Platonides
 * @author WikedKentaur
 */
$messages['et'] = array(
	'wikimediamessages-desc' => 'Wikimedia-eriomased teated',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=et',
	'sitesupport' => 'Annetused',
	'tooltip-n-sitesupport' => 'Toeta meid',
	'specialpages-group-contribution' => 'Annetamine / korjandused',
	'nstab-creator' => 'Autor',
	'nstab-institution' => 'Asutus',
	'group-Ex_Administrator' => 'Endised administraatorid',
	'group-Ex_Administrator-member' => '{{GENDER:$1|endine administraator}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Endised administraatorid',
	'group-Ex_Bureaucrat' => 'Endised bürokraadid',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|endine bürokraat}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Endised bürokraadid',
	'group-Image-reviewer' => 'Piltide läbivaatajad',
	'group-Image-reviewer-member' => '{{GENDER:$1|piltide läbivaataja}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:Piltide läbivaatajad',
	'group-OTRS-member' => 'OTRSi liikmed',
	'group-OTRS-member-member' => 'OTRSi liige',
	'grouppage-OTRS-member' => '{{ns:project}}:OTRSi liikmed',
	'group-abusefilter' => 'Väärtarvitusfiltri muutjad',
	'group-abusefilter-member' => 'väärtarvitusfiltri muutja',
	'grouppage-abusefilter' => '{{ns:project}}:Väärtarvitusfiltri muutjad',
	'group-accountcreator' => 'Kontoloojad',
	'group-accountcreator-member' => 'kontolooja',
	'grouppage-accountcreator' => '{{ns:project}}:Kontoloojad',
	'group-arbcom' => 'Vahekohtu liikmed',
	'group-arbcom-member' => 'vahekohtu liige',
	'grouppage-arbcom' => '{{ns:project}}:Vahekohtu liikmed',
	'group-autopatrolled' => 'Automaatkontrollijad',
	'group-autopatrolled-member' => 'automaatkontrollija',
	'grouppage-autopatrolled' => '{{ns:project}}:Automaatkontrollijad',
	'group-autoreviewer' => 'Automaatsed arvustajad',
	'group-autoreviewer-member' => 'automaatne arvustaja',
	'grouppage-autoreviewer' => '{{ns:project}}:Automaatsed arvustajad',
	'group-bigexport' => 'Suureksportijad',
	'group-bigexport-member' => 'suureksportija',
	'grouppage-bigexport' => '{{ns:project}}:Suureksportijad',
	'group-botadmin' => 'Administraatori õigustega robotid',
	'group-botadmin-member' => '{{GENDER:$1|administraatori õigustega robot}}',
	'grouppage-botadmin' => '{{ns:project}}:Administraatori õigustega robotid',
	'group-confirmed' => 'Kinnitatud kasutajad',
	'group-confirmed-member' => 'kinnitatud kasutaja',
	'grouppage-confirmed' => '{{ns:project}}:Kinnitatud kasutajad',
	'group-editprotected' => 'Kaitstud lehekülje toimetajad',
	'group-editprotected-member' => 'kaitstud lehekülje toimetaja',
	'grouppage-editprotected' => '{{ns:project}}:Kaitstud lehekülje toimetajad',
	'group-eliminator' => 'Elimineerijad',
	'group-eliminator-member' => '{{GENDER:$1|elimineerija}}',
	'grouppage-eliminator' => '{{ns:project}}:Elimineerijad',
	'group-filemover' => 'Failiteisaldajad',
	'group-filemover-member' => 'failiteisaldaja',
	'grouppage-filemover' => '{{ns:project}}:Failiteisaldajad',
	'group-flood' => 'Robotkasutajad',
	'group-flood-member' => 'robotkasutaja',
	'grouppage-flood' => '{{ns:project}}:Robotkasutajad',
	'group-founder' => 'Asutajad',
	'group-founder-member' => 'asutaja',
	'grouppage-founder' => '{{ns:project}}:Asutajad',
	'group-import' => 'Importijad',
	'group-import-member' => 'importija',
	'grouppage-import' => '{{ns:project}}:Importijad',
	'group-interface_editor' => 'Liidese muutjad',
	'group-interface_editor-member' => 'liidese muutja',
	'grouppage-interface_editor' => '{{ns:project}}:Liidese muutjad',
	'group-ipblock-exempt' => 'IP-aadressi blokeerimise erandid',
	'group-ipblock-exempt-member' => 'IP-aadressi blokeerimise erand',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP-aadressi blokeerimise erandid',
	'group-patroller' => 'Kontrollijad',
	'group-patroller-member' => '{{GENDER:$1|kontrollija}}',
	'grouppage-patroller' => '{{ns:project}}:Kontrollijad',
	'group-researcher' => 'Uurijad',
	'group-researcher-member' => '{{GENDER:$1|uurija}}',
	'grouppage-researcher' => '{{ns:project}}:Uurijad',
	'group-rollbacker' => 'Tühistajad',
	'group-rollbacker-member' => 'tühistaja',
	'grouppage-rollbacker' => '{{ns:project}}:Tühistajad',
	'group-transwiki' => 'Teisest vikist importijad',
	'group-transwiki-member' => 'teisest vikist importija',
	'grouppage-transwiki' => '{{ns:project}}:Teisest vikist importijad',
	'group-trusted' => 'Usaldusväärsed kasutajad',
	'group-trusted-member' => 'usaldusväärne kasutaja',
	'grouppage-trusted' => '{{ns:project}}:Usaldusväärsed kasutajad',
	'group-Global_bot' => 'Globaalsed robotid',
	'group-Global_bot-member' => 'globaalne robot',
	'group-Global_rollback' => 'Globaalsed tühistajad',
	'group-Global_rollback-member' => 'globaalne tühistaja',
	'group-Global_sysops' => 'Globaalsed administraatorid',
	'group-Global_sysops-member' => 'globaalne administraator',
	'group-Ombudsmen' => 'Õigusvahemehed',
	'group-Ombudsmen-member' => 'õigusvahemees',
	'group-Staff' => 'Koosseis',
	'group-Staff-member' => 'koosseisu liige',
	'group-editinterface' => 'Liidese muutjad',
	'group-editinterface-member' => 'liidese muutja',
	'group-steward' => 'Stjuuardid',
	'group-steward-member' => 'stjuuard',
	'group-sysadmin' => 'Süsteemiülemad',
	'group-sysadmin-member' => 'süsteemiülem',
	'group-New_wikis_importer' => 'Uue viki importijad',
	'group-New_wikis_importer-member' => '{{GENDER:$1|uue viki importija}}',
	'group-translationadmin' => 'Tõlkeadministraatorid',
	'group-translationadmin-member' => '{{GENDER:$1|tõlkeadministraator}}',
	'grouppage-translationadmin' => '{{ns:project}}:Tõlkeadministraatorid',
	'group-centralnoticeadmin' => 'Keskuse teate administraator',
	'group-centralnoticeadmin-member' => '{{GENDER:$1|Keskuse teate administraator}}',
	'grouppage-centralnoticeadmin' => '{{ns:project}}:Keskuse teate administraatorid',
	'group-coder' => 'Programmeerijad',
	'group-coder-member' => '{{GENDER:$1|programmeerija}}',
	'group-inactive' => 'Passiivsed kasutajad',
	'group-inactive-member' => '{{GENDER:$1|passiivne kasutaja}}',
	'grouppage-inactive' => '{{ns:project}}:Ebaaktiivsed kasutajad',
	'wikimedia-copyright' => 'Tekst on kasutatav vastavalt Creative Commonsi litsentsile "<a href="//creativecommons.org/licenses/by-sa/3.0/deed.et">Autorile viitamine + jagamine samadel tingimustel</a>";
sellele võivad lisanduda täiendavad tingimused.
Täpsemalt vaata <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Wikimedia kasutamistingimustest</a>.',
	'wikidata-shortcopyrightwarning' => 'Kui klõpsad "{{int:wikibase-save}}", nõustud [//wikimediafoundation.org/wiki/Terms_of_Use kasutustingimustega] ja oma kaastöö pöördumatu avaldamisega Creative Commonsi üldise litsentsi [//creativecommons.org/publicdomain/zero/1.0/deed.et CC0] all.',
	'wikimedia-copyrightwarning' => 'Kui klõpsad "{{int:savearticle}}", nõustud [//wikimediafoundation.org/wiki/Terms_of_Use kasutustingimustega] ja annad nõusoleku oma kaastöö pöördumatuks avaldamiseks litsentside [//creativecommons.org/licenses/by-sa/3.0/deed.et CC-BY-SA 3.0] ja [//www.gnu.org/copyleft/fdl.html GFDL] alusel.
Nõustud, et autorile viitamiseks piisab Creative Commonsi litsentsi järgi hüperlingist või internetiaadressist.',
	'wikibase-sitelinks-wikivoyage' => "Sellele üksusele viitavad Wikivoyage'i-leheküljed",
	'cant-delete-main-page' => 'Sa ei saa esilehte kustutada ega teisaldada.',
	'wikimedia-translationnotifications-signup-legal' => 'Nõustud, et nende andmete Wikimedia Foundationile saatmise järel võime sinuga ühendust võtta seoses tõlgetega või muusse Wikimedia liikumisse puutuvaga, mis meie arvates sulle huvi võib pakkuda. Nõustud, et sinu andmeid tohib Ameerika Ühendriikides alles hoida ja et neid kasutatakse vastavalt meie [https://wikimediafoundation.org/wiki/Privacy_policy privaatsuspõhimõtetele].',
	'upload-more-photos-of-this-monument' => 'Laadi üles veel pilte sellest mälestisest',
	'createacct-helpusername-url' => '{{ns:Project}}:Kasutajanime põhimõtted',
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(aita mul valida)]]',
	'createacct-captcha-help-url' => '{{ns:Project}}:Konto taotlemine',
	'createacct-imgcaptcha-help' => 'Kas sa ei näe pilti? [[{{MediaWiki:createacct-captcha-help-url}}|Taotle kontot]]',
);

/** Basque (euskara)
 * @author An13sa
 * @author Joxemai
 * @author Nemo bis
 * @author Theklan
 * @author Unai Fdz. de Betoño
 * @author Xabier Armendaritz
 * @author පසිඳු කාවින්ද
 */
$messages['eu'] = array(
	'wikimediamessages-desc' => 'Wikimediaren mezu espezifikoak',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=eu',
	'sitesupport' => 'Dohaintzak',
	'tooltip-n-sitesupport' => 'Lagundu gaitzazu',
	'specialpages-group-contribution' => 'Dohaintzaren egilea',
	'nstab-creator' => 'Egilea',
	'nstab-institution' => 'Istituzioa',
	'nstab-sequence' => 'Sekuentzia',
	'group-Ex_Administrator' => 'Administratzaile ohiak',
	'group-Ex_Administrator-member' => '{{GENDER:$1|administratzaile ohia}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Administratzaile ohiak',
	'group-Ex_Bureaucrat' => 'Burokrata ohiak',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|burokrata ohia}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Burokrata ohiak',
	'group-Image-reviewer' => 'Irudi berrikusleak',
	'group-Image-reviewer-member' => '{{GENDER:$1|irudi berrikuslea}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:Irudi berrikusleak',
	'group-OTRS-member' => 'OTRS kideak',
	'group-OTRS-member-member' => '{{GENDER:$1|OTRS kidea}}',
	'grouppage-OTRS-member' => '{{ns:project}}:OTRS kideak',
	'group-abusefilter' => 'Abusu-iragazkien editoreak',
	'group-abusefilter-member' => '{{GENDER:$1|abusu-iragazkiaren editorea}}',
	'grouppage-abusefilter' => '{{ns:project}}:Abusu-iragazkien editoreak',
	'group-accountcreator' => 'Kontu sortzailea',
	'group-accountcreator-member' => '{{GENDER:$1|kontu sortzailea}}',
	'grouppage-accountcreator' => '{{ns:project}}:Kontu sortzaileak',
	'group-arbcom' => 'Tartekaritza-taldearen kideak',
	'group-arbcom-member' => '{{GENDER:$1|arbitraje-batzordeko kidea}}',
	'grouppage-arbcom' => '{{ns:project}}:Tartekaritza-taldeko kideak',
	'group-autopatrolled' => 'Autopatruilariak',
	'group-autopatrolled-member' => '{{GENDER:$1|autopatruilalaria}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Autopatruilariak',
	'group-autoreviewer' => 'Aztertzaile automatikoak',
	'group-autoreviewer-member' => '{{GENDER:$1|aztertzaile automatikoa}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Autopatruilariak',
	'group-bigexport' => 'Esportatzaile handiak',
	'group-bigexport-member' => '{{GENDER:$1|esportatzaile handia}}',
	'grouppage-bigexport' => '{{ns:project}}:Esportatzaile handiak',
	'group-confirmed' => 'Egiaztatutako erabiltzaileak',
	'group-confirmed-member' => '{{GENDER:$1|baieztatutako lankidea}}',
	'grouppage-confirmed' => '{{ns:project}}:Egiaztatutako erabiltzaileak',
	'group-editprotected' => 'Babestutako orrien editoreak',
	'group-editprotected-member' => '{{GENDER:$1|babestutako orrien editorea}}',
	'grouppage-editprotected' => '{{ns:project}}:Babestutako orrien editoreak',
	'group-eliminator' => 'Ezabatzaileak',
	'group-eliminator-member' => '{{GENDER:$1|ezabatzailea}}',
	'grouppage-eliminator' => '{{ns:project}}:Ezabatzaileak',
	'group-filemover' => 'Fitxategi mugitzaileak',
	'group-filemover-member' => '{{GENDER:$1|fitxategi mugitzailea}}',
	'grouppage-filemover' => '{{ns:project}}:Fitxategi mugitzaileak',
	'group-flood' => 'Bot erabiltzaileak',
	'group-flood-member' => '{{GENDER:$1|bot erabiltzailea}}',
	'grouppage-flood' => '{{ns:project}}:Bot lankideak',
	'group-founder' => 'Fundatzaileak',
	'group-founder-member' => '{{GENDER:$1|undatzailea}}',
	'grouppage-founder' => '{{ns:project}}:Fundatzaileak',
	'group-import' => 'Inportatzaileak',
	'group-import-member' => '{{GENDER:$1|inportatzailea}}',
	'grouppage-import' => '{{ns:project}}:Inportatzaileak',
	'group-interface_editor' => 'Interfazeko editoreak',
	'group-interface_editor-member' => '{{GENDER:$1|interfazeko editorea}}',
	'grouppage-interface_editor' => '{{ns:project}}:Interfazeko editoreak',
	'group-ipblock-exempt' => 'IP blokeo salbuespenak',
	'group-ipblock-exempt-member' => '{{GENDER:$1|IP blokeo salbuespena}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP blokeo salbuespenak',
	'group-patroller' => 'Patruilariak',
	'group-patroller-member' => '{{GENDER:$1|patruilalaria}}',
	'grouppage-patroller' => '{{ns:project}}:Patruilariak',
	'group-researcher' => 'Ikertzaileak',
	'group-researcher-member' => '{{GENDER:$1|ikertzailea}}',
	'grouppage-researcher' => '{{ns:project}}:Ikertzaileak',
	'group-rollbacker' => 'Desegin dezakete',
	'group-rollbacker-member' => '{{GENDER:$1|desegin-egilea}}',
	'grouppage-rollbacker' => '{{ns:project}}:Desegin dezakete',
	'group-transwiki' => 'Transwiki inportatzaileak',
	'group-transwiki-member' => '{{GENDER:$1|transwiki inportatzailea}}',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki inportatzaileak',
	'group-trusted' => 'Konfiantzazko lankideak',
	'group-trusted-member' => '{{GENDER:$1|Konfiantzazko lankidea}}',
	'grouppage-trusted' => '{{ns:project}}:Konfiantzazko lankideak',
	'group-Global_bot' => 'Bot globalak',
	'group-Global_bot-member' => '{{GENDER:$1|bot globala}}',
	'group-Global_rollback' => 'Globalki desegin dezakete',
	'group-Global_rollback-member' => '{{GENDER:$1|globalki desegin dezake}}',
	'group-Global_sysops' => 'Administratzaile globalak',
	'group-Global_sysops-member' => '{{GENDER:$1|administratzaile globala}}',
	'group-Ombudsmen' => 'Komunitatearen babesleak',
	'group-Ombudsmen-member' => '{{GENDER:$1|arartekoa}}',
	'group-Staff' => 'Langileak',
	'group-Staff-member' => 'langilea',
	'group-editinterface' => 'Interfazeko editoreak',
	'group-editinterface-member' => '{{GENDER:$1|interfazeko editorea}}',
	'group-steward' => 'Stewardak',
	'group-steward-member' => '{{GENDER:$1|steward}}',
	'group-sysadmin' => 'Sistemaren kudeatzaileak',
	'group-sysadmin-member' => '{{GENDER:$1|sistemako administratzailea}}',
	'group-translationadmin' => 'Itzulpen administratzaileak',
	'group-coder' => 'Kode egileak',
	'group-coder-member' => '{{GENDER:$1|kode garatzailea}}',
	'group-inactive' => 'Erabiltzaile ez-aktiboak',
	'group-inactive-member' => '{{GENDER:$1|erabiltzaile ez-aktiboa}}',
	'grouppage-inactive' => '{{ns:project}}:Erabiltzaile ez-aktiboak',
	'wikimedia-copyright' => 'Testua <a href="//creativecommons.org/licenses/by-sa/3.0/deed.eu">Creative Commons Aitortu-PartekatuBerdin 3.0 lizentziari</a> jarraituz erabil daiteke;
baliteke beste klausularen batzuk ere aplikatu behar izatea.
Xehetasunen berri izateko, ikus <a href="//wikimediafoundation.org/wiki/Terms_of_Use">erabilera-baldintzak</a>.',
	'wikimedia-copyrightwarning' => '«{{int:savearticle}}» botoia sakatuz, onartzen dituzu [//wikimediafoundation.org/wiki/Terms_of_Use  erabilera-baldintzak], eta modu ezeztaezinean onartzen duzu zure ekarpena [//creativecommons.org/licenses/by-sa/3.0/ Creative Commons Aitortu-PartekatuBerdin 3.0] eta [//www.gnu.org/copyleft/fdl.html GFDL] lizentziekin plazaratzea.
Onartzen duzu hiperlotura bat edo URL bat aski dela aitortza hori egiteko, Creative Commons lizentziari jarraituz.',
);

/** Extremaduran (estremeñu)
 * @author Better
 */
$messages['ext'] = array(
	'sitesupport' => 'Donacionis',
	'tooltip-n-sitesupport' => 'Ayúamus',
	'specialpages-group-contribution' => 'Contribucionis/Fundraiser',
);

/** Persian (فارسی)
 * @author Alireza
 * @author Baqeri
 * @author Calak
 * @author Ebraminio
 * @author Huji
 * @author Ladsgroup
 * @author Mahdiz
 * @author Mardetanha
 * @author Mjbmr
 * @author Reza1615
 * @author Sahim
 * @author Wayiran
 * @author ZxxZxxZ
 */
$messages['fa'] = array(
	'wikimediamessages-desc' => 'پیغام‌های مخصوص ویکی‌مدیا',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=fa',
	'sitesupport' => 'کمک مالی',
	'tooltip-n-sitesupport' => 'حمایتمان کنید',
	'specialpages-group-contribution' => 'مشارکت‌ها/جمع‌آوری کمک',
	'nstab-creator' => 'خالق',
	'nstab-institution' => 'نهاد',
	'nstab-sequence' => 'دنباله',
	'nstab-timedtext' => 'متن زمان‌بندی‌شده',
	'group-Ex_Administrator' => 'مدیران پیشین',
	'group-Ex_Administrator-member' => '{{GENDER:$1|مدیر پیشین}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:مدیران پیشین',
	'group-Ex_Bureaucrat' => 'دیوان‌سالاران پیشین',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|دیوانسالار پیشین}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:دیوان‌سالاران پیشین',
	'group-Image-reviewer' => 'بازبینان تصویر',
	'group-Image-reviewer-member' => 'بازبین‌گر تصویر',
	'grouppage-Image-reviewer' => '{{ns:project}}:بازبین‌گرهای تصویر',
	'group-OTRS-member' => 'اعضای OTRS',
	'group-OTRS-member-member' => 'عضو OTRS',
	'grouppage-OTRS-member' => '{{ns:project}}:اعضای OTRS',
	'group-abusefilter' => 'ویرایشگران پالایهٔ خرابکاری',
	'group-abusefilter-member' => 'ویرایشگر پالایهٔ خرابکاری',
	'grouppage-abusefilter' => '{{ns:project}}:ویرایشگران پالایهٔ خرابکاری',
	'group-accountcreator' => 'سازندگان حساب کاربری',
	'group-accountcreator-member' => 'ایجادکنندهٔ حساب کاربری',
	'grouppage-accountcreator' => '{{ns:project}}:سازندگان حساب کاربری',
	'group-arbcom' => 'اعضای هیأت حکمیت',
	'group-arbcom-member' => 'عضو هیأت حکمیت',
	'grouppage-arbcom' => '{{ns:project}}:اعضای کمیتهٔ داوری',
	'group-autopatrolled' => 'گشت‌زنان خودکار',
	'group-autopatrolled-member' => 'گشت‌زن خودکار',
	'grouppage-autopatrolled' => '{{ns:project}}:گشت‌زنان خودکار',
	'group-autoreviewer' => 'بازبین‌گران خودکار',
	'group-autoreviewer-member' => 'بازبین‌گر خودکار',
	'grouppage-autoreviewer' => '{{ns:project}}:خودبازبین‌گرها',
	'group-bigexport' => 'خارج‌کنندگان بزرگ',
	'group-bigexport-member' => 'بزرگ برون‌بر',
	'grouppage-bigexport' => '{{ns:project}}:بزرگ خارج‌کنندگان',
	'group-botadmin' => 'ربات‌های دارای دسترسی مدیریت',
	'group-botadmin-member' => '{{GENDER:$1|ربات‌های دارای دسترسی مدیریت}}',
	'grouppage-botadmin' => '{{ns:project}}:ربات‌های دارای دسترسی مدیریت',
	'group-confirmed' => 'کاربران تائیدشده',
	'group-confirmed-member' => 'کاربران تأییدشده',
	'grouppage-confirmed' => '{{ns:project}}:کاربران تأییدشده',
	'group-editprotected' => 'ویرایشگران صفحه‌های محافظت‌شده',
	'group-editprotected-member' => 'ویرایشگر صفحه‌های محافظت‌شده',
	'grouppage-editprotected' => '{{ns:project}}:ویرایشگران صفحه‌ها محفاظت‌شده',
	'group-eliminator' => 'برطرف‌کننده‌ها',
	'group-eliminator-member' => 'برطرف‌کننده',
	'grouppage-eliminator' => '{{ns:project}}: برطرف‌کننده',
	'group-filemover' => 'انتقال‌دهنده پرونده',
	'group-filemover-member' => 'انتقال‌دهنده پرونده',
	'grouppage-filemover' => '{{ns:project}}: انتقال‌دهندگان پرونده',
	'group-flood' => 'کاربران ربات',
	'group-flood-member' => 'کاربر ربات',
	'grouppage-flood' => '{{ns:project}}: کاربران ربات',
	'group-founder' => 'بنیان‌گذاران',
	'group-founder-member' => 'بنیان‌گذار',
	'grouppage-founder' => '{{ns:project}}:بنیان‌گذاران',
	'group-import' => 'واردکنندگان',
	'group-import-member' => 'درون‌ریز',
	'grouppage-import' => '{{ns:project}}:واردکنندگان',
	'group-interface_editor' => 'ویرایش‌گران رابط',
	'group-interface_editor-member' => '{{GENDER:$1|ویرایشگر رابط}}',
	'grouppage-interface_editor' => '{{ns:project}}:ویرایش‌گران رابط',
	'group-ipblock-exempt' => 'استثناهای قطع دسترسی آی‌پی',
	'group-ipblock-exempt-member' => 'معافیت از قطع دسترسی آی‌پی',
	'grouppage-ipblock-exempt' => '{{ns:project}}:معافیت از قطع دسترسی آی‌پی',
	'group-patroller' => 'گشت‌زنان',
	'group-patroller-member' => '{{GENDER:$1|گشت‌زن}}',
	'grouppage-patroller' => '{{ns:project}}:گشت‌زن‌ها',
	'group-researcher' => 'پژوهشگران',
	'group-researcher-member' => 'پژوهشگر',
	'grouppage-researcher' => '{{ns:project}}:پژوهشگرها',
	'group-rollbacker' => 'واگردانان',
	'group-rollbacker-member' => 'واگردان',
	'grouppage-rollbacker' => '{{ns:project}}:واگردانان',
	'group-transwiki' => 'واردکنندگان تراویکی',
	'group-transwiki-member' => 'درون‌ریز تراویکی',
	'grouppage-transwiki' => '{{ns:project}}:واردکنندگان تراویکی',
	'group-trusted' => 'کاربران مورد اعتماد',
	'group-trusted-member' => 'کاربر مورد اعتماد',
	'grouppage-trusted' => '{{ns:project}}:کاربران تأییدشده',
	'group-Global_bot' => 'ربات‌های سراسری',
	'group-Global_bot-member' => '{{GENDER:$1|ربات سراسری}}',
	'grouppage-Global_bot' => 'm:Global bot/fa',
	'group-Global_rollback' => 'واگردانی‌کنندگان سراسری',
	'group-Global_rollback-member' => '{{GENDER:$1|واگردانی‌کنندهٔ سراسری}}',
	'grouppage-Global_rollback' => 'm:Global rollback/fa',
	'group-Global_sysops' => 'مدیران سراسری',
	'group-Global_sysops-member' => '{{GENDER:$1|مدیر سراسری}}',
	'group-Ombudsmen' => 'دادآوران',
	'group-Ombudsmen-member' => '{{GENDER:$1|دادآور}}',
	'group-Staff' => 'پرسنل',
	'group-Staff-member' => 'عضو پرسنل',
	'group-editinterface' => 'ویرایش‌گران رابط',
	'group-editinterface-member' => 'ویرایش‌گر رابط',
	'group-steward' => 'ویکیبدان',
	'group-steward-member' => 'ویکیبد',
	'grouppage-steward' => 'm:Stewards/fa',
	'group-sysadmin' => 'مدیران سامانه',
	'group-sysadmin-member' => 'مدیر سامانه',
	'group-API_High_Limit_Requestor' => 'محدودیت درخواست‌دهندگان ای‌پی‌آی',
	'group-API_High_Limit_Requestor-member' => '{{GENDER:$1|محدودیت درخواست‌دهندگان ای‌پی‌آی}}',
	'group-Indic_Bots' => 'ربات‌های ایندیک',
	'group-Indic_Bots-member' => '{{GENDER:$1|ربات ایندیک}}',
	'group-New_wikis_importer' => 'واردکننده‌های ویکی جدید',
	'group-New_wikis_importer-member' => '{{GENDER:$1|واردکننده‌های ویکی جدید}}',
	'group-global-ipblock-exempt' => 'آی‌پی‌های مستثی از قطع دسترسی سراسری',
	'group-global-ipblock-exempt-member' => '{{GENDER:$1|آی‌پی‌های مستثی از قطع دسترسی سراسری}}',
	'group-recursive-export' => 'برون‌ریزی بازگشتی',
	'group-recursive-export-member' => '{{GENDER:$1|برون‌ریزی بازگشتی}}',
	'group-translationadmin' => 'مدیران ترجمه',
	'group-translationadmin-member' => '{{GENDER:$1|مدیر ترجمه}}',
	'grouppage-translationadmin' => '{{ns:project}}:مدیران ترجمه',
	'group-centralnoticeadmin' => 'مرکز اعلانات مدیران',
	'group-centralnoticeadmin-member' => '{{GENDER:$1|مدیرت اطلاع‌رسانی مرکزی}}',
	'grouppage-centralnoticeadmin' => '{{ns:project}}:اعلانات مرکزی مدیران',
	'group-coder' => 'برنامه‌نویسان',
	'group-coder-member' => '{{GENDER:$1|برنامه‌نویس}}',
	'group-inactive' => 'کاربران غیرفعال',
	'group-inactive-member' => '{{GENDER:$1|کاربر غیرفعال}}',
	'grouppage-inactive' => '{{ns:project}}:کاربران غیرفعال',
	'shared-repo-name-shared' => 'ویکی‌انبار',
	'wikimedia-copyright' => 'همهٔ نوشته‌ها تحت <a href="//creativecommons.org/licenses/by-sa/3.0/">مجوز Creative Commons Attribution/Share-Alike </a> در دسترس است؛ قوانین اضافه‌ای نیز ممکن است اعمال شوند.
برای جزئیات بیشتر <a href="//wikimediafoundation.org/wiki/Terms_of_Use">شرایط استفاده</a> را بخوانید.',
	'wikidata-copyright' => 'ساختار همهٔ داده‌ها از فضای نام اصلی و خصوصیت تحت <a href="//creativecommons.org/publicdomain/zero/1.0/" title="Definition of the Creative Commons CC0 License">مجوز کریتیو کامنز صفر</a> در دسترس است;
متن در فضاهای نام دیگر تحت <a href="//creativecommons.org/licenses/by-sa/3.0/" title="Definition of the Creative Commons Attribution/Share-Alike License">مجوز کریتیو کامنز/سهم طور یکسان</a> در دسترس است
شرایط اضافی ممکن است اعمال شود.
برای جزئیات بیشتر <a href="//wikimediafoundation.org/wiki/Terms_of_Use" title="Wikimedia Foundation Terms of Use">شرایط استفاده</a>  را مشاهده کنید.',
	'wikidata-shortcopyrightwarning' => 'با کلیک کردن برروی "ذخیره"، شما  [https://wikimediafoundation.org/wiki/Terms_of_Use شرایط استفاده] را قبول می کنید، و همچنین شما موافقت می کنید با حق انتشار مطالب شما تحت اجازه نامه [https://creativecommons.org/publicdomain/zero/1.0/ CC0].', # Fuzzy
	'wikimedia-copyrightwarning' => 'شما با کلیک روی «{{int:savearticle}}» [//wikimediafoundation.org/wiki/Terms_of_Use شرایط استفاده] را قبول می‌کنید و می‌پذیرید که مشارکت‌هایتان را به صورت غیر قابل فسخ با اجازه‌نامه‌های [//creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] و [//www.gnu.org/copyleft/fdl.html GFDL] منتشر کنید.
شما همچنین قبول می‌کنید که ارائه یک پیوند یا نشانی اینترنتی برای ارجاع تحت مجوز Creative Commons کفایت می‌کند.',
	'wikibase-sitelinks-wikivoyage' => 'صفحه‌های پیوند شدهٔ ویکی‌سفر به این آیتم',
	'cant-delete-main-page' => 'شما نمی‌توانید صفحهٔ اصلی را حذف یا منتقل کنید.',
	'wikimedia-translationnotifications-signup-legal' => 'شما می‌پذیرید که بنیاد ویکی‌مدیا به کمک این اطلاعت امکان دارد برای ترجمه‌ها یا مطالب مرتبط که برای شما جذاب هستند، با شما تماس حاصل نماید.شما می‌پذیرید که اطلاعاتتان در ایالات متحده آمریکا بایگانی می‌شوند و شامل [https://wikimediafoundation.org/wiki/Privacy_policy قوانین حفظ حریم خصوصی] ما می‌باشند.',
	'upload-more-photos-of-this-monument' => 'بارگذاری عکس‌های بیشتری از این بنای تاریخی',
	'extdist-branch-master' => 'استاد (آخرین نسخهٔ توسعه)',
	'extdist-branch-REL1_21' => '1.21 (آخرین مدیاویکی پایدار )',
	'createacct-helpusername-url' => '{{ns:Project}}:سیاست نام کاربری',
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(کمک برای انتخاب)]]',
	'createacct-captcha-help-url' => '{{ns:Project}}: درخواست یک حساب',
	'createacct-imgcaptcha-help' => 'تصویر را نمی‌بینید؟ [[{{MediaWiki:createacct-captcha-help-url}}|درخواست یک حساب]]',
);

/** Fulah (Fulfulde)
 */
$messages['ff'] = array(
	'sitesupport' => 'Dokkal',
);

/** Finnish (suomi)
 * @author Agony
 * @author Cimon Avaro
 * @author Crt
 * @author Jaakonam
 * @author Linnea
 * @author Nedergard
 * @author Nike
 * @author Olli
 * @author Pxos
 * @author Silvonen
 * @author Str4nd
 * @author Stryn
 * @author Tarmo
 * @author Varusmies
 * @author VezonThunder
 */
$messages['fi'] = array(
	'wikimediamessages-desc' => 'Wikimedian käyttämiä järjestelmäviestejä.',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=fi',
	'sitesupport' => 'Lahjoitukset',
	'tooltip-n-sitesupport' => 'Tue meitä',
	'specialpages-group-contribution' => 'Lahjoituksia/Rahankeräys',
	'nstab-creator' => 'Tekijä',
	'nstab-institution' => 'Laitos',
	'nstab-sequence' => 'Järjestys',
	'nstab-timedtext' => 'TimedText',
	'group-Ex_Administrator' => 'entiset ylläpitäjät',
	'group-Ex_Administrator-member' => '{{GENDER:$1|entinen ylläpitäjä}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Entiset ylläpitäjät',
	'group-Ex_Bureaucrat' => 'entiset byrokraatit',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|entinen byrokraatti}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Entiset byrokraatit',
	'group-Image-reviewer' => 'kuvien tarkastajat',
	'group-Image-reviewer-member' => '{{GENDER:$1|kuvien tarkastaja}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:Kuvien tarkastajat',
	'group-OTRS-member' => 'OTRS-jäsenet',
	'group-OTRS-member-member' => '{{GENDER:$1|OTRS-jäsen}}',
	'grouppage-OTRS-member' => '{{ns:project}}:OTRS-jäsenet',
	'group-abusefilter' => 'väärinkäyttösuodattimen muokkaajat',
	'group-abusefilter-member' => '{{GENDER:$1|väärinkäyttösuodattimen muokkaaja}}',
	'grouppage-abusefilter' => '{{ns:project}}:Väärinkäyttösuodattimen muokkaajat',
	'group-accountcreator' => 'käyttäjätunnusten luojat',
	'group-accountcreator-member' => '{{GENDER:$1|käyttäjätunnusten luoja}}',
	'grouppage-accountcreator' => '{{ns:project}}:Käyttäjätunnusten luojat',
	'group-arbcom' => 'välityslautakunnan jäsenet',
	'group-arbcom-member' => '{{GENDER:$1|välityslautakunnan jäsen}}',
	'grouppage-arbcom' => '{{ns:project}}:Välityslautakunnan jäsenet',
	'group-autopatrolled' => 'automaattisesti tarkastavat',
	'group-autopatrolled-member' => '{{GENDER:$1|automaattisesti tarkastava}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Automaattisesti tarkastavat',
	'group-autoreviewer' => 'automaattiseulojat',
	'group-autoreviewer-member' => '{{GENDER:$1|automaattiseuloja}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Automaattiseulojat',
	'group-bigexport' => 'suuret viejät',
	'group-bigexport-member' => '{{GENDER:$1|suuri viejä}}',
	'grouppage-bigexport' => '{{ns:project}}:Suuret viejät',
	'group-botadmin' => 'botit, joilla on ylläpitäjän oikeudet',
	'group-botadmin-member' => '{{GENDER:$1|botti, jolla on ylläpitäjän oikeudet}}',
	'grouppage-botadmin' => '{{ns:project}}:Botit, joilla on ylläpitäjän oikeudet',
	'group-confirmed' => 'hyväksytyt käyttäjät',
	'group-confirmed-member' => '{{GENDER:$1|hyväksytty käyttäjä}}',
	'grouppage-confirmed' => '{{ns:project}}:Hyväksytyt käyttäjät',
	'group-editprotected' => 'suojattujen sivujen muokkaajat',
	'group-editprotected-member' => '{{GENDER:$1|suojattujen sivujen muokkaaja}}',
	'grouppage-editprotected' => '{{ns:project}}:Suojattujen sivujen muokkaajat',
	'group-eliminator' => 'eliminaattorit',
	'group-eliminator-member' => '{{GENDER:$1|eliminaattori}}',
	'grouppage-eliminator' => '{{ns:project}}:Eliminaattorit',
	'group-filemover' => 'tiedostojen siirtäjät',
	'group-filemover-member' => '{{GENDER:$1|tiedostojen siirtäjä}}',
	'grouppage-filemover' => '{{ns:project}}:Tiedostojen siirtäjät',
	'group-flood' => 'bottitunnukset',
	'group-flood-member' => '{{GENDER:$1|bottitunnus}}',
	'grouppage-flood' => '{{ns:project}}:Bottitunnukset',
	'group-founder' => 'perustajat',
	'group-founder-member' => '{{GENDER:$1|perustaja}}',
	'grouppage-founder' => '{{ns:project}}:Perustajat',
	'group-import' => 'sivujen tuojat',
	'group-import-member' => '{{GENDER:$1|sivujen tuoja}}',
	'grouppage-import' => '{{ns:project}}:Sivujen tuojat',
	'group-interface_editor' => 'käyttöliittymän muokkaajat',
	'group-interface_editor-member' => '{{GENDER:$1|käyttöliittymän muokkaaja}}',
	'grouppage-interface_editor' => '{{ns:project}}:Käyttöliittymän muokkaajat',
	'group-ipblock-exempt' => 'IP-estoista vapautetut',
	'group-ipblock-exempt-member' => '{{GENDER:$1|IP-estoista vapautettu}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP-estoista vapautetut',
	'group-patroller' => 'tarkastajat',
	'group-patroller-member' => '{{GENDER:$1|tarkastaja}}',
	'grouppage-patroller' => '{{ns:project}}:Tarkastajat',
	'group-researcher' => 'tutkijat',
	'group-researcher-member' => '{{GENDER:$1|tutkija}}',
	'grouppage-researcher' => '{{ns:project}}:Tutkijat',
	'group-rollbacker' => 'palauttajat',
	'group-rollbacker-member' => '{{GENDER:$1|palauttaja}}',
	'grouppage-rollbacker' => '{{ns:project}}:Palauttajat',
	'group-transwiki' => 'toisesta wikistä sivujen tuojat',
	'group-transwiki-member' => '{{GENDER:$1|toisesta wikistä sivujen tuoja}}',
	'grouppage-transwiki' => '{{ns:project}}:Toisista wikeistä sivujen tuojat',
	'group-trusted' => 'luotetut käyttäjät',
	'group-trusted-member' => '{{GENDER:$1|luotettu käyttäjä}}',
	'grouppage-trusted' => '{{ns:project}}:Luotetut käyttäjät',
	'group-Global_bot' => 'järjestelmänlaajuiset botit',
	'group-Global_bot-member' => '{{GENDER:$1|järjestelmänlaajuinen botti}}',
	'group-Global_rollback' => 'järjestelmänlaajuiset palauttajat',
	'group-Global_rollback-member' => '{{GENDER:$1|järjestelmänlaajuinen palauttaja}}',
	'group-Global_sysops' => 'järjestelmänlaajuiset ylläpitäjät',
	'group-Global_sysops-member' => '{{GENDER:$1|järjestelmänlaajuinen ylläpitäjä}}',
	'group-Ombudsmen' => 'tietosuojavalvojat',
	'group-Ombudsmen-member' => '{{GENDER:$1|tietosuojavalvoja}}',
	'group-Staff' => 'henkilökunta',
	'group-Staff-member' => '{{GENDER:$1|henkilökunta}}',
	'grouppage-Staff' => 'Foundation:Henkilökunta',
	'group-editinterface' => 'käyttöliittymän muokkaajat',
	'group-editinterface-member' => '{{GENDER:$1|käyttöliittymän muokkaaja}}',
	'group-steward' => 'ylivalvojat',
	'group-steward-member' => '{{GENDER:$1|ylivalvoja}}',
	'grouppage-steward' => 'm:Stewards/fi',
	'group-sysadmin' => 'palvelinjärjestelmän ylläpitäjät',
	'group-sysadmin-member' => '{{GENDER:$1|palvelinjärjestelmän ylläpitäjä}}',
	'group-global-ipblock-exempt' => 'järjestelmänlaajuisista IP-estoista vapautetut',
	'group-global-ipblock-exempt-member' => '{{GENDER:$1|järjestelmänlaajuisista IP-estoista vapautettu}}',
	'group-translationadmin' => 'käännösylläpitäjät',
	'group-translationadmin-member' => '{{GENDER:$1|käännösylläpitäjä}}',
	'grouppage-translationadmin' => '{{ns:project}}:Käännösylläpitäjät',
	'group-coder' => 'ohjelmoijat',
	'group-coder-member' => '{{GENDER:$1|ohjelmoija}}',
	'group-inactive' => 'epäaktiiviset käyttäjät',
	'group-inactive-member' => '{{GENDER:$1|epäaktiivinen käyttäjä}}',
	'grouppage-inactive' => '{{ns:project}}:Epäaktiiviset käyttäjät',
	'wikimedia-copyright' => 'Teksti on saatavilla <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike</a> -lisenssillä; lisäehtoja voi sisältyä. Katso <a href="//wikimediafoundation.org/wiki/Käyttöehdot">käyttöehdot</a>.',
	'wikidata-shortcopyrightwarning' => 'Klikkaamalla "tallenna" sitoudut [https://wikimediafoundation.org/wiki/Terms_of_Use käyttöehtoihin] ja suostut peruuttamattomasti luovuttamaan panoksesi [https://creativecommons.org/publicdomain/zero/1.0/ CC0-lisenssillä].', # Fuzzy
	'wikimedia-copyrightwarning' => 'Tallentamalla muutokset osoitat hyväksyväsi, että muokkauksesi julkaistaan pysyvästi [//creativecommons.org/licenses/by-sa/3.0/ Creative Commons Nimeä-Tarttuva 3.0-] ja [//www.gnu.org/copyleft/fdl.html GFDL-lisenssenssien] ehdoin. Aineiston myöhemmät käyttäjät saattavat mainita käyttäjätunnuksesi, vähintään linkin tai osoitteen kautta muokkaamaasi artikkeliin. Lisätietoja löytyy [//wikimediafoundation.org/wiki/Terms_of_Use käyttöehdoista].',
	'wikibase-sitelinks-wikivoyage' => 'Tähän kohteeseen linkitetyt Wikivoyage-sivut',
	'cant-delete-main-page' => 'Etusivua ei voi poistaa tai siirtää.',
	'wikimedia-translationnotifications-signup-legal' => 'Hyväksyt antamalla nämä tiedot Wikimedia-säätiölle, että voimme ottaa sinuun yhteyttä liittyen käännöksiin ja muihin Wikimedia-liikkeeseen liittyviin aiheisiin, joiden ajattelemme kiinostavan sinua. Hyväksyt, että tietosi tallennnetaanYhdysvalloissa ja on [https://wikimediafoundation.org/wiki/Privacy_policy tietosuojakäytäntömme] alainen.',
	'upload-more-photos-of-this-monument' => 'Tallenna lisää kuvia tästä monumentista',
	'extdist-branch-REL1_21' => '1.21 (viimeisin vakaa MediaWiki-versio)',
	'createacct-helpusername-url' => '{{ns:Project}}:Käyttäjätunnuskäytäntö',
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(auta minua valitsemaan)]]',
	'createacct-captcha-help-url' => '{{ns:Project}}:Pyydä tunnusta',
	'createacct-imgcaptcha-help' => 'Et näe kuvaa? [[{{MediaWiki:createacct-captcha-help-url}}|Pyydä tunnusta]]',
);

/** Fijian (Na Vosa Vakaviti)
 */
$messages['fj'] = array(
	'sitesupport' => 'Soli',
);

/** Faroese (føroyskt)
 * @author EileenSanda
 * @author Spacebirdy
 */
$messages['fo'] = array(
	'tooltip-n-sitesupport' => 'Stuðla okkum',
	'group-steward' => 'Ternur',
	'group-steward-member' => '{{GENDER:$1|terna}}',
	'grouppage-steward' => '{{ns:project}}:Ternur',
	'createacct-helpusername-url' => '{{ns:Project}}:Username_policy',
	'createacct-captcha-help-url' => '{{ns:Project}}:Bílegg eina konto',
	'createacct-imgcaptcha-help' => 'Sært tú ikki myndina? [[{{MediaWiki:createacct-captcha-help-url}}|Bið um eina konto]]',
);

/** French (français)
 * @author Crochet.david
 * @author DavidL
 * @author Erkethan
 * @author Fulup
 * @author Gomoko
 * @author Grondin
 * @author Guillom
 * @author Hercule
 * @author IAlex
 * @author Jean-Frédéric
 * @author Kropotkine 113
 * @author Meno25
 * @author Metroitendo
 * @author Nemo bis
 * @author Peter17
 * @author PieRRoMaN
 * @author Quentinv57
 * @author Seb35
 * @author Sherbrooke
 * @author Srtxg
 * @author Tpt
 * @author Urhixidur
 * @author Verdy p
 * @author Yekrats
 * @author Zetud
 * @author לערי ריינהארט
 */
$messages['fr'] = array(
	'wikimediamessages-desc' => 'Messages spécifiques de Wikimedia',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=fr',
	'sitesupport' => 'Faire un don',
	'tooltip-n-sitesupport' => 'Aidez-nous',
	'specialpages-group-contribution' => 'Contributions / levée de fonds',
	'nstab-creator' => 'Créateur',
	'nstab-institution' => 'Institution',
	'nstab-sequence' => 'Séquence',
	'nstab-timedtext' => 'TimedText',
	'group-Ex_Administrator' => 'Ex administrateurs',
	'group-Ex_Administrator-member' => '{{GENDER:$1|ex administrateur|ex administratrice}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Ex administrateurs',
	'group-Ex_Bureaucrat' => 'Ex bureaucrates',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|ex bureaucrate}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Ex bureaucrates',
	'group-Image-reviewer' => 'Vérificateurs d’image',
	'group-Image-reviewer-member' => '{{GENDER:$1|vérificateur d’image}}',
	'grouppage-Image-reviewer' => "{{ns:project}}:Vérificateurs d'images",
	'group-OTRS-member' => 'Membres OTRS',
	'group-OTRS-member-member' => '{{GENDER:$1|membre OTRS}}',
	'grouppage-OTRS-member' => '{{ns:project}}:Membres OTRS',
	'group-abusefilter' => 'Modificateurs de filtre antiabus',
	'group-abusefilter-member' => '{{GENDER:$1|modificateur de filtre anti-abus}}',
	'grouppage-abusefilter' => '{{ns:project}}:Modificateurs de filtre antiabus',
	'group-accountcreator' => 'Créateurs de comptes',
	'group-accountcreator-member' => '{{GENDER:$1|créateur de comptes|créatrice de comptes}}',
	'grouppage-accountcreator' => '{{ns:project}}:Créateurs de comptes',
	'group-arbcom' => 'Membres du comité d’arbitrage',
	'group-arbcom-member' => '{{GENDER:$1|membre du comité d’arbitrage}}',
	'grouppage-arbcom' => '{{ns:project}}:Membres du comité d’arbitrage',
	'group-autopatrolled' => 'Patrouilles automatiques',
	'group-autopatrolled-member' => '{{GENDER:$1|patrouilleur automatique}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Patrouilleurs automatiques',
	'group-autoreviewer' => 'Relecteurs automatiques',
	'group-autoreviewer-member' => '{{GENDER:$1|relecteur automatique}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Relecteurs automatiques',
	'group-bigexport' => 'Grands exportateurs',
	'group-bigexport-member' => '{{GENDER:$1|grand exportateur}}',
	'grouppage-bigexport' => '{{ns:project}}:Grands exportateurs',
	'group-botadmin' => 'Robots avec droits d’administrateur',
	'group-botadmin-member' => '{{GENDER:$1|bot avec droits d’administrateur}}',
	'grouppage-botadmin' => '{{ns:project}}:Robots avec droits d’administrateur',
	'group-confirmed' => 'Utilisateurs confirmés',
	'group-confirmed-member' => '{{GENDER:$1|utilisateur confirmé|utilisatrice confirmée}}',
	'grouppage-confirmed' => '{{ns:project}}:Utilisateurs confirmés',
	'group-editprotected' => 'Éditeurs de pages protégées',
	'group-editprotected-member' => '{{GENDER:$1|éditeur|éditrice}} de pages protégées',
	'grouppage-editprotected' => '{{ns:project}}:Éditeurs de pages protégées',
	'group-eliminator' => 'Éliminateurs',
	'group-eliminator-member' => '{{GENDER:$1|éliminateurs|éliminatrices}}',
	'grouppage-eliminator' => '{{ns:project}}:Éliminateurs',
	'group-filemover' => 'Renommeurs de fichiers',
	'group-filemover-member' => '{{GENDER:$1|renommeur|renommeuse}} de fichiers',
	'grouppage-filemover' => '{{ns:project}}:Renommeurs de fichiers',
	'group-flood' => 'Dresseurs de bot',
	'group-flood-member' => '{{GENDER:$1|dresseur|dresseuse}} de robot',
	'grouppage-flood' => '{{ns:project}}:Dresseurs de bot',
	'group-founder' => 'Fondateurs',
	'group-founder-member' => '{{GENDER:$1|fondateur|fondatrice}}',
	'grouppage-founder' => '{{ns:project}}:Fondateurs',
	'group-import' => 'Importateurs',
	'group-import-member' => '{{GENDER:$1|importateur|importatrice}}',
	'grouppage-import' => '{{ns:project}}:Importateurs',
	'group-interface_editor' => 'Éditeurs de l’interface',
	'group-interface_editor-member' => '{{GENDER:$1|éditeur|éditrice}} de l’interface',
	'grouppage-interface_editor' => '{{ns:project}}:Éditeurs de l’interface',
	'group-ipblock-exempt' => 'Exemptés de blocage d’IP',
	'group-ipblock-exempt-member' => '{{GENDER:$1|exempté de blocage d’IP|exemptée de blocage d’IP}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Exemption de blocage d’IP',
	'group-patroller' => 'Patrouilleurs',
	'group-patroller-member' => '{{GENDER:$1|patrouilleur}}',
	'grouppage-patroller' => '{{ns:project}}:Patrouilleurs',
	'group-researcher' => 'Chercheurs',
	'group-researcher-member' => '{{GENDER:$1|chercheur|chercheuse}}',
	'grouppage-researcher' => '{{ns:project}}:Chercheurs',
	'group-rollbacker' => 'Révocateurs',
	'group-rollbacker-member' => '{{GENDER:$1|révocateur|révocatrice}}',
	'grouppage-rollbacker' => '{{ns:project}}:Révocateurs',
	'group-transwiki' => 'Importateurs transwiki',
	'group-transwiki-member' => 'importat{{GENDER:$1|eur|rice}} transwiki',
	'grouppage-transwiki' => '{{ns:project}}:Importateurs transwiki',
	'group-trusted' => 'Utilisateurs de confiance',
	'group-trusted-member' => '{{GENDER:$1|utilisateur|utilisatrice}} de confiance',
	'grouppage-trusted' => '{{ns:project}}:Utilisateurs de confiance',
	'group-uploader' => 'Téléverseurs',
	'group-uploader-member' => '{{GENDER:$1|téléchargeur}}',
	'grouppage-uploader' => '{{ns:project}}:Téléverseurs',
	'group-Global_bot' => 'Bots globaux',
	'group-Global_bot-member' => '{{GENDER:$1|bot global}}',
	'grouppage-Global_bot' => 'm:Bot policy/fr#Bots globaux',
	'group-Global_rollback' => 'Révocateurs globaux',
	'group-Global_rollback-member' => '{{GENDER:$1|révocateur global}}',
	'grouppage-Global_rollback' => 'm:Global rollback/fr',
	'group-Global_sysops' => 'Administrateurs globaux',
	'group-Global_sysops-member' => '{{GENDER:$1|administrateur global}}',
	'group-Ombudsmen' => 'Médiateurs',
	'group-Ombudsmen-member' => '{{GENDER:$1|médiateur|médiatrice}}',
	'group-Staff' => 'Personnel',
	'group-Staff-member' => 'membre du personnel',
	'group-editinterface' => 'Modificateurs de l’interface',
	'group-editinterface-member' => '{{GENDER:$1|modificateur|modificatrice}} de l’interface',
	'group-steward' => 'Stewards',
	'group-steward-member' => '{{GENDER:$1|steward}}',
	'grouppage-steward' => 'm:Stewards/fr',
	'group-sysadmin' => 'Administrateurs système',
	'group-sysadmin-member' => '{{GENDER:$1|administrateur|administratrice}} système',
	'group-API_High_Limit_Requestor' => "Demandeurs de limite supérieure de l'API",
	'group-API_High_Limit_Requestor-member' => "{{GENDER:$1|demandeur de limite supérieure de l'API}}",
	'group-Indic_Bots' => 'Robots indicateurs',
	'group-Indic_Bots-member' => '{{GENDER:$1|robot indicateur}}',
	'group-New_wikis_importer' => 'Nouveaux importateurs de wikis',
	'group-New_wikis_importer-member' => '{{GENDER:$1|nouvel importateur de wikis}}',
	'group-global-ipblock-exempt' => "Exceptions globales de blocage d'adresses IP",
	'group-global-ipblock-exempt-member' => "{{GENDER:$1|exception globale de blocage d'adresse IP}}",
	'group-recursive-export' => 'Exportation récursive',
	'group-recursive-export-member' => '{{GENDER:$1|exportateur récursif|exportatrice récursive}}',
	'group-translationadmin' => 'Administrateurs de traduction',
	'group-translationadmin-member' => 'administrat{{GENDER:$1|eur|rice}} de traduction',
	'grouppage-translationadmin' => '{{ns:project}}:Administrateurs des traductions',
	'group-centralnoticeadmin' => 'Administrateurs des notifications centralisées',
	'group-centralnoticeadmin-member' => '{{GENDER:$1|Administrateur|Administratrice}} de notification centralisée',
	'grouppage-centralnoticeadmin' => '{{ns:project}}:Administrateurs de notification centralisée',
	'group-coder' => 'Codeurs',
	'group-coder-member' => '{{GENDER:$1|codeur|codeuse}}',
	'grouppage-coder' => 'Codeurs', # Fuzzy
	'group-inactive' => 'Utilisateurs inactifs',
	'group-inactive-member' => '{{GENDER:$1|utilisateur inactif|utilisatrice inactive}}',
	'grouppage-inactive' => '{{ns:project}}:Utilisateurs inactifs',
	'wikimedia-copyright' => 'Les textes sont disponibles sous <a href="//creativecommons.org/licenses/by-sa/3.0/deed.fr">licence Creative Commons paternité – partage à l’identique des conditions initiales</a> ; d’autres conditions peuvent s’appliquer.
Voyez les <a href="//wikimediafoundation.org/wiki/Conditions_d\'utilisation">conditions d’utilisation</a> pour plus de détails.',
	'wikidata-copyright' => 'Toutes les données structurées des espaces de nom principal et propriété sont disponibles sous la <a href="//creativecommons.org/publicdomain/zero/1.0/" title="Définition de la licence Creative Commons CC0">licence Creative Commons CC0</a>;
le texte dans les autres espaces de nom est disponible sous la <a href="//creativecommons.org/licenses/by-sa/3.0/" title="Définition de la licence Creative Commons Attribution/Share-Alike">licence Creative Commons Attribution/Share-Alike</a>;
des conditions supplémentaires peuvent s’appliquer.
Voyez les <a href="//wikimediafoundation.org/wiki/Terms_of_Use" title="Conditions d’utilisation de la fondation Wikimédia">Conditions d’utilisation</a>',
	'wikidata-shortcopyrightwarning' => 'En cliquant sur « {{int:wikibase-save}} », vous acceptez les [//wikimediafoundation.org/wiki/Terms_of_Use conditions d’utilisation], et vous acceptez de façon irrévocable de livrer votre contribution sous la [//creativecommons.org/publicdomain/zero/1.0/ CC0 licence CC0].',
	'wikimedia-copyrightwarning' => "En cliquant sur le bouton « {{int:savearticle}} », vous acceptez les [//wikimediafoundation.org/wiki/Conditions_d'utilisation conditions d’utilisation] et vous acceptez de placer irrévocablement votre contribution sous [//creativecommons.org/licenses/by-sa/3.0/ licence Creative Commons attribution – partage à l’identique 3.0] et [//www.gnu.org/copyleft/fdl.html GFDL].
Vous acceptez qu’un hyperlien ou une URL est une attribution de paternité suffisante sous la licence Creative Commons.",
	'wikibase-sitelinks-wikivoyage' => 'Pages de Wikivoyage liées à cet élément',
	'cant-delete-main-page' => 'Vous ne pouvez pas supprimer ou déplacer la page principale.',
	'wikimedia-translationnotifications-signup-legal' => "En transmettant ces informations à la <i>Wikimedia Foundation</i>, vous acceptez que nous vous contactions à propos de traductions ou de toute autre sujet touchant le mouvement Wikimedia qui pourrait, selon nous, vous intéresser. Vous acceptez que vos données soient stockées aux États_unis d'Amérique et sont sujettes à notre [https://wikimediafoundation.org/wiki/Privacy_policy politique de confidentalité] (en anglais).",
	'upload-more-photos-of-this-monument' => 'Importer d’autres photographies de ce monument',
	'extdist-branch-master' => 'maître (dernière version de développement)',
	'extdist-branch-REL1_21' => '1.21 (dernier MediaWiki stable)',
	'createacct-helpusername-url' => "{{ns:Project}}:Nom d'utilisateur",
	'createacct-helpusername' => '([[{{MediaWiki:createacct-helpusername-url}}|aidez-moi à choisir]])',
	'createacct-captcha-help-url' => '{{ns:Project}}:Demander un compte',
	'createacct-imgcaptcha-help' => "Vous ne pouvez pas voir l'image ? [[{{MediaWiki:createacct-captcha-help-url}}|Demandez la création d'un compte]]",
	'wikimedia-developers' => 'Développeurs',
);

/** Cajun French (français cadien)
 * @author JeanVoisin
 */
$messages['frc'] = array(
	'sitesupport' => "Donner de l'argent",
);

/** Franco-Provençal (arpetan)
 * @author Cedric31
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'wikimediamessages-desc' => 'Mèssâjos spèceficos de Wikimedia.',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=frp',
	'sitesupport' => 'Balyér',
	'tooltip-n-sitesupport' => 'Édiéd-nos !',
	'specialpages-group-contribution' => 'Contribucions / levâ de fonds',
	'nstab-creator' => 'Crèator',
	'nstab-institution' => 'Enstitucion',
	'nstab-sequence' => 'Sèquence',
	'nstab-timedtext' => 'TèxtoSincronisâ',
	'group-Ex_Administrator' => 'Vielys administrators',
	'group-Ex_Administrator-member' => '{{GENDER:$1|viely administrator|vielye administratrice}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Vielys administrators',
	'group-Ex_Bureaucrat' => 'Vielys grata-papiérs',
	'group-Ex_Bureaucrat-member' => 'viely{{GENDER:$1||e}} grata-papiér',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Vielys grata-papiérs',
	'group-Image-reviewer' => 'Controlors d’émâges',
	'group-Image-reviewer-member' => 'controlo{{GENDER:$1|r|sa}} d’émâges',
	'grouppage-Image-reviewer' => '{{ns:project}}:Controlors d’émâges',
	'group-OTRS-member' => 'Membros OTRS',
	'group-OTRS-member-member' => '{{GENDER:$1|membro OTRS}}',
	'grouppage-OTRS-member' => '{{ns:project}}:Membros OTRS',
	'group-abusefilter' => 'Changiors de filtro d’abus',
	'group-abusefilter-member' => 'changio{{GENDER:$1|r|sa}} de filtro d’abus',
	'grouppage-abusefilter' => '{{ns:project}}:Changiors de filtro d’abus',
	'group-accountcreator' => 'Crèators de comptos',
	'group-accountcreator-member' => 'crèato{{GENDER:$1|r|sa}} de comptos',
	'grouppage-accountcreator' => '{{ns:project}}:Crèators de comptos',
	'group-arbcom' => 'Membros du comitât d’arbitrâjo',
	'group-arbcom-member' => '{{GENDER:$1|membro du comitât d’arbitrâjo}}',
	'grouppage-arbcom' => '{{ns:project}}:Membros du comitât d’arbitrâjo',
	'group-autopatrolled' => 'Patrolyors ôtomaticos',
	'group-autopatrolled-member' => 'patrolyo{{GENDER:$1|r ôtomatico|sa ôtomatica}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Patrolyors ôtomaticos',
	'group-autoreviewer' => 'Rèvisors ôtomaticos',
	'group-autoreviewer-member' => 'rèviso{{GENDER:$1|r ôtomatico|sa ôtomatica}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Rèvisors ôtomaticos',
	'group-bigexport' => 'Grants èxportators',
	'group-bigexport-member' => 'grant èxportat{{GENDER:$1|or|rice}}',
	'grouppage-bigexport' => '{{ns:project}}:Grants èxportators',
	'group-botadmin' => 'Bots avouéc drêts d’administrator',
	'group-botadmin-member' => '{{GENDER:$1|bot avouéc drêts d’administrator}}',
	'grouppage-botadmin' => '{{ns:project}}:Bots avouéc drêts d’administrator',
	'group-confirmed' => 'Usanciérs confirmâs',
	'group-confirmed-member' => 'usanciér{{GENDER:$1||e}} confirmâ',
	'grouppage-confirmed' => '{{ns:project}}:Usanciérs confirmâs',
	'group-editprotected' => 'Èditors de pâges protègiês',
	'group-editprotected-member' => 'èdit{{GENDER:$1|or|rice}} de pâges protègiês',
	'grouppage-editprotected' => '{{ns:project}}:Èditors de pâges protègiês',
	'group-eliminator' => 'Èliminators',
	'group-eliminator-member' => 'èliminat{{GENDER:$1|or|rice}}',
	'grouppage-eliminator' => '{{ns:project}}:Èliminators',
	'group-filemover' => 'Renomors de fichiérs',
	'group-filemover-member' => 'renomo{{GENDER:$1|r|sa}} de fichiérs',
	'grouppage-filemover' => '{{ns:project}}:Renomors de fichiérs',
	'group-flood' => 'Drèciors de bot',
	'group-flood-member' => 'drècio{{GENDER:$1|r|sa}} de bot',
	'grouppage-flood' => '{{ns:project}}:Drèciors de bot',
	'group-founder' => 'Fondators',
	'group-founder-member' => 'fondato{{GENDER:$1|r|sa}}',
	'grouppage-founder' => '{{ns:project}}:Fondators',
	'group-import' => 'Importators',
	'group-import-member' => 'importat{{GENDER:$1|or|rice}}',
	'grouppage-import' => '{{ns:project}}:Importators',
	'group-interface_editor' => 'Èditors de l’entèrface',
	'group-interface_editor-member' => 'èdit{{GENDER:$1|or|rice}} de l’entèrface',
	'grouppage-interface_editor' => '{{ns:project}}:Èditors de l’entèrface',
	'group-ipblock-exempt' => 'Ègzencions de blocâjo d’adrèce IP',
	'group-ipblock-exempt-member' => '{{GENDER:$1|ègzencion de blocâjo d’adrèce IP}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Ègzencion de blocâjo d’adrèce IP',
	'group-patroller' => 'Patrolyors',
	'group-patroller-member' => '{{GENDER:$1|patrolyor}}',
	'grouppage-patroller' => '{{ns:project}}:Patrolyors',
	'group-researcher' => 'Chèrchiors',
	'group-researcher-member' => 'chèrchio{{GENDER:$1|r|sa}}',
	'grouppage-researcher' => '{{ns:project}}:Chèrchiors',
	'group-rollbacker' => 'Rèvoquiors',
	'group-rollbacker-member' => 'rèvoquio{{GENDER:$1|r|sa}}',
	'grouppage-rollbacker' => '{{ns:project}}:Rèvoquiors',
	'group-transwiki' => 'Importators entèrvouiqui',
	'group-transwiki-member' => 'importat{{GENDER:$1|or|rice}} entèrvouiqui',
	'grouppage-transwiki' => '{{ns:project}}:Importators entèrvouiqui',
	'group-trusted' => 'Usanciérs de fiance',
	'group-trusted-member' => 'usanciér{{GENDER:$1||e}} de fiance',
	'grouppage-trusted' => '{{ns:project}}:Usanciérs de fiance',
	'group-Global_bot' => 'Bots globâls',
	'group-Global_bot-member' => '{{GENDER:$1|bot globâl}}',
	'group-Global_rollback' => 'Rèvoquiors globâls',
	'group-Global_rollback-member' => 'rèvoquio{{GENDER:$1|r globâl|sa globâla}}',
	'group-Global_sysops' => 'Administrators globâls',
	'group-Global_sysops-member' => 'administrat{{GENDER:$1|or globâl|rice globâla}}',
	'group-Ombudsmen' => 'Mèdiators',
	'group-Ombudsmen-member' => 'mèdiat{{GENDER:$1|or|rice}}',
	'group-Staff' => 'Gens',
	'group-Staff-member' => '{{GENDER:$1|membro a les gens}}',
	'group-editinterface' => 'Changiors de l’entèrface',
	'group-editinterface-member' => 'changio{{GENDER:$1|r|sa}} de l’entèrface',
	'group-steward' => 'Stevârds',
	'group-steward-member' => 'stevârd{{GENDER:$1||a}}',
	'group-sysadmin' => 'Administrators sistèmo',
	'group-sysadmin-member' => 'administrat{{GENDER:$1|or|rice}} sistèmo',
	'group-translationadmin' => 'Administrators de traduccion',
	'group-translationadmin-member' => 'administrat{{GENDER:$1|or|rice}} de traduccion',
	'grouppage-translationadmin' => '{{ns:project}}:Administrators de traduccion',
	'group-coder' => 'Codiors',
	'group-coder-member' => 'codio{{GENDER:$1|r|sa}}',
	'group-inactive' => 'Usanciérs que font ren du tot',
	'group-inactive-member' => 'usanciér{{GENDER:$1||e}} que fât ren du tot',
	'grouppage-inactive' => '{{ns:project}}:Usanciérs que font ren du tot',
	'wikimedia-copyright' => 'Los tèxtos sont disponiblos desot <a href="//creativecommons.org/licenses/by-sa/3.0/">licence Creative Commons patèrnitât - partâjo a l’identico de les premiéres condicions</a> ;
d’ôtres condicions sè pôvont aplicar.
Vêde les <a href="//wikimediafoundation.org/wiki/Terms_of_Use">condicions d’usâjo</a> por més de dètalys.',
	'wikimedia-copyrightwarning' => 'En cliquent dessus « {{int:savearticle}} », vos accèptâd les [//wikimediafoundation.org/wiki/Terms_of_Use condicions d’usâjo] et pués vos accèptâd de placiér por de bon voutra contribucion desot [//creativecommons.org/licenses/by-sa/3.0/ licence Creative Commons patèrnitât - partâjo a l’identico de les premiéres condicions 3.0] et [//www.gnu.org/copyleft/fdl.html licence de documentacion libra GNU (GFDL)].
Por la licence Creative Commons, vos accèptâd d’étre crèditâ per los reusanciérs u muens avouéc un lim hipèrtèxto ou ben una URL.',
	'cant-delete-main-page' => 'Vos pouede pas suprimar ou ben dèplaciér la pâge principâla.',
);

/** Northern Frisian (Nordfriisk)
 * @author Murma174
 * @author Pyt
 */
$messages['frr'] = array(
	'wikimediamessages-desc' => 'Wikimedia tisangen',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=frr',
	'sitesupport' => 'Dan bidrach',
	'tooltip-n-sitesupport' => 'Halep üs',
	'specialpages-group-contribution' => 'Bidrach',
	'nstab-creator' => 'Maaget faan',
	'nstab-institution' => 'Institutjuun',
	'nstab-sequence' => 'Sekwens',
	'nstab-timedtext' => 'Timed tekst',
	'group-Ex_Administrator' => 'Weesen administraatoren',
	'group-Ex_Administrator-member' => '{{GENDER:$1|Weesen süsteem administraator}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Weesen administratooren',
	'group-Ex_Bureaucrat' => 'Weesen bürokraaten',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|Weesen bürokraat}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Weesen bürokraaten',
	'group-Image-reviewer' => 'Datei efterlukern',
	'group-Image-reviewer-member' => '{{GENDER:$1|Datei efterwerker}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:Datei efterwerkern',
	'group-OTRS-member' => 'OTRS lasmooten',
	'group-OTRS-member-member' => '{{GENDER:$1|OTRS lasmoot}}',
	'grouppage-OTRS-member' => '{{ns:project}}:OTRS lasmooten',
	'group-abusefilter' => 'Masbrük-filter bewerkern',
	'group-abusefilter-member' => '{{GENDER:$1|Masbrük-filter bewerker}}',
	'grouppage-abusefilter' => '{{ns:project}}:Masbrük-filter bewerkern',
	'group-accountcreator' => 'Konto bewerkern',
	'group-accountcreator-member' => '{{GENDER:$1|Brüker konto bewerker}}',
	'grouppage-accountcreator' => '{{ns:project}}:Konto bewerkern',
	'group-arbcom' => 'Stridj-komitee lasmooten',
	'group-arbcom-member' => '{{GENDER:$1|Stridj komitee lasmoot}}',
	'grouppage-arbcom' => '{{ns:project}}:Stridj-komitee bewerkern',
	'group-autopatrolled' => 'Automaatisk kontrolöören',
	'group-autopatrolled-member' => '{{GENDER:$1|Automaatisk kontrolöör}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Automaatisk kontrolöören',
	'group-autoreviewer' => 'Automaatisk efterwerkern',
	'group-autoreviewer-member' => '{{GENDER:$1|Automaatisk efterwerker}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Automaatisk efterwerkern',
	'group-bigexport' => 'Grat eksportöören',
	'group-bigexport-member' => '{{GENDER:$1|Grat eksportöör}}',
	'grouppage-bigexport' => '{{ns:project}}:Grat eksportöören',
	'group-botadmin' => 'Bots mä administraator rochten',
	'group-botadmin-member' => '{{GENDER:$1|Bot mä administraator rochten}}',
	'grouppage-botadmin' => '{{ns:project}}:Bots mä administraator rochten',
	'group-confirmed' => 'Gudkäänd brükern',
	'group-confirmed-member' => '{{GENDER:$1|Gudkäänd brüker}}',
	'grouppage-confirmed' => '{{ns:project}}:Gudkäänd brükern',
	'group-editprotected' => 'Bewerkern faan ufseekert sidjen',
	'group-editprotected-member' => '{{GENDER:$1|Bewerker faan ufseekert sidjen}}',
	'grouppage-editprotected' => '{{ns:project}}:Bewerkern faan ufseekert sidjen',
	'group-eliminator' => 'Strikern',
	'group-eliminator-member' => '{{GENDER:$1|Striker}}',
	'grouppage-eliminator' => '{{ns:project}}:Strikern',
	'group-filemover' => 'Datei fersküüwern',
	'group-filemover-member' => '{{GENDER:$1|Datei fersküüwer}}',
	'grouppage-filemover' => '{{ns:project}}:Datei fersküüwern',
	'group-flood' => 'Bot brükern',
	'group-flood-member' => '{{GENDER:$1|Bot brüker}}',
	'grouppage-flood' => '{{ns:project}}:Bot brükern',
	'group-founder' => 'Grünjleiern',
	'group-founder-member' => '{{GENDER:$1|Grünjleier}}',
	'grouppage-founder' => '{{ns:project}}:Grünjleiern',
	'group-import' => 'Importöören',
	'group-import-member' => '{{GENDER:$1|Importöör}}',
	'grouppage-import' => '{{ns:project}}:Importöören',
	'group-interface_editor' => 'Interface bewerkern',
	'group-interface_editor-member' => '{{GENDER:$1|Interface bewerker}}',
	'grouppage-interface_editor' => '{{ns:project}}:Interface bewerkern',
	'group-ipblock-exempt' => 'Sperd IP ütjnoomen',
	'group-ipblock-exempt-member' => '{{GENDER:$1|Sperd IP ütjnoom}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Sperd IP ütjnoomen',
	'group-patroller' => 'Kontrolöören',
	'group-patroller-member' => '{{GENDER:$1|Kontrolöör}}',
	'grouppage-patroller' => '{{ns:project}}:Kontrolöören',
	'group-researcher' => 'Onersjükern',
	'group-researcher-member' => '{{GENDER:$1|Onersjüker}}',
	'grouppage-researcher' => '{{ns:project}}:Onersjükern',
	'group-rollbacker' => 'Turagdreiern',
	'group-rollbacker-member' => '{{GENDER:$1|Turagdreier}}',
	'grouppage-rollbacker' => '{{ns:project}}:Turagdreiern',
	'group-transwiki' => 'Transwiki importöören',
	'group-transwiki-member' => '{{GENDER:$1|Transwiki importöör}}',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki importöören',
	'group-trusted' => 'Iarelk brükern',
	'group-trusted-member' => '{{GENDER:$1|Iarelk brüker}}',
	'grouppage-trusted' => '{{ns:project}}:Iarelk brükern',
	'group-Global_bot' => 'Globaal bots',
	'group-Global_bot-member' => '{{GENDER:$1|Globaal bot}}',
	'group-Global_rollback' => 'Globaal turagdreiern',
	'group-Global_rollback-member' => '{{GENDER:$1|Globaal turagdreier}}',
	'group-Global_sysops' => 'Globaal administratooren',
	'group-Global_sysops-member' => '{{GENDER:$1|Globaal administraator}}',
	'group-Ombudsmen' => 'Ombudslidj',
	'group-Ombudsmen-member' => '{{GENDER:$1|Ombudsmaan}}',
	'group-Staff' => 'Mäwerkern',
	'group-Staff-member' => 'Mäwerker',
	'group-editinterface' => 'Interface bewerkern',
	'group-editinterface-member' => '{{GENDER:$1|Interface bewerker}}',
	'group-steward' => 'Stewards',
	'group-steward-member' => '{{GENDER:$1|Steward}}',
	'group-sysadmin' => 'Süsteem administratooren',
	'group-sysadmin-member' => '{{GENDER:$1|Süsteem administraator}}',
	'group-API_High_Limit_Requestor' => 'Huuch API limit brüker',
	'group-API_High_Limit_Requestor-member' => '{{GENDER:$1|Huuch API limit brüker}}',
	'group-Indic_Bots' => 'Bots för indisk spriaken',
	'group-Indic_Bots-member' => '{{GENDER:$1|Bot för indisk spriaken}}',
	'group-New_wikis_importer' => 'Importöören faan nei wikis',
	'group-New_wikis_importer-member' => '{{GENDER:$1|Importöör faan nei wikis}}',
	'group-global-ipblock-exempt' => 'Faan globaal IP speren ütjnimenen',
	'group-global-ipblock-exempt-member' => '{{GENDER:$1|Faan globaal IP speren ütjnimenen}}',
	'group-recursive-export' => 'Rekursiif eksportöören',
	'group-recursive-export-member' => '{{GENDER:$1|Rekursiif eksportöör}}',
	'group-translationadmin' => 'Auersaatang administratooren',
	'group-translationadmin-member' => '{{GENDER:$1|Administraator för auersaatangen}}',
	'grouppage-translationadmin' => '{{ns:project}}:Administratooren för auersaatangen',
	'group-centralnoticeadmin' => 'Administratooren för sentraal tisangen',
	'group-centralnoticeadmin-member' => '{{GENDER:$1|Administraator för sentraal tisangen}}',
	'grouppage-centralnoticeadmin' => '{{ns:project}}:Administratooren för sentraal tisangen',
	'group-coder' => 'Programiarern',
	'group-coder-member' => '{{GENDER:$1|Programiarer}}',
	'group-inactive' => 'Ünaktiif brükern',
	'group-inactive-member' => '{{GENDER:$1|Ünaktiif brüker}}',
	'grouppage-inactive' => '{{ns:project}}:Ünaktiif brükern',
	'wikimedia-copyright' => 'Di tekst stäänt oner\'t lisens <a href="//creativecommons.org/licenses/by-sa/3.0/deed.de">„Creative Commons Attribution/Share-Alike“</a>; diar kön uk noch ööder reegeln tääl.
Luke am enkelthaiden uun a <a href="//wikimediafoundation.org/wiki/Nutzungsbedingungen">reegeln för\'t brüken</a>.',
	'wikidata-copyright' => 'A artiikler stun oner det lisens <a href="//creativecommons.org/publicdomain/zero/1.0/" title="Definition of the Creative Commons CC0 License">Creative Commons CC0</a>;
ööder dooten stun oner det lisens <a href="//creativecommons.org/licenses/by-sa/3.0/" title="Definition of the Creative Commons Attribution/Share-Alike License">Creative Commons Attribution/Share-Alike</a>;
diar kön uk noch ööder reegeln tääl.
Luke bi a <a href="//wikimediafoundation.org/wiki/Terms_of_Use" title="Wikimedia Foundation Terms of Use">brükerreegeln</a> am muar.',
	'wikidata-shortcopyrightwarning' => 'Wan dü üüb ""Seekre" trakst, stemest dü a [https://wikimediafoundation.org/wiki/Terms_of_Use brükerreegeln] tu, an dü stemest tu, dat dan bidrach oner det lisens [https://creativecommons.org/publicdomain/zero/1.0/ CC0] brükt wurd mut.',
	'wikimedia-copyrightwarning' => 'Wan dü üüb "{{int:savearticle}}" klikest,  beest dü mä a [//wikimediafoundation.org/wiki/Terms_of_Use brüker-reegeln] iinferstenen an dääst din werk frei oner det [//frr.wikipedia.org/wiki/Wikipedia:Lizenzbestimmungen_Commons_Attribution-ShareAlike_3.0_Unported Creative Commons lisens „Oner man nööm widjerdu 3.0“] an det lisens [//frr.wikipedia.org/wiki/Wikipedia:GNU_Free_Documentation_License GFDL].
Dü stemest tu, dat din werk faan öödern brükt wurd mut, wan jo üüb diheer URL henwise.',
	'wikibase-sitelinks-wikivoyage' => 'Wikivoyage-sidjen, huar detdiar objekt üüb ferwiset.',
	'cant-delete-main-page' => 'Det hoodsidj koon ei stregen of fersköwen wurd.',
	'wikimedia-translationnotifications-signup-legal' => 'Dü stemest tu, dat at Wikimedia Foundation mä di kontakt apnem mut. Dü stemest tu, dat din dooten uun Ameerikoo efter üüs bestemangen tu [https://wikimediafoundation.org/wiki/Privacy_policy dootenseekerhaid] seekert wurd mut.',
	'upload-more-photos-of-this-monument' => 'Muar bilen faan detdiar seenksteed huuchsjüür',
	'extdist-branch-master' => 'master (leetst wersjuun)',
	'extdist-branch-REL1_21' => '1.21 (leetst stabiil MediaWiki werjuun)',
	'createacct-helpusername-url' => '{{ns:Project}}:Reegeln för brükernöömer',
	'createacct-helpusername' => "[[{{MediaWiki:createacct-helpusername-url}}|(halep bi't ütjwool)]]",
	'createacct-captcha-help-url' => '{{ns:Project}}:Am en brükerkonto uunfraage',
	'createacct-imgcaptcha-help' => 'Könst det bil ei sä ? [[{{MediaWiki:createacct-captcha-help-url}}|Am en brükerkonto uunfraage]]',
);

/** Friulian (furlan)
 * @author Klenje
 */
$messages['fur'] = array(
	'sitesupport' => 'Doninus',
	'tooltip-n-sitesupport' => 'Judinus',
	'group-founder' => 'Fondadôrs',
	'group-founder-member' => 'Fondadôr', # Fuzzy
);

/** Western Frisian (Frysk)
 * @author Pyt
 * @author Snakesteuben
 */
$messages['fy'] = array(
	'sitesupport' => 'Donaasjes',
	'tooltip-n-sitesupport' => 'Stypje ús',
);

/** Irish (Gaeilge)
 * @author Alison
 */
$messages['ga'] = array(
	'wikimediamessages-desc' => 'Teachtaireachtaí sainiúil an Viciméid',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=ga',
	'sitesupport' => 'Síntiúis',
	'tooltip-n-sitesupport' => 'Tacaigh linn',
	'group-accountcreator' => 'Cuntas cruthóirí',
	'group-accountcreator-member' => 'cuntas cruthóir', # Fuzzy
	'grouppage-accountcreator' => '{{ns:project}}:Cuntas cruthóirí',
	'group-autopatrolled-member' => 'uathphatrólóir', # Fuzzy
	'grouppage-autopatrolled' => '{{ns:project}}:Uathphatrólóirí',
	'group-founder' => 'Bunaitheoirí',
	'group-founder-member' => 'bunaitheoir', # Fuzzy
	'grouppage-founder' => '{{ns:project}}:Bunaitheoirí',
	'group-import' => 'Iompórtálaithe',
	'group-import-member' => 'iompórtálaí', # Fuzzy
	'grouppage-import' => '{{ns:project}}:Iompórtálaithe',
	'group-ipblock-exempt' => 'Díolúintí coisc IP',
	'group-ipblock-exempt-member' => 'Díolúine coisc IP', # Fuzzy
	'grouppage-ipblock-exempt' => '{{ns:project}}:Díolúine coisc IP',
	'group-rollbacker' => 'Tar-rolltóirí',
	'group-rollbacker-member' => 'tar-rolltóir', # Fuzzy
	'grouppage-rollbacker' => '{{ns:project}}:Tar-rolltóirí',
	'group-transwiki' => 'Iompórtálaithe traisvicí',
	'group-transwiki-member' => 'iompórtálaí traisvicí', # Fuzzy
	'grouppage-transwiki' => '{{ns:project}}:Iompórtálaithe traisvicí',
	'group-Global_bot' => 'Róbónna domhanda',
	'group-Global_bot-member' => 'róbó domhanda', # Fuzzy
	'group-Global_rollback' => 'Tar-rolltóirí domhanda',
	'group-Global_rollback-member' => 'tar-rolltóir domhanda', # Fuzzy
	'group-Ombudsmen' => 'Daoine an Phobail',
	'group-Ombudsmen-member' => 'Duine an Phobail', # Fuzzy
	'group-Staff' => 'Foireann',
	'group-Staff-member' => 'ball foirne',
	'group-steward' => 'Maoir',
	'group-steward-member' => 'maor', # Fuzzy
	'group-sysadmin' => 'Riarthóirí',
	'group-sysadmin-member' => 'riarthóir', # Fuzzy
	'group-coder' => 'Códóirí',
	'group-coder-member' => 'códóir', # Fuzzy
	'shared-repo-name-shared' => 'an Cómhaoin Vicíméid',
);

/** Gagauz (Gagauz)
 * @author Cuman
 */
$messages['gag'] = array(
	'sitesupport' => 'Baaşişlär',
	'tooltip-n-sitesupport' => 'Material destek',
);

/** Gan (贛語)
 * @author Symane
 */
$messages['gan'] = array(
	'sitesupport' => '贊助',
	'tooltip-n-sitesupport' => '資援偶嗰俚',
);

/** Simplified Gan script (赣语（简体）‎)
 * @author Liangent
 * @author Xiaomingyan
 */
$messages['gan-hans'] = array(
	'wikimediamessages-desc' => 'Wikimedia𠮶特定讯息',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=gan-hans',
	'sitesupport' => '捐助',
	'tooltip-n-sitesupport' => '支持我俚',
	'group-abusefilter' => '滥用过滤器编者',
	'group-abusefilter-member' => '滥用过滤器编者', # Fuzzy
	'grouppage-abusefilter' => '{{ns:project}}:滥用过滤器编者',
	'group-accountcreator' => '开户专员',
	'group-accountcreator-member' => '开户专员', # Fuzzy
	'grouppage-accountcreator' => '{{ns:project}}:开户专员',
	'group-bigexport' => '大量汇出者',
	'group-bigexport-member' => '大量汇出者', # Fuzzy
	'grouppage-bigexport' => '{{ns:project}}:大量汇出者',
	'group-founder' => '创办者',
	'group-founder-member' => '创办者', # Fuzzy
	'grouppage-founder' => '{{ns:project}}:创办者',
	'group-import' => '汇入者',
	'group-import-member' => '汇入者', # Fuzzy
	'grouppage-import' => '{{ns:project}}:汇入者',
	'group-ipblock-exempt' => 'IP封锁例外者',
	'group-ipblock-exempt-member' => 'IP封锁例外', # Fuzzy
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP封锁例外',
	'group-rollbacker' => '返退员',
	'group-rollbacker-member' => '返退员', # Fuzzy
	'grouppage-rollbacker' => '{{ns:project}}:返退员',
	'group-transwiki' => 'Transwiki汇入者',
	'group-transwiki-member' => 'Transwiki汇入者', # Fuzzy
	'grouppage-transwiki' => '{{ns:project}}:Transwiki汇入者',
	'group-Global_bot' => '全域机器人',
	'group-Global_bot-member' => '全域机器人', # Fuzzy
	'group-Global_rollback' => '全域返退员',
	'group-Global_rollback-member' => '全域返退员', # Fuzzy
	'group-Ombudsmen' => '申诉专员',
	'group-Ombudsmen-member' => '申诉专员', # Fuzzy
	'group-Staff' => '职员',
	'group-Staff-member' => '{{GENDER:$1|职员}}',
	'group-steward' => '执行员',
	'group-steward-member' => '执行员', # Fuzzy
	'group-sysadmin' => '系统管理员',
	'group-sysadmin-member' => '系统管理员', # Fuzzy
	'group-coder' => '编码员',
	'group-coder-member' => '编码员', # Fuzzy
	'group-inactive' => '不活跃𠮶用户',
	'group-inactive-member' => '不活跃𠮶用户', # Fuzzy
	'grouppage-inactive' => '{{ns:project}}:不活跃𠮶用户',
	'wikimedia-copyright' => '个首𠮶所有文字系揸得<a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike 牌照</a>𠮶条款发布；可能会有附加𠮶条款。
望吖<a href="//wikimediafoundation.org/wiki/Terms_of_Use">使用条款</a>𠮶细节。',
	'wikimedia-copyrightwarning' => '汝捺下「{{int:savearticle}}」𠮶时间，就系同意话汝驾始搦自家𠮶贡献揸得[//creativecommons.org/licenses/by-sa/3.0/ CC-by-sa-3.0]同得[//www.gnu.org/copyleft/fdl.html GFDL]𠮶条款内容发表。
汝同意别𠮶用者编辑佢，至少，通过只超连结或网址到汝𠮶贡献页。
望吖[//wikimediafoundation.org/wiki/Terms_of_Use 使用条款]𠮶细节。',
);

/** Traditional Gan script (贛語（繁體）‎)
 * @author Nemo bis
 * @author Symane
 */
$messages['gan-hant'] = array(
	'wikimediamessages-desc' => 'Wikimedia嗰特定訊息',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=han-hant',
	'sitesupport' => '捐助',
	'tooltip-n-sitesupport' => '支持我俚',
	'group-abusefilter' => '濫用過濾器編者',
	'group-abusefilter-member' => '濫用過濾器編者', # Fuzzy
	'grouppage-abusefilter' => '{{ns:project}}:濫用過濾器編者',
	'group-accountcreator' => '開戶專員',
	'group-accountcreator-member' => '開戶專員', # Fuzzy
	'grouppage-accountcreator' => '{{ns:project}}:開戶專員',
	'group-bigexport' => '大量匯出者',
	'group-bigexport-member' => '大量匯出者', # Fuzzy
	'grouppage-bigexport' => '{{ns:project}}:大量匯出者',
	'group-founder' => '創辦者',
	'group-founder-member' => '創辦者', # Fuzzy
	'grouppage-founder' => '{{ns:project}}:創辦者',
	'group-import' => '匯入者',
	'group-import-member' => '匯入者', # Fuzzy
	'grouppage-import' => '{{ns:project}}:匯入者',
	'group-ipblock-exempt' => 'IP封鎖例外者',
	'group-ipblock-exempt-member' => 'IP封鎖例外', # Fuzzy
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP封鎖例外',
	'group-rollbacker' => '返退員',
	'group-rollbacker-member' => '返退員', # Fuzzy
	'grouppage-rollbacker' => '{{ns:project}}:返退員',
	'group-transwiki' => 'Transwiki匯入者',
	'group-transwiki-member' => 'Transwiki匯入者', # Fuzzy
	'grouppage-transwiki' => '{{ns:project}}:Transwiki匯入者',
	'group-Global_bot' => '全域機器人',
	'group-Global_bot-member' => '全域機器人', # Fuzzy
	'group-Global_rollback' => '全域返退員',
	'group-Global_rollback-member' => '全域返退員', # Fuzzy
	'group-Ombudsmen' => '申訴專員',
	'group-Ombudsmen-member' => '申訴專員', # Fuzzy
	'group-Staff' => '成員',
	'group-Staff-member' => '成員',
	'group-steward' => '執行員',
	'group-steward-member' => '執行員', # Fuzzy
	'group-sysadmin' => '系統管理員',
	'group-sysadmin-member' => '系統管理員', # Fuzzy
	'group-coder' => '編碼員',
	'group-coder-member' => '編碼員', # Fuzzy
	'group-inactive' => '不活躍嗰用戶',
	'group-inactive-member' => '不活躍嗰用戶', # Fuzzy
	'grouppage-inactive' => '{{ns:project}}:不活躍嗰用戶',
	'wikimedia-copyright' => '箇首嗰所有文字係揸得<a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike 牌照</a>嗰條款發佈；可能會有附加嗰條款。
望吖<a href="//wikimediafoundation.org/wiki/Terms_of_Use">使用條款</a>嗰細節。',
	'wikimedia-copyrightwarning' => '汝捺下「{{int:savearticle}}」嗰時間，就係同意話汝駕始搦自家嗰貢獻揸得 [//creativecommons.org/licenses/by-sa/3.0/ CC-by-sa-3.0] 同得 [//www.gnu.org/copyleft/fdl.html GFDL] 嗰條款內容發表。
汝同意別嗰用者編輯佢，至少，通過隻超連結或網址到汝嗰貢獻頁。
望吖[//wikimediafoundation.org/wiki/Terms_of_Use 使用條款]嗰細節。',
);

/** Scottish Gaelic (Gàidhlig)
 */
$messages['gd'] = array(
	'sitesupport' => 'Tabhartasan',
);

/** Galician (galego)
 * @author Alma
 * @author Meno25
 * @author Toliño
 * @author Xosé
 */
$messages['gl'] = array(
	'wikimediamessages-desc' => 'Mensaxes específicas da Wikimedia',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=gl',
	'sitesupport' => 'Doazóns',
	'tooltip-n-sitesupport' => 'Apóienos',
	'specialpages-group-contribution' => 'Contribucións/Recadación',
	'nstab-creator' => 'Creador',
	'nstab-institution' => 'Institución',
	'nstab-sequence' => 'Secuencia',
	'nstab-timedtext' => 'Subtítulos',
	'group-Ex_Administrator' => 'Antigos administradores',
	'group-Ex_Administrator-member' => '{{GENDER:$1|antigo administrador|antiga administradora}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Antigos administradores',
	'group-Ex_Bureaucrat' => 'Antigos burócratas',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|antigo|antiga}} burócrata',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Antigos burócratas',
	'group-Image-reviewer' => 'Revisores de imaxes',
	'group-Image-reviewer-member' => '{{GENDER:$1|revisor|revisora}} de imaxes',
	'grouppage-Image-reviewer' => '{{ns:project}}:Revisores de imaxes',
	'group-OTRS-member' => 'Membros do OTRS',
	'group-OTRS-member-member' => '{{GENDER:$1|membro do OTRS}}',
	'grouppage-OTRS-member' => '{{ns:project}}:Membros do OTRS',
	'group-abusefilter' => 'Editores do filtro de abusos',
	'group-abusefilter-member' => '{{GENDER:$1|editor|editora}} do filtro de abusos',
	'grouppage-abusefilter' => '{{ns:project}}:Editores do filtro de abusos',
	'group-accountcreator' => 'Creadores de contas',
	'group-accountcreator-member' => '{{GENDER:$1|creador|creadora}} de contas',
	'grouppage-accountcreator' => '{{ns:project}}:Creadores de contas',
	'group-arbcom' => 'Membros do comité de arbitraxe',
	'group-arbcom-member' => '{{GENDER:$1|membro do comité de arbitraxe}}',
	'grouppage-arbcom' => '{{ns:project}}:Membros do comité de arbitraxe',
	'group-autopatrolled' => 'Patrulleiros automáticos',
	'group-autopatrolled-member' => '{{GENDER:$1|patrulleiro automático|patrulleira automática}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Patrulleiros automáticos',
	'group-autoreviewer' => 'Revisores automáticos',
	'group-autoreviewer-member' => '{{GENDER:$1|revisor automático|revisora automática}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Revisores automáticos',
	'group-bigexport' => 'Grandes exportadores',
	'group-bigexport-member' => 'gran {{GENDER:$1|exportador|exportadora}}',
	'grouppage-bigexport' => '{{ns:project}}:Grandes exportadores',
	'group-botadmin' => 'Bots con dereitos de administrador',
	'group-botadmin-member' => '{{GENDER:$1|bot con dereitos de administrador}}',
	'grouppage-botadmin' => '{{ns:project}}:Bots con dereitos de administrador',
	'group-confirmed' => 'Usuarios confirmados',
	'group-confirmed-member' => '{{GENDER:$1|usuario confirmado|usuaria confirmada}}',
	'grouppage-confirmed' => '{{ns:project}}:Usuarios confirmados',
	'group-editprotected' => 'Editores de páxinas protexidas',
	'group-editprotected-member' => '{{GENDER:$1|editor|editora}} de páxinas protexidas',
	'grouppage-editprotected' => '{{ns:project}}:Editores de páxinas protexidas',
	'group-eliminator' => 'Eliminadores',
	'group-eliminator-member' => '{{GENDER:$1|eliminador|eliminadora}}',
	'grouppage-eliminator' => '{{ns:project}}:Eliminadores',
	'group-filemover' => 'Renomeadores de ficheiros',
	'group-filemover-member' => '{{GENDER:$1|renomeador|renomeadora}} de ficheiros',
	'grouppage-filemover' => '{{ns:project}}:Renomeadores de ficheiros',
	'group-flood' => 'Usuarios de bot',
	'group-flood-member' => '{{GENDER:$1|usuario|usuaria}} de bot',
	'grouppage-flood' => '{{ns:project}}:Usuarios de bot',
	'group-founder' => 'Fundadores',
	'group-founder-member' => '{{GENDER:$1|fundador|fundadora}}',
	'grouppage-founder' => '{{ns:project}}:Fundadores',
	'group-import' => 'Importadores',
	'group-import-member' => '{{GENDER:$1|importador|importadora}}',
	'grouppage-import' => '{{ns:project}}:Importadores',
	'group-interface_editor' => 'Editores da interface',
	'group-interface_editor-member' => '{{GENDER:$1|editor|editora}} da interface',
	'grouppage-interface_editor' => '{{ns:project}}:Editores da interface',
	'group-ipblock-exempt' => 'Exentos de bloqueo do enderezo IP',
	'group-ipblock-exempt-member' => '{{GENDER:$1|exento|exenta}} de bloqueo do enderezo IP',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Exención de bloqueo do enderezo IP',
	'group-patroller' => 'Patrulleiros',
	'group-patroller-member' => '{{GENDER:$1|patrulleiro|patrulleira}}',
	'grouppage-patroller' => '{{ns:project}}:Patrulleiros',
	'group-researcher' => 'Investigadores',
	'group-researcher-member' => '{{GENDER:$1|investigador|investigadora}}',
	'grouppage-researcher' => '{{ns:project}}:Investigadores',
	'group-rollbacker' => 'Revertedores',
	'group-rollbacker-member' => '{{GENDER:$1|revertedor|revertedora}}',
	'grouppage-rollbacker' => '{{ns:project}}:Revertedores',
	'group-transwiki' => 'Importadores transwiki',
	'group-transwiki-member' => '{{GENDER:$1|importador|importadora}} transwiki',
	'grouppage-transwiki' => '{{ns:project}}:Importadores transwiki',
	'group-trusted' => 'Usuarios de confianza',
	'group-trusted-member' => '{{GENDER:$1|usuario|usuaria}} de confianza',
	'grouppage-trusted' => '{{ns:project}}:Usuarios de confianza',
	'group-uploader' => 'Cargadores',
	'group-uploader-member' => '{{GENDER:$1|cargador|cargadora}}',
	'grouppage-uploader' => '{{ns:project}}:Cargadores',
	'group-Global_bot' => 'Bots globais',
	'group-Global_bot-member' => '{{GENDER:$1|bot global}}',
	'group-Global_rollback' => 'Revertedores globais',
	'group-Global_rollback-member' => '{{GENDER:$1|revertedor|revertedora}} global',
	'grouppage-Global_rollback' => 'm:Global rollback/gl',
	'group-Global_sysops' => 'Administradores globais',
	'group-Global_sysops-member' => '{{GENDER:$1|administrador|administradora}} global',
	'group-Ombudsmen' => 'Comisarios',
	'group-Ombudsmen-member' => '{{GENDER:$1|comisario|comisaria}}',
	'group-Staff' => 'Persoal',
	'group-Staff-member' => '{{GENDER:$1|persoal}}',
	'group-editinterface' => 'Editores da interface',
	'group-editinterface-member' => '{{GENDER:$1|editor|editora}} da interface',
	'group-steward' => 'Stewards',
	'group-steward-member' => '{{GENDER:$1|steward}}',
	'grouppage-steward' => 'm:Stewards',
	'group-sysadmin' => 'Administradores do sistema',
	'group-sysadmin-member' => '{{GENDER:$1|administrador|administradora}} do sistema',
	'group-API_High_Limit_Requestor' => 'Solicitantes do límite superior da API',
	'group-API_High_Limit_Requestor-member' => '{{GENDER:$1|solicitante do límite superior da API}}',
	'group-Indic_Bots' => 'Bots brahmánicos',
	'group-Indic_Bots-member' => '{{GENDER:$1|bot brahmánico|bot brahmánica}}',
	'group-New_wikis_importer' => 'Importadores de novos wikis',
	'group-New_wikis_importer-member' => '{{GENDER:$1|importador|importadora}} de novos wikis',
	'group-global-ipblock-exempt' => 'Exentos de bloqueo global do enderezo IP',
	'group-global-ipblock-exempt-member' => '{{GENDER:$1|exento|exenta}} de bloqueo global do enderezo IP',
	'group-recursive-export' => 'Exportadores recursivos',
	'group-recursive-export-member' => '{{GENDER:$1|exportador recursivo|exportadora recursiva}}',
	'group-translationadmin' => 'Administradores de tradución',
	'group-translationadmin-member' => '{{GENDER:$1|administrador|administradora}} de tradución',
	'grouppage-translationadmin' => '{{ns:project}}:Administradores de tradución',
	'group-centralnoticeadmin' => 'Administradores do aviso central',
	'group-centralnoticeadmin-member' => '{{GENDER:$1|administrador|administradora}} do aviso central',
	'grouppage-centralnoticeadmin' => '{{ns:project}}:Administradores do aviso central',
	'group-coder' => 'Codificadores',
	'group-coder-member' => '{{GENDER:$1|codificador|codificadora}}',
	'grouppage-coder' => '{{ns:project}}:Codificador',
	'group-inactive' => 'Usuarios inactivos',
	'group-inactive-member' => '{{GENDER:$1|usuario inactivo|usuaria inactiva}}',
	'grouppage-inactive' => '{{ns:project}}:Usuarios inactivos',
	'wikimedia-copyright' => 'Todo o texto está dispoñible baixo a <a href="//creativecommons.org/licenses/by-sa/3.0/deed.gl">licenza Creative Commons recoñecemento compartir igual 3.0</a>; pódense aplicar termos adicionais. Consulte os <a href="//wikimediafoundation.org/wiki/Terms_of_Use/gl">termos de uso</a> para obter máis información.',
	'wikidata-copyright' => 'Todos os datos estruturados dos espazos de nomes principal e de propiedade están dispoñibles baixo a <a href="//creativecommons.org/publicdomain/zero/1.0/deed.gl" title="Definición da licenza Creative Commons CC0">licenza Creative Commons CC0</a>;
o texto presente no resto de espazos de nomes está dispoñible baixo a <a href="//creativecommons.org/licenses/by-sa/3.0/deed.gl" title="Definición da licenza Creative Commons recoñecemento compartir igual">licenza Creative Commons recoñecemento compartir igual</a>;
pódense aplicar termos adicionais.
Consulte os <a href="//wikimediafoundation.org/wiki/Terms_of_Use/gl" title="Termos de uso da Fundación Wikimedia">termos de uso</a> para obter máis información.',
	'wikidata-shortcopyrightwarning' => 'Ao premer en "{{int:wikibase-save}}", acepta os [//wikimediafoundation.org/wiki/Terms_of_Use/gl termos de uso] e acepta liberar irrevogablemente a súa achega baixo a [//creativecommons.org/publicdomain/zero/1.0/deed.gl licenza CC0].',
	'wikimedia-copyrightwarning' => 'Ao premer no botón "{{int:savearticle}}" acepta os [//wikimediafoundation.org/wiki/Terms_of_Use/gl termos de uso] e acepta liberar irrevogablemente a súa contribución baixo a [//gl.wikipedia.org/wiki/Wikipedia:Texto_da_Licenza_Creative_Commons_Reco%C3%B1ecemento-CompartirIgual_3.0 licenza CC-BY-SA 3.0] e a [//gl.wikipedia.org/wiki/Wikipedia:Texto_da_Licenza_de_documentación_libre_de_GNU GFDL].
Acepta que unha hiperligazón ou un enderezo URL é recoñecemento abondo baixo a licenza Creative Commons.',
	'wikibase-sitelinks-wikivoyage' => 'Páxinas do Wikivoyage con ligazóns cara a este elemento',
	'cant-delete-main-page' => 'Non pode borrar ou mover a páxina principal.',
	'wikimedia-translationnotifications-signup-legal' => 'Acepta que ao proporcionar esta información á Fundación Wikimedia podemos poñernos en contacto con vostede por temas relacionados co movemento da Wikimedia que pensemos que poidan ser do seu interese. Acepta que os seus datos poden almacenarse nos Estados Unidos de América e que están suxeitos á nosa [https://wikimediafoundation.org/wiki/Política_de_protección_de_datos_(gl) política de protección de datos].',
	'upload-more-photos-of-this-monument' => 'Cargar máis fotografías deste monumento',
	'extdist-branch-master' => 'principal (última versión en desenvolvemento)',
	'extdist-branch-REL1_21' => '1.21 (último MediaWiki estable)',
	'createacct-helpusername-url' => '{{ns:Project}}:Política de nomes de usuario',
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(axudádeme a elixir)]]',
	'createacct-captcha-help-url' => '{{ns:Project}}:Solicitar unha conta',
	'createacct-imgcaptcha-help' => 'Non pode ver a imaxe? [[{{MediaWiki:createacct-captcha-help-url}}|Solicite unha conta]]',
	'wikimedia-developers' => 'Desenvolvedores',
);

/** Gilaki (گیلکی)
 * @author AminSanaei
 */
$messages['glk'] = array(
	'sitesupport' => 'بال زئن',
);

/** Guarani (Avañe'ẽ)
 */
$messages['gn'] = array(
	'sitesupport' => "Me'ẽ rei",
);

/** Gothic (Gothic)
 * @author Jocke Pirat
 * @author LeighvsOptimvsMaximvs
 * @author Omnipaedista
 */
$messages['got'] = array(
	'sitesupport' => 'Hairtiþaskatts',
	'tooltip-n-sitesupport' => 'Hairtiþ uns',
);

/** Ancient Greek (Ἀρχαία ἑλληνικὴ)
 * @author Crazymadlover
 * @author LeighvsOptimvsMaximvs
 * @author Omnipaedista
 */
$messages['grc'] = array(
	'wikimediamessages-desc' => 'Μηνύματα ἴδια τοῦ Wikimedia',
	'sitesupport' => 'Δῶρα',
	'tooltip-n-sitesupport' => 'Τρέφειν ἡμᾶς',
	'group-abusefilter' => 'Μεταγραφεῖς διηθητηρίων καταχρήσεων',
	'group-abusefilter-member' => 'μεταγραφεύς διηθητηρίων καταχρήσεων', # Fuzzy
	'grouppage-abusefilter' => '{{ns:project}}:Μεταγραφεῖς διηθητηρίων καταχρήσεων',
	'group-accountcreator' => 'Ποιηταὶ λογισμῶν',
	'group-accountcreator-member' => 'ποιητὴς λογισμῶν', # Fuzzy
	'grouppage-accountcreator' => '{{ns:project}}:Ποιηταὶ λογισμῶν',
	'group-autopatrolled-member' => 'αὐτόματος περιπολητής', # Fuzzy
	'grouppage-autopatrolled' => '{{ns:project}}:Αὐτόματοι περιποληταί',
	'group-autoreviewer' => 'Ἐπιθεωρηταὶ αὐτόματοι',
	'group-autoreviewer-member' => 'αὐτόματος ἐπιθεωρητής', # Fuzzy
	'grouppage-autoreviewer' => '{{ns:project}}:Αὐτόματοι ἐπιθεωρηταί',
	'group-bigexport' => 'Μεγάλοι ἐξαγωγεῖς',
	'group-bigexport-member' => 'μέγας ἐξαγωγεύς', # Fuzzy
	'grouppage-bigexport' => '{{ns:project}}:Μεγάλοι ἐξαγωγεῖς',
	'group-confirmed' => 'Ἐπιβεβαιωθέντες χρώμενοι',
	'group-confirmed-member' => 'ἐπιβεβαιωθεὶς χρώμενος', # Fuzzy
	'grouppage-confirmed' => '{{ns:project}}:Ἐπιβεβαιωθέντες χρώμενοι',
	'group-founder' => 'Ἱδρυταί',
	'group-founder-member' => 'ἱδρυτής', # Fuzzy
	'grouppage-founder' => '{{ns:project}}:Ἱδρυταί',
	'group-import' => 'Εἰσαγωγεῖς',
	'group-import-member' => 'εἰσαγωγεύς', # Fuzzy
	'grouppage-import' => '{{ns:project}}:Εἰσαγωγεῖς',
	'group-ipblock-exempt' => 'Ἀπαλλαγαὶ ὑπὸ φραγῆς τῆς IP',
	'group-ipblock-exempt-member' => 'Ἀπαλλάσσειν ὑπὸ φραγῆς τῆς IP', # Fuzzy
	'grouppage-ipblock-exempt' => '{{ns:project}}:Προνόμιον κλῄσεων IP',
	'group-rollbacker' => 'Μεταστροφεῖς',
	'group-rollbacker-member' => 'μεταστροφεύς', # Fuzzy
	'grouppage-rollbacker' => '{{ns:project}}:Μεταστροφεῖς',
	'group-transwiki' => 'Ὑπερδιαβικι-εισαγωγεῖς',
	'group-transwiki-member' => 'ὑπερδιαβικι-εισαγωγεύς', # Fuzzy
	'grouppage-transwiki' => '{{ns:project}}:Ὑπερδιαβικι-εισαγωγεῖς',
	'group-Global_bot' => 'Καθολικὰ αὐτόματα',
	'group-Global_bot-member' => 'καθολικὸν αὐτόματον', # Fuzzy
	'group-Global_rollback' => 'Καθολικοί μεταστροφεῖς',
	'group-Global_rollback-member' => 'καθολικὸς μεταστροφεύς', # Fuzzy
	'group-Ombudsmen' => 'Δέκται διαμαρτυριῶν',
	'group-Ombudsmen-member' => 'δέκτης διαμαρτυριῶν', # Fuzzy
	'group-Staff' => 'Στελέχη',
	'group-Staff-member' => 'στέλεχος',
	'group-editinterface' => 'Διεπαφὴν μεταγράφειν',
	'group-editinterface-member' => 'διεπαφὴν μεταγράφειν', # Fuzzy
	'group-steward' => 'Φροντισταί',
	'group-steward-member' => 'φροντιστής', # Fuzzy
	'group-sysadmin' => 'Ἐπίτροποι συστήματος',
	'group-sysadmin-member' => 'ἐπίτροπος συστήματος', # Fuzzy
	'group-coder' => 'Κωδικεύοντες',
	'group-coder-member' => 'κωδικεύς', # Fuzzy
	'group-inactive' => 'Ἀνενεργοὶ χρώμενοι',
	'group-inactive-member' => 'ἀνενεργὸς χρώμενος', # Fuzzy
	'grouppage-inactive' => '{{ns:project}}:Ἀνενεργοὶ χρώμενοι',
);

/** Swiss German (Alemannisch)
 * @author Als-Chlämens
 * @author Als-Holder
 * @author Melancholie
 */
$messages['gsw'] = array(
	'wikimediamessages-desc' => 'Wikimediaspezifischi Syschtemnochrichte',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=gsw',
	'sitesupport' => 'Finanzielli Hilf',
	'tooltip-n-sitesupport' => 'Unterstitz is',
	'specialpages-group-contribution' => 'Spände/Spändeufruef',
	'nstab-creator' => 'Urheber',
	'nstab-institution' => 'Institution',
	'nstab-sequence' => 'Reihefolg',
	'nstab-timedtext' => 'Untertitel',
	'group-Ex_Administrator' => 'Ehmoligi Administratore',
	'group-Ex_Administrator-member' => '{{GENDER:$1|Ehmolige Administrator|Ehmoligi Administratori}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Ehmoligi Administratore',
	'group-Ex_Bureaucrat' => 'Ehmoligi Bürokrate',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|Ehmolige Bürokrat|Ehmoligi Bürokrati}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Ehmoligi Bürokrate',
	'group-Image-reviewer' => 'Dateipriefer',
	'group-Image-reviewer-member' => '{{GENDER:$1|Dateipriefer|Dateiprieferi}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:Dateipriefer',
	'group-OTRS-member' => 'OTRS-Mitglider',
	'group-OTRS-member-member' => '{{GENDER:$1|OTRS-Mitgliid}}',
	'grouppage-OTRS-member' => '{{ns:project}}:OTRS-Mitglider',
	'group-abusefilter' => 'Missbruuchsfilter-Bearbeiter',
	'group-abusefilter-member' => '{{GENDER:$1|Missbruuchsfilter-Bearbeiter|Missbruuchsfilter-Bearbeiteri}}',
	'grouppage-abusefilter' => '{{ns:project}}:Missbruuchsfilter-Bearbeiter',
	'group-accountcreator' => 'Benutzerkonte-Aaleger',
	'group-accountcreator-member' => '{{GENDER:$1|Benutzerkonte-Aaleger|Benutzerkonte-Aalegeri}}',
	'grouppage-accountcreator' => '{{ns:project}}:Benutzerkonte-Aaleger',
	'group-arbcom' => 'Schidsgrichtsmitglider',
	'group-arbcom-member' => '{{GENDER:$1|Schidsgrichtsmitgliid}}',
	'grouppage-arbcom' => '{{ns:project}}:Schidsgrichtsmitglider',
	'group-autopatrolled' => 'Autopatrullierer',
	'group-autopatrolled-member' => '{{GENDER:$1|Automatischer Priefer|Automatischi Prieferi}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Automatischi Priefer',
	'group-autoreviewer' => 'Autoreviewer',
	'group-autoreviewer-member' => '{{GENDER:$1|Automatischer Dateipriefer|Automatischi Dateiprieferi}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Autoreviewer',
	'group-bigexport' => 'Großexporteur',
	'group-bigexport-member' => '{{GENDER:$1|Großexporteur|Großexporteuri}}',
	'grouppage-bigexport' => '{{ns:project}}:Großexporteur',
	'group-botadmin' => 'Bot mit Administratorrächt',
	'group-botadmin-member' => '{{GENDER:$1|Bot mit Administratorrächt}}',
	'grouppage-botadmin' => '{{ns:project}}:Bot mit Administratorrächt',
	'group-confirmed' => 'Bstätigti Benutzer',
	'group-confirmed-member' => '{{GENDER:$1|Bstätigter Benutzer|Bstätigti Benutzeri}}',
	'grouppage-confirmed' => '{{ns:project}}:Bstätigti Benutzer',
	'group-editprotected' => 'Bearbeiter vun ere gschitzte Syte',
	'group-editprotected-member' => '{{GENDER:$1|Bearbeiter vun ere gschitzte Syte|Bearbeiteri vun ere gschitzte Syte}}',
	'grouppage-editprotected' => '{{ns:project}}:Bearbeiter vun ere gschitzte Syte',
	'group-eliminator' => 'Lescher',
	'group-eliminator-member' => '{{GENDER:$1|Lescher|Lescheri}}',
	'grouppage-eliminator' => '{{ns:project}}:Lescher',
	'group-filemover' => 'Dateiverschieber',
	'group-filemover-member' => '{{GENDER:$1|Dateiverschieber|Dateiverschieberi}}',
	'grouppage-filemover' => '{{ns:project}}:Dateiverschieber',
	'group-flood' => 'Botbenutzer',
	'group-flood-member' => '{{GENDER:$1|Bötlibenutzer|Bötlibenutzeri}}',
	'grouppage-flood' => '{{ns:project}}:Botbenutzer',
	'group-founder' => 'Grinder',
	'group-founder-member' => '{{GENDER:$1|Grinder|Grinderi}}',
	'grouppage-founder' => '{{ns:project}}:Grinder',
	'group-import' => 'Importeur',
	'group-import-member' => '{{GENDER:$1|Importeur|Importeuri}}',
	'grouppage-import' => '{{ns:project}}:Importeur',
	'group-interface_editor' => 'Benutzeroberflechine-Bearbeiter',
	'group-interface_editor-member' => '{{GENDER:$1|Benutzeroberflächibearbeiter|Benutzeroberflächibearbeiteri}}',
	'grouppage-interface_editor' => '{{ns:project}}:Benutzeroberflechine-Bearbeiter',
	'group-ipblock-exempt' => 'IP-Sperri-Usnahme',
	'group-ipblock-exempt-member' => '{{GENDER:$1|Vo IP-Sperre-Ussgnommener|Vo IP-Sperre-Ussgnommeni}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP-Sperri-Usnahm',
	'group-patroller' => 'Fäldhieter',
	'group-patroller-member' => '{{GENDER:$1|Fäldhieter|Fäldhieteri}}',
	'grouppage-patroller' => '{{ns:project}}:Priefer',
	'group-researcher' => 'Untersuecher',
	'group-researcher-member' => '{{GENDER:$1|Rechercheur|Rechercheuri}}',
	'grouppage-researcher' => '{{ns:project}}:Untersuecher',
	'group-rollbacker' => 'Zrucksetzer',
	'group-rollbacker-member' => '{{GENDER:$1|Zruggsetzer|Zruggsetzeri}}',
	'grouppage-rollbacker' => '{{ns:project}}:Zrucksetzer',
	'group-transwiki' => 'Transwiki-Importeur',
	'group-transwiki-member' => '{{GENDER:$1|Transwiki-Importeur|Transwiki-Importeuri}}',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki-Importeur',
	'group-trusted' => 'Vertröuens-Benutzer',
	'group-trusted-member' => '{{GENDER:$1|Vertröuens-Benutzer|Vertröuens-Benutzeri}}',
	'grouppage-trusted' => '{{ns:project}}:Vertröuens-Benutzer',
	'group-Global_bot' => 'Wältwyti Bötli',
	'group-Global_bot-member' => '{{GENDER:$1|Bötli uff allene Projäkt}}',
	'group-Global_rollback' => 'Wältwyti Zrucksetzer',
	'group-Global_rollback-member' => '{{GENDER:$1|Globaler Zruggsetzer|Globali Zruggsetzeri}}',
	'group-Global_sysops' => 'Wältwyte Ammann',
	'group-Global_sysops-member' => '{{GENDER:$1|Amman uff allene Projäkt|Amtsfrou uff allene Projäkt}}',
	'group-Ombudsmen' => 'Ombudsmanne',
	'group-Ombudsmen-member' => '{{GENDER:$1|Ombudsmaa|Ombudsfrau}}',
	'group-Staff' => 'Mitarbeiter',
	'group-Staff-member' => 'Mitarbeiter',
	'group-editinterface' => 'Benutzeroberflächi bearbeite',
	'group-editinterface-member' => '{{GENDER:$1|Benutzeroberflächibearbeiter|Benutzeroberflächibearbeiteri}}',
	'group-steward' => 'Steward',
	'group-steward-member' => '{{GENDER:$1|Huusmeister|Huusmeisteri}}',
	'group-sysadmin' => 'Syschtemadminischtratore',
	'group-sysadmin-member' => '{{GENDER:$1|Systemadministrator|Systemadministratori}}',
	'group-API_High_Limit_Requestor' => 'Hoch-API-Limit-Aafroger',
	'group-API_High_Limit_Requestor-member' => '{{GENDER:$1|Hoch-API-Limit-Aafroger|Hoch-API-Limit-Aafroger}}',
	'group-Indic_Bots' => 'Bot fir indischi Sproche',
	'group-Indic_Bots-member' => '{{GENDER:$1|Bot fir indischi Sproche}}',
	'group-New_wikis_importer' => 'Neiwikiimporteur',
	'group-New_wikis_importer-member' => '{{GENDER:$1|Neiwikiimporteur|Neiwikiimporteuri}}',
	'group-global-ipblock-exempt' => 'Globali IP-Sperre-Uusgnummeni',
	'group-global-ipblock-exempt-member' => '{{GENDER:$1|Globali IP-Sperre-Uusgnummene|Globali IP-Sperre-Uusgnummeni}}',
	'group-recursive-export' => 'Rekursivi Exporteur',
	'group-recursive-export-member' => '{{GENDER:$1|Rekursive Exporteur|Rekursivi Exporteuri}}',
	'group-translationadmin' => 'Übersetzigsammane',
	'group-translationadmin-member' => '{{GENDER:$1|Übersetzigsamman|Übersetzigsamtsfrou}}',
	'grouppage-translationadmin' => '{{ns:project}}:Übersetzigsammane',
	'group-coder' => 'Programmierer',
	'group-coder-member' => '{{GENDER:$1|Programmierer|Programmiereri}}',
	'group-inactive' => 'Inaktivi Benutzer',
	'group-inactive-member' => '{{GENDER:$1|Inaktiver Benutzer|Inaktivi Benutzeri}}',
	'grouppage-inactive' => '{{ns:project}}:Inactivi Benutzer',
	'wikimedia-copyright' => 'Tekscht isch verfiegbar unter dr <a href="//creativecommons.org/licenses/by-sa/3.0/deed.de">Creative Commons Attribution/Share-Alike License</a>; s cha syy, ass es zuesätzligi Bedingige git. Lueg d <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Nutzigsbedingige</a> fir Einzelheite.',
	'wikimedia-copyrightwarning' => "Mit em Klick uf „{{int:savearticle}}“ erklersch di yyverstande mit dr [//wikimediafoundation.org/wiki/Terms_of_Use Nutzigsbedingige] un lizänziersch dyni Bearbeitig uuwiderrueflig unter dr Lizänz [//als.wikipedia.org/wiki/Wikipedia:Lizenzbestimmungen_Commons_Attribution-ShareAlike_3.0_Unported ''Creative Commons'' „Namensnännig / Wytergab unter glyche Bedingige 3.0“] un dr [//als.wikipedia.org/wiki/Wikipedia:GNU_Freie_Dokumentationslizenz GFDL].
Du stimmsch zue, dass e Hyperlink oder e URL zue dr Syte fir di notwändig Zueschryybig, no dr ''Creative-Commons''-Lizänz, längt.",
	'cant-delete-main-page' => 'Du chasch d Houptsyte weder lösche noch verschiebe.',
	'wikimedia-translationnotifications-signup-legal' => 'Mit Aagab vu däne Informatione stimmsch zue, d Wikimedia Foundation di zue Themene im Zämmehang mit Ibersetzige un andere Informatione zue Wikimedia derf kontaktiere, wu unsre Meinig no fir Di vu Interässi sin. Du stimmsch au zue, dass Dyni Date in dr Vereinigte Staate vu Amerika chenne gspycheret wäre un unsere [https://wikimediafoundation.org/wiki/Privacy_policy Dateschutzrichtlinie] unterlige.',
	'upload-more-photos-of-this-monument' => 'Wyteri Foto vu däm Dänkmol uffelade',
);

/** Gujarati (ગુજરાતી)
 * @author Aksi great
 * @author Ashok modhvadia
 * @author Dsvyas
 * @author KartikMistry
 * @author Nemo bis
 * @author Sushant savla
 * @author לערי ריינהארט
 */
$messages['gu'] = array(
	'wikimediamessages-desc' => 'વિકિમીડિયા પૂરતા સંદેશ',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=gu',
	'sitesupport' => 'દાન',
	'tooltip-n-sitesupport' => 'અમારું સમર્થન કરો',
	'specialpages-group-contribution' => 'સહભાગ/ફાળો ઉઘરાવ',
	'nstab-creator' => 'રચયિતા',
	'nstab-institution' => 'સંસ્થા',
	'nstab-sequence' => 'અનુક્રમ',
	'nstab-timedtext' => 'સમય મર્યાદિત લેખન',
	'group-Ex_Administrator' => 'પૂર્વ પ્રબંધકો',
	'group-Ex_Administrator-member' => '{{GENDER:$1|પૂર્વ પ્રબંધક}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:પૂર્વ પ્રબંધકો',
	'group-Ex_Bureaucrat' => 'સેવાતીત વહીવટ કર્તા',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|પૂર્વ વહીવટી}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}: પૂર્વ વહીવટી',
	'group-Image-reviewer' => 'ચિત્ર સમીક્ષકો',
	'group-Image-reviewer-member' => '{{GENDER:$1|ચિત્ર પુનરાવલોકન કરનારા}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:ચિત્ર પુનર્વાલોકન',
	'group-OTRS-member' => 'OTRS સભ્યો',
	'group-OTRS-member-member' => '{{GENDER:$1|OTRS સભ્ય}}',
	'grouppage-OTRS-member' => '{{ns:project}}:OTRS સભ્યો',
	'group-abusefilter' => 'અપશબ્દ ગાળણ સંપાદકો',
	'group-abusefilter-member' => '{{GENDER:$1|અપશબ્દ ગાળણ સંપાદક}}',
	'grouppage-abusefilter' => '{{ns:project}}:અપશબ્દ ગાળણ સંપાદક',
	'group-accountcreator' => 'ખાતું ખોલનારા',
	'group-accountcreator-member' => '{{GENDER:$1|ખાતા રચયિતા}}',
	'grouppage-accountcreator' => '{{ns:project}}:ખાતા રચનાર',
	'group-arbcom' => 'મધ્યસ્થિ સમિતી સભ્યો',
	'group-arbcom-member' => '{{GENDER:$1|મધ્યસ્થી સમિતી સભ્ય}}',
	'grouppage-arbcom' => '{{ns:project}}:મધ્યસ્થ સમિતીના સભ્ય',
	'group-autopatrolled' => 'સ્વયંચાલિત પ્રહરીઓ',
	'group-autopatrolled-member' => '{{GENDER:$1|સ્વયંચાલિત પ્રહરી}}',
	'grouppage-autopatrolled' => '{{ns:project}}:સ્વયંચાલિત ઊલટાવનાર',
	'group-autoreviewer' => 'સ્વયંચલિત સમીક્ષક',
	'group-autoreviewer-member' => '{{GENDER:$1|સ્વયંચાલિત તપાસનાર}}',
	'grouppage-autoreviewer' => '{{ns:project}}:સ્વયંચાલિત પુનરાવલોકન કરનારા',
	'group-bigexport' => 'મોટાં નિકાસકારો',
	'group-bigexport-member' => '{{GENDER:$1|મોટો નિકાસક}}',
	'grouppage-bigexport' => '{{ns:project}}:મોટા નિકાસકાર',
	'group-botadmin' => 'પ્રબંધકીય હક્કો ધરાવતા બૉટ',
	'group-botadmin-member' => '{{GENDER:$1|વ્યવસ્થાપક હક્ક ધરાવતું બોટ}}',
	'grouppage-botadmin' => '{{ns:project}}:પ્રબંધકીય હક્કો ધરાવતાં બૉટ',
	'group-confirmed' => 'મંજૂર સભ્યો',
	'group-confirmed-member' => '{{GENDER:$1|મંજૂર સભ્ય}}',
	'grouppage-confirmed' => '{{ns:project}}:મંજૂર સભ્યો',
	'group-editprotected' => 'સંરક્ષિત પૃષ્ઠના સંપાદકો',
	'group-editprotected-member' => '{{GENDER:$1|સુરક્ષિત પૃષ્ઠ સંપાદક}}',
	'grouppage-editprotected' => '{{ns:project}}:પરિયોજના પૃષ્ઠ સંપાદકો',
	'group-eliminator' => 'નાશકો',
	'group-eliminator-member' => '{{GENDER:$1|નાશક}}',
	'grouppage-eliminator' => '{{ns:project}}:નાશકો',
	'group-filemover' => 'ફાઈલ હટાવનારા',
	'group-filemover-member' => '{{GENDER:$1|ફાઈલ હટાવનાર }}',
	'grouppage-filemover' => '{{ns:project}}:ફાઈલ હટાવનારા',
	'group-flood' => 'બોટ ચાલક',
	'group-flood-member' => '{{GENDER:$1|બોટ વપરાશકર્તા}}',
	'grouppage-flood' => '{{ns:project}}: બૉટ વાપરનાર',
	'group-founder' => 'સ્થાપકો',
	'group-founder-member' => '{{GENDER:$1|સ્થાપક}}',
	'grouppage-founder' => '{{ns:project}}:સ્થાપકો',
	'group-import' => 'આયાતકારો',
	'group-import-member' => '{{GENDER:$1|આયાતકર્તા}}',
	'grouppage-import' => '{{ns:project}}:આયાતકો',
	'group-interface_editor' => 'ઈંટરફેઝ સંપાદકો',
	'group-interface_editor-member' => '{{GENDER:$1|ઈંટરફેઝ સંપાદક}}',
	'grouppage-interface_editor' => '{{ns:project}}:ઈંટરફેઝ સંપાદકો',
	'group-ipblock-exempt' => 'IP પ્રતિબંધ છૂટછાટ',
	'group-ipblock-exempt-member' => '{{GENDER:$1|IP પ્રતિબંધ અપવાદ}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP પ્રતિબંધ અપવાદ',
	'group-patroller' => 'પ્રહરીઓ',
	'group-patroller-member' => '{{GENDER:$1|પ્રહરી}}',
	'group-researcher' => 'સંશોધકો',
	'group-researcher-member' => '{{GENDER:$1|સંશોધક}}',
	'grouppage-researcher' => '{{ns:project}}:સંશોધકો',
	'group-rollbacker' => 'ઊલટાવનારા',
	'group-rollbacker-member' => '{{GENDER:$1|ઊલટાવનાર}}',
	'grouppage-rollbacker' => '{{ns:project}}:ઊલટાવનારા',
	'group-transwiki' => 'આંતર વિકિ આયાત',
	'group-transwiki-member' => '{{GENDER:$1|આંતરવિકિ આયાતક}}',
	'grouppage-transwiki' => '{{ns:project}}:આંતર વિકિ આયાતકો',
	'group-trusted' => 'વિશ્વાસુ સભ્યો',
	'group-trusted-member' => '{{GENDER:$1|વિશ્વાસુ સભ્ય}}',
	'grouppage-trusted' => '{{ns:project}}:વિશ્વાસુ સભ્યો',
	'group-Global_bot' => 'વૈશ્વીક બૉટ',
	'group-Global_bot-member' => '{{GENDER:$1|વૈશ્વીક બૉટ}}',
	'group-Global_rollback' => 'વૈશ્વીક ઊલટાવનાર',
	'group-Global_rollback-member' => '{{GENDER:$1|વૈશ્વીક ઊલટાવનાર}}',
	'group-Global_sysops' => 'વૈશ્વીક સીસોપ્સ (sysops)',
	'group-Global_sysops-member' => '{{GENDER:$1|વૈશ્વીક સીસોપ}}',
	'group-Ombudsmen' => 'ઓમ્બડ્સમેન (સુલેહ કરનાર)',
	'group-Ombudsmen-member' => '{{GENDER:$1|ઓમ્બડ્સમેન (મધ્યસ્થી કરનાર)}}',
	'group-Staff' => 'કર્મચારી',
	'group-Staff-member' => '{{GENDER:$1|કર્મચારી}}',
	'group-editinterface' => 'ઈંટરફેઝ સંપાદકો',
	'group-editinterface-member' => '{{GENDER:$1|ઈંટરફેઝ સંપાદક}}',
	'group-steward' => 'કારભારી',
	'group-steward-member' => '{{GENDER:$1|કારભારી}}',
	'group-sysadmin' => 'સિસ્ટમ સંચાલકો',
	'group-sysadmin-member' => '{{GENDER:$1|સિસ્ટમ સંચાલક}}',
	'group-translationadmin' => 'ભાષાંતર સંચાલકો',
	'group-translationadmin-member' => '{{GENDER:$1|ભાષાંતર સંચાલક}}',
	'grouppage-translationadmin' => '{{ns:project}}:ભાષાંતર સંચાલકો',
	'group-coder' => 'કોડર્સ',
	'group-coder-member' => '{{GENDER:$1|કોડર}}',
	'group-inactive' => 'અસક્રિય સભ્યો',
	'group-inactive-member' => '{{GENDER:$1|અસક્રિય સભ્ય}}',
	'grouppage-inactive' => '{{ns:project}}:અસક્રિય સભ્યો',
	'wikimedia-copyright' => 'આ લેખન <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike License</a>હેઠળ ઉપલબ્ધ છે;
વધારાની શરતો લાગુ છે.
વધુ માહિતી માટે <a href="//wikimediafoundation.org/wiki/Terms_of_use">વપરાશની શરતો</a> જુઓ .',
	'wikimedia-copyrightwarning' => '"{{int:savearticle}}" બટન પર ક્લિક કરવાનો અર્થ એમ છે કે તમે અહિંની [//wikimediafoundation.org/wiki/Terms_of_Use વપરાશની નીતિ] સાથે સહમત છો અને તમે તમારું યોગદાન [//creativecommons.org/licenses/by-sa/3.0/ CC-BY-SA 3.0 પરવાના] તથા [//www.gnu.org/copyleft/fdl.html GFDL] હેઠળ અબાધિત રીતે સદાને માટે અહિં ઉપલબ્ધ કરાવો છો.
તમે એ વાત સાથે પણ સહમત થાવ છો કે ક્રિએટીવ કોમન્સ પરવાના હેઠળ હાયપર લિંક અથવા URL એ પૂરતું શ્રેય છે.',
	'cant-delete-main-page' => 'તમે મુખ્ય પાનાંને દૂર કરી અથવા ખસેડી શકશો નહી.',
);

/** Manx (Gaelg)
 * @author MacTire02
 */
$messages['gv'] = array(
	'sitesupport' => 'Toyrtyssyn',
	'tooltip-n-sitesupport' => 'Cooin lhien',
	'group-Staff' => 'Fwirran',
	'group-Staff-member' => 'oltey fwirran',
);

/** Hakka (Hak-kâ-fa)
 * @author Hakka
 */
$messages['hak'] = array(
	'sitesupport' => 'Chan-chhu',
	'tooltip-n-sitesupport' => 'Chṳ̂-chhu',
);

/** Hawaiian (Hawai`i)
 * @author Singularity
 */
$messages['haw'] = array(
	'sitesupport' => 'E lūlū mai',
	'tooltip-n-sitesupport' => 'Kāko‘o mai',
	'group-steward' => 'Nā kuene',
	'group-steward-member' => 'Kuene', # Fuzzy
);

/** Hebrew (עברית)
 * @author Amire80
 * @author Deror avi
 * @author Inkbug
 * @author Rotem Liss
 * @author Rotemliss
 * @author YaronSh
 * @author Yonidebest
 * @author תומר ט
 */
$messages['he'] = array(
	'wikimediamessages-desc' => 'הודעות המיוחדות לוויקימדיה',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=he',
	'sitesupport' => 'תרומות',
	'tooltip-n-sitesupport' => 'תרומה',
	'specialpages-group-contribution' => 'תרומות/התרמה',
	'nstab-creator' => 'יוצר',
	'nstab-institution' => 'מוסד',
	'nstab-sequence' => 'רצף',
	'nstab-timedtext' => 'טקסט מתוזמן',
	'group-Ex_Administrator' => 'מפעילים לשעבר',
	'group-Ex_Administrator-member' => '{{GENDER:$1|מפעיל לשעבר|מפעילה לשעבר}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:מפעילים לשעבר',
	'group-Ex_Bureaucrat' => 'ביורוקרטים לשעבר',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|ביורוקרט לשעבר|ביורוקרטית לשעבר}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:ביורוקרטים לשעבר',
	'group-Image-reviewer' => 'סוקרי תמונות',
	'group-Image-reviewer-member' => '{{GENDER:$1|סוקר|סוקרת}} תמונות',
	'grouppage-Image-reviewer' => '{{ns:project}}: סוקרי תמונות',
	'group-OTRS-member' => 'חברי OTRS',
	'group-OTRS-member-member' => '{{GENDER:$1|חבר|חברת}} OTRS',
	'grouppage-OTRS-member' => '{{ns:project}}:חברי OTRS',
	'group-abusefilter' => 'עורכי מסנן ההשחתה',
	'group-abusefilter-member' => '{{GENDER:$1|עורך|עורכת}} מסנן ההשחתה',
	'grouppage-abusefilter' => '{{ns:project}}:עורך מסנן ההשחתה',
	'group-accountcreator' => 'יוצרי חשבונות',
	'group-accountcreator-member' => '{{GENDER:$1|יוצר|יוצרת}} חשבונות',
	'grouppage-accountcreator' => '{{ns:project}}:יוצר חשבונות',
	'group-arbcom' => 'חברי ועדת הבוררות',
	'group-arbcom-member' => '{{GENDER:$1|חבר|חברת}} ועדת הבוררות',
	'grouppage-arbcom' => '{{ns:project}}:חבר ועדת הבוררות',
	'group-autopatrolled' => 'בדוקי עריכות אוטומטית',
	'group-autopatrolled-member' => '{{GENDER:$1|בדוק עריכות אוטומטית|בדוקת עריכות אוטומטית}}',
	'grouppage-autopatrolled' => '{{ns:project}}:בדוק עריכות אוטומטית',
	'group-autoreviewer' => 'בוחני עריכות אוטומטית',
	'group-autoreviewer-member' => '{{GENDER:$1|סוקר|סוקרת}} עריכות אוטומטית',
	'grouppage-autoreviewer' => '{{ns:project}}:בוחן עריכות אוטומטית',
	'group-bigexport' => 'מבצעי ייצוא גדול',
	'group-bigexport-member' => '{{GENDER:$1|מבצע|מבצעת}} ייצוא גדול',
	'grouppage-bigexport' => '{{ns:project}}:מבצע ייצוא גדול',
	'group-botadmin' => 'בוטים עם הרשאות מפעיל',
	'group-botadmin-member' => '{{GENDER:$1|בוט עם הרשאות מפעיל}}',
	'grouppage-botadmin' => '{{ns:project}}:בוטים עם הרשאות מפעיל',
	'group-confirmed' => 'משתמשים מאומתים',
	'group-confirmed-member' => '{{GENDER:$1|משתמש מאומת|משתמשת מאומתת}}',
	'grouppage-confirmed' => '{{ns:project}}:משתמש מאומת',
	'group-editprotected' => 'עורכי דפים מוגנים',
	'group-editprotected-member' => '{{GENDER:$1|עורך|עורכת}} דפים מוגנים',
	'grouppage-editprotected' => '{{ns:project}}:עורך דפים מוגנים',
	'group-eliminator' => 'מוחקים',
	'group-eliminator-member' => '{{GENDER:$1|מוחק|מוחקת}}',
	'grouppage-eliminator' => '{{ns:project}}:מוחק',
	'group-filemover' => 'מעבירי קבצים',
	'group-filemover-member' => '{{GENDER:$1|מעביר|מעבירה}} קבצים',
	'grouppage-filemover' => '{{ns:project}}:מעביר קבצים',
	'group-flood' => 'משתמשי בוט',
	'group-flood-member' => '{{GENDER:$1|משתמש|משתמשת}} בוט',
	'grouppage-flood' => '{{ns:project}}:משתמש בוט',
	'group-founder' => 'מייסדים',
	'group-founder-member' => '{{GENDER:$1|מייסד|מייסדת}}',
	'grouppage-founder' => '{{ns:project}}:מייסד',
	'group-import' => 'מייבאים',
	'group-import-member' => '{{GENDER:$1|מייבא|מייבאת}}',
	'grouppage-import' => '{{ns:project}}:מייבא',
	'group-interface_editor' => 'עורכי ממשק',
	'group-interface_editor-member' => '{{GENDER:$1|עורך|עורכת}} ממשק',
	'grouppage-interface_editor' => '{{ns:project}}:עורך ממשק',
	'group-ipblock-exempt' => 'חסיני חסימות IP',
	'group-ipblock-exempt-member' => '{{GENDER:$1|חסין|חסינת}} חסימות IP',
	'grouppage-ipblock-exempt' => '{{ns:project}}:חסין חסימות IP',
	'group-patroller' => 'מנטרים',
	'group-patroller-member' => '{{GENDER:$1|מנטר|מנטרת}}',
	'grouppage-patroller' => '{{ns:project}}:מנטרים',
	'group-researcher' => 'עורכי מחקרים',
	'group-researcher-member' => '{{GENDER:$1|חוקר|חוקרת}}',
	'grouppage-researcher' => '{{ns:project}}:עורך מחקר',
	'group-rollbacker' => 'משחזרים',
	'group-rollbacker-member' => '{{GENDER:$1|משחזר|משחזרת}}',
	'grouppage-rollbacker' => '{{ns:project}}:משחזר',
	'group-transwiki' => 'מייבאים בין־אתריים',
	'group-transwiki-member' => '{{GENDER:$1|מייבא|מייבאת}} בין אתרים',
	'grouppage-transwiki' => '{{ns:project}}:מייבא בין-אתרי',
	'group-trusted' => 'משתמשים מהימנים',
	'group-trusted-member' => '{{GENDER:$1|משתמש מהימן|משתמשת מהימנה}}',
	'grouppage-trusted' => '{{ns:project}}:משתמשים מהימנים',
	'group-Global_bot' => 'בוטים גלובליים',
	'group-Global_bot-member' => '{{GENDER:$1|בוט גלובלי}}',
	'group-Global_rollback' => 'משחזרים גלובליים',
	'group-Global_rollback-member' => '{{GENDER:$1|משחזר גלובלי|משחזרת גלובלית}}',
	'group-Global_sysops' => 'מפעילי מערכת גלובליים',
	'group-Global_sysops-member' => '{{GENDER:$1|מפעיל מערכת גלובלי|מפעילת מערכת גלובלית}}',
	'group-Ombudsmen' => 'נציבי תלונות הציבור',
	'group-Ombudsmen-member' => '{{GENDER:$1|נציב|נציבת}} תלונות הציבור',
	'group-Staff' => 'אנשי צוות',
	'group-Staff-member' => 'איש צוות',
	'group-editinterface' => 'עורכי הממשק',
	'group-editinterface-member' => '{{GENDER:$1|עורך|עורכת}} ממשק',
	'group-steward' => 'דיילים',
	'group-steward-member' => '{{GENDER:$1|דייל|דיילת}}',
	'group-sysadmin' => 'מנהלי מערכת',
	'group-sysadmin-member' => '{{GENDER:$1|מנהל|מנהלת}} מערכת',
	'group-API_High_Limit_Requestor' => 'שולחי בקשות API עם מגבלה גבוהה',
	'group-API_High_Limit_Requestor-member' => '{{GENDER:$1|שולח|שולחת}} בקשות API עם מגבלה גבוהה',
	'group-Indic_Bots' => 'בוטים הודיים',
	'group-Indic_Bots-member' => '{{GENDER:$1|בוט הודי}}',
	'group-New_wikis_importer' => 'מייבאים לאתרי ויקי חדשים',
	'group-New_wikis_importer-member' => '{{GENDER:$1|מייבא|מייבאת}} לאתרי ויקי חדשים',
	'group-global-ipblock-exempt' => 'חסינים מחסימת IP גלובלית',
	'group-global-ipblock-exempt-member' => '{{GENDER:$1|חסין|חסינה}} מחסימת IP גלובלית',
	'group-recursive-export' => 'מבצעי ייצוא רקורסיבי',
	'group-recursive-export-member' => '{{GENDER:$1|מבצע|מבצעת}} ייצוא רקורסיבי',
	'group-translationadmin' => 'מנהלי תרגום',
	'group-translationadmin-member' => '{{GENDER:$1|מנהל|מנהלת}} תרגום',
	'grouppage-translationadmin' => '{{ns:project}}:מנהלי תרגום',
	'group-centralnoticeadmin' => 'מנהלי הודעה מרכזית',
	'group-centralnoticeadmin-member' => '{{GENDER:$1|מנהל|מנהלת}} הודעה מרכזית',
	'grouppage-centralnoticeadmin' => '{{ns:project}}:מנהלי הודעה מרכזית',
	'group-coder' => 'מתכנתים',
	'group-coder-member' => '{{GENDER:$1|מתכנת|מתכנתת}}',
	'group-inactive' => 'משתמשים בלתי פעילים',
	'group-inactive-member' => '{{GENDER:$1|משתמש בלתי־פעיל|משתמשת בלתי־פעילה}}',
	'grouppage-inactive' => '{{ns:project}}:משתמש בלתי פעיל',
	'shared-repo-name-shared' => 'ויקישיתוף',
	'wikimedia-copyright' => 'הטקסט מוגש בכפוף לרישיון <a href="//creativecommons.org/licenses/by-sa/3.0/deed.he">Creative Commons ייחוס-שיתוף זהה 3.0</a>; ייתכן שישנם תנאים נוספים. ראו <a href="//wikimediafoundation.org/wiki/Terms_of_Use">תנאי שימוש</a> לפרטים.',
	'wikidata-copyright' => 'כל הנתונים המובְנים במרחב הראשי ובמרחב במאפיינים (property) זמינים לפי תנאי <a href="//creativecommons.org/publicdomain/zero/1.0/" title="Definition of the Creative Commons CC0 License">רישיון קריאייטיב קומונז CC0</a>; טקסט במרחבי שם אחרים זמין לפי תנאי <a href="//creativecommons.org/licenses/by-sa/3.0/" title="Definition of the Creative Commons Attribution/Share-Alike License">רישיון קריאייטיב קומונז ייחוס–שיתוף זהה</a>',
	'wikidata-shortcopyrightwarning' => 'לחיצה על "שמירה" היא הסכמה ל[https://wikimediafoundation.org/wiki/Terms_of_Use תנאי השימוש] והסכמה בלתי־חוזרת לשחרר את תרומתך לפי תנאי [https://creativecommons.org/publicdomain/zero/1.0/ רישיון CC0].', # Fuzzy
	'wikimedia-copyrightwarning' => 'בשמירת הדף, אתם מסכימים ל[//wikimediafoundation.org/wiki/Terms_of_Use תנאי השימוש] ואתם מסכימים באופן בלתי חוזר לשחרר את תרומתכם בכפוף לרישיון [//creativecommons.org/licenses/by-sa/3.0/deed.he Creative Commons ייחוס-שיתוף זהה 3.0] ולרישיון [//www.gnu.org/copyleft/fdl.html GFDL]. אתם מסכימים לכך שקישור או כתובת URL הוא ייחוס מספיק בהתאם לרישיון Creative Commons.',
	'wikibase-sitelinks-wikivoyage' => 'דפי ויקימסע שמקושרים לפריט הזה',
	'cant-delete-main-page' => 'אי־אפשר למחוק או להעביר את הדף הראשי',
	'wikimedia-translationnotifications-signup-legal' => 'אתם מסכימים שאם תספקו מידע זה לקרן ויקימדיה, אנחנו אולי ניצחור אתכם קשר בנושא תרגומים שקשורים לתנועת ויקימדיה שאולי מעניינים אותך. אתם מסכימים שהמידע שלכם יאוחסן בארצות הברית של אמריה ושהוא נתון ל[https://wikimediafoundation.org/wiki/Privacy_policy מדיניות הפרטיות] שלנו.',
	'upload-more-photos-of-this-monument' => 'העלאה של צילומים נוספים את אתר המורשת',
	'extdist-branch-master' => 'master (גרסת הפיתוח האחרונה)',
	'extdist-branch-REL1_21' => '1.21 (גרסה יציבה אחרונה של מדיה־ויקי)',
	'createacct-helpusername-url' => '{{ns:Project}}:Username_policy',
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(עִזרו לי לבחור)]]',
	'createacct-captcha-help-url' => '{{ns:Project}}:Request an account',
	'createacct-imgcaptcha-help' => 'לא רואה את התמונה? [[{{MediaWiki:createacct-captcha-help-url}}|בקשת חשבון]]',
);

/** Hindi (हिन्दी)
 * @author Ansumang
 * @author Kaustubh
 * @author Siddhartha Ghai
 * @author לערי ריינהארט
 * @author आलोक
 */
$messages['hi'] = array(
	'wikimediamessages-desc' => 'विकिमीडिया-विशिष्ट संदेश',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=hi',
	'sitesupport' => 'दान',
	'tooltip-n-sitesupport' => 'हमें सहायता दें',
	'specialpages-group-contribution' => 'योगदान/फंडरेज़र',
	'nstab-creator' => 'निर्माता',
	'nstab-institution' => 'संस्था',
	'nstab-sequence' => 'अनुक्रम',
	'nstab-timedtext' => 'समयानुबर्ती पाठ',
	'group-Ex_Administrator' => 'पूर्व प्रबंधक',
	'group-Ex_Administrator-member' => '{{GENDER:$1|पूर्व प्रबंधक}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:पूर्व प्रबन्धक',
	'group-Ex_Bureaucrat' => 'पूर्व प्रशासक',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|पूर्व प्रशासक}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:पूर्व प्रशासक',
	'group-Image-reviewer' => 'चित्र समीक्षक',
	'group-Image-reviewer-member' => '{{GENDER:$1|चित्र समीक्षक}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:चित्र समीक्षक',
	'group-OTRS-member' => 'OTRS सदस्य',
	'group-OTRS-member-member' => '{{GENDER:$1|ओटीआरएस सदस्य}}',
	'grouppage-OTRS-member' => '{{ns:project}}:OTRS सदस्य',
	'group-abusefilter' => 'दुरुपयोग छननी संपादक',
	'group-abusefilter-member' => '{{GENDER:$1|दुरुपयोग छननी संपादक}}',
	'grouppage-abusefilter' => '{{ns:project}}:दुरुपयोग छननी संपादक',
	'group-accountcreator' => 'खाता निर्माता',
	'group-accountcreator-member' => '{{GENDER:$1|खाता निर्माता}}',
	'grouppage-accountcreator' => '{{ns:project}}:खाता निर्माता',
	'group-arbcom' => 'अरबीट्रेसन कमिटी सदस्य',
	'group-arbcom-member' => '{{GENDER:$1|अरबीट्रेसन कमिटी सदस्य}}',
	'grouppage-arbcom' => '{{ns:project}}:अरबीट्रेसन कमिटी सदस्य',
	'group-autopatrolled' => 'स्वसमीक्षक',
	'group-autopatrolled-member' => '{{GENDER:$1|स्व समीक्षक}}',
	'grouppage-autopatrolled' => '{{ns:project}}:स्वचालित निगरानी रखने वाले',
	'group-autoreviewer' => 'स्वचालित समीक्षक',
	'group-autoreviewer-member' => '{{GENDER:$1|स्वचालित समीक्षक}}',
	'grouppage-autoreviewer' => '{{ns:project}}:स्वचालित समीक्षक',
	'group-bigexport' => 'बड़े निर्यातक',
	'group-bigexport-member' => '{{GENDER:$1|बड़ा निर्यातक}}',
	'grouppage-bigexport' => '{{ns:project}}:बड़े निर्यातक',
	'group-botadmin' => 'प्रबन्धक अधिकारों वाले बॉट',
	'group-botadmin-member' => '{{GENDER:$1|प्रबन्धक अधिकारों वाले बॉट}}',
	'grouppage-botadmin' => '{{ns:project}}:प्रबन्धक अधिकारों वाले बॉट',
	'group-confirmed' => 'पुष्टट सदस्य',
	'group-confirmed-member' => '{{GENDER:$1|पुष्ट सदस्य}}',
	'grouppage-confirmed' => '{{ns:project}}:पुष्ट सदस्य',
	'group-editprotected' => 'सुरक्षित पृष्ठ संपादकों',
	'group-editprotected-member' => '{{GENDER:$1|सुरक्षित पृष्ठ संपादक}}',
	'grouppage-editprotected' => '{{ns:project}}:सुरक्षा पृष्ठ संपादक',
	'group-eliminator' => 'निरसक',
	'group-eliminator-member' => '{{GENDER:$1|निरसक}}',
	'grouppage-eliminator' => '{{ns:project}}:निरसक',
	'group-filemover' => 'फ़ाइल मूवर्स',
	'group-filemover-member' => '{{GENDER:$1|फ़ाइल मुवर}}',
	'grouppage-filemover' => '{{ns:project}}:फ़ाइल मूवर्स',
	'group-flood' => 'बॉट सदस्य',
	'group-flood-member' => '{{GENDER:$1|बॉट सदस्य}}',
	'grouppage-flood' => '{{ns:project}}:बॉट सदस्य',
	'group-founder' => 'संस्थापक',
	'group-founder-member' => '{{GENDER:$1|संस्थापक}}',
	'grouppage-founder' => '{{ns:project}}:संस्थापक',
	'group-import' => 'आयातक',
	'group-import-member' => '{{GENDER:$1|आयातक}}',
	'grouppage-import' => '{{ns:project}}:आयातक',
	'group-interface_editor' => 'इंटरफेस संपादक',
	'group-interface_editor-member' => '{{GENDER:$1|इंटरफ़ेस संपादक}}',
	'grouppage-interface_editor' => '{{ns:project}}:इंटरफेस संपादक',
	'group-ipblock-exempt' => 'आईपी अवरोध मुक्त',
	'group-ipblock-exempt-member' => '{{GENDER:$1|आईपी पता अवरोध मुक्त}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:आईपी अवरोध मुक्त',
	'group-patroller' => 'निरीक्षक',
	'group-patroller-member' => '{{GENDER:$1|निरीक्षक}}',
	'grouppage-patroller' => '{{ns:project}}:निरीक्षक',
	'group-researcher' => 'अनुसंधानकर्ता',
	'group-researcher-member' => '{{GENDER:$1|अनुसंधानकर्ता}}',
	'grouppage-researcher' => '{{ns:project}}:अनुसंधानकर्ता',
	'group-rollbacker' => 'वापस पुरानी स्थिति में लाने वाले',
	'group-rollbacker-member' => '{{GENDER:$1|रोलबैकर}}',
	'grouppage-rollbacker' => '{{ns:project}}:वापस पुरानी स्थिति पर लाने वाले',
	'group-transwiki' => 'विकियों के बीच आयात करने वाले',
	'group-transwiki-member' => '{{GENDER:$1|अंतर-विकि आयातक}}',
	'grouppage-transwiki' => '{{ns:project}}:अंतर-विकि आयातक',
	'group-trusted' => 'विश्वसनीय सदस्य',
	'group-trusted-member' => '{{GENDER:$1|विश्वसनीय सदस्य}}',
	'grouppage-trusted' => '{{ns:project}}:विश्वसनीय सदस्य',
	'group-Global_bot' => 'वैश्विक यंत्र',
	'group-Global_bot-member' => '{{GENDER:$1|वैश्विक बट}}',
	'group-Global_rollback' => 'वैश्विक पुरानी स्थित पर लाने वाले',
	'group-Global_rollback-member' => '{{GENDER:$1|वैश्विक रोलबेकर}}',
	'group-Global_sysops' => 'वैश्विक प्रबन्धक',
	'group-Global_sysops-member' => '{{GENDER:$1|वैश्विक प्रबन्धक}}',
	'group-Ombudsmen' => 'लोक आयुक्त',
	'group-Ombudsmen-member' => '{{GENDER:$1|ओमबड़समैन}}',
	'group-Staff' => 'कर्मचारी',
	'group-Staff-member' => 'स्टाफ़ सदस्य',
	'group-editinterface' => 'अंतरापृष्ठ संपादक',
	'group-editinterface-member' => '{{GENDER:$1|इंटरफेस संपादक}}',
	'group-steward' => 'परिचालक',
	'group-steward-member' => '{{GENDER:$1|सटीवर्ड}}',
	'group-sysadmin' => 'प्रणाली प्रशासक',
	'group-sysadmin-member' => '{{GENDER:$1|सिष्टम प्रबन्धक}}',
	'group-Indic_Bots' => 'इंडिक बॉट्स',
	'group-Indic_Bots-member' => '{{GENDER:$1|इंडिक बॉट}}',
	'group-translationadmin' => 'अनुवाद प्रबन्धक',
	'group-translationadmin-member' => '{{GENDER:$1|अनुवाद प्रबन्धक}}',
	'grouppage-translationadmin' => '{{ns:project}}:अनुवाद प्रबन्धक',
	'group-coder' => 'कोडर्स',
	'group-coder-member' => '{{GENDER:$1|कोडर}}',
	'group-inactive' => 'निष्क्रीय सदस्य',
	'group-inactive-member' => '{{GENDER:$1|निष्क्रीय सदस्य}}',
	'grouppage-inactive' => '{{ns:project}}:निष्क्रीय सदस्य',
	'wikimedia-copyright' => 'पाठ <a href="//creativecommons.org/licenses/by-sa/3.0/">क्रियेटिव कॉमन्स ऐट्रिब्यूशन/शेयर-अलाइक लाइसेंस</a> के अंतर्गत उपलब्ध है; अतिरिक्त शर्तें लागू हो सकती हैं।
अधिक जानकारी के लिए <a href="//wikimediafoundation.org/wiki/Terms_of_Use">उपयोग की शर्तें</a> देखें।',
	'wikidata-shortcopyrightwarning' => '"सहेजें" पर क्लिक करने पर आप [https://wikimediafoundation.org/wiki/Terms_of_Use उपयोग की शर्तें] मानने को बाध्य होते हैं, और आप अपने योगदानों को [https://creativecommons.org/publicdomain/zero/1.0/ CC0 लाइसेंस] के अंतर्गत अपरिवर्तनीय रूप से जारी करने को स्वीकार करते हैं।', # Fuzzy
	'wikimedia-copyrightwarning' => '"{{int:savearticle}}" बटन क्लिक करने पर आप [//wikimediafoundation.org/wiki/Terms_of_Use उपयोग की शर्तें] मानने को बाध्य होते हैं, और आप अपने योगदान [//en.wikipedia.org/wiki/Wikipedia:Text_of_Creative_Commons_Attribution-ShareAlike_3.0_Unported_License CC-BY-SA 3.0 लाइसेंस] एवं [//en.wikipedia.org/wiki/Wikipedia:Text_of_the_GNU_Free_Documentation_License GFDL] के अंतर्गत अपरिवर्तनीय रूप से जारी करने को स्वीकार करते हैं।
आप यह भी स्वीकार करते हैं कि एक हाइपरलिंक या यू॰आर॰एल क्रियेटिव कॉमन्स लाइसेंस के अंतर्गत पर्याप्त ऐट्रिब्यूशन (श्रेय) है।',
	'cant-delete-main-page' => 'आप प्रधान पृष्ठ को स्थानान्तरित या हटा नहीं सकते ।',
);

/** Fiji Hindi (Latin script) (Fiji Hindi)
 * @author Brijlal
 * @author Girmitya
 * @author Thakurji
 */
$messages['hif-latn'] = array(
	'wikimediamessages-desc' => 'Wikimedia specific sandes',
	'sitesupport' => 'Daan',
	'tooltip-n-sitesupport' => 'Ham log ke sahara do',
	'group-abusefilter' => 'Abuse filter ke badle waala',
	'group-abusefilter-member' => 'abuse filter ke badle waala', # Fuzzy
	'grouppage-abusefilter' => '{{ns:project}}:Abuse filter ke badle waala',
	'group-accountcreator' => 'Account ke banae waala',
	'group-bigexport' => 'Barraa exporters',
	'group-bigexport-member' => 'barraa exporter', # Fuzzy
	'grouppage-bigexport' => '{{ns:project}}:Barraa exporter kare waala',
	'group-inactive' => 'Sadasya jon ki abhi haali koi edit nai karis hai',
	'group-inactive-member' => '
{{GENDER:$1|Sadasya jon ki abhi haali ekko edit nai karis hai}}',
	'grouppage-inactive' => '{{ns:project}}:Sadasya jon ki abhi haali ekko edit nai karin hai',
	'cant-delete-main-page' => 'Aap pahila pana ke mitae nai to hatae nai saktaa hae',
);

/** Hiligaynon (Ilonggo)
 * @author Jose77
 * @author Kguirnela
 * @author Tagimata
 */
$messages['hil'] = array(
	'wikimediamessages-desc' => 'ang ginatukoy nga mensahe sang Wikimedia',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=hil',
	'sitesupport' => 'Donasyon',
	'tooltip-n-sitesupport' => 'Sakdaga kami',
	'group-abusefilter' => 'Abusar sala editor',
	'group-abusefilter-member' => 'abusar nga pagsala editor', # Fuzzy
	'grouppage-abusefilter' => '{{ns:project}}:Abusar manugsala nga mga editor',
	'group-accountcreator' => 'Mga Gahimo Akawnt',
	'group-accountcreator-member' => 'nagapanghimo account', # Fuzzy
	'grouppage-accountcreator' => '{{ns:project}}:Mga gahimo Account',
	'group-autopatrolled-member' => 'autobantay', # Fuzzy
	'grouppage-autopatrolled' => '{{ns:project}}:Autobantay',
	'group-autoreviewer' => 'Autorebyuwer',
	'group-autoreviewer-member' => 'autorebyuwer', # Fuzzy
	'grouppage-autoreviewer' => '{{ns:project}}:Autorebyuwer',
	'group-bigexport' => 'Mga Dagkong eksporter',
	'group-bigexport-member' => 'daku nga gadala paguha', # Fuzzy
	'grouppage-bigexport' => '{{ns:project}}:Daku nga mga gapaguha',
	'group-confirmed' => 'Ginsugtan nga mga user',
	'group-confirmed-member' => 'ginpasugtan nga user', # Fuzzy
	'grouppage-confirmed' => '{{ns:project}}:Ginpasugtan nga mga user',
	'group-founder' => 'Mga Nagpatukod',
	'group-founder-member' => 'nagpatukod', # Fuzzy
	'grouppage-founder' => '{{ns:project}}:Mga Nagpatukod',
	'group-import' => 'Mga Nagakuha sa Guha',
	'group-import-member' => 'gapasulod', # Fuzzy
	'grouppage-import' => '{{ns:project}}:Mga Gapasulod',
	'group-ipblock-exempt' => 'IP eksempted harangan',
	'group-ipblock-exempt-member' => 'IP eksemptado harang', # Fuzzy
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP harang eksempsiyon',
	'group-rollbacker' => 'Mga Ginabalik',
	'group-rollbacker-member' => 'manugbalik', # Fuzzy
	'grouppage-rollbacker' => '{{ns:project}}:Mga Manugbalik',
	'group-transwiki' => 'Mga Transwiki nga Gakuha sa guha',
	'group-transwiki-member' => 'transwiki gapasulod', # Fuzzy
	'grouppage-transwiki' => '{{ns:project}}:Transwiki nga mga gapasulod',
	'group-Global_bot' => 'Kalibutan bots',
	'group-Global_bot-member' => 'kalibutan bot', # Fuzzy
	'group-Global_rollback' => 'Kalibutan manugbalik',
	'group-Global_rollback-member' => 'kalibutan manugbalik', # Fuzzy
	'group-Ombudsmen' => 'Mga Ombudsman',
	'group-Ombudsmen-member' => 'ombudsman', # Fuzzy
	'group-Staff' => 'Mga Gabulig',
	'group-Staff-member' => 'gabulig',
	'group-editinterface' => 'Mga ga-ilis sang interface',
	'group-editinterface-member' => 'Mga ga-ilis sang interface', # Fuzzy
	'group-steward' => 'Manugtago',
	'group-steward-member' => 'manughalong', # Fuzzy
	'group-sysadmin' => 'Mga Sistema administrador',
	'group-sysadmin-member' => 'sistema administrador', # Fuzzy
	'group-coder' => 'Koders',
	'group-coder-member' => 'koder', # Fuzzy
	'group-inactive' => 'Di-aktibo nga mga user',
	'group-inactive-member' => 'di-aktibo nga user', # Fuzzy
	'grouppage-inactive' => '{{ns:project}}:Di-aktibo nga mga user',
	'wikimedia-copyright' => 'Ang teksto ay pwede mo makit-an sa idalum sang <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike License</a>;
nanga-dugang nga kasulatan pwede man pagabatunon. Palihog lang bisita sa<a href="//wikimediafoundation.org/wiki/Terms_of_Use">Terms of Use</a> para sa madamu nga detalye.',
	'wikimedia-copyrightwarning' => 'Kung ini ipasulod nimo, nagapasugot ka nga ipagalapta ang imo kontribusyon nga naga pai-dalum sa [//creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] kag ang [//www.gnu.org/copyleft/fdl.html GFDL].
Nagapasugot ka nga kilalanon sa mga nagagamit liwat, sa pinaka kubos, nga nagapamaagi sa hyperlink o URL sa pahina nga gina kontribyut mo.
Palihog lang bisita sa [//wikimediafoundation.org/wiki/Terms_of_Use Terms of Use] para sa madamu nga detalye.', # Fuzzy
);

/** Croatian (hrvatski)
 * @author Anton008
 * @author Bugoslav
 * @author CERminator
 * @author Dalibor Bosits
 * @author Ex13
 * @author Excaliboor
 * @author Roberta F.
 * @author SpeedyGonsales
 */
$messages['hr'] = array(
	'wikimediamessages-desc' => 'Posebne poruke Wikimedije',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=hr',
	'sitesupport' => 'Novčani prilozi',
	'tooltip-n-sitesupport' => 'Podržite nas',
	'specialpages-group-contribution' => 'Doprinosi/Prikupljanje',
	'nstab-creator' => 'Tvorac',
	'nstab-institution' => 'Institucija',
	'nstab-sequence' => 'Slijed',
	'nstab-timedtext' => 'TimedText',
	'group-Image-reviewer' => 'Recenzenti slika',
	'group-Image-reviewer-member' => 'recenzent slika', # Fuzzy
	'grouppage-Image-reviewer' => '{{ns:project}}:Recenzenti slika',
	'group-OTRS-member' => 'OTRS članovi',
	'group-OTRS-member-member' => 'OTRS član', # Fuzzy
	'grouppage-OTRS-member' => '{{ns:project}}:Članovi OTRS-a',
	'group-abusefilter' => 'Urednici filtra zloporaba',
	'group-abusefilter-member' => 'urednik filtra zloporaba', # Fuzzy
	'grouppage-abusefilter' => '{{ns:project}}:Urednici filtra zloporaba',
	'group-accountcreator' => 'Otvaratelji računa',
	'group-accountcreator-member' => 'otvaratelj računa', # Fuzzy
	'grouppage-accountcreator' => '{{ns:project}}:Otvaratelji računa',
	'group-arbcom' => 'Članovi arbitražnog odbora',
	'group-arbcom-member' => 'član arbitražnog odbora', # Fuzzy
	'grouppage-arbcom' => '{{ns:project}}:Članovi arbitražnog odbora',
	'group-autopatrolled' => 'automatski ophođeni',
	'group-autopatrolled-member' => '{{GENDER:$1|automatski ophođen|automatski ophođena}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Automatski patrolirani',
	'group-autoreviewer' => 'Samoocjenjivači',
	'group-autoreviewer-member' => 'samoocjenjivač', # Fuzzy
	'grouppage-autoreviewer' => '{{ns:project}}:Samoocjenjivači',
	'group-bigexport' => 'Veliki izvoznici',
	'group-bigexport-member' => 'veliki izvoznik', # Fuzzy
	'grouppage-bigexport' => '{{ns:project}}:Veliki izvoznici',
	'group-confirmed' => 'Potvrđeni suradnici',
	'group-confirmed-member' => 'potvrđeni suradnik', # Fuzzy
	'grouppage-confirmed' => '{{ns:project}}:Potvrđeni suradnici',
	'group-editprotected' => 'Uređivači zaštićenih stranica',
	'group-editprotected-member' => 'uređivač zaštićenih stranica', # Fuzzy
	'grouppage-editprotected' => '{{ns:project}}:Uređivači zaštićenih stranica',
	'group-eliminator' => 'Uklonitelji',
	'group-eliminator-member' => 'uklonitelj', # Fuzzy
	'grouppage-eliminator' => '{{ns:project}}:Uklonitelj',
	'group-filemover' => 'Premjestitelj datoteka',
	'group-filemover-member' => 'premjestitelj datoteka', # Fuzzy
	'grouppage-filemover' => '{{ns:project}}:Premjestitelj datoteka',
	'group-flood' => 'Botovi',
	'group-flood-member' => 'bot', # Fuzzy
	'grouppage-flood' => '{{ns:project}}:Botovi',
	'group-founder' => 'Osnivači',
	'group-founder-member' => 'osnivač', # Fuzzy
	'grouppage-founder' => '{{ns:project}}:Osnivači',
	'group-import' => 'Unositelji',
	'group-import-member' => '{{GENDER:$1|unositelj|unositeljica}}',
	'grouppage-import' => '{{ns:project}}:Unositelji',
	'group-interface_editor' => 'Uređivači sučelja',
	'group-interface_editor-member' => '{{GENDER:$1|uređivač sučelja|uređivačica sučelja}}',
	'grouppage-interface_editor' => '{{ns:project}}:Uređivači sučelja',
	'group-ipblock-exempt' => 'IP blok iznimke',
	'group-ipblock-exempt-member' => 'IP blok iznimka', # Fuzzy
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP blok iznimka',
	'group-patroller' => 'Patroleri',
	'group-patroller-member' => 'patroler', # Fuzzy
	'group-researcher' => 'Istraživači',
	'group-researcher-member' => 'istraživač', # Fuzzy
	'grouppage-researcher' => '{{ns:project}}:Istraživači',
	'group-rollbacker' => 'Uklonitelji',
	'group-rollbacker-member' => 'uklonitelj', # Fuzzy
	'grouppage-rollbacker' => '{{ns:project}}:Uklonitelji',
	'group-transwiki' => 'Međuwiki unositelji',
	'group-transwiki-member' => 'međuwiki unositelj', # Fuzzy
	'grouppage-transwiki' => '{{ns:project}}:Međuwiki unositelji',
	'group-trusted' => 'Suradnici od povjerenja',
	'group-trusted-member' => 'povjerljivi suradnik', # Fuzzy
	'grouppage-trusted' => '{{ns:project}}:Povjerljivi suradnici',
	'group-Global_bot' => 'Globalni bot',
	'group-Global_bot-member' => 'globalni bot', # Fuzzy
	'group-Global_rollback' => 'Globalni uklonitelji',
	'group-Global_rollback-member' => 'globalni uklonitelj', # Fuzzy
	'group-Global_sysops' => 'Globalni administratori',
	'group-Global_sysops-member' => 'globalni administrator', # Fuzzy
	'group-Ombudsmen' => 'Ombudsman',
	'group-Ombudsmen-member' => 'ombudsman', # Fuzzy
	'group-Staff' => 'Osoblje',
	'group-Staff-member' => 'član osoblja',
	'group-editinterface' => 'Uređivači sučelja',
	'group-editinterface-member' => 'urednik sučelja', # Fuzzy
	'group-steward' => 'Stjuardi',
	'group-steward-member' => '{{GENDER:$1|stjuard}}',
	'grouppage-steward' => '{{ns:project}}:Stjuardi',
	'group-sysadmin' => 'Sistem administratori',
	'group-sysadmin-member' => 'sistem administrator', # Fuzzy
	'group-coder' => 'Programeri',
	'group-coder-member' => 'programer', # Fuzzy
	'group-inactive' => 'Neaktivni suradnici',
	'group-inactive-member' => 'neaktivni suradnik', # Fuzzy
	'grouppage-inactive' => '{{ns:project}}:Neaktivni suradnici',
	'wikimedia-copyright' => 'Tekst je dostupan pod licencijom <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Imenovanje/Dijeli pod istim uvjetima</a>; dodatni uvjeti se mogu primjenjivati. Pogledajte <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Uvjete korištenja</a> za detalje.',
	'wikimedia-copyrightwarning' => 'Pritiskom na "sačuvaj stranicu", neopozivo ste suglasni da svoje doprinose objavljujete pod uvjetima iz licencije [//creativecommons.org/licenses/by-sa/3.0/ Creative Commons Imenovanje/Dijeli pod istim uvjetima 3.0] i [//www.gnu.org/copyleft/fdl.html GFDL]. Slažete se kako je poveznica ili URL dovoljna razina pripisivanja odnosno označivanja Vaših doprinosa na stranicama kojima ste pridonosili. Pogledajte [//wikimediafoundation.org/wiki/Uvjeti_uporabe Uvjete uporabe] za dodatne obavijesti.',
	'cant-delete-main-page' => 'Nemate ovlast brisati i/ili premještati glavnu stranicu.',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 * @author Nemo bis
 */
$messages['hsb'] = array(
	'wikimediamessages-desc' => 'Specifiske zdźělenki Wikimedije',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=hsb',
	'sitesupport' => 'Dary',
	'tooltip-n-sitesupport' => 'Podpěrajće nas',
	'specialpages-group-contribution' => 'Přinoški/Darjenska akcija',
	'nstab-creator' => 'Tworićel',
	'nstab-institution' => 'Institucija',
	'nstab-sequence' => 'Sekwenca',
	'nstab-timedtext' => 'TimedText',
	'group-Ex_Administrator' => 'Něhdyši administratorojo',
	'group-Ex_Administrator-member' => '{{GENDER:$1|něhdyši administrator|něhdyša administratorka}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Něhdyši administratorojo',
	'group-Ex_Bureaucrat' => 'Něhdyši běrokraća',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|něhdyši běrokrat|něhdyša běrokratka}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Něhdyši běrokraća',
	'group-Image-reviewer' => 'Přepruwowarjo wobrazow',
	'group-Image-reviewer-member' => '{{GENDER:$1|přepruwowar wobrazow|přepruwowarka wobrazow}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:Přepruwowarjo wobrazow',
	'group-OTRS-member' => 'Čłonojo OTRS',
	'group-OTRS-member-member' => '{{GENDER:$1|čłon OTRS|čłonka OTRS}}',
	'grouppage-OTRS-member' => '{{ns:project}}:Čłonojo OTRS',
	'group-abusefilter' => 'Wobdźěłarjo za znjewužiwanske filtry',
	'group-abusefilter-member' => '{{GENDER:$1|wobdźěłar za znjewužiwanski filter|wobdźěłarka za znjewužiwanski filter}}',
	'grouppage-abusefilter' => '{{ns:project}}:Wobdźěłarjo za njewužiwanske filtry',
	'group-accountcreator' => 'Kontowi załožerjo',
	'group-accountcreator-member' => '{{GENDER:$1|kontowy załožer|kontowa załožerka}}',
	'grouppage-accountcreator' => '{{ns:project}}:Kontowi załožerjo',
	'group-arbcom' => 'Čłonojo změrcowskeje komisije',
	'group-arbcom-member' => '{{GENDER:$1|čłon změrcowskeje komisije|čłonka změrcowskeje komisije}}',
	'grouppage-arbcom' => '{{ns:project}}:Čłonojo změrcowskeje komisije',
	'group-autopatrolled' => 'Awtomatiscy dohladowarjo',
	'group-autopatrolled-member' => '{{GENDER:$1|awtomatiski dohladowar|awtomatiska dohladowarka}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Awtomatiscy dohladowarjo',
	'group-autoreviewer' => 'Awtomatiscy kontrolerojo',
	'group-autoreviewer-member' => '{{GENDER:$1|awtomatiski přepruwowar|awtomatiska přepruwowarka}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Awtomatiscy kontrolerojo',
	'group-bigexport' => 'Wulkowuwožowarjo',
	'group-bigexport-member' => '{{GENDER:$1|wulkoeksporter|wulkoeksporterka}}',
	'grouppage-bigexport' => '{{ns:project}}:Wulkowuwožowarjo',
	'group-botadmin' => 'Boćiki z prawami administratora',
	'group-botadmin-member' => '{{GENDER:$1|boćik z prawami administratora}}',
	'grouppage-botadmin' => '{{ns:project}}:Boćiki z prawami administratora',
	'group-confirmed' => 'Wobkrućeni wužiwarjo',
	'group-confirmed-member' => '{{GENDER:$1|wobkrućeny wužiwar|wobkrućena wužiwarka}}',
	'grouppage-confirmed' => '{{ns:project}}:Wobkrućeni wužiwarjo',
	'group-editprotected' => 'Wobdźěłarjo škitanych stronow',
	'group-editprotected-member' => '{{GENDER:$1|wobdźěłar škitanych stronow|wobdźěłarka škitanych stronow}}',
	'grouppage-editprotected' => '{{ns:project}}:Wobdźěłarjo škitanych stronow',
	'group-eliminator' => 'Hašaki',
	'group-eliminator-member' => '{{GENDER:$1|hašer|hašerka}}',
	'grouppage-eliminator' => '{{ns:project}}:Hašak',
	'group-filemover' => 'Přesuwarjo datajow',
	'group-filemover-member' => '{{GENDER:$1|přesuwar datajow|přesuwarka datajow}}',
	'grouppage-filemover' => '{{ns:project}}:Přesuwarjo datajow',
	'group-flood' => 'Botowi wužiwarjo',
	'group-flood-member' => '{{GENDER:$1|botowy wužiwar|botowa wužiwarka}}',
	'grouppage-flood' => '{{ns:project}}:Botowi wužiwarjo',
	'group-founder' => 'Załožerjo',
	'group-founder-member' => '{{GENDER:$1|załožer|załožerka}}',
	'grouppage-founder' => '{{ns:project}}:Załožerjo',
	'group-import' => 'Importerojo',
	'group-import-member' => '{{GENDER:$1|importer|importerka}}',
	'grouppage-import' => '{{ns:project}}:Importerojo',
	'group-interface_editor' => 'Wobdźěłarjo wužiwarskeho powjercha',
	'group-interface_editor-member' => '{{GENDER:$1|wobdźěłar|wobdźěłarka}} wužiwarskeho powjercha',
	'grouppage-interface_editor' => '{{ns:project}}:Wobdźěłarjo wužiwarskeho powjercha',
	'group-ipblock-exempt' => 'Wuwzaća z blokowanja IP',
	'group-ipblock-exempt-member' => '{{GENDER:$1|z blokowanja IP wuwzaty|z blokowanja IP wuwzata}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Wuwzaće z blokowanja IP',
	'group-patroller' => 'Dohladowarjo',
	'group-patroller-member' => '{{GENDER:$1|dohladowar|dohladowarka}}',
	'grouppage-patroller' => '{{ns:project}}:Dohladowarjo',
	'group-researcher' => 'Slědźerjo',
	'group-researcher-member' => '{{GENDER:$1|rešeršowar|rešeršowarka}}',
	'grouppage-researcher' => '{{ns:project}}:Slědźer',
	'group-rollbacker' => 'Wróćostajerjo',
	'group-rollbacker-member' => '{{GENDER:$1|wróćostajer|wróćostajerka}}',
	'grouppage-rollbacker' => '{{ns:project}}:Wróćostajerjo',
	'group-transwiki' => 'Transwiki importerojo',
	'group-transwiki-member' => '{{GENDER:$1|transwiki-importer|transwiki-importerka}}',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki importerojo',
	'group-trusted' => 'Dowěryhódni wužiwarjo',
	'group-trusted-member' => '{{GENDER:$1|dowěryhódny wužiwar|dowěryhódna wužiwarka}}',
	'grouppage-trusted' => '{{ns:project}}:Dowěryhódni wužiwarjo',
	'group-Global_bot' => 'Globalne boćiki',
	'group-Global_bot-member' => '{{GENDER:$1|globalny bot}}',
	'group-Global_rollback' => 'Globalni wróćostajerjo',
	'group-Global_rollback-member' => '{{GENDER:$1|globalny wróćostajer|globalna wróćostajerka}}',
	'group-Global_sysops' => 'Globalni administratorojo',
	'group-Global_sysops-member' => '{{GENDER:$1|globalny administrator|globalna administratorka}}',
	'group-Ombudsmen' => 'Ombudsnicy',
	'group-Ombudsmen-member' => '{{GENDER:$1|ombudsnik|ombudsnica}}',
	'group-Staff' => 'Sobudźěłaćerjo',
	'group-Staff-member' => 'sobudźěłaćerjo',
	'group-editinterface' => 'Wužiwarski powjerch wobdźěłać',
	'group-editinterface-member' => '{{GENDER:$1|wobdźěłar|wobdźěłarka}} wužiwarskeho powjercha',
	'group-steward' => 'Stewardźa',
	'group-steward-member' => '{{GENDER:$1|steward|stewardesa}}',
	'group-sysadmin' => 'Systemowi administratorojo',
	'group-sysadmin-member' => '{{GENDER:$1|systemowy administrator|systemowa administratorka}}',
	'group-Indic_Bots' => 'Indiske boty',
	'group-Indic_Bots-member' => '{{GENDER:$1|indiski bot}}',
	'group-New_wikis_importer' => 'Importerojo nowych wikijow',
	'group-New_wikis_importer-member' => '{{GENDER:$1|importer|importerka}} nowych wikijow',
	'group-recursive-export' => 'Rekursiwny eksport',
	'group-recursive-export-member' => '{{GENDER:$1|rekursiwny eksporter|rekursiwna eksporterka}}',
	'group-translationadmin' => 'Přełožowanscy administratorojo',
	'group-translationadmin-member' => '{{GENDER:$1|přełožowanski administrator|přełožowanska administratorka}}',
	'grouppage-translationadmin' => '{{ns:project}}:Přełožowanscy administratorojo',
	'group-coder' => 'Programowarjo',
	'group-coder-member' => '{{GENDER:$1|programowar|programowarka}}',
	'group-inactive' => 'Njeaktiwni wužiwarjo',
	'group-inactive-member' => '{{GENDER:$1|njeaktiwny wužiwar|njeaktiwna wužiwarka}}',
	'grouppage-inactive' => '{{ns:project}}:Njeaktiwni wužiwarjo',
	'wikimedia-copyright' => 'Tekst steji pod <a href="//creativecommons.org/licenses/by-sa/3.0/">licencu Creative Commons Attribution/Share-Alike</a> k dispoziciji; přidatne wuměnjenja hodźa so nałožować. Hlej <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Wužiwanske wuměnjenja</a> za podrobnosće.',
	'wikimedia-copyrightwarning' => 'Z kliknjenjom na tłóčatko "{{int:savearticle}}" přizwoliš do [//wikimediafoundation.org/wiki/Terms_of_Use wužiwanskich wuměnjenjow] a stajiš swój přinošk definitiwnje pod licencu [//creativecommons.org/licenses/by-sa/3.0/ CC-BY-SA 3.0] a [//www.gnu.org/copyleft/fdl.html GFDL].
Sy přezjedny, zo wotkaz abo URL je dosahace připokazanje pod licencu Creative Commons.',
	'cant-delete-main-page' => 'Njemóžeš hłownu stronu zhašeć abo přesunyć.',
	'wikimedia-translationnotifications-signup-legal' => 'Přez přepodawanje tutych informacijow załožbje Wikimedian Foundation zwoliš do toho, zo móžemy so nastupajo přełožki abo druhe temy, kotrež hibanje Wikimedije nastupaja, z tobu do zwiska stajić. Zwoliš do toho, zo twoje daty so w Zjednocenych statach Ameriki składuja a su předmjet našich [https://wikimediafoundation.org/wiki/Privacy_policy prawidłow priwatnosće].',
	'upload-more-photos-of-this-monument' => 'Dalše fota tutoho pomnika nahrać',
);

/** Haitian (Kreyòl ayisyen)
 * @author Masterches
 */
$messages['ht'] = array(
	'sitesupport' => 'Fè yon don',
	'tooltip-n-sitesupport' => 'Soutni pwojè a',
);

/** Hungarian (magyar)
 * @author Bdamokos
 * @author Csigabi
 * @author Dani
 * @author Dj
 * @author Glanthor Reviol
 * @author Tgr
 */
$messages['hu'] = array(
	'wikimediamessages-desc' => 'Wikimédia-specifikus üzenetek',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=hu',
	'sitesupport' => 'Adományok',
	'tooltip-n-sitesupport' => 'Támogatás',
	'specialpages-group-contribution' => 'Adományok/Adománygyűjtés',
	'nstab-creator' => 'Szerző',
	'nstab-institution' => 'Intézmény',
	'nstab-sequence' => 'Sorozat',
	'nstab-timedtext' => 'Időzített szöveg',
	'group-Ex_Administrator' => 'Ex-adminisztrátorok',
	'group-Ex_Administrator-member' => '{{GENDER:$1|ex-adminisztrátor}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Ex-adminisztrátorok',
	'group-Ex_Bureaucrat' => 'Ex-bürokraták',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|ex-bürokrata}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Ex-bürokraták',
	'group-Image-reviewer' => 'képellenőrzők',
	'group-Image-reviewer-member' => 'képellenőrző',
	'grouppage-Image-reviewer' => '{{ns:project}}:Képellenőrzők',
	'group-OTRS-member' => 'OTRS-tagok',
	'group-OTRS-member-member' => 'OTRS-tag',
	'grouppage-OTRS-member' => '{{ns:project}}:OTRS-tagok',
	'group-abusefilter' => 'vandálszűrő-szerkesztők',
	'group-abusefilter-member' => 'vandálszűrő-szerkesztő',
	'grouppage-abusefilter' => '{{ns:project}}:Vandálszűrő-szerkesztők',
	'group-accountcreator' => 'fióklétrehozók',
	'group-accountcreator-member' => 'fióklétrehozó',
	'grouppage-accountcreator' => '{{ns:project}}:Fióklétrehozók',
	'group-arbcom' => 'Abritrációs Bizottság-tagok',
	'group-arbcom-member' => 'Abritrációs Bizottság-tag',
	'grouppage-arbcom' => '{{ns:project}}:Abritrációs Bizottság tagok',
	'group-autopatrolled' => 'automatikus járőrök',
	'group-autopatrolled-member' => 'automatikus járőr',
	'grouppage-autopatrolled' => '{{ns:project}}:Automatikus járőrök',
	'group-autoreviewer' => 'automatikusan megtekintők',
	'group-autoreviewer-member' => 'automatikusan megtekintő',
	'grouppage-autoreviewer' => '{{ns:project}}:Automatikusan megtekintők',
	'group-bigexport' => 'nagy mennyiségben exportálók',
	'group-bigexport-member' => 'nagy mennyiségben exportáló',
	'grouppage-bigexport' => '{{ns:project}}:Nagy mennyiségben exportálók',
	'group-botadmin' => 'Adminisztrátori joggal rendelkező botok',
	'group-botadmin-member' => '{{GENDER:$1|adminisztrátori joggal rendelkező botok}}',
	'grouppage-botadmin' => '{{ns:project}}:Adminisztrátori joggal rendelkező botok',
	'group-confirmed' => 'megerősített szerkesztők',
	'group-confirmed-member' => 'megerősített szerkesztő',
	'grouppage-confirmed' => '{{ns:project}}:Megerősített szerkesztők',
	'group-editprotected' => 'védettlap-szerkesztők',
	'group-editprotected-member' => 'védett lap szerkesztő',
	'grouppage-editprotected' => '{{ns:project}}:Védettlap-szerkesztők',
	'group-eliminator' => 'felszámolók',
	'group-eliminator-member' => 'felszámoló',
	'grouppage-eliminator' => '{{ns:project}}:Felszámolók',
	'group-filemover' => 'fájlátnevezők',
	'group-filemover-member' => 'fájlátnevező',
	'grouppage-filemover' => '{{ns:project}}:Fájlátnevezők',
	'group-flood' => 'bot szerkesztők',
	'group-flood-member' => 'bot felhasználó',
	'grouppage-flood' => '{{ns:project}}:Bot szerkesztők',
	'group-founder' => 'alapítók',
	'group-founder-member' => 'alapító',
	'grouppage-founder' => '{{ns:project}}:Alapítók',
	'group-import' => 'importálók',
	'group-import-member' => 'importáló',
	'grouppage-import' => '{{ns:project}}:Importálók',
	'group-interface_editor' => 'felületszerkesztők',
	'group-interface_editor-member' => 'felületszerkesztő',
	'grouppage-interface_editor' => '{{ns:project}}:Felületszerkesztők',
	'group-ipblock-exempt' => 'IP-blokkok alól mentesülők',
	'group-ipblock-exempt-member' => 'IP-blokkok alól mentesülő',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Mentesülés az IP-blokkok alól',
	'group-patroller' => 'járőrök',
	'group-patroller-member' => '{{GENDER:$1|járőr}}',
	'grouppage-patroller' => '{{ns:project}}:Járőrök',
	'group-researcher' => 'kutatók',
	'group-researcher-member' => 'kutató',
	'grouppage-researcher' => '{{ns:project}}:Kutatók',
	'group-rollbacker' => 'visszaállítók',
	'group-rollbacker-member' => 'visszaállító',
	'grouppage-rollbacker' => '{{ns:project}}:Visszaállítók',
	'group-transwiki' => 'wikiközi importálók',
	'group-transwiki-member' => 'wikiközi importáló',
	'grouppage-transwiki' => '{{ns:project}}:Wikiközi importálók',
	'group-trusted' => 'megerősített szerkesztők',
	'group-trusted-member' => 'megbízható felhasználó',
	'grouppage-trusted' => '{{ns:project}}:megbízható felhasználók',
	'group-Global_bot' => 'globális botok',
	'group-Global_bot-member' => 'globális bot',
	'group-Global_rollback' => 'globális visszaállítók',
	'group-Global_rollback-member' => 'globális visszaállító',
	'group-Global_sysops' => 'globális adminisztrátorok',
	'group-Global_sysops-member' => 'globális adminisztrátor',
	'group-Ombudsmen' => 'ombudsmanok',
	'group-Ombudsmen-member' => 'ombudsman',
	'group-Staff' => 'személyzet',
	'group-Staff-member' => 'személyzeti tag',
	'group-editinterface' => 'felületszerkesztők',
	'group-editinterface-member' => 'felületszerkesztő',
	'group-steward' => 'helytartók',
	'group-steward-member' => 'helytartó',
	'grouppage-steward' => '{{ns:project}}:Helytartók',
	'group-sysadmin' => 'rendszeradminisztrátorok',
	'group-sysadmin-member' => 'rendszeradminisztrátor',
	'group-translationadmin' => 'Fordítási adminisztrátorok',
	'group-translationadmin-member' => '{{GENDER:$1|fordítási adminisztrátor}}',
	'grouppage-translationadmin' => '{{ns:project}}:Fordítási adminisztrátorok',
	'group-coder' => 'programozók',
	'group-coder-member' => '{{GENDER:$1|programozó}}',
	'group-inactive' => 'inaktív szerkesztők',
	'group-inactive-member' => '{{GENDER:$1|inaktív szerkesztő}}',
	'grouppage-inactive' => '{{ns:project}}:Inaktív szerkesztők',
	'wikimedia-copyright' => 'A lap szövege <a href="//creativecommons.org/licenses/by-sa/3.0/deed.hu">Creative Commons Nevezd meg! – Így add tovább! 3.0</a> licenc alatt van; egyes esetekben más módon is felhasználható. Részletekért lásd a <a href="//wikimediafoundation.org/wiki/Terms_of_Use">felhasználási feltételeket</a>.',
	'wikidata-shortcopyrightwarning' => 'A "mentés" gombra kattintással elfogadod a [https://wikimediafoundation.org/wiki/Terms_of_Use felhasználási feltételeket], és visszavonhatatlan engedélyt adsz szerkesztéseid [https://creativecommons.org/publicdomain/zero/1.0/ CC0 licensz] szerinti felhasználására.',
	'wikimedia-copyrightwarning' => 'A "{{int:savearticle}}" gombra kjattintva visszavonhatatlan engedélyt adsz annak felhasználására a [//creativecommons.org/licenses/by-sa/3.0/deed.hu Creative Commons Nevezd meg! – Így add tovább! 3.0] licenc és – ha magad írtad – a [//www.gnu.org/copyleft/fdl.htm GFDL] szerint, és elfogadod, hogy az újrafelhasználóknak elég közvetve, a wikioldalra mutató linken vagy URL-en keresztül hivatkozniuk rád.  Részletesebben lásd a [//wikimediafoundation.org/wiki/Terms_of_Use felhasználási feltételekben].',
	'cant-delete-main-page' => 'Nem törölheted vagy nevezheted át a főoldalt.',
);

/** Armenian (Հայերեն)
 * @author Chaojoker
 * @author Teak
 * @author Xelgen
 */
$messages['hy'] = array(
	'sitesupport' => 'Դրամական նվիրատվություն',
	'wikimedia-copyright' => 'Տեքստը տեղադրված է <a href="//creativecommons.org/licenses/by-sa/3.0/deed.hy">Քրիեյթիվ Քոմոնս Հղման-Համանման տարածման</a> թույլատրագրի ներքո, առանձին դեպքերում հնարավոր են հավելյալ պայմաններ։ Մանրամասնությունների համար այցելեք՝ <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Օգտագործման պայմաններ</a>։',
	'wikimedia-copyrightwarning' => 'Սեղմելով «Հիշել էջը», դուք համաձայնվում եք անվերադարձ հրապարակել ձեր ներդրումը [//creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] և [//www.gnu.org/copyleft/fdl.html GFDL] արտոնագրերի ներքո։
Դուք համաձայնվում եք նրան, որ հետագա օգտագործման ժամանակ, ձեր ներդրումը կնշվի առնվազն նշելով խմբագրվող էջի URL–ը կամ դնելով հիպերհղում նրա վրա։
Ծանոթացեք [//wikimediafoundation.org/wiki/Terms_of_Use Օգտագործման պայմաններին] մանրամասն տեղեկությունների համար։', # Fuzzy
);

/** Interlingua (interlingua)
 * @author Malafaya
 * @author McDutchie
 */
$messages['ia'] = array(
	'wikimediamessages-desc' => 'Messages specific de Wikimedia',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=ia',
	'sitesupport' => 'Donationes',
	'tooltip-n-sitesupport' => 'Sustene nos',
	'specialpages-group-contribution' => 'Contributiones/Collecta de fundos',
	'nstab-creator' => 'Creator',
	'nstab-institution' => 'Institution',
	'nstab-sequence' => 'Sequentia',
	'nstab-timedtext' => 'Texto chronometrate',
	'group-Ex_Administrator' => 'Ex-administratores',
	'group-Ex_Administrator-member' => '{{GENDER:$1|ex-administrator|ex-administratrice}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Ex-administratores',
	'group-Ex_Bureaucrat' => 'Ex-bureaucrates',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|ex-bureaucrate}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Ex-bureaucrates',
	'group-Image-reviewer' => 'Revisores de imagines',
	'group-Image-reviewer-member' => '{{GENDER:$1|revisor|revisora}} de imagines',
	'grouppage-Image-reviewer' => '{{ns:project}}:Revisores de imagines',
	'group-OTRS-member' => 'Membros de OTRS',
	'group-OTRS-member-member' => '{{GENDER:$1|membro|membra}} de OTRS',
	'grouppage-OTRS-member' => '{{ns:project}}:Membros de OTRS',
	'group-abusefilter' => 'Redactores del filtro anti-abuso',
	'group-abusefilter-member' => '{{GENDER:$1|redactor|redactrice}} del filtro anti-abuso',
	'grouppage-abusefilter' => '{{ns:project}}:Redactores del filtro anti-abuso',
	'group-accountcreator' => 'Creatores de contos',
	'group-accountcreator-member' => '{{GENDER:$1|creator|creatrice}} de contos',
	'grouppage-accountcreator' => '{{ns:project}}:Creatores de contos',
	'group-arbcom' => 'Membros del committee de arbitrage',
	'group-arbcom-member' => '{{GENDER:$1|membro|membra}} del committee de arbitrage',
	'grouppage-arbcom' => '{{ns:project}}:Membros del committee de arbitrage',
	'group-autopatrolled' => 'Autopatruliatores',
	'group-autopatrolled-member' => '{{GENDER:$1|autopatruliator|autopatruliatrice}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Autopatruliatores',
	'group-autoreviewer' => 'Autorevisores',
	'group-autoreviewer-member' => '{{GENDER:$1|autorevisor|autorevisora}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Autorevisores',
	'group-bigexport' => 'Grande exportatores',
	'group-bigexport-member' => 'grande {{GENDER:$1|exportator|exportatrice}}',
	'grouppage-bigexport' => '{{ns:project}}:Grande exportatores',
	'group-botadmin' => 'Robots con derectos de administrator',
	'group-botadmin-member' => '{{GENDER:$1|robot con derectos de administrator}}',
	'grouppage-botadmin' => '{{ns:project}}:Robots con derectos de administrator',
	'group-confirmed' => 'Usatores confirmate',
	'group-confirmed-member' => '{{GENDER:$1|usator|usatrice}} confirmate',
	'grouppage-confirmed' => '{{ns:project}}:Usatores confirmate',
	'group-editprotected' => 'Redactores de paginas protegite',
	'group-editprotected-member' => '{{GENDER:$1|redactor|redactrice}} de paginas protegite',
	'grouppage-editprotected' => '{{ns:project}}:Redactores de paginas protegite',
	'group-eliminator' => 'Eliminatores',
	'group-eliminator-member' => '{{GENDER:$1|eliminator|eliminatrice}}',
	'grouppage-eliminator' => '{{ns:project}}:Eliminator',
	'group-filemover' => 'Renominatores de files',
	'group-filemover-member' => '{{GENDER:$1|renominator|renominatrice}} de files',
	'grouppage-filemover' => '{{ns:project}}:Renominatores de files',
	'group-flood' => 'Usatores robot',
	'group-flood-member' => '{{GENDER:$1|usator|usatrice}} robot',
	'grouppage-flood' => '{{ns:project}}:Usatores robot',
	'group-founder' => 'Fundatores',
	'group-founder-member' => '{{GENDER:$1|fundator|fundatrice}}',
	'grouppage-founder' => '{{ns:project}}:Fundatores',
	'group-import' => 'Importatores',
	'group-import-member' => '{{GENDER:$1|importator|importatrice}}',
	'grouppage-import' => '{{ns:project}}:Importatores',
	'group-interface_editor' => 'Redactores del interfacie',
	'group-interface_editor-member' => '{{GENDER:$1|redactor|redactrice}} del interfacie',
	'grouppage-interface_editor' => '{{ns:project}}:Redactores del interfacie',
	'group-ipblock-exempt' => 'Exemptiones de blocos IP',
	'group-ipblock-exempt-member' => '{{GENDER:$1|Exempto|Exempta}} de bloco IP',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Exemption de blocos IP',
	'group-patroller' => 'Patruliatores',
	'group-patroller-member' => '{{GENDER:$1|patruliator|patruliatrice}}',
	'grouppage-patroller' => '{{ns:project}}:Patruliatores',
	'group-researcher' => 'Recercatores',
	'group-researcher-member' => '{{GENDER:$1|recercator|recercatrice}}',
	'grouppage-researcher' => '{{ns:project}}:Recercator',
	'group-rollbacker' => 'Revertitores',
	'group-rollbacker-member' => '{{GENDER:$1|revertitor|revertitrice}}',
	'grouppage-rollbacker' => '{{ns:project}}:Revertitores',
	'group-transwiki' => 'Importatores transwiki',
	'group-transwiki-member' => '{{GENDER:$1|importator|importatrice}} transwiki',
	'grouppage-transwiki' => '{{ns:project}}:Importatores transwiki',
	'group-trusted' => 'Usatores de confidentia',
	'group-trusted-member' => '{{GENDER:$1|usator|usatrice}} de confidentia',
	'grouppage-trusted' => '{{ns:project}}:Usatores de confidentia',
	'group-Global_bot' => 'Robotes global',
	'group-Global_bot-member' => 'robot global',
	'group-Global_rollback' => 'Revocatores global',
	'group-Global_rollback-member' => '{{GENDER:$1|revocator|revocatrice}} global',
	'group-Global_sysops' => 'Administratores global',
	'group-Global_sysops-member' => '{{GENDER:$1|administrator|administratrice}} global',
	'group-Ombudsmen' => 'Mediatores',
	'group-Ombudsmen-member' => '{{GENDER:$1|mediator|mediatrice}}',
	'group-Staff' => 'Personal',
	'group-Staff-member' => 'membro del personal',
	'group-editinterface' => 'Modificar interfacie',
	'group-editinterface-member' => '{{GENDER:$1|redactor|redactrice}} del interfacie',
	'group-steward' => 'Stewardes',
	'group-steward-member' => '{{GENDER:$1|steward|stewardessa}}',
	'group-sysadmin' => 'Administratores de systema',
	'group-sysadmin-member' => '{{GENDER:$1|administrator|administratrice}} de systema',
	'group-translationadmin' => 'Administratores de traduction',
	'group-translationadmin-member' => '{{GENDER:$1|administrator|administratrice}} de traduction',
	'grouppage-translationadmin' => '{{ns:project}}:Administratores de traduction',
	'group-coder' => 'Programmatores',
	'group-coder-member' => '{{GENDER:$1|programmator|programmatrice}}',
	'grouppage-coder' => '{{ns:project}}:Programmator',
	'group-inactive' => 'Usatores inactive',
	'group-inactive-member' => '{{GENDER:$1|usator|usatrice}} inactive',
	'grouppage-inactive' => '{{ns:project}}:Usatores inactive',
	'wikimedia-copyright' => 'Le texto es disponibile sub le <a href="//creativecommons.org/licenses/by-sa/3.0/"> licentia Creative Commons Attribution/Share-Alike</a>; additional conditiones pote esser in vigor. Vide <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Conditiones de uso</a> pro detalios.',
	'wikimedia-copyrightwarning' => 'Per cliccar super le button "{{int:savearticle}}", tu accepta le [//wikimediafoundation.org/wiki/Terms_of_Use Conditiones de uso] e tu consenti al publication irrevocabile de tu contribution sub le [//creativecommons.org/licenses/by-sa/3.0/ licentia Creative Commons BY-SA 3.0] e sub le [//ia.wikipedia.org/wiki/Licentia_GNU_pro_Documentation_Libere Licentia GNU pro Documentation Libere].
Tu accepta que un hyperligamine o URL suffice como attribution sub le licentia Creative Commons.',
	'cant-delete-main-page' => 'Non es possibile deler o renominar le pagina principal.',
	'wikimedia-translationnotifications-signup-legal' => 'Per fornir iste information al Fundation Wikimedia tu accepta que nos pote contactar te concernente traductiones o altere themas associate al movimento Wikimedia le quales nos pensa que pote esser de interesse a te. Tu accepta que tu datos pote esser immagazinate in le Statos Unite de America e es subjecte a nostre [https://wikimediafoundation.org/wiki/Privacy_policy politica de confidentialitate].',
);

/** Indonesian (Bahasa Indonesia)
 * @author Aldnonymous
 * @author Bennylin
 * @author Farras
 * @author Irwangatot
 * @author IvanLanin
 * @author Iwan Novirion
 * @author Kenrick95
 * @author Rex
 */
$messages['id'] = array(
	'wikimediamessages-desc' => 'Pesan-pesan spesifik Wikimedia',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=id',
	'sitesupport' => 'Menyumbang',
	'tooltip-n-sitesupport' => 'Dukung kami',
	'specialpages-group-contribution' => 'Kontribusi/Penggalang dana',
	'nstab-creator' => 'Pencipta',
	'nstab-institution' => 'Lembaga',
	'nstab-sequence' => 'Urutan',
	'nstab-timedtext' => 'TeksBerwaktu',
	'group-Ex_Administrator' => 'Mantan pengurus',
	'group-Ex_Administrator-member' => '{{GENDER:$1|mantan pengurus}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Mantan pengurus',
	'group-Ex_Bureaucrat' => 'Mantan birokrat',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|mantan birokrat}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Mantan birokrat',
	'group-Image-reviewer' => 'Peninjau gambar',
	'group-Image-reviewer-member' => '{{GENDER:$1|peninjau gambar}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:Peninjau gambar',
	'group-OTRS-member' => 'Anggota OTRS',
	'group-OTRS-member-member' => '{{GENDER:$1|anggota OTRS}}',
	'grouppage-OTRS-member' => '{{ns:project}}:Anggota OTRS',
	'group-abusefilter' => 'Editor filter penyalahgunaan',
	'group-abusefilter-member' => '{{GENDER:$1|editor filter penyalahgunaan}}',
	'grouppage-abusefilter' => '{{ns:project}}:Editor filter penyalahgunaan',
	'group-accountcreator' => 'Pembuat akun',
	'group-accountcreator-member' => '{{GENDER:$1|pembuat akun}}',
	'grouppage-accountcreator' => '{{ns:project}}:Pembuat akun',
	'group-arbcom' => 'Anggota komite arbitrase',
	'group-arbcom-member' => '{{GENDER:$1|anggota komite arbitrase}}',
	'grouppage-arbcom' => '{{ns:project}}:Anggota komite arbitrasi',
	'group-autopatrolled' => 'Otomatisterpatroli',
	'group-autopatrolled-member' => '{{GENDER:$1|pematroli otomatis}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Patroli otomatis',
	'group-autoreviewer' => 'Peninjau otomatis',
	'group-autoreviewer-member' => '{{GENDER:$1|peninjau otomatis}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Peninjau otomatis',
	'group-bigexport' => 'Eksportir besar',
	'group-bigexport-member' => '{{GENDER:$1|eksportir besar}}',
	'grouppage-bigexport' => '{{ns:project}}:Eksportir besar',
	'group-botadmin' => 'Bot dengan hak pengurus',
	'group-botadmin-member' => '{{GENDER:$1|bot dengan hak pengurus}}',
	'grouppage-botadmin' => '{{ns:project}}:Bot dengan hak pengurus',
	'group-confirmed' => 'Pengguna terkonfirmasi',
	'group-confirmed-member' => '{{GENDER:$1|pengguna terkonfirmasi}}',
	'grouppage-confirmed' => '{{ns:project}}:Pengguna terkonfirmasi',
	'group-editprotected' => 'Penyunting halaman yang terlindungi',
	'group-editprotected-member' => '{{GENDER:$1|penyunting halaman terlindungi}}',
	'grouppage-editprotected' => '{{ns:project}}:Penyunting halaman terlindungi',
	'group-eliminator' => 'Eliminator',
	'group-eliminator-member' => '{{GENDER:$1|eliminator}}',
	'grouppage-eliminator' => '{{ns:project}}:Eliminator',
	'group-filemover' => 'Pemindah berkas',
	'group-filemover-member' => '{{GENDER:$1|pemindah berkas}}',
	'grouppage-filemover' => '{{ns:project}}:Pemindah berkas',
	'group-flood' => 'Pengguna bot',
	'group-flood-member' => '{{GENDER:$1|pengguna bot}}',
	'grouppage-flood' => '{{ns:project}}:Pengguna bot',
	'group-founder' => 'Pendiri',
	'group-founder-member' => '{{GENDER:$1| pendiri}}',
	'grouppage-founder' => '{{ns:project}}:Pendiri',
	'group-import' => 'Importir',
	'group-import-member' => '{{GENDER:$1|importir}}',
	'grouppage-import' => '{{ns:project}}:Importir',
	'group-interface_editor' => 'Penyunting antarmuka',
	'group-interface_editor-member' => '{{GENDER:$1|penyunting antarmuka}}',
	'grouppage-interface_editor' => '{{ns:project}}:Penyunting antarmuka',
	'group-ipblock-exempt' => 'Pengecualian blokir IP',
	'group-ipblock-exempt-member' => '{{GENDER:$1|pengecualian blokir IP}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Pengecualian blokir IP',
	'group-patroller' => 'Pematroli',
	'group-patroller-member' => 'Pematroli', # Fuzzy
	'grouppage-patroller' => '{{ns:project}}:Pematroli',
	'group-researcher' => 'Peneliti',
	'group-researcher-member' => '{{GENDER:$1|peneliti}}',
	'grouppage-researcher' => '{{ns:project}}:Peneliti',
	'group-rollbacker' => 'Pengembali revisi',
	'group-rollbacker-member' => '{{GENDER:$1|pengembali revisi}}',
	'grouppage-rollbacker' => '{{ns:project}}:Pengembali revisi',
	'group-transwiki' => 'Importir transwiki',
	'group-transwiki-member' => '{{GENDER:$1|importir transwiki}}',
	'grouppage-transwiki' => '{{ns:project}}:Importir transwiki',
	'group-trusted' => 'Pengguna tepercaya',
	'group-trusted-member' => '{{GENDER:$1|pengguna tepercaya}}',
	'grouppage-trusted' => '{{ns:project}}:Pengguna tepercaya',
	'group-Global_bot' => 'Bot global',
	'group-Global_bot-member' => '{{GENDER:$1|bot global}}',
	'group-Global_rollback' => 'Pengembali revisi global',
	'group-Global_rollback-member' => '{{GENDER:$1|pengembali revisi global}}',
	'group-Global_sysops' => 'Opsis global',
	'group-Global_sysops-member' => '{{GENDER:$1|opsis global}}',
	'group-Ombudsmen' => 'Ombudsman',
	'group-Ombudsmen-member' => '{{GENDER:$1|ombudsman}}',
	'group-Staff' => 'Staf',
	'group-Staff-member' => 'staf',
	'group-editinterface' => 'Penyunting antarmuka',
	'group-editinterface-member' => '{{GENDER:$1|penyunting antarmuka}}',
	'group-steward' => 'Steward',
	'group-steward-member' => '{{GENDER:$1|steward}}',
	'grouppage-steward' => 'm:Stewards/id',
	'group-sysadmin' => 'Administrator sistem',
	'group-sysadmin-member' => '{{GENDER:$1|administrator sistem}}',
	'group-API_High_Limit_Requestor-member' => '{{GENDER:$1|API high limit requestor}}',
	'group-New_wikis_importer-member' => '{{GENDER:$1|importir wiki baru}}',
	'group-global-ipblock-exempt-member' => '{{GENDER:$1|pengecualian blokir IP global}}',
	'grouppage-global-ipblock-exempt' => 'm:Global IP block exemptions/id',
	'group-recursive-export-member' => '{{GENDER:$1|eksportir rekursif}}',
	'group-translationadmin' => 'Pengurus terjemahan',
	'group-translationadmin-member' => '{{GENDER:$1|pengurus terjemahan}}',
	'grouppage-translationadmin' => '{{ns:project}}:Pengurus terjemahan',
	'group-centralnoticeadmin-member' => '{{GENDER:$1|Administrator pusat pengumuman}}',
	'group-coder' => 'Programer',
	'group-coder-member' => '{{GENDER:$1|programer}}',
	'group-inactive' => 'Pengguna tidak aktif',
	'group-inactive-member' => '{{GENDER:$1|pengguna tidak aktif}}',
	'grouppage-inactive' => '{{ns:project}}:Pengguna tidak aktif',
	'wikimedia-copyright' => 'Teks tersedia di bawah <a href="//creativecommons.org/licenses/by-sa/3.0/deed.id">Lisensi Atribusi-BerbagiSerupa Creative Commons</a>; ketentuan tambahan mungkin berlaku. Lihat <a href="//wikimediafoundation.org/wiki/Terms_of_use-Summary/id">Ketentuan Penggunaan</a> untuk lebih jelasnya.',
	'wikidata-copyright' => 'Semua data terstruktur dari ruang nama utama dan properti tersedia di bawah <a href="//creativecommons.org/publicdomain/zero/1.0/deed.id" title="Definisi dari lisensi Creative Commons CC-nol">Lisensi Dedikasi Domain Publik CC-nol Creative Commons</a>;
teks dalam ruang nama lainnya tersedia di bawah <a href="//creativecommons.org/licenses/by-sa/3.0/deed.id" title="Definisi dari lisensi Creative Commons Attribusi-BerbagiSerupa">Lisensi Atribusi-BerbagiSerupa Creative Commons</a>;
ketentuan tambahan mungkin berlaku.
Lihat <a href="//wikimediafoundation.org/wiki/Terms_of_use-Summary/id" title="Ketentuan Penggunaan Yayasan Wikimedia">Ketentuan Penggunaan</a> untuk lebih jelasnya.',
	'wikidata-shortcopyrightwarning' => 'Dengan mengklik "Simpan halaman", Anda setuju dengan [https://wikimediafoundation.org/wiki/Terms_of_use-Summary/id Ketentuan Penggunaan], dan Anda setuju untuk melepas kontribusi Anda di bawah [https://creativecommons.org/publicdomain/zero/1.0/deed.id lisensi CC-nol].',
	'wikimedia-copyrightwarning' => 'Dengan menekan tombol "{{int:savearticle}}", Anda setuju pada [//wikimediafoundation.org/wiki/Terms_of_use-Summary/id  Ketentuan Penggunaan], dan melepas kontribusi Anda di bawah [//id.wikipedia.org/wiki/Wikipedia:Teks_Lisensi_Creative_Commons_Atribusi-BerbagiSerupa_3.0 Lisensi Atribusi-BerbagiSerupa Creative Commons] dan [//id.wikipedia.org/wiki/Wikipedia:Lisensi_Dokumentasi_Bebas_GNU GFDL]. Anda setuju bahwa pemberian pranala atau URL adalah atribusi yang cukup di bawah lisensi Creative Commons.',
	'cant-delete-main-page' => 'Anda tidak dapat menghapus atau memindahkan halaman utama.',
	'wikimedia-translationnotifications-signup-legal' => 'Dengan memberikan informasi ini ke Yayasan Wikimedia, Anda setuju bahwa kami dapat menghubungi Anda terkait terjemahan atau topik lain yang berhubungan dengan gerakan Wikimedia yang kami anggap perlu untuk Anda ketahui. Anda setuju semua data Anda disimpan di Amerika Serikat dan mematuhi [https://wikimediafoundation.org/wiki/Privacy_policy kebijakan privasi] kami.',
	'upload-more-photos-of-this-monument' => 'Unggah lebih banyak foto dari monumen ini',
	'extdist-branch-master' => 'master (versi pengembangan terbaru)',
	'extdist-branch-REL1_21' => '1.21 (MediaWiki stabil terbaru)',
	'createacct-helpusername-url' => '{{ns:Project}}:Kebijakan nama pengguna',
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(bantu saya memilih)]]',
	'createacct-captcha-help-url' => '{{ns:Project}}:Mohon buatkan akun',
	'createacct-imgcaptcha-help' => 'Tidak dapat melihat gambar? [[{{MediaWiki:createacct-captcha-help-url}}|Mohon buatkan akun]]',
);

/** Interlingue (Interlingue)
 * @author Malafaya
 */
$messages['ie'] = array(
	'sitesupport' => 'Donationes',
);

/** Igbo (Igbo)
 * @author Ukabia
 */
$messages['ig'] = array(
	'sitesupport' => 'Nyeturuanyi ihe',
	'tooltip-n-sitesupport' => 'Nye anyi ike',
	'group-confirmed' => "Ézíbóté ọ'bànifé",
	'group-confirmed-member' => "ézíbóté ọ'bànifé", # Fuzzy
	'group-filemover' => 'Ndi npáfù usòrò',
	'group-filemover-member' => 'onye npáfù usòrò', # Fuzzy
	'grouppage-filemover' => '{{ns:project}}:Ndi mpáfù usòrò',
	'group-flood' => 'Ndi ne ji bot',
	'group-flood-member' => 'onye na ji bot emé ihe', # Fuzzy
	'grouppage-flood' => "{{ns:project}}:Ọ'bànifé bot",
	'group-founder' => 'Ndi buzọr',
	'group-founder-member' => 'onye buzọr', # Fuzzy
	'grouppage-founder' => '{{ns:project}}:Ndi mbídó',
	'group-import' => 'Ndi na wete ihe',
	'group-import-member' => 'onye na wete ihe', # Fuzzy
	'group-patroller-member' => 'onye na léfuru ihe anyà', # Fuzzy
	'group-researcher' => 'Ndi-nchékàsí-ọmúmú',
	'group-researcher-member' => 'onye-nchékàsí-ọmúmú', # Fuzzy
	'group-rollbacker' => "Ọ'fifie-nà-àzú",
	'group-rollbacker-member' => "ọ'fifie-nà-àzú", # Fuzzy
	'group-trusted-member' => "ọ'bànifé nchèkwube", # Fuzzy
	'grouppage-trusted' => "{{ns:project}}:Ọ'bànifé nchèkwube",
	'group-Staff-member' => 'ndi na rüoru nga',
	'group-steward' => "Ò'dózí",
	'group-steward-member' => "ò'dózí", # Fuzzy
	'wikimedia-copyright' => 'Édé nọr okpúrù <a href="//creativecommons.org/licenses/by-sa/3.0/">Mmẹ Òkike Tu ụta Ñkịtị</a>; ihe ejị ẹ kwenye nọr kwa.
Lé <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Nkwenye maka Í me ihe</a> maka ihe ozor Í gi má.',
	'wikimedia-copyrightwarning' => 'Na Í donyé, Í kwè na Í gi nyé ihe Í mèrè na nke I nweriki wefụ na okpúrù [//creativecommons.org/licenses/by-sa/3.0/ Mmẹ Òkike Tu ụta Ñkịtị/Gbásaa-Kà Édéíwu 3.0] na [//www.gnu.org/copyleft/fdl.html GFDL].
Í kwèrè na ndi madu na rürü gi nye gi kpó áhà gi, na nke ntà há gí me, shí njikodo intanet ma URL Í gi ga ihü Í rürü nà.
Lé [//wikimediafoundation.org/wiki/Terms_of_Use Nkwenye maka Í me ihe] maka ihe ozor Í gi má.', # Fuzzy
);

/** Eastern Canadian (Aboriginal syllabics) (ᐃᓄᒃᑎᑐᑦ)
 */
$messages['ike-cans'] = array(
	'sitesupport' => 'ᑐᓐᓂᖅᑯᓯᐊᑦ ᑮᓇᐅᔭᐃᑦ',
);

/** Iloko (Ilokano)
 * @author Lam-ang
 * @author Nemo bis
 * @author Saluyot
 * @author לערי ריינהארט
 */
$messages['ilo'] = array(
	'wikimediamessages-desc' => 'Dagiti naisangsangayan a mensahe ti Wikimedia',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=ilo',
	'sitesupport' => 'Donasion',
	'tooltip-n-sitesupport' => 'Suportarandakami',
	'specialpages-group-contribution' => 'Parawad/Agitag-ay ti pundo',
	'nstab-creator' => 'Nangaramid',
	'nstab-institution' => 'Patakder',
	'nstab-sequence' => 'Panagsarsaruno',
	'nstab-timedtext' => 'Naorasan a testo',
	'group-Ex_Administrator' => 'Dagiti dati nga administrador',
	'group-Ex_Administrator-member' => '{{GENDER:$1|administrador idi}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Dagiti dati nga administrador',
	'group-Ex_Bureaucrat' => 'Dagiti dati a burokrata',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|burokrata idi}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Dagiti dati a burokrata',
	'group-Image-reviewer' => 'Dagiti agreprepaso ti imahen',
	'group-Image-reviewer-member' => '{{GENDER:$1|agreprepaso ti imahen}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:Dagiti agreprepaso ti imahen',
	'group-OTRS-member' => 'Kameng dagiti OTRS',
	'group-OTRS-member-member' => '{{GENDER:$1|kameng ti OTRS}}',
	'grouppage-OTRS-member' => '{{ns:project}}:Dagiti kameng ti OTRS',
	'group-abusefilter' => 'Dagiti agur-unos ti sagat ti panag-abuso',
	'group-abusefilter-member' => '{{GENDER:$1|agur-urnos ti sagat ti panag-abuso}}',
	'grouppage-abusefilter' => '{{ns:project}}:Dagiti agur-urnos ti sagat ti panag-abuso',
	'group-accountcreator' => 'Dagiti agararamid ti pakabilangan',
	'group-accountcreator-member' => '{{GENDER:$1|agar-aramid ti pakabilangan}}',
	'grouppage-accountcreator' => '{{ns:project}}:Dagiti agar-aramid ti pakabilangan',
	'group-arbcom' => 'Dagiti kameng ti pagkappiaan a pagtitinongan',
	'group-arbcom-member' => '{{GENDER:$1|kameng ti pagkappian a pagtitinongan}}',
	'grouppage-arbcom' => '{{ns:project}}:Kameng ti pagkappian a pagtitinongan',
	'group-autopatrolled' => 'Dagiti automatiko nga agpatrulia',
	'group-autopatrolled-member' => '{{GENDER:$1|automatiko nga agpatpatrulia}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Automatiko nga agpatpatrulia',
	'group-autoreviewer' => 'Dagiti automatiko nga agrepaso',
	'group-autoreviewer-member' => '{{GENDER:$1|automatiko nga agreprepaso}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Dagiti automatiko nga agpatpatrulia',
	'group-bigexport' => 'Dagiti dakkel nga agir-iruar',
	'group-bigexport-member' => '{{GENDER:$1|dakkel nga agir-iruar}}',
	'grouppage-bigexport' => '{{ns:project}}:Dagiti dakkel nga agir-iruar',
	'group-botadmin' => 'Dagiti bots nga addaan ti karbengan nga administrador',
	'group-botadmin-member' => '{{GENDER:$1|bot nga addan ti administrador a karbengan}}',
	'grouppage-botadmin' => '{{ns:project}}:Dagiti bot nga addaan ti karbengan nga administrador',
	'group-confirmed' => 'Dagiti napasingkedan nga agar-aramat',
	'group-confirmed-member' => '{{GENDER:$1|napasingkedan nga agar-aramat}}',
	'grouppage-confirmed' => '{{ns:project}}:Dagiti napasingkedan nga agar-aramat',
	'group-editprotected' => 'Dagiti agur-unos ti napasingkedan a panid',
	'group-editprotected-member' => '{{GENDER:$1|agur-urnos ti nasalakniban a panid}}',
	'grouppage-editprotected' => '{{ns:project}}:Dagiti agur-urnos ti nasalakniban a panid',
	'group-eliminator' => 'Dagiti agik-ikkat',
	'group-eliminator-member' => '{{GENDER:$1|agik-ikkat}}',
	'grouppage-eliminator' => '{{ns:project}}:Agik-ikkat',
	'group-filemover' => 'Dagiti makaiyalis nga agar-aramat',
	'group-filemover-member' => '{{GENDER:$1|agiyal-alis ti papeles}}',
	'grouppage-filemover' => '{{ns:project}}:Dagiti agiyal-alis ti papeles',
	'group-flood' => 'Dagiti agar-aramat a bot',
	'group-flood-member' => '{{GENDER:$1|bot nga agar-aramat}}',
	'grouppage-flood' => '{{ns:project}}:Dagiti bot nga agar-aramat',
	'group-founder' => 'Dagiti nagipatakder',
	'group-founder-member' => '{{GENDER:$1|nagipatakder}}',
	'grouppage-founder' => '{{ns:project}}:Dagiti nagipatakder',
	'group-import' => 'Dagiti agal-ala',
	'group-import-member' => '{{GENDER:$1|agal-ala}}',
	'grouppage-import' => '{{ns:project}}:Dagiti  agal-ala',
	'group-interface_editor' => 'Dagiti agur-urnos ti interface',
	'group-interface_editor-member' => '{{GENDER:$1|agur-urnos ti interface}}',
	'grouppage-interface_editor' => '{{ns:project}}:Dagiti agur-urnos ti interface',
	'group-ipblock-exempt' => 'Dagiti saan a maserraan nga IP',
	'group-ipblock-exempt-member' => '{{GENDER:$1|IP a saan a maserraan}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP a saan a maserraan',
	'group-patroller' => 'Dagiti agpatpattrulia',
	'group-patroller-member' => '{{GENDER:$1|agpatpatrulia}}',
	'grouppage-patroller' => '{{ns:project}}:Dagiti agpatpatrulia',
	'group-researcher' => 'Dagiti agsuksukisok',
	'group-researcher-member' => '{{GENDER:$1|agsuksukisok}}',
	'grouppage-researcher' => '{{ns:project}}:Dagiti agsuksukisok',
	'group-rollbacker' => 'Dagiti agisubsubli',
	'group-rollbacker-member' => '{{GENDER:$1|agisubsubli}}',
	'grouppage-rollbacker' => '{{ns:project}}:Dagiti agisubsubli',
	'group-transwiki' => 'Dagiti agal-ala ti transwiki',
	'group-transwiki-member' => '{{GENDER:$1|agal-ala ti transwiki}}',
	'grouppage-transwiki' => '{{ns:project}}:Dagiti transwiki nga agal-ala',
	'group-trusted' => 'Dagiti natalek nga agar-aramat',
	'group-trusted-member' => '{{GENDER:$1|natalek nga agar-aramat}}',
	'grouppage-trusted' => '{{ns:project}}:Dagiti natalek nga agar-aramat',
	'group-Global_bot' => 'Dagiti sangalubongan a bot',
	'group-Global_bot-member' => '{{GENDER:$1|sangalubongan a bot}}',
	'group-Global_rollback' => 'Dagiti sangalubongan nga agisubsubli',
	'group-Global_rollback-member' => '{{GENDER:$1|sangalubongan nga agisubsubli}}',
	'group-Global_sysops' => 'Dagiti sangalubongan a sysop',
	'group-Global_sysops-member' => '{{GENDER:$1|sangalubongan a  sysop}}',
	'group-Ombudsmen' => 'Ombudsmen',
	'group-Ombudsmen-member' => '{{GENDER:$1|ombudsman}}',
	'group-Staff' => 'Empleado',
	'group-Staff-member' => '{{GENDER:$1|empleado}}',
	'group-editinterface' => 'Dagiti agur-urnos ti interface',
	'group-editinterface-member' => '{{GENDER:$1|agur-urnos ti interface}}',
	'group-steward' => 'Dagiti mayordormo',
	'group-steward-member' => '{{GENDER:$1|mayordormo}}',
	'group-sysadmin' => 'Dagiti administrador ti sistema',
	'group-sysadmin-member' => '{{GENDER:$1|administrador ti sistema}}',
	'group-API_High_Limit_Requestor' => 'Dagiti agkidkidaw ti nangato a patingga ti API',
	'group-API_High_Limit_Requestor-member' => '{{GENDER:$1|Dagiti agkidkidaw ti nangato a patingga ti API}}',
	'grouppage-API_High_Limit_Requestor' => 'm:Dagiti agkidkidaw ti nangato ti patinggana nga API',
	'group-Indic_Bots' => 'Dagiti Indic a bot',
	'group-Indic_Bots-member' => '{{GENDER:$1|indic bot}}',
	'group-New_wikis_importer' => 'Dagiti  agal-ala kadagiti baro a wiki',
	'group-New_wikis_importer-member' => '{{GENDER:$1|agal-ala kadagiti baro a wiki}}',
	'group-global-ipblock-exempt' => 'Dagiti malaksid ti panagserra ti sangalubongan nga IP',
	'group-global-ipblock-exempt-member' => '{{GENDER:$1|malaksid ti sangalubongan a panagserra ti IP}}',
	'group-recursive-export' => 'Rekursibo a panagiluas',
	'group-recursive-export-member' => '{{GENDER:$1|rekursibo nga agi-luluas}}',
	'group-translationadmin' => 'Dagiti administrador ti agipatpatarus',
	'group-translationadmin-member' => '{{GENDER:$1|administrador ti agipatpatarus}}',
	'grouppage-translationadmin' => '{{ns:project}}:Dagiti administrador ti agipatpatarus',
	'group-centralnoticeadmin' => 'Dagiti administrador ti sentral a pakdaar',
	'group-centralnoticeadmin-member' => '{{GENDER:$1|Administrador ti sentral a pakdaar}}',
	'grouppage-centralnoticeadmin' => '{{ns:project}}:Administrador ti sentral a pakdaar',
	'group-coder' => 'Dagiti agkodkodigo',
	'group-coder-member' => '{{GENDER:$1|agkodkodigo}}',
	'group-inactive' => 'Dagiti saan a nasiglat nga agar-aramat',
	'group-inactive-member' => '{{GENDER:$1|saan a nasiglat nga agar-aramat}}',
	'grouppage-inactive' => '{{ns:project}}:Dagiti saan a nasiglat nga agar-aramat',
	'wikimedia-copyright' => 'Ti testo ket magun-od a babaen ti <a href="//creativecommons.org/licenses/by-sa/3.0/">Lisensia ti Creative Commons Attribution/Share-Alike</a>;
dagiti mainayon a termino ket mabalin pay a maipakat.
Kitaen dagiti <a href="//wikimediafoundation.org/wiki/Terms_of_use">Termino ti panag-usar</a> para kadagiti salaysay.',
	'wikidata-copyright' => 'Amin a naestruktura a datos manipud ti umuna ken tagikua a nagan a lugar ket magun-od babaen ti <a href="//creativecommons.org/publicdomain/zero/1.0/" title="Panangipalpalawag ti Creative Commons CC0 a Lisensia">Creative Commons CC0 a Lisensia</a>;
ti testo kadagiti sabali a nagan a lugar ket magun-od babaen ti <a href="//creativecommons.org/licenses/by-sa/3.0/" title="Panangilawlawag ti Creative Commons Attribution/Share-Alike a Lisensia">Creative Commons Attribution/Share-Alike a Lisensia</a>;
mabalin a maipakat dagiti dadduma a termino.
Kitaen dagiti <a href="//wikimediafoundation.org/wiki/Terms_of_Use" title="Termino ti Panag-usar ti Pundasion ti Wikimedia">Termino ti Panag-usar</a> para kadagiti salaysay.',
	'wikidata-shortcopyrightwarning' => 'Babaen ti panagpindut ti "idulin", umannurotka kadagiti [https://wikimediafoundation.org/wiki/Terms_of_Use termimo ti panag-usar], ken saanka a mangiwaswas a tumulag a mangibbet kadagiti inar-aramidmo babaen ti [https://creativecommons.org/publicdomain/zero/1.0/ CC0 a lisensia].',
	'wikimedia-copyrightwarning' => 'Babaen ti panagpindut ti "{{int:savearticle}}" a buton, umannurotka kadagiti [//wikimediafoundation.org/wiki/Terms_of_Use Termino ti Panag-usar], ken saanka a mangiwaswas a tumulag a mangibbet kadagiti inar-aramidmo babaen ti [//en.wikipedia.org/wiki/Wikipedia:Text_of_Creative_Commons_Attribution-ShareAlike_3.0_Unported_License CC-BY-SA 3.0 a Lisensia] ken ti [//en.wikipedia.org/wiki/Wikipedia:Text_of_the_GNU_Free_Documentation_License GFDL].
Umannurotka a ti maysa a silpo wenno URL ket umanayen a pammadayaw babaen ti lisensia ti Creative Commons.',
	'cant-delete-main-page' => 'Saanmo a mabalin nga ikkaten wenno iyalis ti umuna a panid',
	'wikimedia-translationnotifications-signup-legal' => 'Umannurotka babaen ti panagited ti Pundasion ti Wikimedia ti daytoy a pakaammo, a mabalin nga agdamag kami kaniam ti kapanggepan kadagiti patarus wenno sabsabali a topiko iti tignay a Wikimedia a naipagpagarupmi a kinaykayatmo. Umannurotka a dagiti bukodmo a datos ket mabalin a maipenpen idiay Estados Unidos ken daytoy ket suheto kadagiti bukodmi nga  [https://wikimediafoundation.org/wiki/Privacy_policy annuroten ti kinapribado].',
	'upload-more-photos-of-this-monument' => 'Agikarga kadagiti adu pay a ladawan ti daytoy a monumento',
	'extdist-branch-master' => 'master (kinaudi a naparang-ay a bersion)',
	'extdist-branch-REL1_21' => '1.21 (kinaudi a nasimpa a MediaWiki)',
	'createacct-helpusername-url' => '{{ns:Project}}:Annuroten_ti_nagan_ti_agar-aramat',
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(tulongannak nga agpili)]]',
	'createacct-captcha-help-url' => '{{ns:Project}}:Agkiddaw ti maysa a pakabilangan',
	'createacct-imgcaptcha-help' => 'Saan a makita ti ladawan? [[{{MediaWiki:createacct-captcha-help-url}}|Agkiddaw ti maysa a pakabilangan]]',
);

/** Ingush (ГӀалгӀай)
 * @author Amire80
 * @author Tagir
 */
$messages['inh'] = array(
	'sitesupport' => 'СагӀа',
);

/** Ido (Ido)
 * @author Malafaya
 * @author Wyvernoid
 * @author לערי ריינהארט
 */
$messages['io'] = array(
	'sitesupport' => 'Donacaji',
	'tooltip-n-sitesupport' => 'Suportez ni',
	'group-accountcreator' => 'Konto-kreanti',
	'group-founder' => 'Fondinti',
	'grouppage-founder' => '{{ns:project}}:Fondinti',
	'group-rollbacker' => 'Retrorulanti',
	'group-sysadmin' => 'Sistemo-administranti',
	'wikimedia-copyright' => 'La kontenajo esas sub la <a href="//creativecommons.org/licenses/by-sa/3.0/"><i>Creative Commons Attribution/Share-Alike License</i></a>;
suplementala reguli forsan aplikesas.
Videz <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Reguli di Uzado</a> por detali.',
	'wikimedia-copyrightwarning' => "Per registrago, vu konkordas nerevokeble distributar vua kontributaji sub la [//creativecommons.org/licenses/by-sa/3.0/ ''Creative Commons Attribution/Share-Alike License 3.0''] e la [//www.gnu.org/copyleft/fdl.html GFDL]. Vu konkordas kreditesar da ri-uzanti, adminime, per ligilo od URL a la pagino quan vu kontributas ad. Videz la [//wikimediafoundation.org/wiki/Terms_of_Use Reguli di Uzado] por detali.", # Fuzzy
);

/** Icelandic (íslenska)
 * @author Nemo bis
 * @author S.Örvarr.S
 * @author Snævar
 * @author Spacebirdy
 * @author לערי ריינהארט
 */
$messages['is'] = array(
	'wikimediamessages-desc' => 'Sérstök Wikimedia skilaboð',
	'sitesupport' => 'Fjárframlög',
	'tooltip-n-sitesupport' => 'Fjárframlagssíða',
	'nstab-creator' => 'Stofnandi',
	'nstab-sequence' => 'Runa',
	'group-OTRS-member' => 'OTRS meðlimir',
	'group-OTRS-member-member' => '{{GENDER:$1|OTRS meðlimur}}',
	'grouppage-OTRS-member' => '{{ns:project}}:OTRS meðlimir',
	'group-abusefilter' => 'Ritstjórar misnotkunarsíunnar',
	'group-abusefilter-member' => '{{GENDER:$1|Misnotkunarsíu ritstjóri}}',
	'group-accountcreator' => 'Aðgangs stofnendur',
	'group-accountcreator-member' => '{{GENDER:$1|aðgangs stofnandi}}',
	'grouppage-accountcreator' => '{{ns:project}}:Aðgangs stofnendur',
	'group-autoreviewer' => 'Sjálfritdómarar',
	'group-botadmin' => 'Vélmenni með stjórnendaréttindi',
	'group-botadmin-member' => '{{GENDER:$1|vélmenni með stjórnendaréttindi}}',
	'grouppage-botadmin' => '{{ns:project}}:Vélmenni með stjórnendaréttindi',
	'group-confirmed' => 'Staðfestir notendur',
	'group-flood' => 'Notendur með breytinga flóð',
	'group-flood-member' => '{{GENDER:$1|vélmenni}}',
	'grouppage-flood' => '{{ns:project}}:Vélmenni',
	'group-founder' => 'Stofnendur',
	'group-founder-member' => '{{GENDER:$1|stofnandi}}',
	'grouppage-founder' => '{{ns:project}}:Stofnendur',
	'group-import' => 'Innflutningsaðilar',
	'group-import-member' => '{{GENDER:$1|innflutningsaðili}}',
	'grouppage-import' => '{{ns:project}}:Innflutningsaðilar',
	'group-transwiki' => 'Altækir innflutningsaðilar',
	'group-transwiki-member' => '{{GENDER:$1|altækur innflutningsaðili}}',
	'grouppage-transwiki' => '{{ns:project}}:Altækir innflutningsaðilar',
	'group-Global_bot' => 'Altæk vélmenni',
	'group-Global_bot-member' => '{{GENDER:$1|altækt vélmenni}}',
	'group-Staff' => 'Starfsfólk',
	'group-Staff-member' => 'Starfsmaður',
	'group-steward' => 'Ráðsmenn',
	'group-steward-member' => '{{GENDER:$1|Ráðsmaður|Ráðskona}}',
	'group-inactive' => 'Óvirkir notendur',
	'group-inactive-member' => '{{GENDER:$1|óvirkur notandi}}',
	'grouppage-inactive' => '{{ns:project}}:Óvirkir notendur',
	'wikimedia-copyright' => 'Textinn er laus undir <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike leyfi</a>; með mögulegum viðbótarskilmálum.
Sjá nánar í <a href="//wikimediafoundation.org/wiki/Terms_of_use">notkunarskilmálum</a>.',
	'wikimedia-copyrightwarning' => 'Með því að ýta á "{{int:savearticle}}" takkann, staðfestir þú [//wikimediafoundation.org/wiki/Terms_of_Use notkunarskilmála] og samþykkir að gefa út framlag þitt undir [//creativecommons.org/licenses/by-sa/3.0/ CC-BY-SA 3.0 leyfi] og [//www.gnu.org/copyleft/fdl.html GFDL leyfi].
Þú staðfestir einnig að vefslóð er nægjanleg tilvísun undir Creative Commons leyfinu.',
	'cant-delete-main-page' => 'Þú getur ekki eytt eða fært forsíðuna.',
	'createacct-imgcaptcha-help' => 'Getur þú ekki séð myndina? [[{{MediaWiki:createacct-captcha-help-url}}|Óska eftir aðgangi]]',
);

/** Italian (italiano)
 * @author Annayram
 * @author Aushulz
 * @author Beta16
 * @author Blaisorblade
 * @author BrokenArrow
 * @author Brownout
 * @author Darth Kule
 * @author F. Cosoleto
 * @author Gianfranco
 * @author Melos
 * @author Nemo bis
 * @author OrbiliusMagister
 * @author Pietrodn
 * @author Stefano-c
 * @author Una giornata uggiosa '94
 */
$messages['it'] = array(
	'wikimediamessages-desc' => 'Messaggi specifici di Wikimedia',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=it',
	'sitesupport' => 'Donazioni',
	'tooltip-n-sitesupport' => 'Sostienici',
	'specialpages-group-contribution' => 'Donazioni/Raccolta fondi',
	'nstab-creator' => 'Creatore',
	'nstab-institution' => 'Istituzione',
	'nstab-sequence' => 'Sequenza',
	'nstab-timedtext' => 'Sottotitoli',
	'group-Ex_Administrator' => 'Ex amministratori',
	'group-Ex_Administrator-member' => 'ex {{GENDER:$1|amministratore|amministratrice|amministratore/trice}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Ex amministratori',
	'group-Ex_Bureaucrat' => 'Ex burocrati',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|ex burocrate}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}: Ex burocrati',
	'group-Image-reviewer' => 'Verificatori di immagini',
	'group-Image-reviewer-member' => '{{GENDER:$1|verificatore di immagini|verificatrice di immagini|verificatore/trice di immagini}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:Verificatori di immagini',
	'group-OTRS-member' => 'Utenti OTRS',
	'group-OTRS-member-member' => '{{GENDER:$1|utente OTRS}}',
	'grouppage-OTRS-member' => '{{ns:project}}:Utenti OTRS',
	'group-abusefilter' => 'Modificatori dei filtri anti abusi',
	'group-abusefilter-member' => '{{GENDER:$1|modificatore dei filtri anti abusi|modificatrice dei filtri anti abusi|modificatore dei filtri anti abusi}}',
	'grouppage-abusefilter' => '{{ns:project}}:Modificatori dei filtri anti abusi',
	'group-accountcreator' => 'Creatori di utenze',
	'group-accountcreator-member' => '{{GENDER:$1|creatore di utenze|creatrice di utenze|creatore di utenze}}',
	'grouppage-accountcreator' => '{{ns:project}}:Creatori di utenze',
	'group-arbcom' => 'Commissione arbitrale',
	'group-arbcom-member' => '{{GENDER:$1|componente della commissione arbitrale}}',
	'grouppage-arbcom' => '{{ns:project}}:Commissione arbitrale',
	'group-autopatrolled' => 'Autopatrollatori',
	'group-autopatrolled-member' => '{{GENDER:$1|autopatroller}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Autopatrollatori',
	'group-autoreviewer' => 'Autorevisori',
	'group-autoreviewer-member' => '{{GENDER:$1|autorevisore}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Autorevisori',
	'group-bigexport' => 'Esportatori in blocco',
	'group-bigexport-member' => '{{GENDER:$1|esportatore in blocco|esportatrice in blocco|esportatore in blocco}}',
	'grouppage-bigexport' => '{{ns:project}}:Esportatori in blocco',
	'group-botadmin' => 'Bot con diritti di amministratore',
	'group-botadmin-member' => '{{GENDER:$1|bot con diritti di amministratore}}',
	'grouppage-botadmin' => '{{ns:project}}: Bot con diritti di amministratore',
	'group-confirmed' => 'Utenti confermati',
	'group-confirmed-member' => '{{GENDER:$1|utente confermato|utente confermata|utente confermato/a}}',
	'grouppage-confirmed' => '{{ns:project}}:Utenti confermati',
	'group-editprotected' => 'Modificatori di pagine protette',
	'group-editprotected-member' => '{{GENDER:$1|modificatore di pagine protette|modificatrice di pagine protette|modificatore di pagine protette}}',
	'grouppage-editprotected' => '{{ns:project}}:Modificatori di pagine protette',
	'group-eliminator' => 'Cancellatori',
	'group-eliminator-member' => '{{GENDER:$1|cancellatore|cancellatrice|cancellatore/trice}}',
	'grouppage-eliminator' => '{{ns:project}}:Cancellatori', # Fuzzy
	'group-filemover' => 'Spostatori di file',
	'group-filemover-member' => '{{GENDER:$1|spostatore di file|spostatrice di file|spostatore/trice di file}}',
	'grouppage-filemover' => '{{ns:project}}:Spostatori di file',
	'group-flood' => 'Utenti bot',
	'group-flood-member' => '{{GENDER:$1|utente bot}}',
	'grouppage-flood' => '{{ns:project}}:Utenti bot',
	'group-founder' => 'Fondatori',
	'group-founder-member' => '{{GENDER:$1|fondatore|fondatrice|fondatore/trice}}',
	'grouppage-founder' => '{{ns:project}}:Fondatori',
	'group-import' => 'Importatori',
	'group-import-member' => '{{GENDER:$1|importatore|importatrice|importatore/trice}}',
	'grouppage-import' => '{{ns:project}}:Importatori',
	'group-interface_editor' => "Modificatori dell'interfaccia",
	'group-interface_editor-member' => "{{GENDER:$1|modificatore dell'interfaccia|modificatrice dell'interfaccia|modificatore/trice dell'interfaccia}}",
	'grouppage-interface_editor' => "{{ns:project}}:Modificatori dell'interfaccia",
	'group-ipblock-exempt' => 'Esenti dal blocco IP',
	'group-ipblock-exempt-member' => '{{GENDER:$1|Esente dal blocco IP}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Esenti dal blocco IP',
	'group-patroller' => 'Patrollatori',
	'group-patroller-member' => '{{GENDER:$1|patrollatore|patrollatrice|patrollatore/trice}}',
	'grouppage-patroller' => '{{ns:project}}:Patrollatori',
	'group-researcher' => 'Ricercatori',
	'group-researcher-member' => '{{GENDER:$1|ricercatore|ricercatrice|ricercatore/trice}}',
	'grouppage-researcher' => '{{ns:project}}:Ricercatori',
	'group-rollbacker' => 'Rollbacker',
	'group-rollbacker-member' => '{{GENDER:$1|rollbacker}}',
	'grouppage-rollbacker' => '{{ns:project}}:Rollbackers',
	'group-transwiki' => 'Importatori transwiki',
	'group-transwiki-member' => '{{GENDER:$1|importatore transwiki|importatrice transwiki|importatore/trice transwiki}}',
	'grouppage-transwiki' => '{{ns:project}}:Importatori transwiki',
	'group-trusted' => 'Utenti fidati',
	'group-trusted-member' => '{{GENDER:$1|utente fidato|utente fidata|utente fidato/a}}',
	'grouppage-trusted' => '{{ns:project}}:Utenti fidati',
	'group-uploader' => 'Uploader',
	'group-uploader-member' => '{{GENDER:$1|uploader}}',
	'grouppage-uploader' => '{{ns:project}}:Uploader',
	'group-Global_bot' => 'Bot globali',
	'group-Global_bot-member' => '{{GENDER:$1|bot globale}}',
	'group-Global_rollback' => 'Rollbacker globali',
	'group-Global_rollback-member' => '{{GENDER:$1|rollbacker globale}}',
	'grouppage-Global_rollback' => 'm:Global rollback/it',
	'group-Global_sysops' => 'Amministratori globali',
	'group-Global_sysops-member' => '{{GENDER:$1|amministratore globale|amministratrice globale|amministratore/trice globale}}',
	'group-Ombudsmen' => 'Garanti',
	'group-Ombudsmen-member' => '{{GENDER:$1|garante}}',
	'grouppage-Ombudsmen' => 'm:Ombudsman commission/it',
	'group-Staff' => 'Staff',
	'group-Staff-member' => '{{GENDER:$1|componente dello staff}}',
	'group-editinterface' => "Modificatori dell'interfaccia",
	'group-editinterface-member' => "{{GENDER:$1|modificatore dell'interfaccia|modificatrice dell'interfaccia|modificatore/trice dell'interfaccia}}",
	'group-steward' => 'Steward',
	'group-steward-member' => '{{GENDER:$1|steward}}',
	'grouppage-steward' => 'm:Stewards/it',
	'group-sysadmin' => 'Amministratori di sistema',
	'group-sysadmin-member' => '{{GENDER:$1|amministratore di sistema|amministratrice di sistema|amministratore/trice di sistema}}',
	'group-API_High_Limit_Requestor' => 'Richiedenti di API con limite più alto',
	'group-API_High_Limit_Requestor-member' => '{{GENDER:$1|richiedente}} di API con limite più alto',
	'group-Indic_Bots' => 'Bot indiani',
	'group-Indic_Bots-member' => '{{GENDER:$1|bot indiano}}',
	'group-New_wikis_importer' => 'Importatori su nuovi wiki',
	'group-New_wikis_importer-member' => '{{GENDER:$1|importatore|importatrice|importatore/trice}} su nuovi wiki',
	'group-global-ipblock-exempt' => 'Esenti dal blocco IP globale',
	'group-global-ipblock-exempt-member' => '{{GENDER:$1|esente dal blocco IP globale}}',
	'group-recursive-export' => 'Esportatori ricorsivi',
	'group-recursive-export-member' => '{{GENDER:$1|esportatore|esportatrice|esportatore/trice}} ricorsivo',
	'group-translationadmin' => 'Amministratori delle traduzioni',
	'group-translationadmin-member' => '{{GENDER:$1|amministratore|amministratrice|amministratore/trice}} delle traduzioni',
	'grouppage-translationadmin' => '{{ns:project}}:Amministratori delle traduzioni',
	'group-centralnoticeadmin' => 'Amministratori avvisi centralizzati',
	'group-centralnoticeadmin-member' => '{{GENDER:$1|amministratore|amministratrice|amministratore/trice}} avvisi centralizzati',
	'grouppage-centralnoticeadmin' => '{{ns:project}}:Amministratori avvisi centralizzati',
	'group-coder' => 'Programmatori',
	'group-coder-member' => '{{GENDER:$1|programmatore|programmatrice|programmatore/trice}}',
	'group-inactive' => 'Utenti inattivi',
	'group-inactive-member' => '{{GENDER:$1|utente inattivo|utente inattiva|utente inattivo/a}}',
	'grouppage-inactive' => '{{ns:project}}:Utenti inattivi',
	'wikimedia-copyright' => 'Il testo è disponibile secondo la <a href="//creativecommons.org/licenses/by-sa/3.0/deed.it">licenza Creative Commons Attribuzione-Condividi allo stesso modo</a>; possono applicarsi condizioni ulteriori. Vedi le <a href="//wikimediafoundation.org/wiki/Terms_of_Use">condizioni d\'uso</a> per i dettagli.',
	'wikidata-copyright' => 'Tutti i dati strutturati nel namespace principale e delle proprietà sono disponibili in base alla <a href="//creativecommons.org/publicdomain/zero/1.0/deed.it" title="Definizione della licenza Creative Commons CC0">licenza Creative Commons CC0</a>;
il testo negli altri namespace è disponibile in base alla <a href="//creativecommons.org/licenses/by-sa/3.0/deed.it" title="Definizione della licenza Creative Commons Attribuzione-Condividi allo stesso modo">licenza Creative Commons Attribuzione-Condividi allo stesso modo</a>;
possono applicarsi ulteriori termini.
Vedi le <a href="//wikimediafoundation.org/wiki/Terms_of_Use/it" title="Wikimedia Foundation Terms of Use">Condizioni d\'uso</a> per i dettagli.',
	'wikidata-shortcopyrightwarning' => 'Facendo clic su "{{int:wikibase-save}}", si accettano le [//wikimediafoundation.org/wiki/Terms_of_Use/it condizioni d\'uso] e acconsenti irrevocabilmente a rilasciare il tuo contributo in base alla licenza [//creativecommons.org/publicdomain/zero/1.0/deed.it CC0].',
	'wikimedia-copyrightwarning' => "Facendo click sul pulsante \"{{int:savearticle}}\", accetti le [//wikimediafoundation.org/wiki/Condizioni_d'uso condizioni d'uso], e accetti irrevocabilmente di rilasciare il tuo contributo sotto le licenze [//creativecommons.org/licenses/by-sa/3.0/deed.it Creative Commons Attribuzione-Condividi allo stesso modo 3.0] e [//www.gnu.org/copyleft/fdl.html GFDL]. Accetti inoltre che un collegamento ipertestuale o URL sia sufficiente per l'attribuzione in base alla licenza Creative Commons.",
	'wikibase-sitelinks-wikivoyage' => 'Pagine di Wikivoyage collegate a questo elemento',
	'cant-delete-main-page' => 'Non puoi cancellare o spostare la pagina principale.',
	'wikimedia-translationnotifications-signup-legal' => "Accetti che, fornendo queste informazioni alla Wikimedia Foundation, possiamo contattarti per quanto riguarda le traduzioni o altri argomenti relativi al movimento Wikimedia che pensiamo possano interessarti. Accetti che i tuoi dati siano conservati negli Stati Uniti d'America e siano soggetti alla nostra [https://wikimediafoundation.org/wiki/Privacy_policy politica sulla privacy].",
	'upload-more-photos-of-this-monument' => 'Carica altre foto di questo monumento',
	'extdist-branch-master' => 'master (ultima versione in sviluppo)',
	'extdist-branch-REL1_21' => '1.21 (ultima versione stabile di MediaWiki)',
	'createacct-helpusername-url' => '{{ns:Project}}:Nome utente',
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(aiutami a scegliere)]]',
	'createacct-captcha-help-url' => '{{ns:Project}}:Richieste di utenze',
	'createacct-imgcaptcha-help' => "Non riesci a vedere l'immagine? [[{{MediaWiki:createacct-captcha-help-url}}|Richiedi un'utenza]]",
);

/** Japanese (日本語)
 * @author Aotake
 * @author Fievarsty
 * @author Fryed-peach
 * @author Hazard-SJ
 * @author Hosiryuhosi
 * @author JtFuruhata
 * @author Marine-Blue
 * @author Meno25
 * @author Ohgi
 * @author Shirayuki
 * @author Suisui
 * @author W.CC
 * @author Whym
 * @author 青子守歌
 */
$messages['ja'] = array(
	'wikimediamessages-desc' => 'ウィキメディア固有のメッセージ',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=ja',
	'sitesupport' => '寄付',
	'tooltip-n-sitesupport' => 'ご支援ください',
	'specialpages-group-contribution' => '寄付/資金調達',
	'nstab-creator' => '作者',
	'nstab-institution' => '施設',
	'nstab-sequence' => 'シーケンス',
	'nstab-timedtext' => '字幕',
	'group-Ex_Administrator' => '元管理者',
	'group-Ex_Administrator-member' => '{{GENDER:$1|元管理者}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:元管理者',
	'group-Ex_Bureaucrat' => '元ビューロクラット',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|元ビューロクラット}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:元ビューロクラット',
	'group-Image-reviewer' => '画像査読者',
	'group-Image-reviewer-member' => '{{GENDER:$1|画像査読者}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:画像査読者',
	'group-OTRS-member' => 'OTRSメンバー',
	'group-OTRS-member-member' => '{{GENDER:$1|OTRSメンバー}}',
	'grouppage-OTRS-member' => '{{ns:project}}:OTRSメンバー',
	'group-abusefilter' => '不正利用フィルター編集者',
	'group-abusefilter-member' => '{{GENDER:$1|不正利用フィルター編集者}}',
	'grouppage-abusefilter' => '{{ns:project}}:不正利用フィルター編集者',
	'group-accountcreator' => 'アカウント作成者',
	'group-accountcreator-member' => '{{GENDER:$1|アカウント作成者}}',
	'grouppage-accountcreator' => '{{ns:project}}:アカウント作成者',
	'group-arbcom' => '裁定委員会委員',
	'group-arbcom-member' => '{{GENDER:$1|裁定委員会委員}}',
	'grouppage-arbcom' => '{{ns:project}}:裁定委員会委員',
	'group-autopatrolled' => '自動巡回者',
	'group-autopatrolled-member' => '{{GENDER:$1|自動巡回者}}',
	'grouppage-autopatrolled' => '{{ns:project}}:自動巡回者',
	'group-autoreviewer' => '自動査読者',
	'group-autoreviewer-member' => '{{GENDER:$1|自動査読者}}',
	'grouppage-autoreviewer' => '{{ns:project}}:自動査読者',
	'group-bigexport' => '大規模エクスポート担当者',
	'group-bigexport-member' => '{{GENDER:$1|大規模エクスポート担当者}}',
	'grouppage-bigexport' => '{{ns:project}}:大規模エクスポート担当者',
	'group-botadmin' => '管理者権限のあるボット',
	'group-botadmin-member' => '{{GENDER:$1|管理者権限のあるボット}}',
	'grouppage-botadmin' => '{{ns:project}}:管理者権限のあるボット',
	'group-confirmed' => '承認された利用者',
	'group-confirmed-member' => '{{GENDER:$1|承認された利用者}}',
	'grouppage-confirmed' => '{{ns:project}}:承認された利用者',
	'group-editprotected' => '保護ページ編集者',
	'group-editprotected-member' => '{{GENDER:$1|保護ページ編集者}}',
	'grouppage-editprotected' => '{{ns:project}}:保護ページ編集者',
	'group-eliminator' => '削除者',
	'group-eliminator-member' => '削除者',
	'grouppage-eliminator' => '{{ns:project}}:削除者',
	'group-filemover' => 'ファイル移動者',
	'group-filemover-member' => '{{GENDER:$1|ファイル移動者}}',
	'grouppage-filemover' => '{{ns:project}}:ファイル移動者',
	'group-flood' => 'ボット扱い利用者',
	'group-flood-member' => '{{GENDER:$1|ボット扱い利用者}}',
	'grouppage-flood' => '{{ns:project}}:ボット扱い利用者',
	'group-founder' => '創設者',
	'group-founder-member' => '{{GENDER:$1|創設者}}',
	'grouppage-founder' => '{{ns:project}}:創設者',
	'group-import' => 'インポート担当者',
	'group-import-member' => '{{GENDER:$1|インポート担当者}}',
	'grouppage-import' => '{{ns:project}}:インポート担当者',
	'group-interface_editor' => 'インターフェイス編集者',
	'group-interface_editor-member' => '{{GENDER:$1|インターフェイス編集者}}',
	'grouppage-interface_editor' => '{{ns:project}}:インターフェイス編集者',
	'group-ipblock-exempt' => 'IPブロック適用除外者',
	'group-ipblock-exempt-member' => '{{GENDER:$1|IPブロック適用除外者}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IPブロック適用除外',
	'group-patroller' => '巡回者',
	'group-patroller-member' => '{{GENDER:$1|巡回者}}',
	'grouppage-patroller' => '{{ns:project}}:巡回者',
	'group-researcher' => '調査者',
	'group-researcher-member' => '{{GENDER:$1|研究者}}',
	'grouppage-researcher' => '{{ns:project}}:調査者',
	'group-rollbacker' => '巻き戻し者',
	'group-rollbacker-member' => '{{GENDER:$1|巻き戻し者}}',
	'grouppage-rollbacker' => '{{ns:project}}:巻き戻し者',
	'group-transwiki' => 'ウィキ間インポート担当者',
	'group-transwiki-member' => '{{GENDER:$1|ウィキ間インポート担当者}}',
	'grouppage-transwiki' => '{{ns:project}}:ウィキ間インポート担当者',
	'group-trusted' => '信頼された利用者',
	'group-trusted-member' => '{{GENDER:$1|信頼された利用者}}',
	'grouppage-trusted' => '{{ns:project}}:信頼された利用者',
	'group-uploader' => 'アップロード権限保持者',
	'group-uploader-member' => '{{GENDER:$1|アップロード権限保持者}}',
	'grouppage-uploader' => '{{ns:project}}:アップロード権限保持者',
	'group-Global_bot' => 'グローバルボット',
	'group-Global_bot-member' => '{{GENDER:$1|グローバルボット}}',
	'grouppage-Global_bot' => 'm:Global bot/ja',
	'group-Global_rollback' => 'グローバル巻き戻し者',
	'group-Global_rollback-member' => '{{GENDER:$1|グローバル巻き戻し者}}',
	'grouppage-Global_rollback' => 'm:Global rollback/ja',
	'group-Global_sysops' => 'グローバル管理者',
	'group-Global_sysops-member' => '{{GENDER:$1|グローバル管理者}}',
	'grouppage-Global_sysops' => 'm:Global sysops/ja',
	'group-Ombudsmen' => 'オンブズマン',
	'group-Ombudsmen-member' => '{{GENDER:$1|オンブズマン}}',
	'grouppage-Ombudsmen' => 'm:Ombudsman commission/ja',
	'group-Staff' => 'スタッフ',
	'group-Staff-member' => '{{GENDER:$1|スタッフ}}',
	'group-editinterface' => 'インターフェース編集者',
	'group-editinterface-member' => '{{GENDER:$1|インターフェース編集者}}',
	'group-steward' => 'スチュワード',
	'group-steward-member' => '{{GENDER:$1|スチュワード}}',
	'grouppage-steward' => 'm:Stewards/ja',
	'group-sysadmin' => 'システム管理者',
	'group-sysadmin-member' => '{{GENDER:$1|システム管理者}}',
	'group-API_High_Limit_Requestor' => 'API高頻度使用者',
	'group-API_High_Limit_Requestor-member' => '{{GENDER:$1|API高頻度使用者}}',
	'grouppage-API_High_Limit_Requestor' => 'm:API high limit requestors',
	'group-Indic_Bots' => 'インドのボット',
	'group-Indic_Bots-member' => '{{GENDER:$1|インドのボット}}',
	'grouppage-Indic_Bots' => 'm:Indic bots',
	'group-New_wikis_importer' => '新規ウィキインポート担当者',
	'group-New_wikis_importer-member' => '{{GENDER:$1|新規ウィキインポート担当者}}',
	'grouppage-New_wikis_importer' => 'm:New wikis importers',
	'group-global-ipblock-exempt' => 'グローバルIPブロック適用除外者',
	'group-global-ipblock-exempt-member' => '{{GENDER:$1|グローバルIPブロック適用除外者}}',
	'grouppage-global-ipblock-exempt' => 'm:Global IP block exemptions',
	'group-recursive-export' => '再帰的エクスポート担当者',
	'group-recursive-export-member' => '{{GENDER:$1|再帰的エクスポート担当者}}',
	'grouppage-recursive-export' => 'm:Recursive export',
	'group-translationadmin' => '翻訳管理者',
	'group-translationadmin-member' => '{{GENDER:$1|翻訳管理者}}',
	'grouppage-translationadmin' => '{{ns:project}}:翻訳管理者',
	'group-centralnoticeadmin' => '中央管理通知管理者',
	'group-centralnoticeadmin-member' => '{{GENDER:$1|中央管理通知管理者}}',
	'grouppage-centralnoticeadmin' => '{{ns:project}}:中央管理通知管理者',
	'group-coder' => 'コーダー',
	'group-coder-member' => '{{GENDER:$1|コーダー}}',
	'grouppage-coder' => '{{ns:project}}:コーダー',
	'group-inactive' => '活動停止中の利用者',
	'group-inactive-member' => '{{GENDER:$1|活動停止中の利用者}}',
	'grouppage-inactive' => '{{ns:project}}:活動停止中の利用者',
	'shared-repo-name-shared' => 'ウィキメディア・コモンズ',
	'wikimedia-copyright' => 'テキストは<a href="//creativecommons.org/licenses/by-sa/3.0/deed.ja">クリエイティブ・コモンズ 表示-継承ライセンス</a>のもとで利用できます。追加の条件が適用される場合があります。詳細は<a href="//wikimediafoundation.org/wiki/%E5%88%A9%E7%94%A8%E8%A6%8F%E7%B4%84">利用規約</a>を参照してください。',
	'wikidata-copyright' => '標準名前空間と Property 名前空間にあるすべての構造化データは<a href="//creativecommons.org/publicdomain/zero/1.0/" title="クリエイティブ・コモンズ CC0 ライセンスの定義">クリエイティブ・コモンズ CC0 ライセンス</a>の下で利用できます。その他の名前空間にあるテキストは<a href="//creativecommons.org/licenses/by-sa/3.0/" title="クリエイティブ・コモンズ 表示 - 継承 ライセンスの定義">クリエイティブ・コモンズ 表示 - 継承 ライセンス</a>の下で利用できます。追加の条件が適用される場合があります。詳細は<a href="//wikimediafoundation.org/wiki/Terms_of_Use/ja" title="ウィキメディア財団利用規約">利用規約</a>をご覧ください。',
	'wikidata-shortcopyrightwarning' => '「{{int:wikibase-save}}」をクリックすると、あなたは[//wikimediafoundation.org/wiki/Terms_of_Use/ja 利用規約]に同意するとともに、自分の投稿内容を [//creativecommons.org/publicdomain/zero/1.0/ CC0 ライセンス]のもとで公開することに同意したと見なされます。この同意は取り消せません。',
	'wikimedia-copyrightwarning' => '「{{int:savearticle}}」ボタンをクリックすると、あなたは[//wikimediafoundation.org/wiki/Terms_of_Use/ja 利用規約]に同意するとともに、自分の投稿内容を [//ja.wikipedia.org/wiki/Wikipedia:Text_of_Creative_Commons_Attribution-ShareAlike_3.0_Unported_License CC-BY-SA 3.0 ライセンス]および [//ja.wikipedia.org/wiki/Wikipedia:Text_of_GNU_Free_Documentation_License GFDL] のもとで公開することに同意したことになります。この同意は取り消せません。また、あなたはハイパーリンクまたは URL がクリエイティブ・コモンズライセンスにおける帰属表示として十分であると認めたことになります。',
	'wikibase-sitelinks-wikivoyage' => 'この項目にリンクしている Wikivoyage ページ',
	'cant-delete-main-page' => 'あなたはメインページを削除または移動できません。',
	'wikimedia-translationnotifications-signup-legal' => 'あなたはウィキメディア財団にこの情報を提供することで、翻訳やその他ウィキメディア運動に関してあなたが興味を持つだろう話題について我々があなたに連絡をとってもよいと同意したことになります。あなたのデータがアメリカ合衆国で保管され、我々の[https://wikimediafoundation.org/wiki/Privacy_policy プライバシー・ポリシー]の対象となることに同意したことになります。',
	'upload-more-photos-of-this-monument' => 'このモニュメントの他の写真をアップロード',
	'extdist-branch-master' => 'マスター (最新開発版)',
	'extdist-branch-REL1_21' => '1.21 (MediaWiki の最新の安定版)',
	'createacct-helpusername-url' => '{{ns:Project}}:利用者名の指針',
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(選び方を教えてください)]]',
	'createacct-captcha-help-url' => '{{ns:Project}}:アカウント申請',
	'createacct-imgcaptcha-help' => '画像が表示されない場合は[[{{MediaWiki:createacct-captcha-help-url}}|アカウント作成を依頼してください]]',
	'wikimedia-developers' => '開発者',
);

/** Lojban (Lojban)
 * @author OldakQuill
 */
$messages['jbo'] = array(
	'sitesupport' => 'jdini sidju',
);

/** Jutish (jysk)
 * @author Ælsån
 */
$messages['jut'] = array(
	'sitesupport' => 'Støtside',
	'tooltip-n-sitesupport' => 'Støt os',
);

/** Javanese (Basa Jawa)
 * @author Bawoor
 * @author Meursault2004
 * @author Nemo bis
 * @author NoiX180
 * @author Pras
 */
$messages['jv'] = array(
	'wikimediamessages-desc' => 'Pesen-pesen spesifik Wikimedia',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=jv',
	'sitesupport' => 'Nyumbang dana',
	'tooltip-n-sitesupport' => 'Sokongen kita',
	'specialpages-group-contribution' => 'Kontribusi/Panggalang dana',
	'nstab-creator' => 'Panyipta',
	'nstab-institution' => 'Lembaga',
	'nstab-sequence' => 'Urutan',
	'nstab-timedtext' => 'TèksKawektu',
	'group-Ex_Administrator' => 'Mantan pangurus',
	'group-Ex_Administrator-member' => '{{GENDER:$1|mantan pangurus}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Mantan pangurus',
	'group-Ex_Bureaucrat' => 'Mantan birokrat',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|mantan birokrat}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Mantan birokrat',
	'group-Image-reviewer' => 'Panilik gambar',
	'group-Image-reviewer-member' => '{{GENDER:$1|panilik gambar}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:Panilik gambar',
	'group-OTRS-member' => 'Anggota OTRS',
	'group-OTRS-member-member' => '{{GENDER:$1|anggota OTRS}}',
	'grouppage-OTRS-member' => '{{ns:project}}:anggota OTRS',
	'group-abusefilter' => 'Panyunting saringan salah-guna',
	'group-abusefilter-member' => '{{GENDER:$1|panyunting saringan pangowah adat}}',
	'grouppage-abusefilter' => '{{ns:project}}:Panyunting saringan salah-guna',
	'group-accountcreator' => 'Sing gawé akun',
	'group-accountcreator-member' => '{{GENDER:$1|panggawé akun}}',
	'grouppage-accountcreator' => '{{ns:project}}:Sing gawé akun',
	'group-arbcom' => 'Anggota komité arbitrasi',
	'group-arbcom-member' => '{{GENDER:$1|anggota komité arbitrasi}}',
	'grouppage-arbcom' => '{{ns:project}}:Anggota komité arbitrasi',
	'group-autopatrolled' => 'Paronda otomatis',
	'group-autopatrolled-member' => '{{GENDER:$1|paronda otomatis}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Patroli otomatis',
	'group-autoreviewer' => 'Pamriksa otomatis',
	'group-autoreviewer-member' => '{{GENDER:$1|panilik otomatis}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Pamriksa otomatis',
	'group-bigexport' => 'Èksportir gedhé',
	'group-bigexport-member' => '{{GENDER:$1|èksportir gedhé}}',
	'grouppage-bigexport' => '{{ns:project}}:Èksportir gedhé',
	'group-botadmin' => 'Bot mawa hak pangurus',
	'group-botadmin-member' => '{{GENDER:$1|bot mawa hak pangurus}}',
	'grouppage-botadmin' => '{{ns:project}}:Bot mawa hak pangurus',
	'group-confirmed' => 'Panganggo wis dikonfirmasi',
	'group-confirmed-member' => '{{GENDER:$1|panganggo sing wis dipesthèkaké}}',
	'grouppage-confirmed' => '{{ns:project}}:Panganggo wis dikonfirmasi',
	'group-editprotected' => 'Panyunting kaca sing dijaga',
	'group-editprotected-member' => '{{GENDER:$1|panyunting kaca sing dijaga}}',
	'grouppage-editprotected' => '{{ns:project}}: Panyunting kaca sing dijaga',
	'group-eliminator' => 'Èliminator',
	'group-eliminator-member' => '{{GENDER:$1|èliminator}}',
	'grouppage-eliminator' => '{{ns:project}}:Èliminator',
	'group-filemover' => 'Pamindhah berkas',
	'group-filemover-member' => '{{GENDER:$1|pamindhah berkas}}',
	'grouppage-filemover' => '{{ns:project}}:Pamindhah berkas',
	'group-flood' => 'Para panganggo bot',
	'group-flood-member' => '{{GENDER:$1|Panganggo bot}}',
	'grouppage-flood' => '{{ns:project}}:Para panganggo bot',
	'group-founder' => 'Pendhiri',
	'group-founder-member' => '{{GENDER:$1|sing ngadegaké}}',
	'grouppage-founder' => '{{ns:project}}:Pandhiri',
	'group-import' => 'Importir',
	'group-import-member' => '{{GENDER:$1|importir}}',
	'grouppage-import' => '{{ns:project}}:Importir',
	'group-interface_editor' => 'Panyunting antarmuka',
	'group-interface_editor-member' => '{{GENDER:$1|panyunting antarmuka}}',
	'grouppage-interface_editor' => '{{ns:project}}:Panyunting antarmuka',
	'group-ipblock-exempt' => 'Pambébasan saka pamblokiran IP',
	'group-ipblock-exempt-member' => '{{GENDER:$1|pamardikan blokiran IP}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Pambébasan saka pamblokiran IP',
	'group-patroller' => 'Paronda',
	'group-patroller-member' => '{{GENDER:$1|paronda}}',
	'grouppage-patroller' => '{{ns:project}}:Paronda',
	'group-researcher' => 'Panliti',
	'group-researcher-member' => '{{GENDER:$1|panliti}}',
	'grouppage-researcher' => '{{ns:project}}:Panliti',
	'group-rollbacker' => 'Sing mbalèkaké révisi',
	'group-rollbacker-member' => '{{GENDER:$1|pambalik}}',
	'grouppage-rollbacker' => '{{ns:project}}:Sing mbalèkaké révisi',
	'group-transwiki' => 'Importir transwiki',
	'group-transwiki-member' => '{{GENDER:$1|importir transwiki}}',
	'grouppage-transwiki' => '{{ns:project}}:Importir transwiki',
	'group-trusted' => 'Panganggo pitaya',
	'group-trusted-member' => '{{GENDER:$1|Panganggo pitaya}}',
	'grouppage-trusted' => '{{ns:project}}:Panganggo pitaya',
	'group-Global_bot' => 'Bot global',
	'group-Global_bot-member' => '{{GENDER:$1|bot global}}',
	'group-Global_rollback' => 'Sing mbalèkaké révisi global',
	'group-Global_rollback-member' => '{{GENDER:$1|pambalik global}}',
	'grouppage-Global_rollback' => 'm:Global rollback',
	'group-Global_sysops' => 'Opsis global',
	'group-Global_sysops-member' => '{{GENDER:$1|opsis global}}',
	'group-Ombudsmen' => 'Ombudsman',
	'group-Ombudsmen-member' => '{{GENDER:$1|ombudsman}}',
	'grouppage-Ombudsmen' => 'm:Ombudsman commission',
	'group-Staff' => 'Staf',
	'group-Staff-member' => 'staf',
	'group-editinterface' => 'Panyunting adu-rai',
	'group-editinterface-member' => '{{GENDER:$1|panyunting antarmuka}}',
	'group-steward' => 'Steward',
	'group-steward-member' => '{{GENDER:$1|pramugara}}',
	'group-sysadmin' => 'Administrator sistem',
	'group-sysadmin-member' => '{{GENDER:$1|pangurus sistem}}',
	'grouppage-sysadmin' => 'm:System administrators',
	'group-translationadmin' => 'Pangurus terjemahan',
	'group-translationadmin-member' => '{{GENDER:$1|pangurus terjemahan}}',
	'grouppage-translationadmin' => '{{ns:project}}:Pangurus terjemahan',
	'group-coder' => 'Programer',
	'group-coder-member' => '{{GENDER:$1|ahli kodhé}}',
	'grouppage-coder' => '{{ns:project}}:Programer',
	'group-inactive' => 'Panganggo ora aktif',
	'group-inactive-member' => '{{GENDER:$1|panganggo ora aktip}}',
	'grouppage-inactive' => '{{ns:project}}:Panganggo ora aktif',
	'wikimedia-copyright' => 'Tèks cumawis wonten ing saandhaping <a href="//creativecommons.org/licenses/by-sa/3.0/">Lisensi Atribusi/Berbagi Serupa Creative Commons</a>; mbokmanawi ugi wonten wewaton tambahan. Pirsani <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Katentuan Pangginaan</a> supados langkung gamblang.',
	'wikimedia-copyrightwarning' => 'Mawa ngeklik tombol "{{int:savearticle}}", Sampéyan ngiyakaké [//wikimediafoundation.org/wiki/Terms_of_Use Katemton Panganggoan], lan Sampéyan ngiyakaké yèn nguculaké kontribusi Sampéyan sarta ora kersa narik mbalik sakisoré [//creativecommons.org/licenses/by-sa/3.0/ Lisènsi CC-BY-SA 3.0] lan [//www.gnu.org/copyleft/fdl.html GFDL]. Sampéyan ngiyakaké yèn pranala utawa URL kuwi atribusi sing wis cukup sakisorè lisènsi Creative Commons.',
	'cant-delete-main-page' => 'Sampéyan ora bisa mbusak utawa mindhahaké kaca utama.',
	'wikimedia-translationnotifications-signup-legal' => 'Sampéyan ngiyakaké yèn nyadhiyakaké Yayasan Wikipédia informasi iki awak dhéwé bisa ngubungi Sampéyan ngenani terjamahan utawa topik liya sing ana kaitané karo gerakan Wikimédia awak dhéwé kersa marang Sampéyan. Sampéyan ngiyakaké data Sampéyan disimpen nèng Amèrika Serikat lan dadi [https://wikimediafoundation.org/wiki/Privacy_policy kabijakan privasi] awak dhéwé.',
);

/** Georgian (ქართული)
 * @author Alsandro
 * @author BRUTE
 * @author David1010
 * @author Dawid Deutschland
 * @author ITshnik
 * @author Malafaya
 * @author Nemo bis
 * @author Sopho
 * @author Temuri rajavi
 * @author לערי ריינהארט
 * @author გიორგიმელა
 */
$messages['ka'] = array(
	'wikimediamessages-desc' => 'ვიკიმედიის სპეციფიკური წერილები',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=ka',
	'sitesupport' => 'შეწირულობები',
	'tooltip-n-sitesupport' => 'მხარდაჭერა',
	'specialpages-group-contribution' => 'წვლილი / ფონდრაიზერი',
	'nstab-creator' => 'შემქმნელი',
	'nstab-institution' => 'დაწესებულება',
	'nstab-sequence' => 'თანმიმდევრობა',
	'nstab-timedtext' => 'სინქრონული ტექსტი',
	'group-Ex_Administrator' => 'ყოფილი ადმინისტრატორები',
	'group-Ex_Administrator-member' => '{{GENDER:$1|ყოფილი ადმინისტრატორი}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:ყოფილი ადმინისტრატორები',
	'group-Ex_Bureaucrat' => 'ყოფილი ბიუროკრატები',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|ყოფილი ბიუროკრატი}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:ყოფილი ბიუროკრატები',
	'group-Image-reviewer' => 'სურათის შემმოწმებლები',
	'group-Image-reviewer-member' => '{{GENDER:$1|სურათის შემმოწმებელი}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:სურათის შემმოწმებლები',
	'group-OTRS-member' => 'OTRS-ის წევრები',
	'group-OTRS-member-member' => '{{GENDER:$1|OTRS-ის წევრი}}',
	'grouppage-OTRS-member' => '{{ns:project}}:OTRS-ის წევრები',
	'group-abusefilter' => 'ბოროტად გამოყენების ფილტრის მეპატრულე',
	'group-abusefilter-member' => '{{GENDER:$1|ბოროტად გამოყენების ფილტრის რედაქტორი}}',
	'grouppage-abusefilter' => '{{ns:project}}:ბოროტად გამოყენების ფილტრის რედაქტორები',
	'group-accountcreator' => 'ანგარიში შემქმნელები',
	'group-accountcreator-member' => '{{GENDER:$1|ანგარიშის შემქმნელი}}',
	'grouppage-accountcreator' => '{{ns:project}}:ანგარიშების შემქმნელები',
	'group-arbcom' => 'საარბიტრჟო კომიტეტის წევრები',
	'group-arbcom-member' => '{{GENDER:$1|საარბიტრაჟო კომიტეტის წევრი}}',
	'grouppage-arbcom' => '{{ns:project}}:საარბიტრაჟო კომიტეტის წევრები',
	'group-autopatrolled' => 'ავტოპატრულები',
	'group-autopatrolled-member' => '{{GENDER:$1|ავტოპატრული}}',
	'grouppage-autopatrolled' => '{{ns:project}}:ავტომეპატრულე',
	'group-autoreviewer' => 'ავტომხილველები',
	'group-autoreviewer-member' => '{{GENDER:$1|ავტოგადამხედველი}}',
	'grouppage-autoreviewer' => '{{ns:project}}:ავტომხილველები',
	'group-bigexport' => 'დიდი ექსპორტორები',
	'group-bigexport-member' => '{{GENDER:$1|მსხვილი ექსპორტიორი}}',
	'grouppage-bigexport' => '{{ns:project}}:დიდი ექსპორტიორები',
	'group-botadmin' => 'რობოტები ადმინისტრატორის უფლებებით',
	'group-botadmin-member' => '{{GENDER:$1|ბოტი ადმინისტრატორის უფლებებით}}',
	'grouppage-botadmin' => '{{ns:project}}:ბოტები ადმინისტრატორის უფლებებით',
	'group-confirmed' => 'დადასტურებული მომხმარებლები',
	'group-confirmed-member' => '{{GENDER:$1|დადასტურებული მომხმარებელი}}',
	'grouppage-confirmed' => '{{ns:project}}:დადასტურებული მომხმარებლები',
	'group-editprotected' => 'დაცული გვერდების რედაქტორები',
	'group-editprotected-member' => '{{GENDER:$1|დაცული გვერდების რედაქტორი}}',
	'grouppage-editprotected' => '{{ns:project}}:დაცული გვერდების რედაქტორები',
	'group-eliminator' => 'გამომრიცხველები',
	'group-eliminator-member' => '{{GENDER:$1|გამომრიცხავი}}',
	'grouppage-eliminator' => '{{ns:project}}:გამომრიცხავი',
	'group-filemover' => 'ფაილის გადამტანები',
	'group-filemover-member' => '{{GENDER:$1|ფაილის გადამტანი}}',
	'grouppage-filemover' => '{{ns:project}}:ფაილის გადამტანები',
	'group-flood' => 'მომხმარებელი-ბოტები',
	'group-flood-member' => '{{GENDER:$1|მომხმარებელი-ბოტი}}',
	'grouppage-flood' => '{{ns:project}}:მომხმარებელი-ბოტები',
	'group-founder' => 'დამაარსებლები',
	'group-founder-member' => '{{GENDER:$1|დამაარსებელი}}',
	'grouppage-founder' => '{{ns:project}}:დამაარსებლები',
	'group-import' => 'იმპორტიორები',
	'group-import-member' => '{{GENDER:$1|იმპორტორი}}',
	'grouppage-import' => '{{ns:project}}:იმპორტიორები',
	'group-interface_editor' => 'ინტერფეისის რედაქტორები',
	'group-interface_editor-member' => '{{GENDER:$1|ინტერფეისის რედაქტორი}}',
	'grouppage-interface_editor' => '{{ns:project}}:ინტერფეისის რედაქტორები',
	'group-ipblock-exempt' => 'IP-ბლოკირებების გამონაკლისები',
	'group-ipblock-exempt-member' => '{{GENDER:$1|IP ბლოკირების გამონაკლისები}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP-დაბლოკვების გამონაკლისები',
	'group-patroller' => 'პატრულები',
	'group-patroller-member' => '{{GENDER:$1|პატრული}}',
	'grouppage-patroller' => '{{ns:project}}:პატრული',
	'group-researcher' => 'მკვლევარები',
	'group-researcher-member' => '{{GENDER:$1|მკვლევარი}}',
	'grouppage-researcher' => '{{ns:project}}:მკვლევარები',
	'group-rollbacker' => 'გამაუქმებლები',
	'group-rollbacker-member' => '{{GENDER:$1|გამაუქმებელი}}',
	'grouppage-rollbacker' => '{{ns:project}}:გამაუქმებლები',
	'group-transwiki' => 'Transwiki-ს იმპორტიორები',
	'group-transwiki-member' => '{{GENDER:$1|Transwiki-ს იმპორტიორი}}',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki-ს იმპორტორები',
	'group-trusted' => 'სანდო მომხმარებლები',
	'group-trusted-member' => '{{GENDER:$1|სანდო მომხმარებელი}}',
	'grouppage-trusted' => '{{ns:project}}:სანდო მომხმარებლები',
	'group-Global_bot' => 'გლობალური ბოტები',
	'group-Global_bot-member' => '{{GENDER:$1|გლობალური ბოტი}}',
	'group-Global_rollback' => 'გლობალური გამმაუქმებლები',
	'group-Global_rollback-member' => '{{GENDER:$1|გლობალური გამაუქმებელი}}',
	'group-Global_sysops' => 'გლობალური ადმინისტრატორები',
	'group-Global_sysops-member' => '{{GENDER:$1|გლობალური ადმინისტრატორი}}',
	'group-Ombudsmen' => 'ომბუცმენები',
	'group-Ombudsmen-member' => '{{GENDER:$1|ობუდსმენი}}',
	'group-Staff' => 'თანამშრომლები',
	'group-Staff-member' => 'თანამშრომელი',
	'group-editinterface' => 'ინტერფეისის რედაქტორები',
	'group-editinterface-member' => '{{GENDER:$1|ინტერფეისის რედაქტორი}}',
	'group-steward' => 'სტიუარდები',
	'group-steward-member' => '{{GENDER:$1|სტიუარდი}}',
	'group-sysadmin' => 'სისტემური ადმინისტრატორები',
	'group-sysadmin-member' => '{{GENDER:$1|სისტემური ადმინისტრატორი}}',
	'group-Indic_Bots' => 'ინდური ბოტები',
	'group-Indic_Bots-member' => '{{GENDER:$1|ინდური ბოტი}}',
	'group-New_wikis_importer' => 'ახალი ვიკი იმპორტიორები',
	'group-New_wikis_importer-member' => '{{GENDER:$1|ახალი ვიკი იმპორტიორი}}',
	'group-global-ipblock-exempt' => 'გლობალური IP ბლოკირების გამონაკლისები',
	'group-global-ipblock-exempt-member' => '{{GENDER:$1|გლობალური IP ბლოკირების გამონაკლისი}}',
	'group-recursive-export' => 'რეკურსიული ექსპორტი',
	'group-recursive-export-member' => '{{GENDER:$1|რეკურსიული ექსპორტიორი}}',
	'group-translationadmin' => 'თარგმანის ადმინისტრატორები',
	'group-translationadmin-member' => '{{GENDER:$1|თარგმანის ადმინისტრატორი}}',
	'grouppage-translationadmin' => '{{ns:project}}:თარგმანის ადმინისტრატორები',
	'group-centralnoticeadmin' => 'ცენტრალური შეტყობინების ადმინისტრატორები',
	'group-centralnoticeadmin-member' => '{{GENDER:$1|ცენტრალური შეტყობინების ადმინისტრატორი}}',
	'grouppage-centralnoticeadmin' => '{{ns:project}}:ცენტრალური შეტყობინების ადმინისტრატორები',
	'group-coder' => 'პროგრამისტი',
	'group-coder-member' => '{{GENDER:$1|პროგრამისტი}}',
	'group-inactive' => 'არააქტიური მომხმარებლები',
	'group-inactive-member' => '{{GENDER:$1|არააქტიური მომხმარებელი}}',
	'grouppage-inactive' => '{{ns:project}}:არააქტიური მომხმარებლები',
	'wikimedia-copyright' => 'მოცემული ტექსტი წარმოდგენილია <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike ლიცენზიით</a>; შესაძლოა დამატებითი პირობების არსებობა. დეტალებისთვის იხილეთ <a href="//wikimediafoundation.org/wiki/Terms_of_Use">გამოყენების წესები</a>.',
	'wikidata-shortcopyrightwarning' => 'ღილაკზე "შენახვა" დაწკაპუნებით, თქვენ ეთანხმებით [https://wikimediafoundation.org/wiki/Terms_of_Use გამოყენების წესებს] და სამუდამოდ თანხმდებით თქვენი წვლილის გამოქვეყნებას [https://creativecommons.org/publicdomain/zero/1.0/ CC0 ლიცენზიით].',
	'wikimedia-copyrightwarning' => 'ღილაკ "{{int:savearticle}}"-ზე დაჭერით, თქვენ ეთანხმებით [//wikimediafoundation.org/wiki/Terms_of_Use გამოყენების წესებს], და თქვენ აგრეთვე ეთანხმებით მის გამოქვეყნებას [//creativecommons.org/licenses/by-sa/3.0/ CC-BY-SA 3.0] და [//www.gnu.org/copyleft/fdl.html GFDL] ლიცენზიებით.
თქვენ ეთანხმებით, რომ მითთებული ჰიპერბმულები შესაბამის გვერდზე, ან მისი URL-მისამართი საკმარისი იქნება Creative Commons-ის ლიცენზიის ატრიბუტიკის პირობების შესასრულებლად.',
	'cant-delete-main-page' => 'თქვენ არ შეგიძლიათ მთავარი გვერდის წაშლა ან გადატანა.',
	'upload-more-photos-of-this-monument' => 'ამ ობიექტის უფრო მეტი ფოტოს ატვირთვა',
	'extdist-branch-master' => 'ოსტატი (უკანასკნელი შემუშავებული ვერსია)',
	'extdist-branch-REL1_21' => '1.21 (მედიავიკის ბოლო სტაბილური ვერსია)',
);

/** Kara-Kalpak (Qaraqalpaqsha)
 * @author AlefZet
 * @author Emperyan
 */
$messages['kaa'] = array(
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=kaa',
	'sitesupport' => "Ja'rdem berıw",
	'tooltip-n-sitesupport' => "Bizge ja'rdem berin'",
);

/** Kabyle (Taqbaylit)
 * @author Agurzil
 * @author Berkus Tiwal
 */
$messages['kab'] = array(
	'wikimediamessages-desc' => 'Iznan usligen n Wikimedia',
	'sitesupport' => 'Efk-aɣ idrimen',
	'tooltip-n-sitesupport' => 'Ellil-aɣ',
	'group-accountcreator' => 'Imeskaren n imiḍanen',
	'group-founder' => 'Imeskar imenza',
	'grouppage-founder' => '{{ns:project}}:Imeskar Imenza',
	'group-Staff-member' => 'Amaslad (membre) n terbaεt',
);

/** Kirmanjki (Kırmancki)
 * @author Mirzali
 */
$messages['kiu'] = array(
	'sitesupport' => 'Beğş',
);

/** Kazakh (Қазақша)
 * @author GaiJin
 * @author Kaztrans
 * @author PPerviz
 */
$messages['kk'] = array(
	'grouppage-accountcreator' => '{{ns:project}}:Тіркелгі жасаушылар',
	'wikimedia-copyrightwarning' => "'''Авторлық құқықтарын''' бұзған мағлұмат дереу жойылады. Энциклопедиялық мазмұны талаптарға сай болуы керек. ''«Бетті сақта!»'' батырмасын басқаныңыз — үлесіңізді [//creativecommons.org/licenses/by-sa/3.0/ CC-BY-SA 3.0] және [//www.gnu.org/copyleft/fdl.html GFDL]  лицензиялары жүзінде жарияланғандығына келіскеніңіз болып табылады. Толығырақ қ.
[//wikimediafoundation.org/wiki/Terms_of_Use қолдану шарттары].",
	'wikimedia-editpage-tos-summary' => 'Егер сіз басқалар тарапынан жазуыңыздың түзетілуін не еркін көшірілуін қаламасаңыз, жазуыңызды мында ұсынбауыңыз жөн. Егер сiз жазған мәтініңіздің авторы болмасаңыз, онда ол [//wikimediafoundation.org/wiki/Terms_of_Use Қолдану шарттарына] лайықты болуы қажет және сiздің лицензиялаудың кез келген талаптарын орындауға келіскеніңіз болып табылады.',
);

/** Kazakh (Arabic script) (قازاقشا (تٴوتە)‏)
 */
$messages['kk-arab'] = array(
	'sitesupport' => 'دەمەۋشىلىك',
);

/** Kazakh (Cyrillic script) (қазақша (кирил)‎)
 * @author AlefZet
 * @author Daniyar
 * @author GaiJin
 * @author Kaztrans
 */
$messages['kk-cyrl'] = array(
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=kk-cyrl',
	'sitesupport' => 'Демеушілік',
	'tooltip-n-sitesupport' => 'Демеу беріңіз',
	'group-accountcreator' => 'Аккаунт жасаушылар',
	'grouppage-accountcreator' => '{{ns:project}}:Тіркелгі жасаушылар',
	'group-import' => 'Сырттан алушылар',
	'group-import-member' => 'сырттан алушы', # Fuzzy
	'group-Staff' => 'Басқарма',
	'group-Staff-member' => 'Басқарма мүшесі',
	'group-sysadmin' => 'Жүйе әкімшілері',
	'group-sysadmin-member' => 'жүйе әкімшісі', # Fuzzy
	'wikimedia-copyrightwarning' => "'''Авторлық құқықтар''' бұзған мағлұмат дереу жойылады. Энциклопедиялық мазмұны талаптарға сай болуы керек. ''«Бетті сақта!»'' батырмасын басқаныңыз — үлесіңізді [//creativecommons.org/licenses/by-sa/3.0/ CC-BY-SA 3.0] және [//www.gnu.org/copyleft/fdl.html GFDL]  лицензиялары жүзінде жарияланғандығына келіскеніңіз болып табылады. Толығырақ қ.
[//wikimediafoundation.org/wiki/Terms_of_Use қолдану шарттары].", # Fuzzy
);

/** Kazakh (Latin script) (qazaqşa (latın)‎)
 */
$messages['kk-latn'] = array(
	'sitesupport' => 'Demewşilik',
);

/** Kalaallisut (kalaallisut)
 * @author Qaqqalik
 */
$messages['kl'] = array(
	'wikimedia-copyright' => 'Allatat ilaatinneqarput <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike License</a>-ip ataani;
piumasaqaatit atuutinneqarsinnaapput.
Takuuk <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Atugassatut piumasaqaatit</a> paasissutissaanerusut.',
);

/** Khmer (ភាសាខ្មែរ)
 * @author Kiensvay
 * @author Lovekhmer
 * @author Nemo bis
 * @author Thearith
 * @author គីមស៊្រុន
 * @author វ័ណថារិទ្ធ
 */
$messages['km'] = array(
	'wikimediamessages-desc' => 'សារយថាប្រភេទរបស់វិគីមេឌា',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=km',
	'sitesupport' => 'វិភាគទាន',
	'tooltip-n-sitesupport' => 'គាំទ្រ​យើងខ្ញុំ',
	'specialpages-group-contribution' => 'ការបរិច្ចាគនិងការប្រមូលមូលនិធិ',
	'nstab-creator' => 'ស្ថាបនិក',
	'nstab-institution' => 'ស្ថាប័ន',
	'group-Ex_Administrator' => 'អតីតអភិបាល',
	'group-Image-reviewer-member' => '{{GENDER:$1|អ្នកត្រួតពិនិត្យរូបភាព}}',
	'group-abusefilter' => 'កម្មវិធី​កែ​សម្រួល​តម្រងការបំពានច្បាប់',
	'group-abusefilter-member' => '{{GENDER:$1|កម្មវិធី​កែ​សម្រួល​តម្រងការបំពានច្បាប់}}',
	'grouppage-abusefilter' => '{{ns:project}}:កម្មវិធី​កែ​សម្រួល​តម្រងការបំពានច្បាប់',
	'group-accountcreator' => 'អ្នកបង្កើតគណនី',
	'group-accountcreator-member' => '{{GENDER:$1|អ្នកបង្កើតគណនី}}',
	'grouppage-accountcreator' => '{{ns:project}}:អ្នកបង្កើតគណនី',
	'group-autopatrolled-member' => '{{GENDER:$1|អ្នកល្បាត​ស្វ័យប្រវត្តិ}}',
	'grouppage-autopatrolled' => '{{ns:project}}:អ្នកល្បាត​ស្វ័យប្រវត្តិ',
	'group-autoreviewer' => 'ក្រុម​អ្នកត្រួតពិនិត្យឡើងវិញដោយ​ស្វ័យប្រវត្តិ​',
	'group-autoreviewer-member' => '​{{GENDER:$1|អ្នកត្រួតពិនិត្យឡើងវិញដោយ​ស្វ័យប្រវត្តិ​}}',
	'grouppage-autoreviewer' => '{{ns:project}}:អ្នកត្រួតពិនិត្យឡើងវិញដោយ​ស្វ័យ​ប្រវត្តិ​',
	'group-bigexport' => 'ក្រុម​អ្នកនាំចេញ​ធំ​',
	'group-bigexport-member' => '{{GENDER:$1|អ្នក​នាំចេញ​ធំ​}}',
	'grouppage-bigexport' => '{{ns:project}}:ក្រុមអ្នកនាំចេញ​ធំ​',
	'group-botadmin' => 'រូបយន្តដែលមានសិទ្ធិស្មើអភិបាល',
	'group-confirmed' => 'អ្នកប្រើប្រាស់ទាំងឡាយ​ដែលត្រូវបាន​ទទួលស្គាល់',
	'group-confirmed-member' => '{{GENDER:$1|អ្នកប្រើប្រាស់​ដែលត្រូវបាន​ទទួលស្គាល់}}',
	'grouppage-confirmed' => '{{ns:project}}:អ្នកប្រើប្រាស់ទាំងឡាយដែលត្រូវបាន​ទទួលស្គាល់',
	'group-editprotected' => 'អ្នកកែប្រែទំព័រដែលត្រូវបានការពារ',
	'group-editprotected-member' => '{{GENDER:$1|អ្នកកែប្រែទំព័រដែលត្រូវបានការពារ}}',
	'group-eliminator-member' => '{{GENDER:$1|អ្នកលុប}}',
	'group-filemover-member' => '{{GENDER:$1|អ្នកប្ដូរទីតាំងឯកសារ}}',
	'group-flood-member' => '{{GENDER:$1|អ្នកប្រើប្រាស់ជារូបយន្ត}}',
	'group-founder' => 'ស្ថាបនិក',
	'group-founder-member' => '{{GENDER:$1|ស្ថាបនិក}}',
	'grouppage-founder' => '{{ns:project}}:ស្ថាបនិក',
	'group-import' => 'អ្នកនាំចូល',
	'group-import-member' => '{{GENDER:$1|អ្នកនាំចូល}}',
	'grouppage-import' => '{{ns:project}}:អ្នកនាំចូល',
	'group-interface_editor-member' => '{{GENDER:$1|អ្នកកែប្រែអន្តរមុខ}}',
	'group-patroller' => 'អ្នកតាមដាន',
	'group-patroller-member' => '{{GENDER:$1|អ្នកល្បាត}}',
	'group-researcher-member' => '{{GENDER:$1|អ្នកស្រាវជ្រាវ}}',
	'group-transwiki' => 'អ្នកនាំចូលអន្តរវិគី',
	'group-transwiki-member' => '{{GENDER:$1|អ្នកនាំចូលអន្តរវិគី}}',
	'grouppage-transwiki' => '{{ns:project}}:អ្នកនាំចូលអន្តរវិគី',
	'group-trusted-member' => '{{GENDER:$1|អ្នកប្រើប្រាស់ដែលអាចជឿទុកចិត្តបាន}}',
	'group-Global_bot' => 'រូបយន្ត​សកល',
	'group-Global_bot-member' => '{{GENDER:$1|រូបយន្ត​សកល}}',
	'group-Global_sysops-member' => '{{GENDER:$1|អ្នកថែទាំប្រព័ន្ធសកល}}',
	'group-Ombudsmen' => 'អមប៊ុដហ្ស៍ម៉ឹន',
	'group-Ombudsmen-member' => '{{GENDER:$1|អន្តរការី}}',
	'group-Staff' => 'បុគ្គលិកបម្រើការ',
	'group-Staff-member' => 'សមាជិកដែលជាបុគ្គលិកបម្រើការ',
	'group-editinterface' => 'កែប្រែអន្តរមុខ',
	'group-editinterface-member' => '{{GENDER:$1|អ្នកកែប្រែអន្តរមុខ}}',
	'group-sysadmin' => 'អ្នកអភិបាលប្រព័ន្ឋ',
	'group-sysadmin-member' => '{{GENDER:$1|អ្នកអភិបាលប្រព័ន្ឋ}}',
	'group-coder' => 'អ្នកសរសេរកូដ',
	'group-coder-member' => '{{GENDER:$1|អ្នកសរសេរកូដ}}',
	'group-inactive' => 'ក្រុម​អ្នក​ប្រើ​ប្រាស់​អសកម្ម​',
	'group-inactive-member' => '{{GENDER:$1|អ្នក​ប្រើ​ប្រាស់​អសកម្ម​}}',
	'grouppage-inactive' => '{{ns:project}}:អ្នកប្រើប្រាស់អសកម្ម',
	'wikimedia-copyright' => 'អត្ថបទ​នេះ​ត្រូវបានផ្ដល់ក្រោមអាជ្ញាបណ្ឌ<a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike License</a>​។ លក្ខខណ្ឌបន្ថែម​ផ្សេងៗទៀតក៏នឹងអាចត្រូវបានអនុវត្ត។​
សូមមើល <a href="//wikimediafoundation.org/wiki/Terms_of_Use">លក្ខខណ្ឌ​ក្នុងការ​ប្រើប្រាស់</a> សម្រាប់​ព័ត៌មានលម្អិត​។',
	'wikimedia-copyrightwarning' => 'តាមរយៈ​ការចុចលើប៊ូតុង "{{int:savearticle}}" អ្នកយល់ព្រមជាមួយ[//wikimediafoundation.org/wiki/Terms_of_Use លក្ខខណ្ឌនៃការប្រើប្រាស់] ហើយអ្នកយល់ព្រមដោយឥតកែប្រែ​ក្នុងការចែកចាយការរួមចំណែករបស់អ្នកក្រោម [//creativecommons.org/licenses/by-sa/3.0/ អាជ្ញាបណ្ឌ CC-BY-SA 3.0] និង [//www.gnu.org/copyleft/fdl.html GFDL]។ អ្នកក៏យល់ព្រមថាការប្រើតំណភ្ជាប់ហាយភើលីងឬURLគឺគ្រប់គ្រាន់សំរាប់បញ្ជាក់ពីភាពជាម្ចាស់កម្មសិទ្ធរបស់អ្នក ក្រោមអាជ្ញាបណ្ឌ Creative Commons។',
	'cant-delete-main-page' => 'អ្នកមិនអាចលុបចោលឬប្ដូរទីតាំងទំព័រដើមបានទេ។',
);

/** Kannada (ಕನ್ನಡ)
 * @author Nayvik
 * @author Shushruth
 * @author VASANTH S.N.
 * @author לערי ריינהארט
 */
$messages['kn'] = array(
	'sitesupport' => 'ದೇಣಿಗೆ',
	'tooltip-n-sitesupport' => 'ನಮ್ಮನ್ನು ಬೆಂಬಲಿಸಿ',
	'nstab-creator' => 'ಸೃಷ್ಟಿಕರ್ತ',
	'grouppage-confirmed' => '{{ns:project}}:ಸ್ವಧೃಡೀಕೃತ ಬಳಕೆದಾರರು',
	'group-founder' => 'ಸಂಸ್ಥಾಪಕರು',
	'group-founder-member' => 'ಸಂಸ್ಥಾಪಕ', # Fuzzy
	'group-Staff-member' => 'ಸಿಬ್ಬಂದಿ',
	'group-inactive' => 'ನಿಷ್ಕ್ರಿಯ ಸದಸ್ಯರು',
	'group-inactive-member' => 'ನಿಷ್ಕ್ರಿಯ ಸದಸ್ಯ', # Fuzzy
	'grouppage-inactive' => '{{ns:project}}:ನಿಷ್ಕ್ರಿಯ ಸದಸ್ಯರು',
);

/** Korean (한국어)
 * @author Albamhandae
 * @author ChongDae
 * @author Devunt
 * @author Ficell
 * @author FriedC
 * @author ITurtle
 * @author Ilovesabbath
 * @author Klutzy
 * @author Kwj2772
 * @author ToePeu
 * @author Yknok29
 * @author 관인생략
 * @author 아라
 */
$messages['ko'] = array(
	'wikimediamessages-desc' => '위키미디어 전용 메시지',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=ko',
	'sitesupport' => '기부',
	'tooltip-n-sitesupport' => '지원을 기다립니다',
	'specialpages-group-contribution' => '기부 및 모금',
	'nstab-creator' => '작가',
	'nstab-institution' => '기관',
	'nstab-sequence' => '비디오 시퀀스',
	'nstab-timedtext' => '자막',
	'group-Ex_Administrator' => '전직 관리자',
	'group-Ex_Administrator-member' => '{{GENDER:$1|전직 관리자}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:전직 관리자',
	'group-Ex_Bureaucrat' => '전직 사무관',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|전직 사무관}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:전직 사무관',
	'group-Image-reviewer' => '그림 평론가',
	'group-Image-reviewer-member' => '{{GENDER:$1|그림 평론가}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:그림 평론가',
	'group-OTRS-member' => 'OTRS 사용자',
	'group-OTRS-member-member' => '{{GENDER:$1|OTRS 사용자}}',
	'grouppage-OTRS-member' => '{{ns:project}}:OTRS 사용자',
	'group-abusefilter' => '편집 필터 편집자',
	'group-abusefilter-member' => '{{GENDER:$1|편집 필터 편집자}}',
	'grouppage-abusefilter' => '{{ns:project}}:편집 필터 편집자',
	'group-accountcreator' => '계정 생성자',
	'group-accountcreator-member' => '{{GENDER:$1|계정 생성자}}',
	'grouppage-accountcreator' => '{{ns:project}}:계정 생성자',
	'group-arbcom' => '중재위원',
	'group-arbcom-member' => '{{GENDER:$1|중재위원}}',
	'grouppage-arbcom' => '{{ns:project}}:중재위원',
	'group-autopatrolled' => '검토 면제자',
	'group-autopatrolled-member' => '{{GENDER:$1|검토 면제자}}',
	'grouppage-autopatrolled' => '{{ns:project}}:검토 면제자',
	'group-autoreviewer' => '자동 검토원',
	'group-autoreviewer-member' => '{{GENDER:$1|자동 검토원}}',
	'grouppage-autoreviewer' => '{{ns:project}}:자동 검토원',
	'group-bigexport' => '대량 문서 익스포터',
	'group-bigexport-member' => '{{GENDER:$1|대량 문서 익스포터}}',
	'grouppage-bigexport' => '{{ns:project}}:대용량 문서 전파자',
	'group-botadmin' => '관리자 권한을 가진 봇',
	'group-botadmin-member' => '{{GENDER:$1|관리자 권한을 가진 봇}}',
	'grouppage-botadmin' => '{{ns:project}}:관리자 권한을 가진 봇',
	'group-confirmed' => '인증된 사용자',
	'group-confirmed-member' => '{{GENDER:$1|인증된 사용자}}',
	'grouppage-confirmed' => '{{ns:project}}:인증된 사용자',
	'group-editprotected' => '보호된 문서 편집자',
	'group-editprotected-member' => '{{GENDER:$1|보호된 문서 편집자}}',
	'grouppage-editprotected' => '{{ns:project}}:보호된 문서 편집자',
	'group-eliminator' => '삭제자',
	'group-eliminator-member' => '{{GENDER:$1|삭제자}}',
	'grouppage-eliminator' => '{{ns:project}}:삭제자',
	'group-filemover' => '파일 이동자',
	'group-filemover-member' => '{{GENDER:$1|파일 이동자}}',
	'grouppage-filemover' => '{{ns:project}}:파일 이동자',
	'group-flood' => '봇 사용자',
	'group-flood-member' => '{{GENDER:$1|봇 사용자}}',
	'grouppage-flood' => '{{ns:project}}:봇 사용자',
	'group-founder' => '설립자',
	'group-founder-member' => '{{GENDER:$1|설립자}}',
	'grouppage-founder' => '{{ns:project}}:설립자',
	'group-import' => '가져오는자',
	'group-import-member' => '{{GENDER:$1|가져오는자}}',
	'grouppage-import' => '{{ns:project}}:가져오는자',
	'group-interface_editor' => '인터페이스 편집자',
	'group-interface_editor-member' => '{{GENDER:$1|인터페이스 편집자}}',
	'grouppage-interface_editor' => '{{ns:project}}:인터페이스 편집자',
	'group-ipblock-exempt' => 'IP 차단 면제자',
	'group-ipblock-exempt-member' => '{{GENDER:$1|IP 차단 면제자}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP 차단 면제',
	'group-patroller' => '검토자',
	'group-patroller-member' => '{{GENDER:$1|검토자}}',
	'grouppage-patroller' => '{{ns:project}}:검토자',
	'group-researcher' => '연구원',
	'group-researcher-member' => '{{GENDER:$1|연구원}}',
	'grouppage-researcher' => '{{ns:project}}:연구원',
	'group-rollbacker' => '되돌리기 기능 사용자',
	'group-rollbacker-member' => '{{GENDER:$1|되돌리기 기능 사용자}}',
	'grouppage-rollbacker' => '{{ns:project}}:되돌리기 기능 사용자',
	'group-transwiki' => '트랜스위키 가져오는자',
	'group-transwiki-member' => '{{GENDER:$1|트랜스위키 가져오는자}}',
	'grouppage-transwiki' => '{{ns:project}}:트랜스위키 가져오는자',
	'group-trusted' => '신뢰할수 있는 사용자',
	'group-trusted-member' => '{{GENDER:$1|신뢰할수 있는 사용자}}',
	'grouppage-trusted' => '{{ns:project}}:신뢰할수 있는 사용자',
	'group-uploader' => '업로더',
	'group-uploader-member' => '{{GENDER:$1|업로더}}',
	'grouppage-uploader' => '{{ns:project}}:업로더',
	'group-Global_bot' => '글로벌 봇',
	'group-Global_bot-member' => '{{GENDER:$1|글로벌 봇}}',
	'group-Global_rollback' => '글로벌 롤배커',
	'group-Global_rollback-member' => '{{GENDER:$1|글로벌 롤배커}}',
	'group-Global_sysops' => '글로벌 관리자',
	'group-Global_sysops-member' => '{{GENDER:$1|글로벌 관리자}}',
	'group-Ombudsmen' => '옴부즈맨',
	'group-Ombudsmen-member' => '{{GENDER:$1|옴부즈맨}}',
	'group-Staff' => '임원',
	'group-Staff-member' => '{{GENDER:$1|임원}}',
	'group-editinterface' => '인터페이스 편집자',
	'group-editinterface-member' => '{{GENDER:$1|인터페이스 편집자}}',
	'group-steward' => '사무장',
	'group-steward-member' => '{{GENDER:$1|사무장}}',
	'grouppage-steward' => 'm:Stewards/ko',
	'group-sysadmin' => '시스템 관리자',
	'group-sysadmin-member' => '{{GENDER:$1|시스템 관리자}}',
	'group-API_High_Limit_Requestor' => 'API 고제한 요청자',
	'group-API_High_Limit_Requestor-member' => '{{GENDER:$1|API 고제한 요청자}}',
	'grouppage-API_High_Limit_Requestor' => 'm:API 고제한 요청자',
	'group-Indic_Bots' => '인도 봇',
	'group-Indic_Bots-member' => '{{GENDER:$1|인도 봇}}',
	'group-New_wikis_importer' => '새 위키 가져오는자',
	'group-New_wikis_importer-member' => '{{GENDER:$1|새 위키 가져오는자}}',
	'grouppage-New_wikis_importer' => 'm:새 위키 가져오는자',
	'group-global-ipblock-exempt' => '통합 IP 차단 면제자',
	'group-global-ipblock-exempt-member' => '{{GENDER:$1|통합 IP 차단 면제자}}',
	'grouppage-global-ipblock-exempt' => 'm:통합 IP 차단 면제자',
	'group-recursive-export' => '재귀 내보내는자',
	'group-recursive-export-member' => '{{GENDER:$1|재귀 내보내는자}}',
	'group-translationadmin' => '번역 관리자',
	'group-translationadmin-member' => '{{GENDER:$1|번역 관리자}}',
	'grouppage-translationadmin' => '{{ns:project}}:번역 관리자',
	'group-centralnoticeadmin' => '중앙 공지 관리자',
	'group-centralnoticeadmin-member' => '{{GENDER:$1|중앙 공지 관리자}}',
	'grouppage-centralnoticeadmin' => '{{ns:project}}:중앙 공지 관리자',
	'group-coder' => '코더',
	'group-coder-member' => '{{GENDER:$1|코더}}',
	'grouppage-coder' => '{{ns:project}}:코더',
	'group-inactive' => '활동하지 않는 사용자',
	'group-inactive-member' => '{{GENDER:$1|활동하지 않는 사용자}}',
	'grouppage-inactive' => '{{ns:project}}:활동하지 않는 사용자',
	'shared-repo-name-shared' => '위키미디어 공용',
	'wikimedia-copyright' => '내용은 <a href="//creativecommons.org/licenses/by-sa/3.0/deed.ko">크리에이티브 커먼즈 저작자표시-동일조건변경허락 라이선스</a>에 따라 사용할 수 있으며
추가적인 조건이 적용될 수 있습니다.
자세한 내용은 <a href="//wikimediafoundation.org/wiki/Terms_of_Use/ko">이용 약관</a>을 참고하십시오.',
	'wikidata-copyright' => '주요와 속성 이름공간의 모든 구조화된 데이터는 <a href="//creativecommons.org/publicdomain/zero/1.0/deed.ko" title="크리에이티브 커먼즈 CC0 라이선스의 정의">크리에이티브 커먼즈 CC0 라이선스</a>에 따라 사용할 수 있고
다른 이름공간의 내용은 <a href="//creativecommons.org/licenses/by-sa/3.0/deed.ko" title="크리에이티브 커먼즈 저작자표시-동일조건변경허락 라이선스의 정의">크리에이티브 커먼즈 저작자표시-동일조건변경허락 라이선스</a>에 따라 사용할 수 있으며
추가적인 조건이 적용될 수 있습니다.
자세한 내용은 <a href="//wikimediafoundation.org/wiki/Terms_of_Use/ko" title="위키미디어 재단 이용 약관">이용 약관</a>을 참고하십시오.',
	'wikidata-shortcopyrightwarning' => '"{{int:wikibase-save}}"을 클릭하면 [//wikimediafoundation.org/wiki/Terms_of_Use/ko 이용 약관]에 동의하고 영구히 [//creativecommons.org/publicdomain/zero/1.0/ CC0 라이선스]에 따라 기여를 공개하는 데 동의합니다.',
	'wikimedia-copyrightwarning' => '"{{int:savearticle}}" 버튼을 누름으로써, 당신은 [//wikimediafoundation.org/wiki/Terms_of_Use/ko 이용 약관]에 동의하며, 당신의 기여를 영구히 [//creativecommons.org/licenses/by-sa/3.0/legalcode 크리에이티브 커먼즈 저작자표시-동일조건변경허락 3.0 라이선스]와 [//www.gnu.org/copyleft/fdl.html GNU 자유 문서 사용 허가서](GFDL)로 배포하는 데 동의하게 됩니다.
크리에이티브 커먼즈 라이선스에 따라 하이퍼링크나 URL이 저작자표시의 수단으로 활용될 수 있음에도 동의합니다.',
	'wikibase-sitelinks-wikivoyage' => '이 항목으로 링크한 위키여행 문서',
	'cant-delete-main-page' => '대문 문서를 삭제하거나 옮길 수 없습니다.',
	'wikimedia-translationnotifications-signup-legal' => '이 정보를 위키미디어 재단을 제공하여 우리가 번역하거나 우리가 당신에게 관심이 있을 것으로 생각하는 위키백과의 움직임과 관련된 다른 주제와 관련하여 연락을 취할 수 있다는 데 동의합니다. 데이터가 미국에 저장하는 데 동의하고 [https://wikimediafoundation.org/wiki/Privacy_policy 개인정보 정책]의 적용을 받습니다.',
	'upload-more-photos-of-this-monument' => '이 기념물의 더 많은 사진 올리기',
	'extdist-branch-master' => '마스터 (최신 개발 버전)',
	'extdist-branch-REL1_21' => '1.21 (최신 안정 미디어위키)',
	'createacct-helpusername-url' => '{{ns:Project}}:사용자_이름_정책',
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(선택 방법을 알려주세요)]]',
	'createacct-captcha-help-url' => '{{ns:Project}}:계정 요청',
	'createacct-imgcaptcha-help' => '그림을 볼 수 없습니까? [[{{MediaWiki:createacct-captcha-help-url}}|계정을 요청할 수 있습니다]]',
	'wikimedia-developers' => '개발자',
);

/** Karachay-Balkar (къарачай-малкъар)
 * @author Iltever
 */
$messages['krc'] = array(
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=krc',
	'sitesupport' => 'Болушлукъ',
	'tooltip-n-sitesupport' => 'Бизге болушугъуз',
	'group-accountcreator' => 'Тергеу джазыуланы къурагъанла',
	'group-autopatrolled' => 'Автопатруль этилиниучюле',
	'group-bigexport' => 'Уллу экспортёрла',
	'group-confirmed' => 'Бегитилген къошулуучула',
	'group-flood' => 'Къошулуучула-ботла',
	'group-flood-member' => 'бот къошулуучула', # Fuzzy
	'group-import' => 'Импорт этиучюле',
	'group-import-member' => 'импортчу', # Fuzzy
	'group-ipblock-exempt' => 'IP-блоклаулагъа кирмегенле',
	'group-transwiki' => 'Викиле арасы импорт этиучюле',
	'group-transwiki-member' => 'Викиле арасы импорт этиучю', # Fuzzy
	'group-steward' => 'Стюардла',
	'shared-repo-name-shared' => 'Викигёзен',
	'wikimedia-copyright' => 'Текст, <a href="//creativecommons.org/licenses/by-sa/3.0/deed.ru">Creative Commons Attribution/Share-Alike лицензияны</a> шартларында бериледи, бир-бирде къошакъ шартла болургъа да боллукъдула. Толуракъ къарагъыз: <a href="//wikimediafoundation.org/wiki/Terms_of_Use/ru">Хайырланыу шартла</a>.',
	'wikimedia-copyrightwarning' => 'Кесигизни тюрлендириулеригизни сакъласагъыз, [//creativecommons.org/licenses/by-sa/3.0/deed.ru Creative Commons Attribution/Share-Alike 3.0] бла [//www.gnu.org/copyleft/fdl.html GFDL] лицензияланы шартларында къайтмаздан басмалаууна разы боласыз. Сиз тюрлениуле этген бетлени хайырланыуда сизге эм азы бла бу бетге гиперджибериу неда URL-ну юсю бла джибериу берилликди. Толуракъ хапар былайда алыгъыз: [//wikimediafoundation.org/wiki/Terms_of_Use/ru Хайырланыу шартла].', # Fuzzy
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(сайлауда болуш)]]',
	'createacct-imgcaptcha-help' => 'Суратны кёрелмеймисе? [[{{MediaWiki:createacct-captcha-help-url}}|Аккаунтха соруу бер]]',
);

/** Kinaray-a (Kinaray-a)
 * @author RonaldPanaligan
 */
$messages['krj'] = array(
	'sitesupport' => 'Donasyon',
);

/** Colognian (Ripoarisch)
 * @author Merlissimo
 * @author Purodha
 * @author Απεργός
 */
$messages['ksh'] = array(
	'wikimediamessages-desc' => 'Systemnohrechte un Tex för de Wikimedia Shtefftung ier Wikis.',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=ksh',
	'sitesupport' => 'Spende',
	'tooltip-n-sitesupport' => 'Donn uns Ungerstötze!',
	'specialpages-group-contribution' => 'Spendebeidrääsch',
	'nstab-creator' => 'Urhävver',
	'nstab-institution' => 'Enreeschdong',
	'nstab-sequence' => 'Belderfolje',
	'nstab-timedtext' => 'Ongertitele met Zigge',
	'group-Ex_Administrator' => 'vörmohlijje Wiki-Köbesse',
	'group-Ex_Administrator-member' => '{{GENDER:$1|vörmohlijje Wiki-Köbes}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:vörmohlijje Wiki-Köbesse',
	'group-Ex_Bureaucrat' => 'vörmohlijje Bürrokraate',
	'group-Ex_Bureaucrat-member' => 'vörmohlijje {{GENDER:$1|Bürrokrad|Bürrokraatėn|Bürrokrad|Bürrokraatėn|Bürrokrad}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:vörmohlijje Bürrokrate',
	'group-Image-reviewer' => 'Belderprööfer',
	'group-Image-reviewer-member' => '{{GENDER:$1|Belderprööfer|Belderprööferėn|Belderprööfer|Belderprööferėn|Belderprööfer}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:Belderprööfer',
	'group-OTRS-member' => 'Metmaacher beim ORTS',
	'group-OTRS-member-member' => '{{GENDER:$1|Metmaacher beim ORTS|Metmaacherėn beim ORTS|Metmaacher beim ORTS|Metmaacherėn beim ORTS|Metmaacher beim ORTS}}',
	'grouppage-OTRS-member' => '{{ns:project}}:Metmaacher beim ORTS',
	'group-abusefilter' => 'Meßbruchsfelter-Baaß',
	'group-abusefilter-member' => '{{GENDER:$1|Baaß vum Meßbruchsfelter}}',
	'grouppage-abusefilter' => '{{ns:project}}:Meßbruchsfelter-Baaß',
	'group-accountcreator' => 'Metmaacher-Maachere',
	'group-accountcreator-member' => '{{GENDER:$1|Metmaacher-Maacher|Metmaacher-Maacherėn|Metmaacher-Maacher|Metmaacher-Maacherėn|Metmaacher-Maacher}}',
	'grouppage-accountcreator' => '{{ns:project}}:Metmaacher-Maacher',
	'group-arbcom' => 'Schiedslück',
	'group-arbcom-member' => '{{GENDER:$1|Schiedsmann|Schiedsmannfrau|Schiedsmann|Schiedsmannfrau|Schiedsmann}}',
	'grouppage-arbcom' => '{{ns:project}}:Schiedslück',
	'group-autopatrolled' => 'Automatesch Nohkiker',
	'group-autopatrolled-member' => 'Sellver-{{GENDER:$1|Nohloorer|Nohloorerėn|Nohloorer|Nohloorerėn|Nohloorer}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Sellver-Nohloorer',
	'group-autoreviewer' => 'Automattesch Nohkiker',
	'group-autoreviewer-member' => '{{GENDER:$1|Automattesch Nohkiker|Automattesch Nohkikerėn|Automattesch Nohkiker|Automattesch Nohkikerėn|Automattesch Nohkiker}}',
	'grouppage-autoreviewer' => '{{ns:project}}:{{MediaWiki:Group-autoreviewer}}',
	'group-bigexport' => 'Jroß-Expotöre',
	'group-bigexport-member' => 'Jrooß-{{GENDER:$1|Emportör|Emportörėn|Emportör|Emportörėn|Emportör}}',
	'grouppage-bigexport' => '{{ns:project}}:Jroß-Expotöre',
	'group-botadmin' => 'Bot-Projramme met Köbes-Rääschte',
	'group-botadmin-member' => '{{GENDER:$1|Bot-Projramm met Köbes-Rääschte}}',
	'grouppage-botadmin' => '{{ns:project}}:Bot-Projramme met Köbes-Rääschte',
	'group-confirmed' => 'Beshtäteschte Metmaacher',
	'group-confirmed-member' => 'beshtäteschte {{GENDER:$1|Metmaacher|Metmaacherėn|Metmaacher|Metmaacherėn|Metmaacher}}',
	'grouppage-confirmed' => '{{ns:project}}:{{int:group-confirmed}}',
	'group-editprotected' => 'Schriever op jeschözde Sigge',
	'group-editprotected-member' => '{{GENDER:$1|Schriever|Schrieverėn|Schriever|Schrieverėn|Schriever}} met Zohjreff op jeschözde Sigge',
	'grouppage-editprotected' => '{{ns:project}}:Schriever op jeschözde Sigge',
	'group-eliminator' => 'Sigge-Fottschmießer',
	'group-eliminator-member' => 'Sigge-{{GENDER:$1|Fottschmießer|Fottschmießerėn|Fottschmießer|Fottschmießerėn|Fottschmießer}}',
	'grouppage-eliminator' => '{{ns:project}}:Sigge-Fottschmießer',
	'group-filemover' => 'Dateie-Ömdäufer',
	'group-filemover-member' => '{{GENDER:$1|Dateie-Ömdäufer|Dateie-Ömdäuferėn|Dateie-Ömdäufer|Dateie-Ömdäuferėn|Dateie-Ömdäufer}}',
	'grouppage-filemover' => '{{ns:project}}:Dateie-Ömdäufer',
	'group-flood' => 'Metmaacher, di Bot wääde künne',
	'group-flood-member' => '{{GENDER:$1|Metmaacher, dä|Metmaacherėn, di|Metmaacher, dä|Metmaacherėn, di|Metmaacher, dä}} ene Bot wääde kann',
	'grouppage-flood' => '{{ns:project}}:Metmaacher, di Bot wääde künne',
	'group-founder' => 'Jröndere',
	'group-founder-member' => '{{GENDER:$1|Jrönder|Jrönderėn|Jrönder|Jrönderėn|Jrönder}}',
	'grouppage-founder' => '{{ns:project}}:Jrönder',
	'group-import' => 'Emportöre',
	'group-import-member' => '{{GENDER:$1|Emportör|Emportörėn|Emportör|Emportörėn|Emportör}}',
	'grouppage-import' => '{{ns:project}}:Emportör',
	'group-interface_editor' => 'Engerfäjßbeärbeider',
	'group-interface_editor-member' => '{{GENDER:$1|Engerfäjßbeärbeider|Engerfäjßbeärbeiderėn|Engerfäjßbeärbeider|Engerfäjßbeärbeiderėn|Engerfäjßbeärbeider}}',
	'grouppage-interface_editor' => '{{ns:project}}:Engerfäjßbeärbeider',
	'group-ipblock-exempt' => 'IP-Jruppe-Sperre-Ußnahme',
	'group-ipblock-exempt-member' => '{{GENDER:$1|IP-Jruppe-Sperre-Ußnahm}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP-Jruppe-Sperre-Ußnahm',
	'group-patroller' => 'Patrullje',
	'group-patroller-member' => '{{GENDER:$1|Patrullör|Patrullören|Patrullör|Patrullören|Patrullör}}',
	'grouppage-patroller' => '{{ns:project}}:Patrullje',
	'group-researcher' => 'Ongersöhker',
	'group-researcher-member' => '{{GENDER:$1|Ongersöhker|Ongersöhkerėn|Ongersöhker|Ongersöhkerėn|Ongersöhker}}',
	'grouppage-researcher' => '{{ns:project}}:Ongersöhker',
	'group-rollbacker' => 'Zeröcknemmere',
	'group-rollbacker-member' => '{{GENDER:$1|Zeröcknämmer|Zeröcknämmerėn|Zeröcknämmer|Zeröcknämmerėn|Zeröcknämmer}}',
	'grouppage-rollbacker' => '{{ns:project}}:Zeröcknemmer',
	'group-transwiki' => 'Transwiki-Emportöre',
	'group-transwiki-member' => '{{GENDER:$1|Transwiki-Empotör|Transwiki-Empotörėn|Transwiki-Empotör|Transwiki-Empotörėn|Transwiki-Empotör}}',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki-Empotör',
	'group-trusted' => '{{int:Group-trusted-member}}',
	'group-trusted-member' => '{{GENDER:$1|Metmaacher|Metmaacherėn|Metmaacher|Metmaacherėn|Metmaacher}} met Vertroue',
	'grouppage-trusted' => '{{ns:project}}:{{int:group-trusted}}',
	'group-Global_bot' => 'Bots för all Wikis',
	'group-Global_bot-member' => '{{GENDER:$1|Bot för all Wikis}}',
	'grouppage-Global_bot' => 'm:Global bot/ksh',
	'group-Global_rollback' => 'Zeröcknämmere för all Wikis',
	'group-Global_rollback-member' => '{{GENDER:$1|Zeröcknämmer|Zeröcknämmerėn|Zeröcknämmer|Zeröcknämmerėn|Zeröcknämmer}} för all Wikis',
	'grouppage-Global_rollback' => 'm:Global rollback/ksh',
	'group-Global_sysops' => 'Jlobale Wiki-Köbesse',
	'group-Global_sysops-member' => '{{GENDER:$1|.jjlobale Wiki-Köbes}}',
	'grouppage-Global_sysops' => 'm:Global sysops/ksh',
	'group-Ombudsmen' => 'Vermeddeler',
	'group-Ombudsmen-member' => '{{GENDER:$1|Vermeddeler|Vermeddelerėn|Vermeddeler|Vermeddelerėn|Vermeddeler}}',
	'grouppage-Ombudsmen' => 'm:Ombudsman commission/ksh',
	'group-Staff' => 'Päsonaal',
	'group-Staff-member' => 'Päsonaal',
	'group-editinterface' => 'Engerfäjßbeärbeider',
	'group-editinterface-member' => '{{GENDER:$1|Engerfäjßbeärbeider|Engerfäjßbeärbeiderėn|Engerfäjßbeärbeider|Engerfäjßbeärbeiderėn|Engerfäjßbeärbeide}}',
	'group-steward' => 'Stewards',
	'group-steward-member' => '{{GENDER:$1|Steward}}',
	'grouppage-steward' => 'm:Stewards/ksh',
	'group-sysadmin' => 'Wiki-Köbesse',
	'group-sysadmin-member' => '{{GENDER:$1|Wiki-Köbes}}',
	'group-Indic_Bots' => 'Endesche Bots',
	'group-Indic_Bots-member' => '{{GENDER:$1|Endesche Bot}}',
	'group-New_wikis_importer' => 'Neu Wiki Empottöre',
	'group-New_wikis_importer-member' => '{{GENDER:$1|Neu Wiki Emportör|Neu Wiki Emportörėn|Neu Wiki Emportör|Neu Wiki Emportörėn|Neu Wiki Emportör}}',
	'group-translationadmin' => 'Övversäzongsverwalldere',
	'group-translationadmin-member' => '{{GENDER:$1Övversäzongsverwallder|Övversäzongsverwallderėn|Övversäzongsverwallder|Övversäzongsverwallderėn|Övversäzongsverwallder}}',
	'grouppage-translationadmin' => '{{ns:project}}:Övversäzongsverwalldere',
	'group-coder' => 'Projrammierer',
	'group-coder-member' => '{{GENDER:$1|Projrammierer|Projrammiererėn|Projrammierer|Projrammiererėn|Projrammierer}}',
	'grouppage-coder' => '{{ns:project}}:Projrammierer',
	'group-inactive' => 'Metmaacher, die nix donn',
	'group-inactive-member' => '{{GENDER:$1|Metmaacher, dä nix deiht|Metmaacheren, di nix deiht|Metmaacher, dä nix deiht|Metmaacheren, di nix deiht|Metmaacher, dä nix deiht}}',
	'grouppage-inactive' => '{{ns:project}}:{{int:group-inactive}}',
	'shared-repo-name-shared' => '<i lang="en">Wikimedia Commons</i>',
	'wikimedia-copyright' => 'Dä Tex heh kann jebruch wääde unger dä <a href="//creativecommons.org/licenses/by-sa/3.0/deed.de">Lizänz: <i lang="en">Creative Commons</i>, der Name moß jenannt wääde un Wiggerjävve zoh dersellve Bedengunge es zohjelohße</a>. Zohsäzlejje Beshtemmunge künne jälte. Loor op dä Sigg övver de <a href="//wikimediafoundation.org/wiki/Nutzungsbedingungen">Lizänz_Beshtemmunge</a>, doh shtonn mieh Einzelheite.',
	'wikimedia-copyrightwarning' => 'Endämm De jet avspeichere deihs, jiß De Dinge Beidraach unger de [//creativecommons.org/licenses/by-sa/3.0/deed.de Lizänz <i lang="en">Creative Commons</i>, der Name moß jenannt wääde un Wiggerjävve zoh dersellve Bedengunge es zohjelohße, Version 3.0] un de [//www.gnu.org/copyleft/fdl.html GFDL] frei, un shtemms zoh, dat ander Dir et Lob doför jävve, zoh_winnischß övver ene Lengk op udder en URL vun däm Atikel, woh De draan am schriive bes. Loor op dä Sigg övver de [//wikimediafoundation.org/wiki/Nutzungsbedingungen Lizänz_Beshtemmunge], doh shtonn mieh Einzelheite.',
	'cant-delete-main-page' => 'Do kanns de Houpsigg nit ömdäufe udder fott schmieße.',
	'wikimedia-translationnotifications-signup-legal' => 'Do bes enverstande domet, dat de Wikkimeedija Schteftong met Der en ene Kumtak trädde darref wääje Ding Övversäzonge udder ander Saache, di met dä Wikkimeedia-Bewääjong ze donn han, woh mer vun meint, dat di för Desch interßant sin künnte. Do bes enverschtande, dat Daate övver Desch en der Vereineschte Schtaate vun Ammärrika faßjehallde wääde künne un onger der Schteftong ier [https://wikimediafoundation.org/wiki/Privacy_policy Rääjelle för pevaate Daate] schtonn. Wann De domet nit enverschtande bes, donn heh nix enjävve.',
	'upload-more-photos-of-this-monument' => 'Donn mieh Fotos vun heh däm Dängkmohl huhlaade',
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(Hölp mem Ußsöhke)]]',
);

/** Kurdish (Latin script) (Kurdî (latînî)‎)
 * @author George Animal
 * @author Ghybu
 * @author Gomada
 */
$messages['ku-latn'] = array(
	'sitesupport' => 'Bexş bike',
	'group-Global_bot' => "Bot'ên global",
	'group-Global_bot-member' => "bot'ê global", # Fuzzy
	'wikimedia-copyright' => 'Nivîsar di bin lîsansa <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike License</a> de derbasdar e;
heke tiştên din werin xwestin dikarin lê bên zêdekirin.
Ji bo hûragahiyan li <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Mercên Bikaranînê</a> binêre.',
	'wikimedia-copyrightwarning' => 'Bi tikandina bişkoka "{{int:savearticle}}", tu [//wikimediafoundation.org/wiki/Terms_of_Use Mercên bikaranînê] dipejirînî, û tu bi awayekî bêveger parvekirina beşdariyên xwe yên di bin [//en.wikipedia.org/wiki/Wikipedia:Text_of_Creative_Commons_Attribution-ShareAlike_3.0_Unported_License Lîsansa CC-BY-SA 3.0] û [//en.wikipedia.org/wiki/Wikipedia:Text_of_the_GNU_Free_Documentation_License GFDL] de dipejirînî.
Tu pê pabend dibe ku her girêdanek an jî URL\'yek di bin lîsansa Creative Commonsê de ye.',
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(alîkariya hilbijartinê bike)]]',
	'createacct-imgcaptcha-help' => 'Nikarî wêne bibînî? [[{{MediaWiki:createacct-captcha-help-url}}|Hesabekî bixwaze]]',
);

/** Cornish (kernowek)
 * @author Kw-Moon
 * @author Malafaya
 * @author Nicky.ker
 * @author Nrowe
 */
$messages['kw'] = array(
	'sitesupport' => 'Riansow',
	'tooltip-n-sitesupport' => 'Skoodhyewgh ni',
	'group-sysadmin' => 'Menystroryon an system',
	'wikimedia-copyright' => 'Kavadow yw an tekst yn-dann <a href="//creativecommons.org/licenses/by-sa/3.0/">Leshyans Attribution/Share-Alike Creative Commons</a>; termynyow keworansel a alsa bos omvyskys. Gwelewgh an <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Termynyow Devnydh</a> rag manylyon.',
	'createacct-helpusername-url' => '{{ns:Project}}:Polici henwyn devnydhyer',
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(gweres dhymm dewis)]]',
	'createacct-captcha-help-url' => '{{ns:Project}}:Govyn akont',
	'createacct-imgcaptcha-help' => 'A ny welowgh an imach? [[{{MediaWiki:createacct-captcha-help-url}}|Govynnewgh akont]]',
);

/** Kirghiz (Кыргызча)
 * @author Chorobek
 * @author Growingup
 */
$messages['ky'] = array(
	'sitesupport' => 'Колдоо',
	'tooltip-n-sitesupport' => 'Бизди колдоңуз',
	'specialpages-group-contribution' => 'Каражат чогултуу',
	'nstab-creator' => 'Автор',
	'group-Staff' => 'Эмгектештер',
	'group-coder' => 'Прогрммалоочулар',
);

/** Latin (Latina)
 * @author UV
 * @author לערי ריינהארט
 */
$messages['la'] = array(
	'sitesupport' => 'Donationes',
	'group-rollbacker' => 'Revertores',
	'group-rollbacker-member' => '{{GENDER:$1|revertor}}',
	'grouppage-rollbacker' => '{{ns:project}}:Revertores',
	'shared-repo-name-shared' => 'Vicimedia Communia',
);

/** Ladino (Ladino)
 * @author Universal Life
 * @author לערי ריינהארט
 */
$messages['lad'] = array(
	'sitesupport' => 'Donaciones',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Kaffi
 * @author Les Meloures
 * @author Robby
 * @author לערי ריינהארט
 */
$messages['lb'] = array(
	'wikimediamessages-desc' => 'Spezifesch Systemmessage fir Wikimedia',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=lb',
	'sitesupport' => 'Maacht en Don',
	'tooltip-n-sitesupport' => 'Ënnerstëtzt eis',
	'specialpages-group-contribution' => 'Donen/Quêteur',
	'nstab-creator' => 'Createur',
	'nstab-institution' => 'Institutioun',
	'nstab-sequence' => 'Sequenz',
	'nstab-timedtext' => 'TimedText',
	'group-Ex_Administrator' => 'Fréier Administrateuren',
	'group-Ex_Administrator-member' => '{{GENDER:$1|Fréieren Administrateur|Fréier Administratrice}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}: Fréier Administrateuren',
	'group-Ex_Bureaucrat' => 'Fréier Bürokraten',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|Fréiere Bürokrat|Fréier Bürokratin}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}: Fréier Bürokraten',
	'group-Image-reviewer' => 'Bild-Iwwerpréifer',
	'group-Image-reviewer-member' => '{{GENDER:$1|Bild-Iwwerpréifer}}',
	'grouppage-Image-reviewer' => '{{ns:project}}: Bild-Iwwerpréifer',
	'group-OTRS-member' => 'OTRS Memberen',
	'group-OTRS-member-member' => '{{GENDER:$1|OTRS Member}}',
	'grouppage-OTRS-member' => '{{ns:project}}:OTRS Memberen',
	'group-abusefilter' => 'Editeure vu Mëssbrauchsfilteren',
	'group-abusefilter-member' => 'Editeur vum Mëssbrauchsfilter', # Fuzzy
	'grouppage-abusefilter' => '{{ns:project}}:Editeure vu Mëssbrauchsfilteren',
	'group-accountcreator' => 'Benotzer déi Benotzerkonten uleeën däerfen',
	'group-accountcreator-member' => '{{GENDER:$1|Benotzer dee Benotzerkonten uleeën däerf}}',
	'grouppage-accountcreator' => '{{ns:project}}:Benotzer déi Benotzerkonten uleeën däerfen',
	'group-arbcom' => "Membere vum Comité d'arbitrage",
	'group-arbcom-member' => "{{GENDER:$1|Member vum Comité d'Arbitrage}}",
	'grouppage-arbcom' => "{{ns:project}}: Membere Vum Comité d'arbitrage",
	'group-autopatrolled' => 'Automatesch Kontrolleren',
	'group-autopatrolled-member' => '{{GENDER:$1|automatesche Kontroller|automatesch Kontrollesch}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Automatesch Préifer',
	'group-autoreviewer' => 'Benotzer déi automatesch nokucken',
	'group-autoreviewer-member' => 'Benotzer deen automatesch nokuckt', # Fuzzy
	'grouppage-autoreviewer' => '{{ns:project}}:Automatesch Nopréifer',
	'group-bigexport' => 'Grouss Exportateuren',
	'group-bigexport-member' => 'groussen Exportateur', # Fuzzy
	'grouppage-bigexport' => '{{ns:project}}:Grouss Exportateuren',
	'group-botadmin' => 'Botte mat Adminstrateurs-Rechter',
	'group-botadmin-member' => '{{GENDER:$1|Botte mat Administrateurs-Rechter}}',
	'grouppage-botadmin' => '{{ns:project}}: Botte mat Administrateurs-Rechter',
	'group-confirmed' => 'Confirméiert Benotzer',
	'group-confirmed-member' => '{{GENDER:$1|Confirméierte Benotzer}}',
	'grouppage-confirmed' => '{{ns:project}}:Confirméiert Benotzer',
	'group-editprotected' => 'editeure vu gespaarte Säiten',
	'group-editprotected-member' => 'Editeur vu gespaarte Säiten', # Fuzzy
	'grouppage-editprotected' => '{{ns:project}}: Editeure vu gespaarte Säiten',
	'group-eliminator' => 'Eliminateuren',
	'group-eliminator-member' => '{{GENDER:$1|Eliminateur}}',
	'grouppage-eliminator' => '{{ns:project}}:Eliminateur',
	'group-filemover' => 'Fichiersréckeler',
	'group-filemover-member' => 'Fichiersréckeler', # Fuzzy
	'grouppage-filemover' => '{{ns:project}}: Fichiersréckeler',
	'group-flood' => 'Benotzer mam Botstatus',
	'group-flood-member' => '{{GENDER:$1|Benotzer mam Botstatus}}',
	'grouppage-flood' => '{{ns:project}}: Benotzer mam Botstatus',
	'group-founder' => 'Grënner',
	'group-founder-member' => '{{GENDER:$1|Grënner}}',
	'grouppage-founder' => '{{ns:project}}:Grënner',
	'group-import' => 'Importateuren',
	'group-import-member' => '{{GENDER:$1|Importateur|Importatrice}}',
	'grouppage-import' => '{{ns:project}}:Importateuren',
	'group-interface_editor' => 'Interface-Editeuren',
	'group-interface_editor-member' => 'Interface-Editeur', # Fuzzy
	'grouppage-interface_editor' => '{{ns:project}}:Interface-Editeuren',
	'group-ipblock-exempt' => 'Ausnahme vun IP-Spären',
	'group-ipblock-exempt-member' => '{{GENDER:$1|Ausnam vun der IP-Spär}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Ausnahm vun der IP-Spär',
	'group-patroller' => 'Kontrolleren',
	'group-patroller-member' => '{{GENDER:$1|Kontroller|Kontrollesch}}',
	'group-researcher' => 'Nosicher',
	'group-researcher-member' => 'Nosicher', # Fuzzy
	'grouppage-researcher' => '{{ns:project}}: Nosicher',
	'group-rollbacker' => 'Zrécksetzer',
	'group-rollbacker-member' => 'Zrécksetzer', # Fuzzy
	'grouppage-rollbacker' => '{{ns:project}}:Zrécksetzer',
	'group-transwiki' => 'Transwiki-Importateuren',
	'group-transwiki-member' => 'Transwiki-Importateur', # Fuzzy
	'grouppage-transwiki' => '{{ns:project}}:Transwiki-Importateuren',
	'group-trusted' => 'Erfuere Benotzer',
	'group-trusted-member' => '{{GENDER:$1|erfuerene Benotzer}}',
	'grouppage-trusted' => '{{ns:project}}:Erfuere Benotzer',
	'group-Global_bot' => 'Global Botten',
	'group-Global_bot-member' => '{{GENDER:$1|Globale Bot}}',
	'grouppage-Global_bot' => 'm:Global bot',
	'group-Global_rollback' => 'Global Zrécksetzer',
	'group-Global_rollback-member' => '{{GENDER:$1|Globalen Zrécksetzer}}',
	'group-Global_sysops' => 'Global Administrateuren',
	'group-Global_sysops-member' => '{{GENDER:$1|Globalen Administrateur|Global Administratrice}}',
	'group-Ombudsmen' => 'Ombudsmänner',
	'group-Ombudsmen-member' => '{{GENDER:$1|Ombudsmann|Ombudsfra}}',
	'group-Staff' => 'Mataarbechter',
	'group-Staff-member' => 'Mataarbechter',
	'grouppage-Staff' => 'Foundation:Personal',
	'group-editinterface' => 'Interface änneren',
	'group-editinterface-member' => '{{GENDER:$1|Benotzer déi den Interface ännere kënnen}}',
	'group-steward' => 'Stewarden',
	'group-steward-member' => '{{GENDER:$1|Steward}}',
	'grouppage-steward' => '{{ns:project}}:Stewarden',
	'group-sysadmin' => 'Systemadministrateuren',
	'group-sysadmin-member' => '{{GENDER:$1|System-Administrateur|System-Administratrice}}',
	'grouppage-sysadmin' => 'm:System Administrateuren',
	'group-Indic_Bots' => 'Botte fir indesch Sproochen',
	'group-global-ipblock-exempt' => 'Ausnahme vu globalen IP-Spären',
	'group-translationadmin' => 'Iwwersetzungsadministrateuren',
	'group-translationadmin-member' => '{{GENDER:$1|Iwwersetzungsadministrateur|Iwwersetzungsadministratrice}}',
	'grouppage-translationadmin' => '{{ns:project}}:Iwwersetzungs-Administrateuren',
	'group-coder' => 'Programméierer',
	'group-coder-member' => '{{GENDER:$1|Programméierer}}',
	'group-inactive' => 'Benotzer déi net aktiv sinn',
	'group-inactive-member' => '{{GENDER:$1|net aktive Benotzer}}',
	'grouppage-inactive' => '{{ns:project}}:Net aktiv Benotzer',
	'wikimedia-copyright' => 'Den Text ass disponibel ënnert der <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike Lizenz</a>; zousätzlech Bedingunge kënnen applicabel sinn.
Kuckt <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Benotzungsbedingunge</a> fir méi Detailer.',
	'wikimedia-copyrightwarning' => 'Wann Dir op de(n) "{{int:savearticle}}" Knäppche klickt, sidd Dir mat de [//wikimediafoundation.org/wiki/Terms_of_Use Benotzungsbedingungen] averstan an Dir sidd och onwidderruflech averstan fir Äre Beitrag ënnert der [//creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike Lizenz 3.0] an der [//www.gnu.org/copyleft/fdl.html GFDL] fräizeginn.
Dir sidd averstan datt en Hyperlink oder eng URL duer geet fir Äert Matschaffen ënnert der Creative Commons Lizenz ze honoréieren.',
	'wikibase-sitelinks-wikivoyage' => 'Wikivoyage-Säiten déi mat dësem Element verlinkt sinn',
	'cant-delete-main-page' => "D'Haaptsäit ka weder geläscht nach geréckelt ginn.",
	'wikimedia-translationnotifications-signup-legal' => "An deem Dir dës Informatiounen un d'Wikimedia Foundation gitt sidd Dir domat d'accord datt mir Iech a Verbindung mat der Iwwersetzung vun anere Sujete vum Wikimedia-Mouvement kontaktéiere kënnen, wa mir mengen de Sujet kéint Iech interesséieren. Dir sidd d'accord datt Är Donnéeën an de Vereenegte Staate vun Amerika gespäichert ginn an datt si eisen  [https://wikimediafoundation.org/wiki/Privacy_policy Dateschutzbestëmmungen] ënnerleien.",
	'upload-more-photos-of-this-monument' => 'Méi Fotoe fir dëst Monument eroplueden',
	'extdist-branch-master' => 'master (lescht Entwécklungs-Versioun)',
	'extdist-branch-REL1_21' => '1.21 (lescht stabil MediaWiki-Versioun)',
	'createacct-helpusername-url' => '{{ns:Project}}:Benotzernumm Richtlinn',
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(hëlleft mir beim Eraussichen)]]',
	'createacct-captcha-help-url' => '{{ns:Project}}:E Benotzerkont ufroen',
	'createacct-imgcaptcha-help' => "Kënnt Dir d'Bild net gesinn? [[{{MediaWiki:createacct-captcha-help-url}}|Frot ee Benotzerkont un]]",
);

/** Lingua Franca Nova (Lingua Franca Nova)
 * @author Cgboeree
 */
$messages['lfn'] = array(
	'sitesupport' => 'Donas',
	'tooltip-n-sitesupport' => 'suporta nos',
);

/** Ganda (Luganda)
 * @author Kizito
 */
$messages['lg'] = array(
	'sitesupport' => 'Okutonera wiki',
	'tooltip-n-sitesupport' => "Nyiga wano ob'oyagala wiki okugiwa obuyambi obw'ensimbi",
);

/** Limburgish (Limburgs)
 * @author Matthias
 * @author Ooswesthoesbes
 * @author Pahles
 * @author לערי ריינהארט
 */
$messages['li'] = array(
	'wikimediamessages-desc' => 'Wikimedia-specifieke berichte',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=li',
	'sitesupport' => 'Donaties',
	'tooltip-n-sitesupport' => 'Óngersteun ós financieel',
	'specialpages-group-contribution' => 'Gifte/Fónswèrvingsaksie',
	'nstab-creator' => 'Sjriever',
	'nstab-institution' => 'Insjtèlling',
	'nstab-sequence' => 'Volgorde',
	'nstab-timedtext' => 'Óngertitel',
	'group-Ex_Administrator' => 'Aaj admins',
	'group-Ex_Administrator-member' => '{{GENDER:$1|aajen admin}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Behierders',
	'group-Ex_Bureaucrat' => 'Aaj bureaukraote',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|aaje bureaucraat}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Bureaucrate',
	'group-Image-reviewer' => 'aafbeildingscontroleurs',
	'group-Image-reviewer-member' => 'aafbeildingscontroleur',
	'grouppage-Image-reviewer' => '{{ns:project}}:Aafbeildingscontroleurs',
	'group-OTRS-member' => 'OTRS-lede',
	'group-OTRS-member-member' => 'OTRS-lid',
	'grouppage-OTRS-member' => '{{ns:project}}:OTRS-lede',
	'group-abusefilter' => 'misbroekfilterredaktäörs',
	'group-abusefilter-member' => '{{GENDER:$1|misbroekfilterredaktäör}}',
	'grouppage-abusefilter' => '{{ns:project}}:Misbroekfilterredaktäöre',
	'group-accountcreator' => 'Gebroekeraanmakers',
	'group-accountcreator-member' => '{{GENDER:$1|gebroekersaanmaker}}',
	'grouppage-accountcreator' => '{{ns:project}}:Gebroekeraanmakers',
	'group-arbcom' => 'Arbitraasjkommisjelede',
	'group-arbcom-member' => 'arbitraasjkommisjelid',
	'grouppage-arbcom' => '{{ns:project}}:Arbitraasjkommisjelede',
	'group-autopatrolled' => 'Autopatrolleerders',
	'group-autopatrolled-member' => 'autopatroller',
	'grouppage-autopatrolled' => '{{ns:project}}:Autopatrollers',
	'group-autoreviewer' => 'Autoeindredactie',
	'group-autoreviewer-member' => 'autoeindredactie',
	'grouppage-autoreviewer' => '{{ns:project}}:Autoeindredactie',
	'group-bigexport' => 'groete exportäörs',
	'group-bigexport-member' => 'groete exportäör',
	'grouppage-bigexport' => '{{ns:project}}:Groete exportäörs',
	'group-botadmin' => 'Bots mit behierdersrichte',
	'group-botadmin-member' => '{{GENDER:$1|bot mit behierdersrèchte}}',
	'grouppage-botadmin' => '{{ns:project}}:Bots mit sysoprèchte',
	'group-confirmed' => 'Gekonférmeerde gebroekers',
	'group-confirmed-member' => '{{GENDER:$1|gekonférmeerde gebroeker}}',
	'grouppage-confirmed' => '{{ns:project}}:Gekonférmeerde gebroekers',
	'group-editprotected' => 'Beveiligingsómzeilers',
	'group-editprotected-member' => '{{GENDER:$1|beveiligingsómzeiler}}',
	'grouppage-editprotected' => '{{ns:project}}:Beveiligingsómzeilers',
	'group-eliminator' => 'Óprumer',
	'group-eliminator-member' => 'óprumer',
	'grouppage-eliminator' => '{{ns:project}}:Óprumer',
	'group-filemover' => 'Bestandjsverplaatsers',
	'group-filemover-member' => 'bestandjsverplaatser',
	'grouppage-filemover' => '{{ns:project}}:Bestandjsverplaatsers',
	'group-flood' => 'Bots',
	'group-flood-member' => '{{GENDER:$1|bot}}',
	'grouppage-flood' => '{{ns:project}}:Bots',
	'group-founder' => 'Gróndlègkers',
	'group-founder-member' => '{{GENDER:$1|gróndlègker}}',
	'grouppage-founder' => '{{ns:project}}:Gróndlègkers',
	'group-import' => 'Importäörs',
	'group-import-member' => 'Importäör',
	'grouppage-import' => '{{ns:project}}:Importäörs',
	'group-interface_editor' => 'interfacebewerkers',
	'group-interface_editor-member' => '{{GENDER:$1|interfacebewerker}}',
	'grouppage-interface_editor' => '{{ns:project}}:Interfacebewerkers',
	'group-ipblock-exempt' => 'Oetgezunjerde van IP-adresblokkades',
	'group-ipblock-exempt-member' => 'Oetgezunjerde van IP-adresblokkades',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Oetgezunjerde van IP-adresblokkades',
	'group-patroller' => 'Controleurs',
	'group-patroller-member' => '{{GENDER:$1|controleur}}',
	'group-researcher' => 'óngerzeukers',
	'group-researcher-member' => 'óngerzeuker',
	'grouppage-researcher' => '{{ns:project}}:Óngerzeukers',
	'group-rollbacker' => 'Trökdriejers',
	'group-rollbacker-member' => 'Trökdriejer',
	'grouppage-rollbacker' => '{{ns:project}}:Trökdriejers',
	'group-transwiki' => 'Transwikiimportäörs',
	'group-transwiki-member' => 'Transwikiimportäör',
	'grouppage-transwiki' => '{{ns:project}}:Transwikiimportäörs',
	'group-trusted' => 'vertroewdje gebroekers',
	'group-trusted-member' => 'vertroewdje gebroeker',
	'grouppage-trusted' => '{{ns:project}}:Vertroewdje gebroekers',
	'group-Global_bot' => 'Globale bots',
	'group-Global_bot-member' => 'Globale bot',
	'group-Global_rollback' => 'Globale trökdriejers',
	'group-Global_rollback-member' => 'Globale trökdriejer',
	'group-Global_sysops' => 'Wikiwiej admins',
	'group-Global_sysops-member' => 'wikiwiejen admin',
	'group-Ombudsmen' => 'Ombudsmanne',
	'group-Ombudsmen-member' => 'Ombudsman',
	'group-Staff' => 'Sjtaaf',
	'group-Staff-member' => 'Sjtaaflid',
	'group-editinterface' => 'Gebroekersinterfacebewirkers',
	'group-editinterface-member' => 'Gebroekersinterfacebewirker',
	'group-steward' => 'Stewards',
	'group-steward-member' => 'Steward',
	'grouppage-steward' => '{{ns:project}}:Stewards',
	'group-sysadmin' => 'Systeemwèrkers',
	'group-sysadmin-member' => 'Systeemwèrker',
	'group-translationadmin' => 'Vertaalbehieërders',
	'group-translationadmin-member' => '{{GENDER:$1|vertaalbehieërder}}',
	'grouppage-translationadmin' => '{{ns:project}}:Vertaalbehieërders',
	'group-coder' => 'Pregrammäörs',
	'group-coder-member' => 'Pregrammäör',
	'group-inactive' => 'Neet-actieve gebroekers',
	'group-inactive-member' => 'Neet-actieve gebroeker',
	'grouppage-inactive' => '{{ns:project}}:Neet-actieve gebroekers',
	'wikimedia-copyright' => 'De teks is besjikbaar ónger de <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Naomsvermelding/Geliek Deile</a> licentie.
\'t Is mäögelik dat aanvöllende veurwaarde van toepassing zeen.
Betrach de <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Algemein Veurwaarde</a> veur mie informatie.',
	'wikimedia-copyrightwarning' => 'Door dees bewirking op te sjlaon mit "{{int:savearticle}}", geis doe akkoord mit de [//wikimediafoundation.org/wiki/Gebruiksvoorwaarden gebroeks veurwaerd] en \'t ónherropelik vriegaeve van dien biedrage ónger de [//creativecommons.org/licenses/by-sa/3.0/ Creative Commons Noamsvermelding/Geliek Deile licentie] en de [//www.gnu.org/copyleft/fdl.html GFDL].
Doe geis demit akkoord door hergebroekers minimaal geneump te waere via \'ne hyperlink of URL nao de pagina woe-aans diech biedreugs.',
	'cant-delete-main-page' => "Doe kans 't veurblaad neet wösje of verplaatsje.",
	'wikimedia-translationnotifications-signup-legal' => "Door dees gegaeves besjikbaar te stèlle ane Wikimedia Foundation, geufs se ós toestömming óm kóntak mit dich op te naeme euver vertalinge en anger óngerwirpe gerelateerdj ane Wikimediabewaeging wovan weer dinke det ze dien interesse höbbe. Doe stöms in mit 't opslaon van dien gegaeves inne VS en det dien gegaeves ónger ós [https://wikimediafoundation.org/wiki/Privacy_policy privacybeleid] valle.",
);

/** Ligure (Ligure)
 * @author ZeneizeForesto
 */
$messages['lij'] = array(
	'sitesupport' => 'Donasioin',
	'tooltip-n-sitesupport' => 'Agiûttine',
);

/** lumbaart (lumbaart)
 * @author Dakrismeno
 */
$messages['lmo'] = array(
	'wikimediamessages-desc' => 'Messagg specifegh de Wikimedia',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=lmo',
	'sitesupport' => 'Dunazión',
	'tooltip-n-sitesupport' => 'Dàss una man',
	'group-abusefilter' => 'Mudificadur di filter anti-abüs',
	'group-accountcreator' => 'Creadur di cünt',
	'group-arbcom' => "Member del cumitaa d'arbitragg",
	'group-autopatrolled' => 'Autopatrollers',
	'group-autoreviewer' => 'Revisur autumategh',
	'group-bigexport' => 'Gran espurtadur',
	'group-confirmed' => 'Druvadur cunfermaa',
	'group-flood' => 'Druvadur de Bot',
	'group-founder' => 'Fundadur',
	'group-import' => 'Impurtadur',
	'group-ipblock-exempt' => "Esenzión dal bloch de l'IP",
	'group-patroller' => 'Gent de rónda',
);

/** Lingala (lingála)
 * @author Moyogo
 */
$messages['ln'] = array(
	'sitesupport' => 'Lisungi na misɔlɔ',
);

/** Lao (ລາວ)
 * @author Tuinui
 */
$messages['lo'] = array(
	'wikimediamessages-desc' => 'ຂໍ້ຄວາມສະເພາະ ວິກິພີເດຍ',
	'sitesupport' => 'ບໍລິຈາກ',
	'tooltip-n-sitesupport' => 'ສະໜັບສະໜຸນພວກເຮົາ',
	'group-Staff' => 'ພະນັກງານ',
	'group-Staff-member' => 'ພະນັກງານ',
);

/** Lozi (Silozi)
 * @author Ooswesthoesbes
 * @author SF-Language
 */
$messages['loz'] = array(
	'sitesupport' => 'Adonetarina',
	'tooltip-n-sitesupport' => 'Sepotisize',
);

/** Lithuanian (lietuvių)
 * @author Eitvys200
 * @author Homo
 * @author Hugo.arg
 * @author Matasg
 * @author Vpovilaitis
 */
$messages['lt'] = array(
	'wikimediamessages-desc' => 'Vikimedijos specialieji pranešimai',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=lt',
	'sitesupport' => 'Parama',
	'tooltip-n-sitesupport' => 'Palaikymas',
	'specialpages-group-contribution' => 'Įnašas/Remėjas',
	'nstab-creator' => 'Kūrėjas',
	'nstab-institution' => 'Įstaiga',
	'nstab-sequence' => 'Seka',
	'group-abusefilter' => 'Piktnaudžiavimo filtrų redaktoriai',
	'group-abusefilter-member' => 'piktnaudžiavimo filtrų redaktorius', # Fuzzy
	'grouppage-abusefilter' => '{{ns:project}}:Piktnaudžiavimo filtrų redaktorius',
	'group-accountcreator' => 'Paskyrų kūrėjai',
	'group-accountcreator-member' => 'sąskaitų kūrėjai', # Fuzzy
	'grouppage-accountcreator' => '{{ns:project}}:Sąskaitų kūrėjai',
	'group-arbcom' => 'Arbitražo komiteto nariai',
	'group-arbcom-member' => 'Arbitražo komiteto narys', # Fuzzy
	'grouppage-arbcom' => '{{ns:project}}:Arbitražo komiteto nariai',
	'group-autopatrolled' => 'Autopatruliai',
	'group-autopatrolled-member' => 'autopatrulis', # Fuzzy
	'grouppage-autopatrolled' => '{{ns:project}}:Autopatruliai',
	'group-autoreviewer' => 'Autoperžiūrėtojai',
	'group-autoreviewer-member' => 'autoperžiūrėtojas', # Fuzzy
	'grouppage-autoreviewer' => '{{ns:project}}:Autoperžiūrėtojai',
	'group-bigexport' => 'Didieji eksportuotojai',
	'group-bigexport-member' => 'didieji eksportuotojai', # Fuzzy
	'grouppage-bigexport' => '{{ns:project}}:Didieji eksportuotojai',
	'group-botadmin' => 'Robotai su administratorių teisėmis',
	'group-confirmed' => 'Patvirtinti naudotojai',
	'group-confirmed-member' => '{{GENDER:$1|patvirtintas naudotojas|patvirtinta naudotoja}}',
	'grouppage-confirmed' => '{{ns:project}}:Patvirtinti naudotojai',
	'group-editprotected' => 'Apsaugotų puslapių redaktoriai',
	'group-editprotected-member' => 'Apsaugotų puslapių redaktorius', # Fuzzy
	'group-filemover' => 'Failų pervadintojai',
	'group-flood' => 'Botų šeimininkai',
	'group-flood-member' => 'Robotas', # Fuzzy
	'group-founder' => 'Įkūrėjai',
	'group-founder-member' => 'įkūrėjai', # Fuzzy
	'grouppage-founder' => '{{ns:project}}:Įkūrėjai',
	'group-import' => 'Importuotojai',
	'group-import-member' => 'įkėlėjas', # Fuzzy
	'grouppage-import' => '{{ns:project}}:Importuotojai',
	'group-interface_editor' => 'Sąsajos redaktoriai',
	'group-ipblock-exempt' => 'IP blokavimo išimtys',
	'group-ipblock-exempt-member' => 'atleistasis nuo IP blokavimo', # Fuzzy
	'grouppage-ipblock-exempt' => '{{ns:project}}:Atleistasis nuo IP blokavimo',
	'group-patroller' => 'Patruliai',
	'group-researcher' => 'Tyrėjai',
	'group-researcher-member' => 'tyrėjas', # Fuzzy
	'group-rollbacker' => 'Atmetėjai',
	'group-rollbacker-member' => 'atmesti', # Fuzzy
	'grouppage-rollbacker' => '{{ns:project}}:Atmetėjai',
	'group-transwiki' => 'Transwiki įkėlėjai',
	'group-transwiki-member' => 'transwiki įkėlėjai', # Fuzzy
	'grouppage-transwiki' => '{{ns:project}}:Transwiki importuotojai',
	'group-trusted' => 'Patikėtiniai',
	'group-trusted-member' => '{{GENDER:$1|patvirtintas naudotojas|patvirtinta naudotoja}}',
	'group-Global_bot' => 'Globalūs botai',
	'group-Global_bot-member' => 'visuotinis botas', # Fuzzy
	'group-Global_rollback' => 'Visuotiniai atmetėjai',
	'group-Global_rollback-member' => 'visuotinis atmetėjas', # Fuzzy
	'group-Global_sysops' => 'Visuotiniai administrotoriai',
	'group-Global_sysops-member' => 'visuotinis administratorius', # Fuzzy
	'group-Ombudsmen' => 'Ombudsmenai',
	'group-Ombudsmen-member' => 'ombudsmenas', # Fuzzy
	'group-Staff' => 'Darbuotojai',
	'group-Staff-member' => 'Darbuotojas',
	'group-editinterface' => 'Sąsajos redaktoriai',
	'group-editinterface-member' => 'sąsajos redaktorius', # Fuzzy
	'group-steward' => 'Ūkvedžiai',
	'group-steward-member' => 'ūkvedys', # Fuzzy
	'group-sysadmin' => 'Sistemos administratoriai',
	'group-sysadmin-member' => 'sistemos administratorius', # Fuzzy
	'group-coder' => 'Koduotojai',
	'group-coder-member' => 'koduotojas', # Fuzzy
	'group-inactive' => 'Neaktyvūs naudotojai',
	'group-inactive-member' => '{{GENDER:$1|neaktyvus naudotojas|neaktyvi naudotoja}}',
	'grouppage-inactive' => '{{ns:project}}:Neaktyvūs naudotojai',
	'wikimedia-copyright' => 'Turinys pateikiamas pagal <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike licenciją</a>;
gali galioti kitos nuostatos.
Norėdami sužinoti daugiau, žiūrėkite <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Naudojimo sąlygas</a>.',
	'wikimedia-copyrightwarning' => 'Išsaugodami savo pakeitimą, jūs neatšaukiamai sutinkate, kad jūsų indėlis būtų platinamas pagal [//creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike 3.0] ir [//www.gnu.org/copyleft/fdl.html GFDL] licencijas. Taip pat jūs sutinkate, kad straipsnio, kuriame jūs padarėte keitimų, istorijoje būtų nurodytas jūsų naudotojo vardas arba IP adresas.
Norėdami sužinoti daugiau, žiūrėkite [//wikimediafoundation.org/wiki/Terms_of_Use Naudojimo sąlygas]',
);

/** Latgalian (latgaļu)
 * @author Dark Eagle
 */
$messages['ltg'] = array(
	'sitesupport' => 'Pazīdi',
);

/** Mizo (Mizo ţawng)
 * @author RMizo
 */
$messages['lus'] = array(
	'wikimediamessages-desc' => 'Wikipedia thuthawn bîkte',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=lus',
	'sitesupport' => 'Vẹhbúr',
	'tooltip-n-sitesupport' => 'Min chhawmdäwl ve rawh le',
	'specialpages-group-contribution' => 'Thawhlawm/Vehbúr khawn',
	'nstab-creator' => 'Buatsaihtu',
	'nstab-institution' => 'Páwl',
	'nstab-sequence' => 'Inzuidàn',
	'nstab-timedtext' => 'TimedText',
	'group-translationadmin' => 'Lehlinna roreltute',
);

/** Latvian (latviešu)
 * @author GreenZeb
 * @author Papuass
 * @author Xil
 * @author Yyy
 */
$messages['lv'] = array(
	'wikimediamessages-desc' => 'Wikimedia raksturīgi paziņojumi',
	'sitesupport' => 'Ziedojumi',
	'tooltip-n-sitesupport' => 'Atbalsti mūs',
	'group-Ex_Administrator' => 'Bijušie administratori',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Bijušie administratori',
	'group-Ex_Bureaucrat' => 'Bijušie birokrāti',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Bijušie birokrāti',
	'group-accountcreator' => 'Kontu veidotāji',
	'group-autopatrolled' => 'Automātiskie pārbaudītāji',
	'grouppage-autopatrolled' => '{{ns:project}}:Automātiskie pārbaudītāji',
	'group-botadmin' => 'Boti ar administratora tiesībām',
	'group-confirmed' => 'Apstiprinātie lietotāji',
	'grouppage-confirmed' => '{{ns:project}}:Apstiprinātie lietotāji',
	'group-editprotected' => 'Aizsargāto lapu labotāji',
	'grouppage-editprotected' => '{{ns:project}}:Aizsargāto lapu labotāji',
	'group-filemover' => 'Failu pārvietotāji',
	'grouppage-filemover' => '{{ns:project}}:Failu pārvietotāji',
	'group-flood' => 'Botu lietotāji',
	'group-founder' => 'Dibinātāji',
	'group-founder-member' => 'dibinātājs', # Fuzzy
	'group-import' => 'Importētāji',
	'group-import-member' => 'importētājs', # Fuzzy
	'grouppage-import' => '{{ns:project}}:Importētāji',
	'group-transwiki' => 'Transviki importētāji',
	'group-trusted' => 'Uzticamie lietotāji',
	'group-Global_bot' => 'Globālie boti',
	'group-Staff' => 'Personāls',
	'group-steward' => 'Sistēmas pārvaldnieki',
	'grouppage-steward' => '{{ns:project}}:Sistēmas pārvaldnieki',
	'group-sysadmin' => 'Sistēmas administratori',
	'group-coder' => 'Kodētāji',
	'group-inactive' => 'Neaktīvi lietotāji',
	'group-inactive-member' => 'neaktīvs lietotājs', # Fuzzy
	'grouppage-inactive' => '{{ns:project}}:Neaktīvi lietotāji',
	'wikimedia-copyright' => 'Teksts ir pieejams saskaņā ar <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike licenci</a>;
var pastāvēt papildus ierobežojumi.
Plašākai informācijai skatīt <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Lietošanas noteikumus</a>.',
	'wikimedia-copyrightwarning' => 'Saglabājot izmaiņas, jūs piekrītat savu ieguldījumu licencēt saskaņā ar [//creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike 3.0] un [//www.gnu.org/copyleft/fdl.html GFDL] licenci.
Jūs piekrītat, ka satura izmantotāji uz jūsu darbu atsauksies vismaz ar saiti uz lapu, kurā jūs veicat izmaiņas.
Plašākai informācijai skatīt [//wikimediafoundation.org/wiki/Terms_of_Use Lietošanas noteikumus].', # Fuzzy
);

/** Literary Chinese (文言)
 * @author Justincheng12345
 * @author Yanteng3
 */
$messages['lzh'] = array(
	'wikimediamessages-desc' => '維基媒體特集',
	'sitesupport' => '捐助集',
	'tooltip-n-sitesupport' => '濟資財、施續命、傳美皓',
	'nstab-creator' => '立者',
	'wikimedia-copyright' => '凡我維基之文，悉為<a href="//creativecommons.org/licenses/by-sa/3.0/">共享創意授權</a>。翻印增刪，皆須引據，並同道為之。然條款繁多，不一而足。
請閱<a href="//wikimediafoundation.org/wiki/Terms_of_Use">全文</a>，以得其詳。',
	'wikimedia-copyrightwarning' => '《維基大典》，奉《[http://creativecommons.org/licenses/by-sa/3.0/ 共享創意]》、《革奴自由文檔》授權以行，增修刪改，皆無異議。惟所取用，務請引據。',
);

/** Lazuri (Lazuri)
 * @author Bombola
 */
$messages['lzz'] = array(
	'tooltip-n-sitesupport' => 'Mxuci momçit',
);

/** Maithili (मैथिली)
 * @author Ggajendra
 */
$messages['mai'] = array(
	'tooltip-n-sitesupport' => 'हमरा सभकेँ सहयोग करू',
);

/** Basa Banyumasan (Basa Banyumasan)
 * @author לערי ריינהארט
 */
$messages['map-bms'] = array(
	'sitesupport' => 'Sumbang dana',
);

/** Moksha (мокшень)
 * @author Kranch
 * @author Numulunj pilgae
 */
$messages['mdf'] = array(
	'sitesupport' => 'Лезкс максома',
	'tooltip-n-sitesupport' => 'Макст тейнек лезкс',
	'group-Staff' => 'Персонал',
	'group-Staff-member' => 'Персоналста ломань',
);

/** Malagasy (Malagasy)
 * @author Jagwar
 */
$messages['mg'] = array(
	'wikimediamessages-desc' => "Hafatra manokana ho an'ny Wikimedia",
	'sitesupport' => 'Fanomezana',
	'tooltip-n-sitesupport' => 'Ampio izahay',
	'specialpages-group-contribution' => "Fandraisan'anjara/Fitetezana vola",
	'group-abusefilter' => "Mpanova ''Abuse filter''",
	'group-abusefilter-member' => 'Mpanova filtre antiabus', # Fuzzy
	'grouppage-abusefilter' => '{{ns:project}}:mpanova filtre antiabus',
	'group-accountcreator' => 'Mpanokatra kaonty',
	'group-accountcreator-member' => 'Mpamokatra kaonty', # Fuzzy
	'grouppage-accountcreator' => '{{ns:project}}:Mpamokatra kaonty',
	'group-arbcom-member' => "mpikambana ao amin'ny kaomitian-arbitatra", # Fuzzy
	'grouppage-arbcom' => "{{ns:project}}:Mpikambana ao amin'ny kaomitian-arbitatra",
	'group-autopatrolled' => 'Mpijery mandeha ho azy',
	'group-autopatrolled-member' => 'Mpitsidika rôbô', # Fuzzy
	'grouppage-autopatrolled' => '{{ns:project}}:Rôbô Mpijery',
	'group-autoreviewer' => 'Mpamaky',
	'group-autoreviewer-member' => 'Mpamaky (rôbô)', # Fuzzy
	'grouppage-autoreviewer' => '{{ns:project}}:Mpamaky mande hoazy',
	'group-bigexport' => 'Mpamoaka be',
	'group-bigexport-member' => 'mpamoaka be', # Fuzzy
	'grouppage-bigexport' => '{{ns:project}}:Mpamoaka be',
	'group-confirmed' => 'Mpikambana voamarina',
	'group-confirmed-member' => 'Mpikambana voamarina', # Fuzzy
	'grouppage-confirmed' => '{{ns:project}}:Mpikambana voamarina',
	'group-editprotected' => 'Mpanova pejy voaaro',
	'group-editprotected-member' => 'mpanova pejy voaaro', # Fuzzy
	'grouppage-editprotected' => '{{ns:project}}:Mpanova pejy voaaro',
	'group-filemover' => 'Mpanova anaran-drakitra',
	'group-filemover-member' => 'mpanova anaran-drakitra', # Fuzzy
	'grouppage-filemover' => '{{ns:project}}:Mpanova anaran-drakitra',
	'group-flood' => 'Mpanao rôbô',
	'group-flood-member' => 'mpanao rôbô', # Fuzzy
	'grouppage-flood' => '{{ns:project}}:mpanao rôbô',
	'group-founder' => 'Mpamorina',
	'group-founder-member' => 'Mpamorina', # Fuzzy
	'grouppage-founder' => '{{ns:project}}:Mpamorina',
	'group-import' => 'Mpanafatra',
	'group-import-member' => 'Mpanafatra', # Fuzzy
	'grouppage-import' => '{{ns:project}}:Mpampiditra',
	'group-interface_editor' => 'Mpanova ny rindrankajy',
	'group-interface_editor-member' => 'mpanova ny rindrankajy', # Fuzzy
	'grouppage-interface_editor' => '{{ns:project}}:Mpanova ny rindrankajy',
	'group-ipblock-exempt' => "Tsy afaka sakanana amin'ny adiresy IP",
	'group-ipblock-exempt-member' => "Mpikambana tsy afaka sakanana amin'ny IP-ny", # Fuzzy
	'grouppage-ipblock-exempt' => "{{ns:project}}:Tsy afaka sakanana amin'ny IP",
	'group-patroller' => 'Mpitsidika',
	'group-patroller-member' => 'Mpitsidika', # Fuzzy
	'group-researcher' => 'Mpikaroka',
	'group-researcher-member' => 'mpikaroka', # Fuzzy
	'grouppage-researcher' => '{{ns:project}}:mpikaroka',
	'group-rollbacker' => 'Mpamafa',
	'group-rollbacker-member' => 'Mpamafa', # Fuzzy
	'grouppage-rollbacker' => '{{ns:project}}:mpamafa',
	'group-transwiki' => 'Mpanafatra transwiki',
	'group-transwiki-member' => 'Mpanafatra transwiki', # Fuzzy
	'grouppage-transwiki' => '{{ns:project}}:Mpampiditra transwiki',
	'group-trusted' => 'Mpikambana azo antoka',
	'group-trusted-member' => 'mpikambana azo antoka', # Fuzzy
	'grouppage-trusted' => '{{ns:project}}:Mpikambana azo antoka',
	'group-Global_bot' => "Rôbô amin'ny ankapobe ny wiki",
	'group-Global_bot-member' => 'rôbô global', # Fuzzy
	'group-Global_rollback' => "Mpamafa amin'ny ankapobe ny wiki",
	'group-Global_rollback-member' => 'mpamafa global', # Fuzzy
	'group-Global_sysops' => 'Mpandrindra global',
	'group-Global_sysops-member' => 'mpandrindra global', # Fuzzy
	'group-Ombudsmen' => 'Mediatora',
	'group-Ombudsmen-member' => 'Mediatora', # Fuzzy
	'group-Staff' => 'Staff',
	'group-Staff-member' => "mpikamban'ny Staff",
	'group-editinterface' => 'Mpanova ny interface',
	'group-editinterface-member' => 'mpanova ny interface', # Fuzzy
	'group-steward' => 'Steward',
	'group-steward-member' => 'Mpiambona (steward)', # Fuzzy
	'group-sysadmin' => 'Mpandrindra ny sistema',
	'group-sysadmin-member' => 'Mpandrindra ny Sistema', # Fuzzy
	'group-coder' => 'Mpanakaody',
	'group-coder-member' => 'mpanakaody', # Fuzzy
	'group-inactive' => 'mpikambana tsy miasa',
	'group-inactive-member' => 'mpikambana tsy miasa', # Fuzzy
	'grouppage-inactive' => '{{ns:project}}:Mpikambana tsy manova',
	'wikimedia-copyright' => 'Azo ampiasaina araka ny fepetra apetraky ny lisansa <a href="//creativecommons.org/licenses/by-sa/3.0/deed.fr">Creative Commons Attribution/Share-Alike </a> ; Mety misy ny fepetra fanampiny mihatra. Jereo <a href="//wikimediafoundation.org/wiki/Fepetram-pampiasana">fepetram-pampiasana</a> ho an\'ny antsipirihany.',
);

/** Eastern Mari (олык марий)
 * @author Amdf
 */
$messages['mhr'] = array(
	'sitesupport' => 'Надыр',
);

/** Maori (Māori)
 */
$messages['mi'] = array(
	'sitesupport' => 'Koha',
);

/** Minangkabau (Baso Minangkabau)
 * @author Iwan Novirion
 */
$messages['min'] = array(
	'wikimediamessages-desc' => 'Pasan spesifik Wikimedia',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=min',
	'sitesupport' => 'Manyumbang',
	'tooltip-n-sitesupport' => 'Dukuang kami',
	'specialpages-group-contribution' => 'Kontribusi/Panggalang dana',
	'nstab-creator' => 'Pambuek',
	'nstab-institution' => 'Lembaga',
	'nstab-sequence' => 'Urutan',
	'nstab-timedtext' => 'TimedText',
	'group-Ex_Administrator' => 'Mantan panguruih',
	'group-Ex_Administrator-member' => '{{GENDER:$1|mantan panguruih}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Mantan panguruih',
	'group-Ex_Bureaucrat' => 'Mantan birokrat',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|mantan birokrat}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Mantan birokrat',
	'group-Image-reviewer' => 'Paninjau gambar',
	'group-Image-reviewer-member' => '{{GENDER:$1|paninjau gambar}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:Paninjau gambar',
	'group-OTRS-member' => 'Anggota OTRS',
	'group-OTRS-member-member' => '{{GENDER:$1|anggota OTRS}}',
	'grouppage-OTRS-member' => '{{ns:project}}:Anggota OTRS',
	'group-abusefilter' => 'Panyuntiang sariang panyalahgunoan',
	'group-abusefilter-member' => '{{GENDER:$1|panyuntiang sariang panyalahgunoan}}',
	'grouppage-abusefilter' => '{{ns:project}}:Panyuntiang sariang panyalahgunoan',
	'group-accountcreator' => 'Pambuek akun',
	'group-accountcreator-member' => '{{GENDER:$1|pambuek akun}}',
	'grouppage-accountcreator' => '{{ns:project}}:Pambuek akun',
	'group-arbcom' => 'Anggota komite arbitrasi',
	'group-arbcom-member' => '{{GENDER:$1|anggota komite arbitrasi}}',
	'grouppage-arbcom' => '{{ns:project}}:Anggota komite arbitrasi',
	'group-autopatrolled' => 'Pamatroli otomatih',
	'group-autopatrolled-member' => '{{GENDER:$1|pamatroli otomatih}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Pamatroli otomatih',
	'group-autoreviewer' => 'Paninjau otomatih',
	'group-autoreviewer-member' => '{{GENDER:$1|paninjau otomatih}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Paninjau otomatih',
	'group-bigexport' => 'Pangekspor gadang',
	'group-bigexport-member' => '{{GENDER:$1|pangekspor gadang}}',
	'grouppage-bigexport' => '{{ns:project}}:Pangekspor gadang',
	'group-botadmin' => 'Bot jo hak panguruih',
	'group-botadmin-member' => '{{GENDER:$1|bot jo hak panguruih}}',
	'grouppage-botadmin' => '{{ns:project}}:Bot jo hak panguruih',
	'group-confirmed' => 'Pangguno takonfirmasi',
	'group-confirmed-member' => '{{GENDER:$1|pangguno takonfirmasi}}',
	'grouppage-confirmed' => '{{ns:project}}:Pangguno takonfirmasi',
	'group-editprotected' => 'Panyuntiang laman talinduang',
	'group-editprotected-member' => '{{GENDER:$1|panyuntiang laman talinduang}}',
	'grouppage-editprotected' => '{{ns:project}}:Panyuntiang laman talinduang',
	'group-eliminator' => 'Panghapuih',
	'group-eliminator-member' => '{{GENDER:$1|panghapuih}}',
	'grouppage-eliminator' => '{{ns:project}}:Panghapuih',
	'group-filemover' => 'Pamindah berkas',
	'group-filemover-member' => '{{GENDER:$1|pamindah berkas}}',
	'grouppage-filemover' => '{{ns:project}}:Pamindah berkas',
	'group-flood' => 'Pangguno bot',
	'group-flood-member' => '{{GENDER:$1|pangguno bot}}',
	'grouppage-flood' => '{{ns:project}}:Pangguno bot',
	'group-founder' => 'Pandiri',
	'group-founder-member' => '{{GENDER:$1|pandiri}}',
	'grouppage-founder' => '{{ns:project}}:Pandiri',
	'group-import' => 'Importir',
	'group-import-member' => '{{GENDER:$1|importir}}',
	'grouppage-import' => '{{ns:project}}:Importir',
	'group-interface_editor' => 'Panyuntiang antarmuko',
	'group-interface_editor-member' => '{{GENDER:$1|panyuntiang antarmuko}}',
	'grouppage-interface_editor' => '{{ns:project}}:Panyuntiang antarmuko',
	'group-ipblock-exempt' => 'Pangacualian sakek IP',
	'group-ipblock-exempt-member' => '{{GENDER:$1|pangacualian sakek IP}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Pangacualian sakek IP',
	'group-patroller' => 'Pamatroli',
	'group-patroller-member' => '{{GENDER:$1|pamatroli}}',
	'grouppage-patroller' => '{{ns:project}}:Pamatroli',
	'group-researcher' => 'Panaliti',
	'group-researcher-member' => '{{GENDER:$1|panaliti}}',
	'grouppage-researcher' => '{{ns:project}}:Panaliti',
	'group-rollbacker' => 'Pangambali',
	'group-rollbacker-member' => '{{GENDER:$1|pangambali}}',
	'grouppage-rollbacker' => '{{ns:project}}:Pangambali',
	'group-transwiki' => 'Pangimpor transwiki',
	'group-transwiki-member' => '{{GENDER:$1|pangimpor transwiki}}',
	'grouppage-transwiki' => '{{ns:project}}:Pangimpor transwiki',
	'group-trusted' => 'Pambina',
	'group-trusted-member' => '{{GENDER:$1|pambina}}',
	'grouppage-trusted' => '{{ns:project}}:Pambina',
	'group-Global_bot' => 'Bot global',
	'group-Global_bot-member' => '{{GENDER:$1|bot global}}',
	'grouppage-Global_bot' => 'm:Bot global',
	'group-Global_rollback' => 'Pangambali global',
	'group-Global_rollback-member' => '{{GENDER:$1|pangambali global}}',
	'grouppage-Global_rollback' => 'm:Pangambali global',
	'group-Global_sysops' => 'Panguruih global',
	'group-Global_sysops-member' => '{{GENDER:$1|panguruih global}}',
	'grouppage-Global_sysops' => 'm:Panguruih global',
	'group-Ombudsmen' => 'Anggota ombudsman',
	'group-Ombudsmen-member' => '{{GENDER:$1|anggota ombudsman}}',
	'grouppage-Ombudsmen' => 'm:Komisi Ombudsman',
	'group-Staff' => 'Staf',
	'group-Staff-member' => '{{GENDER:$1|staf}}',
	'grouppage-Staff' => 'Yayasan:Staf',
	'group-editinterface' => 'Panyuntiang antarmuko',
	'group-editinterface-member' => '{{GENDER:$1|panyuntiang antarmuko}}',
	'grouppage-editinterface' => 'm:Panyuntiang antarmuko',
	'group-steward' => 'Steward',
	'group-steward-member' => '{{GENDER:$1|steward}}',
	'grouppage-steward' => 'm:Steward/min',
	'group-sysadmin' => 'Admin sistim',
	'group-sysadmin-member' => '{{GENDER:$1|admin sistim}}',
	'grouppage-sysadmin' => 'm:Admin sistem',
	'group-API_High_Limit_Requestor' => 'API high limit requestor',
	'group-API_High_Limit_Requestor-member' => '{{GENDER:$1|API high limit requestor}}',
	'grouppage-API_High_Limit_Requestor' => 'm:API high limit requestors',
	'group-Indic_Bots' => 'Bot baso India',
	'group-Indic_Bots-member' => '{{GENDER:$1|bot india}}',
	'grouppage-Indic_Bots' => 'm:Bot indic',
	'group-New_wikis_importer' => 'Pangimpor wiki baru',
	'group-New_wikis_importer-member' => '{{GENDER:$1|pangimpor wiki baru}}',
	'grouppage-New_wikis_importer' => 'm:Pengimpor wiki baru',
	'group-global-ipblock-exempt' => 'Pangacualian sakek IP global',
	'group-global-ipblock-exempt-member' => '{{GENDER:$1|pangacualian sakek IP global}}',
	'grouppage-global-ipblock-exempt' => 'm:Global IP block exemptions/min',
	'group-recursive-export' => 'Eksportir rekursif',
	'group-recursive-export-member' => '{{GENDER:$1|eksportir rekursif}}',
	'grouppage-recursive-export' => 'm:Ekspor rekursif',
	'group-translationadmin' => 'Panguruih tajamahan',
	'group-translationadmin-member' => '{{GENDER:$1|panguruih tajamahan}}',
	'grouppage-translationadmin' => '{{ns:project}}:Panguruih tajamahan',
	'group-centralnoticeadmin' => 'Admin pusek pangumuman',
	'group-centralnoticeadmin-member' => '{{GENDER:$1|Admin pusek pangumuman}}',
	'grouppage-centralnoticeadmin' => '{{ns:project}}:Admin pusek pangumuman',
	'group-coder' => 'Programer',
	'group-coder-member' => '{{GENDER:$1|programer}}',
	'grouppage-coder' => '{{ns:project}}:Pengkode',
	'group-inactive' => 'Pangguno indak aktip',
	'group-inactive-member' => '{{GENDER:$1|pangguno indak aktip}}',
	'grouppage-inactive' => '{{ns:project}}:Pangguno indak aktip',
	'shared-repo-name-shared' => 'Wikimedia Commons',
	'wikimedia-copyright' => 'Teks tasadio jo <a href="//creativecommons.org/licenses/by-sa/3.0/deed.id">Lisensi Atribusi-BabagiSarupo Creative Commons</a>; katantuan tambahan mungkin balaku. Caliak <a href="//wikimediafoundation.org/wiki/Terms_of_use-Summary/min">Katantuan Panggunoan</a> untuak labiah jaleh.',
	'wikidata-copyright' => 'Sado struktur data dari ruangnamo utamo jo properti tasadio jo <a href="//creativecommons.org/publicdomain/zero/1.0/deed.id" title="Definisi dari lisensi Creative Commons CC-nol">Lisensi Dedikasi Domain Publik CC-nol Creative Commons</a>;
teks dalam ruangnamo lain tasadio jo <a href="//creativecommons.org/licenses/by-sa/3.0/deed.id" title="Definisi dari lisensi Creative Commons Attribusi-BabagiSarupo">Lisensi Atribusi-BabagiSarupo Creative Commons</a>; 
katantuan tambahan mungkin balaku. 
Caliak <a href="//wikimediafoundation.org/wiki/Terms_of_use-Summary/min">Katantuan Panggunoan</a> untuak labiah jaleh.',
	'wikidata-shortcopyrightwarning' => 'Jo manakan tombol "{{int:savearticle}}", Sanak satuju pado [//wikimediafoundation.org/wiki/Terms_of_use-Summary/min Katantuan Panggunoan], dan malapeh jariah Sanak jo [//creativecommons.org/publicdomain/zero/1.0/deed.id lisensi CC-nol].',
	'wikimedia-copyrightwarning' => 'Jo manakan tombol "{{int:savearticle}}", Sanak satuju pado [//wikimediafoundation.org/wiki/Terms_of_use-Summary/min Katantuan Panggunoan], dan malapeh jariah Sanak jo [//id.wikipedia.org/wiki/Wikipedia:Teks_Lisensi_Creative_Commons_Atribusi-BerbagiSerupa_3.0 Lisensi Atribusi-BabagiSarupo Creative Commons] jo [//id.wikipedia.org/wiki/Wikipedia:Lisensi_Dokumentasi_Bebas_GNU GFDL]. Sanak satuju dek pambarian pautan atau URL marupoan atribusi nan cukuik di bawah lisensi Creative Commons.',
	'cant-delete-main-page' => 'Sanak indak dapek mangahapuih atau mamindahan palanta.',
	'wikimedia-translationnotifications-signup-legal' => 'Jo mangagiah informasi ko ka Yayasan Wikimedia, Sanak satuju baso kami dapek manghubuangi Sanak takaik tajamahan atau topik lain nan bahubuangan jo garakan Wikimedia nan kami anggap paralu untuak Sanak katahui. Sanak satuju sado data Sanak disimpan di Amerika Sarikaik dan mamatuhi [https://wikimediafoundation.org/wiki/Privacy_policy kabijakan privasi] kami.',
	'upload-more-photos-of-this-monument' => 'Muek labiah banyak foto dari monumen ko',
	'extdist-branch-master' => 'master (versi pangambangan tabaru)',
	'extdist-branch-REL1_21' => '1.21 (MediaWiki stabil tabaru)',
	'createacct-helpusername-url' => '{{ns:Project}}:Kabijakan namo pangguno',
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(bantu ambo mamiliah)]]',
	'createacct-captcha-help-url' => '{{ns:Project}}:Mohon buekkan akun',
	'createacct-imgcaptcha-help' => 'Indak dapek mancaliak gambar? [[{{MediaWiki:createacct-captcha-help-url}}|Mohon buekkan akun]]',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 * @author Brainmachine
 * @author Brest
 * @author Misos
 * @author Nemo bis
 */
$messages['mk'] = array(
	'wikimediamessages-desc' => 'Пораки кои се однесуваат на Викимедија',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=mk',
	'sitesupport' => 'Дарување',
	'tooltip-n-sitesupport' => 'Поддржете нè',
	'specialpages-group-contribution' => 'Придонеси/Обезб. средства',
	'nstab-creator' => 'Творец',
	'nstab-institution' => 'Установа',
	'nstab-sequence' => 'Низа',
	'nstab-timedtext' => 'УсогласенТекст',
	'group-Ex_Administrator' => 'Поранешни администратори',
	'group-Ex_Administrator-member' => '{{GENDER:$1|поранешен администратор}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Поранешни администратори',
	'group-Ex_Bureaucrat' => 'Поранешни бирократи',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|поранешен бирократ}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Поранешни бирократи',
	'group-Image-reviewer' => 'Проверувачи на слики',
	'group-Image-reviewer-member' => '{{GENDER:$1|проверувач на слики}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:Проверувачи на слики',
	'group-OTRS-member' => 'Членови на OTRS',
	'group-OTRS-member-member' => '{{GENDER:$1|член на OTRS}}',
	'grouppage-OTRS-member' => '{{ns:project}}:Членови на OTRS',
	'group-abusefilter' => 'Уредници на филтерот на злоупотреба',
	'group-abusefilter-member' => '{{GENDER:$1|уредник на филтерот за за злоупотреби}}',
	'grouppage-abusefilter' => '{{ns:project}}:Уредници на филтер на злоупотреби',
	'group-accountcreator' => 'Создавачи на сметки',
	'group-accountcreator-member' => '{{GENDER:$1|создавач на сметки}}',
	'grouppage-accountcreator' => '{{ns:project}}:Создавачи на сметки',
	'group-arbcom' => 'Членови на Арбитражната комисија',
	'group-arbcom-member' => '{{GENDER:$1|член на арбитражната комисија}}',
	'grouppage-arbcom' => '{{ns:project}}:Членови на Арбитражната комисија',
	'group-autopatrolled' => 'Автопатролери',
	'group-autopatrolled-member' => '{{GENDER:$1|автопатролер}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Автопатролери',
	'group-autoreviewer' => 'Автооценувачи',
	'group-autoreviewer-member' => '{{GENDER:$1|автооценувач}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Автооценувачи',
	'group-bigexport' => 'Големи извозници',
	'group-bigexport-member' => '{{GENDER:$1|крупен извозник}}',
	'grouppage-bigexport' => '{{ns:project}}:Големи извозници',
	'group-botadmin' => 'Ботови со администраторски права',
	'group-botadmin-member' => '{{GENDER:$1|бот со администраторски права}}',
	'grouppage-botadmin' => '{{ns:project}}:Ботови со администраторски права',
	'group-confirmed' => 'Потврдени корисници',
	'group-confirmed-member' => '{{GENDER:$1|потврден корисник}}',
	'grouppage-confirmed' => '{{ns:project}}:Потврдени корисници',
	'group-editprotected' => 'Заштитени уредници на страници',
	'group-editprotected-member' => '{{GENDER:$1|уредник на заштитени страници}}',
	'grouppage-editprotected' => '{{ns:project}}:Заштитени уредници на страници',
	'group-eliminator' => 'Отстранувачи',
	'group-eliminator-member' => '{{GENDER:$1|отстранувач}}',
	'grouppage-eliminator' => '{{ns:project}}:Отстранувачи',
	'group-filemover' => 'Преместувачи на податотеки',
	'group-filemover-member' => '{{GENDER:$1|преместувач на податотеки}}',
	'grouppage-filemover' => '{{ns:project}}:Преместувачи на податотеки',
	'group-flood' => 'Корисници-ботови',
	'group-flood-member' => '{{GENDER:$1|корисник-бот}}',
	'grouppage-flood' => '{{ns:project}}:Корисници-ботови',
	'group-founder' => 'Основачи',
	'group-founder-member' => '{{GENDER:$1|основач}}',
	'grouppage-founder' => '{{ns:project}}:Основачи',
	'group-import' => 'Увoзници',
	'group-import-member' => '{{GENDER:$1|увозник}}',
	'grouppage-import' => '{{ns:project}}:Увoзници',
	'group-interface_editor' => 'Уредници на посредникот',
	'group-interface_editor-member' => '{{GENDER:$1|уредник на посредникот}}',
	'grouppage-interface_editor' => '{{ns:project}}:Уредници на посредникот',
	'group-ipblock-exempt' => 'Исклучоци од IP-блокирање',
	'group-ipblock-exempt-member' => '{{GENDER:$1|исклучок од IP-блокирање}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Исклучок од IP-блокирање',
	'group-patroller' => 'Патролери',
	'group-patroller-member' => '{{GENDER:$1|патролер}}',
	'grouppage-patroller' => '{{ns:project}}:Патролери',
	'group-researcher' => 'Истражувачи',
	'group-researcher-member' => '{{GENDER:$1|истражувач}}',
	'grouppage-researcher' => '{{ns:project}}:Истражувач',
	'group-rollbacker' => 'Отповикувачи',
	'group-rollbacker-member' => '{{GENDER:$1|отповикувач}}',
	'grouppage-rollbacker' => '{{ns:project}}:Отповикувачи',
	'group-transwiki' => 'Прекувики-увoзници',
	'group-transwiki-member' => '{{GENDER:$1|прекувики-увозник}}',
	'grouppage-transwiki' => '{{ns:project}}:Прекувики увoзници',
	'group-trusted' => 'Докажани корисници',
	'group-trusted-member' => '{{GENDER:$1|докажан корисник}}',
	'grouppage-trusted' => '{{ns:project}}:Докажани корисници',
	'group-uploader' => 'Подигнувачи',
	'group-uploader-member' => '{{GENDER:$1|подигач}}',
	'grouppage-uploader' => '{{ns:project}}:Подигнувачи',
	'group-Global_bot' => 'Глобални ботови',
	'group-Global_bot-member' => '{{GENDER:$1|глобален бот}}',
	'group-Global_rollback' => 'Глобални отповикувачи',
	'group-Global_rollback-member' => '{{GENDER:$1|глобален отповикувач}}',
	'grouppage-Global_rollback' => 'm:Global rollback/mk',
	'group-Global_sysops' => 'Глобален сисоп',
	'group-Global_sysops-member' => '{{GENDER:$1|глобален сисоп}}',
	'grouppage-Global_sysops' => 'm:Global sysops/mk',
	'group-Ombudsmen' => 'Правозастапници',
	'group-Ombudsmen-member' => '{{GENDER:$1|правозастапник}}',
	'grouppage-Ombudsmen' => 'm:Ombudsman commission',
	'group-Staff' => 'Персонал',
	'group-Staff-member' => 'член на персонал',
	'grouppage-Staff' => 'Foundation:Персонал',
	'group-editinterface' => 'Уредници на посредникот',
	'group-editinterface-member' => '{{GENDER:$1|уредник на посредникот}}',
	'group-steward' => 'Стјуарди',
	'group-steward-member' => '{{GENDER:$1|стјуард}}',
	'grouppage-steward' => 'm:Stewards/mk',
	'group-sysadmin' => 'Систем администратори',
	'group-sysadmin-member' => '{{GENDER:$1|системски администратор}}',
	'grouppage-sysadmin' => 'm:Системски администратори',
	'group-API_High_Limit_Requestor' => 'Баратели на горни граници на API',
	'group-API_High_Limit_Requestor-member' => '{{GENDER:$1|барател на горна граница на API}}',
	'grouppage-API_High_Limit_Requestor' => 'm:API high limit requestors',
	'group-Indic_Bots' => 'Индиски ботови',
	'group-Indic_Bots-member' => '{{GENDER:$1|индиски бот}}',
	'grouppage-Indic_Bots' => 'm:Indic bots',
	'group-New_wikis_importer' => 'Увозници на нови викија',
	'group-New_wikis_importer-member' => '{{GENDER:$1|увозник на нови викија}}',
	'grouppage-New_wikis_importer' => 'm:New wikis importers',
	'group-global-ipblock-exempt' => 'Исклучоци од глобални IP-блокови',
	'group-global-ipblock-exempt-member' => '{{GENDER:$1|исклучок од глобален IP-блок}}',
	'grouppage-global-ipblock-exempt' => 'm:Global IP block exemptions',
	'group-recursive-export' => 'Повторлив извоз',
	'group-recursive-export-member' => '{{GENDER:$1|повторлив извозник}}',
	'grouppage-recursive-export' => 'm:Recursive export',
	'group-translationadmin' => 'Преводни администратори',
	'group-translationadmin-member' => '{{GENDER:$1|преводен администратор}}',
	'grouppage-translationadmin' => '{{ns:project}}:Преводни администратори',
	'group-centralnoticeadmin' => 'Администратори на централен разглас',
	'group-centralnoticeadmin-member' => '{{GENDER:$1|Администратор на Централен разглас}}',
	'grouppage-centralnoticeadmin' => '{{ns:project}}:Администратори на Централен разглас',
	'group-coder' => 'Програмери',
	'group-coder-member' => '{{GENDER:$1|програмер}}',
	'grouppage-coder' => '{{ns:project}}:Програмер',
	'group-inactive' => 'Неактивни корисници',
	'group-inactive-member' => '{{GENDER:$1|неактивен корисник}}',
	'grouppage-inactive' => '{{ns:project}}:Нективни корисници',
	'shared-repo-name-shared' => 'Заедничката Ризница',
	'wikimedia-copyright' => 'Текстот е достапен под условите на лиценцата <a href="//creativecommons.org/licenses/by-sa/3.0/deed.mk">Криејтив комонс НаведиИзвор-СподелиПодИстиУслови</a>.
Може да важат и дополнителни услови.
Повеќе информации ќе најдете на страницата <a href="//wikimediafoundation.org/wiki/Услови_на_употреба">Услови на употреба</a>.',
	'wikidata-copyright' => 'Сите структурирани податоци од именските простори „главен“ и „својство“ се достапни под лиценцата <a href="//https://creativecommons.org/publicdomain/zero/1.0/deed.mk" title="Уредби на лиценцата Криејтив комонс CC0">Кријетив комонс CC0</a>;
текстот и останатите именски простори се достапни под лиценцата <a href="//creativecommons.org/licenses/by-sa/3.0/deed.mk" title="Уредби на лиценцата Криејтив комонс Наведи извор/Сподели под исти услови">Криејтив комонс Наведи извор/Сподели под исти услови</a>;
може да важат и дополнителни услови.
Повеќе ќе најдете на страницата <a href="//wikimediafoundation.org/wiki/Terms_of_Use/mk" title="Услови на употреба на Фондацијата Викимедија">Услови на употреба</a>.',
	'wikidata-shortcopyrightwarning' => 'Стискајќи на „{{int:wikibase-save}}“, се согласувате со [//wikimediafoundation.org/wiki/Terms_of_Use/mk?uselang=mk условите на употреба] и неотповикливо се согласувате да ги објавувате вашите придонеси под лиценцата [//creativecommons.org/publicdomain/zero/1.0/deed.mk CC0].',
	'wikimedia-copyrightwarning' => 'Стискајќи на копчето „{{int:savearticle}}“, се согласувате на [//wikimediafoundation.org/wiki/Услови_на_употреба?uselang=mk Условите на употреба] и неотповикливо се согласувате дека ги објавувате вашите придонеси под условите на лиценцата [//creativecommons.org/licenses/by-sa/3.0/?uselang=mk CC-BY-SA 3.0] и [//www.gnu.org/copyleft/fdl.html?uselang=mk ГЛСД] (GFDL).
Се согласувате дека наведувањето на хиперврска или URL-адреса претставува достатно оддавање на заслуга според лиценците на Криејтив комонс.',
	'wikibase-sitelinks-wikivoyage' => 'Страници на Википатување сврзани со овој предмет',
	'cant-delete-main-page' => 'Не можете да ја избришете или преместите главната страница.',
	'wikimedia-translationnotifications-signup-legal' => 'Поднесувајќи ги овие информации, се согласувате Фондацијата Викимедија да може да ве контактира во врска со други преводи или други теми поврзани со движењето Викимедија што сметаме дека ќе ве интересираат. Се согласувате дека вашите податоци може да се складираат во САД и поднелат на нашите [https://wikimediafoundation.org/wiki/Заштита_на_личните_податоци правила за заштита на личните податоци].',
	'upload-more-photos-of-this-monument' => 'Подигни уште слики од споменикот',
	'extdist-branch-master' => 'матична (најнова развојна верзија)',
	'extdist-branch-REL1_21' => '1.21 (најнова стабилна верзија на МедијаВики)',
	'createacct-helpusername-url' => '{{ns:Project}}:Правила_за_кориснички_имиња',
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(помогни ми да одберам)]]',
	'createacct-captcha-help-url' => '{{ns:Project}}:Барање_на_сметка',
	'createacct-imgcaptcha-help' => 'Не можете да ја видите сликата? [[{{MediaWiki:createacct-captcha-help-url}}|Побарајте сметка]]',
);

/** Malayalam (മലയാളം)
 * @author Anoopan
 * @author Junaidpv
 * @author Meno25
 * @author Nemo bis
 * @author Praveenp
 * @author Raghith
 * @author Sadik Khalid
 * @author ShajiA
 * @author Shijualex
 * @author Vssun
 * @author לערי ריינהארט
 */
$messages['ml'] = array(
	'wikimediamessages-desc' => 'വിക്കിമീഡിയയുമായി ബന്ധപ്പെട്ട സന്ദേശങ്ങൾ',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=ml',
	'sitesupport' => 'സംഭാവന',
	'tooltip-n-sitesupport' => 'ഞങ്ങളെ പിന്തുണക്കുക',
	'specialpages-group-contribution' => 'സംഭാവനകൾ/ഫണ്ട്‌‌റെയ്സർ',
	'nstab-creator' => 'സ്രഷ്ടാവ്',
	'nstab-institution' => 'സ്ഥാപനം',
	'nstab-sequence' => 'ശ്രേണി',
	'nstab-timedtext' => 'സമയരേഖ',
	'group-Ex_Administrator' => 'പഴയ കാര്യനിർവാഹകർ',
	'group-Ex_Administrator-member' => '{{GENDER:$1|പഴയ കാര്യനിർവാഹകൻ|പഴയ കാര്യനിർവാഹക}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:പഴയ കാര്യനിർവാഹകർ',
	'group-Ex_Bureaucrat' => 'പഴയ ബ്യൂറോക്രാറ്റുകൾ',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|പഴയ ബ്യൂറോക്രാറ്റ്}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:പഴയ ബ്യൂറോക്രാറ്റ്',
	'group-Image-reviewer' => 'ചിത്ര സംശോധകർ',
	'group-Image-reviewer-member' => '{{GENDER:$1|ചിത്ര സംശോധകൻ|ചിത്ര സംശോധിക}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:ചിത്ര സംശോധകർ',
	'group-OTRS-member' => 'ഓ.റ്റി.ആർ.എസ്. അംഗങ്ങൾ',
	'group-OTRS-member-member' => '{{GENDER:$1|ഓ.റ്റി.ആർ.എസ്. അംഗം}}',
	'grouppage-OTRS-member' => '{{ns:project}}:ഓ.റ്റി.ആർ.എസ്. അംഗങ്ങൾ',
	'group-abusefilter' => 'ദുരുപയോഗ അരിപ്പ തിരുത്തുന്നവർ',
	'group-abusefilter-member' => '{{GENDER:$1|ദുരുപയോഗ അരിപ്പ തിരുത്തുന്നയാൾ}}',
	'grouppage-abusefilter' => '{{ns:project}}: ദുരുപയോഗ അരിപ്പ തിരുത്തുന്നവർ',
	'group-accountcreator' => 'അംഗത്വ സ്രഷ്ടാക്കൾ',
	'group-accountcreator-member' => '{{GENDER:$1|അംഗത്വ സ്രഷ്ടാവ്}}',
	'grouppage-accountcreator' => '{{ns:project}}:അംഗത്വ സ്രഷ്ടാക്കൾ',
	'group-arbcom' => 'മദ്ധ്യസ്ഥ സമിതി അംഗങ്ങൾ',
	'group-arbcom-member' => '{{GENDER:$1|മദ്ധ്യസ്ഥ സമിതി അംഗം}}',
	'grouppage-arbcom' => '{{ns:project}}:മദ്ധ്യസ്ഥ സമിതി അംഗങ്ങൾ',
	'group-autopatrolled' => 'സ്വതേ റോന്തുചുറ്റുന്നവർ',
	'group-autopatrolled-member' => '{{GENDER:$1|സ്വതേ റോന്തുചുറ്റുന്നയാൾ}}',
	'grouppage-autopatrolled' => '{{ns:project}}:സ്വതേ റോന്തുചുറ്റുന്നവർ',
	'group-autoreviewer' => 'സ്വതേ സംശോധകർ',
	'group-autoreviewer-member' => '{{GENDER:$1|സ്വതേ സംശോധനം ചെയ്യുന്നയാൾ}}',
	'grouppage-autoreviewer' => '{{ns:project}}:സ്വതേ സംശോധനം ചെയ്യുന്നവർ',
	'group-bigexport' => 'മഹാ കയറ്റുമതിക്കാർ',
	'group-bigexport-member' => '{{GENDER:$1|മഹാ കയറ്റുമതി ചെയ്യുന്നയാൾ}}',
	'grouppage-bigexport' => '{{ns:project}}:മഹാ കയറ്റുമതിക്കാർ',
	'group-botadmin' => 'കാര്യനിർവാഹക അവകാശങ്ങളുള്ള യന്ത്രങ്ങൾ',
	'group-botadmin-member' => '{{GENDER:$1|കാര്യനിർവാഹക അനുമതികളുള്ള യന്ത്രം}}',
	'grouppage-botadmin' => '{{ns:project}}:കാര്യനിർവാഹക അവകാശങ്ങളുള്ള യന്ത്രങ്ങൾ',
	'group-confirmed' => 'സ്ഥിരീകരിച്ച ഉപയോക്താക്കൾ',
	'group-confirmed-member' => '{{GENDER:$1|സ്ഥിരീകരിക്കപ്പെട്ട ഉപയോക്താവ്}}',
	'grouppage-confirmed' => '{{ns:project}}:സ്ഥിരീകരിച്ച ഉപയോക്താക്കൾ',
	'group-editprotected' => 'സംരക്ഷിത താളുകൾ തിരുത്തുന്നവർ',
	'group-editprotected-member' => '{{GENDER:$1|സംരക്ഷിത താളുകൾ തിരുത്തുന്നവർ}}',
	'grouppage-editprotected' => '{{ns:project}}:സംരക്ഷിത താൾ തിരുത്തുന്നവർ',
	'group-eliminator' => 'തിരസ്കർത്താക്കൾ',
	'group-eliminator-member' => '{{GENDER:$1|തിരസ്കർത്താവ്}}',
	'grouppage-eliminator' => '{{ns:project}}:തിരസ്കർത്താവ്',
	'group-filemover' => 'പ്രമാണം മാറ്റുന്നവർ',
	'group-filemover-member' => '{{GENDER:$1|പ്രമാണം മാറ്റുന്നവർ}}',
	'grouppage-filemover' => '{{ns:project}}:പ്രമാണം മാറ്റുന്നവർ',
	'group-flood' => 'ബോട്ട് ഉപയോക്താക്കൾ',
	'group-flood-member' => '{{GENDER:$1|ബോട്ട് ഉപയോക്താക്കൾ}}',
	'grouppage-flood' => '{{ns:project}}:ബോട്ട് ഉപയോക്താക്കൾ',
	'group-founder' => 'സ്ഥാപകർ',
	'group-founder-member' => '{{GENDER:$1|സ്ഥാപകർ}}',
	'grouppage-founder' => '{{ns:project}}:സ്ഥാപകർ',
	'group-import' => 'ഇറക്കുമതിക്കാർ',
	'group-import-member' => '{{GENDER:$1|ഇറക്കുമതിക്കാർ}}',
	'grouppage-import' => '{{ns:project}}:ഇറക്കുമതിക്കാർ',
	'group-interface_editor' => 'സമ്പർക്കമുഖം തിരുത്തുന്നവർ',
	'group-interface_editor-member' => '{{GENDER:$1|സമ്പർക്കമുഖം തിരുത്തുന്നയാൾ}}',
	'grouppage-interface_editor' => '{{ns:project}}:സമ്പർക്കമുഖം തിരുത്തുന്നവർ',
	'group-ipblock-exempt' => 'ഐ.പി. തടയൽ ഒഴിവാക്കലുകൾ',
	'group-ipblock-exempt-member' => '{{GENDER:$1|ഐ.പി. തടയൽ ഒഴിവാക്കൽ}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:ഐ.പി. തടയൽ ഒഴിവാക്കൽ',
	'group-patroller' => 'റോന്തു ചുറ്റുന്നവർ',
	'group-patroller-member' => '{{GENDER:$1|റോന്തു ചുറ്റുന്നവർ}}',
	'grouppage-patroller' => '{{ns:project}}:റോന്തു ചുറ്റുന്നവർ',
	'group-researcher' => 'ഗവേഷകർ',
	'group-researcher-member' => '{{GENDER:$1|ഗവേഷകൻ|ഗവേഷക}}',
	'grouppage-researcher' => '{{ns:project}}:ഗവേഷകർ',
	'group-rollbacker' => 'മുൻപ്രാപനം നടപ്പാക്കുന്നവർ',
	'group-rollbacker-member' => '{{GENDER:$1|മുൻപ്രാപനം ചെയ്യുന്നയാൾ}}',
	'grouppage-rollbacker' => '{{ns:project}}:മുൻപ്രാപനം ചെയ്യുന്നവർ',
	'group-transwiki' => 'ട്രാൻസ്‌‌വിക്കി ഇറക്കുമതിക്കാർ',
	'group-transwiki-member' => '{{GENDER:$1|ട്രാൻസ്‌‌വിക്കി ഇറക്കുമതിചെയ്യുന്നയാൾ}}',
	'grouppage-transwiki' => '{{ns:project}}:ട്രാൻസ്‌‌വിക്കി ഇറക്കുമതിക്കാർ',
	'group-trusted' => 'വിശ്വാസ്യതയുള്ള ഉപയോക്താക്കൾ',
	'group-trusted-member' => '{{GENDER:$1|വിശ്വാസ്യതയുള്ള ഉപയോക്താവ്}}',
	'grouppage-trusted' => '{{ns:project}}:വിശ്വാസ്യതയുള്ള ഉപയോക്താക്കൾ',
	'group-Global_bot' => 'ആഗോള യന്ത്രങ്ങൾ',
	'group-Global_bot-member' => '{{GENDER:$1|ആഗോള ബോട്ട്}}',
	'group-Global_rollback' => 'ആഗോള മുൻപ്രാപനം ചെയ്യുന്നവർ',
	'group-Global_rollback-member' => '{{GENDER:$1|ആഗോള മുൻപ്രാപനം ചെയ്യുന്നയാൾ}}',
	'group-Global_sysops' => 'ആഗോള സിസോപ്പ്',
	'group-Global_sysops-member' => '{{GENDER:$1|ആഗോള കാര്യനിർവാഹകൻ|ആഗോള കാര്യനിർവാഹക}}',
	'group-Ombudsmen' => 'ഓംബുഡ്സ്‌‌മാൻ',
	'group-Ombudsmen-member' => '{{GENDER:$1|ഓംബുഡ്സ്മാൻ}}',
	'group-Staff' => 'ഉദ്യോഗസ്ഥർ',
	'group-Staff-member' => 'ഉദ്യോഗസ്ഥ(ൻ)',
	'group-editinterface' => 'സമ്പർക്കമുഖം തിരുത്തുന്നവർ',
	'group-editinterface-member' => '{{GENDER:$1|സമ്പർക്കമുഖം തിരുത്തുന്നയാൾ}}',
	'group-steward' => 'സ്റ്റ്യൂവാർഡുകൾ',
	'group-steward-member' => '{{GENDER:$1|സ്റ്റ്യൂവാർഡ്}}',
	'group-sysadmin' => 'സിസ്റ്റം കാര്യനിർവാഹകർ',
	'group-sysadmin-member' => '{{GENDER:$1|സിസ്റ്റം കാര്യനിർവാഹകൻ|സിസ്റ്റം കാര്യനിർവാഹക}}',
	'group-API_High_Limit_Requestor' => 'എ.പി.ഐ. ഉന്നതപരിധി അഭ്യർത്ഥാക്കൾ',
	'group-API_High_Limit_Requestor-member' => '{{GENDER:$1|എ.പി.ഐ. ഉന്നതപരിധി അഭ്യർത്ഥന ചെയ്യുന്നയാൾ}}',
	'group-Indic_Bots' => 'ഇന്ത്യക്കായുള്ള യന്ത്രങ്ങൾ',
	'group-Indic_Bots-member' => '{{GENDER:$1|ഇന്ത്യക്കായുള്ള യന്ത്രം}}',
	'group-New_wikis_importer' => 'പുതിയ വിക്കി ഇറക്കുമതിക്കാർ',
	'group-New_wikis_importer-member' => '{{GENDER:$1|പുതിയ വിക്കികൾ ഇറക്കുമതിചെയ്യുന്നയാൾ}}',
	'group-global-ipblock-exempt' => 'ആഗോള ഐ.പി. തടയൽ ഒഴിവാക്കലുകൾ',
	'group-global-ipblock-exempt-member' => '{{GENDER:$1|ആഗോളമായി ഐ.പി. തടയലിൽ നിന്ന് ഒഴിവാക്കപ്പെട്ടയാൾ}}',
	'group-recursive-export' => 'പുനരാവർത്തിത കയറ്റുമതി',
	'group-recursive-export-member' => '{{GENDER:$1|പുനരാവർത്തിത കയറ്റുമതി ചെയ്യുന്നയാൾ}}',
	'group-translationadmin' => 'പരിഭാഷാ കാര്യനിർവാഹകർ',
	'group-translationadmin-member' => '{{GENDER:$1|പരിഭാഷാ കാര്യനിർവാഹകൻ|പരിഭാഷാ കാര്യനിർവാഹക}}',
	'grouppage-translationadmin' => '{{ns:project}}:പരിഭാഷാ കാര്യനിർവാഹകർ',
	'group-centralnoticeadmin' => 'കേന്ദ്രീകൃത അറിയിപ്പ് കാര്യനിർവ്വാഹകർ',
	'group-centralnoticeadmin-member' => '{{GENDER:$1|കേന്ദ്രീകൃത അറിയിപ്പ് കാര്യനിർവ്വാഹകൻ|കേന്ദ്രീകൃത അറിയിപ്പ് കാര്യനിർവ്വാഹക}}',
	'grouppage-centralnoticeadmin' => '{{ns:project}}:കേന്ദ്രീകൃത അറിയിപ്പ് കാര്യനിർവ്വാഹകർ',
	'group-coder' => 'കോഡേഴ്സ്',
	'group-coder-member' => '{{GENDER:$1|കോഡർ}}',
	'group-inactive' => 'സജീവരല്ലാത്ത ഉപയോക്താക്കൾ',
	'group-inactive-member' => '{{GENDER:$1|സജീവമല്ലാത്ത ഉപയോക്താവ്}}',
	'grouppage-inactive' => '{{ns:project}}:സജീവരല്ലാത്ത ഉപയോക്താക്കൾ',
	'shared-repo-name-shared' => 'വിക്കിമീഡിയ കോമൺസ്',
	'wikimedia-copyright' => 'വിവരങ്ങൾ <a href="//creativecommons.org/licenses/by-sa/3.0/">ക്രിയേറ്റീവ് കോമൺസ് ആട്രിബ്യൂഷൻ/ഷെയർ-എലൈക്ക് അനുമതിപത്ര (കടപ്പാട്, സമാനമായ അനുമതിപത്രം, എന്നിവ നൽകുക)</a> പ്രകാരം ലഭ്യമാണ്; മേൽ നിബന്ധനകൾ ഉണ്ടായേക്കാം. കൂടുതൽ വിവരങ്ങൾക്ക് <a href="//wikimediafoundation.org/wiki/Terms_of_Use/ml">ഉപയോഗനിബന്ധനകൾ</a> കാണുക.',
	'wikidata-copyright' => 'പ്രധാന, ഗുണഗണ നാമമേഖലകളിലെ എല്ലാ ക്രമപ്പെടുത്തിയ വിവരങ്ങളും <a href="//creativecommons.org/publicdomain/zero/1.0/" title="Definition of the Creative Commons CC0 License">ക്രിയേറ്റീവ് കോമൺസ് സി.സി.0 അനുവാദപത്രം</a> പ്രകാരം ലഭ്യമായിരിക്കും;
മറ്റ് നാമമേഖലകളിലെ എഴുത്തുകൾ <a href="//creativecommons.org/licenses/by-sa/3.0/" title="Definition of the Creative Commons Attribution/Share-Alike License">ക്രിയേറ്റീവ് കോമൺസ് ആട്രിബ്യൂഷൻ/ഷെയർ-എലൈക് അനുവാദപത്രത്തിൽ</a> ലഭ്യമായിരിക്കും;
അധിക നിബന്ധനകൾ ഉണ്ടായേക്കാം.
കൂടുതൽ വിവരങ്ങൾക്ക് <a href="//wikimediafoundation.org/wiki/Terms_of_Use/ml" title="വിക്കിമീഡിയ ഫൗണ്ടേഷന്റെ ഉപയോഗനിബന്ധനകൾ">ഉപയോഗനിബന്ധനകൾ</a> കാണുക.',
	'wikidata-shortcopyrightwarning' => '"സേവ് ചെയ്യുക" എന്നത് അമർത്തുമ്പോൾ [https://wikimediafoundation.org/wiki/Terms_of_Use ഉപയോഗനിബന്ധനകൾ] താങ്കൾ അംഗീകരിക്കുന്നുണ്ട്, ഒപ്പം താങ്കളുടെ സംഭാവന, ഇനി പിൻവലിക്കാനാവാത്തവിധം [https://creativecommons.org/publicdomain/zero/1.0/ സി.സി.0 അനുവാദപത്രം] പ്രകാരമാണ് പ്രസിദ്ധീകരിക്കുന്നതെന്നും താങ്കൾ അംഗീകരിക്കുന്നു.', # Fuzzy
	'wikimedia-copyrightwarning' => '"{{int:savearticle}}" എന്ന ബട്ടൺ ഞെക്കുമ്പോൾ, [//wikimediafoundation.org/wiki/Terms_of_Use/ml ഉപയോഗനിബന്ധനകൾ അംഗീകരിക്കാമെന്ന്] താങ്കൾ സമ്മതിക്കുകയാണ്, ഒപ്പം താങ്കളുടെ സംഭാവനകൾ, ഇനി പിൻവലിക്കാനാവാത്തവിധം [//creativecommons.org/licenses/by-sa/3.0/ സി.സി.-ബൈ-എസ്.എ. 3.0 അനുവാദപത്രം],  [//ml.wikipedia.org/wiki/WP:GFDL-ml ജി.എഫ്.ഡി.എൽ] എന്നിവയിൽ പ്രസിദ്ധീകരിക്കാനും സമ്മതിക്കുന്നു. ക്രിയേറ്റീവ് കോമൺസ് അനുവാദപത്രത്തിൽ കടപ്പാട് കുറിക്കാൻ ഒരു ഹൈപ്പർലിങ്കോ യൂ.ആർ.എല്ലോ മതിയെന്നും താങ്കൾ സമ്മതിക്കുന്നുണ്ട്.',
	'cant-delete-main-page' => 'പ്രധാന താൾ മായ്ക്കാനോ മാറ്റാനോ താങ്കൾക്ക് കഴിയില്ല.',
	'wikimedia-translationnotifications-signup-legal' => 'വിക്കിമീഡിയ ഫൗണ്ടേഷനുമായി ഈ വിവരങ്ങൾ പങ്ക് വെയ്ക്കുമ്പോൾ, ഞങ്ങൾ പരിഭാഷകൾ സംബന്ധിച്ച വിവരങ്ങളുമായോ, വിക്കിമീഡിയ പ്രസ്ഥാനത്തിൽ താങ്കൾക്ക് താത്പര്യമുള്ളതെന്ന് ഞങ്ങൾ കരുതുന്ന മറ്റ് കാര്യങ്ങളിലോ ആശയവിനിമയം നടത്താൻ താങ്കളെ ബന്ധപ്പെടാം എന്ന് താങ്കൾ സമ്മതിക്കുന്നുണ്ട്. താങ്കളെക്കുറിച്ചുള്ള വിവരങ്ങൾ അമേരിക്കൻ ഐക്യനാടുകളിൽ, ഞങ്ങളുടെ [https://wikimediafoundation.org/wiki/Privacy_policy സ്വകാര്യതാനയമനുസരിച്ചാണ്] സൂക്ഷിക്കുന്നതെന്നും അറിയാമെന്ന് സമ്മതിക്കുന്നുണ്ട്.',
	'upload-more-photos-of-this-monument' => 'ഈ സ്മാരകത്തിന്റെ കൂടുതൽ ചിത്രങ്ങൾ അപ്‌ലോഡ് ചെയ്യുക',
	'extdist-branch-master' => 'മാസ്റ്റർ (ഏറ്റവും പുതിയ വികസനഘട്ട പതിപ്പ്)',
	'extdist-branch-REL1_21' => '1.21 (ഏറ്റവും പുതിയ സുസ്ഥിര മീഡിയവിക്കി)',
	'createacct-helpusername-url' => '{{ns:Project}}:ഉപയോക്തൃനാമനയം',
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(തിരഞ്ഞെടുക്കാൻ സഹായിക്കുക)]]',
	'createacct-captcha-help-url' => '{{ns:Project}}:അംഗത്വമാവശ്യപ്പെടുക',
	'createacct-imgcaptcha-help' => 'ചിത്രം കാണാൻ കഴിയുന്നില്ലേ? [[{{MediaWiki:createacct-captcha-help-url}}|അംഗത്വം ആവശ്യപ്പെടുക]]',
);

/** Mongolian (монгол)
 * @author Chinneeb
 * @author לערי ריינהארט
 */
$messages['mn'] = array(
	'sitesupport' => 'Хандив',
	'tooltip-n-sitesupport' => 'Биднийг дэмжээрэй',
	'group-rollbacker' => 'Буцаагчид',
	'group-rollbacker-member' => 'буцаагч', # Fuzzy
	'grouppage-rollbacker' => '{{ns:project}}:Буцаагчид',
	'group-Global_rollback' => 'Глобал буцаагчид',
	'group-Global_rollback-member' => 'глобал буцаагч', # Fuzzy
	'group-steward' => 'Үйлчлэгчид',
	'group-steward-member' => 'үйлчлэгч', # Fuzzy
	'grouppage-steward' => 'm:Stewards',
);

/** Moldavian (молдовеняскэ)
 * @author Node ue
 */
$messages['mo'] = array(
	'tooltip-n-sitesupport' => 'Сприжиниць-не',
);

/** Marathi (मराठी)
 * @author Kaajawa
 * @author Kaustubh
 * @author Mahitgar
 * @author Mvkulkarni23
 * @author Rahuldeshmukh101
 */
$messages['mr'] = array(
	'wikimediamessages-desc' => 'विकिमीडियाबद्दलचे विशीष्ट संदेश',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=mr',
	'sitesupport' => 'दान',
	'tooltip-n-sitesupport' => 'आम्हाला पाठबळ द्या',
	'specialpages-group-contribution' => 'योगदान/निधी उभारणी',
	'nstab-creator' => 'निर्माता',
	'nstab-institution' => 'संस्था',
	'nstab-sequence' => 'क्रम',
	'nstab-timedtext' => 'समयोचीतमजकुर',
	'group-Ex_Administrator' => 'माजी प्रचालक',
	'group-Ex_Administrator-member' => '{{GENDER:$1| माजी प्रचालक}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:माजी प्रचालक',
	'group-Ex_Bureaucrat' => ' माजी प्रशासक',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|माजी स्विकृती अधिकारी}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:माजी स्विकृती अधिकारी',
	'group-Image-reviewer' => 'चित्र पडताळणी अधिकारी',
	'group-Image-reviewer-member' => '{{GENDER:$1|चित्र पडताळणी अधिकारी}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:चित्र पडताळणी अधिकारी',
	'group-OTRS-member' => 'OTRS सदस्य',
	'group-OTRS-member-member' => '{{GENDER:$1|OTRS सदस्य|OTRS सदस्या}}',
	'grouppage-OTRS-member' => '{{ns:project}}:OTRS सदस्य',
	'group-abusefilter' => 'दुरूपयोग गाळ्णी संपादक',
	'group-abusefilter-member' => '{{GENDER:$1|दुरूपयोग गाळणी संपादक}}',
	'grouppage-abusefilter' => '{{ns:project}}:दुरूपयोग गाळणी संपादक',
	'group-accountcreator' => 'खाते विकसक',
	'group-accountcreator-member' => '{{GENDER:$1|खाते विकसक}}',
	'grouppage-accountcreator' => '{{ns:project}}:खाते विकसक',
	'group-arbcom' => 'लवाद समिती Arbitration committee सदस्य',
	'group-arbcom-member' => '{{GENDER:$1|लवाद समिती Arbitration committee सदस्य|लवाद समिती Arbitration committee सदस्या}}',
	'grouppage-arbcom' => '{{ns:project}}: मध्यस्थता समिती सदस्य',
	'group-autopatrolled' => 'स्वयंचलीतगस्तदार',
	'group-autopatrolled-member' => '{{GENDER:$1|स्वयंचलीतगस्तदार}}',
	'grouppage-autopatrolled' => '{{ns:project}}:स्वयंचलीतगस्तदार',
	'group-autoreviewer' => 'स्वयंचलीत-गस्तदार',
	'group-autoreviewer-member' => '{{GENDER:$1|स्वयंचलीत-गस्तदार}}',
	'grouppage-autoreviewer' => '{{ns:project}}:स्वयंचलीतगस्तदार',
	'group-bigexport' => 'मोठे निर्यातक',
	'group-bigexport-member' => '{{GENDER:$1|मोठे निर्यातदार}}',
	'grouppage-bigexport' => '{{ns:project}}:मोठे निर्यातक',
	'group-botadmin' => 'प्रचालकांचे अधिकार असलेला सांगकाम्या',
	'group-botadmin-member' => '{{GENDER:$1|प्रचालकांचे  अधिकार असलेला सांगकाम्या }}',
	'grouppage-botadmin' => '{{ns:project}}:प्रचालक अधिकारासहीत सांगकामे Bots',
	'group-confirmed' => 'सुनिश्चित सदस्य',
	'group-confirmed-member' => '{{GENDER:$1|सुनिश्चित सदस्य|सुनिश्चित सदस्या}}',
	'grouppage-confirmed' => '{{ns:project}}:नोंदणीकृत सदस्य',
	'group-editprotected' => 'सुरक्षित पानांचे संपादक',
	'group-editprotected-member' => '{{GENDER:$1|सुरक्षित पानांचे संपादक}}',
	'grouppage-editprotected' => '{{ns:project}}:सुरक्षित पानांचे संपादक',
	'group-eliminator' => 'निरसक',
	'group-eliminator-member' => '{{GENDER:$1|निरसक(eliminator)}}',
	'grouppage-eliminator' => '{{ns:project}}:निरसक',
	'group-filemover' => 'संचिका हलवणारे',
	'group-filemover-member' => '{{GENDER:$1|संचिका हलवणारा|संचिका हलवणारी}}',
	'grouppage-filemover' => '{{ns:project}}:संचिका हालवणारे',
	'group-flood' => 'सांकाम्या खाते',
	'group-flood-member' => '{{GENDER:$1|सांगकाम्या}}',
	'grouppage-flood' => '{{ns:project}}:सांगकाम्या सदस्य',
	'group-founder' => 'संस्थापक',
	'group-founder-member' => '{{GENDER:$1|संस्थापक}}',
	'grouppage-founder' => '{{ns:project}}:संस्थापक',
	'group-import' => 'आयातदार',
	'group-import-member' => '{{GENDER:$1|आयातदार}}',
	'grouppage-import' => '{{ns:project}}:आयातदार',
	'group-interface_editor' => 'इंटरफेस संपादक',
	'group-interface_editor-member' => '{{GENDER:$1|आंतरपृष्ठ संपादक इंटरफेस एडीटर}}',
	'grouppage-interface_editor' => '{{ns:project}}:इंटरफेस संपादक',
	'group-ipblock-exempt' => 'अंकपत्ता प्रतिबंधन सूट',
	'group-ipblock-exempt-member' => '{{GENDER:$1|अंकपत्ता प्रतिबंधन सूट}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:अंकपत्ता प्रतिबंधन अपवाद',
	'group-patroller' => 'निरीक्षक',
	'group-patroller-member' => '{{GENDER:$1|निरीक्षक}}',
	'group-researcher' => 'संशोधक',
	'group-researcher-member' => '{{GENDER:$1|संशोधक }}',
	'grouppage-researcher' => '{{ns:project}}: शोधकर्ता',
	'group-rollbacker' => 'द्रूतमाघारकार',
	'group-rollbacker-member' => 'द्रुतमाघारकार',
	'grouppage-rollbacker' => '{{ns:project}}:माघारकार',
	'group-transwiki' => 'आंतरविकि आयातदार',
	'group-transwiki-member' => '{{GENDER:$1|आंतरविकि आयातदार}}',
	'grouppage-transwiki' => '{{ns:project}}:आंतरविकि चढवैय्ये',
	'group-trusted' => ' विश्वत्त सभासद',
	'group-trusted-member' => '{{GENDER:$1|विश्वस्त सदस्य  }}',
	'grouppage-trusted' => '{{ns:project}}:विश्वस्त सदस्य',
	'group-Global_bot' => 'वैश्विक सांगकामे',
	'group-Global_bot-member' => '{{GENDER:$1|वैश्विक सांगकाम्या}}',
	'group-Global_rollback' => 'वैश्विक माघारकार',
	'group-Global_rollback-member' => '{{GENDER:$1|वैश्विक द्रूतमाघारकार}}',
	'group-Global_sysops' => 'वैश्विक प्रचालक',
	'group-Global_sysops-member' => '{{GENDER:$1|वैश्विक प्रचालक|वैश्विक प्रचालिका}}',
	'group-Ombudsmen' => 'लोकाआयूक्त',
	'group-Ombudsmen-member' => '{{GENDER:$1|लोकआयूक्त}}',
	'group-Staff' => 'स्टाफ',
	'group-Staff-member' => 'स्टाफ सदस्य',
	'group-editinterface' => 'इंटरफेस संपादक',
	'group-editinterface-member' => '{{GENDER:$1|इंटरफेस संपादक}}',
	'group-steward' => 'प्रतिपालक',
	'group-steward-member' => '{{GENDER:$1|प्रतिपालक}}',
	'group-sysadmin' => 'प्रचालक',
	'group-sysadmin-member' => '{{GENDER:$1|प्रचालक}}',
	'group-translationadmin' => 'भाषांतर प्रचालक',
	'group-translationadmin-member' => '{{GENDER:$1|भाषांतर प्रचालक }}',
	'grouppage-translationadmin' => '{{ns:project}}: भाषांतर प्रचालक',
	'group-coder' => 'संहिता(कोडर्स)',
	'group-coder-member' => '{{GENDER:$1|संहिता(कोडर)}}',
	'group-inactive' => 'निष्क्रीय सदस्य',
	'group-inactive-member' => '{{GENDER:$1|निष्क्रीय सदस्य}}',
	'grouppage-inactive' => '{{ns:project}}:निष्क्रीय सदस्य',
	'cant-delete-main-page' => 'आपण हे पान इतरत्र हलवू अथवा वगळू शकणार नाहीत',
);

/** Hill Mari (кырык мары)
 * @author Amdf
 */
$messages['mrj'] = array(
	'wikimedia-copyright' => 'Текст <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike лицензи</a> семӹнь анжыкталтеш, кӓнгӓш моло келеш гӹнь, вес условивлӓ шотыш нӓлмӹ лит. Шукыракым пӓлен нӓлӓш <a href="//wikimediafoundation.org/wiki/Terms_of_Use/ru">«Кычылтмы условивлӓм»</a> анжалда.',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 * @author Aurora
 * @author Aviator
 * @author Izzudin
 * @author Kurniasan
 * @author Nemo bis
 */
$messages['ms'] = array(
	'wikimediamessages-desc' => 'Pesanan-pesanan Wikimedia',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=ms',
	'sitesupport' => 'Derma',
	'tooltip-n-sitesupport' => 'Derma',
	'specialpages-group-contribution' => 'Sumbangan/Tabung',
	'nstab-creator' => 'Pencipta',
	'nstab-institution' => 'Institusi',
	'nstab-sequence' => 'Jujukan',
	'nstab-timedtext' => 'TimedText',
	'group-Ex_Administrator' => 'Bekas pentadbir',
	'group-Ex_Administrator-member' => '{{GENDER:$1|bekas pentadbir}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Bekas pentadbir',
	'group-Ex_Bureaucrat' => 'Bekas birokrat',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|bekas birokrat}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Bekas birokrat',
	'group-Image-reviewer' => 'Pengulas imej',
	'group-Image-reviewer-member' => '{{GENDER:$1|pengulas imej}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:Pengulas imej',
	'group-OTRS-member' => 'Ahli OTRS',
	'group-OTRS-member-member' => '{{GENDER:$1|ahli OTRS}}',
	'grouppage-OTRS-member' => '{{ns:project}}:Ahli OTRS',
	'group-abusefilter' => 'Penyunting penapis salah laku',
	'group-abusefilter-member' => '{{GENDER:$1|penyunting penapis salah laku}}',
	'grouppage-abusefilter' => '{{ns:project}}:Penyunting penapis salah laku',
	'group-accountcreator' => 'Pembuka akaun',
	'group-accountcreator-member' => '{{GENDER:$1|pembuka akaun}}',
	'grouppage-accountcreator' => '{{ns:project}}:Pembuka akaun',
	'group-arbcom' => 'Ahli-ahli jawatankuasa timbang tara',
	'group-arbcom-member' => '{{GENDER:$1|ahli jawatankuasa timbang tara}}',
	'grouppage-arbcom' => '{{ns:project}}:Ahli jawatankuasa timbang tara',
	'group-autopatrolled' => 'Peronda automatik',
	'group-autopatrolled-member' => '{{GENDER:$1|peronda automatik}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Peronda automatik',
	'group-autoreviewer' => 'Pemeriksa automatik',
	'group-autoreviewer-member' => '{{GENDER:$1|pemeriksa automatik}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Pemeriksaautomatik',
	'group-bigexport' => 'Pengeksport besar',
	'group-bigexport-member' => '{{GENDER:$1|pengeksport besar}}',
	'grouppage-bigexport' => '{{ns:project}}:Pengeksport besar',
	'group-botadmin' => 'Bot dengan hak pentadbir',
	'group-botadmin-member' => '{{GENDER:$1|bot dengan hak pentadbir}}',
	'grouppage-botadmin' => '{{ns:project}}:Bot dengan hak pentadbir',
	'group-confirmed' => 'Pengguna sah',
	'group-confirmed-member' => '{{GENDER:$1|pengguna sah}}',
	'grouppage-confirmed' => '{{ns:project}}:Pengguna sah',
	'group-editprotected' => 'Penyunting laman terlindung',
	'group-editprotected-member' => '{{GENDER:$1|penyunting laman terlindung}}',
	'grouppage-editprotected' => '{{ns:project}}:Penyunting laman terlindung',
	'group-eliminator' => 'Penyingkir',
	'group-eliminator-member' => '{{GENDER:$1|penyingkir}}',
	'grouppage-eliminator' => '{{ns:project}}:Penyingkir',
	'group-filemover' => 'Pemindah fail',
	'group-filemover-member' => '{{GENDER:$1|pemindah fail}}',
	'grouppage-filemover' => '{{ns:project}}:Pemindah fail',
	'group-flood' => 'Pengguna bot',
	'group-flood-member' => '{{GENDER:$1|pengguna bot}}',
	'grouppage-flood' => '{{ns:project}}:Pengguna bot',
	'group-founder' => 'Pengasas',
	'group-founder-member' => '{{GENDER:$1|pengasas}}',
	'grouppage-founder' => '{{ns:project}}:Pengasas',
	'group-import' => 'Pengimport',
	'group-import-member' => '{{GENDER:$1|pengimport}}',
	'grouppage-import' => '{{ns:project}}:Pengimport',
	'group-interface_editor' => 'penyunting antara muka',
	'group-interface_editor-member' => '{{GENDER:$1|penyunting antara muka}}',
	'grouppage-interface_editor' => '{{ns:project}}:Penyunting antara muka',
	'group-ipblock-exempt' => 'Pengecualian sekatan IP',
	'group-ipblock-exempt-member' => '{{GENDER:$1|terkecuali daripada sekatan IP}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Pengecualian sekatan IP',
	'group-patroller' => 'Peronda',
	'group-patroller-member' => '{{GENDER:$1|peronda}}',
	'grouppage-patroller' => '{{ns:project}}:Peronda',
	'group-researcher' => 'Penyelidik',
	'group-researcher-member' => '{{GENDER:$1|penyelidik}}',
	'grouppage-researcher' => '{{ns:project}}:Penyelidik',
	'group-rollbacker' => 'Pengundur',
	'group-rollbacker-member' => '{{GENDER:$1|pengundur}}',
	'grouppage-rollbacker' => '{{ns:project}}:Pengundur',
	'group-transwiki' => 'Pengimport rentas wiki',
	'group-transwiki-member' => '{{GENDER:$1|pengimport rentas wiki}}',
	'grouppage-transwiki' => '{{ns:project}}:Pengimport rentas wiki',
	'group-trusted' => 'Pengguna terpercaya',
	'group-trusted-member' => '{{GENDER:$1|pengguna terpercaya}}',
	'grouppage-trusted' => '{{ns:project}}:Pengguna terpercaya',
	'group-uploader' => 'Pemuat naik',
	'group-uploader-member' => '{{GENDER:$1|pemuat naik}}',
	'grouppage-uploader' => '{{ns:project}}:Pemuat naik',
	'group-Global_bot' => 'Bot sejagat',
	'group-Global_bot-member' => '{{GENDER:$1|bot sejagat}}',
	'grouppage-Global_bot' => 'm:Bot sejagat',
	'group-Global_rollback' => 'Pengundur suntingan sejagat',
	'group-Global_rollback-member' => '{{GENDER:$1|pengundur sejagat}}',
	'grouppage-Global_rollback' => 'm:Unduran sejagat',
	'group-Global_sysops' => 'Pengendali sistem sejagat',
	'group-Global_sysops-member' => '{{GENDER:$1|pengendali sistem sejagat}}',
	'grouppage-Global_sysops' => 'm:Pengendali sistem sejagat',
	'group-Ombudsmen' => 'Ombudsman',
	'group-Ombudsmen-member' => '{{GENDER:$1|ombudsman}}',
	'grouppage-Ombudsmen' => 'm:Suruhanjaya ombudsman',
	'group-Staff' => 'Kakitangan',
	'group-Staff-member' => 'kakitangan',
	'group-editinterface' => 'Penyunting antara muka',
	'group-editinterface-member' => '{{GENDER:$1|penyunting antara muka}}',
	'group-steward' => 'Pengelola',
	'group-steward-member' => '{{GENDER:$1|pengelola}}',
	'grouppage-steward' => 'm:Stewards',
	'group-sysadmin' => 'Pentadbir sistem',
	'group-sysadmin-member' => '{{GENDER:$1|pentadbir sistem}}',
	'grouppage-sysadmin' => 'm:Pentadbir sistem',
	'group-API_High_Limit_Requestor' => 'Pemohon had tinggi API',
	'group-API_High_Limit_Requestor-member' => '{{GENDER:$1|pemohon had tinggi API}}',
	'grouppage-API_High_Limit_Requestor' => 'm:API high limit requestors',
	'group-Indic_Bots' => 'Bot indik',
	'group-Indic_Bots-member' => '{{GENDER:$1|bot indik}}',
	'grouppage-Indic_Bots' => 'm:Indic bots',
	'group-New_wikis_importer' => 'Pengimport wiki baru',
	'group-New_wikis_importer-member' => '{{GENDER:$1|pengimport wiki baru}}',
	'grouppage-New_wikis_importer' => 'm:New wikis importers',
	'group-global-ipblock-exempt' => 'Pengecualian sekatan IP sejagat',
	'group-global-ipblock-exempt-member' => '{{GENDER:$1|terkecuali dari sekatan IP sejagat}}',
	'grouppage-global-ipblock-exempt' => 'm:Global IP block exemptions',
	'group-recursive-export' => 'Eksport rekursif',
	'group-recursive-export-member' => '{{GENDER:$1|pengeksport rekursif}}',
	'grouppage-recursive-export' => 'm:Recursive export',
	'group-translationadmin' => 'Pentadbir penterjemahan',
	'group-translationadmin-member' => '{{GENDER:$1|pentadbir penterjemahan}}',
	'grouppage-translationadmin' => '{{ns:project}}:Pentadbir penterjemahan',
	'group-centralnoticeadmin' => 'Penyelia pemberitahuan pusat',
	'group-centralnoticeadmin-member' => '{{GENDER:$1|Penyelia pemberitahuan pusat}}',
	'grouppage-centralnoticeadmin' => '{{ns:project}}:Penyelia pemberitahuan pusat',
	'group-coder' => 'Pengekod',
	'group-coder-member' => '{{GENDER:$1|pengekod}}',
	'grouppage-coder' => '{{ns:project}}:Pengekod',
	'group-inactive' => 'Pengguna tak aktif',
	'group-inactive-member' => '{{GENDER:$1|pengguna tak aktif}}',
	'grouppage-inactive' => '{{ns:project}}:Pengguna tak aktif',
	'shared-repo-name-shared' => 'Wikimedia Commons',
	'wikimedia-copyright' => 'Teks disediakan dengan <a href="//creativecommons.org/licenses/by-sa/3.0/deed.ms">Lesen Creative Commons Pengiktirafan/Perkongsian Serupa</a>; terma-terma tambahan mungkin terpakai. Lihat <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Terma-Terma Penggunaan</a> untuk butiran lanjut.',
	'wikidata-copyright' => 'Kesemua data berstruktur dari ruang nama utama dan sifat terdapat di bawah <a href="//creativecommons.org/publicdomain/zero/1.0/" title="Definition of the Creative Commons CC0 License">Lesen Creative Commons CC0</a>;
maklumat dalam ruang-ruang nama yang lain pula terdapat di bawah <a href="//creativecommons.org/licenses/by-sa/3.0/" title="Definition of the Creative Commons Attribution/Share-Alike License">Lesen Creative Commons Attribution/Share-Alike</a>;
tertakluk pada sebarang syarat tambahan.
Rujuk <a href="//wikimediafoundation.org/wiki/Terms_of_Use" title="Wikimedia Foundation Terms of Use">Syarat-Syarat Penggunaan</a> untuk butiran lanjut.',
	'wikidata-shortcopyrightwarning' => 'Dengan mengklik "{{int:wikibase-save}}", anda bersetuju dengan [//wikimediafoundation.org/wiki/Terms_of_Use syarat penggunaan] dan sudi melepaskan sumbangan anda di bawah [//creativecommons.org/publicdomain/zero/1.0/ CC0 license] tanpa boleh ditarik balik.',
	'wikimedia-copyrightwarning' => 'Dengan mengklik butang "{{int:savearticle}}", anda mempersetujui [//wikimediafoundation.org/wiki/Terms_of_Use Syarat-Syarat Penggunaan], dan bersetuju tanpa boleh menarik balik untuk melepaskan sumbangan anda di bawah [//creativecommons.org/licenses/by-sa/3.0/ Lesen CC-BY-SA 3.0] dan [//www.gnu.org/copyleft/fdl.html GFDL].
Anda bersetuju bahawa pautan hiper atau URL ialah atribusi yang memadai di bawah lesen Creative Commons.',
	'wikibase-sitelinks-wikivoyage' => 'Halaman Wikivoyage yang berpaut dengan perkara ini',
	'cant-delete-main-page' => 'Anda tidak boleh memadamkan atau memindahkan laman utama.',
	'wikimedia-translationnotifications-signup-legal' => 'Anda bersetuju bahawa dengan memberikan maklumat ini kepada Yayasan Wikimedia, kami boleh menghubungi awak berkenaan terjemahan atau perihal-perihal lain yang berkenaan dengan gerakan  Wikimedia yang kami berpendapat mempunyai kaitan dengan anda. Anda bersetuju bahawa data anda boleh disimpan di Amerika Syarikat dan tertakluk kepada [https://wikimediafoundation.org/wiki/Privacy_policy dasar privasi] kami.',
	'upload-more-photos-of-this-monument' => 'Muat naik lebih banyak gambar monumen ini',
	'extdist-branch-master' => 'induk (versi pembangunan terkini)',
	'extdist-branch-REL1_21' => '1.21 (MediaWiki stabil yang terkini)',
	'createacct-helpusername-url' => '{{ns:Project}}:Dasar_nama_pengguna',
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(tolong saya pilih)]]',
	'createacct-captcha-help-url' => '{{ns:Project}}:Permohonan akaun',
	'createacct-imgcaptcha-help' => 'Tak nampak gambar? [[{{MediaWiki:createacct-captcha-help-url}}|Mohon akaun]]',
);

/** Maltese (Malti)
 * @author Chrisportelli
 * @author Giangian15
 */
$messages['mt'] = array(
	'wikimediamessages-desc' => 'Messaġġi speċifiki tal-Wikimedia',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=mt',
	'sitesupport' => 'Donazzjonijiet',
	'tooltip-n-sitesupport' => 'Sostnina',
	'specialpages-group-contribution' => "Donazzjonijiet/Ġbir ta' fondi",
	'nstab-creator' => 'Kreatur',
	'nstab-institution' => 'Istituzzjoni',
	'nstab-sequence' => 'Sekwenza',
	'nstab-timedtext' => 'Sottotitli',
	'group-Ex_Administrator' => 'Eks-amministraturi',
	'group-Ex_Administrator-member' => 'eks-{{GENDER:$1|amministratur|amministratriċi}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Eks-amministratur',
	'group-Ex_Bureaucrat' => 'Eks-burokrati',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|eks-burokrata}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Eks-burokrati',
	'group-Image-reviewer' => "Verifikaturi ta' stampi",
	'group-Image-reviewer-member' => "{{GENDER:$1|verifikatur ta' stampi}}",
	'grouppage-Image-reviewer' => "{{ns:project}}:Verifikaturi ta' stampi",
	'group-OTRS-member' => 'Membri OTRS',
	'group-OTRS-member-member' => '{{GENDER:$1|membru OTRS}}',
	'grouppage-OTRS-member' => '{{ns:project}}:Membri OTRS',
	'group-abusefilter' => 'Edituri tal-filtru tal-abbuż',
	'group-abusefilter-member' => '{{GENDER:$1|editur tal-filtru tal-abbuż|editriċi tal-filtru tal-abbuż|editur tal-filtru tal-abbuż}}',
	'grouppage-abusefilter' => '{{ns:project}}:Edituri tal-filtri tal-abbużi',
	'group-accountcreator' => "Kreaturi ta' kontijiet",
	'group-accountcreator-member' => '{{GENDER:$1|kreatur tal-kontijiet|kreatriċi tal-kontijiet|kreatur tal-kontijiet}}',
	'grouppage-accountcreator' => '{{ns:project}}:Kreaturi tal-kontijiet',
	'group-arbcom' => 'Membri tal-kumitat arbitrarju',
	'group-arbcom-member' => '{{GENDER:$1|membru tal-kumitat tal-arbitraġġ}}',
	'grouppage-arbcom' => '{{ns:project}}:Membri tal-kumitat arbitrarju',
	'group-bigexport-member' => '{{GENDER:$1|esportatur kbir|esportatriċi kbir|esportatur kbir}}',
	'group-confirmed' => 'Utenti konfermati',
	'group-confirmed-member' => '{{GENDER:$1|utent ikkonfermat|utent ikkonfermata}}',
	'group-flood' => 'Utenti bot',
	'group-flood-member' => '{{GENDER:$1|utent bot}}',
	'grouppage-flood' => '{{ns:project}}:Utenti bot',
	'group-founder' => 'Fundaturi',
	'group-founder-member' => '{{GENDER:$1|fundatur|fundatriċi|fundatur}}',
	'grouppage-founder' => '{{ns:project}}:Fundaturi',
	'group-import' => 'Importaturi',
	'group-import-member' => '{{GENDER:$1|importatur}}',
	'grouppage-import' => '{{ns:project}}:Importaturi',
	'group-interface_editor' => 'Edituri tal-interfaċċa',
	'group-interface_editor-member' => '{{GENDER:$1|editur tal-interfaċċa}}',
	'grouppage-interface_editor' => '{{ns:project}}:Edituri tal-interfaċċa',
	'group-ipblock-exempt' => 'eżenzjonijiet tal-blokki tal-IP',
	'group-ipblock-exempt-member' => '{{GENDER:$1|eżenti mill-imblokk tal-IP}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Eżenti mill-imblukkar tal-IP',
	'group-researcher' => 'Riċerkaturi',
	'group-researcher-member' => '{{GENDER:$1|riċerkatur|riċerkatriċi}}',
	'grouppage-researcher' => '{{ns:project}}:Riċerkaturi',
	'group-rollbacker' => 'Restawraturi',
	'group-rollbacker-member' => '{{GENDER:$1|rollbacker}}',
	'grouppage-rollbacker' => '{{ns:project}}:Rollbackers',
	'group-transwiki' => 'Importaturi transwiki',
	'group-transwiki-member' => '{{GENDER:$1|importatur transwiki}}',
	'grouppage-transwiki' => '{{ns:project}}:Importaturi transwiki',
	'group-trusted' => 'Utenti fdati',
	'group-trusted-member' => '{{GENDER:$1|utent fdat|utenta fdata}}',
	'grouppage-trusted' => '{{ns:project}}:Utenti fdati',
	'group-Global_bot' => 'Bots globali',
	'group-Global_bot-member' => '{{GENDER:$1|bot globali}}',
	'group-Global_rollback' => "''Rollbackers'' globali",
	'group-Global_rollback-member' => "{{GENDER:$1|''rollbacker'' globali}}",
	'group-Global_sysops' => 'Amministraturi globali',
	'group-Global_sysops-member' => '{{GENDER:$1|amministratur globali|amministratriċi globali}}',
	'group-Ombudsmen' => 'Ombudsmen',
	'group-Ombudsmen-member' => '{{GENDER:$1|ombudsman}}',
	'group-Staff' => 'Staffs',
	'group-Staff-member' => 'membru tal-istaff',
	'group-editinterface' => 'Edituri tal-interfaċċa',
	'group-editinterface-member' => '{{GENDER:$1|editur tal-interfaċċa}}',
	'group-steward' => 'Stwetti',
	'group-steward-member' => '{{GENDER:$1|stwett}}',
	'group-sysadmin' => 'Amministraturi tas-sistema',
	'group-sysadmin-member' => '{{GENDER:$1|amministratur tas-sistema}}',
	'group-translationadmin' => 'Amministraturi tat-traduzzjoni',
	'group-translationadmin-member' => '{{GENDER:$1|amministratur tat-traduzzjonijiet|amministratriċi tat-traduzzjonijiet}}',
	'grouppage-translationadmin' => '{{ns:project}}:Amministraturi tat-traduzzjonijonijiet',
	'group-coder' => 'Programmaturi',
	'group-coder-member' => '{{GENDER:$1|programmatur}}',
	'group-inactive' => 'utenti inattivi',
	'group-inactive-member' => '{{GENDER:$1|utent inattiv|utenta inattiva}}',
	'grouppage-inactive' => '{{ns:project}}:Utenti inattivi',
	'wikimedia-copyright' => 'It-test huwa disponibbli taħt il-<a href="//creativecommons.org/licenses/by-sa/3.0/">Liċenzja Creative Commons Attribution/Share-Alike</a>;
termini addizjonali jistgħu japplikaw.
Ara t-<a href="//wikimediafoundation.org/wiki/Terms_of_Use">termini ta\' użu</a> għal aktar dettalji.',
	'wikimedia-copyrightwarning' => 'Billi tiklikkja fuq il-buttuna "{{int:savearticle}}", int taqbel mat-[//wikimediafoundation.org/wiki/Terms_of_Use termini ta\' użu], u rrevokabilment taqbel li tħalli l-kontribuzzjoni tiegħek taħt il-liċenzja [//creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] u l-[//www.gnu.org/copyleft/fdl.html GFDL].
Inti taqbel li bħala minimu tiġi kreditat minn utenti oħra permezz ta\' ħolqa jew URL lejn il-paġna li inti qed tikkontribwixxi abbażi tal-liċenzja Creative Commons.',
	'cant-delete-main-page' => 'Ma tistax tħassar jew tmexxi l-paġna prinċipali.',
	'wikimedia-translationnotifications-signup-legal' => "Inti taqbel li billi tipprovid din l-informazzjoni lill-Fondazzjoni Wikimedia aħna nistgħu nikkuntatjawk rigward traduzzjonijiet jew suġġetti oħra relatati mal-moviment tal-Wikimedia li naħsbu li jistgħu jinteressawk. Inti taqbel li d-dejta tiegħek tista' tiġi miżmuma fl-Istati Uniti tal-Amerika u hi suġġetta għall-[https://wikimediafoundation.org/wiki/Privacy_policy politika tal-privatezza] tagħna.",
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(għini nagħżel)]]',
	'createacct-imgcaptcha-help' => 'Ma tistax tara l-istampa? [[{{MediaWiki:createacct-captcha-help-url}}|Itlob kont]]',
);

/** Mirandese (Mirandés)
 * @author Cecílio
 * @author MCruz
 */
$messages['mwl'] = array(
	'sitesupport' => 'Donaçones',
	'tooltip-n-sitesupport' => 'Ajuda-mos',
	'wikimedia-copyright' => 'Este testo ye çponeblizado ne ls termos de la lhicença <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike License</a>;
puode star sujeito a cundiçones adecionales.
Consulta las <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Cundiçones de Uso</a> pa mais detailhes.',
);

/** Behase Mentawei (Behase Mentawei)
 * @author Päge bintën
 */
$messages['mwv'] = array(
	'tooltip-n-sitesupport' => 'Dukung kami',
);

/** Burmese (မြန်မာဘာသာ)
 * @author Hakka
 * @author Hintha
 */
$messages['my'] = array(
	'sitesupport' => 'လှု​ဒါန်း​မှု​',
	'tooltip-n-sitesupport' => 'အားပေးပါ',
);

/** Erzya (эрзянь)
 * @author Botuzhaleny-sodamo
 * @author Sura
 */
$messages['myv'] = array(
	'sitesupport' => 'Лезксйармаконь максома',
	'tooltip-n-sitesupport' => 'Макста миненек нежедематарка',
	'group-confirmed' => 'Кемекстань сёрмадыцят',
	'group-confirmed-member' => 'кемекстань сёрмадыця', # Fuzzy
	'grouppage-confirmed' => '{{ns:project}}:Кемекстань сёрмадыцят',
	'group-founder' => 'Лувонь путыйть',
	'group-founder-member' => 'лувонь путый', # Fuzzy
	'grouppage-founder' => '{{ns:project}}:Лувонь путыйть',
	'group-import-member' => 'тевень совавтый', # Fuzzy
	'grouppage-import' => '{{ns:project}}:Тевень совавтыйть',
	'group-editinterface' => 'Интерчамань витнийть-петнийть',
	'group-editinterface-member' => 'интерчамань витний-петний', # Fuzzy
	'group-steward' => 'Туросторт',
	'group-steward-member' => 'туростор', # Fuzzy
	'grouppage-steward' => 'm:Туросторт',
	'group-sysadmin' => 'Системань администраторт',
);

/** Mazanderani (مازِرونی)
 * @author Mehdi
 * @author Spacebirdy
 * @author محک
 */
$messages['mzn'] = array(
	'sitesupport' => 'پول هدائن',
	'wikimedia-copyright' => "کل نوشتارون <a href='http://en.wikipedia.org/wiki/Wikipedia:Text_of_Creative_Commons_Attribution-ShareAlike_3.0_Unported_License'>موجوز Creative Commons Attribution/Share-Alike</a> اساس شمه دسترس درنه؛ مومکنه ای بعدن اته سری نو شرط و شروط ایضافه بوه. اگه اطلاعات ویشتری خواننی <a href='http://wikimediafoundation.org/wiki/Terms_of_Use'>قوانین و موقررات ایستفاده</a> ره هارشین.",
);

/** Nauru (Dorerin Naoero)
 */
$messages['na'] = array(
	'sitesupport' => 'Eadu a me',
);

/** Nahuatl (Nāhuatl)
 * @author Fluence
 * @author Ricardo gs
 * @author Teòtlalili
 */
$messages['nah'] = array(
	'wikimediamessages-desc' => 'San Wikimedia ìtlanawatiliswàn',
	'sitesupport' => 'Tēyocatiliztli',
	'tooltip-n-sitesupport' => 'Xitèchmopalèwilìkàn',
	'grouppage-eliminator' => '{{ns:project}}:Tlaìxpôpolowàni',
	'group-filemover-member' => '{{GENDER:$1|tlahcuilōlolīniāni}}',
	'grouppage-filemover' => '{{ns:project}}:Tlaèwalîkuàniàni',
	'grouppage-flood' => '{{ns:project}}:Tlatepostekitkàuhtekìuhtiànimë',
	'group-founder-member' => '{{GENDER:$1|tlatzintiāni}}',
	'group-patroller' => 'Tlapîpiànimë',
	'group-Staff' => 'Olōlli',
	'group-Staff-member' => 'Olōllācatl',
);

/** Min Nan Chinese (Bân-lâm-gú)
 */
$messages['nan'] = array(
	'sitesupport' => 'Kià-hù',
);

/** Neapolitan (Nnapulitano)
 * @author Cryptex
 */
$messages['nap'] = array(
	'sitesupport' => 'Donazzione',
);

/** Norwegian Bokmål (norsk bokmål)
 * @author Danmichaelo
 * @author Event
 * @author Finnrind
 * @author Haakon K
 * @author Laaknor
 * @author Nghtwlkr
 * @author Stigmj
 */
$messages['nb'] = array(
	'wikimediamessages-desc' => 'Wikimedia-spesifikke beskjeder',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=nb',
	'sitesupport' => 'Donasjoner',
	'tooltip-n-sitesupport' => 'Støtt oss',
	'specialpages-group-contribution' => 'Bidrag/Innsamling',
	'nstab-creator' => 'Opprettet av',
	'nstab-institution' => 'Institusjon',
	'nstab-sequence' => 'Rekkefølge',
	'nstab-timedtext' => 'Tidsbestemt tekst',
	'group-Ex_Administrator' => 'Tidligere administratorer',
	'group-Ex_Administrator-member' => '{{GENDER:$1|tidligere administrator}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Tidligere administratorer',
	'group-Ex_Bureaucrat' => 'Tidligere byråkrater',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|tidligere byråkrat}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Tidligere byråkrater',
	'group-Image-reviewer' => 'Bildekontrollører',
	'group-Image-reviewer-member' => '{{GENDER:$1|bildereviderer}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:Bildekontrollører',
	'group-OTRS-member' => 'OTRS-medlemmer',
	'group-OTRS-member-member' => '{{GENDER:$1|OTRS-medlem}}',
	'grouppage-OTRS-member' => '{{ns:project}}:OTRS-medlemmer',
	'group-abusefilter' => 'Redaktører av misbruksfilteret',
	'group-abusefilter-member' => '{{GENDER:$1|redaktør for misbruksfilteret}}',
	'grouppage-abusefilter' => '{{ns:project}}:Redaktører av misbruksfilteret',
	'group-accountcreator' => 'Kontoopprettere',
	'group-accountcreator-member' => '{{GENDER:$1|kontooppretter}}',
	'grouppage-accountcreator' => '{{ns:project}}:Kontoopprettere',
	'group-arbcom' => 'Meglingskomitémedlemmer',
	'group-arbcom-member' => '{{GENDER:$1|medlem av forlikskomiteen}}',
	'grouppage-arbcom' => '{{ns:project}}:Meglingskomitémedlemmer',
	'group-autopatrolled' => 'Autopatruljerte',
	'group-autopatrolled-member' => '{{GENDER:$1|autopatruljør}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Patruljering',
	'group-autoreviewer' => 'Autogranskede',
	'group-autoreviewer-member' => '{{GENDER:$1|selvreviderer}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Automatisk gransket',
	'group-bigexport' => 'Stor eksport',
	'group-bigexport-member' => '{{GENDER:$1|stor eksportør}}',
	'grouppage-bigexport' => '{{ns:project}}:Store eksportører',
	'group-botadmin' => 'Roboter med administratorrettigheter',
	'group-botadmin-member' => '{{GENDER:$1|robot med administratorrettigheter}}',
	'grouppage-botadmin' => '{{ns:project}}:Roboter med administratorrettigheter',
	'group-confirmed' => 'Bekreftede brukere',
	'group-confirmed-member' => '{{GENDER:$1|bekreftet bruker}}',
	'grouppage-confirmed' => '{{ns:project}}:Bekreftede brukere',
	'group-editprotected' => 'Redaktører av beskyttede sider',
	'group-editprotected-member' => '{{GENDER:$1|redaktør av beskyttede sider}}',
	'grouppage-editprotected' => '{{ns:project}}:Redaktører av beskyttede sider',
	'group-eliminator' => 'Eliminatorer',
	'group-eliminator-member' => '{{GENDER:$1|eliminator}}',
	'grouppage-eliminator' => '{{ns:project}}:Eliminator',
	'group-filemover' => 'Filflyttere',
	'group-filemover-member' => '{{GENDER:$1|filflytter}}',
	'grouppage-filemover' => '{{ns:project}}:Filflyttere',
	'group-flood' => 'Bot-brukere',
	'group-flood-member' => '{{GENDER:$1|botbruker}}',
	'grouppage-flood' => '{{ns:project}}:Bot-brukere',
	'group-founder' => 'Grunnleggere',
	'group-founder-member' => '{{GENDER:$1|grunnlegger}}',
	'grouppage-founder' => '{{ns:project}}:Grunnleggere',
	'group-import' => 'Importører',
	'group-import-member' => '{{GENDER:$1|importør}}',
	'grouppage-import' => '{{ns:project}}:Importører',
	'group-interface_editor' => 'Bidragsytere til grensesnitt',
	'group-interface_editor-member' => '{{GENDER:$1|grensesnittredakør}}',
	'grouppage-interface_editor' => '{{ns:project}}:Bidragsytere til grensesnitt',
	'group-ipblock-exempt' => 'Unntatte fra IP-blokkering',
	'group-ipblock-exempt-member' => '{{GENDER:$1|unntatt fra IP-blokkering}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Unntatte fra IP-blokkering',
	'group-patroller' => 'Patruljører',
	'group-patroller-member' => '{{GENDER:$1|patruljør}}',
	'grouppage-patroller' => '{{ns:project}}:Patruljører',
	'group-researcher' => 'Forskere',
	'group-researcher-member' => '{{GENDER:$1|forsker}}',
	'grouppage-researcher' => '{{ns:project}}:Forskere',
	'group-rollbacker' => 'Tilbakestillere',
	'group-rollbacker-member' => '{{GENDER:$1|tilbakestiller}}',
	'grouppage-rollbacker' => '{{ns:project}}:Tilbakestillere',
	'group-transwiki' => 'Transwiki-importører',
	'group-transwiki-member' => '{{GENDER:$1|transwikiimportør}}',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki-importører',
	'group-trusted' => 'Betrodde brukere',
	'group-trusted-member' => '{{GENDER:$1|betrodd bruker}}',
	'grouppage-trusted' => '{{ns:project}}: Betrodde brukere',
	'group-Global_bot' => 'Globale roboter',
	'group-Global_bot-member' => '{{GENDER:$1|global robot}}',
	'group-Global_rollback' => 'Globale tilbakestillere',
	'group-Global_rollback-member' => '{{GENDER:$1|global tilbakestiller}}',
	'grouppage-Global_rollback' => 'm:Global rollback/nb',
	'group-Global_sysops' => 'Global sysop',
	'group-Global_sysops-member' => '{{GENDER:$1|global administrator}}',
	'group-Ombudsmen' => 'Ombudsmenn',
	'group-Ombudsmen-member' => '{{GENDER:$1|ombudsmann}}',
	'group-Staff' => 'Ansatte',
	'group-Staff-member' => 'ansatt',
	'group-editinterface' => 'Grensesnittredigerer',
	'group-editinterface-member' => '{{GENDER:$1|grensesnittredaktør}}',
	'group-steward' => 'Forvaltere',
	'group-steward-member' => '{{GENDER:$1|forvalter}}',
	'grouppage-steward' => 'm:Stewards/nb',
	'group-sysadmin' => 'Systemadministratorer',
	'group-sysadmin-member' => '{{GENDER:$1|systemadministrator}}',
	'group-translationadmin' => 'Oversettelsesadministratorer',
	'group-translationadmin-member' => '{{GENDER:$1|oversettelsesadministrator}}',
	'grouppage-translationadmin' => '{{ns:project}}:Oversettelsesadministratorer',
	'group-coder' => 'Kodere',
	'group-coder-member' => '{{GENDER:$1|programmerer}}',
	'group-inactive' => 'Inaktive brukere',
	'group-inactive-member' => '{{GENDER:$1|inaktiv bruker}}',
	'grouppage-inactive' => '{{ns:project}}:Inaktive brukere',
	'wikimedia-copyright' => 'Innholdet er tilgjengelig under <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons-lisensen Navngivelse-Del på samme vilkår</a>, men ytterligere betingelser kan gjelde. Se <a href="//wikimediafoundation.org/wiki/Terms_of_Use">bruksvilkårene</a> for detaljer.',
	'wikimedia-copyrightwarning' => 'Ved å trykke på «{{int:savearticle}}»-knappen, aksepterer du [//wikimediafoundation.org/wiki/Terms_of_Use bruksvilkårene], og samtykker ugjenkallelig til å utgi ditt bidrag under [//creativecommons.org/licenses/by-sa/3.0/deed.no Creative Commons-lisensen Navngivelse-Del på samme vilkår 3.0] og [//www.gnu.org/copyleft/fdl.html GFDL]. Du godtar at en hyperlenke eller URL utgjør tilstrekkelig navngivelse under Creative Commons-lisensen.',
	'cant-delete-main-page' => 'Du kan ikke slette eller flytte hovedsiden.',
	'createacct-helpusername-url' => '{{ns:Help}}:Logge_inn#Brukernavn', # Fuzzy
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(hjelp meg å velge)]]',
	'createacct-imgcaptcha-help' => '[[{{MediaWiki:createacct-captcha-help-url}}|Har du problemer med å se bildet?]]',
);

/** Low German (Plattdüütsch)
 * @author Slomox
 * @author לערי ריינהארט
 */
$messages['nds'] = array(
	'wikimediamessages-desc' => 'Systemnarichten för Wikimedia',
	'sitesupport' => 'Spennen',
	'tooltip-n-sitesupport' => 'Ünnerstütt uns',
	'specialpages-group-contribution' => 'Spennen/Fundraiser',
	'group-abusefilter' => 'Missbruukfilter-Autorn',
	'group-abusefilter-member' => 'Missbruukfilter-Autor', # Fuzzy
	'grouppage-abusefilter' => '{{ns:project}}:Missbruukfilter-Autorn',
	'group-accountcreator' => 'Brukerkonten-Opstellers',
	'group-accountcreator-member' => 'Brukerkonten-Opsteller', # Fuzzy
	'grouppage-accountcreator' => '{{ns:project}}:Brukerkonten-Opstellers',
	'group-autopatrolled-member' => 'Autopatroller', # Fuzzy
	'grouppage-autopatrolled' => '{{ns:project}}:Autopatrollers',
	'group-bigexport' => 'Grootexportörs',
	'group-bigexport-member' => 'Grootexportör', # Fuzzy
	'grouppage-bigexport' => '{{ns:project}}:Grootexportörs',
	'group-founder' => 'Grünners',
	'group-founder-member' => 'Grünner', # Fuzzy
	'grouppage-founder' => '{{ns:project}}:Grünners',
	'group-import' => 'Importörs',
	'group-import-member' => 'Importör', # Fuzzy
	'grouppage-import' => '{{ns:project}}:Importörs',
	'group-ipblock-exempt' => 'IP-Sperr-Utnahmen',
	'group-ipblock-exempt-member' => 'IP-Sperr-Utnahm', # Fuzzy
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP-Sperr-Utnahm',
	'group-rollbacker' => 'Trüchsetters',
	'group-rollbacker-member' => 'Trüchsetter', # Fuzzy
	'grouppage-rollbacker' => '{{ns:project}}:Trüchsetters',
	'group-transwiki' => 'Transwiki-Importörs',
	'group-transwiki-member' => 'Transwiki-Importör', # Fuzzy
	'grouppage-transwiki' => '{{ns:project}}:Transwiki-Importörs',
	'group-Global_bot' => 'Globale Bots',
	'group-Global_bot-member' => 'Global Bot', # Fuzzy
	'group-Global_rollback' => 'Globale Trüchsetters',
	'group-Global_rollback-member' => 'Global Trüchsetter', # Fuzzy
	'group-Ombudsmen' => 'Ombudslüüd',
	'group-Ombudsmen-member' => 'Ombudsmann', # Fuzzy
	'group-Staff' => 'Mitarbeiders',
	'group-Staff-member' => 'Mitarbeider',
	'group-steward' => 'Stewards',
	'group-steward-member' => 'Steward', # Fuzzy
	'group-sysadmin' => 'System-Administraters',
	'group-sysadmin-member' => 'System-Administrater', # Fuzzy
	'group-coder' => 'Programmerers',
	'group-coder-member' => 'Programmerer', # Fuzzy
	'group-inactive' => 'Inaktive Brukers',
	'group-inactive-member' => 'Inaktiven Bruker', # Fuzzy
	'grouppage-inactive' => '{{ns:project}}:Inaktive Brukers',
);

/** Low Saxon (Netherlands) (Nedersaksies)
 * @author Servien
 * @author לערי ריינהארט
 */
$messages['nds-nl'] = array(
	'wikimediamessages-desc' => 'Systeemteksten veur Wikimedia',
	'sitesupport-url' => 'https://donate.wikimedia.org/',
	'sitesupport' => 'Steun {{SITENAME}}',
	'tooltip-n-sitesupport' => 'Gef oons geald',
	'group-abusefilter' => 'misbruukfilterredakteuren',
	'group-accountcreator' => 'gebrukeranmakers',
	'group-accountcreator-member' => '{{GENDER:$1|gebrukeranmaker}}',
	'grouppage-accountcreator' => '{{ns:project}}:Gebrukeranmakers',
	'group-autopatrolled' => 'automatiese kontroleurs',
	'group-autopatrolled-member' => '{{GENDER:$1|automatiese kontroleur}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Automatiese kontroleurs',
	'group-autoreviewer' => 'auto-eindredaksie',
	'group-bigexport' => 'grote uutvoerders',
	'group-confirmed' => 'bevestigden gebrukers',
	'group-confirmed-member' => '{{GENDER:$1|bevestigden gebruker}}',
	'group-flood' => 'botgebrukers',
	'group-flood-member' => '{{GENDER:$1|botgebruker}}',
	'group-founder' => 'grondlegers',
	'group-founder-member' => '{{GENDER:$1|oprichter}}',
	'grouppage-founder' => '{{ns:project}}:Grondlegers',
	'group-import' => 'invoerders',
	'group-import-member' => '{{GENDER:$1|invoerder}}',
	'grouppage-import' => '{{ns:project}}:Invoerders',
	'group-ipblock-exempt' => 'uutzunderingen van IP-adresblokkeringen',
	'group-ipblock-exempt-member' => '{{GENDER:$1|uutzundering van IP-adresblokkeringen}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Uutzunderingen van IP-adresblokkeringen',
	'group-patroller' => 'kontroleurs',
	'group-patroller-member' => '{{GENDER:$1|kontroleur}}',
	'group-rollbacker' => 'weerummedreiers',
	'group-rollbacker-member' => '{{GENDER:$1|weerummedreier}}',
	'grouppage-rollbacker' => '{{ns:project}}:Weerummedreiers',
	'group-transwiki' => 'transwiki-invoerders',
	'group-transwiki-member' => '{{GENDER:$1|transwiki-invoerder}}',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki-invoerders',
	'group-Global_bot' => 'globale bots',
	'group-Global_bot-member' => '{{GENDER:$1|globale bot}}',
	'group-Global_rollback' => 'globale weerummedreiers',
	'group-Global_rollback-member' => '{{GENDER:$1|globale weerummedreier}}',
	'group-Global_sysops-member' => '{{GENDER:$1|globale beheerder}}',
	'group-Ombudsmen' => 'ombudsluui',
	'group-Ombudsmen-member' => '{{GENDER:$1|ombudsman}}',
	'group-Staff' => 'staf',
	'group-Staff-member' => 'staflid',
	'group-steward' => 'rechtenbeheerders',
	'group-steward-member' => '{{GENDER:$1|rechtenbeheerder}}',
	'grouppage-steward' => '{{ns:project}}:Rechtenbeheerder',
	'group-sysadmin' => 'systeembeheerder',
	'group-sysadmin-member' => '{{GENDER:$1|systeembeheerder}}',
	'group-coder' => 'programmeurs',
	'group-coder-member' => '{{GENDER:$1|programmeur}}',
	'group-inactive' => 'inaktieve gebrukers',
	'group-inactive-member' => '{{GENDER:$1|inaktieve gebruker}}',
	'grouppage-inactive' => '{{ns:project}}:Inaktieve gebrukers',
	'wikimedia-copyright' => 'De tekste is beschikbaor onder de lisensie <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Naamvermelding/Gelieke delen</a>.
t Kan ween dat nog meer veurweerden van toepassing bin.
Bekiek de <a href="//wikimediafoundation.org/wiki/Terms_of_use">algemene veurweerden</a> veur meer informasie.',
	'wikimedia-copyrightwarning' => 'Deur op de knoppe "{{int:savearticle}}" te klikken, stem je in mit de [//wikimediafoundation.org/wiki/Gebruiksvoorwaarden Gebruuksveurweerden], en je stemmen onherreupelik in mit t vriegeven van joew biedrage onder de lisensie [//creativecommons.org/licenses/by-sa/3.0/ Creative Commons Naamvermelding/Gelieke delen] en de [//www.gnu.org/copyleft/fdl.html GFDL].
Je stemmen dermee in dat n verwiezing of n aander deurklikpunt zat naamsvermelding is um an de Creative Commons-lisensie te voldoon.',
	'createacct-imgcaptcha-help' => "Ku'j de aofbeelding niet zien? [[{{MediaWiki:createacct-captcha-help-url}}|Vraag dan n gebruker an]]",
);

/** Nepali (नेपाली)
 * @author Bhawani Gautam
 * @author सरोज कुमार ढकाल
 */
$messages['ne'] = array(
	'sitesupport' => 'चन्दा',
	'tooltip-n-sitesupport' => 'हामीलाई समर्थन गर्नुहोस्',
	'nstab-creator' => 'सर्जक',
	'nstab-institution' => 'संस्था',
	'nstab-sequence' => 'क्रममा',
	'nstab-timedtext' => 'समयबद्ध पाठ',
	'group-Image-reviewer' => 'तस्बिर पुनरावलोकनकर्ताहरु',
	'group-accountcreator' => 'खाता खोल्नेहरु',
	'group-autopatrolled' => 'स्वत गस्तीगर्नेहरु',
	'group-autoreviewer' => 'स्वत: पुनरावलोकन गर्नेहरु',
	'group-bigexport' => 'ठूला निर्यातकर्ताहरु',
	'group-confirmed' => 'निश्चित गरिएका प्रयोगकर्ता',
	'group-editprotected' => 'सुरक्षित पृष्ठ सम्पादकहरु',
	'group-eliminator' => 'हटाउनेहरु',
	'group-filemover' => 'फाइल सार्नेहरु',
	'group-flood' => 'बोट प्रयोगकर्ताहरु',
	'group-founder' => 'संस्थापकहरु',
	'group-import' => 'आयातकर्ताहरु',
	'group-interface_editor' => 'अन्तरमोहडा सम्पादकहरु',
	'group-ipblock-exempt' => 'IP रोक माफीहरु',
	'group-patroller' => 'गस्तीकर्ताहरु',
	'group-researcher' => 'खोजकर्ताहरु',
	'group-rollbacker' => 'पूर्वरुपमा फर्काउनेहरु',
	'group-transwiki' => 'ट्रान्स विकि आयातकर्ताहरु',
	'group-trusted' => 'विश्वसनीय प्रयोगकर्ताहरु',
	'group-coder' => 'कोडलेख्ने व्यक्तिहरु',
	'group-coder-member' => 'कोडलेख्ने व्यक्ति', # Fuzzy
	'group-inactive' => 'निष्क्रिय प्रयोगकर्ताहरु',
	'group-inactive-member' => 'निष्क्रिय प्रयोगकर्ता', # Fuzzy
);

/** Newari (नेपाल भाषा)
 * @author Eukesh
 */
$messages['new'] = array(
	'sitesupport' => 'दान',
);

/** Niuean (ko e vagahau Niuē)
 * @author Jose77
 */
$messages['niu'] = array(
	'sitesupport' => 'Tupe fakalofa mo e lagomatai',
);

/** Dutch (Nederlands)
 * @author Mwpnl
 * @author Niels
 * @author Pahles
 * @author Romaine
 * @author SPQRobin
 * @author Saruman
 * @author Siebrand
 * @author Troefkaart
 * @author Tvdm
 */
$messages['nl'] = array(
	'wikimediamessages-desc' => 'Berichten voor Wikimedia',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=nl',
	'sitesupport' => 'Donaties',
	'tooltip-n-sitesupport' => 'Ondersteun ons financieel',
	'specialpages-group-contribution' => 'Giften/Fondsenwervingsactie',
	'nstab-creator' => 'Auteur',
	'nstab-institution' => 'Instelling',
	'nstab-sequence' => 'Volgorde',
	'nstab-timedtext' => 'Ondertitel',
	'group-Ex_Administrator' => 'voormalige beheerders',
	'group-Ex_Administrator-member' => '{{GENDER:$1|voormalige beheerder}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Voormalige beheerders',
	'group-Ex_Bureaucrat' => 'voormalige bureaucraten',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|voormalige bureaucraat}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:voormalige bureaucraten',
	'group-Image-reviewer' => 'afbeeldingencontroleurs',
	'group-Image-reviewer-member' => 'afbeeldingencontroleur',
	'grouppage-Image-reviewer' => '{{ns:project}}:Afbeeldingencontroleurs',
	'group-OTRS-member' => 'OTRS-leden',
	'group-OTRS-member-member' => '{{GENDER:$1|OTRS-lid}}',
	'grouppage-OTRS-member' => '{{ns:project}}:OTRS-leden',
	'group-abusefilter' => 'misbruikfilterredacteuren',
	'group-abusefilter-member' => '{{GENDER:$1|misbruikfilterredacteur|misbruikfilterredactrice}}',
	'grouppage-abusefilter' => '{{ns:project}}:Misbruikfilterredacteuren',
	'group-accountcreator' => 'gebruikersaanmakers',
	'group-accountcreator-member' => '{{GENDER:$1|gebruikersaanmaker|gebruikersaanmaakster}}',
	'grouppage-accountcreator' => '{{ns:project}}:Gebruikersaanmakers',
	'group-arbcom' => 'arbitragecommissieleden',
	'group-arbcom-member' => 'arbitragecommissielid',
	'grouppage-arbcom' => '{{ns:project}}:Arbitragecommissieleden',
	'group-autopatrolled' => 'autopatrollers',
	'group-autopatrolled-member' => 'autopatroller',
	'grouppage-autopatrolled' => '{{ns:project}}:Autopatrollers',
	'group-autoreviewer' => 'autoeindredactie',
	'group-autoreviewer-member' => 'autoeindredactie',
	'grouppage-autoreviewer' => '{{ns:project}}:Autoeindredactie',
	'group-bigexport' => 'grote exporteurs',
	'group-bigexport-member' => 'grote exporteur',
	'grouppage-bigexport' => '{{ns:project}}:Grote exporteurs',
	'group-botadmin' => 'robots met beheerdersrechten',
	'group-botadmin-member' => '{{GENDER:$1|robot met beheerdersrechten}}',
	'grouppage-botadmin' => '{{ns:project}}:Robots met beheerdersrechten',
	'group-confirmed' => 'bevestigde gebruikers',
	'group-confirmed-member' => '{{GENDER:$1|bevestigde gebruiker|bevestigde gebruikster}}',
	'grouppage-confirmed' => '{{ns:project}}:Bevestigde gebruikers',
	'group-editprotected' => "bewerkers van beveiligde pagina's",
	'group-editprotected-member' => "{{GENDER:$1|bewerker van beveiligde pagina's|bewerkster van beveiligde pagina's}}",
	'grouppage-editprotected' => "{{ns:project}}:Bewerkers van beveiligde pagina's",
	'group-eliminator' => 'opruimers',
	'group-eliminator-member' => 'opruimer',
	'grouppage-eliminator' => '{{ns:project}}:Opruimer', # Fuzzy
	'group-filemover' => 'bestandshernoemers',
	'group-filemover-member' => 'bestandshernoemer',
	'grouppage-filemover' => '{{ns:project}}:Bestandshernoemers',
	'group-flood' => 'botgebruikers',
	'group-flood-member' => '{{GENDER:$1|robotgebruiker}}',
	'grouppage-flood' => '{{ns:project}}:Botgebruikers',
	'group-founder' => 'oprichters',
	'group-founder-member' => '{{GENDER:$1|oprichter|oprichtster}}',
	'grouppage-founder' => '{{ns:project}}:Grondleggers',
	'group-import' => 'importeurs',
	'group-import-member' => 'importeur',
	'grouppage-import' => '{{ns:project}}:Importeurs',
	'group-interface_editor' => 'interfacebewerkers',
	'group-interface_editor-member' => '{{GENDER:$1|interfacebewerker|interfacebewerkster}}',
	'grouppage-interface_editor' => '{{ns:project}}:Interfacebewerkers',
	'group-ipblock-exempt' => 'uitgezonderden van IP-adresblokkades',
	'group-ipblock-exempt-member' => '{{GENDER:$1|uitgezonderde van IP-adresblokkades}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Uitgezonderden van IP-adresblokkades',
	'group-patroller' => 'controleurs',
	'group-patroller-member' => '{{GENDER:$1|controleur}}',
	'grouppage-patroller' => '{{ns:project}}:Controleurs',
	'group-researcher' => 'onderzoekers',
	'group-researcher-member' => '{{GENDER:$1|onderzoeker|onderzoekster}}',
	'grouppage-researcher' => '{{ns:project}}:Onderzoekers',
	'group-rollbacker' => 'terugdraaiers',
	'group-rollbacker-member' => '{{GENDER:$1|terugdraaier}}',
	'grouppage-rollbacker' => '{{ns:project}}:Terugdraaiers',
	'group-transwiki' => 'transwiki-importeurs',
	'group-transwiki-member' => '{{GENDER:$1|transwiki-importeur}}',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki-importeurs',
	'group-trusted' => 'vertrouwde gebruikers',
	'group-trusted-member' => '{{GENDER:$1|vertrouwde gebruiker}}',
	'grouppage-trusted' => '{{ns:project}}:Vertrouwde gebruikers',
	'group-uploader' => 'uploaders',
	'group-uploader-member' => 'uploader', # Fuzzy
	'grouppage-uploader' => '{{ns:project}}:Uploaders',
	'group-Global_bot' => 'globale bots',
	'group-Global_bot-member' => '{{GENDER:$1|globale robot}}',
	'group-Global_rollback' => 'globale terugdraaiers',
	'group-Global_rollback-member' => '{{GENDER:$1|globale terugdraaier}}',
	'grouppage-Global_rollback' => 'm:Global rollback/nl',
	'group-Global_sysops' => 'globale beheerders',
	'group-Global_sysops-member' => '{{GENDER:$1|globale beheerder}}',
	'group-Ombudsmen' => 'ombudsmannen',
	'group-Ombudsmen-member' => '{{GENDER:$1|ombudsman|ombudsvrouw}}',
	'group-Staff' => 'staf',
	'group-Staff-member' => '{{GENDER:$1|staflid}}',
	'group-editinterface' => 'gebruikersinterfacebewerkers',
	'group-editinterface-member' => '{{GENDER:$1|gebruikersinterfacebewerker}}',
	'group-steward' => 'stewards',
	'group-steward-member' => '{{GENDER:$1|steward}}',
	'grouppage-steward' => 'm:Stewards/nl',
	'group-sysadmin' => 'systeembeheerders',
	'group-sysadmin-member' => '{{GENDER:$1|systeembeheerder}}',
	'group-API_High_Limit_Requestor' => 'aanvragers voor hoge API-limieten',
	'group-API_High_Limit_Requestor-member' => '{{GENDER:$1|aanvrager voor hoge API-limiet}}',
	'group-Indic_Bots' => 'bots uit India',
	'group-Indic_Bots-member' => '{{GENDER:$1|bot uit India}}',
	'group-New_wikis_importer' => "importeurs voor nieuwe wiki's",
	'group-New_wikis_importer-member' => "{{GENDER:$1|importeur voor nieuwe wiki's}}",
	'group-global-ipblock-exempt' => 'uitgezonderden van globale IP-adresblokkades',
	'group-global-ipblock-exempt-member' => '{{GENDER:$1|uitgezonderde van globale IP-adresblokkades}}',
	'group-recursive-export' => 'recursief exporteurs',
	'group-recursive-export-member' => '{{GENDER:$1|recursief exporteur}}',
	'group-translationadmin' => 'Vertalingenbeheerders',
	'group-translationadmin-member' => '{{GENDER:$1|vertalingenbeheerder}}',
	'grouppage-translationadmin' => '{{ns:project}}:Vertalingenbeheerders',
	'group-centralnoticeadmin' => 'Beheerders van centralnotice',
	'group-centralnoticeadmin-member' => '{{GENDER:$1|centralnoticebeheerder}}',
	'grouppage-centralnoticeadmin' => '{{ns:project}}:Centralnoticebeheerders',
	'group-coder' => 'programmeurs',
	'group-coder-member' => '{{GENDER:$1|programmeur}}',
	'grouppage-coder' => '{{ns:project}}:Programmeur',
	'group-inactive' => 'inactieve gebruikers',
	'group-inactive-member' => '{{GENDER:$1|inactieve gebruiker}}',
	'grouppage-inactive' => '{{ns:project}}:Inactieve gebruikers',
	'wikimedia-copyright' => 'De tekst is beschikbaar onder de licentie <a href="//creativecommons.org/licenses/by-sa/3.0/deed.nl">Creative Commons Naamsvermelding-Gelijk delen</a>.
Er kunnen aanvullende voorwaarden van toepassing zijn.
Zie de <a href="//wikimediafoundation.org/wiki/Gebruiksvoorwaarden">Gebruiksvoorwaarden</a> voor meer informatie.',
	'wikidata-copyright' => 'Alle gestructureerde gegevens uit de hoofdnaamruimte en de naamruimte Eigenschap zijn beschikbaar onder de <a href="//creativecommons.org/publicdomain/zero/1.0/" title="Definitie van de licentie Creative Commons CC0">licentie Creative Commons CC0</a>;
tekst in de andere naamruimten is beschikbaar onder de <a href="//creativecommons.org/licenses/by-sa/3.0/" title="Definitie van de licentie Creative Commons Attribution/Share-Alike">licentie Creative Commons Attribution/Share-Alike</a>;
er kunnen extra voorwaarden van toepassing zijn.
Zie <a href="//wikimediafoundation.org/wiki/Terms_of_Use" title="Wikimedia Foundation Gebruiksvoorwaarden">Gebruiksvoorwaarden</a> voor details.',
	'wikidata-shortcopyrightwarning' => 'Door te klikken op "{{int:wikibase-save}}", gaat u akkoord met de [//wikimediafoundation.org/wiki/Terms_of_Use gebruiksvoorwaarden], en gaat u onomkeerbaar akkoord met het vrijgeven van uw bijdrage onder de licentie [//creativecommons.org/publicdomain/zero/1.0/ CC0].',
	'wikimedia-copyrightwarning' => 'Door op de knop "{{int:savearticle}}" te klikken, gaat u akkoord met de [//wikimediafoundation.org/wiki/Gebruiksvoorwaarden Gebruiksvoorwaarden] en gaat u onherroepelijk akkoord met het vrijgeven van uw bijdrage onder de licentie [//creativecommons.org/licenses/by-sa/3.0/deed.nl Creative Commons Naamsvermelding/Gelijk delen] en de [//nl.wikisource.org/wiki/Nederlandstalige_tekst_van_de_GNU-licentie_voor_vrije_documentatie GFDL].
U gaat ermee akkoord dat een hyperlink of URL voldoende naamsvermelding is om aan de Creative Commons-licentie te voldoen.',
	'wikibase-sitelinks-wikivoyage' => "Pagina's op Wikivoyage die gekoppeld zijn aan dit item",
	'cant-delete-main-page' => 'U kunt de hoofdpagina niet verwijderen of hernoemen.',
	'wikimedia-translationnotifications-signup-legal' => 'Door deze gegevens beschikbaar te stellen aan de Wikimedia Foundation, geeft u ons toestemming om contact met u op te nemen over vertalingen en andere onderwerpen gerelateerd aan de Wikimediabeweging waarvan wij denken dat ze uw interesse hebben. U stemt in met het opslaan van uw gegevens in de Verenigde Staten van Amerika en dat uw gegevens onder ons [https://wikimediafoundation.org/wiki/Privacy_policy privacybeleid] vallen.',
	'upload-more-photos-of-this-monument' => 'Meer afbeeldingen van dit monument uploaden',
	'extdist-branch-master' => 'master (laatste ontwikkelversie)',
	'extdist-branch-REL1_21' => '1.21 (laatste stabiele versie van MediaWiki)',
	'createacct-helpusername-url' => '{{ns:Project}}:Gebruikersnamenbeleid',
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(help me kiezen)]]',
	'createacct-captcha-help-url' => '{{ns:Project}}:Gebruiker_aanvragen',
	'createacct-imgcaptcha-help' => 'Kunt u de afbeelding niet zien? [[{{MediaWiki:createacct-captcha-help-url}}|Vraag dan een gebruiker aan]]',
);

/** Nederlands (informeel)‎ (Nederlands (informeel)‎)
 * @author Siebrand
 */
$messages['nl-informal'] = array(
	'wikimedia-copyrightwarning' => 'Door op de knop "{{int:savearticle}}" te klikken, ga je akkoord met de [//wikimediafoundation.org/wiki/Gebruiksvoorwaarden Gebruiksvoorwaarden] en ga je onherroepelijk akkoord met het vrijgeven van uw bijdrage onder de licentie [//creativecommons.org/licenses/by-sa/3.0/deed.nl Creative Commons Naamsvermelding/Gelijk delen] en de [//nl.wikisource.org/wiki/Nederlandstalige_tekst_van_de_GNU-licentie_voor_vrije_documentatie GFDL].
Je gaat ermee akkoord dat een hyperlink of URL voldoende naamsvermelding is om aan de Creative Commons-licentie te voldoen.',
	'cant-delete-main-page' => 'Je kunt de hoofdpagina niet verwijderen of hernoemen.',
	'wikimedia-translationnotifications-signup-legal' => 'Door deze gegevens beschikbaar te stellen aan de Wikimedia Foundation, geef je ons toestemming om contact met je op te nemen over vertalingen en andere onderwerpen gerelateerd aan de Wikimediabeweging waarvan wij denken dat ze je interesse hebben. Je stemt in met het opslaan van je gegevens in de Verenigde Staten van Amerika en dat je gegevens onder ons [https://wikimediafoundation.org/wiki/Privacy_policy privacybeleid] vallen.',
);

/** Norwegian Nynorsk (norsk nynorsk)
 * @author Frokor
 * @author Gunnernett
 * @author Harald Khan
 * @author Jon Harald Søby
 * @author Nemo bis
 * @author Njardarlogar
 * @author Ranveig
 */
$messages['nn'] = array(
	'wikimediamessages-desc' => 'Wikimedia-spesifikke meldingar',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=nn',
	'sitesupport' => 'Gåver',
	'tooltip-n-sitesupport' => 'Støtt oss',
	'specialpages-group-contribution' => 'Bidrag/Innsamling',
	'nstab-creator' => 'Skapar',
	'nstab-institution' => 'Institusjon',
	'nstab-sequence' => 'Sekvens',
	'nstab-timedtext' => 'Tidbunden tekst',
	'group-Ex_Administrator' => 'Tidlegare administratorar',
	'group-Ex_Administrator-member' => '{{GENDER:$1|tidlegare administrator}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Tidlegare administratorar',
	'group-Ex_Bureaucrat' => 'Tidlegare byråkratar',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|tidlegare byråkrat}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Tidlegare byråkratar',
	'group-OTRS-member' => 'OTRS-medlemer',
	'group-OTRS-member-member' => '{{GENDER:$1|OTRS-medlem}}',
	'grouppage-OTRS-member' => '{{ns:project}}:OTRS-medlemer',
	'group-abusefilter' => 'Redigerarar av misbruksfilteret',
	'group-abusefilter-member' => '{{GENDER:$1|misbruksfilterendrar}}',
	'grouppage-abusefilter' => '{{ns:project}}:Redigerarar av misbruksfilteret',
	'group-accountcreator' => 'Kontoopprettarar',
	'group-accountcreator-member' => '{{GENDER:$1|kontoopprettar}}',
	'grouppage-accountcreator' => '{{ns:project}}:Kontoopprettarar',
	'group-autopatrolled' => 'Sjølvpatruljørar',
	'group-autopatrolled-member' => '{{GENDER:$1|sjølvpatruljør}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Sjølvpatruljørar',
	'group-autoreviewer' => 'Autogranska',
	'group-autoreviewer-member' => '{{GENDER:$1|sjølvmeldar}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Automatiske granskarar',
	'group-bigexport' => 'Store eksportørar',
	'group-bigexport-member' => '{{GENDER:$1|storeksportør}}',
	'grouppage-bigexport' => '{{ns:project}}:Store eksportørar',
	'group-botadmin' => 'Robotar med administratorrettar',
	'group-botadmin-member' => '{{GENDER:$1|robot med administratorrettar}}',
	'grouppage-botadmin' => '{{ns:project}}:Robotar med administratorrettar',
	'group-confirmed' => 'Stadfesta brukarar',
	'group-confirmed-member' => '{{GENDER:$1|stadfesta brukar}}',
	'grouppage-confirmed' => '{{ns:project}}:Stadfeste brukarar',
	'group-filemover' => 'Filflyttarar',
	'group-filemover-member' => '{{GENDER:$1|filflyttar}}',
	'grouppage-filemover' => '{{ns:project}}:Filflyttarar',
	'group-flood' => 'Bot-brukarar',
	'group-flood-member' => '{{GENDER:$1|botbrukar}}',
	'grouppage-flood' => '{{ns:project}}:Bot-brukarar',
	'group-founder' => 'Grunnleggarar',
	'group-founder-member' => '{{GENDER:$1|grunnleggjar}}',
	'grouppage-founder' => '{{ns:project}}:Grunnleggarar',
	'group-import' => 'Importørar',
	'group-import-member' => '{{GENDER:$1|importør}}',
	'grouppage-import' => '{{ns:project}}:Importørar',
	'group-ipblock-exempt' => 'Unntak frå IP-blokkering',
	'group-ipblock-exempt-member' => '{{GENDER:$1|unnateke frå IP-blokkering}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Unnatekne frå IP-blokkering',
	'group-patroller' => 'Patruljørar',
	'group-patroller-member' => '{{GENDER:$1|patruljør}}',
	'group-rollbacker' => 'Attenderullarar',
	'group-rollbacker-member' => '{{GENDER:$1|attenderullar}}',
	'grouppage-rollbacker' => '{{ns:project}}:Attenderullarar',
	'group-transwiki' => 'Transwiki-importørar',
	'group-transwiki-member' => '{{GENDER:$1|transwikiimportør}}',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki-importørar',
	'group-trusted' => 'Brukarar til å stola på',
	'group-trusted-member' => '{{GENDER:$1|litande brukar}}',
	'grouppage-trusted' => '{{ns:project}}:Brukarar til å stola på',
	'group-uploader' => 'Opplastarar',
	'group-uploader-member' => 'opplastar', # Fuzzy
	'grouppage-uploader' => '{{ns:project}}:Opplastarar',
	'group-Global_bot' => 'Globale robotar',
	'group-Global_bot-member' => '{{GENDER:$1|global robot}}',
	'group-Global_rollback' => 'Globale attenderullarar',
	'group-Global_rollback-member' => '{{GENDER:$1|global attenderullar}}',
	'grouppage-Global_rollback' => 'm:Global rollback/nb',
	'group-Global_sysops' => 'Globale administratorar',
	'group-Global_sysops-member' => '{{GENDER:$1|global administrator}}',
	'group-Ombudsmen' => 'Ombodsmenn',
	'group-Ombudsmen-member' => '{{GENDER:$1|ombodsmann}}',
	'group-Staff' => 'Tilsette',
	'group-Staff-member' => '{{GENDER:$1|tilsett}}',
	'group-editinterface' => 'Grensesnittendrarar',
	'group-editinterface-member' => '{{GENDER:$1|grensesnittendrar}}',
	'group-steward' => 'Forvaltarar',
	'group-steward-member' => '{{GENDER:$1|forvaltar}}',
	'grouppage-steward' => 'm:Stewards/nn',
	'group-sysadmin' => 'Systemadministratorar',
	'group-sysadmin-member' => '{{GENDER:$1|systemadministrator}}',
	'grouppage-sysadmin' => 'm:Systemadministratorar',
	'group-translationadmin' => 'Omsetjingsadministratorar',
	'group-translationadmin-member' => '{{GENDER:$1|omsetjingsadministrator}}',
	'grouppage-translationadmin' => '{{ns:project}}:Omsetjingsadministratorar',
	'group-coder' => 'Kodarar',
	'group-coder-member' => '{{GENDER:$1|kodar}}',
	'grouppage-coder' => '{{ns:project}}:Kodar',
	'group-inactive' => 'Ikkje-aktive brukarar',
	'group-inactive-member' => '{{GENDER:$1|ikkje-aktiv brukar}}',
	'grouppage-inactive' => '{{ns:project}}:Ikkje-aktive brukarar',
	'wikimedia-copyright' => 'Tekst er tilgjengeleg under <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons-lisensen Namngjeving/Del på same vilkåra</a>; ytterlegare vilkår kan gjelda.
Sjå <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Vilkår</a> for detaljar.',
	'wikidata-copyright' => 'Alle strukturerte data frå hovud- og eigenskapsnamneromma er tilgjengelege under <a href="//creativecommons.org/publicdomain/zero/1.0/" title="Definisjonen av Creative Commons CC0-lisensen">Creative Commons CC0-lisensen</a>; tekst i dei andre namneromma er tilgjengeleg under <a href="//creativecommons.org/licenses/by-sa/3.0/" title="Definisjonen av Creative Commons Namngjeving/Del på same vilkåra-lisensen">Creative Commons Namngjeving/Del på same vilkåra-lisensen</a>; fleire vilkår kan gjelda.
Sjå <a href="//wikimediafoundation.org/wiki/Terms_of_Use" title="Bruksvilkåra til Wikimedia Foundation">Bruksvilkåra</a> for meir.',
	'wikidata-shortcopyrightwarning' => 'Ved å klikka på «{{int:wikibase-save}}» samtykkjer du i [//wikimediafoundation.org/wiki/Terms_of_Use bruksvilkåra], og du gjev endeleg samtykke til å gje ut bidraget ditt under [//creativecommons.org/publicdomain/zero/1.0/ CC0-lisensen].',
	'wikimedia-copyrightwarning' => 'Ved å trykkja på «{{int:savearticle}}»-knappen, samtykkjer du i [//wikimediafoundation.org/wiki/Terms_of_Use bruksvilkåra], og du gjev endeleg samtykke til å gje ut bidraget ditt under lisensane [//creativecommons.org/licenses/by-sa/3.0/ CC-BY-SA 3.0] og [//www.gnu.org/copyleft/fdl.html GFDL].
Du samtykkjer òg i at ei hyperlenkje eller ein URL er god nok godskriving etter Creative Commons-lisensen.',
	'wikibase-sitelinks-wikivoyage' => 'Wikivoyage-sider knytte til datasettet',
	'cant-delete-main-page' => 'Du kan ikkje sletta eller flytta hovudsida.',
	'upload-more-photos-of-this-monument' => 'Last opp fleire bilete av monumentet',
	'extdist-branch-REL1_21' => '1.21 (siste stabile MediaWiki)',
	'createacct-helpusername-url' => '{{ns:Project}}:Retningsliner for brukarnamn',
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(hjelp meg å velja)]]',
	'createacct-captcha-help-url' => '{{ns:Project}}:Be om ein konto',
	'createacct-imgcaptcha-help' => 'Ser du ikkje biletet? [[{{MediaWiki:createacct-captcha-help-url}}|Be om ein brukarkonto]]',
);

/** Novial (Novial)
 * @author Malafaya
 */
$messages['nov'] = array(
	'sitesupport' => 'Donationes',
);

/** Northern Sotho (Sesotho sa Leboa)
 * @author Mohau
 */
$messages['nso'] = array(
	'sitesupport' => 'Dineelo',
	'tooltip-n-sitesupport' => 'Re thekge',
);

/** Occitan (occitan)
 * @author Cedric31
 * @author Jfblanc
 * @author McDutchie
 */
$messages['oc'] = array(
	'wikimediamessages-desc' => 'Messatges especifics de Wikimedia',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=oc',
	'sitesupport' => 'Far un don',
	'tooltip-n-sitesupport' => 'Sostenètz lo projècte',
	'specialpages-group-contribution' => 'Contribucions / Levada de fonses',
	'group-abusefilter' => "Modificators dels filtres d'abuses",
	'group-abusefilter-member' => "modificator dels filtres d'abuses", # Fuzzy
	'grouppage-abusefilter' => "{{ns:project}}:Modificators dels filtres d'abuses",
	'group-accountcreator' => 'Creators de comptes',
	'group-accountcreator-member' => 'Creator de comptes', # Fuzzy
	'grouppage-accountcreator' => '{{ns:project}}:Creators de comptes',
	'group-arbcom' => "de sòcis del comitat d'arbitratge",
	'group-arbcom-member' => "sòci del comitat d'arbitratge", # Fuzzy
	'grouppage-arbcom' => "{{ns:project}}:de sòcis del comitat d'arbitratge",
	'group-autopatrolled' => 'Patrolhas automaticas',
	'group-autopatrolled-member' => 'Patrolhador automatic', # Fuzzy
	'grouppage-autopatrolled' => '{{ns:project}}:Patrolhadors automatics',
	'group-autoreviewer' => 'Revisadors automatics',
	'group-autoreviewer-member' => 'revisador automatic', # Fuzzy
	'grouppage-autoreviewer' => '{{ns:project}}:Revisador automatic',
	'group-bigexport' => 'Grands exportaires',
	'group-bigexport-member' => 'grand exportaire', # Fuzzy
	'grouppage-bigexport' => '{{ns:project}}:Grands exportaires',
	'group-confirmed' => 'Utilizaires confirmats',
	'group-confirmed-member' => 'utilizaire confirmat', # Fuzzy
	'grouppage-confirmed' => '{{ns:project}}:Utilizaires confirmats',
	'group-editprotected' => 'Editors de paginas protegidas',
	'group-editprotected-member' => 'editor de paginas protegidas', # Fuzzy
	'grouppage-editprotected' => '{{ns:project}}:Editors de paginas protegidas',
	'group-filemover' => 'Renomenadors de fichièrs',
	'group-filemover-member' => 'Renomenador de fichièrs', # Fuzzy
	'group-flood' => 'Dressaires de bòt',
	'group-flood-member' => 'dressaires de bòt', # Fuzzy
	'grouppage-flood' => '{{ns:project}}:Dressaires de bòt',
	'group-founder' => 'Fondators',
	'group-founder-member' => 'Fondator', # Fuzzy
	'grouppage-founder' => '{{ns:project}}:Fondators',
	'group-import' => 'Importaires',
	'group-import-member' => 'Importaire', # Fuzzy
	'grouppage-import' => '{{ns:project}}:Importaires',
	'group-interface_editor' => "Editors de l'interfàcia",
	'group-interface_editor-member' => "editor de l'interfàcia", # Fuzzy
	'grouppage-interface_editor' => "{{ns:project}}:Editors de l'interfàcia",
	'group-ipblock-exempt' => 'Exempcions de blòts IP',
	'group-ipblock-exempt-member' => 'Exempcion de blòt IP', # Fuzzy
	'grouppage-ipblock-exempt' => '{{ns:project}}:Exempcion de blòt IP',
	'group-patroller' => 'Patrolhaires',
	'group-patroller-member' => 'Patrolhaire', # Fuzzy
	'group-researcher' => 'Cercaires',
	'group-researcher-member' => 'Cercaire', # Fuzzy
	'group-rollbacker' => 'Revocaires',
	'group-rollbacker-member' => 'Revocaire', # Fuzzy
	'grouppage-rollbacker' => '{{ns:project}}:Revocaires',
	'group-transwiki' => 'Importaires Transwiki',
	'group-transwiki-member' => 'Importaire Transwiki', # Fuzzy
	'grouppage-transwiki' => '{{ns:project}}:Importaires Transwiki',
	'group-trusted' => 'Utilizaires de fisança',
	'group-trusted-member' => 'utilizaire de fisança', # Fuzzy
	'grouppage-trusted' => '{{ns:project}}:Utilizaire de fisança',
	'group-Global_bot' => 'Bòts globals',
	'group-Global_bot-member' => 'Bòt global', # Fuzzy
	'group-Global_rollback' => 'Revocaires globals',
	'group-Global_rollback-member' => 'Revocaire global', # Fuzzy
	'group-Global_sysops' => 'Administrators globals',
	'group-Global_sysops-member' => 'administrator global', # Fuzzy
	'group-Ombudsmen' => 'Comissaris',
	'group-Ombudsmen-member' => 'Comissari', # Fuzzy
	'group-Staff' => 'Personal',
	'group-Staff-member' => 'Membre del personal',
	'group-editinterface' => "Modificators de l'interfàcia",
	'group-editinterface-member' => "modificator de l'interfàcia", # Fuzzy
	'group-steward' => 'Stewards',
	'group-steward-member' => 'Steward', # Fuzzy
	'group-sysadmin' => 'Administrators del sistèma',
	'group-sysadmin-member' => 'administrator del sistèma', # Fuzzy
	'group-coder' => 'Encodaires',
	'group-coder-member' => 'encodaire', # Fuzzy
	'group-inactive' => 'Utilizaires inactius',
	'group-inactive-member' => 'Utilizaire inactiu', # Fuzzy
	'grouppage-inactive' => '{{ns:project}}: Utilizaires inactius',
	'wikimedia-copyright' => 'Los tèxtes son disponibles jos <a href="//creativecommons.org/licenses/by-sa/3.0/">licence Creative Commons atribucion pertatge a l’identica</a> ; d’autres tèrmes se pòdon aplicar. Vejatz los <a href="//wikimediafoundation.org/wiki/Terms_of_Use">tèrmes d’utilizacion</a> per mai de detalhs.',
	'wikimedia-copyrightwarning' => 'En clicant sus « publicar », acceptatz de plaçar irrevocablament vòstra contribucion jos [//creativecommons.org/licenses/by-sa/3.0/ licence Creative Commons atribucion pertatge a l’identica 3.0] e [//www.gnu.org/copyleft/fdl.html GFDL]. Acceptatz d’èsser creditat al minimum via un iperligam o URL cap a l’article sul qual contribuissètz. Vejatz los [//wikimediafoundation.org/wiki/Terms_of_Use tèrmes d’utilizacion] per mai de detalhs.', # Fuzzy
);

/** Oriya (ଓଡ଼ିଆ)
 * @author Ansumang
 * @author Jnanaranjan Sahu
 * @author Jose77
 * @author Nemo bis
 * @author Odisha1
 * @author Psubhashish
 */
$messages['or'] = array(
	'wikimediamessages-desc' => 'ଉଇକିମିଡ଼ିଆ ନିର୍ଦ୍ଦିଷ୍ଟ ସନ୍ଦେଶ',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=or',
	'sitesupport' => 'ଦାନ',
	'tooltip-n-sitesupport' => 'ଆମ୍ଭଙ୍କୁ ସଜହୋଗ କରନ୍ତୁ',
	'specialpages-group-contribution' => 'ଦାତା/ଅର୍ଥ ସଙ୍ଗ୍ରହକାରୀ',
	'nstab-creator' => 'ସ୍ରଷ୍ଟା',
	'nstab-institution' => 'ପ୍ରତିଷ୍ଠାନ',
	'nstab-sequence' => 'ଅନୁକ୍ରମ',
	'nstab-timedtext' => 'ଧାରାବିବରଣୀ',
	'group-Ex_Administrator' => 'ପୁରାତନ ପରିଚାଳକଗଣ',
	'group-Ex_Administrator-member' => '{{GENDER:$1|ପୁରାତନ ପରିଚାଳକ}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:ପୁରାତନ ପରିଚାଳକଗଣ',
	'group-Ex_Bureaucrat' => 'ପୁରାତନ ପ୍ରଶାସକଗଣ',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|ପୁରାତନ ପ୍ରଶାସକ}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:ପୁରାତନ ପ୍ରଶାସକଗଣ',
	'group-Image-reviewer' => 'ଛବି ସମାଲୋଚକଗଣ',
	'group-Image-reviewer-member' => '{{GENDER:$1|ଛବି ସମାଲୋଚକଗଣ}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:ଛବି ସମାଲୋଚକଗଣ',
	'group-OTRS-member' => 'OTRS ସଭ୍ୟଗଣ',
	'group-OTRS-member-member' => '{{GENDER:$1|OTRS ସଭ୍ୟ}}',
	'grouppage-OTRS-member' => '{{ns:project}}:OTRS ସଦସ୍ୟ',
	'group-abusefilter' => 'ଛାଣିବା ସମ୍ପାଦକ ଅବ୍ୟବହାର',
	'group-abusefilter-member' => '{{GENDER:$1|ଛାଣିବା ସମ୍ପାଦକ ଅବ୍ୟବହାର}}',
	'grouppage-abusefilter' => '{{ns:project}}:ଅବ୍ୟବହାର ଛଣା ସମ୍ପାଦକଗଣ',
	'group-accountcreator' => 'ଖାତା ଗଢ଼ାଳିଗଣ',
	'group-accountcreator-member' => '{{GENDER:$1|ଖାତା ଗଢ଼ାଳି}}',
	'grouppage-accountcreator' => '{{ns:project}}:ଖାତା ଗଢ଼ାଳି',
	'group-arbcom' => 'ନିଶାପ ସମିତିର ସଭ୍ୟଗଣ',
	'group-arbcom-member' => '{{GENDER:$1|ନିଶାପ ସମିତିର ସଭ୍ୟ}}',
	'grouppage-arbcom' => '{{ns:project}}:ମଧ୍ୟସ୍ଥତା ସମିତି ସଭ୍ୟଗଣ',
	'group-autopatrolled' => 'ଆପେଆପେ ଚାଳିତ ପହରାଦାର',
	'group-autopatrolled-member' => '{{GENDER:$1|ଆପେଆପେ ଚାଳିତ ପହରାଦାର}}',
	'grouppage-autopatrolled' => '{{ns:project}}:ଛାଏଁ ପହରାଦାରଗଣ',
	'group-autoreviewer' => 'ସ୍ଵୟଂ ସମାଲୋଚକ',
	'group-autoreviewer-member' => '{{GENDER:$1|ସ୍ଵୟଂ ସମାଲୋଚକ}}',
	'grouppage-autoreviewer' => '{{ns:project}}:ଛାଏଁ ସମାଲୋଚକଗଣ',
	'group-bigexport' => 'ବଡ଼ ରପ୍ତାନୀକାର',
	'group-bigexport-member' => '{{GENDER:$1|ବଡ଼ ରପ୍ତାନୀକାର}}',
	'grouppage-bigexport' => '{{ns:project}}:ବଡ଼ ରପ୍ତାନୀକାର',
	'group-botadmin' => 'ପରିଛା ସୁବିଧା ସୁଯୋଗ ଥିବା ଆପେଚାଳିତ ବ୍ୟବହାରକାରୀ',
	'group-botadmin-member' => '{{GENDER:$1|ପରିଛା ସୁବିଧା ସୁଯୋଗ ଥିବା ଆପେଚାଳିତ ବ୍ୟବହାରକାରୀ}}',
	'grouppage-botadmin' => '{{ns:project}}:ପରିଛା ସୁବିଧା ସୁଯୋଗ ଥିବା ଆପେଚାଳିତ ବ୍ୟବହାରକାରୀ',
	'group-confirmed' => 'ଥୟକରା ସଭ୍ୟଗଣ',
	'group-confirmed-member' => '{{GENDER:$1|ଥୟକରା ସଭ୍ୟଗଣ}}',
	'grouppage-confirmed' => '{{ns:project}}:ଥୟ କରା ସଭ୍ୟ',
	'group-editprotected' => 'କିଳାଯାଇଥିବା ପୃଷ୍ଠା ସମ୍ପାଦକଗଣ',
	'group-editprotected-member' => '{{GENDER:$1|କିଳାଯାଇଥିବା ପୃଷ୍ଠା ସମ୍ପାଦକ}}',
	'grouppage-editprotected' => '{{ns:project}}:କିଳାଯାଇଥିବା ପୃଷ୍ଠା ସମ୍ପାଦକଗଣ',
	'group-eliminator' => 'ଚୟନକାରୀ',
	'group-eliminator-member' => '{{GENDER:$1|ଚୟନକାରୀ}}',
	'grouppage-eliminator' => '{{ns:project}}:ଚୟନକାର',
	'group-filemover' => 'ଫାଇଲ ଘୁଞ୍ଚାଇବା ଲୋକ',
	'group-filemover-member' => '{{GENDER:$1|ଫାଇଲ ଘୁଞ୍ଚାଇବା ଲୋକ}}',
	'grouppage-filemover' => '{{ns:project}}:ଘୁଞ୍ଚାଇବା ଲୋକେ',
	'group-flood' => 'ଆପେଆପେ କାମ କରୁଥିବା ସଭ୍ୟ',
	'group-flood-member' => '{{GENDER:$1|ଆପେଆପେ କାମ କରୁଥିବା ସଭ୍ୟ}}',
	'grouppage-flood' => '{{ns:project}}:ସ୍ଵୟଂଚାଳିତ ସଭ୍ୟଗଣ',
	'group-founder' => 'ସଂସ୍ଥାପକ',
	'group-founder-member' => '{{GENDER:$1|ସଂସ୍ଥାପକ}}',
	'grouppage-founder' => '{{ns:project}}:ସଂସ୍ଥାପକ',
	'group-import' => 'ଆମଦାନୀକାର',
	'group-import-member' => '{{GENDER:$1|ଆମଦାନୀକାର}}',
	'grouppage-import' => '{{ns:project}}:ଆୟାତକାରୀ',
	'group-interface_editor' => 'ଇଣ୍ଟରଫେସ ସମ୍ପାଦକଗଣ',
	'group-interface_editor-member' => '{{GENDER:$1|ଇଣ୍ଟରଫେସ ସମ୍ପାଦକ}}',
	'grouppage-interface_editor' => '{{ns:project}}:ଇନ୍ଟରଫେସ ସମ୍ପାଦନକାରୀ',
	'group-ipblock-exempt' => 'IP ଅଟକ ଛାଡ଼',
	'group-ipblock-exempt-member' => '{{GENDER:$1|IP ଅଟକ ଛାଡ଼}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP ଅଟକ ଛାଡ଼',
	'group-patroller' => 'ପହରାଦାର',
	'group-patroller-member' => '{{GENDER:$1|ପହରାଦାର}}',
	'grouppage-patroller' => '{{ns:project}}:ନିରୀକ୍ଷଣକାରୀ',
	'group-researcher' => 'ଗବେଷକଗଣ',
	'group-researcher-member' => '{{GENDER:$1|ଗବେଷକ}}',
	'grouppage-researcher' => '{{ns:project}}:ଗବେଷଣାକାରୀ',
	'group-rollbacker' => 'ପଛକୁ ଫେରାଇବା ଅଧିକାରୀଗଣ',
	'group-rollbacker-member' => '{{GENDER:$1|ପଛକୁ ଫେରାଇବା ଅଧିକାରୀ}}',
	'grouppage-rollbacker' => '{{ns:project}}:ପଛକୁ ଫେରାଇବା ଅଧିକାରୀଗଣ',
	'group-transwiki' => 'ଟ୍ରାନ୍ସଉଇକି ଆମଦାନୀକାର',
	'group-transwiki-member' => '{{GENDER:$1|ଟ୍ରାନ୍ସଉଇକି ଆମଦାନୀକାର}}',
	'grouppage-transwiki' => '{{ns:project}}:ଟ୍ରାନ୍ସଉଇକି ଆମଦାନୀକାର',
	'group-trusted' => 'ଭରସାଯୋଗ୍ୟ ସଭ୍ୟଗଣ',
	'group-trusted-member' => '{{GENDER:$1|ଭରସାଯୋଗ୍ୟ ସଭ୍ୟ}}',
	'grouppage-trusted' => '{{ns:project}}:ଭରସାଯୋଗ୍ୟ ସଦସ୍ୟ',
	'group-Global_bot' => 'ଜଗତ ଆପେଆପେ ଚାଳିତ ସଭ୍ୟଗଣ',
	'group-Global_bot-member' => '{{GENDER:$1|ଜଗତସାରାର ଆପେଆପେ ଚାଳିତ ସଭ୍ୟ}}',
	'group-Global_rollback' => 'ଜଗତ ରୋଲବ୍ୟାକକାରୀ',
	'group-Global_rollback-member' => '{{GENDER:$1|ଜଗତସାରାର ପଛକୁ ଫେରାଇବା ଅଧିକାରୀ}}',
	'grouppage-Global_rollback' => 'm:ଜଗତସାରାର ପଛକୁ ଫେରାଇବା ଅଧିକାର',
	'group-Global_sysops' => 'ଜଗତ ପରିଚାଳକଗଣ',
	'group-Global_sysops-member' => '{{GENDER:$1|ଜଗତ ପରିଚାଳକ}}',
	'group-Ombudsmen' => 'ଅଭିଯୋଗ ବିଚାରକଗଣ',
	'group-Ombudsmen-member' => '{{GENDER:$1|ଅଭିଯୋଗ ବିଚାରକ}}',
	'group-Staff' => 'କର୍ମଚାରି',
	'group-Staff-member' => 'କର୍ମଚାରି',
	'group-editinterface' => 'ଇଣ୍ଟରଫେସ ସମ୍ପାଦକଗଣ',
	'group-editinterface-member' => '{{GENDER:$1|ଇଣ୍ଟରଫେସ ସମ୍ପାଦକ}}',
	'group-steward' => 'ଷ୍ଟିୱାର୍ର୍ଡ଼ଗଣ',
	'group-steward-member' => '{{GENDER:$1|ଷ୍ଟିୱାର୍ଡ}}',
	'group-sysadmin' => 'ସିଷ୍ଟମ ପରିଚାଳକ',
	'group-sysadmin-member' => '{{GENDER:$1|ସିଷ୍ଟମ ପରିଚାଳକ}}',
	'group-API_High_Limit_Requestor' => 'ଉଚ୍ଚସୀମା ଅନୁରୋଧକାରୀ API',
	'group-API_High_Limit_Requestor-member' => '{{GENDER:$1|ଉଚ୍ଚସୀମା ଅନୁରୋଧକାରୀ API }}',
	'group-Indic_Bots' => 'ଇଣ୍ଡିକ ବଟ୍ସ',
	'group-Indic_Bots-member' => '{{GENDER:$1|ଇଣ୍ଡିକ ବଟ}}',
	'group-New_wikis_importer' => 'ନୂଆ ଉଇକିଗୁଡିକର ଆମଦାନୀ କର୍ତ୍ତା',
	'group-New_wikis_importer-member' => '{{GENDER:$1|ନୂଆ ଉଇକିଗୁଡିକର ଆମଦାନୀ କର୍ତ୍ତା}}',
	'group-global-ipblock-exempt' => 'ଜାଗତିକ IP ଅଟକ ଛାଡକାରୀ',
	'group-global-ipblock-exempt-member' => '{{GENDER:$1|ଜାଗତିକ IP ଅଟକ ଛାଡକାରୀ}}',
	'group-recursive-export' => 'ବାରମ୍ବାର ରପ୍ତାନି',
	'group-recursive-export-member' => '{{GENDER:$1|ବାରମ୍ବାର ରପ୍ତାନି କର୍ତ୍ତା}}',
	'group-translationadmin' => 'ଅନୁବାଦ ପରିଚାଳକଗଣ',
	'group-translationadmin-member' => '{{GENDER:$1|ଅନୁବାଦ ପରିଚାଳକ}}',
	'grouppage-translationadmin' => '{{ns:project}}:ଅନୁବାଦ ପରିଚାଳକଗଣ',
	'group-coder' => 'କୋଡ଼ ଗଢ଼ାଳିଗଣ',
	'group-coder-member' => '{{GENDER:$1|କୋଡ଼ ଗଢ଼ାଳି}}',
	'grouppage-coder' => '{{ns:project}}:କୋଡ଼ ଗଢ଼ାଳି',
	'group-inactive' => 'ଅଚଳ ସଭ୍ୟଗଣ',
	'group-inactive-member' => '{{GENDER:$1|ଅଚଳ ସଭ୍ୟ}}',
	'grouppage-inactive' => '{{ns:project}}:ଅଚଳ ସଦସ୍ୟଗଣ',
	'wikimedia-copyright' => 'ଏହି ଲେଖା <a href="//creativecommons.org/licenses/by-sa/3.0/"> କ୍ରିଏଟିଭ କମନ୍ସ ଆଟ୍ରିବୁସନ/ସେଆର ଏଲାଇକ ଲାଇସେନ୍ସ</a>ରେ ରଖାଯାଇଛି;
ଆହୁରି କିଛି ନୀତି ମଧ୍ୟ ଥାଇପାରେ ।
ଅଧିକ ଜାଣିବା ପାଇଁ <a href="//wikimediafoundation.org/wiki/Terms_of_Use">ବ୍ୟବହାର କରିବାର ନିୟମ ସବୁ</a> ଦେଖନ୍ତୁ ।',
	'wikidata-copyright' => 'ମୁଖ୍ୟ ଏବଂ ସତ୍ଵାଧିକାର ଥିବା ନେମସ୍ପେସରୁ ଆସିଥିବା ସମସ୍ତ ମିଳିତ ତଥ୍ୟ <a href="//creativecommons.org/publicdomain/zero/1.0/" title="Definition of the Creative Commons CC0 License">Creative Commons CC0 License</a> ଅନ୍ତର୍ଗତ ଅଛି;
ଅନ୍ୟ ନେମସ୍ପେସରେ ଥିବା ଲେଖାଗୁଡ଼ିକ <a href="//creativecommons.org/licenses/by-sa/3.0/" title="Definition of the Creative Commons Attribution/Share-Alike License">Creative Commons Attribution/Share-Alike License</a> ଅଧୀନରେ ଅଛି;
ଅଧିକ ସର୍ତାବଳୀ ଲାଗୁହୋଇପାରେ ।
ଅଧିକ ବିବରଣୀ ପାଇଁ <a href="//wikimediafoundation.org/wiki/Terms_of_Use" title="Wikimedia Foundation Terms of Use">Terms of Use</a> ଦେଖନ୍ତୁ ।',
	'wikimedia-copyrightwarning' => '"{{int:savearticle}}" ବୋତାମ ଚିପିବା ପରେ, ଆପଣ [//wikimediafoundation.org/wiki/Terms_of_Use ବ୍ୟବହାର ନୀତି] ମାନିଲେ ଓ ଆପଣ ସିଧାସଳଖ ଆପଣା ଅବଦାନ [//creativecommons.org/licenses/by-sa/3.0/ CC-BY-SA ୩.୦ ଲାଇସେନ୍ସ]ଓ [//www.gnu.org/copyleft/fdl.html GFDL]ରେ ଦାନ କଲେ ।
ଆପଣ ଏକ ହାଇପରଲିଙ୍କ ବା URL କ୍ରିଏଟିଭ କମନ୍ସ ଲାଇସେନ୍ସ ଅଧିନରେ ଦାନ କରିବାକୁ ରାଜି ହେଲେ ।',
	'cant-delete-main-page' => 'ଆପଣ ପ୍ରଧାନ ପୃଷ୍ଠାଟିକୁ ଲିଭାଇ ବା ଘୁଞ୍ଚାଇ ପାରିବେ ନାହିଁ ।',
	'wikimedia-translationnotifications-signup-legal' => 'ଉଇକିମେଡିଆ ସଙ୍ଗଠନକୁ ଏହି ତଥ୍ୟ ପ୍ରଦାନକରି ଆପଣ ଏଥିରେ ସହମତ ଯେ ଆମେ ଆପଣଙ୍କୁ ଅନୁବାଦ କିମ୍ବା ଅନ୍ୟାନ୍ୟ ଉଇକିମେଡିଆ ଗତିବିଧି ପାଇଁ ଯୋଗାଯୋଗ କରିପାରୁ, ଆମେ ଭାବୁଛୁ ଆପଣଙ୍କୁ ଭଲ ଲାଗିବ । ଆପଣ ଏଥିରେ ମଧ୍ୟ ସହମତ ଯେ ଆପଣଙ୍କ ତଥ୍ୟ ଯୁକ୍ତରାଷ୍ଟ୍ର ଆମେରିକାରେ ସାଇତା ହୋଇ ରହିବ ଏବଂ [https://wikimediafoundation.org/wiki/Privacy_policy privacy policy] ସହ ବିଷୟ ଭୁକ୍ତ ହେବ ।',
	'upload-more-photos-of-this-monument' => 'ଏହି କୀର୍ତ୍ତିରାଜିର ଆହୁରି ଅଧିକ ଛବି ଅପଲୋଡ କରିବେ',
);

/** Ossetic (Ирон)
 * @author Amikeco
 * @author Bouron
 * @author Nemo bis
 */
$messages['os'] = array(
	'sitesupport' => 'Мысайнаг',
	'tooltip-n-sitesupport' => 'Баххуыс нын кæн',
	'group-founder' => 'Бындурæвæрджытæ',
	'group-founder-member' => 'бындурæвæрæг', # Fuzzy
	'grouppage-founder' => '{{ns:project}}:Бындурæвæрджытæ',
	'shared-repo-name-shared' => 'Викикъæбиц',
	'wikimedia-copyright' => 'Текстæй ис гæнæн спайда кæнын <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike лицензимæ</a> гæсгæ;
гæнæн ис, æндæр домæнтæ дæр æм ис.
Кæс <a href="//wikimediafoundation.org/wiki/Terms_of_use">пайда кæныны домæнтæ</a> фылдæр базонынæн.',
	'wikimedia-copyrightwarning' => '"{{int:savearticle}}" равзаргæйæ ды разы кæныс [//wikimediafoundation.org/wiki/Terms_of_Use пайда кæныны домæнтимæ], æмæ ма [//creativecommons.org/licenses/by-sa/3.0/ CC-BY-SA 3.0] æмæ [//www.gnu.org/copyleft/fdl.html GFDL] лицензиты бын æнæраздæхгæ публикацийыл. Ды разы кæныс æрвитæн кæнæ URL æгъгъæд атрибуци кæй сты, ууыл.',
	'cant-delete-main-page' => 'Дæ бон нæу сæйраг фарс схафын æви ахæссын.',
);

/** Punjabi (ਪੰਜਾਬੀ)
 * @author Aalam
 */
$messages['pa'] = array(
	'sitesupport' => 'ਦਾਨ',
	'createacct-captcha-help-url' => '{{ns:Project}}:ਖਾਤੇ ਲਈ ਮੰਗ ਕਰੋ',
);

/** Pangasinan (Pangasinan)
 */
$messages['pag'] = array(
	'sitesupport' => 'Donasyon',
);

/** Pampanga (Kapampangan)
 * @author Katimawan2005
 * @author Val2397
 */
$messages['pam'] = array(
	'sitesupport' => 'Donasiun',
	'tooltip-n-sitesupport' => 'Saupan yu kami',
	'nstab-creator' => '↓Talalalang',
	'group-accountcreator' => '↓Talalalang account',
	'wikimedia-copyrightwarning' => "Nung mag-save ka, mamayun kang itabili me at e mu ne bawian ing kekang ambag king lalam ning [//creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] ampo ning [//www.gnu.org/copyleft/fdl.html GFDL].
Mamayun kang kilalanan da ka deng talagamit a gagamit pasibayu kaniti (''re-users''), king paralan a e kulang king pamangabit hyperlink o URL king bulung nung nu ka manambag.
Lon me ing [//wikimediafoundation.org/wiki/Terms_of_Use Terms of Use] para kareng detalle.", # Fuzzy
);

/** Picard (Picard)
 * @author Geoleplubo
 */
$messages['pcd'] = array(
	'sitesupport' => 'Fouaire un présint',
	'shared-repo-name-shared' => 'Wikimedia Commons',
	'wikimedia-copyright' => 'Chés teskes sont disponibes dsous <a href="//creativecommons.org/licenses/by-sa/3.0/deed.fr">licince Creative Commons patérnité – partage à l’idintique des condicions iniciales</a> ; d’eutes condicions peu\'te s’applitcher.
Vir chés <a href="//wikimediafoundation.org/wiki/Conditions_d\'utilisation">condicions d’utilisacion</a> pour avoèr pus éd détails.',
);

/** Deitsch (Deitsch)
 * @author Xqt
 */
$messages['pdc'] = array(
	'group-flood' => 'Waddefresser',
	'group-flood-member' => '{{GENDER:$1|Yuuser vun em Waddefresser}}',
	'grouppage-flood' => '{{ns:project}}:Waddefresser',
	'group-founder' => 'Grinder',
	'group-founder-member' => '{{GENDER:$1|Grinder}}',
	'grouppage-founder' => '{{ns:project}}:Grinder',
	'group-Global_bot' => 'Globale Bots',
	'group-Global_bot-member' => '{{GENDER:$1|Globaler Waddefresser}}',
	'group-steward' => 'Stewards',
	'group-steward-member' => '{{GENDER:$1|Steward}}',
	'group-sysadmin' => 'System-Verwalter',
	'group-sysadmin-member' => '{{GENDER:$1|System-Verwalter}}',
);

/** Plautdietsch (Plautdietsch)
 * @author Slomox
 */
$messages['pdt'] = array(
	'sitesupport' => 'Gowe',
	'tooltip-n-sitesupport' => 'Unjastett onns',
);

/** Pälzisch (Pälzisch)
 * @author Manuae
 * @author SPS
 */
$messages['pfl'] = array(
	'sitesupport' => 'Spende',
	'group-Ex_Bureaucrat' => 'Ejemolische Birograde',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Ejemolische Birograde',
	'group-OTRS-member' => 'OTRS-Midglieda',
	'group-steward' => 'Stewards',
	'group-steward-member' => '{{GENDER:$1|Steward}}',
	'grouppage-steward' => '{{ns:project}}:Steward',
);

/** Norfuk / Pitkern (Norfuk / Pitkern)
 */
$messages['pih'] = array(
	'sitesupport' => 'Doenaiishun',
);

/** Polish (polski)
 * @author Beau
 * @author Chrumps
 * @author Derbeth
 * @author Lazowik
 * @author Leinad
 * @author Matma Rex
 * @author Meno25
 * @author Nux
 * @author Olgak85
 * @author Przemub
 * @author Rzuwig
 * @author Saper
 * @author Sp5uhe
 * @author ToSter
 * @author WTM
 * @author Woytecr
 */
$messages['pl'] = array(
	'wikimediamessages-desc' => 'Komunikaty unikalne dla projektów Wikimedia',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=pl',
	'sitesupport' => 'Darowizny',
	'tooltip-n-sitesupport' => 'Pomóż nam',
	'specialpages-group-contribution' => 'Darowizny/Zbieranie funduszy',
	'nstab-creator' => 'Twórca',
	'nstab-institution' => 'Instytucja',
	'nstab-sequence' => 'Sekwencja',
	'nstab-timedtext' => 'Lista dialogowa',
	'group-Ex_Administrator' => 'Byli administratorzy',
	'group-Ex_Administrator-member' => '{{GENDER:$1|były administrator}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Byli administratorzy',
	'group-Ex_Bureaucrat' => 'Byli biurokraci',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|były biurokrata|była biurokratka}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Byli biurokraci',
	'group-Image-reviewer' => 'Redaktorzy grafik',
	'group-Image-reviewer-member' => '{{GENDER:$1|redaktor|redaktorka}} grafik',
	'grouppage-Image-reviewer' => '{{ns:project}}:Redaktorzy grafik',
	'group-OTRS-member' => 'Operatorzy OTRS',
	'group-OTRS-member-member' => '{{GENDER:$1|operator|operatorka}} OTRS',
	'grouppage-OTRS-member' => '{{ns:project}}:Operatorzy OTRS',
	'group-abusefilter' => 'Operatorzy filtru nadużyć',
	'group-abusefilter-member' => '{{GENDER:$1|operator|operatorka}} filtru nadużyć',
	'grouppage-abusefilter' => '{{ns:project}}:Operatorzy filtru nadużyć',
	'group-accountcreator' => 'Tworzący konta',
	'group-accountcreator-member' => '{{GENDER:$1|twórca|twórczyni}} kont',
	'grouppage-accountcreator' => '{{ns:project}}:Twórcy kont',
	'group-arbcom' => 'Członkowie Komitetu Arbitrażowego',
	'group-arbcom-member' => '{{GENDER:$1|członek|członkini}} Komitetu Arbitrażowego',
	'grouppage-arbcom' => '{{ns:project}}:Członkowie Komitetu Arbitrażowego',
	'group-autopatrolled' => 'Patrolujący automatycznie',
	'group-autopatrolled-member' => '{{GENDER:$1|patrolujący|patrolująca}} automatycznie',
	'grouppage-autopatrolled' => '{{ns:project}}:Patrolujący automatycznie',
	'group-autoreviewer' => 'Automatycznie sprawdzający',
	'group-autoreviewer-member' => 'automatycznie {{GENDER:$1|sprawdzający|sprawdzająca}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Automatycznie przeglądający',
	'group-bigexport' => 'Masowi eksporterzy',
	'group-bigexport-member' => '{{GENDER:$1|masowy eksporter|masowa eksporterka}}',
	'grouppage-bigexport' => '{{ns:project}}:Masowi eksporterzy',
	'group-botadmin' => 'Boty z prawami administratora',
	'group-botadmin-member' => '{{GENDER:$1|bot z uprawnieniami administratora}}',
	'grouppage-botadmin' => '{{ns:project}}:Boty z prawami administratora',
	'group-confirmed' => 'Zatwierdzeni użytkownicy',
	'group-confirmed-member' => '{{GENDER:$1|zatwierdzony użytkownik|zatwierdzona użytkowniczka}}',
	'grouppage-confirmed' => '{{ns:project}}:Zatwierdzeni użytkownicy',
	'group-editprotected' => 'Redaktorzy zabezpieczonych stron',
	'group-editprotected-member' => '{{GENDER:$1|redaktor|redaktorka}} zabezpieczonych stron',
	'grouppage-editprotected' => '{{ns:project}}:Redaktorzy zabezpieczonych stron',
	'group-eliminator' => 'Sprzątacze',
	'group-eliminator-member' => '{{GENDER:$1|sprzątacz|sprzątaczka}}',
	'grouppage-eliminator' => '{{ns:project}}:Sprzątacz',
	'group-filemover' => 'Przenoszący pliki',
	'group-filemover-member' => '{{GENDER:$1|przenoszący|przenosząca}} pliki',
	'grouppage-filemover' => '{{ns:project}}:Przenoszący pliki',
	'group-flood' => 'Użytkownicy o ukrytej aktywności',
	'group-flood-member' => '{{GENDER:$1|użytkownik|użytkowniczka}} o ukrytej aktywności',
	'grouppage-flood' => '{{ns:project}}:Użytkownicy o ukrytej aktywności',
	'group-founder' => 'Założyciele',
	'group-founder-member' => '{{GENDER:$1|założyciel|założycielka}}',
	'grouppage-founder' => '{{ns:project}}:Założyciele',
	'group-import' => 'Importerzy',
	'group-import-member' => '{{GENDER:$1|importer|importerka}}',
	'grouppage-import' => '{{ns:project}}:Importerzy',
	'group-interface_editor' => 'Redaktorzy interfejsu',
	'group-interface_editor-member' => '{{GENDER:$1|redaktor|redaktorka}} interfejsu',
	'grouppage-interface_editor' => '{{ns:project}}:Redaktorzy interfejsu',
	'group-ipblock-exempt' => 'Uprawnieni do logowania się z zablokowanych adresów IP',
	'group-ipblock-exempt-member' => '{{GENDER:$1|uprawniony|uprawniona}} do zalogowania się z zablokowanego adresu IP',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Uprawnieni do logowania się z zablokowanych adresów IP',
	'group-patroller' => 'Patrolujący',
	'group-patroller-member' => '{{GENDER:$1|patrolujący|patrolująca}}',
	'grouppage-patroller' => '{{ns:project}}:Patrolujący',
	'group-researcher' => 'Inspektorzy',
	'group-researcher-member' => '{{GENDER:$1|inspektor|inspektorka}}',
	'grouppage-researcher' => '{{ns:project}}:Inspektorzy',
	'group-rollbacker' => 'Uprawnieni do wycofywania edycji',
	'group-rollbacker-member' => '{{GENDER:$1|uprawniony|uprawniona}} do wycofywania edycji',
	'grouppage-rollbacker' => '{{ns:project}}:Uprawnieni do wycofywania edycji',
	'group-transwiki' => 'Importerzy transwiki',
	'group-transwiki-member' => '{{GENDER:$1|importer|importerka}} transwiki',
	'grouppage-transwiki' => '{{ns:project}}:Importerzy transwiki',
	'group-trusted' => 'Zaufani użytkownicy',
	'group-trusted-member' => '{{GENDER:$1|zaufany użytkownik|zaufana użytkowniczka}}',
	'grouppage-trusted' => '{{ns:project}}:Zaufani użytkownicy',
	'group-uploader' => 'Przesyłający pliki',
	'group-uploader-member' => 'przesyłający pliki', # Fuzzy
	'grouppage-uploader' => '{{ns:project}}:Przesyłający pliki',
	'group-Global_bot' => 'Boty globalne',
	'group-Global_bot-member' => '{{GENDER:$1|bot globalny}}',
	'group-Global_rollback' => 'Globalnie uprawnieni do wycofywania edycji',
	'group-Global_rollback-member' => 'globalnie {{GENDER:$1|uprawniony|uprawniona}} do wycofywania edycji',
	'group-Global_sysops' => 'Globalni administratorzy',
	'group-Global_sysops-member' => '{{GENDER:$1|globalny administrator|globalna administratorka}}',
	'group-Ombudsmen' => 'Rzecznicy praw',
	'group-Ombudsmen-member' => '{{GENDER:$1|rzecznik|rzeczniczka}} praw',
	'group-Staff' => 'Pracownicy',
	'group-Staff-member' => 'pracownik',
	'group-editinterface' => 'Redaktorzy interfejsu',
	'group-editinterface-member' => '{{GENDER:$1|redaktor|redaktorka}} interfejsu',
	'group-steward' => 'Stewardzi',
	'group-steward-member' => '{{GENDER:$1|steward|stewardka}}',
	'grouppage-steward' => 'm:Stewards/pl',
	'group-sysadmin' => 'Administratorzy systemu',
	'group-sysadmin-member' => '{{GENDER:$1|administrator|administratorka}} systemu',
	'group-API_High_Limit_Requestor' => 'Użytkownicy z wysokimi limitami na żądania API',
	'group-API_High_Limit_Requestor-member' => '{{GENDER:$1|Użytkownik|Użytkowniczka}} z wysokimi limitami na żądania API',
	'group-New_wikis_importer' => 'Importerzy nowych wiki',
	'group-translationadmin' => 'Administratorzy tłumaczeń',
	'group-translationadmin-member' => '{{GENDER:$1|administrator|administratorka}} tłumaczeń',
	'grouppage-translationadmin' => '{{ns:project}}:Administratorzy tłumaczeń',
	'group-centralnoticeadmin' => 'Administratorzy wspólnych komunikatów',
	'group-centralnoticeadmin-member' => '{{GENDER:$1|administrator|administratorka}} wspólnych komunikatów',
	'group-coder' => 'Programiści',
	'group-coder-member' => '{{GENDER:$1|programista|programistka}}',
	'group-inactive' => 'Użytkownicy nieaktywni',
	'group-inactive-member' => '{{GENDER:$1|użytkownik nieaktywny|użytkowniczka nieaktywna}}',
	'grouppage-inactive' => '{{ns:project}}:Użytkownicy nieaktywni',
	'wikimedia-copyright' => 'Tekst udostępniany na <a href="//creativecommons.org/licenses/by-sa/3.0/deed.pl">licencji Creative Commons: uznanie autorstwa, na tych samych warunkach</a>, z możliwością obowiązywania dodatkowych ograniczeń.
Zobacz szczegółowe informacje o <a href="//wikimediafoundation.org/wiki/Warunki_korzystania">warunkach korzystania</a>.',
	'wikidata-shortcopyrightwarning' => 'Klikając "{{int:wikibase-save}}" zgadzasz się na [//wikimediafoundation.org/wiki/Terms_of_Use/pl warunki użytkowania] i nieodwołalnie zgadzasz się udostępniać swój wkład w ramach [//creativecommons.org/publicdomain/zero/1.0/ Licencji CC0].',
	'wikimedia-copyrightwarning' => 'Zapisując zmiany, wyrażasz nieodwołalną zgodę na udostępnianie Twojego wkładu na licencji [//creativecommons.org/licenses/by-sa/3.0/ Creative Commons: Uznanie autorstwa – Na tych samych warunkach – wersja 3.0] oraz na licencji [//www.gnu.org/copyleft/fdl.html GFDL]. Wyrażasz zgodę na wykorzystanie Twojego wkładu w dowolnej formie, pod warunkiem podania przynajmniej hiperłącza lub adresu URL do strony, na której powstała treść. Zobacz szczegółowe informacje o [//wikimediafoundation.org/wiki/Warunki_korzystania warunkach korzystania].',
	'wikibase-sitelinks-wikivoyage' => 'Strony Wikipodróży powiązane z tym elementem',
	'cant-delete-main-page' => 'Nie możesz usunąć lub przenieść strony głównej.',
	'wikimedia-translationnotifications-signup-legal' => 'Zgadzasz się, że podając te informacje Fundacji Wikimedia pozwalasz nam skontaktować się z Tobą w sprawie tłumaczeń lub innych tematów związanych z działalnością Wikimediów, które, według nas, mogą być dla Ciebie interesujące. Zezwalasz na przechowywanie Twoich danych w Stanach Zjednoczonych Ameryki według naszej [https://wikimediafoundation.org/wiki/Zasady_zachowania_poufności polityki prywatności].',
	'upload-more-photos-of-this-monument' => 'Prześlij więcej zdjęć tego zabytku',
	'extdist-branch-master' => 'master (najnowsza wersja rozwojowa)',
	'extdist-branch-REL1_21' => '1.21 (najnowsza stabilna wersja MediaWiki)',
	'createacct-helpusername-url' => '{{ns:Project}}:Nazwa_użytkownika',
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(pomóż mi wybrać)]]',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Bèrto 'd Sèra
 * @author Dragonòt
 * @author Nemo bis
 */
$messages['pms'] = array(
	'wikimediamessages-desc' => 'Mëssagi specìfich ëd Wikimedia',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=pms',
	'sitesupport' => 'Oferte',
	'tooltip-n-sitesupport' => 'Giutene',
	'specialpages-group-contribution' => 'Contribussion/Racòlta ëd fond',
	'nstab-creator' => 'Creator',
	'nstab-institution' => 'Istitussion',
	'nstab-sequence' => 'Sequensa',
	'nstab-timedtext' => 'TestSincronisà',
	'group-Ex_Administrator' => 'Vej aministrator',
	'group-Ex_Administrator-member' => '{{GENDER:$1|ex aministrator|ex aministratris}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Vej aministrator',
	'group-Ex_Bureaucrat' => 'Ex mangiapapé',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|ex mangiapapé}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Ex mangiapapé',
	'group-Image-reviewer' => 'Revisor ëd figure',
	'group-Image-reviewer-member' => '{{GENDER:$1|revisor ëd figure}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:Revisor ëd figure',
	'group-OTRS-member' => 'Mèmber OTRS',
	'group-OTRS-member-member' => '{{GENDER:$1|Mèmber OTRS}}',
	'grouppage-OTRS-member' => '{{ns:project}}:Mèmber OTRS',
	'group-abusefilter' => 'Modificator dij filtragi anti-abus',
	'group-abusefilter-member' => '{{GENDER:$1|Modificator ëd filtragi anti-abus}}',
	'grouppage-abusefilter' => '{{ns:project}}:Modificator dij filtragi anti-abus',
	'group-accountcreator' => 'Creator ëd cont',
	'group-accountcreator-member' => '{{GENDER:$1|Creator ëd cont}}',
	'grouppage-accountcreator' => '{{ns:project}}:Creator ëd cont',
	'group-arbcom' => "Mèmber dël comità d'arbitragi",
	'group-arbcom-member' => "{{GENDER:$1|mèmber dël comità d'arbitragi}}",
	'grouppage-arbcom' => "{{ns:project}}:Mèmber dël comità d'arbitragi",
	'group-autopatrolled' => 'Patoje automàtiche',
	'group-autopatrolled-member' => '{{GENDER:$1|Patojador automàtich}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Patojador automàtich',
	'group-autoreviewer' => 'Riletor automàtich',
	'group-autoreviewer-member' => '{{GENDER:$1|Riletor automàtich}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Riletor automàtich',
	'group-bigexport' => 'Grand esportator',
	'group-bigexport-member' => '{{GENDER:$1|Grand esportator}}',
	'grouppage-bigexport' => '{{ns:project}}:Grand esportator',
	'group-botadmin' => "Trigomiro con drit d'aministrator",
	'group-botadmin-member' => "{{GENDER:$1|trigomiro con drit d'aministrator}}",
	'grouppage-botadmin' => "{{ns:project}}:Trigomiro con drit d'aministrator",
	'group-confirmed' => 'Utent confermà',
	'group-confirmed-member' => '{{GENDER:$1|utent confermà}}',
	'grouppage-confirmed' => '{{ns:project}}:Utent confermà',
	'group-editprotected' => 'Editor ëd pàgine protegiùe',
	'group-editprotected-member' => '{{GENDER:$1|editor ëd pàgine protegiùe}}',
	'grouppage-editprotected' => '{{ns:project}}:Editor ëd pàgine protegiùe',
	'group-eliminator' => 'Scancelator',
	'group-eliminator-member' => '{{GENDER:$1|scancelator}}',
	'grouppage-eliminator' => '{{ns:project}}:Scancelator',
	'group-filemover' => "Tramudador d'archivi",
	'group-filemover-member' => "{{GENDER:$1|tramudador d'archivi}}",
	'grouppage-filemover' => "{{ns:project}}:Tramudador d'archivi",
	'group-flood' => "Utent ch'a deuvro dij trigomiro",
	'group-flood-member' => '{{GENDER:$1|utent ëd trigomiro}}',
	'grouppage-flood' => "{{ns:project}}:Utent ch'a deuvro dij trigomiro",
	'group-founder' => 'Fondador',
	'group-founder-member' => '{{GENDER:$1|fondador}}',
	'grouppage-founder' => '{{ns:project}}:Fondador',
	'group-import' => 'Amportator',
	'group-import-member' => '{{GENDER:$1|amportator}}',
	'grouppage-import' => '{{ns:project}}:Amportator',
	'group-interface_editor' => "Modificator ëd l'antërfassa",
	'group-interface_editor-member' => "{{GENDER:$1|modificator ëd l'antërfassa}}",
	'grouppage-interface_editor' => "{{ns:project}}:Modificator ëd l'antërfassa",
	'group-ipblock-exempt' => "Esension ëd blocagi d'IP",
	'group-ipblock-exempt-member' => "{{GENDER:$1|Esentà dai blocagi d'IP}}",
	'grouppage-ipblock-exempt' => "{{ns:project}}:Esension dai blocagi d'IP",
	'group-patroller' => 'Gent ëd patoja',
	'group-patroller-member' => '{{GENDER:$1|ëd patoja}}',
	'grouppage-patroller' => '{{ns:project}}:Patojador',
	'group-researcher' => 'Arsercador',
	'group-researcher-member' => '{{GENDER:$1|arsercador}}',
	'grouppage-researcher' => '{{ns:project}}:Arsercador',
	'group-rollbacker' => 'Ripristinator',
	'group-rollbacker-member' => '{{GENDER:$1|ripristinator}}',
	'grouppage-rollbacker' => '{{ns:project}}:Ripristinator',
	'group-transwiki' => 'Amportator transwiki',
	'group-transwiki-member' => '{{GENDER:$1|amportator transwiki}}',
	'grouppage-transwiki' => '{{ns:project}}:Amportator transwiki',
	'group-trusted' => 'Utent sicur',
	'group-trusted-member' => '{{GENDER:$1|utent sicur}}',
	'grouppage-trusted' => '{{ns:project}}:Utent sicur',
	'group-Global_bot' => 'Trigomiro globaj',
	'group-Global_bot-member' => '{{GENDER:$1|Trigomiro global}}',
	'group-Global_rollback' => 'Ripristinator globaj',
	'group-Global_rollback-member' => '{{GENDER:$1|ripristinator global}}',
	'group-Global_sysops' => 'Aministrator globaj',
	'group-Global_sysops-member' => '{{GENDER:$1|aministrator global}}',
	'group-Ombudsmen' => 'Mediator',
	'group-Ombudsmen-member' => '{{GENDER:$1|mediator}}',
	'group-Staff' => 'Përsonal',
	'group-Staff-member' => 'mèmber dël përsonal',
	'group-editinterface' => "Modificator dl'antërfassa",
	'group-editinterface-member' => "{{GENDER:$1|modificator dl'antërfassa}}",
	'group-steward' => 'Vigilant',
	'group-steward-member' => '{{GENDER:$1|comess}}',
	'group-sysadmin' => 'Aministrator ëd sistema',
	'group-sysadmin-member' => '{{GENDER:$1|aministrator ëd sistema}}',
	'group-API_High_Limit_Requestor' => "Arciam ëd lìmit superior ëd l'API",
	'group-API_High_Limit_Requestor-member' => "{{GENDER:$1|archiedent|archiedenta}} ëd lìmit superior ëd l'API",
	'group-Indic_Bots' => 'Trigomiro indian',
	'group-Indic_Bots-member' => '{{GENDER:$1|trigomiro indian}}',
	'group-New_wikis_importer' => 'Importador dle wiki neuve',
	'group-New_wikis_importer-member' => '{{GENDER:$1|importador dle wiki neuve}}',
	'group-global-ipblock-exempt' => "Esension globaj ëd blocagi d'adrësse IP",
	'group-global-ipblock-exempt-member' => "{{GENDER:$1|esension global ëd blocagi d'adrëssa IP}}",
	'group-recursive-export' => 'Esportassion arcorenta',
	'group-recursive-export-member' => '{{GENDER:$1|esportator arcorent|esportatris arcorenta}}',
	'group-translationadmin' => 'Aministrator ëd tradussion',
	'group-translationadmin-member' => '{{GENDER:$1|aministrator ëd tradussion}}',
	'grouppage-translationadmin' => '{{ns:project}}:Aministrator ëd tradussion',
	'group-coder' => 'Codificator',
	'group-coder-member' => '{{GENDER:$1|codificator}}',
	'group-inactive' => 'Utent inativ',
	'group-inactive-member' => '{{GENDER:$1|utent inativ}}',
	'grouppage-inactive' => '{{ns:project}}:Utent inativ',
	'wikimedia-copyright' => 'Ël test a l\'é disponìbil sota la <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike License</a>;
as peulo giontesse condission adissionaj.
Varda <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Terms of Use</a> për ij detaj.',
	'wikimedia-copyrightwarning' => "An sgnacand ël boton \"{{int:savearticle}}\", a l'é d'acòrdi con le [//wikimediafoundation.org/wiki/Terms_of_Use condission d'utilisassion], e a l'é d'acordi ëd lassé irevocabilment soa contribussion sota la [//creativecommons.org/licenses/by-sa/3.0/ licensa CC-BY-SA 3.0] e la [//www.gnu.org/copyleft/fdl.html GFDL].
A l'é d'acòrdi che n'anliura o n'adrëssa dla ragnà a basta com atribussion sota la licensa Creative Commons.",
	'cant-delete-main-page' => 'A peul pa scancelé o tramudé la pàgina prinsipal.',
	'wikimedia-translationnotifications-signup-legal' => "An dasend a la Fondassion Wikimedia coste anformassion a l'é d'acòrdi che noi i podoma contatelo rësguard a tradussion o d'àutri argoment colegà al moviment WIkimedia che noi i pensoma a peulo anteresselo. A l'é d'acòrdi che ij dò dat a peulo esse memorisà ant jë Stat Unì d'América e a sio soget a nòstre [https://wikimediafoundation.org/wiki/Privacy_policy régole ëd confidensialità].",
	'upload-more-photos-of-this-monument' => "Carié pi 'd fòto d'ës monument",
);

/** Western Punjabi (پنجابی)
 * @author Khalid Mahmood
 */
$messages['pnb'] = array(
	'wikimediamessages-desc' => 'وکیمیڈیا دے خاص سنیعے',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=pnb',
	'sitesupport' => 'عطیہ دیو',
	'tooltip-n-sitesupport' => 'ےاڈے نال ہتھ ونڈاؤ',
	'specialpages-group-contribution' => 'ہتھ ونڈائی/فنڈ کٹھے کرن والا',
	'nstab-creator' => 'بنان والا',
	'nstab-institution' => 'ادارہ',
	'nstab-sequence' => 'سلسلہ',
	'nstab-timedtext' => 'ویلے وار لکھت',
	'group-Image-reviewer' => 'مورت ویکھن والے',
	'group-Image-reviewer-member' => 'مورت دا وکھالہ کرن والہ',
	'grouppage-Image-reviewer' => '{{ns:project}}:مورت جانچن والے',
	'group-OTRS-member' => 'اوٹی آرایس سنگی',
	'group-OTRS-member-member' => 'اوٹی آرایس سنگی',
	'grouppage-OTRS-member' => '{{ns:project}}:اوٹیآرایس سنگی',
	'group-abusefilter' => 'غلط نتارا ایڈیٹر',
	'group-abusefilter-member' => '{{جنس:$1|غلطی نتارا لکھاری}}',
	'grouppage-abusefilter' => '{{ns:project}}:گند نتارا کرن والے',
	'group-accountcreator' => 'کھاتہ بنان والے',
	'group-accountcreator-member' => 'کھاتہ بنان والے',
	'grouppage-accountcreator' => '{{ns:project}}:کھاتہ بنان والے',
	'group-arbcom' => 'صلع کراؤ کمیٹی دے سنگی',
	'group-arbcom-member' => '{{جنس:$1|صلح کمیٹی سنگی}}',
	'grouppage-arbcom' => '{{ns:project}}:صلح کراؤ کمیٹی دا سنگی',
	'group-autopatrolled' => 'راکھے',
	'group-autopatrolled-member' => '{{جنس:$1|آپگشتکرنوالا}}',
	'grouppage-autopatrolled' => '{{ns:project}}:آپ گشت کرن والا',
	'group-autoreviewer' => 'اپنے آپ ویکھن والے',
	'group-autoreviewer-member' => '{{جنس:$1|آپویکھن والا}}',
	'grouppage-autoreviewer' => '{{ns:project}}:آپ ویکھن والا',
	'group-bigexport' => 'وڈے با پیجن والے',
	'group-bigexport-member' => '{{جنس:$1|وڈا لجان والا}}',
	'grouppage-bigexport' => '{{ns:project}}:وڈے پیجن والے',
	'group-confirmed' => 'منے ہوۓ ورتن والے',
	'group-confirmed-member' => '{{جنس:$1|پکا ورتن والا}}',
	'grouppage-confirmed' => '{{ns:project}}:پکے ورتن والے',
	'group-editprotected' => 'بچاۓ صفیاں دے ایڈیٹر',
	'group-editprotected-member' => '{{جنس:$1|بچاۓ صفیاں دا لکھاری}}',
	'grouppage-editprotected' => '{{ns:project}}:بچاۓ صفیاں دے لکھاری',
	'group-eliminator' => 'مٹان والے',
	'group-eliminator-member' => '{{جنس:$1|مٹان والا}}',
	'grouppage-eliminator' => '{{ns:project}}:مکان والا',
	'group-filemover' => 'فائل لیبان والے',
	'group-filemover-member' => '{{جنس:$1|فائل لجان والا}}',
	'grouppage-filemover' => '{{ns:project}}:فائل پلٹن والے',
	'group-flood' => 'بوٹ ورتن والے',
	'group-flood-member' => '{{جنس:$1|بوٹ ورتن والا}}',
	'grouppage-flood' => '{{ns:project}}:بوٹ ورتن والے',
	'group-founder' => 'نیو رکھن والے',
	'group-founder-member' => 'نیو رکھن والا',
	'grouppage-founder' => '{{ns:project}}:نیو رکھن والے',
	'group-import' => 'لیان والے',
	'group-import-member' => 'لیان والا',
	'grouppage-import' => '{{ns:project}}:لیان والے',
	'group-interface_editor' => 'وکھالہ لکھاری',
	'group-interface_editor-member' => 'وکھالہ لکھاری',
	'grouppage-interface_editor' => '{{ns:project}}:انٹرفیس لکھاری',
	'group-ipblock-exempt' => 'آئی پی روک بچتاں',
	'group-ipblock-exempt-member' => 'آئی پی روک بچتاں',
	'grouppage-ipblock-exempt' => '{{ns:project}}:آئی پی روک بچت',
	'group-patroller' => 'گشت کرن والے',
	'group-patroller-member' => 'گشت کرن والے', # Fuzzy
	'group-researcher' => 'کھوجی',
	'group-researcher-member' => 'کھوجی',
	'grouppage-researcher' => '{{ns:project}}:کھوجی',
	'group-rollbacker' => 'پچھے کرن والے',
	'group-rollbacker-member' => 'پچھے کرن والے',
	'grouppage-rollbacker' => '{{ns:project}}:واپس کرن والے',
	'group-transwiki' => 'ٹرانسوکی امپورٹر',
	'group-transwiki-member' => 'ٹرانسوکی امپورٹر',
	'grouppage-transwiki' => '{{ns:project}}:ٹرانسوکی لیان والے',
	'group-trusted' => 'اعتباری ورتن والے',
	'group-trusted-member' => 'عتباری ورتن والے',
	'grouppage-trusted' => '{{ns:project}}:اعتباری ورتن والے',
	'group-Global_bot' => 'گلوبل بوٹس',
	'group-Global_bot-member' => 'گلوبل بوٹ',
	'group-Global_rollback' => 'گلوبل رولبیکرز',
	'group-Global_rollback-member' => 'گلوبل رولبیکرز',
	'group-Global_sysops' => 'گلوبل مکھیے',
	'group-Global_sysops-member' => 'گلوبل پربندھ چلانوالے',
	'group-Ombudsmen' => 'اومبڈزمن',
	'group-Ombudsmen-member' => 'اومبڈزمن',
	'group-Staff' => 'سٹاف',
	'group-Staff-member' => 'سٹاف',
	'group-editinterface' => 'وکھالہ لکھاری',
	'group-editinterface-member' => 'وکھالہ لکھاری',
	'group-steward' => 'سٹیورڈز',
	'group-steward-member' => 'سٹیورڈ',
	'group-sysadmin' => 'پربندھ چلان والے',
	'group-sysadmin-member' => 'پربندھ چلان والے',
	'group-translationadmin' => 'بولی وٹاندرے مکھۓ',
	'group-translationadmin-member' => '{{جنس:$1|بولی وٹاندرا مکھیا}}',
	'grouppage-translationadmin' => '{{ns:project}}:بولی وٹاندرا مکھیا',
	'group-coder' => 'کوڈرز',
	'group-coder-member' => '{{جنس:$1|کوڈر}}',
	'group-inactive' => 'نکمے ورتاوے',
	'group-inactive-member' => '{{GENDER:$1|ویلا ورتن والا}}',
	'grouppage-inactive' => '{{ns:project}}:ویلے ورتن آلے',
	'wikimedia-copyright' => 'Text is available under the <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike License</a>;
additional terms may apply.
See <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Terms of Use</a> for details.',
	'wikimedia-copyrightwarning' => 'By saving, you agree to irrevocably release your contribution under the [//creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] and the [//www.gnu.org/copyleft/fdl.html GFDL].
You agree to be credited by re-users, at minimum, through a hyperlink or URL to the page you are contributing to.
See the [//wikimediafoundation.org/wiki/Terms_of_Use Terms of Use] for details.', # Fuzzy
	'cant-delete-main-page' => 'تسیں پہلا صفہ ناں کتے ہور لجاسکدے او تے ناں ای مٹاسکدے او',
);

/** Pontic (Ποντιακά)
 * @author Sinopeus
 */
$messages['pnt'] = array(
	'sitesupport' => 'Δωρεάς',
	'tooltip-n-sitesupport' => 'Βοηθέστεν το έργον.',
	'group-sysadmin' => 'Διαχειριστάδες συστηματί',
	'group-sysadmin-member' => 'διαχειριστάς συστηματί', # Fuzzy
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'wikimediamessages-desc' => 'د ويکيمېډيا ځانګړي پيغامونه',
	'sitesupport' => 'بسپنې',
	'tooltip-n-sitesupport' => 'زموږ ملاتړ وکړی',
	'specialpages-group-contribution' => 'ونډه/بسپنه ټولونکی',
	'nstab-creator' => 'جوړونکی',
	'nstab-sequence' => 'لړۍ',
	'group-Ex_Administrator' => 'پخوانی پازوال',
	'group-Ex_Administrator-member' => '{{GENDER:$1|پخوانی پازوال}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:پخواني پازوالان',
	'group-Image-reviewer' => 'د انځور مخکتونکي',
	'group-OTRS-member' => 'د OTRS غړي',
	'group-OTRS-member-member' => '{{GENDER:$1|د OTRS غړی}}',
	'grouppage-OTRS-member' => '{{ns:project}}:د OTRS غړي',
	'group-accountcreator' => 'ګڼون جوړونکي',
	'group-accountcreator-member' => '{{GENDER:$1|ګڼون جوړونکی}}',
	'grouppage-accountcreator' => '{{ns:project}}:ګڼون جوړونکي',
	'group-confirmed' => 'تاييد شوي کارنان',
	'group-confirmed-member' => '{{GENDER:$1|تاييد شوی کارن}}',
	'grouppage-confirmed' => '{{ns:project}}:تاييد شوي کارنان',
	'group-filemover' => 'دوتنې لېږدونکي',
	'group-filemover-member' => '{{GENDER:$1|دوتنه لېږدونکی}}',
	'grouppage-filemover' => '{{ns:project}}:دوتنه لېږدونکي',
	'group-flood' => 'د روباټ کارنان',
	'group-flood-member' => '{{GENDER:$1|روباټ کارن}}',
	'grouppage-flood' => '{{ns:project}}:د روباټ کارنان',
	'group-founder' => 'بنسټګران',
	'group-founder-member' => '{{GENDER:$1|بنسټګر}}',
	'grouppage-founder' => '{{ns:project}}:بنسټګر',
	'group-interface_editor' => 'د کتنمل سمونګران',
	'group-interface_editor-member' => '{{GENDER:$1|د کتنمل بنسټګر}}',
	'grouppage-interface_editor' => '{{ns:project}}:د کتنمل سمونګران',
	'group-ipblock-exempt' => 'له آی پي بنديزه بخښلی',
	'group-ipblock-exempt-member' => '{{GENDER:$1|له آی پي بنديزه بخښلی}}',
	'group-researcher' => 'څېړونکي',
	'group-researcher-member' => '{{GENDER:$1|څېړونکی}}',
	'grouppage-researcher' => '{{ns:project}}:څېړونکي',
	'group-trusted' => 'باوري کارنان',
	'group-trusted-member' => '{{GENDER:$1|باوري کارن}}',
	'group-Global_bot' => 'نړيوال روباټ',
	'group-Global_bot-member' => '{{GENDER:$1|نړېوال روباټ}}',
	'group-Global_sysops' => 'نړېوال پازوالان',
	'group-Global_sysops-member' => '{{GENDER:$1|نړېوال پازوال}}',
	'group-Staff' => 'امله',
	'group-Staff-member' => 'د املې غړی',
	'group-editinterface' => 'د کتنمل سمونګران',
	'group-editinterface-member' => '{{GENDER:$1|د ليدنمخ سمونګر}}',
	'group-steward' => 'کوربانه',
	'group-sysadmin' => 'د غونډال پازوالان',
	'group-sysadmin-member' => '{{GENDER:$1|د غونډال پازوال}}',
	'group-translationadmin' => 'د ژباړې پازوالان',
	'group-translationadmin-member' => '{{GENDER:$1|د ژباړې پازوال}}',
	'grouppage-translationadmin' => '{{ns:project}}:د ژباړې پازوالان',
	'group-coder' => 'کوډګران',
	'group-coder-member' => '{{GENDER:$1|کوډګر}}',
	'group-inactive' => 'ناچارنده کارنان',
	'group-inactive-member' => '{{GENDER:$1|ناچارنده کارن}}',
	'grouppage-inactive' => '{{ns:project}}:غېرفعاله کارنان',
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(په ټاکلو کې يې مرسته غواړم)]]',
	'createacct-imgcaptcha-help' => 'انځور د کتلو وړ نه دی؟ [[{{MediaWiki:createacct-captcha-help-url}}|د يو ګڼون غوښتنه کول]]',
);

/** Portuguese (português)
 * @author Capmo
 * @author Crazymadlover
 * @author David0811
 * @author Dicionarista
 * @author Giro720
 * @author Hamilton Abreu
 * @author Heldergeovane
 * @author João Sousa
 * @author Lijealso
 * @author Luckas
 * @author Luckas Blade
 * @author Malafaya
 * @author SandroHc
 * @author Sir Lestaty de Lioncourt
 * @author Waldir
 * @author 555
 */
$messages['pt'] = array(
	'wikimediamessages-desc' => 'Mensagens específicas da Wikimedia',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=pt',
	'sitesupport' => 'Donativos',
	'tooltip-n-sitesupport' => 'Ajude-nos',
	'specialpages-group-contribution' => 'Contribuições/Angariação de fundos',
	'nstab-creator' => 'Criador',
	'nstab-institution' => 'Instituição',
	'nstab-sequence' => 'Sequência',
	'nstab-timedtext' => 'Legendagem',
	'group-Ex_Administrator' => 'Ex-administradores',
	'group-Ex_Administrator-member' => '{{GENDER:$1|ex-administrador|ex-administradora}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}: Ex-administradores',
	'group-Ex_Bureaucrat' => 'Ex-burocratas',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|ex-burocrata}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}: Ex-burocratas',
	'group-Image-reviewer' => 'Revisores de imagens',
	'group-Image-reviewer-member' => '{{GENDER:$1|revisor de imagens|revisora de imagens}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:Revisores de imagens',
	'group-OTRS-member' => 'Membros do OTRS',
	'group-OTRS-member-member' => '{{GENDER:$1|membro do OTRS}}',
	'grouppage-OTRS-member' => '{{ns:project}}:Membros do OTRS',
	'group-abusefilter' => 'Editores de filtros de abuso',
	'group-abusefilter-member' => '{{GENDER:$1|editor de filtros de abuso|editora de filtros de abuso}}',
	'grouppage-abusefilter' => '{{ns:project}}:Editores de filtros de abuso',
	'group-accountcreator' => 'Criadores de contas',
	'group-accountcreator-member' => '{{GENDER:$1|criador de contas|criadora de contas}}',
	'grouppage-accountcreator' => '{{ns:project}}:Criadores de contas',
	'group-arbcom' => 'Membros da comissão de arbitragem',
	'group-arbcom-member' => '{{GENDER:$1|membro da comissão de arbitragem}}',
	'grouppage-arbcom' => '{{ns:project}}:Membros da comissão de arbitragem',
	'group-autopatrolled' => 'Autopatrulhadores',
	'group-autopatrolled-member' => '{{GENDER:$1|auto-patrulhador|auto-patrulhadora}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Autopatrulhadores',
	'group-autoreviewer' => 'Auto-revisores',
	'group-autoreviewer-member' => '{{GENDER:$1|auto-revisor|auto-revisora}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Auto-revisores',
	'group-bigexport' => 'Grandes exportadores',
	'group-bigexport-member' => '{{GENDER:$1|grande exportador|grande exportadora}}',
	'grouppage-bigexport' => '{{ns:project}}:Grandes exportadores',
	'group-botadmin' => 'Robôs com direitos de administrador',
	'group-botadmin-member' => '{{GENDER:$1|robô com direitos de administrador}}',
	'grouppage-botadmin' => '{{ns:project}}: Robôs com direitos de administrador',
	'group-confirmed' => 'Utilizadores confirmados',
	'group-confirmed-member' => '{{GENDER:$1|utilizador confirmado|utilizadora confirmada}}',
	'grouppage-confirmed' => '{{ns:project}}:Utilizadores confirmados',
	'group-editprotected' => 'Editores de páginas protegidas',
	'group-editprotected-member' => '{{GENDER:$1|editor de páginas protegidas|editora de páginas protegidas}}',
	'grouppage-editprotected' => '{{ns:project}}:Editores de páginas protegidas',
	'group-eliminator' => 'Eliminadores',
	'group-eliminator-member' => '{{GENDER:$1|eliminador|eliminadora}}',
	'grouppage-eliminator' => '{{ns:project}}:Eliminador',
	'group-filemover' => 'Deslocadores de ficheiros',
	'group-filemover-member' => '{{GENDER:$1|deslocador de ficheiros|deslocadora de ficheiros}}',
	'grouppage-filemover' => '{{ns:project}}:Deslocadores de ficheiros',
	'group-flood' => 'Utilizadores robô',
	'group-flood-member' => '{{GENDER:$1|utilizador robô|utilizadora robô}}',
	'grouppage-flood' => '{{ns:project}}:Utilizadores robô',
	'group-founder' => 'Fundadores',
	'group-founder-member' => '{{GENDER:$1|fundador|fundadora}}',
	'grouppage-founder' => '{{ns:project}}:Fundadores',
	'group-import' => 'Importadores',
	'group-import-member' => '{{GENDER:$1|importador|importadora}}',
	'grouppage-import' => '{{ns:project}}:Importadores',
	'group-interface_editor' => 'Editores da interface',
	'group-interface_editor-member' => '{{GENDER:$1|editor da interface|editora da interface}}',
	'grouppage-interface_editor' => '{{ns:project}}:Editores da interface',
	'group-ipblock-exempt' => 'Isentos de bloqueio IP',
	'group-ipblock-exempt-member' => '{{GENDER:$1|isento|isenta}} de bloqueio IP',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Isenção de bloqueio IP',
	'group-patroller' => 'Patrulhadores',
	'group-patroller-member' => '{{GENDER:$1|patrulhador|patrulhadora}}',
	'grouppage-patroller' => '{{ns:project}}:Verificadores',
	'group-researcher' => 'Investigadores',
	'group-researcher-member' => '{{GENDER:$1|investigador|investigadora}}',
	'grouppage-researcher' => '{{ns:project}}:Investigador',
	'group-rollbacker' => 'Reversores',
	'group-rollbacker-member' => '{{GENDER:$1|reversor|reversora}}',
	'grouppage-rollbacker' => '{{ns:project}}:Reversores',
	'group-transwiki' => 'Importadores transwikis',
	'group-transwiki-member' => '{{GENDER:$1|importador|importadora}} transwikis',
	'grouppage-transwiki' => '{{ns:project}}:Importadores transwikis',
	'group-trusted' => 'Utilizadores de confiança',
	'group-trusted-member' => '{{GENDER:$1|utilizador|utilizadora}} de confiança',
	'grouppage-trusted' => '{{ns:project}}:Utilizadores de confiança',
	'group-Global_bot' => 'Robôs globais',
	'group-Global_bot-member' => 'robô global',
	'group-Global_rollback' => 'Reversores globais',
	'group-Global_rollback-member' => '{{GENDER:$1|reversor|reversora}} global',
	'group-Global_sysops' => 'Administradores globais',
	'group-Global_sysops-member' => '{{GENDER:$1|administrador|administradora}} global',
	'group-Ombudsmen' => 'Mediadores',
	'group-Ombudsmen-member' => '{{GENDER:$1|mediador|mediadora}}',
	'group-Staff' => 'Pessoal',
	'group-Staff-member' => '{{GENDER:$1|membro do pessoal}}',
	'group-editinterface' => 'Editores da interface',
	'group-editinterface-member' => '{{GENDER:$1|editor|editora}} da interface',
	'group-steward' => 'Stewards',
	'group-steward-member' => '{{GENDER:$1|Steward}}',
	'grouppage-steward' => 'm:Stewards/pt',
	'group-sysadmin' => 'Administradores de sistema',
	'group-sysadmin-member' => '{{GENDER:$1|administrador|administradora}} de sistema',
	'grouppage-sysadmin' => 'm:Administradores de sistema',
	'group-New_wikis_importer' => 'Novos importadores de wikis',
	'group-translationadmin' => 'Administradores de tradução',
	'group-translationadmin-member' => '{{GENDER:$1|administrador de tradução|administradora de tradução}}',
	'grouppage-translationadmin' => '{{ns:project}}:Administradores de tradução',
	'group-coder' => 'Programadores',
	'group-coder-member' => '{{GENDER:$1|programador|programadora}}',
	'group-inactive' => 'Utilizadores inativos',
	'group-inactive-member' => '{{GENDER:$1|utilizador inativo|utilizadora inativa}}',
	'grouppage-inactive' => '{{ns:project}}:Utilizadores inativos',
	'wikimedia-copyright' => 'Este texto é disponibilizado nos termos da licença <a href="//creativecommons.org/licenses/by-sa/3.0/deed.pt">Creative Commons - Atribuição - CompartilhaIgual 3.0 Não Adaptada (CC BY-SA 3.0)</a>;
pode estar sujeito a condições adicionais.
Para mais detalhes, consulte as <a href="//wikimediafoundation.org/wiki/Condições_de_Uso">Condições de Uso</a>.',
	'wikimedia-copyrightwarning' => 'Ao premir o botão "{{int:savearticle}}", aceita as [//wikimediafoundation.org/wiki/Condições_de_Uso Condições de uso] e concorda de forma irrevogável em publicar as suas contribuições com as licenças [//creativecommons.org/licenses/by-sa/3.0/deed.pt CC BY-SA 3.0] e [//www.gnu.org/copyleft/fdl.html GFDL].
Concorda também que um link ou URL é forma suficiente de atribuição nos termos da licença Creative Commons.',
	'cant-delete-main-page' => 'Não pode apagar ou mover a página principal.',
);

/** Brazilian Portuguese (português do Brasil)
 * @author BrunaaAa
 * @author Capmo
 * @author Carla404
 * @author Dicionarista
 * @author Eduardo.mps
 * @author Everton137
 * @author Fúlvio
 * @author Giro720
 * @author GoEThe
 * @author Helder.wiki
 * @author Heldergeovane
 * @author Luckas
 * @author Luckas Blade
 * @author Malafaya
 * @author Nemo bis
 * @author Rafael Vargas
 * @author Sir Lestaty de Lioncourt
 * @author Teles
 * @author 555
 */
$messages['pt-br'] = array(
	'wikimediamessages-desc' => 'Mensagens específicas da Wikimedia',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=pt-br',
	'sitesupport' => 'Doações',
	'tooltip-n-sitesupport' => 'Ajude-nos',
	'specialpages-group-contribution' => 'Contribuições/Angariação de fundos',
	'nstab-creator' => 'Criador',
	'nstab-institution' => 'Instituição',
	'nstab-sequence' => 'Sequência',
	'nstab-timedtext' => 'Legendagem',
	'group-Ex_Administrator' => 'Ex-administradores',
	'group-Ex_Administrator-member' => '{{GENDER:$1|ex-administrador|ex-administradora}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Ex-administradores',
	'group-Ex_Bureaucrat' => 'Ex-burocratas',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|ex-burocrata}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}: Ex-burocratas',
	'group-Image-reviewer' => 'Revisores de imagens',
	'group-Image-reviewer-member' => '{{GENDER:$1|revisor|revisora}} de imagens',
	'grouppage-Image-reviewer' => '{{ns:project}}:Revisores de imagem',
	'group-OTRS-member' => 'Membros do OTRS',
	'group-OTRS-member-member' => '{{GENDER:$1|membro do OTRS}}',
	'grouppage-OTRS-member' => '{{ns:project}}:Membros do OTRS',
	'group-abusefilter' => 'Editores de filtros de abuso',
	'group-abusefilter-member' => '{{GENDER:$1|editor|editora}} de filtros de abuso',
	'grouppage-abusefilter' => '{{ns:project}}:Editores de filtros de abuso',
	'group-accountcreator' => 'Criadores de contas',
	'group-accountcreator-member' => '{{GENDER:$1|criador|criadora}} de contas',
	'grouppage-accountcreator' => '{{ns:project}}:Criadores de contas',
	'group-arbcom' => 'Membros do comitê de arbitragrem',
	'group-arbcom-member' => '{{GENDER:$1|membro da comissão de arbitragem}}',
	'grouppage-arbcom' => '{{ns:project}}: Membros do comitê de arbitragem',
	'group-autopatrolled' => 'Auto-patrulhadores',
	'group-autopatrolled-member' => '{{GENDER:$1|autopatrulhador|autopatrulhadora}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Auto-patrulhadores',
	'group-autoreviewer' => 'Autorrevisores',
	'group-autoreviewer-member' => '{{GENDER:$1|autorrevisor|autorrevisora}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Autorrevisores',
	'group-bigexport' => 'Grandes exportadores',
	'group-bigexport-member' => 'grande {{GENDER:$1|exportador|exportadora}}',
	'grouppage-bigexport' => '{{ns:project}}:Grandes exportadores',
	'group-botadmin' => 'Robôs com direitos de administrador',
	'group-botadmin-member' => '{{GENDER:$1|robô com direitos de administrador}}',
	'grouppage-botadmin' => '{{ns:project}}: Robôs com direitos de administrador',
	'group-confirmed' => 'Usuários confirmados',
	'group-confirmed-member' => '{{GENDER:$1|usuário confirmado|usuária confirmada}}',
	'grouppage-confirmed' => '{{ns:project}}:Usuários confirmados',
	'group-editprotected' => 'Editores de páginas protegidas',
	'group-editprotected-member' => '{{GENDER:$1|editor|editora}} de páginas protegidas',
	'grouppage-editprotected' => '{{ns:project}}: Editor de páginas protegidas',
	'group-eliminator' => 'Eliminadores',
	'group-eliminator-member' => '{{GENDER:$1|eliminador|eliminadora}}',
	'grouppage-eliminator' => '{{ns:project}}:Eliminador',
	'group-filemover' => 'Manipuladores de arquivos',
	'group-filemover-member' => '{{GENDER:$1|manipulador|manipuladora}} de arquivos',
	'grouppage-filemover' => '{{ns:project}}:Manipuladores de arquivos',
	'group-flood' => 'Pseudobots',
	'group-flood-member' => '{{GENDER:$1|pseudobot}}',
	'grouppage-flood' => '{{ns:project}}:Pseudobots',
	'group-founder' => 'Fundadores',
	'group-founder-member' => '{{GENDER:$1|fundador|fundadora}}',
	'grouppage-founder' => '{{ns:project}}:Fundadores',
	'group-import' => 'Importadores',
	'group-import-member' => '{{GENDER:$1|importador|importadora}}',
	'grouppage-import' => '{{ns:project}}:Importadores',
	'group-interface_editor' => 'Editores de interface',
	'group-interface_editor-member' => '{{GENDER:$1|editor|editora}} de interface',
	'grouppage-interface_editor' => '{{ns:project}}: Editores de interface',
	'group-ipblock-exempt' => 'Isentos de bloqueio IP',
	'group-ipblock-exempt-member' => '{{GENDER:$1|isento|isenta}} de bloqueio de  IP',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Isentos de bloqueio',
	'group-patroller' => 'Patrulhadores',
	'group-patroller-member' => '{{GENDER:$1|patrulhador|patrulhadora}}',
	'group-researcher' => 'Pesquisadores',
	'group-researcher-member' => '{{GENDER:$1|pesquisador|pesquisadora}}',
	'grouppage-researcher' => '{{ns:project}}:Pesquisadores',
	'group-rollbacker' => 'Reversores',
	'group-rollbacker-member' => '{{GENDER:$1|reversor|reversora}}',
	'grouppage-rollbacker' => '{{ns:project}}:Reversores',
	'group-transwiki' => 'Importadores transwiki',
	'group-transwiki-member' => '{{GENDER:$1|importador|importadora}} transwiki',
	'grouppage-transwiki' => '{{ns:project}}:Importadores transwiki',
	'group-trusted' => 'Usuários confiáveis',
	'group-trusted-member' => '{{GENDER:$1|usuário|usuária}} confiável',
	'grouppage-trusted' => '{{ns:project}}:Usuários confiáveis',
	'group-Global_bot' => 'Robôs globais',
	'group-Global_bot-member' => '{{GENDER:$1|robô global}}',
	'group-Global_rollback' => 'Reversores globais',
	'group-Global_rollback-member' => '{{GENDER:$1|reversor|reversora}} global',
	'group-Global_sysops' => 'Administradores globais',
	'group-Global_sysops-member' => '{{GENDER:$1|administrador|administradora}} global',
	'group-Ombudsmen' => 'Mediadores',
	'group-Ombudsmen-member' => '{{GENDER:$1|mediador|mediadora}}',
	'group-Staff' => 'Equipe',
	'group-Staff-member' => 'membro da equipe',
	'group-editinterface' => 'Editores de interface',
	'group-editinterface-member' => '{{GENDER:$1|editor|editora}} de interface',
	'group-steward' => 'Stewards',
	'group-steward-member' => '{{GENDER:$1|Steward}}',
	'group-sysadmin' => 'Administradores de sistema',
	'group-sysadmin-member' => '{{GENDER:$1|administrador|administradora}} do sistema',
	'group-New_wikis_importer' => 'Novos importadores de wikis',
	'grouppage-New_wikis_importer' => 'm:New wikis importers',
	'group-global-ipblock-exempt' => 'Isentos de bloqueios globais',
	'grouppage-global-ipblock-exempt' => 'm:Global IP block exemptions',
	'group-translationadmin' => 'Administradores de tradução',
	'group-translationadmin-member' => '{{GENDER:$1|administrador de tradução|administradora de tradução}}',
	'grouppage-translationadmin' => '{{ns:project}}:Administradores de tradução',
	'group-coder' => 'Codificadores',
	'group-coder-member' => '{{GENDER:$1|codificador|codificadora}}',
	'group-inactive' => 'Usuários inativos',
	'group-inactive-member' => '{{GENDER:$1|usuário inativo|usuária inativa}}',
	'grouppage-inactive' => '{{ns:project}}:Usuários inativos',
	'wikimedia-copyright' => 'Este texto é disponibilizado nos termos da licença <a href="//creativecommons.org/licenses/by-sa/3.0/deed.pt_BR">Creative Commons - Atribuição - Partilha nos Mesmos Termos 3.0 Não Adaptada (CC BY-SA 3.0)</a>;
pode estar sujeito a condições adicionais.
Para mais detalhes, consulte as <a href="//wikimediafoundation.org/wiki/Condições_de_Uso">Condições de Uso</a>.',
	'wikimedia-copyrightwarning' => 'Ao clicar no botão "{{int:savearticle}}", você concorda com os [//wikimediafoundation.org/wiki/Terms_of_Use termos de uso], e você concorda irrevogavelmente liberar sua contribuição sob a [//creativecommons.org/licenses/by-sa/3.0/ licença CC-BY-SA 3.0] e [//www.gnu.org/copyleft/fdl.html GFDL].
Você concorda que um hiperlink ou URL é atribuição suficiente sob a licença Creative Commons.',
	'cant-delete-main-page' => 'Você não pode excluir ou mover a página principal.',
	'createacct-helpusername-url' => '{{ns:Project}}:Política_de_nomes_de_usuário',
	'createacct-captcha-help-url' => '{{ns:Project}}:Solicitar uma conta',
	'createacct-imgcaptcha-help' => 'Não consegue ver a imagem? [[{{MediaWiki:createacct-captcha-help-url}}|Solicitar uma conta]]',
);

/** Quechua (Runa Simi)
 * @author AlimanRuna
 */
$messages['qu'] = array(
	'wikimediamessages-desc' => 'Wikimedia sapaq willaykuna',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=qu',
	'sitesupport' => 'Qarana',
	'tooltip-n-sitesupport' => 'Yanapawayku',
	'specialpages-group-contribution' => 'Chayachiy/Qullqi mañakuq',
	'nstab-creator' => 'Kamariq',
	'nstab-institution' => 'Wallpachay wasi',
	'nstab-sequence' => 'Qatikipay',
	'nstab-timedtext' => 'TimedText',
	'group-Ex_Administrator' => 'Kasqa kamachiqkuna',
	'group-Ex_Administrator-member' => '{{GENDER:$1|}}Kasqa kamachiq',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Kasqa kamachiq',
	'group-Ex_Bureaucrat' => 'Kasqa burukratakuna',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|}}Kasqa burukrata',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Kasqa burukrata',
	'group-Image-reviewer' => "Rikch'a qhawapuqkuna",
	'group-Image-reviewer-member' => "{{GENDER:$1|}}rikch'a qhawapuq",
	'grouppage-Image-reviewer' => "{{ns:project}}:Rikch'a qhawapuqkuna",
	'group-OTRS-member' => 'OTRS wankurisqakuna',
	'group-OTRS-member-member' => '{{GENDER:$1|}}OTRS wankurisqa',
	'grouppage-OTRS-member' => '{{ns:project}}:OTRS wankurisqakuna',
	'group-abusefilter' => "Millay ruray suysuna llamk'apuqkuna",
	'group-abusefilter-member' => "{{GENDER:$1|}}millay ruray suysuna llamk'apuq",
	'grouppage-abusefilter' => "{{ns:project}}:Millay ruray ch'illchina llamk'apuqkuna",
	'group-accountcreator' => 'Rakiquna kamariqkuna',
	'group-accountcreator-member' => '{{GENDER:$1|}}rakiquna kamariq',
	'grouppage-accountcreator' => '{{ns:project}}:Rakiquna kamariqkuna',
	'group-arbcom' => 'Qutuchasqa samichaq wankurisqakuna',
	'group-arbcom-member' => '{{GENDER:$1|}}qutuchasqa samichaq wankurisqa',
	'grouppage-arbcom' => '{{ns:project}}:Qutuchasqa samichaq wankurisqakuna',
	'group-autopatrolled' => 'Kikinmanta patrullaqkuna',
	'group-autopatrolled-member' => '{{GENDER:$1|}}kikinmanta patrullaq',
	'grouppage-autopatrolled' => '{{ns:project}}:Kikinmanta patrullaqkuna',
	'group-autoreviewer' => 'Kikin llanchiqkuna',
	'group-autoreviewer-member' => '{{GENDER:$1|}}kikin llanchiq',
	'grouppage-autoreviewer' => '{{ns:project}}:Kikin llanchiqkuna',
	'group-bigexport' => 'Hatun hawaman quqkuna',
	'group-bigexport-member' => '{{GENDER:$1|}}hatun hawaman quq',
	'grouppage-bigexport' => '{{ns:project}}:Hatun hawaman quqkuna',
	'group-botadmin' => 'Kamachiqpa hayñinniyuq rurana antachakuna',
	'group-botadmin-member' => '{{GENDER:$1|}}kamachiqpa hayñinniyuq rurana antacha',
	'grouppage-botadmin' => '{{ns:project}}:Kamachiqpa hayñinniyuq rurana antacha',
	'group-confirmed' => 'Rakiqunayuq ruraqkuna',
	'group-confirmed-member' => '{{GENDER:$1|}}rakiqunayuq ruraq',
	'grouppage-confirmed' => '{{ns:project}}:Rakiqunayuq ruraqkuna',
	'group-editprotected' => "Amachasqa p'anqa llamk'apuqkuna",
	'group-editprotected-member' => "{{GENDER:$1|}}amachasqa p'anqa llamk'apuq",
	'grouppage-editprotected' => "{{ns:project}}:Amachasqa p'anqa llamk'apuqkuna",
	'group-eliminator' => 'Qulluchiqkuna',
	'group-eliminator-member' => '{{GENDER:$1|}}qulluchiq',
	'grouppage-eliminator' => '{{ns:project}}:Qulluchiq',
	'group-filemover' => 'Willañiqi astaqkuna',
	'group-filemover-member' => '{{GENDER:$1|}}willañiqi astaq',
	'grouppage-filemover' => '{{ns:project}}:Willañiqi astaqkuna',
	'group-flood' => 'Rurana antachayuqkuna',
	'group-flood-member' => '{{GENDER:$1|}}rurana antachayuq',
	'grouppage-flood' => '{{ns:project}}:Rurana antachayuqkuna',
	'group-founder' => 'Kamariqkuna',
	'group-founder-member' => '{{GENDER:$1|}}kamariq',
	'grouppage-founder' => '{{ns:project}}:Kamariqkuna',
	'group-import' => 'Hawamanta chaskiqkuna',
	'group-import-member' => '{{GENDER:$1|}}hawamanta chaskiq',
	'grouppage-import' => '{{ns:project}}:Hawamanta chaskiqkuna',
	'group-interface_editor' => "Uyapura llamk'apuqkuna",
	'group-interface_editor-member' => "{{GENDER:$1|}}uyapura llamk'apuq",
	'grouppage-interface_editor' => "{{ns:project}}:Uyapura llamk'apuqkuna",
	'group-ipblock-exempt' => "IP hark'aymanta qispisqakuna",
	'group-ipblock-exempt-member' => "{{GENDER:$1|}}IP hark'aymanta qispisqa",
	'grouppage-ipblock-exempt' => "{{ns:project}}:IP hark'aymanta qispisqakuna",
	'group-patroller' => 'Patrullaqkuna',
	'group-patroller-member' => '{{GENDER:$1|}}patrullaq',
	'group-researcher' => "K'uskiykuqkuna",
	'group-researcher-member' => "{{GENDER:$1|}}k'uskiykuq",
	'grouppage-researcher' => "{{ns:project}}:K'uskiykuqkuna",
	'group-rollbacker' => 'Kutichiqkuna',
	'group-rollbacker-member' => '{{GENDER:$1|}}kutichiq',
	'grouppage-rollbacker' => '{{ns:project}}:Kutichiqkuna',
	'group-transwiki' => 'Wikipura hawamanta chaskiqkuna',
	'group-transwiki-member' => '{{GENDER:$1|}}wikipura hawamanta chaskiq',
	'grouppage-transwiki' => '{{ns:project}}:Wikipura hawamanta chaskiqkuna',
	'group-trusted' => 'Sunqullisqa ruraqkuna',
	'group-trusted-member' => '{{GENDER:$1|}}sunqullisqa ruraq',
	'grouppage-trusted' => '{{ns:project}}:Sunqullisqa ruraqkuna',
	'group-Global_bot' => 'Sapsi rurana antachakuna',
	'group-Global_bot-member' => '{{GENDER:$1|}}sapsi rurana antacha',
	'group-Global_rollback' => 'Sapsi kutichiqkuna',
	'group-Global_rollback-member' => '{{GENDER:$1|}}sapsi kutichiq',
	'group-Global_sysops' => 'Sapsi kamachiqkuna',
	'group-Global_sysops-member' => '{{GENDER:$1|}}sapsi kamachiq',
	'group-Ombudsmen' => 'Ayllu amachaqkuna',
	'group-Ombudsmen-member' => '{{GENDER:$1|}}ayllu amachaq',
	'group-Staff' => "Llamk'aqninkuna",
	'group-Staff-member' => "llamk'aqninkuna",
	'group-editinterface' => "Uyapurata llamk'apuy",
	'group-editinterface-member' => "{{GENDER:$1|}}uyapura llamk'apuq",
	'group-steward' => 'Steward nisqakuna',
	'group-steward-member' => '{{GENDER:$1|}}steward',
	'group-sysadmin' => 'Llika kamachiqkuna',
	'group-sysadmin-member' => '{{GENDER:$1|}}llika kamachiq',
	'group-translationadmin' => "T'ikrana kamachiqkuna",
	'group-translationadmin-member' => "{{GENDER:$1|}}t'ikrana kamachiq",
	'grouppage-translationadmin' => "{{ns:project}}:T'ikrana kamachiq",
	'group-coder' => 'Wakichi qillqaqkuna',
	'group-coder-member' => '{{GENDER:$1|}}wakichi qillqaq',
	'group-inactive' => 'Puñuchkaq ruraqkuna',
	'group-inactive-member' => '{{GENDER:$1|}}puñuchkaq ruraq',
	'grouppage-inactive' => '{{ns:project}}:Puñuchkaq ruraqkuna',
	'wikimedia-copyright' => 'Kay qillqataqa <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike License</a> nisqapi ch\'uyanchasqa saqillaykamam chaskinki;
yapasqa phatakunachá kanqaku.
<a href="//wikimediafoundation.org/wiki/Terms_of_Use">Llamk\'apuypaq phatakuna</a> p\'anqapi qhaway astawan willasunaykipaq.',
	'wikimedia-copyrightwarning' => "\"{{int:savearticle}}\" butunta ñit'ispaykiqa, [//wikimediafoundation.org/wiki/Terms_of_Use kuspay phatakuna] nisqaman arí ninkim. Llamk'asqaykikunata mana kutinalla [//creativecommons.org/licenses/by-sa/3.0/ CC-BY-SA 3.0] nisqa saqillayman, [//www.gnu.org/copyleft/fdl.html GFDL] nisqa saqillaymanpas saqimpunki.
Arí ninki musuq llamk'apuqkunap qillqasqaykimanta willaspan mast'arinanman, llikapi tiyaypura llamk'apusqayki p'anqaman t'inkimuqwan, chaytaq lliwmanta aswan pisi.",
	'cant-delete-main-page' => "Qhapaq p'anqataqa manam qulluyta icha astayta atinkichu.",
);

/** Runa shimi (Runa shimi)
 * @author Sylvain2803
 */
$messages['qug'] = array(
	'sitesupport' => 'Kullkita karana',
);

/** Tarifit (Tarifit)
 * @author Agzennay
 */
$messages['rif'] = array(
	'tooltip-n-sitesupport' => 'Ɛawn-anɣ',
);

/** Romansh (rumantsch)
 * @author Gion-andri
 */
$messages['rm'] = array(
	'sitesupport' => 'Donaziuns',
	'tooltip-n-sitesupport' => 'Ans sustegna',
);

/** Romani (Romani)
 * @author Desiphral
 * @author לערי ריינהארט
 */
$messages['rmy'] = array(
	'sitesupport' => 'Denimata',
	'group-steward' => 'Stewardurya',
	'group-steward-member' => 'Stewardo', # Fuzzy
	'grouppage-steward' => '{{ns:project}}:Stewardurya',
);

/** Romanian (română)
 * @author AdiJapan
 * @author Cin
 * @author Emily
 * @author Firilacroco
 * @author KlaudiuMihaila
 * @author Laurap
 * @author Mihai
 * @author Minisarm
 * @author Misterr
 * @author Strainu
 */
$messages['ro'] = array(
	'wikimediamessages-desc' => 'Mesaje specifice Wikimediei',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=ro',
	'sitesupport' => 'Donații',
	'tooltip-n-sitesupport' => 'Sprijiniți-ne',
	'specialpages-group-contribution' => 'Donație / Colectare de fonduri',
	'nstab-creator' => 'Creator',
	'nstab-institution' => 'Instituție',
	'nstab-sequence' => 'Secvență',
	'nstab-timedtext' => 'Text datat',
	'group-Ex_Administrator' => 'Ex-administratori',
	'group-Ex_Administrator-member' => '{{GENDER:$1|ex-administrator}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Ex-administratori',
	'group-Ex_Bureaucrat' => 'Ex-birocrați',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|ex-birocrat}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Ex-birocrați',
	'group-Image-reviewer' => 'Recenzenți de imagini',
	'group-Image-reviewer-member' => '{{GENDER:$1|recenzent de imagini|recenzentă de imagini}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:Recenzenți de imagini',
	'group-OTRS-member' => 'membri ai OTRS',
	'group-OTRS-member-member' => '{{GENDER:$1|membru al OTRS|membră a OTRS}}',
	'grouppage-OTRS-member' => '{{ns:project}}:Membri ai OTRS',
	'group-abusefilter' => 'Editori de filtru de abuz',
	'group-abusefilter-member' => '{{GENDER:$1|editor de filtru de abuz|editoare de filtru de abuz}}',
	'grouppage-abusefilter' => '{{ns:project}}:Editori ai filtrului abuz',
	'group-accountcreator' => 'Creatori de conturi',
	'group-accountcreator-member' => '{{GENDER:$1|creator de conturi|creatoare de conturi}}',
	'grouppage-accountcreator' => '{{ns:project}}:Creatori de conturi',
	'group-arbcom' => 'Membrii comitetului de arbitraj',
	'group-arbcom-member' => '{{GENDER:$1|membru al comitetului de arbitrare|membră a comitetului de arbitrare}}',
	'grouppage-arbcom' => '{{ns:project}}:Membri ai comitetului de arbitrare',
	'group-autopatrolled' => 'Patrule automate',
	'group-autopatrolled-member' => '{{GENDER:$1|patrulă automată}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Patrulatori automați',
	'group-autoreviewer' => 'Autorecenzenți',
	'group-autoreviewer-member' => '{{GENDER:$1|autorecenzent|autorecenzentă}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Autorecenzenți',
	'group-bigexport' => 'Exportatori mari',
	'group-bigexport-member' => '{{GENDER:$1|mare exportator|mare exportatoare}}',
	'grouppage-bigexport' => '{{ns:project}}:Mari exportatori',
	'group-botadmin' => 'Roboți cu drepturi de administrator',
	'group-botadmin-member' => '{{GENDER:$1|robot cu drepturi de administrator}}',
	'grouppage-botadmin' => '{{ns:project}}:Roboți cu drepturi de administratori',
	'group-confirmed' => 'Utilizatori confirmați',
	'group-confirmed-member' => '{{GENDER:$1|utilizator confirmat|utilizatoare confirmată}}',
	'grouppage-confirmed' => '{{ns:project}}:Utilizatori confirmați',
	'group-editprotected' => 'Editori de pagini protejate',
	'group-editprotected-member' => '{{GENDER:$1|editor de pagini protejate|editoare de pagini protejate}}',
	'grouppage-editprotected' => '{{ns:project}}:Editori de pagini protejate',
	'group-eliminator' => 'Eliminatori',
	'group-eliminator-member' => '{{GENDER:$1|eliminator|eliminatoare}}',
	'grouppage-eliminator' => '{{ns:project}}:Eliminator',
	'group-filemover' => 'Utilizatori care redenumesc fișiere',
	'group-filemover-member' => '{{GENDER:$1|utilizator care redenumește fișiere|utilizatoare care redenumește fișiere}}',
	'grouppage-filemover' => '{{ns:project}}:Utilizatori care redenumesc pagini',
	'group-flood' => 'Utilizatori robot',
	'group-flood-member' => '{{GENDER:$1|utilizator robot|utilizatoare robot}}',
	'grouppage-flood' => '{{ns:project}}:Utilizatori robot',
	'group-founder' => 'Fondatori',
	'group-founder-member' => '{{GENDER:$1|fondator|fondatoare}}',
	'grouppage-founder' => '{{ns:project}}:Fondatori',
	'group-import' => 'Importatori',
	'group-import-member' => '{{GENDER:$1|importator|importatoare}}',
	'grouppage-import' => '{{ns:project}}:Importatori',
	'group-interface_editor' => 'Editori ai interfeței',
	'group-interface_editor-member' => '{{GENDER:$1|editor al interfeței|editoare a interfeței}}',
	'grouppage-interface_editor' => '{{ns:project}}:Editori ai interfeței',
	'group-ipblock-exempt' => 'Excepție blocare IP',
	'group-ipblock-exempt-member' => '{{GENDER:$1|exceptat la blocarea adresei IP|exceptată la blocarea adresei IP}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:exceptare blocare IP',
	'group-patroller' => 'Patrule',
	'group-patroller-member' => '{{GENDER:$1|patrulă}}',
	'grouppage-patroller' => '{{ns:project}}:Patrule',
	'group-researcher' => 'Cercetători',
	'group-researcher-member' => '{{GENDER:$1|cercetător|cercetătoare}}',
	'grouppage-researcher' => '{{ns:project}}:Cercetători',
	'group-rollbacker' => 'Revocatori',
	'group-rollbacker-member' => '{{GENDER:$1|revocator|revocatoare}}',
	'grouppage-rollbacker' => '{{ns:project}}:Revocatori',
	'group-transwiki' => 'Importatori între wiki',
	'group-transwiki-member' => '{{GENDER:$1|importator transwiki|importatoare transwiki}}',
	'grouppage-transwiki' => '{{ns:project}}:Importatori între wiki',
	'group-trusted' => 'Utilizatori de încredere',
	'group-trusted-member' => '{{GENDER:$1|utilizator de încredere|utilizatoare de încredere}}',
	'grouppage-trusted' => '{{ns:project}}: Utilizatori de încredere',
	'group-Global_bot' => 'Roboți globali',
	'group-Global_bot-member' => '{{GENDER:$1|robot global}}',
	'group-Global_rollback' => 'Revocatori globali',
	'group-Global_rollback-member' => '{{GENDER:$1|revocator global|revocatoare globală}}',
	'group-Global_sysops' => 'Administratori globali',
	'group-Global_sysops-member' => '{{GENDER:$1|administrator global}}',
	'group-Ombudsmen' => 'Mijlocitori independenți',
	'group-Ombudsmen-member' => '{{GENDER:$1|mijlocitor independent|mijlocitoare independentă}}',
	'group-Staff' => 'Angajați',
	'group-Staff-member' => 'angajat',
	'group-editinterface' => 'Editori de interfață',
	'group-editinterface-member' => '{{GENDER:$1|editor al interfeței|editoare a interfeței}}',
	'group-steward' => 'Stewarzi',
	'group-steward-member' => '{{GENDER:$1|steward}}',
	'group-sysadmin' => 'Administratori de sistem',
	'group-sysadmin-member' => '{{GENDER:$1|administrator de sistem}}',
	'group-translationadmin' => 'Administratori de traducere',
	'group-translationadmin-member' => '{{GENDER:$1|administrator de traducere}}',
	'grouppage-translationadmin' => '{{ns:project}}: Administratori de traducere',
	'group-coder' => 'Codificatori',
	'group-coder-member' => '{{GENDER:$1|codificator|codificatoare}}',
	'group-inactive' => 'Utilizatori inactivi',
	'group-inactive-member' => '{{GENDER:$1|utilizator inactiv|utilizatoare inactivă}}',
	'grouppage-inactive' => '{{ns:project}}:Utilizatori inactivi',
	'wikimedia-copyright' => 'Acest text este disponibil sub licența <a href="//creativecommons.org/licenses/by-sa/3.0/deed.ro">Creative Commons cu atribuire și distribuire în condiții identice</a>;
pot exista și clauze suplimentare.
Vedeți detalii la <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Termenii de utilizare</a>.',
	'wikidata-shortcopyrightwarning' => 'Apăsând „Salvare”, sunteți de acord cu [https://wikimediafoundation.org/wiki/Terms_of_Use termenii de utilizare] și acceptați irevocabil să vă eliberați contribuția sub [https://creativecommons.org/publicdomain/zero/1.0/ licența CC0].',
	'wikimedia-copyrightwarning' => 'Apăsând butonul „{{int:savearticle}}”, acceptați [//wikimediafoundation.org/wiki/Terms_of_Use Termenii de utilizare] și sunteți de acord să eliberați irevocabil contribuția dumneavoastră sub licențele [//creativecommons.org/licenses/by-sa/3.0/ Creative Commons Atribuire-Distribuire în condiții identice 3.0] și [//www.gnu.org/copyleft/fdl.html GFDL].
Sunteți de acord că o hiperlegătură sau un URL sunt suficiente pentru a vă atribui munca, conform licenței Creative Commons.',
	'cant-delete-main-page' => 'Nu puteți șterge sau redenumi pagina principală.',
	'wikimedia-translationnotifications-signup-legal' => 'Transmițând aceste informații Fundației Wikimedia, acceptați faptul că vă putem contacta în legătură cu traduceri sau alte subiecte asociate cu mișcarea Wikimedia, despre care noi credem vă v-ar interesa. Sunteți de acord că datele dumneavoastră ar putea fi stocate în Statele Unite ale Americii, acest lucru făcând subiectul [https://wikimediafoundation.org/wiki/Privacy_policy politicii noastre de confidențialitate] (în engleză).',
	'upload-more-photos-of-this-monument' => 'Încărcați mai multe fotografii cu acest monument',
	'extdist-branch-REL1_21' => '1.21 (ultimul MediaWiki stabil)',
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(ajută-mă să aleg)]]',
	'createacct-imgcaptcha-help' => 'Nu puteți vedea imaginea? [[{{MediaWiki:createacct-captcha-help-url}}|Cereți crearea unui cont]]',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 * @author Nemo bis
 * @author Reder
 */
$messages['roa-tara'] = array(
	'wikimediamessages-desc' => 'Wikimedia specific messages',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=roa-tara',
	'sitesupport' => 'Done',
	'tooltip-n-sitesupport' => 'Aiutene',
	'specialpages-group-contribution' => 'Condrebbute/Raccolte de le funne',
	'nstab-creator' => 'Ccrejatore',
	'nstab-institution' => 'Istituzione',
	'nstab-sequence' => 'Sequenze',
	'nstab-timedtext' => 'Teste Temporizzate',
	'group-Ex_Administrator' => 'Ex amministrature',
	'group-Ex_Administrator-member' => '{{GENDER:$1|ex amministratore}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Ex amministrature',
	'group-Ex_Bureaucrat' => 'Ex burocrate',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|ex burocrate}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Ex burocrate',
	'group-Image-reviewer' => 'Revisitature de immaggene',
	'group-Image-reviewer-member' => '{{GENDER:$1|revisitatore de immaggene}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:Revisitature de immaggene',
	'group-OTRS-member' => 'Membre OTRS',
	'group-OTRS-member-member' => '{{GENDER:$1|membre OTRS}}',
	'grouppage-OTRS-member' => '{{ns:project}}:Membre OTRS',
	'group-abusefilter' => "Cangiatore de le filtre d'abbuse",
	'group-abusefilter-member' => '{{GENDER:$1|cangiatore de filtre de abbuse}}',
	'grouppage-abusefilter' => '{{ns:project}}:Cangiature de filtre de abbuse',
	'group-accountcreator' => 'Ccrejature de cunde utinde',
	'group-accountcreator-member' => '{{GENDER:$1|ccreatore de cunde utinde}}',
	'grouppage-accountcreator' => '{{ns:project}}:Ccrejature de cunde utinde',
	'group-arbcom' => "Membre d'u collegge arbitrale",
	'group-arbcom-member' => "{{GENDER:$1|membre d'u collegge arbitrale}}",
	'grouppage-arbcom' => "{{ns:project}}:Membre d'u collegge arbitrale",
	'group-autopatrolled' => 'Auto condrollore',
	'group-autopatrolled-member' => '{{GENDER:$1|auto condrollore}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Auto condrollore',
	'group-autoreviewer' => 'Auto revisitature',
	'group-autoreviewer-member' => '{{GENDER:$1|auto revisitatore}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Auto revisitature',
	'group-bigexport' => 'Gruèsse esportature',
	'group-bigexport-member' => '{{GENDER:$1|granne esportatore}}',
	'grouppage-bigexport' => '{{ns:project}}:Gruèsse esportature',
	'group-botadmin' => 'Bot cu deritte de amministratore',
	'group-botadmin-member' => '{{GENDER:$1|bot cu le deritte de amministratore}}',
	'grouppage-botadmin' => '{{ns:project}}:Bot cu le deritte de le amministrature',
	'group-confirmed' => 'Utinde confirmatarije',
	'group-confirmed-member' => '{{GENDER:$1|utende confirmatarije}}',
	'grouppage-confirmed' => '{{ns:project}}:Utinde confirmatarije',
	'group-editprotected' => 'Editore de pagene prutette',
	'group-editprotected-member' => '{{GENDER:$1|editore de pàggene prutette}}',
	'grouppage-editprotected' => '{{ns:project}}:Editore de pagene prutette',
	'group-eliminator' => 'Eliminature',
	'group-eliminator-member' => '{{GENDER:$1|scangellatore}}',
	'grouppage-eliminator' => '{{ns:project}}:Eliminature',
	'group-filemover' => 'Spostature de file',
	'group-filemover-member' => '{{GENDER:$1|spustatore de file}}',
	'grouppage-filemover' => '{{ns:project}}:Spostature de file',
	'group-flood' => 'Utinde Bot',
	'group-flood-member' => '{{GENDER:$1|utende bot}}',
	'grouppage-flood' => '{{ns:project}}:Utinde Bot',
	'group-founder' => 'Fondature',
	'group-founder-member' => '{{GENDER:$1|fondatore}}',
	'grouppage-founder' => '{{ns:project}}:Fondature',
	'group-import' => "'Mbortature",
	'group-import-member' => "{{GENDER:$1|'mbortatore}}",
	'grouppage-import' => "{{ns:project}}:'Mbortature",
	'group-interface_editor' => 'Cangiature de inderfacce',
	'group-interface_editor-member' => '{{GENDER:$1|cangiatore de inderfacce}}',
	'grouppage-interface_editor' => "{{ns:project}}:Cangiature de l'inderfacce",
	'group-ipblock-exempt' => "IP escluse da 'u blocche",
	'group-ipblock-exempt-member' => '{{GENDER:$1|IP senza blocche}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP senza blocche',
	'group-patroller' => 'Condrollore',
	'group-patroller-member' => '{{GENDER:$1|condrollore}}',
	'grouppage-patroller' => '{{ns:project}}:Condrollore',
	'group-researcher' => 'Recercature',
	'group-researcher-member' => '{{GENDER:$1|recèrcatore}}',
	'grouppage-researcher' => '{{ns:project}}:Ricercature',
	'group-rollbacker' => 'Annullature',
	'group-rollbacker-member' => '{{GENDER:$1|annullatore}}',
	'grouppage-rollbacker' => '{{ns:project}}:Annullature',
	'group-transwiki' => "'Mbortature 'mbrà Uicchi",
	'group-transwiki-member' => "{{GENDER:$1|'mbortatore de transuicchi}}",
	'grouppage-transwiki' => "{{ns:project}}:'Mbortature de TransUicchi",
	'group-trusted' => 'Utinde fidate',
	'group-trusted-member' => '{{GENDER:$1|utende fidate}}',
	'grouppage-trusted' => '{{ns:project}}:Utinde fidate',
	'group-uploader' => 'Carecatore',
	'group-uploader-member' => '{{GENDER:$1|carecatore}}',
	'grouppage-uploader' => '{{ns:project}}:Carecature',
	'group-Global_bot' => 'Bot globale',
	'group-Global_bot-member' => '{{GENDER:$1|bot globbale}}',
	'group-Global_rollback' => 'Annullature globale',
	'group-Global_rollback-member' => '{{GENDER:$1|annullatore globbale}}',
	'group-Global_sysops' => 'Sysop globbale',
	'group-Global_sysops-member' => '{{GENDER:$1|amministratore globbale}}',
	'group-Ombudsmen' => 'Mediature',
	'group-Ombudsmen-member' => '{{GENDER:$1|mediatore}}',
	'group-Staff' => "'U personale",
	'group-Staff-member' => "cristiàne d'u personele",
	'group-editinterface' => 'Cangiature de inderfacce',
	'group-editinterface-member' => '{{GENDER:$1|cangiatore de inderfacce}}',
	'group-steward' => 'Steward',
	'group-steward-member' => '{{GENDER:$1|steward}}',
	'group-sysadmin' => "Amministrature d'u sisteme",
	'group-sysadmin-member' => '{{GENDER:$1|amministratore de sisteme}}',
	'group-API_High_Limit_Requestor' => "API d'u limite ierte de richiedende",
	'group-API_High_Limit_Requestor-member' => '{{GENDER:$1|API limite ierte de richiedende}}',
	'group-Indic_Bots' => 'Bot Indic',
	'group-Indic_Bots-member' => '{{GENDER:$1|bot indic}}',
	'group-New_wikis_importer' => "'Mbortature de uicchi nuève",
	'group-New_wikis_importer-member' => "{{GENDER:$1|'mbortatore de uicchi nuève}}",
	'group-global-ipblock-exempt' => 'Esclusiune de blocche globbale de IP',
	'group-global-ipblock-exempt-member' => "{{GENDER:$1|Esezione de le blocca globbale de l'IP}}",
	'group-recursive-export' => 'Esportazione recorsive',
	'group-recursive-export-member' => '{{GENDER:$1|esportatore recorsive}}',
	'group-translationadmin' => 'Amministrature de le traduziune',
	'group-translationadmin-member' => '{{GENDER:$1|amministratore de le traduziune}}',
	'grouppage-translationadmin' => '{{ns:project}}:Amministrature de le traduziune',
	'group-centralnoticeadmin' => 'Amministrature de le notizie cendralizzate',
	'group-centralnoticeadmin-member' => '{{GENDER:$1|amministratore de le notizie cendralizzate}}',
	'grouppage-centralnoticeadmin' => '{{ns:project}}:Amministrature de le notizie cendralizzate',
	'group-coder' => 'Codificature',
	'group-coder-member' => '{{GENDER:$1|codificatore}}',
	'group-inactive' => 'Utinde inattive',
	'group-inactive-member' => '{{GENDER:$1|utende inattive}}',
	'grouppage-inactive' => '{{ns:project}}:Utinde inattive',
	'wikimedia-copyright' => "'U teste ète disponibbile sotte 'a <a href=\"//creativecommons.org/licenses/by-sa/3.0/\">licenze ''Creative Commons Attribution/Condivide a 'u stesse mode</a>;
termine addizionale pò essere applicate.
Vide <a href=\"//wikimediafoundation.org/wiki/Terms_of_use\">Termine de Utilizze</a> pe cchiù 'mbormaziune.",
	'wikidata-copyright' => 'Tutte le date strutturate da \'u namespace prengepàle e probbietà sue jè disponibbile sotte a <a href="//creativecommons.org/publicdomain/zero/1.0/" title="Definition of the Creative Commons CC0 License">Licenze Creative Commons CC0</a>;
teste jndr\'à otre namespace jè disponibbile sotte a <a href="//creativecommons.org/licenses/by-sa/3.0/" title="Definition of the Creative Commons Attribution/Share-Alike License">Licenze de Creative Commons Attribution/Share-Alike</a>;
termine addizionale ponne essere applicate.
\'Ndruche <a href="//wikimediafoundation.org/wiki/Terms_of_Use" title="Wikimedia Foundation Terms of Use">le Termine d\'ause</a> pe dettaglie.',
	'wikidata-shortcopyrightwarning' => 'Cazzanne  "{{int:wikibase-save}}", tu accette le [//wikimediafoundation.org/wiki/Terms_of_Use termine d\'ause], e tu irrevocabbilmende accette de relascià \'u condrebbute tune sotte a [https://creativecommons.org/publicdomain/zero/1.0/ licenze CC0].',
	'wikimedia-copyrightwarning' => "Cazzanne 'u bottone \"{{int:savearticle}}\", tu ste accette le [//wikimediafoundation.org/wiki/Terms_of_Use condizziune d'ause] e irrevocabbilmende accette de relassà 'u condrebbute tune sotte le licenze [//creativecommons.org/licenses/by-sa/3.0/ CC-BY-SA 3.0 Licenze] e [//www.gnu.org/copyleft/fdl.html GFDL].
Tu accette ca 'nu ipercollegamende o URL jè sufficiende pe l'attribbuzione sotte 'a Licenze Creative Commons.",
	'wikibase-sitelinks-wikivoyage' => 'Pàggene de Uicchivoyage collegate a sta vôsce',
	'cant-delete-main-page' => "Non ge puè scangellà o spustà 'a pàgena prengepàle.",
	'wikimedia-translationnotifications-signup-legal' => "Tu sì d'accorde ca danne a Wikimedia Foundation ste 'mbormaziune nuje te putime condattà riguarde a le traduziune o a otre argomende collegate a le movimende de Uicchimedia ca penzeme ca ponne essere inderessande pe tè. Tu sì d'accorde ca le date tune ponne essere stipate jndr'à le State Aunìte d'Americhe e so suggette a le nostre [https://wikimediafoundation.org/wiki/Privacy_policy regole d'a privacy].",
	'upload-more-photos-of-this-monument' => 'Careche cchiù fote de stu monumende',
	'extdist-branch-master' => 'master (urtema versione de sveluppe)',
	'extdist-branch-REL1_21' => '1.21 (urtema versione secure de MediaUicchi)',
	'createacct-helpusername-url' => '{{ns:Project}}:Regole_pu_nome_utende',
	'createacct-helpusername' => "[[{{MediaWiki:createacct-helpusername-url}}|(damme 'na màne a scacchià)]]",
	'createacct-captcha-help-url' => "{{ns:Project}}:Cirche 'nu cunde",
	'createacct-imgcaptcha-help' => "Non ge puè 'ndrucà l'immaggine? [[{{MediaWiki:createacct-captcha-help-url}}|Cirche 'nu cunde]]",
);

/** Russian (русский)
 * @author Ahonc
 * @author Aleksandrit
 * @author AlexSm
 * @author Crazymadlover
 * @author DCamer
 * @author Dim Grits
 * @author Eugrus
 * @author Ferrer
 * @author Flrn
 * @author HalanTul
 * @author Illusion
 * @author Kaganer
 * @author Kalan
 * @author Lockal
 * @author MaxSem
 * @author Platonides
 * @author Putnik
 * @author TarzanASG
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'wikimediamessages-desc' => 'Сообщения, специфичные для Викимедиа',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=ru',
	'sitesupport' => 'Пожертвования',
	'tooltip-n-sitesupport' => 'Поддержите нас',
	'specialpages-group-contribution' => 'Пожертвования/Сбор средств',
	'nstab-creator' => 'Автор',
	'nstab-institution' => 'Учреждение',
	'nstab-sequence' => 'Последовательность',
	'nstab-timedtext' => 'Синхротекст',
	'group-Ex_Administrator' => 'Бывшие администраторы',
	'group-Ex_Administrator-member' => '{{GENDER:$1|бывший администратор}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Бывшие администраторы',
	'group-Ex_Bureaucrat' => 'Бывшие бюрократы',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|бывший бюрократ}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Бывшие бюрократы',
	'group-Image-reviewer' => 'Проверяющие изображения',
	'group-Image-reviewer-member' => '{{GENDER:$1|проверяющий изображения|проверяющая изображения}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:Проверяющие изображения',
	'group-OTRS-member' => 'Члены OTRS',
	'group-OTRS-member-member' => '{{GENDER:$1|член OTRS}}',
	'grouppage-OTRS-member' => '{{ns:project}}:Члены OTRS',
	'group-abusefilter' => 'Редакторы фильтра злоупотреблений',
	'group-abusefilter-member' => '{{GENDER:$1|редактор фильтра злоупотреблений}}',
	'grouppage-abusefilter' => '{{ns:project}}:Редакторы фильтра злоупотреблений',
	'group-accountcreator' => 'Создатели учётных записей',
	'group-accountcreator-member' => '{{GENDER:$1|создатель учётных записей|создательница учётных записей}}',
	'grouppage-accountcreator' => '{{ns:project}}:Создатели учётных записей',
	'group-arbcom' => 'Члены арбитражного комитета',
	'group-arbcom-member' => '{{GENDER:$1|член арбитражного комитета}}',
	'grouppage-arbcom' => '{{ns:project}}:Члены арбитражного комитета',
	'group-autopatrolled' => 'Автопатрулируемые',
	'group-autopatrolled-member' => '{{GENDER:$1|автопатрулируемый|автопатрулируемая}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Автопатрулируемые',
	'group-autoreviewer' => 'Автодосматриваемые',
	'group-autoreviewer-member' => '{{GENDER:$1|автодосматриваемый|автодосматриваемая}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Автодосматриваемые',
	'group-bigexport' => 'Крупные экспортёры',
	'group-bigexport-member' => '{{GENDER:$1|крупный экспортёр}}',
	'grouppage-bigexport' => '{{ns:project}}:Крупные экспортёры',
	'group-botadmin' => 'Боты с правами администратора',
	'group-botadmin-member' => '{{GENDER:$1|бот с правами администратора}}',
	'grouppage-botadmin' => '{{ns:project}}:Боты с правами администратора',
	'group-confirmed' => 'Подтверждённые участники',
	'group-confirmed-member' => '{{GENDER:$1|подтверждённый участник|подтверждённая участница}}',
	'grouppage-confirmed' => '{{ns:project}}:Подтверждённые участники',
	'group-editprotected' => 'Редакторы защищённой страницы',
	'group-editprotected-member' => '{{GENDER:$1|редактор защищённых страниц}}',
	'grouppage-editprotected' => '{{ns:project}}:Редакторы защищённых страниц',
	'group-eliminator' => 'Удаляющие',
	'group-eliminator-member' => '{{GENDER:$1|удаляющий|удаляющая}}',
	'grouppage-eliminator' => '{{ns:project}}:Удаляющие',
	'group-filemover' => 'Переименовывающие файлы',
	'group-filemover-member' => '{{GENDER:$1|переименовывающий файлы|переименовывающая файлы}}',
	'grouppage-filemover' => '{{ns:project}}:Переименовывающие файлы',
	'group-flood' => 'Участники-боты',
	'group-flood-member' => '{{GENDER:$1|участник-бот}}',
	'grouppage-flood' => '{{ns:project}}:Участники-боты',
	'group-founder' => 'Основатели',
	'group-founder-member' => '{{GENDER:$1|основатель|основательница}}',
	'grouppage-founder' => '{{ns:project}}:Основатели',
	'group-import' => 'Импортирующие',
	'group-import-member' => '{{GENDER:$1|импортирующий|импортирующая}}',
	'grouppage-import' => '{{ns:project}}:Импортирующие',
	'group-interface_editor' => 'Редакторы интерфейса',
	'group-interface_editor-member' => '{{GENDER:$1|редактор интерфейса}}',
	'grouppage-interface_editor' => '{{ns:project}}:Редакторы интерфейса',
	'group-ipblock-exempt' => 'Исключения из IP-блокировок',
	'group-ipblock-exempt-member' => '{{GENDER:$1|исключение из IP-блокировок}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Исключение из IP-блокировок',
	'group-patroller' => 'Патрулирующие',
	'group-patroller-member' => '{{GENDER:$1|патрулирующий|патрулирующая}}',
	'grouppage-patroller' => '{{ns:project}}:Патрулирующие',
	'group-researcher' => 'Исследователи',
	'group-researcher-member' => '{{GENDER:$1|исследователь|исследовательница}}',
	'grouppage-researcher' => '{{ns:project}}:Исследователь',
	'group-rollbacker' => 'Откатывающие',
	'group-rollbacker-member' => '{{GENDER:$1|откатывающий|откатывающая}}',
	'grouppage-rollbacker' => '{{ns:project}}:Откатывающие',
	'group-transwiki' => 'Межвики-импортирующие',
	'group-transwiki-member' => '{{GENDER:$1|межвики-импортирующий|межвики-импортирующая}}',
	'grouppage-transwiki' => '{{ns:project}}:Межвики-импортирующие',
	'group-trusted' => 'Доверенные участники',
	'group-trusted-member' => '{{GENDER:$1|доверенный участник|доверенная участница}}',
	'grouppage-trusted' => '{{ns:project}}:Доверенные участники',
	'group-uploader' => 'Загружающие',
	'group-uploader-member' => 'загружающий', # Fuzzy
	'grouppage-uploader' => '{{ns:project}}:Загружающие',
	'group-Global_bot' => 'Глобальные боты',
	'group-Global_bot-member' => '{{GENDER:$1|глобальный бот}}',
	'grouppage-Global_bot' => 'm:Global bot',
	'group-Global_rollback' => 'Глобальные откатывающие',
	'group-Global_rollback-member' => '{{GENDER:$1|глобальный откатывающий|глобальная откатывающая}}',
	'grouppage-Global_rollback' => 'm:Global rollback',
	'group-Global_sysops' => 'Глобальные администраторы',
	'group-Global_sysops-member' => '{{GENDER:$1|глобальный администратор}}',
	'grouppage-Global_sysops' => 'm:Global sysops',
	'group-Ombudsmen' => 'Омбудсмены',
	'group-Ombudsmen-member' => '{{GENDER:$1|омбудсмен}}',
	'grouppage-Ombudsmen' => 'm:Ombudsman commission',
	'group-Staff' => 'Сотрудники',
	'group-Staff-member' => 'сотрудник',
	'grouppage-Staff' => 'Foundation:Staff',
	'group-editinterface' => 'Редакторы интерфейса',
	'group-editinterface-member' => '{{GENDER:$1|редактор интерфейса}}',
	'group-steward' => 'Стюарды',
	'group-steward-member' => '{{GENDER:$1|стюард}}',
	'grouppage-steward' => 'm:Stewards/ru',
	'group-sysadmin' => 'Системные администраторы',
	'group-sysadmin-member' => '{{GENDER:$1|системный администратор}}',
	'grouppage-sysadmin' => 'm:System administrators',
	'group-New_wikis_importer' => 'Импортеры новых вики',
	'group-New_wikis_importer-member' => '{{GENDER:$1|импортер новых вики}}',
	'group-global-ipblock-exempt' => 'Глобальные исключения из IP-блокировок',
	'group-global-ipblock-exempt-member' => '{{GENDER:$1|глобальное исключение из IP-блокировок}}',
	'group-recursive-export' => 'Рекурсивный экспорт',
	'group-translationadmin' => 'Администраторы перевода',
	'group-translationadmin-member' => '{{GENDER:$1|администратор перевода}}',
	'grouppage-translationadmin' => '{{ns:project}}:Администраторы перевода',
	'group-centralnoticeadmin' => 'Администраторы централизованных объявлений',
	'group-centralnoticeadmin-member' => '{{GENDER:$1|администратор централизованных объявлений}}',
	'grouppage-centralnoticeadmin' => '{{ns:project}}:Central notice administrators',
	'group-coder' => 'Программисты',
	'group-coder-member' => '{{GENDER:$1|программист}}',
	'grouppage-coder' => '{{ns:project}}:Coder',
	'group-inactive' => 'Неактивные участники',
	'group-inactive-member' => '{{GENDER:$1|бездействующий участник|бездействующая участница}}',
	'grouppage-inactive' => '{{ns:project}}:Неактивные участники',
	'shared-repo-name-shared' => 'Викисклада',
	'wikimedia-copyright' => 'Текст доступен по <a href="//creativecommons.org/licenses/by-sa/3.0/deed.ru">лицензии Creative Commons Attribution/Share-Alike</a>, в отдельных случаях могут действовать дополнительные условия. Подробнее см. <a href="//wikimediafoundation.org/wiki/Terms_of_Use/ru">Условия использования</a>.',
	'wikimedia-copyrightwarning' => 'Нажимая кнопку «{{int:savearticle}}», вы соглашаетесь с [//wikimediafoundation.org/wiki/Terms_of_Use/ru условиями использования], а также соглашаетесь на неотзывную публикацию по лицензиям [//ru.wikipedia.org/wiki/Википедия:Текст_лицензии_Creative_Commons_Attribution-ShareAlike_3.0_Unported CC-BY-SA 3.0] и [//en.wikipedia.org/wiki/Wikipedia:Text_of_the_GNU_Free_Documentation_License GFDL]. Вы соглашаетесь, что указание гиперссылки на соответствующую страницу или её URL-адреса будет достаточным для выполнения условия атрибуции лицензии Creative Commons.',
	'wikibase-sitelinks-wikivoyage' => 'Страницы Викигида, связанные с этим элементом',
	'cant-delete-main-page' => 'Вы не можете удалить или переименовать главную страницу.',
	'wikimedia-translationnotifications-signup-legal' => 'Вы соглашаетесь, что после предоставления Фонду Викимедиа этой информации мы можем связаться с вами по поводу переводов или других вопросов, связанных с движением Викимедиа, которые мы посчитаем интересными вам. Вы соглашатесь, что ваши данные могут храниться в Соединённых Штатах Америки в соответствии с нашей [https://wikimediafoundation.org/wiki/Privacy_policy политикой конфиденциальности] ([https://wikimediafoundation.org/wiki/%D0%9F%D0%BE%D0%BB%D0%B8%D1%82%D0%B8%D0%BA%D0%B0_%D0%BA%D0%BE%D0%BD%D1%84%D0%B8%D0%B4%D0%B5%D0%BD%D1%86%D0%B8%D0%B0%D0%BB%D1%8C%D0%BD%D0%BE%D1%81%D1%82%D0%B8 русский перевод политики]).',
	'upload-more-photos-of-this-monument' => 'Загрузить больше фотографий этого объекта',
);

/** Rusyn (русиньскый)
 * @author Gazeb
 * @author Krinkle
 */
$messages['rue'] = array(
	'wikimediamessages-desc' => 'Повідомлїня, характерістічны про Вікімедію',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=rue',
	'sitesupport' => 'Підпорьте нас',
	'tooltip-n-sitesupport' => 'Підпорьте нас',
	'specialpages-group-contribution' => 'Приспевкы/фінанцованя',
	'nstab-creator' => 'Автор',
	'nstab-institution' => 'Інштітуція',
	'nstab-sequence' => 'Послїдовность',
	'nstab-timedtext' => 'Субтитри',
	'group-Image-reviewer' => 'Перевірникы образків',
	'group-Image-reviewer-member' => 'перевірник образків', # Fuzzy
	'grouppage-Image-reviewer' => '{{ns:project}}:Перевірникы образків',
	'group-OTRS-member' => 'Члены OTRS',
	'group-OTRS-member-member' => 'член OTRS', # Fuzzy
	'grouppage-OTRS-member' => '{{ns:project}}:Члены OTRS',
	'group-abusefilter' => 'Адміністраторы філтра знеужываня',
	'group-abusefilter-member' => 'адміністратор філтра знеужываня', # Fuzzy
	'grouppage-abusefilter' => '{{ns:project}}:Редакторы філтра знеужываня',
	'group-accountcreator' => 'Створювачі конт',
	'group-accountcreator-member' => 'створювач конт', # Fuzzy
	'grouppage-accountcreator' => '{{ns:project}}:Закладателї конт',
	'group-arbcom' => 'Члены арбітражного комітету',
	'group-arbcom-member' => 'член арбітражного комітету', # Fuzzy
	'grouppage-arbcom' => '{{ns:project}}:Члены арбітражного комітету',
	'group-autopatrolled' => 'Автопатролы',
	'group-autopatrolled-member' => 'автопатрола', # Fuzzy
	'grouppage-autopatrolled' => '{{ns:project}}:Автопатрола',
	'group-autoreviewer' => 'Авторедакторы',
	'group-autoreviewer-member' => 'авторедактор', # Fuzzy
	'grouppage-autoreviewer' => '{{ns:project}}:Авторедакторы',
	'group-bigexport' => 'Велікоекспортеры',
	'group-bigexport-member' => 'велікоекспортер', # Fuzzy
	'grouppage-bigexport' => '{{ns:project}}:Великоекспортеры',
	'group-confirmed' => 'Підтверджены хоснователї',
	'group-confirmed-member' => 'підтвердженый хоснователь', # Fuzzy
	'grouppage-confirmed' => '{{ns:project}}:Підтверджены хоснователї',
	'group-editprotected' => 'Редакторы замкнутых сторінок',
	'group-editprotected-member' => 'редактор замкнутых сторінок', # Fuzzy
	'grouppage-editprotected' => '{{ns:project}}:Редакторы замкнутых сторінок',
	'group-eliminator' => 'Елімінаторы',
	'group-eliminator-member' => 'елімінатор', # Fuzzy
	'grouppage-eliminator' => '{{ns:project}}:Елімінатор',
	'group-filemover' => 'Переменовачі файлів',
	'group-filemover-member' => 'переменовач файлів', # Fuzzy
	'grouppage-filemover' => '{{ns:project}}:Переменовачі файлів',
	'group-flood' => 'Бот-хоснователї',
	'group-flood-member' => 'бот-хоснователь', # Fuzzy
	'grouppage-flood' => '{{ns:project}}:Бот-хоснователї',
	'group-founder' => 'Основникы',
	'group-founder-member' => 'закладатель', # Fuzzy
	'grouppage-founder' => '{{ns:project}}:Закладателї',
	'group-import' => 'Імпортеры',
	'group-import-member' => 'імпортер', # Fuzzy
	'grouppage-import' => '{{ns:project}}:Імпортеры',
	'group-interface_editor' => 'Редакторы інтерфейсу',
	'group-interface_editor-member' => 'редактор інтерфейсу', # Fuzzy
	'grouppage-interface_editor' => '{{ns:project}}:Редакторы інтерфейсу',
	'group-ipblock-exempt' => 'Выняткы з блокованя IP адрес',
	'group-ipblock-exempt-member' => 'выняткок з блокованя IP адрес', # Fuzzy
	'grouppage-ipblock-exempt' => '{{ns:project}}:Выняткы з блокованя IP адрес',
	'group-patroller' => 'Патролы',
	'group-patroller-member' => 'патрола', # Fuzzy
	'group-researcher' => 'Бадателї',
	'group-researcher-member' => 'бадатель', # Fuzzy
	'grouppage-researcher' => '{{ns:project}}:Бадателї',
	'group-rollbacker' => 'Бадателї',
	'group-rollbacker-member' => 'ревертователь', # Fuzzy
	'grouppage-rollbacker' => '{{ns:project}}:Ревертователї',
	'group-transwiki' => 'Transwiki-імпортеры',
	'group-transwiki-member' => 'Transwiki-імпортер', # Fuzzy
	'grouppage-transwiki' => '{{ns:project}}:Transwiki-імпортеры',
	'group-trusted' => 'Довірны хоснователї',
	'group-trusted-member' => 'довірный хоснователь', # Fuzzy
	'grouppage-trusted' => '{{ns:project}}:Довірны хоснователї',
	'group-Global_bot' => 'Ґлобалны боты',
	'group-Global_bot-member' => 'ґлобалный бот', # Fuzzy
	'group-Global_rollback' => 'Ґлобалны ревертователї',
	'group-Global_rollback-member' => 'ґлобалный ревертователь', # Fuzzy
	'group-Global_sysops' => 'Ґлобалны адміністраторы',
	'group-Global_sysops-member' => 'ґлобалный адміністратор', # Fuzzy
	'group-Ombudsmen' => 'Омбудсмены',
	'group-Ombudsmen-member' => 'омбудсман', # Fuzzy
	'group-Staff' => 'Персонал',
	'group-Staff-member' => 'член персоналу',
	'group-editinterface' => 'Редакторы інтерфейсу',
	'group-editinterface-member' => 'редактор інтерфейсу', # Fuzzy
	'group-steward' => 'Стеварды',
	'group-steward-member' => 'стевард', # Fuzzy
	'group-sysadmin' => 'Сістемовы адміністраторы',
	'group-sysadmin-member' => 'сістемный адміністратор', # Fuzzy
	'group-coder' => 'Проґраматоры',
	'group-coder-member' => 'проґраматор', # Fuzzy
	'group-inactive' => 'Неактівны хоснователї',
	'group-inactive-member' => 'неактівный хоснователь', # Fuzzy
	'grouppage-inactive' => '{{ns:project}}:Неактівны хоснователї',
	'wikimedia-copyright' => 'Текст є доступный під <a href="//creativecommons.org/licenses/by-sa/3.0/deed.rue">ліценціов Creative Commons Зазначте автора&nbsp;– Уховайте ліценцію</a>, припадно за далшых условій. Детайлы найдете на сторінцї <a href="//wikimediafoundation.org/wiki/Условія_схоснованя">Условія схоснованя</a>.',
	'wikimedia-copyrightwarning' => 'Уложінём ваш приспівок непокликательно увольнюєте під ліценціями [//creativecommons.org/licenses/by-sa/3.0/deed.rue Creative Commons Зазначте автора&nbsp;– Вскокотьте ліценцію&nbsp;3.0] і&nbsp;[//www.gnu.org/copyleft/fdl.html GFDL]. Согласите з&nbsp;тым, жебы далшы хоснователї ваше авторство увели холем формов гіпертекстового одказу або адресы на сторінку, до котрой приспівате. Детайлы найдете в&nbsp;[//wikimediafoundation.org/wiki/Условія_хоснованя условіях хоснованя].',
);

/** Aromanian (Armãneashce)
 * @author Hakka
 */
$messages['rup'] = array(
	'sitesupport' => 'Donatsiur',
);

/** Megleno-Romanian (Cyrillic script) (Влахесте)
 * @author Кумулај Маркус
 * @author Макѕе
 */
$messages['ruq-cyrl'] = array(
	'sitesupport' => 'Донационс',
	'tooltip-n-sitesupport' => 'Супора-ностре',
);

/** Megleno-Romanian (Latin script) (Vlăheşte)
 * @author Кумулај Маркус
 * @author Макѕе
 */
$messages['ruq-latn'] = array(
	'sitesupport' => 'Donacions',
	'tooltip-n-sitesupport' => 'Supora-nostre',
);

/** Sanskrit (संस्कृतम्)
 * @author Nemo bis
 * @author Shubha
 */
$messages['sa'] = array(
	'wikimediamessages-desc' => 'विकिमाध्यमस्य विशिष्टसन्देशाः',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=sa',
	'sitesupport' => 'दानम्',
	'tooltip-n-sitesupport' => 'साहाय्यं क्रियताम्',
	'specialpages-group-contribution' => 'योगदानम्/निधिसङ्ग्राहकः',
	'nstab-creator' => 'निर्माता',
	'nstab-institution' => 'संस्था',
	'nstab-sequence' => 'अनुक्रमः',
	'nstab-timedtext' => 'समयानुवर्ती पाठः',
	'group-Ex_Administrator' => 'भूतपूर्वप्रबन्धकाः',
	'group-Ex_Administrator-member' => '{{GENDER:$1|भूतपूर्वप्रबन्धकः}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:भूतपूर्वप्रबन्धकाः',
	'group-Ex_Bureaucrat' => 'भूतपूर्वप्रशासकाः',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|भूतपूर्वप्रशासकः}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:भूतपूर्वप्रशासकाः',
	'group-Image-reviewer' => 'चित्रसमीक्षकाः',
	'group-Image-reviewer-member' => '{{GENDER:$1|चित्रसमीक्षकः}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:चित्रसमीक्षकाः',
	'group-OTRS-member' => 'OTRS सदस्याः',
	'group-OTRS-member-member' => '{{GENDER:$1|OTRS सदस्यः}}',
	'grouppage-OTRS-member' => '{{ns:project}}:OTRS सदस्याः',
	'group-abusefilter' => 'निन्दित-चालनीयोजकाः',
	'group-abusefilter-member' => '{{GENDER:$1|निन्दितचालनीयोजकः}}',
	'grouppage-abusefilter' => '{{ns:project}}:निन्दितचालनीसम्पादकाः',
	'group-accountcreator' => 'अभिलेखनिर्मातारः',
	'group-accountcreator-member' => '{{GENDER:$1|अभिलेखनिर्माता}}',
	'grouppage-accountcreator' => '{{ns:project}}:अभिलेखनिर्मातारः',
	'group-arbcom' => 'मध्यस्थमण्डलसदस्याः',
	'group-arbcom-member' => '{{GENDER:$1|मध्यस्थसंस्थासदस्यः}}',
	'grouppage-arbcom' => '{{ns:project}}:मध्यस्थमण्डलसदस्याः',
	'group-autopatrolled' => 'स्वसमीक्षकाः',
	'group-autopatrolled-member' => '{{GENDER:$1|स्वसमीक्षकः}}',
	'grouppage-autopatrolled' => '{{ns:project}}:स्वसमीक्षकाः',
	'group-autoreviewer' => 'स्वचालितपरिशीलकाः',
	'group-autoreviewer-member' => '{{GENDER:$1|स्वचालितसमीक्षकः}}',
	'grouppage-autoreviewer' => '{{ns:project}}:स्वचालितपरिशीलकाः',
	'group-bigexport' => 'महानिर्यातकाः',
	'group-bigexport-member' => 'महानिर्यातकः',
	'grouppage-bigexport' => '{{ns:project}}:महानिर्यातकाः',
	'group-botadmin' => 'प्रबन्धकाधिकारेण युक्ताः बाट्स्',
	'group-botadmin-member' => '{{GENDER:$1|प्रबन्धकाधिकारयुक्तः बाट्}}',
	'grouppage-botadmin' => '{{ns:project}}:रबन्धकाधिकारेण युक्ताः बाट्स्',
	'group-confirmed' => 'स्थिरीकृतसदस्याः',
	'group-confirmed-member' => '{{GENDER:$1|दृढीकृतयोजकः}}',
	'grouppage-confirmed' => '{{ns:project}}: दृढीकृतयोजकः ।',
	'group-editprotected' => 'सुरक्षितपृष्ठानां सम्पादकाः',
	'group-editprotected-member' => '{{GENDER:$1|सुरक्षितपृष्ठसम्पादकः}}',
	'grouppage-editprotected' => '{{ns:project}}:सुरक्षितपृष्ठानां सम्पादकाः',
	'group-eliminator' => 'वर्जकाः',
	'group-eliminator-member' => '{{GENDER:$1|वर्जकः}}',
	'grouppage-eliminator' => '{{ns:project}}:वर्जकः',
	'group-filemover' => 'सञ्चिकाचालकाः',
	'group-filemover-member' => '{{GENDER:$1|सञ्चिकाचालकः}}',
	'grouppage-filemover' => '{{ns:project}}:सञ्चिकाचालकाः',
	'group-flood' => 'बाट्योजकाः',
	'group-flood-member' => '{{GENDER:$1|बाट् योजकः}}',
	'grouppage-flood' => '{{ns:project}}:बाट्योजकाः',
	'group-founder' => 'संस्थापकाः',
	'group-founder-member' => '{{GENDER:$1|संस्थापकः}}',
	'grouppage-founder' => '{{ns:project}}:संस्थापकाः',
	'group-import' => 'आयातकाः',
	'group-import-member' => '{{GENDER:$1|आयातकः}}',
	'grouppage-import' => '{{ns:project}}:आयातकाः',
	'group-interface_editor' => 'इंटरफेस सम्पादकाः',
	'group-interface_editor-member' => '{{GENDER:$1|इण्टरफ़ेस् सम्पादकः}}',
	'grouppage-interface_editor' => '{{ns:project}}:इण्टरफ़ेस् सम्पादकाः',
	'group-ipblock-exempt' => 'आईपी अवरोधमुक्ताः',
	'group-ipblock-exempt-member' => '{{GENDER:$1|ऐपि अवरोधमुक्तः}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:ऐपि अवरोधमुक्तः',
	'group-patroller' => 'निरीक्षकाः',
	'group-patroller-member' => '{{GENDER:$1|निरीक्षकः}}',
	'grouppage-patroller' => '{{ns:project}}:आरक्षकाः',
	'group-researcher' => 'संशोधकाः',
	'group-researcher-member' => '{{GENDER:$1|संशोधकः}}',
	'grouppage-researcher' => '{{ns:project}}:संशोधकाः',
	'group-rollbacker' => 'पूर्वस्थितेः आनेतारः',
	'group-rollbacker-member' => '{{GENDER:$1|पूर्वस्थितेः आनेता}}',
	'grouppage-rollbacker' => '{{ns:project}}:पूर्वस्थितेः आनेतारः',
	'group-transwiki' => 'ट्रान्स् विकि आयातकाः',
	'group-transwiki-member' => '{{GENDER:$1|ट्रान्स् विकि आयातकः}}',
	'grouppage-transwiki' => '{{ns:project}}:ट्रान्स् विकि आयातकाः',
	'group-trusted' => 'विश्वसितयोजकाः',
	'group-trusted-member' => '{{GENDER:$1|विश्वसितयोजकः}}',
	'grouppage-trusted' => '{{ns:project}}:विश्वसितयोजकाः',
	'group-Global_bot' => 'वैश्विकबाट्स्',
	'group-Global_bot-member' => '{{GENDER:$1|वैश्विकबाट्}}',
	'group-Global_rollback' => 'वैश्विकपूर्वस्थिति-आनेतारः',
	'group-Global_rollback-member' => '{{GENDER:$1|वैश्विकपूर्वस्थिति-आनेतारः}}',
	'group-Global_sysops' => 'वैश्विकप्रणालीनिर्वाहकाः',
	'group-Global_sysops-member' => '{{GENDER:$1|वैश्विकप्रणालीनिर्वाहकः}}',
	'group-Ombudsmen' => 'लोकायुक्तः',
	'group-Ombudsmen-member' => '{{GENDER:$1|लोकायुक्तः}}',
	'group-Staff' => 'कर्मचारिणः',
	'group-Staff-member' => '{{GENDER:$1|कर्मचारी}}',
	'group-editinterface' => 'इंटरफेस सम्पादकाः',
	'group-editinterface-member' => '{{GENDER:$1|इण्टरफ़ेस् सम्पादकः}}',
	'group-steward' => 'परिचालकाः',
	'group-steward-member' => '{{GENDER:$1|परिचालकः}}',
	'group-sysadmin' => 'प्रणालीप्रशासकाः',
	'group-sysadmin-member' => '{{GENDER:$1|प्रणालीप्रशासकः}}',
	'group-translationadmin' => 'अनुवादप्रबन्धकः',
	'group-translationadmin-member' => '{{GENDER:$1|अनुवादप्रबन्धकः}}',
	'grouppage-translationadmin' => '{{ns:project}}:अनुवादप्रबन्धकः',
	'group-coder' => 'कूटसङ्केतदातारः',
	'group-coder-member' => '{{GENDER:$1|कूटसङ्केतदाता}}',
	'group-inactive' => 'निष्क्रीयसदस्याः',
	'group-inactive-member' => '{{GENDER:$1|निष्क्रिययोजकः}}',
	'grouppage-inactive' => '{{ns:project}}:निष्क्रीयसदस्याः',
	'wikimedia-copyright' => 'पाठ्यांशः अत्र उपलभ्यते<a href="//creativecommons.org/licenses/by-sa/3.0/">सर्जनसामान्यलक्षणम्/Share-Alike License</a>;
अन्ये नियमाः आन्विताः भवेयुः ।
दृश्यताम्<a href="//wikimediafoundation.org/wiki/Terms_of_use">Terms of use</a> अधिकविवरणाय ।',
	'wikimedia-copyrightwarning' => '"{{int:savearticle}}" इत्यस्य पिञ्जस्य नोदनेन, इदं भवता अङ्गीक्रियते [//wikimediafoundation.org/wiki/Terms_of_Use Terms of Use], अपि च अप्रत्यावर्त्यरूपेण भवतः योगदानस्य प्रकाशनाय अधोनिर्दिष्टनियमानुसारम् अङ्गीक्रियते [//creativecommons.org/licenses/by-sa/3.0/ CC-BY-SA 3.0 License] and the [//www.gnu.org/copyleft/fdl.html GFDL].
You agree that a hyperlink or URL is sufficient attribution under the Creative Commons license.',
	'cant-delete-main-page' => 'मुख्यपृष्ठस्य विलोपनं चालनं वा अशक्यम् ।',
	'wikimedia-translationnotifications-signup-legal' => 'विकीमाध्यमसंस्थायै अस्य विवरणस्य अर्पणेन भवान् इदम् अङ्गीकरोति यत् विकिमाध्यमान्दोलनसम्बद्धानाम् अनुवादविषये अन्येषु भवतः आसक्तिकरेषु विषयेषु वयं भवतः सम्पर्कं कर्तुम् अर्हामः इति । भवान् अङ्गीकरोति यत् भवतः विवरणम् अमेरिकासंयुक्तसंस्थाने रक्षितुं शक्यं यच्च [https://wikimediafoundation.org/wiki/Privacy_policy privacy policy] नियमेन आन्वितं भवति इति ।',
);

/** Sakha (саха тыла)
 * @author Bert Jickty
 * @author HalanTul
 */
$messages['sah'] = array(
	'wikimediamessages-desc' => 'Викимедиаҕа эрэ сыһыаннаах этиилэр',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=sah',
	'sitesupport' => 'Бу сири өйөө',
	'tooltip-n-sitesupport' => 'Өйөбүл',
	'specialpages-group-contribution' => 'Сиэртибэлээһин/Үп хомуйуу',
	'nstab-creator' => 'Ааптар',
	'nstab-institution' => 'Тэрилтэ',
	'nstab-sequence' => 'Утум',
	'nstab-timedtext' => 'Синхротиэкис',
	'group-Image-reviewer' => 'Ойуулары тургутааччылар',
	'group-Image-reviewer-member' => 'ойуулары тургутааччы', # Fuzzy
	'grouppage-Image-reviewer' => '{{ns:project}}:Ойуу тургутааччылар',
	'group-OTRS-member' => 'OTRS чилиэннэрэ',
	'group-OTRS-member-member' => 'OTRS чилиэнэ', # Fuzzy
	'grouppage-OTRS-member' => '{{ns:project}}:OTRS чилиэннэрэ',
	'group-abusefilter' => 'Омсо сиидэтин эрэдээктэрдэрэ',
	'group-abusefilter-member' => 'омсо сиидэтин эрэдээктэрэ', # Fuzzy
	'grouppage-abusefilter' => '{{ns:project}}:Омсо сиидэтин эрэдээктэрдэрэ',
	'group-accountcreator' => 'Кыттааччылар ааттарын айааччылар/бигэргэтээччилэр',
	'group-accountcreator-member' => 'Кыттаачылар ааттарын бигэргэтээччи/оҥорооччу', # Fuzzy
	'grouppage-accountcreator' => '{{ns:project}}:Кыттааччылар ааттарын бигэргэтээччилэр/айааччылар',
	'group-arbcom' => 'Арбитраж кэмитиэтин чилиэннэрэ',
	'group-arbcom-member' => 'арбитраж кэмитиэтин чилиэннэрэ', # Fuzzy
	'grouppage-arbcom' => '{{ns:project}}:Арбитраж кэмитиэтин чилиэннэрэ',
	'group-autopatrolled' => 'Аптамаатынан ботуруулланааччылар',
	'group-autopatrolled-member' => 'аптамаатынан ботуруулланааччы', # Fuzzy
	'grouppage-autopatrolled' => '{{ns:project}}:Аптамаатынан ботуруулланааччылар',
	'group-autoreviewer' => 'Аптамаатынан бигэргэтиллэр',
	'group-autoreviewer-member' => 'аптамаатынан бигэргэнэр', # Fuzzy
	'grouppage-autoreviewer' => '{{ns:project}}:Аптамаатынан бигэргэнэр',
	'group-bigexport' => 'Улахан экспортёрдар',
	'group-bigexport-member' => 'улахан экспортёр', # Fuzzy
	'grouppage-bigexport' => '{{ns:project}}:Улахан экспортёрдар',
	'group-confirmed' => 'Бигэргэммит кыттааччылар',
	'group-confirmed-member' => 'бигэргэммит кыттааччы', # Fuzzy
	'grouppage-confirmed' => '{{ns:project}}:Бигэргэммит кыттааччылар',
	'group-editprotected' => 'Көмүскэммит сирэйи уларытар кыахтаахтар:',
	'group-editprotected-member' => 'көмүскэммит сирэйи уларытар кыахтаах киһи:', # Fuzzy
	'grouppage-editprotected' => '{{ns:project}}:көмүскэммит ыстатыйалар эрэдээктэрлэрэ',
	'group-eliminator' => 'Сотооччулар',
	'group-eliminator-member' => 'сотооччу', # Fuzzy
	'grouppage-eliminator' => '{{ns:project}}:Сотооччу',
	'group-filemover' => 'Билэ аатын уларытааччылар',
	'group-filemover-member' => 'билэ аатын уларытааччы', # Fuzzy
	'grouppage-filemover' => '{{ns:project}}:Билэ аатын уларытааччылар',
	'group-flood' => 'Робот кыттааччылар',
	'group-flood-member' => 'кытааччы руобаттар', # Fuzzy
	'grouppage-flood' => '{{ns:project}}:Кыттааччы руобаттар',
	'group-founder' => 'Тэрийээччилэр',
	'group-founder-member' => 'Тэрийээччи', # Fuzzy
	'grouppage-founder' => '{{ns:project}}:Тэрийээччилэр',
	'group-import' => 'Импортааччылар',
	'group-import-member' => 'Импортааччы', # Fuzzy
	'grouppage-import' => '{{ns:project}}:Импортааччылар',
	'group-interface_editor' => 'Интерфейс эрэдээктэрдэрэ',
	'group-interface_editor-member' => 'интерфейс эрэдээктэрэ', # Fuzzy
	'grouppage-interface_editor' => '{{ns:project}}:Интерфейс эрэдээктэрдэрэ',
	'group-ipblock-exempt' => 'Хааччахтааһыҥҥа киирбэт IP-лаахтар',
	'group-ipblock-exempt-member' => 'IP-та хааччахтаммат кыттааччы', # Fuzzy
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP-лара хааччахтаммат кыттааччылар',
	'group-patroller' => 'Ботурууллар',
	'group-patroller-member' => '{{GENDER:$1|ботуруул}}',
	'group-researcher' => 'Чинчийээччилэр',
	'group-researcher-member' => 'чинчийээччи', # Fuzzy
	'grouppage-researcher' => '{{ns:project}}:Чинчийэччилэр',
	'group-rollbacker' => 'Төннөрөөччүлэр',
	'group-rollbacker-member' => 'Төннөрөөччү', # Fuzzy
	'grouppage-rollbacker' => '{{ns:project}}:Төннөрөөччүлэр',
	'group-transwiki' => 'Transwiki`ттан импортааччылар',
	'group-transwiki-member' => 'transwiki`ттан импортааччы', # Fuzzy
	'grouppage-transwiki' => '{{ns:project}}:Transwiki`ттан көһөрөөччүлэр',
	'group-trusted' => 'Итэҕэллээх кыттааччылар',
	'group-trusted-member' => 'итэҕэтиилээх кыттааччы', # Fuzzy
	'grouppage-trusted' => '{{ns:project}}:Итэҕэллээх кыттааччылар',
	'group-Global_bot' => 'Бырайыактар ыккардынааҕы руобаттар',
	'group-Global_bot-member' => 'бырайыактар ыккардынааҕы руобаттар', # Fuzzy
	'group-Global_rollback' => 'Бырайыактар ыккардынааҕы төннөрөөччүлэр',
	'group-Global_rollback-member' => 'бырайыактар ыккардынааҕы төннөрөөччүлэр', # Fuzzy
	'group-Global_sysops' => 'Аан дьаһабыллар',
	'group-Global_sysops-member' => 'аан дьаһабыл', # Fuzzy
	'group-Ombudsmen' => 'Омбудсменнар',
	'group-Ombudsmen-member' => 'омбудсман', # Fuzzy
	'group-Staff' => 'Үлэһиттэр',
	'group-Staff-member' => 'үлэһит',
	'group-editinterface' => 'Интерфейс эрэдээктэрдэрэ',
	'group-editinterface-member' => '{{GENDER:$1|интерфейс эрэдээктэрэ}}',
	'group-steward' => 'Үстүйээрдэр',
	'group-steward-member' => 'үстүйээрдэр', # Fuzzy
	'group-sysadmin' => 'Тиһик (систиэмэ) дьаһабыллара',
	'group-sysadmin-member' => 'дьаһабыл', # Fuzzy
	'group-coder' => 'Программистар',
	'group-coder-member' => 'программист', # Fuzzy
	'group-inactive' => 'Көҕө суох кыттааччылар',
	'group-inactive-member' => '{{GENDER:$1|көҕө суох кыттааччы}}',
	'grouppage-inactive' => '{{ns:project}}:Көҕө суох кыттааччылар',
	'wikimedia-copyright' => 'Тиэкис <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike</a> лицензия усулуобуйатынан тарҕанар, сорох түбэлтэҕэ эбии көрдөбүллэр баар буолуохтарын сөп. Сиһилии <a href="//wikimediafoundation.org/wiki/Terms_of_Use/ru">Туттуу усулуобуйатын</a> көр.',
	'wikimedia-copyrightwarning' => 'Бэйэҥ уларытыыгын киллэрдэххинэ суруйбуккун [//creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike 3.0] уонна [//www.gnu.org/copyleft/fdl.html GFDL] лицензияларынан тарҕанарыгар сөбүлэҥҥин биэрэҕин, онтуҥ төннүбэт. Бу сирэйи атын дьон туһанар түгэннэригэр, эйиэхэ гипер сигэ эбэтэр URL көмөтүнэн сигэниэхтэрэ, ону кытта сөбүлэһэҕин. Сиһилии [//wikimediafoundation.org/wiki/Terms_of_Use/ru Условия использования] көр.', # Fuzzy
);

/** Sardinian (sardu)
 * @author Andria
 * @author Marzedu
 */
$messages['sc'] = array(
	'sitesupport' => 'Donaduras',
	'tooltip-n-sitesupport' => 'Acotza·nos',
	'group-steward' => 'Stewards',
	'wikimedia-copyright' => 'Su testu est disponìbile segundu sa <a href="//creativecommons.org/licenses/by-sa/3.0/">licèntzia Atributzione Creative Commons-Cundivide cantepare</a>; si podent aplicare prus cunditziones galu. Abbista is <a href="//wikimediafoundation.org/wiki/Terms_of_Use"> cunditziones de impreu</a> pro is particulares.',
	'wikimedia-copyrightwarning' => 'Sarbende, acunsentis de non pòder prus retirare su contributu tuo lassadu de nou a suta is licèntzias [//creativecommons.org/licenses/by-sa/3.0/ Atributzione Creative Commons/Cundivide cantepare 3.0] e [//www.gnu.org/copyleft/fdl.html GFDL].
Acunsentis ca is re-usuàrios ti ddu ant a atribuire a su mancu cun unu ligàmine iper-testuale e unu URL a sa pàgina a sa cale as contribuidu. Abbista is [//wikimediafoundation.org/wiki/Terms_of_Use cunditziones de impreu] pro is particulares.',
);

/** Sicilian (sicilianu)
 * @author Gmelfi
 * @author Melos
 * @author Santu
 * @author לערי ריינהארט
 */
$messages['scn'] = array(
	'wikimediamessages-desc' => 'Missaggi spicifici di Wikimedia',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=scn',
	'sitesupport' => 'Dunazzioni',
	'tooltip-n-sitesupport' => 'Sustinìticci',
	'group-abusefilter' => 'Gisturi di filtra anti abbusi',
	'group-accountcreator' => 'Criatura di cunti',
	'group-accountcreator-member' => 'Criaturi di cuntu', # Fuzzy
	'grouppage-accountcreator' => '{{ns:project}}:Criatura di cunti',
	'group-confirmed' => 'Utilizzatura cunfirmati',
	'group-founder' => 'Funnatura',
	'group-founder-member' => 'Funnaturi', # Fuzzy
	'grouppage-founder' => '{{ns:project}}:Funnatura',
	'group-import' => 'Mpurtatura',
	'group-import-member' => 'Mpurtaturi', # Fuzzy
	'grouppage-import' => '{{ns:project}}:Mpurtatura',
	'group-ipblock-exempt' => 'Esenti dû bloccu IP',
	'group-ipblock-exempt-member' => 'Esenti dû bloccu IP', # Fuzzy
	'grouppage-ipblock-exempt' => '{{ns:project}}:Esenti dû bloccu IP',
	'group-rollbacker' => 'Ripristinatura',
	'group-rollbacker-member' => 'Ripristinaturi', # Fuzzy
	'grouppage-rollbacker' => '{{ns:project}}:Ripristinatura',
	'group-transwiki' => 'Mpurtaturi transwiki',
	'group-transwiki-member' => 'Mpurtaturi transwiki', # Fuzzy
	'grouppage-transwiki' => '{{ns:project}}:Mpurtatura transwiki',
	'group-Global_bot' => 'Bot glubbali',
	'group-Global_bot-member' => 'bot glubbali', # Fuzzy
	'group-Global_rollback' => 'Ripristinatura glubbali',
	'group-Global_rollback-member' => 'ripristinaturi glubbali', # Fuzzy
	'group-Ombudsmen' => 'Difinsura civici',
	'group-Ombudsmen-member' => 'difinsuri cìvicu', # Fuzzy
	'group-Staff' => 'Staff',
	'group-Staff-member' => 'Cumpunenti dû staff',
	'group-editinterface-member' => 'Editori dâ interfaccia', # Fuzzy
	'group-steward' => 'Stiùwart',
	'group-steward-member' => 'Stiùwart', # Fuzzy
	'grouppage-steward' => 'm:Stewards',
	'group-sysadmin' => 'Amministratura di sistema',
	'group-sysadmin-member' => 'amministraturi di sistema', # Fuzzy
	'grouppage-sysadmin' => 'm:System administrators',
	'group-coder' => 'Cudificatura',
	'group-coder-member' => 'cudificaturi', # Fuzzy
	'group-inactive' => 'Utenti inattivi',
	'group-inactive-member' => 'utenti inattivu', # Fuzzy
	'grouppage-inactive' => '{{ns:project}}:Utenti inattivi',
	'wikimedia-copyright' => 'Lu testu è dispunibbili sutta la <a href="//creativecommons.org/licenses/by-sa/3.0/">Licenza Creative Commons Attribuzzioni/Spartuta â stissa manera</a>;
si pònnu applicàrisi àutri cunnizzioni.
Talìa li <a href="//wikimediafoundation.org/wiki/Terms_of_Use">cunnizzioni di usu</a> pi li dittagli.',
	'wikimedia-copyrightwarning' => "Sarvannu, siti d'accordu di rènniri dispunìbbili lu vostru cuntribbutu sutta la [//creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] e la [//www.gnu.org/copyleft/fdl.html GFDL].
Siti d'accordu puru ca àutri riutilizzatura b'accreditanu lu vostru travagghiu, cu lu liami o cu na URL â pàggina â quali stai cuntribbuennu.
Talia lu [//wikimediafoundation.org/wiki/Terms_of_Use Terms of Use] pi sapìrinni cchiossai.", # Fuzzy
);

/** Scots (Scots)
 * @author Avicennasis
 * @author OchAyeTheNoo
 */
$messages['sco'] = array(
	'sitesupport' => 'Propines',
	'group-confirmed-member' => 'confirmed uiser', # Fuzzy
	'group-flood' => 'Bot uisers',
	'group-flood-member' => 'bot uiser', # Fuzzy
	'group-rollbacker' => 'Rowbackers',
	'group-rollbacker-member' => 'rowbacker', # Fuzzy
	'group-inactive' => 'Inactive uisers',
	'group-inactive-member' => 'inactive uisers', # Fuzzy
);

/** Sindhi (سنڌي)
 * @author Aursani
 */
$messages['sd'] = array(
	'sitesupport' => 'مالي امداد',
	'tooltip-n-sitesupport' => 'اسان جي مدد ڪريو',
);

/** Sassaresu (Sassaresu)
 * @author Felis
 */
$messages['sdc'] = array(
	'sitesupport' => 'Dunazioni',
	'tooltip-n-sitesupport' => 'Supporthazi',
);

/** Northern Sami (sámegiella)
 * @author Jeblad
 * @author Skuolfi
 */
$messages['se'] = array(
	'sitesupport' => 'Skeaŋkkat',
	'tooltip-n-sitesupport' => 'Doarrjo siidduid doaimma',
	'group-import' => 'Sisafievrrideaddjit',
);

/** Cmique Itom (Cmique Itom)
 * @author SeriCtam
 */
$messages['sei'] = array(
	'sitesupport' => 'Donación',
	'tooltip-n-sitesupport' => 'Donacíonhuíiitl',
);

/** Samogitian (žemaitėška)
 * @author Hugo.arg
 * @author Zordsdavini
 */
$messages['sgs'] = array(
	'sitesupport' => 'Pagelba',
	'group-Global_bot' => 'Gluobalūs buotā',
	'group-Global_bot-member' => 'gluobalus buots', # Fuzzy
	'group-steward' => 'Gaspaduorē',
	'group-sysadmin' => 'Sėstėmas admėnėstratuorē',
);

/** Tachelhit (Tašlḥiyt/ⵜⴰⵛⵍⵃⵉⵜ)
 * @author Dalinanir
 * @author Zanatos
 */
$messages['shi'] = array(
	'sitesupport' => 'Aws',
	'tooltip-n-sitesupport' => 'Awsaɣ',
	'group-import' => 'Willi di tawin',
);

/** Sinhala (සිංහල)
 * @author Budhajeewa
 * @author Calcey
 * @author Nemo bis
 * @author Pasanbhathiya2
 * @author Singhalawap
 * @author චතුනි අලහප්පෙරුම
 * @author නන්දිමිතුරු
 * @author පසිඳු කාවින්ද
 * @author බිඟුවා
 * @author ශ්වෙත
 */
$messages['si'] = array(
	'wikimediamessages-desc' => 'විකිමාධ්‍ය විශේෂී පණිවුඩයන්',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=si',
	'sitesupport' => 'පරිත්‍යාග',
	'tooltip-n-sitesupport' => 'අප හට අනුග්‍රහ සපයන්න',
	'specialpages-group-contribution' => 'දායකත්වය/සංචිතය',
	'nstab-creator' => 'සෑදූ අය',
	'nstab-institution' => 'ආයතනය',
	'nstab-sequence' => 'අනුක්‍රමය',
	'nstab-timedtext' => 'කාලිතපෙළ',
	'group-Ex_Administrator' => 'Ex පරිපාලකවරු',
	'group-Ex_Administrator-member' => '{{GENDER:$1|ex පරිපාලකවරයා}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Ex පරිපාලකවරු',
	'group-Ex_Bureaucrat' => 'Ex නිලබලධාරියෝ',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|ex නිලබලධාරියා}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Ex නිලබලධාරියෝ',
	'group-Image-reviewer' => 'රූ විචාරකයින්',
	'group-Image-reviewer-member' => '{{GENDER:$1|රූ විචාරක}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:රූ විචාරක',
	'group-OTRS-member' => 'OTRS සාමාජිකයින්',
	'group-OTRS-member-member' => '{{GENDER:$1|OTRS සාමාජික}}',
	'grouppage-OTRS-member' => '{{ns:project}}:OTRS සාමාජික',
	'group-abusefilter' => 'පෙරහන් සැකසුම් අනිසි භාවිතය',
	'group-abusefilter-member' => '{{GENDER:$1|අපයෙදුම් පෙරහන් සංස්කාරකය}}',
	'grouppage-abusefilter' => '{{ns:project}}:පෙරහන් සකසන වැරදි භාවිතය',
	'group-accountcreator' => 'ගිණුම් තනන්නන්',
	'group-accountcreator-member' => '{{GENDER:$1|ගිණුම් තනන්නා}}',
	'grouppage-accountcreator' => '{{ns:project}}:ගිණුම් තනන්නන්',
	'group-arbcom' => 'සමථ කමිටු සාමාජීකයන්',
	'group-arbcom-member' => '{{GENDER:$1|සමථ කමිටු සාමාජීකයා}}',
	'grouppage-arbcom' => '{{ns:project}}:සමථ කමිටු සාමාජීකයන්',
	'group-autopatrolled' => 'ස්වයං මුර සංචාරකයන්',
	'group-autopatrolled-member' => '{{GENDER:$1|ස්වයං මුර සංචාරකයා}}',
	'grouppage-autopatrolled' => '{{ns:project}}:ස්වයං මුර සංචාරකයන්',
	'group-autoreviewer' => 'ස්වයං විචාරකයන්',
	'group-autoreviewer-member' => '{{GENDER:$1|ස්වයංක්‍රීය විචාරක}}',
	'grouppage-autoreviewer' => '{{ns:project}}:ස්වයං විචාරකයන්',
	'group-bigexport' => 'විශාල නිර්යාතකරුවන්',
	'group-bigexport-member' => '{{GENDER:$1|විශාල නිර්යාතකරු}}',
	'grouppage-bigexport' => '{{ns:project}}:විශාල නිර්යාතකරුවන්',
	'group-botadmin' => 'පරිපාලක හිමිකම් සහිත රොබෝවරු',
	'group-botadmin-member' => '{{GENDER:$1|පරිපාලක හිමිකම් සහිත රොබෝවරයා}}',
	'grouppage-botadmin' => '{{ns:project}}:පරිපාලක හිමිකම් සහිත රොබෝවරු',
	'group-confirmed' => 'තහවුරු කරනු ලැබූ පරිශීලකයන්',
	'group-confirmed-member' => '{{GENDER:$1|තහවුරුකල පරිශීලක}}',
	'grouppage-confirmed' => '{{ns:project}}:තහවුරු කරන ලද පරිශීලකයන්',
	'group-editprotected' => 'සුරැකි පිටු සංස්කාරකවරුන්',
	'group-editprotected-member' => '{{GENDER:$1|සුරැකි පිටු සංස්කාරක}}',
	'grouppage-editprotected' => '{{ns:project}}:සුරැකි පිටු සංස්කාරක',
	'group-eliminator' => 'ඉවත්කුරු',
	'group-eliminator-member' => '{{GENDER:$1|ඉවත්කුරුව}}',
	'grouppage-eliminator' => '{{ns:project}}:ඉවත්කුරුව',
	'group-filemover' => 'ගොනු චාලකයින්',
	'group-filemover-member' => '{{GENDER:$1|ගොනු චාලක}}',
	'grouppage-filemover' => '{{ns:project}}:ගොනු චාලක',
	'group-flood' => 'Bot පරිශීලකයන්',
	'group-flood-member' => '{{GENDER:$1|රොබෝවරයා}}',
	'grouppage-flood' => '{{ns:project}}:Bot පරිශීලකයන්',
	'group-founder' => 'ප්‍රාරම්භකයන්',
	'group-founder-member' => '{{GENDER:$1|ප්‍රාරම්භක}}',
	'grouppage-founder' => '{{ns:project}}:ප්‍රාරම්භකයන්',
	'group-import' => 'ආයාතකරුවන්',
	'group-import-member' => '{{GENDER:$1|ආයාතකරු}}',
	'grouppage-import' => '{{ns:project}}:ආයාත කරුවන්',
	'group-interface_editor' => 'අතුරු මුහුණත් සකසන',
	'group-interface_editor-member' => '{{GENDER:$1|අතුරු-මුහුණත් සකසනය}}',
	'grouppage-interface_editor' => '{{ns:project}}:අතුරුමුහුණත් සංස්කාරක',
	'group-ipblock-exempt' => 'අන්තර්ජාල වාරණ විවර්ජනයන්',
	'group-ipblock-exempt-member' => '{{GENDER:$1|IP වාරණ විවර්ජනය}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:අන්තර්ජාල වාරණ විවර්ජනය',
	'group-patroller' => 'මුර සංචාරකයන්',
	'group-patroller-member' => '{{GENDER:$1|මුර-සංචාරක}}',
	'grouppage-patroller' => '{{ns:project}}:ස්වයං මුර සංචාරකයන්',
	'group-researcher' => 'පර්යේෂකයන්',
	'group-researcher-member' => '{{GENDER:$1|පර්යේෂක}}',
	'grouppage-researcher' => '{{ns:project}}:පර්යේෂකයින්',
	'group-rollbacker' => 'පසුපෙරළන්නන්',
	'group-rollbacker-member' => '{{GENDER:$1|ආපසුපෙරළන්නා}}',
	'grouppage-rollbacker' => '{{ns:project}}:පසුපෙරළන්නන්',
	'group-transwiki' => 'අන්තර්විකී ආයාතකරුවන්',
	'group-transwiki-member' => '{{GENDER:$1|අන්තර්විකි ආනයනකරු}}',
	'grouppage-transwiki' => '{{ns:project}}:අන්තර්විකි ආයාතකරුවන්',
	'group-trusted' => 'විශ්වාසනීය පරිශීලකයන්',
	'group-trusted-member' => '{{GENDER:$1|විශ්වසනීය පරිශීලක}}',
	'grouppage-trusted' => '{{ns:project}}:විශ්වාසනීය පරිශීලකයන්',
	'group-Global_bot' => 'ගෝලීය රොබෝවරුන්',
	'group-Global_bot-member' => '{{GENDER:$1|සියළු විකිමීඩියා ව්‍යාපෘති සඳහා රොබෝ}}',
	'group-Global_rollback' => 'ගෝලීය පසුපෙරළන්නන්',
	'group-Global_rollback-member' => '{{GENDER:$1|සියළු විකිමීඩියා ව්‍යාපෘති සඳහා ආපසුපෙරළන්නා}}',
	'grouppage-Global_rollback' => 'm:ගෝලීය පසුපෙරළීම',
	'group-Global_sysops' => 'ගෝලීය පද්ධති පරිපාලකවරුන්',
	'group-Global_sysops-member' => '{{GENDER:$1|සියළු විකිමීඩියා ව්‍යාපෘති සඳහා පද්ධති ක්‍රියාකරු}}',
	'group-Ombudsmen' => 'දුග්ගන්නාරාළවරුන්',
	'group-Ombudsmen-member' => '{{GENDER:$1|දුක්ගන්නා රාළ}}',
	'grouppage-Ombudsmen' => 'm:දුග්ගන්නාරාළ කොමිසම',
	'group-Staff' => 'සේවක මඩුල්ල',
	'group-Staff-member' => 'සේවක මණ්ඩල සාමාජිකයා',
	'group-editinterface' => 'අතුරු මුහුණත් සකසන',
	'group-editinterface-member' => '{{GENDER:$1|අතුරු-මුහුණත් සංස්කාරක}}',
	'group-steward' => 'භාරකරුවන්',
	'group-steward-member' => '{{GENDER:$1|භාරකරු}}',
	'grouppage-steward' => 'm:භාරකරුවන්',
	'group-sysadmin' => 'පද්ධති පරිපාලකයන්',
	'group-sysadmin-member' => '{{GENDER:$1|පද්ධති පරිපාලක}}',
	'grouppage-sysadmin' => 'm:පද්ධති පරිපාලකවරුන්',
	'group-API_High_Limit_Requestor' => 'API උච්ච සීමා අයදුම්කරුවෝ',
	'group-API_High_Limit_Requestor-member' => '{{GENDER:$1|උච්ච සීමා අයදුම්කරු}}',
	'group-Indic_Bots' => 'අඟවන රොබෝවරු',
	'group-Indic_Bots-member' => '{{GENDER:$1|අඟවන රොබෝ}}',
	'group-New_wikis_importer' => 'නව විකි ආයාතකරුවෝ',
	'group-New_wikis_importer-member' => '{{GENDER:$1|නව විකි ආයාතකරු}}',
	'group-global-ipblock-exempt' => 'ගෝලීය අයිපී ලිපින වාරණ විවර්ජන',
	'group-global-ipblock-exempt-member' => '{{GENDER:$1|ගෝලීය IP වාරණ විවර්ජනය}}',
	'group-recursive-export' => 'ආවර්තනික නිර්යාත කෙරුම',
	'group-recursive-export-member' => '{{GENDER:$1|ආවර්තනික නිර්යාතකරු}}',
	'group-translationadmin' => 'පර්වර්තන පරිපාලකවරයා',
	'group-translationadmin-member' => '{{GENDER:$1|පරිවර්තන පරිපාලක}}',
	'grouppage-translationadmin' => '{{ns:project}}:පර්වර්තන පරිපාලකයන්',
	'group-coder' => 'කේතකරුවන්',
	'group-coder-member' => '{{GENDER:$1|කේතකරු}}',
	'grouppage-coder' => '{{ns:project}}:කේතකරු',
	'group-inactive' => 'අක්‍රීය පරිශීලකයන්',
	'group-inactive-member' => '{{GENDER:$1|අක්‍රීය පරිශීලක}}',
	'grouppage-inactive' => '{{ns:project}}:අක්‍රීය පරිශීලකයන්',
	'wikimedia-copyright' => '<a href="//creativecommons.org/licenses/by-sa/3.0/"> ක්‍රියේටිව් කොමන්ස් ඇට්‍රිබ්යුශන්/ශෙයා-අලයික් වරපතට</a> යටත්ව ඉහත පෙළ ඔබ වෙත සැපයෙයි;
අමතර කොන්දේසි අදාළ විය හැක.
විස්තර සඳහා <a href=\'//wikimediafoundation.org/wiki/Terms_of_Use\'>පරිහරණ කොන්දේසි</a> බලන්න.',
	'wikimedia-copyrightwarning' => '"{{int:savearticle}}" බොත්තම එබීමෙන්, [//wikimediafoundation.org/wiki/Terms_of_Use භාවිතයේ කොන්දේසි] වලට ඔබ එකඟ වෙයි, තවද ඔබ විසින් ඔබේ දායකත්වය වෙනස් නොකලහැකි [//creativecommons.org/licenses/by-sa/3.0/ CC-BY-SA 3.0 License] සහ [//www.gnu.org/copyleft/fdl.html GFDL] යටතේ නිදහස් කිරීමට ඔබ එකඟ වේ.
මෙය නිර්මාණාත්මක පොදුජන බලපත්‍රය යටත් ප්‍රමාණවත් ගුණනාමයක් ඇති අධිසබැඳුමක් හෝ URL ලිපිනයක් බවට ඔබ එකඟ වේ.',
	'cant-delete-main-page' => 'මුල් පිටුව මැකීමට හෝ ගෙනයාමට ඔබට නොහැක.',
	'upload-more-photos-of-this-monument' => 'මෙම සිහිවටනයේ තවත් ඡායාරූප උඩුගත කරන්න',
);

/** Slovak (slovenčina)
 * @author Helix84
 * @author Rudko
 * @author Teslaton
 * @author Απεργός
 */
$messages['sk'] = array(
	'wikimediamessages-desc' => 'Správy špecifické pre Wikimedia',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=sk',
	'sitesupport' => 'Podpora',
	'tooltip-n-sitesupport' => 'Podporte nás',
	'specialpages-group-contribution' => 'Prispievateľov/fundraising',
	'nstab-creator' => 'Tvorca',
	'nstab-institution' => 'Inštitúcia',
	'nstab-sequence' => 'Poradie',
	'nstab-timedtext' => 'ČasovanýText',
	'group-Image-reviewer' => 'Kontrolóri obrázkov',
	'group-Image-reviewer-member' => 'kontrolór obrázkov', # Fuzzy
	'grouppage-Image-reviewer' => '{{ns:project}}:Kontrolóri obrázkov',
	'group-OTRS-member' => 'Členovia OTRS',
	'group-OTRS-member-member' => 'člen OTRS',
	'grouppage-OTRS-member' => '{{ns:project}}:Členovia OTRS',
	'group-abusefilter' => 'Redaktori filtrov zneužití',
	'group-abusefilter-member' => 'redaktor filtrov zneužití', # Fuzzy
	'grouppage-abusefilter' => '{{ns:project}}:Redaktori filtrov zneužití',
	'group-accountcreator' => 'Tvorcovia účtov',
	'group-accountcreator-member' => 'Tvorca účtu', # Fuzzy
	'grouppage-accountcreator' => '{{ns:project}}:Tvorcovia účtov',
	'group-arbcom' => 'Členovia arbitrážnej komisie',
	'group-arbcom-member' => 'člen arbitrážnej komisie', # Fuzzy
	'grouppage-arbcom' => '{{ns:project}}:Členovia arbitrážnej komisie',
	'group-autopatrolled' => 'Automatickí strážcovia',
	'group-autopatrolled-member' => 'strážca', # Fuzzy
	'grouppage-autopatrolled' => '{{ns:project}}:Strážcovia',
	'group-autoreviewer' => 'Autokontrolóri',
	'group-autoreviewer-member' => 'autokontrolór', # Fuzzy
	'grouppage-autoreviewer' => '{{ns:project}}:Autokontrolóri',
	'group-bigexport' => 'Hromadní exportéri',
	'group-bigexport-member' => 'hromadní exportér', # Fuzzy
	'grouppage-bigexport' => '{{ns:project}}:Hromadní exportéri',
	'group-confirmed' => 'Potvrdení používatelia',
	'group-confirmed-member' => 'potvrdený používateľ', # Fuzzy
	'grouppage-confirmed' => '{{ns:project}}:Potvrdení používatelia',
	'group-editprotected' => 'Radaktori chránených stránok',
	'group-editprotected-member' => 'redaktor chránených stránok', # Fuzzy
	'grouppage-editprotected' => '{{ns:project}}:Redaktori chránených stránok',
	'group-eliminator' => 'Eliminátori',
	'group-eliminator-member' => 'eliminátor', # Fuzzy
	'grouppage-eliminator' => '{{ns:project}}:Eliminátor', # Fuzzy
	'group-filemover' => 'Presúvači súborov',
	'group-filemover-member' => 'presúvač súborov', # Fuzzy
	'grouppage-filemover' => '{{ns:project}}:Presúvači súborov',
	'group-flood' => 'Robotickí používatelia',
	'group-flood-member' => 'robotickí používatelia', # Fuzzy
	'grouppage-flood' => '{{ns:project}}:Robotickí používatelia',
	'group-founder' => 'Zakladatelia',
	'group-founder-member' => 'Zakladateľ', # Fuzzy
	'grouppage-founder' => '{{ns:project}}:Zakladatelia',
	'group-import' => 'Importéri',
	'group-import-member' => 'Importér', # Fuzzy
	'grouppage-import' => '{{ns:project}}:Importéri',
	'group-interface_editor' => 'Redaktori rozhrania',
	'group-interface_editor-member' => 'redaktor rozhrania', # Fuzzy
	'grouppage-interface_editor' => '{{ns:project}}:Redaktor rozhrania',
	'group-ipblock-exempt' => 'Výnimky z blokovaní IP',
	'group-ipblock-exempt-member' => 'Výnimka z blokovaní IP', # Fuzzy
	'grouppage-ipblock-exempt' => '{{ns:project}}:Výnimky z blokovaní IP',
	'group-patroller' => 'Strážcovia',
	'group-patroller-member' => 'Strážca', # Fuzzy
	'group-researcher' => 'Výskumníci',
	'group-researcher-member' => 'výskumník', # Fuzzy
	'grouppage-researcher' => '{{ns:project}}:Výskumníci',
	'group-rollbacker' => 'S právom rollback',
	'group-rollbacker-member' => 'S právom rollback', # Fuzzy
	'grouppage-rollbacker' => '{{ns:project}}:S právom rollback',
	'group-transwiki' => 'Transwiki importéri',
	'group-transwiki-member' => 'Transwiki importér', # Fuzzy
	'grouppage-transwiki' => '{{ns:project}}:Transwiki importéri',
	'group-trusted' => 'Dôveryhodní používatelia',
	'group-trusted-member' => 'dôveryhodný používateľ', # Fuzzy
	'grouppage-trusted' => '{{ns:project}}:Dôveryhodní používatelia',
	'group-uploader' => 'Nahrávajúci',
	'group-uploader-member' => 'nahrávajúci', # Fuzzy
	'grouppage-uploader' => '{{ns:project}}:Nahrávajúci',
	'group-Global_bot' => 'Globálni roboti',
	'group-Global_bot-member' => 'Globálny robot', # Fuzzy
	'group-Global_rollback' => 'Globálni rollbackeri',
	'group-Global_rollback-member' => 'Globálny rollbacker', # Fuzzy
	'group-Global_sysops' => 'Globálni správcovia',
	'group-Global_sysops-member' => 'globálny správca', # Fuzzy
	'group-Ombudsmen' => 'Ombudsmani',
	'group-Ombudsmen-member' => 'Ombudsman', # Fuzzy
	'group-Staff' => 'Zamestnanci',
	'group-Staff-member' => 'zamestnanec',
	'group-editinterface' => 'Editori rozhrania',
	'group-editinterface-member' => 'editor rozhrania', # Fuzzy
	'group-steward' => 'Stewardi',
	'group-steward-member' => 'Steward', # Fuzzy
	'group-sysadmin' => 'Správcovia systému',
	'group-sysadmin-member' => 'správca systému', # Fuzzy
	'group-coder' => 'Kóderi',
	'group-coder-member' => 'kóder', # Fuzzy
	'group-inactive' => 'Neaktívni používatelia',
	'group-inactive-member' => 'neaktívny používateľ', # Fuzzy
	'grouppage-inactive' => '{{ns:project}}:Neaktívni používatelia',
	'wikimedia-copyright' => 'Text je dostupný za podmienok <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike License</a>; prípadne za ďalších podmienok. Podrobnejšie informácie nájdete na stránke <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Podmienky použitia</a>.',
	'wikimedia-copyrightwarning' => 'Uložením stránky neodvolateľne súhlasíte s uvoľnením svojho príspevku za podmienok [//creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] a [//www.gnu.org/copyleft/fdl.html GFDL]. Súhlasíte, že používatelia tohto obsahu vás musia uviesť ako autora a to minimálne hyperodkazom alebo URL na článok do ktorého prispievate. Podrobnejšie informácie nájdete na stránke [//wikimediafoundation.org/wiki/Terms_of_Use Podmienky použitia].', # Fuzzy
	'createacct-helpusername-url' => '{{ns:Project}}:Používateľské_meno',
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(pomôžte mi vybrať)]]',
	'createacct-captcha-help-url' => '{{ns:Project}}:Potrebujem pomoc',
	'createacct-imgcaptcha-help' => 'Nevidíte obrázok? [[{{MediaWiki:createacct-captcha-help-url}}|Požiadajte o účet]].',
);

/** Slovenian (slovenščina)
 * @author Dbc334
 * @author Eleassar
 * @author Nemo bis
 * @author Smihael
 * @author Yerpo
 */
$messages['sl'] = array(
	'wikimediamessages-desc' => 'Posebna sporočila Wikimedie',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=sl',
	'sitesupport' => 'Denarni prispevki',
	'tooltip-n-sitesupport' => 'Podprite nas',
	'specialpages-group-contribution' => 'Prispevek/Zbiralec sredstev',
	'nstab-creator' => 'Ustvarjalec',
	'nstab-institution' => 'Ustanova',
	'nstab-sequence' => 'Zaporedje',
	'nstab-timedtext' => 'ČasovnoBesedilo',
	'group-Ex_Administrator' => 'Bivši administratorji',
	'group-Ex_Administrator-member' => '{{GENDER:$1|bivši administrator|bivša administratorka}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Bivši administratorji',
	'group-Ex_Bureaucrat' => 'Bivši birokrati',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|bivši birokrat|bivša birokratinja}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Bivši birokrati',
	'group-Image-reviewer' => 'Pregledovalci slik',
	'group-Image-reviewer-member' => '{{GENDER:$1|pregledovalec|pregledovalka}} slik',
	'grouppage-Image-reviewer' => '{{ns:project}}:Pregledovalci slik',
	'group-OTRS-member' => 'Člani OTRS',
	'group-OTRS-member-member' => '{{GENDER:$1|član|članica}} OTRS',
	'grouppage-OTRS-member' => '{{ns:project}}:Člani OTRS',
	'group-abusefilter' => 'Uredniki filtrov zlorabe',
	'group-abusefilter-member' => '{{GENDER:$1|urednik|urednica}} filtrov zlorabe',
	'grouppage-abusefilter' => '{{ns:project}}:Uredniki filtrov zlorabe',
	'group-accountcreator' => 'Ustvarjalci računov',
	'group-accountcreator-member' => '{{GENDER:$1|ustvarjalec|ustvarjalka}} računov',
	'grouppage-accountcreator' => '{{ns:project}}:Ustvarjalci računov',
	'group-arbcom' => 'Člani arbitražnega odbora',
	'group-arbcom-member' => '{{GENDER:$1|član|članica}} arbitražnega odbora',
	'grouppage-arbcom' => '{{ns:project}}:Člani arbitražnega odbora',
	'group-autopatrolled' => 'Samodejno nadzorovani',
	'group-autopatrolled-member' => '{{GENDER:$1|samodejni nadzornik|samodejna nadzornica}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Samodejni nadzorniki',
	'group-autoreviewer' => 'Samodejni pregledovalci',
	'group-autoreviewer-member' => '{{GENDER:$1|samodejni pregledovalec|samodejna pregledovalka}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Samodejni pregledovalci',
	'group-bigexport' => 'Veliki izvozniki',
	'group-bigexport-member' => '{{GENDER:$1|velik izvoznik|velika izvoznica}}',
	'grouppage-bigexport' => '{{ns:project}}:Veliki izvozniki',
	'group-botadmin' => 'Roboti z administratorskimi pravicami',
	'group-botadmin-member' => '{{GENDER:$1|robot z administratorskimi pravicami}}',
	'grouppage-botadmin' => '{{ns:project}}:Roboti z administratorskimi pravicami',
	'group-confirmed' => 'Potrjeni uporabniki',
	'group-confirmed-member' => '{{GENDER:$1|potrjen uporabnik|potrjena uporabnica}}',
	'grouppage-confirmed' => '{{ns:project}}:Potrjeni uporabniki',
	'group-editprotected' => 'Urejevalci zaščitenih strani',
	'group-editprotected-member' => '{{GENDER:$1|urejevalec|urejevalka}} zaščitenih strani',
	'grouppage-editprotected' => '{{ns:project}}:Urejevalci zaščitenih strani',
	'group-eliminator' => 'Uničevalci',
	'group-eliminator-member' => '{{GENDER:$1|uničevalec|uničevalka}}',
	'grouppage-eliminator' => '{{ns:project}}:Uničevalci',
	'group-filemover' => 'Prestavljavci datotek',
	'group-filemover-member' => '{{GENDER:$1|prestavljavec|prestavljavka}} datotek',
	'grouppage-filemover' => '{{ns:project}}:Prestavljavec datotek',
	'group-flood' => 'Uporabniki boti',
	'group-flood-member' => '{{GENDER:$1|uporabnik|uporabnica}} bot',
	'grouppage-flood' => '{{ns:project}}:Uporabniki boti',
	'group-founder' => 'Ustanovitelji',
	'group-founder-member' => '{{GENDER:$1|ustanovitelj|ustanoviteljica}}',
	'grouppage-founder' => '{{ns:project}}:Ustanovitelji',
	'group-import' => 'Uvozniki',
	'group-import-member' => '{{GENDER:$1|uvoznik|uvoznica}}',
	'grouppage-import' => '{{ns:project}}:Uvozniki',
	'group-interface_editor' => 'Urejevalci vmesnika',
	'group-interface_editor-member' => '{{GENDER:$1|urejevalec|urejevalka}} vmesnika',
	'grouppage-interface_editor' => '{{ns:project}}:Urejevalci vmesnika',
	'group-ipblock-exempt' => 'Izvzemi blokade IP',
	'group-ipblock-exempt-member' => '{{GENDER:$1|izvzem blokade IP}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Izvzem blokade IP',
	'group-patroller' => 'Nadzorniki',
	'group-patroller-member' => '{{GENDER:$1|nadzornik|nadzornica}}',
	'grouppage-patroller' => '{{ns:project}}:Nadzorniki',
	'group-researcher' => 'Raziskovalci',
	'group-researcher-member' => '{{GENDER:$1|raziskovalec|raziskovalka}}',
	'grouppage-researcher' => '{{ns:project}}:Raziskovalci',
	'group-rollbacker' => 'Vračalci urejanj',
	'group-rollbacker-member' => '{{GENDER:$1|vračalec|vračalka}} urejanj',
	'grouppage-rollbacker' => '{{ns:project}}:Vračalci urejanj',
	'group-transwiki' => 'Transwiki uvozniki',
	'group-transwiki-member' => 'transwiki {{GENDER:$1|uvoznik|uvoznica}}',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki uvozniki',
	'group-trusted' => 'Zaupani uporabniki',
	'group-trusted-member' => '{{GENDER:$1|zaupan uporabnik|zaupana uporabnica}}',
	'grouppage-trusted' => '{{ns:project}}:Zaupani uporabniki',
	'group-Global_bot' => 'Globalni boti',
	'group-Global_bot-member' => '{{GENDER:$1|globalni bot}}',
	'group-Global_rollback' => 'Globalni vračalci urejanj',
	'group-Global_rollback-member' => '{{GENDER:$1|globalni vračalec|globalna vračalka}} urejanj',
	'group-Global_sysops' => 'Globalni administratorji',
	'group-Global_sysops-member' => '{{GENDER:$1|globalni administrator|globalna administratorka}}',
	'group-Ombudsmen' => 'Ombudsmani',
	'group-Ombudsmen-member' => '{{GENDER:$1|ombudsman|ombudsmanka}}',
	'group-Staff' => 'Osebje',
	'group-Staff-member' => 'zaposlen',
	'group-editinterface' => 'Urejevalci vmesnika',
	'group-editinterface-member' => '{{GENDER:$1|urejevalec|urejevalka}} vmesnika',
	'group-steward' => 'Upravniki',
	'group-steward-member' => '{{GENDER:$1|upravnik|upravnica}}',
	'group-sysadmin' => 'Sistemski administratorji',
	'group-sysadmin-member' => '{{GENDER:$1|sistemski administrator|sistemska administratorka}}',
	'group-translationadmin' => 'Upravitelji prevodov',
	'group-translationadmin-member' => '{{GENDER:$1|upravitelj|upraviteljica}} prevodov',
	'grouppage-translationadmin' => '{{ns:project}}:Upravitelji prevodov',
	'group-coder' => 'Koderji',
	'group-coder-member' => '{{GENDER:$1|koder|koderka}}',
	'group-inactive' => 'Neaktivni uporabniki',
	'group-inactive-member' => '{{GENDER:$1|nedejaven uporabnik|nedejavna uporabnica}}',
	'grouppage-inactive' => '{{ns:project}}:Neaktivni uporabniki',
	'shared-repo-name-shared' => 'Wikimedijina Zbirka',
	'wikimedia-copyright' => 'Besedilo je na razpolago pod <a href="//creativecommons.org/licenses/by-sa/3.0/">licenco Creative Commons
Priznanje avtorstva-Deljenje pod enakimi pogoji 3.0</a>; veljajo lahko tudi dodatni pogoji. Podrobnosti so razložene na strani <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Pogoji uporabe</a>.',
	'wikimedia-copyrightwarning' => 'S klikom gumba »{{int:savearticle}}« se strinjate s [//wikimediafoundation.org/wiki/Terms_of_Use pogoji uporabe] in z nepreklicno objavo svojega prispevka pod licencama [//creativecommons.org/licenses/by-sa/3.0/ CC-BY-SA 3.0] in [//www.gnu.org/copyleft/fdl.html GFDL].
Strinjate se, da za priznanje avtorstva po licenci Creative Commons zadostujeta povezava ali spletni naslov.',
	'cant-delete-main-page' => 'Glavne strani ne morete izbrisati ali prestaviti.',
	'upload-more-photos-of-this-monument' => 'Naložite več fotografij spomenika',
);

/** Lower Silesian (Schläsch)
 * @author Schläsinger
 */
$messages['sli'] = array(
	'sitesupport' => 'Spenda',
	'group-coder' => 'Programmierer',
);

/** Samoan (Gagana Samoa)
 */
$messages['sm'] = array(
	'sitesupport' => 'Meaalofa tupe',
);

/** Southern Sami (Åarjelsaemien)
 * @author M.M.S.
 */
$messages['sma'] = array(
	'sitesupport' => 'Vedtedh beetnegh', # Fuzzy
	'tooltip-n-sitesupport' => '{{SITENAME}} dåarjedidh', # Fuzzy
);

/** Shona (chiShona)
 * @author Hakka
 */
$messages['sn'] = array(
	'sitesupport' => 'Zvipo',
);

/** Somali (Soomaaliga)
 * @author Abshirdheere
 * @author Mimursal
 */
$messages['so'] = array(
	'sitesupport' => 'Tabarucid',
	'tooltip-n-sitesupport' => 'Nacaawi',
	'createacct-imgcaptcha-help' => 'Ma arki karo sawirka? [[{{MediaWiki:createacct-captcha-help-url}}|Codsi akoon]]',
);

/** Albanian (shqip)
 * @author Dasius
 * @author Dori
 * @author Mikullovci11
 * @author Olsi
 * @author Puntori
 */
$messages['sq'] = array(
	'wikimediamessages-desc' => 'Mesazhet specifike të Wikimedia-s',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=sq',
	'sitesupport' => 'Dhurime',
	'tooltip-n-sitesupport' => 'Na mbështet',
	'specialpages-group-contribution' => 'Kontibutet/Mbledhja e fondeve',
	'nstab-creator' => 'Krijues',
	'nstab-institution' => 'Institucion',
	'nstab-sequence' => 'Sekuencë',
	'nstab-timedtext' => 'Tekst me datë',
	'group-Ex_Administrator' => 'Ish-administratorë',
	'group-Ex_Bureaucrat' => 'Ish-burokratë',
	'group-Image-reviewer' => 'Inspektorët e figurave',
	'group-Image-reviewer-member' => 'kontrollues e skedave', # Fuzzy
	'grouppage-Image-reviewer' => '{{ns:project}}:Kontrolluesit e skedave',
	'group-OTRS-member' => 'Anëtarët OTRS',
	'group-OTRS-member-member' => 'anëtarë OTRS', # Fuzzy
	'grouppage-OTRS-member' => '{{ns:project}}:Anëtarët OTRS',
	'group-abusefilter' => 'Filtër abuzim redaktues',
	'group-abusefilter-member' => 'abuzoni redaktorët filtër', # Fuzzy
	'grouppage-abusefilter' => '{{ns:project}}:Abuzoni redaktorët filtër',
	'group-accountcreator' => 'Krijuesit e llogarive',
	'group-accountcreator-member' => 'krijues llogarish', # Fuzzy
	'grouppage-accountcreator' => '{{ns:project}}:Krijuesit për llogarit të reja',
	'group-arbcom' => 'Anëtarët e komisionit të arbitrazhit',
	'group-arbcom-member' => 'anëtar i komisionit të arbitrazhit', # Fuzzy
	'grouppage-arbcom' => '{{ns:project}}:Anëtarët e komisionit të arbitrazhit',
	'group-autopatrolled' => 'Patrullat automatike',
	'group-autopatrolled-member' => 'patrolluesit automatik', # Fuzzy
	'grouppage-autopatrolled' => '{{ns:project}}:Inspektoruesit automatik',
	'group-autoreviewer' => 'Inspektor automatik',
	'group-autoreviewer-member' => 'rishikuesit automatik', # Fuzzy
	'grouppage-autoreviewer' => '{{ns:project}}:Kontrolluesit automatik',
	'group-bigexport' => 'Eksportuesit e mëdhenj',
	'group-bigexport-member' => 'eksportues i madhë', # Fuzzy
	'grouppage-bigexport' => '{{ns:project}}:Eksportuesit të mëdha',
	'group-botadmin' => 'Robotë web-i me të drejta administratori',
	'group-confirmed' => 'Përdoruesit e vërtetuar',
	'group-confirmed-member' => 'përdorues e konfirmuar', # Fuzzy
	'grouppage-confirmed' => '{{ns:project}}:Përdoruesit e konfirmuar',
	'group-editprotected' => 'Redaktorët e faqeve të mbrojtura',
	'group-editprotected-member' => 'Redaktor për faqeve të mbrojtura', # Fuzzy
	'grouppage-editprotected' => '{{ns:project}}:Redaktoruesit për faqeve të mbrojtura',
	'group-eliminator' => 'Asgjesuesit',
	'group-eliminator-member' => 'eliminues', # Fuzzy
	'grouppage-eliminator' => '{{ns:project}}:Eliminues',
	'group-filemover' => 'Zhvendosësit e skedave',
	'group-filemover-member' => 'levizues e skedave', # Fuzzy
	'grouppage-filemover' => '{{ns:project}}:Levizuesit e skedave',
	'group-flood' => 'Përdoruesit robotë',
	'group-flood-member' => 'përdorues robotike', # Fuzzy
	'grouppage-flood' => '{{ns:project}}:Përdoruesi robotë',
	'group-founder' => 'Themeluesit',
	'group-founder-member' => 'themelues', # Fuzzy
	'grouppage-founder' => '{{ns:project}}:Themelues',
	'group-import' => 'Importuesit',
	'group-import-member' => 'importues', # Fuzzy
	'grouppage-import' => '{{ns:project}}:Importues',
	'group-interface_editor' => 'Redaktuesit e shabllonit të faqes të përdoruesit',
	'group-interface_editor-member' => 'redaktues ndërfaqesh', # Fuzzy
	'grouppage-interface_editor' => '{{ns:project}}:Redaktuesit e ndërfaqeve',
	'group-ipblock-exempt' => 'Përjashtimet për bllokimin e IP-ve',
	'group-ipblock-exempt-member' => 'bllokimit-IP e përjashtimuar', # Fuzzy
	'grouppage-ipblock-exempt' => '{{ns:project}}:Përjashtim-E bllokimit-IP',
	'group-patroller' => 'Patrolluesit',
	'group-patroller-member' => 'inspektorues', # Fuzzy
	'group-researcher' => 'Hulumtuesit',
	'group-researcher-member' => 'kërkues', # Fuzzy
	'grouppage-researcher' => '{{ns:project}}:Kërkuesit',
	'group-rollbacker' => 'Rikthyesit',
	'group-rollbacker-member' => 'rikthejuës', # Fuzzy
	'grouppage-rollbacker' => '{{ns:project}}:Rikthejuësit',
	'group-transwiki' => 'Importuesit ndër-wiki',
	'group-transwiki-member' => 'importues transwiki', # Fuzzy
	'grouppage-transwiki' => '{{ns:project}}:Importuesit e transwiki-t',
	'group-trusted' => 'Përdoruesit e besuar',
	'group-trusted-member' => 'përdoruesi e besueshme', # Fuzzy
	'grouppage-trusted' => '{{ns:project}}:Përdoruesit të besueshme',
	'group-Global_bot' => 'Robotet global',
	'group-Global_bot-member' => 'roboti globale', # Fuzzy
	'group-Global_rollback' => 'Rikthejuës globale',
	'group-Global_rollback-member' => 'Rikthejuës globale', # Fuzzy
	'group-Global_sysops' => 'Administratori global',
	'group-Global_sysops-member' => 'Administrator globale', # Fuzzy
	'group-Ombudsmen' => 'Ombudsperson',
	'group-Ombudsmen-member' => 'Ombudsperson', # Fuzzy
	'group-Staff' => 'Stafi',
	'group-Staff-member' => 'anëtar i stafit',
	'group-editinterface' => 'Redaktues ndërfaqesh',
	'group-editinterface-member' => 'redaktor interface', # Fuzzy
	'group-steward' => 'Përgjegjës',
	'group-steward-member' => 'Përgjegjës', # Fuzzy
	'group-sysadmin' => 'Sistemi administrativ',
	'group-sysadmin-member' => 'administratori i sistemit', # Fuzzy
	'group-coder' => 'Koduesit',
	'group-coder-member' => 'kodues', # Fuzzy
	'group-inactive' => 'Përdorueset joaktiv',
	'group-inactive-member' => 'Përdoruesi joaktiv', # Fuzzy
	'grouppage-inactive' => '{{ns:project}}:Përdoruesit joaktiv',
	'wikimedia-copyright' => 'Të gjitha materialet që gjenden në këtë faqë janë të mbrojtura nga <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike License</a>.
Shikoni <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Kushtet e Përdorimit</a> për më shumë informacione.',
	'wikimedia-copyrightwarning' => 'Duke shpëtuar/ruajtur, ju pajtoheni në mënyrë të parevokueshme të lëshoni kontributin tuaj nën liçensën [//creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] dhe [//www.gnu.org/copyleft/fdl.html Licenca për Dokumentim të Lirë (GFDL)]. Ju pajtoheni të jeni i kredituar nga ripërdoruesit, si minimum, nga një hyper-lidhje ose URL te faqja ku ju po kontribuoni. Shikoni [//wikimediafoundation.org/wiki/Terms_of_Use Kushtet e përdorimit] për detaje.', # Fuzzy
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author FriedrickMILBarbarossa
 * @author Milicevic01
 * @author Millosh
 * @author Rancher
 * @author Red Baron
 * @author Жељко Тодоровић
 * @author Михајло Анђелковић
 */
$messages['sr-ec'] = array(
	'wikimediamessages-desc' => 'Поруке које се односе на Викимедију',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=sr-ec',
	'sitesupport' => 'Новчани прилози',
	'tooltip-n-sitesupport' => 'Подржите нас',
	'specialpages-group-contribution' => 'Доприноси/Прикупљање средстава',
	'nstab-creator' => 'Творац',
	'nstab-institution' => 'Установа',
	'nstab-sequence' => 'Низ',
	'nstab-timedtext' => 'Усклађен текст',
	'group-Ex_Administrator' => 'Бивши администратори',
	'group-Ex_Administrator-member' => '{{GENDER:$1|бивши администратор|бивша администраторка|бивши администратор}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Бивши администратори',
	'group-Ex_Bureaucrat' => 'Бивше бирократе',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|бивши бирократа|бивша бирократкиња|бивши бирократа}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Бивше бирократе',
	'group-Image-reviewer' => 'Прегледачи слика',
	'group-Image-reviewer-member' => '{{GENDER:$1|прегледач слика|прегледачица слика|прегледач слика}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:Прегледачи слика',
	'group-OTRS-member' => 'Чланови OTRS-а',
	'group-OTRS-member-member' => '{{GENDER:$1|члан OTRS-а}}',
	'grouppage-OTRS-member' => '{{ns:project}}:Чланови OTRS-а',
	'group-abusefilter' => 'Уредници филтера против злоупотребе',
	'group-abusefilter-member' => '{{GENDER:$1|уредник|уредница|уредник}} филтера против злоупотребе',
	'grouppage-abusefilter' => '{{ns:project}}:Уредници филтера против злоупотребе',
	'group-accountcreator' => 'Ствараоци налога',
	'group-accountcreator-member' => '{{GENDER:$1|стваралац налога|стваратељка налога|стваралац налога}}',
	'grouppage-accountcreator' => '{{ns:project}}:Ствараоци налога',
	'group-arbcom' => 'Чланови Арбитражног одбора',
	'group-arbcom-member' => '{{GENDER:$1|члан Арбитражног одбора}}',
	'grouppage-arbcom' => '{{ns:project}}:Чланови Арбитражног одбора',
	'group-autopatrolled' => 'Аутопатролери',
	'group-autopatrolled-member' => '{{GENDER:$1|аутопатролер|аутопатролерка|аутопатролер}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Аутопатролери',
	'group-autoreviewer' => 'Самооцењивачи',
	'group-autoreviewer-member' => '{{GENDER:$1|самооцењивач|самооцењивачица|самооцењивач}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Самооцењивачи',
	'group-bigexport' => 'Велики извозници',
	'group-bigexport-member' => '{{GENDER:$1|велики извозник|велика извозница|велики извозник}}',
	'grouppage-bigexport' => '{{ns:project}}:Велики извозници',
	'group-botadmin' => 'Ботови с администраторским правима',
	'group-botadmin-member' => '{{GENDER:$1|бот с администраторским правима}}',
	'grouppage-botadmin' => '{{ns:project}}:Ботови с администраторским правима',
	'group-confirmed' => 'Потврђени корисници',
	'group-confirmed-member' => '{{GENDER:$1|потврђени корисник|потврђена корисница|потврђени корисник}}',
	'grouppage-confirmed' => '{{ns:project}}:Потврђени корисници',
	'group-editprotected' => 'Уредници заштићених страница',
	'group-editprotected-member' => '{{GENDER:$1|уредник|уредница|уредник}} заштићене странице',
	'grouppage-editprotected' => '{{ns:project}}:Уредници заштићених страница',
	'group-eliminator' => 'Одстрањивачи',
	'group-eliminator-member' => '{{GENDER:$1|одстрањивач|одстрањивачица|одстрањивач}}',
	'grouppage-eliminator' => '{{ns:project}}:Одстрањивач', # Fuzzy
	'group-filemover' => 'Премештачи датотека',
	'group-filemover-member' => '{{GENDER:$1|премештач датотека|премештачица датотека|премештач датотека}}',
	'grouppage-filemover' => '{{ns:project}}:Премештачи датотека',
	'group-flood' => 'Корисници-ботови',
	'group-flood-member' => '{{GENDER:$1|корисник-бот|корисница-бот|корисник-бот}}',
	'grouppage-flood' => '{{ns:project}}:Корисници-ботови',
	'group-founder' => 'Оснивачи',
	'group-founder-member' => '{{GENDER:$1|оснивач|оснивачица|оснивач}}',
	'grouppage-founder' => '{{ns:project}}:Оснивачи',
	'group-import' => 'Увозници',
	'group-import-member' => '{{GENDER:$1|увозник|увозница|увозник}}',
	'grouppage-import' => '{{ns:project}}:Увозници',
	'group-interface_editor' => 'Уредници сучеља',
	'group-interface_editor-member' => '{{GENDER:$1|уредник сучеља|уредница сучеља|уредник сучеља}}',
	'grouppage-interface_editor' => '{{ns:project}}:Уредници сучеља',
	'group-ipblock-exempt' => 'Изузеци од ИП блокирања',
	'group-ipblock-exempt-member' => '{{GENDER:$1|изузетак од ИП блокирања}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Изузетак од ИП блокирања',
	'group-patroller' => 'Патролери',
	'group-patroller-member' => '{{GENDER:$1|патролер|патролерка|патролер}}',
	'grouppage-patroller' => '{{ns:project}}:Патролери',
	'group-researcher' => 'Истраживачи',
	'group-researcher-member' => '{{GENDER:$1|истраживач|истраживачица|истраживач}}',
	'grouppage-researcher' => '{{ns:project}}:Истраживачи',
	'group-rollbacker' => 'Враћачи',
	'group-rollbacker-member' => '{{GENDER:$1|враћач|враћачица|враћач}}',
	'grouppage-rollbacker' => '{{ns:project}}:Враћачи',
	'group-transwiki' => 'Међувики увозници',
	'group-transwiki-member' => '{{GENDER:$1|међувики увозник|међувики увозница|међувики увозник}}',
	'grouppage-transwiki' => '{{ns:project}}:Међувики увозници',
	'group-trusted' => 'Поверљиви корисници',
	'group-trusted-member' => '{{GENDER:$1|поверљиви корисник|поверљива корисница|поверљиви корисник}}',
	'grouppage-trusted' => '{{ns:project}}:Поверљиви корисници',
	'group-uploader' => 'Пошиљаоци',
	'group-uploader-member' => 'пошиљалац', # Fuzzy
	'grouppage-uploader' => '{{ns:project}}:Пошиљаоци',
	'group-Global_bot' => 'Глобални ботови',
	'group-Global_bot-member' => '{{GENDER:$1|глобални бот}}',
	'grouppage-Global_bot' => 'm:Global bot/sr',
	'group-Global_rollback' => 'Глобални враћачи',
	'group-Global_rollback-member' => '{{GENDER:$1|глобални враћач|глобална враћачица|глобални враћач}}',
	'grouppage-Global_rollback' => 'm:Global rollback/sr',
	'group-Global_sysops' => 'Глобални администратори',
	'group-Global_sysops-member' => '{{GENDER:$1|глобални администратор|глобална администраторка|глобални администратор}}',
	'grouppage-Global_sysops' => 'm:Global sysops/sr',
	'group-Ombudsmen' => 'Правозаступници',
	'group-Ombudsmen-member' => '{{GENDER:$1|правозаступник|правозаступница|правозаступник}}',
	'grouppage-Ombudsmen' => 'm:Ombudsman commission/sr',
	'group-Staff' => 'Уредништво',
	'group-Staff-member' => '{{GENDER:$1|члан уредништва}}',
	'grouppage-Staff' => 'Задужбина:Уредништво',
	'group-editinterface' => 'Уредници сучеља',
	'group-editinterface-member' => '{{GENDER:$1|уредник|уредница|уредник}} сучеља',
	'group-steward' => 'Стјуарди',
	'group-steward-member' => '{{GENDER:$1|стјуард}}',
	'grouppage-steward' => 'm:Stewards/sr',
	'group-sysadmin' => 'Системски администратори',
	'group-sysadmin-member' => '{{GENDER:$1|системски администратор|системска администраторка|системски администратор}}',
	'grouppage-sysadmin' => 'm:Системски администратори',
	'group-translationadmin' => 'Преводилачки администратори',
	'group-translationadmin-member' => '{{GENDER:$1|преводилачки администратор|преводилачка администраторка|преводилачки администратор}}',
	'grouppage-translationadmin' => '{{ns:project}}:Преводилачки администратори',
	'group-coder' => 'Програмери',
	'group-coder-member' => '{{GENDER:$1|програмер|програмерка|програмер}}',
	'grouppage-coder' => '{{ns:project}}:Програмер',
	'group-inactive' => 'Неактивни корисници',
	'group-inactive-member' => '{{GENDER:$1|неактивни корисник|неактивна корисница|неактивни корисник}}',
	'grouppage-inactive' => '{{ns:project}}:Неактивни корисници',
	'shared-repo-name-shared' => 'Викимедијина остава',
	'wikimedia-copyright' => 'Текст је доступан под лиценцом <a href="//creativecommons.org/licenses/by-sa/3.0/">Кријејтив комонс Ауторство-Делити под истим условима</a>;
додатни услови се могу применити.
Погледајте <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Услове коришћења</a> за више информација.',
	'wikidata-copyright' => 'Сви структурисани подаци из главног и својства именског простора су доступни под лиценцом <a href="//creativecommons.org/publicdomain/zero/1.0/" title="Definition of the Creative Commons CC0 License">Creative Commons CC0</a>; текст из других именских простора је доступан под лиценцом <a href="//creativecommons.org/licenses/by-sa/3.0/" title="Definition of the Creative Commons Attribution/Share-Alike License">Creative Commons Ауторство-Делити под истим условима 3.0</a>; могући су и додатни услови. Погледајте <a href="//wikimediafoundation.org/wiki/Terms_of_Use" title="Wikimedia Foundation Terms of Use">Услове коришћења</a> за више информација.',
	'wikidata-shortcopyrightwarning' => 'Кликом на дугме „сачувај“, прихватате [https://wikimediafoundation.org/wiki/Terms_of_Use услове коришћења] и неопозиво се слажете да објавите свој допринос под условима [https://creativecommons.org/publicdomain/zero/1.0/ CC0 лиценце].', # Fuzzy
	'wikimedia-copyrightwarning' => 'Кликом на дугме „{{int:savearticle}}“, прихватате <span class=plainlinks>[http://wikimediafoundation.org/wiki/Terms_of_Use услове коришћења]</span> и неопозиво се слажете да објавите своје доприносе под условима лиценце <span class=plainlinks>[http://sr.wikipedia.org/wiki/Википедија:Текст_слободне_лиценце_Ауторство-Делити_под_истим_условима_3.0_Unported_(CC_BY-SA_3.0) CC-BY-SA 3.0]</span> и <span class=plainlinks>[http://sr.wikipedia.org/wiki/Википедија:Текст_ГНУ-ове_лиценце_за_слободну_документацију GFDL]</span>.
Слажете се да навођење хипервеза или адреса представља довољно одавање заслуга под лиценцом Кријејтив комонс.',
	'cant-delete-main-page' => 'Не можете обрисати или преместити главну страну.',
	'extdist-branch-REL1_21' => '1.21 (најновија стабилна верзија Медијавикија)',
	'createacct-helpusername-url' => '{{ns:Project}}:Кориснички_налог',
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(помози ми у избору)]]',
	'createacct-captcha-help-url' => '{{ns:Project}}:Request an account',
	'createacct-imgcaptcha-help' => 'Не видите слику? [[{{MediaWiki:createacct-captcha-help-url}}|Поднесите захтев за отварање налога]]',
);

/** Serbian (Latin script) (srpski (latinica)‎)
 * @author FriedrickMILBarbarossa
 * @author Michaello
 * @author Milicevic01
 * @author Жељко Тодоровић
 */
$messages['sr-el'] = array(
	'wikimediamessages-desc' => 'Poruke specifične za Vikimediju.',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=sr-el',
	'sitesupport' => 'Novčani prilozi',
	'tooltip-n-sitesupport' => 'podrži nas',
	'specialpages-group-contribution' => 'Doprinosi/Prikupljanje sredstava',
	'nstab-creator' => 'Tvorac',
	'nstab-institution' => 'Ustanova',
	'nstab-sequence' => 'Niz',
	'nstab-timedtext' => 'Usklađen tekst',
	'group-Ex_Administrator' => 'Bivši administratori',
	'group-Ex_Administrator-member' => '{{GENDER:$1|bivši administrator|bivša administratorka|bivši administrator}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Bivši administratori',
	'group-Ex_Bureaucrat' => 'Bivše birokrate',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|bivši birokrata|bivša birokratkinja|bivši birokrata}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Bivše birokrate',
	'group-Image-reviewer' => 'Pregledači slika',
	'group-Image-reviewer-member' => '{{GENDER:$1|pregledač slika|pregledačica slika|pregledač slika}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:Pregledači slika',
	'group-OTRS-member' => 'Članovi OTRS-a',
	'group-OTRS-member-member' => '{{GENDER:$1|član OTRS-a}}',
	'grouppage-OTRS-member' => '{{ns:project}}:Članovi OTRS-a',
	'group-abusefilter' => 'Urednici filtera protiv zloupotrebe',
	'group-abusefilter-member' => '{{GENDER:$1|urednik|urednica|urednik}} filtera protiv zloupotrebe',
	'grouppage-abusefilter' => '{{ns:project}}:Urednici filtera protiv zloupotrebe',
	'group-accountcreator' => 'stvaraoci naloga',
	'group-accountcreator-member' => '{{GENDER:$1|stvaralac naloga|stvarateljka naloga|stvaralac naloga}}',
	'grouppage-accountcreator' => '{{ns:project}}:Stvarači naloga',
	'group-arbcom' => 'Članovi arbitražnog veća',
	'group-arbcom-member' => '{{GENDER:$1|član Arbitražnog odbora}}',
	'grouppage-arbcom' => '{{ns:project}}:Članovi arbitražne komisije',
	'group-autopatrolled' => 'Automatski patrolisani',
	'group-autopatrolled-member' => '{{GENDER:$1|autopatroler|autopatrolerka|autopatroler}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Autopatrolisani',
	'group-autoreviewer' => 'Automatski pregledani',
	'group-autoreviewer-member' => '{{GENDER:$1|samoocenjivač|samoocenjivačica|samoocenjivač}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Automatski pregledani',
	'group-bigexport' => 'Veliki izvoznici',
	'group-bigexport-member' => '{{GENDER:$1|veliki izvoznik|velika izvoznica|veliki izvoznik}}',
	'grouppage-bigexport' => '{{ns:project}}:Veliki izvoznici',
	'group-botadmin' => 'Botovi s administratorskim pravima',
	'group-botadmin-member' => '{{GENDER:$1|bot s administratorskim pravima}}',
	'grouppage-botadmin' => '{{ns:project}}:Botovi s administratorskim pravima',
	'group-confirmed' => 'Potvrđeni korisnici',
	'group-confirmed-member' => '{{GENDER:$1|potvrđeni korisnik|potvrđena korisnica|potvrđeni korisnik}}',
	'grouppage-confirmed' => '{{ns:project}}:Potvrđeni korisnici',
	'group-editprotected' => 'Urednici zaštićenih strana',
	'group-editprotected-member' => '{{GENDER:$1|urednik|urednica|urednik}} zaštićene stranice',
	'grouppage-editprotected' => '{{ns:project}}:Urednici zaštićenih strana',
	'group-eliminator' => 'Odstranjivači',
	'group-eliminator-member' => '{{GENDER:$1|odstranjivač|odstranjivačica|odstranjivač}}',
	'grouppage-eliminator' => '{{ns:project}}:Odstranjivač',
	'group-filemover' => 'Premeštači fajlova',
	'group-filemover-member' => '{{GENDER:$1|premeštač datoteka|premeštačica datoteka|premeštač datoteka}}',
	'grouppage-filemover' => '{{ns:project}}:Premeštači fajlova',
	'group-flood' => 'Botovski korisnici',
	'group-flood-member' => '{{GENDER:$1|korisnik-bot|korisnica-bot|korisnik-bot}}',
	'grouppage-flood' => '{{ns:project}}:Botovski korisnici',
	'group-founder' => 'osnivači',
	'group-founder-member' => '{{GENDER:$1|osnivač|osnivačica|osnivač}}',
	'grouppage-founder' => '{{ns:project}}:Osnivači',
	'group-import' => 'Uvoznici',
	'group-import-member' => '{{GENDER:$1|uvoznik|uvoznica|uvoznik}}',
	'grouppage-import' => '{{ns:project}}:Uvoznici',
	'group-interface_editor' => 'Urednici interfejsa',
	'group-interface_editor-member' => '{{GENDER:$1|urednik sučelja|urednica sučelja|urednik sučelja}}',
	'grouppage-interface_editor' => '{{ns:project}}:Urednici interfejsa',
	'group-ipblock-exempt' => 'izuzeci od IP blokova',
	'group-ipblock-exempt-member' => '{{GENDER:$1|izuzetak od IP blokiranja}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Izuzetak od IP blokova',
	'group-patroller' => 'Patroleri',
	'group-patroller-member' => '{{GENDER:$1|patroler|patrolerka|patroler}}',
	'group-researcher' => 'Istraživači',
	'group-researcher-member' => '{{GENDER:$1|istraživač|istraživačica|istraživač}}',
	'grouppage-researcher' => '{{ns:project}}:Istraživači',
	'group-rollbacker' => 'vraćači',
	'group-rollbacker-member' => '{{GENDER:$1|vraćač|vraćačica|vraćač}}',
	'grouppage-rollbacker' => '{{ns:project}}:Vraćači',
	'group-transwiki' => 'Međuviki uvoznici',
	'group-transwiki-member' => '{{GENDER:$1|međuviki uvoznik|međuviki uvoznica|međuviki uvoznik}}',
	'grouppage-transwiki' => '{{ns:project}}:Međuviki uvoznici',
	'group-trusted' => 'Korsinici od poverenja',
	'group-trusted-member' => '{{GENDER:$1|poverljivi korisnik|poverljiva korisnica|poverljivi korisnik}}',
	'grouppage-trusted' => '{{ns:project}}:Korisnici od poverenja',
	'group-Global_bot' => 'Globalni botovi',
	'group-Global_bot-member' => '{{GENDER:$1|globalni bot}}',
	'grouppage-Global_bot' => 'm:Global bot/sr',
	'group-Global_rollback' => 'Globalni vraćači',
	'group-Global_rollback-member' => '{{GENDER:$1|globalni vraćač|globalna vraćačica|globalni vraćač}}',
	'grouppage-Global_rollback' => 'm:Global rollback/sr',
	'group-Global_sysops' => 'Globalni administratori',
	'group-Global_sysops-member' => '{{GENDER:$1|globalni administrator|globalna administratorka|globalni administrator}}',
	'grouppage-Global_sysops' => 'm:Global sysops/sr',
	'group-Ombudsmen' => 'Pravozastupnici',
	'group-Ombudsmen-member' => '{{GENDER:$1|pravozastupnik|pravozastupnica|pravozastupnik}}',
	'grouppage-Ombudsmen' => 'm:Ombudsman commission/sr',
	'group-Staff' => 'Uredništvo',
	'group-Staff-member' => '{{GENDER:$1|član uredništva}}',
	'grouppage-Staff' => 'Zadužbina:Uredništvo',
	'group-editinterface' => 'Urednici interfejsa',
	'group-editinterface-member' => '{{GENDER:$1|urednik|urednica|urednik}} sučelja',
	'group-steward' => 'Stjuardi',
	'group-steward-member' => '{{GENDER:$1|stjuard}}',
	'grouppage-steward' => 'm:Stewards/sr',
	'group-sysadmin' => 'Sistemski administratori',
	'group-sysadmin-member' => '{{GENDER:$1|sistemski administrator|sistemska administratorka|sistemski administrator}}',
	'grouppage-sysadmin' => 'm:Sistemski administratori',
	'group-translationadmin' => 'Prevodilački administratori',
	'group-translationadmin-member' => '{{GENDER:$1|prevodilački administrator|prevodilačka administratorka|prevodilački administrator}}',
	'grouppage-translationadmin' => '{{ns:project}}:Prevodilački administratori',
	'group-coder' => 'Koderi',
	'group-coder-member' => '{{GENDER:$1|programer|programerka|programer}}',
	'grouppage-coder' => '{{ns:project}}:Programer',
	'group-inactive' => 'Neaktivni korisnici',
	'group-inactive-member' => '{{GENDER:$1|neaktivni korisnik|neaktivna korisnica|neaktivni korisnik}}',
	'grouppage-inactive' => '{{ns:project}}:Neaktivni korisnici',
	'shared-repo-name-shared' => 'Vikimedijina ostava',
	'wikimedia-copyright' => 'Tekst je dostupan pod licencom <a href="//creativecommons.org/licenses/by-sa/3.0/">Krijejtiv komons Autorstvo-Deliti pod istim uslovima</a>;
dodatni uslovi se mogu primeniti.
Pogledajte <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Uslove korišćenja</a> za više informacija.',
	'wikimedia-copyrightwarning' => 'Klikom na dugme „{{int:Savearticle/sr-el}}“, prihvatate <span class=plainlinks>[http://wikimediafoundation.org/wiki/Terms_of_Use  uslove korišćenja]</span> i neopozivo se slažete da objavite svoje doprinose pod uslovima licence <span class=plainlinks>[http://sr.wikipedia.org/wiki/Vikipedija:Tekst_slobodne_licence_Autorstvo-Deliti_pod_istim_uslovima_3.0_Unported_(CC_BY-SA_3.0) CC-BY-SA 3.0]</span> i <span class=plainlinks>[http://sr.wikipedia.org/wiki/Vikipedija:Tekst_GNU-ove_licence_za_slobodnu_dokumentaciju GFDL]</span>.
Slažete se da navođenje hiperveza ili adresa predstavlja dovoljno odavanje zasluga pod licencom Krijejtiv komons.',
	'cant-delete-main-page' => 'Ne možete obrisati ili premestiti glavnu stranu.',
);

/** Sranan Tongo (Sranantongo)
 * @author Adfokati
 */
$messages['srn'] = array(
	'sitesupport' => 'Yibi a finansi',
	'tooltip-n-sitesupport' => 'Gi wi wan finansi',
);

/** Southern Sotho (Sesotho)
 */
$messages['st'] = array(
	'sitesupport' => 'Dimpho',
);

/** Seeltersk (Seeltersk)
 * @author Maartenvdbent
 * @author Pyt
 */
$messages['stq'] = array(
	'wikimediamessages-desc' => 'Wikimediaspezifiske Systemättergjuchte',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=stq',
	'sitesupport' => 'Spenden',
	'tooltip-n-sitesupport' => 'Unnerstutse uus',
	'group-abusefilter' => 'Misbruukssieuwe-Beoarbaidere',
	'group-abusefilter-member' => 'Misbruukssieuwe-Beoarbaider', # Fuzzy
	'grouppage-abusefilter' => '{{ns:project}}:Misbruukssieuwe-Beoarbaidere',
	'group-accountcreator' => 'Benutserkonten-Moakere',
	'group-accountcreator-member' => 'Benutserkonten-Moaker', # Fuzzy
	'grouppage-accountcreator' => '{{ns:project}}:Benutserkonten-Moakere',
	'group-autopatrolled' => 'Automatiske Kontrollierdere',
	'group-autopatrolled-member' => 'Automatisken Wröiger', # Fuzzy
	'grouppage-autopatrolled' => '{{ns:project}}:Automatiske Wröigere',
	'group-autoreviewer' => 'Autowröigere',
	'group-autoreviewer-member' => 'Automatisken Wröiger', # Fuzzy
	'grouppage-autoreviewer' => '{{ns:project}}:Automatiske Wröigere',
	'group-bigexport' => 'Grootexporteure',
	'group-bigexport-member' => 'Grootexporteur', # Fuzzy
	'grouppage-bigexport' => '{{ns:project}}:Grootexporteure',
	'group-confirmed' => 'Bestäätigede Benutsere',
	'group-confirmed-member' => 'Bestäätigeden Benutser', # Fuzzy
	'grouppage-confirmed' => '{{ns:project}}:Bestäätigede Benutsere',
	'group-flood' => 'Botbenutsere',
	'group-flood-member' => 'Botbenutser', # Fuzzy
	'grouppage-flood' => '{{ns:project}}:Botbenutsere',
	'group-founder' => 'Gruundere',
	'group-founder-member' => 'Gruunder', # Fuzzy
	'grouppage-founder' => '{{ns:project}}:Gruundere',
	'group-import' => 'Importeur',
	'group-import-member' => 'Importeur', # Fuzzy
	'grouppage-import' => '{{ns:project}}:Importeure',
	'group-ipblock-exempt' => 'IP-Speere-Uutnoamen',
	'group-ipblock-exempt-member' => 'IP-Speere-Uutnoame', # Fuzzy
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP-Speere-Uutnoame',
	'group-patroller' => 'Kontrolleure',
	'group-patroller-member' => 'Kontrolleur', # Fuzzy
	'group-rollbacker' => 'Touräächsättere',
	'group-rollbacker-member' => 'Touräächsätter', # Fuzzy
	'grouppage-rollbacker' => '{{ns:project}}:Touräächsättere',
	'group-transwiki' => 'Transwiki-Importeure',
	'group-transwiki-member' => 'Transwiki-Importeur', # Fuzzy
	'grouppage-transwiki' => '{{ns:project}}:Transwiki-Importeure',
	'group-trusted' => 'Fertjouenswöidige Benutsere',
	'group-trusted-member' => 'Fertjouenswöidigen Benutser', # Fuzzy
	'grouppage-trusted' => '{{ns:project}}:Fertjouenswöidige Benutsere',
	'group-Global_bot' => 'Globoale Bots',
	'group-Global_bot-member' => 'Globoalen Bot', # Fuzzy
	'group-Global_rollback' => 'Globoale Touräächsättere',
	'group-Global_rollback-member' => 'Globoalen Touräächsätter', # Fuzzy
	'group-Ombudsmen' => 'Ombudsljuude',
	'group-Ombudsmen-member' => 'Ombudspersoon', # Fuzzy
	'group-Staff' => 'Mee-Oarbaidere',
	'group-Staff-member' => 'Mee-Oarbaider',
	'group-editinterface' => 'Benutseruurflächenbeoarbaidere',
	'group-editinterface-member' => 'Benutseruurflächenbeoarbaider', # Fuzzy
	'group-steward' => 'Stewarde',
	'group-steward-member' => 'Steward', # Fuzzy
	'grouppage-steward' => '{{ns:project}}:Stewards',
	'group-sysadmin' => 'Systemadministratore',
	'group-sysadmin-member' => 'Systemadministrator', # Fuzzy
	'group-coder' => 'Programmierdere',
	'group-coder-member' => 'Programmierder', # Fuzzy
	'group-inactive' => 'Inaktive Benutsere',
	'group-inactive-member' => 'Inaktiven Benutser', # Fuzzy
	'grouppage-inactive' => '{{ns:project}}:Inaktive Benutsere',
	'wikimedia-copyright' => 'Die Text is unner ju Lizenz <a href="//creativecommons.org/licenses/by-sa/3.0/deed.de">„Creative Commons Attribution/Share-Alike“</a> ferföigboar; Bedingengen uurhoop konnen anweendboar weese.
Eenpeldhaide sunt in do <a href="//wikimediafoundation.org/wiki/Nutzungsbedingungen">Nutsengsbedingengen</a> beschrieuwen.',
	'wikimedia-copyrightwarning' => 'Mäd dät Spiekerjen lizenzierst du dien Beoarbaidenge sunner dät du dät touräächtraale koast unner ju [//creativecommons.org/licenses/by-sa/3.0/deed.de „Creative Commons Attribution/Share-Alike“-Lizenz 3.0] un ju [//www.gnu.org/copyleft/fdl.html GFDL].
Du stimst tou, dät ne Fääreferweendenge ap minste truch n Hyperlink of ne URL tou ju Siede, ju du beoarbaidest, geböäre duur.
Eenpeldhaide sunt in do [//wikimediafoundation.org/wiki/Nutzungsbedingungen Nutsengsbedingengen] beschrieuwen.', # Fuzzy
);

/** Sundanese (Basa Sunda)
 * @author Irwangatot
 * @author Kandar
 */
$messages['su'] = array(
	'wikimediamessages-desc' => 'Talatah-talatah spesifik Wikimedia',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=su',
	'sitesupport' => 'Sumbangan',
	'tooltip-n-sitesupport' => 'Bobotohan',
	'group-accountcreator' => 'Nu nyieun rekening',
	'group-accountcreator-member' => 'nu nyieun rekening', # Fuzzy
	'grouppage-accountcreator' => '{{ns:project}}:Nu nyieun rekening',
	'group-founder' => 'Nu ngadegkeun',
	'group-founder-member' => 'nu ngadegkeun', # Fuzzy
	'grouppage-founder' => '{{ns:project}}:Nu ngadegkeun',
	'group-import' => 'Importir',
	'group-import-member' => 'importir', # Fuzzy
	'grouppage-import' => '{{ns:project}}:Importir',
	'group-ipblock-exempt' => 'Peungpeuk kajaba IP',
	'group-ipblock-exempt-member' => 'Peungpeuk kajaba IP', # Fuzzy
	'grouppage-ipblock-exempt' => '{{ns:project}}:Peungpeuk kajaba IP',
	'group-patroller' => 'Nu ngaronda',
	'group-patroller-member' => 'Nu ngaronda', # Fuzzy
	'group-rollbacker' => 'Malikeun révisi',
	'group-rollbacker-member' => 'Malikeun révisi', # Fuzzy
	'grouppage-rollbacker' => '{{ns:project}}:Malikeun révisi',
	'group-transwiki' => 'Importir transwiki',
	'group-transwiki-member' => 'importir transwiki', # Fuzzy
	'grouppage-transwiki' => '{{ns:project}}:Importir transwiki',
	'group-Global_bot' => 'Bot global',
	'group-Global_bot-member' => 'bot global', # Fuzzy
	'group-Global_rollback' => 'Malikeun révisi global',
	'group-Global_rollback-member' => 'Malikeun révisi global', # Fuzzy
	'group-Ombudsmen' => 'Ombudsman',
	'group-Ombudsmen-member' => 'Ombudsman', # Fuzzy
	'group-Staff' => 'Staf',
	'group-Staff-member' => 'Anggota staf',
	'group-steward' => 'Steward',
	'group-steward-member' => 'steward', # Fuzzy
	'grouppage-steward' => '{{ns:project}}:Steward',
	'group-sysadmin' => 'Kuncén sistem',
	'group-sysadmin-member' => 'kuncén sistem', # Fuzzy
);

/** Swedish (svenska)
 * @author Ainali
 * @author Boivie
 * @author Cohan
 * @author Diupwijk
 * @author Fluff
 * @author Jon Harald Søby
 * @author Jopparn
 * @author Lejonel
 * @author M.M.S.
 * @author Najami
 * @author Nemo bis
 * @author Per
 * @author Rotsee
 * @author Sannab
 * @author Sertion
 * @author Skalman
 * @author Tobulos1
 * @author Warrakkk
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'wikimediamessages-desc' => 'Wikimedia-specifika meddelanden',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=sv',
	'sitesupport' => 'Donera',
	'tooltip-n-sitesupport' => 'Stöd oss',
	'specialpages-group-contribution' => 'Bidrag/Insamling',
	'nstab-creator' => 'Skapare',
	'nstab-institution' => 'Institution',
	'nstab-sequence' => 'Ordningsföljd',
	'nstab-timedtext' => 'Undertext',
	'group-Ex_Administrator' => 'Tidigare administratörer',
	'group-Ex_Administrator-member' => '{{GENDER:$1|tidigare administratör}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Tidigare administratörer',
	'group-Ex_Bureaucrat' => 'Tidigare byråkrater',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|tidigare byråkrat}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Tidigare byråkrater',
	'group-Image-reviewer' => 'Bildgranskare',
	'group-Image-reviewer-member' => '{{GENDER:$1|bildgranskare}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:Bildgranskare',
	'group-OTRS-member' => 'OTRS-medlemmar',
	'group-OTRS-member-member' => '{{GENDER:$1|OTRS-medlem}}',
	'grouppage-OTRS-member' => '{{ns:project}}:OTRS-medlemmar',
	'group-abusefilter' => 'Redigerare av missbruksfilter',
	'group-abusefilter-member' => '{{GENDER:$1|redigerare av missbruksfilter}}',
	'grouppage-abusefilter' => '{{ns:project}}:Redigerare av missbruksfilter',
	'group-accountcreator' => 'Kontoskapare',
	'group-accountcreator-member' => '{{GENDER:$1|kontoskapare}}',
	'grouppage-accountcreator' => '{{ns:project}}:Kontoskapare',
	'group-arbcom' => 'Medlemmar av förlikningskommitte',
	'group-arbcom-member' => '{{GENDER:$1|medlem av förlikningskommitte}}',
	'grouppage-arbcom' => '{{ns:project}}:Förlikningskommittemedlemmar',
	'group-autopatrolled' => 'Autopatrullerare',
	'group-autopatrolled-member' => '{{GENDER:$1|autopatrullerare}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Autopatrullerare',
	'group-autoreviewer' => 'Automatiska granskare',
	'group-autoreviewer-member' => '{{GENDER:$1|automatisk granskare}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Automatiska granskare',
	'group-bigexport' => 'Stora exporterare',
	'group-bigexport-member' => '{{GENDER:$1|stor exporterare}}',
	'grouppage-bigexport' => '{{ns:project}}:Stora exporterare',
	'group-botadmin' => 'Robotar med administratörsrättigheter',
	'group-botadmin-member' => '{{GENDER:$1|robot med administratörsrättigheter}}',
	'grouppage-botadmin' => '{{ns:project}}: Robotar med administratörsrättigheter',
	'group-confirmed' => 'Bekräftade användare',
	'group-confirmed-member' => '{{GENDER:$1|bekräftad användare}}',
	'grouppage-confirmed' => '{{ns:project}}:Bekräftade användare',
	'group-editprotected' => 'Redigerare av skyddade sidor',
	'group-editprotected-member' => '{{GENDER:$1|redigerare av skyddade sidor}}',
	'grouppage-editprotected' => '{{ns:project}}:Redigerare av skyddade sidor',
	'group-eliminator' => 'Eliminatorer',
	'group-eliminator-member' => '{{GENDER:$1|eliminator}}',
	'grouppage-eliminator' => '{{ns:project}}:Eliminator',
	'group-filemover' => 'Filflyttare',
	'group-filemover-member' => '{{GENDER:$1|filflyttare}}',
	'grouppage-filemover' => '{{ns:project}}:Filflyttare',
	'group-flood' => 'Botanvändare',
	'group-flood-member' => '{{GENDER:$1|botanvändare}}',
	'grouppage-flood' => '{{ns:project}}:Botanvändare',
	'group-founder' => 'Grundare',
	'group-founder-member' => '{{GENDER:$1|grundare}}',
	'grouppage-founder' => '{{ns:project}}:Grundare',
	'group-import' => 'Importörer',
	'group-import-member' => '{{GENDER:$1|importör}}',
	'grouppage-import' => '{{ns:project}}:Importörer',
	'group-interface_editor' => 'Redigerare av gränssnitt',
	'group-interface_editor-member' => '{{GENDER:$1|redigerare av gränssnitt}}',
	'grouppage-interface_editor' => '{{ns:project}}:Redigerare av gränssnitt',
	'group-ipblock-exempt' => 'Undantagna från IP-blockering',
	'group-ipblock-exempt-member' => '{{GENDER:$1|undantagen från IP-blockering}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Undantagna från IP-blockering',
	'group-patroller' => 'Patrullerare',
	'group-patroller-member' => '{{GENDER:$1|patrullerare}}',
	'grouppage-patroller' => '{{ns:project}}:Patrullerare',
	'group-researcher' => 'Forskare',
	'group-researcher-member' => '{{GENDER:$1|forskare}}',
	'grouppage-researcher' => '{{ns:project}}:Forskare',
	'group-rollbacker' => 'Tillbakarullare',
	'group-rollbacker-member' => '{{GENDER:$1|tillbakarullare}}',
	'grouppage-rollbacker' => '{{ns:project}}:Tillbakarullare',
	'group-transwiki' => 'Transwiki-importörer',
	'group-transwiki-member' => '{{GENDER:$1|transwiki-importör}}',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki-importörer',
	'group-trusted' => 'Betrodda användare',
	'group-trusted-member' => '{{GENDER:$1|betrodd användare}}',
	'grouppage-trusted' => '{{ns:project}}:Betrodda användare',
	'group-uploader' => 'Uppladdare',
	'group-uploader-member' => 'uppladdare', # Fuzzy
	'grouppage-uploader' => '{{ns:project}}:Uppladdare',
	'group-Global_bot' => 'Globala robotar',
	'group-Global_bot-member' => '{{GENDER:$1|global robot}}',
	'group-Global_rollback' => 'Globala tillbakarullare',
	'group-Global_rollback-member' => '{{GENDER:$1|global tillbakarullare}}',
	'grouppage-Global_rollback' => 'm:Global rollback/nb',
	'group-Global_sysops' => 'Globala administratörer',
	'group-Global_sysops-member' => '{{GENDER:$1|global administratör}}',
	'group-Ombudsmen' => 'Ombudsmän',
	'group-Ombudsmen-member' => '{{GENDER:$1|ombudsman}}',
	'group-Staff' => 'Personal',
	'group-Staff-member' => '{{GENDER:$1|personal}}',
	'group-editinterface' => 'Gränssnitts-redigeringar',
	'group-editinterface-member' => '{{GENDER:$1|gränssnittsredigerare}}',
	'group-steward' => 'Stewarder',
	'group-steward-member' => '{{GENDER:$1|steward}}',
	'grouppage-steward' => 'm:Stewards/nb',
	'group-sysadmin' => 'Systemadministratörer',
	'group-sysadmin-member' => '{{GENDER:$1|systemadministratör}}',
	'group-translationadmin' => 'Översättningsadministratörer',
	'group-translationadmin-member' => '{{GENDER:$1|översättningsadministratör}}',
	'grouppage-translationadmin' => '{{ns:project}}:Översättningsadministratörer',
	'group-centralnoticeadmin' => 'CentralNotice-administratörer',
	'group-centralnoticeadmin-member' => '{{GENDER:$1|CentralNotice-administratör}}',
	'grouppage-centralnoticeadmin' => '{{ns:project}}:CentralNotice-administratör',
	'group-coder' => 'Kodare',
	'group-coder-member' => '{{GENDER:$1|kodare}}',
	'group-inactive' => 'Inaktiva användare',
	'group-inactive-member' => '{{GENDER:$1|inaktiv användare}}',
	'grouppage-inactive' => '{{ns:project}}:Inaktiva användare',
	'wikimedia-copyright' => 'Text är tillgänglig under <a href="//creativecommons.org/licenses/by-sa/3.0/deed.sv">Creative Commons Erkännande-Dela Lika-licens</a>; ytterligare villkor kan gälla. Se <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Villkor</a> för detaljer.',
	'wikimedia-copyrightwarning' => 'Genom att klicka på knappen "{{int:savearticle}}" accepterar du [//wikimediafoundation.org/wiki/Terms_of_Use användarvillkoren] och samtycker oåterkalleligen till att släppa ditt bidrag fritt enligt licenserna [//creativecommons.org/licenses/by-sa/3.0/deed.sv CC-BY-SA-3.0] och [http://www.gnu.org/copyleft/fdl.html GFDL].
Du accepterar att en hyperlänk eller URL utgör tillräcklig tillskrivning i enlighet med Creative Commons-licensen.',
	'wikibase-sitelinks-wikivoyage' => 'Wikivoyage-sidor som är länkade till det här objektet',
	'cant-delete-main-page' => 'Du kan inte radera eller flytta huvudsidan.',
	'upload-more-photos-of-this-monument' => 'Ladda upp fler bilder på detta monument',
	'extdist-branch-REL1_21' => '1.21 (senaste stabila MediaWiki)',
	'createacct-captcha-help-url' => '{{ns:Project}}:Begär ett konto',
	'createacct-imgcaptcha-help' => 'Kan du inte se bilden? [[{{MediaWiki:createacct-captcha-help-url}}|Begär ett konto]]',
);

/** Swahili (Kiswahili)
 * @author Kwisha
 * @author Lloffiwr
 * @author Malangali
 * @author לערי ריינהארט
 */
$messages['sw'] = array(
	'wikimediamessages-desc' => 'Jumbe maalum za Wikimedia',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=sw',
	'sitesupport' => 'Michango',
	'tooltip-n-sitesupport' => 'Tuunge mkono',
	'nstab-institution' => 'Taasisi',
	'group-OTRS-member' => 'Wanachama wa OTRS',
	'group-accountcreator' => 'Wanzilishaji wa akaunti',
	'group-accountcreator-member' => 'mwanzilishaji wa akaunti', # Fuzzy
	'grouppage-accountcreator' => '{{ns:project}}:Wanzilishaji wa akaunti',
	'group-confirmed' => 'Watumiaji waliothibitishwa',
	'group-confirmed-member' => 'mtumiaji aliyethibitishwa', # Fuzzy
	'grouppage-confirmed' => '{{ns:project}}:Watumiaji waliothibitishwa',
	'group-editprotected' => 'Wahariri wa kurasa zilizolindwa',
	'group-flood' => 'Watumiaji wa boti',
	'group-import' => 'Waingizaji',
	'group-import-member' => 'mwingizaji', # Fuzzy
	'grouppage-import' => '{{ns:project}}:Waingizaji',
	'group-interface_editor' => 'Wahariri wa kusano',
	'group-interface_editor-member' => '{{GENDER:$1|mhariri wa kusano}}',
	'grouppage-interface_editor' => '{{ns:project}}:Wahariri wa kusano',
	'group-researcher' => 'Watafiti',
	'group-transwiki' => 'Waingizaji kati za wiki',
	'group-transwiki-member' => 'mwingizaji kati za wiki', # Fuzzy
	'grouppage-transwiki' => '{{ns:project}}:Waingizaji kati za wiki',
	'group-trusted' => 'Watumiaji walioaminika',
	'group-Staff' => 'Wafanyikazi',
	'group-editinterface' => 'Wahariri wa kusano',
	'group-editinterface-member' => '{{GENDER:$1|mhariri wa kusano}}',
	'group-steward' => 'Wakadamu',
	'group-steward-member' => 'mkadamu', # Fuzzy
	'group-sysadmin' => 'Wasimamizi wa mfumoi',
	'group-sysadmin-member' => '{{GENDER:$1|msimamizi wa mfumo}}',
	'group-translationadmin' => 'Wasimamizi wa tafsiri',
	'group-translationadmin-member' => '{{GENDER:$1|msimamizi wa tafsiri}}',
	'group-inactive' => 'Watumiaji waliotulia',
	'group-inactive-member' => 'mtumiaji aliyetulia', # Fuzzy
	'grouppage-inactive' => '{{ns:project}}:Watumiaji waliotulia',
	'wikimedia-copyright' => 'Maandishi yanapatikana chini ya leseni ya <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike License</a>; matakwa mengine yanaweza kutakiwa.
Tazama maelezo zaidi ya <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Matakwa ya Utumiaji</a>.',
	'wikimedia-copyrightwarning' => 'Unapohifadhi maandishi yako, unakubali (kwa jinsi isiotenguka) mchango wako utolewe chini ya leseni ya [//creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] pamoja na [//www.gnu.org/copyleft/fdl.html GFDL].
Unakubali utambuliwe wakati maandishi haya yatumika na wengine, angalau kwa nia ya kiungo (hyperlink) au URL kwenye ukurasa uliouchangia.
Tazama maelezo zaidi ya [//wikimediafoundation.org/wiki/Terms_of_Use Matakwa ya Utumiaji].', # Fuzzy
);

/** Säggssch (Säggssch)
 * @author Thogo
 */
$messages['sxu'] = array(
	'sitesupport' => 'Schbändn',
	'group-steward' => 'Schdewards',
	'group-steward-member' => 'Schdeward', # Fuzzy
	'grouppage-steward' => '{{ns:project}}:Schdewards',
);

/** Silesian (ślůnski)
 * @author Herr Kriss
 * @author Lajsikonik
 */
$messages['szl'] = array(
	'wikimediamessages-desc' => 'Kůmůńikaty ůńikalne lů projektůw Wikimedia',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=szl',
	'sitesupport' => 'Śćepa',
	'tooltip-n-sitesupport' => 'Wspůmůž nas',
	'group-accountcreator' => 'Tworzůncy kůnta',
	'group-accountcreator-member' => 'twůrca kůnt', # Fuzzy
	'grouppage-accountcreator' => '{{ns:project}}:Twůrcy kůnt',
	'group-autopatrolled-member' => 'patrolujůncy autůmatyczńy', # Fuzzy
	'grouppage-autopatrolled' => '{{ns:project}}:Patrolujůncy autůmatyczńy',
	'group-founder' => 'Zołożyćele',
	'group-founder-member' => 'zołożyćel', # Fuzzy
	'grouppage-founder' => '{{ns:project}}:Zołożyćele',
	'group-import' => 'Importery',
	'group-import-member' => 'importer', # Fuzzy
	'grouppage-import' => '{{ns:project}}:Importery',
	'group-ipblock-exempt' => 'Uprowńyńi do logowańo śe s zawartych adresůw IP',
	'group-ipblock-exempt-member' => 'uprowńůny do logowańo śe s zawartego adresa IP', # Fuzzy
	'grouppage-ipblock-exempt' => '{{ns:project}}:Uprowńyńi do logowańo śe s zawartych adresůw IP',
	'group-rollbacker' => 'Uprowńyńi do wycofywańo sprowjyń',
	'group-rollbacker-member' => 'uprowńůny do wycofywańo sprowjyń', # Fuzzy
	'grouppage-rollbacker' => '{{ns:project}}:Uprowńyńi do wycofywańo sprowjyń',
	'group-transwiki' => 'Importery transwiki',
	'group-transwiki-member' => 'importer transwiki', # Fuzzy
	'grouppage-transwiki' => '{{ns:project}}:Importery transwiki',
	'group-Global_bot' => 'Boty globalne',
	'group-Global_bot-member' => 'bot globalny', # Fuzzy
	'group-Global_rollback' => 'Globalńy uprowńyńi do wycofywańo sprowjyń',
	'group-Global_rollback-member' => 'globalńy uprowńony do wycofywańo sprowjyń', # Fuzzy
	'group-Ombudsmen' => 'Rzeczńiki prow',
	'group-Ombudsmen-member' => 'rzeczńik prow', # Fuzzy
	'group-steward' => 'Stewardy',
	'group-steward-member' => 'steward', # Fuzzy
	'group-sysadmin' => 'Admińistratory systymu',
	'group-sysadmin-member' => 'admińistrator systyma', # Fuzzy
	'group-coder' => 'Programisty',
	'group-coder-member' => 'programista', # Fuzzy
	'wikimedia-copyright' => 'Tekst je udostympńany na <a href="//creativecommons.org/licenses/by-sa/3.0/deed.pl">licencyji Creative Commons: uznańe autorstwa, na jednakich warunkach</a>, ze możebnośćům uobowjůnzywańo ekstra uograńiczyń.
Uobejzdrzij blank dokłodne informacyje uo <a href="//wikimediafoundation.org/wiki/Terms_of_Use">warunkach korzystańo</a>.',
	'wikimedia-copyrightwarning' => 'Bez spamjyntańe půmjyńań dowosz ńyodwołalno zgoda na udostympńańe Twojygo wkłodu na licencyjach [//creativecommons.org/licenses/by-sa/3.0/ Creative Commons: uznańe autorstwa, na jednakich warůnkach, wersyja licencyji 3.0] a tyż na licencyji [//www.gnu.org/copyleft/fdl.html GFDL]. Wyrażosz zgoda na wykorzystańe pod warunkem co najmnńyj podańo necowygo uodwołańo abo adresa URL do zajty na keryj powstoła treść. Uobejzdrzij blank dokładne informacyje uo [//wikimediafoundation.org/wiki/Terms_of_Use warunkach korzystańo].', # Fuzzy
);

/** Tamil (தமிழ்)
 * @author Aswn
 * @author Karthi.dr
 * @author Mayooranathan
 * @author Shanmugamp7
 * @author Sodabottle
 * @author TRYPPN
 * @author Trengarasu
 */
$messages['ta'] = array(
	'wikimediamessages-desc' => 'விக்கிமீடியாவிற்கான தகவல்கள்',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=ta',
	'sitesupport' => 'நன்கொடை',
	'tooltip-n-sitesupport' => 'நன்கொடைகளை வழங்குங்கள்',
	'specialpages-group-contribution' => 'பங்களிப்பு/நிதி திரட்டல்',
	'nstab-creator' => 'உருவாக்குநர்',
	'nstab-institution' => 'நிறுவனம்',
	'nstab-sequence' => 'வரிசை',
	'nstab-timedtext' => 'நேரமிட்ட உரை',
	'group-Ex_Administrator' => 'முன்னால் நிர்வாகிகள்',
	'group-Ex_Administrator-member' => '{{GENDER:$1|முன்னாள் நிர்வாகி}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:முன்னாள் நிர்வாகிகள்',
	'group-Ex_Bureaucrat' => 'முன்னாள் அதிகாரிகள்',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|முன்னாள் அதிகாரிகள்}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:முன்னாள் அதிகாரிகள்',
	'group-Image-reviewer' => 'பட பரிசீலனையாளர்கள்',
	'group-Image-reviewer-member' => '{{GENDER:$1|பட பரிசீலனையாளர்}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:பட பரிசீலனையாளர்கள்',
	'group-OTRS-member' => 'OTRS உறுப்பினர்கள்',
	'group-OTRS-member-member' => '{{GENDER:$1|OTRS உறுப்பினர்}}',
	'grouppage-OTRS-member' => '{{ns:project}}:OTRS உறுப்பினர்கள்',
	'group-abusefilter' => 'முறைகேடு வடிகட்டி தொகுப்பாளர்கள்',
	'group-abusefilter-member' => '{{GENDER:$1|முறைகேடு வடிகட்டி தொகுப்பாளர்}}',
	'grouppage-abusefilter' => '{{ns:project}}:முறைகேடு வடிகட்டி தொகுப்பாளர்கள்',
	'group-accountcreator' => 'பயனர் கணக்கு உருவாக்குவோர்',
	'group-accountcreator-member' => '{{GENDER:$1|கணக்கை உருவாக்குவோர்}}',
	'grouppage-accountcreator' => '{{ns:project}}:கணக்கு உருவாக்குவோர்கள்',
	'group-arbcom' => 'நடுவர் குழு உறுப்பினர்கள்',
	'group-arbcom-member' => '{{GENDER:$1|நடுவர் குழு உறுப்பினர்}}',
	'grouppage-arbcom' => '{{ns:project}}:நடுவர் குழு உறுப்பினர்கள்',
	'group-autopatrolled' => 'தானியக்கமாக ரோந்திடும் பயனர்கள்',
	'group-autopatrolled-member' => '{{GENDER:$1|தானியக்கமாக ரோந்திடும் பயனர்}}',
	'grouppage-autopatrolled' => '{{ns:project}}:தானியக்கமாக ரோந்திடும் பயனர்கள்',
	'group-autoreviewer' => 'தானியக்கமாக சோதிக்கும் பயனர்கள்',
	'group-autoreviewer-member' => '{{GENDER:$1|தானியக்கமாக சோதிக்கும் பயனர்}}',
	'grouppage-autoreviewer' => '{{ns:project}}:தானியக்கமாக சோதிக்கும் பயனர்கள்',
	'group-bigexport' => 'பெரிய ஏற்றுமதியாளர்கள்',
	'group-bigexport-member' => '{{GENDER:$1|பெரிய ஏற்றுமதியாளர்}}',
	'grouppage-bigexport' => '{{ns:project}}:பெரிய ஏற்றுமதியாளர்கள்',
	'group-botadmin' => 'நிர்வாகி அனுமதியுடன் கூடிய தானியங்கிகள்',
	'group-botadmin-member' => '{{GENDER:$1|நிர்வாகி அனுமதியுடன் கூடிய தானியங்கி}}',
	'grouppage-botadmin' => '{{ns:project}}:நிர்வாகி அனுமதியுடன் கூடிய தானியங்கிகள்',
	'group-confirmed' => 'உறுதிசெய்யப்பட்ட பயனர்கள்',
	'group-confirmed-member' => '{{GENDER:$1|உறுதிசெய்யப்பட்ட பயனர்}}',
	'grouppage-confirmed' => '{{ns:project}}:உறுதிசெய்யப்பட்ட பயனர்கள்',
	'group-editprotected' => 'காக்கப்பட்ட பக்கத்தை திருத்துபவர்கள்',
	'group-editprotected-member' => '{{GENDER:$1|காக்கப்பட்ட பக்க தொகுப்பாளர்}}',
	'grouppage-editprotected' => '{{ns:project}}:காக்கப்பட்ட பக்க தொகுப்பாளர்கள்',
	'group-filemover' => 'கோப்பை நகர்த்துபவர்கள்',
	'group-filemover-member' => '{{GENDER:$1|கோப்பை நகர்த்துபவர்}}',
	'grouppage-filemover' => '{{ns:project}}:  கோப்பு நகர்த்துபவர்கள்',
	'group-flood' => 'தானியங்கி பயனர்கள்',
	'group-flood-member' => '{{GENDER:$1|தானியங்கி பயனர்}}',
	'grouppage-flood' => '{{ns:project}}:தானியங்கி பயனர்கள்',
	'group-founder' => 'நிறுவனர்கள்',
	'group-founder-member' => '{{GENDER:$1|நிறுவனர்}}',
	'grouppage-founder' => '{{ns:project}}:நிறுவனர்கள்',
	'group-import' => 'இறக்குமதியாளர்கள்',
	'group-import-member' => '{{GENDER:$1|இறக்குமதியாளர்}}',
	'grouppage-import' => '{{ns:project}}:இறக்குமதியாளர்கள்',
	'group-interface_editor' => 'இடைமுக தொகுப்பாளர்கள்',
	'group-interface_editor-member' => '{{GENDER:$1|இடைமுக தொகுப்பாளர்}}',
	'grouppage-interface_editor' => '{{ns:project}}:இடைமுக தொகுப்பாளர்கள்',
	'group-ipblock-exempt' => 'IP தடை விதிவிலக்குகள்',
	'group-ipblock-exempt-member' => '{{GENDER:$1|ஐபி தடை விதிவிலக்கு}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}: ஐபி தடை விலக்கு',
	'group-patroller' => 'ரோந்திடுபவர்கள்',
	'group-patroller-member' => '{{GENDER:$1|ரோந்திடுபவர்}}',
	'grouppage-patroller' => '{{ns:project}}:ரோந்திடுபவர்கள்',
	'group-researcher' => 'ஆய்வாளர்கள்',
	'group-researcher-member' => '{{GENDER:$1|ஆய்வாளர்}}',
	'grouppage-researcher' => '{{ns:project}}:ஆய்வாளர்கள்',
	'group-rollbacker' => 'முன்னிலையாக்கர்கள்',
	'group-rollbacker-member' => '{{GENDER:$1|முன்னிலையாக்கர்}}',
	'grouppage-rollbacker' => '{{ns:project}}:முன்னிலையாக்கர்கள்',
	'group-transwiki' => 'விக்கியிடை இறக்குமதியாளர்கள்',
	'group-transwiki-member' => '{{GENDER:$1|விக்கியிடை இறக்குமதியாளர்}}',
	'grouppage-transwiki' => '{{ns:project}}:விக்கியிடை இறக்குமதியாளர்கள்',
	'group-trusted' => 'நம்பத்தகுந்த பயனர்கள்',
	'group-trusted-member' => '{{GENDER:$1|நம்பத்தகுந்த பயனர்}}',
	'grouppage-trusted' => '{{ns:project}}:நம்பத்தகுந்த பயனர்கள்',
	'group-Global_bot' => 'உலகளவிய தானியங்கிகள்',
	'group-Global_bot-member' => '{{GENDER:$1|உலகளவிய தானியங்கி}}',
	'group-Global_rollback' => 'உலகளவிய முன்னிலையாக்கர்கள்',
	'group-Global_rollback-member' => '{{GENDER:$1|உலகளவிய முன்னிலையாக்கர்}}',
	'group-Global_sysops' => 'உலகளவிய நிர்வாகிகள்',
	'group-Global_sysops-member' => '{{GENDER:$1|உலகளவிய நிர்வாகி}}',
	'group-Staff' => 'பணியாளர்கள்',
	'group-Staff-member' => 'பணியாளர்',
	'group-editinterface' => 'இடைமுக தொகுப்பாளர்கள்',
	'group-editinterface-member' => '{{GENDER:$1|இடைமுக தொகுப்பாளர்}}',
	'group-steward' => 'மேலாளர்கள்',
	'group-steward-member' => '{{GENDER:$1|மேலாளர்}}',
	'group-sysadmin' => 'அமைப்பின் நிர்வாகிகள்',
	'group-sysadmin-member' => '{{GENDER:$1|அமைப்பு நிர்வாகி}}',
	'group-translationadmin' => 'மொழிபெயர்ப்பு நிருவாகிகள்',
	'group-translationadmin-member' => '{{GENDER:$1|மொழிபெயர்ப்பு நிர்வாகி}}',
	'grouppage-translationadmin' => '{{ns:project}}:மொழிபெயர்ப்பு நிர்வாகிகள்',
	'group-coder' => 'குறியீட்டாளர்கள்',
	'group-coder-member' => '{{GENDER:$1|குறியீட்டாளர்}}',
	'group-inactive' => 'பங்களிக்காத பயனர்கள்',
	'group-inactive-member' => '{{GENDER:$1|பங்களிக்காத பயனர்}}',
	'grouppage-inactive' => '{{ns:project}}:பங்களிக்காத பயனர்கள்',
	'wikimedia-copyrightwarning' => 'இந்த ஆக்கத்தை சேமிப்பதன் மூலம் நீங்கள் [//creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] மற்றும் [//www.gnu.org/copyleft/fdl.html GFDL] பதிப்புரிமை விதிகளுக்கு உட்பட்டு உங்கள் பங்களிப்புகளை பிறருடன் பகிர்ந்து கொள்ள ஒப்புதல் அளிக்கிறீர்கள்.

இந்த ஆக்கத்தினை மறுபயன்பாடு செய்பவர்கள், குறைந்த பட்சம் இந்த பக்கத்துக்கு ஒரு மீத்தொடுப்பு தருவதன் மூலம் பங்களிப்பு உங்களுடையது என்று அறிவித்துவிட்டு, இதனை பயன்படுத்தவும் ஒப்புதல் அளிக்கிறீர்கள்.

விவரங்களுக்கு, [//wikimediafoundation.org/wiki/Terms_of_Use பயன்பாட்டு விதிமுறைகளைப்] பார்க்கவும்.',
	'cant-delete-main-page' => 'முதன்மைப் பக்கத்தை உங்களால் அழிக்கவோ நகர்த்தவோ இயலாது.',
);

/** Telugu (తెలుగు)
 * @author Chaduvari
 * @author Kiranmayee
 * @author Mpradeep
 * @author RanjithSutari
 * @author Ravichandra
 * @author Suryavnk
 * @author Veeven
 */
$messages['te'] = array(
	'wikimediamessages-desc' => 'వికీమీడియా సంబంధిత సందేశాలు',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=te',
	'sitesupport' => 'విరాళములు',
	'tooltip-n-sitesupport' => 'మాకు తోడ్పడండి',
	'specialpages-group-contribution' => 'విరాళాలు/నిధుల సేకరణ',
	'nstab-institution' => 'సంస్థ',
	'nstab-sequence' => 'వరుస క్రమం',
	'nstab-timedtext' => 'సమయానుకూల సందేశం',
	'grouppage-Ex_Administrator' => '{{ns:project}}: మాజీ అధీకృత అధికారులు',
	'group-Ex_Bureaucrat' => 'మాజీ ప్రభుత్వ అధికారులు',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:మాజీ ప్రభుత్వ అధికారులు',
	'group-Image-reviewer' => 'చిత్రం పునర్విఘర్శకులు',
	'group-Image-reviewer-member' => 'చిత్ర విమర్శకుడు', # Fuzzy
	'grouppage-Image-reviewer' => '{{ns:project}}:చిత్రం పునర్విఘర్శకులు',
	'group-OTRS-member' => 'OTRS సబ్యులు',
	'group-OTRS-member-member' => 'ఓటిఅరఎస్ సభ్యుడు', # Fuzzy
	'grouppage-OTRS-member' => '{{ns:project}}:ఓటిఅరఎస్ సభ్యులు',
	'group-abusefilter' => 'దుర్వినియోగ వడపోతన కూర్పరులు',
	'group-abusefilter-member' => 'దుర్వినియోగ వడపోతల కూర్పరి', # Fuzzy
	'grouppage-abusefilter' => '{{ns:project}}:దుర్వినియోగ వడపోతల కూర్పరులు',
	'group-accountcreator' => 'ఖాతా తయారీదార్లు',
	'group-accountcreator-member' => 'ఖాతా సృష్టికర్త', # Fuzzy
	'grouppage-accountcreator' => '{{ns:project}}:ఖాతా సృష్టికర్తలు',
	'group-arbcom' => 'మధ్యస్థ సంగము సబ్యులు',
	'group-arbcom-member' => 'మధ్యవర్తిత్వ సంఘ సభ్యులు', # Fuzzy
	'grouppage-arbcom' => '{{ns:project}}: మధ్యవర్తిత్వ సంఘ సభ్యులు',
	'group-autopatrolled' => 'స్వీయ-గస్తితిరుగేవారు',
	'group-autopatrolled-member' => 'ఆటోపాట్రోలర్', # Fuzzy
	'grouppage-autopatrolled' => '{{ns:project}}: స్వీయగస్తితిరుగువారు',
	'group-autoreviewer' => 'ఆటోరివ్యూవర్స్',
	'group-autoreviewer-member' => 'ఆటోరివ్యూవర్', # Fuzzy
	'grouppage-autoreviewer' => '{{ns:project}}: ఆటోరివ్యూవర్స్',
	'group-bigexport' => 'పెద్ద ఎగుమతిదారులు',
	'group-bigexport-member' => 'పెద్ద ఎగుమతిదారుడు', # Fuzzy
	'grouppage-bigexport' => '{{ns:project}}:పెద్ద ఎగుమతిదారులు',
	'group-botadmin' => 'అధీకృత హక్కులు కలిగి ఉన్న యంత్ర భాష',
	'group-botadmin-member' => '{{GENDER:$1|అధీకృత హక్కులు కలిగి ఉన్న యంత్ర భాష}}',
	'grouppage-botadmin' => '{{ns:project}}:అధీకృత హక్కులు కలిగి ఉన్న యంత్ర భాష',
	'group-confirmed' => 'నిర్ధారిత వాడుకరులు',
	'group-confirmed-member' => '{{GENDER:$1|నిర్ధారిత వాడుకరి}}',
	'grouppage-confirmed' => '{{ns:project}}:నిర్ధారిత వాడుకరులు',
	'group-editprotected' => 'రక్షించబడిన పుట సంపాదకులు',
	'group-editprotected-member' => 'సంరక్షిత పుట కూర్పరి', # Fuzzy
	'grouppage-editprotected' => '{{ns:project}}: రక్షించబడిన పేజి సంపాదకులు',
	'group-eliminator' => 'నిర్మూలించేవారు',
	'grouppage-eliminator' => '{{ns:project}}:నిర్మూలించేవారు',
	'group-filemover' => 'ఫైల్ జరుపువారు',
	'group-filemover-member' => 'ఫైల్ జరుపువారు', # Fuzzy
	'grouppage-filemover' => '{{ns:project}}:ఫైల్ జరిపెటివారు',
	'group-flood' => 'బాటు వాడుకరులు',
	'group-flood-member' => ' యంత్రభాష వినియోగదారులు', # Fuzzy
	'grouppage-flood' => '{{ns:project}}:బాటు వాడుకరులు',
	'group-founder' => 'వ్యవస్థాపకులు',
	'group-founder-member' => 'వ్యవస్థాపకుడు', # Fuzzy
	'grouppage-founder' => '{{ns:project}}:వ్యవస్థాపకులు',
	'group-import' => 'దిగుమతిదార్లు',
	'group-import-member' => 'దిగుమతిదారు', # Fuzzy
	'grouppage-import' => '{{ns:project}}:దిగుమతిదార్లు',
	'group-interface_editor' => 'ఇంటర్ఫేసు సంపాదకులు',
	'group-interface_editor-member' => 'అంతర్ముఖి లేఖిని', # Fuzzy
	'grouppage-interface_editor' => '{{ns:project}}:ఇంటర్ఫేసు సంపాదకలు',
	'group-ipblock-exempt' => 'ఐపీ నిరోధపు మినహాయింపులు',
	'group-ipblock-exempt-member' => 'ఐపీ నిరోధపు మినహాయింపు', # Fuzzy
	'grouppage-ipblock-exempt' => '{{ns:project}}:ఐపీ నిరోధపు మినహాయింపు',
	'group-patroller' => 'పర్యవేక్షకులు',
	'group-patroller-member' => '{{GENDER:$1|పర్యవేక్షకుడు}}',
	'group-researcher' => 'పరిశోధకులు',
	'group-researcher-member' => '{{GENDER:$1|పరిశోధకుడు|పరిశోధకురాలు}}',
	'grouppage-researcher' => '{{ns:project}}:పరిశోధకులు',
	'group-rollbacker' => 'రద్దుచేసినవారు',
	'group-rollbacker-member' => '{{GENDER:$1|రద్దుచేయువారు}}',
	'grouppage-rollbacker' => '{{ns:project}}:రద్దుచేసినవారు',
	'group-transwiki' => 'ట్రాన్స్ వికీ దిగుమతిదారులు',
	'group-transwiki-member' => 'ట్రాన్స్ వికీ దిగుమతిదారుడు', # Fuzzy
	'grouppage-transwiki' => '{{ns:project}}:ట్రాన్స్ వికీ దిగుమతిదార్లు',
	'group-trusted' => 'విశ్వసనీయ వాడుకరులు',
	'group-trusted-member' => '{{GENDER:$1|విశ్వసనీయ వినియోగదారుడు}}',
	'grouppage-trusted' => '{{ns:project}}:విశ్వసనీయ వాడుకరులు',
	'group-Global_bot' => 'సార్వత్రిక బాట్లు',
	'group-Global_bot-member' => '{{GENDER:$1|విశ్వజనీన యంత్ర భాష}}',
	'group-Global_rollback' => 'విశ్వ వెనకకి మళ్లింపుదారులు',
	'group-Global_rollback-member' => 'విశ్వ వెనకకి మళ్లింపుదారు', # Fuzzy
	'group-Global_sysops' => 'సార్వత్రిక నిర్వాహకులు',
	'group-Global_sysops-member' => '{{GENDER:$1|సార్వత్రిక నిర్వాహకుడు|సార్వత్రిక నిర్వాహకురాలు}}',
	'group-Ombudsmen' => 'అంబుడ్స్మెన్',
	'group-Ombudsmen-member' => 'అంబుడ్స్మన్', # Fuzzy
	'group-Staff' => 'సిబ్బంది',
	'group-Staff-member' => 'సిబ్బంది',
	'group-editinterface' => 'ఇంటర్ఫేస్ ఎడిటర్లు',
	'group-editinterface-member' => 'ఇంటర్ఫేస్ ఎడిటరు', # Fuzzy
	'group-steward' => 'స్టీవార్డులు',
	'group-steward-member' => 'స్టీవార్డు', # Fuzzy
	'group-sysadmin' => 'వ్యవస్థ నిర్వాహకులు',
	'group-sysadmin-member' => '{{GENDER:$1|వ్యవస్థ నిర్వహణాధికారి}}',
	'group-translationadmin' => 'అనువాద నిర్వాహకులు',
	'group-translationadmin-member' => '{{GENDER:$1|అనువాద నిర్వాహకుడు|అనువాద నిర్వాహకురాలు}}',
	'grouppage-translationadmin' => '{{ns:project}}:అనువాద నిర్వాహకులు',
	'group-coder' => 'కోడర్లు',
	'group-coder-member' => '{{GENDER:$1|సంకేతాలు రాసే వారు}}',
	'group-inactive' => 'అచేతన వాడుకరులు',
	'group-inactive-member' => '{{GENDER:$1|అచేతన వాడుకరి}}',
	'grouppage-inactive' => '{{ns:project}}:అచేతన వాడుకరులు',
	'wikimedia-copyright' => 'పాఠ్యం <a href="//creativecommons.org/licenses/by-sa/3.0/">క్రియేటివ్ కామన్స్ అట్రిబ్యూషన్/షేర్-అలైక్ లైసెన్సు</a> క్రింద లభ్యం;
అదనపు షరతులు వర్తించవచ్చు.
మరిన్ని వివరాలకు <a href="//wikimediafoundation.org/wiki/Terms_of_Use">వాడుక నియమాల</a>ను చూడండి.',
	'wikimedia-copyrightwarning' => 'దీన్ని భద్రపరచడం ద్వారా, మీ కృతిని [//creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] మరియు [//www.gnu.org/copyleft/fdl.html GFDL] లకు లోబడి విడుదల చేసేందుకు మీరు సమ్మతిస్తున్నారు. ఇది వెనక్కి తిరిగి తీసుకోలేని అనుమతి అని మీరు ఎరుగుదురు.

కనీస స్థాయిలో మీరు పనిచేస్తున్న పేజీకి లింకు లేదా URL ఇవ్వడం ద్వారా దీన్ని వాడుకునేవారు మీకు శ్రేయస్సు నాపాదిస్తారు. ఇందుకు మీరు సమ్మతిస్తున్నారు.

వివరాల కోసం [//wikimediafoundation.org/wiki/Terms_of_Use వినియోగ నియమాలు] చూడండి.', # Fuzzy
	'cant-delete-main-page' => 'మీరు ప్రధాన పేజీని కదిలించలేరు, తొలగించలేరు',
);

/** Test (site admin only) (Test (site admin only)) */
$messages['test'] = array(
	'sitesupport-url' => 'x',
	'sitesupport' => 'x',
	'tooltip-n-sitesupport' => 'x',
);

/** Tetum (tetun)
 * @author MF-Warburg
 */
$messages['tet'] = array(
	'sitesupport' => 'Fó donativu ida',
	'tooltip-n-sitesupport' => 'Tulun ami',
	'group-steward' => 'Steward sira',
	'group-steward-member' => '{{GENDER:$1|Steward}}',
	'grouppage-steward' => '{{ns:project}}:Steward sira',
);

/** Tajik (Cyrillic script) (тоҷикӣ)
 * @author Ibrahim
 * @author לערי ריינהארט
 */
$messages['tg-cyrl'] = array(
	'wikimediamessages-desc' => 'Пайғомҳои махсуси Викимедиа',
	'sitesupport' => 'Кӯмаки молӣ',
	'tooltip-n-sitesupport' => 'Моро дастгири намоед',
	'group-accountcreator' => 'Эҷодгарони ҳисоб',
	'group-accountcreator-member' => 'эҷодкунандаи ҳисоб', # Fuzzy
	'grouppage-accountcreator' => '{{ns:project}}:Созандагони ҳисоби корбарӣ',
	'group-autopatrolled-member' => 'гаштзани худкор', # Fuzzy
	'grouppage-autopatrolled' => '{{ns:project}}:Гаштзанони худкор',
	'group-founder' => 'Бунёдгузорон',
	'group-founder-member' => 'асосгузор', # Fuzzy
	'grouppage-founder' => '{{ns:project}}:Асосгузорон',
	'group-import' => 'Воридкунандагон',
	'group-import-member' => 'воридкунанда', # Fuzzy
	'grouppage-import' => '{{ns:project}}:Воридкунандагон',
	'group-ipblock-exempt' => 'Истиснои қатъи дастрасии нишонаи IP',
	'group-ipblock-exempt-member' => 'Истиснои қатъи дастрасии нишонаи интернетӣ', # Fuzzy
	'grouppage-ipblock-exempt' => '{{ns:project}}:Истиснои қатъи дастрасии нишонаи IP',
	'group-rollbacker' => 'Вогардоникунандагон',
	'group-rollbacker-member' => 'вогардоникунанда', # Fuzzy
	'grouppage-rollbacker' => '{{ns:project}}:Вогардоникунандагон',
	'group-transwiki' => 'Воридкунандагони трансвики',
	'group-transwiki-member' => 'воридкунандаи трансвики', # Fuzzy
	'grouppage-transwiki' => '{{ns:project}}:Воридкунандагони трансвики',
	'group-Global_bot' => 'Ботҳои саросарӣ',
	'group-Global_bot-member' => 'боти саросарӣ', # Fuzzy
	'group-Global_rollback' => 'Вогардоникунандагони саросарӣ',
	'group-Global_rollback-member' => 'вогардоникунандаи саросарӣ', # Fuzzy
	'group-Ombudsmen' => 'Додоварон',
	'group-Ombudsmen-member' => 'додовар', # Fuzzy
	'group-steward' => 'Википедон',
	'group-steward-member' => 'википед', # Fuzzy
	'group-sysadmin' => 'Мудирони систем',
	'group-sysadmin-member' => 'мудири систем', # Fuzzy
	'group-coder' => 'барноманависон',
	'group-coder-member' => 'барноманавис', # Fuzzy
	'group-inactive' => 'Корбарони ғайрифаъол',
	'group-inactive-member' => 'корбарони ғайрифаъол', # Fuzzy
);

/** Tajik (Latin script) (tojikī)
 * @author Liangent
 */
$messages['tg-latn'] = array(
	'wikimediamessages-desc' => 'Pajƣomhoi maxsusi Vikimedia',
	'sitesupport' => 'Kūmaki molī',
	'tooltip-n-sitesupport' => 'Moro dastgiri namoed',
	'group-accountcreator' => 'Eçodgaroni hisob',
	'group-accountcreator-member' => 'eçodkunandai hisob', # Fuzzy
	'grouppage-accountcreator' => '{{ns:project}}:Sozandagoni hisobi korbarī',
	'group-autopatrolled-member' => 'gaştzani xudkor', # Fuzzy
	'grouppage-autopatrolled' => '{{ns:project}}:Gaştzanoni xudkor',
	'group-founder' => 'Bunjodguzoron',
	'group-founder-member' => 'asosguzor', # Fuzzy
	'grouppage-founder' => '{{ns:project}}:Asosguzoron',
	'group-import' => 'Voridkunandagon',
	'group-import-member' => 'voridkunanda', # Fuzzy
	'grouppage-import' => '{{ns:project}}:Voridkunandagon',
	'group-ipblock-exempt' => "Istisnoi qat'i dastrasiji nişonai IP",
	'group-ipblock-exempt-member' => "Istisnoi qat'i dastrasiji nişonai internetī", # Fuzzy
	'grouppage-ipblock-exempt' => "{{ns:project}}:Istisnoi qat'i dastrasiji nişonai IP",
	'group-rollbacker' => 'Vogardonikunandagon',
	'group-rollbacker-member' => 'vogardonikunanda', # Fuzzy
	'grouppage-rollbacker' => '{{ns:project}}:Vogardonikunandagon',
	'group-transwiki' => 'Voridkunandagoni transviki',
	'group-transwiki-member' => 'voridkunandai transviki', # Fuzzy
	'grouppage-transwiki' => '{{ns:project}}:Voridkunandagoni transviki',
	'group-Global_bot' => 'Bothoi sarosarī',
	'group-Global_bot-member' => 'boti sarosarī', # Fuzzy
	'group-Global_rollback' => 'Vogardonikunandagoni sarosarī',
	'group-Global_rollback-member' => 'vogardonikunandai sarosarī', # Fuzzy
	'group-Ombudsmen' => 'Dodovaron',
	'group-Ombudsmen-member' => 'dodovar', # Fuzzy
	'group-steward' => 'Vikipedon',
	'group-steward-member' => 'vikiped', # Fuzzy
	'group-sysadmin' => 'Mudironi sistem',
	'group-sysadmin-member' => 'mudiri sistem', # Fuzzy
	'group-coder' => 'barnomanavison',
	'group-coder-member' => 'barnomanavis', # Fuzzy
	'group-inactive' => "Korbaroni ƣajrifa'ol",
	'group-inactive-member' => "korbaroni ƣajrifa'ol", # Fuzzy
);

/** Thai (ไทย)
 * @author Horus
 * @author Korrawit
 * @author Manop
 * @author Mopza
 * @author Octahedron80
 * @author Passawuth
 * @author Woraponboonkerd
 */
$messages['th'] = array(
	'wikimediamessages-desc' => 'ข้อความเฉพาะของวิกิมีเดีย',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=th',
	'sitesupport' => 'สนับสนุน',
	'tooltip-n-sitesupport' => 'สนับสนุนเรา',
	'specialpages-group-contribution' => 'การบริจาค/ระดมทุน',
	'group-abusefilter' => 'บรรณาธิการกลั่นกรองการใช้ที่ไม่เหมาะสม',
	'grouppage-abusefilter' => '{{ns:project}}:บรรณาธิการกลั่นกรองการใช้ที่ไม่ถูกต้อง',
	'group-accountcreator' => 'ผู้สร้างบัญชีผู้ใช้',
	'group-accountcreator-member' => 'ผู้สร้างบัญชีผู้ใช้', # Fuzzy
	'grouppage-accountcreator' => '{{ns:project}}:ผู้สร้างบัญชีผู้ใช้',
	'group-autopatrolled' => 'ผู้ตรวจการอัตโนมัติ',
	'group-autopatrolled-member' => 'ผู้ตรวจการอัตโนมัติ', # Fuzzy
	'grouppage-autopatrolled' => '{{ns:project}}:ผู้ตรวจการอัตโนมัติ',
	'group-autoreviewer' => 'ผู้ตรวจสอบอัตโนมัติ',
	'group-autoreviewer-member' => 'ผู้ตรวจสอบอัตโนมัติ', # Fuzzy
	'grouppage-autoreviewer' => '{{ns:project}}:ผู้ตรวจสอบอัตโนมัติ',
	'group-confirmed' => 'ผู้ใช้ที่ยืนยันแล้ว',
	'group-confirmed-member' => 'ผู้ใช้ที่ยืนยันแล้ว', # Fuzzy
	'grouppage-confirmed' => '{{ns:project}}:ผู้ใช้ที่ยืนยันแล้ว',
	'group-flood' => 'ผู้ใช้ที่เป็นบอต',
	'group-flood-member' => 'ผู้ใช้ที่เป็นบอต', # Fuzzy
	'grouppage-flood' => '{{ns:project}}:ผู้ใช้ที่เป็นบอต',
	'group-founder' => 'ผู้ก่อตั้ง',
	'group-founder-member' => 'ผู้ก่อตั้ง', # Fuzzy
	'grouppage-founder' => '{{ns:project}}:ผู้ร่วมก่อตั้ง',
	'group-import' => 'ผู้นำเข้า',
	'group-import-member' => 'ผู้นำเข้า', # Fuzzy
	'grouppage-import' => '{{ns:project}}:ผู้นำเข้า',
	'group-ipblock-exempt' => 'การยกเว้นการระงับหมายเลขไอพี',
	'group-ipblock-exempt-member' => 'หมายเลขไอพีที่ยกเว้นจากการระงับ', # Fuzzy
	'grouppage-ipblock-exempt' => '{{ns:project}}:การยกเว้นการระงับหมายเลขไอพี',
	'group-patroller' => 'ผู้ตรวจการ',
	'group-patroller-member' => 'ผู้ตรวจการ', # Fuzzy
	'group-rollbacker' => 'ผู้ย้อนสถานะ',
	'group-rollbacker-member' => 'ผู้ย้อนสถานะ', # Fuzzy
	'grouppage-rollbacker' => '{{ns:project}}:ผู้ย้อนสถานะ',
	'group-transwiki' => 'ผู้นำเข้าข้ามวิกิ',
	'grouppage-transwiki' => '{{ns:project}}:ผู้นำเข้าข้ามวิกิ',
	'group-trusted' => 'ผู้ใช้ที่เชื่อถือได้',
	'group-trusted-member' => 'ผู้ใช้ที่เชื่อถือได้', # Fuzzy
	'grouppage-trusted' => '{{ns:project}}:ผู้ใช้ที่เชื่อถือได้',
	'group-Ombudsmen' => 'ผู้ตรวจการ',
	'group-Ombudsmen-member' => 'ผู้ตรวจการ', # Fuzzy
	'group-Staff' => 'ผู้แปล',
	'group-Staff-member' => 'ทีมงาน',
	'group-steward' => 'ผู้ดูแลโครงการ',
	'group-steward-member' => 'ผู้ดูแลโครงการ', # Fuzzy
	'group-sysadmin' => 'ผู้ดูแลระบบ',
	'group-sysadmin-member' => 'ผู้ดูแลระบบ', # Fuzzy
	'group-inactive' => 'ผู้ใช้ที่ใช้ไม่สม่ำเสมอ',
	'group-inactive-member' => 'ผู้ใช้ที่ใช้ไม่สม่ำเสมอ', # Fuzzy
	'grouppage-inactive' => '{{ns:project}}:ผู้ใช้ไม่ประจำ',
	'wikimedia-copyright' => 'ตัวอักษรนี้อยู่ภายใต้<a href="//creativecommons.org/licenses/by-sa/3.0/">สัญญาอนุญาตครีเอทีฟ คอมมอนส์/สัญญาแบบ Share-Alike</a>;
และอาจจะมีข้อเพิ่มเติมอื่นๆ
กรุณาดู<a href="//wikimediafoundation.org/wiki/Terms_of_Use">สิทธิ์การใช้งาน</a>สำหรับรายละเอียดเพิ่มเติม',
	'wikimedia-copyrightwarning' => 'เมื่อคุณบันทึก คุณยินยอมที่จะให้การเขียนของคุณอยู่ภายใต้[//creativecommons.org/licenses/by-sa/3.0/ สัญญาอนุญาตครีเอทีฟคอมมอนส์ แบบแสดงที่มา-อนุญาตแบบเดียวกัน 3.0] และ [//www.gnu.org/copyleft/fdl.html GFDL] อย่างแก้คืนไม่ได้
คุณยินยอมที่จะได้รับเครดิตจากผู้ที่นำข้อมูลของคุณไปใช้ อย่างน้อยที่สุด ผ่านทางไฮเปอร์ลิงก์หรือยูอาร์แอลเชื่อมโยงมายังหน้าที่คุณได้มีส่วนเขียนนี้
โปรดศึกษา[//wikimediafoundation.org/wiki/Terms_of_Use เงื่อนไขการใช้งาน]',
);

/** Turkmen (Türkmençe)
 * @author Hanberke
 * @author Runningfridgesrule
 */
$messages['tk'] = array(
	'wikimediamessages-desc' => 'Wikimedia ýörite habarlaşyklary',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=tk',
	'sitesupport' => 'Haýyr-sawahatlar',
	'tooltip-n-sitesupport' => 'Bizi goldaň',
	'specialpages-group-contribution' => 'Goşantlar/Fond ýygnaýjy',
	'group-Image-reviewer' => 'Şekil gözden geçirijiler',
	'group-Image-reviewer-member' => 'şekil gözden geçiriji', # Fuzzy
	'grouppage-Image-reviewer' => '{{ns:project}}:Şekil gözden geçirijiler',
	'group-OTRS-member' => 'OTRS agzalary',
	'group-OTRS-member-member' => 'OTRS agzasy', # Fuzzy
	'grouppage-OTRS-member' => '{{ns:project}}:OTRS agzalary',
	'group-abusefilter' => 'Erbet ulanmak filtr redaktorlary',
	'group-abusefilter-member' => 'erbet ulanmak filtr redaktory', # Fuzzy
	'grouppage-abusefilter' => '{{ns:project}}:Erbet ulanmak filtr redaktorlary',
	'group-accountcreator' => 'Hasap döredijiler',
	'group-accountcreator-member' => 'hasap dörediji', # Fuzzy
	'grouppage-accountcreator' => '{{ns:project}}:Hasap döredijiler',
	'group-arbcom' => 'Arbitraž komitetiniň agzalary',
	'group-arbcom-member' => 'arbitraž komitetiniň agzasy', # Fuzzy
	'grouppage-arbcom' => '{{ns:project}}:Arbitraž komitetiniň agzalary',
	'group-autopatrolled' => 'Awtopatrullar',
	'group-autopatrolled-member' => 'awtopatrullar', # Fuzzy
	'grouppage-autopatrolled' => '{{ns:project}}:Awtopatrullar',
	'group-autoreviewer' => 'Awto gözden geçirijiler',
	'group-autoreviewer-member' => 'awto gözden geçiriji', # Fuzzy
	'grouppage-autoreviewer' => '{{ns:project}}:Awtogözegçiler',
	'group-bigexport' => 'Iri eksportirleýjiler',
	'group-bigexport-member' => 'iri eksportirleýji', # Fuzzy
	'grouppage-bigexport' => '{{ns:project}}:Iri eksportirleýjiler',
	'group-confirmed' => 'Tassyklanylan ulanyjylar',
	'group-confirmed-member' => 'tassyklanylan ulanyjy', # Fuzzy
	'grouppage-confirmed' => '{{ns:project}}:Tassyklanylan ulanyjylar',
	'group-editprotected' => 'Goragly sahypa redaktorlary',
	'group-editprotected-member' => 'goragly sahypa redaktory', # Fuzzy
	'grouppage-editprotected' => '{{ns:project}}:Goragly sahypa redaktorlary',
	'group-eliminator' => 'Aýryjylar',
	'group-eliminator-member' => 'aýryjy', # Fuzzy
	'grouppage-eliminator' => '{{ns:project}}:Aýryjy',
	'group-filemover' => 'Faýl geçirijiler',
	'group-filemover-member' => 'faýl geçiriji', # Fuzzy
	'grouppage-filemover' => '{{ns:project}}:Faýl geçirijiler',
	'group-flood' => 'Bot ulanyjylary',
	'group-flood-member' => 'bot ulanyjysy', # Fuzzy
	'grouppage-flood' => '{{ns:project}}:Bot ulanyjylary',
	'group-founder' => 'Esaslandyryjylar',
	'group-founder-member' => 'esaslandyryjy', # Fuzzy
	'grouppage-founder' => '{{ns:project}}:Esaslandyryjylar',
	'group-import' => 'Importirleýjiler',
	'group-import-member' => 'importirleýji', # Fuzzy
	'grouppage-import' => '{{ns:project}}:Importirleýjiler',
	'group-interface_editor' => 'Interfeýs redaktorlary',
	'group-interface_editor-member' => 'interfeýs redaktory', # Fuzzy
	'grouppage-interface_editor' => '{{ns:project}}:Interfeýs redaktorlary',
	'group-ipblock-exempt' => 'IP blokirleme daş tutmalary',
	'group-ipblock-exempt-member' => 'IP blokirleme daş tutmasy', # Fuzzy
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP blokirleme daş tutmasy',
	'group-patroller' => 'Patrullar',
	'group-patroller-member' => 'patrul', # Fuzzy
	'group-researcher' => 'Ylmy gözlegçiler',
	'group-researcher-member' => 'ylmy gözlegçi', # Fuzzy
	'grouppage-researcher' => '{{ns:project}}:Ylmy gözlegçiler',
	'group-rollbacker' => 'Öňki katdyna getirijiler',
	'group-rollbacker-member' => 'öňki katdyna getiriji', # Fuzzy
	'grouppage-rollbacker' => '{{ns:project}}:Öňki katdyna getirijiler',
	'group-transwiki' => 'Wikiara importirleýjiler',
	'group-transwiki-member' => 'wikiara importirleýjisi', # Fuzzy
	'grouppage-transwiki' => '{{ns:project}}:Wikiara importirleýjiler',
	'group-trusted' => 'Ynamdar ulanyjylar',
	'group-trusted-member' => 'ynamdar ulanyjy', # Fuzzy
	'grouppage-trusted' => '{{ns:project}}:Ynamdar ulanyjylar',
	'group-Global_bot' => 'Global botlar',
	'group-Global_bot-member' => 'global bot', # Fuzzy
	'group-Global_rollback' => 'Global öňki katdyna getirijiler',
	'group-Global_rollback-member' => 'global öňki katdyna getiriji', # Fuzzy
	'group-Global_sysops' => 'Global administratorlar',
	'group-Global_sysops-member' => 'global administrator', # Fuzzy
	'group-Ombudsmen' => 'Ombudsmenler',
	'group-Ombudsmen-member' => 'ombudsmen', # Fuzzy
	'group-Staff' => 'Işgärler',
	'group-Staff-member' => 'işgär',
	'group-editinterface' => 'Interfeýs redaktorlary',
	'group-editinterface-member' => 'interfeýs redaktory', # Fuzzy
	'group-steward' => 'Stýuardlar',
	'group-steward-member' => 'stýuard', # Fuzzy
	'group-sysadmin' => 'Ulgam administratorlary',
	'group-sysadmin-member' => 'ulgam administratory', # Fuzzy
	'group-coder' => 'Kodirleýjiler',
	'group-coder-member' => 'kodirleýji', # Fuzzy
	'group-inactive' => 'Işjeň däl ulanyjylar',
	'group-inactive-member' => 'işjeň däl ulanyjy', # Fuzzy
	'grouppage-inactive' => '{{ns:project}}:Işjeň däl ulanyjylar',
	'wikimedia-copyright' => 'Tekst <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike lisenziýasyna</a> laýyklykda elýeterlidir; goşmaça şertler bolmagy mümkin. Jikme-jiklikler üçin <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Ulanyş şertleri</a>ne serediň.',
	'wikimedia-copyrightwarning' => 'Ýazdyrmak bilen, goşandyňyzyň yzyna alyp bolmajak ýagdaýda [//creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] we [//www.gnu.org/copyleft/fdl.html GFDL] boýunça neşir edilmegine ylalaşýarsyňyz. Bu mazmuny ulanjaklaryň size iň bolmanda goşant eden sahypaňyzyň URL çykgydy bilen salgylanjakdygyny hem kabul edýärsiňiz. Jikme-jiklikler üçin [//wikimediafoundation.org/wiki/ Ulanyş şertlerine] serediň.', # Fuzzy
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 * @author Nemo bis
 * @author לערי ריינהארט
 */
$messages['tl'] = array(
	'wikimediamessages-desc' => 'Tiyak na mga mensahe ng Wikimedia',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=tl',
	'sitesupport' => 'Mag-ambag',
	'tooltip-n-sitesupport' => 'Tangkilikin kami',
	'specialpages-group-contribution' => 'Mga ambag/Pangangalap ng salaping panustos',
	'nstab-creator' => 'Tagapaglikha',
	'nstab-institution' => 'Institusyon',
	'nstab-sequence' => 'Pagkakasunud-sunod',
	'nstab-timedtext' => 'Tekstong inoorasan',
	'group-Ex_Administrator' => 'Dating mga tagapangasiwa',
	'group-Ex_Administrator-member' => '{{GENDER:$1|dating tagapangasiwa}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Dating mga tagapangasiwa',
	'group-Ex_Bureaucrat' => 'Dating mga burokrata',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|dating burokrata}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Dating mga burokrata',
	'group-Image-reviewer' => 'Mga manunuri ng larawan',
	'group-Image-reviewer-member' => '{{GENDER:$1|tagapagsuri ng larawan}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:Mga manunuri ng larawan',
	'group-OTRS-member' => 'Mga kasapi ng OTRS',
	'group-OTRS-member-member' => '{{GENDER:$1|kasapi sa OTRS}}',
	'grouppage-OTRS-member' => '{{ns:project}}:Mga kasapi ng OTRS',
	'group-abusefilter' => 'Mga patnugot ng pansala ng pang-aabuso',
	'group-abusefilter-member' => '{{GENDER:$1|patnugot ng pansala ng pang-aabuso}}',
	'grouppage-abusefilter' => '{{ns:project}}:Mga patnugot ng pansala ng pang-aabuso',
	'group-accountcreator' => 'Mga tagapalikha ng kuwenta/akawnt',
	'group-accountcreator-member' => '{{GENDER:$1|tagapaglikha ng akawnt}}',
	'grouppage-accountcreator' => '{{ns:project}}:Mga tagapaglikha ng akawnt/kuwenta',
	'group-arbcom' => 'Mga kasapi sa lupon ng arbitrasyon',
	'group-arbcom-member' => '{{GENDER:$1|kasapi sa lupon ng arbitrasyon}}',
	'grouppage-arbcom' => '{{ns:project}}:Mga kasapi sa lupon ng arbitrasyon',
	'group-autopatrolled' => 'Mga kusang tagapatrolya',
	'group-autopatrolled-member' => '{{GENDER:$1|kusang tagapatrolya}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Mga awtopatrolyador',
	'group-autoreviewer' => 'Mga kusang tagapagsuri',
	'group-autoreviewer-member' => '{{GENDER:$1|kusang tagapagsuri}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Kusang tagapagsuri',
	'group-bigexport' => 'Malalaking mga tagapagluwas',
	'group-bigexport-member' => '{{GENDER:$1|malaking tagapagluwas}}',
	'grouppage-bigexport' => '{{ns:project}}:Malalaking mga tagapagluwas',
	'group-botadmin' => 'Mga bot na mayroong mga karapatan ng tagapangasiwa',
	'group-botadmin-member' => '{{GENDER:$1|mga bot na mayroong mga karapatan ng tagapangasiwa}}',
	'grouppage-botadmin' => '{{ns:project}}:Mga bot na mayroong mga karapatan ng tagapangasiwa',
	'group-confirmed' => 'Natiyak na mga tagagamit',
	'group-confirmed-member' => '{{GENDER:$1|natiyak nang tagagamit}}',
	'grouppage-confirmed' => '{{ns:project}}:Natiyak na mga tagagamit',
	'group-editprotected' => 'Mga patnugot ng pahinang nakaprutekta',
	'group-editprotected-member' => '{{GENDER:$1|patnugot ng pahinang nakaprutekta}}',
	'grouppage-editprotected' => '{{ns:project}}:Mga patnugot ng mga pahinang nakaprutekta',
	'group-eliminator' => 'Mga tagapagtanggal',
	'group-eliminator-member' => '{{GENDER:$1|tagapagtanggal}}',
	'grouppage-eliminator' => '{{ns:project}}:Tagapag-alis',
	'group-filemover' => 'Mga tagapaglipat ng talaksan',
	'group-filemover-member' => '{{GENDER:$1|tagapaglipat ng talaksan}}',
	'grouppage-filemover' => '{{ns:project}}:Mga tagapaglipat ng talaksan',
	'group-flood' => 'Mga tagagamit ng bot',
	'group-flood-member' => '{{GENDER:$1|tagagamit ng bot}}',
	'grouppage-flood' => '{{ns:project}}:Mga tagagamit ng bot',
	'group-founder' => 'Mga tagapagtatag',
	'group-founder-member' => '{{GENDER:$1|tagapagtatag}}',
	'grouppage-founder' => '{{ns:project}}:Mga tagapagtatag',
	'group-import' => 'Mga tagapagangkat',
	'group-import-member' => '{{GENDER:$1|tagapag-angkat}}',
	'grouppage-import' => '{{ns:project}}:Mga tagapagangkat',
	'group-interface_editor' => 'Mga patnugot ng hangganang-mukha',
	'group-interface_editor-member' => '{{GENDER:$1|patnugot ng ugnayang-mukha}}',
	'grouppage-interface_editor' => '{{ns:project}}:Mga patnugot ng hangganang-mukha',
	'group-ipblock-exempt' => 'Mga hindi kasali sa paghaharang/paghahadlang ng IP',
	'group-ipblock-exempt-member' => '{{GENDER:$1|hindi kasali sa pagharang ng IP}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Hind kasali sa paghadlang na pang-IP',
	'group-patroller' => 'Mga tagapatrolya',
	'group-patroller-member' => '{{GENDER:$1|tagapatrolya}}',
	'grouppage-patroller' => '{{ns:project}}:Mga tagapatrolya',
	'group-researcher' => 'Mga mananaliksik',
	'group-researcher-member' => '{{GENDER:$1|mananaliksik}}',
	'grouppage-researcher' => '{{ns:project}}:Mga mananaliksik',
	'group-rollbacker' => 'Mga tagagpagpagulong pabalik sa dati',
	'group-rollbacker-member' => '{{GENDER:$1|tagapagpagulong na pabalik sa dati}}',
	'grouppage-rollbacker' => '{{ns:project}}:Mga tagapagpagulong pabalik sa dati',
	'group-transwiki' => 'Mga tagapagangkat na panglipat-wiki/transwiki',
	'group-transwiki-member' => '{{GENDER:$1|tagapag-angkat ng panglipat ng wiki}}',
	'grouppage-transwiki' => '{{ns:project}}:Mga tagapagangkat na pangtranswiki/panglipat-wiki',
	'group-trusted' => 'Pinagkakatiwalaang mga tagagamit',
	'group-trusted-member' => '{{GENDER:$1|pinagkakatiwalaang tagagamit}}',
	'grouppage-trusted' => '{{ns:project}}:Pinagkakatiwalaang mga tagagamit',
	'group-Global_bot' => "Pandaigdigang mga ''bot''",
	'group-Global_bot-member' => '{{GENDER:$1|pandaigdigang bot}}',
	'grouppage-Global_bot' => 'm:Pangglobong bot',
	'group-Global_rollback' => 'Pandaigdigang mga tagapagpagulong pabalik sa dati',
	'group-Global_rollback-member' => '{{GENDER:$1|pandaigdigang tagapagpagulong na pabalik sa dati}}',
	'grouppage-Global_rollback' => 'm:Pandaigdigang pagpapagulong-pabalik sa dati',
	'group-Global_sysops' => 'Pandaigdigang mga tagapagpaandar ng sistema',
	'group-Global_sysops-member' => '{{GENDER:$1|pandaigdigang tagapagpaandar ng sistema}}',
	'grouppage-Global_sysops' => 'm:Pandaigdigang mga tagapagpaandar ng sistema',
	'group-Ombudsmen' => 'Mga tanod-bayan',
	'group-Ombudsmen-member' => '{{GENDER:$1|tanod-bayan}}',
	'grouppage-Ombudsmen' => 'm:Komisyon ng tanod-bayan',
	'group-Staff' => 'Mga tauhan',
	'group-Staff-member' => 'kasaping tauhan',
	'grouppage-Staff' => 'Pundasyon:Tauhan',
	'group-editinterface' => 'Mga patnugot ng hangganang-mukha',
	'group-editinterface-member' => '{{GENDER:$1|patnugot ng ugnayang-mukha}}',
	'grouppage-editinterface' => 'm:Ugnayang mukha ng pamamatnugot',
	'group-steward' => 'Mga bandahali',
	'group-steward-member' => '{{GENDER:$1|bandahali}}',
	'grouppage-steward' => 'm:Mga bandahali',
	'group-sysadmin' => 'Mga tagapangasiwa ng sistema',
	'group-sysadmin-member' => '{{GENDER:$1|tagapangasiwa ng sistema}}',
	'grouppage-sysadmin' => 'm:Mga tagapangasiwa ng sistema',
	'group-translationadmin' => 'Mga tagapangasiwa ng salinwika',
	'group-translationadmin-member' => '{{GENDER:$1|tagapangasiwa ng salinwika}}',
	'grouppage-translationadmin' => '{{ns:project}}:Mga tagapangasiwa ng salinwika',
	'group-coder' => 'Mga tagapagkodigo',
	'group-coder-member' => '{{GENDER:$1|tagapagkodigo}}',
	'grouppage-coder' => '{{ns:project}}:Tagapagkodigo',
	'group-inactive' => 'Hindi masiglang mga tagagamit',
	'group-inactive-member' => '{{GENDER:$1|hindi masiglang tagagamit}}',
	'grouppage-inactive' => '{{ns:project}}:Hindi masiglang mga tagagamit',
	'shared-repo-name-shared' => 'Wikimedia Commons',
	'wikimedia-copyright' => 'Makukuha ang teksto sa ilalim ng <a href="//creativecommons.org/licenses/by-sa/3.0/">Lisensyang Creative Commons Attribution/Share-Alike</a>;
maaaring gamitan ng karagdagan pang mga patakaran.
See <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Terms of Use</a> for details.',
	'wikimedia-copyrightwarning' => 'Sa pamamagitan ng pagpindot ng pindutang "{{int:savearticle}}", sumasang-ayon ka sa [//wikimediafoundation.org/wiki/Terms_of_Use Mga hinihingi sa paggamit], at hindi mababago ang pagsang-ayon mo na ilabas ang iyong mga ambag sa ilalim ng [//creativecommons.org/licenses/by-sa/3.0/ Lisensiyang CC-BY-SA 3.0] at sa [//www.gnu.org/copyleft/fdl.html GFDL].  Sumasang-ayon ka na ang isang kawing na hyper o URL ay sapat nang atribusyon sa ilalim ng lisensiyang Creative Commons.',
	'cant-delete-main-page' => 'Hindi mo mabubura o maililipat ang pangunahing pahina.',
	'wikimedia-translationnotifications-signup-legal' => 'Sumasang-ayon ka na sa pamamagitan ng pagbibigay sa Pundasyon ng Wikimedia ng ganitong impormasyon, maaari kaming makipag-ugnayan sa iyo hinggil sa mga salinwika o ibang mga paksa na may kaugnayan sa kilusan ng Wikimedia na maiisip namin na marahil ay makakatawag ng iyong pansin. Sumasang-ayon ka na marahil ang dato mo ay maiimbak sa Nagkakaisang mga Estado ng Amerika at masasaklawan ng aming [https://wikimediafoundation.org/wiki/Privacy_policy patakaran sa pagkapribado].',
);

/** Tswana (Setswana)
 * @author Hakka
 */
$messages['tn'] = array(
	'sitesupport' => 'Dimpho',
);

/** Tongan (lea faka-Tonga)
 */
$messages['to'] = array(
	'sitesupport' => 'Ngaahi meʻa ʻofa',
	'group-steward' => 'Kau setuate',
	'group-steward-member' => 'Setuate', # Fuzzy
);

/** Toki Pona (Toki Pona)
 */
$messages['tokipona'] = array(
	'sitesupport' => 'o pana e mani',
);

/** Tok Pisin (Tok Pisin)
 * @author לערי ריינהארט
 */
$messages['tpi'] = array(
	'sitesupport' => 'Givim moni',
);

/** Turkish (Türkçe)
 * @author Emperyan
 * @author Joseph
 * @author Karduelis
 * @author Metal Militia
 * @author Sadrettin
 * @author Suelnur
 */
$messages['tr'] = array(
	'wikimediamessages-desc' => 'Vikimedya özel mesajları',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=tr',
	'sitesupport' => 'Bağışlar',
	'tooltip-n-sitesupport' => 'Bizi destekleyin',
	'specialpages-group-contribution' => 'Katkı/Fonsağlayıcı',
	'nstab-creator' => 'Oluşturan',
	'nstab-institution' => 'Kurum',
	'nstab-sequence' => 'Sıra',
	'nstab-timedtext' => 'ZamanlıMetin',
	'group-Ex_Administrator' => 'Eski hizmetliler',
	'group-Ex_Administrator-member' => '{{GENDER:$1|eski hizmetli}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}: Eski hizmetliler',
	'group-Ex_Bureaucrat' => 'Eski bürokratlar',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|eski bürokrat}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Eski bürokratlar',
	'group-Image-reviewer' => 'Resim inceleyiciler',
	'group-Image-reviewer-member' => '{{GENDER:$1|resim inceleyicisi}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:Resim inceleyiciler',
	'group-OTRS-member' => 'OTRS üyeleri',
	'group-OTRS-member-member' => '{{GENDER:$1|OTRS üyesi}}',
	'grouppage-OTRS-member' => '{{ns:project}}:OTRS üyeleri',
	'group-abusefilter' => 'Suistimal filtresi editörleri',
	'group-abusefilter-member' => '{{GENDER:$1|suistimal filtresi editörü}}',
	'grouppage-abusefilter' => '{{ns:project}}:Suistimal filtresi editörleri',
	'group-accountcreator' => 'Hesap oluşturucular',
	'group-accountcreator-member' => '{{GENDER:$1|hesap oluşturucu}}',
	'grouppage-accountcreator' => '{{ns:project}}:Hesap oluşturucular',
	'group-arbcom' => 'Tahkim heyeti üyeleri',
	'group-arbcom-member' => '{{GENDER:$1|tahkim kurulu üyesi}}',
	'grouppage-arbcom' => '{{ns:project}}:Tahkim heyeti üyeleri',
	'group-autopatrolled' => 'Oto-devriyeler',
	'group-autopatrolled-member' => '{{GENDER:$1|oto-devriye}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Oto-devriye',
	'group-autoreviewer' => 'Oto-inceleyici',
	'group-autoreviewer-member' => '{{GENDER:$1|oto-inceleyici}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Oto-eleştirmenler',
	'group-bigexport' => 'Büyük ihraççılar',
	'group-bigexport-member' => '{{GENDER:$1|büyük ihracatçı}}',
	'grouppage-bigexport' => '{{ns:project}}:Büyük ihraççılar',
	'group-confirmed' => 'Onaylı kullanıcılar',
	'group-confirmed-member' => '{{GENDER:$1|onaylı kullanıcı}}',
	'grouppage-confirmed' => '{{ns:project}}:Onaylı kullanıcılar',
	'group-editprotected' => 'Korumalı sayfa yazarları',
	'group-editprotected-member' => '{{GENDER:$1|korumalı sayfa editörü}}',
	'grouppage-editprotected' => '{{ns:project}}:Korumalı sayfa yazarı',
	'group-eliminator' => 'Eleyiciler',
	'group-eliminator-member' => '{{GENDER:$1|eleyici}}',
	'grouppage-eliminator' => '{{ns:project}}:Eleyiciler',
	'group-filemover' => 'Dosya taşıyıcılar',
	'group-filemover-member' => '{{GENDER:$1|dosya taşıyıcı}}',
	'grouppage-filemover' => '{{ns:project}}:Dosya taşıyıcılar',
	'group-flood' => 'Bot kullanıcıları',
	'group-flood-member' => '{{GENDER:$1|bot kullanıcıları}}',
	'grouppage-flood' => '{{ns:project}}:Bot kullanıcıları',
	'group-founder' => 'Kurucular',
	'group-founder-member' => '{{GENDER:$1|kurucu}}',
	'grouppage-founder' => '{{ns:project}}:Kurucular',
	'group-import' => 'İçe aktarıcılar',
	'group-import-member' => '{{GENDER:$1|içe aktarıcı}}',
	'grouppage-import' => '{{ns:project}}:İçe aktarıcılar',
	'group-interface_editor' => 'Arayüz editörleri',
	'group-interface_editor-member' => '{{GENDER:$1|arayüz editörü}}',
	'grouppage-interface_editor' => '{{ns:project}}:Arayüz editörleri',
	'group-ipblock-exempt' => 'IP engelleme muafiyetleri',
	'group-ipblock-exempt-member' => '{{GENDER:$1|IP engelleme muafı}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP engelleme muafiyeti',
	'group-patroller' => 'Devriyeler',
	'group-patroller-member' => '{{GENDER:$1|devriye}}',
	'group-researcher' => 'Araştırmacılar',
	'group-researcher-member' => '{{GENDER:$1|araştırmacı}}',
	'grouppage-researcher' => '{{ns:project}}:Araştırmacılar',
	'group-rollbacker' => 'Geri döndürücüler',
	'group-rollbacker-member' => '{{GENDER:$1|geri döndürücü}}',
	'grouppage-rollbacker' => '{{ns:project}}:Geri döndürücüler',
	'group-transwiki' => 'Vikilerarası içe aktarıcılar',
	'group-transwiki-member' => '{{GENDER:$1|vikilerarası içe aktarıcılar}}',
	'grouppage-transwiki' => '{{ns:project}}:Vikilerarası içe aktarıcılar',
	'group-trusted' => 'Güvenilir kullanıcılar',
	'group-trusted-member' => '{{GENDER:$1|güvenilir kullanıcı}}',
	'grouppage-trusted' => '{{ns:project}}:Güvenilir kullanıcılar',
	'group-Global_bot' => 'Küresel botlar',
	'group-Global_bot-member' => '{{GENDER:$1|küresel bot}}',
	'group-Global_rollback' => 'Küresel geri döndürücüler',
	'group-Global_rollback-member' => '{{GENDER:$1|küresel geri döndürücü}}',
	'group-Global_sysops' => 'Küresel hizmetliler',
	'group-Global_sysops-member' => '{{GENDER:$1|küresel hizmetli}}',
	'group-Ombudsmen' => 'Bağımsız hakemler',
	'group-Ombudsmen-member' => '{{GENDER:$1|bağımsız hakem}}',
	'group-Staff' => 'Görevliler',
	'group-Staff-member' => 'Görevli',
	'group-editinterface' => 'Arayüzey editörleri',
	'group-editinterface-member' => '{{GENDER:$1|arayüz editörü}}',
	'group-steward' => 'Kâhyalar',
	'group-steward-member' => '{{GENDER:$1|kâhya}}',
	'grouppage-steward' => '{{ns:project}}:Stewardlar',
	'group-sysadmin' => 'Sistem yöneticileri',
	'group-sysadmin-member' => '{{GENDER:$1|sistem hizmetlisi}}',
	'grouppage-sysadmin' => 'm:Sistem yöneticileri',
	'group-translationadmin' => 'Çeviri hizmetlileri',
	'group-translationadmin-member' => '{{GENDER:$1|çeviri hizmetlisi}}',
	'grouppage-translationadmin' => '{{ns:project}}:Çeviri hizmetlileri',
	'group-coder' => 'Kodlayıcılar',
	'group-coder-member' => '{{GENDER:$1|kodlayıcı}}',
	'group-inactive' => 'Etkin olmayan kullanıcılar',
	'group-inactive-member' => '{{GENDER:$1|etkin olmayan kullanıcı}}',
	'grouppage-inactive' => '{{ns:project}}:Etkin olmayan kullanıcılar',
	'shared-repo-name-shared' => 'Vikipedi Commons', # Fuzzy
	'wikimedia-copyright' => 'Metin <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike Lisansı</a> altındadır; ek koşullar uygulanabilir. Ayrıntılar için <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Kullanım Koşulları</a>na bakınız.',
	'wikimedia-copyrightwarning' => 'Sayfayı kaydetmekle katkınızı geri dönülmez şekilde [//creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] ve [//www.gnu.org/copyleft/fdl.html GFDL] ile lisanslamayı kabul etmiş olacaksınız. Böylece içeriği daha sonra kullananların size en azından katkıda bulunduğunuz sayfanın url cinsinden bağlantısıyla atıfta bulunacağını da kabul etmiş olursunuz. Ayrıntılar için [//wikimediafoundation.org/wiki/ Kullanım Koşullarına] bakınız.', # Fuzzy
	'cant-delete-main-page' => 'Silemez veya ana sayfaya taşıyamazsın.',
	'createacct-helpusername-url' => '{{ns:Project}}:Kullanıcı_adı_politikası',
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(seçmeme yardım et)]]',
	'createacct-captcha-help-url' => '{{ns:Project}}:Hesap isteği',
	'createacct-imgcaptcha-help' => 'Resmi göremiyor musunuz? [[{{MediaWiki:createacct-captcha-help-url}}|Hesap isteğinde bulunun]]',
);

/** Tsonga (Xitsonga)
 * @author Thuvack
 */
$messages['ts'] = array(
	'sitesupport' => 'Nyikela mali',
	'tooltip-n-sitesupport' => 'Hi seketeli',
);

/** Tatar (Cyrillic script) (татарча)
 * @author Don Alessandro
 * @author Rinatus
 * @author Timming
 * @author Ерней
 * @author Ильнар
 * @author Рашат Якупов
 */
$messages['tt-cyrl'] = array(
	'wikimediamessages-desc' => 'Викимедиа өчен шәхси булган хатлар',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=tt-cyrl',
	'sitesupport' => 'Иганә',
	'tooltip-n-sitesupport' => 'Безгә ярдәм итегез',
	'specialpages-group-contribution' => 'Иганә/Ярдәм җыю',
	'nstab-creator' => 'Автор',
	'nstab-institution' => 'Учреждение',
	'nstab-sequence' => 'Эзлеклелек',
	'nstab-timedtext' => 'Синхротекст',
	'group-Ex_Administrator' => 'Элеккеге идарәчеләр',
	'group-Ex_Administrator-member' => '{{GENDER:$1|элеккеге идарәче}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Элеккеге идарәчеләр',
	'group-Ex_Bureaucrat' => 'Элеккеге бюрократлар',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|элеккеге бюрократ}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Элеккеге бюрократлар',
	'group-Image-reviewer' => 'Рәсемнәрне тикшерүчеләр',
	'group-Image-reviewer-member' => '{{GENDER:$1|рәсемнәрне тикшерүче}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:Рәсемнәрне караучылар',
	'group-OTRS-member' => 'OTRS әгъзалары',
	'group-OTRS-member-member' => '{{GENDER:$1|OTRS әгъзасы}}',
	'grouppage-OTRS-member' => '{{ns:project}}:OTRS әгъзалары',
	'group-abusefilter' => 'Усаллык белән эш итүчеләрне тикшерүче мөхәррирләр',
	'group-abusefilter-member' => '{{GENDER:$1|явызлык фильтры мөхәррире}}',
	'grouppage-abusefilter' => '{{ns:project}}:Явызлык фильтры мөхәррирләре',
	'group-accountcreator' => 'Хисап язмасы төзүчеләр',
	'group-accountcreator-member' => '{{GENDER:$1|хисап язмасы төзүче}}',
	'grouppage-accountcreator' => '{{ns:project}}:Кулланучы язмаларын ясаучылар',
	'group-arbcom' => 'Арбитраж шурасы әгъзаләре',
	'group-arbcom-member' => '{{GENDER:$1|арбитраж шурасы әгъзасы}}',
	'grouppage-arbcom' => '{{ns:project}}:Арбитраж шурасы әгъзалары',
	'group-autopatrolled' => 'Автотикшерүчеләр',
	'group-autopatrolled-member' => '{{GENDER:$1|автотикшерүче}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Автотикшерүчеләр',
	'group-autoreviewer' => 'Алдан караучылар',
	'group-autoreviewer-member' => '{{GENDER:$1|алдан караучы}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Алдан караучылар',
	'group-bigexport' => 'Зур экспортерлар',
	'group-bigexport-member' => '{{GENDER:$1|зур экспортер}}',
	'grouppage-bigexport' => '{{ns:project}}:Зур экспортерлар',
	'group-botadmin' => 'Идарәче хокуклары булган ботлар',
	'group-botadmin-member' => '{{GENDER:$1|идарәче хокуклары булган бот}}',
	'grouppage-botadmin' => '{{ns:project}}:Идарәче хокуклары булган ботлар',
	'group-confirmed' => 'Расланган кулланучылар',
	'group-confirmed-member' => '{{GENDER:$1|расланган кулланучы}}',
	'grouppage-confirmed' => '{{ns:project}}:Расланган кулланучылар',
	'group-editprotected' => 'Якланган битнең мөхәррирләре',
	'group-editprotected-member' => '{{GENDER:$1|якланган битнең мөхәррире}}',
	'grouppage-editprotected' => '{{ns:project}}:Якланган битләрнең мөхәррирләре',
	'group-eliminator' => 'Бетерүчеләр',
	'group-eliminator-member' => '{{GENDER:$1|бетерүче}}',
	'grouppage-eliminator' => '{{ns:project}}:Бетерүчеләр',
	'group-filemover' => 'Исеме алмаштырулы битләр',
	'group-filemover-member' => '{{GENDER:$1|файлның исемен алмаштыручы}}',
	'grouppage-filemover' => '{{ns:project}}:Файл исемнәрен үзгәртүчеләр',
	'group-flood' => 'Ботлар',
	'group-flood-member' => '{{GENDER:$1|кулланучы-бот}}',
	'grouppage-flood' => '{{ns:project}}:Кулланучы-ботлар',
	'group-founder' => 'Нигез салучылар',
	'group-founder-member' => '{{GENDER:$1|нигез салучы}}',
	'grouppage-founder' => '{{ns:project}}:Нигезчеләр',
	'group-import' => 'Импортлаучы кулланучылар',
	'group-import-member' => '{{GENDER:$1|импортлаучы кулланучы}}',
	'grouppage-import' => '{{ns:project}}:Импортчылар',
	'group-interface_editor' => 'Интерфейс мөхәррирләре',
	'group-interface_editor-member' => '{{GENDER:$1|интерфейс мөхәррире}}',
	'grouppage-interface_editor' => '{{ns:project}}:Интерфейс тәрҗемәчеләре',
	'group-ipblock-exempt' => 'IP-кысылган кулланучылар',
	'group-ipblock-exempt-member' => '{{GENDER:$1|IP-кысылганнан чыгару}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP-кысылудан чыгару',
	'group-patroller' => 'Тикшерүче',
	'group-patroller-member' => '{{GENDER:$1|тикшерүче}}',
	'group-researcher' => 'Тәҗрибә ясаучылар',
	'group-researcher-member' => '{{GENDER:$1|тәҗрибә ясаучы}}',
	'grouppage-researcher' => '{{ns:project}}:Тикшерүче',
	'group-rollbacker' => 'Кире кайтаручылар',
	'group-rollbacker-member' => '{{GENDER:$1|кире кайтаручы}}',
	'grouppage-rollbacker' => '{{ns:project}}:Кире кайтаручылар',
	'group-transwiki' => 'Викиара-күчерүчеләр',
	'group-transwiki-member' => '{{GENDER:$1|викиара-күчерүче}}',
	'grouppage-transwiki' => '{{ns:project}}:Викиара-импортлаучылар',
	'group-trusted' => 'Ышанычлы кулланучылар',
	'group-trusted-member' => '{{GENDER:$1|ышанычлы кулланучы}}',
	'grouppage-trusted' => '{{ns:project}}:Ышанычлы кулланучылар',
	'group-Global_bot' => 'Глобаль ботлар',
	'group-Global_bot-member' => '{{GENDER:$1|глобаль бот}}',
	'group-Global_rollback' => 'Глобаль кире кайтаручылар',
	'group-Global_rollback-member' => '{{GENDER:$1|глобаль кире кайтаручы}}',
	'group-Global_sysops' => 'Глобаль идарәчеләр',
	'group-Global_sysops-member' => '{{GENDER:$1|глобаль идарәче}}',
	'group-Ombudsmen' => 'Омбудсменнар',
	'group-Ombudsmen-member' => '{{GENDER:$1|омбудсмен}}',
	'group-Staff' => 'Хезмәткәрләр',
	'group-Staff-member' => '{{GENDER:$1|хезмәткәр}}',
	'group-editinterface' => 'Интерфейс тәрҗемәчеләре',
	'group-editinterface-member' => '{{GENDER:$1|интерфейс мөхәррире}}',
	'group-steward' => 'Стюардлар',
	'group-steward-member' => '{{GENDER:$1|стюард}}',
	'group-sysadmin' => 'Система идарәчеләре',
	'group-sysadmin-member' => '{{GENDER:$1|система идарәчесе}}',
	'group-translationadmin' => 'Тәрҗемә идарәчеләре',
	'group-translationadmin-member' => '{{GENDER:$1|тәрҗемә идарәчесе}}',
	'grouppage-translationadmin' => '{{ns:project}}:Тәрҗемә идарәчеләре',
	'group-coder' => 'Санакчы',
	'group-coder-member' => '{{GENDER:$1|санакчы}}',
	'group-inactive' => 'Актив булмаган кулланучылар',
	'group-inactive-member' => '{{GENDER:$1|актив булмаган кулланучы}}',
	'grouppage-inactive' => '{{ns:project}}:Актив булмаган кулланучылар',
	'shared-repo-name-shared' => 'Викиҗыентык',
	'wikimedia-copyright' => 'Текст <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike</a> лицензиясе астында бирелә, аерым очракларда өстәмә шартлар эшләргә мөмкин. Өстәмә мәгълүмат өчен <a href="//wikimediafoundation.org/wiki/Terms_of_Use/ru">Куллану шартларын</a> карагыз.',
	'wikimedia-copyrightwarning' => "«{{int:savearticle}}» төймәсенә басып сез [//wikimediafoundation.org/wiki/Terms_of_Use куллану шартлары] белән килешәсез, шулай ук сез үз эшләрегезне  [//creativecommons.org/licenses/by-sa/3.0/deed.ru Creative Commons Attribution/Share-Alike 3.0] һәм [//www.gnu.org/copyleft/fdl.html GFDL] лицензияләре таләпләре буенча нәшер итүенә риза буласыз. Бу битне кулланганда, сезгә иң киме Creative Commons  лицензиясенә гиперсылтама яки бит URL'ы аша сылтама куелуга риза буласыз.",
	'cant-delete-main-page' => 'Сез баш битнең исемен яисә аны бетерә алмыйсыз.',
);

/** Tatar (Latin script) (tatarça)
 * @author Don Alessandro
 */
$messages['tt-latn'] = array(
	'sitesupport' => 'İğänä',
	'wikimedia-copyright' => 'Tekst <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike</a> litsenziäse astında birelä, ayırım oçraqlarda östämä şartlar eşlärgä mömkin. Östämä mäğlümat öçen <a href="//wikimediafoundation.org/wiki/Terms_of_Use/ru">Qullanu şartların</a> qarağız.',
	'wikimedia-copyrightwarning' => "Üzgärtülärne saqlağan waqıtta, sez alarnıñ [//creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] häm [//www.gnu.org/copyleft/fdl.html GFDL] litsenziäläre taläpläre buyınça publikatsiäläwenä riza bulasız. Bu bitne qullanğanda, sezgä iñ kime gipersıltama yäki bit URL'ı aşa sıltama quyıluğa riza bulasız. Tulıraq mäğlümat öçen [//wikimediafoundation.org/wiki/Terms_of_Use Qullanu şartları] biten qarağız.", # Fuzzy
);

/** Tahitian (Reo Mā`ohi)
 */
$messages['ty'] = array(
	'sitesupport' => 'Pūpū i te ō',
);

/** Tuvinian (тыва дыл)
 */
$messages['tyv'] = array(
	'sitesupport' => 'Белектер',
);

/** Central Atlas Tamazight (ⵜⴰⵎⴰⵣⵉⵖⵜ)
 * @author Tifinaghes
 */
$messages['tzm'] = array(
	'sitesupport' => 'ⴰⵡⵙ ⵙ ⵉⴷⵔⵉⵎⵏ',
	'nstab-institution' => 'ⵜⴰⵎⵙⴷⵓⵙⵜ',
	'group-OTRS-member' => 'ⵉⴳⵎⴰⵎⵏ OTRS',
	'group-OTRS-member-member' => '{{GENDER:$1|OTRS ⴰⴳⵎⴰⵎ}}',
	'grouppage-OTRS-member' => '{{ns:project}}:ⵉⴳⵎⴰⵎⵏ ⵏ OTRS',
	'group-eliminator' => 'ⵉⵎⵙⴷⵔⴼⴰⵏ',
	'group-founder-member' => '{{GENDER:$1|ⵜⴰⵎⵙⴷⵓⵙⵜ}}',
	'group-researcher-member' => '{{GENDER:$1|ⴰⵎⵔⵣⵓ|ⵜⴰⵎⵔⵣⵓⵜ}}',
	'grouppage-researcher' => '{{ns:project}}:ⵉⵎⵔⵣⵓⵜⵏ',
	'group-Indic_Bots' => 'Indic bots',
	'group-translationadmin' => 'ⵉⵏⵎⵎⵀⴰⵍⵏ ⵏ ⵜⵙⵓⵖⵍⵜ',
	'group-translationadmin-member' => '{{GENDER:$1|ⵉⵏⵎⵀⴰⵍⵏ ⵏ ⵜⵙⵓⵖⵍⵜ}}',
	'grouppage-translationadmin' => '{{ns:project}}:ⵉⵏⵎⵀⴰⵍⵏ ⵏ ⵜⵙⵓⵖⵍⵜ',
	'shared-repo-name-shared' => 'ⵡⵉⴽⵉⵎⵉⴷⵢⴰ ⴽⵓⵎⵓⵏⵣ',
);

/** Udmurt (удмурт)
 * @author Kaganer
 * @author ОйЛ
 */
$messages['udm'] = array(
	'sitesupport' => 'Проектлы юрттон',
	'wikimedia-copyrightwarning' => "Ваньзэ, мае тӥ гожтоды та статьяе, пыраклы кылёз таӵе лицензиос улын — [//ru.wikipedia.org/wiki/Википедия:Текст_лицензии_Creative_Commons_Attribution-ShareAlike_3.0_Unported CC-BY-SA 3.0] но [//en.wikipedia.org/wiki/Wikipedia:Text_of_the_GNU_Free_Documentation_License GFDL].
Тыро-быдогес со сярысь лыдӟе [//wikimediafoundation.org/wiki/Terms_of_Use/ru Викимедиа проектъёсын ужан условиос] статьяын. '''Ноку эн пыртэ Википедие автор правоен утем материалъёсты!''' Википедиын со туж бадӟым сьӧлыкен лыдъяське. Википедие гожъяса, тӥ асьтэлэн автор правоостылэсь куштӥськоды.", # Fuzzy
);

/** Uighur (ئۇيغۇرچە / Uyghurche‎) */
$messages['ug'] = array(
	'sitesupport' => 'Iana Toplash',
);

/** Uyghur (Arabic script) (ئۇيغۇرچە)
 * @author Sahran
 */
$messages['ug-arab'] = array(
	'wikimediamessages-desc' => 'Wikimedia تەپسىلىي ئۇچۇرلىرى',
	'sitesupport' => 'ئىئانە',
	'tooltip-n-sitesupport' => 'بىزنى قوللاڭ',
	'specialpages-group-contribution' => 'تۆھپە/ئىئانەچى',
	'nstab-creator' => 'تۈزگۈچى',
	'nstab-institution' => 'تارماق',
	'nstab-sequence' => 'تەرتىپ',
	'group-abusefilter' => 'سۈزگۈچتىن قالايمىقان پايدىلانغان تەھرىرلىگۈچى',
	'group-abusefilter-member' => 'سۈزگۈچتىن قالايمىقان پايدىلانغان تەھرىرلىگۈچى', # Fuzzy
	'grouppage-abusefilter' => '{{ns:project}}:سۈزگۈچتىن قالايمىقان پايدىلانغان تەھرىرلىگۈچى',
	'group-accountcreator' => 'ھېسابات قۇرغۇچى',
	'group-accountcreator-member' => 'ھېسابات قۇرغۇچى', # Fuzzy
	'grouppage-accountcreator' => '{{ns:project}}: ھېسابات قۇرغۇچى',
	'group-arbcom' => 'كېسىم كومىتېتى ئەزاسى',
	'group-arbcom-member' => 'كېسىم ھەيئەت ئەزاسى', # Fuzzy
	'grouppage-arbcom' => '{{ns:project}}: كېسىم ھەيئەت ئەزالىرى',
	'group-autopatrolled' => 'ئۆزلۈكىدىن چارلىغۇچى',
	'group-autopatrolled-member' => 'ئۆزلۈكىدىن چارلىغۇچى', # Fuzzy
	'grouppage-autopatrolled' => '{{ns:project}}:ئۆزلۈكىدىن چارلىغۇچى',
	'group-autoreviewer' => 'ئۆزلۈكىدىن باھالىغۇچىلار',
	'group-autoreviewer-member' => 'ئۆزلۈكىدىن باھالىغۇچى', # Fuzzy
	'grouppage-autoreviewer' => '{{ns:project}}:ئۆزلۈكىدىن باھالىغۇچى',
	'group-bigexport' => 'كۆپ مىقداردا چىقارغۇچى',
	'group-bigexport-member' => 'كۆپ مىقداردا چىقارغۇچى', # Fuzzy
	'grouppage-bigexport' => '{{ns:project}}:كۆپ مىقداردا ئەكىرگۈچى',
	'group-confirmed' => 'جەزملەنگەن ئىشلەتكۈچىلەر',
	'group-confirmed-member' => 'جەزملەنگەن ئىشلەتكۈچى', # Fuzzy
	'grouppage-confirmed' => '{{ns:project}}:جەزملەنگەن ئىشلەتكۈچىلەر',
	'group-editprotected' => 'قوغدالغان بەت تەھرىرلىرى',
	'group-editprotected-member' => 'قوغدالغان بەت تەھرىرى', # Fuzzy
	'grouppage-editprotected' => '{{ns:project}}: قوغدالغان بەت تەھرىرلىگۇچىلەر',
	'group-filemover' => 'ھۆججەت يۆتكىگۈچى',
	'group-filemover-member' => 'ھۆججەت يۆتكىگۈچى', # Fuzzy
	'grouppage-filemover' => '{{ns:project}}: ھۆججەت يۆتكىگۈچى',
	'group-flood' => 'ماشىنا ئادەم ئىشلەتكۈچى',
	'group-flood-member' => 'ماشىنا ئادەم ئىشلەتكۈچى', # Fuzzy
	'grouppage-flood' => '{{ns:project}}:ماشىنا ئادەم ئىشلەتكۈچىلەر',
	'group-founder' => 'ئاساس سالغۇچىلار',
	'group-founder-member' => 'ئاساس سالغۇچىلار', # Fuzzy
	'grouppage-founder' => '{{ns:project}}:ئاساس سالغۇچىلار',
	'group-import' => 'ئەكىرگۈچى',
	'group-import-member' => 'ئەكىرگۈچى', # Fuzzy
	'grouppage-import' => '{{ns:project}}:ئەكىرگۈچى',
	'group-interface_editor' => 'ئارايۈز تەھرىرلىرى',
	'group-interface_editor-member' => 'ئارايۈز تەھرىرى', # Fuzzy
	'grouppage-interface_editor' => '{{ns:project}}: ئارايۈز تەھرىرلەر',
	'group-ipblock-exempt' => 'IP چەكلەنمەيدىغانلار',
	'group-ipblock-exempt-member' => 'IP چەكلەنمەيدىغانلار', # Fuzzy
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP چەكلەنمەيدىغانلار',
	'group-patroller' => 'چارلىغۇچىلار',
	'group-patroller-member' => 'چارلىغۇچى', # Fuzzy
	'group-researcher' => 'تەتقىقاتچىلار',
	'group-researcher-member' => 'تەتقىقاتچى', # Fuzzy
	'grouppage-researcher' => '{{ns:project}}:ئەسلىگە قايتۇرغۇچىلار',
	'group-rollbacker' => 'ئەسلىگە قايتۇرغۇچى',
	'group-rollbacker-member' => 'ئەسلىگە قايتۇرغۇچى', # Fuzzy
	'grouppage-rollbacker' => '{{ns:project}}:ئەسلىگە قايتۇرغۇچى',
	'group-transwiki' => 'wiki ھالقىغان ئەكىرگۈچى',
	'group-transwiki-member' => 'wiki ھالقىغان ئەكىرگۈچى', # Fuzzy
	'grouppage-transwiki' => '{{ns:project}}:wiki ھالقىغان ئەكىرگۈچى',
	'group-trusted' => 'ئىشەنچلىك ئىشلەتكۈچىلەر',
	'group-trusted-member' => 'ئىشەنچلىك ئىشلەتكۈچى', # Fuzzy
	'grouppage-trusted' => '{{ns:project}}:ئىشەنچلىك ئىشلەتكۈچىلەر',
	'group-Global_bot' => 'پۈتۈن دائىرىلىك ماشىنا ئادەم',
	'group-Global_bot-member' => 'پۈتكۈل دائىرىلىك ماشىنا ئادەم', # Fuzzy
	'group-Global_rollback' => 'پۈتكۈل دائىرىلىك ئەسلىگە قايتۇرغۇچى',
	'group-Global_rollback-member' => 'پۈتكۈل دائىرىلىك ئەسلىگە قايتۇرغۇچى', # Fuzzy
	'group-editinterface' => 'ئارايۈز تەھرىرلىرى',
	'group-steward' => 'تەشكىللىگۈچى',
	'group-sysadmin' => 'سىستېما باشقۇرغۇچى',
	'group-sysadmin-member' => 'سىستېما باشقۇرغۇچى', # Fuzzy
	'group-coder' => 'پروگراممىچىلار',
	'group-coder-member' => 'پروگراممىچى', # Fuzzy
	'group-inactive' => 'پاسسىپ ئىشلەتكۈچىلەر',
	'group-inactive-member' => 'پاسسىپ ئىشلەتكۈچى', # Fuzzy
	'grouppage-inactive' => '{{ns:project}}:پاسسىپ ئىشلەتكۈچىلەر',
	'shared-repo-name-shared' => 'ۋىكى ۋاستە ھەمبەھىر',
);

/** Uyghur (Latin script) (Uyghurche)
 */
$messages['ug-latn'] = array(
	'sitesupport' => 'Iana Toplash',
);

/** Ukrainian (українська)
 * @author A1
 * @author AS
 * @author Ahonc
 * @author Alex Khimich
 * @author AtUkr
 * @author Base
 * @author Dim Grits
 * @author Ickis
 * @author Microcell
 * @author NickK
 * @author Platonides
 * @author Prima klasy4na
 * @author RLuts
 * @author Riwnodennyk
 * @author Ата
 * @author Тест
 */
$messages['uk'] = array(
	'wikimediamessages-desc' => 'Повідомлення, характерні для Вікімедіа',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=uk',
	'sitesupport' => 'Пожертвування',
	'tooltip-n-sitesupport' => 'Підтримайте проект',
	'specialpages-group-contribution' => 'Пожертвування/Збір коштів',
	'nstab-creator' => 'Автор',
	'nstab-institution' => 'Установа',
	'nstab-sequence' => 'Послідовність',
	'nstab-timedtext' => 'Субтитри',
	'group-Ex_Administrator' => 'Колишні адміністратори',
	'group-Ex_Administrator-member' => '{{GENDER:$1|колишній адміністратор}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Колишні адміністратори',
	'group-Ex_Bureaucrat' => 'Колишні бюрократи',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|колишній бюрократ}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Колишні бюрократи',
	'group-Image-reviewer' => 'Перевіряльники зображень',
	'group-Image-reviewer-member' => 'перевіряльник зображень',
	'grouppage-Image-reviewer' => '{{ns:project}}:Перевіряльники зображень',
	'group-OTRS-member' => 'Члени OTRS',
	'group-OTRS-member-member' => 'член OTRS',
	'grouppage-OTRS-member' => '{{ns:project}}:Члени OTRS',
	'group-abusefilter' => 'Редактори фільтра зловживань',
	'group-abusefilter-member' => '{{GENDER:$1|редактор фільтру зловживань|редакторка фільтру зловживань}}',
	'grouppage-abusefilter' => '{{ns:project}}:Редактори фільтра зловживань',
	'group-accountcreator' => 'Створювачі облікових записів',
	'group-accountcreator-member' => 'створювач облікових записів',
	'grouppage-accountcreator' => '{{ns:project}}:Створювачі облікових записів',
	'group-arbcom' => 'Члени арбітражного комітету',
	'group-arbcom-member' => 'член арбітражного комітету',
	'grouppage-arbcom' => '{{ns:project}}:Члени арбітражного комітету',
	'group-autopatrolled' => 'Автопатрульні',
	'group-autopatrolled-member' => '{{GENDER:$1|автопатрульний|автопатрульна}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Автопатрульні',
	'group-autoreviewer' => 'Авторедактори',
	'group-autoreviewer-member' => '{{GENDER:$1|авторедактор}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Авторедактори',
	'group-bigexport' => 'Крупні експортери',
	'group-bigexport-member' => '{{GENDER:$1|крупний експортер}}',
	'grouppage-bigexport' => '{{ns:project}}:Крупні експортери',
	'group-botadmin' => 'Боти з правами адміністратора',
	'group-botadmin-member' => '{{GENDER:$1|бот з правами адміністратора}}',
	'grouppage-botadmin' => '{{ns:project}}:Боти з правами адміністратора',
	'group-confirmed' => 'Підтверджені користувачі',
	'group-confirmed-member' => 'підтверджений користувач',
	'grouppage-confirmed' => '{{ns:project}}:Підтверджені користувачі',
	'group-editprotected' => 'Редактори захищених сторінок',
	'group-editprotected-member' => 'редактор захищених сторінок',
	'grouppage-editprotected' => '{{ns:project}}:Редактори захищених сторінок',
	'group-eliminator' => 'Вилучальники',
	'group-eliminator-member' => '{{GENDER:$1|вилучальник|вилучальниця}}',
	'grouppage-eliminator' => '{{ns:project}}:Вилучальники', # Fuzzy
	'group-filemover' => 'Перейменувальники файлів',
	'group-filemover-member' => 'перейменувальник файлів',
	'grouppage-filemover' => '{{ns:project}}:Перейменувальники файлів',
	'group-flood' => 'Бот-користувачі',
	'group-flood-member' => 'користувач-бот',
	'grouppage-flood' => '{{ns:project}}:Бот-користувачі',
	'group-founder' => 'Засновники',
	'group-founder-member' => '{{GENDER:$1|засновник|засновниця}}',
	'grouppage-founder' => '{{ns:project}}:Засновники',
	'group-import' => 'Імпортери',
	'group-import-member' => 'імпортер',
	'grouppage-import' => '{{ns:project}}:Імпортери',
	'group-interface_editor' => 'Редактори інтерфейсу',
	'group-interface_editor-member' => '{{GENDER:$1|редактор інтерфейсу|редакторка інтерфейсу}}',
	'grouppage-interface_editor' => '{{ns:project}}:Редактори інтерфейсу',
	'group-ipblock-exempt' => 'Виключення з IP-блокувань',
	'group-ipblock-exempt-member' => 'виключення з IP-блокування',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Виключення з IP-блокування',
	'group-patroller' => 'Патрульні',
	'group-patroller-member' => '{{GENDER:$1|патрульний|патрульна}}',
	'grouppage-patroller' => '{{ns:project}}:Патрульні',
	'group-researcher' => 'Дослідники',
	'group-researcher-member' => '{{GENDER:$1|дослідник|дослідниця}}',
	'grouppage-researcher' => '{{ns:project}}:Дослідники',
	'group-rollbacker' => 'Відкочувачі',
	'group-rollbacker-member' => '{{GENDER:$1|відкочувач|відкочувачка}}',
	'grouppage-rollbacker' => '{{ns:project}}:Відкочувачі',
	'group-transwiki' => 'Transwiki-імпортери',
	'group-transwiki-member' => '{{GENDER:$1|transwiki-імпортер|transwiki-імпортерка}}',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki-імпортери',
	'group-trusted' => 'Довірені користувачі',
	'group-trusted-member' => 'довірений користувач',
	'grouppage-trusted' => '{{ns:project}}:Довірені користувачі',
	'group-uploader' => 'Завантажувачі',
	'group-uploader-member' => 'завантажувач', # Fuzzy
	'grouppage-uploader' => '{{ns:project}}:Завантажувачі',
	'group-Global_bot' => 'Глобальні боти',
	'group-Global_bot-member' => '{{GENDER:$1|глобальний бот}}',
	'grouppage-Global_bot' => 'm:Global bot',
	'group-Global_rollback' => 'Глобальні відкочувачі',
	'group-Global_rollback-member' => '{{GENDER:$1|глобальний відкочувач|глобальна відкочувачка}}',
	'grouppage-Global_rollback' => 'm:Global rollback',
	'group-Global_sysops' => 'Глобальні адміністратори',
	'group-Global_sysops-member' => 'глобальний адміністратор',
	'grouppage-Global_sysops' => 'm:Global sysops',
	'group-Ombudsmen' => 'Омбудсмени',
	'group-Ombudsmen-member' => 'омбудсмен',
	'grouppage-Ombudsmen' => 'm:Ombudsman commission',
	'group-Staff' => 'Співробітники',
	'group-Staff-member' => 'співробітник',
	'grouppage-Staff' => 'Foundation:Staff',
	'group-editinterface' => 'Редактори інтерфейсу',
	'group-editinterface-member' => '{{GENDER:$1|редактор інтерфейсу|редакторка інтерфейсу}}',
	'group-steward' => 'Стюарди',
	'group-steward-member' => '{{GENDER:$1|стюард}}',
	'grouppage-steward' => '{{ns:project}}:Стюарди',
	'group-sysadmin' => 'Системні адміністратори',
	'group-sysadmin-member' => 'системний адміністратор',
	'grouppage-sysadmin' => 'm:System administrators',
	'group-API_High_Limit_Requestor' => 'Верхня межа запитів API',
	'group-API_High_Limit_Requestor-member' => '{{СТАТЬ:$1|Верхня межа запитів API}}',
	'group-Indic_Bots' => 'Індійські боти',
	'group-Indic_Bots-member' => '{{GENDER:$1|Індійський бот}}',
	'group-New_wikis_importer' => 'Імпортери нових вікі',
	'group-New_wikis_importer-member' => '{{GENDER:$1|імпортер нових вікі|імпортерка нових вікі}}',
	'group-global-ipblock-exempt' => 'Глобальне звільнення від блоку IP',
	'group-global-ipblock-exempt-member' => '{{GENDER:$1|Глобальне звільнення від блоку IP}}',
	'group-recursive-export' => 'Рекурсивний експорт',
	'group-recursive-export-member' => '{{GENDER:$1|Рекурсивний експортер}}',
	'group-translationadmin' => 'Адміністратори перекладу',
	'group-translationadmin-member' => '{{GENDER:$1|адміністратор перекладу|адміністраторка перекладу}}',
	'grouppage-translationadmin' => '{{ns:project}}:Адміністратори перекладу',
	'group-centralnoticeadmin' => 'Центральні адміністратори-оповісники',
	'group-centralnoticeadmin-member' => '{{GENDER:$1|Центральний адміністратор-оповісник}}',
	'grouppage-centralnoticeadmin' => '{{ns:project}}:Центральні адміністратори-оповісники',
	'group-coder' => 'Програмісти',
	'group-coder-member' => '{{GENDER:$1|програміст|програмістка}}',
	'grouppage-coder' => '{{ns:project}}:Coder',
	'group-inactive' => 'Неактивні користувачі',
	'group-inactive-member' => '{{GENDER:$1|неактивний користувач|неактивна користувачка}}',
	'grouppage-inactive' => '{{ns:project}}:Неактивні користувачі',
	'shared-repo-name-shared' => 'Вікісховища',
	'wikimedia-copyright' => 'Текст доступний на умовах ліцензії <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike</a>, також можуть діяти додаткові умови. Детальніше див. <a href="//wikimediafoundation.org/wiki/Умови_використання">умови використання</a>.',
	'wikidata-copyright' => 'Усі структуровані дані з основного простору назв і простору назв властивостей доступні під ліцензією <a href="//creativecommons.org/publicdomain/zero/1.0/" title="Definition of the Creative Commons CC0 License">Creative Commons CC0 License</a>;
текст інших просторів назв доступний під ліцензією <a href="//creativecommons.org/licenses/by-sa/3.0/" title="Definition of the Creative Commons Attribution/Share-Alike License">Creative Commons Attribution/Share-Alike License</a>;
можуть застосовуватись додаткові умови.
Див. детальніше <a href="//wikimediafoundation.org/wiki/Terms_of_Use" title="Wikimedia Foundation Terms of Use">Умови користування</a>.',
	'wikidata-shortcopyrightwarning' => 'Натиснувши «Зберегти», ви погоджуєтеся з [https://wikimediafoundation.org/wiki/Terms_of_Use умовами використання], і ви надаєте свій внесок під [https://creativecommons.org/publicdomain/zero/1.0/ ліцензією CC0].', # Fuzzy
	'wikimedia-copyrightwarning' => 'Зберігаючи свої зміни, ви погоджуєтеся з [//wikimediafoundation.org/wiki/Terms_of_Use умовами використання], а також на невідкличну публікацію на умовах ліцензій [//creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike 3.0] та [//www.gnu.org/copyleft/fdl.html GFDL]. Ви погоджуєтесь на використання свого внеску за умови зазначення URL-адреси сторінки, яку ви редагували.',
	'wikibase-sitelinks-wikivoyage' => 'Список сторінок Вікімандрів, що посилаються на цей елемент',
	'cant-delete-main-page' => 'Ви не можете вилучити або перейменувати головну сторінку.',
	'wikimedia-translationnotifications-signup-legal' => "Ви погоджуєтесь, що після надання Фонду Вікімедіа цієї інформації ми можемо зв'язуватись з Вами стосовно перекладів або інших речей щодо руху Вікімедіа, які, на нашу думку, можуть Вас зацікавити. Ви погоджуєтесь, що Ваші дані можуть зберігатись у Сполучених Штатах Америки і є предметом нашої [https://wikimediafoundation.org/wiki/Privacy_policy політики приватності].",
	'upload-more-photos-of-this-monument' => "Завантажити більше знімків цього об'єкта",
	'extdist-branch-master' => 'майстер (остання розроблена версія)',
	'extdist-branch-REL1_21' => '1.21 (остання стабільна MediaWiki)',
);

/** Urdu (اردو)
 * @author محبوب عالم
 * @author පසිඳු කාවින්ද
 */
$messages['ur'] = array(
	'wikimediamessages-desc' => 'ویکیمیڈیا معیّن پیغامات',
	'sitesupport' => 'رابطہ',
	'tooltip-n-sitesupport' => 'معاونت کیجئے',
	'nstab-creator' => 'خالق',
	'nstab-institution' => 'ادارے',
	'group-accountcreator' => 'کھاتہ سازان',
	'group-founder' => 'بانیان',
	'group-import' => 'بینک',
	'group-import-member' => 'برآمدکار', # Fuzzy
	'group-trusted' => 'قابل اعتماد صارفین',
	'group-trusted-member' => 'معتمد صارف', # Fuzzy
	'group-Global_bot' => 'عالمی خودکار صارف',
	'group-Staff' => 'سٹاف',
	'group-Staff-member' => 'عملہ',
	'group-editinterface' => 'مدیرانِ سطح البین',
	'group-sysadmin' => 'منتظمینِ نظام',
	'group-sysadmin-member' => 'منتظمِ نظام', # Fuzzy
	'group-inactive' => 'غیرفعال صارفین',
	'group-inactive-member' => 'غیرفعال صارف', # Fuzzy
	'cant-delete-main-page' => 'آپ حذف یا منتقل کی سب سے کامیاب نہیں کر سکتے ہیں.',
);

/** Uzbek (oʻzbekcha)
 * @author CoderSI
 * @author Sociologist
 */
$messages['uz'] = array(
	'wikimediamessages-desc' => 'Vikipediya maxsus xabarlari',
	'sitesupport' => 'Loyihaga koʻmak',
	'tooltip-n-sitesupport' => 'Bizni qoʻllab-quvvatlang',
	'specialpages-group-contribution' => 'Hayr-ehson qilish/Mablagʻ yigʻish',
	'nstab-creator' => 'Muallif',
	'nstab-institution' => 'Muassasa',
	'nstab-sequence' => 'Ketma-ketlik',
	'group-Ex_Administrator' => 'Sobiq maʼmurlar',
	'group-Ex_Administrator-member' => '{{GENDER:$1|sobiq maʼmur}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Sobiq maʼmurlar',
	'group-Ex_Bureaucrat' => 'Sobiq rasmiyatchilar',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|sobiq rasmiyatchi}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Sobiq rasmiyatchilar',
	'group-Image-reviewer' => 'Tasvir tekshiruvchilari',
	'group-Image-reviewer-member' => '{{GENDER:$1|tasvir tekshiruvchisi}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:Tasvir tekshiruvchilari',
	'group-OTRS-member' => 'OTRS a’zolari',
	'group-OTRS-member-member' => '{{GENDER:$1|OTRS a’zosi}}',
	'grouppage-OTRS-member' => '{{ns:project}}:OTRS a’zolari',
	'group-abusefilter' => 'Suisteʼmollar filtri muharrirlari',
	'group-abusefilter-member' => '{{GENDER:$1|suisteʼmollar filtri muharriri}}',
	'grouppage-abusefilter' => '{{ns:project}}:Suisteʼmollar filtri muharrirlari',
	'group-accountcreator' => 'Hisob yozuvi yaratuvchilar',
	'group-accountcreator-member' => '{{GENDER:$1|Hisob yozuvi yaratuvchi}}',
	'grouppage-accountcreator' => '{{ns:project}}:Hisob yozuvi yaratuvchilar',
	'group-arbcom' => 'Hakamlar qoʻmitasi aʼzolari',
	'group-arbcom-member' => '{{GENDER:$1|hakamlar qoʻmitasi aʼzosi}}',
	'grouppage-arbcom' => '{{ns:project}}:Hakamlar qoʻmitasi aʼzolari',
	'group-autopatrolled' => 'Avtopatrullanuvchilar',
	'group-autopatrolled-member' => '{{GENDER:$1|avtopatrullovchi}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Avtopatrullovchilar',
	'group-autoreviewer' => 'Avtonazoratchilar',
	'group-autoreviewer-member' => '{{GENDER:$1|avtonazoratchi}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Avtonazoratchilar',
	'group-bigexport' => 'Yirik eksportchilar',
	'group-bigexport-member' => '{{GENDER:$1|yirik eksportchi}}',
	'grouppage-bigexport' => '{{ns:project}}:Yirik eksportchilar',
	'group-botadmin' => 'Maʼmurlik huquqiga ega botlar',
	'group-botadmin-member' => '{{GENDER:$1|maʼmurlik huquqiga ega bot}}',
	'grouppage-botadmin' => '{{ns:project}}:Maʼmurlik huquqiga ega botlar',
	'group-confirmed' => 'Tasdiqlangan foydalanuvchilar',
	'group-confirmed-member' => '{{GENDER:$1|tasdiqlangan foydalanuvchi}}',
	'grouppage-confirmed' => '{{ns:project}}:Tasdiqlangan foydalanuvchilar',
	'group-editprotected' => 'Himoyalangan sahifalar muharrirlari',
	'group-editprotected-member' => '{{GENDER:$1|Himoyalangan sahifalar muharriri}}',
	'grouppage-editprotected' => '{{ns:project}}:Himoyalangan sahifalar muharrirlari',
	'group-eliminator' => 'Oʻchiruvchilar',
	'group-eliminator-member' => '{{GENDER:$1|oʻchiruvchi}}',
	'grouppage-eliminator' => '{{ns:project}}:Oʻchiruvchilar',
	'group-filemover' => 'Fayllarni nomlovchilar',
	'group-filemover-member' => '{{GENDER:$1|Fayl nomlovchi}}',
	'grouppage-filemover' => '{{ns:project}}:Fayllar nomlovchilar',
	'group-flood' => 'Foydalanuvchilar-botlar',
	'group-flood-member' => '{{GENDER:$1|foydalanuvchi-bot}}',
	'grouppage-flood' => '{{ns:project}}:Foydalanuvchilar-botlar',
	'group-founder' => 'Asoschilar',
	'group-founder-member' => '{{GENDER:$1|asoschi}}',
	'grouppage-founder' => '{{ns:project}}:Asoschilar',
	'group-import' => 'Importchilar',
	'group-import-member' => '{{GENDER:$1|importchi}}',
	'grouppage-import' => '{{ns:project}}:Importchilar',
	'group-interface_editor' => 'Interfeys muharrirlari',
	'group-interface_editor-member' => '{{GENDER:$1|interfeys muharriri}}',
	'grouppage-interface_editor' => '{{ns:project}}:Interfeys muharrirlari',
	'group-ipblock-exempt' => 'IP-chetlashtirishlardan mustasnolar',
	'group-patroller' => 'Patrullovchilar',
	'group-patroller-member' => '{{GENDER:$1|patrullovchi}}',
	'grouppage-patroller' => '{{ns:project}}:Patrullovchilar',
	'group-researcher' => 'Izlanuvchilar',
	'group-researcher-member' => '{{GENDER:$1|izlanuvchi}}',
	'grouppage-researcher' => '{{ns:project}}:Izlanuvchilar',
	'group-rollbacker' => 'Eski holiga qaytaruvchilar',
	'group-rollbacker-member' => '{{GENDER:$1|eski holiga qaytaruvchi}}',
	'grouppage-rollbacker' => '{{ns:project}}:Eski holiga qaytaruvchilar',
	'group-transwiki' => 'Wikilararo importchilar',
	'group-transwiki-member' => '{{GENDER:$1|wikilararo importchi}}',
	'grouppage-transwiki' => '{{ns:project}}:Wikilararo importchilar',
	'group-trusted' => 'Ishonchli ishtirokchilar',
	'group-trusted-member' => '{{GENDER:$1|ishonchli ishtirokchi}}',
	'grouppage-trusted' => '{{ns:project}}:Ishonchli ishtirokchilar',
	'group-Global_bot' => 'Global botlar',
	'group-Global_bot-member' => '{{GENDER:$1|global bot}}',
	'group-Global_rollback' => 'Global eski holiga qaytaruvchilar',
	'group-Global_rollback-member' => '{{GENDER:$1|global eski holiga qaytaruvchi}}',
	'group-Global_sysops' => 'Global maʼmurlar',
	'group-Global_sysops-member' => '{{GENDER:$1|global ma’mur}}',
	'group-Ombudsmen' => 'Ombudsmenlar',
	'group-Ombudsmen-member' => '{{GENDER:$1|ombudsmen}}',
	'group-Staff' => 'Xodimlar',
	'group-Staff-member' => '{{GENDER:$1|xodim}}',
	'group-editinterface' => 'Interfeys muharrirlari',
	'group-editinterface-member' => '{{GENDER:$1|interfeys muharriri}}',
	'group-steward' => 'Styuardlar',
	'group-steward-member' => '{{GENDER:$1|styuard}}',
	'group-sysadmin' => 'Tizim maʼmurlari',
	'group-sysadmin-member' => '{{GENDER:$1|tizim maʼmuri}}',
	'group-translationadmin' => 'Tarjima maʼmurlari',
	'group-translationadmin-member' => '{{GENDER:$1|tarjima maʼmuri}}',
	'grouppage-translationadmin' => '{{ns:project}}:Tarjima maʼmurlari',
	'group-coder' => 'Dasturlovchilar',
	'group-coder-member' => '{{GENDER:$1|dasturlovchi}}',
	'group-inactive' => 'Nofaol ishtirokchilar',
	'group-inactive-member' => '{{GENDER:$1|nofaol foydalanuvchi}}',
	'grouppage-inactive' => '{{ns:project}}:Nofaol ishtirokchilar',
	'wikimedia-copyright' => 'Matn <a href="//creativecommons.org/licenses/by-sa/3.0/deed.ru">Creative Commons Attribution/Share-Alike litsenziyasi</a> boʻyicha ommalashtirilmoqda; alohida holatlarda qoʻshimcha shartlar amal qilishi mumkin. Batafsil: <a href="//wikimediafoundation.org/wiki/Terms_of_Use/ru">Foydalanish shartlari</a>.',
	'wikimedia-copyrightwarning' => '«{{int:savearticle}}» tugmasini bosgan holda, Siz [//wikimediafoundation.org/wiki/Terms_of_Use foydalanish shartlariga] rozilik bildirasiz, va kiritilgan maʼlumotlar [//creativecommons.org/licenses/by-sa/3.0/deed.ru Creative Commons Attribution/Share-Alike 3.0] va [//www.gnu.org/copyleft/fdl.html GFDL] litsenziyalari boʻyicha qaytarishsiz nashr etilishiga rozilik bildirasiz. Shuningdek Creative Commons litsenziyasi shartlarining bajarilishi uchun maʼlumotlar olingan sahifa yoki uning URL-manziliga havola koʻrsatish yetarli boʻlishini tasdiqlaysiz.',
	'cant-delete-main-page' => 'Siz bosh sahifani oʻchirishingiz yoki nomini oʻzgartirishingiz mumkin emas.',
	'upload-more-photos-of-this-monument' => 'Ushbu obyektning yana boshqa suratlarini yuklash',
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(tanlashda yordam)]]',
	'createacct-imgcaptcha-help' => 'Suratdagi yozuvni tushunmayapsizmi? [[{{MediaWiki:createacct-captcha-help-url}}|Hisob yaratishga soʻrovlar]]',
);

/** vèneto (vèneto)
 * @author Candalua
 * @author GatoSelvadego
 * @author Vajotwo
 */
$messages['vec'] = array(
	'wikimediamessages-desc' => 'Messagi specifici de Wikimedia',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=vec',
	'sitesupport' => 'Donassion',
	'tooltip-n-sitesupport' => 'Jùtane',
	'specialpages-group-contribution' => 'Contributi/Racolta fondi',
	'nstab-creator' => 'Autor',
	'nstab-institution' => 'Istitusion',
	'nstab-sequence' => 'Secuensa',
	'nstab-timedtext' => 'Sototitołi',
	'group-Ex_Administrator' => 'Veci aministradori',
	'group-Ex_Administrator-member' => '{{GENDER:$1|vecio aministrador|vecia aministradora|vecio/a aministrador/a}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Veci aministradori',
	'group-Ex_Bureaucrat' => 'Veci burocrati',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|vecio burocrate}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}: Veci burocrati',
	'group-Image-reviewer' => 'Revisori de le imagini',
	'group-Image-reviewer-member' => '{{GENDER:$1|verifegador de imaxeni|verifegatrise de imaxeni|verifegador/trise de imaxeni}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:Revisori de le imagini',
	'group-OTRS-member' => 'Utenti OTRS',
	'group-OTRS-member-member' => '{{GENDER:$1|utente OTRS}}',
	'grouppage-OTRS-member' => '{{ns:project}}:Utenti OTRS',
	'group-abusefilter' => 'Gestori filtri anti abusi',
	'group-abusefilter-member' => '{{GENDER:$1|modifegator de i filtri anti abuxi|modifegatrise de i filtri anti abuxi|modifegato/trise de i filtri anti abuxi}}',
	'grouppage-abusefilter' => '{{ns:project}}:Gestori filtri anti abusi',
	'group-accountcreator' => 'Creatori de account',
	'group-accountcreator-member' => '{{GENDER:$1|creador de utense|creadora de utense|creador/a de utense}}',
	'grouppage-accountcreator' => '{{ns:project}}:Creatori de account',
	'group-arbcom' => 'Menbri del comitato de arbitrato',
	'group-arbcom-member' => '{{GENDER:$1|conponente de ła comision arbitrałe}}',
	'grouppage-arbcom' => '{{ns:project}}:Menbri del comitato de arbitrato',
	'group-autopatrolled' => 'Patujadori automatici',
	'group-autopatrolled-member' => '{{GENDER:$1|patujador automàtego}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Patujadori automàteghi',
	'group-autoreviewer' => 'Autoreviewer',
	'group-autoreviewer-member' => '{{GENDER:$1|autorevixor}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Autoreviewer',
	'group-bigexport' => 'Grando esportador',
	'group-bigexport-member' => '{{GENDER:$1|esportador in bloco|esportatrise in bloco|esportador/trise in bloco}}',
	'grouppage-bigexport' => '{{ns:project}}:Grandi esportadori',
	'group-botadmin' => 'Bot có diriti de aministrador',
	'group-botadmin-member' => '{{GENDER:$1|bot có diriti de aministrador}}',
	'grouppage-botadmin' => '{{ns:project}}: Bot có diriti de aministrador',
	'group-confirmed' => 'Utenti confermà',
	'group-confirmed-member' => '{{GENDER:$1|utente autoconvałidà}}',
	'grouppage-confirmed' => '{{ns:project}}:Utenti confermà',
	'group-editprotected' => 'Modificadori de pagine protete',
	'group-editprotected-member' => '{{GENDER:$1|modifegator de pàjine protete|modifegatrise de pàjine protete|modifegator/trise de pàjine protete}}',
	'grouppage-editprotected' => '{{ns:project}}:Modificadori de pagine protete',
	'group-eliminator' => 'Eliminadori',
	'group-eliminator-member' => '{{GENDER:$1|eliminador|eliminadora|eliminador/a}}',
	'grouppage-eliminator' => '{{ns:project}}:Eliminador',
	'group-filemover' => 'Spostadori de file',
	'group-filemover-member' => '{{GENDER:$1|spostador de file|spostatrise de file|spostador/trise de file}}',
	'grouppage-filemover' => '{{ns:project}}:Spostadori de file',
	'group-flood' => 'Utenti bot',
	'group-flood-member' => '{{GENDER:$1|utente bot}}',
	'grouppage-flood' => '{{ns:project}}:Utenti bot',
	'group-founder' => 'Fondatori',
	'group-founder-member' => '{{GENDER:$1|fondator|fondatrise|fondator/trise}}',
	'grouppage-founder' => '{{ns:project}}:Fondatori',
	'group-import' => 'Inportadori',
	'group-import-member' => '{{GENDER:$1|inportador|inportatrise|inportador/trise}}',
	'grouppage-import' => '{{ns:project}}:Inportadori',
	'group-interface_editor' => "Modificadori de l'interfacia",
	'group-interface_editor-member' => "{{GENDER:$1|modifegator de l'interfacia|modifegatrise de l'interfacia|modifegator/trise de l'interfacia}}",
	'grouppage-interface_editor' => "{{ns:project}}:Modificadori de l'interfacia",
	'group-ipblock-exempt' => "Esenzioni dal bloco de l'IP",
	'group-ipblock-exempt-member' => '{{GENDER:$1|Exente dal bloco IP}}',
	'grouppage-ipblock-exempt' => "{{ns:project}}:Esenzion dal bloco de l'IP",
	'group-patroller' => 'Patujadori',
	'group-patroller-member' => '{{GENDER:$1|patujador|patujadora|patujador/a}}',
	'grouppage-patroller' => '{{ns:project}}:Patujadori',
	'group-researcher' => 'Risercadori',
	'group-researcher-member' => '{{GENDER:$1|risercador|risercatrise|risercador/trise}}',
	'grouppage-researcher' => '{{ns:project}}:Risercadori',
	'group-rollbacker' => 'Ripristinadori',
	'group-rollbacker-member' => '{{GENDER:$1|ripristinador}}',
	'grouppage-rollbacker' => '{{ns:project}}:Ripristinadori',
	'group-transwiki' => 'Inportadori transwiki',
	'group-transwiki-member' => '{{GENDER:$1|inportador transwiki|inportatrise transwiki|inportador/trise transwiki}}',
	'grouppage-transwiki' => '{{ns:project}}:Inportadori transwiki',
	'group-trusted' => 'Utenti de cui fidarse',
	'group-trusted-member' => '{{GENDER:$1|utente de cui fidarse}}',
	'grouppage-trusted' => '{{ns:project}}:Utenti de cui fidarse',
	'group-Global_bot' => 'Bot globali',
	'group-Global_bot-member' => '{{GENDER:$1|bot globałe}}',
	'group-Global_rollback' => 'Ripristinadori globali',
	'group-Global_rollback-member' => '{{GENDER:$1|ripristinador globałe}}',
	'group-Global_sysops' => 'Aministradori globali',
	'group-Global_sysops-member' => '{{GENDER:$1|aministrador globałe|aministratrise globałe|aministrador/trise globałe}}',
	'group-Ombudsmen' => 'Ombudsman',
	'group-Ombudsmen-member' => '{{GENDER:$1|garante}}',
	'group-Staff' => 'Staff',
	'group-Staff-member' => 'Menbro del staff',
	'group-editinterface' => "Editori de l'interfacia",
	'group-editinterface-member' => "{{GENDER:$1|modifegator de l'interfacia|modifegatrise de l'interfacia|modifegator/trise de l'interfacia}}",
	'group-steward' => 'Steward',
	'group-steward-member' => '{{GENDER:$1|steward}}',
	'group-sysadmin' => 'Aministradori de sistema',
	'group-sysadmin-member' => '{{GENDER:$1|aministrador de sistema|aministratrise de sistema|aministrador/trise de sistema}}',
	'group-API_High_Limit_Requestor' => 'Dimandanti de API có limite pì alto',
	'group-API_High_Limit_Requestor-member' => '{{GENDER:$1|dimandante}} de API có limite pì alto',
	'group-Indic_Bots' => 'Bot indiani',
	'group-Indic_Bots-member' => '{{GENDER:$1|bot indian}}',
	'group-New_wikis_importer' => 'Inportadori so nove wiki',
	'group-New_wikis_importer-member' => '{{GENDER:$1|inportadore|inportatrise|inportador/trise}} so nove wiki',
	'group-global-ipblock-exempt' => 'Exenti dal bloco IP globałe',
	'group-global-ipblock-exempt-member' => '{{GENDER:$1|exente dal bloco IP globałe}}',
	'group-recursive-export' => 'Esportadori ricorsivi',
	'group-recursive-export-member' => '{{GENDER:$1|esportador ricorsivo|esportatrise ricorsiva|esportador/trise ricorsivo/a}}',
	'group-translationadmin' => 'Aministradori de łe tradusion',
	'group-translationadmin-member' => '{{GENDER:$1|aministrador de łe tradusion|aministratrise de łe tradusion|aministrador/trise de łe tradusion}}',
	'grouppage-translationadmin' => '{{ns:project}}:Aministradori de łe tradusion',
	'group-centralnoticeadmin' => "'Ministradori dei avisi sentralizà",
	'group-centralnoticeadmin-member' => "{{GENDER:$1|'ministrador dei avisi sentralizà|'ministratrise dei avisi sentralizà|'ministrador/trise dei avisi sentralizà}}",
	'grouppage-centralnoticeadmin' => "{{ns:project}}:'Ministradori dei avisi sentralizà",
	'group-coder' => 'Programatori',
	'group-coder-member' => '{{GENDER:$1|programador|programatrise|programadore/trise}}',
	'group-inactive' => 'Utenti inativi',
	'group-inactive-member' => '{{GENDER:$1|utente inativo|utente inativa|utente inativo/a}}',
	'grouppage-inactive' => '{{ns:project}}:Utenti inativi',
	'wikimedia-copyright' => 'El testo el xè disponibiłe secondo ła <a href="//creativecommons.org/licenses/by-sa/3.0/deed.it">licensa Creative Commons Atribusion-Condividi al steso modo</a>; e poe aplicarse ulteriori condision. Varda łe <a class=\'internal\' href="/wiki/Wikipedia:Copyright#Condixion_d.27uxo">condision d\'uxo</a> par i detaji. Wikipedia® xè on marchio rejistrà de ła <a href="//www.wikimediafoundation.org">Wikimedia Foundation, Inc.</a>',
	'wikidata-copyright' => 'Tuti i dati struturai dal namespace prinsipałe i xe disponibiłi secondo ła licensa <a href="//creativecommons.org/publicdomain/zero/1.0/" title="Definition of the Creative Commons CC0 License">Creative Commons CC0</a>;
i testi in altri namespace i xe disponibiłi secondo ła licensa <a href="//creativecommons.org/licenses/by-sa/3.0/" title="Definition of the Creative Commons Attribution/Share-Alike License">Creative Commons Atribusion/Condividi al steso modo</a>;
pol vegner aplicae altre condision.
Varda i <a href="//wikimediafoundation.org/wiki/Terms_of_Use" title="Wikimedia Foundation Terms of Use">Termini d\'uxo</a> par detaji.',
	'wikidata-shortcopyrightwarning' => 'Strucando "Salva", te aceti le [https://wikimediafoundation.org/wiki/Terms_of_Use/it condision de uso] e te consenti irevocabilmente a rilasiar el to contributo in base a la licensa [https://creativecommons.org/publicdomain/zero/1.0/deed.it CC0].',
	'wikimedia-copyrightwarning' => "Strucando so'l boton \"{{int:savearticle}}\", te aceti łe [//wikimediafoundation.org/wiki/Condizioni_d'uso condision d'uxo], e te aceti irevocabilmente de rełasar el to contributo soto łe license [//creativecommons.org/licenses/by-sa/3.0/deed.it Creative Commons Atribusion-Condividi al steso modo 3.0] e [//www.gnu.org/copyleft/fdl.html GFDL]. Te aceti inoltre che un ligamento ipertestuałe o URL el sia sufisente par l'atribusion in baxe a ła licensa Creative Commons.",
	'cant-delete-main-page' => 'Nó te poi scansełar o sposta ła pàjina prinsipałe.',
	'wikimedia-translationnotifications-signup-legal' => 'Te aceti che, fornendo ste informasion a ła Wikimedia Foundation, podemo contatarte par cuanto rivarda łe tradusion o altri argomenti rełativi al movimento Wikimedia che pensemo i posa interesarte. Te aceti che i to dati i sia conservai inte i Stati Unìi de ła Mèrica e i sia sogeti a ła nostra [https://wikimediafoundation.org/wiki/Privacy_policy pułitega so ła privacy].',
	'upload-more-photos-of-this-monument' => 'Carga altre someje de sto monumento',
	'extdist-branch-master' => 'master (ultima version in svilupo)',
	'extdist-branch-REL1_21' => '1.21 (ultima version stabile de MediaWiki)',
	'createacct-helpusername-url' => '{{ns:Project}}:Politica_nome_utente',
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(jùtame a sièliere)]]',
	'createacct-captcha-help-url' => '{{ns:Project}}:Dimanda na utensa',
	'createacct-imgcaptcha-help' => "No sito mia bon de védar l'imagine? [[{{MediaWiki:createacct-captcha-help-url}}|Dimanda na utensa]]",
);

/** Veps (vepsän kel’)
 * @author Игорь Бродский
 */
$messages['vep'] = array(
	'wikimediamessages-desc' => 'WikiMedial kävutadud specifižed tedotused',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=vep',
	'sitesupport' => 'Rahalahjad',
	'tooltip-n-sitesupport' => "Pid'oitelgat meid",
	'specialpages-group-contribution' => 'Lahjoičendad/Rahoidenkeradand',
	'nstab-creator' => 'Sädai',
	'nstab-institution' => 'Organizacii',
	'nstab-sequence' => "Jäl'genduz",
	'nstab-timedtext' => 'Sinhrotekst',
	'group-abusefilter' => "Abidočendan fil'tran redaktorad",
	'group-abusefilter-member' => "{{GENDER:$1|pahan kävutamižen fil'tran redaktor}}",
	'grouppage-abusefilter' => "{{ns:project}}:Abidoičendan fil'tran redaktorad",
	'group-accountcreator' => 'Registrirujad',
	'group-accountcreator-member' => '{{GENDER:$1|registrirui}}',
	'grouppage-accountcreator' => '{{ns:project}}:Registrirujad',
	'group-arbcom' => 'Arbitražkomitetan ühtnijad',
	'group-arbcom-member' => '{{GENDER:$1|arbitražkomitetan ühtnii}}',
	'group-autopatrolled' => 'Avtomatižed patrulirujad',
	'group-autopatrolled-member' => '{{GENDER:$1|avtomatižešti patruliruidud}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Avtomatižešti patruliruidud',
	'group-autoreviewer' => 'avtomatižed arvostelijad',
	'group-autoreviewer-member' => '{{GENDER:$1|avtomatižešti arvosteldud}}',
	'grouppage-autoreviewer' => '{{ns:project}}:Avtomatižed arvostelijad',
	'group-bigexport' => 'Järedad eksportörad',
	'group-bigexport-member' => '{{GENDER:$1|järed eksportör}}',
	'grouppage-bigexport' => '{{ns:project}}:Järedad eksportörad',
	'group-botadmin' => 'Botad adminan oiktisudenke',
	'group-confirmed' => 'vahvištoittud kävutajad',
	'group-confirmed-member' => '{{GENDER:$1|vahvištoittud kävutai}}',
	'grouppage-confirmed' => '{{ns:project}}:Vahvištoittud kävutajad',
	'group-flood' => 'Botad-kävutajad',
	'group-founder' => 'Alusenpanijad',
	'group-founder-member' => '{{GENDER:$1|alusenpanii}}',
	'grouppage-founder' => '{{ns:project}}:Alusenpanijad',
	'group-import' => 'Importörad',
	'group-import-member' => '{{GENDER:$1|importör}}',
	'grouppage-import' => '{{ns:project}}:Importörad',
	'group-ipblock-exempt' => 'Erindad IP-blokiruindoišpäi',
	'group-ipblock-exempt-member' => '{{GENDER:$1|erind IP-blokiruindoišpäi}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Erind IP-blokiruindoišpäi',
	'group-patroller' => 'Patrulirujad',
	'group-patroller-member' => '{{GENDER:$1|patrulirui}}',
	'group-rollbacker' => 'Endištajad',
	'group-rollbacker-member' => '{{GENDER:$1|endištai}}',
	'grouppage-rollbacker' => '{{ns:project}}:Endištajad',
	'group-transwiki' => 'Importörad Transwikišpäi',
	'group-transwiki-member' => '{{GENDER:$1|importör Transwikišpäi}}',
	'grouppage-transwiki' => '{{ns:project}}:Importörad Transwikišpäi',
	'group-Global_bot' => 'Globaližed botad',
	'group-Global_bot-member' => '{{GENDER:$1|globaline bot}}',
	'group-Global_rollback' => 'Globaližed endištajad',
	'group-Global_rollback-member' => '{{GENDER:$1|globaline endištai}}',
	'group-Ombudsmen' => 'Ombudsmenad',
	'group-Ombudsmen-member' => '{{GENDER:$1|ombudsmen}}',
	'group-Staff' => 'projektan radnikad',
	'group-Staff-member' => 'projektan radnik',
	'group-editinterface' => 'Interfeisan redaktorad',
	'group-editinterface-member' => '{{GENDER:$1|interfeisan redaktor}}',
	'group-steward' => 'Stüardad',
	'group-steward-member' => '{{GENDER:$1|stüard}}',
	'group-sysadmin' => 'Sisteman administratorad',
	'group-sysadmin-member' => '{{GENDER:$1|sistemadministratorad}}',
	'group-coder' => 'Programmistad',
	'group-coder-member' => '{{GENDER:$1|programmist}}',
	'group-inactive' => 'Kävutajad aktivižuseta',
	'group-inactive-member' => '{{GENDER:$1|kävutai aktivižuseta}}',
	'grouppage-inactive' => '{{ns:project}}:Kävutajad aktivižuseta',
	'wikimedia-copyright' => 'Tekst sab sada <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike License</a>-licenzijan mödhe; erasti voib olesketa ližaarvoimižid.
Kacu mugažo: <a href="//wikimediafoundation.org/wiki/Käyttöehdot">käyttöehdot</a>.',
);

/** Vietnamese (Tiếng Việt)
 * @author Cheers!
 * @author Minh Nguyen
 * @author Trần Nguyễn Minh Huy
 * @author Vinhtantran
 * @author לערי ריינהארט
 */
$messages['vi'] = array(
	'wikimediamessages-desc' => 'Các thông điệp dành cho Wikimedia',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=vi',
	'sitesupport' => 'Quyên góp',
	'tooltip-n-sitesupport' => 'Hãy hỗ trợ chúng tôi',
	'specialpages-group-contribution' => 'Quyên góp/Vận động gây quỹ',
	'nstab-creator' => 'Tác giả',
	'nstab-institution' => 'Tổ chức',
	'nstab-sequence' => 'Trình chiếu',
	'nstab-timedtext' => 'Văn bản đồng bộ',
	'group-Ex_Administrator' => 'Cựu bảo quản viên',
	'group-Ex_Administrator-member' => '{{GENDER:$1}}cựu bảo quản viên',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Cựu bảo quản viên',
	'group-Ex_Bureaucrat' => 'Cựu hành chính viên',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1}}cựu hành chính viên',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Cựu hành chính viên',
	'group-Image-reviewer' => 'Người duyệt hình',
	'group-Image-reviewer-member' => '{{GENDER:$1}}người duyệt hình',
	'grouppage-Image-reviewer' => '{{ns:project}}:Người duyệt hình',
	'group-OTRS-member' => 'Thành viên OTRS',
	'group-OTRS-member-member' => '{{GENDER:$1}}thành viên OTRS',
	'grouppage-OTRS-member' => '{{ns:project}}:Thành viên OTRS',
	'group-abusefilter' => 'Người sửa bộ lọc sai phạm',
	'group-abusefilter-member' => '{{GENDER:$1}}thành viên sửa bộ lọc sai phạm',
	'grouppage-abusefilter' => '{{ns:project}}:Người sửa bộ lọc sai phạm',
	'group-accountcreator' => 'Người mở tài khoản',
	'group-accountcreator-member' => '{{GENDER:$1}}người mở tài khoản',
	'grouppage-accountcreator' => '{{ns:project}}:Người mở tài khoản',
	'group-arbcom' => 'Ủy viên Ủy ban Trọng tài',
	'group-arbcom-member' => '{{GENDER:$1}}ủy viên Ủy ban Trọng tài',
	'grouppage-arbcom' => '{{ns:project}}:Ủy viên Ủy ban Trọng tài',
	'group-autopatrolled' => 'Người tự đánh dấu tuần tra',
	'group-autopatrolled-member' => '{{GENDER:$1}}tuần tra viên tự động',
	'grouppage-autopatrolled' => '{{ns:project}}:Tuần tra viên tự động',
	'group-autoreviewer' => 'Người tự duyệt',
	'group-autoreviewer-member' => '{{GENDER:$1}}người tự duyệt',
	'grouppage-autoreviewer' => '{{ns:project}}:Người tự duyệt',
	'group-bigexport' => 'Thành viên được phép xuất nhiều trang',
	'group-bigexport-member' => '{{GENDER:$1}}thành viên xuất nhiều trang',
	'grouppage-bigexport' => '{{ns:project}}:Thành viên được phép xuất nhiều trang',
	'group-botadmin' => 'Bot có quyền bảo quản viên',
	'group-botadmin-member' => '{{GENDER:$1}}bot có quyền bảo quản viên',
	'grouppage-botadmin' => '{{ns:project}}:Bot có quyền bảo quản viên',
	'group-confirmed' => 'Thành viên được xác nhận',
	'group-confirmed-member' => '{{GENDER:$1}}thành viên được xác nhận',
	'grouppage-confirmed' => '{{ns:project}}:Thành viên được xác nhận',
	'group-editprotected' => 'Người sửa trang bị khóa',
	'group-editprotected-member' => '{{GENDER:$1}}người sửa trang bị khóa',
	'grouppage-editprotected' => '{{ns:project}}:Người sửa trang bị khóa',
	'group-eliminator' => 'Người xóa trang',
	'group-eliminator-member' => '{{GENDER:$1}}người xóa trang',
	'grouppage-eliminator' => '{{ns:project}}:Người xóa trang',
	'group-filemover' => 'Người đổi tên tập tin',
	'group-filemover-member' => '{{GENDER:$1}}người đổi tên tập tin',
	'grouppage-filemover' => '{{ns:project}}:Người đổi tên tập tin',
	'group-flood' => 'Người dùng bot',
	'group-flood-member' => '{{GENDER:$1}}người dùng bot',
	'grouppage-flood' => '{{ns:project}}:Người dùng bot',
	'group-founder' => 'Sáng lập viên',
	'group-founder-member' => '{{GENDER:$1}}sáng lập viên',
	'grouppage-founder' => '{{ns:project}}:Nhà sáng lập',
	'group-import' => 'Người nhập trang',
	'group-import-member' => '{{GENDER:$1}}người nhập trang',
	'grouppage-import' => '{{ns:project}}:Người nhập trang',
	'group-interface_editor' => 'Người sửa giao diện',
	'group-interface_editor-member' => '{{GENDER:$1}}người sửa giao diện',
	'grouppage-interface_editor' => '{{ns:project}}:Người sửa giao diện',
	'group-ipblock-exempt' => 'Người được miễn cấm IP',
	'group-ipblock-exempt-member' => '{{GENDER:$1}}người được miễn cấm IP',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Người được miễn cấm IP',
	'group-patroller' => 'Tuần tra viên',
	'group-patroller-member' => '{{GENDER:$1}}tuần tra viên',
	'grouppage-patroller' => '{{ns:project}}:Tuần tra viên',
	'group-researcher' => 'Nhà nghiên cứu',
	'group-researcher-member' => '{{GENDER:$1}}nhà nghiên cứu',
	'grouppage-researcher' => '{{ns:project}}:Nhà nghiên cứu',
	'group-rollbacker' => 'Người lùi sửa',
	'group-rollbacker-member' => '{{GENDER:$1}}người lùi sửa',
	'grouppage-rollbacker' => '{{ns:project}}:Người lùi sửa',
	'group-transwiki' => 'Người nhập trang giữa wiki',
	'group-transwiki-member' => '{{GENDER:$1}}người nhập trang giữa wiki',
	'grouppage-transwiki' => '{{ns:project}}:Người nhập trang giữa wiki',
	'group-trusted' => 'Thành viên tin cậy',
	'group-trusted-member' => '{{GENDER:$1}}thành viên tin cậy',
	'grouppage-trusted' => '{{ns:project}}:Thành viên tin cậy',
	'group-uploader' => 'Người tải lên',
	'group-uploader-member' => '{{GENDER:$1|người tải lên}}',
	'grouppage-uploader' => '{{ns:project}}:Người tải lên',
	'group-Global_bot' => 'Bot toàn hệ thống',
	'group-Global_bot-member' => '{{GENDER:$1}}bot toàn hệ thống',
	'grouppage-Global_bot' => 'm:Bot policy/vi#Bot toàn cầu',
	'group-Global_rollback' => 'Người lùi sửa toàn cầu',
	'group-Global_rollback-member' => '{{GENDER:$1}}thành viên lùi sửa toàn hệ thống',
	'grouppage-Global_rollback' => 'm:Global rollback/vi',
	'group-Global_sysops' => 'Bảo quản viên toàn hệ thống',
	'group-Global_sysops-member' => '{{GENDER:$1}}bảo quản viên toàn hệ thống',
	'grouppage-Global_sysops' => 'm:Global sysops/vi',
	'group-Ombudsmen' => 'Thanh tra viên',
	'group-Ombudsmen-member' => '{{GENDER:$1}}thanh tra viên',
	'grouppage-Ombudsmen' => 'm:Ombudsman commission/vi',
	'group-Staff' => 'Nhân viên',
	'group-Staff-member' => 'Nhân viên',
	'group-editinterface' => 'Người sửa giao diện',
	'group-editinterface-member' => '{{GENDER:$1}}thành viên sửa giao diện',
	'group-steward' => 'Tiếp viên',
	'group-steward-member' => '{{GENDER:$1}}tiếp viên',
	'group-sysadmin' => 'Người quản trị hệ thống',
	'group-sysadmin-member' => '{{GENDER:$1}}người quản trị hệ thống',
	'group-API_High_Limit_Requestor' => 'Người được dùng giới hạn cao hơn khi truy vấn API',
	'group-API_High_Limit_Requestor-member' => '{{GENDER:$1}}thành viên được dùng giới hạn cao hơn khi truy vấn API',
	'grouppage-API_High_Limit_Requestor' => 'm:API high limit requestors',
	'group-Indic_Bots' => 'Bot Ấn Độ',
	'group-Indic_Bots-member' => '{{GENDER:$1}}bot Ấn Độ',
	'group-New_wikis_importer' => 'Người nhập trang vào wiki mới',
	'group-New_wikis_importer-member' => '{{GENDER:$1}}người nhập trang vào wiki mới',
	'group-global-ipblock-exempt' => 'Người được miễn cấm IP toàn cầu',
	'group-global-ipblock-exempt-member' => '{{GENDER:$1}}người được miễn cấm IP toàn cầu',
	'group-recursive-export' => 'Người xuất trang đệ quy',
	'group-recursive-export-member' => '{{GENDER:$1}}người xuất trang đệ quy',
	'group-translationadmin' => 'Bảo quản viên bản dịch',
	'group-translationadmin-member' => '{{GENDER:$1}}bảo quản viên bản dịch',
	'grouppage-translationadmin' => '{{ns:project}}:Bảo quản viên bản dịch',
	'group-centralnoticeadmin' => 'Quản lý viên thông báo chung',
	'group-centralnoticeadmin-member' => '{{GENDER:$1}}quản lý viên thông báo chung',
	'grouppage-centralnoticeadmin' => '{{ns:project}}:Quản lý viên thông báo chung',
	'group-coder' => 'Lập trình viên',
	'group-coder-member' => '{{GENDER:$1}}lập trình viên',
	'grouppage-coder' => '{{ns:project}}:Lập trình viên',
	'group-inactive' => 'Thành viên không tích cực',
	'group-inactive-member' => '{{GENDER:$1}}thành viên không tích cực',
	'grouppage-inactive' => '{{ns:project}}:Thành viên không tích cực',
	'shared-repo-name-shared' => 'Wikimedia Commons',
	'wikimedia-copyright' => 'Văn bản được phát hành theo <a href="//creativecommons.org/licenses/by-sa/3.0/deed.vi">Giấy phép Creative Commons Ghi công–Chia sẻ tương tự</a>; có thể áp dụng điều khoản bổ sung. Xem <a href="//wikimediafoundation.org/wiki/Điều_khoản_Sử_dụng?uselang=vi">Điều khoản Sử dụng</a> để biết thêm chi tiết.',
	'wikidata-copyright' => 'Tất cả dữ liệu có cấu trúc trong các không gian tên chính và thuộc tính được phát hành theo <a href="//creativecommons.org/publicdomain/zero/1.0/deed.vi" title="Định nghĩa của Giấy phép Creative Commons CC0">Giấy phép Creative Commons CC0</a>;
các văn bản trong các không gian tên khác được được phát hành theo <a href="//creativecommons.org/licenses/by-sa/3.0/deed.vi" title="Định nghĩa của Giấy phép Creative Commons Ghi công–Chia sẻ tương tự">Giấy phép Creative Commons Ghi công–Chia sẻ tương tự</a>;
các điều khoản bổ sung có thể áp dụng.
Xem chi tiết trong <a href="//wikimediafoundation.org/wiki/Terms_of_Use/vi?uselang=vi" title="Các Điều khoản Sử dụng của Wikimedia Foundation">các Điều khoản Sử dụng</a>.',
	'wikidata-shortcopyrightwarning' => 'Với việc bấm nút “lưu”, bạn chấp nhận [https://wikimediafoundation.org/wiki/Terms_of_Use/vi?uselang=vi các Điều khoản Sử dụng], và bạn đồng ý phát hành đóng góp của mình theo [https://creativecommons.org/publicdomain/zero/1.0/deed.vi giấy phép CC0].',
	'wikimedia-copyrightwarning' => 'Với việc bấm nút “{{int:savearticle}}”, bạn chấp nhận [//wikimediafoundation.org/wiki/Terms_of_Use/vi?uselang=vi các Điều khoản Sử dụng], và bạn đồng ý phát hành, không thể hủy bỏ, đóng góp của mình theo [//vi.wikipedia.org/wiki/Wikipedia:Nguyên_văn_Giấy_phép_Creative_Commons_Ghi_công–Chia_sẻ_tương_tự_phiên_bản_3.0_Chưa_chuyển_đổi Giấy phép Creative Commons Ghi công–Chia sẻ tương tự 3.0] và [//vi.wikipedia.org/wiki/Wikipedia:Nguyên_văn_Giấy_phép_Tài_liệu_Tự_do_GNU GFDL]. Bạn đồng ý rằng một siêu liên kết hoặc URL thỏa mãn điều kiện ghi công trong giấy phép Creative Commons.',
	'wikibase-sitelinks-wikivoyage' => 'Các trang Wikivoyage được liên kết đến khoản mục này',
	'cant-delete-main-page' => 'Không thể xóa hoặc di chuyển trang đầu.',
	'wikimedia-translationnotifications-signup-legal' => 'Với việc cung cấp thông tin này cho Quỹ Wikimedia, bạn đồng ý cho phép chúng tôi liên lạc với bạn về các bản dịch hoặc các đề tài khác có liên quan đến phong trào Wikimedia mà bạn có thể quan tâm đến. Bạn đồng ý rằng dữ liệu của bạn có thể được lưu giữ tại Hợp chúng quốc Hoa Kỳ theo các điều kiện trong [https://wikimediafoundation.org/wiki/Quy_định_quyền_riêng_tư?uselang=vi quy định quyền riêng tư] của chúng tôi.',
	'upload-more-photos-of-this-monument' => 'Tải lên thêm hình ảnh đài tưởng niệm này',
	'extdist-branch-master' => 'master (phiên bản phát triển mới nhất)',
	'extdist-branch-REL1_21' => '1.21 (MediaWiki ổn định mới nhất)',
	'createacct-helpusername-url' => '{{ns:Project}}:Quy định tên người dùng',
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(giúp tôi chọn)]]',
	'createacct-captcha-help-url' => '{{ns:Project}}:Yêu cầu tạo tài khoản',
	'createacct-imgcaptcha-help' => 'Bạn không thấy hình ảnh? [[{{MediaWiki:createacct-captcha-help-url}}|Yêu cầu có tài khoản]]',
);

/** Volapük (Volapük)
 * @author Malafaya
 * @author Smeira
 */
$messages['vo'] = array(
	'sitesupport' => 'Födagivots',
	'tooltip-n-sitesupport' => 'Stütolös obsi',
	'group-accountcreator' => 'Kalijafans',
	'group-accountcreator-member' => 'kalijafan', # Fuzzy
	'grouppage-accountcreator' => '{{ns:project}}:Kalijafans',
	'group-founder' => 'Fünans',
	'group-founder-member' => 'fünan', # Fuzzy
	'grouppage-founder' => '{{ns:project}}:Fünans',
	'group-import' => 'Nüveigans',
	'group-import-member' => 'nüveigan', # Fuzzy
	'grouppage-import' => '{{ns:project}}:Nüveigans',
	'group-rollbacker' => 'Sädunans',
	'group-rollbacker-member' => 'sädunan', # Fuzzy
	'grouppage-rollbacker' => '{{ns:project}}:Sädunans',
	'group-transwiki-member' => 'nüveigan vüvükik', # Fuzzy
	'group-Global_bot-member' => 'bot valöpik', # Fuzzy
	'group-sysadmin' => 'Sitiguvans',
	'group-sysadmin-member' => 'sitiguvan', # Fuzzy
	'group-coder' => 'Kotans',
	'group-coder-member' => 'kotan', # Fuzzy
);

/** Võro (Võro)
 * @author Võrok
 */
$messages['vro'] = array(
	'sitesupport' => 'Tugõminõ',
	'tooltip-n-sitesupport' => 'Tukõq mi tüüd',
	'wikimedia-copyright' => 'Teksti või pruukiq <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike</a>-litsendsi tingimüisi perrä;
mõnikõrd või päält taa ollaq ka muid tingimüisi.
Taa kotsilõ kaeq täpsämbähe <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Wikimedia pruukmistingimüisist</a>.',
	'wikimedia-copyrightwarning' => 'Pästmisega annat nõunolõgi uma tüü tagasipüürdmäldä ärq ilmutamisõs [//creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike 3.0-] ja [//www.gnu.org/copyleft/fdl.html GFDL-litsendsi] perrä.
Olõt nõun, et su autorisolõmist näüdätäs vähämbält võrgoaadrõsi vai lingiga seo lehe pääle, midä sa parhilla toimõndat.
Täpsämbähe kaeq taa kotsilõ [//wikimediafoundation.org/wiki/Terms_of_Use Wikimedia pruukmistingimüisist].', # Fuzzy
);

/** Walloon (walon)
 * @author Lucyin
 * @author Srtxg
 */
$messages['wa'] = array(
	'wikimediamessages-desc' => 'Messaedjes rén k\' pol waibe "Wikimedia"',
	'sitesupport' => 'Ecwårlaedje',
	'tooltip-n-sitesupport' => 'Sotnez nos',
	'group-Ex_Administrator' => 'Vîs manaedjeus',
	'group-Ex_Administrator-member' => '{{GENDER:$1|vî manaedjeu|viye manaedjresse}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:Vîs manaedjeus',
	'group-Ex_Bureaucrat' => 'Vîs mwaisse-manaedjeus',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|vî mwaisse-manaedjeu|viye mwaisse-manaedjresse}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:Vîs mwaisse-manaedjeus',
	'group-abusefilter' => 'Ricandjeus des passetes',
	'group-abusefilter-member' => "{{GENDER:$1|ricandjeu d'|ricandjeuse di}} passetes",
	'grouppage-abusefilter' => '{{ns:project}}:Ricandjeus des passetes',
	'group-accountcreator' => "Ahiveus d' contes",
	'group-accountcreator-member' => "{{GENDER:$1|ahiveu d' contes|ahiveuse di contes}}",
	'grouppage-accountcreator' => '{{ns:project}}:Manaedjeus',
	'group-autopatrolled' => 'Robots naxheus',
	'group-autopatrolled-member' => '{{GENDER:$1|robot naxheu|robote naxheuse}}',
	'grouppage-autopatrolled' => '{{ns:project}}:Robots naxheus',
	'group-autoreviewer' => 'Coridjreces otomatikes',
	'group-autoreviewer-member' => '{{GENDER:$1||}}coridjrece otomatike',
	'grouppage-autoreviewer' => '{{ns:project}}:Coridjreces otomatikes',
	'group-bigexport' => "Grands epoirteus d' pådjes",
	'group-bigexport-member' => "{{GENDER:$1|grand epoirteu d'|grande epoirteuse di}} pådjes",
	'grouppage-bigexport' => "{{ns:project}}:Grands epoirteus d' pådjes",
	'group-botadmin' => "Robots avou des droets d' manaedjeu",
	'group-botadmin-member' => "{{GENDER:$1|robot avou des droets d' manaedjeu|robote avou des droets d' manaedjeuse}}",
	'grouppage-botadmin' => "{{ns:project}}:Robots avou droets d' manaedjeus",
	'group-confirmed' => 'Uzeus confirmés',
	'group-confirmed-member' => '{{GENDER:$1|useu confirmé|uzeuse confirmêye}}',
	'grouppage-confirmed' => '{{ns:project}}:Uzeus confirmés',
	'group-editprotected' => "Candjeus d' pådjes protedjeyes",
	'group-editprotected-member' => "{{GENDER:$1|candjeu d'|candjeuse di}} pådjes protedjeyes",
	'grouppage-editprotected' => "{{ns:project}}:Candjeus d' pådjes protedjeyes",
	'group-eliminator' => 'Elimineus',
	'group-eliminator-member' => '{{GENDER:$1|elimineu|elimineuse}}',
	'grouppage-eliminator' => '{{ns:project}}:Elimineus',
	'group-filemover' => "Displaeceus d' fitchîs",
	'grouppage-filemover' => "{{ns:project}}:Displaeceus d' fitchîs",
	'group-founder' => 'Askepieus do Wiki',
	'group-founder-member' => '{{GENDER:$1|askepieu|askepieuse}}',
	'grouppage-founder' => '{{ns:project}}:Askepieus',
	'group-import' => 'Ristitcheus',
	'group-import-member' => '{{GENDER:$1|ristitcheu|risticheuse}}',
	'grouppage-import' => '{{ns:project}}:Ristitcheus',
	'group-ipblock-exempt' => 'IP nén rboutåve',
	'group-ipblock-exempt-member' => '{{GENDER:$1|IP nén rboutåve}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP nén rboutåve',
	'group-patroller' => 'Patrouyeus',
	'group-patroller-member' => '{{GENDER:$1|patrouyeu|patrouyeuse}}',
	'group-rollbacker' => 'Ridisfijheus',
	'group-rollbacker-member' => '{{GENDER:$1|ridisfijheu|ridisfijheuse}}',
	'grouppage-rollbacker' => '{{ns:project}}:Ridisfijheus',
	'group-transwiki' => 'Ricopieus inte les wikis',
	'group-transwiki-member' => "{{GENDER:$1|ricopieu|ricopieuse}} d' on wiki a l' ôte",
	'grouppage-transwiki' => "{{ns:project}}:Apoirteus d' pådjes d' èn ôte wiki",
	'group-Global_bot' => 'Programeus totavå',
	'group-Global_bot-member' => '{{GENDER:$1|programeu|programeuse}} totavå',
	'group-Global_rollback' => 'Ridisfijheus totavå',
	'group-Global_rollback-member' => '{{GENDER:$1|ridisfijheu|ridisfijheuse}} totavå',
	'group-Global_sysops' => 'Manaedjeus totavå',
	'group-Global_sysops-member' => '{{GENDER:$1|manaedjeu|manaedjeuse}} totavå',
	'group-Ombudsmen' => 'Arindjeus des bidons',
	'group-Ombudsmen-member' => '{{GENDER:$1|arindjeu|arindjeuse}} des bidons',
	'group-Staff' => 'Eployîs',
	'group-Staff-member' => 'Eployî, eployeye',
	'group-steward' => 'Mwaisse-manaedjeus tot avå',
	'group-steward-member' => '{{GENDER:$1|mwaisse-manaedjeu|mwaisse-manaedjresse}} tot avå',
	'group-sysadmin' => 'Manaedjeus',
	'group-sysadmin-member' => '{{GENDER:$1|manaedjeu|manaedjresse}}',
	'group-coder' => "Fijheus d' côdes",
	'group-coder-member' => '{{GENDER:$1|fijheu|fijheuse}} di côdes',
	'group-inactive' => "Uzeus ki n' boutèt nén",
	'group-inactive-member' => "{{GENDER:$1|uzeu|uzeuse}} ki n' boute nén",
	'grouppage-inactive' => "{{ns:project}}:Uzeus ki n' boutnut nén",
	'wikimedia-copyright' => 'Les tecses sont disponibes dizo l\' <a href="//creativecommons.org/licenses/by-sa/3.0/">licince "\'\'Creative Commons\'\'" atribucion pårtaedje a l’ idintike</a>.
Loukîz les <a href="//wikimediafoundation.org/wiki/Terms_of_Use">condicions d’ eployaedje</a> po saveur les ca et les ma.',
	'wikimedia-copyrightwarning' => "Si vos clitchîz so «{{int:savearticle}}», vos acceptez, sins poleur rivni e-n erî, di mete vosse sicrijhaedje dizo l'&nbsp;[//creativecommons.org/licenses/by-sa/3.0/ licince \"''Creative Commons\"'' atribucion pårtaedje a l’ idintike 3.0] eyet [//www.gnu.org/copyleft/fdl.html GFDL].
Et esse sifwaitmint d' acoird d’ esse ricnoxhou (-owe) come sicrijheu(se) di ces racsegnes la, pol moens pa ene hårdêye ou èn URL aviè l’ årtike ki vos avoz scrît ou ki vos î avoz bodjî.
Loukîz les [//wikimediafoundation.org/wiki/Terms_of_Use condicions d’ eployaedje] po saveur les ca et les ma.",
	'cant-delete-main-page' => "Vos n' poloz nén disfacer ou displaecî l' mwaisse pådje.",
);

/** Waray (Winaray)
 * @author JinJian
 * @author לערי ריינהארט
 */
$messages['war'] = array(
	'sitesupport' => 'Mga Donasyon',
	'group-accountcreator' => 'Mga maghirimo hin akawnt',
	'group-confirmed' => 'Mga gumaramit nga napamatud-an',
	'group-import' => 'Mga man-aambit',
	'group-ipblock-exempt' => 'Mga IP nga pinabaliwaray an pagpugong',
	'group-transwiki' => 'Mga man-aambit hin transwiki',
	'group-steward' => 'Mga tinapuran',
);

/** Wolof (Wolof)
 * @author Ibou
 */
$messages['wo'] = array(
	'sitesupport' => 'Joxe ag ndimbal',
);

/** Wu (吴语)
 */
$messages['wuu'] = array(
	'sitesupport' => '捐款',
);

/** Kalmyk (хальмг)
 * @author Huuchin
 */
$messages['xal'] = array(
	'sitesupport' => 'Өгх',
	'wikimedia-copyright' => 'Бичг <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike</a> зөвшлтин болзани орлһта, зәрм бәәдлт дәкәд болзан йоста бәәдг. Тодрхаһар <a href="//wikimediafoundation.org/wiki/Terms_of_Use/ru">Эдллһнә болзан</a> хәләтн.',
);

/** Xhosa (isiXhosa)
 */
$messages['xh'] = array(
	'sitesupport' => 'Amalizo',
);

/** Mingrelian (მარგალური)
 * @author Alsandro
 * @author Dato deutschland
 * @author Dawid Deutschland
 * @author Lika2672
 */
$messages['xmf'] = array(
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=xmf',
	'sitesupport' => 'აზარა',
	'tooltip-n-sitesupport' => 'ხუჯ დომკინით',
);

/** Yiddish (ייִדיש)
 * @author Nemo bis
 * @author Yidel
 * @author פוילישער
 */
$messages['yi'] = array(
	'wikimediamessages-desc' => 'וויקימעדיע ספעציפֿישע מעלדונגען',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=yi',
	'sitesupport' => 'בײַשטײַערן',
	'tooltip-n-sitesupport' => 'שטיצט אונז',
	'specialpages-group-contribution' => 'נדבה/געלטשאפן',
	'nstab-creator' => 'שאַפֿער',
	'nstab-institution' => 'אַנשטאַלט',
	'nstab-sequence' => 'נאכאַנאַדיקייט',
	'nstab-timedtext' => 'צײַט־טעקסט',
	'group-Ex_Administrator' => 'געוועזענע סיסאפן',
	'group-Ex_Administrator-member' => '{{GENDER:$1|געוועזענער סיסאפ|געוועזענע סיסאפ}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:געוועזענע ביוראקראטן',
	'group-Ex_Bureaucrat' => 'געוועזענע ביוראקראטן',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|געוועזענער ביוראקראַט|געוועזענע ביוראקראַט}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:געוועזענע ביוראקראטן',
	'group-Image-reviewer' => 'בילד רעצענזענטן',
	'group-Image-reviewer-member' => '{{GENDER:$1| בילד רעצענזענט}}',
	'grouppage-Image-reviewer' => '{{ns:project}}:בילדער רעצענזענטן',
	'group-OTRS-member' => 'OTRS מיטגלידער',
	'group-OTRS-member-member' => '{{GENDER:$1|OTRS מיטגליד}}',
	'grouppage-OTRS-member' => '{{ns:project}}:OTRS מיטגלידער',
	'group-abusefilter' => 'פֿילטער רעדאַקטירער',
	'group-abusefilter-member' => '{{GENDER:$1| פֿילטער רעדאַקטירער}}',
	'grouppage-abusefilter' => '{{ns:project}}:פֿילטער רעדאַקטירער',
	'group-accountcreator' => 'קאָנטע באַשאַפֿער',
	'group-accountcreator-member' => '{{GENDER:$1|קאָנטע באַשאַפֿער|קאָנטע באַשאַפֿערין}}',
	'grouppage-accountcreator' => '{{ns:project}}:קאָנטע באַשאַפֿער',
	'group-arbcom' => 'בוררות קאמיטעט מיטגלידער',
	'group-arbcom-member' => '{{GENDER:$1| בוררות קאמיטעט מיטגליד}}',
	'grouppage-arbcom' => '{{ns:project}}: בוררות קאמיטעט מיטגלידער',
	'group-autopatrolled' => 'אויטאפאַטראלירער',
	'group-autopatrolled-member' => '{{GENDER:$1|אויטאפאַטראלירער}}',
	'grouppage-autopatrolled' => '{{ns:project}}:אויטאפאַטראלירער',
	'group-autoreviewer' => 'אויטא־רעצענזענטן',
	'group-autoreviewer-member' => '{{GENDER:$1| אויטא־רעצענזענט}}',
	'grouppage-autoreviewer' => '{{ns:project}}:אויטא־רעצענזענטן',
	'group-bigexport' => 'גרויסע עקספּאָרטירער',
	'group-bigexport-member' => '{{GENDER:$1| גרויסער עקספּאָרטירער| גרויסע עקספּאָרטירער}}',
	'grouppage-bigexport' => '{{ns:project}}: גרויסע עקספּאָרטירער',
	'group-botadmin' => 'באטן מיט סיסאפ רעכטן',
	'group-botadmin-member' => '{{GENDER:$1|באט מיט סיסאפ רעכטן}}',
	'grouppage-botadmin' => '{{ns:project}}:באטן מיט סיסאפ רעכטן',
	'group-confirmed' => 'באַשטעטיגטע באַניצער',
	'group-confirmed-member' => '{{GENDER:$1|באַשטעטיגטער באַניצער| באַשטעטיגטע באַניצערין}}',
	'grouppage-confirmed' => '{{ns:project}}:באַשטעטיגטע באַניצער',
	'group-editprotected' => 'רעדאַקטירער פֿון באַשיצטע בלעטער',
	'group-editprotected-member' => '{{GENDER:$1|רעדאַקטירער פֿון באַשיצטע בלעטער}}',
	'grouppage-editprotected' => '{{ns:project}}:רעדאַקטירער פֿון באַשיצטע בלעטער',
	'group-eliminator' => 'אויסמעקער',
	'group-eliminator-member' => '{{GENDER:$1| אויסמעקער| אויסמעקערין}}',
	'grouppage-eliminator' => '{{ns:project}}:אויסמעקער',
	'group-filemover' => 'טעקע אַריבערפֿירער',
	'group-filemover-member' => 'טעקע {{GENDER:$1|אַריבערפֿירער|אַריבערפֿירערין}}',
	'grouppage-filemover' => '{{ns:project}}:טעקע אַריבערפֿירער',
	'group-flood' => 'באט באַניצער',
	'group-flood-member' => '{{GENDER:$1|באט באַניצער}}',
	'grouppage-flood' => '{{ns:project}}:באט באַניצער',
	'group-founder' => 'גרינדער',
	'group-founder-member' => '{{GENDER:$1|גרינדער}}',
	'grouppage-founder' => '{{ns:project}}:גרינדער',
	'group-import' => 'אימפארטירערס',
	'group-import-member' => '{{GENDER:$1| אימפארטירער| אימפארטירערין}}',
	'grouppage-import' => '{{ns:project}}:אימפארטירערס',
	'group-interface_editor' => 'באַניצער איבערפֿלאַך רעדאַקטירער',
	'group-interface_editor-member' => '{{GENDER:$1|באניצער איבערפלאך רעדאקטירער}}',
	'grouppage-interface_editor' => '{{ns:project}}:באניצער איבערפלאך רעדאקטירער',
	'group-ipblock-exempt' => 'IP בלאקירן באפֿרײַאונגען',
	'group-ipblock-exempt-member' => '{{GENDER:$1|IP בלאקירן באפֿרײַט}}',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP בלאקירן באפֿרײַאונג',
	'group-patroller' => 'פאטראלירער',
	'group-patroller-member' => '{{GENDER:$1|פאטראלירער|פאטראלירערין}}',
	'grouppage-patroller' => '{{ns:project}}:געוועזענע ביוראקראטן',
	'group-researcher' => 'פֿארשער',
	'group-researcher-member' => '{{GENDER:$1|פֿארשער|פֿארשערין}}',
	'grouppage-researcher' => '{{ns:project}}:פֿארשערס',
	'group-rollbacker' => 'צוריקדרייער',
	'group-rollbacker-member' => '{{GENDER:$1|צוריקדרייער|צוריקדרייערין}}',
	'grouppage-rollbacker' => '{{ns:project}}:צוריקדרייער',
	'group-transwiki' => 'אריבערוויקי אימפארטירער',
	'group-transwiki-member' => 'אריבערוויקי {{GENDER:$1|אימפארטירער|אימפארטירערין}}',
	'grouppage-transwiki' => '{{ns:project}}:אריבערוויקי אימפארטירער',
	'group-trusted' => 'פֿאַרלעסלעכע באַניצער',
	'group-trusted-member' => '{{GENDER:$1|פֿאַרלעסלעכער באַניצער|פֿאַרלעסלעכע באַניצערין}}',
	'grouppage-trusted' => '{{ns:project}}:פֿאַרלעסלעכע באַניצער',
	'group-uploader' => 'אַרויפֿלאָדער',
	'group-uploader-member' => '{{GENDER:$1|אַרויפֿלאָדער|אַרויפֿלאָדערין}}',
	'grouppage-uploader' => '{{ns:project}}: אַרויפֿלאָדער',
	'group-Global_bot' => 'גלאבאלע באטן',
	'group-Global_bot-member' => '{{GENDER:$1|גלאבאַלער באט}}',
	'group-Global_rollback' => 'גלאבאַלע צוריקדרייער',
	'group-Global_rollback-member' => '{{GENDER:$1|גלאבאַלער צוריקדרייער| גלאבאַלע צוריקדרייער}}',
	'group-Global_sysops' => 'גלאבאַלע סיסאָפּן',
	'group-Global_sysops-member' => '{{GENDER:$1|גלאבאַלער סיסאָפּ|גלאבאַלע סיסאָפּ}}',
	'group-Ombudsmen' => 'אמבודסמענער',
	'group-Ombudsmen-member' => '{{GENDER:$1|אמבודסמאן}}',
	'group-Staff' => 'שטאַב',
	'group-Staff-member' => '{{GENDER:$1|שטאַב}}',
	'group-editinterface' => 'באַניצער איבערפֿלאַך רעדאַקטירער',
	'group-editinterface-member' => '{{GENDER:$1|באַניצער איבערפֿלאַך רעדאַקטירער}}',
	'group-steward' => 'סטואַרדן',
	'group-steward-member' => '{{GENDER:$1|סטואַרד}}',
	'group-sysadmin' => 'סיסאפן',
	'group-sysadmin-member' => '{{GENDER:$1| סיסאפ}}',
	'group-Indic_Bots' => 'אינדישע באטן',
	'group-Indic_Bots-member' => '{{GENDER:$1|אינדישער באט}}',
	'group-New_wikis_importer' => 'נײַע וויקיס אימפארטירער',
	'group-New_wikis_importer-member' => '{{GENDER:$1|נײַע וויקיס אימפארטירער}}',
	'group-global-ipblock-exempt' => 'גלאבאלע IP בלאקירן באפֿרײַטע',
	'group-global-ipblock-exempt-member' => '{{GENDER:$1|גלאבאל IP בלאקירן באפֿרײַטער|גלאבאל IP בלאקירן באפֿרײַטע}}',
	'group-recursive-export' => 'רעקורסיווע עקספארטן',
	'group-recursive-export-member' => '{{GENDER:$1|רעקורסיוו עקספארטער}}',
	'group-translationadmin' => 'איבערזעצונג אדמיניסטראטארן',
	'group-translationadmin-member' => '{{GENDER:$1|איבערזעצונג אדמיניסטראטאר}}',
	'grouppage-translationadmin' => '{{ns:project}}:איבערזעצונג אדמיניסטראטארן',
	'group-centralnoticeadmin' => 'צענטראלע־מעלדונגען אדמיניסטראטארן',
	'group-centralnoticeadmin-member' => '{{GENDER:$1|צענטראלע־מעלדונגען אדמיניסטראטאר}}',
	'grouppage-centralnoticeadmin' => '{{ns:project}}:צענטראלע־מעלדונגען אדמיניסטראטארן',
	'group-coder' => 'פראגראַמירער',
	'group-coder-member' => '{{GENDER:$1|פראגראַמירער|פראגראַמירערין}}',
	'group-inactive' => 'אומאַקטיווע באַניצער',
	'group-inactive-member' => '{{GENDER:$1|אומאַקטיווער באַניצער|אומאַקטיווע באַניצערין}}',
	'grouppage-inactive' => '{{ns:project}}:אומאַקטיווע באַניצער',
	'shared-repo-name-shared' => 'וויקימעדיע קאמאנס',
	'wikimedia-copyright' => 'טעקסט איז פאראן לויטן <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons צושרייבן/טייל-גלייך ליצענץ</a>; קען אפשר זיין נאך תנאים.
זעט <a href="//wikimediafoundation.org/wiki/Terms_of_Use">תנאים פון באניצן</a> פֿאר פרטים.',
	'wikidata-shortcopyrightwarning' => 'בײַם קליקן אויף "{{int:wikibase-save}}" זענט איר מסכים צו די [//wikimediafoundation.org/wiki/Terms_of_Use ניצבאדינגונגען], און איר זענט מסכים בלי־חרטה פֿארעפֿנטלעכן אײַער בײַשטײַערונג אונטער דעם [//creativecommons.org/publicdomain/zero/1.0/ CC0 ליצענץ].',
	'wikimedia-copyrightwarning' => 'בײַם קליקן דאָס "{{int:savearticle}}" קנעפל, זענט איר מסכים צו די [//wikimediafoundation.org/wiki/Terms_of_Use ניצבאַדינגונגען] , און איר זענט מסכים אומאפענדערלעך צו באפרייען אייער ביישטייערונג אונטערן [//creativecommons.org/licenses/by-sa/3.0/ CC-BY-SA  ליצענץ 3.0] און דעם [//www.gnu.org/copyleft/fdl.html GFDL].
איר שטימט צו אז  א היפערלינק אדער URL איז גענוג צושרייבן אונטערן קאמאנס־ליצענץ.',
	'wikibase-sitelinks-wikivoyage' => 'וויקירייזע בלעטער פארלינקט מיט דעם אביעקט',
	'cant-delete-main-page' => 'מען קען נישט אויסמעקן אדער באַוועגן דעם הויפטבלאַט',
	'wikimedia-translationnotifications-signup-legal' => 'איר זענט מסכים אז ווען איר פארזארגט די אינפארמאציע צו דער וויקימעדיע פונדאציע מעגן מיר קאנטאקטירן אייך וועגן איבערזעצונגען אדער אנדערע טעמעס שייך צו דער וויקימעדיע באוועגונג וואס מיר האלטן וועט אינטרעסירן אײַך. איר זענט מסכים אז מען מעג אײַערע דאטן איינשפייכלערן אין די פאראייניגטע שטאטן פון אמעריקע און ווערט געהאלטן לויט אונזער [https://wikimediafoundation.org/wiki/Privacy_policy פריוואטקייט ריכטליניע]',
	'upload-more-photos-of-this-monument' => 'ארויפֿלאָדן נאך פֿאטאגראַפֿיעס פון דעם מאנומענט',
	'extdist-branch-REL1_21' => '1.21 (לעצטע סטאבילע מעדיעוויקי)',
	'createacct-helpusername-url' => '{{ns:Project}}:באניצער־נאמען ריכטליניע',
	'createacct-captcha-help-url' => '{{ns:Project}}:בעטן א קאנטע',
	'createacct-imgcaptcha-help' => 'בילד נישט זעבאר? [[{{MediaWiki:createacct-captcha-help-url}}|Request an account]]',
);

/** Yoruba (Yorùbá)
 * @author Demmy
 */
$messages['yo'] = array(
	'wikimediamessages-desc' => 'Àwọn ìránṣẹ́ Wikimedia nìkan',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=yo',
	'sitesupport' => 'Ṣe ìgbọ̀wọ́',
	'tooltip-n-sitesupport' => 'Tíwálẹ́yìn',
	'group-flood-member' => '{{GENDER:$1|oníṣe bot}}',
	'grouppage-founder' => '{{ns:project}}:Àwọn olùdásílẹ̀',
	'group-sysadmin' => 'Àwọn olùmójútó sístẹ́mù',
	'group-sysadmin-member' => '{{GENDER:$1|olùmójútó sístẹ́mù}}',
	'wikimedia-copyright' => 'Gbogbo ìkọ wà lábẹ́ <a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike License</a>; ó ṣe é ṣe kí àwọn ọ̀rọ̀ àdéhùn míràn tún wà.
Ẹ wo <a href="//wikimediafoundation.org/wiki/Terms_of_Use">Àwọn Ọ̀rọ̀ Àdéhùn Ìlò</a> fún ẹ̀kúnrẹ́rẹ́.',
	'wikimedia-copyrightwarning' => 'Nípa mímúpamọ́, ẹ gbà láláìṣeédápadà láti fi àfikún yín sílẹ̀ lábẹ́ [//creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] àti [//www.gnu.org/copyleft/fdl.html GFDL].
Ẹ gbà kí àwọn olùtúnlò míràn, o kéréjù pelú ìjápò tàbí URL sí ojúewé tí ẹ ṣàfikún sí, pe kí wọn ó dárúkọ yín.
Ẹ wo [//wikimediafoundation.org/wiki/Terms_of_Use Àwọn Ọ̀rọ̀ Àdéhùn Ìlò] fún ẹ̀kúnrẹ́rẹ́.', # Fuzzy
);

/** Cantonese (粵語)
 * @author Horacewai2
 * @author Waihorace
 */
$messages['yue'] = array(
	'wikimediamessages-desc' => 'Wikimedia特定訊息',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=yue',
	'sitesupport' => '慷慨解囊',
	'tooltip-n-sitesupport' => '資持我哋',
	'group-abusefilter' => '濫用過濾器編者',
	'group-abusefilter-member' => '濫用過濾器編者', # Fuzzy
	'grouppage-abusefilter' => '{{ns:project}}:濫用過濾器編者',
	'group-accountcreator' => '開戶專員',
	'group-accountcreator-member' => '開戶專員', # Fuzzy
	'grouppage-accountcreator' => '{{ns:project}}:開戶專員',
	'group-autopatrolled' => '自動複查員',
	'group-autopatrolled-member' => '自動巡查員', # Fuzzy
	'grouppage-autopatrolled' => '{{ns:project}}:自動巡查員',
	'group-autoreviewer' => '自動覆查者',
	'group-autoreviewer-member' => '自動覆查者', # Fuzzy
	'grouppage-autoreviewer' => '{{ns:project}}:自動覆查者',
	'group-bigexport' => '大型倒出者',
	'group-bigexport-member' => '大型倒出者', # Fuzzy
	'grouppage-bigexport' => '{{ns:project}}:大型倒出者',
	'group-confirmed' => '確認用戶',
	'group-confirmed-member' => '確認用戶', # Fuzzy
	'grouppage-confirmed' => '{{ns:project}}:確認用戶',
	'group-editprotected' => '保護頁面編者',
	'group-editprotected-member' => '已保護頁面編者', # Fuzzy
	'group-filemover' => '搬檔案者',
	'group-filemover-member' => '搬檔案', # Fuzzy
	'group-flood' => '機械人用戶',
	'group-flood-member' => '機械人用戶', # Fuzzy
	'group-founder' => '創辦人',
	'group-founder-member' => '創辦人', # Fuzzy
	'grouppage-founder' => '{{ns:project}}:創辦人',
	'group-import' => '匯入者',
	'group-import-member' => '匯入者', # Fuzzy
	'grouppage-import' => '{{ns:project}}:匯入者',
	'group-interface_editor' => '介面編者',
	'group-interface_editor-member' => '界面編輯者', # Fuzzy
	'group-ipblock-exempt' => 'IP封鎖例外者',
	'group-ipblock-exempt-member' => 'IP封鎖例外', # Fuzzy
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP封鎖例外',
	'group-patroller' => '巡邏員',
	'group-patroller-member' => '巡邏員', # Fuzzy
	'group-researcher' => '研究者',
	'group-researcher-member' => '研究者', # Fuzzy
	'group-rollbacker' => '反轉者',
	'group-rollbacker-member' => '反轉者', # Fuzzy
	'grouppage-rollbacker' => '{{ns:project}}:反轉者',
	'group-transwiki' => 'Transwiki匯入者',
	'group-transwiki-member' => 'Transwiki匯入者', # Fuzzy
	'grouppage-transwiki' => '{{ns:project}}:Transwiki匯入者',
	'group-trusted' => '可信戶',
	'group-Global_bot' => '全域機械人',
	'group-Global_bot-member' => '全域機械人', # Fuzzy
	'group-Global_rollback' => '全域反轉者',
	'group-Global_rollback-member' => '全域反轉者', # Fuzzy
	'group-Global_sysops' => '全域管理員',
	'group-Ombudsmen' => '申訴專員',
	'group-Ombudsmen-member' => '申訴專員', # Fuzzy
	'group-Staff' => '職員',
	'group-Staff-member' => '職員',
	'group-editinterface' => '界面編輯者',
	'group-editinterface-member' => '界面編輯者', # Fuzzy
	'group-steward' => '執行員',
	'group-steward-member' => '執行員', # Fuzzy
	'group-sysadmin' => '系統管理員',
	'group-sysadmin-member' => '系統管理員', # Fuzzy
	'group-coder' => '編碼員',
	'group-coder-member' => '編碼員', # Fuzzy
	'group-inactive' => '唔活躍嘅用戶',
	'group-inactive-member' => '唔活躍嘅用戶', # Fuzzy
	'grouppage-inactive' => '{{ns:project}}:唔活躍嘅用戶',
	'wikimedia-copyright' => '呢度嘅所有文字係根據<a href="//creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike 牌照</a>嘅條款發佈；可能會有附加嘅條款。
睇吓<a href="//wikimediafoundation.org/wiki/Terms_of_Use">使用條款</a>嘅細節。',
	'wikimedia-copyrightwarning' => '當保存嗰陣，你同意將你嘅貢獻喺[//creativecommons.org/licenses/by-sa/3.0/ 共享創意 署名－相同方式共享 3.0]同埋[//www.gnu.org/copyleft/fdl.html GNU自由文檔協議]發表。
你同意加你個名畀再利用者，最少，經過嘅超連結或者網址到你貢獻嘅版。
睇吓[//wikimediafoundation.org/wiki/Terms_of_Use 使用條款]嘅細節。', # Fuzzy
);

/** Zeeuws (Zeêuws)
 * @author NJ
 */
$messages['zea'] = array(
	'sitesupport' => 'Donaoties',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Anakmalaysia
 * @author Bencmq
 * @author Byfserag
 * @author Gaoxuewei
 * @author Hydra
 * @author Jimmy xu wrk
 * @author KaiesTse
 * @author Liangent
 * @author Liuxinyu970226
 * @author Nemo bis
 * @author PhiLiP
 * @author Qiyue2001
 * @author Shizhao
 * @author William915
 * @author Wmr89502270
 * @author Xiaomingyan
 * @author Yfdyh000
 */
$messages['zh-hans'] = array(
	'wikimediamessages-desc' => '维基媒体特定信息',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=zh-hans',
	'sitesupport' => '资助',
	'tooltip-n-sitesupport' => '资助我们',
	'specialpages-group-contribution' => '资助者/筹款人',
	'nstab-creator' => '创建者',
	'nstab-institution' => '机构',
	'nstab-sequence' => '序列',
	'nstab-timedtext' => '时间文字',
	'group-Ex_Administrator' => '前管理员',
	'group-Ex_Administrator-member' => '{{GENDER:$1|前管理员}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:前管理员',
	'group-Ex_Bureaucrat' => '前行政员',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|前行政员}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:前行政员',
	'group-Image-reviewer' => '图像审查者',
	'group-Image-reviewer-member' => '图像审查者',
	'grouppage-Image-reviewer' => '{{ns:project}}:图像审查者',
	'group-OTRS-member' => 'OTRS成员',
	'group-OTRS-member-member' => 'OTRS成员',
	'grouppage-OTRS-member' => '{{ns:project}}:OTRS成员',
	'group-abusefilter' => '滥用过滤器编辑者',
	'group-abusefilter-member' => '滥用过滤器编辑者',
	'grouppage-abusefilter' => '{{ns:project}}:滥用过滤器编辑者',
	'group-accountcreator' => '账户创建员',
	'group-accountcreator-member' => '账户创建员',
	'grouppage-accountcreator' => '{{ns:project}}:账户创建员',
	'group-arbcom' => '仲裁委员会成员',
	'group-arbcom-member' => '仲裁委员会成员',
	'grouppage-arbcom' => '{{ns:project}}:仲裁委员会成员',
	'group-autopatrolled' => '自动巡查者',
	'group-autopatrolled-member' => '自动巡查者',
	'grouppage-autopatrolled' => '{{ns:project}}:自动巡查者',
	'group-autoreviewer' => '审查豁免者',
	'group-autoreviewer-member' => '审查豁免者',
	'grouppage-autoreviewer' => '{{ns:project}}:审查豁免者',
	'group-bigexport' => '大量导出者',
	'group-bigexport-member' => '大量导出者',
	'grouppage-bigexport' => '{{ns:project}}:大量导出者',
	'group-botadmin' => '有管理员权限的机器人',
	'group-botadmin-member' => '{{GENDER:$1|有管理员权限的机器人}}',
	'grouppage-botadmin' => '{{ns:project}}:有管理员权限的机器人',
	'group-confirmed' => '确认用户',
	'group-confirmed-member' => '确认用户',
	'grouppage-confirmed' => '{{ns:project}}:确认用户',
	'group-editprotected' => '受保护页面编辑者',
	'group-editprotected-member' => '受保护页面编辑者',
	'grouppage-editprotected' => '{{ns:project}}:受保护页面编辑者',
	'group-eliminator' => '消除者',
	'group-eliminator-member' => '消除者',
	'grouppage-eliminator' => '{{ns:project}}:消除者',
	'group-filemover' => '文件移动者',
	'group-filemover-member' => '文件移动者',
	'grouppage-filemover' => '{{ns:project}}:文件移动者',
	'group-flood' => '机器人用户',
	'group-flood-member' => '机器人用户',
	'grouppage-flood' => '{{ns:project}}:机器人用户',
	'group-founder' => '创始人',
	'group-founder-member' => '创始人',
	'grouppage-founder' => '{{ns:project}}:创始人',
	'group-import' => '导入者',
	'group-import-member' => '导入者',
	'grouppage-import' => '{{ns:project}}:导入者',
	'group-interface_editor' => '界面编辑者',
	'group-interface_editor-member' => '界面编辑者',
	'grouppage-interface_editor' => '{{ns:project}}:界面编辑者',
	'group-ipblock-exempt' => 'IP封禁豁免者',
	'group-ipblock-exempt-member' => 'IP封禁豁免者',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP封禁豁免者',
	'group-patroller' => '巡查员',
	'group-patroller-member' => '{{GENDER:$1|巡查员}}',
	'grouppage-patroller' => '{{ns:project}}:巡查员',
	'group-researcher' => '研究员',
	'group-researcher-member' => '{{GENDER:$1|研究员}}',
	'grouppage-researcher' => '{{ns:project}}:研究员',
	'group-rollbacker' => '回退员',
	'group-rollbacker-member' => '{{GENDER:$1|回退员}}',
	'grouppage-rollbacker' => '{{ns:project}}:回退员',
	'group-transwiki' => '跨维基导入者',
	'group-transwiki-member' => '{{GENDER:$1|跨维基导入者}}',
	'grouppage-transwiki' => '{{ns:project}}:跨维基导入者',
	'group-trusted' => '受信任用户',
	'group-trusted-member' => '{{GENDER:$1|受信任用户}}',
	'grouppage-trusted' => '{{ns:project}}:受信任用戶',
	'group-uploader' => '上传文件用户',
	'group-uploader-member' => '{{GENDER:$1|上传者}}',
	'grouppage-uploader' => '{{ns:project}}:上传文件用户',
	'group-Global_bot' => '全域机器人',
	'group-Global_bot-member' => '{{GENDER:$1|全域机器人}}',
	'group-Global_rollback' => '全域回退员',
	'group-Global_rollback-member' => '{{GENDER:$1|全域回退员}}',
	'group-Global_sysops' => '全域管理员',
	'group-Global_sysops-member' => '{{GENDER:$1|全域管理员}}',
	'group-Ombudsmen' => '申诉专员',
	'group-Ombudsmen-member' => '{{GENDER:$1|申诉专员}}',
	'group-Staff' => '基金会职员',
	'group-Staff-member' => '基金会职员',
	'grouppage-Staff' => 'Foundation:基金会职员',
	'group-editinterface' => '界面编辑者',
	'group-editinterface-member' => '{{GENDER:$1|界面编辑者}}',
	'group-steward' => '监管员',
	'group-steward-member' => '{{GENDER:$1|监管员}}',
	'group-sysadmin' => '系统管理员',
	'group-sysadmin-member' => '{{GENDER:$1|系统管理员}}',
	'group-API_High_Limit_Requestor' => 'API 高限请求者',
	'group-API_High_Limit_Requestor-member' => '{{GENDER:$1|API 高限请求者}}',
	'group-Indic_Bots' => '印度语言维基机器',
	'group-Indic_Bots-member' => '{{GENDER:$1|印度语言维基机器}}',
	'group-New_wikis_importer' => '新维基导入者',
	'group-New_wikis_importer-member' => '{{GENDER:$1|新维基导入者}}',
	'group-global-ipblock-exempt' => '全局IP封禁例外',
	'group-global-ipblock-exempt-member' => '{{GENDER:$1|全局IP封禁例外}}',
	'group-recursive-export' => '递归导出',
	'group-recursive-export-member' => '{{GENDER:$1|递归导出者}}',
	'group-translationadmin' => '翻译管理员',
	'group-translationadmin-member' => '{{GENDER:$1|翻译管理员}}',
	'grouppage-translationadmin' => '{{ns:project}}:翻译管理员',
	'group-centralnoticeadmin' => '中央通知管理员',
	'group-centralnoticeadmin-member' => '{{GENDER:$1|中央通知管理员}}',
	'grouppage-centralnoticeadmin' => '{{ns:project}}:中央通知管理员',
	'group-coder' => '程序员',
	'group-coder-member' => '{{GENDER:$1|程序员}}',
	'grouppage-coder' => '{{ns:project}}:程序员', # Fuzzy
	'group-inactive' => '不活跃用户',
	'group-inactive-member' => '{{GENDER:$1|不活跃用户}}',
	'grouppage-inactive' => '{{ns:project}}:不活跃用户',
	'shared-repo-name-shared' => '维基共享资源',
	'wikimedia-copyright' => '本网站文字内容采用<a href="//creativecommons.org/licenses/by-sa/3.0/deed.zh">知识共享“署名-相同方式共享”许可协议</a>授权，附加条款可能应用。详情请见<a href="//wikimediafoundation.org/wiki/Terms_of_Use">使用条款</a>。',
	'wikidata-copyright' => '所有来自“主要”和“属性”命名空间的结构化数据在<a href="//creativecommons.org/publicdomain/zero/1.0/" title="Definition of the Creative Commons CC0 License">知识共享CC0协议</a>下可用；
其他命名空间中的文本在<a href="//creativecommons.org/licenses/by-sa/3.0/" title="Definition of the知识共享 署名-相同方式共享协议">知识共享 署名-相同方式共享协议</a>下可用；附加条款可能适用。
参见<a href="//wikimediafoundation.org/wiki/Terms_of_Use" title="维基媒体基金会的使用条款">使用条款</a>了解细节。',
	'wikidata-shortcopyrightwarning' => '点击“{{int:wikibase-save}}”，即表示你认同[//wikimediafoundation.org/wiki/Terms_of_use 使用条款]，并义无反顾地同意采用[//creativecommons.org/publicdomain/zero/1.0/ CC0许可协议]发表你的贡献。',
	'wikimedia-copyrightwarning' => '点击“{{int:savearticle}}”按钮，即表示你认同[//wikimediafoundation.org/wiki/Terms_of_Use 使用条款]，并义无反顾地同意采用[//zh.wikipedia.org/wiki/Wikipedia:CC_BY-SA_3.0%E5%8D%8F%E8%AE%AE%E6%96%87%E6%9C%AC CC-BY-SA 3.0许可协议]和[//zh.wikipedia.org/wiki/Wikipedia:GNU%E8%87%AA%E7%94%B1%E6%96%87%E6%A1%A3%E8%AE%B8%E5%8F%AF%E8%AF%81%E6%96%87%E6%9C%AC GFDL]发表你的贡献。你认同超链接或URL是充分的知识共享许可协议所述署名。',
	'wikibase-sitelinks-wikivoyage' => '链接到维基旅游项目的页面列表',
	'cant-delete-main-page' => '你不能删除或移动首页。',
	'wikimedia-translationnotifications-signup-legal' => '你同意维基媒体基金会可能就有关翻译或我们认为你有兴趣的维基媒体发展事项去联络你。你亦同意我们将你的资料根据[https://wikimediafoundation.org/wiki/Privacy_policy 我们的私隐政策]存放于美国。',
	'upload-more-photos-of-this-monument' => '上载更多此古迹的照片',
	'extdist-branch-master' => '主干(master)（最新开发版本）',
	'extdist-branch-REL1_21' => '1.21（最新稳定版MediaWiki）',
	'createacct-helpusername-url' => '{{ns:Project}}:用户名',
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|(帮我选择)]]',
	'createacct-captcha-help-url' => '{{ns:Project}}:账号请求',
	'createacct-imgcaptcha-help' => '无法看到图像？[[{{MediaWiki:createacct-captcha-help-url}}|申请账户]]',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Alexsh
 * @author Anakmalaysia
 * @author Horacewai2
 * @author KaiesTse
 * @author Liangent
 * @author Mark85296341
 * @author Nemo bis
 * @author Shirayuki
 * @author Simon Shek
 * @author Waihorace
 * @author William915
 * @author Wong128hk
 * @author Wrightbus
 * @author Yfdyh000
 */
$messages['zh-hant'] = array(
	'wikimediamessages-desc' => '維基媒體特定訊息',
	'sitesupport-url' => 'https://donate.wikimedia.org/?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous&uselang=zh-hant',
	'sitesupport' => '贊助',
	'tooltip-n-sitesupport' => '資助我們',
	'specialpages-group-contribution' => '貢獻／募捐者',
	'nstab-creator' => '建立者',
	'nstab-institution' => '機構',
	'nstab-sequence' => '序列',
	'nstab-timedtext' => '時間文字',
	'group-Ex_Administrator' => '前管理員',
	'group-Ex_Administrator-member' => '{{GENDER:$1|前管理員}}',
	'grouppage-Ex_Administrator' => '{{ns:project}}:前管理員',
	'group-Ex_Bureaucrat' => '前行政員',
	'group-Ex_Bureaucrat-member' => '{{GENDER:$1|前行政員}}',
	'grouppage-Ex_Bureaucrat' => '{{ns:project}}:前行政員',
	'group-Image-reviewer' => '圖像審查者',
	'group-Image-reviewer-member' => '圖像審查者',
	'grouppage-Image-reviewer' => '{{ns:project}}:圖像審查者',
	'group-OTRS-member' => 'OTRS成員',
	'group-OTRS-member-member' => 'OTRS成員',
	'grouppage-OTRS-member' => '{{ns:project}}:OTRS成員',
	'group-abusefilter' => '濫用過瀘器編輯者',
	'group-abusefilter-member' => '濫用過瀘器編輯者',
	'grouppage-abusefilter' => '{{ns:project}}:濫用過濾器編輯者',
	'group-accountcreator' => '帳號建立者',
	'group-accountcreator-member' => '賬戶創建員',
	'grouppage-accountcreator' => '{{ns:project}}:帳戶建立員',
	'group-arbcom' => '仲裁委員會成員',
	'group-arbcom-member' => '仲裁委員會委員',
	'grouppage-arbcom' => '{{ns:project}}:仲裁委員會成員',
	'group-autopatrolled' => '自動巡查員',
	'group-autopatrolled-member' => '自動巡查員',
	'grouppage-autopatrolled' => '{{ns:project}}:自動巡查員',
	'group-autoreviewer' => '巡查豁免者',
	'group-autoreviewer-member' => '巡查豁免者',
	'grouppage-autoreviewer' => '{{ns:project}}:巡查豁免者',
	'group-bigexport' => '大量匯出者',
	'group-bigexport-member' => '大量匯出者',
	'grouppage-bigexport' => '{{ns:project}}:大量匯出者',
	'group-botadmin' => '具有管理員權限的機器人',
	'group-botadmin-member' => '{{GENDER:$1|具有管理員權限的機器人}}',
	'grouppage-botadmin' => '{{ns:project}}:有管理員權限的機器人',
	'group-confirmed' => '確認用戶',
	'group-confirmed-member' => '已確認用戶',
	'grouppage-confirmed' => '{{ns:project}}:已確認用戶',
	'group-editprotected' => '已保護的頁面編者',
	'group-editprotected-member' => '受保護頁面編輯者',
	'grouppage-editprotected' => '{{ns:project}}:被保護頁面編者',
	'group-eliminator' => '刪除者',
	'group-eliminator-member' => '刪除者',
	'grouppage-eliminator' => '{{ns:project}}:刪除者',
	'group-filemover' => '檔案移動員',
	'group-filemover-member' => '檔案移動員',
	'grouppage-filemover' => '{{ns:project}}:檔案移動員',
	'group-flood' => '機器人用戶',
	'group-flood-member' => '機器人用戶',
	'grouppage-flood' => '{{ns:project}}:機器人',
	'group-founder' => '創辦人',
	'group-founder-member' => '創辦人',
	'grouppage-founder' => '{{ns:project}}:創辦人',
	'group-import' => '匯入者',
	'group-import-member' => '導入者',
	'grouppage-import' => '{{ns:project}}:匯入者',
	'group-interface_editor' => '界面編輯者',
	'group-interface_editor-member' => '{{GENDER:$1|界面編輯者}}',
	'grouppage-interface_editor' => '{{ns:project}}:介面編輯者',
	'group-ipblock-exempt' => 'IP封禁豁免者',
	'group-ipblock-exempt-member' => 'IP封禁豁免者',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP封禁豁免者',
	'group-patroller' => '巡查員',
	'group-patroller-member' => '{{GENDER:$1|巡查員}}',
	'grouppage-patroller' => '{{ns:project}}:巡查員',
	'group-researcher' => '研究人員',
	'group-researcher-member' => '{{GENDER:$1|研究人員}}',
	'grouppage-researcher' => '{{ns:project}}:研究人員',
	'group-rollbacker' => '回退員',
	'group-rollbacker-member' => '{{GENDER:$1|回退員}}',
	'grouppage-rollbacker' => '{{ns:project}}:回退員',
	'group-transwiki' => '跨維基匯入者',
	'group-transwiki-member' => '{{GENDER:$1|跨維基匯入者}}',
	'grouppage-transwiki' => '{{ns:project}}:跨維基匯入者',
	'group-trusted' => '受信任的用戶',
	'group-trusted-member' => '{{GENDER:$1|受信任用戶}}',
	'grouppage-trusted' => '{{ns:project}}:受信任的用戶',
	'group-Global_bot' => '全域機器人',
	'group-Global_bot-member' => '{{GENDER:$1|全域機器人}}',
	'group-Global_rollback' => '全域反轉者',
	'group-Global_rollback-member' => '{{GENDER:$1|全域回退員}}',
	'group-Global_sysops' => '全域管理員',
	'group-Global_sysops-member' => '{{GENDER:$1|全域管理員}}',
	'group-Ombudsmen' => '申訴專員',
	'group-Ombudsmen-member' => '{{GENDER:$1|申訴專員}}',
	'group-Staff' => '職員',
	'group-Staff-member' => '{{GENDER:$1|職員}}',
	'grouppage-Staff' => 'Foundation:職員',
	'group-editinterface' => '界面編輯者',
	'group-editinterface-member' => '{{GENDER:$1|界面編輯者}}',
	'group-steward' => '監管員',
	'group-steward-member' => '{{GENDER:$1|監管員}}',
	'group-sysadmin' => '系統管理員',
	'group-sysadmin-member' => '{{GENDER:$1|系統管理員}}',
	'group-API_High_Limit_Requestor' => 'API高用量要求者',
	'group-API_High_Limit_Requestor-member' => '{{GENDER:$1|API高用量要求者}}',
	'group-Indic_Bots' => '獨立機器人',
	'group-Indic_Bots-member' => '{{GENDER:$1|獨立機器人}}',
	'group-New_wikis_importer' => '新wiki導入員',
	'group-New_wikis_importer-member' => '{{GENDER:$1|新wiki導入員}}',
	'group-global-ipblock-exempt' => '全域IP封禁豁免',
	'group-global-ipblock-exempt-member' => '{{GENDER:$1|全域IP封禁豁免}}',
	'group-recursive-export' => '遞回匯出員',
	'group-recursive-export-member' => '{{GENDER:$1|遞回匯出員}}',
	'group-translationadmin' => '翻譯管理員',
	'group-translationadmin-member' => '{{GENDER:$1|翻譯管理員}}',
	'grouppage-translationadmin' => '{{ns:project}}:翻譯管理員',
	'group-centralnoticeadmin' => '中央通知管理員',
	'group-centralnoticeadmin-member' => '{{GENDER:$1|中央通知管理員}}',
	'grouppage-centralnoticeadmin' => '{{ns:project}}:中央通知管理員',
	'group-coder' => '編程人員',
	'group-coder-member' => '{{GENDER:$1|編程人員}}',
	'group-inactive' => '不活躍的用戶',
	'group-inactive-member' => '{{GENDER:$1|不活躍用戶}}',
	'grouppage-inactive' => '{{ns:project}}:不活躍的用戶',
	'shared-repo-name-shared' => '維基共享資源',
	'wikimedia-copyright' => '本站的全部文字在<a "href="{{localurle:Wikipedia:CC-by-sa-3.0協議文本}}"title="Wikipedia:CC-by-sa-3.0協議文本">知識共享署名 - 相同方式共享3.0協議</a>之條款下提供，附加條款亦可能應用。（請參閱 <a href="//wikimediafoundation.org/wiki/Terms_of_Use">使用條款</a>）',
	'wikidata-copyright' => '所有來自主和屬性名字空間的結構化數據以<a href="//creativecommons.org/publicdomain/zero/1.0/" title="Definition of the Creative Commons CC0 License">知識共享CC0協議</a>下發佈； 其他名字空間中的文本在<a href="//creativecommons.org/licenses/by-sa/3.0/" title="Definition of the知識共享署名-相同方式共享協議">知識共享署名-相同方式共享協議</a>下發佈；附加條款可能適用。參見<a href="//wikimediafoundation.org/wiki/Terms_of_Use" title="維基媒體基金會的使用條款">使用條款</a>了解細節。',
	'wikidata-shortcopyrightwarning' => '點擊「保存」表示您同意[https://wikimediafoundation.org/wiki/Terms_of_Use 使用條款]，並且您不可撤銷地同意以[https://creativecommons.org/publicdomain/zero/1.0/ CC0授權]發布您的貢獻。',
	'wikimedia-copyrightwarning' => '一旦點擊「{{int:savearticle}}」按鈕，就表示你同意[//wikimediafoundation.org/wiki/Terms_of_Use 使用條款]，並採用[//creativecommons.org/licenses/by-sa/3.0/deed.zh_TW CC BY-SA 3.0許可協議]和[//zh.wikipedia.org/wiki/Wikipedia:GNU自由文档许可证文本 GFDL]不可逆地發表你的貢獻。
你同意超鏈接或URL足以作為創作共享協議的署名。',
	'cant-delete-main-page' => '您不能刪除或移動首頁。',
	'wikimedia-translationnotifications-signup-legal' => '你同意維基媒體基金會可能就有關翻譯或我們認為你有興趣的維基媒體發展事項去聯絡你。你亦同意我們將你的資料根據[https://wikimediafoundation.org/wiki/Privacy_policy 我們的私隱政策]存放於美國。',
	'upload-more-photos-of-this-monument' => '上載更多此古蹟的圖片',
	'extdist-branch-master' => '主幹 (最新開發版本)',
	'extdist-branch-REL1_21' => '1.21 (最新穩定版本的MediaWiki)',
	'createacct-helpusername-url' => '{{ns:Project}}:用戶名方針',
	'createacct-helpusername' => '[[{{MediaWiki:createacct-helpusername-url}}|（幫我選擇）]]',
	'createacct-captcha-help-url' => '{{ns:Project}}:請求建立用戶',
	'createacct-imgcaptcha-help' => '無法看到圖像嗎？[[{{MediaWiki:createacct-captcha-help-url}}|請求建立用戶]]',
);

/** Chinese (Hong Kong) (‪中文(香港)‬)
 * @author KaiesTse
 */
$messages['zh-hk'] = array(
	'group-Global_bot' => '全域機械人',
	'group-Global_bot-member' => '全域機械人',
	'wikimedia-copyright' => '本站的全部文字在<a "href="{{localurle:Wikipedia:CC-by-sa-3.0協議文本}}"title="Wikipedia:CC-by-sa-3.0協議文本">共享創意 署名-相同方式共享 3.0</a>協議之條款下提供，同時或受附加條款約束。（請參閱 <a href="//wikimediafoundation.org/wiki/Terms_of_Use">使用條款</a>）',
);

/** Zulu (isiZulu)
 * @author לערי ריינהארט
 */
$messages['zu'] = array(
	'sitesupport' => 'Izipho',
);
