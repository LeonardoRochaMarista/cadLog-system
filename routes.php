<?php

// Inclui arquivos de controlador necessários para lidar com diferentes ações
require 'controllers/AuthController.php'; // Inclui o controlador de autenticação
require 'controllers/UserController.php'; // Inclui o controlador de usuários
require 'controllers/DashboardController.php'; // Inclui o controlador do dashboard

// Cria instâncias dos controladores para utilizar seus métodos
$authController = new AuthController(); // Instancia o controlador de autenticação
$userController = new UserController(); // Instancia o controlador de usuários
$dashboardController = new DashboardController(); // Instancia o controlador do dashboard

// Coleta a ação da URL, se não houver ação definida, usa 'login' como padrão
$action = $_GET['action'] ?? 'login'; // Usa o operador de coalescência nula (??) para definir 'login' se 'action' não estiver presente

// Verifica a ação solicitada e chama o método apropriado do controlador
switch ($action) {
    
}
