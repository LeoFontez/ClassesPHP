<?php

// Inclui o arquivo de estilos CSS (Importação)
include __DIR__ . '/styles.php';

echo '<h1>Funções em PHP</h1>';
echo '<h2>Definição de uma função</h2>';

echo '<pre>';
print_r(
    '
    function nome([parametros...]{
        return ...
    }
    '
);
echo '</pre>';

// Definir uma função que receba dois valores e retorne
//  a soma entre eles: soma(valor1, valor2)
function soma($valor1, $valor2)
{
    return $valor1 + $valor2;
}

echo '<pre>';
print_r(soma(10, 20));
echo '</pre>';

// Manipulação de Strings
echo '<h2>Funções de texto (String)</h2>';

$texto = 'Hoje o dia está frio, vou comer maçã.';

# qual o tamanho do texto
echo '<h3>strlen(string)</h3>';
echo '<pre>';
print_r(strlen($texto));
echo '</pre>';

echo '<pre>';
var_dump($texto);
echo '</pre>';

# transformar em maiúsculas
echo '<h3>strtoupper(string)</h3>';
echo '<pre>';
print_r(strtoupper($texto));
echo '</pre>';

# transformar em maiúsculas caracteres especiais UTF-8
echo '<h3>mb_strtoupper(string)</h3>';
echo '<pre>';
print_r(mb_strtoupper($texto));
echo '</pre>';

# transformar em minúsculas caracteres especiais UTF-8
echo '<h3>mb_strtolower(string)</h3>';
echo '<pre>';
print_r(mb_strtolower($texto));
echo '</pre>';

####
$texto = '  Esse mês está frio.  ';
echo '<pre>';
var_dump($texto);
echo '</pre>';

### Removendo espaços desnecessários
# extremos - trim()
# direita - rtrim()
# esquerda - ltrim()

echo '<h3>ltrim()</h3>';
echo '<pre>';
var_dump(ltrim($texto));
echo '</pre>';

echo '<h3>rtrim()</h3>';
echo '<pre>';
var_dump(rtrim($texto));
echo '</pre>';

echo '<h3>trim()</h3>';
echo '<pre>';
var_dump(trim($texto));
echo '</pre>';

##$
echo '<hr>';

echo '<h2>Manipulação de dados (String) </h2>';
echo '<h3>Substituição</h3>';

#str_replace(valor_procurado, valor_a_substituir, $variavel)
$texto = 'Esta noite está muito quente.';

echo '<pre>';
print_r("Antes\n");
var_dump($texto);
print("Depois\n");
var_dump(str_replace('quente','fria',$texto));
echo '</pre>';

# Substituindo mais de uma palavra
$palavra = 'Amanhã é um novo dia.'; # Hoje é um velho dia.

echo '<pre>';
var_dump(str_replace(['Amanhã', 'novo'], ['Hoje, velho'], $palavra));
echo '</pre>';

echo '<h3>String para arrays</h3>';
$texto = "Leo Fontes";

echo '<pre>';
print_r(str_split($texto));
echo '</pre>';

echo '<h3>String para arrays (critério)</h3>';
echo '<pre>';
print_r(explode(' ', $texto));
echo '</pre>';

echo '<hr>';

echo '<h1>Classes e Métodos</h1>';

echo '<pre>';
print_r(
    '
    class Classe{
    //atributos
    //métodos getters e setters
    //métodos comportamentais (verbos)
        //são declarados como as funções
    }
    '
);
echo '</pre>';

echo '<h3>Classe Aluno</h3>';

class Aluno{
    //atributos
    private $nome;
    private static $curso;

    //getters e setters
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public static function setCurso($curso){
        self::$curso = $curso;
    }

    public static function getCurso(){
        return self::$curso;
    }
}

#Instanciando uma classe
$aluno = new Aluno();
$aluno->setNome('Leo Fontes');
$aluno::setCurso("Sistemas de Informação");

echo '<pre>';
print_r($aluno->getNome());
print_r("\n");
print_r($aluno::getCurso());
echo '</pre>';

# Acessando por métodos estáticos

Aluno::setCurso('Ciência da Computação');
echo '<pre>';
print_r(Aluno::getCurso());
echo '</pre>';

echo '<h3>';
echo <<< EOT
        Desenvolver uma "classe" que implemente as seguintes operações:
        somar, subtrair, multiplicar e dividir.

        Também implementar um método para verificar se um número informado é par ou impar.

        * Os métodos aritméticos devem receber apenas dois valores
        * O desafio é que os métodos somar() e multiplicar() possam receber "n" valores.
        EOT;
echo '</h3>';