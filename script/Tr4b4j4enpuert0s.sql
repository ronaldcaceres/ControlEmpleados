-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 27, 2017 at 07:44 AM
-- Server version: 5.6.35-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Tr4b4j4enpuert0s`
--

-- --------------------------------------------------------

--
-- Table structure for table `CuentaBancaria`
--

CREATE TABLE IF NOT EXISTS `CuentaBancaria` (
  `CodCuentaBancaria` int(11) NOT NULL COMMENT 'Codigo del registro de cuenta bancaria',
  `CodTrabajadorPortuario` int(11) NOT NULL COMMENT 'Codigo del trabajador portuario',
  `CodBanco` int(11) NOT NULL COMMENT 'Codigo del Banco o nombre',
  `NroCuenta` varchar(50) NOT NULL COMMENT 'Numero de cuenta',
  `TipoCuenta` int(11) NOT NULL COMMENT 'Tipo de Cuenta',
  `Moneda` int(11) NOT NULL COMMENT 'Tipo de Moneda',
  `UsuarioCreacion` int(11) NOT NULL COMMENT 'Usuario que creo el registro',
  `UsuarioActualizacion` int(11) NOT NULL COMMENT 'Usuario que actualizo el registro',
  `FechaCreacion` date NOT NULL COMMENT 'Fecha que se creo el registro',
  `FechaActualizacion` date NOT NULL COMMENT 'FEcha que se actualizo el registro',
  PRIMARY KEY (`CodCuentaBancaria`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Dependiente`
--

CREATE TABLE IF NOT EXISTS `Dependiente` (
  `CodDependiente` int(11) NOT NULL COMMENT 'Código del registro de dependiente (identity)',
  `CodTrabajadorPortuario` int(11) NOT NULL COMMENT 'Código del trabajador portuario',
  `NombreCompleto` varchar(100) NOT NULL COMMENT 'Nombre y apellidos del dependiente',
  `TipoDependiente` int(11) NOT NULL COMMENT 'Tipo de dependiente',
  `FechaNacimeinto` date NOT NULL COMMENT 'Fecha de Nacimiento del dependiente',
  `UsuarioCreacion` int(11) NOT NULL COMMENT 'Código de usuario que creó el registro',
  `UsuarioActualización` int(11) NOT NULL COMMENT 'Código de usuario que actualizó el registro',
  `FechaCreacion` date NOT NULL COMMENT 'Fecha de creación del registro',
  `FechaActualizacion` date NOT NULL COMMENT 'Fecha de última actualización del registro',
  PRIMARY KEY (`CodDependiente`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Documentosadjuntos`
--

CREATE TABLE IF NOT EXISTS `Documentosadjuntos` (
  `CodDocumentoAdjunto` int(11) NOT NULL COMMENT 'Codigo del registro de documento adjunto (identity)',
  `CodRequisito` int(11) NOT NULL COMMENT 'Codigo del requisito al que pertenece el documento',
  `Estado` int(11) NOT NULL COMMENT 'Valor del estado en el que se encuentra',
  `NombreArchivo` varchar(50) NOT NULL COMMENT 'Nombre del archivo adjunto',
  `UsuarioCreacion` int(11) NOT NULL COMMENT 'Codigo del usuario que creo el registro',
  `UsuarioActualizacion` int(11) NOT NULL COMMENT 'Codigo del usuario que creo el registro',
  `FechaCreacion` date NOT NULL COMMENT 'Fecha de creacion del registro',
  `FechaActualizacion` date NOT NULL COMMENT 'Fecha de ultima actualizacion del registro',
  PRIMARY KEY (`CodDocumentoAdjunto`),
  KEY `CodRequisito` (`CodRequisito`),
  KEY `CodRequisito_2` (`CodRequisito`),
  KEY `CodRequisito_3` (`CodRequisito`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Log_Residencia`
--

CREATE TABLE IF NOT EXISTS `Log_Residencia` (
  `CodLogResidencia` int(11) NOT NULL COMMENT 'Codigo del registro de residencia (identity)',
  `CodTrabajadorPortuario` int(11) NOT NULL COMMENT 'Codigo del trabajador portuario',
  `ContactoNombre` varchar(100) NOT NULL COMMENT 'Nombre y apellidos del contacto en caso de emergencia',
  `ContactoTelefono1` varchar(50) NOT NULL COMMENT 'Numero de telefono adicional 1',
  `ContactoTelefono2` varchar(50) NOT NULL COMMENT 'Numero de telefono adicional 2',
  `CorreoElectronico` varchar(50) NOT NULL COMMENT 'Direccion de correo electronico',
  `Departamento` int(11) NOT NULL COMMENT 'Departamento de residencia',
  `Provincia` int(11) NOT NULL COMMENT 'Provincia de residencia',
  `Distrito` int(11) NOT NULL COMMENT 'Distrito de residencia',
  `ComentariosExtra` varchar(200) NOT NULL COMMENT 'Cualquier otro comentario que el usuario quiera compartir',
  `Activo` bit(1) NOT NULL COMMENT 'Indicar si es la direccion actual (1) o no (0)',
  `UsuarioCreacion` int(11) NOT NULL COMMENT 'Codigo de usuario que creo el registro',
  `UsuarioActualizacion` int(11) NOT NULL COMMENT 'Codigo de usuario que actualizo el registro',
  `FechaCreacion` date NOT NULL COMMENT 'Fecha de creacion del registro',
  `FechaActualizacion` date NOT NULL COMMENT 'Fecha de actualizacion del registro',
  PRIMARY KEY (`CodLogResidencia`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Permiso`
--

CREATE TABLE IF NOT EXISTS `Permiso` (
  `CodPermiso` int(11) NOT NULL COMMENT 'Código de registro del permiso (Identity)',
  `CodTrabajadorPortuario` int(11) NOT NULL COMMENT 'Código del trabajador portuario',
  `Observacion` varchar(100) NOT NULL COMMENT 'Observación sobre el registro del permiso',
  `Dia` date NOT NULL COMMENT 'Día seleccionado para el permiso',
  `Turno` int(11) NOT NULL COMMENT 'Turno seleccionado para el permiso',
  `Motivo` int(11) NOT NULL COMMENT 'Valor del motivo seleccionado para el permiso',
  `UsuarioCreacion` int(11) NOT NULL COMMENT 'Código de usuario que creó el registro',
  `UsuarioActualizacion` int(11) NOT NULL COMMENT 'Código de usuario que actualizó el registro',
  `FechaCreacion` date NOT NULL COMMENT 'Fecha de creación del registro',
  `FechaActualizacion` date NOT NULL COMMENT 'Fecha de última actualización del registro',
  PRIMARY KEY (`CodPermiso`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `RequisitoPorEspecialidad`
--

CREATE TABLE IF NOT EXISTS `RequisitoPorEspecialidad` (
  `CodRequisito` int(11) NOT NULL COMMENT 'Codigo de requisito (identity)',
  `CodEspecialidad` int(11) DEFAULT NULL COMMENT 'Codigo de Especialidad',
  `IndicadorObligatorio` bit(1) NOT NULL COMMENT 'Bit que indica si es obligatorio o no',
  `IndicadorRenovable` bit(1) NOT NULL COMMENT 'Bit que indica si es renovable o no',
  `CantidadDoc` int(11) DEFAULT NULL COMMENT 'Cantidad de documentos que se necesita adjuntar',
  `TipoRequisito` int(11) NOT NULL COMMENT 'Tipo de Requisito',
  `UsuarioCreacion` int(11) NOT NULL COMMENT 'Codigo de usuario que creo el requisito',
  `UsuarioActualizacion` int(11) NOT NULL COMMENT 'Codigo de usuario que actualizo el requisito',
  `FechaCreacion` date NOT NULL COMMENT 'Fecha de creacion del requisito',
  `FechaActualizacion` date NOT NULL COMMENT 'Fecha de ultima actualizacion del requisito',
  PRIMARY KEY (`CodRequisito`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `RequisitoTrabajadorPortuario`
--

CREATE TABLE IF NOT EXISTS `RequisitoTrabajadorPortuario` (
  `CodRequisitoTrabajadorPortuario` int(11) NOT NULL COMMENT 'Codigo de registro del requisito trabajador portuario',
  `CodTRabajadorPortuario` int(11) NOT NULL COMMENT 'Codigo del trabajador portuario',
  `CodRequisito` int(11) NOT NULL COMMENT 'Codigo del requisito registrado',
  `FechaInicio` date NOT NULL COMMENT 'Fecha inicio de vigencia del requisito',
  `FechaFin` date NOT NULL COMMENT 'Fecha fin de vigencia del requisito',
  `UsuarioCreacion` int(11) NOT NULL COMMENT 'Codigo de Usuario que creo el registro',
  `UsuarioActualizacion` int(11) NOT NULL COMMENT 'Codigo de usuario que actualizo el registro',
  `FechaCreacion` date NOT NULL COMMENT 'Fecha de creacion del registro',
  `FechaActualizacion` date NOT NULL COMMENT 'Fecha de actualizacion del registro',
  PRIMARY KEY (`CodRequisitoTrabajadorPortuario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `SancionTrabajador`
--

CREATE TABLE IF NOT EXISTS `SancionTrabajador` (
  `CodSancionTrabajador` int(11) NOT NULL COMMENT 'Codigo de la sancion de un trabajador portuario',
  `CodTrabajadorPortuario` int(11) NOT NULL COMMENT 'Codigo del trabajador portuario',
  `Observacion` varchar(100) DEFAULT NULL COMMENT 'Observacion sobre el permiso solicitado',
  `Estado` int(11) NOT NULL COMMENT 'Valor del estado en el que se encuentra',
  `TipoSancion` int(11) NOT NULL COMMENT 'Tipo de sancion',
  `TipoFalta` int(11) NOT NULL COMMENT 'Tipo de falta (leve, grave, muy grave)',
  `FechaInicio` date NOT NULL COMMENT 'Fecha de inicio de la sancion',
  `FechaFin` date DEFAULT NULL COMMENT 'Fecha de fin de sancion',
  `Usuariocreacion` int(11) NOT NULL COMMENT 'Codigo de usuario que creo el registro',
  `UsuarioActualizacion` int(11) NOT NULL COMMENT 'Codigo de usuario que atualizo el registro',
  `FechaCreacion` date NOT NULL COMMENT 'Fecha de creacion del registro',
  `FechaActualizacion` date NOT NULL COMMENT 'Fecha de ultima actualizacion de registro',
  PRIMARY KEY (`CodSancionTrabajador`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `TrabajadorEspecialidad`
--

CREATE TABLE IF NOT EXISTS `TrabajadorEspecialidad` (
  `CodTrabajadorEspecialidad` int(11) NOT NULL COMMENT 'Codigo de Registro',
  `CodTrabajadorPortuario` int(11) NOT NULL COMMENT 'Codigo de Trabajador',
  `CodEspecialidad` int(11) NOT NULL COMMENT 'Codigo de Especialidad',
  `CodTipoCarga` int(11) NOT NULL COMMENT 'Codigo tipo carga',
  `Prioridad` int(11) NOT NULL COMMENT 'Numero de orden de prioridad',
  `UsuarioCreacion` int(11) NOT NULL COMMENT 'Codigo de usuario que creo el registro',
  `UsuarioActualizacion` int(11) NOT NULL COMMENT 'Codigo de usuario que actualizo el registro',
  `FechaCreacion` date NOT NULL COMMENT 'Fecha de Creacion del registro',
  `FechaActualizacion` date NOT NULL COMMENT 'Fecha de ultima actualizacion del registro',
  PRIMARY KEY (`CodTrabajadorEspecialidad`),
  KEY `CodTrabajadorPortuario` (`CodTrabajadorPortuario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `TrabajadorPortuario`
--

CREATE TABLE IF NOT EXISTS `TrabajadorPortuario` (
  `CodTrabajadorPortuario` int(11) NOT NULL,
  `ApellidoPaterno` varchar(50) NOT NULL COMMENT 'Apellido paterno del trabajador portuario',
  `ApellidoMaterno` varchar(50) NOT NULL COMMENT 'Apellido materno del trabajador portuario',
  `Nombre` varchar(50) NOT NULL COMMENT 'Nombre del trabajador portuario',
  `Tax` varchar(20) DEFAULT NULL COMMENT 'Código único de sistema pensionario',
  `ClaseBrevete` varchar(10) DEFAULT NULL COMMENT 'Tipo de brevete (Clase A I)',
  `EstadoCivil` varchar(10) NOT NULL COMMENT 'Soltero/Casado/Divorciado',
  `FechaNacimiento` date NOT NULL COMMENT 'Fecha de nacimiento del trabajador portuario',
  `FechaRevalidacionBrevete` date NOT NULL COMMENT 'Fecha en la que caduca su brevete actual',
  `IndicadorTieneBrevete` bit(1) NOT NULL COMMENT 'Bit que indica si tiene brevete(1) o no(0)',
  `NroCelular` varchar(50) NOT NULL COMMENT 'Número de celular',
  `TipoDocIdentidad` int(11) NOT NULL COMMENT 'Tipo de documento de identidad',
  `NroDocIdentidad` varchar(20) NOT NULL COMMENT 'Número de documento de identidad',
  `NroLicenciaBrevete` varchar(20) NOT NULL COMMENT 'Número de licencia de conducir',
  `TelefonoAdicional1` varchar(20) NOT NULL COMMENT 'Número de teléfono adicional',
  `TelefonoAdicional2` varchar(20) NOT NULL COMMENT 'Número de teléfono adicional',
  `Sexo` char(10) NOT NULL COMMENT 'Sexo (Femenino/Masculino)',
  `TipoRegimenPensionar` varchar(50) NOT NULL COMMENT 'Tipo de régimen pensionar',
  `Activo` bit(1) NOT NULL COMMENT 'Bit que indica si se considerará en la nombrada(1 ) o no (0)',
  `UsuarioCreacion` int(11) NOT NULL COMMENT 'Código de usuario que creó el registro',
  `UsuarioActualización` int(11) NOT NULL COMMENT 'Código de usuario que actualizó el registro',
  `FechaCreacion` date NOT NULL COMMENT 'Fecha de creación del registro',
  `FechaActualizacion` date NOT NULL COMMENT 'Fecha de última actualización del registro',
  PRIMARY KEY (`CodTrabajadorPortuario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
