


--
-- Base de datos: `db_bet_autoria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banks`
--

CREATE TABLE `banks` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `banks`
--

INSERT INTO `banks` (`id`, `name`, `address`, `phone`) VALUES
(1, 'Banco Pacifico','Victor Emilio Estrada 510', ' 2441681'),
(2, 'Banco Guayaquil', 'José María Roura MZf 50 Villa 19 Guayaquil 090505', '1700800800'),
(3, 'Banco Pichincha', ' MAPASINGUE OESTE NE AVENIDA 6TA Y CALLE 3ERA', '593981505302');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bets`
--

CREATE TABLE `bets` (
  `id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `matchs_id` int(11) NOT NULL,
  `teams_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bets`
--

INSERT INTO `bets` (`id`, `amount`, `users_id`, `matchs_id`, `teams_id`) VALUES
(4, 100, 1, 1, 1),
(5, 150, 2, 2, 2),
(6, 80, 3, 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `channels`
--

CREATE TABLE `channels` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `languages_id` int(11) NOT NULL,
  `matchs_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `channels`
--

INSERT INTO `channels` (`id`, `name`, `languages_id`, `matchs_id`) VALUES
(1, 'Beyond the summit', 1, 1),
(2, 'Gamer studio', 1, 2),
(3, 'Balbe', 2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `countries`
--

INSERT INTO `countries` (`id`, `name`) VALUES
(1, 'Ecuador'),
(2, 'Perú'),
(3, 'Islandia'),
(4, 'Noruega'),
(5, 'Chile'),
(6, 'Colombia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `creditcards`
--

CREATE TABLE `creditcards` (
  `id` int(11) NOT NULL,
  `placeholder` varchar(255) NOT NULL,
  `credit_number` varchar(255) NOT NULL,
  `expiration_date` varchar(255) NOT NULL,
  `banks_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `creditcards`
--

INSERT INTO `creditcards` (`id`, `placeholder`, `credit_number`, `expiration_date`, `banks_id`) VALUES
(1, 'Daniel Valencia', '4099571361411691', '03/2020', 1),
(2, 'Kevin Santacruz', '4502961182762615', '01/2019', 1),
(3, 'Josty Mayorga', '4555243427875973', '02/2019', 2),
(4, 'Mayiya Burgos', '4711632037692482', '11/2020', 2),
(5, 'Marola Zapatier', '4505548764274130', '04/2018', 2),
(6, 'Mariuxi Escalante', '4560207732099788', '12/2019', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genders`
--

CREATE TABLE `genders` (
  `id` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `genders`
--

INSERT INTO `genders` (`id`, `gender`) VALUES
(1, 'masculino'),
(2, 'femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `language` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `languages`
--

INSERT INTO `languages` (`id`, `language`) VALUES
(1, 'Español'),
(2, 'Ingles'),
(3, 'Chino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matchs`
--

CREATE TABLE `matchs` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `first_team_id` int(11) NOT NULL,
  `second_team_id` int(11) NOT NULL,
  `result` int(11) NOT NULL,
  `round` varchar(255) NOT NULL,
  `tournaments_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `matchs`
--

INSERT INTO `matchs` (`id`, `date`, `first_team_id`, `second_team_id`, `result`, `round`, `tournaments_id`) VALUES
(1, '09-07-2017', 1, 2, 1, 'Semifinal', 1),
(2, '09-07-2017', 3, 4, 1, 'Semifinal', 1),
(3, '09-07-2017', 2, 1, 2, 'Final', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `options`
--

INSERT INTO `options` (`id`, `name`, `description`) VALUES
(1, 'recargar', 'el usuario puede recargar dinero a su cartera'),
(2, 'ver apuestas', 'el usuario puede ver todas las apuestas realizadas'),
(3, 'apostar', 'el usuario puede apostar a las diferentes partidas que se encuantren disponibles'),
(4, 'retirar dinero', 'el usuario puede retirar el dinero que tenga en su cartera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `optionsxrol`
--

CREATE TABLE `optionsxrol` (
  `id` int(11) NOT NULL,
  `roles_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `options_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `optionsxrol`
--

INSERT INTO `optionsxrol` (`id`, `roles_id`, `description`, `options_id`) VALUES
(1, 2, '', 1),
(2, 2, '', 2),
(3, 2, '', 3),
(4, 1, '', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `people`
--

CREATE TABLE `people` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `identificationCard` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `genders_id` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `countries_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `people`
--

INSERT INTO `people` (`id`, `name`, `lastName`, `identificationCard`, `age`, `mail`, `genders_id`, `phone`, `countries_id`) VALUES
(1, 'Josty', 'Mayorga', '0951816768', 22, 'jgmayorg@hotmail.com', 1, '0986132426', 1),
(2, 'kevin', 'Santacruz', '0999786112', 22, 'ksantacruz@hotmail.com', 1, '0998123689', 1),
(3, 'Daniel', 'Valencia', '0984884030', 23, 'daniel-eve1@hotmail.com', 1, '0995720317', 1),
(4, 'Paola', 'Ortiz', '0932145893', 21, 'portiz@hotmail.com', 2, '0986347951', 1),
(5, 'Andrea', 'Jaramillo', '0981424512', 21, 'acjak@espol.edu.ec', 2, '0965313246', 1),
(6, 'Solange', 'Montoya', '0961575433', 20, 'solecito@espol.edu.ec', 2, '0965996246', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recharges`
--

CREATE TABLE `recharges` (
  `id` int(11) NOT NULL,
  `wallets_id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `recharges`
--

INSERT INTO `recharges` (`id`, `wallets_id`, `date`, `amount`) VALUES
(1, 1, '09-07-2017', 100),
(2, 2, '15-07-2017', 100),
(3, 3, '22-07-2017', 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`) VALUES
(1, 'administrador', 'control de todo el sistema'),
(2, 'apostador', 'tiene acceso a sus apuestas y sus ganancias');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sponsors`
--

CREATE TABLE `sponsors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sponsors`
--

INSERT INTO `sponsors` (`id`, `name`) VALUES
(1, 'HyperX'),
(2, 'NVIDIA'),
(3, 'Windows'),
(4, 'HP'),
(5, 'Valve');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(1, 'activo'),
(2, 'inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `captainName` varchar(255) NOT NULL,
  `sponsors_id` int(11) NOT NULL,
  `countries_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `teams`
--

INSERT INTO `teams` (`id`, `name`, `captainName`, `sponsors_id`, `countries_id`) VALUES
(1, 'Evil Geniuses', 'Andreas Franck \"Cr1t-\" Nielsen', 5, 1),
(2, 'Digital Chaos', 'Kanishka \"BuLba\" Sosale', 5, 1),
(3, 'OG', 'Sébastien \"7ckngMad\" Debs', 5, 1),
(4, 'Team Liquid', 'Kuro \"KuroKy\" Salehi Takhasomi', 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tournaments`
--

CREATE TABLE `tournaments` (
  `id` int(11) NOT NULL,
  `sponsors_id` int(11) NOT NULL,
  `prizePool` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `organizer` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `startDate` varchar(255) NOT NULL,
  `endDate` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tournaments`
--

INSERT INTO `tournaments` (`id`, `sponsors_id`, `prizePool`, `type`, `organizer`, `name`, `startDate`, `endDate`, `location`) VALUES
(1, 1, 175, 'Offline', 'Valve', 'DreamLeague Season 7', '23-08-2017', '28-08-2017', 'Ecuador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `wallets_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `transactions`
--

INSERT INTO `transactions` (`id`, `amount`, `wallets_id`) VALUES
(1, 500, 1),
(2, 500, 2),
(3, 500, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `people_id` int(11) NOT NULL,
  `roles_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--



INSERT INTO `users` (`id`, `username`, `password`, `status_id`, `created`, `people_id`, `roles_id`) VALUES
(1, 'rosty', '$2y$10$DhG9u7tzulaNvM1SrpH0A.9W22H98EMSDcnnsdlW78sjbLA5Tgipq', 1, '2017-07-31 23:57:14', 1, 1),
(2, 'ksanta', '$2y$10$DhG9u7tzulaNvM1SrpH0A.9W22H98EMSDcnnsdlW78sjbLA5Tgipq', 1, '2017-07-31 23:57:14', 2, 1),
(3, 'champion', '$2y$10$DhG9u7tzulaNvM1SrpH0A.9W22H98EMSDcnnsdlW78sjbLA5Tgipq', 1, '2017-07-31 23:57:14', 3, 1),
(4, 'paola', '$2y$10$DhG9u7tzulaNvM1SrpH0A.9W22H98EMSDcnnsdlW78sjbLA5Tgipq', 1, '2017-07-31 23:57:14', 4, 2),
(5, 'andrea', '$2y$10$DhG9u7tzulaNvM1SrpH0A.9W22H98EMSDcnnsdlW78sjbLA5Tgipq', 1, '2017-07-31 23:57:14', 5, 2),
(6, 'solange', '$2y$10$DhG9u7tzulaNvM1SrpH0A.9W22H98EMSDcnnsdlW78sjbLA5Tgipq', 1, '2017-07-31 23:57:14', 6, 2);


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wallets`
--

CREATE TABLE `wallets` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `credit_card_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `wallets`
--

INSERT INTO `wallets` (`id`, `users_id`, `amount`, `credit_card_id`) VALUES
(1, 4, 100, 4),
(2, 5, 100, 5),
(3, 6, 100, 6);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `bets`
--
ALTER TABLE `bets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_bets` (`users_id`),
  ADD KEY `matchs_bets` (`matchs_id`),
  ADD KEY `teams_bets` (`teams_id`);

--
-- Indices de la tabla `channels`
--
ALTER TABLE `channels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `languages_channels` (`languages_id`),
  ADD KEY `matchs_channels` (`matchs_id`);

--
-- Indices de la tabla `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `creditcards`
--
ALTER TABLE `creditcards`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `matchs`
--
ALTER TABLE `matchs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `first_team_id_matchs` (`first_team_id`),
  ADD KEY `second_team_id_matchs` (`second_team_id`),
  ADD KEY `tournaments_id_matchs` (`tournaments_id`);

--
-- Indices de la tabla `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `optionsxrol`
--
ALTER TABLE `optionsxrol`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roles_id_optionsxrol` (`roles_id`),
  ADD KEY `options_id_optionsxrol` (`options_id`);

--
-- Indices de la tabla `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`),
  ADD KEY `genders_people` (`genders_id`),
  ADD KEY `countries_people` (`countries_id`);

--
-- Indices de la tabla `recharges`
--
ALTER TABLE `recharges`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wallets_id_recharges` (`wallets_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sponsors_id_teams` (`sponsors_id`),
  ADD KEY `countries_id_teams` (`countries_id`);

--
-- Indices de la tabla `tournaments`
--
ALTER TABLE `tournaments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sponsors_id_tournaments` (`sponsors_id`);

--
-- Indices de la tabla `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wallets_id_transactions` (`wallets_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD KEY `status_id_users` (`status_id`),
  ADD KEY `people_id_users` (`people_id`),
  ADD KEY `roles_id_users` (`roles_id`);

--
-- Indices de la tabla `wallets`
--
ALTER TABLE `wallets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id_wallets` (`users_id`),
  ADD KEY `credit_card_id_wallets` (`credit_card_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `banks`
--
ALTER TABLE `banks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `bets`
--
ALTER TABLE `bets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `channels`
--
ALTER TABLE `channels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `creditcards`
--
ALTER TABLE `creditcards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `genders`
--
ALTER TABLE `genders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `matchs`
--
ALTER TABLE `matchs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `optionsxrol`
--
ALTER TABLE `optionsxrol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `people`
--
ALTER TABLE `people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `recharges`
--
ALTER TABLE `recharges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tournaments`
--
ALTER TABLE `tournaments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `wallets`
--
ALTER TABLE `wallets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bets`
--
ALTER TABLE `bets`
  ADD CONSTRAINT `matchs_bets` FOREIGN KEY (`matchs_id`) REFERENCES `matchs` (`id`),
  ADD CONSTRAINT `teams_bets` FOREIGN KEY (`teams_id`) REFERENCES `teams` (`id`),
  ADD CONSTRAINT `users_bets` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `channels`
--
ALTER TABLE `channels`
  ADD CONSTRAINT `languages_channels` FOREIGN KEY (`languages_id`) REFERENCES `languages` (`id`),
  ADD CONSTRAINT `matchs_channels` FOREIGN KEY (`matchs_id`) REFERENCES `matchs` (`id`);

--
-- Filtros para la tabla `matchs`
--
ALTER TABLE `matchs`
  ADD CONSTRAINT `first_team_id_matchs` FOREIGN KEY (`first_team_id`) REFERENCES `teams` (`id`),
  ADD CONSTRAINT `second_team_id_matchs` FOREIGN KEY (`second_team_id`) REFERENCES `teams` (`id`),
  ADD CONSTRAINT `tournaments_id_matchs` FOREIGN KEY (`tournaments_id`) REFERENCES `tournaments` (`id`);

--
-- Filtros para la tabla `optionsxrol`
--
ALTER TABLE `optionsxrol`
  ADD CONSTRAINT `options_id_optionsxrol` FOREIGN KEY (`options_id`) REFERENCES `options` (`id`),
  ADD CONSTRAINT `roles_id_optionsxrol` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`);

--
-- Filtros para la tabla `people`
--
ALTER TABLE `people`
  ADD CONSTRAINT `countries_people` FOREIGN KEY (`countries_id`) REFERENCES `countries` (`id`),
  ADD CONSTRAINT `genders_people` FOREIGN KEY (`genders_id`) REFERENCES `genders` (`id`);

--
-- Filtros para la tabla `recharges`
--
ALTER TABLE `recharges`
  ADD CONSTRAINT `wallets_id_recharges` FOREIGN KEY (`wallets_id`) REFERENCES `wallets` (`id`);

--
-- Filtros para la tabla `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `countries_id_teams` FOREIGN KEY (`countries_id`) REFERENCES `countries` (`id`),
  ADD CONSTRAINT `sponsors_id_teams` FOREIGN KEY (`sponsors_id`) REFERENCES `sponsors` (`id`);

--
-- Filtros para la tabla `tournaments`
--
ALTER TABLE `tournaments`
  ADD CONSTRAINT `sponsors_id_tournaments` FOREIGN KEY (`sponsors_id`) REFERENCES `sponsors` (`id`);

--
-- Filtros para la tabla `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `wallets_id_transactions` FOREIGN KEY (`wallets_id`) REFERENCES `wallets` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `people_id_users` FOREIGN KEY (`people_id`) REFERENCES `people` (`id`),
  ADD CONSTRAINT `roles_id_users` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `status_id_users` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`);

--
-- Filtros para la tabla `wallets`
--
ALTER TABLE `wallets`
  ADD CONSTRAINT `credit_card_id_wallets` FOREIGN KEY (`credit_card_id`) REFERENCES `creditcards` (`id`),
  ADD CONSTRAINT `users_id_wallets` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

ALTER TABLE `creditcards`
  ADD CONSTRAINT `banks_credit card` FOREIGN KEY (`banks_id`) REFERENCES `banks` (`id`);