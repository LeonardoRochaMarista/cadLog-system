# Projeto Cadastro/Login - Sistema de usuários [BASE]

Esse projeto é base para aula de programação, utilizando as tecnologias mencionadas [aqui](#tecnologias-utilizadas).
Nessa aplicação, está a base para o estudo de implementação de sistema de cadastro de usuários. Esse cadastro leva em consideração informações básicas como: nome, e-mail, senha e perfil. Esse último, pode ser:
* Admin - Esse perfil pode realizar operações de consulta, exclusão e atualização de dados de usuários
* Gestor - Esse perfil pode realizar operações de consulta e atualização de dados de usuários
* Colaborador - Esse perfil pode apenas visualizar dados de usuários, ou seja, consulta. 

## Arquitetura de software

Para implementar essa aplicação, está sendo utilizada a arquitetura MVC como base do projeto. Nessa arquitetura, as camadas a seguir, apresentam as seguintes características:

* ``VIEW`` - Camada que contem arquivos que exibem dados ao usuário. 
* ``CONTROLLER`` - Camada que contem arquivos que interpretam dados do usuário e atualizam Model e View.
* ``MODEL`` - - Camada que gerencia dados e lógica de negócio. É a camada responsável pela comunicação com banco de dados.

Mais informações sobre a arquitetura, pode ser vista no arquivo [Arquitetura de Software](Arquitetura_Software.pdf)
## Tecnologias utilizadas

- HTML5
- CSS3
- Javascript
- PHP 8
