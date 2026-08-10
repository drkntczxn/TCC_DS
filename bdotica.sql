CREATE DATABASE BDOTICA;
USE BDOTICA;

CREATE TABLE TBFUNCIONARIO (
    ID_FUNC INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    NOMEFUNC VARCHAR(30) NOT NULL, 
    CPFFUNC VARCHAR(14),
    LOGINFUNC VARCHAR(40),
    SENHAFUNC VARCHAR(20),
    UNIQUE (CPFFUNC, LOGINFUNC)
);

CREATE TABLE TBADMINISTRADOR (
    ID_ADM INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    NOMEADM VARCHAR(30) NOT NULL,
    CPFADM VARCHAR(14) UNIQUE,
    LOGINADM VARCHAR(40) NOT NULL UNIQUE,
    SENHAADM VARCHAR(20) NOT NULL,
    EMAILADM VARCHAR(40),
    TELEFONE VARCHAR(20)
);

CREATE TABLE TBCLIENTE (
    ID_CLI INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    NOMECLI VARCHAR(30) NOT NULL,
    CPFCLI VARCHAR(14) UNIQUE,
    RUA VARCHAR(30),
    CEP VARCHAR(8),
    BAIRRO VARCHAR(40),
    NUMERO VARCHAR(5),
    TELEFONE VARCHAR(20),
    CIDADE VARCHAR(40),
    EMAIL VARCHAR(40)
);

CREATE TABLE TBLOGIN (
    ID_CLI INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    NOMECLI VARCHAR(30) NOT NULL,
    CPFCLI VARCHAR(14) UNIQUE,
    LOGINCLI VARCHAR(40),
    SENHACLI VARCHAR(20)
);

CREATE TABLE TBPRODUTO(
    ID_PROD INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
     MARCA VARCHAR(30), 
     FORMATO VARCHAR(30), 
    CATEGORIA VARCHAR(14),
     TIPO VARCHAR(30), 
    PRECO VARCHAR(40)
);
/*MODELO=MATERIAL,FORMATO,GENERO*/
/*CATEGORIA GRAU, SOL*/

CREATE TABLE TBFORNECEDOR (
    ID_FORN INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    NOMEFORN VARCHAR(30) NOT NULL,
    TELFORN VARCHAR(20)
);

CREATE TABLE TBPEDIDO (
    ID_PED INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    DATA_PED DATE,
    DATA_ENTREGA DATE,
    TOTAL_PED DECIMAL(10,2),
    QTD_ITEM INT,
    COD_ITEM INT,
    COD_PED INT,
    COD_FUNC INT,
    COD_CLI INT,
    COD_PROD INT,
    FOREIGN KEY (COD_CLI) REFERENCES TBCLIENTE(ID_CLI),
    FOREIGN KEY (COD_PROD) REFERENCES TBPRODUTO(ID_PROD),
    FOREIGN KEY (COD_FUNC) REFERENCES TBFUNCIONARIO(ID_FUNC)
) ENGINE=INNODB;


/*Inserindo Dados*/


INSERT INTO TBPRODUTO (MARCA, FORMATO, CATEGORIA, TIPO, PRECO) VALUES
('Ray Ban', 'Aviador', 'feminino', 'oculos de sol', 200.00),
('Grazi', 'Redondo', 'feminino', 'oculos de sol', 150.00),
('Sabrina Sato', 'Gatinho', 'feminino', 'armação', 200.00),
('Sem marca', 'Anti_ref', 'unissex', 'Lente', 80.00),
('Vogue', 'Quadrado', 'feminino', 'óculos de sol', 250.00),
('Fany', 'Oval', 'masculino', 'Armação', 190.00),
('Oakley', 'Redondo', 'masculino', 'oculos de sol', 275.90),
('Vogue', 'Gatinho', 'feminino', 'Armação', 290.00),
('Sem marca', 'Lente Azul', 'unissex', 'Lente', 80.00),
('Sem marca', 'Transitions', 'unissex', 'Lente', 80.00),
('Fany', 'Redondo', 'feminino', 'Armação', 190.00),
('Fany', 'Quadrado', 'feminino', 'Armação', 170.00),   
('Ray Ban', 'Quadrado', 'feminino', 'Armação', 200.00),
('Grazi', 'Gatinho', 'feminino', 'oculos de sol', 150.00),
('Polaroid', 'Oval', 'feminino', 'Armação', 199.00),
('Ana Hickman', 'Gatinho', 'feminino', 'óculos de sol', 200.00);


/*SELECT COUNT(*) AS QTD_VENDAS, SUM(TOTAL_PED) AS TOTAL_FATURADO
FROM TBPEDIDO
WHERE DATA_PED BETWEEN CURDATE() - INTERVAL 7 DAY AND CURDATE();*/






