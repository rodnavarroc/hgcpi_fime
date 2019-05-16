-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generaci�n: 15-05-2019 a las 07:28:23
-- Versi�n del servidor: 10.1.28-MariaDB
-- Versi�n de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hgcpi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colaboradores_congresos`
--

CREATE TABLE `colaboradores_congresos` (
  `nombre_congreso` varchar(45) DEFAULT NULL,
  `nombre_colaborador` varchar(45) DEFAULT NULL,
  `primer_apellido_colaborador` varchar(45) DEFAULT NULL,
  `segundo_apellido_colaborador` varchar(45) DEFAULT NULL,
  `sexo_colaborador` varchar(45) DEFAULT NULL,
  `nivel_escolaridad_colaborador` varchar(45) DEFAULT NULL,
  `nacionalidad_colaborador` varchar(45) DEFAULT NULL,
  `institucion_adscripcion_colaborador` varchar(45) DEFAULT NULL,
  `area_conocimiento_colaborador` varchar(45) DEFAULT NULL,
  `campo_colaborador` varchar(45) DEFAULT NULL,
  `disciplina_colaborador` varchar(45) DEFAULT NULL,
  `subdisciplina_colaborador` varchar(45) DEFAULT NULL,
  `colaborador_pertenece_sni` varchar(45) DEFAULT NULL,
  `producto_generado_colaborador` varchar(45) DEFAULT NULL,
  `tiempo_horas_colaboracion_colaborador` varchar(45) DEFAULT NULL,
  `tipo_colaborador` varchar(45) DEFAULT NULL,
  `telefono_colaborador` varchar(45) DEFAULT NULL,
  `correo_colaborador` varchar(45) DEFAULT NULL,
  `movil_colaborador` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colaboradores_divulgacion`
--

CREATE TABLE `colaboradores_divulgacion` (
  `divulgacion_titulo` varchar(45) DEFAULT NULL,
  `nombre_colaborador` varchar(45) DEFAULT NULL,
  `primer_apellido_colaborador` varchar(45) DEFAULT NULL,
  `segundo_apellido_colaborador` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colaboradores_grupos_investigacion`
--

CREATE TABLE `colaboradores_grupos_investigacion` (
  `nombre_grupo` varchar(45) DEFAULT NULL,
  `nombre_colaborador` varchar(45) DEFAULT NULL,
  `primer_apellido_colaborador` varchar(45) DEFAULT NULL,
  `segundo_apellido_colaborador` varchar(45) DEFAULT NULL,
  `sexo_colaborador` varchar(45) DEFAULT NULL,
  `nivel_escolaridad_colaborador` varchar(45) DEFAULT NULL,
  `nacionalidad_colaborador` varchar(45) DEFAULT NULL,
  `institucion_adscripcion_colaborador` varchar(45) DEFAULT NULL,
  `area_conocimiento_colaborador` varchar(45) DEFAULT NULL,
  `campo_colaborador` varchar(45) DEFAULT NULL,
  `disciplina_colaborador` varchar(45) DEFAULT NULL,
  `subdisciplina_colaborador` varchar(45) DEFAULT NULL,
  `colaborador_pertenece_sni` varchar(45) DEFAULT NULL,
  `producto_generado_colaborador` varchar(45) DEFAULT NULL,
  `tiempo_horas_colaboracion_colaborador` varchar(45) DEFAULT NULL,
  `tipo_colaborador` varchar(45) DEFAULT NULL,
  `telefono_colaborador` varchar(45) DEFAULT NULL,
  `correo_colaborador` varchar(45) DEFAULT NULL,
  `movil_colaborador` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prod`
--

CREATE TABLE `colaboradores_prod_articulos` (
  `nombre_art` varchar(45) DEFAULT NULL,
  `nombre_colaborador` varchar(45) DEFAULT NULL,
  `primer_apellido_colaborador` varchar(45) DEFAULT NULL,
  `segundo_apellido_colaborador` varchar(45) DEFAULT NULL,
  `origen_autor_colaborador` varchar(45) DEFAULT NULL,
  `acciones_colaborador` varchar(45) DEFAULT NULL,
  `area_colaborador` varchar(45) DEFAULT NULL,
  `campo_colaborador` varchar(45) DEFAULT NULL,
  `disciplina_colaborador` varchar(45) DEFAULT NULL,
  `subdisciplina_colaborador` varchar(45) DEFAULT NULL,
  `identificador_colaborador` varchar(45) DEFAULT NULL,
  `orcid_colaborador` varchar(45) DEFAULT NULL,
  `researcher_id_colaborador` varchar(45) DEFAULT NULL,
  `arxiv_id_colaborador` varchar(45) DEFAULT NULL,
  `pubmed_id_colaborador` varchar(45) DEFAULT NULL,
  `comision_cv_ca` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colaboradores_redes_investigacion`
--

CREATE TABLE `colaboradores_redes_investigacion` (
  `nombre_red` varchar(45) DEFAULT NULL,
  `nombre_colaborador` varchar(45) DEFAULT NULL,
  `primer_apellido_colaborador` varchar(45) DEFAULT NULL,
  `segundo_apellido_colaborador` varchar(45) DEFAULT NULL,
  `sexo_colaborador` varchar(45) DEFAULT NULL,
  `nivel_escolaridad_colaborador` varchar(45) DEFAULT NULL,
  `nacionalidad_colaborador` varchar(45) DEFAULT NULL,
  `institucion_adscripcion_colaborador` varchar(45) DEFAULT NULL,
  `area_conocimiento_colaborador` varchar(45) DEFAULT NULL,
  `campo_colaborador` varchar(45) DEFAULT NULL,
  `disciplina_colaborador` varchar(45) DEFAULT NULL,
  `subdisciplina_colaborador` varchar(45) DEFAULT NULL,
  `colaborador_pertenece_sni` varchar(45) DEFAULT NULL,
  `producto_generado_colaborador` varchar(45) DEFAULT NULL,
  `tiempo_horas_colaboracion_colaborador` varchar(45) DEFAULT NULL,
  `tipo_colaborador` varchar(45) DEFAULT NULL,
  `telefono_colaborador` varchar(45) DEFAULT NULL,
  `correo_colaborador` varchar(45) DEFAULT NULL,
  `movil_colaborador` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colaboradores_redes_tematicas`
--

CREATE TABLE `colaboradores_redes_tematicas` (
  `red_tematica_conacyt` varchar(45) DEFAULT NULL,
  `nombre_colaborador` varchar(45) DEFAULT NULL,
  `primer_apellido_colaborador` varchar(45) DEFAULT NULL,
  `segundo_apellido_colaborador` varchar(45) DEFAULT NULL,
  `sexo_colaborador` varchar(45) DEFAULT NULL,
  `nivel_escolaridad_colaborador` varchar(45) DEFAULT NULL,
  `nacionalidad_colaborador` varchar(45) DEFAULT NULL,
  `institucion_adscripcion_colaborador` varchar(45) DEFAULT NULL,
  `area_conocimiento_colaborador` varchar(45) DEFAULT NULL,
  `campo_colaborador` varchar(45) DEFAULT NULL,
  `disciplina_colaborador` varchar(45) DEFAULT NULL,
  `subdisciplina_colaborador` varchar(45) DEFAULT NULL,
  `colaborador_pertenece_sni` varchar(45) DEFAULT NULL,
  `producto_generado_colaborador` varchar(45) DEFAULT NULL,
  `tiempo_horas_colaboracion_colaborador` varchar(45) DEFAULT NULL,
  `tipo_colaborador` varchar(45) DEFAULT NULL,
  `telefono_colaborador` varchar(45) DEFAULT NULL,
  `correo_colaborador` varchar(45) DEFAULT NULL,
  `movil_colaborador` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convocatorias`
--

CREATE TABLE `convocatorias` (
  `nombre` varchar(200) NOT NULL,
  `fecha_cierre` date DEFAULT NULL,
  `estatus` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `convocatorias`
--

INSERT INTO `convocatorias` (`nombre`, `fecha_cierre`, `estatus`) VALUES
('Estimulos', '2019-02-12', 'Activa'),
('PRODEP', '2019-02-12', 'Activa'),
('SNI', '2019-02-12', 'Activa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_actualizacion_pe`
--

CREATE TABLE `detalle_usuario_actualizacion_pe` (
  `nombre_pe` varchar(45) DEFAULT NULL,
  `fecha_implementacion_cambio` date DEFAULT NULL,
  `en_que_consiste_actualizacion` varchar(500) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_beneficios_externos_promep`
--

CREATE TABLE `detalle_usuario_beneficios_externos_promep` (
  `tipo_apoyo` varchar(100) DEFAULT NULL,
  `nivel` varchar(100) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `monto` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_beneficios_promep`
--

CREATE TABLE `detalle_usuario_beneficios_promep` (
  `ies_solicitud` varchar(100) DEFAULT NULL,
  `solicitud` varchar(300) DEFAULT NULL,
  `vigencia` date DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_carga_academica`
--

CREATE TABLE `detalle_usuario_carga_academica` (
  `dependencia` varchar(200) DEFAULT NULL,
  `nivel` varchar(200) DEFAULT NULL,
  `grado` varchar(200) DEFAULT NULL,
  `materia` varchar(200) DEFAULT NULL,
  `num_grupos` varchar(45) DEFAULT NULL,
  `num_horas_semana` varchar(45) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_usuario_carga_academica`
--

INSERT INTO `detalle_usuario_carga_academica` (`dependencia`, `nivel`, `grado`, `materia`, `num_grupos`, `num_horas_semana`, `fecha_inicio`, `fecha_fin`, `usuario_idusuario`, `id`) VALUES
('FIME', 'Profesional', 'Licenciatura', 'Programacion Orientada a Objetos', '6', '3', '2019-05-30', '2019-05-24', 1815906, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_cuerpo_academico`
--

CREATE TABLE `detalle_usuario_cuerpo_academico` (
  `cuerpo_academico_clave` varchar(100) DEFAULT NULL,
  `nombre_cuerpo_academico` varchar(200) DEFAULT NULL,
  `grado_consolacion` varchar(100) DEFAULT NULL,
  `linea_cultiva_cuerpo_academico` varchar(100) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_desarollos_tecnologicos`
--

CREATE TABLE `detalle_usuario_desarollos_tecnologicos` (
  `tipo_desarrollo` varchar(100) DEFAULT NULL,
  `nombre_desarrollo` varchar(100) DEFAULT NULL,
  `documento_respaldo` varchar(100) DEFAULT NULL,
  `objetivos` varchar(300) DEFAULT NULL,
  `resumen` varchar(300) DEFAULT NULL,
  `recibio_apoyo_conacyt` varchar(45) DEFAULT NULL,
  `sector_industrial_scian` varchar(45) DEFAULT NULL,
  `subrama_scian` varchar(45) DEFAULT NULL,
  `subsector_scian` varchar(45) DEFAULT NULL,
  `rama_scian` varchar(45) DEFAULT NULL,
  `clase_scian` varchar(45) DEFAULT NULL,
  `sector_industrial_ocde` varchar(45) DEFAULT NULL,
  `division_ocde` varchar(45) DEFAULT NULL,
  `grupo_ocde` varchar(45) DEFAULT NULL,
  `clase_ocde` varchar(45) DEFAULT NULL,
  `campo_conocimiento_desarrollo` varchar(100) DEFAULT NULL,
  `area_conocimiento_desarrollo` varchar(100) DEFAULT NULL,
  `disciplina_desarrollo` varchar(100) DEFAULT NULL,
  `subdisciplina_desarrollo` varchar(100) DEFAULT NULL,
  `generacion_de_valor` varchar(100) DEFAULT NULL,
  `formacion_de_recursos` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_desarrollo_software`
--

CREATE TABLE `detalle_usuario_desarrollo_software` (
  `tipo_desarrollo` varchar(200) DEFAULT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `derechos_autor` varchar(200) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `horas_hombre` varchar(45) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `costo` varchar(45) DEFAULT NULL,
  `beneficiario` varchar(200) DEFAULT NULL,
  `objetivo` varchar(500) DEFAULT NULL,
  `resumen` varchar(500) DEFAULT NULL,
  `contribucion` varchar(500) DEFAULT NULL,
  `generacion_de_valor` varchar(500) DEFAULT NULL,
  `formacion_rh` varchar(500) DEFAULT NULL,
  `recibio_apoyo_conacyt` varchar(45) DEFAULT NULL,
  `logros` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_direccion_individualizada`
--

CREATE TABLE `detalle_usuario_direccion_individualizada` (
  `tipo_de_direccion` varchar(45) DEFAULT NULL,
  `titulo_proyecto_dirigido` varchar(45) DEFAULT NULL,
  `estado_de_direccion` varchar(45) DEFAULT NULL,
  `fecha_de_inicio` date DEFAULT NULL,
  `fecha_de_fin` date DEFAULT NULL,
  `nivel_academico` varchar(45) DEFAULT NULL,
  `grado_academico` varchar(45) DEFAULT NULL,
  `considera_cv_ca` varchar(45) DEFAULT NULL,
  `numero_estudiantes` varchar(45) DEFAULT NULL,
  `ies_realiza_gestion` varchar(100) DEFAULT NULL,
  `considerar_curriculum` varchar(45) DEFAULT NULL,
  `miembros` varchar(100) DEFAULT NULL,
  `lgacs` varchar(100) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_usuario_direccion_individualizada`
--

INSERT INTO `detalle_usuario_direccion_individualizada` (`tipo_de_direccion`, `titulo_proyecto_dirigido`, `estado_de_direccion`, `fecha_de_inicio`, `fecha_de_fin`, `nivel_academico`, `grado_academico`, `considera_cv_ca`, `numero_estudiantes`, `ies_realiza_gestion`, `considerar_curriculum`, `miembros`, `lgacs`, `usuario_idusuario`, `id`) VALUES
('Direccion estrategica', 'Proyecto de investigacion', 'Concluida', '2019-05-10', '2019-05-24', 'Profesional', 'Licenciatura', 'Si', '36', 'FIME', NULL, NULL, NULL, 1815906, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_distinciones_conacyt`
--

CREATE TABLE `detalle_usuario_distinciones_conacyt` (
  `nombre_dist` varchar(300) DEFAULT NULL,
  `ano` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_distinciones_no_conacyt`
--

CREATE TABLE `detalle_usuario_distinciones_no_conacyt` (
  `nombre_dist` varchar(200) DEFAULT NULL,
  `institucion_otorga` varchar(200) DEFAULT NULL,
  `ano` varchar(45) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_divulgacion`
--

CREATE TABLE `detalle_usuario_divulgacion` (
  `divulgacion_titulo` varchar(200) DEFAULT NULL,
  `tipo_participacion` varchar(200) DEFAULT NULL,
  `tipo_evento` varchar(200) DEFAULT NULL,
  `institucion_organizadora` varchar(200) DEFAULT NULL,
  `dirigido_a` varchar(200) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `tipo_de_medio` varchar(200) DEFAULT NULL,
  `palabras_clave` varchar(200) DEFAULT NULL,
  `notas_periodisticas` varchar(200) DEFAULT NULL,
  `producto_obtenido` varchar(200) DEFAULT NULL,
  `area_conocimiento_divulgacion` varchar(45) DEFAULT NULL,
  `campo_divulgacion` varchar(45) DEFAULT NULL,
  `disciplina_divulgacion` varchar(45) DEFAULT NULL,
  `subdisciplina_divulgacion` varchar(45) DEFAULT NULL,
  `sector_industrial_scian` varchar(45) DEFAULT NULL,
  `subrama_scian` varchar(45) DEFAULT NULL,
  `subsector_scian` varchar(45) DEFAULT NULL,
  `rama_scian` varchar(45) DEFAULT NULL,
  `clase_scian` varchar(45) DEFAULT NULL,
  `sector_industrial_ocde` varchar(45) DEFAULT NULL,
  `division_ocde` varchar(45) DEFAULT NULL,
  `grupo_ocde` varchar(45) DEFAULT NULL,
  `clase_ocde` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_docencia`
--

CREATE TABLE `detalle_usuario_docencia` (
  `dependencia` varchar(100) DEFAULT NULL,
  `nombre_programa_educativo` varchar(100) DEFAULT NULL,
  `nombre_curso` varchar(100) DEFAULT NULL,
  `nivel` varchar(100) DEFAULT NULL,
  `nombre_institucion_ies` varchar(100) DEFAULT NULL,
  `tipo_institucion` varchar(100) DEFAULT NULL,
  `institucion_publica_privada` varchar(45) DEFAULT NULL,
  `pais_institucion` varchar(45) DEFAULT NULL,
  `clasificacion_institucion` varchar(45) DEFAULT NULL,
  `nivel_curso` varchar(45) DEFAULT NULL,
  `numero_alumnos` varchar(45) DEFAULT NULL,
  `horas_totales_curso` varchar(45) DEFAULT NULL,
  `duracion_semanas` varchar(45) DEFAULT NULL,
  `horas_asesoria_mes` varchar(45) DEFAULT NULL,
  `horas_semanales_curso` varchar(45) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_documentos_de_trabajo`
--

CREATE TABLE `detalle_usuario_documentos_de_trabajo` (
  `titulo_documento` varchar(100) NOT NULL,
  `titulo_obra` varchar(100) DEFAULT NULL,
  `titulo_publicacion` varchar(100) DEFAULT NULL,
  `de_pagina` varchar(45) DEFAULT NULL,
  `a_pagina` varchar(45) DEFAULT NULL,
  `ano_publicacion` varchar(45) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `palabras_clave` varchar(300) DEFAULT NULL,
  `area_conocimiento_doc` varchar(100) DEFAULT NULL,
  `campo_doc` varchar(100) DEFAULT NULL,
  `disciplina_doc` varchar(100) DEFAULT NULL,
  `subdisciplina_doc` varchar(100) DEFAULT NULL,
  `researcher_id_autor` varchar(45) DEFAULT NULL,
  `arxiv_id_autor` varchar(45) DEFAULT NULL,
  `pubmed_id_autor` varchar(45) DEFAULT NULL,
  `open_id_autor` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_estancias_investigacion`
--

CREATE TABLE `detalle_usuario_estancias_investigacion` (
  `tipo_estancia` varchar(100) DEFAULT NULL,
  `nombre_institucion` varchar(100) DEFAULT NULL,
  `nombre_estancia` varchar(100) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `area_conocimiento_estancia` varchar(100) DEFAULT NULL,
  `campo_estancia` varchar(100) DEFAULT NULL,
  `disciplina_estancia` varchar(100) DEFAULT NULL,
  `subdisciplina_estancia` varchar(100) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_evaluaciones_conacyt`
--

CREATE TABLE `detalle_usuario_evaluaciones_conacyt` (
  `nombre_del_fondo` varchar(45) DEFAULT NULL,
  `fecha_asignacion` date DEFAULT NULL,
  `fecha_aceptacion` date DEFAULT NULL,
  `fecha_evaluacion` date DEFAULT NULL,
  `dictamen` varchar(300) DEFAULT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `area_conocimiento_ev` varchar(45) DEFAULT NULL,
  `campo_ev` varchar(45) DEFAULT NULL,
  `disciplina_ev` varchar(45) DEFAULT NULL,
  `subdisciplina_ev` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_evaluaciones_no_conacyt`
--

CREATE TABLE `detalle_usuario_evaluaciones_no_conacyt` (
  `tipo_evaluacion` varchar(300) DEFAULT NULL,
  `nombre_institucion` varchar(300) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `cargo_desempenado` varchar(300) DEFAULT NULL,
  `producto_evaluado` varchar(300) DEFAULT NULL,
  `nombre_producto_evaluado` varchar(300) DEFAULT NULL,
  `dictamen` varchar(300) DEFAULT NULL,
  `descripcion_actividad` varchar(500) DEFAULT NULL,
  `area_conocimiento_ev_no` varchar(45) DEFAULT NULL,
  `campo_ev_no` varchar(45) DEFAULT NULL,
  `disciplina_ev_no` varchar(45) DEFAULT NULL,
  `subdisciplina_ev_no` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_experiencia_laboral`
--

CREATE TABLE `detalle_usuario_experiencia_laboral` (
  `empleo_actual` varchar(45) DEFAULT NULL,
  `nivel_estudios` varchar(45) DEFAULT NULL,
  `puesto` varchar(45) DEFAULT NULL,
  `institucion` varchar(100) DEFAULT NULL,
  `dependencia` varchar(100) DEFAULT NULL,
  `unidad_academica` varchar(100) DEFAULT NULL,
  `tipo_nombramiento` varchar(100) DEFAULT NULL,
  `asociado_a` varchar(100) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `logros` varchar(45) DEFAULT NULL,
  `cronologia` varchar(45) DEFAULT NULL,
  `area_conocimiento_puesto` varchar(100) DEFAULT NULL,
  `campo_puesto` varchar(100) DEFAULT NULL,
  `disciplina_puesto` varchar(100) DEFAULT NULL,
  `subdisciplina_puesto` varchar(100) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_gestion_academica`
--

CREATE TABLE `detalle_usuario_gestion_academica` (
  `tipo_gestion` varchar(45) DEFAULT NULL,
  `cargo_comision` varchar(200) DEFAULT NULL,
  `funcion_encomendada` varchar(200) DEFAULT NULL,
  `organo_colegiado` varchar(200) DEFAULT NULL,
  `resultados_obtenidos` varchar(500) DEFAULT NULL,
  `aprobado` varchar(45) DEFAULT NULL,
  `calificacion` varchar(45) DEFAULT NULL,
  `evento` varchar(45) DEFAULT NULL,
  `tipo_evento` varchar(45) DEFAULT NULL,
  `tipo_participacion` varchar(45) DEFAULT NULL,
  `tipo_alcance` varchar(45) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `fecha_ultimo_informe` date DEFAULT NULL,
  `horas_dedicadas_semana` varchar(45) DEFAULT NULL,
  `estado_gestion` varchar(45) DEFAULT NULL,
  `ies_realiza_gestion` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_usuario_gestion_academica`
--

INSERT INTO `detalle_usuario_gestion_academica` (`tipo_gestion`, `cargo_comision`, `funcion_encomendada`, `organo_colegiado`, `resultados_obtenidos`, `aprobado`, `calificacion`, `evento`, `tipo_evento`, `tipo_participacion`, `tipo_alcance`, `fecha_inicio`, `fecha_fin`, `fecha_ultimo_informe`, `horas_dedicadas_semana`, `estado_gestion`, `ies_realiza_gestion`, `usuario_idusuario`, `id`) VALUES
('Gestion academica', NULL, NULL, NULL, NULL, NULL, '100', 'Coloquio', 'Vinculacion', 'Expositor', 'Largo', '2019-05-17', '2019-05-17', NULL, NULL, 'Finalizada', 'FIME', 1815906, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_gestion_cuerpos_colegiados`
--

CREATE TABLE `detalle_usuario_gestion_cuerpos_colegiados` (
  `tipo_gestion` varchar(200) DEFAULT NULL,
  `clasificacion` varchar(200) DEFAULT NULL,
  `funcion_encomendada` varchar(200) DEFAULT NULL,
  `organo_colegiado` varchar(200) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `fecha_ultimo_reporte` date DEFAULT NULL,
  `aprobado` varchar(45) DEFAULT NULL,
  `horas_semana` varchar(45) DEFAULT NULL,
  `resultado_obtenido` varchar(45) DEFAULT NULL,
  `estado_gestion` varchar(45) DEFAULT NULL,
  `ies_realiza_gestion` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_usuario_gestion_cuerpos_colegiados`
--

INSERT INTO `detalle_usuario_gestion_cuerpos_colegiados` (`tipo_gestion`, `clasificacion`, `funcion_encomendada`, `organo_colegiado`, `fecha_inicio`, `fecha_fin`, `fecha_ultimo_reporte`, `aprobado`, `horas_semana`, `resultado_obtenido`, `estado_gestion`, `ies_realiza_gestion`, `usuario_idusuario`, `id`) VALUES
('Gestion academica', 'Proyecto', 'Creador', 'Ninguno', '2019-05-11', '2019-05-11', '2019-05-17', 'Si', '12', 'Resultado exitoso', 'Terminada', 'FIME', 1815906, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_grados_acad`
--

CREATE TABLE `detalle_usuario_grados_acad` (
  `tipo_capacitacion` varchar(45) DEFAULT NULL,
  `nivel_estudios` varchar(45) DEFAULT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `estatus` varchar(45) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `numero_de_horas` varchar(45) DEFAULT NULL,
  `opciones_de_titulacion` varchar(200) DEFAULT NULL,
  `fecha_obtencion_titulo` date DEFAULT NULL,
  `nombre_institucion` varchar(45) DEFAULT NULL,
  `tipo_institucion` varchar(45) DEFAULT NULL,
  `institucion_publica_privada` varchar(45) DEFAULT NULL,
  `pais_institucion` varchar(45) DEFAULT NULL,
  `clasificacion_institucion` varchar(200) DEFAULT NULL,
  `tipo_formacion_continua` varchar(200) DEFAULT NULL,
  `nombre_formacion_continua` varchar(200) DEFAULT NULL,
  `ano_formacion_continua` varchar(45) DEFAULT NULL,
  `institucion_formacion_continua` varchar(200) DEFAULT NULL,
  `horas_totales_formacion_continua` varchar(45) DEFAULT NULL,
  `disciplina` varchar(200) DEFAULT NULL,
  `area_de_conocimiento_formacion_continua` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_usuario_grados_acad`
--

INSERT INTO `detalle_usuario_grados_acad` (`tipo_capacitacion`, `nivel_estudios`, `titulo`, `descripcion`, `estatus`, `fecha_inicio`, `fecha_fin`, `numero_de_horas`, `opciones_de_titulacion`, `fecha_obtencion_titulo`, `nombre_institucion`, `tipo_institucion`, `institucion_publica_privada`, `pais_institucion`, `clasificacion_institucion`, `tipo_formacion_continua`, `nombre_formacion_continua`, `ano_formacion_continua`, `institucion_formacion_continua`, `horas_totales_formacion_continua`, `disciplina`, `area_de_conocimiento_formacion_continua`, `usuario_idusuario`, `id`) VALUES
('Capacitacion', NULL, '2', 'Capacitacion de ejemplo para el sistema', 'Creditos terminados', '2019-05-17', '2019-05-10', '1', '2', '2019-05-09', 'FIME', 'Nacional', 'Pública', 'Austria', 'Centro de Investigacion Privado', '1', '1', '1999', '1', '18', NULL, '1', 1815906, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_grupos_investigacion`
--

CREATE TABLE `detalle_usuario_grupos_investigacion` (
  `nombre_grupo` varchar(200) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `nombre_lider` varchar(200) DEFAULT NULL,
  `primer_apellido_lider` varchar(200) DEFAULT NULL,
  `segundo_apellido_lider` varchar(200) DEFAULT NULL,
  `institucion_adscripcion_lider` varchar(200) DEFAULT NULL,
  `total_investigadores` varchar(45) DEFAULT NULL,
  `impacto` varchar(300) DEFAULT NULL,
  `colaboracion` varchar(300) DEFAULT NULL,
  `area_conocimiento_grupo` varchar(45) DEFAULT NULL,
  `campo_grupo` varchar(45) DEFAULT NULL,
  `disciplina_grupo` varchar(45) DEFAULT NULL,
  `subdisciplina_grupo` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_innovacion`
--

CREATE TABLE `detalle_usuario_innovacion` (
  `innovacion_oslo` varchar(45) DEFAULT NULL,
  `tipo_innovacion` varchar(45) DEFAULT NULL,
  `aplicacion` varchar(200) DEFAULT NULL,
  `potencial_cobertura` varchar(200) DEFAULT NULL,
  `mecanismo_proteccion_propiedad_intelectual` varchar(200) DEFAULT NULL,
  `recibio_apoyo_conacyt` varchar(45) DEFAULT NULL,
  `sector_industrial_scian` varchar(45) DEFAULT NULL,
  `subrama_scian` varchar(45) DEFAULT NULL,
  `subsector_scian` varchar(45) DEFAULT NULL,
  `rama_scian` varchar(45) DEFAULT NULL,
  `clase_scian` varchar(45) DEFAULT NULL,
  `sector_industrial_ocde` varchar(45) DEFAULT NULL,
  `division_ocde` varchar(45) DEFAULT NULL,
  `grupo_ocde` varchar(45) DEFAULT NULL,
  `clase_ocde` varchar(45) DEFAULT NULL,
  `area_conocimiento_inn` varchar(45) DEFAULT NULL,
  `campo_inn` varchar(45) DEFAULT NULL,
  `disciplina_inn` varchar(45) DEFAULT NULL,
  `subdisciplina_inn` varchar(45) DEFAULT NULL,
  `monto_venta_anuales` varchar(45) DEFAULT NULL,
  `volumen_prod_anuales` varchar(45) DEFAULT NULL,
  `no_empleos_directos_anuales` varchar(45) DEFAULT NULL,
  `no_empleos_indirectos_anuales` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_lenguas_e_idiomas`
--

CREATE TABLE `detalle_usuario_lenguas_e_idiomas` (
  `idioma` varchar(45) DEFAULT NULL,
  `institucion_que_otorga` varchar(45) DEFAULT NULL,
  `grado_de_dominio` varchar(45) DEFAULT NULL,
  `nivel_de_escritura` varchar(45) DEFAULT NULL,
  `documento_probatorio` varchar(45) DEFAULT NULL,
  `puntos` varchar(45) DEFAULT NULL,
  `certificacion` varchar(100) DEFAULT NULL,
  `nivel_conferido` varchar(45) DEFAULT NULL,
  `nivel_lectura` varchar(45) DEFAULT NULL,
  `fecha_evaluacion` date DEFAULT NULL,
  `vigencia_de` date DEFAULT NULL,
  `vigencia_a` date DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_usuario_lenguas_e_idiomas`
--

INSERT INTO `detalle_usuario_lenguas_e_idiomas` (`idioma`, `institucion_que_otorga`, `grado_de_dominio`, `nivel_de_escritura`, `documento_probatorio`, `puntos`, `certificacion`, `nivel_conferido`, `nivel_lectura`, `fecha_evaluacion`, `vigencia_de`, `vigencia_a`, `usuario_idusuario`, `id`) VALUES
('Frances', 'Centro de Idiomas UANL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1815906, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_lgac`
--

CREATE TABLE `detalle_usuario_lgac` (
  `linea` varchar(100) DEFAULT NULL,
  `actividades_que_realiza` varchar(300) DEFAULT NULL,
  `horas_semana_dedicadas` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_memorias`
--

CREATE TABLE `detalle_usuario_memorias` (
  `proposito` varchar(45) DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `titulo_de_obra` varchar(100) DEFAULT NULL,
  `titulo_publicacion` varchar(100) DEFAULT NULL,
  `congreso_donde_se_presento` varchar(100) DEFAULT NULL,
  `de_pagina` varchar(45) DEFAULT NULL,
  `a_pagina` varchar(45) DEFAULT NULL,
  `ano_publicacion` varchar(45) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `ciudad` varchar(45) DEFAULT NULL,
  `palabras_clave` varchar(300) DEFAULT NULL,
  `estado_actual` varchar(45) DEFAULT NULL,
  `area_conocimiento_mem` varchar(100) DEFAULT NULL,
  `campo_mem` varchar(100) DEFAULT NULL,
  `disciplina_mem` varchar(100) DEFAULT NULL,
  `subdisciplina_mem` varchar(100) DEFAULT NULL,
  `considerar_curriculum` varchar(45) DEFAULT NULL,
  `miembros` varchar(100) DEFAULT NULL,
  `lgacs` varchar(100) DEFAULT NULL,
  `researcher_id_autor` varchar(45) DEFAULT NULL,
  `arxiv_id_autor` varchar(45) DEFAULT NULL,
  `pubmed_id_autor` varchar(45) DEFAULT NULL,
  `open_id_autor` varchar(45) DEFAULT NULL,
  `autores_colaboradores` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_participacion_congresos`
--

CREATE TABLE `detalle_usuario_participacion_congresos` (
  `tipo_participacion` varchar(45) DEFAULT NULL,
  `nombre_congreso` varchar(200) DEFAULT NULL,
  `titulo_trabajo` varchar(200) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `fecha` varchar(45) DEFAULT NULL,
  `palabras_clave` varchar(200) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_patentes`
--

CREATE TABLE `detalle_usuario_patentes` (
  `tipo_patente` varchar(200) DEFAULT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `numero_tramite` varchar(45) DEFAULT NULL,
  `fecha_solicitud` date DEFAULT NULL,
  `fecha_registro` date DEFAULT NULL,
  `expediente` varchar(45) DEFAULT NULL,
  `clasificacion_internacional` varchar(45) DEFAULT NULL,
  `resumen` varchar(45) DEFAULT NULL,
  `explotacion_industrial` varchar(45) DEFAULT NULL,
  `ano_publicacion` varchar(45) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `ano_edicion` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_premios_y_distinciones`
--

CREATE TABLE `detalle_usuario_premios_y_distinciones` (
  `tipo_distincion` varchar(45) DEFAULT NULL,
  `nivel` varchar(45) DEFAULT NULL,
  `nombre_distincion` varchar(200) DEFAULT NULL,
  `institucion_que_otorga` varchar(200) DEFAULT NULL,
  `tipo_institucion` varchar(200) DEFAULT NULL,
  `institucion_publica_privada` varchar(45) DEFAULT NULL,
  `motivo` varchar(45) DEFAULT NULL,
  `institucion_otorgante_no_considerada` varchar(200) DEFAULT NULL,
  `pais_institucion` varchar(45) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `ano` varchar(45) DEFAULT NULL,
  `monto_mensual` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_usuario_premios_y_distinciones`
--

INSERT INTO `detalle_usuario_premios_y_distinciones` (`tipo_distincion`, `nivel`, `nombre_distincion`, `institucion_que_otorga`, `tipo_institucion`, `institucion_publica_privada`, `motivo`, `institucion_otorgante_no_considerada`, `pais_institucion`, `fecha`, `ano`, `monto_mensual`, `usuario_idusuario`, `id`) VALUES
('Programa Reparticion CONACYT', 'Sistema Nacional de Creadores', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2009', '17500', 1815906, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_produccion_capitulos`
--

CREATE TABLE `detalle_usuario_produccion_capitulos` (
  `titulo` varchar(100) DEFAULT NULL,
  `isbn` varchar(45) DEFAULT NULL,
  `editorial` varchar(100) DEFAULT NULL,
  `numero_edicion` varchar(45) DEFAULT NULL,
  `ano_edicion` varchar(45) DEFAULT NULL,
  `titulo_capitulo` varchar(100) DEFAULT NULL,
  `numero_capitulo` varchar(45) DEFAULT NULL,
  `de_pagina` varchar(45) DEFAULT NULL,
  `a_pagina` varchar(45) DEFAULT NULL,
  `resumen` varchar(500) DEFAULT NULL,
  `area_conocimiento_cap` varchar(100) DEFAULT NULL,
  `campo_cap` varchar(100) DEFAULT NULL,
  `disciplina_cap` varchar(100) DEFAULT NULL,
  `subdisciplina_cap` varchar(100) DEFAULT NULL,
  `researcher_id_autor` varchar(100) DEFAULT NULL,
  `arxiv_id_autor` varchar(45) DEFAULT NULL,
  `pubmed_id_autor` varchar(45) DEFAULT NULL,
  `open_id_autor` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_produccion_libros`
--

CREATE TABLE `detalle_usuario_produccion_libros` (
  `proposito` varchar(100) DEFAULT NULL,
  `isbn` varchar(45) DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `tipo_participacion` varchar(100) DEFAULT NULL,
  `estado_actual` varchar(100) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `idioma` varchar(45) DEFAULT NULL,
  `ano_publicacion` varchar(45) DEFAULT NULL,
  `volumen` varchar(45) DEFAULT NULL,
  `tomo` varchar(45) DEFAULT NULL,
  `tiraje` varchar(45) DEFAULT NULL,
  `numero_paginas` varchar(45) DEFAULT NULL,
  `palabras_clave` varchar(45) DEFAULT NULL,
  `editorial` varchar(100) DEFAULT NULL,
  `edicion` varchar(45) DEFAULT NULL,
  `lugar_edicion` varchar(45) DEFAULT NULL,
  `ano_edicion` varchar(45) DEFAULT NULL,
  `total_ejemplares` varchar(45) DEFAULT NULL,
  `area_conocimiento_libro` varchar(100) DEFAULT NULL,
  `campo_libro` varchar(100) DEFAULT NULL,
  `disciplina_libro` varchar(100) DEFAULT NULL,
  `subdisciplina_libro` varchar(100) DEFAULT NULL,
  `considerar_curriculum` varchar(45) DEFAULT NULL,
  `miembros` varchar(100) DEFAULT NULL,
  `autores` varchar(100) DEFAULT NULL,
  `lgacs` varchar(100) DEFAULT NULL,
  `researcher_id_autor` varchar(45) DEFAULT NULL,
  `arxiv_id_autor` varchar(45) DEFAULT NULL,
  `pubmed_id_autor` varchar(45) DEFAULT NULL,
  `open_id_autor` varchar(45) DEFAULT NULL,
  `tipo_autor` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_usuario_produccion_libros`
--

INSERT INTO `detalle_usuario_produccion_libros` (`proposito`, `isbn`, `titulo`, `tipo_participacion`, `estado_actual`, `pais`, `idioma`, `ano_publicacion`, `volumen`, `tomo`, `tiraje`, `numero_paginas`, `palabras_clave`, `editorial`, `edicion`, `lugar_edicion`, `ano_edicion`, `total_ejemplares`, `area_conocimiento_libro`, `campo_libro`, `disciplina_libro`, `subdisciplina_libro`, `considerar_curriculum`, `miembros`, `autores`, `lgacs`, `researcher_id_autor`, `arxiv_id_autor`, `pubmed_id_autor`, `open_id_autor`, `tipo_autor`, `usuario_idusuario`, `id`) VALUES
(NULL, NULL, 'El origen de la vida', 'Autor', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1815906, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_prod_articulos`
--

CREATE TABLE `detalle_usuario_prod_articulos` (
  `proposito` varchar(100) DEFAULT NULL,
  `issn` varchar(45) DEFAULT NULL,
  `nombre_art` varchar(100) DEFAULT NULL,
  `estado_art` varchar(45) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `nombre_revista` varchar(100) DEFAULT NULL,
  `numero_revista` varchar(45) DEFAULT NULL,
  `editorial` varchar(100) DEFAULT NULL,
  `volumen_revista` varchar(45) DEFAULT NULL,
  `ano_edicion` varchar(45) DEFAULT NULL,
  `ano_publicacion` varchar(45) DEFAULT NULL,
  `pagina_inicial` varchar(45) DEFAULT NULL,
  `pagina_final` varchar(45) DEFAULT NULL,
  `palabras_clave` varchar(200) DEFAULT NULL,
  `apoyo_conacyt` varchar(45) DEFAULT NULL,
  `fondo` varchar(45) DEFAULT NULL,
  `considerar_curriculum` varchar(45) DEFAULT NULL,
  `miembros` varchar(200) DEFAULT NULL,
  `autores` varchar(200) DEFAULT NULL,
  `lgacs` varchar(200) DEFAULT NULL,
  `researcher_id_autor` varchar(45) DEFAULT NULL,
  `arxiv_id_autor` varchar(45) DEFAULT NULL,
  `pubmed_id_autor` varchar(45) DEFAULT NULL,
  `open_id_autor` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_usuario_prod_articulos`
--

INSERT INTO `detalle_usuario_prod_articulos` (`proposito`, `issn`, `nombre_art`, `estado_art`, `pais`, `nombre_revista`, `numero_revista`, `editorial`, `volumen_revista`, `ano_edicion`, `ano_publicacion`, `pagina_inicial`, `pagina_final`, `palabras_clave`, `apoyo_conacyt`, `fondo`, `considerar_curriculum`, `miembros`, `autores`, `lgacs`, `researcher_id_autor`, `arxiv_id_autor`, `pubmed_id_autor`, `open_id_autor`, `usuario_idusuario`, `id`) VALUES
(NULL, '1234-1234-1234-1234', 'Estudio del agua', 'Terminado', 'Mexico', 'Revista UANL', NULL, NULL, NULL, NULL, NULL, '120', '134', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1815906, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_prod_proyectos_academicos`
--

CREATE TABLE `detalle_usuario_prod_proyectos_academicos` (
  `tipo_proyecto` varchar(45) DEFAULT NULL,
  `nombre_proyecto` varchar(100) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `institucion` varchar(45) DEFAULT NULL,
  `area_conocimiento_proyecto` varchar(100) DEFAULT NULL,
  `campo_proyecto` varchar(100) DEFAULT NULL,
  `disciplina_proyecto` varchar(100) DEFAULT NULL,
  `subdisciplina_proyecto` varchar(100) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_proyectos_investigacion`
--

CREATE TABLE `detalle_usuario_proyectos_investigacion` (
  `titulo` varchar(200) DEFAULT NULL,
  `nombre_patrocinador` varchar(200) DEFAULT NULL,
  `nombre_alumnos_participantes` varchar(200) DEFAULT NULL,
  `actividades_realizadas` varchar(200) DEFAULT NULL,
  `considerar_curriculum` varchar(45) DEFAULT NULL,
  `miembros` varchar(200) DEFAULT NULL,
  `lgacs` varchar(200) DEFAULT NULL,
  `fecha_inicio` varchar(45) DEFAULT NULL,
  `fecha_fin` varchar(45) DEFAULT NULL,
  `tipo_patrocinador` varchar(45) DEFAULT NULL,
  `investigadores_participantes` varchar(45) DEFAULT NULL,
  `tipo_proyecto` varchar(45) DEFAULT NULL,
  `tipo_participacion` varchar(45) DEFAULT NULL,
  `monto_apoyo` varchar(45) DEFAULT NULL,
  `considera_cv_ca` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_usuario_proyectos_investigacion`
--

INSERT INTO `detalle_usuario_proyectos_investigacion` (`titulo`, `nombre_patrocinador`, `nombre_alumnos_participantes`, `actividades_realizadas`, `considerar_curriculum`, `miembros`, `lgacs`, `fecha_inicio`, `fecha_fin`, `tipo_patrocinador`, `investigadores_participantes`, `tipo_proyecto`, `tipo_participacion`, `monto_apoyo`, `considera_cv_ca`, `usuario_idusuario`, `id`) VALUES
('Proyecto HGCPI', 'Juan Dominguez', NULL, NULL, NULL, NULL, NULL, '2019/05/02', '2019/05/11', 'Completo', 'Jose Flores, Rodolfo Navarro', 'Administrativo', 'Creador', '200000', NULL, 1815906, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_redes_investigacion`
--

CREATE TABLE `detalle_usuario_redes_investigacion` (
  `nombre_red` varchar(200) DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `nombre_responsable_red` varchar(200) DEFAULT NULL,
  `primer_apellido_responsable_red` varchar(200) DEFAULT NULL,
  `segundo_apellido_responsable_red` varchar(200) DEFAULT NULL,
  `institucion_responsable_red` varchar(200) DEFAULT NULL,
  `total_integrantes` varchar(45) DEFAULT NULL,
  `area_conocimiento_red` varchar(45) DEFAULT NULL,
  `campo_red` varchar(45) DEFAULT NULL,
  `disciplina_red` varchar(45) DEFAULT NULL,
  `subdisciplina_red` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_redes_tematicas_conacyt`
--

CREATE TABLE `detalle_usuario_redes_tematicas_conacyt` (
  `red_tematica_conacyt` varchar(45) DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_reportes_tecnicos`
--

CREATE TABLE `detalle_usuario_reportes_tecnicos` (
  `institucion` varchar(100) DEFAULT NULL,
  `fecha_publicacion` varchar(45) DEFAULT NULL,
  `numero_paginas` varchar(45) DEFAULT NULL,
  `origen_reporte` varchar(100) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `objetivos` varchar(500) DEFAULT NULL,
  `palabras_clave` varchar(200) DEFAULT NULL,
  `recibio_apoyo_conacyt` varchar(45) DEFAULT NULL,
  `area_conocimiento_reporte` varchar(100) DEFAULT NULL,
  `campo_reporte` varchar(100) DEFAULT NULL,
  `disciplina_reporte` varchar(100) DEFAULT NULL,
  `subdisciplina_reporte` varchar(100) DEFAULT NULL,
  `researcher_id_autor` varchar(45) DEFAULT NULL,
  `arxiv_id_autor` varchar(45) DEFAULT NULL,
  `pubmed_id_autor` varchar(45) DEFAULT NULL,
  `open_id_autor` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_servicios_prestados`
--

CREATE TABLE `detalle_usuario_servicios_prestados` (
  `tipo_servicio` varchar(200) DEFAULT NULL,
  `servicio_prestado` varchar(300) DEFAULT NULL,
  `institucion_solicitante` varchar(100) DEFAULT NULL,
  `fecha_servicio` date DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_usuario_servicios_prestados`
--

INSERT INTO `detalle_usuario_servicios_prestados` (`tipo_servicio`, `servicio_prestado`, `institucion_solicitante`, `fecha_servicio`, `usuario_idusuario`, `id`) VALUES
('Servicio completo', 'Limpieza', 'FIME', '2019-05-04', 1815906, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_tesis_diplomados`
--

CREATE TABLE `detalle_usuario_tesis_diplomados` (
  `institucion` varchar(100) DEFAULT NULL,
  `tipo_institucion` varchar(45) DEFAULT NULL,
  `institucion_publica_privada` varchar(45) DEFAULT NULL,
  `pais_institucion` varchar(45) DEFAULT NULL,
  `clasificacion_institucion` varchar(100) DEFAULT NULL,
  `programa_pnpc` varchar(100) DEFAULT NULL,
  `titulo_tesis` varchar(100) DEFAULT NULL,
  `estado_tesis` varchar(45) DEFAULT NULL,
  `fecha_aprobacion_tesis` date DEFAULT NULL,
  `fecha_obtencion_grado` date DEFAULT NULL,
  `area_conocimiento_tesis` varchar(100) DEFAULT NULL,
  `campo_conocimiento_tesis` varchar(100) DEFAULT NULL,
  `disciplina_conocimiento_tesis` varchar(100) DEFAULT NULL,
  `subdisciplina_conocimiento_tesis` varchar(100) DEFAULT NULL,
  `pais_tesis` varchar(45) DEFAULT NULL,
  `grado_academico_tesis` varchar(100) DEFAULT NULL,
  `nombre_diplomado` varchar(100) DEFAULT NULL,
  `nombre_curso_asignatura` varchar(100) DEFAULT NULL,
  `ano_diplomado` varchar(45) DEFAULT NULL,
  `horas_diplomado` varchar(45) DEFAULT NULL,
  `area_conocimiento_diplomado` varchar(100) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_usuario_tutoria`
--

CREATE TABLE `detalle_usuario_tutoria` (
  `tipo_tutoria` varchar(45) DEFAULT NULL,
  `nivel_academico` varchar(45) DEFAULT NULL,
  `programa_educativo` varchar(100) DEFAULT NULL,
  `tipo_periodo_escolar` varchar(100) DEFAULT NULL,
  `periodo_escolar` varchar(45) DEFAULT NULL,
  `numero_estudiantes` varchar(45) DEFAULT NULL,
  `fecha_de_inicio` date DEFAULT NULL,
  `fecha_de_fin` date DEFAULT NULL,
  `tipo_de_tutelaje` varchar(45) DEFAULT NULL,
  `estado_tutoria` varchar(45) DEFAULT NULL,
  `area_conocimiento` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_usuario_tutoria`
--

INSERT INTO `detalle_usuario_tutoria` (`tipo_tutoria`, `nivel_academico`, `programa_educativo`, `tipo_periodo_escolar`, `periodo_escolar`, `numero_estudiantes`, `fecha_de_inicio`, `fecha_de_fin`, `tipo_de_tutelaje`, `estado_tutoria`, `area_conocimiento`, `usuario_idusuario`, `id`) VALUES
('Grupal', 'Licenciatura', 'ITS', 'Regular', 'Enero Junio 2019', NULL, '2019-05-01', '2019-05-24', NULL, NULL, 'Tecnologia', 1815906, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `ap_paterno` varchar(45) DEFAULT NULL,
  `ap_materno` varchar(45) DEFAULT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `curp` varchar(45) DEFAULT NULL,
  `rfc` varchar(45) DEFAULT NULL,
  `numero_cvu` varchar(45) DEFAULT NULL,
  `orcid` varchar(45) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `sexo` varchar(45) DEFAULT NULL,
  `nacionalidad` varchar(45) DEFAULT NULL,
  `ciudad_nacimiento` varchar(45) DEFAULT NULL,
  `estado_civil` varchar(45) DEFAULT NULL,
  `telefono_particular` varchar(45) DEFAULT NULL,
  `telefono_movil` varchar(45) DEFAULT NULL,
  `correo_electronico_personal` varchar(45) DEFAULT NULL,
  `correo_instititucional` varchar(45) DEFAULT NULL,
  `num_emp` varchar(45) DEFAULT NULL,
  `calle_dom` varchar(45) DEFAULT NULL,
  `numero_exterior_dom` varchar(45) DEFAULT NULL,
  `numero_interior_dom` varchar(45) DEFAULT NULL,
  `colonia_residencia` varchar(100) DEFAULT NULL,
  `pais_residencia` varchar(100) DEFAULT NULL,
  `estado_residencia` varchar(100) DEFAULT NULL,
  `codigo_postal_dom` varchar(45) DEFAULT NULL,
  `ciudad_residencia` varchar(100) DEFAULT NULL,
  `ies_adscripcion` varchar(100) DEFAULT NULL,
  `cantidad_de_ingresos` int(11) DEFAULT NULL,
  `clave` varchar(100) DEFAULT NULL,
  `tipo_usuario` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `ap_paterno`, `ap_materno`, `titulo`, `curp`, `rfc`, `numero_cvu`, `orcid`, `fecha_nacimiento`, `sexo`, `nacionalidad`, `ciudad_nacimiento`, `estado_civil`, `telefono_particular`, `telefono_movil`, `correo_electronico_personal`, `correo_instititucional`, `num_emp`, `calle_dom`, `numero_exterior_dom`, `numero_interior_dom`, `colonia_residencia`, `pais_residencia`, `estado_residencia`, `codigo_postal_dom`, `ciudad_residencia`, `ies_adscripcion`, `cantidad_de_ingresos`, `clave`, `tipo_usuario`) VALUES
(1815906, 'Rodolfo', 'Navarro', 'Calderon', 'Ingeniero en Tecnologia de Software', 'NACR990926HNLVLD02', 'NACR990926HNLVLD02', 'NACR990926HNLVLD02', 'NACR990926HNLVLD02', '1999-09-26', 'Masculino', 'Mexicana', 'Santa Catarina', 'soltero', '80447649', '8117466362', 'rodolfo.0926@hotmail.com', 'rodolfo.navarrocldrn@uanl.edu.mx', '1815906', 'Golfo de Tehuantepec', '316', '0', 'Mision de las Villas', 'Mexico', 'Nuevo Leon', '66369', 'Santa Catarina', 'Facultad de Ingenieria Mecanica y Electrica', 2, 'aa', 'admin');

--
-- �ndices para tablas volcadas
--

--
-- Indices de la tabla `convocatorias`
--
ALTER TABLE `convocatorias`
  ADD PRIMARY KEY (`nombre`);

--
-- Indices de la tabla `detalle_usuario_actualizacion_pe`
--
ALTER TABLE `detalle_usuario_actualizacion_pe`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_beneficios_externos_promep`
--
ALTER TABLE `detalle_usuario_beneficios_externos_promep`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_beneficios_promep`
--
ALTER TABLE `detalle_usuario_beneficios_promep`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_carga_academica`
--
ALTER TABLE `detalle_usuario_carga_academica`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_cuerpo_academico`
--
ALTER TABLE `detalle_usuario_cuerpo_academico`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_desarollos_tecnologicos`
--
ALTER TABLE `detalle_usuario_desarollos_tecnologicos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_desarrollo_software`
--
ALTER TABLE `detalle_usuario_desarrollo_software`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_direccion_individualizada`
--
ALTER TABLE `detalle_usuario_direccion_individualizada`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_distinciones_conacyt`
--
ALTER TABLE `detalle_usuario_distinciones_conacyt`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_distinciones_no_conacyt`
--
ALTER TABLE `detalle_usuario_distinciones_no_conacyt`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_divulgacion`
--
ALTER TABLE `detalle_usuario_divulgacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_docencia`
--
ALTER TABLE `detalle_usuario_docencia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_documentos_de_trabajo`
--
ALTER TABLE `detalle_usuario_documentos_de_trabajo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_estancias_investigacion`
--
ALTER TABLE `detalle_usuario_estancias_investigacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_evaluaciones_conacyt`
--
ALTER TABLE `detalle_usuario_evaluaciones_conacyt`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_evaluaciones_no_conacyt`
--
ALTER TABLE `detalle_usuario_evaluaciones_no_conacyt`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_experiencia_laboral`
--
ALTER TABLE `detalle_usuario_experiencia_laboral`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_gestion_academica`
--
ALTER TABLE `detalle_usuario_gestion_academica`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_gestion_cuerpos_colegiados`
--
ALTER TABLE `detalle_usuario_gestion_cuerpos_colegiados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_grados_acad`
--
ALTER TABLE `detalle_usuario_grados_acad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_grupos_investigacion`
--
ALTER TABLE `detalle_usuario_grupos_investigacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_innovacion`
--
ALTER TABLE `detalle_usuario_innovacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_lenguas_e_idiomas`
--
ALTER TABLE `detalle_usuario_lenguas_e_idiomas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_lgac`
--
ALTER TABLE `detalle_usuario_lgac`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_memorias`
--
ALTER TABLE `detalle_usuario_memorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_participacion_congresos`
--
ALTER TABLE `detalle_usuario_participacion_congresos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_patentes`
--
ALTER TABLE `detalle_usuario_patentes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_premios_y_distinciones`
--
ALTER TABLE `detalle_usuario_premios_y_distinciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_produccion_capitulos`
--
ALTER TABLE `detalle_usuario_produccion_capitulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_produccion_libros`
--
ALTER TABLE `detalle_usuario_produccion_libros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_prod_articulos`
--
ALTER TABLE `detalle_usuario_prod_articulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_prod_proyectos_academicos`
--
ALTER TABLE `detalle_usuario_prod_proyectos_academicos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_proyectos_investigacion`
--
ALTER TABLE `detalle_usuario_proyectos_investigacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_redes_investigacion`
--
ALTER TABLE `detalle_usuario_redes_investigacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_redes_tematicas_conacyt`
--
ALTER TABLE `detalle_usuario_redes_tematicas_conacyt`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_reportes_tecnicos`
--
ALTER TABLE `detalle_usuario_reportes_tecnicos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_servicios_prestados`
--
ALTER TABLE `detalle_usuario_servicios_prestados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_tesis_diplomados`
--
ALTER TABLE `detalle_usuario_tesis_diplomados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_usuario_tutoria`
--
ALTER TABLE `detalle_usuario_tutoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_actualizacion_pe`
--
ALTER TABLE `detalle_usuario_actualizacion_pe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_beneficios_externos_promep`
--
ALTER TABLE `detalle_usuario_beneficios_externos_promep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_beneficios_promep`
--
ALTER TABLE `detalle_usuario_beneficios_promep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_carga_academica`
--
ALTER TABLE `detalle_usuario_carga_academica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_cuerpo_academico`
--
ALTER TABLE `detalle_usuario_cuerpo_academico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_desarollos_tecnologicos`
--
ALTER TABLE `detalle_usuario_desarollos_tecnologicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_desarrollo_software`
--
ALTER TABLE `detalle_usuario_desarrollo_software`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_direccion_individualizada`
--
ALTER TABLE `detalle_usuario_direccion_individualizada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_distinciones_conacyt`
--
ALTER TABLE `detalle_usuario_distinciones_conacyt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_distinciones_no_conacyt`
--
ALTER TABLE `detalle_usuario_distinciones_no_conacyt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_divulgacion`
--
ALTER TABLE `detalle_usuario_divulgacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_docencia`
--
ALTER TABLE `detalle_usuario_docencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_documentos_de_trabajo`
--
ALTER TABLE `detalle_usuario_documentos_de_trabajo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_estancias_investigacion`
--
ALTER TABLE `detalle_usuario_estancias_investigacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_evaluaciones_conacyt`
--
ALTER TABLE `detalle_usuario_evaluaciones_conacyt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_evaluaciones_no_conacyt`
--
ALTER TABLE `detalle_usuario_evaluaciones_no_conacyt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_experiencia_laboral`
--
ALTER TABLE `detalle_usuario_experiencia_laboral`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_gestion_academica`
--
ALTER TABLE `detalle_usuario_gestion_academica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_gestion_cuerpos_colegiados`
--
ALTER TABLE `detalle_usuario_gestion_cuerpos_colegiados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_grados_acad`
--
ALTER TABLE `detalle_usuario_grados_acad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_grupos_investigacion`
--
ALTER TABLE `detalle_usuario_grupos_investigacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_innovacion`
--
ALTER TABLE `detalle_usuario_innovacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_lenguas_e_idiomas`
--
ALTER TABLE `detalle_usuario_lenguas_e_idiomas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_lgac`
--
ALTER TABLE `detalle_usuario_lgac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_memorias`
--
ALTER TABLE `detalle_usuario_memorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_participacion_congresos`
--
ALTER TABLE `detalle_usuario_participacion_congresos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_patentes`
--
ALTER TABLE `detalle_usuario_patentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_premios_y_distinciones`
--
ALTER TABLE `detalle_usuario_premios_y_distinciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_produccion_capitulos`
--
ALTER TABLE `detalle_usuario_produccion_capitulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_produccion_libros`
--
ALTER TABLE `detalle_usuario_produccion_libros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_prod_articulos`
--
ALTER TABLE `detalle_usuario_prod_articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_prod_proyectos_academicos`
--
ALTER TABLE `detalle_usuario_prod_proyectos_academicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_proyectos_investigacion`
--
ALTER TABLE `detalle_usuario_proyectos_investigacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_redes_investigacion`
--
ALTER TABLE `detalle_usuario_redes_investigacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_redes_tematicas_conacyt`
--
ALTER TABLE `detalle_usuario_redes_tematicas_conacyt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_reportes_tecnicos`
--
ALTER TABLE `detalle_usuario_reportes_tecnicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_servicios_prestados`
--
ALTER TABLE `detalle_usuario_servicios_prestados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_tesis_diplomados`
--
ALTER TABLE `detalle_usuario_tesis_diplomados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_usuario_tutoria`
--
ALTER TABLE `detalle_usuario_tutoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;