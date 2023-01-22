DROP TABLE IF EXISTS places;

CREATE TABLE places (
  id SERIAL PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  visited INTEGER NOT NULL DEFAULT 0
);

INSERT INTO places (name, visited) VALUES ('Berlin',0), ('Budapest',0), ('Cincinnati',1), ('Denver',0), ('Helsinki',0), ('Lisbon',0), ('Moscow',1), ('Nairobi',0), ('Oslo',1), ('Rio',0), ('Tokyo',0);
