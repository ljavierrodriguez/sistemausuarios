DROP TABLE IF EXISTS user_roles;
DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS roles;

CREATE TABLE roles (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(50) not null,
  PRIMARY KEY (id)
)ENGINE = InnoDB;

CREATE TABLE users (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(50) not null,
  email varchar(60) not null,
  phone varchar(20) not null,
  age int(4) not null,
  PRIMARY KEY (`id`)
)ENGINE = InnoDB;

CREATE TABLE user_roles (
  user_id int(11) NOT NULL,
  role_id int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
)ENGINE = InnoDB;


INSERT INTO roles (`name`) values ('Administrador'), ('Supervisor'), ('Vigilante');

INSERT INTO users (`name`, `email`, `phone`, `age`) values ('Luis Rodriguez', 'ljavierrodriguez@gmail.com', '+584129957285', '35');

INSERT INTO user_roles (`user_id`, `role_id`) values (1,1), (1,2);