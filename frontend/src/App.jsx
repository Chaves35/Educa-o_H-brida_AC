import React, { useState } from 'react';
import Login from './Login.jsx';
import Register from './Register.jsx';
import './App.css';

// O componente App é o ponto de entrada da nossa aplicação.
// Ele gerencia o estado da página atual para alternar entre
// os componentes de Login e Register.
function App() {
  const [currentPage, setCurrentPage] = useState('login');

  const renderPage = () => {
    if (currentPage === 'login') {
      return <Login />;
    }
    if (currentPage === 'register') {
      return <Register />;
    }
    // Podemos adicionar mais páginas aqui no futuro
    return <Login />; // Página padrão
  };

  return (
    <div className="min-h-screen bg-gray-100 flex flex-col items-center justify-center p-4">
      {/* Container principal para os componentes e botões de navegação */}
      {renderPage()}
      
      {/* Botões para alternar entre as páginas de Login e Register */}
      <div className="mt-4 text-center">
        {currentPage === 'login' ? (
          <button
            className="text-sm text-indigo-600 hover:text-indigo-500 font-medium"
            onClick={() => setCurrentPage('register')}
          >
            Não tem uma conta? Registre-se aqui.
          </button>
        ) : (
          <button
            className="text-sm text-indigo-600 hover:text-indigo-500 font-medium"
            onClick={() => setCurrentPage('login')}
          >
            Já tem uma conta? Entre aqui.
          </button>
        )}
      </div>
    </div>
  );
}

export default App;
