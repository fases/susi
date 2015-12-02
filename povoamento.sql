# Faz o povoamento inicial das tabelas

USE susi;

# Povoamento dos campi
INSERT INTO campuses(name) VALUES ('Apodi');
INSERT INTO campuses(name) VALUES ('Caicó');
INSERT INTO campuses(name) VALUES ('Canguaretama');
INSERT INTO campuses(name) VALUES ('Ceará-Mirim');
INSERT INTO campuses(name) VALUES ('Currais Novos');
INSERT INTO campuses(name) VALUES ('Ipanguaçu');
INSERT INTO campuses(name) VALUES ('João Câmara');
INSERT INTO campuses(name) VALUES ('Lajes');
INSERT INTO campuses(name) VALUES ('Macau');
INSERT INTO campuses(name) VALUES ('Mossoró');
INSERT INTO campuses(name) VALUES ('Natal - Central');
INSERT INTO campuses(name) VALUES ('Natal - Cidade Alta');
INSERT INTO campuses(name) VALUES ('Natal - Zona Norte');
INSERT INTO campuses(name) VALUES ('Nova Cruz');
INSERT INTO campuses(name) VALUES ('Parelhas');
INSERT INTO campuses(name) VALUES ('Parnamirim');
INSERT INTO campuses(name) VALUES ('Pau dos Ferros');
INSERT INTO campuses(name) VALUES ('Santa Cruz');
INSERT INTO campuses(name) VALUES ('São Gonçalo do Amarante');
INSERT INTO campuses(name) VALUES ('São Paulo do Potengi');

# Povoamento dos tipos de usuário
INSERT INTO user_types(name) VALUES ('Administrador');