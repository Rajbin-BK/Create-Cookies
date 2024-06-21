Cookie Management System
This project demonstrates how to manage cookies using PHP across multiple web pages. It allows users to select a theme and philosopher, store them as cookies, read them back, and remove them as needed.

Table of Contents
* Features
* Setup Instructions
* File Structure
* Usage
* License
Features
Creating Cookies:
	Allows users to select a theme and philosopher, storing them as cookies.
Theme selection is stored persistently (expires in 1 day).
Philosopher selection is stored for the session.

Reading Cookies:
	Displays stored theme and philosopher cookies on the main page (ch15-proj1.php).
Informs the user if cookies are not available.

Removing Cookies:
	Provides functionality to remove stored cookies via a dedicated page (remove-cookie.php).
Redirects to the main page (ch15-proj1.php) after removal to reflect changes.

Setup Instructions
Clone Repository:
	bash
	Copy code
	git clone https://github.com/your/repository.git
	cd repository-folder

Configure Local Environment:
	Ensure you have PHP installed (version 7.x recommended) and a web server (e.g., Apache, Nginx).

Database Setup (if applicable):
	No database setup required for this project.

Run the Application:
	Place the project files in your web server’s document root.
Access the application via your web browser (e.g., http://localhost/ch15-proj1.php).
File Structure
bash
Copy code
project-root/
?
??? ch15-proj1.php           # Main page to create and display cookies
??? make-cookies.php         # Processes form submission to create cookies
??? remove-cookie.php        # Removes cookies and redirects back
??? other-page.php           # Displays cookie values and offers cookie removal link
?
??? css/
?   ??? styles.css           # Custom CSS styles
?
??? includes/
    ??? header.inc.php       # Header include for common header content
    ??? left-nav.inc.php     # Left navigation include for navigation menu

Usage
Creating Cookies:

Visit ch15-proj1.php, select a theme and philosopher, and click "Create Cookies".
Cookies will be stored and redirected back to ch15-proj1.php.
Reading Cookies:

Visit ch15-proj1.php to see the stored theme and philosopher cookies.
If cookies are not available, a message will be displayed.
Removing Cookies:

Visit other-page.php and click "Remove Cookies" to delete stored cookies.
You will be redirected to other-page.php to confirm that cookies have been removed.
License
This project is licensed under the MIT License.

