

CREATE TABLE `biologia`.`aluno` ( 
    `id_aluno` INT NOT NULL AUTO_INCREMENT , 
    `nome_aluno` VARCHAR(200) NOT NULL , 
    `email_aluno` VARCHAR(200) NOT NULL , 
    `senha_aluno` VARCHAR(32) NOT NULL , 
    `foto_aluno` VARCHAR(200) NOT NULL , 
    `data_cadastro2` DATETIME NOT NULL , 
    PRIMARY KEY (`id_aluno`, `email_aluno`)) ENGINE = InnoDB;