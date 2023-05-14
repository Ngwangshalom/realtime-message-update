# realtime-message-update
real time chat update or comment udate is a script that was written in php to enable user solve problems whnen creating web chat apps or commenting feature in their applications with this script it will help you the develper have updates on comment of messages sent and received in real time wihtout your computer bieng refreshed 
Real-Time Message Update Using AJAX and PHP

This application provides a real-time message update between two users using AJAX and PHP, without the need for sockets. It allows users to send messages to each other in real-time and see their messages appear immediately without refreshing the page.

The application is built using HTML, CSS, JavaScript, and PHP. It leverages the power of AJAX to send and receive data from the server asynchronously without the need for a page refresh. The backend is powered by PHP, which handles the data processing and storage.

To use the application, two users need to log in or sign up. Once they have signed up or logged in, they can start sending messages to each other in real-time. The messages are stored in a database and are retrieved using AJAX requests. When a user sends a message, it is sent to the server using an AJAX request, and the server stores the message in the database. The other user's chat window is updated using another AJAX request, which retrieves the new message from the database and displays it in the chat window.

The application provides a seamless experience for users, allowing them to communicate in real-time without any lag or delay. It is an ideal solution for websites that require real-time messaging functionality without the need for sockets.

Installation

Clone the repository to your local machine
Create a database and import the database.sql file
Edit the database connection settings in the config.php file
Upload the files to your web server
create a table with the following attributes 
CREATE TABLE comment (
  id INT(11) NOT NULL AUTO_INCREMENT,
  user_id INT(11) NOT NULL,
  comment TEXT NOT NULL,
  timestamp TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  name VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
);
The id attribute is an auto-incrementing integer that serves as the primary key of the table. The user_id attribute is an integer that represents the ID of the user who made the comment. The comment attribute is a text field that stores the comment made by the user. The timestamp attribute is a timestamp that records the date and time the comment was made. The name attribute is a string that represents the name of the user who made the comment.

You can modify the data types and sizes of the attributes as needed to suit your application. Additionally, you may want to add indexes or other constraints to the table .




Conclusion
This application provides a simple and effective way to implement real-time messaging functionality using AJAX and PHP. It is easy to use, and the installation process is straightforward. With this application, you can provide real-time messaging functionality to your users without the need for sockets, making it an ideal solution for websites that require real-time messaging functionality.
