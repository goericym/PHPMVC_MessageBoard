
--
-- 資料庫: `MessageBoard`
--

-- --------------------------------------------------------

--
-- 資料表結構 `login`
-- 欄位說明: id 識別唯一值
-- 欄位說明: Account 帳號
-- 欄位說明: Passwd 密碼(MD5格式)
-- 欄位說明: CreateTime 建立時間
--


CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL,
  `Account` varchar(255) DEFAULT NULL,
  `Passwd` varchar(600) DEFAULT NULL,
  `UserName` varchar(255) DEFAULT NULL,
  `CreateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

--
-- 資料表結構 `message`
-- 欄位說明: id 識別唯一值
-- 欄位說明: Account 帳號
-- 欄位說明: CreateTime 建立時間
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL,
  `Message` text,
  `Account` varchar(255) DEFAULT NULL,
  `UpdateTime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表結構 `ReMessage`
-- 欄位說明: id 識別唯一值
-- 欄位說明: Re_Id 回覆的ID
-- 欄位說明: Message 回覆的留言
-- 欄位說明: Account 帳號
-- 欄位說明: CreateTime 建立時間
--

CREATE TABLE IF NOT EXISTS `ReMessage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Re_Id` int(11) NOT NULL,
  `Account` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL,
  `UpdateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;
