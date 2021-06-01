<?php
/* SOLID - Interface Segregation - As interfaces devem ser específicas, para evitar que
possuam métodos ou atributos que não sejam utilizados por 1 ou mais classes que a 
implementam. */

// EXEMPLO 1 - FORMA INCORRETA

interface InterfaceImportaArquivo {
    function abreArquivoParaLeitura();
    function defineSeparadorDeColunas();
    function defineQtdColunas();
    function checaQtdColunas();
}

class ImportaCsv implements InterfaceImportaArquivo {}

class ImportaJson implements InterfaceImportaArquivo {}
// Os 3 últimos métodos da interface não fazem sentido algum pra essa classe

// EXEMPLO 1 - FORMA CORRETA

interface InterfaceImportaArquivo {
    function abreArquivoParaLeitura();
}

interface InterfaceImportaCsv {
    function defineSeparadorDeColunas();
    function defineQtdColunas();
    function checaQtdColunas();
}

interface InterfaceImportaJson {
    function checaFormatoJson();
}

class ImportaCsv implements InterfaceImportaArquivo, InterfaceImportaCsv {}

class ImportaJson implements InterfaceImportaArquivo, InterfaceImportaJson {}