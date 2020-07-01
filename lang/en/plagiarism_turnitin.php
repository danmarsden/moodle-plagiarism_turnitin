<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package   plagiarism_turnitin
 * @copyright 2012 iParadigms LLC
 */

/*
 * To change this template, choose Tools | Templates.
 * and open the template in the editor.
 */

// General.
$string['pluginname'] = 'Turnitin plagiarism plugin';
$string['turnitin'] = 'Turnitin';
$string['connecttesterror'] = 'There was an error connecting to Turnitin the return error message is below:<br />';

// Assignment Settings.
$string['turnitin:enable'] = 'Enable Turnitin';
$string['excludebiblio'] = 'Exclude Bibliography';
$string['excludebiblio_help'] = 'This setting allows the instructor to choose to exclude text appearing in the bibliography, works cited, or references sections of student papers from being checked for matches when generating Similarity Reports. This setting can be overridden in individual Similarity Reports.';
$string['excludequoted'] = 'Exclude Quoted Material';
$string['excludequoted_help'] = 'This setting allows the instructor to choose to exclude text appearing in the quotes from being checked for matches when generating Similarity Reports. This setting can be overridden in individual Similarity Reports.';
$string['excludevalue'] = 'Exclude Small Matches';
$string['excludesmallmatchesvalue'] = 'Exclusion Value';
$string['excludevalue_help'] = 'This setting allows the instructor to choose to exclude matches that are not of sufficient length (determined by the instructor) from being considered when generating Similarity Reports. This setting can be overridden in individual Similarity Reports.';
$string['excludewords'] = 'Words';
$string['excludepercent'] = 'Percent';
$string['norubric'] = 'No rubric';
$string['otherrubric'] = 'Use rubric belonging to other instructor';
$string['attachrubric'] = 'Attach a rubric to this assignment';
$string['launchrubricmanager'] = 'Launch Rubric Manager';
$string['attachrubricnote'] = 'Note: students will be able to view attached rubrics and their content prior to submitting.';
$string['erater_handbook_advanced'] = 'Advanced';
$string['erater_handbook_highschool'] = 'High School';
$string['erater_handbook_middleschool'] = 'Middle School';
$string['erater_handbook_elementary'] = 'Elementary School';
$string['erater_handbook_learners'] = 'English Learners';
$string['erater_dictionary_enus'] = 'US English Dictionary';
$string['erater_dictionary_engb'] = 'UK English Dictionary';
$string['erater_dictionary_en'] = 'Both US and UK English Dictionaries';
$string['erater'] = 'Enable e-rater grammar check';
$string['erater_handbook'] = 'ETS&copy; Handbook';
$string['erater_dictionary'] = 'e-rater Dictionary';
$string['erater_categories'] = 'e-rater Categories';
$string['erater_spelling'] = 'Spelling';
$string['erater_grammar'] = 'Grammar';
$string['erater_usage'] = 'Usage';
$string['erater_mechanics'] = 'Mechanics';
$string['erater_style'] = 'Style';
$string['anonblindmarkingnote'] = 'Note: The separate Turnitin anonymous marking setting has been removed. Turnitin will use Moodle\'s blind marking setting to determine the anonymous marking setting.';
$string['transmatch'] = 'Translated Matching';
$string['genduedate'] = 'Generate reports on due date (students can resubmit until due date)';
$string['genimmediately1'] = 'Generate reports immediately (students cannot resubmit)';
$string['genimmediately2'] = 'Generate reports immediately (students can resubmit until due date): After {$a->num_resubmissions} resubmissions, reports generate after {$a->num_hours} hours';
$string['launchquickmarkmanager'] = 'Launch Quickmark Manager';
$string['launchpeermarkmanager'] = 'Launch Peermark Manager';
$string['studentreports'] = 'Display Similarity Reports to Students';
$string['studentreports_help'] = 'Allows you to display Turnitin similarity reports to student users. If set to yes the similarity report generated by Turnitin are available for the student to view.';
$string['submitondraft'] = 'Submit file when first uploaded';
$string['submitonfinal'] = 'Submit file when student sends for marking';
$string['draftsubmit'] = 'When should the file be submitted to Turnitin?';
$string['allownonor'] = 'Allow submission of any file type?';
$string['allownonor_help'] = 'This setting will allow any file type to be submitted. With this option set to &#34;Yes&#34;, submissions will be checked for similarity where possible, submissions will be available for download and GradeMark feedback tools will be available where possible.';
$string['norepository'] = 'No Repository';
$string['standardrepository'] = 'Standard Repository';
$string['submitpapersto'] = 'Store Student Papers';
$string['turnitin_score_refresh_alert'] = 'There are some scores that need refreshing';
$string['institutionalrepository'] = 'Institutional Repository (Where Applicable)';
$string['submitpapersto_help'] = '<strong>No Repository: </strong><br />Turnitin is instructed to not store submitted documents to any repository. We will only process the paper to perform the initial similarity check.<br /><br /><strong>Standard Repository: </strong><br />Turnitin will store a copy of the submitted document only in the Standard Repository. By choosing this option, Turnitin is instructed to only use stored documents to make similarity checks against any documents submitted in the future.<br /><br /><strong>Institutional Repository (Where Applicable): </strong><br />Choosing this option instructs Turnitin to only add submitted documents to a repository private to your institution. Similarity checks to the submitted documents will only be made by other instructors within your institution.';
$string['checkagainstnote'] = 'Note: If you do not select "Yes" for at least one of the "Check against..." options below then a Similarity report will NOT be generated.';
$string['spapercheck'] = 'Check against stored student papers';
$string['spapercheck_help'] = 'Check against the Turnitin student paper repository when processing Originality Reports for papers. The similarity index percentage may decrease if this is de-selected.';
$string['internetcheck'] = 'Check against internet';
$string['internetcheck_help'] = 'Check against the Turnitin internet repository when processing Originality Reports for papers. The similarity index percentage may decrease if this is de-selected.';
$string['journalcheck'] = 'Check against journals,<br />periodicals and publications';
$string['journalcheck_help'] = 'Check against the Turnitin journals, periodicals and publications repository when processing Originality Reports for papers. The similarity index percentage may decrease if this is de-selected.';
$string['compareinstitution'] = 'Compare submitted files with papers submitted within this institution';
$string['reportgenspeed'] = 'Report Generation Speed';
$string['reportgenspeed_help'] = 'There are three options for this assignment setting: &#39;Generate reports immediately (resubmissions are not allowed)&#39;, &#39;Generate reports immediately (resubmissions are allowed until due date)&#39;, and &#39;Generate reports on due date (resubmissions are allowed until due date)&#39;<br /><br />The option &#39;Generate reports immediately (resubmissions are not allowed)&#39; generates the Originality Report immediately when a student makes a submission. With this option selected your students will not be able to resubmit to the assignment.<br /><br />To allow resubmissions, select &#39;Generate reports immediately (resubmissions are allowed until due date)&#39; option. This allows students to continuously resubmit papers to the assignment until the due date. It may take up to 24 hours to process Originality Reports for resubmissions.<br /><br />The option &#39;Generate reports on due date (resubmissions are allowed until due date)&#39; will only generate an Originality Report on the assignment&#39;s due date. This setting will make it so all papers submitted to the assignment will be compared against each other when the Originality Reports are created.';
$string['locked_message'] = 'Locked message';
$string['locked_message_help'] = 'If any settings are locked, this message is shown to say why.';
$string['locked_message_default'] = 'This setting is locked at the site level';
$string['sharedrubric'] = 'Shared Rubric';
$string['turnitinrefreshsubmissions'] = 'Refresh Submissions';
$string['turnitinrefreshingsubmissions'] = 'Refreshing Submissions';
$string['turnitinppulapre'] = 'To submit a file to Turnitin you must first accept our EULA. Choosing to not accept our EULA will submit your file to Moodle only. Click here to accept.';
$string['noscriptula'] = '(As you do not have javascript enabled you will have to manually refresh this page before you can make a submission after accepting the Turnitin User Agreement)';
$string['filedoesnotexist'] = 'File has been deleted';
$string['reportgenspeed_resubmission'] = 'You have already submitted a paper to this assignment and a Similarity Report was generated for your submission. If you choose to resubmit your paper, your earlier submission will be replaced and a new report will be generated. After {$a->num_resubmissions} resubmissions, you will need to wait {$a->num_hours} hours after a resubmission to see a new Similarity Report.';

// Plugin settings.
$string['config'] = 'Configuration';
$string['defaults'] = 'Default Settings';
$string['showusage'] = 'Show Data Dump';
$string['saveusage'] = 'Save Data Dump';
$string['errors'] = 'Errors';
$string['turnitinconfig'] = 'Turnitin Plagiarism Plugin Configuration';
$string['tiiexplain'] = 'Turnitin is a commercial product and you must have a paid subscription to use this service for more information see <a href=http://docs.moodle.org/en/Turnitin_administration>http://docs.moodle.org/en/Turnitin_administration</a>';
$string['useturnitin'] = 'Enable Turnitin';
$string['useturnitin_mod'] = 'Enable Turnitin for {$a}';
$string['turnitindefaults'] = 'Turnitin plagiarism plugin default settings';
$string['defaultsdesc'] = 'The following settings are the defaults set when enabling Turnitin within an Activity Module';
$string['turnitinpluginsettings'] = 'Turnitin plagiarism plugin settings';
$string['pperrorsdesc'] = 'There has been a problem in trying to upload the files below to Turnitin. To resubmit, select the files you wish to resubmit and press the resubmit button. These will then be processed the next time the cron is run.';
$string['pperrorssuccess'] = 'The files you selected have been resubmitted and will be processed by the cron.';
$string['pperrorsfail'] = 'There was a problem with some of the files you selected, A new cron event could not be created for them.';
$string['resubmitselected'] = 'Resubmit Selected Files';
$string['deleteconfirm'] = 'Are you sure you want to delete this submission?\n\nThis action cannot be undone.';
$string['deletesubmission'] = 'Delete Submission';
$string['semptytable'] = 'No results found.';
$string['configupdated'] = 'Configuration updated';
$string['defaultupdated'] = 'Turnitin defaults updated';
$string['notavailableyet'] = 'Not available';
$string['resubmittoturnitin'] = 'Resubmit to Turnitin';
$string['resubmitting'] = 'Resubmitting';
$string['id'] = 'Id';
$string['student'] = 'Student';
$string['course'] = 'Course';
$string['module'] = 'Module';

$string['tiiaccountconfig'] = 'Turnitin Account Configuration';
$string['turnitinaccountid'] = 'Turnitin Account ID';
$string['turnitinsecretkey'] = 'Turnitin Shared Key';
$string['turnitinapiurl'] = 'Turnitin API URL';
$string['tiidebugginglogs'] = 'Debugging and Logging';
$string['turnitindiagnostic'] = 'Enable Diagnostic Mode';
$string['turnitindiagnostic_desc'] = '<b>[Caution]</b><br />Enable Diagnostic mode only to track down problems with the Turnitin API.';
$string['tiiaccountsettings_desc'] = 'Please ensure these settings match those configured in your Turnitin account, otherwise you may experience issues with assignment creation and/or student submissions.';
$string['tiiaccountsettings'] = 'Turnitin Account Settings';
$string['turnitinusegrademark'] = 'Use GradeMark';
$string['turnitinusegrademark_desc'] = 'Choose whether to use GradeMark to grade submissions.<br /><i>(This is only available to those that have GradeMark configured for their account)</i>';
$string['turnitinenablepeermark'] = 'Enable Peermark Assignments';
$string['turnitinenablepeermark_desc'] = 'Choose whether to allow the creation of Peermark Assignments<br/><i>(This is only available to those that have Peermark configured for their account)</i>';
$string['turnitinuseerater'] = 'Enable ETS&copy;';
$string['turnitinuseerater_desc'] = 'Choose whether to enable ETS&copy; grammar checking.<br /><i>(Enable this option only if ETS&copy; e-rater is enabled on your Turnitin account)</i>';
$string['transmatch_desc'] = 'Determines whether Translated Matching will be available as a setting on the assignment set up screen.<br /><i>(Enable this option only if Translated Matching is enabled on your Turnitin account)</i>';
$string['repositoryoptions_0'] = 'Enable instructor standard repository options';
$string['repositoryoptions_1'] = 'Enable instructor expanded repository options';
$string['repositoryoptions_2'] = 'Submit all papers to the standard repository';
$string['repositoryoptions_3'] = 'Do not submit any papers into a repository';
$string['repositoryoptions_4'] = 'Submit all papers to the institutional repository';
$string['turnitinrepositoryoptions'] = 'Paper Repository Assignments';
$string['turnitinrepositoryoptions_desc'] = 'Choose the repository options for Turnitin Assignments.<br /><i>(An Institutional Repository is only available to those that have this enabled for their account)</i>';
$string['tiimiscsettings'] = 'Miscellaneous Plugin Settings';
$string['pp_agreement_default'] = 'I confirm that this submission is my own work and I accept all responsibility for any copyright infringement that may occur as a result of this submission.';
$string['pp_agreement_desc'] = '<b>[Optional]</b><br />Enter an agreement confirmation statement for submissions.<br />(<b>Note:</b> If the agreement is left completely blank then no agreement confirmation will be required by students during submission)';
$string['pp_agreement'] = 'Disclaimer / Agreement';
$string['studentdataprivacy'] = 'Student Data Privacy Settings';
$string['studentdataprivacy_desc'] = 'The following settings can be configured to ensure that student&#39;s personal data is not transmitted to Turnitin via the API.';
$string['enablepseudo'] = 'Enable Student Privacy';
$string['enablepseudo_desc'] = 'If this option is selected student email addresses will be transformed into a pseudo equivalent for Turnitin API calls.<br /><i>(<b>Note:</b> This option can not be changed if any Moodle user data has already been synced with Turnitin)</i>';
$string['pseudofirstname'] = 'Student Pseudo First Name';
$string['pseudofirstname_desc'] = '<b>[Optional]</b><br />The student first name to display in the Turnitin document viewer';
$string['pseudolastname'] = 'Student Pseudo Last Name';
$string['pseudolastname_desc'] = 'The student last name to display in the Turnitin document viewer';
$string['pseudolastnamegen'] = 'Auto Generate Lastname';
$string['pseudolastnamegen_desc'] = 'If set to yes and the pseudo lastname is set to a user profile field, then the field will be automatically populated with a unique identifier.';
$string['pseudoemailsalt'] = 'Pseudo Encryption Salt';
$string['pseudoemailsalt_desc'] = '<b>[Optional]</b><br />An optional salt to increase the complexity of the generated Pseudo Student email address.<br />(<b>Note:</b> The salt should remain unchanged in order to maintain consistent pseudo email addresses)';
$string['pseudoemaildomain'] = 'Pseudo Email Domain';
$string['pseudoemaildomain_desc'] = '<b>[Optional]</b><br />An optional domain for pseudo email addresses. (Defaults to @tiimoodle.com if left empty)';
$string['pseudoemailaddress'] = 'Pseudo Email Address';
$string['connecttest'] = 'Test Turnitin Connection';
$string['diagnosticoptions_0'] = 'Off';
$string['diagnosticoptions_1'] = 'Standard';
$string['diagnosticoptions_2'] = 'Debugging';

$string['savesuccess'] = 'Changes saved';
$string['connecttestsuccess'] = 'Connection test successful';
$string['connecttestfailed'] = 'Connection test failed.';

// Grade book/View assignment page.
$string['turnitin:viewfullreport'] = 'View Similarity Report';
$string['launchrubricview'] = 'View the Rubric used for marking';
$string['turnitinppulapost'] = 'Your file has not been submitted to Turnitin. Please click here to accept our EULA.';
$string['ppsubmissionerrorseelogs'] = 'This file has not been submitted to Turnitin, please consult your system administrator';
$string['ppsubmissionerrorstudent'] = 'This file has not been submitted to Turnitin, please consult your tutor for further details';

// Receipts.
$string['messageprovider:submission'] = 'Turnitin Plagiarism Plugin Digital Receipt notifications';
$string['digitalreceipt'] = 'Digital Receipt';
$string['digital_receipt_subject'] = 'This is your Turnitin Digital Receipt';
$string['pp_digital_receipt_message'] = 'Dear {$a->firstname} {$a->lastname},<br /><br />You have successfully submitted the file <strong>{$a->submission_title}</strong> to the assignment <strong>{$a->assignment_name}{$a->assignment_part}</strong> in the class <strong>{$a->course_fullname}</strong> on <strong>{$a->submission_date}</strong>. Your submission id is <strong>{$a->submission_id}</strong>. Your full digital receipt can be viewed and printed from the print/download button in the Document Viewer.<br /><br />Thank you for using Turnitin,<br /><br />The Turnitin Team';

// Paper statuses.
$string['turnitinid'] = 'Turnitin ID';
$string['turnitinstatus'] = 'Turnitin status';
$string['pending'] = 'Pending';
$string['similarity'] = 'Similarity';
$string['notorcapable'] = 'It is not possible to produce a Similarity Report for this file.';
$string['grademark'] = 'GradeMark';
$string['student_read'] = 'The student viewed the paper on:';
$string['student_notread'] = 'The student has not viewed this paper.';
$string['launchpeermarkreviews'] = 'Launch Peermark Reviews';

// Cron.
$string['ppqueuesize'] = 'Number of events in the Plagiarism Plugin events queue';
$string['ppcronsubmissionlimitreached'] = 'No further submissions will be sent to Turnitin by this cron execution as only {$a} are processed per run';
$string['cronsubmittedsuccessfully'] = 'Submission: {$a->title} (TII ID: {$a->submissionid}) for the assignment {$a->assignmentname} on the course {$a->coursename} was successfully submitted to Turnitin.';
$string['pp_submission_error'] = 'Turnitin has returned an error with your submission:';
$string['turnitindeletionerror'] = 'Turnitin submission deletion failed. The local Moodle copy was removed but the submission in Turnitin could not be deleted.';
$string['ppeventsfailedconnection'] = 'No events will be processed by the Turnitin plagiarism plugin by this cron execution as a connection to Turnitin can not be established.';

// Error codes.
$string['tii_submission_failure'] = 'Please consult your tutor or system administrator for further details';
$string['faultcode'] = 'Fault Code';
$string['line'] = 'Line';
$string['message'] = 'Message';
$string['code'] = 'Code';
$string['tiisubmissionsgeterror'] = 'There was an error when trying to get submissions for this assignment from Turnitin';
$string['errorcode0'] = 'This file has not been submitted to Turnitin, please consult your system administrator';
$string['errorcode1'] = 'This file has not been sent to Turnitin as it does not have enough content to produce a Similarity Report.';
$string['errorcode2'] = 'This file will not be submitted to Turnitin as it exceeds the maximum size of {$a->maxfilesize} allowed';
$string['errorcode3'] = 'This file has not been submitted to Turnitin because the user has not accepted the Turnitin End User Licence Agreement.';
$string['errorcode4'] = 'You must upload a supported file type for this assignment. Accepted file types are; .doc, .docx, .ppt, .pptx, .pps, .ppsx, .pdf, .txt, .htm, .html, .hwp, .odt, .wpd, .ps and .rtf';
$string['errorcode5'] = 'This file has not been submitted to Turnitin because there is a problem creating the module in Turnitin which is preventing submissions, please consult your API logs for further information';
$string['errorcode6'] = 'This file has not been submitted to Turnitin because there is a problem editing the module settings in Turnitin which is preventing submissions, please consult your API logs for further information';
$string['errorcode7'] = 'This file has not been submitted to Turnitin because there is a problem creating the user in Turnitin which is preventing submissions, please consult your API logs for further information';
$string['errorcode8'] = 'This file has not been submitted to Turnitin because there is a problem creating the temp file. The most likely cause is an invalid file name. Please rename the file and re-upload using Edit Submission.';
$string['errorcode9'] = 'The file cannot be submitted as there is no accessible content in the file pool to submit.';
$string['coursegeterror'] = 'Could not get course data';
$string['configureerror'] = 'You must configure this module fully as Administrator before using it within a course. Please contact your Moodle administrator.';
$string['turnitintoolofflineerror'] = 'We are experiencing a temporary problem. Please try again shortly.';
$string['defaultinserterror'] = 'There was an error when trying to insert a default setting value into the database';
$string['defaultupdateerror'] = 'There was an error when trying to update a default setting value in the database';
$string['tiiassignmentgeterror'] = 'There was an error when trying to get an assignment from Turnitin';
$string['assigngeterror'] = 'Could not get Turnitin data';
$string['classupdateerror'] = 'Could not update Turnitin Class data';
$string['pp_createsubmissionerror'] = 'There was an error trying to create the submission in Turnitin';
$string['pp_updatesubmissionerror'] = 'There was an error trying to resubmit your submission to Turnitin';
$string['tiisubmissiongeterror'] = 'There was an error when trying to get a submission from Turnitin';

// Javascript.
$string['closebutton'] = 'Close';
$string['loadingdv'] = 'Loading Turnitin Document Viewer...';
$string['changerubricwarning'] = 'Changing or detaching a rubric will remove all existing rubric scoring from papers in this assignment, including scorecards which have previously been marked. Overall grades for previously graded papers will remain.';
$string['messageprovider:submission'] = 'Turnitin Plagiarism Plugin Digital Receipt notifications';

// Turnitin Submission Status.
$string['turnitinstatus'] = 'Turnitin status';
$string['deleted'] = 'Deleted';
$string['pending'] = 'Pending';
$string['because'] = 'This was because an administrator deleted the pending assignment from the processing queue and aborted the submission to Turnitin.<br /><strong>The file still exists in Moodle, please contact your instructor.</strong><br />Please see below for any error codes:';

$string['errorcode10'] = 'This file has not been submitted to Turnitin because there is a problem creating the class in Turnitin which is preventing submissions, please consult your API logs for further information';
$string['errorcode11'] = 'This file has not been submitted to Turnitin because it is missing data';
$string['errorcode12'] = 'This file has not been submitted to Turnitin because it belongs to an assignment in which the course was deleted. Row ID: ({$a->id}) | Course Module ID: ({$a->cm}) | User ID: ({$a->userid})';
$string['queued'] = 'Queued';
$string['updatereportscores'] = 'Update Report Scores for Turnitin Plagiarism Plugin';
$string['sendqueuedsubmissions'] = 'Send Queued Files from the Turnitin Plagiarism Plugin';

$string['privacy:metadata:plagiarism_turnitin_files'] = 'Information that links a Moodle submission to a Turnitin submission.';
$string['privacy:metadata:plagiarism_turnitin_files:userid'] = 'The ID of the user who has made a submission.';
$string['privacy:metadata:plagiarism_turnitin_files:submissionscore'] = 'The similarity score of the submission.';
$string['privacy:metadata:plagiarism_turnitin_files:attempt'] = 'A timestamp indicating when the user viewed feedback on their submission.';
$string['privacy:metadata:plagiarism_turnitin_files:transmatch'] = 'Indicates whether Turnitin used translated matching to produce a Similarity Report for the submission.';
$string['privacy:metadata:plagiarism_turnitin_files:lastmodified'] = 'A timestamp indicating when the user last modified their submission.';
$string['privacy:metadata:plagiarism_turnitin_files:grade'] = 'The grade applied by an instructor to the submission.';
$string['privacy:metadata:plagiarism_turnitin_files:orcapable'] = 'Indicates whether Turnitin was able to produce a similarity report for the user\'s submission.';
$string['privacy:metadata:plagiarism_turnitin_files:student_read'] = 'Indicates whether a student has read their feedback.';

$string['privacy:metadata:plagiarism_turnitin_client'] = 'To successfully make a submission to Turnitin, specific user data needs to be exchanged between Moodle and Turnitin. For more information around Moodle Plugins and GDPR, please visit: https://help.turnitin.com/feedback-studio/moodle/moodle-plugins-and-gdpr.htm';
$string['privacy:metadata:plagiarism_turnitin_client:email'] = 'The user\'s email address is shared by Moodle to enable the creation of a Turnitin account.';
$string['privacy:metadata:plagiarism_turnitin_client:firstname'] = 'The user\'s first name is sent to Turnitin so that the user can be identified.';
$string['privacy:metadata:plagiarism_turnitin_client:lastname'] = 'The user\'s last name is sent to Turnitin so that the user can be identified.';
$string['privacy:metadata:plagiarism_turnitin_client:submission_title'] = 'The title of the submission is sent to Turntin so that it is identifiable.';
$string['privacy:metadata:plagiarism_turnitin_client:submission_filename'] = 'The name of the submitted file is sent to Turntin so that it is identifiable.';
$string['privacy:metadata:plagiarism_turnitin_client:submission_content'] = 'Please be aware that the content of a file/submission is sent to Turnitin for processing.';

$string['privacy:metadata:plagiarism_turnitin_users'] = 'Information about Plagiarism Plugin Users.';
$string['privacy:metadata:plagiarism_turnitin_users:userid'] = 'The ID of the user who uses this plugin.';

$string['privacy:metadata:core_files'] = 'Turnitin Assignment stores files that have been uploaded to Moodle to form a Turnitin submission.';

$string['errorcode13'] = 'This submissionid - {$a->externalid} was not found in Turnitin. Unable to retrieve similarity score and other submission data.';
$string['turnitinrepositoryoptions_help'] = '<strong>Enable instructor standard repository options: </strong><br />Instructors can instruct Turnitin to add documents to either the standard repository or no repository<br /><br /><strong>Enable instructor expanded repository options: </strong><br />This option will allow instructors to view an assignment setting to allow students to instruct Turnitin where their documents will be stored. Students can choose to add their documents to the standard student repository or to your institution’s private repository.<br /><br /><strong>Submit all papers to the standard repository: </strong><br />All documents will be added to the standard student repository by default.<br /><br /><strong>Do not submit any papers into a repository: </strong><br />Documents will only ever be used to perform the initial check with Turnitin and to display to the instructor for grading.<br /><br /><strong>Submit all papers to the institutional repository: </strong><br />Turnitin is instructed to store all papers within the institutional paper repository. Similarity checks to the submitted documents will only be made by other instructors within your institution.';

$string['turnitinuseanon'] = 'Use Anonymous Marking';
$string['turnitinuseanon_desc'] = 'Choose whether to allow Anonymous Marking when grading submissions.<br /> Anonymous Marking will be set when the blind marking setting is enabled on an assignment module<br /><i>(This is only available to those that have Anonymous Marking configured for their Turnitin account)</i>';

$string['createassignmenterror'] = 'There was an error trying to create the assignment in Turnitin';
$string['editassignmenterror'] = 'There was an error trying to edit the assignment in Turnitin';
$string['ppassignmentediterror'] = 'Module {$a->title} (TII ID: {$a->assignmentid}) could not be edited on Turnitin, please consult your API logs for further information';
$string['pp_classcreationerror'] = 'This class could not be created on Turnitin, please consult your API logs for further information';
$string['unlinkusers'] = 'Unlink Users';
$string['relinkusers'] = 'Relink Users';
$string['unlinkrelinkusers'] = 'Unlink / Relink Turnitin Users';
$string['nointegration'] = 'No Integration';
$string['sprevious'] = 'Previous';
$string['snext'] = 'Next';
$string['semptytable'] = 'No results found.';
$string['slengthmenu'] = 'Show _MENU_ Entries';
$string['ssearch'] = 'Search:';
$string['sprocessing'] = 'Loading data from Turnitin...';
$string['szerorecords'] = 'No records to display.';
$string['sinfo'] = 'Showing _START_ to _END_ of _TOTAL_ entries.';
$string['userupdateerror'] = 'Could not update user data';
$string['connecttestcommerror'] = 'Could not connect to Turnitin. Double check your API URL setting.';

$string['userfinderror'] = 'There was an error trying to find the user in Turnitin';
$string['tiiusergeterror'] = 'There was an error when trying to get the user details from Turnitin';
$string['errorcode13'] = 'This submissionid - {$a->externalid} was not found in Turnitin. Unable to retrieve similarity score and other submission data.';
$string['usercreationerror'] = 'Turnitin user creation failed';
$string['ppassignmentcreateerror'] = 'This module could not be created on Turnitin, please consult your API logs for further information';
$string['turnitineula'] = 'Turnitin EULA';
$string['dbexport'] = 'Database Export';
$string['dbexporttable'] = 'Export {$a} data';
$string['invalidtablename'] = 'Table {$a} could not be exported';
