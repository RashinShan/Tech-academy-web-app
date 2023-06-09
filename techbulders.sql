create database`techbulders`;
use `techbulders`;
--



CREATE TABLE `quiz1` (
  `id` varchar(100) NOT NULL,
  `q` varchar(100) NOT NULL,
  `a` varchar(100) NOT NULL,
  `b` varchar(100) NOT NULL,
  `c` varchar(100) NOT NULL,
  `d` varchar(100) NOT NULL,
  `ans` varchar(100) NOT NULL,
  `ansval` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;



CREATE TABLE `user_data` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


INSERT INTO `user_data` (`id`, `name`, `password`, `email`, `phone`, `address`) VALUES


(0, 'cc6896d13649ecb838250295766dfe04', '202cb962ac59075b964b07152d234b70', '8a28c86bd1251e77076d28c89372f51c', '5baf61096a1e76e1eb8e3d6d880d80ac', 'f2b055e888737b6091cbcfbc565c0fbe'),
(0, 'aa63b0d5d950361c05012235ab520512', '202cb962ac59075b964b07152d234b70', '1bee9c57ee79d865b8ed0d6da224695e', '5baf61096a1e76e1eb8e3d6d880d80ac', 'f2b055e888737b6091cbcfbc565c0fbe'),
(0, 'a9f56b7ece2113c9c4a1214a19ede99c', '202cb962ac59075b964b07152d234b70', 'bd078ca863d89020aeb42ac9e920de98', '3226598a4e3d406a2dad32be70457216', 'a9e9f5dbb9348192d36cb8cd3822267e'),
(0, '21232f297a57a5a743894a0e4a801fc3', '0192023a7bbd73250516f069df18b500', '75d23af433e0cea4c0e45a56dba18b30', '3226598a4e3d406a2dad32be70457216', 'f2b055e888737b6091cbcfbc565c0fbe'),
(0, '4d4e398d9115edf2c08b06e893010615', '3e119ab537d3c4cc0c31b9277bfd785e', '5528ea7ef425f28b4a366cc37a6c9d34', '25d55ad283aa400af464c76d713c07ad', '91fdd19a238bea137ce97170cebbe58a');
COMMIT;