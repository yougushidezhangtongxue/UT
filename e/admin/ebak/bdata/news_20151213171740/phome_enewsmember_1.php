<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `phome_enewsmember`;");
E_C("CREATE TABLE `phome_enewsmember` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(20) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `rnd` char(20) NOT NULL DEFAULT '',
  `email` char(50) NOT NULL DEFAULT '',
  `registertime` int(10) unsigned NOT NULL DEFAULT '0',
  `groupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `userfen` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `userdate` int(10) unsigned NOT NULL DEFAULT '0',
  `money` float(11,2) NOT NULL DEFAULT '0.00',
  `zgroupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `havemsg` tinyint(1) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `salt` char(8) NOT NULL DEFAULT '',
  `userkey` char(12) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`),
  KEY `groupid` (`groupid`)
) ENGINE=MyISAM AUTO_INCREMENT=102 DEFAULT CHARSET=utf8");
E_D("replace into `phome_enewsmember` values('1','hanxing3437','d17bb573ee5744457f72531d4895218e','JqbuoCvRPUUt649ZxCWn','48444431@qq.com','1410367216','1','0','0','0.00','0','0','1','3Q7gGF','xfRk9TQBBdXV');");
E_D("replace into `phome_enewsmember` values('2','hanxing3438','a18685c28f2dfaf73e3ad6687188bd49','E9ptpDGJvbfX26smzDrE','2234439707@qq.com','1410367679','1','0','0','0.00','0','0','1','GR6tnf','Fmc5PEqsM7Nb');");
E_D("replace into `phome_enewsmember` values('3','反反','611ae9973c802820db8a4172626d7762','YEnGxXMZazTpib9UNpaT','nongcunchuangye@qq.com','1411169994','1','0','0','0.00','0','0','1','JQkvMQ','9yZS23ybXFhD');");
E_D("replace into `phome_enewsmember` values('4','高洋','5e7e4b0104096f363389b70b76288af5','WZeufpXtFBaZtAV7tPWQ','415@163.com','1411459637','1','0','0','0.00','0','0','1','BJttWW','QQzKVXaCp5gp');");
E_D("replace into `phome_enewsmember` values('5','复复','f2f256cf1ddbf1d74a95c4a8fa5f7e62','Nq4Qaj5hv2aUNLyaqtHW','413590@163.com','1411476241','1','0','0','0.00','0','0','1','tYReLU','jj44AYUG7fwA');");
E_D("replace into `phome_enewsmember` values('6','许得勇','525560f704dc133129f8a1dd316d7090','zCSMEH5wV9bpkQNG5rKv','1083155573@qq.com','1412259310','1','0','0','0.00','0','0','1','TDcLpB','fa9WQALxsbQP');");
E_D("replace into `phome_enewsmember` values('7','飞扬网络','0b8dd2775f26adf466fa9916a3cf12a6','7Jb6d8cvBPY7f49yYFUf','4sadf@qq.com','1415202512','1','0','0','0.00','0','0','1','wBZs2K','SrvKu2eVH5m7');");
E_D("replace into `phome_enewsmember` values('8','qwezxc','9d2ab3ae38e0221c86161c69810ea1af','D5yJv5hBpiNrPjUSucbb','erwyt@ffg.dg','1418124106','1','0','0','0.00','0','0','1','fCRNCq','AJtyvK5aBGbS');");
E_D("replace into `phome_enewsmember` values('9','haitian118','9ca171b832ea4b6650ea701b0e104469','FMVkx4rQQQQQQvvvvvvv','pop35@126.com','1420471243','1','0','0','0.00','0','0','1','888888','v88888888888');");
E_D("replace into `phome_enewsmember` values('10','hanxing3439','1bffde43740daf9664e9fc67f3161faf','pDy4eAuNBFwMMxMMB389','sdfs@qq.com','1420471829','1','0','0','0.00','0','0','1','zCeBZ3','bA7EjwmchHuc');");
E_D("replace into `phome_enewsmember` values('11','liqiang0612','ca034b9bd3781598daac94d5f4240bac','vX3wG3YT2CH6w5kx4X8S','liqiang0612@sina.cn','1420606823','1','0','0','0.00','0','0','1','b4cmp4','P87XYrRKYWkR');");
E_D("replace into `phome_enewsmember` values('12','z123456','d0d6a42bd804dae54765c3dc012b9253','ErjhvBYtDYpEkrDQbALq','niba@zpeng.cn','1420821519','1','0','0','0.00','0','0','1','s4eYpi','Nf9hC8Axm2gs');");
E_D("replace into `phome_enewsmember` values('13','qq289988157','96b08e077339342b2518b65f3583c454','u725AAyc21fsnjVdlGti','289988157@qq.com','1420966392','1','0','0','0.00','0','0','1','WjXiig','FcekCiNLt4c2');");
E_D("replace into `phome_enewsmember` values('14','sdasdasdas','0e41f520a68dafcedcf78d23923ec682','cJAZ8HxkxaYmpkL7xehc','sdasdasdas@qq.com','1420974416','1','0','0','0.00','0','0','1','qSrXZK','AS85Ue7223x4');");
E_D("replace into `phome_enewsmember` values('15','linghao','62ea1946f92fb761d8049ac1c17334c1','uskwr9vJcw2vd9dGYmnK','1447363075@qq.com','1421044759','1','0','0','0.00','0','0','1','JitBS8','k82s2Zbr6mep');");
E_D("replace into `phome_enewsmember` values('16','gaohua','9e2407837a557fe8f8116667084471c4','tWYn3333333333333333','pinsshi@vip.qq.com','1421069964','1','0','0','0.00','0','0','1','333333','333333333333');");
E_D("replace into `phome_enewsmember` values('17','anlicy','7442638b495a0a3e089ed0faddcd11a5','qWbsGDsc7N7WgMuh4Qrj','2522119@qq.com','1421157139','1','0','0','0.00','0','0','1','9m84ED','fDHGJFvH3FhL');");
E_D("replace into `phome_enewsmember` values('18','97251230','a2e2da0b2fe026a131fdc71cf3709d60','WyfQLJCEh4qwpnkkgz2n','97251230@qq.com','1421305791','1','0','0','0.00','0','0','1','L7A2V7','A8qyBdk8L9bt');");
E_D("replace into `phome_enewsmember` values('19','yyt','ae1e1cec06d027f5ba88c8456e0ff125','C9d6tNHThrrSv3hXidYn','ttt@sina.com','1421477434','1','0','0','0.00','0','0','1','WD4C2C','ewAmMGXREGLV');");
E_D("replace into `phome_enewsmember` values('20','oioz','b3084d2f250a79a3e8784ba18b27685f','JXddunFme9YRFivL2UMg','16935007@qq.com','1421512023','1','0','0','0.00','0','0','1','jtFbUE','6bXDDUVcH8rs');");
E_D("replace into `phome_enewsmember` values('21','test','1ece6899fcc89e84a60dc45bdeb9e72b','6XcdBbwGKdZJD8vAU8Xi','test@126.com','1421667659','1','0','0','0.00','0','0','1','CWJtsQ','Bq8cLTYQtvbH');");
E_D("replace into `phome_enewsmember` values('22','333','02da35456f772343951fd02f3a7eece6','hzixvLAN3iyYyrLy8kRw','22@sina.com','1421724953','1','0','0','0.00','0','0','1','vuLXbu','BUuLA7ryZtqQ');");
E_D("replace into `phome_enewsmember` values('23','888','e328e8560044c4b4a68d9e0ab3166ecc','TVq67GKbuUeTmMfauzHB','888@sina.com','1421743738','1','0','0','0.00','0','0','1','xdRbyh','23pj9gbsQVLv');");
E_D("replace into `phome_enewsmember` values('24','fdfdfd','310dc002bd848dc96d52efd19f24ab90','VZH89Av5R6GVgiLQDUpJ','112233@qq.com','1421748753','1','0','0','0.00','0','0','1','FD35wD','NS3Cjpp6LZsv');");
E_D("replace into `phome_enewsmember` values('25','test9','6f6084d3a9ad76d6f3cf2036be087331','qQ6MY92DtsEA8xh2sfWV','test@test.com','1422362132','1','0','0','0.00','0','0','1','HYaDnV','3pD5VNMkYByV');");
E_D("replace into `phome_enewsmember` values('26','zxy52159','459558e84fea0ff8b908f1b075caafe0','c8r5uOjnxd2ZgK6PNgMQ','zxy52159@qq.com','1422585705','1','0','0','0.00','0','0','1','GQtVpS','3iGiHWB49wv4');");
E_D("replace into `phome_enewsmember` values('27','huan29','9d21604d959ff7947d79d65b4c67c6bb','cwsYJbfPsysQoeqcGgAb','1394471234@qq.com','1422670749','1','0','0','0.00','0','0','1','y52eNU','NFMVFHgNeW4V');");
E_D("replace into `phome_enewsmember` values('28','1234123','de8937537e7c1e7b552c58c5287dbfb1','iFuWdRwhGllbawxtIqYJ','1234123@11.com','1422718378','1','0','0','0.00','0','0','1','2OAXmM','Wrs5QqXiNsdE');");
E_D("replace into `phome_enewsmember` values('29','wuxudong','7e8fb9714c5535b17f9dbcd9db782c94','toIgUU4DYAewxM1m6qzl','wxdkw@sina.com','1422942021','1','0','0','0.00','0','0','1','02x2vD','POjeM7s1yKv1');");
E_D("replace into `phome_enewsmember` values('30','hnlishishi','1a9e1fd099c852d8319a241e61556cf4','ftN7Z9znraBvuA67GF06','hnlishishi@qq.com','1423454184','1','0','0','0.00','0','0','1','zFmiNS','Ffl9mzg75J85');");
E_D("replace into `phome_enewsmember` values('31','a100000','9995452fd1a1faa1fdaaacc7c47159e1','nMCCN1st9SgC8ymtKkgu','321213@qq.com','1423491629','1','0','0','0.00','0','0','1','39jvHl','XwYkko8ji7kP');");
E_D("replace into `phome_enewsmember` values('32','qq3537159','5b9b09483aa4c05bc146aa054938d777','PusP1TeiMnvuB9VzEleu','2121321@qq.com','1424080754','1','0','0','0.00','0','0','1','rvBODt','ywkUAXemxOlw');");
E_D("replace into `phome_enewsmember` values('33','yutiano0','e0c33d1666ecbd45a9d02807826287d1','2k7t5DJ5pQ1aDX1qBCZO','656416@qq.com','1424684862','1','0','0','0.00','0','0','1','aaq73X','yC4FZSSedCCy');");
E_D("replace into `phome_enewsmember` values('34','tvbian','8c772d623eb26cb100e8cb5abbc6e82a','n4hlMxXS4JobC9rtUC7S','1572790@qq.com','1425480028','1','0','0','0.00','0','0','1','QMuK27','QZWKjrf2hQxI');");
E_D("replace into `phome_enewsmember` values('35','test111','c396019c939bb1c52d4fe4e23ecaf500','pD32AiPHq2tr1MLCMrOR','r33cn@163.com','1425653375','1','0','0','0.00','0','0','1','whhI0R','dmF7mcX3LWm0');");
E_D("replace into `phome_enewsmember` values('36','zhanhna001','b7f4c84d252dbb6c1d3ff1450be43fd6','vYJaLNdMNhTxrPtnsI0f','123422435@qq.com','1426164498','1','0','0','0.00','0','0','1','fDliP2','mTJh16XvOeSl');");
E_D("replace into `phome_enewsmember` values('37','xiaolin','a37accc271e55ab51f3eb6ea34f158d7','kRUb5Cw1ih2nWM8il6Pb','xiaolin126@qq.com','1426484307','1','0','0','0.00','0','0','1','SIkH9U','am2t366kCTgi');");
E_D("replace into `phome_enewsmember` values('38','test22','62b0e649acffc7c1fc670f5ada26ca31','dACOSC5qQz4aTnGshM6u','tadf@12.com','1427483779','1','0','0','0.00','0','0','1','cJ9FgX','CGOkALD4O0we');");
E_D("replace into `phome_enewsmember` values('39','123','b6568b851b432ee182002b2e196ded7e','YIfXUzkTxgaahWkqmtMl','446999920@qq.com','1428323808','1','0','0','0.00','0','0','1','fAGReG','rKv4NhRZFrMp');");
E_D("replace into `phome_enewsmember` values('40','aaaaaa','49f3fb3bb8cb491d73777c52d8db4abd','T40vojxIGCRyumnxEPTp','a@a.com','1428818038','1','0','0','0.00','0','0','1','x8ZKeH','JnP1k1g2n8bS');");
E_D("replace into `phome_enewsmember` values('41','xyh2132','e35050a9fbec8a220cee7377e86f5289','24REu6uEbUaVj2U4tMWE','xyh21@qq.com','1429196118','1','0','0','0.00','0','0','1','mqf4vP','8XUHPJPk2lD6');");
E_D("replace into `phome_enewsmember` values('42','admin','7dd5eed19570c850c8536473008b5baa','7esgPumMrNCJGXn46f8F','admin@163.com','1429248270','1','0','0','0.00','0','0','1','8m5Jwq','uWRbrAz2H0NG');");
E_D("replace into `phome_enewsmember` values('43','xueguanjie','4528978d32a0608b7d72823b959737f8','qyINtyFUPgJHxiN9YJcP','773257617@qq.com','1429438805','1','0','0','0.00','0','0','1','rxb8p9','2F1lrrgEGHv0');");
E_D("replace into `phome_enewsmember` values('44','zc24485388','de4300508262498e990dff1750c3b25a','Q155MsC6Zzdx2jt9UGTk','243485388@qq.com','1429898825','1','0','0','0.00','0','0','1','s0UwYw','JCHocbY0dk9X');");
E_D("replace into `phome_enewsmember` values('45','feiweilai','f81aa85b6cfbbc013b096a4a1578182d','W1s6qdsjRWYIbFtjka4k','2434334413@qq.com','1429933094','1','0','0','0.00','0','0','1','UNzZAw','tqIcjKhw8MpM');");
E_D("replace into `phome_enewsmember` values('46','111111','092985a96aadd9fd182cba44cbaf1c0f','ksUyxmAX62qx5KrLg4X9','1111111@qq.com','1430072425','1','0','0','0.00','0','0','1','FWQ00g','PSxg0uoRShCF');");
E_D("replace into `phome_enewsmember` values('47','fkuertfp','8eab06e3acbd01a35c7c0163e1ba35fc','DRUQpDcU0mAiXEnyBrBX','ptemsil@qq.com','1430249236','1','0','0','0.00','0','0','1','T7rx7Y','ZIoM6p9yZ7Ab');");
E_D("replace into `phome_enewsmember` values('48','f1840028000','61dfd060148204cb2621d50f6a110d24','6FxRFbiLMi0ReCkM9V8W','673322458@qq.com','1430795961','1','0','0','0.00','0','0','1','uSdTUH','PkdVRjSkoWhY');");
E_D("replace into `phome_enewsmember` values('49','nxce','eac0c72a2f42bd9fc4a27940d81a8804','cZWNJNTvyNvVsKu2IG1W','381354636@qq.com','1430797159','1','0','0','0.00','0','0','1','cna4Bk','5Rf8Z1OrvuIF');");
E_D("replace into `phome_enewsmember` values('50','guduyijian','1c388c49cb944fe0e60d649cbd7fda68','D0z3lSMPz5Nx6EhRFUVc','iii@12.com','1430906793','1','0','0','0.00','0','0','1','Ul7c1k','9nCBXFcTmXjF');");
E_D("replace into `phome_enewsmember` values('51','test1111','5aaa9fd2145cb222628ad72fda7e9827','yVbB9rig9UDbeCiL1Nh8','282433697@qq.com','1430982671','1','0','0','0.00','0','0','1','YHqur8','ZV8heCtnikdJ');");
E_D("replace into `phome_enewsmember` values('52','dongml','1cd3c4e7eb05145d2a180857cebab06c','Oeh2pWV7uKAZThdtBV4p','dfd@qq.com','1431001150','1','0','0','0.00','0','0','1','c2p2To','8jqulb5zTBXG');");
E_D("replace into `phome_enewsmember` values('53','rambo','fac7542a7ccd50b13db3b295755e57f5','ydc6F2ai00CBCeKOGipL','97046732@qq.com','1431138798','1','0','0','0.00','0','0','1','xHTwRV','4tWTWwLnXHRj');");
E_D("replace into `phome_enewsmember` values('54','laurenschow','bf7699ee47968b86a1352144783eae6e','jg63COqcJQYm08GRRLtO','367227810@qq.com','1431142272','1','0','0','0.00','0','0','1','ntGSs3','5WQ5M7Nwyewp');");
E_D("replace into `phome_enewsmember` values('55','susu','e7dfb73dc6334394a53019f7b093209e','lQdNBxAuXoHE977vvgP9','121@qq.com','1431260937','1','0','0','0.00','0','0','1','74iuVL','sNiuOego4ccA');");
E_D("replace into `phome_enewsmember` values('56','666666','d72d8cdefe764d22e5cca8e155b6d8e9','dWb3Eo1KKfCWBM1h4NIJ','666666@126.com','1431674848','1','0','0','0.00','0','0','1','IqG8Hf','J03mT9lLeWnT');");
E_D("replace into `phome_enewsmember` values('57','zgc755735','83d1ecbaf2a53894730b46bfcebe22ad','20pMVDyZJLabVdCdYNAd','zgc755735@126.com','1431758142','1','0','0','0.00','0','0','1','DJIm4g','habh6NszCak6');");
E_D("replace into `phome_enewsmember` values('58','111','890ac893b545f3478df22d0440d7db8f','iynjLquTWAOaLSNbVb1c','1111@11.com','1431773291','1','0','0','0.00','0','0','1','QAZhCy','iPKE4Z0R2ige');");
E_D("replace into `phome_enewsmember` values('59','ppoo123','b821c5e8ee9789ee80c3bcfbe753dfa7','twWIOddZuChGm7HV2tse','ppoo1324323@qq.com','1432009058','1','0','0','0.00','0','0','1','cXSsrU','zfgxY70WsUlq');");
E_D("replace into `phome_enewsmember` values('60','w0702xj','858ccb7b2e1c49c4aa6de4e6d053bd3e','wBZ0BZhxgYhe0ncwuKh3','iii@yeah.net','1432478441','1','0','0','0.00','0','0','1','gZXBYM','4dwBrBUmXdVz');");
E_D("replace into `phome_enewsmember` values('61','zhuidu','57ff1c38d3633a6d983518536a860cdf','SPYAFNU31hS1TU9MDOOf','gdzixun@qq.com','1433170938','1','0','0','0.00','0','0','1','pnlv2B','CeQm4hw3osq3');");
E_D("replace into `phome_enewsmember` values('62','juppe','938fa05a73d5f849615651b3ffe4973a','9vf4KRcmS2lTdZSmwAOK','juppe@foxmail.com','1434218628','1','0','0','0.00','0','0','1','hHv8lP','ibrmyhRzCtSj');");
E_D("replace into `phome_enewsmember` values('63','渊下卧龙','90f6631b0d70ea62059c27dc5ab74b0a','U8VStjmFt8NAyd9b3tAB','1187769159@qq.com','1434682185','1','0','0','0.00','0','0','1','k8YR8V','aUpk4lE5PPpK');");
E_D("replace into `phome_enewsmember` values('64','alex','7e5ba4ec143b1b1c708ea11ab3e6994e','AzB5qltKvyIg00OsLjkc','alex@163.com','1435294532','1','0','0','0.00','0','0','1','2ovA7m','cxCgVddD1cP4');");
E_D("replace into `phome_enewsmember` values('65','suangking','5c63ccbb77eedb40df00b9aea5ce5bd9','AGyaTPJq73TfDYOUX51C','63775123@qq.com','1435556706','1','0','0','0.00','0','0','1','DlMBS4','R58k21AfuP6l');");
E_D("replace into `phome_enewsmember` values('66','q12345','89905ed7b0501d5d0b562074994087c4','EpFoGHElZdfpPVZamUXE','123@qq.com','1436919800','1','0','0','0.00','0','0','1','SazkFo','zVpxsa07sIcW');");
E_D("replace into `phome_enewsmember` values('67','q1234','2d867b1f2aa2c56b09b9a6f36c1e2a75','Dnjpqket226wLl8jrbj1','q1234@qq.com','1436920259','1','0','0','0.00','0','0','1','8MfBTX','n7p6c3krx73L');");
E_D("replace into `phome_enewsmember` values('68','chaidakang','17fc58726d727d7406736c8a57e14bb0','4w1zk299OvXUH2WgAlAy','550696565@qq.com','1437537752','1','0','0','0.00','0','0','1','EKIpMn','VZYcOHcIFJcN');");
E_D("replace into `phome_enewsmember` values('69','admin11','f5fc8505b2b6b32fa5d7d539501777e6','yVh4ugZC5pOCPz0VggIt','111111@qq.com','1437816634','1','0','0','0.00','0','0','1','l8CIg9','6MzRC9xfDfDH');");
E_D("replace into `phome_enewsmember` values('70','a123','4e683c0eda8e41fc3a0f99dcac9ce3b0','aDBubIza07pniNEjQW6e','123@123.com','1437997462','1','0','0','0.00','0','0','1','772LJ9','S8NNu9Vcoyjk');");
E_D("replace into `phome_enewsmember` values('71','123456','717d285c0132352bfd3c07eae9519e08','ZUfvTwSzw4ICZqsFDQtW','1258746@qq.com','1438158222','1','0','0','0.00','0','0','1','FjmZiI','wjhMTF9QG0Hm');");
E_D("replace into `phome_enewsmember` values('72','abc20ab','cbd43498ce0e9195547af2c96120adc4','bXk9PcpgbDMv4HhiJ2vy','312811902@qq.com','1438188942','1','0','0','0.00','0','0','1','6S9oHH','sU8whkjaxhzn');");
E_D("replace into `phome_enewsmember` values('73','1111','509bb7a5fd7c54c3ac06960e64924284','n1VhIHfiTHgLLBrYjK68','sdf@126.cc','1438783117','1','0','0','0.00','0','0','1','px7Ufp','lZSdxyRukWjE');");
E_D("replace into `phome_enewsmember` values('74','88888888','bf58a95b3a1ec6e622081b8af419b491','3rV3y8zmdZNHUTH1OJBu','88888888@qq.com','1438930558','1','0','0','0.00','0','0','1','SUYh8W','uiltFqlEdqzV');");
E_D("replace into `phome_enewsmember` values('75','FYQ01','02167869b27c3eca15a6c8645b37d1ca','1l1H9O4vMmKzYVY8FmmC','1241350152@163.com','1438949609','1','0','0','0.00','0','0','1','bDmwaH','7zoGcz4MbyQX');");
E_D("replace into `phome_enewsmember` values('76','测试','03253fdf0f6e20ef7fe7fb144de1f81f','jzDa8eY9QaH1ciRDBzz5','120962218@qq.com','1439010487','1','0','0','0.00','0','0','1','6I7iXO','gnBYcRgqpJaL');");
E_D("replace into `phome_enewsmember` values('77','kisscofei','20542c95c942dd855664678a0ed5f54b','xIJN1hWgqbVMFumczGTL','382274812@qq.com','1439185687','1','0','0','0.00','0','0','1','0FsBlQ','ofBqOFeZUiip');");
E_D("replace into `phome_enewsmember` values('78','123789','166d8c794692b726bab49717bb2e6ff4','4aABsWIPr2gNB2DZpTDx','123456@qq.com','1439531923','1','0','0','0.00','0','0','1','GNX3ws','jCWrqn6kdxoG');");
E_D("replace into `phome_enewsmember` values('79','1234124','ff3c19b2bcb5397b5b5ee7ef6825121a','yrsJm5XgicQ6OVbXbzc0','123@ww.com','1439745057','1','0','0','0.00','0','0','1','sXZ8t3','RCa7pToRE3C6');");
E_D("replace into `phome_enewsmember` values('80','moemoe','a695b104a185ffc700b9b6a59315f319','hlZUtjH1In2ynae6ePFD','2260320300@qq.com','1440050427','1','0','0','0.00','0','0','1','N3Fdi2','lJJKJDf8Pdm8');");
E_D("replace into `phome_enewsmember` values('81','w122','7c82fa715a4df57844a7ddc25339e50d','UVKSzyZSDoznWCKD7jT1','398814693@qq.com','1440089185','1','0','0','0.00','0','0','1','bFCxOj','afcqDWCsz6nc');");
E_D("replace into `phome_enewsmember` values('82','gcdown','c8255705e263b938b356c97ca63b3572','2vALh8lw9xnnCRHloxLj','14654@qq.com','1440236247','1','0','0','0.00','0','0','1','hzXmzU','EpGvNlhMl9Jn');");
E_D("replace into `phome_enewsmember` values('83','sodmmn','b4b8a34b4a8f4a5623537abce3da6160','4HWUdmNJySxsdNQ0yEkR','913333655@qq.com','1441071094','1','0','0','0.00','0','0','1','H2qsUn','ejfKmcsLMhue');");
E_D("replace into `phome_enewsmember` values('84','test008','c5a43685f85cb5d43e1da9950cbc6410','mwLM7v4AOvVc2z0gQptn','65qwe@qq.com','1441444893','1','0','0','0.00','0','0','1','xAYJug','LYzNRkMpAqDI');");
E_D("replace into `phome_enewsmember` values('85','bjn123','d5f8896da9892b81035d296161b60ac5','LA6cwgPxNXUVcKRa3l1W','531550830@qq.com','1441872352','1','0','0','0.00','0','0','1','uC8Byc','9CIZOtiVS4rn');");
E_D("replace into `phome_enewsmember` values('86','zhushaobin2006','ffd2165cca7861a491ba9ef10df5ab03','Ai1dcRoeANgsdjzZtkII','3007942@qq.com','1442264545','1','0','0','0.00','0','0','1','NOfYFY','r1Spuxv8ou2b');");
E_D("replace into `phome_enewsmember` values('87','a13215734223','aff98fd01ad6b9ed9685734544579e16','PLelyqjStCi8jRxp8Lh8','54585@qq.com','1442567395','1','0','0','0.00','0','0','1','Y8FIn6','Av00XhyUmSxB');");
E_D("replace into `phome_enewsmember` values('88','350805442','89c0ca57e5e4920e2476c92b934eb764','t5z0nOr9XuwUiBLyhn85','350805442@qq.com','1442800126','1','0','0','0.00','0','0','1','hzt0DQ','veook2sfJSGs');");
E_D("replace into `phome_enewsmember` values('89','zx3121809','204a3a154d2fb707bae3a3c49de47fca','aZ43mpiN9ldJ3D0XR3oA','646273365@qq.com','1442838769','1','0','0','0.00','0','0','1','UgvkcT','q6FNfXi6GsJi');");
E_D("replace into `phome_enewsmember` values('90','测试10','247ced3844ad8f2377da1c3d3b60038f','sep9Z8PYpU7pxdEAqHE2','dgad@163.com','1443255397','1','0','0','0.00','0','0','1','UFWAHd','ah2o6gGbxnoC');");
E_D("replace into `phome_enewsmember` values('91','yang','ccf304207dcc669bf955b7108855b1da','uKsx3qmvIxrrUXDPUTHD','307594239@qq.com','1443412296','1','0','0','0.00','0','0','1','or6jOr','1Q5riHyN1Jhb');");
E_D("replace into `phome_enewsmember` values('92','ergsdgdfd','a4e232e983673e064621443a28ee2aff','tYkijSuTJfjcJXjtCn0Z','123@qq.bcd','1443776447','1','0','0','0.00','0','0','1','R9kLLO','zwkirO0gCdIB');");
E_D("replace into `phome_enewsmember` values('93','遇见','f2218081416da6380dbb30a8808282f5','pgrewni62JFBeYglRG0O','10474959@qq.com','1443790799','1','0','0','0.00','0','0','1','ZEkFX9','EItYXhlLguGf');");
E_D("replace into `phome_enewsmember` values('94','zhengchao','cb25ba9b3b54a9340a43351c5bfe9ec9','QBhrc0JFzJr5mReWC5xE','zhengchao505@sina.com','1444397632','1','0','0','0.00','0','0','1','N8vTcd','Lq8qr83NWYkz');");
E_D("replace into `phome_enewsmember` values('95','1231231f','68af1778d75a4e80009316ff3680a5c8','bFh7IEmnZYvJuMPbweQD','125553@123.com','1444989444','1','0','0','0.00','0','0','1','PRwaqr','zXgJ9E9vnEd1');");
E_D("replace into `phome_enewsmember` values('96','1231231f1','28925e4bd513a901bf9def5a8ab070bc','w5i0ubg84tQelVS1ozeL','123123@123123.cc','1445016787','1','0','0','0.00','0','0','1','OR8CHe','RmEqq4D8w6Qr');");
E_D("replace into `phome_enewsmember` values('97','sdfsdf','4e83530cdca7e015d263dca8cb70776d','E7TAEKIYZAY4Sg8E198a','sdf@qq.com','1445067051','1','0','0','0.00','0','0','1','i8TZrZ','Ah80IkByLYOy');");
E_D("replace into `phome_enewsmember` values('98','123123111a','7bf1269bb2a726936d0949e649f02936','jxzvFeCp5DtG2pkrFigT','1231123@12123.cccc','1445087968','1','0','0','0.00','0','0','1','c5jF4G','pE7bDDx5zz2C');");
E_D("replace into `phome_enewsmember` values('99','huangxinyu','6f993fa43f1b8495850db43af9b23562','t3IVaWn3f8MPvvZGLOas','huangxinyu_it@163.com','1445322123','1','0','0','0.00','0','0','1','G2y8k2','4LEg7Be9DaDG');");
E_D("replace into `phome_enewsmember` values('100','hj19870912','f3109d12c6fe70da4b1c3d9df3f48f92','ZLaTrqWaxjI8YNPtXk9C','18979371835@163.com','1445680974','1','0','0','0.00','0','0','1','CsnTrC','w4uFLLTpR32c');");
E_D("replace into `phome_enewsmember` values('101','360sxw','57a9f05c46ead98b9bcc664149bcc42c','W9AzpdECTP1pWBdoQucs','360sxw@163.com','1449905829','1','0','0','0.00','0','0','1','2qMSUO','0fZ19nkEcl6R');");

@include("../../inc/footer.php");
?>