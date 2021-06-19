-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 04:50 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `ENTRY` int(11) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `TEST` varchar(10) NOT NULL,
  `SCORE` int(11) NOT NULL,
  `DATE_E` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`ENTRY`, `NAME`, `TEST`, `SCORE`, `DATE_E`) VALUES
(1, 'AAA', 'TEST 1', 4, '12/01/21'),
(2, 'AAA', 'TEST 2', 25, '14/01/21'),
(3, 'AAA', 'TEST 3', 20, '15/02/21'),
(4, 'AAA', 'TEST 4', 16, '18/03/21'),
(7, 'a', 'TEST 1', 18, '15/05/21'),
(8, 'A', 'TEST 2', 22, '15/05/21'),
(9, 'prajna', 'TEST 4', 13, '24/05/21');

-- --------------------------------------------------------

--
-- Table structure for table `test1`
--

CREATE TABLE `test1` (
  `QNO` int(11) NOT NULL,
  `QUESTION` varchar(255) NOT NULL,
  `OP1` varchar(255) NOT NULL,
  `OP2` varchar(255) NOT NULL,
  `OP3` varchar(255) NOT NULL,
  `OP4` varchar(255) NOT NULL,
  `CORRECTANS` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test1`
--

INSERT INTO `test1` (`QNO`, `QUESTION`, `OP1`, `OP2`, `OP3`, `OP4`, `CORRECTANS`) VALUES
(1, 'HOW TO INSERT COMMENTS IN C LANGUAGE', '##', '\'\'\' \'\'\'', '*/----', '/*      */', 'D'),
(2, 'HOW TO INSERT COMMENT IN CSS', '!!', '/%', '##', '/* */', 'D'),
(3, 'HOW TO INSERT COMMENT IN PYTHON', '/* */', '<--! -->', '\"\"\"   \"\"\"', '//   //', 'C'),
(4, 'VALID DECLARATION FOR PYTHON INT TYPE', 'int x', 'x=10;', 'x=10', 'int x=10;', 'C'),
(5, 'WHAT IS THE CORRECT PLACE TO KEEP SCRIPTS??', 'inside body tag', 'inside head tag', 'both', 'none of the above', 'C'),
(6, 'How do you write \"Hello World\" in an alert box?', 'msgBox(\"Hello World\"); ', 'alertBox(\"Hello World\"); ', 'msg(\"Hello World\");  ', ' alert(\"Hello World\");', 'D'),
(7, 'How does a FOR loop start? in java script', 'for (i <= 5; i++)  ', ' for (i = 0; i <= 5; i++)', 'for (i = 0; i <= 5)', 'for i in (0,5)', 'B'),
(8, ' printf(\"%d\", -11%2) EXPECTED OUTPUT:', '1', '-1', '-5.5', '-5', 'B'),
(9, 'The binary equivalent of 50 is,', '110010 ', '1010110 ', '101.011.00.00', '101 ', 'A'),
(10, 'What do you mean by “int (*ptr)[10]”', ' ptr is an array of pointers to 10 integers', 'ptr is a pointer to an array of 10 integers', ' ptr is an array of 10 integers', ' Invalid statement', 'B'),
(11, 'What is function overloading?', 'Methods with same name but different parameters.', 'Methods with same name but different return types.', 'BOTH', 'NONE OF THE ABOVE', 'A'),
(12, 'What is JRE?', 'JRE is a java based GUI application.', ' JRE is an application development framework.', 'JRE is an implementation of the Java Virtual Machine which executes Java programs.', 'NONE OF THE ABOVE', 'C'),
(13, 'Which of those allows duplicate elements?', 'DICTIONARY', 'LIST', 'both', 'none', 'B'),
(14, ' Which options are correct to create an empty set in Python?', '{}', '[]', '()', 'set()', 'D'),
(15, 'What is the output of the expression  print(-18 // 4)', '5', '4', '-4', '-5', 'D'),
(16, 'print(bool(0), bool(3.14159), bool(-3), bool(1.0+1j)) OUTPUT IS', 'True True False True ', 'False True True True', 'True True False True', 'False True False True', 'B'),
(17, 'str1 = \'Welcome\'  print (str1[:6] + \' PYnative\')  OUTPUT IS', 'Welcome PYnative ', 'WelcomPYnative ', 'Welcom PYnative', 'WelcomePYnative', 'C'),
(18, 'COPY THIS LIST : aList = [\'a\', \'b\', \'c\', \'d\']', 'newList = copy(aList) ', 'newList = aList.copy() ', 'newList.copy(aList) ', 'newList = Copy.list(aList)', 'B'),
(19, 'Which of the following selector matches a element based on its class attribute?', 'The Type Selector', ' The Universal Selector  ', 'The Descendant Selector', 'The Class Selector', 'D'),
(20, 'Which of the following property is used to make a font italic or oblique?', 'font-family', 'font-style', 'font-variant', 'font-weight', 'B'),
(21, ' Which of the following property is used to add or subtract space between the words of a sentence?', 'word-spacing', 'block', ' letter-spacing', 'direction', 'A'),
(22, 'Which of the following property changes the color of left border?', 'border-top-color', 'border-bottom-color', 'border-color-left ', 'border-left-color', 'D'),
(23, 'Which of the following is not true about the ALTER TABLE statement', 'It can add a new row', 'It can add a new column.', 'It can modify existing columns.', ' It can define a default value for the new column', 'A'),
(24, 'Valid declaration in C ', 'y=0;', 'int y=0;', 'int y=0', 'y=x+7;', 'B'),
(25, 'Which of the following correctly declares an array? ', 'int anarray[10];', 'int anarray;', 'anarray{10};', 'array anarray[10];', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `test2`
--

CREATE TABLE `test2` (
  `QNO` int(11) NOT NULL,
  `QUESTION` varchar(255) NOT NULL,
  `OP1` varchar(255) NOT NULL,
  `OP2` varchar(255) NOT NULL,
  `OP3` varchar(255) NOT NULL,
  `OP4` varchar(255) NOT NULL,
  `CORRECTANS` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test2`
--

INSERT INTO `test2` (`QNO`, `QUESTION`, `OP1`, `OP2`, `OP3`, `OP4`, `CORRECTANS`) VALUES
(1, 'HOW TO PRINT HELLOW IN JAVA LANGUAGE', 'SYSTEM.OUT.PRINT(\"HELLOW\")', 'System.out.print(\"HELLOW\");', 'System.out.print(\"HELLOW\")', 'System.out.println(\"HELLOW\")', 'B'),
(2, 'HOW TO PRINT HELLOW IN C++ LANGUAGE', 'cout<\"HELLOW\";', 'COUT<<\"HELLOW\";', 'cout>>\"HELLOW\";', 'cout<<\"HELLOW\";', 'D'),
(3, 'HOW TO PRINT HELLO IN PYTHON', 'print(\"HELLO\")', 'printf(\"HELLO\")', 'PRINT(\"HELLO\")', 'println(\"HELLO\")', 'A'),
(4, 'WHICH OF THE FOLLOWING IS VALID FOR STYLING A CLASS', '.classname', '#classname', '~classname', '^classname', 'A'),
(5, 'WHICH OF THE FOLLOWING IS VALID FOR STYLING A ID', '.idname', '#idname', '^idname', '!idname', 'B'),
(6, '	\r\nIf a - b = 3 and a2 + b2 = 29, find the value of ab.', '20', '15', '23', '10', 'D'),
(7, 'ARRAY DECLARATION IN JAVA', 'int Array = new int[20];', 'intArray = new int;', 'int Array =int[20];', 'int Array=int[20]', 'A'),
(8, 'STRING VARIABLE IN PYTHON IS', 'String s=\"hi\"', 's=\"hi\";', 's=\"hi\"', 'Str s=\"hj\";', 'C'),
(9, 'OBJECT DECLARATION IN JAVA', 'class ob=class();', 'class ob= new class();', 'class ob=class new();', 'class ob=ob();', 'B'),
(10, 'Which data type is used to create a variable that should store text in java', 'String', 'string', 'char[]', 'str', 'A'),
(11, 'WHAT IS NOT TRUE  ABOUT CONSTRUCTORS', 'CALLED AUTOMATICALLY WHEN OBJECT IS CREATED', 'THEY CAN BE OVERLOADED', 'THEY HAVE SAME NAME AS CLASS NAME', 'THEY HAVE RETURN TYPES', 'D'),
(12, 'What is JRE?', 'JRE is a java based GUI application.', ' JRE is an application development framework.', 'JRE is an implementation of the Java Virtual Machine which executes Java programs.', 'NONE OF THE ABOVE', 'C'),
(13, '	\r\nWhat will be the least number which when doubled will be exactly divisible by 12, 18, 21 and 30 ?', '450', '630', '120', '660', 'B'),
(14, 'INPUT IN C++ LANGUAGE', 'scanf(\"%d\",&a);', 'CIN>>X;', 'cin>>&x;', 'cin>>x;', 'D'),
(15, 'INPUT IN C LANGUAGE', 'scanf(\"%d\",&a)', 'scanf(\"%d\",&a);', 'scanf(\"%d\",a);', 'scan(\"%d\",&a);', 'B'),
(16, 'HOW WILL YOU TAKE INPUT IN PYTHON??', 'i=input(\"enter value\")', 'i=Entry(\"enter value\")', 'i=enter(\"enter value\")', 'scanf(\"%d\",&a)', 'A'),
(17, 'NOT A DATATYPE IN C', 'int', 'String', 'float', 'char', 'B'),
(18, '	\r\nThe product of two numbers is 2028 and their H.C.F. is 13. The number of such pairs is:', '1', '4', '2', '3', 'C'),
(19, 'VARIABLE DECLARARTION IN PHP', '$i=0', 'int $i=0;', 'var $i=0;', '$i=0;', 'D'),
(20, 'HOW DO YOU DECLARE A VARIABLE IN JAVA SCRIPT', 'i=0;', 'var i=0;', 'int i=0;', '$i=0;', 'B'),
(21, 'WHAT IS USED TO ACCESS A ID IN JAVA SCRIPT', 'document.getElementbyID(\'id\')', 'document.getElementbyId(\'id\')', 'document.getElementById(\'id\')', 'document.getElementbyID(id)', 'C'),
(22, 'WHICH PROPERTY IS USED TO COLOR A TAG', 'colour', 'colors', 'color', 'colorus', 'C'),
(23, 'The ratio of two numbers is 3 : 4 and their H.C.F. is 4. Their L.C.M. is:', '12', '16', '24', '48', 'D'),
(24, 'Two numbers A and B are such that the sum of 5% of A and 4% of B is two-third of the sum of 6% of A and 8% of B. Find the ratio of A : B.', '4:3', '1:1', '2:3', '5:3', 'A'),
(25, 'PICK THE NON HTML TAG', 'BODY', 'HEAD', 'END', 'TITLE', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `test3`
--

CREATE TABLE `test3` (
  `QNO` int(11) NOT NULL,
  `QUESTION` varchar(255) NOT NULL,
  `OP1` varchar(255) NOT NULL,
  `OP2` varchar(255) NOT NULL,
  `OP3` varchar(255) NOT NULL,
  `OP4` varchar(255) NOT NULL,
  `CORRECTANS` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test3`
--

INSERT INTO `test3` (`QNO`, `QUESTION`, `OP1`, `OP2`, `OP3`, `OP4`, `CORRECTANS`) VALUES
(1, '3 pumps, working 8 hours a day, can empty a tank in 2 days. How many hours a day must 4 pumps work to empty the tank in 1 day?', '10', '7', '9', '12', 'D'),
(2, 'Look at this series: 7, 10, 8, 11, 9, 12, ... What number should come next?', '10', '8', '12', '13', 'A'),
(3, '	\r\nWhat is the name of the method used to start a thread execution?', 'void()', 'init()', 'start()', 'resume()', 'C'),
(4, 'VALID DECLARATION FOR PYTHON INT TYPE', 'int x', 'x=10;', 'x=10', 'int x=10;', 'C'),
(5, 'WHAT IS THE CORRECT PLACE TO KEEP SCRIPTS??', 'inside body tag', 'inside head tag', 'both', 'none of the above', 'C'),
(6, 'How do you write \"Hello World\" in an alert box?', 'msgBox(\"Hello World\"); ', 'alertBox(\"Hello World\"); ', 'msg(\"Hello World\");  ', ' alert(\"Hello World\");', 'D'),
(7, '	\r\nA constructor that accepts __________ parameters is called the default constructor.', '1', '0', '2', '3', 'B'),
(8, '	\r\nDestructor has the same name as the constructor and it is preceded by ______ .', '!', '*', '~', '#', 'C'),
(9, 'The binary equivalent of 50 is,', '110010 ', '1010110 ', '101.011.00.00', '101 ', 'A'),
(10, 'What do you mean by “int (*ptr)[10]”', ' ptr is an array of pointers to 10 integers', 'ptr is a pointer to an array of 10 integers', ' ptr is an array of 10 integers', ' Invalid statement', 'B'),
(11, 'What is function overloading?', 'Methods with same name but different parameters.', 'Methods with same name but different return types.', 'BOTH', 'NONE OF THE ABOVE', 'A'),
(12, 'For automatic objects, constructors and destructors are called each time the objects', 'are constructed', 'inherit parent class', 'enter and leave scope', 'are destroyed', 'C'),
(13, 'Which of those allows duplicate elements?', 'DICTIONARY', 'LIST', 'both', 'none', 'B'),
(14, ' Which options are correct to create an empty set in Python?', '{}', '[]', '()', 'set()', 'D'),
(15, 'What is the output of the expression  print(-18 // 4)', '5', '4', '-4', '-5', 'D'),
(16, 'It is a __________ error to pass arguments to a destructor.', 'symantic', 'syntax', 'virtual', 'link', 'B'),
(17, 'str1 = \'Welcome\'  print (str1[:6] + \' PYnative\')  OUTPUT IS', 'Welcome PYnative ', 'WelcomPYnative ', 'Welcom PYnative', 'WelcomePYnative', 'C'),
(18, '36 men can complete a piece of work in 18 days. In how many days will 27 men complete the same work?', '28', '24', '20', '18', 'B'),
(19, 'In a camp, there is a meal for 120 men or 200 children. If 150 children have taken the meal, how many men will be catered to with remaining meal?', '40', '35', '20', '30', 'D'),
(20, '	\r\nWhich cannot directly cause a thread to stop executing?', 'Calling the SetPriority() method on a Thread object.', 'Calling the wait() method on an object.', 'Calling the notify() method on an object.', 'Calling read() method on an InputStream object.', 'C'),
(21, ' Which of the following property is used to add or subtract space between the words of a sentence?', 'word-spacing', 'block', ' letter-spacing', 'direction', 'A'),
(22, 'Which of the following property changes the color of left border?', 'border-top-color', 'border-bottom-color', 'border-color-left ', 'border-left-color', 'D'),
(23, ' 	\r\nIf 7 spiders make 7 webs in 7 days, then 1 spider will make 1 web in how many days?', '7', '49', '7/2', '1', 'A'),
(24, '	\r\n39 persons can repair a road in 12 days, working 5 hours a day. In how many days will 30 persons, working 6 hours a day, complete the work?', '6', '13', '9', '10', 'B'),
(25, 'If a quarter kg of potato costs 60 paise, how many paise will 200 gm cost?', '48 paisa', '40 paisa', '38 paisa', '80 paisa', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `test4`
--

CREATE TABLE `test4` (
  `QNO` int(11) NOT NULL,
  `QUESTION` varchar(255) NOT NULL,
  `OP1` varchar(255) NOT NULL,
  `OP2` varchar(255) NOT NULL,
  `OP3` varchar(255) NOT NULL,
  `OP4` varchar(255) NOT NULL,
  `CORRECTANS` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test4`
--

INSERT INTO `test4` (`QNO`, `QUESTION`, `OP1`, `OP2`, `OP3`, `OP4`, `CORRECTANS`) VALUES
(1, '	\r\nThe SQL keyword BETWEEN is used:', 'for ranges.', 'to limit the columns displayed.', 'as a wildcard.', 'NONE', 'A'),
(2, ' 	\r\nWhich one of the following sorts rows in SQL?', 'SORT BY', 'ALIGN BY', 'GROUP BY', 'ORDER BY', 'D'),
(3, '	\r\nTo sort the results of a query use:', 'SORT BY', 'GROUP BY', 'ORDER BY', 'NONE', 'C'),
(4, 'VALID DECLARATION FOR PYTHON INT TYPE', 'int x', 'x=10;', 'x=10', 'int x=10;', 'C'),
(5, 'WHAT IS THE CORRECT PLACE TO KEEP SCRIPTS??', 'inside body tag', 'inside head tag', 'both', 'none of the above', 'C'),
(6, '	\r\nThe operator used to get value at address stored in a pointer variable is', '%', '!', '->', '*', 'D'),
(7, 'How does a FOR loop start? in java script', 'for (i <= 5; i++)  ', ' for (i = 0; i <= 5; i++)', 'for (i = 0; i <= 5)', 'for i in (0,5)', 'B'),
(8, ' printf(\"%d\", -11%2) EXPECTED OUTPUT:', '1', '-1', '-5.5', '-5', 'B'),
(9, 'Which header file should be included to use functions like malloc() and calloc()?', 'stdlib.h', 'memory.h', 'reg51.h', 'iostream.h', 'A'),
(10, 'A pointer is', 'keyword used to create variables', 'A variable that stores address of other variable', 'A variable that stores address of an instruction', 'All of the above', 'B'),
(11, '	\r\nIf a variable is a pointer to a structure, then which of the following operator is used to access data members of the structure through the pointer variable?', '->', '&', '*', '^', 'A'),
(12, 'What is JRE?', 'JRE is a java based GUI application.', ' JRE is an application development framework.', 'JRE is an implementation of the Java Virtual Machine which executes Java programs.', 'NONE OF THE ABOVE', 'C'),
(13, 'Which of those allows duplicate elements?', 'DICTIONARY', 'LIST', 'both', 'none', 'B'),
(14, 'How will you free the allocated memory ?', 'remove(var-name);', 'dealloc(var-name)', 'delete(var-name);', 'free(var-name);', 'D'),
(15, '	\r\nThe SQL statement that queries or reads data from a table is ________ .', 'SELECT', 'QUERY', 'READ', 'NONE', 'A'),
(16, 'print(bool(0), bool(3.14159), bool(-3), bool(1.0+1j)) OUTPUT IS', 'True True False True ', 'False True True True', 'True True False True', 'False True False True', 'B'),
(17, 'str1 = \'Welcome\'  print (str1[:6] + \' PYnative\')  OUTPUT IS', 'Welcome PYnative ', 'WelcomPYnative ', 'Welcom PYnative', 'WelcomePYnative', 'C'),
(18, 'COPY THIS LIST : aList = [\'a\', \'b\', \'c\', \'d\']', 'newList = copy(aList) ', 'newList = aList.copy() ', 'newList.copy(aList) ', 'newList = Copy.list(aList)', 'B'),
(19, 'Which of the following selector matches a element based on its class attribute?', 'The Type Selector', ' The Universal Selector  ', 'The Descendant Selector', 'The Class Selector', 'D'),
(20, 'Which of the following property is used to make a font italic or oblique?', 'font-family', 'font-style', 'font-variant', 'font-weight', 'B'),
(21, ' Which of the following property is used to add or subtract space between the words of a sentence?', 'word-spacing', 'block', ' letter-spacing', 'direction', 'A'),
(22, '	\r\nThe command to remove rows from a table \'CUSTOMER\' is:', 'REMOVE FROM CUSTOMER ..', 'DROP FROM CUSTOMER ...', 'UPDATE FROM CUSTOMER ...', 'DELETE FROM CUSTOMER WHERE ...', 'D'),
(23, 'Which of the following is not true about the ALTER TABLE statement', 'It can add a new row', 'It can add a new column.', 'It can modify existing columns.', ' It can define a default value for the new column', 'A'),
(24, '	\r\nYou can add a row using SQL in a database with which of the following?', 'CREATE', 'ADD', 'COMMIT', 'SAVE', 'B'),
(25, '	\r\nHow many default constructors per class are possible?', 'one', 'unlimited', '2', '3', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `update_data`
--

CREATE TABLE `update_data` (
  `NAME` varchar(255) NOT NULL,
  `TEST1` int(11) NOT NULL,
  `TEST2` int(11) NOT NULL,
  `TEST3` int(11) NOT NULL,
  `TEST4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `USER` varchar(200) NOT NULL,
  `PASS` varchar(200) NOT NULL,
  `ADDR` varchar(255) NOT NULL,
  `PHON` int(11) NOT NULL,
  `DOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`USER`, `PASS`, `ADDR`, `PHON`, `DOB`) VALUES
('a', 'b', 'fhfhg', 6757676, '2000-07-07'),
('AAA', 'BBB', 'HGJHG', 567678668, '2000-09-09'),
('POORNA', 'PPPP', 'MUROOR KUMTA', 2147483647, '2000-05-24'),
('PRAJNA', 'ASP', 'BHATERKERI MUROOR', 2147483647, '2021-05-27'),
('prajnaas', 'aaa', 'add5srddgf', 6647, '2000-05-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`ENTRY`);

--
-- Indexes for table `test1`
--
ALTER TABLE `test1`
  ADD PRIMARY KEY (`QNO`);

--
-- Indexes for table `test2`
--
ALTER TABLE `test2`
  ADD PRIMARY KEY (`QNO`);

--
-- Indexes for table `test3`
--
ALTER TABLE `test3`
  ADD PRIMARY KEY (`QNO`);

--
-- Indexes for table `test4`
--
ALTER TABLE `test4`
  ADD PRIMARY KEY (`QNO`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`USER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `ENTRY` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `test1`
--
ALTER TABLE `test1`
  MODIFY `QNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `test2`
--
ALTER TABLE `test2`
  MODIFY `QNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `test3`
--
ALTER TABLE `test3`
  MODIFY `QNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `test4`
--
ALTER TABLE `test4`
  MODIFY `QNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
