-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2020 at 07:30 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `C_ID` bigint(20) UNSIGNED NOT NULL,
  `A_ID` bigint(20) UNSIGNED NOT NULL,
  `H_NO` varchar(20) NOT NULL,
  `ST_NO` varchar(20) NOT NULL,
  `CITY` varchar(20) NOT NULL,
  `STATE` varchar(20) NOT NULL,
  `PINCODE` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`C_ID`, `A_ID`, `H_NO`, `ST_NO`, `CITY`, `STATE`, `PINCODE`) VALUES
(14, 1, 'House No- 6,', 'Gol park,', 'Kolkata,', 'West Bengal,', 760001);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AD_ID` int(10) UNSIGNED NOT NULL,
  `A_FNAME` varchar(50) NOT NULL,
  `A_LNAME` varchar(50) NOT NULL,
  `A_EMAIL` varchar(50) NOT NULL,
  `A_PWD` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AD_ID`, `A_FNAME`, `A_LNAME`, `A_EMAIL`, `A_PWD`) VALUES
(1, 'Anushka', 'Mandal', 'mandalanushka98@gmail.com', 'Anushka@1998'),
(2, 'Manisha', 'Pal', 'manishapal123@gmail.com', 'MP@123');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `B_ID` bigint(20) UNSIGNED NOT NULL,
  `B_NAME` varchar(50) NOT NULL,
  `B_PRICE` bigint(20) UNSIGNED NOT NULL,
  `B_RATING` int(10) UNSIGNED NOT NULL,
  `B_GENRE` varchar(50) NOT NULL,
  `B_AUTHOR` varchar(50) NOT NULL,
  `B_PUBLISHER` varchar(50) NOT NULL,
  `B_PUBLISHDATE` int(10) UNSIGNED NOT NULL,
  `B_DESCRIPTION` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`B_ID`, `B_NAME`, `B_PRICE`, `B_RATING`, `B_GENRE`, `B_AUTHOR`, `B_PUBLISHER`, `B_PUBLISHDATE`, `B_DESCRIPTION`) VALUES
(1, 'IT', 268, 4, 'Horror', 'Stephen King', 'Hodder & Stoughton', 2011, 'Stephen King’s terrifying, classic #1 New York Times bestseller, “a landmark in American literature” (Chicago Sun-Times)—about seven adults who return to their hometown to confront a nightmare they had first stumbled on as teenagers…an evil without a name: It.\r\n\r\nWelcome to Derry, Maine. It’s a small city, a place as hauntingly familiar as your own hometown. Only in Derry the haunting is real.\r\n\r\nThey were seven teenagers when they first stumbled upon the horror. Now they are grown-up men and women who have gone out into the big world to gain success and happiness. But the promise they made twenty-eight years ago calls them reunite in the same place where, as teenagers, they battled an evil creature that preyed on the city’s children. Now, children are being murdered again and their repressed memories of that terrifying summer return as they prepare to once again battle the monster lurking in Derry’s sewers.\r\n\r\nReaders of Stephen King know that Derry, Maine, is a place with a deep, dark hold on the author. It reappears in many of his books, including Bag of Bones, Hearts in Atlantis, and 11/22/63. But it all starts with It.\r\n\r\n“Stephen King’s most mature work” (St. Petersburg Times), “It will overwhelm you…to be read in a well-lit room only” (Los Angeles Times).'),
(2, 'You', 375, 0, 'Thriller', 'Caroline Kepnes', 'Simon & Schuster Ltd', 2018, 'How far would you go for the perfect love? A young man\'s dark obsession with an enigmatic, gorgeous writer leads to murderous consequences in this erotic psychological thriller.\r\n\r\nYou walk into the bookstore and you keep your hand on the door to make sure it doesn\'t slam. You smile, embarrassed to be a nice girl, and your nails are bare and your V-neck sweater is beige and it\'s impossible to know if you\'re wearing a bra but I don\'t think that you are. You\'re so clean that you\'re dirty and you murmur your first word to me - hello.\r\n\r\nWhen aspiring writer and recent Brown graduate Guinevere Beck strides into the bookstore where Joe works, he\'s instantly smitten. Beck is everything Joe has ever wanted: she\'s gorgeous, tough, razor-smart, and sexy beyond his wildest dreams. Joe needs to have her, and he\'ll stop at nothing to do so. As he begins to insinuate himself into her life - her friendships, her email, her phone - she can\'t resist her feelings for a guy who seems custom-made for her. So when her boyfriend, Benji, mysteriously disappears, Beck and Joe fall into a tumultuous affair. But there\'s more to Beck than her oh-so-perfect façade, and their mutual obsession quickly spirals into a whirlwind of deadly consequences.\r\n\r\nDark, masterful, and timely, debut novelist Caroline Kepnes\' You is a perversely romantic thriller that\'s more dangerously clever than any you\'ve heard before. A chilling account of unrelenting passion, this tale of love, sex, and death will stay with you long after the story ends.'),
(3, 'The Hound of the Baskervilles', 350, 0, 'Detective', 'Sir Arthur Conan Doyle', 'Ratna Sagar P. Ltd.', 2013, 'We owe The Hound of the Baskervilles (1902) to Arthur Conan Doyle\'s good friend Fletcher \"Bobbles\" Robinson, who took him to visit some scary English moors and prehistoric ruins, and told him marvelous local legends about escaped prisoners and a 17th-century aristocrat who fell afoul of the family dog. Doyle transmogrified the legend: generations ago, a hound of hell tore out the throat of devilish Hugo Baskerville on the moonlit moor. Poor, accursed Baskerville Hall now has another mysterious death: that of Sir Charles Baskerville. Could the culprit somehow be mixed up with secretive servant Barrymore, history-obsessed Dr. Frankland, butterfly-chasing Stapleton, or Selden, the Notting Hill murderer at large? Someone\'s been signaling with candles from the mansion\'s windows. Nor can supernatural forces be ruled out. Can Dr. Watson--left alone by Sherlock Holmes to sleuth in fear for much of the novel--save the next Baskerville, Sir Henry, from the hound\'s fangs?\r\nMany Holmes fans prefer Doyle\'s complete short stories, but their clockwork logic doesn\'t match the author\'s boast about this novel: it\'s \"a real Creeper!\" What distinguishes this particular Hound is its fulfillment of Doyle\'s great debt to Edgar Allan Poe--it\'s full of ancient woe, low moans, a Grimpen Mire that sucks ponies to Dostoyevskian deaths, and locals digging up Neolithic skulls without next-of-kins\' consent. \"The longer one stays here the more does the spirit of the moor sink into one\'s soul,\" Watson realizes. \"Rank reeds and lush, slimy water-plants sent an odour of decay ... while a false step plunged us more than once thigh-deep into the dark, quivering mire, which shook for yards in soft undulations around our feet ... it was as if some malignant hand was tugging us down into those obscene depths.\" Read on--but, reader, watch your step! --Tim Appelo'),
(4, 'The Notebook', 234, 0, 'Romance', 'Nicholas Sparks', 'Grand Central Publishing', 2006, 'Review\r\n\"Somewhere,\" muses Noah Calhoun, while sitting on his porch in the moonight, \"there were people making love.\" The Notebook, a Southern-fried story of love-lost-and-found-again, revolves around a single time-honored romantic dilemma: will beautiful Allison Nelson stay with Mr. Respectability (to whom she happens to be engaged), or will she choose Noah, the romantic rascal she left so many years ago?\r\nBook Description\r\n* The love story to end all love stories from the internationally bestselling author\r\n* Now a major motion picture starring Ryan Gosling and Rachel McAdams\r\n\r\nAbout the Author\r\nNicholas Sparks is the author of the #1 New York Times bestsellers The Rescue and Nights in Rodanthe, as well as The Notebook, Message in a Bottle, A Walk to Remember, A Bend in the Road, The Guardian, The Wedding, and his moving memoir, Three Weeks with My Brother, written with his brother, Micah. All his books were New York Times and international bestsellers translated into more than thirty languages, and Message in a Bottle, A Walk to Remember, and The Notebook were adapted into major motion pictures. Nicholas Sparks lives in North Carolina with his wife and family.'),
(5, 'The Exorcist', 406, 0, 'Horror', 'William Peter Blatty', 'Corgi', 2011, 'Father Damien Karras: \'Where is Regan?\'\r\nRegan MacNeil: \'In here. With us.\'\r\n\r\nThe terror begins unobtrusively. Noises in the attic. In the child\'s room, an odd smell, the displacement of furniture, an icy chill. At first, easy explanations are offered. Then frightening changes begin to appear in eleven-year-old Regan. Medical tests fail to shed any light on her symptoms, but it is as if a different personality has invaded her body.\r\n\r\nFather Damien Karras, a Jesuit priest, is called in. Is it possible that a demonic presence has possessed the child? Exorcism seems to be the only answer...\r\n\r\nFirst published in 1971, The Exorcist became a literary phenomenon and inspired one of the most shocking films ever made. This edition, polished and expanded by the author, includes new dialogue, a new character and a chilling new extended scene, provides an unforgettable reading experience that has lost none of its power to shock and continues to thrill and terrify new readers.'),
(6, 'The Amityville Horror', 566, 0, 'Horror', 'Jay Anson', ' Pocket Star', 2005, '“A fascinating and frightening book” (Los Angeles Times)—the bestselling true story about a house possessed by evil spirits, haunted by psychic phenomena almost too terrible to describe.\r\n\r\nIn December 1975, the Lutz family moved into their new home on suburban Long Island. George and Kathleen Lutz knew that, one year earlier, Ronald DeFeo had murdered his parents, brothers, and sisters in the house, but the property—complete with boathouse and swimming pool—and the price had been too good to pass up.\r\n\r\nTwenty-eight days later, the entire Lutz family fled in terror.\r\n\r\nThis is the spellbinding, shocking true story that gripped the nation about an American dream that turned into a nightmare beyond imagining—“this book will scare the hell out of you” (Kansas City Star).'),
(7, 'Infidel', 1029, 0, 'Horror', ' Pornsak Pichetshote', ' Image Comics', 2018, '\"One that should not be ignored.\" -Newsarama \"With its precise interplay of real-life fears and supernatural terror, Infidel is as mesmerizing as it is insightful.\" -NPR \"Horror as topical as it is viscerally distressing? leaves readers both creeped out and more aware of the presence of everyday monsters.\" -Publishers Weekly (starred review) \"A genuinely creepy and modern horror comic.\" -Cliff Chiang, Paper Girls \"Infidel is a shocking comic. It\'s an early pick for one of the best horror comics of the year. It will chill you to the bone and not just because of the horrifying visions the ma \"One of the most compelling and evocative tales with powerful social commentary, gripping tension, beautiful art and well-paced execution.\" -Multiversity Comics'),
(8, 'The Outsider', 343, 0, 'Horror', 'Stephen King', 'Hodder Paperbacks', 2019, 'When an eleven-year-old boy is found murdered in a town park, reliable eyewitnesses undeniably point to the town\'s popular Little League coach, Terry Maitland, as the culprit. DNA evidence and fingerprints confirm the crime was committed by this well-loved family man.\r\n\r\nHorrified by the brutal killing, Detective Ralph Anderson, whose own son was once coached by Maitland, orders the suspect to be arrested in a public spectacle. But Maitland has an alibi. And further research confirms he was indeed out of town that day.\r\n\r\nAs Anderson and the District Attorney trace the clues, the investigation expands from Ohio to Texas. And as horrifying answers begin to emerge, so King\'s propulsive story of almost unbearable suspense kicks into high gear.\r\n\r\nTerry Maitland seems like a nice guy but there is one rock-hard fact, as unassailable as gravity: a man cannot be in two places at the same time. Can he?'),
(9, 'Pet Sematary', 250, 0, 'Horror', 'Stephen King', 'Hodder & Stoughton', 2019, 'King can make the flesh creep half a world away (The Times)\r\n\r\nSo beautifully paced that you cannot help but be pulled in (Guardian)\r\n\r\nThe most frightening novel Stephen King has ever written (Publisher\'s Weekly)\r\n\r\nWild, powerful, disturbing (Washington Post Book Review)\r\n\r\nKing can make the flesh creep half a world away (The Times)'),
(10, 'I Am Behind You', 542, 0, 'Horror', 'John Ajvide Lindqvist', ' riverrun', 2018, 'A supernatural superthriller from the author of Let the Right One In\r\n\r\nMolly wakes her mother to go to the toilet. The campsite is strangely blank. The toilet block has gone. Everything else has gone too. This is a place with no sun. No god.\r\n\r\nJust four families remain. Each has done something to bring them here - each denies they deserve it. Until they see what\'s coming over the horizon, moving irrevocably towards them. Their worst mistake. Their darkest fear.\r\n\r\nAnd for just one of them, their homecoming.\r\n\r\n\r\nThis gripping conceptual horror takes you deep into one of the most macabre and unique imaginations writing in the genre. On family, on children, Lindqvist writes in a way that tears the heart and twists the soul. I Am Behind You turns the world upside down and, disturbing, terrifying and shattering by turns, it will suck you in.'),
(11, 'Bedfellow', 688, 0, 'Horror', 'Jeremy C. Shipp', 'Tor.com', 2018, 'From Jeremy C. Shipp, the Bram Stoker Award-nominated author of The Atrocities, comes a tense dark fantasy novel of psychological horror in Bedfellow.\r\n\r\nIt broke into their home and set up residence in their minds.\r\n\r\nWhen the . . . thing first insinuated itself into the Lund family household, they were bemused. Vaguely human-shaped, its constantly-changing cravings seemed disturbing, at first, but time and pressure have a way of normalizing the extreme. Wasn’t it always part of their lives?\r\n\r\nAs the family make more and greater sacrifices in service to the beast, the thrall that binds them begins to break down. Choices must be made. Prices must be paid. And the Lunds must pit their wits against a creature determined to never let them go.\r\n\r\nIt\'s psychological warfare. Sanity is optional.'),
(12, 'Dracula', 354, 0, 'Horror', 'Bram Stoker', 'Transatlantic Press', 2012, '\r\n\'I could feel the soft, shivering touch of the lips on the super-sensitive skin of my throat and the hard dents of two sharp teeth, just touching and pausing there. I closed my eyes in a languorous ecstasy and waited waited with beating heart.\'\r\n\r\nIn equal measures mesmerizing as it is diabolical, Dracula, told in epistolary format, is the story of Count Dracula and his attempt to move from Transylvania to England and the battle between him and a small team of people led by Professor Abraham Van Helsing.\r\n\r\nBram Stokers bone-chilling vampire tale was not the first of its kind; the author was influenced by fellow Dubliner Sheridan Le Fanus similarly-themed short story Carmilla, published in 1872, 25 years before Dracula. But it is the latter that stands at the pinnacle of this horror sub-genre. We would not recommend it to nervous persons for evening reading, \"\"The Times review advised when it was hot off the press, indicative of the power of the text to those more familiar with comic or schlocky adaptations of this Gothic classic. English lawyer Jonathan Harker journeys to Count Draculas Transylvanian castle to discuss a routine real estate transaction. Title deeds are the last thing on the shape-shifting Counts mind. He has a thirst for pastures new and fresh blood, and as the action moves to England, he gorges himself at the expense of the unfortunate ships crew. Harkers fiancée Mina, her friend Lucy Westenra, Dr Seward and vampire expert Professor Van Helsing band together to stop the undead count from rising. Only certain weapons will be effective, and not all of them will survive. Told through the diaries and letters of the chief characters, Dracula has a gripping authenticity and immediacy that draws the reader into its shadowy nightmare.'),
(13, 'Rosemary\'s Baby', 854, 0, 'Horror', 'Ira Levin', 'Pegasus Books', 2014, 'A masterpiece of spellbinding suspense, where evil wears the most innocent face of all . . .\r\n\r\nRosemary Woodhouse and her struggling actor husband Guy move into the Bramford, an old New York City apartment building with an ominous reputation and mostly elderly residents. Neighbors Roman and Minnie Castavet soon come nosing around to welcome the Woodhouses to the building, and despite Rosemary\'s reservations about their eccentricity and the weird noises that she keeps hearing, her husband takes a special shine to them. Shortly after Guy lands a plum Broadway role, Rosemary becomes pregnant, and the Castavets start taking a special interest in her welfare. As the sickened Rosemary becomes increasingly isolated, she begins to suspect that the Castavets\' circle is not what it seems . . .\r\n\r\n\r\nReview\r\n\"Suspense is beautifully intertwined with everyday incidents; the delicate line between belief and disbelief is faultlessly drawn.\", New York Times\r\n\r\n\"A succession of solid and quite legitimate surprises. The suspense is admirably sustained.\", New Yorker\r\n\r\n\"A darkly brilliant tale of modern devilry that induces the reader to believe the unbelievable. I believed it and was altogether enthralled.\" -- Truman Capote\r\n\r\nAbout the Author\r\nIra Levin is the author of The Boys from Brazil, Rosemary’s Baby, Son of Rosemary, The Stepford Wives, This Perfect Day, Sliver, and A Kiss Before Dying (for which he won the Edgar Award). Levin was also the recipient of three Mystery Writers of America Edgar Allan Poe Awards. His website is iralevin.org.'),
(14, 'Message In A Bottle', 249, 4, 'Romance', 'Nicholas Sparks', 'Grand Central Publishing', 2016, 'In a moment of desolation on a windswept beach, Garrett bottles his words of undying love for a lost woman, and throws them to the sea.\r\n\r\nMy dearest Catherine, I miss you my darling, as I always do, but today is particularly hard because the ocean has been singing to me, and the song is that of our life together . . .\r\n\r\nBut the bottle is picked up by Theresa, a mother with a shattered past, who feels unaccountably drawn to this lonely man. Who are this couple? What is their story? Beginning a search that will take her to a sunlit coastal town and an unexpected confrontation, it is a tale that resonates with everlasting love and the enduring promise of redemption.\r\n\r\nReview\r\nThis story will tug at the heartstrings like never before (OK!)\r\n\r\nAn A-grade romantic read (Cosmopolitan)\r\n\r\nA bittersweet love story (In Style Magazine)\r\n\r\nDefinitely one to read with a box of tissues handy (The Times)\r\n\r\nBook Description\r\nReissued now for the first time with the movie artwork cover featuring Kevin Costner and Robin Wright, this is the bestselling novel from Nicholas Sparks, author of The Notebook\r\n\r\nAbout the Author\r\nWith over 105 million copies of his books sold, Nicholas Sparks is one of the world\'s most beloved storytellers. His novels include thirteen number one New York Times bestsellers. All Nicholas Sparks\' books have been international bestsellers and have been translated into more than fifty languages. Eleven of his novels have been adapted into major films - The Longest Ride, The Best of Me, Safe Haven, The Lucky One, The Last Song, Dear John, Nights in Rodanthe, Message in a Bottle, A Walk to Remember, The Notebook and The Choice.\r\n\r\nFor all the latest news from Nicholas Sparks, sign up for his e-Newsletter at www.nicholassparks.com, and follow him on Facebook and Twitter: @NicholasSparks.'),
(15, 'The Fault in our Stars', 309, 0, 'Romance', 'John Green', 'Penguin', 2013, 'one for all\r\nThe Fault in our Stars is a book for everyone, be it people in their old age, or teens studying in school, this book is an ideal feel good and emotional novel for all. Written by John Green and published by Penguin UK, in the year 2013, this book has gone on to become a major seller in all parts of the world. It has sold more than ten million copies worldwide.\r\n\r\nEmotional Core\r\nThe book is about two teenagers, Hazel Grace Lancaster and Augustus Waters, who are also the protagonists and follows their lives when they are diagnosed with terminal cancer. Their lives change completely post diagnosis. Hazel meets Augustus for the very first time at a, support centre for cancer patients and survivors, which she had started to attend. Augustus is there for a remission. This is when they meet each other and their lives see some light again and they feel alive and better. This is a book that has it all be it love, emotion, drama, humour, pain, fear and even death.\r\n'),
(16, 'A Walk To Remember', 214, 0, 'Romance', 'Nicholas Sparks', 'Grand Central Publishing', 2006, 'The last person Landon thought he would fall for was Jamie Sullivan, daughter of the town\'s Baptist minister. A quiet girl, Jamie seemed content living in a world apart from the other teens. She took care of her widowed father, rescued hurt animals and volunteered at the local orphanage.\r\n\r\nLandon would never have dreamed of asking her out, but a twist of fate threw them together when he found himself without a partner for the school dance. In the months that followed, Landon discovered truths that most people take a lifetime to learn - about the joy of giving, the pain of loss and, most of all, the transforming nature of love. Being with Jamie would show him the depths of the human heart and lead him to a decision so stunning it would send him irrevocably on the road to manhood . . .\r\n\r\nReview\r\nEvery now and then you stumble across an extraordinary book that at first appears like countless others, but then you read it and are amazed at the treasure hidden within.'),
(17, 'Me Before You', 323, 0, 'Romance', 'Jojo Moyes', 'Penguin', 2012, 'From the New York Times bestselling author of The Giver of Stars, discover the love story that captured over 20 million hearts in Me Before You, After You, and Still Me.\r\n\r\nThey had nothing in common until love gave them everything to lose . . .\r\n\r\nLouisa Clark is an ordinary girl living an exceedingly ordinary life—steady boyfriend, close family—who has never been farther afield than their tiny village. She takes a badly needed job working for ex–Master of the Universe Will Traynor, who is wheelchair bound after an accident. Will has always lived a huge life—big deals, extreme sports, worldwide travel—and now he’s pretty sure he cannot live the way he is.\r\n\r\nWill is acerbic, moody, bossy—but Lou refuses to treat him with kid gloves, and soon his happiness means more to her than she expected. When she learns that Will has shocking plans of his own, she sets out to show him that life is still worth living.\r\n\r\nA Love Story for this generation, Me Before You brings to life two people who couldn’t have less in common—a heartbreakingly romantic novel that asks, What do you do when making the person you love happy also means breaking your own heart?'),
(18, 'It Ends With Us', 385, 0, 'Romance', 'Colleen Hoover', ' Simon & Schuser India ', 2016, 'The newest, highly anticipated novel from beloved #1 New York Times bestselling author, Colleen Hoover. Sometimes it is the one who loves you who hurts you the most. Lily hasn’t always had it easy, but that’s never stopped her from working hard for the life she wants. She’s come a long way from the small town in Maine where she grew up—she graduated from college, moved to Boston and started her own business. So when she feels a spark with a gorgeous neurosurgeon named Ryle Kincaid, everything in Lily’s life suddenly seems almost too good to be true. Ryle is assertive, stubborn, maybe even a little arrogant. He’s also sensitive, brilliant and has a total soft spot for Lily. And the way he looks in scrubs certainly doesn’t hurt. Lily can’t get him out of her head. But Ryle’s complete aversion to relationships is disturbing. Even as Lily finds herself becoming the exception to his “no dating” rule, she can’t help but wonder what made him that way in the first place. As questions about her new relationship overwhelm her, so do thoughts of Atlas Corrigan—her first love and a link to the past she left behind. He was her kindred spirit, her protector. When Atlas suddenly reappears, everything Lily has built with Ryle is threatened. With this bold and deeply personal novel, Colleen Hoover delivers a heart-wrenching story that breaks exciting new ground for her as a writer. Combining a captivating romance with a cast of all-too-human characters, it ends with us is an unforgettable tale of love that comes at the ultimate price.'),
(19, 'The Princess Bride', 557, 0, 'Romance', ' William Goldman', 'Harcourt Children\'s Books', 2010, 'What happens when the most beautiful girl in the world marries the handsomest prince of all time and he turns out to be...well...a lot less than the man of her dreams?\r\nAs a boy, William Goldman claims, he loved to hear his father read the \"S. Morgenstern classic, The Princess Bride. But as a grown-up he discovered that the boring parts were left out of good old Dad\'s recitation, and only the \"good parts\" reached his ears.\r\nNow Goldman does Dad one better. He\'s reconstructed the \"Good Parts Version\" to delight wise kids and wide-eyed grownups everywhere.\r\nWhat\'s it about? Fencing. Fighting. True Love. Strong Hate. Harsh Revenge. A Few Giants. Lots of Bad Men. Lots of Good Men. Five or Six Beautiful Women. Beasties Monstrous and Gentle. Some Swell Escapes and Captures. Death, Lies, Truth, Miracles, and a Little Sex.\r\nIn short, it\'s about everything.\r\nEventually to be adapted for the silver screen, THE PRINCESS BRIDE was originally a beautifully simple, insightfully comic story of what happens when the most beautiful girl in the world marries the handsomest prince in the world--and he turnsout to be a son of a bitch. Guaranteed to entertain both young and old alike by combining scenes of rowsing fantasy with hilarious reality, THE PRINCESS BRIDE secures Goldman\'s place as a master storyteller.'),
(20, 'The Giver of Stars', 494, 0, 'Romance', 'Jojo Moyes', 'Michael Joseph', 2019, 'England, late 1930s, and Alice Wright - restless, stifled - makes an impulsive decision to marry wealthy American Bennett Van cleve and leave her home and family behind. But stuffy, disapproving baileyville, Kentucky, where her husband favours work over his wife, and is dominated by his overbearing father, is not the adventure - or the escape - that she hoped for. That is, until she meets Margery O\'Hare - daughter of a notorious felon and a troublesome woman the town wishes to forget. Margery\'s on a mission to spread the wonder of books and reading to the poor and lost - and she needs Alice\'s help. Trekking alone under big open skies, through wild mountain forests, Alice, Margery and their fellow sisters of the trail discover freedom, friendship - and a life to call their own. But when baileyville turns against them, will their belief in one another - and the power of the written word - be enough to save them?.\r\n\r\n\r\nHER BEST NOVEL YET (The Times)\r\n\r\nInspiring and wildly romantic, Daily Mail Books of the Year\r\n\r\nAn entertaining, immersive and moving read. The Giver of Stars is rip-roaring popular fiction . . . but it is also a novel that celebrates education, intellectual curiosity and, above all, books and the knowledge, comfort, company and power that they can bring. Moyes shines a light on a historic footnote to pay tribute to women\'s work, endurance and female solidarity, The Sunday Times\r\n\r\nFor years I\'ve been a huge Jojo Moyes fan. It\'s such a great narrative about personal strength and really captures how books bring communities together, especially for these women who are completely bonded by their love of literature, Reese Witherspoon\r\n\r\nA genuinely entertaining book that\'s a perfect gift for people who need some escape from the everyday and just want to be absorbed in a really cracking story. Set in rural America in the 1930s, it\'s got a band of feisty characters who are funny and sweet with contemporary resonances to boot, The best books to give this Christmas, Stylist\r\n\r\nWith characters so real they feel like dear friends and a compelling storyline, this is a beautiful, special novel. I loved it and didn\'t want it to end!, Liane Moriarty\r\n\r\nWhat a wonderful novel. The Giver of Stars is the most sweeping, dramatic, richly evocative book, full of brilliantly feisty women. I whipped through the pages, utterly agog, pretty much feeling as though I was on a horse in 1930s Kentucky myself, Sophie Kinsella\r\n\r\nEpic, David Nicholls, bestselling author of One Day\r\n\r\nTimeless, Jojo Moyes\' greatest work yet, and one of the most exquisitely-written - and absolutely compulsory - novels about women ever told. Brilliant and perfect and will remind you of why you read; even of why you breathe, Lisa Taddeo, bestselling author of Three Women\r\n\r\nPurest joy - even as it cheerfully breaks your heart. A go-get-em adventure about E Roosevelt\'s horseback librarians, it celebrates female friendship and the power of books, Damian Barr'),
(21, 'Something Borrowed', 313, 0, 'Romance', ' Emily Giffin', 'Arrow', 2011, 'Rachel Miller and Darcy Rhone have been best friends since childhood. They\'ve shared birthdays, the horrors of high school and even boyfriends, but while Darcy is the sort of woman who breezes through life getting what she wants when she wants it, Rachel has always played by the rules and watched her stunning best friend steal all the limelight. The one thing Rachel\'s always had over Darcy is the four-month age gap which meant she was first to being a teenager, first to drive, first to everything - but now she\'s about to be first to thirty. And Darcy still has a charmed life.\r\n\r\nOn the eve of her thirtieth birthday, Rachel is shocked to find herself questioning the status quo. How come Darcy gets a glamorous job at a PR firm and the perfect boyfriend, while Rachel grinds away at her despised job as an attorney and remains painfully single. Is it just luck? Or, looking back at their friendship and their lives together, is it a bit more complicated than that? Then an accidental fling complicates everything, and it\'s time for Rachel to make a few hard choices. And she\'s suddenly forced to learn that sometimes true love comes at a price ...'),
(22, 'The Proposal', 748, 0, 'Romance', 'Jasmine Guillory  ', 'Berkley', 2018, 'THE NEW YORK TIMES BESTSELLER\r\nA Reese Witherspoon x Hello Sunshine Book Club Pick\r\n\r\n“There is so much to relate to and throughout the novel, there is a sharp feminist edge. Loved this one, and you will too.”—New York Times bestselling author Roxane Gay\r\n\r\nThe New York Times bestselling author of The Wedding Date serves up a novel about what happens when a public proposal doesn\'t turn into a happy ending, thanks to a woman who knows exactly how to make one on her own...\r\n\r\nWhen someone asks you to spend your life with him, it shouldn\'t come as a surprise—or happen in front of 45,000 people.\r\n\r\nWhen freelance writer Nikole Paterson goes to a Dodgers game with her actor boyfriend, his man bun, and his bros, the last thing she expects is a scoreboard proposal. Saying no isn\'t the hard part—they\'ve only been dating for five months, and he can’t even spell her name correctly. The hard part is having to face a stadium full of disappointed fans...\r\n\r\nAt the game with his sister, Carlos Ibarra comes to Nik’s rescue and rushes her away from a camera crew. He’s even there for her when the video goes viral and Nik’s social media blows up—in a bad way. Nik knows that in the wilds of LA, a handsome doctor like Carlos can\'t be looking for anything serious, so she embarks on an epic rebound with him, filled with food, fun, and fantastic sex. But when their glorified hookups start breaking the rules, one of them has to be smart enough to put on the brakes...'),
(23, 'Crazy Rich Asians', 595, 0, 'Comedy', 'Kevin Kwan', 'Anchor', 2014, 'A hilarious and heartwarming New York Times bestselling novel—now a major motion picture!\r\n \r\n“This 48-karat beach read is crazy fun.” —Entertainment Weekly\r\n\r\nWhen New Yorker Rachel Chu agrees to spend the summer in Singapore with her boyfriend, Nicholas Young, she envisions a humble family home and quality time with the man she hopes to marry. But Nick has failed to give his girlfriend a few key details. One, that his childhood home looks like a palace; two, that he grew up riding in more private planes than cars; and three, that he just happens to be the country’s most eligible bachelor.\r\n \r\nOn Nick’s arm, Rachel may as well have a target on her back the second she steps off the plane, and soon, her relaxed vacation turns into an obstacle course of old money, new money, nosy relatives, and scheming social climbers.'),
(24, 'A Dirty Job', 335, 0, 'Comedy', ' Christopher Moore', 'William Morrow Paperbacks', 2007, 'From the Back Cover\r\nCharlie Asher is a pretty normal guy with a normal life, married to a bright and pretty woman who actually loves him for his normalcy. They\'re even about to have their first child. Yes, Charlie\'s doing okay—until people start dropping dead around him, and everywhere he goes a dark presence whispers to him from under the streets. Charlie Asher, it seems, has been recruited for a new position: as Death.\r\n\r\nIt\'s a dirty job. But, hey! Somebody\'s gotta do it.\r\n\r\nAbout the Author\r\nChristopher Moore is the author of the novels Secondhand Souls, Sacré Bleu, A Dirty Job, and Lamb. He lives in San Francisco, California.'),
(25, 'Bossy Pants', 479, 0, 'Comedy', 'Tina Fey', 'Sphere', 2012, 'Once in a generation a woman comes along who changes everything. Tina Fey is not that woman, but she met that woman once and acted weird around her.\r\n\r\nBefore 30 Rock, Mean Girls and \'Sarah Palin\', Tina Fey was just a young girl with a dream: a recurring stress dream that she was being chased through a local airport by her middle-school gym teacher.\r\n\r\nShe also had a dream that one day she would be a comedian on TV. She has seen both these dreams come true.\r\n\r\nAt last, Tina Fey\'s story can be told. From her youthful days as a vicious nerd to her tour of duty on Saturday Night Live; from her passionately halfhearted pursuit of physical beauty to her life as a mother eating things off the floor; from her one-sided college romance to her nearly fatal honeymoon - from the beginning of this paragraph to this final sentence.\r\n\r\nTina Fey reveals all, and proves what we\'ve all suspected: you\'re no one until someone calls you bossy.'),
(26, 'Sick in the Head', 390, 0, 'Comedy', 'Judd Apatow ', 'Random House Trade Paperbacks', 2016, 'NEW YORK TIMES BESTSELLER • NAMED ONE OF THE BEST BOOKS OF THE YEAR BY THE A.V. CLUB • Includes new interviews!\r\n\r\nFrom the writer and director of Knocked Up and the producer of Freaks and Geeks comes a collection of intimate, hilarious conversations with the biggest names in comedy from the past thirty years—including Mel Brooks, Jerry Seinfeld, Jon Stewart, Sarah Silverman, Harold Ramis, Seth Rogen, Chris Rock, and Lena Dunham.\r\n\r\nBefore becoming one of the most successful filmmakers in Hollywood, Judd Apatow was the original comedy nerd. At fifteen, he took a job washing dishes in a local comedy club—just so he could watch endless stand-up for free. At sixteen, he was hosting a show for his local high school radio station in Syosset, Long Island—a show that consisted of Q&As with his comedy heroes, from Garry Shandling to Jerry Seinfeld. They talked about their careers, the science of a good joke, and their dreams of future glory (turns out, Shandling was interested in having his own TV show one day and Steve Allen had already invented everything).\r\n\r\nThirty years later, Apatow is still that same comedy nerd—and he’s still interviewing funny people about why they do what they do.\r\n\r\nSick in the Head gathers Apatow’s most memorable and revealing conversations into one hilarious, wide-ranging, and incredibly candid collection that spans not only his career but his entire adult life. Here are the comedy legends who inspired and shaped him, from Mel Brooks to Steve Martin. Here are the contemporaries he grew up with in Hollywood, from Spike Jonze to Sarah Silverman. And here, finally, are the brightest stars in comedy today, many of whom Apatow has been fortunate to work with, from Seth Rogen to Amy Schumer. And along the way, something kind of magical happens: What started as a lifetime’s worth of conversations about comedy becomes something else entirely. It becomes an exploration of creativity, ambition, neediness, generosity, spirituality, and the joy that comes from making people laugh.\r\n\r\nLoaded with the kind of back-of-the-club stories that comics tell one another when no one else is watching, this fascinating, personal (and borderline-obsessive) book is Judd Apatow’s gift to comedy nerds everywhere.\r\n\r\nPraise for Sick in the Head\r\n\r\n“I can’t stop reading it. . . . I don’t want this book to end.”—Jimmy Fallon\r\n\r\n“An essential for any comedy geek.”—Entertainment Weekly\r\n\r\n“Fascinating . . . a collection of interviews with many of the great figures of comedy in the latter half of the twentieth century.”—The Washington Post\r\n\r\n“Open this book anywhere, and you’re bound to find some interesting nugget from someone who has had you in stitches many, many times.”—Janet Maslin, The New York Times\r\n\r\n“An amazing read, full of insights and connections both creative and interpersonal.”—The New Yorker\r\n\r\n“Fascinating and revelatory.”—Chicago Tribune\r\n\r\n“Anyone even remotely interested in comedy or humanity should own this book.”—Will Ferrell'),
(27, 'Three Men in a Boat', 280, 0, 'Comedy', ' Jerome K. Jerome ', 'Penguin', 2017, 'George, J., Harris and Montmorency, the dog, are the best of friends. Armed with interesting anecdotes, their quirky personalities and a boat, the three men and the dog decide to go on a boat trip across River Thames. But they discover that their fancy ideas of a boat trip, which includes visits to many famous riverside towns of England in the 19th-century, are very different from the reality! Jerome K Jerome’s Three Men in a Boat is a comic tale of friendship, misadventure and fun. It is a delightful story for all ages and seasons. Hidden within the seemingly funny incidents and comments are the writer’s opinions on the foibles in England’s history and society. The book offers a refreshing look at the various places, people and mannerisms in the country.'),
(28, 'Fool', 860, 0, 'Comedy', 'Christopher Moore', 'William Morrow Paperbacks', 2010, 'Verily speaks Christopher Moore, much-beloved scrivener and peerless literary jester, who hath writteneth much that is of grand wit and belly-busting mirth, including such laureled bestsellers of the Times of Olde Newe Yorke as Lamb, A Dirty Job, and You Suck: A Love Story. Now he takes on no less than the legendary Bard himself (with the utmost humility and respect) in a twisted and insanely funny tale of a moronic monarch and his deceitful daughters—a rousing story of plots, subplots, counterplots, betrayals, war, revenge, bared bosoms, unbridled lust . . . and a ghost (there\'s always a bloody ghost), as seen through the eyes of a man wearing a codpiece and bells on his head.\r\n\r\nAbout the Author\r\nChristopher Moore is the author of the novels Secondhand Souls, Sacré Bleu, A Dirty Job, and Lamb. He lives in San Francisco, California.'),
(29, 'Straight Man', 300, 0, 'Comedy', 'Richard Russo ', 'Vintage', 1998, 'Hank Devereaux, a fifty-year-old, one-time novelist now serving as temporary chair of the English department, has more than a mid-life crisis to contend with when he learns that he must cull 20 per cent of his department to meet budget. Half in love with three women, unable to understand his younger daughter or come to terms with his father, he has a dangerous philosophy that life, and academic life, could be simpler, but he fails to see the larger consequences of his own actions or of the small-world politics that ebb and flow around him, as his colleagues jostle for position and marriages fall apart and regroup. The despair of his wife, and the scourge of the campus geese, he is a man at odds with himself and caught somewhere between cause and effect.'),
(30, 'Calypso', 430, 0, 'Comedy', 'David Sedaris ', 'Little, Brown', 2018, '\'Unquestionably the king of comic writing . . . Calypso is both funnier and more heartbreaking than pretty much anything out there\' Hadley Freeman, Guardian\r\n\r\nA New York Times Notable Book of 2018\r\n\r\nIf you\'ve ever laughed your way through David Sedaris\'s cheerfully misanthropic stories, you might think you know what you\'re getting with Calypso. You\'d be wrong.\r\n\r\nWhen he buys a beach house on the Carolina coast, Sedaris envisions long, relaxing vacations spent playing board games and lounging in the sun with those he loves most. And life at the Sea Section, as he names the vacation home, is exactly as idyllic as he imagined, except for one tiny, vexing realization: it\'s impossible to take a vacation from yourself.\r\n\r\nWith Calypso, Sedaris sets his formidable powers of observation toward middle age and mortality. Make no mistake: these stories are very, very funny - it\'s a book that can make you laugh \'til you snort, the way only family can. Sedaris\'s writing has never been sharper, and his ability to shock readers into laughter unparalleled. But much of the comedy here is born out of that vertiginous moment when your own body betrays you and you realize that the story of your life is made up of more past than future.\r\n\r\nThis is beach reading for people who detest beaches, required reading for those who loathe small talk and love a good tumour joke. Calypso is simultaneously Sedaris\'s darkest and warmest book yet - and it just might be his very best.'),
(31, 'The Big Sleep', 239, 0, 'Crime ', 'Raymond Chandler', 'Penguin UK', 2011, '\'I was neat, clean, shaved and sober, and I didn\'t care who knew it. I was everything the well-dressed private detective ought to be. I was calling on four million dollars.\'\r\n\r\nLos Angeles Private Investigator Philip Marlowe is hired by wheelchair-bound General Sternwood to discover who is blackmailing him. A broken, weary old man, Sternwood just wants Marlowe to make the problem go away. However, with Sternwood\'s two wild, devil-may-care daughters prowling LA\'s seedy backstreets, Marlowe\'s got his work cut out. And that\'s before he stumbles over the first corpse.\r\n\r\nThe Big Sleep is Raymond Chandler\'s first novel featuring laconic PI Philip Marlowe.\r\n\r\n\'One of the greatest crime writers, who set standards others still try to attain\' Sunday Times\r\n\r\n\'Chandler grips the mind from the first sentence\' Daily Telegraph\r\n\r\n\'One of the greatest crime writers, who set standards others still try to attain\' Sunday Times\r\n\r\n\'Chandler is an original stylist, creator of a character as immortal as Sherlock Holmes\' Anthony Burgess\r\n\r\nDiscover the newest addition to the inimitable Philip Marlowe series - Only to Sleep by Lawrence Osborne - out 6 September 2018 in hardback and ebook from Hogarth.'),
(32, 'If Tomorrow Comes', 267, 4, 'Crime', 'Sidney Sheldon', 'Harper Collins', 2005, 'This 1985 crime fiction novel is the story of an ordinary woman who faces tough circumstances and metamorphoses into a different persona altogether. Tracy has a new job at a banking firm, a wealthy fiancé whose child she is carrying and high hopes from life. Just when everything appears seamless, her life takes a drastic turn.\r\n\r\nTracy’s mother commits suicide and she soon discovers that her mother was in a lot of debt after being tricked by New Orleans Mafia. She decides forthrightly to take vengeance on the mob. However, she ends up getting raped. With his influences, the Mafia boss Orsatti charges Tracy with attempt to murder and theft. Betrayed by her lawyer, who leads her to believe that pleading guilty would shorten her sentence, Tracy lands in prison with a 15 year sentence to serve.\r\n\r\nBrutalized in the prison, she loses her baby and is deserted by her fiancé, too. All alone, Tracy decides to toughen up, she makes friends with an influential prisoner Enristine, who supports her through her tough time.\r\n\r\nWhen Tracy gets paroled, she starts plotting the downfall of every man who led her life this way. After taking revenge of her mother’s death and her prison sentence, Tracy finds redemption in becoming a con-artist. She now steals from those that she believes deserve to be stolen from. With her newly gained talents and a haunting criminal record, Tracy’s life is now a colorful crime bender.\r\n\r\nAbout the author:\r\nSidney Sheldon was a popular author of crime and thriller novels. He is best known for his women protagonists who are feminine and gentle, yet show great strength of character when circumstances put their backs to the wall. He has also been a screenwriter for movies and TV shows. His television credits include the popular show I Dream of Jeannie. Some of his other popular books are A Stranger in the Mirror, The Doomsday Conspiracy, Windmills of the Gods and The Best Laid Plans.'),
(33, 'The Godfather', 399, 0, 'Crime ', 'Mario Puzo', 'RHUK', 1991, 'A legend is born\r\nMario Puzo\'s novel, The Godfather, has dominated the cinema and book culture for years and left behind an unparalleled legacy. The superlatives used to describe the life and times of Don Corleone, a renowned Sicilian mobster and a feared mafia lord of the Cosa Nostra in the 60\'s New York and his familial ties portray a powerful picture of the mafia world. The characters have been described as gritty and hardened at first; but slowly the novel reveals how greed and ambition transforms a man from a powerful entity to a sad microcosm. Amidst all the violence and chaos, readers are left with the most spine-chilling questions of all: How far would you go to save your family?\r\n\r\nExemplary characterisations and a fast-paced plot\r\nThe novel begins with the events that transpire at Connie Corleone\'s wedding, daughter of Don \"The Godfather\" Corleone, head of the five greatest mafia clans of New York. As Don is incapacitated by an assassination attempt, the Corleone family must go through a transformation to maintain the power dynamics and progress in the mafia world. Santino Corleone is too brash and spontaneous to be a leader while Freddie Corleone is just basically soft. The book hitherto follows the transformation of Michael Corleone as he realises that although he is an iconoclast who is against what his father represents, blood is stronger than water; and within him lies a true Sicilian who would go to every length to protect his beloved ones. Thus, Michael Corleone sets forth a journey where he faces violence, exacts revenge, experiences love and loss and finally regains the stature that the Corleone family once possessed.\r\n\r\nAbout The Author\r\nMario Puzo is a globally renowned American author and screen writer who was born in 1920 in the Hell\'s Kitchen neighbourhood of New York. His three-part crime saga about the Mafia, The Godfather, are considered golden classics along with the three films that the books were adapted into. He received the \'Academy Award\' for \'Best Adapted Screenplay\' for the first and third instalments of the movie trilogy. Mario Puzo is also the screenwriter who wrote the screenplay for the original Superman movie in 1978. His last novel, The Family, was released after his death in 2001.\r\n\r\nThe book is available online for convenient shopping. You can bag this book from Amazon.in today by following a few easy steps.'),
(34, 'The Thief', 340, 0, 'Crime', ' Megan Whalen Turner ', 'Greenwillow Books', 2017, 'New York Times–bestselling author Megan Whalen Turner’s entrancing and award-winning Queen’s Thief novels bring to life the world of the epics and feature one of the most charismatic and incorrigible characters of fiction, Eugenides the thief. The Thief is perfect for fans of Leigh Bardugo, Marie Lu, Patrick Rothfuss and George R.R. Martin.Eugenides, the queen’s thief, can steal anything—or so he says. When his boasting lands him in prison and the king’s magus invites him on a quest to steal a legendary object, he’s in no position to refuse. The magus thinks he has the right tool for the job, but Gen has plans of his own. The Queen’s Thief novels are rich with political machinations and intrigue, divine intervention, battles lost and won, dangerous journeys, power, passion and deception . . . while across the sea, a ruthless empire watches and waits for even the slightest weakness. This new paperback edition includes exclusive extra materials.');
INSERT INTO `books` (`B_ID`, `B_NAME`, `B_PRICE`, `B_RATING`, `B_GENRE`, `B_AUTHOR`, `B_PUBLISHER`, `B_PUBLISHDATE`, `B_DESCRIPTION`) VALUES
(35, 'American Heroin', 799, 0, 'Crime', 'Melissa Scrivner Love', 'Oneworld Publications ', 2019, '\'The story of Lola, the Latina Los Angeles drug kingpin, reaches its second book, taking the narco novel into unfamiliar areas: family ties and female friendship. But it\'s still a tough, violent world, and Lola must outsmart friend, foe and lover to remain on top. Long may she reign.\' * Sunday Times Crime Club, pick of the month * `A shot in the arm. Melissa Scrivner Love delivers the goods with a pure fix of adrenaline that doesn\'t subside until the final page. In Lola, we have a character who feels all too rare in contemporary crime fiction - a protagonist who\'s prepared to fight tooth and nail for everything she holds dear, including her own compassion. American Heroin is addictive. A rip-through-it-in-one-sitting thrill ride that will leave readers hooked.\' * Joseph Knox, author of Sirens and The Smiling Man * `Melissa Scrivner Love has done the near impossible: She\'s made us care deeply about a gang-leading drug dealer, her friends, her enemies, and her world. And done it beautifully. Lola is a marvellous creation, brave but soft, smart but not mistake-proof, unique but completely believable. In short: American Heroin is a terrific book.\' * S.J. Rozan, author of Absent Friends * `Raw, gritty, and excruciatingly real, Melissa Scrivner Love\'s American Heroin features one of the most brutal and conflicted anti heroines in new crime fiction. Lola Vasquez is a ruthless gang leader and a protective mother, funneling heroin to her South Central Los Angeles neighbourhood in order to finance a life for her daughter and her mother away from the mayhem she herself inflicts. A can\'t-look-away, just-one-more-page thriller, American Heroin opens a window into a pitiless world where loyalty is rewarded and betrayers pay the price.\' * Karen Dionne, author of The Marsh King\'s Daughter * `Melissa Scrivner Love\'s latest has an engine that won\'t quit and a heroine I couldn\'t help but love. Damaged, brilliant, loyal to a fault, Lola lives by her own code, straddling a chasm between motherhood and drug queenpin that runs down the center of her own heart. American Heroin is a white-hot bullet of a book that blasts its way under your skin and stays there - do not miss this ride.\' * Joshilyn Jackson, author of The Almost Sisters * `Hardboiled crime fiction with a twenty-first century twist; fast, gritty, aware and explosive with an anti-hero who breaks the mould.... Lola is a class act. A bleak noir that plays the theme of male dominated gangs and the toxic macho atmosphere on the streets. Take a deep breath before you start, it might be a while before you come up for air.\' * NB Magazine * `A fascinating read....adds increasing depth to an already unforgettable character.\' * Crime Time * Praise for Lola: \'A tough, enterprising and vulnerable heroine, Lola gives the reader an unvarnished insight into ghetto life.\' Sunday Times Crime Club `A fine, brutal debut thriller.\' Mail on Sunday \'A brilliant debut, a bleak and cynical noir set in the patriarchal gangland world of LA\'s South Central.\' Irish Times \'A worthy sequel to the author\'s debut and continues Lola Vasquez\'s story nicely.\' * Crimenovelreader *'),
(36, 'Lullaby Road', 599, 0, 'Crime', 'James Anderson', 'Broadway Books', 2019, '“Anderson rewards…with deadly adventure and the most poetic prose this side of Salt Lake City.” -The New York Times Book Review \r\n \r\n “As he did in his 2015 debut, “The Never-Open Desert Diner,” James Anderson delivers an unconventional mystery melding near lyrical prose with a strong sense of atmosphere and an affinity for oddball characters… A sense of the menacing hangs over the plot of “Lullaby Road,” and when violence erupts, it’s expected, yet still surprising… Lullaby Road works well as a story about isolation, loss, parenting and predators… Anderson evocatively illustrates the beauty and harshness of Utah’s high desert while also delving deep into the characters and their motives for living where they do.” - The Associated Press\r\n \r\n“ There’s power in creating a sympathetic narrator, and Anderson uses this power to make his points about redemption, about suffering, about unlikely beauty and the realities of being both good and bad…Anderson’s prose is quick and sparse, but also building and rich, much like the desert in which he sets his narrative…Anderson offer’s intrigue, suspense, a few good fist fights and some Mormon quips that would give Joseph Smith himself a hearty chuckle.  But it is his underlying thread about the human need to hide and to be found (and sometimes found out) that makes this novel such a pleasant detour from whatever road a reader is traversing.  This book is absolutely worth your time.” - The Desert News\r\n \r\n“James Anderson is definitely an author who can write. This lyrical and atmospheric novel takes readers to a unique place with characters of its own and embodies the author’s superb storytelling skills…It reads more like a literary take on a beautiful land unique setting filled with unusual and sometimes comical characters…In a genre saturated with tough-talking heroes in New York and LA, a vulnerable character like Ben Jones in a setting like the Utah desert is a welcome addition to the shelf of any reader looking for an exceptional mystery read.” —Mystery Tribune'),
(37, 'The Chalk Man', 531, 0, 'Crime', 'C. J. Tudor ', 'Michael Joseph', 2018, 'None of us ever agreed on the exact beginning. Was it when we started drawing the chalk figures or when they started to appear on their own? Was it the terrible accident? Or when they found the first body?\r\n\r\nIt\'s a very clever story - you\'ll love it! (Joanna Cannon)\r\n\r\nHot damn C. J. Tudor\'s The Chalk Man is good. Very Stephen King-esque (Ruth Ware)\r\n\r\nCJ Tudor\'s very clever, wrong-footing debut will leave you checking that doors and windows of your holiday cottage are secure . . . (Radio Times)\r\n\r\nGripping, chilling . . . brilliant. As creepy as that house with dark windows we all knew as kids. I can\'t wait for the next one (Luca Veste)\r\n\r\nIf you like my stuff, you\'ll like this (STEPHEN KING)\r\n\r\nCompletely engrossing. Puts me in mind of Stephen King\'s The Body (JOHN BOYNE)\r\n\r\nWonderfully creepy - like a cold blade on the back of your neck (LEE CHILD)\r\n\r\nThe past rises from the chalk dust. A labyrinthine tale that kept me guessing right to the end (VAL MCDERMID The Mail on Sunday)\r\n\r\n'),
(38, 'The Reckoning', 193, 0, 'Crime', 'John Grisham', 'Hodder & Stoughton', 2018, 'John Grisham returns to Clanton, Mississippi, to tell the story of an unthinkable murder, the bizarre trial that followed it, and its profound and lasting effect on the people of Ford County. Pete Banning was Clanton\'s favorite son, a returning war hero, the patriarch of a prominent family, a farmer, father, neighbor, and a faithful member of the Methodist church. Then one cool October morning in 1946. he rose early, drove into town, walked into the church, and calmly shot and killed the Reverend Dexter Bell. As if the murder wasn\'t shocking enough, it was even more baffling that Pete\'s only statement about it - to the sheriff, to his defence attorney, to the judge, to his family and friends, and to the people of Clanton - was \'I have nothing to say\'. And so the murder of the esteemed Reverend Bell became the most mysterious and unforgettable crime Ford County had ever known.'),
(39, 'Macbeth', 115, 0, 'Crime', 'William Shakespeare', 'Fingerprint! Publishing', 2016, 'Shakespeare\'s Macbeth is one of the greatest tragic dramas the world has known. Macbeth himself, a brave warrior, is fatally impelled by supernatural forces, by his proud wife, and by his own burgeoning ambition.\r\nThe play is set in Scotland. Returning from battle with his companion Banquo, the nobleman Macbeth meets a group of witches. They predict that Macbeth will first become thane (baron) of Cawdor and then king of Scotland. Urged on by Lady Macbeth, his wife, Macbeth murders King Duncan. But Duncan\'s sons, Malcolm and Donalbain, escape. Macbeth then seizes the throne of Scotland. But Macbeth has no peace. In a bid to prevent Banquo\'s descendants from becoming kings according to the witches\' prophecy, Macbeth arranges for him to be murdered, along with his son Fleance. Macbeth\'s men kill Banquo, but Fleance escapes. Haunted by Banquo\'s ghost, Macbeth seeks counsel from the witches. They tell him to beware of Macduff, another Scottish nobleman. Macbeth is now hardened to killing. He orders the murder of Macduff\'s wife and children. By contrast, Lady Macbeth, who had encouraged her husband to embark upon his path of slaughter, goes mad with guilt and dies. Macduff\'s army attacks Macbeth\'s forces. Macduff meets Macbeth in single combat and kills him. Malcolm, Duncan\'s son, is then proclaimed king of Scotland.'),
(40, 'The Girl on the Train', 309, 0, 'Thriller', 'Paula Hawkins', 'Random House', 2016, '\"THE RUNAWAY SUNDAY TIMES NO.1 BESTSELLER AND THRILLER OF THE YEAR\r\n\r\n\'Really great suspense novel. Kept me up most of the night. The alcoholic narrator is dead perfect\' STEPHEN KING\r\n\r\nRachel catches the same commuter train every morning. She knows it will wait at the same signal each time, overlooking a row of back gardens. She’s even started to feel like she knows the people who live in one of the houses. ‘Jess and Jason’, she calls them. Their life – as she sees it – is perfect. If only Rachel could be that happy.\r\n\r\nAnd then she sees something shocking. It’s only a minute until the train moves on, but it’s enough.\r\n\r\nNow everything’s changed. Now Rachel has a chance to become a part of the lives she’s only watched from afar.\r\n\r\nNow they’ll see; she’s much more than just the girl on the train…\"'),
(41, 'Murder on the Orient Express', 259, 0, 'Mystery', 'Agatha Christie', 'Harper Collins', 2017, 'Agatha Christie’s most famous murder mystery\r\n\r\nJust after midnight, a snowdrift stops the Orient Express in its tracks. The luxurious train is surprisingly full for the time of the year, but by the morning it is one passenger fewer. An American tycoon lies dead in his compartment, stabbed a dozen times, his door locked from the inside.\r\n\r\nIsolated and with a killer in their midst, detective Hercule Poirot must identify the murderer – in case he or she decides to strike again.'),
(42, 'The Silent Patient', 259, 0, 'Thriller', 'Alex Michaelides ', 'Orion', 2019, 'Alicia Berenson’s life is seemingly perfect. A famous painter married to an in-demand fashion photographer, she lives in a grand house with big windows overlooking a park in one of London’s most desirable areas. One evening her husband Gabriel returns home late from a fashion shoot, and Alicia shoots him five times in the face, and then never speaks another word.\r\n\r\nAlicia’s refusal to talk, or give any kind of explanation, turns a domestic tragedy into something far grander, a mystery that captures the public imagination and casts Alicia into notoriety. The price of her art skyrockets, and she, the silent patient, is hidden away from the tabloids and spotlight at the Grove, a secure forensic unit in North London.\r\n\r\nTheo Faber is a criminal psychotherapist who has waited a long time for the opportunity to work with Alicia. His determination to get her to talk and unravel the mystery of why she shot her husband takes him down a twisting path into his own motivations—a search for the truth that threatens to consume him...'),
(43, 'The Girl with the Dragon Tattoo', 435, 0, 'Thriller', 'Stieg Larrson', 'Quercus', 2015, 'Harriet Vanger, a scion of one of Sweden’s wealthiest families disappeared over forty years ago. All these years later, her aged uncle continues to seek the truth. He hires Mikael Blomkvist, a crusading journalist recently trapped by a libel conviction, to investigate. He is aided by the pierced and tattooed punk prodigy Lisbeth Salander. Together they tap into a vein of unfathomable iniquity and astonishing corruption.\r\n\r\nAn international publishing sensation, Stieg Larsson’s The Girl with the Dragon Tattoo combines murder mystery, family saga, love story, and financial intrigue into one satisfyingly complex and entertainingly atmospheric novel.'),
(44, 'Before I Go to Sleep', 296, 0, 'Thriller', 'S. J. Watson', 'RHUK', 2012, 'The book, Before I Go to Sleep belongs to the genre of thrillers. This book recounts the tale of a woman who wakes up one morning with a man next to her sleeping. She at first feels extremely ashamed of herself and tries to understand her situation and realizes that the man in the bed is her husband and she has lost two decades of her memory. What follows is her journey of reclaiming her life and identity from what she can gather through her journal entries in a diary and also tries to get through to the therapist who has been treating her from the day she suffered the accident which resulted in forgetting the events of the previous day every morning.\r\n\r\nThe book is an account of how an individual attempts to piece together the pieces of her life that are missing or hazy due to the memory loss she has suffered. Other than this, the book explores a condition wherein one would experience the loss of not just one’s identity but also the loss of peace of mind and happiness. The challenges of recalling whatever happened through the previous day the next morning. As the main character reaches the truth of her existence, she finds it to be enormous and cannot seem to accept the truth.\r\n\r\nAbout the author:\r\nS J Watson, an audiologist by profession has been working with hearing impaired children. He chose to debut with this book and sold the film rights even before the book was completed. His inspiration was from the real life account of a man who had forgotten about his existence at the age of eighty two following an operation at the age of 27.'),
(45, 'The Moonstone', 1060, 0, 'Detective', 'Wilkie Collins', 'Harper Press', 2011, 'Rachel Verinder, a young Englishwoman, inherits a large Indian diamond on her eighteenth birthday. It is a legacy from her uncle, a corrupt English army officer who served in India. The diamond is of great religious significance as well as being extremely valuable, and three Hindu priests have dedicated their lives to recovering it. The story incorporates elements of the legendary origins of the Hope Diamond (or perhaps the Orloff Diamond).\r\n\r\nThe Moonstone was published in 1868 and is considered by most people to be the first detective novel. Given the novels place in the history of the genre, that alone should put this book on most people\'s reading lists. To sweeten the pot, the plot is compelling, the last hundred pages I couldn\'t have put the book down for anything. I was caught up in the case and wanted to find out the why and the who in the mysterious circumstances surrounding the MOONSTONE.\r\n\r\nThe novel is narrated by several different people. My favorite was Gabriel Betteredge, the head servant at the Verinder house, who becomes a reluctant Watson for Detective Cuff during the investigation. He is a man convinced in the spiritual guidance of Robinson Crusoe and believes that any disruption in his life can be explained by reading and interpreting passages from his dogeared copy of Defoe\'s classic.\r\n\r\n\"In this anxious frame of mind, other men might have ended by working themselves up into a fever; I ended in a different way. I lit my pipe, and took a turn at Robinson Crusoe.\"'),
(46, 'The Maltese Falcon', 436, 0, 'Detective', 'Dashiell Hammett', 'Orion', 2005, 'One of the greatest crime novels of the 20th century.\r\n\r\n\'His name remains one of the most important and recognisable in the crime fiction genre. Hammett set the standard for much of the work that would follow\' Independent\r\n\r\nSam Spade is hired by the fragrant Miss Wonderley to track down her sister, who has eloped with a louse called Floyd Thursby. But Miss Wonderley is in fact the beautiful and treacherous Brigid O\'Shaughnessy, and when Spade\'s partner Miles Archer is shot while on Thursby\'s trail, Spade finds himself both hunter and hunted: can he track down the jewel-encrusted bird, a treasure worth killing for, before the Fat Man finds him?'),
(47, 'Trent\'s Last Case', 483, 0, 'Detective', 'E. C. Bentley', 'Dover Publications Inc.', 1997, '\"One of the few genuine classics of detective fiction.\" — The New York Times. Written in reaction to what Bentley perceived as the sterility and artificiality of the detective fiction of his day — particularly stories that featured infallible detectives of the Holmesian stripe — Trent\'s Last Case (1913) features Philip Trent, an all-too-human detective who not only falls in love with the chief suspect but reaches a brilliant conclusion that is totally wrong.\r\nThe case begins when millionaire American financier Sigsbee Manderson is murdered while on holiday in England. A London newspaper sends Trent to investigate, and he is soon matching wits with Scotland Yard\'s Inspector Murth as they probe ever deeper in search of a solution to a mystery filled with odd, mysterious twists and turns. Called by Agatha Christie \"one of the best detective stories ever written,\" Trent\'s Last Case delights with its flesh-and-blood characters, its naturalness and easy humor, and its style, which, as Dorothy Sayers has noted, \"ranges from a vividly coloured rhetoric to a delicate and ironical literary fancy.\" New Introduction by Douglas G. Greene.'),
(48, 'Farewell, My Lovely', 1430, 0, 'Detective', 'Raymond Chandler', 'Vintage Crime/Black Lizard', 1988, 'Crime fiction master Raymond Chandler\'s second novel featuring Philip Marlowe, the \"quintessential urban private eye\" (Los Angeles Times). \r\n\r\nPhilip Marlowe\'s about to give up on a completely routine case when he finds himself in the wrong place at the right time to get caught up in a murder that leads to a ring of jewel thieves, another murder, a fortune-teller, a couple more murders, and more corruption than your average graveyard'),
(49, 'A Scandal in Bohemia', 210, 0, 'Detective', 'Sir Arthur Conan Doyle', 'E-Artnow', 2019, 'Sherlock Holmes is a \"consulting detective\" known for his proficiency with observation, forensic science, and logical reasoning that borders on the fantastic, which he employs when investigating cases for a wide variety of clients, including Scotland Yard.\r\n\r\nHolmes is hired by the King of Bohemia to recover blackmail evidence, held by the woman whom the king once promised to marry, but who he abandoned for a woman of noble birth.'),
(50, 'Gone Girl', 245, 5, 'Mystery', 'Gillian Flynn', 'Orion Publishing Group', 2012, 'Gone Girl is a novel written by author Gillian Flynn. It is written as a contemporary thriller novel and is first published in June 2012. The novel\'s core mystery stems from an uncertainty about the protagonist, Nick Dunne. Whether Nick killed his wife, Amy Dunne, is the suspense the novel is built up on. The novel is well received throughout the United States and other English-speaking nations.\r\n\r\nGone Girl centers its story about Nick and Amy Dunne\'s strained marriage relationship. Nick used to work as a journalist, but loses his job. With his broke financial status, Nick decides to relocate from New York City to his smaller home town, North Carthage. In an attempt of recovering from his financial deprivations, Nick opens a bar using the money from his wife. Nick runs the bar along with his twin sister Margo, providing a decent living for his family. But, as they days go by, his marriage with Amy is falling apart slowly. Amy resents her new life.\r\n\r\nOn a summer morning in Missouri, when Nick and Amy are celebrating their fifth wedding anniversary along with their relatives and acquaintances, Amy goes missing. Police\'s eyes turn towards Nick as an act of suspicion, since Nick used Amy\'s money for his business and their relationship is strained. As the police delve into the investigation, different shades of stories come out from Nick\'s and Amy\'s sides. The suspense of the book is carried until the actual information is demystified. The edition is published in paperback, on 8th November, 2012.'),
(52, 'The Da Vinci Code', 269, 0, 'Mystery', 'Dan Brown', 'RHUK', 2009, 'The plot in ‘The Da Vinci Code’ revolves around Robert Langdon, who interprets symbols at Harvard. He gets a shocking phone call at mid-night while in Paris. The administrator of the Louvre was killed in the premises of the museum and the dead body is accompanied by a sequence of codes. As Robert was supposed to meet that person, he now stands as a suspect of the murder. Robert is accompanied by Sophie Neveu, a French cryptologist, in solving the mystery revolving around the murder.\r\n\r\nThey are astonished to find that the hints they are searching for are hidden in the works of Leonardo Da Vinci. Although the clues can be seen clearly, yet they are to be decoded. As the story unfolds, it is found out that the late administrator was affiliated with some secret society and his sole purpose was to safeguard the secret. Robert and Sophie then battle to decode the secrets running from cathedrals to castles around the whole Europe.\r\n\r\nThey are also being hunted by some anonymous antagonists. They duo needs to find out the reason for which the administrator sacrificed his life. Also, they have to maintain and protect the secret society’s mission which is being carried on for so many years. This write-up includes number of twists and turns that are capable enough to send thrill waves into the readers. The book was published in August, 2009 and became a New York Times best-seller within a week. Also, the book has been custom-made into a movie.'),
(53, 'The Thirteenth Tale', 1408, 0, 'Mystery', 'Diane Setterfield ', 'Washington Square Press', 2007, 'All children mythologize their birth...So begins the prologue of reclusive author Vida Winter\'s collection of stories, which are as famous for the mystery of the missing thirteenth tale as they are for the delight and enchantment of the twelve that do exist.\r\n\r\nThe enigmatic Winter has spent six decades creating various outlandish life histories for herself -- all of them inventions that have brought her fame and fortune but have kept her violent and tragic past a secret. Now old and ailing, she at last wants to tell the truth about her extraordinary life. She summons biographer Margaret Lea, a young woman for whom the secret of her own birth, hidden by those who loved her most, remains an ever-present pain. Struck by a curious parallel between Miss Winter\'s story and her own, Margaret takes on the commission.\r\n\r\nAs Vida disinters the life she meant to bury for good, Margaret is mesmerized. It is a tale of gothic strangeness featuring the Angelfield family, including the beautiful and willful Isabelle, the feral twins Adeline and Emmeline, a ghost, a governess, a topiary garden and a devastating fire.\r\n\r\nMargaret succumbs to the power of Vida\'s storytelling but remains suspicious of the author\'s sincerity. She demands the truth from Vida, and together they confront the ghosts that have haunted them while becoming, finally, transformed by the truth themselves.\r\n\r\nThe Thirteenth Tale is a love letter to reading, a book for the feral reader in all of us, a return to that rich vein of storytelling that our parents loved and that we loved as children. Diane Setterfield will keep you guessing, make you wonder, move you to tears and laughter and, in the end, deposit you breathless yet satisfied back upon the shore of your everyday life.'),
(54, 'Gaudy Night', 503, 0, 'Mystery', 'Dorothy L. Sayers', 'Harper Paperbacks', 2012, 'The great Dorothy L. Sayers is considered by many to be the premier detective novelist of the Golden Age, and her dashing sleuth, Lord Peter Wimsey, one of mystery fiction’s most enduring and endearing protagonists. Acclaimed author Ruth Rendell has expressed her admiration for Sayers’s work, praising her “great fertility of invention, ingenuity, and wonderful eye for detail.” The third Dorothy L. Sayers classic to feature mystery writer Harriet Vane, Gaudy Night is now back in print with an introduction by Elizabeth George, herself a crime fiction master. Gaudy Night takes Harriet and her paramour, Lord Peter, to Oxford University, Harriet’s alma mater, for a reunion, only to find themselves the targets of a nightmare of harassment and mysterious, murderous threats. '),
(55, 'The Lord of the Rings', 696, 0, 'Fantasy', 'J. R. R. Tolkien ', 'Harper Collins ', 2007, 'All three parts of epic masterpiece ‘The Lord of the Rings’ in one paperback. Features brand new packaging, the definitive edition of the text, fold-out flaps with the original two-colour maps, and a revised and expanded index.\r\n\r\nSauron, the Dark Lord, has gathered to him all the Rings of Power – the means by which he intends to rule Middle-earth. All he lacks in his plans for dominion is the One Ring – the ring that rules them all – which has fallen into the hands of the hobbit, Bilbo Baggins.\r\n\r\nIn a sleepy village in the Shire, young Frodo Baggins finds himself faced with an immense task, as the Ring is entrusted to his care. He must leave his home and make a perilous journey across the realms of Middle-earth to the Crack of Doom, deep inside the territories of the Dark Lord. There he must destroy the Ring forever and foil the Dark Lord in his evil purpose.\r\n\r\nSince it was first published in 1954, ‘The Lord of the Rings’ has been a book people have treasured. Steeped in unrivalled magic and otherworldliness, its sweeping fantasy has touched the hearts of young and old alike.\r\n\r\nNow, to coincide with the publication of J.R.R. Tolkien’s The Children of Hurin, the definitive 50th Anniversary text, fully restored with almost 400 corrections – with the full co-operation of Christopher Tolkien – is reissued with a striking new cover.'),
(57, 'The Hobbit', 260, 0, 'Fantasy', 'J.R.R. Tolkien', 'Harper Collins', 2012, 'The classic bestseller behind this year’s biggest movie, this film tie-in edition features the complete story of Bilbo Baggins’ adventures in Middle-earth, with a striking cover image from Peter Jackson’s The Hobbit: An Unexpected Journey and drawings and maps by J.R.R. Tolkien. Bilbo Baggins is a hobbit who enjoys a comfortable, unambitious life, rarely travelling further than the pantry of his hobbit-hole in Bag End. But his contentment is disturbed when the wizard, Gandalf and a company of thirteen dwarves arrive on his doorstep one day to whisk him away on an unexpected journey ‘there and back again’. They have a plot to raid the treasure hoard of Smaug the Magnificent, a large and very dangerous dragon. The prelude to The Lord of the Rings, The Hobbit has sold many millions of copies since its publication in 1937, establishing itself as one of the most beloved and influential books of the twentieth century.');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `CART_ID` bigint(20) UNSIGNED NOT NULL,
  `B_ID` bigint(20) UNSIGNED NOT NULL,
  `C_ID` bigint(20) UNSIGNED NOT NULL,
  `BN` varchar(50) NOT NULL,
  `BP` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `C_ID` bigint(20) UNSIGNED NOT NULL,
  `C_FNAME` varchar(50) NOT NULL,
  `C_LNAME` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `MOB` bigint(20) UNSIGNED NOT NULL,
  `PWD` varchar(20) NOT NULL,
  `PP` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`C_ID`, `C_FNAME`, `C_LNAME`, `EMAIL`, `MOB`, `PWD`, `PP`) VALUES
(14, 'TOMAS', 'ORTEGA', 'tomasortega77@gmail.com', 7788945940, 'Tomas@77', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `O_ID` bigint(20) UNSIGNED NOT NULL,
  `P_ID` bigint(20) UNSIGNED NOT NULL,
  `ID` bigint(20) UNSIGNED NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `STAT` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`O_ID`, `P_ID`, `ID`, `NAME`, `STAT`) VALUES
(1, 79, 1, 'IT', 'DELIVERED'),
(2, 79, 14, 'Message In A Bottle', 'DELIVERED'),
(3, 80, 50, 'Gone Girl', 'DELIVERED'),
(4, 81, 32, 'If Tomorrow Comes', 'RETURNED'),
(5, 82, 45, 'The Moonstone', 'CANCELLED');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `P_ID` bigint(20) UNSIGNED NOT NULL,
  `C_ID` bigint(20) UNSIGNED NOT NULL,
  `P_DATE` varchar(10) NOT NULL,
  `D_DATE` varchar(10) NOT NULL,
  `AMOUNT` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`P_ID`, `C_ID`, `P_DATE`, `D_DATE`, `AMOUNT`) VALUES
(79, 14, '27-06-2020', '08-07-2020', 517),
(80, 14, '27-06-2020', '08-07-2020', 245),
(81, 14, '27-06-2020', '08-07-2020', 267),
(82, 14, '27-06-2020', '08-07-2020', 1060);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `R_ID` bigint(20) UNSIGNED NOT NULL,
  `C_ID` bigint(20) UNSIGNED NOT NULL,
  `B_ID` bigint(20) UNSIGNED NOT NULL,
  `P_ID` bigint(20) UNSIGNED NOT NULL,
  `RATE` int(10) UNSIGNED NOT NULL,
  `HEAD` varchar(100) NOT NULL,
  `BODY` varchar(500) NOT NULL,
  `STATUS` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`R_ID`, `C_ID`, `B_ID`, `P_ID`, `RATE`, `HEAD`, `BODY`, `STATUS`) VALUES
(1, 14, 1, 79, 4, 'Great Experience', 'One of the finest work of Stephen King. ', 'APPROVED'),
(2, 14, 14, 79, 4, '4 out of 5', 'Sparks never cease to amaze us. The way he plans the story endings just emotionally wreaks the readers!', 'APPROVED'),
(4, 14, 50, 80, 5, 'EXCEPTIONAL', 'Can keep you engaged for hours', 'APPROVED'),
(7, 14, 32, 81, 4, 'One of its kind', 'Never read a book with such strong female protagonist. Worth reading!', 'APPROVED');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `W_ID` bigint(20) UNSIGNED NOT NULL,
  `C_ID` bigint(20) UNSIGNED NOT NULL,
  `B_ID` bigint(20) UNSIGNED NOT NULL,
  `BNAME` varchar(50) NOT NULL,
  `BPRICE` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`W_ID`, `C_ID`, `B_ID`, `BNAME`, `BPRICE`) VALUES
(1, 14, 55, 'The Lord of the Rings', 696);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`A_ID`),
  ADD KEY `address_ibfk_1` (`C_ID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AD_ID`),
  ADD UNIQUE KEY `A_PWD` (`A_PWD`),
  ADD UNIQUE KEY `A_EMAIL` (`A_EMAIL`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`B_ID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`CART_ID`),
  ADD KEY `B_ID` (`B_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`C_ID`),
  ADD UNIQUE KEY `PWD` (`PWD`),
  ADD UNIQUE KEY `MOB` (`MOB`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`,`MOB`,`PWD`),
  ADD UNIQUE KEY `email_unique` (`EMAIL`),
  ADD UNIQUE KEY `mobile_unique` (`MOB`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`O_ID`),
  ADD KEY `P_ID` (`P_ID`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`P_ID`),
  ADD KEY `purchase_ibfk_1` (`C_ID`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`R_ID`),
  ADD KEY `P_ID` (`P_ID`),
  ADD KEY `C_ID` (`C_ID`),
  ADD KEY `B_ID` (`B_ID`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`W_ID`),
  ADD KEY `B_ID` (`B_ID`),
  ADD KEY `B_NAME` (`BNAME`),
  ADD KEY `C_ID` (`C_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `A_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AD_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `B_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `CART_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `C_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `O_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `P_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `R_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `W_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`C_ID`) REFERENCES `customer` (`C_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`B_ID`) REFERENCES `books` (`B_ID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`P_ID`) REFERENCES `purchase` (`P_ID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `purchase_ibfk_1` FOREIGN KEY (`C_ID`) REFERENCES `customer` (`C_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`P_ID`) REFERENCES `purchase` (`P_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`C_ID`) REFERENCES `customer` (`C_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `reviews_ibfk_3` FOREIGN KEY (`B_ID`) REFERENCES `books` (`B_ID`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_3` FOREIGN KEY (`C_ID`) REFERENCES `customer` (`C_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
