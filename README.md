# phpquiz

included:

index.php - main routine

Css in the "styles" directory

DB connecton file in a separate, not accessible directory

Images/favicon

SQL database dump file. 4 different tables:
- users: main users table, username and score + any additiona user data could be needed
- quizname: Quiz ID, text description of each, number of questions of each
- questionsanswers: the table of questions, associated to the quiz ID
- useranswers: log of each user ID, Question ID, answer progressive number. Just for debugging even the question text and the answer text are logged, but it is not mandatory for the purpose of this software.


Just import the SQL dump file and change the “DBconnect.php” credentials to access to your own database, then the code is ready to be executed in any virtual or real environment.
