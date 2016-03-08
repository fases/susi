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
INSERT INTO user_types(name) VALUES ('Médico');
INSERT INTO user_types(name) VALUES ('Enfermeira');
INSERT INTO user_types(name) VALUES ('Administrador');

# Povoamento dos tipos de indicadores
INSERT INTO indicator_types(name) VALUES ('Carência');
INSERT INTO indicator_types(name) VALUES ('Excedência');

# Povoamento dos tipos de itens
INSERT INTO item_types(name) VALUES ('Medicamento');
INSERT INTO item_types(name) VALUES ('Equipamento');
INSERT INTO item_types(name) VALUES ('Outros');

# Povoamento dos tipos de itens
INSERT INTO item_types(name) VALUES ('Adição');
INSERT INTO item_types(name) VALUES ('Subtração');

# Usuário inicial de acesso
# Recomendável excluí-lo via banco de dados após terminar de usá-lo.
INSERT INTO users(name, email, password, cpf, phone, user_type_id, campus_id) VALUES('Admin', 'admin@susi.com', '$2a$10$Liwn8zx3WbOLun.k3r8rouY3vq4u5nfFNNeiXVdPzZZCSGo25RzTC', '123.123.123', '1234-1234', 3, 1);
