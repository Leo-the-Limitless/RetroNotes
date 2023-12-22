# Retro Notes
#### Video Demo:  <https://youtu.be/V6rvDz3V4ZE>
#### Developer's Personal Experience:
This is written for the final project of the CS50 course by May Nyein Chan. While I was designing this project, I had this intention to bring back the era of the 90s when people sent and received letters when there was no fast communication like nowadays. 

In this project 'Retro Notes', I tried to use retro themes such as retro fonts, colors, and design. The phrase on the homepage, "Passing Notes in Secrecy" is lyrics from the song, 'Enchanted' by Taylor Swift. Whenever I listened to that song and these lyrics came, I always wondered what it would be like to pass notes in secrecy. So, I created a digitalized version of it to experience what it feels like. 
I tried my best to make the users feel like they were sending and receiving notes in real life. I let users choose different stamps for different circumstances. I also used different fonts and styles to make the overall user experience more realistic. 

#### Project Structure:
I wrote this project using Laravel and MySQL. In the web.php file, you can see the registered routes. In the NoteController file, you can see different methods performing different tasks. There is a migration file for the notes table and you can set up database tables using the command: 'php artisan migrate'. I used MySQL for the database, bootstrap for styling, and fontawesome for icons. I save the notes encrypted in the database for users' privacy. There are stamp images in the public/images/stamps folder. I also used different validation rules for user input of the send and receive forms. 

#### Use Case Scenario:
Users will choose whether they are sending or receiving a note. If he chooses to send, then he can choose a stamp out of 5 stamps, and that will be used in the note he'd be sending. Once chosen, he will fill up a form. Then, he will see the note preview and the credentials of his note. He will have to give these credentials to his person. 

Then his person will come to the homepage and choose 'receive a note'. Then he will fill up the credentials he got from the sender. Then he will see the note preview, and then finally, the note.
