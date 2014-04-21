

DROP TABLE IF EXISTS "main"."backup";
DROP TABLE IF EXISTS "main"."noticias";
DROP TABLE IF EXISTS "main"."servicio_backup";
DROP TABLE IF EXISTS "main"."servicio_backup_usuario";
DROP TABLE IF EXISTS "main"."usuarios";


CREATE TABLE "main"."backup" (
	"id_backup" integer primary key autoincrement,
	"servicio_backup_id" integer(20) NOT NULL,
	"usuario_id" integer(20) NOT NULL,
	"fecha" datetime NOT NULL,
	"tamano" integer(20) DEFAULT 0 NOT NULL,
	"archivo_db" varchar(255) NOT NULL,
	"archivo_est" varchar(255) DEFAULT NULL,
	"archivo_pref" varchar(255) DEFAULT NULL);
	CREATE INDEX "main"."backup_servicio_backup_id" ON "backup"("servicio_backup_id");
	CREATE INDEX "main"."backup_usuario_id" ON "backup"("usuario_id");

CREATE TABLE "main"."noticias" (
	"id_noticia" integer primary key autoincrement,
	"titulo" text NOT NULL,
	"contenido" text NOT NULL,
	"publicada" boolean NOT NULL,
	"fecha" datetime NOT NULL);
	

CREATE TABLE "main"."servicio_backup" (
	"id_servicio_backup" integer primary key autoincrement,
	"id_servicio" integer(20) NOT NULL,
	"fecha_alta" date DEFAULT NULL,
	"limite_cantidad" integer NOT NULL,
	"limite_espacio" integer NOT NULL);
	

CREATE TABLE "main"."servicio_backup_usuario" (
	"id_servicio_backup" integer primary key autoincrement,
	"id_usuario" integer primary key autoincrement,
	"suspendido" boolean NOT NULL,
	"codigo" varchar(255) NOT NULL,
	"cantidad" integer DEFAULT 0 NOT NULL,
	"espacio" integer(20) DEFAULT 0 NOT NULL);
	CREATE INDEX "main"."servicio_backup_usuario_id_usuario" ON "servicio_backup_usuario"("id_usuario");

CREATE TABLE "main"."usuarios" (
	"id_usuario" integer primary key autoincrement,
	"contra" text NOT NULL,
	"ultimo_acceso" datetime DEFAULT NULL,
	"ultimo_backup" datetime DEFAULT NULL,
	"cliente_id" integer(20) NOT NULL,
	"email" varchar(255) NOT NULL);
	

