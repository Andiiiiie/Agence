CREATE DATABASE Agence;
\c Agence;
CREATE TABLE "Habitations"
(
    "idHabitation" SERIAL PRIMARY KEY,
    "type" TEXT,
    "nbChambre" int,
    "loyer" DOUBLE PRECISION,
    "quartier" TEXT,
    "description" TEXT
);

CREATE TABLE "Clients"
(
    "idClient" SERIAL PRIMARY KEY,
    "email" TEXT,
    "nom" TEXT,
    "mot_de_passe" TEXT,
    "num_tel" TEXT
);

CREATE TABLE "Admin"
(
    "idAdmin" SERIAL PRIMARY KEY,
    "email" TEXT,
    "nom" TEXT,
    "mot_de_passe" TEXT,
    "num_tel" TEXT
);

SELECT
  to_char(created_at, 'Month YYYY') AS Month,
  count(DISTINCT id)
FROM
  selections
WHERE
  date_part('year', created_at) = 2022
GROUP BY
  date_part('month', created_at),
  to_char(created_at, 'Month YYYY')
ORDER BY
  date_part('month', created_at);

  
CREATE TABLE "Photos"
(
    "idPhoto" SERIAL PRIMARY KEY,
    "lieu" BIGINT REFERENCES "Habitations"("idHabitation"),
    "source" TEXT
);

CREATE TABLE "Reservations"
(
    "idReservation" SERIAL PRIMARY KEY,
    "debut" DATE,
    "fin" DATE,
    "idClient" BIGINT REFERENCES "Clients"("idClient"),
    "idHabitation" BIGINT REFERENCES "Habitations"("idHabitation")
);

--select * from "Reservations" where '2022-12-15' between debut and fin or '2022-12-17' between debut and fin ;



--otrzao no atao
INSERT INTO "Habitations"  VALUES(
    default,'maison',4,120,'Anosy','Une maison familiale avec 4 chambre, une cuisine et une salle à manger ainsi qu un salon et salle de bain et toilette.
    Elle comprend une terrasse avec vue sur le lac.'
);

INSERT INTO "Clients" VALUES(
    default,'mail4@gmail.com','Naivo','mdp4','0331649200'
);

INSERT INTO "Photos" VALUES(
    default,1,'image.jpg'
);



--RETO AMZAY OVAINA
INSERT INTO habitation (type,nbChambre,loyer,quartier,description) VALUES(
    'maison','4','120','Anosy','Une maison familiale avec 4 chambre, une cuisine et une salle à manger ainsi qu un salon et salle de bain et toilette.
    Elle comprend une terrasse avec vue sur le lac.'
);
INSERT INTO habitation (type,nbChambre,loyer,quartier,description) VALUES(
    'studio','2','50','Analakely','Un studio pour étudiants avec 2 chambres, une cuisine ainsi qu une salle de bain et toilette. Un endroit parfait si vous etudiez aux
    alentours d Analakely.'
);
INSERT INTO habitation (type,nbChambre,loyer,quartier,description) VALUES(
    'appartement','3','100','Ankorondrano','Un appartement avec 3 chambres prêt de la tour Orange. Fait pour les étudiants ou salariés travaillant dans le quartier
    d Akorondrano.'
);
INSERT INTO habitation (type,nbChambre,loyer,quartier,description) VALUES(
    'villa','6','1500','Ambatobe','Une villa avec 6 chambres dans le quartier d Ambatobe à quelques minutes du lycée français.'
);
INSERT INTO habitation (type,nbChambre,loyer,quartier,description) VALUES(
    'bungalow','2','850','Nosy Be','Un bungalow de 2 pieces avec vue sur mer.'
);
INSERT INTO habitation (type,nbChambre,loyer,quartier,description) VALUES(
    'maison','5','1300','Majunga','Une maison de vacances avec 5 chambres en centre ville à Majunga.'
);
INSERT INTO habitation (type,nbChambre,loyer,quartier,description) VALUES(
    'studio','1','40','Ankadifotsy','Un studio pas cher pour étudiant travaillant aux alentours d Ankadifotsy.'
);
INSERT INTO habitation (type,nbChambre,loyer,quartier,description) VALUES(
    'villa','6','2500','Tulear','Une villa avec 6 chambres ainsi qu une piscine, mais aussi entourée de dunes de sables blancs et à quelques pas de la mer.'
);
INSERT INTO habitation (type,nbChambre,loyer,quartier,description) VALUES(
    'appartement','4','300','Andohalo','Un appartement avec 4 chambres à Andohalo avec vu panoramique sur la ville d Antananarivo.'
);

INSERT INTO client (email,nom,mot_de_passe,num_tel) VALUES(
    'mail1@gmail.com','Rakoto','mdp1','0332045062'
);
INSERT INTO client (email,nom,mot_de_passe,num_tel) VALUES(
    'mail2@gmail.com','Andria','mdp2','0346041783'
);
INSERT INTO client (email,nom,mot_de_passe,num_tel) VALUES(
    'mail3@gmail.com','Jean','mdp3','0325236984'
);
INSERT INTO client (email,nom,mot_de_passe,num_tel) VALUES(
    'mail4@gmail.com','Naivo','mdp4','0331649200'
);

INSERT INTO admin VALUES(
    'tsika@gmail.com','Tsika','Tsika3','0345264591'
);

INSERT INTO photo (nom) VALUES(
    ''
);