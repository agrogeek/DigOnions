
CREATE TABLE IF NOT EXISTS `elecciones_municipales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `siglas` text NOT NULL,
  `votos` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;