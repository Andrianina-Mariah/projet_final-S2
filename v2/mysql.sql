CREATE DATABASE emprunt_exam_s2;
CREATE TABLE emprunt_membre (
    id_membre INT NOT NULL AUTO_INCREMENT,
    nom VARCHAR(140) NOT NULL,
    date_de_naissance DATE NOT NULL,
    genre  VARCHAR(10)  NOT NULL,
    email VARCHAR(200) NOT NULL,
    ville VARCHAR(200) NOT NULL,
    mdp VARCHAR(200) NOT NULL,
    image_profil VARCHAR(200) NOT NULL,
    PRIMARY KEY (id_membre)
);

CREATE TABLE emprunt_categorie_objet (
    id_categorie INT NOT NULL AUTO_INCREMENT,
    nom_categorie VARCHAR(100) NOT NULL,
    PRIMARY KEY (id_categorie)
);

CREATE TABLE emprunt_objet (
    id_objet INT NOT NULL AUTO_INCREMENT,
    nom_objet VARCHAR(140) NOT NULL,
    id_categorie INT NOT NULL,
    id_membre INT NOT NULL,
    PRIMARY KEY (id_objet),
    FOREIGN KEY (id_categorie) REFERENCES emprunt_categorie_objet(id_categorie),
    FOREIGN KEY (id_membre) REFERENCES emprunt_membre(id_membre)
);

CREATE TABLE emprunt_images_objet (
    id_image INT NOT NULL AUTO_INCREMENT,
    id_objet INT NOT NULL,
    nom_image VARCHAR(200) NOT NULL,
    PRIMARY KEY (id_image),
    FOREIGN KEY (id_objet) REFERENCES emprunt_objet(id_objet)
);

CREATE TABLE emprunt_emprunt (
    id_emprunt INT NOT NULL AUTO_INCREMENT,
    id_objet INT NOT NULL,
    id_membre INT NOT NULL,
    date_emprunt DATE NOT NULL,
    date_retour DATE,
    PRIMARY KEY (id_emprunt),
    FOREIGN KEY (id_objet) REFERENCES emprunt_objet(id_objet),
    FOREIGN KEY (id_membre) REFERENCES emprunt_membre(id_membre)
);

INSERT INTO emprunt_membre (nom, date_de_naissance, genre, email, ville, mdp, image_profil) VALUES
('Alice Dupont', '1990-05-15', 'F', 'alice@example.com', 'Paris', 'mdp123', '../assets/bootstrap-icons/icons/person-fill.svg'),
('Bob Martin', '1985-08-20', 'M', 'bob@example.com', 'Lyon', 'mdp456', '../assets/bootstrap-icons/icons/person-fill.svg'),
('Claire Bernard', '1992-12-30', 'F', 'claire@example.com', 'Marseille', 'mdp789', '../assets/bootstrap-icons/icons/person-fill.svg'),
('David Lefevre', '1988-03-10', 'M', 'david@example.com', 'Toulouse', 'mdp101', '../assets/bootstrap-icons/icons/person-fill.svg');

INSERT INTO emprunt_categorie_objet (nom_categorie) VALUES
('Esthétique'),
('Bricolage'),
('Mécanique'),
('Cuisine');

INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre) VALUES
('Rouge à lèvres', 1, 1),
('Pince à épiler', 1, 1),
('Scie', 2, 2),
('Perceuse', 2, 2),
('Clé à molette', 3, 3),
('Tournevis', 3, 3),
('Casserole', 4, 4),
('Fouet', 4, 4),
('Mélangeur', 4, 1),
('Tasse', 4, 2),
('Brosse à cheveux', 1, 3),
('Règle', 2, 4),
('Huile moteur', 3, 1),
('Couteau', 4, 2),
('Miroir', 1, 3),
('Marteau', 2, 4),
('Pantalon', 1, 1),
('Chaise', 2, 2),
('Table', 3, 3),
('Lampe', 4, 4);

INSERT INTO emprunt_emprunt (id_objet, id_membre, date_emprunt, date_retour) VALUES
(1, 1, '2023-10-01', '2023-10-10'),
(2, 2, '2023-10-02', '2023-10-12'),
(3, 3, '2023-10-03', '2023-10-13'),
(4, 4, '2023-10-04', '2023-10-14'),
(5, 1, '2023-10-05', '2023-10-15'),
(6, 2, '2023-10-06', '2023-10-16'),
(7, 3, '2023-10-07', '2023-10-17'),
(8, 4, '2023-10-08', '2023-10-18'),
(9, 1, '2023-10-09', '2023-10-19'),
(10, 2, '2023-10-10', '2023-10-20');




CREATE OR REPLACE VIEW v_emprunt_objet AS
SELECT 
    o.id_objet,
    o.nom_objet,
    o.id_categorie,
    o.id_membre,
    e.id_emprunt,
    e.date_emprunt,
    e.date_retour
FROM 
    emprunt_objet o
LEFT JOIN 
    emprunt_emprunt e ON e.id_emprunt = (
        SELECT e2.id_emprunt
        FROM emprunt_emprunt e2
        WHERE e2.id_objet = o.id_objet
        ORDER BY e2.date_emprunt DESC
        LIMIT 1
    );

