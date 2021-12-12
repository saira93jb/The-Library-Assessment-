-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2021 at 10:40 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `librarydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `subtitle` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `imgUrl` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `previewUrl` varchar(100) NOT NULL,
  `isbn_13` varchar(13) NOT NULL,
  `pagecount` int(4) NOT NULL,
  `timestamp` int(15) NOT NULL,
  `quantity` int(2) NOT NULL,
  `rented_num` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `subtitle`, `category`, `author`, `imgUrl`, `desc`, `previewUrl`, `isbn_13`, `pagecount`, `timestamp`, `quantity`, `rented_num`) VALUES
(1, 'Tribe of Mentors', 'Short Life Advice from the Best in the World', 'Business & Economics', 'Timothy Ferriss', 'http://books.google.com/books/content?id=ICbxswEACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_ap', 'Tim Ferriss, the #1 New York Times best-selling author of The 4-Hour Workweek, shares the ultimate choose-your-own-adventure book--a compilation of tools, tactics, and habits from 130+ of the world\'s top performers. From iconic entrepreneurs to elite athletes, from artists to billionaire investors, their short profiles can help you answer life\'s most challenging questions, achieve extraordinary results, and transform your life. From the author: In 2017, several of my close friends died in rapid succession. It was a very hard year, as it was for many people. It was also a stark reminder that time is our scarcest, non-renewable resource. With a renewed sense of urgency, I began asking myself many questions: Were my goals my own, or simply what I thought I should want? How much of life had I missed from underplanning or overplanning? How could I be kinder to myself? How could I better say \"no\" to the trivial many to better say \"yes\" to the critical few? How could I best reassess my priorities and my purpose in this world? To find answers, I reached out to the most impressive world-class performers in the world, ranging from wunderkinds in their 20s to icons in their 70s and 80s. No stone was left unturned. This book contains their answers--practical and tactical advice from mentors who have found solutions. Whether you want to 10x your results, get unstuck, or reinvent yourself, someone else has traveled a similar path and taken notes. This book, Tribe of Mentors, includes many of the people I grew up viewing as idols or demi-gods. Less than 10% have been on my podcast \'The Tim Ferriss Show, more than 200 million downloads\', making this a brand-new playbook of playbooks. No matter your challenge or opportunity, something in these pages can help. Among other things, you will learn: More than 50 morning routines--both for the early riser and those who struggle to get out of bed. How TED curator Chris Anderson realized that the best way to get things done is to let go. The best purchases of $100 or less \'you\'ll never have to think about the right gift again\'. How to overcome failure and bounce back towards success. Why Humans of New York creator Brandon Stanton believes that the best art will always be the riskiest. How to meditate and be more mindful \'and not just for those that find it easy\'. Why tennis champion Maria Sharapova believe that \"losing makes you think in ways victories can\'t.\" How to truly achieve work-life balance \'and why most people tell you it isn\'t realistic\'. How billionaire Facebook co-founder Dustin Moskovitz transformed the way he engages with difficult situations to reduce suffering. Ways to thrive \'and survive\' the overwhelming amount of information you process every day. How to achieve clarity on your purpose and assess your priorities. And much more. This reference book, which I wrote for myself, has already changed my life. I certainly hope the same for you. I wish you luck as you forge your own path. All the best, Tim Ferriss', 'http://books.google.com.bh/books?id=ICbxswEACAAJ&dq=tribe+of+mentors&hl=&cd=1&source=gbs_api', '9781785041853', 598, 1639176854, 10, 0),
(2, 'The Power of Now', 'A Guide to Spiritual Enlightenment', 'Body, Mind & Spirit', 'Eckhart Tolle', 'http://books.google.com/books/content?id=sQYqRCIhFAMC&printsec=frontcover&img=1&zoom=1&edge=curl&sou', 'To make the journey into the Now we will need to leave our analytical mind and its false created self, the ego, behind. From the very first page of Eckhart Tolle\'s extraordinary book, we move rapidly into a significantly higher altitude where we breathe a lighter air. We become connected to the indestructible essence of our Being, “The eternal, ever present One Life beyond the myriad forms of life that are subject to birth and death.” Although the journey is challenging, Eckhart Tolle uses simple language and an easy question and answer format to guide us. A word of mouth phenomenon since its first publication, The Power of Now is one of those rare books with the power to create an experience in readers, one that can radically change their lives for the better.', 'http://books.google.com.bh/books?id=sQYqRCIhFAMC&pg=PA190&dq=the+power+of+now&hl=&cd=7&source=gbs_ap', '9781577313113', 256, 1639178008, 3, 0),
(3, 'The Salt Road', '', 'Fiction', 'Jane Johnson', 'http://books.google.com/books/content?id=ws1gjo9WTDgC&printsec=frontcover&img=1&zoom=1&edge=curl&sou', 'Jane Johnson\'s The Salt Road is a magical historical adventure which brings the most unlikely of people together in an epic quest that spans the decades and the hot, shifting sands of Morocco. \'My dear Isabelle, in the attic you will find a box with your name on it.\' Isabelle\'s archaeologist father dies leaving a puzzle: a mysterious African amulet. But what is it? And why did he want her to have it? On impulse she takes a plane to Morocco to find out. But has Isabelle\'s curiosity got the better of her? Almost killed in an accident which damages the amulet \'revealing more of its secrets\', she realises she must be careful. But when her rescuer, Taïb, who knows the dunes and their peoples, offers to help uncover the amulet\'s history, she cannot resist uncovering the story of Tin Hanan - She of the Tents - who made a legendary desert crossing alone, and her descendant Mariata. Across years and over hot, shifting sands, tracking the Salt Road, the stories of Isabelle and Taïb, Mariata and her lover, become entangled with that of the lost amulet. It is a tale of souls wounded by history and of love blossoming on barren ground. Praise for Jane Johnson: \'An exotic page-turner that links the fates of two women\' Woman & Home \'A magical Moroccan adventure . . . unputdownable\' She \'An unashamedly escapist page-turner that will be enjoyed by fans of Kate Mosse\' Daily Mail \'Atmospheric and hugely romantic\' Marie Claire Jane Johnson is from Cornwall and worked for many years in London. In 2005 she was in Morocco researching the story of a distant ancestor kidnapped by Barbary pirates and sold into slavery - the basis of her first novel, The Tenth Gift - when a near-fatal climbing accident caused her to rethink her future. She returned home, gave up her office job in London and moved to Morocco - where she found and married her Berber husband. Her third novel, The Sultan\'s Wife is set in sixteenth century Morocco and England and is published by Penguin.', 'http://books.google.com.bh/books?id=ws1gjo9WTDgC&printsec=frontcover&dq=the+salt+road&hl=&cd=1&sourc', '9780141916347', 400, 1639178057, 5, 0),
(4, 'The Kite Runner', '', 'Fiction', 'Khaled Hosseini', 'http://books.google.com/books/content?id=GrVPEAAAQBAJ&printsec=frontcover&img=1&zoom=1&source=gbs_ap', 'The #1 New York Times bestselling novel beloved by millions of readers the world over. “A vivid and engaging story that reminds us how long his people [of Afghanistan] have been struggling to triumph over the forces of violence—forces that continue to threaten them even today.\" –New York Times Book Review The unforgettable, heartbreaking story of the unlikely friendship between a wealthy boy and the son of his father’s servant, caught in the tragic sweep of history, The Kite Runner transports readers to Afghanistan at a tense and crucial moment of change and destruction. A powerful story of friendship, it is also about the power of reading, the price of betrayal, and the possibility of redemption; and an exploration of the power of fathers over sons—their love, their sacrifices, their lies. Since its publication in 2003 Kite Runner has become a beloved, one-of-a-kind classic of contemporary literature, touching millions of readers, and launching the career of one of America\'s most treasured writers.', 'http://books.google.com.bh/books?id=GrVPEAAAQBAJ&dq=the+kite+runner&hl=&cd=2&source=gbs_api', '9781594631931', 400, 1639178112, 2, 0),
(5, 'The Alchemist', '', 'Fiction', 'Paulo Coelho', 'http://books.google.com/books/content?id=FzVjBgAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&sou', 'A special 25th anniversary edition of the extraordinary international bestseller, including a new Foreword by Paulo Coelho. Combining magic, mysticism, wisdom and wonder into an inspiring tale of self-discovery, The Alchemist has become a modern classic, selling millions of copies around the world and transforming the lives of countless readers across generations. Paulo Coelho\'s masterpiece tells the mystical story of Santiago, an Andalusian shepherd boy who yearns to travel in search of a worldly treasure. His quest will lead him to riches far different—and far more satisfying—than he ever imagined. Santiago\'s journey teaches us about the essential wisdom of listening to our hearts, of recognizing opportunity and learning to read the omens strewn along life\'s path, and, most importantly, to follow our dreams.', 'http://books.google.com.bh/books?id=FzVjBgAAQBAJ&printsec=frontcover&dq=the+alchemist&hl=&cd=1&sourc', '9780062416216', 208, 1639178178, 5, 0),
(6, 'Attack on Titan', '', 'Comics & Graphic Novels', 'Hajime Isayama', 'http://books.google.com/books/content?id=uAfzDQAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&sou', 'WHAT WAS HIS FATHER’S SIN? Captured by Rod Reiss, the rightful king, Krista and Eren finally have their memories back. What exactly happened to Eren, and what was the crime his father committed? Meanwhile, the Survey Corps desperately hunts for Eren, while at the same time seeking to legitimize their military coup. As the situation inside the walls comes to a head, the mysteries of the world of the Titans seem on the cusp of being solved at last!', 'http://books.google.com.bh/books?id=uAfzDQAAQBAJ&printsec=frontcover&dq=attack+on+titans&hl=&cd=1&so', '9781612628363', 192, 1639202358, 5, 0),
(7, 'Harry Potter and the Half-Blood Prince', '', 'Juvenile Fiction', 'J. K. Rowling', 'http://books.google.com/books/content?id=wSuqtAEACAAJ&printsec=frontcover&img=1&zoom=1&source=gbs_ap', 'A special new edition in celebration of the 20th anniversary of the publication of Harry Potter and the Sorcerer\'s Stone, with a stunning new cover illustration by Caldecott Medalist Brian Selznick. The war against Voldemort is not going well; even Muggle governments are noticing. Ron scans the obituary pages of the Daily Prophet, looking for familiar names. Dumbledore is absent from Hogwarts for long stretches of time, and the Order of the Phoenix has already suffered losses. And yet... As in all wars, life goes on. Sixth-year students learn to Apparate - and lose a few eyebrows in the process. The Weasley twins expand their business. Teenagers flirt and fight and fall in love. Classes are never straightforward, though Harry receives some extraordinary help from the mysterious Half-Blood Prince. So it\'s the home front that takes center stage in the multilayered sixth installment of the story of Harry Potter. Here at Hogwarts, Harry will search for the full and complex story of the boy who became Lord Voldemort - and thereby find what may be his only vulnerability. This gorgeous new edition in celebration of the 20th anniversary of the publication of Harry Potter and the Sorcerer\'s Stone features a newly designed cover illustrated by Caldecott Medalist Brian Selznick, as well as the beloved original interior decorations by Mary GrandPré.', 'http://books.google.com.bh/books?id=wSuqtAEACAAJ&dq=harry+potter+and+the+half+blood+prince&hl=&cd=2&', '9781338299199', 688, 1639227184, 5, 0),
(8, 'The Decision Book: 50 Models for Strategic Thinking', '', 'Business & Economics', 'Mikael Krogerus,Roman Tschäppeler', 'http://books.google.com/books/content?id=r48WfchgSVYC&printsec=frontcover&img=1&zoom=1&edge=curl&sou', 'A short, sharp guide to tackling life’s biggest challenges: understanding ourselves and making the right choices. Every day offers moments of decision, from what to eat for lunch to how to settle a dispute with a colleague. Still larger questions loom: How can I motivate my team? How can I work more efficiently? What is the long tail anyway? Whether you’re a newly minted MBA, a chronic second-guesser, or just someone eager for a new vantage point, The Decision Book presents fifty models for better structuring, and subsequently understanding, life’s steady challenges. Interactive and thought-provoking, this illustrated workbook offers succinct summaries of popular strategies, including the Rubber Band Model for dilemmas with many directions, the Personal Performance Model to test whether to change jobs, and the Black Swan Model to illustrate why experience doesn’t guarantee wisdom. Packed with familiar tools like the Pareto Principle, the Prisoner’s Dilemma, and an unusual exercise inspired by Warren Buffet, The Decision Book is the ideal reference for flexible thinkers.', 'http://books.google.com.bh/books?id=r48WfchgSVYC&pg=PA34&dq=the+decision+book&hl=&cd=1&source=gbs_ap', '9780393241341', 176, 1639249959, 5, 0),
(9, 'Maybe You Should Talk to Someone', 'A Therapist, Her Therapist, and Our Lives Revealed', 'BIOGRAPHY & AUTOBIOGRAPHY', 'Lori Gottlieb', 'http://books.google.com/books/content?id=ATKQDwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&sou', '\"From a New York Timesbest-selling writer, psychotherapist, and advice columnist, a brilliant and surprising new book that takes us behind the scenes of a therapist\'s world--where her patients are in crisis \'and so is she\'\"--', 'http://books.google.com.bh/books?id=ATKQDwAAQBAJ&printsec=frontcover&dq=maybe+you+should+talk+to+som', '9781328662057', 415, 1639301491, 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `id` int(11) NOT NULL,
  `fees` decimal(5,3) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`id`, `fees`, `type`) VALUES
(1, '1.000', 'monthly'),
(2, '0.100', 'penalty');

-- --------------------------------------------------------

--
-- Table structure for table `rented`
--

CREATE TABLE `rented` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `months` int(1) NOT NULL,
  `bill` decimal(5,3) NOT NULL,
  `cardname` varchar(50) NOT NULL,
  `cardnum` varchar(20) NOT NULL,
  `expiry` varchar(8) NOT NULL,
  `type` varchar(15) NOT NULL,
  `daterequested` int(15) NOT NULL,
  `dateborrowed` int(15) DEFAULT 0,
  `duedate` int(15) DEFAULT 0,
  `datereturned` int(15) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rented`
--

INSERT INTO `rented` (`id`, `book_id`, `user_id`, `months`, `bill`, `cardname`, `cardnum`, `expiry`, `type`, `daterequested`, `dateborrowed`, `duedate`, `datereturned`) VALUES
(1, 3, 1, 2, '2.000', 'Saira R', '1234 5678 435678', '05/2023', 'rent', 1639242818, 1639247116, 1644603916, 1639247593),
(2, 1, 1, 3, '3.000', 'Saira R', '1234 5678 435678', '05/2023', 'rent', 1639247653, 1638988718, 1639075118, 0),
(3, 4, 1, 1, '1.000', 'Saira R', '1234 5678 435678', '05/2023', 'rent', 1639248385, 0, 0, 0),
(4, 8, 2, 2, '2.000', 'saira', '1234 5678 435678', '05/2023', 'rent', 1639301581, 1639301650, 1644658450, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `active` int(1) NOT NULL DEFAULT 0,
  `timecreated` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `active`, `timecreated`) VALUES
(1, 'Saira R', 'saira93@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, 1639235184),
(2, 'saira', 'saira@123.com', 'e10adc3949ba59abbe56e057f20f883e', 1, 1639300287);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rented`
--
ALTER TABLE `rented`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rented`
--
ALTER TABLE `rented`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
