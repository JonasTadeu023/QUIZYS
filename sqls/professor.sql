CREATE TABLE `biologia`.`professor` ( 
    `id_proff` INT NOT NULL AUTO_INCREMENT , 
    `nome_proff` VARCHAR(200) NOT NULL , 
    `email_proff` VARCHAR(200) NOT NULL , 
    `senha_proff` VARCHAR(32) NOT NULL , 
    `disciplina_proff` VARCHAR(200) NOT NULL , 
    `escola_proff` VARCHAR(200) NOT NULL , 
    `foto_proff` VARCHAR(200) NOT NULL , 
    `data_cadastro` DATETIME NOT NULL , 
    PRIMARY KEY (`id_proff`, `email_proff`)) ENGINE = InnoDB;