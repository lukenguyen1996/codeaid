*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*
* Team Basic                                                             *
*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*
* Wesley Murray, Minh Duc "Luke" Nguyen, Dominic Peluso, Ryland Atkins   *
* 11/27/2017                                                             *
*~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*


*~~~~~~~~CURRENT FEATURES~~~~~~~~~*
1) SQL injection prevention.
2) Bulk upload questions
3) Student enrollment & Instructor verification System
4) Skill dependency (active/inactive)
5) Implementing "Admin" role
6) Smooth flow of work / User-friendly design.

*~~~~~~~~FUTURE FEATURES~~~~~~~~~*
1) Implement a new role of "Lab Assistant".
2) Bulk adding students feature for instructors.
3) Implement email account authentication
4) User Account Settings
5) Notification system.
6) Non-multiple choice questions.






A) admins
    1) manage_accounts.php:
    This page is the second step for 2-step verification process for creating account.
    
B) CSS_sheets
    This folder contains CSS files that styles the whole website.
    
C) end_codeaid
    1) logout.php:
    This page closes the current session and handles logging out.

D) instructors
    1) instructor_create_class.php:
    This page is for instructors to create a new class
    
    2) instructor_create_course.php:
    This page is for instructors to create a new course
    
    3) instructor_create_material.php:
    This page is for instructors to create a new material
    
    4) instructor_create_objective.php:
    This page is for instructors to create a new objective for a class
    
    5) instructor_create_questions.php:
    This page is for instructors to create a new question
    
    6) instructor_home.php:
    This is the main page for the instructors. It shows students' progress in every classes an instructor is teaching.
    
    7) instructor_manage_class_objective.php:
    This page is for instructors to manage their class objectives.
    
    8) instructor_manage_class_students.php:
    This page is for instructors to manage students in their classes
    
    9) instructor_manage_classes.php:
    This page is for instructors to manage their classes
    
    10) instructor_manage_objective_material.php:
    This page is for instructors to manage their classes' supplementary material.
    
    11) instructor_manage_objective_question.php:
    This page is for instructors to manage the questions for each classes' objective.
    
        
E) sql_work
    1) sql_conn.php:
    This file contains the code that initiates mysqli connection
    
    2) sql_queries.php:
    This file contains useful funtions to work with mySQL server.

F) start_codeaid
    1) create_account.php:
    This page is for user to create a new account
    
    2) create_account_check.php:
    This file contains code that check the validity of user's input in the create_account page
    
    3) login.php:
    This is the login page for users
    
    4) login_check.php:
    This file contains the code to verify users' login information.
    
    5) login_error.php:
    This file handles error while user logging in
    
G) students
    1) attempt_history.php: 
    This page is to view student history on question attempts
    
    2) drop_class_confirm.php:
    This page would ask for students' confirmation when they try to drop from a class.
    
    3) get_objectives.php:
    This is a helper file for displaying objectives
    
    4) get_questions.php:
    This is a helper file for displaying questions
    
    5) objective_questions.php:
    This page is to view objective questions
    
    6) problem_page.php:
    This is the page for students to make attempts on questions
    
    7) student_add_class.php:
    This is the page where a student can add himself in a class.
    
    8) student_manage_class.php:
    This page contains a student's classes and has options for that student to add/drop classes.
    
    9) student_objective_material.php:
    This page is for students to view supplementary material
    
    10) student_welcome.php:
    This is the student's main page after logging in. It contains that student's progress.
    
    
H) function_files.php:
    This file just contains all the files that have functions
    
I) html_beginning.php:
    This file contains the helper html code that would be used at the beginning of all page
    
J) redirect.php:
    This is a helper file that helps redirecting between pages.
    
K) sample_data.php:
    This file generates a sample database so we have information to work with

L) test_session.php:
    This file is for verifying session ids
        