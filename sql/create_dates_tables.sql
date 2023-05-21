CREATE TABLE Dates (
  date_id INT PRIMARY KEY AUTO_INCREMENT,
  date DATE,
  place_name VARCHAR(255) NOT NULL,
  description VARCHAR(255),
  website VARCHAR(255),
  google_maps_url VARCHAR(255)
);

CREATE TABLE Reviews (
  review_id INT PRIMARY KEY AUTO_INCREMENT,
  date_id INT,
  reviewer_name VARCHAR(255) NOT NULL,
  rating INT,
  review TEXT,
  FOREIGN KEY (date_id) REFERENCES Dates(date_id)
);
