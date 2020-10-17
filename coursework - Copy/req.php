<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Requirements page</title>
	<link rel="stylesheet" href="css/reqStyle.css">
</head>
<body>

<h1>CMP204 Requirements Page</h1>

<p>If you have not met a requirement, do not delete it from the table.</p>

<table>
  <tr>
    <th class="reqCol">Requirement</th>
    <th class="metCol">How did you meet this requirement?</th>
    <th class="fileCol">File name(s), line no.</th>
  </tr>
  <tr>
    <td>A clear use of HTML5</td>
    <td>Clear use of HTML5 can be seen throughout the pages of the website. </td>
    <td>All pages</td>
  </tr>
  <tr>
    <td>Use of the Bootstrap framework providing a responsive layout </td>
    <td>The use of bootstrap can be clearly seen throughout the website
to design the website to fit the theme and colour scheme.</td>
    <td>All pages</td>
  </tr>
  <tr>
    <td>Use of JavaScript to manipulate the DOM based on an event</td>
    <td>A Javascript event was used to make a "show More" and "Show Less" button
which modifys the DOM to show more text.</td>
    <td>logged.php, line 51-69</td>
  </tr>
  <tr>
    <td>JavaScript loading of dynamically changing information</td>
    <td>On index.php there has been a countdown put in through the use of
javascript to countdown the release of the album</td>
    <td>index.php, line 51-84.</td>
  </tr>
  <tr>
    <td>Use of jQuery in conjunction with the DOM</td>
    <td>DOM altering JQuery was used in the index.php page to make a slide function that
would display more text if toggled.</td>
    <td>index.php, line 92-100.</td>
  </tr>
  <tr>
    <td>Use of a jQuery plugin to enhance your application</td>
		<td>The JQuery plugin was used on the gallery.php page to create a click/hover on
button that takes you back to the top of the page. When you hover over the button, a tooltip plugin pops up saying "Return to the top of the page"</td>
    <td>gallery.php, line 84-99</td>
  </tr>
  <tr>
    <td>Use of AJAX (pure JavaScript i.e. without the use of a library)</td>
    <td>For pure use of AJAX i used a poll feature on the Shows.php page that allows
the user to vote wether they enjoyed the website and it gets updated through the server.
The server requires the correct privileges for this feature to work by giving the permmissions code
'777' so the server can write, edit and execute the updates to the poll </td>
    <td>poll_result.txt: line 1, poll_vote.php: line 1-47, shows.php: line 80-117
</td>
  </tr>
  <tr>
    <td>Use of the jQuery AJAX function</td>
    <td>If you try and access the admin.php page withouty being logged in you will be greeted by a page called failedaccess.php
where there is a statement with a button for admins struggling to login. If the user presses the button it will fetch the text from
a file called adminlo.txt.</td>
    <td>failedaccess.php, line 46-58 </td>
  </tr>
  <tr>
    <td>User login functionality (PHP/MySQL)</td>
    <td>A user login page has been implemented where the
user can only access content if they have put the correct
content in the login screen. If the information put into the
box is inavlid the boxes will empty and you will be prompted
to re-enter the details.</td>
    <td>login.php Line: 1-32, 76-84</td>
  </tr>
  <tr>
    <td>Admin section of the website (PHP/MySQL)</td>
    <td>Admin.php has been implemented and is only accessable
if you enter the correct information in the login.php form.</td>
    <td>Admin.php, line 14-31</td>
  </tr>
  <tr>
    <td>Ability to select, add, edit and delete information from a database (PHP/MySQL)</td>
    <td>The add, edit and Remove features are only usable for a logged in admin on the admin page(admin.php)
The features are used to add,remove and edit the events off the shows page.</td>
    <td>admin.php, line 1-41</td>
  </tr>
  <tr>
    <td>Appropriate consideration of relevant laws</td>
    <td>In the footer of every page it is shoen to the user that we follow appropriate laws of online behaviour when using this site.
GDPR is the law specified at the bottom of the page.</td>
    <td>Every page in the footer</td>
  </tr>
  <tr>
    <td>Security measures</td>
    <td>Cookies allow the Admin page to only be accessed to people logged in under an admin. if this isnt the case you will be sent to failedaccess.php</td>
    <td>admin.php line 1-6</td>
  </tr>
  <tr>
    <td>SQL queries should be written as prepared statements</td>
    <td>All sql queries were inputed as prepared statements:
As shown in the admin.php, login.php and shows.php all sql work was done as prepared statements.</td>
    <td>admin.php line 1-41, shows.php line 60-78, login.php 1-32</td>
  </tr>
  <tr>
    <td>Passwords should be salted and hashed</td>
    <td>Passwords were encrypted using BCrypt and the website will validate the password with the database from what the user entered.</td>
    <td></td>
  </tr>
  <tr>
    <td>Validation of user input</td>
    <td>If the user enters incorrect or empty fields the login.php page will
			promt the user to re-enter the login information or "Fill out this field". login.php</td>
    <td>login.php</td>
  </tr>

  <tr>
    <td>Any other relevant security features</td>
    <td>The cookie allows the session to time out if you have been logged in too long</td>
    <td>login.php: line 15 & 24</td>
  </tr>
</table>

</body>
</html>
