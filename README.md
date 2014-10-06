City Council Candidate database details
=======================================

Database is published but it is still in flux as data is added and the database has morphed. These notes hopefully will help keep track.
  
  * [Public](http://projects.statesman.com/databases/city-council-districts/)
  * [Edit](http://projects.statesman.com/databases/city-council-districts/edit/)

## History

  * v1 was basic information about candidates
  * v2 added financial information for each candidate
  * v3 (9/3/2014) adds 3 questions and bios from bios in the paper. This version is not the final because I'm tacking the new information on the bottom instead of integrating because not all candidates will have questions and bios until they all run. The idea is to come back and fix once all are entered.
  * v4 (10/5/2014) and current:
    * changed mugs to use images stored in project as opposed to Medley. There must be something in the Caspio field for photo for it to work, though, but it won't be pulling from that URL anymore.
    * Added YouTube videos. Add the youtube unique ID to record in Caspio to display
    * Added Endorsements field to the admin, but not in display yet.

## Main database

  * Tables
    * candidate_finances: table that holds finance records
    * candidate_seats: lookup table to get district names.
    * candidate_table: the actual candidates
    * candidate_totals: a table that christian has to keep and update based on all the finance reports entered by Sarah and Lili.
    * Candidates: an old table used in v1 that isn't used anymore
    * CandidatesWUA: who can edit
  * Datapages
    * (edit) Candidate Add: Form to add new candidates. Probably won't be used anymore.
    * (v4) Candidate Bio v3: Bio information for v3 of the database. Also used in v4. 
    * Candidate details v2: Basic name, age, etc. This has the finance totals. This is being used in 9/3/2014 version
    * (v4) Candidate details v4: Basic name, age, etc., but w/out finance totals.
    * (v4) Candidate Finance totals v4: Used with v4 to move totals down the page.
    * (edit) Candidate Edit: To edit candidate records.
    * Candidate Form Search: for editorial survey editing
    * Candidate Questions v3: The piece with just the 3 questions answered. Used for 9/3/2014
    * (v4) Candidate Questions v4: Removed the headers.
    * (v4) Candidate Search v2: Used for 9/3/2014
    * Candidate Search v3: Not active. Think this was just a test.
    * (edit) Candidate Survey Edit: what is says
    * Candidates Search Small v1: not being used.
    * Candidates Search v1: not being used.
    * (edit) Finances Add: form for adding finance reports
    * (edit) Finances Chart Report: to get the chart on the page
    * (edit) Finances edit: To edit existing reports.

The note in (parenthesis) shows which versions are being currently used for something.

## Editorial's survey

This has kind of died on the vine for lack of use, but it is still out there.

  * Tables
    * Candidate_form_data: The table to hold the form
    * CandidatesWUA: who can edit
  * Datapages
    * Candidate Form Search: for editorial survey editing
    * Candidate Survey Edit: Search form to edit records. [Used here](http://projects.statesman.com/databases/city-council-districts/edit/survey_edit.php).
    * Candidate Survey form: the published form for candidate to fill out. [published here](http://www.mystatesman.com/interactive/news/city-council-candidate-form/).